<?php
class Parking extends AppMysql{
	public $table = "#_parking";
	public $fields = Array(
		"id" => array("ignore" => true),
		"id_condominium" => array("required" => true),
		"id_garage" => array("required" => true),
		"id_dweller" => array("required" => true),
		"floor" => array("required" => true),
		"access" => array(),
		"identifier" => array("required" => true),
		"plus" => array()
		);
}