<?php

namespace Webacademie\IntranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tutorial
 *
 * @ORM\Table(name="wi_tutorial")
 * @ORM\Entity(repositoryClass="Webacademie\IntranetBundle\Repository\TutorialRepository")
 */
class Tutorial
{
    /**
     * @ORM\ManyToOne(targetEntity="Webacademie\IntranetBundle\Entity\Language")
     */
    private $language;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="semester", type="integer")
     */
    private $semester;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer")
     */
    private $time;


    public function __toString() {
        return $this->title;
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
     * Set semester.
     *
     * @param int $semester
     *
     * @return Tutorial
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester.
     *
     * @return int
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Tutorial
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set time.
     *
     * @param int $time
     *
     * @return Tutorial
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time.
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set language.
     *
     * @param \Webacademie\IntranetBundle\Entity\Language|null $language
     *
     * @return Tutorial
     */
    public function setLanguage(\Webacademie\IntranetBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language.
     *
     * @return \Webacademie\IntranetBundle\Entity\Language|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
