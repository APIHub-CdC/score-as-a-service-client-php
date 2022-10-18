<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class ResponseScorePromedioData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'ResponseScorePromedioData';
    
    protected static $apihubTypes = [
        'nperscve' => 'string',
        'folio' => 'string',
        'fecha_ejec' => 'string',
        'edo_id' => 'float',
        'cant_edad' => 'string',
        'cve_tipo_generacion' => 'string',
        'tipo_generacion' => 'string',
        'num_score' => 'float',
        'prom_score_edo_generacion' => 'float',
        'percentil_score_edo_generacion' => 'float',
        'promedio_score_generacion' => 'float',
        'percentil_score_generacion' => 'float',
        'promedio_score_edo' => 'float',
        'percentil_score_edo' => 'float',
        'promedio_score' => 'float',
        'percentil_score' => 'float',
        'total_score_edo_generacion' => 'float',
        'total_score_generacion' => 'float',
        'total_score_edo' => 'float',
        'total_score' => 'float',
        'total_pers_edo_generacion' => 'float',
        'total_personas_generacion' => 'float',
        'total_personas_estado' => 'float',
        'total_personas' => 'float'
    ];
    
    protected static $apihubFormats = [
        'nperscve' => null,
        'folio' => null,
        'fecha_ejec' => null,
        'edo_id' => null,
        'cant_edad' => null,
        'cve_tipo_generacion' => null,
        'tipo_generacion' => null,
        'num_score' => null,
        'prom_score_edo_generacion' => null,
        'percentil_score_edo_generacion' => null,
        'promedio_score_generacion' => null,
        'percentil_score_generacion' => null,
        'promedio_score_edo' => null,
        'percentil_score_edo' => null,
        'promedio_score' => null,
        'percentil_score' => null,
        'total_score_edo_generacion' => null,
        'total_score_generacion' => null,
        'total_score_edo' => null,
        'total_score' => null,
        'total_pers_edo_generacion' => null,
        'total_personas_generacion' => null,
        'total_personas_estado' => null,
        'total_personas' => null
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
        'nperscve' => 'nperscve',
        'folio' => 'folio',
        'fecha_ejec' => 'fechaEjec',
        'edo_id' => 'edoId',
        'cant_edad' => 'cantEdad',
        'cve_tipo_generacion' => 'cveTipoGeneracion',
        'tipo_generacion' => 'tipoGeneracion',
        'num_score' => 'numScore',
        'prom_score_edo_generacion' => 'promScoreEdoGeneracion',
        'percentil_score_edo_generacion' => 'percentilScoreEdoGeneracion',
        'promedio_score_generacion' => 'promedioScoreGeneracion',
        'percentil_score_generacion' => 'percentilScoreGeneracion',
        'promedio_score_edo' => 'promedioScoreEdo',
        'percentil_score_edo' => 'percentilScoreEdo',
        'promedio_score' => 'promedioScore',
        'percentil_score' => 'percentilScore',
        'total_score_edo_generacion' => 'totalScoreEdoGeneracion',
        'total_score_generacion' => 'totalScoreGeneracion',
        'total_score_edo' => 'totalScoreEdo',
        'total_score' => 'totalScore',
        'total_pers_edo_generacion' => 'totalPersEdoGeneracion',
        'total_personas_generacion' => 'totalPersonasGeneracion',
        'total_personas_estado' => 'totalPersonasEstado',
        'total_personas' => 'totalPersonas'
    ];
    
    protected static $setters = [
        'nperscve' => 'setNperscve',
        'folio' => 'setFolio',
        'fecha_ejec' => 'setFechaEjec',
        'edo_id' => 'setEdoId',
        'cant_edad' => 'setCantEdad',
        'cve_tipo_generacion' => 'setCveTipoGeneracion',
        'tipo_generacion' => 'setTipoGeneracion',
        'num_score' => 'setNumScore',
        'prom_score_edo_generacion' => 'setPromScoreEdoGeneracion',
        'percentil_score_edo_generacion' => 'setPercentilScoreEdoGeneracion',
        'promedio_score_generacion' => 'setPromedioScoreGeneracion',
        'percentil_score_generacion' => 'setPercentilScoreGeneracion',
        'promedio_score_edo' => 'setPromedioScoreEdo',
        'percentil_score_edo' => 'setPercentilScoreEdo',
        'promedio_score' => 'setPromedioScore',
        'percentil_score' => 'setPercentilScore',
        'total_score_edo_generacion' => 'setTotalScoreEdoGeneracion',
        'total_score_generacion' => 'setTotalScoreGeneracion',
        'total_score_edo' => 'setTotalScoreEdo',
        'total_score' => 'setTotalScore',
        'total_pers_edo_generacion' => 'setTotalPersEdoGeneracion',
        'total_personas_generacion' => 'setTotalPersonasGeneracion',
        'total_personas_estado' => 'setTotalPersonasEstado',
        'total_personas' => 'setTotalPersonas'
    ];
    
    protected static $getters = [
        'nperscve' => 'getNperscve',
        'folio' => 'getFolio',
        'fecha_ejec' => 'getFechaEjec',
        'edo_id' => 'getEdoId',
        'cant_edad' => 'getCantEdad',
        'cve_tipo_generacion' => 'getCveTipoGeneracion',
        'tipo_generacion' => 'getTipoGeneracion',
        'num_score' => 'getNumScore',
        'prom_score_edo_generacion' => 'getPromScoreEdoGeneracion',
        'percentil_score_edo_generacion' => 'getPercentilScoreEdoGeneracion',
        'promedio_score_generacion' => 'getPromedioScoreGeneracion',
        'percentil_score_generacion' => 'getPercentilScoreGeneracion',
        'promedio_score_edo' => 'getPromedioScoreEdo',
        'percentil_score_edo' => 'getPercentilScoreEdo',
        'promedio_score' => 'getPromedioScore',
        'percentil_score' => 'getPercentilScore',
        'total_score_edo_generacion' => 'getTotalScoreEdoGeneracion',
        'total_score_generacion' => 'getTotalScoreGeneracion',
        'total_score_edo' => 'getTotalScoreEdo',
        'total_score' => 'getTotalScore',
        'total_pers_edo_generacion' => 'getTotalPersEdoGeneracion',
        'total_personas_generacion' => 'getTotalPersonasGeneracion',
        'total_personas_estado' => 'getTotalPersonasEstado',
        'total_personas' => 'getTotalPersonas'
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
        $this->container['nperscve'] = isset($data['nperscve']) ? $data['nperscve'] : null;
        $this->container['folio'] = isset($data['folio']) ? $data['folio'] : null;
        $this->container['fecha_ejec'] = isset($data['fecha_ejec']) ? $data['fecha_ejec'] : null;
        $this->container['edo_id'] = isset($data['edo_id']) ? $data['edo_id'] : null;
        $this->container['cant_edad'] = isset($data['cant_edad']) ? $data['cant_edad'] : null;
        $this->container['cve_tipo_generacion'] = isset($data['cve_tipo_generacion']) ? $data['cve_tipo_generacion'] : null;
        $this->container['tipo_generacion'] = isset($data['tipo_generacion']) ? $data['tipo_generacion'] : null;
        $this->container['num_score'] = isset($data['num_score']) ? $data['num_score'] : null;
        $this->container['prom_score_edo_generacion'] = isset($data['prom_score_edo_generacion']) ? $data['prom_score_edo_generacion'] : null;
        $this->container['percentil_score_edo_generacion'] = isset($data['percentil_score_edo_generacion']) ? $data['percentil_score_edo_generacion'] : null;
        $this->container['promedio_score_generacion'] = isset($data['promedio_score_generacion']) ? $data['promedio_score_generacion'] : null;
        $this->container['percentil_score_generacion'] = isset($data['percentil_score_generacion']) ? $data['percentil_score_generacion'] : null;
        $this->container['promedio_score_edo'] = isset($data['promedio_score_edo']) ? $data['promedio_score_edo'] : null;
        $this->container['percentil_score_edo'] = isset($data['percentil_score_edo']) ? $data['percentil_score_edo'] : null;
        $this->container['promedio_score'] = isset($data['promedio_score']) ? $data['promedio_score'] : null;
        $this->container['percentil_score'] = isset($data['percentil_score']) ? $data['percentil_score'] : null;
        $this->container['total_score_edo_generacion'] = isset($data['total_score_edo_generacion']) ? $data['total_score_edo_generacion'] : null;
        $this->container['total_score_generacion'] = isset($data['total_score_generacion']) ? $data['total_score_generacion'] : null;
        $this->container['total_score_edo'] = isset($data['total_score_edo']) ? $data['total_score_edo'] : null;
        $this->container['total_score'] = isset($data['total_score']) ? $data['total_score'] : null;
        $this->container['total_pers_edo_generacion'] = isset($data['total_pers_edo_generacion']) ? $data['total_pers_edo_generacion'] : null;
        $this->container['total_personas_generacion'] = isset($data['total_personas_generacion']) ? $data['total_personas_generacion'] : null;
        $this->container['total_personas_estado'] = isset($data['total_personas_estado']) ? $data['total_personas_estado'] : null;
        $this->container['total_personas'] = isset($data['total_personas']) ? $data['total_personas'] : null;
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
    
    public function getNperscve()
    {
        return $this->container['nperscve'];
    }
    
    public function setNperscve($nperscve)
    {
        if (!is_null($nperscve) && (mb_strlen($nperscve) > 9)) {
            throw new \InvalidArgumentException('invalid length for $nperscve when calling ResponseScorePromedioData., must be smaller than or equal to 9.');
        }
        if (!is_null($nperscve) && (mb_strlen($nperscve) < 9)) {
            throw new \InvalidArgumentException('invalid length for $nperscve when calling ResponseScorePromedioData., must be bigger than or equal to 9.');
        }
        $this->container['nperscve'] = $nperscve;
        return $this;
    }
    
    public function getFolio()
    {
        return $this->container['folio'];
    }
    
    public function setFolio($folio)
    {
       
        $this->container['folio'] = $folio;
        return $this;
    }
    
    public function getFechaEjec()
    {
        return $this->container['fecha_ejec'];
    }
    
    public function setFechaEjec($fecha_ejec)
    {
        
        $this->container['fecha_ejec'] = $fecha_ejec;
        return $this;
    }
    
    public function getEdoId()
    {
        return $this->container['edo_id'];
    }
    
    public function setEdoId($edo_id)
    {
        $this->container['edo_id'] = $edo_id;
        return $this;
    }
    
    public function getCantEdad()
    {
        return $this->container['cant_edad'];
    }
    
    public function setCantEdad($cant_edad)
    {

        $this->container['cant_edad'] = $cant_edad;
        return $this;
    }
    
    public function getCveTipoGeneracion()
    {
        return $this->container['cve_tipo_generacion'];
    }
    
    public function setCveTipoGeneracion($cve_tipo_generacion)
    {
     
        $this->container['cve_tipo_generacion'] = $cve_tipo_generacion;
        return $this;
    }
    
    public function getTipoGeneracion()
    {
        return $this->container['tipo_generacion'];
    }
    
    public function setTipoGeneracion($tipo_generacion)
    {
       
        $this->container['tipo_generacion'] = $tipo_generacion;
        return $this;
    }
    
    public function getNumScore()
    {
        return $this->container['num_score'];
    }
    
    public function setNumScore($num_score)
    {
        $this->container['num_score'] = $num_score;
        return $this;
    }
    
    public function getPromScoreEdoGeneracion()
    {
        return $this->container['prom_score_edo_generacion'];
    }
    
    public function setPromScoreEdoGeneracion($prom_score_edo_generacion)
    {
        $this->container['prom_score_edo_generacion'] = $prom_score_edo_generacion;
        return $this;
    }
    
    public function getPercentilScoreEdoGeneracion()
    {
        return $this->container['percentil_score_edo_generacion'];
    }
    
    public function setPercentilScoreEdoGeneracion($percentil_score_edo_generacion)
    {
        $this->container['percentil_score_edo_generacion'] = $percentil_score_edo_generacion;
        return $this;
    }
    
    public function getPromedioScoreGeneracion()
    {
        return $this->container['promedio_score_generacion'];
    }
    
    public function setPromedioScoreGeneracion($promedio_score_generacion)
    {
        $this->container['promedio_score_generacion'] = $promedio_score_generacion;
        return $this;
    }
    
    public function getPercentilScoreGeneracion()
    {
        return $this->container['percentil_score_generacion'];
    }
    
    public function setPercentilScoreGeneracion($percentil_score_generacion)
    {
        $this->container['percentil_score_generacion'] = $percentil_score_generacion;
        return $this;
    }
    
    public function getPromedioScoreEdo()
    {
        return $this->container['promedio_score_edo'];
    }
    
    public function setPromedioScoreEdo($promedio_score_edo)
    {
        $this->container['promedio_score_edo'] = $promedio_score_edo;
        return $this;
    }
    
    public function getPercentilScoreEdo()
    {
        return $this->container['percentil_score_edo'];
    }
    
    public function setPercentilScoreEdo($percentil_score_edo)
    {
        $this->container['percentil_score_edo'] = $percentil_score_edo;
        return $this;
    }
    
    public function getPromedioScore()
    {
        return $this->container['promedio_score'];
    }
    
    public function setPromedioScore($promedio_score)
    {
        $this->container['promedio_score'] = $promedio_score;
        return $this;
    }
    
    public function getPercentilScore()
    {
        return $this->container['percentil_score'];
    }
    
    public function setPercentilScore($percentil_score)
    {
        $this->container['percentil_score'] = $percentil_score;
        return $this;
    }
    
    public function getTotalScoreEdoGeneracion()
    {
        return $this->container['total_score_edo_generacion'];
    }
    
    public function setTotalScoreEdoGeneracion($total_score_edo_generacion)
    {
        $this->container['total_score_edo_generacion'] = $total_score_edo_generacion;
        return $this;
    }
    
    public function getTotalScoreGeneracion()
    {
        return $this->container['total_score_generacion'];
    }
    
    public function setTotalScoreGeneracion($total_score_generacion)
    {
        $this->container['total_score_generacion'] = $total_score_generacion;
        return $this;
    }
    
    public function getTotalScoreEdo()
    {
        return $this->container['total_score_edo'];
    }
    
    public function setTotalScoreEdo($total_score_edo)
    {
        $this->container['total_score_edo'] = $total_score_edo;
        return $this;
    }
    
    public function getTotalScore()
    {
        return $this->container['total_score'];
    }
    
    public function setTotalScore($total_score)
    {
        $this->container['total_score'] = $total_score;
        return $this;
    }
    
    public function getTotalPersEdoGeneracion()
    {
        return $this->container['total_pers_edo_generacion'];
    }
    
    public function setTotalPersEdoGeneracion($total_pers_edo_generacion)
    {
        $this->container['total_pers_edo_generacion'] = $total_pers_edo_generacion;
        return $this;
    }
    
    public function getTotalPersonasGeneracion()
    {
        return $this->container['total_personas_generacion'];
    }
    
    public function setTotalPersonasGeneracion($total_personas_generacion)
    {
        $this->container['total_personas_generacion'] = $total_personas_generacion;
        return $this;
    }
    
    public function getTotalPersonasEstado()
    {
        return $this->container['total_personas_estado'];
    }
    
    public function setTotalPersonasEstado($total_personas_estado)
    {
        $this->container['total_personas_estado'] = $total_personas_estado;
        return $this;
    }
    
    public function getTotalPersonas()
    {
        return $this->container['total_personas'];
    }
    
    public function setTotalPersonas($total_personas)
    {
        $this->container['total_personas'] = $total_personas;
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
