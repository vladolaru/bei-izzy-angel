<?php
class Gallery {
    private $images = array();
    private $imagesCount = 0;

    function __construct ($images) {
        foreach ($images as $image) {
            $this->images[] = $image;
            $this->imagesCount++;
        }
    }

    function getData($index, $dataName) {
        return $this->images[$index][$dataName];
    }

    function generateMySlides() {
        $divs = '';
        for ($i = 0; $i < $this->imagesCount; $i++) {
            $divs = $divs . $this->generateSlide($i) . "<br><br>";
        }

        return 
        "<div class=\"slideshow-container\">
        " . $divs . $this->generateNavigationButtons() . "
        </div>";
    }

    function generateSlide($index){
        return 
        "<div class=\"mySlides fade\">
            " . "<div class=\"numbertext\">" . ($index + 1) . " out of " . $this->imagesCount . "</div>
            " . "<img src=\"" . $this->getData ($index, 'url') . "\" style=\"width:100%\">
            " . "<div class=\"text\">" . $this->getData($index, 'caption') . "</div>
        </div>";
    }

    function generateNavigationButtons() {
        return
        "<a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a><br>";
    }
}