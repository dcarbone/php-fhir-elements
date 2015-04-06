<?php namespace FHIR\Elements\Complex;

use FHIR\Common\Collection\ExtensionCollection;
use FHIR\Elements\Extension\FHIRExtensionInterface;
use FHIR\Elements\Primitive\FHIRDecimal;

/**
 * Class AbstractFHIRComplexDecimal
 * @package FHIR\Elements\Complex
 */
abstract class AbstractFHIRComplexDecimal extends FHIRDecimal implements FHIRComplexTypeInterface
{
    /** @var FHIRExtensionInterface[]|\FHIR\Common\Collection\ExtensionCollection */
    protected $extension;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->extension = new ExtensionCollection();
    }

    /**
     * @param FHIRExtensionInterface $extension
     */
    public function addExtension(FHIRExtensionInterface $extension)
    {
        $this->extension->append($extension);
    }

    /**
     * @return ExtensionCollection
     */
    public function getExtension()
    {
        return $this->extension;
    }
}