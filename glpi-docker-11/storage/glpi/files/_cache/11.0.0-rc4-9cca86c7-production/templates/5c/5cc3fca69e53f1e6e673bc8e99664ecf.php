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

/* pages/admin/form/form_editor.html.twig */
class __TwigTemplate_a8c1dec6bde6b5482de0e2b929bc610c extends Template
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
        // line 37
        yield "
";
        // line 38
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 38)->unwrap();
        // line 39
        yield "
";
        // line 40
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "no_label" => true];
        // line 45
        yield "
<form
    id=\"main-form\"
    data-glpi-form-editor-container
    class=\"
        form-editor-container
        d-flex
        flex-column
        ";
        // line 55
        yield "        mt-n2
        mb-n2
        ";
        // line 57
        if ((($tmp =  !($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "            form-editor-readonly
        ";
        }
        // line 60
        yield "    \"
    method=\"POST\"
    action=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 62), "html", null, true);
        yield "\"
    data-ajax-submit ";
        // line 64
        yield "    data-ajax-submit-itemtype=\"Glpi\\Form\\Form\" ";
        // line 65
        yield "    data-track-changes=\"true\"
>
    ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

    ";
        // line 70
        yield "    ";
        // line 71
        yield "    ";
        // line 72
        yield "    <div data-glpi-form-editor class=\"form-editor row flex-reverse\">

        <div class=\"designer col-12\">
            <div class=\"row h-full\">
                <div class=\"d-flex\">
                    <div
                        class=\"flex-grow-1 d-flex px-4 py-3 me-6\"
                        data-glpi-form-editor-form
                        data-glpi-form-editor-active-form
                    >
                        <div class=\"flex-grow-1\">
                            <section
                                data-glpi-form-editor-form-details
                                data-glpi-form-editor-on-click=\"set-active\"
                                aria-label=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form details"), "html", null, true);
        yield "\"
                            >
                                ";
        // line 88
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["invalid_questions"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        <div class=\"alert-icon\">
                                            <i class=\"ti ti-exclamation-circle\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"alert-heading\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("These questions have an unknown type and will be deleted the next time this form is saved:"), "html", null, true);
            yield "</h4>
                                            <div class=\"alert-description\">
                                                <ul class=\"alert-list\">
                                                    ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["invalid_questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["invalid_question"]) {
                // line 98
                yield "                                                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["invalid_question"], "fields", [], "any", false, false, false, 98)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), "html", null, true);
                yield "</li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['invalid_question'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 105
        yield "
                                ";
        // line 107
        yield "                                <div class=\"card form-details\">
                                    <div
                                        class=\"card-status-start bg-primary\"
                                        data-glpi-form-editor-active-form-status-indicator
                                    ></div>
                                    <div class=\"card-body\">

                                        ";
        // line 115
        yield "                                        <div class=\"d-flex\">
                                            ";
        // line 117
        yield "                                            <input
                                                title=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form name"), "html", null, true);
        yield "\"
                                                type=\"text\"
                                                class=\"form-control content-editable-h1\"
                                                name=\"name\"
                                                value=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122), "html", null, true);
        yield "\"
                                                data-glpi-form-editor-form-details-name
                                            >

                                            ";
        // line 127
        yield "                                            <label class=\"form-check form-switch ms-3\" style=\"margin-top: 2px\">
                                                <input type=\"hidden\" value=\"0\" name=\"is_active\">
                                                <input
                                                    class=\"form-check-input\"
                                                    name=\"is_active\"
                                                    type=\"checkbox\"
                                                    value=\"1\"
                                                    ";
        // line 134
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 134), "is_active", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked ";
        }
        // line 135
        yield "                                                >
                                                <span class=\"form-check-label\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Active"), "html", null, true);
        yield "</span>
                                            </label>
                                        </div>

                                        ";
        // line 141
        yield "                                        <div class=\"content-editable-tinymce\" data-glpi-form-editor-header-description>
                                            ";
        // line 142
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 142, $this->getSourceContext())->macro_textareaField(...["header", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 144
($context["item"] ?? null), "fields", [], "any", false, false, false, 144), "header", [], "any", false, false, false, 144), __("Header"), Twig\Extension\CoreExtension::merge(        // line 146
($context["base_field_options"] ?? null), ["enable_richtext" => true, "add_body_classes" => ["content-editable-tinymce-editor", "text-muted"], "editor_height" => "0", "rows" => 1, "toolbar_location" => "bottom", "mb" => "mb-0", "aria_label" => __("Form description"), "placeholder" => __("Add a description to your form...")])]);
        // line 156
        yield "
                                        </div>
                                    </div>
                                </div>
                            </section>

                            ";
        // line 163
        yield "                            <div data-glpi-form-editor-blocks>
                                ";
        // line 164
        $context["number_of_sections"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getSections", [], "method", false, false, false, 164));
        // line 165
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getSections", [], "method", false, false, false, 165));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 166
            yield "                                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_section.html.twig", ["form" =>             // line 167
($context["item"] ?? null), "section" =>             // line 168
$context["section"], "question_types_manager" =>             // line 169
($context["question_types_manager"] ?? null), "section_index" => CoreExtension::getAttribute($this->env, $this->source,             // line 170
$context["loop"], "index", [], "any", false, false, false, 170), "can_update" =>             // line 171
($context["can_update"] ?? null), "show_section_form" => (            // line 172
($context["number_of_sections"] ?? null) > 1), "number_of_sections" =>             // line 173
($context["number_of_sections"] ?? null), "allow_unauthenticated_access" =>             // line 174
($context["allow_unauthenticated_access"] ?? null)], false);
            // line 176
            yield "
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "                            </div>
                        </div>

                        <div class=\"mb-3\" data-glpi-form-editor-form-extra-details>
                            ";
        // line 182
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 183
($context["can_update"] ?? null), "form" =>         // line 184
($context["item"] ?? null), "vertical_layout" => true], false);
        // line 186
        yield "
                        </div>
                    </div>

                    <section class=\"col-12 col-lg-4 mt-0 p-0 rounded-0 card-footer border-start border-top-0 ms-auto\">
                        <section
                            id=\"glpi-form-properties-accordion\"
                            class=\"accordion open accordion-flush h-full\"
                            aria-label=\"Form properties accordion\"
                        >
                            <section class=\"accordion-item\">
                                <div class=\"accordion-header\" id=\"heading-item-properties\">
                                    <button
                                        class=\"accordion-button\"
                                        type=\"button\"
                                        ";
        // line 202
        yield "                                        ";
        // line 206
        yield "                                        aria-label=\"Properties\"
                                    >
                                        <i class=\"ti ti-alert-circle item-icon\"></i>
                                        <span class=\"item-title\">Form properties</span>
                                    </button>
                                </div>
                                <section id=\"item-properties\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading-item-properties\" data-bs-parent=\"#glpi-form-properties-accordion\">
                                    <div class=\"accordion-body d-flex flex-column\">
                                        <script>
                                            function renderLayoutTemplateResult(data) {
                                                const icons = ";
        // line 216
        yield json_encode(Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\RenderLayout::STEP_BY_STEP, "cases", [], "any", false, false, false, 216), function ($__case__) use ($context, $macros) { $context["case"] = $__case__; return [CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "value", [], "any", false, false, false, 216) => CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "getIcon", [], "method", false, false, false, 216)]; }), function ($__carry__, $__item__) use ($context, $macros) { $context["carry"] = $__carry__; $context["item"] = $__item__; return Twig\Extension\CoreExtension::merge(($context["carry"] ?? null), ($context["item"] ?? null)); }, []));
        yield ";

                                                return \$(`<span class=\"w-full d-flex align-items-center gap-2\" title=\"\${data.text}\"\"><i class=\"\${icons[data.id]}\"></i>\${data.text}</span>`);
                                            }

                                            function renderLayoutTemplateSelection(data) {
                                                return renderLayoutTemplateResult(data).addClass('flex-row-reverse');
                                            }
                                        </script>

                                        ";
        // line 226
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 226, $this->getSourceContext())->macro_dropdownArrayField(...["render_layout", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 228
($context["item"] ?? null), "fields", [], "any", false, false, false, 228), "render_layout", [], "any", false, false, false, 228), Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\RenderLayout::STEP_BY_STEP, "cases", [], "any", false, false, false, 229),         // line 229
function ($__case__) use ($context, $macros) { $context["case"] = $__case__; return [CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "value", [], "any", false, false, false, 229) => CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "getLabel", [], "method", false, false, false, 229)]; }), function ($__carry__, $__item__) use ($context, $macros) { $context["carry"] = $__carry__; $context["item"] = $__item__; return Twig\Extension\CoreExtension::merge(($context["carry"] ?? null), ($context["item"] ?? null)); }, []), __("Render layout"), ["is_horizontal" => false, "full_width" => true, "templateSelection" => "renderLayoutTemplateSelection", "templateResult" => "renderLayoutTemplateResult", "add_field_attribs" => ["data-fix-dropdown-flex" => ""]]]);
        // line 240
        yield "

                                        ";
        // line 242
        $context["visibility_dropdown_field"] = Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/submit_button_conditional_visibility_dropdown.html.twig", ["item" =>         // line 243
($context["item"] ?? null)], false);
        // line 245
        yield "
                                        ";
        // line 246
        yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 246, $this->getSourceContext())->macro_field(...["",         // line 248
($context["visibility_dropdown_field"] ?? null), __("Conditional visibility for submit button"), ["is_horizontal" => false, "full_width" => true]]);
        // line 254
        yield "
                                    </div>
                                </section>
                            </section>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class=\"
        editor-footer
        justify-content-end
        d-flex
        flex-row-reverse
        py-2
        px-3
        ";
        // line 274
        yield "        ms-n2
        me-n2
    \">
        ";
        // line 277
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 277), "is_draft", [], "any", false, false, false, 277)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 278
            yield "            ";
            // line 279
            yield "            <button
                class=\"btn btn-primary\"
                type=\"submit\"
                name=\"update\"
                form=\"main-form\"
                title=\"";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "\"
            >
                <i class=\"ti ti-plus me-1\"></i>
                <span class=\"d-block add-label\">";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "</span>
            </button>
        ";
        } elseif ((($tmp =         // line 289
($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 290
            yield "            ";
            // line 291
            yield "            <button
                class=\"btn btn-primary\"
                type=\"submit\"
                name=\"update\"
                form=\"main-form\"
                title=\"";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
            yield "\"
            >
                <i class=\"ti ti-device-floppy me-1\"></i>
                <span class=\"d-block save-label\">";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
            yield "</span>
            </button>
        ";
        }
        // line 302
        yield "
        ";
        // line 304
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDelete", [], "method", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 305
            yield "            <button
                class=\"
                    btn
                    btn-ghost-secondary
                    me-2
                    ";
            // line 310
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 310), "is_deleted", [], "any", false, false, false, 310)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "
                \"
                type=\"submit\"
                name=\"restore\"
                form=\"main-form\"
            >
                <i class=\"ti ti-trash-off me-1\"></i>";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Restore"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 319
        yield "
        ";
        // line 321
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canPurge", [], "method", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 322
            yield "            <button
                class=\"btn btn-ghost-danger me-2 ";
            // line 323
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 323), "is_deleted", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\"
                type=\"submit\"
                name=\"purge\"
                form=\"main-form\"
            >
                <i class=\"ti ti-trash me-1\"></i>";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 331
        yield "
        ";
        // line 333
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDelete", [], "method", false, false, false, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 334
            yield "            ";
            // line 335
            yield "            <button
                class=\"
                    btn
                    btn-ghost-warning
                    me-2
                    ";
            // line 340
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 340), "is_deleted", [], "any", false, false, false, 340)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "
                    ";
            // line 341
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 341), "is_draft", [], "any", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "
                \"
                type=\"submit\"
                name=\"delete\"
                form=\"main-form\"
            >
                <i class=\"ti ti-trash me-1\"></i>";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Put in trashbin"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 350
        yield "
        ";
        // line 352
        yield "        <div class=\"me-auto\" data-glpi-form-editor-preview-actions>
            <a
                href=\"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/Form/Render/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 354), "id", [], "any", false, false, false, 354))), "html", null, true);
        yield "\"
                target=\"_blank\"
                class=\"btn btn-secondary\"
                type=\"button\"
                name=\"preview\"
                form=\"main-form\"
                title=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
        yield "\"
                data-glpi-form-editor-preview-action
            >
                <i class=\"ti ti-eye me-1\"></i>
                <span class=\"d-none d-xl-block\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
        yield "</span>
            </a>
            <button
                class=\"btn btn-secondary d-none\"
                type=\"submit\"
                name=\"update\"
                form=\"main-form\"
                title=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and preview"), "html", null, true);
        yield "\"
                data-glpi-form-editor-on-click=\"queue-preview\"
                data-glpi-form-editor-save-and-preview-action
                data-glpi-form-editor-preview-url=\"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/Form/Render/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 374), "id", [], "any", false, false, false, 374))), "html", null, true);
        yield "\"
            >
                <i class=\"ti ti-eye me-1\"></i>
                <span class=\"d-none d-xl-block\">";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and preview"), "html", null, true);
        yield "</span>
            </button>
        </div>
    </div>

    ";
        // line 383
        yield "    <input type=\"hidden\" name=\"id\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
        yield "\">

    ";
        // line 386
        yield "    <input type=\"hidden\" name=\"uuid\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 386), "uuid", [], "any", false, false, false, 386), "html", null, true);
        yield "\">

    ";
        // line 389
        yield "    <input type=\"hidden\" name=\"_delete_missing_questions\" value=\"1\">
    <input type=\"hidden\" name=\"_delete_missing_sections\" value=\"1\">
    <input type=\"hidden\" name=\"_delete_missing_comments\" value=\"1\">

    ";
        // line 394
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 394), "is_draft", [], "any", false, false, false, 394)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 395
            yield "        <input type=\"hidden\" name=\"is_draft\" value=\"0\">
    ";
        }
        // line 397
        yield "
    ";
        // line 399
        yield "
    ";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

    ";
        // line 403
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/move_section_modal.html.twig");
        yield "

    ";
        // line 406
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/item_has_conditions_modal.html.twig");
        yield "
</form>

";
        // line 409
        if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 410
            yield "    ";
            // line 411
            yield "    <div data-glpi-form-editor-templates class=\"d-none\">

        ";
            // line 414
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypes", [], "method", false, false, false, 414));
            foreach ($context['_seq'] as $context["_key"] => $context["question_type"]) {
                // line 415
                yield "            <div data-glpi-form-editor-question-template=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "html", null, true);
                yield "\">
                ";
                // line 417
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_question.html.twig", ["form" =>                 // line 418
($context["item"] ?? null), "question_types_manager" =>                 // line 419
($context["question_types_manager"] ?? null), "question_type" =>                 // line 420
$context["question_type"], "question" => null, "section" => null, "can_update" => true, "allow_unauthenticated_access" =>                 // line 424
($context["allow_unauthenticated_access"] ?? null)], false);
                // line 425
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['question_type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 428
            yield "
        ";
            // line 430
            yield "        <div data-glpi-form-editor-comment-template>
            ";
            // line 431
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_comment.html.twig", ["form" =>             // line 432
($context["item"] ?? null), "section" => null, "can_update" => true], false);
            // line 435
            yield "
        </div>

        ";
            // line 439
            yield "        <div data-glpi-form-editor-section-template>
            ";
            // line 440
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_section.html.twig", ["form" =>             // line 441
($context["item"] ?? null), "section" => null, "can_update" => true, "show_section_form" => true, "number_of_sections" => 0, "allow_unauthenticated_access" =>             // line 446
($context["allow_unauthenticated_access"] ?? null)], false);
            // line 447
            yield "
        </div>

        ";
            // line 451
            yield "        <div data-glpi-form-editor-horizontal-block-template>
            ";
            // line 452
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block.html.twig", ["blocks" => null, "can_update" => true, "form" =>             // line 455
($context["item"] ?? null), "allow_unauthenticated_access" =>             // line 456
($context["allow_unauthenticated_access"] ?? null)], false);
            // line 457
            yield "
        </div>

        ";
            // line 461
            yield "        <div data-glpi-form-editor-horizontal-block-placeholder-template>
            ";
            // line 462
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block_placeholder.html.twig", ["can_update" => true, "form" =>             // line 464
($context["item"] ?? null)], false);
            // line 465
            yield "
        </div>

        ";
            // line 469
            yield "        <select data-glpi-form-editor-question-types-values>
            ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypes", [], "method", false, false, false, 470));
            foreach ($context['_seq'] as $context["_key"] => $context["question_type"]) {
                // line 471
                yield "                ";
                $context["parent_category"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getCategoryKey", [CoreExtension::getAttribute($this->env, $this->source,                 // line 472
$context["question_type"], "getCategory", [], "method", false, false, false, 472)], "method", false, false, false, 471);
                // line 474
                yield "                <option
                    data-glpi-form-editor-question-type=\"";
                // line 475
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parent_category"] ?? null), "html", null, true);
                yield "\"
                    value=\"";
                // line 476
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "html", null, true);
                yield "\"
                >
                    ";
                // line 478
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getName", [], "method", false, false, false, 478), "html", null, true);
                yield "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['question_type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 481
            yield "        </select>

    </div>
";
        }
        // line 485
        yield "
<script defer type=\"module\">
(async () => {
    const modules = await Promise.all([
        import(\"/js/modules/Forms/EditorController.js\"),
        import(\"/js/modules/Forms/EditorConvertedExtractedDefaultValue.js\"),
        import(\"/js/modules/Forms/EditorConvertedExtractedSelectableDefaultValue.js\")
    ]);
    const GlpiFormEditorController = modules[0].GlpiFormEditorController;
    const EditorConvertedExtractedDefaultValue = modules[1].GlpiFormEditorConvertedExtractedDefaultValue;
    const EditorConvertedExtractedSelectableDefaultValue = modules[2].GlpiFormEditorConvertedExtractedSelectableDefaultValue;

    const container_selector = \"[data-glpi-form-editor-container]\";
    const controller = new GlpiFormEditorController(
        container_selector,
        ";
        // line 500
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 500), "is_draft", [], "any", false, false, false, 500)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ",
        \"";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getDefaultTypeClass", [], "method", false, false, false, 501), "js"), "html", null, true);
        yield "\",
        \"[data-glpi-form-editor-templates]\",
        ";
        // line 503
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getDestinations", [], "method", false, false, false, 503), function ($__destination__) use ($context, $macros) { $context["destination"] = $__destination__; return ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 504
($context["destination"] ?? null), "fields", [], "any", false, false, false, 504), "id", [], "any", false, false, false, 504), "name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 505
($context["destination"] ?? null), "fields", [], "any", false, false, false, 505), "name", [], "any", false, false, false, 505), "conditions" => CoreExtension::getAttribute($this->env, $this->source,         // line 506
($context["destination"] ?? null), "getConfiguredConditionsData", [], "method", false, false, false, 506)]; }));
        // line 507
        yield ",
        ";
        // line 508
        yield (((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
        yield ", // is_readonly
    );

    // Temporary solution, would be better to import it directly where it is needed but the current
    // design doesn't allow it.
    \$(container_selector).data('EditorConvertedExtractedDefaultValue', EditorConvertedExtractedDefaultValue);
    \$(container_selector).data('EditorConvertedExtractedSelectableDefaultValue', EditorConvertedExtractedSelectableDefaultValue);

    ";
        // line 516
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypes", [], "method", false, false, false, 516));
        foreach ($context['_seq'] as $context["_key"] => $context["question_type"]) {
            // line 517
            yield "        controller.registerQuestionTypeOptions(
            '";
            // line 518
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "js"), "html", null, true);
            yield "',
            ";
            // line 519
            yield CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getFormEditorJsOptions", [], "method", false, false, false, 519);
            yield "
        );

        ";
            // line 522
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypes", [], "method", false, false, false, 522))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 523
                yield "            controller.registerQuestionSubTypesOptions(
                '";
                // line 524
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "js"), "html", null, true);
                yield "',
                {
                    'subtypes'        : ";
                // line 526
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypes", [], "method", false, false, false, 526));
                yield ",
                    'default_value'   : '";
                // line 527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypeDefaultValue", [null], "method", false, false, false, 527), "js"), "html", null, true);
                yield "',
                    'field_name'      : '";
                // line 528
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypeFieldName", [], "method", false, false, false, 528), "js"), "html", null, true);
                yield "',
                    'field_aria_label': '";
                // line 529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypeFieldAriaLabel", [], "method", false, false, false, 529), "js"), "html", null, true);
                yield "',
                }
            )
        ";
            }
            // line 533
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question_type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 534
        yield "
    \$(container_selector).data('controller', controller);
    \$(container_selector).addClass(\"initialized\");
    \$(container_selector).trigger(\"initialized\");
})();
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_editor.html.twig";
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
        return array (  818 => 534,  812 => 533,  805 => 529,  801 => 528,  797 => 527,  793 => 526,  788 => 524,  785 => 523,  783 => 522,  777 => 519,  773 => 518,  770 => 517,  766 => 516,  755 => 508,  752 => 507,  750 => 506,  749 => 505,  748 => 504,  747 => 503,  742 => 501,  738 => 500,  721 => 485,  715 => 481,  706 => 478,  701 => 476,  697 => 475,  694 => 474,  692 => 472,  690 => 471,  686 => 470,  683 => 469,  678 => 465,  676 => 464,  675 => 462,  672 => 461,  667 => 457,  665 => 456,  664 => 455,  663 => 452,  660 => 451,  655 => 447,  653 => 446,  652 => 441,  651 => 440,  648 => 439,  643 => 435,  641 => 432,  640 => 431,  637 => 430,  634 => 428,  626 => 425,  624 => 424,  623 => 420,  622 => 419,  621 => 418,  619 => 417,  614 => 415,  609 => 414,  605 => 411,  603 => 410,  601 => 409,  594 => 406,  588 => 403,  583 => 400,  580 => 399,  577 => 397,  573 => 395,  570 => 394,  564 => 389,  558 => 386,  552 => 383,  544 => 377,  538 => 374,  532 => 371,  522 => 364,  515 => 360,  506 => 354,  502 => 352,  499 => 350,  493 => 347,  484 => 341,  480 => 340,  473 => 335,  471 => 334,  468 => 333,  465 => 331,  459 => 328,  451 => 323,  448 => 322,  445 => 321,  442 => 319,  436 => 316,  427 => 310,  420 => 305,  417 => 304,  414 => 302,  408 => 299,  402 => 296,  395 => 291,  393 => 290,  391 => 289,  386 => 287,  380 => 284,  373 => 279,  371 => 278,  369 => 277,  364 => 274,  344 => 254,  342 => 248,  341 => 246,  338 => 245,  336 => 243,  335 => 242,  331 => 240,  329 => 229,  328 => 228,  327 => 226,  314 => 216,  302 => 206,  300 => 202,  283 => 186,  281 => 184,  280 => 183,  279 => 182,  273 => 178,  258 => 176,  256 => 174,  255 => 173,  254 => 172,  253 => 171,  252 => 170,  251 => 169,  250 => 168,  249 => 167,  247 => 166,  229 => 165,  227 => 164,  224 => 163,  216 => 156,  214 => 146,  213 => 144,  212 => 142,  209 => 141,  202 => 136,  199 => 135,  195 => 134,  186 => 127,  179 => 122,  172 => 118,  169 => 117,  166 => 115,  157 => 107,  154 => 105,  147 => 100,  138 => 98,  134 => 97,  128 => 94,  121 => 89,  119 => 88,  114 => 86,  98 => 72,  96 => 71,  94 => 70,  89 => 67,  85 => 65,  83 => 64,  79 => 62,  75 => 60,  71 => 58,  69 => 57,  65 => 55,  55 => 45,  53 => 40,  50 => 39,  48 => 38,  45 => 37,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_editor.html.twig", "/var/www/glpi/templates/pages/admin/form/form_editor.html.twig");
    }
}
