<?php

// namespace gallery_section;

class GallerySection {
    private $title;
    private $description;
    private $images = [];

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
    }

    public function addImage($src) {
        $this->images[] = $src;
    }

    public function renderGallerySection() {
        $html = '<div class="gallery_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="gallery_taital">' . $this->title . '</h1>
                    <p class="gallery_text">' . $this->description . '</p>
                </div>
            </div>
            <div class="gallery_section_2">
                <div class="row">';

        foreach ($this->images as $imageSrc) {
            $html .= '<div class="col-md-4">
            <div class="container_main">
                <img src="' . $imageSrc . '" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>';
        }

        $html .= '</div>
        </div>
        <div class="seemore_bt"><a href="#">See More</a></div>
    </div>
</div>';

        return $html;
    }
}
?>