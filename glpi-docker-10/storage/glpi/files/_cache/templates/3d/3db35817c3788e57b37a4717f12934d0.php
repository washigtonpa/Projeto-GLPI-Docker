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

/* components/messages_after_redirect_toasts.html.twig */
class __TwigTemplate_83a8898be8192d30d1e6383e50ec9c5f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["messages"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->pullMessages();
        // line 34
        yield "
";
        // line 35
        $context["toasts_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 36
            yield "    ";
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null))) {
                // line 37
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["type"] => $context["message"]) {
                    // line 38
                    yield "            ";
                    $context["message"] = Twig\Extension\CoreExtension::join($context["message"], "<br />");
                    // line 39
                    yield "            ";
                    $context["class"] = "";
                    // line 40
                    yield "            ";
                    $context["title"] = "";
                    // line 41
                    yield "            ";
                    if (($context["type"] == Twig\Extension\CoreExtension::constant("ERROR"))) {
                        // line 42
                        yield "                ";
                        $context["class"] = "bg-danger text-white";
                        // line 43
                        yield "                ";
                        $context["title"] = __("Error");
                        // line 44
                        yield "            ";
                    } elseif (($context["type"] == Twig\Extension\CoreExtension::constant("WARNING"))) {
                        // line 45
                        yield "                ";
                        $context["class"] = "bg-warning text-white";
                        // line 46
                        yield "                ";
                        $context["title"] = __("Warning");
                        // line 47
                        yield "            ";
                    } else {
                        // line 48
                        yield "                ";
                        $context["class"] = "bg-info text-white";
                        // line 49
                        yield "                ";
                        $context["title"] = _n("Information", "Information", 1);
                        // line 50
                        yield "            ";
                    }
                    // line 51
                    yield "
            <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"toast-header ";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
                    yield " \">
                    <strong class=\"me-auto\">";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                    yield "</strong>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
                <div class=\"toast-body\">
                    ";
                    // line 58
                    yield $context["message"];
                    yield "
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "
";
        // line 65
        if (($context["display_container"] ?? null)) {
            // line 66
            yield "    <div class=\"toast-container bottom-0 end-0 p-3 messages_after_redirect\" id=\"messages_after_redirect\">
        ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toasts_html"] ?? null), "html", null, true);
            yield "

        <script type=\"text/javascript\">
        var initMessagesAfterRedirectToasts = function() {
            var toastElList = [].slice.call(document.querySelectorAll('#messages_after_redirect .toast:not(.show)'));
            var toastList = toastElList.map(function (toastEl) {
                var toast = new bootstrap.Toast(toastEl, {
                    delay: 10000,
                })
                toast.show()

                \$(toastEl).on('hidden.bs.toast', function () {
                    \$(toastEl).remove();
                });

                return toast;
            });
        }
        \$(function() {
            initMessagesAfterRedirectToasts();
        });
        </script>
    </div>
";
        } else {
            // line 91
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toasts_html"] ?? null), "html", null, true);
            yield "
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/messages_after_redirect_toasts.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  160 => 91,  133 => 67,  130 => 66,  128 => 65,  125 => 64,  120 => 62,  110 => 58,  103 => 54,  99 => 53,  95 => 51,  92 => 50,  89 => 49,  86 => 48,  83 => 47,  80 => 46,  77 => 45,  74 => 44,  71 => 43,  68 => 42,  65 => 41,  62 => 40,  59 => 39,  56 => 38,  51 => 37,  48 => 36,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/messages_after_redirect_toasts.html.twig", "/var/www/glpi/templates/components/messages_after_redirect_toasts.html.twig");
    }
}
