<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Session\TokenMismatchException;
use App\Http\Requests\CreateloginRequest;
use App\Models\Users;
use App\content;
use App\Http\Controllers\Controller,
    Session;



class LoginController extends Controller
{
    public function login_to_top(Request $request){//ログイン画面
        $this->validate($request, [
                'id' => 'required|exists:login,id',//バリデーションのルールを記述
                'pass' => 'required|exists:login,pass',
            ],
            [
                'id.required' => ':attributeは必須です',//エラーメッセージの定義
                'pass.required' => ':attributeは必須です',
                'id.exists'  => ':attributeが違います',
                'pass.exists'  => ':attributeが違います',
            ]);
            Session::put('Auth', 1);
            //Session::flush();

            //Session::flush();
            //  $request->session()->put('Auth', 1);
            // if($request = Session::has('Auth')){
            //    echo "sessionあり";
            //  }else {
            //    echo "sessionなし";
            //  }

            // $contents = DB::table('contents')->orderBy('no', 'asc')->get();
            // $request = $contents;
    return view('admin_new_top', compact('request'));//requestで渡す
    }

    public function lists(Request $request){
        if($request = Session::has('Auth')){
          if(empty($_GET['sort']) || empty($_GET['order'])){
            $_GET['sort'] = 'no';
            $_GET['order'] = 'DESC';
          }
          $contents = DB::table('contents')->where('status', 1)->orderBy($_GET['sort'], $_GET['order'])->get();
          $request = $contents;
          return view('admin_new_list', compact('request'));
       }else {
           return view('ramen_login');
       }
    }

//     public function top_to_list(Request $request){
//         $contents = DB::table('contents')->where('status', 1)->get();
//         $request = $contents;
//     return view('admin_new_top', compact('request'));//requestで渡す
// }

    public function list_to_edit(Request $request){
        if($request = Session::has('Auth')){
            $contents = DB::table('contents')->where('no', $_GET['ramen_new_no'])->first();
            $request = $contents;
            return view('admin_new_edit', compact('request'));
       }else{
         return view('admin_new_edit');
       }
    }

  public function edit_to_conf(Request $request){
    //if($request = Session::has('Auth')){
      if($_GET['mode'] == 'new' || $_GET['mode'] == 'edit'){
        $contents = DB::table('contents')->get();
        $request = $contents;
        echo "qqqqq";
      }
      if($_GET['mode'] == 'del'){
        $contents = DB::table('contents')->where('no', $_GET['ramen_new_no'])->first();
        $request = $contents;
      }
      return view('admin_new_conf', compact('request'));
   // }else{
   //   return view('admin_new_conf');
   }



  public function conf_to_done(Request $request){
//    $content= new content(); //insert文に該当する
//    $content->contents = $request->contents;
//    $content->create(['contents' => $request->contents,
//    ]);
//    $contents = DB::table('contents');
//    $request = $contents;
if($request = Session::has('Auth')){
  if($_GET['mode'] == 'new'){
      $content= new content(); //insert文に該当する
      $content->contents = $request->contents;
      $content->create(['contents' => $request->contents,
      ]);
      $contents = DB::table('contents');
      $request = $contents;
  }
  if($_GET['mode'] == 'edit'){
      content::where('no', $_GET['ramen_new_no'])
        ->update(['contents' => $request->contents]);
  }
  if($_GET['mode'] == 'del'){
    $contents = DB::table('contents')->where('no', $_GET['ramen_new_no'])->update(['status' => 0]);
    $request = $contents;
    //$contents = DB::table('contents')->where('status', 0)->value('contents');
    //$request = $contents;
  }
  // return view('admin_new_done', compact('request'));
}else{
  return view('admin_new_done');
}


  }


  public function session(Request $request){
     Session::flush();
     return view('ramen_login', compact('request'));
   }

   public function practics_select(Request $request){
     $logins = DB::table('login')->get();
     //$logins = DB::table('login')->where('no',3)->first();
     $request = $logins;
     return view('admin_new_list', compact('request'));
   }

   public function practics_update(Request $request){
     DB::table('login')
       ->where('no', 1)
       ->update([
         'id' => 'xyp'
       ]);
   }

     public function practice_insert(Request $request){
       $login= new Login(); //insert文に該当する
       $login->id = $request->id;
       $login->pass = $request->pass;
       $login->create(['id' => $request->id,
       'pass' => $request->pass,
       ]);
       $logins = DB::table('login');
       $request = $logins;
     return view('admin_new_list', compact('request'));
     }




}
