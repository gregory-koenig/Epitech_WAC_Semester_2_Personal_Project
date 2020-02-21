<?php

namespace Webacademie\IntranetBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\OneToOne(targetEntity="Webacademie\IntranetBundle\Entity\Webacademie")
     */
    private $webacademie;

    /**
     * @ORM\ManyToMany(targetEntity="Webacademie\IntranetBundle\Entity\Tutorial")
     *  @ORM\JoinTable(name="wi_user_tutorial")
     */
    private $tutorials;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     * 
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    Private $lastName;

    /**
     * @var string
     * 
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    Private $address;

    /**
     * @var string
     * 
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    Private $photo;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set firstName.
     *
     * @param string|null $firstName
     *
     * @return User
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string|null $lastName
     *
     * @return User
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address.
     *
     * @param string|null $address
     *
     * @return User
     */
    public function setAddress($address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set webacademie.
     *
     * @param \Webacademie\IntranetBundle\Entity\Webacademie|null $webacademie
     *
     * @return User
     */
    public function setWebacademie(\Webacademie\IntranetBundle\Entity\Webacademie $webacademie = null)
    {
        $this->webacademie = $webacademie;

        return $this;
    }

    /**
     * Get webacademie.
     *
     * @return \Webacademie\IntranetBundle\Entity\Webacademie|null
     */
    public function getWebacademie()
    {
        return $this->webacademie;
    }

    /**
     * Add tutorial.
     *
     * @param \OC\PlatformBundle\Entity\Tutorial $tutorial
     *
     * @return User
     */
    public function addTutorial(\OC\PlatformBundle\Entity\Tutorial $tutorial)
    {
        $this->tutorials[] = $tutorial;

        return $this;
    }

    /**
     * Remove tutorial.
     *
     * @param \OC\PlatformBundle\Entity\Tutorial $tutorial
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTutorial(\OC\PlatformBundle\Entity\Tutorial $tutorial)
    {
        return $this->tutorials->removeElement($tutorial);
    }

    /**
     * Get tutorials.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTutorials()
    {
        return $this->tutorials;
    }

    /**
     * Set photo.
     *
     * @param string|null $photo
     *
     * @return User
     */
    public function setPhoto($photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo.
     *
     * @return string|null
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
