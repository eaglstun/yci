<?

class UserController extends BaseController {
	
	/*
	*
	*/
	public function getIndex( $user_name = '' ){
		var_dump( func_get_args() );
	}
}