<div class="requiretable">
	<div class="company-title round">
		<h3>技术难题（项目需求）信息表</h3>
	</div>
	<table>
		<tr>
			<td class="left">单位名称</td><td><?php echo $post->name ?></td>
		</tr>
		<tr>
			<td class="left">单位地址</td><td><?php echo $post->address ?></td>
		</tr>
		<tr>
			<td class="left">单位负责人</td><td><?php echo $post->charge ?></td>
		</tr>
		<tr>
			<td class="left">电话</td><td><?php echo $post->charge_tel ?></td>	
		</tr>
		<tr>
			<td class="left">联 系 人</td><td><?php echo $post->contact ?></td>
		</tr>
		<tr>
			<td class="left">电话</td><td><?php echo $post->contact_tel ?></td>
		</tr>
		<tr>
			<td class="left">E_mail</td><td><?php echo $post->email ?></td>
		</tr>
		<tr>
			<td class="left">邮政编码</td><td><?php echo $post->zip_code ?></td>
		</tr>
		<tr>
			<td class="left">难题（项目需求）名称</td><td><?php echo $post->require ?></td>
		</tr>
		<tr>
			<td class="left">内容说明</td><td><?php echo $post->content ?></td>
		</tr>
		<tr>
			<td class="left">主要技术,参数要求</td><td><?php echo $post->tec_require ?></td>
		</tr>
		<tr>
			<td class="left">前景预测</td><td><?php echo $post->forecast ?></td>
		</tr>
		<tr>
			<td class="left">企业简述</td><td><?php echo $post->com_intro ?></td>
		</tr>
		<tr>
			<td class="left">拟投资金</td><td><?php echo $post->amount ?></td>
		</tr>
	</table>
</div>
<div class="artical-footer">
	<p>
		<?php if ($post->prevPost): ?>
			<?php echo CHtml::link(mb_substr('上一篇：['.$post->prevPost->name.']'.$post->prevPost->require,0,30),array('projectPost/view','id'=>$post->prevPost->id),array('title'=>'['.$post->prevPost->name.']'.$post->prevPost->require)) ?>
		<?php endif ?>
	</p>
	<p>
	<?php if ($post->nextPost): ?>
			<?php echo CHtml::link(mb_substr('下一篇：['.$post->nextPost->name.']'.$post->nextPost->require,0,30),array('projectPost/view','id'=>$post->nextPost->id),array('title'=>'['.$post->nextPost->name.']'.$post->nextPost->require)) ?>
	<?php endif ?>
	</p>
</div>