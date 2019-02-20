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
                What is
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="input-group">
                    <input type="text" class="form-control" aria-label="Percentage">
                    <div class="input-group-append">
                      <span class="input-group-text">%</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div>
                    <p class="lead text-center" >of</p>
                  </div>
                </div>
                <div class="row">
                  <div class="input-group" style="margin-top: 20px;">
                    <input type="text" class="form-control" aria-label="Amount">
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-sm" style="margin-top:30px">
            <div class="card">
              <div class="card-header">
                Calculation and Result
              </div>
              <div class="card-body">
                <table id="summary" class="table" style="margin-bottom: 5px;">
                    <tr>
                        <td>What is</td>
                        <td class="text-right"><span id=percentage>0</span>%</td>
                    </tr>
                    <tr>
                        <td>of this amount</td>
                        <td class="text-right"><span id=given_amount>0.00</span></td>
                    </tr>
                    <tr>
                        <td><strong>the answer is</strong></td>
                        <td class="text-right"><strong><span id=percentage_amount>0.00</span></strong></td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
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
