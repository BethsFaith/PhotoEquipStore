<form>
    <aside>
        <nav>
            <ui class = "top menu">
                <li class= <?php echo $items['MAIN_PAGE']['class']?>>
                    <a href="<?php echo $items['MAIN_PAGE']['content']?>">
                    <?php echo $items['MAIN_PAGE']['name']?></a></li>

                <li class= <?php echo $items['AUTHOR']['class']?>>
                    <a href="<?php echo $items['AUTHOR']['content']?>">
                        <?php echo $items['AUTHOR']['name']?></a></li>

                <li class= <?php echo $items['COMPANY']['class']?>>
                    <a href="<?php echo $items['COMPANY']['content']?>">
                        <?php echo $items['COMPANY']['name']?></a></li>
            </ui>
        </nav>

        <nav>
            <ul class="aside-menu">
                <li class= <?php echo $items['LENSES']['class']?>>
                    <a href="<?php echo $items['LENSES']['content']?>">
                        <?php echo $items['LENSES']['name']?></a></li>

                <li class= <?php echo $items['CAMERAS']['class']?>>
                    <a href="<?php echo $items['CAMERAS']['content']?>">
                        <?php echo $items['CAMERAS']['name']?></a></li>

                <li class= <?php echo $items['FLASHES']['class']?>>
                    <a href="<?php echo $items['FLASHES']['content']?>">
                        <?php echo $items['FLASHES']['name']?></a></li>

                <li class= <?php echo $items['MEMORY_CARDS']['class']?>>
                    <a href="<?php echo $items['MEMORY_CARDS']['content']?>">
                        <?php echo $items['MEMORY_CARDS']['name']?></a></li>
            </ul>
        </nav>
    </aside>
</form>