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
                                        <td><?=$order['name'];?></td>
                                        <td><?=$order['status'] ? 'Завершен' : 'Новый' ;?></td>
                                        <td><?=$order['sum'];?> <?=$order['currency'];?></td>
                                        <td><?=$order['date'];?></td>
                                        <td><?=$order['update_at'];?></td>
                                        <td class="view_id">
                                            <a href="<?=ADMIN;?>/order/view?id=<?=$order['id'];?>"><li class="fa fa-fw fa-eye"></li></a>
                                            <a class="delete" href="<?=ADMIN;?>/order/delete?id=<?=$order['id'];?>"> <i class="fas fa-times text-danger"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <p><?=count($orders);?> заказa(ов) из <?=$count;?></p>
                            <?php if ($pagination->countPages > 1):?>
                                <?=$pagination;?>
                            <?php endif;?>
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