<?php
class BodyNav {
    private $navItems = [];

    public function addNavItem($text, $url) {
        $this->navItems[] = ['text' => $text, 'url' => $url];
    }

    public function renderNav() {
        $html = '<nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">';

        foreach ($this->navItems as $navItem) {
            $html .= '<li class="nav-item">
                <a class="nav-link" href="' . $navItem['url'] . '">' . $navItem['text'] . '</a>
            </li>';
        }

        $html .= '</ul>
                    </div>
                </nav>';

        return $html;
    }
}
?>