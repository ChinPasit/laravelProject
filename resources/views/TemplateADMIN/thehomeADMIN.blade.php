@extends('TemplateADMIN.menu')
@section('content')

<div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('../image/1.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">ยินดีต้อนรับสู่ <span>อบต.ท่าข้าม
                    <div class="slider_btn">
                        <button type="button" class="btn btn-default slide" style="font-size:50%">ดูข่าวประชาสัมพันธ์<i class="fa fa-caret-right"></i></button>
                        <button type="button" class="btn btn-primary slide" style="font-size:50%">เอกสารและแบบฟอร์ม<i class="fa fa-caret-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('../image/3.png');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">ยินดีต้อนรับสู่ <span>อบต.ท่าข้าม
                    <div class="slider_btn">
                        <button type="button" class="btn btn-default slide" style="font-size:50%">ดูข่าวประชาสัมพันธ์<i class="fa fa-caret-right"></i></button>
                        <button type="button" class="btn btn-primary slide" style="font-size:50%">เอกสารและแบบฟอร์ม<i class="fa fa-caret-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('../image/4.png');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">ยินดีต้อนรับสู่ <span>อบต.ท่าข้าม
                    <div class="slider_btn">
                        <button type="button" class="btn btn-default slide" style="font-size:50%">ดูข่าวประชาสัมพันธ์<i class="fa fa-caret-right"></i></button>
                        <button type="button" class="btn btn-primary slide" style="font-size:50%">เอกสารและแบบฟอร์ม<i class="fa fa-caret-right"></i></button>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only"></span>
        </a>

    </div>

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-laptop feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>100% Responsive</h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</p>
                        <a href="#" class="readmore">Read More <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-bullhorn feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Powerful Features</h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</p>
                        <a href="#" class="readmore">Read More <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-support feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Customer Support</h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</p>
                        <a href="#" class="readmore">Read More <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection