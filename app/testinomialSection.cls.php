<?php
// namespace testinomial_section;
class ClientTestimonialSection {
    private $title;
    private $description;
    private $testimonials = [];

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
    }

    public function addTestimonial($clientName, $clientImage, $testimonialText) {
        $this->testimonials[] = [
            'clientName' => $clientName,
            'clientImage' => $clientImage,
            'testimonialText' => $testimonialText,
        ];
    }

    public function renderClientTestimonialSection() {
        $html = '<div class="client_section layout_padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="client_taital">' . $this->title . '</h1>
                                <p class="client_text">' . $this->description . '</p>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">';
        
        // Generate carousel indicators
        for ($i = 0; $i < count($this->testimonials); $i++) {
            $isActive = ($i === 0) ? 'class="active"' : '';
            $html .= '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '" ' . $isActive . '></li>';
        }
        
        $html .= '</ol>
                    <div class="carousel-inner">';
        
        // Generate testimonial slides
        foreach ($this->testimonials as $index => $testimonial) {
            $isActive = ($index === 0) ? 'active' : '';
            
            $html .= '<div class="carousel-item ' . $isActive . '">
                        <div class="client_section_2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="testimonial_section_2">
                                            <h4 class="client_name_text">' . $testimonial['clientName'] . ' <span class="quick_icon"><img src="' . $testimonial['clientImage'] . '"></span></h4>
                                            <p class="customer_text">' . $testimonial['testimonialText'] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
        
        $html .= '</div>
                    </div>
                </div>
            </div>';
        
        return $html;
    }
    
}


?>
