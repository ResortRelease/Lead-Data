<style>
  .calendar-item {
    right:20%!important;
  }
</style>
<div class="container">
  <div class="main-d-menu vertical-center">
    <div class="row">
      <div class="col-md-4">
        <a href="/load-data.php">
          <img src="/assets/icons/load-data.svg" alt="" class="fit">
          <p class="mt20">LOAD DATA<br><small><?php echo $lastUpdate ?></small></p>
        </a>
      </div>
      <div class="col-md-4">
        <a href="/campaigns.php">
          <img src="/assets/icons/campaigns.svg" alt="" class="fit">
          <p class="mt20">CAMPAIGNS</p>
        </a>  
      </div>
      <div class="col-md-4">
        <a href="/leads.php">
          <img src="/assets/icons/leads.svg" alt="" class="fit">
          <p class="mt20">LEADS</p> 
        </a>       
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <a href="/results.php">
          <img src="/assets/icons/graphs.svg" alt="" class="fit">
          <p class="mt20">RESULTS</p>            
        </a>    
      </div>
      <div class="col-md-4">
        <a href="/period.php">
          <img src="/assets/icons/period.svg" alt="" class="fit">
          <p class="mt20">SPECIFIC PERIOD</p>       
        </a>         
      </div>
      <div class="col-md-4">
        <a href="/sales.php">
          <img src="/assets/icons/sales.svg" alt="" class="fit">
          <p class="mt20">SALES</p> 
        </a>               
      </div>
    </div>
  </div>
</div>
<div class="row text-center menu-item calendar-item">
  <div class="tab-title" style="width:60px;height:auto;margin:12px auto;">
    <a href="/calendar.php"><img src="/assets/icons/calendar.svg" alt="" class="img-fluid"></a>
  </div>
  <div class="title" style="display:none;">Calendar</div>
  <?php if($menu == 'calendar') : ?>
    <div class="current-menu">Calendar</div>
  <?php endif ?>
</div>
