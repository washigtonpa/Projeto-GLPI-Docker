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

/* install/accept_license.html.twig */
class __TwigTemplate_4217219a291ff38ab7b7ba608881ec80 extends Template
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
        // line 32
        yield "
<div class=\"container text-center license-container\">
    <textarea id=\"license\" style=\"height:250px\" readonly=\"readonly\" class=\"form-control\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["copying"] ?? null), "html", null, true);
        yield "</textarea>

    <p>
        <a class=\"btn btn-sm btn-info\" target=\"_blank\" href=\"https://www.gnu.org/licenses/translations.html\">
            <i class=\"ti ti-external-link-alt me-1\"></i>
            ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unofficial translations are also available"), "html", null, true);
        yield "
        </a>
    </p>

    <form action=\"install.php\" method=\"post\" data-submit-once>
        <input type=\"hidden\" name=\"install\" value=\"License\" />

        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
            ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
        yield "
            <i class=\"ti ti-chevron-right ms-1\"></i>
        </button>

        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/accept_license.html.twig";
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
        return array (  72 => 51,  65 => 47,  54 => 39,  46 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/accept_license.html.twig", "/var/www/glpi/templates/install/accept_license.html.twig");
    }
}
