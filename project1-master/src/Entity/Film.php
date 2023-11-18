<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\FilmRepository")
 */
Class Film {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Artiste
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Artiste", inversedBy="films")
     * @ORM\JoinColumn(name="artist_id",referencedColumnName="id")
     */
    private $artiste;

    /**
     * @var Country
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Country", inversedBy="country") 
     * @ORM\JoinColumn(name="country_id",referencedColumnName="id")
     */
    private $country;

   /**
    * @var User
    *
    * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="user") 
    * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
    */
    private $user;

    /**
     * @var string
     * 
     * @ORM\Column(name="title", type="string", length =30, nullable=true)
     */
    private $title;

    /**
     * @var \DateTime|null
     * 
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     * 
     * @ORM\Column(name="gendre", type="string", length=30, nullable=true)
     */
    private $gendre;

    /**
     * @var string
     * 
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @return integer|null
     */ 
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param integer $id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return  string
     */ 
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param  string  $title
     *
     * @return  self
     */ 
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return  \DateTime|null
     */ 
    public function getDate(): ?int
    {
        return $this->date;
    }

    /**
     * @param  \DateTime|null  $date
     *
     * @return  self
     */ 
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return  string
     */ 
    public function getGendre(): ?string
    {
        return $this->gendre;
    }

    /**
     * @param  string  $gendre
     *
     * @return  self
     */ 
    public function setGendre(string $gendre): self
    {
        $this->gendre = $gendre;

        return $this;
    }

    /**
     * @return  string
     */ 
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description): ?self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return  Artiste
     */ 
    public function getArtiste(): ?Artiste
    {
        return $this->artiste;
    }

    /**
     * @param  Artiste  $artiste
     *
     * @return  self
     */ 
    public function setArtiste(Artiste $artiste): self
    {
        $this->artiste = $artiste;

        return $this;
    }

    /**
     * @return  Country
     */ 
    public function getCountry(): ?Country
    {
        return $this->country;
    }

    /**
     * @param  Country  $country
     * 
     * @return  self
     */ 
    public function setCountry($country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return User
     */ 
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * 
     * @return  self
     */ 
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }
}