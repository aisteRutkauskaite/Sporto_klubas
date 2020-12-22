<!--<nav>-->
<!--    <ul class="nav_container_left">-->
<!--        --><?php //foreach ($data as $title => $link): ?>
<!--            --><?php //if ($link == 'Titulinis' || $link == 'Atsiliepimai'): ?>
<!--                <li><a class="--><?php //$_SERVER['REQUEST_URI'] == $link ? print 'active' : '';?><!--" href="--><?php //print $title; ?><!--">--><?php //print $link; ?><!--</a></li>-->
<!--            --><?php //endif; ?>
<!--        --><?php //endforeach; ?>
<!--    </ul>-->
<!--    <ul class="nav_container_right">-->
<!--        --><?php //foreach ($data as $title => $link): ?>
<!--            --><?php //if ($link == 'Atsijungti' || $link == 'Registruotis' || $link == 'Prisijungti'): ?>
<!--                <li><a class="--><?php //$_SERVER['REQUEST_URI'] == $link ? print 'active' : '';?><!--"  href="--><?php //print $title; ?><!--">--><?php //print $link; ?><!--</a></li>-->
<!--            --><?php //endif; ?>
<!--        --><?php //endforeach; ?>
<!--    </ul>-->
<!--</nav>-->

<header>
    <nav>

        <?php foreach ($data as $ul): ?>

            <ul>

                <?php foreach ($ul as $link => $title): ?>

                    <li>
                        <a href="<?php print $link; ?>" class="<?php $_SERVER['REQUEST_URI'] == $link ? print 'active' : '';?>"><?php print $title; ?></a>
                    </li>

                <?php endforeach; ?>

            </ul>

        <?php endforeach; ?>

    </nav>
</header>