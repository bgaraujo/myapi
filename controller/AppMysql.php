<?php

	Class AppMysql {
		public $name = "Teste Mysql OK";

		function __construct(){
			foreach ($this->fields as $key => $value) {
				$this->$key = null;
			}
		}

		public function create($object = null){
			$this->convertPost();
			if(!$this->verifyRequired())
				return false;
			$query = "INSERT INTO {$this->table} (";
			$aux = null;
			foreach($this->fields as $name => $detail){
				if(!isset($detail["ignore"]) || $detail["ignore"] == false)
					$aux .= $name.",";
			}
			$query .= substr($aux, 0 ,-1).") VALUES (";
			$aux = null;
			foreach ($this->fields as $name => $detail) {
				if(!isset($detail["ignore"]) || $detail["ignore"] == false)
					$aux .= "\"".utf8_encode($this->$name)."\",";
			}
			$query .= substr($aux, 0 , -1).");";
			return $this->query($query);
		}

		public function verifyRequired(){
			foreach ($this->fields as $name => $detail) {
				if(isset($detail["required"]) && $detail["required"] == true){
					if($this->$name == "" || $this->$name == null){
						$this->log(array("error" => "required field"));
						return false;
					}
				}
			}
			return true;
		}

		protected function connect(){
			$conn = new mysqli(HOST,USER,PASSWORD,DB);
			return $conn;
		}

		private function query($query){
			$query = str_replace("#", PREFIX, $query);
			$conn = $this->connect();
			$conn->query($query);
			if($conn->error_list){
				$this->log($conn->error_list);
				return false;
			}
			return true;
		}

		private function convertPost(){
			foreach ($this->fields as $name => $detail) {
				$this->$name = (isset($_POST[$name]))?$_POST[$name]:null;
			}
		}

		public function log($log){
			$path = "log/".date("d-m-Y",time()).".txt";
			$txt = fopen($path, "a");
			fwrite($txt, date("d-m-Y H:i:m",time())." - ".json_encode($log)."\n");
			fclose($txt);
		}

	}