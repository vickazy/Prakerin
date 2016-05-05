<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Belajar</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/half-slider.css') }}">

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
<nav class="navbar navbar-default navbar-fixed-top pull-right" role="navigation" style="margin-top : 56px;">
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
   
     
     <header id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-28px;">
       <div class="carousel-inner">
       <?php
        if($res = $slide) {
          $x = 0;
          foreach ($res as $row) {
	   if($x==0) $aktif = "active";
           else $aktif = '';
        ?>
         <div class="item <?php echo $aktif ?>">
         <div class="fill" style="background-image:url({{ asset($row->image)}})"></div>
	     <div class="carousel-caption">
	       <h3><?php echo $row->keterangan ?></h3>
	      </div>
	   </a>
      </div>
<?php 
      $x++;
    } 
   }
  ?>
     </div>
     <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
   </div>
  </header>
 		<div class="container">
 		<div class="row"><br>
 		@foreach($content as $contents)
            <div class="col-lg-4 col-sm-6 text-center">
              	<a href="{{ $contents->link }}" target="_blank"><img class="img-circle img-responsive img-center" src="{{ asset($contents->image) }}" alt=""></a>
                <h3>{!! $contents->nama !!}</h3>
            </div>
        @endforeach
        </div>
        </div>
        <br><br>
        <div class="container">
        <div class="row">
        <div class="col-md-8">
        @foreach ($berita as $beritas)
		<article>
		<div class="col-md-5">
			<img style="width:300px; height:200px;"src="{{ asset($beritas->image) }}" class="img-responsive">
		</div>
					<h3>{!! $beritas->judul !!}</h3> 
					<span class="glyphicon glyphicon-time"></span> {{ $beritas->created_at }}
			        
			          <hr>
					
			          <p class="lead">{{$beritas->read_more.' ...'}}</p>
					  <p class="text-right">{!!link_to_route('berita.tampil','Read More',$beritas->id)!!}</p>

			          <hr>
		</article>
		@endforeach

		<ul class="pager">
			{!! $berita->render() !!}
		</ul>

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
	    <script>
		    $('.carousel').carousel({
		        interval: 5000 
		    })
    	</script>
	</body>
</html>