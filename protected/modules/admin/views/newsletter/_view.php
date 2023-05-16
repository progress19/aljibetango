<?php
/* @var $this NewsletterController */
/* @var $data Newsletter */
?>

<script>
	$("#content").removeClass( "fade out" );   
	$("#myModal").removeClass( "fade" );   
</script>

<?php echo CHtml::encode($data->email); ?>;

