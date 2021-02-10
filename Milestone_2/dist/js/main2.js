/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/main2.js":
/*!**********************!*\
  !*** ./src/main2.js ***!
  \**********************/
/***/ (function() {

var _this = this;

//JS
axios.get('dist/php/db.php').then(function (resp) {
  // console.log(resp.data.response);
  var albums = resp.data.response;
  albums.forEach(function (element) {
    // console.log(element);
    var section = document.querySelector('.albums_api');
    var title = element.title;
    var poster = element.poster;
    var author = element.author;
    var year = element.year;
    console.log(title, poster, author, year);
    var markup = "\n      <div class=\"cd\">\n        <img src=\"".concat(poster, "\" alt=\"").concat(title, "\">\n        <h3>").concat(title, "</h3>\n        <span class=\"author\">").concat(author, "</span>\n        <span class=\"year\">").concat(year, "</span>\n       </div><!-- /.cd -->\n    ");
    section.insertAdjacentHTML('beforeend', markup);
  });
})["catch"](function (error) {
  _this.error = "Ops! C'è stato un problema";
  console.log("ERROR", error);
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// startup
/******/ 	// Load entry module
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	__webpack_modules__["./src/main2.js"]();
/******/ })()
;