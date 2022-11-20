<!-- ADD MODAL -->
<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content shadow">
			<div class="modal-header">
				<h5 class="modal-title">Добавить пользователя</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/server/addUser.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Имя">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="last_name" placeholder="Фамилия">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="genre" placeholder="Должность">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
				<button type="submit" name="submit" class="btn btn-primary">Добавить</button>
			</div>
			</form>
		</div>
	</div>
</div>

<?php
$alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Данные успешно обновлены!</strong> Вы можете закрыть это сообщение.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>';
echo $alert;
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>