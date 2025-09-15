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

/* pages/admin/form/question_type/item_dropdown/advanced_configuration.html.twig */
class __TwigTemplate_0e46400fdefe8c0efc317841d237f15c extends Template
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
            'dropdown_content' => [$this, 'block_dropdown_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 35
        return "pages/admin/form/question_type/base_advanced_configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 37
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 39
        if ((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            $context["itemtype"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "getQuestionType", [], "method", false, false, false, 40), "getDefaultValueItemtype", [($context["question"] ?? null)], "method", false, false, false, 40);
        }
        // line 35
        $this->parent = $this->load("pages/admin/form/question_type/base_advanced_configuration.html.twig", 35);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dropdown_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "    <div data-glpi-form-editor-item-dropdown-advanced-configuration>
        ";
        // line 45
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 45, $this->getSourceContext())->macro_dropdownArrayField(...["extra_data[categories_filter]", "", ["request" => __("Request categories"), "incident" => __("Incident categories"), "change" => __("Change categories"), "problem" => __("Problem categories")], __("Filter ticket categories"), ["full_width" => true, "is_horizontal" => false, "multiple" => true, "values" => ((        // line 59
array_key_exists("categories_filter", $context)) ? (Twig\Extension\CoreExtension::default(($context["categories_filter"] ?? null), ["request" => true, "incident" => true, "change" => true, "problem" => true])) : (["request" => true, "incident" => true, "change" => true, "problem" => true])), "init" => (((($tmp =  !(null ===         // line 65
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false)), "add_data_attributes" => ["glpi-form-editor-item-dropdown-advanced-configuration-visible-for-itemtype" => "ITILCategory"]]]);
        // line 70
        yield "
        ";
        // line 71
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 71, $this->getSourceContext())->macro_dropdownField(...["ITILCategory", "extra_data[root_items_id]", ((        // line 74
array_key_exists("root_items_id", $context)) ? (Twig\Extension\CoreExtension::default(($context["root_items_id"] ?? null), 0)) : (0)), __("Subtree root"), ["display_emptychoice" => true, "full_width" => true, "is_horizontal" => false, "init" => (((($tmp =  !(null ===         // line 80
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false))]]);
        // line 82
        yield "
        ";
        // line 83
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 83, $this->getSourceContext())->macro_numberField(...["extra_data[subtree_depth]", ((        // line 85
array_key_exists("subtree_depth", $context)) ? (Twig\Extension\CoreExtension::default(($context["subtree_depth"] ?? null), 0)) : (0)), __("Limit subtree depth"), ["full_width" => true, "is_horizontal" => false, "min" => 0, "max" => 16, "step" => 1]]);
        // line 94
        yield "

        ";
        // line 96
        if ((null === ($context["question"] ?? null))) {
            // line 97
            yield "            <script>
                import(\"/js/modules/Forms/ItemDropdownAdvancedConfig.js\").then((m) => {
                    new m.GlpiFormItemDropdownAdvancedConfig();
                });
            </script>
        ";
        }
        // line 103
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/question_type/item_dropdown/advanced_configuration.html.twig";
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
        return array (  102 => 103,  94 => 97,  92 => 96,  88 => 94,  86 => 85,  85 => 83,  82 => 82,  80 => 80,  79 => 74,  78 => 71,  75 => 70,  73 => 65,  72 => 59,  71 => 45,  68 => 44,  61 => 43,  56 => 35,  53 => 40,  51 => 39,  49 => 37,  47 => 33,  40 => 35,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/question_type/item_dropdown/advanced_configuration.html.twig", "/var/www/glpi/templates/pages/admin/form/question_type/item_dropdown/advanced_configuration.html.twig");
    }
}
