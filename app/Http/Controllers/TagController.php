<?php namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Support\Facades\DB;
use Request;
use Log;

class TagController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'store']]);
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
        $post_id = Request::get('post_id');
        $str = Request::get('tag');

        Log::info('#### From TagController tag = '.$str.' post_id = '.$post_id);

        $str = strtolower($str);
        $allTag = explode(" ", $str);
        foreach ($allTag as $tag){
            $newTag = null;
            $thatTag = Tag::where('name', '=', $tag)->first();
            if($thatTag == null){   // if that dose not exist
                $data = [];
                $data['name'] = $tag;
                $data['slug'] = $tag;
                $newTag = Tag::create($data);
                Log::info('#### crate tag >>>'.$tag);
            }else {
                $newTag = $thatTag;
                Log::info('#### exist tag >>>'.$tag);
            }
            DB::table('blog_post_tag')->insert([
                'tag_id' => $newTag->id,
                'post_id' => $post_id
            ]);
        }

        return 'create tag complete';
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