<div id="rightblock">
<table>

<tr>
<td class="tdview">
<h2 class = "sidebartitle">����� �� �����</h2>
</td>
</tr>
<tr>
<td>

<form action = "<?=base_url();?>search" method="post">
<p><input type="text" name="search" id ="search" maxlength="50" value="<?=set_value('search');?>"></p>
<p><?=form_error('search');?></p>
<p><input type = "submit" name = "search_button" id="search_button" value = "������"></p>
</form>

</td>
</tr>

<tr>
<td class="tdview">
<h2 class = "sidebartitle">����������</h2>
</td>
</tr>
<tr>
<td>
<?php foreach ($popular_materials as $item):?>

<p><a href = "<?=base_url()."materials/$item[material_id]";?>"><?=$item['title'];?></a></p>

<?php endforeach;?>
</td>
</tr>


<tr>
<td class="tdview">
<h2 class = "sidebartitle">����� ����������</h2>
</td>
</tr>
<tr>
<td>

<?php foreach ($archive_list as $one):?>
<?php foreach ($one as $month):?>
<p><a href="<?=base_url()."archive/".$month;?>"><?=$month?></a></p>
<?php endforeach; ?>
<?php endforeach; ?>

</td>
</tr>

</table>
</div>