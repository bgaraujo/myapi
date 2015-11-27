<?php
class Client extends AppMysql{
	public $table = "#_client";
	public $fields = Array(
		"id" => array("ignore" => true),
		"id_condominium" => array("required" => true),
		"id_ap" => array("required" => true),
		"name" => array("required" => true),
		"age" => array(),
		"branch_line" => array(),
		"phone1" => array(),
		"phone2" => array(),
		"email" => array("required" => true),
		"password" => array("required" => true),
		"facebook_id" => array(),
		"image" => array(),
		"janitor" => array(),
		"gender" => array("required" => true),
		"auto_plate" => array(),
		"question" => array("required" => true),
		"reply" => array("required" => true)
		);

	public function login($user,$password){
		
	}
}