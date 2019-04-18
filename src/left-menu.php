<div class="row mt20">
  <div style="margin-left:30px;">
    <a href="./">
      <div class="button secondary">Dashboard</div>
    </a>
    <div class="row text-center menu-item">
      <div class="tab-title" style="width:60px;height:auto;margin:12px auto;">
        <a href="/load-data.php"><img src="/assets/icons/load-data.svg" alt="" class="img-fluid"></a>
      </div>
      <div class="title" style="display:none;">Load Data</div>
      <?php if($menu == 'load data') : ?>
        <div class="current-menu">Load Data</div>
      <?php endif ?>
    </div>
    <div class="row text-center menu-item">
      <div class="tab-title" style="width:70px;height:auto;margin:12px auto;margin-left:49px!important">
        <a href="/campaigns.php"><img src="/assets/icons/campaigns.svg" alt="" class="img-fluid"></a>
      </div>
      <div class="title" style="display:none;">Campaign</div>
      <?php if($menu == 'campaigns') : ?>
        <div class="current-menu">Campaign</div>
      <?php endif ?>
    </div>
    <div class="row text-center menu-item">
      <div class="tab-title" style="width:60px;height:auto;margin:12px auto;">
        <a href="/leads.php"><img src="/assets/icons/leads.svg" alt="" class="img-fluid"></a>
      </div>
      <div class="title" style="display:none;">Leads</div>
      <?php if($menu == 'leads') : ?>
        <div class="current-menu">Leads</div>
      <?php endif ?>
    </div>
    <div class="row text-center menu-item">
      <div class="tab-title" style="width:60px;height:auto;margin:12px auto;">
        <a href="/results.php"><img src="/assets/icons/graphs.svg" alt="" class="img-fluid"></a>
      </div>
      <div class="title" style="display:none;">Results</div>
      <?php if($menu == 'results') : ?>
        <div class="current-menu">Results</div>
      <?php endif ?>
    </div>
    <div class="row text-center menu-item">
      <div class="tab-title" style="width:60px;height:auto;margin:12px auto;">
        <a href="/period.php"><img src="/assets/icons/period.svg" alt="" class="img-fluid"></a>
      </div>
      <div class="title" style="display:none;">Period</div>
      <?php if($menu == 'period') : ?>
        <div class="current-menu">Period</div>
      <?php endif ?>
    </div>
    <div class="row text-center menu-item">
      <div class="tab-title" style="width:60px;height:auto;margin:12px auto;">
        <a href="/sales.php"><img src="/assets/icons/sales.svg" alt="" class="img-fluid"></a>
      </div>
      <div class="title" style="display:none;">Sales</div>
      <?php if($menu == 'sales') : ?>
        <div class="current-menu">Sales</div>
      <?php endif ?>
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