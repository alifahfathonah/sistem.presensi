<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>MT Al Barkah Jogja</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
		<!-- SweetAlert2 -->
  		<link rel="stylesheet" href="admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	</head>
	<body>
		<div class="main-wrapper-first">
			<div class="hero-area relative">
				<header>
					<div class="container">
						<div class="header-wrap">
							<div class="header-top d-flex justify-content-between align-items-center">
								<div class="logo">
									<a href="/"><img src="img/albarkah.png" width="140px" alt=""></a>
								</div>

								<div id="cnav" class="main-menubar d-flex align-items-center">
									<nav class="hide">
										<a href="https://bit.ly/chanel-mt-albarkah" style="color: black">YouTube</a>
										<a href="https://docs.google.com/forms/d/e/1FAIpQLSfTN-tLQijMCW9-ac4RGYAGhhAMinUDq3iIO1koVYnl7etKTw/viewform" style="color: black">Feedback</a>
										<a href="https://maps.app.goo.gl/PPWSYHNLrCe5b3wx8" style="color: black">Lokasi</a>
										<a href="/presensi" style="color: black">Presensi</a>
									</nav>
									<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="banner-area">
					<div class="container">
						
						</div>
					</div>
				</div>
			</div>
		</div>
@include('sweetalert::alert')			
@yield('content')

			<!-- Start Footer Widget Area -->
			<section class="footer-widget-area">
				
				<footer>
					<div class="container">
						<div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
							
						</div>
					</div>
				</footer>
			</section>
			<!-- End Footer Widget Area -->

		</div>




		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>

		<!-- jQuery -->
		<script src="admin/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Select2 -->
		<script src="admin/plugins/select2/js/select2.full.min.js"></script>
		<!-- Bootstrap4 Duallistbox -->
		<script src="admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
		<!-- InputMask -->
		<script src="admin/plugins/moment/moment.min.js"></script>
		<script src="admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
		<!-- date-range-picker -->
		<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- bootstrap color picker -->
		<script src="admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Bootstrap Switch -->
		<script src="admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
		<!-- AdminLTE App -->
		<script src="admin/dist/js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="admin/dist/js/demo.js"></script>
		<!-- SweetAlert2 -->
		<script src="admin/plugins/sweetalert2/sweetalert2.min.js"></script>
		
		<!-- Page script -->
		<script>
		  $(function () {
		    //Initialize Select2 Elements
		    $('.select2').select2()

		    //Initialize Select2 Elements
		    $('.select2bs4').select2({
		      theme: 'bootstrap4'
		    })

		    //Datemask dd/mm/yyyy
		    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
		    //Datemask2 mm/dd/yyyy
		    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
		    //Money Euro
		    $('[data-mask]').inputmask()

		    //Date range picker
		    $('#reservation').daterangepicker()
		    //Date range picker with time picker
		    $('#reservationtime').daterangepicker({
		      timePicker: true,
		      timePickerIncrement: 30,
		      locale: {
		        format: 'MM/DD/YYYY hh:mm A'
		      }
		    })
		    //Date range as a button
		    $('#daterange-btn').daterangepicker(
		      {
		        ranges   : {
		          'Today'       : [moment(), moment()],
		          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
		          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
		          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
		          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
		          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		        },
		        startDate: moment().subtract(29, 'days'),
		        endDate  : moment()
		      },
		      function (start, end) {
		        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
		      }
		    )

		    //Timepicker
		    $('#timepicker').datetimepicker({
		      format: 'LT'
		    })
		    
		    //Bootstrap Duallistbox
		    $('.duallistbox').bootstrapDualListbox()

		    //Colorpicker
		    $('.my-colorpicker1').colorpicker()
		    //color picker with addon
		    $('.my-colorpicker2').colorpicker()

		    $('.my-colorpicker2').on('colorpickerChange', function(event) {
		      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
		    });

		    $("input[data-bootstrap-switch]").each(function(){
		      $(this).bootstrapSwitch('state', $(this).prop('checked'));
		    });

		  })

		  //Alert
		  $(document).ready(function() {
			    $("#show_hide_password a").on('click', function(event) {
			        event.preventDefault();
			        if($('#show_hide_password input').attr("type") == "text"){
			            $('#show_hide_password input').attr('type', 'password');
			            $('#show_hide_password i').addClass( "fa-eye-slash" );
			            $('#show_hide_password i').removeClass( "fa-eye" );
			        }else if($('#show_hide_password input').attr("type") == "password"){
			            $('#show_hide_password input').attr('type', 'text');
			            $('#show_hide_password i').removeClass( "fa-eye-slash" );
			            $('#show_hide_password i').addClass( "fa-eye" );
			        }
			    });
			});		  
		</script>
	</body>
</html>