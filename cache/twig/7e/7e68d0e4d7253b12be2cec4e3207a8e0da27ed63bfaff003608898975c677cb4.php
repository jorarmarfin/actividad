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

/* group-manager.html.twig */
class __TwigTemplate_00d0dfd50d6d4e9b39cb412dcc57779d6452e67a81ea8e1e60308449d015b7bb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["macros"] = $this->loadTemplate("user-manager-macros.html.twig", "group-manager.html.twig", 2)->unwrap();
        // line 4
        $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.GROUP_MANAGER");
        // line 6
        if (($context["group"] ?? null)) {
            // line 7
            $context["group_name"] = (($this->getAttribute(($context["group"] ?? null), "readableName", [])) ? ($this->getAttribute(($context["group"] ?? null), "readableName", [])) : ($this->getAttribute(($context["group"] ?? null), "groupname", [])));
            // line 8
            $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.GROUP") . ": ") . twig_escape_filter($this->env, ($context["group_name"] ?? null)));
        }
        // line 11
        $context["ps"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        // line 32
        $context["appendUrl"] = ("?filter=" . twig_urlencode_filter(($context["filter"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "group-manager.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_titlebar($context, array $blocks = [])
    {
        // line 14
        echo "  ";
        if ( !($context["group"] ?? null)) {
            // line 15
            echo "  <div class=\"button-bar\">
    <a class=\"button\" href=\"#modal-admin-addon-user-manager-new\" data-remodal-target=\"modal-admin-addon-user-manager-new\"><i class=\"fa fa-plus\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "</a>
  </div>

  <h1><i class=\"fa fa-fw fa-user-o\"></i> ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.GROUP_MANAGER"), "html", null, true);
            echo "</h1>
  ";
        } else {
            // line 21
            echo "  <div class=\"button-bar\">
    <a class=\"button\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/group-manager\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
    ";
            // line 23
            if (($context["exists"] ?? null)) {
                // line 24
                echo "    <a class=\"button disable-after-click\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/name") . ($context["ps"] ?? null)) . $this->getAttribute(($context["group"] ?? null), "groupname", [])) . "/task") . ($context["ps"] ?? null)) . "groupDelete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                echo "</a>
    ";
            }
            // line 26
            echo "    <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
  </div>
  <h1><i class=\"fa fa-fw fa-user\"></i> ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.GROUP"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? null), "groupname", []));
            echo "</h1>
  ";
        }
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        // line 35
        echo "  ";
        if ( !($context["group"] ?? null)) {
            // line 36
            echo "  <h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.GROUPS"), "html", null, true);
            echo "</h1>

  ";
            // line 38
            if (($context["filterException"] ?? null)) {
                // line 39
                echo "  <div class=\"notices red\"><h2>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_ERROR"), "html", null, true);
                echo "</h2><p>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["filterException"] ?? null), "message", []), "html", null, true);
                echo "</p></div>
  ";
            }
            // line 41
            echo "
  <div class=\"admin-addon-user-manager-filter\">
    <div class=\"admin-addon-user-manager-filter__input\">
      <form method=\"get\">
        <div class=\"block block-text\">
          <div class=\"form-field vertical\">
            <div class=\"form-data\" data-grav-default=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["filter"] ?? null), "html", null, true);
            echo "\">
              <div class=\"form-input-wrapper\">
                <input name=\"filter\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["filter"] ?? null), "html", null, true);
            echo "\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_GROUPS"), "html", null, true);
            echo "\">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class=\"admin-addon-user-manager-filter__help\">
      <a href=\"https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/blob/master/docs/filter.md#groups\" class=\"button\" target=\"_new\"><i class=\"fa fa-question\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.HELP"), "html", null, true);
            echo "</a>
    </div>
  </div>

  <form method=\"post\">
    <div class=\"admin-addon-user-manager admin-addon-user-manager--list admin-addon-user-manager--group\">
      ";
            // line 64
            if (twig_test_empty(($context["groups"] ?? null))) {
                // line 65
                echo "        <h2>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.NO_RESULTS"), "html", null, true);
                echo "</h2>
      ";
            } else {
                // line 67
                echo "        <div class=\"cell cell--header\">
          <div class=\"user\">
            <div class=\"user__checkbox\"><input type=\"checkbox\" id=\"selectAll\" /></div>
            <div class=\"user__username\">";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NAME"), "html", null, true);
                echo "</div>
            <div class=\"user__actions\">";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.ACTIONS"), "html", null, true);
                echo "</div>
          </div>
        </div>

        ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["groupName"] => $context["group"]) {
                    // line 76
                    echo "        <div class=\"cell\">
          <div class=\"user\">
            <div class=\"user__checkbox\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $context["groupName"], "html", null, true);
                    echo "\" /></div>
            <div class=\"user__username\"><a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, ((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/name") . ($context["ps"] ?? null)) . $this->getAttribute($context["group"], "groupname", [])), "html", null, true);
                    echo "\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "users", []), "html", null, true);
                    echo ") <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "icon", []), "html", null, true);
                    echo "\"></i> ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["group"], "readableName", [])) ? ($this->getAttribute($context["group"], "readableName", [])) : ($context["groupName"])), "html", null, true);
                    echo "</a></div>
            <div class=\"user__actions\">
              <a href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/name") . ($context["ps"] ?? null)) . $this->getAttribute($context["group"], "groupname", [])) . "/task") . ($context["ps"] ?? null)) . "groupDelete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"delete\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
            </div>
          </div>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "      ";
            }
            // line 87
            echo "    </div>

    <div class=\"admin-addon-user-manager-bulk-action\">
      <a data-remodal-target=\"modal-admin-addon-user-manager-bulk\" class=\"button\">";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.BULK_ACTION"), "html", null, true);
            echo "</a>
    </div>
  </form>

  ";
            // line 94
            echo $context["macros"]->getpagination(($context["pagination"] ?? null), $this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method"), ($context["ps"] ?? null), ($context["appendUrl"] ?? null));
            echo "

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-new\" data-remodal-options=\"hashTracking: false\">
    <form onsubmit='handleAdminAddonUserManagerSubmit(this); return false;'>
      ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 99
                echo "        ";
                if ($this->getAttribute($context["field"], "type", [])) {
                    // line 100
                    echo "          ";
                    $context["value"] = $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                    // line 101
                    echo "          <div class=\"block block-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", []), "html", null, true);
                    echo "\">
            ";
                    // line 102
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "group-manager.html.twig", 102)->display($context);
                    // line 103
                    echo "          </div>
        ";
                }
                // line 105
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "
      <div class=\"button-bar\">
        <button class=\"button primary\" >";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</button>
      </div>
    </form>
  </div>

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-bulk\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerBulkSubmit(this);'>
      ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bulkFields"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 116
                echo "        ";
                if ($this->getAttribute($context["field"], "type", [])) {
                    // line 117
                    echo "          <div class=\"block block-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", []), "html", null, true);
                    echo "\">
            ";
                    // line 118
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "group-manager.html.twig", 118)->display($context);
                    // line 119
                    echo "          </div>
        ";
                }
                // line 121
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "
      <div class=\"button-bar\">
        <button class=\"button primary\" >";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</button>
      </div>
    </form>
  </div>

  <script>
    function handleAdminAddonUserManagerSubmit(form) {
      var name = form.querySelector('[name=name]').value;
      window.location = '";
            // line 132
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/group-manager/name";
            echo twig_escape_filter($this->env, ($context["ps"] ?? null), "html", null, true);
            echo "' + name;
    }

    var selectAllEle = document.getElementById('selectAll');
    var selectEles = document.querySelectorAll('input[name=\"selected[]\"]');
    if (selectAllEle) {
      selectAllEle.addEventListener('change', function(e) {
        for (var i = 0; i < selectEles.length; i++) {
          selectEles[i].checked = this.checked;
        }
      });
    }

    function handleAdminAddonUserManagerBulkSubmit(form) {
      for (var i = 0; i < selectEles.length; i++) {
        form.appendChild(selectEles[i]);
      }
    }
  </script>
  ";
        } else {
            // line 152
            echo "  <h1>";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["group"] ?? null), "readableName", [])) ? ($this->getAttribute(($context["group"] ?? null), "readableName", [])) : ($this->getAttribute(($context["group"] ?? null), "groupname", []))), "html", null, true);
            echo "</h1>

  ";
            // line 154
            $this->loadTemplate("partials/blueprints.html.twig", "group-manager.html.twig", 154)->display(twig_array_merge($context, ["data" => ($context["group"] ?? null), "blueprints" => $this->getAttribute(($context["group"] ?? null), "blueprints", [])]));
            // line 155
            echo "
  <div class=\"remodal\" data-remodal-id=\"changes\">
    <form>
      <h1>";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE"), "html", null, true);
            echo "</h1>
      <p class=\"bigger\">
        ";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC"), "html", null, true);
            echo "
      </p>
      <br>
      <div class=\"button-bar\">
        <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
            echo "</a>
        <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</a>
      </div>
    </form>
  </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "group-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 165,  422 => 164,  415 => 160,  410 => 158,  405 => 155,  403 => 154,  397 => 152,  372 => 132,  361 => 124,  357 => 122,  343 => 121,  339 => 119,  337 => 118,  332 => 117,  329 => 116,  312 => 115,  302 => 108,  298 => 106,  284 => 105,  280 => 103,  278 => 102,  273 => 101,  270 => 100,  267 => 99,  250 => 98,  243 => 94,  236 => 90,  231 => 87,  228 => 86,  215 => 81,  204 => 79,  200 => 78,  196 => 76,  192 => 75,  185 => 71,  181 => 70,  176 => 67,  170 => 65,  168 => 64,  159 => 58,  145 => 49,  140 => 47,  132 => 41,  124 => 39,  122 => 38,  116 => 36,  113 => 35,  110 => 34,  101 => 28,  95 => 26,  87 => 24,  85 => 23,  79 => 22,  76 => 21,  71 => 19,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  51 => 1,  49 => 32,  47 => 11,  44 => 8,  42 => 7,  40 => 6,  38 => 4,  36 => 2,  30 => 1,);
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
{% import 'user-manager-macros.html.twig' as macros %}

{% set title = \"PLUGIN_ADMIN_ADDON_USER_MANAGER.GROUP_MANAGER\"|tu %}

{% if group %}
{% set group_name = group.readableName ?: group.groupname %}
{% set title = \"PLUGIN_ADMIN_ADDON_USER_MANAGER.GROUP\"|tu ~ \": \" ~ group_name|e %}
{% endif %}

{% set ps = config.system.param_sep %}

{% block titlebar %}
  {% if not group %}
  <div class=\"button-bar\">
    <a class=\"button\" href=\"#modal-admin-addon-user-manager-new\" data-remodal-target=\"modal-admin-addon-user-manager-new\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}</a>
  </div>

  <h1><i class=\"fa fa-fw fa-user-o\"></i> {{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.GROUP_MANAGER\"|tu }}</h1>
  {% else %}
  <div class=\"button-bar\">
    <a class=\"button\" href=\"{{ base_url }}/group-manager\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
    {% if exists %}
    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/name' ~ ps ~ group.groupname ~ '/task' ~ ps ~ 'groupDelete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
    {% endif %}
    <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
  </div>
  <h1><i class=\"fa fa-fw fa-user\"></i> {{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.GROUP\"|tu }}: {{ group.groupname|e }}</h1>
  {% endif %}
{% endblock %}

{% set appendUrl = '?filter=' ~ filter|url_encode %}

{% block content %}
  {% if not group %}
  <h1>{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.GROUPS\"|tu }}</h1>

  {% if filterException %}
  <div class=\"notices red\"><h2>{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_ERROR\"|tu }}</h2><p>{{ filterException.message }}</p></div>
  {% endif %}

  <div class=\"admin-addon-user-manager-filter\">
    <div class=\"admin-addon-user-manager-filter__input\">
      <form method=\"get\">
        <div class=\"block block-text\">
          <div class=\"form-field vertical\">
            <div class=\"form-data\" data-grav-default=\"{{ filter }}\">
              <div class=\"form-input-wrapper\">
                <input name=\"filter\" value=\"{{ filter }}\" type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_GROUPS\"|tu }}\">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class=\"admin-addon-user-manager-filter__help\">
      <a href=\"https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/blob/master/docs/filter.md#groups\" class=\"button\" target=\"_new\"><i class=\"fa fa-question\"></i> {{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.HELP\"|tu }}</a>
    </div>
  </div>

  <form method=\"post\">
    <div class=\"admin-addon-user-manager admin-addon-user-manager--list admin-addon-user-manager--group\">
      {% if groups is empty %}
        <h2>{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.NO_RESULTS\"|tu }}</h2>
      {% else %}
        <div class=\"cell cell--header\">
          <div class=\"user\">
            <div class=\"user__checkbox\"><input type=\"checkbox\" id=\"selectAll\" /></div>
            <div class=\"user__username\">{{ \"PLUGIN_ADMIN.NAME\"|tu }}</div>
            <div class=\"user__actions\">{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.ACTIONS\"|tu }}</div>
          </div>
        </div>

        {% for groupName, group in groups %}
        <div class=\"cell\">
          <div class=\"user\">
            <div class=\"user__checkbox\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ groupName }}\" /></div>
            <div class=\"user__username\"><a href=\"{{ uri.route(true) ~ '/name' ~ ps ~ group.groupname }}\">({{ group.users }}) <i class=\"fa fa-{{ group.icon}}\"></i> {{ group.readableName ?: groupName }}</a></div>
            <div class=\"user__actions\">
              <a href=\"{{ uri.addNonce(uri.route(true)  ~ '/name' ~ ps ~ group.groupname ~ '/task' ~ ps ~ 'groupDelete', 'admin-form', 'admin-nonce') }}\" class=\"delete\">{{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
            </div>
          </div>
        </div>
        {% endfor %}
      {% endif %}
    </div>

    <div class=\"admin-addon-user-manager-bulk-action\">
      <a data-remodal-target=\"modal-admin-addon-user-manager-bulk\" class=\"button\">{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.BULK_ACTION\"|tu }}</a>
    </div>
  </form>

  {{ macros.pagination(pagination, uri.route(true), ps, appendUrl) }}

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-new\" data-remodal-options=\"hashTracking: false\">
    <form onsubmit='handleAdminAddonUserManagerSubmit(this); return false;'>
      {% for field in fields %}
        {% if field.type %}
          {% set value = data.value(field.name) %}
          <div class=\"block block-{{field.type}}\">
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
          </div>
        {% endif %}
      {% endfor %}

      <div class=\"button-bar\">
        <button class=\"button primary\" >{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
      </div>
    </form>
  </div>

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-bulk\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerBulkSubmit(this);'>
      {% for field in bulkFields %}
        {% if field.type %}
          <div class=\"block block-{{field.type}}\">
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
          </div>
        {% endif %}
      {% endfor %}

      <div class=\"button-bar\">
        <button class=\"button primary\" >{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
      </div>
    </form>
  </div>

  <script>
    function handleAdminAddonUserManagerSubmit(form) {
      var name = form.querySelector('[name=name]').value;
      window.location = '{{ base_url }}/group-manager/name{{ ps }}' + name;
    }

    var selectAllEle = document.getElementById('selectAll');
    var selectEles = document.querySelectorAll('input[name=\"selected[]\"]');
    if (selectAllEle) {
      selectAllEle.addEventListener('change', function(e) {
        for (var i = 0; i < selectEles.length; i++) {
          selectEles[i].checked = this.checked;
        }
      });
    }

    function handleAdminAddonUserManagerBulkSubmit(form) {
      for (var i = 0; i < selectEles.length; i++) {
        form.appendChild(selectEles[i]);
      }
    }
  </script>
  {% else %}
  <h1>{{ group.readableName ?: group.groupname }}</h1>

  {% include 'partials/blueprints.html.twig' with { data: group, blueprints: group.blueprints } %}

  <div class=\"remodal\" data-remodal-id=\"changes\">
    <form>
      <h1>{{ \"PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE\"|tu }}</h1>
      <p class=\"bigger\">
        {{ \"PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC\"|tu }}
      </p>
      <br>
      <div class=\"button-bar\">
        <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
        <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
      </div>
    </form>
  </div>
  {% endif %}
{% endblock %}
", "group-manager.html.twig", "/home/jsahostp/public_html/actividad/user/plugins/admin-addon-user-manager/templates/group-manager.html.twig");
    }
}
