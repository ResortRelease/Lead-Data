<?php include('header.php') ?>
<?php $menu = 'period'; ?>
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
        <div class="row mt20">
          <div class="primary select elForm">
            <form action="" method="post" name="period" enctype="multipart/form-data">

              <h3>This Month</h3>
              <?php 
              $thisMonthFirst = date('Y-m-d',strtotime('first day of this month'));
              $thisMonthLast = date('Y-m-d',strtotime('last day of this month'));
              echo $thisMonthFirst . " - " . $thisMonthLast;
            ?>
              <input type="date" name="from" value="<?php echo $thisMonthFirst ?>" style="display:none;">
              <input type="date" name="to" value="<?php echo $thisMonthLast ?>" style="display:none;">
              <input type="hidden" name="period" value="" />
            </form>
          </div>
        </div>
        <div class="row mt20">
          <div class="primary select elForm">
            <form action="" method="post" name="period" enctype="multipart/form-data">
              <h3>Last Month</h3>
              <?php 
                $thisMonthFirst = date('Y-m-d',strtotime('first day of last month'));
                $thisMonthLast = date('Y-m-d',strtotime('last day of last month'));
                echo $thisMonthFirst . " - " . $thisMonthLast;
              ?>
              <input type="date" name="from" value="<?php echo $thisMonthFirst ?>" style="display:none;">
              <input type="date" name="to" value="<?php echo $thisMonthLast ?>" style="display:none;">
              <input type="hidden" name="period" value="" />
            </form>
          </div>
        </div>
        <div class="row mt20">
          <div class="primary select elForm">
            <form action="" method="post" name="period" enctype="multipart/form-data">
              <h3>Last 3 Months</h3>
              <?php 
              $thisMonthFirst = date('Y-m-d',strtotime('first day of -3 month'));
              $thisMonthLast = date('Y-m-d',strtotime('last day of this month'));
              echo $thisMonthFirst . " - " . $thisMonthLast;
            ?>
              <input type="date" name="from" value="<?php echo $thisMonthFirst ?>" style="display:none;">
              <input type="date" name="to" value="<?php echo $thisMonthLast ?>" style="display:none;">
              <input type="hidden" name="period" value="" />
            </form>
          </div>
        </div>
        <div class="row mt20">
          <div class="primary select elForm">
            <form action="" method="post" name="period" enctype="multipart/form-data">
              <h3>This Month, Last Year</h3>
              <?php 
              $thisMonthFirst = date('Y-m-d',strtotime('first day of this month -1 year'));
              $thisMonthLast = date('Y-m-d',strtotime('last day of this month -1 year'));
              echo $thisMonthFirst . " - " . $thisMonthLast;
            ?>
              <input type="date" name="from" value="<?php echo $thisMonthFirst ?>" style="display:none;">
              <input type="date" name="to" value="<?php echo $thisMonthLast ?>" style="display:none;">
              <input type="hidden" name="period" value="" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function () {
    jQuery("#content div").hide(); // Initially hide all content
    jQuery("#tabs li:first").attr("id", "current"); // Activate first tab
    jQuery("#content div:first").fadeIn(); // Show first tab content

    jQuery('#tabs a').click(function (e) {
      e.preventDefault();
      if (jQuery(this).closest("li").attr("id") == "current") { //detection for current tab
        return
      } else {
        jQuery("#content div").hide(); //Hide all content
        jQuery("#tabs li").attr("id", ""); //Reset id's
        jQuery(this).parent().attr("id", "current"); // Activate this
        jQuery('#' + jQuery(this).attr('name')).fadeIn(); // Show content for current tab
      }
    });
    jQuery('.elForm').on('click', function () {
      console.log('CLICK');
      jQuery(this).find('form').submit();
    })
  });
</script>
<?php include('footer.php') ?>