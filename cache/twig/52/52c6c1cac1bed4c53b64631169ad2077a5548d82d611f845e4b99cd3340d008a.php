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

/* pages.html.twig */
class __TwigTemplate_fa98d2ca8c3b965aa1f05737ac2f44ce09c1fdce1ac1d6f629b3e09e2736307e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 86
        $context["macro"] = $this;
        // line 88
        if ($this->getAttribute(($context["admin"] ?? null), "route", [])) {
            // line 89
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", [0 => true], "method");
        }
        // line 92
        if ($this->getAttribute(($context["uri"] ?? null), "param", [0 => "new"], "method")) {
            // line 93
            $context["mode"] = "new";
        } elseif (        // line 94
($context["context"] ?? null)) {
            // line 95
            $context["mode"] = "edit";
            // line 96
            if ($this->getAttribute(($context["context"] ?? null), "exists", [])) {
                // line 97
                $context["page_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "routes", []), "default", [])) : ($this->getAttribute(($context["context"] ?? null), "rawRoute", []))));
                // line 98
                $context["exists"] = true;
                // line 99
                $context["title"] = (((($this->getAttribute(($context["context"] ?? null), "exists", [])) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "title", [])) ? ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "title", [])) : ($this->getAttribute(($context["context"] ?? null), "title", []))));
            } else {
                // line 101
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 104
            $context["mode"] = "list";
            // line 105
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 108
        $context["modular"] = (($this->getAttribute(($context["context"] ?? null), "modular", [])) ? ("modular_") : (""));
        // line 109
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "warnings", []), "delete_page", []);
        // line 110
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "admin_lang", [])) ? ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "admin_lang", [])) : ("en"));
        // line 111
        $context["page_lang"] = $this->getAttribute(($context["context"] ?? null), "language", []);
        // line 112
        $context["type"] = "page";
        // line 125
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []) != "inline")) {
            // line 126
            $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", []))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", []))))) : ("/"));
            // line 127
            $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []);
            // line 128
            $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", [])) ? ((((((("<a class=\"button\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        } else {
            // line 130
            $context["preview_html"] = (((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", []))))) ? ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", []))))) : ("/"));
            // line 131
            $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", [])) ? ((((("<a class=\"button\" href=\"" . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 114
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 115
        echo "    ";
        if ((($context["mode"] ?? null) == "edit")) {
            // line 116
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method");
            // line 117
            echo "    ";
        }
        // line 118
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 121
    public function block_javascripts($context, array $blocks = [])
    {
        // line 122
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 134
    public function block_titlebar($context, array $blocks = [])
    {
        // line 135
        echo "
    <div class=\"button-bar\">
        ";
        // line 137
        if ((($context["mode"] ?? null) == "list")) {
            // line 138
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 141
                echo "                ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", []), "bar") == "bar")) {
                    // line 142
                    echo "                    <a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", []), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", [])), "html", null, true);
                    echo "</a>
                ";
                }
                // line 144
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "
            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 156
            if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", []))) {
                // line 157
                echo "                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 159
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 160
                echo "                        ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", []), "bar") == "dropdown")) {
                    // line 161
                    echo "                            <li><a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", []), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", [])), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 163
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                </ul>
            </div>

            ";
            // line 167
            if ($this->getAttribute(($context["admin"] ?? null), "multilang", [])) {
                // line 168
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 171
                $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", []), ($context["admin_lang"] ?? null), [], "array");
                // line 172
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 174
                if ((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "languages_enabled", [])) > 1)) {
                    // line 175
                    echo "                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                    // line 179
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "languages_enabled", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 180
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", []), $context["langCode"], [], "array");
                        // line 181
                        echo "                            ";
                        if (($context["langCode"] != ($context["admin_lang"] ?? null))) {
                            // line 182
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((((((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["theme"] ?? null), "slug", [])) . "/pages/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</a></li>
                            ";
                        }
                        // line 184
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "                    </ul>
                    ";
                }
                // line 187
                echo "                </div>
            ";
            }
            // line 189
            echo "
        ";
        } elseif ((        // line 190
($context["mode"] ?? null) == "edit")) {
            // line 191
            echo "
            ";
            // line 192
            echo ($context["preview_link"] ?? null);
            echo "

            <a class=\"button\" href=\"";
            // line 194
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/pages\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i></a>

            ";
            // line 196
            $context["siblings"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "parent", [], "method"), "children", [], "method");
            // line 197
            echo "
            ";
            // line 198
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method")) {
                // line 199
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method");
                // line 200
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", []))));
                // line 201
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIOUS"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i></a>
            ";
            }
            // line 203
            echo "
            ";
            // line 204
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method")) {
                // line 205
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method");
                // line 206
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", []))));
                // line 207
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEXT"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 209
            echo "
            ";
            // line 210
            if (($context["exists"] ?? null)) {
                // line 211
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 213
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
                // line 219
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
                echo "</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
                echo "</a></li>
                        ";
                // line 221
                if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", []))) {
                    // line 222
                    echo "                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 224
                echo "                    </ul>
                </div>

                <a class=\"button disable-after-click\" href=\"";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "copy"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 228
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 229
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin-pro", [], "array"), "enabled", [])) {
                    // line 230
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 232
                echo "                ";
                if (($context["warn"] ?? null)) {
                    // line 233
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 235
                    echo "                    <a class=\"button disable-after-click\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 237
                echo "            ";
            }
            // line 238
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 240
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 241
            if ((($context["exists"] ?? null) && $this->getAttribute(($context["admin"] ?? null), "multilang", []))) {
                // line 242
                echo "                    ";
                if ($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", [])) {
                    // line 243
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 247
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 248
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", []), $context["langCode"], [], "array");
                        // line 249
                        echo "                                ";
                        if (($context["langCode"] != ($context["page_lang"] ?? null))) {
                            // line 250
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</button>
                                ";
                        }
                        // line 252
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 253
                    echo "                        </ul>
                    ";
                }
                // line 255
                echo "                ";
            }
            // line 256
            echo "            </div>


        ";
        }
        // line 260
        echo "    </div>
    ";
        // line 261
        if ((($context["mode"] ?? null) == "new")) {
            // line 262
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 263
($context["mode"] ?? null) == "edit")) {
            // line 264
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 265
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "title", []), "html", null, true);
            echo "
        </h1>
    ";
        } else {
            // line 268
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 272
    public function block_content($context, array $blocks = [])
    {
        // line 273
        echo "    <div class=\"clear admin-pages\">
    ";
        // line 274
        if ((($context["mode"] ?? null) == "new")) {
            // line 275
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 275)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "pages/page"], "method"), "data" => ($context["context"] ?? null)]));
            // line 276
            echo "    ";
        } elseif ((($context["mode"] ?? null) == "edit")) {
            // line 277
            echo "        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                ";
            // line 280
            if (($this->getAttribute(($context["admin"] ?? null), "multilang", []) && ($context["page_lang"] ?? null))) {
                // line 281
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 283
                if (($context["exists"] ?? null)) {
                    // line 284
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["page_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 286
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["admin_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                }
                // line 288
                echo "                        </button>
                        ";
                // line 289
                if ((($context["exists"] ?? null) && (twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "translatedLanguages", [])) > 1))) {
                    // line 290
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 294
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "translatedLanguages", []));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 295
                        echo "                                    ";
                        if (($context["language"] != ($context["page_lang"] ?? null))) {
                            // line 296
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\" redirect=\"";
                            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["context"] ?? null), "rawRoute", []), "/"), "html", null, true);
                            echo "\" form=\"blueprints\">";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button>
                                    ";
                        }
                        // line 298
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 299
                    echo "                            </ul>
                        ";
                }
                // line 301
                echo "                    </div>
                ";
            }
            // line 303
            echo "
                ";
            // line 304
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", []), "fields", [])) {
                // line 305
                echo "                ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 306
                echo "                ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 307
                echo "                ";
                $context["maxLen"] = max([0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))]);
                // line 308
                echo "                ";
                $context["normalText"] = $context["macro"]->getspanToggle(($context["normalText"] ?? null), ($context["maxLen"] ?? null));
                // line 309
                echo "                ";
                $context["expertText"] = $context["macro"]->getspanToggle(($context["expertText"] ?? null), ($context["maxLen"] ?? null));
                // line 310
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 312
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 313
                echo ($context["normalText"] ?? null);
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 314
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 315
                echo ($context["expertText"] ?? null);
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 320
            echo "
            </div>

            ";
            // line 324
            echo "            ";
            if (($context["current_form_data"] ?? null)) {
                // line 325
                echo "                ";
                $this->getAttribute(($context["context"] ?? null), "header", [0 => $this->getAttribute(($context["current_form_data"] ?? null), "header", [])], "method");
                // line 326
                echo "                ";
                $this->getAttribute(($context["context"] ?? null), "content", [0 => $this->getAttribute(($context["current_form_data"] ?? null), "content", [])], "method");
                // line 327
                echo "            ";
            }
            // line 328
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", []), "fields", []) && ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0"))) {
                // line 329
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 329)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["context"] ?? null), "blueprints", []), "data" => ($context["context"] ?? null)]));
                // line 330
                echo "            ";
            } else {
                // line 331
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 331)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => (("admin/pages/" . ($context["modular"] ?? null)) . "raw")], "method"), "data" => ($context["context"] ?? null)]));
                // line 332
                echo "            ";
            }
            // line 333
            echo "        </div>
    ";
        } else {
            // line 335
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"";
            // line 337
            echo twig_escape_filter($this->env, twig_jsonencode_filter([0 => ["id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")], 1 => ["id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")], 2 => ["id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")]]), "html_attr");
            echo "\" data-filter-types=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute(($context["admin"] ?? null), "types", []), $this->getAttribute(($context["admin"] ?? null), "modularTypes", []))), "html_attr");
            echo "\" data-filter-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["admin"] ?? null), "accessLevels", [])), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 340
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 343
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 344
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                ";
            // line 349
            echo $context["macro"]->getloop(($context["pages"] ?? null), 0, $context);
            echo "
            </ul>
            ";
            // line 351
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 351)->display($context);
            // line 352
            echo "        </div>
    ";
        }
        // line 354
        echo "    </div>

    ";
        // line 356
        if (($context["context"] ?? null)) {
            // line 357
            echo "        ";
            $context["obj_data"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->cloneFunc(($context["context"] ?? null));
            // line 358
            echo "
        ";
            // line 359
            if ((($context["mode"] ?? null) == "edit")) {
                // line 360
                echo "            ";
                $this->getAttribute(($context["obj_data"] ?? null), "folder", [0 => ""], "method");
                // line 361
                echo "        ";
            }
            // line 362
            echo "    ";
        }
        // line 363
        echo "
    ";
        // line 364
        if (((($context["mode"] ?? null) == "list") || (($context["mode"] ?? null) == "edit"))) {
            // line 365
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 366
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 366)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new"], "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-page"]));
            // line 367
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 370
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 370)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new_folder"], "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-folder"]));
            // line 371
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 374
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 374)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/modular_new"], "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-modular"]));
            // line 375
            echo "    </div>

    ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
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
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 378
                echo "        <div class=\"remodal ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "modal_classes", []), ""), "html", null, true);
                echo "\" data-remodal-id=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-options=\"hashTracking: false\">
            ";
                // line 379
                $this->loadTemplate($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "template", []), "partials/blueprints-new.html.twig"), "pages.html.twig", 379)->display(twig_array_merge($context, twig_array_merge(["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => $this->getAttribute($context["add_modal"], "blueprint", [])], "method"), "data" => ($context["context"] ?? null), "form_id" => "add-modal"], $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "with", []), []))));
                // line 380
                echo "        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            echo "    ";
        }
        // line 383
        echo "

    ";
        // line 385
        if ((($context["mode"] ?? null) == "edit")) {
            // line 386
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 388
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 388)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/move"], "method"), "data" => ($context["context"] ?? null)]));
            // line 389
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 391
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate([0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"], "pages.html.twig", 391);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display(twig_array_merge($context, ["data" => ($context["context"] ?? null)]));
            }
            // line 392
            echo "    </div>
    ";
        }
        // line 394
        echo "
    ";
        // line 395
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 395)->display($context);
        // line 396
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 401
        if (($context["context"] ?? null)) {
            // line 402
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "title", []), "html", null, true);
            echo "</strong>
                ";
        }
        // line 404
        echo "            </p>
            <p class=\"bigger\">
              ";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 416
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
        try {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 416);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
        }
        // line 417
        echo "
";
    }

    // line 420
    public function block_bottom($context, array $blocks = [])
    {
        // line 421
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 8
            echo "    ";
            $context["self"] = $this;
            // line 9
            echo "
    ";
            // line 10
            $context["config"] = $this->getAttribute(($context["twig_vars"] ?? null), "config", [], "array");
            // line 11
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
            // line 12
            echo "    ";
            $context["display_field"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "pages_list_display_field", []);
            // line 13
            echo "    ";
            $context["base_url"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative", [], "array");
            // line 14
            echo "    ";
            $context["base_url_relative_frontend"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative_frontend", [], "array");
            // line 15
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_simple", [], "array");
            // line 16
            echo "    ";
            $context["admin_route"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_route", [], "array");
            // line 17
            echo "    ";
            $context["admin_lang"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_lang", [], "array");
            // line 18
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", [], "array");
            // line 19
            echo "    ";
            $context["uri"] = $this->getAttribute(($context["twig_vars"] ?? null), "uri", [], "array");
            // line 20
            echo "
    ";
            // line 21
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "admin", []), "children_display_order", []) == "collection") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "by", []))) {
                // line 22
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "custom", [])) {
                    // line 23
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", [], "method"), "order", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "by", []), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", []), "asc")) : ("asc")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "custom", [])], "method");
                    // line 24
                    echo "        ";
                } else {
                    // line 25
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", [], "method"), "order", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "by", []), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", []), "asc")) : ("asc"))], "method");
                    // line 26
                    echo "        ";
                }
                // line 27
                echo "    ";
            } else {
                // line 28
                echo "        ";
                $context["pcol"] = $this->getAttribute(($context["page"] ?? null), "children", [], "method");
                // line 29
                echo "    ";
            }
            // line 30
            echo "
    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pcol"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 32
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 33
$context["p"], "modular", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULAR") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 34
$context["p"], "routable", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 35
$context["p"], "visible", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 36
$context["p"], "published", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 37
                echo "
        ";
                // line 38
                $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->getPageUrl($context, $context["p"]);
                // line 39
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", []), "html", null, true);
                echo "\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" ";
                // line 42
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo ">
                    <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 43
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", [])) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", [])) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", [])) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", [])) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"";
                // line 47
                echo twig_trim_filter(($context["description"] ?? null), " &bull; ");
                echo "\" class=\"hint--top page-item__content-hint\">
                            ";
                // line 48
                $context["page_label"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($context["p"], "header", []), ($context["display_field"] ?? null)), $this->getAttribute($context["p"], ($context["display_field"] ?? null))), $this->getAttribute($context["p"], "title", [])), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute($context["p"], "slug", [])));
                // line 49
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["page_url"] ?? null), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, ($context["page_label"] ?? null));
                echo "</a>
                        </span>
                        ";
                // line 51
                if ($this->getAttribute($context["p"], "language", [])) {
                    // line 52
                    echo "                            <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", []) == ($context["admin_lang"] ?? null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", []), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 54
                echo "                        ";
                if ($this->getAttribute($context["p"], "home", [])) {
                    // line 55
                    echo "                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        ";
                }
                // line 57
                echo "                    </div>
                    <p class=\"page-route\">";
                // line 58
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) : ($this->getAttribute($context["p"], "route", []))), "html", null, true);
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", [], "method"), "html", null, true);
                echo "</p>
                </div>
                <span class=\"page-item__tools\">
                    ";
                // line 61
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []) != "inline")) {
                    // line 62
                    echo "                        ";
                    $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []);
                    // line 63
                    echo "                        ";
                    $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", []))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", []))))) : ("/"));
                    // line 64
                    echo "                        ";
                    $context["preview_link"] = (($this->getAttribute($context["p"], "routable", [])) ? ((((((("<a class=\"page-view\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                    // line 65
                    echo "                    ";
                } else {
                    // line 66
                    echo "                        ";
                    $context["preview_html"] = (((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", []))))) ? ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", []))))) : ("/"));
                    // line 67
                    echo "                        ";
                    $context["preview_link"] = (($this->getAttribute($context["p"], "routable", [])) ? ((((("<a class=\"page-view\" href=\"" . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                    // line 68
                    echo "                    ";
                }
                // line 69
                echo "                    ";
                echo ($context["preview_link"] ?? null);
                echo "
                    ";
                // line 70
                if (($context["warn"] ?? null)) {
                    // line 71
                    echo "                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 73
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 75
                echo "                </span>
            </div>
            ";
                // line 77
                if (($this->getAttribute($this->getAttribute($context["p"], "children", [], "method"), "count", []) > 0)) {
                    // line 78
                    echo "                <ul class=\"depth-";
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 79
                    echo $context["self"]->getloop($context["p"], (($context["depth"] ?? null) + 1), ($context["twig_vars"] ?? null));
                    echo "
                </ul>
            ";
                }
                // line 82
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1187 => 82,  1181 => 79,  1176 => 78,  1174 => 77,  1170 => 75,  1164 => 73,  1158 => 71,  1156 => 70,  1151 => 69,  1148 => 68,  1145 => 67,  1142 => 66,  1139 => 65,  1136 => 64,  1133 => 63,  1130 => 62,  1128 => 61,  1120 => 58,  1117 => 57,  1113 => 55,  1110 => 54,  1100 => 52,  1098 => 51,  1090 => 49,  1088 => 48,  1084 => 47,  1075 => 43,  1071 => 42,  1066 => 40,  1063 => 39,  1061 => 38,  1058 => 37,  1056 => 36,  1055 => 35,  1054 => 34,  1053 => 33,  1051 => 32,  1047 => 31,  1044 => 30,  1041 => 29,  1038 => 28,  1035 => 27,  1032 => 26,  1029 => 25,  1026 => 24,  1023 => 23,  1020 => 22,  1018 => 21,  1015 => 20,  1012 => 19,  1009 => 18,  1006 => 17,  1003 => 16,  1000 => 15,  997 => 14,  994 => 13,  991 => 12,  988 => 11,  986 => 10,  983 => 9,  980 => 8,  966 => 7,  948 => 4,  935 => 3,  925 => 421,  922 => 420,  917 => 417,  907 => 416,  899 => 411,  895 => 410,  888 => 406,  884 => 404,  876 => 402,  874 => 401,  869 => 399,  864 => 396,  862 => 395,  859 => 394,  855 => 392,  845 => 391,  841 => 389,  839 => 388,  835 => 386,  833 => 385,  829 => 383,  826 => 382,  811 => 380,  809 => 379,  802 => 378,  785 => 377,  781 => 375,  779 => 374,  774 => 371,  772 => 370,  767 => 367,  765 => 366,  762 => 365,  760 => 364,  757 => 363,  754 => 362,  751 => 361,  748 => 360,  746 => 359,  743 => 358,  740 => 357,  738 => 356,  734 => 354,  730 => 352,  728 => 351,  723 => 349,  715 => 344,  711 => 343,  705 => 340,  693 => 337,  689 => 335,  685 => 333,  682 => 332,  679 => 331,  676 => 330,  673 => 329,  670 => 328,  667 => 327,  664 => 326,  661 => 325,  658 => 324,  653 => 320,  645 => 315,  633 => 314,  629 => 313,  617 => 312,  613 => 310,  610 => 309,  607 => 308,  604 => 307,  601 => 306,  598 => 305,  596 => 304,  593 => 303,  589 => 301,  585 => 299,  579 => 298,  569 => 296,  566 => 295,  562 => 294,  556 => 290,  554 => 289,  551 => 288,  545 => 286,  539 => 284,  537 => 283,  533 => 281,  531 => 280,  526 => 277,  523 => 276,  520 => 275,  518 => 274,  515 => 273,  512 => 272,  504 => 268,  498 => 265,  495 => 264,  493 => 263,  488 => 262,  486 => 261,  483 => 260,  477 => 256,  474 => 255,  470 => 253,  464 => 252,  454 => 250,  451 => 249,  448 => 248,  444 => 247,  438 => 243,  435 => 242,  433 => 241,  429 => 240,  425 => 238,  422 => 237,  416 => 235,  408 => 233,  405 => 232,  399 => 230,  397 => 229,  393 => 228,  387 => 227,  382 => 224,  376 => 222,  374 => 221,  370 => 220,  366 => 219,  357 => 213,  353 => 211,  351 => 210,  348 => 209,  340 => 207,  337 => 206,  334 => 205,  332 => 204,  329 => 203,  321 => 201,  318 => 200,  315 => 199,  313 => 198,  310 => 197,  308 => 196,  301 => 194,  296 => 192,  293 => 191,  291 => 190,  288 => 189,  284 => 187,  280 => 185,  274 => 184,  266 => 182,  263 => 181,  260 => 180,  256 => 179,  250 => 175,  248 => 174,  242 => 172,  240 => 171,  235 => 168,  233 => 167,  228 => 164,  222 => 163,  210 => 161,  207 => 160,  202 => 159,  196 => 157,  194 => 156,  190 => 155,  186 => 154,  177 => 148,  172 => 145,  166 => 144,  154 => 142,  151 => 141,  147 => 140,  139 => 138,  137 => 137,  133 => 135,  130 => 134,  123 => 122,  120 => 121,  113 => 118,  110 => 117,  107 => 116,  104 => 115,  101 => 114,  96 => 1,  93 => 131,  91 => 130,  88 => 128,  86 => 127,  84 => 126,  82 => 125,  80 => 112,  78 => 111,  76 => 110,  74 => 109,  72 => 108,  69 => 105,  67 => 104,  63 => 101,  60 => 99,  58 => 98,  56 => 97,  54 => 96,  52 => 95,  50 => 94,  48 => 93,  46 => 92,  43 => 89,  41 => 88,  39 => 86,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}

{% macro loop(page, depth, twig_vars) %}
    {% import _self as self %}

    {% set config = twig_vars['config'] %}
    {% set separator = config.system.param_sep %}
    {% set display_field = config.plugins.admin.pages_list_display_field %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_relative_frontend = twig_vars['base_url_relative_frontend'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}
    {% set uri = twig_vars['uri'] %}

    {% if page.header.admin.children_display_order == 'collection' and page.header.content.order.by %}
        {% if page.header.content.order.custom %}
            {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc'), page.header.content.order.custom) %}
        {% else %}
            {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc')) %}
        {% endif %}
    {% else %}
        {% set pcol = page.children() %}
    {% endif %}

    {% for p in pcol %}
        {% set description = (not p.page ? \"PLUGIN_ADMIN.FOLDER\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.PAGE\"|tu ~ ' &bull; ') ~
            (p.modular ? \"PLUGIN_ADMIN.MODULAR\"|tu ~ ' &bull; ' : '') ~
            (p.routable ? \"PLUGIN_ADMIN.ROUTABLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_ROUTABLE\"|tu ~ ' &bull; ') ~
            (p.visible ? \"PLUGIN_ADMIN.VISIBLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_VISIBLE\"|tu ~ ' &bull; ') ~
            (p.published ? \"PLUGIN_ADMIN.PUBLISHED\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_PUBLISHED\"|tu ~ ' &bull; ') %}

        {% set page_url = getPageUrl(p) %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}}>
                    <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"{{ description|trim(' &bull; ')|raw }}\" class=\"hint--top page-item__content-hint\">
                            {% set page_label = attribute(p.header, display_field)|defined(attribute(p, display_field))|defined(p.title)|default(p.slug|titleize) %}
                            <a href=\"{{ page_url }}\" class=\"page-edit\">{{ page_label|e }}</a>
                        </span>
                        {% if p.language %}
                            <span class=\"badge lang {% if p.language == admin_lang %}info{% endif %}\">{{p.language}}</span>
                        {% endif %}
                        {% if p.home %}
                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        {% endif %}
                    </div>
                    <p class=\"page-route\">{{ p.header.routes.default ?: p.route }} <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> {{ p.template() }}</p>
                </div>
                <span class=\"page-item__tools\">
                    {% if config.plugins.admin.frontend_preview_target != 'inline' %}
                        {% set preview_target = config.plugins.admin.frontend_preview_target %}
                        {% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (p.home ? '' : p.route)) ?: '/' %}
                        {% set preview_link = p.routable ? '<a class=\"page-view\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\"></i></a>' : '' %}
                    {% else %}
                        {% set preview_html = (base_url|rtrim('/') ~ '/preview' ~ (p.home ? '' : p.route)) ?: '/' %}
                        {% set preview_link = p.routable ? '<a class=\"page-view\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\"></i></a>' : '' %}
                    {% endif %}
                    {{ preview_link|raw }}
                    {% if warn %}
                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% else %}
                        <a href=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% endif %}
                </span>
            </div>
            {% if p.children().count > 0 %}
                <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                    {{ self.loop(p, depth + 1, twig_vars) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as macro %}

{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% if uri.param('new') %}
    {% set mode = 'new' %}
{%  elseif context %}
    {% set mode = 'edit' %}
    {% if context.exists %}
        {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}
        {% set exists = true %}
        {% set title = (context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu ) ~ \" \" ~ (context.header.title ?: context.title) %}
    {% else %}
        {% set title = \"PLUGIN_ADMIN.ADD_PAGE\"|tu %}
    {% endif %}
{% else %}
    {% set mode = 'list' %}
    {% set title = \"PLUGIN_ADMIN.PAGES\"|tu %}
{% endif %}

{% set modular = context.modular ? 'modular_' : '' %}
{% set warn = config.plugins.admin.warnings.delete_page %}
{% set admin_lang = admin.session.admin_lang ?: 'en' %}
{% set page_lang = context.language %}
{% set type = 'page' %}

{% block stylesheets %}
    {% if mode == 'edit' %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% if config.plugins.admin.frontend_preview_target != 'inline' %}
    {% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}
    {% set preview_target = config.plugins.admin.frontend_preview_target %}
    {% set preview_link = context.routable ? '<a class=\"button\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}
{% else %}
    {% set preview_html = (base_url|rtrim('/') ~ '/preview' ~ (context.home ? '' : context.route)) ?: '/' %}
    {% set preview_link = context.routable ? '<a class=\"button\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}
{% endif %}

{% block titlebar %}

    <div class=\"button-bar\">
        {% if mode == 'list' %}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>

            {% for key, add_modal in config.plugins.admin.add_modals %}
                {% if add_modal.show_in|defined('bar') == 'bar' %}
                    <a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\"><i class=\"fa fa-plus\"></i> {{ add_modal.label|tu }}</a>
                {% endif %}
            {% endfor %}

            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                    {% if admin.modularTypes is not empty %}
                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                    {% endif %}
                    {% for key, add_modal in config.plugins.admin.add_modals %}
                        {% if add_modal.show_in|defined('bar') == 'dropdown' %}
                            <li><a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\">{{ add_modal.label|tu }}</a></li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>

            {% if admin.multilang %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        {% set langName = admin.siteLanguages[admin_lang] %}
                        {{ langName[:1]|upper ~ langName[1:] }}
                    </button>
                    {%  if admin.languages_enabled|length > 1 %}
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        {% for langCode in admin.languages_enabled %}
                            {% set langName = admin.siteLanguages[langCode] %}
                            {% if langCode != admin_lang %}
                                <li><a href=\"{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}\">{{ langName[:1]|upper ~ langName[1:] }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                    {% endif %}
                </div>
            {% endif %}

        {% elseif mode == 'edit' %}

            {{ preview_link|raw }}

            <a class=\"button\" href=\"{{ base_url }}/pages\" title=\"{{ \"PLUGIN_ADMIN.BACK\"|tu }}\"><i class=\"fa fa-reply\"></i></a>

            {% set siblings = context.parent().children() %}

            {% if not siblings.isFirst(context.path) %}
                {% set sib = siblings.nextSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.PREVIOUS\"|tu }}\"><i class=\"fa fa-chevron-left\"></i></a>
            {% endif %}

            {% if not siblings.isLast(context.path) %}
                {% set sib = siblings.prevSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.NEXT\"|tu }}\"><i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}

            {% if exists %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                        {% if admin.modularTypes is not empty %}
                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                        {% endif %}
                    </ul>
                </div>

                <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> {{ \"PLUGIN_ADMIN.MOVE\"|tu }}</a>
                {% if config.plugins['admin-pro'].enabled %}
                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> {{ \"PLUGIN_ADMIN_PRO.REVISIONS\"|tu }}</a>
                {% endif %}
                {% if warn %}
                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
                {% else %}
                    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                {% endif %}
            {% endif %}

            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
                {% if exists and admin.multilang %}
                    {% if context.untranslatedLanguages %}
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            {% for langCode in context.untranslatedLanguages %}
                                {% set langName = admin.siteLanguages[langCode] %}
                                {% if langCode != page_lang %}
                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"{{langCode}}\" form=\"blueprints\" type=\"submit\">{{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% endif %}
            </div>


        {% endif %}
    </div>
    {% if mode == 'new' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</h1>
    {% elseif mode == 'edit' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            {{ context.title }}
        </h1>
    {% else %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|tu }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"clear admin-pages\">
    {% if mode == 'new' %}
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}
    {% elseif mode == 'edit' %}
        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                {% if admin.multilang and page_lang %}
                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            {% if exists %}
                                {{ page_lang }}
                            {% else %}
                                {{ admin_lang }}
                            {% endif %}
                        </button>
                        {% if exists and context.translatedLanguages|length > 1 %}
                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                {% for language, route in context.translatedLanguages %}
                                    {% if language != page_lang %}
                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"{{language}}\" redirect=\"{{context.rawRoute|trim('/')}}\" form=\"blueprints\">{{ language }}</button>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>
                {% endif %}

                {% if context.blueprints.fields %}
                {% set normalText = \"PLUGIN_ADMIN.NORMAL\"|tu %}
                {% set expertText = \"PLUGIN_ADMIN.EXPERT\"|tu %}
                {% set maxLen = max([normalText|length, expertText|length]) %}
                {% set normalText = macro.spanToggle(normalText, maxLen) %}
                {% set expertText = macro.spanToggle(expertText, maxLen) %}
                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
                        <label for=\"normal\">{{ normalText|raw }}</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
                        <label for=\"expert\">{{ expertText|raw }}</label>
                        <a></a>
                    </div>
                </form>
                {% endif %}

            </div>

            {# Set current form data back into page content #}
            {% if current_form_data %}
                {% do context.header(current_form_data.header) %}
                {% do context.content(current_form_data.content) %}
            {% endif %}
            {% if context.blueprints.fields and admin.session.expert == '0' %}
                {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}
            {% else %}
                {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('admin/pages/'~modular~'raw'), data: context } %}
            {% endif %}
        </div>
    {% else %}
        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"{{ [{'id': 'mode', 'name': 'PLUGIN_ADMIN.PAGE_MODES'|tu}, {'id': 'type', 'name': 'PLUGIN_ADMIN.PAGE_TYPES'|tu}, {'id': 'access', 'name': 'PLUGIN_ADMIN.ACCESS_LEVELS'|tu}] |json_encode|e('html_attr')}}\" data-filter-types=\"{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}\" data-filter-access-levels=\"{{ admin.accessLevels|json_encode|e('html_attr') }}\" placeholder=\"{{ \"PLUGIN_ADMIN.ADD_FILTERS\"|tu }}\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.SEARCH_PAGES\"|tu }}\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|tu }}</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|tu }}</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                {{ macro.loop(pages, 0, _context) }}
            </ul>
            {% include 'partials/page-legend.html.twig' %}
        </div>
    {% endif %}
    </div>

    {% if context %}
        {% set obj_data = clone(context) %}

        {% if mode == 'edit' %}
            {% do obj_data.folder('') %}
        {% endif %}
    {% endif %}

    {% if mode == 'list' or mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/new'), data: obj_data, form_id:'new-page' } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new-folder.html.twig' with { blueprints: admin.blueprints('admin/pages/new_folder'), data: obj_data, form_id:'new-folder' } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/modular_new'), data: obj_data, form_id:'new-modular' } %}
    </div>

    {% for key, add_modal in config.plugins.admin.add_modals %}
        <div class=\"remodal {{ add_modal.modal_classes|defined('') }}\" data-remodal-id=\"modal-add_modal-{{ key }}\" data-remodal-options=\"hashTracking: false\">
            {% include add_modal.template|defined('partials/blueprints-new.html.twig') with { blueprints: admin.blueprints(add_modal.blueprint), data: context, form_id:'add-modal' }|merge(add_modal.with|defined({})) %}
        </div>
    {% endfor %}
    {% endif %}


    {% if mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        {% include ['partials/page-revisions.html.twig', 'empty.html.twig'] ignore missing with { data: context } %}
    </div>
    {% endif %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {% if context %}
                    <strong>{{ \"PLUGIN_ADMIN.PAGE\"|tu }}: {{ context.title }}</strong>
                {% endif %}
            </p>
            <p class=\"bigger\">
              {{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

    {% include 'partials/admin-pro-pages-addons.html.twig' ignore missing %}

{% endblock %}

{% block bottom %}
    {{ parent() }}
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
{% endblock %}
", "pages.html.twig", "/home/jsahostp/public_html/actividad/user/plugins/admin/themes/grav/templates/pages.html.twig");
    }
}
