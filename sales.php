<?php include('header.php') ?>
<?php $menu = 'sales'; ?>
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
        <ul id="tabs">
          <li><a href="#" name="tab1">SALES</a></li>
        </ul>
        <div class="table-container new-leads" id="content">
          <div id="tab1">
            <?php include('src/this-month-revenue.php') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>