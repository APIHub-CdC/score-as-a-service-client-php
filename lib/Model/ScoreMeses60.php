<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class ScoreMeses60 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'ScoreMeses60';
    
    protected static $apihubTypes = [
        'periodo' => 'string',
        'score' => 'float',
        'cve_reason_code1' => 'string',
        'descripcion_rc1' => 'string',
        'cve_reason_code2' => 'string',
        'descripcion_rc2' => 'string',
        'cve_reason_code3' => 'string',
        'descripcion_rc3' => 'string',
        'cve_reason_code4' => 'string',
        'descripcion_rc4' => 'string'
    ];
    
    protected static $apihubFormats = [
        'periodo' => null,
        'score' => null,
        'cve_reason_code1' => null,
        'descripcion_rc1' => null,
        'cve_reason_code2' => null,
        'descripcion_rc2' => null,
        'cve_reason_code3' => null,
        'descripcion_rc3' => null,
        'cve_reason_code4' => null,
        'descripcion_rc4' => null
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
        'periodo' => 'periodo',
        'score' => 'score',
        'cve_reason_code1' => 'cveReasonCode1',
        'descripcion_rc1' => 'descripcionRc1',
        'cve_reason_code2' => 'cveReasonCode2',
        'descripcion_rc2' => 'descripcionRc2',
        'cve_reason_code3' => 'cveReasonCode3',
        'descripcion_rc3' => 'descripcionRc3',
        'cve_reason_code4' => 'cveReasonCode4',
        'descripcion_rc4' => 'descripcionRc4'
    ];
    
    protected static $setters = [
        'periodo' => 'setPeriodo',
        'score' => 'setScore',
        'cve_reason_code1' => 'setCveReasonCode1',
        'descripcion_rc1' => 'setDescripcionRc1',
        'cve_reason_code2' => 'setCveReasonCode2',
        'descripcion_rc2' => 'setDescripcionRc2',
        'cve_reason_code3' => 'setCveReasonCode3',
        'descripcion_rc3' => 'setDescripcionRc3',
        'cve_reason_code4' => 'setCveReasonCode4',
        'descripcion_rc4' => 'setDescripcionRc4'
    ];
    
    protected static $getters = [
        'periodo' => 'getPeriodo',
        'score' => 'getScore',
        'cve_reason_code1' => 'getCveReasonCode1',
        'descripcion_rc1' => 'getDescripcionRc1',
        'cve_reason_code2' => 'getCveReasonCode2',
        'descripcion_rc2' => 'getDescripcionRc2',
        'cve_reason_code3' => 'getCveReasonCode3',
        'descripcion_rc3' => 'getDescripcionRc3',
        'cve_reason_code4' => 'getCveReasonCode4',
        'descripcion_rc4' => 'getDescripcionRc4'
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
        $this->container['periodo'] = isset($data['periodo']) ? $data['periodo'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['cve_reason_code1'] = isset($data['cve_reason_code1']) ? $data['cve_reason_code1'] : null;
        $this->container['descripcion_rc1'] = isset($data['descripcion_rc1']) ? $data['descripcion_rc1'] : null;
        $this->container['cve_reason_code2'] = isset($data['cve_reason_code2']) ? $data['cve_reason_code2'] : null;
        $this->container['descripcion_rc2'] = isset($data['descripcion_rc2']) ? $data['descripcion_rc2'] : null;
        $this->container['cve_reason_code3'] = isset($data['cve_reason_code3']) ? $data['cve_reason_code3'] : null;
        $this->container['descripcion_rc3'] = isset($data['descripcion_rc3']) ? $data['descripcion_rc3'] : null;
        $this->container['cve_reason_code4'] = isset($data['cve_reason_code4']) ? $data['cve_reason_code4'] : null;
        $this->container['descripcion_rc4'] = isset($data['descripcion_rc4']) ? $data['descripcion_rc4'] : null;
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
    
    public function getPeriodo()
    {
        return $this->container['periodo'];
    }
    
    public function setPeriodo($periodo)
    {
        
        $this->container['periodo'] = $periodo;
        return $this;
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
    
    public function getCveReasonCode1()
    {
        return $this->container['cve_reason_code1'];
    }
    
    public function setCveReasonCode1($cve_reason_code1)
    {

        $this->container['cve_reason_code1'] = $cve_reason_code1;
        return $this;
    }
    
    public function getDescripcionRc1()
    {
        return $this->container['descripcion_rc1'];
    }
    
    public function setDescripcionRc1($descripcion_rc1)
    {

        $this->container['descripcion_rc1'] = $descripcion_rc1;
        return $this;
    }
    
    public function getCveReasonCode2()
    {
        return $this->container['cve_reason_code2'];
    }
    
    public function setCveReasonCode2($cve_reason_code2)
    {

        $this->container['cve_reason_code2'] = $cve_reason_code2;
        return $this;
    }
    
    public function getDescripcionRc2()
    {
        return $this->container['descripcion_rc2'];
    }
    
    public function setDescripcionRc2($descripcion_rc2)
    {

        $this->container['descripcion_rc2'] = $descripcion_rc2;
        return $this;
    }
    
    public function getCveReasonCode3()
    {
        return $this->container['cve_reason_code3'];
    }
    
    public function setCveReasonCode3($cve_reason_code3)
    {

        $this->container['cve_reason_code3'] = $cve_reason_code3;
        return $this;
    }
    
    public function getDescripcionRc3()
    {
        return $this->container['descripcion_rc3'];
    }
    
    public function setDescripcionRc3($descripcion_rc3)
    {

        $this->container['descripcion_rc3'] = $descripcion_rc3;
        return $this;
    }
    
    public function getCveReasonCode4()
    {
        return $this->container['cve_reason_code4'];
    }
    
    public function setCveReasonCode4($cve_reason_code4)
    {

        $this->container['cve_reason_code4'] = $cve_reason_code4;
        return $this;
    }
    
    public function getDescripcionRc4()
    {
        return $this->container['descripcion_rc4'];
    }
    
    public function setDescripcionRc4($descripcion_rc4)
    {

        $this->container['descripcion_rc4'] = $descripcion_rc4;
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
