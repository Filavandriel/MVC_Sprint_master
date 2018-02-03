<?php
class Pages extends Controller{
	protected function blog(){
		$viewmodel = new PageModel();
		$this->returnView($viewmodel->blog(), true);
	}
	protected function galeria(){
		$viewmodel = new PageModel();
		$this->returnView($viewmodel->galeria(), true);
	}
	protected function kontakt(){
		$viewmodel = new PageModel();
		$this->returnView($viewmodel->kontakt(), true);
	}
}