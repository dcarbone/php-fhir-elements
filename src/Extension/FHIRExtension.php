<?php namespace FHIR\Elements\Extension;

use FHIR\Common\Collection\ExtensionCollection;
use FHIR\Elements\AbstractFHIRElement;
use FHIR\Elements\Primitive\FHIRUri;

/**
 * Class FHIRExtension
 * @package FHIR\Elements\Extension
 */
class FHIRExtension extends AbstractFHIRElement implements FHIRExtensionInterface
{
    /** @var FHIRExtensionInterface[]|ExtensionCollection */
    protected $extension;

    /** @var FHIRUri */
    protected $uri = null;

    /** @var mixed */
    protected $value = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->extension = new ExtensionCollection();
    }

    /**
     * @return FHIRExtensionInterface[]|\FHIR\Common\Collection\ExtensionCollection
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param FHIRExtensionInterface $extension
     */
    public function addExtension(FHIRExtensionInterface $extension)
    {
        $this->extension->append($extension);
    }

    /**
     * @return FHIRUri
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param FHIRUri $uri
     * @return FHIRUri
     */
    public function setUri(FHIRUri $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}