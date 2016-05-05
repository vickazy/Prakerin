@extends("login")

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Content</div>
				<div class="panel-body">

						@if ($errors->any())
						<div class='flash alert-danger'>
						@foreach ( $errors->all() as $error )
						<p>{{ $error }}</p>
						@endforeach
						</div>
						@endif

						{!! Form::model($admin, ['method' => 'PATCH', 'route' => ['tambahadmin.update', $admin->id],'class' => 'form-horizontal','files' => true]) !!}
						
						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								{!! Form::text('name', null,array('class' => 'form-control'),'') !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								{!! Form::email('email', null,array('class' => 'form-control'),'') !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								{!! Form::password('password', null,array('class' => 'form-control'),'') !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								{!! Form::password('password_confirm', null,array('class' => 'form-control'),'') !!}
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