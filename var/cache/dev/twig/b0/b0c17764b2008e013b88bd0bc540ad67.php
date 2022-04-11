<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/index.html.twig */
class __TwigTemplate_0959fd73b327aceb7115fb8d5698360d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MainController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .btn{margin-top: 15px;}
</style>

<div class=\"example-wrapper\">
    <h1>DoroKritek_Task ✅</h1>
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "dateInvoice", [], "any", false, false, false, 15), 'row');
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "customerId", [], "any", false, false, false, 16), 'row');
        echo "

    <h3>Lines</h3>
    <div class=\"row invoicelines\" data-index=\"";
        // line 19
        (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "invoicelines", [], "any", false, false, false, 19)) > 0)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "invoicelines", [], "any", false, false, false, 19)), "vars", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19) + 1), "html", null, true))) : (print (0)));
        echo "\"
    data-prototype=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "invoicelines", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "prototype", [], "any", false, false, false, 20), 'widget'), "html_attr");
        echo "\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "invoicelines", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 22
            echo "            <div class=\"col-4\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["line"], "description", [], "any", false, false, false, 22), 'row');
            echo "</div>
            <div class=\"col-4\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 23), 'row');
            echo "</div>
            <div class=\"col-4\">";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["line"], "amount", [], "any", false, false, false, 24), 'row');
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        
        
    </div>
    <button type=\"button\" class=\"add_item_link btn btn-secondary\" data-collection-holder-class=\"invoicelines\">Add a line</button>
";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
</div>

<script type=\"text/javascript\">
                
                    
                    const addFormToCollection = (e) => {
                    
                    const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);
                    console.log(collectionHolder.dataset.index);
                    const item = document.createElement(\"div\");

                    item.innerHTML = collectionHolder
                        .dataset
                        .prototype
                        .replace(
                        /__name__/,
                        collectionHolder.dataset.index
                        );
                    collectionHolder.appendChild(item);
                    el = document.getElementById('invoice_form_invoicelines_' + collectionHolder.dataset.index);
                    el.classList.add('row');
                    for (var i = 0; i < el.children.length; i++) {
                        var child = el.children[i];
                        if (child.tagName == 'DIV') {
                            child.classList.add('col-4');
                        }
                    }

                    collectionHolder.dataset.index++;
                    };

                    document.querySelectorAll('.add_item_link').forEach(btn => {
                    btn.addEventListener(\"click\", addFormToCollection);
                    
                });
            </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 30,  141 => 26,  133 => 24,  129 => 23,  124 => 22,  120 => 21,  116 => 20,  112 => 19,  106 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .btn{margin-top: 15px;}
</style>

<div class=\"example-wrapper\">
    <h1>DoroKritek_Task ✅</h1>
    {{ form_start(form) }}
    {{ form_row(form.dateInvoice) }}
    {{ form_row(form.customerId) }}

    <h3>Lines</h3>
    <div class=\"row invoicelines\" data-index=\"{{ form.invoicelines|length > 0 ? form.invoicelines|last.vars.name + 1 : 0 }}\"
    data-prototype=\"{{ form_widget(form.invoicelines.vars.prototype)|e('html_attr') }}\">
        {% for line in form.invoicelines %}
            <div class=\"col-4\">{{ form_row(line.description) }}</div>
            <div class=\"col-4\">{{ form_row(line.quantity) }}</div>
            <div class=\"col-4\">{{ form_row(line.amount) }}</div>
        {% endfor %}
        
        
    </div>
    <button type=\"button\" class=\"add_item_link btn btn-secondary\" data-collection-holder-class=\"invoicelines\">Add a line</button>
{{ form_end(form) }}
</div>

<script type=\"text/javascript\">
                
                    
                    const addFormToCollection = (e) => {
                    
                    const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);
                    console.log(collectionHolder.dataset.index);
                    const item = document.createElement(\"div\");

                    item.innerHTML = collectionHolder
                        .dataset
                        .prototype
                        .replace(
                        /__name__/,
                        collectionHolder.dataset.index
                        );
                    collectionHolder.appendChild(item);
                    el = document.getElementById('invoice_form_invoicelines_' + collectionHolder.dataset.index);
                    el.classList.add('row');
                    for (var i = 0; i < el.children.length; i++) {
                        var child = el.children[i];
                        if (child.tagName == 'DIV') {
                            child.classList.add('col-4');
                        }
                    }

                    collectionHolder.dataset.index++;
                    };

                    document.querySelectorAll('.add_item_link').forEach(btn => {
                    btn.addEventListener(\"click\", addFormToCollection);
                    
                });
            </script>
{% endblock %}
", "main/index.html.twig", "/home/doro/Bureau/DoroKritek_Task/templates/main/index.html.twig");
    }
}
