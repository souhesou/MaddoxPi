<?php

namespace RefugieBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 *
 */
class Refugie
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $origine;

    /**
     * @ORM\ManyToOne(targetEntity="GcampBundle\Entity\Camp", cascade={"persist", "remove"}, inversedBy=RefugieBundle\Entity\Refugie")
     * @ORM\JoinColumn(name="idCamp",referencedColumnName="Id")
     */
    private $idCamp;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Refugie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Refugie
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Refugie
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set origine
     *
     * @param string $origine
     *
     * @return Refugie
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return string
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * @return mixed
     */
    public function getIdCamp()
    {
        return $this->idCamp;
    }

    /**
     * @param mixed $idCamp
     */
    public function setIdCamp($idCamp)
    {
        $this->idCamp = $idCamp;
    }

}

