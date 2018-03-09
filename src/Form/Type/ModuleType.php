<?php
/**
 * Created by PhpStorm.
 * User: Chipolata
 * Date: 01/03/2018
 * Time: 11:07
 */

namespace App\Form\Type;


use App\Entity\Module;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModuleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', EntityType::class, array('class' => 'App\Entity\typeModule', 'choice_label' => 'nom', 'empty_data' => null, 'required' => false));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            Module::class
        ));
    }

    public function getParent(){
        return FormType::class;
    }
}