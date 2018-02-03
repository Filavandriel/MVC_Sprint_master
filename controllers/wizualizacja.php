<?php
class Wizualizacja extends Controller{
	protected  function wizualizacjadrzwi(){
		$viewmodel = new WizualizacjaModel();
		$this->returnView($viewmodel->wizualizacjadrzwi(), true);
	}
	protected  function wizualizacjaokno(){
		$viewmodel = new WizualizacjaModel();
		$this->returnView($viewmodel->wizualizacjaokno(), true);
	}
}