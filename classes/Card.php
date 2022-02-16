<?php
  class Card 
    {
      protected $name;
      protected $lastName;
      protected $number;
      protected $cvv;
      protected $date;

      public function __construct($name, $lastName, $number, $cvv, $date) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->cvv = $cvv;
        $this->date = $date;
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
       * Get the value of name
       */ 
      public function getLastName()
      {
        return $this->lastName;
      }

      /**
       * Set the value of name
       *
       * @return  self
       */ 
      public function setLastName($lastName)
      {
        $this->lastName = $lastName;

        return $this;
      }

      /**
       * Get the value of name
       */ 
      public function getNumber()
      {
        return $this->number;
      }

      /**
       * Set the value of name
       *
       * @return  self
       */ 
      public function setNumber($number)
      {
        $this->number = $number;

        return $this;
      }

      /**
       * Get the value of name
       */ 
      public function getCvv()
      {
        return $this->cvv;
      }

      /**
       * Set the value of name
       *
       * @return  self
       */ 
      public function setCvv($cvv)
      {
        $this->cvv = $cvv;

        return $this;
      }

      /**
       * Get the value of name
       */ 
      public function getDate()
      {
        return $this->date;
      }

      /**
       * Set the value of name
       *
       * @return  self
       */ 
      public function setDate($date)
      {
        $this->date = $date;

        return $this;
      }
    }
?>