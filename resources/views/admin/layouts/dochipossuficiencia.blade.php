<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
	<link href="{{ public_path().'/assets/css/documentospdf.css' }}" rel="stylesheet">
 

</head> 
<body> 
	<!--<h1 style="border:1px solid black; background: black; width:8cm; color: red; font-weight: 100; font-size: 14px; height: 35px ">PROCURAÇÃO</h1>
	<h2>AD JUDICIA ET EXTRA</h2>-->

<div id="procuracao_topo1">
	 
<div class="imgProc">
	<img src="{{ public_path().'/assets/img/docspdf/hipossuficiencia_topo1.jpg'}}" />

</div>
<div class="logoLateral">
	<img src="{{ public_path().'/assets/img/docspdf/logo_pdf.png'}}" />
</div>
</div>
	@yield('content')
	<div class="bottom_docpdf">
	<img src="{{ public_path().'/assets/img/docspdf/bottom_docpdf.jpg'}}" />
</div>				 
</body>
</html>
