<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://riday-admin-template.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Riday - Restaurant Bootstrap Admin Template Webapp</title>
    <title>RMS-Restuarent Management System</title>


	@yield('css')


    <title>Restaurant Bootstrap Admin Template Webapp</title>


	<!-- Vendors Style-->
	<link rel="stylesheet" href=" {{ asset('backend/css/vendors_css.css ') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href=" {{ asset('backend/css/style.css ') }}">
	<link rel="stylesheet" href=" {{ asset('backend/css/skin_color.css ') }}">

		{{--  toaster alert link  --}}
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
		alpha/css/bootstrap.css" rel="stylesheet">	   
	   
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
	   
		<link rel="stylesheet" type="text/css" 
		href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">	   
	   
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   
	
	
   
    
	 





  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	{{-- <div id="loader"></div> --}}







    @include('admin.body.admin_header')
	
{{-- main header content --}}
  





	@include('admin.body.admin_sidebar')
{{--  main sidebar content  --}}





 

  {{-- <!-- Content Wrapper. Contains page content --> --}}
  {{-- <div class="content-wrapper"> --}}

    @yield('content')


  {{-- </div> --}}
  {{-- <!-- /.content-wrapper --> --}}




  <!-- Content Right Sidebar -->
  @include('admin.body.admin_rightside')
  <!-- /.Content Right Sidebar -->




	
   @include('admin.body.admin_footer')


  
   {{-- <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar --> --}}
   
   <div class="control-sidebar-bg"></div>
  
{{-- </div> --}}
{{-- <!-- ./wrapper --> --}}
	
	<!-- ./side demo panel -->
	<div class="sticky-toolbar">	    
	    <a href="https://themeforest.net/item/riday-restaurant-bootstrap-admin-template-webapp/31603200" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>

		<a href="https://themeforest.net/user/multipurposethemes/portfolio" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
            <span class="icon-Image"></span>
        </a>
	    
		<a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div>
	{{-- <!-- Sidebar --> --}}
		

	
	{{-- <!-- Page Content overlay --> --}}
	

	{{-- <!-- Vendor JS --> --}}
	<script src=" {{ asset('backend/js/vendors.min.js ') }} "></script>
	<script src=" {{ asset('backend/js/pages/chat-popup.js ') }} "></script>
	<script src=" {{ asset('backend/assets/vendor_components/apexcharts-bundle/dist/apexcharts.min.js ') }} "></script>
    <script src=" {{ asset('backend/assets/icons/feather-icons/feather.min.js ') }} "></script>		

	{{--  step form js  --}}
	<script src=" {{ asset('../assets/vendor_components/jquery-steps-master/build/jquery.steps.js ') }} "></script>
    <script src=" {{ asset('../assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js ') }} "></script>
    <script src=" {{ asset('../assets/vendor_components/sweetalert/sweetalert.min.js ') }} "></script>
	<script src="{{ asset('backend/js/pages/steps.js') }}"></script>
	{{--  step form js  --}}


	<script src=" {{ asset('backend/assets/vendor_components/OwlCarousel2/dist/owl.carousel.js ') }} "></script>
	<script src=" {{ asset('../../../cdn.amcharts.com/lib/4/core.js ') }} "></script>

	<script src=" {{ asset('../../../cdn.amcharts.com/lib/4/maps.js ') }} "></script>
	<script src=" {{ asset('../../../cdn.amcharts.com/lib/4/geodata/worldLow.js ') }} "></script>
	<script src=" {{ asset('../../../cdn.amcharts.com/lib/4/themes/kelly.js ') }} "></script>
	<script src=" {{ asset('../../../cdn.amcharts.com/lib/4/themes/animated.js ') }} "></script>

	<script src=" {{ asset('/backend/assets/vendor_components/OwlCarousel2/dist/owl.carousel.js ') }} "></script>
	<script src="{{ asset('../backend/assets/vendor_components/datatable/datatables.min.js ')}}"></script>

	
	{{-- <!-- Riday Admin App --> --}}
	<script src=" {{ asset('backend/js/template.js ') }} "></script>
	<script src=" {{ asset('backend/js/pages/dashboard.js ') }} "></script>




	





	{{--  // data table script  --}}
	<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script>
		@if(Session::has('message'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
				toastr.success("{{ session('message') }}");
		@endif
	  
		@if(Session::has('error'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
				toastr.error("{{ session('error') }}");
		@endif
	  
		@if(Session::has('info'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
				toastr.info("{{ session('info') }}");
		@endif
	  
		@if(Session::has('warning'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
				toastr.warning("{{ session('warning') }}");
		@endif
	  </script>



@yield('script')








</body>

</html>
	






