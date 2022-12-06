<h1>User</h1>

<div class="username-container">
    <?php foreach ($users AS $user):?>
        <a href="/Users=user?userid=<?php echo $user->userid; ?>"><h3><?php echo $user->username; ?></h3></a>
    <?php endforeach;#?>
</div>