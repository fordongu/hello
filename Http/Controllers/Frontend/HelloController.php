<?php 
namespace Modules\Hello\Http\Controllers\Frontend;

use App\Http\Controllers\CoreController;

class HelloControllerController extends CoreController {
	
	public function index()
	{
		return view('hello::index');
	}
	
}