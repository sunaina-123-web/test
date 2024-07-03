
<?php include "header.php"?>
  <!-- Contact Start -->
  <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Sign Up//</h6>
                <h1 class="mb-5">Signup Here</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        </div>
                </div>
             
                    
                </div>
                <div class="col-md-6 offset-md-3">
                         <form action="" method="post" class="bg-light p-5">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div  class="form-floating">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="email" class="form-control" id="Email" placeholder="Email">
                                        <label for="Email">EMAIL</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control"  placeholder="Password">
                                        <label for="Password">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="contact" class="form-control"  placeholder="contact">
                                        <label for="contact">Contact</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                    <textarea name="address" class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="Address">Address</label>
                                    </div>
                                </div>
                                 </div>
                                
                                
                                <div class="col-12 mt-3 ">
                                    <button type="submit"name="submit" class="btn btn-primary w-100 py-3"> signup</button>
                                </div>
                                <div class="col-12  mt-3"> 
                                    <h6>already have any account?<a href="Login.php">Login</a></h6>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


  
<?php include "footer.php"?>
<?php
if(isset($_POST['submit'])){
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$contact=$_REQUEST['contact'];
$address=$_REQUEST['address'];
 
include "Config.php";

$query="INSERT INTO `user`(`name`,`email`,`password`,`contact`,`address`)values('$name','$email','$password','$contact','$address')"; 
$result = mysqli_query($con,$query);
if($result>0){
  echo"<script>window.location.assign('login.php')</script>";
}
else{echo mysqli_error($con);
    echo"<script>alert('something went wrong!!!'</script>";

}
   

}
    




?>
