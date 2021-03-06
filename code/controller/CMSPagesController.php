<?php
class CMSPagesController extends CMSMain {
	
	static $url_segment = 'pages';
	static $url_rule = '/$Action/$ID/$OtherID';
	static $url_priority = 41;
	static $menu_title = 'Pages';	
	
	function init() {
		parent::init();
		
		Requirements::javascript(CMS_DIR . '/javascript/CMSPagesController.Tree.js');
	}
	
	function show($request) {
		$c = new CMSPageEditController();
		return $this->redirect(Controller::join_links($c->Link('show'), $request->param('ID')));
	}
	
}