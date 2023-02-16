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

/* modules/custom/layout/templates/block/articles-block.html.twig */
class __TwigTemplate_56308dc454d0a6f0b4cbcc3704665f275507cf96c6538d72796261774ecc3dd0 extends \Twig\Template
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
        echo "<nav>
  <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["terms"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 4
            echo "  
    <button class=\"nav-link ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 5)) {
                echo " active ";
            }
            echo "\" id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed($context["item"], 5, $this->source) . $this->sandbox->ensureToStringAllowed($context["key"], 5, $this->source)), "html", null, true);
            echo "-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed($context["item"], 5, $this->source) . $this->sandbox->ensureToStringAllowed($context["key"], 5, $this->source)), "html", null, true);
            echo "\" type=\"button\" role=\"tab\" aria-controls=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 5, $this->source), "html", null, true);
            echo "\" aria-selected=\"true\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 5, $this->source), "html", null, true);
            echo "</button>

  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo " 
 ";
        // line 9
        echo "     </div>
</nav>
<div class=\"tab-content\" id=\"nav-tabContent\">
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["terms"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 13
            echo "  <div class=\"tab-pane fade ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 13)) {
                echo " show active ";
            }
            echo "\" id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed($context["item"], 13, $this->source) . $this->sandbox->ensureToStringAllowed($context["key"], 13, $this->source)), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed($context["item"], 13, $this->source) . $this->sandbox->ensureToStringAllowed($context["key"], 13, $this->source)), "html", null, true);
            echo "-tab\">
";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("articles", "arts_by_tags", $this->sandbox->ensureToStringAllowed($context["key"], 14, $this->source)), "html", null, true);
            echo "
  </div>
 
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/layout/templates/block/articles-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 17,  126 => 14,  115 => 13,  98 => 12,  93 => 9,  90 => 7,  63 => 5,  60 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
  <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
  {% for key, item in terms %}
  
    <button class=\"nav-link {% if loop.first %} active {% endif %}\" id=\"{{ item ~ key }}-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#{{ item ~ key }}\" type=\"button\" role=\"tab\" aria-controls=\"{{ item }}\" aria-selected=\"true\">{{ item }}</button>

  {% endfor %} 
 {#  {{ dump(terms) }}#}
     </div>
</nav>
<div class=\"tab-content\" id=\"nav-tabContent\">
  {% for key, item in terms %}
  <div class=\"tab-pane fade {% if loop.first %} show active {% endif %}\" id=\"{{ item ~ key }}\" role=\"tabpanel\" aria-labelledby=\"{{ item ~ key }}-tab\">
{{ drupal_view('articles', 'arts_by_tags',key) }}
  </div>
 
    {% endfor %} 
</div>
", "modules/custom/layout/templates/block/articles-block.html.twig", "C:\\xampp\\htdocs\\hope\\web\\modules\\custom\\layout\\templates\\block\\articles-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "if" => 5);
        static $filters = array("escape" => 5);
        static $functions = array("drupal_view" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                ['drupal_view']
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
