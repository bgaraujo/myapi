<?php
class Result extends AppMysql{
	public $table = "#_result";
	public $fields = Array(
		"id" => array("ignore" => true),
		"id_research" => array("required" => true),
		"id_answers" => array("required" => true),
		"id_client" => array("required" => true)
		);
}