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

    function searchItems($searchQuery){
        $this->db->select('*');
        $this->db->from(TABLE_ITEM);
        $this->db->like(COLUMN_ITEM_NAME,$searchQuery, 'both');
        $this->db->order_by(COLUMN_ITEM_ID);
        $query = $this->db->get();
        return $query->result();
    }

    function insertUser($user)
    {

        chrome_log("RES");

        $insertUserData=array(
            COLUMN_USER_TYPE => intval($user[COLUMN_USER_TYPE]),
            COLUMN_USER_USERNAME => $user[COLUMN_USER_USERNAME],
            COLUMN_USER_PASSWORD => $user[COLUMN_USER_PASSWORD],
            COLUMN_FIRST_NAME => $user[COLUMN_FIRST_NAME],
            COLUMN_LAST_NAME => $user[COLUMN_LAST_NAME],
            COLUMN_ADDRESS => $user[COLUMN_ADDRESS],
            COLUMN_CC => intval($user[COLUMN_CC]),
            COLUMN_EMAIL => $user[COLUMN_EMAIL],
            COLUMN_SHIPPING_ADDRESS => $user[COLUMN_SHIPPING_ADDRESS],
            COLUMN_SECRET_QUESTION => $user[COLUMN_SECRET_QUESTION],
            COLUMN_SECRET_ANSWER => $user[COLUMN_SECRET_ANSWER]
        );

        chrome_log($insertUserData);
        $this->db->insert(TABLE_USER, $insertUserData);

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

	function insertItemShoppingCart($item_id, $user_id)
    {
        $insertItemShoppingCartData=array(
            COLUMN_SHOPPING_CART_ITEM_ID => intval($item_id),
            COLUMN_SHOPPING_CART_USER_ID => intval($user_id)
        );
        $this->db->insert("TABLE_SHOPPING_CART", $insertItemShoppingCartData);
    }
		
	function deleteUsers($id) {
        $this->db->where(COLUMN_USER_ID, $id);
        $this->db->delete(user);
    }
	
	function deleteItems($id) {
		$this->db->where(COLUMN_ITEM_ID, $id);
        $this->db->delete(items);
    }

    function deleteShoppingCartItem($id){
        $this->db->where(COLUMN_SHOPPING_CART_ID);
        $this->db->delete(shopping_cart);
    }


    function isExistingUsername($name) {
        $this->db->select("*");
        $this->db->from(TABLE_USER);
        $this->db->where(COLUMN_USER_USERNAME, $name);
        $query = $this->db->get();
        return count($query->result())>=1;
    }

    function isExistingEmail($email) {
        $this->db->select("*");
        $this->db->from(TABLE_USER);
        $this->db->where(COLUMN_EMAIL, $email);
        $query = $this->db->get();
        return count($query->result())>=1;
    }

    function queryUserAccount($name) {
        $this->db->select("*");
        $this->db->from(TABLE_USER);
        $this->db->where(COLUMN_USER_USERNAME, $name);
        $query = $this->db->get();
        return $query->row_array();
    }

    function updateUserPassword($id,$password){
        $this->db->where(COLUMN_USER_ID, $id);
        $this->db->update(COLUMN_USER_PASSWORD, $password);
    }

    function updateItemShoppingCartPurchase($id,$ispurchased){
        $this->db->where(COLUMN_SHOPPING_CART_USER_ID, $id);
        $this->db->update(COLUMN_SHOPPING_CART_IS_PURCHASED, $ispurchased);
    }

    function updateItemShoppingCartQty($id,$qty){
        $this->db->where(COLUMN_SHOPPING_CART_USER_ID, $id);
        $this->db->update(COLUMN_SHOPPING_CART_IS_QUANTITY, $qty);
    }

    function updateUserEmail($id,$email){
        $this->db->where(COLUMN_USER_ID, $id);
        $this->db->update(COLUMN_USER_PASSWORD, $email);
    }

    function searchCategory($category){
        $this->db->select('*');
        $this->db->from(TABLE_ITEM);
        $this->db->where(COLUMN_ITEM_NAME, $category);
        $this->db->order_by(COLUMN_ITEM_ID);

        $query = $this->db->get();

        return $query->result();
    }
}
?>