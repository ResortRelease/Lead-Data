<?php include('header.php') ?>
	<div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>">
		<?php if(!empty($message)) { echo $message; } ?>
	</div>
    <div class="container-fluid">
			<div class="row">
				<div class="col-md-10 main">
					<!-- Top Button Row -->
					<div class="row mt20">
						<div class="col-md-3">
							<div class="button secondary">Dashboard</div>
						</div>
						<div class="col-md-9 text-left"><p class="text-third">GORILLA MARKETING KPI</p></div>
					</div>
					<!-- Main Dashboard -->
					<div class="row">
						<!-- Main Dashboard Menu -->
						<?php include('main-dashboard-menu.php') ?>
					</div>
				</div>
				<div class="col-md-2 sidebar">
					<?php include('sidebar-widget.php') ?>
				</div>
			</div>
		</div>
<?php include('footer.php') ?>