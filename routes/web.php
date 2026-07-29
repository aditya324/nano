<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HealthFacilityController;
use App\Http\Controllers\HealthPackageController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RequestCallController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SpecialityController;
use App\Models\Blog;
use App\Models\Condition;
use App\Models\Doctor;
use App\Models\Procedure;
use App\Models\Speciality;
use App\Services\ContentCache;
use Illuminate\Support\Facades\Route;

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/', function (ContentCache $contentCache) {
    $payload = $contentCache->remember('home:featured:v2', ContentCache::TTL_SHORT, function () {
        $primaryFeaturedDoctor = Doctor::with('speciality')
            ->where('slug', 'dr-mohan-m-r')
            ->first();

        $featuredDoctors = Doctor::with('speciality')
            ->whereNotNull('photo')
            ->where('photo', '!=', '')
            ->when($primaryFeaturedDoctor, fn ($query) => $query->where('id', '!=', $primaryFeaturedDoctor->id))
            ->latest()
            ->limit($primaryFeaturedDoctor ? 3 : 4)
            ->get();

        if ($primaryFeaturedDoctor) {
            $featuredDoctors = collect([$primaryFeaturedDoctor])->concat($featuredDoctors);
        }

        $teaser = static function (?string ...$candidates): string {
            foreach ($candidates as $candidate) {
                $text = trim(preg_replace(
                    '/\s+/u',
                    ' ',
                    html_entity_decode(strip_tags((string) $candidate), ENT_QUOTES | ENT_HTML5, 'UTF-8')
                ) ?? '');

                if ($text !== '') {
                    return \Illuminate\Support\Str::limit($text, 140);
                }
            }

            return '';
        };

        $featuredSpecialitySlugs = [
            'bone-joint-care',
            'child-care-paediatrics',
            'women-care-obstetrics',
            'general-medicine',
            'brain-care',
        ];
        $featuredProcedureSlugs = [
            'knee-replacement-surgery',
            'hip-replacement-surgery',
            'spinal-surgery',
            'cesarean-section',
            'kidney-surgery',
        ];
        $featuredConditionSlugs = [
            'heart-disease',
            'osteoarthritis',
            'gallstones',
            'back-and-neck-pain',
            'hypertension-high-blood-pressure',
        ];

        $homeTeasers = [];

        Speciality::query()
            ->whereIn('slug', $featuredSpecialitySlugs)
            ->get(['slug', 'meta_description', 'about_intro'])
            ->each(function (Speciality $speciality) use (&$homeTeasers, $teaser) {
                $homeTeasers[$speciality->slug] = $teaser(
                    $speciality->meta_description,
                    $speciality->about_intro
                );
            });

        Procedure::query()
            ->whereIn('slug', $featuredProcedureSlugs)
            ->get(['slug', 'seo_description', 'introduction'])
            ->each(function (Procedure $procedure) use (&$homeTeasers, $teaser) {
                $homeTeasers[$procedure->slug] = $teaser(
                    $procedure->seo_description,
                    $procedure->introduction
                );
            });

        Condition::query()
            ->whereIn('slug', $featuredConditionSlugs)
            ->get(['slug', 'meta_description', 'about'])
            ->each(function (Condition $condition) use (&$homeTeasers, $teaser) {
                $homeTeasers[$condition->slug] = $teaser(
                    $condition->meta_description,
                    $condition->about
                );
            });

        return [
            'homeTeasers' => $homeTeasers,
            'featuredDoctors' => $featuredDoctors,
            'latestBlogs' => Blog::where('is_published', true)
                ->orderByDesc('published_at')
                ->limit(4)
                ->get(['id', 'title', 'slug', 'excerpt', 'featured_image', 'published_at']),
        ];
    });

    return view('welcome', $payload);
});

Route::view('/second-opinion', 'second-opinion')->name('second.opinion');

Route::view('/international-patients', 'international-patients')->name('international.patients');

Route::get('/specialities', [SpecialityController::class, 'index'])
    ->name('specialities.index');

Route::get('/specialities/{slug}', [SpecialityController::class, 'show'])
    ->name('specialities.show');

Route::post('/job-apply', [JobController::class, 'apply'])->name('job.apply');

Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');

Route::get('/book-appointment/doctors', [DoctorController::class, 'bookAppointment'])->name('book-appointment.doctors');

Route::get('/doctors/{doctor:slug}', [DoctorController::class, 'show'])->name('doctors.show');
Route::get('/doctors/{doctor:slug}/book-slot-first', [DoctorController::class, 'showSlotFirst'])->name('doctors.show.slot-first');
Route::get('/doctors/{doctor:slug}/book-clinic', [DoctorController::class, 'bookClinic'])->name('doctors.book-clinic');
Route::get('/doctors/{doctor:slug}/book-clinic/checkout', [DoctorController::class, 'bookClinicCheckout'])->name('doctors.book-clinic.checkout');

Route::get('/conditions/{slug}', [ConditionController::class, 'show'])->name('conditions.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/search/live', [SearchController::class, 'live'])->name('search.live');

Route::view('/news-and-media', 'news')->name('news');

Route::view('/doctor-videos', 'doctor-videos')->name('doctor.videos');

Route::view('/careers', 'career')->name('careers');

Route::view('/patient-testimonials', 'patient-testimonials')->name('testimonials');

Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');
Route::post('/request-call-send', [RequestCallController::class, 'send'])->name('request.call.send');

Route::view('/bg-road', 'hulimavu')->name('bg-road');

Route::view('/why-nano', 'why-nano')->name('why.nano');

Route::get('/health-packages', [HealthPackageController::class, 'index'])
    ->name('packages.index');

Route::get('/health-packages/{slug}', [HealthPackageController::class, 'show'])
    ->name('packages.show');

Route::view('/uttarahalli', 'uttarahalli')->name('uttarahalli');

Route::view('/about', 'about')->name('about');

Route::get('/conditions', [ConditionController::class, 'index'])->name('conditions.index');

Route::get('/procedures', [ProcedureController::class, 'index'])->name('procedures.index');

Route::get('/procedures/{slug}', [ProcedureController::class, 'show'])->name('procedures.show');

Route::get('/health-facilities', [HealthFacilityController::class, 'index'])
    ->name('health.facilities.index');

Route::get('/health-facilities/{slug}', [HealthFacilityController::class, 'show'])
    ->name('health-facilities.show');
