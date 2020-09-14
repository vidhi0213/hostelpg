<?php
    include('header.php');    
?>
    <!-- /.header wide -->
    <div class="content">
        <!-- content -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                        <div class="well-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="login-box">
                                        <div class="login-header">
                                            <h3>Login Your Account</h3>
                                            <p>Just enter your email address and password to login in your account.</p>
                                        </div>
                                        <div class="login-form">
                                            <form method="post">
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                                </div>
                                                <button type="submit" class="btn btn-default btn-block btn-lg" name="submit">Log in</button>
                                            </form>
                                            <?php
                                            if (isset($_POST['submit'])) 
                                            {
                                               $email= $_POST['email'];
                                               $password= $_POST['password'];

                                               if($email != "" && $password !="")
                                               {
                                                $sql= "SELECT id, email, password FROM user WHERE email='".$email."' && password='".$password."'";
                                                $result= mysqli_query($conn,$sql);
                                                if($row=mysqli_fetch_assoc($result))
                                                {
                                                    session_start();
                                                    $_SESSION['email']= $row['email'];
                                                    $_SESSION['id']= $row['id'];
                                                    echo "<script>window.location='index.php'</script>";
                                                }
                                                else
                                                {
                                                    echo "<script>alert('email and password is not valid')</script>";
                                                }
                                               }
                                            }
                                            ?>
                                        </div>
                                        <div class="login-bottom"><a href="#" class="btn-link">Forgot Password?</a>
                                           <p class="pull-right">Not registered yet ?  <a href="register.php" class="btn-link-primary"> Sign up here</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
     
<?php
include('footer.php');
?>
       