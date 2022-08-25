<div id="toTop"></div><!-- Back to top button -->
	
<!-- COMMON SCRIPTS -->
<script src="{{asset('frontend/js/common_scripts.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('frontend/js/carousel-home.min.js')}}"></script>
<script src="{{asset('frontend/js/sweetalert.min.js')}}"></script>  

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


@yield('scripts')















