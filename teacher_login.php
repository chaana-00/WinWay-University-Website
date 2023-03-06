<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Subscribe Emails Databse Connection Page
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
$login_username=$_POST['teacher_username'];
$login_password=$_POST['teacher_password'];

if($login_username=='teacher' && $login_password=='pass'){
    header("Location: http://localhost/WinWay-University-Website/educa/assets/insert_results.html");
}else{
    header('Location: http://localhost/WinWay-University-Website/educa/login.html',true);
}
?>