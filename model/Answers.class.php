<?php
class Answers extends AppMysql{
	public $table = "#_answers";
	public $fields = Array(
		"id" => array("ignore" => true),
		"id_research" => array("required" => true),
		"title" => array("required" => true)
);
}