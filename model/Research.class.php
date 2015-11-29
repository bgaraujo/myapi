<?php
class Research extends AppMysql{
	public $table = "#_research";
	public $fields = Array(
		"id" => array("ignore" => true),
		"id_condominium" => array("required" => true),
		"id_tower" => array("required" => true),
		"name" => array("required" => true),
		"text" => array("required" => true),
		"start_date" => array("required" => true),
		"end_date" => array("required" => true)
		);
}