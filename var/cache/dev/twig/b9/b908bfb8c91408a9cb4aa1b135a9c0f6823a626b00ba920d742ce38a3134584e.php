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

/* inc/navbar.html.twig */
class __TwigTemplate_4e651f5b3a591a180c3d545ba139e5c89ca9c03e1b0edb81b801061fd8c79570 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand navbar-light bg-light\">
  <div class=\"container-fluid\">

    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link \"  href=\"/home\">Home</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/shop\">Shop</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/admin/products\">Products</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/cart\">Cart</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/users\">Users</a>
        </li>

      </ul>

      <button class=\"btn btn-outline-success\" type=\"submit\">Login</button>

    </div>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand navbar-light bg-light\">
  <div class=\"container-fluid\">

    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link \"  href=\"/home\">Home</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/shop\">Shop</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/admin/products\">Products</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/cart\">Cart</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/users\">Users</a>
        </li>

      </ul>

      <button class=\"btn btn-outline-success\" type=\"submit\">Login</button>

    </div>
  </div>
</nav>", "inc/navbar.html.twig", "/home/leo/Bureau/T-WEB-600-LIL-6-1-ecommerce-romain.noizet/app/templates/inc/navbar.html.twig");
    }
}
