<?php

namespace Webacademie\IntranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Language
 *
 * @ORM\Table(name="wi_language")
 * @ORM\Entity(repositoryClass="Webacademie\IntranetBundle\Repository\LanguageRepository")
 */
class Language
{
    /**
     * @ORM\OneToOne(targetEntity="Webacademie\IntranetBundle\Entity\Image")
     */
    private $image;
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    public function __toString() {
        return $this->name;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Language
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set image.
     *
     * @param \Webacademie\IntranetBundle\Entity\Image|null $image
     *
     * @return Language
     */
    public function setImage(\Webacademie\IntranetBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return \Webacademie\IntranetBundle\Entity\Image|null
     */
    public function getImage()
    {
        return $this->image;
    }
}
