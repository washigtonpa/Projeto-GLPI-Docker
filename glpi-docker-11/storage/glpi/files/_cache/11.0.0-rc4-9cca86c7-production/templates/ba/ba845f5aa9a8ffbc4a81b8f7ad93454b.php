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

/* __string_template__a0a2582ef1e9f7f94d1048d8c51e6805 */
class __TwigTemplate_f7d63932f29046726d9a374bde3563d6 extends Template
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
        // line 1
        yield "        ";
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 2
        yield "
        ";
        // line 51
        yield "
        <template>
            ";
        // line 53
        yield $this->getTemplateForMacro("macro_addOption", $context, 53, $this->getSourceContext())->macro_addOption(...[($context["input_type"] ?? null), false, "", ($context["translations"] ?? null), null, true, true, ($context["hide_default_value_input"] ?? null)]);
        yield "
        </template>

        <div class=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("selectable_question_options_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["selectable_question_options_class"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
            <div
                data-glpi-form-editor-selectable-question-options=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                ";
        // line 59
        yield (((($tmp = ($context["hide_container_when_unfocused"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("data-glpi-form-editor-question-extra-details") : (""));
        yield "
            >
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 62
            yield "                    ";
            yield $this->getTemplateForMacro("macro_addOption", $context, 62, $this->getSourceContext())->macro_addOption(...[($context["input_type"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["value"], "checked", [], "any", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 62), ($context["translations"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["value"], "uuid", [], "any", false, false, false, 62), false, false, ($context["hide_default_value_input"] ?? null)]);
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "            </div>

            ";
        // line 66
        yield $this->getTemplateForMacro("macro_addOption", $context, 66, $this->getSourceContext())->macro_addOption(...[($context["input_type"] ?? null), false, "", ($context["translations"] ?? null), null, true, true, ($context["hide_default_value_input"] ?? null)]);
        yield "
        </div>

        <script>
            // TODO: avoid this, the script should probably run in a dedicated method that the framework can call at
            // the right time.
            \$(\"[data-glpi-form-editor-container]\").on('initialized', () => {
                            import(\"/js/modules/Forms/QuestionSelectable.js\").then((m) => {
                ";
        // line 74
        if ((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                    const container = \$('div[data-glpi-form-editor-selectable-question-options=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"]');
                    container.data(
                        'manager',
                        new m.GlpiFormQuestionTypeSelectable('";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "js"), "html", null, true);
            yield "', container)
                    );
                ";
        } else {
            // line 81
            yield "                    \$(document).on('glpi-form-editor-question-type-changed', function(e, question, type) {
                        if (type === '";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["question_type"] ?? null), "js"), "html", null, true);
            yield "') {
                            const container = question.find('div[data-glpi-form-editor-selectable-question-options]');
                            container.data(
                                'manager',
                                new m.GlpiFormQuestionTypeSelectable('";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "js"), "html", null, true);
            yield "', container)
                            );
                        }
                    });

                    \$(document).on('glpi-form-editor-question-duplicated', function(e, question, new_question) {
                        const question_type = question.find('input[data-glpi-form-editor-original-name=\"type\"]').val();
                        if (question_type === '";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["question_type"] ?? null), "js"), "html", null, true);
            yield "') {
                            const container = new_question.find('div[data-glpi-form-editor-selectable-question-options]');
                            container.data(
                                'manager',
                                new m.GlpiFormQuestionTypeSelectable('";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "js"), "html", null, true);
            yield "', container)
                            );
                        }
                    });
                ";
        }
        // line 102
        yield "
                // The module above will trigger some input changes, we need
                // to reset the global unsaved form state after this.
                window.setHasUnsavedChanges(false);
            });
            });
        </script>";
        yield from [];
    }

    // line 3
    public function macro_addOption($input_type = null, $checked = null, $value = null, $translations = null, $uuid = null, $extra_details = false, $disabled = false, $hide_default_value_input = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "input_type" => $input_type,
            "checked" => $checked,
            "value" => $value,
            "translations" => $translations,
            "uuid" => $uuid,
            "extra_details" => $extra_details,
            "disabled" => $disabled,
            "hide_default_value_input" => $hide_default_value_input,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "            ";
            if ((null === ($context["uuid"] ?? null))) {
                // line 5
                yield "                ";
                $context["uuid"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
                // line 6
                yield "            ";
            }
            // line 7
            yield "
            <div
                class=\"d-flex gap-1 align-items-center mb-2\"
                data-glpi-form-selectable-question-option
                ";
            // line 11
            yield (((($tmp = ($context["extra_details"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("data-glpi-form-editor-question-extra-details") : (""));
            yield "
            >
                <i
                    role=\"button\"
                    aria-label=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "move_option", [], "any", false, false, false, 15), "html", null, true);
            yield "\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-question-option-handle
                    class=\"ti ti-grip-horizontal cursor-grab ms-auto me-1\"
                    style=\"";
            // line 19
            yield (((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("visibility: hidden;") : (""));
            yield "\"
                    draggable=\"true\"
                ></i>
                <input
                    type=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "html", null, true);
            yield "\"
                    name=\"default_value[]\"
                    value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uuid"] ?? null), "html", null, true);
            yield "\"
                    class=\"form-check-input ";
            // line 26
            yield (((($tmp = ($context["hide_default_value_input"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\"
                    aria-label=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "default_option", [], "any", false, false, false, 27), "html", null, true);
            yield "\"
                    ";
            // line 28
            yield (((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield "
                    ";
            // line 29
            yield (((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
                >
                <input
                    data-glpi-form-editor-specific-question-extra-data
                    type=\"text\"
                    class=\"flex-grow-1 w-full\"
                    style=\"border: none transparent; outline: none; box-shadow: none;\"
                    name=\"options[";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uuid"] ?? null), "html", null, true);
            yield "]\"
                    value=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
                    placeholder=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "enter_option", [], "any", false, false, false, 38), "html", null, true);
            yield "\"
                    aria-label=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "selectable_option", [], "any", false, false, false, 39), "html", null, true);
            yield "\"
                >
                <button
                    class=\"btn btn-sm btn-icon btn-ghost-secondary ";
            // line 42
            yield (((($tmp = ($context["value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
            yield "\"
                    aria-label=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "remove_option", [], "any", false, false, false, 43), "html", null, true);
            yield "\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-question-option-remove
                >
                    <i class=\"ti ti-x\"></i>
                </button>
            </div>
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__a0a2582ef1e9f7f94d1048d8c51e6805";
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
        return array (  269 => 43,  265 => 42,  259 => 39,  255 => 38,  251 => 37,  247 => 36,  237 => 29,  233 => 28,  229 => 27,  225 => 26,  221 => 25,  216 => 23,  209 => 19,  202 => 15,  195 => 11,  189 => 7,  186 => 6,  183 => 5,  180 => 4,  161 => 3,  150 => 102,  142 => 97,  135 => 93,  125 => 86,  118 => 82,  115 => 81,  109 => 78,  102 => 75,  100 => 74,  89 => 66,  85 => 64,  76 => 62,  72 => 61,  67 => 59,  63 => 58,  58 => 56,  52 => 53,  48 => 51,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__a0a2582ef1e9f7f94d1048d8c51e6805", "");
    }
}
