<?php
class Routes{
	public $module;
	public $mode;
	
	function __construct($route){
		$this->module = $route["module"];
		$this->mode = $route["mode"];
		$this->redirect();
	}

	private function redirect(){

		//just alter here, create a case for new modules.(class)
		switch ($this->module) {
			case "condominium":
				$controller = new Condominium;
				break;
			case "tower":
				$controller = new Tower;
				break;
			case "client":
				$controller = new Client;
				break;
			case "apartment":
				$controller = new Apartment;
				break;
			case "garage":
				$controller = new Garage;
				break;
			case "parking":
				$controller = new Parking;
				break;
			case "warning":
				$controller = new Warning;
				break;
			case "common-area":
				$controller = new CommonArea;
				break;
			case "research":
				$controller = new Research;
				break;
			case "answers":
				$controller = new Answers;
				break;
			case "result":
				$controller = new Result;
				break;
			case "booking":
				$controller = new Booking;
				break;
			case "event":
				$controller = new Event;
				break;

			default:
				echo json_encode(array("error" => "invalid module"));
				return false;
				break;
		}

		switch ($this->mode) {
			case 'create':
				$return = $controller->create();
				break;

			case 'read':
				$return = $controller->create();
				break;

			case 'update':
				$return = $controller->create();
				break;

			case 'delete':
				$return = $controller->create();
				break;

			case 'delete':
				$return = $controller->create();
				break;

			case 'login':
				$return = $controller->login();
				break;
			
			default:
				$return = array("error" => "invalid module");
				break;
		}

		echo json_encode($return);
	}
}