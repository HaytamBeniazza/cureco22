<?php

    class Admin {

        private $db;

        public function __construct(){
          $this->db = new Database;
        }

        public function getProduct() {
            $this->db->query('SELECT * FROM `product`');
            $results = $this->db->resultSet();
            return $results;
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

        public function delete() {

        }

        public function update() {

        }

    }