<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: admin_login.php");
exit;
}
?>
	<?php/*include '../config.php';
$selectdata = mysql_query("select * from widex_contact");
$totlecount = mysql_num_rows($selectdata);*/ ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>VOYY | Admin Panel</title>
		<!-- Favicon and touch icons -->
		<?php include'includes/head.php'; ?>
		<style>
			.circles { margin-bottom: -10px; }
			.circle { 
				width: 100px;
				margin: 6px 6px 20px;
				display: inline-block;
				position: relative;
				text-align: center;
				line-height: 1.2;
			}
			.circle canvas { vertical-align: top; }
			.circle strong {
				position: absolute;
				top: 30px;
				left: 0;
				width: 100%;
				text-align: center;
				line-height: 40px;
				font-size: 30px;
				font-weight: 700;
			}
			.circle .count-number {position: absolute; top: 0; left: 0; width: 100%; text-align: center; line-height: 40px; font-size: 30px; font-weight: 700; margin: 0; color: #00090E;}
			.circle .extra{position: absolute; right: -46%; top: 19%; font-size: 22px; font-weight: bold; color: #00090E;}
			.circle strong i {
				font-style: normal;
				font-size: 0.6em;
				font-weight: normal;
			}
			.circle span {
				display: block;
				color: #333;
				margin-top: 12px;
			}
			p { margin: 40px 0; }
			.install { display: inline-block; }
			.install a {
				display: block;
				width: auto;
				vertical-align: middle;
				padding: 6px 12px;
				line-height: 20px;
				background-color: #111;
				color: #fff;
				border-radius: 3px;
				text-decoration: none;
				margin: 5px auto;
				transition: all .3s;
			}
			.install code {
				padding: 6px 12px;
				display: block;
				font: 13px/20px Courier New, Liberation Mono, monospase;
				background-color: #333333;
				border-radius: 4px;
				margin: 5px 0;
				white-space: nowrap;
			}
			.install a:hover { background-color: #222; }
			.credits { 
				color: #aaa;
				position: fixed;
				left: 0;
				bottom: 0;
				width: 100%;
			}
			.credits img {
				margin-left: 4px;
				border-radius: 4px;
				vertical-align: middle;
			}
			@media (max-height: 600px), (max-width: 480px)
			{
				.credits { position: inherit; }
			}
		</style>
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
			<?php include'includes/header.php'; ?>
			<!-- =============================================== -->
			<!-- Left side column. contains the sidebar -->
			<?php include'includes/sidenav.php'; ?>
			<!-- =============================================== -->
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="header-icon">
						<i class="fa fa-dashboard"></i>
					</div>
					<div class="header-title">
						<h1>Sub Category</h1>
						<!-- <small>Very detailed & featured admin.</small> -->
					</div>
				</section>
				<section class="content">
				
				
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="">
								<?php include ('prod_subcategory.php') ?>
							</div>
						</div>
					</div>
				</section>
				
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<?php include'includes/footer.php'; ?>
		</div>
		<!-- /.wrapper -->
		<?php include'includes/foot.php'; ?>
		<script>
			$('.input-daterange').datepicker({
				// options here
			});
			$(document).ready(function(){
				$(".customl").click(function(){
					$(".input-daterange").show();
				});
			});
		</script>
	</body>
</html>