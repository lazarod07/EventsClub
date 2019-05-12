<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	<title>Events Club a Entertainment Category Website Template | Events :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<style >
		.header a1{
			color: #610B4B;
		}
		.grid_1_of_3 h4{
			color: #ffffff;
			font-weight: bold;
		}
		.content_top h3{
			color: #ffffff;
			font-size: 100px;
			
		}
	
		
		.slider {
			width: 500px;
			width: 500px;
			overflow: hidden;
		}

		.slider ul {
			display: flex;
			padding: 0;
			width: 400%;
	
			animation: cambio 20s infinite alternate linear;
		}

		.slider li {
			width: 100%;
			list-style: none;
		}

		.slider img {
			width: 500px;
			height: 500px
		}

		@keyframes cambio {
			0% {margin-left: 0;}
			20% {margin-left: 0;}

			25% {margin-left: -100%;}
			45% {margin-left: -100%;}

			50% {margin-left: -200%;}
			70% {margin-left: -200%;}

			75% {margin-left: -300%;}
			100% {margin-left: -300%;}
		}
		.container li{
			color: #D2D2D2;
			font-weight: bold;
			font-size: 25px;
			margin-top: 30px;
		}
		.container h3{
			font-weight: bold;
			font-size: 30px;
			color: #929292;
		}
		.container h4{
			font-weight: bold;
			font-size: 30px;
			color: #E60085;
		}
		.container h1{
			margin-left: 100px;
			margin-top: 5px;
			color: #929292;
	</style>
</head>

<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
				<div class="logo">
					<a href="welcome">
						<img src="../images/logo.png" alt="" />
					</a>
				</div>
				<div class="menu">
					<ul>
						<li>
							<a href="../welcome">INICIO</a>
						</li>
						<li class="active">
							<a href="../categorias">CATEGORIAS</a>
						</li>
						<li>
							<a href="../galeria">GALLERIA</a>
						</li>
						<li>
							<a href="../blog">BLOG</a>
						</li>
						<li>
							<a href="../contacto">CONTACTO</a>
						</li>
						<li>
							<a href="../acerca"> EQUIPO</a>
						</li>
						<li>
							@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('../login') }}">{{ __('LOGIN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('../register') }}">{{ __('REGISTRO') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a1 class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a1>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="container" >
		<div class="row">
			<div class="col-lg-6">
				<div class="slider" >
					<ul>
						<li>
							<img src="../images/matchball.jpg" alt="">
						</li>
						<li>
							 <img src="../images/matchball.jpg" alt="">
						</li>
						<li>
							<img src="../images/matchball.jpg" alt="">
						</li>
						<li>
							<img src="../images/matchball.jpg" alt="">
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<ul class="feeds">
					<h4 align="center">{{ $evento->nombre }}</h3>
					<li>
						<a>UBICACION:</a>
						<h1>{{$evento->ubicacion}}.</h1>
					</li>
					<li>
						<a>DESCRIPCION:</a>
						<h1>{{$evento->descripcion}}.</h1>
					</li>
					<li>
						<a>FECHA DE INICIO:</a>
						<h1>{{$evento->fecha_inicio}}.</h1>
						<h1>{{$evento->hora_inicio}}.</h1>
					</li>
					<li>
						<a>FECHA DE INICIO:</a>
						<h1>{{$evento->fecha_fin}}.</h1>
						<h1>{{$evento->hora_fin}}.</h1>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrap">
			<div class="half-footer" style="margin-left:0">
				<ul class="feeds">
					<h3>Our Latest feeds</h3>
					<li>
						<a href="index.html">Lorem ipsum dolor consectetur adiping</a>
					</li>
					<li>
						<a href="blog.html">Nunc sagittis mollis eros, at venenatis</a>
					</li>
					<li>
						<a href="blog.html">Morbi nec dolor ipsum vel congugue</a>
					</li>
					<li>
						<a href="blog.html">Nullam a odio ipsum, at sodales lorem.</a>
					</li>
					<li>
						<a href="contact.html">Nullam imperdiet vulputate congugue</a>
					</li>
				</ul>
				<div class="footer-pic">
					<img src="../images/f-icon.png" alt="">
				</div>
				<div class="clear"></div>
			</div>
			<div class="half-footer" style="border:none">
				<ul class="adress">
					<h3>Catch on</h3>
					<li>
						<a href="index.html">Events Club</a>
					</li>
					<li>
						<a href="blog.html">West Coast, CA</a>
					</li>
					<li>
						<a href="blog.html">Facebook - I Music</a>
					</li>
					<li>
						<a href="blog.html">Login</a>
					</li>
					<li>
						<a href="mailto:example@mail.com">yourname(at)companyname.com</a>
					</li>
				</ul>
				<div class="footer-pic">
					<img src="../images/foot-icon.png" alt="">
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="copy">
		<p>© 2013 Events Club.All Rights Reserved | Design by
			<a href="http://w3layouts.com">W3Layouts</a>
		</p>
	</div>
</body>

</html>