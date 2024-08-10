<?php
require 'flight/Flight.php';


Flight::render('head', array('body_style' => 'page'), 'head_content');
Flight::render('top_panel', [], 'top_panel_content');
Flight::render('menu', [], 'menu_content');
Flight::render('slider', [], 'slider_content');
Flight::render('footer', [], 'footer_content');


Flight::route('/', function(){
Flight::render('head', array('body_style' => 'home page'), 'head_content');
	Flight::render('home');
});


Flight::route('/index', function(){
Flight::render('head', array('body_style' => 'home page'), 'head_content');
	Flight::render('home');
});


Flight::route('/@class-@subject', function($class, $subject){
	require 'books.php';
	$book = gen_book($subject);
	$class_title = gen_class_title($class);
	if (!($book) || !($class_title)) Flight::render('404');
	else {
	$articles = 	array(
					'book' => $book,
					'class' => $class_title,
					'article' => $article[$class][$subject]
					);

	Flight::render('books', $articles);
	}
});

Flight::map('notFound', function(){
Flight::redirect('/404', 404);
});


Flight::route('/404', function(){
Flight::render('head', array('body_style' => 'error404'), 'head_content');
	Flight::render('404');
});


Flight::start();
?>
