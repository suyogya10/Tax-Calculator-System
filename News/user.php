<?php
    require "../userlogin/config.php";
    session_start();
    $email = $_SESSION['islogged'];
    $sql = "SELECT * FROM `tax_history` WHERE email = '$email'";
?>

<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>
    <div>
        <a href="calculator.php"><button class="home" name="Home"> Home </button></a>
    </div>

    <div class="heading">
        <h2 >History Table </h2>
    </div>

<table style="width:100%">
    <tr class="row">
        <th > Email</th>
        <th> Income Tax </th>
        <th> Vehicle Tax </th>
        <th> Date </th>
    </tr>

    <?php
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr class="data">
            <td><?php echo $row['email']; ?></td>
            <td>Rs <?php echo $row['income']; ?></td>
            <td><?php echo $row['vehicle']; ?></td>
            <td><?php echo $row['date']; ?></td>
        </tr>
        <?php
    }
    ?>

</table>

<style>
    .heading{
        text-align: center;
        font-size: 24px;
        font-weight: 600;
        color: black;
        }
    
    .row{
        font-size: 20px;
        background: #2D9CDB;
        color: black;
        
        
    }
    tr, th{
        border-color: #96D4D4;
        border-style: 2px solid ;
    }
    .row th{
        padding: 10px;
    }
    .data{
        font-size: 14px;
        background-color: #96D4D4;
        color: black;
        text-align: center;
    }
    
    .home{
        background-color: #2D9CDB;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        font-weight: medium;
        border-radius: 12px;
    }

    .home:hover{
        cursor:pointer;
        background: #045685;
        color:white;

    }
    .home:active{
        border: 2px solid #2D9CDB ;
        transform: scale(0.98);     
        box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
    }
    
</style>

</body>
</html>
