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

/* themes/custom/custom_theme/templates/paragraph--text-image-right--default.html.twig */
class __TwigTemplate_e8d24593ba577128892e4f73ead380b99c6cfc1e488e4822a9d1b17f23f12dd2 extends \Twig\Template
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
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\twig_vardumper\TwigExtension']->drupalDump($this->env, $context));
        echo "
";
        // line 2
        $context["title"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_titre", [], "any", false, false, true, 2), 0, [], "any", false, false, true, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#context"] ?? null) : null), "value", [], "any", false, false, true, 2);
        // line 3
        $context["description"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 3), 0, [], "any", false, false, true, 3)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#text"] ?? null) : null);
        // line 4
        $context["image"] = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#markup"] ?? null) : null);
        // line 5
        echo "<div class=\"card\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">
    ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 8, $this->source), "html", null, true);
        echo "
    </h5>
    <p class=\"card-text\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 10, $this->source));
        echo "</p>
  </div>
  <img src=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 12, $this->source), "html", null, true);
        echo "\" class=\"card-img-bottom\" alt=\"...\">
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_theme/templates/paragraph--text-image-right--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  59 => 10,  54 => 8,  49 => 5,  47 => 4,  45 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ dump() }}
{% set title= content.field_titre.0[\"#context\"].value %}
{% set description= content.field_description.0[\"#text\"] %}
{% set image= content.field_image.0[\"#markup\"] %}
<div class=\"card\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">
    {{ title }}
    </h5>
    <p class=\"card-text\">{{ description|raw }}</p>
  </div>
  <img src=\"{{ image }}\" class=\"card-img-bottom\" alt=\"...\">
</div>", "themes/custom/custom_theme/templates/paragraph--text-image-right--default.html.twig", "C:\\xampp\\htdocs\\hope\\web\\themes\\custom\\custom_theme\\templates\\paragraph--text-image-right--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("escape" => 8, "raw" => 10);
        static $functions = array("dump" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'raw'],
                ['dump']
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
