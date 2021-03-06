@extends('layouts.app')
@section('title', 'Register - Pondok Pesantren Nurul Huda')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header gradient text-white" id="gradient1">
                    <div class="form-row">
                        <div class="form-group col-md-2 mt-4 ml-3">
                            <img src="http://localhost:8000/image/LogoNuha.png" width="120" height="120" class="text-center ml-2">
                        </div>
                        <div class="form-group col-md-9 mt-4">
                            <strong>
                                <h1 class="font">Form Pendaftaran
                                    <br>
                                    PPDB Pondok Pesantren Nurul Huda 2021
                                </h1>
                            </strong>
                                <p class="font">Silahkan Isi data diri anda pada form berikut ini !</p>
                        </div>
                    </div>
                </div>

                <div class="card-body mt-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="inputAddress">Nama Lengkap</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Jenis Kelamin</label>
                                <select name="jk" id="jk" value="old('jk')" class="form-control  @error('jk') is-invalid @enderror" required>
                                    <option >Pilih</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="inputState">Tempat Lahir</label>
                                    <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus>

                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Tanggal Lahir</label>
                                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>

                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputCity">status</label>
                                <select id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required autocomplete="agama" autofocus>
                                    <option>Pilih</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Sekolah">Sekolah</option>
                                    <option value="tidak kuliah">Sedang tidak kuliah</option>
                                    </select>
                                    @error('agama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">NIK</label>
                                <input id="nik" type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>

                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Alamat</label>
                                <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus></textarea>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputCity">Asal Sekolah</label>
                                <input id="asal_sekolah" type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" name="asal_sekolah" value="{{ old('asal_sekolah') }}" required autocomplete="asal_sekolah" autofocus>

                                @error('asal_sekolah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Tahun Lulus</label>
                                <input id="tahun_lulus" type="text" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus') }}" required autocomplete="tahun_lulus" autofocus>

                                @error('tahun_lulus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputCity">Alamat Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">No Hp</label>
                                <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>

                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">diniyah</label>
                            <select id="diniyah" type="text" class="form-control @error('diniyah') is-invalid @enderror" name="diniyah" value="{{ old('diniyah') }}" required autocomplete="diniyah" autofocus>
                                <option>Pilih</option>
                                <option value="pernah">pernah diniyah</option>
                                <option value="belum pernah">belum pernah</option>
                                </select>
                                @error('diniyah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftar') }}
                                </button>
                                <a href="/login" class ="btn btn-link">Already Registered ?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
