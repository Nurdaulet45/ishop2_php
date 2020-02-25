
<!--register-starts-->
<div class="register">
    <div class="container">
        <div class="register-top heading">
            <h2>REGISTER</h2>
        </div>

            <div class="register-main">
                <div class="col-md-6 account-left">
                    <form method="post" action="/user/signup" id="signup" role="form" data-toggle="validator">
                        <div class="form-group has-feedback">
                            <label for="login">Login</label>
                            <input placeholder="login" class="form-control"
                                   id="login" name="login" type="text"
                                   value="<?=isset($_SESSION['form_data']['login']) ?
                                       $_SESSION['form_data']['login'] : '';?>"
                                   required/>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="password ">Password</label>
                            <input placeholder="password" class="form-control"
                                   id="password" name="password" type="password"
                                   data-error="Пароль должна включать не менее 6 символов" data-minlength="6"
                                   required/>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Name</label>
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
                            <label for="address">Address</label>
                            <input placeholder="address" class="form-control"
                                   id="address" name="address" type="text"
                                   value="<?=isset($_SESSION['form_data']['address']) ?
                                       $_SESSION['form_data']['address'] : '';?>"
                                   required/>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <input class="btn btn-success" type="submit" value="Зарегистрироваться">
                    </form>
                    <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']);?>

                </div>
                <div class="clearfix"></div>
            </div>


    </div>
</div>
<!--register-end-->