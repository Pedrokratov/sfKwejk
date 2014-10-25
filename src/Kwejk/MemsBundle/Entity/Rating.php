<?php

namespace Kwejk\MemsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="Rating")
 * @ORM\Entity
 */
class Rating
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
     * @var \DateTime
     *
     * @ORM\Column(name="created_At", type="datetime")
     */
    private $createdAt;


    /**
     * @ORM\ManyToOne(targetEntity="Mem", inversedBy="ratings")
     * @ORM\JoinColumn(name="Mem", referencedColumnName="id")
     * @var Mem
     */
    private $mem;

    /**
     * @ORM\ManyToOne(targetEntity="Kwejk\UserBundle\Entity\User", inversedBy="ratings")
     * @ORM\JoinColumn(name="mem", referencedColumnName="id")
     * @var unknown
     */

    private $createdBy;
    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="smallint")
     */
    private $rating;


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
     * @return Rating
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
     * Set rating
     *
     * @param integer $rating
     * @return Rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }
}
