<?php namespace FHIR\Elements\Complex;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRCodeableConcept
 * @package FHIR\Elements\Complex
 */
class FHIRCodeableConcept extends AbstractFHIRComplexType
{
    /** @var FHIRCoding[]|ElementCollection */
    protected $coding;

    /** @var FHIRString */
    protected $text = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->coding = new ElementCollection();
    }

    /**
     * @return ElementCollection|FHIRCoding[]
     */
    public function getCoding()
    {
        return $this->coding;
    }

    /**
     * @param FHIRCoding $coding
     */
    public function addCoding(FHIRCoding $coding)
    {
        $this->coding->append($coding);
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
}