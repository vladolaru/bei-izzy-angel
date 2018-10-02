<?php

class Gallery {
	private $images = array();

	function __construct( $images ) {
		if ( is_array( $images ) ) {
			foreach ( $images as $image ) {
				if ( isset( $image['type'] ) && 'image' === $image['type'] ) {
					$this->images[] = $image;
				}
			}
		}
	}

	private function getData( $index, $dataName ) {
		if ( ! isset( $this->images[ $index ][ $dataName ] ) ) {
			return false;
		}

		return $this->images[ $index ][ $dataName ];
	}

	function generateMySlides() {
		$divs  = '';
		$slide = null;
		for ( $i = 0; $i < count( $this->images ); $i ++ ) {
			$slide = $this->generateSlide( $i );
			if ( null !== $slide ) {
				$divs = $divs . $slide . "<br><br>";
			}
		}

		return
			"<div class=\"slideshow-container\">
        " . $divs . $this->generateNavigationButtons() . "
        </div>";
	}

	private function generateSlide( $index ) {
		$url     = $this->getData( $index, 'url' );
		$caption = $this->getData( $index, 'caption' );
		if ( ! ( $url && $caption ) ) {
			return
				"<div class=\"mySlides fade\">
            " . "<div class=\"numbertext\">" . sprintf( __( "%d out of %d" ), ( $index + 1 ), count( $this->images ) ) . "</div>
            " . "<img src=\"" . esc_url( $this->getData( $index, 'url' ) ) . "\" style=\"width:100%;\">
            " . "<div class=\"text\">" . esc_html( $this->getData( $index, 'caption' ) ) . "</div>
        </div>";
		}

		return null;
	}

	private function generateNavigationButtons() {
		return
			"<a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a><br>";
	}

	public function imagesExists() {
		if ( empty( $this->images ) ) {
			return false;
		}

		return true;
	}
}