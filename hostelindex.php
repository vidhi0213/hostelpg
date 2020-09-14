<?php
include('hostelheader.php');
    $hostel_result=mysqli_query($conn,"SELECT * FROM hostel ORDER BY id ASC LIMIT 3");
    $pg_result=mysqli_query($conn,"SELECT * FROM pg ORDER BY id ASC LIMIT 3");

?>
    <!-- /.header wide -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="search-block">
                        <div class="search-head">
                            <h1 class="display-1">Find Great Hostels And PG Anywhere</h1>
                            <p class="hidden-xs"> 24/7 customer service</p>
                        </div>
                        <div class="search-box">
                        <div class="search-form">
                        <form class="row" action="search.php" method="POST">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <label for="from" class="control-label sr-only">City</label>
                                <select id="selectbasic" name="city" class="form-control">
                                        <option value="">Select City</option>
                                        <?php                               
                                            $city=mysqli_query($conn,"SELECT * FROM city");
                                            while($rowarea=mysqli_fetch_array($city))
                                            {
                                        ?>
                                        <option value="<?php echo $rowarea['id'];?>"><?php echo $rowarea['city'];?></option>
                                    <?php 
                                    } 
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <input type="text" id="hostelname" name="hostelname" class="form-control selectpicker" placeholder="Search Hostel">
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <button class="btn btn-default btn-block btn-lg" name="search" type="submit">Search Hostel / PG</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------------------------------------------------------------
    ----------------------Hostel List--------------------------------
    ---------------------------------------------------------------->


    <div class="space-medium ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2>Most Popular Hostel</h2>
                        <p>Discover incredible hostels in the heart of the city.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="card">
                <?php
                    while($row= mysqli_fetch_array($hostel_result))
                    {
                ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="hostel-thumbnail-list">                    
                        <!-- hostel thumbnail list -->
                        <div class="hostel-list-img">
                            <a href="hosteldetail.php?id=<?php echo $row['id'];?>"><img src="admin/hostelimg/<?php echo $row['hostel_image'];?>" alt="#" ></a>
                        </div>
                        <div class="hostel-content">
                            <div class="hostel-head">
                                <h3 class="card-title hostel-title"><a href="hosteldetail.php?id=<?php echo $row['id'];?>"><?php echo $row['hostel_name']; ?></a></h3>
                                <p class="hostel-address"><?php echo $row['hostel_address']; ?></p>
                            </div>
                            <div class="hostel-meta">
                                <span class="hostel-rating">
                                    <span class="rate"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                    <span class="reviews"><a href="reviews.php?id=<?php echo $row['id'];?>">Reviews</a></span>
                                </span>
                            </div>
                        </div>                        
                    </div>                    
                    <!-- /.hostel thumbnail list -->
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>

 
    <!---------------------------------------------------------------
    ----------------------PG List--------------------------------
    ---------------------------------------------------------------->

    <div class="space-medium bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2>Most Popular PG</h2>
                        <p>Discover incredible PG in the heart of the city.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <?php
                    while($row= mysqli_fetch_array($pg_result))
                    {
                ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="pg-thumbnail-list">                    
                        <!-- pg thumbnail list -->
                        <div class="pg-list-img">
                            <a href="pgdetail.php?id=<?php echo $row['id'];?>"><img src="admin/pgimg/<?php echo $row['pg_image'];?>" alt="#" ></a>
                        </div>
                        <div class="pg-content">
                            <div class="pg-head">
                                <h3 class="pg-title"><a href="pgdetail.php?id=<?php echo $row['id'];?>"><?php echo $row['pg_name']; ?></a></h3>
                                <p class="pg-address"><?php echo $row['pg_address']; ?></p>
                                <p class="pg-area"><?php echo $row['pg_area']; ?></p>
                            </div>
                            <div class="pg-meta">
                                <span class="pg-rating">
                                    <span class="rate"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                    <span class="reviews"><a href="reviews.php?id=<?php echo $row['id'];?>">Reviews</a></span>
                                </span>
                            </div>
                        </div>                        
                    </div>                    
                    <!-- /.pg thumbnail list -->
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>






    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h2>Your Destination, Your Way</h2>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="destination-grid-box">
                        <!-- destination grid box -->
                        <div class="destination-img"><a href="#"><img src="images/ahmedabad.jpg" class="img-responsive"></a>
                            <div class="destination-content">
                                <h2 class="destination-title"><a href="#">Ahmedabad</a></h2></div>
                        </div>
                    </div>
                    <!-- /.destination grid box -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="destination-grid-box">
                        <!-- destination grid box -->
                        <div class="destination-img"><a href="#"><img src="images/gandhi.jpg" class="img-responsive"></a>
                            <div class="destination-content">
                                <h2 class="destination-title"><a href="#">Gandhinagar</a></h2></div>
                        </div>
                    </div>
                    <!-- /.destination grid box -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="destination-grid-box">
                        <!-- destination grid box -->
                        <div class="destination-img"><a href="#"><img src="images/hostel1.jpg" class="img-responsive"></a>
                            <div class="destination-content">
                                <h2 class="destination-title"><a href="#">Surat</a></h2></div>
                        </div>
                    </div>
                    <!-- /.destination grid box -->
                </div>
            </div>
            
        </div>
    </div>
    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="title-white">Help You Meet The World</h2>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="feature feature-center">
                        <div class="feature-icon"><i class="fa fa-search"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Hostels you’ll love</h3>
                            <p>Hostel and PG's nature are very peace and loveable.  </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="feature feature-center">
                        <div class="feature-icon"><i class="fa fa-heart"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Instant Confirmation</h3>
                            <p> By our website you can book a HOSTEL/PG's room and get confirmation of room.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="feature feature-center">
                        <div class="feature-icon"><i class="fa fa-gratipay"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">24/7 Customer Service</h3>
                            <p>There are 24*7 Services are avalable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-medium bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2>Happy Clients Reviews</h2>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-user">
                            <div class="testimonial-img"><img src="" alt="" class="img-circle"></div>
                            <div class="testimonial-info">
                                <h4 class="testimonial-name">Mr. XXX XXXXXX</h4>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <h4>It was absolutely lovely.</h4>
                            <p class="testimonial-text">“loving atmosphere ”</p>
                            <span class="rate"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                        </div>
                    </div>
                    <!--/. testimonial block -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-user">
                            <div class="testimonial-img"><img src="" alt="" class="img-circle"></div>
                            <div class="testimonial-info">
                                <h4 class="testimonial-name">MISS XXXXX XXXXXXX</h4>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <h4>Had an amazing time and very good !!</h4>
                            <p class="testimonial-text">“beautiful services”</p>
                            <span class="rate"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                        </div>
                    </div>
                    <!--/. testimonial block -->
                </div>
            </div>
        </div>
    </div>
    
<?php
include('footer.php');
?>
    
   