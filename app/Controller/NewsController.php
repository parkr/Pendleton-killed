<?php
App::uses('AppController', 'Controller');
/**
 * News Controller
 *
 * @property News $News
 */
class NewsController extends AppController {

	public function index(){
		$this->set('articles', $this->News->find('all', array('order' => 'News.date_released DESC', 'recursive' => 1)));
	}
	
}
