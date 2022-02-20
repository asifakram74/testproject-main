<?php
        session_start();
        
        // servername => localhost
        // username => root
        // password => empty
        // database name => testproject
        $conn = mysqli_connect("localhost", "root", "", "testproject");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect with database. " 
                . mysqli_connect_error());
        }
         
        If ($_REQUEST['password'] != $_REQUEST['pass']){
            
            $_SESSION['confirmmsg'] = "Please enmter same password";
            // Kindly change as your address
            header('Location: http://localhost/testproject-main/index.php');
        }else{
           
    
 
        
        // Taking all values from the form data(input)
        $name =  $_REQUEST['name'];
        $password =  $_REQUEST['password'];
        $gender = $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $phone =  $_REQUEST['phone'];
        $adress = $_REQUEST['address'];
        $age =  $_REQUEST['age'];
        $blood_group = $_REQUEST['blood_group'];
        $registrationType = $_REQUEST['registrationType'];
        $terms = $_REQUEST['terms'];

        
        if(isset($_FILES['profile_pic'])){
        $findid =  "SELECT * FROM user_table ORDER BY id DESC LIMIT 1";
        $resultid = $conn->query($find);
        $row = 0 ;
        if ($resultid->num_rows > 0) {
            $row = $resultid->fetch_assoc();     
        } else {
            echo "0 data found in db";
        }
      $errors= array();
      $file_name = $row['id'].'-'.$_FILES['profile_pic']['name'];
      $file_tmp =$_FILES['profile_pic']['tmp_name'];
      $file_ext=strtolower(end(explode('.',$_FILES['profile_pic']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      echo $errors ;
   
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name );
         echo "Success";
      }else{
         print_r($errors);
      }
   }


        // Performing insert query execution
        // here our table name is user_table
        $sql = "INSERT INTO `user_table`(`registrationType`,`name`,  `password`, `gender`, `email`, `phone`, `adress`, `age`, `blood_group`, `profile_pic`, `terms`)  VALUES ('$registrationType','$name', '$password','$gender','$email', '$phone','$adress', '$age', '$blood_group', '$file_name' , '$terms')";
          
        if(mysqli_query($conn, $sql)){
            $_SESSION['message'] = "Data submitted successfully";
           header('Location: http://localhost/testproject-main/index.php');
exit;
  
           
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
    }