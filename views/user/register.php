<?php include ROOT . '/views/layouts/header.php'; ?>
<?php include ROOT . '/views/layouts/navbar.php'; ?>

   

<div class="col-md-6 col-md-offset-3">
    <br>
    <form role="form" class="form-horizontal" action="#" method="post">
        <h1>Регистрация:</h1>
        <br>
        <!-- Блок для ввода Имени -->
        <div class="form-group has-feedback">
            <label for="name" class="control-label col-xs-3">Имя:</label>
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>         
                    <input type="text" class="form-control" required="required" name="name" value="<?php echo $name; ?>" pattern="[A-Za-zа-ЯёЁА-Я]{6,}">
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <!-- Блок для ввода Фамилии -->
        <div class="form-group has-feedback">
            <label for="surname" class="control-label col-xs-3">Фамилия:</label>
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>         
                    <input type="text" class="form-control" required="required" name="surname" value="<?php echo $surname; ?>" pattern="[A-Za-zа-ЯёЁА-Я]{6,}">
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <!-- Блок для ввода email -->
        <div class="form-group has-feedback">
            <label for="email" class="control-label col-xs-3">Email:</label>
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" class="form-control" required="required" value="<?php echo $email; ?>" name="email" >
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <!-- Блок выбора пола -->
        <div class="form-group has-feedback">
            <label for="email" class="control-label col-xs-3">Пол:</label>
            <div class="col-xs-6">
                <div class="input-group">
                    <label for="gen"></label>
                    <select class="form-control" id="gen" name="gender">
                        <option value="1">Не указан</option>
                        <option value="2">Мужской</option>
                        <option value="3">Женский</option>
                    </select>
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <!-- Блок для ввода даты рождения -->
        <div class="form-group has-feedback">
            <label for="birthday" class="control-label col-xs-3">Дата рождения:</label>
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
                    <input type="text" class="form-control" value="" name="birthday">
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <!-- Блок для ввода пароля -->
        <div class="form-group has-feedback">
            <label for="password" class="control-label col-xs-3">Пароль:</label>
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" required="required" value="<?php echo $password; ?>" name="password">
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-9">
            <input type="submit" class="btn btn-success" style="float: right;" value="Регистрация" name="submit">
            </div>
        </div>
    </form>

</div>

<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<?php include ROOT . '/views/layouts/footer.php'; ?>