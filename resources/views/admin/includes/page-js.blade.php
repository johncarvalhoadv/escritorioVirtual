<script src="{{ asset('admin/js/bundle.js') }}"></script>
<script src="{{ asset('admin/js/theme/default.js') }}"></script>
<script src="{{ asset('admin/js/apps.min.js') }}"></script>

<script>
	$(document).ready(function() {
		App.init();
	});


</script>





@stack('scripts')
