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

/* layout/parts/page_footer.html.twig */
class __TwigTemplate_5911fc00fe85d31ea7f0e5c575aeeeae extends Template
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
        // line 34
        $context["js_files"] = Twig\Extension\CoreExtension::merge(($context["js_files"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsScriptsFiles(false));
        // line 35
        $context["js_modules"] = Twig\Extension\CoreExtension::merge(($context["js_modules"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsModulesFiles(false));
        // line 36
        yield "
            </main> ";
        // line 38
        yield "         </div> ";
        // line 39
        yield "      </div> ";
        // line 40
        yield "   </div> ";
        // line 41
        yield "
   <div class=\"floating-buttons d-inline-flex\">
      <span class=\"btn btn-secondary d-none me-1\" id=\"backtotop\">
         <i class=\"ti ti-arrow-up\" title=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back to top of the page"), "html", null, true);
        yield "\">
            <span class=\"visually-hidden\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Top of the page"), "html", null, true);
        yield "</span>
         </i>
      </span>
   </div>

   ";
        // line 50
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("maintenance_mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "      <div id=\"maintenance-float\">
         <a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/config.form.php?forcetab=Config\$5"), "html", null, true);
            yield "\">GLPI MAINTENANCE MODE</a>
      </div>
   ";
        }
        // line 55
        yield "
   ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["js_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 57
            yield "      <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 57), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 57)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 57)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "
   ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["js_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 61
            yield "      <script type=\"module\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 61), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 61)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 61)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
    ";
        // line 64
        if ((($tmp =  !(null === ($context["debug_info"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/debug/debug_toolbar.html.twig", ["debug_info" =>             // line 66
($context["debug_info"] ?? null)], false);
            // line 67
            yield "
    ";
        }
        // line 69
        yield "</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/page_footer.html.twig";
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
        return array (  131 => 69,  127 => 67,  125 => 66,  123 => 65,  121 => 64,  118 => 63,  109 => 61,  105 => 60,  102 => 59,  93 => 57,  89 => 56,  86 => 55,  80 => 52,  77 => 51,  75 => 50,  67 => 45,  63 => 44,  58 => 41,  56 => 40,  54 => 39,  52 => 38,  49 => 36,  47 => 35,  45 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/page_footer.html.twig", "/var/www/glpi/templates/layout/parts/page_footer.html.twig");
    }
}
