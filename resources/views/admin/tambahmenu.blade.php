@extends('login')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1>Data Menu</h1>
            <a href="{{ action('menucontroller@create') }}">
            <button type="button" class="btn btn-primary" style="margin-bottom : 15px;">Data Baru</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Menu
                        </div>
                            @if(Session::has('message'))
                            <p class="errors">{!! Session::get('message') !!}</p>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-hover" id="dataTables-example">
                                    <thead>
                                   
                                        <tr>
                                            <th class="text-center">Tentang</th>
                                            <th class="text-center">Peta Situs</th>
                                            <th class="text-center">Aturan Penggunaan</th>
                                            <th class="text-center">Kontak kami</th>
                                            <th class="text-center" colspan="2">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($menu as $data)
                                    <tr>
                                            <td class="col-md-3">{!! $data->tentang !!}</td>
                                            <td class="col-md-4">{!! $data->peta_situs !!}</td>
                                            <td class="text-center">{!! $data->aturan_penggunaan !!}</td>
                                            <td class="text-center">{!! $data->kontak_kami !!}</td>
                                        
                                        <td class="text-center">
                                            {!! link_to_route('tambahmenu.edit', 'Edit', array($data->id), array('class' => 'btn btn-warning')) !!}
                                        </td>
                                    
                                        <td class="text-center">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['tambahmenu.destroy', $data->id]]) !!}
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