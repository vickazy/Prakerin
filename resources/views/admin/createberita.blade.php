@extends("login")

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Berita</div>
				<div class="panel-body">
					{!! Form::open(['class' => 'form-horizontal', 'files' => 'true', 'action' => 'beritacontroller@store']) !!}
						{!! csrf_field() !!}

						@if ($errors->any())
						<div class='flash alert-danger'>
						@foreach ( $errors->all() as $error )
						<p>{{ $error }}</p>
						@endforeach
						</div>
						@endif

						<div class="form-group">
							<label class="col-md-4 control-label">Judul</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="judul">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Content</label>
							<div class="col-md-6">
								<textarea class="form-control" name="content"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" name="id_kategori">Kategori</label>
							<div class="col-md-6">
								{!! Form::select('id_kategori', $kategori, null, ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Image</label>
							<div class="col-md-6">
								<input type="file" class="form-control" name="image">
							</div>
							<div class="col-md-6">
				  			<p class="errors">{!!$errors->first('image')!!}</p>
							@if(Session::has('error'))
							<p class="errors">{!! Session::get('error') !!}</p>
							@endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
								Tambah
								</button>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@stop