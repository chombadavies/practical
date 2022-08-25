<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.frontend.head_script')

</head>

<body>
	
	<div id="page">
		<header class="version_1" id="header-ajax">
			@include('layouts.frontend.header')
		</header>
   
		




    @yield('content')

		
	@include('layouts.frontend.footer')
 

	</div>
	<!-- page -->
	
@include('layouts.frontend.foot_script')


</body>
</html>