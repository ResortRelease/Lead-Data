<?php include('header.php') ?>
<?php $menu = 'results'; ?>
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
        <h1 class="text-white">Results</h1>
        <div class="date-form">
          <?php include('src/date-form.php') ?>
        </div>
        <ul id="tabs">
          <li><a href="#" name="tab1">NEW LEADS</a></li>
          <li><a href="#" name="tab2">ASAP LEADS</a></li>
        </ul>
        <div class="table-container new-leads" id="content">
          <div id="tab1">
            <?php include('src/results-by-channel.php') ?>
          </div>
          <div id="tab2" style="display:none">
            <?php include('src/results-by-channel-asap.php') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>