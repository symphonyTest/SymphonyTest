<?php
namespace Patientsoft\PatientBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PatientController extends Controller {

    public function indexAction($name) {
        return $this->render('PatientsoftPatientBundle:Default:index.html.twig', array('name' => $name));
    }

}

?>
