<?php 
namespace \Kaankilic\Eden\Http\Controllers;
use App;
use App\Models\Users;
class EdenController extends Controller{
	public $apiKey = null;

	public function __construct(){
		$this->beforeFilter(function(){
			$RequestedToken = $this->request->header("X-Authentication");
			$Users = Users::where("BearerToken","=",$RequestedToken)->first();
			if (is_null($User)) {
            	return $this->response->errorUnauthorized();
			}
		});
	}
}
?>