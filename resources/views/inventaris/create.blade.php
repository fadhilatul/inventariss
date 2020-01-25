@extends('layouts.master')
@section('title')
    <title>Create | Dashboard</title>
@endsection
@section('content')
<div class="container">
        <div class="card">
                <div class="row justify-content-center">
                        <div class="col-md-9">
                        <div class="card-header">inventaris</div>
                    <form action="{{ url('inventaris') }}" method="post">
                    @csrf    
                    <div class="form-group">
                            <label>kode barang</label>
                            <input type="text" name="kode_barang" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>tanggal</label>
                            <input type="date" name="tanggal" class="form-control">
                        </div>
                    
                        <div class="form-group">
                            <label>kondisi</label>
                            <input type="text" name="kondisi" class="form-control">
                        </div>
                            <div class="form-group">
                                <label>jumlah</label>
                                <input type="number" name="jumlah" class="form-control">
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
