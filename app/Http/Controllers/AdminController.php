<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/admin');
    }

    public function getPost()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        //$posts = Post::all()->orderBy('created_at', 'desc')->get(); wrong usage
        return view('admin/post')->with('posts', $posts);
    }

    public function getCategory()
    {
        $categories = Category::all();
        return view('admin/category')->with('categories', $categories);
    }

    public function getContact()
    {
        $contacts = Contact::all();
        return view('admin/contact')->with('contacts', $contacts);
    }
}
