<?php
  class Users extends Controller {
    protected $userModel;
    public function __construct(){
      $this->userModel = $this->model('User');
    }

    public function register(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
        ];

        // Validate Email
      
       
          // Check email
          if($this->userModel->findUserByEmail($data['email'])){

            flash('email_dej', 'Email is already taken','alert alert-danger');
            redirect('users/register');exit;
          }
      

        

       

        // Make sure errors are empty
       
          // Validated
          
          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          // Register User
          if($this->userModel->register($data)){
            flash('register_success', 'You are registered and can log in');
            redirect('users/login');
          } else {
            die('Something went wrong');
          }

       

      } else {
        // Init data
        $data =[
          'email' => '',
          'password' => '',
          'confirm_password' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Load view
        $this->view('users/register', $data);
      }
    }

    public function login(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
       
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
        ];

      

        

        // Make sure errors are empty
        
          // Validated
          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['email'], $data['password']);

          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
          } else {
            flash('login_err', 'information incorrect','alert alert-danger');
            $this->view('users/login');
          }
       


      } else {
        // Init data


        // Load view
        $this->view('users/login');
      }
    }

    public function createUserSession($user){
      $_SESSION['idadmin'] = $user->idadmin;
      $_SESSION['email'] = $user->email;
      redirect('pages/index');
    }

    public function logout(){
      unset($_SESSION['idadmin']);
      unset($_SESSION['email']);
      session_destroy();
      redirect('users/login');
    }

    public function isLoggedIn(){
      if(isset($_SESSION['idadmin'])){
        return true;
      } else {
        return false;
      }
    }
  }