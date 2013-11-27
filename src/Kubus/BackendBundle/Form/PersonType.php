<?php

namespace Kubus\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('lastname')
            ->add('firstname')
            ->add('gender')
            ->add('email')
            ->add('telephone')
            ->add('mobile')
            ->add('street')
            ->add('postcode')
            ->add('city')
            ->add('country')
            ->add('photoLink')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('deletedAt')
            ->add('password')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kubus\BackendBundle\Entity\Person'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kubus_backendbundle_person';
    }
}
