<?php
class Tower extends AppMysql{
	public $table = "#_tower";
	public $fields = Array(
		"id" 				=> array("ignore" => true),
		"id_condominium" 	=> array("required" => true),
		"name" 				=> array("required" => true),
		"floors" 			=> array("required" => true),
		"qtd_und_floor" 	=> array("required" => true),
		"qtd_elevator" 		=> array("required" => true)
		);
}