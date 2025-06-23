<?php
namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function home()
    {
        return Inertia::render('Home');
    }
    public function contact()
    {
        return Inertia::render('Contact');
    }
    public function imagepricing()
    {
        return Inertia::render('ImagePricing');
    }
    public function videopricing()
    {
        return Inertia::render('VideoPricing');
    }
    public function about()
    {
        return Inertia::render('About');
    }
    public function imageservice()
    {
        return Inertia::render('ImageService');
    }
    public function videoservice()
    {
        return Inertia::render('VideoService');
    }
    public function cgiservice()
    {
        return Inertia::render('CgiService');
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
}
