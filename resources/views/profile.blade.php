@extends('layout.body')
@section('title', 'User Profile')
@section('page-title', 'Profile Page')
@section('content')

    <section id="profile" class="container mt-2">
        <div class="row align-content-center justify-content-center">
            <div class="col">
                <div class="profile card mb-4">
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-sm-5 col-6">
                                <p class="mb-0 fw-bold"><i class="fa-solid fa-user fa-xl fa-fw"></i> Username</p>
                            </div>
                            <div class="col-sm-7 col-6">
                                <p class="text mb-0">{{auth()->user()->username}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5 col-6 gap-3">
                                <p class="mb-0 fw-bold"><i class="fa-solid fa-envelope fa-xl fa-fw"></i> Email</p>
                            </div>
                            <div class="col-sm-7 col-6">
                                <p class="text mb-0">{{auth()->user()->email}}</p>
                            </div>
                        </div>
                        <hr>

                        @if (auth()->user()->hasIncompleteProfile())
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0 fw-bold"><i class="fas fa-id-card fa-lg"></i>Nama Lengkap</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">Johnatan Smith</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0 fw-bold">Nomor Telp</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">(097) 234-5678</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0 fw-bold">NIK</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">3578231290</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0 fw-bold">Alamat</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0 fw-bold">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">Laki / Perempuan</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0 fw-bold">Tanggal Lahir</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">00-00-0000</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0 fw-bold">Jabatan</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">Jabatan Ku</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0 fw-bold">Divisi</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">Divisi Ku</p>
                                </div>
                            </div>
                            <div class="d-grid gap-3">
                                <a href="{{route('employee.create', auth()->user()->member->id)}}" class="btn-edit btn">Add Profile</a>
                            </div>
                        @else
                        <div class="row">
                            <div class="col-sm-5 col-6">
                                <p class="mb-0 fw-bold"><i class="fas fa-id-card fa-xl fa-fw"></i> Nama Lengkap</p>
                            </div>
                            <div class="col-sm-7 col-6">
                                <p class="text mb-0">{{auth()->user()->member->nama}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5 col-6">
                                <p class="mb-0 fw-bold"><i class="fa-solid fa-phone-volume fa-xl fa-fw"></i> Nomor Telp</p>
                            </div>
                            <div class="col-sm-7 col-6">
                                <p class="text mb-0">{{auth()->user()->member->no_hp}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5 col-6">
                                <p class="mb-0 fw-bold"><i class="fa-solid fa-passport fa-xl fa-fw"></i> NIK</span></p>
                            </div>
                            <div class="col-sm-7 col-6">
                                <p class="text mb-0">{{auth()->user()->member->nik}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5 col-6">
                                <p class="mb-0 fw-bold"><i class="fa-solid fa-map-location-dot fa-xl fa-fw"></i> Alamat</p>
                            </div>
                            <div class="col-sm-7 col-6">
                                <p class="text mb-0">{{auth()->user()->member->alamat}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5 col-6">
                                <p class="mb-0 fw-bold"><i class="fa-solid fa-user fa-xl fa-fw"></i> Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-7 col-6">
                                <p class="text mb-0">{{auth()->user()->member->jk}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5 col-6">
                                <p class="mb-0 fw-bold"><i class="fa-solid fa-location fa-xl fa-fw"></i> Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-7 col-6">
                                <p class="text mb-0">{{auth()->user()->member->tgl_lahir}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5 col-6">
                                <p class="mb-0 fw-bold"><i class="fa-solid fa-bag-shopping fa-xl fa-fw"></i> Jabatan</p>
                            </div>
                            <div class="col-sm-7 col-6">
                                <p class="text mb-0">{{auth()->user()->member->jabatan}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5 col-6">
                                <p class="mb-0 fw-bold"><i class="fa-solid fa-user-gear fa-xl fa-fw"></i> Divisi</p>
                            </div>
                            <div class="col-sm-7 col-6">
                                <p class="text mb-0">{{auth()->user()->member->divisi->nama_divisi}}</p>
                            </div>
                        </div>
                        <div class="d-grid gap-3">
                            <a href="{{route('employee.edit', auth()->user()->member->id)}}" class="btn-edit btn">Edit Profile</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Kumpulan Card Riwayat Transaksi User -->
            <!-- <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 ">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col mr-2">
                                        {{-- <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                            Pesanan Anda</div> --}}
                                        <div class="h5 mt-5 fw-bold text-gray-800">20 Tugas Anda<span
                                                class="qty posisition-absolute badge bg-success position-absolute top-0 translate-middle badge">Tugas</span>
                                        </div>
                                    </div>
                                    <div class="col-auto mt-4">
                                        <i class="fa-solid fa-bag-shopping fa-2xl"></i>
                                    </div>
                                </div>
                                <a href="#" class="btn-sm btn-selengkapnya btn">Selengkapnya</a>
                            </div>
                        </div>
                    </div> -->

                    <!-- Earnings (Monthly) Card Example -->
                    <!-- <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col mr-2">
                                        {{-- <div class="text-xs fw-bold text-success text-uppercase mb-1">
                                            Riwayat Transaksi</div> --}}
                                        <div class="h5 mt-5 fw-bold text-gray-800">10 Progress<span
                                                class="qty posisition-absolute badge bg-secondary position-absolute top-0 translate-middle badge">Progress
                                                Tugas</span></div>
                                    </div>
                                    <div class="col-auto mt-4">
                                        <i class="fa-solid fa-clock-rotate-left fa-2xl"></i>
                                    </div>
                                </div>
                                <a href="#" class="btn-sm btn-selengkapnya btn">Selengkapnya</a>

                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Earnings (Monthly) Card Example -->
                <!-- <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col mt-3">
                                        {{-- <div class="text-xs fw-bold text-success text-uppercase mb-1">
                                            Riwayat Transaksi</div> --}}
                                        <div class="h5 mt-4 fw-bold text-gray-800">3 Hari Cuti<span
                                                class="qty posisition-absolute badge bg-warning position-absolute top-0 translate-middle badge">Jadwal
                                                Cuti</span></div>
                                    </div>
                                    <div class="col-auto mt-4">
                                        <i class="fa-solid fa-user-gear fa-2xl"></i>
                                    </div>
                                </div>
                                <a href="#" class="btn-sm btn-selengkapnya btn">Selengkapnya</a>

                            </div>
                        </div>
                    </div> -->

                    <!-- Pending Requests Card Example -->
                    <!-- <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col mt-3">
                                        {{-- <div class="text-xs fw-bold text-success text-uppercase mb-1">
                                            Riwayat Transaksi</div> --}}
                                        <div class="h5 mt-4 fw-bold text-gray-800">2 Meeting<span
                                                class="qty posisition-absolute badge bg-info position-absolute top-0 translate-middle badge">Meeting</span>
                                        </div>
                                    </div>
                                    <div class="col-auto mt-3">
                                        <i class="fa-solid fa-cart-shopping fa-2xl"></i>
                                    </div>
                                </div>
                                <a href="#" class="btn-sm btn-selengkapnya btn">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

@endsection
