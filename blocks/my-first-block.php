<?php

/*
    Title: My first block
	Description: A custom block.
    Category: blockstudio
    Icon: cover-image
    IconBackground: #000000
    IconForeground: #ffffff
*/

$fields = [
	[
		'key'   => 'title_key',
		'label' => 'Title',
		'name'  => 'title',
		'type'  => 'text',
	],
	[
		'key'   => 'text_key',
		'label' => 'Text',
		'name'  => 'text',
		'type'  => 'textarea',
	],
];

$example = [
	'attributes' => [
		'mode' => 'preview',
		'data' => [
			'title' => 'This is the title',
			'text'  => 'This is the text'
		]
	]
];

?>

<section>
    <h1>This is the <?php echo get_field( 'title' ) ?: 'Title'; ?></h1>
    <p>This is the <?php echo get_field( 'text' ) ?: 'Text'; ?></p>
</section>
