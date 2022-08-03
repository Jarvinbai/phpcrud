<a href="Register.php">Register</a>  &nbsp; &nbsp; <a href="Login.php">Login</a>
<h2>Profile</h2>
<?php
        
        if(!empty($_GET)){
            include("db.php");
            

            //echo $name,$email,$pass;
            $query="delete from user where id='".$_GET['id']."'";
            $sql=mysqli_query($con,$query);
            if($sql)
            {
                
                echo "Deleted Successfully";
                header("Location:Register.php");
            }
            

            
        }
        else
        {
            header("Location:Register.php");
        }
    ?>