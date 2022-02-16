<?php 

        require_once __DIR__ ."/User.php";
        require_once __DIR__ ."/Product.php";

        class Shop  extends Product
        {
                protected $name;
                protected $employees;
                protected $product;
                protected $region;

                public function __construct($name, $employees, $region) {
                try {
                        $this->name = $name;
                        $this->setPrice($price);
                        $this->setProduct($product);
                        
                } catch (TypeError $error) {
                        throw new Exception ($error->getMessage());
                }    
                }


                /**
                 * Get the value of winery
                 */ 
                public function getName()
                {
                        return $this->name;
                }

                /**
                 * Set the value of winery
                 *
                 * @return  self
                 */ 
                public function setName($name)
                {
                        $this->name = $name;

                        return $this;
                }


                /**
                 * Get the value of winery
                 */ 
                public function getProduct()
                {
                        return $this->product;
                }

                /**
                 * Set the value of winery
                 *
                 * @return  self
                 */ 
                public function setProduct(Product $product)
                {
                        $this->product = $product;

                        return $this;
                }

                /**
                 * Get the value of winery
                 */ 
                public function getEmployees()
                {
                        return $this->employees;
                }

                /**
                 * Set the value of winery
                 *
                 * @return  self
                 */ 
                public function setEmployees($employees)
                {
                        $this->employees = $employees;

                        return $this;
                }

                /**
                 * Get the value of region
                 */ 
                public function getRegion()
                {
                        return $this->region;
                }

                /**
                 * Set the value of region
                 *
                 * @return  self
                 */ 
                public function setRegion($region)
                {
                        $this->region = $region;

                        return $this;
                }
        }
?>