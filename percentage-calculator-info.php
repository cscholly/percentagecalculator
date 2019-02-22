<?php $page=basename($_SERVER[ 'SCRIPT_NAME']); ?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Basic Calculator for working out the percentage of an amount.">
    <meta name="author" content="">
    <title>A Simple Percentage Calculator</title>
    <link rel="shortcut icon" href="" />

    <?php include ( 'includes/header.php'); ?>

    <!-- Navbar start -->
    <?php include ( 'includes/menu.php'); ?>
    <!-- Navbar end -->

    <!-- wrap start -->
    <div id=wrap>
      <div class="container">
        <div class="row" style="margin-top:30px">
          <div class="col">
            <blockquote class="blockquote mb-0">
              <p>When you say "Percent" you are actually saying "per 100" or /100 or % (see the 100 in the symbol?)</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <!-- wrap end -->

    <!-- footer start -->
        <?php include ( 'includes/footer.php'); ?>
    <!-- footer end -->

</body>

<!-- Percentage calculation scripts -->
<script src="js/calculation.js"></script>

</html>
