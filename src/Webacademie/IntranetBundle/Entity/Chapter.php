<?php

namespace Webacademie\IntranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapter
 *
 * @ORM\Table(name="wi_chapter")
 * @ORM\Entity(repositoryClass="Webacademie\IntranetBundle\Repository\ChapterRepository")
 */
class Chapter
{
    /**
     * @ORM\ManyToOne(targetEntity="Webacademie\IntranetBundle\Entity\Tutorial")
     */
    private $tutorial;

    /**
     * @ORM\OneToOne(targetEntity="Webacademie\IntranetBundle\Entity\Video")
     */
    private $video;

    /**
     * @ORM\OneToOne(targetEntity="Webacademie\IntranetBundle\Entity\Exercise")
     */
    private $exercise;

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
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;


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
     * Set number.
     *
     * @param int $number
     *
     * @return Chapter
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Chapter
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
     * Set content.
     *
     * @param string $content
     *
     * @return Chapter
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set tutorial.
     *
     * @param \Webacademie\IntranetBundle\Entity\Tutorial|null $tutorial
     *
     * @return Chapter
     */
    public function setTutorial(\Webacademie\IntranetBundle\Entity\Tutorial $tutorial = null)
    {
        $this->tutorial = $tutorial;

        return $this;
    }

    /**
     * Get tutorial.
     *
     * @return \Webacademie\IntranetBundle\Entity\Tutorial|null
     */
    public function getTutorial()
    {
        return $this->tutorial;
    }
    
    /**
     * Set video.
     *
     * @param \Webacademie\IntranetBundle\Entity\Video|null $video
     *
     * @return Chapter
     */
    public function setVideo(\Webacademie\IntranetBundle\Entity\Video $video = null)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video.
     *
     * @return \Webacademie\IntranetBundle\Entity\Video|null
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set exercise.
     *
     * @param \Webacademie\IntranetBundle\Entity\Exercise|null $exercise
     *
     * @return Chapter
     */
    public function setExercise(\Webacademie\IntranetBundle\Entity\Exercise $exercise = null)
    {
        $this->exercise = $exercise;

        return $this;
    }

    /**
     * Get exercise.
     *
     * @return \Webacademie\IntranetBundle\Entity\Exercise|null
     */
    public function getExercise()
    {
        return $this->exercise;
    }
}
