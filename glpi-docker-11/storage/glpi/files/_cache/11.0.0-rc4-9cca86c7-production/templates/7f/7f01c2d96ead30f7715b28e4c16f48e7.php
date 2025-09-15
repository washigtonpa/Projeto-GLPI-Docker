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

/* pages/admin/form/form_question.html.twig */
class __TwigTemplate_01a1dbd0cbe1fed382f275e81adf9aaf extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 41)->unwrap();
        // line 42
        yield "
";
        // line 43
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "no_label" => true];
        // line 48
        yield "
<section
    role=\"option\"
    class=\"d-flex\"
    data-glpi-form-editor-block
    data-glpi-form-editor-question
    data-glpi-form-editor-condition-type=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\Type::QUESTION, "QUESTION", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54), "html", null, true);
        yield "\"
    data-glpi-draggable-item
    aria-label=\"";
        // line 56
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New question"), "html", null, true)));
        yield "\"
>
    <section
        data-glpi-form-editor-on-click=\"set-active\"
        data-glpi-form-editor-question-details
        data-glpi-form-editor-allow-anonymous=\"";
        // line 61
        yield ((( !($context["allow_unauthenticated_access"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "isAllowedForUnauthenticatedAccess", [], "method", false, false, false, 61))) ? (1) : (0));
        yield "\"
        class=\"card flex-grow-1 ";
        // line 62
        yield ((( !(null === ($context["question"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 62), "is_mandatory", [], "any", false, false, false, 62))) ? ("mandatory-question") : (""));
        yield "\"
        aria-label=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Question details"), "html", null, true);
        yield "\"
    >
        <div
            class=\"card-status-start bg-primary\"
            data-glpi-form-editor-active-question-status-indicator
        ></div>
        <div class=\"card-body\">
            <div class=\"d-flex\">
                <i
                    class=\"glpi-form-editor-question-handle ti ti-grip-horizontal cursor-grab ms-auto me-auto mt-n3 mb-n2\"
                    data-glpi-form-editor-question-handle
                    draggable=\"true\"
                    data-glpi-form-editor-state-action
                ></i>
            </div>
            ";
        // line 79
        yield "            <div class=\"d-flex mt-n1 align-items-center\">
                <i
                    class=\"ti ti-alert-triangle text-warning me-2 ";
        // line 81
        yield (((($context["allow_unauthenticated_access"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "isAllowedForUnauthenticatedAccess", [], "method", false, false, false, 81))) ? ("") : ("d-none"));
        yield "\"
                    data-glpi-form-editor-blacklisted-question-type-warning
                    data-bs-toggle=\"popover\"
                    data-bs-trigger=\"hover\"
                    data-bs-placement=\"top\"
                    data-bs-html=\"true\"
                    data-bs-content=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The current access policy allows unauthenticated access to this form, but this question type will be hidden to unauthenticated users."), "html", null, true);
        yield "\"
                ></i>
                <input
                    title=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Question name"), "html", null, true);
        yield "\"
                    class=\"form-control content-editable-h2 mb-0\"
                    type=\"text\"
                    name=\"name\"
                    value=\"";
        // line 94
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true)) : (""));
        yield "\"
                    placeholder=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New question"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-dynamic-input
                    data-glpi-form-editor-on-input=\"compute-dynamic-input\"
                    data-glpi-form-editor-question-details-name
                />
                <span data-glpi-form-editor-required-mark class=\"text-danger d-none\">*</span>

                ";
        // line 102
        if ((null === ($context["question"] ?? null))) {
            // line 103
            yield "                    ";
            $context["question_strategy"] = CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\VisibilityStrategy::ALWAYS_VISIBLE, "ALWAYS_VISIBLE", [], "any", false, false, false, 103);
            // line 104
            yield "                ";
        } else {
            // line 105
            yield "                    ";
            $context["question_strategy"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "getConfiguredVisibilityStrategy", [], "method", false, false, false, 105);
            // line 106
            yield "                ";
        }
        // line 107
        yield "
                <div class=\"ms-auto\"></div>

                ";
        // line 111
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/conditional_validation_dropdown.html.twig", ["item" =>         // line 112
($context["question"] ?? null), "type" => "Glpi\\Form\\Question"], false);
        // line 114
        yield "

                ";
        // line 117
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/conditional_visibility_dropdown.html.twig", ["item" =>         // line 118
($context["question"] ?? null), "type" => "Glpi\\Form\\Question"], false);
        // line 120
        yield "

                ";
        // line 123
        yield "                <i
                    role=\"button\"
                    class=\"ti ti-copy ms-3 cursor-pointer\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    title=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate question"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-on-click=\"duplicate-question\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-state-action
                ></i>

                ";
        // line 135
        yield "                <i
                    role=\"button\"
                    class=\"ti ti-trash ms-3 cursor-pointer\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    title=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        yield "\"
                    aria-label=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-on-click=\"delete-question\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-state-action
                ></i>

                ";
        // line 148
        yield "                <div class=\"dropdown ms-3 cursor-pointer d-flex align-items-center\">
                    <i
                        class=\"ti ti-dots-vertical show\"
                        data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\"
                        role=\"button\"
                        title=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("More actions"), "html", null, true);
        yield "\"
                        data-glpi-form-editor-state-action
                    ></i>
                    <ul class=\"dropdown-menu\" data-bs-popper=\"none\">
                        <li>
                            <button
                                type=\"button\"
                                class=\"dropdown-item\"
                                data-glpi-form-editor-on-click=\"show-visibility-dropdown\"
                            >
                                <i class=\"ti ti-eye-cog me-2\"></i>
                                <span>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                        <li>
                            <button
                                type=\"button\"
                                class=\"dropdown-item\"
                                data-glpi-form-editor-on-click=\"show-validation-dropdown\"
                            >
                                <i class=\"ti ti-checks me-2\"></i>
                                <span>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure validation"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                        <li>
                            <button
                                type=\"button\"
                                class=\"dropdown-item\"
                                data-glpi-form-editor-on-click=\"copy-uuid\"
                            >
                                <i class=\"ti ti-id-badge me-2\"></i>
                                <span>";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy uuid"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            ";
        // line 193
        yield "            <div
                class=\"mt-3\"
                data-glpi-form-editor-question-type-specific
            >
                ";
        // line 197
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "renderAdministrationTemplate", [($context["question"] ?? null)], "method", false, false, false, 197);
        yield "
            </div>

            ";
        // line 201
        yield "            <div
                class=\"content-editable-tinymce mt-2\"
                data-glpi-form-editor-question-description
                ";
        // line 205
        yield "                ";
        yield ((((null === ($context["question"] ?? null)) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 205), "description", [], "any", false, false, false, 205)) == 0))) ? ("data-glpi-form-editor-question-extra-details") : (""));
        yield "
            >
                ";
        // line 207
        $context["load_editor"] = ( !(null === ($context["question"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 207), "description", [], "any", false, false, false, 207)) > 0));
        // line 208
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 208, $this->getSourceContext())->macro_textareaField(...["description", (((($tmp =  !(null ===         // line 210
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 210), "description", [], "any", false, false, false, 210)) : ("")), __("Description"), Twig\Extension\CoreExtension::merge(        // line 212
($context["base_field_options"] ?? null), ["placeholder" => __("Add a description"), "aria_label" => __("Question description"), "enable_richtext" => true, "add_body_classes" => ["content-editable-tinymce-editor", "text-muted"], "editor_height" => "0", "rows" => 1, "toolbar_location" => "bottom", "init" =>         // line 220
($context["load_editor"] ?? null), "mb" => "mb-0", "additional_attributes" => ["data-glpi-loaded" => (((($tmp =         // line 223
($context["load_editor"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"))]])]);
        // line 226
        yield "
            </div>

            <div
                class=\"d-flex flex-wrap align-items-center gap-2 mt-2\"
                data-glpi-form-editor-question-extra-details
                data-fix-dropdown-flex
            >
                ";
        // line 235
        yield "                ";
        $context["base_attributes"] = (((null === ($context["question"] ?? null))) ? ([]) : (["glpi-loaded" => "false"]));
        // line 236
        yield "
                <div class=\"question-type-dropdown-group\">
                    ";
        // line 238
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 238, $this->getSourceContext())->macro_dropdownArrayField(...["_type_category", CoreExtension::getAttribute($this->env, $this->source,         // line 240
($context["question_types_manager"] ?? null), "getCategoryKey", [CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getCategory", [], "method", false, false, false, 240)], "method", false, false, false, 240), CoreExtension::getAttribute($this->env, $this->source,         // line 241
($context["question_types_manager"] ?? null), "getCategoriesDropdownValues", [], "method", false, false, false, 241), "", ["init" => false, "no_label" => true, "mb" => "", "field_class" => "", "class" => "form-select form-select-sm", "width" => "auto", "dropdownCssClass" => "question-type-dropdown-group-dropdown-select", "aria_label" => __("Question type"), "add_data_attributes" => Twig\Extension\CoreExtension::merge(["glpi-form-editor-on-change" => "change-question-type-category"],         // line 254
($context["base_attributes"] ?? null)), "templateSelection" => CoreExtension::getAttribute($this->env, $this->source,         // line 255
($context["question_types_manager"] ?? null), "getTemplateSelectionForCategories", [], "method", false, false, false, 255), "templateResult" => CoreExtension::getAttribute($this->env, $this->source,         // line 256
($context["question_types_manager"] ?? null), "getTemplateResultForCategories", [], "method", false, false, false, 256)]]);
        // line 258
        yield "

                    ";
        // line 260
        $context["types"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypesDropdownValuesForCategory", [CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getCategory", [], "method", false, false, false, 260)], "method", false, false, false, 260);
        // line 261
        yield "
                    ";
        // line 262
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 262, $this->getSourceContext())->macro_dropdownArrayField(...["type", get_class(        // line 264
($context["question_type"] ?? null)),         // line 265
($context["types"] ?? null), CoreExtension::getAttribute($this->env, $this->source,         // line 266
($context["question_type"] ?? null), "getName", [], "method", false, false, false, 266), ["init" => false, "no_label" => true, "mb" => "", "field_class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 271
($context["types"] ?? null)) == 1)) ? (" d-none") : ("")), "class" => "form-select form-select-sm", "width" => "auto", "aria_label" => __("Question sub type"), "add_data_attributes" => Twig\Extension\CoreExtension::merge(["glpi-form-editor-on-change" => "change-question-type", "glpi-form-editor-question-type-selector" => ""],         // line 279
($context["base_attributes"] ?? null)), "templateSelection" => CoreExtension::getAttribute($this->env, $this->source,         // line 280
($context["question_types_manager"] ?? null), "getTemplateSelectionForQuestionTypes", [], "method", false, false, false, 280), "templateResult" => CoreExtension::getAttribute($this->env, $this->source,         // line 281
($context["question_types_manager"] ?? null), "getTemplateResultForQuestionTypes", [], "method", false, false, false, 281)]]);
        // line 283
        yield "

                    ";
        // line 285
        $context["sub_types"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getSubTypes", [], "method", false, false, false, 285);
        // line 286
        yield "                    ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 286, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 287
($context["question_type"] ?? null), "getSubTypeFieldName", [], "method", false, false, false, 287), CoreExtension::getAttribute($this->env, $this->source,         // line 288
($context["question_type"] ?? null), "getSubTypeDefaultValue", [($context["question"] ?? null)], "method", false, false, false, 288), CoreExtension::getAttribute($this->env, $this->source,         // line 289
($context["question_type"] ?? null), "getSubTypes", [], "method", false, false, false, 289), "", ["init" => false, "no_label" => true, "mb" => "", "field_class" => ((Twig\Extension\CoreExtension::testEmpty(        // line 295
($context["sub_types"] ?? null))) ? (" d-none") : ("")), "class" => "form-select form-select-sm", "width" => "auto", "disabled" => Twig\Extension\CoreExtension::testEmpty(        // line 298
($context["sub_types"] ?? null)), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 299
($context["question_type"] ?? null), "getSubTypeFieldAriaLabel", [], "method", false, false, false, 299), "add_data_attributes" => Twig\Extension\CoreExtension::merge(["glpi-form-editor-on-change" => "change-question-sub-type", "glpi-form-editor-question-sub-type-selector" => "", "glpi-form-editor-specific-question-extra-data" => ""],         // line 304
($context["base_attributes"] ?? null))]]);
        // line 306
        yield "
                </div>

                ";
        // line 310
        yield "                <div class=\"ms-auto\" data-glpi-form-editor-specific-question-options data-glpi-form-editor-question-extra-details>
                    ";
        // line 311
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "renderAdministrationOptionsTemplate", [($context["question"] ?? null)], "method", false, false, false, 311);
        yield "
                </div>

                <label class=\"form-check form-switch ms-2 mb-0 cursor-pointer\">
                    <input type=\"hidden\" value=\"0\" name=\"is_mandatory\">
                    <input
                        class=\"form-check-input\"
                        name=\"is_mandatory\"
                        type=\"checkbox\"
                        value=\"1\"
                        ";
        // line 321
        yield ((( !(null === ($context["question"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 321), "is_mandatory", [], "any", false, false, false, 321))) ? ("checked") : (""));
        yield "
                        data-glpi-form-editor-on-change=\"toggle-mandatory-question\"
                    >
                    <span class=\"form-check-label\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mandatory"), "html", null, true);
        yield "</span>
                </label>
            </div>
        </div>

        ";
        // line 330
        yield "        <input
            type=\"hidden\"
            name=\"uuid\"
            value=\"";
        // line 333
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 333), "uuid", [], "any", false, false, false, 333), "html", null, true)) : (""));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"forms_sections_uuid\"
            value=\"";
        // line 338
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 338), "uuid", [], "any", false, false, false, 338), "html", null, true)) : (""));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"vertical_rank\"
            value=\"";
        // line 343
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 343), "vertical_rank", [], "any", false, false, false, 343), "html", null, true)) : (0));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"horizontal_rank\"
            value=\"";
        // line 348
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 348), "horizontal_rank", [], "any", false, false, false, 348), "html", null, true)) : (null));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"category\"
            value=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getCategoryKey", [CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getCategory", [], "method", false, false, false, 353)], "method", false, false, false, 353), "html", null, true);
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"type\"
            value=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("class", ($context["question_type"] ?? null)), "html", null, true);
        yield "\"
        />
    </section>

    <div data-glpi-form-editor-question-extra-details>
        ";
        // line 363
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 364
($context["can_update"] ?? null), "form" =>         // line 365
($context["form"] ?? null), "vertical_layout" => true], false);
        // line 367
        yield "
    </div>
    <div data-glpi-form-editor-question-drag-merge></div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_question.html.twig";
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
        return array (  453 => 367,  451 => 365,  450 => 364,  449 => 363,  441 => 358,  433 => 353,  425 => 348,  417 => 343,  409 => 338,  401 => 333,  396 => 330,  388 => 324,  382 => 321,  369 => 311,  366 => 310,  361 => 306,  359 => 304,  358 => 299,  357 => 298,  356 => 295,  355 => 289,  354 => 288,  353 => 287,  351 => 286,  349 => 285,  345 => 283,  343 => 281,  342 => 280,  341 => 279,  340 => 271,  339 => 266,  338 => 265,  337 => 264,  336 => 262,  333 => 261,  331 => 260,  327 => 258,  325 => 256,  324 => 255,  323 => 254,  322 => 241,  321 => 240,  320 => 238,  316 => 236,  313 => 235,  303 => 226,  301 => 223,  300 => 220,  299 => 212,  298 => 210,  296 => 208,  294 => 207,  288 => 205,  283 => 201,  277 => 197,  271 => 193,  261 => 185,  248 => 175,  235 => 165,  221 => 154,  213 => 148,  204 => 141,  200 => 140,  193 => 135,  184 => 128,  177 => 123,  173 => 120,  171 => 118,  169 => 117,  165 => 114,  163 => 112,  161 => 111,  156 => 107,  153 => 106,  150 => 105,  147 => 104,  144 => 103,  142 => 102,  132 => 95,  128 => 94,  121 => 90,  115 => 87,  106 => 81,  102 => 79,  84 => 63,  80 => 62,  76 => 61,  68 => 56,  63 => 54,  55 => 48,  53 => 43,  50 => 42,  48 => 41,  45 => 40,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_question.html.twig", "/var/www/glpi/templates/pages/admin/form/form_question.html.twig");
    }
}
