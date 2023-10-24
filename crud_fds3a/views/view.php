<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css?v2">
</head>
<body>
    <div class="Header">
        <h1>RECORDS</h1>
    <table border="10";>
       <thead>
          <th>Student ID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Age</th>
          <th>Status</th>
          <th>Address</th>
          <th>Contact Number</th>
          <th>Action</th>
        </thead>
        <tbody>
        </div>
          
           <?php

           require_once('../controller/action.php');

           $record = getRecords();

           if(!empty($record)){
           foreach($record as $key){
           ?>
                <tr>
                    <td><?=$key['studid'] ?></td>
                    <td><?=$key['lname'] ?></td>
                    <td><?=$key['fname'] ?></td>
                    <td><?=$key['age'] ?></td>
                    <td><?=$key['stat'] ?></td>
                    <td><?=$key['address'] ?></td>
                    <td><?=$key['cn'] ?></td>
                    <td>
                        <div class="Update Button">
                        <a href="../updatestudent.php?id=<?=$key['id']?>">Edit</a>
                        <a href="delete.php?id=<?=$key['id']?>">Delete</a>
                        </div>
                    </td>
               </tr>
            <?php
                }
            }else{
                echo "No records found!";
            }
    
            ?>
        </tbody>   
    </table>   
</body>
</html>
  