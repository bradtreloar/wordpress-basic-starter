import { registerBlockType } from '@wordpress/blocks';
import edit from './edit';
import save from './save';
import icon from './Icon';

registerBlockType( 'custom-block/card-block', {
	edit,
	save,
	icon
} );
