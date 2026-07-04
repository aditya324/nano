<?php

namespace App\Http\Controllers;

use App\Models\Speciality;

class SpecialityController extends Controller
{
    /**
     * Show all specialities
     */
    public function index()
    {
        $specialities = Speciality::orderBy('name')->get()->map(function ($s) {
            return [
                'title' => $s->name,
                'shortTitle' => str_replace(' ', '<br/>', $s->name),
                'image' => $s->icon
                    ? asset('storage/' . $s->icon)
                    : asset('assets/specialities/default.webp'),
                'desc' => $s->about_intro,
                'url' => route('specialities.show', $s->slug),
            ];
        });

        return view('specialities.index', compact('specialities'));
    }

    /**
     * Show single speciality page
     */
    public function show($slug)
    {
        $speciality = Speciality::with('faqs')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('specialities.show', compact('speciality'));
    }
}
