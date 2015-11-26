<?php
class Garage extends AppMysql{
	public $table = "#_garage";
	public $fields = Array(
		"id" => array("ignore" => true),
		"id_condominium" => array("required" => true),
		"id_tower" => array(),
		"name" => array("required" => true),
		"qtd_floor" => array("required" => true)
		);
}