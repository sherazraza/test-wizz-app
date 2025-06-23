<?php
namespace App\Http\Controllers;

use App\Models\ImagePricing;
use App\Models\ImagePricingService;
use Illuminate\Http\Request;

class ImagePricingController extends Controller
{
    public function imageEditing()
    {
        $pricing  = ImagePricing::first();
        $services = ImagePricingService::all();
        return view('admin.pages.imageEditing', compact('pricing', 'services'));

    }
    public function save(Request $request)
    {
        // Validate input
        $request->validate([
            'description'            => 'nullable|string',
            'base_price'             => 'nullable|numeric',
            'base_price_description' => 'nullable|string',
            'service_names'          => 'array',
            'service_names.*'        => 'nullable|string',
            'service_prices'         => 'array',
            'service_prices.*'       => 'nullable|numeric',
        ]);

        // Save or update main pricing (only one record)
        $pricing = ImagePricing::first();
        if (! $pricing) {
            $pricing = new ImagePricing();
        }

        $pricing->description            = $request->description;
        $pricing->base_price             = $request->base_price;
        $pricing->base_price_description = $request->base_price_description;
        $pricing->save();

        // Remove all old services
        ImagePricingService::truncate();

        // Save new service entries
        if ($request->has('service_names')) {
            foreach ($request->service_names as $index => $name) {
                if (! empty($name) || ! empty($request->service_prices[$index])) {
                    ImagePricingService::create([
                        'name'  => $name,
                        'price' => $request->service_prices[$index] ?? null,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Image pricing settings updated successfully.');
    }
    public function deleteService(Request $request)
    {
        $service = ImagePricingService::find($request->id);

        if ($service) {
            $service->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }

}
