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

/* modules/slick/templates/slick.html.twig */
class __TwigTemplate_57b6fb6ed2da3eb4f263970113eb93d3097b94b8a4f9079cb7dd9c0a81b0da1c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'slick_content' => [$this, 'block_slick_content'],
            'slick_arrow' => [$this, 'block_slick_arrow'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 31, "if" => 55, "block" => 59];
        $filters = ["join" => 34, "clean_class" => 35, "escape" => 54, "t" => 67];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['join', 'clean_class', 'escape', 't'],
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
        // line 31
        $context["classes"] = [0 => (($this->getAttribute(        // line 32
($context["settings"] ?? null), "unslick", [])) ? ("unslick") : ("")), 1 => (($this->getAttribute(        // line 33
($context["settings"] ?? null), "vertical", [])) ? ("slick--vertical") : ("")), 2 => (($this->getAttribute($this->getAttribute(        // line 34
($context["settings"] ?? null), "attributes", []), "class", [])) ? (twig_join_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "attributes", []), "class", [])), " ")) : ("")), 3 => (($this->getAttribute(        // line 35
($context["settings"] ?? null), "skin", [])) ? (("slick--skin--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin", []))))) : ("")), 4 => ((twig_in_filter("boxed", $this->getAttribute(        // line 36
($context["settings"] ?? null), "skin", []))) ? ("slick--skin--boxed") : ("")), 5 => ((twig_in_filter("split", $this->getAttribute(        // line 37
($context["settings"] ?? null), "skin", []))) ? ("slick--skin--split") : ("")), 6 => (($this->getAttribute(        // line 38
($context["settings"] ?? null), "optionset", [])) ? (("slick--optionset--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "optionset", []))))) : ("")), 7 => ((        // line 39
(isset($context["arrow_down_attributes"]) || array_key_exists("arrow_down_attributes", $context))) ? ("slick--has-arrow-down") : ("")), 8 => (($this->getAttribute(        // line 40
($context["settings"] ?? null), "asNavFor", [])) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["display"] ?? null))))) : ("")), 9 => ((($this->getAttribute(        // line 41
($context["settings"] ?? null), "slidesToShow", []) > 1)) ? ("slick--multiple-view") : ("")), 10 => ((($this->getAttribute(        // line 42
($context["settings"] ?? null), "count", []) <= $this->getAttribute(($context["settings"] ?? null), "slidesToShow", []))) ? ("slick--less") : ("")), 11 => ((((        // line 43
($context["display"] ?? null) == "main") && $this->getAttribute(($context["settings"] ?? null), "media_switch", []))) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "media_switch", []))))) : ("")), 12 => ((((        // line 44
($context["display"] ?? null) == "thumbnail") && $this->getAttribute(($context["settings"] ?? null), "thumbnail_caption", []))) ? ("slick--has-caption") : (""))];
        // line 48
        $context["arrow_classes"] = [0 => "slick__arrow", 1 => (($this->getAttribute(        // line 50
($context["settings"] ?? null), "vertical", [])) ? ("slick__arrow--v") : ("")), 2 => (($this->getAttribute(        // line 51
($context["settings"] ?? null), "skin_arrows", [])) ? (("slick__arrow--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin_arrows", []))))) : (""))];
        // line 54
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 55
        if ( !$this->getAttribute(($context["settings"] ?? null), "unslick", [])) {
            // line 56
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "slick__slider"], "method")), "html", null, true);
            echo ">
  ";
        }
        // line 58
        echo "
  ";
        // line 59
        $this->displayBlock('slick_content', $context, $blocks);
        // line 62
        echo "
  ";
        // line 63
        if ( !$this->getAttribute(($context["settings"] ?? null), "unslick", [])) {
            // line 64
            echo "    </div>
    ";
            // line 65
            $this->displayBlock('slick_arrow', $context, $blocks);
            // line 78
            echo "  ";
        }
        // line 79
        echo "</div>
";
    }

    // line 59
    public function block_slick_content($context, array $blocks = [])
    {
        // line 60
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null)), "html", null, true);
        echo "
  ";
    }

    // line 65
    public function block_slick_arrow($context, array $blocks = [])
    {
        // line 66
        echo "      <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["arrow_attributes"] ?? null), "addClass", [0 => ($context["arrow_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        <button type=\"button\" data-role=\"none\" class=\"slick-prev\" aria-label=\"";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "prevArrow", []))));
        echo "\" tabindex=\"0\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "prevArrow", []))));
        echo "</button>
        ";
        // line 68
        if ((isset($context["arrow_down_attributes"]) || array_key_exists("arrow_down_attributes", $context))) {
            // line 69
            echo "          <button";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["arrow_down_attributes"] ?? null), "addClass", [0 => "slick-down"], "method"), "setAttribute", [0 => "type", 1 => "button"], "method"), "setAttribute", [0 => "data-role", 1 => "none"], "method"), "setAttribute", [0 => "data-target", 1 => $this->getAttribute(            // line 72
($context["settings"] ?? null), "downArrowTarget", [])], "method"), "setAttribute", [0 => "data-offset", 1 => $this->getAttribute(            // line 73
($context["settings"] ?? null), "downArrowOffset", [])], "method")), "html", null, true);
            echo "></button>
        ";
        }
        // line 75
        echo "        <button type=\"button\" data-role=\"none\" class=\"slick-next\" aria-label=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "nextArrow", []))));
        echo "\" tabindex=\"0\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "nextArrow", []))));
        echo "</button>
      </nav>
    ";
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 75,  141 => 73,  140 => 72,  138 => 69,  136 => 68,  130 => 67,  125 => 66,  122 => 65,  115 => 60,  112 => 59,  107 => 79,  104 => 78,  102 => 65,  99 => 64,  97 => 63,  94 => 62,  92 => 59,  89 => 58,  83 => 56,  81 => 55,  76 => 54,  74 => 51,  73 => 50,  72 => 48,  70 => 44,  69 => 43,  68 => 42,  67 => 41,  66 => 40,  65 => 39,  64 => 38,  63 => 37,  62 => 36,  61 => 35,  60 => 34,  59 => 33,  58 => 32,  57 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/slick/templates/slick.html.twig", "/app/modules/slick/templates/slick.html.twig");
    }
}
