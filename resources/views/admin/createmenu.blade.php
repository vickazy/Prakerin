@extends("login")

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Menu</div>
				<div class="panel-body">
					{!! Form::open(['class' => 'form-horizontal', 'files' => 'true', 'action' => 'menucontroller@store']) !!}
						{!! csrf_field() !!}

						@if ($errors->any())
						<div class='flash alert-danger'>
						@foreach ( $errors->all() as $error )
						<p>{{ $error }}</p>
						@endforeach
						</div>
						@endif

						<div class="form-group">
							<label class="col-md-4 control-label">Tentang</label>
							<div class="col-md-6">
								<textarea class="form-control" name="tentang"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Peta Situs</label>
							<div class="col-md-6">
								<textarea class="form-control" name="peta_situs"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Aturan Penggunaan</label>
							<div class="col-md-6">
								<textarea class="form-control" name="aturan_penggunaan"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Kontak Kami</label>
							<div class="col-md-6">
								<textarea class="form-control" name="kontak_kami"></textarea>
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