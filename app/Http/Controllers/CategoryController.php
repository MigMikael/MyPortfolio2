<?php

namespace App\Http\Controllers;
use App\Category;
use App\Tag;
use Request;
use Log;
use App\Http\Requests;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $categories = Category::all();
        $tags = Tag::orderBy('name')->get();
        return view('category.index')->with('categories', $categories)->with('tags', $tags);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store()
    {
        $input = Request::all();
        Category::create($input);
        return redirect('category');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit')->with('category', $category);
    }

    public function update($id)
    {
        $category = Category::findOrFail($id);
        $newCategory = Request::all();
        $category->update($newCategory);
        return redirect('admin/category');
    }
}
