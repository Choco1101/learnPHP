<script type="text/javascript" src="../jcarousel/vendor/jquery/jquery.js"></script>
<script type="text/javascript" src="../jcarousel/dist/jquery.jcarousel.min.js"></script>

<script type="text/javascript" src="../jcarousel/examples/responsive/jcarousel.responsive.js "></script>

<style>
 
    .jcarousel-wrapper {
    margin: 20px auto;
    position: relative;
    border: 10px solid #fff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 0 2px #999;
    -moz-box-shadow: 0 0 2px #999;
    box-shadow: 0 0 2px #999;
    }

    /** Carousel **/

    .jcarousel {
    position: relative;
    overflow: hidden;
    width: 100%;
    }

    .jcarousel ul {
    width: 10000em;
    position: relative;
    list-style: none;
    margin: 0;
    padding: 0;
    }

    .jcarousel li {
    width: 200px;
    float: left;
    border: 1px solid #fff;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    }

    .jcarousel img {
    display: block;
    max-width: 100%;
    height: auto !important;
    }

    /** Carousel Controls **/

    .jcarousel-control-prev,
    .jcarousel-control-next {
    position: absolute;
    top: 50%;
    margin-top: -15px;
    width: 30px;
    height: 30px;
    text-align: center;
    background: #4E443C;
    color: #fff;
    text-decoration: none;
    text-shadow: 0 0 1px #000;
    font: 24px/27px Arial, sans-serif;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    -webkit-box-shadow: 0 0 4px #F0EFE7;
    -moz-box-shadow: 0 0 4px #F0EFE7;
    box-shadow: 0 0 4px #F0EFE7;
    }

    .jcarousel-control-prev {
    left: 15px;
    }

    .jcarousel-control-next {
    right: 15px;
    }

    /** Carousel Pagination **/

    .jcarousel-pagination {
    position: absolute;
    bottom: -40px;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
    -ms-transform: translate(-50%, 0);
    transform: translate(-50%, 0);
    margin: 0;
    }

    .jcarousel-pagination a {
    text-decoration: none;
    display: inline-block;

    font-size: 11px;
    height: 10px;
    width: 10px;
    line-height: 10px;

    background: #fff;
    color: #4E443C;
    border-radius: 10px;
    text-indent: -9999px;

    margin-right: 7px;


    -webkit-box-shadow: 0 0 2px #4E443C;
    -moz-box-shadow: 0 0 2px #4E443C;
    box-shadow: 0 0 2px #4E443C;
    }

    .jcarousel-pagination a.active {
    background: #4E443C;
    color: #fff;
    opacity: 1;

    -webkit-box-shadow: 0 0 2px #F0EFE7;
    -moz-box-shadow: 0 0 2px #F0EFE7;
    box-shadow: 0 0 2px #F0EFE7;
    }

    .wrapper {
        max-width: 1500px;
        padding: 0 0px 0px 0px;
        margin: auto;
    }

    .hover-shadow:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      cursor: pointer;
    }           
</style>       


<div class="wrapper" >


    <div class="jcarousel-wrapper" >
        <div class="jcarousel">
            <ul>
                <li><img src="../jcarousel/examples/_shared/img/img1.jpg" alt="Image 1" class="hover-shadow"></li>
                <li><img src="../jcarousel/examples/_shared/img/img2.jpg" alt="Image 2"  class="hover-shadow"></li>
                <li><img src="../jcarousel/examples/_shared/img/img3.jpg" alt="Image 3"  class="hover-shadow"></li>
                <li><img src="../jcarousel/examples/_shared/img/img4.jpg" alt="Image 4"  class="hover-shadow"></li>
                <li><img src="../jcarousel/examples/_shared/img/img5.jpg" alt="Image 5"  class="hover-shadow"></li>
                <li><img src="../jcarousel/examples/_shared/img/img6.jpg" alt="Image 6"  class="hover-shadow"></li>
            </ul>
        </div>

        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
        <a href="#" class="jcarousel-control-next">&rsaquo;</a>

        <!-- <p class="jcarousel-pagination"></p> -->
    </div>
</div>

<?php include "./modal_login.php"; ?>
<!-- <button  style="width:auto;">Login</button> -->