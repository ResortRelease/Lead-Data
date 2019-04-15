<?php include('header.php') ?>
<?php $menu = 'load data' ?>
<style>
.progress-bar{
  background-color: #8CC63F;
}
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <?php include('src/left-menu.php'); ?>
    </div>
    <div class="col-md-10 mt20">
      <div class="text-center" id="error"><?php $message ?></div>
      <div class="row vertical-center">
        <div class="col-md-4">
          <a href="https://www.resortreleasecrm.com/29a301fb-5043-46c9-b036-560c9d584ecd.php" target="_blank">
            <div class="primary block">
              <p class="text-uppercase">step 1</p>
              <h2 class="text-uppercase">update s3</h2>
              <br>
              <p class="text-capitalize">last update </p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="/import-s3-hook.php" id="" name="s3Import">
            <div class="primary block">
              <!-- id="getData" name="s3Import" -->
              <p class="text-uppercase">step 2</p>
              <h2 class="text-uppercase">import data</h2>
              <br>
              <div class="progress">
                <div id="myBar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="./">
            <div class="primary block">
              <p class="text-uppercase">step 3</p>
              <h2 class="text-uppercase">refresh</h2>
              <img src="/assets/icons/refresh.svg" alt="" style="width:60px;">
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php') ?>
<script>
  var $ = jQuery.noConflict();
  jQuery('#getData').on('click', function(){
    jQuery('#error').html('loading...');
    jQuery.ajax({
      type: "POST",
      url: '/src/import-s3-hook.php',
      success: function(data) {
        jQuery('#error').html(data);
      },
      error: function(data) {
        jQuery('#error').html(data);
      }
    });
  })
</script>