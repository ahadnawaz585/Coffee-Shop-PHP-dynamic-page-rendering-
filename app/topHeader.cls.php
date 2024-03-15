<?php
class BodyHeader{
    private $logoSrc;

    public function __construct($logoSrc) {
        $this->logoSrc = $logoSrc;
    }

    public function renderHeader() {
        $html = '<header class="header">
            <div class="header_section">
                <div class="container-fluid">
                    <div class="logo"><a href="index.html"><img src="' . $this->logoSrc . '"></a></div>
                </div>
            </div>
        </header>';

        return $html;
    }
}
?>