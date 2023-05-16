<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Resources\PostResource;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Post;

class PostPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(string $postID)
    {
        //change this to latest() if it were a real system with loads of posts lol
        //$posts = Post::select(['title', 'user_id'])->with('postedBy:id, name')->get();
        $post = Post::select('title', 'description', 'post_image', 'user_id')
            ->where('id', $postID)
            ->get()->first();

        $author = User::where('id', 'user_id')->get()->first();
        // resources/js/Pages/ is the root for rendering views
        
        return Inertia::render('Post', [
            'post'=> $post,
            'author' => $author,
            'passedID' =>$postID
        ]);
    }

}