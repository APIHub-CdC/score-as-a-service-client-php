<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class RevolcentesCta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'RevolcentesCta';
    
    protected static $apihubTypes = [
        'ref_periodo' => 'string',
        'cuenta' => 'string',
        'por_util_revolvente_cta' => 'float',
        'numero_otorgante' => 'string',
        'tipo_otorgante' => 'string'
    ];
    
    protected static $apihubFormats = [
        'ref_periodo' => null,
        'cuenta' => null,
        'por_util_revolvente_cta' => null,
        'numero_otorgante' => null,
        'tipo_otorgante' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'ref_periodo' => 'refPeriodo',
        'cuenta' => 'cuenta',
        'por_util_revolvente_cta' => 'porUtilRevolventeCta',
        'numero_otorgante' => 'numeroOtorgante',
        'tipo_otorgante' => 'tipoOtorgante'
    ];
    
    protected static $setters = [
        'ref_periodo' => 'setRefPeriodo',
        'cuenta' => 'setCuenta',
        'por_util_revolvente_cta' => 'setPorUtilRevolventeCta',
        'numero_otorgante' => 'setNumeroOtorgante',
        'tipo_otorgante' => 'setTipoOtorgante'
    ];
    
    protected static $getters = [
        'ref_periodo' => 'getRefPeriodo',
        'cuenta' => 'getCuenta',
        'por_util_revolvente_cta' => 'getPorUtilRevolventeCta',
        'numero_otorgante' => 'getNumeroOtorgante',
        'tipo_otorgante' => 'getTipoOtorgante'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['ref_periodo'] = isset($data['ref_periodo']) ? $data['ref_periodo'] : null;
        $this->container['cuenta'] = isset($data['cuenta']) ? $data['cuenta'] : null;
        $this->container['por_util_revolvente_cta'] = isset($data['por_util_revolvente_cta']) ? $data['por_util_revolvente_cta'] : null;
        $this->container['numero_otorgante'] = isset($data['numero_otorgante']) ? $data['numero_otorgante'] : null;
        $this->container['tipo_otorgante'] = isset($data['tipo_otorgante']) ? $data['tipo_otorgante'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getRefPeriodo()
    {
        return $this->container['ref_periodo'];
    }
    
    public function setRefPeriodo($ref_periodo)
    {

        $this->container['ref_periodo'] = $ref_periodo;
        return $this;
    }
    
    public function getCuenta()
    {
        return $this->container['cuenta'];
    }
    
    public function setCuenta($cuenta)
    {

        $this->container['cuenta'] = $cuenta;
        return $this;
    }
    
    public function getPorUtilRevolventeCta()
    {
        return $this->container['por_util_revolvente_cta'];
    }
    
    public function setPorUtilRevolventeCta($por_util_revolvente_cta)
    {
        $this->container['por_util_revolvente_cta'] = $por_util_revolvente_cta;
        return $this;
    }
    
    public function getNumeroOtorgante()
    {
        return $this->container['numero_otorgante'];
    }
    
    public function setNumeroOtorgante($numero_otorgante)
    {
  
        $this->container['numero_otorgante'] = $numero_otorgante;
        return $this;
    }
    
    public function getTipoOtorgante()
    {
        return $this->container['tipo_otorgante'];
    }
    
    public function setTipoOtorgante($tipo_otorgante)
    {
 
        $this->container['tipo_otorgante'] = $tipo_otorgante;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
