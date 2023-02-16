<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/layout/templates/header.html.twig */
class __TwigTemplate_0e54057043a75c620e8c808c337be5e4ba562c638ab7e46d34032e8b196ca605 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
";
        // line 10
        $context["items"] = $this->env->getFunction('simplify_menu')->getCallable()("main");
        // line 11
        echo "
";
        // line 13
        echo "
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"#\">Drupal</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "menu_tree", [], "any", false, false, true, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 23
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menu_item"], "url", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menu_item"], "text", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</a>
        </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "      </ul>
    </div>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "modules/custom/layout/templates/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  65 => 24,  62 => 23,  58 => 22,  47 => 13,  44 => 11,  42 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{# <ol>
  {% for key in content  %}
    <li>{{ key }}</li>
  {% endfor %}
</ol>
fff
This is a headerrr #}

{# Get menu items #}
{% set items = simplify_menu('main') %}

{# Iterate menu tree #}

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"#\">Drupal</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
  {% for menu_item in items.menu_tree %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ menu_item.url }}\">{{ menu_item.text }}</a>
        </li>
  {% endfor %}
      </ul>
    </div>
  </div>
</nav>", "modules/custom/layout/templates/header.html.twig", "C:\\xampp\\htdocs\\hope\\web\\modules\\custom\\layout\\templates\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "for" => 22);
        static $filters = array("escape" => 24);
        static $functions = array("simplify_menu" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape'],
                ['simplify_menu']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
