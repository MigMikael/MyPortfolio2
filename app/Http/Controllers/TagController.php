<?php namespace App\Http\Controllers;

use App\Tag;
use Request;
use Log;

class TagController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $tags = Tag::orderBy('name')->get();
        return view('tag.index')->with('tags', $tags);
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store()
    {
        $input = Request::all();
        Tag::create($input);
        return redirect('tag');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
  
}

?>