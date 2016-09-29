<?php
namespace App\Http\Controllers;
use App\Fileentry;
use App\Post;
use App\Category;
use App\Comment;
use App\Tag;
use Request;
use Log;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'getByCategoryId', 'getByPage']]);
    }

    public function index()
    {
        $currentPage = 1;
        $lastPage = ceil(Post::where('status', '=', 'publish')->count() / 6);
        $posts = Post::where('status', '=', 'publish')
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        return view('posts.index')->with('posts', $posts)
            ->with('currentPage', $currentPage)
            ->with('lastPage', $lastPage);
    }

    public function create()
    {
        $c = Category::all();
        $categories = [];
        for($i = 0; $i < sizeof($c); $i++){
            $categories[$c[$i]['id']] = $c[$i]['name'];
            //Log::info('#### '. $c[$i]['id'].' '.$c[$i]['name']);
        }

        $images = Fileentry::all();
        return view('posts.create')->with('categories', $categories)->with('images', $images);
    }
    
    public function store()
    {
        $blog_post = Request::only([
            'category_id', 'title',
            'slug', 'description',
            'summary', 'content',
            'status', 'comments',
            'featured', 'card_image',
            'cover_image'
        ]);
        $post = Post::create($blog_post);

        $isCreate = true;
        $strTag = Request::get('tag');
        Log::info('#### From PostController@store tag = '.$strTag.' post_id = '.$post->id);
        self::handleTag($post->id, $strTag, $isCreate);

        return redirect('admin/post');
    }
    
    public function show($id)
    {
        $post = Post::find($id);
        //Log::info('*** '. $post['comments']);
        $category = Category::findOrFail($post['category_id']);
        //Log::info('*** '. $category['name']);
        $blog_tag_ids = DB::table('blog_post_tag')->where('post_id', '=', $id)->get();

        $blog_tags = [];
        foreach ($blog_tag_ids as $blog_tag_id){
            $tag = Tag::where('id', '=', $blog_tag_id->tag_id)->first();
            Log::info('### '.$tag->name);
            array_push($blog_tags, $tag);
        }

        if($post['comments']) {
            $comments = Comment::where('post_id', '=', $post['id'])->get();
            return view('posts.show')->with('post', $post)
                ->with('comments', $comments)
                ->with('category', $category)
                ->with('blog_tags', $blog_tags);
        }
        else {
            return view('posts.show')->with('post', $post)
                ->with('category', $category)
                ->with('blog_tags', $blog_tags);
        }
    }

    public function edit($id)
    {
        $c = Category::all();
        $categories = [];
        for($i = 0; $i < sizeof($c); $i++){
            $categories[$c[$i]['id']] = $c[$i]['name'];
            //Log::info('#### '. $c[$i]['id'].' '.$c[$i]['name']);
        }
        $images = Fileentry::all();
        $post = Post::findOrFail($id);

        return view('posts.edit')->with('post', $post)->with('categories', $categories)->with('images', $images);
    }
    
    public function update($id)
    {
        $post = Post::findOrFail($id);
        $newPost = Request::only([
            'category_id', 'title',
            'slug', 'description',
            'summary', 'content',
            'status', 'comments',
            'featured', 'card_image',
            'cover_image'
        ]);
        $post->update($newPost);

        $isCreate = false;
        $strTag = Request::get('tag');
        if($strTag != null){
            self::handleTag($post->id, $strTag, $isCreate);
        }
        return redirect('admin/post');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('admin/post');
    }

    public function getByCategoryId($category_id)
    {
        $currentPage = 1;
        $lastPage = ceil(Post::where('status', '=', 'publish')->count() / 6);
        $posts = Post::where('category_id', '=', $category_id)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        return view('posts.index')->with('posts', $posts)
            ->with('currentPage', $currentPage)
            ->with('lastPage', $lastPage);
    }

    public function getByPage($page)
    {
        $currentPage = $page;
        $lastPage = ceil(Post::where('status', '=', 'publish')->count() / 6);
        $posts = Post::where('status', '=', 'publish')
            ->orderBy('created_at', 'desc')
            ->skip(6*($page - 1))
            ->take(6)
            ->get();
        return view('posts.index')->with('posts', $posts)
            ->with('currentPage', $currentPage)
            ->with('lastPage', $lastPage);
    }

    public function getByTag($tag_id){

    }

    public function handleTag($post_id, $strTag, $isCreate)
    {
        if(!$isCreate){  // delete exist hashTag
            DB::table('blog_post_tag')->where('post_id', '=', $post_id)->delete();
        }

        $strTag = strtolower($strTag);
        $allTag = explode(" ", $strTag);
        foreach ($allTag as $tag){
            $newTag = null;
            $thatTag = Tag::where('name', '=', $tag)->first();
            if($thatTag == null){   // if that dose not exist
                $data = [
                    'name' => $tag,
                    'slug' => $tag
                ];
                $newTag = Tag::create($data);
            }else {
                $newTag = $thatTag; // if tag is exist
            }
            // insert new hastTag;
            DB::table('blog_post_tag')->insert([
                'tag_id' => $newTag->id,
                'post_id' => $post_id
            ]);
        }
        Log::info('#### create tag complete');
    }
}

?>