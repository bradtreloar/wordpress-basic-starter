/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/app/themes/sage/dist/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 14);
/******/ })
/************************************************************************/
/******/ ({

/***/ 14:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(15);
module.exports = __webpack_require__(16);


/***/ }),

/***/ 15:
/***/ (function(module, exports) {

/*
 * Unregister unsupported blocks.
 */
wp.domReady(function () {
  var unsupportedCoreBlocks = [
    "buttons",
    "columns",
    "calendar",
    "categories",
    "rss" ];
  unsupportedCoreBlocks.forEach(function (blockName) {
    wp.blocks.unregisterBlockType(("core/" + blockName));
  });
  var supportedEmbedBlocks = ["youtube"];
  wp.blocks.getBlockVariations("core/embed").forEach(function (blockVariation) {
    if (!supportedEmbedBlocks.includes(blockVariation.name)) {
      wp.blocks.unregisterBlockVariation("core/embed", blockVariation.name);
    }
  });
});


/***/ }),

/***/ 16:
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \n  @import \"layouts/header\";\n ^\n      File to import not found or unreadable: layouts/header.\n      in /home/brad/Sites/wordpress-basic-starter/wordpress/web/app/themes/sage/resources/assets/styles/editor.scss (line 10, column 3)\n    at /home/brad/Sites/wordpress-basic-starter/wordpress/web/app/themes/sage/node_modules/webpack/lib/NormalModule.js:195:19\n    at /home/brad/Sites/wordpress-basic-starter/wordpress/web/app/themes/sage/node_modules/loader-runner/lib/LoaderRunner.js:367:11\n    at /home/brad/Sites/wordpress-basic-starter/wordpress/web/app/themes/sage/node_modules/loader-runner/lib/LoaderRunner.js:233:18\n    at context.callback (/home/brad/Sites/wordpress-basic-starter/wordpress/web/app/themes/sage/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.callback (/home/brad/Sites/wordpress-basic-starter/wordpress/web/app/themes/sage/node_modules/sass-loader/lib/loader.js:55:13)\n    at Object.done [as callback] (/home/brad/Sites/wordpress-basic-starter/wordpress/web/app/themes/sage/node_modules/neo-async/async.js:8069:18)\n    at options.error (/home/brad/Sites/wordpress-basic-starter/wordpress/web/app/themes/sage/node_modules/node-sass/lib/index.js:293:32)");

/***/ })

/******/ });
//# sourceMappingURL=editor.js.map