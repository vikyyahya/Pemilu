@extends('layouts.master')

@section('title', 'Kelengkapan')

@section('content')
    <div class="box box-default">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="box-header with-border">
            {{-- <h3 class="box-title">Kelengkapan</h3> --}}

            <div class="box-tools pull-right">
                {{-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button> --}}
                {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> --}}
            </div>
        </div>

        <form action="/addKelengkapan" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">NPSN</label>
                            <input readonly value="{{ $user->nik }}" type="text" class="form-control" id="npsn"
                                name="npsn" placeholder="NPSN">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Lembaga</label>
                            <input readonly value="{{ $user->nama_lembaga }}" type="text" class="form-control"
                                id="nama_lembaga" name="nama_lembaga" placeholder="Nama Lembaga">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat – Jalan/Dusun</label>
                            <textarea name="alamat" id="alamat" rows="4" class="form-control"
                                placeholder="Alamat – Jalan/Dusunmat">{{ $data_kel->alamat ?? '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input value="{{ $data_kel->kecamatan_id ?? '' }}" type="text" class="form-control"
                                id="kecamatan" name="kecamatan" placeholder="Kecamatan">
                            {{-- <select class="form-control" name="kecamatan" id="kecamatan" style="width: 100%;" required>
                                <option> -- Pilih -- </option>
                                <option value="1">Kronjo</option>
                                <option value="2">Pasar Kemis</option>
                                <option value="3">Cikupa</option>
                                <option value="4">Tiga Raksa</option>
                            </select> --}}
                        </div>

                        <div class="form-group">
                            <label>Desa / Kelurahan</label>
                            <input value="{{ $data_kel->kelurahan_id ?? '' }}" type="text" class="form-control"
                                id="kelurahan" name="kelurahan" placeholder="Desa / Kelurahan">
                            {{-- <select class="form-control" name="kelurahan" id="kelurahan" style="width: 100%;" required>
                                <option> -- Pilih -- </option>
                                <option value="1">Pasar Kemis</option>
                                <option value="2">Cikupa</option>
                                <option value="3">Tiga Raksa</option>
                            </select> --}}
                        </div>

                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input readonly value="{{ $user->email }}" type="text" class="form-control" id="email"
                                name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Pimpinan Lembaga</label>
                            <input value="{{ $data_kel->nama_pimpinan_lembaga ?? '' }}" type="text" class="form-control"
                                id="nama_pimpinan_lembaga" name="nama_pimpinan_lembaga" placeholder="Nama Pimpinan Lembaga">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nomor HP Pimpinan Lembaga</label>
                            <input value="{{ $data_kel->no_hp_pimpinan_lembaga ?? '' }}" type="text"
                                class="form-control" id="no_pimpinan" name="no_pimpinan"
                                placeholder="Nomor HP Pimpinan Lembaga">
                        </div>

                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahit">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label for="nama_ibu">NPWP Lembaga</label>
                            <input value="{{ $data_kel->npwp ?? '' }}" type="text" class="form-control" id="npwp"
                                name="npwp" placeholder="NPWP Lembaga">
                        </div>
                        <div class="form-group">
                            <label for="nisn">Nama Lembaga di NPWP</label>
                            <input value="{{ $data_kel->nama_lembaga_di_npwp ?? '' }}" type="text" class="form-control"
                                id="nama_lembaga_npwp" name="nama_lembaga_npwp" placeholder="Nama Lembaga di NPWP">
                        </div>

                        <div class="form-group">
                            <label for="foto_ka">Dokumen NPWP</label>
                            <input value="{{asset('file/'.$data_kel->dokumen_npwp)}}" type="file" class="form-control" id="dokumen_npwp" name="dokumen_npwp"
                                placeholder="">
                            <p class="text-danger">File PDF Max 5MB</p>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Tanda Tangan Pimpinan Lembaga</label>
                            <input type="file" class="form-control" id="ttd_pimpinan_lembaga" name="ttd_pimpinan_lembaga"
                                placeholder="Tanda tangan">
                            {{-- <textarea name="ttd_pimpinan_lembaga" id="ttd_pimpinan_lembaga" rows="4" class="form-control"
                                placeholder="Tanda Tangan Pimpinan Lembaga"></textarea> --}}
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">Nomor SK Pendirian LembagaIK</label>
                            <input value="{{ $data_kel->no_sk_pendirian_lembaga ?? '' }}" type="text"
                                class="form-control" id="no_sk_pendirian_lembaga" name="no_sk_pendirian_lembaga"
                                placeholder="Nomor SK Pendirian Lembaga">
                        </div>

                        <div class="form-group">
                            <label for="nik">Tanggal SK Pendirian Lembaga</label>
                            <input value="{{ $data_kel->tgl_sk_pendiran_lembaga ?? '' }}" type="date"
                                class="form-control" id="tgl_sk_pendiran_lembaga" name="tgl_sk_pendiran_lembaga"
                                placeholder="Tanggal SK Pendirian Lembaga">
                        </div>

                        <div class="form-group">
                            <label for="nik">Nomor SK Izin Operasional Lembaga</label>
                            <input value="{{ $data_kel->no_sk_izin_opr_lembaga ?? '' }}" type="text"
                                class="form-control" id="no_sk_izin_opr_lembaga" name="no_sk_izin_opr_lembaga"
                                placeholder="Nomor SK Izin Operasional Lembaga">
                        </div>

                        <div class="form-group">
                            <label for="nik">Tanggal SK Izin Operasional Lembaga</label>
                            <input value="{{ $data_kel->tgl_sk_izin_opr_lembaga ?? '' }}" type="date"
                                class="form-control" id="tgl_sk_izin_opr_lembaga" name="tgl_sk_izin_opr_lembaga"
                                placeholder="Tanggal SK Izin Operasional Lembaga">
                        </div>

                        <div class="form-group">
                            <label for="foto_ka">Scan SK Izin Operasional Lembaga</label>
                            <input type="file" class="form-control" id="scan_sk_izin_opr_lembaga"
                                name="scan_sk_izin_opr_lembaga" placeholder="Scan SK Izin Operasional Lembaga">
                            <p class="text-danger">File PDF Max 2MB</p>
                        </div>

                        <div class="form-group">
                            <label for="nik">Nomor Rekening Bank Lembaga</label>
                            <input value="{{ $data_kel->no_rek_bank_lembaga ?? '' }}" type="text" class="form-control"
                                id="no_rek_bank_lembaga" name="no_rek_bank_lembaga"
                                placeholder="Nomor Rekening Bank Lembaga">
                        </div>

                        <div class="form-group">
                            <label for="nik">Rekening Bank Atas Nama</label>
                            <input value="{{ $data_kel->rek_bank_atas_nama ?? '' }}" type="text" class="form-control"
                                id="rek_bank_atas_nama" name="rek_bank_atas_nama" placeholder="Rekening Bank Atas Nama">
                        </div>

                        <div class="form-group">
                            <label for="nik">Nama Bank</label>
                            <input value="{{ $data_kel->nama_bank ?? '' }}" type="text" class="form-control"
                                id="nama_bank" name="nama_bank" placeholder="Nama Bank">
                        </div>

                        <div class="form-group">
                            <label for="nik">Cabang / Unit</label>
                            <input value="{{ $data_kel->cab_rek_bank ?? '' }}" type="text" class="form-control"
                                id="cab_rek_bank" name="cab_rek_bank" placeholder="Cabang / Unit">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat Lembaga pada Buku Rekening</label>
                            <textarea name="alamat_lembaga_pd_buku_rek" id="alamat_lembaga_pd_buku_rek" rows="4"
                                class="form-control" placeholder="Alamat Lembaga pada Buku Rekening">{{ $data_kel->alamat_lembaga_pd_buku_rek ?? '' }}
                                        </textarea>
                        </div>

                        <div class="form-group">
                            <label for="foto_kk">Scan Rekening Bank</label>
                            <input type="file" class="form-control" id="scan_rek_bank" name="scan_rek_bank"
                                placeholder="Scan Rekening Bank">
                            <p class="text-danger">File PDF Max 2MB</p>
                        </div>



                        <div class="form-group">
                            <label>Akreditasi</label>
                            <select class="form-control" name="akreditasi" id="akreditasi" style="width: 100%;">
                                <option value = {{null}}> -- Pilih -- </option>
                                @if ($data_kel != null)
                                    <option {{ $data_kel->akreditasi == 'S' ? 'selected' : '' }} value="S">Sudah
                                        Akreditasi</option>
                                    <option {{ $data_kel->akreditasi == 'B' ? 'selected' : '' }} value="B">Belum
                                        Akreditasi</option>
                              


                                @endif

                                @if ($data_kel == null)
                                <option  value="S">Sudah
                                    Akreditasi</option>
                                <option value="B">Belum
                                    Akreditasi</option>
                                @endif

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nik">Hasil Akreditasi</label>
                            <input value="{{ $data_kel->hasil_akreditasi ?? '' }}" type="text" class="form-control"
                                id="hasil_akreditasi" name="hasil_akreditasi" placeholder="Hasil Akreditasi">
                        </div>

                        <div class="form-group">
                            <label for="nik">Instuisi Penerbit Akreditasi</label>
                            <input value="{{ $data_kel->institusi_penerbit_akreditasi ?? '' }}" type="text"
                                class="form-control" id="institusi_penerbit_akreditasi"
                                name="institusi_penerbit_akreditasi" placeholder="Hasil Akreditasi">
                        </div>

                        <div class="form-group">
                            <label for="foto_kk">Scan / Fotocopy Sertifikat Akreditasi</label>
                            <input type="file" class="form-control" id="scan_sertifikat_akreditasi"
                                name="scan_sertifikat_akreditasi" placeholder="Scan / Fotocopy Sertifikat Akreditasi">
                            <p class="text-danger">File PDF Max 2MB</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box-footer">
                <div class="text-center">
                    <a href="/kelengkapan" class="btn btn-danger">Batal</a>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    {{-- <a href="{{ route('upka.index') }}" class="btn btn-info">Simpan</a> --}}
                </div>
            </div>
        </form>

    </div>

@endsection
