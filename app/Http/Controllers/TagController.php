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
        $str = Request::get('name');
        $str = strtolower($str);
        $allTag = explode(" ", $str);
        foreach ($allTag as $tag){
            $thatTag = Tag::where('name', '=', $tag)->first();
            if($thatTag == null){   // if that dose not exist
                $data = [];
                $data['name'] = $tag;
                $data['slug'] = $tag;
                Tag::create($data);
                Log::info('#### crate tag >>>'.$tag);
            }else {
                Log::info('#### exist tag >>>'.$tag);
            }
        }
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