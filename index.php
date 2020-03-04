<?php
// ob_flush();
require("application/config/koneksi.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require("template/head.php") ?>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="right-div">
                <a href="#" class="btn btn-info pull-right">LOG ME OUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <?php require("template/header.php") ?>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <?php  require("application/config/route.php") ?>
        </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <?php require("template/footer.php") ?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <?php require("template/javascript.php") ?>
</body>
</html>

<?php
// ob_end_flush();
?>
