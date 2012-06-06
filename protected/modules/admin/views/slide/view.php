<h2>幻灯片管理：<?php echo $slide->name ?></h2>
<?php
$this->widget('ext.suploadify.SUploadify',array(
	'uploader'=>$this->createUrl('/admin/file/slide'),
	'options'=>array(
		'buttonText'=>'选择图片上传',
		'height'=>20,
		'width'=>100,
		'formData'=>array('slideID'=>$slide->id),
		'fileTypeExts'=>'*.gif; *.jpg; *.png *.jpeg;',
		'onQueueComplete'=>'js:function(file, data, response){location.reload();}',
	),
));
?>
<form action="<?php echo $this->createUrl('updateimagesinfo') ?>" method="POST">
<table class="slide-images">
	<?php foreach ($slide->images as $slideImage): ?>
	<tr>
		<td class="slide-image">
			<img src="<?php echo Yii::app()->baseUrl.'/upload/slide/'.$slideImage->image ?>"/>
		</td>
		<td>
			<label>标题:</label><?php echo CHtml::textField('slideImage_'.$slideImage->id.'[title]',$slideImage->title) ?>
			<br/><label>链接:</label><?php echo CHtml::textField('slideImage_'.$slideImage->id.'[url]',$slideImage->url) ?>
		</td>
		<td class="actions">
			<a href="<?php echo $this->createUrl('deleteimage',array('slideImageID'=>$slideImage->id)); ?>" onclick="return confirm('确定要删除吗?')">删除</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<?php if (count($slide->images)): ?>
<input type="submit" value="保存信息"/>	
<?php endif ?>
</form>