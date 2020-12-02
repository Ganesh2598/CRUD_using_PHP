<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Queries extends CI_Model {

        public function __construct()
        {
            parent::__construct();
        }

        public function getAll() {
            $data = $this->db->get("todos");
            if ($data->num_rows() > 0) {
                return $data->result();
            }
        }

        public function addTodo($data) {
            $this->db->insert("todos", $data);
        }

        public function viewTodo($id) {
            $data = $this->db->get_where("todos", array("id" => $id));
            if ($data->num_rows() > 0) {
                return $data->row();
            }
        }

        public function deleteTodo($id) {
            $this->db->delete("todos", ["id" => $id]);
        }
    }
?>