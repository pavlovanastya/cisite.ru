<div id="leftblock">
<table>

<tr>
<td class="tdview">
<h2 class = "sidebartitle">������ ���������</h2>
</td>
</tr>

<tr>
<td>
<?foreach ($latest_materials as $item):?>

<p><a href = "<?=base_url()."materials/$item[material_id]";?>"><?=$item['title'];?></a></p>

<?php endforeach;?>
</td>
</tr>


<tr>
<td class="tdview">
<h2 class = "sidebartitle">RSS-��������</h2>
</td>
</tr>


<tr>
<td>
<p style="text-align: center;">����� ��������� ����� RSS.</p>
</td>
</tr>

<tr>
<td>
<center><a href="<?=base_url();?>rss/"><img alt="RSS-�����" src="<?=base_url();?>img/icon_rss.png"></a></center>
<p style="text-align: center;"><a href="<?=base_url();?>rss/">�����������!</a></p>
</td>
</tr>

</table>
</div>