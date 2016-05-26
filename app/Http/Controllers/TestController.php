<?php namespace Cinema\Http\Controllers;

class TestController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return view('welcome');
            return "hola desde Test Controller";
	}

        public function name($name)
	{
            return "Hola mi nombre es : ".$name;
	}

}
