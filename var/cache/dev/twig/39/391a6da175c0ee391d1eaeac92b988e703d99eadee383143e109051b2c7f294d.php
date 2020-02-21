<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_dc04f213faa80c189b73abecfb5b3d3cd2a9001f0aefa86a04c49bcda71d9a40 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
\t<h3 class=\"title is-3 profile-title\">PROFIL</h3>

\t<div class=\"columns\">
\t\t<div class=\"column\">
\t\t\t<img class=\"profile-photo\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->source); })()), "photo", array()), "html", null, true);
        echo "\" alt=\"Photo\" />

\t\t    <p class=\"profile-name\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->source); })()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->source); })()), "lastName", array()), "html", null, true);
        echo "</p>

\t\t\t<div class=\"field profile-field\">
\t            <label class=\"label profile-label label-mail\" for=\"username\">Adresse e-mail</label>

\t            <div class=\"control profile-input\">
\t            \t<p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->source); })()), "email", array()), "html", null, true);
        echo "</p>
\t            </div>
\t        </div>

\t\t\t<div class=\"field profile-field\">
\t            <label class=\"label profile-label label-wac\" for=\"username\">Web@cadémie</label>

\t            <div class=\"control profile-input\">
\t            \t<p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 24, $this->source); })()), "webacademie", array()), "html", null, true);
        echo "</p>
\t            </div>
\t        </div>
\t    </div>

\t    <div class=\"column\">
\t    \t<form class=\"profile-form\" action=\"\" method=\"\">
                <div class=\"field profile-form-field form-password\">
                    <label class=\"label profile-label label-password\" for=\"password\">Mot de passe</label>

                    <div class=\"control\">
                        <input class=\"input input-form\" type=\"password\" id=\"password\" name=\"_password\" autocomplete=\"new-password\" placeholder=\"*********\" />
                    </div>
                </div>

                <div class=\"field profile-form-field form-confirm-password\">
                    <label class=\"label profile-label label-confirm-password\" for=\"confirmed-password\">Confirmer mot de passe</label>

                    <div class=\"control\">
                        <input class=\"input input-form\" type=\"password\" id=\"confirm-password\" name=\"confirm-password\" autocomplete=\"new-password\" placeholder=\"*********\" />

                    </div>
                </div>

                <div class=\"field profile-form-field form-address\">
                    <label class=\"label profile-label label-address\" for=\"address\">Adresse</label>

                    <div class=\"control\">
                        <input class=\"input input-form\" type=\"text\" id=\"address\" name=\"address\" autocomplete=\"current-password\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 52, $this->source); })()), "address", array()), "html", null, true);
        echo "\" />
                    </div>
                </div>

                <div class=\"has-text-centered form-button\">
                    <input class=\"button is-rounded button-form\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Modifier\" />
                </div>
            </form>
\t    </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 52,  64 => 24,  53 => 16,  42 => 10,  37 => 8,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
\t<h3 class=\"title is-3 profile-title\">PROFIL</h3>

\t<div class=\"columns\">
\t\t<div class=\"column\">
\t\t\t<img class=\"profile-photo\" src=\"{{ user.photo }}\" alt=\"Photo\" />

\t\t    <p class=\"profile-name\">{{ user.firstName }} {{ user.lastName }}</p>

\t\t\t<div class=\"field profile-field\">
\t            <label class=\"label profile-label label-mail\" for=\"username\">Adresse e-mail</label>

\t            <div class=\"control profile-input\">
\t            \t<p>{{ user.email }}</p>
\t            </div>
\t        </div>

\t\t\t<div class=\"field profile-field\">
\t            <label class=\"label profile-label label-wac\" for=\"username\">Web@cadémie</label>

\t            <div class=\"control profile-input\">
\t            \t<p>{{ user.webacademie }}</p>
\t            </div>
\t        </div>
\t    </div>

\t    <div class=\"column\">
\t    \t<form class=\"profile-form\" action=\"\" method=\"\">
                <div class=\"field profile-form-field form-password\">
                    <label class=\"label profile-label label-password\" for=\"password\">Mot de passe</label>

                    <div class=\"control\">
                        <input class=\"input input-form\" type=\"password\" id=\"password\" name=\"_password\" autocomplete=\"new-password\" placeholder=\"*********\" />
                    </div>
                </div>

                <div class=\"field profile-form-field form-confirm-password\">
                    <label class=\"label profile-label label-confirm-password\" for=\"confirmed-password\">Confirmer mot de passe</label>

                    <div class=\"control\">
                        <input class=\"input input-form\" type=\"password\" id=\"confirm-password\" name=\"confirm-password\" autocomplete=\"new-password\" placeholder=\"*********\" />

                    </div>
                </div>

                <div class=\"field profile-form-field form-address\">
                    <label class=\"label profile-label label-address\" for=\"address\">Adresse</label>

                    <div class=\"control\">
                        <input class=\"input input-form\" type=\"text\" id=\"address\" name=\"address\" autocomplete=\"current-password\" value=\"{{ user.address }}\" />
                    </div>
                </div>

                <div class=\"has-text-centered form-button\">
                    <input class=\"button is-rounded button-form\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Modifier\" />
                </div>
            </form>
\t    </div>
    </div>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/home/greg/Developpement/Perso_project_Webacademie_Intranet/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
