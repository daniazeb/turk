<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Today's Deal | Dealstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/app/css/style.css')}}" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-form well pull-right unit-bg">
                <div class="login-input pull-left">
                    <input class="span2" type="text" placeholder="Email">
                    <input class="span2" type="password" placeholder="Password">
                </div>
                <ul class="signup nav pull-right">
                    <li>
                        <button type="submit" class="btn btn-primary">
                            Log in</button></li>
                    <li class="dropdown btn-group">
                        <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            Sign up <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <form style="margin-bottom: 0">
                            <p>
                                <input type="text" placeholder="Email"></p>
                            <p>
                                <input type="password" placeholder="Password"></p>
                            <p>
                                <input type="text" placeholder="Username"></p>
                            <p>
                                <input class="btn btn-success" type="submit" value="Start"></p>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="well unit-bg">
                    <h2><a href="list.html">
                        Logo Placeholder</a><h2>
                </div>
                <div class="well unit-bg">
                    <ul class="nav nav-list">
                        <li class="active"><a href="list.html"><i class="icon-asterisk"></i>&nbsp;Today's Deal</a></li>
                        <li><a href="list.html"><i class="icon-headphones"></i>&nbsp;Gadgets</a></li>
						<li><a href="list.html"><i class="icon-glass"></i>&nbsp;Food & Drink</a></li>
						<li><a href="list.html"><i class="icon-tag"></i>&nbsp;Baby Products</a></li>
						<li><a href="list.html"><i class="icon-tag"></i>&nbsp;Pharmacy</a></li>
						<li><a href="list.html"><i class="icon-tag"></i>&nbsp;Car Rental</a></li>
						<li><a href="list.html"><i class="icon-tag"></i>&nbsp;Hotels</a></li>
						<li><a href="list.html"><i class="icon-tag"></i>&nbsp;Dining</a></li>
                        <li><a href="list.html"><i class="icon-tag"></i>&nbsp;All Deals</a></li>
                        <li><a href="#"><i class="icon-comment"></i>&nbsp;Discussion</a></li>
                        <li class="divider"></li>
                        <li><a href="contact.html"><i class="icon-question-sign"></i>&nbsp;Help</a></li>
                    </ul>
                </div>
                <div class="well unit-bg">
                    <p>
                        <i class="icon-envelope"></i>&nbsp;Get Deal Alerts</p>
                    <div class="input-append">
                        <input class="span2" id="inputEmail" type="text" placeholder="Enter your email">
                        <button class="btn" type="button">
                            OK</button>
                    </div>
                </div>
                <div class="well unit-bg">
                    <p>
                        <i class="icon-heart"></i>&nbsp;Follow Us</p>
                    <ul class="unstyled social">
                        <li>
                            <div class="fb-like-box" data-href="http://www.facebook.com/pages/Twitter/278029242253904"
                                data-width="292" data-show-faces="false" data-stream="false" data-header="false">
                            </div>
                        </li>
                        <li>
                            <ul class="unstyled socialicons">
                                <li class="Facebook"><a href="#" title="Facebook">Facebook</a></li>
                                <li class="Twitter"><a href="#" title="Twitter">Twitter</a></li>
                                <li class="Pinterest"><a href="#" title="Pinterest">Pinterest</a></li>
                                <li class="RSS"><a href="#" title="RSS">RSS</a></li>
                                <li class="Email"><a href="#" title="Email">Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="span9">
                <div class="row unit-block">
                    <div class="span9 unit-bg">
                        <div class="unit">
                            <legend>
                                <img src="assets/app/img/glyphicons_248_asterisk.png" alt="deal">
                                Today's Deal</legend>
                            <ul class="nav nav-pills">
                                <li class="active"><a href="list.html">All</a></li>
                                <li><a href="list.html">Baby Products</a></li>
                                <li><a href="list.html">Pharmacy</a></li>
                                <li><a href="list.html">Car Rental</a></li>
                                <li><a href="list.html">Hotels</a></li>
                                <li><a href="list.html">Resturants</a></li>
                                <li><a href="list.html">Malls</a></li>
                                <li><a href="list.html">Dining</a></li>
                                <li><a href="list.html">Insurance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row unit-block">
                    <div class="span9 unit-bg">
                        <div id="myCarousel" class="carousel slide" data-interval="3000">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item">
                                    <img src="assets/app/img/banner1.jpg" alt="banner1">
                                    <div class="carousel-caption">
                                        <h4>
                                            iPad Mini - 10% off</h4>
                                        <p>
                                            Limited Time offer</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/app/img/banner2.jpg" alt="banner2">
                                    <div class="carousel-caption">
                                        <h4>
                                            New Frangnance - 15% off</h4>
                                        <p>
											Get the latest frangnance in town</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/app/img/banner3.jpg" alt="banner3">
                                    <div class="carousel-caption">
                                        <h4>
                                            Home Decore Sofa - 50% off</h4>
                                        <p>
                                            Get you home decore.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        <ul class="thumbnails">
                            <li class="span3">
                                <div class="thumbnail unit-bg">
                                    <a href="post.html">
                                        <img src="assets/app/img/deal1.jpg" alt="deal1" width="100%"></a>
                                    <div class="caption">
                                        <h4>
                                            Summer Coca Cola Offer</h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                            porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p>
                                            <span class="view-deal"><a href="post.html" class="btn btn-large btn-success">View&nbsp;<i
                                                class="icon-chevron-right icon-white"></i></a></span><span class="help-inline text-highlight-small">
                                                    Save 20%</span> <!--<span class="help-inline text-strike">$70</span>-->
                                        </p>
                                        <hr>
                                        <small><i class="icon-tag"></i>&nbsp;2 Purchased&nbsp;&nbsp;<i class="icon-time"></i>&nbsp;2
                                            Days Remaining</small>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail unit-bg">
                                    <a href="post.html">
                                        <img src="assets/app/img/deal2.jpg" alt="deal2" width="100%"></a>
                                    <div class="caption">
                                        <h4>
                                            Detergents Offer</h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                            porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p>
                                            <span class="view-deal"><a href="post.html" class="btn btn-large btn-success">View&nbsp;<i
                                                class="icon-chevron-right icon-white"></i></a></span><span class="help-inline text-highlight-small">
                                                    Save 40%</span> 
                                        </p>
                                        <hr>
                                        <small><i class="icon-tag"></i>&nbsp;5 Purchased&nbsp;&nbsp;<i class="icon-time"></i>&nbsp;3
                                            Days Remaining</small>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail unit-bg">
                                    <a href="post.html">
                                        <img src="assets/app/img/deal3.jpg" alt="deal3" width="100%"></a>
                                    <div class="caption">
                                        <h4>
                                            Mac Book</h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                            porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p>
                                            <span class="view-deal"><a href="post.html" class="btn btn-large btn-success">View&nbsp;<i
                                                class="icon-chevron-right icon-white"></i></a></span><span class="help-inline text-highlight-small">
                                                    Save 10%</span> 
                                        </p>
                                        <hr>
                                        <small><i class="icon-tag"></i>&nbsp;2 Purchased&nbsp;&nbsp;<i class="icon-time"></i>&nbsp;5
                                            Days Remaining</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        <ul class="thumbnails">
                            <li class="span3">
                                <div class="thumbnail unit-bg">
                                    <a href="post.html">
                                        <img src="assets/app/img/deal4.jpg" alt="deal4" width="100%"></a>
                                    <div class="caption">
                                        <h4>
                                            FORD 1994</h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                            porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p>
                                            <span class="view-deal"><a href="post.html" class="btn btn-large btn-success">View&nbsp;<i
                                                class="icon-chevron-right icon-white"></i></a></span><span class="help-inline text-highlight-small">
                                                    Save 10%</span> 
                                        </p>
                                        <hr>
                                        <small><i class="icon-tag"></i>&nbsp;10 Purchased&nbsp;&nbsp;<i class="icon-time"></i>&nbsp;2
                                            Days Remaining</small>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail unit-bg">
                                    <a href="post.html">
                                        <img src="assets/app/img/deal5.jpg" alt="deal5" width="100%"></a>
                                    <div class="caption">
                                        <h4>
                                            Best Seller</h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                            porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p>
                                            <span class="view-deal"><a href="post.html" class="btn btn-large btn-success">View&nbsp;<i
                                                class="icon-chevron-right icon-white"></i></a></span><span class="help-inline text-highlight-small">
                                                    Save 10%</span> 
                                        </p>
                                        <hr>
                                        <small><i class="icon-tag"></i>&nbsp;0 Purchased&nbsp;&nbsp;<i class="icon-time"></i>&nbsp;5
                                            Days Remaining</small>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail unit-bg">
                                    <a href="post.html">
                                        <img src="assets/app/img/deal6.jpg" alt="deal6" width="100%"></a>
                                    <div class="caption">
                                        <h4>
                                            Barazuca Ball</h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                            porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p>
                                            <span class="view-deal"><a href="post.html" class="btn btn-large btn-success">View&nbsp;<i
                                                class="icon-chevron-right icon-white"></i></a></span><span class="help-inline text-highlight-small">
                                                    Save 10%</span> 
                                        </p>
                                        <hr>
                                        <small><i class="icon-tag"></i>&nbsp;12 Purchased&nbsp;&nbsp;<i class="icon-time"></i>&nbsp;2
                                            Days Remaining</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row unit-block">
                    <div class="span9 unit-bg">
                        <div class="unit footer">
                            <ul class="pull-right">
                                <li><a href="about.html">About</a></li>
                                <li><a href="terms.html">Terms &amp; Privacy</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                            <span class="copyright">© 2012 Dealstrap. All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/jquery/js/jquery-1.8.1.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap/js/bootstrap-transition.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-alert.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-modal.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-dropdown.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-scrollspy.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-tab.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-tooltip.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-popover.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-button.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-collapse.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-carousel.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap-typeahead.js')}}"></script>

    <script src="{{asset('assets/fancybox/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('assets/backstretch/js/jquery.backstretch.min.js')}}"></script>
    <script src="{{asset('assets/app/js/script.js')}}"></script>
    <!-- facebook -->
    <div id="fb-root">
    </div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s);
            js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=279705068712379";
            fjs.parentNode.insertBefore(js, fjs);
        } (document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>
