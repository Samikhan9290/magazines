<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Magazines;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
    public function redirect(){
        $user_id=Auth::id();
//        return $user_id;
        $userType=Auth::user()->userType;
        if ($userType==1){
            $result['total_magazines'] =Magazines::all()->count();
            $result['publish_magazines'] =DB::table('magazines')->where(['status'=>1])->count();
            $result['not_publish_magazines'] =DB::table('magazines')->where(['status'=>0])->count();
            $result['verified_users'] =DB::table('users')->where(['status'=>1])->count();
            $result['Not_verified_users'] =DB::table('users')->where(['status'=>0])->count();
//            return $result['not_publish_magazines'];
            return view('admin.index',$result);
        }
        else{
        $result['total_magazines'] =DB::table('magazines')->where(['user_id'=>$user_id])->count();

//        return $result['total_magazines'];
        $result['publish_magazines'] =DB::table('magazines')->where(['user_id'=>$user_id])->where(['status'=>1])->count();
        $result['not_publish_magazines'] =DB::table('magazines')->where(['user_id'=>$user_id])->where(['status'=>0])->count();
//            return $result['not_publish_magazines'];
                return  view('admin.index',$result);
        }
    }
    public function index(){
//        $result['magazines']=Magazines::all();
        $result['magazines']=DB::table('magazines')
            ->leftJoin('users','users.id','=','magazines.user_id')
            ->leftJoin('categories','categories.id','=','magazines.category_id')
            ->orderBy('magazines.created_at','desc')
            ->select('magazines.*','users.name','categories.name as cname')
            ->where(['magazines.status'=>1])

            ->get();
//        echo "<pre>";
//        print_r($result['TopMenu']);
//        die();
        return view('front.index',$result);
    }
    public function singleMagazine($id){

        $result['magazine']=DB::table('magazines')
            ->leftJoin('users','users.id','=','magazines.user_id')
            ->leftJoin('categories','categories.id','=','magazines.category_id')
            ->orderBy('magazines.created_at','desc')
            ->select('magazines.*','users.name','categories.name as cname')
            ->where(['magazines.status'=>1])
            ->where(['magazines.id'=>$id])
            ->get();
        $result['comments']=DB::table('comments')->where(['magazine_id'=>$result['magazine'][0]->id])->where(['status'=>1])->get();
        $result['totlalComment']=DB::table('comments')->where(['status'=>1])->where(['magazine_id'=>$result['magazine'][0]->id])->count();
//                echo "<pre>";
//        print_r($result['totlalComment']);
//        die();



        return view('front.singleMagazine',$result);
    }
    public function comments(Request $request){
        $request->validate([
           'name'=>'required',
           'email'=>'required',
           'comment'=>'required',
        ]);
        $user_id=Auth::id();
        $comments=new Comment;
        $comments->name=$request->name;
        $comments->email=$request->email;
        $comments->magazine_id=$request->magazine_id;
        $comments->comment=$request->comment;
        $comments->user_id=$user_id;
        $comments->save();
        return redirect()->back()->with('success','your comment is submited please wait to verify by admin');


    }
    public function category($id){
        $result['magazines']=DB::table('magazines')
            ->leftJoin('users','users.id','=','magazines.user_id')
            ->leftJoin('categories','categories.id','=','magazines.category_id')
            ->orderBy('magazines.created_at','desc')
            ->select('magazines.*','users.name','categories.name as cname')
            ->where(['magazines.status'=>1])
            ->where(['magazines.category_id'=>$id])
            ->get();
//                        echo "<pre>";
//        print_r($result['magazines']);
//        die();
        return view('front.category',$result);

    }
}
