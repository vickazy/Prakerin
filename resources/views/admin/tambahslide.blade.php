@extends('login')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1>Data Slide</h1>
            <a href="{{ action('slidecontroller@create') }}">
            <button type="button" class="btn btn-primary" style="margin-bottom : 15px;">Data Baru</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Slide
                        </div>
                            @if(Session::has('message'))
                            <p class="errors">{!! Session::get('message') !!}</p>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-hover" id="dataTables-example">
                                    <thead>
                                   
                                        <tr>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Keterangan</th>
                                            <th class="text-center" colspan="2">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($slides as $slide)
                                    <tr>
                                            
                                            <td class="text-center"><img style="width:150px;" src="{{ asset($slide->image) }}"></td>
                                            <td class="text-center">{!! $slide->keterangan !!}</td>
                                        <td class="text-center">
                                            {!! link_to_route('tambahslide.edit', 'Edit', array($slide->id), array('class' => 'btn btn-warning')) !!}
                                        </td>

                                        <td class="text-center">
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['tambahslide.destroy', $slide->id]]) !!}
                                            <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#konfirmasi_hapus">Hapus</button>
                                            {!! Form::close() !!}
                                        </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  <center>{!! $slides->render() !!}</center>
                </div>
            </div>
            @include('admin.konfirmasi_hapus')
@stop