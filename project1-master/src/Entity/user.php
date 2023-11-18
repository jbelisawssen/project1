<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="first_name", type="string", length=30, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     * 
     * @ORM\Column(name="last_name", type="string", length=30, nullable=true)
     */
    private $lastName;

     /**
     * @var string
     * 
     * @ORM\Column(name="password", type="string", length=30, nullable=true)
     */
    private $password;

      /**
     * @var \Datetime|null
     * 
     * @ORM\Column(name="date_birth", type="datetime")
     */
    private $dateBirth;

    /**
     * @param string $firstName
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * 
     * @return self
     */
    public function setFirstname(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string|null $lastName
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    
    /**
     * @param string $lastName
     * 
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
    
    /**
     * @return string|null $password
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    
    /**
     * @param string $password
     * 
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }
    
    /**
     * @return \Datetime|null 
     */ 
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * @param \Datetime|null $dateBirth
     *
     * @return  self
     */ 
    public function setDateBirth(?\Datetime $dateBirth): self
    {  
        $this->dateBirth = $dateBirth;

        return $this;
    }
      
}
