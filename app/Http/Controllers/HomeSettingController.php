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
        $home = HomeSetting::first();
        $data = $request->except(['_token']); // remove token

        // --- Hero Images/Videos (1 image + 3 videos) ---
        for ($i = 1; $i <= 4; $i++) {
            $field = "hero_image_$i";
            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store("home/hero", 'public');
            } elseif ($home && $home->$field) {
                $data[$field] = $home->$field; // retain old value
            }
        }

        // --- Client Images (multiple) ---
        if ($request->hasFile('client_images')) {
            $clientImages = [];
            foreach ($request->file('client_images') as $img) {
                $clientImages[] = $img->store('home/client', 'public');
            }
            $data['client_images'] = json_encode($clientImages);
        } elseif ($home && $home->client_images) {
            $data['client_images'] = $home->client_images;
        }

        // --- Review Image ---
        if ($request->hasFile('review_image')) {
            $data['review_image'] = $request->file('review_image')->store('home/reviews', 'public');
        } elseif ($home && $home->review_image) {
            $data['review_image'] = $home->review_image;
        }

        // --- Company Logo ---
        if ($request->hasFile('company_logo')) {
            $data['company_logo'] = $request->file('company_logo')->store('home/reviews', 'public');
        } elseif ($home && $home->company_logo) {
            $data['company_logo'] = $home->company_logo;
        }

        // --- Video Editing Image ---
        if ($request->hasFile('video_editing_image')) {
            $data['video_editing_image'] = $request->file('video_editing_image')->store('home/video-editing', 'public');
        } elseif ($home && $home->video_editing_image) {
            $data['video_editing_image'] = $home->video_editing_image;
        }

        // --- CGI Videos (multiple) ---
        if ($request->hasFile('cgi_videos')) {
            $cgiVideos = [];
            foreach ($request->file('cgi_videos') as $video) {
                $cgiVideos[] = $video->store('home/cgi', 'public');
            }
            $data['cgi_videos'] = json_encode($cgiVideos);
        } elseif ($home && $home->cgi_videos) {
            $data['cgi_videos'] = $home->cgi_videos;
        }

        // --- Save / Update ---
        if ($home) {
            $home->update($data);
        } else {
            HomeSetting::create($data);
        }

        return redirect()->back()->with('success', 'Home settings saved successfully!');
    }

}
