<?php
namespace App\Views;

class View{

	public function __construct()
	{

	}

    public function render( $file){
		ob_start();
		require_once(__DIR__.'/Template/'.$file.'.php');
		return ob_get_clean();
	}

}
