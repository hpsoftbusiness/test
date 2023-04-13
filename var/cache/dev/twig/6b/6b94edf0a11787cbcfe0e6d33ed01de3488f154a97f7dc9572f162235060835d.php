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

/* postJob/postJob.html.twig */
class __TwigTemplate_794eb0a04533ce0182fa7e2fe5ee343690640f5c5f0ee44aac8b3d1a4ef3491d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postJob/postJob.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postJob/postJob.html.twig"));

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
                        <h2>Wyszukiwarka zleceń dla ekspertów IT</h2>
                        <div>
                        <form action=\"/post-job\" method=\"POST\">
                            <div class=\"form-group\">
                                <input type=\"hidden\" value=\"1\" name=\"page\">
                                <input type=\"text\" style=\"margin-left: 45em; width: 30%; text-align: center; color: white;\" name=\"search\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"wpisz umiejętność np programowanie php\">
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary solid cd-btn\">szukaj</button></a>
                        </form>
                        </div>


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
            ";
        // line 191
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 191, $this->source); })())), 0))) {
            // line 192
            echo "                    <p>Najczęściej szukane: #REACT #PHP #PYTHON #FIGMA</p>
            ";
        } else {
            // line 194
            echo "            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Kategoria</th>
                    <th scope=\"col\">Technologia</th>
                    <th scope=\"col\">Czas</th>
                    <th scope=\"col\">Wynagrodzenie</th>
                    <th scope=\"col\">Zakres</th>
                    <th scope=\"col\">Miejsce</th>
                    <th scope=\"col\">Szczegóły</th>
                </tr>
                </thead>
                <tbody>
                ";
        }
        // line 209
        echo "                ";
        $context["i"] = 0;
        // line 210
        echo "
          ";
        // line 211
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 211, $this->source); })())), 0))) {
            // line 212
            echo "
              ";
        } else {
            // line 214
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 214, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 215
                echo "                    <tr>
                        ";
                // line 216
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 216, $this->source); })()) + 1);
                // line 217
                echo "                        <th scope=\"row\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 217, $this->source); })()), "html", null, true);
                echo "</th>
                        <td>";
                // line 218
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 218), "html", null, true);
                echo "</td>
                        <td>";
                // line 219
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "technology", [], "any", false, false, false, 219), "html", null, true);
                echo "</td>
                        <td>";
                // line 220
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "executionTime", [], "any", false, false, false, 220), "html", null, true);
                echo " hours</td>
                        <td>";
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "price", [], "any", false, false, false, 221), "html", null, true);
                echo " PLN</td>
                        <td>";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "scope", [], "any", false, false, false, 222), "html", null, true);
                echo "</td>
                        <td>Warsaw</td>
                        <td>
                            <a href=\"/detail?id=";
                // line 225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 225), "html", null, true);
                echo "\"><button class=\"btn btn-danger\">szczegóły</button><a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "                ";
        }
        // line 230
        echo "                </tbody>
            </table>
            ";
        // line 232
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 232, $this->source); })())), 0))) {
            // line 233
            echo "
            ";
        } else {
            // line 235
            echo "            <nav aria-label=\"Page navigation example\">
                <a href=\"/\"><button class=\"btn btn-danger\">Wróć</button></a>
                <ul class=\"pagination\" style=\"float: right;\">
                    <form action=\"/post-job\" method=\"POST\">
                        <input type=\"hidden\" name=\"search\" value=\"";
            // line 239
            echo twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 239, $this->source); })()), "html", null, true);
            echo "\">
                        ";
            // line 240
            $context["counter"] = 1;
            // line 241
            echo "
                        <a href=\"#\" type=\"submit\"><button class=\"btn btn-danger\" name=\"page\" value=\"";
            // line 242
            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 242, $this->source); })()), "html", null, true);
            echo "\" type=\"submit\">Poprzednie</button></a>
                        ";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 243, $this->source); })()), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 243, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 244
                echo "                            <a href=\"#\" type=\"submit\"><button class=\"btn btn-light\" name=\"page\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 244, $this->source); })()), "html", null, true);
                echo "\" type=\"submit\">";
                echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 244, $this->source); })()), "html", null, true);
                echo "</button></a>
                            ";
                // line 245
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 245, $this->source); })()) + 1);
                // line 246
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "
                        <a href=\"#\" type=\"submit\"><button class=\"btn btn-danger\" name=\"page\" value=\"";
            // line 248
            echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 248, $this->source); })()), "html", null, true);
            echo "\" type=\"submit\">Kolejne</button></a>
                    </form>
                </ul>
            </nav>
            ";
        }
        // line 253
        echo "            <div class=\"row\">

            </div><!-- Title row end -->

        </div><!--/ Container end -->
    </section><!--/ Service box end -->





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
        return "postJob/postJob.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 253,  371 => 248,  368 => 247,  362 => 246,  360 => 245,  353 => 244,  349 => 243,  345 => 242,  342 => 241,  340 => 240,  336 => 239,  330 => 235,  326 => 233,  324 => 232,  320 => 230,  317 => 229,  307 => 225,  301 => 222,  297 => 221,  293 => 220,  289 => 219,  285 => 218,  280 => 217,  278 => 216,  275 => 215,  270 => 214,  266 => 212,  264 => 211,  261 => 210,  258 => 209,  241 => 194,  237 => 192,  235 => 191,  43 => 1,);
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
                        <h2>Wyszukiwarka zleceń dla ekspertów IT</h2>
                        <div>
                        <form action=\"/post-job\" method=\"POST\">
                            <div class=\"form-group\">
                                <input type=\"hidden\" value=\"1\" name=\"page\">
                                <input type=\"text\" style=\"margin-left: 45em; width: 30%; text-align: center; color: white;\" name=\"search\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"wpisz umiejętność np programowanie php\">
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary solid cd-btn\">szukaj</button></a>
                        </form>
                        </div>


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
            {%  if posts | length == 0 %}
                    <p>Najczęściej szukane: #REACT #PHP #PYTHON #FIGMA</p>
            {% else %}
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Kategoria</th>
                    <th scope=\"col\">Technologia</th>
                    <th scope=\"col\">Czas</th>
                    <th scope=\"col\">Wynagrodzenie</th>
                    <th scope=\"col\">Zakres</th>
                    <th scope=\"col\">Miejsce</th>
                    <th scope=\"col\">Szczegóły</th>
                </tr>
                </thead>
                <tbody>
                {% endif %}
                {% set i = 0 %}

          {%  if posts | length == 0 %}

              {% else %}
                {% for post in posts %}
                    <tr>
                        {% set i = i + 1 %}
                        <th scope=\"row\">{{ i }}</th>
                        <td>{{ post.category }}</td>
                        <td>{{ post.technology }}</td>
                        <td>{{ post.executionTime }} hours</td>
                        <td>{{ post.price }} PLN</td>
                        <td>{{ post.scope }}</td>
                        <td>Warsaw</td>
                        <td>
                            <a href=\"/detail?id={{ post.id }}\"><button class=\"btn btn-danger\">szczegóły</button><a>
                        </td>
                    </tr>
                {% endfor %}
                {% endif %}
                </tbody>
            </table>
            {%  if posts | length == 0 %}

            {% else %}
            <nav aria-label=\"Page navigation example\">
                <a href=\"/\"><button class=\"btn btn-danger\">Wróć</button></a>
                <ul class=\"pagination\" style=\"float: right;\">
                    <form action=\"/post-job\" method=\"POST\">
                        <input type=\"hidden\" name=\"search\" value=\"{{ search }}\">
                        {% set counter = 1 %}

                        <a href=\"#\" type=\"submit\"><button class=\"btn btn-danger\" name=\"page\" value=\"{{ counter }}\" type=\"submit\">Poprzednie</button></a>
                        {% for p in counter..page %}
                            <a href=\"#\" type=\"submit\"><button class=\"btn btn-light\" name=\"page\" value=\"{{ counter }}\" type=\"submit\">{{ counter }}</button></a>
                            {% set counter = counter + 1 %}
                        {% endfor %}

                        <a href=\"#\" type=\"submit\"><button class=\"btn btn-danger\" name=\"page\" value=\"{{ page }}\" type=\"submit\">Kolejne</button></a>
                    </form>
                </ul>
            </nav>
            {% endif %}
            <div class=\"row\">

            </div><!-- Title row end -->

        </div><!--/ Container end -->
    </section><!--/ Service box end -->





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
</html>", "postJob/postJob.html.twig", "/home/resident/polisoft/templates/postJob/postJob.html.twig");
    }
}
