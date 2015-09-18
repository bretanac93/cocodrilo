<?php

namespace Cocodrilo\AppBundle\Entity;

use Application\Sonata\MediaBundle\Entity\Gallery;
use Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;


/**
 * Hotel
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Hotel
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="offering", type="boolean", nullable=true)
     */
    private $offering;

    /**
     * @var float
     *
     * @ORM\Column(name="priceOffert", type="decimal" , nullable=true)
     */
    private $priceOffert;

    /**
     * @var integer
     *
     * @ORM\Column(name="category", type="integer")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="Cocodrilo\AppBundle\Entity\FeedBack", mappedBy="hotels")
     */
    private $feedback;

    /**
     * @ORM\OneToMany(targetEntity="Cocodrilo\AppBundle\Entity\ImageUpload", mappedBy="images")
     */
    private $images;

    /**
     * @ORM\ManyToMany(targetEntity="Application\Sonata\MediaBundle\Entity\Gallery")
     * @ORM\JoinTable(name="hotel_gallery",
     *   joinColumns={@ORM\JoinColumn(name="hotel_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="gallery_id", referencedColumnName="id")}
     * )
     */
    protected $gallery;


    public function __construct()
    {
        $this->feedback = new ArrayCollection();
        $this->images = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Hotel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Hotel
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set offering
     *
     * @param boolean $offring
     * @return Hotel
     */
    public function setOffering($offering)
    {
        $this->offering = $offering;

        return $this;
    }

    /**
     * Get offering
     *
     * @return boolean
     */
    public function getOffering()
    {
        return $this->offering;
    }

    /**
     * Set priceOffert
     *
     * @param float $priceOffert
     * @return Hotel
     */
    public function setPriceOffert($priceOffert)
    {
        $this->priceOffert = $priceOffert;

        return $this;
    }

    /**
     * Get priceOffert
     *
     * @return float
     */
    public function getPriceOffert()
    {
        return $this->priceOffert;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Hotel
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Hotel
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set category
     *
     * @param integer $category
     * @return Hotel
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

    public function getFeedBack()
    {
        return $this->feedback;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function getGallery()
    {
        return $this->gallery;
    }

    public function setGallery(PersistentCollection $gallery)
    {
        $this->gallery = $gallery;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
