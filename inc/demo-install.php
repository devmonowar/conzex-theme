<?php
/**
 * Demo import functionality
 */

function conzex_import_files() {
	return array(
		array(
			'import_file_name' => 'Conzex Demo 1',
			'import_file_url' => 'https://monowar.ml/conzex-demo/demo-content1.xml',
			'import_widget_file_url' => 'https://monowar.ml/conzex-demo/widgets1.wie',
			'import_customizer_file_url' => 'https://monowar.ml/conzex-demo/customizer1.dat',
			'import_preview_image_url' => 'https://monowar.ml/conzex-demo/demo1.png',
			'import_notice' => __( 'Please click on Import Demo Data to make your installation as you see in Conzex preview site.', 'conzex' ),
			'preview_url' => 'https://monowar.ml/conzex',
		),
		array(
			'import_file_name' => 'Conzex Demo 2',
			'import_file_url' => 'https://monowar.ml/conzex-demo/demo-content2.xml',
			'import_widget_file_url' => 'https://monowar.ml/conzex-demo/widgets2.wie',
			'import_customizer_file_url' => 'https://monowar.ml/conzex-demo/customizer2.dat',
			'import_preview_image_url' => 'https://monowar.ml/conzex-demo/demo2.png',
			'import_notice' => __( 'Please click on Import Demo Data to make your installation as you see in Conzex preview site.', 'conzex' ),
			'preview_url' => 'https://monowar.ml/conzex',
		),

	);
}
add_filter( 'pt-ocdi/import_files', 'conzex_import_files' );


