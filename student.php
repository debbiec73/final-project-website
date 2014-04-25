<?php
// require authentication for most pages
//if (empty($_SESSION['id']))
//{
    //header("Location:signin.php");
//}
session_start();
$_SESSION = $gplus_id;

?>

<html>
<body>
<table border = 1>
    <tr>
        <th>StudentName</th>
    </tr>
    <?php
    $connectDB=mysqli_connect("localhost", "root", "hunter99", "website");
    if(mysqli_connect_errno($connectDB))
    {
        echo "Failed to connect to mysql" . mysqli_connect_error();
    }
    $sql="SELECT student FROM students WHERE id= 'id'";
    $result=mysqli_query($connectDB, $sql);

    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['student'] . "</td>";
        echo "<td><input type='button' value='Delete' </td>";
        echo "</tr>";
        echo $row['student'];
    }


    mysqli_close($connectDB);
    ?>

</table>
</body>
</html>
<?php
header("Location:student.html");
?>

