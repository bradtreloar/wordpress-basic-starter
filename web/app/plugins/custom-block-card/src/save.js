import { __ } from '@wordpress/i18n';
import { InnerBlocks } from '@wordpress/block-editor';

export default function save() {
	return (
		<div className="bg-white p-3 p-md-5 my-3">
			<InnerBlocks.Content />
		</div>
	);
}
