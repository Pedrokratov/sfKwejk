<?php

namespace Kwejk\MemsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mems
 *
 * @ORM\Table(name="Mem")
 * @ORM\Entity
 */
class Mem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Comment",mappedBy="mem")
     * @var ArrayCollection
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="Rating",mappedBy="mem")
     * @var ArrayCollection
     */
    private $ratings;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_At", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="Kwejk\UserBundle\Entity\User", inversedBy="mems")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     * @var unknown
     */
    private $createdBy;
    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */


    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="image_Name", type="string", length=255)
     */
    private $imageName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_Accepted", type="boolean")
     */
    private $isAccepted;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Mems
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Mems
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Mems
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     * @return Mems
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string 
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set isAccepted
     *
     * @param boolean $isAccepted
     * @return Mems
     */
    public function setIsAccepted($isAccepted)
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }

    /**
     * Get isAccepted
     *
     * @return boolean 
     */
    public function getIsAccepted()
    {
        return $this->isAccepted;
    }
}
