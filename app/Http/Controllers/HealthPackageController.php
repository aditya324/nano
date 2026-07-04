<?php

namespace App\Http\Controllers;

use App\Models\HealthPackage;

class HealthPackageController extends Controller
{
    // LIST PAGE
    public function index()
    {
        $packages = HealthPackage::orderBy('name')->paginate(12);

        return view('healthpackages.index', compact('packages'));
    }

    // DETAIL PAGE
    public function show($slug)
    {
        $healthPackage = HealthPackage::where('slug', $slug)
            ->with('sections.items') // 🔥 load section items
            ->firstOrFail();

        $relatedPackages = HealthPackage::where('id', '!=', $healthPackage->id)
            ->inRandomOrder()
            ->limit(4)
            ->get();




        return view('healthpackages.show', compact('healthPackage', 'relatedPackages'));
    }
}
