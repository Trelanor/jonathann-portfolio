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
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 45);
/******/ })
/************************************************************************/
/******/ ({

/***/ 45:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(46);


/***/ }),

/***/ 46:
/***/ (function(module, exports) {

$('.menu a[data-menu]').on('click', function () {
  var menu = $(this).data('menu');
  $('.menu a.active').removeClass('active');
  $(this).addClass('active');
  $('.active[data-page]').removeClass('active');
  $('[data-page="' + menu + '"]').addClass('active');
});

$('body').on('click', '[data-dialog]', function () {
  var action = $(this).data('dialog');
  switch (action) {
    case 'logout':
      $('.dialog').toggleClass('active');
      break;
  }
});

$('body').on('click', '[data-dialog-action]', function () {
  var action = $(this).data('dialog-action');
  switch (action) {
    case 'cancel':
      $(this).closest('.dialog.active').toggleClass('active');
      break;
  }
});

//active user

function updateGraph(data) {
  $('.graph .bar[data-day]').each(function () {
    var day = $(this).data('day');
    var barH = $(this).height();
    switch (day) {
      case 'sunday':
        $(this).find('.bar-content').css('height', barH / 100 * data[day] + 'px');
        break;
      case 'monday':
        $(this).find('.bar-content').css('height', barH / 100 * data[day] + 'px');
        break;
      case 'tuesday':
        $(this).find('.bar-content').css('height', barH / 100 * data[day] + 'px');
        break;
      case 'wednesday':
        $(this).find('.bar-content').css('height', barH / 100 * data[day] + 'px');
        break;
      case 'thursday':
        $(this).find('.bar-content').css('height', barH / 100 * data[day] + 'px');
        break;
      case 'friday':
        $(this).find('.bar-content').css('height', barH / 100 * data[day] + 'px');
        break;
      case 'saturday':
        $(this).find('.bar-content').css('height', barH / 100 * data[day] + 'px');
        break;
    }
  });
}

function addUserToTable(data) {
  var table = $('.users-table');
  var ele = '<div class="users-item"><div class="table-item noflex">' + data['id'] + '</div><div class="table-item">' + data['email'] + '</div><div class="table-item">' + data['username'] + '</div><div class="table-item">' + data['nickname'] + '</div><div class="table-item">' + (data['premium'] ? "Active" : "Inactive") + '</div><div class="table-item">' + (data['premium'] ? "Premium" : "Not Premium") + '<div class="user-edit-controls"><a href="#" class="table-edit-button">Edit</a></div></div></div>';
  table.append(ele);
}

var tempData = {
  sunday: 40,
  monday: 50,
  tuesday: 30,
  wednesday: 20,
  thursday: 30,
  friday: 60,
  saturday: 90

  // user bdd
};var users = [{
  "id": 0,
  "email": "suzannenixon@medicroix.com",
  "username": "Rosemarie45",
  "nickname": "Mildred11",
  "active": true,
  "premium": false
}, {
  "id": 10,
  "email": "mildrednixon@medicroix.com",
  "username": "Lorrie24",
  "nickname": "Warren15",
  "active": false,
  "premium": true
}, {
  "id": 20,
  "email": "warrennixon@medicroix.com",
  "username": "Celina35",
  "nickname": "Beck16",
  "active": false,
  "premium": false
}, {
  "id": 30,
  "email": "becknixon@medicroix.com",
  "username": "Simone18",
  "nickname": "Tonia12",
  "active": false,
  "premium": true
}, {
  "id": 40,
  "email": "tonianixon@medicroix.com",
  "username": "Alejandra31",
  "nickname": "Eileen42",
  "active": true,
  "premium": false
}, {
  "id": 50,
  "email": "eileennixon@medicroix.com",
  "username": "Ofelia4",
  "nickname": "Walsh36",
  "active": true,
  "premium": true
}, {
  "id": 60,
  "email": "walshnixon@medicroix.com",
  "username": "Owen24",
  "nickname": "Mayra0",
  "active": false,
  "premium": true
}, {
  "id": 70,
  "email": "mayranixon@medicroix.com",
  "username": "Tamra8",
  "nickname": "Graham9",
  "active": false,
  "premium": true
}, {
  "id": 80,
  "email": "grahamnixon@medicroix.com",
  "username": "Dejesus44",
  "nickname": "Russo5",
  "active": false,
  "premium": false
}];

$.each(users, function (i, item) {
  addUserToTable(users[i]);
});

updateGraph(tempData);

$('body').on('click', '.users-item:not(.header)', function () {
  console.log('click');
  $(this).toggleClass('active');
});

$('body').on('click', '.users-item a.table-edit-button', function () {
  $(this).closest('.grid').toggleClass('edit-users');
  $(this).closest('.users-item').toggleClass('active');
  e.preventDefault();
});

$('body').on('click', '.user-edit .header .close', function () {
  $(this).closest('.grid').toggleClass('edit-users');
  $(this).closest('.users-item').toggleClass('active');
  e.preventDefault();
});

/***/ })

/******/ });