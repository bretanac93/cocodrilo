<?php

namespace Cocodrilo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cocodrilo\AppBundle\Entity\Hotel as hotel;

/**
 * FeedBack
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FeedBack
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="category", type="integer")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="string", length=255)
     */
    private $body;

    /**
     * @ORM\ManyToOne(targetEntity="Cocodrilo\AppBundle\Entity\Hotel", inversedBy="feedback")
     * @ORM\JoinColumn(name="hotel_id", referencedColumnName="id")
     */
    private $hotels;

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
     * Set username
     *
     * @param string $username
     * @return FeedBack
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return FeedBack
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set category
     *
     * @param integer $category
     * @return FeedBack
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return FeedBack
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    public function getHotels()
    {
        return $this->hotels;
    }

    public function setHotels(hotel $hotel)
    {
        $this->hotels = $hotel;

        return $this;
    }

    public function __toString()
    {
        return $this->getUsername();
    }
}
