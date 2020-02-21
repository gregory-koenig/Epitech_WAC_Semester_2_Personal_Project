<?php

/* @WebacademieIntranet\Tutorial\dashboard.html.twig */
class __TwigTemplate_fe64c7ed9a57dcd217f5afa1cfa1435366cd1249f40a4de6ff8e5432adeb54e6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebacademieIntranet/layout.html.twig", "@WebacademieIntranet\\Tutorial\\dashboard.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebacademieIntranet\\Tutorial\\dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebacademieIntranet\\Tutorial\\dashboard.html.twig"));

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
        echo "\tTableau de bord
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
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_navbar_menu_list($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_menu_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_menu_list"));

        // line 13
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_dashboard");
        echo "\" class=\"navbar-item is-active\">TABLEAU DE BORD</a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_homepage");
        echo "\" class=\"navbar-item\">TUTORIELS</a>
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\" class=\"navbar-item\">PROFIL</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_menu_list($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        // line 19
        echo "\t<li>
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_dashboard");
        echo "\" class=\"sidebar-label sidebar-active\" id=\"dashboard-label\">
            <img id=\"dashboard-img\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/blue/dashboard.png"), "html", null, true);
        echo "\" alt=\"Icône Tableau de bord\" />
            TABLEAU DE BORD
        </a>
    </li>

    <li>
        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_homepage");
        echo "\" class=\"sidebar-label\" id=\"tutorial-label\">
            <img id=\"tutorial-img\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/white/tutorial.png"), "html", null, true);
        echo "\" alt=\"Icône Tutoriels\" />
            TUTORIELS
        </a>
    </li>

    <li>
        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\" class=\"sidebar-label\" id=\"profile-label\">
            <img id=\"profile-img\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/white/profile.png"), "html", null, true);
        echo "\" alt=\"Icône Profil\" />
            PROFIL
        </a>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_webacademieintranet_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "webacademieintranet_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "webacademieintranet_body"));

        // line 42
        echo "    <div>
        <p>Vidéos</p>
        <p>3</p>
    </div>

    <div>
        <p>Cours</p>
        <p>4</p>
    </div>

    <div>
        <p>Exercices</p>
        <p>2</p>
    </div>

    <div>
        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/photos/photo-identité-laura-150x150.jpg"), "html", null, true);
        echo "\" />
        <p>Jane Doe</p>
    </div>

    <nav class=\"navbar is-hidden-mobile index-navbar\" role=\"navigation\" aria-label=\"main navigation\">
        <p>Historique des tutoriels</p>

        <div class=\"navbar-brand\">
            <div class=\"navbar-item has-dropdown is-hoverable\">
                <a class=\"navbar-link\">Semestre 1</a>

                <div class=\"navbar-dropdown\">
                    <a class=\"navbar-item\" href=\"#\">Semestre 2</a>
                </div>
            </div>
        </div>
    </nav>

    <table class=\"table\">
        <tr class=\"table-stripe\">
            <td class=\"cell-img\">
                <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_chapter");
        echo "\">
                    <img class=\"table-img\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/php-1280px.png"), "html", null, true);
        echo "\" />
                </a>
            </td>
            <td>PHP - Les variables</td>
        </tr>

        <tr class=\"table-stripe\">
            <td class=\"cell-img\">
                <a href=\"#\">
                    <img class=\"table-img\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/html5-512px.png"), "html", null, true);
        echo "\" />
                </a>
            </td>
            <td>HTML5 - Les balises</td>
        </tr>

        <tr class=\"table-stripe\">
            <td class=\"cell-img\">
                <a href=\"#\">
                    <img class=\"table-img\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/css3.png"), "html", null, true);
        echo "\" />
                </a>
            </td>
            <td>CSS3 - Les bordures</td>
        </tr>

        <tr class=\"table-stripe\">
            <td class=\"cell-img\">
                <a href=\"#\">
                    <img class=\"table-img\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/javascript.png"), "html", null, true);
        echo "\" />
                </a>
            </td>
            <td>JavaScript - Les fonctions</td>
        </tr>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebacademieIntranet\\Tutorial\\dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 107,  260 => 98,  248 => 89,  236 => 80,  232 => 79,  208 => 58,  190 => 42,  181 => 41,  166 => 35,  162 => 34,  153 => 28,  149 => 27,  140 => 21,  136 => 20,  133 => 19,  124 => 18,  112 => 15,  108 => 14,  103 => 13,  94 => 12,  82 => 9,  77 => 8,  68 => 7,  57 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebacademieIntranet/layout.html.twig' %}

{% block title %}
\tTableau de bord
{% endblock title %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/index.css') }}\" />
{% endblock stylesheets %}

{% block navbar_menu_list %}
    <a href=\"{{ path('webacademie_intranet_dashboard') }}\" class=\"navbar-item is-active\">TABLEAU DE BORD</a>
    <a href=\"{{ path('webacademie_intranet_homepage') }}\" class=\"navbar-item\">TUTORIELS</a>
    <a href=\"{{ path('fos_user_profile_show') }}\" class=\"navbar-item\">PROFIL</a>
{% endblock navbar_menu_list %}

{% block menu_list %}
\t<li>
        <a href=\"{{ path('webacademie_intranet_dashboard') }}\" class=\"sidebar-label sidebar-active\" id=\"dashboard-label\">
            <img id=\"dashboard-img\" src=\"{{ asset('assets/images/icons/blue/dashboard.png') }}\" alt=\"Icône Tableau de bord\" />
            TABLEAU DE BORD
        </a>
    </li>

    <li>
        <a href=\"{{ path('webacademie_intranet_homepage') }}\" class=\"sidebar-label\" id=\"tutorial-label\">
            <img id=\"tutorial-img\" src=\"{{ asset('assets/images/icons/white/tutorial.png') }}\" alt=\"Icône Tutoriels\" />
            TUTORIELS
        </a>
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
        <p>Vidéos</p>
        <p>3</p>
    </div>

    <div>
        <p>Cours</p>
        <p>4</p>
    </div>

    <div>
        <p>Exercices</p>
        <p>2</p>
    </div>

    <div>
        <img src=\"{{ asset('assets/images/photos/photo-identité-laura-150x150.jpg') }}\" />
        <p>Jane Doe</p>
    </div>

    <nav class=\"navbar is-hidden-mobile index-navbar\" role=\"navigation\" aria-label=\"main navigation\">
        <p>Historique des tutoriels</p>

        <div class=\"navbar-brand\">
            <div class=\"navbar-item has-dropdown is-hoverable\">
                <a class=\"navbar-link\">Semestre 1</a>

                <div class=\"navbar-dropdown\">
                    <a class=\"navbar-item\" href=\"#\">Semestre 2</a>
                </div>
            </div>
        </div>
    </nav>

    <table class=\"table\">
        <tr class=\"table-stripe\">
            <td class=\"cell-img\">
                <a href=\"{{ path('webacademie_intranet_chapter') }}\">
                    <img class=\"table-img\" src=\"{{ asset('assets/images/logos/languages/php-1280px.png') }}\" />
                </a>
            </td>
            <td>PHP - Les variables</td>
        </tr>

        <tr class=\"table-stripe\">
            <td class=\"cell-img\">
                <a href=\"#\">
                    <img class=\"table-img\" src=\"{{ asset('assets/images/logos/languages/html5-512px.png') }}\" />
                </a>
            </td>
            <td>HTML5 - Les balises</td>
        </tr>

        <tr class=\"table-stripe\">
            <td class=\"cell-img\">
                <a href=\"#\">
                    <img class=\"table-img\" src=\"{{ asset('assets/images/logos/languages/css3.png') }}\" />
                </a>
            </td>
            <td>CSS3 - Les bordures</td>
        </tr>

        <tr class=\"table-stripe\">
            <td class=\"cell-img\">
                <a href=\"#\">
                    <img class=\"table-img\" src=\"{{ asset('assets/images/logos/languages/javascript.png') }}\" />
                </a>
            </td>
            <td>JavaScript - Les fonctions</td>
        </tr>
    </table>


{% endblock webacademieintranet_body %}
", "@WebacademieIntranet\\Tutorial\\dashboard.html.twig", "/home/greg/Developpement/Perso_project_Webacademie_Intranet/src/Webacademie/IntranetBundle/Resources/views/Tutorial/dashboard.html.twig");
    }
}
