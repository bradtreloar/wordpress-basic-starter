!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=4)}([function(e,t){e.exports=window.wp.element},function(e,t){e.exports=window.wp.blockEditor},function(e,t){e.exports=window.wp.i18n},function(e,t){e.exports=window.wp.blocks},function(e,t,n){"use strict";n.r(t);var r=n(3),o=n(0),c=(n(2),n(1));Object(r.registerBlockType)("custom-block/card-block",{edit:function(){var e=Object(c.useBlockProps)({className:"bg-white p-3 p-md-5 my-3"});return Object(o.createElement)("div",e,Object(o.createElement)(c.InnerBlocks,null))},save:function(){return Object(o.createElement)("div",{className:"bg-white p-3 p-md-5 my-3"},Object(o.createElement)(c.InnerBlocks.Content,null))},icon:function(){return Object(o.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 6.3499999 6.3499998"},Object(o.createElement)("path",{d:"M 1.0703125 0.44335938 C 0.72098503 0.44335937 0.43554688 0.72879747 0.43554688 1.078125 L 0.43554688 5.3066406 C 0.43554687 5.6559681 0.72098503 5.9414062 1.0703125 5.9414062 L 5.2988281 5.9414062 C 5.6481556 5.9414062 5.9335938 5.6559681 5.9335938 5.3066406 L 5.9335938 1.078125 C 5.9335938 0.72879748 5.6481556 0.44335937 5.2988281 0.44335938 L 1.0703125 0.44335938 z M 1.0703125 0.65429688 L 5.2988281 0.65429688 C 5.5358173 0.65429688 5.7246094 0.84113578 5.7246094 1.078125 L 5.7246094 5.3066406 C 5.7246094 5.5436298 5.5358173 5.7304688 5.2988281 5.7304688 L 1.0703125 5.7304688 C 0.83332337 5.7304688 0.64648437 5.5436298 0.64648438 5.3066406 L 0.64648438 1.078125 C 0.64648438 0.84113579 0.83332337 0.65429687 1.0703125 0.65429688 z "}),Object(o.createElement)("path",{d:"M 1.3613281 1.375 L 1.3613281 1.640625 L 5.0097656 1.640625 L 5.0097656 1.375 L 1.3613281 1.375 z "}),Object(o.createElement)("path",{d:"M 1.3613281 2.0195312 L 1.3613281 2.2832031 L 5.0097656 2.2832031 L 5.0097656 2.0195312 L 1.3613281 2.0195312 z "}),Object(o.createElement)("path",{d:"M 1.3613281 2.7167969 L 1.3613281 2.9804688 L 3.2597656 2.9804688 L 3.2597656 2.7167969 L 1.3613281 2.7167969 z "}))}})}]);