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
						'client_id'     => '313926208771352',
						'client_secret' => 'acbcf531a39184f21a5c40afa4db152b',
						'scope'         => array('email'),
				),	
				'google' => array(
						'client_id'     => '363267923714184',
						'client_secret' => '27b8c7acb88808cfcdca713430cb064a',
						'scope'         => array('userinfo_email', 'userinfo_profile'),
					),
				'linkedin' => array(
						'client_id'     => 'Your Linkedin API ID',
						'client_secret' => 'Your Linkedin API Secret',
				),  
				'twitter' => array(
						'client_id'     => 'Your Linkedin API ID',
						'client_secret' => 'Your Linkedin API Secret',
					), 	
				),
			);
