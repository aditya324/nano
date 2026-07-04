<?php

// app/Http/Controllers/SearchController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Procedure;
use App\Models\Condition;
use App\Models\Speciality;
use App\Models\HealthFacilityPage;
use App\Models\HealthPackage;

class SearchController extends Controller
{
    public function live(Request $request)
    {
        $q = $request->q;

        if (!$q) return response()->json([]);

        return response()->json([
            'doctors' => Doctor::search($q)
                ->query(fn($query) => $query->with('speciality'))
                ->take(5)
                ->get()
                ->map(fn($d) => [
                    'title' => $d->name,
                    'type' => 'Doctor',
                    'url' => route('doctors.show', $d->slug),
                    'speciality' => optional($d->speciality)->name,
                    'location' => $d->location,
                ]),
            'procedures' => Procedure::search($q)->take(5)->get()->map(fn($p) => [
                'title' => $p->title,
                'type' => 'Procedure',
                'url' => route('procedures.show', $p->slug),
            ]),
            'conditions' => Condition::search($q)->take(5)->get()->map(fn($c) => [
                'title' => $c->name,
                'type' => 'Condition',
                'url' => route('conditions.show', $c->slug),
            ]),
            'specialities' => collect(
                Speciality::search($q)->raw()['hits'] ?? []
            )->take(5)->map(fn($hit) => [
                'title' => $hit['name'],
                'url' => route('specialities.show', $hit['slug']),
            ])->values(),


            'health_packages' => HealthPackage::search($q)->take(5)->get()->map(fn($hp) => [
                'title' => $hp->name,
                'type'  => 'Health Package',
                'url'   => route('packages.show', $hp->slug), 
            ]),

            'health_facilities' => HealthFacilityPage::search($q)->take(5)->get()->map(fn($hf) => [
                'title' => $hf->hero_title,
                'type'  => 'Health Facility',
                'url'   => route('health-facilities.show', $hf->slug),
            ]),
        ]);
    }
}
