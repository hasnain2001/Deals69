<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 08:07:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')Craeted|RTN</title>
       <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">
    <!-- Inside <head> -->
<link href="{{ asset('css/summernote-bs4.min.css') }}" rel="stylesheet">

<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min2167.css?v=3.2.0') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <script nonce="f1447a86-ce2c-40e9-9e09-d88357b3081d">
        try {
            (function(w, d) {
                ! function(bu, bv, bw, bx) {
                    bu[bw] = bu[bw] || {};
                    bu[bw].executed = [];
                    bu.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    bu.zaraz.q = [];
                    bu.zaraz._f = function(by) {
                        return async function() {
                            var bz = Array.prototype.slice.call(arguments);
                            bu.zaraz.q.push({
                                m: by,
                                a: bz
                            })
                        }
                    };
                    for (const bA of ["track", "set", "debug"]) bu.zaraz[bA] = bu.zaraz._f(bA);
                    bu.zaraz.init = () => {
                        var bB = bv.getElementsByTagName(bx)[0],
                            bC = bv.createElement(bx),
                            bD = bv.getElementsByTagName("title")[0];
                        bD && (bu[bw].t = bv.getElementsByTagName("title")[0].text);
                        bu[bw].x = Math.random();
                        bu[bw].w = bu.screen.width;
                        bu[bw].h = bu.screen.height;
                        bu[bw].j = bu.innerHeight;
                        bu[bw].e = bu.innerWidth;
                        bu[bw].l = bu.location.href;
                        bu[bw].r = bv.referrer;
                        bu[bw].k = bu.screen.colorDepth;
                        bu[bw].n = bv.characterSet;
                        bu[bw].o = (new Date).getTimezoneOffset();
                        if (bu.dataLayer)
                            for (const bH of Object.entries(Object.entries(dataLayer).reduce(((bI, bJ) => ({
                                    ...bI[1],
                                    ...bJ[1]
                                })), {}))) zaraz.set(bH[0], bH[1], {
                                scope: "page"
                            });
                        bu[bw].q = [];
                        for (; bu.zaraz.q.length;) {
                            const bK = bu.zaraz.q.shift();
                            bu[bw].q.push(bK)
                        }
                        bC.defer = !0;
                        for (const bL of [localStorage, sessionStorage]) Object.keys(bL || {}).filter((bN => bN
                            .startsWith("_zaraz_"))).forEach((bM => {
                            try {
                                bu[bw]["z_" + bM.slice(7)] = JSON.parse(bL.getItem(bM))
                            } catch {
                                bu[bw]["z_" + bM.slice(7)] = bL.getItem(bM)
                            }
                        }));
                        bC.referrerPolicy = "origin";
                        bC.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bu[
                            bw])));
                        bB.parentNode.insertBefore(bC, bB)
                    };
                    ["complete", "interactive"].includes(bv.readyState) ? zaraz.init() : bu.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote(); // Replace '#summernote' with the ID of your textarea
    });
</script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
      <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
                width="60">
        </div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="{{ route('dashboard') }}" class="brand-link">
                <img src="{{ asset('') }}admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Deals6</span>
            </a>

            <div class="sidebar">

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Setup Manager
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.category') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.store') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.coupon') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Coupons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.network') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Network</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.blog') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Blog</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>

            </div>

    </aside>

    <div class="content-wrapper">
    <div class="container justify-content">
        <!-- Blog Form -->
        <form method="POST" action="{{ route('admin.blog.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
           @if (session()->has('success'))
    <div class="alert alert-primary d-flex align-items-center" role="alert">
      
        <div>
            blog created successfully
        </div>
    </div>
@endif


                        <!-- Display validation errors here -->
                        @if ($errors->any())
                        <div  class="alert alert-danger" >
                            <strong>Validation error(s):</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" />
                        </div>
                        <div class="form-group">
                            <label for="category_image">Blog Image</label>
                            <input type="file" class="form-control" name="category_image" id="category_image" />
                        </div>
                        <div class="form-group">
                            <label for="category_image">Main Content</label>
                            <textarea id="summernote" name="content"></textarea>
                        </div>
                      
                    </div>
                    
                </div>
                     <div class="form-group">
                                    <label for="name">Meta Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_title" id="meta_title" >
                                </div>
                                <div class="form-group">
                                    <label for="meta_tag">Meta Tag <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_tag" id="meta_tag">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_keyword" id="meta_keyword">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" class="form-control" cols="30" rows="5" style="resize: none;"></textarea>
                                </div>  <button type="submit" class="btn btn-dark">Submit</button>
                            </div>
                        </div>
            </div>    </div>    </div>
        </form>
    </div>
</div>

        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content -->
        </aside>
    </div>
    <!-- ./wrapper -->

    <script>
    $(document).ready(function() {
        $('#summernote').summernote(
             {height:400,
            }
        ); // Replace '#summernote' with the ID of your textarea
    });
</script>
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>


    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>

    <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <script src="{{ asset('admin/dist/js/adminlte2167.js?v=3.2.0') }}"></script>

    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
    

    <!-- Before </body> -->
<script src="{{ asset('js/summernote-bs4.min.js') }}"></script>

</body>


</html>
