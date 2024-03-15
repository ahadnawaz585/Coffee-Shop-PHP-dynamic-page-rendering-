<?php
// namespace header_section;
class PageHeader{
    private $title;
    private $keywords;
    private $description;
    private $cssLinks = [];
    private $scripts = [];
    public function __construct($title, $keywords, $description) {
        $this->title = $title;
        $this->keywords = $keywords;
        $this->description = $description;
        $this->scripts = [];
        $this->cssLinks = [];
    }

    public function addCssLink($href) {
        $this->cssLinks[] = $href;
    }

    //  function addScript($script)
    // {
    //     $this->scripts[] = $script;
    // }
    // public function addScript(){
    //     $html = '';
    //     if (!empty($this->scripts)) {
    //         foreach ($this->scripts as $script) {
    //             $html .= '<script src="' . $script . '"></script>';
    //         }
    //     }
    //     return $html;
    // }

    public function addscript($script)
    {
        $this->scripts[] = $script;
    }

    public function renderHeader() {
        $html = '<head>';
        $html .= '<!-- basic -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- mobile metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="initial-scale=1, maximum-scale=1">
            <!-- site metas -->
            <title>' . $this->title . '</title>
            <meta name="keywords" content="' . $this->keywords . '">
            <meta name="description" content="' . $this->description . '">
            <meta name="author" content="">';

        // Add CSS links
        foreach ($this->cssLinks as $cssLink) {
            $html .= '<link rel="stylesheet" type="text/css" href="' . $cssLink . '">';
        }

            foreach ($this->scripts as $script) {
                $html .= '<script src="' . $script . '"></script>';
            }

        $html .= '<!-- Other meta tags and links can be added here -->';
        $html .= '</head>';

        return $html;
    }
}

?>
