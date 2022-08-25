<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Practical Question</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.backend.header')

@include('layouts.backend.sidebar')

 @yield('content')

 @include('layouts.backend.reject_modal')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 @include('layouts.backend.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('backend/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('backend/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>


		{{-- batatables --}}
		<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>		
    <script src="{{asset('backend/vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('backend/vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />
		<script>
		  $(function () {
			$("#sections").DataTable({
			  "responsive": true,
			  "autoWidth": false,
			});
			$("#categories").DataTable();
		  });
		</script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('backend/dist/js/pages/dashboard2.js')}}"></script>

<script src="../../dist/js/demo.js"></script>
<!-- Summernote -->
<script src="{{('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<script type="text/javascript">
   
  $(document).on('click','.reject-modal',function(){

   

   var head=$(this).attr('data-title');
          
       var url=$(this).attr("data-url");
        $("#load-category-details").html("");
        $("#my-header").html(" ");
        $("#my-header").html(head);
        $("#category-modal").modal("show");
    $("#load-category-details").load(url,function(data){
    $("#category-modal").modal("show");
     
  });
});



</script>


<style type="text/css">
     
	th, td { white-space: nowrap; }

	.modal .modal-dialog {
max-width: 750px;
}
.form-control{
box-shadow: inset 0 0 7.75px #3ac9d6 !important;
border-radius:1.011%
}
.col-xl-1-5{
background-color: #3ac9d6 !important;
}

 </style>
@stack('scripts')
</body>
</html>
