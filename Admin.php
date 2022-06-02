<?php
include('header.php');
?>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Page</title>
<style>
    .tbl1{
        padding:50px;
        border-radius:100px;
    }
</style>
</head>
<br><br><br>
<center><h1>Welcome Back Admin</h1></center>
<?php

include('connection.php');


$query = "SELECT *FROM register WHERE Type != 'Admin'";
$result= mysqli_query($con , $query);
echo "<center> ";
echo "<form method='post'>";
echo "<table border='1' width='70%'>";
echo " <tr>
            <td></td><td><b>Email</b></td><td><b>IDUQ</b></td><td><b>Name</b></td><td><b>Company Name</b></td><td><b>Status</b></td>
";
$i = 1;
$idArray = array();
if($result){
    
    while($row2 = mysqli_fetch_array($result)){
        $idArray[$i] = $row2[1];
        if($row2[11] == 'pending'){
      //  echo "<table border='1'>";
        echo "<tr>";
        echo "<td>".$i."</td><td>". $row2[4]. "</td><td>".$row2[1]."</td><td>".$row2[2]."</td><td>".$row2[9]."</td><td>".$row2[11]."</td>"."<td><center><button name='uploadBtn' value='".$i."'>Update</button></center></td>";
        echo "</tr>";

      //  echo "</table>";
        }else{
            echo "<tr>";
            echo "<td>".$i."</td><td>". $row2[4]. "</td><td>".$row2[1]."</td><td>".$row2[2]."</td><td>".$row2[9]."</td><td>".$row2[11]."</td><td></td>";
            echo "</tr>";
        }
        $i++;

    }
}
echo "</center> ";
//$All_Emails =$row2['Email'];

echo "</table></form>";


?>

<?php
if(isset($_POST['uploadBtn'])){
    $indexID = $_POST['uploadBtn'];
    $num = $idArray[$indexID];
    echo $num;

$insert ="UPDATE `register` SET `STATUS`='OK' WHERE IDUQ = $num";

$query = mysqli_query($con , $insert);

if ($query){
    echo "<script>alert('Successfully Update')</script>";
    header("Refresh:0");
 }


}

?>


</body>