<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ArtisteRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArtisteRepository")
 */
class Artiste
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
     * @var \Datetime|null
     * 
     * @ORM\Column(name="date_birth", type="datetime")
     */
    private $dateBirth;

    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Film", mappedBy="artiste")
     */
    private $films;

    /**
     * Artiste constructor
     */
    public function __construct()
    {
       $this->films = new ArrayCollection();
    }

    /**
     * @return integer|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Film[]
     */
    public function getFilms(): Collection
    {
        return $this->films;
    }
    
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
