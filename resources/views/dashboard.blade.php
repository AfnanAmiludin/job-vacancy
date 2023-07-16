<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Lowongan Kerja Poltekbang SBY</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{asset('airnav/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Lowongan Kerja</a>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Job Vacancy</div>
                            <li>
                                <a class="nav-link" href="/card">
                                    <div class="sb-nav-link-icon"><i class="fa fa-archive"></i></div>
                                    Job
                                </a>
                            </li>
                            <div class="sb-sidenav-menu-heading">Add Job Vacancy</div>
                            <li>
                                <a class="nav-link" href="/add">
                                    <div class="sb-nav-link-icon"><i class="fa fa-edit"></i></div>
                                    Add Job
                                </a>
                            </li>
                            <div class="sb-sidenav-menu-heading"></div>
                            <form action="/logout" method="post" class="px-2">
                                @csrf
                                <button  class='btn btn-danger'>
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Lowongan Kerja 
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                @yield('card')
                @yield('add')
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('airnav/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('airnav/assets/demo/chart-area-demo.j')}}"></script>
        <script src="{{asset('airnav/assets/demo/chart-bar-demo.j')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('airnav/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
