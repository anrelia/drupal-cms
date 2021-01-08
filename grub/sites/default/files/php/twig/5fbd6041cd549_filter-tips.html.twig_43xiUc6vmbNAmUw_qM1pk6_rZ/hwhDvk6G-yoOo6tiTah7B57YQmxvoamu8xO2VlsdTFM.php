<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/olivero/templates/filter/filter-tips.html.twig */
class __TwigTemplate_a8cc4dd668aea63f8eb7bf06cb8cb2c38ab3899099e86441eb2a6f0df09bd4d4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 20, "for" => 29, "set" => 32];
        $filters = ["t" => 21, "length" => 24, "clean_class" => 34, "escape" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'length', 'clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/olivero/templates/filter/filter-tips.html.twig"));

        // line 20
        if (($context["multiple"] ?? null)) {
            // line 21
            echo "  <h2>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Text Formats"));
            echo "</h2>
";
        }
        // line 23
        echo "
";
        // line 24
        if (twig_length_filter($this->env, ($context["tips"] ?? null))) {
            // line 25
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 26
                echo "    <div class=\"compose-tips\">
  ";
            }
            // line 28
            echo "
  ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tips"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 30
                echo "    ";
                if (($context["multiple"] ?? null)) {
                    // line 31
                    echo "      ";
                    // line 32
                    $context["tip_classes"] = [0 => "compose-tips__item", 1 => ("compose-tips__item--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 34
$context["name"])))];
                    // line 37
                    echo "      <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tip"], "attributes", []), "addClass", [0 => ($context["tip_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
    ";
                }
                // line 39
                echo "    ";
                if ((($context["multiple"] ?? null) || ($context["long"] ?? null))) {
                    // line 40
                    echo "      <h3>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tip"], "name", [])), "html", null, true);
                    echo "</h3>
    ";
                }
                // line 42
                echo "
    ";
                // line 43
                if (twig_length_filter($this->env, $this->getAttribute($context["tip"], "list", []))) {
                    // line 44
                    echo "      <ul class=\"filter-tips ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["long"] ?? null)) ? ("filter-tips--long") : ("filter-tips--short")));
                    echo "\">
      ";
                    // line 45
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tip"], "list", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 46
                        echo "        ";
                        // line 47
                        $context["item_classes"] = [0 => "filter-tips__item", 1 => ((                        // line 49
($context["long"] ?? null)) ? ("filter-tips__item--long") : ("filter-tips__item--short")), 2 => ((                        // line 50
($context["long"] ?? null)) ? (("filter-tips__item--id-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "id", []))))) : (""))];
                        // line 53
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "tip", [])), "html", null, true);
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "      </ul>
    ";
                }
                // line 57
                echo "
    ";
                // line 58
                if (($context["multiple"] ?? null)) {
                    // line 59
                    echo "      </div>
    ";
                }
                // line 61
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
  ";
            // line 63
            if (($context["multiple"] ?? null)) {
                // line 64
                echo "    </div>
  ";
            }
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/olivero/templates/filter/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 64,  161 => 63,  158 => 62,  152 => 61,  148 => 59,  146 => 58,  143 => 57,  139 => 55,  128 => 53,  126 => 50,  125 => 49,  124 => 47,  122 => 46,  118 => 45,  113 => 44,  111 => 43,  108 => 42,  102 => 40,  99 => 39,  93 => 37,  91 => 34,  90 => 32,  88 => 31,  85 => 30,  81 => 29,  78 => 28,  74 => 26,  71 => 25,  69 => 24,  66 => 23,  60 => 21,  58 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/olivero/templates/filter/filter-tips.html.twig", "/Users/anna/Documents/01 Ausbildung/FH Technikum/01 Semester Webdevelopment/3. Semester/04 Content Managament Systems/UE/grub/themes/custom/olivero/templates/filter/filter-tips.html.twig");
    }
}
