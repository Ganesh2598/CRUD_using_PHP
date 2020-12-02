<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->dbforge();
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 20
			),
			'description' => array(
				'type' => 'TEXT'
			)
		));
		$this->dbforge->add_key("id", TRUE);
		$this->dbforge->create_table('todos', TRUE);
		$this->load->model("Queries");
		$data = $this->Queries->getAll();
		$this->load->view('main', ["data" => $data]);
	}

	public function create() {
		$this->load->view("addtodo");
	}

	public function save() {
		$data = $this->input->post();
		unset($data["submit"]);
		$this->load->model("Queries");
		$this->Queries->addTodo($data);
		$this->index();
	}

	public function view($id) {
		$this->load->model("Queries");
		$data = $this->Queries->viewTodo($id);
		$this->load->view("todoview", ["data" => $data]);
	}

	public function delete($id) {
		$this->load->model("Queries");
		$this->Queries->deleteTodo($id);
		$this->index();
	}

}
