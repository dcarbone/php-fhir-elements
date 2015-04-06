<?php namespace FHIR\Elements\Complex;

use FHIR\Common\Collection\ExtensionCollection;
use FHIR\Elements\AbstractFHIRElement;
use FHIR\Elements\Extension\FHIRExtensionInterface;

/**
 * Class AbstractFHIRComplexType
 * @package FHIR\Elements\Complex
 */
abstract class AbstractFHIRComplexType extends AbstractFHIRElement implements FHIRComplexTypeInterface
{
    /** @var FHIRExtensionInterface[]|ExtensionCollection */
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
     * @return FHIRExtensionInterface[]|ExtensionCollection
     */
    public function getExtension()
    {
        return $this->extension;
    }
}