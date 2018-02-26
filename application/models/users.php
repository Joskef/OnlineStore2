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
        $this->db->from(TABLE_USER);
        $this->db->order_by(COLUMN_USER_ID);
        $query = $this->db->get();
        return $query->result();
    }	

    function queryAllItems(){
        $this->db->select('*');
        $this->db->from(TABLE_ITEM);
        $this->db->order_by(COLUMN_ITEM_ID);
        $query = $this->db->get();
        return $query->result();
    }

    function insertUsers ($user_set,$user_name,$password,$first, $last, $address, $ccno, $emailadd, $shippingaddress, $secretquestion)
    {    $insertUserData=array(
            COLUMN_USER_TYPE => intval($user_set),
            COLUMN_USER_USERNAME => $user_name,
            COLUMN_USER_PASSWORD => $password,
            COLUMN_FIRST_NAME => $first,
			COLUMN_LAST_NAME => $last,
			COLUMN_ADDRESS => $address,
			COLUMN_CC => intval($ccno),
			COLUMN_EMAIL => $emailadd,
			COLUMN_SHIPPING_ADDRESS => $shippingaddress,
			COLUMN_SECRET_QUESTION => $secretquestion
        );
			
        $this->db->insert(user, $insertUserData);

    }
	
	function insertItem($item_category, $item_name, $item_price, $item_qty, $item_desc)
    {
        $insertItemData=array(
			COLUMN_ITEM_CATEGORY => intval($item_category),
			COLUMN_ITEM_NAME => $item_name,
			COLUMN_ITEM_PRICE => intval($item_price),
			COLUMN_ITEM_QTY => intval($item_qty),
			COLUMN_ITEM_DESC => $item_desc
		);
		$this->db->insert(category, $insertItemData);
			
		
		
	}
		
	function deleteUsers($id) {
        $this->db->where(COLUMN_USER_ID, $id);
        $this->db->delete(user);
    }
	
	function deleteItems($id) {
		$this->db->where(COLUMN_ITEM_ID, $id);
        $this->db->delete(items);
	}
}
?>