
<!DOCTYPE html>
<html>
<head>
    <title>MSA travel </title>

      <link rel="stylesheet" href="signinstyle.css">
   

    </head>

    <body>
               
        



       
        <h1> sign in </h1>
        <!-- sign in box -->
        <div class="div1">
            
            <form name="signin" method="post">
                <labele>
                    username
                </labele>
                <input type="text" id ="pass" name="username" class="inputtext" placeholder="username">
                <br><br>
            
                <labele>
                    password
                </labele>
                
                <input type="password" name="password" class="inputtext" placeholder="password">
                <br><br>
                

                <button type="submit">sign in</button>
                <br><br>
                <p id="wrong" style="color: red;">
                </p>
                
               
            </form>
        </div>
 



        
    </body>
</html>

<?php
include_once "db.php";
if(isset($_REQUEST["username"], $_REQUEST["password"]))
{
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    
    $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $resultdataset = $conn->query($sql);
    if ($row = $resultdataset->fetch_assoc())
    {
        header('location:index flight.html');
    }
    else
    {
        echo "<script type='text/javascript'>
        document.getElementById('wrong').innerHTML = 'Wrong username or password!';
        </script>";
    }
}
?>
