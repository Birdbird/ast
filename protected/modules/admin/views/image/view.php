<h2>图片管理：<?php echo $album->name ?></h2>
<?php
$this->widget('ext.suploadify.SUploadify',array(
	'uploader'=>$this->createUrl('/admin/file/image'),
	'options'=>array(
		'buttonText'=>'选择图片上传',
		'height'=>20,
		'width'=>100,
		'formData'=>array('album_id'=>$album->id),
		'fileTypeExts'=>'*.gif; *.jpg; *.png *.jpeg;',
		'onQueueComplete'=>'js:function(file, data, response){location.reload();}',
	),
));
?>
<form action="<?php echo $this->createUrl('updateimagesinfo') ?>" method="POST">
<table class="slide-images">
	<?php foreach ($album->images as $albumImage): ?>
	<tr>
		<td class="slide-image">
			<img src="<?php echo Yii::app()->baseUrl.'/upload/'.$albumImage->image ?>"/>
		</td>
		<td>
			<label>描述:</label><?php echo CHtml::textField('albumImage_'.$albumImage->id.'[description]',$albumImage->description) ?>
		</td>
		<td class="actions">
			<a href="<?php echo $this->createUrl('deleteimage',array('albumImage'=>$albumImage->id)); ?>" onclick="return confirm('确定要删除吗?')">删除</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<?php if (count($album->images)): ?>
<input type="submit" value="保存信息"/>	
<?php endif ?>
</form>