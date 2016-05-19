<?php

namespace MSI\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zipcode
 *
 * @ORM\Table(name="zipcode")
 * @ORM\Entity(repositoryClass="MSI\CoreBundle\Repository\ZipcodeRepository")
 */
class Zipcode
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer", name="id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true, name="zipcode")
     */
    protected $zipcode;

    
    /**
     * @ORM\ManyToOne(targetEntity="MSI\CoreBundle\Entity\Country", cascade={"persist"})
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id", nullable=false)
     */
    protected  $country;

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
     * Set zipcode
     *
     * @param integer $zipcode
     * @return Zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return integer 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set country
     *
     * @param \MSI\CoreBundle\Entity\Country $country
     * @return Zipcode
     */
    public function setCountry(\MSI\CoreBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \MSI\CoreBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Zipcode
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }
}
