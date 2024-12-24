<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('pages.admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'body' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Blog::create($input);

        return redirect('/blogs')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $blog = Blog::all();
        return view('pages.artikel', compact('blog'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('pages.admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $blog->update($input);

        return redirect('/blogs')->with('message', 'Data Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        
        $blog->delete();

        return redirect('/blogs')->with('message', 'Data Berhasil Dihapus');

    }

    public function checkSlug(Request $request)
    {

        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
