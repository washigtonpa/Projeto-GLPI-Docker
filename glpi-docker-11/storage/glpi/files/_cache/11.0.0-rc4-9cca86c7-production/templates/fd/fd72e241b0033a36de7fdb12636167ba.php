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

/* pages/admin/form/question_type/item_dropdown/administration_template.html.twig */
class __TwigTemplate_cbcb5142ef5996b025b9f586d22c8bfe extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        yield "
<div class=\"input-group\">
    ";
        // line 38
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 38, $this->getSourceContext())->macro_dropdownField(...[((        // line 39
array_key_exists("default_itemtype", $context)) ? (Twig\Extension\CoreExtension::default(($context["default_itemtype"] ?? null), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["itemtypes"] ?? null))))) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["itemtypes"] ?? null))))), "default_value",         // line 41
($context["default_items_id"] ?? null), "", ["init" =>         // line 44
($context["init"] ?? null), "no_label" => true, "display_emptychoice" => true, "width" => "100%", "mb" => "", "comments" => false, "addicon" => false, "aria_label" =>         // line 51
($context["aria_label"] ?? null), "nochecklimit" => true]]);
        // line 54
        yield "
    ";
        // line 55
        yield ($context["advanced_config"] ?? null);
        yield "
</div>

";
        // line 58
        if ((($context["question"] ?? null) == null)) {
            // line 59
            yield "    <script>
        import(\"/js/modules/Forms/QuestionItem.js\").then((m) => {
            new m.GlpiFormQuestionTypeItem(";
            // line 61
            yield json_encode(($context["question_type"] ?? null));
            yield ");
        });
    </script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/question_type/item_dropdown/administration_template.html.twig";
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
        return array (  77 => 61,  73 => 59,  71 => 58,  65 => 55,  62 => 54,  60 => 51,  59 => 44,  58 => 41,  57 => 39,  56 => 38,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/question_type/item_dropdown/administration_template.html.twig", "/var/www/glpi/templates/pages/admin/form/question_type/item_dropdown/administration_template.html.twig");
    }
}
