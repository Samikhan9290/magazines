<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Magazines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $user_id=Auth::id();
        $user_type=Auth::user()->userType;
        if ($user_type==1){
            $result['comments']=Comment::all();

        }
        else{
            $result['magazines']=DB::table('magazines')->where(['user_id'=>$user_id])->where(['status'=>1])->get();
//        prx($result['magazines']);
            foreach ($result['magazines'] as $list){
                $result['comments'][$list->id]=DB::table('comments')->where(['status'=>1])
                    ->where(['magazine_id'=>$list->id])->get();

            }
//        prx($result['comments']);
        }

        return view('admin.comment',$result);

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
        $result['comments']=DB::table('comments')->where(['status'=>1])->get();

        $result['comments']=Comment::find($id);
        return view('admin.editComment',$result);
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

            $cat=Comment::find($id);
            $cat->delete();
            return redirect()->back()->with('success','Comment Deleted');
            //

    }
    public function status($status,$id){
        $cat=Comment::find($id);
        $cat->status=$status;
        $cat->save();
        return redirect()->back()->with('success','status Updated');

    }
}
