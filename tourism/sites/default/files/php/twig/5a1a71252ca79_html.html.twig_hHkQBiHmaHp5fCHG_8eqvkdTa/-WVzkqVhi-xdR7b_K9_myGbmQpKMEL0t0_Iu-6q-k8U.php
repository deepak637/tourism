<?php

/* themes/travel_zymphonies_theme/templates/layout/html.html.twig */
class __TwigTemplate_2e92fff1ca638fdc6771809f61cb777191ae81f7e2391bddd90ae9955e7a7288 extends Twig_Template
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
        $tags = array("set" => 27);
        $filters = array("clean_class" => 29, "raw" => 38, "safe_join" => 39, "t" => 45);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class', 'raw', 'safe_join', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 27
        $context["body_classes"] = array(0 => ((        // line 28
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 30
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => ((        // line 31
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")), 4 => ((        // line 32
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("not-front") : ("")));
        // line 35
        echo "<!DOCTYPE html>
<html";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </head>
  <body";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/travel_zymphonies_theme/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 50,  93 => 49,  89 => 48,  85 => 47,  80 => 45,  75 => 43,  70 => 41,  66 => 40,  62 => 39,  58 => 38,  53 => 36,  50 => 35,  48 => 32,  47 => 31,  46 => 30,  45 => 29,  44 => 28,  43 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/travel_zymphonies_theme/templates/layout/html.html.twig", "E:\\xampp2\\htdocs\\tourism\\themes\\travel_zymphonies_theme\\templates\\layout\\html.html.twig");
    }
}
