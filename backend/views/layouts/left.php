<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="image/boss.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">-->
<!--            <div class="input-group">-->
<!--<!--                <input type="text" name="q" class="form-control" placeholder="Search..."/>-->-->
<!--              <span class="input-group-btn">-->
<!--                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--                </button>-->
<!--              </span>-->
<!--            </div>-->
<!--        </form>-->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Xabarlar', 'icon' => 'newspaper-o', 'url' => ['/post']],
                    ['label' => 'O\'qituvchilar', 'icon' => 'user', 'url' => ['/teacher']],
                    ['label' => 'Maqolalar', 'icon' => 'book', 'url' => ['/papers']],
                    ['label' => 'Kategoriyalar', 'icon' => 'file-code-o', 'url' => ['/category']],
                    ['label' => 'Loyihalar', 'icon' => 'code', 'url' => ['/project']],
                    ['label' => 'Tadbirlar', 'icon' => 'camera', 'url' => ['/event']],
                ],
            ]
        ) ?>

    </section>

</aside>
