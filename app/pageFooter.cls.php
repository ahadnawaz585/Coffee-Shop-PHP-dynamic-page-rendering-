<?php

class BodyFooter{

    // Content sections
    public $aboutSection;
    public $menuSection;
    public $usefulLinkSection;
    public $contactSection;

    // Copyright text
    public $copyrightText;

    

    function __construct()
    {
        // Initialize content sections as empty arrays
        $this->aboutSection = [];
        $this->menuSection = [];
        $this->usefulLinkSection = [];
        $this->contactSection = [];

        // Initialize copyright text as empty
        $this->copyrightText = "";

        // Initialize scripts as an empty array
      
    }

    // Add links to the About section
    function addAboutLink($text, $url)
    {
        $this->aboutSection[] = "<li><a href='$url'>$text</a></li>";
    }

    // Add links to the Menu section
    function addMenuLink($text, $url)
    {
        $this->menuSection[] = "<li><a href='$url'>$text</a></li>";
    }

    // Add links to the Useful Link section
    function addUsefulLink($text, $url)
    {
        $this->usefulLinkSection[] = "<li><a href='$url'>$text</a></li>";
    }

    // Add content to the Contact section
    function addContactContent($content)
    {
        $this->contactSection[] = $content;
    }

    // Set the copyright text
    function setCopyrightText($text)
    {
        $this->copyrightText = $text;
    }

    // Add scripts to the footer


    // Render the footer and return as a string
    function renderFooter()
    {
        $html = '<footer class="footer">
<div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">About</h3>
                  <ul class="footer_text">' . implode("", $this->aboutSection) . '</ul>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Menu</h3>
                  <div class="footer_menu">
                     <ul>' . implode("", $this->menuSection) . '</ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Useful Link</h1>
                  <ul class="dummy_text">' . implode("", $this->usefulLinkSection) . '</ul>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Contact Us</h1>
                  <div class="location_text">' . implode("", $this->contactSection) . '</div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">' . $this->copyrightText . '</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->';



      $html .= '</footer>
</body>
</html>';

      return $html;
    }
}

?>