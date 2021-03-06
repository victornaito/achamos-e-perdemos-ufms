<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color:#fff;"><i class="fa fa-map-marker"></i></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php $this->request->getParam('action') == 'display' ? $class = "menu-active" : $class=""; ?>
                <li><?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => 'display'], ['class' => $class]) ?></li>
                <?php $this->request->getParam('action') == 'listAllUnsolvedObjects' ? $class = "menu-active" : $class=""; ?>
                <li><?= $this->Html->link(__('Todos os objetos'), ['controller' => 'Objects', 'action' => 'listAllUnsolvedObjects'], ['class' => $class]) ?></li>
                <?php $this->request->getParam('action') == 'listAllSolvedObjects' ? $class = "menu-active" : $class=""; ?>
                <li><?= $this->Html->link(__('Casos Solucionados'), ['controller' => 'Objects', 'action' => 'listAllSolvedObjects'], ['class' => $class]) ?></li>
                <?php $this->request->getParam('action') == 'mapView' ? $class = "menu-active" : $class=""; ?>
                <li><?= $this->Html->link(__('Visualizar mapa'), ['controller' => 'Objects', 'action' => 'mapView'], ['class' => $class]) ?></li>
                <?php $this->request->getParam('action') == 'restApi' ? $class = "menu-active" : $class=""; ?>
                <li><?= $this->Html->link(__('Rest API'), ['controller' => 'Pages', 'action' => 'restApi'], ['class' => $class]) ?></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if ($this->request->session()->read('Auth.User')) {?>
                <li><?= $this->Html->link(__('Dashboard'), ['controller' => 'Pages', 'action' => 'dashboard']) ?></li>
                <?php }?>
                <?php if (!$this->request->session()->read('Auth.User')) {?>
                <li><?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']) ?></li>
                <?php }?>
                <?php $this->request->getParam('action') == 'register' ? $class = "menu-active" : $class=""; ?>
                <li><?= $this->Html->link(__('Cadastre-se'), ['controller' => 'Users', 'action' => 'register'], ['class' => $class]) ?></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
