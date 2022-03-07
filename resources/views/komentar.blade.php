@extends('layouts.navbar')

@section('navbar-alka')
<br>
<center>
    <h1 style="font-family: 'Courier New', Courier, monospace">{{ $tittle }}</h1>
</center>
<br>
<br>
<div class="container bg-primary">
    <div class="container bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">N</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <div class="col-sm-3 col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-sm-3 col-md-6 mt-5">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">U</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Umur">
                    </div>
                </div>
                <div class="col-sm-3 col-md-6 mt-5">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">K</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Kota">
                    </div>
                </div>
                <div class="col-sm-9 col-md-6 mt-5">
                    <div class="form-group">
                        <label for="comment">KOMENTAR:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<button type="button" class="btn btn-primary">SUBMIT</button>
@endsection
