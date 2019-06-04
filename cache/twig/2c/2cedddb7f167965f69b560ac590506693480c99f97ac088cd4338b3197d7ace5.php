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

/* reports/yamllinter.html.twig */
class __TwigTemplate_1d770699695ad7f621dd36f22d5e4d70f7cbfaf248d515d43b5695daa39c35f3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["result"] ?? null)) {
            // line 2
            echo "    <div class=\"alert warning\"><strong>YAML Linting:</strong> Found <strong>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["result"] ?? null)), "html", null, true);
            echo "</strong> linting errors</div>
    <table>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
            foreach ($context['_seq'] as $context["path"] => $context["error"]) {
                // line 5
                echo "            ";
                $context["page_path"] = (($context["base_path"] ?? null) . $this->getAttribute(pathinfo($context["path"]), "dirname", []));
                // line 6
                echo "            ";
                $context["page"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", []), "get", [0 => ($context["page_path"] ?? null)], "method");
                // line 7
                echo "            <tr>
                <td><i class=\"fa fa-file-text-o\"></i>
                    ";
                // line 9
                if ($this->getAttribute(($context["page"] ?? null), "url", [])) {
                    // line 10
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, ((($context["base_url"] ?? null) . "/pages") . $this->getAttribute(($context["page"] ?? null), "route", [])), "html", null, true);
                    echo "/mode:expert\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "route", []), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 12
                    echo "                        ";
                    echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                    echo "
                    ";
                }
                // line 14
                echo "                </td>
                <td class=\"double\">";
                // line 15
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </table>
";
        } else {
            // line 20
            echo "    <div class=\"alert info\"><strong>YAML Linting:</strong> No errors found.</div>
";
        }
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "reports/yamllinter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  84 => 20,  80 => 18,  71 => 15,  68 => 14,  62 => 12,  54 => 10,  52 => 9,  48 => 7,  45 => 6,  42 => 5,  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if result %}
    <div class=\"alert warning\"><strong>YAML Linting:</strong> Found <strong>{{ result|length }}</strong> linting errors</div>
    <table>
        {% for path, error in result %}
            {% set page_path = base_path ~ (path|pathinfo).dirname %}
            {% set page = grav.pages.get(page_path) %}
            <tr>
                <td><i class=\"fa fa-file-text-o\"></i>
                    {% if page.url %}
                        <a href=\"{{ base_url ~ '/pages' ~ page.route }}/mode:expert\">{{ page.route }}</a>
                    {% else %}
                        {{ path }}
                    {% endif %}
                </td>
                <td class=\"double\">{{ error }}</td>
            </tr>
        {% endfor %}
    </table>
{% else %}
    <div class=\"alert info\"><strong>YAML Linting:</strong> No errors found.</div>
{% endif %}

", "reports/yamllinter.html.twig", "/home/jsahostp/public_html/actividad/user/plugins/admin/themes/grav/templates/reports/yamllinter.html.twig");
    }
}
