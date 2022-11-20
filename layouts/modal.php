<!-- EDIT -->
<div class="modal fade" id="editModal<?= $res['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?= $res['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../server/editUser.php" method="POST">
          <input type="hidden" name="id" value="<?= $res['id'] ?>">
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="<?= $res['name'] ?>" placeholder="Имя">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="last_name" value="<?= $res['last_name'] ?>" placeholder="Фамилия">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="genre" value="<?= $res['genre'] ?>" placeholder="Жанр">
          </div>
          <div class="modal-footer">
            <button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- DELETE -->
<div class="modal fade" id="deleteModal<?= $res['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?= $res['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="../server/deleteUser.php" method="POST">
          <input type="hidden" name="id" value="<?= $res['id'] ?>">
          <button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
        </form>
      </div>
    </div>
  </div>
</div>