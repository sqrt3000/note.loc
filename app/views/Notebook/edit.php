<!-- main -->
<h1>Изменение записи</h1>
<div class="w3-agileits-info">
    <?php if(isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" id="alert">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
    <ol class="breadcrumb">
        <li><a href="<?=PATH;?>/user/logout" style="color: #ff1c00" onclick="return confirm('Вы действительно хотите выйти?');">Выход</a> </li>
        <li><a href="<?=PATH;?>/notebook/mybook">Справочник</a> </li>
        <li><a href="<?=PATH;?>/notebook/add">+Добавить</a> </li>
    </ol>
    <form class='form animate-form' id='form1' action="notebook/edit" method="post">

        <p class="w3agileits">Изменить запись</p>
        <div class='form-group has-feedback w3ls'>
            <label class='control-label sr-only' for='name'>ФИО</label>
            <span>ФИО</span>
            <input class='form-control' id='username' name='name' placeholder='ФИО' type='text'  value="<?=h($note->name);?>" required>
            <span class='glyphicon glyphicon-ok form-control-feedback'></span>
        </div>
        <div class='form-group has-feedback agile'>
            <label class='control-label sr-only' for='email'>Email</label>
            <span>Email</span>
            <input class='form-control w3l' id='email' name='email' placeholder='Email' type='email' value="<?=h($note->email);?>"><span class='glyphicon glyphicon-ok form-control-feedback'></span>
        </div>
        <div class='form-group has-feedback agile'>
            <label class='control-label sr-only' for='phone'>Телефон</label>
            <span>Телефон</span>
            <input class='form-control w3l' id='phone' name='phone' placeholder='Телефон' type='text' value="<?=h($note->phone);?>" required>
        </div>
        <div class='submit w3-agile'>
            <input class='btn btn-lg' type='submit' value='Изменить'>
        </div>
    </form>
</div>
<!-- //main -->
