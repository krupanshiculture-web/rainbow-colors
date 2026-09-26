<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'featured_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'author' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'status' => ['required', 'in:draft,published'],
        ]);

        $validated['slug'] = $this->generateUniqueSlug($validated['title']);

        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('blogs', 'public');
        }

        Blog::create($validated);

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog created successfully.');
    }

    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blogs.show', compact('blog'));
    }

    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'featured_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'author' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'status' => ['required', 'in:draft,published'],
        ]);

        if ($blog->title !== $validated['title']) {
            $validated['slug'] = $this->generateUniqueSlug(
                $validated['title'],
                $blog->id
            );
        }

        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image) {
                Storage::disk('public')->delete($blog->featured_image);
            }

            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('blogs', 'public');
        }

        $blog->update($validated);

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog updated successfully.');
    }

    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->featured_image) {
            Storage::disk('public')->delete($blog->featured_image);
        }

        $blog->delete();

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog deleted successfully.');
    }

    private function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (
            Blog::where('slug', $slug)
                ->when($ignoreId, function ($query) use ($ignoreId) {
                    $query->where('id', '!=', $ignoreId);
                })
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}