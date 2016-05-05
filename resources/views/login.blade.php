<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Belajar</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Cuprum:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
  <style type="text/css">
    body{
      font-family: 'Cuprum', sans-serif;
      font-size: 17px;
      background : url( asset(bg_portal.jpg) ) fixed no-repeat top center;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-inverse" role="navigation" style="border : 0px; border-radius:0px;background: linear-gradient(#0585af, #63cbed)">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="color:white;" class="navbar-brand" href="{{ url('admin') }}">Rumah Belajar</a>
    </div>
    @if(Auth::guest())

    @else
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('tambahadmin') }}">Admin</a></li>
            <li><a href="{{ url('tambahcontent') }}">Content</a></li>
            <li><a href="{{ url('tambahberita') }}">Berita</a></li>
            <li><a href="{{ url('tambahlogo') }}">Logo</a></li>
            <li><a href="{{ url('tambahslide') }}">Slide</a></li>
            <li><a href="{{ url('tambahkategori') }}">Kategori</a></li>
            <li><a href="{{ url('tambahmenu') }}">Menu</a></li>
          </ul>
        </li>
      </ul>
      @endif

      @if(Auth::guest())
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a style="color:white; padding-right:50px;" href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
                                {!! Form::open(array('action' => 'logincontroller@store')) !!}
                                {!! csrf_field() !!}
                 <img src="logo.png" class="img-responsive" /><br />
                    <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Email" required>
                    </div>
                    </div>
                    <div class="form-group">
					<div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    
                    </div>
					<div class="form-group">
                    <button type="submit" name="login" class="btn btn-primary pull-right"><i class="fa fa-sign-in"></i> Log in</button><br><br>
                    </div>
								 {!! Form::close() !!}
							</div>
					 </div>
				</li>
			</ul>
        </li>
        @else
        <div class="btn-group navbar-form pull-right">
        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#konfirmasi_logout" data-toggle="modal">Logout</a></li>
            </ul>
        </div>
        @endif
      </ul>
    </div>
</nav>
@if(Session::has('login_error'))
<div class='alert alert-danger'>
<a class='close' data-dismiss='alert'>×</a>
{{ Session::get('login_error') }}
</div>
@endif

<div class="container-fluid">
    @yield('content')
</div>
@include('konfirmasi_logout')
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript">
  $('#konfirmasi_hapus').on('show.bs.modal', function (hapus) {
    var form = $(hapus. relatedTarget).closest('form');
    $(this).find('.modal-footer #konfirmasi').data('form', form);
  });
  $('#konfirmasi_hapus').find('.modal-footer #konfirmasi').on('click', function(){
    $(this).data('form').submit();
  });
</script>
</body>
</html>
