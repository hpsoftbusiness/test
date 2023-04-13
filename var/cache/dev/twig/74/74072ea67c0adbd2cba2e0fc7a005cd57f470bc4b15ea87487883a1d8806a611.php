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

/* employer/trial.html.twig */
class __TwigTemplate_0265e94aff87559f39b518afe1d2bde424e4b7b96e833b21eae7f7f574020338 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer/trial.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer/trial.html.twig"));

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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>

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

        .cd-hero-slider {
            height: 310px;
        }
    </style>

    <script>
        function validateEmail(\$email) {
            var emailReg = /^([\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,4})?\$/;
            return emailReg.test( \$email );
        }

        function validatePhone(txtPhone) {
            var a = txtPhone;
            var filter = /^((\\+[1-9]{1,4}[ \\-]*)|(\\([0-9]{2,3}\\)[ \\-]*)|([0-9]{2,4})[ \\-]*)*?[0-9]{3,4}?[ \\-]*[0-9]{3,4}?\$/;
            if (filter.test(a)) {
                return true;
            }
            else {
                return false;
            }
        }

        \$(document).ready(function () {
            \$('#acceptOffer').prop('disabled', true);

            \$('#name').change(function () {

                if (\$('#name').val().length === 0)
                {
                    \$('#name').css('border-color', 'red');    \$('#acceptOffer').prop('disabled', true);
                }
                else {
                    \$('#name').css('border-color', '');   \$('#acceptOffer').prop('disabled', false);
                }
            });

            \$('#email').change(function () {
                if( !validateEmail(\$('#email').val()) ||\$('#email').val().length === 0 ) {
                    \$('#email').css('border-color', 'red');    \$('#acceptOffer').prop('disabled', true);
                }
                else {
                    \$('#email').css('border-color', '');   \$('#acceptOffer').prop('disabled', false);
                }
            });

            \$('#phone').change(function () {
                if (!validatePhone(\$('#phone').val()) || \$('#phone').val().length === 0) {
                    \$('#phone').css('border-color', 'red');   \$('#acceptOffer').prop('disabled', true);
                }
                else {
                    \$('#phone').css('border-color', '');  \$('#acceptOffer').prop('disabled', false);
                }
            });


            \$('#category').change(function () {

                if (\$('#category').val().length === 0)
                {
                    \$('#category').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#category').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#technology').change(function () {

                if (\$('#technology').val().length === 0)
                {
                    \$('#technology').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#technology').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#price').change(function () {

                if (\$('#price').val().length === 0)
                {
                    \$('#price').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#price').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#time').change(function () {

                if (\$('#time').val().length === 0)
                {
                    \$('#time').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#time').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#scope').change(function () {

                if (\$('#scope').val().length === 0)
                {
                    \$('#scope').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#scope').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#skills').change(function () {

                if (\$('#skills').val().length === 0)
                {
                    \$('#skills').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#skills').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#desc').change(function () {

                if (\$('#desc').val().length === 0)
                {
                    \$('#desc').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#desc').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });







            \$('#acceptOffer').click(function () {

                \$('#confirmModal').modal('hide');

                window.setTimeout(function () {
                    \$.ajax({
                        method: \"POST\",
                        url: \"/mail-confirmation-employer\",
                        data: {
                            category: \$('#category').val(),
                            technology: \$('#technology').val(),
                            price: \$('#price').val(),
                            time: \$('#time').val(),
                            scope: \$('#scope').val(),
                            description: \$('#desc').val(),
                            name: \$('#name').val(),
                            email: \$('#email').val(),
                            phone: \$('#phone').val(),
                            skills: \$('#skills').val()
                        }
                    }).done(function () {
                        postId
                    });

                    \$(\"#donePopup\").modal();

                }, 600);

            })

        });
    </script>
</head>

<body>

<div class=\"modal\" id=\"donePopup\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-success\" role=\"alert\">
                    Zlecenie opublikowane. Potwierdzenie wysłane na Twój adres e-mail.
                </div>
            </div>
        </div>
    </div>
</div>



<div class=\"modal\" id=\"doneModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Order confirmation</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>don</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\"  >Accept the offer</button>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
            </div>
        </div>
    </div>
</div>



<div class=\"modal\" id=\"confirmModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Potwierdź stworzenie zlecenia</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form>
                    <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Imię i Nazwisko</label>
                        <input type=\"text\" class=\"form-control\" style=\"color: grey;\" id=\"name\" placeholder=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Adres email</label>
                        <input type=\"text\" class=\"form-control\"  style=\"color: grey;\"  id=\"email\" placeholder=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Telefon</label>
                        <input type=\"text\" class=\"form-control\"  style=\"color: grey;\" id=\"phone\" placeholder=\"\">
                    </div>




                    <div class=\"form-group\">
                        <p>*Klikając akceptuj zadanie potwierdzam, że:<br>- posiadam odpowiednią kwote do zapłacenia za zlecenie <br> -  akceptuje ryzyko projektowe.</p>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <input type=\"hidden\" value=\"";
        // line 322
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 322, $this->source); })()), "request", [], "any", false, false, false, 322), "get", [0 => "id"], "method", false, false, false, 322), "html", null, true);
        echo "\" id=\"postId\">
                <button type=\"button\" class=\"btn btn-danger\" id=\"acceptOffer\" >Stwórz zlecenie</button>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
            </div>
        </div>
    </div>
</div>

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
                    <br>
                    <br>
                    <br>

                </div><!--/ Logo end -->

            </div><!--/ Row end -->
            <h2 style=\"color:white;\">Zleć prace.</h2>


                <span class=\"fa fa-star\" style=\"color: black;\"></span>
                <span class=\"fa fa-star\" style=\"color: black;\"></span>
            </h4>


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
            <div class=\"form-group row\">
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Kategoria</label>
                    <div class=\"input-group\">
                        <input type=\"text\" style=\"color: grey;\"  size=\"50\" class=\"form-control\" id=\"category\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Technologia</label>
                    <div class=\"input-group\">
                        <input type=\"text\" size=\"50\" style=\"color: grey;\" class=\"form-control\" id=\"technology\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Cena w PLN</label>
                    <div class=\"input-group\">
                        <input type=\"text\"   size=\"50\" style=\"color: grey;\" class=\"form-control\" id=\"price\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Szacowany czas</label>
                    <div class=\"input-group\">
                        <input type=\"text\"   size=\"50\" style=\"color: grey;\" class=\"form-control\" id=\"time\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Zakres</label>
                    <div class=\"input-group\">
                        <input type=\"text\"  size=\"50\"  style=\"color: grey;\"class=\"form-control\" id=\"scope\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Wymagane umiejętnośći</label>
                    <div class=\"input-group\">
                        <input type=\"text\"  size=\"50\" style=\"color: grey;\" class=\"form-control is-invalid\" id=\"skills\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
            </div>



            <div class=\"form-group mb-5\">
                <label for=\"exampleFormControlTextarea1\" class=\"\">Opis zadania</label>
                <textarea style=\"color: grey;\" class=\"form-control rounded-0\" id=\"desc\" rows=\"50\"></textarea>
            </div>

            <button class=\"btn btn-light\">back</button>
            <button class=\"btn btn-danger\" data-toggle=\"modal\" id=\"create\" data-target=\"#confirmModal\">create</button>




        </div>
            <br>

        </div>
    </section><!--/ Service box end -->




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
        return "employer/trial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 322,  43 => 1,);
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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>

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

        .cd-hero-slider {
            height: 310px;
        }
    </style>

    <script>
        function validateEmail(\$email) {
            var emailReg = /^([\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,4})?\$/;
            return emailReg.test( \$email );
        }

        function validatePhone(txtPhone) {
            var a = txtPhone;
            var filter = /^((\\+[1-9]{1,4}[ \\-]*)|(\\([0-9]{2,3}\\)[ \\-]*)|([0-9]{2,4})[ \\-]*)*?[0-9]{3,4}?[ \\-]*[0-9]{3,4}?\$/;
            if (filter.test(a)) {
                return true;
            }
            else {
                return false;
            }
        }

        \$(document).ready(function () {
            \$('#acceptOffer').prop('disabled', true);

            \$('#name').change(function () {

                if (\$('#name').val().length === 0)
                {
                    \$('#name').css('border-color', 'red');    \$('#acceptOffer').prop('disabled', true);
                }
                else {
                    \$('#name').css('border-color', '');   \$('#acceptOffer').prop('disabled', false);
                }
            });

            \$('#email').change(function () {
                if( !validateEmail(\$('#email').val()) ||\$('#email').val().length === 0 ) {
                    \$('#email').css('border-color', 'red');    \$('#acceptOffer').prop('disabled', true);
                }
                else {
                    \$('#email').css('border-color', '');   \$('#acceptOffer').prop('disabled', false);
                }
            });

            \$('#phone').change(function () {
                if (!validatePhone(\$('#phone').val()) || \$('#phone').val().length === 0) {
                    \$('#phone').css('border-color', 'red');   \$('#acceptOffer').prop('disabled', true);
                }
                else {
                    \$('#phone').css('border-color', '');  \$('#acceptOffer').prop('disabled', false);
                }
            });


            \$('#category').change(function () {

                if (\$('#category').val().length === 0)
                {
                    \$('#category').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#category').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#technology').change(function () {

                if (\$('#technology').val().length === 0)
                {
                    \$('#technology').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#technology').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#price').change(function () {

                if (\$('#price').val().length === 0)
                {
                    \$('#price').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#price').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#time').change(function () {

                if (\$('#time').val().length === 0)
                {
                    \$('#time').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#time').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#scope').change(function () {

                if (\$('#scope').val().length === 0)
                {
                    \$('#scope').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#scope').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#skills').change(function () {

                if (\$('#skills').val().length === 0)
                {
                    \$('#skills').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#skills').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });

            \$('#desc').change(function () {

                if (\$('#desc').val().length === 0)
                {
                    \$('#desc').css('border-color', 'red');
                    \$('#create').prop('disabled', true);
                }
                else {
                    \$('#desc').css('border-color', '');
                    \$('#create').prop('disabled', false);
                }
            });







            \$('#acceptOffer').click(function () {

                \$('#confirmModal').modal('hide');

                window.setTimeout(function () {
                    \$.ajax({
                        method: \"POST\",
                        url: \"/mail-confirmation-employer\",
                        data: {
                            category: \$('#category').val(),
                            technology: \$('#technology').val(),
                            price: \$('#price').val(),
                            time: \$('#time').val(),
                            scope: \$('#scope').val(),
                            description: \$('#desc').val(),
                            name: \$('#name').val(),
                            email: \$('#email').val(),
                            phone: \$('#phone').val(),
                            skills: \$('#skills').val()
                        }
                    }).done(function () {
                        postId
                    });

                    \$(\"#donePopup\").modal();

                }, 600);

            })

        });
    </script>
</head>

<body>

<div class=\"modal\" id=\"donePopup\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-success\" role=\"alert\">
                    Zlecenie opublikowane. Potwierdzenie wysłane na Twój adres e-mail.
                </div>
            </div>
        </div>
    </div>
</div>



<div class=\"modal\" id=\"doneModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Order confirmation</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>don</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\"  >Accept the offer</button>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
            </div>
        </div>
    </div>
</div>



<div class=\"modal\" id=\"confirmModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Potwierdź stworzenie zlecenia</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form>
                    <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Imię i Nazwisko</label>
                        <input type=\"text\" class=\"form-control\" style=\"color: grey;\" id=\"name\" placeholder=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Adres email</label>
                        <input type=\"text\" class=\"form-control\"  style=\"color: grey;\"  id=\"email\" placeholder=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleFormControlInput1\">Telefon</label>
                        <input type=\"text\" class=\"form-control\"  style=\"color: grey;\" id=\"phone\" placeholder=\"\">
                    </div>




                    <div class=\"form-group\">
                        <p>*Klikając akceptuj zadanie potwierdzam, że:<br>- posiadam odpowiednią kwote do zapłacenia za zlecenie <br> -  akceptuje ryzyko projektowe.</p>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <input type=\"hidden\" value=\"{{ app.request.get('id') }}\" id=\"postId\">
                <button type=\"button\" class=\"btn btn-danger\" id=\"acceptOffer\" >Stwórz zlecenie</button>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
            </div>
        </div>
    </div>
</div>

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
                    <br>
                    <br>
                    <br>

                </div><!--/ Logo end -->

            </div><!--/ Row end -->
            <h2 style=\"color:white;\">Zleć prace.</h2>


                <span class=\"fa fa-star\" style=\"color: black;\"></span>
                <span class=\"fa fa-star\" style=\"color: black;\"></span>
            </h4>


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
            <div class=\"form-group row\">
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Kategoria</label>
                    <div class=\"input-group\">
                        <input type=\"text\" style=\"color: grey;\"  size=\"50\" class=\"form-control\" id=\"category\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Technologia</label>
                    <div class=\"input-group\">
                        <input type=\"text\" size=\"50\" style=\"color: grey;\" class=\"form-control\" id=\"technology\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Cena w PLN</label>
                    <div class=\"input-group\">
                        <input type=\"text\"   size=\"50\" style=\"color: grey;\" class=\"form-control\" id=\"price\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Szacowany czas</label>
                    <div class=\"input-group\">
                        <input type=\"text\"   size=\"50\" style=\"color: grey;\" class=\"form-control\" id=\"time\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Zakres</label>
                    <div class=\"input-group\">
                        <input type=\"text\"  size=\"50\"  style=\"color: grey;\"class=\"form-control\" id=\"scope\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationServerUsername\">Wymagane umiejętnośći</label>
                    <div class=\"input-group\">
                        <input type=\"text\"  size=\"50\" style=\"color: grey;\" class=\"form-control is-invalid\" id=\"skills\" placeholder=\"\" aria-describedby=\"inputGroupPrepend3\" required>
                    </div>
                </div>
            </div>



            <div class=\"form-group mb-5\">
                <label for=\"exampleFormControlTextarea1\" class=\"\">Opis zadania</label>
                <textarea style=\"color: grey;\" class=\"form-control rounded-0\" id=\"desc\" rows=\"50\"></textarea>
            </div>

            <button class=\"btn btn-light\">back</button>
            <button class=\"btn btn-danger\" data-toggle=\"modal\" id=\"create\" data-target=\"#confirmModal\">create</button>




        </div>
            <br>

        </div>
    </section><!--/ Service box end -->




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
</html>", "employer/trial.html.twig", "/home/resident/polisoft/templates/employer/trial.html.twig");
    }
}