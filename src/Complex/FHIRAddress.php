<?php namespace FHIR\Elements\Complex;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRAddress
 * @package FHIR\Elements\Complex
 */
class FHIRAddress extends AbstractFHIRComplexType
{
    /** @var FHIRCode */
    protected $use = null;

    /** @var FHIRString */
    protected $text = null;

    /** @var FHIRString[]|ElementCollection */
    protected $line;

    /** @var FHIRString */
    protected $city = null;

    /** @var FHIRString */
    protected $state = null;

    /** @var FHIRString */
    protected $zip = null;

    /** @var FHIRString */
    protected $country = null;

    /** @var FHIRPeriod */
    protected $period = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->line = new ElementCollection();
    }

    /**
     * @return FHIRCode
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * @param FHIRCode $use
     */
    public function setUse(FHIRCode $use)
    {
        $this->use = $use;
    }

    /**
     * @return FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param FHIRString $text
     */
    public function setText(FHIRString $text)
    {
        $this->text = $text;
    }

    /**
     * @return FHIRString[]
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param FHIRString $line
     */
    public function addLine(FHIRString $line)
    {
        $this->line->append($line);
    }

    /**
     * @return FHIRString
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param FHIRString $city
     */
    public function setCity(FHIRString $city)
    {
        $this->city = $city;
    }

    /**
     * @return FHIRString
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param FHIRString $state
     */
    public function setState(FHIRString $state)
    {
        $this->state = $state;
    }

    /**
     * @return FHIRString
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param FHIRString $zip
     */
    public function setZip(FHIRString $zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return FHIRString
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param FHIRString $country
     */
    public function setCountry(FHIRString $country)
    {
        $this->country = $country;
    }

    /**
     * @return FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param FHIRPeriod $period
     */
    public function setPeriod(FHIRPeriod $period)
    {
        $this->period = $period;
    }
}