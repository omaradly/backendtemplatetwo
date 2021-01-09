<?php session_start();?>
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
      <!-- ========================================= -->
      <?php 
            if(isset($_SESSION['insert_success'])){?>
            <div class="alert alert-success mb-0" role="alert">
                <?php echo $_SESSION['insert_success']; 
                    unset($_SESSION['insert_success']);
                ?>
                
            </div>
           <?php } ?>

           <?php 
           include 'openconnection.php';
  $numberOfRowsPerPage=10;
  $sq2 = "select * from user;";
  $result3 = mysqli_query($con,$sq2);
  $number_of_products = mysqli_num_rows($result3);
  $number_of_Pages = ceil($number_of_products/$numberOfRowsPerPage);
  if(isset($_GET['page'])){
      $page=(integer)$_GET['page'];
  }else{
    $page=1;
  }
  $offset = ($page-1) * $numberOfRowsPerPage;
?>
    <table class="table mt-0">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include 'openconnection.php';
    $sql = "select * from user limit $numberOfRowsPerPage offset $offset;";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_assoc($result)){?>
        <tr>
        <th scope="row"><?php echo $rows['id'] ?></th>
        <td><?php echo $rows['name'] ?></td>
        <td>
            <img src=<?php echo 'uplods/'.$rows['image'] ?> width="100px" height="100px" >
        </td>
        </tr>


       <?php }
    }
  ?>
 
    
    
  </tbody>
</table>
        <!-- ================================ end smallFooter =========================== -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
            <?php if(!($page==1)){ ?>
                <li class="page-item">
                <a class="page-link bg-dark text-light"  href="http://localhost/dbone/showresults.php?page=1" tabindex="-1" aria-disabled="true">First Page</a>
                </li>
                  <?php } ?>
              
              <?php if($page===1){?>
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <?php } else{?>
                <li class="page-item">
                <a class="page-link"  href="http://localhost/dbone/showresults.php?page=<?php echo $page-1;?>" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                  <?php } ?>
              
              <?php for($i=1; $i<=$number_of_Pages ;$i++){ ?>
              <li class="page-item"><a class="page-link" href="http://localhost/dbone/showresults.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
              <?php }?>
              
              <?php if($page==$number_of_Pages){?>
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
                </li>
                <?php } else{?>
                <li class="page-item">
                <a class="page-link" href="http://localhost/dbone/showresults.php?page=<?php echo $page +1; ?>">Next</a>
                </li>
                  <?php } ?>
                  <?php if(!($page==$number_of_Pages)){?>
                <li class="page-item ">
                <a class="page-link bg-dark text-light" href="http://localhost/dbone/showresults.php?page=<?php echo $page +1; ?>">Last Page</a>
                </li>
                  <?php } ?>
            </ul>
          </nav>
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