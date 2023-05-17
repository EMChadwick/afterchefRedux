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

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(Request $request)
    {
        //change this to latest() if it were a real system with loads of posts lol
        //$posts = Post::select(['title', 'user_id'])->with('postedBy:id, name')->get();

        $posts = Post::join('users','posts.user_id', '=', 'users.id')
            ->select('posts.id','title', 'name','post_image')
            ->get();

        
        // resources/js/Pages/ is the root for rendering views
        return Inertia::render('Homepage', [
            'posts'=> $posts
        ]);
    }

}