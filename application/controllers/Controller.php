<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 01/24/2017
 * Time: 10:48
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */



    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('chrome_logger');


    }

    public function index()
    {

        $this->home();
    }

    public function home()
    {

        //$this->load->model('check');
        //$maxNumberOfSlots = $this->student->getMaxNumberOfSlots();
        $data['items'] = $this->getAllItems();
        //$data['questionSets'] = $this->getQuestionSets();

        //$data['errorMessage'] = null;

        //$this->load->view('header');
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('anon_homepage',$data);//, $data); // $this->load->view('home', $data); set to this if data is set
        //$this->load->view('footer');
    }

    public function openPage($action){
        switch ($action) {
            case PAGE_LOGIN : $this->loginPage(""); break;
            case PAGE_REGISTER : $this->registerPage(); break;
            default : $this->home();
        }
    }



    public function loginPage($errorMessage)
    {
        //$data['login'] = $this->admin->queryAllModerators();
        $data['errorMessage'] = $errorMessage;
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('login', $data);
    }


    public function registerPage()
    {
        //login stuff
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('register');
    }

    public function doAction($action){
        switch ($action) {
            case USER_LOGIN : $this->login(); break;
            case USER_LOGOUT : $this->logout(); break;
            case USER_REGISTER : $this->register(); break;
            default : $this->home();
        }
    }

    public function setSession($user){
        $_SESSION['userType'] = $user[COLUMN_USER_TYPE];
        $_SESSION['userName'] = $user[COLUMN_USER_USERNAME];
        $_SESSION['userID'] = $user[COLUMN_USER_ID];
    }

    public function login(){
        $n = $_POST["username"];
        $p = $_POST["password"];


        if ($this->users->isExistingUsername($n)) {

            $user = $this->users->queryUserAccount($n);

            if($this->decryptString($p,$user[COLUMN_USER_PASSWORD]))
            {
                $this->setSession($user);
                redirect(base_url());

            }else{
                $errorMessage = "Invalid username or password.";
                $this->loginPage($errorMessage);
            }


        }
        else {
            $errorMessage = "Invalid username or password.";
            $this->loginPage($errorMessage);
        }
    }



    public function logout(){
        $this->session->sess_destroy();
        $this->session->unset_userdata('email');
        redirect(base_url());
    }


    public function register(){
        $getData = array(
            COLUMN_FIRST_NAME => $this->input->post(COLUMN_FIRST_NAME),
            COLUMN_LAST_NAME => $this->input->post(COLUMN_LAST_NAME),
            COLUMN_ADDRESS => $this->input->post(COLUMN_ADDRESS),
            COLUMN_CC => $this->input->post(COLUMN_CC),
            COLUMN_EMAIL => $this->input->post(COLUMN_EMAIL),
            COLUMN_USER_USERNAME => $this->input->post(COLUMN_USER_USERNAME),
            COLUMN_USER_PASSWORD => $this->encryptString($this->input->post(COLUMN_USER_PASSWORD)),
            COLUMN_SHIPPING_ADDRESS => $this->input->post(COLUMN_SHIPPING_ADDRESS),
            COLUMN_SECRET_QUESTION => $this->input->post(COLUMN_SECRET_QUESTION),
            COLUMN_SECRET_ANSWER => $this->encryptString($this->input->post(COLUMN_SECRET_ANSWER)),
            COLUMN_USER_TYPE => 1

        );





        if($this->users->isExistingUsername($getData[COLUMN_USER_USERNAME])){
            $data = array(
                'status' => 'fail',
                'message' => 'The Name ' .$getData[COLUMN_USER_USERNAME].' is already taken!'
            );
            echo json_encode($data);
        }else if($this->users->isExistingEmail($getData[COLUMN_EMAIL])){
            $data = array(
                'status' => 'fail',
                'message' => 'The Email ' .$getData[COLUMN_EMAIL].' is already taken!'
            );
            echo json_encode($data);

        }else{
            $this->users->insertUser($getData);

            $this->setSession($this->users->queryUserAccount($getData[COLUMN_USER_USERNAME]));

            $data = array(
                'status' => 'success',
                'message' => 'Successfully added '.$getData[COLUMN_USER_USERNAME].'!'
            );
            chrome_log($data);
            echo json_encode($data);
        }






    }

     public function getAllItems(){
        $data = $this->users->queryAllItems();
        return $data;
    }

    public function encryptString($input){
        $salt = "secure_salt";

        return password_hash($input.$salt, PASSWORD_DEFAULT);
    }

    public function decryptString($input,$hash){
        $salt = "secure_salt";
        return(password_verify($input.$salt, $hash));

    }

}