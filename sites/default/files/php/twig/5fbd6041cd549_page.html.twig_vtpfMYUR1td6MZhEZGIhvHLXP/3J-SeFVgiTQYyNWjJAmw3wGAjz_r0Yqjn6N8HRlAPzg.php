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

/* themes/custom/olivero/templates/layout/page.html.twig */
class __TwigTemplate_62350ab6102396e95bd77feb2a93536fad86338e2b0beb7ca79742f8132868b0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 52];
        $filters = ["escape" => 71, "t" => 75];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/olivero/templates/layout/page.html.twig"));

        // line 48
        echo "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    ";
        // line 52
        if ((($this->getAttribute(($context["page"] ?? null), "header", []) || $this->getAttribute(($context["page"] ?? null), "primary_menu", [])) || $this->getAttribute(($context["page"] ?? null), "secondary_menu", []))) {
            // line 53
            echo "      <header id=\"header\" class=\"header site-header\" role=\"banner\">

        <!-- Gets fixed by JS at wide widths -->
        <div class=\"site-header__fixable fixable\">
          <div class=\"header__left\">
            <button class=\"nav-primary__button\" aria-controls=\"site-header__inner\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
              <span class=\"nav-primary__icon\">
                <div></div>
                <div></div>
                <div></div>
              </span>
            </button>
          </div>

          <!-- Needs to extend full width so box shadow will also extend -->
          <div id=\"site-header__inner\" class=\"site-header__inner\">
            <div class=\"container site-header__inner__container\">

              ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "

              ";
            // line 73
            if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "secondary_menu", []))) {
                // line 74
                echo "                <div class=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" aria-label=\"";
                // line 75
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle Main Menu"));
                echo "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <div class=\"mobile-nav-button__label\">";
                // line 76
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Menu"));
                echo "</div>
                    <div class=\"mobile-nav-button__icon\"></div>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-menu-open=\"false\">

                  ";
                // line 83
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "

                  ";
                // line 85
                if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])) {
                    // line 86
                    echo "                    <div class=\"secondary-nav__wrapper\">
                      ";
                    // line 87
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
                    echo "
                    </div>
                  ";
                }
                // line 90
                echo "                </div>
              ";
            }
            // line 92
            echo "            </div>
          </div>
        </div>
      </header>
    ";
        }
        // line 97
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <main id=\"content\" class=\"main-content \" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "hero", [])), "html", null, true);
        echo "
          <div class=\"main-content__container container\">
            ";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
            ";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
            ";
        // line 106
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_above", [])), "html", null, true);
        echo "
            ";
        // line 107
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 108
            echo "              <div class=\"sidebar-grid grid-full\">
                ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
            echo "
              </div>
            ";
        } else {
            // line 113
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            ";
        }
        // line 115
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_below", [])), "html", null, true);
        echo "
          </div>
        </main>
        <div class=\"social-bar\">
          ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "social", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
        echo "
        ";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
        echo "
      </div>
    </footer>

    <div class=\"overlay\"></div>

  </div>
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/olivero/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 127,  200 => 126,  190 => 119,  182 => 115,  176 => 113,  170 => 110,  166 => 109,  163 => 108,  161 => 107,  157 => 106,  153 => 105,  149 => 104,  144 => 102,  137 => 97,  130 => 92,  126 => 90,  120 => 87,  117 => 86,  115 => 85,  110 => 83,  100 => 76,  96 => 75,  93 => 74,  91 => 73,  86 => 71,  66 => 53,  64 => 52,  58 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/olivero/templates/layout/page.html.twig", "/Users/anna/Documents/01 Ausbildung/FH Technikum/01 Semester Webdevelopment/3. Semester/04 Content Managament Systems/UE/grub/themes/custom/olivero/templates/layout/page.html.twig");
    }
}
