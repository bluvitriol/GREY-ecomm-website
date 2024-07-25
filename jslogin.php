<?php
// require_once('login_conn.php');
// echo 'hello from jslogin';


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from login_user WHERE email=? and password=? LIMIT 1";
$stmtselect=$con->prepare($sql);
$result=$stmtselect->execute([$name, $email, $password]);

if($result){
    // echo 'success';
    $user=$stmtselect->fetch(PDO::FETCH_ASSOC);
    // var_dump($user);
    if($stmtselect->rowCount()>0){
        echo '1';
    }else{
        echo 'There is no user with that combo';
    }
}
else{
    echo 'there were erros in connecting';
}
?>