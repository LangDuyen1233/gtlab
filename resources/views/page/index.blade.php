@extends('layouts.app')

@section('content')
    <!--
Home Slider
==================================== -->
    <section id="slider">
        <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:80%;margin:51px auto 64px;">
            <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    @foreach($slide as $sl)

                        <li><img src="{{asset(stripslashes($sl->image))}}" alt="{{$sl->title}}" title="{{$sl->title}}"/>
                        </li>
                    @endforeach

                </ul>
                <ul class="amazingslider-thumbnails" style="display:none;">
                    @foreach($slide as $sl)
                        <li><img src="{{asset(stripslashes($sl->image))}}" alt="{{$sl->title}}"
                                 title="{{$sl->title}}"/>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>
    <!--
    Features
    ==================================== -->
    <section id="features" class="features">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                    <h2>Features</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <!-- service item -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-github fa-2x"></i>
                        </div>

                        <div class="service-desc">
                            {{--@if(Auth::user() == null)--}}
                                {{--<h3><a href="#">IoT</a></h3>--}}
                            {{--@else--}}
                                <h3><a href="{{route('iot')}}">IoT</a></h3>
                            {{--@endif--}}

                            <p>*Internet of Things (Internet vạn vật) </p>
                            <p> + Amazon Web Service (AWS) </p>
                            <p>+ IoT AWS IoT Microsoft Azure</p>
                            <p>+ Google Cloud Platform Thing Worx </p>
                            <p>+IoT platform IBM Watson</p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->

                <!-- service item -->
                <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-pencil fa-2x"></i>
                        </div>

                        <div class="service-desc">
                            {{--@if(Auth::user() == null)--}}
                                {{--<h3><a href="#">Website</a></h3>--}}
                            {{--@else--}}
                                <h3><a href="{{route('website')}}">Website</a></h3>
                            {{--@endif--}}

                            <p>Design a website with transactions, promotions and information .
                                Study web with 3 skills :
                            <p>+ Front-End</p>
                            <p> +Back-End</p>
                            <p>+Full-Stack</p>
                        </div>

                    </div>
                </div>
                <!-- end service item -->

                <!-- service item -->
                <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>

                        <div class="service-desc">
                            {{--@if(Auth::user() == null)--}}
                                {{--<h3><a href="#">AI</a></h3>--}}
                            {{--@else--}}
                                <h3><a href="{{route('ai')}}">AI</a></h3>
                            {{--@endif--}}
                                <p>
                                *Artificial Intelligence:
                            <p>+ Sample identification;</p>
                            <p> + Optical character recognition;</p>
                            <p> + Face,Speech recognition;</p>
                            <p>+ Natural language processing;</p>
                            <p> + Game TTNT and Computer game botplanning.</p>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->

            </div>
        </div>
    </section>
    <!--
    Our Works
    ==================================== -->

    <section id="works" class="works clearfix">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center">
                    <h2>Our Project</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <div class="sec-sub-title text-center">
                    <p></p>
                </div>

                <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                    <ul class="text-center">
                        <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                        <li><a href="javascript:;" data-filter=".branding" class="filter">Design Web</a></li>
                        <li><a href="javascript:;" data-filter=".web" class="filter">Interner of Things </a></li>
                        <li><a href="javascript:;" data-filter=".logo-design" class="filter">Artificial Intelligence</a>
                        </li>
                        <li><a href="javascript:;" data-filter=".photography" class="filter">Install Windown </a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="project-wrapper">
            <div class="wrapper-all">
                <!--<div class="wrapper-all-1">-->
                <figure class="mix work-item web">
                    <img src="{{asset('img/works/item-1.jpg')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here"
                           href="{{asset('img/works/item-1.jpg')}}"><i
                                    class="fa fa-eye fa-lg"></i></a>
                        <h4>CNC MINI </h4>
                        <p>Computer Numerical Control</p>
                    </figcaption>
                </figure>

                <figure class="mix work-item web">
                    <img src="{{asset('img/works/item-2.jpg')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here"
                           href="{{asset('img/works/item-2.jpg')}}"><i
                                    class="fa fa-eye fa-lg"></i></a>
                        <h4>CNC MINI </h4>
                        <p>Computer Numerical Control</p>
                    </figcaption>
                </figure>

                <figure class="mix work-item web">
                    <img src="{{asset('img/works/item-3.jpg')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here"
                           href="{{asset('img/works/item-3.jpg')}}"><i
                                    class="fa fa-eye fa-lg"></i></a>
                        <h4>CNC MINI </h4>
                        <p>Computer Numerical Control</p>
                    </figcaption>
                </figure>
                <figure class="mix work-item branding">
                    <img src="{{asset('img/works/item-7.jpg')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here"
                           href="img/works/item-7.jpg"><i
                                    class="fa fa-eye fa-lg"></i></a>
                        <h4>Web Store </h4>
                        <p>Website </p>
                    </figcaption>
                </figure>
                <!--</div>-->
                <!--<div class="wrapper-all-2">-->
                <figure class="mix work-item branding">
                    <img src="{{asset('img/works/item-7.jpg')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here"
                           href="img/works/item-7.jpg"><i
                                    class="fa fa-eye fa-lg"></i></a>
                        <h4>Web Store </h4>
                        <p>Website </p>
                    </figcaption>
                </figure>
                <figure class="mix work-item photography">
                    <img src="{{asset('img/works/item-4.jpg')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here"
                           href="img/works/item-4.jpg"><i
                                    class="fa fa-eye fa-lg"></i></a>
                        <h4>Install Windows</h4>
                        <p>Install Windows</p>
                    </figcaption>
                </figure>

                <figure class="mix work-item branding">
                    <img src="{{asset('img/works/item-5.jpg')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here"
                           href="img/works/item-5.jpg"><i
                                    class="fa fa-eye fa-lg"></i></a>
                        <h4>Web Store </h4>
                        <p>Website </p>
                    </figcaption>
                </figure>

                <figure class="mix work-item logo-design">
                    <img src="{{asset('img/works/item-6.jpg')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here"
                           href="img/works/item-6.jpg"><i
                                    class="fa fa-eye fa-lg"></i></a>
                        <h4>AI</h4>
                        <p>Artificial intelligence</p>
                    </figcaption>
                </figure>
            </div>
        </div>

    </section>
    <section id="team" class="team">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                    <h2>Meet Our Team</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                    <p>To learn about the group's activities, we invite you to meet some of the members of the
                        following
                        group</p>
                </div>

                <!-- single member -->
                <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
                        data-wow-duration="500ms">
                    <div class="member-thumb">
                        <img src="{{asset('img/team/Thay.png')}}" alt="Team Member" class="img-responsive">
                        <figcaption class="overlay">
                            <h5>Mentor who is passionate about scientific research and many technology projects </h5>
                            <p>Contact details such as: Twitter,Facebook,Google+</p>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="https://www.facebook.com/phandinhlong"><i class="fa fa-facebook fa-lg"></i></a>
                                </li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </div>
                    <h4>Phan Đình Long</h4>
                    <span>Big-Boss</span>
                </figure>
                <!-- end single member -->

                <!-- single member -->
                <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
                        data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="member-thumb">
                        <img src="{{asset('img/team/Bo.png')}}" alt="Team Member" class="img-responsive">
                        <figcaption class="overlay">
                            <h5>Specializing in web code ( front-end) </h5>
                            <p>Learn more about the web programming language inviting to see information</p>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="https://www.facebook.com/bo.bay.94"><i
                                                class="fa fa-facebook fa-lg"></i></a>
                                </li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </div>
                    <h4>Võ Anh Huy</h4>
                    <span>Leader-Web</span>
                </figure>
                <!-- end single member -->

                <!-- single member -->
                <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
                        data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="member-thumb">
                        <img src="{{asset('img/team/Tanh.png')}}" alt="Team Member" class="img-responsive"/>
                        <figcaption class="overlay">
                            <h5>Creativity, space control, enthusiasm and influence with the group</h5>
                            <p>You want to implement ideas please contact:</p>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="https://www.facebook.com/kingtxx98"><i
                                                class="fa fa-facebook fa-lg"></i></a>
                                </li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </div>
                    <h4>Nguyễn Văn Tánh</h4>
                    <span>Leader-AI</span>
                </figure>
                <!-- end single member -->

                <!-- single member -->
                <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
                        data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="member-thumb">
                        <img src="{{asset('img/team/Bao.png')}}" alt="Team Member" class="img-responsive">
                        <figcaption class="overlay">
                            <h5> Who is passionate about everything, building robots and
                                extension for everyone </h5>
                            <p>
                                Support your channels on youtube and contact infor !</p>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="https://www.facebook.com/nguyenhubao"><i class="fa fa-facebook fa-lg"></i></a>
                                </li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </div>
                    <h4>Nguyễn Như Bảo</h4>
                    <span>Leader-IOT</span>
                </figure>
                <!-- end single member -->

            </div>
        </div>
    </section>

    <!--
    Some fun facts
    ==================================== -->

    <section id="facts" class="facts">
        <div class="parallax-overlay">
            <div class="container">
                <div class="row number-counters">

                    <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                        <h2>Some Fun Facts</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <!-- first count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
                         data-wow-duration="500ms">
                        <div class="counters-item">
                            <i class="fa fa-clock-o fa-3x"></i>
                            <strong data-to="3200">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Hours of Work</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                         data-wow-delay="300ms">
                        <div class="counters-item">
                            <i class="fa fa-users fa-3x"></i>
                            <strong data-to="120">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                         data-wow-delay="600ms">
                        <div class="counters-item">
                            <i class="fa fa-rocket fa-3x"></i>
                            <strong data-to="360">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p> Projects Delivered </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                         data-wow-delay="900ms">
                        <div class="counters-item">
                            <i class="fa fa-trophy fa-3x"></i>
                            <strong data-to="6454">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Awards Won</p>
                        </div>
                    </div>
                    <!-- end first count item -->

                </div>
            </div>
        </div>
    </section>
    <div class="big-main">

        <div class="mission">
            <div class="mission-iot">
                <div class="mission-number">04</div>
                <div class="mission-title">IOT</div>


            </div>
            <div class="mission-web">
                <div class="mission-number">05</div>
                <div class="mission-title">WEB</div>

            </div>
            <div class="mission-ai">
                <div class="mission-number">05</div>
                <div class="mission-title">AI</div>
            </div>
        </div>

        <div class="footer-contents">
            <div class="footer-contents-1">
                <div class="footer-contents-1-1">
                    <div class="noci">
                        <div class="radius">

                            <div class="fa fa-users fa-3x" style="color: #5db1ff;"></div>

                        </div>
                    </div>
                    <div class="sub-contents">
                        <div class="sub-contents-1">
                            <span><strong> Hỗ trợ cài Win</strong></span>
                        </div>
                        <div class="sub-contents-2">
                  <span>  Dịch vụ cài win miễn phí, phần mềm dược cập nhật mới nhất cùng với phong cách làm việc chuyên
                    nghiệp
                      <!--<br>-->
                      <!--+ Win 7 , win 10 ,...-->
                      <!--<br>-->
                      <!--+Office 365 ,... và những setup chuẩn khác.-->
                    <i> <strong>Hãy tìm đến chúng tôi!!</strong> </i>
                      </span>
                        </div>
                    </div>
                </div>
                <div class="footer-contents-1-2">

                    <div class="sub-contents">
                        <div class="sub-contents-1">
                            <span><strong>English</strong></span>
                        </div>
                        <div class="sub-contents-2">
                    <span> OurTeam can support your ability to listen and speak English every hour, every day and every year
                    with hope to help you have a brighter future.
                    <br>
                       </span>
                        </div>
                    </div>
                    <div class="noci">
                        <div class="radius">

                            <div class="fa fa-rocket fa-3x" style="color: #5db1ff;"></div>

                        </div>
                    </div>
                </div>
                <div class="footer-contents-1-3">
                    <div class="noci">
                        <div class="radius dif">

                            <div class="fa fa-clock-o fa-3x" style="color: #5db1ff;"></div>

                        </div>
                    </div>
                    <div class="sub-contents">
                        <div class="sub-contents-1">
                            <span><strong> Tiếp cận </strong></span>
                        </div>
                        <div class="sub-contents-2">
                            <i>Tiếp cận cái gì ? Tiếp cận như thế nào ?</i>
                            <br> +Luôn luôn cập nhật những công nghệ mới.

                            <br>+Tạo ra những app đáp ứng cho nền CN 4.0
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-contents-2">
                <img src="{{asset('img/team/allteam.png')}}" style="width: 100%" alt="">
            </div>
            <div class="footer-contents-3">
                <div class="footer-contents-1-1">

                    <div class="sub-contents">
                        <div class="sub-contents-1">
                            <span> <strong>Trải nghiệm</strong></span>
                        </div>
                        <div class="sub-contents-2">
                            +Tham gia sân chơi công nghệ đầy thú vị, học hỏi những ý tưởng sáng tạo <br>
                            +Đi đến những gian hàng chuyên bán dụng cụ IOT
                            <!--<br> +Gặp gỡ với những startup cực đỉnh-->
                        </div>

                    </div>
                    <div class="noci">
                        <div class="radius">

                            <div class="fa fa-trophy fa-3x" style="color: #5db1ff;"></div>

                        </div>
                    </div>
                </div>
                <div class="footer-contents-1-2">


                    <div class="noci">
                        <div class="radius dif">

                            <div class="fa fa-github fa-2x" style="color: #5db1ff; "></div>

                        </div>
                    </div>
                    <div class="sub-contents">
                        <div class="sub-contents-1">
                            <span><strong>Thỏa sức phát triển</strong></span>
                        </div>
                        <div class="sub-contents-2">
                            + Thách thức lập trình viên , trí tuệ IT,...
                            <br>+Mở rộng phạm vi học tập : IOT, Vạn vật hấp dẫn ,...
                        </div>
                    </div>
                </div>
                <div class="footer-contents-1-3">
                    <div class="sub-contents">
                        <div class="sub-contents-1">
                            <span><strong> Niềm tự hào</strong></span>
                        </div>
                        <div class="sub-contents-2">
                            +Những thành tựu công trình nghiên cứu khoa học , ứng dụng ...
                            <br> +Phong cách làm việc của tất cả các thành viên trong: Teamwork , Teamsupport...
                        </div>
                    </div>
                    <div class="noci">
                        <div class="radius dif">

                            <div class="fa fa-pencil fa-2x" style="color: #5db1ff;"></div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="devices">
            <div class="quattran">
                <div class="devices-number">02</div>
                <div class="devices-title">Quạt Trần</div>
            </div>
            <div class="wifi">
                <div class="devices-number">01</div>
                <div class="devices-title">Wifi</div>
            </div>
            <div class="maylanh">
                <div class="devices-number">02</div>
                <div class="devices-title">Máy Lạnh</div>
            </div>

        </div>
    </div>

    <!--
    Contact Us
    ==================================== -->

    <section id="contact" class="contact">
        <div class="container">
            <div class="row mb50">

                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h2>Let’s Discuss</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                    <p>Thank you for visiting our website, wishing you interesting experiences and finding useful things
                        from us. </p>
                </div>
                {{--Comment--}}
                {{--@yield('comment')--}}
                <div class="row bootstrap snippets">
                    <div class="col-md-6 col-md-offset-2 col-sm-12">
                        <div class="comment-wrapper">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Comment panel
                                </div>
                                @if(Auth::user() == null)
                                    <a class="comment color" href="{{route('login')}}"> Please Login to comment!</a>

                                @else
                                    <div class="panel-body">
                                        <form action="{{route('comment')}}" method="post" role="form">
                                            @csrf
                                            <textarea class="form-control" name="text" placeholder="Write a comment..."
                                                      rows="3"></textarea>
                                            <br>
                                            <button type="submit" class="btn btn-info pull-right">Post</button>
                                        </form>
                                    </div>
                                @endif
                                <div class="clearfix"></div>
                                <hr>
                                <ul class="media-list">
                                    @foreach($comments as $comment)
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt=""
                                                     class="img-circle">
                                            </a>
                                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">{{$comment->time}}</small>
                                </span>
                                                <strong class="text-success">{{$comment->user->name}}</strong>
                                                <p>
                                                    {{ $comment->text}}

                                                </p>
                                            </div>
                                        </li>
                                    @endforeach


                                </ul>


                            </div>
                        </div>

                    </div>
                </div>
                <!-- contact address -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                    <div class="contact-address">
                        <h3>Address : </h3>
                        <p><i class="fa fa-road"></i>Linh Trung Street</p>
                        <p><i class="fa fa-graduation-cap"></i>Nong Lam University ,VietNam Country </p>
                        <p>+ Mail: greenteafitnlu@gmail.com</p>
                        <p>+ Hotline: 0979006985 (Ms.Duyen)</p>
                    </div>
                </div>
                <!-- end contact address -->

                <!-- contact form -->
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms"
                     data-wow-delay="300ms">
                    <div class="contact-form">
                        <h3>Say hello!</h3>

                        <div hidden class="alert alert-info"></div>
                        {{--send messenger emaiol--}}
                        <form action="{{route('message')}}" method="post" id="contact-form">
                            @csrf
                            <div class="input-group name-email">
                                <div class="input-field">
                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" placeholder="Email"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="input-group">
                                <textarea name="message" id="message" placeholder="Message"
                                          class="form-control"></textarea>
                            </div>
                            <div class="input-group">
                                <input type="submit" id="form-submit" class="pull-right" value="Send message">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end contact form -->

                <!-- footer social links -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms"
                     data-wow-delay="600ms">
                    <ul class="footer-social">
                        <li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
                        <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
                        <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
                    </ul>
                </div>
                <!-- end footer social links -->

            </div>
        </div>

        <!-- Google map -->


        <!--<div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms">-->
        <iframe id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.2316856808125!2d106.78774954558946!3d10.869974982314018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752891cf0ca363%3A0x356ed7098d266f31!2sNong+Lam+University!5e0!3m2!1sfr!2s!4v1557732932263!5m2!1sfr!2s"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen>

        </iframe>
        <!--</div>-->
        <!-- End Google map -->

    </section>

    <!--
    End Contact Us
    ==================================== -->

@endSection