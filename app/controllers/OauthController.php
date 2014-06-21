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
			switch($service){
				case 'facebook':
					$result = json_decode( $service->request( '/me?fields=id' ), true );
					break;
				case 'google':
					$result = json_decode( $service->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );
					break;
				case 'twitter':
					$result = json_decode( $service->request( 'account/verify_credentials.json' ) );
					break;
				case 'linkedin':
					$result = json_decode( $service->request( '/people/~?format=json' ), true );
					break;
				default:
					break;
			}
			$data = array('network_id' =>  $result['id'], 'network' => 'facebook');
			Session::flash('success', 'Thankyou for logging in using Facebook. Please complete the form to complete registration.');
			return View::make('site/user/create', compact('data'));
		}
		else {
			$url = $fb->getAuthorizationUri();
			return Redirect::to( (string)$url );
		}
	}
}
