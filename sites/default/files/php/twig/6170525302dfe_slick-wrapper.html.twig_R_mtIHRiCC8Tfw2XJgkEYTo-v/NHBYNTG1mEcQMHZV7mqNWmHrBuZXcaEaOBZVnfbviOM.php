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

/* modules/slick/templates/slick-wrapper.html.twig */
class __TwigTemplate_a4367cabdcb33edbfc7879cca6b11f4fbc76c5df30f6268cf0469ffe602107e0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "spaceless" => 28, "if" => 29];
        $filters = ["clean_class" => 19, "replace" => 25, "escape" => 30, "without" => 30];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'spaceless', 'if'],
                ['clean_class', 'replace', 'escape', 'without'],
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
        // line 16
        $context["classes"] = [0 => "slick-wrapper", 1 => (($this->getAttribute(        // line 18
($context["settings"] ?? null), "nav", [])) ? ("slick-wrapper--asnavfor") : ("")), 2 => (($this->getAttribute(        // line 19
($context["settings"] ?? null), "skin", [])) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin", []))))) : ("")), 3 => (($this->getAttribute(        // line 20
($context["settings"] ?? null), "skin_thumbnail", [])) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin_thumbnail", []))))) : ("")), 4 => (($this->getAttribute(        // line 21
($context["settings"] ?? null), "vertical", [])) ? ("slick-wrapper--v") : ("")), 5 => (($this->getAttribute(        // line 22
($context["settings"] ?? null), "vertical_tn", [])) ? ("slick-wrapper--v-tn") : ("")), 6 => (($this->getAttribute(        // line 23
($context["settings"] ?? null), "thumbnail_position", [])) ? (("slick-wrapper--tn-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "thumbnail_position", []))))) : ("")), 7 => ((twig_in_filter("over", $this->getAttribute(        // line 24
($context["settings"] ?? null), "thumbnail_position", []))) ? ("slick-wrapper--tn-overlay") : ("")), 8 => ((twig_in_filter("over", $this->getAttribute(        // line 25
($context["settings"] ?? null), "thumbnail_position", []))) ? (("slick-wrapper--tn-" . twig_replace_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "thumbnail_position", [])), ["over-" => ""]))) : (""))];
        // line 28
        ob_start(function () { return ''; });
        // line 29
        echo "  ";
        if ($this->getAttribute(($context["settings"] ?? null), "nav", [])) {
            // line 30
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "id"), "html", null, true);
            echo ">
      ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        } else {
            // line 34
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null)), "html", null, true);
            echo "
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  75 => 31,  70 => 30,  67 => 29,  65 => 28,  63 => 25,  62 => 24,  61 => 23,  60 => 22,  59 => 21,  58 => 20,  57 => 19,  56 => 18,  55 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/slick/templates/slick-wrapper.html.twig", "/app/modules/slick/templates/slick-wrapper.html.twig");
    }
}
