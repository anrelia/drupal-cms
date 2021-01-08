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

/* @olivero/../images/rss.svg */
class __TwigTemplate_0ee58b7512b88f54f4fd189b9c40ea5a0b7a41a31817bed1ba6493d3ac5fb585 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@olivero/../images/rss.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14.1px\" height=\"14.1px\" viewBox=\"0 0 14.1 14.1\">
  <path d=\"M3.9 12.2c0-1.1-.9-1.9-1.9-1.9s-2 .8-2 1.9c0 1.1.9 1.9 1.9 1.9s2-.8 2-1.9zM9 13.4c-.2-2.1-1.1-4.2-2.6-5.7S2.8 5.3.7 5.1H.6c-.2 0-.3.1-.4.2-.1.1-.2.3-.2.5v1.4c0 .3.3.6.6.6 3.1.3 5.5 2.7 5.8 5.8 0 .3.3.6.6.6h1.4c.2 0 .4-.1.5-.2 0-.2.1-.4.1-.6zm5.1.1C14 10 12.5 6.6 10 4.2 7.5 1.7 4.2.2.7 0 .5 0 .3.1.2.2.1.3 0 .5 0 .6V2c0 .3.3.6.6.6 5.8.3 10.5 5 10.8 10.8 0 .3.3.6.6.6h1.4c.2 0 .3-.1.5-.2.2 0 .3-.2.2-.3z\"/>
</svg>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@olivero/../images/rss.svg";
    }

    public function getDebugInfo()
    {
        return array (  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@olivero/../images/rss.svg", "/Users/anna/Documents/01 Ausbildung/FH Technikum/01 Semester Webdevelopment/3. Semester/04 Content Managament Systems/UE/grub/themes/custom/olivero/images/rss.svg");
    }
}
