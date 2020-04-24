<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Health Checker by Dexob</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ai Based Health Checkup for Corona virus(Covid-19)">
        <link href="{{URL::to('theme/front/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{URL::to('theme/front/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{URL::to('theme/front/css/socicon.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{URL::to('theme/front/css/lightbox.min.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{URL::to('theme/front/css/flickity.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{URL::to('theme/front/css/iconsmind.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{URL::to('theme/front/css/jquery.steps.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{URL::to('theme/front/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{URL::to('theme/front/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<style type="text/css">
    .feature img {
    border-radius: 105px;
}
</style>
    <body data-smooth-scroll-offset="77">
        <div class="nav-container">
            <div class="via-1586092793180" via="via-1586092793180" vio="HC">
                <div class="bar bar--sm visible-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-3 col-sm-2">
                                <a href="#"> <img class="logo logo-dark" alt="logo" src="{{URL::to('theme/front/img/logo-dark.png')}}"> <img class="logo logo-light" alt="logo" src="{{URL::to('theme/front/img/logo-light.png')}}"></a>
                            </div>
                            <div class="col-xs-9 col-sm-10 text-right">
                                <a href="#video-how-it-works" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav id="menu2" class="bar bar-2 hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 text-center text-left-sm hidden-xs col-md-push-5">
                                <div class="bar__module">
                                    <a href="#"> <img class="logo logo-dark" alt="logo" src="{{URL::to('theme/front/img/logo-dark.png')}}"> <img class="logo logo-light" alt="logo" src="{{URL::to('theme/front/img/logo-light.png')}}"></a>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-pull-2">
                                <div class="bar__module">
                                   
                                </div>
                            </div>
                            <div class="col-md-5 text-right text-left-xs text-left-sm">
                                <div class="bar__module">
                                    <a class="btn btn--sm type--uppercase" href="/survey/create"> <span class="btn__text">Take Free Test</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="main-container">
            <section class="cover imagebg height-80 text-center" data-gradient-bg="#4876BD,#5448BD,#8F48BD,#BD48B1">
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-9 col-md-7">
                            <h1> How are you feeling today?</h1>
                            <p class="lead">Take small survey to analyse your risk for Covid-19 (Corona Virus)&nbsp;</p>
                            <a class="btn btn--primary type--uppercase" href="/survey/create"> <span class="btn__text">
						Take Free Test</span> </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="space--xxs text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Mentions</h1>
                        </div>
                    </div>
                </div>
            </section>
            <a id="download-app" class="in-page-link"></a>
            <section class="switchable space--xxs feature-large unpad--bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="switchable__text">
                                <h2>Health Checker was selected in Top300 in HackTheCrisisInIndia for Covid-19</h2>
                                 <a target="_blank" href="https://garage48.org/events/hackthecrisisindia">More about HackTheCrisis India »</a> </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xs-12 text-center"> <img alt="Image" src="{{URL::to('theme/front/img/hackthecrisisindia.jpg')}}"> </div>
                    </div>
                </div>
            </section>
            <section class="space--xxs text-center bg--primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>How it Works</h1>
                        </div>
                    </div>
                </div>
            </section>
            <a id="how-it-works" class="in-page-link"></a>
            <section class="switchable bg--primary space--xxs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-center"> <img alt="Image" class="border--round box-shadow-wide" src="{{URL::to('theme/front/img/landing-3.jpg')}}"> <span> </span> </div>
                        <div class="col-sm-6 col-md-5">
                            <ol class="process-3">
                                <li class="process_item">
                                    <div class="process__number"><span>1</span></div>
                                    <div class="process__body">
                                        <h4>How are you feeling?</h4>
                                        <p> Answer a simple set of questions about your symptoms</p>
                                    </div>
                                </li>
                                <li class="process_item">
                                    <div class="process__number"><span>2</span></div>
                                    <div class="process__body">
                                        <h4>Get to know your Risk</h4>
                                        <p>Our Artificial Intelligence will calculate your risk for COVID-19</p>
                                    </div>
                                </li>
                                <li class="process_item">
                                    <div class="process__number"><span>3</span></div>
                                    <div class="process__body">
                                        <h4>Further followups</h4>
                                        <p> If you are at high risk, further followup would be required with Medical History for&nbsp;susceptible people.</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="space--xxs text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Team</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-center space--xxs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="feature feature-8"> <img alt="Image" src="{{URL::to('theme/front/img/t1.png')}}">
                                <h5>Pranav</h5> <span>Project Lead</span> </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature feature-8"> <img alt="Image" src="{{URL::to('theme/front/img/t2.png')}}">
                                <h5>Ashutosh</h5> <span>Architech</span> </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature feature-8"> <img alt="Image" src="{{URL::to('theme/front/img/t3.png')}}">
                                <h5>Gautam</h5> <span>Domain Expert</span> </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature feature-8"> <img alt="Image" src="{{URL::to('theme/front/img/t4.png')}}">
                                <h5>Shivam</h5> <span>Lead Developer</span> </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature feature-8"> <img alt="Image" src="{{URL::to('theme/front/img/t5.png')}}">
                                <h5>Prakhar</h5> <span>Developer</span> </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="text-center space--sm footer-5 bg--primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="heading-block">
                                <ul class="list-inline list--hover">
                                    <li> <a target="_blank" href="https://dexob.com/about"><span>About us</span></a> </li>
				 <li> <a target="_blank" href="register-organisation"><span>register organisation</span></a> </li>
                                    <li> <a target="_blank" href="https://dexob.com/contact"><span>Contact us</span></a> </li> 
                                    <li> <a href="/terms-&-conditions" target="_blank">Terms & Conditions</a></li> 
                                    <li> <a href="/privacy" target="_blank">Privacy Policy</a> </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="social-list list-inline list--hover">
                                     <li><a href="https://in.linkedin.com/company/dexob"><i class="socicon icon socicon-linkedin icon--xs"></i></a></li>
                                    <li><a href="https://twitter.com/dexobsolutions"><i class="socicon socicon-twitter icon icon--xs"></i></a></li>
                                    <li><a href="https://www.facebook.com/dexobsolutions/"><i class="socicon socicon-facebook icon icon--xs"></i></a></li>
                                   
                                </ul>
                            </div>
                            <div> <span class="type--fine-print">Made in India</span> <img alt="Image" class="flag" src="{{URL::to('theme/front/img/flag-ind.png')}}"> </div>
                            <div> <span class="type--fine-print">© <span class="update-year">2020</span> Dexob Solutions Private Limited</span>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
 <script src="{{URL::to('theme/front/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/flickity.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/easypiechart.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/parallax.js')}}"></script>
        <script src="{{URL::to('theme/front/js/typed.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/datepicker.js')}}"></script>
        <script src="{{URL::to('theme/front/js/isotope.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/ytplayer.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/lightbox.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/granim.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/jquery.steps.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/countdown.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/twitterfetcher.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/spectragram.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/smooth-scroll.min.js')}}"></script>
        <script src="{{URL::to('theme/front/js/scripts.js')}}"></script>

    </body>

</html>
