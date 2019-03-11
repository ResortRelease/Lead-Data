<div class="row">
  <form class="form-horizontal" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
    <div class="input-row">
      <label class="col-md-4 control-label">Choose CSV File</label><input type="file" name="file" id="file" accept=".csv">
      <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
      <br />
    </div>
  </form>
  <form class="form-horizontal" action="clear-table.php" method="post" name="clear-table" id="clear-table" enctype="multipart/form-data" style="position:absolute;right: 10px;top: 10px;">
    <div class="input-row">
      <button type="submit" id="submit" name="clear-table" class="btn-submit">Clear DB (-)</button>
      <br />
    </div>
  </form>
  <h2>OR</h2>
  <ol>
    <li>Update S3 > rr-data-test > export-mk.csv :<br><br><a href="https://www.resortreleasecrm.com/29a301fb-5043-46c9-b036-560c9d584ecd.php" target="_blank"><span>Click Here To Update Database from the CRM (this may take up to 5 minutes, do not use too often)</span></a><br><br></li>
    <li>
      Import List and Update<br><br>
      <form class="form-horizontal" action="import-s3.php" method="post" name="s3Import" id="s3Import" enctype="multipart/form-data">
        <div class="input-row">
          <button type="submit" id="getData" name="s3Import" class="btn-submit">Import From AWS S3</button>
          <br />
        </div>
      </form>
    </li>
    <li>
      Reload Database<br><br>
      <form class="form-horizontal" action="/" method="post" name="reload" id="reload" enctype="multipart/form-data">
        <div class="input-row">
          <button type="submit" id="submit" name="reload" class="btn-submit" style="width:50px"><img src="/reload.png" alt="reload" width="100%"></button>
          <br />
        </div>
      </form>
    </li>
  </ol>
  <h2>Select Dates</h2>
    <form class="form-horizontal" action="" method="post" name="clear-table" id="dates" enctype="multipart/form-data">
        <div class="input-row">
        <select name="date" value="<?php ?>">
            <option value="this">This Month</option>
            <option value="last">Last Month</option>
        </select>
        ---  
        From: <input type="date" name="from">
        To: <input type="date" name="to">
        <br />
        
        </div>
        <div class="input-row">
            <button type="submit" id="submit" name="dates" class="btn-submit">Submit</button>
        </div>
    </form>
</div>