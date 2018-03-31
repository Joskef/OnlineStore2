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


        if ($this->users->isValidUser($n,$p)) {
            $user = $this->users->queryUserAccount($n);
            $this->setSession($user);
            redirect(base_url());

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

     public function getAllItems(){
        $data = $this->users->queryAllItems();
        return $data;
    }

    public function addNewUser(){
        
    }
}