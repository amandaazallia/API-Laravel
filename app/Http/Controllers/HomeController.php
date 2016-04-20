<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\TiketAPI\APIController ad API;

use App\Http\Requests;

class HomeController extends Controller
{
public function get_Currency()
{
    $api = new API;
    $hasil = $api->getCurl('general_api/listCurrency');
    \App\Currency::whereRaw('id<>0')->delete();
    $data = array();


    foreach ($hasil as $key) {
      $curr = new \App\Currency;
      $curr->code= $key->code;
      $curr->name=$key->name;
      $curr->save();
      $data['id'][$curr->id] = $key->code;
    }
    echo json_encode(
                array(
                  'status_code'=>200,
                  'inserted_data'=>sizeof($data['id'])
                )
              );
}
public function view_Currency(){
  $s['data'] = \App\Currency::all();
  return view('master_currency')->with($s);
}
public function view_Lang(){
  $s['data'] = \App\Lang
}
