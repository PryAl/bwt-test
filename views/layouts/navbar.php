<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">BWT_TEST</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Обратная связь</a>
                </li>
                <?php if (!User::isGuest()): ?>
                    <li>
                        <a href="#">Погода</a>
                    </li>
                <?php endif; ?>
                <?php if (!User::isGuest()): ?>
                    <li>
                        <a href="#">Фидбеки</a>
                    </li>
                <?php endif; ?>
            </ul>
            <?php if (!User::isGuest()): ?>
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="/site/logout"><i class="glyphicon glyphicon-log-out"></i> Выход</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
