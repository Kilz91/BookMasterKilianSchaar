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

/* components/home/booksRead.html.twig */
class __TwigTemplate_da4f1219815ec02e35b7a6b503e6ecad extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/home/booksRead.html.twig"));

        // line 1
        yield "<div class=\"card card-grid h-full min-w-full\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            Mes lectures terminées
        </h3>
        <div class=\"input input-sm max-w-48\">
            <i class=\"ki-filled ki-magnifier\">
            </i>
            <input data-datatable-search=\"#read-books-table\" placeholder=\"Rechercher\" type=\"text\"/>
        </div>
    </div>
    <div class=\"card-body\">
        <div id=\"read-books-table\" data-datatable=\"true\" data-datatable-page-size=\"5\">
            <div class=\"scrollable-x-auto\">
                <table class=\"table table-border\" data-datatable-table=\"true\">
                    <thead>
                    <tr>
                        <th class=\"min-w-[280px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Livre</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                        <th class=\"min-w-[135px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Catégorie</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                        <th class=\"min-w-[135px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Note</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class=\"flex flex-col gap-2\">
                                <a class=\"leading-none font-medium text-sm text-gray-900 hover:text-primary\"
                                   href=\"#\">
                                    Le Moine qui vendit sa Ferrari
                                </a>
                                <span class=\"text-2sm text-gray-700 font-normal leading-3\">
                                    Un conte sur la quête du bonheur et du succès intérieur.
                                </span>
                            </div>
                        </td>
                        <td>Spiritualité</td>
                        <td>
                            <div class=\"rating\">
                                <div class=\"rating-label checked\">
                                    <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                    <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                </div>
                                <div class=\"rating-label checked\">
                                    <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                    <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                </div>
                                <div class=\"rating-label checked\">
                                    <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                    <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                </div>
                                <div class=\"rating-label checked\">
                                    <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                    <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                </div>
                                <div class=\"rating-label checked\">
                                    <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                    <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium\">
                <div class=\"flex items-center gap-2 order-2 md:order-1\">
                    Show
                    <select class=\"select select-sm w-16\"
                            data-datatable-size=\"true\" name=\"perpage\">
                    </select>
                    per page
                </div>
                <div class=\"flex items-center gap-4 order-1 md:order-2\">
                    <span data-datatable-info=\"true\"></span>
                    <div class=\"pagination\" data-datatable-pagination=\"true\">
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
        return "components/home/booksRead.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card card-grid h-full min-w-full\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            Mes lectures terminées
        </h3>
        <div class=\"input input-sm max-w-48\">
            <i class=\"ki-filled ki-magnifier\">
            </i>
            <input data-datatable-search=\"#read-books-table\" placeholder=\"Rechercher\" type=\"text\"/>
        </div>
    </div>
    <div class=\"card-body\">
        <div id=\"read-books-table\" data-datatable=\"true\" data-datatable-page-size=\"5\">
            <div class=\"scrollable-x-auto\">
                <table class=\"table table-border\" data-datatable-table=\"true\">
                    <thead>
                    <tr>
                        <th class=\"min-w-[280px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Livre</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                        <th class=\"min-w-[135px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Catégorie</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                        <th class=\"min-w-[135px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Note</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class=\"flex flex-col gap-2\">
                                <a class=\"leading-none font-medium text-sm text-gray-900 hover:text-primary\"
                                   href=\"#\">
                                    Le Moine qui vendit sa Ferrari
                                </a>
                                <span class=\"text-2sm text-gray-700 font-normal leading-3\">
                                    Un conte sur la quête du bonheur et du succès intérieur.
                                </span>
                            </div>
                        </td>
                        <td>Spiritualité</td>
                        <td>
                            <div class=\"rating\">
                                <div class=\"rating-label checked\">
                                    <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                    <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                </div>
                                <div class=\"rating-label checked\">
                                    <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                    <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                </div>
                                <div class=\"rating-label checked\">
                                    <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                    <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                </div>
                                <div class=\"rating-label checked\">
                                    <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                    <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                </div>
                                <div class=\"rating-label checked\">
                                    <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                    <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium\">
                <div class=\"flex items-center gap-2 order-2 md:order-1\">
                    Show
                    <select class=\"select select-sm w-16\"
                            data-datatable-size=\"true\" name=\"perpage\">
                    </select>
                    per page
                </div>
                <div class=\"flex items-center gap-4 order-1 md:order-2\">
                    <span data-datatable-info=\"true\"></span>
                    <div class=\"pagination\" data-datatable-pagination=\"true\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "components/home/booksRead.html.twig", "/Users/kilianschaar/BookMasterKilianSCHAAR/templates/components/home/booksRead.html.twig");
    }
}
