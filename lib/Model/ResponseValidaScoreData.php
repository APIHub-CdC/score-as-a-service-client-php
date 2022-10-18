<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class ResponseValidaScoreData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'ResponseValidaScoreData';
    
    protected static $apihubTypes = [
        'score' => 'float',
        'fecha_nacimiento' => 'string',
        'tiene_score' => 'float',
        'tiene_fecha_nac' => 'float'
    ];
    
    protected static $apihubFormats = [
        'score' => null,
        'fecha_nacimiento' => null,
        'tiene_score' => null,
        'tiene_fecha_nac' => null
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
        'score' => 'score',
        'fecha_nacimiento' => 'fechaNacimiento',
        'tiene_score' => 'tieneScore',
        'tiene_fecha_nac' => 'tieneFechaNac'
    ];
    
    protected static $setters = [
        'score' => 'setScore',
        'fecha_nacimiento' => 'setFechaNacimiento',
        'tiene_score' => 'setTieneScore',
        'tiene_fecha_nac' => 'setTieneFechaNac'
    ];
    
    protected static $getters = [
        'score' => 'getScore',
        'fecha_nacimiento' => 'getFechaNacimiento',
        'tiene_score' => 'getTieneScore',
        'tiene_fecha_nac' => 'getTieneFechaNac'
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['fecha_nacimiento'] = isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null;
        $this->container['tiene_score'] = isset($data['tiene_score']) ? $data['tiene_score'] : null;
        $this->container['tiene_fecha_nac'] = isset($data['tiene_fecha_nac']) ? $data['tiene_fecha_nac'] : null;
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
    
    public function getScore()
    {
        return $this->container['score'];
    }
    
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }
    
    public function getFechaNacimiento()
    {
        return $this->container['fecha_nacimiento'];
    }
    
    public function setFechaNacimiento($fecha_nacimiento)
    {

        $this->container['fecha_nacimiento'] = $fecha_nacimiento;
        return $this;
    }
    
    public function getTieneScore()
    {
        return $this->container['tiene_score'];
    }
    
    public function setTieneScore($tiene_score)
    {
        $this->container['tiene_score'] = $tiene_score;
        return $this;
    }
    
    public function getTieneFechaNac()
    {
        return $this->container['tiene_fecha_nac'];
    }
    
    public function setTieneFechaNac($tiene_fecha_nac)
    {
        $this->container['tiene_fecha_nac'] = $tiene_fecha_nac;
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
