<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            max-width: 80%;
            margin: 0 auto;
        }
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 0.5em
            }   
    </style>
</head>
<body>


<?php

$connect = mysqli_connect("localhost","root","","datatest") or die ("Connect ERROR");
$sql ="SELECT * FROM setderp";
$result = mysqli_query($connect,$sql);

$len = mysqli_query($connect,'SELECT * FROM setderp ORDER BY id DESC LIMIT 1');
$row2 = mysqli_fetch_array($len,MYSQLI_NUM);


?>
    
    <table width="100%">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SERNAME</th>
            <th>Derpartment</th>
        </tr>
        <?php
        $presentTime = strtotime('now');
        for ($i=0; $i < $row2[0]; $i++) { 
            $row = mysqli_fetch_array($result,MYSQLI_NUM);
            echo $row[5];
            if($row[5] < $presentTime && $row[6]>0){
                $update = 'UPDATE setderp SET derp = "four", isUpdate = 0 WHERE id ='.$row[0];
                $aa = mysqli_query($connect,$update); 
                if(!$aa) {
                    mysqli_error($connect);
                }
            }
        echo'
        <tr>
            <td>'.$row[0].'</td>
            <td>'.$row[1].'</td>
            <td>'.$row[2].'</td>
            <td> '.$row[3].'</td>
        </tr>';

     } 
     ?>

     <?php 

    

     ?>
</table>

</body>
</html>