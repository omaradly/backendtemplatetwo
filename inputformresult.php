<?php
    session_start();
    // get datat from form
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            $name_error = "you must enter name";
    }
        if($_FILES['image']['size'] == 0){
        $image_error = "you must enter image";
    }
    /* ------------------------------------------------ */
        if(!isset($name_error) && !isset($image_error)){
            $name = trim(htmlspecialchars($_POST['name']));
            $img_name  =  $_FILES['image']['name'];
            $img_type  =  $_FILES['image']['type'];
            $img_tmp_name  =  $_FILES['image']['tmp_name'];
            $img_error  =  $_FILES['image']['error'];
            $img_size  =  $_FILES['image']['size'];
            $new_image_name= uniqid()."-".$img_name;
            move_uploaded_file($img_tmp_name,"uplods/$new_image_name");
            /* open connection */
            include 'openconnection.php';
            /* insert into db */
            $sql = "insert into user (name,image)values('$name','$new_image_name');";
            $check = mysqli_query($con,$sql);
            if($check){
                $_SESSION['insert_success'] = "inserted" ;
                header('location:showresults.php');
            }else{
                $_SESSION['insert_faild'] = mysqli_error($con);
                header('location:insert.php');
            }
        }else{
            if(isset($image_error)){
                $_SESSION['image_error'] = $image_error;    
            }
            if(isset($name_error)){
                $_SESSION['name_error'] = $name_error;   
            }
            header('location:insert.php');
        }
        // ---------------------------------------------------------------
            
    }else{
        header('location: insert.php');
    }

?>

  