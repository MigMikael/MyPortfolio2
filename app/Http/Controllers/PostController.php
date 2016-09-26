<?php
namespace App\Http\Controllers;
use App\Fileentry;
use App\Post;
use App\Category;
use App\Comment;
use Request;
use Log;
use App\Http\Requests;

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

        $tag = Request::get('tag');
        $args = [
            'post_id' => $post->id,
            'tag' => $tag,
            '_token' => csrf_token()
        ];
        // Todo fix bug cannot call tag api
        Log::info('#### From PostController tag = '.$tag.' post_id = '.$post->id);
        $request = Request::create('tag', 'POST', $args);

        return redirect('admin/post');
    }
    
    public function show($id)
    {
        $post = Post::find($id);
        //Log::info('*** '. $post['comments']);
        $category = Category::findOrFail($post['category_id']);
        //Log::info('*** '. $category['name']);

        if($post['comments']) {
            $comments = Comment::where('post_id', '=', $post['id'])->get();
            return view('posts.show')->with('post', $post)->with('comments', $comments)->with('category', $category);
        }
        else {
            return view('posts.show')->with('post', $post)->with('category', $category);
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
        $newPost = Request::all();
        $post->update($newPost);
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
}

?>