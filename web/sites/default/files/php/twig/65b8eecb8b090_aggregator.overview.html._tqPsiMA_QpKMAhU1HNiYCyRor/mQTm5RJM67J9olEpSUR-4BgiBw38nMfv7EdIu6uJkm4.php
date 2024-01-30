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

/* @help_topics/aggregator.overview.html.twig */
class __TwigTemplate_391a8f81a70d5e9762f2069e65a9904a extends Template
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
        $context["creating_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("aggregator.creating"));
        // line 8
        $context["managing_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("aggregator.managing"));
        // line 9
        echo "<h2>";
        echo t("What is a feed?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("A feed is syndicated content data provided by a source outside of your website, which is imported into your website.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("What is OPML?", array());
        echo "</h2>
<p>";
        // line 12
        echo t("OPML (Outline Processor Markup Language) is a specification for making hierarchical lists, which is commonly used for lists of feeds.", array());
        echo "</p>
<h2>";
        // line 13
        echo t("What are the options for updating feed items?", array());
        echo "</h2>
<p>";
        // line 14
        echo t("Feeds are <em>updated</em> (new items imported) each time your site's cron task runs, if the selected <em>Update interval</em> for the feed has passed. You can also update feeds manually; see @managing_topic for details.", array("@managing_topic" => ($context["managing_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 15
        echo t("What are the options for displaying feeds?", array());
        echo "</h2>
<p>";
        // line 16
        echo t("Using the core Aggregator, Views, Views UI, and Block modules, you can display feed data in your site in various ways (see related topics for more information):", array());
        echo "</p>
<ul>
  <li>";
        // line 18
        echo t("After creating and updating a feed, view the feed page provided by the core Aggregator module, which displays recent imported items; see @creating_topic for details.", array("@creating_topic" => ($context["creating_topic"] ?? null), ));
        echo "</li>
  <li>";
        // line 19
        echo t("Place the <em>Aggregator feed</em> block in a region of your theme; each block you place lists the most recent items from one feed.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Create a custom view that shows either <em>Aggregator feed</em> (feeds) or <em>Aggregator feed item</em> (items from feeds).", array());
        echo "</li>
</ul>
<h2>";
        // line 22
        echo t("Overview of aggregation", array());
        echo "</h2>
<p>";
        // line 23
        echo t("The core Aggregator module allows you to add, edit, and delete feeds, choose how often to import items from feeds, and display the feeds. See the related topics below for specific tasks.", array());
        echo "</p>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/aggregator.overview.html.twig";
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
        return array (  94 => 23,  90 => 22,  85 => 20,  81 => 19,  77 => 18,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  43 => 9,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/aggregator.overview.html.twig", "/var/www/html/web/modules/contrib/aggregator/help_topics/aggregator.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 9);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 7, "help_topic_link" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link']
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
