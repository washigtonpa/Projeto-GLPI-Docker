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

/* pages/setup/general/systeminfo_table.html.twig */
class __TwigTemplate_36e8bc13b47227d5b1d1a81da2e0304d extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 36, $this->getSourceContext())->macro_largeTitle(...[__("Information about system installation and configuration"), "ti ti-file-info"]);
        yield "
";
        // line 37
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 37, $this->getSourceContext())->macro_htmlField(...["", $macros["inputs"]->getTemplateForMacro("macro_button", $context, 37, $this->getSourceContext())->macro_button(...["copy-sysinfo", __("Copy system information"), "button", 1, ["icon" => "ti ti-copy", "additional_attributes" => ["onclick" => "copyTextToClipboard(tableToDetails('#sysinfo_accordion'));flashIconButton(this, 'btn btn-success', 'ti ti-check', 1500);"]]]), "", ["no_label" => true]]);
        // line 44
        yield "

";
        // line 58
        yield "
";
        // line 59
        $context["glpi_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 60
            yield "GLPI: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ver"] ?? null), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc"), "html", null, true);
            yield " => ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_ROOT"), "html", null, true);
            yield ")
Installation mode: ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_INSTALL_MODE"), "html", null, true);
            yield "
Current language: ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["language"] ?? null), "html", null, true);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "
";
        // line 65
        $context["setup_init_keys"] = ["max_execution_time", "memory_limit", "post_max_size", "safe_mode", "session.save_handler", "upload_max_filesize", "disable_functions"];
        // line 66
        $context["server_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 67
            yield "Operating system: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("php_uname"), "html", null, true);
            yield "

PHP: ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("phpversion"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("php_sapi_name"), "html", null, true);
            yield "

PHP extensions: ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("get_loaded_extensions"), ", "), "html", null, true);
            yield "

Setup: ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["setup_init_keys"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("ini_get", [$context["k"]]), "html", null, true);
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['k'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "

Web server: ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["_server"] ?? null), "SERVER_SOFTWARE", [], "array", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["_server"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["SERVER_SOFTWARE"] ?? null) : null), "")) : ("")), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["_server"] ?? null), "SERVER_SIGNATURE", [], "array", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["_server"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["SERVER_SIGNATURE"] ?? null) : null), "")) : ("")))), "html", null, true);
            yield ")

User agent: ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["_server"] ?? null), "HTTP_USER_AGENT", [], "array", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["_server"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["HTTP_USER_AGENT"] ?? null) : null), "")) : ("")), "html", null, true);
            yield "

Database:
";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["db_info"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 82
                yield "   ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("
" . $context["k"]), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                yield "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "
Requirements:";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["core_requirements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 87
                yield "
";
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/pics/") . (($_v3 = $context["requirement"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["status"] ?? null) : null)) . "_min.png"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((($_v4 = $context["requirement"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["messages"] ?? null) : null), " "), "html", null, true);
                yield "\"/>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((($_v5 = $context["requirement"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["messages"] ?? null) : null), "
"), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['requirement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        yield "
";
        // line 91
        $context["constants_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("get_defined_constants"), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["k"] ?? null)), "startsWith", ["GLPI_"], "method", false, false, false, 92); }));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("
" . $context["name"]), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode($context["value"], Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES")), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "
";
        // line 97
        $context["locale_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales_overrides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("
" . $context["file"]), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "
<div class=\"accordion\" id=\"sysinfo_accordion\">
   ";
        // line 104
        yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 104, $this->getSourceContext())->macro_sysinfo_section(...["GLPI information", ($context["glpi_info"] ?? null)]);
        yield "
   ";
        // line 105
        yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 105, $this->getSourceContext())->macro_sysinfo_section(...["Server", ($context["server_info"] ?? null), true]);
        yield "
   ";
        // line 106
        yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 106, $this->getSourceContext())->macro_sysinfo_section(...["GLPI constants", ($context["constants_info"] ?? null), true]);
        yield "
   ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["system_info_objs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["info_obj"]) {
            // line 108
            yield "      ";
            $context["info"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([$context["info_obj"], "getSystemInformation"]);
            // line 109
            yield "      ";
            if (( !Twig\Extension\CoreExtension::testEmpty((($_v6 = ($context["info"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["label"] ?? null) : null)) &&  !Twig\Extension\CoreExtension::testEmpty((($_v7 = ($context["info"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["content"] ?? null) : null)))) {
                // line 110
                yield "      ";
                yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 110, $this->getSourceContext())->macro_sysinfo_section(...[(($_v8 = ($context["info"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["label"] ?? null) : null), (($_v9 = ($context["info"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["content"] ?? null) : null)]);
                yield "
      ";
            }
            // line 112
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['info_obj'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "   ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["locales_overrides"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 114
            yield "      ";
            yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 114, $this->getSourceContext())->macro_sysinfo_section(...["Locales overrides", ($context["locale_info"] ?? null)]);
            yield "
   ";
        }
        // line 116
        yield "</div>

<script>
   \$(() => {
       // Search all .section-content text content and Replace all instances of a '#' followed by a number so that there is a zero-width space between the # and the number
       \$('.section-content').each(function() {
           \$(this).html(\$(this).html().replace(/#(\\d+)/g, '#\\u200B\$1'));
       });
   });
</script>
";
        yield from [];
    }

    // line 46
    public function macro_sysinfo_section($label = null, $content = null, $raw = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "content" => $content,
            "raw" => $raw,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 47
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 48
            yield "   ";
            $context["cleaned_content"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::trim(($context["content"] ?? null))), "wordwrap", [128], "method", false, false, false, 48);
            // line 49
            yield "   <div class=\"accordion-item\">
      <div class=\"accordion-header section-header\" id=\"sysinfo_header_";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">
         <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sysinfo_section_";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "</button>
      </div>
      <div id=\"sysinfo_section_";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"accordion-collapse collapse\" aria-labelledby=\"sysinfo_header_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" data-bs-parent=\"#sysinfo_accordion\">
         <pre class=\"section-content\">";
            // line 54
            yield (((($tmp = ($context["raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["cleaned_content"] ?? null)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cleaned_content"] ?? null))));
            yield "</pre>
      </div>
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
        return "pages/setup/general/systeminfo_table.html.twig";
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
        return array (  319 => 54,  313 => 53,  306 => 51,  302 => 50,  299 => 49,  296 => 48,  293 => 47,  279 => 46,  264 => 116,  258 => 114,  255 => 113,  249 => 112,  243 => 110,  240 => 109,  237 => 108,  233 => 107,  229 => 106,  225 => 105,  221 => 104,  217 => 102,  208 => 99,  204 => 98,  202 => 97,  199 => 96,  188 => 93,  184 => 92,  182 => 91,  179 => 90,  163 => 87,  159 => 86,  156 => 84,  144 => 82,  140 => 81,  134 => 78,  127 => 76,  123 => 74,  111 => 73,  106 => 71,  99 => 69,  93 => 67,  91 => 66,  89 => 65,  86 => 64,  80 => 62,  76 => 61,  67 => 60,  65 => 59,  62 => 58,  58 => 44,  56 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/systeminfo_table.html.twig", "/var/www/glpi/templates/pages/setup/general/systeminfo_table.html.twig");
    }
}
