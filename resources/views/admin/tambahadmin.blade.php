@extends('login')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1>Data Admin</h1>
            <a href="{{ action('crudadmincontroller@create') }}">
            <button type="button" class="btn btn-primary" style="margin-bottom : 15px;">Data Baru</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Admin
                        </div>
                      
                        <div class="panel-body">
                        @if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center" colspan="2">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($data as $datas)
                                  <tr>
                                            <td class="text-center">{!! $datas->name !!}</td>
                                            <td class="text-center">{!! $datas->email !!}</td>

                                        <td class="text-center">
                                            {!! link_to_route('tambahadmin.edit', 'Edit', array($datas->id), array('class' => 'btn btn-warning')) !!}
                                        </td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  <center>{!! $data->render() !!}</center>
                </div>
            </div>
            @include('admin.konfirmasi_hapus')
@stop