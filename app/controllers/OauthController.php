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

				$data = array('network_id' =>  $result['id'], 'network' => 'facebook' , 'token' => $token);
				Token::where('network_id', '=', $result['id']);
							
				return View::make('site/user/create', compact('result'))->with('success', Lang::get('admin/blogs/messages.create.success'));
		}
		else {
			$url = $fb->getAuthorizationUri();

			return Redirect::to( (string)$url );
		}
	}
}
