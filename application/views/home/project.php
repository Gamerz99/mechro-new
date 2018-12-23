<?php
$this->load->view('layout/header');
?>
<body id="top" >

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
                        <li><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
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
                        <li class="active"><a href="<?php echo base_url(); ?>index.php/project">Our Projects</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/about">About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/gallery">Gallery</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/contact">Contact Us</a></li
                    </ul>
                </nav>
            </header>
        </div>
        <div class="wrapper">
            <section id="breadcrumb" class="hoc clear">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Projects</a></li>
                </ul>
            </section>
        </div>
    </div>

    <div class="wrapper row3">
        <section class="hoc container clear"><br>
            <ul class="nav nav-tabs">
                <li class="<?php echo $ongoing ?>"><a data-toggle="tab" href="#on_going">ON GOING PROJECTS</a></li>
                <li class="<?php echo $complete ?>"><a data-toggle="tab" href="#complete">COMPLETED PROJECTS</a></li>
            </ul>
            <div class="tab-content">
                <div id="on_going" class="tab-pane fade in <?php echo $ongoing ?>"><br>
                    <h6 class="heading center"> ON GOING PROJECTS</h6><br>
                    <div class="group excerpts">
                        <?php
                        foreach ($goingprojects as $goingproject){
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <article>
                                    <figure><img src="<?php echo base_url(); ?>projects/<?php echo $goingproject['Image1']?>" alt=""  >
                                        <div class="img-overlay">
                                            <div class="text">More</div>
                                            <div class="text3"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </figure>
                                    <div class="hgroup">
                                        <h4 class="heading"><?php echo $goingproject['Name']?></h4>
                                        <ul class="nospace meta">
                                            <li>by <a href="#">MECH-RO</a></li>
                                            <li>in <a href="#">Projects</a></li>
                                        </ul>
                                    </div>
                                    <footer>
                                        <div class="fl_center">
                                            <a class="btn" href="<?php echo base_url(); ?>index.php/project/detail/<?php echo $goingproject['Id']?>">View</a>
                                        </div>
                                    </footer>
                                </article>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div id="complete" class="tab-pane fade in <?php echo $complete ?>"><br>
                    <h6 class="heading center"> COMPLETED PROJECTS</h6><br>
                    <div class="group excerpts">
                        <?php
                        foreach ($comprojects as $comproject){
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <article>
                                    <figure><img src="<?php echo base_url(); ?>projects/<?php echo $comproject['Image1']?>" alt=""  >
                                        <div class="img-overlay">
                                            <div class="text">More</div>
                                            <div class="text3"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </figure>
                                    <div class="hgroup">
                                        <h4 class="heading"><?php echo $comproject['Name']?></h4>
                                        <ul class="nospace meta">
                                            <li>by <a href="#">MECH-RO</a></li>
                                            <li>in <a href="#">Projects</a></li>
                                        </ul>
                                    </div>
                                    <footer>
                                        <div class="fl_center">
                                            <a class="btn" href="<?php echo base_url(); ?>index.php/project/detail/<?php echo $comproject['Id']?>">View</a>
                                        </div>
                                    </footer>
                                </article>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
        </section>
    </div>
    <?php
    $this->load->view('layout/footer');
    ?>
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
<script src="<?php echo base_url(); ?>scripts/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url(); ?>scripts/mscript.js"></script>
<script src="<?php echo base_url(); ?>scripts/jarallax.js"></script>
<script src="<?php echo base_url(); ?>scripts/script.js"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.mobilemenu.js"></script>
</body>