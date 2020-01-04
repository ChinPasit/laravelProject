@extends('Template.menu')
@section('content')
    <section id="top_banner">
            <div class="banner">
                <div class="inner text-center">
                    <h2 style="color:#000">ระบบศูนย์กลางเอกสารองค์การบริหารส่วนตำบลท่าข้าม</h2>
                </div>
            </div>
    </section>

    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                    <div class="section-heading">
                        <h2>การสมัครสมาชิก<span>เพื่อเข้าใช้งาน</span></h2>
                        <p class="subheading">
                            " จะได้รับบัญชีผู้ใช้งานและรหัสผ่านจากแอดมินของระบบเท่านั้นไม่สามารถลงทะเบียนเองเพื่อใช้งานได้ "
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-cog"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>แอดมินผู้ดูแลระบบ</h4>
                            <p>ทางแอดมินขอสงวนสิทธิ์ในการเข้าใช้งานให้กับบุคลากรและเจ้าหน้าที่พนักงานที่อยู่ภายในองค์การบริหารส่วนตำบลท่าข้ามเท่านั้น</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-user"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>พนักงานและบุคลากร</h4>
                            <p>สำหรับพนักงานและบุคลากรสามารถเข้าใช้งานได้ปกติ หากมีปัญหาโปรดติดต่อแอดมินผู้ดูแลระบบ</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>เข้าสู่ระบบเพื่อใช้งาน</h3>
                                <p>กรุณากรอกชื่อผู้ใช้งานและรหัสผ่านให้ถูกต้อง</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form method="post"  action="{{ route('login') }}"class="login-form">
                            @csrf
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input id="email" type="email" name="email" value="{{old('email')}}" class="form-control" 
                                    placeholder="ผู้ใช้งาน" aria-describedby="basic-addon1" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                    <input id ="password" type="password" name="password" required autocomplete="current-password" 
                                        class="form-control" placeholder="รหัสผ่าน" aria-describedby="basic-addon1">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                </div>
                                <button type="submit" class="btn">ตกลง</button>
                            </form>
                        </div>
                    </div>
                </div>

    </section>
@endsection