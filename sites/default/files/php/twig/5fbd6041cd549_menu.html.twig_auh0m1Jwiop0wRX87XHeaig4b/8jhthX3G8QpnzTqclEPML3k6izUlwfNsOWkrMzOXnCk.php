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

/* themes/custom/olivero/templates/navigation/menu.html.twig */
class __TwigTemplate_f342449c7fb68ec5d0cb98d4fbf848107dafc00ec4dcbd6b505cd11796d9a68b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 23, "set" => 29, "macro" => 32, "if" => 35, "for" => 38];
        $filters = ["escape" => 36, "clean_id" => 72];
        $functions = ["link" => 75];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape', 'clean_id'],
                ['link']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/olivero/templates/navigation/menu.html.twig"));

        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "menu"], "method");
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 32
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 33
            echo "  ";
            $context["primary_nav_level"] = ("menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 34
            echo "  ";
            $context["menus"] = $this;
            // line 35
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 36
                echo "    <ul ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => ($context["primary_nav_level"] ?? null)], "method")), "html", null, true);
                echo ">
      ";
                // line 37
                $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["primary_nav_level"] ?? null)], "method");
                // line 38
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "
        ";
                    // line 40
                    if (($this->getAttribute($this->getAttribute($context["item"], "url", []), "isrouted", []) && ($this->getAttribute($this->getAttribute($context["item"], "url", []), "routeName", []) == "<nolink>"))) {
                        // line 41
                        echo "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 42
                        echo "        ";
                    } elseif (($this->getAttribute($this->getAttribute($context["item"], "url", []), "isrouted", []) && ($this->getAttribute($this->getAttribute($context["item"], "url", []), "routeName", []) == "<button>"))) {
                        // line 43
                        echo "          ";
                        $context["menu_item_type"] = "button";
                        // line 44
                        echo "        ";
                    } else {
                        // line 45
                        echo "          ";
                        $context["menu_item_type"] = "link";
                        // line 46
                        echo "        ";
                    }
                    // line 47
                    echo "
        ";
                    // line 48
                    $context["item_classes"] = [0 => "menu__item", 1 => ("menu__item--" . $this->sandbox->ensureToStringAllowed(                    // line 50
($context["menu_item_type"] ?? null))), 2 => ("menu__item--level-" . (                    // line 51
($context["menu_level"] ?? null) + 1)), 3 => (($this->getAttribute(                    // line 52
$context["item"], "in_active_trail", [])) ? ("menu__item--active-trail") : ("")), 4 => (($this->getAttribute(                    // line 53
$context["item"], "below", [])) ? ("menu__item--has-children") : (""))];
                    // line 56
                    echo "
        ";
                    // line 57
                    $context["link_classes"] = [0 => "menu__link", 1 => ("menu__link--" . $this->sandbox->ensureToStringAllowed(                    // line 59
($context["menu_item_type"] ?? null))), 2 => ("menu__link--level-" . (                    // line 60
($context["menu_level"] ?? null) + 1)), 3 => (($this->getAttribute(                    // line 61
$context["item"], "in_active_trail", [])) ? ("menu__link--active-trail") : ("")), 4 => (($this->getAttribute(                    // line 62
$context["item"], "below", [])) ? ("menu__link--has-children") : (""))];
                    // line 65
                    echo "
        <li";
                    // line 66
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
          ";
                    // line 72
                    echo "          ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])) . "-submenu-") . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", []))));
                    // line 73
                    echo "
          ";
                    // line 74
                    if (((($context["menu_item_type"] ?? null) == "link") || (($context["menu_item_type"] ?? null) == "nolink"))) {
                        // line 75
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        echo "

            ";
                        // line 77
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 78
                            echo "              ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
            ";
                        }
                        // line 80
                        echo "
          ";
                    } elseif ((                    // line 81
($context["menu_item_type"] ?? null) == "button")) {
                        // line 82
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" =>                         // line 83
($context["link_classes"] ?? null), "data-ariacontrols" => (($this->getAttribute(                        // line 84
$context["item"], "below", [])) ? (($context["aria_id"] ?? null)) : (false))]), "html", null, true);
                        // line 86
                        echo "

            ";
                        // line 88
                        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["aria_id"] ?? null)], "method");
                        // line 89
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
          ";
                    }
                    // line 91
                    echo "        </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "    </ul>
  ";
            }
            
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/olivero/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 93,  218 => 91,  212 => 89,  210 => 88,  206 => 86,  204 => 84,  203 => 83,  201 => 82,  199 => 81,  196 => 80,  190 => 78,  188 => 77,  182 => 75,  180 => 74,  177 => 73,  174 => 72,  170 => 66,  167 => 65,  165 => 62,  164 => 61,  163 => 60,  162 => 59,  161 => 57,  158 => 56,  156 => 53,  155 => 52,  154 => 51,  153 => 50,  152 => 48,  149 => 47,  146 => 46,  143 => 45,  140 => 44,  137 => 43,  134 => 42,  131 => 41,  129 => 40,  126 => 39,  108 => 38,  106 => 37,  101 => 36,  98 => 35,  95 => 34,  92 => 33,  75 => 32,  65 => 30,  63 => 29,  60 => 24,  58 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/olivero/templates/navigation/menu.html.twig", "/Users/anna/Documents/01 Ausbildung/FH Technikum/01 Semester Webdevelopment/3. Semester/04 Content Managament Systems/UE/grub/themes/custom/olivero/templates/navigation/menu.html.twig");
    }
}
