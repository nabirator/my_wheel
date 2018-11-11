<!-- {sitename}/src/pages/hello.php -->
<?php /** @var \Symfony\Component\HttpFoundation\Request $request */
    $name = $request->get('name', 'World');
?>
Hello <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
