<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>Percetakan</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('/assets/css/dashlite.css?ver=3.2.2')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('/assets/css/theme.css?ver=3.2.2')}}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="/" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png') }} 2x" alt="logo">
                            <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}" srcset="{{ asset('images/logo-dark2x.png') }} 2x" alt="logo-dark">
                        </a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Dashboards</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/Pemesanan" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                                        <span class="nk-menu-text">Pemesanan</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/Pelanggan" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                                        <span class="nk-menu-text">Pelanggan</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/Karyawan" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-group-fill"></em></span>
                                        <span class="nk-menu-text">Karyawan</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                    </ul><!-- .nk-menu-sub -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                    <a class="nk-news-item" href="#">

                                    </a>
                                </div>
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status">Administrator</div>
                                                    <div class="user-name dropdown-indicator">Adha Mastalul A'la</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Adha Mastalul A'la</span>
                                                        <span class="sub-text">adha@gmail.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-link text-dark d-flex align-items-center px-0">
                                                                <em class="icon ni ni-signout me-1"></em>
                                                                <span>Sign out</span>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                {{-- <p>Starter page for general layout.</p> --}}
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">Form Edit Data</div>
                                                <div class="card-body">
                                                    <form method="post" action="/Pemesanan/{{ $pemesanan->id }}" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">ID Pemesanan</label>
                                                            <input type="text" value="{{$pemesanan->kode_pemesanan}}" name="kode_pemesanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Pelanggan</label>
                                                            <select name="id_pelanggan" id="" class="form-control">
                                                                <option value="">-Pilih Pelanggan-</option>
                                                                @foreach ($pelanggan as $item)
                                                                    <option {{$pemesanan->id_pelanggan == $item->id ? 'selected' :''}} value="{{$item->id}}">{{$item->nm_pelanggan}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Tanggal Pesan</label>
                                                            <input type="date" value="{{$pemesanan->tgl_pesan}}" name="tgl_pesan" class="form-control" id="exampleInputPassword1">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Produk</label>
                                                            <input type="text" value="{{$pemesanan->produk}}" name="produk" class="form-control" id="exampleInputPassword1">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Harga</label>
                                                            <input type="text" value="{{$pemesanan->harga}}" name="harga" class="form-control" id="exampleInputPassword1">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                                                            <input type="text" value="{{$pemesanan->jumlah}}" name="jumlah" class="form-control" id="exampleInputPassword1">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Ukuran</label>
                                                            <select name="ukuran" id="" class="form-control">
                                                                <option value="{{$pemesanan->ukuran}}">{{$pemesanan->ukuran}}</option>
                                                                <option value="Besar">Besar</option>
                                                                <option value="Sedang">Sedang</option>
                                                                <option value="Kecil">Kecil</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Karyawan</label>
                                                            <select name="id_karyawan" id="" class="form-control">
                                                                <option value="">-Pilih Karyawan-</option>
                                                                @foreach ($karyawan as $item)
                                                                    <option {{$pemesanan->id_karyawan == $item->id ? 'selected' :''}} value="{{$item->id}}">{{$item->nm_karyawan}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Tanggal Selesai</label>
                                                            <input type="date" value="{{$pemesanan->tgl_selesai}}" name="tgl_selesai" class="form-control" id="exampleInputPassword1">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2025 DashLite. Template by Adha Mastalul A'la</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('/assets/js/bundle.js?ver=3.2.2')}}"></script>
    <script src="{{asset('/assets/js/scripts.js?ver=3.2.2')}}"></script>
</body>

</html>
