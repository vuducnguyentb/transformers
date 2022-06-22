<?php


namespace App\Transformers;
use App\Models\Post;
use League\Fractal\TransformerAbstract;
use App\Transformers\UserTransformer;

class PostTransformers extends TransformerAbstract
{
//    protected $availableIncludes = ['user'];

    public function transform(Post $post)
    {
        return [
            'id' => $post->id,
            'user_id' => [
                'name'=>$post->user->name
            ],
            'title' => $post->title,
            'contents' => $post->contents,
        ];
    }

//    public function includeUser(Post $post)
//    {
//        $user = $post->user;
//
//        return $this->item($user, new UserTransformers);
//    }
}
