<?
/*
Client ID:		1023497629811.apps.googleusercontent.com
Email address:	1023497629811@developer.gserviceaccount.com
Client secret:	vpRll1J4QIDnV5zjuf_wGyvO
*/
class LoginController extends BaseController {
	
	/*
	*	generates the login url and redirects for user auth
	*/
	public function getIndex(){
		$client = new Google_Client();
		$client->setApplicationName( 'YCI' );
		
		$client->setClientId( '1023497629811.apps.googleusercontent.com' );
		$client->setClientSecret('vpRll1J4QIDnV5zjuf_wGyvO' );
		$client->setRedirectUri('http://yci.ericeaglstun.com/login/c' );
		$client->setScopes( array(
			'scope' => 'https://www.googleapis.com/auth/plus.me'
		) );
		
		$yt = new Google_YouTubeService( $client );
		
		$url = $client->createAuthUrl();
		header( 'Location: '.$url );
		
		die();
	}
	
	/*
	*	handles user auth and sets local session
	*/
	public function getCallback(){
		$client = new Google_Client();
		$client->setApplicationName( 'YCI' );
		
		$client->setClientId( '1023497629811.apps.googleusercontent.com' );
		$client->setClientSecret('vpRll1J4QIDnV5zjuf_wGyvO' );
		$client->setRedirectUri('http://yci.ericeaglstun.com/login/c' );
		
		if( $_SESSION['token'] ){
			$client->setAccessToken( $_SESSION['token'] );
		} else {
			$_SESSION['token'] = $client->getAccessToken();
		}
		
		$yt = new Google_YouTubeService( $client );
		$client->authenticate();
		
		
		var_dump( 'here' );
		
		var_dump( $yt->activities->listActivities('id', array('home' => 'true')) );
	}
	
	/*
	*	@todo move to model perhaps
	*/
	private function getClient(){
	
	}
}