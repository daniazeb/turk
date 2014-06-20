<?php

class OauthController extends BaseController {

	public function __construct()
	{
		parent::__construct();
	}

	public function getLogin($service)
	{
		$code = Input::get( 'code' );
		$fb = OAuth::consumer( $service );
		if ( !empty( $code ) ) {
				$token = $fb->requestAccessToken( $code );
				$result = json_decode( $fb->request( '/me?fields=id' ), true );
				$data = array('network_id' =>  $result['id'], 'network' => 'facebook');
				Token::where('network_id', '=', $result['id']);
				Session::flash('success', 'Thankyou for logging in using Facebook. Please complete the form to complete registration.');
				return View::make('site/user/create', compact('data'));
		}
		else {
			$url = $fb->getAuthorizationUri();

			return Redirect::to( (string)$url );
		}
	}
}
