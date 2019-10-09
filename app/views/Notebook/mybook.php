<!-- main -->
<h1>Моя записная книжка</h1>
<div class="w3-agileits-info">
    <div class="col-md-12">
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger" id="alert">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success" id="alert">
                <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>
        <ol class="breadcrumb">
            <li><a href="<?=PATH;?>/user/logout" style="color: #ff1c00" onclick="return confirm('Вы действительно хотите выйти?');">Выход</a> </li>
            <li><a href="<?=PATH;?>/notebook/mybook">Справочник</a> </li>
            <li><a href="<?=PATH;?>/notebook/add">+Добавить</a> </li>
        </ol>
    </div>
</div>
<div class="col-md-12">
    <div class="table-responsive">
        <?php if (!empty($abonents)):?>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="text-align: center; font-weight: bold">ФИО</th>
                        <th style="text-align: center; font-weight: bold">Номер телефона</th>
                        <th style="text-align: center; font-weight: bold">Email</th>
                        <th style="text-align: center; font-weight: bold">Действия</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($abonents as $abonent): ?>
                    <tr>
                        <td><?=$abonent['name'];?></td>
                        <td><?=$abonent['phone'];?></td>
                        <td><?=$abonent['email'];?></td>
                        <td>
                            <a href="<?=PATH;?>/notebook/edit?id=<?=$abonent['id'];?>" style="color: #27d400">Изменить</a>
                            <a href="<?=PATH;?>/notebook/delete?id=<?=$abonent['id'];?>" style="color: #ff1d00" onclick="return confirm('Вы действительно хотите удалить запись?');">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else:?>
        <p style="text-align: center; color:#ffba00;">Создайте свою первую запись!</p>
        <?php endif;?>
    </div>
</div>
<div class="clearfix"> </div>
<!-- //main -->
