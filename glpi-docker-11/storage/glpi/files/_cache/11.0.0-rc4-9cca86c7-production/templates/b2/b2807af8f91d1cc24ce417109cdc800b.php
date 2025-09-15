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

/* pages/admin/form/item_has_conditions_modal.html.twig */
class __TwigTemplate_acee730f49f18686fc92667ad1f50a0c extends Template
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
";
        // line 34
        yield "<div
    data-glpi-form-editor-item-has-conditions-modal
    class=\"modal modal-blur fade\"
    aria-modal=\"true\"
    role=\"dialog\"
    aria-label=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Item has conditions and cannot be deleted"), "html", null, true);
        yield "\"
>
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header p-3\">
                <div>
                    <div class=\"d-none\" data-glpi-form-editor-item-has-conditions-modal-header=\"question\">
                        <h3 class=\"m-0\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This question is used in conditions of other form elements"), "html", null, true);
        yield "</h3>
                        <p class=\"m-0 text-muted\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You must delete related conditions before deleting this question"), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"d-none\" data-glpi-form-editor-item-has-conditions-modal-header=\"comment\">
                        <h3 class=\"m-0\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This comment is used in conditions of other form elements"), "html", null, true);
        yield "</h3>
                        <p class=\"m-0 text-muted\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You must delete related conditions before deleting this comment"), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"d-none\" data-glpi-form-editor-item-has-conditions-modal-header=\"section\">
                        <h3 class=\"m-0\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This section is used in conditions of other form elements"), "html", null, true);
        yield "</h3>
                        <p class=\"m-0 text-muted\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You must delete related conditions before deleting this section"), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <button
                    type=\"button\"
                    class=\"btn-close\"
                    data-bs-dismiss=\"modal\"
                    aria-label=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"
                ></button>
            </div>
            <div class=\"modal-body p-0\">
                <div class=\"list-group list-group-flush list-group-hoverable\" data-glpi-form-editor-item-has-conditions-list></div>
                    ";
        // line 68
        yield "                </div>
            </div>
        </div>
    </div>

    ";
        // line 74
        yield "    <div class=\"d-none\" data-glpi-form-editor-item-has-conditions-item-template>
        <div class=\"list-group-item d-flex align-items-center space-x-2 p-3\">
            <i class=\"ti ti-circle-x fa-lg text-danger\"></i>
            <a href=\"#\" class=\"m-0\" style=\"font-weight: var(--tblr-font-weight-medium)\"
               data-glpi-form-editor-item-has-conditions-item-name
               data-glpi-form-editor-item-has-conditions-item-selector
               data-glpi-form-editor-item-has-conditions-item-uuid></a>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/item_has_conditions_modal.html.twig";
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
        return array (  111 => 74,  104 => 68,  96 => 62,  86 => 55,  82 => 54,  76 => 51,  72 => 50,  66 => 47,  62 => 46,  52 => 39,  45 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/item_has_conditions_modal.html.twig", "/var/www/glpi/templates/pages/admin/form/item_has_conditions_modal.html.twig");
    }
}
