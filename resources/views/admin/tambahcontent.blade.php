@extends('login')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1>Data Content</h1>
                    
            @if (count($content) === 3)
            <button type="button" class="btn btn-primary" disabled="disabled" style="margin-bottom : 15px;">Data Baru</button>
            @else
            <a href="{{ action('contentcontroller@create') }}">
            <button type="button" class="btn btn-primary" style="margin-bottom : 15px;">Data Baru</button></a>
            @endif

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Content
                        </div>
                            @if(Session::has('message'))
                            <p class="errors">{!! Session::get('message') !!}</p>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-hover">
                                    <thead>
                                   
                                        <tr>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Link</th>
                                            <th class="text-center" colspan="2">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach($content as $contents)
                                    <tr>
                                            <td class="text-center">{!! $contents->nama !!}</td>
                                            <td class="text-center"><img style="width:150px;" src="{{ asset($contents->image) }}"></td>
                                            <td class="text-center">{!! $contents->link !!}
                                        <td class="text-center">
                                            {!! link_to_route('tambahcontent.edit', 'Edit', array($contents->id), array('class' => 'btn btn-warning')) !!}
                                        </td>

                                        <td class="text-center">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['tambahcontent.destroy', $contents->id]]) !!}
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
                </div>
            </div>
            @include('admin.konfirmasi_hapus')
@stop