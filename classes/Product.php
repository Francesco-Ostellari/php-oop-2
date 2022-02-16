<?php
  class Product 
  {
    protected $name;
    protected $price;
    protected $model;
    protected $brand;
    protected $categories;

    public function __construct($name, $price, $brand) {
        try {
          $this->name = $name;
          $this->setPrice($price);
          $this ->brand = $brand;
        } catch (TypeError $error) {
          throw new Exception ($error->getMessage());
        }    
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
      return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
      $this->name = $name;

      return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    

    public function setPrice(float $price)
    {
      if($price < 10) {
        throw new Exception ("Il prezzo non è corretto");
      } 
      
      $this->price = $price;

      return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getModel()
    {
      return $this->model;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setModel($model)
    {
      $this->model = $model;

      return $this;
    }

    public function getBrand()
    {
      return $this->brand;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
      $this->brand = $brand;

      return $this;
    }

    public function getCategories()
    {
      return $this->categories;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setCategories($categories)
    {
      $this->categories = $categories;

      return $this;
    }

  }
?>