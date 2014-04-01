<?php

namespace TouchMe\FloorPlanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                'label' => 'Eventtitle',
                'label_attr' => array(
                    'class'=> ''
                ),
                'attr' => array(
                    'class'=> 'form-control '
                ),
            ))
            ->add('startdate', 'text', array(
                'label' => 'Startdatum',
                'label_attr' => array(
                    'class'=> ''
                ),
                'attr' => array(
                    'class'=> 'form-control datepicker'
                ),
            ))
            ->add('starttime', 'text', array(
                'label' => 'Startzeit',
                'label_attr' => array(
                    'class'=> ''
                ),
                'attr' => array(
                    'class'=> 'form-control timepicker'
                ),
            ))
            ->add('enddate', 'text', array(
                'label' => 'Enddatum',
                'label_attr' => array(
                    'class'=> ''
                ),
                'attr' => array(
                    'class'=> 'form-control datepicker'
                ),
            ))
            ->add('endtime', 'text', array(
                'label' => 'Endzeit',
                'label_attr' => array(
                    'class'=> ''
                ),
                'attr' => array(
                    'class'=> 'form-control timepicker'
                ),
            ))
            ->add('description', 'textarea', array(
                'label' => 'Beschreibung',
                'label_attr' => array(
                    'class'=> ''
                ),
                'attr' => array(
                    'class'=> 'form-control '
                ),
            ))
            ->add('branchofstudy', 'choice', array(
                'label' => 'Studienrichtung',
                'choices'   => array(
                    'medieninformatik'   => 'Medieninformatik',

                ),
                'label_attr' => array(
                    'class'=> ''
                ),
                'attr' => array(
                    'class'=> 'form-control '
                ),
            ))
            ->add('personincharge', 'text', array(
                'label' => 'Eventtitle',
                'label_attr' => array(
                    'class'=> ''
                ),
                'attr' => array(
                    'class'=> 'form-control '
                ),
            ))
            ->add('location', 'entity', array(
                'label' => 'Raum',
                'class' => 'TouchMeFloorPlanBundle:Location',
                'label_attr' => array(
                    'class'=> ''
                ),
                'attr' => array(
                    'class'=> 'form-control '
                ),
            ))
            ->add('assets', 'entity', array(
                'label' => 'Dateien',
                'class' => 'TouchMeFloorPlanBundle:Asset',
                'label_attr' => array(
                    'class'=> ''
                ),
                'attr' => array(
                    'class'=> 'form-control '
                ),
            ))

            ->add('save', 'submit',array(    
                'label' => 'speichern',             
                'attr' => array(
                    'class'=> 'btn btn-lg btn-primary btn-block'
                ),
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TouchMe\FloorPlanBundle\Entity\Event'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'touchme_floorplanbundle_event';
    }
}