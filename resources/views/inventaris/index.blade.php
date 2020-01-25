@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">inventaris</div>
                    <div class="card-body">
                            <a href="{{ url('inventaris/create') }}" class="btn btn-primary">tambah</a>
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>kode barang</th>
                                        <th>nama</th>
                                        <th>tanggal</th>
                                        <th>kondisi</th>
                                        <th>jumlah</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventaris as $item)
                                    <tr>
                                        <th>{{ $row++ }}</th>
                                        <th>{{$item->kode_barang}}</th>
                                        <th>{{ $item->name }}</th>
                                        <th>{{ $item->tanggal }}</th>
                                        <th>{{ $item->kondisi_barang }}</th>
                                        <th>{{ $item->jumlah }}</th>
                                    <td>
                                        <form action="{{url('inventaris',$item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ url('inventaris/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">edit</a><br>
                                            <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                        </form>
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
@endsection