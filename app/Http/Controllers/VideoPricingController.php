<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VideoPricing;
use App\Models\VideoPricingPackage;
use Illuminate\Http\Request;

class VideoPricingController extends Controller
{
    public function videoPricing()
    {
        $videoPricing = VideoPricing::first();
        $packages     = VideoPricingPackage::all();
        return view('admin.pages.videoPricing', compact('videoPricing', 'packages'));

    }
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'description'      => 'required',
            'package_names'    => 'array',
            'package_names.*'  => 'nullable',
            'package_prices'   => 'array',
            'package_prices.*' => 'nullable',
        ]);

        // Save or update the main video pricing description (assuming one row only)
        $videoPricing = VideoPricing::updateOrCreate(
            ['id' => 1], // fixed ID for single-row setup
            ['description' => $request->description]
        );

        VideoPricingPackage::truncate();

        // Save packages
        foreach ($request->package_names as $index => $packageName) {
            if ($packageName != null) {
                $services = $request->package_services[$index] ?? [];
                VideoPricingPackage::create([
                    'package_name'   => $packageName,
                    'starting_price' => $request->package_prices[$index] ?? null,
                    'services'       => json_encode($services),
                ]);
            }
        }

        return back()->with('success', 'Video pricing saved successfully!');
    }

    public function deletePackage(Request $request)
    {
        $package = VideoPricingPackage::find($request->id);
        if ($package) {
            $package->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

}
