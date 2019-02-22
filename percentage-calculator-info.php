<?php $page=basename($_SERVER[ 'SCRIPT_NAME']); ?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Here is the formula for working out the percentage of an amount.">
    <meta name="author" content="">
    <title>The formula to work out the percentage of an amount</title>
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
              <h2>Ok, so how does this work? Let's break it down into its basic form:</h2>
              <h3>What is P percent of A?</h3>

              <p>Written as an equation: B = P% * A</p>
              <p>The 'what' is B that we want to solve for</p>
              <p>Remember to first convert percentage to decimal, dividing by 100</p>
              <p>Solution: Solve for B using the percentage formula</p>
              <p>B = P% * A</p>

              <h3>Example: What is 10% of 25?</h3>

              <p>Written using the percentage formula: B = 10% * 25</p>
              <p>First convert percentage to a decimal 10/100 = 0.1</p>
              <p>B = 0.1 * 25 = 2.5</p>
              <p>So 10% of 25 is 2.5</p>
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
