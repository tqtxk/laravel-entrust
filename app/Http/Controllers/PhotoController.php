<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PhotoController extends BaseController {
	public function index(Request $request) {
		$code = $request->get('code');
//		if ($code) {
//			$http = new \GuzzleHttp\Client([
//			  'headers' => [
//				"Host" => "laravel-entrust"
//			  ]
//			]);
//
//			$response = $http->post('http://127.0.0.1/oauth/token', [
//				'form_params' => [
//					'grant_type' => 'authorization_code',
//					'client_id' => '3',
//					'client_secret' => 'OcGxGMvMhrj4H59ngGx7QyYelN29Zamxn5i3EQZQ',
//					'redirect_uri' => 'http://laravel-entrust/photo',
//					'code' => $code,
//				]
//			]);
//
//			return json_decode((string) $response->getBody(), TRUE);
//
//		}
		return $code ? $code : 'code';
	}

	public function show($photoId) {
		return 'photo-index' . $photoId;
	}


}
