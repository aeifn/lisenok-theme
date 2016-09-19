<?php

add_action ( 'wp_enqueue_scripts', 'correctimg' ) ;
function correctimg(){
	$js = get_stylesheet_directory_uri() . '/js/img.js';
	wp_enqueue_script( 'img', $js, false );
}

add_action('twentyeleven_credits','signature');
function signature(){
?>

<div class="signature">Дизайн, вебмастеринг и хостинг <a href="http://mne.vra4a.ru/~egor/">Егора Кузьмичёва</a></div>

<?php
}

?>
