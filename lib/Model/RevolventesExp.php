<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class RevolventesExp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'RevolventesExp';
    
    protected static $apihubTypes = [
        'ref_periodo' => 'string',
        'por_util_revolvente_exp' => 'float'
    ];
    
    protected static $apihubFormats = [
        'ref_periodo' => null,
        'por_util_revolvente_exp' => null
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
        'por_util_revolvente_exp' => 'porUtilRevolventeExp'
    ];
    
    protected static $setters = [
        'ref_periodo' => 'setRefPeriodo',
        'por_util_revolvente_exp' => 'setPorUtilRevolventeExp'
    ];
    
    protected static $getters = [
        'ref_periodo' => 'getRefPeriodo',
        'por_util_revolvente_exp' => 'getPorUtilRevolventeExp'
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
        $this->container['por_util_revolvente_exp'] = isset($data['por_util_revolvente_exp']) ? $data['por_util_revolvente_exp'] : null;
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
    
    public function getPorUtilRevolventeExp()
    {
        return $this->container['por_util_revolvente_exp'];
    }
    
    public function setPorUtilRevolventeExp($por_util_revolvente_exp)
    {
        $this->container['por_util_revolvente_exp'] = $por_util_revolvente_exp;
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
