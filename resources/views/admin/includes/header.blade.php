@php
	$headerClass = (!empty($headerInverse)) ? 'navbar-inverse ' : 'navbar-default ';
	$headerMenu = (!empty($headerMenu)) ? $headerMenu : '';
	$hiddenSearch = (!empty($headerLanguageBar)) ? 'hidden-xs' : '';
	$headerMegaMenu = (!empty($headerMegaMenu)) ? $headerMegaMenu : '';
@endphp
<!-- begin #header -->
<div id="header" class="header {{ $headerClass }}">
	<!-- begin navbar-header -->
	<div class="navbar-header">
		<a href="" class="navbar-brand"> <img src="{{ asset('admin/img/logo/logo-navbar.png') }}" class="" alt="CARVALHO & SOUZA - ADVOGADOS ASSOCIADOS" width="14%" />  <span class="m-b-10"><b>CARVALHO & SOUZA</b> - ADVOGADOS ASSOCIADOS</span></a>

		@if (!$sidebarHide)
		<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		@endif
		@if ($headerMegaMenu)
			<button type="button" class="navbar-toggle p-0 m-r-5" data-toggle="collapse" data-target="#top-navbar">
				<span class="fa-stack fa-lg text-inverse m-t-2">
					<i class="far fa-square fa-stack-2x"></i>
					<i class="fa fa-cog fa-stack-1x"></i>
				</span>
			</button>
		@endIf
	</div>
	<!-- end navbar-header -->

	@includeWhen($headerMegaMenu, 'admin.includes.header-mega-menu')

	<!-- begin header-nav -->
	<ul class="navbar-nav navbar-right">

		<li class="dropdown">
			<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
				<i class="fa fa-bell"></i>
				<span class="label">5</span>
			</a>
			<ul class="dropdown-menu media-list dropdown-menu-right">
				<li class="dropdown-header">Em Breve (5)</li>
				<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<i class="fa fa-bug media-object bg-silver-darker"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Em Breve <i class="fa fa-exclamation-circle text-danger"></i></h6>
							<div class="text-muted f-s-11">3 minutos agosto 2022</div>
						</div>
					</a>
				</li>
				<!--<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<img src="/assets/img/user/user-1.jpg" class="media-object" alt="" />
							<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">John Smith</h6>
							<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
							<div class="text-muted f-s-11">25 minutes ago</div>
						</div>
					</a>
				</li>
				<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<img src="/assets/img/user/user-2.jpg" class="media-object" alt="" />
							<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Olivia</h6>
							<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
							<div class="text-muted f-s-11">35 minutes ago</div>
						</div>
					</a>
				</li>
				<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<i class="fa fa-plus media-object bg-silver-darker"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading"> New User Registered</h6>
							<div class="text-muted f-s-11">1 hour ago</div>
						</div>
					</a>
				</li>
				<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<i class="fa fa-envelope media-object bg-silver-darker"></i>
							<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading"> New Email From John</h6>
							<div class="text-muted f-s-11">2 hour ago</div>
						</div>
					</a>
				</li>-->
				<li class="dropdown-footer text-center">
					<a href="javascript:;">Ver todos</a>
				</li>
			</ul>
		</li>

		<li class="dropdown navbar-user">
			<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
				<img src="{{ asset('admin/img/user/john.png') }}" alt="" />

				<span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
				<b class="fas fa-share-square fa-2x"></b>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="javascript:;" class="dropdown-item">Editar Perfil</a>
				<a href="javascript:;" class="dropdown-item">Calendário</a>
				<a href="javascript:;" class="dropdown-item">Configurações</a>
				<div class="dropdown-divider"></div>

				<form method="POST" action="{{ route('logout') }}">
						@csrf



						<a href="{{ route('logout') }}"  class="dropdown-item"
								onclick="event.preventDefault();
											this.closest('form').submit();">
							{{ __('Sair do Sistema') }}</a>




					</form>

			</div>
		</li>
	</ul>
	<!-- end header navigation right -->
</div>
<!-- end #header -->
