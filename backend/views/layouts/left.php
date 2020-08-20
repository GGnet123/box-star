<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/assets/logo.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->getIdentity()->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>



        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'User', 'icon' => 'user-circle-o', 'url' => ['/user']],
                    ['label' => 'States', 'icon' => 'flag-o', 'url' => ['/states']],
                    ['label' => 'Cities', 'icon' => 'building-o', 'url' => ['/cities']],
                    ['label' => 'Move types', 'icon' => 'truck', 'url' => ['/move-types']],
                    ['label' => 'Move sizes', 'icon' => 'magic', 'url' => ['/move-sizes']],
                    ['label' => 'Orders', 'icon' => 'list-alt', 'url' => ['/orders']],
                    ['label' => 'Comments', 'icon' => 'list', 'url' => ['/comments']],
                    ['label' => 'Settings', 'icon' => 'gear', 'items' => [
                        ['label' => 'Main Texts', 'icon' => 'list', 'url' => ['/settings-text']],
                        ['label' => 'Main Images', 'icon' => 'list', 'url' => ['/settings-images']],
                        ['label' => 'Partners', 'icon' => 'list', 'url' => ['/settings-partners']],
                        ['label' => 'Services', 'icon' => 'list', 'url' => ['/settings-services']],
                    ]]
                ],
            ]
        ) ?>

    </section>

</aside>
