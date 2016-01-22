<?php 
namespace Modules\Hello\Http\Controllers\Backend;

use App\Http\Controllers\CoreController;
use Pingpong\Modules\Routing\Controller;
use App\Http\Controllers\Backend\AdminBaseController;

class HelloControllerController extends AdminBaseController {
	
	public function index()
	{
		return view('hello::index');
	}
	
}