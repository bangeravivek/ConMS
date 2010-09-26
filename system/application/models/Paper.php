<?php

	class Paper_model extends Model{
		$table='paper'
		function Paper_model(){
			parent::Model();
		}

		function create($data){
			$this->db->insert($table, $data); 
		}
	
		function get($data){
			$query=$this->db->get_where($table,$data);
			if($query->num_rows==0)
			{	echo('Nothing to retrieve');
				return FALSE;
			}
			else
				return ($query->result() as $row);
		}
		

		function get_reg_status($data){
			$this->db->select('Paper_status');
			$query=$this->db->where($table,$data);
			return ($query->result() as $row);
		}
		
		
		function payment_status($data){
                $CI =& get_instance();
                $CI->load->model('Payment_model');
		$query=$CI->Payment_model->payment_status($data);
                $this->_Payment_model = $CI->Payment_model;
		return $query->row_array();
		}			


		function get_track($data){
			$this->db->select('track');
			$query=$this->db->where($table,$data);
			return ($query->result() as $row);
		}		
		
					
		function update($data,$where){
            	$this->db->update($this->_table,$data,$where);
 	        }

		function get_author($data){
	
                $CI =& get_instance();
                $CI->load->model('authors_model');
		$query=$CI->authors_model->get_details($data);
                $this->_authors_model = $CI->authors_model;
		return $query->row_array();
		}
		

	}
?>