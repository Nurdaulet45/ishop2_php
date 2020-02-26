<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Список заказов</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li class="breadcrumb-item active">Список заказов</a></li>
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
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Покупатель</th>
                                        <th>Статус</th>
                                        <th>Всего</th>
                                        <th>Дата создания</th>
                                        <th>Дата изменения</th>
                                        <th>Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($orders as $order):?>
                                    <tr>
                                        <td><?=$order->id?></td>
                                        <td><?=$order->user_id?></td>
                                        <td><?=$order->id?></td>
                                        <td><?=$order->id?></td>
                                        <td><?=$order->id?></td>
                                        <td><?=$order->id?></td>
                                        <td><a href="<?=ADMIN;?>/order/view?id=<?=$order->id;?>"><li class="fa fa-fw fa-eye"></li></a></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
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