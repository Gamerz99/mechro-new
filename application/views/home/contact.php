
<?php
$this->load->view('layout/header');
?>
<body id="top" class="">

<div id="loading1" class="loading text-center">
    <div id="loading1" class="loadtext text-center">
        <img src="<?php echo base_url(); ?>images/loading.svg" width="80px">

    </div>
</div>

<div class="load">
    <div class="wrapper bgded overlay main1 mbr-parallax-background">
        <div class="wrapper row0">
            <div id="topbar" class="hoc clear">
                <div class="fl_right">
                    <ul class="nospace">
                        <li><i class="fa fa-phone"></i> +94 0714864007 / +940770083907</li>
                        <li><i class="fa fa-envelope-o"></i> mechrocom@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="<?php echo base_url(); ?>index.php">MECH-RO</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li ><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
                        <li><a class="drop" href="#">Products</a>
                            <ul>
                                <li><a  href="#">Machinery</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/4">Tea Machinery</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/5">Conveyors</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/6">Dust Collector</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/7">Exhaust Fan</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/8">Packers</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/9">Filters</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Construction</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/10">Equipment</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/11">Roofing Sheets</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/12">Gates</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/13">Roller Doors</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/14">Hand Railing</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/15">Building</a></li>
                                    </ul>
                                </li>
                                <li ><a href="#">Other</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/16">Land</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/17">Vehicles</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>index.php/all">All Products</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>index.php/project">Our Projects</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/about">About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/gallery">Gallery</a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>index.php/contact">Contact Us</a></li
                    </ul>
                </nav>
            </header>
        </div>

        <div class="wrapper">
            <section id="breadcrumb" class="hoc clear">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </section>
        </div>
    </div>


    <div class="wrapper">
        <div class="container cont"><br>
            <h6 class="heading center">CONTACT US</h6><hr><br>
            <div class="one_third first">
                <br>
                <ul class="nospace ">
                    <li class="address"><i class="fa fa-map-marker"></i>
                        No 135/1/1, Elliot Road, Galle
                    </li>

                    <li class="address"><i class="fa fa-phone"></i> +94 0714864007 / +940770083907</li>
                    <li><i class="fa fa-envelope-o"> </i> <a href="mailto:info@domain.com">mechrocom@gmail.com</a></li>
                </ul>
            </div>
            <div class="two_third ">
                <?php
                if(isset($_GET['error'])){
                    echo '<p class="red">Error. Try again</p>';
                }
                elseif(isset($_GET['success'])){
                    echo '<p class="green">Thank you for contacting us. We will be in touch with you very soon.</p>';
                }
                ?>
                <div id="comments">
                    <?php echo form_open('contact/send_mail', 'data-parsley-validate class="form-horizontal form-label-left"'); ?>
                        <div class="one_half first">
                            <label for="name">Name <span>*</span></label>
                            <?php
                            echo form_input('name', '', 'size="22" required');
                            ?>
                        </div>
                        <div class="one_half">
                            <label for="email">Mail <span>*</span></label>
                            <?php
                            echo form_input('email', '', 'size="22" required');
                            ?>
                        </div>
                        <div class="block clear">
                            <label for="comment">Your Comment</label>
                            <?php
                            echo form_textarea('comment', '', ' cols="25" rows="7" required');
                            ?>
                        </div>
                        <div style="text-align:right">
                            <input type="reset" name="reset" value="Reset Form">
                            &nbsp;
                            <input type="submit" name="contact" value="Submit Form">
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <hr>
            <div id="map" class=" ">

                <!-- Add Google Maps -->
                <div id="googleMap">
                    <script>
                        function myMap() {
                            var myCenter = new google.maps.LatLng(6.053519, 80.220977);
                            var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
                            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                            var marker = new google.maps.Marker({position:myCenter});
                            marker.setMap(map);
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHwfFFRUmBvU4XeyaOMOPAM89SR-TQwrs&callback=myMap"></script>
                </div>
            </div>
        </div>
    </div>


    <?php
    $this->load->view('layout/footer');
    ?>

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- JAVASCRIPTS -->
<script src="<?php echo base_url(); ?>scripts/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url(); ?>scripts/jarallax.js"></script>
<script src="<?php echo base_url(); ?>scripts/mscript.js"></script>
<script src="<?php echo base_url(); ?>scripts/script.js"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.mobilemenu.js"></script>

</body>