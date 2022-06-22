<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Transformers\PostTransformers;
use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class PostController extends Controller
{
    private $fractal;

    private $postTransformer;

    public function __construct(Manager $fractal, PostTransformers $postTransformer)
    {
        $this->fractal = $fractal;
        $this->postTransformer = $postTransformer;
    }

    public function index(Request $request)
    {
        $posts = Post::with('user')->get();
        $posts = new Collection($posts, $this->postTransformer);
        $posts = $this->fractal->createData($posts);
        return $posts->toArray(); // Get transformed array of data
    }

    public function show($id)
    {
        $post = Post::find($id);
        $post = (new PostTransformers())->transform($post);

        return $post;
    }
}
