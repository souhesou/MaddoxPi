<?php

namespace volontaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="volontaireBundle\Repository\commentaireRepository")
 */
class commentaire
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
     private $commenatire;

    /**
     * @return string
     */
    public function getCommenatire()
    {
        return $this->commenatire;
    }

    /**
     * @param string $commenatire
     */
    public function setCommenatire($commenatire)
    {
        $this->commenatire = $commenatire;
    }



    /**
     * @ORM\ManyToOne(targetEntity="event")
     *  @ORM\JoinColumn(name="event",referencedColumnName="id")
     */
    private $event;


    /**
     * @ORM\ManyToOne(targetEntity="volontaire")
     *  @ORM\JoinColumn(name="volontaire",referencedColumnName="cin")
     */
    private $volontaire;

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param mixed $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @return mixed
     */
    public function getVolontaire()
    {
        return $this->volontaire;
    }

    /**
     * @param mixed $volontaire
     */
    public function setVolontaire($volontaire)
    {
        $this->volontaire = $volontaire;
    }



}

