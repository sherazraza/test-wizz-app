<?php
namespace App\Http\Controllers;

use App\Models\AboutUsDescription;
use App\Models\AboutUsSection;
use App\Models\AboutUsTeamMember;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function about()
    {
        $section      = AboutUsSection::first();
        $descriptions = AboutUsDescription::all();
        $teamMembers  = AboutUsTeamMember::all();
        return view('admin.pages.about', compact('section', 'descriptions', 'teamMembers'));

    }
    public function storeOrUpdate(Request $request)
    {
        $data = $request->except([
            'who_images',
            'team_ids', 'team_names', 'team_designations', 'team_images',
            'description_ids', 'description_texts', 'description_numbers',
        ]);

        // Single Image Fields
        $imageFields = ['who_image', 'how_started_image'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store("about-us/$field", 'public');
            }
        }

        // Multiple Images Field (who_images)
        if ($request->hasFile('who_images')) {
            $images = [];
            foreach ($request->file('who_images') as $img) {
                $images[] = $img->store("about-us/who_images", 'public');
            }
            $data['who_images'] = json_encode($images);
        }

        // Save or update AboutUsSection
        $section = AboutUsSection::first();
        if ($section) {
            $section->update($data);
        } else {
            $section = AboutUsSection::create($data);
        }

        // 🟢 Sync Team Members
        $existingIds = [];
        if ($request->team_names) {
            foreach ($request->team_names as $index => $name) {
                $id         = $request->team_ids[$index] ?? null;
                $memberData = [
                    'name'        => $name,
                    'designation' => $request->team_designations[$index] ?? null,
                ];

                if (isset($request->team_images[$index])) {
                    $memberData['image'] = $request->team_images[$index]->store("about-us/team", 'public');
                }

                if ($id) {
                    $member = AboutUsTeamMember::find($id);
                    if ($member) {
                        $member->update($memberData);
                        $existingIds[] = $id;
                    }
                } else {
                    $new           = AboutUsTeamMember::create($memberData);
                    $existingIds[] = $new->id;
                }
            }
        }

        // 🔴 Delete removed team members
        AboutUsTeamMember::whereNotIn('id', $existingIds)->delete();

        // 🟢 Sync Descriptions
        $descIds = [];
        if ($request->description_texts) {
            foreach ($request->description_texts as $index => $desc) {
                $id       = $request->description_ids[$index] ?? null;
                $descData = [
                    'description' => $desc,
                    'number'      => $request->description_numbers[$index] ?? null,
                ];

                if ($id) {
                    $description = AboutUsDescription::find($id);
                    if ($description) {
                        $description->update($descData);
                        $descIds[] = $id;
                    }
                } else {
                    $newDesc   = AboutUsDescription::create($descData);
                    $descIds[] = $newDesc->id;
                }
            }
        }

        // 🔴 Delete removed descriptions
        AboutUsDescription::whereNotIn('id', $descIds)->delete();

        return redirect()->back()->with('success', 'About Us page updated successfully.');
    }

    public function deleteTeamMember($id)
    {
        $deleted = AboutUsTeamMember::where('id', $id)->delete();
        return response()->json(['success' => $deleted]);
    }

    public function deleteDescription($id)
    {
        $deleted = AboutUsDescription::where('id', $id)->delete();
        return response()->json(['success' => $deleted]);
    }

}
