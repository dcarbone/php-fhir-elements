<?php namespace FHIR\Elements\Complex;

use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Infrastructure\FHIRValueSet;

/**
 * Class FHIRCoding
 * @package FHIR\Elements\Complex
 */
class FHIRCoding extends AbstractFHIRComplexType
{
    /** @var FHIRUri */
    protected $system = null;

    /** @var FHIRString */
    protected $version = null;

    /** @var FHIRString */
    protected $code = null;

    /** @var FHIRString */
    protected $display = null;

    /** @var FHIRBoolean */
    protected $primary = null;

    /** @var FHIRValueSet */
    protected $valueSet = null;

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
     * @return FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param FHIRString $version
     */
    public function setVersion(FHIRString $version)
    {
        $this->version = $version;
    }

    /**
     * @return FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCode $code
     */
    public function setCode(FHIRCode $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param FHIRString $display
     */
    public function setDisplay(FHIRString $display)
    {
        $this->display = $display;
    }

    /**
     * @return FHIRBoolean
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param FHIRBoolean $primary
     */
    public function setPrimary(FHIRBoolean $primary)
    {
        $this->primary = $primary;
    }

    /**
     * @return FHIRValueSet
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * @param FHIRValueSet $valueSet
     */
    public function setValueSet(FHIRValueSet $valueSet)
    {
        $this->valueSet = $valueSet;
    }
}