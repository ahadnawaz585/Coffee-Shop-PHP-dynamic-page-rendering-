<?php
// namespace service_section;
class ServicesSection {
    private $title;
    private $description;
    private $services = [];

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
    }

    public function addService($iconSrc, $serviceName, $serviceDescription, $readMoreLink) {
        $this->services[] = [
            'iconSrc' => $iconSrc,
            'serviceName' => $serviceName,
            'serviceDescription' => $serviceDescription,
            'readMoreLink' => $readMoreLink,
        ];
    }

    public function renderServicesSection() {
        $html = '<div class="services_section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="services_taital">' . $this->title . '</h1>
                            <p class="services_text">' . $this->description . '</p>
                        </div>
                    </div>
                    <div class="services_section_2">
                        <div class="row">';
        
        foreach ($this->services as $service) {
            $html .= '<div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="' . $service['iconSrc'] . '" class="image_1">
                            <img src="' . $service['iconSrc'] . '" class="image_2">
                        </div>
                        <h3 class="decorate_text">' . $service['serviceName'] . '</h3>
                        <p class="tation_text">' . $service['serviceDescription'] . '</p>
                        <div class="readmore_bt"><a href="' . $service['readMoreLink'] . '">Read More</a></div>
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
