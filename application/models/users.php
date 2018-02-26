<?php

class users extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function queryAllUsers(){
        $this->db->select('*');
        $this->db->from(user);
        $this->db->order_by(user_id);
        $query = $this->db->get();
        return $query->result();
    }	

    function queryAllItems(){
        $this->db->select('*');
        $this->db->from(items);
        $this->db->order_by(item_id);
        $query = $this->db->get();
        return $query->result();
    }

    function insertUsers() { ($user_set,$user_name,$password,$first, $last, $address, $ccno, $emailadd, $shippingaddress, $secretquestion)
        $insertUserData=array(
            user_type => intval($user_set),
            username => $user_name,
            password => $password,
            First_name => $first,
			Last_name => $last,
			Address => $address,
			cc => intval($ccno),
			email => $emailadd,
			shippingaddress => $shippingaddress,
			secretquestion => $secretquestion;
			
        $this->db->insert(user, $insertUserData);

    }
	
	function insertItem (){ ($item_category, $item_name, $item_price, $item_qty, $item_desc)
		$insertItemData=array(
			category_num => intval($item_category),
			Name => $item_name,
			price => intval($item_price),
			qty => intval($item_qty),
			desc => $item_desc;
			
		$this->db->insert(category, $insertItemData)
			
		)
		
	}
		
	function deleteUsers($id) {
        $this->db->where(user_id, $id);
        $this->db->delete(user);
    }
	
	function deleteItems($id) {
		$this->db->where(item_id, $id);
        $this->db->delete(items);
	}
}
?>