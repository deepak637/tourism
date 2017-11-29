<?php

/* themes/travel_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_bd7a3db330905f14960cf453cae0c3d753c508028aa186506ae0df9de983cf98 extends Twig_Template
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
        $tags = array("if" => 75);
        $filters = array("date" => 412);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('date'),
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

        // line 60
        echo "

<!-- Header and Navbar -->
<div class=\"container\">
  <header class=\"main-header\">
    <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"row\">
      <div class=\"navbar-header col-md-2\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span></span>
          <!-- <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span> -->
        </button>
        ";
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 76
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 78
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-7 text-right\">
        ";
        // line 82
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 83
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 85
        echo "      </div>
      <!--End Navigation -->

      <!-- Navigation -->
      <div class=\"col-md-3\">
        ";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
            // line 91
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
        ";
        }
        // line 93
        echo "      </div>
      <!--End Navigation -->

    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 100
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", array()))) {
            echo "  
    <div class=\"slideshow\">
      ";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 105
        echo "  <!-- End Banner -->

  <!-- Secondary Menu -->
  ";
        // line 108
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()))) {
            echo "  
    <div class=\"secondary-menu\">
      ";
            // line 110
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 113
        echo "  <!-- End Secondary Menu -->  

  </header>
</div>

<!--End Header & Navbar -->


<!--Home page message-->
  ";
        // line 122
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", array()))) {
            // line 123
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 126
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "homepagemessage", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 131
        echo "<!--End Highlighted-->


<!--Highlighted-->
  ";
        // line 135
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 136
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 139
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 144
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 148
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 149
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()))) {
                // line 150
                echo "    <div class=\"topwidget\">
      <div class=\"container\">
        <div class=\"row\">

        <!-- Top widget first region -->          
          ";
                // line 155
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                    // line 156
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 157
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 159
                echo "          
          <!-- End top widget third region -->

          <!-- Top widget second region -->          
          ";
                // line 163
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                    // line 164
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 165
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 167
                echo "          
          <!-- End top widget third region -->
          
          <!-- Top widget third region -->          
          ";
                // line 171
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                    // line 172
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 173
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 175
                echo "          
          <!-- End top widget third region -->

          <!-- Top widget third region -->          
          ";
                // line 179
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_forth", array())) {
                    // line 180
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 181
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_forth", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 183
                echo "          
          <!-- End top widget third region -->

        </div>
      </div>
    </div>
  ";
            }
        }
        // line 191
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 195
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 196
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 199
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 204
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 213
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 214
            echo "        <div class=\"row\">
          ";
            // line 215
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 218
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 222
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 227
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 228
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 229
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " >
            ";
            // line 230
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 234
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 237
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 238
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 239
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo ">
            ";
            // line 240
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 244
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 247
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 248
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 249
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo ">
            ";
            // line 250
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 254
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 260
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 261
            echo "      <div class=\"row\">
        ";
            // line 262
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 265
        echo "    <!--End Content Bottom-->

  </div>
</div>
<!-- End: layout -->



<!-- Start: Footer -->
";
        // line 274
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())))) {
            // line 275
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start Footer First Region -->        
        ";
            // line 280
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 281
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 282
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 284
            echo "        
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->        
        ";
            // line 288
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 289
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 290
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 292
            echo "        
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->        
        ";
            // line 296
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 297
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 298
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 300
            echo "        
        <!-- End Footer Third Region -->

      </div>
    </div>
  </div>
";
        }
        // line 307
        echo "<!--End Footer -->


<!-- Page Title -->
";
        // line 311
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "features", array()))) {
            // line 312
            echo "  <div class=\"container\">
    ";
            // line 313
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "features", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 316
        echo "<!-- End Page Title -->


<!-- Start bottom -->
";
        // line 320
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 321
            if ((($this->getAttribute(($context["page"] ?? null), "bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_third", array()))) {
                // line 322
                echo "    <div class=\"bottom-widgets\">
      <div class=\"container\">        
        <div class=\"row\">

          <!-- Start Bottom First Region -->          
          ";
                // line 327
                if ($this->getAttribute(($context["page"] ?? null), "bottom_first", array())) {
                    // line 328
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 329
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_first", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 331
                echo "          
          <!-- End Bottom First Region -->

          <!-- Start Bottom Second Region -->
          ";
                // line 335
                if ($this->getAttribute(($context["page"] ?? null), "bottom_second", array())) {
                    // line 336
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 337
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_second", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 339
                echo "          
          <!-- End Bottom Second Region -->

          <!-- Start Bottom third Region -->          
          ";
                // line 343
                if ($this->getAttribute(($context["page"] ?? null), "bottom_third", array())) {
                    // line 344
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 345
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_third", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 347
                echo "          
          <!-- End Bottom Third Region -->

          <!-- Start Bottom Forth Region -->
          ";
                // line 351
                if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", array())) {
                    // line 352
                    echo "          <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                    echo ">
            ";
                    // line 353
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()), "html", null, true));
                    echo "
          </div>
          ";
                }
                // line 356
                echo "          <!-- End Bottom Forth Region -->

        </div>
      </div>
    </div>
  ";
            }
        }
        // line 363
        echo "<!--End Bottom -->


<!-- Start Footer Menu -->
";
        // line 367
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 368
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          ";
            // line 372
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 374
            if (($context["show_social_icon"] ?? null)) {
                // line 375
                echo "        <div class=\"col-sm-6\">
          <div class=\"social-media-wrap\">
            <div class=\"social-media\">
              ";
                // line 378
                if (($context["facebook_url"] ?? null)) {
                    // line 379
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 381
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 382
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 384
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 385
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 387
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 388
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 390
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 391
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 393
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 394
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 396
                echo "            </div>
          </div>          
        </div>
        ";
            }
            // line 400
            echo "      </div>
    </div>
  </div>
";
        }
        // line 404
        echo "<!-- End Footer Menu -->


<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6\"><p>Copyright © ";
        // line 412
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved</p></div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
        // line 416
        if (($context["show_credit_link"] ?? null)) {
            // line 417
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 421
        echo "      <!-- End Credit link -->
      
    </div>
  </div>
</div>


<!-- Google map -->
";
        // line 429
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", array()))) {
            // line 430
            echo "  <div class=\"google_map\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "google_map", array()), "html", null, true));
            echo "</div>
";
        }
        // line 432
        echo "<!-- End Google map -->";
    }

    public function getTemplateName()
    {
        return "themes/travel_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  742 => 432,  736 => 430,  734 => 429,  724 => 421,  718 => 417,  716 => 416,  709 => 412,  699 => 404,  693 => 400,  687 => 396,  681 => 394,  678 => 393,  672 => 391,  669 => 390,  663 => 388,  660 => 387,  654 => 385,  651 => 384,  645 => 382,  642 => 381,  636 => 379,  634 => 378,  629 => 375,  627 => 374,  622 => 372,  616 => 368,  614 => 367,  608 => 363,  599 => 356,  593 => 353,  588 => 352,  586 => 351,  580 => 347,  574 => 345,  569 => 344,  567 => 343,  561 => 339,  555 => 337,  550 => 336,  548 => 335,  542 => 331,  536 => 329,  531 => 328,  529 => 327,  522 => 322,  520 => 321,  516 => 320,  510 => 316,  504 => 313,  501 => 312,  499 => 311,  493 => 307,  484 => 300,  478 => 298,  473 => 297,  471 => 296,  465 => 292,  459 => 290,  454 => 289,  452 => 288,  446 => 284,  440 => 282,  435 => 281,  433 => 280,  426 => 275,  424 => 274,  413 => 265,  407 => 262,  404 => 261,  402 => 260,  394 => 254,  387 => 250,  383 => 249,  380 => 248,  378 => 247,  373 => 244,  366 => 240,  362 => 239,  359 => 238,  357 => 237,  352 => 234,  345 => 230,  341 => 229,  338 => 228,  336 => 227,  328 => 222,  322 => 218,  316 => 215,  313 => 214,  311 => 213,  300 => 204,  292 => 199,  287 => 196,  285 => 195,  279 => 191,  269 => 183,  263 => 181,  258 => 180,  256 => 179,  250 => 175,  244 => 173,  239 => 172,  237 => 171,  231 => 167,  225 => 165,  220 => 164,  218 => 163,  212 => 159,  206 => 157,  201 => 156,  199 => 155,  192 => 150,  190 => 149,  186 => 148,  180 => 144,  172 => 139,  167 => 136,  165 => 135,  159 => 131,  151 => 126,  146 => 123,  144 => 122,  133 => 113,  127 => 110,  122 => 108,  117 => 105,  111 => 102,  106 => 100,  97 => 93,  91 => 91,  89 => 90,  82 => 85,  76 => 83,  74 => 82,  68 => 78,  62 => 76,  60 => 75,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/travel_zymphonies_theme/templates/layout/page.html.twig", "/Applications/MAMP/htdocs/personal/tourism/tourism/themes/travel_zymphonies_theme/templates/layout/page.html.twig");
    }
}
