<form>
    <aside>
        <nav>
            <ui class = "top menu">
                <li class= <?php echo $items['mainPage']['class']?>>
                    <a href="<?php echo $items['mainPage']['content']?>">
                    <?php echo $items['mainPage']['name']?></a></li>

                <li class= <?php echo $items['author']['class']?>>
                    <a href="<?php echo $items['author']['content']?>">
                        <?php echo $items['author']['name']?></a></li>

                <li class= <?php echo $items['company']['class']?>>
                    <a href="<?php echo $items['company']['content']?>">
                        <?php echo $items['company']['name']?></a></li>
            </ui>
        </nav>

        <nav>
            <ul class="aside-menu">
                <li class= <?php echo $items['lenses']['class']?>>
                    <a href="<?php echo $items['lenses']['content']?>">
                        <?php echo $items['lenses']['name']?></a></li>

                <li class= <?php echo $items['cameras']['class']?>>
                    <a href="<?php echo $items['cameras']['content']?>">
                        <?php echo $items['cameras']['name']?></a></li>

                <li class= <?php echo $items['flashes']['class']?>>
                    <a href="<?php echo $items['flashes']['content']?>">
                        <?php echo $items['flashes']['name']?></a></li>

                <li class= <?php echo $items['memoryCards']['class']?>>
                    <a href="<?php echo $items['memoryCards']['content']?>">
                        <?php echo $items['memoryCards']['name']?></a></li>
            </ul>
        </nav>
    </aside>
</form>