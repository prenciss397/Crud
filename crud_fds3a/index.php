<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/app.css?v2">
</head>

<body>

    <div class="form">
        <form action="views/insertstudent.php" method="post">
            <div id="record">
                <h1>Student Information Record</h1>
            </div>

            <a href="views/view.php">View Data</a>

            <div class="index">
                <label>
                    <input type="text" name="studid" placeholder="Enter Student Id"class="input" ;>
                  
                </label>
                
                <label>
                    <input type="text" name="lname" placeholder="Enter Last Name"class="input" ;>
                    
                </label>
                    
                <label>
                    <input type="text" name="fname" placeholder="Enter First Name"class="input" ;>
                    
                </label>
                    
                <label>
                    <input type="text" name="age" placeholder="Enter Age"class="input" ;>
                    
                </label>
                   
                <label>
                    <input type="text" name="stat" placeholder="Enter Status"class="input" ;>
                    
                </label>
                
                <label>
                    <input type="text" name="address" placeholder="Enter Address"class="input" ;>
                    
                </label>

                <label>
                    <input type="text" name="cn" placeholder="Enter Contact Number"class="input" ;>
                    
                </label>
                
                <label>
                    <input type="submit" name="btnsave" ;>
                </label>
                    
        </form>

    </div>

    </div>
    </div>
</body>

</html>