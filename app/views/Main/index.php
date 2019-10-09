<h1>Записная книжка</h1>
<div class="w3-agileits-info">
    <form class='form animate-form' id='form1' action="user/login" method="post">
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
        <p class="w3agileits">Вход</p>
        <div class='form-group has-feedback w3ls'>
            <label class='control-label sr-only' for='login'>Логин</label>
            <input class='form-control' id='login' name='login' placeholder='Введите сюда Ваш логин' type='text' required>
            <span class='glyphicon glyphicon-ok form-control-feedback'></span>
        </div>
        <div class='form-group has-feedback agile'>
            <label class='control-label sr-only' for='password'>Пароль</label>
            <input class='form-control w3l' id='password' name='password' placeholder='Введите сюда Ваш пароль' type='password'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
        </div>
        <div class='submit w3-agile'>
            <input class='btn btn-lg' type='submit' value='ВОЙТИ'>
        </div>
        <div class="login-agileits-bottom">
            <h6><a href="user/signup">Создать аккаунт</a></h6>
        </div>
    </form>
</div>

