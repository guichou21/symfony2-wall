<?php

namespace GbCreation\WallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="gbc_wall_item")
 */
class Item
{

	 /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $file;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $description;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;


    /**
     * @ORM\Column(type="decimal", precision=10, scale=6, nullable=false)
     */
    protected $ratio;

     /**
     * @ORM\Column(type="decimal", precision=10, scale=6, nullable=false)
     */
    protected $reverseRatio;

     /**
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $like;

     /**
     * @ORM\Column(type="string", length=7, nullable=false)
     */
    protected $type;

    /**
     * @ORM\Column(type="text")
     */
    protected $tags;



    public function __construct()
    {
        $this->setRatio(1.000000);
        $this->setReverseRatio(1.000000);
        $this->setLike(0);
        $this->setType("Picture");
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
     * Set file
     *
     * @param string $file
     * @return Item
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Item
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
     * Set date
     *
     * @param \DateTime $date
     * @return Item
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Set ratio
     *
     * @param float $ratio
     * @return Item
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;
    
        return $this;
    }

    /**
     * Get ratio
     *
     * @return float 
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * Set reverseRatio
     *
     * @param float $reverseRatio
     * @return Item
     */
    public function setReverseRatio($reverseRatio)
    {
        $this->reverseRatio = $reverseRatio;
    
        return $this;
    }

    /**
     * Get reverseRatio
     *
     * @return float 
     */
    public function getReverseRatio()
    {
        return $this->reverseRatio;
    }

    /**
     * Set like
     *
     * @param float $like
     * @return Item
     */
    public function setLike($like)
    {
        $this->like = $like;
    
        return $this;
    }

    /**
     * Get like
     *
     * @return float 
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * Set type
     *
     * @param float $type
     * @return Item
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return float 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Item
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    
        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }
}