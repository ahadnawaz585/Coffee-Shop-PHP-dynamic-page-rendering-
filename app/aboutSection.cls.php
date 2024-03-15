<?php
// namespace about_section;
class AboutSection {
    private $title;
    private $text;
    private $imageSrc;

    public function __construct($title, $text, $imageSrc) {
        $this->title = $title;
        $this->text = $text;
        $this->imageSrc = $imageSrc;
    }

    public function renderAboutSection() {
        $html = '<div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital_main">
                        <div class="about_taital">About Us</div>
                        <p class="about_text">Full cleaning and housekeeping services for companies and households.</p>';
        
        // Add the provided text to the HTML
        $html .= '<p class="about_text">' . $this->text . '</p>';
        
        // Continue building the HTML
        $html .= '<div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_img"><img src="' . $this->imageSrc . '"></div>
                </div>
            </div>
        </div>
    </div>';

        // Return the generated HTML
        return $html;
    }
}

// Example usage:

// $aboutHtml = $aboutSection->renderAboutSection();
// echo $aboutHtml; // Output the HTML
?>