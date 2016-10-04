<?php

namespace DuckTVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soumission
 *
 * @ORM\Table(name="soumission")
 * @ORM\Entity(repositoryClass="DuckTVBundle\Repository\SoumissionRepository")
 */
class Soumission
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
     * @var \DateTime
     *
     * @ORM\Column(name="Dtae", type="datetime")
     */
    private $dtae;

    /**
     * @var bool
     *
     * @ORM\Column(name="validation", type="boolean")
     */
    private $validation;


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
     * Set dtae
     *
     * @param \DateTime $dtae
     *
     * @return Soumission
     */
    public function setDtae($dtae)
    {
        $this->dtae = $dtae;

        return $this;
    }

    /**
     * Get dtae
     *
     * @return \DateTime
     */
    public function getDtae()
    {
        return $this->dtae;
    }

    /**
     * Set validation
     *
     * @param boolean $validation
     *
     * @return Soumission
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return bool
     */
    public function getValidation()
    {
        return $this->validation;
    }
}

