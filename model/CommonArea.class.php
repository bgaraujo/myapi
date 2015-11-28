<?php
class CommonArea extends AppMysql{
	public $table = "#_common_area";
	public $fields = Array(
		"id" => 			array("ignore" => true),
		"id_condominium" => array("required" => true),
		"id_tower" => 		array("required" => true),
		"name" => 			array("required" => true),
		"reference" => 		array(),
		"booking" => 		array("required" => true),
		"start_time" => 	array("required" => true),
		"end_time" => 		array("required" => true)
		);
}