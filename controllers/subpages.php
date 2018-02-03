<?php
class Subpages extends Controller{
	protected function bramy(){
		$viewmodel = new SubpageModel();
		$this->returnView($viewmodel->bramy(), true);
	}
	protected function drzwiwewnetrzne(){
		$viewmodel = new SubpageModel();
		$this->returnView($viewmodel->drzwiwewnetrzne(), true);
	}
	protected function drzwizewnetrzne(){
		$viewmodel = new SubpageModel();
		$this->returnView($viewmodel->drzwizewnetrzne(), true);
	}
	protected function markizy(){
		$viewmodel = new SubpageModel();
		$this->returnView($viewmodel->markizy(), true);
	}
	protected function oknaaluminiowe(){
		$viewmodel = new SubpageModel();
		$this->returnView($viewmodel->oknaaluminiowe(), true);
	}
	protected function oknapcv(){
		$viewmodel = new SubpageModel();
		$this->returnView($viewmodel-oknapcv(), true);
	}
	protected function rolety(){
		$viewmodel = new SubpageModel();
		$this->returnView($viewmodel->rolety(), true);
	}
}