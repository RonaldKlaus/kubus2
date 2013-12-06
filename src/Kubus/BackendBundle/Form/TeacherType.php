<?php

namespace Kubus\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TeacherType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('personId')
            ->add('taxNumber')
            ->add('financeOffice')
            ->add('accountNumber')
            ->add('bankCode')
            ->add('bankName')
            ->add('firm')
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
            'data_class' => 'Kubus\BackendBundle\Entity\Teacher'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kubus_backendbundle_teacher';
    }
}
