<?php namespace FHIR\Elements\Complex;

use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIROrganization;

/**
 * Class FHIRIdentifier
 * @package FHIR\Elements\Complex
 */
class FHIRIdentifier extends AbstractFHIRComplexString
{
    // @TODO Implement http://www.hl7.org/implement/standards/fhir/identifier-use.html enumeration

    /** @var FHIRCode */
    protected $use = null;

    /** @var FHIRString */
    protected $label = null;

    /** @var FHIRUri */
    protected $system = null;

    /** @var FHIRPeriod */
    protected $period = null;

    /** @var FHIROrganization */
    protected $assigner = null;

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
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param FHIRString $label
     */
    public function setLabel(FHIRString $label)
    {
        $this->label = $label;
    }

    /**
     * @return FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @param FHIRUri $system
     */
    public function setSystem(FHIRUri $system)
    {
        $this->system = $system;
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

    /**
     * @return FHIROrganization
     */
    public function getAssigner()
    {
        return $this->assigner;
    }

    /**
     * @param FHIROrganization $assigner
     */
    public function setAssigner(FHIROrganization $assigner)
    {
        $this->assigner = $assigner;
    }
}