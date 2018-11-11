<?php
// {sitename}/src/pages/hello.php
    /** @var \Symfony\Component\HttpFoundation\Request $request */
    $name = $request->get('name', 'World');
?>
Hello <?= htmlspecialchars(isset($name) ? $name : 'World', ENT_QUOTES, 'UTF-8') ?>
