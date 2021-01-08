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

/* themes/custom/olivero/templates/navigation/pager.html.twig */
class __TwigTemplate_31ba163c66e6aceddfc195dfce59933e56f4a7ef2a901b8cdd5bcbbb5c109836 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 33, "spaceless" => 39, "for" => 72, "set" => 76];
        $filters = ["escape" => 34, "t" => 35, "without" => 41];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless', 'for', 'set'],
                ['escape', 't', 'without'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/olivero/templates/navigation/pager.html.twig"));

        // line 33
        if (($context["items"] ?? null)) {
            // line 34
            echo "  <nav class=\"pager layout--content-medium\" role=\"navigation\" aria-labelledby=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
            echo "\">
    <h4 id=\"";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 38
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "first", [])) {
                // line 39
                echo "        ";
                ob_start(function () { return ''; });
                // line 40
                echo "          <li class=\"pager__item pager__item--control pager__item--first\">
            <a href=\"";
                // line 41
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "attributes", [])), "href", "title", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--first\" width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M5.11201 7.19126L13.4118 1.15503C14.0728 0.674329 15 1.14648 15 1.96377V14.0362C15 14.8535 14.0728 15.3257 13.4118 14.845L5.11201 8.80874C4.56291 8.40939 4.56291 7.59061 5.11201 7.19126Z\"/>
                <rect width=\"2\" height=\"16\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 50
                echo "      ";
            }
            // line 51
            echo "
      ";
            // line 53
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 54
                echo "        ";
                ob_start(function () { return ''; });
                // line 55
                echo "          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "href", "title", "rel", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--previous\" width=\"11\" height=\"16\" viewBox=\"0 0 11 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M1.11201 7.19126L9.41183 1.15503C10.0728 0.674329 11 1.14648 11 1.96377V14.0362C11 14.8535 10.0728 15.3257 9.41183 14.845L1.11201 8.80874C0.562908 8.40939 0.562907 7.59061 1.11201 7.19126Z\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 64
                echo "      ";
            }
            // line 65
            echo "
      ";
            // line 67
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "previous", [])) {
                // line 68
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 70
            echo "
      ";
            // line 72
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 73
                echo "        ";
                ob_start(function () { return ''; });
                // line 74
                echo "          <li class=\"pager__item";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                echo " pager__item--number\">
            ";
                // line 75
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 76
                    echo "              ";
                    $context["title"] = t("Current page");
                    // line 77
                    echo "            ";
                } else {
                    // line 78
                    echo "              ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 79
                    echo "            ";
                }
                // line 80
                echo "            ";
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 81
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "href", [])), "html", null, true);
                    echo "\" class=\"pager__link";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                    echo "\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "href", "title", "class"), "html", null, true);
                    echo ">
            ";
                }
                // line 83
                echo "            <span class=\"visually-hidden\">
              ";
                // line 84
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>
            ";
                // line 86
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                echo "
            ";
                // line 87
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 88
                    echo "              </a>
            ";
                }
                // line 90
                echo "          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 92
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
      ";
            // line 95
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "next", [])) {
                // line 96
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 98
            echo "
      ";
            // line 100
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 101
                echo "        ";
                ob_start(function () { return ''; });
                // line 102
                echo "          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"";
                // line 103
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "href", "title", "rel", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 104
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--next\" width=\"11\" height=\"16\" viewBox=\"0 0 11 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.88799 8.80874L1.58817 14.845C0.927202 15.3257 0 14.8535 0 14.0362L0 1.96377C0 1.14648 0.927202 0.674329 1.58817 1.15503L9.88799 7.19126C10.4371 7.59061 10.4371 8.40939 9.88799 8.80874Z\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 111
                echo "      ";
            }
            // line 112
            echo "
      ";
            // line 114
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "last", [])) {
                // line 115
                echo "        ";
                ob_start(function () { return ''; });
                // line 116
                echo "          <li class=\"pager__item pager__item--control pager__item--last\">
            <a href=\"";
                // line 117
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "attributes", [])), "href", "title", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 118
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--last\" width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.88799 8.80874L1.58817 14.845C0.927202 15.3257 0 14.8535 0 14.0362L0 1.96377C0 1.14648 0.927202 0.674329 1.58817 1.15503L9.88799 7.19126C10.4371 7.59061 10.4371 8.40939 9.88799 8.80874Z\"/>
                <rect x=\"13\" width=\"2\" height=\"16\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 126
                echo "      ";
            }
            // line 127
            echo "    </ul>
  </nav>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/olivero/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 127,  293 => 126,  282 => 118,  274 => 117,  271 => 116,  268 => 115,  265 => 114,  262 => 112,  259 => 111,  249 => 104,  241 => 103,  238 => 102,  235 => 101,  232 => 100,  229 => 98,  225 => 96,  222 => 95,  219 => 93,  213 => 92,  209 => 90,  205 => 88,  203 => 87,  199 => 86,  194 => 84,  191 => 83,  179 => 81,  176 => 80,  173 => 79,  170 => 78,  167 => 77,  164 => 76,  162 => 75,  157 => 74,  154 => 73,  149 => 72,  146 => 70,  142 => 68,  139 => 67,  136 => 65,  133 => 64,  123 => 57,  115 => 56,  112 => 55,  109 => 54,  106 => 53,  103 => 51,  100 => 50,  89 => 42,  81 => 41,  78 => 40,  75 => 39,  72 => 38,  65 => 35,  60 => 34,  58 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/olivero/templates/navigation/pager.html.twig", "/Users/anna/Documents/01 Ausbildung/FH Technikum/01 Semester Webdevelopment/3. Semester/04 Content Managament Systems/UE/grub/themes/custom/olivero/templates/navigation/pager.html.twig");
    }
}
