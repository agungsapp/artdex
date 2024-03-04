<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CommentModel;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserExploreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'posts' => Post::all()
        ];
        return view('user.explore.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);

        try {
            $request->validate([
                'comment' => 'required',
            ]);

            $comment = new CommentModel();
            $comment->comment = $request->comment;
            $comment->post_id = $request->post_id;
            $comment->user_id = Auth::id();
            $comment->save();

            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
            return "something went wrong in server";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);

        $post = Post::find($id);
        $author = User::find($post->users_id);
        $comments = CommentModel::where('post_id', $post->id)->get();
        // dd($comments[0]->user());

        $data = [
            'post' => $post,
            'author' => $author,
            'comments' => $comments
        ];

        return view('user.explore.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
