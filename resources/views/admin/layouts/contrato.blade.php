<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
	<link href="{{  public_path().'/assets/css/new_documentospdf.css' }}" rel="stylesheet">
	 

</head> 
<body> 
	<!--<h1 style="border:1px solid black; background: black; width:8cm; color: red; font-weight: 100; font-size: 14px; height: 35px ">PROCURAÇÃO</h1>
	<h2>AD JUDICIA ET EXTRA</h2>-->

<div id="procuracao_topo1">
	 
<div class="imgLogoCentro">
	
	<img src="{{ public_path().'/assets/img/docspdf/new/LOGOVC.jpg'}}" />
</div>
 
</div>
	@yield('content')
<div class="bottom_contrato">
	<img src="{{ public_path().'/assets/img/docspdf/new/rodape.png'}}" />
</div>	
	
</body>
</html>