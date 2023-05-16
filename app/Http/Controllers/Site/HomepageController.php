<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(Request $request)
    {
        // resources/js/Pages/ is the root for rendering views
        return Inertia::render('Homepage', [
            'user' => $request->user()
        ]);
    }

}