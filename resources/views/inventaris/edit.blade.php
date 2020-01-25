@extends('layouts.master')
@section('title')
    <title>Create | Dashboard</title>
@endsection
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        <form action="{{ url('inventaris',$inventaris->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>kode barang</label>
                                <input type="text" name="kode_barang" value="{{ $inventaris->kode_barang }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>name</label>
                                <input type="text" name="name" value="{{ $inventaris->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>tanggal</label>
                                <input type="date" name="tanggal" value="{{ $inventaris->tanggal }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>kondisi</label>
                                <input type="text" name="kondisi" value="{{ $inventaris->kondisi }}" class="form-control">
                            </div>
                            <div class="form-group">
                                    <label>jumlah</label>
                                    <input type="number" name="jumlah" value="{{ $inventaris->jumlah }}" class="form-control">
                                </div>
                            <button type="submit" class="btn btn-primary">submit</button>
                            <a href="{{ url('/inventaris') }}" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection