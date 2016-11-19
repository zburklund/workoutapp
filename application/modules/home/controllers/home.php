<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {


	function index() {

		$this->load->model('mdl_home');
		$data['query'] = $this->mdl_home->get('id');
		$data['module'] = 'home';
		$data['view_file'] = 'landing';
		echo Modules::run('template/admin', $data);
		
	}

	function get($order_by) {
		$this->load->model('mdl_home');
		$query = $this->mdl_home->get($order_by);
		return $query;
	}

	function get_with_limit($limit, $offset, $order_by) {
		$this->load->model('mdl_home');
		$query = $this->mdl_home->get_with_limit($limit, $offset, $order_by);
		return $query;
	}

	function get_where($id) {
		$this->load->model('mdl_home');
		$query = $this->mdl_home->get_where($id);
		return $query;
	}

	function get_where_custom($col, $value) {
		$this->load->model('mdl_home');
		$query = $this->mdl_home->get_where_custom($col, $value);
		return $query;
	}

	function _insert($data) {
		$this->load->model('mdl_home');
		$this->mdl_home->_insert($data);
	}

	function _update($id, $data) {
		$this->load->model('mdl_home');
		$this->mdl_home->_update($id, $data);
	}

	function _delete($id) {
		$this->load->model('mdl_home');
		$this->mdl_home->_delete($id);
	}

	function count_where($column, $value) {
		$this->load->model('mdl_home');
		$count = $this->mdl_home->count_where($column, $value);
		return $count;
	}

	function get_max() {
		$this->load->model('mdl_home');
		$max_id = $this->mdl_home->get_max();
		return $max_id;
	}

	function _custom_query($mysql_query) {
		$this->load->model('mdl_home');
		$query = $this->mdl_home->_custom_query($mysql_query);
		return $query;
	}

}