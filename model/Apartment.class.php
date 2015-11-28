<?php
class Apartment extends AppMysql{
	public $table = "#_apartment";
	public $fields = Array(
		"id" => array("ignored" => true),
		"id_condominium" => array("required" => true),
		"id_tower" => array("required" => true),
		"floor" => array("required" => true),
		"identifier" => array()
		);
}