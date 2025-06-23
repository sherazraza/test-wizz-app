<?php
namespace App\Http\Controllers;

use App\Models\CGIHowItWorks;
use App\Models\CGISection;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.dashboard');

    }

    public function works()
    {
        $section    = CGISection::first();
        $howItWorks = CGIHowItWorks::all();
        return view('admin.pages.works', compact('section', 'howItWorks'));

    }

    public function login()
    {
        return view('admin.pages.login');

    }
    public function loginAdmin(Request $req)
    {
        $userEmail = DB::table('admins')->where('email', $req->email)->get()->count();
        if ($userEmail > 0) {
            $enable = DB::table('admins')->where('email', $req->email)->where('is_active', true)->get()->count();
            if ($enable > 0) {

                $data     = DB::table('admins')->where('email', $req->email)->get();
                $password = $data[0]->password;

                if (Hash::check($req->password, $password)) {
                    $usersId  = DB::table('admins')->where('email', $req->email)->get();
                    $usersIds = $usersId[0]->id;
                    $req->session()->put('adminId', $usersIds);
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()->back()->with('error', 'Credential Does not match');
                }
            } else {
                return redirect()->back()->with('error', 'Your account has been disabled');

            }

        } else {
            return redirect()->back()->with('error', 'Account do not exist');
        }
    }
    public function logout(Request $req)
    {
        if (session('adminId')) {
            $req->session()->flush();
            return redirect()->route('admin.login');
        }
        return redirect()->route('admin.login');
    }
    public function categories()
    {
        return view('admin.pages.categories');

    }

    public function storeOrUpdate(Request $request)
    {
        $data  = $request->except(['how_title', 'how_description', 'how_image']);
        $files = [];

        // ✅ Image upload helper
        function uploadFile($file, $folder)
        {
            return $file->store("cgi/$folder", 'public');
        }

        // ✅ Handle individual image uploads
        $imageFields = [
            'main_image',
            'amazing_front_image',
            'amazing_back_image',
            'motion_image',
            'reliable_image',
            'video_service_image', // optional if form includes this
        ];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $files[$field] = uploadFile($request->file($field), $field);
            }
        }

        $data = array_merge($data, $files);

        // ✅ Create or update the only CGISection record
        $section = CGISection::first();
        if ($section) {
            $section->update($data);
        } else {
            $section = CGISection::create($data);
        }

        // ✅ Clear existing how_it_works data
        $howIds = $request->how_id ?? [];

        foreach ($request->how_title ?? [] as $index => $title) {
            $howData = [
                'title'       => $title,
                'description' => $request->how_description[$index] ?? null,
            ];

            // Handle optional image update
            if (isset($request->how_image[$index])) {
                $howData['image'] = uploadFile($request->how_image[$index], 'how_it_works');
            }

            $existingId = $howIds[$index] ?? null;

            if ($existingId && $existing = CGIHowItWorks::find($existingId)) {
                $existing->update($howData);
            } else {
                CGIHowItWorks::create($howData);
            }
        }

        return redirect()->back()->with('success', 'CGI page updated successfully!');
    }

    public function deleteHowItWorks($id)
    {
        $item = CGIHowItWorks::find($id);
        if ($item) {
            // Optionally delete image
            if ($item->image && \Storage::disk('public')->exists($item->image)) {
                \Storage::disk('public')->delete($item->image);
            }

            $item->delete();
            return response()->json(['message' => 'Deleted']);
        }

        return response()->json(['message' => 'Not found'], 404);
    }

}
