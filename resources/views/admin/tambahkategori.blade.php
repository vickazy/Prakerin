@extends('login')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1>Data Kategori</h1>
            <a href="{{ action('kategoricontroller@create') }}">
            <button type="button" class="btn btn-primary" style="margin-bottom : 15px;">Data Baru</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Kategori
                        </div>
                        @if(Session::has('message'))
                            <p class="errors">{!! Session::get('message') !!}</p>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Judul Kategori</th>
                                            <th class="text-center" colspan="2">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($kategori as $data)
                                  <tr>
                                        <td class="text-center">{!! $data->judul_kategori !!}</td>
                                        <td class="text-center">
                                            {!! link_to_route('tambahkategori.edit', 'Edit', array($data->id_kategori), array('class' => 'btn btn-warning')) !!}
                                        </td>
                                        <td class="text-center">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['tambahkategori.destroy', $data->id_kategori]]) !!}
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
            @include('admin.konfirmasi_hapus')
@stop