<?php include ROOT . '/views/layouts/header.php'; ?>
<?php include ROOT . '/views/layouts/navbar.php'; ?>

   

<div class="col-md-6 col-md-offset-3">
    <br>
    <div class="form-group has-feedback">
        <form role="form" class="form-horizontal" action="#" method="post">
            <h1>Вход:</h1>
            <br>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
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
                    <input type="submit" class="btn btn-success" style="float: right;" value="Войти" name="submit">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-9">
                     <a style="float: right;" href="/user/register" class="btn btn-success" role="button">Регистрация</a>
                </div>
            </div>
        </form>
    </div>


    <!-- jQuery -->
    <script src="/template/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/template/js/bootstrap.min.js"></script>

<?php include ROOT . '/views/layouts/footer.php'; ?>




