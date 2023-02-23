<?php

class Connect{
     


	public function __construct()
	{
		$txtName = $_POST['txtName'];
		$txtlName = $_POST['txtlname'];
		$txtCountry = $_POST['txtCountry']; 
		$txtMessage = $_POST['txtMessage'];
		$isempty = $this->Validate($txtName,$txtlName,$txtCountry,$txtMessage);
		if($isempty){
			throw new InvalidArgumentException("Error");
		}
		$conn = $this->GetConnection('localhost', 'root', 'onlineshop');
		$rs = $this->InsertDate($txtName,$txtlName,$txtCountry,$txtMessage,$conn);
		if($rs){
			echo "Connect Work";
		}
		
		
	}
	private function InsertDate($txtName,$txtlName,$txtCountry,$txtMessage,$conn){
		$sql = "INSERT INTO `contact` (`Id`, `firstName`, `lastName`, `Country`, `Text`) VALUES ('0', '$txtName', '$txtlName', '$txtCountry', '$txtMessage')";
		$rs = mysqli_query($conn, $sql);
		return $rs;
	}
	private function Validate($txtName,$txtlName,$txtCountry,$txtMessage){
		$isempty = false;
		if(empty($txtName) || empty($txtlName) || empty($txtCountry) || empty($txtMessage)) {
           $isempty=true;
		}
		
        return $isempty;
	}
	private function GetConnection ($adress,$user,$database){
		
		return mysqli_connect($adress, $user, '',$database);
	}







}

$db=new Connect();
