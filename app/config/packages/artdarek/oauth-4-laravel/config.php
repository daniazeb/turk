<?php 

return array( 

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	 */

		/**
		 * Storage
		 */
		'storage' => 'Session', 

		/**
		 * Consumers
		 */
		'consumers' => array(

				/**
				 * Facebook
				 */
				'facebook' => array(
						'client_id'     => '363267923714184',
						'client_secret' => '27b8c7acb88808cfcdca713430cb064a',
						'scope'         => array('email'),
				),	
				'google' => array(
						'client_id'     => '363267923714184',
						'client_secret' => '27b8c7acb88808cfcdca713430cb064a',
						'scope'         => array('userinfo_email', 'userinfo_profile'),
				),	
		),
);
