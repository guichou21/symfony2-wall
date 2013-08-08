<?php

namespace GbCreation\WallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File;

/**
* @ORM\Entity(repositoryClass="GbCreation\WallBundle\Repository\ItemRepository")
* @ORM\Table(name="gbc_wall_item")
* @ORM\HasLifecycleCallbacks()
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
     * @Assert\File(maxSize="6000000")
     */
    public $fileToUpload;


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
     * @Assert\DateTime(message="La date n'est pas valide") 
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
    protected $nbLike;

     /**
     * @ORM\Column(type="string", length=7, nullable=false)
     */
    protected $type;

    /**
     * @ORM\Column(type="text")
     */
    protected $tags;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="idItem", cascade={"remove"})
     */
    protected $comments;


    public function __construct()
    {
        $this->setRatio(1.000000);
        $this->setReverseRatio(1.000000);
        $this->setNbLike(0);
        $this->setType("Picture");
        $this->setDate(new \DateTime());



        $this->comments = new ArrayCollection();

        $this->setTags('');
    }

    public function __toString()
    {
        return $this->getDescription();
    }

    /*
    Ajout des fonctions d'upload d'image
    */

    public function getFullImagePath() {
        return null === $this->fileToUpload ? null : $this->getUploadRootDir(). $this->fileToUpload;
    }
 
    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir();
    }
 
    protected function getTmpUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__ . '/../../../../web/images/wall/';
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->fileToUpload) {
            return;
        }

        // la méthode « move » prend comme arguments le répertoire cible et le nom de fichier cible où le fichier doit être déplacé
        $this->fileToUpload->move($this->getUploadRootDir(), $this->file);

        unset($this->fileToUpload);
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->fileToUpload) {
            // faites ce que vous voulez pour générer un nom unique
            //$this->file = sha1(uniqid(mt_rand(), true)).'.'.$this->fileToUpload->guessExtension();
            $this->file = $this->fileToUpload->getClientOriginalName();
            //Remplace les caractères autres que alphanumériqu epar des -
            $this->file = preg_replace('/([^.a-z0-9]+)/i', '-', $this->file);
        }
    }

 /**
   * @ORM\PreRemove()
   */
  public function preRemoveUpload()
  {
    // On met a jour le path du fichier a supprimer
    $this->fileToUpload =  $this->getTmpUploadRootDir().$this->file;
    
  }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
          if (isset($this->fileToUpload) && file_exists ( $this->fileToUpload)) {
              unlink($this->fileToUpload);
        }
        
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

    /**
     * Add comments
     *
     * @param \GbCreation\WallBundle\Entity\Comment $comments
     * @return Item
     */
    public function addComment(\GbCreation\WallBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
    
        return $this;
    }

    /**
     * Remove comments
     *
     * @param \GbCreation\WallBundle\Entity\Comment $comments
     */
    public function removeComment(\GbCreation\WallBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set nbLike
     *
     * @param integer $nbLike
     * @return Item
     */
    public function setNbLike($nbLike)
    {
        $this->nbLike = $nbLike;
    
        return $this;
    }

    /**
     * Get nbLike
     *
     * @return integer 
     */
    public function getNbLike()
    {
        return $this->nbLike;
    }

}