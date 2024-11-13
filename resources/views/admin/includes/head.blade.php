<meta charset="utf-8" />
<title>Escritório Virtual | @yield('template_title')</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
<link href="{{ asset('admin/css/bundle.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/css/apple/style.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/css/apple/style-responsive.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/css/apple/theme/green.css') }}" rel="stylesheet" id="theme" />

<!-- ================== END BASE CSS STYLE ================== -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('admin/plugins/pace/pace.min.js') }}"></script>
<!-- ================== END BASE JS ================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@stack('css')
