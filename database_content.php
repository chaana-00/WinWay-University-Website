<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Database Content Showing Page
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 20px;
        text-align: left;
        }

        th {
        background-color: #fc5b1d;
        color: white;
        }

        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
    <h1>ADMIN LOGIN - DATABASE OF THE WINWAY UNIVERSITY</h1>
    <button><label><a href="http://localhost/WinWay-University-Website/educa/index.html">HOME</a></button>
<body>


<br>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Table 1 - Registration table
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<table border="1pt">
<h3>The database of Registered Students details</h3>
    <tr>
        <th>Fname</th>
        <th>Lname</th>
        <th>faculty</th>
        <th>birthday</th>
        <th>PFname</th>
        <th>PLname</th>
        <th>address</th>
        <th>nic</th>
        <th>city</th>
        <th>email</th>
        <th>phone</th>
        <th>comment</th>
        <th>sign</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "WinWay_University");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo"The database of Registered Students details";
        echo "</td><td>" . $row["Fname"] . "</td><td>" . $row["Lname"] . "</td><td>" . $row["faculty"] . "</td><td>" . $row["birthday"] . "</td><td>" . $row["PFname"] . "</td><td>" . $row["PLname"] . "</td><td>" . $row["address"] . "</td><td>" . $row["nic"] . "</td><td>" . $row["city"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["comment"] . "</td><td>" . $row["sign"] ."</td></tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
echo"<br><br><br>";
?>


<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Table 2 - Contact table
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<table border="1pt">
<h3>The database of Conatct details</h3>
    <tr>
        <th>name</th>
        <th>phone</th>
        <th>email</th>
        <th>subject</th>
        <th>message</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "WinWay_University");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    //echo"The database of Conatct details";
    while($row = $result->fetch_assoc()) {
        echo  "</td><td>" . $row["name"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["email"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["message"] ."</td> </tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
echo"<br><br><br>";
?>


<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Table 3 - Subscribe table
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<table border="1pt">
<h3>The database of Subscribed email list</h3>
    <tr>
        <th>email</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "WinWay_University");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT email FROM subscribe";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    //echo"The database of Subscribed email list";
    while($row = $result->fetch_assoc()) {
        echo  "</td><td>" . $row["email"] ."</td> </tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
echo"<br><br><br>";
?>
</table>
</body>
</html>