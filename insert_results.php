<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Insert Results Databse Connection Page
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php

header('Location: http://localhost/WinWay-University-Website/educa/insert_results.html',true);

 $con=new mysqli("127.0.0.1","root","","WinWay_University");

 if($con->connect_error){
    echo"failed";
}
else{
   echo"successfull";
}

if(isset($_POST['submit']))
{
    $sid=$_POST['sid'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $faculty=$_POST['faculty'];
    $branch=$_POST['branch'];
    $nic=$_POST['nic'];
    $indexNo=$_POST['indexNo'];
    $semester=$_POST['semester'];
    $subject=$_POST['subject'];
    $grade=$_POST['grade'];
    $comment=$_POST['comment'];
    $sign=$_POST['sign'];
    
    
    $sql="INSERT INTO results VALUES('$sid','$Fname', '$Lname','$faculty','$branch','$nic','$indexNo','$semester','$subject','$grade','$comment' , '$sign')";
    $con->query($sql);

}

if(isset($_POST['update']))
{
    $sid=$_POST['sid'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $faculty=$_POST['faculty'];
    $branch=$_POST['branch'];
    $nic=$_POST['nic'];
    $indexNo=$_POST['indexNo'];
    $semester=$_POST['semester'];
    $subject=$_POST['subject'];
    $grade=$_POST['grade'];
    $comment=$_POST['comment'];
    $sign=$_POST['sign'];
    
    $sql="UPDATE results SET sid='$sid', Fname='$Fname', Lname='$Lname', faculty='$faculty', branch='$branch', nic='$nic', semester='$semester', subject='$subject', grade='$grade', comment='$comment', sign='$sign' WHERE indexNo='$indexNo'";
    $con->query($sql);

}

?>
