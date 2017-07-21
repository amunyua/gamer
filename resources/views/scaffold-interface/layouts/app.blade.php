{{--<!DOCTYPE html>--}}
<html lang="en">
	<head>
		@include("scaffold-interface.layouts.includes.header")
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			@include("scaffold-interface.layouts.includes.head")
			@include("scaffold-interface.layouts.includes.sidebar")

			<div class="content-wrapper">
				@yield('content')
			</div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class = 'AjaxisModal'>
			</div>
		</div>
		<!-- Compiled and minified JavaScript -->
		<script src="{{ URL::asset('/content/js/jquery.js') }}"></script>
		<script src="{{ URL::asset('/content/js/bootstrap.js') }}"></script>
		<script src="{{ URL::asset('content/js/app.min.js') }}"></script>
		<script src="{{ URL::asset('content/js/demo.js') }}"></script>
		<script> var baseURL = "{{ URL::to('/') }}"</script>
		<script src = "{{URL::asset('content/js/ajaxisjs.js') }}"></script>
		<script src = "{{URL::asset('content/js/scafolding-custom.js') }}"></script>
		<script src="{{ URL::asset('content/js/pusher.js') }}"></script>
		@stack('js')
		<script>
		// pusher log to console.
		Pusher.logToConsole = true;
		// here is pusher client side code.
		var pusher = new Pusher("{{env("PUSHER_APP_KEY")}}", {
		encrypted: true
		});
		var channel = pusher.subscribe('test-channel');
		channel.bind('test-event', function(data) {
		// display message coming from server on dashboard Notification Navbar List.
		$('.notification-label').addClass('label-warning');
		$('.notification-menu').append(
			'<li><a href="#"><i class="fa fa-users text-aqua"></i> '+data.message+'</a></li>'
			);
		});
		</script>
	</body>
</html>
