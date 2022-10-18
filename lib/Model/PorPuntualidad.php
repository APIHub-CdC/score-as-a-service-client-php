<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class PorPuntualidad implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'PorPuntualidad';
    
    protected static $apihubTypes = [
        'puntualidad_mes1' => 'string',
        'puntualidad_mes2' => 'string',
        'puntualidad_mes3' => 'string',
        'puntualidad_mes4' => 'string',
        'puntualidad_mes5' => 'string',
        'puntualidad_mes6' => 'string'
    ];
    
    protected static $apihubFormats = [
        'puntualidad_mes1' => null,
        'puntualidad_mes2' => null,
        'puntualidad_mes3' => null,
        'puntualidad_mes4' => null,
        'puntualidad_mes5' => null,
        'puntualidad_mes6' => null
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
        'puntualidad_mes1' => 'puntualidadMes1',
        'puntualidad_mes2' => 'puntualidadMes2',
        'puntualidad_mes3' => 'puntualidadMes3',
        'puntualidad_mes4' => 'puntualidadMes4',
        'puntualidad_mes5' => 'puntualidadMes5',
        'puntualidad_mes6' => 'puntualidadMes6'
    ];
    
    protected static $setters = [
        'puntualidad_mes1' => 'setPuntualidadMes1',
        'puntualidad_mes2' => 'setPuntualidadMes2',
        'puntualidad_mes3' => 'setPuntualidadMes3',
        'puntualidad_mes4' => 'setPuntualidadMes4',
        'puntualidad_mes5' => 'setPuntualidadMes5',
        'puntualidad_mes6' => 'setPuntualidadMes6'
    ];
    
    protected static $getters = [
        'puntualidad_mes1' => 'getPuntualidadMes1',
        'puntualidad_mes2' => 'getPuntualidadMes2',
        'puntualidad_mes3' => 'getPuntualidadMes3',
        'puntualidad_mes4' => 'getPuntualidadMes4',
        'puntualidad_mes5' => 'getPuntualidadMes5',
        'puntualidad_mes6' => 'getPuntualidadMes6'
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
        $this->container['puntualidad_mes1'] = isset($data['puntualidad_mes1']) ? $data['puntualidad_mes1'] : null;
        $this->container['puntualidad_mes2'] = isset($data['puntualidad_mes2']) ? $data['puntualidad_mes2'] : null;
        $this->container['puntualidad_mes3'] = isset($data['puntualidad_mes3']) ? $data['puntualidad_mes3'] : null;
        $this->container['puntualidad_mes4'] = isset($data['puntualidad_mes4']) ? $data['puntualidad_mes4'] : null;
        $this->container['puntualidad_mes5'] = isset($data['puntualidad_mes5']) ? $data['puntualidad_mes5'] : null;
        $this->container['puntualidad_mes6'] = isset($data['puntualidad_mes6']) ? $data['puntualidad_mes6'] : null;
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
    
    public function getPuntualidadMes1()
    {
        return $this->container['puntualidad_mes1'];
    }
    
    public function setPuntualidadMes1($puntualidad_mes1)
    {

        $this->container['puntualidad_mes1'] = $puntualidad_mes1;
        return $this;
    }
    
    public function getPuntualidadMes2()
    {
        return $this->container['puntualidad_mes2'];
    }
    
    public function setPuntualidadMes2($puntualidad_mes2)
    {

        $this->container['puntualidad_mes2'] = $puntualidad_mes2;
        return $this;
    }
    
    public function getPuntualidadMes3()
    {
        return $this->container['puntualidad_mes3'];
    }
    
    public function setPuntualidadMes3($puntualidad_mes3)
    {
 
        $this->container['puntualidad_mes3'] = $puntualidad_mes3;
        return $this;
    }
    
    public function getPuntualidadMes4()
    {
        return $this->container['puntualidad_mes4'];
    }
    
    public function setPuntualidadMes4($puntualidad_mes4)
    {
   
        $this->container['puntualidad_mes4'] = $puntualidad_mes4;
        return $this;
    }
    
    public function getPuntualidadMes5()
    {
        return $this->container['puntualidad_mes5'];
    }
    
    public function setPuntualidadMes5($puntualidad_mes5)
    {
   
        $this->container['puntualidad_mes5'] = $puntualidad_mes5;
        return $this;
    }
    
    public function getPuntualidadMes6()
    {
        return $this->container['puntualidad_mes6'];
    }
    
    public function setPuntualidadMes6($puntualidad_mes6)
    {
  
        $this->container['puntualidad_mes6'] = $puntualidad_mes6;
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
