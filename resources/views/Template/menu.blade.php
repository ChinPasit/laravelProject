<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="{{ asset('css/template_main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/template_skin.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Niramit&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/template_index.js') }}" ></script>
    
</head>

<body id="wrapper">

    <section id="top-header">
        <div class="container">
            <div class="row">
               <div class = "col-md-7 col-sm-7 col-xs-7 social">
                <ul class ="contact_links">
                
               <i class="fa fa-book"> </i><a href="{{ route('thehome') }}"> {{ __('Welcome') }}</a>
                </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5 social">
                    <ul class="social_links">
                    @guest
                    @else
                        <li><i class="fa fa-envelope"></i><a href="#"> {{ Auth::user()->email }}</a></li>
                        <li><i class="fa fa-sign-out"></i><a href="{{ route('logout') }}"onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                    @endguest
                    </ul>
                </div>
            </div>
        </div>
        </div>

    </section>

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
                        <a class="navbar-brand" href="{{ route('thehome') }}">
                            <h1>THAKHAM</h1><span>WEBAPPLICATION OFFICE</span></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                        @guest
                            <li><a href="{{ route('thehome') }}">หน้าหลัก</a></li>
                                <li><a href="features.html">ข่าวประชาสัมพันธ์</a></li>
                            <li><a href="{{ route('testupload') }}">เอกสารและแบบฟอร์ม</a></li>
                            <li><a href="contact.html">ติดต่อเรา</a></li>
                            <li><a href="{{ route('loginUser') }}">เข้าสู่ระบบ</a></li>
                        @else
                            <li><a href="{{ route('thehome') }}">หน้าหลัก</a></li>
                            <li><a href="features.html">ข่าวประชาสัมพันธ์</a></li>
                            <li><a href="{{ route('testupload') }}">เอกสารและแบบฟอร์ม</a></li>
                            <li><a href="contact.html">ติดต่อเรา</a></li>
                        @endguest
                        </ul>
                    
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    
    <!-- Tab Menu Contact-->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>ที่อยู่</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li><a href="#">146 หมู่ 5 ต.ท่าข้าม อ.หาดใหญ่ จ.สงขลา 90110</a></li>
                        </ul>
                        <a href="#" class="learnmore">ดูเพิ่มเติม <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>ข่าวประชาสัมพันธ์</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li><a href="#">ข่าวประจำวัน</a><p class="post-date">รับชมข่าวสารได้ที่นี้</p></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>เอกสารและแบบฟอร์ม</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li>
                            <a href="#">แบบฟอร์มคำร้องทั่วไป</a> <br/>
                            <a href="#">แบบฟอร์มคำร้องขอติดต่อเจ้าหน้าที่พนักงาน</a>
                            <p class="post-date">ยินดีต้อนรับ</p></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 <block></block>">
                    <div class="footer-block">
                        <h4>กระดานสนทนา</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li>
                                <a href="#" class="post">เข้าร่วมการสนทนา</a>
                                <p class="post-date">ยินดีต้อนรับ</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 btm-footer-links">
                <i class="fa fa-phone"></i><a href="#">074-375382</a>
                <i class="fa fa-envelope"></i><a href="#">146thakham@gmail.com</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                    Developed by <a href="#">THAKHAM Webapplication Office</a> designed by <a href="#">COE PSU</a>
                </div>
            </div>
        </div>
    </section>

    <div id="panel">
        <div id="panel-admin">
            <div class="panel-admin-box">
                <div id="tootlbar_colors">
                    <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                    <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                    <button class="color" style="background-color:#b4de50;" onclick="mytheme(2)"> </button>
                    <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                    <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                    <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                </div>
            </div>

        </div>
        <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
    </div>

</html>