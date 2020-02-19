<?php

namespace volontaireBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


/**
 * event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="volontaireBundle\Repository\eventRepository")
 */
class event
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="affiche", type="string", length=255)
     */
    private $affiche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return event
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set affiche
     *
     * @param string $affiche
     *
     * @return event
     */
    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;

        return $this;
    }

    /**
     * Get affiche
     *
     * @return string
     */
    public function getAffiche()
    {
        return $this->affiche;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return event
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
     * Set prix
     *
     * @param float $prix
     *
     * @return event
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return event
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
     * Set lieu
     *
     * @param string $lieu
     *
     * @return event
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @ORM\ManyToOne(targetEntity="partenaire")
     *  @ORM\JoinColumn(name="partenaire",referencedColumnName="id")
     */
    private $partenaire;

    /**
     * @return mixed
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }

     /**
     * @param mixed $partenaire
     */
    public function setPartenaire($partenaire)
    {
        $this->partenaire = $partenaire;
    }


    /**
     * @Assert\File(maxSize="500K")
     */
    public $file;




    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    public function getWebPath()
    {
        return null === $this->affiche ? null : $this->getUploadDir() . '/' . $this->affiche;
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'images';
    }


    public function uploadProfilePicture()
    {

        if ($this->getFile())
        {
            $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
            $this->affiche = $this->file->getClientOriginalName();
            $this->file = null;

        }
    }




}

