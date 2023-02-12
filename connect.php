<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $comfirmp = $_POST['confirmp'];

//data base connection
$conn = new mysqli ('localhost','root','','database,);
if($coon->connect_error){
    die('Connection Failed   : ' .$conn-connect_error);
}else{
    $stmt =   $conn->prepare('insert into registration(firstname, lastname, email, number, password, confirmp) )values(?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi" ,$firstname, $lastname, $email, $number, $password, $confirmp);
$stmt->execute();
echo "Registration Success!!!!!";
$stmt->close();
$conn->close();

}

?>