<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trang web thuộc trường đại học Trà Vinh">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{asset('')}}">
    <title>System Support Student | Nhà Trọ Trà Vinh | Giải Phám Tìm Kiếm An Toàn</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/awesome/css/fontawesome-all.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/product.css">
    <!-- JQUERY -->
    <script src="assets/js/jquery.min.js"></script>
</head>
<body>
<div class="banner">
    <div class="container-fluid">
        <div class="topnav">
            <a href="https://www.tvu.edu.vn/">Trang Chủ TVU</a>
            <a href="https://ktcn.tvu.edu.vn/">Khoa Kỹ thuật & Công nghệ</a>
            <a href="http://sit.tvu.edu.vn/">Bộ môn Công nghệ Thông Tin</a>
            <a href="http://ttsv.tvu.edu.vn/">Trang thông tin sinh viên</a>
        </div>
    </div>
</div>
<div class="header">
    <div class="container-fluid">
        <img class="img_banner" src="images/bg.png">
    </div>
</div>
<nav id="navbar" class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="trang-chu.html">Trang chủ</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="tim-quanh-day.html">Tìm quanh đây</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn-dangtin" href="user/motel/add"><i class="fas fa-edit"></i> Đăng tin ngay</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i
                                class="fas fa-user-circle"></i> Kim Xuân Hồng <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="user/profile">Thông tin chi tiết</a></li>
                        <li><a href="user/motel/add">Đăng tin</a></li>
                        <li><a href="user/logout">Thoát</a></li>
                    </ul>
                </li>
                <li><a href="user/logout"><i class="fas fa-sign-in-alt"></i> Đăng xuất</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- contain content -->
<div id="wraper" style="background-color: #F5F5F5; min-height: 500px ">
    @yield('content')
</div>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="fb-page" data-href="https://www.facebook.com/doankhoaktcntvu/" data-small-header="true"
                     data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/doankhoaktcntvu/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/doankhoaktcntvu/">Đoàn Khoa Kỹ thuật và Công nghệ -
                            TVU</a></blockquote>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="menu">
                    <span>MENU</span>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="address">
                    <span>Contact</span>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i> <a href="tellto:02943855690">0294.3855690</a>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Số 126 Nguyễn Thiện Thành, Khóm
                            4, Phường 5, TP. Trà Vinh, tỉnh Trà Vinh</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:ktcn@tvu.edu.vn">ktcn@tvu.edu.vn</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/totop.js"></script>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=688371478174244&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
