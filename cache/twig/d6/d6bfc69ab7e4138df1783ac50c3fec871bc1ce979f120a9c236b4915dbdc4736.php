<?php

/* partials/navigation.html.twig */
class __TwigTemplate_23b3d6f9ebb47b34bb7a05c939e9e14be4dc1af493d673276c76fdba036157f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav id=\"nav-wrap\">
    <a class=\"mobile-btn\" href=\"#nav-wrap\" title=\"Show navigation\">Show navigation</a>
    <a class=\"mobile-btn\" href=\"#close\" title=\"Hide navigation\">Hide navigation</a>

    ";
        // line 5
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 6
        echo "    ";
        // line 7
        echo "
    <ul id=\"nav\" class=\"nav\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 10
            echo "            ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 11
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 12
                echo "                ";
                if (twig_in_filter("home", $this->getAttribute($context["page"], "menu", array()))) {
                    // line 13
                    echo "                <li class=\"current\">
                    <a class=\"smoothscroll\" href=\"#home\">
                        ";
                    // line 15
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
                    </a>
                </li>
                ";
                } else {
                    // line 19
                    echo "                <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                    <a href=\"";
                    // line 20
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\">
                        ";
                    // line 21
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
                    </a>
                </li>
                ";
                }
                // line 25
                echo "            ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 28
            echo "            <li>
                <a href=\"";
            // line 29
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 33
            echo "            ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 34
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("current") : (""));
                // line 35
                echo "                <li class=\"";
                echo (isset($context["current_module"]) ? $context["current_module"] : null);
                echo "\">
                    <a class=\"smoothscroll\" href=\"#";
                // line 36
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
                </li>
            ";
            }
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </ul>
</nav>
";
    }

    // line 6
    public function getpageLinkName($__text__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 6,  131 => 40,  125 => 39,  117 => 36,  112 => 35,  109 => 34,  106 => 33,  101 => 32,  90 => 29,  87 => 28,  82 => 27,  76 => 26,  73 => 25,  66 => 21,  62 => 20,  57 => 19,  50 => 15,  46 => 13,  43 => 12,  40 => 11,  37 => 10,  33 => 9,  29 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <nav id="nav-wrap">*/
/*     <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>*/
/*     <a class="mobile-btn" href="#close" title="Hide navigation">Hide navigation</a>*/
/* */
/*     {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}*/
/*     {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}*/
/* */
/*     <ul id="nav" class="nav">*/
/*         {% for page in pages.children %}*/
/*             {% if page.visible %}*/
/*                 {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}*/
/*                 {% if 'home' in page.menu %}*/
/*                 <li class="current">*/
/*                     <a class="smoothscroll" href="#home">*/
/*                         {{ page.menu }}*/
/*                     </a>*/
/*                 </li>*/
/*                 {% else %}*/
/*                 <li class="{{ current_page }}">*/
/*                     <a href="{{ page.url }}">*/
/*                         {{ page.menu }}*/
/*                     </a>*/
/*                 </li>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         {% for mitem in site.menu %}*/
/*             <li>*/
/*                 <a href="{{ mitem.link }}">{{ mitem.text }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/*         {% for module in page.collection() %}*/
/*             {% if not module.header.hidemenu %}*/
/*                 {% set current_page = (module.active or module.activeChild) ? 'current' : '' %}*/
/*                 <li class="{{ current_module }}">*/
/*                     <a class="smoothscroll" href="#{{ _self.pageLinkName(module.menu) }}">{{ module.menu }}</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </ul>*/
/* </nav>*/
/* */
