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
    <link rel="stylesheet" href="css/custom.css" />

    <?php include ( 'includes/header.php'); ?>

    <!-- Menu start -->
    <?php include ( 'includes/menu.php'); ?>
    <!-- Menu end -->

    <div id=wrap>
        <div class="container">
            <div class="jumbotron" style="margin-top:30px">
                <h2>Calculate how much a % of an amount is:</h2>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Percentage Calculator</h3>
                  </div>
                  <div class="panel-body">
                    <form id="calcForm">
                      <div id="calcbox">
                        <div class="form-group" style="margin-bottom: 0px;">
                          <div class="input-group" style="margin-bottom:10px;">
                            <span class="input-group-addon">R</span>
                            <input type="text" class="form-control" aria-label="Percentage Amount" id="monthlyIncome">
                          </div>
                          <div class="input-group" style="margin-bottom:10px;">
                            <input type="text" class="form-control" aria-label="Amount" id="monthlyIncome">
                          </div>
                          <div style="margin-top:10px">
                            <button type="submit" class="btn btn-default" onclick="payeCalc(); return false;">Calculate Tax</button>
                            <button type="submit" class="btn btn-default" onclick="resetCalc(); return false;">Clear</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div id="addResult" class="panel panel-default">
                  <div class="panel-body">
                    <table class="table" style="margin-bottom: 5px;">
                      <tr>
                        <td>Original Amount</td>
                        <td class="text-right"><span id=annualIncome>0.00</span></td>
                      </tr>
                      <tr>
                        <td>Percentage Chosen</td>
                        <td class="text-right"><span id=annualTax>0.00</span></td>
                      </tr>
                      <tr>
                        <td>Amount</td>
                        <td class="text-right"><span id=monthlyInc>0.00</span></td>
                      </tr>
                      <tr>
                        <td>Monthly PAYE</td>
                        <td class="text-right"><span id=monthlyTax>0.00</span></td>
                      </tr>
                      <tr>
                        <td><strong>Netto Income</strong></td>
                        <td class="text-right"><strong><span id=nettoIncome>0.00</span></strong></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-body text-center">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- PAYE - Responsive -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-0590369945323371"
                     data-ad-slot="8869708491"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
              </div>
            </div>
          </div>
    <!-- wrap end -->

    <!-- footer start -->
    <footer class="footer">
      <div class="container">
        <?php include ( 'includes/footer.php'); ?>
      </div>
    </footer>
    <!-- footer end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>

<!-- VAT calculation scripts -->
<script src="js/calculation.js"></script>

<!-- Initialize Popover -->
<script>
$(document).ready(function() {
  $('[data-toggle="popover"]').popover();
});
</script>

</html>
