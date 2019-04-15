<?php include('header.php') ?>
<?php $menu = 'campaigns'; ?>
<style>
  .progress-bar {
    background-color: #8CC63F;
  }
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <?php include('src/left-menu.php'); ?>
    </div>
    <div class="col-md-10 mt20">
      <div class="vertical-center container">
        <div class="date-form">
          <?php include('src/date-form.php') ?>
        </div>
        <ul id="tabs">
          <li><a href="#" name="tab1">FB CAMPS</a></li>
          <li><a href="#" name="tab2">PPC CAMPS</a></li>
        </ul>
        <div class="table-container new-leads" id="content">
          <div id="tab1">
            <?php include('src/this-month-leads-facebook.php') ?>
          </div>
          <div id="tab2" style="display:none">
            <?php include('src/this-month-leads-ppc.php') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>