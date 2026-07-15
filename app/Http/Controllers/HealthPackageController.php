<?php

namespace App\Http\Controllers;

use App\Models\HealthPackage;
use App\Services\ContentCache;
use Illuminate\Http\Request;

class HealthPackageController extends Controller
{
    public function __construct(
        private readonly ContentCache $contentCache,
    ) {}

    public function index(Request $request)
    {
        $page = max(1, (int) $request->input('page', 1));

        $packages = $this->contentCache->remember(
            'packages:index:p'.$page,
            ContentCache::TTL_SHORT,
            fn () => HealthPackage::orderBy('name')->paginate(12)
        );

        return view('healthpackages.index', compact('packages'));
    }

    public function show($slug)
    {
        $payload = $this->contentCache->remember(
            'package:'.$slug,
            ContentCache::TTL_MEDIUM,
            function () use ($slug) {
                $healthPackage = HealthPackage::where('slug', $slug)
                    ->with('sections.items')
                    ->firstOrFail();

                $relatedPackages = HealthPackage::where('id', '!=', $healthPackage->id)
                    ->inRandomOrder()
                    ->limit(4)
                    ->get();

                return compact('healthPackage', 'relatedPackages');
            }
        );

        return view('healthpackages.show', $payload);
    }
}
