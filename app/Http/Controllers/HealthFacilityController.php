<?php

namespace App\Http\Controllers;

use App\Models\HealthFacilityPage;
use Illuminate\Http\Request;

class HealthFacilityController extends Controller
{


    public function index(Request $request)
    {
        $query = HealthFacilityPage::where('is_active', true);

        // Search by title or overview content
        if ($request->filled('search')) {
            $term = $request->input('search');
            $query->where(function ($q) use ($term) {
                $q->where('hero_title', 'like', "%{$term}%")
                    ->orWhere('overview_content', 'like', "%{$term}%");
            });
        }

        // Filter by first letter of title
        if ($request->filled('letter')) {
            $letter = $request->input('letter');
            $query->where('hero_title', 'like', $letter . '%');
        }

        $facilities = $query->select(['slug', 'hero_title', 'hero_background', 'overview_content'])
            ->orderBy('hero_title')
            ->paginate(9)
            ->withQueryString();

        return view('health-facilities.index', compact('facilities'));
    }

    public function show($slug)
    {
        $facility = HealthFacilityPage::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('health-facilities.show', compact('facility'));
    }
}
