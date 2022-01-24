<?php
use Illuminate\Support\Facades\DB;

function getData(){
    $TopMenu=DB::table('categories')->where(['status'=>1])->get();
   return $TopMenu;
}
function prx($arr){
    echo "<pre>";
    print_r($arr);
    die();

}
