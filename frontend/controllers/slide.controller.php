<?php

class SlideController {

	public function mostrarSlide() {
		$table = "slide";

		return SlideModel::mostrarSlide($table);
	}

}