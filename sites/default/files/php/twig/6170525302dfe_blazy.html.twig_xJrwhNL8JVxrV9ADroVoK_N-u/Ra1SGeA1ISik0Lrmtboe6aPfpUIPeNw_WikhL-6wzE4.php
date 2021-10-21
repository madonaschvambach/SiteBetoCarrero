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

/* modules/blazy/templates/blazy.html.twig */
class __TwigTemplate_988d4be1628a20f5a1bb98f769e4b2fda34c2c5e46b2f3ce1a5fc2668f38c2a4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'blazy_player' => [$this, 'block_blazy_player'],
            'blazy_media' => [$this, 'block_blazy_media'],
            'blazy_content' => [$this, 'block_blazy_content'],
            'blazy_caption' => [$this, 'block_blazy_caption'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 55, "block" => 70, "if" => 116, "for" => 119];
        $filters = ["clean_class" => 57, "join" => 65, "escape" => 128];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'join', 'escape'],
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
        // line 55
        $context["classes"] = [0 => ((        // line 56
($context["content"] ?? null)) ? ("media--rendered") : ("")), 1 => (($this->getAttribute(        // line 57
($context["settings"] ?? null), "bundle", [])) ? (("media--bundle--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "bundle", []))))) : ("")), 2 => (($this->getAttribute(        // line 58
($context["settings"] ?? null), "namespace", [])) ? (("media--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "namespace", [])))) : ("")), 3 => ((($this->getAttribute(        // line 59
($context["settings"] ?? null), "lazy", []) && $this->getAttribute(($context["settings"] ?? null), "use_loading", []))) ? ("media--loading is-b-loading") : ("")), 4 => (($this->getAttribute(        // line 60
($context["settings"] ?? null), "media_switch", [])) ? (("media--switch media--switch--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "media_switch", []))))) : ("")), 5 => (($this->getAttribute(        // line 61
($context["settings"] ?? null), "player", [])) ? ("media--player") : ("")), 6 => (($this->getAttribute(        // line 62
($context["settings"] ?? null), "ratio", [])) ? (("media--ratio media--ratio--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "ratio", [])))) : ("")), 7 => (($this->getAttribute(        // line 63
($context["settings"] ?? null), "responsive_image_style_id", [])) ? ("media--responsive") : ("")), 8 => (($this->getAttribute(        // line 64
($context["settings"] ?? null), "type", [])) ? (("media--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "type", [])))) : ("")), 9 => (($this->getAttribute(        // line 65
($context["settings"] ?? null), "classes", [])) ? (\Drupal\Component\Utility\Html::getClass(twig_join_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "classes", [])), " "))) : (""))];
        // line 68
        echo "
";
        // line 69
        ob_start(function () { return ''; });
        // line 70
        echo "  ";
        $this->displayBlock('blazy_player', $context, $blocks);
        $context["player"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "
";
        // line 80
        ob_start(function () { return ''; });
        // line 81
        echo "  ";
        $this->displayBlock('blazy_media', $context, $blocks);
        $context["media"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "
";
        // line 97
        ob_start(function () { return ''; });
        // line 98
        echo "  ";
        $this->displayBlock('blazy_content', $context, $blocks);
        // line 115
        echo "
  ";
        // line 116
        if ((($context["captions"] ?? null) && $this->getAttribute(($context["captions"] ?? null), "inline", [], "any", true, true))) {
            // line 117
            echo "    ";
            $this->displayBlock('blazy_caption', $context, $blocks);
            // line 126
            echo "  ";
        }
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["postscript"] ?? null)), "html", null, true);
        $context["blazy"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        echo "
";
        // line 132
        if (($context["wrapper_attributes"] ?? null)) {
            // line 133
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
            echo ">";
            // line 134
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blazy"] ?? null)), "html", null, true);
            // line 135
            echo "</div>
";
        } else {
            // line 137
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blazy"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    // line 70
    public function block_blazy_player($context, array $blocks = [])
    {
        // line 71
        echo "    ";
        if ($this->getAttribute(($context["settings"] ?? null), "player", [])) {
            // line 72
            echo "      <span class=\"media__icon media__icon--close\"></span>
      <span class=\"media__icon media__icon--play\" data-url=\"";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "embed_url", [])), "html", null, true);
            echo "\"></span>
    ";
        } else {
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["iframe"] ?? null)), "html", null, true);
        }
        // line 77
        echo "  ";
    }

    // line 81
    public function block_blazy_media($context, array $blocks = [])
    {
        // line 82
        echo "    <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["preface"] ?? null)), "html", null, true);
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["noscript"] ?? null)), "html", null, true);
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null)), "html", null, true);
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["overlay"] ?? null)), "html", null, true);
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["player"] ?? null)), "html", null, true);
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "icon", [])), "html", null, true);
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "html", null, true);
        // line 93
        echo "</div>
  ";
    }

    // line 98
    public function block_blazy_content($context, array $blocks = [])
    {
        // line 99
        echo "    ";
        if (($context["media_attributes"] ?? null)) {
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_attributes"] ?? null)), "html", null, true);
            echo ">";
        }
        // line 100
        echo "      ";
        if ((($context["url"] ?? null) &&  !$this->getAttribute(($context["settings"] ?? null), "player", []))) {
            // line 101
            echo "        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null)), "html", null, true);
            echo "</a>

        ";
            // line 104
            echo "        ";
            if ((($context["captions"] ?? null) &&  !twig_test_empty($this->getAttribute(($context["captions"] ?? null), "lightbox", [])))) {
                // line 105
                echo "          <div class=\"litebox-caption visually-hidden\">";
                // line 106
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["captions"] ?? null), "lightbox", [])), "html", null, true);
                // line 107
                echo "</div>
        ";
            }
            // line 109
            echo "
      ";
        } else {
            // line 111
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null)), "html", null, true);
        }
        // line 113
        echo "    ";
        if (($context["media_attributes"] ?? null)) {
            echo "</div>";
        }
        // line 114
        echo "  ";
    }

    // line 117
    public function block_blazy_caption($context, array $blocks = [])
    {
        // line 118
        echo "      <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption_attributes"] ?? null)), "html", null, true);
        echo ">
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["captions"] ?? null), "inline", []));
        foreach ($context['_seq'] as $context["_key"] => $context["caption"]) {
            // line 120
            echo "          ";
            if ($this->getAttribute($context["caption"], "content", [])) {
                // line 121
                echo "            <";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "tag", [])), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "attributes", [])), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "content", [])), "html", null, true);
                echo "</";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "tag", [])), "html", null, true);
                echo ">
          ";
            }
            // line 123
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/blazy/templates/blazy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 124,  259 => 123,  247 => 121,  244 => 120,  240 => 119,  235 => 118,  232 => 117,  228 => 114,  223 => 113,  220 => 111,  216 => 109,  212 => 107,  210 => 106,  208 => 105,  205 => 104,  195 => 101,  192 => 100,  185 => 99,  182 => 98,  177 => 93,  175 => 92,  173 => 91,  171 => 88,  169 => 87,  167 => 86,  165 => 85,  163 => 84,  161 => 83,  157 => 82,  154 => 81,  150 => 77,  147 => 75,  142 => 73,  139 => 72,  136 => 71,  133 => 70,  126 => 137,  122 => 135,  120 => 134,  116 => 133,  114 => 132,  111 => 131,  108 => 128,  105 => 126,  102 => 117,  100 => 116,  97 => 115,  94 => 98,  92 => 97,  89 => 96,  85 => 81,  83 => 80,  80 => 79,  76 => 70,  74 => 69,  71 => 68,  69 => 65,  68 => 64,  67 => 63,  66 => 62,  65 => 61,  64 => 60,  63 => 59,  62 => 58,  61 => 57,  60 => 56,  59 => 55,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/blazy/templates/blazy.html.twig", "/app/modules/blazy/templates/blazy.html.twig");
    }
}
