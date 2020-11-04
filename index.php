<?php
include_once 'layout/head.php';
 ?>
<body>
<link rel="stylesheet" type="text/css" href="home.css">
    <header1 class="hero">
      <div class="banner">
        <h1 class="banner-title">
          Home Furniture
        </h1>
        <a href="all_product.php"><button class="banner-btn">shop now</button></a>
      </div>
    </header1>
<style type="text/css">
h1 {
    color: blue;
}
body {
    background-color: white ;
    background-size: cover;
    font-family: Arial;
    color: white;
}
ol {
    text-align: right;
    float: left;
    margin: 0px;
    padding: 0px;
    list-style: none;
    width: 200px;
}
ol li {
    background-color: black;
    opacity: 0.9;
    text-align: center;
    padding: 15px;
    font-size: 20px;
}
ol li a {
    text-decoration: none;
    color: white;
    display: block;
}
ol li a:hover {
background-color: green;

}
header {
    width: 250;
    height: 40px;
    background-color: blue;
    text-align: center;
    font-size: 30px;
}

footer {
    margin-top: : 0px;
    padding: 0px;
    background-color: blue;
    text-align: center;
    font-size: auto;
    color: black;
}

/*.invalid-input {
    border: 1px solid red;
    animation: shake 0.5s
    animation-iteration-count: 2 ;
}*/
.hero {
  min-height: calc(80vh - 50px);
  background: url("./img/42.jpg") center/cover no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
}
.banner {
  text-align: center;
  background: rgba(255, 255, 255, 0.8);
  display: inline-block;
  padding: 2rem;
}
.banner-title {
  color: green;
  font-size: 3.4rem;
  text-transform: uppercase;
  letter-spacing: var(--mainSpacing);
  margin-bottom: 3rem;

}
.banner-btn {
  padding: 1rem 3rem;
  text-transform: uppercase;
  letter-spacing: var(--mainSpacing);
  font-size: 1rem;
  background: var(--primaryColor);
  color: black;
  border: 1px solid var(--primaryColor);
  transition: var(--mainTransition);
  cursor: pointer;
}
.banner-btn:hover {
  background: aqua;
  color: var(--primaryColor);
}


</style>

<?php
include 'function/functions.php';
?>


            <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">We value our customers</a></h3>
                                <p>We are known to provide best service ever</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Best prices</a></h3>
                                <p>Shopping is now simplified</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>Free returns on everything for 3 months.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>

            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Top Products</h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                <div class="agile_top_brands_grids">
                <div class="col-sm-12">
                  <div class=" caption-slide-up">
                      <?php getPro(); ?>


                     </div>

                </div>
                 </div>

                    <!-- /.product-slider -->
                </div>
                <!-- /.container -->
                 <br><br>
                 <p class="text-center">
                                <a href="all_product.php" class=" btn btn-default btn-lg btn-view">View All</a>
                            </p>

            </div>
            <!-- /#hot -->
</div>
</div>
            <!-- *** HOT END *** -->
            <div id="advantages">
             <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Product Categories</h2>
                        </div>
                    </div>
                </div>

            <div class="container">
                <div class="agile_top_brands_grids">
                         <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
    <ul class="nav nav-tabs">
    <li  class="active">
    <a href="#chair" data-toggle="tab">
    Chairs</a></li>
    <li><a href="#sofa" data-toggle="tab">
    Sofa</a></li>
    <li><a href="#table" data-toggle="tab">
    Tables</a></li>
    <li><a href="#dinning" data-toggle="tab">
    Dinning Set</a></li>
    <li><a href="#bedroom" data-toggle="tab">
    Bedroom</a></li>

    </ul></div>
            <div class="tab-content">
          <div class="tab-pane fade active in" id="chair">
            <div class=" caption-slide-up">
<?php
getchair();

?>
           </div>
            </div>
            <div class="tab-pane fade  in" id="sofa">
              <div class=" caption-slide-up">
<?php

getsofa();
?>
         </div>
            </div>
            <div class="tab-pane fade" id="table"><div class=" caption-slide-up">

           <?php

gettable();
?>
</div>
            </div>
            <div class="tab-pane fade" id="dinning"><div class=" caption-slide-up">
            <?php

getdinning();
?>
</div>
        </div>
        <div class="tab-pane fade" id="bedroom"><div class=" caption-slide-up">
           <?php
getbedroom();

?>
</div>
        </div>
        <div class="tab-pane fade" id="occasional"><div class=" caption-slide-up">
           <?php

getocc();
?>
</div>
        </div>

        </div>
        </div>

        </div>
    </div>
    </div>
        <!--/category-tab-->
<div class="clearfix"></div>
<br><br>
       <?php include 'layout/footer.php';?>




    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>


</body>

</html>
