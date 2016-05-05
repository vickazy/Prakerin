<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Belajar</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.css') }}">

	<link href='https://fonts.googleapis.com/css?family=Cuprum:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body {
			padding-top: 135px;
			font-family: 'Cuprum', sans-serif;
		}
		.img-center {
			margin: 0 auto;
		}
	</style>
</head>
<body>
<header>
		<div class="navbar navbar-default navbar-fixed-top" style="background: linear-gradient(#0585af, #63cbed)">
		      	@foreach($logo as $logo)
		      	<a href ="{{ url('/') }}"> <img style="width: 250px; margin-right: 20px; float:right;" src="{{ asset($logo->logo) }}"></a>

		      	<img style="width: 350px; margin-left: 20px; float:left;" src="{{ asset('logo_kemdikbud.png') }}">
		      	
				@endforeach
			</div>
	</header>
<nav class="navbar navbar-default navbar-fixed-top pull-right" role="navigation" style="margin-top : 56px">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

<div class="navbar-collapse collapse pull-right">
	<ul class="nav navbar-nav">
		<li><a href="{{ url('/tentang') }}">Tentang</a></li>
		<li><a href="{{ url('/peta') }}">Peta Situs</a></li>
		<li><a href="{{ url('/aturan') }}">Aturan Penggunaan</a></li>
		<li><a href="{{ url('/kontak') }}">Kontak Kami</a></li>
	</ul>
	<form action="{{ url('/hasil') }}" class="navbar-form pull-right" role="search">
        <div class="form-group">
          <input type="text" name="cari" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-info">Search</button>
      </form>
</div>
</nav>
		<div class="container">
		<div class="row">
			<div class="col-md-8">
		@foreach($menu as $data)
		<article>
			<h4>{!! $data->peta_situs !!}</h4>
		</article>
			@endforeach

		
		@include('rumahbelajar.sidebar')

		<footer style="background:black;">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<div class="navbar-text navbar-right">
                    	<p style="color:white;">&copy; Copyright Pustekkom Kemdikbud 2015</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
	    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>
