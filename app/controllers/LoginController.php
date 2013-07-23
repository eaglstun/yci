<?

class LoginController extends BaseController {
	
	/*
	*
	*/
	public function getIndex(){
		$client = new Google_Client();
		$client->setApplicationName( 'YouTube Credibility Index' );
		
		var_dump( $client );
	}
}