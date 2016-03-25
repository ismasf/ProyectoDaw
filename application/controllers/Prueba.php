<?php
class Prueba extends CI_Controller{
	function ver(){
		$data=['title'=>'El titulo va aqui'];
		$this->template->load('falso', 'prueba/principal', $data);
	}
	
	function saludar(){
		$this->template->load('default','welcome');
	}
}