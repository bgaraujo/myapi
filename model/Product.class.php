<?php

	class Product extends AppMysql{
		public $table = "product";
		public $fields = array(
			"name" => array("type"=>"text"),
			"type" => array("type"=>"text"),
			"category" => array("type"=>"text"),
			"price" => array("type"=>"text")
			);
	}