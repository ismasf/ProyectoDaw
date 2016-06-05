<?php

require_once ('application/libraries/rb.php');
class Privacidad extends CI_Controller{

	function index(){


		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		$this->template->load("plantilla","estatico/privacidad");


	}


}