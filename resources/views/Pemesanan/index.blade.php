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
    <title>Pemesanan</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('/assets/css/dashlite.css?ver=3.2.2')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('/assets/css/theme.css?ver=3.2.2')}}">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

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
                            <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
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
                                <div class="card-header">
                                    <div class="d-flex justify-content-start mb-3"><a href="/Pemesanan/tambah" class="btn btn-primary btn-sm"><i class="fa-solid fa-user-plus"></i> Tambah Data</a></div>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">ID Pemesanan</th>
                                                <th scope="col">Tanggal Pesan</th>
                                                <th scope="col">Produk</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ( $pemesanan as $data)
                                                <tr>
                                                    <th scope="row">{{$nomor++}}</th>
                                                    <td>{{$data->kode_pemesanan}}</td>
                                                    <td>{{$data->tgl_pesan}}</td>
                                                    <td>{{$data->produk}}</td>
                                                    <td>{{$data->harga}}</td>
                                                    <td>
                                                        <!-- Tombol -->
                                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{$data->id}}">
                                                            <i class="fa fa-info"></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="detailModal{{$data->id}}" tabindex="-1" aria-labelledby="detailModalLabel{{$data->id}}" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="detailModalLabel{{$data->id}}">Detail Pemesanan</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <table class="table">

                                                                            <tbody>
                                                                                <tr>
                                                                                <td>ID Pemesanan</td>
                                                                                <td>: {{$data->kode_pemesanan}}</td>
                                                                                </tr>

                                                                                <tr>
                                                                                <td>ID Pelanggan</td>
                                                                                <td>: {{ $data->pelanggan->id_pelanggan}}</td>
                                                                                </tr>

                                                                                <tr>
                                                                                <td>Tanggal Pesan</td>
                                                                                <td>: {{$data->tgl_pesan}} </td>
                                                                                </tr>

                                                                                <tr>
                                                                                <td>Produk</td>
                                                                                <td>: {{$data->produk}}</td>
                                                                                </tr>

                                                                                <tr>
                                                                                <td>Harga</td>
                                                                                <td>: {{$data->harga}}</td>
                                                                                </tr>

                                                                                <tr>
                                                                                <td>Jumlah Pesanan</td>
                                                                                <td>: {{$data->jumlah}}</td>
                                                                                </tr>

                                                                                <tr>
                                                                                <td>Ukuran</td>
                                                                                <td>: {{$data->ukuran}}</td>
                                                                                </tr>

                                                                                <tr>
                                                                                <td>ID Karyawan</td>
                                                                                <td>: {{ $data->karyawan->id_karyawan}}</td>
                                                                                </tr>

                                                                                <tr>
                                                                                <td>Tanggal Selesai</td>
                                                                                <td>: {{$data->tgl_selesai}}</td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        </div>
                                                        </div>
                                                        {{-- end of detail --}}

                                                        {{-- edit --}}
                                                        <a href="/Pemesanan/edit/{{$data->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        {{-- edit end --}}

                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data->id}}">
                                                        <i class="fa-solid fa-trash"></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Yakin Data Pemesanan {{$data->produk}} ingin dihapus?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <form action="Pemesanan/{{$data->id}}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <th colspan="5" scope="row">Data Tidak Ada</th>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
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
