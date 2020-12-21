<h2 class="title"><?php print $data['title'] ?></h2>

<?php print $data['table']; ?>

<!-- Create form can be pre-rendered -->
<?php if (isset($data['forms']['create'])): ?>
    <div class="create-form-wrapper">
        <?php print $data['forms']['create']; ?>
    </div>
<?php endif; ?>

<?php if ($data['message']): ?>
    <p class="message_for_user"><?php print $data['message']; ?></p>
<?php endif; ?>

<?php foreach ($data['links'] as $link): ?>
    <?php print $link; ?>
<?php endforeach; ?>