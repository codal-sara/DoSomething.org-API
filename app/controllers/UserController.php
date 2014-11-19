<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$drupal_uid = (int) Input::get('drupal_uid');
		$doc_id = (int) Input::get('doc_id');
		$mobile = Input::get('mobile');
		$email = Input::get('email');

		if($drupal_uid && !empty($drupal_uid)) {
			$user = User::where('drupal_uid', '=', $drupal_uid)->first();
		}
		elseif($doc_id && !empty($doc_id)) {
			$user = User::where('doc_id', '=', $doc_id)->first();
		}
		elseif($mobile && !empty($mobile)) {
			$user = User::where('mobile', '=', $mobile)->first();
		}
		elseif($email && !empty($email)) {
			$user = User::where('email', '=', $email)->first();
		}
		else {
			$user = false;
		}

		if(!$user) {
			return Response::json("The resource does not exist", 404);
		}
		else {
			return Response::json($user, 200);
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	/**
	 * Logging In
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function login()
	{
		//
	}


}
