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

/* install/choose_language.html.twig */
class __TwigTemplate_67931fe30f5b0e0b3cde64a8bbe346b9 extends Template
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
<form action=\"install.php\" method=\"post\" data-submit-once>
   <div class=\"container\">
      <div class=\"mb-3\">
         ";
        // line 36
        yield ($context["languages_dropdown"] ?? null);
        yield "
      </div>

      <button type=\"submit\" name=\"lang_select\" class=\"btn btn-primary\" autofocus>
         ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("OK"), "html", null, true);
        yield "
         <i class=\"fas fa-chevron-right ms-1\"></i>
      </button>
   </div>

   <input type=\"hidden\" name=\"install\" value=\"lang_select\" />
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/choose_language.html.twig";
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
        return array (  60 => 46,  51 => 40,  44 => 36,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/choose_language.html.twig", "/var/www/glpi/templates/install/choose_language.html.twig");
    }
}
