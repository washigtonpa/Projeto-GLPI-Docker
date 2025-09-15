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

/* pages/admin/form/question_type/item_dropdown/end_user_template.html.twig */
class __TwigTemplate_a487665f84fc408d9929d2787251af46 extends Template
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
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 35, $this->getSourceContext())->macro_hiddenField(...[(CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["question"] ?? null), "getEndUserInputName", [], "method", false, false, false, 36) . "[itemtype]"),         // line 37
($context["itemtype"] ?? null)]);
        // line 38
        yield "
";
        // line 39
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 39, $this->getSourceContext())->macro_dropdownField(...[        // line 40
($context["itemtype"] ?? null), (CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["question"] ?? null), "getEndUserInputName", [], "method", false, false, false, 41) . "[items_id]"),         // line 42
($context["default_items_id"] ?? null), "", ["no_label" => true, "display_emptychoice" => true, "right" => "all", "aria_label" =>         // line 48
($context["aria_label"] ?? null), "mb" => "", "addicon" => false, "comments" => false, "condition" =>         // line 52
($context["dropdown_restriction_params"] ?? null), "nochecklimit" => true]]);
        // line 55
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/question_type/item_dropdown/end_user_template.html.twig";
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
        return array (  64 => 55,  62 => 52,  61 => 48,  60 => 42,  59 => 41,  58 => 40,  57 => 39,  54 => 38,  52 => 37,  51 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/question_type/item_dropdown/end_user_template.html.twig", "/var/www/glpi/templates/pages/admin/form/question_type/item_dropdown/end_user_template.html.twig");
    }
}
