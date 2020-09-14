<?php
include('hostelheader.php');

$id=$_SESSION['id'];
$hostel_result=mysqli_query($conn,"SELECT * FROM hostel WHERE id='$id'");
$rowhostel=mysqli_fetch_array($hostel_result);

$room_select=mysqli_query($conn,"SELECT * FROM roomtype WHERE hostelid='$id'");

?>  
<body>      
    <!-- /.header wide -->
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                <!-- slidebar dashboard -->
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <?php include('hostelslidebar.php');?>                    
                </div>

                <!-- hostel profile -->

                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="dashboard-content">
                        <div class="dashboard-box">
                            <div class="dashboard-head">
                                <h3 class="dashboard-head-title">Edit Profile</h3>
                            </div>
                            
                            <div class="dashboard-data">
                            <form enctype="multipart/form-data" method="post">
                                <!-- hostel image -->
                                <div class="dashboard-profile-edit">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <div class="user-profile-img">
                                                <img src="admin/hostelimg/<?php echo $rowhostel['hostel_image']; ?>" alt="" class="hostelimg">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-3 col-xs-12">
                                            <div class="user-profile-action">
                                                
                                                <label>Edit Hostel Image</label>
                                                <input type="file" name="hostel_image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- hostel background image -->
                                <div class="dashboard-profile-edit">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <div class="user-profile-img">
                                                <img src="admin/hostelimg/<?php echo $rowhostel['hostel_bgimage']; ?>" alt="" class="hostelimg">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-3 col-xs-12">
                                            <div class="user-profile-action">
                                                <label>Edit Hostel Background Image</label>
                                                <input type="file" name="hostel_bgimage">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-edit-form">
                                    <h4>Hostel Information</h4>
                                        <div class="row">
                                            <!-- hostel name -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Hostel Name" class="form-control" id="name" name="hostel_name" value="<?php echo $rowhostel['hostel_name'];?>" readonly>
                                                </div>
                                            </div>

                                            <!-- hostel address -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="3" id="address" name="hostel_address" placeholder="Address"><?php echo $rowhostel['hostel_address'];?></textarea>
                                                </div>
                                            </div>

                                            <!-- hostel area-->
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Hostel Area" class="form-control" id="area" name="hostel_area" value="<?php echo $rowhostel['hostel_area'];?>" readonly>
                                                </div>
                                            </div>

                                            <!-- hostel city -->
                                            <div class="col-lg-3">
                                                 <div class="form-group">
                                                    <input type="text" placeholder="Hostel City" class="form-control" id="city" name="hostel_city" value="<?php echo $rowhostel['hostel_city'];?>" readonly>
                                                </div>  
                                            </div>  

                                            <!-- hostel state -->
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Hostel State" class="form-control" id="state" name="hostel_state" value="<?php echo $rowhostel['hostel_state'];?>" readonly>
                                                </div>
                                            </div>

                                            <!-- hostel pincode -->
                                            <div class="col-lg-3">
                                                 <div class="form-group">
                                                    <input type="text" placeholder="Hostel Pincode" class="form-control" id="pincode" name="hostel_pincode" value="<?php echo $rowhostel['hostel_pincode'];?>" readonly>
                                                </div>
                                            </div>
                                            
                                            <!-- hostel description -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="4" id="description" name="hostel_description" placeholder="Discription"><?php echo $rowhostel['hostel_description'];?></textarea>
                                                </div>
                                            </div>

                                            <!-- hostel open time -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Open Time" class="form-control" id="opentime" name="hostel_opentime" value="<?php echo $rowhostel['hostel_opentime'];?>">
                                                </div>
                                            </div>

                                            <!-- hostel close time -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Close Time" class="form-control" id="closetime" name="hostel_closetime" value="<?php echo $rowhostel['hostel_closetime'];?>">
                                                </div>
                                            </div>

                                            <!-- hostel facility -->
                                           

                                            <!-- hostel category -->
                                           
                                            <!-- hostel email -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email" class="form-control" id="fb" name="hostel_email" value="<?php echo $rowhostel['hostel_email'];?>" readonly>
                                                </div>
                                            </div>

                                            <!-- hostel password -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="password" class="form-control"  name="hostel_password" value="<?php echo $rowhostel['hostel_password'];?>">
                                                </div>
                                            </div>

                                            <!-- hostel conatct -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Contact" class="form-control" name="hostel_contact" value="<?php echo $rowhostel['hostel_contact'];?>">
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
                                $oldimage_hostel_image = $rowhostel['hostel_image'];
                                move_uploaded_file($_FILES["hostel_image"]["tmp_name"],"admin/hostelimg/".$_FILES["hostel_image"]["name"]);
                                $hostel_image = $_FILES["hostel_image"]["name"];
                                if (strlen($hostel_image) > 0) {
                                  $oldimage_hostel_image = $hostel_image;
                                }

                                $oldimage_hostel_bgimage = $rowhostel['hostel_bgimage'];
                                move_uploaded_file($_FILES["hostel_bgimage"]["tmp_name"],"admin/hostelimg/".$_FILES["hostel_bgimage"]["name"]);
                                $hostel_bgimage = $_FILES["hostel_bgimage"]["name"];
                                
                                if (strlen($hostel_bgimage) > 0) {
                                  $oldimage_hostel_bgimage = $hostel_bgimage;
                                }

                                $update= "UPDATE hostel set hostel_address ='".$_POST['hostel_address']."',hostel_description ='".$_POST['hostel_description']."',hostel_opentime ='".$_POST['hostel_opentime']."',hostel_closetime ='".$_POST['hostel_closetime']."',hostel_contact ='".$_POST['hostel_contact']."',hostel_password ='".$_POST['hostel_password']."',hostel_image = '".$oldimage_hostel_image."',hostel_bgimage = '".$oldimage_hostel_bgimage."' WHERE id='".$id."' ";

                                if ($conn->query($update) === TRUE) 
                                {

                                  //echo "Record Updated Successfully...!!!";
                                  echo "<script>document.location='hostelprofile.php'</script>";
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
    