@extends('login')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1>Data Berita</h1>
            <a href="{{ action('beritacontroller@create') }}">
            <button type="button" class="btn btn-primary" style="margin-bottom : 15px;">Data Baru</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Berita
                        </div>
                            @if(Session::has('message'))
                            <p class="errors">{!! Session::get('message') !!}</p>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-hover" id="dataTables-example">
                                    <thead>
                                   
                                        <tr>
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">Content</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Kategori Id</th>
                                            <th class="text-center" colspan="2">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($berita as $beritas)
                                    <tr>
                                            <td class="col-md-3">{!! $beritas->judul !!}</td>
                                            <td class="col-md-4">{!! $beritas->read_more !!}</td>
                                            <td class="text-center"><img style="width:150px;" src="{{ asset($beritas->image) }}"></td>
                                            <td class="text-center">{!! $beritas->id_kategori !!}</td>
                                        
                                        <td class="text-center">
                                            {!! link_to_route('tambahberita.edit', 'Edit', array($beritas->id), array('class' => 'btn btn-warning')) !!}
                                        </td>
                                    
                                        <td class="text-center">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['tambahberita.destroy', $beritas->id]]) !!}
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
                  <center>{!! $berita->render() !!}</center>
                </div>
            </div>
            @include('admin.konfirmasi_hapus')
@stop