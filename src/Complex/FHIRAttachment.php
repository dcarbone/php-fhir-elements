<?php namespace FHIR\Elements\Complex;

use FHIR\Elements\Simple\FHIRCode;
use FHIR\Elements\Primitive\FHIRBase64Binary;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRAttachment
 * @package FHIR\Elements\Complex
 */
class FHIRAttachment extends AbstractFHIRComplexType
{
    /** @var FHIRCode */
    protected $contentType = null;

    /** @var FHIRCode */
    protected $language = null;

    /** @var FHIRBase64Binary */
    protected $data = null;

    /** @var FHIRUri */
    protected $uri = null;

    /** @var FHIRInteger */
    protected $size = null;

    /** @var FHIRBase64Binary */
    protected $hash = null;

    /** @var FHIRString */
    protected $title = null;

    /**
     * @return FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param FHIRCode $contentType
     */
    public function setContentType(FHIRCode $contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return FHIRCode
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param FHIRCode $language
     */
    public function setLanguage(FHIRCode $language)
    {
        $this->language = $language;
    }

    /**
     * @return FHIRBase64Binary
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param FHIRBase64Binary $data
     */
    public function setData(FHIRBase64Binary $data)
    {
        $this->data = $data;
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
     */
    public function setUri(FHIRUri $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return FHIRInteger
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param FHIRInteger $size
     */
    public function setSize(FHIRInteger $size = null)
    {
        $this->size = $size;
    }

    /**
     * @return FHIRBase64Binary
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param FHIRBase64Binary $hash
     */
    public function setHash(FHIRBase64Binary $hash)
    {
        $this->hash = $hash;
    }

    /**
     * @return FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param FHIRString $title
     */
    public function setTitle(FHIRString $title)
    {
        $this->title = $title;
    }
}