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
        return $images[$index][$dataName];
    }

    function generateMySlides() {
        $divs = '';
        for ($i = 0; $i < $this->imagesCount; $i++) {
            $divs = $divs . $this->generateSlide($i) . "<br><br>";
        }

        return 
        "<div class=\"slideshow-container\">
        " . $divs . "
        </div>";
    }

    function generateSlide($index){
        return 
        "<div class=\"mySlides fade\">
            " . "<div class=\"numbertext\">" . $index + 1 . " out of " . $this->imagesCount . "</div>
            " . "<img src=\"" . $this->getData ($index, 'url') . "\" style=\"width:100%\">
            " . "<div class=\"text\">" . $this->getData($index, 'caption') . "</div>
        </div>";
    }

    function generateNavigationButtons() {
        return
        "<a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a><br>";
    }

    function generateDots() {

        $spans = '';
        for($i = 0; $i < $this->imagesCount; $i++){
            $spans = $spans . "<span class=\"dot\" onclick=\"currentSlide(" . $i + 1 . ")\"></span><br>";
        }

        return
        "<div style=\"text-align:center\">
        " . $spans . "</div>"; 
    }
}