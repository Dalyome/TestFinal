<?php

namespace Mike\CRUDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="dirstname", type="string", length=45, nullable=true)
     */
    private $dirstname;



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
     *
     * @return Utilisateur
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function __toString()
    {
        return $this->name;
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
     * Set dirstname
     *
     * @param string $dirstname
     *
     * @return Utilisateur
     */
    public function setDirstname($dirstname)
    {
        $this->dirstname = $dirstname;

        return $this;
    }

    /**
     * Get dirstname
     *
     * @return string
     */
    public function getDirstname()
    {
        return $this->dirstname;
    }
}
