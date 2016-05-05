@extends("login")

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Kategori</div>
				<div class="panel-body">

						@if ($errors->any())
						<div class='flash alert-danger'>
						@foreach ( $errors->all() as $error )
						<p>{{ $error }}</p>
						@endforeach
						</div>
						@endif

						{!! Form::model($kategori, ['method' => 'PATCH', 'route' => ['tambahkategori.update', $kategori->id_kategori],'class' => 'form-horizontal']) !!}
						
						<div class="form-group">
							<label class="col-md-4 control-label">Judul Kategori</label>
							<div class="col-md-6">
								{!! Form::text('judul_kategori', null,array('class' => 'form-control'),'') !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
								Edit
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