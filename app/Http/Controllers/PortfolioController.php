<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.pages.allportfolios', compact('portfolios'));

    }
    public function portfolio()
    {
        $categories = Category::all();
        return view('admin.pages.portfolio', compact('categories'));

    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'portfolio_image' => 'required',
            'category'        => 'required|exists:categories,id',
        ]);

        // Handle image upload
        if ($request->hasFile('portfolio_image')) {
            $imagePath = $request->file('portfolio_image')->store('portfolios', 'public');
        }

        // Save to database
        Portfolio::create([
            'portfolio_image' => $imagePath,
            'category_id'     => $request->category,
        ]);

        return redirect()->route('admin.allportfolios')->with('success', 'Portfolio added successfully!');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $portfolio  = Portfolio::find($id);
        return view('admin.pages.editPortfolio', compact('categories', 'portfolio'));

    }

    public function update(Request $request, $id)
    {
        // Find the portfolio
        $portfolio = Portfolio::findOrFail($id);

        // Validate the request
        $request->validate([
            'portfolio_image' => 'nullable|image',
            'category'        => 'required|exists:categories,id',
        ]);

        // Handle image upload
        if ($request->hasFile('portfolio_image')) {
            // Delete old image if exists
            if ($portfolio->portfolio_image && \Storage::disk('public')->exists($portfolio->portfolio_image)) {
                \Storage::disk('public')->delete($portfolio->portfolio_image);
            }

            // Upload new image
            $imagePath                  = $request->file('portfolio_image')->store('portfolios', 'public');
            $portfolio->portfolio_image = $imagePath;
        }

        // Update category
        $portfolio->category_id = $request->category;

        // Save changes
        $portfolio->save();

        return redirect()->route('admin.allportfolios')->with('success', 'Portfolio updated successfully!');
    }

    public function delete($id)
    {
        $location = Portfolio::find($id);

        $location->delete();
        return redirect()->route('admin.allportfolios')->with('success', 'Portfolio deleted successfully!');

    }

}
