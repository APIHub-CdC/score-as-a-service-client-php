<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class ResponseDatosData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'ResponseDatosData';
    
    protected static $apihubTypes = [
        'npers_cve' => 'string',
        'fecha_ultima_consula' => 'string',
        'fecha_actualizacion' => 'string'
    ];
    
    protected static $apihubFormats = [
        'npers_cve' => null,
        'fecha_ultima_consula' => null,
        'fecha_actualizacion' => null
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
        'npers_cve' => 'npersCve',
        'fecha_ultima_consula' => 'fechaUltimaConsula',
        'fecha_actualizacion' => 'fechaActualizacion'
    ];
    
    protected static $setters = [
        'npers_cve' => 'setNpersCve',
        'fecha_ultima_consula' => 'setFechaUltimaConsula',
        'fecha_actualizacion' => 'setFechaActualizacion'
    ];
    
    protected static $getters = [
        'npers_cve' => 'getNpersCve',
        'fecha_ultima_consula' => 'getFechaUltimaConsula',
        'fecha_actualizacion' => 'getFechaActualizacion'
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
        $this->container['npers_cve'] = isset($data['npers_cve']) ? $data['npers_cve'] : null;
        $this->container['fecha_ultima_consula'] = isset($data['fecha_ultima_consula']) ? $data['fecha_ultima_consula'] : null;
        $this->container['fecha_actualizacion'] = isset($data['fecha_actualizacion']) ? $data['fecha_actualizacion'] : null;
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
    
    public function getNpersCve()
    {
        return $this->container['npers_cve'];
    }
    
    public function setNpersCve($npers_cve)
    {

        $this->container['npers_cve'] = $npers_cve;
        return $this;
    }
    
    public function getFechaUltimaConsula()
    {
        return $this->container['fecha_ultima_consula'];
    }
    
    public function setFechaUltimaConsula($fecha_ultima_consula)
    {
 
        $this->container['fecha_ultima_consula'] = $fecha_ultima_consula;
        return $this;
    }
    
    public function getFechaActualizacion()
    {
        return $this->container['fecha_actualizacion'];
    }
    
    public function setFechaActualizacion($fecha_actualizacion)
    {
        
        $this->container['fecha_actualizacion'] = $fecha_actualizacion;
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
