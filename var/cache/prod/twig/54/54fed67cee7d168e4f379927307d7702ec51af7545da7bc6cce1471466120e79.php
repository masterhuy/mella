<?php

/* @PrestaShop/Admin/Product/CatalogPage/catalog_empty.html.twig */
class __TwigTemplate_1f00f5a2c6258f7e294e8d0078ae5bc60540e89b6494bfc0c6471766f54d2128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog_empty.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "  <div class=\"col-md-12 text-md-center\">
    <div class=\"mt-3 emptycatalog-icon\">
      <i class=\"material-icons\">add_shopping_cart</i>
    </div>

    ";
        // line 33
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1]Add your first product[/1][2]or import a list of products (filetypes: .csv, .xls, .xlsx, .xlst, .ods, .ots).[/2]", array(), "Admin.Catalog.Feature"), array("[1]" => (("<div class=\"mt-1\"><a class=\"btn btn-primary\" id=\"product_empty_list_add_btn\" href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new")) . "\">"), "[/1]" => "</a></div>", "[2]" => (("<div class=\"mt-1\"><a href=\"" .         // line 37
($context["import_url"] ?? null)) . "\" class=\"external-link\" id=\"product_empty_list_go_to_import\">"), "[/2]" => "</a></div>"));
        // line 40
        echo "

  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog_empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 40,  39 => 37,  38 => 33,  31 => 28,  28 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog_empty.html.twig", "D:\\xamppp\\htdocs\\jms_mella\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog_empty.html.twig");
    }
}
