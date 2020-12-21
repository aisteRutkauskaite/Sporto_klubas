<nav>
    <ul class="nav_container_left">
        <?php foreach ($data as $title => $link): ?>
            <?php if ($link == 'Titulinis' || $link == 'Atsiliepimai'): ?>
                <li><a href="<?php print $title; ?>"><?php print $link; ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
    <ul class="nav_container_right">
        <?php foreach ($data as $title => $link): ?>
            <?php if ($link == 'Atsijungti' || $link == 'Registruotis' || $link == 'Prisijungti'): ?>
                <li><a href="<?php print $title; ?>"><?php print $link; ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>

