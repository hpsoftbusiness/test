<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index/index.html.twig */
class __TwigTemplate_2f1009460c8041c05f7c754072560853af23af1601acc105154af2ac41b32a1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset=\"utf-8\">
    <title>Polisoft</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <!-- Favicons
    ================================================== -->
    <link rel=\"icon\" href=\"/img/favicon/favicon-32x32.png\" type=\"image/x-icon\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"/img/favicon/favicon-144x144.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"/img/favicon/favicon-72x72.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"/img/favicon/favicon-54x54.png\">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <!-- Template styles-->
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <!-- Responsive styles-->
    <link rel=\"stylesheet\" href=\"/css/responsive.css\">
    <!-- FontAwesome -->
    <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
    <!-- Animation -->
    <link rel=\"stylesheet\" href=\"/css/animate.css\">
    <!-- Prettyphoto -->
    <link rel=\"stylesheet\" href=\"/css/prettyPhoto.css\">
    <!-- Owl Carousel -->
    <link rel=\"stylesheet\" href=\"/css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"/css/owl.theme.css\">
    <!-- Flexslider -->
    <link rel=\"stylesheet\" href=\"/css/flexslider.css\">
    <!-- Flexslider -->
    <link rel=\"stylesheet\" href=\"/css/cd-hero.css\">
    <!-- Style Swicther -->
    <link id=\"style-switch\" href=\"/css/presets/preset3.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src=\"/js/html5shiv.js\"></script>
    <script src=\"/js/respond.min.js\"></script>

    <![endif]-->
    <style>
        .navbar-brand.navbar-bg {
            background: none;
        }
    </style>
</head>

<body>

<!-- Style switcher start -->
<div class=\"style-switch-wrapper\">
    <div class=\"style-switch-button\">
        <i class=\"fa fa-sliders\"></i>
    </div>
    <h3>Style Options</h3>
    <button id=\"preset1\" class=\"btn btn-sm btn-primary\"></button>
    <button id=\"preset2\" class=\"btn btn-sm btn-primary\"></button>
    <button id=\"preset3\" class=\"btn btn-sm btn-primary\"></button>
    <button id=\"preset4\" class=\"btn btn-sm btn-primary\"></button>
    <button id=\"preset5\" class=\"btn btn-sm btn-primary\"></button>
    <button id=\"preset6\" class=\"btn btn-sm btn-primary\"></button>
    <br/><br/>
    <a class=\"btn btn-sm btn-primary close-styler pull-right\">Close X</a>
</div>
<!-- Style switcher end -->

<div class=\"body-inner\">

    <!-- Header start -->
    <header id=\"header\" class=\"navbar-fixed-top header\" role=\"banner\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Logo start -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <div class=\"navbar-brand navbar-bg\">
                        <a href=\"index.html\">
                            <img class=\"img-responsive\" src=\"/images/polisoft.png\" >
                        </a>
                    </div>
                </div><!--/ Logo end -->
                <nav class=\"collapse navbar-collapse clearfix\" role=\"navigation\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown active\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Glówna <i class=\"fa fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <ul>
                                    <li class=\"active\"><a href=\"/index.html\">Home 1</a></li>
                                    <li><a href=\"/index-2.html\">Home 2</a></li>
                                    <li><a href=\"/index-3.html\">Home 3</a></li>
                                    <li><a href=\"/index-4.html\">Home 4</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Firma<i class=\"fa fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <ul>
                                    <li><a href=\"/about.html\">About Us</a></li>
                                    <li><a href=\"/service.html\">Services</a></li>
                                    <li><a href=\"/career.html\">Career</a></li>
                                    <li><a href=\"/testimonial.html\">Testimonials</a></li>
                                    <li><a href=\"/faq.html\">Faq</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <i class=\"fa fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <ul>
                                    <li><a href=\"/portfolio-classic.html\">Portfolio Classic</a></li>
                                    <li><a href=\"/portfolio-static.html\">Portfolio Static</a></li>
                                    <li><a href=\"/portfolio-item.html\">Portfolio Single</a></li>
                                </ul>
                            </div>
                        </li>
";
        // line 148
        echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <i class=\"fa fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <ul>
                                    <li><a href=\"/blog-rightside.html\">Blog with Sidebar</a></li>
                                    <li><a href=\"/blog-item.html\">Blog Single</a></li>
                                </ul>
                            </div>
                        </li>
";
        // line 166
        echo "                        <li><a href=\"/contact.html\">Kontakt</a></li>
                    </ul>
                </nav><!--/ Navigation end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </header><!--/ Header end -->

    <!-- Slider start -->
    <section id=\"home\" class=\"no-padding\">
        <div id=\"main-slide\" class=\"cd-hero\">
            <ul class=\"cd-hero-slider\">
                <li class=\"selected\">
                    <div class=\"overlay2\">
                        <img class=\"\" src=\"/images/slider/bg1.jpg\" alt=\"slider\">
                    </div>
                    <div class=\"cd-full-width\">
                        <h2>Rozwiąż NATYCHMIAST swój problem IT. My znajdziemy ludzi i sposób.</h2>
                        <h3>poraz pierwszy całkowicie po polsku i wspierając Polske. </h3>
                        <a href=\"/trial\" class=\"btn btn-primary solid cd-btn\">Zleć problem</a>
                        <a href=\"/post-job\" class=\"btn btn-primary white cd-btn\">Rozwiąż problem</a>
                    </div> <!-- .cd-full-width -->
                </li>
                <li>
                    <div class=\"overlay2\">
                        <img class=\"\" src=\"/images/slider/bg2.jpg\" alt=\"slider\">
                    </div>
                    <div class=\"cd-half-width\">
                        <h2>How Big Can You Dream?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                        <a href=\"#0\" class=\"cd-btn btn btn-primary solid\">Take a Tour</a>
                    </div> <!-- .cd-half-width -->

                    <div class=\"cd-half-width cd-img-container\">
                        <img src=\"/images/slider/bg-thumb1.png\" alt=\"\">
                    </div> <!-- .cd-half-width.cd-img-container -->
                </li>
                <li>
                    <div class=\"overlay2\">
                        <img class=\"\" src=\"/images/slider/bg3.jpg\" alt=\"slider\">
                    </div>
                    <div class=\"cd-half-width cd-img-container img-right\">
                        <img src=\"/images/slider/bg-thumb2.png\" alt=\"\">
                    </div> <!-- .cd-half-width.cd-img-container -->
                    <div class=\"cd-half-width\">
                        <h2>Your Challenge is Our Progress</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                        <a href=\"#0\" class=\"cd-btn btn btn-primary white\">Start</a>
                        <a href=\"#0\" class=\"cd-btn btn secondary btn-primary solid\">Learn More</a>
                    </div> <!-- .cd-half-width -->
                </li>
                <li class=\"cd-bg-video\">
                    <div class=\"cd-full-width\">
                        <h2>WE ARE HERE TO MAKE IT HAPPEN</h2>
                        <h3>We Making Difference To Great Things Possible</h3>

                        <a href=\"#0\" class=\"cd-btn btn btn-primary solid\">Learn more</a>
                    </div> <!-- .cd-full-width -->

                    <div class=\"cd-bg-video-wrapper\" data-video=\"videos/video\">
                        <!-- video element will be loaded using jQuery -->
                    </div> <!-- .cd-bg-video-wrapper -->
                </li>
            </ul> <!--/ cd-hero-slider -->

            <!--\t\t<div class=\"cd-slider-nav\">-->
            <!--\t\t\t<nav>-->
            <!--\t\t\t\t<span class=\"cd-marker item-1\"></span>-->
            <!--\t\t\t\t<ul>-->
            <!--\t\t\t\t\t<li class=\"selected\"><a href=\"#0\"><i class=\"fa fa-bicycle\"></i> Invent</a></li>-->
            <!--\t\t\t\t\t<li><a href=\"#0\"><i class=\"fa fa-hotel\"></i> Dream</a></li>-->
            <!--\t\t\t\t\t<li><a href=\"#0\"><i class=\"fa fa-android\"></i> Tech</a></li>-->
            <!--\t\t\t\t\t<li class=\"video\"><a href=\"#0\"><i class=\"fa fa-video-camera\"></i> Video</a></li>-->
            <!--\t\t\t\t</ul>-->
            <!--\t\t\t</nav> -->
            <!--\t\t</div> &lt;!&ndash; .cd-slider-nav &ndash;&gt;-->

        </div><!--/ Main slider end -->
    </section> <!--/ Slider end -->


    <!-- Service box start -->
    <section id=\"service\" class=\"service angle\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 heading\">
                    <span class=\"title-icon pull-left\"><i class=\"fa fa-cogs\"></i></span>
                    <h2 class=\"title\">Czym się zajmujemy <span class=\"title-desc\">Możemy Ci pomóc miedzy innymi w:</span></h2>
                </div>
            </div><!-- Title row end -->

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"col-md-3 col-sm-3 wow fadeInDown\" data-wow-delay=\".5s\">
                        <div class=\"service-content text-center\">
                            <span class=\"service-icon icon-pentagon\"><i class=\"fa fa-tachometer\"></i></span>
                            <h3>Design</h3>
                            <p>Potrzebujesz projektu graficznego / wizualizacji dla Twoje aplikacji bądz firmy?</p>
                        </div>
                    </div><!--/ End first service -->

                    <div class=\"col-md-3 col-sm-3 wow fadeInDown\" data-wow-delay=\".8s\" >
                        <div class=\"service-content text-center\">
                            <span class=\"service-icon icon-pentagon\"><i class=\"fa fa-android\"></i></span>
                            <h3>Programowanie</h3>
                            <p>Potrzebujesz dokonczyć projekt? Chcesz zlecic część pracy? Masz pojedyncze niedokończone zadania? Chcesz zrobić swój projekt? Chcesz odrazu mieć programistów i nie męczyć się z ich weryfikacją?</p>
                        </div>

                    </div><!--/ End Second service -->

                    <div class=\"col-md-3 col-sm-3 wow fadeInDown\" data-wow-delay=\"1.1s\">
                        <div class=\"service-content text-center\">
                            <span class=\"service-icon icon-pentagon\"><i class=\"fa fa-shopping-cart\"></i></span>
                            <h3>Sprzęt</h3>
                            <p>Nie działa coś w Twoim komputerze? Potrzebujesz ustawić sprzęt sieciowy ? Problem sprzetowy paraliżuje Twoją prace ?  </p>
                        </div>
                    </div><!--/ End Third service -->

                    <div class=\"col-md-3 col-sm-3 wow fadeInDown\" data-wow-delay=\"1.4s\">
                        <div class=\"service-content text-center\">
                            <span class=\"service-icon icon-pentagon\"><i class=\"fa fa-lightbulb-o\"></i></span>
                            <h3>Porady</h3>
                            <p>Masz problem it ale jesteś ekspertem w innej branzy? Chciałbyś doradzić się fachowca?</p>
                        </div>
                    </div><!--/ End 4th service -->
                </div>
            </div><!-- Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Service box end -->

    <!-- Portfolio start -->
    <section id=\"portfolio\" class=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 heading\">
                    <span class=\"title-icon classic pull-left\"><i class=\"fa fa-suitcase\"></i></span>
                    <h2 class=\"title classic\">Przykłady realizacji</h2>
                </div>
            </div> <!-- Title row end -->

            <!--Isotope filter start -->
            <div class=\"row text-right\">
                <div class=\"isotope-nav\" data-isotope-nav=\"isotope\">
                    <ul>
                        <li><a href=\"#\" class=\"active\" data-filter=\"*\">Wszystkie</a></li>
                        <li><a href=\"#\" data-filter=\".web-design\">Aplikacje internetowe</a></li>
                        <li><a href=\"#\" data-filter=\".development\">Design</a></li>
                        <li><a href=\"#\" data-filter=\".joomla\">Konsulting</a></li>
                        <li><a href=\"#\" data-filter=\".wordpress\">Sprzęt komputerowy</a></li>
                    </ul>
                </div>
            </div><!-- Isotope filter end -->
        </div>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div id=\"isotope\" class=\"isotope\">
                    <div class=\"col-sm-3 web-design isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"/images/portfolio/portfolio1.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Startup Business</h3>
                                    <a class=\"link icon-pentagon\" href=\"/portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"/images/portfolio/portfolio-bg1.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 development isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"/images/portfolio/portfolio2.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Easy to Lanunch</h3>
                                    <a class=\"link icon-pentagon\" href=\"portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"images/portfolio/portfolio-bg2.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 joomla isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"images/portfolio/portfolio3.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Your Business</h3>
                                    <a class=\"link icon-pentagon\" href=\"portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"images/portfolio/portfolio-bg3.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 wordpress isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"images/portfolio/portfolio4.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Prego Match</h3>
                                    <a class=\"link icon-pentagon\" href=\"portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"images/portfolio/portfolio-bg4.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 joomla isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"images/portfolio/portfolio5.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Fashion Brand</h3>
                                    <a class=\"link icon-pentagon\" href=\"portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"images/portfolio/portfolio-bg5.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 development isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"/images/portfolio/portfolio6.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>The Insidage</h3>
                                    <a class=\"link icon-pentagon\" href=\"/portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"/images/portfolio/portfolio-bg1.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 development isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"/images/portfolio/portfolio7.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Light Carpet</h3>
                                    <a class=\"link icon-pentagon\" href=\"/portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"/images/portfolio/portfolio-bg2.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 development isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"/images/portfolio/portfolio8.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Amazing Keyboard</h3>
                                    <a class=\"link icon-pentagon\" href=\"/portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"/images/portfolio/portfolio-bg3.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->
                </div><!-- Isotope content end -->
            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- Portfolio end -->

    <!-- Counter Strat -->
    <section class=\"ts_counter no-padding\">
        <div class=\"container-fluid\">
            <div class=\"row facts-wrapper wow fadeInLeft text-center\">
                <div class=\"facts one col-md-3 col-sm-6\">
                    <span class=\"facts-icon\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"facts-num\">
                        <span class=\"counter\">1200</span>
                    </div>
                    <h3>Klientów</h3>
                </div>

                <div class=\"facts two col-md-3 col-sm-6\">
                    <span class=\"facts-icon\"><i class=\"fa fa-institution\"></i></span>
                    <div class=\"facts-num\">
                        <span class=\"counter\">1277</span>
                    </div>
                    <h3>Rozwiązanych problemów IT</h3>
                </div>

                <div class=\"facts three col-md-3 col-sm-6\">
                    <span class=\"facts-icon\"><i class=\"fa fa-suitcase\"></i></span>
                    <div class=\"facts-num\">
                        <span class=\"counter\">869</span>
                    </div>
                    <h3>Zrealizowanych projektów</h3>
                </div>

                <div class=\"facts four col-md-3 col-sm-6\">
                    <span class=\"facts-icon\"><i class=\"fa fa-trophy\"></i></span>
                    <div class=\"facts-num\">
                        <span class=\"counter\">76</span>
                    </div>
                    <h3>Opinie zadowolonych ludzi</h3>
                </div>

            </div>
        </div><!--/ Container end -->
    </section><!--/ Counter end -->

    <!-- Feature box start -->
    <section id=\"feature\" class=\"feature\">
        <div class=\"container\">
            <div class=\"row\">
    ";
        // line 475
        echo "    ";
        // line 476
        echo "    ";
        // line 477
        echo "    ";
        // line 478
        echo "    ";
        // line 479
        echo "    ";
        // line 480
        echo "    ";
        // line 481
        echo "
    ";
        // line 483
        echo "    ";
        // line 484
        echo "    ";
        // line 485
        echo "    ";
        // line 486
        echo "    ";
        // line 487
        echo "    ";
        // line 488
        echo "    ";
        // line 489
        echo "
    ";
        // line 491
        echo "    ";
        // line 492
        echo "    ";
        // line 493
        echo "    ";
        // line 494
        echo "    ";
        // line 495
        echo "    ";
        // line 496
        echo "    ";
        // line 497
        echo "            </div><!-- Content row end -->

            <div class=\"gap-40\"></div>

            <div class=\"row\">
                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">
                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-newspaper-o\"></i></span>
                    <div class=\"feature-content\">
                        <h3>Branża IT</h3>
                        <p>Eksperci w branży it. Nie robimy wszystkiego i niczego.</p>
                    </div>
                </div><!--/ End 1st featurebox -->

                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">
                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-desktop\"></i></span>
                    <div class=\"feature-content\">
                        <h3>Dopasowanie</h3>
                        <p>Konketnie pod Twoje potrzeby.</p>
                    </div>
                </div><!--/ End 2nd featurebox -->

                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">
                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-pagelines\"></i></span>
                    <div class=\"feature-content\">
                        <h3>Lekkość i szybkość realizacji.</h3>
                        <p>Szybki czas reakcji. Ty się zrelaksuj.</p>
                    </div>
                </div><!--/ End 3rd featurebox -->

            </div><!-- Content row end -->

            <div class=\"gap-40\"></div>

            <div class=\"row\">


                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">
                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-diamond\"></i></span>
                    <div class=\"feature-content\">
                        <h3>Jakość</h3>
                        <p>Dobrze zrobiona robota.</p>
                    </div>
                </div><!--/ End first featurebox -->

                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">
                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-whatsapp\"></i></span>
                    <div class=\"feature-content\">
                        <h3>24/7 Wsparcie</h3>
                        <p>Jeśli masz jakąś wątpliwość bądz chcesz zobaczyc status realizacji.</p>
                    </div>
                </div><!--/ End first featurebox -->
            </div><!-- Content row end -->

        </div><!--/ Container end -->
    </section><!--/ Feature box end -->


    <section id=\"image-block\" class=\"image-block no-padding\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 ts-padding\" style=\"height:650px;background:url(images/image-block-bg.jpg) 50% 50% / cover no-repeat;\">
                </div>
                <div class=\"col-md-6 ts-padding img-block-right\">
                    <div class=\"img-block-head text-center\">
                        <h2>Dowiedz się więcej o NAS</h2>
                        <h3>Czemu warto nas wybrać?</h3>
                        <p>Jesteśmy 100 % polską firmą z polskim kapitałem. Wspieramy naszych. Opieramy się na zaufaniu i dbaniu o naszego klienta. Zawsze gramy uczciwie.
                        </p>
                    </div>

                    <div class=\"gap-30\"></div>

                    <div class=\"image-block-content\">
                        <span class=\"feature-icon pull-left\" ><i class=\"fa fa-bicycle\"></i></span>
                        <div class=\"feature-content\">
                            <h3>Masa ekspertów IT</h3>
                            <p>Do wyboru do koloru, gotowi aby Ci pomóc w mgnieniu oka. Zapomnij o marazmie.</p>
                        </div>
                    </div><!--/ End 1st block -->

                    <div class=\"image-block-content\">
                        <span class=\"feature-icon pull-left\" ><i class=\"fa fa-diamond\"></i></span>
                        <div class=\"feature-content\">
                            <h3>Jakość</h3>
                            <p>Płacisz zawsze za jakość i dobrze zrobioną robotę. Zwrot kosztów w przypadku braku satysfakcjii z usługi</p>
                        </div>
                    </div><!--/ End 1st block -->

                    <div class=\"image-block-content\">
                        <span class=\"feature-icon pull-left\" ><i class=\"fa fa-street-view\"></i></span>
                        <div class=\"feature-content\">
                            <h3>Ciągle wsparcie klienta</h3>
                            <p>Dzwonisz kiedy chcesz i pomagamy odrazu. Miło i przyjacielsko.</p>
                        </div>
                    </div><!--/ End 1st block -->

                </div>
            </div>
        </div>
    </section><!--/ Image block end -->


    <!-- Team start -->
    <section id=\"team\" class=\"team\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 heading\">
                    <span class=\"title-icon pull-left\"><i class=\"fa fa-weixin\"></i></span>
                    <h2 class=\"title\">Poznaj założycieli naszej firmy<span class=\"title-desc\">Byli managerowie i eksperci w branzy IT.</span></h2>
                </div>
            </div><!-- Title row end -->

            <div class=\"row text-center\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team wow slideInLeft\">
                        <div class=\"img-hexagon\">
                            <img src=\"/images/foto4.jpg\" alt=\"\">
                            <span class=\"img-top\"></span>
                            <span class=\"img-bottom\"></span>
                        </div>
                        <div class=\"team-content\">
                            <h3>Hubert</h3>
                            <p>czlonek zarządu / rozwój biznesu</p>
                            <p>Przez wiele lat pracował jako programista dla największych światowych korporacji. Zawsze marzył robić coś dla Polski i udało się.</p>
                            <div class=\"team-social\">
                                <a class=\"fb\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a class=\"twt\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a class=\"gplus\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                <a class=\"linkdin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a class=\"dribble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Team 1 end -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team wow slideInLeft\">
                        <div class=\"img-hexagon\">
                            <img src=\"/images/team/team2.jpg\" alt=\"\">
                            <span class=\"img-top\"></span>
                            <span class=\"img-bottom\"></span>
                        </div>
                        <div class=\"team-content\">
                            <h3>Paweł</h3>
                            <p>członek zarządu / rozwój biznesu</p>
                            <p>Pracował wiele lat jako adwokat. Nietuzinkowy, nieszablonowy, profesjonalny w każdym calu.</p>
                            <div class=\"team-social\">
                                <a class=\"fb\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a class=\"twt\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a class=\"gplus\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                <a class=\"linkdin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a class=\"dribble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Team 2 end -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team wow slideInRight\">
                        <div class=\"img-hexagon\">
                            <img src=\"images/team/team3.jpg\" alt=\"\">
                            <span class=\"img-top\"></span>
                            <span class=\"img-bottom\"></span>
                        </div>
                        <div class=\"team-content\">
                            <h3>Malgorzata</h3>
                            <p>wizerunek / media</p>
                            <p>Małgorzata pracowała jako dziennikarka w mediach wspierających Polske i Polskość.</p>
                            <div class=\"team-social\">
                                <a class=\"fb\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a class=\"twt\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a class=\"gplus\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                <a class=\"linkdin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a class=\"dribble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Team 3 end -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team animate wow slideInRight\">
                        <div class=\"img-hexagon\">
                            <img src=\"images/team/team4.jpg\" alt=\"\">
                            <span class=\"img-top\"></span>
                            <span class=\"img-bottom\"></span>
                        </div>
                        <div class=\"team-content\">
                            <h3>Tomasz</h3>
                            <p>marketing internetowy / social media</p>
                            <p>Specjalista od marketingu produktów i rozwoju social mediów. Bez niego nie usłyszelibyście o nas.</p>
                            <div class=\"team-social\">
                                <a class=\"fb\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a class=\"twt\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a class=\"gplus\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                <a class=\"linkdin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a class=\"dribble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Team 4 end -->
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Team end -->

    <!-- Parallax 1 start -->
    <section class=\"parallax parallax1\">
        <div class=\"parallax-overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h2>Wejdź na wyższy level zleceń IT!</h2>
                    <h3>Zacznij teraz.</h3>
                    <p>
                        <a href=\"#\" class=\"btn btn-primary white\">Podejmij zlecenie</a>
                        <a href=\"#\" class=\"btn btn-primary solid\">Zaoferuj zlecenie</a>
                    </p>
                </div>
            </div>
        </div><!-- Container end -->
    </section><!-- Parallax 1 end -->

    <!-- Pricing table start -->
    <section id=\"pricing\" class=\"pricing\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 heading\">
                    <span class=\"title-icon pull-left\"><i class=\"fa fa-university\"></i></span>
                    <h2 class=\"title\">Nasz cennik<span class=\"title-desc\">Pomaganie ludziom to nasza pasja i misja.</span></h2>
                </div>
            </div><!-- Title row end -->
            <div class=\"row\">
                <!-- plan start -->
                <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\".5s\">
                    <div class=\"plan text-center\">
                        <span class=\"plan-name\">Darmowy</span>
                        <p class=\"plan-price\"><sup class=\"currency\">PLN</sup><strong>0</strong><sub>.00</sub></p>
                        <ul class=\"list-unstyled\">
                            <li>1 problem do rozwiązania</li>
                            <li>szybka realizacja</li>
                            <li>wsparcie 12/7</li>
                        </ul>
                        <a class=\"btn btn-primary\" href=\"/trial\">Wybróbuj za darmo</a>
                    </div>
                </div><!-- plan end -->

                <!-- plan start -->
                <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"1s\">
                    <div class=\"plan text-center\">
                        <span class=\"plan-name\">Standardowy</span>
                        <p class=\"plan-price\"><sup class=\"currency\">PLN</sup><strong>25</strong><sub>.00</sub></p>
                        <ul class=\"list-unstyled\">
                            <li>1 problem do rozwiązania</li>
                            <li>szybka realizacja</li>
                            <li>wsparcie 12/7</li>
                        </ul>
                        <a class=\"btn btn-primary\" href=\"#.\">KUP</a>
                    </div>
                </div><!-- plan end -->

                <!-- plan start -->
                <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"1.4s\">
                    <div class=\"plan text-center featured\">
                        <span class=\"plan-name\">Luksusowy</span>
                        <p class=\"plan-price\"><sup class=\"currency\">PLN</sup><strong>50</strong><sub>.00</sub></p>
                        <ul class=\"list-unstyled\">
                            <li>2 problemy do rozwiązania</li>
                            <li>ultra szybka realizacja</li>
                            <li>wsparcie 24/7</li>
                        </ul>
                        <a class=\"btn btn-primary\" href=\"#.\">KUP</a>
                    </div>
                </div><!-- plan end -->

                <!-- plan start -->
                <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"1.6s\">
                    <div class=\"plan text-center\">
                        <span class=\"plan-name\">Królewski</span>
                        <p class=\"plan-price\"><sup class=\"currency\">PLN</sup><strong>100</strong><sub>.00</sub></p>
                        <ul class=\"list-unstyled\">
                            <li>3 problemy do rozwiązania</li>
                            <li>ultra szybka realizacja</li>
                            <li>rozmowa z ekspertem</li>
                            <li>wsparcie 24/7</li>
                        </ul>
                        <a class=\"btn btn-primary\" href=\"#.\">KUP</a>
                    </div>
                </div><!-- plan end -->
            </div><!--/ Content row end -->
        </div><!--/  Container end-->
    </section><!--/ Pricing table end -->


    <!-- Testimonial start-->
    <section class=\"testimonial parallax parallax2\">
        <div class=\"parallax-overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"testimonial-carousel\" class=\"owl-carousel owl-theme text-center testimonial-slide\">
                    <div class=\"item\">
                        <div class=\"testimonial-thumb\">
                            <img src=\"/images/team/testimonial1.jpg\" alt=\"testimonial\">
                        </div>
                        <div class=\"testimonial-content\">
                            <p class=\"testimonial-text\">
                                Polisoft to rewolucja w branży IT. Wreszcie cos Polskiego, dla nas dla prawdziwych patriotów.
                            </p>
                            <h3 class=\"name\">Karolina Pajączkowska<span>Magazyn komputerowy SPIDER WEB</span></h3>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimonial-thumb\">
                            <img src=\"/images/team/testimonial2.jpg\" alt=\"testimonial\">
                        </div>
                        <div class=\"testimonial-content\">
                            <p class=\"testimonial-text\">
                                Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                            <h3 class=\"name\">Narek Bedros<span>Sr. Manager</span></h3>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimonial-thumb\">
                            <img src=\"/images/team/testimonial3.jpg\" alt=\"testimonial\">
                        </div>
                        <div class=\"testimonial-content\">
                            <p class=\"testimonial-text\">
                                Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                            <h3 class=\"name\">Taline Lucine<span>Sales Manager</span></h3>
                        </div>
                    </div>
                </div><!--/ Testimonial carousel end-->
            </div><!--/ Row end-->
        </div><!--/  Container end-->
    </section><!--/ Testimonial end-->


    <!-- Clients start -->
    <section id=\"clients\" class=\"clients\">
        <div class=\"container\">
            <div class=\"row wow fadeInLeft\">
                <div id=\"client-carousel\" class=\"col-sm-12 owl-carousel owl-theme text-center client-carousel\">
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client1.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client2.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client3.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client4.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client5.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client6.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client7.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client8.png\" alt=\"client\">
                        </a>
                    </figure>
                </div><!-- Owl carousel end -->
            </div><!-- Main row end -->
        </div><!--/ Container end -->
    </section><!--/ Clients end -->


    <!-- Footer start -->
    <footer id=\"footer\" class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-12 footer-widget\">
                    <h3 class=\"widget-title\">Z naszego bloga</h3>
                    <div class=\"latest-post-items media\">
                        <div class=\"latest-post-content media-body\">
                            <h4><a href=\"#\">Architektura DDD w projektach progarmistycznych</a></h4>
                            <p class=\"post-meta\">
                                <span class=\"date\"><i class=\"icon icon-calendar\"></i> Mar 15, 2023</span>
                            </p>
                        </div>
                    </div><!-- 1st Latest Post end -->

                    <div class=\"latest-post-items media\">
                        <div class=\"latest-post-content media-body\">
                            <h4><a href=\"#\">Nowe trendy w IT</a></h4>
                            <p class=\"post-meta\">
                                <span class=\"date\"><i class=\"icon icon-calendar\"></i> Mar 15, 2023</span>
                                <span class=\"post-meta-comments\"><i class=\"icon icon-bubbles4\"></i></span>
                            </p>
                        </div>
                    </div><!-- 2nd Latest Post end -->

                    <div class=\"latest-post-items media\">
                        <div class=\"latest-post-content media-body\">
                            <h4><a href=\"#\">Wywiad z ekspertem komputerów kwantowych</a></h4>
                            <p class=\"post-meta\">
                                <span class=\"date\"><i class=\"icon icon-calendar\"></i> Apr 17, 2023</span>
                                <span class=\"post-meta-comments\"><i class=\"icon icon-bubbles4\"></i></span>
                            </p>
                        </div>
                    </div><!-- 3rd Latest Post end -->

                </div><!--/ End Recent Posts-->


                <div class=\"col-md-4 col-sm-12 footer-widget\">
                    <h3 class=\"widget-title\">Jak pracujemy</h3>

                    <div class=\"img-gallery\">
                        <div class=\"img-container\">
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/1.jpg\">
                                <img src=\"/images/gallery/1.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/2.jpg\">
                                <img src=\"/images/gallery/2.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/3.jpg\">
                                <img src=\"/images/gallery/3.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/4.jpg\">
                                <img src=\"/images/gallery/4.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/5.jpg\">
                                <img src=\"/images/gallery/5.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/6.jpg\">
                                <img src=\"/images/gallery/6.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/6.jpg\">
                                <img src=\"/images/gallery/7.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/6.jpg\">
                                <img src=\"/images/gallery/8.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/6.jpg\">
                                <img src=\"/images/gallery/9.jpg\" alt=\"\">
                            </a>
                        </div>
                    </div>
                </div><!--/ end flickr -->

                <div class=\"col-md-3 col-sm-12 footer-widget footer-about-us\">
                    <h3 class=\"widget-title\">Gdzie jest nasze biuro?</h3>
                    <h4>Adres</h4>
                    <p>Plac Europejski 1, Warszawa, Polska</p>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h4>Email:</h4>
                            <p>polisoftbusiness@gmail.com</p>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class=\"col-md-6\">
                            <h4>Telefon:</h4>
                            <p>531 730 179</p>
                        </div>
                    </div>
                    <form action=\"#\" role=\"form\">
                        <div class=\"input-group subscribe\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" required=\"\">
                            <span class=\"input-group-addon\">
                              <button class=\"btn\" type=\"submit\"><i class=\"fa fa-envelope-o\"> </i></button>
                            </span>
                        </div>
                    </form>
                </div><!--/ end about us -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </footer><!-- Footer end -->


    <!-- Copyright start -->
    <section id=\"copyright\" class=\"copyright angle\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <ul class=\"footer-social unstyled\">
                        <li>
                            <a title=\"Twitter\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-twitter\"></i></span>
                            </a>
                            <a title=\"Facebook\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-facebook\"></i></span>
                            </a>
                            <a title=\"Google+\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-google-plus\"></i></span>
                            </a>
                            <a title=\"linkedin\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-linkedin\"></i></span>
                            </a>
                            <a title=\"Pinterest\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-pinterest\"></i></span>
                            </a>
                            <a title=\"Skype\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-skype\"></i></span>
                            </a>
                            <a title=\"Dribble\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-dribbble\"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--/ Row end -->
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <div class=\"copyright-info\">
                        &copy; 2023 <span>Polisoft. Wszystkie prawa zastrzezone.</a></span>
                    </div>
                </div>
            </div><!--/ Row end -->
            <div id=\"back-to-top\" data-spy=\"affix\" data-offset-top=\"10\" class=\"back-to-top affix\">
                <button class=\"btn btn-primary\" title=\"Back to Top\"><i class=\"fa fa-angle-double-up\"></i></button>
            </div>
        </div><!--/ Container end -->
    </section><!--/ Copyright end -->

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type=\"text/javascript\" src=\"/js/jquery.js\"></script>
    <!-- Bootstrap jQuery -->
    <script type=\"text/javascript\" src=\"/js/bootstrap.min.js\"></script>
    <!-- Style Switcher -->
    <script type=\"text/javascript\" src=\"/js/style-switcher.js\"></script>
    <!-- Owl Carousel -->
    <script type=\"text/javascript\" src=\"/js/owl.carousel.js\"></script>
    <!-- PrettyPhoto -->
    <script type=\"text/javascript\" src=\"/js/jquery.prettyPhoto.js\"></script>
    <!-- Bxslider -->
    <script type=\"text/javascript\" src=\"/js/jquery.flexslider.js\"></script>
    <!-- CD Hero slider -->
    <script type=\"text/javascript\" src=\"/js/cd-hero.js\"></script>
    <!-- Isotope -->
    <script type=\"text/javascript\" src=\"/js/isotope.js\"></script>
    <script type=\"text/javascript\" src=\"/js/ini.isotope.js\"></script>
    <!-- Wow Animation -->
    <script type=\"text/javascript\" src=\"/js/wow.min.js\"></script>
    <!-- SmoothScroll -->
    <script type=\"text/javascript\" src=\"/js/smoothscroll.js\"></script>
    <!-- Eeasing -->
    <script type=\"text/javascript\" src=\"/js/jquery.easing.1.3.js\"></script>
    <!-- Counter -->
    <script type=\"text/javascript\" src=\"/js/jquery.counterup.min.js\"></script>
    <!-- Waypoints -->
    <script type=\"text/javascript\" src=\"/js/waypoints.min.js\"></script>
    <!-- Template custom -->
    <script type=\"text/javascript\" src=\"/js/custom.js\"></script>
</div><!-- Body inner end -->
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  542 => 497,  540 => 496,  538 => 495,  536 => 494,  534 => 493,  532 => 492,  530 => 491,  527 => 489,  525 => 488,  523 => 487,  521 => 486,  519 => 485,  517 => 484,  515 => 483,  512 => 481,  510 => 480,  508 => 479,  506 => 478,  504 => 477,  502 => 476,  500 => 475,  190 => 166,  179 => 148,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset=\"utf-8\">
    <title>Polisoft</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <!-- Favicons
    ================================================== -->
    <link rel=\"icon\" href=\"/img/favicon/favicon-32x32.png\" type=\"image/x-icon\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"/img/favicon/favicon-144x144.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"/img/favicon/favicon-72x72.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"/img/favicon/favicon-54x54.png\">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <!-- Template styles-->
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <!-- Responsive styles-->
    <link rel=\"stylesheet\" href=\"/css/responsive.css\">
    <!-- FontAwesome -->
    <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
    <!-- Animation -->
    <link rel=\"stylesheet\" href=\"/css/animate.css\">
    <!-- Prettyphoto -->
    <link rel=\"stylesheet\" href=\"/css/prettyPhoto.css\">
    <!-- Owl Carousel -->
    <link rel=\"stylesheet\" href=\"/css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"/css/owl.theme.css\">
    <!-- Flexslider -->
    <link rel=\"stylesheet\" href=\"/css/flexslider.css\">
    <!-- Flexslider -->
    <link rel=\"stylesheet\" href=\"/css/cd-hero.css\">
    <!-- Style Swicther -->
    <link id=\"style-switch\" href=\"/css/presets/preset3.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src=\"/js/html5shiv.js\"></script>
    <script src=\"/js/respond.min.js\"></script>

    <![endif]-->
    <style>
        .navbar-brand.navbar-bg {
            background: none;
        }
    </style>
</head>

<body>

<!-- Style switcher start -->
<div class=\"style-switch-wrapper\">
    <div class=\"style-switch-button\">
        <i class=\"fa fa-sliders\"></i>
    </div>
    <h3>Style Options</h3>
    <button id=\"preset1\" class=\"btn btn-sm btn-primary\"></button>
    <button id=\"preset2\" class=\"btn btn-sm btn-primary\"></button>
    <button id=\"preset3\" class=\"btn btn-sm btn-primary\"></button>
    <button id=\"preset4\" class=\"btn btn-sm btn-primary\"></button>
    <button id=\"preset5\" class=\"btn btn-sm btn-primary\"></button>
    <button id=\"preset6\" class=\"btn btn-sm btn-primary\"></button>
    <br/><br/>
    <a class=\"btn btn-sm btn-primary close-styler pull-right\">Close X</a>
</div>
<!-- Style switcher end -->

<div class=\"body-inner\">

    <!-- Header start -->
    <header id=\"header\" class=\"navbar-fixed-top header\" role=\"banner\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Logo start -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <div class=\"navbar-brand navbar-bg\">
                        <a href=\"index.html\">
                            <img class=\"img-responsive\" src=\"/images/polisoft.png\" >
                        </a>
                    </div>
                </div><!--/ Logo end -->
                <nav class=\"collapse navbar-collapse clearfix\" role=\"navigation\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown active\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Glówna <i class=\"fa fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <ul>
                                    <li class=\"active\"><a href=\"/index.html\">Home 1</a></li>
                                    <li><a href=\"/index-2.html\">Home 2</a></li>
                                    <li><a href=\"/index-3.html\">Home 3</a></li>
                                    <li><a href=\"/index-4.html\">Home 4</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Firma<i class=\"fa fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <ul>
                                    <li><a href=\"/about.html\">About Us</a></li>
                                    <li><a href=\"/service.html\">Services</a></li>
                                    <li><a href=\"/career.html\">Career</a></li>
                                    <li><a href=\"/testimonial.html\">Testimonials</a></li>
                                    <li><a href=\"/faq.html\">Faq</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <i class=\"fa fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <ul>
                                    <li><a href=\"/portfolio-classic.html\">Portfolio Classic</a></li>
                                    <li><a href=\"/portfolio-static.html\">Portfolio Static</a></li>
                                    <li><a href=\"/portfolio-item.html\">Portfolio Single</a></li>
                                </ul>
                            </div>
                        </li>
{#                        <li class=\"dropdown\">#}
{#                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages <i class=\"fa fa-angle-down\"></i></a>#}
{#                            <div class=\"dropdown-menu\">#}
{#                                <ul>#}
{#                                    <li><a href=\"/team.html\">Our Team</a></li>#}
{#                                    <li><a href=\"/about2.html\">About Us - 2</a></li>#}
{#                                    <li><a href=\"/service2.html\">Services - 2</a></li>#}
{#                                    <li><a href=\"/service-single.html\">Services Single</a></li>#}
{#                                    <li><a href=\"/pricing.html\">Pricing Table</a></li>#}
{#                                    <li><a href=\"/404.html\">404 Page</a></li>#}
{#                                </ul>#}
{#                            </div>#}
{#                        </li>#}
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <i class=\"fa fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <ul>
                                    <li><a href=\"/blog-rightside.html\">Blog with Sidebar</a></li>
                                    <li><a href=\"/blog-item.html\">Blog Single</a></li>
                                </ul>
                            </div>
                        </li>
{#                        <li class=\"dropdown\">#}
{#                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Features <i class=\"fa fa-angle-down\"></i></a>#}
{#                            <div class=\"dropdown-menu\">#}
{#                                <ul>#}
{#                                    <li><a href=\"/typography.html\">Typography</a></li>#}
{#                                    <li><a href=\"/elements.html\">Elements</a></li>#}
{#                                </ul>#}
{#                            </div>#}
{#                        </li>#}
                        <li><a href=\"/contact.html\">Kontakt</a></li>
                    </ul>
                </nav><!--/ Navigation end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </header><!--/ Header end -->

    <!-- Slider start -->
    <section id=\"home\" class=\"no-padding\">
        <div id=\"main-slide\" class=\"cd-hero\">
            <ul class=\"cd-hero-slider\">
                <li class=\"selected\">
                    <div class=\"overlay2\">
                        <img class=\"\" src=\"/images/slider/bg1.jpg\" alt=\"slider\">
                    </div>
                    <div class=\"cd-full-width\">
                        <h2>Rozwiąż NATYCHMIAST swój problem IT. My znajdziemy ludzi i sposób.</h2>
                        <h3>poraz pierwszy całkowicie po polsku i wspierając Polske. </h3>
                        <a href=\"/trial\" class=\"btn btn-primary solid cd-btn\">Zleć problem</a>
                        <a href=\"/post-job\" class=\"btn btn-primary white cd-btn\">Rozwiąż problem</a>
                    </div> <!-- .cd-full-width -->
                </li>
                <li>
                    <div class=\"overlay2\">
                        <img class=\"\" src=\"/images/slider/bg2.jpg\" alt=\"slider\">
                    </div>
                    <div class=\"cd-half-width\">
                        <h2>How Big Can You Dream?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                        <a href=\"#0\" class=\"cd-btn btn btn-primary solid\">Take a Tour</a>
                    </div> <!-- .cd-half-width -->

                    <div class=\"cd-half-width cd-img-container\">
                        <img src=\"/images/slider/bg-thumb1.png\" alt=\"\">
                    </div> <!-- .cd-half-width.cd-img-container -->
                </li>
                <li>
                    <div class=\"overlay2\">
                        <img class=\"\" src=\"/images/slider/bg3.jpg\" alt=\"slider\">
                    </div>
                    <div class=\"cd-half-width cd-img-container img-right\">
                        <img src=\"/images/slider/bg-thumb2.png\" alt=\"\">
                    </div> <!-- .cd-half-width.cd-img-container -->
                    <div class=\"cd-half-width\">
                        <h2>Your Challenge is Our Progress</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                        <a href=\"#0\" class=\"cd-btn btn btn-primary white\">Start</a>
                        <a href=\"#0\" class=\"cd-btn btn secondary btn-primary solid\">Learn More</a>
                    </div> <!-- .cd-half-width -->
                </li>
                <li class=\"cd-bg-video\">
                    <div class=\"cd-full-width\">
                        <h2>WE ARE HERE TO MAKE IT HAPPEN</h2>
                        <h3>We Making Difference To Great Things Possible</h3>

                        <a href=\"#0\" class=\"cd-btn btn btn-primary solid\">Learn more</a>
                    </div> <!-- .cd-full-width -->

                    <div class=\"cd-bg-video-wrapper\" data-video=\"videos/video\">
                        <!-- video element will be loaded using jQuery -->
                    </div> <!-- .cd-bg-video-wrapper -->
                </li>
            </ul> <!--/ cd-hero-slider -->

            <!--\t\t<div class=\"cd-slider-nav\">-->
            <!--\t\t\t<nav>-->
            <!--\t\t\t\t<span class=\"cd-marker item-1\"></span>-->
            <!--\t\t\t\t<ul>-->
            <!--\t\t\t\t\t<li class=\"selected\"><a href=\"#0\"><i class=\"fa fa-bicycle\"></i> Invent</a></li>-->
            <!--\t\t\t\t\t<li><a href=\"#0\"><i class=\"fa fa-hotel\"></i> Dream</a></li>-->
            <!--\t\t\t\t\t<li><a href=\"#0\"><i class=\"fa fa-android\"></i> Tech</a></li>-->
            <!--\t\t\t\t\t<li class=\"video\"><a href=\"#0\"><i class=\"fa fa-video-camera\"></i> Video</a></li>-->
            <!--\t\t\t\t</ul>-->
            <!--\t\t\t</nav> -->
            <!--\t\t</div> &lt;!&ndash; .cd-slider-nav &ndash;&gt;-->

        </div><!--/ Main slider end -->
    </section> <!--/ Slider end -->


    <!-- Service box start -->
    <section id=\"service\" class=\"service angle\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 heading\">
                    <span class=\"title-icon pull-left\"><i class=\"fa fa-cogs\"></i></span>
                    <h2 class=\"title\">Czym się zajmujemy <span class=\"title-desc\">Możemy Ci pomóc miedzy innymi w:</span></h2>
                </div>
            </div><!-- Title row end -->

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"col-md-3 col-sm-3 wow fadeInDown\" data-wow-delay=\".5s\">
                        <div class=\"service-content text-center\">
                            <span class=\"service-icon icon-pentagon\"><i class=\"fa fa-tachometer\"></i></span>
                            <h3>Design</h3>
                            <p>Potrzebujesz projektu graficznego / wizualizacji dla Twoje aplikacji bądz firmy?</p>
                        </div>
                    </div><!--/ End first service -->

                    <div class=\"col-md-3 col-sm-3 wow fadeInDown\" data-wow-delay=\".8s\" >
                        <div class=\"service-content text-center\">
                            <span class=\"service-icon icon-pentagon\"><i class=\"fa fa-android\"></i></span>
                            <h3>Programowanie</h3>
                            <p>Potrzebujesz dokonczyć projekt? Chcesz zlecic część pracy? Masz pojedyncze niedokończone zadania? Chcesz zrobić swój projekt? Chcesz odrazu mieć programistów i nie męczyć się z ich weryfikacją?</p>
                        </div>

                    </div><!--/ End Second service -->

                    <div class=\"col-md-3 col-sm-3 wow fadeInDown\" data-wow-delay=\"1.1s\">
                        <div class=\"service-content text-center\">
                            <span class=\"service-icon icon-pentagon\"><i class=\"fa fa-shopping-cart\"></i></span>
                            <h3>Sprzęt</h3>
                            <p>Nie działa coś w Twoim komputerze? Potrzebujesz ustawić sprzęt sieciowy ? Problem sprzetowy paraliżuje Twoją prace ?  </p>
                        </div>
                    </div><!--/ End Third service -->

                    <div class=\"col-md-3 col-sm-3 wow fadeInDown\" data-wow-delay=\"1.4s\">
                        <div class=\"service-content text-center\">
                            <span class=\"service-icon icon-pentagon\"><i class=\"fa fa-lightbulb-o\"></i></span>
                            <h3>Porady</h3>
                            <p>Masz problem it ale jesteś ekspertem w innej branzy? Chciałbyś doradzić się fachowca?</p>
                        </div>
                    </div><!--/ End 4th service -->
                </div>
            </div><!-- Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Service box end -->

    <!-- Portfolio start -->
    <section id=\"portfolio\" class=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 heading\">
                    <span class=\"title-icon classic pull-left\"><i class=\"fa fa-suitcase\"></i></span>
                    <h2 class=\"title classic\">Przykłady realizacji</h2>
                </div>
            </div> <!-- Title row end -->

            <!--Isotope filter start -->
            <div class=\"row text-right\">
                <div class=\"isotope-nav\" data-isotope-nav=\"isotope\">
                    <ul>
                        <li><a href=\"#\" class=\"active\" data-filter=\"*\">Wszystkie</a></li>
                        <li><a href=\"#\" data-filter=\".web-design\">Aplikacje internetowe</a></li>
                        <li><a href=\"#\" data-filter=\".development\">Design</a></li>
                        <li><a href=\"#\" data-filter=\".joomla\">Konsulting</a></li>
                        <li><a href=\"#\" data-filter=\".wordpress\">Sprzęt komputerowy</a></li>
                    </ul>
                </div>
            </div><!-- Isotope filter end -->
        </div>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div id=\"isotope\" class=\"isotope\">
                    <div class=\"col-sm-3 web-design isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"/images/portfolio/portfolio1.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Startup Business</h3>
                                    <a class=\"link icon-pentagon\" href=\"/portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"/images/portfolio/portfolio-bg1.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 development isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"/images/portfolio/portfolio2.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Easy to Lanunch</h3>
                                    <a class=\"link icon-pentagon\" href=\"portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"images/portfolio/portfolio-bg2.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 joomla isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"images/portfolio/portfolio3.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Your Business</h3>
                                    <a class=\"link icon-pentagon\" href=\"portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"images/portfolio/portfolio-bg3.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 wordpress isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"images/portfolio/portfolio4.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Prego Match</h3>
                                    <a class=\"link icon-pentagon\" href=\"portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"images/portfolio/portfolio-bg4.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 joomla isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"images/portfolio/portfolio5.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Fashion Brand</h3>
                                    <a class=\"link icon-pentagon\" href=\"portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"images/portfolio/portfolio-bg5.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 development isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"/images/portfolio/portfolio6.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>The Insidage</h3>
                                    <a class=\"link icon-pentagon\" href=\"/portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"/images/portfolio/portfolio-bg1.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 development isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"/images/portfolio/portfolio7.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Light Carpet</h3>
                                    <a class=\"link icon-pentagon\" href=\"/portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"/images/portfolio/portfolio-bg2.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->

                    <div class=\"col-sm-3 development isotope-item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"/images/portfolio/portfolio8.jpg\" alt=\"\">
                                <figcaption>
                                    <h3>Amazing Keyboard</h3>
                                    <a class=\"link icon-pentagon\" href=\"/portfolio-item.html\"><i class=\"fa fa-link\"></i></a>
                                    <a class=\"view icon-pentagon\" data-rel=\"prettyPhoto\" href=\"/images/portfolio/portfolio-bg3.jpg\"><i class=\"fa fa-search\"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div><!-- Isotope item end -->
                </div><!-- Isotope content end -->
            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- Portfolio end -->

    <!-- Counter Strat -->
    <section class=\"ts_counter no-padding\">
        <div class=\"container-fluid\">
            <div class=\"row facts-wrapper wow fadeInLeft text-center\">
                <div class=\"facts one col-md-3 col-sm-6\">
                    <span class=\"facts-icon\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"facts-num\">
                        <span class=\"counter\">1200</span>
                    </div>
                    <h3>Klientów</h3>
                </div>

                <div class=\"facts two col-md-3 col-sm-6\">
                    <span class=\"facts-icon\"><i class=\"fa fa-institution\"></i></span>
                    <div class=\"facts-num\">
                        <span class=\"counter\">1277</span>
                    </div>
                    <h3>Rozwiązanych problemów IT</h3>
                </div>

                <div class=\"facts three col-md-3 col-sm-6\">
                    <span class=\"facts-icon\"><i class=\"fa fa-suitcase\"></i></span>
                    <div class=\"facts-num\">
                        <span class=\"counter\">869</span>
                    </div>
                    <h3>Zrealizowanych projektów</h3>
                </div>

                <div class=\"facts four col-md-3 col-sm-6\">
                    <span class=\"facts-icon\"><i class=\"fa fa-trophy\"></i></span>
                    <div class=\"facts-num\">
                        <span class=\"counter\">76</span>
                    </div>
                    <h3>Opinie zadowolonych ludzi</h3>
                </div>

            </div>
        </div><!--/ Container end -->
    </section><!--/ Counter end -->

    <!-- Feature box start -->
    <section id=\"feature\" class=\"feature\">
        <div class=\"container\">
            <div class=\"row\">
    {#                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">#}
    {#                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-heart-o\"></i></span>#}
    {#                    <div class=\"feature-content\">#}
    {#                        <h3>Clean &amp; Modern Design</h3>#}
    {#                        <p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>#}
    {#                    </div>#}
    {#                </div><!--/ End first featurebox -->#}

    {#                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">#}
    {#                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-codepen\"></i></span>#}
    {#                    <div class=\"feature-content\">#}
    {#                        <h3>Useful Shortcodes</h3>#}
    {#                        <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>#}
    {#                    </div>#}
    {#                </div><!--/ End 2nd featurebox -->#}

    {#                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">#}
    {#                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-film\"></i></span>#}
    {#                    <div class=\"feature-content\">#}
    {#                        <h3>Parallax Section</h3>#}
    {#                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>#}
    {#                    </div>#}
    {#                </div><!--/ End 3rd featurebox -->#}
            </div><!-- Content row end -->

            <div class=\"gap-40\"></div>

            <div class=\"row\">
                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">
                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-newspaper-o\"></i></span>
                    <div class=\"feature-content\">
                        <h3>Branża IT</h3>
                        <p>Eksperci w branży it. Nie robimy wszystkiego i niczego.</p>
                    </div>
                </div><!--/ End 1st featurebox -->

                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">
                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-desktop\"></i></span>
                    <div class=\"feature-content\">
                        <h3>Dopasowanie</h3>
                        <p>Konketnie pod Twoje potrzeby.</p>
                    </div>
                </div><!--/ End 2nd featurebox -->

                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">
                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-pagelines\"></i></span>
                    <div class=\"feature-content\">
                        <h3>Lekkość i szybkość realizacji.</h3>
                        <p>Szybki czas reakcji. Ty się zrelaksuj.</p>
                    </div>
                </div><!--/ End 3rd featurebox -->

            </div><!-- Content row end -->

            <div class=\"gap-40\"></div>

            <div class=\"row\">


                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">
                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-diamond\"></i></span>
                    <div class=\"feature-content\">
                        <h3>Jakość</h3>
                        <p>Dobrze zrobiona robota.</p>
                    </div>
                </div><!--/ End first featurebox -->

                <div class=\"feature-box col-sm-4 wow fadeInDown\" data-wow-delay=\".5s\">
                    <span class=\"feature-icon pull-left\" ><i class=\"fa fa-whatsapp\"></i></span>
                    <div class=\"feature-content\">
                        <h3>24/7 Wsparcie</h3>
                        <p>Jeśli masz jakąś wątpliwość bądz chcesz zobaczyc status realizacji.</p>
                    </div>
                </div><!--/ End first featurebox -->
            </div><!-- Content row end -->

        </div><!--/ Container end -->
    </section><!--/ Feature box end -->


    <section id=\"image-block\" class=\"image-block no-padding\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 ts-padding\" style=\"height:650px;background:url(images/image-block-bg.jpg) 50% 50% / cover no-repeat;\">
                </div>
                <div class=\"col-md-6 ts-padding img-block-right\">
                    <div class=\"img-block-head text-center\">
                        <h2>Dowiedz się więcej o NAS</h2>
                        <h3>Czemu warto nas wybrać?</h3>
                        <p>Jesteśmy 100 % polską firmą z polskim kapitałem. Wspieramy naszych. Opieramy się na zaufaniu i dbaniu o naszego klienta. Zawsze gramy uczciwie.
                        </p>
                    </div>

                    <div class=\"gap-30\"></div>

                    <div class=\"image-block-content\">
                        <span class=\"feature-icon pull-left\" ><i class=\"fa fa-bicycle\"></i></span>
                        <div class=\"feature-content\">
                            <h3>Masa ekspertów IT</h3>
                            <p>Do wyboru do koloru, gotowi aby Ci pomóc w mgnieniu oka. Zapomnij o marazmie.</p>
                        </div>
                    </div><!--/ End 1st block -->

                    <div class=\"image-block-content\">
                        <span class=\"feature-icon pull-left\" ><i class=\"fa fa-diamond\"></i></span>
                        <div class=\"feature-content\">
                            <h3>Jakość</h3>
                            <p>Płacisz zawsze za jakość i dobrze zrobioną robotę. Zwrot kosztów w przypadku braku satysfakcjii z usługi</p>
                        </div>
                    </div><!--/ End 1st block -->

                    <div class=\"image-block-content\">
                        <span class=\"feature-icon pull-left\" ><i class=\"fa fa-street-view\"></i></span>
                        <div class=\"feature-content\">
                            <h3>Ciągle wsparcie klienta</h3>
                            <p>Dzwonisz kiedy chcesz i pomagamy odrazu. Miło i przyjacielsko.</p>
                        </div>
                    </div><!--/ End 1st block -->

                </div>
            </div>
        </div>
    </section><!--/ Image block end -->


    <!-- Team start -->
    <section id=\"team\" class=\"team\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 heading\">
                    <span class=\"title-icon pull-left\"><i class=\"fa fa-weixin\"></i></span>
                    <h2 class=\"title\">Poznaj założycieli naszej firmy<span class=\"title-desc\">Byli managerowie i eksperci w branzy IT.</span></h2>
                </div>
            </div><!-- Title row end -->

            <div class=\"row text-center\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team wow slideInLeft\">
                        <div class=\"img-hexagon\">
                            <img src=\"/images/foto4.jpg\" alt=\"\">
                            <span class=\"img-top\"></span>
                            <span class=\"img-bottom\"></span>
                        </div>
                        <div class=\"team-content\">
                            <h3>Hubert</h3>
                            <p>czlonek zarządu / rozwój biznesu</p>
                            <p>Przez wiele lat pracował jako programista dla największych światowych korporacji. Zawsze marzył robić coś dla Polski i udało się.</p>
                            <div class=\"team-social\">
                                <a class=\"fb\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a class=\"twt\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a class=\"gplus\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                <a class=\"linkdin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a class=\"dribble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Team 1 end -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team wow slideInLeft\">
                        <div class=\"img-hexagon\">
                            <img src=\"/images/team/team2.jpg\" alt=\"\">
                            <span class=\"img-top\"></span>
                            <span class=\"img-bottom\"></span>
                        </div>
                        <div class=\"team-content\">
                            <h3>Paweł</h3>
                            <p>członek zarządu / rozwój biznesu</p>
                            <p>Pracował wiele lat jako adwokat. Nietuzinkowy, nieszablonowy, profesjonalny w każdym calu.</p>
                            <div class=\"team-social\">
                                <a class=\"fb\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a class=\"twt\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a class=\"gplus\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                <a class=\"linkdin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a class=\"dribble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Team 2 end -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team wow slideInRight\">
                        <div class=\"img-hexagon\">
                            <img src=\"images/team/team3.jpg\" alt=\"\">
                            <span class=\"img-top\"></span>
                            <span class=\"img-bottom\"></span>
                        </div>
                        <div class=\"team-content\">
                            <h3>Malgorzata</h3>
                            <p>wizerunek / media</p>
                            <p>Małgorzata pracowała jako dziennikarka w mediach wspierających Polske i Polskość.</p>
                            <div class=\"team-social\">
                                <a class=\"fb\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a class=\"twt\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a class=\"gplus\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                <a class=\"linkdin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a class=\"dribble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Team 3 end -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team animate wow slideInRight\">
                        <div class=\"img-hexagon\">
                            <img src=\"images/team/team4.jpg\" alt=\"\">
                            <span class=\"img-top\"></span>
                            <span class=\"img-bottom\"></span>
                        </div>
                        <div class=\"team-content\">
                            <h3>Tomasz</h3>
                            <p>marketing internetowy / social media</p>
                            <p>Specjalista od marketingu produktów i rozwoju social mediów. Bez niego nie usłyszelibyście o nas.</p>
                            <div class=\"team-social\">
                                <a class=\"fb\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a class=\"twt\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a class=\"gplus\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                <a class=\"linkdin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a class=\"dribble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Team 4 end -->
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Team end -->

    <!-- Parallax 1 start -->
    <section class=\"parallax parallax1\">
        <div class=\"parallax-overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h2>Wejdź na wyższy level zleceń IT!</h2>
                    <h3>Zacznij teraz.</h3>
                    <p>
                        <a href=\"#\" class=\"btn btn-primary white\">Podejmij zlecenie</a>
                        <a href=\"#\" class=\"btn btn-primary solid\">Zaoferuj zlecenie</a>
                    </p>
                </div>
            </div>
        </div><!-- Container end -->
    </section><!-- Parallax 1 end -->

    <!-- Pricing table start -->
    <section id=\"pricing\" class=\"pricing\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 heading\">
                    <span class=\"title-icon pull-left\"><i class=\"fa fa-university\"></i></span>
                    <h2 class=\"title\">Nasz cennik<span class=\"title-desc\">Pomaganie ludziom to nasza pasja i misja.</span></h2>
                </div>
            </div><!-- Title row end -->
            <div class=\"row\">
                <!-- plan start -->
                <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\".5s\">
                    <div class=\"plan text-center\">
                        <span class=\"plan-name\">Darmowy</span>
                        <p class=\"plan-price\"><sup class=\"currency\">PLN</sup><strong>0</strong><sub>.00</sub></p>
                        <ul class=\"list-unstyled\">
                            <li>1 problem do rozwiązania</li>
                            <li>szybka realizacja</li>
                            <li>wsparcie 12/7</li>
                        </ul>
                        <a class=\"btn btn-primary\" href=\"/trial\">Wybróbuj za darmo</a>
                    </div>
                </div><!-- plan end -->

                <!-- plan start -->
                <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"1s\">
                    <div class=\"plan text-center\">
                        <span class=\"plan-name\">Standardowy</span>
                        <p class=\"plan-price\"><sup class=\"currency\">PLN</sup><strong>25</strong><sub>.00</sub></p>
                        <ul class=\"list-unstyled\">
                            <li>1 problem do rozwiązania</li>
                            <li>szybka realizacja</li>
                            <li>wsparcie 12/7</li>
                        </ul>
                        <a class=\"btn btn-primary\" href=\"#.\">KUP</a>
                    </div>
                </div><!-- plan end -->

                <!-- plan start -->
                <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"1.4s\">
                    <div class=\"plan text-center featured\">
                        <span class=\"plan-name\">Luksusowy</span>
                        <p class=\"plan-price\"><sup class=\"currency\">PLN</sup><strong>50</strong><sub>.00</sub></p>
                        <ul class=\"list-unstyled\">
                            <li>2 problemy do rozwiązania</li>
                            <li>ultra szybka realizacja</li>
                            <li>wsparcie 24/7</li>
                        </ul>
                        <a class=\"btn btn-primary\" href=\"#.\">KUP</a>
                    </div>
                </div><!-- plan end -->

                <!-- plan start -->
                <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"1.6s\">
                    <div class=\"plan text-center\">
                        <span class=\"plan-name\">Królewski</span>
                        <p class=\"plan-price\"><sup class=\"currency\">PLN</sup><strong>100</strong><sub>.00</sub></p>
                        <ul class=\"list-unstyled\">
                            <li>3 problemy do rozwiązania</li>
                            <li>ultra szybka realizacja</li>
                            <li>rozmowa z ekspertem</li>
                            <li>wsparcie 24/7</li>
                        </ul>
                        <a class=\"btn btn-primary\" href=\"#.\">KUP</a>
                    </div>
                </div><!-- plan end -->
            </div><!--/ Content row end -->
        </div><!--/  Container end-->
    </section><!--/ Pricing table end -->


    <!-- Testimonial start-->
    <section class=\"testimonial parallax parallax2\">
        <div class=\"parallax-overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"testimonial-carousel\" class=\"owl-carousel owl-theme text-center testimonial-slide\">
                    <div class=\"item\">
                        <div class=\"testimonial-thumb\">
                            <img src=\"/images/team/testimonial1.jpg\" alt=\"testimonial\">
                        </div>
                        <div class=\"testimonial-content\">
                            <p class=\"testimonial-text\">
                                Polisoft to rewolucja w branży IT. Wreszcie cos Polskiego, dla nas dla prawdziwych patriotów.
                            </p>
                            <h3 class=\"name\">Karolina Pajączkowska<span>Magazyn komputerowy SPIDER WEB</span></h3>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimonial-thumb\">
                            <img src=\"/images/team/testimonial2.jpg\" alt=\"testimonial\">
                        </div>
                        <div class=\"testimonial-content\">
                            <p class=\"testimonial-text\">
                                Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                            <h3 class=\"name\">Narek Bedros<span>Sr. Manager</span></h3>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimonial-thumb\">
                            <img src=\"/images/team/testimonial3.jpg\" alt=\"testimonial\">
                        </div>
                        <div class=\"testimonial-content\">
                            <p class=\"testimonial-text\">
                                Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                            <h3 class=\"name\">Taline Lucine<span>Sales Manager</span></h3>
                        </div>
                    </div>
                </div><!--/ Testimonial carousel end-->
            </div><!--/ Row end-->
        </div><!--/  Container end-->
    </section><!--/ Testimonial end-->


    <!-- Clients start -->
    <section id=\"clients\" class=\"clients\">
        <div class=\"container\">
            <div class=\"row wow fadeInLeft\">
                <div id=\"client-carousel\" class=\"col-sm-12 owl-carousel owl-theme text-center client-carousel\">
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client1.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client2.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client3.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client4.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client5.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client6.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client7.png\" alt=\"client\">
                        </a>
                    </figure>
                    <figure class=\"item client_logo\">
                        <a href=\"#\">
                            <img src=\"/images/clients/client8.png\" alt=\"client\">
                        </a>
                    </figure>
                </div><!-- Owl carousel end -->
            </div><!-- Main row end -->
        </div><!--/ Container end -->
    </section><!--/ Clients end -->


    <!-- Footer start -->
    <footer id=\"footer\" class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-12 footer-widget\">
                    <h3 class=\"widget-title\">Z naszego bloga</h3>
                    <div class=\"latest-post-items media\">
                        <div class=\"latest-post-content media-body\">
                            <h4><a href=\"#\">Architektura DDD w projektach progarmistycznych</a></h4>
                            <p class=\"post-meta\">
                                <span class=\"date\"><i class=\"icon icon-calendar\"></i> Mar 15, 2023</span>
                            </p>
                        </div>
                    </div><!-- 1st Latest Post end -->

                    <div class=\"latest-post-items media\">
                        <div class=\"latest-post-content media-body\">
                            <h4><a href=\"#\">Nowe trendy w IT</a></h4>
                            <p class=\"post-meta\">
                                <span class=\"date\"><i class=\"icon icon-calendar\"></i> Mar 15, 2023</span>
                                <span class=\"post-meta-comments\"><i class=\"icon icon-bubbles4\"></i></span>
                            </p>
                        </div>
                    </div><!-- 2nd Latest Post end -->

                    <div class=\"latest-post-items media\">
                        <div class=\"latest-post-content media-body\">
                            <h4><a href=\"#\">Wywiad z ekspertem komputerów kwantowych</a></h4>
                            <p class=\"post-meta\">
                                <span class=\"date\"><i class=\"icon icon-calendar\"></i> Apr 17, 2023</span>
                                <span class=\"post-meta-comments\"><i class=\"icon icon-bubbles4\"></i></span>
                            </p>
                        </div>
                    </div><!-- 3rd Latest Post end -->

                </div><!--/ End Recent Posts-->


                <div class=\"col-md-4 col-sm-12 footer-widget\">
                    <h3 class=\"widget-title\">Jak pracujemy</h3>

                    <div class=\"img-gallery\">
                        <div class=\"img-container\">
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/1.jpg\">
                                <img src=\"/images/gallery/1.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/2.jpg\">
                                <img src=\"/images/gallery/2.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/3.jpg\">
                                <img src=\"/images/gallery/3.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/4.jpg\">
                                <img src=\"/images/gallery/4.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/5.jpg\">
                                <img src=\"/images/gallery/5.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/6.jpg\">
                                <img src=\"/images/gallery/6.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/6.jpg\">
                                <img src=\"/images/gallery/7.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/6.jpg\">
                                <img src=\"/images/gallery/8.jpg\" alt=\"\">
                            </a>
                            <a class=\"thumb-holder\" data-rel=\"prettyPhoto\" href=\"/images/gallery/6.jpg\">
                                <img src=\"/images/gallery/9.jpg\" alt=\"\">
                            </a>
                        </div>
                    </div>
                </div><!--/ end flickr -->

                <div class=\"col-md-3 col-sm-12 footer-widget footer-about-us\">
                    <h3 class=\"widget-title\">Gdzie jest nasze biuro?</h3>
                    <h4>Adres</h4>
                    <p>Plac Europejski 1, Warszawa, Polska</p>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h4>Email:</h4>
                            <p>polisoftbusiness@gmail.com</p>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class=\"col-md-6\">
                            <h4>Telefon:</h4>
                            <p>531 730 179</p>
                        </div>
                    </div>
                    <form action=\"#\" role=\"form\">
                        <div class=\"input-group subscribe\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" required=\"\">
                            <span class=\"input-group-addon\">
                              <button class=\"btn\" type=\"submit\"><i class=\"fa fa-envelope-o\"> </i></button>
                            </span>
                        </div>
                    </form>
                </div><!--/ end about us -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </footer><!-- Footer end -->


    <!-- Copyright start -->
    <section id=\"copyright\" class=\"copyright angle\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <ul class=\"footer-social unstyled\">
                        <li>
                            <a title=\"Twitter\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-twitter\"></i></span>
                            </a>
                            <a title=\"Facebook\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-facebook\"></i></span>
                            </a>
                            <a title=\"Google+\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-google-plus\"></i></span>
                            </a>
                            <a title=\"linkedin\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-linkedin\"></i></span>
                            </a>
                            <a title=\"Pinterest\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-pinterest\"></i></span>
                            </a>
                            <a title=\"Skype\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-skype\"></i></span>
                            </a>
                            <a title=\"Dribble\" href=\"#\">
                                <span class=\"icon-pentagon wow bounceIn\"><i class=\"fa fa-dribbble\"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--/ Row end -->
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <div class=\"copyright-info\">
                        &copy; 2023 <span>Polisoft. Wszystkie prawa zastrzezone.</a></span>
                    </div>
                </div>
            </div><!--/ Row end -->
            <div id=\"back-to-top\" data-spy=\"affix\" data-offset-top=\"10\" class=\"back-to-top affix\">
                <button class=\"btn btn-primary\" title=\"Back to Top\"><i class=\"fa fa-angle-double-up\"></i></button>
            </div>
        </div><!--/ Container end -->
    </section><!--/ Copyright end -->

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type=\"text/javascript\" src=\"/js/jquery.js\"></script>
    <!-- Bootstrap jQuery -->
    <script type=\"text/javascript\" src=\"/js/bootstrap.min.js\"></script>
    <!-- Style Switcher -->
    <script type=\"text/javascript\" src=\"/js/style-switcher.js\"></script>
    <!-- Owl Carousel -->
    <script type=\"text/javascript\" src=\"/js/owl.carousel.js\"></script>
    <!-- PrettyPhoto -->
    <script type=\"text/javascript\" src=\"/js/jquery.prettyPhoto.js\"></script>
    <!-- Bxslider -->
    <script type=\"text/javascript\" src=\"/js/jquery.flexslider.js\"></script>
    <!-- CD Hero slider -->
    <script type=\"text/javascript\" src=\"/js/cd-hero.js\"></script>
    <!-- Isotope -->
    <script type=\"text/javascript\" src=\"/js/isotope.js\"></script>
    <script type=\"text/javascript\" src=\"/js/ini.isotope.js\"></script>
    <!-- Wow Animation -->
    <script type=\"text/javascript\" src=\"/js/wow.min.js\"></script>
    <!-- SmoothScroll -->
    <script type=\"text/javascript\" src=\"/js/smoothscroll.js\"></script>
    <!-- Eeasing -->
    <script type=\"text/javascript\" src=\"/js/jquery.easing.1.3.js\"></script>
    <!-- Counter -->
    <script type=\"text/javascript\" src=\"/js/jquery.counterup.min.js\"></script>
    <!-- Waypoints -->
    <script type=\"text/javascript\" src=\"/js/waypoints.min.js\"></script>
    <!-- Template custom -->
    <script type=\"text/javascript\" src=\"/js/custom.js\"></script>
</div><!-- Body inner end -->
</body>
</html>", "index/index.html.twig", "/home/resident/polisoft/templates/index/index.html.twig");
    }
}
