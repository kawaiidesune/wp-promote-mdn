(function(blocks, i18n, element) {
	/* Set up variables */
	var el = element.createElement;
	var children = blocks.source.children;
	var BlockControls = wp.blocks.BlockControls;
	var AlignmentToolbar = wp.blocks.AlignmentToolbar;
	var InspectorControls = wp.blocks.InspectorControls;
	var TextControl = wp.blocks.InspectorControls.TextControl;
	var SelectControl = wp.blocks.InspectorControls.SelectControl;
	
	/* Register block type */
	blocks.registerBlockType('promote-mdn/banner-block', {
		title: i18n.__('MDN Banner'),
		icon: 'heart',
		category: 'widget',
		attributes: {
			pickABanner: {
				type: 'string',
				source: 'attribute',
				selector: '.promote-mdn-banner-block img',
				attribute: 'src'
			}
		}, 
		edit: function( props ) {}, /* Placeholder */ 
		save: {} /* Placeholder */
	});
})(
	window.wp.blocks,
	window.wp.i18n,
	window.wp.element,
);