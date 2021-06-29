import { __ } from "@wordpress/i18n";
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";

export default function edit() {
	const blockProps = useBlockProps({
		className: "bg-white p-3 p-md-5 my-3",
	});

	return (
		<div {...blockProps}>
			<InnerBlocks />
		</div>
	);
}
