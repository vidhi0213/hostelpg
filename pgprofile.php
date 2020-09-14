<?php
include('pgheader.php');

$id=$_SESSION['id'];
$pg_result=mysqli_query($conn,"SELECT * FROM pg WHERE id='$id'");
$rowpg=mysqli_fetch_array($pg_result);

$room_select=mysqli_query($conn,"SELECT * FROM roomtype WHERE pgid='$id'");

?>  
<body>      
    <!-- /.header wide -->
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                <!-- slidebar dashboard -->
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <?php include('pgslidebar.php');?>                    
                </div>

                <!-- pg profile -->

                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="dashboard-content">
                        <div class="dashboard-box">
                            <div class="dashboard-head">
                                <h3 class="dashboard-head-title">Edit Profile</h3>
                            </div>
                            
                            <div class="dashboard-data">
                            <form enctype="multipart/form-data" method="post">
                                <!-- pg image -->
                                <div class="dashboard-profile-edit">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <div class="user-profile-img">
                                                <img src="admin/pgimg/<?php echo $rowpg['pg_image']; ?>" alt="" class="pgimg" height="100px">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-3 col-xs-12">
                                            <div class="user-profile-action">
                                                
                                                <label>Edit pg Image</label>
                                                <input type="file" name="pg_image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- pg background image -->
                                <div class="dashboard-profile-edit">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <div class="user-profile-img">
                                                <img src="admin/pgimg/<?php echo $rowpg['pg_bgimage']; ?>" alt="" class="pgimg">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-3 col-xs-12">
                                            <div class="user-profile-action">
                                                <label>Edit pg Background Image</label>
                                                <input type="file" name="pg_bgimage">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-edit-form">
                                    <h4>pg Information</h4>
                                        <div class="row">
                                            <!-- pg name -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="pg Name" class="form-control" id="name" name="pg_name" value="<?php echo $rowpg['pg_name'];?>" readonly>
                                                </div>
                                            </div>

                                            <!-- pg address -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="3" id="address" name="pg_address" placeholder="Address"><?php echo $rowpg['pg_address'];?></textarea>
                                                </div>
                                            </div>

                                            <!-- pg area-->
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input type="text" placeholder="pg Area" class="form-control" id="area" name="pg_area" value="<?php echo $rowpg['pg_area'];?>" readonly>
                                                </div>
                                            </div>

                                            <!-- pg city -->
                                            <div class="col-lg-3">
                                                 <div class="form-group">
                                                    <input type="text" placeholder="pg City" class="form-control" id="city" name="pg_city" value="<?php echo $rowpg['pg_city'];?>" readonly>
                                                </div>  
                                            </div>  

                                            <!-- pg state -->
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input type="text" placeholder="pg State" class="form-control" id="state" name="pg_state" value="<?php echo $rowpg['pg_state'];?>" readonly>
                                                </div>
                                            </div>

                                            <!-- pg pincode -->
                                            <div class="col-lg-3">
                                                 <div class="form-group">
                                                    <input type="text" placeholder="pg Pincode" class="form-control" id="pincode" name="pg_pincode" value="<?php echo $rowpg['pg_pincode'];?>" readonly>
                                                </div>
                                            </div>
                                            
                                            <!-- pg description -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="4" id="description" name="pg_description" placeholder="Discription"><?php echo $rowpg['pg_description'];?></textarea>
                                                </div>
                                            </div>

                                            <!-- pg open time -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Open Time" class="form-control" id="opentime" name="pg_opentime" value="<?php echo $rowpg['pg_opentime'];?>">
                                                </div>
                                            </div>

                                            <!-- pg close time -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Close Time" class="form-control" id="closetime" name="pg_closetime" value="<?php echo $rowpg['pg_closetime'];?>">
                                                </div>
                                            </div>

                                            <!-- pg facility -->
                                           

                                            <!-- pg category -->
                                           
                                            <!-- pg email -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email" class="form-control" id="fb" name="pg_email" value="<?php echo $rowpg['pg_email'];?>" readonly>
                                                </div>
                                            </div>

                                            <!-- pg password -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="password" class="form-control"  name="pg_password" value="<?php echo $rowpg['pg_password'];?>">
                                                </div>
                                            </div>

                                            <!-- pg conatct -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Contact" class="form-control" name="pg_contact" value="<?php echo $rowpg['pg_contact'];?>">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <button class="btn btn-secondary" type="submit">Cancel</button>
                                                <button class="btn btn-default" type="submit" name="submit">Update</button>
                                            </div>
                                        </div>
                                </div>
                            </form> 
                            <?php
                              if (isset($_POST['submit'])) 
                              {
                                $oldimage_pg_image = $rowpg['pg_image'];
                                move_uploaded_file($_FILES["pg_image"]["tmp_name"],"admin/pgimg/".$_FILES["pg_image"]["name"]);
                                $pg_image = $_FILES["pg_image"]["name"];
                                if (strlen($pg_image) > 0) {
                                  $oldimage_pg_image = $pg_image;
                                }

                                $oldimage_pg_bgimage = $rowpg['pg_bgimage'];
                                move_uploaded_file($_FILES["pg_bgimage"]["tmp_name"],"admin/pgimg/".$_FILES["pg_bgimage"]["name"]);
                                $pg_bgimage = $_FILES["pg_bgimage"]["name"];
                                
                                if (strlen($pg_bgimage) > 0) {
                                  $oldimage_pg_bgimage = $pg_bgimage;
                                }

                                $update= "UPDATE pg set pg_address ='".$_POST['pg_address']."',pg_description ='".$_POST['pg_description']."',pg_opentime ='".$_POST['pg_opentime']."',pg_closetime ='".$_POST['pg_closetime']."',pg_contact ='".$_POST['pg_contact']."',pg_password ='".$_POST['pg_password']."',pg_image = '".$oldimage_pg_image."',pg_bgimage = '".$oldimage_pg_bgimage."' WHERE id='".$id."' ";

                                if ($conn->query($update) === TRUE) 
                                {

                                  //echo "Record Updated Successfully...!!!";
                                  echo "<script>document.location='pgprofile.php'</script>";
                                }
                                else
                                {
                                  echo "Error: " .$update . "<br>" .$conn->error;
                                }
                                  $conn->close();
                                }
                              ?>                                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  /</div>      
<!-- /.content -->
<?php
include('footer.php');
?>
    