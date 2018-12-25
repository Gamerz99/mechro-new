<?php
session_start();
if(!isset($_SESSION['id'])){
    //header('Location:login.php');
}
?>
<?php
include 'dbconnect.php';
?>
<?php
include 'header.php';
?>
<?php
$date="";
$description="";
$name="";
$id="";
$image="";
$image1="";
$image2="";
$image3="";
$type="";
$category="";
?>
<body id="top" >

<div id="loading1" class="loading text-center">
    <div id="loading1" class="loadtext text-center">
        <img src="images/loading.svg" width="80px">
    </div>
</div>

<div class="load">
    <div class="wrapper bgded overlay main1 mbr-parallax-background">
        <div class="wrapper row0">
            <div id="topbar" class="hoc clear">
                <!-- ################################################################################################ -->
                <div class="fl_right">
                    <ul class="nospace">
                        <li><i class="fa fa-phone"></i> +94 0714864007 / +940770083907</li>
                        <li><i class="fa fa-envelope-o"></i> mechrocom@gmail.com</li>
                    </ul>
                </div>
                <!-- ################################################################################################ -->
            </div>
        </div>

        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <!-- ################################################################################################ -->
                <div id="logo" class="fl_left">
                    <h1><a href="index.php">MECH-RO</a></h1>
                </div>
                <!-- ################################################################################################ -->
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a class="drop" href="#">Products</a>
                            <ul>
                                <li><a  href="#">Machinery</a>
                                    <ul>
                                        <li><a href="machinery.php?category_id=4">Tea Machinery</a></li>
                                        <li><a href="machinery.php?category_id=5">Conveyors</a></li>
                                        <li><a href="machinery.php?category_id=6">Dust Collector</a></li>
                                        <li><a href="machinery.php?category_id=7">Exhaust Fan</a></li>
                                        <li><a href="machinery.php?category_id=8">Packers</a></li>
                                        <li><a href="machinery.php?category_id=9">Filters</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Construction</a>
                                    <ul>
                                        <li><a href="construction.php?category_id=10">Equipment</a></li>
                                        <li><a href="construction.php?category_id=11">Roofing Sheets</a></li>
                                        <li><a href="construction.php?category_id=12">Gates</a></li>
                                        <li><a href="construction.php?category_id=13">Roller Doors</a></li>
                                        <li><a href="construction.php?category_id=14">Hand Railing</a></li>
                                        <li><a href="construction.php?category_id=15">Building</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Other</a>
                                    <ul>
                                        <li><a href="other.php">Land</a></li>
                                        <li><a href="other.php">Vehicles</a></li>
                                        <li><a href="other.php">Machinery</a></li>
                                    </ul>
                                </li>
                                <li><a href="all.php">All Products</a></li>
                            </ul>
                        </li>
                        <li><a href="project.php">Our Projects</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact Us</a></li
                    </ul>
                </nav>
                <!-- ################################################################################################ -->
            </header>
        </div>

        <!-- ################################################################################################ -->
        <div class="wrapper">
            <section id="breadcrumb" class="hoc clear">
                <!-- ################################################################################################ -->
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">More</a></li>
                </ul>
                <!-- ################################################################################################ -->

                <!-- ################################################################################################ -->
            </section>
        </div>
    </div>

    <div class="wrapper row3">
        <section class="hoc container clear"><br>
            <h6 class="heading center"> PRODUCT DETAILS</h6><hr><br>
            <div class="col-md-3">
                <h6 class="red"><i class="fa fa-snowflake-o"></i> Machinery</h6>
                <nav class="sdb_holder">
                    <ul>
                        <a class="btn btn-block btn-side inverse btn-card" href="machinery.php?category_id=4"><i class="fa fa-arrow-circle-right"></i> Tea Machinery</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="machinery.php?category_id=5"><i class="fa fa-arrow-circle-right"></i> Conveyors</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="machinery.php?category_id=6"><i class="fa fa-arrow-circle-right"></i> Dust Collector</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="machinery.php?category_id=7"><i class="fa fa-arrow-circle-right"></i> Exhaust Fan</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="machinery.php?category_id=8"><i class="fa fa-arrow-circle-right"></i> Packers</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="machinery.php?category_id=9"><i class="fa fa-arrow-circle-right"></i> Filters</a>
                    </ul>
                </nav><br>
                <h6 class="red"><i class="fa fa-snowflake-o"></i> Construction</h6>
                <nav class="sdb_holder">
                    <ul>
                        <a class="btn btn-block btn-side inverse btn-card" href="construction.php?category_id=10"><i class="fa fa-arrow-circle-right"></i> Equipment</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="construction.php?category_id=11"><i class="fa fa-arrow-circle-right"></i> Roofing Sheets</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="construction.php?category_id=12"><i class="fa fa-arrow-circle-right"></i> Gates</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="construction.php?category_id=13"><i class="fa fa-arrow-circle-right"></i> Roller Doors</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="construction.php?category_id=14"><i class="fa fa-arrow-circle-right"></i> Hand Railing</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="construction.php?category_id=15"><i class="fa fa-arrow-circle-right"></i> Building</a>
                    </ul>
                </nav><br>
                <h6 class="red"><i class="fa fa-snowflake-o"></i> Other</h6>
                <nav class="sdb_holder">
                    <ul>
                        <a class="btn btn-block btn-side inverse btn-card" href="construction.php"><i class="fa fa-arrow-circle-right"></i> Land</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="construction.php"><i class="fa fa-arrow-circle-right"></i> Vehicles</a>
                        <a class="btn btn-block btn-side inverse btn-card" href="construction.php"><i class="fa fa-arrow-circle-right"></i> Machinery</a>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <div class="group excerpts">
                    <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $result = mysqli_query($con,"SELECT * FROM products p WHERE p.Id=$id LIMIT 1");
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $image = $row['Image'];
                            $category_id = $row['Category'];
                            $name=  $row['Name'];
                            $date=  $row['Date'];
                            $description=  $row['Description'];
                            $pcid = $row['Pcategory'];

                            $result2 = mysqli_query($con, "SELECT * FROM category WHERE id='$category_id' LIMIT 1 ");
                            $row2 = mysqli_fetch_assoc($result2);
                            $category= $row2['Category'];
                        }
                    }
                    ?>
                    <div class="col-md-12">
                        <div class="dimage" >
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active ">
                                    <img data-toggle="magnify" src="products/<?php echo $category?>/<?php echo $image?>" alt="New York" width="1200" height="700">
                                </div>
                            </div>
                        </div><br>
                        <div class="dcontent">

                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td width="200"><i class="fa fa-check-circle"></i> Product Name</td>
                                    <td><?php echo $name?></td>
                                </tr>
                                <tr>
                                    <td width="200"><i class="fa fa-check-circle"></i> Category</td>
                                    <td><?php echo $category?></td>
                                </tr>
                                <tr>
                                    <td width="200"><i class="fa fa-check-circle"></i> Description</td>
                                    <td><?php echo $description?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>


    <?php
    include 'footer.php'
    ?>
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- JAVASCRIPTS -->
<script src="scripts/jquery.min.js"></script>
<script src="scripts/magnify.js"></script>
<script src="scripts/script.js"></script>
<script src="scripts/jquery.backtotop.js"></script>
<script src="scripts/jarallax.js"></script>
<script src="scripts/mscript.js"></script>

</body>