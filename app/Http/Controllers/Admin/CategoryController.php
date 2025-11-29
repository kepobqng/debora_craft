<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::withCount('products')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $editingCategory = null;
        if ($request->filled('edit')) {
            $editingCategory = Category::find($request->input('edit'));
        }

        // Calculate stats (based on full dataset, not current page)
        $totalCategories = Category::count();
        $activeCategories = Category::where('is_active', true)->count();
        $stats = [
            'total' => $totalCategories,
            'active' => $activeCategories,
            'active_percentage' => $totalCategories > 0
                ? round(($activeCategories / $totalCategories) * 100)
                : 0,
            'total_products' => Category::withCount('products')->get()->sum('products_count'),
        ];

        return view('dashboard.admin.products.categories', compact('categories', 'editingCategory', 'stats'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'slug' => 'nullable|string|max:255|unique:categories,slug',
            'description' => 'nullable|string|max:500',
            'is_active' => 'nullable|boolean',
        ]);

        $slugSource = $data['slug'] ?? $data['name'];
        $data['slug'] = Str::slug($slugSource);
        $data['is_active'] = $request->boolean('is_active', true);

        Category::create($data);

        return redirect()->route('admin.products.categories')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'slug' => 'nullable|string|max:255|unique:categories,slug,' . $category->id,
            'description' => 'nullable|string|max:500',
            'is_active' => 'nullable|boolean',
        ]);

        $slugSource = $data['slug'] ?? $data['name'];
        $data['slug'] = Str::slug($slugSource);
        $data['is_active'] = $request->boolean('is_active', true);

        $category->update($data);

        return redirect()->route('admin.products.categories')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.products.categories')->with('success', 'Kategori berhasil dihapus.');
    }
}
