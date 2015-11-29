<?php
class Event extends AppMysql{
	public $table = "#_event";
	public $fields = Array(
		"id" => array("ignore" => true),
		"id_condominium" => array("required" => true),
		"id_common_area" => array(),
		"id_client" => array("required" => true),
		"title" => array("required" => true),
		"text" => array("required" => true),
		"star_date" => array("required" => true),
		"end_date" => array("required" => true)
		);
}