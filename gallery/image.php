<?php
  include_once 'models/config.php';

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    // указывае где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

    // подгружаем шаблон
    $template = $twig->loadTemplate('image.tmpl');

    // передаём в шаблон переменные и значения
    // выводим сформированное содержание

    $content = $template->render(array(
        'imgAddress' => PHOTO.$_GET['photo'],
        'backPage' => 'index.php',
    ));
    echo $content;

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
?>

