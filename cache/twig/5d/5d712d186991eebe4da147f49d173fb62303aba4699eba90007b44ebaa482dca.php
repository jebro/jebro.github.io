<?php

/* modular/form.html.twig */
class __TwigTemplate_4965ce1c299e6f6dd5cfdf97660f744fc210467252cc1a6ff59b46285386ce3d extends Twig_Template
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
        echo "<section id=\"contact\">
    <div class=\"row section-head\">
        <div class=\"two columns header-col\">
            <h1><span>";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</span></h1>
        </div>
        <div class=\"ten columns\">
            <p class=\"lead\">";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lead", array());
        echo "</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"eight columns\">
            ";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            ";
        // line 13
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 13)->display($context);
        // line 14
        echo "        </div>
        <aside class=\"four columns footer-widgets\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "widgets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 17
            echo "            <div class=\"widget widget_contact\">
                <h4>";
            // line 18
            echo $this->getAttribute($context["widget"], "title", array());
            echo "</h4>
                <p class=\"address\">
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "content", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "                    ";
                echo $this->getAttribute($context["item"], "line", array());
                echo " <br />
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            <div class=\"widget widget_tweets\">
                <h4 class=\"widget-title\">Latest Tweets</h4>
                <div id=\"tw-widget1\">
                </div>
            </div>
        </aside>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  73 => 23,  64 => 21,  60 => 20,  55 => 18,  52 => 17,  48 => 16,  44 => 14,  42 => 13,  38 => 12,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <section id="contact">*/
/*     <div class="row section-head">*/
/*         <div class="two columns header-col">*/
/*             <h1><span>{{ page.header.title }}</span></h1>*/
/*         </div>*/
/*         <div class="ten columns">*/
/*             <p class="lead">{{ page.header.lead }}</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="eight columns">*/
/*             {{ page.content }}*/
/*             {% include "forms/form.html.twig" %}*/
/*         </div>*/
/*         <aside class="four columns footer-widgets">*/
/*             {% for widget in page.header.widgets %}*/
/*             <div class="widget widget_contact">*/
/*                 <h4>{{ widget.title }}</h4>*/
/*                 <p class="address">*/
/*                     {% for item in widget.content %}*/
/*                     {{ item.line }} <br />*/
/*                     {% endfor %}*/
/*                 </p>*/
/*             </div>*/
/*             {% endfor %}*/
/*             <div class="widget widget_tweets">*/
/*                 <h4 class="widget-title">Latest Tweets</h4>*/
/*                 <div id="tw-widget1">*/
/*                 </div>*/
/*             </div>*/
/*         </aside>*/
/*     </div>*/
/* </section>*/
/* */
