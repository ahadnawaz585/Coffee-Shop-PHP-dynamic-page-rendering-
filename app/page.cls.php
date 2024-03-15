<?php
class Page{
    public $header;
    public $body;

    public $pageID;
    public $pageTitle;

    // public function renderPage(){}
    public function renderPageHeader(){ 
      
$pHeader = new PageHeader("Grand Coffee","coffee, cafe, drinks","Enjoy the best coffee at Grand Coffee");

// Add CSS links
$pHeader->addCssLink("css/bootstrap.min.css");
$pHeader->addCssLink("css/style.css");
$pHeader->addCssLink("css/responsive.css");
$pHeader->addCssLink("css/jquery.mCustomScrollbar.min.css");
$pHeader->addCssLink("https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
$pHeader->addCssLink("css/owl.carousel.min.css");
$pHeader->addCssLink("css/owl.theme.default.min.css");
$pHeader->addCssLink("https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css");

$pHeader->addscript("js/jquery.min.js");
$pHeader->addscript("js/popper.min.js");
$pHeader->addscript("js/bootstrap.bundle.min.js");

return $pHeader->renderHeader(); // Render the HTML header
      
    }
    
    public function renderPageBody(){
        $bodyHeaderHtml = $this->bodyHeader();
        $bodyNavHtml = $this->bodyMenu();
        $bodyPageContentHtml = $this->bodyPageContent();
        $bodyFooterHtml = $this->bodyFooter();
    
        // Concatenate all the HTML sections
        $html = $bodyHeaderHtml . $bodyNavHtml . $bodyPageContentHtml . $bodyFooterHtml;
    
        // Return the combined HTML
        return $html;
        }
    public function setPageHeaderItem($key='', $value=''){}

    protected function bodyHeader(){
        $header = new BodyHeader("images/logo.png");
       return  $header->renderHeader(); 
    }
    private function bodyMenu(){
        $nav = new BodyNav();
        $nav->addNavItem("Home", "index.html");
        $nav->addNavItem("About Us", "about.html");
        $nav->addNavItem("Gallery", "gallery.html");
        $nav->addNavItem("Services", "services.html");
        $nav->addNavItem("Contact Us", "contact.html");
        return $nav->renderNav();
    }
    private function bodyTopMenu(){
    }
    private function bodyPageContent(){
        // about section
        $about = new AboutSection(
            "About Us",
            "Full cleaning and housekeeping services for companies and households. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
            "images/about_image.jpg"
        );
        // banner section : 
        $slides = [
            [
                'outstandingText' => "Welcome to Our Cafe",
                'coffeeText' => "Enjoy Great Coffee",
                'description' => "Discover the finest coffee in town and experience the perfect blend.",
                'learnMoreLink' => "coffee.html",
            ],
            [
                'outstandingText' => "Visit Our Bakery",
                'coffeeText' => "Delicious Pastries",
                'description' => "Indulge in a variety of mouthwatering pastries baked fresh daily.",
                'learnMoreLink' => "bakery.html",
            ],
        ];
        $banner = new BannerSection($slides);
        // contact section:
        $contactSection = new ContactSection("Contact Us", "Name", "Email", "Phone Number", "Message"); 
        // gallery section:
        $gallerySection = new GallerySection("Our Gallery", "Lorem Ipsum is simply dummy text of printing typesetting ststry lorem Ipsum the industry's standard dummy text ever since of the 1500s, when an unknown printer took a galley of type and scra make a type specimen book. It has");
        $galleryImages = [
            "images/img-1.png",
            "images/img-2.png",
            "images/img-3.png",
            "images/img-4.png",
            "images/img-5.png",
            "images/img-6.png",
            "images/img-7.png",
            "images/img-8.png",
            "images/img-9.png",
        ];
        foreach ($galleryImages as $image) {
            $gallerySection->addImage($image); // Add images to the gallery
        }
        // service section:
$services = [
    [
        'icon' => 'images/icon1.png',
        'title' => 'Original Coffee',
        'description' => 'Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea',
        'link' => '#',
    ],
    [
        'icon' => 'images/icon2.png',
        'title' => '20 Coffee Flavors',
        'description' => 'Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea',
        'link' => '#',
    ],
    [
        'icon' => 'images/icon3.png',
        'title' => 'Pleasant Abient',
        'description' => 'Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea',
        'link' => '#',
    ],
];
$servicesSection = new ServicesSection("Services","Typesetting industry lorem Ipsum is simply dummy text of the");
    
foreach ($services as $service) {
    $servicesSection->addService($service['icon'], $service['title'], $service['description'], $service['link']);
}
// testinomial section : 
$testimonials = [
    [
        'name' => 'Monila',
        'image' => 'images/quick-icon.png',
        'text' => 'Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form...',
    ],
    [
        'name' => 'John Doe',
        'image' => 'images/quick-icon.png',
        'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry...',
    ],
    [
        'name' => 'Jane Smith',
        'image' => 'images/quick-icon.png',
        'text' => 'There are many variations of passages of Lorem Ipsum available...',
    ],
];
$clientTestimonialSection = new ClientTestimonialSection("Testimonial", "Eeven slightly believable. If you are going to use a passage of Lorem Ipsum, you need to");
foreach ($testimonials as $testimonial) {
    $clientTestimonialSection->addTestimonial($testimonial['name'], $testimonial['image'], $testimonial['text']);
}

$clientTestimonialHtml = $clientTestimonialSection->renderClientTestimonialSection();
$servicesHtml = $servicesSection->renderServicesSection();
$galleryHtml = $gallerySection->renderGallerySection();
$contactHtml = $contactSection->renderContactSection();
$bannerHtml = $banner->renderBanner();
$aboutHtml = $about->renderAboutSection();
$html = $clientTestimonialHtml . $servicesHtml . $galleryHtml . $contactHtml . $bannerHtml . $aboutHtml;
return $html;
}
    private function bodyPageAside(){}
    private function bodyFooter(){ 
        $footer = new BodyFooter();

// Add links to the "About" section
$footer->addAboutLink("About Us", "about.html");
$footer->addAboutLink("Our Team", "team.html");

// Add links to the "Menu" section
$footer->addMenuLink("Home", "index.html");
$footer->addMenuLink("Services", "services.html");
$footer->addMenuLink("Contact Us", "contact.html");

// Add links to the "Useful Link" section
$footer->addUsefulLink("Privacy Policy", "privacy.html");
$footer->addUsefulLink("Terms of Service", "terms.html");

// Add content to the "Contact Us" section
$contactInfo = [
    '<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address : Loram Ipusm</span></a>',
    '<a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call : +01 1234567890</span></a>',
    '<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : demo@gmail.com</span></a>',
];
$footer->addContactContent($contactInfo);

// Set the copyright text
$footer->setCopyrightText("2023 All Rights Reserved. Design by <a href='https://html.design'>Free HTML Templates</a>");



// Render the footer and get the HTML as a string
$footerHtml = $footer->renderFooter();

// Now you can use $footerHtml as needed
return $footerHtml; // Output the HTML
    }
    // private function bodyFooterColumn(){}
    private function bodyATag(){}
    private function bodyAddParagraph(){}
    private function bodyAddLiTag(){}

}
?>


