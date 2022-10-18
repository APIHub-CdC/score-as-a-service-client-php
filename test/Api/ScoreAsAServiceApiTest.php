<?php

namespace ScoreAsAService\Client;

use \ScoreAsAService\Client\Configuration;
use \ScoreAsAService\Client\ApiException;
use \ScoreAsAService\Client\ObjectSerializer;

use \ScoreAsAService\Client\Interceptor\KeyHandler;
use \ScoreAsAService\Client\Interceptor\MiddlewareEvents;

use \ScoreAsAService\Client\Model\RequestDatosHistoricos;
use \ScoreAsAService\Client\Model\RequestDatos;
use \ScoreAsAService\Client\Model\RequestScorePromedio;
use \ScoreAsAService\Client\Model\RequestConsulta;
use \ScoreAsAService\Client\Model\RequestValidaScore;


class ScoreAsAServiceApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp() {
        $password = "your_key_password";

        $this->keypair = 'path/to/keypair.p12';
        $this->cert = 'path/to/cdc_cert.pem';

        $this->signer = new KeyHandler($this->keypair, $this->cert, $password);
        $events = new MiddlewareEvents($this->signer);

        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));   
        $handler->push($events->verify_signature_header('x-signature'));
        $client = new \GuzzleHttp\Client(['handler' => $handler]);

        $config = new Configuration();
        
        $config->setHost('https://services.circulodecredito.com.mx/v1/scoreAsaService/');

        $this->apiInstance = new \ScoreAsAService\Client\Api\ScoreAsAServiceApi($client,$config);
        $this->x_api_key = "your_api_key";
        $this->username = "your_username";
        $this->password = "your_password";
    }
    
    
    public function testDatosHistoricosPost()
    {
        $requestPayload = new RequestDatosHistoricos();
	    $requestPayload->setNperscve("000000000");
        $response = null;
        try {

            $response = $this->apiInstance->datosHistoricosPost($this->apiKey,$this->username, $this->password, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

	    $this->assertNotNull($response);
    }
    
    public function testObtenFechasPost()
    {
        $requestPayload = new RequestDatos();
	    $requestPayload->setNperscve("000000000");
        $response = null;
        try {

            $response =  $this->apiInstance->obtenFechasPost($this->apiKey,$this->username, $this->password, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

	    $this->assertNotNull($response);
        
    
    }
    
    public function testObtenPromediosPost()
    {
        $requestPayload = new RequestScorePromedio();
	    $requestPayload->setNperscve("000000000");
        $response = null;
        try {

            $response =  $this->apiInstance->obtenPromediosPost($this->apiKey,$this->username, $this->password, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

	    $this->assertNotNull($response);
    }
    
    public function testObtenerConsultasPost()
    {
        $requestPayload = new RequestConsulta();
	    $requestPayload->setNperscve("000000000");
        $response = null;
        try {

            $response = $this->apiInstance->obtenerConsultasPost($this->apiKey,$this->username, $this->password, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

	    $this->assertNotNull($response);
    }
    
    public function testValidaScorePost()
    {
        $requestPayload = new RequestValidaScore();
	    $requestPayload->setNperscve("000000000");
        $response = null;
        try {

            $response = $this->apiInstance->validaScorePost($this->apiKey,$this->username, $this->password, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

	    $this->assertNotNull($response);
    }
    
}
