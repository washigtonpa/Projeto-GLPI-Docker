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

/* __string_template__5d64797c8304b1ff50f9db07a4ce7ee2 */
class __TwigTemplate_21b27cb6a75a4fd9733944a4c5e2e58d extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "
        <div data-glpi-form-editor-preview-dropdown>
            ";
        // line 4
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 4, $this->getSourceContext())->macro_dropdownArrayField(...["default_value", Twig\Extension\CoreExtension::first($this->env->getCharset(),         // line 6
($context["checked_values"] ?? null)),         // line 7
($context["values"] ?? null), "", ["init" =>         // line 10
($context["init"] ?? null), "no_label" => true, "multiple" => false, "disabled" =>         // line 13
($context["is_multiple_dropdown"] ?? null), "display_emptychoice" => true, "field_class" => ("single-preview-dropdown col-12" . (((($tmp =         // line 15
($context["is_multiple_dropdown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" d-none") : (""))), "mb" => "", "aria_label" =>         // line 17
($context["default_option_label"] ?? null)]]);
        // line 19
        yield "
            ";
        // line 20
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 20, $this->getSourceContext())->macro_dropdownArrayField(...["default_value", "",         // line 23
($context["values"] ?? null), "", ["init" =>         // line 26
($context["init"] ?? null), "no_label" => true, "multiple" => true, "disabled" =>  !        // line 29
($context["is_multiple_dropdown"] ?? null), "values" =>         // line 30
($context["checked_values"] ?? null), "field_class" => ("multiple-preview-dropdown col-12" . (((($tmp =  !        // line 31
($context["is_multiple_dropdown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" d-none") : (""))), "mb" => "", "aria_label" =>         // line 33
($context["default_options_label"] ?? null)]]);
        // line 35
        yield "
        </div>        
        
        <template>
                                                    
            <div
                class=\"d-flex gap-1 align-items-center mb-2\"
                data-glpi-form-selectable-question-option
                data-glpi-form-editor-question-extra-details
            >
                <i
                    role=\"button\"
                    aria-label=\"Mover opção\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-question-option-handle
                    class=\"ti ti-grip-horizontal cursor-grab ms-auto me-1\"
                    style=\"visibility: hidden;\"
                    draggable=\"true\"
                ></i>
                <input
                    type=\"radio\"
                    name=\"default_value[]\"
                    value=\"1057513961\"
                    class=\"form-check-input d-none\"
                    aria-label=\"Opção padrão\"
                    
                    disabled
                >
                <input
                    data-glpi-form-editor-specific-question-extra-data
                    type=\"text\"
                    class=\"flex-grow-1 w-full\"
                    style=\"border: none transparent; outline: none; box-shadow: none;\"
                    name=\"options[1057513961]\"
                    value=\"\"
                    placeholder=\"Insira uma opção\"
                    aria-label=\"Opção selecionável\"
                >
                <button
                    class=\"btn btn-sm btn-icon btn-ghost-secondary d-none\"
                    aria-label=\"Remover opção\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-question-option-remove
                >
                    <i class=\"ti ti-x\"></i>
                </button>
            </div>
        
        </template>

        <div class=\"dropdown-border\">
            <div
                data-glpi-form-editor-selectable-question-options=\"275319921\"
                data-glpi-form-editor-question-extra-details
            >
                            </div>

                                                    
            <div
                class=\"d-flex gap-1 align-items-center mb-2\"
                data-glpi-form-selectable-question-option
                data-glpi-form-editor-question-extra-details
            >
                <i
                    role=\"button\"
                    aria-label=\"Mover opção\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-question-option-handle
                    class=\"ti ti-grip-horizontal cursor-grab ms-auto me-1\"
                    style=\"visibility: hidden;\"
                    draggable=\"true\"
                ></i>
                <input
                    type=\"radio\"
                    name=\"default_value[]\"
                    value=\"1543349223\"
                    class=\"form-check-input d-none\"
                    aria-label=\"Opção padrão\"
                    
                    disabled
                >
                <input
                    data-glpi-form-editor-specific-question-extra-data
                    type=\"text\"
                    class=\"flex-grow-1 w-full\"
                    style=\"border: none transparent; outline: none; box-shadow: none;\"
                    name=\"options[1543349223]\"
                    value=\"\"
                    placeholder=\"Insira uma opção\"
                    aria-label=\"Opção selecionável\"
                >
                <button
                    class=\"btn btn-sm btn-icon btn-ghost-secondary d-none\"
                    aria-label=\"Remover opção\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-question-option-remove
                >
                    <i class=\"ti ti-x\"></i>
                </button>
            </div>
        
        </div>

        <script>
            // TODO: avoid this, the script should probably run in a dedicated method that the framework can call at
            // the right time.
            \$(\"[data-glpi-form-editor-container]\").on('initialized', () => {
                            import(\"/js/modules/Forms/QuestionDropdown.js\").then((m) => {
                                    \$(document).on('glpi-form-editor-question-type-changed', function(e, question, type) {
                        if (type === 'Glpi\\\\Form\\\\QuestionType\\\\QuestionTypeDropdown') {
                            const container = question.find('div[data-glpi-form-editor-selectable-question-options]');
                            container.data(
                                'manager',
                                new m.GlpiFormQuestionTypeDropdown('radio', container)
                            );
                        }
                    });

                    \$(document).on('glpi-form-editor-question-duplicated', function(e, question, new_question) {
                        const question_type = question.find('input[data-glpi-form-editor-original-name=\"type\"]').val();
                        if (question_type === 'Glpi\\\\Form\\\\QuestionType\\\\QuestionTypeDropdown') {
                            const container = new_question.find('div[data-glpi-form-editor-selectable-question-options]');
                            container.data(
                                'manager',
                                new m.GlpiFormQuestionTypeDropdown('radio', container)
                            );
                        }
                    });
                            });
            });
        </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__5d64797c8304b1ff50f9db07a4ce7ee2";
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
        return array (  68 => 35,  66 => 33,  65 => 31,  64 => 30,  63 => 29,  62 => 26,  61 => 23,  60 => 20,  57 => 19,  55 => 17,  54 => 15,  53 => 13,  52 => 10,  51 => 7,  50 => 6,  49 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__5d64797c8304b1ff50f9db07a4ce7ee2", "");
    }
}
