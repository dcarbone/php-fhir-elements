<?php namespace FHIR\Elements\Complex;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRHumanName
 * @package FHIR\Elements\Complex
 */
class FHIRHumanName extends AbstractFHIRComplexType
{
    // @TODO Implement http://www.hl7.org/implement/standards/fhir/name-use.html enumeration

    /** @var FHIRCode */
    protected $use = null;

    /** @var FHIRString */
    protected $text = null;

    /** @var FHIRString[]|ElementCollection */
    protected $family;

    /** @var FHIRString[]|ElementCollection */
    protected $given;

    /** @var FHIRString[]|ElementCollection */
    protected $prefix;

    /** @var FHIRString[]|ElementCollection */
    protected $suffix;

    /** @var FHIRPeriod */
    protected $period = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->family = new ElementCollection();
        $this->given = new ElementCollection();
        $this->prefix = new ElementCollection();
        $this->suffix = new ElementCollection();
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
     * @return ElementCollection|\FHIR\Elements\Primitive\FHIRString[]
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * @param \FHIR\Elements\Primitive\FHIRString $family
     */
    public function addFamily(FHIRString $family)
    {
        $this->family->append($family);
    }

    /**
     * @return ElementCollection|\FHIR\Elements\Primitive\FHIRString[]
     */
    public function getGiven()
    {
        return $this->given;
    }

    /**
     * @param \FHIR\Elements\Primitive\FHIRString $given
     */
    public function addGiven(FHIRString $given)
    {
        $this->given->append($given);
    }

    /**
     * @return ElementCollection|\FHIR\Elements\Primitive\FHIRString[]
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param \FHIR\Elements\Primitive\FHIRString $prefix
     */
    public function addPrefix(FHIRString $prefix)
    {
        $this->prefix->append($prefix);
    }

    /**
     * @return ElementCollection|\FHIR\Elements\Primitive\FHIRString[]
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param \FHIR\Elements\Primitive\FHIRString $suffix
     */
    public function setSuffix(FHIRString $suffix)
    {
        $this->suffix->append($suffix);
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
    public function setPeriod($period)
    {
        $this->period = $period;
    }
}