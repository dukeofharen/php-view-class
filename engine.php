<?php
class ViewRenderer{
	public $view_location = "";
	public $data = array();
	
	public function ViewRenderer($view_location, $data = array()){
		$this->view_location = $view_location;
		$this->data = $data;
	}
	
	public function render(){
		ob_start();
		include($this->view_location);
		return ob_get_clean();
	}
}
?>