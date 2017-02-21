<?php

namespace GOL\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApiController extends Controller
{
    private $urlBase = 'http://http://54.202.167.7/';
    
    public function apiAction()
    {
        echo "<pre>";
        var_dump($this->getAllProfiles());
        die;
        return $this->render('GOLApiBundle:Default:index.html.twig');
    }
    
    public function getAllProfiles() {
        $apiUrl = $this->urlBase . "app_dev.php/api-profiles";

        //Lo primerito, creamos una variable iniciando curl, pasándole la url
        $ch = \curl_init($apiUrl);

        //especificamos el POST (tambien podemos hacer peticiones enviando datos por GET
        \curl_setopt($ch, CURLOPT_POST, 1);

        //le decimos qué paramáetros enviamos (pares nombre/valor, también acepta un array)
        
//        $parametros_string = http_build_query($parametros);
//        \curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros_string);

        //le decimos que queremos recoger una respuesta (si no esperas respuesta, ponlo a false)
        \curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //recogemos la respuesta
        $respuesta = \curl_exec($ch);

        //o el error, por si falla
        $error = \curl_error($ch);
        
        //y finalmente cerramos curl
        \curl_close($ch);
        
        return json_decode($respuesta, TRUE);
    }
    
    public function getProfileById($profileId) {
        $apiUrl = $this->urlBase . "app_dev.php/api-profile/" . $profileId;

        //Lo primerito, creamos una variable iniciando curl, pasándole la url
        $ch = \curl_init($apiUrl);

        //especificamos el POST (tambien podemos hacer peticiones enviando datos por GET
        \curl_setopt($ch, CURLOPT_POST, 1);

        //le decimos qué paramáetros enviamos (pares nombre/valor, también acepta un array)
        
//        $parametros_string = http_build_query($parametros);
//        \curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros_string);

        //le decimos que queremos recoger una respuesta (si no esperas respuesta, ponlo a false)
        \curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //recogemos la respuesta
        $respuesta = \curl_exec($ch);

        //o el error, por si falla
        $error = \curl_error($ch);
        
        //y finalmente cerramos curl
        \curl_close($ch);
        
        return json_decode($respuesta, TRUE);
    }
    
    public function createProfile($parametros) {
        $apiUrl = $this->urlBase . "app_dev.php/api-create-profile";

        //Lo primerito, creamos una variable iniciando curl, pasándole la url
        $ch = \curl_init($apiUrl);

        //especificamos el POST (tambien podemos hacer peticiones enviando datos por GET
        \curl_setopt($ch, CURLOPT_POST, 1);

        //le decimos qué paramáetros enviamos (pares nombre/valor, también acepta un array)
        
        $parametros_string = http_build_query($parametros);
        \curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros_string);

        //le decimos que queremos recoger una respuesta (si no esperas respuesta, ponlo a false)
        \curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //recogemos la respuesta
        $respuesta = \curl_exec($ch);

        //o el error, por si falla
        $error = \curl_error($ch);
        
        //y finalmente cerramos curl
        \curl_close($ch);
        
        return json_decode($respuesta, TRUE);
    }
    
    public function editProfile($profileId, $parametros) {
        $apiUrl = $this->urlBase . "app_dev.php/api-edit-profile/" . $profileId;

        //Lo primerito, creamos una variable iniciando curl, pasándole la url
        $ch = \curl_init($apiUrl);

        //especificamos el POST (tambien podemos hacer peticiones enviando datos por GET
        \curl_setopt($ch, CURLOPT_POST, 1);

        //le decimos qué paramáetros enviamos (pares nombre/valor, también acepta un array)
        
        $parametros_string = http_build_query($parametros);
        \curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros_string);

        //le decimos que queremos recoger una respuesta (si no esperas respuesta, ponlo a false)
        \curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //recogemos la respuesta
        $respuesta = \curl_exec($ch);

        //o el error, por si falla
        $error = \curl_error($ch);
        
        //y finalmente cerramos curl
        \curl_close($ch);
        
        return json_decode($respuesta, TRUE);
    }
    
    public function deleteProfile($profileId) {
        $apiUrl = $this->urlBase . "app_dev.php/api-delete-profile/" . $profileId;

        //Lo primerito, creamos una variable iniciando curl, pasándole la url
        $ch = \curl_init($apiUrl);

        //especificamos el POST (tambien podemos hacer peticiones enviando datos por GET
        \curl_setopt($ch, CURLOPT_POST, 1);

        //le decimos qué paramáetros enviamos (pares nombre/valor, también acepta un array)
        
//        $parametros_string = http_build_query($parametros);
//        \curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros_string);

        //le decimos que queremos recoger una respuesta (si no esperas respuesta, ponlo a false)
        \curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //recogemos la respuesta
        $respuesta = \curl_exec($ch);

        //o el error, por si falla
        $error = \curl_error($ch);
        
        //y finalmente cerramos curl
        \curl_close($ch);
        
        return json_decode($respuesta, TRUE);
    }
}
