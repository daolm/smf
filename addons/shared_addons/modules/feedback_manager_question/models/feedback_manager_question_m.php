<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * The Feedback_manager_m Class
 * @Description: This is a model class process crud for test table
 * @Author: Hoang Thi Tuan Dung
 * @Date: 12/25/13
 * @Update: 12/25/2013
 */

class Feedback_manager_question_m extends MY_Model {

    protected $_table = "feedback_manager_question";

    public function __construct(){
        parent::__construct();
    }

    public function get_feedback_manager_question_list($limit, $offset, $base_where = array()){

        if(!empty($base_where)){
            if($base_where['title'] != ''){
                $this->db->like('feedback_manager.title', $base_where['title']);
            }
        }
        $this->db->select('feedback_manager_question.*,feedback_manager.title as title, question.title as q_title');
        $this->db->join('feedback_manager', 'feedback_manager.id = feedback_manager_question.feedback_manager_id');
        $this->db->join('question', 'question.id = feedback_manager_question.question_id');
        $this->db->order_by('created', 'DESC');
        parent::limit($limit, $offset);
        return parent::get_all();
    }

    public function get_feedback_manager_question_count($base_where = array()){

        if(!empty($base_where)){
            if($base_where['title'] != ''){
                $this->db->like('feedback_manager.title', $base_where['title']);
            }
        }
        $this->db->select('feedback_manager_question.*,feedback_manager.title as title, question.title as q_title');
        $this->db->join('feedback_manager', 'feedback_manager.id = feedback_manager_question.feedback_manager_id');
        $this->db->join('question', 'question.id = feedback_manager_question.question_id');

        return parent::count_all();
    }

    public function get_desc_all()
    {
        $this->db->order_by('created');
        return parent::get_all();
    }
} 