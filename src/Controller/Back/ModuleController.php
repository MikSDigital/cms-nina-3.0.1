<?php
/**
 * Created by PhpStorm.
 * User: Chipolata
 * Date: 08/03/2018
 * Time: 09:55
 */

namespace App\Controller\Back;


use App\Entity\Module;
use App\Entity\TypeModule;
use App\Form\Type\ModuleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModuleController extends Controller
{
    /**
     * @Route("/admin/choixTypeModule", name="choisirTypeModule")
     * @param Request $request
     */
    public function choisirTypeModuleAction(Request $request){
        $idTypeModule = $request->get('idTypeModule');

        $typeModule = $this->getDoctrine()->getManager()->find(TypeModule::class, $idTypeModule);

        $champs = $typeModule->getChamps();

        $module = new Module();

        /* Type du module */
        $module->setType($typeModule);

        $formBuilderModule = $this->get('form.factory')->createBuilder(ModuleType::class, $module);

        $formBuilderModule
            ->add('position');

        $formulaireModule = $formBuilderModule->getForm()->createView();

        /* Contenu du module */
        $formBuilderContenu = $this->get('form.factory')->createBuilder(FormType::class);
        foreach($champs as $champ){
            $formBuilderContenu->add($champ->getNom(), 'Symfony\Component\Form\Extension\Core\Type\\'.$champ->getType().'Type');
        }

        $formulaireContenu = $formBuilderContenu->getForm()->createView();

        return $this->render('back/module/formulaireModule.html.twig', array('formulaireModule' => $formulaireModule, 'formulaireContenu' => $formulaireContenu));
    }
}