<?php
class Shares extends Controller{
	function __construct () {
        parent::__construct ();
    }
	protected function show(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->show(), true);
	}

	protected function add(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->add(), true);
	}
	protected function edit(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->edit(), true);
	}
}