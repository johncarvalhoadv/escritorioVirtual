<!-- begin theme-panel -->
<div class="theme-panel">
	<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
	<div class="theme-panel-content">
		<h5 class="m-t-0">Tema e Cor</h5>
		<ul class="theme-list clearfix">
			<li class="active"><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="{{ asset('admin/css/apple/theme/green.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Verde">&nbsp;</a></li>
			<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="{{ asset('admin/css/apple/theme/red.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Vermelho">&nbsp;</a></li>
			<li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="{{ asset('admin/css/apple/theme/blue.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Azul">&nbsp;</a></li>
			<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="{{ asset('admin/css/apple/theme/purple.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Violeta">&nbsp;</a></li>
			<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="{{ asset('admin/css/apple/theme/orange.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Laranja">&nbsp;</a></li>
			<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="{{ asset('admin/css/apple/theme/black.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Preto">&nbsp;</a></li>
		</ul>
		<div class="divider"></div>
		<div class="row m-t-10">
			<div class="col-md-5 control-label double-line">Estilo Cabeçalho</div>
			<div class="col-md-7">
				<select name="header-styling" class="form-control form-control-sm">
					<option value="1">default</option>
					<option value="2">inverse</option>
				</select>
			</div>
		</div>
		<div class="row m-t-10">
			<div class="col-md-5 control-label">Cabeçalho</div>
			<div class="col-md-7">
				<select name="header-fixed" class="form-control form-control-sm">
					<option value="1">fixed</option>
					<option value="2">default</option>
				</select>
			</div>
		</div>
		<div class="row m-t-10">
			<div class="col-md-5 control-label double-line">Sidebar Styling</div>
			<div class="col-md-7">
				<select name="sidebar-styling" class="form-control form-control-sm">
					<option value="1">default</option>
					<option value="2">grid</option>
				</select>
			</div>
		</div>
		<div class="row m-t-10">
			<div class="col-md-5 control-label">Sidebar</div>
			<div class="col-md-7">
				<select name="sidebar-fixed" class="form-control form-control-sm">
					<option value="1">fixed</option>
					<option value="2">default</option>
				</select>
			</div>
		</div>
		<div class="row m-t-10">
			<div class="col-md-5 control-label double-line">Sidebar Gradient</div>
			<div class="col-md-7">
				<select name="content-gradient" class="form-control form-control-sm">
					<option value="1">disabled</option>
					<option value="2">enabled</option>
				</select>
			</div>
		</div>
		<div class="row m-t-10">
			<div class="col-md-5 control-label double-line">Content Styling</div>
			<div class="col-md-7">
				<select name="content-styling" class="form-control form-control-sm">
					<option value="1">default</option>
					<option value="2">Preto</option>
				</select>
			</div>
		</div>
		<div class="row m-t-10">
			<div class="col-md-12">
				<a href="javascript:;" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage">Redefinir Tema</a>
			</div>
		</div>
	</div>
</div>
<!-- end theme-panel -->

