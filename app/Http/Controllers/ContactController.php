<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactLocation;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contact          = Contact::first(); // for email and description
        $contactLocations = ContactLocation::all();
        return view('admin.pages.contact', compact('contact', 'contactLocations'));

    }
    public function store(Request $request)
    {
        // 1. Save or Update single Contact row
        $contact = Contact::first();
        if (! $contact) {
            $contact = new Contact();
        }
        $contact->email             = $request->email;
        $contact->email_description = $request->email_description;
        $contact->save();

        // 2. Save, Update, and Delete Contact Locations

        // Fetch existing IDs from DB
        $existingIds = ContactLocation::pluck('id')->toArray();

        // Fetch incoming IDs from form
        $incomingIds = $request->location_ids ?? [];

        // Find which IDs to delete
        $toDelete = array_diff($existingIds, $incomingIds);

        // Delete removed entries
        if (! empty($toDelete)) {
            ContactLocation::whereIn('id', $toDelete)->delete();
        }

        // Process all location inputs
        $titles       = $request->location_titles ?? [];
        $descriptions = $request->location_descriptions ?? [];
        $phones       = $request->location_phones ?? [];

        foreach ($titles as $index => $title) {
            $id = $incomingIds[$index] ?? null;

            if ($id) {
                // Update existing
                $location = ContactLocation::find($id);
                if ($location) {
                    $location->update([
                        'title'       => $title,
                        'description' => $descriptions[$index] ?? null,
                        'phone'       => $phones[$index] ?? null,
                    ]);
                }
            } else {
                // Create new
                ContactLocation::create([
                    'title'       => $title,
                    'description' => $descriptions[$index] ?? null,
                    'phone'       => $phones[$index] ?? null,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Contact settings saved successfully.');
    }

    public function deleteLocation($id)
    {
        $location = ContactLocation::find($id);
        if ($location) {
            $location->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

}
