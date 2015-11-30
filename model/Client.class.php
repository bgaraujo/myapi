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

	public function login(){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$query = "SELECT * FROM {$this->table} WHERE password = \"$password\" and email = \"$email\";";
		return $this->query($query);
	}
}