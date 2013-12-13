<?php

namespace Kubus\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LessonLocationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('street')
            ->add('postcode')
            ->add('city')
            ->add('country')
            ->add('room')
            ->add('description')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kubus\BackendBundle\Entity\LessonLocation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kubus_backendbundle_lessonlocation';
    }
}
