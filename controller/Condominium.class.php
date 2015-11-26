<?php
class Condominium extends AppMysql{
	public $table = "#_condominium";
	public $fields = Array(
		"id" => array("ignore" => true),
		"name" => array("required" => true),
		"image" => array(),
		"color" => array("required" => true),
		"status" => array(),
		"address" => array("required" => true)
		);
}