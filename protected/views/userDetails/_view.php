<?php
/* @var $this UserDetailsController */
/* @var $data UserDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php echo CHtml::encode($data->number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('confirmation_code')); ?>:</b>
	<?php echo CHtml::encode($data->confirmation_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('donation_status')); ?>:</b>
	<?php echo CHtml::encode($data->donation_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lookup_details_lookup_id')); ?>:</b>
	<?php echo CHtml::encode($data->lookup_details_lookup_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lookup_details_2_lookup_id')); ?>:</b>
	<?php echo CHtml::encode($data->lookup_details_2_lookup_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lookup_details_3_lookup_id')); ?>:</b>
	<?php echo CHtml::encode($data->lookup_details_3_lookup_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_group')); ?>:</b>
	<?php echo CHtml::encode($data->blood_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lookup_details_4_lookup_id')); ?>:</b>
	<?php echo CHtml::encode($data->lookup_details_4_lookup_id); ?>
	<br />

	*/ ?>

</div>