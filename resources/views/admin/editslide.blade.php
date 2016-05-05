@extends("login")

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Slide</div>
				<div class="panel-body">

						@if ($errors->any())
						<div class='flash alert-danger'>
						@foreach ( $errors->all() as $error )
						<p>{{ $error }}</p>
						@endforeach
						</div>
						@endif

						{!! Form::model($slide, ['method' => 'PATCH', 'route' => ['tambahslide.update', $slide->id],'class' => 'form-horizontal','files' => true]) !!}

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
							<label class="col-md-4 control-label">Keterangan</label>
							<div class="col-md-6">
								{!! Form::text('keterangan', null,array('class' => 'form-control'),'') !!}
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