<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class IndexController extends Controller{
	public function index1(){
		echo "he<br>";
		var_dump(env);
		return "1";
	}
}
?>