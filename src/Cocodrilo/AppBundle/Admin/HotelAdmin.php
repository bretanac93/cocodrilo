<?php

namespace Cocodrilo\AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class HotelAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('location')
            ->add('price')
            ->add('category')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('name')
            ->add('location')
            ->add('price')
            ->add('category')
            ->add('gallery')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('location')
            ->add('price')
            ->add('category')
            ->add('description', 'textarea')
            ->add('offering')
            ->add('priceOffert')
            ->add('gallery',
                'sonata_type_model',
                array(
                    'label' => 'Secondary Picture',
                    'class' => 'Application\Sonata\MediaBundle\Entity\Gallery',
                    'by_reference' => false,
                    'multiple' => true,
                    'expanded' => false,
                    'required' => false,
                ));
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('location')
            ->add('price')
            ->add('category')
            ->add('images')
        ;
    }
}
