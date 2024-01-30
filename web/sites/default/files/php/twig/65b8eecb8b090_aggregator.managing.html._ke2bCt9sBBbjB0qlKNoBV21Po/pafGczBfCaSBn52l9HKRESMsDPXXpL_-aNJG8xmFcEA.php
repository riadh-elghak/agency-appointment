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

/* @help_topics/aggregator.managing.html.twig */
class __TwigTemplate_c8101837790f7cfa4ea02cdd1ca00d18 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        ob_start(function () { return ''; });
        // line 8
        echo t("Aggregator", array());
        $context["aggregator_overview_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["aggregator_overview_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["aggregator_overview_link_text"] ?? null), 10, $this->source), "aggregator.admin_overview"));
        // line 11
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 12
        echo t("Manage an existing feed or change its configuration.", array());
        echo "</p>
<h2>";
        // line 13
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 15
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Web services</em>&gt; @aggregator_overview_link.", array("@aggregator_overview_link" => ($context["aggregator_overview_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 16
        echo t("Click <em>Edit</em> in the <em>Operations</em> list for the feed you want to configure. Enter new values and click <em>Save</em>.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Optionally, delete the previously-imported items from the feed by clicking <em>Delete items</em> in the <em>Operations</em> list for the feed.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Optionally, import new items from the feed by clicking <em>Update items</em> in the <em>Operations</em> list for the feed. You can also run the site Cron process to import items into all feeds, depending on the configured <em>Update interval</em> for each feed.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Optionally, click <em>Settings</em> to configure the settings for all feeds, including the <em>Number of items shown in listing pages</em> and how long to keep old items from feeds on your site. Click <em>Save configuration</em>.", array());
        echo "</li>
</ol>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/aggregator.managing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  55 => 13,  51 => 12,  46 => 11,  44 => 10,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/aggregator.managing.html.twig", "/var/www/html/web/modules/contrib/aggregator/help_topics/aggregator.managing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 15);
        static $functions = array("render_var" => 10, "help_route_link" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
