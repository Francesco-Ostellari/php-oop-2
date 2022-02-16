<?php
        require_once __DIR__ ."/../traits/FasciaUtente.php";
        require_once __DIR__ ."/Card.php";
        class User 
        {
                use FasciaUtente;
                protected $name;
                protected $lastName;
                protected $address;
                protected $phoneNumber;
                protected $mail;
                protected $card;
                protected $fasciaUtente;

                public function __construct($name, $lastName, $address, $phoneNumber, $mail, $card) {
                        $this->name = $name;
                        $this -> lastName = $lastName;
                        $this->address = $address;
                        $this->phoneNumber = $phoneNumber;
                        $this->mail = $mail;
                        $this->setCard($card);
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
                 * Get the value of address
                 */ 
                public function getAddress()
                {
                        return $this->address;
                }

                /**
                 * Set the value of address
                 *
                 * @return  self
                 */ 
                public function setAddress($address)
                {
                        $this->address = $address;

                        return $this;
                }

                /**
                 * Get the value of phoneNumber
                 */ 
                public function getPhoneNumber()
                {
                        return $this->phoneNumber;
                }

                /**
                 * Set the value of phoneNumber
                 *
                 * @return  self
                 */ 
                public function setPhoneNumber($phoneNumber)
                {
                        $this->phoneNumber = $phoneNumber;

                        return $this;
                }

                public function getMail()
                {
                        return $this->mail;
                }

                /**
                 * Set the value of phoneNumber
                 *
                 * @return  self
                 */ 
                public function setMail($mail)
                {
                        $this->mail = $mail;

                        return $this;
                }

                public function getCard()
                {
                        return $this->mail;
                }

                /**
                 * Set the value of phoneNumber
                 *
                 * @return  self
                 */ 
                public function setCard(Card $card)
                {
                        $this->card = $card;

                        return $this;
                }

                public function getFasciaUtente()
                {
                        return $this->fasciaUtente;
                }

                /**
                 * Set the value of phoneNumber
                 *
                 * @return  self
                 */ 
                public function setFasciaUtente(FasciaUtente $fasciaUtente)
                {
                        $this->fasciaUtente = $fasciaUtente;

                        return $this;
                }
        }
?>