<?php

/* @WebacademieIntranet\Tutorial\exercise.html.twig */
class __TwigTemplate_20ab9346d4eda7fae9b17090916a692bab0fe6665527b3e3d6c875cda064836c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebacademieIntranet/layout.html.twig", "@WebacademieIntranet\\Tutorial\\exercise.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar_menu_list' => array($this, 'block_navbar_menu_list'),
            'menu_list' => array($this, 'block_menu_list'),
            'webacademieintranet_body' => array($this, 'block_webacademieintranet_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebacademieIntranet/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebacademieIntranet\\Tutorial\\exercise.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebacademieIntranet\\Tutorial\\exercise.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tTutoriel - Exercice 1
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/exercise.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_navbar_menu_list($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_menu_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_menu_list"));

        // line 14
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_dashboard");
        echo "\" class=\"navbar-item\">TABLEAU DE BORD</a>
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_homepage");
        echo "\" class=\"navbar-item is-active\">TUTORIELS</a>

    <ul class=\"navbar-list\">
        <li>
            <a class=\"navbar-item\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_chapter");
        echo "\">CHAPITRES</a>
        </li>

        <li>
            <a class=\"navbar-item\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_video");
        echo "\">VIDÉOS</a>
        </li>

        <li>
            <a class=\"navbar-item is-active\" href=\"#\">EXERCICES</a>
        </li>

        <li>
            <ul class=\"navbar-sublist\">
                <li>
                    <a class=\"navbar-item is-active\" href=\"#\">EXERCICE 1</a>
                </li>

                <li>
                    <a class=\"navbar-item\" href=\"#\">EXERCICE 2</a>
                </li>

                <li>
                    <a class=\"navbar-item\" href=\"#\">EXERCICE 3</a>
                </li>
            </ul>
        </li>
    </ul>

    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\" class=\"navbar-item\">PROFIL</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_menu_list($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        // line 51
        echo "\t<li>
        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_dashboard");
        echo "\" class=\"sidebar-label\" id=\"dashboard-label\">
            <img id=\"dashboard-img\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/white/dashboard.png"), "html", null, true);
        echo "\" alt=\"Icône Tableau de bord\" />
            TABLEAU DE BORD
        </a>
    </li>

    <li>
        <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_homepage");
        echo "\" class=\"sidebar-label sidebar-active\" id=\"tutorial-label\">
            <img id=\"tutorial-img\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/blue/tutorial.png"), "html", null, true);
        echo "\" alt=\"Icône Tutoriels\" />
            TUTORIELS
        </a>

        <ul class=\"menu-sublist\">
            <li>
                <a class=\"menu-item-sublist\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_chapter");
        echo "\">CHAPITRES</a>
            </li>

            <li>
                <a class=\"menu-item-sublist\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_video");
        echo "\">VIDÉOS</a>
            </li>

            <li>
                <a class=\"menu-item-sublist subitem-is-active\"  href=\"#\">EXERCICES</a>
            </li>

            <li>
                <ul class=\"menu-subsublist\">
                    <li>
                        <a class=\"menu-item-sublist subitem-is-active\" href=\"#\">EXERCICE 1</a>
                    </li>
                    
                    <li>
                        <a class=\"menu-item-sublist\" href=\"#\">EXERCICE 2</a>
                    </li>
                    
                    <li>
                        <a class=\"menu-item-sublist\" href=\"#\">EXERCICE 3</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>

    <li>
        <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\" class=\"sidebar-label\" id=\"profile-label\">
            <img id=\"profile-img\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/white/profile.png"), "html", null, true);
        echo "\" alt=\"Icône Profil\" />
            PROFIL
        </a>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_webacademieintranet_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "webacademieintranet_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "webacademieintranet_body"));

        // line 104
        echo "    <div>
        <p>PHP - Les variables</p>
        <p>Semestre 1</p>
    </div>

    <nav class=\"navbar is-hidden-mobile index-navbar\" role=\"navigation\" aria-label=\"main navigation\">
        <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/php-1280px.png"), "html", null, true);
        echo "\" />

        <div class=\"navbar-brand\">
            <div class=\"navbar-item has-dropdown is-hoverable\">
                <a class=\"navbar-link\">Exercice 1</a>

                <div class=\"navbar-dropdown\">
                    <a class=\"navbar-item\" href=\"#\">Exercice 2</a>
                    <a class=\"navbar-item\" href=\"#\">Exercice 3</a>
                </div>
            </div>
        </div>
    </nav>

    <div>
        <p>Exercice 1 - Présentation générale</p>

        <p>
            Parmi les variables suivantes, lesquelles ont un nom valide :
            <strong>mavar, \$mavar, \$var5, \$_mavar, \$_5var, \$_élément1, \$hotel4* ?</strong>
        </p>

        <p>Solution</p>

        <p>
            Les noms <strong>\$mavar, \$var5, \$_5var, \$_élément1</strong> respectent les conventions.
            Les autres ne sont pas valides : <strong>mavar</strong> ne commence pas par le caractère <strong>\$</strong> et <strong>\$hotel4*</strong> se termine par le caractère *.
        </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebacademieIntranet\\Tutorial\\exercise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 110,  264 => 104,  255 => 103,  240 => 97,  236 => 96,  207 => 70,  200 => 66,  191 => 60,  187 => 59,  178 => 53,  174 => 52,  171 => 51,  162 => 50,  150 => 47,  123 => 23,  116 => 19,  109 => 15,  104 => 14,  95 => 13,  83 => 10,  77 => 8,  68 => 7,  57 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebacademieIntranet/layout.html.twig' %}

{% block title %}
\tTutoriel - Exercice 1
{% endblock title %}

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/exercise.css') }}\" />
{% endblock stylesheets %}

{% block navbar_menu_list %}
    <a href=\"{{ path('webacademie_intranet_dashboard') }}\" class=\"navbar-item\">TABLEAU DE BORD</a>
    <a href=\"{{ path('webacademie_intranet_homepage') }}\" class=\"navbar-item is-active\">TUTORIELS</a>

    <ul class=\"navbar-list\">
        <li>
            <a class=\"navbar-item\" href=\"{{ path('webacademie_intranet_chapter') }}\">CHAPITRES</a>
        </li>

        <li>
            <a class=\"navbar-item\" href=\"{{ path('webacademie_intranet_video') }}\">VIDÉOS</a>
        </li>

        <li>
            <a class=\"navbar-item is-active\" href=\"#\">EXERCICES</a>
        </li>

        <li>
            <ul class=\"navbar-sublist\">
                <li>
                    <a class=\"navbar-item is-active\" href=\"#\">EXERCICE 1</a>
                </li>

                <li>
                    <a class=\"navbar-item\" href=\"#\">EXERCICE 2</a>
                </li>

                <li>
                    <a class=\"navbar-item\" href=\"#\">EXERCICE 3</a>
                </li>
            </ul>
        </li>
    </ul>

    <a href=\"{{ path('fos_user_profile_show') }}\" class=\"navbar-item\">PROFIL</a>
{% endblock navbar_menu_list %}

{% block menu_list %}
\t<li>
        <a href=\"{{ path('webacademie_intranet_dashboard') }}\" class=\"sidebar-label\" id=\"dashboard-label\">
            <img id=\"dashboard-img\" src=\"{{ asset('assets/images/icons/white/dashboard.png') }}\" alt=\"Icône Tableau de bord\" />
            TABLEAU DE BORD
        </a>
    </li>

    <li>
        <a href=\"{{ path('webacademie_intranet_homepage') }}\" class=\"sidebar-label sidebar-active\" id=\"tutorial-label\">
            <img id=\"tutorial-img\" src=\"{{ asset('assets/images/icons/blue/tutorial.png') }}\" alt=\"Icône Tutoriels\" />
            TUTORIELS
        </a>

        <ul class=\"menu-sublist\">
            <li>
                <a class=\"menu-item-sublist\" href=\"{{ path('webacademie_intranet_chapter') }}\">CHAPITRES</a>
            </li>

            <li>
                <a class=\"menu-item-sublist\" href=\"{{ path('webacademie_intranet_video') }}\">VIDÉOS</a>
            </li>

            <li>
                <a class=\"menu-item-sublist subitem-is-active\"  href=\"#\">EXERCICES</a>
            </li>

            <li>
                <ul class=\"menu-subsublist\">
                    <li>
                        <a class=\"menu-item-sublist subitem-is-active\" href=\"#\">EXERCICE 1</a>
                    </li>
                    
                    <li>
                        <a class=\"menu-item-sublist\" href=\"#\">EXERCICE 2</a>
                    </li>
                    
                    <li>
                        <a class=\"menu-item-sublist\" href=\"#\">EXERCICE 3</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>

    <li>
        <a href=\"{{ path('fos_user_profile_show') }}\" class=\"sidebar-label\" id=\"profile-label\">
            <img id=\"profile-img\" src=\"{{ asset('assets/images/icons/white/profile.png') }}\" alt=\"Icône Profil\" />
            PROFIL
        </a>
    </li>
{% endblock menu_list %}

{% block webacademieintranet_body %}
    <div>
        <p>PHP - Les variables</p>
        <p>Semestre 1</p>
    </div>

    <nav class=\"navbar is-hidden-mobile index-navbar\" role=\"navigation\" aria-label=\"main navigation\">
        <img src=\"{{ asset('assets/images/logos/languages/php-1280px.png') }}\" />

        <div class=\"navbar-brand\">
            <div class=\"navbar-item has-dropdown is-hoverable\">
                <a class=\"navbar-link\">Exercice 1</a>

                <div class=\"navbar-dropdown\">
                    <a class=\"navbar-item\" href=\"#\">Exercice 2</a>
                    <a class=\"navbar-item\" href=\"#\">Exercice 3</a>
                </div>
            </div>
        </div>
    </nav>

    <div>
        <p>Exercice 1 - Présentation générale</p>

        <p>
            Parmi les variables suivantes, lesquelles ont un nom valide :
            <strong>mavar, \$mavar, \$var5, \$_mavar, \$_5var, \$_élément1, \$hotel4* ?</strong>
        </p>

        <p>Solution</p>

        <p>
            Les noms <strong>\$mavar, \$var5, \$_5var, \$_élément1</strong> respectent les conventions.
            Les autres ne sont pas valides : <strong>mavar</strong> ne commence pas par le caractère <strong>\$</strong> et <strong>\$hotel4*</strong> se termine par le caractère *.
        </p>
    </div>
{% endblock webacademieintranet_body %}
", "@WebacademieIntranet\\Tutorial\\exercise.html.twig", "/home/greg/Developpement/Perso_project_Webacademie_Intranet/src/Webacademie/IntranetBundle/Resources/views/Tutorial/exercise.html.twig");
    }
}
