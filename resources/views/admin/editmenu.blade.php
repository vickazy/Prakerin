@extends("login")

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Menu</div>
				<div class="panel-body">

						@if ($errors->any())
						<div class='flash alert-danger'>
						@foreach ( $errors->all() as $error )
						<p>{{ $error }}</p>
						@endforeach
						</div>
						@endif

						{!! Form::model($menu, ['method' => 'PATCH', 'route' => ['tambahmenu.update', $menu->id],'class' => 'form-horizontal','files' => true]) !!}

						<div class="form-group">
							<label class="col-md-4 control-label">Tentang</label>
							<div class="col-md-6">
								{!! Form::textarea('tentang',null, array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Peta Situs</label>
							<div class="col-md-6">
								{!! Form::textarea('peta_situs',null, array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Aturan Penggunaan</label>
							<div class="col-md-6">
								{!! Form::textarea('aturan_penggunaan',null, array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Kontak Kami</label>
							<div class="col-md-6">
								{!! Form::textarea('kontak_kami',null, array('class' => 'form-control')) !!}
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