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

/* base.html.twig */
class __TwigTemplate_29e83b98b3892349a68580f3d2206d148cae490df982519b28e5979d553ff6cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "header.html.twig", array(), true, false, true);
        echo "

        <ul>
            <li><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        echo "\" title=\"blog_index\" >blog_index</a></li>
            <li><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hello_index");
        echo "\" title=\"hello_index\" >hello_index</a></li>
            <li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hello_index_name", ["name" => "Jean"]);
        echo "\" title=\"hello_index_name\" >hello_index_name</a></li>
            <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hello_index_local");
        echo "\" title=\"hello_index_local\" >hello_index_local</a></li>
            <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service");
        echo "\" title=\"service\" >Service</a></li>
            <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("serviceII");
        echo "\" title=\"serviceII\" >ServiceII</a></li>
             <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form");
        echo "\" title=\"form\" >form</a></li>
        </ul>
    </body>
</html>

";
        // line 15
        echo twig_include($this->env, $context, "footer.html.twig", array(), true, false, true);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html.twig', sandboxed = true) }}

        <ul>
            <li><a href=\"{{ path('blog_index') }}\" title=\"blog_index\" >blog_index</a></li>
            <li><a href=\"{{ path('hello_index') }}\" title=\"hello_index\" >hello_index</a></li>
            <li><a href=\"{{ path('hello_index_name',  {'name': 'Jean'}) }}\" title=\"hello_index_name\" >hello_index_name</a></li>
            <li><a href=\"{{ path('hello_index_local') }}\" title=\"hello_index_local\" >hello_index_local</a></li>
            <li><a href=\"{{ path('service') }}\" title=\"service\" >Service</a></li>
            <li><a href=\"{{ path('serviceII') }}\" title=\"serviceII\" >ServiceII</a></li>
             <li><a href=\"{{ path('form') }}\" title=\"form\" >form</a></li>
        </ul>
    </body>
</html>

{{ include('footer.html.twig', sandboxed = true) }}
", "base.html.twig", "/Users/workspace/Documents/WORKSPACE/WORKSPACE-PHP/learn_symfony/templates/base.html.twig");
    }
}
