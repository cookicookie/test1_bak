<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Http\Request;
//上記のRequestでは::allをuseしている段階でしてくれているため、function内で::allを記述する必要がない
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Club_member;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function club_member_input(Request $request){
      return view('club_member_conf', compact('request'));
    }//club_member_confに返るのはオブジェクト、compactの配列が返るわけではない
    public function update(CreateUserRequest $request)
    {
        // validationが通った状態かつ、userAttributesに書いたキーでフィルタリングされたpostデータが取れる。
        // この時点でvalidationエラーが発生したら入力前の画面に戻ってくれる
        return view('club_member_conf', compact('request'));
        // パターン2
        //use Request;
        //　↑上記でuseしているファイルはIlluminate\Http\Requestでuseしているファイルと異なるファイル！
        // class Controller extends BaseController
        // {
        //     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
        //     public function member(Request $request){
        //       $post_data = $request::all();　　←:allしないとpostを返せない
        //       return view('club_member_conf', compact('post_data'));
        //     }
        //
        // }
    }

    public function club_member_done()
    {
    DB::table('test')->get();
    }
  public function insert(Request $request)
  {
    $club_member= new Club_member();
    $club_member->name = $request->name;
    $club_member->kana = $request->kana;
    $club_member->birth_year = $request->year;
    $club_member->birth_day = $request->date;
    $club_member->postal_code = $request->portal;
    $club_member->tel = $request->tel;
    $club_member->pref_type = $request->prefectures;
    $club_member->city = $request->municipality;
    $club_member->adress = $request->later;
    $club_member->other = $request->other;
    $club_member->fill([
        'name' => $request->name,
        'kana' => $request->kana,
        'birth_year' => $request->year,
        'birth_day' => $request->date,
        'postal_code' => $request->portal,
        'tel' => $request->tel,
        'pref_type' => $request->prefectures,
        'city' => $request->municipality,
        'adress' => $request->later,
        'other' => $request->other,
    ]);

    // データベースに値をinsert
    $club_member->save();
    //db保存パターン2
    //$club_member->create(['name' => $request->name,
    //'kana' => $request->kana,
    //'birth_year' => $request->year,
    //'birth_day' => $request->date,
    //'postal_code' => $request->portal,
    //'tel' => $request->tel,
    //'pref_type' => $request->prefectures,
    //'city' => $request->municipality,
    //'adress' => $request->later,
    //'other' => $request->other,
    //]);
  return view('club_member_done');
  }

  public function deleteData(Request $request){
  $club_member = Club_member::find($request->input('no'));
  $club_member->delete();}

}
