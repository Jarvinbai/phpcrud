<?php
    //echo "welcome to update page";
    //echo $_GET['id'],$_GET['a'],$_GET['b'],$_GET['c'];


            include("db.php");
            $name=$_GET['a'];
            $email=$_GET['b'];
            $pass=$_GET['c'];

            //echo $name,$email,$pass;
            $query="update user set name='".$_GET['a']."', email='".$_GET['b']."',
                    pass='".$_GET['c']."' where id='".$_GET['id']."'";
            $sql=mysqli_query($con,$query);
            $sql1=mysqli_query($con,"select * from user where id='".$_GET['id']."'");
            $row=mysqli_fetch_row($sql1);     
            if($sql){
                echo "Successfully Updated";
                //echo $row[1],$row[2];
                echo "<a href='Profile.php?b=$row[2]&c=$row[3]'>View Prtofile</a>";
            }
?>