<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CountryRepository")
 */
class Country
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
     * @ORM\Column(name="name", type="string", length=30, nullable=true)
     */
    private $name;

    /**
     * @var string
     * 
     * @ORM\Column(name="language", type="string", length=30, nullable=true)
     */
    private $language;

    /**
     * @return string|null $name
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     * 
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

        /**
     * @return string|null $language
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    
    /**
     * @param string $language
     * 
     * @return self
     */
    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }
      
}
