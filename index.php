<?php include 'layouts/header.php';?>

<div class="container">
	<div class="row">
		<div class="col mt-1">
			<button data-toggle="modal" data-target="#Modal"><i class="fa fa-user-plus"></i></button>
			<table class="table white ">
				<thead class="thead-white">
					<tr>
						<th>№</th>
						<th>Имя</th>
						<th>Фамилия</th>
						<th>Жанр творчества </th>
						<th>Действие</th>
					</tr>
				</thead>
				<?php
				$users = $mysql->query("SELECT * FROM `users`");

				while ($res = $users->fetch_assoc()) { ?>
					<tr>
						<td><?= $res['id'] ?></td>
						<td><?= $res['name'] ?></td>
						<td><?= $res['last_name'] ?></td>
						<td><?= $res['genre'] ?></td>
						<td>
							<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?= $res['id'] ?>"><i class="fa fa-edit"></i></button>
							<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?= $res['id'] ?>"><i class="fa fa-trash"></i></button>
						</td>
						<?php include 'layouts/modal.php'; ?>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
<?php include 'layouts/footer.php' ?>