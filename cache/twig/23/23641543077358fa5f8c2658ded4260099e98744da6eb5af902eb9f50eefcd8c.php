<?php

/* partials/footer.html.twig */
class __TwigTemplate_9308948b8baeb70b5deb246848c0b80c7125653e8f0ccecd012dc1722377657e extends Twig_Template
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
        echo "<footer>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <ul class=\"social-links\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i></a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </ul>
            <ul class=\"copyright\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                <li>";
            echo $this->getAttribute($context["item"], "line", array());
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
        <div id=\"go-top\"><a class=\"smoothscroll\" title=\"Back to Top\" href=\"#home\"><i class=\"icon-up-open\"></i></a></div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  48 => 11,  44 => 10,  40 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <footer>*/
/*     <div class="row">*/
/*         <div class="twelve columns">*/
/*             <ul class="social-links">*/
/*                 {% for item in site.social %}*/
/*                 <li><a href="{{ item.url }}"><i class="fa fa-{{ item.icon }}"></i></a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             <ul class="copyright">*/
/*                 {% for item in site.copyright %}*/
/*                 <li>{{ item.line }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>*/
/*     </div>*/
/* </footer>*/
/* */
