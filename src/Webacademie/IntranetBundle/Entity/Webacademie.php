<?php

namespace Webacademie\IntranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Webacademie
 *
 * @ORM\Table(name="wi_webacademie")
 * @ORM\Entity(repositoryClass="Webacademie\IntranetBundle\Repository\WebacademieRepository")
 */
class Webacademie
{
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
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;


    public function __toString() {
        return $this->city;
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
     * Set city.
     *
     * @param string $city
     *
     * @return Webacademie
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
}
