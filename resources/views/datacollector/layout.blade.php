<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title>@yield('title')</title>
		@include('includes/css') {{-- Include css file --}} 
	</head>
<body>
	<div class="main">
		@include('header')  {{-- Include header file --}} 
			<div class="main_content">
			    @include('sidebar') {{-- Include sidebar file --}}  
			    @yield("middle_content")
			</div>
		@include('footer') {{-- Include footer file --}}  
	</div>
</body>
</html>