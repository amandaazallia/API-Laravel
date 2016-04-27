<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\TiketAPI\APIController as API;

use App\Http\Requests;

// use App\currency;

class HomeController extends Controller
{
public function get_Currency()
{
    $api = new API;
    $hasil = $api->getCurl('general_api/listCurrency');
    dd($hasil);
    \App\currency::whereRaw('id<>0')->delete();
    $data = array();


    foreach ($hasil as $key) {
      $curr = new \App\currency;
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
  $s['data'] = \App\currency::all();
  return view('master_currency')->with($s);
}
// public function view_Lang(){
//   $s['data'] = \App\Lang
// }
// public function get_Country(){
//   $api = new \App\Country;
//   $hasil = $api->getCurl('general_api/listCountry');
//   \App\Country::whereRaw('')->delete();
//   $data = array();
//   foreach ($hasil->listCountry as $key) {
//     $ctr = new \App\Country;
//     $ctr->country_id = $key->country_id;
//     $ctr->country_name = $key->country_name;
//     $ctr->country_areacode = $key->country_areacode;
//     $ctr->save();
//     $data['id'][$ctr->id] = $key->country_id;
//   }
//   echo json_encode(
//   array(
//
//   )
//   )
//
}
