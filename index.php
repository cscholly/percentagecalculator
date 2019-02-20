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
        <div class="jumbotron" style="margin-top:30px">
          <h2 text align="center" >Calculate how much a % of an amount is:</h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm" style="margin-top:30px">
            <div class="card">
              <div class="card-header">
                Calculate percentage of an amount
              </div>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">What is</span>
                  </div>
                  <input id="percentage" type="text" class="form-control" aria-label="Percentage Amount" aria-describedby="basic-addon1">
                  <div class="input-group-append">
                    <span class="input-group-text">%</span>
                  </div>
                </div>

                <div class="input-group" style="margin-top:20px">
                  <div class="input-group-prepend">
                    <span class="input-group-text">of this amount</span>
                  </div>
                  <input id="percentage" type="text" class="form-control" aria-label="Amount" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm" style="margin-top:30px">
            <div class="card">
              <div class="card-header">
                Result
              </div>
              <div class="card-body">
                <p class="lead">
                  <span id="percentageResult">%</span> of <span id="amountResult">0</span> is <span id="answer">0</span>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" style="margin-top:30px">
          <div class="col">
            <div class="card">
              <div class="card-header">
                Quote
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
              </div>
            </div>
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
