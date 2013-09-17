<?

class PageController extends BaseController {
	
	/*
	*
	*/
	public function getIndex( $page = 1 ){
		return View::make( 'archive' );
	}
}