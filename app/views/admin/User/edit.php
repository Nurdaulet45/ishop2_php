
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Редактирование пользователя
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li class="breadcrumb-item"><a href="<?= ADMIN; ?>/user"><i class="fa fa-dashboard"></i>Список
                            пользователей</a></li>
                    <li class="breadcrumb-item active">Редактирование пользователя №<?=$user_id;?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md 12">
            <div class="box">
                <form action="<?= ADMIN; ?>/user/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="login">Логин пользователя</label>
                            <input type="text" name="login"
                                   class="form-control" id="login"
                                   placeholder="Логин пользователя"
                                   value="<?=h($user['login']);?>"
                                   required>
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="password">Пароль пользователя</label>
                            <input type="text" name="password"
                                   class="form-control" id="password"
                                   placeholder="Введите пароль, если хотите изменить"
                                   >
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" name="name"
                                   class="form-control" id="name"
                                   placeholder="Имя" value="<?=h($user['name']);?>">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email"
                                       class="form-control" id="email"
                                       placeholder="Email" value="<?=h($user['email']);?>">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="address">Адрес</label>
                            <input type="text" name="address"
                                   class="form-control" id="address"
                                   placeholder="Адрес" value="<?=h($user['email']);?>">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="role">Роль</label>
                            <select name="role" id="role" class="form-control">
                                <option value="user" <?php if ($user->role == 'user') echo ' selected';?>>Пользователь</option>
                                <option value="admin" <?php if ($user->role == 'admin') echo ' selected';?>>Администратор</option>
                            </select>
                        </div>
                    </div>

                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?=h($user['id']);?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>

            <h3>Заказы пользователя</h3>
            <div class="box">
                <div class="box-body">
                    <?php if ($orders):?>
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Статус</th>
                                <th>Сумма</th>
                                <th>Дата создания</th>
                                <th>Дата изменения</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($orders as $order):?>
                                <?php $class = $order['status'] ? 'order_success': '';?>
                                <tr class="<?=$class;?>">
                                    <td><?=$order['id'];?></td>
                                    <td><?=$order['status'] ? 'Завершен' : 'Новый' ;?></td>
                                    <td><?=$order['sum'];?> <?=$order['currency'];?></td>
                                    <td><?=$order['date'];?></td>
                                    <td><?=$order['update_at'];?></td>
                                    <td class="view_id">
                                        <a href="<?=ADMIN;?>/order/view?id=<?=$order['id'];?>"><li class="fa fa-fw fa-eye"></li></a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>

                    <?php else:?>
                        <p class="text-danger">Пользователь пока ничего не заказывал ...</p>
                    <?php endif;?>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->