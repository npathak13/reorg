<?php

namespace Appbundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Compontent\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$propertyValues = array('id', 'coveredRecipientType', 'teachingHospitalId', 'teachingHospitalName',
								'phsy'
		)
	}
}