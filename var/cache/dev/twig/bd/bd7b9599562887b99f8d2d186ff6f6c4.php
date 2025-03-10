<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* auth/register.html.twig */
class __TwigTemplate_07f751048b64d0a399c3cf40022fe2e4 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $this->parent = $this->loadTemplate("auth.html.twig", "auth/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <!-- Page -->
    <div class=\"flex items-center justify-center grow bg-center bg-no-repeat page-bg\">
        <div class=\"card max-w-[370px] w-full\">
            <form action=\"#\" class=\"card-body flex flex-col gap-5 p-10\" id=\"sign_up_form\" method=\"post\">
                <div class=\"text-center mb-2.5\">
                    <h3 class=\"text-lg font-medium text-gray-900 leading-none mb-2.5\">
                        Inscription
                    </h3>
                    <div class=\"flex items-center justify-center\">
                        <span class=\"text-2sm text-gray-700 me-1.5\">
                        Vous avez déjà un compte ?
                        </span>
                        <a class=\"text-2sm link\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth.login");
        yield "\">
                            Me connecter
                        </a>
                    </div>
                </div>

                <div class=\"flex flex-col gap-1\">
                    <label class=\"form-label text-gray-900\">Email</label>
                    <input class=\"input\" name=\"user_email\" placeholder=\"Adresse email\" type=\"text\" value=\"\"/>
                </div>
                <div class=\"flex flex-col gap-1\">
                    <label class=\"form-label font-normal text-gray-900\">Mot de passe</label>
                    <div class=\"input\" data-toggle-password=\"true\">
                        <input name=\"user_password\" placeholder=\"Mot de passe\" type=\"password\" value=\"\">
                        <button class=\"btn btn-icon\" data-toggle-password-trigger=\"true\" type=\"button\">
                            <i class=\"ki-filled ki-eye text-gray-500 toggle-password-active:hidden\">
                            </i>
                            <i class=\"ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block\">
                            </i>
                        </button>
                        </input>
                    </div>
                </div>
                <div class=\"flex flex-col gap-1\">
                    <label class=\"form-label font-normal text-gray-900\">
                        Confirmer le mot de passe
                    </label>
                    <div class=\"input\" data-toggle-password=\"true\">
                        <input name=\"user_password\" placeholder=\"Confirmez le mot de passe\" type=\"password\" value=\"\"/>
                        <button class=\"btn btn-icon\" data-toggle-password-trigger=\"true\" type=\"button\">
                            <i class=\"ki-filled ki-eye text-gray-500 toggle-password-active:hidden\">
                            </i>
                            <i class=\"ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block\">
                            </i>
                        </button>
                    </div>
                </div>
                <label class=\"checkbox-group\">
                    <input class=\"checkbox checkbox-sm\" name=\"check\" type=\"checkbox\" value=\"1\"/>
                    <span class=\"checkbox-label\">
                        J'accepte les <a class=\"text-2sm link\" href=\"#\">GCU</a>
                    </span>
                </label>
                <button class=\"btn btn-primary flex justify-center grow\">Inscription</button>
            </form>
        </div>
    </div>
    <!-- End of Page -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "auth/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  99 => 18,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'auth.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <!-- Page -->
    <div class=\"flex items-center justify-center grow bg-center bg-no-repeat page-bg\">
        <div class=\"card max-w-[370px] w-full\">
            <form action=\"#\" class=\"card-body flex flex-col gap-5 p-10\" id=\"sign_up_form\" method=\"post\">
                <div class=\"text-center mb-2.5\">
                    <h3 class=\"text-lg font-medium text-gray-900 leading-none mb-2.5\">
                        Inscription
                    </h3>
                    <div class=\"flex items-center justify-center\">
                        <span class=\"text-2sm text-gray-700 me-1.5\">
                        Vous avez déjà un compte ?
                        </span>
                        <a class=\"text-2sm link\" href=\"{{ path('auth.login') }}\">
                            Me connecter
                        </a>
                    </div>
                </div>

                <div class=\"flex flex-col gap-1\">
                    <label class=\"form-label text-gray-900\">Email</label>
                    <input class=\"input\" name=\"user_email\" placeholder=\"Adresse email\" type=\"text\" value=\"\"/>
                </div>
                <div class=\"flex flex-col gap-1\">
                    <label class=\"form-label font-normal text-gray-900\">Mot de passe</label>
                    <div class=\"input\" data-toggle-password=\"true\">
                        <input name=\"user_password\" placeholder=\"Mot de passe\" type=\"password\" value=\"\">
                        <button class=\"btn btn-icon\" data-toggle-password-trigger=\"true\" type=\"button\">
                            <i class=\"ki-filled ki-eye text-gray-500 toggle-password-active:hidden\">
                            </i>
                            <i class=\"ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block\">
                            </i>
                        </button>
                        </input>
                    </div>
                </div>
                <div class=\"flex flex-col gap-1\">
                    <label class=\"form-label font-normal text-gray-900\">
                        Confirmer le mot de passe
                    </label>
                    <div class=\"input\" data-toggle-password=\"true\">
                        <input name=\"user_password\" placeholder=\"Confirmez le mot de passe\" type=\"password\" value=\"\"/>
                        <button class=\"btn btn-icon\" data-toggle-password-trigger=\"true\" type=\"button\">
                            <i class=\"ki-filled ki-eye text-gray-500 toggle-password-active:hidden\">
                            </i>
                            <i class=\"ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block\">
                            </i>
                        </button>
                    </div>
                </div>
                <label class=\"checkbox-group\">
                    <input class=\"checkbox checkbox-sm\" name=\"check\" type=\"checkbox\" value=\"1\"/>
                    <span class=\"checkbox-label\">
                        J'accepte les <a class=\"text-2sm link\" href=\"#\">GCU</a>
                    </span>
                </label>
                <button class=\"btn btn-primary flex justify-center grow\">Inscription</button>
            </form>
        </div>
    </div>
    <!-- End of Page -->
{% endblock %}
", "auth/register.html.twig", "/Users/kilianschaar/BookMasterKilianSCHAAR/templates/auth/register.html.twig");
    }
}
