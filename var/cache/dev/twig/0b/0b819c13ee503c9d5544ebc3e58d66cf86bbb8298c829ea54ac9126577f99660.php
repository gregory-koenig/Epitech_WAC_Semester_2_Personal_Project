<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_95c78f767b92fcd2ada3bdcc4f21b3beaa3947b2752b6d0762b921d9afafbe99 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 1
        echo "<div class=\"columns login-columns\">
    <div class=\"column\"></div>

    <div class=\"column is-one-fifths login-box\">
        <div class=\"box-form\">
            <h3 class=\"title is-3 login-title\">CONNEXION</h3>

            <form class=\"login-form\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                ";
        // line 9
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" />
                ";
        }
        // line 12
        echo "
                <div class=\"field login-field\">
                    <label class=\"label login-label label-mail\" for=\"username\">Adresse e-mail</label>

                    <div class=\"control\">
                        <input class=\"input input-form\" type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" placeholder=\"prenom.nom@epitech.eu\" />
                    </div>
                </div>

                <div class=\"field login-field field-password\">
                    <label class=\"label login-label label-password\" for=\"password\">Mot de passe</label>

                    <div class=\"control\">
                        <input class=\"input input-form\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"*********\" />
                    </div>
                </div>

                <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("webacademie_intranet_dashboard");
        echo "\" />

                <div class=\"has-text-centered box-button\">
                    <input class=\"button is-rounded button-form\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Me connecter\" />
                </div>
            </form>
        </div>

        ";
        // line 37
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "            <div class=\"notification is-danger\">
                <button class=\"delete\"></button>
                L'identifiant ou le mot de passe est erroné.
            </div>
        ";
        }
        // line 43
        echo "    </div>

    <div class=\"column\"></div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 43,  85 => 38,  83 => 37,  72 => 29,  57 => 17,  50 => 12,  44 => 10,  42 => 9,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"columns login-columns\">
    <div class=\"column\"></div>

    <div class=\"column is-one-fifths login-box\">
        <div class=\"box-form\">
            <h3 class=\"title is-3 login-title\">CONNEXION</h3>

            <form class=\"login-form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}

                <div class=\"field login-field\">
                    <label class=\"label login-label label-mail\" for=\"username\">Adresse e-mail</label>

                    <div class=\"control\">
                        <input class=\"input input-form\" type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" placeholder=\"prenom.nom@epitech.eu\" />
                    </div>
                </div>

                <div class=\"field login-field field-password\">
                    <label class=\"label login-label label-password\" for=\"password\">Mot de passe</label>

                    <div class=\"control\">
                        <input class=\"input input-form\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"*********\" />
                    </div>
                </div>

                <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('webacademie_intranet_dashboard') }}\" />

                <div class=\"has-text-centered box-button\">
                    <input class=\"button is-rounded button-form\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Me connecter\" />
                </div>
            </form>
        </div>

        {% if error %}
            <div class=\"notification is-danger\">
                <button class=\"delete\"></button>
                L'identifiant ou le mot de passe est erroné.
            </div>
        {% endif %}
    </div>

    <div class=\"column\"></div>
</div>
", "@FOSUser/Security/login_content.html.twig", "/home/greg/Developpement/Perso_project_Webacademie_Intranet/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
