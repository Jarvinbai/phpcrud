<a href="Register.php">Register</a>  &nbsp; &nbsp; <a href="Login.php">Login</a>
<h2>Profile</h2>
<?php
        
        if(!empty($_GET)){
            include("db.php");
            // echo $email,$pass;
            $email=$_GET['b'];
            $pass=$_GET['c'];

            //echo $name,$email,$pass;
            $query="select * from user where email='".$email."' and pass='".$pass."'";
            $sql=mysqli_query($con,$query);
            if($row=mysqli_fetch_row($sql))//1D Array 0,1,2,3,...
            {
                //echo "id: ". $row[0]."<br>"; //update
                echo "Name: ". $row[1]."<br>";
                echo "Email: ". $row[2]."<br>";
                echo "Pass: ". $row[3]."<br>";
                echo "<a href='update.php?id=".$row[0]."'>Update</a>";
                echo "<a href='delete.php?id=".$row[0]."'>Delete</a>";

            }
            else{
                echo "Email or Password is Incorrect";
                
            }

            
        }
        else
        {
            header("Location:Login.php");
        }
    ?>

