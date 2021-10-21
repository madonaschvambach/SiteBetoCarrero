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

/* themes/showcase_lite/templates/page.html.twig */
class __TwigTemplate_08332e7d8f73eb262c335cdfad4090e78a45339be220a297dcab7c19995ddc42 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 75];
        $filters = ["escape" => 77];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "slideout", [])) {
            // line 76
            echo "  ";
            // line 77
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 79
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideout", [])), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 85
            echo "  </div>
  ";
            // line 87
            echo "
  ";
            // line 89
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 92
        echo "
";
        // line 94
        echo "<div class=\"page-container\">

  ";
        // line 96
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", [])) || $this->getAttribute(($context["page"] ?? null), "header_first", [])) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
            // line 97
            echo "    ";
            // line 98
            echo "    <div class=\"header-container\">

      ";
            // line 100
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
                // line 101
                echo "        ";
                // line 102
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 103
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 105
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
              ";
                // line 106
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 107
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 108
                echo ">
              <div class=\"row\">
                ";
                // line 110
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) {
                    // line 111
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 113
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 114
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 117
                    echo "                  </div>
                ";
                }
                // line 119
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])) {
                    // line 120
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 122
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 123
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 126
                    echo "                  </div>
                ";
                }
                // line 128
                echo "              </div>
            </div>
            ";
                // line 131
                echo "          </div>
        </div>
        ";
                // line 134
                echo "      ";
            }
            // line 135
            echo "
      ";
            // line 136
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", []))) {
                // line 137
                echo "        ";
                // line 138
                echo "        <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 139
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 141
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
              ";
                // line 142
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 143
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 144
                echo ">
              <div class=\"row\">
                ";
                // line 146
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", [])) {
                    // line 147
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 149
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 150
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 153
                    echo "                  </div>
                ";
                }
                // line 155
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", [])) {
                    // line 156
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 158
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 159
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 162
                    echo "                  </div>
                ";
                }
                // line 164
                echo "              </div>
            </div>
            ";
                // line 167
                echo "          </div>
        </div>
        ";
                // line 170
                echo "      ";
            }
            // line 171
            echo "
      ";
            // line 172
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", []) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", []))) {
                // line 173
                echo "        ";
                // line 174
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 175
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 177
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 179
                if ($this->getAttribute(($context["page"] ?? null), "header_third", [])) {
                    // line 180
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 182
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 183
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_third", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 186
                    echo "                  </div>
                ";
                }
                // line 188
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
                    // line 189
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 191
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 192
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 195
                    echo "                  </div>
                ";
                }
                // line 197
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 198
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 200
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 201
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 204
                    echo "                  </div>
                ";
                }
                // line 206
                echo "              </div>
            </div>
            ";
                // line 209
                echo "          </div>
          ";
                // line 210
                if ((($context["post_progress_status"] ?? null) == "enabled")) {
                    // line 211
                    echo "            ";
                    // line 212
                    echo "            <div class=\"post-progress\">
              <div class=\"post-progress__bar\"></div>
            </div>
            ";
                    // line 216
                    echo "          ";
                }
                // line 217
                echo "        </header>
        ";
                // line 219
                echo "      ";
            }
            // line 220
            echo "
    </div>
    ";
            // line 223
            echo "  ";
        }
        // line 224
        echo "
  ";
        // line 225
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 226
            echo "    ";
            // line 227
            echo "    <div class=\"clearfix banner ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 228
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 230
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                ";
            // line 234
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 240
            echo "      </div>
    </div>
    ";
            // line 243
            echo "  ";
        }
        // line 244
        echo "
  ";
        // line 246
        echo "  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  ";
        // line 248
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", [])) {
            // line 249
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 253
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "system_messages", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 259
        echo "
  ";
        // line 260
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 261
            echo "    ";
            // line 262
            echo "    <div class=\"clearfix content-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 263
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 265
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 266
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 267
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 268
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 272
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 278
            echo "      </div>
    </div>
    ";
            // line 281
            echo "  ";
        }
        // line 282
        echo "
  ";
        // line 283
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])) {
            // line 284
            echo "    ";
            // line 285
            echo "    <div class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 286
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 288
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 289
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 290
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 291
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 295
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 301
            echo "      </div>
    </div>
    ";
            // line 304
            echo "  ";
        }
        // line 305
        echo "
  ";
        // line 306
        if (($this->getAttribute(($context["page"] ?? null), "media_background_first", []) || $this->getAttribute(($context["page"] ?? null), "media_background_second", []))) {
            // line 307
            echo "    ";
            // line 308
            echo "    <div class=\"clearfix media-background ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["media_background_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["media_background_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 310
            echo "      <div class=\"media-background-transparent-bg\"></div>
      ";
            // line 312
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 314
            echo "        <div class=\"clearfix media-background__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["media_background_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 315
            if ((($context["media_background_animations"] ?? null) == "enabled")) {
                // line 316
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 317
            echo ">
          <div class=\"row\">
            ";
            // line 319
            if ($this->getAttribute(($context["page"] ?? null), "media_background_first", [])) {
                // line 320
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 322
                echo "                <div class=\"clearfix media-background__section media-background-first\">
                  ";
                // line 323
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "media_background_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 326
                echo "              </div>
            ";
            }
            // line 328
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "media_background_second", [])) {
                // line 329
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 331
                echo "                <div class=\"clearfix media-background__section media-background-second\">
                  ";
                // line 332
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "media_background_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 335
                echo "              </div>
            ";
            }
            // line 337
            echo "          </div>
        </div>
        ";
            // line 340
            echo "      </div>
    </div>
    ";
            // line 343
            echo "  ";
        }
        // line 344
        echo "
  ";
        // line 346
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 350
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 352
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
              ";
        // line 353
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 354
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null)), "html", null, true);
            echo "\"
              ";
        }
        // line 355
        echo ">
              ";
        // line 356
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 357
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              ";
        }
        // line 359
        echo "            </div>
            ";
        // line 361
        echo "          </section>
          ";
        // line 362
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 363
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 365
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 366
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 367
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 368
            echo ">
                ";
            // line 369
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 372
            echo "            </aside>
          ";
        }
        // line 374
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 375
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 377
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 378
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 379
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 380
            echo ">
                ";
            // line 381
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 384
            echo "            </aside>
          ";
        }
        // line 386
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 391
        echo "
  ";
        // line 392
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", []))) {
            // line 393
            echo "    ";
            // line 394
            echo "    <div class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 395
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 397
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 398
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 399
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 400
            echo ">
          <div class=\"row\">
            ";
            // line 402
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])) {
                // line 403
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 405
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 406
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 409
                echo "              </div>
            ";
            }
            // line 411
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])) {
                // line 412
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 414
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 415
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 418
                echo "              </div>
            ";
            }
            // line 420
            echo "          </div>
        </div>
        ";
            // line 423
            echo "      </div>
    </div>
    ";
            // line 426
            echo "  ";
        }
        // line 427
        echo "
  ";
        // line 428
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 429
            echo "    ";
            // line 430
            echo "    <div class=\"clearfix featured-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 431
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 433
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 434
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 435
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 436
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 440
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 446
            echo "      </div>
    </div>
    ";
            // line 449
            echo "  ";
        }
        // line 450
        echo "
  ";
        // line 451
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 452
            echo "    ";
            // line 453
            echo "    <div class=\"clearfix featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 454
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 456
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 457
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 458
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 459
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 463
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 469
            echo "      </div>
    </div>
    ";
            // line 472
            echo "  ";
        }
        // line 473
        echo "
  ";
        // line 474
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])) {
            // line 475
            echo "    ";
            // line 476
            echo "    <div class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 477
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 479
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 480
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 481
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 482
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 486
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 492
            echo "      </div>
    </div>
    ";
            // line 495
            echo "  ";
        }
        // line 496
        echo "
  ";
        // line 497
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", [])) {
            // line 498
            echo "    ";
            // line 499
            echo "    <div class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 500
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 502
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 503
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 504
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 505
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 509
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 515
            echo "      </div>
    </div>
    ";
            // line 518
            echo "  ";
        }
        // line 519
        echo "
  ";
        // line 520
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])) {
            // line 521
            echo "    ";
            // line 522
            echo "    <div class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 523
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 525
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 526
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 527
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 528
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 532
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 538
            echo "      </div>
    </div>
    ";
            // line 541
            echo "  ";
        }
        // line 542
        echo "
  ";
        // line 543
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 544
            echo "    ";
            // line 545
            echo "    <div class=\"clearfix highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 546
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 548
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 549
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 550
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 551
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 555
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 561
            echo "      </div>
    </div>
    ";
            // line 564
            echo "  ";
        }
        // line 565
        echo "
  ";
        // line 566
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", []))) {
            // line 567
            echo "    ";
            // line 568
            echo "    <div class=\"clearfix footer-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 569
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 571
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 572
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 573
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 574
            echo ">
          <div class=\"row\">
            ";
            // line 576
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])) {
                // line 577
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 579
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 580
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 583
                echo "              </div>
            ";
            }
            // line 585
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])) {
                // line 586
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 588
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 589
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 592
                echo "              </div>
            ";
            }
            // line 594
            echo "          </div>
        </div>
        ";
            // line 597
            echo "      </div>
    </div>
    ";
            // line 600
            echo "  ";
        }
        // line 601
        echo "
  ";
        // line 602
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", []))) {
            // line 603
            echo "    ";
            // line 604
            echo "    <footer class=\"clearfix footer ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 605
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-to-top-enabled"))) {
                // line 606
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 608
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 611
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 612
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 614
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 615
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 616
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 617
                echo ">
                  ";
                // line 618
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 621
                echo "              </div>
            ";
            }
            // line 623
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 624
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 626
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 627
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 628
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 629
                echo ">
                  ";
                // line 630
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 633
                echo "              </div>
            ";
            }
            // line 635
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 636
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 637
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 639
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 640
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 641
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 642
                echo ">
                  ";
                // line 643
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 646
                echo "              </div>
            ";
            }
            // line 648
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 649
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 650
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 652
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 653
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 654
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 655
                echo ">
                  ";
                // line 656
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 659
                echo "              </div>
            ";
            }
            // line 661
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
                // line 662
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 664
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 665
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 666
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 667
                echo ">
                  ";
                // line 668
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 671
                echo "              </div>
            ";
            }
            // line 673
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 678
            echo "  ";
        }
        // line 679
        echo "
  ";
        // line 680
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 681
            echo "    ";
            // line 682
            echo "    <div class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 683
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-bottom-to-top-enabled"))) {
                // line 684
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 686
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 688
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 692
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 698
            echo "      </div>
    </div>
    ";
            // line 701
            echo "  ";
        }
        // line 702
        echo "
  ";
        // line 703
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 704
            echo "    ";
            // line 705
            echo "    <div class=\"clearfix subfooter ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 706
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "subfooter-to-top-enabled"))) {
                // line 707
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 709
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 711
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 713
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])) {
                // line 714
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 716
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 717
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 720
                echo "              </div>
            ";
            }
            // line 722
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 723
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 725
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 726
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 729
                echo "              </div>
            ";
            }
            // line 731
            echo "          </div>
        </div>
        ";
            // line 734
            echo "      </div>
    </div>
    ";
            // line 737
            echo "  ";
        }
        // line 738
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1620 => 738,  1617 => 737,  1613 => 734,  1609 => 731,  1605 => 729,  1600 => 726,  1597 => 725,  1592 => 723,  1589 => 722,  1585 => 720,  1580 => 717,  1577 => 716,  1572 => 714,  1570 => 713,  1566 => 711,  1561 => 709,  1555 => 707,  1553 => 706,  1542 => 705,  1540 => 704,  1538 => 703,  1535 => 702,  1532 => 701,  1528 => 698,  1520 => 692,  1514 => 688,  1509 => 686,  1503 => 684,  1501 => 683,  1490 => 682,  1488 => 681,  1486 => 680,  1483 => 679,  1480 => 678,  1474 => 673,  1470 => 671,  1465 => 668,  1462 => 667,  1456 => 666,  1454 => 665,  1449 => 664,  1444 => 662,  1441 => 661,  1437 => 659,  1432 => 656,  1429 => 655,  1423 => 654,  1421 => 653,  1416 => 652,  1411 => 650,  1409 => 649,  1402 => 648,  1398 => 646,  1393 => 643,  1390 => 642,  1384 => 641,  1382 => 640,  1377 => 639,  1372 => 637,  1370 => 636,  1365 => 635,  1361 => 633,  1356 => 630,  1353 => 629,  1347 => 628,  1345 => 627,  1340 => 626,  1335 => 624,  1332 => 623,  1328 => 621,  1323 => 618,  1320 => 617,  1314 => 616,  1312 => 615,  1307 => 614,  1302 => 612,  1300 => 611,  1293 => 608,  1287 => 606,  1285 => 605,  1274 => 604,  1272 => 603,  1270 => 602,  1267 => 601,  1264 => 600,  1260 => 597,  1256 => 594,  1252 => 592,  1247 => 589,  1244 => 588,  1239 => 586,  1236 => 585,  1232 => 583,  1227 => 580,  1224 => 579,  1219 => 577,  1217 => 576,  1213 => 574,  1207 => 573,  1205 => 572,  1200 => 571,  1196 => 569,  1185 => 568,  1183 => 567,  1181 => 566,  1178 => 565,  1175 => 564,  1171 => 561,  1163 => 555,  1157 => 551,  1151 => 550,  1149 => 549,  1144 => 548,  1140 => 546,  1131 => 545,  1129 => 544,  1127 => 543,  1124 => 542,  1121 => 541,  1117 => 538,  1109 => 532,  1103 => 528,  1097 => 527,  1095 => 526,  1090 => 525,  1086 => 523,  1077 => 522,  1075 => 521,  1073 => 520,  1070 => 519,  1067 => 518,  1063 => 515,  1055 => 509,  1049 => 505,  1043 => 504,  1041 => 503,  1036 => 502,  1032 => 500,  1023 => 499,  1021 => 498,  1019 => 497,  1016 => 496,  1013 => 495,  1009 => 492,  1001 => 486,  995 => 482,  989 => 481,  987 => 480,  982 => 479,  978 => 477,  969 => 476,  967 => 475,  965 => 474,  962 => 473,  959 => 472,  955 => 469,  947 => 463,  941 => 459,  935 => 458,  933 => 457,  928 => 456,  924 => 454,  915 => 453,  913 => 452,  911 => 451,  908 => 450,  905 => 449,  901 => 446,  893 => 440,  887 => 436,  881 => 435,  879 => 434,  874 => 433,  870 => 431,  861 => 430,  859 => 429,  857 => 428,  854 => 427,  851 => 426,  847 => 423,  843 => 420,  839 => 418,  834 => 415,  831 => 414,  826 => 412,  823 => 411,  819 => 409,  814 => 406,  811 => 405,  806 => 403,  804 => 402,  800 => 400,  794 => 399,  792 => 398,  787 => 397,  783 => 395,  774 => 394,  772 => 393,  770 => 392,  767 => 391,  761 => 386,  757 => 384,  752 => 381,  749 => 380,  743 => 379,  741 => 378,  734 => 377,  729 => 375,  726 => 374,  722 => 372,  717 => 369,  714 => 368,  708 => 367,  706 => 366,  699 => 365,  694 => 363,  692 => 362,  689 => 361,  686 => 359,  680 => 357,  678 => 356,  675 => 355,  669 => 354,  667 => 353,  660 => 352,  656 => 350,  648 => 346,  645 => 344,  642 => 343,  638 => 340,  634 => 337,  630 => 335,  625 => 332,  622 => 331,  617 => 329,  614 => 328,  610 => 326,  605 => 323,  602 => 322,  597 => 320,  595 => 319,  591 => 317,  585 => 316,  583 => 315,  578 => 314,  573 => 312,  570 => 310,  561 => 308,  559 => 307,  557 => 306,  554 => 305,  551 => 304,  547 => 301,  539 => 295,  533 => 291,  527 => 290,  525 => 289,  520 => 288,  516 => 286,  507 => 285,  505 => 284,  503 => 283,  500 => 282,  497 => 281,  493 => 278,  485 => 272,  479 => 268,  473 => 267,  471 => 266,  466 => 265,  462 => 263,  455 => 262,  453 => 261,  451 => 260,  448 => 259,  439 => 253,  433 => 249,  431 => 248,  427 => 246,  424 => 244,  421 => 243,  417 => 240,  409 => 234,  403 => 230,  399 => 228,  392 => 227,  390 => 226,  388 => 225,  385 => 224,  382 => 223,  378 => 220,  375 => 219,  372 => 217,  369 => 216,  364 => 212,  362 => 211,  360 => 210,  357 => 209,  353 => 206,  349 => 204,  344 => 201,  341 => 200,  336 => 198,  333 => 197,  329 => 195,  324 => 192,  321 => 191,  316 => 189,  313 => 188,  309 => 186,  304 => 183,  301 => 182,  296 => 180,  294 => 179,  290 => 177,  286 => 175,  275 => 174,  273 => 173,  271 => 172,  268 => 171,  265 => 170,  261 => 167,  257 => 164,  253 => 162,  248 => 159,  245 => 158,  240 => 156,  237 => 155,  233 => 153,  228 => 150,  225 => 149,  220 => 147,  218 => 146,  214 => 144,  208 => 143,  206 => 142,  201 => 141,  197 => 139,  190 => 138,  188 => 137,  186 => 136,  183 => 135,  180 => 134,  176 => 131,  172 => 128,  168 => 126,  163 => 123,  160 => 122,  155 => 120,  152 => 119,  148 => 117,  143 => 114,  140 => 113,  135 => 111,  133 => 110,  129 => 108,  123 => 107,  121 => 106,  116 => 105,  112 => 103,  105 => 102,  103 => 101,  101 => 100,  97 => 98,  95 => 97,  93 => 96,  89 => 94,  86 => 92,  82 => 89,  79 => 87,  76 => 85,  70 => 81,  66 => 79,  59 => 77,  57 => 76,  55 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/showcase_lite/templates/page.html.twig", "/app/themes/showcase_lite/templates/page.html.twig");
    }
}
