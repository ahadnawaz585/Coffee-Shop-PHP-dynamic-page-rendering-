<?php
// namespace banner_section;
class BannerSection
{
    private $slides = [];

    public function __construct($initialSlides = [])
    {
        foreach ($initialSlides as $slide) {
            $this->addSlide(
                $slide['outstandingText'],
                $slide['coffeeText'],
                $slide['description'],
                $slide['learnMoreLink']
            );
        }
    }

    public function addSlide($outstandingText, $coffeeText, $description, $learnMoreLink)
    {
        $slide = [
            'outstandingText' => $outstandingText,
            'coffeeText' => $coffeeText,
            'description' => $description,
            'learnMoreLink' => $learnMoreLink,
        ];

        $this->slides[] = $slide;
    }

    public function renderBanner()
    {
        $html = '<div class="banner_section layout_padding">
                    <div class="container">
                        <div id="main_slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">';

        foreach ($this->slides as $index => $slide) {
            $activeClass = $index === 0 ? 'active' : '';

            $html .= '<div class="carousel-item ' . $activeClass . '">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="banner_taital">
                                    <h1 class="outstanding_text">' . $slide['outstandingText'] . '</h1>
                                    <h1 class="coffee_text">' . $slide['coffeeText'] . '</h1>
                                    <p class="there_text">' . $slide['description'] . '</p>
                                    <div class="learnmore_bt"><a href="' . $slide['learnMoreLink'] . '">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }

        $html .= '<a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>';

        return $html;
    }
}
?>