<?php /* @var array $params */ ?>
<?php \Lib\View\ViewManager::show('header', ['title' => $params['title']]); ?>

<?php if ($params['result']):?>
<table class="table table-striped">
	<thead>
	<tr>
		<?php foreach ($params['result']['columns'] as $column): ?>
			<th scope="col"><?=$column?></th>
		<?php endforeach; ?>
		<th scope="col">Действия</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($params['result']['items'] as $item): ?>
	<tr>
		<?php foreach ($item as $el): ?>
			<td><?=$el?></td>
		<?php endforeach;?>
		<td>
			<a href="<?=$params['currentUrl']?>edit/?id=<?=$item['id']?>" class="btn btn-warning">Изменить</a>
			<a href="<?=$params['currentUrl']?>delete/?id=<?=$item['id']?>" class="btn btn-danger">Удалить</a>
		</td>
	</tr>
	<?php endforeach;?>
	</tbody>
</table>
<div class="pt-5">
	<a href="<?=$params['currentUrl']?>add/" class="btn btn-success">Добавить запись</a>
</div>
<?php endif;?>

<?php \Lib\View\ViewManager::show('footer'); ?>
