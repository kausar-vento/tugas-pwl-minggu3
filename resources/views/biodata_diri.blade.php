@extends('layouts.navbar')

@section('navbar-alka')
<div id="loading"></div>
<div class="box">
    <div class="gambar" id="image">
        <img id="sliderImage1" src="images/foto1.png" style="width: 40%" alt="">
        <img id="sliderImage2" src="images/foto2.png" style="width: 40%" alt="">
    </div>
    <div>
        <b>
            <p class="jdl">{{ $tittle }}</p>
        </b>
    </div>
    <div class="form">
        <form action="" method="GET">
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" class="text" value="{{ $text1 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td>Umur</td>
                <td><input type="text" class="text2" value="{{ $text2 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" class="text3" value="{{ $text3 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" class="text4" value="{{ $text4 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td>Cita-Cita</td>
                <td><input type="text" class="text5" value="{{ $text5 }}" disabled></td> <br>
            </tr>
            <br>
            <br>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" class="text6" cols="30" rows="5" disabled>{{ $text6 }}</textarea></td> <br>
            </tr>
            <br>
            <tr>
                <td>Lokasi Kota Tinggal Sekarang</td>
                <td><input type="text" class="text7" value="{{ $text7 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td>Nomor Telp / HP</td>
                <td><input type="text" class="text8" value="{{ $text8 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td><input type="text" class="text9" value="{{ $text9 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td>Agama</td>
                <td><input type="text" class="text10" value="{{ $text10 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td><a href="/project_alka"><input type="button" class="sbt" value="Project"></td></a>
                <td><a href="/pendidikan_alka"><input type="button" class="sbt2" value="Pendidikan"></td></a>
            </tr>
        </form>
    </div>
</div>
<script src="js_biodata/jquery-3.6.0.js"></script>
<script src="js_biodata/animasi.js"></script>
<script>
    var loading = document.getElementById('loading');

    window.addEventListener('load', function () {
        loading.style.display = "none";
    });

</script>
@endsection
