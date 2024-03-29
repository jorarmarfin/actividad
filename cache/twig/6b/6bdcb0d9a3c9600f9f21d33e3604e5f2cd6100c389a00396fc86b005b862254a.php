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

/* forms/fields/permissions/permissions.html.twig */
class __TwigTemplate_845c548028922c566ee02113df37f8d8d535b74a601447c31f757af5c6c47801 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 8
        $context["macro"] = $this;
        // line 10
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 11
        $context["value"] = (((($context["value"] ?? null) === false)) ? (0) : (($context["value"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/permissions/permissions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 14
        echo "    data-grav-disabled=\"";
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
";
    }

    // line 18
    public function block_input($context, array $blocks = [])
    {
        // line 19
        echo "    <div class=\"permissions-container\">
        ";
        // line 20
        $context["permissions"] = $this->getAttribute(($context["admin"] ?? null), "getPermissions", []);
        // line 21
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["index_existing_permission"] => $context["value_existing_permission"]) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value_existing_permission"]);
            foreach ($context['_seq'] as $context["index_segment1"] => $context["value_segment1"]) {
                // line 23
                echo "                ";
                $context["permissions"] = twig_array_merge(($context["permissions"] ?? null), [(($context["index_existing_permission"] . ".") . $context["index_segment1"]) => "boolean"]);
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index_segment1'], $context['value_segment1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index_existing_permission'], $context['value_existing_permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["permission"] => $context["type"]) {
            // line 28
            echo "            <div class=\"permission-container\">
                ";
            // line 29
            $context["permission_segments"] = twig_split_filter($this->env, $context["permission"], ".");
            // line 30
            echo "                ";
            $context["permission_value"] = $this->getAttribute($this->getAttribute(($context["value"] ?? null), $this->getAttribute(($context["permission_segments"] ?? null), 0, [], "array"), [], "array"), $this->getAttribute(($context["permission_segments"] ?? null), 1, [], "array"), [], "array");
            // line 31
            echo "                ";
            if (twig_in_filter(($context["permission_value"] ?? null), [0 => "on", 1 => "true", 2 => 1])) {
                // line 32
                echo "                    ";
                $context["permission_value"] = "true";
                // line 33
                echo "                ";
            }
            // line 34
            echo "
                <input type=\"text\" class=\"medium permission-value\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
            echo "\" />

                <div class=\"switch-toggle switch-grav medium switch-3\">
                    ";
            // line 38
            $context["options"] = ["true" => "PLUGIN_ADMIN.YES", "false" => "PLUGIN_ADMIN.NO", "" => "PLUGIN_ADMIN.NOT_SET"];
            // line 39
            echo "
                    ";
            // line 40
            $context["maxLen"] = 0;
            // line 41
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 42
                echo "                        ";
                $context["translation"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"])));
                // line 43
                echo "                        ";
                $context["maxLen"] = max(twig_length_filter($this->env, ($context["translation"] ?? null)), ($context["maxLen"] ?? null));
                // line 44
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 47
                echo "                        ";
                $context["id"] = (((("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . ".") . $context["permission"]) . $context["key"]);
                // line 48
                echo "                        ";
                $context["translation"] = twig_trim_filter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"]))));
                // line 49
                echo "
                        <input type=\"radio\"
                            value=\"";
                // line 51
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                            id=\"";
                // line 52
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"
                            name=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])) . ".") . $context["permission"])), "html", null, true);
                echo "\"
                            class=\"";
                // line 54
                echo ((("true" == ("" . $context["key"]))) ? ("highlight") : (""));
                echo "\"
                            ";
                // line 55
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter($context["key"]) == ("" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(($context["permission_value"] ?? null))))) {
                    // line 56
                    echo "                                checked=\"checked\"
                            ";
                }
                // line 58
                echo "                            ";
                if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
                    echo "required=\"required\"";
                }
                // line 59
                echo "                        />

                        <label for=\"";
                // line 61
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">";
                echo twig_trim_filter($context["macro"]->getspanToggle(($context["translation"] ?? null), ($context["maxLen"] ?? null)));
                echo "</label>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                    <a></a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['permission'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
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
            $context["space"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 5
            echo "    ";
            echo ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
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

    public function getTemplateName()
    {
        return "forms/fields/permissions/permissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 5,  236 => 4,  223 => 3,  218 => 67,  209 => 63,  199 => 61,  195 => 59,  190 => 58,  186 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  168 => 51,  164 => 49,  161 => 48,  158 => 47,  154 => 46,  151 => 45,  145 => 44,  142 => 43,  139 => 42,  134 => 41,  132 => 40,  129 => 39,  127 => 38,  121 => 35,  118 => 34,  115 => 33,  112 => 32,  109 => 31,  106 => 30,  104 => 29,  101 => 28,  97 => 27,  94 => 26,  88 => 25,  82 => 24,  79 => 23,  74 => 22,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  55 => 15,  50 => 14,  47 => 13,  42 => 1,  40 => 11,  38 => 10,  36 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% macro spanToggle(input, length) %}
    {% set space = repeat('&nbsp;&nbsp;', (length - input|length) / 2) %}
    {{ (space ~ input ~ space)|raw }}
{% endmacro %}

{% import _self as macro %}

{% set value = (value is null ? field.default : value) %}
{% set value = (value is same as(false) ? 0 : value) %}

{% block global_attributes %}
    data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
    data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
{% endblock %}

{% block input %}
    <div class=\"permissions-container\">
        {% set permissions = admin.getPermissions %}
        {% for index_existing_permission, value_existing_permission in value %}
            {% for index_segment1, value_segment1 in value_existing_permission %}
                {% set permissions = permissions|merge({ (index_existing_permission ~ \".\" ~ index_segment1): \"boolean\"}) %}
            {% endfor %}
        {% endfor %}

        {% for permission, type in permissions %}
            <div class=\"permission-container\">
                {% set permission_segments = permission|split('.') %}
                {% set permission_value = value[permission_segments[0]][permission_segments[1]] %}
                {% if permission_value in ['on', 'true', 1] %}
                    {% set permission_value = 'true' %}
                {% endif %}

                <input type=\"text\" class=\"medium permission-value\" value=\"{{ permission }}\" />

                <div class=\"switch-toggle switch-grav medium switch-3\">
                    {% set options = { true: 'PLUGIN_ADMIN.YES', false: 'PLUGIN_ADMIN.NO', '': 'PLUGIN_ADMIN.NOT_SET' } %}

                    {% set maxLen = 0 %}
                    {% for value, text in options %}
                        {% set translation = grav.twig.twig.filters['tu'] is defined ? text|tu : text|t %}
                        {% set maxLen = max(translation|length, maxLen) %}
                    {% endfor %}

                    {% for key, text in options %}
                        {% set id = \"toggle_\" ~ field.name ~ \".\" ~ permission ~ key %}
                        {% set translation = (grav.twig.twig.filters['tu'] is defined ? text|tu : text|t)|trim %}

                        <input type=\"radio\"
                            value=\"{{ key }}\"
                            id=\"{{ id }}\"
                            name=\"{{ (scope ~ field.name ~ \".\" ~ permission)|fieldName }}\"
                            class=\"{{ 'true' == '' ~ key ? 'highlight' : '' }}\"
                            {% if key|fieldName == '' ~ permission_value|fieldName %}
                                checked=\"checked\"
                            {% endif %}
                            {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                        />

                        <label for=\"{{ id }}\">{{ (macro.spanToggle(translation, maxLen)|trim)|raw }}</label>
                    {% endfor %}
                    <a></a>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}


", "forms/fields/permissions/permissions.html.twig", "/home/jsahostp/public_html/actividad/user/plugins/admin/themes/grav/templates/forms/fields/permissions/permissions.html.twig");
    }
}
