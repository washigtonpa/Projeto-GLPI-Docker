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

/* components/pager.html.twig */
class __TwigTemplate_a2b1a66d0f9a6c25228b1cc1f79a634b extends Template
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
        if ((($tmp =  !array_key_exists("additional_params", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    ";
            $context["additional_params"] = "";
        } else {
            // line 36
            yield "    ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["additional_params"] ?? null)) > 0) &&  !(is_string($_v0 = ($context["additional_params"] ?? null)) && is_string($_v1 = "&") && str_starts_with($_v0, $_v1)))) {
                // line 37
                yield "        ";
                $context["additional_params"] = ("&" . ($context["additional_params"] ?? null));
                // line 38
                yield "    ";
            }
        }
        // line 40
        yield "
";
        // line 41
        $context["href"] = ((array_key_exists("href", $context)) ? (Twig\Extension\CoreExtension::default(($context["href"] ?? null), "")) : (""));
        // line 42
        yield "
";
        // line 44
        $context["start"] = ((array_key_exists("start", $context)) ? (Twig\Extension\CoreExtension::default(($context["start"] ?? null), 0)) : (0));
        // line 45
        yield "
";
        // line 46
        $context["href_separator"] = ((CoreExtension::inFilter("?", ($context["href"] ?? null))) ? ("&") : ("?"));
        // line 47
        $context["href"] = (((($context["href"] ?? null) . ($context["href_separator"] ?? null)) . "start=%start%") . ($context["additional_params"] ?? null));
        // line 48
        if ((array_key_exists("is_tab", $context) && (($context["is_tab"] ?? null) == true))) {
            // line 49
            yield "   ";
            $context["href"] = (("javascript:reloadTab('start=%start%" . ($context["additional_params"] ?? null)) . "');");
        }
        // line 51
        if ((($tmp =  !array_key_exists("limit", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "    ";
            $context["limit"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit");
        }
        // line 54
        yield "
";
        // line 55
        $context["forward"] = (($context["start"] ?? null) + ($context["limit"] ?? null));
        // line 56
        $context["end"] = (($context["count"] ?? null) - ($context["limit"] ?? null));
        // line 57
        $context["current_start"] = (($context["start"] ?? null) + 1);
        // line 58
        $context["current_end"] = ((($context["current_start"] ?? null) + ($context["limit"] ?? null)) - 1);
        // line 59
        if ((($context["current_end"] ?? null) > ($context["count"] ?? null))) {
            // line 60
            yield "    ";
            $context["current_end"] = ($context["count"] ?? null);
        }
        // line 62
        yield "
";
        // line 63
        $context["back"] = (($context["start"] ?? null) - ($context["limit"] ?? null));
        // line 64
        if (((($context["current_start"] ?? null) - ($context["limit"] ?? null)) <= 0)) {
            // line 65
            yield "   ";
            $context["back"] = 0;
        }
        // line 67
        yield "
";
        // line 68
        $context["nb_pages"] = Twig\Extension\CoreExtension::round((($context["count"] ?? null) / ($context["limit"] ?? null)), 0, "ceil");
        // line 69
        $context["current_page"] = (Twig\Extension\CoreExtension::round(((($context["current_start"] ?? null) - 1) / ($context["limit"] ?? null)), 0, "ceil") + 1);
        // line 70
        yield "
";
        // line 71
        $context["short_display"] = ((array_key_exists("short_display", $context)) ? (Twig\Extension\CoreExtension::default(($context["short_display"] ?? null), false)) : (false));
        // line 72
        $context["no_limit_display"] = ((array_key_exists("no_limit_display", $context)) ? (Twig\Extension\CoreExtension::default(($context["no_limit_display"] ?? null), false)) : (false));
        // line 73
        yield "
";
        // line 75
        $context["adjacents"] = 2;
        // line 76
        $context["skip_adjacents"] = false;
        // line 77
        $context["rand"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 78
        yield "
<div class=\"flex-grow-1 d-flex flex-wrap flex-md-nowrap  align-items-center justify-content-between mb-2 search-pager\">
    ";
        // line 80
        if ((($tmp =  !($context["no_limit_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "        ";
            if ((($tmp =  !($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "            <span class=\"search-limit d-none d-md-block\">
                ";
                // line 83
                yield from $this->load("components/dropdown/limit.html.twig", 83)->unwrap()->yield(CoreExtension::merge($context, ["no_onchange" => ((                // line 84
array_key_exists("fluid_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["fluid_search"] ?? null), false)) : (false)), "select_class" => "search-limit-dropdown", "href" => Twig\Extension\CoreExtension::replace(                // line 86
($context["href"] ?? null), ["%start%" => ($context["start"] ?? null)]), "additional_attributes" => (((($tmp =                 // line 87
($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["title" => __("Rows per page")]) : (["aria-labelledby" => (("list_limit" .                 // line 90
($context["rand"] ?? null)) . "_label")])), "rand" =>                 // line 92
($context["rand"] ?? null)]));
                // line 94
                yield "                <span id=\"list_limit";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "_label\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("rows / page"), "html", null, true);
                yield "</span>
            </span>
        ";
            }
            // line 97
            yield "        <span class=\"search-limit ";
            yield (((($tmp = ($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-block d-md-none"));
            yield "\">
            ";
            // line 98
            yield from $this->load("components/dropdown/limit.html.twig", 98)->unwrap()->yield(CoreExtension::merge($context, ["no_onchange" => ((            // line 99
array_key_exists("fluid_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["fluid_search"] ?? null), false)) : (false)), "select_class" => "search-limit-dropdown", "href" => Twig\Extension\CoreExtension::replace(            // line 101
($context["href"] ?? null), ["%start%" => ($context["start"] ?? null)])]));
            // line 103
            yield "        </span>
    ";
        }
        // line 105
        yield "
    ";
        // line 106
        if ((($tmp =  !($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "        <p class=\"m-0 text-muted d-none d-md-block page-infos\">
            ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Showing %s to %s of %s rows"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
            yield "
        </p>

        <p class=\"m-0 text-muted d-block d-md-none text-nowrap ms-2 page-infos\">
            ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%s-%s/%s"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
            yield "
        </p>
    ";
        }
        // line 115
        yield "
    <ul class=\"pagination m-0 mt-sm-2 mt-md-0 align-items-center ";
        // line 116
        yield (((($tmp = ($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("mx-2") : (""));
        yield "\">
        ";
        // line 117
        if ((($context["nb_pages"] ?? null) > 1)) {
            // line 118
            yield "            ";
            $context["is_first_page"] = (($context["start"] ?? null) == 0);
            // line 119
            yield "            ";
            $context["is_last_page"] = (($context["forward"] ?? null) >= ($context["count"] ?? null));
            // line 120
            yield "
            <li class=\"page-item ";
            // line 121
            if ((($tmp = ($context["is_first_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link d-flex page-link-start\" href=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => 0]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start"), "html", null, true);
            yield "\" data-start=\"0\" ";
            if ((($tmp = ($context["is_first_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevrons-left\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 126
            if ((($tmp = ($context["is_first_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link d-flex page-link-prev\" href=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["back"] ?? null)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous"), "html", null, true);
            yield "\" data-start=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["back"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp = ($context["is_first_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevron-left\"></i>
                </a>
            </li>


            ";
            // line 133
            if ((($tmp = ($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 134
                yield "                <li class=\"text-muted mx-2 my-0\">
                    <span class=\"page-link\">
                        ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%s-%s of %s"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
                yield "
                    </span>
                </li>
            ";
            } else {
                // line 140
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["nb_pages"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 141
                    yield "                    ";
                    if ((((($context["current_page"] ?? null) - ($context["adjacents"] ?? null)) <= $context["page"]) && ((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) >= $context["page"]))) {
                        // line 142
                        yield "                        ";
                        $context["page_start"] = (($context["page"] - 1) * ($context["limit"] ?? null));
                        // line 143
                        yield "                        <li class=\"d-none d-sm-block page-item ";
                        if (($context["page"] == ($context["current_page"] ?? null))) {
                            yield "active selected";
                        }
                        yield "\">
                            <a class=\"page-link page-link-num\" href=\"";
                        // line 144
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["page_start"] ?? null)]), "html", null, true);
                        yield "\" data-start=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_start"] ?? null), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                        </li>
                        ";
                        // line 146
                        if (((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) == $context["page"])) {
                            // line 147
                            yield "                        ";
                            $context["skip_adjacents"] = false;
                            // line 148
                            yield "                        ";
                        }
                        // line 149
                        yield "                    ";
                    } elseif ((($context["skip_adjacents"] ?? null) == false)) {
                        // line 150
                        yield "                        ";
                        $context["skip_adjacents"] = true;
                        // line 151
                        yield "                        <li class=\"d-none d-sm-block page-item disabled\">
                            <a class=\"page-link\" href=\"#\" aria-disabled=\"true\">...</a>
                        </li>
                    ";
                    }
                    // line 155
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                yield "            ";
            }
            // line 157
            yield "
            <li class=\"page-item ";
            // line 158
            if ((($tmp = ($context["is_last_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link d-flex page-link-next\" href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["forward"] ?? null)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next"), "html", null, true);
            yield "\" data-start=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["forward"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp = ($context["is_last_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevron-right\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 163
            if ((($tmp = ($context["is_last_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link d-flex page-link-last\" href=\"";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["end"] ?? null)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("End"), "html", null, true);
            yield "\" data-start=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["end"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp = ($context["is_last_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevrons-right\"></i>
                </a>
            </li>
        ";
        }
        // line 169
        yield "    </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/pager.html.twig";
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
        return array (  378 => 169,  362 => 164,  356 => 163,  341 => 159,  335 => 158,  332 => 157,  329 => 156,  323 => 155,  317 => 151,  314 => 150,  311 => 149,  308 => 148,  305 => 147,  303 => 146,  294 => 144,  287 => 143,  284 => 142,  281 => 141,  276 => 140,  269 => 136,  265 => 134,  263 => 133,  246 => 127,  240 => 126,  227 => 122,  221 => 121,  218 => 120,  215 => 119,  212 => 118,  210 => 117,  206 => 116,  203 => 115,  197 => 112,  190 => 108,  187 => 107,  185 => 106,  182 => 105,  178 => 103,  176 => 101,  175 => 99,  174 => 98,  169 => 97,  160 => 94,  158 => 92,  157 => 90,  156 => 87,  155 => 86,  154 => 84,  153 => 83,  150 => 82,  147 => 81,  145 => 80,  141 => 78,  139 => 77,  137 => 76,  135 => 75,  132 => 73,  130 => 72,  128 => 71,  125 => 70,  123 => 69,  121 => 68,  118 => 67,  114 => 65,  112 => 64,  110 => 63,  107 => 62,  103 => 60,  101 => 59,  99 => 58,  97 => 57,  95 => 56,  93 => 55,  90 => 54,  86 => 52,  84 => 51,  80 => 49,  78 => 48,  76 => 47,  74 => 46,  71 => 45,  69 => 44,  66 => 42,  64 => 41,  61 => 40,  57 => 38,  54 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/pager.html.twig", "/var/www/glpi/templates/components/pager.html.twig");
    }
}
