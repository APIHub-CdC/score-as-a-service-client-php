<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class ResponseDatosHistoricosData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'ResponseDatosHistoricosData';
    
    protected static $apihubTypes = [
        'datos_historicos' => '\ScoreAsAService\Client\Model\DatosHistorico[]',
        'score_meses60' => '\ScoreAsAService\Client\Model\ScoreMeses60[]',
        'revolcentes_cta' => '\ScoreAsAService\Client\Model\RevolcentesCta[]',
        'revolventes_exp' => '\ScoreAsAService\Client\Model\RevolventesExp[]',
        'por_puntualidad' => '\ScoreAsAService\Client\Model\PorPuntualidad[]'
    ];
    
    protected static $apihubFormats = [
        'datos_historicos' => null,
        'score_meses60' => null,
        'revolcentes_cta' => null,
        'revolventes_exp' => null,
        'por_puntualidad' => null
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
        'datos_historicos' => 'datosHistoricos',
        'score_meses60' => 'scoreMeses60',
        'revolcentes_cta' => 'revolcentesCta',
        'revolventes_exp' => 'revolventesExp',
        'por_puntualidad' => 'porPuntualidad'
    ];
    
    protected static $setters = [
        'datos_historicos' => 'setDatosHistoricos',
        'score_meses60' => 'setScoreMeses60',
        'revolcentes_cta' => 'setRevolcentesCta',
        'revolventes_exp' => 'setRevolventesExp',
        'por_puntualidad' => 'setPorPuntualidad'
    ];
    
    protected static $getters = [
        'datos_historicos' => 'getDatosHistoricos',
        'score_meses60' => 'getScoreMeses60',
        'revolcentes_cta' => 'getRevolcentesCta',
        'revolventes_exp' => 'getRevolventesExp',
        'por_puntualidad' => 'getPorPuntualidad'
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
        $this->container['datos_historicos'] = isset($data['datos_historicos']) ? $data['datos_historicos'] : null;
        $this->container['score_meses60'] = isset($data['score_meses60']) ? $data['score_meses60'] : null;
        $this->container['revolcentes_cta'] = isset($data['revolcentes_cta']) ? $data['revolcentes_cta'] : null;
        $this->container['revolventes_exp'] = isset($data['revolventes_exp']) ? $data['revolventes_exp'] : null;
        $this->container['por_puntualidad'] = isset($data['por_puntualidad']) ? $data['por_puntualidad'] : null;
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
    
    public function getDatosHistoricos()
    {
        return $this->container['datos_historicos'];
    }
    
    public function setDatosHistoricos($datos_historicos)
    {
        $this->container['datos_historicos'] = $datos_historicos;
        return $this;
    }
    
    public function getScoreMeses60()
    {
        return $this->container['score_meses60'];
    }
    
    public function setScoreMeses60($score_meses60)
    {
        $this->container['score_meses60'] = $score_meses60;
        return $this;
    }
    
    public function getRevolcentesCta()
    {
        return $this->container['revolcentes_cta'];
    }
    
    public function setRevolcentesCta($revolcentes_cta)
    {
        $this->container['revolcentes_cta'] = $revolcentes_cta;
        return $this;
    }
    
    public function getRevolventesExp()
    {
        return $this->container['revolventes_exp'];
    }
    
    public function setRevolventesExp($revolventes_exp)
    {
        $this->container['revolventes_exp'] = $revolventes_exp;
        return $this;
    }
    
    public function getPorPuntualidad()
    {
        return $this->container['por_puntualidad'];
    }
    
    public function setPorPuntualidad($por_puntualidad)
    {
        $this->container['por_puntualidad'] = $por_puntualidad;
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
