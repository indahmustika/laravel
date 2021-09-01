<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tech Blog</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('user/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('user/images/apple-touch-icon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="{{asset('user/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/style.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/colors.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/version/tech.css')}}" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('user/images/version/tech-logo.png')}}" alt=""></a>
                     <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="">Tech Blog is a technology blog, we sharing marketing, news and gadget articles.</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <section class="section first-section">
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent Articles <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div>
                            <div class="blog-list clearfix">
                                @foreach($data as $result=>$value)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{url('select',array($value->id))}}" title="">
                                                <img src="{{$value->thumbnail}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{url('select',array($value->id))}}" title="">{{$value->title}}</a></h4>
                                        <p>{{$value->excerpt}}</p>
                                        <small><a href="" title="">{{$value->updated_at}}</a></small>
                                        <small><a href="" title="">{{$value->author}}</a></small>
                                    </div>
                                </div>
                                <hr class="invis">
                                @endforeach
                            </div>
                        </div>
                        <hr class="invis">
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright">
                            &copy; Tech Blog. Design: <a href="http://html.design">HTML Design</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="dmtop">Scroll to Top</div>
    </div>

    <script src="{{asset('user/js/jquery.min.js')}}"></script>
    <script src="{{asset('user/js/tether.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/custom.js')}}"></script>
</body>
</html>