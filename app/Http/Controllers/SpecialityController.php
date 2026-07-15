<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use App\Services\ContentCache;

class SpecialityController extends Controller
{
    public function __construct(
        private readonly ContentCache $contentCache,
    ) {}

    /**
     * Show all specialities
     */
    public function index()
    {
        $specialities = $this->contentCache->remember(
            'specialities:index',
            ContentCache::TTL_MEDIUM,
            function () {
                return Speciality::orderBy('name')->get()->map(function ($s) {
                    return [
                        'title' => $s->name,
                        'shortTitle' => str_replace(' ', '<br/>', $s->name),
                        'image' => $s->icon
                            ? asset('storage/'.$s->icon)
                            : asset('assets/specialities/default.webp'),
                        'desc' => $s->about_intro,
                        'url' => route('specialities.show', $s->slug),
                    ];
                });
            }
        );

        return view('specialities.index', compact('specialities'));
    }

    /**
     * Show single speciality page
     */
    public function show($slug)
    {
        $speciality = $this->contentCache->remember(
            'speciality:'.$slug,
            ContentCache::TTL_MEDIUM,
            fn () => Speciality::with('faqs')->where('slug', $slug)->firstOrFail()
        );

        return view('specialities.show', compact('speciality'));
    }
}
