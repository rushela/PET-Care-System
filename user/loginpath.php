<?php
    session_start();
    include "../admin/connect.php";
    
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['email']);
        $password = validate($_POST['password']);

        if(empty($email)) 
        {
            header("location: login.php?error=Username is required");
            exit();
        }
        else if(empty($password))
        {
            header("location: login.php?error=Password is required");
            exit();
        }
        else
        {
           $sql = "SELECT * FROM reg_users WHERE email = '$email' AND password = '$password'";

           $result = mysqli_query($con, $sql);

           if(mysqli_num_rows($result) === 1)
           {
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $email && $row['password'] == $password)
            {
                
                $_SESSION['id'] = $row['id'];
                $_SESSION['first-name'] = $row['First_Name'];
                $_SESSION['last-name'] = $row['Last_Name'];
                $_SESSION['dob'] = $row['dob'];
                $_SESSION['email'] = $email;
                $_SESSION['address'] = $row['address'];
                $_SESSION['mobile'] = $row['mobile'];
                $_SESSION['password'] = $password;
               

                header("Location: ../home.php");
                exit();
            }
            else{
                header("Location: login.php?error=Incorrect Username or password");
                exit();
            }
           }
           else
           {
            header("Location: login.php?error=Incorrect Username or password");
            exit();
           }
        }
    }
    else
    {
        header("Location: login.php");
        exit();
    }
?>