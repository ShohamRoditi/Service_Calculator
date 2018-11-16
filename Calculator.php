<?php
class Calculator{

	private $num1;
	private $num2;
	private $num3;
	private $func;

	public function __construct(){
		//default values
		$this->num1 = 0; 
		$this->num2 = 0;
		$this->num3 = 0;
		$this->func = "sum";
	}

	public function type_http_verbs($method){

		switch($method){
			case 'GET':
				if(isset($_GET['num1'])) 
					$this->num1 = (int)$_GET["num1"]; 
				else $this->num1 = 0; 

				if(isset($_GET['num2'])) 
					$this->num2 = (int)$_GET["num2"]; 
				else $this->num2 = 0; 

				if(isset($_GET['num3'])) 
					$this->num3 = (int)$_GET["num3"]; 
				else $this->num3 = 0; 

				if(isset($_GET['func'])) 
					$this->func = (string)$_GET["func"]; 
				else $this->func = "sum"; 

				break;

			case 'POST' :
				if(isset($_POST['num1'])) 
					$this->num1 = (int)$_POST["num1"]; 
				else $this->num1 = 0; 

				if(isset($_POST['num2'])) 
					$this->num2 = (int)$_POST["num2"]; 
				else $this->num2 = 0; 

				if(isset($_POST['num3'])) 
					$this->num3 = (int)$_POST["num3"]; 
				else $this->num3 = 0; 

				if(isset($_POST['func'])) 
					$this->func = (string)$_POST["func"]; 
				else $this->func = "sum"; 

				break;

			case 'PUT' :
				parse_str(file_get_contents("php://input"), $_vars);
				if($_vars['num1'] != null) 
					$this->num1 = (int) $_vars["num1"]; 
				else $this->num1 = 0; 

				if($_vars['num2'] != null) 
					$this->num2 = (int) $_vars["num2"]; 
				else $this->num2 = 0; 

				if($_vars['num3'] != null) 
					$this->num3 = (int) $_vars["num3"]; 
				else $this->num3 = 0; 

				if($_vars['func'] != null) 
					$this->func = (string) $_vars["func"]; 
				else $this->func = 'sum'; 

				break;

		}

	}

	public function calculate(){
		if($this->func == 'sum'){
				return $this->num1 + $this->num2 + $this->num3;
			}
		else if($this->func == 'avg'){
				return ($this->num1 + $this->num2 + $this->num3)/3;
			}
		else if($this->func == 'mult'){
				return $this->num1 * $this->num2 * $this->num3 ;
			}
		else{ return print('Error with parameter func');}

		}

	 }

?>