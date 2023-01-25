<?php

class Admin
{

  private $db;
  public $results;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getProduct()
  {
    $results = $this->db->query('SELECT * FROM `product`');

    return $results = $this->db->resultSet();
  }
  public function getP($id)
  {
    $results = $this->db->query("SELECT * FROM `product` where idproduct =$id");

    return $results = $this->db->resultSet();
  }

  public function add($data)
  {
    $this->db->query('INSERT INTO product (title, price, quantity, image) VALUES(:title, :price, :quantity,:image)');
    // Bind values
    $this->db->bind(':image', $data['image']);
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':price', $data['price']);
    $this->db->bind(':quantity', $data['quantity']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function delete($idproduct)
  {
    $this->db->query('DELETE FROM `product` WHERE `product`.`idproduct` = :idproduct');
    $this->db->bind(':idproduct', $idproduct);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function edit($data)
  {
    $this->db->query('UPDATE `product` SET `title`=:title,`price`=:price,`quantity`=:quantity WHERE `product`.`idproduct` = :idproduct');
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':price', $data['price']);
    $this->db->bind(':quantity', $data['quantity']);
    $this->db->bind(':idproduct', $data['id']);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function sort($data2)
  {

    switch ($data2['select']):
      case 'price_min':
        $results = $this->db->query('SELECT * FROM `product` ORDER BY `product`.`price` ASC');
        return  $results = $this->db->resultSet();
        break;
      case 'price_max':
        $results = $this->db->query('SELECT * FROM `product` ORDER BY `product`.`price` DESC');
        return $results = $this->db->resultSet();

        break;
      case 'date_old':
        $results = $this->db->query('SELECT * FROM `product` ORDER BY `product`.`add_date` ASC');
        return $results = $this->db->resultSet();
        break;
      case 'date_new':
        $results = $this->db->query('SELECT * FROM `product` ORDER BY `product`.`add_date` DESC');
        return $results = $this->db->resultSet();

        break;
      default:
        redirect('admins/dashboard');
        flash('register_success', 'please choose a sorting type');
    endswitch;
  }

  public function totalProducts()
  {
    $results = $this->db->query('SELECT MAX(price) AS "maxprice" FROM `product`;');
    return $results = $this->db->resultSet();
  }

  public function minimumPrice()
  {
    $data = $this->db->query('SELECT count(price) AS "totalproducts" FROM `product`;');
    return $results = $this->db->resultSet();
  }

  public function search($name)
  {
    $results = $this->db->query("SELECT * FROM `product` where title like '%$name%'");

    return $results = $this->db->resultSet();
  }
  
}
