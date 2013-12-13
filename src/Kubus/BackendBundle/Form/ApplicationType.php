<?php

namespace Kubus\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ApplicationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('personId')
            ->add('lessonId')
            ->add('stateId')
            ->add('invitedAt')
            ->add('certifiedAt')
            ->add('paid')
            ->add('invoice')
            ->add('invoiceSend')
            ->add('credits')
            ->add('mark')
            ->add('childCare')
            ->add('liableToPay')
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
            'data_class' => 'Kubus\BackendBundle\Entity\Application'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kubus_backendbundle_application';
    }
}
