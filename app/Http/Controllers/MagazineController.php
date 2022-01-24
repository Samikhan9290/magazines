<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Magazines;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=Auth::id();
        $user_type=Auth::user()->userType;
        if ($user_type==1){


        //
        $result['magazines']=DB::table('magazines')->leftJoin('users','users.id','=','magazines.user_id')->select('magazines.*','users.name')->get();
        }
        else{
            $result['magazines']=DB::table('magazines')->leftJoin('users','users.id','=','magazines.user_id')->select('magazines.*','users.name')
                ->where(['user_id'=>$user_id])
                ->get();

        }
//        echo "<pre>";
//        print_r($user_id);
//        die();
        return view('admin.magazines.index',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        //
        $result['magazine']=Magazines::find($id);
//        $result['magazine']=DB::table('magazines')->where(['id'=>$id])
//            ->leftJoin('users','users.id','=','magazines.user_id')
//            ->get();
//
//        return $result['magazine'];
        return view('admin.magazines.view',$result);
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
        $request->validate([
           'title'=>'required',
           'description'=>'required',
           'image'=>'required',
           'pdf'=>'required',
        ]);
        $magazine=new Magazines;

        $user_id=Auth::id();
        $magazine->title=$request->title;
        $magazine->category_id=$request->category_id;
        $magazine->description=$request->description;
        $image=$request->image;
        $imageName=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('MagazinesImages',$imageName);
        $magazine->image=$imageName;
        $pdf=$request->pdf;
        $imageName=time().'.'.$pdf->getClientOriginalExtension();
        $request->pdf->move('Magazines_pdf',$imageName);
        $magazine->pdf=$imageName;
        $magazine->user_id=$user_id;
        $magazine->save();
        return redirect()->back()->with('success','Magazines added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $result['categories']=DB::table('categories')->where(['status'=>1])->get();
//        echo "<pre>";
//        print_r($result['categories']);
//        die();
        return view('admin.magazines.manage-magazines',$result);

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
        $result['categories']=DB::table('categories')->where(['status'=>1])->get();

        $result['magazine']=Magazines::find($id);
        return view('admin.magazines.edit-magazines',$result);
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
        $magazine = Magazines::find($id);
        $magazine->title = $request->title;
        $magazine->category_id = $request->category_id;
        $magazine->description = $request->description;
        $image = $request->image;
        if ($image) {

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('MagazinesImages', $imageName);
            $magazine->image = $imageName;
        }
        $pdf = $request->pdf;
        if ($pdf){
            $imageName = time() . '.' . $pdf->getClientOriginalExtension();
        $request->pdf->move('Magazines_pdf', $imageName);
        $magazine->pdf = $imageName;
    }
        $magazine->save();
        return redirect('admin/magazine')->with('success','magazine updated');
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
        $cat=Magazines::find($id);
        $cat->delete();
        return redirect()->back()->with('success','Magazine Deleted');
        //
    }
    public function status($status,$id){
        $cat=Magazines::find($id);
        $cat->status=$status;
        $cat->save();
        return redirect()->back()->with('success','status Updated');

    }

}
