<?php
namespace App\Http\Controllers;

use App\Models\HomeSetting;
use Illuminate\Http\Request;

class HomeSettingController extends Controller
{
    public function home()
    {
        $home = HomeSetting::first();

        return view('admin.pages.home', compact('home'));

    }
    public function storeOrUpdate(Request $request)
    {
        $data = $request->except(['_token']); // avoid including token in DB

        // Upload hero section images
        for ($i = 1; $i <= 4; $i++) {
            if ($request->hasFile("hero_image_$i")) {
                $data["hero_image_$i"] = $request->file("hero_image_$i")->store("home/hero", 'public');
            }
        }

        // Upload client section images
        if ($request->hasFile('client_images')) {
            $clientImages = [];
            foreach ($request->file('client_images') as $img) {
                $clientImages[] = $img->store('home/client', 'public');
            }
            $data['client_images'] = json_encode($clientImages);
        }

        // Upload review image
        if ($request->hasFile('review_image')) {
            $data['review_image'] = $request->file('review_image')->store('home/reviews', 'public');
        }

        // Upload company logo
        if ($request->hasFile('company_logo')) {
            $data['company_logo'] = $request->file('company_logo')->store('home/reviews', 'public');
        }

        // Upload video editing image
        if ($request->hasFile('video_editing_image')) {
            $data['video_editing_image'] = $request->file('video_editing_image')->store('home/video-editing', 'public');
        }

        // Upload CGI videos
        if ($request->hasFile('cgi_videos')) {
            $cgiVideos = [];
            foreach ($request->file('cgi_videos') as $video) {
                $cgiVideos[] = $video->store('home/cgi', 'public');
            }
            $data['cgi_videos'] = json_encode($cgiVideos);
        }

        // Update or create single home settings entry
        $home = HomeSetting::first();

        if ($home) {
            $home->update($data);
        } else {
            HomeSetting::create($data);
        }

        return redirect()->back()->with('success', 'Home settings saved successfully!');
    }

}
