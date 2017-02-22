<?php

namespace GOL\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{
    protected $dirPath = __DIR__ . "/../../../../web/uploads/img/profile";
    
    public function profilesAction()
    {
        $service = $this->get('gol_api.api');
        $dataProfile = $service->getAllProfiles();
        return $this->render('GOLContentBundle:Profile:profiles.html.twig', array(
            'dataProfile' => $dataProfile,
            'env' => $this->getEnv(),
        ));
    }
    
    public function profileAction($profileId)
    {
        $service = $this->get('gol_api.api');
        $dataProfile = $service->getProfileById($profileId);
        return $this->render('GOLContentBundle:Profile:profile.html.twig', array(
            'dataProfile' => $dataProfile,
            'env' => $this->getEnv(),
        ));
    }
    
    public function createProfileAction(Request $request)
    {
        if ($request->getMethod() == 'POST'){
            foreach ($request->files as $uploaded) {
                $fileName = $uploaded->getClientOriginalName();
                $file = $uploaded->move($this->dirPath, "/" . $fileName);
                $fileContent = file_get_contents($file->getPathName());
            }
            $parametros = array(
                'imageUpload' => $fileName,
                'name' => $request->get('name'),
                'profession' => $request->get('profession'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email'),
                'profile' => $request->get('profile'),
                'hobby1' => $request->get('hobby1'),
                'percent1' => $request->get('percent1'),
                'hobby2' => $request->get('hobby2'),
                'percent2' => $request->get('percent2'),
                'hobby3' => $request->get('hobby3'),
                'percent3' => $request->get('percent3'),
                'fileContent' => $fileContent,
            );

            $service = $this->get('gol_api.api');
            $dataProfile = $service->createProfile($parametros);
            if ($dataProfile['status'] == 'ok'){
                return $this->redirect($this->getEnv() . 'profiles');
            }
        }
        return $this->render('GOLContentBundle:Profile:form-profile.html.twig', array(
            'env' => $this->getEnv(),
        ));
    }
    
    public function editProfileAction($profileId, Request $request)
    {
        $service = $this->get('gol_api.api');
        $dataProfile = $service->getProfileById($profileId);
        $parametros = array();
        
        if ($request->getMethod() == 'POST'){
            $fileName = NULL;
            $fileContent = NULL;
            if ($request->files->get('image') !== NULL){
                foreach ($request->files as $uploaded) {
                    $fileName = $uploaded->getClientOriginalName();
                    $file = $uploaded->move($this->dirPath, "/" . $fileName);
                    $fileContent = file_get_contents($file->getPathName());
                }
            }
            $parametros = array(
                'imageUpload' => $fileName,
                'name' => $request->get('name'),
                'profession' => $request->get('profession'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email'),
                'profile' => $request->get('profile'),
                'hobby1' => $request->get('hobby1'),
                'percent1' => $request->get('percent1'),
                'hobby2' => $request->get('hobby2'),
                'percent2' => $request->get('percent2'),
                'hobby3' => $request->get('hobby3'),
                'percent3' => $request->get('percent3'),
                'fileContent' => $fileContent,
            );            
            $dataProfile = $service->editProfile($profileId, $parametros);
                        
            if ($dataProfile['status'] == 'ok'){
                return $this->redirect($this->getEnv() . 'profiles');
            }
        }
        return $this->render('GOLContentBundle:Profile:form-profile.html.twig', array(
            'dataProfile' => $dataProfile,
            'env' => $this->getEnv(),
        ));
    }
    
    public function deleteProfileAction($profileId)
    {
        $service = $this->get('gol_api.api');
        $dataProfile = $service->deleteProfile($profileId);
        return $this->redirect($this->getEnv() . 'profiles');
    }
    
    public function getEnv() {
        global $kernel;
        return $kernel->getEnvironment() == "prod" ? "/" : "/app_dev.php/";
    }
}
