<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <a href="views/view.php">View Data</a>
    <?php
        require_once __DIR__ . '/./views/selectstudent.php';
        foreach($student as $key):
    ?>
    <center>
       <h2>Update Panel</h2>
    </center>

        <form action="./views/update.php" method="post">
        <input type="hidden" name="id" value="<?= $key['id']; ?>">
        <input type="text" name="studid" placeholder="Enter Student Id" value="<?= $key['studid']; ?>">
        <input type="text" name="lname" placeholder="Enter Last Name"  value="<?= $key['lname']; ?>">
        <input type="text" name="fname" placeholder="Enter First Name"  value="<?= $key['fname']; ?>">
        <input type="text" name="age" placeholder="Enter Age"  value="<?= $key['age']; ?>">
        <input type="text" name="stat" placeholder="Enter Status"  value="<?= $key['stat']; ?>">
        <input type="text" name="address" placeholder="Enter Address"  value="<?= $key['address']; ?>">
        <input type="text" name="cn" placeholder="Enter Contact Number"  value="<?= $key['cn']; ?>">
        <input type="submit" name="btnupdate">
    </form> 
    <?php endforeach; ?>
</body>
</html>