<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Новый пользователь
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li class="breadcrumb-item"><a href="<?= ADMIN; ?>/user"><i class="fa fa-dashboard"></i>Список
                            пользователей</a></li>
                    <li class="breadcrumb-item active">Новый пользователь</li>
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
                <form method="post" action="/user/signup" id="signup" role="form" data-toggle="validator">
                    <div class="form-group has-feedback">
                        <label for="login">Логин</label>
                        <input placeholder="login" class="form-control"
                               id="login" name="login" type="text"
                               value="<?=isset($_SESSION['form_data']['login']) ?
                                   $_SESSION['form_data']['login'] : '';?>"
                               required/>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="password ">Пароль</label>
                        <input placeholder="password" class="form-control"
                               id="password" name="password" type="password"
                               data-error="Пароль должна включать не менее 6 символов" data-minlength="6"
                               required/>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="name">Имя</label>
                        <input placeholder="name" class="form-control"
                               id="name" name="name" type="text"
                               value="<?=isset($_SESSION['form_data']['name']) ?
                                   $_SESSION['form_data']['name'] : '';?>"
                               required/>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="email">Email</label>
                        <input placeholder="email" class="form-control"
                               id="email" name="email" type="email"
                               value="<?=isset($_SESSION['form_data']['email']) ?
                                   $_SESSION['form_data']['email'] : '';?>"
                               required/>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="address">Адрес</label>
                        <input placeholder="address" class="form-control"
                               id="address" name="address" type="text"
                               value="<?=isset($_SESSION['form_data']['address']) ?
                                   $_SESSION['form_data']['address'] : '';?>"
                               required/>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group ">
                        <label for="role">Роль</label>
                        <select name="role" id="role" class="form-control">
                            <option value="user" >Пользователь</option>
                            <option value="admin">Администратор</option>
                        </select>
                    </div>
                    <input class="btn btn-success" type="submit" value="Зарегистрироваться">
                </form>
                <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']);?>


            </div>

            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->