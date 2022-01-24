<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['category']=Category::all();
        return view('admin.categories.index',$result);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories,name',
            'description'=>'required'

        ]);
        $category=new Category;
        $category->name=$request->name;
        $category->description=$request->description;
        $category->save();
        return redirect()->back()->with('success','category addedd');

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
    public function show()
    {
        //
        return view('admin.categories.manage-category');
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
        $result['category']=Category::find($id);
        return view('admin.categories.edit',$result);

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
        $cat=Category::find($id);
        $cat->name=$request->name;
        $cat->description=$request->description;
        $cat->save();
        return redirect('admin/category')->with('success','category updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //user
        $cat=Category::find($id);
        $cat->delete();
        return redirect()->back()->with('success','Category Deleted');
    }
    public function status($status,$id){
        $cat=Category::find($id);
        $cat->status=$status;
        $cat->save();
        return redirect()->back()->with('success','status Updated');

    }
    public function users(){
        $users=Auth::user()->userType;
        if ($users==1){

        $result['users']=DB::table('users')
//            ->where(['userType'=>0])
            ->get();
//        prx($users);
        return view('admin.users.user',$result);
        }
else{
    return redirect('redirect');
}
    }
    public function delete_user($id)
    {
        //
        $cat=User::find($id);
        $cat->delete();
        return redirect()->back()->with('success','User Deleted');
    }
    public function User_status($status,$id){
        $cat=User::find($id);
        $cat->status=$status;
        $cat->save();
        return redirect()->back()->with('success',' user status Updated');

    }
}
