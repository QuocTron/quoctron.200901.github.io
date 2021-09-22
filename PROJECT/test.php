<?php
$Name ='';
if(isset($_GET['Name'])){
    $Name = $_GET['Name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAI QQ</title>
</head>
<body>
    <h1>Hello <?=$Name?> sờ kaai</h1>
</body>
</html>