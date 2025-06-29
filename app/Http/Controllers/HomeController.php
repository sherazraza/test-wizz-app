<?php
namespace App\Http\Controllers;

use App\Models\AboutUsDescription;
use App\Models\AboutUsSection;
use App\Models\AboutUsTeamMember;
use App\Models\Category;
use App\Models\CGIHowItWorks;
use App\Models\CGISection;
use App\Models\Contact;
use App\Models\ContactLocation;
use App\Models\HomeSetting;
use App\Models\ImagePricing;
use App\Models\ImagePricingService;
use App\Models\Portfolio;
use App\Models\VideoEditingSection;
use App\Models\VideoEditingService;
use App\Models\VideoPricing;
use App\Models\VideoPricingPackage;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home()
    {
        $home             = HomeSetting::first();
        $contactLocations = ContactLocation::all();

        // Single image fields to convert
        $imageFields = [
            'hero_image_1',
            'hero_image_2',
            'hero_image_3',
            'hero_image_4',
            'review_image',
            'company_logo',
            'video_editing_image',
        ];

        foreach ($imageFields as $field) {
            if (! empty($home->$field)) {
                $home->$field = asset('storage/' . $home->$field);
            }
        }

        // Handle cgi_videos (array of video paths in JSON format)
        if (! empty($home->cgi_videos)) {
            $videos = json_decode($home->cgi_videos, true);

            $home->cgi_videos = array_map(function ($video) {
                return asset('storage/' . $video);
            }, $videos);
        }

        // ✅ Handle client_images (array of image paths in JSON format)
        if (! empty($home->client_images)) {
            $images = json_decode($home->client_images, true);

            $home->client_images = array_map(function ($image) {
                return asset('storage/' . $image);
            }, $images);
        }

        return Inertia::render('Home', [
            'home'      => $home,
            'locations' => $contactLocations,
        ]);
    }

    public function contact()
    {
        $contact          = Contact::first(); // for email and description
        $contactLocations = ContactLocation::all();
        return Inertia::render('Contact', [
            'contact'   => $contact,
            'locations' => $contactLocations,
        ]);
    }
    public function imagepricing()
    {
        $pricing  = ImagePricing::first();
        $services = ImagePricingService::all();
        return Inertia::render('ImagePricing', [
            'pricing'  => $pricing,
            'services' => $services,
        ]);
    }
    public function videopricing()
    {
        $videoPricing = VideoPricing::first();

        $packages = VideoPricingPackage::all();

        foreach ($packages as $package) {
            if (! empty($package->services)) {
                $package->services = json_decode($package->services, true);
            }
        }
        return Inertia::render('VideoPricing', [
            'pricing'  => $videoPricing,
            'packages' => $packages,
        ]);
    }

    public function about()
    {
        $section      = AboutUsSection::first();
        $descriptions = AboutUsDescription::all();
        $teamMembers  = AboutUsTeamMember::all();
        $memb         = AboutUsTeamMember::where('designation', 'ceo')->orwhere('designation', 'CEO')->orwhere('designation', 'Ceo')->first();

        // dd($memb);
        if (! empty($memb->image)) {
            $memb->image = asset('storage/' . $memb->image);
        }

        $home = HomeSetting::first();
        if (! empty($home->client_images)) {
            $images = json_decode($home->client_images, true);

            $home->client_images = array_map(function ($image) {
                return asset('storage/' . $image);
            }, $images);
        }

        // Section image fields
        $imageFields = [
            'who_image',
            'how_started_image',
        ];

        foreach ($imageFields as $field) {
            if (! empty($section->$field)) {
                $section->$field = asset('storage/' . $section->$field);
            }
        }

        // Decode and convert JSON who_images
        if (! empty($section->who_images)) {
            $decodedImages       = json_decode($section->who_images, true) ?? [];
            $section->who_images = array_map(function ($imgPath) {
                return asset('storage/' . $imgPath);
            }, $decodedImages);
        } else {
            $section->who_images = []; // fallback if null
        }

        // Team Members: image path fix
        foreach ($teamMembers as $member) {
            if (! empty($member->image)) {
                $member->image = asset('storage/' . $member->image);
            }
        }

        return Inertia::render('About', [
            'section'      => $section,
            'descriptions' => $descriptions,
            'teams'        => $teamMembers,
            'home'         => $home,
            'memb'         => $memb,
        ]);
    }

    public function imageservice()
    {
        return Inertia::render('ImageService');
    }
    public function videoservice()
    {
        $section  = VideoEditingSection::first();
        $services = VideoEditingService::all();

        // Fields in section table that are image/video paths
        $mediaFields = [
            'main_image',
            'video_service_image',
            'reliable_image',
            'product_retouch_video_1a',
            'product_retouch_video_1b',
            'product_retouch_video_2a',
            'product_retouch_video_2b',
        ];

        foreach ($mediaFields as $field) {
            if (! empty($section->$field)) {
                $section->$field = asset('storage/' . $section->$field);
            }
        }

        // Handle services as a collection if any have image/video fields
        foreach ($services as $service) {
            $serviceMediaFields = [
                'image', // assuming your service has `image` field
                'video', // or whatever fields you have in VideoEditingService
            ];

            foreach ($serviceMediaFields as $field) {
                if (! empty($service->$field)) {
                    $service->$field = asset('storage/' . $service->$field);
                }
            }
        }

        return Inertia::render('VideoService', [
            'section'  => $section,
            'services' => $services,
        ]);
    }

    public function cgiservice()
    {
        $section    = CGISection::first();
        $howItWorks = CGIHowItWorks::all();

        // List of image fields from the CGISection table
        $imageFields = [
            'main_image',
            'amazing_front_image',
            'amazing_back_image',
            'motion_image',
            'reliable_image',
        ];

        // Convert each image path to a full URL
        foreach ($imageFields as $field) {
            if (! empty($section->$field)) {
                $section->$field = asset('storage/' . $section->$field);
            }
        }

        return Inertia::render('CgiService', [
            'section' => $section,
            'works'   => $howItWorks,
        ]);
    }

    public function termsconditions()
    {
        return Inertia::render('Terms');
    }
    public function privacypolicy()
    {
        return Inertia::render('Privacy');
    }
    public function cookiepolicy()
    {
        return Inertia::render('Cookie');
    }
    public function refundpolicy()
    {
        return Inertia::render('Refund');
    }

    public function portfolio()
    {
        $categories = Category::all();
        $portfolios = Portfolio::all();
        $home       = HomeSetting::first();

        foreach ($portfolios as $portfolio) {
            if (! empty($portfolio->portfolio_image)) {
                $portfolio->portfolio_image = asset('storage/' . $portfolio->portfolio_image);
            }
        }

        if (! empty($home->client_images)) {
            $images = json_decode($home->client_images, true);

            $home->client_images = array_map(function ($image) {
                return asset('storage/' . $image);
            }, $images);
        }

        return Inertia::render('Portfolio', [
            'categories' =>
            $categories,
            'portfolios' =>
            $portfolios,
            'home'       => $home,
        ]);
    }
}
