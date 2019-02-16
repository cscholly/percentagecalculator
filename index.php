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
          <h2 text align="center" >Calculate how much a % of an amount is:</h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <div class="card">
                <div class="card-body">
                  This is some text within a card body.
                </div>
              </div>
              <div class="col-sm">
                <div class="card">
                  <div class="card-body text-center">
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
            </div>
          </div>
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
