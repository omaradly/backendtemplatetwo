<?php  session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="features">
        <meta name="keywords" content="html,css">
        <meta name="viewport" content="width=device-width,initial-Scale=1.0">
        <title>Leverage</title>
        <!--    bootstrap    -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="icon"  href="images/Facebook_icon_2013.svg.png">
        <!--   end import     -->
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="bootstrap-navbar-multi-level-dropdowns/css/bootnavbar.css">

    </head>
    <body>
        <form enctype="multipart/form-data" action="inputformresult.php" method="post" class="m-auto p-5">
        <?php 
            if(isset($_SESSION['name_error'])){?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['name_error']; 
                unset($_SESSION['name_error']);
                ?>
            </div>
           <?php } ?>
           <!-- ========================================= -->
           <?php 
            if(isset($_SESSION['image_error'])){?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['image_error']; 
                    unset($_SESSION['image_error']);
                ?>
                
            </div>
           <?php } ?>
           <!-- ========================================= -->
           <?php 
            if(isset($_SESSION['insert_faild'])){?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['insert_faild']; 
                    unset($_SESSION['insert_faild']);
                ?>
                
            </div>
           <?php } ?>
           <!-- ========================================= -->
        <div class="form-group ">
                <label for="formGroupExampleInput fon">Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">input file</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-outline-primary form-control" id="formGroupExampleInput2" name="submit">submit</button>
                <!-- <input type="submit" class="form-control"  name="submit"> -->
            </div>
        </form>
        <!-- ================================ end smallFooter =========================== -->
        <!--  ===============================  bootstrap  =======================  -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> 
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!--   end import     -->
        <!-- Compressed JavaScript -->
        <script src="bootstrap-navbar-multi-level-dropdowns/js/bootnavbar.js"></script>
        <script type="text/javascript" src="js/loading-bar.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>