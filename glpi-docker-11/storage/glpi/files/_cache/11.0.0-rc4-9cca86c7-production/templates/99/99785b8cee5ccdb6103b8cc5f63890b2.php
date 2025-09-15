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

/* pages/admin/form/form_toolbar.html.twig */
class __TwigTemplate_7eb3979fe71b8ad0f2c6a16a29f6c3fd extends Template
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
        // line 40
        yield "
";
        // line 41
        $context["ghost_button"] = ((array_key_exists("ghost_button", $context)) ? (Twig\Extension\CoreExtension::default(($context["ghost_button"] ?? null), false)) : (false));
        // line 42
        $context["hide_section_button"] = ((array_key_exists("hide_section_button", $context)) ? (Twig\Extension\CoreExtension::default(($context["hide_section_button"] ?? null), false)) : (false));
        // line 43
        $context["hide_new_horizontal_layout_button"] = ((array_key_exists("hide_new_horizontal_layout_button", $context)) ? (Twig\Extension\CoreExtension::default(($context["hide_new_horizontal_layout_button"] ?? null), false)) : (false));
        // line 44
        $context["show_remove_horizontal_placeholder_button"] = ((array_key_exists("show_remove_horizontal_placeholder_button", $context)) ? (Twig\Extension\CoreExtension::default(($context["show_remove_horizontal_placeholder_button"] ?? null), false)) : (false));
        // line 45
        yield "
";
        // line 46
        if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "    <div
        class=\"d-flex h-full ";
            // line 48
            yield (((($tmp = (((array_key_exists("vertical_layout", $context) &&  !(null === $context["vertical_layout"]))) ? ($context["vertical_layout"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("position-absolute btn-group-vertical justify-content-end ms-2 pb-2") : ("btn-group justify-content-center mt-2"));
            yield "\"
        style=\"box-shadow:none;\"
        role=\"group\"
        data-glpi-form-editor-toolbar
    >
        ";
            // line 54
            yield "        <button
            type=\"button\"
            class=\"btn btn-icon ";
            // line 56
            yield (((($tmp = ($context["ghost_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : (""));
            yield " flex-grow-0\"
            data-bs-toggle=\"tooltip\"
            data-bs-placement=\"bottom\"
            title=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a question"), "html", null, true);
            yield "\"
            data-glpi-form-editor-on-click=\"add-question\"
            type=\"button\"
        >
            <span class=\"px-2 d-flex align-items-center\">
                <i class=\"ti ti-circle-plus\"></i>
            </span>
        </button>

        ";
            // line 69
            yield "        <button
            type=\"button\"
            for=\"btn-radio-toolbar-1\"
            class=\"btn btn-icon ";
            // line 72
            yield (((($tmp = ($context["ghost_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : (""));
            yield " flex-grow-0\"
            data-bs-toggle=\"tooltip\"
            data-bs-placement=\"bottom\"
            title=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a comment"), "html", null, true);
            yield "\"
            data-glpi-form-editor-on-click=\"add-comment\"
        >
            <span class=\"px-2 d-flex align-items-center\">
                <i class=\"ti ti-letter-case\"></i>
            </span>
        </button>

        ";
            // line 84
            yield "        ";
            if ((($tmp =  !($context["hide_section_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 85
                yield "            ";
                $context["add_section_action_visible"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getSections", [], "method", false, false, false, 85)) > 1) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getSections", [], "method", false, false, false, 85)), "getBlocks", [], "method", false, false, false, 85)) > 0));
                // line 86
                yield "            <button
                type=\"button\"
                for=\"btn-radio-toolbar-1\"
                class=\"btn btn-icon ";
                // line 89
                yield (((($tmp = ($context["ghost_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : (""));
                yield " flex-grow-0 ";
                yield (((($tmp = ($context["add_section_action_visible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
                yield "\"
                data-bs-toggle=\"tooltip\"
                data-bs-placement=\"bottom\"
                title=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a section"), "html", null, true);
                yield "\"
                data-glpi-form-editor-on-click=\"add-section\"
                type=\"button\"
            >
                <i class=\"ti ti-box-align-top\"></i>
            </button>
        ";
            }
            // line 99
            yield "
        ";
            // line 101
            yield "        ";
            if ((($tmp =  !($context["hide_new_horizontal_layout_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 102
                yield "            <button
                type=\"button\"
                for=\"btn-radio-toolbar-1\"
                class=\"btn btn-icon ";
                // line 105
                yield (((($tmp = ($context["ghost_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : (""));
                yield " flex-grow-0\"
                data-bs-toggle=\"tooltip\"
                data-bs-placement=\"bottom\"
                title=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a horizontal layout"), "html", null, true);
                yield "\"
                data-glpi-form-editor-on-click=\"add-horizontal-layout\"
            >
                <span class=\"px-2 d-flex align-items-center\">
                    <i class=\"ti ti-layout-columns\"></i>
                </span>
            </button>
        ";
            }
            // line 116
            yield "
        ";
            // line 118
            yield "        ";
            if ((($tmp = ($context["show_remove_horizontal_placeholder_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 119
                yield "            <button
                type=\"button\"
                class=\"btn btn-icon ";
                // line 121
                yield (((($tmp = ($context["ghost_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-danger") : (""));
                yield " flex-grow-0\"
                data-bs-toggle=\"tooltip\"
                data-bs-placement=\"bottom\"
                title=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove slot"), "html", null, true);
                yield "\"
                data-glpi-form-editor-on-click=\"remove-horizontal-layout-slot\"
                type=\"button\"
            >
                <span class=\"px-2 d-flex align-items-center\">
                    <i class=\"ti ti-trash\"></i>
                </span>
            </button>
        ";
            }
            // line 133
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_toolbar.html.twig";
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
        return array (  201 => 133,  189 => 124,  183 => 121,  179 => 119,  176 => 118,  173 => 116,  162 => 108,  156 => 105,  151 => 102,  148 => 101,  145 => 99,  135 => 92,  127 => 89,  122 => 86,  119 => 85,  116 => 84,  105 => 75,  99 => 72,  94 => 69,  82 => 59,  76 => 56,  72 => 54,  64 => 48,  61 => 47,  59 => 46,  56 => 45,  54 => 44,  52 => 43,  50 => 42,  48 => 41,  45 => 40,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_toolbar.html.twig", "/var/www/glpi/templates/pages/admin/form/form_toolbar.html.twig");
    }
}
