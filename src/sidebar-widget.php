<p class="text-uppercase text-left"> <span class="selected-icon">>></span>
<?php 
            if (isset($_SESSION["from"])) {
              echo "FROM: <u>" . $_SESSION['from'] . "</u><br> TO: <u>" . $_SESSION['to'] . "</u>";
            }else{
              echo "Current Month";
            }
        ?>
</p>
<?php include('sidebar-widget-leads.php') ?>
<div class="text-center mt30">
  <h4 class="text-uppercase">new leads</h4>
  <h1><?php echo $leadcount ?></h1>
</div>
<div class="text-center mt30">
  <h4 class="text-uppercase">sm leads</h4>
  <h1><?php echo $smcount ?></h1>
</div>
<div class="text-center mt30">
  <h4 class="text-uppercase">ppc leads</h4>
  <h1><?php echo $ppccount ?></h1>
</div>
<div class="text-center mt30">
  <h4 class="text-uppercase">sales</h4>
  <h1><?php echo $soldcount ?></h1>
</div>
<div class="text-center mt30">
  <h4 class="text-uppercase">print</h4>
  <h1><?php echo $printcount ?></h1>
</div>
<div class="text-center mt30">
  <h4 class="text-uppercase">text-blast</h4>
  <h1><?php echo $textcount ?></h1>
</div>
<div class="text-center mt30">
  <h4 class="text-uppercase">email</h4>
  <h1><?php echo $emailcount ?></h1>
</div>
<div class="text-center mt30">
  <h4 class="text-uppercase">cancel</h4>
  <h1><?php echo $cancelcount ?></h1>
</div>