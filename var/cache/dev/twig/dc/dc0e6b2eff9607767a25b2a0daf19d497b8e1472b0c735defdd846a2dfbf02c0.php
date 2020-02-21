<?php

/* @WebacademieIntranet\Tutorial\index.html.twig */
class __TwigTemplate_ea44e26c4d9889cadd2b7b9943123a227ec9ac969bda361288b0748b82e8e97e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebacademieIntranet/layout.html.twig", "@WebacademieIntranet\\Tutorial\\index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebacademieIntranet\\Tutorial\\index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebacademieIntranet\\Tutorial\\index.html.twig"));

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
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/index.css"), "html", null, true);
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
    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\" class=\"navbar-item\">PROFIL</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_menu_list($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        // line 20
        echo "\t<li>
        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_dashboard");
        echo "\" class=\"sidebar-label\" id=\"dashboard-label\">
            <img id=\"dashboard-img\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/white/dashboard.png"), "html", null, true);
        echo "\" alt=\"Icône Tableau de bord\" />
            TABLEAU DE BORD
        </a>
    </li>

    <li>
        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_homepage");
        echo "\" class=\"sidebar-label sidebar-active\" id=\"tutorial-label\">
            <img id=\"tutorial-img\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/blue/tutorial.png"), "html", null, true);
        echo "\" alt=\"Icône Tutoriels\" />
            TUTORIELS
        </a>
    </li>

    <li>
        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\" class=\"sidebar-label\" id=\"profile-label\">
            <img id=\"profile-img\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/white/profile.png"), "html", null, true);
        echo "\" alt=\"Icône Profil\" />
            PROFIL
        </a>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_webacademieintranet_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "webacademieintranet_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "webacademieintranet_body"));

        // line 43
        echo "    <nav class=\"navbar is-hidden-mobile index-navbar\" role=\"navigation\" aria-label=\"main navigation\">
        <div class=\"navbar-brand\">
            <div class=\"navbar-item has-dropdown is-hoverable\">
                <a class=\"navbar-link\">Semestre 1</a>

                <div class=\"navbar-dropdown\">
                    <a class=\"navbar-item\" href=\"#\">Semestre 2</a>
                </div>
            </div>

            <a class=\"navbar-item img-php\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/php-1280px.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item img-js\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/javascript.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item img-html\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/html5-512px.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item img-css\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/css3.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item img-sym\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/symfony.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item img-jq\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/jquery.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item img-sass\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/sass.png"), "html", null, true);
        echo "\" />
            </a>
        </div>
    </nav>

    <nav class=\"navbar is-hidden-desktop\" role=\"navigation\" aria-label=\"main navigation\">
        <div class=\"navbar-brand\">
                <a class=\"navbar-link\">Semestre 1</a>
                <a class=\"navbar-link\" href=\"#\">Semestre 2</a>
        </div>
    </nav>

    <nav class=\"navbar is-hidden-desktop navbar-ipad\" role=\"navigation\" aria-label=\"main navigation\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/php-1280px.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/javascript.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/html5-512px.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/css3.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/symfony.png"), "html", null, true);
        echo "\" />
            </a>
        </div>
    </nav>

    <nav class=\"navbar is-hidden-desktop\" role=\"navigation\" aria-label=\"main navigation\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/jquery.png"), "html", null, true);
        echo "\" />
            </a>

            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/sass.png"), "html", null, true);
        echo "\" />
            </a>
        </div>
    </nav>

    <div class=\"index-table\">
        <p class=\"table-title\">Liste des tutoriels</p>

        <table class=\"table\">
            <tr class=\"table-stripe\">
                <td class=\"cell-img\">
                    <img class=\"table-img\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/php-1280px.png"), "html", null, true);
        echo "\" />
                </td>
                <td>PHP - Les variables</td>
                <td>10 min</td>
                <td>
                    <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_chapter");
        echo "\">
                        <i class=\"fas fa-plus-circle\"></i>
                    </a>
                </td>
            </tr>

            <tr>
                <td>
                    <img class=\"table-img\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/php-1280px.png"), "html", null, true);
        echo "\" />
                </td>
                <td>PHP - Les fonctions</td>
                <td>20 min</td>
                <td>
                    <a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_chapter");
        echo "\">
                        <i class=\"fas fa-plus-circle\"></i>
                    </a>
                </td>
            </tr>

            <tr class=\"table-stripe\">
                <td>
                    <img class=\"table-img\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/php-1280px.png"), "html", null, true);
        echo "\" />
                </td>
                <td>PHP - Les classes</td>
                <td>35 min</td>
                <td>
                    <a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_chapter");
        echo "\">
                        <i class=\"fas fa-plus-circle\"></i>
                    </a>
                </td>
            </tr>

            <tr>
                <td>
                    <img class=\"table-img\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logos/languages/php-1280px.png"), "html", null, true);
        echo "\" />
                </td>
                <td>PHP - POO</td>
                <td>45 min</td>
                <td>
                    <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_chapter");
        echo "\">
                        <i class=\"fas fa-plus-circle\"></i>
                    </a>
                </td>
            </tr>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebacademieIntranet\\Tutorial\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 176,  381 => 171,  370 => 163,  362 => 158,  351 => 150,  343 => 145,  332 => 137,  324 => 132,  310 => 121,  303 => 117,  292 => 109,  285 => 105,  278 => 101,  271 => 97,  264 => 93,  246 => 78,  239 => 74,  232 => 70,  225 => 66,  218 => 62,  211 => 58,  204 => 54,  191 => 43,  182 => 42,  167 => 36,  163 => 35,  154 => 29,  150 => 28,  141 => 22,  137 => 21,  134 => 20,  125 => 19,  113 => 16,  109 => 15,  104 => 14,  95 => 13,  83 => 10,  77 => 8,  68 => 7,  57 => 4,  48 => 3,  15 => 1,);
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
    <a href=\"{{ path('webacademie_intranet_dashboard') }}\" class=\"navbar-item\">TABLEAU DE BORD</a>
    <a href=\"{{ path('webacademie_intranet_homepage') }}\" class=\"navbar-item is-active\">TUTORIELS</a>
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
    </li>

    <li>
        <a href=\"{{ path('fos_user_profile_show') }}\" class=\"sidebar-label\" id=\"profile-label\">
            <img id=\"profile-img\" src=\"{{ asset('assets/images/icons/white/profile.png') }}\" alt=\"Icône Profil\" />
            PROFIL
        </a>
    </li>
{% endblock menu_list %}

{% block webacademieintranet_body %}
    <nav class=\"navbar is-hidden-mobile index-navbar\" role=\"navigation\" aria-label=\"main navigation\">
        <div class=\"navbar-brand\">
            <div class=\"navbar-item has-dropdown is-hoverable\">
                <a class=\"navbar-link\">Semestre 1</a>

                <div class=\"navbar-dropdown\">
                    <a class=\"navbar-item\" href=\"#\">Semestre 2</a>
                </div>
            </div>

            <a class=\"navbar-item img-php\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/php-1280px.png') }}\" />
            </a>

            <a class=\"navbar-item img-js\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/javascript.png') }}\" />
            </a>

            <a class=\"navbar-item img-html\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/html5-512px.png') }}\" />
            </a>

            <a class=\"navbar-item img-css\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/css3.png') }}\" />
            </a>

            <a class=\"navbar-item img-sym\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/symfony.png') }}\" />
            </a>

            <a class=\"navbar-item img-jq\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/jquery.png') }}\" />
            </a>

            <a class=\"navbar-item img-sass\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/sass.png') }}\" />
            </a>
        </div>
    </nav>

    <nav class=\"navbar is-hidden-desktop\" role=\"navigation\" aria-label=\"main navigation\">
        <div class=\"navbar-brand\">
                <a class=\"navbar-link\">Semestre 1</a>
                <a class=\"navbar-link\" href=\"#\">Semestre 2</a>
        </div>
    </nav>

    <nav class=\"navbar is-hidden-desktop navbar-ipad\" role=\"navigation\" aria-label=\"main navigation\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/php-1280px.png') }}\" />
            </a>

            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/javascript.png') }}\" />
            </a>

            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/html5-512px.png') }}\" />
            </a>

            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/css3.png') }}\" />
            </a>

            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/symfony.png') }}\" />
            </a>
        </div>
    </nav>

    <nav class=\"navbar is-hidden-desktop\" role=\"navigation\" aria-label=\"main navigation\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/jquery.png') }}\" />
            </a>

            <a class=\"navbar-item\" href=\"#\">
                <img class=\"img-navbar\" src=\"{{ asset('assets/images/logos/languages/sass.png') }}\" />
            </a>
        </div>
    </nav>

    <div class=\"index-table\">
        <p class=\"table-title\">Liste des tutoriels</p>

        <table class=\"table\">
            <tr class=\"table-stripe\">
                <td class=\"cell-img\">
                    <img class=\"table-img\" src=\"{{ asset('assets/images/logos/languages/php-1280px.png') }}\" />
                </td>
                <td>PHP - Les variables</td>
                <td>10 min</td>
                <td>
                    <a href=\"{{ path('webacademie_intranet_chapter') }}\">
                        <i class=\"fas fa-plus-circle\"></i>
                    </a>
                </td>
            </tr>

            <tr>
                <td>
                    <img class=\"table-img\" src=\"{{ asset('assets/images/logos/languages/php-1280px.png') }}\" />
                </td>
                <td>PHP - Les fonctions</td>
                <td>20 min</td>
                <td>
                    <a href=\"{{ path('webacademie_intranet_chapter') }}\">
                        <i class=\"fas fa-plus-circle\"></i>
                    </a>
                </td>
            </tr>

            <tr class=\"table-stripe\">
                <td>
                    <img class=\"table-img\" src=\"{{ asset('assets/images/logos/languages/php-1280px.png') }}\" />
                </td>
                <td>PHP - Les classes</td>
                <td>35 min</td>
                <td>
                    <a href=\"{{ path('webacademie_intranet_chapter') }}\">
                        <i class=\"fas fa-plus-circle\"></i>
                    </a>
                </td>
            </tr>

            <tr>
                <td>
                    <img class=\"table-img\" src=\"{{ asset('assets/images/logos/languages/php-1280px.png') }}\" />
                </td>
                <td>PHP - POO</td>
                <td>45 min</td>
                <td>
                    <a href=\"{{ path('webacademie_intranet_chapter') }}\">
                        <i class=\"fas fa-plus-circle\"></i>
                    </a>
                </td>
            </tr>
        </table>
    </div>
{% endblock webacademieintranet_body %}
", "@WebacademieIntranet\\Tutorial\\index.html.twig", "/home/greg/Developpement/Perso_project_Webacademie_Intranet/src/Webacademie/IntranetBundle/Resources/views/Tutorial/index.html.twig");
    }
}
