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
    \App\currency::whereRaw('id>0')->delete();
    $data = array();
    foreach ($hasil->result as $key ) {
      $curr = new \App\currency;
      $curr->code = $key->code;
      $curr->name = $key->name;
      $curr->save();
      $data['id'][$curr->id]=$key->code;
    }
    echo json_encode(
        array(
          'status_code'=>200,
          'inserted_data'=>sizeof($data['id'])
          )
      );
  }
  public function get_Country()
  {
    $api = new API;
    $hasil = $api->getCurl('general_api/listCountry');
    \App\Country::whereRaw('id>0')->delete();
    $data = array();
    foreach ($hasil->listCountry as $key ) {
      $ctr = new \App\Country;
      $ctr->country_id = $key->country_id;
      $ctr->country_name= $key->country_name;
      $ctr->country_areacode = $key->country_areacode;
      $ctr->save();

      $data['id'][$ctr->id]=$key->country_id;
    }
    echo json_encode(
        array(
          'status_code'=>200,
          'inserted_data'=>sizeof($data['id'])
          )
      );
  }

  public function view_Currency()
  {
    $s['data'] = \App\currency::all();
    return view('master.currency')->with($s);
  }
  public function view_Country()
  {
    $s['data'] = \App\Country::all();
    return view('master.country')->with($s);
  }

  public function view_language()
  	{
  		$s['data'] = \App\lang::all();
  		return view('master.language')->with($s);
  	}


	public function get_Language()
	{
		$api = new API;
		$hasil = $api->getCurl('general_api/listLanguage');


		\App\lang::whereRaw('id<>0')->delete();
		$data = array();
		foreach ($hasil->result as $key) {
			# code...
			$lang = new \App\lang;
			$lang->code = $key->code;
			$lang->name_short = $key->name_short;
			$lang->name_long = $key->name_long;
			$lang->save();
			$data['id'][$lang->id]=$key->code;
		}
		echo json_encode(
				array(
					'status_code'=>200,
					'inserted_data'=>sizeof($data['id'])
				)
		);
	}
  }
