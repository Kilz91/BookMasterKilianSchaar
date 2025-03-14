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

/* components/main/sidebar.html.twig */
class __TwigTemplate_628e948bd960512ecf72e3fbfbd35a44 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/main/sidebar.html.twig"));

        // line 1
        yield "<div class=\"fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0 bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]\"
     data-drawer=\"true\" data-drawer-class=\"drawer drawer-start flex\" data-drawer-enable=\"true|lg:false\"
     id=\"sidebar\">
    <div class=\"hidden lg:flex items-center justify-center shrink-0 pt-8 pb-3.5\" id=\"sidebar_header\">
        <a href=\"html/demo8.html\">
            <img class=\"dark:hidden\" style=\"max-width: 50px;\" src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/icon.png"), "html", null, true);
        yield "\"/>
            <img class=\"hidden dark:block\" style=\"max-width: 50px;\" src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/icon-dark.png"), "html", null, true);
        yield "\"/>
        </a>
    </div>
    <div class=\"scrollable-y-hover grow gap-2.5 shrink-0 flex items-center pt-5 lg:pt-0 ps-3 pe-3 lg:pe-0 flex-col\"
         data-scrollable=\"true\" data-scrollable-dependencies=\"#sidebar_header,#sidebar_footer\"
         data-scrollable-height=\"auto\" data-scrollable-offset=\"80px\"
         data-scrollable-wrappers=\"#sidebar_menu_wrapper\" id=\"sidebar_menu_wrapper\">
        <!-- Sidebar Menu -->
        <div class=\"menu flex flex-col gap-2.5 grow\" data-menu=\"true\" id=\"sidebar_menu\">
            <div class=\"menu-item\">
                <a class=\"menu-link rounded-[9px] border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2\"
                   href=\"/\">
                    <span class=\"menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600\">
                        <i class=\"ki-filled ki-chart-line-star text-1.5xl\"></i>
                    </span>
                    <span class=\"menu-title text-xs menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600 font-medium\">
                        Accueil
                    </span>
                </a>
            </div>
            <div class=\"menu-item\">
                <a class=\"menu-link rounded-[9px] border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2\"
                   href=\"/\">
                    <span class=\"menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600\">
                        <i class=\"ki-filled ki-users text-1.5xl\"></i>
                    </span>
                    <span class=\"menu-title text-xs menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600 font-medium\">
                        Explorer
                    </span>
                </a>
            </div>
            <div class=\"menu-item\" data-menu-item-offset=\"-10px, 14px\" data-menu-item-overflow=\"true\"
                 data-menu-item-placement=\"right-start\" data-menu-item-toggle=\"dropdown\"
                 data-menu-item-trigger=\"click|lg:hover\">
                <div class=\"menu-link rounded-[9px] border border-transparent menu-item-here:border-gray-200 menu-item-here:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2 grow\">
                    <span class=\"menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600\">
                    <i class=\"ki-filled ki-share text-1.5xl\"></i>
                </span>
                <span class=\"menu-title menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary font-medium text-xs text-gray-600\">
                    Aide
                </span>
                </div>
                <div class=\"menu-default menu-dropdown gap-0.5 w-[220px] scrollable-y-auto lg:overflow-visible max-h-[50vh]\">
                    <div class=\"menu-item\">
                        <a class=\"menu-link\" href=\"#\">
                            <span class=\"menu-title\">Nous contacter</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sidebar Menu -->
    </div>
    <div class=\"flex flex-col gap-5 items-center shrink-0 pb-4\" id=\"sidebar_footer\">
        <div class=\"menu\" data-menu=\"true\">
            <div class=\"menu-item\" data-menu-item-offset=\"-20px, 28px\" data-menu-item-overflow=\"true\"
                 data-menu-item-placement=\"right-end\" data-menu-item-toggle=\"dropdown\"
                 data-menu-item-trigger=\"click|lg:click\">
                <div class=\"menu-toggle btn btn-icon\">
                    <img alt=\"\" class=\"size-8 justify-center rounded-lg border border-gray-500 shrink-0\"
                         src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/media/avatars/gray/5.png"), "html", null, true);
        yield "\">
                </div>
                <div class=\"menu-dropdown menu-default light:border-gray-300 w-screen max-w-[250px]\">
                    <div class=\"flex items-center justify-between px-5 py-1.5 gap-1.5\">
                        <div class=\"flex items-center gap-2\">
                            <img alt=\"\" class=\"size-9 rounded-full border-2 border-success\"
                                src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/media/avatars/300-2.png"), "html", null, true);
        yield "\">
                            <div class=\"flex flex-col gap-1.5\">
                            <span class=\"text-sm text-gray-800 font-semibold leading-none\">
                                John Doe
                            </span>
                                <span class=\"text-xs text-gray-600 font-medium leading-none\">
                                    john.doe@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"menu-separator\">
                    </div>
                    <div class=\"flex flex-col\">
                        <div class=\"menu-item\">
                            <a class=\"menu-link\" href=\"#\">
                                <span class=\"menu-icon\">
                                    <i class=\"ki-filled ki-profile-circle\"></i>
                                </span>
                                <span class=\"menu-title\">Mon profil</span>
                            </a>
                        </div>
                        <div class=\"menu-item\" data-menu-item-offset=\"-10px, 0\"
                             data-menu-item-placement=\"left-start\" data-menu-item-toggle=\"dropdown\"
                             data-menu-item-trigger=\"click|lg:hover\">
                            <div class=\"menu-link\">
                                <span class=\"menu-icon\">
                                    <i class=\"ki-filled ki-icon\"></i>
                                </span>
                                <span class=\"menu-title\">Langue</span>
                                <div class=\"flex items-center gap-1.5 rounded-md border border-gray-300 text-gray-600 p-1.5 text-2xs font-medium shrink-0\">
                                    Français
                                    <img alt=\"\" class=\"inline-block size-3.5 rounded-full\"
                                         src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/flags/france.svg"), "html", null, true);
        yield "\"/>
                                </div>
                            </div>
                            <div class=\"menu-dropdown menu-default light:border-gray-300 w-full max-w-[170px]\">
                                <div class=\"menu-item active\">
                                    <a class=\"menu-link h-10\" href=\"?dir=ltr\">
                                        <span class=\"menu-icon\">
                                            <img alt=\"\" class=\"inline-block size-4 rounded-full\" src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/flags/france.svg"), "html", null, true);
        yield "\"/>
                                        </span>
                                        <span class=\"menu-title\">Français</span>
                                        <span class=\"menu-badge\">
                                            <i class=\"ki-solid ki-check-circle text-success text-base\"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"menu-separator\"></div>
                    <div class=\"flex flex-col\">
                        <div class=\"menu-item mb-0.5\">
                            <div class=\"menu-link\">
                                <span class=\"menu-icon\">
                                    <i class=\"ki-filled ki-moon\">
                                    </i>
                                </span>
                                <span class=\"menu-title\">Sombre</span>
                                <label class=\"switch switch-sm\">
                                    <input data-theme-state=\"dark\" data-theme-toggle=\"true\" name=\"check\"
                                           type=\"checkbox\" value=\"1\">
                                </label>
                            </div>
                        </div>
                        <div class=\"menu-item px-4 py-1.5\">
                            <a class=\"btn btn-sm btn-light justify-center\"
                               href=\"login\">
                                Me déconnecer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/main/sidebar.html.twig";
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
        return array (  174 => 113,  164 => 106,  128 => 73,  119 => 67,  56 => 7,  52 => 6,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0 bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]\"
     data-drawer=\"true\" data-drawer-class=\"drawer drawer-start flex\" data-drawer-enable=\"true|lg:false\"
     id=\"sidebar\">
    <div class=\"hidden lg:flex items-center justify-center shrink-0 pt-8 pb-3.5\" id=\"sidebar_header\">
        <a href=\"html/demo8.html\">
            <img class=\"dark:hidden\" style=\"max-width: 50px;\" src=\"{{ asset('media/icon.png') }}\"/>
            <img class=\"hidden dark:block\" style=\"max-width: 50px;\" src=\"{{ asset('media/icon-dark.png') }}\"/>
        </a>
    </div>
    <div class=\"scrollable-y-hover grow gap-2.5 shrink-0 flex items-center pt-5 lg:pt-0 ps-3 pe-3 lg:pe-0 flex-col\"
         data-scrollable=\"true\" data-scrollable-dependencies=\"#sidebar_header,#sidebar_footer\"
         data-scrollable-height=\"auto\" data-scrollable-offset=\"80px\"
         data-scrollable-wrappers=\"#sidebar_menu_wrapper\" id=\"sidebar_menu_wrapper\">
        <!-- Sidebar Menu -->
        <div class=\"menu flex flex-col gap-2.5 grow\" data-menu=\"true\" id=\"sidebar_menu\">
            <div class=\"menu-item\">
                <a class=\"menu-link rounded-[9px] border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2\"
                   href=\"/\">
                    <span class=\"menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600\">
                        <i class=\"ki-filled ki-chart-line-star text-1.5xl\"></i>
                    </span>
                    <span class=\"menu-title text-xs menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600 font-medium\">
                        Accueil
                    </span>
                </a>
            </div>
            <div class=\"menu-item\">
                <a class=\"menu-link rounded-[9px] border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2\"
                   href=\"/\">
                    <span class=\"menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600\">
                        <i class=\"ki-filled ki-users text-1.5xl\"></i>
                    </span>
                    <span class=\"menu-title text-xs menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600 font-medium\">
                        Explorer
                    </span>
                </a>
            </div>
            <div class=\"menu-item\" data-menu-item-offset=\"-10px, 14px\" data-menu-item-overflow=\"true\"
                 data-menu-item-placement=\"right-start\" data-menu-item-toggle=\"dropdown\"
                 data-menu-item-trigger=\"click|lg:hover\">
                <div class=\"menu-link rounded-[9px] border border-transparent menu-item-here:border-gray-200 menu-item-here:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2 grow\">
                    <span class=\"menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600\">
                    <i class=\"ki-filled ki-share text-1.5xl\"></i>
                </span>
                <span class=\"menu-title menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary font-medium text-xs text-gray-600\">
                    Aide
                </span>
                </div>
                <div class=\"menu-default menu-dropdown gap-0.5 w-[220px] scrollable-y-auto lg:overflow-visible max-h-[50vh]\">
                    <div class=\"menu-item\">
                        <a class=\"menu-link\" href=\"#\">
                            <span class=\"menu-title\">Nous contacter</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sidebar Menu -->
    </div>
    <div class=\"flex flex-col gap-5 items-center shrink-0 pb-4\" id=\"sidebar_footer\">
        <div class=\"menu\" data-menu=\"true\">
            <div class=\"menu-item\" data-menu-item-offset=\"-20px, 28px\" data-menu-item-overflow=\"true\"
                 data-menu-item-placement=\"right-end\" data-menu-item-toggle=\"dropdown\"
                 data-menu-item-trigger=\"click|lg:click\">
                <div class=\"menu-toggle btn btn-icon\">
                    <img alt=\"\" class=\"size-8 justify-center rounded-lg border border-gray-500 shrink-0\"
                         src=\"{{ asset('metronic/media/avatars/gray/5.png') }}\">
                </div>
                <div class=\"menu-dropdown menu-default light:border-gray-300 w-screen max-w-[250px]\">
                    <div class=\"flex items-center justify-between px-5 py-1.5 gap-1.5\">
                        <div class=\"flex items-center gap-2\">
                            <img alt=\"\" class=\"size-9 rounded-full border-2 border-success\"
                                src=\"{{ asset('metronic/media/avatars/300-2.png') }}\">
                            <div class=\"flex flex-col gap-1.5\">
                            <span class=\"text-sm text-gray-800 font-semibold leading-none\">
                                John Doe
                            </span>
                                <span class=\"text-xs text-gray-600 font-medium leading-none\">
                                    john.doe@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"menu-separator\">
                    </div>
                    <div class=\"flex flex-col\">
                        <div class=\"menu-item\">
                            <a class=\"menu-link\" href=\"#\">
                                <span class=\"menu-icon\">
                                    <i class=\"ki-filled ki-profile-circle\"></i>
                                </span>
                                <span class=\"menu-title\">Mon profil</span>
                            </a>
                        </div>
                        <div class=\"menu-item\" data-menu-item-offset=\"-10px, 0\"
                             data-menu-item-placement=\"left-start\" data-menu-item-toggle=\"dropdown\"
                             data-menu-item-trigger=\"click|lg:hover\">
                            <div class=\"menu-link\">
                                <span class=\"menu-icon\">
                                    <i class=\"ki-filled ki-icon\"></i>
                                </span>
                                <span class=\"menu-title\">Langue</span>
                                <div class=\"flex items-center gap-1.5 rounded-md border border-gray-300 text-gray-600 p-1.5 text-2xs font-medium shrink-0\">
                                    Français
                                    <img alt=\"\" class=\"inline-block size-3.5 rounded-full\"
                                         src=\"{{ asset('media/flags/france.svg') }}\"/>
                                </div>
                            </div>
                            <div class=\"menu-dropdown menu-default light:border-gray-300 w-full max-w-[170px]\">
                                <div class=\"menu-item active\">
                                    <a class=\"menu-link h-10\" href=\"?dir=ltr\">
                                        <span class=\"menu-icon\">
                                            <img alt=\"\" class=\"inline-block size-4 rounded-full\" src=\"{{ asset('media/flags/france.svg') }}\"/>
                                        </span>
                                        <span class=\"menu-title\">Français</span>
                                        <span class=\"menu-badge\">
                                            <i class=\"ki-solid ki-check-circle text-success text-base\"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"menu-separator\"></div>
                    <div class=\"flex flex-col\">
                        <div class=\"menu-item mb-0.5\">
                            <div class=\"menu-link\">
                                <span class=\"menu-icon\">
                                    <i class=\"ki-filled ki-moon\">
                                    </i>
                                </span>
                                <span class=\"menu-title\">Sombre</span>
                                <label class=\"switch switch-sm\">
                                    <input data-theme-state=\"dark\" data-theme-toggle=\"true\" name=\"check\"
                                           type=\"checkbox\" value=\"1\">
                                </label>
                            </div>
                        </div>
                        <div class=\"menu-item px-4 py-1.5\">
                            <a class=\"btn btn-sm btn-light justify-center\"
                               href=\"login\">
                                Me déconnecer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "components/main/sidebar.html.twig", "/Users/kilianschaar/BookMasterKilianSCHAAR/templates/components/main/sidebar.html.twig");
    }
}
