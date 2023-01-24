<?php

    class Admin {

        private $db;
        public $results;

        public function __construct(){
          $this->db = new Database;
        }

        public function getProduct() {
          $results = $this->db->query('SELECT * FROM `product`');
          
          return $results=$this->db->resultSet();
        }


        public function add($data) {
            $this->db->query('INSERT INTO product (title, price, quantity) VALUES(:title, :price, :quantity)');
            // Bind values
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':quantity', $data['quantity']);
      
            // Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
      
        }

        public function delete($idproduct) {
          $this->db->query('DELETE FROM `product` WHERE `product`.`idproduct` = :idproduct');
          $this->db->bind(':idproduct', $idproduct);
          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }

        }

        public function update() {

        }

        public function sort($data) {
          // if($data === 'price_min'){
          //   echo 'price min baby';
          //   die('min');
          // }
          // if($data === 'price_max'){
          //   echo 'price max baby';
          // }
          // if($data === 'date_new'){
          //   echo 'date min baby';
          // }
          // if($data === 'date_old'){
          //   echo 'date old baby';
          // }
//die(gettype($data['select']));

    switch ($data['select']):
        case 'price_min':
          $results = $this->db->query('SELECT * FROM `product` ORDER BY `product`.`price` ASC');
           $results=$this->db->resultSet();
          die(var_dump($results));
            break;
        case 'price_max':
          $results = $this->db->query('SELECT * FROM `product` ORDER BY `product`.`price` DESC');
          $results=$this->db->resultSet();
          die(print_r($results));
            break;
        case 'date_new':
          $results = $this->db->query('SELECT * FROM `product` ORDER BY `product`.`add_date` ASC');
          $results=$this->db->resultSet();
            break;
        case 'date_old':
          $results = $this->db->query('SELECT * FROM `product` ORDER BY `product`.`add_date` DESC');
          $results=$this->db->resultSet();
          die(print_r($results));
            break;
        default:
            echo "the default message displayed";
    endswitch;

          }
    }
