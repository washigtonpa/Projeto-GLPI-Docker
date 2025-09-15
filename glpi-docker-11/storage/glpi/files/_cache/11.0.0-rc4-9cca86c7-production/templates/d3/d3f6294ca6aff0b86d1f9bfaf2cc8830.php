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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_606ccaad4e4def6d7d6188064b7902e4 extends Template
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
        // line 56
        yield "
";
        // line 78
        yield "
";
        // line 94
        yield "

";
        // line 108
        yield "
";
        // line 123
        yield "
";
        // line 137
        yield "

";
        // line 177
        yield "

";
        // line 191
        yield "

";
        // line 206
        yield "

";
        // line 266
        yield "

";
        // line 276
        yield "

";
        // line 286
        yield "

";
        // line 300
        yield "

";
        // line 325
        yield "

";
        // line 339
        yield "
";
        // line 352
        yield "
";
        // line 390
        yield "
";
        // line 426
        yield "
";
        // line 440
        yield "
";
        // line 468
        yield "
";
        // line 497
        yield "
";
        // line 524
        yield "
";
        // line 549
        yield "
";
        // line 579
        yield "
";
        // line 594
        yield "
";
        // line 618
        yield "
";
        // line 637
        yield "
";
        // line 664
        yield "
";
        // line 691
        yield "
";
        // line 729
        yield "
";
        // line 767
        yield "
";
        // line 785
        yield "
";
        // line 825
        yield "
";
        // line 836
        yield "
";
        // line 846
        yield "

";
        // line 874
        yield "

";
        // line 939
        yield "

";
        // line 977
        yield "
";
        // line 982
        yield "
";
        // line 1021
        yield "
";
        yield from [];
    }

    // line 33
    public function macro_largeTitle($label = null, $icon = "", $first = false, $helper = "", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "icon" => $icon,
            "first" => $first,
            "helper" => $helper,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "   ";
            $context["margins"] = "mt-3";
            // line 35
            yield "   ";
            if ((($tmp = ($context["first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "      ";
                $context["margins"] = "mt-n2";
                // line 37
                yield "   ";
            }
            // line 38
            yield "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["margins"] ?? null), "html", null, true);
            yield "\">
      <div class=\"card-header mb-3 pt-2 border-top rounded-0\">
         <h4 class=\"card-title ";
            // line 41
            yield (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-5") : (""));
            yield "\">
            ";
            // line 42
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fs-2x ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield "\"></i>
               </div>
            ";
            }
            // line 47
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
            ";
            // line 48
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["helper"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "               <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
                     data-bs-content=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helper"] ?? null), "html", null, true);
                yield "\">?</span>
            ";
            }
            // line 52
            yield "         </h4>
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function macro_smallTitle($label = null, $icon = "", $helper = "", $id = "", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "icon" => $icon,
            "helper" => $helper,
            "id" => $id,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 58
            yield "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 59
            yield "   ";
            $context["id"] = (((($context["id"] ?? null) != "")) ? (($context["id"] ?? null)) : (("formsection" . Twig\Extension\CoreExtension::random($this->env->getCharset()))));
            // line 60
            yield "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["margins"] ?? null), "html", null, true);
            yield "\">
      <div id=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\" class=\"card-header mb-1 p-0 ps-3 py-1\">
         <h4 class=\"card-subtitle ";
            // line 63
            yield (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-4") : (""));
            yield "\">
            ";
            // line 64
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fs-2x ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield "\"></i>
               </div>
            ";
            }
            // line 69
            yield "             <span class=\"ms-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "</span>
            ";
            // line 70
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["helper"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "               <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
                     data-bs-content=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helper"] ?? null), "html", null, true);
                yield "\">?</span>
            ";
            }
            // line 74
            yield "         </h4>
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 79
    public function macro_autoNameField($name = null, $item = null, $label = "", $withtemplate = 0, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "item" => $item,
            "label" => $label,
            "withtemplate" => $withtemplate,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 80
            yield "   ";
            $context["tpl_value"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 80)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 80)) : (""))) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 80)) : ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["name"] ?? null)] ?? null) : null)));
            // line 81
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " ";
                // line 82
                yield "       ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["tpl_mark" => CoreExtension::getAttribute($this->env, $this->source,                 // line 83
($context["item"] ?? null), "getAutofillMark", [($context["name"] ?? null), ["withtemplate" => ($context["withtemplate"] ?? null)], ($context["tpl_value"] ?? null)], "method", false, false, false, 83)]);
                // line 85
                yield "   ";
            }
            // line 86
            yield "   ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 86), ($context["name"] ?? null), [], "array", true, true, false, 86) &&  !(null === (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["name"] ?? null)] ?? null) : null)))) {
                // line 87
                yield "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [(($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["name"] ?? null)] ?? null) : null), ($context["name"] ?? null), (($context["withtemplate"] ?? null) == 2), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 87), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 87), "entities_id", [], "array", true, true, false, 87) &&  !(null === (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["entities_id"] ?? null) : null)))) ? ((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["entities_id"] ?? null) : null)) : (null))]);
                // line 88
                yield "   ";
            } else {
                // line 89
                yield "      ";
                $context["value"] = null;
                // line 90
                yield "   ";
            }
            // line 91
            yield "
   ";
            // line 92
            yield $this->getTemplateForMacro("macro_textField", $context, 92, $this->getSourceContext())->macro_textField(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function macro_textField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 97
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 99
($context["options"] ?? null));
            // line 100
            yield "
   ";
            // line 101
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 102
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 102)->unwrap();
                // line 103
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_text", $context, 103, $this->getSourceContext())->macro_text(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            yield "
   ";
            // line 106
            yield $this->getTemplateForMacro("macro_field", $context, 106, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function macro_urlField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 110
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 112
($context["options"] ?? null));
            // line 113
            yield "
    ";
            // line 114
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 115
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 115)->unwrap();
                // line 116
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_input", $context, 116, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "url"])]);
                // line 118
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 120
            yield "
    ";
            // line 121
            yield $this->getTemplateForMacro("macro_field", $context, 121, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 124
    public function macro_checkboxField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 125
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "center" => true],             // line 128
($context["options"] ?? null));
            // line 129
            yield "
    ";
            // line 130
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 131
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 131)->unwrap();
                // line 132
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_checkbox", $context, 132, $this->getSourceContext())->macro_checkbox(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 134
            yield "
    ";
            // line 135
            yield $this->getTemplateForMacro("macro_field", $context, 135, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 139
    public function macro_sliderField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 140
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 140), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 140)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 140), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 140), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 141
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true],                 // line 143
($context["options"] ?? null));
                // line 144
                yield "   ";
            }
            // line 145
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 145), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 145), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 145), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 146
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 147
                yield "   ";
            }
            // line 148
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["no_value" => 0, "yes_value" => 1, "readonly" => false, "required" => false, "disabled" => false, "additional_attributes" => [], "label2" => ""],             // line 156
($context["options"] ?? null));
            // line 157
            yield "
   ";
            // line 158
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 159
                yield "      <label class=\"form-check form-switch mt-2\">
         <input type=\"hidden\"   name=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_value", [], "any", false, false, false, 160), "html", null, true);
                yield "\" />
         <input type=\"checkbox\" name=\"";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "yes_value", [], "any", false, false, false, 161), "html", null, true);
                yield "\" class=\"form-check-input\" id=\"%id%\"
                ";
                // line 162
                yield (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
                yield "
                ";
                // line 163
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                yield "
                ";
                // line 164
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                yield "
                ";
                // line 165
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                yield "
                ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 166));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    // line 167
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\"
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                yield " />
         ";
                // line 169
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 170
                    yield "            <span class=\"form-check-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 170), "html", null, true);
                    yield "</span>
         ";
                }
                // line 172
                yield "      </label>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 174
            yield "
   ";
            // line 175
            yield $this->getTemplateForMacro("macro_field", $context, 175, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 179
    public function macro_numberField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 180
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 182
($context["options"] ?? null));
            // line 183
            yield "
    ";
            // line 184
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 185
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 185)->unwrap();
                // line 186
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_number", $context, 186, $this->getSourceContext())->macro_number(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 188
            yield "
    ";
            // line 189
            yield $this->getTemplateForMacro("macro_field", $context, 189, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 193
    public function macro_readOnlyField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 194
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
            // line 195
            yield "   ";
            $context["value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 196
                yield "      <span class=\"form-control ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", true, true, false, 196) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 196)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 196), "html", null, true)) : (""));
                yield "\" readonly>
         ";
                // line 197
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) == 0)) {
                    // line 198
                    yield "            &nbsp;
         ";
                } else {
                    // line 200
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                    yield "
         ";
                }
                // line 202
                yield "      </span>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 204
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 204, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 208
    public function macro_textareaField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 209
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "mention_options" => ["enabled" => (CoreExtension::getAttribute($this->env, $this->source,             // line 215
($context["options"] ?? null), "enable_mentions", [], "any", true, true, false, 215) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 215)), "full" => true, "users" => []], "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "uploads" => [], "rows" => 3, "readonly" => false],             // line 223
($context["options"] ?? null));
            // line 224
            yield "
   ";
            // line 225
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 226
                yield "       ";
                // line 227
                yield "       ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((Html::sanitizeDomId(($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 227))], ($context["options"] ?? null));
                // line 228
                yield "   ";
            }
            // line 229
            yield "
   ";
            // line 230
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 231
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 231)->unwrap();
                // line 232
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_textarea", $context, 232, $this->getSourceContext())->macro_textarea(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 234
            yield "
   ";
            // line 235
            $context["add_html"] = "";
            // line 236
            yield "   ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 236) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 236))) {
                // line 237
                yield "      ";
                $context["add_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 238
                    yield "         ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 239
($context["options"] ?? null), "id", [], "any", false, false, false, 239), "multiple" => true, "uploads" => CoreExtension::getAttribute($this->env, $this->source,                     // line 241
($context["options"] ?? null), "uploads", [], "any", false, false, false, 241), "required" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 242
($context["options"] ?? null), "fields_template", [], "any", false, true, false, 242), "isMandatoryField", ["_documents_id"], "method", true, true, false, 242)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 242), "isMandatoryField", ["_documents_id"], "method", false, false, false, 242), false)) : (false))]]);
                    // line 244
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 245
                yield "   ";
            } elseif (((( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 245) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 245)) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 245)) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 245))) {
                // line 246
                yield "      ";
                $context["add_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 247
                    yield "         ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 248
($context["options"] ?? null), "id", [], "any", false, false, false, 248), "name" =>                     // line 249
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => CoreExtension::getAttribute($this->env, $this->source,                     // line 251
($context["options"] ?? null), "uploads", [], "any", false, false, false, 251), "required" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 252
($context["options"] ?? null), "fields_template", [], "any", false, true, false, 252), "isMandatoryField", ["_documents_id"], "method", true, true, false, 252)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 252), "isMandatoryField", ["_documents_id"], "method", false, false, false, 252), false)) : (false))]]);
                    // line 254
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 255
                yield "   ";
            }
            // line 256
            yield "
   ";
            // line 257
            if ((($context["add_html"] ?? null) != "")) {
                // line 258
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 258)) {
                    // line 259
                    yield "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 259));
                    // line 260
                    yield "      ";
                }
                // line 261
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 262
                yield "   ";
            }
            // line 263
            yield "
   ";
            // line 264
            yield $this->getTemplateForMacro("macro_field", $context, 264, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 268
    public function macro_dateField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 269
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 270
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 270)->unwrap();
                // line 271
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_date", $context, 271, $this->getSourceContext())->macro_date(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 273
            yield "
   ";
            // line 274
            yield $this->getTemplateForMacro("macro_field", $context, 274, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 278
    public function macro_datetimeField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 279
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 280
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 280)->unwrap();
                // line 281
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_datetime", $context, 281, $this->getSourceContext())->macro_datetime(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 283
            yield "
   ";
            // line 284
            yield $this->getTemplateForMacro("macro_field", $context, 284, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 288
    public function macro_colorField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 289
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 291
($context["options"] ?? null));
            // line 292
            yield "
    ";
            // line 293
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 294
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 294)->unwrap();
                // line 295
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_color", $context, 295, $this->getSourceContext())->macro_color(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 297
            yield "
    ";
            // line 298
            yield $this->getTemplateForMacro("macro_field", $context, 298, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 302
    public function macro_passwordField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 303
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "can_regenerate" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 305
($context["options"] ?? null), "can_regenerate", [], "any", true, true, false, 305) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 305)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 305)) : (false)), "clearable" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 306
($context["options"] ?? null), "clearable", [], "any", true, true, false, 306)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 306)) : ( !(((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", true, true, false, 306) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 306)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 306)) : (false)))), "is_copyable" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 307
($context["options"] ?? null), "is_disclosable", [], "any", true, true, false, 307) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 307)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 307)) : (false))],             // line 308
($context["options"] ?? null));
            // line 309
            yield "
    ";
            // line 310
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 311
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 311)->unwrap();
                // line 312
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_password", $context, 312, $this->getSourceContext())->macro_password(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 314
            yield "
   ";
            // line 316
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 317
                yield "      ";
                $context["regenerate_chk"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 318
                    yield "         <input type=\"checkbox\" name=\"_regenerate_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" id=\"_regenerate_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\">&nbsp;<label for=\"_regenerate_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Regenerate"), "html", null, true);
                    yield "</label>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 320
                yield "      ";
                $context["field"] = (($context["field"] ?? null) . ($context["regenerate_chk"] ?? null));
                // line 321
                yield "   ";
            }
            // line 322
            yield "
   ";
            // line 323
            yield $this->getTemplateForMacro("macro_field", $context, 323, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 327
    public function macro_emailField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 328
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 330
($context["options"] ?? null));
            // line 331
            yield "
    ";
            // line 332
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 333
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 333)->unwrap();
                // line 334
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_email", $context, 334, $this->getSourceContext())->macro_email(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 336
            yield "
   ";
            // line 337
            yield $this->getTemplateForMacro("macro_field", $context, 337, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 340
    public function macro_fileField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 341
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "simple" => false],             // line 345
($context["options"] ?? null));
            // line 346
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 347
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 347)->unwrap();
                // line 348
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_file", $context, 348, $this->getSourceContext())->macro_file(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 350
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 350, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 353
    public function macro_imageField($name = null, $value = null, $label = "", $options = [], $link_options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "link_options" => $link_options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 354
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 355
                yield "      <div class=\"img-overlay-wrapper position-relative\">
         ";
                // line 356
                $context["clearable"] = (($_v5 = ($context["options"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["clearable"] ?? null) : null);
                // line 357
                yield "         ";
                $context["url"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 357) &&  !(null === (($_v6 = ($context["options"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["url"] ?? null) : null)))) ? ((($_v7 = ($context["options"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["url"] ?? null) : null)) : (null));
                // line 358
                yield "         ";
                $context["options"] = Twig\Extension\CoreExtension::filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
                // line 359
                yield "         ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 360
                    yield "            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["link_options"] ?? null)]);
                    yield ">
         ";
                }
                // line 362
                yield "               <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["options"] ?? null)]);
                yield " />
         ";
                // line 363
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 364
                    yield "            </a>
         ";
                }
                // line 366
                yield "         ";
                if ((($tmp = ($context["clearable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 367
                    yield "            <input type=\"hidden\" name=\"_blank_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" />";
                    // line 368
                    $context["clear_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 369
                        yield "const blank_input = \$('input[name=\\'_blank_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                        yield "\\']');
                 blank_input.val(blank_input.val() ? '' : true);
                 if (\$(this).closest('.picture_gallery_item').length) {
                    \$(this).closest('.picture_gallery_item').hide();
                    \$(this).closest('.picture_gallery').siblings('.deletion_pending').removeClass('d-none');
                 } else {
                    \$(this).closest('.img-overlay-wrapper').hide();
                 }";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 378
                    yield "<button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
                    yield "\"
                    onclick=\"";
                    // line 379
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["clear_js"] ?? null), "html", null, true);
                    yield "\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
                }
                // line 383
                yield "      </div>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 385
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 385), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 385)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 385), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 385), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 386
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 387
                yield "   ";
            }
            // line 388
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 388, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 391
    public function macro_imageGalleryField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 392
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 393
                yield "       <div class=\"text-warning deletion_pending d-none\">
           ";
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The deletion will only take effect after saving the form"), "html", null, true);
                yield "
       </div>
      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
                // line 397
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                    // line 398
                    yield "            <div class=\"picture_gallery_item\" style=\"position: relative; width: fit-content\">
               ";
                    // line 399
                    yield $this->getTemplateForMacro("macro_imageField", $context, 399, $this->getSourceContext())->macro_imageField(...[((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($_v8 =                     // line 402
($context["options"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["clearable"] ?? null) : null), "no_label" => true]]);
                    // line 404
                    yield "
            </div>
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['i'], $context['picture'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 407
                yield "      </div>
      ";
                // line 408
                yield $this->getTemplateForMacro("macro_fileField", $context, 408, $this->getSourceContext())->macro_fileField(...[($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]]);
                // line 411
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 413
            yield "
   ";
            // line 414
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 414), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 414)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 414), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 414), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 415
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 416
                yield "   ";
            }
            // line 417
            yield "
   ";
            // line 418
            $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 418) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 418)) > 0))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 418)) : (((Html::sanitizeDomId(($context["name"] ?? null)) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 418) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 418)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 418)) : ("")))));
            // line 419
            yield "   ";
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 419)->unwrap();
            // line 420
            yield "   ";
            yield $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 420, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)]);
            yield "
   ";
            // line 421
            yield $this->getTemplateForMacro("macro_field", $context, 421, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])]);
            // line 424
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 427
    public function macro_hiddenField($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 428
            yield "    ";
            if ((($tmp =  !is_iterable(($context["options"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 429
                yield "        ";
                // line 435
                yield "        ";
                $context["options"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["varargs"] ?? null), 0, [], "array", true, true, false, 435)) ? (Twig\Extension\CoreExtension::default((($_v9 = ($context["varargs"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[0] ?? null) : null), [])) : ([]));
                // line 436
                yield "    ";
            }
            // line 437
            yield "    ";
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 437)->unwrap();
            // line 438
            yield "    ";
            yield $macros["_inputs"]->getTemplateForMacro("macro_hidden", $context, 438, $this->getSourceContext())->macro_hidden(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 441
    public function macro_dropdownNumberField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 442
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 446
($context["options"] ?? null));
            // line 447
            yield "
   ";
            // line 448
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 448), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 448)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 448), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 448), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 449
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 450
                yield "   ";
            }
            // line 451
            yield "
   ";
            // line 452
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 452)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 453
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 454
                yield "   ";
            }
            // line 455
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 455), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 455)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 455), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 455), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 456
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 457
                yield "   ";
            }
            // line 458
            yield "
   ";
            // line 459
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 460
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 461
($context["value"] ?? null), "rand" => CoreExtension::getAttribute($this->env, $this->source,                 // line 462
($context["options"] ?? null), "rand", [], "any", false, false, false, 462)],                 // line 463
($context["options"] ?? null))]);
                // line 464
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 465
            yield "
   ";
            // line 466
            yield $this->getTemplateForMacro("macro_field", $context, 466, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 466))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 469
    public function macro_dropdownArrayField($name = null, $value = null, $elements = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "elements" => $elements,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 470
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "disabled" => false, "width" => "100%"],             // line 474
($context["options"] ?? null));
            // line 475
            yield "
   ";
            // line 476
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 476), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 476)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 476), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 476), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 477
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 478
                yield "   ";
            }
            // line 479
            yield "
   ";
            // line 480
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 480)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 481
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 482
                yield "   ";
            }
            // line 483
            yield "
   ";
            // line 484
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 484), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 484)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 484), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 484), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 485
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 486
                yield "   ";
            }
            // line 487
            yield "
   ";
            // line 488
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 489
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [($context["name"] ?? null), ($context["elements"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 490
($context["value"] ?? null), "rand" => CoreExtension::getAttribute($this->env, $this->source,                 // line 491
($context["options"] ?? null), "rand", [], "any", false, false, false, 491)],                 // line 492
($context["options"] ?? null))]);
                // line 493
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 494
            yield "
   ";
            // line 495
            yield $this->getTemplateForMacro("macro_field", $context, 495, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 495))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 498
    public function macro_dropdownTimestampField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 499
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 503
($context["options"] ?? null));
            // line 504
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 504), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 504)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 504), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 504), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 505
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 506
                yield "   ";
            }
            // line 507
            yield "
   ";
            // line 508
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 508), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 508)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 508), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 508), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 509
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 510
                yield "   ";
            }
            // line 511
            yield "
   ";
            // line 512
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 512)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 513
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 514
                yield "   ";
            }
            // line 515
            yield "
   ";
            // line 516
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 517
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 518
($context["value"] ?? null)],                 // line 519
($context["options"] ?? null))]);
                // line 520
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 521
            yield "
   ";
            // line 522
            yield $this->getTemplateForMacro("macro_field", $context, 522, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 522))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 525
    public function macro_dropdownYesNo($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 526
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 530
($context["options"] ?? null));
            // line 531
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 531), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 531)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 531), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 531), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 532
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 533
                yield "   ";
            }
            // line 534
            yield "
   ";
            // line 535
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 535), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 535)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 535), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 535), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 536
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 537
                yield "   ";
            }
            // line 538
            yield "
   ";
            // line 539
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 539)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 540
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 541
                yield "   ";
            }
            // line 542
            yield "
   ";
            // line 543
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 544
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [($context["name"] ?? null), ($context["value"] ?? null),  -1, ($context["options"] ?? null)]);
                // line 545
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 546
            yield "
   ";
            // line 547
            yield $this->getTemplateForMacro("macro_field", $context, 547, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 547))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 550
    public function macro_dropdownItemTypes($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 551
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 555
($context["options"] ?? null));
            // line 556
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 556), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 556)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 556), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 556), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 557
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 558
                yield "   ";
            }
            // line 559
            yield "
   ";
            // line 560
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 560), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 560)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 560), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 560), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 561
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 562
                yield "   ";
            }
            // line 563
            yield "
   ";
            // line 564
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 564)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 565
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 566
                yield "   ";
            }
            // line 567
            yield "
   ";
            // line 568
            $context["types"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 568)) ? (Twig\Extension\CoreExtension::default((($_v10 = ($context["options"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["types"] ?? null) : null), [])) : ([]));
            // line 569
            yield "
   ";
            // line 570
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 571
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [($context["name"] ?? null), ($context["types"] ?? null), Twig\Extension\CoreExtension::merge(["rand" => CoreExtension::getAttribute($this->env, $this->source,                 // line 572
($context["options"] ?? null), "rand", [], "any", false, false, false, 572), "value" =>                 // line 573
($context["value"] ?? null)],                 // line 574
($context["options"] ?? null))]);
                // line 575
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 576
            yield "
   ";
            // line 577
            yield $this->getTemplateForMacro("macro_field", $context, 577, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 577))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 580
    public function macro_dropdownItemsFromItemtypes($name = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 581
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())],             // line 583
($context["options"] ?? null));
            // line 584
            yield "
   ";
            // line 585
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 585), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 585)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 585), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 585), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 586
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 587
                yield "   ";
            }
            // line 588
            yield "
   ";
            // line 589
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 590
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [($context["options"] ?? null)]);
                // line 591
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 592
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 592, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 592))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 595
    public function macro_dropdownIcons($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 596
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 599
($context["options"] ?? null));
            // line 600
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 600), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 600)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 600), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 600), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 601
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 602
                yield "   ";
            }
            // line 603
            yield "
   ";
            // line 604
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 604), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 604)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 604), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 604), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 605
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 606
                yield "   ";
            }
            // line 607
            yield "
   ";
            // line 608
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 608)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 609
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 610
                yield "   ";
            }
            // line 611
            yield "
   ";
            // line 612
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 613
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [($context["name"] ?? null), ($context["value"] ?? null), "", ($context["options"] ?? null)]);
                // line 614
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 615
            yield "
   ";
            // line 616
            yield $this->getTemplateForMacro("macro_field", $context, 616, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 616))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 619
    public function macro_dropdownWebIcons($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 620
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())], Twig\Extension\CoreExtension::merge(            // line 622
($context["options"] ?? null), ["noselect2" => true]));
            // line 625
            yield "    ";
            // line 626
            yield "    ";
            $context["value"] = Twig\Extension\CoreExtension::replace(($context["value"] ?? null), ["ti " => ""]);
            // line 627
            yield "
    ";
            // line 628
            yield $this->getTemplateForMacro("macro_dropdownArrayField", $context, 628, $this->getSourceContext())->macro_dropdownArrayField(...[($context["name"] ?? null), ($context["value"] ?? null), [ (string)($context["value"] ?? null) => ($context["value"] ?? null)], ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
    <script type=\"module\">
        import('/js/modules/Form/WebIconSelector.js').then((m) => {
            const dropdown_id = '";
            // line 631
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((("dropdown_" . ($context["name"] ?? null)) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 631)), ["[" => "_", "]" => "_"]), "html", null, true);
            yield "';
            const selector = new m.default(document.getElementById(dropdown_id));
            selector.init();
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 638
    public function macro_dropdownHoursField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 639
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 643
($context["options"] ?? null));
            // line 644
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 644), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 644)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 644), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 644), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 645
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 646
                yield "   ";
            }
            // line 647
            yield "
   ";
            // line 648
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 648), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 648)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 648), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 648), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 649
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 650
                yield "   ";
            }
            // line 651
            yield "
   ";
            // line 652
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 652)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 653
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 654
                yield "   ";
            }
            // line 655
            yield "
   ";
            // line 656
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 657
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 658
($context["value"] ?? null)],                 // line 659
($context["options"] ?? null))]);
                // line 660
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 661
            yield "
   ";
            // line 662
            yield $this->getTemplateForMacro("macro_field", $context, 662, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 662))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 665
    public function macro_dropdownFrequency($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 666
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "disabled" => false],             // line 669
($context["options"] ?? null));
            // line 670
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 670), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 670)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 670), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 670), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 671
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 672
                yield "   ";
            }
            // line 673
            yield "
   ";
            // line 674
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 674), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 674)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 674), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 674), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 675
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 676
                yield "   ";
            }
            // line 677
            yield "
   ";
            // line 678
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 678)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 679
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 680
                yield "   ";
            }
            // line 681
            yield "
   ";
            // line 682
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 683
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFrequency", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(["width" => "100%", "value" =>                 // line 685
($context["value"] ?? null)],                 // line 686
($context["options"] ?? null))]);
                // line 687
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 688
            yield "
   ";
            // line 689
            yield $this->getTemplateForMacro("macro_field", $context, 689, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 689))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 692
    public function macro_dropdownField($itemtype = null, $name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "itemtype" => $itemtype,
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 693
            yield "   ";
            if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", true, true, false, 693) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 693)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 693)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 694
                yield "      ";
                // line 695
                yield "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 696
                yield "      <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defined_input_name"] ?? null), "html", null, true);
                yield "\" value=\"1\"></input>

      ";
                // line 699
                yield "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 700
                yield "   ";
            }
            // line 701
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 705
($context["options"] ?? null));
            // line 706
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 706), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 706)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 706), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 706), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 707
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 708
                yield "   ";
            }
            // line 709
            yield "
   ";
            // line 710
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 710), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 710)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 710), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 710), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 711
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 712
                yield "   ";
            }
            // line 713
            yield "
   ";
            // line 714
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 714)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 715
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 716
                yield "   ";
            }
            // line 717
            yield "
   ";
            // line 718
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 719
                yield "      ";
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), Twig\Extension\CoreExtension::merge(["name" =>                 // line 720
($context["name"] ?? null), "value" =>                 // line 721
($context["value"] ?? null)],                 // line 722
($context["options"] ?? null)));
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 724
            yield "
   ";
            // line 725
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["field"] ?? null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 726
                yield "      ";
                yield $this->getTemplateForMacro("macro_field", $context, 726, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 726))])]);
                yield "
   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 730
    public function macro_dropdownAjaxField($url = null, $name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 731
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 731)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 732
                yield "        ";
                // line 733
                yield "        ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 734
                yield "        <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defined_input_name"] ?? null), "html", null, true);
                yield "\" value=\"1\"></input>

        ";
                // line 737
                yield "        ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 738
                yield "    ";
            }
            // line 739
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 742
($context["options"] ?? null));
            // line 743
            yield "    ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 743), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 743)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 743), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 743), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 744
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 745
                yield "    ";
            }
            // line 746
            yield "
    ";
            // line 747
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 747), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 747)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 747), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 747), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 748
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 749
                yield "    ";
            }
            // line 750
            yield "
    ";
            // line 751
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 751)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 752
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 753
                yield "    ";
            }
            // line 754
            yield "
    ";
            // line 755
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(            // line 756
($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 756))]);
            // line 758
            yield "    ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 759
                yield "        ";
                $context["ajax_opts"] = Twig\Extension\CoreExtension::filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return CoreExtension::inFilter(($context["k"] ?? null), ["templateResult", "templateSelection", "rand"]); });
                // line 760
                yield "        ";
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::jsAjaxDropdown", [($context["name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 760), ($context["url"] ?? null), ($context["ajax_opts"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 762
            yield "
    ";
            // line 763
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["field"] ?? null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 764
                yield "        ";
                yield $this->getTemplateForMacro("macro_field", $context, 764, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 768
    public function macro_htmlField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 769
            yield "   ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) == 0)) {
                // line 770
                yield "      ";
                $context["value"] = "&nbsp;";
                // line 771
                yield "   ";
            }
            // line 772
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["wrapper_class" => "form-control-plaintext"],             // line 774
($context["options"] ?? null));
            // line 775
            yield "
   ";
            // line 776
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 776), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 776)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 776), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 776), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 777
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 778
                yield "   ";
            }
            // line 779
            yield "
   ";
            // line 780
            $context["value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 781
                yield "      <span class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "wrapper_class", [], "any", false, false, false, 781), "html", null, true);
                yield "\">";
                yield ($context["value"] ?? null);
                yield "</span>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 783
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 783, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 786
    public function macro_field($name = null, $field = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "field" => $field,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 787
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => [], "no_label" => false],             // line 795
($context["options"] ?? null));
            // line 796
            yield "
   ";
            // line 797
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, true, false, 797), ($context["name"] ?? null), [], "array", true, true, false, 797)) {
                // line 798
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["locked" => true, "locked_value" => (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 798)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[($context["name"] ?? null)] ?? null) : null)]);
                // line 799
                yield "   ";
            } elseif (CoreExtension::inFilter(($context["name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 799))) {
                // line 800
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["locked" => true]);
                // line 801
                yield "   ";
            }
            // line 802
            yield "
   ";
            // line 803
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 803), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 803)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 803), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 803), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 804
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 805
                yield "   ";
            }
            // line 806
            yield "
   ";
            // line 807
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 807)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 808
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field"] ?? null), "html", null, true);
                yield "
   ";
            } else {
                // line 810
                yield "      ";
                $context["id"] = ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 810) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 810)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 810)) : (""))) > 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 810) != "%id%"))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 810)) : (((Html::sanitizeDomId(($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 810))));
                // line 811
                yield "      ";
                $context["field"] = Twig\Extension\CoreExtension::replace(($context["field"] ?? null), ["%id%" => ($context["id"] ?? null)]);
                // line 812
                yield "      ";
                $context["add_field_html"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 812)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 812)) : (""));
                // line 813
                yield "
      ";
                // line 814
                if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 814), "isHiddenField", [($context["name"] ?? null)], "method", true, true, false, 814)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 814), "isHiddenField", [($context["name"] ?? null)], "method", false, false, false, 814), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 815
                    yield "         ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 815)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 816
                        yield "            ";
                        yield $this->getTemplateForMacro("macro_noLabelField", $context, 816, $this->getSourceContext())->macro_noLabelField(...[($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)]);
                        yield "
         ";
                    } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 817
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 817)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 818
                        yield "            ";
                        yield $this->getTemplateForMacro("macro_horizontalField", $context, 818, $this->getSourceContext())->macro_horizontalField(...[($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])]);
                        yield "
         ";
                    } else {
                        // line 820
                        yield "            ";
                        yield $this->getTemplateForMacro("macro_verticalField", $context, 820, $this->getSourceContext())->macro_verticalField(...[($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])]);
                        yield "
         ";
                    }
                    // line 822
                    yield "      ";
                }
                // line 823
                yield "   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 826
    public function macro_ajaxField($id = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "id" => $id,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 827
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 828
                yield "      <div id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" class=\"form-field-ajax\">
         ";
                // line 829
                if ((($tmp =  !(null === ($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 830
                    yield "            ";
                    yield ($context["value"] ?? null);
                    yield "
         ";
                }
                // line 832
                yield "      </div>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 834
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 834, $this->getSourceContext())->macro_field(...[($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 834) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 834)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 834)) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 837
    public function macro_nullField($options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 838
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 839
            yield "
   ";
            // line 840
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 840)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 841
                yield "      ";
                yield $this->getTemplateForMacro("macro_horizontalField", $context, 841, $this->getSourceContext())->macro_horizontalField(...[null, null, null, null, ($context["options"] ?? null)]);
                yield "
   ";
            } else {
                // line 843
                yield "      ";
                yield $this->getTemplateForMacro("macro_verticalField", $context, 843, $this->getSourceContext())->macro_verticalField(...[null, null, null, null, ($context["options"] ?? null)]);
                yield "
   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 848
    public function macro_noLabelField($field = null, $id = "", $add_field_html = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "id" => $id,
            "add_field_html" => $add_field_html,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 849
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "mb" => "mb-3", "add_field_class" => "", "add_field_attribs" => [], "inline_add_field_html" => false],             // line 855
($context["options"] ?? null));
            // line 856
            yield "
   ";
            // line 857
            $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 857) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 857)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 857)) : ("col-12 col-sm-6"));
            // line 858
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 858)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 859
                yield "      ";
                $context["class"] = "col-12";
                // line 860
                yield "   ";
            }
            // line 861
            yield "   ";
            $context["class"] = ((($context["class"] ?? null) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 861));
            // line 862
            yield "
   ";
            // line 863
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 863))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 864
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 864)]);
                // line 865
                yield "   ";
            } else {
                // line 866
                yield "      ";
                $context["extra_attribs"] = "";
                // line 867
                yield "   ";
            }
            // line 868
            yield "
   <div class=\"";
            // line 869
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 869), "html", null, true);
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inline_add_field_html", [], "any", false, false, false, 869)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : (""));
            yield "\" ";
            yield ($context["extra_attribs"] ?? null);
            yield ">
      ";
            // line 870
            yield ($context["field"] ?? null);
            yield "
      ";
            // line 871
            yield ($context["add_field_html"] ?? null);
            yield "
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 876
    public function macro_horizontalField($label = null, $field = null, $id = null, $add_field_html = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "field" => $field,
            "id" => $id,
            "add_field_html" => $add_field_html,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 877
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "container_id" => "", "add_field_class" => "", "add_label_class" => "", "add_field_attribs" => [], "center" => false, "label_align" => "end", "inline_add_field_html" => false, "icon_label" => false],             // line 890
($context["options"] ?? null));
            // line 891
            yield "
   ";
            // line 892
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 892)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 893
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-2", "input_class" => "col-10"],                 // line 896
($context["options"] ?? null));
                // line 897
                yield "   ";
            }
            // line 898
            yield "
   ";
            // line 899
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 899)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 900
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_class" => "col-12 glpi-full-width"]);
                // line 903
                yield "   ";
            }
            // line 904
            yield "
   ";
            // line 905
            $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-xxl-5", "input_class" => "col-xxl-7"],             // line 908
($context["options"] ?? null));
            // line 909
            yield "
   ";
            // line 910
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 910)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 911
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 912
($context["options"] ?? null), "label_class", [], "any", false, false, false, 912) . " text-xxl-") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_align", [], "any", false, false, false, 912))]);
                // line 914
                yield "   ";
            }
            // line 915
            yield "
   ";
            // line 916
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 916))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 917
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 917)]);
                // line 918
                yield "   ";
            } else {
                // line 919
                yield "      ";
                $context["extra_attribs"] = "";
                // line 920
                yield "   ";
            }
            // line 921
            yield "
   ";
            // line 923
            yield "   ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_id", [], "any", false, false, false, 923))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 924
                yield "      ";
                $context["container_id"] = ("id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_id", [], "any", false, false, false, 924));
                // line 925
                yield "   ";
            } else {
                // line 926
                yield "      ";
                $context["container_id"] = "";
                // line 927
                yield "   ";
            }
            // line 928
            yield "
   <div class=\"form-field row align-items-center ";
            // line 929
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 929), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 929), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 929), "html", null, true);
            yield "\" ";
            yield ($context["extra_attribs"] ?? null);
            yield ">
      ";
            // line 930
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 930)->unwrap();
            // line 931
            yield "      ";
            yield $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 931, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ((("col-form-label " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 931)) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_label_class", [], "any", false, false, false, 931))]);
            yield "
      ";
            // line 932
            $context["flex_class"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 932)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex align-items-center") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inline_add_field_html", [], "any", false, false, false, 932)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : (""))));
            // line 933
            yield "      <div ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 933), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["flex_class"] ?? null), "html", null, true);
            yield " field-container\">
         ";
            // line 934
            yield ($context["field"] ?? null);
            yield "
         ";
            // line 935
            yield ($context["add_field_html"] ?? null);
            yield "
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 941
    public function macro_verticalField($label = null, $field = null, $id = null, $add_field_html = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "field" => $field,
            "id" => $id,
            "add_field_html" => $add_field_html,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 942
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => [], "insert_content_after_label" => "", "label_class" => "", "input_class" => ""],             // line 951
($context["options"] ?? null));
            // line 952
            yield "
   ";
            // line 953
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 953)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 954
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 957
                yield "   ";
            }
            // line 958
            yield "
   ";
            // line 959
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 959))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 960
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 960)]);
                // line 961
                yield "   ";
            } else {
                // line 962
                yield "      ";
                $context["extra_attribs"] = "";
                // line 963
                yield "   ";
            }
            // line 964
            yield "
   <div class=\"form-field ";
            // line 965
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 965), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 965), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 965), "html", null, true);
            yield "\" ";
            yield ($context["extra_attribs"] ?? null);
            yield ">
      ";
            // line 966
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 966)->unwrap();
            // line 967
            yield "      <div class=\"d-flex align-items-center\">
         ";
            // line 968
            yield $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 968, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 968))]);
            yield "
         ";
            // line 969
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "insert_content_after_label", [], "any", false, false, false, 969);
            yield "
      </div>
      <div class=\"";
            // line 971
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 971), "html", null, true);
            yield " field-container\">
         ";
            // line 972
            yield ($context["field"] ?? null);
            yield "
      </div>
      ";
            // line 974
            yield ($context["add_field_html"] ?? null);
            yield "
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 978
    public function macro_label($label = null, $id = null, $options = [], $class = "form-label", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "id" => $id,
            "options" => $options,
            "class" => $class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 979
            yield "    ";
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 979)->unwrap();
            // line 980
            yield "    ";
            yield $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 980, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ($context["class"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 983
    public function macro_codeField($name = null, $value = null, $label = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 984
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["single_line" => false, "language" => "twig", "completions" => [], "helper" => Twig\Extension\CoreExtension::sprintf(__("This field accepts %s content. Press Ctrl+Space to trigger autocompletion."), "Twig")],             // line 989
($context["options"] ?? null));
            // line 990
            yield "
    ";
            // line 991
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 991))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 992
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["helper" => Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source,                 // line 993
($context["options"] ?? null), "helper", [], "any", false, false, false, 993), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "language", [], "any", false, false, false, 993))]);
                // line 995
                yield "    ";
            }
            // line 996
            yield "
    ";
            // line 997
            $context["code_container_id"] = ((($context["name"] ?? null) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
            // line 998
            yield "    ";
            $context["code_container"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 999
                yield "        <div id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "html", null, true);
                yield "\" class=\"form-control overflow-hidden text-start\" style=\"height: ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "single_line", [], "any", false, false, false, 999)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("36px") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "height", [], "any", true, true, false, 999)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "height", [], "any", false, false, false, 999), "auto")) : ("auto")), "html", null, true)));
                yield ";\"></div>
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1001
            yield "    ";
            yield $this->getTemplateForMacro("macro_htmlField", $context, 1001, $this->getSourceContext())->macro_htmlField(...[($context["name"] ?? null), ($context["code_container"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(["wrapper_class" => "d-flex flex-grow-1"],             // line 1003
($context["options"] ?? null))]);
            yield "
    <script>
        \$(() => {
            const editor_options = ";
            // line 1006
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "single_line", [], "any", false, false, false, 1006)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield " ? window.GLPI.Monaco.getSingleLineEditorOptions() : {};
            window.GLPI.Monaco.createEditor('";
            // line 1007
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "language", [], "any", false, false, false, 1007), "html", null, true);
            yield "', \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "js"), "html", null, true);
            yield "\", ";
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "completions", [], "any", false, false, false, 1007));
            yield ", editor_options).then(() => {
                \$('#";
            // line 1008
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "html", null, true);
            yield "').closest('form').on('formdata', (e) => {
                    const editors = window.monaco.editor.getEditors().filter((editor) => {
                        return editor._domElement.id === '";
            // line 1010
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "html", null, true);
            yield "';
                    });
                    if (editors.length) {
                        e.originalEvent.formData.delete('";
            // line 1013
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "');
                        e.originalEvent.formData.append('";
            // line 1014
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "', editors[0].getValue());
                    }
                });
            });
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 1022
    public function macro_illustrationField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 1023
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["extra_css_classes" => "", "backdrop" => true],             // line 1026
($context["options"] ?? null));
            // line 1027
            yield "    ";
            $context["custom_icon_prefix"] = Twig\Extension\CoreExtension::constant("Glpi\\UI\\IllustrationManager::CUSTOM_ILLUSTRATION_PREFIX");
            // line 1030
            yield "    ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 1031
                yield "        ";
                $context["container_id"] = ("container-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
                // line 1032
                yield "
        <div id=\"";
                // line 1033
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
                yield "\">
            <input
                name=\"";
                // line 1035
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\"
                type=\"hidden\"
                value=\"";
                // line 1037
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\"
                data-glpi-icon-picker-value
            >

            ";
                // line 1042
                yield "            ";
                $context["modal_id"] = ("illustration-modal-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
                // line 1043
                yield "            <div
                class=\"illustration-selector d-flex align-items-center card border-1 ";
                // line 1044
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extra_css_classes", [], "any", false, false, false, 1044), "html", null, true);
                yield "\"
                role=\"button\"
                aria-label=\"";
                // line 1046
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select an illustration"), "html", null, true);
                yield "\"
                data-bs-toggle=\"modal\"
                data-bs-target=\"#";
                // line 1048
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_id"] ?? null), "html", null, true);
                yield "\"
                data-glpi-icon-picker-value-preview
            >
                <div class=\"card-body aspect-ratio-1\">
                    ";
                // line 1052
                $context["is_custom_file"] = (is_string($_v12 = ($context["value"] ?? null)) && is_string($_v13 = ($context["custom_icon_prefix"] ?? null)) && str_starts_with($_v12, $_v13));
                // line 1053
                yield "                    <div
                        ";
                // line 1054
                if ((($tmp = ($context["is_custom_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1055
                    yield "                            data-glpi-icon-picker-value-preview-custom
                        ";
                } else {
                    // line 1057
                    yield "                            data-glpi-icon-picker-value-preview-native
                        ";
                }
                // line 1059
                yield "                    >
                        ";
                // line 1060
                yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration(($context["value"] ?? null), 100);
                yield "
                    </div>

                    ";
                // line 1066
                yield "                    ";
                if ((($tmp = ($context["is_custom_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1067
                    yield "                        <div
                            class=\"d-none\"
                            data-glpi-icon-picker-value-preview-native
                        >
                           ";
                    // line 1071
                    yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration("", 100);
                    yield "
                        </div>
                    ";
                } else {
                    // line 1074
                    yield "                        <div
                            class=\"d-none\"
                            data-glpi-icon-picker-value-preview-custom
                        >
                           ";
                    // line 1078
                    yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration(($context["custom_icon_prefix"] ?? null), 100);
                    yield "
                        </div>
                    ";
                }
                // line 1081
                yield "                </div>
            </div>

            ";
                // line 1085
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/illustration/icon_picker_modal.html.twig", ["id" =>                 // line 1086
($context["modal_id"] ?? null), "backdrop" => CoreExtension::getAttribute($this->env, $this->source,                 // line 1087
($context["options"] ?? null), "backdrop", [], "any", false, false, false, 1087)], false);
                // line 1088
                yield "

            ";
                // line 1091
                yield "            <script defer type=\"module\">
                (async () => {
                    const module = await import(
                        \"/js/modules/IllustrationPicker/Controller.js\"
                    );
                    new module.GlpiIllustrationPickerController(
                        document.getElementById('";
                // line 1097
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
                yield "'),
                        document.getElementById('";
                // line 1098
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_id"] ?? null), "html", null, true);
                yield "'),
                        \"";
                // line 1099
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["custom_icon_prefix"] ?? null), "html", null, true);
                yield "\",
                    );
                })();
            </script>
        </div>
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1105
            yield "
    ";
            // line 1106
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 1108
($context["options"] ?? null));
            // line 1109
            yield "    ";
            yield $this->getTemplateForMacro("macro_field", $context, 1109, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/fields_macros.html.twig";
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
        return array (  3133 => 1109,  3131 => 1108,  3130 => 1106,  3127 => 1105,  3117 => 1099,  3113 => 1098,  3109 => 1097,  3101 => 1091,  3097 => 1088,  3095 => 1087,  3094 => 1086,  3092 => 1085,  3087 => 1081,  3081 => 1078,  3075 => 1074,  3069 => 1071,  3063 => 1067,  3060 => 1066,  3054 => 1060,  3051 => 1059,  3047 => 1057,  3043 => 1055,  3041 => 1054,  3038 => 1053,  3036 => 1052,  3029 => 1048,  3024 => 1046,  3019 => 1044,  3016 => 1043,  3013 => 1042,  3006 => 1037,  3001 => 1035,  2996 => 1033,  2993 => 1032,  2990 => 1031,  2987 => 1030,  2984 => 1027,  2982 => 1026,  2980 => 1023,  2965 => 1022,  2952 => 1014,  2948 => 1013,  2942 => 1010,  2937 => 1008,  2927 => 1007,  2923 => 1006,  2917 => 1003,  2915 => 1001,  2906 => 999,  2903 => 998,  2901 => 997,  2898 => 996,  2895 => 995,  2893 => 993,  2891 => 992,  2889 => 991,  2886 => 990,  2884 => 989,  2882 => 984,  2867 => 983,  2858 => 980,  2855 => 979,  2840 => 978,  2831 => 974,  2826 => 972,  2822 => 971,  2817 => 969,  2813 => 968,  2810 => 967,  2808 => 966,  2798 => 965,  2795 => 964,  2792 => 963,  2789 => 962,  2786 => 961,  2783 => 960,  2781 => 959,  2778 => 958,  2775 => 957,  2772 => 954,  2770 => 953,  2767 => 952,  2765 => 951,  2763 => 942,  2747 => 941,  2737 => 935,  2733 => 934,  2724 => 933,  2722 => 932,  2717 => 931,  2715 => 930,  2705 => 929,  2702 => 928,  2699 => 927,  2696 => 926,  2693 => 925,  2690 => 924,  2687 => 923,  2684 => 921,  2681 => 920,  2678 => 919,  2675 => 918,  2672 => 917,  2670 => 916,  2667 => 915,  2664 => 914,  2662 => 912,  2660 => 911,  2658 => 910,  2655 => 909,  2653 => 908,  2652 => 905,  2649 => 904,  2646 => 903,  2643 => 900,  2641 => 899,  2638 => 898,  2635 => 897,  2633 => 896,  2631 => 893,  2629 => 892,  2626 => 891,  2624 => 890,  2622 => 877,  2606 => 876,  2597 => 871,  2593 => 870,  2583 => 869,  2580 => 868,  2577 => 867,  2574 => 866,  2571 => 865,  2568 => 864,  2566 => 863,  2563 => 862,  2560 => 861,  2557 => 860,  2554 => 859,  2551 => 858,  2549 => 857,  2546 => 856,  2544 => 855,  2542 => 849,  2527 => 848,  2517 => 843,  2511 => 841,  2509 => 840,  2506 => 839,  2503 => 838,  2491 => 837,  2482 => 834,  2477 => 832,  2471 => 830,  2469 => 829,  2464 => 828,  2461 => 827,  2446 => 826,  2439 => 823,  2436 => 822,  2430 => 820,  2424 => 818,  2422 => 817,  2417 => 816,  2414 => 815,  2412 => 814,  2409 => 813,  2406 => 812,  2403 => 811,  2400 => 810,  2394 => 808,  2392 => 807,  2389 => 806,  2386 => 805,  2383 => 804,  2381 => 803,  2378 => 802,  2375 => 801,  2372 => 800,  2369 => 799,  2366 => 798,  2364 => 797,  2361 => 796,  2359 => 795,  2357 => 787,  2342 => 786,  2333 => 783,  2324 => 781,  2322 => 780,  2319 => 779,  2316 => 778,  2313 => 777,  2311 => 776,  2308 => 775,  2306 => 774,  2304 => 772,  2301 => 771,  2298 => 770,  2295 => 769,  2280 => 768,  2270 => 764,  2268 => 763,  2265 => 762,  2258 => 760,  2255 => 759,  2252 => 758,  2250 => 756,  2249 => 755,  2246 => 754,  2243 => 753,  2240 => 752,  2238 => 751,  2235 => 750,  2232 => 749,  2229 => 748,  2227 => 747,  2224 => 746,  2221 => 745,  2218 => 744,  2215 => 743,  2213 => 742,  2211 => 739,  2208 => 738,  2205 => 737,  2199 => 734,  2196 => 733,  2194 => 732,  2191 => 731,  2175 => 730,  2165 => 726,  2163 => 725,  2160 => 724,  2154 => 722,  2153 => 721,  2152 => 720,  2150 => 719,  2148 => 718,  2145 => 717,  2142 => 716,  2139 => 715,  2137 => 714,  2134 => 713,  2131 => 712,  2128 => 711,  2126 => 710,  2123 => 709,  2120 => 708,  2117 => 707,  2114 => 706,  2112 => 705,  2110 => 701,  2107 => 700,  2104 => 699,  2098 => 696,  2095 => 695,  2093 => 694,  2090 => 693,  2074 => 692,  2066 => 689,  2063 => 688,  2059 => 687,  2057 => 686,  2056 => 685,  2054 => 683,  2052 => 682,  2049 => 681,  2046 => 680,  2043 => 679,  2041 => 678,  2038 => 677,  2035 => 676,  2032 => 675,  2030 => 674,  2027 => 673,  2024 => 672,  2021 => 671,  2018 => 670,  2016 => 669,  2014 => 666,  1999 => 665,  1991 => 662,  1988 => 661,  1984 => 660,  1982 => 659,  1981 => 658,  1979 => 657,  1977 => 656,  1974 => 655,  1971 => 654,  1968 => 653,  1966 => 652,  1963 => 651,  1960 => 650,  1957 => 649,  1955 => 648,  1952 => 647,  1949 => 646,  1946 => 645,  1943 => 644,  1941 => 643,  1939 => 639,  1924 => 638,  1912 => 631,  1906 => 628,  1903 => 627,  1900 => 626,  1898 => 625,  1896 => 622,  1894 => 620,  1879 => 619,  1871 => 616,  1868 => 615,  1864 => 614,  1861 => 613,  1859 => 612,  1856 => 611,  1853 => 610,  1850 => 609,  1848 => 608,  1845 => 607,  1842 => 606,  1839 => 605,  1837 => 604,  1834 => 603,  1831 => 602,  1828 => 601,  1825 => 600,  1823 => 599,  1821 => 596,  1806 => 595,  1797 => 592,  1793 => 591,  1790 => 590,  1788 => 589,  1785 => 588,  1782 => 587,  1779 => 586,  1777 => 585,  1774 => 584,  1772 => 583,  1770 => 581,  1756 => 580,  1748 => 577,  1745 => 576,  1741 => 575,  1739 => 574,  1738 => 573,  1737 => 572,  1735 => 571,  1733 => 570,  1730 => 569,  1728 => 568,  1725 => 567,  1722 => 566,  1719 => 565,  1717 => 564,  1714 => 563,  1711 => 562,  1708 => 561,  1706 => 560,  1703 => 559,  1700 => 558,  1697 => 557,  1694 => 556,  1692 => 555,  1690 => 551,  1675 => 550,  1667 => 547,  1664 => 546,  1660 => 545,  1657 => 544,  1655 => 543,  1652 => 542,  1649 => 541,  1646 => 540,  1644 => 539,  1641 => 538,  1638 => 537,  1635 => 536,  1633 => 535,  1630 => 534,  1627 => 533,  1624 => 532,  1621 => 531,  1619 => 530,  1617 => 526,  1602 => 525,  1594 => 522,  1591 => 521,  1587 => 520,  1585 => 519,  1584 => 518,  1582 => 517,  1580 => 516,  1577 => 515,  1574 => 514,  1571 => 513,  1569 => 512,  1566 => 511,  1563 => 510,  1560 => 509,  1558 => 508,  1555 => 507,  1552 => 506,  1549 => 505,  1546 => 504,  1544 => 503,  1542 => 499,  1527 => 498,  1519 => 495,  1516 => 494,  1512 => 493,  1510 => 492,  1509 => 491,  1508 => 490,  1506 => 489,  1504 => 488,  1501 => 487,  1498 => 486,  1495 => 485,  1493 => 484,  1490 => 483,  1487 => 482,  1484 => 481,  1482 => 480,  1479 => 479,  1476 => 478,  1473 => 477,  1471 => 476,  1468 => 475,  1466 => 474,  1464 => 470,  1448 => 469,  1440 => 466,  1437 => 465,  1433 => 464,  1431 => 463,  1430 => 462,  1429 => 461,  1427 => 460,  1425 => 459,  1422 => 458,  1419 => 457,  1416 => 456,  1413 => 455,  1410 => 454,  1407 => 453,  1405 => 452,  1402 => 451,  1399 => 450,  1396 => 449,  1394 => 448,  1391 => 447,  1389 => 446,  1387 => 442,  1372 => 441,  1363 => 438,  1360 => 437,  1357 => 436,  1354 => 435,  1352 => 429,  1349 => 428,  1335 => 427,  1328 => 424,  1326 => 421,  1321 => 420,  1318 => 419,  1316 => 418,  1313 => 417,  1310 => 416,  1307 => 415,  1305 => 414,  1302 => 413,  1297 => 411,  1295 => 408,  1292 => 407,  1284 => 404,  1282 => 402,  1281 => 399,  1278 => 398,  1274 => 397,  1268 => 394,  1265 => 393,  1262 => 392,  1247 => 391,  1238 => 388,  1235 => 387,  1232 => 386,  1229 => 385,  1224 => 383,  1217 => 379,  1212 => 378,  1199 => 369,  1197 => 368,  1193 => 367,  1190 => 366,  1186 => 364,  1184 => 363,  1177 => 362,  1169 => 360,  1166 => 359,  1163 => 358,  1160 => 357,  1158 => 356,  1155 => 355,  1152 => 354,  1136 => 353,  1127 => 350,  1120 => 348,  1117 => 347,  1114 => 346,  1112 => 345,  1110 => 341,  1095 => 340,  1087 => 337,  1084 => 336,  1077 => 334,  1074 => 333,  1072 => 332,  1069 => 331,  1067 => 330,  1065 => 328,  1050 => 327,  1042 => 323,  1039 => 322,  1036 => 321,  1033 => 320,  1020 => 318,  1017 => 317,  1014 => 316,  1011 => 314,  1004 => 312,  1001 => 311,  999 => 310,  996 => 309,  994 => 308,  993 => 307,  992 => 306,  991 => 305,  989 => 303,  974 => 302,  966 => 298,  963 => 297,  956 => 295,  953 => 294,  951 => 293,  948 => 292,  946 => 291,  944 => 289,  929 => 288,  921 => 284,  918 => 283,  911 => 281,  908 => 280,  905 => 279,  890 => 278,  882 => 274,  879 => 273,  872 => 271,  869 => 270,  866 => 269,  851 => 268,  843 => 264,  840 => 263,  837 => 262,  834 => 261,  831 => 260,  828 => 259,  825 => 258,  823 => 257,  820 => 256,  817 => 255,  813 => 254,  811 => 252,  810 => 251,  809 => 249,  808 => 248,  806 => 247,  803 => 246,  800 => 245,  796 => 244,  794 => 242,  793 => 241,  792 => 239,  790 => 238,  787 => 237,  784 => 236,  782 => 235,  779 => 234,  772 => 232,  769 => 231,  767 => 230,  764 => 229,  761 => 228,  758 => 227,  756 => 226,  754 => 225,  751 => 224,  749 => 223,  748 => 215,  746 => 209,  731 => 208,  722 => 204,  717 => 202,  711 => 200,  707 => 198,  705 => 197,  700 => 196,  697 => 195,  694 => 194,  679 => 193,  671 => 189,  668 => 188,  661 => 186,  658 => 185,  656 => 184,  653 => 183,  651 => 182,  649 => 180,  634 => 179,  626 => 175,  623 => 174,  618 => 172,  612 => 170,  610 => 169,  607 => 168,  596 => 167,  592 => 166,  588 => 165,  584 => 164,  580 => 163,  576 => 162,  570 => 161,  564 => 160,  561 => 159,  559 => 158,  556 => 157,  554 => 156,  552 => 148,  549 => 147,  546 => 146,  543 => 145,  540 => 144,  538 => 143,  536 => 141,  533 => 140,  518 => 139,  510 => 135,  507 => 134,  500 => 132,  497 => 131,  495 => 130,  492 => 129,  490 => 128,  488 => 125,  473 => 124,  465 => 121,  462 => 120,  457 => 118,  454 => 116,  451 => 115,  449 => 114,  446 => 113,  444 => 112,  442 => 110,  427 => 109,  419 => 106,  416 => 105,  409 => 103,  406 => 102,  404 => 101,  401 => 100,  399 => 99,  397 => 97,  382 => 96,  374 => 92,  371 => 91,  368 => 90,  365 => 89,  362 => 88,  359 => 87,  356 => 86,  353 => 85,  351 => 83,  349 => 82,  345 => 81,  342 => 80,  326 => 79,  317 => 74,  312 => 72,  309 => 71,  307 => 70,  302 => 69,  296 => 66,  293 => 65,  291 => 64,  287 => 63,  283 => 62,  279 => 61,  276 => 60,  273 => 59,  270 => 58,  255 => 57,  246 => 52,  241 => 50,  238 => 49,  236 => 48,  231 => 47,  225 => 44,  222 => 43,  220 => 42,  216 => 41,  211 => 39,  208 => 38,  205 => 37,  202 => 36,  199 => 35,  196 => 34,  181 => 33,  175 => 1021,  172 => 982,  169 => 977,  165 => 939,  161 => 874,  157 => 846,  154 => 836,  151 => 825,  148 => 785,  145 => 767,  142 => 729,  139 => 691,  136 => 664,  133 => 637,  130 => 618,  127 => 594,  124 => 579,  121 => 549,  118 => 524,  115 => 497,  112 => 468,  109 => 440,  106 => 426,  103 => 390,  100 => 352,  97 => 339,  93 => 325,  89 => 300,  85 => 286,  81 => 276,  77 => 266,  73 => 206,  69 => 191,  65 => 177,  61 => 137,  58 => 123,  55 => 108,  51 => 94,  48 => 78,  45 => 56,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/fields_macros.html.twig", "/var/www/glpi/templates/components/form/fields_macros.html.twig");
    }
}
