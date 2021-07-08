/*
 * Unregister unsupported blocks.
 */
wp.domReady(function () {
  const unsupportedCoreBlocks = [
    "buttons",
    "columns",
    "calendar",
    "categories",
    "rss",
  ];
  unsupportedCoreBlocks.forEach((blockName) => {
    wp.blocks.unregisterBlockType(`core/${blockName}`);
  });
  const supportedEmbedBlocks = ["youtube"];
  wp.blocks.getBlockVariations("core/embed").forEach((blockVariation) => {
    if (!supportedEmbedBlocks.includes(blockVariation.name)) {
      wp.blocks.unregisterBlockVariation("core/embed", blockVariation.name);
    }
  });
});
