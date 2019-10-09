<!-- main -->
<h1>Добавление новой записи</h1>
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
    <form class='form animate-form' id='form1' action="notebook/add" method="post">

        <p class="w3agileits">Добавить запись</p>
        <div class='form-group has-feedback w3ls'>
            <label class='control-label sr-only' for='name'>ФИО</label>
            <span>ФИО</span>
            <input class='form-control' id='username' name='name' placeholder='ФИО' type='text' value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>" required>
            <span class='glyphicon glyphicon-ok form-control-feedback'></span>
        </div>
        <div class='form-group has-feedback agile'>
            <label class='control-label sr-only' for='email'>Email</label>
            <span>Email</span>
            <input class='form-control w3l' id='email' name='email' placeholder='Email' type='email' value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>"><span class='glyphicon glyphicon-ok form-control-feedback'></span>
        </div>
        <div class='form-group has-feedback agile'>
            <label class='control-label sr-only' for='phone'>Телефон</label>
            <span>Телефон</span>
            <input class='form-control w3l' id='phone' name='phone' placeholder='Телефон' type='text' value="<?=isset($_SESSION['form_data']['phone']) ? h($_SESSION['form_data']['phone']) : '';?>" required>
        </div>
        <div class='submit w3-agile'>
            <input class='btn btn-lg' type='submit' value='Добавить'>
        </div>
    </form>
    <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
</div>
<!-- //main -->
