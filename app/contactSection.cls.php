<?php
// namespace contact_section;

class ContactSection {
    private $title;
    private $namePlaceholder;
    private $emailPlaceholder;
    private $phonePlaceholder;
    private $messagePlaceholder;

    public function __construct($title, $namePlaceholder, $emailPlaceholder, $phonePlaceholder, $messagePlaceholder) {
        $this->title = $title;
        $this->namePlaceholder = $namePlaceholder;
        $this->emailPlaceholder = $emailPlaceholder;
        $this->phonePlaceholder = $phonePlaceholder;
        $this->messagePlaceholder = $messagePlaceholder;
    }

    public function renderContactSection() {
        $html = '<div class="contact_section layout_padding">
                    <div class="container">
                        <h1 class="contact_text">' . $this->title . '</h1>
                    </div>
                </div>
                <div class="contact_section_2 layout_padding">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 padding_0">
                                <div class="mail_section">
                                    <div class="email_text">
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="' . $this->namePlaceholder . '" name="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="' . $this->emailPlaceholder . '" name="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="' . $this->phonePlaceholder . '" name="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="massage-bt" placeholder="' . $this->messagePlaceholder . '" rows="5" id="comment" name="Message"></textarea>
                                        </div>
                                        <div class="send_btn">
                                            <div type="text" class="main_bt"><a href="#">SEND</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding_0">
                                <div class="map-responsive">
                                    <iframe src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=Eiffel+Tower+Paris+France" width="600" height="508" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
    
        return $html;
    }
    
}

?>
