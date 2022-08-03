<?php
    echo "welcome to update page";

 
        if(!empty($_GET)){
            include("db.php");
            // echo $email,$pass;
            $id=$_GET['id'];
            

            //echo $name,$email,$pass;
            $query="select * from user where id='".$id."'";
            $sql=mysqli_query($con,$query);
            echo "<form action='update1.php' method='get'>";
            if($row=mysqli_fetch_row($sql))//1D Array 0,1,2,3,...
            {
                //echo "id: ". $row[0]."<br>"; //update
                //echo "Name: ". $row[1]."<br>";
                //echo "Email: ". $row[2]."<br>";
                //echo "Pass: ". $row[3]."<br>";
                
                echo "<input type='hidden' value='".$row[0]."' name='id'><br>";
                echo "Name: <input value='".$row[1]."' name='a'><br>";
                echo "Email: <input value='".$row[2]."' name='b'><br>";
                echo "Pass: <input value='".$row[3]."' name='c'><br>";
                //echo "<a href='update.php?id=".$row[0]."'>Update</a>";
                echo "<input type='submit' name='submit' value='update'><br>";

            }
            echo "</form>";

            
        }
        else
        {
            header("Location:Login.php");
        }
    
    
?>