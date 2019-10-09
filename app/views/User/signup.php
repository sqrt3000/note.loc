<!-- main -->
<h1>Создание аккаунта</h1>
<div class="w3-agileits-info">
    <form class='form animate-form' id='form1' action="user/signup" method="post">
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
        <p class="w3agileits">Регистрация</p>
        <div class='form-group has-feedback w3ls'>
            <label class='control-label sr-only' for='login'>Логин</label>
            <input class='form-control' id='username' name='login' placeholder='Логин' type='text' required>
            <span class='glyphicon glyphicon-ok form-control-feedback'></span>
        </div>
        <div class='form-group has-feedback agile'>
            <label class='control-label sr-only' for='password'>Пароль</label>
            <input class='form-control w3l' id='password' name='password' placeholder='Пароль' type='password'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
        </div>
        <div class='form-group has-feedback agile'>
            <label class='control-label sr-only' for='passwordrep'>Пароль еще раз</label>
            <input class='form-control w3l' id='password' name='passwordrep' placeholder='Введите пароль еще раз' type='password'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
        </div>
        <div class='submit w3-agile'>
            <input class='btn btn-lg' type='submit' value='Создать аккаунт'>
        </div>
        <div class="login-agileits-bottom">
            <h6><a href="<?=PATH?>">Уже есть аккаунт</a></h6>
        </div>
    </form>
</div>
<!-- //main -->
