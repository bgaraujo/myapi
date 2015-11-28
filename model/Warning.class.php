<?php
class Warning extends AppMysql{
	public $table = "#_warning";
	public $fields = Array(
		"id" => array("ignored" => true),
		"id_condominium" => array("required" => true),
		"id_tower" => array("required" => true),
		"title" => array("required" => true),
		"text" => array("required" => true),
		"start_date" => array(),
		"end_date" => array()
		);
}