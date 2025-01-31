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

/* @webprofiler/Profiler/webprofiler_toolbar.css.twig */
class __TwigTemplate_203809619f08ba8396a5469c1aa764c706d4defa97f7394e14cc8b9f8e4d86d1 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Profiler/webprofiler_toolbar.css.twig"));

        // line 1
        echo ".sf-minitoolbar {
display: none;

position: fixed;
bottom: 0;
right: 0;

padding: 5px 5px 0;

background-color: #f7f7f7;
background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
background: linear-gradient(top, #e4e4e4, #ffffff);

border-radius: 16px 0 0 0;

z-index: 6000000;
}

.sf-toolbarreset {
position: fixed;
background-color: #f7f7f7;
left: 0;
right: 0;
height: 38px;
margin: 0;
padding: 0 40px 0 0;
z-index: 6000000;
font: 11px Verdana, Arial, sans-serif;
text-align: left;
color: #2f2f2f;

background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
background: linear-gradient(top, #e4e4e4, #ffffff);

bottom: 0;
border-top: 1px solid #bbb;
}
.sf-toolbarreset abbr {
border-bottom: 1px dotted #000000;
}
.sf-toolbarreset span,
.sf-toolbarreset div {
font-size: 11px;
}
.sf-toolbarreset img {
width: auto;
display: inline;
}

.sf-toolbarreset .hide-button {
display: block;
position: absolute;
top: 0;
right: 0;
width: 40px;
height: 40px;
cursor: pointer;
background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAAllBMVEXDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PExMTPz8/Q0NDR0dHT09Pb29vc3Nzf39/h4eHi4uLj4+P6+vr7+/v8/Pz9/f3///+Nh2QuAAAAIXRSTlMABgwPGBswMzk8QktRV4SKjZOWmaKlq7TAxszb3urt+fy1vNEpAAAAiklEQVQIHUXBBxKCQBREwRFzDqjoGh+C2YV//8u5Sll2S0E/dof1tKdKM6GyqCto7PjZRJIS/mbSELgXOSd/BzpKIH1ZefVWpDDTHsi8mZVnwImPi5ndCLbaAZk3M58Bay0h9VbeSvMpjDUAHj4jL55AW1rxN5fU2PLjIgVRzNdxVFOlGzvnJi0Fb1XNGBHA9uQOAAAAAElFTkSuQmCC');
background-repeat: no-repeat;
background-position: 13px 11px;
}
.sf-toolbarreset a {
color: #000 !important;
border: none;
}

.sf-toolbar-block {
white-space: nowrap;
color: #2f2f2f;
display: block;
min-height: 28px;
border-right: 1px solid #e4e4e4;
padding: 0;
float: left;
cursor: default;
}

.sf-toolbar-block span {
display: inline-block;
}

.sf-toolbar-block .sf-toolbar-info-piece {
line-height: 19px;
margin-bottom: 5px;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
padding: 0px 5px;
border-radius: 5px;
margin-bottom: 0px;
vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a,
.sf-toolbar-block .sf-toolbar-info-piece abbr {
color: #2f2f2f;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
display: inline-block;
width: 150px;
vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-with-next-pointer:after {
content: ' :: ';
color: #999;
}

.sf-toolbar-block .sf-toolbar-info-with-delimiter {
border-right: 1px solid #999;
padding-right: 5px;
margin-right: 5px;
}

.sf-toolbar-block .sf-toolbar-info {
display: none;
position: absolute;
background-color: #fff;
border: 1px solid #bbb;
padding: 9px 0;
margin-left: -1px;

bottom: 38px;
border-bottom-width: 0;
border-bottom: 1px solid #bbb;
border-radius: 4px 4px 0 0;
}

.sf-toolbarreset > div:last-of-type .sf-toolbar-info {
right: -1px;
}

.sf-toolbar-block .sf-toolbar-info:empty {
visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
display: inline-block;
color: #fff;
background-color: #666;
padding: 3px 6px;
border-radius: 3px;
margin-bottom: 2px;
vertical-align: middle;
min-width: 6px;
min-height: 13px;
}

.sf-toolbar-block .sf-toolbar-status abbr {
color: #fff;
border-bottom: 1px dotted black;
}

.sf-toolbar-block .sf-toolbar-status-green {
background-color: #759e1a;
}

.sf-toolbar-block .sf-toolbar-status-red {
background-color: #a33;
}

.sf-toolbar-block .sf-toolbar-status-yellow {
background-color: #ffcc00;
color: #000;
}

.sf-toolbar-block .sf-toolbar-status-black {
background-color: #000;
}

.sf-toolbar-block .sf-toolbar-icon {
display: block;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > span {
display: block;
font-weight: normal;
text-decoration: none;
margin: 0;
padding: 5px 6px;
min-width: 20px;
text-align: center;
vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > a:link
.sf-toolbar-block .sf-toolbar-icon > a:hover {
color: black !important;
}

.sf-toolbar-block .sf-toolbar-icon > a[href]:after {
content: \"\";
}

.sf-toolbar-block .sf-toolbar-icon img {
border-width: 0;
vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon img + span {
margin-left: 0;
margin-top: 2px;
}

.sf-toolbar-block .sf-toolbar-icon .sf-toolbar-status {
border-radius: 12px;
border-bottom-left-radius: 0;
margin-top: 0;
}

.sf-toolbar-block .sf-toolbar-info-method {
cursor: hand;
}

.sf-toolbar-block .sf-toolbar-info-method[onclick=\"\"] {
border-bottom: none;
cursor: inherit;
}

.sf-toolbar-info-php {}
.sf-toolbar-info-php-ext {}

.sf-toolbar-info-php-ext .sf-toolbar-status {
margin-left: 2px;
}

.sf-toolbar-info-php-ext .sf-toolbar-status:first-child {
margin-left: 0;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail {
display: inline-block;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional:empty,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail:empty {
display: none;
}

.sf-toolbarreset:hover {
box-shadow: rgba(0, 0, 0, 0.3) 0 0 50px;
}

.sf-toolbar-block:hover {
box-shadow: rgba(0, 0, 0, 0.35) 0 0 5px;
border-right: none;
margin-right: 1px;
position: relative;
}

.sf-toolbar-block:hover .sf-toolbar-icon {
background-color: #fff;
border-top: 1px dotted #DDD;
position: relative;
margin-top: -1px;
z-index: 10002;
}

.sf-toolbar-block:hover .sf-toolbar-info {
display: block;
min-width: -webkit-calc(100% + 2px);
min-width: calc(100% + 2px);
z-index: 10001;
box-sizing: border-box;
padding: 9px;
line-height: 19px;
}

/***** Media query *****/
@media screen and (max-width: 779px) {
.sf-toolbar-block .sf-toolbar-icon > * > :first-child ~ * {
display: none;
}

.sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional,
.sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
display: none !important;
}
}

@media screen and (max-width: 1179px) {
.sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional {
display: none;
}
}

@media screen and (max-width: 1439px) {
.sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
display: none;
}
}

/***** Media query print: Do not print the Toolbar. *****/
@media print {
.sf-toolbar {
display: none;
visibility: hidden;
}
}
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Profiler/webprofiler_toolbar.css.twig";
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
        return new Source("", "@webprofiler/Profiler/webprofiler_toolbar.css.twig", "/Users/anna/Documents/01 Ausbildung/FH Technikum/01 Semester Webdevelopment/3. Semester/04 Content Managament Systems/UE/grub/modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_toolbar.css.twig");
    }
}
