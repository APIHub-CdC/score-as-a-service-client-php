<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class ResponseScorePromedio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'ResponseScorePromedio';
    
    protected static $apihubTypes = [
        'http_status' => 'float',
        'success' => 'string',
        'message' => 'string',
        'data' => '\ScoreAsAService\Client\Model\ResponseScorePromedioData[]'
    ];
    
    protected static $apihubFormats = [
        'http_status' => null,
        'success' => null,
        'message' => null,
        'data' => null
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
        'http_status' => 'httpStatus',
        'success' => 'success',
        'message' => 'message',
        'data' => 'data'
    ];
    
    protected static $setters = [
        'http_status' => 'setHttpStatus',
        'success' => 'setSuccess',
        'message' => 'setMessage',
        'data' => 'setData'
    ];
    
    protected static $getters = [
        'http_status' => 'getHttpStatus',
        'success' => 'getSuccess',
        'message' => 'getMessage',
        'data' => 'getData'
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
        $this->container['http_status'] = isset($data['http_status']) ? $data['http_status'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
    
    public function getHttpStatus()
    {
        return $this->container['http_status'];
    }
    
    public function setHttpStatus($http_status)
    {
        $this->container['http_status'] = $http_status;
        return $this;
    }
    
    public function getSuccess()
    {
        return $this->container['success'];
    }
    
    public function setSuccess($success)
    {

        $this->container['success'] = $success;
        return $this;
    }
    
    public function getMessage()
    {
        return $this->container['message'];
    }
    
    public function setMessage($message)
    {
   
        $this->container['message'] = $message;
        return $this;
    }
    
    public function getData()
    {
        return $this->container['data'];
    }
    
    public function setData($data)
    {
        $this->container['data'] = $data;
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
