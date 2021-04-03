<?php
   include "config.php";
   include "newsteller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Contact Us</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/contact.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light">
    <a href="index.php" class="navbar-brand">
        <img src="assets/images/logo.jpg" height="59px" alt="Photographer Hub">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-left: 6%;">
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
            <a href="feedback.php" class="nav-item nav-link">Feedback</a>
        </div>
        <div class="navbar-nav ml-auto">
           <div class="dropdown">
                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Account
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="client.php"> <i class="fas fa-user"></i> User Account</a>
                  <a class="dropdown-item" href="logout.php"> <i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
              </div>
        </div>
    </div>
</nav>
    
    
           <div class="container" style="height: 800px; border: solid 2px whitesmoke;">
            
            <p class="header"> Contact Us</p>
            <form class="form-feedback" action="" method="POST">
                <label for="inputEmail" class="sr-only">Email address..</label>
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address.." required="" autofocus="">

                <label for="inputSubject" class="sr-only">Subject..</label>
                <input type="text" id="inputSubject" class="form-control" name="inputSubject" placeholder="Subject.." required="">

                <textarea id="inputDetails" class="form-control" cols="30" name="inputDetails" rows="5" placeholder="Go ahead we'r listening.."></textarea>
                <button class="btn btn-lg btn-dark btn-block" type="submit" name="submit">Submit</button>
            </form>
            
        </div>    
      
      <footer>
         <div class="footer">
           <div class="logo">
            <h5 class="my-0 mr-md-auto font-weight-normal"> <a href="index.php"><img src="assets/images/logo.jpg" style="height: 50px;" alt=""></a></h5>
           </div>
           <div class="f_menu">
            <ul class="list-group list-group-flush">
              <a href="index.php"> Home </a>
              <a href="about.php"> About</a> 
              <a href="contact.php">Contact Us</a>
            </ul>
           </div>
           <div class="newsteller">
                 <div class="sec_1"> <h5>Get Our Newsteller</h5> </div>
                 <form class= "sec_2" action="" method="POST">
                 <input type="email" name="s_email" id="s_email" placeholder="Email address.."></input>
                   <button type="submit" name="sub"> Subscribe</button>
                 </form> 
                <?php
                   
                 if(isset($_POST['sub'])){
                  $Email = $_POST['s_email'];
                   newstellerfunction($Email);
                 }
                    
   
                 ?>
                 
           </div>
          </div>
      </footer>  
</body>
</html>

<?php

if(isset($_POST['submit'])){

  $query = "INSERT INTO contact (Subject,Email,Query)
        VALUES ('".$_POST['inputSubject']."','".$_POST['inputEmail']."','".$_POST['inputDetails']."')";
      
      
      
        $query_run = mysqli_query ($conn,$query);
      
        if ($query_run) {
          echo '<script type="text/javascript">swal("Contact form submitted!!", "Thank you", "success");</script>';
        }

        else {
           echo '<script type="text/javascript">swal("Form submission failed!!", "Try anain!", "error");</script>';
        }


}

?>



<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>