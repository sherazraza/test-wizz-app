<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VideoEditingSection;
use App\Models\VideoEditingService;
use Illuminate\Http\Request;

class VideoEditingController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->except(['_token', 'service_titles', 'service_descriptions']);

        // Image/Video Upload Handler
        foreach ([
            'main_image',
            'video_service_image',
            'reliable_image',
            'product_retouch_video_1a',
            'product_retouch_video_1b',
            'product_retouch_video_2a',
            'product_retouch_video_2b',
        ] as $field) {
            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store('video-editing', 'public');
            }
        }

        // Only one record allowed
        $section = VideoEditingSection::first();

        if ($section) {
            $section->update($data);
            // Delete old services
            VideoEditingService::truncate();
        } else {
            $section = VideoEditingSection::create($data);
        }

        // Save Services
        $titles = $request->input('service_titles', []);
        $descs  = $request->input('service_descriptions', []);

        foreach ($titles as $index => $title) {
            if (! empty($title)) {
                VideoEditingService::create([
                    'title'       => $title,
                    'description' => $descs[$index] ?? '',
                ]);
            }
        }

        return redirect()->back()->with('success', 'Video Editing Settings Saved');
    }

    public function form()
    {
        $section  = VideoEditingSection::first();
        $services = VideoEditingService::all();

        return view('admin.video_editing_form', compact('section', 'services'));
    }
    public function videoediting()
    {
        $section  = VideoEditingSection::first();
        $services = VideoEditingService::all();
        return view('admin.pages.videoediting', compact('section', 'services'));

    }
}
