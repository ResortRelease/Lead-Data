<div class="row">
  <form class="form-horizontal" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
    <div class="input-row">
      <label class="col-md-4 control-label">Choose CSV File</label><input type="file" name="file" id="file" accept=".csv">
      <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
      <br />
    </div>
  </form>
  <h2>OR</h2>
  <ol>
    <li>Update S3 > rr-data-test > export-mk.csv :<br><br><a href="https://www.resortreleasecrm.com/29a301fb-5043-46c9-b036-560c9d584ecd.php" target="_blank"><span>Click Here To Update Database from the CRM (this may take up to 5 minutes, do not use too often)</span></a><br><br></li>
    <li>
      Import List and Update<br><br>
      <form class="form-horizontal" action="" method="post" name="s3Import" id="s3Import" enctype="multipart/form-data">
        <div class="input-row">
          <button type="submit" id="getData" name="s3Import" class="btn-submit">Import From AWS S3</button>
          <br />
        </div>
      </form>
    </li>
    <li>
      Reload Page<br><br>
      <form class="form-horizontal" action="" method="post" name="reload" id="reload" enctype="multipart/form-data">
        <div class="input-row">
          <button type="submit" id="submit" name="reload" class="btn-submit" style="width:50px"><img src="/reload.png" alt="reload" width="100%"></button>
          <br />
        </div>
      </form>
    </li>
  </ol>
</div>
<script>
$(function () {
  $('#s3Import').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      dataType: "html",
      url: 'import-s3.php',
      beforeSend: function() {
        $("#response").html('Loading...').show().addClass('success');
      },
      success: function(data) {
        $('#response').html("Success").show().addClass('success'); // alert on success
      }
    });

  });
});
</script>