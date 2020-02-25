<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="<?=PATH;?>">Главная</a></li>
                <li>Вход</li>
            </ol>
        </div>
    </div>
</div>

<div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-12">
                <div class="product-one login">
                    <div class="register-top heading">
                        <h2>Вход</h2>
                    </div>
                    <div class="register-main">
                        <div class="col-md-6 account-left">

                            <form method="post" action="/user/login" id="login" role="form" data-toggle="validator">
                                <div class="form-group has-feedback">
                                    <label for="login">Login</label>
                                    <input placeholder="login" class="form-control"
                                           id="login" name="login" type="text"
                                           value=""
                                           required/>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="password ">Password</label>
                                    <input placeholder="password" class="form-control"
                                           id="password" name="password" type="password"
                                           required/>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <input class="btn btn-success" type="submit" value="Вход">
                            </form>

                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
