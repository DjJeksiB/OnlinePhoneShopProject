<?php
class AddBill
{
    public function __construct()
    {
        $ProductName = $_POST['ProductName'];
        $ProductCode = $_POST['ProductCode'];
        $ProductPrice = $_POST['ProductPrice'];

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["ProductImage"]["name"]);
        move_uploaded_file($_FILES["ProductImage"]["tmp_name"], $target_file);

        $isempty = $this->Validate($ProductName, $ProductCode, $ProductPrice, $target_file);
        if ($isempty) {
            throw new InvalidArgumentException("Error");
        }

        $conn = $this->GetConnection('localhost', 'root', 'onlineshop');
        $rs = $this->InsertDate($ProductName, $ProductCode, $ProductPrice, $target_file, $conn);
        if ($rs) {
            echo "Connect Work";
            echo $ProductName, $ProductCode, $ProductPrice, $target_file;
        }

        
        
    }

    private function Validate($ProductName, $ProductCode, $ProductPrice, $ProductImage)
    {
        if (filter_var($ProductPrice, FILTER_VALIDATE_FLOAT) === false) {
            throw new InvalidArgumentException("Not Valid Format For Price");
        }

        $isempty = false;
        if (empty($ProductName) || empty($ProductCode) || empty($ProductPrice) || empty($ProductImage)) {
            $isempty = true;
        }

        return $isempty;
    }

    private function InsertDate($ProductName, $ProductCode, $ProductPrice, $ProductImage, $conn)
    {
        $sql = "INSERT INTO `producti` (`Id`, `name`, `code`, `price`, `image`) VALUES ('0', '$ProductName', '$ProductCode', '$ProductPrice', '$ProductImage')";
        $rs = mysqli_query($conn, $sql);
        return $rs;
    }

    private function GetConnection($adress, $user, $database)
    {
        return mysqli_connect($adress, $user, '', $database);
    }
}



$Add = new AddBill();
