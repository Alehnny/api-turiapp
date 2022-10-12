<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        $comment = new Comment;
        $comment->tourist_place_id = $request->tourist_place_id;
        $comment->user_id = $request->user_id;
        $comment->description = $request->description;
        $comment->valoration = $request->valoration;

        return $comment->save() ? responseJson(true, 'Comment add', 202) : responseJson(false, 'error', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment, $id)
    {
        return $comment->findOrFail($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function showCommentsToUser(Comment $comment, $id)
    {
        return $comment->where('user_id', $id)->findOrFail()->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function showCommentsToTouristPlace(Comment $comment, $id)
    {
        return $comment->where('tourist_place_id', $id)->findOrFail()->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, Comment $comment, $id)
    {
        $comment_ = $comment->findOrFail($id);
        $comment_->description = $request->description;
        $comment_->valoration = $request->valoration;

        return $comment_->save() ? responseJson(true, 'Comment update', 200) : responseJson(false, 'error', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment, $id)
    {
        $comment_ = $comment->findOrFail($id);
        $comment_->delete();

        return responseJson(true, 'Item delete', 200);
    }
}
