<?php
class Booking extends AppMysql{
	public $table = "#_booking";
	public $fields = Array(
		"id" => array("ignore" => true),
		"id_condominium" => array("required" => true),
		"id_common_area" => array("required" => true),
		"id_client" => array("required" => true),
		"start_date" => array("required" => true),
		"end_date" => array("required" => true)
		);
}