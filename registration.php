<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Registration Details Database Connection Page
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php

header('Location: http://localhost/WinWay-University-Website/educa/apply_form.html',true);

 $con=new mysqli("127.0.0.1","root","","WinWay_University");

 if($con->connect_error){
    echo"failed";
}
else{
   echo"successfull";
}

if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $faculty=$_POST['faculty'];
    $birthday=$_POST['birthday'];
    $PFname=$_POST['PFname'];
    $PLname=$_POST['PLname'];
    $address=$_POST['address'];
    $nic=$_POST['nic'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];
    $sign=$_POST['sign'];
    
    $sql="INSERT INTO registration VALUES('$id','$Fname','$Lname','$faculty','$birthday','$PFname','$PLname','$address','$nic','$city','$phone','$email','$comment','$sign')";
    $con->query($sql);
}

?>
