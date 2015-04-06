<?php namespace FHIR\Elements\Complex;

use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRContact
 * @package FHIR\Elements\Complex
 */
class FHIRContact extends AbstractFHIRComplexString
{
    /** @var FHIRCode */
    protected $system = null;

    /** @var FHIRCode */
    protected $use = null;

    /** @var FHIRPeriod */
    protected $period = null;

    /**
     * @return FHIRCode
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @param FHIRCode $system
     */
    public function setSystem(FHIRCode $system)
    {
        $this->system = $system;
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