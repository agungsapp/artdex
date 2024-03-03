<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CommentReportModel;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'comments' => CommentReportModel::all(),
        ];
        return view('admin.comment_report.index', $data);
    }


    public function search(Request $request)
    {
        try {
            $keyword = $request->keyword;

            $comments = CommentReportModel::where(function ($query) use ($keyword) {
                $query->where('complaint', 'like', '%' . $keyword . '%')
                    ->orWhere('comment', 'like', '%' . $keyword . '%');
            })->get();

            $data = [
                'comments' => $comments,
            ];

            return view('admin.comment_report.index', $data);
        } catch (\Throwable $th) {
            // Log the error or handle it appropriately
            alert()->error('Error', 'Error in the system');
            return redirect()->back();
        }
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        try {
            CommentReportModel::destroy($id);
            alert()->success('Success!', 'Successfully to delete comment report data !');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            return alert()->error('Error', 'error in system');
        }
    }
}
