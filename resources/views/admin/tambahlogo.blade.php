@extends('login')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1>Data Logo</h1>
            @if (count($logo) === 1)
            <button type="button" class="btn btn-primary" disabled="disabled" style="margin-bottom : 15px;">Data Baru</button>
            @else
            <a href="{{ action('logocontroller@create') }}">
            <button type="button" class="btn btn-primary" style="margin-bottom : 15px;">Data Baru</button></a>
            @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Logo
                        </div>
                            @if(Session::has('pesan'))
                            <p class="errors">{!! Session::get('pesan') !!}</p>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-hover">
                                    <thead>
                                   
                                        <tr>
                                            <th class="text-center">Logo</th>
                                            <th class="text-center" colspan="2">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($logo as $logos)
                                    <tr>
                                            <td class="text-center"><img style="width:150px;" src="{{ asset($logos->logo) }}"></td>
                                        <td class="text-center">
                                            {!! Link_to_route('tambahlogo.edit', 'Edit', array($logos->id), array('class' => 'btn btn-warning')) !!}
                                        </td>
                                        <td class="text-center">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['tambahlogo.destroy', $logos->id]]) !!}
                                        <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#konfirmasi_hapus">Hapus</button>
                                        {!! Form::close() !!}
                                        </td>
                                        </tr>
                                    @empty
                                    </tbody>
                                </table>
                                    <center>Data Tidak Di Temukan</center>
                                    @endforelse
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.konfirmasi_hapus')
@stop