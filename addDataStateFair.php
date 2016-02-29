<!DOCTYPE html>
<html>
<head>
    <body>

    <h1>Parking Display</h1>
    <?php
        include 'dbcon.php';

        $sql = "SELECT SensorId,Available,Position FROM parkinglot";
        $result = $conn->query($sql);
        header("Refresh:0");
    ?>


<style>

.data

{
    border:black solid;
    margin-left:235px;
    width:100px;
    text-align: center;
}

.position
{
    border:black solid;
    margin-left:130px;
    width:100px;
    text-align: center;
    margin-top:-202px;   
}
#table
{
    margin-top:200px;
}
#vert1{
border-top: 1px solid black;
width: 200px;
margin-top:-115px;
margin-left:135px;
}

#vert2{
border-top: 1px solid black;
width: 200px;
margin-top:20px;
margin-left:135px;
}

#vert3{
border-top: 1px solid black;
width: 200px;
margin-top:20px;
margin-left:135px;
}

#vert4{
border-top: 1px solid black;
width: 200px;
margin-top:20px;
margin-left:135px;
}

#vert5{
border-top: 1px solid black;
width: 200px;
margin-top:20px;
margin-left:135px;
}

</style>

<div id="table">
<div class="data">
        <h3>Availability</h3>
    <?php
          foreach ( $result as $row)
        {
            echo  $row["Available"];
            echo "<br/>";
        }
?>
</div>

<div class="position">
    <h3>Position</h3>
    <?php
    foreach ( $result as $row ) 
        {
          echo $row["Position"];
          echo "<br/>";
        }
?>

    </div>
</div>

<div id="vert1"></div>
<div id="vert2"></div>
<div id="vert3"></div>
<div id="vert4"></div>
<div id="vert5"></div>

</body>
</head>
</html>