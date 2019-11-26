
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script language='JavaScript'>
        var txt="DEMO BASE64 ";
        var speed=300;
        var refresh=null;
        function action() { document.title=txt;
            txt=txt.substring(1,txt.length)+txt.charAt(0);
            refresh=setTimeout("action()",speed);}action();
    </script>
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/LOGO-UBL.png')?>" type="image/x-icon">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css')?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/AdminLTE.min.css')?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/skins/_all-skins.min.css')?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/morris.js/morris.css')?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/jvectormap/jquery-jvectormap.css')?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css')?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/select2/dist/css/select2.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/iCheck/all.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/star-rating.min.css')?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<header class="main-header">
		<nav class="navbar navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<a href="../../index2.html" class="navbar-brand"><b>Base64 Encoding</b></a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
					<ul class="nav navbar-nav">

						<li class="dropdown">

						</li>
					</ul>

				</div>
				<!-- /.navbar-collapse -->
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<!-- Menu toggle button -->

							<ul class="dropdown-menu">

								<li>
									<!-- inner menu: contains the messages -->
									<ul class="menu">
										<li><!-- start message -->

										</li>
										<!-- end message -->
									</ul>
									<!-- /.menu -->
								</li>

							</ul>
						</li>
						<!-- /.messages-menu -->

						<!-- Notifications Menu -->
						<li class="dropdown notifications-menu">
							<!-- Menu toggle button -->

							<ul class="dropdown-menu">

							</ul>
						</li>
						<!-- Tasks Menu -->
						<li class="dropdown tasks-menu">
							<!-- Menu Toggle Button -->

							<ul class="dropdown-menu">

								<li>
									<!-- Inner menu: contains the tasks -->
									<ul class="menu">
										<li><!-- Task item -->

										</li>
										<!-- end task item -->
									</ul>
								</li>

							</ul>
						</li>
						<!-- User Account Menu -->
						<li class="dropdown user user-menu">
							<!-- Menu Toggle Button -->

							<ul class="dropdown-menu">
								<!-- The user image in the menu -->

								<!-- Menu Body -->

								<!-- Menu Footer-->

							</ul>
						</li>
					</ul>
				</div>
				<!-- /.navbar-custom-menu -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>
	<!-- Full Width Column -->
	<div class="content-wrapper">
		<div class="container">
			<!-- Content Header (Page header) -->
			<section class="content-header">

			</section>

			<!-- Main content -->
			<section class="content">

				<div class="row">
				<div class="col-md-6">
					<!-- Horizontal Form -->
					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Encode</h3>
						</div>
						<!-- /.box-header -->
						<!-- form start -->

							<div class="box-body">
								<form class="form-horizontal" method="post" action="<?php echo base_url('Welcome/index') ?>">
								<div class="form-group">
									<label  class="col-sm-2 control-label">Plain Text</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" name="plaintext" placeholder="Masukan Plain Text">
									</div>
								</div>
									<!-- /.box-body -->
									<div class="box-footer">

										<button type="submit" class="btn btn-info pull-right">Enskripsi</button>
									</div>
									<!-- /.box-footer -->
								</form>

								<BR/>
								<BR/>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Chiper Text</label>

									<div class="col-sm-10">
										<textarea class="form-control" name="chipertext" placeholder="Output Chiper Text"><?php echo $hasil['enskripsi'] ?></textarea>
									</div>
								</div>


							</div>





					</div>

				</div>




					<div class="col-md-6">
						<!-- Horizontal Form -->
						<div class="box box-info">
							<div class="box-header with-border">
								<h3 class="box-title">Decode</h3>
							</div>
							<!-- /.box-header -->
							<!-- form start -->

								<div class="box-body">
									<form class="form-horizontal" method="post" action="<?php echo base_url('Welcome/index') ?>">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Chiper</label>

										<div class="col-sm-10">
											<input type="text" class="form-control" name="chipertext"  placeholder="Masukan Chiper Text">
										</div>
									</div>
										<div class="box-footer">

											<button type="submit" class="btn btn-info pull-right">Deskripsi</button>
										</div>
										<!-- /.box-footer -->
									</form>

									<BR/>
									<BR/>
									<div class="form-group">
										<label  class="col-sm-2 control-label">Plain Text</label>

										<div class="col-sm-10">
											<textarea class="form-control" name="plainttext" placeholder="Output Plain text"><?php echo $hasil['deskripsi'] ?></textarea>
										</div>
									</div>

								</div>
								<!-- /.box-body -->






						</div>
					</div>

				</div>


				<!-- /.box -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.container -->



	</div>
	<!-- /.content-wrapper -->
<div>
	<div align="left"><font color="white"><b><marquee scrollamount="2" behavior="right" bgcolor="blue">
					Base64 Encoding - Kelompok : Titik Sulastri 16421046  &   Imam Hidayah 16421011 </marquee></b></font></div>

</div>

	<footer class="main-footer">




		<div class="container">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.4.0
			</div>
			<strong>Copyright &copy; 2019 <a href="https://www.ubl.ac.id">Universitas Bandar Lampung</a>.</strong> All rights
			reserved.
		</div>
		<!-- /.container -->
	</footer>
</div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/adminlte/bower_components/raphael/raphael.min.js')?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/morris.js/morris.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js')?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/adminlte/bower_components/moment/min/moment.min.js')?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/adminlte/bower_components/fastclick/lib/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/adminlte/dist/js/pages/dashboard.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/adminlte/dist/js/demo.js')?>"></script>

<!-- DataTables -->
<script src="<?php echo base_url('assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>

<script src="<?php echo base_url('assets/adminlte/bower_components/select2/dist/js/select2.full.min.js')?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.js')?>"></script>
<script src="<?php echo base_url('assets/adminlte//plugins/input-mask/jquery.inputmask.date.extensions.js')?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js')?>"></script>

<script src="<?php echo base_url('assets/adminlte/plugins/iCheck/icheck.min.js')?>"></script>



<script src="<?php echo base_url('assets/js/star-rating.min.js')?>"></script>


</body>
</body>
</html>
