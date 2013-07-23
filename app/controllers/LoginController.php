<?
/*
Client ID:		1023497629811.apps.googleusercontent.com
Email address:	1023497629811@developer.gserviceaccount.com
Client secret:	vpRll1J4QIDnV5zjuf_wGyvO
*/
class LoginController extends BaseController {
	
	/*
	*
	*/
	public function getIndex(){
		$client = new Google_Client();
		$client->setApplicationName( 'YCI' );
		
		$client->setClientId( '1023497629811.apps.googleusercontent.com' );
		$client->setClientSecret('vpRll1J4QIDnV5zjuf_wGyvO');
		$client->setRedirectUri('http://yci.ericeaglstun.com/login/c');
		$client->setScopes( array(
			'scope' => 'https://www.googleapis.com/auth/plus.me'
		) );
		
		$url = $client->createAuthUrl();
		header( 'Location: '.$url );
		
		die();
	}
	
	/*
	*
	*/
	public function getCallback(){
		
		var_dump( func_get_args() );
	}
}