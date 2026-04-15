(self["webpackChunk"] = self["webpackChunk"] || []).push([["assets_js_admin_js-assets_js_bootstrap_js-assets_js_jquery_tableToExcel_js-assets_js_select2_-13fb9c"],{

/***/ "./assets/js/admin.js":
/*!****************************!*\
  !*** ./assets/js/admin.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.search.js */ "./node_modules/core-js/modules/es.string.search.js");
__webpack_require__(/*! core-js/modules/es.string.match.js */ "./node_modules/core-js/modules/es.string.match.js");
__webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
if (typeof jQuery === "undefined") {
  throw new Error("jQuery plugins need to be before this file");
}
$.AdminBSB = {};
$.AdminBSB.options = {
  colors: {
    red: '#F44336',
    pink: '#E91E63',
    purple: '#9C27B0',
    deepPurple: '#673AB7',
    indigo: '#3F51B5',
    blue: '#2196F3',
    lightBlue: '#03A9F4',
    cyan: '#00BCD4',
    teal: '#009688',
    green: '#4CAF50',
    lightGreen: '#8BC34A',
    lime: '#CDDC39',
    yellow: '#ffe821',
    amber: '#FFC107',
    orange: '#FF9800',
    deepOrange: '#FF5722',
    brown: '#795548',
    grey: '#9E9E9E',
    blueGrey: '#607D8B',
    black: '#000000',
    white: '#ffffff'
  },
  leftSideBar: {
    scrollColor: 'rgba(0,0,0,0.5)',
    scrollWidth: '4px',
    scrollAlwaysVisible: false,
    scrollBorderRadius: '0',
    scrollRailBorderRadius: '0',
    scrollActiveItemWhenPageLoad: true,
    breakpointWidth: 1170
  },
  dropdownMenu: {
    effectIn: 'fadeIn',
    effectOut: 'fadeOut'
  }
};

/* Left Sidebar - Function =================================================================================================
*  You can manage the left sidebar menu options
*  
*/
$.AdminBSB.leftSideBar = {
  activate: function activate() {
    var _this = this;
    var $body = $('body');
    var $overlay = $('.overlay');

    //Close sidebar
    $(window).click(function (e) {
      var $target = $(e.target);
      if (e.target.nodeName.toLowerCase() === 'i') {
        $target = $(e.target).parent();
      }
      if (!$target.hasClass('bars') && _this.isOpen() && $target.parents('#leftsidebar').length === 0) {
        if (!$target.hasClass('js-right-sidebar')) $overlay.fadeOut();
        if (!$target.hasClass('js-right-sidebars')) $overlay.fadeOut();
        $body.removeClass('overlay-open');
      }
    });
    $.each($('.menu-toggle.toggled'), function (i, val) {
      $(val).next().slideToggle(0);
    });

    //When page load
    $.each($('.menu .list li.active'), function (i, val) {
      var $activeAnchors = $(val).find('a:eq(0)');
      $activeAnchors.addClass('toggled');
      $activeAnchors.next().show();
    });

    //Collapse or Expand Menu
    $('.menu-toggle').on('click', function (e) {
      var $this = $(this);
      var $content = $this.next();
      if ($($this.parents('ul')[0]).hasClass('list')) {
        var $not = $(e.target).hasClass('menu-toggle') ? e.target : $(e.target).parents('.menu-toggle');
        $.each($('.menu-toggle.toggled').not($not).next(), function (i, val) {
          if ($(val).is(':visible')) {
            $(val).prev().toggleClass('toggled');
            $(val).slideUp();
          }
        });
      }
      $this.toggleClass('toggled');
      $content.slideToggle(320);
    });

    //Set menu height
    _this.setMenuHeight(true);
    _this.checkStatusForResize(true);
    $(window).resize(function () {
      _this.setMenuHeight(false);
      _this.checkStatusForResize(false);
    });
  },
  setMenuHeight: function setMenuHeight(isFirstTime) {
    if (typeof $.fn.slimScroll != 'undefined') {
      var configs = $.AdminBSB.options.leftSideBar;
      var height = $(window).height() - ($('.legal').outerHeight() + $('.user-info').outerHeight() + $('.navbar').innerHeight());
      var $el = $('.list');
      if (!isFirstTime) {
        $el.slimscroll({
          destroy: true
        });
      }
      $el.slimscroll({
        height: height + "px",
        color: configs.scrollColor,
        size: configs.scrollWidth,
        alwaysVisible: configs.scrollAlwaysVisible,
        borderRadius: configs.scrollBorderRadius,
        railBorderRadius: configs.scrollRailBorderRadius
      });

      //Scroll active menu item when page load, if option set = true
      if ($.AdminBSB.options.leftSideBar.scrollActiveItemWhenPageLoad) {
        var item = $('.menu .list li.active')[0];
        if (item) {
          var activeItemOffsetTop = item.offsetTop;
          if (activeItemOffsetTop > 150) $el.slimscroll({
            scrollTo: activeItemOffsetTop + 'px'
          });
        }
      }
    }
  },
  checkStatusForResize: function checkStatusForResize(firstTime) {
    var $body = $('body');
    var $openCloseBar = $('.navbar .navbar-header .bars');
    var width = $body.width();
    if (firstTime) {
      $body.find('.content, .sidebar').addClass('no-animate').delay(1000).queue(function () {
        $(this).removeClass('no-animate').dequeue();
      });
    }
    if (width < $.AdminBSB.options.leftSideBar.breakpointWidth) {
      $body.addClass('ls-closed');
      $openCloseBar.fadeIn();
    } else {
      $body.removeClass('ls-closed');
      $openCloseBar.fadeOut();
    }
  },
  isOpen: function isOpen() {
    return $('body').hasClass('overlay-open');
  }
};
//==========================================================================================================================

/* Right Sidebar - Function ================================================================================================
*  You can manage the right sidebar menu options
*  
*/
$.AdminBSB.rightSideBar = {
  activate: function activate() {
    var _this = this;
    var $sidebar = $('#rightsidebar');
    var $overlay = $('.overlay');

    //Close sidebar
    $(window).click(function (e) {
      var $target = $(e.target);
      if (e.target.nodeName.toLowerCase() === 'i') {
        $target = $(e.target).parent();
      }
      if (!$target.hasClass('js-right-sidebar') && _this.isOpen() && $target.parents('#rightsidebar').length === 0) {
        if (!$target.hasClass('bars')) $overlay.fadeOut();
        $sidebar.removeClass('open');
      }
    });
    $('.js-right-sidebar').on('click', function () {
      $sidebar.toggleClass('open');
      if (_this.isOpen()) {
        $overlay.fadeIn();
      } else {
        $overlay.fadeOut();
      }
    });
  },
  isOpen: function isOpen() {
    return $('.right-sidebar').hasClass('open');
  }
};
$.AdminBSB.rightSideBars = {
  activate: function activate() {
    var _this = this;
    var $sidebar = $('#rightsidebars');
    var $overlay = $('.overlay');

    //Close sidebar
    $(window).click(function (e) {
      var $target = $(e.target);
      if (e.target.nodeName.toLowerCase() === 'i') {
        $target = $(e.target).parent();
      }
      if (!$target.hasClass('js-right-sidebars') && _this.isOpen() && $target.parents('#rightsidebars').length === 0) {
        if (!$target.hasClass('bars')) $overlay.fadeOut();
        $sidebar.removeClass('open');
      }
    });
    $('.js-right-sidebars').on('click', function () {
      $sidebar.toggleClass('open');
      if (_this.isOpen()) {
        $overlay.fadeIn();
      } else {
        $overlay.fadeOut();
      }
    });
  },
  isOpen: function isOpen() {
    return $('.right-sidebars').hasClass('open');
  }
};

//==========================================================================================================================

/* Searchbar - Function ================================================================================================
*  You can manage the search bar
*  
*/
var $searchBar = $('.search-bar');
$.AdminBSB.search = {
  activate: function activate() {
    var _this = this;

    //Search button click event
    $('.js-search').on('click', function () {
      _this.showSearchBar();
    });

    //Close search click event
    $searchBar.find('.close-search').on('click', function () {
      _this.hideSearchBar();
    });

    //ESC key on pressed
    $searchBar.find('input[type="text"]').on('keyup', function (e) {
      if (e.keyCode == 27) {
        _this.hideSearchBar();
      }
    });
  },
  showSearchBar: function showSearchBar() {
    $searchBar.addClass('open');
    $searchBar.find('input[type="text"]').focus();
  },
  hideSearchBar: function hideSearchBar() {
    $searchBar.removeClass('open');
    $searchBar.find('input[type="text"]').val('');
  }
};
//==========================================================================================================================

/* Navbar - Function =======================================================================================================
*  You can manage the navbar
*  
*/
$.AdminBSB.navbar = {
  activate: function activate() {
    var $body = $('body');
    var $overlay = $('.overlay');

    //Open left sidebar panel
    $('.bars').on('click', function () {
      $body.toggleClass('overlay-open');
      if ($body.hasClass('overlay-open')) {
        $overlay.fadeIn();
      } else {
        $overlay.fadeOut();
      }
    });

    //Close collapse bar on click event
    $('.nav [data-close="true"]').on('click', function () {
      var isVisible = $('.navbar-toggle').is(':visible');
      var $navbarCollapse = $('.navbar-collapse');
      if (isVisible) {
        $navbarCollapse.slideUp(function () {
          $navbarCollapse.removeClass('in').removeAttr('style');
        });
      }
    });
  }
};
//==========================================================================================================================

/* Input - Function ========================================================================================================
*  You can manage the inputs(also textareas) with name of class 'form-control'
*  
*/
$.AdminBSB.input = {
  activate: function activate($parentSelector) {
    $parentSelector = $parentSelector || $('body');

    //On focus event
    $parentSelector.find('.form-control').focus(function () {
      $(this).closest('.form-line').addClass('focused');
    });

    //On focusout event
    $parentSelector.find('.form-control').focusout(function () {
      var $this = $(this);
      if ($this.parents('.form-group').hasClass('form-float')) {
        if ($this.val() == '') {
          $this.parents('.form-line').removeClass('focused');
        }
      } else {
        $this.parents('.form-line').removeClass('focused');
      }
    });

    //On label click
    $parentSelector.on('click', '.form-float .form-line .form-label', function () {
      $(this).parent().find('input').focus();
    });

    //Not blank form
    $parentSelector.find('.form-control').each(function () {
      if ($(this).val() !== '') {
        $(this).parents('.form-line').addClass('focused');
      }
    });
  }
};
//==========================================================================================================================

/* Form - Select - Function ================================================================================================
*  You can manage the 'select' of form elements
*  
*/
$.AdminBSB.select = {
  activate: function activate() {
    if ($.fn.selectpicker) {
      $('select:not(.ms)').selectpicker();
    }
  }
};
//==========================================================================================================================

/* DropdownMenu - Function =================================================================================================
*  You can manage the dropdown menu
*  
*/

$.AdminBSB.dropdownMenu = {
  activate: function activate() {
    var _this = this;
    $('.dropdown, .dropup, .btn-group').on({
      "show.bs.dropdown": function showBsDropdown() {
        var dropdown = _this.dropdownEffect(this);
        _this.dropdownEffectStart(dropdown, dropdown.effectIn);
      },
      "shown.bs.dropdown": function shownBsDropdown() {
        var dropdown = _this.dropdownEffect(this);
        if (dropdown.effectIn && dropdown.effectOut) {
          _this.dropdownEffectEnd(dropdown, function () {});
        }
      },
      "hide.bs.dropdown": function hideBsDropdown(e) {
        var dropdown = _this.dropdownEffect(this);
        if (dropdown.effectOut) {
          e.preventDefault();
          _this.dropdownEffectStart(dropdown, dropdown.effectOut);
          _this.dropdownEffectEnd(dropdown, function () {
            dropdown.dropdown.removeClass('open');
          });
        }
      }
    });
  },
  dropdownEffect: function dropdownEffect(target) {
    var effectIn = $.AdminBSB.options.dropdownMenu.effectIn,
      effectOut = $.AdminBSB.options.dropdownMenu.effectOut;
    var dropdown = $(target),
      dropdownMenu = $('.dropdown-menu', target);
    if (dropdown.length > 0) {
      var udEffectIn = dropdown.data('effect-in');
      var udEffectOut = dropdown.data('effect-out');
      if (udEffectIn !== undefined) {
        effectIn = udEffectIn;
      }
      if (udEffectOut !== undefined) {
        effectOut = udEffectOut;
      }
    }
    return {
      target: target,
      dropdown: dropdown,
      dropdownMenu: dropdownMenu,
      effectIn: effectIn,
      effectOut: effectOut
    };
  },
  dropdownEffectStart: function dropdownEffectStart(data, effectToStart) {
    if (effectToStart) {
      data.dropdown.addClass('dropdown-animating');
      data.dropdownMenu.addClass('animated dropdown-animated');
      data.dropdownMenu.addClass(effectToStart);
    }
  },
  dropdownEffectEnd: function dropdownEffectEnd(data, callback) {
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    data.dropdown.one(animationEnd, function () {
      data.dropdown.removeClass('dropdown-animating');
      data.dropdownMenu.removeClass('animated dropdown-animated');
      data.dropdownMenu.removeClass(data.effectIn);
      data.dropdownMenu.removeClass(data.effectOut);
      if (typeof callback == 'function') {
        callback();
      }
    });
  }
};
//==========================================================================================================================

/* Browser - Function ======================================================================================================
*  You can manage browser
*  
*/
var edge = 'Microsoft Edge';
var ie10 = 'Internet Explorer 10';
var ie11 = 'Internet Explorer 11';
var opera = 'Opera';
var firefox = 'Mozilla Firefox';
var chrome = 'Google Chrome';
var safari = 'Safari';
$.AdminBSB.browser = {
  activate: function activate() {
    var _this = this;
    var className = _this.getClassName();
    if (className !== '') $('html').addClass(_this.getClassName());
  },
  getBrowser: function getBrowser() {
    var userAgent = navigator.userAgent.toLowerCase();
    if (/edge/i.test(userAgent)) {
      return edge;
    } else if (/rv:11/i.test(userAgent)) {
      return ie11;
    } else if (/msie 10/i.test(userAgent)) {
      return ie10;
    } else if (/opr/i.test(userAgent)) {
      return opera;
    } else if (/chrome/i.test(userAgent)) {
      return chrome;
    } else if (/firefox/i.test(userAgent)) {
      return firefox;
    } else if (!!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)) {
      return safari;
    }
    return undefined;
  },
  getClassName: function getClassName() {
    var browser = this.getBrowser();
    if (browser === edge) {
      return 'edge';
    } else if (browser === ie11) {
      return 'ie11';
    } else if (browser === ie10) {
      return 'ie10';
    } else if (browser === opera) {
      return 'opera';
    } else if (browser === chrome) {
      return 'chrome';
    } else if (browser === firefox) {
      return 'firefox';
    } else if (browser === safari) {
      return 'safari';
    } else {
      return '';
    }
  }
};
//==========================================================================================================================

$(function () {
  $.AdminBSB.browser.activate();
  $.AdminBSB.leftSideBar.activate();
  $.AdminBSB.rightSideBar.activate();
  $.AdminBSB.rightSideBars.activate();
  $.AdminBSB.navbar.activate();
  $.AdminBSB.dropdownMenu.activate();
  $.AdminBSB.input.activate();
  $.AdminBSB.select.activate();
  $.AdminBSB.search.activate();
  setTimeout(function () {
    $('.page-loader-wrapper').fadeOut();
  }, 50);
});

/***/ }),

/***/ "./assets/js/bootstrap.js":
/*!********************************!*\
  !*** ./assets/js/bootstrap.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.sort.js */ "./node_modules/core-js/modules/es.array.sort.js");
/* harmony import */ var core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_15__);
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
















window.jQuery = (jquery__WEBPACK_IMPORTED_MODULE_15___default());
window.$ = (jquery__WEBPACK_IMPORTED_MODULE_15___default());
__webpack_require__.g.jQuery = (jquery__WEBPACK_IMPORTED_MODULE_15___default());
+function ($) {
  'use strict';

  // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
  // ============================================================
  function transitionEnd() {
    var el = document.createElement('bootstrap');
    var transEndEventNames = {
      WebkitTransition: 'webkitTransitionEnd',
      MozTransition: 'transitionend',
      OTransition: 'oTransitionEnd otransitionend',
      transition: 'transitionend'
    };
    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return {
          end: transEndEventNames[name]
        };
      }
    }
    return false; // explicit for ie8 (  ._.)
  }

  // http://blog.alexmaccaw.com/css-transitions
  $.fn.emulateTransitionEnd = function (duration) {
    var called = false;
    var $el = this;
    $(this).one('bsTransitionEnd', function () {
      called = true;
    });
    var callback = function callback() {
      if (!called) $($el).trigger($.support.transition.end);
    };
    setTimeout(callback, duration);
    return this;
  };
  $(function () {
    $.support.transition = transitionEnd();
    if (!$.support.transition) return;
    $.event.special.bsTransitionEnd = {
      bindType: $.support.transition.end,
      delegateType: $.support.transition.end,
      handle: function handle(e) {
        if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments);
      }
    };
  });
}(jQuery);

/* ========================================================================
 * Bootstrap: alert.js v3.3.6
 * http://getbootstrap.com/javascript/#alerts
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // ALERT CLASS DEFINITION
  // ======================
  var dismiss = '[data-dismiss="alert"]';
  var Alert = function Alert(el) {
    $(el).on('click', dismiss, this.close);
  };
  Alert.VERSION = '3.3.6';
  Alert.TRANSITION_DURATION = 150;
  Alert.prototype.close = function (e) {
    var $this = $(this);
    var selector = $this.attr('data-target');
    if (!selector) {
      selector = $this.attr('href');
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, ''); // strip for ie7
    }

    var $parent = $(selector);
    if (e) e.preventDefault();
    if (!$parent.length) {
      $parent = $this.closest('.alert');
    }
    $parent.trigger(e = $.Event('close.bs.alert'));
    if (e.isDefaultPrevented()) return;
    $parent.removeClass('in');
    function removeElement() {
      // detach from parent, fire event then clean up data
      $parent.detach().trigger('closed.bs.alert').remove();
    }
    $.support.transition && $parent.hasClass('fade') ? $parent.one('bsTransitionEnd', removeElement).emulateTransitionEnd(Alert.TRANSITION_DURATION) : removeElement();
  };

  // ALERT PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.alert');
      if (!data) $this.data('bs.alert', data = new Alert(this));
      if (typeof option == 'string') data[option].call($this);
    });
  }
  var old = $.fn.alert;
  $.fn.alert = Plugin;
  $.fn.alert.Constructor = Alert;

  // ALERT NO CONFLICT
  // =================

  $.fn.alert.noConflict = function () {
    $.fn.alert = old;
    return this;
  };

  // ALERT DATA-API
  // ==============

  $(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close);
}(jQuery);

/* ========================================================================
 * Bootstrap: button.js v3.3.6
 * http://getbootstrap.com/javascript/#buttons
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // BUTTON PUBLIC CLASS DEFINITION
  // ==============================
  var Button = function Button(element, options) {
    this.$element = $(element);
    this.options = $.extend({}, Button.DEFAULTS, options);
    this.isLoading = false;
  };
  Button.VERSION = '3.3.6';
  Button.DEFAULTS = {
    loadingText: 'loading...'
  };
  Button.prototype.setState = function (state) {
    var d = 'disabled';
    var $el = this.$element;
    var val = $el.is('input') ? 'val' : 'html';
    var data = $el.data();
    state += 'Text';
    if (data.resetText == null) $el.data('resetText', $el[val]());

    // push to event loop to allow forms to submit
    setTimeout($.proxy(function () {
      $el[val](data[state] == null ? this.options[state] : data[state]);
      if (state == 'loadingText') {
        this.isLoading = true;
        $el.addClass(d).attr(d, d);
      } else if (this.isLoading) {
        this.isLoading = false;
        $el.removeClass(d).removeAttr(d);
      }
    }, this), 0);
  };
  Button.prototype.toggle = function () {
    var changed = true;
    var $parent = this.$element.closest('[data-toggle="buttons"]');
    if ($parent.length) {
      var $input = this.$element.find('input');
      if ($input.prop('type') == 'radio') {
        if ($input.prop('checked')) changed = false;
        $parent.find('.active').removeClass('active');
        this.$element.addClass('active');
      } else if ($input.prop('type') == 'checkbox') {
        if ($input.prop('checked') !== this.$element.hasClass('active')) changed = false;
        this.$element.toggleClass('active');
      }
      $input.prop('checked', this.$element.hasClass('active'));
      if (changed) $input.trigger('change');
    } else {
      this.$element.attr('aria-pressed', !this.$element.hasClass('active'));
      this.$element.toggleClass('active');
    }
  };

  // BUTTON PLUGIN DEFINITION
  // ========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.button');
      var options = _typeof(option) == 'object' && option;
      if (!data) $this.data('bs.button', data = new Button(this, options));
      if (option == 'toggle') data.toggle();else if (option) data.setState(option);
    });
  }
  var old = $.fn.button;
  $.fn.button = Plugin;
  $.fn.button.Constructor = Button;

  // BUTTON NO CONFLICT
  // ==================

  $.fn.button.noConflict = function () {
    $.fn.button = old;
    return this;
  };

  // BUTTON DATA-API
  // ===============

  $(document).on('click.bs.button.data-api', '[data-toggle^="button"]', function (e) {
    var $btn = $(e.target);
    if (!$btn.hasClass('btn')) $btn = $btn.closest('.btn');
    Plugin.call($btn, 'toggle');
    if (!($(e.target).is('input[type="radio"]') || $(e.target).is('input[type="checkbox"]'))) e.preventDefault();
  }).on('focus.bs.button.data-api blur.bs.button.data-api', '[data-toggle^="button"]', function (e) {
    $(e.target).closest('.btn').toggleClass('focus', /^focus(in)?$/.test(e.type));
  });
}(jQuery);

/* ========================================================================
 * Bootstrap: carousel.js v3.3.6
 * http://getbootstrap.com/javascript/#carousel
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // CAROUSEL CLASS DEFINITION
  // =========================
  var Carousel = function Carousel(element, options) {
    this.$element = $(element);
    this.$indicators = this.$element.find('.carousel-indicators');
    this.options = options;
    this.paused = null;
    this.sliding = null;
    this.interval = null;
    this.$active = null;
    this.$items = null;
    this.options.keyboard && this.$element.on('keydown.bs.carousel', $.proxy(this.keydown, this));
    this.options.pause == 'hover' && !('ontouchstart' in document.documentElement) && this.$element.on('mouseenter.bs.carousel', $.proxy(this.pause, this)).on('mouseleave.bs.carousel', $.proxy(this.cycle, this));
  };
  Carousel.VERSION = '3.3.6';
  Carousel.TRANSITION_DURATION = 600;
  Carousel.DEFAULTS = {
    interval: 5000,
    pause: 'hover',
    wrap: true,
    keyboard: true
  };
  Carousel.prototype.keydown = function (e) {
    if (/input|textarea/i.test(e.target.tagName)) return;
    switch (e.which) {
      case 37:
        this.prev();
        break;
      case 39:
        this.next();
        break;
      default:
        return;
    }
    e.preventDefault();
  };
  Carousel.prototype.cycle = function (e) {
    e || (this.paused = false);
    this.interval && clearInterval(this.interval);
    this.options.interval && !this.paused && (this.interval = setInterval($.proxy(this.next, this), this.options.interval));
    return this;
  };
  Carousel.prototype.getItemIndex = function (item) {
    this.$items = item.parent().children('.item');
    return this.$items.index(item || this.$active);
  };
  Carousel.prototype.getItemForDirection = function (direction, active) {
    var activeIndex = this.getItemIndex(active);
    var willWrap = direction == 'prev' && activeIndex === 0 || direction == 'next' && activeIndex == this.$items.length - 1;
    if (willWrap && !this.options.wrap) return active;
    var delta = direction == 'prev' ? -1 : 1;
    var itemIndex = (activeIndex + delta) % this.$items.length;
    return this.$items.eq(itemIndex);
  };
  Carousel.prototype.to = function (pos) {
    var that = this;
    var activeIndex = this.getItemIndex(this.$active = this.$element.find('.item.active'));
    if (pos > this.$items.length - 1 || pos < 0) return;
    if (this.sliding) return this.$element.one('slid.bs.carousel', function () {
      that.to(pos);
    }); // yes, "slid"
    if (activeIndex == pos) return this.pause().cycle();
    return this.slide(pos > activeIndex ? 'next' : 'prev', this.$items.eq(pos));
  };
  Carousel.prototype.pause = function (e) {
    e || (this.paused = true);
    if (this.$element.find('.next, .prev').length && $.support.transition) {
      this.$element.trigger($.support.transition.end);
      this.cycle(true);
    }
    this.interval = clearInterval(this.interval);
    return this;
  };
  Carousel.prototype.next = function () {
    if (this.sliding) return;
    return this.slide('next');
  };
  Carousel.prototype.prev = function () {
    if (this.sliding) return;
    return this.slide('prev');
  };
  Carousel.prototype.slide = function (type, next) {
    var $active = this.$element.find('.item.active');
    var $next = next || this.getItemForDirection(type, $active);
    var isCycling = this.interval;
    var direction = type == 'next' ? 'left' : 'right';
    var that = this;
    if ($next.hasClass('active')) return this.sliding = false;
    var relatedTarget = $next[0];
    var slideEvent = $.Event('slide.bs.carousel', {
      relatedTarget: relatedTarget,
      direction: direction
    });
    this.$element.trigger(slideEvent);
    if (slideEvent.isDefaultPrevented()) return;
    this.sliding = true;
    isCycling && this.pause();
    if (this.$indicators.length) {
      this.$indicators.find('.active').removeClass('active');
      var $nextIndicator = $(this.$indicators.children()[this.getItemIndex($next)]);
      $nextIndicator && $nextIndicator.addClass('active');
    }
    var slidEvent = $.Event('slid.bs.carousel', {
      relatedTarget: relatedTarget,
      direction: direction
    }); // yes, "slid"
    if ($.support.transition && this.$element.hasClass('slide')) {
      $next.addClass(type);
      $next[0].offsetWidth; // force reflow
      $active.addClass(direction);
      $next.addClass(direction);
      $active.one('bsTransitionEnd', function () {
        $next.removeClass([type, direction].join(' ')).addClass('active');
        $active.removeClass(['active', direction].join(' '));
        that.sliding = false;
        setTimeout(function () {
          that.$element.trigger(slidEvent);
        }, 0);
      }).emulateTransitionEnd(Carousel.TRANSITION_DURATION);
    } else {
      $active.removeClass('active');
      $next.addClass('active');
      this.sliding = false;
      this.$element.trigger(slidEvent);
    }
    isCycling && this.cycle();
    return this;
  };

  // CAROUSEL PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.carousel');
      var options = $.extend({}, Carousel.DEFAULTS, $this.data(), _typeof(option) == 'object' && option);
      var action = typeof option == 'string' ? option : options.slide;
      if (!data) $this.data('bs.carousel', data = new Carousel(this, options));
      if (typeof option == 'number') data.to(option);else if (action) data[action]();else if (options.interval) data.pause().cycle();
    });
  }
  var old = $.fn.carousel;
  $.fn.carousel = Plugin;
  $.fn.carousel.Constructor = Carousel;

  // CAROUSEL NO CONFLICT
  // ====================

  $.fn.carousel.noConflict = function () {
    $.fn.carousel = old;
    return this;
  };

  // CAROUSEL DATA-API
  // =================

  var clickHandler = function clickHandler(e) {
    var href;
    var $this = $(this);
    var $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')); // strip for ie7
    if (!$target.hasClass('carousel')) return;
    var options = $.extend({}, $target.data(), $this.data());
    var slideIndex = $this.attr('data-slide-to');
    if (slideIndex) options.interval = false;
    Plugin.call($target, options);
    if (slideIndex) {
      $target.data('bs.carousel').to(slideIndex);
    }
    e.preventDefault();
  };
  $(document).on('click.bs.carousel.data-api', '[data-slide]', clickHandler).on('click.bs.carousel.data-api', '[data-slide-to]', clickHandler);
  $(window).on('load', function () {
    $('[data-ride="carousel"]').each(function () {
      var $carousel = $(this);
      Plugin.call($carousel, $carousel.data());
    });
  });
}(jQuery);

/* ========================================================================
 * Bootstrap: collapse.js v3.3.6
 * http://getbootstrap.com/javascript/#collapse
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // COLLAPSE PUBLIC CLASS DEFINITION
  // ================================
  var Collapse = function Collapse(element, options) {
    this.$element = $(element);
    this.options = $.extend({}, Collapse.DEFAULTS, options);
    this.$trigger = $('[data-toggle="collapse"][href="#' + element.id + '"],' + '[data-toggle="collapse"][data-target="#' + element.id + '"]');
    this.transitioning = null;
    if (this.options.parent) {
      this.$parent = this.getParent();
    } else {
      this.addAriaAndCollapsedClass(this.$element, this.$trigger);
    }
    if (this.options.toggle) this.toggle();
  };
  Collapse.VERSION = '3.3.6';
  Collapse.TRANSITION_DURATION = 350;
  Collapse.DEFAULTS = {
    toggle: true
  };
  Collapse.prototype.dimension = function () {
    var hasWidth = this.$element.hasClass('width');
    return hasWidth ? 'width' : 'height';
  };
  Collapse.prototype.show = function () {
    if (this.transitioning || this.$element.hasClass('in')) return;
    var activesData;
    var actives = this.$parent && this.$parent.children('.panel').children('.in, .collapsing');
    if (actives && actives.length) {
      activesData = actives.data('bs.collapse');
      if (activesData && activesData.transitioning) return;
    }
    var startEvent = $.Event('show.bs.collapse');
    this.$element.trigger(startEvent);
    if (startEvent.isDefaultPrevented()) return;
    if (actives && actives.length) {
      Plugin.call(actives, 'hide');
      activesData || actives.data('bs.collapse', null);
    }
    var dimension = this.dimension();
    this.$element.removeClass('collapse').addClass('collapsing')[dimension](0).attr('aria-expanded', true);
    this.$trigger.removeClass('collapsed').attr('aria-expanded', true);
    this.transitioning = 1;
    var complete = function complete() {
      this.$element.removeClass('collapsing').addClass('collapse in')[dimension]('');
      this.transitioning = 0;
      this.$element.trigger('shown.bs.collapse');
    };
    if (!$.support.transition) return complete.call(this);
    var scrollSize = $.camelCase(['scroll', dimension].join('-'));
    this.$element.one('bsTransitionEnd', $.proxy(complete, this)).emulateTransitionEnd(Collapse.TRANSITION_DURATION)[dimension](this.$element[0][scrollSize]);
  };
  Collapse.prototype.hide = function () {
    if (this.transitioning || !this.$element.hasClass('in')) return;
    var startEvent = $.Event('hide.bs.collapse');
    this.$element.trigger(startEvent);
    if (startEvent.isDefaultPrevented()) return;
    var dimension = this.dimension();
    this.$element[dimension](this.$element[dimension]())[0].offsetHeight;
    this.$element.addClass('collapsing').removeClass('collapse in').attr('aria-expanded', false);
    this.$trigger.addClass('collapsed').attr('aria-expanded', false);
    this.transitioning = 1;
    var complete = function complete() {
      this.transitioning = 0;
      this.$element.removeClass('collapsing').addClass('collapse').trigger('hidden.bs.collapse');
    };
    if (!$.support.transition) return complete.call(this);
    this.$element[dimension](0).one('bsTransitionEnd', $.proxy(complete, this)).emulateTransitionEnd(Collapse.TRANSITION_DURATION);
  };
  Collapse.prototype.toggle = function () {
    this[this.$element.hasClass('in') ? 'hide' : 'show']();
  };
  Collapse.prototype.getParent = function () {
    return $(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each($.proxy(function (i, element) {
      var $element = $(element);
      this.addAriaAndCollapsedClass(getTargetFromTrigger($element), $element);
    }, this)).end();
  };
  Collapse.prototype.addAriaAndCollapsedClass = function ($element, $trigger) {
    var isOpen = $element.hasClass('in');
    $element.attr('aria-expanded', isOpen);
    $trigger.toggleClass('collapsed', !isOpen).attr('aria-expanded', isOpen);
  };
  function getTargetFromTrigger($trigger) {
    var href;
    var target = $trigger.attr('data-target') || (href = $trigger.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, ''); // strip for ie7

    return $(target);
  }

  // COLLAPSE PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.collapse');
      var options = $.extend({}, Collapse.DEFAULTS, $this.data(), _typeof(option) == 'object' && option);
      if (!data && options.toggle && /show|hide/.test(option)) options.toggle = false;
      if (!data) $this.data('bs.collapse', data = new Collapse(this, options));
      if (typeof option == 'string') data[option]();
    });
  }
  var old = $.fn.collapse;
  $.fn.collapse = Plugin;
  $.fn.collapse.Constructor = Collapse;

  // COLLAPSE NO CONFLICT
  // ====================

  $.fn.collapse.noConflict = function () {
    $.fn.collapse = old;
    return this;
  };

  // COLLAPSE DATA-API
  // =================

  $(document).on('click.bs.collapse.data-api', '[data-toggle="collapse"]', function (e) {
    var $this = $(this);
    if (!$this.attr('data-target')) e.preventDefault();
    var $target = getTargetFromTrigger($this);
    var data = $target.data('bs.collapse');
    var option = data ? 'toggle' : $this.data();
    Plugin.call($target, option);
  });
}(jQuery);

/* ========================================================================
 * Bootstrap: dropdown.js v3.3.6
 * http://getbootstrap.com/javascript/#dropdowns
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // DROPDOWN CLASS DEFINITION
  // =========================
  var backdrop = '.dropdown-backdrop';
  var toggle = '[data-toggle="dropdown"]';
  var Dropdown = function Dropdown(element) {
    $(element).on('click.bs.dropdown', this.toggle);
  };
  Dropdown.VERSION = '3.3.6';
  function getParent($this) {
    var selector = $this.attr('data-target');
    if (!selector) {
      selector = $this.attr('href');
      selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, ''); // strip for ie7
    }

    var $parent = selector && $(selector);
    return $parent && $parent.length ? $parent : $this.parent();
  }
  function clearMenus(e) {
    if (e && e.which === 3) return;
    $(backdrop).remove();
    $(toggle).each(function () {
      var $this = $(this);
      var $parent = getParent($this);
      var relatedTarget = {
        relatedTarget: this
      };
      if (!$parent.hasClass('open')) return;
      if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return;
      $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget));
      if (e.isDefaultPrevented()) return;
      $this.attr('aria-expanded', 'false');
      $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget));
    });
  }
  Dropdown.prototype.toggle = function (e) {
    var $this = $(this);
    if ($this.is('.disabled, :disabled')) return;
    var $parent = getParent($this);
    var isActive = $parent.hasClass('open');
    clearMenus();
    if (!isActive) {
      if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
        // if mobile we use a backdrop because click events don't delegate
        $(document.createElement('div')).addClass('dropdown-backdrop').insertAfter($(this)).on('click', clearMenus);
      }
      var relatedTarget = {
        relatedTarget: this
      };
      $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget));
      if (e.isDefaultPrevented()) return;
      $this.trigger('focus').attr('aria-expanded', 'true');
      $parent.toggleClass('open').trigger($.Event('shown.bs.dropdown', relatedTarget));
    }
    return false;
  };
  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return;
    var $this = $(this);
    e.preventDefault();
    e.stopPropagation();
    if ($this.is('.disabled, :disabled')) return;
    var $parent = getParent($this);
    var isActive = $parent.hasClass('open');
    if (!isActive && e.which != 27 || isActive && e.which == 27) {
      if (e.which == 27) $parent.find(toggle).trigger('focus');
      return $this.trigger('click');
    }
    var desc = ' li:not(.disabled):visible a';
    var $items = $parent.find('.dropdown-menu' + desc);
    if (!$items.length) return;
    var index = $items.index(e.target);
    if (e.which == 38 && index > 0) index--; // up
    if (e.which == 40 && index < $items.length - 1) index++; // down
    if (!~index) index = 0;
    $items.eq(index).trigger('focus');
  };

  // DROPDOWN PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.dropdown');
      if (!data) $this.data('bs.dropdown', data = new Dropdown(this));
      if (typeof option == 'string') data[option].call($this);
    });
  }
  var old = $.fn.dropdown;
  $.fn.dropdown = Plugin;
  $.fn.dropdown.Constructor = Dropdown;

  // DROPDOWN NO CONFLICT
  // ====================

  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old;
    return this;
  };

  // APPLY TO STANDARD DROPDOWN ELEMENTS
  // ===================================

  $(document).on('click.bs.dropdown.data-api', clearMenus).on('click.bs.dropdown.data-api', '.dropdown form', function (e) {
    e.stopPropagation();
  }).on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle).on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown).on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown);
}(jQuery);

/* ========================================================================
 * Bootstrap: modal.js v3.3.6
 * http://getbootstrap.com/javascript/#modals
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // MODAL CLASS DEFINITION
  // ======================
  var Modal = function Modal(element, options) {
    this.options = options;
    this.$body = $(document.body);
    this.$element = $(element);
    this.$dialog = this.$element.find('.modal-dialog');
    this.$backdrop = null;
    this.isShown = null;
    this.originalBodyPad = null;
    this.scrollbarWidth = 0;
    this.ignoreBackdropClick = false;
    if (this.options.remote) {
      this.$element.find('.modal-content').load(this.options.remote, $.proxy(function () {
        this.$element.trigger('loaded.bs.modal');
      }, this));
    }
  };
  Modal.VERSION = '3.3.6';
  Modal.TRANSITION_DURATION = 300;
  Modal.BACKDROP_TRANSITION_DURATION = 150;
  Modal.DEFAULTS = {
    backdrop: true,
    keyboard: true,
    show: true
  };
  Modal.prototype.toggle = function (_relatedTarget) {
    return this.isShown ? this.hide() : this.show(_relatedTarget);
  };
  Modal.prototype.show = function (_relatedTarget) {
    var that = this;
    var e = $.Event('show.bs.modal', {
      relatedTarget: _relatedTarget
    });
    this.$element.trigger(e);
    if (this.isShown || e.isDefaultPrevented()) return;
    this.isShown = true;
    this.checkScrollbar();
    this.setScrollbar();
    this.$body.addClass('modal-open');
    this.escape();
    this.resize();
    this.$element.on('click.dismiss.bs.modal', '[data-dismiss="modal"]', $.proxy(this.hide, this));
    this.$dialog.on('mousedown.dismiss.bs.modal', function () {
      that.$element.one('mouseup.dismiss.bs.modal', function (e) {
        if ($(e.target).is(that.$element)) that.ignoreBackdropClick = true;
      });
    });
    this.backdrop(function () {
      var transition = $.support.transition && that.$element.hasClass('fade');
      if (!that.$element.parent().length) {
        that.$element.appendTo(that.$body); // don't move modals dom position
      }

      that.$element.show().scrollTop(0);
      that.adjustDialog();
      if (transition) {
        that.$element[0].offsetWidth; // force reflow
      }

      that.$element.addClass('in');
      that.enforceFocus();
      var e = $.Event('shown.bs.modal', {
        relatedTarget: _relatedTarget
      });
      transition ? that.$dialog // wait for modal to slide in
      .one('bsTransitionEnd', function () {
        that.$element.trigger('focus').trigger(e);
      }).emulateTransitionEnd(Modal.TRANSITION_DURATION) : that.$element.trigger('focus').trigger(e);
    });
  };
  Modal.prototype.hide = function (e) {
    if (e) e.preventDefault();
    e = $.Event('hide.bs.modal');
    this.$element.trigger(e);
    if (!this.isShown || e.isDefaultPrevented()) return;
    this.isShown = false;
    this.escape();
    this.resize();
    $(document).off('focusin.bs.modal');
    this.$element.removeClass('in').off('click.dismiss.bs.modal').off('mouseup.dismiss.bs.modal');
    this.$dialog.off('mousedown.dismiss.bs.modal');
    $.support.transition && this.$element.hasClass('fade') ? this.$element.one('bsTransitionEnd', $.proxy(this.hideModal, this)).emulateTransitionEnd(Modal.TRANSITION_DURATION) : this.hideModal();
  };
  Modal.prototype.enforceFocus = function () {
    $(document).off('focusin.bs.modal') // guard against infinite focus loop
    .on('focusin.bs.modal', $.proxy(function (e) {
      if (this.$element[0] !== e.target && !this.$element.has(e.target).length) {
        this.$element.trigger('focus');
      }
    }, this));
  };
  Modal.prototype.escape = function () {
    if (this.isShown && this.options.keyboard) {
      this.$element.on('keydown.dismiss.bs.modal', $.proxy(function (e) {
        e.which == 27 && this.hide();
      }, this));
    } else if (!this.isShown) {
      this.$element.off('keydown.dismiss.bs.modal');
    }
  };
  Modal.prototype.resize = function () {
    if (this.isShown) {
      $(window).on('resize.bs.modal', $.proxy(this.handleUpdate, this));
    } else {
      $(window).off('resize.bs.modal');
    }
  };
  Modal.prototype.hideModal = function () {
    var that = this;
    this.$element.hide();
    this.backdrop(function () {
      that.$body.removeClass('modal-open');
      that.resetAdjustments();
      that.resetScrollbar();
      that.$element.trigger('hidden.bs.modal');
    });
  };
  Modal.prototype.removeBackdrop = function () {
    this.$backdrop && this.$backdrop.remove();
    this.$backdrop = null;
  };
  Modal.prototype.backdrop = function (callback) {
    var that = this;
    var animate = this.$element.hasClass('fade') ? 'fade' : '';
    if (this.isShown && this.options.backdrop) {
      var doAnimate = $.support.transition && animate;
      this.$backdrop = $(document.createElement('div')).addClass('modal-backdrop ' + animate).appendTo(this.$body);
      this.$element.on('click.dismiss.bs.modal', $.proxy(function (e) {
        if (this.ignoreBackdropClick) {
          this.ignoreBackdropClick = false;
          return;
        }
        if (e.target !== e.currentTarget) return;
        this.options.backdrop == 'static' ? this.$element[0].focus() : this.hide();
      }, this));
      if (doAnimate) this.$backdrop[0].offsetWidth; // force reflow

      this.$backdrop.addClass('in');
      if (!callback) return;
      doAnimate ? this.$backdrop.one('bsTransitionEnd', callback).emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) : callback();
    } else if (!this.isShown && this.$backdrop) {
      this.$backdrop.removeClass('in');
      var callbackRemove = function callbackRemove() {
        that.removeBackdrop();
        callback && callback();
      };
      $.support.transition && this.$element.hasClass('fade') ? this.$backdrop.one('bsTransitionEnd', callbackRemove).emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) : callbackRemove();
    } else if (callback) {
      callback();
    }
  };

  // these following methods are used to handle overflowing modals

  Modal.prototype.handleUpdate = function () {
    this.adjustDialog();
  };
  Modal.prototype.adjustDialog = function () {
    var modalIsOverflowing = this.$element[0].scrollHeight > document.documentElement.clientHeight;
    this.$element.css({
      paddingLeft: !this.bodyIsOverflowing && modalIsOverflowing ? this.scrollbarWidth : '',
      paddingRight: this.bodyIsOverflowing && !modalIsOverflowing ? this.scrollbarWidth : ''
    });
  };
  Modal.prototype.resetAdjustments = function () {
    this.$element.css({
      paddingLeft: '',
      paddingRight: ''
    });
  };
  Modal.prototype.checkScrollbar = function () {
    var fullWindowWidth = window.innerWidth;
    if (!fullWindowWidth) {
      // workaround for missing window.innerWidth in IE8
      var documentElementRect = document.documentElement.getBoundingClientRect();
      fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left);
    }
    this.bodyIsOverflowing = document.body.clientWidth < fullWindowWidth;
    this.scrollbarWidth = this.measureScrollbar();
  };
  Modal.prototype.setScrollbar = function () {
    var bodyPad = parseInt(this.$body.css('padding-right') || 0, 10);
    this.originalBodyPad = document.body.style.paddingRight || '';
    if (this.bodyIsOverflowing) this.$body.css('padding-right', bodyPad + this.scrollbarWidth);
  };
  Modal.prototype.resetScrollbar = function () {
    this.$body.css('padding-right', this.originalBodyPad);
  };
  Modal.prototype.measureScrollbar = function () {
    // thx walsh
    var scrollDiv = document.createElement('div');
    scrollDiv.className = 'modal-scrollbar-measure';
    this.$body.append(scrollDiv);
    var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
    this.$body[0].removeChild(scrollDiv);
    return scrollbarWidth;
  };

  // MODAL PLUGIN DEFINITION
  // =======================

  function Plugin(option, _relatedTarget) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.modal');
      var options = $.extend({}, Modal.DEFAULTS, $this.data(), _typeof(option) == 'object' && option);
      if (!data) $this.data('bs.modal', data = new Modal(this, options));
      if (typeof option == 'string') data[option](_relatedTarget);else if (options.show) data.show(_relatedTarget);
    });
  }
  var old = $.fn.modal;
  $.fn.modal = Plugin;
  $.fn.modal.Constructor = Modal;

  // MODAL NO CONFLICT
  // =================

  $.fn.modal.noConflict = function () {
    $.fn.modal = old;
    return this;
  };

  // MODAL DATA-API
  // ==============

  $(document).on('click.bs.modal.data-api', '[data-toggle="modal"]', function (e) {
    var $this = $(this);
    var href = $this.attr('href');
    var $target = $($this.attr('data-target') || href && href.replace(/.*(?=#[^\s]+$)/, '')); // strip for ie7
    var option = $target.data('bs.modal') ? 'toggle' : $.extend({
      remote: !/#/.test(href) && href
    }, $target.data(), $this.data());
    if ($this.is('a')) e.preventDefault();
    $target.one('show.bs.modal', function (showEvent) {
      if (showEvent.isDefaultPrevented()) return; // only register focus restorer if modal will actually get shown
      $target.one('hidden.bs.modal', function () {
        $this.is(':visible') && $this.trigger('focus');
      });
    });
    Plugin.call($target, option, this);
  });
}(jQuery);

/* ========================================================================
 * Bootstrap: tooltip.js v3.3.6
 * http://getbootstrap.com/javascript/#tooltip
 * Inspired by the original jQuery.tipsy by Jason Frame
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // TOOLTIP PUBLIC CLASS DEFINITION
  // ===============================
  var Tooltip = function Tooltip(element, options) {
    this.type = null;
    this.options = null;
    this.enabled = null;
    this.timeout = null;
    this.hoverState = null;
    this.$element = null;
    this.inState = null;
    this.init('tooltip', element, options);
  };
  Tooltip.VERSION = '3.3.6';
  Tooltip.TRANSITION_DURATION = 150;
  Tooltip.DEFAULTS = {
    animation: true,
    placement: 'top',
    selector: false,
    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
    trigger: 'hover focus',
    title: '',
    delay: 0,
    html: false,
    container: false,
    viewport: {
      selector: 'body',
      padding: 0
    }
  };
  Tooltip.prototype.init = function (type, element, options) {
    this.enabled = true;
    this.type = type;
    this.$element = $(element);
    this.options = this.getOptions(options);
    this.$viewport = this.options.viewport && $($.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport);
    this.inState = {
      click: false,
      hover: false,
      focus: false
    };
    if (this.$element[0] instanceof document.constructor && !this.options.selector) {
      throw new Error('`selector` option must be specified when initializing ' + this.type + ' on the window.document object!');
    }
    var triggers = this.options.trigger.split(' ');
    for (var i = triggers.length; i--;) {
      var trigger = triggers[i];
      if (trigger == 'click') {
        this.$element.on('click.' + this.type, this.options.selector, $.proxy(this.toggle, this));
      } else if (trigger != 'manual') {
        var eventIn = trigger == 'hover' ? 'mouseenter' : 'focusin';
        var eventOut = trigger == 'hover' ? 'mouseleave' : 'focusout';
        this.$element.on(eventIn + '.' + this.type, this.options.selector, $.proxy(this.enter, this));
        this.$element.on(eventOut + '.' + this.type, this.options.selector, $.proxy(this.leave, this));
      }
    }
    this.options.selector ? this._options = $.extend({}, this.options, {
      trigger: 'manual',
      selector: ''
    }) : this.fixTitle();
  };
  Tooltip.prototype.getDefaults = function () {
    return Tooltip.DEFAULTS;
  };
  Tooltip.prototype.getOptions = function (options) {
    options = $.extend({}, this.getDefaults(), this.$element.data(), options);
    if (options.delay && typeof options.delay == 'number') {
      options.delay = {
        show: options.delay,
        hide: options.delay
      };
    }
    return options;
  };
  Tooltip.prototype.getDelegateOptions = function () {
    var options = {};
    var defaults = this.getDefaults();
    this._options && $.each(this._options, function (key, value) {
      if (defaults[key] != value) options[key] = value;
    });
    return options;
  };
  Tooltip.prototype.enter = function (obj) {
    var self = obj instanceof this.constructor ? obj : $(obj.currentTarget).data('bs.' + this.type);
    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions());
      $(obj.currentTarget).data('bs.' + this.type, self);
    }
    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusin' ? 'focus' : 'hover'] = true;
    }
    if (self.tip().hasClass('in') || self.hoverState == 'in') {
      self.hoverState = 'in';
      return;
    }
    clearTimeout(self.timeout);
    self.hoverState = 'in';
    if (!self.options.delay || !self.options.delay.show) return self.show();
    self.timeout = setTimeout(function () {
      if (self.hoverState == 'in') self.show();
    }, self.options.delay.show);
  };
  Tooltip.prototype.isInStateTrue = function () {
    for (var key in this.inState) {
      if (this.inState[key]) return true;
    }
    return false;
  };
  Tooltip.prototype.leave = function (obj) {
    var self = obj instanceof this.constructor ? obj : $(obj.currentTarget).data('bs.' + this.type);
    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions());
      $(obj.currentTarget).data('bs.' + this.type, self);
    }
    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusout' ? 'focus' : 'hover'] = false;
    }
    if (self.isInStateTrue()) return;
    clearTimeout(self.timeout);
    self.hoverState = 'out';
    if (!self.options.delay || !self.options.delay.hide) return self.hide();
    self.timeout = setTimeout(function () {
      if (self.hoverState == 'out') self.hide();
    }, self.options.delay.hide);
  };
  Tooltip.prototype.show = function () {
    var e = $.Event('show.bs.' + this.type);
    if (this.hasContent() && this.enabled) {
      this.$element.trigger(e);
      var inDom = $.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
      if (e.isDefaultPrevented() || !inDom) return;
      var that = this;
      var $tip = this.tip();
      var tipId = this.getUID(this.type);
      this.setContent();
      $tip.attr('id', tipId);
      this.$element.attr('aria-describedby', tipId);
      if (this.options.animation) $tip.addClass('fade');
      var placement = typeof this.options.placement == 'function' ? this.options.placement.call(this, $tip[0], this.$element[0]) : this.options.placement;
      var autoToken = /\s?auto?\s?/i;
      var autoPlace = autoToken.test(placement);
      if (autoPlace) placement = placement.replace(autoToken, '') || 'top';
      $tip.detach().css({
        top: 0,
        left: 0,
        display: 'block'
      }).addClass(placement).data('bs.' + this.type, this);
      this.options.container ? $tip.appendTo(this.options.container) : $tip.insertAfter(this.$element);
      this.$element.trigger('inserted.bs.' + this.type);
      var pos = this.getPosition();
      var actualWidth = $tip[0].offsetWidth;
      var actualHeight = $tip[0].offsetHeight;
      if (autoPlace) {
        var orgPlacement = placement;
        var viewportDim = this.getPosition(this.$viewport);
        placement = placement == 'bottom' && pos.bottom + actualHeight > viewportDim.bottom ? 'top' : placement == 'top' && pos.top - actualHeight < viewportDim.top ? 'bottom' : placement == 'right' && pos.right + actualWidth > viewportDim.width ? 'left' : placement == 'left' && pos.left - actualWidth < viewportDim.left ? 'right' : placement;
        $tip.removeClass(orgPlacement).addClass(placement);
      }
      var calculatedOffset = this.getCalculatedOffset(placement, pos, actualWidth, actualHeight);
      this.applyPlacement(calculatedOffset, placement);
      var complete = function complete() {
        var prevHoverState = that.hoverState;
        that.$element.trigger('shown.bs.' + that.type);
        that.hoverState = null;
        if (prevHoverState == 'out') that.leave(that);
      };
      $.support.transition && this.$tip.hasClass('fade') ? $tip.one('bsTransitionEnd', complete).emulateTransitionEnd(Tooltip.TRANSITION_DURATION) : complete();
    }
  };
  Tooltip.prototype.applyPlacement = function (offset, placement) {
    var $tip = this.tip();
    var width = $tip[0].offsetWidth;
    var height = $tip[0].offsetHeight;

    // manually read margins because getBoundingClientRect includes difference
    var marginTop = parseInt($tip.css('margin-top'), 10);
    var marginLeft = parseInt($tip.css('margin-left'), 10);

    // we must check for NaN for ie 8/9
    if (isNaN(marginTop)) marginTop = 0;
    if (isNaN(marginLeft)) marginLeft = 0;
    offset.top += marginTop;
    offset.left += marginLeft;

    // $.fn.offset doesn't round pixel values
    // so we use setOffset directly with our own function B-0
    $.offset.setOffset($tip[0], $.extend({
      using: function using(props) {
        $tip.css({
          top: Math.round(props.top),
          left: Math.round(props.left)
        });
      }
    }, offset), 0);
    $tip.addClass('in');

    // check to see if placing tip in new offset caused the tip to resize itself
    var actualWidth = $tip[0].offsetWidth;
    var actualHeight = $tip[0].offsetHeight;
    if (placement == 'top' && actualHeight != height) {
      offset.top = offset.top + height - actualHeight;
    }
    var delta = this.getViewportAdjustedDelta(placement, offset, actualWidth, actualHeight);
    if (delta.left) offset.left += delta.left;else offset.top += delta.top;
    var isVertical = /top|bottom/.test(placement);
    var arrowDelta = isVertical ? delta.left * 2 - width + actualWidth : delta.top * 2 - height + actualHeight;
    var arrowOffsetPosition = isVertical ? 'offsetWidth' : 'offsetHeight';
    $tip.offset(offset);
    this.replaceArrow(arrowDelta, $tip[0][arrowOffsetPosition], isVertical);
  };
  Tooltip.prototype.replaceArrow = function (delta, dimension, isVertical) {
    this.arrow().css(isVertical ? 'left' : 'top', 50 * (1 - delta / dimension) + '%').css(isVertical ? 'top' : 'left', '');
  };
  Tooltip.prototype.setContent = function () {
    var $tip = this.tip();
    var title = this.getTitle();
    $tip.find('.tooltip-inner')[this.options.html ? 'html' : 'text'](title);
    $tip.removeClass('fade in top bottom left right');
  };
  Tooltip.prototype.hide = function (callback) {
    var that = this;
    var $tip = $(this.$tip);
    var e = $.Event('hide.bs.' + this.type);
    function complete() {
      if (that.hoverState != 'in') $tip.detach();
      that.$element.removeAttr('aria-describedby').trigger('hidden.bs.' + that.type);
      callback && callback();
    }
    this.$element.trigger(e);
    if (e.isDefaultPrevented()) return;
    $tip.removeClass('in');
    $.support.transition && $tip.hasClass('fade') ? $tip.one('bsTransitionEnd', complete).emulateTransitionEnd(Tooltip.TRANSITION_DURATION) : complete();
    this.hoverState = null;
    return this;
  };
  Tooltip.prototype.fixTitle = function () {
    var $e = this.$element;
    if ($e.attr('title') || typeof $e.attr('data-original-title') != 'string') {
      $e.attr('data-original-title', $e.attr('title') || '').attr('title', '');
    }
  };
  Tooltip.prototype.hasContent = function () {
    return this.getTitle();
  };
  Tooltip.prototype.getPosition = function ($element) {
    $element = $element || this.$element;
    var el = $element[0];
    var isBody = el.tagName == 'BODY';
    var elRect = el.getBoundingClientRect();
    if (elRect.width == null) {
      // width and height are missing in IE8, so compute them manually; see https://github.com/twbs/bootstrap/issues/14093
      elRect = $.extend({}, elRect, {
        width: elRect.right - elRect.left,
        height: elRect.bottom - elRect.top
      });
    }
    var elOffset = isBody ? {
      top: 0,
      left: 0
    } : $element.offset();
    var scroll = {
      scroll: isBody ? document.documentElement.scrollTop || document.body.scrollTop : $element.scrollTop()
    };
    var outerDims = isBody ? {
      width: $(window).width(),
      height: $(window).height()
    } : null;
    return $.extend({}, elRect, scroll, outerDims, elOffset);
  };
  Tooltip.prototype.getCalculatedOffset = function (placement, pos, actualWidth, actualHeight) {
    return placement == 'bottom' ? {
      top: pos.top + pos.height,
      left: pos.left + pos.width / 2 - actualWidth / 2
    } : placement == 'top' ? {
      top: pos.top - actualHeight,
      left: pos.left + pos.width / 2 - actualWidth / 2
    } : placement == 'left' ? {
      top: pos.top + pos.height / 2 - actualHeight / 2,
      left: pos.left - actualWidth
    } : /* placement == 'right' */{
      top: pos.top + pos.height / 2 - actualHeight / 2,
      left: pos.left + pos.width
    };
  };
  Tooltip.prototype.getViewportAdjustedDelta = function (placement, pos, actualWidth, actualHeight) {
    var delta = {
      top: 0,
      left: 0
    };
    if (!this.$viewport) return delta;
    var viewportPadding = this.options.viewport && this.options.viewport.padding || 0;
    var viewportDimensions = this.getPosition(this.$viewport);
    if (/right|left/.test(placement)) {
      var topEdgeOffset = pos.top - viewportPadding - viewportDimensions.scroll;
      var bottomEdgeOffset = pos.top + viewportPadding - viewportDimensions.scroll + actualHeight;
      if (topEdgeOffset < viewportDimensions.top) {
        // top overflow
        delta.top = viewportDimensions.top - topEdgeOffset;
      } else if (bottomEdgeOffset > viewportDimensions.top + viewportDimensions.height) {
        // bottom overflow
        delta.top = viewportDimensions.top + viewportDimensions.height - bottomEdgeOffset;
      }
    } else {
      var leftEdgeOffset = pos.left - viewportPadding;
      var rightEdgeOffset = pos.left + viewportPadding + actualWidth;
      if (leftEdgeOffset < viewportDimensions.left) {
        // left overflow
        delta.left = viewportDimensions.left - leftEdgeOffset;
      } else if (rightEdgeOffset > viewportDimensions.right) {
        // right overflow
        delta.left = viewportDimensions.left + viewportDimensions.width - rightEdgeOffset;
      }
    }
    return delta;
  };
  Tooltip.prototype.getTitle = function () {
    var title;
    var $e = this.$element;
    var o = this.options;
    title = $e.attr('data-original-title') || (typeof o.title == 'function' ? o.title.call($e[0]) : o.title);
    return title;
  };
  Tooltip.prototype.getUID = function (prefix) {
    do prefix += ~~(Math.random() * 1000000); while (document.getElementById(prefix));
    return prefix;
  };
  Tooltip.prototype.tip = function () {
    if (!this.$tip) {
      this.$tip = $(this.options.template);
      if (this.$tip.length != 1) {
        throw new Error(this.type + ' `template` option must consist of exactly 1 top-level element!');
      }
    }
    return this.$tip;
  };
  Tooltip.prototype.arrow = function () {
    return this.$arrow = this.$arrow || this.tip().find('.tooltip-arrow');
  };
  Tooltip.prototype.enable = function () {
    this.enabled = true;
  };
  Tooltip.prototype.disable = function () {
    this.enabled = false;
  };
  Tooltip.prototype.toggleEnabled = function () {
    this.enabled = !this.enabled;
  };
  Tooltip.prototype.toggle = function (e) {
    var self = this;
    if (e) {
      self = $(e.currentTarget).data('bs.' + this.type);
      if (!self) {
        self = new this.constructor(e.currentTarget, this.getDelegateOptions());
        $(e.currentTarget).data('bs.' + this.type, self);
      }
    }
    if (e) {
      self.inState.click = !self.inState.click;
      if (self.isInStateTrue()) self.enter(self);else self.leave(self);
    } else {
      self.tip().hasClass('in') ? self.leave(self) : self.enter(self);
    }
  };
  Tooltip.prototype.destroy = function () {
    var that = this;
    clearTimeout(this.timeout);
    this.hide(function () {
      that.$element.off('.' + that.type).removeData('bs.' + that.type);
      if (that.$tip) {
        that.$tip.detach();
      }
      that.$tip = null;
      that.$arrow = null;
      that.$viewport = null;
    });
  };

  // TOOLTIP PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.tooltip');
      var options = _typeof(option) == 'object' && option;
      if (!data && /destroy|hide/.test(option)) return;
      if (!data) $this.data('bs.tooltip', data = new Tooltip(this, options));
      if (typeof option == 'string') data[option]();
    });
  }
  var old = $.fn.tooltip;
  $.fn.tooltip = Plugin;
  $.fn.tooltip.Constructor = Tooltip;

  // TOOLTIP NO CONFLICT
  // ===================

  $.fn.tooltip.noConflict = function () {
    $.fn.tooltip = old;
    return this;
  };
}(jQuery);

/* ========================================================================
 * Bootstrap: popover.js v3.3.6
 * http://getbootstrap.com/javascript/#popovers
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // POPOVER PUBLIC CLASS DEFINITION
  // ===============================
  var Popover = function Popover(element, options) {
    this.init('popover', element, options);
  };
  if (!$.fn.tooltip) throw new Error('Popover requires tooltip.js');
  Popover.VERSION = '3.3.6';
  Popover.DEFAULTS = $.extend({}, $.fn.tooltip.Constructor.DEFAULTS, {
    placement: 'right',
    trigger: 'click',
    content: '',
    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
  });

  // NOTE: POPOVER EXTENDS tooltip.js
  // ================================

  Popover.prototype = $.extend({}, $.fn.tooltip.Constructor.prototype);
  Popover.prototype.constructor = Popover;
  Popover.prototype.getDefaults = function () {
    return Popover.DEFAULTS;
  };
  Popover.prototype.setContent = function () {
    var $tip = this.tip();
    var title = this.getTitle();
    var content = this.getContent();
    $tip.find('.popover-title')[this.options.html ? 'html' : 'text'](title);
    $tip.find('.popover-content').children().detach().end()[
    // we use append for html objects to maintain js events
    this.options.html ? typeof content == 'string' ? 'html' : 'append' : 'text'](content);
    $tip.removeClass('fade top bottom left right in');

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!$tip.find('.popover-title').html()) $tip.find('.popover-title').hide();
  };
  Popover.prototype.hasContent = function () {
    return this.getTitle() || this.getContent();
  };
  Popover.prototype.getContent = function () {
    var $e = this.$element;
    var o = this.options;
    return $e.attr('data-content') || (typeof o.content == 'function' ? o.content.call($e[0]) : o.content);
  };
  Popover.prototype.arrow = function () {
    return this.$arrow = this.$arrow || this.tip().find('.arrow');
  };

  // POPOVER PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.popover');
      var options = _typeof(option) == 'object' && option;
      if (!data && /destroy|hide/.test(option)) return;
      if (!data) $this.data('bs.popover', data = new Popover(this, options));
      if (typeof option == 'string') data[option]();
    });
  }
  var old = $.fn.popover;
  $.fn.popover = Plugin;
  $.fn.popover.Constructor = Popover;

  // POPOVER NO CONFLICT
  // ===================

  $.fn.popover.noConflict = function () {
    $.fn.popover = old;
    return this;
  };
}(jQuery);

/* ========================================================================
 * Bootstrap: scrollspy.js v3.3.6
 * http://getbootstrap.com/javascript/#scrollspy
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // SCROLLSPY CLASS DEFINITION
  // ==========================
  function ScrollSpy(element, options) {
    this.$body = $(document.body);
    this.$scrollElement = $(element).is(document.body) ? $(window) : $(element);
    this.options = $.extend({}, ScrollSpy.DEFAULTS, options);
    this.selector = (this.options.target || '') + ' .nav li > a';
    this.offsets = [];
    this.targets = [];
    this.activeTarget = null;
    this.scrollHeight = 0;
    this.$scrollElement.on('scroll.bs.scrollspy', $.proxy(this.process, this));
    this.refresh();
    this.process();
  }
  ScrollSpy.VERSION = '3.3.6';
  ScrollSpy.DEFAULTS = {
    offset: 10
  };
  ScrollSpy.prototype.getScrollHeight = function () {
    return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight);
  };
  ScrollSpy.prototype.refresh = function () {
    var that = this;
    var offsetMethod = 'offset';
    var offsetBase = 0;
    this.offsets = [];
    this.targets = [];
    this.scrollHeight = this.getScrollHeight();
    if (!$.isWindow(this.$scrollElement[0])) {
      offsetMethod = 'position';
      offsetBase = this.$scrollElement.scrollTop();
    }
    this.$body.find(this.selector).map(function () {
      var $el = $(this);
      var href = $el.data('target') || $el.attr('href');
      var $href = /^#./.test(href) && $(href);
      return $href && $href.length && $href.is(':visible') && [[$href[offsetMethod]().top + offsetBase, href]] || null;
    }).sort(function (a, b) {
      return a[0] - b[0];
    }).each(function () {
      that.offsets.push(this[0]);
      that.targets.push(this[1]);
    });
  };
  ScrollSpy.prototype.process = function () {
    var scrollTop = this.$scrollElement.scrollTop() + this.options.offset;
    var scrollHeight = this.getScrollHeight();
    var maxScroll = this.options.offset + scrollHeight - this.$scrollElement.height();
    var offsets = this.offsets;
    var targets = this.targets;
    var activeTarget = this.activeTarget;
    var i;
    if (this.scrollHeight != scrollHeight) {
      this.refresh();
    }
    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets[targets.length - 1]) && this.activate(i);
    }
    if (activeTarget && scrollTop < offsets[0]) {
      this.activeTarget = null;
      return this.clear();
    }
    for (i = offsets.length; i--;) {
      activeTarget != targets[i] && scrollTop >= offsets[i] && (offsets[i + 1] === undefined || scrollTop < offsets[i + 1]) && this.activate(targets[i]);
    }
  };
  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target;
    this.clear();
    var selector = this.selector + '[data-target="' + target + '"],' + this.selector + '[href="' + target + '"]';
    var active = $(selector).parents('li').addClass('active');
    if (active.parent('.dropdown-menu').length) {
      active = active.closest('li.dropdown').addClass('active');
    }
    active.trigger('activate.bs.scrollspy');
  };
  ScrollSpy.prototype.clear = function () {
    $(this.selector).parentsUntil(this.options.target, '.active').removeClass('active');
  };

  // SCROLLSPY PLUGIN DEFINITION
  // ===========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.scrollspy');
      var options = _typeof(option) == 'object' && option;
      if (!data) $this.data('bs.scrollspy', data = new ScrollSpy(this, options));
      if (typeof option == 'string') data[option]();
    });
  }
  var old = $.fn.scrollspy;
  $.fn.scrollspy = Plugin;
  $.fn.scrollspy.Constructor = ScrollSpy;

  // SCROLLSPY NO CONFLICT
  // =====================

  $.fn.scrollspy.noConflict = function () {
    $.fn.scrollspy = old;
    return this;
  };

  // SCROLLSPY DATA-API
  // ==================

  $(window).on('load.bs.scrollspy.data-api', function () {
    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this);
      Plugin.call($spy, $spy.data());
    });
  });
}(jQuery);

/* ========================================================================
 * Bootstrap: tab.js v3.3.6
 * http://getbootstrap.com/javascript/#tabs
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // TAB CLASS DEFINITION
  // ====================
  var Tab = function Tab(element) {
    // jscs:disable requireDollarBeforejQueryAssignment
    this.element = $(element);
    // jscs:enable requireDollarBeforejQueryAssignment
  };

  Tab.VERSION = '3.3.6';
  Tab.TRANSITION_DURATION = 150;
  Tab.prototype.show = function () {
    var $this = this.element;
    var $ul = $this.closest('ul:not(.dropdown-menu)');
    var selector = $this.data('target');
    if (!selector) {
      selector = $this.attr('href');
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, ''); // strip for ie7
    }

    if ($this.parent('li').hasClass('active')) return;
    var $previous = $ul.find('.active:last a');
    var hideEvent = $.Event('hide.bs.tab', {
      relatedTarget: $this[0]
    });
    var showEvent = $.Event('show.bs.tab', {
      relatedTarget: $previous[0]
    });
    $previous.trigger(hideEvent);
    $this.trigger(showEvent);
    if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return;
    var $target = $(selector);
    this.activate($this.closest('li'), $ul);
    this.activate($target, $target.parent(), function () {
      $previous.trigger({
        type: 'hidden.bs.tab',
        relatedTarget: $this[0]
      });
      $this.trigger({
        type: 'shown.bs.tab',
        relatedTarget: $previous[0]
      });
    });
  };
  Tab.prototype.activate = function (element, container, callback) {
    var $active = container.find('> .active');
    var transition = callback && $.support.transition && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length);
    function next() {
      $active.removeClass('active').find('> .dropdown-menu > .active').removeClass('active').end().find('[data-toggle="tab"]').attr('aria-expanded', false);
      element.addClass('active').find('[data-toggle="tab"]').attr('aria-expanded', true);
      if (transition) {
        element[0].offsetWidth; // reflow for transition
        element.addClass('in');
      } else {
        element.removeClass('fade');
      }
      if (element.parent('.dropdown-menu').length) {
        element.closest('li.dropdown').addClass('active').end().find('[data-toggle="tab"]').attr('aria-expanded', true);
      }
      callback && callback();
    }
    $active.length && transition ? $active.one('bsTransitionEnd', next).emulateTransitionEnd(Tab.TRANSITION_DURATION) : next();
    $active.removeClass('in');
  };

  // TAB PLUGIN DEFINITION
  // =====================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.tab');
      if (!data) $this.data('bs.tab', data = new Tab(this));
      if (typeof option == 'string') data[option]();
    });
  }
  var old = $.fn.tab;
  $.fn.tab = Plugin;
  $.fn.tab.Constructor = Tab;

  // TAB NO CONFLICT
  // ===============

  $.fn.tab.noConflict = function () {
    $.fn.tab = old;
    return this;
  };

  // TAB DATA-API
  // ============

  var clickHandler = function clickHandler(e) {
    e.preventDefault();
    Plugin.call($(this), 'show');
  };
  $(document).on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler).on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler);
}(jQuery);

/* ========================================================================
 * Bootstrap: affix.js v3.3.6
 * http://getbootstrap.com/javascript/#affix
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

+function ($) {
  'use strict';

  // AFFIX CLASS DEFINITION
  // ======================
  var Affix = function Affix(element, options) {
    this.options = $.extend({}, Affix.DEFAULTS, options);
    this.$target = $(this.options.target).on('scroll.bs.affix.data-api', $.proxy(this.checkPosition, this)).on('click.bs.affix.data-api', $.proxy(this.checkPositionWithEventLoop, this));
    this.$element = $(element);
    this.affixed = null;
    this.unpin = null;
    this.pinnedOffset = null;
    this.checkPosition();
  };
  Affix.VERSION = '3.3.6';
  Affix.RESET = 'affix affix-top affix-bottom';
  Affix.DEFAULTS = {
    offset: 0,
    target: window
  };
  Affix.prototype.getState = function (scrollHeight, height, offsetTop, offsetBottom) {
    var scrollTop = this.$target.scrollTop();
    var position = this.$element.offset();
    var targetHeight = this.$target.height();
    if (offsetTop != null && this.affixed == 'top') return scrollTop < offsetTop ? 'top' : false;
    if (this.affixed == 'bottom') {
      if (offsetTop != null) return scrollTop + this.unpin <= position.top ? false : 'bottom';
      return scrollTop + targetHeight <= scrollHeight - offsetBottom ? false : 'bottom';
    }
    var initializing = this.affixed == null;
    var colliderTop = initializing ? scrollTop : position.top;
    var colliderHeight = initializing ? targetHeight : height;
    if (offsetTop != null && scrollTop <= offsetTop) return 'top';
    if (offsetBottom != null && colliderTop + colliderHeight >= scrollHeight - offsetBottom) return 'bottom';
    return false;
  };
  Affix.prototype.getPinnedOffset = function () {
    if (this.pinnedOffset) return this.pinnedOffset;
    this.$element.removeClass(Affix.RESET).addClass('affix');
    var scrollTop = this.$target.scrollTop();
    var position = this.$element.offset();
    return this.pinnedOffset = position.top - scrollTop;
  };
  Affix.prototype.checkPositionWithEventLoop = function () {
    setTimeout($.proxy(this.checkPosition, this), 1);
  };
  Affix.prototype.checkPosition = function () {
    if (!this.$element.is(':visible')) return;
    var height = this.$element.height();
    var offset = this.options.offset;
    var offsetTop = offset.top;
    var offsetBottom = offset.bottom;
    var scrollHeight = Math.max($(document).height(), $(document.body).height());
    if (_typeof(offset) != 'object') offsetBottom = offsetTop = offset;
    if (typeof offsetTop == 'function') offsetTop = offset.top(this.$element);
    if (typeof offsetBottom == 'function') offsetBottom = offset.bottom(this.$element);
    var affix = this.getState(scrollHeight, height, offsetTop, offsetBottom);
    if (this.affixed != affix) {
      if (this.unpin != null) this.$element.css('top', '');
      var affixType = 'affix' + (affix ? '-' + affix : '');
      var e = $.Event(affixType + '.bs.affix');
      this.$element.trigger(e);
      if (e.isDefaultPrevented()) return;
      this.affixed = affix;
      this.unpin = affix == 'bottom' ? this.getPinnedOffset() : null;
      this.$element.removeClass(Affix.RESET).addClass(affixType).trigger(affixType.replace('affix', 'affixed') + '.bs.affix');
    }
    if (affix == 'bottom') {
      this.$element.offset({
        top: scrollHeight - height - offsetBottom
      });
    }
  };

  // AFFIX PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('bs.affix');
      var options = _typeof(option) == 'object' && option;
      if (!data) $this.data('bs.affix', data = new Affix(this, options));
      if (typeof option == 'string') data[option]();
    });
  }
  var old = $.fn.affix;
  $.fn.affix = Plugin;
  $.fn.affix.Constructor = Affix;

  // AFFIX NO CONFLICT
  // =================

  $.fn.affix.noConflict = function () {
    $.fn.affix = old;
    return this;
  };

  // AFFIX DATA-API
  // ==============

  $(window).on('load', function () {
    $('[data-spy="affix"]').each(function () {
      var $spy = $(this);
      var data = $spy.data();
      data.offset = data.offset || {};
      if (data.offsetBottom != null) data.offset.bottom = data.offsetBottom;
      if (data.offsetTop != null) data.offset.top = data.offsetTop;
      Plugin.call($spy, data);
    });
  });
}(jQuery);

/***/ }),

/***/ "./assets/js/jquery.tableToExcel.js":
/*!******************************************!*\
  !*** ./assets/js/jquery.tableToExcel.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
(function ($) {
  $.fn.tblToExcel = function () {
    var elm = true;
    if (this.length > 1) {
      $('body').append('<div id="tbl-tnv-back" style="position: fixed; z-index: 1;padding-top: 100px;left: 0;top: 0;width: 100%;height: 100%;overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">' + '<div id="tbl-tnv-excel" style="background-color: #fefefe;margin: auto;' + 'padding: 20px; ' + 'overflow: auto;' + 'border: 1px solid #888;' + 'width: 80%;" >  </div>' + '</div>');
      elm = false;
    }
    $('#tbl-tnv-back').click(function () {
      $(this).remove();
      $('#tbl-tnv-anch').remove();
    });
    var tableToExcel = function () {
      var i = 0;
      var uri = 'data:application/vnd.ms-excel;base64,',
        template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><meta charset="utf-8"/><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
        base64 = function base64(s) {
          return window.btoa(unescape(encodeURIComponent(s)));
        },
        format = function format(s, c) {
          return s.replace(/{(\w+)}/g, function (m, p) {
            return c[p];
          });
        };
      return function (table, name) {
        if (!table.nodeType) table;
        var ctx = {
          worksheet: name || 'Worksheet',
          table: table.innerHTML
        };
        if (elm) {
          window.location.href = uri + base64(format(template, ctx));
        } else {
          i++;
          var xl = uri + base64(format(template, ctx));
          $('#tbl-tnv-excel').append('<a id="tbl-tnv-anch" style="background-color: #4CAF50;border: none;\n' + 'color: white;' + 'padding: 15px 32px;' + 'text-align: center;' + 'text-decoration: none;' + 'display: inline-block; margin: 1px;' + 'font-size: 16px;" href=' + xl + ' download>Download Excel-' + i + ' </a>');
        }
      };
    }();
    return this.each(function () {
      tableToExcel(this, 'W3C Example Table');
    });
  };
})(jQuery);

/***/ }),

/***/ "./assets/js/select2.min.js":
/*!**********************************!*\
  !*** ./assets/js/select2.min.js ***!
  \**********************************/
/***/ ((module, exports, __webpack_require__) => {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;__webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
__webpack_require__(/*! core-js/modules/es.array.splice.js */ "./node_modules/core-js/modules/es.array.splice.js");
__webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
__webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
__webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
__webpack_require__(/*! core-js/modules/es.string.split.js */ "./node_modules/core-js/modules/es.string.split.js");
__webpack_require__(/*! core-js/modules/es.string.trim.js */ "./node_modules/core-js/modules/es.string.trim.js");
__webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
__webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
__webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
__webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
__webpack_require__(/*! core-js/modules/es.array.sort.js */ "./node_modules/core-js/modules/es.array.sort.js");
__webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
__webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
__webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
__webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
__webpack_require__(/*! core-js/modules/es.string.match.js */ "./node_modules/core-js/modules/es.string.match.js");
__webpack_require__(/*! core-js/modules/es.array.some.js */ "./node_modules/core-js/modules/es.array.some.js");
__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
__webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
__webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
__webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
__webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
/*! Select2 4.1.0-rc.0 | https://github.com/select2/select2/blob/master/LICENSE.md */
!function (n) {
   true ? !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (n),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : 0;
}(function (t) {
  var e,
    n,
    s,
    p,
    r,
    _o,
    h,
    f,
    g,
    m,
    y,
    v,
    i,
    a,
    _,
    s = ((u = t && t.fn && t.fn.select2 && t.fn.select2.amd ? t.fn.select2.amd : u) && u.requirejs || (u ? n = u : u = {}, g = {}, m = {}, y = {}, v = {}, i = Object.prototype.hasOwnProperty, a = [].slice, _ = /\.js$/, h = function h(e, t) {
      var n,
        s,
        i = c(e),
        r = i[0],
        t = t[1];
      return e = i[1], r && (n = x(r = l(r, t))), r ? e = n && n.normalize ? n.normalize(e, (s = t, function (e) {
        return l(e, s);
      })) : l(e, t) : (r = (i = c(e = l(e, t)))[0], e = i[1], r && (n = x(r))), {
        f: r ? r + "!" + e : e,
        n: e,
        pr: r,
        p: n
      };
    }, f = {
      require: function require(e) {
        return w(e);
      },
      exports: function exports(e) {
        var t = g[e];
        return void 0 !== t ? t : g[e] = {};
      },
      module: function module(e) {
        return {
          id: e,
          uri: "",
          exports: g[e],
          config: (t = e, function () {
            return y && y.config && y.config[t] || {};
          })
        };
        var t;
      }
    }, r = function r(e, t, n, s) {
      var i,
        r,
        o,
        a,
        l,
        c = [],
        u = _typeof(n),
        d = A(s = s || e);
      if ("undefined" == u || "function" == u) {
        for (t = !t.length && n.length ? ["require", "exports", "module"] : t, a = 0; a < t.length; a += 1) if ("require" === (r = (o = h(t[a], d)).f)) c[a] = f.require(e);else if ("exports" === r) c[a] = f.exports(e), l = !0;else if ("module" === r) i = c[a] = f.module(e);else if (b(g, r) || b(m, r) || b(v, r)) c[a] = x(r);else {
          if (!o.p) throw new Error(e + " missing " + r);
          o.p.load(o.n, w(s, !0), function (t) {
            return function (e) {
              g[t] = e;
            };
          }(r), {}), c[a] = g[r];
        }
        u = n ? n.apply(g[e], c) : void 0, e && (i && i.exports !== p && i.exports !== g[e] ? g[e] = i.exports : u === p && l || (g[e] = u));
      } else e && (g[e] = n);
    }, e = n = _o = function o(e, t, n, s, i) {
      if ("string" == typeof e) return f[e] ? f[e](t) : x(h(e, A(t)).f);
      if (!e.splice) {
        if ((y = e).deps && _o(y.deps, y.callback), !t) return;
        t.splice ? (e = t, t = n, n = null) : e = p;
      }
      return t = t || function () {}, "function" == typeof n && (n = s, s = i), s ? r(p, e, t, n) : setTimeout(function () {
        r(p, e, t, n);
      }, 4), _o;
    }, _o.config = function (e) {
      return _o(e);
    }, e._defined = g, (s = function s(e, t, n) {
      if ("string" != typeof e) throw new Error("See almond README: incorrect module build, no module name");
      t.splice || (n = t, t = []), b(g, e) || b(m, e) || (m[e] = [e, t, n]);
    }).amd = {
      jQuery: !0
    }, u.requirejs = e, u.require = n, u.define = s), u.define("almond", function () {}), u.define("jquery", [], function () {
      var e = t || $;
      return null == e && console && console.error && console.error("Select2: An instance of jQuery or a jQuery-compatible library was not found. Make sure that you are including jQuery before Select2 on your web page."), e;
    }), u.define("select2/utils", ["jquery"], function (r) {
      var s = {};
      function c(e) {
        var t,
          n = e.prototype,
          s = [];
        for (t in n) "function" == typeof n[t] && "constructor" !== t && s.push(t);
        return s;
      }
      s.Extend = function (e, t) {
        var n,
          s = {}.hasOwnProperty;
        function i() {
          this.constructor = e;
        }
        for (n in t) s.call(t, n) && (e[n] = t[n]);
        return i.prototype = t.prototype, e.prototype = new i(), e.__super__ = t.prototype, e;
      }, s.Decorate = function (s, i) {
        var e = c(i),
          t = c(s);
        function r() {
          var e = Array.prototype.unshift,
            t = i.prototype.constructor.length,
            n = s.prototype.constructor;
          0 < t && (e.call(arguments, s.prototype.constructor), n = i.prototype.constructor), n.apply(this, arguments);
        }
        i.displayName = s.displayName, r.prototype = new function () {
          this.constructor = r;
        }();
        for (var n = 0; n < t.length; n++) {
          var o = t[n];
          r.prototype[o] = s.prototype[o];
        }
        for (var a = 0; a < e.length; a++) {
          var l = e[a];
          r.prototype[l] = function (e) {
            var t = function t() {};
            e in r.prototype && (t = r.prototype[e]);
            var n = i.prototype[e];
            return function () {
              return Array.prototype.unshift.call(arguments, t), n.apply(this, arguments);
            };
          }(l);
        }
        return r;
      };
      function e() {
        this.listeners = {};
      }
      e.prototype.on = function (e, t) {
        this.listeners = this.listeners || {}, e in this.listeners ? this.listeners[e].push(t) : this.listeners[e] = [t];
      }, e.prototype.trigger = function (e) {
        var t = Array.prototype.slice,
          n = t.call(arguments, 1);
        this.listeners = this.listeners || {}, 0 === (n = null == n ? [] : n).length && n.push({}), (n[0]._type = e) in this.listeners && this.invoke(this.listeners[e], t.call(arguments, 1)), "*" in this.listeners && this.invoke(this.listeners["*"], arguments);
      }, e.prototype.invoke = function (e, t) {
        for (var n = 0, s = e.length; n < s; n++) e[n].apply(this, t);
      }, s.Observable = e, s.generateChars = function (e) {
        for (var t = "", n = 0; n < e; n++) t += Math.floor(36 * Math.random()).toString(36);
        return t;
      }, s.bind = function (e, t) {
        return function () {
          e.apply(t, arguments);
        };
      }, s._convertData = function (e) {
        for (var t in e) {
          var n = t.split("-"),
            s = e;
          if (1 !== n.length) {
            for (var i = 0; i < n.length; i++) {
              var r = n[i];
              (r = r.substring(0, 1).toLowerCase() + r.substring(1)) in s || (s[r] = {}), i == n.length - 1 && (s[r] = e[t]), s = s[r];
            }
            delete e[t];
          }
        }
        return e;
      }, s.hasScroll = function (e, t) {
        var n = r(t),
          s = t.style.overflowX,
          i = t.style.overflowY;
        return (s !== i || "hidden" !== i && "visible" !== i) && ("scroll" === s || "scroll" === i || n.innerHeight() < t.scrollHeight || n.innerWidth() < t.scrollWidth);
      }, s.escapeMarkup = function (e) {
        var t = {
          "\\": "&#92;",
          "&": "&amp;",
          "<": "&lt;",
          ">": "&gt;",
          '"': "&quot;",
          "'": "&#39;",
          "/": "&#47;"
        };
        return "string" != typeof e ? e : String(e).replace(/[&<>"'\/\\]/g, function (e) {
          return t[e];
        });
      }, s.__cache = {};
      var n = 0;
      return s.GetUniqueElementId = function (e) {
        var t = e.getAttribute("data-select2-id");
        return null != t || (t = e.id ? "select2-data-" + e.id : "select2-data-" + (++n).toString() + "-" + s.generateChars(4), e.setAttribute("data-select2-id", t)), t;
      }, s.StoreData = function (e, t, n) {
        e = s.GetUniqueElementId(e);
        s.__cache[e] || (s.__cache[e] = {}), s.__cache[e][t] = n;
      }, s.GetData = function (e, t) {
        var n = s.GetUniqueElementId(e);
        return t ? s.__cache[n] && null != s.__cache[n][t] ? s.__cache[n][t] : r(e).data(t) : s.__cache[n];
      }, s.RemoveData = function (e) {
        var t = s.GetUniqueElementId(e);
        null != s.__cache[t] && delete s.__cache[t], e.removeAttribute("data-select2-id");
      }, s.copyNonInternalCssClasses = function (e, t) {
        var n = (n = e.getAttribute("class").trim().split(/\s+/)).filter(function (e) {
            return 0 === e.indexOf("select2-");
          }),
          t = (t = t.getAttribute("class").trim().split(/\s+/)).filter(function (e) {
            return 0 !== e.indexOf("select2-");
          }),
          t = n.concat(t);
        e.setAttribute("class", t.join(" "));
      }, s;
    }), u.define("select2/results", ["jquery", "./utils"], function (d, p) {
      function s(e, t, n) {
        this.$element = e, this.data = n, this.options = t, s.__super__.constructor.call(this);
      }
      return p.Extend(s, p.Observable), s.prototype.render = function () {
        var e = d('<ul class="select2-results__options" role="listbox"></ul>');
        return this.options.get("multiple") && e.attr("aria-multiselectable", "true"), this.$results = e;
      }, s.prototype.clear = function () {
        this.$results.empty();
      }, s.prototype.displayMessage = function (e) {
        var t = this.options.get("escapeMarkup");
        this.clear(), this.hideLoading();
        var n = d('<li role="alert" aria-live="assertive" class="select2-results__option"></li>'),
          s = this.options.get("translations").get(e.message);
        n.append(t(s(e.args))), n[0].className += " select2-results__message", this.$results.append(n);
      }, s.prototype.hideMessages = function () {
        this.$results.find(".select2-results__message").remove();
      }, s.prototype.append = function (e) {
        this.hideLoading();
        var t = [];
        if (null != e.results && 0 !== e.results.length) {
          e.results = this.sort(e.results);
          for (var n = 0; n < e.results.length; n++) {
            var s = e.results[n],
              s = this.option(s);
            t.push(s);
          }
          this.$results.append(t);
        } else 0 === this.$results.children().length && this.trigger("results:message", {
          message: "noResults"
        });
      }, s.prototype.position = function (e, t) {
        t.find(".select2-results").append(e);
      }, s.prototype.sort = function (e) {
        return this.options.get("sorter")(e);
      }, s.prototype.highlightFirstItem = function () {
        var e = this.$results.find(".select2-results__option--selectable"),
          t = e.filter(".select2-results__option--selected");
        (0 < t.length ? t : e).first().trigger("mouseenter"), this.ensureHighlightVisible();
      }, s.prototype.setClasses = function () {
        var t = this;
        this.data.current(function (e) {
          var s = e.map(function (e) {
            return e.id.toString();
          });
          t.$results.find(".select2-results__option--selectable").each(function () {
            var e = d(this),
              t = p.GetData(this, "data"),
              n = "" + t.id;
            null != t.element && t.element.selected || null == t.element && -1 < s.indexOf(n) ? (this.classList.add("select2-results__option--selected"), e.attr("aria-selected", "true")) : (this.classList.remove("select2-results__option--selected"), e.attr("aria-selected", "false"));
          });
        });
      }, s.prototype.showLoading = function (e) {
        this.hideLoading();
        e = {
          disabled: !0,
          loading: !0,
          text: this.options.get("translations").get("searching")(e)
        }, e = this.option(e);
        e.className += " loading-results", this.$results.prepend(e);
      }, s.prototype.hideLoading = function () {
        this.$results.find(".loading-results").remove();
      }, s.prototype.option = function (e) {
        var t = document.createElement("li");
        t.classList.add("select2-results__option"), t.classList.add("select2-results__option--selectable");
        var n,
          s = {
            role: "option"
          },
          i = window.Element.prototype.matches || window.Element.prototype.msMatchesSelector || window.Element.prototype.webkitMatchesSelector;
        for (n in (null != e.element && i.call(e.element, ":disabled") || null == e.element && e.disabled) && (s["aria-disabled"] = "true", t.classList.remove("select2-results__option--selectable"), t.classList.add("select2-results__option--disabled")), null == e.id && t.classList.remove("select2-results__option--selectable"), null != e._resultId && (t.id = e._resultId), e.title && (t.title = e.title), e.children && (s.role = "group", s["aria-label"] = e.text, t.classList.remove("select2-results__option--selectable"), t.classList.add("select2-results__option--group")), s) {
          var r = s[n];
          t.setAttribute(n, r);
        }
        if (e.children) {
          var o = d(t),
            a = document.createElement("strong");
          a.className = "select2-results__group", this.template(e, a);
          for (var l = [], c = 0; c < e.children.length; c++) {
            var u = e.children[c],
              u = this.option(u);
            l.push(u);
          }
          i = d("<ul></ul>", {
            "class": "select2-results__options select2-results__options--nested",
            role: "none"
          });
          i.append(l), o.append(a), o.append(i);
        } else this.template(e, t);
        return p.StoreData(t, "data", e), t;
      }, s.prototype.bind = function (t, e) {
        var i = this,
          n = t.id + "-results";
        this.$results.attr("id", n), t.on("results:all", function (e) {
          i.clear(), i.append(e.data), t.isOpen() && (i.setClasses(), i.highlightFirstItem());
        }), t.on("results:append", function (e) {
          i.append(e.data), t.isOpen() && i.setClasses();
        }), t.on("query", function (e) {
          i.hideMessages(), i.showLoading(e);
        }), t.on("select", function () {
          t.isOpen() && (i.setClasses(), i.options.get("scrollAfterSelect") && i.highlightFirstItem());
        }), t.on("unselect", function () {
          t.isOpen() && (i.setClasses(), i.options.get("scrollAfterSelect") && i.highlightFirstItem());
        }), t.on("open", function () {
          i.$results.attr("aria-expanded", "true"), i.$results.attr("aria-hidden", "false"), i.setClasses(), i.ensureHighlightVisible();
        }), t.on("close", function () {
          i.$results.attr("aria-expanded", "false"), i.$results.attr("aria-hidden", "true"), i.$results.removeAttr("aria-activedescendant");
        }), t.on("results:toggle", function () {
          var e = i.getHighlightedResults();
          0 !== e.length && e.trigger("mouseup");
        }), t.on("results:select", function () {
          var e,
            t = i.getHighlightedResults();
          0 !== t.length && (e = p.GetData(t[0], "data"), t.hasClass("select2-results__option--selected") ? i.trigger("close", {}) : i.trigger("select", {
            data: e
          }));
        }), t.on("results:previous", function () {
          var e,
            t = i.getHighlightedResults(),
            n = i.$results.find(".select2-results__option--selectable"),
            s = n.index(t);
          s <= 0 || (e = s - 1, 0 === t.length && (e = 0), (s = n.eq(e)).trigger("mouseenter"), t = i.$results.offset().top, n = s.offset().top, s = i.$results.scrollTop() + (n - t), 0 === e ? i.$results.scrollTop(0) : n - t < 0 && i.$results.scrollTop(s));
        }), t.on("results:next", function () {
          var e,
            t = i.getHighlightedResults(),
            n = i.$results.find(".select2-results__option--selectable"),
            s = n.index(t) + 1;
          s >= n.length || ((e = n.eq(s)).trigger("mouseenter"), t = i.$results.offset().top + i.$results.outerHeight(!1), n = e.offset().top + e.outerHeight(!1), e = i.$results.scrollTop() + n - t, 0 === s ? i.$results.scrollTop(0) : t < n && i.$results.scrollTop(e));
        }), t.on("results:focus", function (e) {
          e.element[0].classList.add("select2-results__option--highlighted"), e.element[0].setAttribute("aria-selected", "true");
        }), t.on("results:message", function (e) {
          i.displayMessage(e);
        }), d.fn.mousewheel && this.$results.on("mousewheel", function (e) {
          var t = i.$results.scrollTop(),
            n = i.$results.get(0).scrollHeight - t + e.deltaY,
            t = 0 < e.deltaY && t - e.deltaY <= 0,
            n = e.deltaY < 0 && n <= i.$results.height();
          t ? (i.$results.scrollTop(0), e.preventDefault(), e.stopPropagation()) : n && (i.$results.scrollTop(i.$results.get(0).scrollHeight - i.$results.height()), e.preventDefault(), e.stopPropagation());
        }), this.$results.on("mouseup", ".select2-results__option--selectable", function (e) {
          var t = d(this),
            n = p.GetData(this, "data");
          t.hasClass("select2-results__option--selected") ? i.options.get("multiple") ? i.trigger("unselect", {
            originalEvent: e,
            data: n
          }) : i.trigger("close", {}) : i.trigger("select", {
            originalEvent: e,
            data: n
          });
        }), this.$results.on("mouseenter", ".select2-results__option--selectable", function (e) {
          var t = p.GetData(this, "data");
          i.getHighlightedResults().removeClass("select2-results__option--highlighted").attr("aria-selected", "false"), i.trigger("results:focus", {
            data: t,
            element: d(this)
          });
        });
      }, s.prototype.getHighlightedResults = function () {
        return this.$results.find(".select2-results__option--highlighted");
      }, s.prototype.destroy = function () {
        this.$results.remove();
      }, s.prototype.ensureHighlightVisible = function () {
        var e,
          t,
          n,
          s,
          i = this.getHighlightedResults();
        0 !== i.length && (e = this.$results.find(".select2-results__option--selectable").index(i), s = this.$results.offset().top, t = i.offset().top, n = this.$results.scrollTop() + (t - s), s = t - s, n -= 2 * i.outerHeight(!1), e <= 2 ? this.$results.scrollTop(0) : (s > this.$results.outerHeight() || s < 0) && this.$results.scrollTop(n));
      }, s.prototype.template = function (e, t) {
        var n = this.options.get("templateResult"),
          s = this.options.get("escapeMarkup"),
          e = n(e, t);
        null == e ? t.style.display = "none" : "string" == typeof e ? t.innerHTML = s(e) : d(t).append(e);
      }, s;
    }), u.define("select2/keys", [], function () {
      return {
        BACKSPACE: 8,
        TAB: 9,
        ENTER: 13,
        SHIFT: 16,
        CTRL: 17,
        ALT: 18,
        ESC: 27,
        SPACE: 32,
        PAGE_UP: 33,
        PAGE_DOWN: 34,
        END: 35,
        HOME: 36,
        LEFT: 37,
        UP: 38,
        RIGHT: 39,
        DOWN: 40,
        DELETE: 46
      };
    }), u.define("select2/selection/base", ["jquery", "../utils", "../keys"], function (n, s, i) {
      function r(e, t) {
        this.$element = e, this.options = t, r.__super__.constructor.call(this);
      }
      return s.Extend(r, s.Observable), r.prototype.render = function () {
        var e = n('<span class="select2-selection" role="combobox"  aria-haspopup="true" aria-expanded="false"></span>');
        return this._tabindex = 0, null != s.GetData(this.$element[0], "old-tabindex") ? this._tabindex = s.GetData(this.$element[0], "old-tabindex") : null != this.$element.attr("tabindex") && (this._tabindex = this.$element.attr("tabindex")), e.attr("title", this.$element.attr("title")), e.attr("tabindex", this._tabindex), e.attr("aria-disabled", "false"), this.$selection = e;
      }, r.prototype.bind = function (e, t) {
        var n = this,
          s = e.id + "-results";
        this.container = e, this.$selection.on("focus", function (e) {
          n.trigger("focus", e);
        }), this.$selection.on("blur", function (e) {
          n._handleBlur(e);
        }), this.$selection.on("keydown", function (e) {
          n.trigger("keypress", e), e.which === i.SPACE && e.preventDefault();
        }), e.on("results:focus", function (e) {
          n.$selection.attr("aria-activedescendant", e.data._resultId);
        }), e.on("selection:update", function (e) {
          n.update(e.data);
        }), e.on("open", function () {
          n.$selection.attr("aria-expanded", "true"), n.$selection.attr("aria-owns", s), n._attachCloseHandler(e);
        }), e.on("close", function () {
          n.$selection.attr("aria-expanded", "false"), n.$selection.removeAttr("aria-activedescendant"), n.$selection.removeAttr("aria-owns"), n.$selection.trigger("focus"), n._detachCloseHandler(e);
        }), e.on("enable", function () {
          n.$selection.attr("tabindex", n._tabindex), n.$selection.attr("aria-disabled", "false");
        }), e.on("disable", function () {
          n.$selection.attr("tabindex", "-1"), n.$selection.attr("aria-disabled", "true");
        });
      }, r.prototype._handleBlur = function (e) {
        var t = this;
        window.setTimeout(function () {
          document.activeElement == t.$selection[0] || n.contains(t.$selection[0], document.activeElement) || t.trigger("blur", e);
        }, 1);
      }, r.prototype._attachCloseHandler = function (e) {
        n(document.body).on("mousedown.select2." + e.id, function (e) {
          var t = n(e.target).closest(".select2");
          n(".select2.select2-container--open").each(function () {
            this != t[0] && s.GetData(this, "element").select2("close");
          });
        });
      }, r.prototype._detachCloseHandler = function (e) {
        n(document.body).off("mousedown.select2." + e.id);
      }, r.prototype.position = function (e, t) {
        t.find(".selection").append(e);
      }, r.prototype.destroy = function () {
        this._detachCloseHandler(this.container);
      }, r.prototype.update = function (e) {
        throw new Error("The `update` method must be defined in child classes.");
      }, r.prototype.isEnabled = function () {
        return !this.isDisabled();
      }, r.prototype.isDisabled = function () {
        return this.options.get("disabled");
      }, r;
    }), u.define("select2/selection/single", ["jquery", "./base", "../utils", "../keys"], function (e, t, n, s) {
      function i() {
        i.__super__.constructor.apply(this, arguments);
      }
      return n.Extend(i, t), i.prototype.render = function () {
        var e = i.__super__.render.call(this);
        return e[0].classList.add("select2-selection--single"), e.html('<span class="select2-selection__rendered"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>'), e;
      }, i.prototype.bind = function (t, e) {
        var n = this;
        i.__super__.bind.apply(this, arguments);
        var s = t.id + "-container";
        this.$selection.find(".select2-selection__rendered").attr("id", s).attr("role", "textbox").attr("aria-readonly", "true"), this.$selection.attr("aria-labelledby", s), this.$selection.attr("aria-controls", s), this.$selection.on("mousedown", function (e) {
          1 === e.which && n.trigger("toggle", {
            originalEvent: e
          });
        }), this.$selection.on("focus", function (e) {}), this.$selection.on("blur", function (e) {}), t.on("focus", function (e) {
          t.isOpen() || n.$selection.trigger("focus");
        });
      }, i.prototype.clear = function () {
        var e = this.$selection.find(".select2-selection__rendered");
        e.empty(), e.removeAttr("title");
      }, i.prototype.display = function (e, t) {
        var n = this.options.get("templateSelection");
        return this.options.get("escapeMarkup")(n(e, t));
      }, i.prototype.selectionContainer = function () {
        return e("<span></span>");
      }, i.prototype.update = function (e) {
        var t, n;
        0 !== e.length ? (n = e[0], t = this.$selection.find(".select2-selection__rendered"), e = this.display(n, t), t.empty().append(e), (n = n.title || n.text) ? t.attr("title", n) : t.removeAttr("title")) : this.clear();
      }, i;
    }), u.define("select2/selection/multiple", ["jquery", "./base", "../utils"], function (i, e, c) {
      function r(e, t) {
        r.__super__.constructor.apply(this, arguments);
      }
      return c.Extend(r, e), r.prototype.render = function () {
        var e = r.__super__.render.call(this);
        return e[0].classList.add("select2-selection--multiple"), e.html('<ul class="select2-selection__rendered"></ul>'), e;
      }, r.prototype.bind = function (e, t) {
        var n = this;
        r.__super__.bind.apply(this, arguments);
        var s = e.id + "-container";
        this.$selection.find(".select2-selection__rendered").attr("id", s), this.$selection.on("click", function (e) {
          n.trigger("toggle", {
            originalEvent: e
          });
        }), this.$selection.on("click", ".select2-selection__choice__remove", function (e) {
          var t;
          n.isDisabled() || (t = i(this).parent(), t = c.GetData(t[0], "data"), n.trigger("unselect", {
            originalEvent: e,
            data: t
          }));
        }), this.$selection.on("keydown", ".select2-selection__choice__remove", function (e) {
          n.isDisabled() || e.stopPropagation();
        });
      }, r.prototype.clear = function () {
        var e = this.$selection.find(".select2-selection__rendered");
        e.empty(), e.removeAttr("title");
      }, r.prototype.display = function (e, t) {
        var n = this.options.get("templateSelection");
        return this.options.get("escapeMarkup")(n(e, t));
      }, r.prototype.selectionContainer = function () {
        return i('<li class="select2-selection__choice"><button type="button" class="select2-selection__choice__remove" tabindex="-1"><span aria-hidden="true">&times;</span></button><span class="select2-selection__choice__display"></span></li>');
      }, r.prototype.update = function (e) {
        if (this.clear(), 0 !== e.length) {
          for (var t = [], n = this.$selection.find(".select2-selection__rendered").attr("id") + "-choice-", s = 0; s < e.length; s++) {
            var i = e[s],
              r = this.selectionContainer(),
              o = this.display(i, r),
              a = n + c.generateChars(4) + "-";
            i.id ? a += i.id : a += c.generateChars(4), r.find(".select2-selection__choice__display").append(o).attr("id", a);
            var l = i.title || i.text;
            l && r.attr("title", l);
            o = this.options.get("translations").get("removeItem"), l = r.find(".select2-selection__choice__remove");
            l.attr("title", o()), l.attr("aria-label", o()), l.attr("aria-describedby", a), c.StoreData(r[0], "data", i), t.push(r);
          }
          this.$selection.find(".select2-selection__rendered").append(t);
        }
      }, r;
    }), u.define("select2/selection/placeholder", [], function () {
      function e(e, t, n) {
        this.placeholder = this.normalizePlaceholder(n.get("placeholder")), e.call(this, t, n);
      }
      return e.prototype.normalizePlaceholder = function (e, t) {
        return t = "string" == typeof t ? {
          id: "",
          text: t
        } : t;
      }, e.prototype.createPlaceholder = function (e, t) {
        var n = this.selectionContainer();
        n.html(this.display(t)), n[0].classList.add("select2-selection__placeholder"), n[0].classList.remove("select2-selection__choice");
        t = t.title || t.text || n.text();
        return this.$selection.find(".select2-selection__rendered").attr("title", t), n;
      }, e.prototype.update = function (e, t) {
        var n = 1 == t.length && t[0].id != this.placeholder.id;
        if (1 < t.length || n) return e.call(this, t);
        this.clear();
        t = this.createPlaceholder(this.placeholder);
        this.$selection.find(".select2-selection__rendered").append(t);
      }, e;
    }), u.define("select2/selection/allowClear", ["jquery", "../keys", "../utils"], function (i, s, a) {
      function e() {}
      return e.prototype.bind = function (e, t, n) {
        var s = this;
        e.call(this, t, n), null == this.placeholder && this.options.get("debug") && window.console && console.error && console.error("Select2: The `allowClear` option should be used in combination with the `placeholder` option."), this.$selection.on("mousedown", ".select2-selection__clear", function (e) {
          s._handleClear(e);
        }), t.on("keypress", function (e) {
          s._handleKeyboardClear(e, t);
        });
      }, e.prototype._handleClear = function (e, t) {
        if (!this.isDisabled()) {
          var n = this.$selection.find(".select2-selection__clear");
          if (0 !== n.length) {
            t.stopPropagation();
            var s = a.GetData(n[0], "data"),
              i = this.$element.val();
            this.$element.val(this.placeholder.id);
            var r = {
              data: s
            };
            if (this.trigger("clear", r), r.prevented) this.$element.val(i);else {
              for (var o = 0; o < s.length; o++) if (r = {
                data: s[o]
              }, this.trigger("unselect", r), r.prevented) return void this.$element.val(i);
              this.$element.trigger("input").trigger("change"), this.trigger("toggle", {});
            }
          }
        }
      }, e.prototype._handleKeyboardClear = function (e, t, n) {
        n.isOpen() || t.which != s.DELETE && t.which != s.BACKSPACE || this._handleClear(t);
      }, e.prototype.update = function (e, t) {
        var n, s;
        e.call(this, t), this.$selection.find(".select2-selection__clear").remove(), this.$selection[0].classList.remove("select2-selection--clearable"), 0 < this.$selection.find(".select2-selection__placeholder").length || 0 === t.length || (n = this.$selection.find(".select2-selection__rendered").attr("id"), s = this.options.get("translations").get("removeAllItems"), (e = i('<button type="button" class="select2-selection__clear" tabindex="-1"><span aria-hidden="true">&times;</span></button>')).attr("title", s()), e.attr("aria-label", s()), e.attr("aria-describedby", n), a.StoreData(e[0], "data", t), this.$selection.prepend(e), this.$selection[0].classList.add("select2-selection--clearable"));
      }, e;
    }), u.define("select2/selection/search", ["jquery", "../utils", "../keys"], function (s, a, l) {
      function e(e, t, n) {
        e.call(this, t, n);
      }
      return e.prototype.render = function (e) {
        var t = this.options.get("translations").get("search"),
          n = s('<span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="-1" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" ></textarea></span>');
        this.$searchContainer = n, this.$search = n.find("textarea"), this.$search.prop("autocomplete", this.options.get("autocomplete")), this.$search.attr("aria-label", t());
        e = e.call(this);
        return this._transferTabIndex(), e.append(this.$searchContainer), e;
      }, e.prototype.bind = function (e, t, n) {
        var s = this,
          i = t.id + "-results",
          r = t.id + "-container";
        e.call(this, t, n), s.$search.attr("aria-describedby", r), t.on("open", function () {
          s.$search.attr("aria-controls", i), s.$search.trigger("focus");
        }), t.on("close", function () {
          s.$search.val(""), s.resizeSearch(), s.$search.removeAttr("aria-controls"), s.$search.removeAttr("aria-activedescendant"), s.$search.trigger("focus");
        }), t.on("enable", function () {
          s.$search.prop("disabled", !1), s._transferTabIndex();
        }), t.on("disable", function () {
          s.$search.prop("disabled", !0);
        }), t.on("focus", function (e) {
          s.$search.trigger("focus");
        }), t.on("results:focus", function (e) {
          e.data._resultId ? s.$search.attr("aria-activedescendant", e.data._resultId) : s.$search.removeAttr("aria-activedescendant");
        }), this.$selection.on("focusin", ".select2-search--inline", function (e) {
          s.trigger("focus", e);
        }), this.$selection.on("focusout", ".select2-search--inline", function (e) {
          s._handleBlur(e);
        }), this.$selection.on("keydown", ".select2-search--inline", function (e) {
          var t;
          e.stopPropagation(), s.trigger("keypress", e), s._keyUpPrevented = e.isDefaultPrevented(), e.which !== l.BACKSPACE || "" !== s.$search.val() || 0 < (t = s.$selection.find(".select2-selection__choice").last()).length && (t = a.GetData(t[0], "data"), s.searchRemoveChoice(t), e.preventDefault());
        }), this.$selection.on("click", ".select2-search--inline", function (e) {
          s.$search.val() && e.stopPropagation();
        });
        var t = document.documentMode,
          o = t && t <= 11;
        this.$selection.on("input.searchcheck", ".select2-search--inline", function (e) {
          o ? s.$selection.off("input.search input.searchcheck") : s.$selection.off("keyup.search");
        }), this.$selection.on("keyup.search input.search", ".select2-search--inline", function (e) {
          var t;
          o && "input" === e.type ? s.$selection.off("input.search input.searchcheck") : (t = e.which) != l.SHIFT && t != l.CTRL && t != l.ALT && t != l.TAB && s.handleSearch(e);
        });
      }, e.prototype._transferTabIndex = function (e) {
        this.$search.attr("tabindex", this.$selection.attr("tabindex")), this.$selection.attr("tabindex", "-1");
      }, e.prototype.createPlaceholder = function (e, t) {
        this.$search.attr("placeholder", t.text);
      }, e.prototype.update = function (e, t) {
        var n = this.$search[0] == document.activeElement;
        this.$search.attr("placeholder", ""), e.call(this, t), this.resizeSearch(), n && this.$search.trigger("focus");
      }, e.prototype.handleSearch = function () {
        var e;
        this.resizeSearch(), this._keyUpPrevented || (e = this.$search.val(), this.trigger("query", {
          term: e
        })), this._keyUpPrevented = !1;
      }, e.prototype.searchRemoveChoice = function (e, t) {
        this.trigger("unselect", {
          data: t
        }), this.$search.val(t.text), this.handleSearch();
      }, e.prototype.resizeSearch = function () {
        this.$search.css("width", "25px");
        var e = "100%";
        "" === this.$search.attr("placeholder") && (e = .75 * (this.$search.val().length + 1) + "em"), this.$search.css("width", e);
      }, e;
    }), u.define("select2/selection/selectionCss", ["../utils"], function (n) {
      function e() {}
      return e.prototype.render = function (e) {
        var t = e.call(this),
          e = this.options.get("selectionCssClass") || "";
        return -1 !== e.indexOf(":all:") && (e = e.replace(":all:", ""), n.copyNonInternalCssClasses(t[0], this.$element[0])), t.addClass(e), t;
      }, e;
    }), u.define("select2/selection/eventRelay", ["jquery"], function (o) {
      function e() {}
      return e.prototype.bind = function (e, t, n) {
        var s = this,
          i = ["open", "opening", "close", "closing", "select", "selecting", "unselect", "unselecting", "clear", "clearing"],
          r = ["opening", "closing", "selecting", "unselecting", "clearing"];
        e.call(this, t, n), t.on("*", function (e, t) {
          var n;
          -1 !== i.indexOf(e) && (t = t || {}, n = o.Event("select2:" + e, {
            params: t
          }), s.$element.trigger(n), -1 !== r.indexOf(e) && (t.prevented = n.isDefaultPrevented()));
        });
      }, e;
    }), u.define("select2/translation", ["jquery", "require"], function (t, n) {
      function s(e) {
        this.dict = e || {};
      }
      return s.prototype.all = function () {
        return this.dict;
      }, s.prototype.get = function (e) {
        return this.dict[e];
      }, s.prototype.extend = function (e) {
        this.dict = t.extend({}, e.all(), this.dict);
      }, s._cache = {}, s.loadPath = function (e) {
        var t;
        return e in s._cache || (t = n(e), s._cache[e] = t), new s(s._cache[e]);
      }, s;
    }), u.define("select2/diacritics", [], function () {
      return {
        "Ⓐ": "A",
        "Ａ": "A",
        "À": "A",
        "Á": "A",
        "Â": "A",
        "Ầ": "A",
        "Ấ": "A",
        "Ẫ": "A",
        "Ẩ": "A",
        "Ã": "A",
        "Ā": "A",
        "Ă": "A",
        "Ằ": "A",
        "Ắ": "A",
        "Ẵ": "A",
        "Ẳ": "A",
        "Ȧ": "A",
        "Ǡ": "A",
        "Ä": "A",
        "Ǟ": "A",
        "Ả": "A",
        "Å": "A",
        "Ǻ": "A",
        "Ǎ": "A",
        "Ȁ": "A",
        "Ȃ": "A",
        "Ạ": "A",
        "Ậ": "A",
        "Ặ": "A",
        "Ḁ": "A",
        "Ą": "A",
        "Ⱥ": "A",
        "Ɐ": "A",
        "Ꜳ": "AA",
        "Æ": "AE",
        "Ǽ": "AE",
        "Ǣ": "AE",
        "Ꜵ": "AO",
        "Ꜷ": "AU",
        "Ꜹ": "AV",
        "Ꜻ": "AV",
        "Ꜽ": "AY",
        "Ⓑ": "B",
        "Ｂ": "B",
        "Ḃ": "B",
        "Ḅ": "B",
        "Ḇ": "B",
        "Ƀ": "B",
        "Ƃ": "B",
        "Ɓ": "B",
        "Ⓒ": "C",
        "Ｃ": "C",
        "Ć": "C",
        "Ĉ": "C",
        "Ċ": "C",
        "Č": "C",
        "Ç": "C",
        "Ḉ": "C",
        "Ƈ": "C",
        "Ȼ": "C",
        "Ꜿ": "C",
        "Ⓓ": "D",
        "Ｄ": "D",
        "Ḋ": "D",
        "Ď": "D",
        "Ḍ": "D",
        "Ḑ": "D",
        "Ḓ": "D",
        "Ḏ": "D",
        "Đ": "D",
        "Ƌ": "D",
        "Ɗ": "D",
        "Ɖ": "D",
        "Ꝺ": "D",
        "Ǳ": "DZ",
        "Ǆ": "DZ",
        "ǲ": "Dz",
        "ǅ": "Dz",
        "Ⓔ": "E",
        "Ｅ": "E",
        "È": "E",
        "É": "E",
        "Ê": "E",
        "Ề": "E",
        "Ế": "E",
        "Ễ": "E",
        "Ể": "E",
        "Ẽ": "E",
        "Ē": "E",
        "Ḕ": "E",
        "Ḗ": "E",
        "Ĕ": "E",
        "Ė": "E",
        "Ë": "E",
        "Ẻ": "E",
        "Ě": "E",
        "Ȅ": "E",
        "Ȇ": "E",
        "Ẹ": "E",
        "Ệ": "E",
        "Ȩ": "E",
        "Ḝ": "E",
        "Ę": "E",
        "Ḙ": "E",
        "Ḛ": "E",
        "Ɛ": "E",
        "Ǝ": "E",
        "Ⓕ": "F",
        "Ｆ": "F",
        "Ḟ": "F",
        "Ƒ": "F",
        "Ꝼ": "F",
        "Ⓖ": "G",
        "Ｇ": "G",
        "Ǵ": "G",
        "Ĝ": "G",
        "Ḡ": "G",
        "Ğ": "G",
        "Ġ": "G",
        "Ǧ": "G",
        "Ģ": "G",
        "Ǥ": "G",
        "Ɠ": "G",
        "Ꞡ": "G",
        "Ᵹ": "G",
        "Ꝿ": "G",
        "Ⓗ": "H",
        "Ｈ": "H",
        "Ĥ": "H",
        "Ḣ": "H",
        "Ḧ": "H",
        "Ȟ": "H",
        "Ḥ": "H",
        "Ḩ": "H",
        "Ḫ": "H",
        "Ħ": "H",
        "Ⱨ": "H",
        "Ⱶ": "H",
        "Ɥ": "H",
        "Ⓘ": "I",
        "Ｉ": "I",
        "Ì": "I",
        "Í": "I",
        "Î": "I",
        "Ĩ": "I",
        "Ī": "I",
        "Ĭ": "I",
        "İ": "I",
        "Ï": "I",
        "Ḯ": "I",
        "Ỉ": "I",
        "Ǐ": "I",
        "Ȉ": "I",
        "Ȋ": "I",
        "Ị": "I",
        "Į": "I",
        "Ḭ": "I",
        "Ɨ": "I",
        "Ⓙ": "J",
        "Ｊ": "J",
        "Ĵ": "J",
        "Ɉ": "J",
        "Ⓚ": "K",
        "Ｋ": "K",
        "Ḱ": "K",
        "Ǩ": "K",
        "Ḳ": "K",
        "Ķ": "K",
        "Ḵ": "K",
        "Ƙ": "K",
        "Ⱪ": "K",
        "Ꝁ": "K",
        "Ꝃ": "K",
        "Ꝅ": "K",
        "Ꞣ": "K",
        "Ⓛ": "L",
        "Ｌ": "L",
        "Ŀ": "L",
        "Ĺ": "L",
        "Ľ": "L",
        "Ḷ": "L",
        "Ḹ": "L",
        "Ļ": "L",
        "Ḽ": "L",
        "Ḻ": "L",
        "Ł": "L",
        "Ƚ": "L",
        "Ɫ": "L",
        "Ⱡ": "L",
        "Ꝉ": "L",
        "Ꝇ": "L",
        "Ꞁ": "L",
        "Ǉ": "LJ",
        "ǈ": "Lj",
        "Ⓜ": "M",
        "Ｍ": "M",
        "Ḿ": "M",
        "Ṁ": "M",
        "Ṃ": "M",
        "Ɱ": "M",
        "Ɯ": "M",
        "Ⓝ": "N",
        "Ｎ": "N",
        "Ǹ": "N",
        "Ń": "N",
        "Ñ": "N",
        "Ṅ": "N",
        "Ň": "N",
        "Ṇ": "N",
        "Ņ": "N",
        "Ṋ": "N",
        "Ṉ": "N",
        "Ƞ": "N",
        "Ɲ": "N",
        "Ꞑ": "N",
        "Ꞥ": "N",
        "Ǌ": "NJ",
        "ǋ": "Nj",
        "Ⓞ": "O",
        "Ｏ": "O",
        "Ò": "O",
        "Ó": "O",
        "Ô": "O",
        "Ồ": "O",
        "Ố": "O",
        "Ỗ": "O",
        "Ổ": "O",
        "Õ": "O",
        "Ṍ": "O",
        "Ȭ": "O",
        "Ṏ": "O",
        "Ō": "O",
        "Ṑ": "O",
        "Ṓ": "O",
        "Ŏ": "O",
        "Ȯ": "O",
        "Ȱ": "O",
        "Ö": "O",
        "Ȫ": "O",
        "Ỏ": "O",
        "Ő": "O",
        "Ǒ": "O",
        "Ȍ": "O",
        "Ȏ": "O",
        "Ơ": "O",
        "Ờ": "O",
        "Ớ": "O",
        "Ỡ": "O",
        "Ở": "O",
        "Ợ": "O",
        "Ọ": "O",
        "Ộ": "O",
        "Ǫ": "O",
        "Ǭ": "O",
        "Ø": "O",
        "Ǿ": "O",
        "Ɔ": "O",
        "Ɵ": "O",
        "Ꝋ": "O",
        "Ꝍ": "O",
        "Œ": "OE",
        "Ƣ": "OI",
        "Ꝏ": "OO",
        "Ȣ": "OU",
        "Ⓟ": "P",
        "Ｐ": "P",
        "Ṕ": "P",
        "Ṗ": "P",
        "Ƥ": "P",
        "Ᵽ": "P",
        "Ꝑ": "P",
        "Ꝓ": "P",
        "Ꝕ": "P",
        "Ⓠ": "Q",
        "Ｑ": "Q",
        "Ꝗ": "Q",
        "Ꝙ": "Q",
        "Ɋ": "Q",
        "Ⓡ": "R",
        "Ｒ": "R",
        "Ŕ": "R",
        "Ṙ": "R",
        "Ř": "R",
        "Ȑ": "R",
        "Ȓ": "R",
        "Ṛ": "R",
        "Ṝ": "R",
        "Ŗ": "R",
        "Ṟ": "R",
        "Ɍ": "R",
        "Ɽ": "R",
        "Ꝛ": "R",
        "Ꞧ": "R",
        "Ꞃ": "R",
        "Ⓢ": "S",
        "Ｓ": "S",
        "ẞ": "S",
        "Ś": "S",
        "Ṥ": "S",
        "Ŝ": "S",
        "Ṡ": "S",
        "Š": "S",
        "Ṧ": "S",
        "Ṣ": "S",
        "Ṩ": "S",
        "Ș": "S",
        "Ş": "S",
        "Ȿ": "S",
        "Ꞩ": "S",
        "Ꞅ": "S",
        "Ⓣ": "T",
        "Ｔ": "T",
        "Ṫ": "T",
        "Ť": "T",
        "Ṭ": "T",
        "Ț": "T",
        "Ţ": "T",
        "Ṱ": "T",
        "Ṯ": "T",
        "Ŧ": "T",
        "Ƭ": "T",
        "Ʈ": "T",
        "Ⱦ": "T",
        "Ꞇ": "T",
        "Ꜩ": "TZ",
        "Ⓤ": "U",
        "Ｕ": "U",
        "Ù": "U",
        "Ú": "U",
        "Û": "U",
        "Ũ": "U",
        "Ṹ": "U",
        "Ū": "U",
        "Ṻ": "U",
        "Ŭ": "U",
        "Ü": "U",
        "Ǜ": "U",
        "Ǘ": "U",
        "Ǖ": "U",
        "Ǚ": "U",
        "Ủ": "U",
        "Ů": "U",
        "Ű": "U",
        "Ǔ": "U",
        "Ȕ": "U",
        "Ȗ": "U",
        "Ư": "U",
        "Ừ": "U",
        "Ứ": "U",
        "Ữ": "U",
        "Ử": "U",
        "Ự": "U",
        "Ụ": "U",
        "Ṳ": "U",
        "Ų": "U",
        "Ṷ": "U",
        "Ṵ": "U",
        "Ʉ": "U",
        "Ⓥ": "V",
        "Ｖ": "V",
        "Ṽ": "V",
        "Ṿ": "V",
        "Ʋ": "V",
        "Ꝟ": "V",
        "Ʌ": "V",
        "Ꝡ": "VY",
        "Ⓦ": "W",
        "Ｗ": "W",
        "Ẁ": "W",
        "Ẃ": "W",
        "Ŵ": "W",
        "Ẇ": "W",
        "Ẅ": "W",
        "Ẉ": "W",
        "Ⱳ": "W",
        "Ⓧ": "X",
        "Ｘ": "X",
        "Ẋ": "X",
        "Ẍ": "X",
        "Ⓨ": "Y",
        "Ｙ": "Y",
        "Ỳ": "Y",
        "Ý": "Y",
        "Ŷ": "Y",
        "Ỹ": "Y",
        "Ȳ": "Y",
        "Ẏ": "Y",
        "Ÿ": "Y",
        "Ỷ": "Y",
        "Ỵ": "Y",
        "Ƴ": "Y",
        "Ɏ": "Y",
        "Ỿ": "Y",
        "Ⓩ": "Z",
        "Ｚ": "Z",
        "Ź": "Z",
        "Ẑ": "Z",
        "Ż": "Z",
        "Ž": "Z",
        "Ẓ": "Z",
        "Ẕ": "Z",
        "Ƶ": "Z",
        "Ȥ": "Z",
        "Ɀ": "Z",
        "Ⱬ": "Z",
        "Ꝣ": "Z",
        "ⓐ": "a",
        "ａ": "a",
        "ẚ": "a",
        "à": "a",
        "á": "a",
        "â": "a",
        "ầ": "a",
        "ấ": "a",
        "ẫ": "a",
        "ẩ": "a",
        "ã": "a",
        "ā": "a",
        "ă": "a",
        "ằ": "a",
        "ắ": "a",
        "ẵ": "a",
        "ẳ": "a",
        "ȧ": "a",
        "ǡ": "a",
        "ä": "a",
        "ǟ": "a",
        "ả": "a",
        "å": "a",
        "ǻ": "a",
        "ǎ": "a",
        "ȁ": "a",
        "ȃ": "a",
        "ạ": "a",
        "ậ": "a",
        "ặ": "a",
        "ḁ": "a",
        "ą": "a",
        "ⱥ": "a",
        "ɐ": "a",
        "ꜳ": "aa",
        "æ": "ae",
        "ǽ": "ae",
        "ǣ": "ae",
        "ꜵ": "ao",
        "ꜷ": "au",
        "ꜹ": "av",
        "ꜻ": "av",
        "ꜽ": "ay",
        "ⓑ": "b",
        "ｂ": "b",
        "ḃ": "b",
        "ḅ": "b",
        "ḇ": "b",
        "ƀ": "b",
        "ƃ": "b",
        "ɓ": "b",
        "ⓒ": "c",
        "ｃ": "c",
        "ć": "c",
        "ĉ": "c",
        "ċ": "c",
        "č": "c",
        "ç": "c",
        "ḉ": "c",
        "ƈ": "c",
        "ȼ": "c",
        "ꜿ": "c",
        "ↄ": "c",
        "ⓓ": "d",
        "ｄ": "d",
        "ḋ": "d",
        "ď": "d",
        "ḍ": "d",
        "ḑ": "d",
        "ḓ": "d",
        "ḏ": "d",
        "đ": "d",
        "ƌ": "d",
        "ɖ": "d",
        "ɗ": "d",
        "ꝺ": "d",
        "ǳ": "dz",
        "ǆ": "dz",
        "ⓔ": "e",
        "ｅ": "e",
        "è": "e",
        "é": "e",
        "ê": "e",
        "ề": "e",
        "ế": "e",
        "ễ": "e",
        "ể": "e",
        "ẽ": "e",
        "ē": "e",
        "ḕ": "e",
        "ḗ": "e",
        "ĕ": "e",
        "ė": "e",
        "ë": "e",
        "ẻ": "e",
        "ě": "e",
        "ȅ": "e",
        "ȇ": "e",
        "ẹ": "e",
        "ệ": "e",
        "ȩ": "e",
        "ḝ": "e",
        "ę": "e",
        "ḙ": "e",
        "ḛ": "e",
        "ɇ": "e",
        "ɛ": "e",
        "ǝ": "e",
        "ⓕ": "f",
        "ｆ": "f",
        "ḟ": "f",
        "ƒ": "f",
        "ꝼ": "f",
        "ⓖ": "g",
        "ｇ": "g",
        "ǵ": "g",
        "ĝ": "g",
        "ḡ": "g",
        "ğ": "g",
        "ġ": "g",
        "ǧ": "g",
        "ģ": "g",
        "ǥ": "g",
        "ɠ": "g",
        "ꞡ": "g",
        "ᵹ": "g",
        "ꝿ": "g",
        "ⓗ": "h",
        "ｈ": "h",
        "ĥ": "h",
        "ḣ": "h",
        "ḧ": "h",
        "ȟ": "h",
        "ḥ": "h",
        "ḩ": "h",
        "ḫ": "h",
        "ẖ": "h",
        "ħ": "h",
        "ⱨ": "h",
        "ⱶ": "h",
        "ɥ": "h",
        "ƕ": "hv",
        "ⓘ": "i",
        "ｉ": "i",
        "ì": "i",
        "í": "i",
        "î": "i",
        "ĩ": "i",
        "ī": "i",
        "ĭ": "i",
        "ï": "i",
        "ḯ": "i",
        "ỉ": "i",
        "ǐ": "i",
        "ȉ": "i",
        "ȋ": "i",
        "ị": "i",
        "į": "i",
        "ḭ": "i",
        "ɨ": "i",
        "ı": "i",
        "ⓙ": "j",
        "ｊ": "j",
        "ĵ": "j",
        "ǰ": "j",
        "ɉ": "j",
        "ⓚ": "k",
        "ｋ": "k",
        "ḱ": "k",
        "ǩ": "k",
        "ḳ": "k",
        "ķ": "k",
        "ḵ": "k",
        "ƙ": "k",
        "ⱪ": "k",
        "ꝁ": "k",
        "ꝃ": "k",
        "ꝅ": "k",
        "ꞣ": "k",
        "ⓛ": "l",
        "ｌ": "l",
        "ŀ": "l",
        "ĺ": "l",
        "ľ": "l",
        "ḷ": "l",
        "ḹ": "l",
        "ļ": "l",
        "ḽ": "l",
        "ḻ": "l",
        "ſ": "l",
        "ł": "l",
        "ƚ": "l",
        "ɫ": "l",
        "ⱡ": "l",
        "ꝉ": "l",
        "ꞁ": "l",
        "ꝇ": "l",
        "ǉ": "lj",
        "ⓜ": "m",
        "ｍ": "m",
        "ḿ": "m",
        "ṁ": "m",
        "ṃ": "m",
        "ɱ": "m",
        "ɯ": "m",
        "ⓝ": "n",
        "ｎ": "n",
        "ǹ": "n",
        "ń": "n",
        "ñ": "n",
        "ṅ": "n",
        "ň": "n",
        "ṇ": "n",
        "ņ": "n",
        "ṋ": "n",
        "ṉ": "n",
        "ƞ": "n",
        "ɲ": "n",
        "ŉ": "n",
        "ꞑ": "n",
        "ꞥ": "n",
        "ǌ": "nj",
        "ⓞ": "o",
        "ｏ": "o",
        "ò": "o",
        "ó": "o",
        "ô": "o",
        "ồ": "o",
        "ố": "o",
        "ỗ": "o",
        "ổ": "o",
        "õ": "o",
        "ṍ": "o",
        "ȭ": "o",
        "ṏ": "o",
        "ō": "o",
        "ṑ": "o",
        "ṓ": "o",
        "ŏ": "o",
        "ȯ": "o",
        "ȱ": "o",
        "ö": "o",
        "ȫ": "o",
        "ỏ": "o",
        "ő": "o",
        "ǒ": "o",
        "ȍ": "o",
        "ȏ": "o",
        "ơ": "o",
        "ờ": "o",
        "ớ": "o",
        "ỡ": "o",
        "ở": "o",
        "ợ": "o",
        "ọ": "o",
        "ộ": "o",
        "ǫ": "o",
        "ǭ": "o",
        "ø": "o",
        "ǿ": "o",
        "ɔ": "o",
        "ꝋ": "o",
        "ꝍ": "o",
        "ɵ": "o",
        "œ": "oe",
        "ƣ": "oi",
        "ȣ": "ou",
        "ꝏ": "oo",
        "ⓟ": "p",
        "ｐ": "p",
        "ṕ": "p",
        "ṗ": "p",
        "ƥ": "p",
        "ᵽ": "p",
        "ꝑ": "p",
        "ꝓ": "p",
        "ꝕ": "p",
        "ⓠ": "q",
        "ｑ": "q",
        "ɋ": "q",
        "ꝗ": "q",
        "ꝙ": "q",
        "ⓡ": "r",
        "ｒ": "r",
        "ŕ": "r",
        "ṙ": "r",
        "ř": "r",
        "ȑ": "r",
        "ȓ": "r",
        "ṛ": "r",
        "ṝ": "r",
        "ŗ": "r",
        "ṟ": "r",
        "ɍ": "r",
        "ɽ": "r",
        "ꝛ": "r",
        "ꞧ": "r",
        "ꞃ": "r",
        "ⓢ": "s",
        "ｓ": "s",
        "ß": "s",
        "ś": "s",
        "ṥ": "s",
        "ŝ": "s",
        "ṡ": "s",
        "š": "s",
        "ṧ": "s",
        "ṣ": "s",
        "ṩ": "s",
        "ș": "s",
        "ş": "s",
        "ȿ": "s",
        "ꞩ": "s",
        "ꞅ": "s",
        "ẛ": "s",
        "ⓣ": "t",
        "ｔ": "t",
        "ṫ": "t",
        "ẗ": "t",
        "ť": "t",
        "ṭ": "t",
        "ț": "t",
        "ţ": "t",
        "ṱ": "t",
        "ṯ": "t",
        "ŧ": "t",
        "ƭ": "t",
        "ʈ": "t",
        "ⱦ": "t",
        "ꞇ": "t",
        "ꜩ": "tz",
        "ⓤ": "u",
        "ｕ": "u",
        "ù": "u",
        "ú": "u",
        "û": "u",
        "ũ": "u",
        "ṹ": "u",
        "ū": "u",
        "ṻ": "u",
        "ŭ": "u",
        "ü": "u",
        "ǜ": "u",
        "ǘ": "u",
        "ǖ": "u",
        "ǚ": "u",
        "ủ": "u",
        "ů": "u",
        "ű": "u",
        "ǔ": "u",
        "ȕ": "u",
        "ȗ": "u",
        "ư": "u",
        "ừ": "u",
        "ứ": "u",
        "ữ": "u",
        "ử": "u",
        "ự": "u",
        "ụ": "u",
        "ṳ": "u",
        "ų": "u",
        "ṷ": "u",
        "ṵ": "u",
        "ʉ": "u",
        "ⓥ": "v",
        "ｖ": "v",
        "ṽ": "v",
        "ṿ": "v",
        "ʋ": "v",
        "ꝟ": "v",
        "ʌ": "v",
        "ꝡ": "vy",
        "ⓦ": "w",
        "ｗ": "w",
        "ẁ": "w",
        "ẃ": "w",
        "ŵ": "w",
        "ẇ": "w",
        "ẅ": "w",
        "ẘ": "w",
        "ẉ": "w",
        "ⱳ": "w",
        "ⓧ": "x",
        "ｘ": "x",
        "ẋ": "x",
        "ẍ": "x",
        "ⓨ": "y",
        "ｙ": "y",
        "ỳ": "y",
        "ý": "y",
        "ŷ": "y",
        "ỹ": "y",
        "ȳ": "y",
        "ẏ": "y",
        "ÿ": "y",
        "ỷ": "y",
        "ẙ": "y",
        "ỵ": "y",
        "ƴ": "y",
        "ɏ": "y",
        "ỿ": "y",
        "ⓩ": "z",
        "ｚ": "z",
        "ź": "z",
        "ẑ": "z",
        "ż": "z",
        "ž": "z",
        "ẓ": "z",
        "ẕ": "z",
        "ƶ": "z",
        "ȥ": "z",
        "ɀ": "z",
        "ⱬ": "z",
        "ꝣ": "z",
        "Ά": "Α",
        "Έ": "Ε",
        "Ή": "Η",
        "Ί": "Ι",
        "Ϊ": "Ι",
        "Ό": "Ο",
        "Ύ": "Υ",
        "Ϋ": "Υ",
        "Ώ": "Ω",
        "ά": "α",
        "έ": "ε",
        "ή": "η",
        "ί": "ι",
        "ϊ": "ι",
        "ΐ": "ι",
        "ό": "ο",
        "ύ": "υ",
        "ϋ": "υ",
        "ΰ": "υ",
        "ώ": "ω",
        "ς": "σ",
        "’": "'"
      };
    }), u.define("select2/data/base", ["../utils"], function (n) {
      function s(e, t) {
        s.__super__.constructor.call(this);
      }
      return n.Extend(s, n.Observable), s.prototype.current = function (e) {
        throw new Error("The `current` method must be defined in child classes.");
      }, s.prototype.query = function (e, t) {
        throw new Error("The `query` method must be defined in child classes.");
      }, s.prototype.bind = function (e, t) {}, s.prototype.destroy = function () {}, s.prototype.generateResultId = function (e, t) {
        e = e.id + "-result-";
        return e += n.generateChars(4), null != t.id ? e += "-" + t.id.toString() : e += "-" + n.generateChars(4), e;
      }, s;
    }), u.define("select2/data/select", ["./base", "../utils", "jquery"], function (e, a, l) {
      function n(e, t) {
        this.$element = e, this.options = t, n.__super__.constructor.call(this);
      }
      return a.Extend(n, e), n.prototype.current = function (e) {
        var t = this;
        e(Array.prototype.map.call(this.$element[0].querySelectorAll(":checked"), function (e) {
          return t.item(l(e));
        }));
      }, n.prototype.select = function (i) {
        var e,
          r = this;
        if (i.selected = !0, null != i.element && "option" === i.element.tagName.toLowerCase()) return i.element.selected = !0, void this.$element.trigger("input").trigger("change");
        this.$element.prop("multiple") ? this.current(function (e) {
          var t = [];
          (i = [i]).push.apply(i, e);
          for (var n = 0; n < i.length; n++) {
            var s = i[n].id;
            -1 === t.indexOf(s) && t.push(s);
          }
          r.$element.val(t), r.$element.trigger("input").trigger("change");
        }) : (e = i.id, this.$element.val(e), this.$element.trigger("input").trigger("change"));
      }, n.prototype.unselect = function (i) {
        var r = this;
        if (this.$element.prop("multiple")) {
          if (i.selected = !1, null != i.element && "option" === i.element.tagName.toLowerCase()) return i.element.selected = !1, void this.$element.trigger("input").trigger("change");
          this.current(function (e) {
            for (var t = [], n = 0; n < e.length; n++) {
              var s = e[n].id;
              s !== i.id && -1 === t.indexOf(s) && t.push(s);
            }
            r.$element.val(t), r.$element.trigger("input").trigger("change");
          });
        }
      }, n.prototype.bind = function (e, t) {
        var n = this;
        (this.container = e).on("select", function (e) {
          n.select(e.data);
        }), e.on("unselect", function (e) {
          n.unselect(e.data);
        });
      }, n.prototype.destroy = function () {
        this.$element.find("*").each(function () {
          a.RemoveData(this);
        });
      }, n.prototype.query = function (t, e) {
        var n = [],
          s = this;
        this.$element.children().each(function () {
          var e;
          "option" !== this.tagName.toLowerCase() && "optgroup" !== this.tagName.toLowerCase() || (e = l(this), e = s.item(e), null !== (e = s.matches(t, e)) && n.push(e));
        }), e({
          results: n
        });
      }, n.prototype.addOptions = function (e) {
        this.$element.append(e);
      }, n.prototype.option = function (e) {
        var t;
        e.children ? (t = document.createElement("optgroup")).label = e.text : void 0 !== (t = document.createElement("option")).textContent ? t.textContent = e.text : t.innerText = e.text, void 0 !== e.id && (t.value = e.id), e.disabled && (t.disabled = !0), e.selected && (t.selected = !0), e.title && (t.title = e.title);
        e = this._normalizeItem(e);
        return e.element = t, a.StoreData(t, "data", e), l(t);
      }, n.prototype.item = function (e) {
        var t = {};
        if (null != (t = a.GetData(e[0], "data"))) return t;
        var n = e[0];
        if ("option" === n.tagName.toLowerCase()) t = {
          id: e.val(),
          text: e.text(),
          disabled: e.prop("disabled"),
          selected: e.prop("selected"),
          title: e.prop("title")
        };else if ("optgroup" === n.tagName.toLowerCase()) {
          t = {
            text: e.prop("label"),
            children: [],
            title: e.prop("title")
          };
          for (var s = e.children("option"), i = [], r = 0; r < s.length; r++) {
            var o = l(s[r]),
              o = this.item(o);
            i.push(o);
          }
          t.children = i;
        }
        return (t = this._normalizeItem(t)).element = e[0], a.StoreData(e[0], "data", t), t;
      }, n.prototype._normalizeItem = function (e) {
        e !== Object(e) && (e = {
          id: e,
          text: e
        });
        return null != (e = l.extend({}, {
          text: ""
        }, e)).id && (e.id = e.id.toString()), null != e.text && (e.text = e.text.toString()), null == e._resultId && e.id && null != this.container && (e._resultId = this.generateResultId(this.container, e)), l.extend({}, {
          selected: !1,
          disabled: !1
        }, e);
      }, n.prototype.matches = function (e, t) {
        return this.options.get("matcher")(e, t);
      }, n;
    }), u.define("select2/data/array", ["./select", "../utils", "jquery"], function (e, t, c) {
      function s(e, t) {
        this._dataToConvert = t.get("data") || [], s.__super__.constructor.call(this, e, t);
      }
      return t.Extend(s, e), s.prototype.bind = function (e, t) {
        s.__super__.bind.call(this, e, t), this.addOptions(this.convertToOptions(this._dataToConvert));
      }, s.prototype.select = function (n) {
        var e = this.$element.find("option").filter(function (e, t) {
          return t.value == n.id.toString();
        });
        0 === e.length && (e = this.option(n), this.addOptions(e)), s.__super__.select.call(this, n);
      }, s.prototype.convertToOptions = function (e) {
        var t = this,
          n = this.$element.find("option"),
          s = n.map(function () {
            return t.item(c(this)).id;
          }).get(),
          i = [];
        for (var r = 0; r < e.length; r++) {
          var o,
            a,
            l = this._normalizeItem(e[r]);
          0 <= s.indexOf(l.id) ? (o = n.filter(function (e) {
            return function () {
              return c(this).val() == e.id;
            };
          }(l)), a = this.item(o), a = c.extend(!0, {}, l, a), a = this.option(a), o.replaceWith(a)) : (a = this.option(l), l.children && (l = this.convertToOptions(l.children), a.append(l)), i.push(a));
        }
        return i;
      }, s;
    }), u.define("select2/data/ajax", ["./array", "../utils", "jquery"], function (e, t, r) {
      function n(e, t) {
        this.ajaxOptions = this._applyDefaults(t.get("ajax")), null != this.ajaxOptions.processResults && (this.processResults = this.ajaxOptions.processResults), n.__super__.constructor.call(this, e, t);
      }
      return t.Extend(n, e), n.prototype._applyDefaults = function (e) {
        var t = {
          data: function data(e) {
            return r.extend({}, e, {
              q: e.term
            });
          },
          transport: function transport(e, t, n) {
            e = r.ajax(e);
            return e.then(t), e.fail(n), e;
          }
        };
        return r.extend({}, t, e, !0);
      }, n.prototype.processResults = function (e) {
        return e;
      }, n.prototype.query = function (t, n) {
        var s = this;
        null != this._request && ("function" == typeof this._request.abort && this._request.abort(), this._request = null);
        var i = r.extend({
          type: "GET"
        }, this.ajaxOptions);
        function e() {
          var e = i.transport(i, function (e) {
            e = s.processResults(e, t);
            s.options.get("debug") && window.console && console.error && (e && e.results && Array.isArray(e.results) || console.error("Select2: The AJAX results did not return an array in the `results` key of the response.")), n(e);
          }, function () {
            "status" in e && (0 === e.status || "0" === e.status) || s.trigger("results:message", {
              message: "errorLoading"
            });
          });
          s._request = e;
        }
        "function" == typeof i.url && (i.url = i.url.call(this.$element, t)), "function" == typeof i.data && (i.data = i.data.call(this.$element, t)), this.ajaxOptions.delay && null != t.term ? (this._queryTimeout && window.clearTimeout(this._queryTimeout), this._queryTimeout = window.setTimeout(e, this.ajaxOptions.delay)) : e();
      }, n;
    }), u.define("select2/data/tags", ["jquery"], function (t) {
      function e(e, t, n) {
        var s = n.get("tags"),
          i = n.get("createTag");
        void 0 !== i && (this.createTag = i);
        i = n.get("insertTag");
        if (void 0 !== i && (this.insertTag = i), e.call(this, t, n), Array.isArray(s)) for (var r = 0; r < s.length; r++) {
          var o = s[r],
            o = this._normalizeItem(o),
            o = this.option(o);
          this.$element.append(o);
        }
      }
      return e.prototype.query = function (e, c, u) {
        var d = this;
        this._removeOldTags(), null != c.term && null == c.page ? e.call(this, c, function e(t, n) {
          for (var s = t.results, i = 0; i < s.length; i++) {
            var r = s[i],
              o = null != r.children && !e({
                results: r.children
              }, !0);
            if ((r.text || "").toUpperCase() === (c.term || "").toUpperCase() || o) return !n && (t.data = s, void u(t));
          }
          if (n) return !0;
          var a,
            l = d.createTag(c);
          null != l && ((a = d.option(l)).attr("data-select2-tag", "true"), d.addOptions([a]), d.insertTag(s, l)), t.results = s, u(t);
        }) : e.call(this, c, u);
      }, e.prototype.createTag = function (e, t) {
        if (null == t.term) return null;
        t = t.term.trim();
        return "" === t ? null : {
          id: t,
          text: t
        };
      }, e.prototype.insertTag = function (e, t, n) {
        t.unshift(n);
      }, e.prototype._removeOldTags = function (e) {
        this.$element.find("option[data-select2-tag]").each(function () {
          this.selected || t(this).remove();
        });
      }, e;
    }), u.define("select2/data/tokenizer", ["jquery"], function (c) {
      function e(e, t, n) {
        var s = n.get("tokenizer");
        void 0 !== s && (this.tokenizer = s), e.call(this, t, n);
      }
      return e.prototype.bind = function (e, t, n) {
        e.call(this, t, n), this.$search = t.dropdown.$search || t.selection.$search || n.find(".select2-search__field");
      }, e.prototype.query = function (e, t, n) {
        var s = this;
        t.term = t.term || "";
        var i = this.tokenizer(t, this.options, function (e) {
          var t,
            n = s._normalizeItem(e);
          s.$element.find("option").filter(function () {
            return c(this).val() === n.id;
          }).length || ((t = s.option(n)).attr("data-select2-tag", !0), s._removeOldTags(), s.addOptions([t])), t = n, s.trigger("select", {
            data: t
          });
        });
        i.term !== t.term && (this.$search.length && (this.$search.val(i.term), this.$search.trigger("focus")), t.term = i.term), e.call(this, t, n);
      }, e.prototype.tokenizer = function (e, t, n, s) {
        for (var i = n.get("tokenSeparators") || [], r = t.term, o = 0, a = this.createTag || function (e) {
            return {
              id: e.term,
              text: e.term
            };
          }; o < r.length;) {
          var l = r[o];
          -1 !== i.indexOf(l) ? (l = r.substr(0, o), null != (l = a(c.extend({}, t, {
            term: l
          }))) ? (s(l), r = r.substr(o + 1) || "", o = 0) : o++) : o++;
        }
        return {
          term: r
        };
      }, e;
    }), u.define("select2/data/minimumInputLength", [], function () {
      function e(e, t, n) {
        this.minimumInputLength = n.get("minimumInputLength"), e.call(this, t, n);
      }
      return e.prototype.query = function (e, t, n) {
        t.term = t.term || "", t.term.length < this.minimumInputLength ? this.trigger("results:message", {
          message: "inputTooShort",
          args: {
            minimum: this.minimumInputLength,
            input: t.term,
            params: t
          }
        }) : e.call(this, t, n);
      }, e;
    }), u.define("select2/data/maximumInputLength", [], function () {
      function e(e, t, n) {
        this.maximumInputLength = n.get("maximumInputLength"), e.call(this, t, n);
      }
      return e.prototype.query = function (e, t, n) {
        t.term = t.term || "", 0 < this.maximumInputLength && t.term.length > this.maximumInputLength ? this.trigger("results:message", {
          message: "inputTooLong",
          args: {
            maximum: this.maximumInputLength,
            input: t.term,
            params: t
          }
        }) : e.call(this, t, n);
      }, e;
    }), u.define("select2/data/maximumSelectionLength", [], function () {
      function e(e, t, n) {
        this.maximumSelectionLength = n.get("maximumSelectionLength"), e.call(this, t, n);
      }
      return e.prototype.bind = function (e, t, n) {
        var s = this;
        e.call(this, t, n), t.on("select", function () {
          s._checkIfMaximumSelected();
        });
      }, e.prototype.query = function (e, t, n) {
        var s = this;
        this._checkIfMaximumSelected(function () {
          e.call(s, t, n);
        });
      }, e.prototype._checkIfMaximumSelected = function (e, t) {
        var n = this;
        this.current(function (e) {
          e = null != e ? e.length : 0;
          0 < n.maximumSelectionLength && e >= n.maximumSelectionLength ? n.trigger("results:message", {
            message: "maximumSelected",
            args: {
              maximum: n.maximumSelectionLength
            }
          }) : t && t();
        });
      }, e;
    }), u.define("select2/dropdown", ["jquery", "./utils"], function (t, e) {
      function n(e, t) {
        this.$element = e, this.options = t, n.__super__.constructor.call(this);
      }
      return e.Extend(n, e.Observable), n.prototype.render = function () {
        var e = t('<span class="select2-dropdown"><span class="select2-results"></span></span>');
        return e.attr("dir", this.options.get("dir")), this.$dropdown = e;
      }, n.prototype.bind = function () {}, n.prototype.position = function (e, t) {}, n.prototype.destroy = function () {
        this.$dropdown.remove();
      }, n;
    }), u.define("select2/dropdown/search", ["jquery"], function (r) {
      function e() {}
      return e.prototype.render = function (e) {
        var t = e.call(this),
          n = this.options.get("translations").get("search"),
          e = r('<span class="select2-search select2-search--dropdown"><input class="select2-search__field" type="search" tabindex="-1" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" /></span>');
        return this.$searchContainer = e, this.$search = e.find("input"), this.$search.prop("autocomplete", this.options.get("autocomplete")), this.$search.attr("aria-label", n()), t.prepend(e), t;
      }, e.prototype.bind = function (e, t, n) {
        var s = this,
          i = t.id + "-results";
        e.call(this, t, n), this.$search.on("keydown", function (e) {
          s.trigger("keypress", e), s._keyUpPrevented = e.isDefaultPrevented();
        }), this.$search.on("input", function (e) {
          r(this).off("keyup");
        }), this.$search.on("keyup input", function (e) {
          s.handleSearch(e);
        }), t.on("open", function () {
          s.$search.attr("tabindex", 0), s.$search.attr("aria-controls", i), s.$search.trigger("focus"), window.setTimeout(function () {
            s.$search.trigger("focus");
          }, 0);
        }), t.on("close", function () {
          s.$search.attr("tabindex", -1), s.$search.removeAttr("aria-controls"), s.$search.removeAttr("aria-activedescendant"), s.$search.val(""), s.$search.trigger("blur");
        }), t.on("focus", function () {
          t.isOpen() || s.$search.trigger("focus");
        }), t.on("results:all", function (e) {
          null != e.query.term && "" !== e.query.term || (s.showSearch(e) ? s.$searchContainer[0].classList.remove("select2-search--hide") : s.$searchContainer[0].classList.add("select2-search--hide"));
        }), t.on("results:focus", function (e) {
          e.data._resultId ? s.$search.attr("aria-activedescendant", e.data._resultId) : s.$search.removeAttr("aria-activedescendant");
        });
      }, e.prototype.handleSearch = function (e) {
        var t;
        this._keyUpPrevented || (t = this.$search.val(), this.trigger("query", {
          term: t
        })), this._keyUpPrevented = !1;
      }, e.prototype.showSearch = function (e, t) {
        return !0;
      }, e;
    }), u.define("select2/dropdown/hidePlaceholder", [], function () {
      function e(e, t, n, s) {
        this.placeholder = this.normalizePlaceholder(n.get("placeholder")), e.call(this, t, n, s);
      }
      return e.prototype.append = function (e, t) {
        t.results = this.removePlaceholder(t.results), e.call(this, t);
      }, e.prototype.normalizePlaceholder = function (e, t) {
        return t = "string" == typeof t ? {
          id: "",
          text: t
        } : t;
      }, e.prototype.removePlaceholder = function (e, t) {
        for (var n = t.slice(0), s = t.length - 1; 0 <= s; s--) {
          var i = t[s];
          this.placeholder.id === i.id && n.splice(s, 1);
        }
        return n;
      }, e;
    }), u.define("select2/dropdown/infiniteScroll", ["jquery"], function (n) {
      function e(e, t, n, s) {
        this.lastParams = {}, e.call(this, t, n, s), this.$loadingMore = this.createLoadingMore(), this.loading = !1;
      }
      return e.prototype.append = function (e, t) {
        this.$loadingMore.remove(), this.loading = !1, e.call(this, t), this.showLoadingMore(t) && (this.$results.append(this.$loadingMore), this.loadMoreIfNeeded());
      }, e.prototype.bind = function (e, t, n) {
        var s = this;
        e.call(this, t, n), t.on("query", function (e) {
          s.lastParams = e, s.loading = !0;
        }), t.on("query:append", function (e) {
          s.lastParams = e, s.loading = !0;
        }), this.$results.on("scroll", this.loadMoreIfNeeded.bind(this));
      }, e.prototype.loadMoreIfNeeded = function () {
        var e = n.contains(document.documentElement, this.$loadingMore[0]);
        !this.loading && e && (e = this.$results.offset().top + this.$results.outerHeight(!1), this.$loadingMore.offset().top + this.$loadingMore.outerHeight(!1) <= e + 50 && this.loadMore());
      }, e.prototype.loadMore = function () {
        this.loading = !0;
        var e = n.extend({}, {
          page: 1
        }, this.lastParams);
        e.page++, this.trigger("query:append", e);
      }, e.prototype.showLoadingMore = function (e, t) {
        return t.pagination && t.pagination.more;
      }, e.prototype.createLoadingMore = function () {
        var e = n('<li class="select2-results__option select2-results__option--load-more"role="option" aria-disabled="true"></li>'),
          t = this.options.get("translations").get("loadingMore");
        return e.html(t(this.lastParams)), e;
      }, e;
    }), u.define("select2/dropdown/attachBody", ["jquery", "../utils"], function (u, o) {
      function e(e, t, n) {
        this.$dropdownParent = u(n.get("dropdownParent") || document.body), e.call(this, t, n);
      }
      return e.prototype.bind = function (e, t, n) {
        var s = this;
        e.call(this, t, n), t.on("open", function () {
          s._showDropdown(), s._attachPositioningHandler(t), s._bindContainerResultHandlers(t);
        }), t.on("close", function () {
          s._hideDropdown(), s._detachPositioningHandler(t);
        }), this.$dropdownContainer.on("mousedown", function (e) {
          e.stopPropagation();
        });
      }, e.prototype.destroy = function (e) {
        e.call(this), this.$dropdownContainer.remove();
      }, e.prototype.position = function (e, t, n) {
        t.attr("class", n.attr("class")), t[0].classList.remove("select2"), t[0].classList.add("select2-container--open"), t.css({
          position: "absolute",
          top: -999999
        }), this.$container = n;
      }, e.prototype.render = function (e) {
        var t = u("<span></span>"),
          e = e.call(this);
        return t.append(e), this.$dropdownContainer = t;
      }, e.prototype._hideDropdown = function (e) {
        this.$dropdownContainer.detach();
      }, e.prototype._bindContainerResultHandlers = function (e, t) {
        var n;
        this._containerResultsHandlersBound || (n = this, t.on("results:all", function () {
          n._positionDropdown(), n._resizeDropdown();
        }), t.on("results:append", function () {
          n._positionDropdown(), n._resizeDropdown();
        }), t.on("results:message", function () {
          n._positionDropdown(), n._resizeDropdown();
        }), t.on("select", function () {
          n._positionDropdown(), n._resizeDropdown();
        }), t.on("unselect", function () {
          n._positionDropdown(), n._resizeDropdown();
        }), this._containerResultsHandlersBound = !0);
      }, e.prototype._attachPositioningHandler = function (e, t) {
        var n = this,
          s = "scroll.select2." + t.id,
          i = "resize.select2." + t.id,
          r = "orientationchange.select2." + t.id,
          t = this.$container.parents().filter(o.hasScroll);
        t.each(function () {
          o.StoreData(this, "select2-scroll-position", {
            x: u(this).scrollLeft(),
            y: u(this).scrollTop()
          });
        }), t.on(s, function (e) {
          var t = o.GetData(this, "select2-scroll-position");
          u(this).scrollTop(t.y);
        }), u(window).on(s + " " + i + " " + r, function (e) {
          n._positionDropdown(), n._resizeDropdown();
        });
      }, e.prototype._detachPositioningHandler = function (e, t) {
        var n = "scroll.select2." + t.id,
          s = "resize.select2." + t.id,
          t = "orientationchange.select2." + t.id;
        this.$container.parents().filter(o.hasScroll).off(n), u(window).off(n + " " + s + " " + t);
      }, e.prototype._positionDropdown = function () {
        var e = u(window),
          t = this.$dropdown[0].classList.contains("select2-dropdown--above"),
          n = this.$dropdown[0].classList.contains("select2-dropdown--below"),
          s = null,
          i = this.$container.offset();
        i.bottom = i.top + this.$container.outerHeight(!1);
        var r = {
          height: this.$container.outerHeight(!1)
        };
        r.top = i.top, r.bottom = i.top + r.height;
        var o = this.$dropdown.outerHeight(!1),
          a = e.scrollTop(),
          l = e.scrollTop() + e.height(),
          c = a < i.top - o,
          e = l > i.bottom + o,
          a = {
            left: i.left,
            top: r.bottom
          },
          l = this.$dropdownParent;
        "static" === l.css("position") && (l = l.offsetParent());
        i = {
          top: 0,
          left: 0
        };
        (u.contains(document.body, l[0]) || l[0].isConnected) && (i = l.offset()), a.top -= i.top, a.left -= i.left, t || n || (s = "below"), e || !c || t ? !c && e && t && (s = "below") : s = "above", ("above" == s || t && "below" !== s) && (a.top = r.top - i.top - o), null != s && (this.$dropdown[0].classList.remove("select2-dropdown--below"), this.$dropdown[0].classList.remove("select2-dropdown--above"), this.$dropdown[0].classList.add("select2-dropdown--" + s), this.$container[0].classList.remove("select2-container--below"), this.$container[0].classList.remove("select2-container--above"), this.$container[0].classList.add("select2-container--" + s)), this.$dropdownContainer.css(a);
      }, e.prototype._resizeDropdown = function () {
        var e = {
          width: this.$container.outerWidth(!1) + "px"
        };
        this.options.get("dropdownAutoWidth") && (e.minWidth = e.width, e.position = "relative", e.width = "auto"), this.$dropdown.css(e);
      }, e.prototype._showDropdown = function (e) {
        this.$dropdownContainer.appendTo(this.$dropdownParent), this._positionDropdown(), this._resizeDropdown();
      }, e;
    }), u.define("select2/dropdown/minimumResultsForSearch", [], function () {
      function e(e, t, n, s) {
        this.minimumResultsForSearch = n.get("minimumResultsForSearch"), this.minimumResultsForSearch < 0 && (this.minimumResultsForSearch = 1 / 0), e.call(this, t, n, s);
      }
      return e.prototype.showSearch = function (e, t) {
        return !(function e(t) {
          for (var n = 0, s = 0; s < t.length; s++) {
            var i = t[s];
            i.children ? n += e(i.children) : n++;
          }
          return n;
        }(t.data.results) < this.minimumResultsForSearch) && e.call(this, t);
      }, e;
    }), u.define("select2/dropdown/selectOnClose", ["../utils"], function (s) {
      function e() {}
      return e.prototype.bind = function (e, t, n) {
        var s = this;
        e.call(this, t, n), t.on("close", function (e) {
          s._handleSelectOnClose(e);
        });
      }, e.prototype._handleSelectOnClose = function (e, t) {
        if (t && null != t.originalSelect2Event) {
          var n = t.originalSelect2Event;
          if ("select" === n._type || "unselect" === n._type) return;
        }
        n = this.getHighlightedResults();
        n.length < 1 || null != (n = s.GetData(n[0], "data")).element && n.element.selected || null == n.element && n.selected || this.trigger("select", {
          data: n
        });
      }, e;
    }), u.define("select2/dropdown/closeOnSelect", [], function () {
      function e() {}
      return e.prototype.bind = function (e, t, n) {
        var s = this;
        e.call(this, t, n), t.on("select", function (e) {
          s._selectTriggered(e);
        }), t.on("unselect", function (e) {
          s._selectTriggered(e);
        });
      }, e.prototype._selectTriggered = function (e, t) {
        var n = t.originalEvent;
        n && (n.ctrlKey || n.metaKey) || this.trigger("close", {
          originalEvent: n,
          originalSelect2Event: t
        });
      }, e;
    }), u.define("select2/dropdown/dropdownCss", ["../utils"], function (n) {
      function e() {}
      return e.prototype.render = function (e) {
        var t = e.call(this),
          e = this.options.get("dropdownCssClass") || "";
        return -1 !== e.indexOf(":all:") && (e = e.replace(":all:", ""), n.copyNonInternalCssClasses(t[0], this.$element[0])), t.addClass(e), t;
      }, e;
    }), u.define("select2/dropdown/tagsSearchHighlight", ["../utils"], function (s) {
      function e() {}
      return e.prototype.highlightFirstItem = function (e) {
        var t = this.$results.find(".select2-results__option--selectable:not(.select2-results__option--selected)");
        if (0 < t.length) {
          var n = t.first(),
            t = s.GetData(n[0], "data").element;
          if (t && t.getAttribute && "true" === t.getAttribute("data-select2-tag")) return void n.trigger("mouseenter");
        }
        e.call(this);
      }, e;
    }), u.define("select2/i18n/en", [], function () {
      return {
        errorLoading: function errorLoading() {
          return "The results could not be loaded.";
        },
        inputTooLong: function inputTooLong(e) {
          var t = e.input.length - e.maximum,
            e = "Please delete " + t + " character";
          return 1 != t && (e += "s"), e;
        },
        inputTooShort: function inputTooShort(e) {
          return "Please enter " + (e.minimum - e.input.length) + " or more characters";
        },
        loadingMore: function loadingMore() {
          return "Loading more results…";
        },
        maximumSelected: function maximumSelected(e) {
          var t = "You can only select " + e.maximum + " item";
          return 1 != e.maximum && (t += "s"), t;
        },
        noResults: function noResults() {
          return "No results found";
        },
        searching: function searching() {
          return "Searching…";
        },
        removeAllItems: function removeAllItems() {
          return "Remove all items";
        },
        removeItem: function removeItem() {
          return "Remove item";
        },
        search: function search() {
          return "Search";
        }
      };
    }), u.define("select2/defaults", ["jquery", "./results", "./selection/single", "./selection/multiple", "./selection/placeholder", "./selection/allowClear", "./selection/search", "./selection/selectionCss", "./selection/eventRelay", "./utils", "./translation", "./diacritics", "./data/select", "./data/array", "./data/ajax", "./data/tags", "./data/tokenizer", "./data/minimumInputLength", "./data/maximumInputLength", "./data/maximumSelectionLength", "./dropdown", "./dropdown/search", "./dropdown/hidePlaceholder", "./dropdown/infiniteScroll", "./dropdown/attachBody", "./dropdown/minimumResultsForSearch", "./dropdown/selectOnClose", "./dropdown/closeOnSelect", "./dropdown/dropdownCss", "./dropdown/tagsSearchHighlight", "./i18n/en"], function (l, r, o, a, c, u, d, p, h, f, g, t, m, y, v, _, b, $, w, x, A, D, S, E, O, C, L, T, q, I, e) {
      function n() {
        this.reset();
      }
      return n.prototype.apply = function (e) {
        var t;
        null == (e = l.extend(!0, {}, this.defaults, e)).dataAdapter && (null != e.ajax ? e.dataAdapter = v : null != e.data ? e.dataAdapter = y : e.dataAdapter = m, 0 < e.minimumInputLength && (e.dataAdapter = f.Decorate(e.dataAdapter, $)), 0 < e.maximumInputLength && (e.dataAdapter = f.Decorate(e.dataAdapter, w)), 0 < e.maximumSelectionLength && (e.dataAdapter = f.Decorate(e.dataAdapter, x)), e.tags && (e.dataAdapter = f.Decorate(e.dataAdapter, _)), null == e.tokenSeparators && null == e.tokenizer || (e.dataAdapter = f.Decorate(e.dataAdapter, b))), null == e.resultsAdapter && (e.resultsAdapter = r, null != e.ajax && (e.resultsAdapter = f.Decorate(e.resultsAdapter, E)), null != e.placeholder && (e.resultsAdapter = f.Decorate(e.resultsAdapter, S)), e.selectOnClose && (e.resultsAdapter = f.Decorate(e.resultsAdapter, L)), e.tags && (e.resultsAdapter = f.Decorate(e.resultsAdapter, I))), null == e.dropdownAdapter && (e.multiple ? e.dropdownAdapter = A : (t = f.Decorate(A, D), e.dropdownAdapter = t), 0 !== e.minimumResultsForSearch && (e.dropdownAdapter = f.Decorate(e.dropdownAdapter, C)), e.closeOnSelect && (e.dropdownAdapter = f.Decorate(e.dropdownAdapter, T)), null != e.dropdownCssClass && (e.dropdownAdapter = f.Decorate(e.dropdownAdapter, q)), e.dropdownAdapter = f.Decorate(e.dropdownAdapter, O)), null == e.selectionAdapter && (e.multiple ? e.selectionAdapter = a : e.selectionAdapter = o, null != e.placeholder && (e.selectionAdapter = f.Decorate(e.selectionAdapter, c)), e.allowClear && (e.selectionAdapter = f.Decorate(e.selectionAdapter, u)), e.multiple && (e.selectionAdapter = f.Decorate(e.selectionAdapter, d)), null != e.selectionCssClass && (e.selectionAdapter = f.Decorate(e.selectionAdapter, p)), e.selectionAdapter = f.Decorate(e.selectionAdapter, h)), e.language = this._resolveLanguage(e.language), e.language.push("en");
        for (var n = [], s = 0; s < e.language.length; s++) {
          var i = e.language[s];
          -1 === n.indexOf(i) && n.push(i);
        }
        return e.language = n, e.translations = this._processTranslations(e.language, e.debug), e;
      }, n.prototype.reset = function () {
        function a(e) {
          return e.replace(/[^\u0000-\u007E]/g, function (e) {
            return t[e] || e;
          });
        }
        this.defaults = {
          amdLanguageBase: "./i18n/",
          autocomplete: "off",
          closeOnSelect: !0,
          debug: !1,
          dropdownAutoWidth: !1,
          escapeMarkup: f.escapeMarkup,
          language: {},
          matcher: function e(t, n) {
            if (null == t.term || "" === t.term.trim()) return n;
            if (n.children && 0 < n.children.length) {
              for (var s = l.extend(!0, {}, n), i = n.children.length - 1; 0 <= i; i--) null == e(t, n.children[i]) && s.children.splice(i, 1);
              return 0 < s.children.length ? s : e(t, s);
            }
            var r = a(n.text).toUpperCase(),
              o = a(t.term).toUpperCase();
            return -1 < r.indexOf(o) ? n : null;
          },
          minimumInputLength: 0,
          maximumInputLength: 0,
          maximumSelectionLength: 0,
          minimumResultsForSearch: 0,
          selectOnClose: !1,
          scrollAfterSelect: !1,
          sorter: function sorter(e) {
            return e;
          },
          templateResult: function templateResult(e) {
            return e.text;
          },
          templateSelection: function templateSelection(e) {
            return e.text;
          },
          theme: "default",
          width: "resolve"
        };
      }, n.prototype.applyFromElement = function (e, t) {
        var n = e.language,
          s = this.defaults.language,
          i = t.prop("lang"),
          t = t.closest("[lang]").prop("lang"),
          t = Array.prototype.concat.call(this._resolveLanguage(i), this._resolveLanguage(n), this._resolveLanguage(s), this._resolveLanguage(t));
        return e.language = t, e;
      }, n.prototype._resolveLanguage = function (e) {
        if (!e) return [];
        if (l.isEmptyObject(e)) return [];
        if (l.isPlainObject(e)) return [e];
        for (var t, n = Array.isArray(e) ? e : [e], s = [], i = 0; i < n.length; i++) s.push(n[i]), "string" == typeof n[i] && 0 < n[i].indexOf("-") && (t = n[i].split("-")[0], s.push(t));
        return s;
      }, n.prototype._processTranslations = function (e, t) {
        for (var n = new g(), s = 0; s < e.length; s++) {
          var i = new g(),
            r = e[s];
          if ("string" == typeof r) try {
            i = g.loadPath(r);
          } catch (e) {
            try {
              r = this.defaults.amdLanguageBase + r, i = g.loadPath(r);
            } catch (e) {
              t && window.console && console.warn && console.warn('Select2: The language file for "' + r + '" could not be automatically loaded. A fallback will be used instead.');
            }
          } else i = l.isPlainObject(r) ? new g(r) : r;
          n.extend(i);
        }
        return n;
      }, n.prototype.set = function (e, t) {
        var n = {};
        n[l.camelCase(e)] = t;
        n = f._convertData(n);
        l.extend(!0, this.defaults, n);
      }, new n();
    }), u.define("select2/options", ["jquery", "./defaults", "./utils"], function (c, n, u) {
      function e(e, t) {
        this.options = e, null != t && this.fromElement(t), null != t && (this.options = n.applyFromElement(this.options, t)), this.options = n.apply(this.options);
      }
      return e.prototype.fromElement = function (e) {
        var t = ["select2"];
        null == this.options.multiple && (this.options.multiple = e.prop("multiple")), null == this.options.disabled && (this.options.disabled = e.prop("disabled")), null == this.options.autocomplete && e.prop("autocomplete") && (this.options.autocomplete = e.prop("autocomplete")), null == this.options.dir && (e.prop("dir") ? this.options.dir = e.prop("dir") : e.closest("[dir]").prop("dir") ? this.options.dir = e.closest("[dir]").prop("dir") : this.options.dir = "ltr"), e.prop("disabled", this.options.disabled), e.prop("multiple", this.options.multiple), u.GetData(e[0], "select2Tags") && (this.options.debug && window.console && console.warn && console.warn('Select2: The `data-select2-tags` attribute has been changed to use the `data-data` and `data-tags="true"` attributes and will be removed in future versions of Select2.'), u.StoreData(e[0], "data", u.GetData(e[0], "select2Tags")), u.StoreData(e[0], "tags", !0)), u.GetData(e[0], "ajaxUrl") && (this.options.debug && window.console && console.warn && console.warn("Select2: The `data-ajax-url` attribute has been changed to `data-ajax--url` and support for the old attribute will be removed in future versions of Select2."), e.attr("ajax--url", u.GetData(e[0], "ajaxUrl")), u.StoreData(e[0], "ajax-Url", u.GetData(e[0], "ajaxUrl")));
        var n = {};
        function s(e, t) {
          return t.toUpperCase();
        }
        for (var i = 0; i < e[0].attributes.length; i++) {
          var r = e[0].attributes[i].name,
            o = "data-";
          r.substr(0, o.length) == o && (r = r.substring(o.length), o = u.GetData(e[0], r), n[r.replace(/-([a-z])/g, s)] = o);
        }
        c.fn.jquery && "1." == c.fn.jquery.substr(0, 2) && e[0].dataset && (n = c.extend(!0, {}, e[0].dataset, n));
        var a,
          l = c.extend(!0, {}, u.GetData(e[0]), n);
        for (a in l = u._convertData(l)) -1 < t.indexOf(a) || (c.isPlainObject(this.options[a]) ? c.extend(this.options[a], l[a]) : this.options[a] = l[a]);
        return this;
      }, e.prototype.get = function (e) {
        return this.options[e];
      }, e.prototype.set = function (e, t) {
        this.options[e] = t;
      }, e;
    }), u.define("select2/core", ["jquery", "./options", "./utils", "./keys"], function (t, i, r, s) {
      var o = function o(e, t) {
        null != r.GetData(e[0], "select2") && r.GetData(e[0], "select2").destroy(), this.$element = e, this.id = this._generateId(e), t = t || {}, this.options = new i(t, e), o.__super__.constructor.call(this);
        var n = e.attr("tabindex") || 0;
        r.StoreData(e[0], "old-tabindex", n), e.attr("tabindex", "-1");
        t = this.options.get("dataAdapter");
        this.dataAdapter = new t(e, this.options);
        n = this.render();
        this._placeContainer(n);
        t = this.options.get("selectionAdapter");
        this.selection = new t(e, this.options), this.$selection = this.selection.render(), this.selection.position(this.$selection, n);
        t = this.options.get("dropdownAdapter");
        this.dropdown = new t(e, this.options), this.$dropdown = this.dropdown.render(), this.dropdown.position(this.$dropdown, n);
        n = this.options.get("resultsAdapter");
        this.results = new n(e, this.options, this.dataAdapter), this.$results = this.results.render(), this.results.position(this.$results, this.$dropdown);
        var s = this;
        this._bindAdapters(), this._registerDomEvents(), this._registerDataEvents(), this._registerSelectionEvents(), this._registerDropdownEvents(), this._registerResultsEvents(), this._registerEvents(), this.dataAdapter.current(function (e) {
          s.trigger("selection:update", {
            data: e
          });
        }), e[0].classList.add("select2-hidden-accessible"), e.attr("aria-hidden", "true"), this._syncAttributes(), r.StoreData(e[0], "select2", this), e.data("select2", this);
      };
      return r.Extend(o, r.Observable), o.prototype._generateId = function (e) {
        return "select2-" + (null != e.attr("id") ? e.attr("id") : null != e.attr("name") ? e.attr("name") + "-" + r.generateChars(2) : r.generateChars(4)).replace(/(:|\.|\[|\]|,)/g, "");
      }, o.prototype._placeContainer = function (e) {
        e.insertAfter(this.$element);
        var t = this._resolveWidth(this.$element, this.options.get("width"));
        null != t && e.css("width", t);
      }, o.prototype._resolveWidth = function (e, t) {
        var n = /^width:(([-+]?([0-9]*\.)?[0-9]+)(px|em|ex|%|in|cm|mm|pt|pc))/i;
        if ("resolve" == t) {
          var s = this._resolveWidth(e, "style");
          return null != s ? s : this._resolveWidth(e, "element");
        }
        if ("element" == t) {
          s = e.outerWidth(!1);
          return s <= 0 ? "auto" : s + "px";
        }
        if ("style" != t) return "computedstyle" != t ? t : window.getComputedStyle(e[0]).width;
        e = e.attr("style");
        if ("string" != typeof e) return null;
        for (var i = e.split(";"), r = 0, o = i.length; r < o; r += 1) {
          var a = i[r].replace(/\s/g, "").match(n);
          if (null !== a && 1 <= a.length) return a[1];
        }
        return null;
      }, o.prototype._bindAdapters = function () {
        this.dataAdapter.bind(this, this.$container), this.selection.bind(this, this.$container), this.dropdown.bind(this, this.$container), this.results.bind(this, this.$container);
      }, o.prototype._registerDomEvents = function () {
        var t = this;
        this.$element.on("change.select2", function () {
          t.dataAdapter.current(function (e) {
            t.trigger("selection:update", {
              data: e
            });
          });
        }), this.$element.on("focus.select2", function (e) {
          t.trigger("focus", e);
        }), this._syncA = r.bind(this._syncAttributes, this), this._syncS = r.bind(this._syncSubtree, this), this._observer = new window.MutationObserver(function (e) {
          t._syncA(), t._syncS(e);
        }), this._observer.observe(this.$element[0], {
          attributes: !0,
          childList: !0,
          subtree: !1
        });
      }, o.prototype._registerDataEvents = function () {
        var n = this;
        this.dataAdapter.on("*", function (e, t) {
          n.trigger(e, t);
        });
      }, o.prototype._registerSelectionEvents = function () {
        var n = this,
          s = ["toggle", "focus"];
        this.selection.on("toggle", function () {
          n.toggleDropdown();
        }), this.selection.on("focus", function (e) {
          n.focus(e);
        }), this.selection.on("*", function (e, t) {
          -1 === s.indexOf(e) && n.trigger(e, t);
        });
      }, o.prototype._registerDropdownEvents = function () {
        var n = this;
        this.dropdown.on("*", function (e, t) {
          n.trigger(e, t);
        });
      }, o.prototype._registerResultsEvents = function () {
        var n = this;
        this.results.on("*", function (e, t) {
          n.trigger(e, t);
        });
      }, o.prototype._registerEvents = function () {
        var n = this;
        this.on("open", function () {
          n.$container[0].classList.add("select2-container--open");
        }), this.on("close", function () {
          n.$container[0].classList.remove("select2-container--open");
        }), this.on("enable", function () {
          n.$container[0].classList.remove("select2-container--disabled");
        }), this.on("disable", function () {
          n.$container[0].classList.add("select2-container--disabled");
        }), this.on("blur", function () {
          n.$container[0].classList.remove("select2-container--focus");
        }), this.on("query", function (t) {
          n.isOpen() || n.trigger("open", {}), this.dataAdapter.query(t, function (e) {
            n.trigger("results:all", {
              data: e,
              query: t
            });
          });
        }), this.on("query:append", function (t) {
          this.dataAdapter.query(t, function (e) {
            n.trigger("results:append", {
              data: e,
              query: t
            });
          });
        }), this.on("keypress", function (e) {
          var t = e.which;
          n.isOpen() ? t === s.ESC || t === s.UP && e.altKey ? (n.close(e), e.preventDefault()) : t === s.ENTER || t === s.TAB ? (n.trigger("results:select", {}), e.preventDefault()) : t === s.SPACE && e.ctrlKey ? (n.trigger("results:toggle", {}), e.preventDefault()) : t === s.UP ? (n.trigger("results:previous", {}), e.preventDefault()) : t === s.DOWN && (n.trigger("results:next", {}), e.preventDefault()) : (t === s.ENTER || t === s.SPACE || t === s.DOWN && e.altKey) && (n.open(), e.preventDefault());
        });
      }, o.prototype._syncAttributes = function () {
        this.options.set("disabled", this.$element.prop("disabled")), this.isDisabled() ? (this.isOpen() && this.close(), this.trigger("disable", {})) : this.trigger("enable", {});
      }, o.prototype._isChangeMutation = function (e) {
        var t = this;
        if (e.addedNodes && 0 < e.addedNodes.length) {
          for (var n = 0; n < e.addedNodes.length; n++) if (e.addedNodes[n].selected) return !0;
        } else {
          if (e.removedNodes && 0 < e.removedNodes.length) return !0;
          if (Array.isArray(e)) return e.some(function (e) {
            return t._isChangeMutation(e);
          });
        }
        return !1;
      }, o.prototype._syncSubtree = function (e) {
        var e = this._isChangeMutation(e),
          t = this;
        e && this.dataAdapter.current(function (e) {
          t.trigger("selection:update", {
            data: e
          });
        });
      }, o.prototype.trigger = function (e, t) {
        var n = o.__super__.trigger,
          s = {
            open: "opening",
            close: "closing",
            select: "selecting",
            unselect: "unselecting",
            clear: "clearing"
          };
        if (void 0 === t && (t = {}), e in s) {
          var i = s[e],
            s = {
              prevented: !1,
              name: e,
              args: t
            };
          if (n.call(this, i, s), s.prevented) return void (t.prevented = !0);
        }
        n.call(this, e, t);
      }, o.prototype.toggleDropdown = function () {
        this.isDisabled() || (this.isOpen() ? this.close() : this.open());
      }, o.prototype.open = function () {
        this.isOpen() || this.isDisabled() || this.trigger("query", {});
      }, o.prototype.close = function (e) {
        this.isOpen() && this.trigger("close", {
          originalEvent: e
        });
      }, o.prototype.isEnabled = function () {
        return !this.isDisabled();
      }, o.prototype.isDisabled = function () {
        return this.options.get("disabled");
      }, o.prototype.isOpen = function () {
        return this.$container[0].classList.contains("select2-container--open");
      }, o.prototype.hasFocus = function () {
        return this.$container[0].classList.contains("select2-container--focus");
      }, o.prototype.focus = function (e) {
        this.hasFocus() || (this.$container[0].classList.add("select2-container--focus"), this.trigger("focus", {}));
      }, o.prototype.enable = function (e) {
        this.options.get("debug") && window.console && console.warn && console.warn('Select2: The `select2("enable")` method has been deprecated and will be removed in later Select2 versions. Use $element.prop("disabled") instead.');
        e = !(e = null == e || 0 === e.length ? [!0] : e)[0];
        this.$element.prop("disabled", e);
      }, o.prototype.data = function () {
        this.options.get("debug") && 0 < arguments.length && window.console && console.warn && console.warn('Select2: Data can no longer be set using `select2("data")`. You should consider setting the value instead using `$element.val()`.');
        var t = [];
        return this.dataAdapter.current(function (e) {
          t = e;
        }), t;
      }, o.prototype.val = function (e) {
        if (this.options.get("debug") && window.console && console.warn && console.warn('Select2: The `select2("val")` method has been deprecated and will be removed in later Select2 versions. Use $element.val() instead.'), null == e || 0 === e.length) return this.$element.val();
        e = e[0];
        Array.isArray(e) && (e = e.map(function (e) {
          return e.toString();
        })), this.$element.val(e).trigger("input").trigger("change");
      }, o.prototype.destroy = function () {
        r.RemoveData(this.$container[0]), this.$container.remove(), this._observer.disconnect(), this._observer = null, this._syncA = null, this._syncS = null, this.$element.off(".select2"), this.$element.attr("tabindex", r.GetData(this.$element[0], "old-tabindex")), this.$element[0].classList.remove("select2-hidden-accessible"), this.$element.attr("aria-hidden", "false"), r.RemoveData(this.$element[0]), this.$element.removeData("select2"), this.dataAdapter.destroy(), this.selection.destroy(), this.dropdown.destroy(), this.results.destroy(), this.dataAdapter = null, this.selection = null, this.dropdown = null, this.results = null;
      }, o.prototype.render = function () {
        var e = t('<span class="select2 select2-container"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>');
        return e.attr("dir", this.options.get("dir")), this.$container = e, this.$container[0].classList.add("select2-container--" + this.options.get("theme")), r.StoreData(e[0], "element", this.$element), e;
      }, o;
    }), u.define("jquery-mousewheel", ["jquery"], function (e) {
      return e;
    }), u.define("jquery.select2", ["jquery", "jquery-mousewheel", "./select2/core", "./select2/defaults", "./select2/utils"], function (i, e, r, t, o) {
      var a;
      return null == i.fn.select2 && (a = ["open", "close", "destroy"], i.fn.select2 = function (t) {
        if ("object" == _typeof(t = t || {})) return this.each(function () {
          var e = i.extend(!0, {}, t);
          new r(i(this), e);
        }), this;
        if ("string" != typeof t) throw new Error("Invalid arguments for Select2: " + t);
        var n,
          s = Array.prototype.slice.call(arguments, 1);
        return this.each(function () {
          var e = o.GetData(this, "select2");
          null == e && window.console && console.error && console.error("The select2('" + t + "') method was called on an element that is not using Select2."), n = e[t].apply(e, s);
        }), -1 < a.indexOf(t) ? this : n;
      }), null == i.fn.select2.defaults && (i.fn.select2.defaults = t), r;
    }), {
      define: u.define,
      require: u.require
    });
  function b(e, t) {
    return i.call(e, t);
  }
  function l(e, t) {
    var n,
      s,
      i,
      r,
      o,
      a,
      l,
      c,
      u,
      d,
      p = t && t.split("/"),
      h = y.map,
      f = h && h["*"] || {};
    if (e) {
      for (t = (e = e.split("/")).length - 1, y.nodeIdCompat && _.test(e[t]) && (e[t] = e[t].replace(_, "")), "." === e[0].charAt(0) && p && (e = p.slice(0, p.length - 1).concat(e)), c = 0; c < e.length; c++) "." === (d = e[c]) ? (e.splice(c, 1), --c) : ".." === d && (0 === c || 1 === c && ".." === e[2] || ".." === e[c - 1] || 0 < c && (e.splice(c - 1, 2), c -= 2));
      e = e.join("/");
    }
    if ((p || f) && h) {
      for (c = (n = e.split("/")).length; 0 < c; --c) {
        if (s = n.slice(0, c).join("/"), p) for (u = p.length; 0 < u; --u) if (i = h[p.slice(0, u).join("/")], i = i && i[s]) {
          r = i, o = c;
          break;
        }
        if (r) break;
        !a && f && f[s] && (a = f[s], l = c);
      }
      !r && a && (r = a, o = l), r && (n.splice(0, o, r), e = n.join("/"));
    }
    return e;
  }
  function w(t, n) {
    return function () {
      var e = a.call(arguments, 0);
      return "string" != typeof e[0] && 1 === e.length && e.push(null), _o.apply(p, e.concat([t, n]));
    };
  }
  function x(e) {
    var t;
    if (b(m, e) && (t = m[e], delete m[e], v[e] = !0, r.apply(p, t)), !b(g, e) && !b(v, e)) throw new Error("No " + e);
    return g[e];
  }
  function c(e) {
    var t,
      n = e ? e.indexOf("!") : -1;
    return -1 < n && (t = e.substring(0, n), e = e.substring(n + 1, e.length)), [t, e];
  }
  function A(e) {
    return e ? c(e) : [];
  }
  var u = s.require("jquery.select2");
  return t.fn.select2.amd = s, u;
});

/***/ }),

/***/ "./assets/css/all-themes.css":
/*!***********************************!*\
  !*** ./assets/css/all-themes.css ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/css/bootstrap.css":
/*!**********************************!*\
  !*** ./assets/css/bootstrap.css ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/css/select2.min.css":
/*!************************************!*\
  !*** ./assets/css/select2.min.css ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/css/style.css":
/*!******************************!*\
  !*** ./assets/css/style.css ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/css/waves.css":
/*!******************************!*\
  !*** ./assets/css/waves.css ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXNzZXRzX2pzX2FkbWluX2pzLWFzc2V0c19qc19ib290c3RyYXBfanMtYXNzZXRzX2pzX2pxdWVyeV90YWJsZVRvRXhjZWxfanMtYXNzZXRzX2pzX3NlbGVjdDJfLTEzZmI5Yy5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7OztBQUFBLElBQUksT0FBT0EsTUFBTSxLQUFLLFdBQVcsRUFBRTtFQUMvQixNQUFNLElBQUlDLEtBQUssQ0FBQyw0Q0FBNEMsQ0FBQztBQUNqRTtBQUVBQyxDQUFDLENBQUNDLFFBQVEsR0FBRyxDQUFDLENBQUM7QUFDZkQsQ0FBQyxDQUFDQyxRQUFRLENBQUNDLE9BQU8sR0FBRztFQUNqQkMsTUFBTSxFQUFFO0lBQ0pDLEdBQUcsRUFBRSxTQUFTO0lBQ2RDLElBQUksRUFBRSxTQUFTO0lBQ2ZDLE1BQU0sRUFBRSxTQUFTO0lBQ2pCQyxVQUFVLEVBQUUsU0FBUztJQUNyQkMsTUFBTSxFQUFFLFNBQVM7SUFDakJDLElBQUksRUFBRSxTQUFTO0lBQ2ZDLFNBQVMsRUFBRSxTQUFTO0lBQ3BCQyxJQUFJLEVBQUUsU0FBUztJQUNmQyxJQUFJLEVBQUUsU0FBUztJQUNmQyxLQUFLLEVBQUUsU0FBUztJQUNoQkMsVUFBVSxFQUFFLFNBQVM7SUFDckJDLElBQUksRUFBRSxTQUFTO0lBQ2ZDLE1BQU0sRUFBRSxTQUFTO0lBQ2pCQyxLQUFLLEVBQUUsU0FBUztJQUNoQkMsTUFBTSxFQUFFLFNBQVM7SUFDakJDLFVBQVUsRUFBRSxTQUFTO0lBQ3JCQyxLQUFLLEVBQUUsU0FBUztJQUNoQkMsSUFBSSxFQUFFLFNBQVM7SUFDZkMsUUFBUSxFQUFFLFNBQVM7SUFDbkJDLEtBQUssRUFBRSxTQUFTO0lBQ2hCQyxLQUFLLEVBQUU7RUFDWCxDQUFDO0VBQ0RDLFdBQVcsRUFBRTtJQUNUQyxXQUFXLEVBQUUsaUJBQWlCO0lBQzlCQyxXQUFXLEVBQUUsS0FBSztJQUNsQkMsbUJBQW1CLEVBQUUsS0FBSztJQUMxQkMsa0JBQWtCLEVBQUUsR0FBRztJQUN2QkMsc0JBQXNCLEVBQUUsR0FBRztJQUMzQkMsNEJBQTRCLEVBQUUsSUFBSTtJQUNsQ0MsZUFBZSxFQUFFO0VBQ3JCLENBQUM7RUFDREMsWUFBWSxFQUFFO0lBQ1ZDLFFBQVEsRUFBRSxRQUFRO0lBQ2xCQyxTQUFTLEVBQUU7RUFDZjtBQUNKLENBQUM7O0FBRUQ7QUFDQTtBQUNBO0FBQ0E7QUFDQW5DLENBQUMsQ0FBQ0MsUUFBUSxDQUFDd0IsV0FBVyxHQUFHO0VBQ3JCVyxRQUFRLEVBQUUsb0JBQVk7SUFDbEIsSUFBSUMsS0FBSyxHQUFHLElBQUk7SUFDaEIsSUFBSUMsS0FBSyxHQUFHdEMsQ0FBQyxDQUFDLE1BQU0sQ0FBQztJQUNyQixJQUFJdUMsUUFBUSxHQUFHdkMsQ0FBQyxDQUFDLFVBQVUsQ0FBQzs7SUFFNUI7SUFDQUEsQ0FBQyxDQUFDd0MsTUFBTSxDQUFDLENBQUNDLEtBQUssQ0FBQyxVQUFVQyxDQUFDLEVBQUU7TUFDekIsSUFBSUMsT0FBTyxHQUFHM0MsQ0FBQyxDQUFDMEMsQ0FBQyxDQUFDRSxNQUFNLENBQUM7TUFDekIsSUFBSUYsQ0FBQyxDQUFDRSxNQUFNLENBQUNDLFFBQVEsQ0FBQ0MsV0FBVyxFQUFFLEtBQUssR0FBRyxFQUFFO1FBQUVILE9BQU8sR0FBRzNDLENBQUMsQ0FBQzBDLENBQUMsQ0FBQ0UsTUFBTSxDQUFDLENBQUNHLE1BQU0sRUFBRTtNQUFFO01BRS9FLElBQUksQ0FBQ0osT0FBTyxDQUFDSyxRQUFRLENBQUMsTUFBTSxDQUFDLElBQUlYLEtBQUssQ0FBQ1ksTUFBTSxFQUFFLElBQUlOLE9BQU8sQ0FBQ08sT0FBTyxDQUFDLGNBQWMsQ0FBQyxDQUFDQyxNQUFNLEtBQUssQ0FBQyxFQUFFO1FBQzdGLElBQUksQ0FBQ1IsT0FBTyxDQUFDSyxRQUFRLENBQUMsa0JBQWtCLENBQUMsRUFBRVQsUUFBUSxDQUFDYSxPQUFPLEVBQUU7UUFDN0QsSUFBSSxDQUFDVCxPQUFPLENBQUNLLFFBQVEsQ0FBQyxtQkFBbUIsQ0FBQyxFQUFFVCxRQUFRLENBQUNhLE9BQU8sRUFBRTtRQUM5RGQsS0FBSyxDQUFDZSxXQUFXLENBQUMsY0FBYyxDQUFDO01BQ3JDO0lBQ0osQ0FBQyxDQUFDO0lBRUZyRCxDQUFDLENBQUNzRCxJQUFJLENBQUN0RCxDQUFDLENBQUMsc0JBQXNCLENBQUMsRUFBRSxVQUFVdUQsQ0FBQyxFQUFFQyxHQUFHLEVBQUU7TUFDaER4RCxDQUFDLENBQUN3RCxHQUFHLENBQUMsQ0FBQ0MsSUFBSSxFQUFFLENBQUNDLFdBQVcsQ0FBQyxDQUFDLENBQUM7SUFDaEMsQ0FBQyxDQUFDOztJQUVGO0lBQ0ExRCxDQUFDLENBQUNzRCxJQUFJLENBQUN0RCxDQUFDLENBQUMsdUJBQXVCLENBQUMsRUFBRSxVQUFVdUQsQ0FBQyxFQUFFQyxHQUFHLEVBQUU7TUFDakQsSUFBSUcsY0FBYyxHQUFHM0QsQ0FBQyxDQUFDd0QsR0FBRyxDQUFDLENBQUNJLElBQUksQ0FBQyxTQUFTLENBQUM7TUFFM0NELGNBQWMsQ0FBQ0UsUUFBUSxDQUFDLFNBQVMsQ0FBQztNQUNsQ0YsY0FBYyxDQUFDRixJQUFJLEVBQUUsQ0FBQ0ssSUFBSSxFQUFFO0lBQ2hDLENBQUMsQ0FBQzs7SUFFRjtJQUNBOUQsQ0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDK0QsRUFBRSxDQUFDLE9BQU8sRUFBRSxVQUFVckIsQ0FBQyxFQUFFO01BQ3ZDLElBQUlzQixLQUFLLEdBQUdoRSxDQUFDLENBQUMsSUFBSSxDQUFDO01BQ25CLElBQUlpRSxRQUFRLEdBQUdELEtBQUssQ0FBQ1AsSUFBSSxFQUFFO01BRTNCLElBQUl6RCxDQUFDLENBQUNnRSxLQUFLLENBQUNkLE9BQU8sQ0FBQyxJQUFJLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQyxDQUFDRixRQUFRLENBQUMsTUFBTSxDQUFDLEVBQUU7UUFDNUMsSUFBSWtCLElBQUksR0FBR2xFLENBQUMsQ0FBQzBDLENBQUMsQ0FBQ0UsTUFBTSxDQUFDLENBQUNJLFFBQVEsQ0FBQyxhQUFhLENBQUMsR0FBR04sQ0FBQyxDQUFDRSxNQUFNLEdBQUc1QyxDQUFDLENBQUMwQyxDQUFDLENBQUNFLE1BQU0sQ0FBQyxDQUFDTSxPQUFPLENBQUMsY0FBYyxDQUFDO1FBRS9GbEQsQ0FBQyxDQUFDc0QsSUFBSSxDQUFDdEQsQ0FBQyxDQUFDLHNCQUFzQixDQUFDLENBQUNtRSxHQUFHLENBQUNELElBQUksQ0FBQyxDQUFDVCxJQUFJLEVBQUUsRUFBRSxVQUFVRixDQUFDLEVBQUVDLEdBQUcsRUFBRTtVQUNqRSxJQUFJeEQsQ0FBQyxDQUFDd0QsR0FBRyxDQUFDLENBQUNZLEVBQUUsQ0FBQyxVQUFVLENBQUMsRUFBRTtZQUN2QnBFLENBQUMsQ0FBQ3dELEdBQUcsQ0FBQyxDQUFDYSxJQUFJLEVBQUUsQ0FBQ0MsV0FBVyxDQUFDLFNBQVMsQ0FBQztZQUNwQ3RFLENBQUMsQ0FBQ3dELEdBQUcsQ0FBQyxDQUFDZSxPQUFPLEVBQUU7VUFDcEI7UUFDSixDQUFDLENBQUM7TUFDTjtNQUVBUCxLQUFLLENBQUNNLFdBQVcsQ0FBQyxTQUFTLENBQUM7TUFDNUJMLFFBQVEsQ0FBQ1AsV0FBVyxDQUFDLEdBQUcsQ0FBQztJQUM3QixDQUFDLENBQUM7O0lBRUY7SUFDQXJCLEtBQUssQ0FBQ21DLGFBQWEsQ0FBQyxJQUFJLENBQUM7SUFDekJuQyxLQUFLLENBQUNvQyxvQkFBb0IsQ0FBQyxJQUFJLENBQUM7SUFDaEN6RSxDQUFDLENBQUN3QyxNQUFNLENBQUMsQ0FBQ2tDLE1BQU0sQ0FBQyxZQUFZO01BQ3pCckMsS0FBSyxDQUFDbUMsYUFBYSxDQUFDLEtBQUssQ0FBQztNQUMxQm5DLEtBQUssQ0FBQ29DLG9CQUFvQixDQUFDLEtBQUssQ0FBQztJQUNyQyxDQUFDLENBQUM7RUFDTixDQUFDO0VBQ0RELGFBQWEsRUFBRSx1QkFBVUcsV0FBVyxFQUFFO0lBQ2xDLElBQUksT0FBTzNFLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQ0MsVUFBVSxJQUFJLFdBQVcsRUFBRTtNQUN2QyxJQUFJQyxPQUFPLEdBQUc5RSxDQUFDLENBQUNDLFFBQVEsQ0FBQ0MsT0FBTyxDQUFDdUIsV0FBVztNQUM1QyxJQUFJc0QsTUFBTSxHQUFJL0UsQ0FBQyxDQUFDd0MsTUFBTSxDQUFDLENBQUN1QyxNQUFNLEVBQUUsSUFBSS9FLENBQUMsQ0FBQyxRQUFRLENBQUMsQ0FBQ2dGLFdBQVcsRUFBRSxHQUFHaEYsQ0FBQyxDQUFDLFlBQVksQ0FBQyxDQUFDZ0YsV0FBVyxFQUFFLEdBQUdoRixDQUFDLENBQUMsU0FBUyxDQUFDLENBQUNpRixXQUFXLEVBQUUsQ0FBRTtNQUM1SCxJQUFJQyxHQUFHLEdBQUdsRixDQUFDLENBQUMsT0FBTyxDQUFDO01BRXBCLElBQUksQ0FBQzJFLFdBQVcsRUFBRTtRQUNkTyxHQUFHLENBQUNDLFVBQVUsQ0FBQztVQUNYQyxPQUFPLEVBQUU7UUFDYixDQUFDLENBQUM7TUFDTjtNQUVBRixHQUFHLENBQUNDLFVBQVUsQ0FBQztRQUNYSixNQUFNLEVBQUVBLE1BQU0sR0FBRyxJQUFJO1FBQ3JCTSxLQUFLLEVBQUVQLE9BQU8sQ0FBQ3BELFdBQVc7UUFDMUI0RCxJQUFJLEVBQUVSLE9BQU8sQ0FBQ25ELFdBQVc7UUFDekI0RCxhQUFhLEVBQUVULE9BQU8sQ0FBQ2xELG1CQUFtQjtRQUMxQzRELFlBQVksRUFBRVYsT0FBTyxDQUFDakQsa0JBQWtCO1FBQ3hDNEQsZ0JBQWdCLEVBQUVYLE9BQU8sQ0FBQ2hEO01BQzlCLENBQUMsQ0FBQzs7TUFFRjtNQUNBLElBQUk5QixDQUFDLENBQUNDLFFBQVEsQ0FBQ0MsT0FBTyxDQUFDdUIsV0FBVyxDQUFDTSw0QkFBNEIsRUFBRTtRQUM3RCxJQUFJMkQsSUFBSSxHQUFHMUYsQ0FBQyxDQUFDLHVCQUF1QixDQUFDLENBQUMsQ0FBQyxDQUFDO1FBQ3hDLElBQUkwRixJQUFJLEVBQUU7VUFDTixJQUFJQyxtQkFBbUIsR0FBR0QsSUFBSSxDQUFDRSxTQUFTO1VBQ3hDLElBQUlELG1CQUFtQixHQUFHLEdBQUcsRUFBRVQsR0FBRyxDQUFDQyxVQUFVLENBQUM7WUFBRVUsUUFBUSxFQUFFRixtQkFBbUIsR0FBRztVQUFLLENBQUMsQ0FBQztRQUMzRjtNQUNKO0lBQ0o7RUFDSixDQUFDO0VBQ0RsQixvQkFBb0IsRUFBRSw4QkFBVXFCLFNBQVMsRUFBRTtJQUN2QyxJQUFJeEQsS0FBSyxHQUFHdEMsQ0FBQyxDQUFDLE1BQU0sQ0FBQztJQUNyQixJQUFJK0YsYUFBYSxHQUFHL0YsQ0FBQyxDQUFDLDhCQUE4QixDQUFDO0lBQ3JELElBQUlnRyxLQUFLLEdBQUcxRCxLQUFLLENBQUMwRCxLQUFLLEVBQUU7SUFFekIsSUFBSUYsU0FBUyxFQUFFO01BQ1h4RCxLQUFLLENBQUNzQixJQUFJLENBQUMsb0JBQW9CLENBQUMsQ0FBQ0MsUUFBUSxDQUFDLFlBQVksQ0FBQyxDQUFDb0MsS0FBSyxDQUFDLElBQUksQ0FBQyxDQUFDQyxLQUFLLENBQUMsWUFBWTtRQUNsRmxHLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ3FELFdBQVcsQ0FBQyxZQUFZLENBQUMsQ0FBQzhDLE9BQU8sRUFBRTtNQUMvQyxDQUFDLENBQUM7SUFDTjtJQUVBLElBQUlILEtBQUssR0FBR2hHLENBQUMsQ0FBQ0MsUUFBUSxDQUFDQyxPQUFPLENBQUN1QixXQUFXLENBQUNPLGVBQWUsRUFBRTtNQUN4RE0sS0FBSyxDQUFDdUIsUUFBUSxDQUFDLFdBQVcsQ0FBQztNQUMzQmtDLGFBQWEsQ0FBQ0ssTUFBTSxFQUFFO0lBQzFCLENBQUMsTUFDSTtNQUNEOUQsS0FBSyxDQUFDZSxXQUFXLENBQUMsV0FBVyxDQUFDO01BQzlCMEMsYUFBYSxDQUFDM0MsT0FBTyxFQUFFO0lBQzNCO0VBQ0osQ0FBQztFQUNESCxNQUFNLEVBQUUsa0JBQVk7SUFDaEIsT0FBT2pELENBQUMsQ0FBQyxNQUFNLENBQUMsQ0FBQ2dELFFBQVEsQ0FBQyxjQUFjLENBQUM7RUFDN0M7QUFDSixDQUFDO0FBQ0Q7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQWhELENBQUMsQ0FBQ0MsUUFBUSxDQUFDb0csWUFBWSxHQUFHO0VBQ3RCakUsUUFBUSxFQUFFLG9CQUFZO0lBQ2xCLElBQUlDLEtBQUssR0FBRyxJQUFJO0lBQ2hCLElBQUlpRSxRQUFRLEdBQUd0RyxDQUFDLENBQUMsZUFBZSxDQUFDO0lBQ2pDLElBQUl1QyxRQUFRLEdBQUd2QyxDQUFDLENBQUMsVUFBVSxDQUFDOztJQUU1QjtJQUNBQSxDQUFDLENBQUN3QyxNQUFNLENBQUMsQ0FBQ0MsS0FBSyxDQUFDLFVBQVVDLENBQUMsRUFBRTtNQUN6QixJQUFJQyxPQUFPLEdBQUczQyxDQUFDLENBQUMwQyxDQUFDLENBQUNFLE1BQU0sQ0FBQztNQUN6QixJQUFJRixDQUFDLENBQUNFLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDQyxXQUFXLEVBQUUsS0FBSyxHQUFHLEVBQUU7UUFBRUgsT0FBTyxHQUFHM0MsQ0FBQyxDQUFDMEMsQ0FBQyxDQUFDRSxNQUFNLENBQUMsQ0FBQ0csTUFBTSxFQUFFO01BQUU7TUFFL0UsSUFBSSxDQUFDSixPQUFPLENBQUNLLFFBQVEsQ0FBQyxrQkFBa0IsQ0FBQyxJQUFJWCxLQUFLLENBQUNZLE1BQU0sRUFBRSxJQUFJTixPQUFPLENBQUNPLE9BQU8sQ0FBQyxlQUFlLENBQUMsQ0FBQ0MsTUFBTSxLQUFLLENBQUMsRUFBRTtRQUMxRyxJQUFJLENBQUNSLE9BQU8sQ0FBQ0ssUUFBUSxDQUFDLE1BQU0sQ0FBQyxFQUFFVCxRQUFRLENBQUNhLE9BQU8sRUFBRTtRQUNqRGtELFFBQVEsQ0FBQ2pELFdBQVcsQ0FBQyxNQUFNLENBQUM7TUFDaEM7SUFDSixDQUFDLENBQUM7SUFFRnJELENBQUMsQ0FBQyxtQkFBbUIsQ0FBQyxDQUFDK0QsRUFBRSxDQUFDLE9BQU8sRUFBRSxZQUFZO01BQzNDdUMsUUFBUSxDQUFDaEMsV0FBVyxDQUFDLE1BQU0sQ0FBQztNQUM1QixJQUFJakMsS0FBSyxDQUFDWSxNQUFNLEVBQUUsRUFBRTtRQUFFVixRQUFRLENBQUM2RCxNQUFNLEVBQUU7TUFBRSxDQUFDLE1BQU07UUFBRTdELFFBQVEsQ0FBQ2EsT0FBTyxFQUFFO01BQUU7SUFDMUUsQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUNESCxNQUFNLEVBQUUsa0JBQVk7SUFDaEIsT0FBT2pELENBQUMsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDZ0QsUUFBUSxDQUFDLE1BQU0sQ0FBQztFQUMvQztBQUNKLENBQUM7QUFDRGhELENBQUMsQ0FBQ0MsUUFBUSxDQUFDc0csYUFBYSxHQUFHO0VBQ3ZCbkUsUUFBUSxFQUFFLG9CQUFZO0lBQ2xCLElBQUlDLEtBQUssR0FBRyxJQUFJO0lBQ2hCLElBQUlpRSxRQUFRLEdBQUd0RyxDQUFDLENBQUMsZ0JBQWdCLENBQUM7SUFDbEMsSUFBSXVDLFFBQVEsR0FBR3ZDLENBQUMsQ0FBQyxVQUFVLENBQUM7O0lBRTVCO0lBQ0FBLENBQUMsQ0FBQ3dDLE1BQU0sQ0FBQyxDQUFDQyxLQUFLLENBQUMsVUFBVUMsQ0FBQyxFQUFFO01BQ3pCLElBQUlDLE9BQU8sR0FBRzNDLENBQUMsQ0FBQzBDLENBQUMsQ0FBQ0UsTUFBTSxDQUFDO01BQ3pCLElBQUlGLENBQUMsQ0FBQ0UsTUFBTSxDQUFDQyxRQUFRLENBQUNDLFdBQVcsRUFBRSxLQUFLLEdBQUcsRUFBRTtRQUFFSCxPQUFPLEdBQUczQyxDQUFDLENBQUMwQyxDQUFDLENBQUNFLE1BQU0sQ0FBQyxDQUFDRyxNQUFNLEVBQUU7TUFBRTtNQUUvRSxJQUFJLENBQUNKLE9BQU8sQ0FBQ0ssUUFBUSxDQUFDLG1CQUFtQixDQUFDLElBQUlYLEtBQUssQ0FBQ1ksTUFBTSxFQUFFLElBQUlOLE9BQU8sQ0FBQ08sT0FBTyxDQUFDLGdCQUFnQixDQUFDLENBQUNDLE1BQU0sS0FBSyxDQUFDLEVBQUU7UUFDNUcsSUFBSSxDQUFDUixPQUFPLENBQUNLLFFBQVEsQ0FBQyxNQUFNLENBQUMsRUFBRVQsUUFBUSxDQUFDYSxPQUFPLEVBQUU7UUFDakRrRCxRQUFRLENBQUNqRCxXQUFXLENBQUMsTUFBTSxDQUFDO01BQ2hDO0lBQ0osQ0FBQyxDQUFDO0lBRUZyRCxDQUFDLENBQUMsb0JBQW9CLENBQUMsQ0FBQytELEVBQUUsQ0FBQyxPQUFPLEVBQUUsWUFBWTtNQUM1Q3VDLFFBQVEsQ0FBQ2hDLFdBQVcsQ0FBQyxNQUFNLENBQUM7TUFDNUIsSUFBSWpDLEtBQUssQ0FBQ1ksTUFBTSxFQUFFLEVBQUU7UUFBRVYsUUFBUSxDQUFDNkQsTUFBTSxFQUFFO01BQUUsQ0FBQyxNQUFNO1FBQUU3RCxRQUFRLENBQUNhLE9BQU8sRUFBRTtNQUFFO0lBQzFFLENBQUMsQ0FBQztFQUNOLENBQUM7RUFDREgsTUFBTSxFQUFFLGtCQUFZO0lBQ2hCLE9BQU9qRCxDQUFDLENBQUMsaUJBQWlCLENBQUMsQ0FBQ2dELFFBQVEsQ0FBQyxNQUFNLENBQUM7RUFDaEQ7QUFDSixDQUFDOztBQUVEOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSXdELFVBQVUsR0FBR3hHLENBQUMsQ0FBQyxhQUFhLENBQUM7QUFDakNBLENBQUMsQ0FBQ0MsUUFBUSxDQUFDd0csTUFBTSxHQUFHO0VBQ2hCckUsUUFBUSxFQUFFLG9CQUFZO0lBQ2xCLElBQUlDLEtBQUssR0FBRyxJQUFJOztJQUVoQjtJQUNBckMsQ0FBQyxDQUFDLFlBQVksQ0FBQyxDQUFDK0QsRUFBRSxDQUFDLE9BQU8sRUFBRSxZQUFZO01BQ3BDMUIsS0FBSyxDQUFDcUUsYUFBYSxFQUFFO0lBQ3pCLENBQUMsQ0FBQzs7SUFFRjtJQUNBRixVQUFVLENBQUM1QyxJQUFJLENBQUMsZUFBZSxDQUFDLENBQUNHLEVBQUUsQ0FBQyxPQUFPLEVBQUUsWUFBWTtNQUNyRDFCLEtBQUssQ0FBQ3NFLGFBQWEsRUFBRTtJQUN6QixDQUFDLENBQUM7O0lBRUY7SUFDQUgsVUFBVSxDQUFDNUMsSUFBSSxDQUFDLG9CQUFvQixDQUFDLENBQUNHLEVBQUUsQ0FBQyxPQUFPLEVBQUUsVUFBVXJCLENBQUMsRUFBRTtNQUMzRCxJQUFJQSxDQUFDLENBQUNrRSxPQUFPLElBQUksRUFBRSxFQUFFO1FBQ2pCdkUsS0FBSyxDQUFDc0UsYUFBYSxFQUFFO01BQ3pCO0lBQ0osQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUNERCxhQUFhLEVBQUUseUJBQVk7SUFDdkJGLFVBQVUsQ0FBQzNDLFFBQVEsQ0FBQyxNQUFNLENBQUM7SUFDM0IyQyxVQUFVLENBQUM1QyxJQUFJLENBQUMsb0JBQW9CLENBQUMsQ0FBQ2lELEtBQUssRUFBRTtFQUNqRCxDQUFDO0VBQ0RGLGFBQWEsRUFBRSx5QkFBWTtJQUN2QkgsVUFBVSxDQUFDbkQsV0FBVyxDQUFDLE1BQU0sQ0FBQztJQUM5Qm1ELFVBQVUsQ0FBQzVDLElBQUksQ0FBQyxvQkFBb0IsQ0FBQyxDQUFDSixHQUFHLENBQUMsRUFBRSxDQUFDO0VBQ2pEO0FBQ0osQ0FBQztBQUNEOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0F4RCxDQUFDLENBQUNDLFFBQVEsQ0FBQzZHLE1BQU0sR0FBRztFQUNoQjFFLFFBQVEsRUFBRSxvQkFBWTtJQUNsQixJQUFJRSxLQUFLLEdBQUd0QyxDQUFDLENBQUMsTUFBTSxDQUFDO0lBQ3JCLElBQUl1QyxRQUFRLEdBQUd2QyxDQUFDLENBQUMsVUFBVSxDQUFDOztJQUU1QjtJQUNBQSxDQUFDLENBQUMsT0FBTyxDQUFDLENBQUMrRCxFQUFFLENBQUMsT0FBTyxFQUFFLFlBQVk7TUFDL0J6QixLQUFLLENBQUNnQyxXQUFXLENBQUMsY0FBYyxDQUFDO01BQ2pDLElBQUloQyxLQUFLLENBQUNVLFFBQVEsQ0FBQyxjQUFjLENBQUMsRUFBRTtRQUFFVCxRQUFRLENBQUM2RCxNQUFNLEVBQUU7TUFBRSxDQUFDLE1BQU07UUFBRTdELFFBQVEsQ0FBQ2EsT0FBTyxFQUFFO01BQUU7SUFDMUYsQ0FBQyxDQUFDOztJQUVGO0lBQ0FwRCxDQUFDLENBQUMsMEJBQTBCLENBQUMsQ0FBQytELEVBQUUsQ0FBQyxPQUFPLEVBQUUsWUFBWTtNQUNsRCxJQUFJZ0QsU0FBUyxHQUFHL0csQ0FBQyxDQUFDLGdCQUFnQixDQUFDLENBQUNvRSxFQUFFLENBQUMsVUFBVSxDQUFDO01BQ2xELElBQUk0QyxlQUFlLEdBQUdoSCxDQUFDLENBQUMsa0JBQWtCLENBQUM7TUFFM0MsSUFBSStHLFNBQVMsRUFBRTtRQUNYQyxlQUFlLENBQUN6QyxPQUFPLENBQUMsWUFBWTtVQUNoQ3lDLGVBQWUsQ0FBQzNELFdBQVcsQ0FBQyxJQUFJLENBQUMsQ0FBQzRELFVBQVUsQ0FBQyxPQUFPLENBQUM7UUFDekQsQ0FBQyxDQUFDO01BQ047SUFDSixDQUFDLENBQUM7RUFDTjtBQUNKLENBQUM7QUFDRDs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBakgsQ0FBQyxDQUFDQyxRQUFRLENBQUNpSCxLQUFLLEdBQUc7RUFDZjlFLFFBQVEsRUFBRSxrQkFBVStFLGVBQWUsRUFBRTtJQUNqQ0EsZUFBZSxHQUFHQSxlQUFlLElBQUluSCxDQUFDLENBQUMsTUFBTSxDQUFDOztJQUU5QztJQUNBbUgsZUFBZSxDQUFDdkQsSUFBSSxDQUFDLGVBQWUsQ0FBQyxDQUFDaUQsS0FBSyxDQUFDLFlBQVk7TUFDcEQ3RyxDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNvSCxPQUFPLENBQUMsWUFBWSxDQUFDLENBQUN2RCxRQUFRLENBQUMsU0FBUyxDQUFDO0lBQ3JELENBQUMsQ0FBQzs7SUFFRjtJQUNBc0QsZUFBZSxDQUFDdkQsSUFBSSxDQUFDLGVBQWUsQ0FBQyxDQUFDeUQsUUFBUSxDQUFDLFlBQVk7TUFDdkQsSUFBSXJELEtBQUssR0FBR2hFLENBQUMsQ0FBQyxJQUFJLENBQUM7TUFDbkIsSUFBSWdFLEtBQUssQ0FBQ2QsT0FBTyxDQUFDLGFBQWEsQ0FBQyxDQUFDRixRQUFRLENBQUMsWUFBWSxDQUFDLEVBQUU7UUFDckQsSUFBSWdCLEtBQUssQ0FBQ1IsR0FBRyxFQUFFLElBQUksRUFBRSxFQUFFO1VBQUVRLEtBQUssQ0FBQ2QsT0FBTyxDQUFDLFlBQVksQ0FBQyxDQUFDRyxXQUFXLENBQUMsU0FBUyxDQUFDO1FBQUU7TUFDakYsQ0FBQyxNQUNJO1FBQ0RXLEtBQUssQ0FBQ2QsT0FBTyxDQUFDLFlBQVksQ0FBQyxDQUFDRyxXQUFXLENBQUMsU0FBUyxDQUFDO01BQ3REO0lBQ0osQ0FBQyxDQUFDOztJQUVGO0lBQ0E4RCxlQUFlLENBQUNwRCxFQUFFLENBQUMsT0FBTyxFQUFFLG9DQUFvQyxFQUFFLFlBQVk7TUFDMUUvRCxDQUFDLENBQUMsSUFBSSxDQUFDLENBQUMrQyxNQUFNLEVBQUUsQ0FBQ2EsSUFBSSxDQUFDLE9BQU8sQ0FBQyxDQUFDaUQsS0FBSyxFQUFFO0lBQzFDLENBQUMsQ0FBQzs7SUFFRjtJQUNBTSxlQUFlLENBQUN2RCxJQUFJLENBQUMsZUFBZSxDQUFDLENBQUNOLElBQUksQ0FBQyxZQUFZO01BQ25ELElBQUl0RCxDQUFDLENBQUMsSUFBSSxDQUFDLENBQUN3RCxHQUFHLEVBQUUsS0FBSyxFQUFFLEVBQUU7UUFDdEJ4RCxDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNrRCxPQUFPLENBQUMsWUFBWSxDQUFDLENBQUNXLFFBQVEsQ0FBQyxTQUFTLENBQUM7TUFDckQ7SUFDSixDQUFDLENBQUM7RUFDTjtBQUNKLENBQUM7QUFDRDs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBN0QsQ0FBQyxDQUFDQyxRQUFRLENBQUNxSCxNQUFNLEdBQUc7RUFDaEJsRixRQUFRLEVBQUUsb0JBQVk7SUFDbEIsSUFBSXBDLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzJDLFlBQVksRUFBRTtNQUFFdkgsQ0FBQyxDQUFDLGlCQUFpQixDQUFDLENBQUN1SCxZQUFZLEVBQUU7SUFBRTtFQUNsRTtBQUNKLENBQUM7QUFDRDs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQXZILENBQUMsQ0FBQ0MsUUFBUSxDQUFDZ0MsWUFBWSxHQUFHO0VBQ3RCRyxRQUFRLEVBQUUsb0JBQVk7SUFDbEIsSUFBSUMsS0FBSyxHQUFHLElBQUk7SUFFaEJyQyxDQUFDLENBQUMsZ0NBQWdDLENBQUMsQ0FBQytELEVBQUUsQ0FBQztNQUNuQyxrQkFBa0IsRUFBRSwwQkFBWTtRQUM1QixJQUFJeUQsUUFBUSxHQUFHbkYsS0FBSyxDQUFDb0YsY0FBYyxDQUFDLElBQUksQ0FBQztRQUN6Q3BGLEtBQUssQ0FBQ3FGLG1CQUFtQixDQUFDRixRQUFRLEVBQUVBLFFBQVEsQ0FBQ3RGLFFBQVEsQ0FBQztNQUMxRCxDQUFDO01BQ0QsbUJBQW1CLEVBQUUsMkJBQVk7UUFDN0IsSUFBSXNGLFFBQVEsR0FBR25GLEtBQUssQ0FBQ29GLGNBQWMsQ0FBQyxJQUFJLENBQUM7UUFDekMsSUFBSUQsUUFBUSxDQUFDdEYsUUFBUSxJQUFJc0YsUUFBUSxDQUFDckYsU0FBUyxFQUFFO1VBQ3pDRSxLQUFLLENBQUNzRixpQkFBaUIsQ0FBQ0gsUUFBUSxFQUFFLFlBQVksQ0FBRSxDQUFDLENBQUM7UUFDdEQ7TUFDSixDQUFDO01BQ0Qsa0JBQWtCLEVBQUUsd0JBQVU5RSxDQUFDLEVBQUU7UUFDN0IsSUFBSThFLFFBQVEsR0FBR25GLEtBQUssQ0FBQ29GLGNBQWMsQ0FBQyxJQUFJLENBQUM7UUFDekMsSUFBSUQsUUFBUSxDQUFDckYsU0FBUyxFQUFFO1VBQ3BCTyxDQUFDLENBQUNrRixjQUFjLEVBQUU7VUFDbEJ2RixLQUFLLENBQUNxRixtQkFBbUIsQ0FBQ0YsUUFBUSxFQUFFQSxRQUFRLENBQUNyRixTQUFTLENBQUM7VUFDdkRFLEtBQUssQ0FBQ3NGLGlCQUFpQixDQUFDSCxRQUFRLEVBQUUsWUFBWTtZQUMxQ0EsUUFBUSxDQUFDQSxRQUFRLENBQUNuRSxXQUFXLENBQUMsTUFBTSxDQUFDO1VBQ3pDLENBQUMsQ0FBQztRQUNOO01BQ0o7SUFDSixDQUFDLENBQUM7RUFFTixDQUFDO0VBQ0RvRSxjQUFjLEVBQUUsd0JBQVU3RSxNQUFNLEVBQUU7SUFDOUIsSUFBSVYsUUFBUSxHQUFHbEMsQ0FBQyxDQUFDQyxRQUFRLENBQUNDLE9BQU8sQ0FBQytCLFlBQVksQ0FBQ0MsUUFBUTtNQUFFQyxTQUFTLEdBQUduQyxDQUFDLENBQUNDLFFBQVEsQ0FBQ0MsT0FBTyxDQUFDK0IsWUFBWSxDQUFDRSxTQUFTO0lBQzlHLElBQUlxRixRQUFRLEdBQUd4SCxDQUFDLENBQUM0QyxNQUFNLENBQUM7TUFBRVgsWUFBWSxHQUFHakMsQ0FBQyxDQUFDLGdCQUFnQixFQUFFNEMsTUFBTSxDQUFDO0lBRXBFLElBQUk0RSxRQUFRLENBQUNyRSxNQUFNLEdBQUcsQ0FBQyxFQUFFO01BQ3JCLElBQUkwRSxVQUFVLEdBQUdMLFFBQVEsQ0FBQ00sSUFBSSxDQUFDLFdBQVcsQ0FBQztNQUMzQyxJQUFJQyxXQUFXLEdBQUdQLFFBQVEsQ0FBQ00sSUFBSSxDQUFDLFlBQVksQ0FBQztNQUM3QyxJQUFJRCxVQUFVLEtBQUtHLFNBQVMsRUFBRTtRQUFFOUYsUUFBUSxHQUFHMkYsVUFBVTtNQUFFO01BQ3ZELElBQUlFLFdBQVcsS0FBS0MsU0FBUyxFQUFFO1FBQUU3RixTQUFTLEdBQUc0RixXQUFXO01BQUU7SUFDOUQ7SUFFQSxPQUFPO01BQ0huRixNQUFNLEVBQUVBLE1BQU07TUFDZDRFLFFBQVEsRUFBRUEsUUFBUTtNQUNsQnZGLFlBQVksRUFBRUEsWUFBWTtNQUMxQkMsUUFBUSxFQUFFQSxRQUFRO01BQ2xCQyxTQUFTLEVBQUVBO0lBQ2YsQ0FBQztFQUNMLENBQUM7RUFDRHVGLG1CQUFtQixFQUFFLDZCQUFVSSxJQUFJLEVBQUVHLGFBQWEsRUFBRTtJQUNoRCxJQUFJQSxhQUFhLEVBQUU7TUFDZkgsSUFBSSxDQUFDTixRQUFRLENBQUMzRCxRQUFRLENBQUMsb0JBQW9CLENBQUM7TUFDNUNpRSxJQUFJLENBQUM3RixZQUFZLENBQUM0QixRQUFRLENBQUMsNEJBQTRCLENBQUM7TUFDeERpRSxJQUFJLENBQUM3RixZQUFZLENBQUM0QixRQUFRLENBQUNvRSxhQUFhLENBQUM7SUFDN0M7RUFDSixDQUFDO0VBQ0ROLGlCQUFpQixFQUFFLDJCQUFVRyxJQUFJLEVBQUVJLFFBQVEsRUFBRTtJQUN6QyxJQUFJQyxZQUFZLEdBQUcsOEVBQThFO0lBQ2pHTCxJQUFJLENBQUNOLFFBQVEsQ0FBQ1ksR0FBRyxDQUFDRCxZQUFZLEVBQUUsWUFBWTtNQUN4Q0wsSUFBSSxDQUFDTixRQUFRLENBQUNuRSxXQUFXLENBQUMsb0JBQW9CLENBQUM7TUFDL0N5RSxJQUFJLENBQUM3RixZQUFZLENBQUNvQixXQUFXLENBQUMsNEJBQTRCLENBQUM7TUFDM0R5RSxJQUFJLENBQUM3RixZQUFZLENBQUNvQixXQUFXLENBQUN5RSxJQUFJLENBQUM1RixRQUFRLENBQUM7TUFDNUM0RixJQUFJLENBQUM3RixZQUFZLENBQUNvQixXQUFXLENBQUN5RSxJQUFJLENBQUMzRixTQUFTLENBQUM7TUFFN0MsSUFBSSxPQUFPK0YsUUFBUSxJQUFJLFVBQVUsRUFBRTtRQUMvQkEsUUFBUSxFQUFFO01BQ2Q7SUFDSixDQUFDLENBQUM7RUFDTjtBQUNKLENBQUM7QUFDRDs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUlHLElBQUksR0FBRyxnQkFBZ0I7QUFDM0IsSUFBSUMsSUFBSSxHQUFHLHNCQUFzQjtBQUNqQyxJQUFJQyxJQUFJLEdBQUcsc0JBQXNCO0FBQ2pDLElBQUlDLEtBQUssR0FBRyxPQUFPO0FBQ25CLElBQUlDLE9BQU8sR0FBRyxpQkFBaUI7QUFDL0IsSUFBSUMsTUFBTSxHQUFHLGVBQWU7QUFDNUIsSUFBSUMsTUFBTSxHQUFHLFFBQVE7QUFFckIzSSxDQUFDLENBQUNDLFFBQVEsQ0FBQzJJLE9BQU8sR0FBRztFQUNqQnhHLFFBQVEsRUFBRSxvQkFBWTtJQUNsQixJQUFJQyxLQUFLLEdBQUcsSUFBSTtJQUNoQixJQUFJd0csU0FBUyxHQUFHeEcsS0FBSyxDQUFDeUcsWUFBWSxFQUFFO0lBRXBDLElBQUlELFNBQVMsS0FBSyxFQUFFLEVBQUU3SSxDQUFDLENBQUMsTUFBTSxDQUFDLENBQUM2RCxRQUFRLENBQUN4QixLQUFLLENBQUN5RyxZQUFZLEVBQUUsQ0FBQztFQUNsRSxDQUFDO0VBQ0RDLFVBQVUsRUFBRSxzQkFBWTtJQUNwQixJQUFJQyxTQUFTLEdBQUdDLFNBQVMsQ0FBQ0QsU0FBUyxDQUFDbEcsV0FBVyxFQUFFO0lBRWpELElBQUksT0FBTyxDQUFDb0csSUFBSSxDQUFDRixTQUFTLENBQUMsRUFBRTtNQUN6QixPQUFPWCxJQUFJO0lBQ2YsQ0FBQyxNQUFNLElBQUksUUFBUSxDQUFDYSxJQUFJLENBQUNGLFNBQVMsQ0FBQyxFQUFFO01BQ2pDLE9BQU9ULElBQUk7SUFDZixDQUFDLE1BQU0sSUFBSSxVQUFVLENBQUNXLElBQUksQ0FBQ0YsU0FBUyxDQUFDLEVBQUU7TUFDbkMsT0FBT1YsSUFBSTtJQUNmLENBQUMsTUFBTSxJQUFJLE1BQU0sQ0FBQ1ksSUFBSSxDQUFDRixTQUFTLENBQUMsRUFBRTtNQUMvQixPQUFPUixLQUFLO0lBQ2hCLENBQUMsTUFBTSxJQUFJLFNBQVMsQ0FBQ1UsSUFBSSxDQUFDRixTQUFTLENBQUMsRUFBRTtNQUNsQyxPQUFPTixNQUFNO0lBQ2pCLENBQUMsTUFBTSxJQUFJLFVBQVUsQ0FBQ1EsSUFBSSxDQUFDRixTQUFTLENBQUMsRUFBRTtNQUNuQyxPQUFPUCxPQUFPO0lBQ2xCLENBQUMsTUFBTSxJQUFJLENBQUMsQ0FBQ1EsU0FBUyxDQUFDRCxTQUFTLENBQUNHLEtBQUssQ0FBQywwQkFBMEIsQ0FBQyxFQUFFO01BQ2hFLE9BQU9SLE1BQU07SUFDakI7SUFFQSxPQUFPWCxTQUFTO0VBQ3BCLENBQUM7RUFDRGMsWUFBWSxFQUFFLHdCQUFZO0lBQ3RCLElBQUlGLE9BQU8sR0FBRyxJQUFJLENBQUNHLFVBQVUsRUFBRTtJQUUvQixJQUFJSCxPQUFPLEtBQUtQLElBQUksRUFBRTtNQUNsQixPQUFPLE1BQU07SUFDakIsQ0FBQyxNQUFNLElBQUlPLE9BQU8sS0FBS0wsSUFBSSxFQUFFO01BQ3pCLE9BQU8sTUFBTTtJQUNqQixDQUFDLE1BQU0sSUFBSUssT0FBTyxLQUFLTixJQUFJLEVBQUU7TUFDekIsT0FBTyxNQUFNO0lBQ2pCLENBQUMsTUFBTSxJQUFJTSxPQUFPLEtBQUtKLEtBQUssRUFBRTtNQUMxQixPQUFPLE9BQU87SUFDbEIsQ0FBQyxNQUFNLElBQUlJLE9BQU8sS0FBS0YsTUFBTSxFQUFFO01BQzNCLE9BQU8sUUFBUTtJQUNuQixDQUFDLE1BQU0sSUFBSUUsT0FBTyxLQUFLSCxPQUFPLEVBQUU7TUFDNUIsT0FBTyxTQUFTO0lBQ3BCLENBQUMsTUFBTSxJQUFJRyxPQUFPLEtBQUtELE1BQU0sRUFBRTtNQUMzQixPQUFPLFFBQVE7SUFDbkIsQ0FBQyxNQUFNO01BQ0gsT0FBTyxFQUFFO0lBQ2I7RUFDSjtBQUNKLENBQUM7QUFDRDs7QUFFQTNJLENBQUMsQ0FBQyxZQUFZO0VBQ1ZBLENBQUMsQ0FBQ0MsUUFBUSxDQUFDMkksT0FBTyxDQUFDeEcsUUFBUSxFQUFFO0VBQzdCcEMsQ0FBQyxDQUFDQyxRQUFRLENBQUN3QixXQUFXLENBQUNXLFFBQVEsRUFBRTtFQUNqQ3BDLENBQUMsQ0FBQ0MsUUFBUSxDQUFDb0csWUFBWSxDQUFDakUsUUFBUSxFQUFFO0VBQ2xDcEMsQ0FBQyxDQUFDQyxRQUFRLENBQUNzRyxhQUFhLENBQUNuRSxRQUFRLEVBQUU7RUFDbkNwQyxDQUFDLENBQUNDLFFBQVEsQ0FBQzZHLE1BQU0sQ0FBQzFFLFFBQVEsRUFBRTtFQUM1QnBDLENBQUMsQ0FBQ0MsUUFBUSxDQUFDZ0MsWUFBWSxDQUFDRyxRQUFRLEVBQUU7RUFDbENwQyxDQUFDLENBQUNDLFFBQVEsQ0FBQ2lILEtBQUssQ0FBQzlFLFFBQVEsRUFBRTtFQUMzQnBDLENBQUMsQ0FBQ0MsUUFBUSxDQUFDcUgsTUFBTSxDQUFDbEYsUUFBUSxFQUFFO0VBQzVCcEMsQ0FBQyxDQUFDQyxRQUFRLENBQUN3RyxNQUFNLENBQUNyRSxRQUFRLEVBQUU7RUFFNUJnSCxVQUFVLENBQUMsWUFBWTtJQUFFcEosQ0FBQyxDQUFDLHNCQUFzQixDQUFDLENBQUNvRCxPQUFPLEVBQUU7RUFBRSxDQUFDLEVBQUUsRUFBRSxDQUFDO0FBQ3hFLENBQUMsQ0FBQzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FDMWVxQjtBQUN2QlosTUFBTSxDQUFDMUMsTUFBTSxHQUFHRSxnREFBQztBQUNqQndDLE1BQU0sQ0FBQ3hDLENBQUMsR0FBR0EsZ0RBQUM7QUFDWnFKLHFCQUFNLENBQUN2SixNQUFNLEdBQUdFLGdEQUFDO0FBRWpCLENBQUMsVUFBVUEsQ0FBQyxFQUFFO0VBQ1osWUFBWTs7RUFFWjtFQUNBO0VBRUEsU0FBU3NKLGFBQWEsR0FBRztJQUN2QixJQUFJQyxFQUFFLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLFdBQVcsQ0FBQztJQUU1QyxJQUFJQyxrQkFBa0IsR0FBRztNQUN2QkMsZ0JBQWdCLEVBQUcscUJBQXFCO01BQ3hDQyxhQUFhLEVBQU0sZUFBZTtNQUNsQ0MsV0FBVyxFQUFRLCtCQUErQjtNQUNsREMsVUFBVSxFQUFTO0lBQ3JCLENBQUM7SUFFRCxLQUFLLElBQUlDLElBQUksSUFBSUwsa0JBQWtCLEVBQUU7TUFDbkMsSUFBSUgsRUFBRSxDQUFDUyxLQUFLLENBQUNELElBQUksQ0FBQyxLQUFLL0IsU0FBUyxFQUFFO1FBQ2hDLE9BQU87VUFBRWlDLEdBQUcsRUFBRVAsa0JBQWtCLENBQUNLLElBQUk7UUFBRSxDQUFDO01BQzFDO0lBQ0Y7SUFFQSxPQUFPLEtBQUssRUFBQztFQUNmOztFQUVBO0VBQ0EvSixDQUFDLENBQUM0RSxFQUFFLENBQUNzRixvQkFBb0IsR0FBRyxVQUFVQyxRQUFRLEVBQUU7SUFDOUMsSUFBSUMsTUFBTSxHQUFHLEtBQUs7SUFDbEIsSUFBSWxGLEdBQUcsR0FBRyxJQUFJO0lBQ2RsRixDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNvSSxHQUFHLENBQUMsaUJBQWlCLEVBQUUsWUFBWTtNQUFFZ0MsTUFBTSxHQUFHLElBQUk7SUFBQyxDQUFDLENBQUM7SUFDN0QsSUFBSWxDLFFBQVEsR0FBRyxTQUFYQSxRQUFRLEdBQWU7TUFBRSxJQUFJLENBQUNrQyxNQUFNLEVBQUVwSyxDQUFDLENBQUNrRixHQUFHLENBQUMsQ0FBQ21GLE9BQU8sQ0FBQ3JLLENBQUMsQ0FBQ3NLLE9BQU8sQ0FBQ1IsVUFBVSxDQUFDRyxHQUFHLENBQUM7SUFBQyxDQUFDO0lBQ3BGYixVQUFVLENBQUNsQixRQUFRLEVBQUVpQyxRQUFRLENBQUM7SUFDOUIsT0FBTyxJQUFJO0VBQ2IsQ0FBQztFQUVEbkssQ0FBQyxDQUFDLFlBQVk7SUFDWkEsQ0FBQyxDQUFDc0ssT0FBTyxDQUFDUixVQUFVLEdBQUdSLGFBQWEsRUFBRTtJQUV0QyxJQUFJLENBQUN0SixDQUFDLENBQUNzSyxPQUFPLENBQUNSLFVBQVUsRUFBRTtJQUUzQjlKLENBQUMsQ0FBQ3VLLEtBQUssQ0FBQ0MsT0FBTyxDQUFDQyxlQUFlLEdBQUc7TUFDaENDLFFBQVEsRUFBRTFLLENBQUMsQ0FBQ3NLLE9BQU8sQ0FBQ1IsVUFBVSxDQUFDRyxHQUFHO01BQ2xDVSxZQUFZLEVBQUUzSyxDQUFDLENBQUNzSyxPQUFPLENBQUNSLFVBQVUsQ0FBQ0csR0FBRztNQUN0Q1csTUFBTSxFQUFFLGdCQUFVbEksQ0FBQyxFQUFFO1FBQ25CLElBQUkxQyxDQUFDLENBQUMwQyxDQUFDLENBQUNFLE1BQU0sQ0FBQyxDQUFDd0IsRUFBRSxDQUFDLElBQUksQ0FBQyxFQUFFLE9BQU8xQixDQUFDLENBQUNtSSxTQUFTLENBQUNDLE9BQU8sQ0FBQ0MsS0FBSyxDQUFDLElBQUksRUFBRUMsU0FBUyxDQUFDO01BQzdFO0lBQ0YsQ0FBQztFQUNILENBQUMsQ0FBQztBQUVKLENBQUMsQ0FBQ2xMLE1BQU0sQ0FBQzs7QUFFVDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFHQSxDQUFDLFVBQVVFLENBQUMsRUFBRTtFQUNaLFlBQVk7O0VBRVo7RUFDQTtFQUVBLElBQUlpTCxPQUFPLEdBQUcsd0JBQXdCO0VBQ3RDLElBQUlDLEtBQUssR0FBSyxTQUFWQSxLQUFLLENBQWUzQixFQUFFLEVBQUU7SUFDMUJ2SixDQUFDLENBQUN1SixFQUFFLENBQUMsQ0FBQ3hGLEVBQUUsQ0FBQyxPQUFPLEVBQUVrSCxPQUFPLEVBQUUsSUFBSSxDQUFDRSxLQUFLLENBQUM7RUFDeEMsQ0FBQztFQUVERCxLQUFLLENBQUNFLE9BQU8sR0FBRyxPQUFPO0VBRXZCRixLQUFLLENBQUNHLG1CQUFtQixHQUFHLEdBQUc7RUFFL0JILEtBQUssQ0FBQ0ksU0FBUyxDQUFDSCxLQUFLLEdBQUcsVUFBVXpJLENBQUMsRUFBRTtJQUNuQyxJQUFJc0IsS0FBSyxHQUFNaEUsQ0FBQyxDQUFDLElBQUksQ0FBQztJQUN0QixJQUFJdUwsUUFBUSxHQUFHdkgsS0FBSyxDQUFDd0gsSUFBSSxDQUFDLGFBQWEsQ0FBQztJQUV4QyxJQUFJLENBQUNELFFBQVEsRUFBRTtNQUNiQSxRQUFRLEdBQUd2SCxLQUFLLENBQUN3SCxJQUFJLENBQUMsTUFBTSxDQUFDO01BQzdCRCxRQUFRLEdBQUdBLFFBQVEsSUFBSUEsUUFBUSxDQUFDRSxPQUFPLENBQUMsZ0JBQWdCLEVBQUUsRUFBRSxDQUFDLEVBQUM7SUFDaEU7O0lBRUEsSUFBSUMsT0FBTyxHQUFHMUwsQ0FBQyxDQUFDdUwsUUFBUSxDQUFDO0lBRXpCLElBQUk3SSxDQUFDLEVBQUVBLENBQUMsQ0FBQ2tGLGNBQWMsRUFBRTtJQUV6QixJQUFJLENBQUM4RCxPQUFPLENBQUN2SSxNQUFNLEVBQUU7TUFDbkJ1SSxPQUFPLEdBQUcxSCxLQUFLLENBQUNvRCxPQUFPLENBQUMsUUFBUSxDQUFDO0lBQ25DO0lBRUFzRSxPQUFPLENBQUNyQixPQUFPLENBQUMzSCxDQUFDLEdBQUcxQyxDQUFDLENBQUMyTCxLQUFLLENBQUMsZ0JBQWdCLENBQUMsQ0FBQztJQUU5QyxJQUFJakosQ0FBQyxDQUFDa0osa0JBQWtCLEVBQUUsRUFBRTtJQUU1QkYsT0FBTyxDQUFDckksV0FBVyxDQUFDLElBQUksQ0FBQztJQUV6QixTQUFTd0ksYUFBYSxHQUFHO01BQ3ZCO01BQ0FILE9BQU8sQ0FBQ0ksTUFBTSxFQUFFLENBQUN6QixPQUFPLENBQUMsaUJBQWlCLENBQUMsQ0FBQzBCLE1BQU0sRUFBRTtJQUN0RDtJQUVBL0wsQ0FBQyxDQUFDc0ssT0FBTyxDQUFDUixVQUFVLElBQUk0QixPQUFPLENBQUMxSSxRQUFRLENBQUMsTUFBTSxDQUFDLEdBQzlDMEksT0FBTyxDQUNKdEQsR0FBRyxDQUFDLGlCQUFpQixFQUFFeUQsYUFBYSxDQUFDLENBQ3JDM0Isb0JBQW9CLENBQUNnQixLQUFLLENBQUNHLG1CQUFtQixDQUFDLEdBQ2xEUSxhQUFhLEVBQUU7RUFDbkIsQ0FBQzs7RUFHRDtFQUNBOztFQUVBLFNBQVNHLE1BQU0sQ0FBQ0MsTUFBTSxFQUFFO0lBQ3RCLE9BQU8sSUFBSSxDQUFDM0ksSUFBSSxDQUFDLFlBQVk7TUFDM0IsSUFBSVUsS0FBSyxHQUFHaEUsQ0FBQyxDQUFDLElBQUksQ0FBQztNQUNuQixJQUFJOEgsSUFBSSxHQUFJOUQsS0FBSyxDQUFDOEQsSUFBSSxDQUFDLFVBQVUsQ0FBQztNQUVsQyxJQUFJLENBQUNBLElBQUksRUFBRTlELEtBQUssQ0FBQzhELElBQUksQ0FBQyxVQUFVLEVBQUdBLElBQUksR0FBRyxJQUFJb0QsS0FBSyxDQUFDLElBQUksQ0FBQyxDQUFFO01BQzNELElBQUksT0FBT2UsTUFBTSxJQUFJLFFBQVEsRUFBRW5FLElBQUksQ0FBQ21FLE1BQU0sQ0FBQyxDQUFDQyxJQUFJLENBQUNsSSxLQUFLLENBQUM7SUFDekQsQ0FBQyxDQUFDO0VBQ0o7RUFFQSxJQUFJbUksR0FBRyxHQUFHbk0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDd0gsS0FBSztFQUVwQnBNLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQ3dILEtBQUssR0FBZUosTUFBTTtFQUMvQmhNLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQ3dILEtBQUssQ0FBQ0MsV0FBVyxHQUFHbkIsS0FBSzs7RUFHOUI7RUFDQTs7RUFFQWxMLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQ3dILEtBQUssQ0FBQ0UsVUFBVSxHQUFHLFlBQVk7SUFDbEN0TSxDQUFDLENBQUM0RSxFQUFFLENBQUN3SCxLQUFLLEdBQUdELEdBQUc7SUFDaEIsT0FBTyxJQUFJO0VBQ2IsQ0FBQzs7RUFHRDtFQUNBOztFQUVBbk0sQ0FBQyxDQUFDd0osUUFBUSxDQUFDLENBQUN6RixFQUFFLENBQUMseUJBQXlCLEVBQUVrSCxPQUFPLEVBQUVDLEtBQUssQ0FBQ0ksU0FBUyxDQUFDSCxLQUFLLENBQUM7QUFFM0UsQ0FBQyxDQUFDckwsTUFBTSxDQUFDOztBQUVUO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUdBLENBQUMsVUFBVUUsQ0FBQyxFQUFFO0VBQ1osWUFBWTs7RUFFWjtFQUNBO0VBRUEsSUFBSXVNLE1BQU0sR0FBRyxTQUFUQSxNQUFNLENBQWFDLE9BQU8sRUFBRXRNLE9BQU8sRUFBRTtJQUN2QyxJQUFJLENBQUN1TSxRQUFRLEdBQUl6TSxDQUFDLENBQUN3TSxPQUFPLENBQUM7SUFDM0IsSUFBSSxDQUFDdE0sT0FBTyxHQUFLRixDQUFDLENBQUMwTSxNQUFNLENBQUMsQ0FBQyxDQUFDLEVBQUVILE1BQU0sQ0FBQ0ksUUFBUSxFQUFFek0sT0FBTyxDQUFDO0lBQ3ZELElBQUksQ0FBQzBNLFNBQVMsR0FBRyxLQUFLO0VBQ3hCLENBQUM7RUFFREwsTUFBTSxDQUFDbkIsT0FBTyxHQUFJLE9BQU87RUFFekJtQixNQUFNLENBQUNJLFFBQVEsR0FBRztJQUNoQkUsV0FBVyxFQUFFO0VBQ2YsQ0FBQztFQUVETixNQUFNLENBQUNqQixTQUFTLENBQUN3QixRQUFRLEdBQUcsVUFBVUMsS0FBSyxFQUFFO0lBQzNDLElBQUlDLENBQUMsR0FBTSxVQUFVO0lBQ3JCLElBQUk5SCxHQUFHLEdBQUksSUFBSSxDQUFDdUgsUUFBUTtJQUN4QixJQUFJakosR0FBRyxHQUFJMEIsR0FBRyxDQUFDZCxFQUFFLENBQUMsT0FBTyxDQUFDLEdBQUcsS0FBSyxHQUFHLE1BQU07SUFDM0MsSUFBSTBELElBQUksR0FBRzVDLEdBQUcsQ0FBQzRDLElBQUksRUFBRTtJQUVyQmlGLEtBQUssSUFBSSxNQUFNO0lBRWYsSUFBSWpGLElBQUksQ0FBQ21GLFNBQVMsSUFBSSxJQUFJLEVBQUUvSCxHQUFHLENBQUM0QyxJQUFJLENBQUMsV0FBVyxFQUFFNUMsR0FBRyxDQUFDMUIsR0FBRyxDQUFDLEVBQUUsQ0FBQzs7SUFFN0Q7SUFDQTRGLFVBQVUsQ0FBQ3BKLENBQUMsQ0FBQ2tOLEtBQUssQ0FBQyxZQUFZO01BQzdCaEksR0FBRyxDQUFDMUIsR0FBRyxDQUFDLENBQUNzRSxJQUFJLENBQUNpRixLQUFLLENBQUMsSUFBSSxJQUFJLEdBQUcsSUFBSSxDQUFDN00sT0FBTyxDQUFDNk0sS0FBSyxDQUFDLEdBQUdqRixJQUFJLENBQUNpRixLQUFLLENBQUMsQ0FBQztNQUVqRSxJQUFJQSxLQUFLLElBQUksYUFBYSxFQUFFO1FBQzFCLElBQUksQ0FBQ0gsU0FBUyxHQUFHLElBQUk7UUFDckIxSCxHQUFHLENBQUNyQixRQUFRLENBQUNtSixDQUFDLENBQUMsQ0FBQ3hCLElBQUksQ0FBQ3dCLENBQUMsRUFBRUEsQ0FBQyxDQUFDO01BQzVCLENBQUMsTUFBTSxJQUFJLElBQUksQ0FBQ0osU0FBUyxFQUFFO1FBQ3pCLElBQUksQ0FBQ0EsU0FBUyxHQUFHLEtBQUs7UUFDdEIxSCxHQUFHLENBQUM3QixXQUFXLENBQUMySixDQUFDLENBQUMsQ0FBQy9GLFVBQVUsQ0FBQytGLENBQUMsQ0FBQztNQUNsQztJQUNGLENBQUMsRUFBRSxJQUFJLENBQUMsRUFBRSxDQUFDLENBQUM7RUFDZCxDQUFDO0VBRURULE1BQU0sQ0FBQ2pCLFNBQVMsQ0FBQzZCLE1BQU0sR0FBRyxZQUFZO0lBQ3BDLElBQUlDLE9BQU8sR0FBRyxJQUFJO0lBQ2xCLElBQUkxQixPQUFPLEdBQUcsSUFBSSxDQUFDZSxRQUFRLENBQUNyRixPQUFPLENBQUMseUJBQXlCLENBQUM7SUFFOUQsSUFBSXNFLE9BQU8sQ0FBQ3ZJLE1BQU0sRUFBRTtNQUNsQixJQUFJa0ssTUFBTSxHQUFHLElBQUksQ0FBQ1osUUFBUSxDQUFDN0ksSUFBSSxDQUFDLE9BQU8sQ0FBQztNQUN4QyxJQUFJeUosTUFBTSxDQUFDQyxJQUFJLENBQUMsTUFBTSxDQUFDLElBQUksT0FBTyxFQUFFO1FBQ2xDLElBQUlELE1BQU0sQ0FBQ0MsSUFBSSxDQUFDLFNBQVMsQ0FBQyxFQUFFRixPQUFPLEdBQUcsS0FBSztRQUMzQzFCLE9BQU8sQ0FBQzlILElBQUksQ0FBQyxTQUFTLENBQUMsQ0FBQ1AsV0FBVyxDQUFDLFFBQVEsQ0FBQztRQUM3QyxJQUFJLENBQUNvSixRQUFRLENBQUM1SSxRQUFRLENBQUMsUUFBUSxDQUFDO01BQ2xDLENBQUMsTUFBTSxJQUFJd0osTUFBTSxDQUFDQyxJQUFJLENBQUMsTUFBTSxDQUFDLElBQUksVUFBVSxFQUFFO1FBQzVDLElBQUtELE1BQU0sQ0FBQ0MsSUFBSSxDQUFDLFNBQVMsQ0FBQyxLQUFNLElBQUksQ0FBQ2IsUUFBUSxDQUFDekosUUFBUSxDQUFDLFFBQVEsQ0FBQyxFQUFFb0ssT0FBTyxHQUFHLEtBQUs7UUFDbEYsSUFBSSxDQUFDWCxRQUFRLENBQUNuSSxXQUFXLENBQUMsUUFBUSxDQUFDO01BQ3JDO01BQ0ErSSxNQUFNLENBQUNDLElBQUksQ0FBQyxTQUFTLEVBQUUsSUFBSSxDQUFDYixRQUFRLENBQUN6SixRQUFRLENBQUMsUUFBUSxDQUFDLENBQUM7TUFDeEQsSUFBSW9LLE9BQU8sRUFBRUMsTUFBTSxDQUFDaEQsT0FBTyxDQUFDLFFBQVEsQ0FBQztJQUN2QyxDQUFDLE1BQU07TUFDTCxJQUFJLENBQUNvQyxRQUFRLENBQUNqQixJQUFJLENBQUMsY0FBYyxFQUFFLENBQUMsSUFBSSxDQUFDaUIsUUFBUSxDQUFDekosUUFBUSxDQUFDLFFBQVEsQ0FBQyxDQUFDO01BQ3JFLElBQUksQ0FBQ3lKLFFBQVEsQ0FBQ25JLFdBQVcsQ0FBQyxRQUFRLENBQUM7SUFDckM7RUFDRixDQUFDOztFQUdEO0VBQ0E7O0VBRUEsU0FBUzBILE1BQU0sQ0FBQ0MsTUFBTSxFQUFFO0lBQ3RCLE9BQU8sSUFBSSxDQUFDM0ksSUFBSSxDQUFDLFlBQVk7TUFDM0IsSUFBSVUsS0FBSyxHQUFLaEUsQ0FBQyxDQUFDLElBQUksQ0FBQztNQUNyQixJQUFJOEgsSUFBSSxHQUFNOUQsS0FBSyxDQUFDOEQsSUFBSSxDQUFDLFdBQVcsQ0FBQztNQUNyQyxJQUFJNUgsT0FBTyxHQUFHLFFBQU8rTCxNQUFNLEtBQUksUUFBUSxJQUFJQSxNQUFNO01BRWpELElBQUksQ0FBQ25FLElBQUksRUFBRTlELEtBQUssQ0FBQzhELElBQUksQ0FBQyxXQUFXLEVBQUdBLElBQUksR0FBRyxJQUFJeUUsTUFBTSxDQUFDLElBQUksRUFBRXJNLE9BQU8sQ0FBQyxDQUFFO01BRXRFLElBQUkrTCxNQUFNLElBQUksUUFBUSxFQUFFbkUsSUFBSSxDQUFDcUYsTUFBTSxFQUFFLE1BQ2hDLElBQUlsQixNQUFNLEVBQUVuRSxJQUFJLENBQUNnRixRQUFRLENBQUNiLE1BQU0sQ0FBQztJQUN4QyxDQUFDLENBQUM7RUFDSjtFQUVBLElBQUlFLEdBQUcsR0FBR25NLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzJJLE1BQU07RUFFckJ2TixDQUFDLENBQUM0RSxFQUFFLENBQUMySSxNQUFNLEdBQWV2QixNQUFNO0VBQ2hDaE0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDMkksTUFBTSxDQUFDbEIsV0FBVyxHQUFHRSxNQUFNOztFQUdoQztFQUNBOztFQUVBdk0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDMkksTUFBTSxDQUFDakIsVUFBVSxHQUFHLFlBQVk7SUFDbkN0TSxDQUFDLENBQUM0RSxFQUFFLENBQUMySSxNQUFNLEdBQUdwQixHQUFHO0lBQ2pCLE9BQU8sSUFBSTtFQUNiLENBQUM7O0VBR0Q7RUFDQTs7RUFFQW5NLENBQUMsQ0FBQ3dKLFFBQVEsQ0FBQyxDQUNSekYsRUFBRSxDQUFDLDBCQUEwQixFQUFFLHlCQUF5QixFQUFFLFVBQVVyQixDQUFDLEVBQUU7SUFDdEUsSUFBSThLLElBQUksR0FBR3hOLENBQUMsQ0FBQzBDLENBQUMsQ0FBQ0UsTUFBTSxDQUFDO0lBQ3RCLElBQUksQ0FBQzRLLElBQUksQ0FBQ3hLLFFBQVEsQ0FBQyxLQUFLLENBQUMsRUFBRXdLLElBQUksR0FBR0EsSUFBSSxDQUFDcEcsT0FBTyxDQUFDLE1BQU0sQ0FBQztJQUN0RDRFLE1BQU0sQ0FBQ0UsSUFBSSxDQUFDc0IsSUFBSSxFQUFFLFFBQVEsQ0FBQztJQUMzQixJQUFJLEVBQUV4TixDQUFDLENBQUMwQyxDQUFDLENBQUNFLE1BQU0sQ0FBQyxDQUFDd0IsRUFBRSxDQUFDLHFCQUFxQixDQUFDLElBQUlwRSxDQUFDLENBQUMwQyxDQUFDLENBQUNFLE1BQU0sQ0FBQyxDQUFDd0IsRUFBRSxDQUFDLHdCQUF3QixDQUFDLENBQUMsRUFBRTFCLENBQUMsQ0FBQ2tGLGNBQWMsRUFBRTtFQUM5RyxDQUFDLENBQUMsQ0FDRDdELEVBQUUsQ0FBQyxrREFBa0QsRUFBRSx5QkFBeUIsRUFBRSxVQUFVckIsQ0FBQyxFQUFFO0lBQzlGMUMsQ0FBQyxDQUFDMEMsQ0FBQyxDQUFDRSxNQUFNLENBQUMsQ0FBQ3dFLE9BQU8sQ0FBQyxNQUFNLENBQUMsQ0FBQzlDLFdBQVcsQ0FBQyxPQUFPLEVBQUUsY0FBYyxDQUFDNEUsSUFBSSxDQUFDeEcsQ0FBQyxDQUFDK0ssSUFBSSxDQUFDLENBQUM7RUFDL0UsQ0FBQyxDQUFDO0FBRU4sQ0FBQyxDQUFDM04sTUFBTSxDQUFDOztBQUVUO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUdBLENBQUMsVUFBVUUsQ0FBQyxFQUFFO0VBQ1osWUFBWTs7RUFFWjtFQUNBO0VBRUEsSUFBSTBOLFFBQVEsR0FBRyxTQUFYQSxRQUFRLENBQWFsQixPQUFPLEVBQUV0TSxPQUFPLEVBQUU7SUFDekMsSUFBSSxDQUFDdU0sUUFBUSxHQUFNek0sQ0FBQyxDQUFDd00sT0FBTyxDQUFDO0lBQzdCLElBQUksQ0FBQ21CLFdBQVcsR0FBRyxJQUFJLENBQUNsQixRQUFRLENBQUM3SSxJQUFJLENBQUMsc0JBQXNCLENBQUM7SUFDN0QsSUFBSSxDQUFDMUQsT0FBTyxHQUFPQSxPQUFPO0lBQzFCLElBQUksQ0FBQzBOLE1BQU0sR0FBUSxJQUFJO0lBQ3ZCLElBQUksQ0FBQ0MsT0FBTyxHQUFPLElBQUk7SUFDdkIsSUFBSSxDQUFDQyxRQUFRLEdBQU0sSUFBSTtJQUN2QixJQUFJLENBQUNDLE9BQU8sR0FBTyxJQUFJO0lBQ3ZCLElBQUksQ0FBQ0MsTUFBTSxHQUFRLElBQUk7SUFFdkIsSUFBSSxDQUFDOU4sT0FBTyxDQUFDK04sUUFBUSxJQUFJLElBQUksQ0FBQ3hCLFFBQVEsQ0FBQzFJLEVBQUUsQ0FBQyxxQkFBcUIsRUFBRS9ELENBQUMsQ0FBQ2tOLEtBQUssQ0FBQyxJQUFJLENBQUNnQixPQUFPLEVBQUUsSUFBSSxDQUFDLENBQUM7SUFFN0YsSUFBSSxDQUFDaE8sT0FBTyxDQUFDaU8sS0FBSyxJQUFJLE9BQU8sSUFBSSxFQUFFLGNBQWMsSUFBSTNFLFFBQVEsQ0FBQzRFLGVBQWUsQ0FBQyxJQUFJLElBQUksQ0FBQzNCLFFBQVEsQ0FDNUYxSSxFQUFFLENBQUMsd0JBQXdCLEVBQUUvRCxDQUFDLENBQUNrTixLQUFLLENBQUMsSUFBSSxDQUFDaUIsS0FBSyxFQUFFLElBQUksQ0FBQyxDQUFDLENBQ3ZEcEssRUFBRSxDQUFDLHdCQUF3QixFQUFFL0QsQ0FBQyxDQUFDa04sS0FBSyxDQUFDLElBQUksQ0FBQ21CLEtBQUssRUFBRSxJQUFJLENBQUMsQ0FBQztFQUM1RCxDQUFDO0VBRURYLFFBQVEsQ0FBQ3RDLE9BQU8sR0FBSSxPQUFPO0VBRTNCc0MsUUFBUSxDQUFDckMsbUJBQW1CLEdBQUcsR0FBRztFQUVsQ3FDLFFBQVEsQ0FBQ2YsUUFBUSxHQUFHO0lBQ2xCbUIsUUFBUSxFQUFFLElBQUk7SUFDZEssS0FBSyxFQUFFLE9BQU87SUFDZEcsSUFBSSxFQUFFLElBQUk7SUFDVkwsUUFBUSxFQUFFO0VBQ1osQ0FBQztFQUVEUCxRQUFRLENBQUNwQyxTQUFTLENBQUM0QyxPQUFPLEdBQUcsVUFBVXhMLENBQUMsRUFBRTtJQUN4QyxJQUFJLGlCQUFpQixDQUFDd0csSUFBSSxDQUFDeEcsQ0FBQyxDQUFDRSxNQUFNLENBQUMyTCxPQUFPLENBQUMsRUFBRTtJQUM5QyxRQUFRN0wsQ0FBQyxDQUFDOEwsS0FBSztNQUNiLEtBQUssRUFBRTtRQUFFLElBQUksQ0FBQ25LLElBQUksRUFBRTtRQUFFO01BQ3RCLEtBQUssRUFBRTtRQUFFLElBQUksQ0FBQ1osSUFBSSxFQUFFO1FBQUU7TUFDdEI7UUFBUztJQUFNO0lBR2pCZixDQUFDLENBQUNrRixjQUFjLEVBQUU7RUFDcEIsQ0FBQztFQUVEOEYsUUFBUSxDQUFDcEMsU0FBUyxDQUFDK0MsS0FBSyxHQUFHLFVBQVUzTCxDQUFDLEVBQUU7SUFDdENBLENBQUMsS0FBSyxJQUFJLENBQUNrTCxNQUFNLEdBQUcsS0FBSyxDQUFDO0lBRTFCLElBQUksQ0FBQ0UsUUFBUSxJQUFJVyxhQUFhLENBQUMsSUFBSSxDQUFDWCxRQUFRLENBQUM7SUFFN0MsSUFBSSxDQUFDNU4sT0FBTyxDQUFDNE4sUUFBUSxJQUNoQixDQUFDLElBQUksQ0FBQ0YsTUFBTSxLQUNYLElBQUksQ0FBQ0UsUUFBUSxHQUFHWSxXQUFXLENBQUMxTyxDQUFDLENBQUNrTixLQUFLLENBQUMsSUFBSSxDQUFDekosSUFBSSxFQUFFLElBQUksQ0FBQyxFQUFFLElBQUksQ0FBQ3ZELE9BQU8sQ0FBQzROLFFBQVEsQ0FBQyxDQUFDO0lBRW5GLE9BQU8sSUFBSTtFQUNiLENBQUM7RUFFREosUUFBUSxDQUFDcEMsU0FBUyxDQUFDcUQsWUFBWSxHQUFHLFVBQVVqSixJQUFJLEVBQUU7SUFDaEQsSUFBSSxDQUFDc0ksTUFBTSxHQUFHdEksSUFBSSxDQUFDM0MsTUFBTSxFQUFFLENBQUM2TCxRQUFRLENBQUMsT0FBTyxDQUFDO0lBQzdDLE9BQU8sSUFBSSxDQUFDWixNQUFNLENBQUNhLEtBQUssQ0FBQ25KLElBQUksSUFBSSxJQUFJLENBQUNxSSxPQUFPLENBQUM7RUFDaEQsQ0FBQztFQUVETCxRQUFRLENBQUNwQyxTQUFTLENBQUN3RCxtQkFBbUIsR0FBRyxVQUFVQyxTQUFTLEVBQUVDLE1BQU0sRUFBRTtJQUNwRSxJQUFJQyxXQUFXLEdBQUcsSUFBSSxDQUFDTixZQUFZLENBQUNLLE1BQU0sQ0FBQztJQUMzQyxJQUFJRSxRQUFRLEdBQUlILFNBQVMsSUFBSSxNQUFNLElBQUlFLFdBQVcsS0FBSyxDQUFDLElBQ3hDRixTQUFTLElBQUksTUFBTSxJQUFJRSxXQUFXLElBQUssSUFBSSxDQUFDakIsTUFBTSxDQUFDN0ssTUFBTSxHQUFHLENBQUc7SUFDL0UsSUFBSStMLFFBQVEsSUFBSSxDQUFDLElBQUksQ0FBQ2hQLE9BQU8sQ0FBQ29PLElBQUksRUFBRSxPQUFPVSxNQUFNO0lBQ2pELElBQUlHLEtBQUssR0FBR0osU0FBUyxJQUFJLE1BQU0sR0FBRyxDQUFDLENBQUMsR0FBRyxDQUFDO0lBQ3hDLElBQUlLLFNBQVMsR0FBRyxDQUFDSCxXQUFXLEdBQUdFLEtBQUssSUFBSSxJQUFJLENBQUNuQixNQUFNLENBQUM3SyxNQUFNO0lBQzFELE9BQU8sSUFBSSxDQUFDNkssTUFBTSxDQUFDcUIsRUFBRSxDQUFDRCxTQUFTLENBQUM7RUFDbEMsQ0FBQztFQUVEMUIsUUFBUSxDQUFDcEMsU0FBUyxDQUFDZ0UsRUFBRSxHQUFHLFVBQVVDLEdBQUcsRUFBRTtJQUNyQyxJQUFJQyxJQUFJLEdBQVUsSUFBSTtJQUN0QixJQUFJUCxXQUFXLEdBQUcsSUFBSSxDQUFDTixZQUFZLENBQUMsSUFBSSxDQUFDWixPQUFPLEdBQUcsSUFBSSxDQUFDdEIsUUFBUSxDQUFDN0ksSUFBSSxDQUFDLGNBQWMsQ0FBQyxDQUFDO0lBRXRGLElBQUkyTCxHQUFHLEdBQUksSUFBSSxDQUFDdkIsTUFBTSxDQUFDN0ssTUFBTSxHQUFHLENBQUUsSUFBSW9NLEdBQUcsR0FBRyxDQUFDLEVBQUU7SUFFL0MsSUFBSSxJQUFJLENBQUMxQixPQUFPLEVBQVEsT0FBTyxJQUFJLENBQUNwQixRQUFRLENBQUNyRSxHQUFHLENBQUMsa0JBQWtCLEVBQUUsWUFBWTtNQUFFb0gsSUFBSSxDQUFDRixFQUFFLENBQUNDLEdBQUcsQ0FBQztJQUFDLENBQUMsQ0FBQyxFQUFDO0lBQ25HLElBQUlOLFdBQVcsSUFBSU0sR0FBRyxFQUFFLE9BQU8sSUFBSSxDQUFDcEIsS0FBSyxFQUFFLENBQUNFLEtBQUssRUFBRTtJQUVuRCxPQUFPLElBQUksQ0FBQ29CLEtBQUssQ0FBQ0YsR0FBRyxHQUFHTixXQUFXLEdBQUcsTUFBTSxHQUFHLE1BQU0sRUFBRSxJQUFJLENBQUNqQixNQUFNLENBQUNxQixFQUFFLENBQUNFLEdBQUcsQ0FBQyxDQUFDO0VBQzdFLENBQUM7RUFFRDdCLFFBQVEsQ0FBQ3BDLFNBQVMsQ0FBQzZDLEtBQUssR0FBRyxVQUFVekwsQ0FBQyxFQUFFO0lBQ3RDQSxDQUFDLEtBQUssSUFBSSxDQUFDa0wsTUFBTSxHQUFHLElBQUksQ0FBQztJQUV6QixJQUFJLElBQUksQ0FBQ25CLFFBQVEsQ0FBQzdJLElBQUksQ0FBQyxjQUFjLENBQUMsQ0FBQ1QsTUFBTSxJQUFJbkQsQ0FBQyxDQUFDc0ssT0FBTyxDQUFDUixVQUFVLEVBQUU7TUFDckUsSUFBSSxDQUFDMkMsUUFBUSxDQUFDcEMsT0FBTyxDQUFDckssQ0FBQyxDQUFDc0ssT0FBTyxDQUFDUixVQUFVLENBQUNHLEdBQUcsQ0FBQztNQUMvQyxJQUFJLENBQUNvRSxLQUFLLENBQUMsSUFBSSxDQUFDO0lBQ2xCO0lBRUEsSUFBSSxDQUFDUCxRQUFRLEdBQUdXLGFBQWEsQ0FBQyxJQUFJLENBQUNYLFFBQVEsQ0FBQztJQUU1QyxPQUFPLElBQUk7RUFDYixDQUFDO0VBRURKLFFBQVEsQ0FBQ3BDLFNBQVMsQ0FBQzdILElBQUksR0FBRyxZQUFZO0lBQ3BDLElBQUksSUFBSSxDQUFDb0ssT0FBTyxFQUFFO0lBQ2xCLE9BQU8sSUFBSSxDQUFDNEIsS0FBSyxDQUFDLE1BQU0sQ0FBQztFQUMzQixDQUFDO0VBRUQvQixRQUFRLENBQUNwQyxTQUFTLENBQUNqSCxJQUFJLEdBQUcsWUFBWTtJQUNwQyxJQUFJLElBQUksQ0FBQ3dKLE9BQU8sRUFBRTtJQUNsQixPQUFPLElBQUksQ0FBQzRCLEtBQUssQ0FBQyxNQUFNLENBQUM7RUFDM0IsQ0FBQztFQUVEL0IsUUFBUSxDQUFDcEMsU0FBUyxDQUFDbUUsS0FBSyxHQUFHLFVBQVVoQyxJQUFJLEVBQUVoSyxJQUFJLEVBQUU7SUFDL0MsSUFBSXNLLE9BQU8sR0FBSyxJQUFJLENBQUN0QixRQUFRLENBQUM3SSxJQUFJLENBQUMsY0FBYyxDQUFDO0lBQ2xELElBQUk4TCxLQUFLLEdBQU9qTSxJQUFJLElBQUksSUFBSSxDQUFDcUwsbUJBQW1CLENBQUNyQixJQUFJLEVBQUVNLE9BQU8sQ0FBQztJQUMvRCxJQUFJNEIsU0FBUyxHQUFHLElBQUksQ0FBQzdCLFFBQVE7SUFDN0IsSUFBSWlCLFNBQVMsR0FBR3RCLElBQUksSUFBSSxNQUFNLEdBQUcsTUFBTSxHQUFHLE9BQU87SUFDakQsSUFBSStCLElBQUksR0FBUSxJQUFJO0lBRXBCLElBQUlFLEtBQUssQ0FBQzFNLFFBQVEsQ0FBQyxRQUFRLENBQUMsRUFBRSxPQUFRLElBQUksQ0FBQzZLLE9BQU8sR0FBRyxLQUFLO0lBRTFELElBQUkrQixhQUFhLEdBQUdGLEtBQUssQ0FBQyxDQUFDLENBQUM7SUFDNUIsSUFBSUcsVUFBVSxHQUFHN1AsQ0FBQyxDQUFDMkwsS0FBSyxDQUFDLG1CQUFtQixFQUFFO01BQzVDaUUsYUFBYSxFQUFFQSxhQUFhO01BQzVCYixTQUFTLEVBQUVBO0lBQ2IsQ0FBQyxDQUFDO0lBQ0YsSUFBSSxDQUFDdEMsUUFBUSxDQUFDcEMsT0FBTyxDQUFDd0YsVUFBVSxDQUFDO0lBQ2pDLElBQUlBLFVBQVUsQ0FBQ2pFLGtCQUFrQixFQUFFLEVBQUU7SUFFckMsSUFBSSxDQUFDaUMsT0FBTyxHQUFHLElBQUk7SUFFbkI4QixTQUFTLElBQUksSUFBSSxDQUFDeEIsS0FBSyxFQUFFO0lBRXpCLElBQUksSUFBSSxDQUFDUixXQUFXLENBQUN4SyxNQUFNLEVBQUU7TUFDM0IsSUFBSSxDQUFDd0ssV0FBVyxDQUFDL0osSUFBSSxDQUFDLFNBQVMsQ0FBQyxDQUFDUCxXQUFXLENBQUMsUUFBUSxDQUFDO01BQ3RELElBQUl5TSxjQUFjLEdBQUc5UCxDQUFDLENBQUMsSUFBSSxDQUFDMk4sV0FBVyxDQUFDaUIsUUFBUSxFQUFFLENBQUMsSUFBSSxDQUFDRCxZQUFZLENBQUNlLEtBQUssQ0FBQyxDQUFDLENBQUM7TUFDN0VJLGNBQWMsSUFBSUEsY0FBYyxDQUFDak0sUUFBUSxDQUFDLFFBQVEsQ0FBQztJQUNyRDtJQUVBLElBQUlrTSxTQUFTLEdBQUcvUCxDQUFDLENBQUMyTCxLQUFLLENBQUMsa0JBQWtCLEVBQUU7TUFBRWlFLGFBQWEsRUFBRUEsYUFBYTtNQUFFYixTQUFTLEVBQUVBO0lBQVUsQ0FBQyxDQUFDLEVBQUM7SUFDcEcsSUFBSS9PLENBQUMsQ0FBQ3NLLE9BQU8sQ0FBQ1IsVUFBVSxJQUFJLElBQUksQ0FBQzJDLFFBQVEsQ0FBQ3pKLFFBQVEsQ0FBQyxPQUFPLENBQUMsRUFBRTtNQUMzRDBNLEtBQUssQ0FBQzdMLFFBQVEsQ0FBQzRKLElBQUksQ0FBQztNQUNwQmlDLEtBQUssQ0FBQyxDQUFDLENBQUMsQ0FBQ00sV0FBVyxFQUFDO01BQ3JCakMsT0FBTyxDQUFDbEssUUFBUSxDQUFDa0wsU0FBUyxDQUFDO01BQzNCVyxLQUFLLENBQUM3TCxRQUFRLENBQUNrTCxTQUFTLENBQUM7TUFDekJoQixPQUFPLENBQ0ozRixHQUFHLENBQUMsaUJBQWlCLEVBQUUsWUFBWTtRQUNsQ3NILEtBQUssQ0FBQ3JNLFdBQVcsQ0FBQyxDQUFDb0ssSUFBSSxFQUFFc0IsU0FBUyxDQUFDLENBQUNrQixJQUFJLENBQUMsR0FBRyxDQUFDLENBQUMsQ0FBQ3BNLFFBQVEsQ0FBQyxRQUFRLENBQUM7UUFDakVrSyxPQUFPLENBQUMxSyxXQUFXLENBQUMsQ0FBQyxRQUFRLEVBQUUwTCxTQUFTLENBQUMsQ0FBQ2tCLElBQUksQ0FBQyxHQUFHLENBQUMsQ0FBQztRQUNwRFQsSUFBSSxDQUFDM0IsT0FBTyxHQUFHLEtBQUs7UUFDcEJ6RSxVQUFVLENBQUMsWUFBWTtVQUNyQm9HLElBQUksQ0FBQy9DLFFBQVEsQ0FBQ3BDLE9BQU8sQ0FBQzBGLFNBQVMsQ0FBQztRQUNsQyxDQUFDLEVBQUUsQ0FBQyxDQUFDO01BQ1AsQ0FBQyxDQUFDLENBQ0Q3RixvQkFBb0IsQ0FBQ3dELFFBQVEsQ0FBQ3JDLG1CQUFtQixDQUFDO0lBQ3ZELENBQUMsTUFBTTtNQUNMMEMsT0FBTyxDQUFDMUssV0FBVyxDQUFDLFFBQVEsQ0FBQztNQUM3QnFNLEtBQUssQ0FBQzdMLFFBQVEsQ0FBQyxRQUFRLENBQUM7TUFDeEIsSUFBSSxDQUFDZ0ssT0FBTyxHQUFHLEtBQUs7TUFDcEIsSUFBSSxDQUFDcEIsUUFBUSxDQUFDcEMsT0FBTyxDQUFDMEYsU0FBUyxDQUFDO0lBQ2xDO0lBRUFKLFNBQVMsSUFBSSxJQUFJLENBQUN0QixLQUFLLEVBQUU7SUFFekIsT0FBTyxJQUFJO0VBQ2IsQ0FBQzs7RUFHRDtFQUNBOztFQUVBLFNBQVNyQyxNQUFNLENBQUNDLE1BQU0sRUFBRTtJQUN0QixPQUFPLElBQUksQ0FBQzNJLElBQUksQ0FBQyxZQUFZO01BQzNCLElBQUlVLEtBQUssR0FBS2hFLENBQUMsQ0FBQyxJQUFJLENBQUM7TUFDckIsSUFBSThILElBQUksR0FBTTlELEtBQUssQ0FBQzhELElBQUksQ0FBQyxhQUFhLENBQUM7TUFDdkMsSUFBSTVILE9BQU8sR0FBR0YsQ0FBQyxDQUFDME0sTUFBTSxDQUFDLENBQUMsQ0FBQyxFQUFFZ0IsUUFBUSxDQUFDZixRQUFRLEVBQUUzSSxLQUFLLENBQUM4RCxJQUFJLEVBQUUsRUFBRSxRQUFPbUUsTUFBTSxLQUFJLFFBQVEsSUFBSUEsTUFBTSxDQUFDO01BQ2hHLElBQUlpRSxNQUFNLEdBQUksT0FBT2pFLE1BQU0sSUFBSSxRQUFRLEdBQUdBLE1BQU0sR0FBRy9MLE9BQU8sQ0FBQ3VQLEtBQUs7TUFFaEUsSUFBSSxDQUFDM0gsSUFBSSxFQUFFOUQsS0FBSyxDQUFDOEQsSUFBSSxDQUFDLGFBQWEsRUFBR0EsSUFBSSxHQUFHLElBQUk0RixRQUFRLENBQUMsSUFBSSxFQUFFeE4sT0FBTyxDQUFDLENBQUU7TUFDMUUsSUFBSSxPQUFPK0wsTUFBTSxJQUFJLFFBQVEsRUFBRW5FLElBQUksQ0FBQ3dILEVBQUUsQ0FBQ3JELE1BQU0sQ0FBQyxNQUN6QyxJQUFJaUUsTUFBTSxFQUFFcEksSUFBSSxDQUFDb0ksTUFBTSxDQUFDLEVBQUUsTUFDMUIsSUFBSWhRLE9BQU8sQ0FBQzROLFFBQVEsRUFBRWhHLElBQUksQ0FBQ3FHLEtBQUssRUFBRSxDQUFDRSxLQUFLLEVBQUU7SUFDakQsQ0FBQyxDQUFDO0VBQ0o7RUFFQSxJQUFJbEMsR0FBRyxHQUFHbk0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDdUwsUUFBUTtFQUV2Qm5RLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQ3VMLFFBQVEsR0FBZW5FLE1BQU07RUFDbENoTSxDQUFDLENBQUM0RSxFQUFFLENBQUN1TCxRQUFRLENBQUM5RCxXQUFXLEdBQUdxQixRQUFROztFQUdwQztFQUNBOztFQUVBMU4sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDdUwsUUFBUSxDQUFDN0QsVUFBVSxHQUFHLFlBQVk7SUFDckN0TSxDQUFDLENBQUM0RSxFQUFFLENBQUN1TCxRQUFRLEdBQUdoRSxHQUFHO0lBQ25CLE9BQU8sSUFBSTtFQUNiLENBQUM7O0VBR0Q7RUFDQTs7RUFFQSxJQUFJaUUsWUFBWSxHQUFHLFNBQWZBLFlBQVksQ0FBYTFOLENBQUMsRUFBRTtJQUM5QixJQUFJMk4sSUFBSTtJQUNSLElBQUlyTSxLQUFLLEdBQUtoRSxDQUFDLENBQUMsSUFBSSxDQUFDO0lBQ3JCLElBQUkyQyxPQUFPLEdBQUczQyxDQUFDLENBQUNnRSxLQUFLLENBQUN3SCxJQUFJLENBQUMsYUFBYSxDQUFDLElBQUksQ0FBQzZFLElBQUksR0FBR3JNLEtBQUssQ0FBQ3dILElBQUksQ0FBQyxNQUFNLENBQUMsS0FBSzZFLElBQUksQ0FBQzVFLE9BQU8sQ0FBQyxnQkFBZ0IsRUFBRSxFQUFFLENBQUMsQ0FBQyxFQUFDO0lBQ2hILElBQUksQ0FBQzlJLE9BQU8sQ0FBQ0ssUUFBUSxDQUFDLFVBQVUsQ0FBQyxFQUFFO0lBQ25DLElBQUk5QyxPQUFPLEdBQUdGLENBQUMsQ0FBQzBNLE1BQU0sQ0FBQyxDQUFDLENBQUMsRUFBRS9KLE9BQU8sQ0FBQ21GLElBQUksRUFBRSxFQUFFOUQsS0FBSyxDQUFDOEQsSUFBSSxFQUFFLENBQUM7SUFDeEQsSUFBSXdJLFVBQVUsR0FBR3RNLEtBQUssQ0FBQ3dILElBQUksQ0FBQyxlQUFlLENBQUM7SUFDNUMsSUFBSThFLFVBQVUsRUFBRXBRLE9BQU8sQ0FBQzROLFFBQVEsR0FBRyxLQUFLO0lBRXhDOUIsTUFBTSxDQUFDRSxJQUFJLENBQUN2SixPQUFPLEVBQUV6QyxPQUFPLENBQUM7SUFFN0IsSUFBSW9RLFVBQVUsRUFBRTtNQUNkM04sT0FBTyxDQUFDbUYsSUFBSSxDQUFDLGFBQWEsQ0FBQyxDQUFDd0gsRUFBRSxDQUFDZ0IsVUFBVSxDQUFDO0lBQzVDO0lBRUE1TixDQUFDLENBQUNrRixjQUFjLEVBQUU7RUFDcEIsQ0FBQztFQUVENUgsQ0FBQyxDQUFDd0osUUFBUSxDQUFDLENBQ1J6RixFQUFFLENBQUMsNEJBQTRCLEVBQUUsY0FBYyxFQUFFcU0sWUFBWSxDQUFDLENBQzlEck0sRUFBRSxDQUFDLDRCQUE0QixFQUFFLGlCQUFpQixFQUFFcU0sWUFBWSxDQUFDO0VBRXBFcFEsQ0FBQyxDQUFDd0MsTUFBTSxDQUFDLENBQUN1QixFQUFFLENBQUMsTUFBTSxFQUFFLFlBQVk7SUFDL0IvRCxDQUFDLENBQUMsd0JBQXdCLENBQUMsQ0FBQ3NELElBQUksQ0FBQyxZQUFZO01BQzNDLElBQUlpTixTQUFTLEdBQUd2USxDQUFDLENBQUMsSUFBSSxDQUFDO01BQ3ZCZ00sTUFBTSxDQUFDRSxJQUFJLENBQUNxRSxTQUFTLEVBQUVBLFNBQVMsQ0FBQ3pJLElBQUksRUFBRSxDQUFDO0lBQzFDLENBQUMsQ0FBQztFQUNKLENBQUMsQ0FBQztBQUVKLENBQUMsQ0FBQ2hJLE1BQU0sQ0FBQzs7QUFFVDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFHQSxDQUFDLFVBQVVFLENBQUMsRUFBRTtFQUNaLFlBQVk7O0VBRVo7RUFDQTtFQUVBLElBQUl3USxRQUFRLEdBQUcsU0FBWEEsUUFBUSxDQUFhaEUsT0FBTyxFQUFFdE0sT0FBTyxFQUFFO0lBQ3pDLElBQUksQ0FBQ3VNLFFBQVEsR0FBUXpNLENBQUMsQ0FBQ3dNLE9BQU8sQ0FBQztJQUMvQixJQUFJLENBQUN0TSxPQUFPLEdBQVNGLENBQUMsQ0FBQzBNLE1BQU0sQ0FBQyxDQUFDLENBQUMsRUFBRThELFFBQVEsQ0FBQzdELFFBQVEsRUFBRXpNLE9BQU8sQ0FBQztJQUM3RCxJQUFJLENBQUN1USxRQUFRLEdBQVF6USxDQUFDLENBQUMsa0NBQWtDLEdBQUd3TSxPQUFPLENBQUNrRSxFQUFFLEdBQUcsS0FBSyxHQUN2RCx5Q0FBeUMsR0FBR2xFLE9BQU8sQ0FBQ2tFLEVBQUUsR0FBRyxJQUFJLENBQUM7SUFDckYsSUFBSSxDQUFDQyxhQUFhLEdBQUcsSUFBSTtJQUV6QixJQUFJLElBQUksQ0FBQ3pRLE9BQU8sQ0FBQzZDLE1BQU0sRUFBRTtNQUN2QixJQUFJLENBQUMySSxPQUFPLEdBQUcsSUFBSSxDQUFDa0YsU0FBUyxFQUFFO0lBQ2pDLENBQUMsTUFBTTtNQUNMLElBQUksQ0FBQ0Msd0JBQXdCLENBQUMsSUFBSSxDQUFDcEUsUUFBUSxFQUFFLElBQUksQ0FBQ2dFLFFBQVEsQ0FBQztJQUM3RDtJQUVBLElBQUksSUFBSSxDQUFDdlEsT0FBTyxDQUFDaU4sTUFBTSxFQUFFLElBQUksQ0FBQ0EsTUFBTSxFQUFFO0VBQ3hDLENBQUM7RUFFRHFELFFBQVEsQ0FBQ3BGLE9BQU8sR0FBSSxPQUFPO0VBRTNCb0YsUUFBUSxDQUFDbkYsbUJBQW1CLEdBQUcsR0FBRztFQUVsQ21GLFFBQVEsQ0FBQzdELFFBQVEsR0FBRztJQUNsQlEsTUFBTSxFQUFFO0VBQ1YsQ0FBQztFQUVEcUQsUUFBUSxDQUFDbEYsU0FBUyxDQUFDd0YsU0FBUyxHQUFHLFlBQVk7SUFDekMsSUFBSUMsUUFBUSxHQUFHLElBQUksQ0FBQ3RFLFFBQVEsQ0FBQ3pKLFFBQVEsQ0FBQyxPQUFPLENBQUM7SUFDOUMsT0FBTytOLFFBQVEsR0FBRyxPQUFPLEdBQUcsUUFBUTtFQUN0QyxDQUFDO0VBRURQLFFBQVEsQ0FBQ2xGLFNBQVMsQ0FBQ3hILElBQUksR0FBRyxZQUFZO0lBQ3BDLElBQUksSUFBSSxDQUFDNk0sYUFBYSxJQUFJLElBQUksQ0FBQ2xFLFFBQVEsQ0FBQ3pKLFFBQVEsQ0FBQyxJQUFJLENBQUMsRUFBRTtJQUV4RCxJQUFJZ08sV0FBVztJQUNmLElBQUlDLE9BQU8sR0FBRyxJQUFJLENBQUN2RixPQUFPLElBQUksSUFBSSxDQUFDQSxPQUFPLENBQUNrRCxRQUFRLENBQUMsUUFBUSxDQUFDLENBQUNBLFFBQVEsQ0FBQyxrQkFBa0IsQ0FBQztJQUUxRixJQUFJcUMsT0FBTyxJQUFJQSxPQUFPLENBQUM5TixNQUFNLEVBQUU7TUFDN0I2TixXQUFXLEdBQUdDLE9BQU8sQ0FBQ25KLElBQUksQ0FBQyxhQUFhLENBQUM7TUFDekMsSUFBSWtKLFdBQVcsSUFBSUEsV0FBVyxDQUFDTCxhQUFhLEVBQUU7SUFDaEQ7SUFFQSxJQUFJTyxVQUFVLEdBQUdsUixDQUFDLENBQUMyTCxLQUFLLENBQUMsa0JBQWtCLENBQUM7SUFDNUMsSUFBSSxDQUFDYyxRQUFRLENBQUNwQyxPQUFPLENBQUM2RyxVQUFVLENBQUM7SUFDakMsSUFBSUEsVUFBVSxDQUFDdEYsa0JBQWtCLEVBQUUsRUFBRTtJQUVyQyxJQUFJcUYsT0FBTyxJQUFJQSxPQUFPLENBQUM5TixNQUFNLEVBQUU7TUFDN0I2SSxNQUFNLENBQUNFLElBQUksQ0FBQytFLE9BQU8sRUFBRSxNQUFNLENBQUM7TUFDNUJELFdBQVcsSUFBSUMsT0FBTyxDQUFDbkosSUFBSSxDQUFDLGFBQWEsRUFBRSxJQUFJLENBQUM7SUFDbEQ7SUFFQSxJQUFJZ0osU0FBUyxHQUFHLElBQUksQ0FBQ0EsU0FBUyxFQUFFO0lBRWhDLElBQUksQ0FBQ3JFLFFBQVEsQ0FDVnBKLFdBQVcsQ0FBQyxVQUFVLENBQUMsQ0FDdkJRLFFBQVEsQ0FBQyxZQUFZLENBQUMsQ0FBQ2lOLFNBQVMsQ0FBQyxDQUFDLENBQUMsQ0FBQyxDQUNwQ3RGLElBQUksQ0FBQyxlQUFlLEVBQUUsSUFBSSxDQUFDO0lBRTlCLElBQUksQ0FBQ2lGLFFBQVEsQ0FDVnBOLFdBQVcsQ0FBQyxXQUFXLENBQUMsQ0FDeEJtSSxJQUFJLENBQUMsZUFBZSxFQUFFLElBQUksQ0FBQztJQUU5QixJQUFJLENBQUNtRixhQUFhLEdBQUcsQ0FBQztJQUV0QixJQUFJUSxRQUFRLEdBQUcsU0FBWEEsUUFBUSxHQUFlO01BQ3pCLElBQUksQ0FBQzFFLFFBQVEsQ0FDVnBKLFdBQVcsQ0FBQyxZQUFZLENBQUMsQ0FDekJRLFFBQVEsQ0FBQyxhQUFhLENBQUMsQ0FBQ2lOLFNBQVMsQ0FBQyxDQUFDLEVBQUUsQ0FBQztNQUN6QyxJQUFJLENBQUNILGFBQWEsR0FBRyxDQUFDO01BQ3RCLElBQUksQ0FBQ2xFLFFBQVEsQ0FDVnBDLE9BQU8sQ0FBQyxtQkFBbUIsQ0FBQztJQUNqQyxDQUFDO0lBRUQsSUFBSSxDQUFDckssQ0FBQyxDQUFDc0ssT0FBTyxDQUFDUixVQUFVLEVBQUUsT0FBT3FILFFBQVEsQ0FBQ2pGLElBQUksQ0FBQyxJQUFJLENBQUM7SUFFckQsSUFBSWtGLFVBQVUsR0FBR3BSLENBQUMsQ0FBQ3FSLFNBQVMsQ0FBQyxDQUFDLFFBQVEsRUFBRVAsU0FBUyxDQUFDLENBQUNiLElBQUksQ0FBQyxHQUFHLENBQUMsQ0FBQztJQUU3RCxJQUFJLENBQUN4RCxRQUFRLENBQ1ZyRSxHQUFHLENBQUMsaUJBQWlCLEVBQUVwSSxDQUFDLENBQUNrTixLQUFLLENBQUNpRSxRQUFRLEVBQUUsSUFBSSxDQUFDLENBQUMsQ0FDL0NqSCxvQkFBb0IsQ0FBQ3NHLFFBQVEsQ0FBQ25GLG1CQUFtQixDQUFDLENBQUN5RixTQUFTLENBQUMsQ0FBQyxJQUFJLENBQUNyRSxRQUFRLENBQUMsQ0FBQyxDQUFDLENBQUMyRSxVQUFVLENBQUMsQ0FBQztFQUNoRyxDQUFDO0VBRURaLFFBQVEsQ0FBQ2xGLFNBQVMsQ0FBQ2dHLElBQUksR0FBRyxZQUFZO0lBQ3BDLElBQUksSUFBSSxDQUFDWCxhQUFhLElBQUksQ0FBQyxJQUFJLENBQUNsRSxRQUFRLENBQUN6SixRQUFRLENBQUMsSUFBSSxDQUFDLEVBQUU7SUFFekQsSUFBSWtPLFVBQVUsR0FBR2xSLENBQUMsQ0FBQzJMLEtBQUssQ0FBQyxrQkFBa0IsQ0FBQztJQUM1QyxJQUFJLENBQUNjLFFBQVEsQ0FBQ3BDLE9BQU8sQ0FBQzZHLFVBQVUsQ0FBQztJQUNqQyxJQUFJQSxVQUFVLENBQUN0RixrQkFBa0IsRUFBRSxFQUFFO0lBRXJDLElBQUlrRixTQUFTLEdBQUcsSUFBSSxDQUFDQSxTQUFTLEVBQUU7SUFFaEMsSUFBSSxDQUFDckUsUUFBUSxDQUFDcUUsU0FBUyxDQUFDLENBQUMsSUFBSSxDQUFDckUsUUFBUSxDQUFDcUUsU0FBUyxDQUFDLEVBQUUsQ0FBQyxDQUFDLENBQUMsQ0FBQyxDQUFDUyxZQUFZO0lBRXBFLElBQUksQ0FBQzlFLFFBQVEsQ0FDVjVJLFFBQVEsQ0FBQyxZQUFZLENBQUMsQ0FDdEJSLFdBQVcsQ0FBQyxhQUFhLENBQUMsQ0FDMUJtSSxJQUFJLENBQUMsZUFBZSxFQUFFLEtBQUssQ0FBQztJQUUvQixJQUFJLENBQUNpRixRQUFRLENBQ1Y1TSxRQUFRLENBQUMsV0FBVyxDQUFDLENBQ3JCMkgsSUFBSSxDQUFDLGVBQWUsRUFBRSxLQUFLLENBQUM7SUFFL0IsSUFBSSxDQUFDbUYsYUFBYSxHQUFHLENBQUM7SUFFdEIsSUFBSVEsUUFBUSxHQUFHLFNBQVhBLFFBQVEsR0FBZTtNQUN6QixJQUFJLENBQUNSLGFBQWEsR0FBRyxDQUFDO01BQ3RCLElBQUksQ0FBQ2xFLFFBQVEsQ0FDVnBKLFdBQVcsQ0FBQyxZQUFZLENBQUMsQ0FDekJRLFFBQVEsQ0FBQyxVQUFVLENBQUMsQ0FDcEJ3RyxPQUFPLENBQUMsb0JBQW9CLENBQUM7SUFDbEMsQ0FBQztJQUVELElBQUksQ0FBQ3JLLENBQUMsQ0FBQ3NLLE9BQU8sQ0FBQ1IsVUFBVSxFQUFFLE9BQU9xSCxRQUFRLENBQUNqRixJQUFJLENBQUMsSUFBSSxDQUFDO0lBRXJELElBQUksQ0FBQ08sUUFBUSxDQUNWcUUsU0FBUyxDQUFDLENBQUMsQ0FBQyxDQUFDLENBQ2IxSSxHQUFHLENBQUMsaUJBQWlCLEVBQUVwSSxDQUFDLENBQUNrTixLQUFLLENBQUNpRSxRQUFRLEVBQUUsSUFBSSxDQUFDLENBQUMsQ0FDL0NqSCxvQkFBb0IsQ0FBQ3NHLFFBQVEsQ0FBQ25GLG1CQUFtQixDQUFDO0VBQ3ZELENBQUM7RUFFRG1GLFFBQVEsQ0FBQ2xGLFNBQVMsQ0FBQzZCLE1BQU0sR0FBRyxZQUFZO0lBQ3RDLElBQUksQ0FBQyxJQUFJLENBQUNWLFFBQVEsQ0FBQ3pKLFFBQVEsQ0FBQyxJQUFJLENBQUMsR0FBRyxNQUFNLEdBQUcsTUFBTSxDQUFDLEVBQUU7RUFDeEQsQ0FBQztFQUVEd04sUUFBUSxDQUFDbEYsU0FBUyxDQUFDc0YsU0FBUyxHQUFHLFlBQVk7SUFDekMsT0FBTzVRLENBQUMsQ0FBQyxJQUFJLENBQUNFLE9BQU8sQ0FBQzZDLE1BQU0sQ0FBQyxDQUMxQmEsSUFBSSxDQUFDLHdDQUF3QyxHQUFHLElBQUksQ0FBQzFELE9BQU8sQ0FBQzZDLE1BQU0sR0FBRyxJQUFJLENBQUMsQ0FDM0VPLElBQUksQ0FBQ3RELENBQUMsQ0FBQ2tOLEtBQUssQ0FBQyxVQUFVM0osQ0FBQyxFQUFFaUosT0FBTyxFQUFFO01BQ2xDLElBQUlDLFFBQVEsR0FBR3pNLENBQUMsQ0FBQ3dNLE9BQU8sQ0FBQztNQUN6QixJQUFJLENBQUNxRSx3QkFBd0IsQ0FBQ1csb0JBQW9CLENBQUMvRSxRQUFRLENBQUMsRUFBRUEsUUFBUSxDQUFDO0lBQ3pFLENBQUMsRUFBRSxJQUFJLENBQUMsQ0FBQyxDQUNSeEMsR0FBRyxFQUFFO0VBQ1YsQ0FBQztFQUVEdUcsUUFBUSxDQUFDbEYsU0FBUyxDQUFDdUYsd0JBQXdCLEdBQUcsVUFBVXBFLFFBQVEsRUFBRWdFLFFBQVEsRUFBRTtJQUMxRSxJQUFJeE4sTUFBTSxHQUFHd0osUUFBUSxDQUFDekosUUFBUSxDQUFDLElBQUksQ0FBQztJQUVwQ3lKLFFBQVEsQ0FBQ2pCLElBQUksQ0FBQyxlQUFlLEVBQUV2SSxNQUFNLENBQUM7SUFDdEN3TixRQUFRLENBQ0xuTSxXQUFXLENBQUMsV0FBVyxFQUFFLENBQUNyQixNQUFNLENBQUMsQ0FDakN1SSxJQUFJLENBQUMsZUFBZSxFQUFFdkksTUFBTSxDQUFDO0VBQ2xDLENBQUM7RUFFRCxTQUFTdU8sb0JBQW9CLENBQUNmLFFBQVEsRUFBRTtJQUN0QyxJQUFJSixJQUFJO0lBQ1IsSUFBSXpOLE1BQU0sR0FBRzZOLFFBQVEsQ0FBQ2pGLElBQUksQ0FBQyxhQUFhLENBQUMsSUFDcEMsQ0FBQzZFLElBQUksR0FBR0ksUUFBUSxDQUFDakYsSUFBSSxDQUFDLE1BQU0sQ0FBQyxLQUFLNkUsSUFBSSxDQUFDNUUsT0FBTyxDQUFDLGdCQUFnQixFQUFFLEVBQUUsQ0FBQyxFQUFDOztJQUUxRSxPQUFPekwsQ0FBQyxDQUFDNEMsTUFBTSxDQUFDO0VBQ2xCOztFQUdBO0VBQ0E7O0VBRUEsU0FBU29KLE1BQU0sQ0FBQ0MsTUFBTSxFQUFFO0lBQ3RCLE9BQU8sSUFBSSxDQUFDM0ksSUFBSSxDQUFDLFlBQVk7TUFDM0IsSUFBSVUsS0FBSyxHQUFLaEUsQ0FBQyxDQUFDLElBQUksQ0FBQztNQUNyQixJQUFJOEgsSUFBSSxHQUFNOUQsS0FBSyxDQUFDOEQsSUFBSSxDQUFDLGFBQWEsQ0FBQztNQUN2QyxJQUFJNUgsT0FBTyxHQUFHRixDQUFDLENBQUMwTSxNQUFNLENBQUMsQ0FBQyxDQUFDLEVBQUU4RCxRQUFRLENBQUM3RCxRQUFRLEVBQUUzSSxLQUFLLENBQUM4RCxJQUFJLEVBQUUsRUFBRSxRQUFPbUUsTUFBTSxLQUFJLFFBQVEsSUFBSUEsTUFBTSxDQUFDO01BRWhHLElBQUksQ0FBQ25FLElBQUksSUFBSTVILE9BQU8sQ0FBQ2lOLE1BQU0sSUFBSSxXQUFXLENBQUNqRSxJQUFJLENBQUMrQyxNQUFNLENBQUMsRUFBRS9MLE9BQU8sQ0FBQ2lOLE1BQU0sR0FBRyxLQUFLO01BQy9FLElBQUksQ0FBQ3JGLElBQUksRUFBRTlELEtBQUssQ0FBQzhELElBQUksQ0FBQyxhQUFhLEVBQUdBLElBQUksR0FBRyxJQUFJMEksUUFBUSxDQUFDLElBQUksRUFBRXRRLE9BQU8sQ0FBQyxDQUFFO01BQzFFLElBQUksT0FBTytMLE1BQU0sSUFBSSxRQUFRLEVBQUVuRSxJQUFJLENBQUNtRSxNQUFNLENBQUMsRUFBRTtJQUMvQyxDQUFDLENBQUM7RUFDSjtFQUVBLElBQUlFLEdBQUcsR0FBR25NLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzZNLFFBQVE7RUFFdkJ6UixDQUFDLENBQUM0RSxFQUFFLENBQUM2TSxRQUFRLEdBQWV6RixNQUFNO0VBQ2xDaE0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDNk0sUUFBUSxDQUFDcEYsV0FBVyxHQUFHbUUsUUFBUTs7RUFHcEM7RUFDQTs7RUFFQXhRLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzZNLFFBQVEsQ0FBQ25GLFVBQVUsR0FBRyxZQUFZO0lBQ3JDdE0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDNk0sUUFBUSxHQUFHdEYsR0FBRztJQUNuQixPQUFPLElBQUk7RUFDYixDQUFDOztFQUdEO0VBQ0E7O0VBRUFuTSxDQUFDLENBQUN3SixRQUFRLENBQUMsQ0FBQ3pGLEVBQUUsQ0FBQyw0QkFBNEIsRUFBRSwwQkFBMEIsRUFBRSxVQUFVckIsQ0FBQyxFQUFFO0lBQ3BGLElBQUlzQixLQUFLLEdBQUtoRSxDQUFDLENBQUMsSUFBSSxDQUFDO0lBRXJCLElBQUksQ0FBQ2dFLEtBQUssQ0FBQ3dILElBQUksQ0FBQyxhQUFhLENBQUMsRUFBRTlJLENBQUMsQ0FBQ2tGLGNBQWMsRUFBRTtJQUVsRCxJQUFJakYsT0FBTyxHQUFHNk8sb0JBQW9CLENBQUN4TixLQUFLLENBQUM7SUFDekMsSUFBSThELElBQUksR0FBTW5GLE9BQU8sQ0FBQ21GLElBQUksQ0FBQyxhQUFhLENBQUM7SUFDekMsSUFBSW1FLE1BQU0sR0FBSW5FLElBQUksR0FBRyxRQUFRLEdBQUc5RCxLQUFLLENBQUM4RCxJQUFJLEVBQUU7SUFFNUNrRSxNQUFNLENBQUNFLElBQUksQ0FBQ3ZKLE9BQU8sRUFBRXNKLE1BQU0sQ0FBQztFQUM5QixDQUFDLENBQUM7QUFFSixDQUFDLENBQUNuTSxNQUFNLENBQUM7O0FBRVQ7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBR0EsQ0FBQyxVQUFVRSxDQUFDLEVBQUU7RUFDWixZQUFZOztFQUVaO0VBQ0E7RUFFQSxJQUFJMFIsUUFBUSxHQUFHLG9CQUFvQjtFQUNuQyxJQUFJdkUsTUFBTSxHQUFLLDBCQUEwQjtFQUN6QyxJQUFJd0UsUUFBUSxHQUFHLFNBQVhBLFFBQVEsQ0FBYW5GLE9BQU8sRUFBRTtJQUNoQ3hNLENBQUMsQ0FBQ3dNLE9BQU8sQ0FBQyxDQUFDekksRUFBRSxDQUFDLG1CQUFtQixFQUFFLElBQUksQ0FBQ29KLE1BQU0sQ0FBQztFQUNqRCxDQUFDO0VBRUR3RSxRQUFRLENBQUN2RyxPQUFPLEdBQUcsT0FBTztFQUUxQixTQUFTd0YsU0FBUyxDQUFDNU0sS0FBSyxFQUFFO0lBQ3hCLElBQUl1SCxRQUFRLEdBQUd2SCxLQUFLLENBQUN3SCxJQUFJLENBQUMsYUFBYSxDQUFDO0lBRXhDLElBQUksQ0FBQ0QsUUFBUSxFQUFFO01BQ2JBLFFBQVEsR0FBR3ZILEtBQUssQ0FBQ3dILElBQUksQ0FBQyxNQUFNLENBQUM7TUFDN0JELFFBQVEsR0FBR0EsUUFBUSxJQUFJLFdBQVcsQ0FBQ3JDLElBQUksQ0FBQ3FDLFFBQVEsQ0FBQyxJQUFJQSxRQUFRLENBQUNFLE9BQU8sQ0FBQyxnQkFBZ0IsRUFBRSxFQUFFLENBQUMsRUFBQztJQUM5Rjs7SUFFQSxJQUFJQyxPQUFPLEdBQUdILFFBQVEsSUFBSXZMLENBQUMsQ0FBQ3VMLFFBQVEsQ0FBQztJQUVyQyxPQUFPRyxPQUFPLElBQUlBLE9BQU8sQ0FBQ3ZJLE1BQU0sR0FBR3VJLE9BQU8sR0FBRzFILEtBQUssQ0FBQ2pCLE1BQU0sRUFBRTtFQUM3RDtFQUVBLFNBQVM2TyxVQUFVLENBQUNsUCxDQUFDLEVBQUU7SUFDckIsSUFBSUEsQ0FBQyxJQUFJQSxDQUFDLENBQUM4TCxLQUFLLEtBQUssQ0FBQyxFQUFFO0lBQ3hCeE8sQ0FBQyxDQUFDMFIsUUFBUSxDQUFDLENBQUMzRixNQUFNLEVBQUU7SUFDcEIvTCxDQUFDLENBQUNtTixNQUFNLENBQUMsQ0FBQzdKLElBQUksQ0FBQyxZQUFZO01BQ3pCLElBQUlVLEtBQUssR0FBV2hFLENBQUMsQ0FBQyxJQUFJLENBQUM7TUFDM0IsSUFBSTBMLE9BQU8sR0FBU2tGLFNBQVMsQ0FBQzVNLEtBQUssQ0FBQztNQUNwQyxJQUFJNEwsYUFBYSxHQUFHO1FBQUVBLGFBQWEsRUFBRTtNQUFLLENBQUM7TUFFM0MsSUFBSSxDQUFDbEUsT0FBTyxDQUFDMUksUUFBUSxDQUFDLE1BQU0sQ0FBQyxFQUFFO01BRS9CLElBQUlOLENBQUMsSUFBSUEsQ0FBQyxDQUFDK0ssSUFBSSxJQUFJLE9BQU8sSUFBSSxpQkFBaUIsQ0FBQ3ZFLElBQUksQ0FBQ3hHLENBQUMsQ0FBQ0UsTUFBTSxDQUFDMkwsT0FBTyxDQUFDLElBQUl2TyxDQUFDLENBQUM2UixRQUFRLENBQUNuRyxPQUFPLENBQUMsQ0FBQyxDQUFDLEVBQUVoSixDQUFDLENBQUNFLE1BQU0sQ0FBQyxFQUFFO01BRTVHOEksT0FBTyxDQUFDckIsT0FBTyxDQUFDM0gsQ0FBQyxHQUFHMUMsQ0FBQyxDQUFDMkwsS0FBSyxDQUFDLGtCQUFrQixFQUFFaUUsYUFBYSxDQUFDLENBQUM7TUFFL0QsSUFBSWxOLENBQUMsQ0FBQ2tKLGtCQUFrQixFQUFFLEVBQUU7TUFFNUI1SCxLQUFLLENBQUN3SCxJQUFJLENBQUMsZUFBZSxFQUFFLE9BQU8sQ0FBQztNQUNwQ0UsT0FBTyxDQUFDckksV0FBVyxDQUFDLE1BQU0sQ0FBQyxDQUFDZ0gsT0FBTyxDQUFDckssQ0FBQyxDQUFDMkwsS0FBSyxDQUFDLG9CQUFvQixFQUFFaUUsYUFBYSxDQUFDLENBQUM7SUFDbkYsQ0FBQyxDQUFDO0VBQ0o7RUFFQStCLFFBQVEsQ0FBQ3JHLFNBQVMsQ0FBQzZCLE1BQU0sR0FBRyxVQUFVekssQ0FBQyxFQUFFO0lBQ3ZDLElBQUlzQixLQUFLLEdBQUdoRSxDQUFDLENBQUMsSUFBSSxDQUFDO0lBRW5CLElBQUlnRSxLQUFLLENBQUNJLEVBQUUsQ0FBQyxzQkFBc0IsQ0FBQyxFQUFFO0lBRXRDLElBQUlzSCxPQUFPLEdBQUlrRixTQUFTLENBQUM1TSxLQUFLLENBQUM7SUFDL0IsSUFBSThOLFFBQVEsR0FBR3BHLE9BQU8sQ0FBQzFJLFFBQVEsQ0FBQyxNQUFNLENBQUM7SUFFdkM0TyxVQUFVLEVBQUU7SUFFWixJQUFJLENBQUNFLFFBQVEsRUFBRTtNQUNiLElBQUksY0FBYyxJQUFJdEksUUFBUSxDQUFDNEUsZUFBZSxJQUFJLENBQUMxQyxPQUFPLENBQUN0RSxPQUFPLENBQUMsYUFBYSxDQUFDLENBQUNqRSxNQUFNLEVBQUU7UUFDeEY7UUFDQW5ELENBQUMsQ0FBQ3dKLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLEtBQUssQ0FBQyxDQUFDLENBQzdCNUYsUUFBUSxDQUFDLG1CQUFtQixDQUFDLENBQzdCa08sV0FBVyxDQUFDL1IsQ0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDLENBQ3BCK0QsRUFBRSxDQUFDLE9BQU8sRUFBRTZOLFVBQVUsQ0FBQztNQUM1QjtNQUVBLElBQUloQyxhQUFhLEdBQUc7UUFBRUEsYUFBYSxFQUFFO01BQUssQ0FBQztNQUMzQ2xFLE9BQU8sQ0FBQ3JCLE9BQU8sQ0FBQzNILENBQUMsR0FBRzFDLENBQUMsQ0FBQzJMLEtBQUssQ0FBQyxrQkFBa0IsRUFBRWlFLGFBQWEsQ0FBQyxDQUFDO01BRS9ELElBQUlsTixDQUFDLENBQUNrSixrQkFBa0IsRUFBRSxFQUFFO01BRTVCNUgsS0FBSyxDQUNGcUcsT0FBTyxDQUFDLE9BQU8sQ0FBQyxDQUNoQm1CLElBQUksQ0FBQyxlQUFlLEVBQUUsTUFBTSxDQUFDO01BRWhDRSxPQUFPLENBQ0pwSCxXQUFXLENBQUMsTUFBTSxDQUFDLENBQ25CK0YsT0FBTyxDQUFDckssQ0FBQyxDQUFDMkwsS0FBSyxDQUFDLG1CQUFtQixFQUFFaUUsYUFBYSxDQUFDLENBQUM7SUFDekQ7SUFFQSxPQUFPLEtBQUs7RUFDZCxDQUFDO0VBRUQrQixRQUFRLENBQUNyRyxTQUFTLENBQUM0QyxPQUFPLEdBQUcsVUFBVXhMLENBQUMsRUFBRTtJQUN4QyxJQUFJLENBQUMsZUFBZSxDQUFDd0csSUFBSSxDQUFDeEcsQ0FBQyxDQUFDOEwsS0FBSyxDQUFDLElBQUksaUJBQWlCLENBQUN0RixJQUFJLENBQUN4RyxDQUFDLENBQUNFLE1BQU0sQ0FBQzJMLE9BQU8sQ0FBQyxFQUFFO0lBRWhGLElBQUl2SyxLQUFLLEdBQUdoRSxDQUFDLENBQUMsSUFBSSxDQUFDO0lBRW5CMEMsQ0FBQyxDQUFDa0YsY0FBYyxFQUFFO0lBQ2xCbEYsQ0FBQyxDQUFDc1AsZUFBZSxFQUFFO0lBRW5CLElBQUloTyxLQUFLLENBQUNJLEVBQUUsQ0FBQyxzQkFBc0IsQ0FBQyxFQUFFO0lBRXRDLElBQUlzSCxPQUFPLEdBQUlrRixTQUFTLENBQUM1TSxLQUFLLENBQUM7SUFDL0IsSUFBSThOLFFBQVEsR0FBR3BHLE9BQU8sQ0FBQzFJLFFBQVEsQ0FBQyxNQUFNLENBQUM7SUFFdkMsSUFBSSxDQUFDOE8sUUFBUSxJQUFJcFAsQ0FBQyxDQUFDOEwsS0FBSyxJQUFJLEVBQUUsSUFBSXNELFFBQVEsSUFBSXBQLENBQUMsQ0FBQzhMLEtBQUssSUFBSSxFQUFFLEVBQUU7TUFDM0QsSUFBSTlMLENBQUMsQ0FBQzhMLEtBQUssSUFBSSxFQUFFLEVBQUU5QyxPQUFPLENBQUM5SCxJQUFJLENBQUN1SixNQUFNLENBQUMsQ0FBQzlDLE9BQU8sQ0FBQyxPQUFPLENBQUM7TUFDeEQsT0FBT3JHLEtBQUssQ0FBQ3FHLE9BQU8sQ0FBQyxPQUFPLENBQUM7SUFDL0I7SUFFQSxJQUFJNEgsSUFBSSxHQUFHLDhCQUE4QjtJQUN6QyxJQUFJakUsTUFBTSxHQUFHdEMsT0FBTyxDQUFDOUgsSUFBSSxDQUFDLGdCQUFnQixHQUFHcU8sSUFBSSxDQUFDO0lBRWxELElBQUksQ0FBQ2pFLE1BQU0sQ0FBQzdLLE1BQU0sRUFBRTtJQUVwQixJQUFJMEwsS0FBSyxHQUFHYixNQUFNLENBQUNhLEtBQUssQ0FBQ25NLENBQUMsQ0FBQ0UsTUFBTSxDQUFDO0lBRWxDLElBQUlGLENBQUMsQ0FBQzhMLEtBQUssSUFBSSxFQUFFLElBQUlLLEtBQUssR0FBRyxDQUFDLEVBQWtCQSxLQUFLLEVBQUUsRUFBUztJQUNoRSxJQUFJbk0sQ0FBQyxDQUFDOEwsS0FBSyxJQUFJLEVBQUUsSUFBSUssS0FBSyxHQUFHYixNQUFNLENBQUM3SyxNQUFNLEdBQUcsQ0FBQyxFQUFFMEwsS0FBSyxFQUFFLEVBQVM7SUFDaEUsSUFBSSxDQUFDLENBQUNBLEtBQUssRUFBcUNBLEtBQUssR0FBRyxDQUFDO0lBRXpEYixNQUFNLENBQUNxQixFQUFFLENBQUNSLEtBQUssQ0FBQyxDQUFDeEUsT0FBTyxDQUFDLE9BQU8sQ0FBQztFQUNuQyxDQUFDOztFQUdEO0VBQ0E7O0VBRUEsU0FBUzJCLE1BQU0sQ0FBQ0MsTUFBTSxFQUFFO0lBQ3RCLE9BQU8sSUFBSSxDQUFDM0ksSUFBSSxDQUFDLFlBQVk7TUFDM0IsSUFBSVUsS0FBSyxHQUFHaEUsQ0FBQyxDQUFDLElBQUksQ0FBQztNQUNuQixJQUFJOEgsSUFBSSxHQUFJOUQsS0FBSyxDQUFDOEQsSUFBSSxDQUFDLGFBQWEsQ0FBQztNQUVyQyxJQUFJLENBQUNBLElBQUksRUFBRTlELEtBQUssQ0FBQzhELElBQUksQ0FBQyxhQUFhLEVBQUdBLElBQUksR0FBRyxJQUFJNkosUUFBUSxDQUFDLElBQUksQ0FBQyxDQUFFO01BQ2pFLElBQUksT0FBTzFGLE1BQU0sSUFBSSxRQUFRLEVBQUVuRSxJQUFJLENBQUNtRSxNQUFNLENBQUMsQ0FBQ0MsSUFBSSxDQUFDbEksS0FBSyxDQUFDO0lBQ3pELENBQUMsQ0FBQztFQUNKO0VBRUEsSUFBSW1JLEdBQUcsR0FBR25NLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzRDLFFBQVE7RUFFdkJ4SCxDQUFDLENBQUM0RSxFQUFFLENBQUM0QyxRQUFRLEdBQWV3RSxNQUFNO0VBQ2xDaE0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDNEMsUUFBUSxDQUFDNkUsV0FBVyxHQUFHc0YsUUFBUTs7RUFHcEM7RUFDQTs7RUFFQTNSLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzRDLFFBQVEsQ0FBQzhFLFVBQVUsR0FBRyxZQUFZO0lBQ3JDdE0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDNEMsUUFBUSxHQUFHMkUsR0FBRztJQUNuQixPQUFPLElBQUk7RUFDYixDQUFDOztFQUdEO0VBQ0E7O0VBRUFuTSxDQUFDLENBQUN3SixRQUFRLENBQUMsQ0FDUnpGLEVBQUUsQ0FBQyw0QkFBNEIsRUFBRTZOLFVBQVUsQ0FBQyxDQUM1QzdOLEVBQUUsQ0FBQyw0QkFBNEIsRUFBRSxnQkFBZ0IsRUFBRSxVQUFVckIsQ0FBQyxFQUFFO0lBQUVBLENBQUMsQ0FBQ3NQLGVBQWUsRUFBRTtFQUFDLENBQUMsQ0FBQyxDQUN4RmpPLEVBQUUsQ0FBQyw0QkFBNEIsRUFBRW9KLE1BQU0sRUFBRXdFLFFBQVEsQ0FBQ3JHLFNBQVMsQ0FBQzZCLE1BQU0sQ0FBQyxDQUNuRXBKLEVBQUUsQ0FBQyw4QkFBOEIsRUFBRW9KLE1BQU0sRUFBRXdFLFFBQVEsQ0FBQ3JHLFNBQVMsQ0FBQzRDLE9BQU8sQ0FBQyxDQUN0RW5LLEVBQUUsQ0FBQyw4QkFBOEIsRUFBRSxnQkFBZ0IsRUFBRTROLFFBQVEsQ0FBQ3JHLFNBQVMsQ0FBQzRDLE9BQU8sQ0FBQztBQUVyRixDQUFDLENBQUNwTyxNQUFNLENBQUM7O0FBRVQ7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBR0EsQ0FBQyxVQUFVRSxDQUFDLEVBQUU7RUFDWixZQUFZOztFQUVaO0VBQ0E7RUFFQSxJQUFJa1MsS0FBSyxHQUFHLFNBQVJBLEtBQUssQ0FBYTFGLE9BQU8sRUFBRXRNLE9BQU8sRUFBRTtJQUN0QyxJQUFJLENBQUNBLE9BQU8sR0FBZUEsT0FBTztJQUNsQyxJQUFJLENBQUNvQyxLQUFLLEdBQWlCdEMsQ0FBQyxDQUFDd0osUUFBUSxDQUFDMkksSUFBSSxDQUFDO0lBQzNDLElBQUksQ0FBQzFGLFFBQVEsR0FBY3pNLENBQUMsQ0FBQ3dNLE9BQU8sQ0FBQztJQUNyQyxJQUFJLENBQUM0RixPQUFPLEdBQWUsSUFBSSxDQUFDM0YsUUFBUSxDQUFDN0ksSUFBSSxDQUFDLGVBQWUsQ0FBQztJQUM5RCxJQUFJLENBQUN5TyxTQUFTLEdBQWEsSUFBSTtJQUMvQixJQUFJLENBQUNDLE9BQU8sR0FBZSxJQUFJO0lBQy9CLElBQUksQ0FBQ0MsZUFBZSxHQUFPLElBQUk7SUFDL0IsSUFBSSxDQUFDQyxjQUFjLEdBQVEsQ0FBQztJQUM1QixJQUFJLENBQUNDLG1CQUFtQixHQUFHLEtBQUs7SUFFaEMsSUFBSSxJQUFJLENBQUN2UyxPQUFPLENBQUN3UyxNQUFNLEVBQUU7TUFDdkIsSUFBSSxDQUFDakcsUUFBUSxDQUNWN0ksSUFBSSxDQUFDLGdCQUFnQixDQUFDLENBQ3RCK08sSUFBSSxDQUFDLElBQUksQ0FBQ3pTLE9BQU8sQ0FBQ3dTLE1BQU0sRUFBRTFTLENBQUMsQ0FBQ2tOLEtBQUssQ0FBQyxZQUFZO1FBQzdDLElBQUksQ0FBQ1QsUUFBUSxDQUFDcEMsT0FBTyxDQUFDLGlCQUFpQixDQUFDO01BQzFDLENBQUMsRUFBRSxJQUFJLENBQUMsQ0FBQztJQUNiO0VBQ0YsQ0FBQztFQUVENkgsS0FBSyxDQUFDOUcsT0FBTyxHQUFJLE9BQU87RUFFeEI4RyxLQUFLLENBQUM3RyxtQkFBbUIsR0FBRyxHQUFHO0VBQy9CNkcsS0FBSyxDQUFDVSw0QkFBNEIsR0FBRyxHQUFHO0VBRXhDVixLQUFLLENBQUN2RixRQUFRLEdBQUc7SUFDZitFLFFBQVEsRUFBRSxJQUFJO0lBQ2R6RCxRQUFRLEVBQUUsSUFBSTtJQUNkbkssSUFBSSxFQUFFO0VBQ1IsQ0FBQztFQUVEb08sS0FBSyxDQUFDNUcsU0FBUyxDQUFDNkIsTUFBTSxHQUFHLFVBQVUwRixjQUFjLEVBQUU7SUFDakQsT0FBTyxJQUFJLENBQUNQLE9BQU8sR0FBRyxJQUFJLENBQUNoQixJQUFJLEVBQUUsR0FBRyxJQUFJLENBQUN4TixJQUFJLENBQUMrTyxjQUFjLENBQUM7RUFDL0QsQ0FBQztFQUVEWCxLQUFLLENBQUM1RyxTQUFTLENBQUN4SCxJQUFJLEdBQUcsVUFBVStPLGNBQWMsRUFBRTtJQUMvQyxJQUFJckQsSUFBSSxHQUFHLElBQUk7SUFDZixJQUFJOU0sQ0FBQyxHQUFNMUMsQ0FBQyxDQUFDMkwsS0FBSyxDQUFDLGVBQWUsRUFBRTtNQUFFaUUsYUFBYSxFQUFFaUQ7SUFBZSxDQUFDLENBQUM7SUFFdEUsSUFBSSxDQUFDcEcsUUFBUSxDQUFDcEMsT0FBTyxDQUFDM0gsQ0FBQyxDQUFDO0lBRXhCLElBQUksSUFBSSxDQUFDNFAsT0FBTyxJQUFJNVAsQ0FBQyxDQUFDa0osa0JBQWtCLEVBQUUsRUFBRTtJQUU1QyxJQUFJLENBQUMwRyxPQUFPLEdBQUcsSUFBSTtJQUVuQixJQUFJLENBQUNRLGNBQWMsRUFBRTtJQUNyQixJQUFJLENBQUNDLFlBQVksRUFBRTtJQUNuQixJQUFJLENBQUN6USxLQUFLLENBQUN1QixRQUFRLENBQUMsWUFBWSxDQUFDO0lBRWpDLElBQUksQ0FBQ21QLE1BQU0sRUFBRTtJQUNiLElBQUksQ0FBQ3RPLE1BQU0sRUFBRTtJQUViLElBQUksQ0FBQytILFFBQVEsQ0FBQzFJLEVBQUUsQ0FBQyx3QkFBd0IsRUFBRSx3QkFBd0IsRUFBRS9ELENBQUMsQ0FBQ2tOLEtBQUssQ0FBQyxJQUFJLENBQUNvRSxJQUFJLEVBQUUsSUFBSSxDQUFDLENBQUM7SUFFOUYsSUFBSSxDQUFDYyxPQUFPLENBQUNyTyxFQUFFLENBQUMsNEJBQTRCLEVBQUUsWUFBWTtNQUN4RHlMLElBQUksQ0FBQy9DLFFBQVEsQ0FBQ3JFLEdBQUcsQ0FBQywwQkFBMEIsRUFBRSxVQUFVMUYsQ0FBQyxFQUFFO1FBQ3pELElBQUkxQyxDQUFDLENBQUMwQyxDQUFDLENBQUNFLE1BQU0sQ0FBQyxDQUFDd0IsRUFBRSxDQUFDb0wsSUFBSSxDQUFDL0MsUUFBUSxDQUFDLEVBQUUrQyxJQUFJLENBQUNpRCxtQkFBbUIsR0FBRyxJQUFJO01BQ3BFLENBQUMsQ0FBQztJQUNKLENBQUMsQ0FBQztJQUVGLElBQUksQ0FBQ2YsUUFBUSxDQUFDLFlBQVk7TUFDeEIsSUFBSTVILFVBQVUsR0FBRzlKLENBQUMsQ0FBQ3NLLE9BQU8sQ0FBQ1IsVUFBVSxJQUFJMEYsSUFBSSxDQUFDL0MsUUFBUSxDQUFDekosUUFBUSxDQUFDLE1BQU0sQ0FBQztNQUV2RSxJQUFJLENBQUN3TSxJQUFJLENBQUMvQyxRQUFRLENBQUMxSixNQUFNLEVBQUUsQ0FBQ0ksTUFBTSxFQUFFO1FBQ2xDcU0sSUFBSSxDQUFDL0MsUUFBUSxDQUFDd0csUUFBUSxDQUFDekQsSUFBSSxDQUFDbE4sS0FBSyxDQUFDLEVBQUM7TUFDckM7O01BRUFrTixJQUFJLENBQUMvQyxRQUFRLENBQ1YzSSxJQUFJLEVBQUUsQ0FDTm9QLFNBQVMsQ0FBQyxDQUFDLENBQUM7TUFFZjFELElBQUksQ0FBQzJELFlBQVksRUFBRTtNQUVuQixJQUFJckosVUFBVSxFQUFFO1FBQ2QwRixJQUFJLENBQUMvQyxRQUFRLENBQUMsQ0FBQyxDQUFDLENBQUN1RCxXQUFXLEVBQUM7TUFDL0I7O01BRUFSLElBQUksQ0FBQy9DLFFBQVEsQ0FBQzVJLFFBQVEsQ0FBQyxJQUFJLENBQUM7TUFFNUIyTCxJQUFJLENBQUM0RCxZQUFZLEVBQUU7TUFFbkIsSUFBSTFRLENBQUMsR0FBRzFDLENBQUMsQ0FBQzJMLEtBQUssQ0FBQyxnQkFBZ0IsRUFBRTtRQUFFaUUsYUFBYSxFQUFFaUQ7TUFBZSxDQUFDLENBQUM7TUFFcEUvSSxVQUFVLEdBQ1IwRixJQUFJLENBQUM0QyxPQUFPLENBQUM7TUFBQSxDQUNWaEssR0FBRyxDQUFDLGlCQUFpQixFQUFFLFlBQVk7UUFDbENvSCxJQUFJLENBQUMvQyxRQUFRLENBQUNwQyxPQUFPLENBQUMsT0FBTyxDQUFDLENBQUNBLE9BQU8sQ0FBQzNILENBQUMsQ0FBQztNQUMzQyxDQUFDLENBQUMsQ0FDRHdILG9CQUFvQixDQUFDZ0ksS0FBSyxDQUFDN0csbUJBQW1CLENBQUMsR0FDbERtRSxJQUFJLENBQUMvQyxRQUFRLENBQUNwQyxPQUFPLENBQUMsT0FBTyxDQUFDLENBQUNBLE9BQU8sQ0FBQzNILENBQUMsQ0FBQztJQUM3QyxDQUFDLENBQUM7RUFDSixDQUFDO0VBRUR3UCxLQUFLLENBQUM1RyxTQUFTLENBQUNnRyxJQUFJLEdBQUcsVUFBVTVPLENBQUMsRUFBRTtJQUNsQyxJQUFJQSxDQUFDLEVBQUVBLENBQUMsQ0FBQ2tGLGNBQWMsRUFBRTtJQUV6QmxGLENBQUMsR0FBRzFDLENBQUMsQ0FBQzJMLEtBQUssQ0FBQyxlQUFlLENBQUM7SUFFNUIsSUFBSSxDQUFDYyxRQUFRLENBQUNwQyxPQUFPLENBQUMzSCxDQUFDLENBQUM7SUFFeEIsSUFBSSxDQUFDLElBQUksQ0FBQzRQLE9BQU8sSUFBSTVQLENBQUMsQ0FBQ2tKLGtCQUFrQixFQUFFLEVBQUU7SUFFN0MsSUFBSSxDQUFDMEcsT0FBTyxHQUFHLEtBQUs7SUFFcEIsSUFBSSxDQUFDVSxNQUFNLEVBQUU7SUFDYixJQUFJLENBQUN0TyxNQUFNLEVBQUU7SUFFYjFFLENBQUMsQ0FBQ3dKLFFBQVEsQ0FBQyxDQUFDNkosR0FBRyxDQUFDLGtCQUFrQixDQUFDO0lBRW5DLElBQUksQ0FBQzVHLFFBQVEsQ0FDVnBKLFdBQVcsQ0FBQyxJQUFJLENBQUMsQ0FDakJnUSxHQUFHLENBQUMsd0JBQXdCLENBQUMsQ0FDN0JBLEdBQUcsQ0FBQywwQkFBMEIsQ0FBQztJQUVsQyxJQUFJLENBQUNqQixPQUFPLENBQUNpQixHQUFHLENBQUMsNEJBQTRCLENBQUM7SUFFOUNyVCxDQUFDLENBQUNzSyxPQUFPLENBQUNSLFVBQVUsSUFBSSxJQUFJLENBQUMyQyxRQUFRLENBQUN6SixRQUFRLENBQUMsTUFBTSxDQUFDLEdBQ3BELElBQUksQ0FBQ3lKLFFBQVEsQ0FDVnJFLEdBQUcsQ0FBQyxpQkFBaUIsRUFBRXBJLENBQUMsQ0FBQ2tOLEtBQUssQ0FBQyxJQUFJLENBQUNvRyxTQUFTLEVBQUUsSUFBSSxDQUFDLENBQUMsQ0FDckRwSixvQkFBb0IsQ0FBQ2dJLEtBQUssQ0FBQzdHLG1CQUFtQixDQUFDLEdBQ2xELElBQUksQ0FBQ2lJLFNBQVMsRUFBRTtFQUNwQixDQUFDO0VBRURwQixLQUFLLENBQUM1RyxTQUFTLENBQUM4SCxZQUFZLEdBQUcsWUFBWTtJQUN6Q3BULENBQUMsQ0FBQ3dKLFFBQVEsQ0FBQyxDQUNSNkosR0FBRyxDQUFDLGtCQUFrQixDQUFDLENBQUM7SUFBQSxDQUN4QnRQLEVBQUUsQ0FBQyxrQkFBa0IsRUFBRS9ELENBQUMsQ0FBQ2tOLEtBQUssQ0FBQyxVQUFVeEssQ0FBQyxFQUFFO01BQzNDLElBQUksSUFBSSxDQUFDK0osUUFBUSxDQUFDLENBQUMsQ0FBQyxLQUFLL0osQ0FBQyxDQUFDRSxNQUFNLElBQUksQ0FBQyxJQUFJLENBQUM2SixRQUFRLENBQUM4RyxHQUFHLENBQUM3USxDQUFDLENBQUNFLE1BQU0sQ0FBQyxDQUFDTyxNQUFNLEVBQUU7UUFDeEUsSUFBSSxDQUFDc0osUUFBUSxDQUFDcEMsT0FBTyxDQUFDLE9BQU8sQ0FBQztNQUNoQztJQUNGLENBQUMsRUFBRSxJQUFJLENBQUMsQ0FBQztFQUNiLENBQUM7RUFFRDZILEtBQUssQ0FBQzVHLFNBQVMsQ0FBQzBILE1BQU0sR0FBRyxZQUFZO0lBQ25DLElBQUksSUFBSSxDQUFDVixPQUFPLElBQUksSUFBSSxDQUFDcFMsT0FBTyxDQUFDK04sUUFBUSxFQUFFO01BQ3pDLElBQUksQ0FBQ3hCLFFBQVEsQ0FBQzFJLEVBQUUsQ0FBQywwQkFBMEIsRUFBRS9ELENBQUMsQ0FBQ2tOLEtBQUssQ0FBQyxVQUFVeEssQ0FBQyxFQUFFO1FBQ2hFQSxDQUFDLENBQUM4TCxLQUFLLElBQUksRUFBRSxJQUFJLElBQUksQ0FBQzhDLElBQUksRUFBRTtNQUM5QixDQUFDLEVBQUUsSUFBSSxDQUFDLENBQUM7SUFDWCxDQUFDLE1BQU0sSUFBSSxDQUFDLElBQUksQ0FBQ2dCLE9BQU8sRUFBRTtNQUN4QixJQUFJLENBQUM3RixRQUFRLENBQUM0RyxHQUFHLENBQUMsMEJBQTBCLENBQUM7SUFDL0M7RUFDRixDQUFDO0VBRURuQixLQUFLLENBQUM1RyxTQUFTLENBQUM1RyxNQUFNLEdBQUcsWUFBWTtJQUNuQyxJQUFJLElBQUksQ0FBQzROLE9BQU8sRUFBRTtNQUNoQnRTLENBQUMsQ0FBQ3dDLE1BQU0sQ0FBQyxDQUFDdUIsRUFBRSxDQUFDLGlCQUFpQixFQUFFL0QsQ0FBQyxDQUFDa04sS0FBSyxDQUFDLElBQUksQ0FBQ3NHLFlBQVksRUFBRSxJQUFJLENBQUMsQ0FBQztJQUNuRSxDQUFDLE1BQU07TUFDTHhULENBQUMsQ0FBQ3dDLE1BQU0sQ0FBQyxDQUFDNlEsR0FBRyxDQUFDLGlCQUFpQixDQUFDO0lBQ2xDO0VBQ0YsQ0FBQztFQUVEbkIsS0FBSyxDQUFDNUcsU0FBUyxDQUFDZ0ksU0FBUyxHQUFHLFlBQVk7SUFDdEMsSUFBSTlELElBQUksR0FBRyxJQUFJO0lBQ2YsSUFBSSxDQUFDL0MsUUFBUSxDQUFDNkUsSUFBSSxFQUFFO0lBQ3BCLElBQUksQ0FBQ0ksUUFBUSxDQUFDLFlBQVk7TUFDeEJsQyxJQUFJLENBQUNsTixLQUFLLENBQUNlLFdBQVcsQ0FBQyxZQUFZLENBQUM7TUFDcENtTSxJQUFJLENBQUNpRSxnQkFBZ0IsRUFBRTtNQUN2QmpFLElBQUksQ0FBQ2tFLGNBQWMsRUFBRTtNQUNyQmxFLElBQUksQ0FBQy9DLFFBQVEsQ0FBQ3BDLE9BQU8sQ0FBQyxpQkFBaUIsQ0FBQztJQUMxQyxDQUFDLENBQUM7RUFDSixDQUFDO0VBRUQ2SCxLQUFLLENBQUM1RyxTQUFTLENBQUNxSSxjQUFjLEdBQUcsWUFBWTtJQUMzQyxJQUFJLENBQUN0QixTQUFTLElBQUksSUFBSSxDQUFDQSxTQUFTLENBQUN0RyxNQUFNLEVBQUU7SUFDekMsSUFBSSxDQUFDc0csU0FBUyxHQUFHLElBQUk7RUFDdkIsQ0FBQztFQUVESCxLQUFLLENBQUM1RyxTQUFTLENBQUNvRyxRQUFRLEdBQUcsVUFBVXhKLFFBQVEsRUFBRTtJQUM3QyxJQUFJc0gsSUFBSSxHQUFHLElBQUk7SUFDZixJQUFJb0UsT0FBTyxHQUFHLElBQUksQ0FBQ25ILFFBQVEsQ0FBQ3pKLFFBQVEsQ0FBQyxNQUFNLENBQUMsR0FBRyxNQUFNLEdBQUcsRUFBRTtJQUUxRCxJQUFJLElBQUksQ0FBQ3NQLE9BQU8sSUFBSSxJQUFJLENBQUNwUyxPQUFPLENBQUN3UixRQUFRLEVBQUU7TUFDekMsSUFBSW1DLFNBQVMsR0FBRzdULENBQUMsQ0FBQ3NLLE9BQU8sQ0FBQ1IsVUFBVSxJQUFJOEosT0FBTztNQUUvQyxJQUFJLENBQUN2QixTQUFTLEdBQUdyUyxDQUFDLENBQUN3SixRQUFRLENBQUNDLGFBQWEsQ0FBQyxLQUFLLENBQUMsQ0FBQyxDQUM5QzVGLFFBQVEsQ0FBQyxpQkFBaUIsR0FBRytQLE9BQU8sQ0FBQyxDQUNyQ1gsUUFBUSxDQUFDLElBQUksQ0FBQzNRLEtBQUssQ0FBQztNQUV2QixJQUFJLENBQUNtSyxRQUFRLENBQUMxSSxFQUFFLENBQUMsd0JBQXdCLEVBQUUvRCxDQUFDLENBQUNrTixLQUFLLENBQUMsVUFBVXhLLENBQUMsRUFBRTtRQUM5RCxJQUFJLElBQUksQ0FBQytQLG1CQUFtQixFQUFFO1VBQzVCLElBQUksQ0FBQ0EsbUJBQW1CLEdBQUcsS0FBSztVQUNoQztRQUNGO1FBQ0EsSUFBSS9QLENBQUMsQ0FBQ0UsTUFBTSxLQUFLRixDQUFDLENBQUNvUixhQUFhLEVBQUU7UUFDbEMsSUFBSSxDQUFDNVQsT0FBTyxDQUFDd1IsUUFBUSxJQUFJLFFBQVEsR0FDN0IsSUFBSSxDQUFDakYsUUFBUSxDQUFDLENBQUMsQ0FBQyxDQUFDNUYsS0FBSyxFQUFFLEdBQ3hCLElBQUksQ0FBQ3lLLElBQUksRUFBRTtNQUNqQixDQUFDLEVBQUUsSUFBSSxDQUFDLENBQUM7TUFFVCxJQUFJdUMsU0FBUyxFQUFFLElBQUksQ0FBQ3hCLFNBQVMsQ0FBQyxDQUFDLENBQUMsQ0FBQ3JDLFdBQVcsRUFBQzs7TUFFN0MsSUFBSSxDQUFDcUMsU0FBUyxDQUFDeE8sUUFBUSxDQUFDLElBQUksQ0FBQztNQUU3QixJQUFJLENBQUNxRSxRQUFRLEVBQUU7TUFFZjJMLFNBQVMsR0FDUCxJQUFJLENBQUN4QixTQUFTLENBQ1hqSyxHQUFHLENBQUMsaUJBQWlCLEVBQUVGLFFBQVEsQ0FBQyxDQUNoQ2dDLG9CQUFvQixDQUFDZ0ksS0FBSyxDQUFDVSw0QkFBNEIsQ0FBQyxHQUMzRDFLLFFBQVEsRUFBRTtJQUVkLENBQUMsTUFBTSxJQUFJLENBQUMsSUFBSSxDQUFDb0ssT0FBTyxJQUFJLElBQUksQ0FBQ0QsU0FBUyxFQUFFO01BQzFDLElBQUksQ0FBQ0EsU0FBUyxDQUFDaFAsV0FBVyxDQUFDLElBQUksQ0FBQztNQUVoQyxJQUFJMFEsY0FBYyxHQUFHLFNBQWpCQSxjQUFjLEdBQWU7UUFDL0J2RSxJQUFJLENBQUNtRSxjQUFjLEVBQUU7UUFDckJ6TCxRQUFRLElBQUlBLFFBQVEsRUFBRTtNQUN4QixDQUFDO01BQ0RsSSxDQUFDLENBQUNzSyxPQUFPLENBQUNSLFVBQVUsSUFBSSxJQUFJLENBQUMyQyxRQUFRLENBQUN6SixRQUFRLENBQUMsTUFBTSxDQUFDLEdBQ3BELElBQUksQ0FBQ3FQLFNBQVMsQ0FDWGpLLEdBQUcsQ0FBQyxpQkFBaUIsRUFBRTJMLGNBQWMsQ0FBQyxDQUN0QzdKLG9CQUFvQixDQUFDZ0ksS0FBSyxDQUFDVSw0QkFBNEIsQ0FBQyxHQUMzRG1CLGNBQWMsRUFBRTtJQUVwQixDQUFDLE1BQU0sSUFBSTdMLFFBQVEsRUFBRTtNQUNuQkEsUUFBUSxFQUFFO0lBQ1o7RUFDRixDQUFDOztFQUVEOztFQUVBZ0ssS0FBSyxDQUFDNUcsU0FBUyxDQUFDa0ksWUFBWSxHQUFHLFlBQVk7SUFDekMsSUFBSSxDQUFDTCxZQUFZLEVBQUU7RUFDckIsQ0FBQztFQUVEakIsS0FBSyxDQUFDNUcsU0FBUyxDQUFDNkgsWUFBWSxHQUFHLFlBQVk7SUFDekMsSUFBSWEsa0JBQWtCLEdBQUcsSUFBSSxDQUFDdkgsUUFBUSxDQUFDLENBQUMsQ0FBQyxDQUFDd0gsWUFBWSxHQUFHekssUUFBUSxDQUFDNEUsZUFBZSxDQUFDOEYsWUFBWTtJQUU5RixJQUFJLENBQUN6SCxRQUFRLENBQUMwSCxHQUFHLENBQUM7TUFDaEJDLFdBQVcsRUFBRyxDQUFDLElBQUksQ0FBQ0MsaUJBQWlCLElBQUlMLGtCQUFrQixHQUFHLElBQUksQ0FBQ3hCLGNBQWMsR0FBRyxFQUFFO01BQ3RGOEIsWUFBWSxFQUFFLElBQUksQ0FBQ0QsaUJBQWlCLElBQUksQ0FBQ0wsa0JBQWtCLEdBQUcsSUFBSSxDQUFDeEIsY0FBYyxHQUFHO0lBQ3RGLENBQUMsQ0FBQztFQUNKLENBQUM7RUFFRE4sS0FBSyxDQUFDNUcsU0FBUyxDQUFDbUksZ0JBQWdCLEdBQUcsWUFBWTtJQUM3QyxJQUFJLENBQUNoSCxRQUFRLENBQUMwSCxHQUFHLENBQUM7TUFDaEJDLFdBQVcsRUFBRSxFQUFFO01BQ2ZFLFlBQVksRUFBRTtJQUNoQixDQUFDLENBQUM7RUFDSixDQUFDO0VBRURwQyxLQUFLLENBQUM1RyxTQUFTLENBQUN3SCxjQUFjLEdBQUcsWUFBWTtJQUMzQyxJQUFJeUIsZUFBZSxHQUFHL1IsTUFBTSxDQUFDZ1MsVUFBVTtJQUN2QyxJQUFJLENBQUNELGVBQWUsRUFBRTtNQUFFO01BQ3RCLElBQUlFLG1CQUFtQixHQUFHakwsUUFBUSxDQUFDNEUsZUFBZSxDQUFDc0cscUJBQXFCLEVBQUU7TUFDMUVILGVBQWUsR0FBR0UsbUJBQW1CLENBQUNFLEtBQUssR0FBR0MsSUFBSSxDQUFDQyxHQUFHLENBQUNKLG1CQUFtQixDQUFDSyxJQUFJLENBQUM7SUFDbEY7SUFDQSxJQUFJLENBQUNULGlCQUFpQixHQUFHN0ssUUFBUSxDQUFDMkksSUFBSSxDQUFDNEMsV0FBVyxHQUFHUixlQUFlO0lBQ3BFLElBQUksQ0FBQy9CLGNBQWMsR0FBRyxJQUFJLENBQUN3QyxnQkFBZ0IsRUFBRTtFQUMvQyxDQUFDO0VBRUQ5QyxLQUFLLENBQUM1RyxTQUFTLENBQUN5SCxZQUFZLEdBQUcsWUFBWTtJQUN6QyxJQUFJa0MsT0FBTyxHQUFHQyxRQUFRLENBQUUsSUFBSSxDQUFDNVMsS0FBSyxDQUFDNlIsR0FBRyxDQUFDLGVBQWUsQ0FBQyxJQUFJLENBQUMsRUFBRyxFQUFFLENBQUM7SUFDbEUsSUFBSSxDQUFDNUIsZUFBZSxHQUFHL0ksUUFBUSxDQUFDMkksSUFBSSxDQUFDbkksS0FBSyxDQUFDc0ssWUFBWSxJQUFJLEVBQUU7SUFDN0QsSUFBSSxJQUFJLENBQUNELGlCQUFpQixFQUFFLElBQUksQ0FBQy9SLEtBQUssQ0FBQzZSLEdBQUcsQ0FBQyxlQUFlLEVBQUVjLE9BQU8sR0FBRyxJQUFJLENBQUN6QyxjQUFjLENBQUM7RUFDNUYsQ0FBQztFQUVETixLQUFLLENBQUM1RyxTQUFTLENBQUNvSSxjQUFjLEdBQUcsWUFBWTtJQUMzQyxJQUFJLENBQUNwUixLQUFLLENBQUM2UixHQUFHLENBQUMsZUFBZSxFQUFFLElBQUksQ0FBQzVCLGVBQWUsQ0FBQztFQUN2RCxDQUFDO0VBRURMLEtBQUssQ0FBQzVHLFNBQVMsQ0FBQzBKLGdCQUFnQixHQUFHLFlBQVk7SUFBRTtJQUMvQyxJQUFJRyxTQUFTLEdBQUczTCxRQUFRLENBQUNDLGFBQWEsQ0FBQyxLQUFLLENBQUM7SUFDN0MwTCxTQUFTLENBQUN0TSxTQUFTLEdBQUcseUJBQXlCO0lBQy9DLElBQUksQ0FBQ3ZHLEtBQUssQ0FBQzhTLE1BQU0sQ0FBQ0QsU0FBUyxDQUFDO0lBQzVCLElBQUkzQyxjQUFjLEdBQUcyQyxTQUFTLENBQUNuRixXQUFXLEdBQUdtRixTQUFTLENBQUNKLFdBQVc7SUFDbEUsSUFBSSxDQUFDelMsS0FBSyxDQUFDLENBQUMsQ0FBQyxDQUFDK1MsV0FBVyxDQUFDRixTQUFTLENBQUM7SUFDcEMsT0FBTzNDLGNBQWM7RUFDdkIsQ0FBQzs7RUFHRDtFQUNBOztFQUVBLFNBQVN4RyxNQUFNLENBQUNDLE1BQU0sRUFBRTRHLGNBQWMsRUFBRTtJQUN0QyxPQUFPLElBQUksQ0FBQ3ZQLElBQUksQ0FBQyxZQUFZO01BQzNCLElBQUlVLEtBQUssR0FBS2hFLENBQUMsQ0FBQyxJQUFJLENBQUM7TUFDckIsSUFBSThILElBQUksR0FBTTlELEtBQUssQ0FBQzhELElBQUksQ0FBQyxVQUFVLENBQUM7TUFDcEMsSUFBSTVILE9BQU8sR0FBR0YsQ0FBQyxDQUFDME0sTUFBTSxDQUFDLENBQUMsQ0FBQyxFQUFFd0YsS0FBSyxDQUFDdkYsUUFBUSxFQUFFM0ksS0FBSyxDQUFDOEQsSUFBSSxFQUFFLEVBQUUsUUFBT21FLE1BQU0sS0FBSSxRQUFRLElBQUlBLE1BQU0sQ0FBQztNQUU3RixJQUFJLENBQUNuRSxJQUFJLEVBQUU5RCxLQUFLLENBQUM4RCxJQUFJLENBQUMsVUFBVSxFQUFHQSxJQUFJLEdBQUcsSUFBSW9LLEtBQUssQ0FBQyxJQUFJLEVBQUVoUyxPQUFPLENBQUMsQ0FBRTtNQUNwRSxJQUFJLE9BQU8rTCxNQUFNLElBQUksUUFBUSxFQUFFbkUsSUFBSSxDQUFDbUUsTUFBTSxDQUFDLENBQUM0RyxjQUFjLENBQUMsTUFDdEQsSUFBSTNTLE9BQU8sQ0FBQzRELElBQUksRUFBRWdFLElBQUksQ0FBQ2hFLElBQUksQ0FBQytPLGNBQWMsQ0FBQztJQUNsRCxDQUFDLENBQUM7RUFDSjtFQUVBLElBQUkxRyxHQUFHLEdBQUduTSxDQUFDLENBQUM0RSxFQUFFLENBQUMwUSxLQUFLO0VBRXBCdFYsQ0FBQyxDQUFDNEUsRUFBRSxDQUFDMFEsS0FBSyxHQUFldEosTUFBTTtFQUMvQmhNLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzBRLEtBQUssQ0FBQ2pKLFdBQVcsR0FBRzZGLEtBQUs7O0VBRzlCO0VBQ0E7O0VBRUFsUyxDQUFDLENBQUM0RSxFQUFFLENBQUMwUSxLQUFLLENBQUNoSixVQUFVLEdBQUcsWUFBWTtJQUNsQ3RNLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzBRLEtBQUssR0FBR25KLEdBQUc7SUFDaEIsT0FBTyxJQUFJO0VBQ2IsQ0FBQzs7RUFHRDtFQUNBOztFQUVBbk0sQ0FBQyxDQUFDd0osUUFBUSxDQUFDLENBQUN6RixFQUFFLENBQUMseUJBQXlCLEVBQUUsdUJBQXVCLEVBQUUsVUFBVXJCLENBQUMsRUFBRTtJQUM5RSxJQUFJc0IsS0FBSyxHQUFLaEUsQ0FBQyxDQUFDLElBQUksQ0FBQztJQUNyQixJQUFJcVEsSUFBSSxHQUFNck0sS0FBSyxDQUFDd0gsSUFBSSxDQUFDLE1BQU0sQ0FBQztJQUNoQyxJQUFJN0ksT0FBTyxHQUFHM0MsQ0FBQyxDQUFDZ0UsS0FBSyxDQUFDd0gsSUFBSSxDQUFDLGFBQWEsQ0FBQyxJQUFLNkUsSUFBSSxJQUFJQSxJQUFJLENBQUM1RSxPQUFPLENBQUMsZ0JBQWdCLEVBQUUsRUFBRSxDQUFFLENBQUMsRUFBQztJQUMzRixJQUFJUSxNQUFNLEdBQUl0SixPQUFPLENBQUNtRixJQUFJLENBQUMsVUFBVSxDQUFDLEdBQUcsUUFBUSxHQUFHOUgsQ0FBQyxDQUFDME0sTUFBTSxDQUFDO01BQUVnRyxNQUFNLEVBQUUsQ0FBQyxHQUFHLENBQUN4SixJQUFJLENBQUNtSCxJQUFJLENBQUMsSUFBSUE7SUFBSyxDQUFDLEVBQUUxTixPQUFPLENBQUNtRixJQUFJLEVBQUUsRUFBRTlELEtBQUssQ0FBQzhELElBQUksRUFBRSxDQUFDO0lBRS9ILElBQUk5RCxLQUFLLENBQUNJLEVBQUUsQ0FBQyxHQUFHLENBQUMsRUFBRTFCLENBQUMsQ0FBQ2tGLGNBQWMsRUFBRTtJQUVyQ2pGLE9BQU8sQ0FBQ3lGLEdBQUcsQ0FBQyxlQUFlLEVBQUUsVUFBVW1OLFNBQVMsRUFBRTtNQUNoRCxJQUFJQSxTQUFTLENBQUMzSixrQkFBa0IsRUFBRSxFQUFFLE9BQU0sQ0FBQztNQUMzQ2pKLE9BQU8sQ0FBQ3lGLEdBQUcsQ0FBQyxpQkFBaUIsRUFBRSxZQUFZO1FBQ3pDcEUsS0FBSyxDQUFDSSxFQUFFLENBQUMsVUFBVSxDQUFDLElBQUlKLEtBQUssQ0FBQ3FHLE9BQU8sQ0FBQyxPQUFPLENBQUM7TUFDaEQsQ0FBQyxDQUFDO0lBQ0osQ0FBQyxDQUFDO0lBQ0YyQixNQUFNLENBQUNFLElBQUksQ0FBQ3ZKLE9BQU8sRUFBRXNKLE1BQU0sRUFBRSxJQUFJLENBQUM7RUFDcEMsQ0FBQyxDQUFDO0FBRUosQ0FBQyxDQUFDbk0sTUFBTSxDQUFDOztBQUVUO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBR0EsQ0FBQyxVQUFVRSxDQUFDLEVBQUU7RUFDWixZQUFZOztFQUVaO0VBQ0E7RUFFQSxJQUFJd1YsT0FBTyxHQUFHLFNBQVZBLE9BQU8sQ0FBYWhKLE9BQU8sRUFBRXRNLE9BQU8sRUFBRTtJQUN4QyxJQUFJLENBQUN1TixJQUFJLEdBQVMsSUFBSTtJQUN0QixJQUFJLENBQUN2TixPQUFPLEdBQU0sSUFBSTtJQUN0QixJQUFJLENBQUN1VixPQUFPLEdBQU0sSUFBSTtJQUN0QixJQUFJLENBQUNDLE9BQU8sR0FBTSxJQUFJO0lBQ3RCLElBQUksQ0FBQ0MsVUFBVSxHQUFHLElBQUk7SUFDdEIsSUFBSSxDQUFDbEosUUFBUSxHQUFLLElBQUk7SUFDdEIsSUFBSSxDQUFDbUosT0FBTyxHQUFNLElBQUk7SUFFdEIsSUFBSSxDQUFDQyxJQUFJLENBQUMsU0FBUyxFQUFFckosT0FBTyxFQUFFdE0sT0FBTyxDQUFDO0VBQ3hDLENBQUM7RUFFRHNWLE9BQU8sQ0FBQ3BLLE9BQU8sR0FBSSxPQUFPO0VBRTFCb0ssT0FBTyxDQUFDbkssbUJBQW1CLEdBQUcsR0FBRztFQUVqQ21LLE9BQU8sQ0FBQzdJLFFBQVEsR0FBRztJQUNqQm1KLFNBQVMsRUFBRSxJQUFJO0lBQ2ZDLFNBQVMsRUFBRSxLQUFLO0lBQ2hCeEssUUFBUSxFQUFFLEtBQUs7SUFDZnlLLFFBQVEsRUFBRSw4R0FBOEc7SUFDeEgzTCxPQUFPLEVBQUUsYUFBYTtJQUN0QjRMLEtBQUssRUFBRSxFQUFFO0lBQ1RoUSxLQUFLLEVBQUUsQ0FBQztJQUNSaVEsSUFBSSxFQUFFLEtBQUs7SUFDWEMsU0FBUyxFQUFFLEtBQUs7SUFDaEJDLFFBQVEsRUFBRTtNQUNSN0ssUUFBUSxFQUFFLE1BQU07TUFDaEI4SyxPQUFPLEVBQUU7SUFDWDtFQUNGLENBQUM7RUFFRGIsT0FBTyxDQUFDbEssU0FBUyxDQUFDdUssSUFBSSxHQUFHLFVBQVVwSSxJQUFJLEVBQUVqQixPQUFPLEVBQUV0TSxPQUFPLEVBQUU7SUFDekQsSUFBSSxDQUFDdVYsT0FBTyxHQUFLLElBQUk7SUFDckIsSUFBSSxDQUFDaEksSUFBSSxHQUFRQSxJQUFJO0lBQ3JCLElBQUksQ0FBQ2hCLFFBQVEsR0FBSXpNLENBQUMsQ0FBQ3dNLE9BQU8sQ0FBQztJQUMzQixJQUFJLENBQUN0TSxPQUFPLEdBQUssSUFBSSxDQUFDb1csVUFBVSxDQUFDcFcsT0FBTyxDQUFDO0lBQ3pDLElBQUksQ0FBQ3FXLFNBQVMsR0FBRyxJQUFJLENBQUNyVyxPQUFPLENBQUNrVyxRQUFRLElBQUlwVyxDQUFDLENBQUNBLENBQUMsQ0FBQ3dXLFVBQVUsQ0FBQyxJQUFJLENBQUN0VyxPQUFPLENBQUNrVyxRQUFRLENBQUMsR0FBRyxJQUFJLENBQUNsVyxPQUFPLENBQUNrVyxRQUFRLENBQUNsSyxJQUFJLENBQUMsSUFBSSxFQUFFLElBQUksQ0FBQ08sUUFBUSxDQUFDLEdBQUksSUFBSSxDQUFDdk0sT0FBTyxDQUFDa1csUUFBUSxDQUFDN0ssUUFBUSxJQUFJLElBQUksQ0FBQ3JMLE9BQU8sQ0FBQ2tXLFFBQVMsQ0FBQztJQUM5TCxJQUFJLENBQUNSLE9BQU8sR0FBSztNQUFFblQsS0FBSyxFQUFFLEtBQUs7TUFBRWdVLEtBQUssRUFBRSxLQUFLO01BQUU1UCxLQUFLLEVBQUU7SUFBTSxDQUFDO0lBRTdELElBQUksSUFBSSxDQUFDNEYsUUFBUSxDQUFDLENBQUMsQ0FBQyxZQUFZakQsUUFBUSxDQUFDa04sV0FBVyxJQUFJLENBQUMsSUFBSSxDQUFDeFcsT0FBTyxDQUFDcUwsUUFBUSxFQUFFO01BQzlFLE1BQU0sSUFBSXhMLEtBQUssQ0FBQyx3REFBd0QsR0FBRyxJQUFJLENBQUMwTixJQUFJLEdBQUcsaUNBQWlDLENBQUM7SUFDM0g7SUFFQSxJQUFJa0osUUFBUSxHQUFHLElBQUksQ0FBQ3pXLE9BQU8sQ0FBQ21LLE9BQU8sQ0FBQ3VNLEtBQUssQ0FBQyxHQUFHLENBQUM7SUFFOUMsS0FBSyxJQUFJclQsQ0FBQyxHQUFHb1QsUUFBUSxDQUFDeFQsTUFBTSxFQUFFSSxDQUFDLEVBQUUsR0FBRztNQUNsQyxJQUFJOEcsT0FBTyxHQUFHc00sUUFBUSxDQUFDcFQsQ0FBQyxDQUFDO01BRXpCLElBQUk4RyxPQUFPLElBQUksT0FBTyxFQUFFO1FBQ3RCLElBQUksQ0FBQ29DLFFBQVEsQ0FBQzFJLEVBQUUsQ0FBQyxRQUFRLEdBQUcsSUFBSSxDQUFDMEosSUFBSSxFQUFFLElBQUksQ0FBQ3ZOLE9BQU8sQ0FBQ3FMLFFBQVEsRUFBRXZMLENBQUMsQ0FBQ2tOLEtBQUssQ0FBQyxJQUFJLENBQUNDLE1BQU0sRUFBRSxJQUFJLENBQUMsQ0FBQztNQUMzRixDQUFDLE1BQU0sSUFBSTlDLE9BQU8sSUFBSSxRQUFRLEVBQUU7UUFDOUIsSUFBSXdNLE9BQU8sR0FBSXhNLE9BQU8sSUFBSSxPQUFPLEdBQUcsWUFBWSxHQUFHLFNBQVM7UUFDNUQsSUFBSXlNLFFBQVEsR0FBR3pNLE9BQU8sSUFBSSxPQUFPLEdBQUcsWUFBWSxHQUFHLFVBQVU7UUFFN0QsSUFBSSxDQUFDb0MsUUFBUSxDQUFDMUksRUFBRSxDQUFDOFMsT0FBTyxHQUFJLEdBQUcsR0FBRyxJQUFJLENBQUNwSixJQUFJLEVBQUUsSUFBSSxDQUFDdk4sT0FBTyxDQUFDcUwsUUFBUSxFQUFFdkwsQ0FBQyxDQUFDa04sS0FBSyxDQUFDLElBQUksQ0FBQzZKLEtBQUssRUFBRSxJQUFJLENBQUMsQ0FBQztRQUM5RixJQUFJLENBQUN0SyxRQUFRLENBQUMxSSxFQUFFLENBQUMrUyxRQUFRLEdBQUcsR0FBRyxHQUFHLElBQUksQ0FBQ3JKLElBQUksRUFBRSxJQUFJLENBQUN2TixPQUFPLENBQUNxTCxRQUFRLEVBQUV2TCxDQUFDLENBQUNrTixLQUFLLENBQUMsSUFBSSxDQUFDOEosS0FBSyxFQUFFLElBQUksQ0FBQyxDQUFDO01BQ2hHO0lBQ0Y7SUFFQSxJQUFJLENBQUM5VyxPQUFPLENBQUNxTCxRQUFRLEdBQ2xCLElBQUksQ0FBQzBMLFFBQVEsR0FBR2pYLENBQUMsQ0FBQzBNLE1BQU0sQ0FBQyxDQUFDLENBQUMsRUFBRSxJQUFJLENBQUN4TSxPQUFPLEVBQUU7TUFBRW1LLE9BQU8sRUFBRSxRQUFRO01BQUVrQixRQUFRLEVBQUU7SUFBRyxDQUFDLENBQUMsR0FDaEYsSUFBSSxDQUFDMkwsUUFBUSxFQUFFO0VBQ25CLENBQUM7RUFFRDFCLE9BQU8sQ0FBQ2xLLFNBQVMsQ0FBQzZMLFdBQVcsR0FBRyxZQUFZO0lBQzFDLE9BQU8zQixPQUFPLENBQUM3SSxRQUFRO0VBQ3pCLENBQUM7RUFFRDZJLE9BQU8sQ0FBQ2xLLFNBQVMsQ0FBQ2dMLFVBQVUsR0FBRyxVQUFVcFcsT0FBTyxFQUFFO0lBQ2hEQSxPQUFPLEdBQUdGLENBQUMsQ0FBQzBNLE1BQU0sQ0FBQyxDQUFDLENBQUMsRUFBRSxJQUFJLENBQUN5SyxXQUFXLEVBQUUsRUFBRSxJQUFJLENBQUMxSyxRQUFRLENBQUMzRSxJQUFJLEVBQUUsRUFBRTVILE9BQU8sQ0FBQztJQUV6RSxJQUFJQSxPQUFPLENBQUMrRixLQUFLLElBQUksT0FBTy9GLE9BQU8sQ0FBQytGLEtBQUssSUFBSSxRQUFRLEVBQUU7TUFDckQvRixPQUFPLENBQUMrRixLQUFLLEdBQUc7UUFDZG5DLElBQUksRUFBRTVELE9BQU8sQ0FBQytGLEtBQUs7UUFDbkJxTCxJQUFJLEVBQUVwUixPQUFPLENBQUMrRjtNQUNoQixDQUFDO0lBQ0g7SUFFQSxPQUFPL0YsT0FBTztFQUNoQixDQUFDO0VBRURzVixPQUFPLENBQUNsSyxTQUFTLENBQUM4TCxrQkFBa0IsR0FBRyxZQUFZO0lBQ2pELElBQUlsWCxPQUFPLEdBQUksQ0FBQyxDQUFDO0lBQ2pCLElBQUltWCxRQUFRLEdBQUcsSUFBSSxDQUFDRixXQUFXLEVBQUU7SUFFakMsSUFBSSxDQUFDRixRQUFRLElBQUlqWCxDQUFDLENBQUNzRCxJQUFJLENBQUMsSUFBSSxDQUFDMlQsUUFBUSxFQUFFLFVBQVVLLEdBQUcsRUFBRUMsS0FBSyxFQUFFO01BQzNELElBQUlGLFFBQVEsQ0FBQ0MsR0FBRyxDQUFDLElBQUlDLEtBQUssRUFBRXJYLE9BQU8sQ0FBQ29YLEdBQUcsQ0FBQyxHQUFHQyxLQUFLO0lBQ2xELENBQUMsQ0FBQztJQUVGLE9BQU9yWCxPQUFPO0VBQ2hCLENBQUM7RUFFRHNWLE9BQU8sQ0FBQ2xLLFNBQVMsQ0FBQ3lMLEtBQUssR0FBRyxVQUFVUyxHQUFHLEVBQUU7SUFDdkMsSUFBSUMsSUFBSSxHQUFHRCxHQUFHLFlBQVksSUFBSSxDQUFDZCxXQUFXLEdBQ3hDYyxHQUFHLEdBQUd4WCxDQUFDLENBQUN3WCxHQUFHLENBQUMxRCxhQUFhLENBQUMsQ0FBQ2hNLElBQUksQ0FBQyxLQUFLLEdBQUcsSUFBSSxDQUFDMkYsSUFBSSxDQUFDO0lBRXBELElBQUksQ0FBQ2dLLElBQUksRUFBRTtNQUNUQSxJQUFJLEdBQUcsSUFBSSxJQUFJLENBQUNmLFdBQVcsQ0FBQ2MsR0FBRyxDQUFDMUQsYUFBYSxFQUFFLElBQUksQ0FBQ3NELGtCQUFrQixFQUFFLENBQUM7TUFDekVwWCxDQUFDLENBQUN3WCxHQUFHLENBQUMxRCxhQUFhLENBQUMsQ0FBQ2hNLElBQUksQ0FBQyxLQUFLLEdBQUcsSUFBSSxDQUFDMkYsSUFBSSxFQUFFZ0ssSUFBSSxDQUFDO0lBQ3BEO0lBRUEsSUFBSUQsR0FBRyxZQUFZeFgsQ0FBQyxDQUFDMkwsS0FBSyxFQUFFO01BQzFCOEwsSUFBSSxDQUFDN0IsT0FBTyxDQUFDNEIsR0FBRyxDQUFDL0osSUFBSSxJQUFJLFNBQVMsR0FBRyxPQUFPLEdBQUcsT0FBTyxDQUFDLEdBQUcsSUFBSTtJQUNoRTtJQUVBLElBQUlnSyxJQUFJLENBQUNDLEdBQUcsRUFBRSxDQUFDMVUsUUFBUSxDQUFDLElBQUksQ0FBQyxJQUFJeVUsSUFBSSxDQUFDOUIsVUFBVSxJQUFJLElBQUksRUFBRTtNQUN4RDhCLElBQUksQ0FBQzlCLFVBQVUsR0FBRyxJQUFJO01BQ3RCO0lBQ0Y7SUFFQWdDLFlBQVksQ0FBQ0YsSUFBSSxDQUFDL0IsT0FBTyxDQUFDO0lBRTFCK0IsSUFBSSxDQUFDOUIsVUFBVSxHQUFHLElBQUk7SUFFdEIsSUFBSSxDQUFDOEIsSUFBSSxDQUFDdlgsT0FBTyxDQUFDK0YsS0FBSyxJQUFJLENBQUN3UixJQUFJLENBQUN2WCxPQUFPLENBQUMrRixLQUFLLENBQUNuQyxJQUFJLEVBQUUsT0FBTzJULElBQUksQ0FBQzNULElBQUksRUFBRTtJQUV2RTJULElBQUksQ0FBQy9CLE9BQU8sR0FBR3RNLFVBQVUsQ0FBQyxZQUFZO01BQ3BDLElBQUlxTyxJQUFJLENBQUM5QixVQUFVLElBQUksSUFBSSxFQUFFOEIsSUFBSSxDQUFDM1QsSUFBSSxFQUFFO0lBQzFDLENBQUMsRUFBRTJULElBQUksQ0FBQ3ZYLE9BQU8sQ0FBQytGLEtBQUssQ0FBQ25DLElBQUksQ0FBQztFQUM3QixDQUFDO0VBRUQwUixPQUFPLENBQUNsSyxTQUFTLENBQUNzTSxhQUFhLEdBQUcsWUFBWTtJQUM1QyxLQUFLLElBQUlOLEdBQUcsSUFBSSxJQUFJLENBQUMxQixPQUFPLEVBQUU7TUFDNUIsSUFBSSxJQUFJLENBQUNBLE9BQU8sQ0FBQzBCLEdBQUcsQ0FBQyxFQUFFLE9BQU8sSUFBSTtJQUNwQztJQUVBLE9BQU8sS0FBSztFQUNkLENBQUM7RUFFRDlCLE9BQU8sQ0FBQ2xLLFNBQVMsQ0FBQzBMLEtBQUssR0FBRyxVQUFVUSxHQUFHLEVBQUU7SUFDdkMsSUFBSUMsSUFBSSxHQUFHRCxHQUFHLFlBQVksSUFBSSxDQUFDZCxXQUFXLEdBQ3hDYyxHQUFHLEdBQUd4WCxDQUFDLENBQUN3WCxHQUFHLENBQUMxRCxhQUFhLENBQUMsQ0FBQ2hNLElBQUksQ0FBQyxLQUFLLEdBQUcsSUFBSSxDQUFDMkYsSUFBSSxDQUFDO0lBRXBELElBQUksQ0FBQ2dLLElBQUksRUFBRTtNQUNUQSxJQUFJLEdBQUcsSUFBSSxJQUFJLENBQUNmLFdBQVcsQ0FBQ2MsR0FBRyxDQUFDMUQsYUFBYSxFQUFFLElBQUksQ0FBQ3NELGtCQUFrQixFQUFFLENBQUM7TUFDekVwWCxDQUFDLENBQUN3WCxHQUFHLENBQUMxRCxhQUFhLENBQUMsQ0FBQ2hNLElBQUksQ0FBQyxLQUFLLEdBQUcsSUFBSSxDQUFDMkYsSUFBSSxFQUFFZ0ssSUFBSSxDQUFDO0lBQ3BEO0lBRUEsSUFBSUQsR0FBRyxZQUFZeFgsQ0FBQyxDQUFDMkwsS0FBSyxFQUFFO01BQzFCOEwsSUFBSSxDQUFDN0IsT0FBTyxDQUFDNEIsR0FBRyxDQUFDL0osSUFBSSxJQUFJLFVBQVUsR0FBRyxPQUFPLEdBQUcsT0FBTyxDQUFDLEdBQUcsS0FBSztJQUNsRTtJQUVBLElBQUlnSyxJQUFJLENBQUNHLGFBQWEsRUFBRSxFQUFFO0lBRTFCRCxZQUFZLENBQUNGLElBQUksQ0FBQy9CLE9BQU8sQ0FBQztJQUUxQitCLElBQUksQ0FBQzlCLFVBQVUsR0FBRyxLQUFLO0lBRXZCLElBQUksQ0FBQzhCLElBQUksQ0FBQ3ZYLE9BQU8sQ0FBQytGLEtBQUssSUFBSSxDQUFDd1IsSUFBSSxDQUFDdlgsT0FBTyxDQUFDK0YsS0FBSyxDQUFDcUwsSUFBSSxFQUFFLE9BQU9tRyxJQUFJLENBQUNuRyxJQUFJLEVBQUU7SUFFdkVtRyxJQUFJLENBQUMvQixPQUFPLEdBQUd0TSxVQUFVLENBQUMsWUFBWTtNQUNwQyxJQUFJcU8sSUFBSSxDQUFDOUIsVUFBVSxJQUFJLEtBQUssRUFBRThCLElBQUksQ0FBQ25HLElBQUksRUFBRTtJQUMzQyxDQUFDLEVBQUVtRyxJQUFJLENBQUN2WCxPQUFPLENBQUMrRixLQUFLLENBQUNxTCxJQUFJLENBQUM7RUFDN0IsQ0FBQztFQUVEa0UsT0FBTyxDQUFDbEssU0FBUyxDQUFDeEgsSUFBSSxHQUFHLFlBQVk7SUFDbkMsSUFBSXBCLENBQUMsR0FBRzFDLENBQUMsQ0FBQzJMLEtBQUssQ0FBQyxVQUFVLEdBQUcsSUFBSSxDQUFDOEIsSUFBSSxDQUFDO0lBRXZDLElBQUksSUFBSSxDQUFDb0ssVUFBVSxFQUFFLElBQUksSUFBSSxDQUFDcEMsT0FBTyxFQUFFO01BQ3JDLElBQUksQ0FBQ2hKLFFBQVEsQ0FBQ3BDLE9BQU8sQ0FBQzNILENBQUMsQ0FBQztNQUV4QixJQUFJb1YsS0FBSyxHQUFHOVgsQ0FBQyxDQUFDNlIsUUFBUSxDQUFDLElBQUksQ0FBQ3BGLFFBQVEsQ0FBQyxDQUFDLENBQUMsQ0FBQ3NMLGFBQWEsQ0FBQzNKLGVBQWUsRUFBRSxJQUFJLENBQUMzQixRQUFRLENBQUMsQ0FBQyxDQUFDLENBQUM7TUFDeEYsSUFBSS9KLENBQUMsQ0FBQ2tKLGtCQUFrQixFQUFFLElBQUksQ0FBQ2tNLEtBQUssRUFBRTtNQUN0QyxJQUFJdEksSUFBSSxHQUFHLElBQUk7TUFFZixJQUFJd0ksSUFBSSxHQUFHLElBQUksQ0FBQ04sR0FBRyxFQUFFO01BRXJCLElBQUlPLEtBQUssR0FBRyxJQUFJLENBQUNDLE1BQU0sQ0FBQyxJQUFJLENBQUN6SyxJQUFJLENBQUM7TUFFbEMsSUFBSSxDQUFDMEssVUFBVSxFQUFFO01BQ2pCSCxJQUFJLENBQUN4TSxJQUFJLENBQUMsSUFBSSxFQUFFeU0sS0FBSyxDQUFDO01BQ3RCLElBQUksQ0FBQ3hMLFFBQVEsQ0FBQ2pCLElBQUksQ0FBQyxrQkFBa0IsRUFBRXlNLEtBQUssQ0FBQztNQUU3QyxJQUFJLElBQUksQ0FBQy9YLE9BQU8sQ0FBQzRWLFNBQVMsRUFBRWtDLElBQUksQ0FBQ25VLFFBQVEsQ0FBQyxNQUFNLENBQUM7TUFFakQsSUFBSWtTLFNBQVMsR0FBRyxPQUFPLElBQUksQ0FBQzdWLE9BQU8sQ0FBQzZWLFNBQVMsSUFBSSxVQUFVLEdBQ3pELElBQUksQ0FBQzdWLE9BQU8sQ0FBQzZWLFNBQVMsQ0FBQzdKLElBQUksQ0FBQyxJQUFJLEVBQUU4TCxJQUFJLENBQUMsQ0FBQyxDQUFDLEVBQUUsSUFBSSxDQUFDdkwsUUFBUSxDQUFDLENBQUMsQ0FBQyxDQUFDLEdBQzVELElBQUksQ0FBQ3ZNLE9BQU8sQ0FBQzZWLFNBQVM7TUFFeEIsSUFBSXFDLFNBQVMsR0FBRyxjQUFjO01BQzlCLElBQUlDLFNBQVMsR0FBR0QsU0FBUyxDQUFDbFAsSUFBSSxDQUFDNk0sU0FBUyxDQUFDO01BQ3pDLElBQUlzQyxTQUFTLEVBQUV0QyxTQUFTLEdBQUdBLFNBQVMsQ0FBQ3RLLE9BQU8sQ0FBQzJNLFNBQVMsRUFBRSxFQUFFLENBQUMsSUFBSSxLQUFLO01BRXBFSixJQUFJLENBQ0RsTSxNQUFNLEVBQUUsQ0FDUnFJLEdBQUcsQ0FBQztRQUFFbUUsR0FBRyxFQUFFLENBQUM7UUFBRXhELElBQUksRUFBRSxDQUFDO1FBQUV5RCxPQUFPLEVBQUU7TUFBUSxDQUFDLENBQUMsQ0FDMUMxVSxRQUFRLENBQUNrUyxTQUFTLENBQUMsQ0FDbkJqTyxJQUFJLENBQUMsS0FBSyxHQUFHLElBQUksQ0FBQzJGLElBQUksRUFBRSxJQUFJLENBQUM7TUFFaEMsSUFBSSxDQUFDdk4sT0FBTyxDQUFDaVcsU0FBUyxHQUFHNkIsSUFBSSxDQUFDL0UsUUFBUSxDQUFDLElBQUksQ0FBQy9TLE9BQU8sQ0FBQ2lXLFNBQVMsQ0FBQyxHQUFHNkIsSUFBSSxDQUFDakcsV0FBVyxDQUFDLElBQUksQ0FBQ3RGLFFBQVEsQ0FBQztNQUNoRyxJQUFJLENBQUNBLFFBQVEsQ0FBQ3BDLE9BQU8sQ0FBQyxjQUFjLEdBQUcsSUFBSSxDQUFDb0QsSUFBSSxDQUFDO01BRWpELElBQUk4QixHQUFHLEdBQVksSUFBSSxDQUFDaUosV0FBVyxFQUFFO01BQ3JDLElBQUlDLFdBQVcsR0FBSVQsSUFBSSxDQUFDLENBQUMsQ0FBQyxDQUFDaEksV0FBVztNQUN0QyxJQUFJMEksWUFBWSxHQUFHVixJQUFJLENBQUMsQ0FBQyxDQUFDLENBQUN6RyxZQUFZO01BRXZDLElBQUk4RyxTQUFTLEVBQUU7UUFDYixJQUFJTSxZQUFZLEdBQUc1QyxTQUFTO1FBQzVCLElBQUk2QyxXQUFXLEdBQUcsSUFBSSxDQUFDSixXQUFXLENBQUMsSUFBSSxDQUFDakMsU0FBUyxDQUFDO1FBRWxEUixTQUFTLEdBQUdBLFNBQVMsSUFBSSxRQUFRLElBQUl4RyxHQUFHLENBQUNzSixNQUFNLEdBQUdILFlBQVksR0FBR0UsV0FBVyxDQUFDQyxNQUFNLEdBQUcsS0FBSyxHQUMvRTlDLFNBQVMsSUFBSSxLQUFLLElBQU94RyxHQUFHLENBQUMrSSxHQUFHLEdBQU1JLFlBQVksR0FBR0UsV0FBVyxDQUFDTixHQUFHLEdBQU0sUUFBUSxHQUNsRnZDLFNBQVMsSUFBSSxPQUFPLElBQUt4RyxHQUFHLENBQUNvRixLQUFLLEdBQUk4RCxXQUFXLEdBQUlHLFdBQVcsQ0FBQzVTLEtBQUssR0FBSSxNQUFNLEdBQ2hGK1AsU0FBUyxJQUFJLE1BQU0sSUFBTXhHLEdBQUcsQ0FBQ3VGLElBQUksR0FBSzJELFdBQVcsR0FBSUcsV0FBVyxDQUFDOUQsSUFBSSxHQUFLLE9BQU8sR0FDakZpQixTQUFTO1FBRXJCaUMsSUFBSSxDQUNEM1UsV0FBVyxDQUFDc1YsWUFBWSxDQUFDLENBQ3pCOVUsUUFBUSxDQUFDa1MsU0FBUyxDQUFDO01BQ3hCO01BRUEsSUFBSStDLGdCQUFnQixHQUFHLElBQUksQ0FBQ0MsbUJBQW1CLENBQUNoRCxTQUFTLEVBQUV4RyxHQUFHLEVBQUVrSixXQUFXLEVBQUVDLFlBQVksQ0FBQztNQUUxRixJQUFJLENBQUNNLGNBQWMsQ0FBQ0YsZ0JBQWdCLEVBQUUvQyxTQUFTLENBQUM7TUFFaEQsSUFBSTVFLFFBQVEsR0FBRyxTQUFYQSxRQUFRLEdBQWU7UUFDekIsSUFBSThILGNBQWMsR0FBR3pKLElBQUksQ0FBQ21HLFVBQVU7UUFDcENuRyxJQUFJLENBQUMvQyxRQUFRLENBQUNwQyxPQUFPLENBQUMsV0FBVyxHQUFHbUYsSUFBSSxDQUFDL0IsSUFBSSxDQUFDO1FBQzlDK0IsSUFBSSxDQUFDbUcsVUFBVSxHQUFHLElBQUk7UUFFdEIsSUFBSXNELGNBQWMsSUFBSSxLQUFLLEVBQUV6SixJQUFJLENBQUN3SCxLQUFLLENBQUN4SCxJQUFJLENBQUM7TUFDL0MsQ0FBQztNQUVEeFAsQ0FBQyxDQUFDc0ssT0FBTyxDQUFDUixVQUFVLElBQUksSUFBSSxDQUFDa08sSUFBSSxDQUFDaFYsUUFBUSxDQUFDLE1BQU0sQ0FBQyxHQUNoRGdWLElBQUksQ0FDRDVQLEdBQUcsQ0FBQyxpQkFBaUIsRUFBRStJLFFBQVEsQ0FBQyxDQUNoQ2pILG9CQUFvQixDQUFDc0wsT0FBTyxDQUFDbkssbUJBQW1CLENBQUMsR0FDcEQ4RixRQUFRLEVBQUU7SUFDZDtFQUNGLENBQUM7RUFFRHFFLE9BQU8sQ0FBQ2xLLFNBQVMsQ0FBQzBOLGNBQWMsR0FBRyxVQUFVRSxNQUFNLEVBQUVuRCxTQUFTLEVBQUU7SUFDOUQsSUFBSWlDLElBQUksR0FBSyxJQUFJLENBQUNOLEdBQUcsRUFBRTtJQUN2QixJQUFJMVIsS0FBSyxHQUFJZ1MsSUFBSSxDQUFDLENBQUMsQ0FBQyxDQUFDaEksV0FBVztJQUNoQyxJQUFJakwsTUFBTSxHQUFHaVQsSUFBSSxDQUFDLENBQUMsQ0FBQyxDQUFDekcsWUFBWTs7SUFFakM7SUFDQSxJQUFJNEgsU0FBUyxHQUFHakUsUUFBUSxDQUFDOEMsSUFBSSxDQUFDN0QsR0FBRyxDQUFDLFlBQVksQ0FBQyxFQUFFLEVBQUUsQ0FBQztJQUNwRCxJQUFJaUYsVUFBVSxHQUFHbEUsUUFBUSxDQUFDOEMsSUFBSSxDQUFDN0QsR0FBRyxDQUFDLGFBQWEsQ0FBQyxFQUFFLEVBQUUsQ0FBQzs7SUFFdEQ7SUFDQSxJQUFJa0YsS0FBSyxDQUFDRixTQUFTLENBQUMsRUFBR0EsU0FBUyxHQUFJLENBQUM7SUFDckMsSUFBSUUsS0FBSyxDQUFDRCxVQUFVLENBQUMsRUFBRUEsVUFBVSxHQUFHLENBQUM7SUFFckNGLE1BQU0sQ0FBQ1osR0FBRyxJQUFLYSxTQUFTO0lBQ3hCRCxNQUFNLENBQUNwRSxJQUFJLElBQUlzRSxVQUFVOztJQUV6QjtJQUNBO0lBQ0FwWixDQUFDLENBQUNrWixNQUFNLENBQUNJLFNBQVMsQ0FBQ3RCLElBQUksQ0FBQyxDQUFDLENBQUMsRUFBRWhZLENBQUMsQ0FBQzBNLE1BQU0sQ0FBQztNQUNuQzZNLEtBQUssRUFBRSxlQUFVQyxLQUFLLEVBQUU7UUFDdEJ4QixJQUFJLENBQUM3RCxHQUFHLENBQUM7VUFDUG1FLEdBQUcsRUFBRTFELElBQUksQ0FBQzZFLEtBQUssQ0FBQ0QsS0FBSyxDQUFDbEIsR0FBRyxDQUFDO1VBQzFCeEQsSUFBSSxFQUFFRixJQUFJLENBQUM2RSxLQUFLLENBQUNELEtBQUssQ0FBQzFFLElBQUk7UUFDN0IsQ0FBQyxDQUFDO01BQ0o7SUFDRixDQUFDLEVBQUVvRSxNQUFNLENBQUMsRUFBRSxDQUFDLENBQUM7SUFFZGxCLElBQUksQ0FBQ25VLFFBQVEsQ0FBQyxJQUFJLENBQUM7O0lBRW5CO0lBQ0EsSUFBSTRVLFdBQVcsR0FBSVQsSUFBSSxDQUFDLENBQUMsQ0FBQyxDQUFDaEksV0FBVztJQUN0QyxJQUFJMEksWUFBWSxHQUFHVixJQUFJLENBQUMsQ0FBQyxDQUFDLENBQUN6RyxZQUFZO0lBRXZDLElBQUl3RSxTQUFTLElBQUksS0FBSyxJQUFJMkMsWUFBWSxJQUFJM1QsTUFBTSxFQUFFO01BQ2hEbVUsTUFBTSxDQUFDWixHQUFHLEdBQUdZLE1BQU0sQ0FBQ1osR0FBRyxHQUFHdlQsTUFBTSxHQUFHMlQsWUFBWTtJQUNqRDtJQUVBLElBQUl2SixLQUFLLEdBQUcsSUFBSSxDQUFDdUssd0JBQXdCLENBQUMzRCxTQUFTLEVBQUVtRCxNQUFNLEVBQUVULFdBQVcsRUFBRUMsWUFBWSxDQUFDO0lBRXZGLElBQUl2SixLQUFLLENBQUMyRixJQUFJLEVBQUVvRSxNQUFNLENBQUNwRSxJQUFJLElBQUkzRixLQUFLLENBQUMyRixJQUFJLE1BQ3BDb0UsTUFBTSxDQUFDWixHQUFHLElBQUluSixLQUFLLENBQUNtSixHQUFHO0lBRTVCLElBQUlxQixVQUFVLEdBQVksWUFBWSxDQUFDelEsSUFBSSxDQUFDNk0sU0FBUyxDQUFDO0lBQ3RELElBQUk2RCxVQUFVLEdBQVlELFVBQVUsR0FBR3hLLEtBQUssQ0FBQzJGLElBQUksR0FBRyxDQUFDLEdBQUc5TyxLQUFLLEdBQUd5UyxXQUFXLEdBQUd0SixLQUFLLENBQUNtSixHQUFHLEdBQUcsQ0FBQyxHQUFHdlQsTUFBTSxHQUFHMlQsWUFBWTtJQUNuSCxJQUFJbUIsbUJBQW1CLEdBQUdGLFVBQVUsR0FBRyxhQUFhLEdBQUcsY0FBYztJQUVyRTNCLElBQUksQ0FBQ2tCLE1BQU0sQ0FBQ0EsTUFBTSxDQUFDO0lBQ25CLElBQUksQ0FBQ1ksWUFBWSxDQUFDRixVQUFVLEVBQUU1QixJQUFJLENBQUMsQ0FBQyxDQUFDLENBQUM2QixtQkFBbUIsQ0FBQyxFQUFFRixVQUFVLENBQUM7RUFDekUsQ0FBQztFQUVEbkUsT0FBTyxDQUFDbEssU0FBUyxDQUFDd08sWUFBWSxHQUFHLFVBQVUzSyxLQUFLLEVBQUUyQixTQUFTLEVBQUU2SSxVQUFVLEVBQUU7SUFDdkUsSUFBSSxDQUFDSSxLQUFLLEVBQUUsQ0FDVDVGLEdBQUcsQ0FBQ3dGLFVBQVUsR0FBRyxNQUFNLEdBQUcsS0FBSyxFQUFFLEVBQUUsSUFBSSxDQUFDLEdBQUd4SyxLQUFLLEdBQUcyQixTQUFTLENBQUMsR0FBRyxHQUFHLENBQUMsQ0FDcEVxRCxHQUFHLENBQUN3RixVQUFVLEdBQUcsS0FBSyxHQUFHLE1BQU0sRUFBRSxFQUFFLENBQUM7RUFDekMsQ0FBQztFQUVEbkUsT0FBTyxDQUFDbEssU0FBUyxDQUFDNk0sVUFBVSxHQUFHLFlBQVk7SUFDekMsSUFBSUgsSUFBSSxHQUFJLElBQUksQ0FBQ04sR0FBRyxFQUFFO0lBQ3RCLElBQUl6QixLQUFLLEdBQUcsSUFBSSxDQUFDK0QsUUFBUSxFQUFFO0lBRTNCaEMsSUFBSSxDQUFDcFUsSUFBSSxDQUFDLGdCQUFnQixDQUFDLENBQUMsSUFBSSxDQUFDMUQsT0FBTyxDQUFDZ1csSUFBSSxHQUFHLE1BQU0sR0FBRyxNQUFNLENBQUMsQ0FBQ0QsS0FBSyxDQUFDO0lBQ3ZFK0IsSUFBSSxDQUFDM1UsV0FBVyxDQUFDLCtCQUErQixDQUFDO0VBQ25ELENBQUM7RUFFRG1TLE9BQU8sQ0FBQ2xLLFNBQVMsQ0FBQ2dHLElBQUksR0FBRyxVQUFVcEosUUFBUSxFQUFFO0lBQzNDLElBQUlzSCxJQUFJLEdBQUcsSUFBSTtJQUNmLElBQUl3SSxJQUFJLEdBQUdoWSxDQUFDLENBQUMsSUFBSSxDQUFDZ1ksSUFBSSxDQUFDO0lBQ3ZCLElBQUl0VixDQUFDLEdBQU0xQyxDQUFDLENBQUMyTCxLQUFLLENBQUMsVUFBVSxHQUFHLElBQUksQ0FBQzhCLElBQUksQ0FBQztJQUUxQyxTQUFTMEQsUUFBUSxHQUFHO01BQ2xCLElBQUkzQixJQUFJLENBQUNtRyxVQUFVLElBQUksSUFBSSxFQUFFcUMsSUFBSSxDQUFDbE0sTUFBTSxFQUFFO01BQzFDMEQsSUFBSSxDQUFDL0MsUUFBUSxDQUNWeEYsVUFBVSxDQUFDLGtCQUFrQixDQUFDLENBQzlCb0QsT0FBTyxDQUFDLFlBQVksR0FBR21GLElBQUksQ0FBQy9CLElBQUksQ0FBQztNQUNwQ3ZGLFFBQVEsSUFBSUEsUUFBUSxFQUFFO0lBQ3hCO0lBRUEsSUFBSSxDQUFDdUUsUUFBUSxDQUFDcEMsT0FBTyxDQUFDM0gsQ0FBQyxDQUFDO0lBRXhCLElBQUlBLENBQUMsQ0FBQ2tKLGtCQUFrQixFQUFFLEVBQUU7SUFFNUJvTSxJQUFJLENBQUMzVSxXQUFXLENBQUMsSUFBSSxDQUFDO0lBRXRCckQsQ0FBQyxDQUFDc0ssT0FBTyxDQUFDUixVQUFVLElBQUlrTyxJQUFJLENBQUNoVixRQUFRLENBQUMsTUFBTSxDQUFDLEdBQzNDZ1YsSUFBSSxDQUNENVAsR0FBRyxDQUFDLGlCQUFpQixFQUFFK0ksUUFBUSxDQUFDLENBQ2hDakgsb0JBQW9CLENBQUNzTCxPQUFPLENBQUNuSyxtQkFBbUIsQ0FBQyxHQUNwRDhGLFFBQVEsRUFBRTtJQUVaLElBQUksQ0FBQ3dFLFVBQVUsR0FBRyxJQUFJO0lBRXRCLE9BQU8sSUFBSTtFQUNiLENBQUM7RUFFREgsT0FBTyxDQUFDbEssU0FBUyxDQUFDNEwsUUFBUSxHQUFHLFlBQVk7SUFDdkMsSUFBSStDLEVBQUUsR0FBRyxJQUFJLENBQUN4TixRQUFRO0lBQ3RCLElBQUl3TixFQUFFLENBQUN6TyxJQUFJLENBQUMsT0FBTyxDQUFDLElBQUksT0FBT3lPLEVBQUUsQ0FBQ3pPLElBQUksQ0FBQyxxQkFBcUIsQ0FBQyxJQUFJLFFBQVEsRUFBRTtNQUN6RXlPLEVBQUUsQ0FBQ3pPLElBQUksQ0FBQyxxQkFBcUIsRUFBRXlPLEVBQUUsQ0FBQ3pPLElBQUksQ0FBQyxPQUFPLENBQUMsSUFBSSxFQUFFLENBQUMsQ0FBQ0EsSUFBSSxDQUFDLE9BQU8sRUFBRSxFQUFFLENBQUM7SUFDMUU7RUFDRixDQUFDO0VBRURnSyxPQUFPLENBQUNsSyxTQUFTLENBQUN1TSxVQUFVLEdBQUcsWUFBWTtJQUN6QyxPQUFPLElBQUksQ0FBQ21DLFFBQVEsRUFBRTtFQUN4QixDQUFDO0VBRUR4RSxPQUFPLENBQUNsSyxTQUFTLENBQUNrTixXQUFXLEdBQUcsVUFBVS9MLFFBQVEsRUFBRTtJQUNsREEsUUFBUSxHQUFLQSxRQUFRLElBQUksSUFBSSxDQUFDQSxRQUFRO0lBRXRDLElBQUlsRCxFQUFFLEdBQU9rRCxRQUFRLENBQUMsQ0FBQyxDQUFDO0lBQ3hCLElBQUl5TixNQUFNLEdBQUczUSxFQUFFLENBQUNnRixPQUFPLElBQUksTUFBTTtJQUVqQyxJQUFJNEwsTUFBTSxHQUFNNVEsRUFBRSxDQUFDbUwscUJBQXFCLEVBQUU7SUFDMUMsSUFBSXlGLE1BQU0sQ0FBQ25VLEtBQUssSUFBSSxJQUFJLEVBQUU7TUFDeEI7TUFDQW1VLE1BQU0sR0FBR25hLENBQUMsQ0FBQzBNLE1BQU0sQ0FBQyxDQUFDLENBQUMsRUFBRXlOLE1BQU0sRUFBRTtRQUFFblUsS0FBSyxFQUFFbVUsTUFBTSxDQUFDeEYsS0FBSyxHQUFHd0YsTUFBTSxDQUFDckYsSUFBSTtRQUFFL1AsTUFBTSxFQUFFb1YsTUFBTSxDQUFDdEIsTUFBTSxHQUFHc0IsTUFBTSxDQUFDN0I7TUFBSSxDQUFDLENBQUM7SUFDMUc7SUFDQSxJQUFJOEIsUUFBUSxHQUFJRixNQUFNLEdBQUc7TUFBRTVCLEdBQUcsRUFBRSxDQUFDO01BQUV4RCxJQUFJLEVBQUU7SUFBRSxDQUFDLEdBQUdySSxRQUFRLENBQUN5TSxNQUFNLEVBQUU7SUFDaEUsSUFBSW1CLE1BQU0sR0FBTTtNQUFFQSxNQUFNLEVBQUVILE1BQU0sR0FBRzFRLFFBQVEsQ0FBQzRFLGVBQWUsQ0FBQzhFLFNBQVMsSUFBSTFKLFFBQVEsQ0FBQzJJLElBQUksQ0FBQ2UsU0FBUyxHQUFHekcsUUFBUSxDQUFDeUcsU0FBUztJQUFHLENBQUM7SUFDekgsSUFBSW9ILFNBQVMsR0FBR0osTUFBTSxHQUFHO01BQUVsVSxLQUFLLEVBQUVoRyxDQUFDLENBQUN3QyxNQUFNLENBQUMsQ0FBQ3dELEtBQUssRUFBRTtNQUFFakIsTUFBTSxFQUFFL0UsQ0FBQyxDQUFDd0MsTUFBTSxDQUFDLENBQUN1QyxNQUFNO0lBQUcsQ0FBQyxHQUFHLElBQUk7SUFFeEYsT0FBTy9FLENBQUMsQ0FBQzBNLE1BQU0sQ0FBQyxDQUFDLENBQUMsRUFBRXlOLE1BQU0sRUFBRUUsTUFBTSxFQUFFQyxTQUFTLEVBQUVGLFFBQVEsQ0FBQztFQUMxRCxDQUFDO0VBRUQ1RSxPQUFPLENBQUNsSyxTQUFTLENBQUN5TixtQkFBbUIsR0FBRyxVQUFVaEQsU0FBUyxFQUFFeEcsR0FBRyxFQUFFa0osV0FBVyxFQUFFQyxZQUFZLEVBQUU7SUFDM0YsT0FBTzNDLFNBQVMsSUFBSSxRQUFRLEdBQUc7TUFBRXVDLEdBQUcsRUFBRS9JLEdBQUcsQ0FBQytJLEdBQUcsR0FBRy9JLEdBQUcsQ0FBQ3hLLE1BQU07TUFBSStQLElBQUksRUFBRXZGLEdBQUcsQ0FBQ3VGLElBQUksR0FBR3ZGLEdBQUcsQ0FBQ3ZKLEtBQUssR0FBRyxDQUFDLEdBQUd5UyxXQUFXLEdBQUc7SUFBRSxDQUFDLEdBQ3pHMUMsU0FBUyxJQUFJLEtBQUssR0FBTTtNQUFFdUMsR0FBRyxFQUFFL0ksR0FBRyxDQUFDK0ksR0FBRyxHQUFHSSxZQUFZO01BQUU1RCxJQUFJLEVBQUV2RixHQUFHLENBQUN1RixJQUFJLEdBQUd2RixHQUFHLENBQUN2SixLQUFLLEdBQUcsQ0FBQyxHQUFHeVMsV0FBVyxHQUFHO0lBQUUsQ0FBQyxHQUN6RzFDLFNBQVMsSUFBSSxNQUFNLEdBQUs7TUFBRXVDLEdBQUcsRUFBRS9JLEdBQUcsQ0FBQytJLEdBQUcsR0FBRy9JLEdBQUcsQ0FBQ3hLLE1BQU0sR0FBRyxDQUFDLEdBQUcyVCxZQUFZLEdBQUcsQ0FBQztNQUFFNUQsSUFBSSxFQUFFdkYsR0FBRyxDQUFDdUYsSUFBSSxHQUFHMkQ7SUFBWSxDQUFDLEdBQzdHLDBCQUEyQjtNQUFFSCxHQUFHLEVBQUUvSSxHQUFHLENBQUMrSSxHQUFHLEdBQUcvSSxHQUFHLENBQUN4SyxNQUFNLEdBQUcsQ0FBQyxHQUFHMlQsWUFBWSxHQUFHLENBQUM7TUFBRTVELElBQUksRUFBRXZGLEdBQUcsQ0FBQ3VGLElBQUksR0FBR3ZGLEdBQUcsQ0FBQ3ZKO0lBQU0sQ0FBQztFQUVqSCxDQUFDO0VBRUR3UCxPQUFPLENBQUNsSyxTQUFTLENBQUNvTyx3QkFBd0IsR0FBRyxVQUFVM0QsU0FBUyxFQUFFeEcsR0FBRyxFQUFFa0osV0FBVyxFQUFFQyxZQUFZLEVBQUU7SUFDaEcsSUFBSXZKLEtBQUssR0FBRztNQUFFbUosR0FBRyxFQUFFLENBQUM7TUFBRXhELElBQUksRUFBRTtJQUFFLENBQUM7SUFDL0IsSUFBSSxDQUFDLElBQUksQ0FBQ3lCLFNBQVMsRUFBRSxPQUFPcEgsS0FBSztJQUVqQyxJQUFJb0wsZUFBZSxHQUFHLElBQUksQ0FBQ3JhLE9BQU8sQ0FBQ2tXLFFBQVEsSUFBSSxJQUFJLENBQUNsVyxPQUFPLENBQUNrVyxRQUFRLENBQUNDLE9BQU8sSUFBSSxDQUFDO0lBQ2pGLElBQUltRSxrQkFBa0IsR0FBRyxJQUFJLENBQUNoQyxXQUFXLENBQUMsSUFBSSxDQUFDakMsU0FBUyxDQUFDO0lBRXpELElBQUksWUFBWSxDQUFDck4sSUFBSSxDQUFDNk0sU0FBUyxDQUFDLEVBQUU7TUFDaEMsSUFBSTBFLGFBQWEsR0FBTWxMLEdBQUcsQ0FBQytJLEdBQUcsR0FBR2lDLGVBQWUsR0FBR0Msa0JBQWtCLENBQUNILE1BQU07TUFDNUUsSUFBSUssZ0JBQWdCLEdBQUduTCxHQUFHLENBQUMrSSxHQUFHLEdBQUdpQyxlQUFlLEdBQUdDLGtCQUFrQixDQUFDSCxNQUFNLEdBQUczQixZQUFZO01BQzNGLElBQUkrQixhQUFhLEdBQUdELGtCQUFrQixDQUFDbEMsR0FBRyxFQUFFO1FBQUU7UUFDNUNuSixLQUFLLENBQUNtSixHQUFHLEdBQUdrQyxrQkFBa0IsQ0FBQ2xDLEdBQUcsR0FBR21DLGFBQWE7TUFDcEQsQ0FBQyxNQUFNLElBQUlDLGdCQUFnQixHQUFHRixrQkFBa0IsQ0FBQ2xDLEdBQUcsR0FBR2tDLGtCQUFrQixDQUFDelYsTUFBTSxFQUFFO1FBQUU7UUFDbEZvSyxLQUFLLENBQUNtSixHQUFHLEdBQUdrQyxrQkFBa0IsQ0FBQ2xDLEdBQUcsR0FBR2tDLGtCQUFrQixDQUFDelYsTUFBTSxHQUFHMlYsZ0JBQWdCO01BQ25GO0lBQ0YsQ0FBQyxNQUFNO01BQ0wsSUFBSUMsY0FBYyxHQUFJcEwsR0FBRyxDQUFDdUYsSUFBSSxHQUFHeUYsZUFBZTtNQUNoRCxJQUFJSyxlQUFlLEdBQUdyTCxHQUFHLENBQUN1RixJQUFJLEdBQUd5RixlQUFlLEdBQUc5QixXQUFXO01BQzlELElBQUlrQyxjQUFjLEdBQUdILGtCQUFrQixDQUFDMUYsSUFBSSxFQUFFO1FBQUU7UUFDOUMzRixLQUFLLENBQUMyRixJQUFJLEdBQUcwRixrQkFBa0IsQ0FBQzFGLElBQUksR0FBRzZGLGNBQWM7TUFDdkQsQ0FBQyxNQUFNLElBQUlDLGVBQWUsR0FBR0osa0JBQWtCLENBQUM3RixLQUFLLEVBQUU7UUFBRTtRQUN2RHhGLEtBQUssQ0FBQzJGLElBQUksR0FBRzBGLGtCQUFrQixDQUFDMUYsSUFBSSxHQUFHMEYsa0JBQWtCLENBQUN4VSxLQUFLLEdBQUc0VSxlQUFlO01BQ25GO0lBQ0Y7SUFFQSxPQUFPekwsS0FBSztFQUNkLENBQUM7RUFFRHFHLE9BQU8sQ0FBQ2xLLFNBQVMsQ0FBQzBPLFFBQVEsR0FBRyxZQUFZO0lBQ3ZDLElBQUkvRCxLQUFLO0lBQ1QsSUFBSWdFLEVBQUUsR0FBRyxJQUFJLENBQUN4TixRQUFRO0lBQ3RCLElBQUlvTyxDQUFDLEdBQUksSUFBSSxDQUFDM2EsT0FBTztJQUVyQitWLEtBQUssR0FBR2dFLEVBQUUsQ0FBQ3pPLElBQUksQ0FBQyxxQkFBcUIsQ0FBQyxLQUNoQyxPQUFPcVAsQ0FBQyxDQUFDNUUsS0FBSyxJQUFJLFVBQVUsR0FBRzRFLENBQUMsQ0FBQzVFLEtBQUssQ0FBQy9KLElBQUksQ0FBQytOLEVBQUUsQ0FBQyxDQUFDLENBQUMsQ0FBQyxHQUFJWSxDQUFDLENBQUM1RSxLQUFLLENBQUM7SUFFcEUsT0FBT0EsS0FBSztFQUNkLENBQUM7RUFFRFQsT0FBTyxDQUFDbEssU0FBUyxDQUFDNE0sTUFBTSxHQUFHLFVBQVU0QyxNQUFNLEVBQUU7SUFDM0MsR0FBR0EsTUFBTSxJQUFJLENBQUMsRUFBRWxHLElBQUksQ0FBQ21HLE1BQU0sRUFBRSxHQUFHLE9BQU8sQ0FBQyxTQUNqQ3ZSLFFBQVEsQ0FBQ3dSLGNBQWMsQ0FBQ0YsTUFBTSxDQUFDO0lBQ3RDLE9BQU9BLE1BQU07RUFDZixDQUFDO0VBRUR0RixPQUFPLENBQUNsSyxTQUFTLENBQUNvTSxHQUFHLEdBQUcsWUFBWTtJQUNsQyxJQUFJLENBQUMsSUFBSSxDQUFDTSxJQUFJLEVBQUU7TUFDZCxJQUFJLENBQUNBLElBQUksR0FBR2hZLENBQUMsQ0FBQyxJQUFJLENBQUNFLE9BQU8sQ0FBQzhWLFFBQVEsQ0FBQztNQUNwQyxJQUFJLElBQUksQ0FBQ2dDLElBQUksQ0FBQzdVLE1BQU0sSUFBSSxDQUFDLEVBQUU7UUFDekIsTUFBTSxJQUFJcEQsS0FBSyxDQUFDLElBQUksQ0FBQzBOLElBQUksR0FBRyxpRUFBaUUsQ0FBQztNQUNoRztJQUNGO0lBQ0EsT0FBTyxJQUFJLENBQUN1SyxJQUFJO0VBQ2xCLENBQUM7RUFFRHhDLE9BQU8sQ0FBQ2xLLFNBQVMsQ0FBQ3lPLEtBQUssR0FBRyxZQUFZO0lBQ3BDLE9BQVEsSUFBSSxDQUFDa0IsTUFBTSxHQUFHLElBQUksQ0FBQ0EsTUFBTSxJQUFJLElBQUksQ0FBQ3ZELEdBQUcsRUFBRSxDQUFDOVQsSUFBSSxDQUFDLGdCQUFnQixDQUFDO0VBQ3hFLENBQUM7RUFFRDRSLE9BQU8sQ0FBQ2xLLFNBQVMsQ0FBQzRQLE1BQU0sR0FBRyxZQUFZO0lBQ3JDLElBQUksQ0FBQ3pGLE9BQU8sR0FBRyxJQUFJO0VBQ3JCLENBQUM7RUFFREQsT0FBTyxDQUFDbEssU0FBUyxDQUFDNlAsT0FBTyxHQUFHLFlBQVk7SUFDdEMsSUFBSSxDQUFDMUYsT0FBTyxHQUFHLEtBQUs7RUFDdEIsQ0FBQztFQUVERCxPQUFPLENBQUNsSyxTQUFTLENBQUM4UCxhQUFhLEdBQUcsWUFBWTtJQUM1QyxJQUFJLENBQUMzRixPQUFPLEdBQUcsQ0FBQyxJQUFJLENBQUNBLE9BQU87RUFDOUIsQ0FBQztFQUVERCxPQUFPLENBQUNsSyxTQUFTLENBQUM2QixNQUFNLEdBQUcsVUFBVXpLLENBQUMsRUFBRTtJQUN0QyxJQUFJK1UsSUFBSSxHQUFHLElBQUk7SUFDZixJQUFJL1UsQ0FBQyxFQUFFO01BQ0wrVSxJQUFJLEdBQUd6WCxDQUFDLENBQUMwQyxDQUFDLENBQUNvUixhQUFhLENBQUMsQ0FBQ2hNLElBQUksQ0FBQyxLQUFLLEdBQUcsSUFBSSxDQUFDMkYsSUFBSSxDQUFDO01BQ2pELElBQUksQ0FBQ2dLLElBQUksRUFBRTtRQUNUQSxJQUFJLEdBQUcsSUFBSSxJQUFJLENBQUNmLFdBQVcsQ0FBQ2hVLENBQUMsQ0FBQ29SLGFBQWEsRUFBRSxJQUFJLENBQUNzRCxrQkFBa0IsRUFBRSxDQUFDO1FBQ3ZFcFgsQ0FBQyxDQUFDMEMsQ0FBQyxDQUFDb1IsYUFBYSxDQUFDLENBQUNoTSxJQUFJLENBQUMsS0FBSyxHQUFHLElBQUksQ0FBQzJGLElBQUksRUFBRWdLLElBQUksQ0FBQztNQUNsRDtJQUNGO0lBRUEsSUFBSS9VLENBQUMsRUFBRTtNQUNMK1UsSUFBSSxDQUFDN0IsT0FBTyxDQUFDblQsS0FBSyxHQUFHLENBQUNnVixJQUFJLENBQUM3QixPQUFPLENBQUNuVCxLQUFLO01BQ3hDLElBQUlnVixJQUFJLENBQUNHLGFBQWEsRUFBRSxFQUFFSCxJQUFJLENBQUNWLEtBQUssQ0FBQ1UsSUFBSSxDQUFDLE1BQ3JDQSxJQUFJLENBQUNULEtBQUssQ0FBQ1MsSUFBSSxDQUFDO0lBQ3ZCLENBQUMsTUFBTTtNQUNMQSxJQUFJLENBQUNDLEdBQUcsRUFBRSxDQUFDMVUsUUFBUSxDQUFDLElBQUksQ0FBQyxHQUFHeVUsSUFBSSxDQUFDVCxLQUFLLENBQUNTLElBQUksQ0FBQyxHQUFHQSxJQUFJLENBQUNWLEtBQUssQ0FBQ1UsSUFBSSxDQUFDO0lBQ2pFO0VBQ0YsQ0FBQztFQUVEakMsT0FBTyxDQUFDbEssU0FBUyxDQUFDbEcsT0FBTyxHQUFHLFlBQVk7SUFDdEMsSUFBSW9LLElBQUksR0FBRyxJQUFJO0lBQ2ZtSSxZQUFZLENBQUMsSUFBSSxDQUFDakMsT0FBTyxDQUFDO0lBQzFCLElBQUksQ0FBQ3BFLElBQUksQ0FBQyxZQUFZO01BQ3BCOUIsSUFBSSxDQUFDL0MsUUFBUSxDQUFDNEcsR0FBRyxDQUFDLEdBQUcsR0FBRzdELElBQUksQ0FBQy9CLElBQUksQ0FBQyxDQUFDNE4sVUFBVSxDQUFDLEtBQUssR0FBRzdMLElBQUksQ0FBQy9CLElBQUksQ0FBQztNQUNoRSxJQUFJK0IsSUFBSSxDQUFDd0ksSUFBSSxFQUFFO1FBQ2J4SSxJQUFJLENBQUN3SSxJQUFJLENBQUNsTSxNQUFNLEVBQUU7TUFDcEI7TUFDQTBELElBQUksQ0FBQ3dJLElBQUksR0FBRyxJQUFJO01BQ2hCeEksSUFBSSxDQUFDeUwsTUFBTSxHQUFHLElBQUk7TUFDbEJ6TCxJQUFJLENBQUMrRyxTQUFTLEdBQUcsSUFBSTtJQUN2QixDQUFDLENBQUM7RUFDSixDQUFDOztFQUdEO0VBQ0E7O0VBRUEsU0FBU3ZLLE1BQU0sQ0FBQ0MsTUFBTSxFQUFFO0lBQ3RCLE9BQU8sSUFBSSxDQUFDM0ksSUFBSSxDQUFDLFlBQVk7TUFDM0IsSUFBSVUsS0FBSyxHQUFLaEUsQ0FBQyxDQUFDLElBQUksQ0FBQztNQUNyQixJQUFJOEgsSUFBSSxHQUFNOUQsS0FBSyxDQUFDOEQsSUFBSSxDQUFDLFlBQVksQ0FBQztNQUN0QyxJQUFJNUgsT0FBTyxHQUFHLFFBQU8rTCxNQUFNLEtBQUksUUFBUSxJQUFJQSxNQUFNO01BRWpELElBQUksQ0FBQ25FLElBQUksSUFBSSxjQUFjLENBQUNvQixJQUFJLENBQUMrQyxNQUFNLENBQUMsRUFBRTtNQUMxQyxJQUFJLENBQUNuRSxJQUFJLEVBQUU5RCxLQUFLLENBQUM4RCxJQUFJLENBQUMsWUFBWSxFQUFHQSxJQUFJLEdBQUcsSUFBSTBOLE9BQU8sQ0FBQyxJQUFJLEVBQUV0VixPQUFPLENBQUMsQ0FBRTtNQUN4RSxJQUFJLE9BQU8rTCxNQUFNLElBQUksUUFBUSxFQUFFbkUsSUFBSSxDQUFDbUUsTUFBTSxDQUFDLEVBQUU7SUFDL0MsQ0FBQyxDQUFDO0VBQ0o7RUFFQSxJQUFJRSxHQUFHLEdBQUduTSxDQUFDLENBQUM0RSxFQUFFLENBQUMwVyxPQUFPO0VBRXRCdGIsQ0FBQyxDQUFDNEUsRUFBRSxDQUFDMFcsT0FBTyxHQUFldFAsTUFBTTtFQUNqQ2hNLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzBXLE9BQU8sQ0FBQ2pQLFdBQVcsR0FBR21KLE9BQU87O0VBR2xDO0VBQ0E7O0VBRUF4VixDQUFDLENBQUM0RSxFQUFFLENBQUMwVyxPQUFPLENBQUNoUCxVQUFVLEdBQUcsWUFBWTtJQUNwQ3RNLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzBXLE9BQU8sR0FBR25QLEdBQUc7SUFDbEIsT0FBTyxJQUFJO0VBQ2IsQ0FBQztBQUVILENBQUMsQ0FBQ3JNLE1BQU0sQ0FBQzs7QUFFVDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFHQSxDQUFDLFVBQVVFLENBQUMsRUFBRTtFQUNaLFlBQVk7O0VBRVo7RUFDQTtFQUVBLElBQUl1YixPQUFPLEdBQUcsU0FBVkEsT0FBTyxDQUFhL08sT0FBTyxFQUFFdE0sT0FBTyxFQUFFO0lBQ3hDLElBQUksQ0FBQzJWLElBQUksQ0FBQyxTQUFTLEVBQUVySixPQUFPLEVBQUV0TSxPQUFPLENBQUM7RUFDeEMsQ0FBQztFQUVELElBQUksQ0FBQ0YsQ0FBQyxDQUFDNEUsRUFBRSxDQUFDMFcsT0FBTyxFQUFFLE1BQU0sSUFBSXZiLEtBQUssQ0FBQyw2QkFBNkIsQ0FBQztFQUVqRXdiLE9BQU8sQ0FBQ25RLE9BQU8sR0FBSSxPQUFPO0VBRTFCbVEsT0FBTyxDQUFDNU8sUUFBUSxHQUFHM00sQ0FBQyxDQUFDME0sTUFBTSxDQUFDLENBQUMsQ0FBQyxFQUFFMU0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDMFcsT0FBTyxDQUFDalAsV0FBVyxDQUFDTSxRQUFRLEVBQUU7SUFDakVvSixTQUFTLEVBQUUsT0FBTztJQUNsQjFMLE9BQU8sRUFBRSxPQUFPO0lBQ2hCbVIsT0FBTyxFQUFFLEVBQUU7SUFDWHhGLFFBQVEsRUFBRTtFQUNaLENBQUMsQ0FBQzs7RUFHRjtFQUNBOztFQUVBdUYsT0FBTyxDQUFDalEsU0FBUyxHQUFHdEwsQ0FBQyxDQUFDME0sTUFBTSxDQUFDLENBQUMsQ0FBQyxFQUFFMU0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDMFcsT0FBTyxDQUFDalAsV0FBVyxDQUFDZixTQUFTLENBQUM7RUFFcEVpUSxPQUFPLENBQUNqUSxTQUFTLENBQUNvTCxXQUFXLEdBQUc2RSxPQUFPO0VBRXZDQSxPQUFPLENBQUNqUSxTQUFTLENBQUM2TCxXQUFXLEdBQUcsWUFBWTtJQUMxQyxPQUFPb0UsT0FBTyxDQUFDNU8sUUFBUTtFQUN6QixDQUFDO0VBRUQ0TyxPQUFPLENBQUNqUSxTQUFTLENBQUM2TSxVQUFVLEdBQUcsWUFBWTtJQUN6QyxJQUFJSCxJQUFJLEdBQU0sSUFBSSxDQUFDTixHQUFHLEVBQUU7SUFDeEIsSUFBSXpCLEtBQUssR0FBSyxJQUFJLENBQUMrRCxRQUFRLEVBQUU7SUFDN0IsSUFBSXdCLE9BQU8sR0FBRyxJQUFJLENBQUNDLFVBQVUsRUFBRTtJQUUvQnpELElBQUksQ0FBQ3BVLElBQUksQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDLElBQUksQ0FBQzFELE9BQU8sQ0FBQ2dXLElBQUksR0FBRyxNQUFNLEdBQUcsTUFBTSxDQUFDLENBQUNELEtBQUssQ0FBQztJQUN2RStCLElBQUksQ0FBQ3BVLElBQUksQ0FBQyxrQkFBa0IsQ0FBQyxDQUFDZ0wsUUFBUSxFQUFFLENBQUM5QyxNQUFNLEVBQUUsQ0FBQzdCLEdBQUcsRUFBRTtJQUFFO0lBQ3ZELElBQUksQ0FBQy9KLE9BQU8sQ0FBQ2dXLElBQUksR0FBSSxPQUFPc0YsT0FBTyxJQUFJLFFBQVEsR0FBRyxNQUFNLEdBQUcsUUFBUSxHQUFJLE1BQU0sQ0FDOUUsQ0FBQ0EsT0FBTyxDQUFDO0lBRVZ4RCxJQUFJLENBQUMzVSxXQUFXLENBQUMsK0JBQStCLENBQUM7O0lBRWpEO0lBQ0E7SUFDQSxJQUFJLENBQUMyVSxJQUFJLENBQUNwVSxJQUFJLENBQUMsZ0JBQWdCLENBQUMsQ0FBQ3NTLElBQUksRUFBRSxFQUFFOEIsSUFBSSxDQUFDcFUsSUFBSSxDQUFDLGdCQUFnQixDQUFDLENBQUMwTixJQUFJLEVBQUU7RUFDN0UsQ0FBQztFQUVEaUssT0FBTyxDQUFDalEsU0FBUyxDQUFDdU0sVUFBVSxHQUFHLFlBQVk7SUFDekMsT0FBTyxJQUFJLENBQUNtQyxRQUFRLEVBQUUsSUFBSSxJQUFJLENBQUN5QixVQUFVLEVBQUU7RUFDN0MsQ0FBQztFQUVERixPQUFPLENBQUNqUSxTQUFTLENBQUNtUSxVQUFVLEdBQUcsWUFBWTtJQUN6QyxJQUFJeEIsRUFBRSxHQUFHLElBQUksQ0FBQ3hOLFFBQVE7SUFDdEIsSUFBSW9PLENBQUMsR0FBSSxJQUFJLENBQUMzYSxPQUFPO0lBRXJCLE9BQU8rWixFQUFFLENBQUN6TyxJQUFJLENBQUMsY0FBYyxDQUFDLEtBQ3hCLE9BQU9xUCxDQUFDLENBQUNXLE9BQU8sSUFBSSxVQUFVLEdBQzVCWCxDQUFDLENBQUNXLE9BQU8sQ0FBQ3RQLElBQUksQ0FBQytOLEVBQUUsQ0FBQyxDQUFDLENBQUMsQ0FBQyxHQUNyQlksQ0FBQyxDQUFDVyxPQUFPLENBQUM7RUFDcEIsQ0FBQztFQUVERCxPQUFPLENBQUNqUSxTQUFTLENBQUN5TyxLQUFLLEdBQUcsWUFBWTtJQUNwQyxPQUFRLElBQUksQ0FBQ2tCLE1BQU0sR0FBRyxJQUFJLENBQUNBLE1BQU0sSUFBSSxJQUFJLENBQUN2RCxHQUFHLEVBQUUsQ0FBQzlULElBQUksQ0FBQyxRQUFRLENBQUM7RUFDaEUsQ0FBQzs7RUFHRDtFQUNBOztFQUVBLFNBQVNvSSxNQUFNLENBQUNDLE1BQU0sRUFBRTtJQUN0QixPQUFPLElBQUksQ0FBQzNJLElBQUksQ0FBQyxZQUFZO01BQzNCLElBQUlVLEtBQUssR0FBS2hFLENBQUMsQ0FBQyxJQUFJLENBQUM7TUFDckIsSUFBSThILElBQUksR0FBTTlELEtBQUssQ0FBQzhELElBQUksQ0FBQyxZQUFZLENBQUM7TUFDdEMsSUFBSTVILE9BQU8sR0FBRyxRQUFPK0wsTUFBTSxLQUFJLFFBQVEsSUFBSUEsTUFBTTtNQUVqRCxJQUFJLENBQUNuRSxJQUFJLElBQUksY0FBYyxDQUFDb0IsSUFBSSxDQUFDK0MsTUFBTSxDQUFDLEVBQUU7TUFDMUMsSUFBSSxDQUFDbkUsSUFBSSxFQUFFOUQsS0FBSyxDQUFDOEQsSUFBSSxDQUFDLFlBQVksRUFBR0EsSUFBSSxHQUFHLElBQUl5VCxPQUFPLENBQUMsSUFBSSxFQUFFcmIsT0FBTyxDQUFDLENBQUU7TUFDeEUsSUFBSSxPQUFPK0wsTUFBTSxJQUFJLFFBQVEsRUFBRW5FLElBQUksQ0FBQ21FLE1BQU0sQ0FBQyxFQUFFO0lBQy9DLENBQUMsQ0FBQztFQUNKO0VBRUEsSUFBSUUsR0FBRyxHQUFHbk0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDOFcsT0FBTztFQUV0QjFiLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzhXLE9BQU8sR0FBZTFQLE1BQU07RUFDakNoTSxDQUFDLENBQUM0RSxFQUFFLENBQUM4VyxPQUFPLENBQUNyUCxXQUFXLEdBQUdrUCxPQUFPOztFQUdsQztFQUNBOztFQUVBdmIsQ0FBQyxDQUFDNEUsRUFBRSxDQUFDOFcsT0FBTyxDQUFDcFAsVUFBVSxHQUFHLFlBQVk7SUFDcEN0TSxDQUFDLENBQUM0RSxFQUFFLENBQUM4VyxPQUFPLEdBQUd2UCxHQUFHO0lBQ2xCLE9BQU8sSUFBSTtFQUNiLENBQUM7QUFFSCxDQUFDLENBQUNyTSxNQUFNLENBQUM7O0FBRVQ7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBR0EsQ0FBQyxVQUFVRSxDQUFDLEVBQUU7RUFDWixZQUFZOztFQUVaO0VBQ0E7RUFFQSxTQUFTMmIsU0FBUyxDQUFDblAsT0FBTyxFQUFFdE0sT0FBTyxFQUFFO0lBQ25DLElBQUksQ0FBQ29DLEtBQUssR0FBWXRDLENBQUMsQ0FBQ3dKLFFBQVEsQ0FBQzJJLElBQUksQ0FBQztJQUN0QyxJQUFJLENBQUN5SixjQUFjLEdBQUc1YixDQUFDLENBQUN3TSxPQUFPLENBQUMsQ0FBQ3BJLEVBQUUsQ0FBQ29GLFFBQVEsQ0FBQzJJLElBQUksQ0FBQyxHQUFHblMsQ0FBQyxDQUFDd0MsTUFBTSxDQUFDLEdBQUd4QyxDQUFDLENBQUN3TSxPQUFPLENBQUM7SUFDM0UsSUFBSSxDQUFDdE0sT0FBTyxHQUFVRixDQUFDLENBQUMwTSxNQUFNLENBQUMsQ0FBQyxDQUFDLEVBQUVpUCxTQUFTLENBQUNoUCxRQUFRLEVBQUV6TSxPQUFPLENBQUM7SUFDL0QsSUFBSSxDQUFDcUwsUUFBUSxHQUFTLENBQUMsSUFBSSxDQUFDckwsT0FBTyxDQUFDMEMsTUFBTSxJQUFJLEVBQUUsSUFBSSxjQUFjO0lBQ2xFLElBQUksQ0FBQ2laLE9BQU8sR0FBVSxFQUFFO0lBQ3hCLElBQUksQ0FBQ0MsT0FBTyxHQUFVLEVBQUU7SUFDeEIsSUFBSSxDQUFDQyxZQUFZLEdBQUssSUFBSTtJQUMxQixJQUFJLENBQUM5SCxZQUFZLEdBQUssQ0FBQztJQUV2QixJQUFJLENBQUMySCxjQUFjLENBQUM3WCxFQUFFLENBQUMscUJBQXFCLEVBQUUvRCxDQUFDLENBQUNrTixLQUFLLENBQUMsSUFBSSxDQUFDOE8sT0FBTyxFQUFFLElBQUksQ0FBQyxDQUFDO0lBQzFFLElBQUksQ0FBQ0MsT0FBTyxFQUFFO0lBQ2QsSUFBSSxDQUFDRCxPQUFPLEVBQUU7RUFDaEI7RUFFQUwsU0FBUyxDQUFDdlEsT0FBTyxHQUFJLE9BQU87RUFFNUJ1USxTQUFTLENBQUNoUCxRQUFRLEdBQUc7SUFDbkJ1TSxNQUFNLEVBQUU7RUFDVixDQUFDO0VBRUR5QyxTQUFTLENBQUNyUSxTQUFTLENBQUM0USxlQUFlLEdBQUcsWUFBWTtJQUNoRCxPQUFPLElBQUksQ0FBQ04sY0FBYyxDQUFDLENBQUMsQ0FBQyxDQUFDM0gsWUFBWSxJQUFJVyxJQUFJLENBQUN1SCxHQUFHLENBQUMsSUFBSSxDQUFDN1osS0FBSyxDQUFDLENBQUMsQ0FBQyxDQUFDMlIsWUFBWSxFQUFFekssUUFBUSxDQUFDNEUsZUFBZSxDQUFDNkYsWUFBWSxDQUFDO0VBQzNILENBQUM7RUFFRDBILFNBQVMsQ0FBQ3JRLFNBQVMsQ0FBQzJRLE9BQU8sR0FBRyxZQUFZO0lBQ3hDLElBQUl6TSxJQUFJLEdBQVksSUFBSTtJQUN4QixJQUFJNE0sWUFBWSxHQUFJLFFBQVE7SUFDNUIsSUFBSUMsVUFBVSxHQUFNLENBQUM7SUFFckIsSUFBSSxDQUFDUixPQUFPLEdBQVEsRUFBRTtJQUN0QixJQUFJLENBQUNDLE9BQU8sR0FBUSxFQUFFO0lBQ3RCLElBQUksQ0FBQzdILFlBQVksR0FBRyxJQUFJLENBQUNpSSxlQUFlLEVBQUU7SUFFMUMsSUFBSSxDQUFDbGMsQ0FBQyxDQUFDc2MsUUFBUSxDQUFDLElBQUksQ0FBQ1YsY0FBYyxDQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUU7TUFDdkNRLFlBQVksR0FBRyxVQUFVO01BQ3pCQyxVQUFVLEdBQUssSUFBSSxDQUFDVCxjQUFjLENBQUMxSSxTQUFTLEVBQUU7SUFDaEQ7SUFFQSxJQUFJLENBQUM1USxLQUFLLENBQ1BzQixJQUFJLENBQUMsSUFBSSxDQUFDMkgsUUFBUSxDQUFDLENBQ25CZ1IsR0FBRyxDQUFDLFlBQVk7TUFDZixJQUFJclgsR0FBRyxHQUFLbEYsQ0FBQyxDQUFDLElBQUksQ0FBQztNQUNuQixJQUFJcVEsSUFBSSxHQUFJbkwsR0FBRyxDQUFDNEMsSUFBSSxDQUFDLFFBQVEsQ0FBQyxJQUFJNUMsR0FBRyxDQUFDc0csSUFBSSxDQUFDLE1BQU0sQ0FBQztNQUNsRCxJQUFJZ1IsS0FBSyxHQUFHLEtBQUssQ0FBQ3RULElBQUksQ0FBQ21ILElBQUksQ0FBQyxJQUFJclEsQ0FBQyxDQUFDcVEsSUFBSSxDQUFDO01BRXZDLE9BQVFtTSxLQUFLLElBQ1JBLEtBQUssQ0FBQ3JaLE1BQU0sSUFDWnFaLEtBQUssQ0FBQ3BZLEVBQUUsQ0FBQyxVQUFVLENBQUMsSUFDcEIsQ0FBQyxDQUFDb1ksS0FBSyxDQUFDSixZQUFZLENBQUMsRUFBRSxDQUFDOUQsR0FBRyxHQUFHK0QsVUFBVSxFQUFFaE0sSUFBSSxDQUFDLENBQUMsSUFBSyxJQUFJO0lBQ2hFLENBQUMsQ0FBQyxDQUNEb00sSUFBSSxDQUFDLFVBQVVDLENBQUMsRUFBRUMsQ0FBQyxFQUFFO01BQUUsT0FBT0QsQ0FBQyxDQUFDLENBQUMsQ0FBQyxHQUFHQyxDQUFDLENBQUMsQ0FBQyxDQUFDO0lBQUMsQ0FBQyxDQUFDLENBQzVDclosSUFBSSxDQUFDLFlBQVk7TUFDaEJrTSxJQUFJLENBQUNxTSxPQUFPLENBQUNlLElBQUksQ0FBQyxJQUFJLENBQUMsQ0FBQyxDQUFDLENBQUM7TUFDMUJwTixJQUFJLENBQUNzTSxPQUFPLENBQUNjLElBQUksQ0FBQyxJQUFJLENBQUMsQ0FBQyxDQUFDLENBQUM7SUFDNUIsQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUVEakIsU0FBUyxDQUFDclEsU0FBUyxDQUFDMFEsT0FBTyxHQUFHLFlBQVk7SUFDeEMsSUFBSTlJLFNBQVMsR0FBTSxJQUFJLENBQUMwSSxjQUFjLENBQUMxSSxTQUFTLEVBQUUsR0FBRyxJQUFJLENBQUNoVCxPQUFPLENBQUNnWixNQUFNO0lBQ3hFLElBQUlqRixZQUFZLEdBQUcsSUFBSSxDQUFDaUksZUFBZSxFQUFFO0lBQ3pDLElBQUlXLFNBQVMsR0FBTSxJQUFJLENBQUMzYyxPQUFPLENBQUNnWixNQUFNLEdBQUdqRixZQUFZLEdBQUcsSUFBSSxDQUFDMkgsY0FBYyxDQUFDN1csTUFBTSxFQUFFO0lBQ3BGLElBQUk4VyxPQUFPLEdBQVEsSUFBSSxDQUFDQSxPQUFPO0lBQy9CLElBQUlDLE9BQU8sR0FBUSxJQUFJLENBQUNBLE9BQU87SUFDL0IsSUFBSUMsWUFBWSxHQUFHLElBQUksQ0FBQ0EsWUFBWTtJQUNwQyxJQUFJeFksQ0FBQztJQUVMLElBQUksSUFBSSxDQUFDMFEsWUFBWSxJQUFJQSxZQUFZLEVBQUU7TUFDckMsSUFBSSxDQUFDZ0ksT0FBTyxFQUFFO0lBQ2hCO0lBRUEsSUFBSS9JLFNBQVMsSUFBSTJKLFNBQVMsRUFBRTtNQUMxQixPQUFPZCxZQUFZLEtBQUt4WSxDQUFDLEdBQUd1WSxPQUFPLENBQUNBLE9BQU8sQ0FBQzNZLE1BQU0sR0FBRyxDQUFDLENBQUMsQ0FBQyxJQUFJLElBQUksQ0FBQ2YsUUFBUSxDQUFDbUIsQ0FBQyxDQUFDO0lBQzlFO0lBRUEsSUFBSXdZLFlBQVksSUFBSTdJLFNBQVMsR0FBRzJJLE9BQU8sQ0FBQyxDQUFDLENBQUMsRUFBRTtNQUMxQyxJQUFJLENBQUNFLFlBQVksR0FBRyxJQUFJO01BQ3hCLE9BQU8sSUFBSSxDQUFDZSxLQUFLLEVBQUU7SUFDckI7SUFFQSxLQUFLdlosQ0FBQyxHQUFHc1ksT0FBTyxDQUFDMVksTUFBTSxFQUFFSSxDQUFDLEVBQUUsR0FBRztNQUM3QndZLFlBQVksSUFBSUQsT0FBTyxDQUFDdlksQ0FBQyxDQUFDLElBQ3JCMlAsU0FBUyxJQUFJMkksT0FBTyxDQUFDdFksQ0FBQyxDQUFDLEtBQ3RCc1ksT0FBTyxDQUFDdFksQ0FBQyxHQUFHLENBQUMsQ0FBQyxLQUFLeUUsU0FBUyxJQUFJa0wsU0FBUyxHQUFHMkksT0FBTyxDQUFDdFksQ0FBQyxHQUFHLENBQUMsQ0FBQyxDQUFDLElBQzVELElBQUksQ0FBQ25CLFFBQVEsQ0FBQzBaLE9BQU8sQ0FBQ3ZZLENBQUMsQ0FBQyxDQUFDO0lBQ2hDO0VBQ0YsQ0FBQztFQUVEb1ksU0FBUyxDQUFDclEsU0FBUyxDQUFDbEosUUFBUSxHQUFHLFVBQVVRLE1BQU0sRUFBRTtJQUMvQyxJQUFJLENBQUNtWixZQUFZLEdBQUduWixNQUFNO0lBRTFCLElBQUksQ0FBQ2thLEtBQUssRUFBRTtJQUVaLElBQUl2UixRQUFRLEdBQUcsSUFBSSxDQUFDQSxRQUFRLEdBQzFCLGdCQUFnQixHQUFHM0ksTUFBTSxHQUFHLEtBQUssR0FDakMsSUFBSSxDQUFDMkksUUFBUSxHQUFHLFNBQVMsR0FBRzNJLE1BQU0sR0FBRyxJQUFJO0lBRTNDLElBQUlvTSxNQUFNLEdBQUdoUCxDQUFDLENBQUN1TCxRQUFRLENBQUMsQ0FDckJySSxPQUFPLENBQUMsSUFBSSxDQUFDLENBQ2JXLFFBQVEsQ0FBQyxRQUFRLENBQUM7SUFFckIsSUFBSW1MLE1BQU0sQ0FBQ2pNLE1BQU0sQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDSSxNQUFNLEVBQUU7TUFDMUM2TCxNQUFNLEdBQUdBLE1BQU0sQ0FDWjVILE9BQU8sQ0FBQyxhQUFhLENBQUMsQ0FDdEJ2RCxRQUFRLENBQUMsUUFBUSxDQUFDO0lBQ3ZCO0lBRUFtTCxNQUFNLENBQUMzRSxPQUFPLENBQUMsdUJBQXVCLENBQUM7RUFDekMsQ0FBQztFQUVEc1IsU0FBUyxDQUFDclEsU0FBUyxDQUFDd1IsS0FBSyxHQUFHLFlBQVk7SUFDdEM5YyxDQUFDLENBQUMsSUFBSSxDQUFDdUwsUUFBUSxDQUFDLENBQ2J3UixZQUFZLENBQUMsSUFBSSxDQUFDN2MsT0FBTyxDQUFDMEMsTUFBTSxFQUFFLFNBQVMsQ0FBQyxDQUM1Q1MsV0FBVyxDQUFDLFFBQVEsQ0FBQztFQUMxQixDQUFDOztFQUdEO0VBQ0E7O0VBRUEsU0FBUzJJLE1BQU0sQ0FBQ0MsTUFBTSxFQUFFO0lBQ3RCLE9BQU8sSUFBSSxDQUFDM0ksSUFBSSxDQUFDLFlBQVk7TUFDM0IsSUFBSVUsS0FBSyxHQUFLaEUsQ0FBQyxDQUFDLElBQUksQ0FBQztNQUNyQixJQUFJOEgsSUFBSSxHQUFNOUQsS0FBSyxDQUFDOEQsSUFBSSxDQUFDLGNBQWMsQ0FBQztNQUN4QyxJQUFJNUgsT0FBTyxHQUFHLFFBQU8rTCxNQUFNLEtBQUksUUFBUSxJQUFJQSxNQUFNO01BRWpELElBQUksQ0FBQ25FLElBQUksRUFBRTlELEtBQUssQ0FBQzhELElBQUksQ0FBQyxjQUFjLEVBQUdBLElBQUksR0FBRyxJQUFJNlQsU0FBUyxDQUFDLElBQUksRUFBRXpiLE9BQU8sQ0FBQyxDQUFFO01BQzVFLElBQUksT0FBTytMLE1BQU0sSUFBSSxRQUFRLEVBQUVuRSxJQUFJLENBQUNtRSxNQUFNLENBQUMsRUFBRTtJQUMvQyxDQUFDLENBQUM7RUFDSjtFQUVBLElBQUlFLEdBQUcsR0FBR25NLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQ29ZLFNBQVM7RUFFeEJoZCxDQUFDLENBQUM0RSxFQUFFLENBQUNvWSxTQUFTLEdBQWVoUixNQUFNO0VBQ25DaE0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDb1ksU0FBUyxDQUFDM1EsV0FBVyxHQUFHc1AsU0FBUzs7RUFHdEM7RUFDQTs7RUFFQTNiLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQ29ZLFNBQVMsQ0FBQzFRLFVBQVUsR0FBRyxZQUFZO0lBQ3RDdE0sQ0FBQyxDQUFDNEUsRUFBRSxDQUFDb1ksU0FBUyxHQUFHN1EsR0FBRztJQUNwQixPQUFPLElBQUk7RUFDYixDQUFDOztFQUdEO0VBQ0E7O0VBRUFuTSxDQUFDLENBQUN3QyxNQUFNLENBQUMsQ0FBQ3VCLEVBQUUsQ0FBQyw0QkFBNEIsRUFBRSxZQUFZO0lBQ3JEL0QsQ0FBQyxDQUFDLHFCQUFxQixDQUFDLENBQUNzRCxJQUFJLENBQUMsWUFBWTtNQUN4QyxJQUFJMlosSUFBSSxHQUFHamQsQ0FBQyxDQUFDLElBQUksQ0FBQztNQUNsQmdNLE1BQU0sQ0FBQ0UsSUFBSSxDQUFDK1EsSUFBSSxFQUFFQSxJQUFJLENBQUNuVixJQUFJLEVBQUUsQ0FBQztJQUNoQyxDQUFDLENBQUM7RUFDSixDQUFDLENBQUM7QUFFSixDQUFDLENBQUNoSSxNQUFNLENBQUM7O0FBRVQ7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBR0EsQ0FBQyxVQUFVRSxDQUFDLEVBQUU7RUFDWixZQUFZOztFQUVaO0VBQ0E7RUFFQSxJQUFJa2QsR0FBRyxHQUFHLFNBQU5BLEdBQUcsQ0FBYTFRLE9BQU8sRUFBRTtJQUMzQjtJQUNBLElBQUksQ0FBQ0EsT0FBTyxHQUFHeE0sQ0FBQyxDQUFDd00sT0FBTyxDQUFDO0lBQ3pCO0VBQ0YsQ0FBQzs7RUFFRDBRLEdBQUcsQ0FBQzlSLE9BQU8sR0FBRyxPQUFPO0VBRXJCOFIsR0FBRyxDQUFDN1IsbUJBQW1CLEdBQUcsR0FBRztFQUU3QjZSLEdBQUcsQ0FBQzVSLFNBQVMsQ0FBQ3hILElBQUksR0FBRyxZQUFZO0lBQy9CLElBQUlFLEtBQUssR0FBTSxJQUFJLENBQUN3SSxPQUFPO0lBQzNCLElBQUkyUSxHQUFHLEdBQVFuWixLQUFLLENBQUNvRCxPQUFPLENBQUMsd0JBQXdCLENBQUM7SUFDdEQsSUFBSW1FLFFBQVEsR0FBR3ZILEtBQUssQ0FBQzhELElBQUksQ0FBQyxRQUFRLENBQUM7SUFFbkMsSUFBSSxDQUFDeUQsUUFBUSxFQUFFO01BQ2JBLFFBQVEsR0FBR3ZILEtBQUssQ0FBQ3dILElBQUksQ0FBQyxNQUFNLENBQUM7TUFDN0JELFFBQVEsR0FBR0EsUUFBUSxJQUFJQSxRQUFRLENBQUNFLE9BQU8sQ0FBQyxnQkFBZ0IsRUFBRSxFQUFFLENBQUMsRUFBQztJQUNoRTs7SUFFQSxJQUFJekgsS0FBSyxDQUFDakIsTUFBTSxDQUFDLElBQUksQ0FBQyxDQUFDQyxRQUFRLENBQUMsUUFBUSxDQUFDLEVBQUU7SUFFM0MsSUFBSW9hLFNBQVMsR0FBR0QsR0FBRyxDQUFDdlosSUFBSSxDQUFDLGdCQUFnQixDQUFDO0lBQzFDLElBQUl5WixTQUFTLEdBQUdyZCxDQUFDLENBQUMyTCxLQUFLLENBQUMsYUFBYSxFQUFFO01BQ3JDaUUsYUFBYSxFQUFFNUwsS0FBSyxDQUFDLENBQUM7SUFDeEIsQ0FBQyxDQUFDO0lBQ0YsSUFBSXVSLFNBQVMsR0FBR3ZWLENBQUMsQ0FBQzJMLEtBQUssQ0FBQyxhQUFhLEVBQUU7TUFDckNpRSxhQUFhLEVBQUV3TixTQUFTLENBQUMsQ0FBQztJQUM1QixDQUFDLENBQUM7SUFFRkEsU0FBUyxDQUFDL1MsT0FBTyxDQUFDZ1QsU0FBUyxDQUFDO0lBQzVCclosS0FBSyxDQUFDcUcsT0FBTyxDQUFDa0wsU0FBUyxDQUFDO0lBRXhCLElBQUlBLFNBQVMsQ0FBQzNKLGtCQUFrQixFQUFFLElBQUl5UixTQUFTLENBQUN6UixrQkFBa0IsRUFBRSxFQUFFO0lBRXRFLElBQUlqSixPQUFPLEdBQUczQyxDQUFDLENBQUN1TCxRQUFRLENBQUM7SUFFekIsSUFBSSxDQUFDbkosUUFBUSxDQUFDNEIsS0FBSyxDQUFDb0QsT0FBTyxDQUFDLElBQUksQ0FBQyxFQUFFK1YsR0FBRyxDQUFDO0lBQ3ZDLElBQUksQ0FBQy9hLFFBQVEsQ0FBQ08sT0FBTyxFQUFFQSxPQUFPLENBQUNJLE1BQU0sRUFBRSxFQUFFLFlBQVk7TUFDbkRxYSxTQUFTLENBQUMvUyxPQUFPLENBQUM7UUFDaEJvRCxJQUFJLEVBQUUsZUFBZTtRQUNyQm1DLGFBQWEsRUFBRTVMLEtBQUssQ0FBQyxDQUFDO01BQ3hCLENBQUMsQ0FBQztNQUNGQSxLQUFLLENBQUNxRyxPQUFPLENBQUM7UUFDWm9ELElBQUksRUFBRSxjQUFjO1FBQ3BCbUMsYUFBYSxFQUFFd04sU0FBUyxDQUFDLENBQUM7TUFDNUIsQ0FBQyxDQUFDO0lBQ0osQ0FBQyxDQUFDO0VBQ0osQ0FBQztFQUVERixHQUFHLENBQUM1UixTQUFTLENBQUNsSixRQUFRLEdBQUcsVUFBVW9LLE9BQU8sRUFBRTJKLFNBQVMsRUFBRWpPLFFBQVEsRUFBRTtJQUMvRCxJQUFJNkYsT0FBTyxHQUFNb0ksU0FBUyxDQUFDdlMsSUFBSSxDQUFDLFdBQVcsQ0FBQztJQUM1QyxJQUFJa0csVUFBVSxHQUFHNUIsUUFBUSxJQUNwQmxJLENBQUMsQ0FBQ3NLLE9BQU8sQ0FBQ1IsVUFBVSxLQUNuQmlFLE9BQU8sQ0FBQzVLLE1BQU0sSUFBSTRLLE9BQU8sQ0FBQy9LLFFBQVEsQ0FBQyxNQUFNLENBQUMsSUFBSSxDQUFDLENBQUNtVCxTQUFTLENBQUN2UyxJQUFJLENBQUMsU0FBUyxDQUFDLENBQUNULE1BQU0sQ0FBQztJQUV2RixTQUFTTSxJQUFJLEdBQUc7TUFDZHNLLE9BQU8sQ0FDSjFLLFdBQVcsQ0FBQyxRQUFRLENBQUMsQ0FDckJPLElBQUksQ0FBQyw0QkFBNEIsQ0FBQyxDQUNoQ1AsV0FBVyxDQUFDLFFBQVEsQ0FBQyxDQUN2QjRHLEdBQUcsRUFBRSxDQUNMckcsSUFBSSxDQUFDLHFCQUFxQixDQUFDLENBQ3pCNEgsSUFBSSxDQUFDLGVBQWUsRUFBRSxLQUFLLENBQUM7TUFFakNnQixPQUFPLENBQ0ozSSxRQUFRLENBQUMsUUFBUSxDQUFDLENBQ2xCRCxJQUFJLENBQUMscUJBQXFCLENBQUMsQ0FDekI0SCxJQUFJLENBQUMsZUFBZSxFQUFFLElBQUksQ0FBQztNQUVoQyxJQUFJMUIsVUFBVSxFQUFFO1FBQ2QwQyxPQUFPLENBQUMsQ0FBQyxDQUFDLENBQUN3RCxXQUFXLEVBQUM7UUFDdkJ4RCxPQUFPLENBQUMzSSxRQUFRLENBQUMsSUFBSSxDQUFDO01BQ3hCLENBQUMsTUFBTTtRQUNMMkksT0FBTyxDQUFDbkosV0FBVyxDQUFDLE1BQU0sQ0FBQztNQUM3QjtNQUVBLElBQUltSixPQUFPLENBQUN6SixNQUFNLENBQUMsZ0JBQWdCLENBQUMsQ0FBQ0ksTUFBTSxFQUFFO1FBQzNDcUosT0FBTyxDQUNKcEYsT0FBTyxDQUFDLGFBQWEsQ0FBQyxDQUNwQnZELFFBQVEsQ0FBQyxRQUFRLENBQUMsQ0FDcEJvRyxHQUFHLEVBQUUsQ0FDTHJHLElBQUksQ0FBQyxxQkFBcUIsQ0FBQyxDQUN6QjRILElBQUksQ0FBQyxlQUFlLEVBQUUsSUFBSSxDQUFDO01BQ2xDO01BRUF0RCxRQUFRLElBQUlBLFFBQVEsRUFBRTtJQUN4QjtJQUVBNkYsT0FBTyxDQUFDNUssTUFBTSxJQUFJMkcsVUFBVSxHQUMxQmlFLE9BQU8sQ0FDSjNGLEdBQUcsQ0FBQyxpQkFBaUIsRUFBRTNFLElBQUksQ0FBQyxDQUM1QnlHLG9CQUFvQixDQUFDZ1QsR0FBRyxDQUFDN1IsbUJBQW1CLENBQUMsR0FDaEQ1SCxJQUFJLEVBQUU7SUFFUnNLLE9BQU8sQ0FBQzFLLFdBQVcsQ0FBQyxJQUFJLENBQUM7RUFDM0IsQ0FBQzs7RUFHRDtFQUNBOztFQUVBLFNBQVMySSxNQUFNLENBQUNDLE1BQU0sRUFBRTtJQUN0QixPQUFPLElBQUksQ0FBQzNJLElBQUksQ0FBQyxZQUFZO01BQzNCLElBQUlVLEtBQUssR0FBR2hFLENBQUMsQ0FBQyxJQUFJLENBQUM7TUFDbkIsSUFBSThILElBQUksR0FBSTlELEtBQUssQ0FBQzhELElBQUksQ0FBQyxRQUFRLENBQUM7TUFFaEMsSUFBSSxDQUFDQSxJQUFJLEVBQUU5RCxLQUFLLENBQUM4RCxJQUFJLENBQUMsUUFBUSxFQUFHQSxJQUFJLEdBQUcsSUFBSW9WLEdBQUcsQ0FBQyxJQUFJLENBQUMsQ0FBRTtNQUN2RCxJQUFJLE9BQU9qUixNQUFNLElBQUksUUFBUSxFQUFFbkUsSUFBSSxDQUFDbUUsTUFBTSxDQUFDLEVBQUU7SUFDL0MsQ0FBQyxDQUFDO0VBQ0o7RUFFQSxJQUFJRSxHQUFHLEdBQUduTSxDQUFDLENBQUM0RSxFQUFFLENBQUMwWSxHQUFHO0VBRWxCdGQsQ0FBQyxDQUFDNEUsRUFBRSxDQUFDMFksR0FBRyxHQUFldFIsTUFBTTtFQUM3QmhNLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzBZLEdBQUcsQ0FBQ2pSLFdBQVcsR0FBRzZRLEdBQUc7O0VBRzFCO0VBQ0E7O0VBRUFsZCxDQUFDLENBQUM0RSxFQUFFLENBQUMwWSxHQUFHLENBQUNoUixVQUFVLEdBQUcsWUFBWTtJQUNoQ3RNLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzBZLEdBQUcsR0FBR25SLEdBQUc7SUFDZCxPQUFPLElBQUk7RUFDYixDQUFDOztFQUdEO0VBQ0E7O0VBRUEsSUFBSWlFLFlBQVksR0FBRyxTQUFmQSxZQUFZLENBQWExTixDQUFDLEVBQUU7SUFDOUJBLENBQUMsQ0FBQ2tGLGNBQWMsRUFBRTtJQUNsQm9FLE1BQU0sQ0FBQ0UsSUFBSSxDQUFDbE0sQ0FBQyxDQUFDLElBQUksQ0FBQyxFQUFFLE1BQU0sQ0FBQztFQUM5QixDQUFDO0VBRURBLENBQUMsQ0FBQ3dKLFFBQVEsQ0FBQyxDQUNSekYsRUFBRSxDQUFDLHVCQUF1QixFQUFFLHFCQUFxQixFQUFFcU0sWUFBWSxDQUFDLENBQ2hFck0sRUFBRSxDQUFDLHVCQUF1QixFQUFFLHNCQUFzQixFQUFFcU0sWUFBWSxDQUFDO0FBRXRFLENBQUMsQ0FBQ3RRLE1BQU0sQ0FBQzs7QUFFVDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFHQSxDQUFDLFVBQVVFLENBQUMsRUFBRTtFQUNaLFlBQVk7O0VBRVo7RUFDQTtFQUVBLElBQUl1ZCxLQUFLLEdBQUcsU0FBUkEsS0FBSyxDQUFhL1EsT0FBTyxFQUFFdE0sT0FBTyxFQUFFO0lBQ3RDLElBQUksQ0FBQ0EsT0FBTyxHQUFHRixDQUFDLENBQUMwTSxNQUFNLENBQUMsQ0FBQyxDQUFDLEVBQUU2USxLQUFLLENBQUM1USxRQUFRLEVBQUV6TSxPQUFPLENBQUM7SUFFcEQsSUFBSSxDQUFDeUMsT0FBTyxHQUFHM0MsQ0FBQyxDQUFDLElBQUksQ0FBQ0UsT0FBTyxDQUFDMEMsTUFBTSxDQUFDLENBQ2xDbUIsRUFBRSxDQUFDLDBCQUEwQixFQUFFL0QsQ0FBQyxDQUFDa04sS0FBSyxDQUFDLElBQUksQ0FBQ3NRLGFBQWEsRUFBRSxJQUFJLENBQUMsQ0FBQyxDQUNqRXpaLEVBQUUsQ0FBQyx5QkFBeUIsRUFBRy9ELENBQUMsQ0FBQ2tOLEtBQUssQ0FBQyxJQUFJLENBQUN1USwwQkFBMEIsRUFBRSxJQUFJLENBQUMsQ0FBQztJQUVqRixJQUFJLENBQUNoUixRQUFRLEdBQU96TSxDQUFDLENBQUN3TSxPQUFPLENBQUM7SUFDOUIsSUFBSSxDQUFDa1IsT0FBTyxHQUFRLElBQUk7SUFDeEIsSUFBSSxDQUFDQyxLQUFLLEdBQVUsSUFBSTtJQUN4QixJQUFJLENBQUNDLFlBQVksR0FBRyxJQUFJO0lBRXhCLElBQUksQ0FBQ0osYUFBYSxFQUFFO0VBQ3RCLENBQUM7RUFFREQsS0FBSyxDQUFDblMsT0FBTyxHQUFJLE9BQU87RUFFeEJtUyxLQUFLLENBQUNNLEtBQUssR0FBTSw4QkFBOEI7RUFFL0NOLEtBQUssQ0FBQzVRLFFBQVEsR0FBRztJQUNmdU0sTUFBTSxFQUFFLENBQUM7SUFDVHRXLE1BQU0sRUFBRUo7RUFDVixDQUFDO0VBRUQrYSxLQUFLLENBQUNqUyxTQUFTLENBQUN3UyxRQUFRLEdBQUcsVUFBVTdKLFlBQVksRUFBRWxQLE1BQU0sRUFBRWEsU0FBUyxFQUFFbVksWUFBWSxFQUFFO0lBQ2xGLElBQUk3SyxTQUFTLEdBQU0sSUFBSSxDQUFDdlEsT0FBTyxDQUFDdVEsU0FBUyxFQUFFO0lBQzNDLElBQUk4SyxRQUFRLEdBQU8sSUFBSSxDQUFDdlIsUUFBUSxDQUFDeU0sTUFBTSxFQUFFO0lBQ3pDLElBQUkrRSxZQUFZLEdBQUcsSUFBSSxDQUFDdGIsT0FBTyxDQUFDb0MsTUFBTSxFQUFFO0lBRXhDLElBQUlhLFNBQVMsSUFBSSxJQUFJLElBQUksSUFBSSxDQUFDOFgsT0FBTyxJQUFJLEtBQUssRUFBRSxPQUFPeEssU0FBUyxHQUFHdE4sU0FBUyxHQUFHLEtBQUssR0FBRyxLQUFLO0lBRTVGLElBQUksSUFBSSxDQUFDOFgsT0FBTyxJQUFJLFFBQVEsRUFBRTtNQUM1QixJQUFJOVgsU0FBUyxJQUFJLElBQUksRUFBRSxPQUFRc04sU0FBUyxHQUFHLElBQUksQ0FBQ3lLLEtBQUssSUFBSUssUUFBUSxDQUFDMUYsR0FBRyxHQUFJLEtBQUssR0FBRyxRQUFRO01BQ3pGLE9BQVFwRixTQUFTLEdBQUcrSyxZQUFZLElBQUloSyxZQUFZLEdBQUc4SixZQUFZLEdBQUksS0FBSyxHQUFHLFFBQVE7SUFDckY7SUFFQSxJQUFJRyxZQUFZLEdBQUssSUFBSSxDQUFDUixPQUFPLElBQUksSUFBSTtJQUN6QyxJQUFJUyxXQUFXLEdBQU1ELFlBQVksR0FBR2hMLFNBQVMsR0FBRzhLLFFBQVEsQ0FBQzFGLEdBQUc7SUFDNUQsSUFBSThGLGNBQWMsR0FBR0YsWUFBWSxHQUFHRCxZQUFZLEdBQUdsWixNQUFNO0lBRXpELElBQUlhLFNBQVMsSUFBSSxJQUFJLElBQUlzTixTQUFTLElBQUl0TixTQUFTLEVBQUUsT0FBTyxLQUFLO0lBQzdELElBQUltWSxZQUFZLElBQUksSUFBSSxJQUFLSSxXQUFXLEdBQUdDLGNBQWMsSUFBSW5LLFlBQVksR0FBRzhKLFlBQWEsRUFBRSxPQUFPLFFBQVE7SUFFMUcsT0FBTyxLQUFLO0VBQ2QsQ0FBQztFQUVEUixLQUFLLENBQUNqUyxTQUFTLENBQUMrUyxlQUFlLEdBQUcsWUFBWTtJQUM1QyxJQUFJLElBQUksQ0FBQ1QsWUFBWSxFQUFFLE9BQU8sSUFBSSxDQUFDQSxZQUFZO0lBQy9DLElBQUksQ0FBQ25SLFFBQVEsQ0FBQ3BKLFdBQVcsQ0FBQ2thLEtBQUssQ0FBQ00sS0FBSyxDQUFDLENBQUNoYSxRQUFRLENBQUMsT0FBTyxDQUFDO0lBQ3hELElBQUlxUCxTQUFTLEdBQUcsSUFBSSxDQUFDdlEsT0FBTyxDQUFDdVEsU0FBUyxFQUFFO0lBQ3hDLElBQUk4SyxRQUFRLEdBQUksSUFBSSxDQUFDdlIsUUFBUSxDQUFDeU0sTUFBTSxFQUFFO0lBQ3RDLE9BQVEsSUFBSSxDQUFDMEUsWUFBWSxHQUFHSSxRQUFRLENBQUMxRixHQUFHLEdBQUdwRixTQUFTO0VBQ3RELENBQUM7RUFFRHFLLEtBQUssQ0FBQ2pTLFNBQVMsQ0FBQ21TLDBCQUEwQixHQUFHLFlBQVk7SUFDdkRyVSxVQUFVLENBQUNwSixDQUFDLENBQUNrTixLQUFLLENBQUMsSUFBSSxDQUFDc1EsYUFBYSxFQUFFLElBQUksQ0FBQyxFQUFFLENBQUMsQ0FBQztFQUNsRCxDQUFDO0VBRURELEtBQUssQ0FBQ2pTLFNBQVMsQ0FBQ2tTLGFBQWEsR0FBRyxZQUFZO0lBQzFDLElBQUksQ0FBQyxJQUFJLENBQUMvUSxRQUFRLENBQUNySSxFQUFFLENBQUMsVUFBVSxDQUFDLEVBQUU7SUFFbkMsSUFBSVcsTUFBTSxHQUFTLElBQUksQ0FBQzBILFFBQVEsQ0FBQzFILE1BQU0sRUFBRTtJQUN6QyxJQUFJbVUsTUFBTSxHQUFTLElBQUksQ0FBQ2haLE9BQU8sQ0FBQ2daLE1BQU07SUFDdEMsSUFBSXRULFNBQVMsR0FBTXNULE1BQU0sQ0FBQ1osR0FBRztJQUM3QixJQUFJeUYsWUFBWSxHQUFHN0UsTUFBTSxDQUFDTCxNQUFNO0lBQ2hDLElBQUk1RSxZQUFZLEdBQUdXLElBQUksQ0FBQ3VILEdBQUcsQ0FBQ25jLENBQUMsQ0FBQ3dKLFFBQVEsQ0FBQyxDQUFDekUsTUFBTSxFQUFFLEVBQUUvRSxDQUFDLENBQUN3SixRQUFRLENBQUMySSxJQUFJLENBQUMsQ0FBQ3BOLE1BQU0sRUFBRSxDQUFDO0lBRTVFLElBQUksUUFBT21VLE1BQU0sS0FBSSxRQUFRLEVBQVU2RSxZQUFZLEdBQUduWSxTQUFTLEdBQUdzVCxNQUFNO0lBQ3hFLElBQUksT0FBT3RULFNBQVMsSUFBSSxVQUFVLEVBQUtBLFNBQVMsR0FBTXNULE1BQU0sQ0FBQ1osR0FBRyxDQUFDLElBQUksQ0FBQzdMLFFBQVEsQ0FBQztJQUMvRSxJQUFJLE9BQU9zUixZQUFZLElBQUksVUFBVSxFQUFFQSxZQUFZLEdBQUc3RSxNQUFNLENBQUNMLE1BQU0sQ0FBQyxJQUFJLENBQUNwTSxRQUFRLENBQUM7SUFFbEYsSUFBSTZSLEtBQUssR0FBRyxJQUFJLENBQUNSLFFBQVEsQ0FBQzdKLFlBQVksRUFBRWxQLE1BQU0sRUFBRWEsU0FBUyxFQUFFbVksWUFBWSxDQUFDO0lBRXhFLElBQUksSUFBSSxDQUFDTCxPQUFPLElBQUlZLEtBQUssRUFBRTtNQUN6QixJQUFJLElBQUksQ0FBQ1gsS0FBSyxJQUFJLElBQUksRUFBRSxJQUFJLENBQUNsUixRQUFRLENBQUMwSCxHQUFHLENBQUMsS0FBSyxFQUFFLEVBQUUsQ0FBQztNQUVwRCxJQUFJb0ssU0FBUyxHQUFHLE9BQU8sSUFBSUQsS0FBSyxHQUFHLEdBQUcsR0FBR0EsS0FBSyxHQUFHLEVBQUUsQ0FBQztNQUNwRCxJQUFJNWIsQ0FBQyxHQUFXMUMsQ0FBQyxDQUFDMkwsS0FBSyxDQUFDNFMsU0FBUyxHQUFHLFdBQVcsQ0FBQztNQUVoRCxJQUFJLENBQUM5UixRQUFRLENBQUNwQyxPQUFPLENBQUMzSCxDQUFDLENBQUM7TUFFeEIsSUFBSUEsQ0FBQyxDQUFDa0osa0JBQWtCLEVBQUUsRUFBRTtNQUU1QixJQUFJLENBQUM4UixPQUFPLEdBQUdZLEtBQUs7TUFDcEIsSUFBSSxDQUFDWCxLQUFLLEdBQUdXLEtBQUssSUFBSSxRQUFRLEdBQUcsSUFBSSxDQUFDRCxlQUFlLEVBQUUsR0FBRyxJQUFJO01BRTlELElBQUksQ0FBQzVSLFFBQVEsQ0FDVnBKLFdBQVcsQ0FBQ2thLEtBQUssQ0FBQ00sS0FBSyxDQUFDLENBQ3hCaGEsUUFBUSxDQUFDMGEsU0FBUyxDQUFDLENBQ25CbFUsT0FBTyxDQUFDa1UsU0FBUyxDQUFDOVMsT0FBTyxDQUFDLE9BQU8sRUFBRSxTQUFTLENBQUMsR0FBRyxXQUFXLENBQUM7SUFDakU7SUFFQSxJQUFJNlMsS0FBSyxJQUFJLFFBQVEsRUFBRTtNQUNyQixJQUFJLENBQUM3UixRQUFRLENBQUN5TSxNQUFNLENBQUM7UUFDbkJaLEdBQUcsRUFBRXJFLFlBQVksR0FBR2xQLE1BQU0sR0FBR2daO01BQy9CLENBQUMsQ0FBQztJQUNKO0VBQ0YsQ0FBQzs7RUFHRDtFQUNBOztFQUVBLFNBQVMvUixNQUFNLENBQUNDLE1BQU0sRUFBRTtJQUN0QixPQUFPLElBQUksQ0FBQzNJLElBQUksQ0FBQyxZQUFZO01BQzNCLElBQUlVLEtBQUssR0FBS2hFLENBQUMsQ0FBQyxJQUFJLENBQUM7TUFDckIsSUFBSThILElBQUksR0FBTTlELEtBQUssQ0FBQzhELElBQUksQ0FBQyxVQUFVLENBQUM7TUFDcEMsSUFBSTVILE9BQU8sR0FBRyxRQUFPK0wsTUFBTSxLQUFJLFFBQVEsSUFBSUEsTUFBTTtNQUVqRCxJQUFJLENBQUNuRSxJQUFJLEVBQUU5RCxLQUFLLENBQUM4RCxJQUFJLENBQUMsVUFBVSxFQUFHQSxJQUFJLEdBQUcsSUFBSXlWLEtBQUssQ0FBQyxJQUFJLEVBQUVyZCxPQUFPLENBQUMsQ0FBRTtNQUNwRSxJQUFJLE9BQU8rTCxNQUFNLElBQUksUUFBUSxFQUFFbkUsSUFBSSxDQUFDbUUsTUFBTSxDQUFDLEVBQUU7SUFDL0MsQ0FBQyxDQUFDO0VBQ0o7RUFFQSxJQUFJRSxHQUFHLEdBQUduTSxDQUFDLENBQUM0RSxFQUFFLENBQUMwWixLQUFLO0VBRXBCdGUsQ0FBQyxDQUFDNEUsRUFBRSxDQUFDMFosS0FBSyxHQUFldFMsTUFBTTtFQUMvQmhNLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzBaLEtBQUssQ0FBQ2pTLFdBQVcsR0FBR2tSLEtBQUs7O0VBRzlCO0VBQ0E7O0VBRUF2ZCxDQUFDLENBQUM0RSxFQUFFLENBQUMwWixLQUFLLENBQUNoUyxVQUFVLEdBQUcsWUFBWTtJQUNsQ3RNLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzBaLEtBQUssR0FBR25TLEdBQUc7SUFDaEIsT0FBTyxJQUFJO0VBQ2IsQ0FBQzs7RUFHRDtFQUNBOztFQUVBbk0sQ0FBQyxDQUFDd0MsTUFBTSxDQUFDLENBQUN1QixFQUFFLENBQUMsTUFBTSxFQUFFLFlBQVk7SUFDL0IvRCxDQUFDLENBQUMsb0JBQW9CLENBQUMsQ0FBQ3NELElBQUksQ0FBQyxZQUFZO01BQ3ZDLElBQUkyWixJQUFJLEdBQUdqZCxDQUFDLENBQUMsSUFBSSxDQUFDO01BQ2xCLElBQUk4SCxJQUFJLEdBQUdtVixJQUFJLENBQUNuVixJQUFJLEVBQUU7TUFFdEJBLElBQUksQ0FBQ29SLE1BQU0sR0FBR3BSLElBQUksQ0FBQ29SLE1BQU0sSUFBSSxDQUFDLENBQUM7TUFFL0IsSUFBSXBSLElBQUksQ0FBQ2lXLFlBQVksSUFBSSxJQUFJLEVBQUVqVyxJQUFJLENBQUNvUixNQUFNLENBQUNMLE1BQU0sR0FBRy9RLElBQUksQ0FBQ2lXLFlBQVk7TUFDckUsSUFBSWpXLElBQUksQ0FBQ2xDLFNBQVMsSUFBTyxJQUFJLEVBQUVrQyxJQUFJLENBQUNvUixNQUFNLENBQUNaLEdBQUcsR0FBTXhRLElBQUksQ0FBQ2xDLFNBQVM7TUFFbEVvRyxNQUFNLENBQUNFLElBQUksQ0FBQytRLElBQUksRUFBRW5WLElBQUksQ0FBQztJQUN6QixDQUFDLENBQUM7RUFDSixDQUFDLENBQUM7QUFFSixDQUFDLENBQUNoSSxNQUFNLENBQUM7Ozs7Ozs7Ozs7OztBQ3B5RVIsV0FBVUUsQ0FBQyxFQUFFO0VBQ05BLENBQUMsQ0FBQzRFLEVBQUUsQ0FBQzRaLFVBQVUsR0FBRyxZQUFZO0lBQzFCLElBQUlDLEdBQUcsR0FBRyxJQUFJO0lBQ2QsSUFBSSxJQUFJLENBQUN0YixNQUFNLEdBQUcsQ0FBQyxFQUFFO01BQzdCbkQsQ0FBQyxDQUFDLE1BQU0sQ0FBQyxDQUFDb1YsTUFBTSxDQUFDLHVNQUF1TSxHQUN4Tix3RUFBd0UsR0FDeEUsaUJBQWlCLEdBQ0wsaUJBQWlCLEdBQzdCLHlCQUF5QixHQUN6Qix3QkFBd0IsR0FDeEIsUUFBUSxDQUFDO01BQ0dxSixHQUFHLEdBQUcsS0FBSztJQUNmO0lBQ0F6ZSxDQUFDLENBQUMsZUFBZSxDQUFDLENBQUN5QyxLQUFLLENBQUMsWUFBWTtNQUNqQ3pDLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQytMLE1BQU0sRUFBRTtNQUNoQi9MLENBQUMsQ0FBQyxlQUFlLENBQUMsQ0FBQytMLE1BQU0sRUFBRTtJQUMvQixDQUFDLENBQUM7SUFDRixJQUFJMlMsWUFBWSxHQUFJLFlBQVk7TUFDNUIsSUFBSW5iLENBQUMsR0FBRyxDQUFDO01BQ1QsSUFBSW9iLEdBQUcsR0FBRyx1Q0FBdUM7UUFDN0MzSSxRQUFRLEdBQUcsb2RBQW9kO1FBQzdkNEksTUFBTSxHQUFHLFNBQVRBLE1BQU0sQ0FBYUMsQ0FBQyxFQUFFO1VBQ3BCLE9BQU9yYyxNQUFNLENBQUNzYyxJQUFJLENBQUNDLFFBQVEsQ0FBQ0Msa0JBQWtCLENBQUNILENBQUMsQ0FBQyxDQUFDLENBQUM7UUFDdkQsQ0FBQztRQUNDSSxNQUFNLEdBQUcsU0FBVEEsTUFBTSxDQUFhSixDQUFDLEVBQUVLLENBQUMsRUFBRTtVQUN2QixPQUFPTCxDQUFDLENBQUNwVCxPQUFPLENBQUMsVUFBVSxFQUFFLFVBQVUwVCxDQUFDLEVBQUVDLENBQUMsRUFBRTtZQUN6QyxPQUFPRixDQUFDLENBQUNFLENBQUMsQ0FBQztVQUNmLENBQUMsQ0FBQztRQUNOLENBQUM7TUFDTCxPQUFPLFVBQVVDLEtBQUssRUFBRXRWLElBQUksRUFBRTtRQUMxQixJQUFJLENBQUNzVixLQUFLLENBQUNDLFFBQVEsRUFBRUQsS0FBSztRQUMxQixJQUFJRSxHQUFHLEdBQUc7VUFBQ0MsU0FBUyxFQUFFelYsSUFBSSxJQUFJLFdBQVc7VUFBRXNWLEtBQUssRUFBRUEsS0FBSyxDQUFDSTtRQUFTLENBQUM7UUFDbEUsSUFBSWhCLEdBQUcsRUFBRTtVQUNMamMsTUFBTSxDQUFDa2QsUUFBUSxDQUFDclAsSUFBSSxHQUFHc08sR0FBRyxHQUFHQyxNQUFNLENBQUNLLE1BQU0sQ0FBQ2pKLFFBQVEsRUFBRXVKLEdBQUcsQ0FBQyxDQUFDO1FBQzlELENBQUMsTUFBTTtVQUNIaGMsQ0FBQyxFQUFFO1VBQ0gsSUFBSW9jLEVBQUUsR0FBR2hCLEdBQUcsR0FBR0MsTUFBTSxDQUFDSyxNQUFNLENBQUNqSixRQUFRLEVBQUV1SixHQUFHLENBQUMsQ0FBQztVQUM1Q3ZmLENBQUMsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDb1YsTUFBTSxDQUFDLHVFQUF1RSxHQUM5RixlQUFlLEdBQ2YscUJBQXFCLEdBQ3JCLHFCQUFxQixHQUNyQix3QkFBd0IsR0FDeEIscUNBQXFDLEdBQ3JDLHlCQUF5QixHQUFDdUssRUFBRSxHQUFDLDJCQUEyQixHQUFDcGMsQ0FBQyxHQUFDLE9BQU8sQ0FBQztRQUMzRTtNQUNKLENBQUM7SUFDTCxDQUFDLEVBQUc7SUFFSixPQUFPLElBQUksQ0FBQ0QsSUFBSSxDQUFDLFlBQVk7TUFDekJvYixZQUFZLENBQUMsSUFBSSxFQUFFLG1CQUFtQixDQUFDO0lBQzNDLENBQUMsQ0FBQztFQUNOLENBQUM7QUFFTCxDQUFDLEVBQUM1ZSxNQUFNLENBQUM7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ3JEYjtBQUNBLENBQUMsVUFBUzhmLENBQUMsRUFBQztFQUFDLEtBQXFDLEdBQUNDLGlDQUFPLENBQUMseUVBQVEsQ0FBQyxvQ0FBQ0QsQ0FBQztBQUFBO0FBQUE7QUFBQSxrR0FBQyxHQUFDLENBQStLO0FBQUEsQ0FBQyxDQUFDLFVBQVNLLENBQUMsRUFBQztFQUFDLElBQUl2ZCxDQUFDO0lBQUNrZCxDQUFDO0lBQUNmLENBQUM7SUFBQ08sQ0FBQztJQUFDZSxDQUFDO0lBQUN0RixFQUFDO0lBQUN1RixDQUFDO0lBQUNDLENBQUM7SUFBQ0MsQ0FBQztJQUFDbkIsQ0FBQztJQUFDb0IsQ0FBQztJQUFDQyxDQUFDO0lBQUNqZCxDQUFDO0lBQUNtWixDQUFDO0lBQUMrRCxDQUFDO0lBQUM1QixDQUFDLElBQUUsQ0FBQzZCLENBQUMsR0FBQ1QsQ0FBQyxJQUFFQSxDQUFDLENBQUNyYixFQUFFLElBQUVxYixDQUFDLENBQUNyYixFQUFFLENBQUMrYixPQUFPLElBQUVWLENBQUMsQ0FBQ3JiLEVBQUUsQ0FBQytiLE9BQU8sQ0FBQ2IsR0FBRyxHQUFDRyxDQUFDLENBQUNyYixFQUFFLENBQUMrYixPQUFPLENBQUNiLEdBQUcsR0FBQ1ksQ0FBQyxLQUFHQSxDQUFDLENBQUNFLFNBQVMsS0FBR0YsQ0FBQyxHQUFDZCxDQUFDLEdBQUNjLENBQUMsR0FBQ0EsQ0FBQyxHQUFDLENBQUMsQ0FBQyxFQUFDSixDQUFDLEdBQUMsQ0FBQyxDQUFDLEVBQUNuQixDQUFDLEdBQUMsQ0FBQyxDQUFDLEVBQUNvQixDQUFDLEdBQUMsQ0FBQyxDQUFDLEVBQUNDLENBQUMsR0FBQyxDQUFDLENBQUMsRUFBQ2pkLENBQUMsR0FBQ3NkLE1BQU0sQ0FBQ3ZWLFNBQVMsQ0FBQ3dWLGNBQWMsRUFBQ3BFLENBQUMsR0FBQyxFQUFFLENBQUNxRSxLQUFLLEVBQUNOLENBQUMsR0FBQyxPQUFPLEVBQUNMLENBQUMsR0FBQyxXQUFTMWQsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDO01BQUMsSUFBSUwsQ0FBQztRQUFDZixDQUFDO1FBQUN0YixDQUFDLEdBQUMyYixDQUFDLENBQUN4YyxDQUFDLENBQUM7UUFBQ3lkLENBQUMsR0FBQzVjLENBQUMsQ0FBQyxDQUFDLENBQUM7UUFBQzBjLENBQUMsR0FBQ0EsQ0FBQyxDQUFDLENBQUMsQ0FBQztNQUFDLE9BQU92ZCxDQUFDLEdBQUNhLENBQUMsQ0FBQyxDQUFDLENBQUMsRUFBQzRjLENBQUMsS0FBR1AsQ0FBQyxHQUFDb0IsQ0FBQyxDQUFDYixDQUFDLEdBQUNjLENBQUMsQ0FBQ2QsQ0FBQyxFQUFDRixDQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUNFLENBQUMsR0FBQ3pkLENBQUMsR0FBQ2tkLENBQUMsSUFBRUEsQ0FBQyxDQUFDc0IsU0FBUyxHQUFDdEIsQ0FBQyxDQUFDc0IsU0FBUyxDQUFDeGUsQ0FBQyxHQUFFbWMsQ0FBQyxHQUFDb0IsQ0FBQyxFQUFDLFVBQVN2ZCxDQUFDLEVBQUM7UUFBQyxPQUFPdWUsQ0FBQyxDQUFDdmUsQ0FBQyxFQUFDbWMsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFFLEdBQUNvQyxDQUFDLENBQUN2ZSxDQUFDLEVBQUN1ZCxDQUFDLENBQUMsSUFBRUUsQ0FBQyxHQUFDLENBQUM1YyxDQUFDLEdBQUMyYixDQUFDLENBQUN4YyxDQUFDLEdBQUN1ZSxDQUFDLENBQUN2ZSxDQUFDLEVBQUN1ZCxDQUFDLENBQUMsQ0FBQyxFQUFFLENBQUMsQ0FBQyxFQUFDdmQsQ0FBQyxHQUFDYSxDQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUM0YyxDQUFDLEtBQUdQLENBQUMsR0FBQ29CLENBQUMsQ0FBQ2IsQ0FBQyxDQUFDLENBQUMsQ0FBQyxFQUFDO1FBQUNFLENBQUMsRUFBQ0YsQ0FBQyxHQUFDQSxDQUFDLEdBQUMsR0FBRyxHQUFDemQsQ0FBQyxHQUFDQSxDQUFDO1FBQUNrZCxDQUFDLEVBQUNsZCxDQUFDO1FBQUN5ZSxFQUFFLEVBQUNoQixDQUFDO1FBQUNmLENBQUMsRUFBQ1E7TUFBQyxDQUFDO0lBQUEsQ0FBQyxFQUFDUyxDQUFDLEdBQUM7TUFBQ0gsT0FBTyxFQUFDLGlCQUFTeGQsQ0FBQyxFQUFDO1FBQUMsT0FBTzBlLENBQUMsQ0FBQzFlLENBQUMsQ0FBQztNQUFBLENBQUM7TUFBQ3NkLE9BQU8sRUFBQyxpQkFBU3RkLENBQUMsRUFBQztRQUFDLElBQUl1ZCxDQUFDLEdBQUNLLENBQUMsQ0FBQzVkLENBQUMsQ0FBQztRQUFDLE9BQU8sS0FBSyxDQUFDLEtBQUd1ZCxDQUFDLEdBQUNBLENBQUMsR0FBQ0ssQ0FBQyxDQUFDNWQsQ0FBQyxDQUFDLEdBQUMsQ0FBQyxDQUFDO01BQUEsQ0FBQztNQUFDcWQsTUFBTSxFQUFDLGdCQUFTcmQsQ0FBQyxFQUFDO1FBQUMsT0FBTTtVQUFDZ08sRUFBRSxFQUFDaE8sQ0FBQztVQUFDaWMsR0FBRyxFQUFDLEVBQUU7VUFBQ3FCLE9BQU8sRUFBQ00sQ0FBQyxDQUFDNWQsQ0FBQyxDQUFDO1VBQUMyZSxNQUFNLEdBQUVwQixDQUFDLEdBQUN2ZCxDQUFDLEVBQUMsWUFBVTtZQUFDLE9BQU82ZCxDQUFDLElBQUVBLENBQUMsQ0FBQ2MsTUFBTSxJQUFFZCxDQUFDLENBQUNjLE1BQU0sQ0FBQ3BCLENBQUMsQ0FBQyxJQUFFLENBQUMsQ0FBQztVQUFBLENBQUM7UUFBQyxDQUFDO1FBQUMsSUFBSUEsQ0FBQztNQUFBO0lBQUMsQ0FBQyxFQUFDRSxDQUFDLEdBQUMsV0FBU3pkLENBQUMsRUFBQ3VkLENBQUMsRUFBQ0wsQ0FBQyxFQUFDZixDQUFDLEVBQUM7TUFBQyxJQUFJdGIsQ0FBQztRQUFDNGMsQ0FBQztRQUFDdEYsQ0FBQztRQUFDNkIsQ0FBQztRQUFDdUUsQ0FBQztRQUFDL0IsQ0FBQyxHQUFDLEVBQUU7UUFBQ3dCLENBQUMsV0FBUWQsQ0FBQztRQUFDNVMsQ0FBQyxHQUFDc1UsQ0FBQyxDQUFDekMsQ0FBQyxHQUFDQSxDQUFDLElBQUVuYyxDQUFDLENBQUM7TUFBQyxJQUFHLFdBQVcsSUFBRWdlLENBQUMsSUFBRSxVQUFVLElBQUVBLENBQUMsRUFBQztRQUFDLEtBQUlULENBQUMsR0FBQyxDQUFDQSxDQUFDLENBQUM5YyxNQUFNLElBQUV5YyxDQUFDLENBQUN6YyxNQUFNLEdBQUMsQ0FBQyxTQUFTLEVBQUMsU0FBUyxFQUFDLFFBQVEsQ0FBQyxHQUFDOGMsQ0FBQyxFQUFDdkQsQ0FBQyxHQUFDLENBQUMsRUFBQ0EsQ0FBQyxHQUFDdUQsQ0FBQyxDQUFDOWMsTUFBTSxFQUFDdVosQ0FBQyxJQUFFLENBQUMsRUFBQyxJQUFHLFNBQVMsTUFBSXlELENBQUMsR0FBQyxDQUFDdEYsQ0FBQyxHQUFDdUYsQ0FBQyxDQUFDSCxDQUFDLENBQUN2RCxDQUFDLENBQUMsRUFBQzFQLENBQUMsQ0FBQyxFQUFFcVQsQ0FBQyxDQUFDLEVBQUNuQixDQUFDLENBQUN4QyxDQUFDLENBQUMsR0FBQzJELENBQUMsQ0FBQ0gsT0FBTyxDQUFDeGQsQ0FBQyxDQUFDLENBQUMsS0FBSyxJQUFHLFNBQVMsS0FBR3lkLENBQUMsRUFBQ2pCLENBQUMsQ0FBQ3hDLENBQUMsQ0FBQyxHQUFDMkQsQ0FBQyxDQUFDTCxPQUFPLENBQUN0ZCxDQUFDLENBQUMsRUFBQ3VlLENBQUMsR0FBQyxDQUFDLENBQUMsQ0FBQyxLQUFLLElBQUcsUUFBUSxLQUFHZCxDQUFDLEVBQUM1YyxDQUFDLEdBQUMyYixDQUFDLENBQUN4QyxDQUFDLENBQUMsR0FBQzJELENBQUMsQ0FBQ04sTUFBTSxDQUFDcmQsQ0FBQyxDQUFDLENBQUMsS0FBSyxJQUFHaWEsQ0FBQyxDQUFDMkQsQ0FBQyxFQUFDSCxDQUFDLENBQUMsSUFBRXhELENBQUMsQ0FBQ3dDLENBQUMsRUFBQ2dCLENBQUMsQ0FBQyxJQUFFeEQsQ0FBQyxDQUFDNkQsQ0FBQyxFQUFDTCxDQUFDLENBQUMsRUFBQ2pCLENBQUMsQ0FBQ3hDLENBQUMsQ0FBQyxHQUFDc0UsQ0FBQyxDQUFDYixDQUFDLENBQUMsQ0FBQyxLQUFJO1VBQUMsSUFBRyxDQUFDdEYsQ0FBQyxDQUFDdUUsQ0FBQyxFQUFDLE1BQU0sSUFBSXJmLEtBQUssQ0FBQzJDLENBQUMsR0FBQyxXQUFXLEdBQUN5ZCxDQUFDLENBQUM7VUFBQ3RGLENBQUMsQ0FBQ3VFLENBQUMsQ0FBQ3pNLElBQUksQ0FBQ2tJLENBQUMsQ0FBQytFLENBQUMsRUFBQ3dCLENBQUMsQ0FBQ3ZDLENBQUMsRUFBQyxDQUFDLENBQUMsQ0FBQyxFQUFDLFVBQVNvQixDQUFDLEVBQUM7WUFBQyxPQUFPLFVBQVN2ZCxDQUFDLEVBQUM7Y0FBQzRkLENBQUMsQ0FBQ0wsQ0FBQyxDQUFDLEdBQUN2ZCxDQUFDO1lBQUEsQ0FBQztVQUFBLENBQUMsQ0FBQ3lkLENBQUMsQ0FBQyxFQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUNqQixDQUFDLENBQUN4QyxDQUFDLENBQUMsR0FBQzRELENBQUMsQ0FBQ0gsQ0FBQyxDQUFDO1FBQUE7UUFBQ08sQ0FBQyxHQUFDZCxDQUFDLEdBQUNBLENBQUMsQ0FBQzdVLEtBQUssQ0FBQ3VWLENBQUMsQ0FBQzVkLENBQUMsQ0FBQyxFQUFDd2MsQ0FBQyxDQUFDLEdBQUMsS0FBSyxDQUFDLEVBQUN4YyxDQUFDLEtBQUdhLENBQUMsSUFBRUEsQ0FBQyxDQUFDeWMsT0FBTyxLQUFHWixDQUFDLElBQUU3YixDQUFDLENBQUN5YyxPQUFPLEtBQUdNLENBQUMsQ0FBQzVkLENBQUMsQ0FBQyxHQUFDNGQsQ0FBQyxDQUFDNWQsQ0FBQyxDQUFDLEdBQUNhLENBQUMsQ0FBQ3ljLE9BQU8sR0FBQ1UsQ0FBQyxLQUFHdEIsQ0FBQyxJQUFFNkIsQ0FBQyxLQUFHWCxDQUFDLENBQUM1ZCxDQUFDLENBQUMsR0FBQ2dlLENBQUMsQ0FBQyxDQUFDO01BQUEsQ0FBQyxNQUFLaGUsQ0FBQyxLQUFHNGQsQ0FBQyxDQUFDNWQsQ0FBQyxDQUFDLEdBQUNrZCxDQUFDLENBQUM7SUFBQSxDQUFDLEVBQUNsZCxDQUFDLEdBQUNrZCxDQUFDLEdBQUMvRSxFQUFDLEdBQUMsV0FBU25ZLENBQUMsRUFBQ3VkLENBQUMsRUFBQ0wsQ0FBQyxFQUFDZixDQUFDLEVBQUN0YixDQUFDLEVBQUM7TUFBQyxJQUFHLFFBQVEsSUFBRSxPQUFPYixDQUFDLEVBQUMsT0FBTzJkLENBQUMsQ0FBQzNkLENBQUMsQ0FBQyxHQUFDMmQsQ0FBQyxDQUFDM2QsQ0FBQyxDQUFDLENBQUN1ZCxDQUFDLENBQUMsR0FBQ2UsQ0FBQyxDQUFDWixDQUFDLENBQUMxZCxDQUFDLEVBQUM0ZSxDQUFDLENBQUNyQixDQUFDLENBQUMsQ0FBQyxDQUFDSSxDQUFDLENBQUM7TUFBQyxJQUFHLENBQUMzZCxDQUFDLENBQUM2ZSxNQUFNLEVBQUM7UUFBQyxJQUFHLENBQUNoQixDQUFDLEdBQUM3ZCxDQUFDLEVBQUU4ZSxJQUFJLElBQUUzRyxFQUFDLENBQUMwRixDQUFDLENBQUNpQixJQUFJLEVBQUNqQixDQUFDLENBQUNyWSxRQUFRLENBQUMsRUFBQyxDQUFDK1gsQ0FBQyxFQUFDO1FBQU9BLENBQUMsQ0FBQ3NCLE1BQU0sSUFBRTdlLENBQUMsR0FBQ3VkLENBQUMsRUFBQ0EsQ0FBQyxHQUFDTCxDQUFDLEVBQUNBLENBQUMsR0FBQyxJQUFJLElBQUVsZCxDQUFDLEdBQUMwYyxDQUFDO01BQUE7TUFBQyxPQUFPYSxDQUFDLEdBQUNBLENBQUMsSUFBRSxZQUFVLENBQUMsQ0FBQyxFQUFDLFVBQVUsSUFBRSxPQUFPTCxDQUFDLEtBQUdBLENBQUMsR0FBQ2YsQ0FBQyxFQUFDQSxDQUFDLEdBQUN0YixDQUFDLENBQUMsRUFBQ3NiLENBQUMsR0FBQ3NCLENBQUMsQ0FBQ2YsQ0FBQyxFQUFDMWMsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDTCxDQUFDLENBQUMsR0FBQ3hXLFVBQVUsQ0FBQyxZQUFVO1FBQUMrVyxDQUFDLENBQUNmLENBQUMsRUFBQzFjLENBQUMsRUFBQ3VkLENBQUMsRUFBQ0wsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDLENBQUMsQ0FBQyxFQUFDL0UsRUFBQztJQUFBLENBQUMsRUFBQ0EsRUFBQyxDQUFDd0csTUFBTSxHQUFDLFVBQVMzZSxDQUFDLEVBQUM7TUFBQyxPQUFPbVksRUFBQyxDQUFDblksQ0FBQyxDQUFDO0lBQUEsQ0FBQyxFQUFDQSxDQUFDLENBQUMrZSxRQUFRLEdBQUNuQixDQUFDLEVBQUMsQ0FBQ3pCLENBQUMsR0FBQyxXQUFTbmMsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDTCxDQUFDLEVBQUM7TUFBQyxJQUFHLFFBQVEsSUFBRSxPQUFPbGQsQ0FBQyxFQUFDLE1BQU0sSUFBSTNDLEtBQUssQ0FBQywyREFBMkQsQ0FBQztNQUFDa2dCLENBQUMsQ0FBQ3NCLE1BQU0sS0FBRzNCLENBQUMsR0FBQ0ssQ0FBQyxFQUFDQSxDQUFDLEdBQUMsRUFBRSxDQUFDLEVBQUN0RCxDQUFDLENBQUMyRCxDQUFDLEVBQUM1ZCxDQUFDLENBQUMsSUFBRWlhLENBQUMsQ0FBQ3dDLENBQUMsRUFBQ3pjLENBQUMsQ0FBQyxLQUFHeWMsQ0FBQyxDQUFDemMsQ0FBQyxDQUFDLEdBQUMsQ0FBQ0EsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDTCxDQUFDLENBQUMsQ0FBQztJQUFBLENBQUMsRUFBRUUsR0FBRyxHQUFDO01BQUNoZ0IsTUFBTSxFQUFDLENBQUM7SUFBQyxDQUFDLEVBQUM0Z0IsQ0FBQyxDQUFDRSxTQUFTLEdBQUNsZSxDQUFDLEVBQUNnZSxDQUFDLENBQUNSLE9BQU8sR0FBQ04sQ0FBQyxFQUFDYyxDQUFDLENBQUNiLE1BQU0sR0FBQ2hCLENBQUMsQ0FBQyxFQUFDNkIsQ0FBQyxDQUFDYixNQUFNLENBQUMsUUFBUSxFQUFDLFlBQVUsQ0FBQyxDQUFDLENBQUMsRUFBQ2EsQ0FBQyxDQUFDYixNQUFNLENBQUMsUUFBUSxFQUFDLEVBQUUsRUFBQyxZQUFVO01BQUMsSUFBSW5kLENBQUMsR0FBQ3VkLENBQUMsSUFBRWpnQixDQUFDO01BQUMsT0FBTyxJQUFJLElBQUUwQyxDQUFDLElBQUVnZixPQUFPLElBQUVBLE9BQU8sQ0FBQ0MsS0FBSyxJQUFFRCxPQUFPLENBQUNDLEtBQUssQ0FBQyx1SkFBdUosQ0FBQyxFQUFDamYsQ0FBQztJQUFBLENBQUMsQ0FBQyxFQUFDZ2UsQ0FBQyxDQUFDYixNQUFNLENBQUMsZUFBZSxFQUFDLENBQUMsUUFBUSxDQUFDLEVBQUMsVUFBU00sQ0FBQyxFQUFDO01BQUMsSUFBSXRCLENBQUMsR0FBQyxDQUFDLENBQUM7TUFBQyxTQUFTSyxDQUFDLENBQUN4YyxDQUFDLEVBQUM7UUFBQyxJQUFJdWQsQ0FBQztVQUFDTCxDQUFDLEdBQUNsZCxDQUFDLENBQUM0SSxTQUFTO1VBQUN1VCxDQUFDLEdBQUMsRUFBRTtRQUFDLEtBQUlvQixDQUFDLElBQUlMLENBQUMsRUFBQyxVQUFVLElBQUUsT0FBT0EsQ0FBQyxDQUFDSyxDQUFDLENBQUMsSUFBRSxhQUFhLEtBQUdBLENBQUMsSUFBRXBCLENBQUMsQ0FBQ2pDLElBQUksQ0FBQ3FELENBQUMsQ0FBQztRQUFDLE9BQU9wQixDQUFDO01BQUE7TUFBQ0EsQ0FBQyxDQUFDK0MsTUFBTSxHQUFDLFVBQVNsZixDQUFDLEVBQUN1ZCxDQUFDLEVBQUM7UUFBQyxJQUFJTCxDQUFDO1VBQUNmLENBQUMsR0FBQyxDQUFDLENBQUMsQ0FBQ2lDLGNBQWM7UUFBQyxTQUFTdmQsQ0FBQyxHQUFFO1VBQUMsSUFBSSxDQUFDbVQsV0FBVyxHQUFDaFUsQ0FBQztRQUFBO1FBQUMsS0FBSWtkLENBQUMsSUFBSUssQ0FBQyxFQUFDcEIsQ0FBQyxDQUFDM1MsSUFBSSxDQUFDK1QsQ0FBQyxFQUFDTCxDQUFDLENBQUMsS0FBR2xkLENBQUMsQ0FBQ2tkLENBQUMsQ0FBQyxHQUFDSyxDQUFDLENBQUNMLENBQUMsQ0FBQyxDQUFDO1FBQUMsT0FBT3JjLENBQUMsQ0FBQytILFNBQVMsR0FBQzJVLENBQUMsQ0FBQzNVLFNBQVMsRUFBQzVJLENBQUMsQ0FBQzRJLFNBQVMsR0FBQyxJQUFJL0gsQ0FBQyxJQUFDYixDQUFDLENBQUNtZixTQUFTLEdBQUM1QixDQUFDLENBQUMzVSxTQUFTLEVBQUM1SSxDQUFDO01BQUEsQ0FBQyxFQUFDbWMsQ0FBQyxDQUFDaUQsUUFBUSxHQUFDLFVBQVNqRCxDQUFDLEVBQUN0YixDQUFDLEVBQUM7UUFBQyxJQUFJYixDQUFDLEdBQUN3YyxDQUFDLENBQUMzYixDQUFDLENBQUM7VUFBQzBjLENBQUMsR0FBQ2YsQ0FBQyxDQUFDTCxDQUFDLENBQUM7UUFBQyxTQUFTc0IsQ0FBQyxHQUFFO1VBQUMsSUFBSXpkLENBQUMsR0FBQ3FmLEtBQUssQ0FBQ3pXLFNBQVMsQ0FBQzBXLE9BQU87WUFBQy9CLENBQUMsR0FBQzFjLENBQUMsQ0FBQytILFNBQVMsQ0FBQ29MLFdBQVcsQ0FBQ3ZULE1BQU07WUFBQ3ljLENBQUMsR0FBQ2YsQ0FBQyxDQUFDdlQsU0FBUyxDQUFDb0wsV0FBVztVQUFDLENBQUMsR0FBQ3VKLENBQUMsS0FBR3ZkLENBQUMsQ0FBQ3dKLElBQUksQ0FBQ2xCLFNBQVMsRUFBQzZULENBQUMsQ0FBQ3ZULFNBQVMsQ0FBQ29MLFdBQVcsQ0FBQyxFQUFDa0osQ0FBQyxHQUFDcmMsQ0FBQyxDQUFDK0gsU0FBUyxDQUFDb0wsV0FBVyxDQUFDLEVBQUNrSixDQUFDLENBQUM3VSxLQUFLLENBQUMsSUFBSSxFQUFDQyxTQUFTLENBQUM7UUFBQTtRQUFDekgsQ0FBQyxDQUFDMGUsV0FBVyxHQUFDcEQsQ0FBQyxDQUFDb0QsV0FBVyxFQUFDOUIsQ0FBQyxDQUFDN1UsU0FBUyxHQUFDLElBQUksWUFBVTtVQUFDLElBQUksQ0FBQ29MLFdBQVcsR0FBQ3lKLENBQUM7UUFBQSxDQUFDO1FBQUMsS0FBSSxJQUFJUCxDQUFDLEdBQUMsQ0FBQyxFQUFDQSxDQUFDLEdBQUNLLENBQUMsQ0FBQzljLE1BQU0sRUFBQ3ljLENBQUMsRUFBRSxFQUFDO1VBQUMsSUFBSS9FLENBQUMsR0FBQ29GLENBQUMsQ0FBQ0wsQ0FBQyxDQUFDO1VBQUNPLENBQUMsQ0FBQzdVLFNBQVMsQ0FBQ3VQLENBQUMsQ0FBQyxHQUFDZ0UsQ0FBQyxDQUFDdlQsU0FBUyxDQUFDdVAsQ0FBQyxDQUFDO1FBQUE7UUFBQyxLQUFJLElBQUk2QixDQUFDLEdBQUMsQ0FBQyxFQUFDQSxDQUFDLEdBQUNoYSxDQUFDLENBQUNTLE1BQU0sRUFBQ3VaLENBQUMsRUFBRSxFQUFDO1VBQUMsSUFBSXVFLENBQUMsR0FBQ3ZlLENBQUMsQ0FBQ2dhLENBQUMsQ0FBQztVQUFDeUQsQ0FBQyxDQUFDN1UsU0FBUyxDQUFDMlYsQ0FBQyxDQUFDLEdBQUMsVUFBU3ZlLENBQUMsRUFBQztZQUFDLElBQUl1ZCxDQUFDLEdBQUMsYUFBVSxDQUFDLENBQUM7WUFBQ3ZkLENBQUMsSUFBSXlkLENBQUMsQ0FBQzdVLFNBQVMsS0FBRzJVLENBQUMsR0FBQ0UsQ0FBQyxDQUFDN1UsU0FBUyxDQUFDNUksQ0FBQyxDQUFDLENBQUM7WUFBQyxJQUFJa2QsQ0FBQyxHQUFDcmMsQ0FBQyxDQUFDK0gsU0FBUyxDQUFDNUksQ0FBQyxDQUFDO1lBQUMsT0FBTyxZQUFVO2NBQUMsT0FBT3FmLEtBQUssQ0FBQ3pXLFNBQVMsQ0FBQzBXLE9BQU8sQ0FBQzlWLElBQUksQ0FBQ2xCLFNBQVMsRUFBQ2lWLENBQUMsQ0FBQyxFQUFDTCxDQUFDLENBQUM3VSxLQUFLLENBQUMsSUFBSSxFQUFDQyxTQUFTLENBQUM7WUFBQSxDQUFDO1VBQUEsQ0FBQyxDQUFDaVcsQ0FBQyxDQUFDO1FBQUE7UUFBQyxPQUFPZCxDQUFDO01BQUEsQ0FBQztNQUFDLFNBQVN6ZCxDQUFDLEdBQUU7UUFBQyxJQUFJLENBQUN3ZixTQUFTLEdBQUMsQ0FBQyxDQUFDO01BQUE7TUFBQ3hmLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQ3ZILEVBQUUsR0FBQyxVQUFTckIsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDO1FBQUMsSUFBSSxDQUFDaUMsU0FBUyxHQUFDLElBQUksQ0FBQ0EsU0FBUyxJQUFFLENBQUMsQ0FBQyxFQUFDeGYsQ0FBQyxJQUFJLElBQUksQ0FBQ3dmLFNBQVMsR0FBQyxJQUFJLENBQUNBLFNBQVMsQ0FBQ3hmLENBQUMsQ0FBQyxDQUFDa2EsSUFBSSxDQUFDcUQsQ0FBQyxDQUFDLEdBQUMsSUFBSSxDQUFDaUMsU0FBUyxDQUFDeGYsQ0FBQyxDQUFDLEdBQUMsQ0FBQ3VkLENBQUMsQ0FBQztNQUFBLENBQUMsRUFBQ3ZkLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQ2pCLE9BQU8sR0FBQyxVQUFTM0gsQ0FBQyxFQUFDO1FBQUMsSUFBSXVkLENBQUMsR0FBQzhCLEtBQUssQ0FBQ3pXLFNBQVMsQ0FBQ3lWLEtBQUs7VUFBQ25CLENBQUMsR0FBQ0ssQ0FBQyxDQUFDL1QsSUFBSSxDQUFDbEIsU0FBUyxFQUFDLENBQUMsQ0FBQztRQUFDLElBQUksQ0FBQ2tYLFNBQVMsR0FBQyxJQUFJLENBQUNBLFNBQVMsSUFBRSxDQUFDLENBQUMsRUFBQyxDQUFDLEtBQUcsQ0FBQ3RDLENBQUMsR0FBQyxJQUFJLElBQUVBLENBQUMsR0FBQyxFQUFFLEdBQUNBLENBQUMsRUFBRXpjLE1BQU0sSUFBRXljLENBQUMsQ0FBQ2hELElBQUksQ0FBQyxDQUFDLENBQUMsQ0FBQyxFQUFDLENBQUNnRCxDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUN1QyxLQUFLLEdBQUN6ZixDQUFDLEtBQUksSUFBSSxDQUFDd2YsU0FBUyxJQUFFLElBQUksQ0FBQ0UsTUFBTSxDQUFDLElBQUksQ0FBQ0YsU0FBUyxDQUFDeGYsQ0FBQyxDQUFDLEVBQUN1ZCxDQUFDLENBQUMvVCxJQUFJLENBQUNsQixTQUFTLEVBQUMsQ0FBQyxDQUFDLENBQUMsRUFBQyxHQUFHLElBQUcsSUFBSSxDQUFDa1gsU0FBUyxJQUFFLElBQUksQ0FBQ0UsTUFBTSxDQUFDLElBQUksQ0FBQ0YsU0FBUyxDQUFDLEdBQUcsQ0FBQyxFQUFDbFgsU0FBUyxDQUFDO01BQUEsQ0FBQyxFQUFDdEksQ0FBQyxDQUFDNEksU0FBUyxDQUFDOFcsTUFBTSxHQUFDLFVBQVMxZixDQUFDLEVBQUN1ZCxDQUFDLEVBQUM7UUFBQyxLQUFJLElBQUlMLENBQUMsR0FBQyxDQUFDLEVBQUNmLENBQUMsR0FBQ25jLENBQUMsQ0FBQ1MsTUFBTSxFQUFDeWMsQ0FBQyxHQUFDZixDQUFDLEVBQUNlLENBQUMsRUFBRSxFQUFDbGQsQ0FBQyxDQUFDa2QsQ0FBQyxDQUFDLENBQUM3VSxLQUFLLENBQUMsSUFBSSxFQUFDa1YsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDcEIsQ0FBQyxDQUFDd0QsVUFBVSxHQUFDM2YsQ0FBQyxFQUFDbWMsQ0FBQyxDQUFDeUQsYUFBYSxHQUFDLFVBQVM1ZixDQUFDLEVBQUM7UUFBQyxLQUFJLElBQUl1ZCxDQUFDLEdBQUMsRUFBRSxFQUFDTCxDQUFDLEdBQUMsQ0FBQyxFQUFDQSxDQUFDLEdBQUNsZCxDQUFDLEVBQUNrZCxDQUFDLEVBQUUsRUFBQ0ssQ0FBQyxJQUFFckwsSUFBSSxDQUFDMk4sS0FBSyxDQUFDLEVBQUUsR0FBQzNOLElBQUksQ0FBQ21HLE1BQU0sRUFBRSxDQUFDLENBQUN5SCxRQUFRLENBQUMsRUFBRSxDQUFDO1FBQUMsT0FBT3ZDLENBQUM7TUFBQSxDQUFDLEVBQUNwQixDQUFDLENBQUM0RCxJQUFJLEdBQUMsVUFBUy9mLENBQUMsRUFBQ3VkLENBQUMsRUFBQztRQUFDLE9BQU8sWUFBVTtVQUFDdmQsQ0FBQyxDQUFDcUksS0FBSyxDQUFDa1YsQ0FBQyxFQUFDalYsU0FBUyxDQUFDO1FBQUEsQ0FBQztNQUFBLENBQUMsRUFBQzZULENBQUMsQ0FBQzZELFlBQVksR0FBQyxVQUFTaGdCLENBQUMsRUFBQztRQUFDLEtBQUksSUFBSXVkLENBQUMsSUFBSXZkLENBQUMsRUFBQztVQUFDLElBQUlrZCxDQUFDLEdBQUNLLENBQUMsQ0FBQ3JKLEtBQUssQ0FBQyxHQUFHLENBQUM7WUFBQ2lJLENBQUMsR0FBQ25jLENBQUM7VUFBQyxJQUFHLENBQUMsS0FBR2tkLENBQUMsQ0FBQ3pjLE1BQU0sRUFBQztZQUFDLEtBQUksSUFBSUksQ0FBQyxHQUFDLENBQUMsRUFBQ0EsQ0FBQyxHQUFDcWMsQ0FBQyxDQUFDemMsTUFBTSxFQUFDSSxDQUFDLEVBQUUsRUFBQztjQUFDLElBQUk0YyxDQUFDLEdBQUNQLENBQUMsQ0FBQ3JjLENBQUMsQ0FBQztjQUFDLENBQUM0YyxDQUFDLEdBQUNBLENBQUMsQ0FBQ3dDLFNBQVMsQ0FBQyxDQUFDLEVBQUMsQ0FBQyxDQUFDLENBQUM3ZixXQUFXLEVBQUUsR0FBQ3FkLENBQUMsQ0FBQ3dDLFNBQVMsQ0FBQyxDQUFDLENBQUMsS0FBSTlELENBQUMsS0FBR0EsQ0FBQyxDQUFDc0IsQ0FBQyxDQUFDLEdBQUMsQ0FBQyxDQUFDLENBQUMsRUFBQzVjLENBQUMsSUFBRXFjLENBQUMsQ0FBQ3pjLE1BQU0sR0FBQyxDQUFDLEtBQUcwYixDQUFDLENBQUNzQixDQUFDLENBQUMsR0FBQ3pkLENBQUMsQ0FBQ3VkLENBQUMsQ0FBQyxDQUFDLEVBQUNwQixDQUFDLEdBQUNBLENBQUMsQ0FBQ3NCLENBQUMsQ0FBQztZQUFBO1lBQUMsT0FBT3pkLENBQUMsQ0FBQ3VkLENBQUMsQ0FBQztVQUFBO1FBQUM7UUFBQyxPQUFPdmQsQ0FBQztNQUFBLENBQUMsRUFBQ21jLENBQUMsQ0FBQytELFNBQVMsR0FBQyxVQUFTbGdCLENBQUMsRUFBQ3VkLENBQUMsRUFBQztRQUFDLElBQUlMLENBQUMsR0FBQ08sQ0FBQyxDQUFDRixDQUFDLENBQUM7VUFBQ3BCLENBQUMsR0FBQ29CLENBQUMsQ0FBQ2pXLEtBQUssQ0FBQzZZLFNBQVM7VUFBQ3RmLENBQUMsR0FBQzBjLENBQUMsQ0FBQ2pXLEtBQUssQ0FBQzhZLFNBQVM7UUFBQyxPQUFNLENBQUNqRSxDQUFDLEtBQUd0YixDQUFDLElBQUUsUUFBUSxLQUFHQSxDQUFDLElBQUUsU0FBUyxLQUFHQSxDQUFDLE1BQUksUUFBUSxLQUFHc2IsQ0FBQyxJQUFFLFFBQVEsS0FBR3RiLENBQUMsSUFBR3FjLENBQUMsQ0FBQzNhLFdBQVcsRUFBRSxHQUFDZ2IsQ0FBQyxDQUFDaE0sWUFBWSxJQUFFMkwsQ0FBQyxDQUFDcEwsVUFBVSxFQUFFLEdBQUN5TCxDQUFDLENBQUN0ZSxXQUFZLENBQUM7TUFBQSxDQUFDLEVBQUNrZCxDQUFDLENBQUNrRSxZQUFZLEdBQUMsVUFBU3JnQixDQUFDLEVBQUM7UUFBQyxJQUFJdWQsQ0FBQyxHQUFDO1VBQUMsSUFBSSxFQUFDLE9BQU87VUFBQyxHQUFHLEVBQUMsT0FBTztVQUFDLEdBQUcsRUFBQyxNQUFNO1VBQUMsR0FBRyxFQUFDLE1BQU07VUFBQyxHQUFHLEVBQUMsUUFBUTtVQUFDLEdBQUcsRUFBQyxPQUFPO1VBQUMsR0FBRyxFQUFDO1FBQU8sQ0FBQztRQUFDLE9BQU0sUUFBUSxJQUFFLE9BQU92ZCxDQUFDLEdBQUNBLENBQUMsR0FBQ3NnQixNQUFNLENBQUN0Z0IsQ0FBQyxDQUFDLENBQUMrSSxPQUFPLENBQUMsY0FBYyxFQUFDLFVBQVMvSSxDQUFDLEVBQUM7VUFBQyxPQUFPdWQsQ0FBQyxDQUFDdmQsQ0FBQyxDQUFDO1FBQUEsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDbWMsQ0FBQyxDQUFDb0UsT0FBTyxHQUFDLENBQUMsQ0FBQztNQUFDLElBQUlyRCxDQUFDLEdBQUMsQ0FBQztNQUFDLE9BQU9mLENBQUMsQ0FBQ3FFLGtCQUFrQixHQUFDLFVBQVN4Z0IsQ0FBQyxFQUFDO1FBQUMsSUFBSXVkLENBQUMsR0FBQ3ZkLENBQUMsQ0FBQ3lnQixZQUFZLENBQUMsaUJBQWlCLENBQUM7UUFBQyxPQUFPLElBQUksSUFBRWxELENBQUMsS0FBR0EsQ0FBQyxHQUFDdmQsQ0FBQyxDQUFDZ08sRUFBRSxHQUFDLGVBQWUsR0FBQ2hPLENBQUMsQ0FBQ2dPLEVBQUUsR0FBQyxlQUFlLEdBQUMsQ0FBQyxFQUFFa1AsQ0FBQyxFQUFFNEMsUUFBUSxFQUFFLEdBQUMsR0FBRyxHQUFDM0QsQ0FBQyxDQUFDeUQsYUFBYSxDQUFDLENBQUMsQ0FBQyxFQUFDNWYsQ0FBQyxDQUFDMGdCLFlBQVksQ0FBQyxpQkFBaUIsRUFBQ25ELENBQUMsQ0FBQyxDQUFDLEVBQUNBLENBQUM7TUFBQSxDQUFDLEVBQUNwQixDQUFDLENBQUN3RSxTQUFTLEdBQUMsVUFBUzNnQixDQUFDLEVBQUN1ZCxDQUFDLEVBQUNMLENBQUMsRUFBQztRQUFDbGQsQ0FBQyxHQUFDbWMsQ0FBQyxDQUFDcUUsa0JBQWtCLENBQUN4Z0IsQ0FBQyxDQUFDO1FBQUNtYyxDQUFDLENBQUNvRSxPQUFPLENBQUN2Z0IsQ0FBQyxDQUFDLEtBQUdtYyxDQUFDLENBQUNvRSxPQUFPLENBQUN2Z0IsQ0FBQyxDQUFDLEdBQUMsQ0FBQyxDQUFDLENBQUMsRUFBQ21jLENBQUMsQ0FBQ29FLE9BQU8sQ0FBQ3ZnQixDQUFDLENBQUMsQ0FBQ3VkLENBQUMsQ0FBQyxHQUFDTCxDQUFDO01BQUEsQ0FBQyxFQUFDZixDQUFDLENBQUN5RSxPQUFPLEdBQUMsVUFBUzVnQixDQUFDLEVBQUN1ZCxDQUFDLEVBQUM7UUFBQyxJQUFJTCxDQUFDLEdBQUNmLENBQUMsQ0FBQ3FFLGtCQUFrQixDQUFDeGdCLENBQUMsQ0FBQztRQUFDLE9BQU91ZCxDQUFDLEdBQUNwQixDQUFDLENBQUNvRSxPQUFPLENBQUNyRCxDQUFDLENBQUMsSUFBRSxJQUFJLElBQUVmLENBQUMsQ0FBQ29FLE9BQU8sQ0FBQ3JELENBQUMsQ0FBQyxDQUFDSyxDQUFDLENBQUMsR0FBQ3BCLENBQUMsQ0FBQ29FLE9BQU8sQ0FBQ3JELENBQUMsQ0FBQyxDQUFDSyxDQUFDLENBQUMsR0FBQ0UsQ0FBQyxDQUFDemQsQ0FBQyxDQUFDLENBQUNvRixJQUFJLENBQUNtWSxDQUFDLENBQUMsR0FBQ3BCLENBQUMsQ0FBQ29FLE9BQU8sQ0FBQ3JELENBQUMsQ0FBQztNQUFBLENBQUMsRUFBQ2YsQ0FBQyxDQUFDMEUsVUFBVSxHQUFDLFVBQVM3Z0IsQ0FBQyxFQUFDO1FBQUMsSUFBSXVkLENBQUMsR0FBQ3BCLENBQUMsQ0FBQ3FFLGtCQUFrQixDQUFDeGdCLENBQUMsQ0FBQztRQUFDLElBQUksSUFBRW1jLENBQUMsQ0FBQ29FLE9BQU8sQ0FBQ2hELENBQUMsQ0FBQyxJQUFFLE9BQU9wQixDQUFDLENBQUNvRSxPQUFPLENBQUNoRCxDQUFDLENBQUMsRUFBQ3ZkLENBQUMsQ0FBQzhnQixlQUFlLENBQUMsaUJBQWlCLENBQUM7TUFBQSxDQUFDLEVBQUMzRSxDQUFDLENBQUM0RSx5QkFBeUIsR0FBQyxVQUFTL2dCLENBQUMsRUFBQ3VkLENBQUMsRUFBQztRQUFDLElBQUlMLENBQUMsR0FBQyxDQUFDQSxDQUFDLEdBQUNsZCxDQUFDLENBQUN5Z0IsWUFBWSxDQUFDLE9BQU8sQ0FBQyxDQUFDTyxJQUFJLEVBQUUsQ0FBQzlNLEtBQUssQ0FBQyxLQUFLLENBQUMsRUFBRStNLE1BQU0sQ0FBQyxVQUFTamhCLENBQUMsRUFBQztZQUFDLE9BQU8sQ0FBQyxLQUFHQSxDQUFDLENBQUNraEIsT0FBTyxDQUFDLFVBQVUsQ0FBQztVQUFBLENBQUMsQ0FBQztVQUFDM0QsQ0FBQyxHQUFDLENBQUNBLENBQUMsR0FBQ0EsQ0FBQyxDQUFDa0QsWUFBWSxDQUFDLE9BQU8sQ0FBQyxDQUFDTyxJQUFJLEVBQUUsQ0FBQzlNLEtBQUssQ0FBQyxLQUFLLENBQUMsRUFBRStNLE1BQU0sQ0FBQyxVQUFTamhCLENBQUMsRUFBQztZQUFDLE9BQU8sQ0FBQyxLQUFHQSxDQUFDLENBQUNraEIsT0FBTyxDQUFDLFVBQVUsQ0FBQztVQUFBLENBQUMsQ0FBQztVQUFDM0QsQ0FBQyxHQUFDTCxDQUFDLENBQUNpRSxNQUFNLENBQUM1RCxDQUFDLENBQUM7UUFBQ3ZkLENBQUMsQ0FBQzBnQixZQUFZLENBQUMsT0FBTyxFQUFDbkQsQ0FBQyxDQUFDaFEsSUFBSSxDQUFDLEdBQUcsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDNE8sQ0FBQztJQUFBLENBQUMsQ0FBQyxFQUFDNkIsQ0FBQyxDQUFDYixNQUFNLENBQUMsaUJBQWlCLEVBQUMsQ0FBQyxRQUFRLEVBQUMsU0FBUyxDQUFDLEVBQUMsVUFBUzdTLENBQUMsRUFBQ29TLENBQUMsRUFBQztNQUFDLFNBQVNQLENBQUMsQ0FBQ25jLENBQUMsRUFBQ3VkLENBQUMsRUFBQ0wsQ0FBQyxFQUFDO1FBQUMsSUFBSSxDQUFDblQsUUFBUSxHQUFDL0osQ0FBQyxFQUFDLElBQUksQ0FBQ29GLElBQUksR0FBQzhYLENBQUMsRUFBQyxJQUFJLENBQUMxZixPQUFPLEdBQUMrZixDQUFDLEVBQUNwQixDQUFDLENBQUNnRCxTQUFTLENBQUNuTCxXQUFXLENBQUN4SyxJQUFJLENBQUMsSUFBSSxDQUFDO01BQUE7TUFBQyxPQUFPa1QsQ0FBQyxDQUFDd0MsTUFBTSxDQUFDL0MsQ0FBQyxFQUFDTyxDQUFDLENBQUNpRCxVQUFVLENBQUMsRUFBQ3hELENBQUMsQ0FBQ3ZULFNBQVMsQ0FBQ3dZLE1BQU0sR0FBQyxZQUFVO1FBQUMsSUFBSXBoQixDQUFDLEdBQUNzSyxDQUFDLENBQUMsMkRBQTJELENBQUM7UUFBQyxPQUFPLElBQUksQ0FBQzlNLE9BQU8sQ0FBQzZqQixHQUFHLENBQUMsVUFBVSxDQUFDLElBQUVyaEIsQ0FBQyxDQUFDOEksSUFBSSxDQUFDLHNCQUFzQixFQUFDLE1BQU0sQ0FBQyxFQUFDLElBQUksQ0FBQ3dZLFFBQVEsR0FBQ3RoQixDQUFDO01BQUEsQ0FBQyxFQUFDbWMsQ0FBQyxDQUFDdlQsU0FBUyxDQUFDd1IsS0FBSyxHQUFDLFlBQVU7UUFBQyxJQUFJLENBQUNrSCxRQUFRLENBQUNDLEtBQUssRUFBRTtNQUFBLENBQUMsRUFBQ3BGLENBQUMsQ0FBQ3ZULFNBQVMsQ0FBQzRZLGNBQWMsR0FBQyxVQUFTeGhCLENBQUMsRUFBQztRQUFDLElBQUl1ZCxDQUFDLEdBQUMsSUFBSSxDQUFDL2YsT0FBTyxDQUFDNmpCLEdBQUcsQ0FBQyxjQUFjLENBQUM7UUFBQyxJQUFJLENBQUNqSCxLQUFLLEVBQUUsRUFBQyxJQUFJLENBQUNxSCxXQUFXLEVBQUU7UUFBQyxJQUFJdkUsQ0FBQyxHQUFDNVMsQ0FBQyxDQUFDLDhFQUE4RSxDQUFDO1VBQUM2UixDQUFDLEdBQUMsSUFBSSxDQUFDM2UsT0FBTyxDQUFDNmpCLEdBQUcsQ0FBQyxjQUFjLENBQUMsQ0FBQ0EsR0FBRyxDQUFDcmhCLENBQUMsQ0FBQzBoQixPQUFPLENBQUM7UUFBQ3hFLENBQUMsQ0FBQ3hLLE1BQU0sQ0FBQzZLLENBQUMsQ0FBQ3BCLENBQUMsQ0FBQ25jLENBQUMsQ0FBQzJoQixJQUFJLENBQUMsQ0FBQyxDQUFDLEVBQUN6RSxDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUMvVyxTQUFTLElBQUUsMkJBQTJCLEVBQUMsSUFBSSxDQUFDbWIsUUFBUSxDQUFDNU8sTUFBTSxDQUFDd0ssQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDZixDQUFDLENBQUN2VCxTQUFTLENBQUNnWixZQUFZLEdBQUMsWUFBVTtRQUFDLElBQUksQ0FBQ04sUUFBUSxDQUFDcGdCLElBQUksQ0FBQywyQkFBMkIsQ0FBQyxDQUFDbUksTUFBTSxFQUFFO01BQUEsQ0FBQyxFQUFDOFMsQ0FBQyxDQUFDdlQsU0FBUyxDQUFDOEosTUFBTSxHQUFDLFVBQVMxUyxDQUFDLEVBQUM7UUFBQyxJQUFJLENBQUN5aEIsV0FBVyxFQUFFO1FBQUMsSUFBSWxFLENBQUMsR0FBQyxFQUFFO1FBQUMsSUFBRyxJQUFJLElBQUV2ZCxDQUFDLENBQUM2aEIsT0FBTyxJQUFFLENBQUMsS0FBRzdoQixDQUFDLENBQUM2aEIsT0FBTyxDQUFDcGhCLE1BQU0sRUFBQztVQUFDVCxDQUFDLENBQUM2aEIsT0FBTyxHQUFDLElBQUksQ0FBQzlILElBQUksQ0FBQy9aLENBQUMsQ0FBQzZoQixPQUFPLENBQUM7VUFBQyxLQUFJLElBQUkzRSxDQUFDLEdBQUMsQ0FBQyxFQUFDQSxDQUFDLEdBQUNsZCxDQUFDLENBQUM2aEIsT0FBTyxDQUFDcGhCLE1BQU0sRUFBQ3ljLENBQUMsRUFBRSxFQUFDO1lBQUMsSUFBSWYsQ0FBQyxHQUFDbmMsQ0FBQyxDQUFDNmhCLE9BQU8sQ0FBQzNFLENBQUMsQ0FBQztjQUFDZixDQUFDLEdBQUMsSUFBSSxDQUFDNVMsTUFBTSxDQUFDNFMsQ0FBQyxDQUFDO1lBQUNvQixDQUFDLENBQUNyRCxJQUFJLENBQUNpQyxDQUFDLENBQUM7VUFBQTtVQUFDLElBQUksQ0FBQ21GLFFBQVEsQ0FBQzVPLE1BQU0sQ0FBQzZLLENBQUMsQ0FBQztRQUFBLENBQUMsTUFBSyxDQUFDLEtBQUcsSUFBSSxDQUFDK0QsUUFBUSxDQUFDcFYsUUFBUSxFQUFFLENBQUN6TCxNQUFNLElBQUUsSUFBSSxDQUFDa0gsT0FBTyxDQUFDLGlCQUFpQixFQUFDO1VBQUMrWixPQUFPLEVBQUM7UUFBVyxDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUN2RixDQUFDLENBQUN2VCxTQUFTLENBQUMwUyxRQUFRLEdBQUMsVUFBU3RiLENBQUMsRUFBQ3VkLENBQUMsRUFBQztRQUFDQSxDQUFDLENBQUNyYyxJQUFJLENBQUMsa0JBQWtCLENBQUMsQ0FBQ3dSLE1BQU0sQ0FBQzFTLENBQUMsQ0FBQztNQUFBLENBQUMsRUFBQ21jLENBQUMsQ0FBQ3ZULFNBQVMsQ0FBQ21SLElBQUksR0FBQyxVQUFTL1osQ0FBQyxFQUFDO1FBQUMsT0FBTyxJQUFJLENBQUN4QyxPQUFPLENBQUM2akIsR0FBRyxDQUFDLFFBQVEsQ0FBQyxDQUFDcmhCLENBQUMsQ0FBQztNQUFBLENBQUMsRUFBQ21jLENBQUMsQ0FBQ3ZULFNBQVMsQ0FBQ2taLGtCQUFrQixHQUFDLFlBQVU7UUFBQyxJQUFJOWhCLENBQUMsR0FBQyxJQUFJLENBQUNzaEIsUUFBUSxDQUFDcGdCLElBQUksQ0FBQyxzQ0FBc0MsQ0FBQztVQUFDcWMsQ0FBQyxHQUFDdmQsQ0FBQyxDQUFDaWhCLE1BQU0sQ0FBQyxvQ0FBb0MsQ0FBQztRQUFDLENBQUMsQ0FBQyxHQUFDMUQsQ0FBQyxDQUFDOWMsTUFBTSxHQUFDOGMsQ0FBQyxHQUFDdmQsQ0FBQyxFQUFFK2hCLEtBQUssRUFBRSxDQUFDcGEsT0FBTyxDQUFDLFlBQVksQ0FBQyxFQUFDLElBQUksQ0FBQ3FhLHNCQUFzQixFQUFFO01BQUEsQ0FBQyxFQUFDN0YsQ0FBQyxDQUFDdlQsU0FBUyxDQUFDcVosVUFBVSxHQUFDLFlBQVU7UUFBQyxJQUFJMUUsQ0FBQyxHQUFDLElBQUk7UUFBQyxJQUFJLENBQUNuWSxJQUFJLENBQUM4YyxPQUFPLENBQUMsVUFBU2xpQixDQUFDLEVBQUM7VUFBQyxJQUFJbWMsQ0FBQyxHQUFDbmMsQ0FBQyxDQUFDNlosR0FBRyxDQUFDLFVBQVM3WixDQUFDLEVBQUM7WUFBQyxPQUFPQSxDQUFDLENBQUNnTyxFQUFFLENBQUM4UixRQUFRLEVBQUU7VUFBQSxDQUFDLENBQUM7VUFBQ3ZDLENBQUMsQ0FBQytELFFBQVEsQ0FBQ3BnQixJQUFJLENBQUMsc0NBQXNDLENBQUMsQ0FBQ04sSUFBSSxDQUFDLFlBQVU7WUFBQyxJQUFJWixDQUFDLEdBQUNzSyxDQUFDLENBQUMsSUFBSSxDQUFDO2NBQUNpVCxDQUFDLEdBQUNiLENBQUMsQ0FBQ2tFLE9BQU8sQ0FBQyxJQUFJLEVBQUMsTUFBTSxDQUFDO2NBQUMxRCxDQUFDLEdBQUMsRUFBRSxHQUFDSyxDQUFDLENBQUN2UCxFQUFFO1lBQUMsSUFBSSxJQUFFdVAsQ0FBQyxDQUFDelQsT0FBTyxJQUFFeVQsQ0FBQyxDQUFDelQsT0FBTyxDQUFDcVksUUFBUSxJQUFFLElBQUksSUFBRTVFLENBQUMsQ0FBQ3pULE9BQU8sSUFBRSxDQUFDLENBQUMsR0FBQ3FTLENBQUMsQ0FBQytFLE9BQU8sQ0FBQ2hFLENBQUMsQ0FBQyxJQUFFLElBQUksQ0FBQ2tGLFNBQVMsQ0FBQ0MsR0FBRyxDQUFDLG1DQUFtQyxDQUFDLEVBQUNyaUIsQ0FBQyxDQUFDOEksSUFBSSxDQUFDLGVBQWUsRUFBQyxNQUFNLENBQUMsS0FBRyxJQUFJLENBQUNzWixTQUFTLENBQUMvWSxNQUFNLENBQUMsbUNBQW1DLENBQUMsRUFBQ3JKLENBQUMsQ0FBQzhJLElBQUksQ0FBQyxlQUFlLEVBQUMsT0FBTyxDQUFDLENBQUM7VUFBQSxDQUFDLENBQUM7UUFBQSxDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUNxVCxDQUFDLENBQUN2VCxTQUFTLENBQUMwWixXQUFXLEdBQUMsVUFBU3RpQixDQUFDLEVBQUM7UUFBQyxJQUFJLENBQUN5aEIsV0FBVyxFQUFFO1FBQUN6aEIsQ0FBQyxHQUFDO1VBQUN1aUIsUUFBUSxFQUFDLENBQUMsQ0FBQztVQUFDQyxPQUFPLEVBQUMsQ0FBQyxDQUFDO1VBQUNDLElBQUksRUFBQyxJQUFJLENBQUNqbEIsT0FBTyxDQUFDNmpCLEdBQUcsQ0FBQyxjQUFjLENBQUMsQ0FBQ0EsR0FBRyxDQUFDLFdBQVcsQ0FBQyxDQUFDcmhCLENBQUM7UUFBQyxDQUFDLEVBQUNBLENBQUMsR0FBQyxJQUFJLENBQUN1SixNQUFNLENBQUN2SixDQUFDLENBQUM7UUFBQ0EsQ0FBQyxDQUFDbUcsU0FBUyxJQUFFLGtCQUFrQixFQUFDLElBQUksQ0FBQ21iLFFBQVEsQ0FBQ29CLE9BQU8sQ0FBQzFpQixDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUNtYyxDQUFDLENBQUN2VCxTQUFTLENBQUM2WSxXQUFXLEdBQUMsWUFBVTtRQUFDLElBQUksQ0FBQ0gsUUFBUSxDQUFDcGdCLElBQUksQ0FBQyxrQkFBa0IsQ0FBQyxDQUFDbUksTUFBTSxFQUFFO01BQUEsQ0FBQyxFQUFDOFMsQ0FBQyxDQUFDdlQsU0FBUyxDQUFDVyxNQUFNLEdBQUMsVUFBU3ZKLENBQUMsRUFBQztRQUFDLElBQUl1ZCxDQUFDLEdBQUN6VyxRQUFRLENBQUNDLGFBQWEsQ0FBQyxJQUFJLENBQUM7UUFBQ3dXLENBQUMsQ0FBQzZFLFNBQVMsQ0FBQ0MsR0FBRyxDQUFDLHlCQUF5QixDQUFDLEVBQUM5RSxDQUFDLENBQUM2RSxTQUFTLENBQUNDLEdBQUcsQ0FBQyxxQ0FBcUMsQ0FBQztRQUFDLElBQUluRixDQUFDO1VBQUNmLENBQUMsR0FBQztZQUFDd0csSUFBSSxFQUFDO1VBQVEsQ0FBQztVQUFDOWhCLENBQUMsR0FBQ2YsTUFBTSxDQUFDOGlCLE9BQU8sQ0FBQ2hhLFNBQVMsQ0FBQ2lhLE9BQU8sSUFBRS9pQixNQUFNLENBQUM4aUIsT0FBTyxDQUFDaGEsU0FBUyxDQUFDa2EsaUJBQWlCLElBQUVoakIsTUFBTSxDQUFDOGlCLE9BQU8sQ0FBQ2hhLFNBQVMsQ0FBQ21hLHFCQUFxQjtRQUFDLEtBQUk3RixDQUFDLElBQUcsQ0FBQyxJQUFJLElBQUVsZCxDQUFDLENBQUM4SixPQUFPLElBQUVqSixDQUFDLENBQUMySSxJQUFJLENBQUN4SixDQUFDLENBQUM4SixPQUFPLEVBQUMsV0FBVyxDQUFDLElBQUUsSUFBSSxJQUFFOUosQ0FBQyxDQUFDOEosT0FBTyxJQUFFOUosQ0FBQyxDQUFDdWlCLFFBQVEsTUFBSXBHLENBQUMsQ0FBQyxlQUFlLENBQUMsR0FBQyxNQUFNLEVBQUNvQixDQUFDLENBQUM2RSxTQUFTLENBQUMvWSxNQUFNLENBQUMscUNBQXFDLENBQUMsRUFBQ2tVLENBQUMsQ0FBQzZFLFNBQVMsQ0FBQ0MsR0FBRyxDQUFDLG1DQUFtQyxDQUFDLENBQUMsRUFBQyxJQUFJLElBQUVyaUIsQ0FBQyxDQUFDZ08sRUFBRSxJQUFFdVAsQ0FBQyxDQUFDNkUsU0FBUyxDQUFDL1ksTUFBTSxDQUFDLHFDQUFxQyxDQUFDLEVBQUMsSUFBSSxJQUFFckosQ0FBQyxDQUFDZ2pCLFNBQVMsS0FBR3pGLENBQUMsQ0FBQ3ZQLEVBQUUsR0FBQ2hPLENBQUMsQ0FBQ2dqQixTQUFTLENBQUMsRUFBQ2hqQixDQUFDLENBQUN1VCxLQUFLLEtBQUdnSyxDQUFDLENBQUNoSyxLQUFLLEdBQUN2VCxDQUFDLENBQUN1VCxLQUFLLENBQUMsRUFBQ3ZULENBQUMsQ0FBQ2tNLFFBQVEsS0FBR2lRLENBQUMsQ0FBQ3dHLElBQUksR0FBQyxPQUFPLEVBQUN4RyxDQUFDLENBQUMsWUFBWSxDQUFDLEdBQUNuYyxDQUFDLENBQUN5aUIsSUFBSSxFQUFDbEYsQ0FBQyxDQUFDNkUsU0FBUyxDQUFDL1ksTUFBTSxDQUFDLHFDQUFxQyxDQUFDLEVBQUNrVSxDQUFDLENBQUM2RSxTQUFTLENBQUNDLEdBQUcsQ0FBQyxnQ0FBZ0MsQ0FBQyxDQUFDLEVBQUNsRyxDQUFDLEVBQUM7VUFBQyxJQUFJc0IsQ0FBQyxHQUFDdEIsQ0FBQyxDQUFDZSxDQUFDLENBQUM7VUFBQ0ssQ0FBQyxDQUFDbUQsWUFBWSxDQUFDeEQsQ0FBQyxFQUFDTyxDQUFDLENBQUM7UUFBQTtRQUFDLElBQUd6ZCxDQUFDLENBQUNrTSxRQUFRLEVBQUM7VUFBQyxJQUFJaU0sQ0FBQyxHQUFDN04sQ0FBQyxDQUFDaVQsQ0FBQyxDQUFDO1lBQUN2RCxDQUFDLEdBQUNsVCxRQUFRLENBQUNDLGFBQWEsQ0FBQyxRQUFRLENBQUM7VUFBQ2lULENBQUMsQ0FBQzdULFNBQVMsR0FBQyx3QkFBd0IsRUFBQyxJQUFJLENBQUNtTixRQUFRLENBQUN0VCxDQUFDLEVBQUNnYSxDQUFDLENBQUM7VUFBQyxLQUFJLElBQUl1RSxDQUFDLEdBQUMsRUFBRSxFQUFDL0IsQ0FBQyxHQUFDLENBQUMsRUFBQ0EsQ0FBQyxHQUFDeGMsQ0FBQyxDQUFDa00sUUFBUSxDQUFDekwsTUFBTSxFQUFDK2IsQ0FBQyxFQUFFLEVBQUM7WUFBQyxJQUFJd0IsQ0FBQyxHQUFDaGUsQ0FBQyxDQUFDa00sUUFBUSxDQUFDc1EsQ0FBQyxDQUFDO2NBQUN3QixDQUFDLEdBQUMsSUFBSSxDQUFDelUsTUFBTSxDQUFDeVUsQ0FBQyxDQUFDO1lBQUNPLENBQUMsQ0FBQ3JFLElBQUksQ0FBQzhELENBQUMsQ0FBQztVQUFBO1VBQUNuZCxDQUFDLEdBQUN5SixDQUFDLENBQUMsV0FBVyxFQUFDO1lBQUMsU0FBTSwyREFBMkQ7WUFBQ3FZLElBQUksRUFBQztVQUFNLENBQUMsQ0FBQztVQUFDOWhCLENBQUMsQ0FBQzZSLE1BQU0sQ0FBQzZMLENBQUMsQ0FBQyxFQUFDcEcsQ0FBQyxDQUFDekYsTUFBTSxDQUFDc0gsQ0FBQyxDQUFDLEVBQUM3QixDQUFDLENBQUN6RixNQUFNLENBQUM3UixDQUFDLENBQUM7UUFBQSxDQUFDLE1BQUssSUFBSSxDQUFDeVMsUUFBUSxDQUFDdFQsQ0FBQyxFQUFDdWQsQ0FBQyxDQUFDO1FBQUMsT0FBT2IsQ0FBQyxDQUFDaUUsU0FBUyxDQUFDcEQsQ0FBQyxFQUFDLE1BQU0sRUFBQ3ZkLENBQUMsQ0FBQyxFQUFDdWQsQ0FBQztNQUFBLENBQUMsRUFBQ3BCLENBQUMsQ0FBQ3ZULFNBQVMsQ0FBQ21YLElBQUksR0FBQyxVQUFTeEMsQ0FBQyxFQUFDdmQsQ0FBQyxFQUFDO1FBQUMsSUFBSWEsQ0FBQyxHQUFDLElBQUk7VUFBQ3FjLENBQUMsR0FBQ0ssQ0FBQyxDQUFDdlAsRUFBRSxHQUFDLFVBQVU7UUFBQyxJQUFJLENBQUNzVCxRQUFRLENBQUN4WSxJQUFJLENBQUMsSUFBSSxFQUFDb1UsQ0FBQyxDQUFDLEVBQUNLLENBQUMsQ0FBQ2xjLEVBQUUsQ0FBQyxhQUFhLEVBQUMsVUFBU3JCLENBQUMsRUFBQztVQUFDYSxDQUFDLENBQUN1WixLQUFLLEVBQUUsRUFBQ3ZaLENBQUMsQ0FBQzZSLE1BQU0sQ0FBQzFTLENBQUMsQ0FBQ29GLElBQUksQ0FBQyxFQUFDbVksQ0FBQyxDQUFDaGQsTUFBTSxFQUFFLEtBQUdNLENBQUMsQ0FBQ29oQixVQUFVLEVBQUUsRUFBQ3BoQixDQUFDLENBQUNpaEIsa0JBQWtCLEVBQUUsQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDdkUsQ0FBQyxDQUFDbGMsRUFBRSxDQUFDLGdCQUFnQixFQUFDLFVBQVNyQixDQUFDLEVBQUM7VUFBQ2EsQ0FBQyxDQUFDNlIsTUFBTSxDQUFDMVMsQ0FBQyxDQUFDb0YsSUFBSSxDQUFDLEVBQUNtWSxDQUFDLENBQUNoZCxNQUFNLEVBQUUsSUFBRU0sQ0FBQyxDQUFDb2hCLFVBQVUsRUFBRTtRQUFBLENBQUMsQ0FBQyxFQUFDMUUsQ0FBQyxDQUFDbGMsRUFBRSxDQUFDLE9BQU8sRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUNhLENBQUMsQ0FBQytnQixZQUFZLEVBQUUsRUFBQy9nQixDQUFDLENBQUN5aEIsV0FBVyxDQUFDdGlCLENBQUMsQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDdWQsQ0FBQyxDQUFDbGMsRUFBRSxDQUFDLFFBQVEsRUFBQyxZQUFVO1VBQUNrYyxDQUFDLENBQUNoZCxNQUFNLEVBQUUsS0FBR00sQ0FBQyxDQUFDb2hCLFVBQVUsRUFBRSxFQUFDcGhCLENBQUMsQ0FBQ3JELE9BQU8sQ0FBQzZqQixHQUFHLENBQUMsbUJBQW1CLENBQUMsSUFBRXhnQixDQUFDLENBQUNpaEIsa0JBQWtCLEVBQUUsQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDdkUsQ0FBQyxDQUFDbGMsRUFBRSxDQUFDLFVBQVUsRUFBQyxZQUFVO1VBQUNrYyxDQUFDLENBQUNoZCxNQUFNLEVBQUUsS0FBR00sQ0FBQyxDQUFDb2hCLFVBQVUsRUFBRSxFQUFDcGhCLENBQUMsQ0FBQ3JELE9BQU8sQ0FBQzZqQixHQUFHLENBQUMsbUJBQW1CLENBQUMsSUFBRXhnQixDQUFDLENBQUNpaEIsa0JBQWtCLEVBQUUsQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDdkUsQ0FBQyxDQUFDbGMsRUFBRSxDQUFDLE1BQU0sRUFBQyxZQUFVO1VBQUNSLENBQUMsQ0FBQ3lnQixRQUFRLENBQUN4WSxJQUFJLENBQUMsZUFBZSxFQUFDLE1BQU0sQ0FBQyxFQUFDakksQ0FBQyxDQUFDeWdCLFFBQVEsQ0FBQ3hZLElBQUksQ0FBQyxhQUFhLEVBQUMsT0FBTyxDQUFDLEVBQUNqSSxDQUFDLENBQUNvaEIsVUFBVSxFQUFFLEVBQUNwaEIsQ0FBQyxDQUFDbWhCLHNCQUFzQixFQUFFO1FBQUEsQ0FBQyxDQUFDLEVBQUN6RSxDQUFDLENBQUNsYyxFQUFFLENBQUMsT0FBTyxFQUFDLFlBQVU7VUFBQ1IsQ0FBQyxDQUFDeWdCLFFBQVEsQ0FBQ3hZLElBQUksQ0FBQyxlQUFlLEVBQUMsT0FBTyxDQUFDLEVBQUNqSSxDQUFDLENBQUN5Z0IsUUFBUSxDQUFDeFksSUFBSSxDQUFDLGFBQWEsRUFBQyxNQUFNLENBQUMsRUFBQ2pJLENBQUMsQ0FBQ3lnQixRQUFRLENBQUMvYyxVQUFVLENBQUMsdUJBQXVCLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQ2daLENBQUMsQ0FBQ2xjLEVBQUUsQ0FBQyxnQkFBZ0IsRUFBQyxZQUFVO1VBQUMsSUFBSXJCLENBQUMsR0FBQ2EsQ0FBQyxDQUFDb2lCLHFCQUFxQixFQUFFO1VBQUMsQ0FBQyxLQUFHampCLENBQUMsQ0FBQ1MsTUFBTSxJQUFFVCxDQUFDLENBQUMySCxPQUFPLENBQUMsU0FBUyxDQUFDO1FBQUEsQ0FBQyxDQUFDLEVBQUM0VixDQUFDLENBQUNsYyxFQUFFLENBQUMsZ0JBQWdCLEVBQUMsWUFBVTtVQUFDLElBQUlyQixDQUFDO1lBQUN1ZCxDQUFDLEdBQUMxYyxDQUFDLENBQUNvaUIscUJBQXFCLEVBQUU7VUFBQyxDQUFDLEtBQUcxRixDQUFDLENBQUM5YyxNQUFNLEtBQUdULENBQUMsR0FBQzBjLENBQUMsQ0FBQ2tFLE9BQU8sQ0FBQ3JELENBQUMsQ0FBQyxDQUFDLENBQUMsRUFBQyxNQUFNLENBQUMsRUFBQ0EsQ0FBQyxDQUFDamQsUUFBUSxDQUFDLG1DQUFtQyxDQUFDLEdBQUNPLENBQUMsQ0FBQzhHLE9BQU8sQ0FBQyxPQUFPLEVBQUMsQ0FBQyxDQUFDLENBQUMsR0FBQzlHLENBQUMsQ0FBQzhHLE9BQU8sQ0FBQyxRQUFRLEVBQUM7WUFBQ3ZDLElBQUksRUFBQ3BGO1VBQUMsQ0FBQyxDQUFDLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQ3VkLENBQUMsQ0FBQ2xjLEVBQUUsQ0FBQyxrQkFBa0IsRUFBQyxZQUFVO1VBQUMsSUFBSXJCLENBQUM7WUFBQ3VkLENBQUMsR0FBQzFjLENBQUMsQ0FBQ29pQixxQkFBcUIsRUFBRTtZQUFDL0YsQ0FBQyxHQUFDcmMsQ0FBQyxDQUFDeWdCLFFBQVEsQ0FBQ3BnQixJQUFJLENBQUMsc0NBQXNDLENBQUM7WUFBQ2liLENBQUMsR0FBQ2UsQ0FBQyxDQUFDL1EsS0FBSyxDQUFDb1IsQ0FBQyxDQUFDO1VBQUNwQixDQUFDLElBQUUsQ0FBQyxLQUFHbmMsQ0FBQyxHQUFDbWMsQ0FBQyxHQUFDLENBQUMsRUFBQyxDQUFDLEtBQUdvQixDQUFDLENBQUM5YyxNQUFNLEtBQUdULENBQUMsR0FBQyxDQUFDLENBQUMsRUFBQyxDQUFDbWMsQ0FBQyxHQUFDZSxDQUFDLENBQUN2USxFQUFFLENBQUMzTSxDQUFDLENBQUMsRUFBRTJILE9BQU8sQ0FBQyxZQUFZLENBQUMsRUFBQzRWLENBQUMsR0FBQzFjLENBQUMsQ0FBQ3lnQixRQUFRLENBQUM5SyxNQUFNLEVBQUUsQ0FBQ1osR0FBRyxFQUFDc0gsQ0FBQyxHQUFDZixDQUFDLENBQUMzRixNQUFNLEVBQUUsQ0FBQ1osR0FBRyxFQUFDdUcsQ0FBQyxHQUFDdGIsQ0FBQyxDQUFDeWdCLFFBQVEsQ0FBQzlRLFNBQVMsRUFBRSxJQUFFME0sQ0FBQyxHQUFDSyxDQUFDLENBQUMsRUFBQyxDQUFDLEtBQUd2ZCxDQUFDLEdBQUNhLENBQUMsQ0FBQ3lnQixRQUFRLENBQUM5USxTQUFTLENBQUMsQ0FBQyxDQUFDLEdBQUMwTSxDQUFDLEdBQUNLLENBQUMsR0FBQyxDQUFDLElBQUUxYyxDQUFDLENBQUN5Z0IsUUFBUSxDQUFDOVEsU0FBUyxDQUFDMkwsQ0FBQyxDQUFDLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQ29CLENBQUMsQ0FBQ2xjLEVBQUUsQ0FBQyxjQUFjLEVBQUMsWUFBVTtVQUFDLElBQUlyQixDQUFDO1lBQUN1ZCxDQUFDLEdBQUMxYyxDQUFDLENBQUNvaUIscUJBQXFCLEVBQUU7WUFBQy9GLENBQUMsR0FBQ3JjLENBQUMsQ0FBQ3lnQixRQUFRLENBQUNwZ0IsSUFBSSxDQUFDLHNDQUFzQyxDQUFDO1lBQUNpYixDQUFDLEdBQUNlLENBQUMsQ0FBQy9RLEtBQUssQ0FBQ29SLENBQUMsQ0FBQyxHQUFDLENBQUM7VUFBQ3BCLENBQUMsSUFBRWUsQ0FBQyxDQUFDemMsTUFBTSxLQUFHLENBQUNULENBQUMsR0FBQ2tkLENBQUMsQ0FBQ3ZRLEVBQUUsQ0FBQ3dQLENBQUMsQ0FBQyxFQUFFeFUsT0FBTyxDQUFDLFlBQVksQ0FBQyxFQUFDNFYsQ0FBQyxHQUFDMWMsQ0FBQyxDQUFDeWdCLFFBQVEsQ0FBQzlLLE1BQU0sRUFBRSxDQUFDWixHQUFHLEdBQUMvVSxDQUFDLENBQUN5Z0IsUUFBUSxDQUFDaGYsV0FBVyxDQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUM0YSxDQUFDLEdBQUNsZCxDQUFDLENBQUN3VyxNQUFNLEVBQUUsQ0FBQ1osR0FBRyxHQUFDNVYsQ0FBQyxDQUFDc0MsV0FBVyxDQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUN0QyxDQUFDLEdBQUNhLENBQUMsQ0FBQ3lnQixRQUFRLENBQUM5USxTQUFTLEVBQUUsR0FBQzBNLENBQUMsR0FBQ0ssQ0FBQyxFQUFDLENBQUMsS0FBR3BCLENBQUMsR0FBQ3RiLENBQUMsQ0FBQ3lnQixRQUFRLENBQUM5USxTQUFTLENBQUMsQ0FBQyxDQUFDLEdBQUMrTSxDQUFDLEdBQUNMLENBQUMsSUFBRXJjLENBQUMsQ0FBQ3lnQixRQUFRLENBQUM5USxTQUFTLENBQUN4USxDQUFDLENBQUMsQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDdWQsQ0FBQyxDQUFDbGMsRUFBRSxDQUFDLGVBQWUsRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUNBLENBQUMsQ0FBQzhKLE9BQU8sQ0FBQyxDQUFDLENBQUMsQ0FBQ3NZLFNBQVMsQ0FBQ0MsR0FBRyxDQUFDLHNDQUFzQyxDQUFDLEVBQUNyaUIsQ0FBQyxDQUFDOEosT0FBTyxDQUFDLENBQUMsQ0FBQyxDQUFDNFcsWUFBWSxDQUFDLGVBQWUsRUFBQyxNQUFNLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQ25ELENBQUMsQ0FBQ2xjLEVBQUUsQ0FBQyxpQkFBaUIsRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUNhLENBQUMsQ0FBQzJnQixjQUFjLENBQUN4aEIsQ0FBQyxDQUFDO1FBQUEsQ0FBQyxDQUFDLEVBQUNzSyxDQUFDLENBQUNwSSxFQUFFLENBQUNnaEIsVUFBVSxJQUFFLElBQUksQ0FBQzVCLFFBQVEsQ0FBQ2pnQixFQUFFLENBQUMsWUFBWSxFQUFDLFVBQVNyQixDQUFDLEVBQUM7VUFBQyxJQUFJdWQsQ0FBQyxHQUFDMWMsQ0FBQyxDQUFDeWdCLFFBQVEsQ0FBQzlRLFNBQVMsRUFBRTtZQUFDME0sQ0FBQyxHQUFDcmMsQ0FBQyxDQUFDeWdCLFFBQVEsQ0FBQ0QsR0FBRyxDQUFDLENBQUMsQ0FBQyxDQUFDOVAsWUFBWSxHQUFDZ00sQ0FBQyxHQUFDdmQsQ0FBQyxDQUFDbWpCLE1BQU07WUFBQzVGLENBQUMsR0FBQyxDQUFDLEdBQUN2ZCxDQUFDLENBQUNtakIsTUFBTSxJQUFFNUYsQ0FBQyxHQUFDdmQsQ0FBQyxDQUFDbWpCLE1BQU0sSUFBRSxDQUFDO1lBQUNqRyxDQUFDLEdBQUNsZCxDQUFDLENBQUNtakIsTUFBTSxHQUFDLENBQUMsSUFBRWpHLENBQUMsSUFBRXJjLENBQUMsQ0FBQ3lnQixRQUFRLENBQUNqZixNQUFNLEVBQUU7VUFBQ2tiLENBQUMsSUFBRTFjLENBQUMsQ0FBQ3lnQixRQUFRLENBQUM5USxTQUFTLENBQUMsQ0FBQyxDQUFDLEVBQUN4USxDQUFDLENBQUNrRixjQUFjLEVBQUUsRUFBQ2xGLENBQUMsQ0FBQ3NQLGVBQWUsRUFBRSxJQUFFNE4sQ0FBQyxLQUFHcmMsQ0FBQyxDQUFDeWdCLFFBQVEsQ0FBQzlRLFNBQVMsQ0FBQzNQLENBQUMsQ0FBQ3lnQixRQUFRLENBQUNELEdBQUcsQ0FBQyxDQUFDLENBQUMsQ0FBQzlQLFlBQVksR0FBQzFRLENBQUMsQ0FBQ3lnQixRQUFRLENBQUNqZixNQUFNLEVBQUUsQ0FBQyxFQUFDckMsQ0FBQyxDQUFDa0YsY0FBYyxFQUFFLEVBQUNsRixDQUFDLENBQUNzUCxlQUFlLEVBQUUsQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ2dTLFFBQVEsQ0FBQ2pnQixFQUFFLENBQUMsU0FBUyxFQUFDLHNDQUFzQyxFQUFDLFVBQVNyQixDQUFDLEVBQUM7VUFBQyxJQUFJdWQsQ0FBQyxHQUFDalQsQ0FBQyxDQUFDLElBQUksQ0FBQztZQUFDNFMsQ0FBQyxHQUFDUixDQUFDLENBQUNrRSxPQUFPLENBQUMsSUFBSSxFQUFDLE1BQU0sQ0FBQztVQUFDckQsQ0FBQyxDQUFDamQsUUFBUSxDQUFDLG1DQUFtQyxDQUFDLEdBQUNPLENBQUMsQ0FBQ3JELE9BQU8sQ0FBQzZqQixHQUFHLENBQUMsVUFBVSxDQUFDLEdBQUN4Z0IsQ0FBQyxDQUFDOEcsT0FBTyxDQUFDLFVBQVUsRUFBQztZQUFDeWIsYUFBYSxFQUFDcGpCLENBQUM7WUFBQ29GLElBQUksRUFBQzhYO1VBQUMsQ0FBQyxDQUFDLEdBQUNyYyxDQUFDLENBQUM4RyxPQUFPLENBQUMsT0FBTyxFQUFDLENBQUMsQ0FBQyxDQUFDLEdBQUM5RyxDQUFDLENBQUM4RyxPQUFPLENBQUMsUUFBUSxFQUFDO1lBQUN5YixhQUFhLEVBQUNwakIsQ0FBQztZQUFDb0YsSUFBSSxFQUFDOFg7VUFBQyxDQUFDLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQyxJQUFJLENBQUNvRSxRQUFRLENBQUNqZ0IsRUFBRSxDQUFDLFlBQVksRUFBQyxzQ0FBc0MsRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUMsSUFBSXVkLENBQUMsR0FBQ2IsQ0FBQyxDQUFDa0UsT0FBTyxDQUFDLElBQUksRUFBQyxNQUFNLENBQUM7VUFBQy9mLENBQUMsQ0FBQ29pQixxQkFBcUIsRUFBRSxDQUFDdGlCLFdBQVcsQ0FBQyxzQ0FBc0MsQ0FBQyxDQUFDbUksSUFBSSxDQUFDLGVBQWUsRUFBQyxPQUFPLENBQUMsRUFBQ2pJLENBQUMsQ0FBQzhHLE9BQU8sQ0FBQyxlQUFlLEVBQUM7WUFBQ3ZDLElBQUksRUFBQ21ZLENBQUM7WUFBQ3pULE9BQU8sRUFBQ1EsQ0FBQyxDQUFDLElBQUk7VUFBQyxDQUFDLENBQUM7UUFBQSxDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUM2UixDQUFDLENBQUN2VCxTQUFTLENBQUNxYSxxQkFBcUIsR0FBQyxZQUFVO1FBQUMsT0FBTyxJQUFJLENBQUMzQixRQUFRLENBQUNwZ0IsSUFBSSxDQUFDLHVDQUF1QyxDQUFDO01BQUEsQ0FBQyxFQUFDaWIsQ0FBQyxDQUFDdlQsU0FBUyxDQUFDbEcsT0FBTyxHQUFDLFlBQVU7UUFBQyxJQUFJLENBQUM0ZSxRQUFRLENBQUNqWSxNQUFNLEVBQUU7TUFBQSxDQUFDLEVBQUM4UyxDQUFDLENBQUN2VCxTQUFTLENBQUNvWixzQkFBc0IsR0FBQyxZQUFVO1FBQUMsSUFBSWhpQixDQUFDO1VBQUN1ZCxDQUFDO1VBQUNMLENBQUM7VUFBQ2YsQ0FBQztVQUFDdGIsQ0FBQyxHQUFDLElBQUksQ0FBQ29pQixxQkFBcUIsRUFBRTtRQUFDLENBQUMsS0FBR3BpQixDQUFDLENBQUNKLE1BQU0sS0FBR1QsQ0FBQyxHQUFDLElBQUksQ0FBQ3NoQixRQUFRLENBQUNwZ0IsSUFBSSxDQUFDLHNDQUFzQyxDQUFDLENBQUNpTCxLQUFLLENBQUN0TCxDQUFDLENBQUMsRUFBQ3NiLENBQUMsR0FBQyxJQUFJLENBQUNtRixRQUFRLENBQUM5SyxNQUFNLEVBQUUsQ0FBQ1osR0FBRyxFQUFDMkgsQ0FBQyxHQUFDMWMsQ0FBQyxDQUFDMlYsTUFBTSxFQUFFLENBQUNaLEdBQUcsRUFBQ3NILENBQUMsR0FBQyxJQUFJLENBQUNvRSxRQUFRLENBQUM5USxTQUFTLEVBQUUsSUFBRStNLENBQUMsR0FBQ3BCLENBQUMsQ0FBQyxFQUFDQSxDQUFDLEdBQUNvQixDQUFDLEdBQUNwQixDQUFDLEVBQUNlLENBQUMsSUFBRSxDQUFDLEdBQUNyYyxDQUFDLENBQUN5QixXQUFXLENBQUMsQ0FBQyxDQUFDLENBQUMsRUFBQ3RDLENBQUMsSUFBRSxDQUFDLEdBQUMsSUFBSSxDQUFDc2hCLFFBQVEsQ0FBQzlRLFNBQVMsQ0FBQyxDQUFDLENBQUMsR0FBQyxDQUFDMkwsQ0FBQyxHQUFDLElBQUksQ0FBQ21GLFFBQVEsQ0FBQ2hmLFdBQVcsRUFBRSxJQUFFNlosQ0FBQyxHQUFDLENBQUMsS0FBRyxJQUFJLENBQUNtRixRQUFRLENBQUM5USxTQUFTLENBQUMwTSxDQUFDLENBQUMsQ0FBQztNQUFBLENBQUMsRUFBQ2YsQ0FBQyxDQUFDdlQsU0FBUyxDQUFDMEssUUFBUSxHQUFDLFVBQVN0VCxDQUFDLEVBQUN1ZCxDQUFDLEVBQUM7UUFBQyxJQUFJTCxDQUFDLEdBQUMsSUFBSSxDQUFDMWYsT0FBTyxDQUFDNmpCLEdBQUcsQ0FBQyxnQkFBZ0IsQ0FBQztVQUFDbEYsQ0FBQyxHQUFDLElBQUksQ0FBQzNlLE9BQU8sQ0FBQzZqQixHQUFHLENBQUMsY0FBYyxDQUFDO1VBQUNyaEIsQ0FBQyxHQUFDa2QsQ0FBQyxDQUFDbGQsQ0FBQyxFQUFDdWQsQ0FBQyxDQUFDO1FBQUMsSUFBSSxJQUFFdmQsQ0FBQyxHQUFDdWQsQ0FBQyxDQUFDalcsS0FBSyxDQUFDdU8sT0FBTyxHQUFDLE1BQU0sR0FBQyxRQUFRLElBQUUsT0FBTzdWLENBQUMsR0FBQ3VkLENBQUMsQ0FBQ1IsU0FBUyxHQUFDWixDQUFDLENBQUNuYyxDQUFDLENBQUMsR0FBQ3NLLENBQUMsQ0FBQ2lULENBQUMsQ0FBQyxDQUFDN0ssTUFBTSxDQUFDMVMsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDbWMsQ0FBQztJQUFBLENBQUMsQ0FBQyxFQUFDNkIsQ0FBQyxDQUFDYixNQUFNLENBQUMsY0FBYyxFQUFDLEVBQUUsRUFBQyxZQUFVO01BQUMsT0FBTTtRQUFDa0csU0FBUyxFQUFDLENBQUM7UUFBQ0MsR0FBRyxFQUFDLENBQUM7UUFBQ0MsS0FBSyxFQUFDLEVBQUU7UUFBQ0MsS0FBSyxFQUFDLEVBQUU7UUFBQ0MsSUFBSSxFQUFDLEVBQUU7UUFBQ0MsR0FBRyxFQUFDLEVBQUU7UUFBQ0MsR0FBRyxFQUFDLEVBQUU7UUFBQ0MsS0FBSyxFQUFDLEVBQUU7UUFBQ0MsT0FBTyxFQUFDLEVBQUU7UUFBQ0MsU0FBUyxFQUFDLEVBQUU7UUFBQ0MsR0FBRyxFQUFDLEVBQUU7UUFBQ0MsSUFBSSxFQUFDLEVBQUU7UUFBQ0MsSUFBSSxFQUFDLEVBQUU7UUFBQ0MsRUFBRSxFQUFDLEVBQUU7UUFBQ0MsS0FBSyxFQUFDLEVBQUU7UUFBQ0MsSUFBSSxFQUFDLEVBQUU7UUFBQ0MsTUFBTSxFQUFDO01BQUUsQ0FBQztJQUFBLENBQUMsQ0FBQyxFQUFDckcsQ0FBQyxDQUFDYixNQUFNLENBQUMsd0JBQXdCLEVBQUMsQ0FBQyxRQUFRLEVBQUMsVUFBVSxFQUFDLFNBQVMsQ0FBQyxFQUFDLFVBQVNELENBQUMsRUFBQ2YsQ0FBQyxFQUFDdGIsQ0FBQyxFQUFDO01BQUMsU0FBUzRjLENBQUMsQ0FBQ3pkLENBQUMsRUFBQ3VkLENBQUMsRUFBQztRQUFDLElBQUksQ0FBQ3hULFFBQVEsR0FBQy9KLENBQUMsRUFBQyxJQUFJLENBQUN4QyxPQUFPLEdBQUMrZixDQUFDLEVBQUNFLENBQUMsQ0FBQzBCLFNBQVMsQ0FBQ25MLFdBQVcsQ0FBQ3hLLElBQUksQ0FBQyxJQUFJLENBQUM7TUFBQTtNQUFDLE9BQU8yUyxDQUFDLENBQUMrQyxNQUFNLENBQUN6QixDQUFDLEVBQUN0QixDQUFDLENBQUN3RCxVQUFVLENBQUMsRUFBQ2xDLENBQUMsQ0FBQzdVLFNBQVMsQ0FBQ3dZLE1BQU0sR0FBQyxZQUFVO1FBQUMsSUFBSXBoQixDQUFDLEdBQUNrZCxDQUFDLENBQUMscUdBQXFHLENBQUM7UUFBQyxPQUFPLElBQUksQ0FBQ29ILFNBQVMsR0FBQyxDQUFDLEVBQUMsSUFBSSxJQUFFbkksQ0FBQyxDQUFDeUUsT0FBTyxDQUFDLElBQUksQ0FBQzdXLFFBQVEsQ0FBQyxDQUFDLENBQUMsRUFBQyxjQUFjLENBQUMsR0FBQyxJQUFJLENBQUN1YSxTQUFTLEdBQUNuSSxDQUFDLENBQUN5RSxPQUFPLENBQUMsSUFBSSxDQUFDN1csUUFBUSxDQUFDLENBQUMsQ0FBQyxFQUFDLGNBQWMsQ0FBQyxHQUFDLElBQUksSUFBRSxJQUFJLENBQUNBLFFBQVEsQ0FBQ2pCLElBQUksQ0FBQyxVQUFVLENBQUMsS0FBRyxJQUFJLENBQUN3YixTQUFTLEdBQUMsSUFBSSxDQUFDdmEsUUFBUSxDQUFDakIsSUFBSSxDQUFDLFVBQVUsQ0FBQyxDQUFDLEVBQUM5SSxDQUFDLENBQUM4SSxJQUFJLENBQUMsT0FBTyxFQUFDLElBQUksQ0FBQ2lCLFFBQVEsQ0FBQ2pCLElBQUksQ0FBQyxPQUFPLENBQUMsQ0FBQyxFQUFDOUksQ0FBQyxDQUFDOEksSUFBSSxDQUFDLFVBQVUsRUFBQyxJQUFJLENBQUN3YixTQUFTLENBQUMsRUFBQ3RrQixDQUFDLENBQUM4SSxJQUFJLENBQUMsZUFBZSxFQUFDLE9BQU8sQ0FBQyxFQUFDLElBQUksQ0FBQ3liLFVBQVUsR0FBQ3ZrQixDQUFDO01BQUEsQ0FBQyxFQUFDeWQsQ0FBQyxDQUFDN1UsU0FBUyxDQUFDbVgsSUFBSSxHQUFDLFVBQVMvZixDQUFDLEVBQUN1ZCxDQUFDLEVBQUM7UUFBQyxJQUFJTCxDQUFDLEdBQUMsSUFBSTtVQUFDZixDQUFDLEdBQUNuYyxDQUFDLENBQUNnTyxFQUFFLEdBQUMsVUFBVTtRQUFDLElBQUksQ0FBQ3lGLFNBQVMsR0FBQ3pULENBQUMsRUFBQyxJQUFJLENBQUN1a0IsVUFBVSxDQUFDbGpCLEVBQUUsQ0FBQyxPQUFPLEVBQUMsVUFBU3JCLENBQUMsRUFBQztVQUFDa2QsQ0FBQyxDQUFDdlYsT0FBTyxDQUFDLE9BQU8sRUFBQzNILENBQUMsQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ3VrQixVQUFVLENBQUNsakIsRUFBRSxDQUFDLE1BQU0sRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUNrZCxDQUFDLENBQUNzSCxXQUFXLENBQUN4a0IsQ0FBQyxDQUFDO1FBQUEsQ0FBQyxDQUFDLEVBQUMsSUFBSSxDQUFDdWtCLFVBQVUsQ0FBQ2xqQixFQUFFLENBQUMsU0FBUyxFQUFDLFVBQVNyQixDQUFDLEVBQUM7VUFBQ2tkLENBQUMsQ0FBQ3ZWLE9BQU8sQ0FBQyxVQUFVLEVBQUMzSCxDQUFDLENBQUMsRUFBQ0EsQ0FBQyxDQUFDOEwsS0FBSyxLQUFHakwsQ0FBQyxDQUFDK2lCLEtBQUssSUFBRTVqQixDQUFDLENBQUNrRixjQUFjLEVBQUU7UUFBQSxDQUFDLENBQUMsRUFBQ2xGLENBQUMsQ0FBQ3FCLEVBQUUsQ0FBQyxlQUFlLEVBQUMsVUFBU3JCLENBQUMsRUFBQztVQUFDa2QsQ0FBQyxDQUFDcUgsVUFBVSxDQUFDemIsSUFBSSxDQUFDLHVCQUF1QixFQUFDOUksQ0FBQyxDQUFDb0YsSUFBSSxDQUFDNGQsU0FBUyxDQUFDO1FBQUEsQ0FBQyxDQUFDLEVBQUNoakIsQ0FBQyxDQUFDcUIsRUFBRSxDQUFDLGtCQUFrQixFQUFDLFVBQVNyQixDQUFDLEVBQUM7VUFBQ2tkLENBQUMsQ0FBQ3VILE1BQU0sQ0FBQ3prQixDQUFDLENBQUNvRixJQUFJLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQ3BGLENBQUMsQ0FBQ3FCLEVBQUUsQ0FBQyxNQUFNLEVBQUMsWUFBVTtVQUFDNmIsQ0FBQyxDQUFDcUgsVUFBVSxDQUFDemIsSUFBSSxDQUFDLGVBQWUsRUFBQyxNQUFNLENBQUMsRUFBQ29VLENBQUMsQ0FBQ3FILFVBQVUsQ0FBQ3piLElBQUksQ0FBQyxXQUFXLEVBQUNxVCxDQUFDLENBQUMsRUFBQ2UsQ0FBQyxDQUFDd0gsbUJBQW1CLENBQUMxa0IsQ0FBQyxDQUFDO1FBQUEsQ0FBQyxDQUFDLEVBQUNBLENBQUMsQ0FBQ3FCLEVBQUUsQ0FBQyxPQUFPLEVBQUMsWUFBVTtVQUFDNmIsQ0FBQyxDQUFDcUgsVUFBVSxDQUFDemIsSUFBSSxDQUFDLGVBQWUsRUFBQyxPQUFPLENBQUMsRUFBQ29VLENBQUMsQ0FBQ3FILFVBQVUsQ0FBQ2hnQixVQUFVLENBQUMsdUJBQXVCLENBQUMsRUFBQzJZLENBQUMsQ0FBQ3FILFVBQVUsQ0FBQ2hnQixVQUFVLENBQUMsV0FBVyxDQUFDLEVBQUMyWSxDQUFDLENBQUNxSCxVQUFVLENBQUM1YyxPQUFPLENBQUMsT0FBTyxDQUFDLEVBQUN1VixDQUFDLENBQUN5SCxtQkFBbUIsQ0FBQzNrQixDQUFDLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQ0EsQ0FBQyxDQUFDcUIsRUFBRSxDQUFDLFFBQVEsRUFBQyxZQUFVO1VBQUM2YixDQUFDLENBQUNxSCxVQUFVLENBQUN6YixJQUFJLENBQUMsVUFBVSxFQUFDb1UsQ0FBQyxDQUFDb0gsU0FBUyxDQUFDLEVBQUNwSCxDQUFDLENBQUNxSCxVQUFVLENBQUN6YixJQUFJLENBQUMsZUFBZSxFQUFDLE9BQU8sQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDOUksQ0FBQyxDQUFDcUIsRUFBRSxDQUFDLFNBQVMsRUFBQyxZQUFVO1VBQUM2YixDQUFDLENBQUNxSCxVQUFVLENBQUN6YixJQUFJLENBQUMsVUFBVSxFQUFDLElBQUksQ0FBQyxFQUFDb1UsQ0FBQyxDQUFDcUgsVUFBVSxDQUFDemIsSUFBSSxDQUFDLGVBQWUsRUFBQyxNQUFNLENBQUM7UUFBQSxDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUMyVSxDQUFDLENBQUM3VSxTQUFTLENBQUM0YixXQUFXLEdBQUMsVUFBU3hrQixDQUFDLEVBQUM7UUFBQyxJQUFJdWQsQ0FBQyxHQUFDLElBQUk7UUFBQ3pkLE1BQU0sQ0FBQzRHLFVBQVUsQ0FBQyxZQUFVO1VBQUNJLFFBQVEsQ0FBQzhkLGFBQWEsSUFBRXJILENBQUMsQ0FBQ2dILFVBQVUsQ0FBQyxDQUFDLENBQUMsSUFBRXJILENBQUMsQ0FBQy9OLFFBQVEsQ0FBQ29PLENBQUMsQ0FBQ2dILFVBQVUsQ0FBQyxDQUFDLENBQUMsRUFBQ3pkLFFBQVEsQ0FBQzhkLGFBQWEsQ0FBQyxJQUFFckgsQ0FBQyxDQUFDNVYsT0FBTyxDQUFDLE1BQU0sRUFBQzNILENBQUMsQ0FBQztRQUFBLENBQUMsRUFBQyxDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUN5ZCxDQUFDLENBQUM3VSxTQUFTLENBQUM4YixtQkFBbUIsR0FBQyxVQUFTMWtCLENBQUMsRUFBQztRQUFDa2QsQ0FBQyxDQUFDcFcsUUFBUSxDQUFDMkksSUFBSSxDQUFDLENBQUNwTyxFQUFFLENBQUMsb0JBQW9CLEdBQUNyQixDQUFDLENBQUNnTyxFQUFFLEVBQUMsVUFBU2hPLENBQUMsRUFBQztVQUFDLElBQUl1ZCxDQUFDLEdBQUNMLENBQUMsQ0FBQ2xkLENBQUMsQ0FBQ0UsTUFBTSxDQUFDLENBQUN3RSxPQUFPLENBQUMsVUFBVSxDQUFDO1VBQUN3WSxDQUFDLENBQUMsa0NBQWtDLENBQUMsQ0FBQ3RjLElBQUksQ0FBQyxZQUFVO1lBQUMsSUFBSSxJQUFFMmMsQ0FBQyxDQUFDLENBQUMsQ0FBQyxJQUFFcEIsQ0FBQyxDQUFDeUUsT0FBTyxDQUFDLElBQUksRUFBQyxTQUFTLENBQUMsQ0FBQzNDLE9BQU8sQ0FBQyxPQUFPLENBQUM7VUFBQSxDQUFDLENBQUM7UUFBQSxDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUNSLENBQUMsQ0FBQzdVLFNBQVMsQ0FBQytiLG1CQUFtQixHQUFDLFVBQVMza0IsQ0FBQyxFQUFDO1FBQUNrZCxDQUFDLENBQUNwVyxRQUFRLENBQUMySSxJQUFJLENBQUMsQ0FBQ2tCLEdBQUcsQ0FBQyxvQkFBb0IsR0FBQzNRLENBQUMsQ0FBQ2dPLEVBQUUsQ0FBQztNQUFBLENBQUMsRUFBQ3lQLENBQUMsQ0FBQzdVLFNBQVMsQ0FBQzBTLFFBQVEsR0FBQyxVQUFTdGIsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDO1FBQUNBLENBQUMsQ0FBQ3JjLElBQUksQ0FBQyxZQUFZLENBQUMsQ0FBQ3dSLE1BQU0sQ0FBQzFTLENBQUMsQ0FBQztNQUFBLENBQUMsRUFBQ3lkLENBQUMsQ0FBQzdVLFNBQVMsQ0FBQ2xHLE9BQU8sR0FBQyxZQUFVO1FBQUMsSUFBSSxDQUFDaWlCLG1CQUFtQixDQUFDLElBQUksQ0FBQ2xSLFNBQVMsQ0FBQztNQUFBLENBQUMsRUFBQ2dLLENBQUMsQ0FBQzdVLFNBQVMsQ0FBQzZiLE1BQU0sR0FBQyxVQUFTemtCLENBQUMsRUFBQztRQUFDLE1BQU0sSUFBSTNDLEtBQUssQ0FBQyx1REFBdUQsQ0FBQztNQUFBLENBQUMsRUFBQ29nQixDQUFDLENBQUM3VSxTQUFTLENBQUNpYyxTQUFTLEdBQUMsWUFBVTtRQUFDLE9BQU0sQ0FBQyxJQUFJLENBQUNDLFVBQVUsRUFBRTtNQUFBLENBQUMsRUFBQ3JILENBQUMsQ0FBQzdVLFNBQVMsQ0FBQ2tjLFVBQVUsR0FBQyxZQUFVO1FBQUMsT0FBTyxJQUFJLENBQUN0bkIsT0FBTyxDQUFDNmpCLEdBQUcsQ0FBQyxVQUFVLENBQUM7TUFBQSxDQUFDLEVBQUM1RCxDQUFDO0lBQUEsQ0FBQyxDQUFDLEVBQUNPLENBQUMsQ0FBQ2IsTUFBTSxDQUFDLDBCQUEwQixFQUFDLENBQUMsUUFBUSxFQUFDLFFBQVEsRUFBQyxVQUFVLEVBQUMsU0FBUyxDQUFDLEVBQUMsVUFBU25kLENBQUMsRUFBQ3VkLENBQUMsRUFBQ0wsQ0FBQyxFQUFDZixDQUFDLEVBQUM7TUFBQyxTQUFTdGIsQ0FBQyxHQUFFO1FBQUNBLENBQUMsQ0FBQ3NlLFNBQVMsQ0FBQ25MLFdBQVcsQ0FBQzNMLEtBQUssQ0FBQyxJQUFJLEVBQUNDLFNBQVMsQ0FBQztNQUFBO01BQUMsT0FBTzRVLENBQUMsQ0FBQ2dDLE1BQU0sQ0FBQ3JlLENBQUMsRUFBQzBjLENBQUMsQ0FBQyxFQUFDMWMsQ0FBQyxDQUFDK0gsU0FBUyxDQUFDd1ksTUFBTSxHQUFDLFlBQVU7UUFBQyxJQUFJcGhCLENBQUMsR0FBQ2EsQ0FBQyxDQUFDc2UsU0FBUyxDQUFDaUMsTUFBTSxDQUFDNVgsSUFBSSxDQUFDLElBQUksQ0FBQztRQUFDLE9BQU94SixDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUNvaUIsU0FBUyxDQUFDQyxHQUFHLENBQUMsMkJBQTJCLENBQUMsRUFBQ3JpQixDQUFDLENBQUN3VCxJQUFJLENBQUMsZ0pBQWdKLENBQUMsRUFBQ3hULENBQUM7TUFBQSxDQUFDLEVBQUNhLENBQUMsQ0FBQytILFNBQVMsQ0FBQ21YLElBQUksR0FBQyxVQUFTeEMsQ0FBQyxFQUFDdmQsQ0FBQyxFQUFDO1FBQUMsSUFBSWtkLENBQUMsR0FBQyxJQUFJO1FBQUNyYyxDQUFDLENBQUNzZSxTQUFTLENBQUNZLElBQUksQ0FBQzFYLEtBQUssQ0FBQyxJQUFJLEVBQUNDLFNBQVMsQ0FBQztRQUFDLElBQUk2VCxDQUFDLEdBQUNvQixDQUFDLENBQUN2UCxFQUFFLEdBQUMsWUFBWTtRQUFDLElBQUksQ0FBQ3VXLFVBQVUsQ0FBQ3JqQixJQUFJLENBQUMsOEJBQThCLENBQUMsQ0FBQzRILElBQUksQ0FBQyxJQUFJLEVBQUNxVCxDQUFDLENBQUMsQ0FBQ3JULElBQUksQ0FBQyxNQUFNLEVBQUMsU0FBUyxDQUFDLENBQUNBLElBQUksQ0FBQyxlQUFlLEVBQUMsTUFBTSxDQUFDLEVBQUMsSUFBSSxDQUFDeWIsVUFBVSxDQUFDemIsSUFBSSxDQUFDLGlCQUFpQixFQUFDcVQsQ0FBQyxDQUFDLEVBQUMsSUFBSSxDQUFDb0ksVUFBVSxDQUFDemIsSUFBSSxDQUFDLGVBQWUsRUFBQ3FULENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ29JLFVBQVUsQ0FBQ2xqQixFQUFFLENBQUMsV0FBVyxFQUFDLFVBQVNyQixDQUFDLEVBQUM7VUFBQyxDQUFDLEtBQUdBLENBQUMsQ0FBQzhMLEtBQUssSUFBRW9SLENBQUMsQ0FBQ3ZWLE9BQU8sQ0FBQyxRQUFRLEVBQUM7WUFBQ3liLGFBQWEsRUFBQ3BqQjtVQUFDLENBQUMsQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ3VrQixVQUFVLENBQUNsakIsRUFBRSxDQUFDLE9BQU8sRUFBQyxVQUFTckIsQ0FBQyxFQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUMsSUFBSSxDQUFDdWtCLFVBQVUsQ0FBQ2xqQixFQUFFLENBQUMsTUFBTSxFQUFDLFVBQVNyQixDQUFDLEVBQUMsQ0FBQyxDQUFDLENBQUMsRUFBQ3VkLENBQUMsQ0FBQ2xjLEVBQUUsQ0FBQyxPQUFPLEVBQUMsVUFBU3JCLENBQUMsRUFBQztVQUFDdWQsQ0FBQyxDQUFDaGQsTUFBTSxFQUFFLElBQUUyYyxDQUFDLENBQUNxSCxVQUFVLENBQUM1YyxPQUFPLENBQUMsT0FBTyxDQUFDO1FBQUEsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDOUcsQ0FBQyxDQUFDK0gsU0FBUyxDQUFDd1IsS0FBSyxHQUFDLFlBQVU7UUFBQyxJQUFJcGEsQ0FBQyxHQUFDLElBQUksQ0FBQ3VrQixVQUFVLENBQUNyakIsSUFBSSxDQUFDLDhCQUE4QixDQUFDO1FBQUNsQixDQUFDLENBQUN1aEIsS0FBSyxFQUFFLEVBQUN2aEIsQ0FBQyxDQUFDdUUsVUFBVSxDQUFDLE9BQU8sQ0FBQztNQUFBLENBQUMsRUFBQzFELENBQUMsQ0FBQytILFNBQVMsQ0FBQ2lOLE9BQU8sR0FBQyxVQUFTN1YsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDO1FBQUMsSUFBSUwsQ0FBQyxHQUFDLElBQUksQ0FBQzFmLE9BQU8sQ0FBQzZqQixHQUFHLENBQUMsbUJBQW1CLENBQUM7UUFBQyxPQUFPLElBQUksQ0FBQzdqQixPQUFPLENBQUM2akIsR0FBRyxDQUFDLGNBQWMsQ0FBQyxDQUFDbkUsQ0FBQyxDQUFDbGQsQ0FBQyxFQUFDdWQsQ0FBQyxDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUMxYyxDQUFDLENBQUMrSCxTQUFTLENBQUNtYyxrQkFBa0IsR0FBQyxZQUFVO1FBQUMsT0FBTy9rQixDQUFDLENBQUMsZUFBZSxDQUFDO01BQUEsQ0FBQyxFQUFDYSxDQUFDLENBQUMrSCxTQUFTLENBQUM2YixNQUFNLEdBQUMsVUFBU3prQixDQUFDLEVBQUM7UUFBQyxJQUFJdWQsQ0FBQyxFQUFDTCxDQUFDO1FBQUMsQ0FBQyxLQUFHbGQsQ0FBQyxDQUFDUyxNQUFNLElBQUV5YyxDQUFDLEdBQUNsZCxDQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUN1ZCxDQUFDLEdBQUMsSUFBSSxDQUFDZ0gsVUFBVSxDQUFDcmpCLElBQUksQ0FBQyw4QkFBOEIsQ0FBQyxFQUFDbEIsQ0FBQyxHQUFDLElBQUksQ0FBQzZWLE9BQU8sQ0FBQ3FILENBQUMsRUFBQ0ssQ0FBQyxDQUFDLEVBQUNBLENBQUMsQ0FBQ2dFLEtBQUssRUFBRSxDQUFDN08sTUFBTSxDQUFDMVMsQ0FBQyxDQUFDLEVBQUMsQ0FBQ2tkLENBQUMsR0FBQ0EsQ0FBQyxDQUFDM0osS0FBSyxJQUFFMkosQ0FBQyxDQUFDdUYsSUFBSSxJQUFFbEYsQ0FBQyxDQUFDelUsSUFBSSxDQUFDLE9BQU8sRUFBQ29VLENBQUMsQ0FBQyxHQUFDSyxDQUFDLENBQUNoWixVQUFVLENBQUMsT0FBTyxDQUFDLElBQUUsSUFBSSxDQUFDNlYsS0FBSyxFQUFFO01BQUEsQ0FBQyxFQUFDdlosQ0FBQztJQUFBLENBQUMsQ0FBQyxFQUFDbWQsQ0FBQyxDQUFDYixNQUFNLENBQUMsNEJBQTRCLEVBQUMsQ0FBQyxRQUFRLEVBQUMsUUFBUSxFQUFDLFVBQVUsQ0FBQyxFQUFDLFVBQVN0YyxDQUFDLEVBQUNiLENBQUMsRUFBQ3djLENBQUMsRUFBQztNQUFDLFNBQVNpQixDQUFDLENBQUN6ZCxDQUFDLEVBQUN1ZCxDQUFDLEVBQUM7UUFBQ0UsQ0FBQyxDQUFDMEIsU0FBUyxDQUFDbkwsV0FBVyxDQUFDM0wsS0FBSyxDQUFDLElBQUksRUFBQ0MsU0FBUyxDQUFDO01BQUE7TUFBQyxPQUFPa1UsQ0FBQyxDQUFDMEMsTUFBTSxDQUFDekIsQ0FBQyxFQUFDemQsQ0FBQyxDQUFDLEVBQUN5ZCxDQUFDLENBQUM3VSxTQUFTLENBQUN3WSxNQUFNLEdBQUMsWUFBVTtRQUFDLElBQUlwaEIsQ0FBQyxHQUFDeWQsQ0FBQyxDQUFDMEIsU0FBUyxDQUFDaUMsTUFBTSxDQUFDNVgsSUFBSSxDQUFDLElBQUksQ0FBQztRQUFDLE9BQU94SixDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUNvaUIsU0FBUyxDQUFDQyxHQUFHLENBQUMsNkJBQTZCLENBQUMsRUFBQ3JpQixDQUFDLENBQUN3VCxJQUFJLENBQUMsK0NBQStDLENBQUMsRUFBQ3hULENBQUM7TUFBQSxDQUFDLEVBQUN5ZCxDQUFDLENBQUM3VSxTQUFTLENBQUNtWCxJQUFJLEdBQUMsVUFBUy9mLENBQUMsRUFBQ3VkLENBQUMsRUFBQztRQUFDLElBQUlMLENBQUMsR0FBQyxJQUFJO1FBQUNPLENBQUMsQ0FBQzBCLFNBQVMsQ0FBQ1ksSUFBSSxDQUFDMVgsS0FBSyxDQUFDLElBQUksRUFBQ0MsU0FBUyxDQUFDO1FBQUMsSUFBSTZULENBQUMsR0FBQ25jLENBQUMsQ0FBQ2dPLEVBQUUsR0FBQyxZQUFZO1FBQUMsSUFBSSxDQUFDdVcsVUFBVSxDQUFDcmpCLElBQUksQ0FBQyw4QkFBOEIsQ0FBQyxDQUFDNEgsSUFBSSxDQUFDLElBQUksRUFBQ3FULENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ29JLFVBQVUsQ0FBQ2xqQixFQUFFLENBQUMsT0FBTyxFQUFDLFVBQVNyQixDQUFDLEVBQUM7VUFBQ2tkLENBQUMsQ0FBQ3ZWLE9BQU8sQ0FBQyxRQUFRLEVBQUM7WUFBQ3liLGFBQWEsRUFBQ3BqQjtVQUFDLENBQUMsQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ3VrQixVQUFVLENBQUNsakIsRUFBRSxDQUFDLE9BQU8sRUFBQyxvQ0FBb0MsRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUMsSUFBSXVkLENBQUM7VUFBQ0wsQ0FBQyxDQUFDNEgsVUFBVSxFQUFFLEtBQUd2SCxDQUFDLEdBQUMxYyxDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNSLE1BQU0sRUFBRSxFQUFDa2QsQ0FBQyxHQUFDZixDQUFDLENBQUNvRSxPQUFPLENBQUNyRCxDQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUMsTUFBTSxDQUFDLEVBQUNMLENBQUMsQ0FBQ3ZWLE9BQU8sQ0FBQyxVQUFVLEVBQUM7WUFBQ3liLGFBQWEsRUFBQ3BqQixDQUFDO1lBQUNvRixJQUFJLEVBQUNtWTtVQUFDLENBQUMsQ0FBQyxDQUFDO1FBQUEsQ0FBQyxDQUFDLEVBQUMsSUFBSSxDQUFDZ0gsVUFBVSxDQUFDbGpCLEVBQUUsQ0FBQyxTQUFTLEVBQUMsb0NBQW9DLEVBQUMsVUFBU3JCLENBQUMsRUFBQztVQUFDa2QsQ0FBQyxDQUFDNEgsVUFBVSxFQUFFLElBQUU5a0IsQ0FBQyxDQUFDc1AsZUFBZSxFQUFFO1FBQUEsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDbU8sQ0FBQyxDQUFDN1UsU0FBUyxDQUFDd1IsS0FBSyxHQUFDLFlBQVU7UUFBQyxJQUFJcGEsQ0FBQyxHQUFDLElBQUksQ0FBQ3VrQixVQUFVLENBQUNyakIsSUFBSSxDQUFDLDhCQUE4QixDQUFDO1FBQUNsQixDQUFDLENBQUN1aEIsS0FBSyxFQUFFLEVBQUN2aEIsQ0FBQyxDQUFDdUUsVUFBVSxDQUFDLE9BQU8sQ0FBQztNQUFBLENBQUMsRUFBQ2taLENBQUMsQ0FBQzdVLFNBQVMsQ0FBQ2lOLE9BQU8sR0FBQyxVQUFTN1YsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDO1FBQUMsSUFBSUwsQ0FBQyxHQUFDLElBQUksQ0FBQzFmLE9BQU8sQ0FBQzZqQixHQUFHLENBQUMsbUJBQW1CLENBQUM7UUFBQyxPQUFPLElBQUksQ0FBQzdqQixPQUFPLENBQUM2akIsR0FBRyxDQUFDLGNBQWMsQ0FBQyxDQUFDbkUsQ0FBQyxDQUFDbGQsQ0FBQyxFQUFDdWQsQ0FBQyxDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUNFLENBQUMsQ0FBQzdVLFNBQVMsQ0FBQ21jLGtCQUFrQixHQUFDLFlBQVU7UUFBQyxPQUFPbGtCLENBQUMsQ0FBQyxtT0FBbU8sQ0FBQztNQUFBLENBQUMsRUFBQzRjLENBQUMsQ0FBQzdVLFNBQVMsQ0FBQzZiLE1BQU0sR0FBQyxVQUFTemtCLENBQUMsRUFBQztRQUFDLElBQUcsSUFBSSxDQUFDb2EsS0FBSyxFQUFFLEVBQUMsQ0FBQyxLQUFHcGEsQ0FBQyxDQUFDUyxNQUFNLEVBQUM7VUFBQyxLQUFJLElBQUk4YyxDQUFDLEdBQUMsRUFBRSxFQUFDTCxDQUFDLEdBQUMsSUFBSSxDQUFDcUgsVUFBVSxDQUFDcmpCLElBQUksQ0FBQyw4QkFBOEIsQ0FBQyxDQUFDNEgsSUFBSSxDQUFDLElBQUksQ0FBQyxHQUFDLFVBQVUsRUFBQ3FULENBQUMsR0FBQyxDQUFDLEVBQUNBLENBQUMsR0FBQ25jLENBQUMsQ0FBQ1MsTUFBTSxFQUFDMGIsQ0FBQyxFQUFFLEVBQUM7WUFBQyxJQUFJdGIsQ0FBQyxHQUFDYixDQUFDLENBQUNtYyxDQUFDLENBQUM7Y0FBQ3NCLENBQUMsR0FBQyxJQUFJLENBQUNzSCxrQkFBa0IsRUFBRTtjQUFDNU0sQ0FBQyxHQUFDLElBQUksQ0FBQ3RDLE9BQU8sQ0FBQ2hWLENBQUMsRUFBQzRjLENBQUMsQ0FBQztjQUFDekQsQ0FBQyxHQUFDa0QsQ0FBQyxHQUFDVixDQUFDLENBQUNvRCxhQUFhLENBQUMsQ0FBQyxDQUFDLEdBQUMsR0FBRztZQUFDL2UsQ0FBQyxDQUFDbU4sRUFBRSxHQUFDZ00sQ0FBQyxJQUFFblosQ0FBQyxDQUFDbU4sRUFBRSxHQUFDZ00sQ0FBQyxJQUFFd0MsQ0FBQyxDQUFDb0QsYUFBYSxDQUFDLENBQUMsQ0FBQyxFQUFDbkMsQ0FBQyxDQUFDdmMsSUFBSSxDQUFDLHFDQUFxQyxDQUFDLENBQUN3UixNQUFNLENBQUN5RixDQUFDLENBQUMsQ0FBQ3JQLElBQUksQ0FBQyxJQUFJLEVBQUNrUixDQUFDLENBQUM7WUFBQyxJQUFJdUUsQ0FBQyxHQUFDMWQsQ0FBQyxDQUFDMFMsS0FBSyxJQUFFMVMsQ0FBQyxDQUFDNGhCLElBQUk7WUFBQ2xFLENBQUMsSUFBRWQsQ0FBQyxDQUFDM1UsSUFBSSxDQUFDLE9BQU8sRUFBQ3lWLENBQUMsQ0FBQztZQUFDcEcsQ0FBQyxHQUFDLElBQUksQ0FBQzNhLE9BQU8sQ0FBQzZqQixHQUFHLENBQUMsY0FBYyxDQUFDLENBQUNBLEdBQUcsQ0FBQyxZQUFZLENBQUMsRUFBQzlDLENBQUMsR0FBQ2QsQ0FBQyxDQUFDdmMsSUFBSSxDQUFDLG9DQUFvQyxDQUFDO1lBQUNxZCxDQUFDLENBQUN6VixJQUFJLENBQUMsT0FBTyxFQUFDcVAsQ0FBQyxFQUFFLENBQUMsRUFBQ29HLENBQUMsQ0FBQ3pWLElBQUksQ0FBQyxZQUFZLEVBQUNxUCxDQUFDLEVBQUUsQ0FBQyxFQUFDb0csQ0FBQyxDQUFDelYsSUFBSSxDQUFDLGtCQUFrQixFQUFDa1IsQ0FBQyxDQUFDLEVBQUN3QyxDQUFDLENBQUNtRSxTQUFTLENBQUNsRCxDQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUMsTUFBTSxFQUFDNWMsQ0FBQyxDQUFDLEVBQUMwYyxDQUFDLENBQUNyRCxJQUFJLENBQUN1RCxDQUFDLENBQUM7VUFBQTtVQUFDLElBQUksQ0FBQzhHLFVBQVUsQ0FBQ3JqQixJQUFJLENBQUMsOEJBQThCLENBQUMsQ0FBQ3dSLE1BQU0sQ0FBQzZLLENBQUMsQ0FBQztRQUFBO01BQUMsQ0FBQyxFQUFDRSxDQUFDO0lBQUEsQ0FBQyxDQUFDLEVBQUNPLENBQUMsQ0FBQ2IsTUFBTSxDQUFDLCtCQUErQixFQUFDLEVBQUUsRUFBQyxZQUFVO01BQUMsU0FBU25kLENBQUMsQ0FBQ0EsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDTCxDQUFDLEVBQUM7UUFBQyxJQUFJLENBQUM4SCxXQUFXLEdBQUMsSUFBSSxDQUFDQyxvQkFBb0IsQ0FBQy9ILENBQUMsQ0FBQ21FLEdBQUcsQ0FBQyxhQUFhLENBQUMsQ0FBQyxFQUFDcmhCLENBQUMsQ0FBQ3dKLElBQUksQ0FBQyxJQUFJLEVBQUMrVCxDQUFDLEVBQUNMLENBQUMsQ0FBQztNQUFBO01BQUMsT0FBT2xkLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQ3FjLG9CQUFvQixHQUFDLFVBQVNqbEIsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDO1FBQUMsT0FBT0EsQ0FBQyxHQUFDLFFBQVEsSUFBRSxPQUFPQSxDQUFDLEdBQUM7VUFBQ3ZQLEVBQUUsRUFBQyxFQUFFO1VBQUN5VSxJQUFJLEVBQUNsRjtRQUFDLENBQUMsR0FBQ0EsQ0FBQztNQUFBLENBQUMsRUFBQ3ZkLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQ3NjLGlCQUFpQixHQUFDLFVBQVNsbEIsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDO1FBQUMsSUFBSUwsQ0FBQyxHQUFDLElBQUksQ0FBQzZILGtCQUFrQixFQUFFO1FBQUM3SCxDQUFDLENBQUMxSixJQUFJLENBQUMsSUFBSSxDQUFDcUMsT0FBTyxDQUFDMEgsQ0FBQyxDQUFDLENBQUMsRUFBQ0wsQ0FBQyxDQUFDLENBQUMsQ0FBQyxDQUFDa0YsU0FBUyxDQUFDQyxHQUFHLENBQUMsZ0NBQWdDLENBQUMsRUFBQ25GLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQ2tGLFNBQVMsQ0FBQy9ZLE1BQU0sQ0FBQywyQkFBMkIsQ0FBQztRQUFDa1UsQ0FBQyxHQUFDQSxDQUFDLENBQUNoSyxLQUFLLElBQUVnSyxDQUFDLENBQUNrRixJQUFJLElBQUV2RixDQUFDLENBQUN1RixJQUFJLEVBQUU7UUFBQyxPQUFPLElBQUksQ0FBQzhCLFVBQVUsQ0FBQ3JqQixJQUFJLENBQUMsOEJBQThCLENBQUMsQ0FBQzRILElBQUksQ0FBQyxPQUFPLEVBQUN5VSxDQUFDLENBQUMsRUFBQ0wsQ0FBQztNQUFBLENBQUMsRUFBQ2xkLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQzZiLE1BQU0sR0FBQyxVQUFTemtCLENBQUMsRUFBQ3VkLENBQUMsRUFBQztRQUFDLElBQUlMLENBQUMsR0FBQyxDQUFDLElBQUVLLENBQUMsQ0FBQzljLE1BQU0sSUFBRThjLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQ3ZQLEVBQUUsSUFBRSxJQUFJLENBQUNnWCxXQUFXLENBQUNoWCxFQUFFO1FBQUMsSUFBRyxDQUFDLEdBQUN1UCxDQUFDLENBQUM5YyxNQUFNLElBQUV5YyxDQUFDLEVBQUMsT0FBT2xkLENBQUMsQ0FBQ3dKLElBQUksQ0FBQyxJQUFJLEVBQUMrVCxDQUFDLENBQUM7UUFBQyxJQUFJLENBQUNuRCxLQUFLLEVBQUU7UUFBQ21ELENBQUMsR0FBQyxJQUFJLENBQUMySCxpQkFBaUIsQ0FBQyxJQUFJLENBQUNGLFdBQVcsQ0FBQztRQUFDLElBQUksQ0FBQ1QsVUFBVSxDQUFDcmpCLElBQUksQ0FBQyw4QkFBOEIsQ0FBQyxDQUFDd1IsTUFBTSxDQUFDNkssQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDdmQsQ0FBQztJQUFBLENBQUMsQ0FBQyxFQUFDZ2UsQ0FBQyxDQUFDYixNQUFNLENBQUMsOEJBQThCLEVBQUMsQ0FBQyxRQUFRLEVBQUMsU0FBUyxFQUFDLFVBQVUsQ0FBQyxFQUFDLFVBQVN0YyxDQUFDLEVBQUNzYixDQUFDLEVBQUNuQyxDQUFDLEVBQUM7TUFBQyxTQUFTaGEsQ0FBQyxHQUFFLENBQUM7TUFBQyxPQUFPQSxDQUFDLENBQUM0SSxTQUFTLENBQUNtWCxJQUFJLEdBQUMsVUFBUy9mLENBQUMsRUFBQ3VkLENBQUMsRUFBQ0wsQ0FBQyxFQUFDO1FBQUMsSUFBSWYsQ0FBQyxHQUFDLElBQUk7UUFBQ25jLENBQUMsQ0FBQ3dKLElBQUksQ0FBQyxJQUFJLEVBQUMrVCxDQUFDLEVBQUNMLENBQUMsQ0FBQyxFQUFDLElBQUksSUFBRSxJQUFJLENBQUM4SCxXQUFXLElBQUUsSUFBSSxDQUFDeG5CLE9BQU8sQ0FBQzZqQixHQUFHLENBQUMsT0FBTyxDQUFDLElBQUV2aEIsTUFBTSxDQUFDa2YsT0FBTyxJQUFFQSxPQUFPLENBQUNDLEtBQUssSUFBRUQsT0FBTyxDQUFDQyxLQUFLLENBQUMsK0ZBQStGLENBQUMsRUFBQyxJQUFJLENBQUNzRixVQUFVLENBQUNsakIsRUFBRSxDQUFDLFdBQVcsRUFBQywyQkFBMkIsRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUNtYyxDQUFDLENBQUNnSixZQUFZLENBQUNubEIsQ0FBQyxDQUFDO1FBQUEsQ0FBQyxDQUFDLEVBQUN1ZCxDQUFDLENBQUNsYyxFQUFFLENBQUMsVUFBVSxFQUFDLFVBQVNyQixDQUFDLEVBQUM7VUFBQ21jLENBQUMsQ0FBQ2lKLG9CQUFvQixDQUFDcGxCLENBQUMsRUFBQ3VkLENBQUMsQ0FBQztRQUFBLENBQUMsQ0FBQztNQUFBLENBQUMsRUFBQ3ZkLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQ3VjLFlBQVksR0FBQyxVQUFTbmxCLENBQUMsRUFBQ3VkLENBQUMsRUFBQztRQUFDLElBQUcsQ0FBQyxJQUFJLENBQUN1SCxVQUFVLEVBQUUsRUFBQztVQUFDLElBQUk1SCxDQUFDLEdBQUMsSUFBSSxDQUFDcUgsVUFBVSxDQUFDcmpCLElBQUksQ0FBQywyQkFBMkIsQ0FBQztVQUFDLElBQUcsQ0FBQyxLQUFHZ2MsQ0FBQyxDQUFDemMsTUFBTSxFQUFDO1lBQUM4YyxDQUFDLENBQUNqTyxlQUFlLEVBQUU7WUFBQyxJQUFJNk0sQ0FBQyxHQUFDbkMsQ0FBQyxDQUFDNEcsT0FBTyxDQUFDMUQsQ0FBQyxDQUFDLENBQUMsQ0FBQyxFQUFDLE1BQU0sQ0FBQztjQUFDcmMsQ0FBQyxHQUFDLElBQUksQ0FBQ2tKLFFBQVEsQ0FBQ2pKLEdBQUcsRUFBRTtZQUFDLElBQUksQ0FBQ2lKLFFBQVEsQ0FBQ2pKLEdBQUcsQ0FBQyxJQUFJLENBQUNra0IsV0FBVyxDQUFDaFgsRUFBRSxDQUFDO1lBQUMsSUFBSXlQLENBQUMsR0FBQztjQUFDclksSUFBSSxFQUFDK1c7WUFBQyxDQUFDO1lBQUMsSUFBRyxJQUFJLENBQUN4VSxPQUFPLENBQUMsT0FBTyxFQUFDOFYsQ0FBQyxDQUFDLEVBQUNBLENBQUMsQ0FBQzRILFNBQVMsRUFBQyxJQUFJLENBQUN0YixRQUFRLENBQUNqSixHQUFHLENBQUNELENBQUMsQ0FBQyxDQUFDLEtBQUk7Y0FBQyxLQUFJLElBQUlzWCxDQUFDLEdBQUMsQ0FBQyxFQUFDQSxDQUFDLEdBQUNnRSxDQUFDLENBQUMxYixNQUFNLEVBQUMwWCxDQUFDLEVBQUUsRUFBQyxJQUFHc0YsQ0FBQyxHQUFDO2dCQUFDclksSUFBSSxFQUFDK1csQ0FBQyxDQUFDaEUsQ0FBQztjQUFDLENBQUMsRUFBQyxJQUFJLENBQUN4USxPQUFPLENBQUMsVUFBVSxFQUFDOFYsQ0FBQyxDQUFDLEVBQUNBLENBQUMsQ0FBQzRILFNBQVMsRUFBQyxPQUFPLEtBQUssSUFBSSxDQUFDdGIsUUFBUSxDQUFDakosR0FBRyxDQUFDRCxDQUFDLENBQUM7Y0FBQyxJQUFJLENBQUNrSixRQUFRLENBQUNwQyxPQUFPLENBQUMsT0FBTyxDQUFDLENBQUNBLE9BQU8sQ0FBQyxRQUFRLENBQUMsRUFBQyxJQUFJLENBQUNBLE9BQU8sQ0FBQyxRQUFRLEVBQUMsQ0FBQyxDQUFDLENBQUM7WUFBQTtVQUFDO1FBQUM7TUFBQyxDQUFDLEVBQUMzSCxDQUFDLENBQUM0SSxTQUFTLENBQUN3YyxvQkFBb0IsR0FBQyxVQUFTcGxCLENBQUMsRUFBQ3VkLENBQUMsRUFBQ0wsQ0FBQyxFQUFDO1FBQUNBLENBQUMsQ0FBQzNjLE1BQU0sRUFBRSxJQUFFZ2QsQ0FBQyxDQUFDelIsS0FBSyxJQUFFcVEsQ0FBQyxDQUFDa0ksTUFBTSxJQUFFOUcsQ0FBQyxDQUFDelIsS0FBSyxJQUFFcVEsQ0FBQyxDQUFDa0gsU0FBUyxJQUFFLElBQUksQ0FBQzhCLFlBQVksQ0FBQzVILENBQUMsQ0FBQztNQUFBLENBQUMsRUFBQ3ZkLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQzZiLE1BQU0sR0FBQyxVQUFTemtCLENBQUMsRUFBQ3VkLENBQUMsRUFBQztRQUFDLElBQUlMLENBQUMsRUFBQ2YsQ0FBQztRQUFDbmMsQ0FBQyxDQUFDd0osSUFBSSxDQUFDLElBQUksRUFBQytULENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ2dILFVBQVUsQ0FBQ3JqQixJQUFJLENBQUMsMkJBQTJCLENBQUMsQ0FBQ21JLE1BQU0sRUFBRSxFQUFDLElBQUksQ0FBQ2tiLFVBQVUsQ0FBQyxDQUFDLENBQUMsQ0FBQ25DLFNBQVMsQ0FBQy9ZLE1BQU0sQ0FBQyw4QkFBOEIsQ0FBQyxFQUFDLENBQUMsR0FBQyxJQUFJLENBQUNrYixVQUFVLENBQUNyakIsSUFBSSxDQUFDLGlDQUFpQyxDQUFDLENBQUNULE1BQU0sSUFBRSxDQUFDLEtBQUc4YyxDQUFDLENBQUM5YyxNQUFNLEtBQUd5YyxDQUFDLEdBQUMsSUFBSSxDQUFDcUgsVUFBVSxDQUFDcmpCLElBQUksQ0FBQyw4QkFBOEIsQ0FBQyxDQUFDNEgsSUFBSSxDQUFDLElBQUksQ0FBQyxFQUFDcVQsQ0FBQyxHQUFDLElBQUksQ0FBQzNlLE9BQU8sQ0FBQzZqQixHQUFHLENBQUMsY0FBYyxDQUFDLENBQUNBLEdBQUcsQ0FBQyxnQkFBZ0IsQ0FBQyxFQUFDLENBQUNyaEIsQ0FBQyxHQUFDYSxDQUFDLENBQUMsdUhBQXVILENBQUMsRUFBRWlJLElBQUksQ0FBQyxPQUFPLEVBQUNxVCxDQUFDLEVBQUUsQ0FBQyxFQUFDbmMsQ0FBQyxDQUFDOEksSUFBSSxDQUFDLFlBQVksRUFBQ3FULENBQUMsRUFBRSxDQUFDLEVBQUNuYyxDQUFDLENBQUM4SSxJQUFJLENBQUMsa0JBQWtCLEVBQUNvVSxDQUFDLENBQUMsRUFBQ2xELENBQUMsQ0FBQzJHLFNBQVMsQ0FBQzNnQixDQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUMsTUFBTSxFQUFDdWQsQ0FBQyxDQUFDLEVBQUMsSUFBSSxDQUFDZ0gsVUFBVSxDQUFDN0IsT0FBTyxDQUFDMWlCLENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ3VrQixVQUFVLENBQUMsQ0FBQyxDQUFDLENBQUNuQyxTQUFTLENBQUNDLEdBQUcsQ0FBQyw4QkFBOEIsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDcmlCLENBQUM7SUFBQSxDQUFDLENBQUMsRUFBQ2dlLENBQUMsQ0FBQ2IsTUFBTSxDQUFDLDBCQUEwQixFQUFDLENBQUMsUUFBUSxFQUFDLFVBQVUsRUFBQyxTQUFTLENBQUMsRUFBQyxVQUFTaEIsQ0FBQyxFQUFDbkMsQ0FBQyxFQUFDdUUsQ0FBQyxFQUFDO01BQUMsU0FBU3ZlLENBQUMsQ0FBQ0EsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDTCxDQUFDLEVBQUM7UUFBQ2xkLENBQUMsQ0FBQ3dKLElBQUksQ0FBQyxJQUFJLEVBQUMrVCxDQUFDLEVBQUNMLENBQUMsQ0FBQztNQUFBO01BQUMsT0FBT2xkLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQ3dZLE1BQU0sR0FBQyxVQUFTcGhCLENBQUMsRUFBQztRQUFDLElBQUl1ZCxDQUFDLEdBQUMsSUFBSSxDQUFDL2YsT0FBTyxDQUFDNmpCLEdBQUcsQ0FBQyxjQUFjLENBQUMsQ0FBQ0EsR0FBRyxDQUFDLFFBQVEsQ0FBQztVQUFDbkUsQ0FBQyxHQUFDZixDQUFDLENBQUMsa1BBQWtQLENBQUM7UUFBQyxJQUFJLENBQUNtSixnQkFBZ0IsR0FBQ3BJLENBQUMsRUFBQyxJQUFJLENBQUNxSSxPQUFPLEdBQUNySSxDQUFDLENBQUNoYyxJQUFJLENBQUMsVUFBVSxDQUFDLEVBQUMsSUFBSSxDQUFDcWtCLE9BQU8sQ0FBQzNhLElBQUksQ0FBQyxjQUFjLEVBQUMsSUFBSSxDQUFDcE4sT0FBTyxDQUFDNmpCLEdBQUcsQ0FBQyxjQUFjLENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ2tFLE9BQU8sQ0FBQ3pjLElBQUksQ0FBQyxZQUFZLEVBQUN5VSxDQUFDLEVBQUUsQ0FBQztRQUFDdmQsQ0FBQyxHQUFDQSxDQUFDLENBQUN3SixJQUFJLENBQUMsSUFBSSxDQUFDO1FBQUMsT0FBTyxJQUFJLENBQUNnYyxpQkFBaUIsRUFBRSxFQUFDeGxCLENBQUMsQ0FBQzBTLE1BQU0sQ0FBQyxJQUFJLENBQUM0UyxnQkFBZ0IsQ0FBQyxFQUFDdGxCLENBQUM7TUFBQSxDQUFDLEVBQUNBLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQ21YLElBQUksR0FBQyxVQUFTL2YsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDTCxDQUFDLEVBQUM7UUFBQyxJQUFJZixDQUFDLEdBQUMsSUFBSTtVQUFDdGIsQ0FBQyxHQUFDMGMsQ0FBQyxDQUFDdlAsRUFBRSxHQUFDLFVBQVU7VUFBQ3lQLENBQUMsR0FBQ0YsQ0FBQyxDQUFDdlAsRUFBRSxHQUFDLFlBQVk7UUFBQ2hPLENBQUMsQ0FBQ3dKLElBQUksQ0FBQyxJQUFJLEVBQUMrVCxDQUFDLEVBQUNMLENBQUMsQ0FBQyxFQUFDZixDQUFDLENBQUNvSixPQUFPLENBQUN6YyxJQUFJLENBQUMsa0JBQWtCLEVBQUMyVSxDQUFDLENBQUMsRUFBQ0YsQ0FBQyxDQUFDbGMsRUFBRSxDQUFDLE1BQU0sRUFBQyxZQUFVO1VBQUM4YSxDQUFDLENBQUNvSixPQUFPLENBQUN6YyxJQUFJLENBQUMsZUFBZSxFQUFDakksQ0FBQyxDQUFDLEVBQUNzYixDQUFDLENBQUNvSixPQUFPLENBQUM1ZCxPQUFPLENBQUMsT0FBTyxDQUFDO1FBQUEsQ0FBQyxDQUFDLEVBQUM0VixDQUFDLENBQUNsYyxFQUFFLENBQUMsT0FBTyxFQUFDLFlBQVU7VUFBQzhhLENBQUMsQ0FBQ29KLE9BQU8sQ0FBQ3prQixHQUFHLENBQUMsRUFBRSxDQUFDLEVBQUNxYixDQUFDLENBQUNzSixZQUFZLEVBQUUsRUFBQ3RKLENBQUMsQ0FBQ29KLE9BQU8sQ0FBQ2hoQixVQUFVLENBQUMsZUFBZSxDQUFDLEVBQUM0WCxDQUFDLENBQUNvSixPQUFPLENBQUNoaEIsVUFBVSxDQUFDLHVCQUF1QixDQUFDLEVBQUM0WCxDQUFDLENBQUNvSixPQUFPLENBQUM1ZCxPQUFPLENBQUMsT0FBTyxDQUFDO1FBQUEsQ0FBQyxDQUFDLEVBQUM0VixDQUFDLENBQUNsYyxFQUFFLENBQUMsUUFBUSxFQUFDLFlBQVU7VUFBQzhhLENBQUMsQ0FBQ29KLE9BQU8sQ0FBQzNhLElBQUksQ0FBQyxVQUFVLEVBQUMsQ0FBQyxDQUFDLENBQUMsRUFBQ3VSLENBQUMsQ0FBQ3FKLGlCQUFpQixFQUFFO1FBQUEsQ0FBQyxDQUFDLEVBQUNqSSxDQUFDLENBQUNsYyxFQUFFLENBQUMsU0FBUyxFQUFDLFlBQVU7VUFBQzhhLENBQUMsQ0FBQ29KLE9BQU8sQ0FBQzNhLElBQUksQ0FBQyxVQUFVLEVBQUMsQ0FBQyxDQUFDLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQzJTLENBQUMsQ0FBQ2xjLEVBQUUsQ0FBQyxPQUFPLEVBQUMsVUFBU3JCLENBQUMsRUFBQztVQUFDbWMsQ0FBQyxDQUFDb0osT0FBTyxDQUFDNWQsT0FBTyxDQUFDLE9BQU8sQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDNFYsQ0FBQyxDQUFDbGMsRUFBRSxDQUFDLGVBQWUsRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUNBLENBQUMsQ0FBQ29GLElBQUksQ0FBQzRkLFNBQVMsR0FBQzdHLENBQUMsQ0FBQ29KLE9BQU8sQ0FBQ3pjLElBQUksQ0FBQyx1QkFBdUIsRUFBQzlJLENBQUMsQ0FBQ29GLElBQUksQ0FBQzRkLFNBQVMsQ0FBQyxHQUFDN0csQ0FBQyxDQUFDb0osT0FBTyxDQUFDaGhCLFVBQVUsQ0FBQyx1QkFBdUIsQ0FBQztRQUFBLENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ2dnQixVQUFVLENBQUNsakIsRUFBRSxDQUFDLFNBQVMsRUFBQyx5QkFBeUIsRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUNtYyxDQUFDLENBQUN4VSxPQUFPLENBQUMsT0FBTyxFQUFDM0gsQ0FBQyxDQUFDO1FBQUEsQ0FBQyxDQUFDLEVBQUMsSUFBSSxDQUFDdWtCLFVBQVUsQ0FBQ2xqQixFQUFFLENBQUMsVUFBVSxFQUFDLHlCQUF5QixFQUFDLFVBQVNyQixDQUFDLEVBQUM7VUFBQ21jLENBQUMsQ0FBQ3FJLFdBQVcsQ0FBQ3hrQixDQUFDLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQyxJQUFJLENBQUN1a0IsVUFBVSxDQUFDbGpCLEVBQUUsQ0FBQyxTQUFTLEVBQUMseUJBQXlCLEVBQUMsVUFBU3JCLENBQUMsRUFBQztVQUFDLElBQUl1ZCxDQUFDO1VBQUN2ZCxDQUFDLENBQUNzUCxlQUFlLEVBQUUsRUFBQzZNLENBQUMsQ0FBQ3hVLE9BQU8sQ0FBQyxVQUFVLEVBQUMzSCxDQUFDLENBQUMsRUFBQ21jLENBQUMsQ0FBQ3VKLGVBQWUsR0FBQzFsQixDQUFDLENBQUNrSixrQkFBa0IsRUFBRSxFQUFDbEosQ0FBQyxDQUFDOEwsS0FBSyxLQUFHeVMsQ0FBQyxDQUFDOEUsU0FBUyxJQUFFLEVBQUUsS0FBR2xILENBQUMsQ0FBQ29KLE9BQU8sQ0FBQ3prQixHQUFHLEVBQUUsSUFBRSxDQUFDLEdBQUMsQ0FBQ3ljLENBQUMsR0FBQ3BCLENBQUMsQ0FBQ29JLFVBQVUsQ0FBQ3JqQixJQUFJLENBQUMsNEJBQTRCLENBQUMsQ0FBQ3lrQixJQUFJLEVBQUUsRUFBRWxsQixNQUFNLEtBQUc4YyxDQUFDLEdBQUN2RCxDQUFDLENBQUM0RyxPQUFPLENBQUNyRCxDQUFDLENBQUMsQ0FBQyxDQUFDLEVBQUMsTUFBTSxDQUFDLEVBQUNwQixDQUFDLENBQUN5SixrQkFBa0IsQ0FBQ3JJLENBQUMsQ0FBQyxFQUFDdmQsQ0FBQyxDQUFDa0YsY0FBYyxFQUFFLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQyxJQUFJLENBQUNxZixVQUFVLENBQUNsakIsRUFBRSxDQUFDLE9BQU8sRUFBQyx5QkFBeUIsRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUNtYyxDQUFDLENBQUNvSixPQUFPLENBQUN6a0IsR0FBRyxFQUFFLElBQUVkLENBQUMsQ0FBQ3NQLGVBQWUsRUFBRTtRQUFBLENBQUMsQ0FBQztRQUFDLElBQUlpTyxDQUFDLEdBQUN6VyxRQUFRLENBQUMrZSxZQUFZO1VBQUMxTixDQUFDLEdBQUNvRixDQUFDLElBQUVBLENBQUMsSUFBRSxFQUFFO1FBQUMsSUFBSSxDQUFDZ0gsVUFBVSxDQUFDbGpCLEVBQUUsQ0FBQyxtQkFBbUIsRUFBQyx5QkFBeUIsRUFBQyxVQUFTckIsQ0FBQyxFQUFDO1VBQUNtWSxDQUFDLEdBQUNnRSxDQUFDLENBQUNvSSxVQUFVLENBQUM1VCxHQUFHLENBQUMsZ0NBQWdDLENBQUMsR0FBQ3dMLENBQUMsQ0FBQ29JLFVBQVUsQ0FBQzVULEdBQUcsQ0FBQyxjQUFjLENBQUM7UUFBQSxDQUFDLENBQUMsRUFBQyxJQUFJLENBQUM0VCxVQUFVLENBQUNsakIsRUFBRSxDQUFDLDJCQUEyQixFQUFDLHlCQUF5QixFQUFDLFVBQVNyQixDQUFDLEVBQUM7VUFBQyxJQUFJdWQsQ0FBQztVQUFDcEYsQ0FBQyxJQUFFLE9BQU8sS0FBR25ZLENBQUMsQ0FBQytLLElBQUksR0FBQ29SLENBQUMsQ0FBQ29JLFVBQVUsQ0FBQzVULEdBQUcsQ0FBQyxnQ0FBZ0MsQ0FBQyxHQUFDLENBQUM0TSxDQUFDLEdBQUN2ZCxDQUFDLENBQUM4TCxLQUFLLEtBQUd5UyxDQUFDLENBQUNpRixLQUFLLElBQUVqRyxDQUFDLElBQUVnQixDQUFDLENBQUNrRixJQUFJLElBQUVsRyxDQUFDLElBQUVnQixDQUFDLENBQUNtRixHQUFHLElBQUVuRyxDQUFDLElBQUVnQixDQUFDLENBQUMrRSxHQUFHLElBQUVuSCxDQUFDLENBQUMySixZQUFZLENBQUM5bEIsQ0FBQyxDQUFDO1FBQUEsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDQSxDQUFDLENBQUM0SSxTQUFTLENBQUM0YyxpQkFBaUIsR0FBQyxVQUFTeGxCLENBQUMsRUFBQztRQUFDLElBQUksQ0FBQ3VsQixPQUFPLENBQUN6YyxJQUFJLENBQUMsVUFBVSxFQUFDLElBQUksQ0FBQ3liLFVBQVUsQ0FBQ3piLElBQUksQ0FBQyxVQUFVLENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ3liLFVBQVUsQ0FBQ3piLElBQUksQ0FBQyxVQUFVLEVBQUMsSUFBSSxDQUFDO01BQUEsQ0FBQyxFQUFDOUksQ0FBQyxDQUFDNEksU0FBUyxDQUFDc2MsaUJBQWlCLEdBQUMsVUFBU2xsQixDQUFDLEVBQUN1ZCxDQUFDLEVBQUM7UUFBQyxJQUFJLENBQUNnSSxPQUFPLENBQUN6YyxJQUFJLENBQUMsYUFBYSxFQUFDeVUsQ0FBQyxDQUFDa0YsSUFBSSxDQUFDO01BQUEsQ0FBQyxFQUFDemlCLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQzZiLE1BQU0sR0FBQyxVQUFTemtCLENBQUMsRUFBQ3VkLENBQUMsRUFBQztRQUFDLElBQUlMLENBQUMsR0FBQyxJQUFJLENBQUNxSSxPQUFPLENBQUMsQ0FBQyxDQUFDLElBQUV6ZSxRQUFRLENBQUM4ZCxhQUFhO1FBQUMsSUFBSSxDQUFDVyxPQUFPLENBQUN6YyxJQUFJLENBQUMsYUFBYSxFQUFDLEVBQUUsQ0FBQyxFQUFDOUksQ0FBQyxDQUFDd0osSUFBSSxDQUFDLElBQUksRUFBQytULENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQ2tJLFlBQVksRUFBRSxFQUFDdkksQ0FBQyxJQUFFLElBQUksQ0FBQ3FJLE9BQU8sQ0FBQzVkLE9BQU8sQ0FBQyxPQUFPLENBQUM7TUFBQSxDQUFDLEVBQUMzSCxDQUFDLENBQUM0SSxTQUFTLENBQUNrZCxZQUFZLEdBQUMsWUFBVTtRQUFDLElBQUk5bEIsQ0FBQztRQUFDLElBQUksQ0FBQ3lsQixZQUFZLEVBQUUsRUFBQyxJQUFJLENBQUNDLGVBQWUsS0FBRzFsQixDQUFDLEdBQUMsSUFBSSxDQUFDdWxCLE9BQU8sQ0FBQ3prQixHQUFHLEVBQUUsRUFBQyxJQUFJLENBQUM2RyxPQUFPLENBQUMsT0FBTyxFQUFDO1VBQUNvZSxJQUFJLEVBQUMvbEI7UUFBQyxDQUFDLENBQUMsQ0FBQyxFQUFDLElBQUksQ0FBQzBsQixlQUFlLEdBQUMsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDMWxCLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQ2dkLGtCQUFrQixHQUFDLFVBQVM1bEIsQ0FBQyxFQUFDdWQsQ0FBQyxFQUFDO1FBQUMsSUFBSSxDQUFDNVYsT0FBTyxDQUFDLFVBQVUsRUFBQztVQUFDdkMsSUFBSSxFQUFDbVk7UUFBQyxDQUFDLENBQUMsRUFBQyxJQUFJLENBQUNnSSxPQUFPLENBQUN6a0IsR0FBRyxDQUFDeWMsQ0FBQyxDQUFDa0YsSUFBSSxDQUFDLEVBQUMsSUFBSSxDQUFDcUQsWUFBWSxFQUFFO01BQUEsQ0FBQyxFQUFDOWxCLENBQUMsQ0FBQzRJLFNBQVMsQ0FBQzZjLFlBQVksR0FBQyxZQUFVO1FBQUMsSUFBSSxDQUFDRixPQUFPLENBQUM5VCxHQUFHLENBQUMsT0FBTyxFQUFDLE1BQU0sQ0FBQztRQUFDLElBQUl6UixDQUFDLEdBQUMsTUFBTTtRQUFDLEVBQUUsS0FBRyxJQUFJLENBQUN1bEIsT0FBTyxDQUFDemMsSUFBSSxDQUFDLGFBQWEsQ0FBQyxLQUFHOUksQ0FBQyxHQUFDLEdBQUcsSUFBRSxJQUFJLENBQUN1bEIsT0FBTyxDQUFDemtCLEdBQUcsRUFBRSxDQUFDTCxNQUFNLEdBQUMsQ0FBQyxDQUFDLEdBQUMsSUFBSSxDQUFDLEVBQUMsSUFBSSxDQUFDOGtCLE9BQU8sQ0FBQzlULEdBQUcsQ0FBQyxPQUFPLEVBQUN6UixDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUNBLENBQUM7SUFBQSxDQUFDLENBQUMsRUFBQ2dlLENBQUMsQ0FBQ2IsTUFBTSxDQUFDLGdDQUFnQyxFQUFDLENBQUMsVUFBVSxDQUFDLEVBQUMsVUFBU0QsQ0FBQyxFQUFDO01BQUMsU0FBU2xkLENBQUMsR0FBRSxDQUFDO01BQUMsT0FBT0EsQ0FBQyxDQUFDNEksU0FBUyxDQUFDd1ksTUFBTSxHQUFDLFVBQVNwaEIsQ0FBQyxFQUFDO1FBQUMsSUFBSXVkLENBQUMsR0FBQ3ZkLENBQUMsQ0FBQ3dKLElBQUksQ0FBQyxJQUFJLENBQUM7VUFBQ3hKLENBQUMsR0FBQyxJQUFJLENBQUN4QyxPQUFPLENBQUM2akIsR0FBRyxDQUFDLG1CQUFtQixDQUFDLElBQUUsRUFBRTtRQUFDLE9BQU0sQ0FBQyxDQUFDLEtBQUdyaEIsQ0FBQyxDQUFDa2hCLE9BQU8sQ0FBQyxPQUFPLENBQUMsS0FBR2xoQixDQUFDLEdBQUNBLENBQUMsQ0FBQytJLE9BQU8sQ0FBQyxPQUFPLEVBQUMsRUFBRSxDQUFDLEVBQUNtVSxDQUFDLENBQUM2RCx5QkFBeUIsQ0FBQ3hELENBQUMsQ0FBQyxDQUFDLENBQUMsRUFBQyxJQUFJLENBQUN4VCxRQUFRLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQyxFQUFDd1QsQ0FBQyxDQUFDcGMsUUFBUSxDQUFDbkIsQ0FBQyxDQUFDLEVBQUN1ZCxDQUFDO01BQUEsQ0FBQyxFQUFDdmQsQ0FBQztJQUFBLENBQUMsQ0FBQyxFQUFDZ2UsQ0FBQyxDQUFDYixNQUFNLENBQUMsOEJBQThCLEVBQUMsQ0FBQyxRQUFRLENBQUMsRUFBQyxVQUFTaEYsQ0FBQyxFQUFDO01BQUMsU0FBU25ZLENBQUMsR0FBRSxDQUFDO01BQUMsT0FBT0EsQ0FBQyxDQUFDNEksU0FBUyxDQUFDbVgsSUFBSSxHQUFDLFVBQVMvZixDQUFDLEVBQUN1ZCxDQUFDLEVBQUNMLENBQUMsRUFBQztRQUFDLElBQUlmLENBQUMsR0FBQyxJQUFJO1VBQUN0YixDQUFDLEdBQUMsQ0FBQyxNQUFNLEVBQUMsU0FBUyxFQUFDLE9BQU8sRUFBQyxTQUFTLEVBQUMsUUFBUSxFQUFDLFdBQVcsRUFBQyxVQUFVLEVBQUMsYUFBYSxFQUFDLE9BQU8sRUFBQyxVQUFVLENBQUM7VUFBQzRjLENBQUMsR0FBQyxDQUFDLFNBQVMsRUFBQyxTQUFTLEVBQUMsV0FBVyxFQUFDLGFBQWEsRUFBQyxVQUFVLENBQUM7UUFBQ3pkLENBQUMsQ0FBQ3dKLElBQUksQ0FBQyxJQUFJLEVBQUMrVCxDQUFDLEVBQUNMLENBQUMsQ0FBQyxFQUFDSyxDQUFDLENBQUNsYyxFQUFFLENBQUMsR0FBRyxFQUFDLFVBQVNyQixDQUFDLEVBQUN1ZCxDQUFDLEVBQUM7VUFBQyxJQUFJTCxDQUFDO1VBQUMsQ0FBQyxDQUFDLEtBQUdyYyxDQUFDLENBQUNxZ0IsT0FBTyxDQUFDbGhCLENBQUMsQ0FBQyxLQUFHdWQsQ0FBQyxHQUFDQSxDQUFDLElBQUUsQ0FBQyxDQUFDLEVBQUNMLENBQUMsR0FBQy9FLENBQUMsQ0FBQ2xQLEtBQUssQ0FBQyxVQUFVLEdBQUNqSixDQUFDLEVBQUM7WUFBQ2dtQixNQUFNLEVBQUN6STtVQUFDLENBQUMsQ0FBQyxFQUFDcEIsQ0FBQyxDQUFDcFMsUUFBUSxDQUFDcEMsT0FBTyxDQUFDdVYsQ0FBQyxDQUFDLEVBQUMsQ0FBQyxDQUFDLEtBQUdPLENBQUMsQ0FBQ3lELE9BQU8sQ0FBQ2xoQixDQUFDLENBQUMsS0FBR3VkLENBQUMsQ0FBQzhILFNBQVMsR0FBQ25JLENBQUMsQ0FBQ2hVLGtCQUFrQixFQUFFLENBQUMsQ0FBQztRQUFBLENBQUMsQ0FBQztNQUFBLENBQUMsRUFBQ2xKLENBQUM7SUFBQSxDQUFDLENBQUMsRUFBQ2dlLENBQUMsQ0FBQ2IsTUFBTSxDQUFDLHFCQUFxQixFQUFDLENBQUMsUUFBUSxFQUFDLFNBQVMsQ0FBQyxFQUFDLFVBQVNJLENBQUMsRUFBQ0wsQ0FBQyxFQUFDO01BQUMsU0FBU2YsQ0FBQyxDQUFDbmMsQ0FBQyxFQUFDO1FBQUMsSUFBSSxDQUFDaW1CLElBQUksR0FBQ2ptQixDQUFDLElBQUUsQ0FBQyxDQUFDO01BQUE7TUFBQyxPQUFPbWMsQ0FBQyxDQUFDdlQsU0FBUyxDQUFDc2QsR0FBRyxHQUFDLFlBQVU7UUFBQyxPQUFPLElBQUksQ0FBQ0QsSUFBSTtNQUFBLENBQUMsRUFBQzlKLENBQUMsQ0FBQ3ZULFNBQVMsQ0FBQ3lZLEdBQUcsR0FBQyxVQUFTcmhCLENBQUMsRUFBQztRQUFDLE9BQU8sSUFBSSxDQUFDaW1CLElBQUksQ0FBQ2ptQixDQUFDLENBQUM7TUFBQSxDQUFDLEVBQUNtYyxDQUFDLENBQUN2VCxTQUFTLENBQUNvQixNQUFNLEdBQUMsVUFBU2hLLENBQUMsRUFBQztRQUFDLElBQUksQ0FBQ2ltQixJQUFJLEdBQUMxSSxDQUFDLENBQUN2VCxNQUFNLENBQUMsQ0FBQyxDQUFDLEVBQUNoSyxDQUFDLENBQUNrbUIsR0FBRyxFQUFFLEVBQUMsSUFBSSxDQUFDRCxJQUFJLENBQUM7TUFBQSxDQUFDLEVBQUM5SixDQUFDLENBQUNnSyxNQUFNLEdBQUMsQ0FBQyxDQUFDLEVBQUNoSyxDQUFDLENBQUNpSyxRQUFRLEdBQUMsVUFBU3BtQixDQUFDLEVBQUM7UUFBQyxJQUFJdWQsQ0FBQztRQUFDLE9BQU92ZCxDQUFDLElBQUltYyxDQUFDLENBQUNnSyxNQUFNLEtBQUc1SSxDQUFDLEdBQUNMLENBQUMsQ0FBQ2xkLENBQUMsQ0FBQyxFQUFDbWMsQ0FBQyxDQUFDZ0ssTUFBTSxDQUFDbm1CLENBQUMsQ0FBQyxHQUFDdWQsQ0FBQyxDQUFDLEVBQUMsSUFBSXBCLENBQUMsQ0FBQ0EsQ0FBQyxDQUFDZ0ssTUFBTSxDQUFDbm1CLENBQUMsQ0FBQyxDQUFDO01BQUEsQ0FBQyxFQUFDbWMsQ0FBQztJQUFBLENBQUMsQ0FBQyxFQUFDNkIsQ0FBQyxDQUFDYixNQUFNLENBQUMsb0JBQW9CLEVBQUMsRUFBRSxFQUFDLFlBQVU7TUFBQyxPQUFNO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxJQUFJO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsSUFBSTtRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLElBQUk7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFBQyxHQUFHO1FBQUMsR0FBRyxFQUFDLEdBQUc7UUFBQyxHQUFHLEVBQUMsR0FBRztRQUFDLEdBQUcsRUFB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WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FkbWluLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9ib290c3RyYXAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2pxdWVyeS50YWJsZVRvRXhjZWwuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL3NlbGVjdDIubWluLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9jc3MvYWxsLXRoZW1lcy5jc3M/ZTE4MyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2Jvb3RzdHJhcC5jc3M/MzNmNyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL3NlbGVjdDIubWluLmNzcz85Y2IwIiwid2VicGFjazovLy8uL2Fzc2V0cy9jc3Mvc3R5bGUuY3NzP2E1NTgiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy93YXZlcy5jc3M/ZWRkZCJdLCJzb3VyY2VzQ29udGVudCI6WyJpZiAodHlwZW9mIGpRdWVyeSA9PT0gXCJ1bmRlZmluZWRcIikge1xuICAgIHRocm93IG5ldyBFcnJvcihcImpRdWVyeSBwbHVnaW5zIG5lZWQgdG8gYmUgYmVmb3JlIHRoaXMgZmlsZVwiKTtcbn1cblxuJC5BZG1pbkJTQiA9IHt9O1xuJC5BZG1pbkJTQi5vcHRpb25zID0ge1xuICAgIGNvbG9yczoge1xuICAgICAgICByZWQ6ICcjRjQ0MzM2JyxcbiAgICAgICAgcGluazogJyNFOTFFNjMnLFxuICAgICAgICBwdXJwbGU6ICcjOUMyN0IwJyxcbiAgICAgICAgZGVlcFB1cnBsZTogJyM2NzNBQjcnLFxuICAgICAgICBpbmRpZ286ICcjM0Y1MUI1JyxcbiAgICAgICAgYmx1ZTogJyMyMTk2RjMnLFxuICAgICAgICBsaWdodEJsdWU6ICcjMDNBOUY0JyxcbiAgICAgICAgY3lhbjogJyMwMEJDRDQnLFxuICAgICAgICB0ZWFsOiAnIzAwOTY4OCcsXG4gICAgICAgIGdyZWVuOiAnIzRDQUY1MCcsXG4gICAgICAgIGxpZ2h0R3JlZW46ICcjOEJDMzRBJyxcbiAgICAgICAgbGltZTogJyNDRERDMzknLFxuICAgICAgICB5ZWxsb3c6ICcjZmZlODIxJyxcbiAgICAgICAgYW1iZXI6ICcjRkZDMTA3JyxcbiAgICAgICAgb3JhbmdlOiAnI0ZGOTgwMCcsXG4gICAgICAgIGRlZXBPcmFuZ2U6ICcjRkY1NzIyJyxcbiAgICAgICAgYnJvd246ICcjNzk1NTQ4JyxcbiAgICAgICAgZ3JleTogJyM5RTlFOUUnLFxuICAgICAgICBibHVlR3JleTogJyM2MDdEOEInLFxuICAgICAgICBibGFjazogJyMwMDAwMDAnLFxuICAgICAgICB3aGl0ZTogJyNmZmZmZmYnXG4gICAgfSxcbiAgICBsZWZ0U2lkZUJhcjoge1xuICAgICAgICBzY3JvbGxDb2xvcjogJ3JnYmEoMCwwLDAsMC41KScsXG4gICAgICAgIHNjcm9sbFdpZHRoOiAnNHB4JyxcbiAgICAgICAgc2Nyb2xsQWx3YXlzVmlzaWJsZTogZmFsc2UsXG4gICAgICAgIHNjcm9sbEJvcmRlclJhZGl1czogJzAnLFxuICAgICAgICBzY3JvbGxSYWlsQm9yZGVyUmFkaXVzOiAnMCcsXG4gICAgICAgIHNjcm9sbEFjdGl2ZUl0ZW1XaGVuUGFnZUxvYWQ6IHRydWUsXG4gICAgICAgIGJyZWFrcG9pbnRXaWR0aDogMTE3MFxuICAgIH0sXG4gICAgZHJvcGRvd25NZW51OiB7XG4gICAgICAgIGVmZmVjdEluOiAnZmFkZUluJyxcbiAgICAgICAgZWZmZWN0T3V0OiAnZmFkZU91dCdcbiAgICB9XG59XG5cbi8qIExlZnQgU2lkZWJhciAtIEZ1bmN0aW9uID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiogIFlvdSBjYW4gbWFuYWdlIHRoZSBsZWZ0IHNpZGViYXIgbWVudSBvcHRpb25zXG4qICBcbiovXG4kLkFkbWluQlNCLmxlZnRTaWRlQmFyID0ge1xuICAgIGFjdGl2YXRlOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgIHZhciBfdGhpcyA9IHRoaXM7XG4gICAgICAgIHZhciAkYm9keSA9ICQoJ2JvZHknKTtcbiAgICAgICAgdmFyICRvdmVybGF5ID0gJCgnLm92ZXJsYXknKTtcblxuICAgICAgICAvL0Nsb3NlIHNpZGViYXJcbiAgICAgICAgJCh3aW5kb3cpLmNsaWNrKGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICB2YXIgJHRhcmdldCA9ICQoZS50YXJnZXQpO1xuICAgICAgICAgICAgaWYgKGUudGFyZ2V0Lm5vZGVOYW1lLnRvTG93ZXJDYXNlKCkgPT09ICdpJykgeyAkdGFyZ2V0ID0gJChlLnRhcmdldCkucGFyZW50KCk7IH1cblxuICAgICAgICAgICAgaWYgKCEkdGFyZ2V0Lmhhc0NsYXNzKCdiYXJzJykgJiYgX3RoaXMuaXNPcGVuKCkgJiYgJHRhcmdldC5wYXJlbnRzKCcjbGVmdHNpZGViYXInKS5sZW5ndGggPT09IDApIHtcbiAgICAgICAgICAgICAgICBpZiAoISR0YXJnZXQuaGFzQ2xhc3MoJ2pzLXJpZ2h0LXNpZGViYXInKSkgJG92ZXJsYXkuZmFkZU91dCgpO1xuICAgICAgICAgICAgICAgIGlmICghJHRhcmdldC5oYXNDbGFzcygnanMtcmlnaHQtc2lkZWJhcnMnKSkgJG92ZXJsYXkuZmFkZU91dCgpO1xuICAgICAgICAgICAgICAgICRib2R5LnJlbW92ZUNsYXNzKCdvdmVybGF5LW9wZW4nKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG5cbiAgICAgICAgJC5lYWNoKCQoJy5tZW51LXRvZ2dsZS50b2dnbGVkJyksIGZ1bmN0aW9uIChpLCB2YWwpIHtcbiAgICAgICAgICAgICQodmFsKS5uZXh0KCkuc2xpZGVUb2dnbGUoMCk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIC8vV2hlbiBwYWdlIGxvYWRcbiAgICAgICAgJC5lYWNoKCQoJy5tZW51IC5saXN0IGxpLmFjdGl2ZScpLCBmdW5jdGlvbiAoaSwgdmFsKSB7XG4gICAgICAgICAgICB2YXIgJGFjdGl2ZUFuY2hvcnMgPSAkKHZhbCkuZmluZCgnYTplcSgwKScpO1xuXG4gICAgICAgICAgICAkYWN0aXZlQW5jaG9ycy5hZGRDbGFzcygndG9nZ2xlZCcpO1xuICAgICAgICAgICAgJGFjdGl2ZUFuY2hvcnMubmV4dCgpLnNob3coKTtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgLy9Db2xsYXBzZSBvciBFeHBhbmQgTWVudVxuICAgICAgICAkKCcubWVudS10b2dnbGUnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgdmFyICR0aGlzID0gJCh0aGlzKTtcbiAgICAgICAgICAgIHZhciAkY29udGVudCA9ICR0aGlzLm5leHQoKTtcblxuICAgICAgICAgICAgaWYgKCQoJHRoaXMucGFyZW50cygndWwnKVswXSkuaGFzQ2xhc3MoJ2xpc3QnKSkge1xuICAgICAgICAgICAgICAgIHZhciAkbm90ID0gJChlLnRhcmdldCkuaGFzQ2xhc3MoJ21lbnUtdG9nZ2xlJykgPyBlLnRhcmdldCA6ICQoZS50YXJnZXQpLnBhcmVudHMoJy5tZW51LXRvZ2dsZScpO1xuXG4gICAgICAgICAgICAgICAgJC5lYWNoKCQoJy5tZW51LXRvZ2dsZS50b2dnbGVkJykubm90KCRub3QpLm5leHQoKSwgZnVuY3Rpb24gKGksIHZhbCkge1xuICAgICAgICAgICAgICAgICAgICBpZiAoJCh2YWwpLmlzKCc6dmlzaWJsZScpKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKHZhbCkucHJldigpLnRvZ2dsZUNsYXNzKCd0b2dnbGVkJyk7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKHZhbCkuc2xpZGVVcCgpO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICR0aGlzLnRvZ2dsZUNsYXNzKCd0b2dnbGVkJyk7XG4gICAgICAgICAgICAkY29udGVudC5zbGlkZVRvZ2dsZSgzMjApO1xuICAgICAgICB9KTtcblxuICAgICAgICAvL1NldCBtZW51IGhlaWdodFxuICAgICAgICBfdGhpcy5zZXRNZW51SGVpZ2h0KHRydWUpO1xuICAgICAgICBfdGhpcy5jaGVja1N0YXR1c0ZvclJlc2l6ZSh0cnVlKTtcbiAgICAgICAgJCh3aW5kb3cpLnJlc2l6ZShmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBfdGhpcy5zZXRNZW51SGVpZ2h0KGZhbHNlKTtcbiAgICAgICAgICAgIF90aGlzLmNoZWNrU3RhdHVzRm9yUmVzaXplKGZhbHNlKTtcbiAgICAgICAgfSk7XG4gICAgfSxcbiAgICBzZXRNZW51SGVpZ2h0OiBmdW5jdGlvbiAoaXNGaXJzdFRpbWUpIHtcbiAgICAgICAgaWYgKHR5cGVvZiAkLmZuLnNsaW1TY3JvbGwgIT0gJ3VuZGVmaW5lZCcpIHtcbiAgICAgICAgICAgIHZhciBjb25maWdzID0gJC5BZG1pbkJTQi5vcHRpb25zLmxlZnRTaWRlQmFyO1xuICAgICAgICAgICAgdmFyIGhlaWdodCA9ICgkKHdpbmRvdykuaGVpZ2h0KCkgLSAoJCgnLmxlZ2FsJykub3V0ZXJIZWlnaHQoKSArICQoJy51c2VyLWluZm8nKS5vdXRlckhlaWdodCgpICsgJCgnLm5hdmJhcicpLmlubmVySGVpZ2h0KCkpKTtcbiAgICAgICAgICAgIHZhciAkZWwgPSAkKCcubGlzdCcpO1xuXG4gICAgICAgICAgICBpZiAoIWlzRmlyc3RUaW1lKSB7XG4gICAgICAgICAgICAgICAgJGVsLnNsaW1zY3JvbGwoe1xuICAgICAgICAgICAgICAgICAgICBkZXN0cm95OiB0cnVlXG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICRlbC5zbGltc2Nyb2xsKHtcbiAgICAgICAgICAgICAgICBoZWlnaHQ6IGhlaWdodCArIFwicHhcIixcbiAgICAgICAgICAgICAgICBjb2xvcjogY29uZmlncy5zY3JvbGxDb2xvcixcbiAgICAgICAgICAgICAgICBzaXplOiBjb25maWdzLnNjcm9sbFdpZHRoLFxuICAgICAgICAgICAgICAgIGFsd2F5c1Zpc2libGU6IGNvbmZpZ3Muc2Nyb2xsQWx3YXlzVmlzaWJsZSxcbiAgICAgICAgICAgICAgICBib3JkZXJSYWRpdXM6IGNvbmZpZ3Muc2Nyb2xsQm9yZGVyUmFkaXVzLFxuICAgICAgICAgICAgICAgIHJhaWxCb3JkZXJSYWRpdXM6IGNvbmZpZ3Muc2Nyb2xsUmFpbEJvcmRlclJhZGl1c1xuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIC8vU2Nyb2xsIGFjdGl2ZSBtZW51IGl0ZW0gd2hlbiBwYWdlIGxvYWQsIGlmIG9wdGlvbiBzZXQgPSB0cnVlXG4gICAgICAgICAgICBpZiAoJC5BZG1pbkJTQi5vcHRpb25zLmxlZnRTaWRlQmFyLnNjcm9sbEFjdGl2ZUl0ZW1XaGVuUGFnZUxvYWQpIHtcbiAgICAgICAgICAgICAgICB2YXIgaXRlbSA9ICQoJy5tZW51IC5saXN0IGxpLmFjdGl2ZScpWzBdO1xuICAgICAgICAgICAgICAgIGlmIChpdGVtKSB7XG4gICAgICAgICAgICAgICAgICAgIHZhciBhY3RpdmVJdGVtT2Zmc2V0VG9wID0gaXRlbS5vZmZzZXRUb3A7XG4gICAgICAgICAgICAgICAgICAgIGlmIChhY3RpdmVJdGVtT2Zmc2V0VG9wID4gMTUwKSAkZWwuc2xpbXNjcm9sbCh7IHNjcm9sbFRvOiBhY3RpdmVJdGVtT2Zmc2V0VG9wICsgJ3B4JyB9KTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9LFxuICAgIGNoZWNrU3RhdHVzRm9yUmVzaXplOiBmdW5jdGlvbiAoZmlyc3RUaW1lKSB7XG4gICAgICAgIHZhciAkYm9keSA9ICQoJ2JvZHknKTtcbiAgICAgICAgdmFyICRvcGVuQ2xvc2VCYXIgPSAkKCcubmF2YmFyIC5uYXZiYXItaGVhZGVyIC5iYXJzJyk7XG4gICAgICAgIHZhciB3aWR0aCA9ICRib2R5LndpZHRoKCk7XG5cbiAgICAgICAgaWYgKGZpcnN0VGltZSkge1xuICAgICAgICAgICAgJGJvZHkuZmluZCgnLmNvbnRlbnQsIC5zaWRlYmFyJykuYWRkQ2xhc3MoJ25vLWFuaW1hdGUnKS5kZWxheSgxMDAwKS5xdWV1ZShmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgJCh0aGlzKS5yZW1vdmVDbGFzcygnbm8tYW5pbWF0ZScpLmRlcXVldWUoKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHdpZHRoIDwgJC5BZG1pbkJTQi5vcHRpb25zLmxlZnRTaWRlQmFyLmJyZWFrcG9pbnRXaWR0aCkge1xuICAgICAgICAgICAgJGJvZHkuYWRkQ2xhc3MoJ2xzLWNsb3NlZCcpO1xuICAgICAgICAgICAgJG9wZW5DbG9zZUJhci5mYWRlSW4oKTtcbiAgICAgICAgfVxuICAgICAgICBlbHNlIHtcbiAgICAgICAgICAgICRib2R5LnJlbW92ZUNsYXNzKCdscy1jbG9zZWQnKTtcbiAgICAgICAgICAgICRvcGVuQ2xvc2VCYXIuZmFkZU91dCgpO1xuICAgICAgICB9XG4gICAgfSxcbiAgICBpc09wZW46IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgcmV0dXJuICQoJ2JvZHknKS5oYXNDbGFzcygnb3ZlcmxheS1vcGVuJyk7XG4gICAgfVxufTtcbi8vPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cblxuLyogUmlnaHQgU2lkZWJhciAtIEZ1bmN0aW9uID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuKiAgWW91IGNhbiBtYW5hZ2UgdGhlIHJpZ2h0IHNpZGViYXIgbWVudSBvcHRpb25zXG4qICBcbiovXG4kLkFkbWluQlNCLnJpZ2h0U2lkZUJhciA9IHtcbiAgICBhY3RpdmF0ZTogZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgX3RoaXMgPSB0aGlzO1xuICAgICAgICB2YXIgJHNpZGViYXIgPSAkKCcjcmlnaHRzaWRlYmFyJyk7XG4gICAgICAgIHZhciAkb3ZlcmxheSA9ICQoJy5vdmVybGF5Jyk7XG5cbiAgICAgICAgLy9DbG9zZSBzaWRlYmFyXG4gICAgICAgICQod2luZG93KS5jbGljayhmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgdmFyICR0YXJnZXQgPSAkKGUudGFyZ2V0KTtcbiAgICAgICAgICAgIGlmIChlLnRhcmdldC5ub2RlTmFtZS50b0xvd2VyQ2FzZSgpID09PSAnaScpIHsgJHRhcmdldCA9ICQoZS50YXJnZXQpLnBhcmVudCgpOyB9XG5cbiAgICAgICAgICAgIGlmICghJHRhcmdldC5oYXNDbGFzcygnanMtcmlnaHQtc2lkZWJhcicpICYmIF90aGlzLmlzT3BlbigpICYmICR0YXJnZXQucGFyZW50cygnI3JpZ2h0c2lkZWJhcicpLmxlbmd0aCA9PT0gMCkge1xuICAgICAgICAgICAgICAgIGlmICghJHRhcmdldC5oYXNDbGFzcygnYmFycycpKSAkb3ZlcmxheS5mYWRlT3V0KCk7XG4gICAgICAgICAgICAgICAgJHNpZGViYXIucmVtb3ZlQ2xhc3MoJ29wZW4nKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG5cbiAgICAgICAgJCgnLmpzLXJpZ2h0LXNpZGViYXInKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkc2lkZWJhci50b2dnbGVDbGFzcygnb3BlbicpO1xuICAgICAgICAgICAgaWYgKF90aGlzLmlzT3BlbigpKSB7ICRvdmVybGF5LmZhZGVJbigpOyB9IGVsc2UgeyAkb3ZlcmxheS5mYWRlT3V0KCk7IH1cbiAgICAgICAgfSk7XG4gICAgfSxcbiAgICBpc09wZW46IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgcmV0dXJuICQoJy5yaWdodC1zaWRlYmFyJykuaGFzQ2xhc3MoJ29wZW4nKTtcbiAgICB9XG59O1xuJC5BZG1pbkJTQi5yaWdodFNpZGVCYXJzID0ge1xuICAgIGFjdGl2YXRlOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgIHZhciBfdGhpcyA9IHRoaXM7XG4gICAgICAgIHZhciAkc2lkZWJhciA9ICQoJyNyaWdodHNpZGViYXJzJyk7XG4gICAgICAgIHZhciAkb3ZlcmxheSA9ICQoJy5vdmVybGF5Jyk7XG5cbiAgICAgICAgLy9DbG9zZSBzaWRlYmFyXG4gICAgICAgICQod2luZG93KS5jbGljayhmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgdmFyICR0YXJnZXQgPSAkKGUudGFyZ2V0KTtcbiAgICAgICAgICAgIGlmIChlLnRhcmdldC5ub2RlTmFtZS50b0xvd2VyQ2FzZSgpID09PSAnaScpIHsgJHRhcmdldCA9ICQoZS50YXJnZXQpLnBhcmVudCgpOyB9XG5cbiAgICAgICAgICAgIGlmICghJHRhcmdldC5oYXNDbGFzcygnanMtcmlnaHQtc2lkZWJhcnMnKSAmJiBfdGhpcy5pc09wZW4oKSAmJiAkdGFyZ2V0LnBhcmVudHMoJyNyaWdodHNpZGViYXJzJykubGVuZ3RoID09PSAwKSB7XG4gICAgICAgICAgICAgICAgaWYgKCEkdGFyZ2V0Lmhhc0NsYXNzKCdiYXJzJykpICRvdmVybGF5LmZhZGVPdXQoKTtcbiAgICAgICAgICAgICAgICAkc2lkZWJhci5yZW1vdmVDbGFzcygnb3BlbicpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcblxuICAgICAgICAkKCcuanMtcmlnaHQtc2lkZWJhcnMnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkc2lkZWJhci50b2dnbGVDbGFzcygnb3BlbicpO1xuICAgICAgICAgICAgaWYgKF90aGlzLmlzT3BlbigpKSB7ICRvdmVybGF5LmZhZGVJbigpOyB9IGVsc2UgeyAkb3ZlcmxheS5mYWRlT3V0KCk7IH1cbiAgICAgICAgfSk7XG4gICAgfSxcbiAgICBpc09wZW46IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgcmV0dXJuICQoJy5yaWdodC1zaWRlYmFycycpLmhhc0NsYXNzKCdvcGVuJyk7XG4gICAgfVxufTtcblxuLy89PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuXG4vKiBTZWFyY2hiYXIgLSBGdW5jdGlvbiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiogIFlvdSBjYW4gbWFuYWdlIHRoZSBzZWFyY2ggYmFyXG4qICBcbiovXG52YXIgJHNlYXJjaEJhciA9ICQoJy5zZWFyY2gtYmFyJyk7XG4kLkFkbWluQlNCLnNlYXJjaCA9IHtcbiAgICBhY3RpdmF0ZTogZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgX3RoaXMgPSB0aGlzO1xuXG4gICAgICAgIC8vU2VhcmNoIGJ1dHRvbiBjbGljayBldmVudFxuICAgICAgICAkKCcuanMtc2VhcmNoJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgX3RoaXMuc2hvd1NlYXJjaEJhcigpO1xuICAgICAgICB9KTtcblxuICAgICAgICAvL0Nsb3NlIHNlYXJjaCBjbGljayBldmVudFxuICAgICAgICAkc2VhcmNoQmFyLmZpbmQoJy5jbG9zZS1zZWFyY2gnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBfdGhpcy5oaWRlU2VhcmNoQmFyKCk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIC8vRVNDIGtleSBvbiBwcmVzc2VkXG4gICAgICAgICRzZWFyY2hCYXIuZmluZCgnaW5wdXRbdHlwZT1cInRleHRcIl0nKS5vbigna2V5dXAnLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgaWYgKGUua2V5Q29kZSA9PSAyNykge1xuICAgICAgICAgICAgICAgIF90aGlzLmhpZGVTZWFyY2hCYXIoKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfSxcbiAgICBzaG93U2VhcmNoQmFyOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICRzZWFyY2hCYXIuYWRkQ2xhc3MoJ29wZW4nKTtcbiAgICAgICAgJHNlYXJjaEJhci5maW5kKCdpbnB1dFt0eXBlPVwidGV4dFwiXScpLmZvY3VzKCk7XG4gICAgfSxcbiAgICBoaWRlU2VhcmNoQmFyOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICRzZWFyY2hCYXIucmVtb3ZlQ2xhc3MoJ29wZW4nKTtcbiAgICAgICAgJHNlYXJjaEJhci5maW5kKCdpbnB1dFt0eXBlPVwidGV4dFwiXScpLnZhbCgnJyk7XG4gICAgfVxufVxuLy89PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuXG4vKiBOYXZiYXIgLSBGdW5jdGlvbiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4qICBZb3UgY2FuIG1hbmFnZSB0aGUgbmF2YmFyXG4qICBcbiovXG4kLkFkbWluQlNCLm5hdmJhciA9IHtcbiAgICBhY3RpdmF0ZTogZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgJGJvZHkgPSAkKCdib2R5Jyk7XG4gICAgICAgIHZhciAkb3ZlcmxheSA9ICQoJy5vdmVybGF5Jyk7XG5cbiAgICAgICAgLy9PcGVuIGxlZnQgc2lkZWJhciBwYW5lbFxuICAgICAgICAkKCcuYmFycycpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICRib2R5LnRvZ2dsZUNsYXNzKCdvdmVybGF5LW9wZW4nKTtcbiAgICAgICAgICAgIGlmICgkYm9keS5oYXNDbGFzcygnb3ZlcmxheS1vcGVuJykpIHsgJG92ZXJsYXkuZmFkZUluKCk7IH0gZWxzZSB7ICRvdmVybGF5LmZhZGVPdXQoKTsgfVxuICAgICAgICB9KTtcblxuICAgICAgICAvL0Nsb3NlIGNvbGxhcHNlIGJhciBvbiBjbGljayBldmVudFxuICAgICAgICAkKCcubmF2IFtkYXRhLWNsb3NlPVwidHJ1ZVwiXScpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHZhciBpc1Zpc2libGUgPSAkKCcubmF2YmFyLXRvZ2dsZScpLmlzKCc6dmlzaWJsZScpO1xuICAgICAgICAgICAgdmFyICRuYXZiYXJDb2xsYXBzZSA9ICQoJy5uYXZiYXItY29sbGFwc2UnKTtcblxuICAgICAgICAgICAgaWYgKGlzVmlzaWJsZSkge1xuICAgICAgICAgICAgICAgICRuYXZiYXJDb2xsYXBzZS5zbGlkZVVwKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAgICAgJG5hdmJhckNvbGxhcHNlLnJlbW92ZUNsYXNzKCdpbicpLnJlbW92ZUF0dHIoJ3N0eWxlJyk7XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH1cbn1cbi8vPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cblxuLyogSW5wdXQgLSBGdW5jdGlvbiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuKiAgWW91IGNhbiBtYW5hZ2UgdGhlIGlucHV0cyhhbHNvIHRleHRhcmVhcykgd2l0aCBuYW1lIG9mIGNsYXNzICdmb3JtLWNvbnRyb2wnXG4qICBcbiovXG4kLkFkbWluQlNCLmlucHV0ID0ge1xuICAgIGFjdGl2YXRlOiBmdW5jdGlvbiAoJHBhcmVudFNlbGVjdG9yKSB7XG4gICAgICAgICRwYXJlbnRTZWxlY3RvciA9ICRwYXJlbnRTZWxlY3RvciB8fCAkKCdib2R5Jyk7XG5cbiAgICAgICAgLy9PbiBmb2N1cyBldmVudFxuICAgICAgICAkcGFyZW50U2VsZWN0b3IuZmluZCgnLmZvcm0tY29udHJvbCcpLmZvY3VzKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQodGhpcykuY2xvc2VzdCgnLmZvcm0tbGluZScpLmFkZENsYXNzKCdmb2N1c2VkJyk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIC8vT24gZm9jdXNvdXQgZXZlbnRcbiAgICAgICAgJHBhcmVudFNlbGVjdG9yLmZpbmQoJy5mb3JtLWNvbnRyb2wnKS5mb2N1c291dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICB2YXIgJHRoaXMgPSAkKHRoaXMpO1xuICAgICAgICAgICAgaWYgKCR0aGlzLnBhcmVudHMoJy5mb3JtLWdyb3VwJykuaGFzQ2xhc3MoJ2Zvcm0tZmxvYXQnKSkge1xuICAgICAgICAgICAgICAgIGlmICgkdGhpcy52YWwoKSA9PSAnJykgeyAkdGhpcy5wYXJlbnRzKCcuZm9ybS1saW5lJykucmVtb3ZlQ2xhc3MoJ2ZvY3VzZWQnKTsgfVxuICAgICAgICAgICAgfVxuICAgICAgICAgICAgZWxzZSB7XG4gICAgICAgICAgICAgICAgJHRoaXMucGFyZW50cygnLmZvcm0tbGluZScpLnJlbW92ZUNsYXNzKCdmb2N1c2VkJyk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuXG4gICAgICAgIC8vT24gbGFiZWwgY2xpY2tcbiAgICAgICAgJHBhcmVudFNlbGVjdG9yLm9uKCdjbGljaycsICcuZm9ybS1mbG9hdCAuZm9ybS1saW5lIC5mb3JtLWxhYmVsJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCh0aGlzKS5wYXJlbnQoKS5maW5kKCdpbnB1dCcpLmZvY3VzKCk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIC8vTm90IGJsYW5rIGZvcm1cbiAgICAgICAgJHBhcmVudFNlbGVjdG9yLmZpbmQoJy5mb3JtLWNvbnRyb2wnKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGlmICgkKHRoaXMpLnZhbCgpICE9PSAnJykge1xuICAgICAgICAgICAgICAgICQodGhpcykucGFyZW50cygnLmZvcm0tbGluZScpLmFkZENsYXNzKCdmb2N1c2VkJyk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH1cbn1cbi8vPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cblxuLyogRm9ybSAtIFNlbGVjdCAtIEZ1bmN0aW9uID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuKiAgWW91IGNhbiBtYW5hZ2UgdGhlICdzZWxlY3QnIG9mIGZvcm0gZWxlbWVudHNcbiogIFxuKi9cbiQuQWRtaW5CU0Iuc2VsZWN0ID0ge1xuICAgIGFjdGl2YXRlOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgIGlmICgkLmZuLnNlbGVjdHBpY2tlcikgeyAkKCdzZWxlY3Q6bm90KC5tcyknKS5zZWxlY3RwaWNrZXIoKTsgfVxuICAgIH1cbn1cbi8vPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cblxuLyogRHJvcGRvd25NZW51IC0gRnVuY3Rpb24gPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuKiAgWW91IGNhbiBtYW5hZ2UgdGhlIGRyb3Bkb3duIG1lbnVcbiogIFxuKi9cblxuJC5BZG1pbkJTQi5kcm9wZG93bk1lbnUgPSB7XG4gICAgYWN0aXZhdGU6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgdmFyIF90aGlzID0gdGhpcztcblxuICAgICAgICAkKCcuZHJvcGRvd24sIC5kcm9wdXAsIC5idG4tZ3JvdXAnKS5vbih7XG4gICAgICAgICAgICBcInNob3cuYnMuZHJvcGRvd25cIjogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIHZhciBkcm9wZG93biA9IF90aGlzLmRyb3Bkb3duRWZmZWN0KHRoaXMpO1xuICAgICAgICAgICAgICAgIF90aGlzLmRyb3Bkb3duRWZmZWN0U3RhcnQoZHJvcGRvd24sIGRyb3Bkb3duLmVmZmVjdEluKTtcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBcInNob3duLmJzLmRyb3Bkb3duXCI6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB2YXIgZHJvcGRvd24gPSBfdGhpcy5kcm9wZG93bkVmZmVjdCh0aGlzKTtcbiAgICAgICAgICAgICAgICBpZiAoZHJvcGRvd24uZWZmZWN0SW4gJiYgZHJvcGRvd24uZWZmZWN0T3V0KSB7XG4gICAgICAgICAgICAgICAgICAgIF90aGlzLmRyb3Bkb3duRWZmZWN0RW5kKGRyb3Bkb3duLCBmdW5jdGlvbiAoKSB7IH0pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBcImhpZGUuYnMuZHJvcGRvd25cIjogZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgICAgICB2YXIgZHJvcGRvd24gPSBfdGhpcy5kcm9wZG93bkVmZmVjdCh0aGlzKTtcbiAgICAgICAgICAgICAgICBpZiAoZHJvcGRvd24uZWZmZWN0T3V0KSB7XG4gICAgICAgICAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgICAgICAgICAgX3RoaXMuZHJvcGRvd25FZmZlY3RTdGFydChkcm9wZG93biwgZHJvcGRvd24uZWZmZWN0T3V0KTtcbiAgICAgICAgICAgICAgICAgICAgX3RoaXMuZHJvcGRvd25FZmZlY3RFbmQoZHJvcGRvd24sIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGRyb3Bkb3duLmRyb3Bkb3duLnJlbW92ZUNsYXNzKCdvcGVuJyk7XG4gICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG5cbiAgICB9LFxuICAgIGRyb3Bkb3duRWZmZWN0OiBmdW5jdGlvbiAodGFyZ2V0KSB7XG4gICAgICAgIHZhciBlZmZlY3RJbiA9ICQuQWRtaW5CU0Iub3B0aW9ucy5kcm9wZG93bk1lbnUuZWZmZWN0SW4sIGVmZmVjdE91dCA9ICQuQWRtaW5CU0Iub3B0aW9ucy5kcm9wZG93bk1lbnUuZWZmZWN0T3V0O1xuICAgICAgICB2YXIgZHJvcGRvd24gPSAkKHRhcmdldCksIGRyb3Bkb3duTWVudSA9ICQoJy5kcm9wZG93bi1tZW51JywgdGFyZ2V0KTtcblxuICAgICAgICBpZiAoZHJvcGRvd24ubGVuZ3RoID4gMCkge1xuICAgICAgICAgICAgdmFyIHVkRWZmZWN0SW4gPSBkcm9wZG93bi5kYXRhKCdlZmZlY3QtaW4nKTtcbiAgICAgICAgICAgIHZhciB1ZEVmZmVjdE91dCA9IGRyb3Bkb3duLmRhdGEoJ2VmZmVjdC1vdXQnKTtcbiAgICAgICAgICAgIGlmICh1ZEVmZmVjdEluICE9PSB1bmRlZmluZWQpIHsgZWZmZWN0SW4gPSB1ZEVmZmVjdEluOyB9XG4gICAgICAgICAgICBpZiAodWRFZmZlY3RPdXQgIT09IHVuZGVmaW5lZCkgeyBlZmZlY3RPdXQgPSB1ZEVmZmVjdE91dDsgfVxuICAgICAgICB9XG5cbiAgICAgICAgcmV0dXJuIHtcbiAgICAgICAgICAgIHRhcmdldDogdGFyZ2V0LFxuICAgICAgICAgICAgZHJvcGRvd246IGRyb3Bkb3duLFxuICAgICAgICAgICAgZHJvcGRvd25NZW51OiBkcm9wZG93bk1lbnUsXG4gICAgICAgICAgICBlZmZlY3RJbjogZWZmZWN0SW4sXG4gICAgICAgICAgICBlZmZlY3RPdXQ6IGVmZmVjdE91dFxuICAgICAgICB9O1xuICAgIH0sXG4gICAgZHJvcGRvd25FZmZlY3RTdGFydDogZnVuY3Rpb24gKGRhdGEsIGVmZmVjdFRvU3RhcnQpIHtcbiAgICAgICAgaWYgKGVmZmVjdFRvU3RhcnQpIHtcbiAgICAgICAgICAgIGRhdGEuZHJvcGRvd24uYWRkQ2xhc3MoJ2Ryb3Bkb3duLWFuaW1hdGluZycpO1xuICAgICAgICAgICAgZGF0YS5kcm9wZG93bk1lbnUuYWRkQ2xhc3MoJ2FuaW1hdGVkIGRyb3Bkb3duLWFuaW1hdGVkJyk7XG4gICAgICAgICAgICBkYXRhLmRyb3Bkb3duTWVudS5hZGRDbGFzcyhlZmZlY3RUb1N0YXJ0KTtcbiAgICAgICAgfVxuICAgIH0sXG4gICAgZHJvcGRvd25FZmZlY3RFbmQ6IGZ1bmN0aW9uIChkYXRhLCBjYWxsYmFjaykge1xuICAgICAgICB2YXIgYW5pbWF0aW9uRW5kID0gJ3dlYmtpdEFuaW1hdGlvbkVuZCBtb3pBbmltYXRpb25FbmQgTVNBbmltYXRpb25FbmQgb2FuaW1hdGlvbmVuZCBhbmltYXRpb25lbmQnO1xuICAgICAgICBkYXRhLmRyb3Bkb3duLm9uZShhbmltYXRpb25FbmQsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGRhdGEuZHJvcGRvd24ucmVtb3ZlQ2xhc3MoJ2Ryb3Bkb3duLWFuaW1hdGluZycpO1xuICAgICAgICAgICAgZGF0YS5kcm9wZG93bk1lbnUucmVtb3ZlQ2xhc3MoJ2FuaW1hdGVkIGRyb3Bkb3duLWFuaW1hdGVkJyk7XG4gICAgICAgICAgICBkYXRhLmRyb3Bkb3duTWVudS5yZW1vdmVDbGFzcyhkYXRhLmVmZmVjdEluKTtcbiAgICAgICAgICAgIGRhdGEuZHJvcGRvd25NZW51LnJlbW92ZUNsYXNzKGRhdGEuZWZmZWN0T3V0KTtcblxuICAgICAgICAgICAgaWYgKHR5cGVvZiBjYWxsYmFjayA9PSAnZnVuY3Rpb24nKSB7XG4gICAgICAgICAgICAgICAgY2FsbGJhY2soKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxufVxuLy89PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuXG4vKiBCcm93c2VyIC0gRnVuY3Rpb24gPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4qICBZb3UgY2FuIG1hbmFnZSBicm93c2VyXG4qICBcbiovXG52YXIgZWRnZSA9ICdNaWNyb3NvZnQgRWRnZSc7XG52YXIgaWUxMCA9ICdJbnRlcm5ldCBFeHBsb3JlciAxMCc7XG52YXIgaWUxMSA9ICdJbnRlcm5ldCBFeHBsb3JlciAxMSc7XG52YXIgb3BlcmEgPSAnT3BlcmEnO1xudmFyIGZpcmVmb3ggPSAnTW96aWxsYSBGaXJlZm94JztcbnZhciBjaHJvbWUgPSAnR29vZ2xlIENocm9tZSc7XG52YXIgc2FmYXJpID0gJ1NhZmFyaSc7XG5cbiQuQWRtaW5CU0IuYnJvd3NlciA9IHtcbiAgICBhY3RpdmF0ZTogZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgX3RoaXMgPSB0aGlzO1xuICAgICAgICB2YXIgY2xhc3NOYW1lID0gX3RoaXMuZ2V0Q2xhc3NOYW1lKCk7XG5cbiAgICAgICAgaWYgKGNsYXNzTmFtZSAhPT0gJycpICQoJ2h0bWwnKS5hZGRDbGFzcyhfdGhpcy5nZXRDbGFzc05hbWUoKSk7XG4gICAgfSxcbiAgICBnZXRCcm93c2VyOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgIHZhciB1c2VyQWdlbnQgPSBuYXZpZ2F0b3IudXNlckFnZW50LnRvTG93ZXJDYXNlKCk7XG5cbiAgICAgICAgaWYgKC9lZGdlL2kudGVzdCh1c2VyQWdlbnQpKSB7XG4gICAgICAgICAgICByZXR1cm4gZWRnZTtcbiAgICAgICAgfSBlbHNlIGlmICgvcnY6MTEvaS50ZXN0KHVzZXJBZ2VudCkpIHtcbiAgICAgICAgICAgIHJldHVybiBpZTExO1xuICAgICAgICB9IGVsc2UgaWYgKC9tc2llIDEwL2kudGVzdCh1c2VyQWdlbnQpKSB7XG4gICAgICAgICAgICByZXR1cm4gaWUxMDtcbiAgICAgICAgfSBlbHNlIGlmICgvb3ByL2kudGVzdCh1c2VyQWdlbnQpKSB7XG4gICAgICAgICAgICByZXR1cm4gb3BlcmE7XG4gICAgICAgIH0gZWxzZSBpZiAoL2Nocm9tZS9pLnRlc3QodXNlckFnZW50KSkge1xuICAgICAgICAgICAgcmV0dXJuIGNocm9tZTtcbiAgICAgICAgfSBlbHNlIGlmICgvZmlyZWZveC9pLnRlc3QodXNlckFnZW50KSkge1xuICAgICAgICAgICAgcmV0dXJuIGZpcmVmb3g7XG4gICAgICAgIH0gZWxzZSBpZiAoISFuYXZpZ2F0b3IudXNlckFnZW50Lm1hdGNoKC9WZXJzaW9uXFwvW1xcZFxcLl0rLipTYWZhcmkvKSkge1xuICAgICAgICAgICAgcmV0dXJuIHNhZmFyaTtcbiAgICAgICAgfVxuXG4gICAgICAgIHJldHVybiB1bmRlZmluZWQ7XG4gICAgfSxcbiAgICBnZXRDbGFzc05hbWU6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgdmFyIGJyb3dzZXIgPSB0aGlzLmdldEJyb3dzZXIoKTtcblxuICAgICAgICBpZiAoYnJvd3NlciA9PT0gZWRnZSkge1xuICAgICAgICAgICAgcmV0dXJuICdlZGdlJztcbiAgICAgICAgfSBlbHNlIGlmIChicm93c2VyID09PSBpZTExKSB7XG4gICAgICAgICAgICByZXR1cm4gJ2llMTEnO1xuICAgICAgICB9IGVsc2UgaWYgKGJyb3dzZXIgPT09IGllMTApIHtcbiAgICAgICAgICAgIHJldHVybiAnaWUxMCc7XG4gICAgICAgIH0gZWxzZSBpZiAoYnJvd3NlciA9PT0gb3BlcmEpIHtcbiAgICAgICAgICAgIHJldHVybiAnb3BlcmEnO1xuICAgICAgICB9IGVsc2UgaWYgKGJyb3dzZXIgPT09IGNocm9tZSkge1xuICAgICAgICAgICAgcmV0dXJuICdjaHJvbWUnO1xuICAgICAgICB9IGVsc2UgaWYgKGJyb3dzZXIgPT09IGZpcmVmb3gpIHtcbiAgICAgICAgICAgIHJldHVybiAnZmlyZWZveCc7XG4gICAgICAgIH0gZWxzZSBpZiAoYnJvd3NlciA9PT0gc2FmYXJpKSB7XG4gICAgICAgICAgICByZXR1cm4gJ3NhZmFyaSc7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICByZXR1cm4gJyc7XG4gICAgICAgIH1cbiAgICB9XG59XG4vLz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG5cbiQoZnVuY3Rpb24gKCkge1xuICAgICQuQWRtaW5CU0IuYnJvd3Nlci5hY3RpdmF0ZSgpO1xuICAgICQuQWRtaW5CU0IubGVmdFNpZGVCYXIuYWN0aXZhdGUoKTtcbiAgICAkLkFkbWluQlNCLnJpZ2h0U2lkZUJhci5hY3RpdmF0ZSgpO1xuICAgICQuQWRtaW5CU0IucmlnaHRTaWRlQmFycy5hY3RpdmF0ZSgpO1xuICAgICQuQWRtaW5CU0IubmF2YmFyLmFjdGl2YXRlKCk7XG4gICAgJC5BZG1pbkJTQi5kcm9wZG93bk1lbnUuYWN0aXZhdGUoKTtcbiAgICAkLkFkbWluQlNCLmlucHV0LmFjdGl2YXRlKCk7XG4gICAgJC5BZG1pbkJTQi5zZWxlY3QuYWN0aXZhdGUoKTtcbiAgICAkLkFkbWluQlNCLnNlYXJjaC5hY3RpdmF0ZSgpO1xuXG4gICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7ICQoJy5wYWdlLWxvYWRlci13cmFwcGVyJykuZmFkZU91dCgpOyB9LCA1MCk7XG59KTtcbiIsImltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XG53aW5kb3cualF1ZXJ5ID0gJDtcbndpbmRvdy4kID0gJDtcbmdsb2JhbC5qUXVlcnkgPSAkO1xuXG4rZnVuY3Rpb24gKCQpIHtcbiAgJ3VzZSBzdHJpY3QnO1xuXG4gIC8vIENTUyBUUkFOU0lUSU9OIFNVUFBPUlQgKFNob3V0b3V0OiBodHRwOi8vd3d3Lm1vZGVybml6ci5jb20vKVxuICAvLyA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cblxuICBmdW5jdGlvbiB0cmFuc2l0aW9uRW5kKCkge1xuICAgIHZhciBlbCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2Jvb3RzdHJhcCcpXG5cbiAgICB2YXIgdHJhbnNFbmRFdmVudE5hbWVzID0ge1xuICAgICAgV2Via2l0VHJhbnNpdGlvbiA6ICd3ZWJraXRUcmFuc2l0aW9uRW5kJyxcbiAgICAgIE1velRyYW5zaXRpb24gICAgOiAndHJhbnNpdGlvbmVuZCcsXG4gICAgICBPVHJhbnNpdGlvbiAgICAgIDogJ29UcmFuc2l0aW9uRW5kIG90cmFuc2l0aW9uZW5kJyxcbiAgICAgIHRyYW5zaXRpb24gICAgICAgOiAndHJhbnNpdGlvbmVuZCdcbiAgICB9XG5cbiAgICBmb3IgKHZhciBuYW1lIGluIHRyYW5zRW5kRXZlbnROYW1lcykge1xuICAgICAgaWYgKGVsLnN0eWxlW25hbWVdICE9PSB1bmRlZmluZWQpIHtcbiAgICAgICAgcmV0dXJuIHsgZW5kOiB0cmFuc0VuZEV2ZW50TmFtZXNbbmFtZV0gfVxuICAgICAgfVxuICAgIH1cblxuICAgIHJldHVybiBmYWxzZSAvLyBleHBsaWNpdCBmb3IgaWU4ICggIC5fLilcbiAgfVxuXG4gIC8vIGh0dHA6Ly9ibG9nLmFsZXhtYWNjYXcuY29tL2Nzcy10cmFuc2l0aW9uc1xuICAkLmZuLmVtdWxhdGVUcmFuc2l0aW9uRW5kID0gZnVuY3Rpb24gKGR1cmF0aW9uKSB7XG4gICAgdmFyIGNhbGxlZCA9IGZhbHNlXG4gICAgdmFyICRlbCA9IHRoaXNcbiAgICAkKHRoaXMpLm9uZSgnYnNUcmFuc2l0aW9uRW5kJywgZnVuY3Rpb24gKCkgeyBjYWxsZWQgPSB0cnVlIH0pXG4gICAgdmFyIGNhbGxiYWNrID0gZnVuY3Rpb24gKCkgeyBpZiAoIWNhbGxlZCkgJCgkZWwpLnRyaWdnZXIoJC5zdXBwb3J0LnRyYW5zaXRpb24uZW5kKSB9XG4gICAgc2V0VGltZW91dChjYWxsYmFjaywgZHVyYXRpb24pXG4gICAgcmV0dXJuIHRoaXNcbiAgfVxuXG4gICQoZnVuY3Rpb24gKCkge1xuICAgICQuc3VwcG9ydC50cmFuc2l0aW9uID0gdHJhbnNpdGlvbkVuZCgpXG5cbiAgICBpZiAoISQuc3VwcG9ydC50cmFuc2l0aW9uKSByZXR1cm5cblxuICAgICQuZXZlbnQuc3BlY2lhbC5ic1RyYW5zaXRpb25FbmQgPSB7XG4gICAgICBiaW5kVHlwZTogJC5zdXBwb3J0LnRyYW5zaXRpb24uZW5kLFxuICAgICAgZGVsZWdhdGVUeXBlOiAkLnN1cHBvcnQudHJhbnNpdGlvbi5lbmQsXG4gICAgICBoYW5kbGU6IGZ1bmN0aW9uIChlKSB7XG4gICAgICAgIGlmICgkKGUudGFyZ2V0KS5pcyh0aGlzKSkgcmV0dXJuIGUuaGFuZGxlT2JqLmhhbmRsZXIuYXBwbHkodGhpcywgYXJndW1lbnRzKVxuICAgICAgfVxuICAgIH1cbiAgfSlcblxufShqUXVlcnkpO1xuXG4vKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiAqIEJvb3RzdHJhcDogYWxlcnQuanMgdjMuMy42XG4gKiBodHRwOi8vZ2V0Ym9vdHN0cmFwLmNvbS9qYXZhc2NyaXB0LyNhbGVydHNcbiAqID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuICogQ29weXJpZ2h0IDIwMTEtMjAxNSBUd2l0dGVyLCBJbmMuXG4gKiBMaWNlbnNlZCB1bmRlciBNSVQgKGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9ibG9iL21hc3Rlci9MSUNFTlNFKVxuICogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09ICovXG5cblxuK2Z1bmN0aW9uICgkKSB7XG4gICd1c2Ugc3RyaWN0JztcblxuICAvLyBBTEVSVCBDTEFTUyBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT1cblxuICB2YXIgZGlzbWlzcyA9ICdbZGF0YS1kaXNtaXNzPVwiYWxlcnRcIl0nXG4gIHZhciBBbGVydCAgID0gZnVuY3Rpb24gKGVsKSB7XG4gICAgJChlbCkub24oJ2NsaWNrJywgZGlzbWlzcywgdGhpcy5jbG9zZSlcbiAgfVxuXG4gIEFsZXJ0LlZFUlNJT04gPSAnMy4zLjYnXG5cbiAgQWxlcnQuVFJBTlNJVElPTl9EVVJBVElPTiA9IDE1MFxuXG4gIEFsZXJ0LnByb3RvdHlwZS5jbG9zZSA9IGZ1bmN0aW9uIChlKSB7XG4gICAgdmFyICR0aGlzICAgID0gJCh0aGlzKVxuICAgIHZhciBzZWxlY3RvciA9ICR0aGlzLmF0dHIoJ2RhdGEtdGFyZ2V0JylcblxuICAgIGlmICghc2VsZWN0b3IpIHtcbiAgICAgIHNlbGVjdG9yID0gJHRoaXMuYXR0cignaHJlZicpXG4gICAgICBzZWxlY3RvciA9IHNlbGVjdG9yICYmIHNlbGVjdG9yLnJlcGxhY2UoLy4qKD89I1teXFxzXSokKS8sICcnKSAvLyBzdHJpcCBmb3IgaWU3XG4gICAgfVxuXG4gICAgdmFyICRwYXJlbnQgPSAkKHNlbGVjdG9yKVxuXG4gICAgaWYgKGUpIGUucHJldmVudERlZmF1bHQoKVxuXG4gICAgaWYgKCEkcGFyZW50Lmxlbmd0aCkge1xuICAgICAgJHBhcmVudCA9ICR0aGlzLmNsb3Nlc3QoJy5hbGVydCcpXG4gICAgfVxuXG4gICAgJHBhcmVudC50cmlnZ2VyKGUgPSAkLkV2ZW50KCdjbG9zZS5icy5hbGVydCcpKVxuXG4gICAgaWYgKGUuaXNEZWZhdWx0UHJldmVudGVkKCkpIHJldHVyblxuXG4gICAgJHBhcmVudC5yZW1vdmVDbGFzcygnaW4nKVxuXG4gICAgZnVuY3Rpb24gcmVtb3ZlRWxlbWVudCgpIHtcbiAgICAgIC8vIGRldGFjaCBmcm9tIHBhcmVudCwgZmlyZSBldmVudCB0aGVuIGNsZWFuIHVwIGRhdGFcbiAgICAgICRwYXJlbnQuZGV0YWNoKCkudHJpZ2dlcignY2xvc2VkLmJzLmFsZXJ0JykucmVtb3ZlKClcbiAgICB9XG5cbiAgICAkLnN1cHBvcnQudHJhbnNpdGlvbiAmJiAkcGFyZW50Lmhhc0NsYXNzKCdmYWRlJykgP1xuICAgICAgJHBhcmVudFxuICAgICAgICAub25lKCdic1RyYW5zaXRpb25FbmQnLCByZW1vdmVFbGVtZW50KVxuICAgICAgICAuZW11bGF0ZVRyYW5zaXRpb25FbmQoQWxlcnQuVFJBTlNJVElPTl9EVVJBVElPTikgOlxuICAgICAgcmVtb3ZlRWxlbWVudCgpXG4gIH1cblxuXG4gIC8vIEFMRVJUIFBMVUdJTiBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgZnVuY3Rpb24gUGx1Z2luKG9wdGlvbikge1xuICAgIHJldHVybiB0aGlzLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgdmFyICR0aGlzID0gJCh0aGlzKVxuICAgICAgdmFyIGRhdGEgID0gJHRoaXMuZGF0YSgnYnMuYWxlcnQnKVxuXG4gICAgICBpZiAoIWRhdGEpICR0aGlzLmRhdGEoJ2JzLmFsZXJ0JywgKGRhdGEgPSBuZXcgQWxlcnQodGhpcykpKVxuICAgICAgaWYgKHR5cGVvZiBvcHRpb24gPT0gJ3N0cmluZycpIGRhdGFbb3B0aW9uXS5jYWxsKCR0aGlzKVxuICAgIH0pXG4gIH1cblxuICB2YXIgb2xkID0gJC5mbi5hbGVydFxuXG4gICQuZm4uYWxlcnQgICAgICAgICAgICAgPSBQbHVnaW5cbiAgJC5mbi5hbGVydC5Db25zdHJ1Y3RvciA9IEFsZXJ0XG5cblxuICAvLyBBTEVSVCBOTyBDT05GTElDVFxuICAvLyA9PT09PT09PT09PT09PT09PVxuXG4gICQuZm4uYWxlcnQubm9Db25mbGljdCA9IGZ1bmN0aW9uICgpIHtcbiAgICAkLmZuLmFsZXJ0ID0gb2xkXG4gICAgcmV0dXJuIHRoaXNcbiAgfVxuXG5cbiAgLy8gQUxFUlQgREFUQS1BUElcbiAgLy8gPT09PT09PT09PT09PT1cblxuICAkKGRvY3VtZW50KS5vbignY2xpY2suYnMuYWxlcnQuZGF0YS1hcGknLCBkaXNtaXNzLCBBbGVydC5wcm90b3R5cGUuY2xvc2UpXG5cbn0oalF1ZXJ5KTtcblxuLyogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4gKiBCb290c3RyYXA6IGJ1dHRvbi5qcyB2My4zLjZcbiAqIGh0dHA6Ly9nZXRib290c3RyYXAuY29tL2phdmFzY3JpcHQvI2J1dHRvbnNcbiAqID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuICogQ29weXJpZ2h0IDIwMTEtMjAxNSBUd2l0dGVyLCBJbmMuXG4gKiBMaWNlbnNlZCB1bmRlciBNSVQgKGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9ibG9iL21hc3Rlci9MSUNFTlNFKVxuICogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09ICovXG5cblxuK2Z1bmN0aW9uICgkKSB7XG4gICd1c2Ugc3RyaWN0JztcblxuICAvLyBCVVRUT04gUFVCTElDIENMQVNTIERFRklOSVRJT05cbiAgLy8gPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgdmFyIEJ1dHRvbiA9IGZ1bmN0aW9uIChlbGVtZW50LCBvcHRpb25zKSB7XG4gICAgdGhpcy4kZWxlbWVudCAgPSAkKGVsZW1lbnQpXG4gICAgdGhpcy5vcHRpb25zICAgPSAkLmV4dGVuZCh7fSwgQnV0dG9uLkRFRkFVTFRTLCBvcHRpb25zKVxuICAgIHRoaXMuaXNMb2FkaW5nID0gZmFsc2VcbiAgfVxuXG4gIEJ1dHRvbi5WRVJTSU9OICA9ICczLjMuNidcblxuICBCdXR0b24uREVGQVVMVFMgPSB7XG4gICAgbG9hZGluZ1RleHQ6ICdsb2FkaW5nLi4uJ1xuICB9XG5cbiAgQnV0dG9uLnByb3RvdHlwZS5zZXRTdGF0ZSA9IGZ1bmN0aW9uIChzdGF0ZSkge1xuICAgIHZhciBkICAgID0gJ2Rpc2FibGVkJ1xuICAgIHZhciAkZWwgID0gdGhpcy4kZWxlbWVudFxuICAgIHZhciB2YWwgID0gJGVsLmlzKCdpbnB1dCcpID8gJ3ZhbCcgOiAnaHRtbCdcbiAgICB2YXIgZGF0YSA9ICRlbC5kYXRhKClcblxuICAgIHN0YXRlICs9ICdUZXh0J1xuXG4gICAgaWYgKGRhdGEucmVzZXRUZXh0ID09IG51bGwpICRlbC5kYXRhKCdyZXNldFRleHQnLCAkZWxbdmFsXSgpKVxuXG4gICAgLy8gcHVzaCB0byBldmVudCBsb29wIHRvIGFsbG93IGZvcm1zIHRvIHN1Ym1pdFxuICAgIHNldFRpbWVvdXQoJC5wcm94eShmdW5jdGlvbiAoKSB7XG4gICAgICAkZWxbdmFsXShkYXRhW3N0YXRlXSA9PSBudWxsID8gdGhpcy5vcHRpb25zW3N0YXRlXSA6IGRhdGFbc3RhdGVdKVxuXG4gICAgICBpZiAoc3RhdGUgPT0gJ2xvYWRpbmdUZXh0Jykge1xuICAgICAgICB0aGlzLmlzTG9hZGluZyA9IHRydWVcbiAgICAgICAgJGVsLmFkZENsYXNzKGQpLmF0dHIoZCwgZClcbiAgICAgIH0gZWxzZSBpZiAodGhpcy5pc0xvYWRpbmcpIHtcbiAgICAgICAgdGhpcy5pc0xvYWRpbmcgPSBmYWxzZVxuICAgICAgICAkZWwucmVtb3ZlQ2xhc3MoZCkucmVtb3ZlQXR0cihkKVxuICAgICAgfVxuICAgIH0sIHRoaXMpLCAwKVxuICB9XG5cbiAgQnV0dG9uLnByb3RvdHlwZS50b2dnbGUgPSBmdW5jdGlvbiAoKSB7XG4gICAgdmFyIGNoYW5nZWQgPSB0cnVlXG4gICAgdmFyICRwYXJlbnQgPSB0aGlzLiRlbGVtZW50LmNsb3Nlc3QoJ1tkYXRhLXRvZ2dsZT1cImJ1dHRvbnNcIl0nKVxuXG4gICAgaWYgKCRwYXJlbnQubGVuZ3RoKSB7XG4gICAgICB2YXIgJGlucHV0ID0gdGhpcy4kZWxlbWVudC5maW5kKCdpbnB1dCcpXG4gICAgICBpZiAoJGlucHV0LnByb3AoJ3R5cGUnKSA9PSAncmFkaW8nKSB7XG4gICAgICAgIGlmICgkaW5wdXQucHJvcCgnY2hlY2tlZCcpKSBjaGFuZ2VkID0gZmFsc2VcbiAgICAgICAgJHBhcmVudC5maW5kKCcuYWN0aXZlJykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpXG4gICAgICAgIHRoaXMuJGVsZW1lbnQuYWRkQ2xhc3MoJ2FjdGl2ZScpXG4gICAgICB9IGVsc2UgaWYgKCRpbnB1dC5wcm9wKCd0eXBlJykgPT0gJ2NoZWNrYm94Jykge1xuICAgICAgICBpZiAoKCRpbnB1dC5wcm9wKCdjaGVja2VkJykpICE9PSB0aGlzLiRlbGVtZW50Lmhhc0NsYXNzKCdhY3RpdmUnKSkgY2hhbmdlZCA9IGZhbHNlXG4gICAgICAgIHRoaXMuJGVsZW1lbnQudG9nZ2xlQ2xhc3MoJ2FjdGl2ZScpXG4gICAgICB9XG4gICAgICAkaW5wdXQucHJvcCgnY2hlY2tlZCcsIHRoaXMuJGVsZW1lbnQuaGFzQ2xhc3MoJ2FjdGl2ZScpKVxuICAgICAgaWYgKGNoYW5nZWQpICRpbnB1dC50cmlnZ2VyKCdjaGFuZ2UnKVxuICAgIH0gZWxzZSB7XG4gICAgICB0aGlzLiRlbGVtZW50LmF0dHIoJ2FyaWEtcHJlc3NlZCcsICF0aGlzLiRlbGVtZW50Lmhhc0NsYXNzKCdhY3RpdmUnKSlcbiAgICAgIHRoaXMuJGVsZW1lbnQudG9nZ2xlQ2xhc3MoJ2FjdGl2ZScpXG4gICAgfVxuICB9XG5cblxuICAvLyBCVVRUT04gUExVR0lOIERFRklOSVRJT05cbiAgLy8gPT09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgZnVuY3Rpb24gUGx1Z2luKG9wdGlvbikge1xuICAgIHJldHVybiB0aGlzLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgdmFyICR0aGlzICAgPSAkKHRoaXMpXG4gICAgICB2YXIgZGF0YSAgICA9ICR0aGlzLmRhdGEoJ2JzLmJ1dHRvbicpXG4gICAgICB2YXIgb3B0aW9ucyA9IHR5cGVvZiBvcHRpb24gPT0gJ29iamVjdCcgJiYgb3B0aW9uXG5cbiAgICAgIGlmICghZGF0YSkgJHRoaXMuZGF0YSgnYnMuYnV0dG9uJywgKGRhdGEgPSBuZXcgQnV0dG9uKHRoaXMsIG9wdGlvbnMpKSlcblxuICAgICAgaWYgKG9wdGlvbiA9PSAndG9nZ2xlJykgZGF0YS50b2dnbGUoKVxuICAgICAgZWxzZSBpZiAob3B0aW9uKSBkYXRhLnNldFN0YXRlKG9wdGlvbilcbiAgICB9KVxuICB9XG5cbiAgdmFyIG9sZCA9ICQuZm4uYnV0dG9uXG5cbiAgJC5mbi5idXR0b24gICAgICAgICAgICAgPSBQbHVnaW5cbiAgJC5mbi5idXR0b24uQ29uc3RydWN0b3IgPSBCdXR0b25cblxuXG4gIC8vIEJVVFRPTiBOTyBDT05GTElDVFxuICAvLyA9PT09PT09PT09PT09PT09PT1cblxuICAkLmZuLmJ1dHRvbi5ub0NvbmZsaWN0ID0gZnVuY3Rpb24gKCkge1xuICAgICQuZm4uYnV0dG9uID0gb2xkXG4gICAgcmV0dXJuIHRoaXNcbiAgfVxuXG5cbiAgLy8gQlVUVE9OIERBVEEtQVBJXG4gIC8vID09PT09PT09PT09PT09PVxuXG4gICQoZG9jdW1lbnQpXG4gICAgLm9uKCdjbGljay5icy5idXR0b24uZGF0YS1hcGknLCAnW2RhdGEtdG9nZ2xlXj1cImJ1dHRvblwiXScsIGZ1bmN0aW9uIChlKSB7XG4gICAgICB2YXIgJGJ0biA9ICQoZS50YXJnZXQpXG4gICAgICBpZiAoISRidG4uaGFzQ2xhc3MoJ2J0bicpKSAkYnRuID0gJGJ0bi5jbG9zZXN0KCcuYnRuJylcbiAgICAgIFBsdWdpbi5jYWxsKCRidG4sICd0b2dnbGUnKVxuICAgICAgaWYgKCEoJChlLnRhcmdldCkuaXMoJ2lucHV0W3R5cGU9XCJyYWRpb1wiXScpIHx8ICQoZS50YXJnZXQpLmlzKCdpbnB1dFt0eXBlPVwiY2hlY2tib3hcIl0nKSkpIGUucHJldmVudERlZmF1bHQoKVxuICAgIH0pXG4gICAgLm9uKCdmb2N1cy5icy5idXR0b24uZGF0YS1hcGkgYmx1ci5icy5idXR0b24uZGF0YS1hcGknLCAnW2RhdGEtdG9nZ2xlXj1cImJ1dHRvblwiXScsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAkKGUudGFyZ2V0KS5jbG9zZXN0KCcuYnRuJykudG9nZ2xlQ2xhc3MoJ2ZvY3VzJywgL15mb2N1cyhpbik/JC8udGVzdChlLnR5cGUpKVxuICAgIH0pXG5cbn0oalF1ZXJ5KTtcblxuLyogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4gKiBCb290c3RyYXA6IGNhcm91c2VsLmpzIHYzLjMuNlxuICogaHR0cDovL2dldGJvb3RzdHJhcC5jb20vamF2YXNjcmlwdC8jY2Fyb3VzZWxcbiAqID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuICogQ29weXJpZ2h0IDIwMTEtMjAxNSBUd2l0dGVyLCBJbmMuXG4gKiBMaWNlbnNlZCB1bmRlciBNSVQgKGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9ibG9iL21hc3Rlci9MSUNFTlNFKVxuICogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09ICovXG5cblxuK2Z1bmN0aW9uICgkKSB7XG4gICd1c2Ugc3RyaWN0JztcblxuICAvLyBDQVJPVVNFTCBDTEFTUyBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT09PT1cblxuICB2YXIgQ2Fyb3VzZWwgPSBmdW5jdGlvbiAoZWxlbWVudCwgb3B0aW9ucykge1xuICAgIHRoaXMuJGVsZW1lbnQgICAgPSAkKGVsZW1lbnQpXG4gICAgdGhpcy4kaW5kaWNhdG9ycyA9IHRoaXMuJGVsZW1lbnQuZmluZCgnLmNhcm91c2VsLWluZGljYXRvcnMnKVxuICAgIHRoaXMub3B0aW9ucyAgICAgPSBvcHRpb25zXG4gICAgdGhpcy5wYXVzZWQgICAgICA9IG51bGxcbiAgICB0aGlzLnNsaWRpbmcgICAgID0gbnVsbFxuICAgIHRoaXMuaW50ZXJ2YWwgICAgPSBudWxsXG4gICAgdGhpcy4kYWN0aXZlICAgICA9IG51bGxcbiAgICB0aGlzLiRpdGVtcyAgICAgID0gbnVsbFxuXG4gICAgdGhpcy5vcHRpb25zLmtleWJvYXJkICYmIHRoaXMuJGVsZW1lbnQub24oJ2tleWRvd24uYnMuY2Fyb3VzZWwnLCAkLnByb3h5KHRoaXMua2V5ZG93biwgdGhpcykpXG5cbiAgICB0aGlzLm9wdGlvbnMucGF1c2UgPT0gJ2hvdmVyJyAmJiAhKCdvbnRvdWNoc3RhcnQnIGluIGRvY3VtZW50LmRvY3VtZW50RWxlbWVudCkgJiYgdGhpcy4kZWxlbWVudFxuICAgICAgLm9uKCdtb3VzZWVudGVyLmJzLmNhcm91c2VsJywgJC5wcm94eSh0aGlzLnBhdXNlLCB0aGlzKSlcbiAgICAgIC5vbignbW91c2VsZWF2ZS5icy5jYXJvdXNlbCcsICQucHJveHkodGhpcy5jeWNsZSwgdGhpcykpXG4gIH1cblxuICBDYXJvdXNlbC5WRVJTSU9OICA9ICczLjMuNidcblxuICBDYXJvdXNlbC5UUkFOU0lUSU9OX0RVUkFUSU9OID0gNjAwXG5cbiAgQ2Fyb3VzZWwuREVGQVVMVFMgPSB7XG4gICAgaW50ZXJ2YWw6IDUwMDAsXG4gICAgcGF1c2U6ICdob3ZlcicsXG4gICAgd3JhcDogdHJ1ZSxcbiAgICBrZXlib2FyZDogdHJ1ZVxuICB9XG5cbiAgQ2Fyb3VzZWwucHJvdG90eXBlLmtleWRvd24gPSBmdW5jdGlvbiAoZSkge1xuICAgIGlmICgvaW5wdXR8dGV4dGFyZWEvaS50ZXN0KGUudGFyZ2V0LnRhZ05hbWUpKSByZXR1cm5cbiAgICBzd2l0Y2ggKGUud2hpY2gpIHtcbiAgICAgIGNhc2UgMzc6IHRoaXMucHJldigpOyBicmVha1xuICAgICAgY2FzZSAzOTogdGhpcy5uZXh0KCk7IGJyZWFrXG4gICAgICBkZWZhdWx0OiByZXR1cm5cbiAgICB9XG5cbiAgICBlLnByZXZlbnREZWZhdWx0KClcbiAgfVxuXG4gIENhcm91c2VsLnByb3RvdHlwZS5jeWNsZSA9IGZ1bmN0aW9uIChlKSB7XG4gICAgZSB8fCAodGhpcy5wYXVzZWQgPSBmYWxzZSlcblxuICAgIHRoaXMuaW50ZXJ2YWwgJiYgY2xlYXJJbnRlcnZhbCh0aGlzLmludGVydmFsKVxuXG4gICAgdGhpcy5vcHRpb25zLmludGVydmFsXG4gICAgICAmJiAhdGhpcy5wYXVzZWRcbiAgICAgICYmICh0aGlzLmludGVydmFsID0gc2V0SW50ZXJ2YWwoJC5wcm94eSh0aGlzLm5leHQsIHRoaXMpLCB0aGlzLm9wdGlvbnMuaW50ZXJ2YWwpKVxuXG4gICAgcmV0dXJuIHRoaXNcbiAgfVxuXG4gIENhcm91c2VsLnByb3RvdHlwZS5nZXRJdGVtSW5kZXggPSBmdW5jdGlvbiAoaXRlbSkge1xuICAgIHRoaXMuJGl0ZW1zID0gaXRlbS5wYXJlbnQoKS5jaGlsZHJlbignLml0ZW0nKVxuICAgIHJldHVybiB0aGlzLiRpdGVtcy5pbmRleChpdGVtIHx8IHRoaXMuJGFjdGl2ZSlcbiAgfVxuXG4gIENhcm91c2VsLnByb3RvdHlwZS5nZXRJdGVtRm9yRGlyZWN0aW9uID0gZnVuY3Rpb24gKGRpcmVjdGlvbiwgYWN0aXZlKSB7XG4gICAgdmFyIGFjdGl2ZUluZGV4ID0gdGhpcy5nZXRJdGVtSW5kZXgoYWN0aXZlKVxuICAgIHZhciB3aWxsV3JhcCA9IChkaXJlY3Rpb24gPT0gJ3ByZXYnICYmIGFjdGl2ZUluZGV4ID09PSAwKVxuICAgICAgICAgICAgICAgIHx8IChkaXJlY3Rpb24gPT0gJ25leHQnICYmIGFjdGl2ZUluZGV4ID09ICh0aGlzLiRpdGVtcy5sZW5ndGggLSAxKSlcbiAgICBpZiAod2lsbFdyYXAgJiYgIXRoaXMub3B0aW9ucy53cmFwKSByZXR1cm4gYWN0aXZlXG4gICAgdmFyIGRlbHRhID0gZGlyZWN0aW9uID09ICdwcmV2JyA/IC0xIDogMVxuICAgIHZhciBpdGVtSW5kZXggPSAoYWN0aXZlSW5kZXggKyBkZWx0YSkgJSB0aGlzLiRpdGVtcy5sZW5ndGhcbiAgICByZXR1cm4gdGhpcy4kaXRlbXMuZXEoaXRlbUluZGV4KVxuICB9XG5cbiAgQ2Fyb3VzZWwucHJvdG90eXBlLnRvID0gZnVuY3Rpb24gKHBvcykge1xuICAgIHZhciB0aGF0ICAgICAgICA9IHRoaXNcbiAgICB2YXIgYWN0aXZlSW5kZXggPSB0aGlzLmdldEl0ZW1JbmRleCh0aGlzLiRhY3RpdmUgPSB0aGlzLiRlbGVtZW50LmZpbmQoJy5pdGVtLmFjdGl2ZScpKVxuXG4gICAgaWYgKHBvcyA+ICh0aGlzLiRpdGVtcy5sZW5ndGggLSAxKSB8fCBwb3MgPCAwKSByZXR1cm5cblxuICAgIGlmICh0aGlzLnNsaWRpbmcpICAgICAgIHJldHVybiB0aGlzLiRlbGVtZW50Lm9uZSgnc2xpZC5icy5jYXJvdXNlbCcsIGZ1bmN0aW9uICgpIHsgdGhhdC50byhwb3MpIH0pIC8vIHllcywgXCJzbGlkXCJcbiAgICBpZiAoYWN0aXZlSW5kZXggPT0gcG9zKSByZXR1cm4gdGhpcy5wYXVzZSgpLmN5Y2xlKClcblxuICAgIHJldHVybiB0aGlzLnNsaWRlKHBvcyA+IGFjdGl2ZUluZGV4ID8gJ25leHQnIDogJ3ByZXYnLCB0aGlzLiRpdGVtcy5lcShwb3MpKVxuICB9XG5cbiAgQ2Fyb3VzZWwucHJvdG90eXBlLnBhdXNlID0gZnVuY3Rpb24gKGUpIHtcbiAgICBlIHx8ICh0aGlzLnBhdXNlZCA9IHRydWUpXG5cbiAgICBpZiAodGhpcy4kZWxlbWVudC5maW5kKCcubmV4dCwgLnByZXYnKS5sZW5ndGggJiYgJC5zdXBwb3J0LnRyYW5zaXRpb24pIHtcbiAgICAgIHRoaXMuJGVsZW1lbnQudHJpZ2dlcigkLnN1cHBvcnQudHJhbnNpdGlvbi5lbmQpXG4gICAgICB0aGlzLmN5Y2xlKHRydWUpXG4gICAgfVxuXG4gICAgdGhpcy5pbnRlcnZhbCA9IGNsZWFySW50ZXJ2YWwodGhpcy5pbnRlcnZhbClcblxuICAgIHJldHVybiB0aGlzXG4gIH1cblxuICBDYXJvdXNlbC5wcm90b3R5cGUubmV4dCA9IGZ1bmN0aW9uICgpIHtcbiAgICBpZiAodGhpcy5zbGlkaW5nKSByZXR1cm5cbiAgICByZXR1cm4gdGhpcy5zbGlkZSgnbmV4dCcpXG4gIH1cblxuICBDYXJvdXNlbC5wcm90b3R5cGUucHJldiA9IGZ1bmN0aW9uICgpIHtcbiAgICBpZiAodGhpcy5zbGlkaW5nKSByZXR1cm5cbiAgICByZXR1cm4gdGhpcy5zbGlkZSgncHJldicpXG4gIH1cblxuICBDYXJvdXNlbC5wcm90b3R5cGUuc2xpZGUgPSBmdW5jdGlvbiAodHlwZSwgbmV4dCkge1xuICAgIHZhciAkYWN0aXZlICAgPSB0aGlzLiRlbGVtZW50LmZpbmQoJy5pdGVtLmFjdGl2ZScpXG4gICAgdmFyICRuZXh0ICAgICA9IG5leHQgfHwgdGhpcy5nZXRJdGVtRm9yRGlyZWN0aW9uKHR5cGUsICRhY3RpdmUpXG4gICAgdmFyIGlzQ3ljbGluZyA9IHRoaXMuaW50ZXJ2YWxcbiAgICB2YXIgZGlyZWN0aW9uID0gdHlwZSA9PSAnbmV4dCcgPyAnbGVmdCcgOiAncmlnaHQnXG4gICAgdmFyIHRoYXQgICAgICA9IHRoaXNcblxuICAgIGlmICgkbmV4dC5oYXNDbGFzcygnYWN0aXZlJykpIHJldHVybiAodGhpcy5zbGlkaW5nID0gZmFsc2UpXG5cbiAgICB2YXIgcmVsYXRlZFRhcmdldCA9ICRuZXh0WzBdXG4gICAgdmFyIHNsaWRlRXZlbnQgPSAkLkV2ZW50KCdzbGlkZS5icy5jYXJvdXNlbCcsIHtcbiAgICAgIHJlbGF0ZWRUYXJnZXQ6IHJlbGF0ZWRUYXJnZXQsXG4gICAgICBkaXJlY3Rpb246IGRpcmVjdGlvblxuICAgIH0pXG4gICAgdGhpcy4kZWxlbWVudC50cmlnZ2VyKHNsaWRlRXZlbnQpXG4gICAgaWYgKHNsaWRlRXZlbnQuaXNEZWZhdWx0UHJldmVudGVkKCkpIHJldHVyblxuXG4gICAgdGhpcy5zbGlkaW5nID0gdHJ1ZVxuXG4gICAgaXNDeWNsaW5nICYmIHRoaXMucGF1c2UoKVxuXG4gICAgaWYgKHRoaXMuJGluZGljYXRvcnMubGVuZ3RoKSB7XG4gICAgICB0aGlzLiRpbmRpY2F0b3JzLmZpbmQoJy5hY3RpdmUnKS5yZW1vdmVDbGFzcygnYWN0aXZlJylcbiAgICAgIHZhciAkbmV4dEluZGljYXRvciA9ICQodGhpcy4kaW5kaWNhdG9ycy5jaGlsZHJlbigpW3RoaXMuZ2V0SXRlbUluZGV4KCRuZXh0KV0pXG4gICAgICAkbmV4dEluZGljYXRvciAmJiAkbmV4dEluZGljYXRvci5hZGRDbGFzcygnYWN0aXZlJylcbiAgICB9XG5cbiAgICB2YXIgc2xpZEV2ZW50ID0gJC5FdmVudCgnc2xpZC5icy5jYXJvdXNlbCcsIHsgcmVsYXRlZFRhcmdldDogcmVsYXRlZFRhcmdldCwgZGlyZWN0aW9uOiBkaXJlY3Rpb24gfSkgLy8geWVzLCBcInNsaWRcIlxuICAgIGlmICgkLnN1cHBvcnQudHJhbnNpdGlvbiAmJiB0aGlzLiRlbGVtZW50Lmhhc0NsYXNzKCdzbGlkZScpKSB7XG4gICAgICAkbmV4dC5hZGRDbGFzcyh0eXBlKVxuICAgICAgJG5leHRbMF0ub2Zmc2V0V2lkdGggLy8gZm9yY2UgcmVmbG93XG4gICAgICAkYWN0aXZlLmFkZENsYXNzKGRpcmVjdGlvbilcbiAgICAgICRuZXh0LmFkZENsYXNzKGRpcmVjdGlvbilcbiAgICAgICRhY3RpdmVcbiAgICAgICAgLm9uZSgnYnNUcmFuc2l0aW9uRW5kJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICRuZXh0LnJlbW92ZUNsYXNzKFt0eXBlLCBkaXJlY3Rpb25dLmpvaW4oJyAnKSkuYWRkQ2xhc3MoJ2FjdGl2ZScpXG4gICAgICAgICAgJGFjdGl2ZS5yZW1vdmVDbGFzcyhbJ2FjdGl2ZScsIGRpcmVjdGlvbl0uam9pbignICcpKVxuICAgICAgICAgIHRoYXQuc2xpZGluZyA9IGZhbHNlXG4gICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICB0aGF0LiRlbGVtZW50LnRyaWdnZXIoc2xpZEV2ZW50KVxuICAgICAgICAgIH0sIDApXG4gICAgICAgIH0pXG4gICAgICAgIC5lbXVsYXRlVHJhbnNpdGlvbkVuZChDYXJvdXNlbC5UUkFOU0lUSU9OX0RVUkFUSU9OKVxuICAgIH0gZWxzZSB7XG4gICAgICAkYWN0aXZlLnJlbW92ZUNsYXNzKCdhY3RpdmUnKVxuICAgICAgJG5leHQuYWRkQ2xhc3MoJ2FjdGl2ZScpXG4gICAgICB0aGlzLnNsaWRpbmcgPSBmYWxzZVxuICAgICAgdGhpcy4kZWxlbWVudC50cmlnZ2VyKHNsaWRFdmVudClcbiAgICB9XG5cbiAgICBpc0N5Y2xpbmcgJiYgdGhpcy5jeWNsZSgpXG5cbiAgICByZXR1cm4gdGhpc1xuICB9XG5cblxuICAvLyBDQVJPVVNFTCBQTFVHSU4gREVGSU5JVElPTlxuICAvLyA9PT09PT09PT09PT09PT09PT09PT09PT09PVxuXG4gIGZ1bmN0aW9uIFBsdWdpbihvcHRpb24pIHtcbiAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgIHZhciAkdGhpcyAgID0gJCh0aGlzKVxuICAgICAgdmFyIGRhdGEgICAgPSAkdGhpcy5kYXRhKCdicy5jYXJvdXNlbCcpXG4gICAgICB2YXIgb3B0aW9ucyA9ICQuZXh0ZW5kKHt9LCBDYXJvdXNlbC5ERUZBVUxUUywgJHRoaXMuZGF0YSgpLCB0eXBlb2Ygb3B0aW9uID09ICdvYmplY3QnICYmIG9wdGlvbilcbiAgICAgIHZhciBhY3Rpb24gID0gdHlwZW9mIG9wdGlvbiA9PSAnc3RyaW5nJyA/IG9wdGlvbiA6IG9wdGlvbnMuc2xpZGVcblxuICAgICAgaWYgKCFkYXRhKSAkdGhpcy5kYXRhKCdicy5jYXJvdXNlbCcsIChkYXRhID0gbmV3IENhcm91c2VsKHRoaXMsIG9wdGlvbnMpKSlcbiAgICAgIGlmICh0eXBlb2Ygb3B0aW9uID09ICdudW1iZXInKSBkYXRhLnRvKG9wdGlvbilcbiAgICAgIGVsc2UgaWYgKGFjdGlvbikgZGF0YVthY3Rpb25dKClcbiAgICAgIGVsc2UgaWYgKG9wdGlvbnMuaW50ZXJ2YWwpIGRhdGEucGF1c2UoKS5jeWNsZSgpXG4gICAgfSlcbiAgfVxuXG4gIHZhciBvbGQgPSAkLmZuLmNhcm91c2VsXG5cbiAgJC5mbi5jYXJvdXNlbCAgICAgICAgICAgICA9IFBsdWdpblxuICAkLmZuLmNhcm91c2VsLkNvbnN0cnVjdG9yID0gQ2Fyb3VzZWxcblxuXG4gIC8vIENBUk9VU0VMIE5PIENPTkZMSUNUXG4gIC8vID09PT09PT09PT09PT09PT09PT09XG5cbiAgJC5mbi5jYXJvdXNlbC5ub0NvbmZsaWN0ID0gZnVuY3Rpb24gKCkge1xuICAgICQuZm4uY2Fyb3VzZWwgPSBvbGRcbiAgICByZXR1cm4gdGhpc1xuICB9XG5cblxuICAvLyBDQVJPVVNFTCBEQVRBLUFQSVxuICAvLyA9PT09PT09PT09PT09PT09PVxuXG4gIHZhciBjbGlja0hhbmRsZXIgPSBmdW5jdGlvbiAoZSkge1xuICAgIHZhciBocmVmXG4gICAgdmFyICR0aGlzICAgPSAkKHRoaXMpXG4gICAgdmFyICR0YXJnZXQgPSAkKCR0aGlzLmF0dHIoJ2RhdGEtdGFyZ2V0JykgfHwgKGhyZWYgPSAkdGhpcy5hdHRyKCdocmVmJykpICYmIGhyZWYucmVwbGFjZSgvLiooPz0jW15cXHNdKyQpLywgJycpKSAvLyBzdHJpcCBmb3IgaWU3XG4gICAgaWYgKCEkdGFyZ2V0Lmhhc0NsYXNzKCdjYXJvdXNlbCcpKSByZXR1cm5cbiAgICB2YXIgb3B0aW9ucyA9ICQuZXh0ZW5kKHt9LCAkdGFyZ2V0LmRhdGEoKSwgJHRoaXMuZGF0YSgpKVxuICAgIHZhciBzbGlkZUluZGV4ID0gJHRoaXMuYXR0cignZGF0YS1zbGlkZS10bycpXG4gICAgaWYgKHNsaWRlSW5kZXgpIG9wdGlvbnMuaW50ZXJ2YWwgPSBmYWxzZVxuXG4gICAgUGx1Z2luLmNhbGwoJHRhcmdldCwgb3B0aW9ucylcblxuICAgIGlmIChzbGlkZUluZGV4KSB7XG4gICAgICAkdGFyZ2V0LmRhdGEoJ2JzLmNhcm91c2VsJykudG8oc2xpZGVJbmRleClcbiAgICB9XG5cbiAgICBlLnByZXZlbnREZWZhdWx0KClcbiAgfVxuXG4gICQoZG9jdW1lbnQpXG4gICAgLm9uKCdjbGljay5icy5jYXJvdXNlbC5kYXRhLWFwaScsICdbZGF0YS1zbGlkZV0nLCBjbGlja0hhbmRsZXIpXG4gICAgLm9uKCdjbGljay5icy5jYXJvdXNlbC5kYXRhLWFwaScsICdbZGF0YS1zbGlkZS10b10nLCBjbGlja0hhbmRsZXIpXG5cbiAgJCh3aW5kb3cpLm9uKCdsb2FkJywgZnVuY3Rpb24gKCkge1xuICAgICQoJ1tkYXRhLXJpZGU9XCJjYXJvdXNlbFwiXScpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgdmFyICRjYXJvdXNlbCA9ICQodGhpcylcbiAgICAgIFBsdWdpbi5jYWxsKCRjYXJvdXNlbCwgJGNhcm91c2VsLmRhdGEoKSlcbiAgICB9KVxuICB9KVxuXG59KGpRdWVyeSk7XG5cbi8qID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuICogQm9vdHN0cmFwOiBjb2xsYXBzZS5qcyB2My4zLjZcbiAqIGh0dHA6Ly9nZXRib290c3RyYXAuY29tL2phdmFzY3JpcHQvI2NvbGxhcHNlXG4gKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiAqIENvcHlyaWdodCAyMDExLTIwMTUgVHdpdHRlciwgSW5jLlxuICogTGljZW5zZWQgdW5kZXIgTUlUIChodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvYmxvYi9tYXN0ZXIvTElDRU5TRSlcbiAqID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSAqL1xuXG5cbitmdW5jdGlvbiAoJCkge1xuICAndXNlIHN0cmljdCc7XG5cbiAgLy8gQ09MTEFQU0UgUFVCTElDIENMQVNTIERFRklOSVRJT05cbiAgLy8gPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cblxuICB2YXIgQ29sbGFwc2UgPSBmdW5jdGlvbiAoZWxlbWVudCwgb3B0aW9ucykge1xuICAgIHRoaXMuJGVsZW1lbnQgICAgICA9ICQoZWxlbWVudClcbiAgICB0aGlzLm9wdGlvbnMgICAgICAgPSAkLmV4dGVuZCh7fSwgQ29sbGFwc2UuREVGQVVMVFMsIG9wdGlvbnMpXG4gICAgdGhpcy4kdHJpZ2dlciAgICAgID0gJCgnW2RhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIl1baHJlZj1cIiMnICsgZWxlbWVudC5pZCArICdcIl0sJyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAnW2RhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIl1bZGF0YS10YXJnZXQ9XCIjJyArIGVsZW1lbnQuaWQgKyAnXCJdJylcbiAgICB0aGlzLnRyYW5zaXRpb25pbmcgPSBudWxsXG5cbiAgICBpZiAodGhpcy5vcHRpb25zLnBhcmVudCkge1xuICAgICAgdGhpcy4kcGFyZW50ID0gdGhpcy5nZXRQYXJlbnQoKVxuICAgIH0gZWxzZSB7XG4gICAgICB0aGlzLmFkZEFyaWFBbmRDb2xsYXBzZWRDbGFzcyh0aGlzLiRlbGVtZW50LCB0aGlzLiR0cmlnZ2VyKVxuICAgIH1cblxuICAgIGlmICh0aGlzLm9wdGlvbnMudG9nZ2xlKSB0aGlzLnRvZ2dsZSgpXG4gIH1cblxuICBDb2xsYXBzZS5WRVJTSU9OICA9ICczLjMuNidcblxuICBDb2xsYXBzZS5UUkFOU0lUSU9OX0RVUkFUSU9OID0gMzUwXG5cbiAgQ29sbGFwc2UuREVGQVVMVFMgPSB7XG4gICAgdG9nZ2xlOiB0cnVlXG4gIH1cblxuICBDb2xsYXBzZS5wcm90b3R5cGUuZGltZW5zaW9uID0gZnVuY3Rpb24gKCkge1xuICAgIHZhciBoYXNXaWR0aCA9IHRoaXMuJGVsZW1lbnQuaGFzQ2xhc3MoJ3dpZHRoJylcbiAgICByZXR1cm4gaGFzV2lkdGggPyAnd2lkdGgnIDogJ2hlaWdodCdcbiAgfVxuXG4gIENvbGxhcHNlLnByb3RvdHlwZS5zaG93ID0gZnVuY3Rpb24gKCkge1xuICAgIGlmICh0aGlzLnRyYW5zaXRpb25pbmcgfHwgdGhpcy4kZWxlbWVudC5oYXNDbGFzcygnaW4nKSkgcmV0dXJuXG5cbiAgICB2YXIgYWN0aXZlc0RhdGFcbiAgICB2YXIgYWN0aXZlcyA9IHRoaXMuJHBhcmVudCAmJiB0aGlzLiRwYXJlbnQuY2hpbGRyZW4oJy5wYW5lbCcpLmNoaWxkcmVuKCcuaW4sIC5jb2xsYXBzaW5nJylcblxuICAgIGlmIChhY3RpdmVzICYmIGFjdGl2ZXMubGVuZ3RoKSB7XG4gICAgICBhY3RpdmVzRGF0YSA9IGFjdGl2ZXMuZGF0YSgnYnMuY29sbGFwc2UnKVxuICAgICAgaWYgKGFjdGl2ZXNEYXRhICYmIGFjdGl2ZXNEYXRhLnRyYW5zaXRpb25pbmcpIHJldHVyblxuICAgIH1cblxuICAgIHZhciBzdGFydEV2ZW50ID0gJC5FdmVudCgnc2hvdy5icy5jb2xsYXBzZScpXG4gICAgdGhpcy4kZWxlbWVudC50cmlnZ2VyKHN0YXJ0RXZlbnQpXG4gICAgaWYgKHN0YXJ0RXZlbnQuaXNEZWZhdWx0UHJldmVudGVkKCkpIHJldHVyblxuXG4gICAgaWYgKGFjdGl2ZXMgJiYgYWN0aXZlcy5sZW5ndGgpIHtcbiAgICAgIFBsdWdpbi5jYWxsKGFjdGl2ZXMsICdoaWRlJylcbiAgICAgIGFjdGl2ZXNEYXRhIHx8IGFjdGl2ZXMuZGF0YSgnYnMuY29sbGFwc2UnLCBudWxsKVxuICAgIH1cblxuICAgIHZhciBkaW1lbnNpb24gPSB0aGlzLmRpbWVuc2lvbigpXG5cbiAgICB0aGlzLiRlbGVtZW50XG4gICAgICAucmVtb3ZlQ2xhc3MoJ2NvbGxhcHNlJylcbiAgICAgIC5hZGRDbGFzcygnY29sbGFwc2luZycpW2RpbWVuc2lvbl0oMClcbiAgICAgIC5hdHRyKCdhcmlhLWV4cGFuZGVkJywgdHJ1ZSlcblxuICAgIHRoaXMuJHRyaWdnZXJcbiAgICAgIC5yZW1vdmVDbGFzcygnY29sbGFwc2VkJylcbiAgICAgIC5hdHRyKCdhcmlhLWV4cGFuZGVkJywgdHJ1ZSlcblxuICAgIHRoaXMudHJhbnNpdGlvbmluZyA9IDFcblxuICAgIHZhciBjb21wbGV0ZSA9IGZ1bmN0aW9uICgpIHtcbiAgICAgIHRoaXMuJGVsZW1lbnRcbiAgICAgICAgLnJlbW92ZUNsYXNzKCdjb2xsYXBzaW5nJylcbiAgICAgICAgLmFkZENsYXNzKCdjb2xsYXBzZSBpbicpW2RpbWVuc2lvbl0oJycpXG4gICAgICB0aGlzLnRyYW5zaXRpb25pbmcgPSAwXG4gICAgICB0aGlzLiRlbGVtZW50XG4gICAgICAgIC50cmlnZ2VyKCdzaG93bi5icy5jb2xsYXBzZScpXG4gICAgfVxuXG4gICAgaWYgKCEkLnN1cHBvcnQudHJhbnNpdGlvbikgcmV0dXJuIGNvbXBsZXRlLmNhbGwodGhpcylcblxuICAgIHZhciBzY3JvbGxTaXplID0gJC5jYW1lbENhc2UoWydzY3JvbGwnLCBkaW1lbnNpb25dLmpvaW4oJy0nKSlcblxuICAgIHRoaXMuJGVsZW1lbnRcbiAgICAgIC5vbmUoJ2JzVHJhbnNpdGlvbkVuZCcsICQucHJveHkoY29tcGxldGUsIHRoaXMpKVxuICAgICAgLmVtdWxhdGVUcmFuc2l0aW9uRW5kKENvbGxhcHNlLlRSQU5TSVRJT05fRFVSQVRJT04pW2RpbWVuc2lvbl0odGhpcy4kZWxlbWVudFswXVtzY3JvbGxTaXplXSlcbiAgfVxuXG4gIENvbGxhcHNlLnByb3RvdHlwZS5oaWRlID0gZnVuY3Rpb24gKCkge1xuICAgIGlmICh0aGlzLnRyYW5zaXRpb25pbmcgfHwgIXRoaXMuJGVsZW1lbnQuaGFzQ2xhc3MoJ2luJykpIHJldHVyblxuXG4gICAgdmFyIHN0YXJ0RXZlbnQgPSAkLkV2ZW50KCdoaWRlLmJzLmNvbGxhcHNlJylcbiAgICB0aGlzLiRlbGVtZW50LnRyaWdnZXIoc3RhcnRFdmVudClcbiAgICBpZiAoc3RhcnRFdmVudC5pc0RlZmF1bHRQcmV2ZW50ZWQoKSkgcmV0dXJuXG5cbiAgICB2YXIgZGltZW5zaW9uID0gdGhpcy5kaW1lbnNpb24oKVxuXG4gICAgdGhpcy4kZWxlbWVudFtkaW1lbnNpb25dKHRoaXMuJGVsZW1lbnRbZGltZW5zaW9uXSgpKVswXS5vZmZzZXRIZWlnaHRcblxuICAgIHRoaXMuJGVsZW1lbnRcbiAgICAgIC5hZGRDbGFzcygnY29sbGFwc2luZycpXG4gICAgICAucmVtb3ZlQ2xhc3MoJ2NvbGxhcHNlIGluJylcbiAgICAgIC5hdHRyKCdhcmlhLWV4cGFuZGVkJywgZmFsc2UpXG5cbiAgICB0aGlzLiR0cmlnZ2VyXG4gICAgICAuYWRkQ2xhc3MoJ2NvbGxhcHNlZCcpXG4gICAgICAuYXR0cignYXJpYS1leHBhbmRlZCcsIGZhbHNlKVxuXG4gICAgdGhpcy50cmFuc2l0aW9uaW5nID0gMVxuXG4gICAgdmFyIGNvbXBsZXRlID0gZnVuY3Rpb24gKCkge1xuICAgICAgdGhpcy50cmFuc2l0aW9uaW5nID0gMFxuICAgICAgdGhpcy4kZWxlbWVudFxuICAgICAgICAucmVtb3ZlQ2xhc3MoJ2NvbGxhcHNpbmcnKVxuICAgICAgICAuYWRkQ2xhc3MoJ2NvbGxhcHNlJylcbiAgICAgICAgLnRyaWdnZXIoJ2hpZGRlbi5icy5jb2xsYXBzZScpXG4gICAgfVxuXG4gICAgaWYgKCEkLnN1cHBvcnQudHJhbnNpdGlvbikgcmV0dXJuIGNvbXBsZXRlLmNhbGwodGhpcylcblxuICAgIHRoaXMuJGVsZW1lbnRcbiAgICAgIFtkaW1lbnNpb25dKDApXG4gICAgICAub25lKCdic1RyYW5zaXRpb25FbmQnLCAkLnByb3h5KGNvbXBsZXRlLCB0aGlzKSlcbiAgICAgIC5lbXVsYXRlVHJhbnNpdGlvbkVuZChDb2xsYXBzZS5UUkFOU0lUSU9OX0RVUkFUSU9OKVxuICB9XG5cbiAgQ29sbGFwc2UucHJvdG90eXBlLnRvZ2dsZSA9IGZ1bmN0aW9uICgpIHtcbiAgICB0aGlzW3RoaXMuJGVsZW1lbnQuaGFzQ2xhc3MoJ2luJykgPyAnaGlkZScgOiAnc2hvdyddKClcbiAgfVxuXG4gIENvbGxhcHNlLnByb3RvdHlwZS5nZXRQYXJlbnQgPSBmdW5jdGlvbiAoKSB7XG4gICAgcmV0dXJuICQodGhpcy5vcHRpb25zLnBhcmVudClcbiAgICAgIC5maW5kKCdbZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXVtkYXRhLXBhcmVudD1cIicgKyB0aGlzLm9wdGlvbnMucGFyZW50ICsgJ1wiXScpXG4gICAgICAuZWFjaCgkLnByb3h5KGZ1bmN0aW9uIChpLCBlbGVtZW50KSB7XG4gICAgICAgIHZhciAkZWxlbWVudCA9ICQoZWxlbWVudClcbiAgICAgICAgdGhpcy5hZGRBcmlhQW5kQ29sbGFwc2VkQ2xhc3MoZ2V0VGFyZ2V0RnJvbVRyaWdnZXIoJGVsZW1lbnQpLCAkZWxlbWVudClcbiAgICAgIH0sIHRoaXMpKVxuICAgICAgLmVuZCgpXG4gIH1cblxuICBDb2xsYXBzZS5wcm90b3R5cGUuYWRkQXJpYUFuZENvbGxhcHNlZENsYXNzID0gZnVuY3Rpb24gKCRlbGVtZW50LCAkdHJpZ2dlcikge1xuICAgIHZhciBpc09wZW4gPSAkZWxlbWVudC5oYXNDbGFzcygnaW4nKVxuXG4gICAgJGVsZW1lbnQuYXR0cignYXJpYS1leHBhbmRlZCcsIGlzT3BlbilcbiAgICAkdHJpZ2dlclxuICAgICAgLnRvZ2dsZUNsYXNzKCdjb2xsYXBzZWQnLCAhaXNPcGVuKVxuICAgICAgLmF0dHIoJ2FyaWEtZXhwYW5kZWQnLCBpc09wZW4pXG4gIH1cblxuICBmdW5jdGlvbiBnZXRUYXJnZXRGcm9tVHJpZ2dlcigkdHJpZ2dlcikge1xuICAgIHZhciBocmVmXG4gICAgdmFyIHRhcmdldCA9ICR0cmlnZ2VyLmF0dHIoJ2RhdGEtdGFyZ2V0JylcbiAgICAgIHx8IChocmVmID0gJHRyaWdnZXIuYXR0cignaHJlZicpKSAmJiBocmVmLnJlcGxhY2UoLy4qKD89I1teXFxzXSskKS8sICcnKSAvLyBzdHJpcCBmb3IgaWU3XG5cbiAgICByZXR1cm4gJCh0YXJnZXQpXG4gIH1cblxuXG4gIC8vIENPTExBUFNFIFBMVUdJTiBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgZnVuY3Rpb24gUGx1Z2luKG9wdGlvbikge1xuICAgIHJldHVybiB0aGlzLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgdmFyICR0aGlzICAgPSAkKHRoaXMpXG4gICAgICB2YXIgZGF0YSAgICA9ICR0aGlzLmRhdGEoJ2JzLmNvbGxhcHNlJylcbiAgICAgIHZhciBvcHRpb25zID0gJC5leHRlbmQoe30sIENvbGxhcHNlLkRFRkFVTFRTLCAkdGhpcy5kYXRhKCksIHR5cGVvZiBvcHRpb24gPT0gJ29iamVjdCcgJiYgb3B0aW9uKVxuXG4gICAgICBpZiAoIWRhdGEgJiYgb3B0aW9ucy50b2dnbGUgJiYgL3Nob3d8aGlkZS8udGVzdChvcHRpb24pKSBvcHRpb25zLnRvZ2dsZSA9IGZhbHNlXG4gICAgICBpZiAoIWRhdGEpICR0aGlzLmRhdGEoJ2JzLmNvbGxhcHNlJywgKGRhdGEgPSBuZXcgQ29sbGFwc2UodGhpcywgb3B0aW9ucykpKVxuICAgICAgaWYgKHR5cGVvZiBvcHRpb24gPT0gJ3N0cmluZycpIGRhdGFbb3B0aW9uXSgpXG4gICAgfSlcbiAgfVxuXG4gIHZhciBvbGQgPSAkLmZuLmNvbGxhcHNlXG5cbiAgJC5mbi5jb2xsYXBzZSAgICAgICAgICAgICA9IFBsdWdpblxuICAkLmZuLmNvbGxhcHNlLkNvbnN0cnVjdG9yID0gQ29sbGFwc2VcblxuXG4gIC8vIENPTExBUFNFIE5PIENPTkZMSUNUXG4gIC8vID09PT09PT09PT09PT09PT09PT09XG5cbiAgJC5mbi5jb2xsYXBzZS5ub0NvbmZsaWN0ID0gZnVuY3Rpb24gKCkge1xuICAgICQuZm4uY29sbGFwc2UgPSBvbGRcbiAgICByZXR1cm4gdGhpc1xuICB9XG5cblxuICAvLyBDT0xMQVBTRSBEQVRBLUFQSVxuICAvLyA9PT09PT09PT09PT09PT09PVxuXG4gICQoZG9jdW1lbnQpLm9uKCdjbGljay5icy5jb2xsYXBzZS5kYXRhLWFwaScsICdbZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXScsIGZ1bmN0aW9uIChlKSB7XG4gICAgdmFyICR0aGlzICAgPSAkKHRoaXMpXG5cbiAgICBpZiAoISR0aGlzLmF0dHIoJ2RhdGEtdGFyZ2V0JykpIGUucHJldmVudERlZmF1bHQoKVxuXG4gICAgdmFyICR0YXJnZXQgPSBnZXRUYXJnZXRGcm9tVHJpZ2dlcigkdGhpcylcbiAgICB2YXIgZGF0YSAgICA9ICR0YXJnZXQuZGF0YSgnYnMuY29sbGFwc2UnKVxuICAgIHZhciBvcHRpb24gID0gZGF0YSA/ICd0b2dnbGUnIDogJHRoaXMuZGF0YSgpXG5cbiAgICBQbHVnaW4uY2FsbCgkdGFyZ2V0LCBvcHRpb24pXG4gIH0pXG5cbn0oalF1ZXJ5KTtcblxuLyogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4gKiBCb290c3RyYXA6IGRyb3Bkb3duLmpzIHYzLjMuNlxuICogaHR0cDovL2dldGJvb3RzdHJhcC5jb20vamF2YXNjcmlwdC8jZHJvcGRvd25zXG4gKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiAqIENvcHlyaWdodCAyMDExLTIwMTUgVHdpdHRlciwgSW5jLlxuICogTGljZW5zZWQgdW5kZXIgTUlUIChodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvYmxvYi9tYXN0ZXIvTElDRU5TRSlcbiAqID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSAqL1xuXG5cbitmdW5jdGlvbiAoJCkge1xuICAndXNlIHN0cmljdCc7XG5cbiAgLy8gRFJPUERPV04gQ0xBU1MgREVGSU5JVElPTlxuICAvLyA9PT09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgdmFyIGJhY2tkcm9wID0gJy5kcm9wZG93bi1iYWNrZHJvcCdcbiAgdmFyIHRvZ2dsZSAgID0gJ1tkYXRhLXRvZ2dsZT1cImRyb3Bkb3duXCJdJ1xuICB2YXIgRHJvcGRvd24gPSBmdW5jdGlvbiAoZWxlbWVudCkge1xuICAgICQoZWxlbWVudCkub24oJ2NsaWNrLmJzLmRyb3Bkb3duJywgdGhpcy50b2dnbGUpXG4gIH1cblxuICBEcm9wZG93bi5WRVJTSU9OID0gJzMuMy42J1xuXG4gIGZ1bmN0aW9uIGdldFBhcmVudCgkdGhpcykge1xuICAgIHZhciBzZWxlY3RvciA9ICR0aGlzLmF0dHIoJ2RhdGEtdGFyZ2V0JylcblxuICAgIGlmICghc2VsZWN0b3IpIHtcbiAgICAgIHNlbGVjdG9yID0gJHRoaXMuYXR0cignaHJlZicpXG4gICAgICBzZWxlY3RvciA9IHNlbGVjdG9yICYmIC8jW0EtWmEtel0vLnRlc3Qoc2VsZWN0b3IpICYmIHNlbGVjdG9yLnJlcGxhY2UoLy4qKD89I1teXFxzXSokKS8sICcnKSAvLyBzdHJpcCBmb3IgaWU3XG4gICAgfVxuXG4gICAgdmFyICRwYXJlbnQgPSBzZWxlY3RvciAmJiAkKHNlbGVjdG9yKVxuXG4gICAgcmV0dXJuICRwYXJlbnQgJiYgJHBhcmVudC5sZW5ndGggPyAkcGFyZW50IDogJHRoaXMucGFyZW50KClcbiAgfVxuXG4gIGZ1bmN0aW9uIGNsZWFyTWVudXMoZSkge1xuICAgIGlmIChlICYmIGUud2hpY2ggPT09IDMpIHJldHVyblxuICAgICQoYmFja2Ryb3ApLnJlbW92ZSgpXG4gICAgJCh0b2dnbGUpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgdmFyICR0aGlzICAgICAgICAgPSAkKHRoaXMpXG4gICAgICB2YXIgJHBhcmVudCAgICAgICA9IGdldFBhcmVudCgkdGhpcylcbiAgICAgIHZhciByZWxhdGVkVGFyZ2V0ID0geyByZWxhdGVkVGFyZ2V0OiB0aGlzIH1cblxuICAgICAgaWYgKCEkcGFyZW50Lmhhc0NsYXNzKCdvcGVuJykpIHJldHVyblxuXG4gICAgICBpZiAoZSAmJiBlLnR5cGUgPT0gJ2NsaWNrJyAmJiAvaW5wdXR8dGV4dGFyZWEvaS50ZXN0KGUudGFyZ2V0LnRhZ05hbWUpICYmICQuY29udGFpbnMoJHBhcmVudFswXSwgZS50YXJnZXQpKSByZXR1cm5cblxuICAgICAgJHBhcmVudC50cmlnZ2VyKGUgPSAkLkV2ZW50KCdoaWRlLmJzLmRyb3Bkb3duJywgcmVsYXRlZFRhcmdldCkpXG5cbiAgICAgIGlmIChlLmlzRGVmYXVsdFByZXZlbnRlZCgpKSByZXR1cm5cblxuICAgICAgJHRoaXMuYXR0cignYXJpYS1leHBhbmRlZCcsICdmYWxzZScpXG4gICAgICAkcGFyZW50LnJlbW92ZUNsYXNzKCdvcGVuJykudHJpZ2dlcigkLkV2ZW50KCdoaWRkZW4uYnMuZHJvcGRvd24nLCByZWxhdGVkVGFyZ2V0KSlcbiAgICB9KVxuICB9XG5cbiAgRHJvcGRvd24ucHJvdG90eXBlLnRvZ2dsZSA9IGZ1bmN0aW9uIChlKSB7XG4gICAgdmFyICR0aGlzID0gJCh0aGlzKVxuXG4gICAgaWYgKCR0aGlzLmlzKCcuZGlzYWJsZWQsIDpkaXNhYmxlZCcpKSByZXR1cm5cblxuICAgIHZhciAkcGFyZW50ICA9IGdldFBhcmVudCgkdGhpcylcbiAgICB2YXIgaXNBY3RpdmUgPSAkcGFyZW50Lmhhc0NsYXNzKCdvcGVuJylcblxuICAgIGNsZWFyTWVudXMoKVxuXG4gICAgaWYgKCFpc0FjdGl2ZSkge1xuICAgICAgaWYgKCdvbnRvdWNoc3RhcnQnIGluIGRvY3VtZW50LmRvY3VtZW50RWxlbWVudCAmJiAhJHBhcmVudC5jbG9zZXN0KCcubmF2YmFyLW5hdicpLmxlbmd0aCkge1xuICAgICAgICAvLyBpZiBtb2JpbGUgd2UgdXNlIGEgYmFja2Ryb3AgYmVjYXVzZSBjbGljayBldmVudHMgZG9uJ3QgZGVsZWdhdGVcbiAgICAgICAgJChkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKSlcbiAgICAgICAgICAuYWRkQ2xhc3MoJ2Ryb3Bkb3duLWJhY2tkcm9wJylcbiAgICAgICAgICAuaW5zZXJ0QWZ0ZXIoJCh0aGlzKSlcbiAgICAgICAgICAub24oJ2NsaWNrJywgY2xlYXJNZW51cylcbiAgICAgIH1cblxuICAgICAgdmFyIHJlbGF0ZWRUYXJnZXQgPSB7IHJlbGF0ZWRUYXJnZXQ6IHRoaXMgfVxuICAgICAgJHBhcmVudC50cmlnZ2VyKGUgPSAkLkV2ZW50KCdzaG93LmJzLmRyb3Bkb3duJywgcmVsYXRlZFRhcmdldCkpXG5cbiAgICAgIGlmIChlLmlzRGVmYXVsdFByZXZlbnRlZCgpKSByZXR1cm5cblxuICAgICAgJHRoaXNcbiAgICAgICAgLnRyaWdnZXIoJ2ZvY3VzJylcbiAgICAgICAgLmF0dHIoJ2FyaWEtZXhwYW5kZWQnLCAndHJ1ZScpXG5cbiAgICAgICRwYXJlbnRcbiAgICAgICAgLnRvZ2dsZUNsYXNzKCdvcGVuJylcbiAgICAgICAgLnRyaWdnZXIoJC5FdmVudCgnc2hvd24uYnMuZHJvcGRvd24nLCByZWxhdGVkVGFyZ2V0KSlcbiAgICB9XG5cbiAgICByZXR1cm4gZmFsc2VcbiAgfVxuXG4gIERyb3Bkb3duLnByb3RvdHlwZS5rZXlkb3duID0gZnVuY3Rpb24gKGUpIHtcbiAgICBpZiAoIS8oMzh8NDB8Mjd8MzIpLy50ZXN0KGUud2hpY2gpIHx8IC9pbnB1dHx0ZXh0YXJlYS9pLnRlc3QoZS50YXJnZXQudGFnTmFtZSkpIHJldHVyblxuXG4gICAgdmFyICR0aGlzID0gJCh0aGlzKVxuXG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpXG4gICAgZS5zdG9wUHJvcGFnYXRpb24oKVxuXG4gICAgaWYgKCR0aGlzLmlzKCcuZGlzYWJsZWQsIDpkaXNhYmxlZCcpKSByZXR1cm5cblxuICAgIHZhciAkcGFyZW50ICA9IGdldFBhcmVudCgkdGhpcylcbiAgICB2YXIgaXNBY3RpdmUgPSAkcGFyZW50Lmhhc0NsYXNzKCdvcGVuJylcblxuICAgIGlmICghaXNBY3RpdmUgJiYgZS53aGljaCAhPSAyNyB8fCBpc0FjdGl2ZSAmJiBlLndoaWNoID09IDI3KSB7XG4gICAgICBpZiAoZS53aGljaCA9PSAyNykgJHBhcmVudC5maW5kKHRvZ2dsZSkudHJpZ2dlcignZm9jdXMnKVxuICAgICAgcmV0dXJuICR0aGlzLnRyaWdnZXIoJ2NsaWNrJylcbiAgICB9XG5cbiAgICB2YXIgZGVzYyA9ICcgbGk6bm90KC5kaXNhYmxlZCk6dmlzaWJsZSBhJ1xuICAgIHZhciAkaXRlbXMgPSAkcGFyZW50LmZpbmQoJy5kcm9wZG93bi1tZW51JyArIGRlc2MpXG5cbiAgICBpZiAoISRpdGVtcy5sZW5ndGgpIHJldHVyblxuXG4gICAgdmFyIGluZGV4ID0gJGl0ZW1zLmluZGV4KGUudGFyZ2V0KVxuXG4gICAgaWYgKGUud2hpY2ggPT0gMzggJiYgaW5kZXggPiAwKSAgICAgICAgICAgICAgICAgaW5kZXgtLSAgICAgICAgIC8vIHVwXG4gICAgaWYgKGUud2hpY2ggPT0gNDAgJiYgaW5kZXggPCAkaXRlbXMubGVuZ3RoIC0gMSkgaW5kZXgrKyAgICAgICAgIC8vIGRvd25cbiAgICBpZiAoIX5pbmRleCkgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbmRleCA9IDBcblxuICAgICRpdGVtcy5lcShpbmRleCkudHJpZ2dlcignZm9jdXMnKVxuICB9XG5cblxuICAvLyBEUk9QRE9XTiBQTFVHSU4gREVGSU5JVElPTlxuICAvLyA9PT09PT09PT09PT09PT09PT09PT09PT09PVxuXG4gIGZ1bmN0aW9uIFBsdWdpbihvcHRpb24pIHtcbiAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgIHZhciAkdGhpcyA9ICQodGhpcylcbiAgICAgIHZhciBkYXRhICA9ICR0aGlzLmRhdGEoJ2JzLmRyb3Bkb3duJylcblxuICAgICAgaWYgKCFkYXRhKSAkdGhpcy5kYXRhKCdicy5kcm9wZG93bicsIChkYXRhID0gbmV3IERyb3Bkb3duKHRoaXMpKSlcbiAgICAgIGlmICh0eXBlb2Ygb3B0aW9uID09ICdzdHJpbmcnKSBkYXRhW29wdGlvbl0uY2FsbCgkdGhpcylcbiAgICB9KVxuICB9XG5cbiAgdmFyIG9sZCA9ICQuZm4uZHJvcGRvd25cblxuICAkLmZuLmRyb3Bkb3duICAgICAgICAgICAgID0gUGx1Z2luXG4gICQuZm4uZHJvcGRvd24uQ29uc3RydWN0b3IgPSBEcm9wZG93blxuXG5cbiAgLy8gRFJPUERPV04gTk8gQ09ORkxJQ1RcbiAgLy8gPT09PT09PT09PT09PT09PT09PT1cblxuICAkLmZuLmRyb3Bkb3duLm5vQ29uZmxpY3QgPSBmdW5jdGlvbiAoKSB7XG4gICAgJC5mbi5kcm9wZG93biA9IG9sZFxuICAgIHJldHVybiB0aGlzXG4gIH1cblxuXG4gIC8vIEFQUExZIFRPIFNUQU5EQVJEIERST1BET1dOIEVMRU1FTlRTXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgJChkb2N1bWVudClcbiAgICAub24oJ2NsaWNrLmJzLmRyb3Bkb3duLmRhdGEtYXBpJywgY2xlYXJNZW51cylcbiAgICAub24oJ2NsaWNrLmJzLmRyb3Bkb3duLmRhdGEtYXBpJywgJy5kcm9wZG93biBmb3JtJywgZnVuY3Rpb24gKGUpIHsgZS5zdG9wUHJvcGFnYXRpb24oKSB9KVxuICAgIC5vbignY2xpY2suYnMuZHJvcGRvd24uZGF0YS1hcGknLCB0b2dnbGUsIERyb3Bkb3duLnByb3RvdHlwZS50b2dnbGUpXG4gICAgLm9uKCdrZXlkb3duLmJzLmRyb3Bkb3duLmRhdGEtYXBpJywgdG9nZ2xlLCBEcm9wZG93bi5wcm90b3R5cGUua2V5ZG93bilcbiAgICAub24oJ2tleWRvd24uYnMuZHJvcGRvd24uZGF0YS1hcGknLCAnLmRyb3Bkb3duLW1lbnUnLCBEcm9wZG93bi5wcm90b3R5cGUua2V5ZG93bilcblxufShqUXVlcnkpO1xuXG4vKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiAqIEJvb3RzdHJhcDogbW9kYWwuanMgdjMuMy42XG4gKiBodHRwOi8vZ2V0Ym9vdHN0cmFwLmNvbS9qYXZhc2NyaXB0LyNtb2RhbHNcbiAqID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuICogQ29weXJpZ2h0IDIwMTEtMjAxNSBUd2l0dGVyLCBJbmMuXG4gKiBMaWNlbnNlZCB1bmRlciBNSVQgKGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9ibG9iL21hc3Rlci9MSUNFTlNFKVxuICogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09ICovXG5cblxuK2Z1bmN0aW9uICgkKSB7XG4gICd1c2Ugc3RyaWN0JztcblxuICAvLyBNT0RBTCBDTEFTUyBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT1cblxuICB2YXIgTW9kYWwgPSBmdW5jdGlvbiAoZWxlbWVudCwgb3B0aW9ucykge1xuICAgIHRoaXMub3B0aW9ucyAgICAgICAgICAgICA9IG9wdGlvbnNcbiAgICB0aGlzLiRib2R5ICAgICAgICAgICAgICAgPSAkKGRvY3VtZW50LmJvZHkpXG4gICAgdGhpcy4kZWxlbWVudCAgICAgICAgICAgID0gJChlbGVtZW50KVxuICAgIHRoaXMuJGRpYWxvZyAgICAgICAgICAgICA9IHRoaXMuJGVsZW1lbnQuZmluZCgnLm1vZGFsLWRpYWxvZycpXG4gICAgdGhpcy4kYmFja2Ryb3AgICAgICAgICAgID0gbnVsbFxuICAgIHRoaXMuaXNTaG93biAgICAgICAgICAgICA9IG51bGxcbiAgICB0aGlzLm9yaWdpbmFsQm9keVBhZCAgICAgPSBudWxsXG4gICAgdGhpcy5zY3JvbGxiYXJXaWR0aCAgICAgID0gMFxuICAgIHRoaXMuaWdub3JlQmFja2Ryb3BDbGljayA9IGZhbHNlXG5cbiAgICBpZiAodGhpcy5vcHRpb25zLnJlbW90ZSkge1xuICAgICAgdGhpcy4kZWxlbWVudFxuICAgICAgICAuZmluZCgnLm1vZGFsLWNvbnRlbnQnKVxuICAgICAgICAubG9hZCh0aGlzLm9wdGlvbnMucmVtb3RlLCAkLnByb3h5KGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICB0aGlzLiRlbGVtZW50LnRyaWdnZXIoJ2xvYWRlZC5icy5tb2RhbCcpXG4gICAgICAgIH0sIHRoaXMpKVxuICAgIH1cbiAgfVxuXG4gIE1vZGFsLlZFUlNJT04gID0gJzMuMy42J1xuXG4gIE1vZGFsLlRSQU5TSVRJT05fRFVSQVRJT04gPSAzMDBcbiAgTW9kYWwuQkFDS0RST1BfVFJBTlNJVElPTl9EVVJBVElPTiA9IDE1MFxuXG4gIE1vZGFsLkRFRkFVTFRTID0ge1xuICAgIGJhY2tkcm9wOiB0cnVlLFxuICAgIGtleWJvYXJkOiB0cnVlLFxuICAgIHNob3c6IHRydWVcbiAgfVxuXG4gIE1vZGFsLnByb3RvdHlwZS50b2dnbGUgPSBmdW5jdGlvbiAoX3JlbGF0ZWRUYXJnZXQpIHtcbiAgICByZXR1cm4gdGhpcy5pc1Nob3duID8gdGhpcy5oaWRlKCkgOiB0aGlzLnNob3coX3JlbGF0ZWRUYXJnZXQpXG4gIH1cblxuICBNb2RhbC5wcm90b3R5cGUuc2hvdyA9IGZ1bmN0aW9uIChfcmVsYXRlZFRhcmdldCkge1xuICAgIHZhciB0aGF0ID0gdGhpc1xuICAgIHZhciBlICAgID0gJC5FdmVudCgnc2hvdy5icy5tb2RhbCcsIHsgcmVsYXRlZFRhcmdldDogX3JlbGF0ZWRUYXJnZXQgfSlcblxuICAgIHRoaXMuJGVsZW1lbnQudHJpZ2dlcihlKVxuXG4gICAgaWYgKHRoaXMuaXNTaG93biB8fCBlLmlzRGVmYXVsdFByZXZlbnRlZCgpKSByZXR1cm5cblxuICAgIHRoaXMuaXNTaG93biA9IHRydWVcblxuICAgIHRoaXMuY2hlY2tTY3JvbGxiYXIoKVxuICAgIHRoaXMuc2V0U2Nyb2xsYmFyKClcbiAgICB0aGlzLiRib2R5LmFkZENsYXNzKCdtb2RhbC1vcGVuJylcblxuICAgIHRoaXMuZXNjYXBlKClcbiAgICB0aGlzLnJlc2l6ZSgpXG5cbiAgICB0aGlzLiRlbGVtZW50Lm9uKCdjbGljay5kaXNtaXNzLmJzLm1vZGFsJywgJ1tkYXRhLWRpc21pc3M9XCJtb2RhbFwiXScsICQucHJveHkodGhpcy5oaWRlLCB0aGlzKSlcblxuICAgIHRoaXMuJGRpYWxvZy5vbignbW91c2Vkb3duLmRpc21pc3MuYnMubW9kYWwnLCBmdW5jdGlvbiAoKSB7XG4gICAgICB0aGF0LiRlbGVtZW50Lm9uZSgnbW91c2V1cC5kaXNtaXNzLmJzLm1vZGFsJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgaWYgKCQoZS50YXJnZXQpLmlzKHRoYXQuJGVsZW1lbnQpKSB0aGF0Lmlnbm9yZUJhY2tkcm9wQ2xpY2sgPSB0cnVlXG4gICAgICB9KVxuICAgIH0pXG5cbiAgICB0aGlzLmJhY2tkcm9wKGZ1bmN0aW9uICgpIHtcbiAgICAgIHZhciB0cmFuc2l0aW9uID0gJC5zdXBwb3J0LnRyYW5zaXRpb24gJiYgdGhhdC4kZWxlbWVudC5oYXNDbGFzcygnZmFkZScpXG5cbiAgICAgIGlmICghdGhhdC4kZWxlbWVudC5wYXJlbnQoKS5sZW5ndGgpIHtcbiAgICAgICAgdGhhdC4kZWxlbWVudC5hcHBlbmRUbyh0aGF0LiRib2R5KSAvLyBkb24ndCBtb3ZlIG1vZGFscyBkb20gcG9zaXRpb25cbiAgICAgIH1cblxuICAgICAgdGhhdC4kZWxlbWVudFxuICAgICAgICAuc2hvdygpXG4gICAgICAgIC5zY3JvbGxUb3AoMClcblxuICAgICAgdGhhdC5hZGp1c3REaWFsb2coKVxuXG4gICAgICBpZiAodHJhbnNpdGlvbikge1xuICAgICAgICB0aGF0LiRlbGVtZW50WzBdLm9mZnNldFdpZHRoIC8vIGZvcmNlIHJlZmxvd1xuICAgICAgfVxuXG4gICAgICB0aGF0LiRlbGVtZW50LmFkZENsYXNzKCdpbicpXG5cbiAgICAgIHRoYXQuZW5mb3JjZUZvY3VzKClcblxuICAgICAgdmFyIGUgPSAkLkV2ZW50KCdzaG93bi5icy5tb2RhbCcsIHsgcmVsYXRlZFRhcmdldDogX3JlbGF0ZWRUYXJnZXQgfSlcblxuICAgICAgdHJhbnNpdGlvbiA/XG4gICAgICAgIHRoYXQuJGRpYWxvZyAvLyB3YWl0IGZvciBtb2RhbCB0byBzbGlkZSBpblxuICAgICAgICAgIC5vbmUoJ2JzVHJhbnNpdGlvbkVuZCcsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHRoYXQuJGVsZW1lbnQudHJpZ2dlcignZm9jdXMnKS50cmlnZ2VyKGUpXG4gICAgICAgICAgfSlcbiAgICAgICAgICAuZW11bGF0ZVRyYW5zaXRpb25FbmQoTW9kYWwuVFJBTlNJVElPTl9EVVJBVElPTikgOlxuICAgICAgICB0aGF0LiRlbGVtZW50LnRyaWdnZXIoJ2ZvY3VzJykudHJpZ2dlcihlKVxuICAgIH0pXG4gIH1cblxuICBNb2RhbC5wcm90b3R5cGUuaGlkZSA9IGZ1bmN0aW9uIChlKSB7XG4gICAgaWYgKGUpIGUucHJldmVudERlZmF1bHQoKVxuXG4gICAgZSA9ICQuRXZlbnQoJ2hpZGUuYnMubW9kYWwnKVxuXG4gICAgdGhpcy4kZWxlbWVudC50cmlnZ2VyKGUpXG5cbiAgICBpZiAoIXRoaXMuaXNTaG93biB8fCBlLmlzRGVmYXVsdFByZXZlbnRlZCgpKSByZXR1cm5cblxuICAgIHRoaXMuaXNTaG93biA9IGZhbHNlXG5cbiAgICB0aGlzLmVzY2FwZSgpXG4gICAgdGhpcy5yZXNpemUoKVxuXG4gICAgJChkb2N1bWVudCkub2ZmKCdmb2N1c2luLmJzLm1vZGFsJylcblxuICAgIHRoaXMuJGVsZW1lbnRcbiAgICAgIC5yZW1vdmVDbGFzcygnaW4nKVxuICAgICAgLm9mZignY2xpY2suZGlzbWlzcy5icy5tb2RhbCcpXG4gICAgICAub2ZmKCdtb3VzZXVwLmRpc21pc3MuYnMubW9kYWwnKVxuXG4gICAgdGhpcy4kZGlhbG9nLm9mZignbW91c2Vkb3duLmRpc21pc3MuYnMubW9kYWwnKVxuXG4gICAgJC5zdXBwb3J0LnRyYW5zaXRpb24gJiYgdGhpcy4kZWxlbWVudC5oYXNDbGFzcygnZmFkZScpID9cbiAgICAgIHRoaXMuJGVsZW1lbnRcbiAgICAgICAgLm9uZSgnYnNUcmFuc2l0aW9uRW5kJywgJC5wcm94eSh0aGlzLmhpZGVNb2RhbCwgdGhpcykpXG4gICAgICAgIC5lbXVsYXRlVHJhbnNpdGlvbkVuZChNb2RhbC5UUkFOU0lUSU9OX0RVUkFUSU9OKSA6XG4gICAgICB0aGlzLmhpZGVNb2RhbCgpXG4gIH1cblxuICBNb2RhbC5wcm90b3R5cGUuZW5mb3JjZUZvY3VzID0gZnVuY3Rpb24gKCkge1xuICAgICQoZG9jdW1lbnQpXG4gICAgICAub2ZmKCdmb2N1c2luLmJzLm1vZGFsJykgLy8gZ3VhcmQgYWdhaW5zdCBpbmZpbml0ZSBmb2N1cyBsb29wXG4gICAgICAub24oJ2ZvY3VzaW4uYnMubW9kYWwnLCAkLnByb3h5KGZ1bmN0aW9uIChlKSB7XG4gICAgICAgIGlmICh0aGlzLiRlbGVtZW50WzBdICE9PSBlLnRhcmdldCAmJiAhdGhpcy4kZWxlbWVudC5oYXMoZS50YXJnZXQpLmxlbmd0aCkge1xuICAgICAgICAgIHRoaXMuJGVsZW1lbnQudHJpZ2dlcignZm9jdXMnKVxuICAgICAgICB9XG4gICAgICB9LCB0aGlzKSlcbiAgfVxuXG4gIE1vZGFsLnByb3RvdHlwZS5lc2NhcGUgPSBmdW5jdGlvbiAoKSB7XG4gICAgaWYgKHRoaXMuaXNTaG93biAmJiB0aGlzLm9wdGlvbnMua2V5Ym9hcmQpIHtcbiAgICAgIHRoaXMuJGVsZW1lbnQub24oJ2tleWRvd24uZGlzbWlzcy5icy5tb2RhbCcsICQucHJveHkoZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgZS53aGljaCA9PSAyNyAmJiB0aGlzLmhpZGUoKVxuICAgICAgfSwgdGhpcykpXG4gICAgfSBlbHNlIGlmICghdGhpcy5pc1Nob3duKSB7XG4gICAgICB0aGlzLiRlbGVtZW50Lm9mZigna2V5ZG93bi5kaXNtaXNzLmJzLm1vZGFsJylcbiAgICB9XG4gIH1cblxuICBNb2RhbC5wcm90b3R5cGUucmVzaXplID0gZnVuY3Rpb24gKCkge1xuICAgIGlmICh0aGlzLmlzU2hvd24pIHtcbiAgICAgICQod2luZG93KS5vbigncmVzaXplLmJzLm1vZGFsJywgJC5wcm94eSh0aGlzLmhhbmRsZVVwZGF0ZSwgdGhpcykpXG4gICAgfSBlbHNlIHtcbiAgICAgICQod2luZG93KS5vZmYoJ3Jlc2l6ZS5icy5tb2RhbCcpXG4gICAgfVxuICB9XG5cbiAgTW9kYWwucHJvdG90eXBlLmhpZGVNb2RhbCA9IGZ1bmN0aW9uICgpIHtcbiAgICB2YXIgdGhhdCA9IHRoaXNcbiAgICB0aGlzLiRlbGVtZW50LmhpZGUoKVxuICAgIHRoaXMuYmFja2Ryb3AoZnVuY3Rpb24gKCkge1xuICAgICAgdGhhdC4kYm9keS5yZW1vdmVDbGFzcygnbW9kYWwtb3BlbicpXG4gICAgICB0aGF0LnJlc2V0QWRqdXN0bWVudHMoKVxuICAgICAgdGhhdC5yZXNldFNjcm9sbGJhcigpXG4gICAgICB0aGF0LiRlbGVtZW50LnRyaWdnZXIoJ2hpZGRlbi5icy5tb2RhbCcpXG4gICAgfSlcbiAgfVxuXG4gIE1vZGFsLnByb3RvdHlwZS5yZW1vdmVCYWNrZHJvcCA9IGZ1bmN0aW9uICgpIHtcbiAgICB0aGlzLiRiYWNrZHJvcCAmJiB0aGlzLiRiYWNrZHJvcC5yZW1vdmUoKVxuICAgIHRoaXMuJGJhY2tkcm9wID0gbnVsbFxuICB9XG5cbiAgTW9kYWwucHJvdG90eXBlLmJhY2tkcm9wID0gZnVuY3Rpb24gKGNhbGxiYWNrKSB7XG4gICAgdmFyIHRoYXQgPSB0aGlzXG4gICAgdmFyIGFuaW1hdGUgPSB0aGlzLiRlbGVtZW50Lmhhc0NsYXNzKCdmYWRlJykgPyAnZmFkZScgOiAnJ1xuXG4gICAgaWYgKHRoaXMuaXNTaG93biAmJiB0aGlzLm9wdGlvbnMuYmFja2Ryb3ApIHtcbiAgICAgIHZhciBkb0FuaW1hdGUgPSAkLnN1cHBvcnQudHJhbnNpdGlvbiAmJiBhbmltYXRlXG5cbiAgICAgIHRoaXMuJGJhY2tkcm9wID0gJChkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKSlcbiAgICAgICAgLmFkZENsYXNzKCdtb2RhbC1iYWNrZHJvcCAnICsgYW5pbWF0ZSlcbiAgICAgICAgLmFwcGVuZFRvKHRoaXMuJGJvZHkpXG5cbiAgICAgIHRoaXMuJGVsZW1lbnQub24oJ2NsaWNrLmRpc21pc3MuYnMubW9kYWwnLCAkLnByb3h5KGZ1bmN0aW9uIChlKSB7XG4gICAgICAgIGlmICh0aGlzLmlnbm9yZUJhY2tkcm9wQ2xpY2spIHtcbiAgICAgICAgICB0aGlzLmlnbm9yZUJhY2tkcm9wQ2xpY2sgPSBmYWxzZVxuICAgICAgICAgIHJldHVyblxuICAgICAgICB9XG4gICAgICAgIGlmIChlLnRhcmdldCAhPT0gZS5jdXJyZW50VGFyZ2V0KSByZXR1cm5cbiAgICAgICAgdGhpcy5vcHRpb25zLmJhY2tkcm9wID09ICdzdGF0aWMnXG4gICAgICAgICAgPyB0aGlzLiRlbGVtZW50WzBdLmZvY3VzKClcbiAgICAgICAgICA6IHRoaXMuaGlkZSgpXG4gICAgICB9LCB0aGlzKSlcblxuICAgICAgaWYgKGRvQW5pbWF0ZSkgdGhpcy4kYmFja2Ryb3BbMF0ub2Zmc2V0V2lkdGggLy8gZm9yY2UgcmVmbG93XG5cbiAgICAgIHRoaXMuJGJhY2tkcm9wLmFkZENsYXNzKCdpbicpXG5cbiAgICAgIGlmICghY2FsbGJhY2spIHJldHVyblxuXG4gICAgICBkb0FuaW1hdGUgP1xuICAgICAgICB0aGlzLiRiYWNrZHJvcFxuICAgICAgICAgIC5vbmUoJ2JzVHJhbnNpdGlvbkVuZCcsIGNhbGxiYWNrKVxuICAgICAgICAgIC5lbXVsYXRlVHJhbnNpdGlvbkVuZChNb2RhbC5CQUNLRFJPUF9UUkFOU0lUSU9OX0RVUkFUSU9OKSA6XG4gICAgICAgIGNhbGxiYWNrKClcblxuICAgIH0gZWxzZSBpZiAoIXRoaXMuaXNTaG93biAmJiB0aGlzLiRiYWNrZHJvcCkge1xuICAgICAgdGhpcy4kYmFja2Ryb3AucmVtb3ZlQ2xhc3MoJ2luJylcblxuICAgICAgdmFyIGNhbGxiYWNrUmVtb3ZlID0gZnVuY3Rpb24gKCkge1xuICAgICAgICB0aGF0LnJlbW92ZUJhY2tkcm9wKClcbiAgICAgICAgY2FsbGJhY2sgJiYgY2FsbGJhY2soKVxuICAgICAgfVxuICAgICAgJC5zdXBwb3J0LnRyYW5zaXRpb24gJiYgdGhpcy4kZWxlbWVudC5oYXNDbGFzcygnZmFkZScpID9cbiAgICAgICAgdGhpcy4kYmFja2Ryb3BcbiAgICAgICAgICAub25lKCdic1RyYW5zaXRpb25FbmQnLCBjYWxsYmFja1JlbW92ZSlcbiAgICAgICAgICAuZW11bGF0ZVRyYW5zaXRpb25FbmQoTW9kYWwuQkFDS0RST1BfVFJBTlNJVElPTl9EVVJBVElPTikgOlxuICAgICAgICBjYWxsYmFja1JlbW92ZSgpXG5cbiAgICB9IGVsc2UgaWYgKGNhbGxiYWNrKSB7XG4gICAgICBjYWxsYmFjaygpXG4gICAgfVxuICB9XG5cbiAgLy8gdGhlc2UgZm9sbG93aW5nIG1ldGhvZHMgYXJlIHVzZWQgdG8gaGFuZGxlIG92ZXJmbG93aW5nIG1vZGFsc1xuXG4gIE1vZGFsLnByb3RvdHlwZS5oYW5kbGVVcGRhdGUgPSBmdW5jdGlvbiAoKSB7XG4gICAgdGhpcy5hZGp1c3REaWFsb2coKVxuICB9XG5cbiAgTW9kYWwucHJvdG90eXBlLmFkanVzdERpYWxvZyA9IGZ1bmN0aW9uICgpIHtcbiAgICB2YXIgbW9kYWxJc092ZXJmbG93aW5nID0gdGhpcy4kZWxlbWVudFswXS5zY3JvbGxIZWlnaHQgPiBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuY2xpZW50SGVpZ2h0XG5cbiAgICB0aGlzLiRlbGVtZW50LmNzcyh7XG4gICAgICBwYWRkaW5nTGVmdDogICF0aGlzLmJvZHlJc092ZXJmbG93aW5nICYmIG1vZGFsSXNPdmVyZmxvd2luZyA/IHRoaXMuc2Nyb2xsYmFyV2lkdGggOiAnJyxcbiAgICAgIHBhZGRpbmdSaWdodDogdGhpcy5ib2R5SXNPdmVyZmxvd2luZyAmJiAhbW9kYWxJc092ZXJmbG93aW5nID8gdGhpcy5zY3JvbGxiYXJXaWR0aCA6ICcnXG4gICAgfSlcbiAgfVxuXG4gIE1vZGFsLnByb3RvdHlwZS5yZXNldEFkanVzdG1lbnRzID0gZnVuY3Rpb24gKCkge1xuICAgIHRoaXMuJGVsZW1lbnQuY3NzKHtcbiAgICAgIHBhZGRpbmdMZWZ0OiAnJyxcbiAgICAgIHBhZGRpbmdSaWdodDogJydcbiAgICB9KVxuICB9XG5cbiAgTW9kYWwucHJvdG90eXBlLmNoZWNrU2Nyb2xsYmFyID0gZnVuY3Rpb24gKCkge1xuICAgIHZhciBmdWxsV2luZG93V2lkdGggPSB3aW5kb3cuaW5uZXJXaWR0aFxuICAgIGlmICghZnVsbFdpbmRvd1dpZHRoKSB7IC8vIHdvcmthcm91bmQgZm9yIG1pc3Npbmcgd2luZG93LmlubmVyV2lkdGggaW4gSUU4XG4gICAgICB2YXIgZG9jdW1lbnRFbGVtZW50UmVjdCA9IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5nZXRCb3VuZGluZ0NsaWVudFJlY3QoKVxuICAgICAgZnVsbFdpbmRvd1dpZHRoID0gZG9jdW1lbnRFbGVtZW50UmVjdC5yaWdodCAtIE1hdGguYWJzKGRvY3VtZW50RWxlbWVudFJlY3QubGVmdClcbiAgICB9XG4gICAgdGhpcy5ib2R5SXNPdmVyZmxvd2luZyA9IGRvY3VtZW50LmJvZHkuY2xpZW50V2lkdGggPCBmdWxsV2luZG93V2lkdGhcbiAgICB0aGlzLnNjcm9sbGJhcldpZHRoID0gdGhpcy5tZWFzdXJlU2Nyb2xsYmFyKClcbiAgfVxuXG4gIE1vZGFsLnByb3RvdHlwZS5zZXRTY3JvbGxiYXIgPSBmdW5jdGlvbiAoKSB7XG4gICAgdmFyIGJvZHlQYWQgPSBwYXJzZUludCgodGhpcy4kYm9keS5jc3MoJ3BhZGRpbmctcmlnaHQnKSB8fCAwKSwgMTApXG4gICAgdGhpcy5vcmlnaW5hbEJvZHlQYWQgPSBkb2N1bWVudC5ib2R5LnN0eWxlLnBhZGRpbmdSaWdodCB8fCAnJ1xuICAgIGlmICh0aGlzLmJvZHlJc092ZXJmbG93aW5nKSB0aGlzLiRib2R5LmNzcygncGFkZGluZy1yaWdodCcsIGJvZHlQYWQgKyB0aGlzLnNjcm9sbGJhcldpZHRoKVxuICB9XG5cbiAgTW9kYWwucHJvdG90eXBlLnJlc2V0U2Nyb2xsYmFyID0gZnVuY3Rpb24gKCkge1xuICAgIHRoaXMuJGJvZHkuY3NzKCdwYWRkaW5nLXJpZ2h0JywgdGhpcy5vcmlnaW5hbEJvZHlQYWQpXG4gIH1cblxuICBNb2RhbC5wcm90b3R5cGUubWVhc3VyZVNjcm9sbGJhciA9IGZ1bmN0aW9uICgpIHsgLy8gdGh4IHdhbHNoXG4gICAgdmFyIHNjcm9sbERpdiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpXG4gICAgc2Nyb2xsRGl2LmNsYXNzTmFtZSA9ICdtb2RhbC1zY3JvbGxiYXItbWVhc3VyZSdcbiAgICB0aGlzLiRib2R5LmFwcGVuZChzY3JvbGxEaXYpXG4gICAgdmFyIHNjcm9sbGJhcldpZHRoID0gc2Nyb2xsRGl2Lm9mZnNldFdpZHRoIC0gc2Nyb2xsRGl2LmNsaWVudFdpZHRoXG4gICAgdGhpcy4kYm9keVswXS5yZW1vdmVDaGlsZChzY3JvbGxEaXYpXG4gICAgcmV0dXJuIHNjcm9sbGJhcldpZHRoXG4gIH1cblxuXG4gIC8vIE1PREFMIFBMVUdJTiBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgZnVuY3Rpb24gUGx1Z2luKG9wdGlvbiwgX3JlbGF0ZWRUYXJnZXQpIHtcbiAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgIHZhciAkdGhpcyAgID0gJCh0aGlzKVxuICAgICAgdmFyIGRhdGEgICAgPSAkdGhpcy5kYXRhKCdicy5tb2RhbCcpXG4gICAgICB2YXIgb3B0aW9ucyA9ICQuZXh0ZW5kKHt9LCBNb2RhbC5ERUZBVUxUUywgJHRoaXMuZGF0YSgpLCB0eXBlb2Ygb3B0aW9uID09ICdvYmplY3QnICYmIG9wdGlvbilcblxuICAgICAgaWYgKCFkYXRhKSAkdGhpcy5kYXRhKCdicy5tb2RhbCcsIChkYXRhID0gbmV3IE1vZGFsKHRoaXMsIG9wdGlvbnMpKSlcbiAgICAgIGlmICh0eXBlb2Ygb3B0aW9uID09ICdzdHJpbmcnKSBkYXRhW29wdGlvbl0oX3JlbGF0ZWRUYXJnZXQpXG4gICAgICBlbHNlIGlmIChvcHRpb25zLnNob3cpIGRhdGEuc2hvdyhfcmVsYXRlZFRhcmdldClcbiAgICB9KVxuICB9XG5cbiAgdmFyIG9sZCA9ICQuZm4ubW9kYWxcblxuICAkLmZuLm1vZGFsICAgICAgICAgICAgID0gUGx1Z2luXG4gICQuZm4ubW9kYWwuQ29uc3RydWN0b3IgPSBNb2RhbFxuXG5cbiAgLy8gTU9EQUwgTk8gQ09ORkxJQ1RcbiAgLy8gPT09PT09PT09PT09PT09PT1cblxuICAkLmZuLm1vZGFsLm5vQ29uZmxpY3QgPSBmdW5jdGlvbiAoKSB7XG4gICAgJC5mbi5tb2RhbCA9IG9sZFxuICAgIHJldHVybiB0aGlzXG4gIH1cblxuXG4gIC8vIE1PREFMIERBVEEtQVBJXG4gIC8vID09PT09PT09PT09PT09XG5cbiAgJChkb2N1bWVudCkub24oJ2NsaWNrLmJzLm1vZGFsLmRhdGEtYXBpJywgJ1tkYXRhLXRvZ2dsZT1cIm1vZGFsXCJdJywgZnVuY3Rpb24gKGUpIHtcbiAgICB2YXIgJHRoaXMgICA9ICQodGhpcylcbiAgICB2YXIgaHJlZiAgICA9ICR0aGlzLmF0dHIoJ2hyZWYnKVxuICAgIHZhciAkdGFyZ2V0ID0gJCgkdGhpcy5hdHRyKCdkYXRhLXRhcmdldCcpIHx8IChocmVmICYmIGhyZWYucmVwbGFjZSgvLiooPz0jW15cXHNdKyQpLywgJycpKSkgLy8gc3RyaXAgZm9yIGllN1xuICAgIHZhciBvcHRpb24gID0gJHRhcmdldC5kYXRhKCdicy5tb2RhbCcpID8gJ3RvZ2dsZScgOiAkLmV4dGVuZCh7IHJlbW90ZTogIS8jLy50ZXN0KGhyZWYpICYmIGhyZWYgfSwgJHRhcmdldC5kYXRhKCksICR0aGlzLmRhdGEoKSlcblxuICAgIGlmICgkdGhpcy5pcygnYScpKSBlLnByZXZlbnREZWZhdWx0KClcblxuICAgICR0YXJnZXQub25lKCdzaG93LmJzLm1vZGFsJywgZnVuY3Rpb24gKHNob3dFdmVudCkge1xuICAgICAgaWYgKHNob3dFdmVudC5pc0RlZmF1bHRQcmV2ZW50ZWQoKSkgcmV0dXJuIC8vIG9ubHkgcmVnaXN0ZXIgZm9jdXMgcmVzdG9yZXIgaWYgbW9kYWwgd2lsbCBhY3R1YWxseSBnZXQgc2hvd25cbiAgICAgICR0YXJnZXQub25lKCdoaWRkZW4uYnMubW9kYWwnLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICR0aGlzLmlzKCc6dmlzaWJsZScpICYmICR0aGlzLnRyaWdnZXIoJ2ZvY3VzJylcbiAgICAgIH0pXG4gICAgfSlcbiAgICBQbHVnaW4uY2FsbCgkdGFyZ2V0LCBvcHRpb24sIHRoaXMpXG4gIH0pXG5cbn0oalF1ZXJ5KTtcblxuLyogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4gKiBCb290c3RyYXA6IHRvb2x0aXAuanMgdjMuMy42XG4gKiBodHRwOi8vZ2V0Ym9vdHN0cmFwLmNvbS9qYXZhc2NyaXB0LyN0b29sdGlwXG4gKiBJbnNwaXJlZCBieSB0aGUgb3JpZ2luYWwgalF1ZXJ5LnRpcHN5IGJ5IEphc29uIEZyYW1lXG4gKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiAqIENvcHlyaWdodCAyMDExLTIwMTUgVHdpdHRlciwgSW5jLlxuICogTGljZW5zZWQgdW5kZXIgTUlUIChodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvYmxvYi9tYXN0ZXIvTElDRU5TRSlcbiAqID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSAqL1xuXG5cbitmdW5jdGlvbiAoJCkge1xuICAndXNlIHN0cmljdCc7XG5cbiAgLy8gVE9PTFRJUCBQVUJMSUMgQ0xBU1MgREVGSU5JVElPTlxuICAvLyA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgdmFyIFRvb2x0aXAgPSBmdW5jdGlvbiAoZWxlbWVudCwgb3B0aW9ucykge1xuICAgIHRoaXMudHlwZSAgICAgICA9IG51bGxcbiAgICB0aGlzLm9wdGlvbnMgICAgPSBudWxsXG4gICAgdGhpcy5lbmFibGVkICAgID0gbnVsbFxuICAgIHRoaXMudGltZW91dCAgICA9IG51bGxcbiAgICB0aGlzLmhvdmVyU3RhdGUgPSBudWxsXG4gICAgdGhpcy4kZWxlbWVudCAgID0gbnVsbFxuICAgIHRoaXMuaW5TdGF0ZSAgICA9IG51bGxcblxuICAgIHRoaXMuaW5pdCgndG9vbHRpcCcsIGVsZW1lbnQsIG9wdGlvbnMpXG4gIH1cblxuICBUb29sdGlwLlZFUlNJT04gID0gJzMuMy42J1xuXG4gIFRvb2x0aXAuVFJBTlNJVElPTl9EVVJBVElPTiA9IDE1MFxuXG4gIFRvb2x0aXAuREVGQVVMVFMgPSB7XG4gICAgYW5pbWF0aW9uOiB0cnVlLFxuICAgIHBsYWNlbWVudDogJ3RvcCcsXG4gICAgc2VsZWN0b3I6IGZhbHNlLFxuICAgIHRlbXBsYXRlOiAnPGRpdiBjbGFzcz1cInRvb2x0aXBcIiByb2xlPVwidG9vbHRpcFwiPjxkaXYgY2xhc3M9XCJ0b29sdGlwLWFycm93XCI+PC9kaXY+PGRpdiBjbGFzcz1cInRvb2x0aXAtaW5uZXJcIj48L2Rpdj48L2Rpdj4nLFxuICAgIHRyaWdnZXI6ICdob3ZlciBmb2N1cycsXG4gICAgdGl0bGU6ICcnLFxuICAgIGRlbGF5OiAwLFxuICAgIGh0bWw6IGZhbHNlLFxuICAgIGNvbnRhaW5lcjogZmFsc2UsXG4gICAgdmlld3BvcnQ6IHtcbiAgICAgIHNlbGVjdG9yOiAnYm9keScsXG4gICAgICBwYWRkaW5nOiAwXG4gICAgfVxuICB9XG5cbiAgVG9vbHRpcC5wcm90b3R5cGUuaW5pdCA9IGZ1bmN0aW9uICh0eXBlLCBlbGVtZW50LCBvcHRpb25zKSB7XG4gICAgdGhpcy5lbmFibGVkICAgPSB0cnVlXG4gICAgdGhpcy50eXBlICAgICAgPSB0eXBlXG4gICAgdGhpcy4kZWxlbWVudCAgPSAkKGVsZW1lbnQpXG4gICAgdGhpcy5vcHRpb25zICAgPSB0aGlzLmdldE9wdGlvbnMob3B0aW9ucylcbiAgICB0aGlzLiR2aWV3cG9ydCA9IHRoaXMub3B0aW9ucy52aWV3cG9ydCAmJiAkKCQuaXNGdW5jdGlvbih0aGlzLm9wdGlvbnMudmlld3BvcnQpID8gdGhpcy5vcHRpb25zLnZpZXdwb3J0LmNhbGwodGhpcywgdGhpcy4kZWxlbWVudCkgOiAodGhpcy5vcHRpb25zLnZpZXdwb3J0LnNlbGVjdG9yIHx8IHRoaXMub3B0aW9ucy52aWV3cG9ydCkpXG4gICAgdGhpcy5pblN0YXRlICAgPSB7IGNsaWNrOiBmYWxzZSwgaG92ZXI6IGZhbHNlLCBmb2N1czogZmFsc2UgfVxuXG4gICAgaWYgKHRoaXMuJGVsZW1lbnRbMF0gaW5zdGFuY2VvZiBkb2N1bWVudC5jb25zdHJ1Y3RvciAmJiAhdGhpcy5vcHRpb25zLnNlbGVjdG9yKSB7XG4gICAgICB0aHJvdyBuZXcgRXJyb3IoJ2BzZWxlY3RvcmAgb3B0aW9uIG11c3QgYmUgc3BlY2lmaWVkIHdoZW4gaW5pdGlhbGl6aW5nICcgKyB0aGlzLnR5cGUgKyAnIG9uIHRoZSB3aW5kb3cuZG9jdW1lbnQgb2JqZWN0IScpXG4gICAgfVxuXG4gICAgdmFyIHRyaWdnZXJzID0gdGhpcy5vcHRpb25zLnRyaWdnZXIuc3BsaXQoJyAnKVxuXG4gICAgZm9yICh2YXIgaSA9IHRyaWdnZXJzLmxlbmd0aDsgaS0tOykge1xuICAgICAgdmFyIHRyaWdnZXIgPSB0cmlnZ2Vyc1tpXVxuXG4gICAgICBpZiAodHJpZ2dlciA9PSAnY2xpY2snKSB7XG4gICAgICAgIHRoaXMuJGVsZW1lbnQub24oJ2NsaWNrLicgKyB0aGlzLnR5cGUsIHRoaXMub3B0aW9ucy5zZWxlY3RvciwgJC5wcm94eSh0aGlzLnRvZ2dsZSwgdGhpcykpXG4gICAgICB9IGVsc2UgaWYgKHRyaWdnZXIgIT0gJ21hbnVhbCcpIHtcbiAgICAgICAgdmFyIGV2ZW50SW4gID0gdHJpZ2dlciA9PSAnaG92ZXInID8gJ21vdXNlZW50ZXInIDogJ2ZvY3VzaW4nXG4gICAgICAgIHZhciBldmVudE91dCA9IHRyaWdnZXIgPT0gJ2hvdmVyJyA/ICdtb3VzZWxlYXZlJyA6ICdmb2N1c291dCdcblxuICAgICAgICB0aGlzLiRlbGVtZW50Lm9uKGV2ZW50SW4gICsgJy4nICsgdGhpcy50eXBlLCB0aGlzLm9wdGlvbnMuc2VsZWN0b3IsICQucHJveHkodGhpcy5lbnRlciwgdGhpcykpXG4gICAgICAgIHRoaXMuJGVsZW1lbnQub24oZXZlbnRPdXQgKyAnLicgKyB0aGlzLnR5cGUsIHRoaXMub3B0aW9ucy5zZWxlY3RvciwgJC5wcm94eSh0aGlzLmxlYXZlLCB0aGlzKSlcbiAgICAgIH1cbiAgICB9XG5cbiAgICB0aGlzLm9wdGlvbnMuc2VsZWN0b3IgP1xuICAgICAgKHRoaXMuX29wdGlvbnMgPSAkLmV4dGVuZCh7fSwgdGhpcy5vcHRpb25zLCB7IHRyaWdnZXI6ICdtYW51YWwnLCBzZWxlY3RvcjogJycgfSkpIDpcbiAgICAgIHRoaXMuZml4VGl0bGUoKVxuICB9XG5cbiAgVG9vbHRpcC5wcm90b3R5cGUuZ2V0RGVmYXVsdHMgPSBmdW5jdGlvbiAoKSB7XG4gICAgcmV0dXJuIFRvb2x0aXAuREVGQVVMVFNcbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLmdldE9wdGlvbnMgPSBmdW5jdGlvbiAob3B0aW9ucykge1xuICAgIG9wdGlvbnMgPSAkLmV4dGVuZCh7fSwgdGhpcy5nZXREZWZhdWx0cygpLCB0aGlzLiRlbGVtZW50LmRhdGEoKSwgb3B0aW9ucylcblxuICAgIGlmIChvcHRpb25zLmRlbGF5ICYmIHR5cGVvZiBvcHRpb25zLmRlbGF5ID09ICdudW1iZXInKSB7XG4gICAgICBvcHRpb25zLmRlbGF5ID0ge1xuICAgICAgICBzaG93OiBvcHRpb25zLmRlbGF5LFxuICAgICAgICBoaWRlOiBvcHRpb25zLmRlbGF5XG4gICAgICB9XG4gICAgfVxuXG4gICAgcmV0dXJuIG9wdGlvbnNcbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLmdldERlbGVnYXRlT3B0aW9ucyA9IGZ1bmN0aW9uICgpIHtcbiAgICB2YXIgb3B0aW9ucyAgPSB7fVxuICAgIHZhciBkZWZhdWx0cyA9IHRoaXMuZ2V0RGVmYXVsdHMoKVxuXG4gICAgdGhpcy5fb3B0aW9ucyAmJiAkLmVhY2godGhpcy5fb3B0aW9ucywgZnVuY3Rpb24gKGtleSwgdmFsdWUpIHtcbiAgICAgIGlmIChkZWZhdWx0c1trZXldICE9IHZhbHVlKSBvcHRpb25zW2tleV0gPSB2YWx1ZVxuICAgIH0pXG5cbiAgICByZXR1cm4gb3B0aW9uc1xuICB9XG5cbiAgVG9vbHRpcC5wcm90b3R5cGUuZW50ZXIgPSBmdW5jdGlvbiAob2JqKSB7XG4gICAgdmFyIHNlbGYgPSBvYmogaW5zdGFuY2VvZiB0aGlzLmNvbnN0cnVjdG9yID9cbiAgICAgIG9iaiA6ICQob2JqLmN1cnJlbnRUYXJnZXQpLmRhdGEoJ2JzLicgKyB0aGlzLnR5cGUpXG5cbiAgICBpZiAoIXNlbGYpIHtcbiAgICAgIHNlbGYgPSBuZXcgdGhpcy5jb25zdHJ1Y3RvcihvYmouY3VycmVudFRhcmdldCwgdGhpcy5nZXREZWxlZ2F0ZU9wdGlvbnMoKSlcbiAgICAgICQob2JqLmN1cnJlbnRUYXJnZXQpLmRhdGEoJ2JzLicgKyB0aGlzLnR5cGUsIHNlbGYpXG4gICAgfVxuXG4gICAgaWYgKG9iaiBpbnN0YW5jZW9mICQuRXZlbnQpIHtcbiAgICAgIHNlbGYuaW5TdGF0ZVtvYmoudHlwZSA9PSAnZm9jdXNpbicgPyAnZm9jdXMnIDogJ2hvdmVyJ10gPSB0cnVlXG4gICAgfVxuXG4gICAgaWYgKHNlbGYudGlwKCkuaGFzQ2xhc3MoJ2luJykgfHwgc2VsZi5ob3ZlclN0YXRlID09ICdpbicpIHtcbiAgICAgIHNlbGYuaG92ZXJTdGF0ZSA9ICdpbidcbiAgICAgIHJldHVyblxuICAgIH1cblxuICAgIGNsZWFyVGltZW91dChzZWxmLnRpbWVvdXQpXG5cbiAgICBzZWxmLmhvdmVyU3RhdGUgPSAnaW4nXG5cbiAgICBpZiAoIXNlbGYub3B0aW9ucy5kZWxheSB8fCAhc2VsZi5vcHRpb25zLmRlbGF5LnNob3cpIHJldHVybiBzZWxmLnNob3coKVxuXG4gICAgc2VsZi50aW1lb3V0ID0gc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICBpZiAoc2VsZi5ob3ZlclN0YXRlID09ICdpbicpIHNlbGYuc2hvdygpXG4gICAgfSwgc2VsZi5vcHRpb25zLmRlbGF5LnNob3cpXG4gIH1cblxuICBUb29sdGlwLnByb3RvdHlwZS5pc0luU3RhdGVUcnVlID0gZnVuY3Rpb24gKCkge1xuICAgIGZvciAodmFyIGtleSBpbiB0aGlzLmluU3RhdGUpIHtcbiAgICAgIGlmICh0aGlzLmluU3RhdGVba2V5XSkgcmV0dXJuIHRydWVcbiAgICB9XG5cbiAgICByZXR1cm4gZmFsc2VcbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLmxlYXZlID0gZnVuY3Rpb24gKG9iaikge1xuICAgIHZhciBzZWxmID0gb2JqIGluc3RhbmNlb2YgdGhpcy5jb25zdHJ1Y3RvciA/XG4gICAgICBvYmogOiAkKG9iai5jdXJyZW50VGFyZ2V0KS5kYXRhKCdicy4nICsgdGhpcy50eXBlKVxuXG4gICAgaWYgKCFzZWxmKSB7XG4gICAgICBzZWxmID0gbmV3IHRoaXMuY29uc3RydWN0b3Iob2JqLmN1cnJlbnRUYXJnZXQsIHRoaXMuZ2V0RGVsZWdhdGVPcHRpb25zKCkpXG4gICAgICAkKG9iai5jdXJyZW50VGFyZ2V0KS5kYXRhKCdicy4nICsgdGhpcy50eXBlLCBzZWxmKVxuICAgIH1cblxuICAgIGlmIChvYmogaW5zdGFuY2VvZiAkLkV2ZW50KSB7XG4gICAgICBzZWxmLmluU3RhdGVbb2JqLnR5cGUgPT0gJ2ZvY3Vzb3V0JyA/ICdmb2N1cycgOiAnaG92ZXInXSA9IGZhbHNlXG4gICAgfVxuXG4gICAgaWYgKHNlbGYuaXNJblN0YXRlVHJ1ZSgpKSByZXR1cm5cblxuICAgIGNsZWFyVGltZW91dChzZWxmLnRpbWVvdXQpXG5cbiAgICBzZWxmLmhvdmVyU3RhdGUgPSAnb3V0J1xuXG4gICAgaWYgKCFzZWxmLm9wdGlvbnMuZGVsYXkgfHwgIXNlbGYub3B0aW9ucy5kZWxheS5oaWRlKSByZXR1cm4gc2VsZi5oaWRlKClcblxuICAgIHNlbGYudGltZW91dCA9IHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xuICAgICAgaWYgKHNlbGYuaG92ZXJTdGF0ZSA9PSAnb3V0Jykgc2VsZi5oaWRlKClcbiAgICB9LCBzZWxmLm9wdGlvbnMuZGVsYXkuaGlkZSlcbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLnNob3cgPSBmdW5jdGlvbiAoKSB7XG4gICAgdmFyIGUgPSAkLkV2ZW50KCdzaG93LmJzLicgKyB0aGlzLnR5cGUpXG5cbiAgICBpZiAodGhpcy5oYXNDb250ZW50KCkgJiYgdGhpcy5lbmFibGVkKSB7XG4gICAgICB0aGlzLiRlbGVtZW50LnRyaWdnZXIoZSlcblxuICAgICAgdmFyIGluRG9tID0gJC5jb250YWlucyh0aGlzLiRlbGVtZW50WzBdLm93bmVyRG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LCB0aGlzLiRlbGVtZW50WzBdKVxuICAgICAgaWYgKGUuaXNEZWZhdWx0UHJldmVudGVkKCkgfHwgIWluRG9tKSByZXR1cm5cbiAgICAgIHZhciB0aGF0ID0gdGhpc1xuXG4gICAgICB2YXIgJHRpcCA9IHRoaXMudGlwKClcblxuICAgICAgdmFyIHRpcElkID0gdGhpcy5nZXRVSUQodGhpcy50eXBlKVxuXG4gICAgICB0aGlzLnNldENvbnRlbnQoKVxuICAgICAgJHRpcC5hdHRyKCdpZCcsIHRpcElkKVxuICAgICAgdGhpcy4kZWxlbWVudC5hdHRyKCdhcmlhLWRlc2NyaWJlZGJ5JywgdGlwSWQpXG5cbiAgICAgIGlmICh0aGlzLm9wdGlvbnMuYW5pbWF0aW9uKSAkdGlwLmFkZENsYXNzKCdmYWRlJylcblxuICAgICAgdmFyIHBsYWNlbWVudCA9IHR5cGVvZiB0aGlzLm9wdGlvbnMucGxhY2VtZW50ID09ICdmdW5jdGlvbicgP1xuICAgICAgICB0aGlzLm9wdGlvbnMucGxhY2VtZW50LmNhbGwodGhpcywgJHRpcFswXSwgdGhpcy4kZWxlbWVudFswXSkgOlxuICAgICAgICB0aGlzLm9wdGlvbnMucGxhY2VtZW50XG5cbiAgICAgIHZhciBhdXRvVG9rZW4gPSAvXFxzP2F1dG8/XFxzPy9pXG4gICAgICB2YXIgYXV0b1BsYWNlID0gYXV0b1Rva2VuLnRlc3QocGxhY2VtZW50KVxuICAgICAgaWYgKGF1dG9QbGFjZSkgcGxhY2VtZW50ID0gcGxhY2VtZW50LnJlcGxhY2UoYXV0b1Rva2VuLCAnJykgfHwgJ3RvcCdcblxuICAgICAgJHRpcFxuICAgICAgICAuZGV0YWNoKClcbiAgICAgICAgLmNzcyh7IHRvcDogMCwgbGVmdDogMCwgZGlzcGxheTogJ2Jsb2NrJyB9KVxuICAgICAgICAuYWRkQ2xhc3MocGxhY2VtZW50KVxuICAgICAgICAuZGF0YSgnYnMuJyArIHRoaXMudHlwZSwgdGhpcylcblxuICAgICAgdGhpcy5vcHRpb25zLmNvbnRhaW5lciA/ICR0aXAuYXBwZW5kVG8odGhpcy5vcHRpb25zLmNvbnRhaW5lcikgOiAkdGlwLmluc2VydEFmdGVyKHRoaXMuJGVsZW1lbnQpXG4gICAgICB0aGlzLiRlbGVtZW50LnRyaWdnZXIoJ2luc2VydGVkLmJzLicgKyB0aGlzLnR5cGUpXG5cbiAgICAgIHZhciBwb3MgICAgICAgICAgPSB0aGlzLmdldFBvc2l0aW9uKClcbiAgICAgIHZhciBhY3R1YWxXaWR0aCAgPSAkdGlwWzBdLm9mZnNldFdpZHRoXG4gICAgICB2YXIgYWN0dWFsSGVpZ2h0ID0gJHRpcFswXS5vZmZzZXRIZWlnaHRcblxuICAgICAgaWYgKGF1dG9QbGFjZSkge1xuICAgICAgICB2YXIgb3JnUGxhY2VtZW50ID0gcGxhY2VtZW50XG4gICAgICAgIHZhciB2aWV3cG9ydERpbSA9IHRoaXMuZ2V0UG9zaXRpb24odGhpcy4kdmlld3BvcnQpXG5cbiAgICAgICAgcGxhY2VtZW50ID0gcGxhY2VtZW50ID09ICdib3R0b20nICYmIHBvcy5ib3R0b20gKyBhY3R1YWxIZWlnaHQgPiB2aWV3cG9ydERpbS5ib3R0b20gPyAndG9wJyAgICA6XG4gICAgICAgICAgICAgICAgICAgIHBsYWNlbWVudCA9PSAndG9wJyAgICAmJiBwb3MudG9wICAgIC0gYWN0dWFsSGVpZ2h0IDwgdmlld3BvcnREaW0udG9wICAgID8gJ2JvdHRvbScgOlxuICAgICAgICAgICAgICAgICAgICBwbGFjZW1lbnQgPT0gJ3JpZ2h0JyAgJiYgcG9zLnJpZ2h0ICArIGFjdHVhbFdpZHRoICA+IHZpZXdwb3J0RGltLndpZHRoICA/ICdsZWZ0JyAgIDpcbiAgICAgICAgICAgICAgICAgICAgcGxhY2VtZW50ID09ICdsZWZ0JyAgICYmIHBvcy5sZWZ0ICAgLSBhY3R1YWxXaWR0aCAgPCB2aWV3cG9ydERpbS5sZWZ0ICAgPyAncmlnaHQnICA6XG4gICAgICAgICAgICAgICAgICAgIHBsYWNlbWVudFxuXG4gICAgICAgICR0aXBcbiAgICAgICAgICAucmVtb3ZlQ2xhc3Mob3JnUGxhY2VtZW50KVxuICAgICAgICAgIC5hZGRDbGFzcyhwbGFjZW1lbnQpXG4gICAgICB9XG5cbiAgICAgIHZhciBjYWxjdWxhdGVkT2Zmc2V0ID0gdGhpcy5nZXRDYWxjdWxhdGVkT2Zmc2V0KHBsYWNlbWVudCwgcG9zLCBhY3R1YWxXaWR0aCwgYWN0dWFsSGVpZ2h0KVxuXG4gICAgICB0aGlzLmFwcGx5UGxhY2VtZW50KGNhbGN1bGF0ZWRPZmZzZXQsIHBsYWNlbWVudClcblxuICAgICAgdmFyIGNvbXBsZXRlID0gZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgcHJldkhvdmVyU3RhdGUgPSB0aGF0LmhvdmVyU3RhdGVcbiAgICAgICAgdGhhdC4kZWxlbWVudC50cmlnZ2VyKCdzaG93bi5icy4nICsgdGhhdC50eXBlKVxuICAgICAgICB0aGF0LmhvdmVyU3RhdGUgPSBudWxsXG5cbiAgICAgICAgaWYgKHByZXZIb3ZlclN0YXRlID09ICdvdXQnKSB0aGF0LmxlYXZlKHRoYXQpXG4gICAgICB9XG5cbiAgICAgICQuc3VwcG9ydC50cmFuc2l0aW9uICYmIHRoaXMuJHRpcC5oYXNDbGFzcygnZmFkZScpID9cbiAgICAgICAgJHRpcFxuICAgICAgICAgIC5vbmUoJ2JzVHJhbnNpdGlvbkVuZCcsIGNvbXBsZXRlKVxuICAgICAgICAgIC5lbXVsYXRlVHJhbnNpdGlvbkVuZChUb29sdGlwLlRSQU5TSVRJT05fRFVSQVRJT04pIDpcbiAgICAgICAgY29tcGxldGUoKVxuICAgIH1cbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLmFwcGx5UGxhY2VtZW50ID0gZnVuY3Rpb24gKG9mZnNldCwgcGxhY2VtZW50KSB7XG4gICAgdmFyICR0aXAgICA9IHRoaXMudGlwKClcbiAgICB2YXIgd2lkdGggID0gJHRpcFswXS5vZmZzZXRXaWR0aFxuICAgIHZhciBoZWlnaHQgPSAkdGlwWzBdLm9mZnNldEhlaWdodFxuXG4gICAgLy8gbWFudWFsbHkgcmVhZCBtYXJnaW5zIGJlY2F1c2UgZ2V0Qm91bmRpbmdDbGllbnRSZWN0IGluY2x1ZGVzIGRpZmZlcmVuY2VcbiAgICB2YXIgbWFyZ2luVG9wID0gcGFyc2VJbnQoJHRpcC5jc3MoJ21hcmdpbi10b3AnKSwgMTApXG4gICAgdmFyIG1hcmdpbkxlZnQgPSBwYXJzZUludCgkdGlwLmNzcygnbWFyZ2luLWxlZnQnKSwgMTApXG5cbiAgICAvLyB3ZSBtdXN0IGNoZWNrIGZvciBOYU4gZm9yIGllIDgvOVxuICAgIGlmIChpc05hTihtYXJnaW5Ub3ApKSAgbWFyZ2luVG9wICA9IDBcbiAgICBpZiAoaXNOYU4obWFyZ2luTGVmdCkpIG1hcmdpbkxlZnQgPSAwXG5cbiAgICBvZmZzZXQudG9wICArPSBtYXJnaW5Ub3BcbiAgICBvZmZzZXQubGVmdCArPSBtYXJnaW5MZWZ0XG5cbiAgICAvLyAkLmZuLm9mZnNldCBkb2Vzbid0IHJvdW5kIHBpeGVsIHZhbHVlc1xuICAgIC8vIHNvIHdlIHVzZSBzZXRPZmZzZXQgZGlyZWN0bHkgd2l0aCBvdXIgb3duIGZ1bmN0aW9uIEItMFxuICAgICQub2Zmc2V0LnNldE9mZnNldCgkdGlwWzBdLCAkLmV4dGVuZCh7XG4gICAgICB1c2luZzogZnVuY3Rpb24gKHByb3BzKSB7XG4gICAgICAgICR0aXAuY3NzKHtcbiAgICAgICAgICB0b3A6IE1hdGgucm91bmQocHJvcHMudG9wKSxcbiAgICAgICAgICBsZWZ0OiBNYXRoLnJvdW5kKHByb3BzLmxlZnQpXG4gICAgICAgIH0pXG4gICAgICB9XG4gICAgfSwgb2Zmc2V0KSwgMClcblxuICAgICR0aXAuYWRkQ2xhc3MoJ2luJylcblxuICAgIC8vIGNoZWNrIHRvIHNlZSBpZiBwbGFjaW5nIHRpcCBpbiBuZXcgb2Zmc2V0IGNhdXNlZCB0aGUgdGlwIHRvIHJlc2l6ZSBpdHNlbGZcbiAgICB2YXIgYWN0dWFsV2lkdGggID0gJHRpcFswXS5vZmZzZXRXaWR0aFxuICAgIHZhciBhY3R1YWxIZWlnaHQgPSAkdGlwWzBdLm9mZnNldEhlaWdodFxuXG4gICAgaWYgKHBsYWNlbWVudCA9PSAndG9wJyAmJiBhY3R1YWxIZWlnaHQgIT0gaGVpZ2h0KSB7XG4gICAgICBvZmZzZXQudG9wID0gb2Zmc2V0LnRvcCArIGhlaWdodCAtIGFjdHVhbEhlaWdodFxuICAgIH1cblxuICAgIHZhciBkZWx0YSA9IHRoaXMuZ2V0Vmlld3BvcnRBZGp1c3RlZERlbHRhKHBsYWNlbWVudCwgb2Zmc2V0LCBhY3R1YWxXaWR0aCwgYWN0dWFsSGVpZ2h0KVxuXG4gICAgaWYgKGRlbHRhLmxlZnQpIG9mZnNldC5sZWZ0ICs9IGRlbHRhLmxlZnRcbiAgICBlbHNlIG9mZnNldC50b3AgKz0gZGVsdGEudG9wXG5cbiAgICB2YXIgaXNWZXJ0aWNhbCAgICAgICAgICA9IC90b3B8Ym90dG9tLy50ZXN0KHBsYWNlbWVudClcbiAgICB2YXIgYXJyb3dEZWx0YSAgICAgICAgICA9IGlzVmVydGljYWwgPyBkZWx0YS5sZWZ0ICogMiAtIHdpZHRoICsgYWN0dWFsV2lkdGggOiBkZWx0YS50b3AgKiAyIC0gaGVpZ2h0ICsgYWN0dWFsSGVpZ2h0XG4gICAgdmFyIGFycm93T2Zmc2V0UG9zaXRpb24gPSBpc1ZlcnRpY2FsID8gJ29mZnNldFdpZHRoJyA6ICdvZmZzZXRIZWlnaHQnXG5cbiAgICAkdGlwLm9mZnNldChvZmZzZXQpXG4gICAgdGhpcy5yZXBsYWNlQXJyb3coYXJyb3dEZWx0YSwgJHRpcFswXVthcnJvd09mZnNldFBvc2l0aW9uXSwgaXNWZXJ0aWNhbClcbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLnJlcGxhY2VBcnJvdyA9IGZ1bmN0aW9uIChkZWx0YSwgZGltZW5zaW9uLCBpc1ZlcnRpY2FsKSB7XG4gICAgdGhpcy5hcnJvdygpXG4gICAgICAuY3NzKGlzVmVydGljYWwgPyAnbGVmdCcgOiAndG9wJywgNTAgKiAoMSAtIGRlbHRhIC8gZGltZW5zaW9uKSArICclJylcbiAgICAgIC5jc3MoaXNWZXJ0aWNhbCA/ICd0b3AnIDogJ2xlZnQnLCAnJylcbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLnNldENvbnRlbnQgPSBmdW5jdGlvbiAoKSB7XG4gICAgdmFyICR0aXAgID0gdGhpcy50aXAoKVxuICAgIHZhciB0aXRsZSA9IHRoaXMuZ2V0VGl0bGUoKVxuXG4gICAgJHRpcC5maW5kKCcudG9vbHRpcC1pbm5lcicpW3RoaXMub3B0aW9ucy5odG1sID8gJ2h0bWwnIDogJ3RleHQnXSh0aXRsZSlcbiAgICAkdGlwLnJlbW92ZUNsYXNzKCdmYWRlIGluIHRvcCBib3R0b20gbGVmdCByaWdodCcpXG4gIH1cblxuICBUb29sdGlwLnByb3RvdHlwZS5oaWRlID0gZnVuY3Rpb24gKGNhbGxiYWNrKSB7XG4gICAgdmFyIHRoYXQgPSB0aGlzXG4gICAgdmFyICR0aXAgPSAkKHRoaXMuJHRpcClcbiAgICB2YXIgZSAgICA9ICQuRXZlbnQoJ2hpZGUuYnMuJyArIHRoaXMudHlwZSlcblxuICAgIGZ1bmN0aW9uIGNvbXBsZXRlKCkge1xuICAgICAgaWYgKHRoYXQuaG92ZXJTdGF0ZSAhPSAnaW4nKSAkdGlwLmRldGFjaCgpXG4gICAgICB0aGF0LiRlbGVtZW50XG4gICAgICAgIC5yZW1vdmVBdHRyKCdhcmlhLWRlc2NyaWJlZGJ5JylcbiAgICAgICAgLnRyaWdnZXIoJ2hpZGRlbi5icy4nICsgdGhhdC50eXBlKVxuICAgICAgY2FsbGJhY2sgJiYgY2FsbGJhY2soKVxuICAgIH1cblxuICAgIHRoaXMuJGVsZW1lbnQudHJpZ2dlcihlKVxuXG4gICAgaWYgKGUuaXNEZWZhdWx0UHJldmVudGVkKCkpIHJldHVyblxuXG4gICAgJHRpcC5yZW1vdmVDbGFzcygnaW4nKVxuXG4gICAgJC5zdXBwb3J0LnRyYW5zaXRpb24gJiYgJHRpcC5oYXNDbGFzcygnZmFkZScpID9cbiAgICAgICR0aXBcbiAgICAgICAgLm9uZSgnYnNUcmFuc2l0aW9uRW5kJywgY29tcGxldGUpXG4gICAgICAgIC5lbXVsYXRlVHJhbnNpdGlvbkVuZChUb29sdGlwLlRSQU5TSVRJT05fRFVSQVRJT04pIDpcbiAgICAgIGNvbXBsZXRlKClcblxuICAgIHRoaXMuaG92ZXJTdGF0ZSA9IG51bGxcblxuICAgIHJldHVybiB0aGlzXG4gIH1cblxuICBUb29sdGlwLnByb3RvdHlwZS5maXhUaXRsZSA9IGZ1bmN0aW9uICgpIHtcbiAgICB2YXIgJGUgPSB0aGlzLiRlbGVtZW50XG4gICAgaWYgKCRlLmF0dHIoJ3RpdGxlJykgfHwgdHlwZW9mICRlLmF0dHIoJ2RhdGEtb3JpZ2luYWwtdGl0bGUnKSAhPSAnc3RyaW5nJykge1xuICAgICAgJGUuYXR0cignZGF0YS1vcmlnaW5hbC10aXRsZScsICRlLmF0dHIoJ3RpdGxlJykgfHwgJycpLmF0dHIoJ3RpdGxlJywgJycpXG4gICAgfVxuICB9XG5cbiAgVG9vbHRpcC5wcm90b3R5cGUuaGFzQ29udGVudCA9IGZ1bmN0aW9uICgpIHtcbiAgICByZXR1cm4gdGhpcy5nZXRUaXRsZSgpXG4gIH1cblxuICBUb29sdGlwLnByb3RvdHlwZS5nZXRQb3NpdGlvbiA9IGZ1bmN0aW9uICgkZWxlbWVudCkge1xuICAgICRlbGVtZW50ICAgPSAkZWxlbWVudCB8fCB0aGlzLiRlbGVtZW50XG5cbiAgICB2YXIgZWwgICAgID0gJGVsZW1lbnRbMF1cbiAgICB2YXIgaXNCb2R5ID0gZWwudGFnTmFtZSA9PSAnQk9EWSdcblxuICAgIHZhciBlbFJlY3QgICAgPSBlbC5nZXRCb3VuZGluZ0NsaWVudFJlY3QoKVxuICAgIGlmIChlbFJlY3Qud2lkdGggPT0gbnVsbCkge1xuICAgICAgLy8gd2lkdGggYW5kIGhlaWdodCBhcmUgbWlzc2luZyBpbiBJRTgsIHNvIGNvbXB1dGUgdGhlbSBtYW51YWxseTsgc2VlIGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9pc3N1ZXMvMTQwOTNcbiAgICAgIGVsUmVjdCA9ICQuZXh0ZW5kKHt9LCBlbFJlY3QsIHsgd2lkdGg6IGVsUmVjdC5yaWdodCAtIGVsUmVjdC5sZWZ0LCBoZWlnaHQ6IGVsUmVjdC5ib3R0b20gLSBlbFJlY3QudG9wIH0pXG4gICAgfVxuICAgIHZhciBlbE9mZnNldCAgPSBpc0JvZHkgPyB7IHRvcDogMCwgbGVmdDogMCB9IDogJGVsZW1lbnQub2Zmc2V0KClcbiAgICB2YXIgc2Nyb2xsICAgID0geyBzY3JvbGw6IGlzQm9keSA/IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5zY3JvbGxUb3AgfHwgZG9jdW1lbnQuYm9keS5zY3JvbGxUb3AgOiAkZWxlbWVudC5zY3JvbGxUb3AoKSB9XG4gICAgdmFyIG91dGVyRGltcyA9IGlzQm9keSA/IHsgd2lkdGg6ICQod2luZG93KS53aWR0aCgpLCBoZWlnaHQ6ICQod2luZG93KS5oZWlnaHQoKSB9IDogbnVsbFxuXG4gICAgcmV0dXJuICQuZXh0ZW5kKHt9LCBlbFJlY3QsIHNjcm9sbCwgb3V0ZXJEaW1zLCBlbE9mZnNldClcbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLmdldENhbGN1bGF0ZWRPZmZzZXQgPSBmdW5jdGlvbiAocGxhY2VtZW50LCBwb3MsIGFjdHVhbFdpZHRoLCBhY3R1YWxIZWlnaHQpIHtcbiAgICByZXR1cm4gcGxhY2VtZW50ID09ICdib3R0b20nID8geyB0b3A6IHBvcy50b3AgKyBwb3MuaGVpZ2h0LCAgIGxlZnQ6IHBvcy5sZWZ0ICsgcG9zLndpZHRoIC8gMiAtIGFjdHVhbFdpZHRoIC8gMiB9IDpcbiAgICAgICAgICAgcGxhY2VtZW50ID09ICd0b3AnICAgID8geyB0b3A6IHBvcy50b3AgLSBhY3R1YWxIZWlnaHQsIGxlZnQ6IHBvcy5sZWZ0ICsgcG9zLndpZHRoIC8gMiAtIGFjdHVhbFdpZHRoIC8gMiB9IDpcbiAgICAgICAgICAgcGxhY2VtZW50ID09ICdsZWZ0JyAgID8geyB0b3A6IHBvcy50b3AgKyBwb3MuaGVpZ2h0IC8gMiAtIGFjdHVhbEhlaWdodCAvIDIsIGxlZnQ6IHBvcy5sZWZ0IC0gYWN0dWFsV2lkdGggfSA6XG4gICAgICAgIC8qIHBsYWNlbWVudCA9PSAncmlnaHQnICovIHsgdG9wOiBwb3MudG9wICsgcG9zLmhlaWdodCAvIDIgLSBhY3R1YWxIZWlnaHQgLyAyLCBsZWZ0OiBwb3MubGVmdCArIHBvcy53aWR0aCB9XG5cbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLmdldFZpZXdwb3J0QWRqdXN0ZWREZWx0YSA9IGZ1bmN0aW9uIChwbGFjZW1lbnQsIHBvcywgYWN0dWFsV2lkdGgsIGFjdHVhbEhlaWdodCkge1xuICAgIHZhciBkZWx0YSA9IHsgdG9wOiAwLCBsZWZ0OiAwIH1cbiAgICBpZiAoIXRoaXMuJHZpZXdwb3J0KSByZXR1cm4gZGVsdGFcblxuICAgIHZhciB2aWV3cG9ydFBhZGRpbmcgPSB0aGlzLm9wdGlvbnMudmlld3BvcnQgJiYgdGhpcy5vcHRpb25zLnZpZXdwb3J0LnBhZGRpbmcgfHwgMFxuICAgIHZhciB2aWV3cG9ydERpbWVuc2lvbnMgPSB0aGlzLmdldFBvc2l0aW9uKHRoaXMuJHZpZXdwb3J0KVxuXG4gICAgaWYgKC9yaWdodHxsZWZ0Ly50ZXN0KHBsYWNlbWVudCkpIHtcbiAgICAgIHZhciB0b3BFZGdlT2Zmc2V0ICAgID0gcG9zLnRvcCAtIHZpZXdwb3J0UGFkZGluZyAtIHZpZXdwb3J0RGltZW5zaW9ucy5zY3JvbGxcbiAgICAgIHZhciBib3R0b21FZGdlT2Zmc2V0ID0gcG9zLnRvcCArIHZpZXdwb3J0UGFkZGluZyAtIHZpZXdwb3J0RGltZW5zaW9ucy5zY3JvbGwgKyBhY3R1YWxIZWlnaHRcbiAgICAgIGlmICh0b3BFZGdlT2Zmc2V0IDwgdmlld3BvcnREaW1lbnNpb25zLnRvcCkgeyAvLyB0b3Agb3ZlcmZsb3dcbiAgICAgICAgZGVsdGEudG9wID0gdmlld3BvcnREaW1lbnNpb25zLnRvcCAtIHRvcEVkZ2VPZmZzZXRcbiAgICAgIH0gZWxzZSBpZiAoYm90dG9tRWRnZU9mZnNldCA+IHZpZXdwb3J0RGltZW5zaW9ucy50b3AgKyB2aWV3cG9ydERpbWVuc2lvbnMuaGVpZ2h0KSB7IC8vIGJvdHRvbSBvdmVyZmxvd1xuICAgICAgICBkZWx0YS50b3AgPSB2aWV3cG9ydERpbWVuc2lvbnMudG9wICsgdmlld3BvcnREaW1lbnNpb25zLmhlaWdodCAtIGJvdHRvbUVkZ2VPZmZzZXRcbiAgICAgIH1cbiAgICB9IGVsc2Uge1xuICAgICAgdmFyIGxlZnRFZGdlT2Zmc2V0ICA9IHBvcy5sZWZ0IC0gdmlld3BvcnRQYWRkaW5nXG4gICAgICB2YXIgcmlnaHRFZGdlT2Zmc2V0ID0gcG9zLmxlZnQgKyB2aWV3cG9ydFBhZGRpbmcgKyBhY3R1YWxXaWR0aFxuICAgICAgaWYgKGxlZnRFZGdlT2Zmc2V0IDwgdmlld3BvcnREaW1lbnNpb25zLmxlZnQpIHsgLy8gbGVmdCBvdmVyZmxvd1xuICAgICAgICBkZWx0YS5sZWZ0ID0gdmlld3BvcnREaW1lbnNpb25zLmxlZnQgLSBsZWZ0RWRnZU9mZnNldFxuICAgICAgfSBlbHNlIGlmIChyaWdodEVkZ2VPZmZzZXQgPiB2aWV3cG9ydERpbWVuc2lvbnMucmlnaHQpIHsgLy8gcmlnaHQgb3ZlcmZsb3dcbiAgICAgICAgZGVsdGEubGVmdCA9IHZpZXdwb3J0RGltZW5zaW9ucy5sZWZ0ICsgdmlld3BvcnREaW1lbnNpb25zLndpZHRoIC0gcmlnaHRFZGdlT2Zmc2V0XG4gICAgICB9XG4gICAgfVxuXG4gICAgcmV0dXJuIGRlbHRhXG4gIH1cblxuICBUb29sdGlwLnByb3RvdHlwZS5nZXRUaXRsZSA9IGZ1bmN0aW9uICgpIHtcbiAgICB2YXIgdGl0bGVcbiAgICB2YXIgJGUgPSB0aGlzLiRlbGVtZW50XG4gICAgdmFyIG8gID0gdGhpcy5vcHRpb25zXG5cbiAgICB0aXRsZSA9ICRlLmF0dHIoJ2RhdGEtb3JpZ2luYWwtdGl0bGUnKVxuICAgICAgfHwgKHR5cGVvZiBvLnRpdGxlID09ICdmdW5jdGlvbicgPyBvLnRpdGxlLmNhbGwoJGVbMF0pIDogIG8udGl0bGUpXG5cbiAgICByZXR1cm4gdGl0bGVcbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLmdldFVJRCA9IGZ1bmN0aW9uIChwcmVmaXgpIHtcbiAgICBkbyBwcmVmaXggKz0gfn4oTWF0aC5yYW5kb20oKSAqIDEwMDAwMDApXG4gICAgd2hpbGUgKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKHByZWZpeCkpXG4gICAgcmV0dXJuIHByZWZpeFxuICB9XG5cbiAgVG9vbHRpcC5wcm90b3R5cGUudGlwID0gZnVuY3Rpb24gKCkge1xuICAgIGlmICghdGhpcy4kdGlwKSB7XG4gICAgICB0aGlzLiR0aXAgPSAkKHRoaXMub3B0aW9ucy50ZW1wbGF0ZSlcbiAgICAgIGlmICh0aGlzLiR0aXAubGVuZ3RoICE9IDEpIHtcbiAgICAgICAgdGhyb3cgbmV3IEVycm9yKHRoaXMudHlwZSArICcgYHRlbXBsYXRlYCBvcHRpb24gbXVzdCBjb25zaXN0IG9mIGV4YWN0bHkgMSB0b3AtbGV2ZWwgZWxlbWVudCEnKVxuICAgICAgfVxuICAgIH1cbiAgICByZXR1cm4gdGhpcy4kdGlwXG4gIH1cblxuICBUb29sdGlwLnByb3RvdHlwZS5hcnJvdyA9IGZ1bmN0aW9uICgpIHtcbiAgICByZXR1cm4gKHRoaXMuJGFycm93ID0gdGhpcy4kYXJyb3cgfHwgdGhpcy50aXAoKS5maW5kKCcudG9vbHRpcC1hcnJvdycpKVxuICB9XG5cbiAgVG9vbHRpcC5wcm90b3R5cGUuZW5hYmxlID0gZnVuY3Rpb24gKCkge1xuICAgIHRoaXMuZW5hYmxlZCA9IHRydWVcbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLmRpc2FibGUgPSBmdW5jdGlvbiAoKSB7XG4gICAgdGhpcy5lbmFibGVkID0gZmFsc2VcbiAgfVxuXG4gIFRvb2x0aXAucHJvdG90eXBlLnRvZ2dsZUVuYWJsZWQgPSBmdW5jdGlvbiAoKSB7XG4gICAgdGhpcy5lbmFibGVkID0gIXRoaXMuZW5hYmxlZFxuICB9XG5cbiAgVG9vbHRpcC5wcm90b3R5cGUudG9nZ2xlID0gZnVuY3Rpb24gKGUpIHtcbiAgICB2YXIgc2VsZiA9IHRoaXNcbiAgICBpZiAoZSkge1xuICAgICAgc2VsZiA9ICQoZS5jdXJyZW50VGFyZ2V0KS5kYXRhKCdicy4nICsgdGhpcy50eXBlKVxuICAgICAgaWYgKCFzZWxmKSB7XG4gICAgICAgIHNlbGYgPSBuZXcgdGhpcy5jb25zdHJ1Y3RvcihlLmN1cnJlbnRUYXJnZXQsIHRoaXMuZ2V0RGVsZWdhdGVPcHRpb25zKCkpXG4gICAgICAgICQoZS5jdXJyZW50VGFyZ2V0KS5kYXRhKCdicy4nICsgdGhpcy50eXBlLCBzZWxmKVxuICAgICAgfVxuICAgIH1cblxuICAgIGlmIChlKSB7XG4gICAgICBzZWxmLmluU3RhdGUuY2xpY2sgPSAhc2VsZi5pblN0YXRlLmNsaWNrXG4gICAgICBpZiAoc2VsZi5pc0luU3RhdGVUcnVlKCkpIHNlbGYuZW50ZXIoc2VsZilcbiAgICAgIGVsc2Ugc2VsZi5sZWF2ZShzZWxmKVxuICAgIH0gZWxzZSB7XG4gICAgICBzZWxmLnRpcCgpLmhhc0NsYXNzKCdpbicpID8gc2VsZi5sZWF2ZShzZWxmKSA6IHNlbGYuZW50ZXIoc2VsZilcbiAgICB9XG4gIH1cblxuICBUb29sdGlwLnByb3RvdHlwZS5kZXN0cm95ID0gZnVuY3Rpb24gKCkge1xuICAgIHZhciB0aGF0ID0gdGhpc1xuICAgIGNsZWFyVGltZW91dCh0aGlzLnRpbWVvdXQpXG4gICAgdGhpcy5oaWRlKGZ1bmN0aW9uICgpIHtcbiAgICAgIHRoYXQuJGVsZW1lbnQub2ZmKCcuJyArIHRoYXQudHlwZSkucmVtb3ZlRGF0YSgnYnMuJyArIHRoYXQudHlwZSlcbiAgICAgIGlmICh0aGF0LiR0aXApIHtcbiAgICAgICAgdGhhdC4kdGlwLmRldGFjaCgpXG4gICAgICB9XG4gICAgICB0aGF0LiR0aXAgPSBudWxsXG4gICAgICB0aGF0LiRhcnJvdyA9IG51bGxcbiAgICAgIHRoYXQuJHZpZXdwb3J0ID0gbnVsbFxuICAgIH0pXG4gIH1cblxuXG4gIC8vIFRPT0xUSVAgUExVR0lOIERFRklOSVRJT05cbiAgLy8gPT09PT09PT09PT09PT09PT09PT09PT09PVxuXG4gIGZ1bmN0aW9uIFBsdWdpbihvcHRpb24pIHtcbiAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgIHZhciAkdGhpcyAgID0gJCh0aGlzKVxuICAgICAgdmFyIGRhdGEgICAgPSAkdGhpcy5kYXRhKCdicy50b29sdGlwJylcbiAgICAgIHZhciBvcHRpb25zID0gdHlwZW9mIG9wdGlvbiA9PSAnb2JqZWN0JyAmJiBvcHRpb25cblxuICAgICAgaWYgKCFkYXRhICYmIC9kZXN0cm95fGhpZGUvLnRlc3Qob3B0aW9uKSkgcmV0dXJuXG4gICAgICBpZiAoIWRhdGEpICR0aGlzLmRhdGEoJ2JzLnRvb2x0aXAnLCAoZGF0YSA9IG5ldyBUb29sdGlwKHRoaXMsIG9wdGlvbnMpKSlcbiAgICAgIGlmICh0eXBlb2Ygb3B0aW9uID09ICdzdHJpbmcnKSBkYXRhW29wdGlvbl0oKVxuICAgIH0pXG4gIH1cblxuICB2YXIgb2xkID0gJC5mbi50b29sdGlwXG5cbiAgJC5mbi50b29sdGlwICAgICAgICAgICAgID0gUGx1Z2luXG4gICQuZm4udG9vbHRpcC5Db25zdHJ1Y3RvciA9IFRvb2x0aXBcblxuXG4gIC8vIFRPT0xUSVAgTk8gQ09ORkxJQ1RcbiAgLy8gPT09PT09PT09PT09PT09PT09PVxuXG4gICQuZm4udG9vbHRpcC5ub0NvbmZsaWN0ID0gZnVuY3Rpb24gKCkge1xuICAgICQuZm4udG9vbHRpcCA9IG9sZFxuICAgIHJldHVybiB0aGlzXG4gIH1cblxufShqUXVlcnkpO1xuXG4vKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiAqIEJvb3RzdHJhcDogcG9wb3Zlci5qcyB2My4zLjZcbiAqIGh0dHA6Ly9nZXRib290c3RyYXAuY29tL2phdmFzY3JpcHQvI3BvcG92ZXJzXG4gKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiAqIENvcHlyaWdodCAyMDExLTIwMTUgVHdpdHRlciwgSW5jLlxuICogTGljZW5zZWQgdW5kZXIgTUlUIChodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvYmxvYi9tYXN0ZXIvTElDRU5TRSlcbiAqID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSAqL1xuXG5cbitmdW5jdGlvbiAoJCkge1xuICAndXNlIHN0cmljdCc7XG5cbiAgLy8gUE9QT1ZFUiBQVUJMSUMgQ0xBU1MgREVGSU5JVElPTlxuICAvLyA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgdmFyIFBvcG92ZXIgPSBmdW5jdGlvbiAoZWxlbWVudCwgb3B0aW9ucykge1xuICAgIHRoaXMuaW5pdCgncG9wb3ZlcicsIGVsZW1lbnQsIG9wdGlvbnMpXG4gIH1cblxuICBpZiAoISQuZm4udG9vbHRpcCkgdGhyb3cgbmV3IEVycm9yKCdQb3BvdmVyIHJlcXVpcmVzIHRvb2x0aXAuanMnKVxuXG4gIFBvcG92ZXIuVkVSU0lPTiAgPSAnMy4zLjYnXG5cbiAgUG9wb3Zlci5ERUZBVUxUUyA9ICQuZXh0ZW5kKHt9LCAkLmZuLnRvb2x0aXAuQ29uc3RydWN0b3IuREVGQVVMVFMsIHtcbiAgICBwbGFjZW1lbnQ6ICdyaWdodCcsXG4gICAgdHJpZ2dlcjogJ2NsaWNrJyxcbiAgICBjb250ZW50OiAnJyxcbiAgICB0ZW1wbGF0ZTogJzxkaXYgY2xhc3M9XCJwb3BvdmVyXCIgcm9sZT1cInRvb2x0aXBcIj48ZGl2IGNsYXNzPVwiYXJyb3dcIj48L2Rpdj48aDMgY2xhc3M9XCJwb3BvdmVyLXRpdGxlXCI+PC9oMz48ZGl2IGNsYXNzPVwicG9wb3Zlci1jb250ZW50XCI+PC9kaXY+PC9kaXY+J1xuICB9KVxuXG5cbiAgLy8gTk9URTogUE9QT1ZFUiBFWFRFTkRTIHRvb2x0aXAuanNcbiAgLy8gPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cblxuICBQb3BvdmVyLnByb3RvdHlwZSA9ICQuZXh0ZW5kKHt9LCAkLmZuLnRvb2x0aXAuQ29uc3RydWN0b3IucHJvdG90eXBlKVxuXG4gIFBvcG92ZXIucHJvdG90eXBlLmNvbnN0cnVjdG9yID0gUG9wb3ZlclxuXG4gIFBvcG92ZXIucHJvdG90eXBlLmdldERlZmF1bHRzID0gZnVuY3Rpb24gKCkge1xuICAgIHJldHVybiBQb3BvdmVyLkRFRkFVTFRTXG4gIH1cblxuICBQb3BvdmVyLnByb3RvdHlwZS5zZXRDb250ZW50ID0gZnVuY3Rpb24gKCkge1xuICAgIHZhciAkdGlwICAgID0gdGhpcy50aXAoKVxuICAgIHZhciB0aXRsZSAgID0gdGhpcy5nZXRUaXRsZSgpXG4gICAgdmFyIGNvbnRlbnQgPSB0aGlzLmdldENvbnRlbnQoKVxuXG4gICAgJHRpcC5maW5kKCcucG9wb3Zlci10aXRsZScpW3RoaXMub3B0aW9ucy5odG1sID8gJ2h0bWwnIDogJ3RleHQnXSh0aXRsZSlcbiAgICAkdGlwLmZpbmQoJy5wb3BvdmVyLWNvbnRlbnQnKS5jaGlsZHJlbigpLmRldGFjaCgpLmVuZCgpWyAvLyB3ZSB1c2UgYXBwZW5kIGZvciBodG1sIG9iamVjdHMgdG8gbWFpbnRhaW4ganMgZXZlbnRzXG4gICAgICB0aGlzLm9wdGlvbnMuaHRtbCA/ICh0eXBlb2YgY29udGVudCA9PSAnc3RyaW5nJyA/ICdodG1sJyA6ICdhcHBlbmQnKSA6ICd0ZXh0J1xuICAgIF0oY29udGVudClcblxuICAgICR0aXAucmVtb3ZlQ2xhc3MoJ2ZhZGUgdG9wIGJvdHRvbSBsZWZ0IHJpZ2h0IGluJylcblxuICAgIC8vIElFOCBkb2Vzbid0IGFjY2VwdCBoaWRpbmcgdmlhIHRoZSBgOmVtcHR5YCBwc2V1ZG8gc2VsZWN0b3IsIHdlIGhhdmUgdG8gZG9cbiAgICAvLyB0aGlzIG1hbnVhbGx5IGJ5IGNoZWNraW5nIHRoZSBjb250ZW50cy5cbiAgICBpZiAoISR0aXAuZmluZCgnLnBvcG92ZXItdGl0bGUnKS5odG1sKCkpICR0aXAuZmluZCgnLnBvcG92ZXItdGl0bGUnKS5oaWRlKClcbiAgfVxuXG4gIFBvcG92ZXIucHJvdG90eXBlLmhhc0NvbnRlbnQgPSBmdW5jdGlvbiAoKSB7XG4gICAgcmV0dXJuIHRoaXMuZ2V0VGl0bGUoKSB8fCB0aGlzLmdldENvbnRlbnQoKVxuICB9XG5cbiAgUG9wb3Zlci5wcm90b3R5cGUuZ2V0Q29udGVudCA9IGZ1bmN0aW9uICgpIHtcbiAgICB2YXIgJGUgPSB0aGlzLiRlbGVtZW50XG4gICAgdmFyIG8gID0gdGhpcy5vcHRpb25zXG5cbiAgICByZXR1cm4gJGUuYXR0cignZGF0YS1jb250ZW50JylcbiAgICAgIHx8ICh0eXBlb2Ygby5jb250ZW50ID09ICdmdW5jdGlvbicgP1xuICAgICAgICAgICAgby5jb250ZW50LmNhbGwoJGVbMF0pIDpcbiAgICAgICAgICAgIG8uY29udGVudClcbiAgfVxuXG4gIFBvcG92ZXIucHJvdG90eXBlLmFycm93ID0gZnVuY3Rpb24gKCkge1xuICAgIHJldHVybiAodGhpcy4kYXJyb3cgPSB0aGlzLiRhcnJvdyB8fCB0aGlzLnRpcCgpLmZpbmQoJy5hcnJvdycpKVxuICB9XG5cblxuICAvLyBQT1BPVkVSIFBMVUdJTiBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT09PT1cblxuICBmdW5jdGlvbiBQbHVnaW4ob3B0aW9uKSB7XG4gICAgcmV0dXJuIHRoaXMuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICB2YXIgJHRoaXMgICA9ICQodGhpcylcbiAgICAgIHZhciBkYXRhICAgID0gJHRoaXMuZGF0YSgnYnMucG9wb3ZlcicpXG4gICAgICB2YXIgb3B0aW9ucyA9IHR5cGVvZiBvcHRpb24gPT0gJ29iamVjdCcgJiYgb3B0aW9uXG5cbiAgICAgIGlmICghZGF0YSAmJiAvZGVzdHJveXxoaWRlLy50ZXN0KG9wdGlvbikpIHJldHVyblxuICAgICAgaWYgKCFkYXRhKSAkdGhpcy5kYXRhKCdicy5wb3BvdmVyJywgKGRhdGEgPSBuZXcgUG9wb3Zlcih0aGlzLCBvcHRpb25zKSkpXG4gICAgICBpZiAodHlwZW9mIG9wdGlvbiA9PSAnc3RyaW5nJykgZGF0YVtvcHRpb25dKClcbiAgICB9KVxuICB9XG5cbiAgdmFyIG9sZCA9ICQuZm4ucG9wb3ZlclxuXG4gICQuZm4ucG9wb3ZlciAgICAgICAgICAgICA9IFBsdWdpblxuICAkLmZuLnBvcG92ZXIuQ29uc3RydWN0b3IgPSBQb3BvdmVyXG5cblxuICAvLyBQT1BPVkVSIE5PIENPTkZMSUNUXG4gIC8vID09PT09PT09PT09PT09PT09PT1cblxuICAkLmZuLnBvcG92ZXIubm9Db25mbGljdCA9IGZ1bmN0aW9uICgpIHtcbiAgICAkLmZuLnBvcG92ZXIgPSBvbGRcbiAgICByZXR1cm4gdGhpc1xuICB9XG5cbn0oalF1ZXJ5KTtcblxuLyogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4gKiBCb290c3RyYXA6IHNjcm9sbHNweS5qcyB2My4zLjZcbiAqIGh0dHA6Ly9nZXRib290c3RyYXAuY29tL2phdmFzY3JpcHQvI3Njcm9sbHNweVxuICogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4gKiBDb3B5cmlnaHQgMjAxMS0yMDE1IFR3aXR0ZXIsIEluYy5cbiAqIExpY2Vuc2VkIHVuZGVyIE1JVCAoaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL2Jsb2IvbWFzdGVyL0xJQ0VOU0UpXG4gKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0gKi9cblxuXG4rZnVuY3Rpb24gKCQpIHtcbiAgJ3VzZSBzdHJpY3QnO1xuXG4gIC8vIFNDUk9MTFNQWSBDTEFTUyBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgZnVuY3Rpb24gU2Nyb2xsU3B5KGVsZW1lbnQsIG9wdGlvbnMpIHtcbiAgICB0aGlzLiRib2R5ICAgICAgICAgID0gJChkb2N1bWVudC5ib2R5KVxuICAgIHRoaXMuJHNjcm9sbEVsZW1lbnQgPSAkKGVsZW1lbnQpLmlzKGRvY3VtZW50LmJvZHkpID8gJCh3aW5kb3cpIDogJChlbGVtZW50KVxuICAgIHRoaXMub3B0aW9ucyAgICAgICAgPSAkLmV4dGVuZCh7fSwgU2Nyb2xsU3B5LkRFRkFVTFRTLCBvcHRpb25zKVxuICAgIHRoaXMuc2VsZWN0b3IgICAgICAgPSAodGhpcy5vcHRpb25zLnRhcmdldCB8fCAnJykgKyAnIC5uYXYgbGkgPiBhJ1xuICAgIHRoaXMub2Zmc2V0cyAgICAgICAgPSBbXVxuICAgIHRoaXMudGFyZ2V0cyAgICAgICAgPSBbXVxuICAgIHRoaXMuYWN0aXZlVGFyZ2V0ICAgPSBudWxsXG4gICAgdGhpcy5zY3JvbGxIZWlnaHQgICA9IDBcblxuICAgIHRoaXMuJHNjcm9sbEVsZW1lbnQub24oJ3Njcm9sbC5icy5zY3JvbGxzcHknLCAkLnByb3h5KHRoaXMucHJvY2VzcywgdGhpcykpXG4gICAgdGhpcy5yZWZyZXNoKClcbiAgICB0aGlzLnByb2Nlc3MoKVxuICB9XG5cbiAgU2Nyb2xsU3B5LlZFUlNJT04gID0gJzMuMy42J1xuXG4gIFNjcm9sbFNweS5ERUZBVUxUUyA9IHtcbiAgICBvZmZzZXQ6IDEwXG4gIH1cblxuICBTY3JvbGxTcHkucHJvdG90eXBlLmdldFNjcm9sbEhlaWdodCA9IGZ1bmN0aW9uICgpIHtcbiAgICByZXR1cm4gdGhpcy4kc2Nyb2xsRWxlbWVudFswXS5zY3JvbGxIZWlnaHQgfHwgTWF0aC5tYXgodGhpcy4kYm9keVswXS5zY3JvbGxIZWlnaHQsIGRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5zY3JvbGxIZWlnaHQpXG4gIH1cblxuICBTY3JvbGxTcHkucHJvdG90eXBlLnJlZnJlc2ggPSBmdW5jdGlvbiAoKSB7XG4gICAgdmFyIHRoYXQgICAgICAgICAgPSB0aGlzXG4gICAgdmFyIG9mZnNldE1ldGhvZCAgPSAnb2Zmc2V0J1xuICAgIHZhciBvZmZzZXRCYXNlICAgID0gMFxuXG4gICAgdGhpcy5vZmZzZXRzICAgICAgPSBbXVxuICAgIHRoaXMudGFyZ2V0cyAgICAgID0gW11cbiAgICB0aGlzLnNjcm9sbEhlaWdodCA9IHRoaXMuZ2V0U2Nyb2xsSGVpZ2h0KClcblxuICAgIGlmICghJC5pc1dpbmRvdyh0aGlzLiRzY3JvbGxFbGVtZW50WzBdKSkge1xuICAgICAgb2Zmc2V0TWV0aG9kID0gJ3Bvc2l0aW9uJ1xuICAgICAgb2Zmc2V0QmFzZSAgID0gdGhpcy4kc2Nyb2xsRWxlbWVudC5zY3JvbGxUb3AoKVxuICAgIH1cblxuICAgIHRoaXMuJGJvZHlcbiAgICAgIC5maW5kKHRoaXMuc2VsZWN0b3IpXG4gICAgICAubWFwKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgdmFyICRlbCAgID0gJCh0aGlzKVxuICAgICAgICB2YXIgaHJlZiAgPSAkZWwuZGF0YSgndGFyZ2V0JykgfHwgJGVsLmF0dHIoJ2hyZWYnKVxuICAgICAgICB2YXIgJGhyZWYgPSAvXiMuLy50ZXN0KGhyZWYpICYmICQoaHJlZilcblxuICAgICAgICByZXR1cm4gKCRocmVmXG4gICAgICAgICAgJiYgJGhyZWYubGVuZ3RoXG4gICAgICAgICAgJiYgJGhyZWYuaXMoJzp2aXNpYmxlJylcbiAgICAgICAgICAmJiBbWyRocmVmW29mZnNldE1ldGhvZF0oKS50b3AgKyBvZmZzZXRCYXNlLCBocmVmXV0pIHx8IG51bGxcbiAgICAgIH0pXG4gICAgICAuc29ydChmdW5jdGlvbiAoYSwgYikgeyByZXR1cm4gYVswXSAtIGJbMF0gfSlcbiAgICAgIC5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgdGhhdC5vZmZzZXRzLnB1c2godGhpc1swXSlcbiAgICAgICAgdGhhdC50YXJnZXRzLnB1c2godGhpc1sxXSlcbiAgICAgIH0pXG4gIH1cblxuICBTY3JvbGxTcHkucHJvdG90eXBlLnByb2Nlc3MgPSBmdW5jdGlvbiAoKSB7XG4gICAgdmFyIHNjcm9sbFRvcCAgICA9IHRoaXMuJHNjcm9sbEVsZW1lbnQuc2Nyb2xsVG9wKCkgKyB0aGlzLm9wdGlvbnMub2Zmc2V0XG4gICAgdmFyIHNjcm9sbEhlaWdodCA9IHRoaXMuZ2V0U2Nyb2xsSGVpZ2h0KClcbiAgICB2YXIgbWF4U2Nyb2xsICAgID0gdGhpcy5vcHRpb25zLm9mZnNldCArIHNjcm9sbEhlaWdodCAtIHRoaXMuJHNjcm9sbEVsZW1lbnQuaGVpZ2h0KClcbiAgICB2YXIgb2Zmc2V0cyAgICAgID0gdGhpcy5vZmZzZXRzXG4gICAgdmFyIHRhcmdldHMgICAgICA9IHRoaXMudGFyZ2V0c1xuICAgIHZhciBhY3RpdmVUYXJnZXQgPSB0aGlzLmFjdGl2ZVRhcmdldFxuICAgIHZhciBpXG5cbiAgICBpZiAodGhpcy5zY3JvbGxIZWlnaHQgIT0gc2Nyb2xsSGVpZ2h0KSB7XG4gICAgICB0aGlzLnJlZnJlc2goKVxuICAgIH1cblxuICAgIGlmIChzY3JvbGxUb3AgPj0gbWF4U2Nyb2xsKSB7XG4gICAgICByZXR1cm4gYWN0aXZlVGFyZ2V0ICE9IChpID0gdGFyZ2V0c1t0YXJnZXRzLmxlbmd0aCAtIDFdKSAmJiB0aGlzLmFjdGl2YXRlKGkpXG4gICAgfVxuXG4gICAgaWYgKGFjdGl2ZVRhcmdldCAmJiBzY3JvbGxUb3AgPCBvZmZzZXRzWzBdKSB7XG4gICAgICB0aGlzLmFjdGl2ZVRhcmdldCA9IG51bGxcbiAgICAgIHJldHVybiB0aGlzLmNsZWFyKClcbiAgICB9XG5cbiAgICBmb3IgKGkgPSBvZmZzZXRzLmxlbmd0aDsgaS0tOykge1xuICAgICAgYWN0aXZlVGFyZ2V0ICE9IHRhcmdldHNbaV1cbiAgICAgICAgJiYgc2Nyb2xsVG9wID49IG9mZnNldHNbaV1cbiAgICAgICAgJiYgKG9mZnNldHNbaSArIDFdID09PSB1bmRlZmluZWQgfHwgc2Nyb2xsVG9wIDwgb2Zmc2V0c1tpICsgMV0pXG4gICAgICAgICYmIHRoaXMuYWN0aXZhdGUodGFyZ2V0c1tpXSlcbiAgICB9XG4gIH1cblxuICBTY3JvbGxTcHkucHJvdG90eXBlLmFjdGl2YXRlID0gZnVuY3Rpb24gKHRhcmdldCkge1xuICAgIHRoaXMuYWN0aXZlVGFyZ2V0ID0gdGFyZ2V0XG5cbiAgICB0aGlzLmNsZWFyKClcblxuICAgIHZhciBzZWxlY3RvciA9IHRoaXMuc2VsZWN0b3IgK1xuICAgICAgJ1tkYXRhLXRhcmdldD1cIicgKyB0YXJnZXQgKyAnXCJdLCcgK1xuICAgICAgdGhpcy5zZWxlY3RvciArICdbaHJlZj1cIicgKyB0YXJnZXQgKyAnXCJdJ1xuXG4gICAgdmFyIGFjdGl2ZSA9ICQoc2VsZWN0b3IpXG4gICAgICAucGFyZW50cygnbGknKVxuICAgICAgLmFkZENsYXNzKCdhY3RpdmUnKVxuXG4gICAgaWYgKGFjdGl2ZS5wYXJlbnQoJy5kcm9wZG93bi1tZW51JykubGVuZ3RoKSB7XG4gICAgICBhY3RpdmUgPSBhY3RpdmVcbiAgICAgICAgLmNsb3Nlc3QoJ2xpLmRyb3Bkb3duJylcbiAgICAgICAgLmFkZENsYXNzKCdhY3RpdmUnKVxuICAgIH1cblxuICAgIGFjdGl2ZS50cmlnZ2VyKCdhY3RpdmF0ZS5icy5zY3JvbGxzcHknKVxuICB9XG5cbiAgU2Nyb2xsU3B5LnByb3RvdHlwZS5jbGVhciA9IGZ1bmN0aW9uICgpIHtcbiAgICAkKHRoaXMuc2VsZWN0b3IpXG4gICAgICAucGFyZW50c1VudGlsKHRoaXMub3B0aW9ucy50YXJnZXQsICcuYWN0aXZlJylcbiAgICAgIC5yZW1vdmVDbGFzcygnYWN0aXZlJylcbiAgfVxuXG5cbiAgLy8gU0NST0xMU1BZIFBMVUdJTiBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT09PT09PVxuXG4gIGZ1bmN0aW9uIFBsdWdpbihvcHRpb24pIHtcbiAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgIHZhciAkdGhpcyAgID0gJCh0aGlzKVxuICAgICAgdmFyIGRhdGEgICAgPSAkdGhpcy5kYXRhKCdicy5zY3JvbGxzcHknKVxuICAgICAgdmFyIG9wdGlvbnMgPSB0eXBlb2Ygb3B0aW9uID09ICdvYmplY3QnICYmIG9wdGlvblxuXG4gICAgICBpZiAoIWRhdGEpICR0aGlzLmRhdGEoJ2JzLnNjcm9sbHNweScsIChkYXRhID0gbmV3IFNjcm9sbFNweSh0aGlzLCBvcHRpb25zKSkpXG4gICAgICBpZiAodHlwZW9mIG9wdGlvbiA9PSAnc3RyaW5nJykgZGF0YVtvcHRpb25dKClcbiAgICB9KVxuICB9XG5cbiAgdmFyIG9sZCA9ICQuZm4uc2Nyb2xsc3B5XG5cbiAgJC5mbi5zY3JvbGxzcHkgICAgICAgICAgICAgPSBQbHVnaW5cbiAgJC5mbi5zY3JvbGxzcHkuQ29uc3RydWN0b3IgPSBTY3JvbGxTcHlcblxuXG4gIC8vIFNDUk9MTFNQWSBOTyBDT05GTElDVFxuICAvLyA9PT09PT09PT09PT09PT09PT09PT1cblxuICAkLmZuLnNjcm9sbHNweS5ub0NvbmZsaWN0ID0gZnVuY3Rpb24gKCkge1xuICAgICQuZm4uc2Nyb2xsc3B5ID0gb2xkXG4gICAgcmV0dXJuIHRoaXNcbiAgfVxuXG5cbiAgLy8gU0NST0xMU1BZIERBVEEtQVBJXG4gIC8vID09PT09PT09PT09PT09PT09PVxuXG4gICQod2luZG93KS5vbignbG9hZC5icy5zY3JvbGxzcHkuZGF0YS1hcGknLCBmdW5jdGlvbiAoKSB7XG4gICAgJCgnW2RhdGEtc3B5PVwic2Nyb2xsXCJdJykuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICB2YXIgJHNweSA9ICQodGhpcylcbiAgICAgIFBsdWdpbi5jYWxsKCRzcHksICRzcHkuZGF0YSgpKVxuICAgIH0pXG4gIH0pXG5cbn0oalF1ZXJ5KTtcblxuLyogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4gKiBCb290c3RyYXA6IHRhYi5qcyB2My4zLjZcbiAqIGh0dHA6Ly9nZXRib290c3RyYXAuY29tL2phdmFzY3JpcHQvI3RhYnNcbiAqID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuICogQ29weXJpZ2h0IDIwMTEtMjAxNSBUd2l0dGVyLCBJbmMuXG4gKiBMaWNlbnNlZCB1bmRlciBNSVQgKGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9ibG9iL21hc3Rlci9MSUNFTlNFKVxuICogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09ICovXG5cblxuK2Z1bmN0aW9uICgkKSB7XG4gICd1c2Ugc3RyaWN0JztcblxuICAvLyBUQUIgQ0xBU1MgREVGSU5JVElPTlxuICAvLyA9PT09PT09PT09PT09PT09PT09PVxuXG4gIHZhciBUYWIgPSBmdW5jdGlvbiAoZWxlbWVudCkge1xuICAgIC8vIGpzY3M6ZGlzYWJsZSByZXF1aXJlRG9sbGFyQmVmb3JlalF1ZXJ5QXNzaWdubWVudFxuICAgIHRoaXMuZWxlbWVudCA9ICQoZWxlbWVudClcbiAgICAvLyBqc2NzOmVuYWJsZSByZXF1aXJlRG9sbGFyQmVmb3JlalF1ZXJ5QXNzaWdubWVudFxuICB9XG5cbiAgVGFiLlZFUlNJT04gPSAnMy4zLjYnXG5cbiAgVGFiLlRSQU5TSVRJT05fRFVSQVRJT04gPSAxNTBcblxuICBUYWIucHJvdG90eXBlLnNob3cgPSBmdW5jdGlvbiAoKSB7XG4gICAgdmFyICR0aGlzICAgID0gdGhpcy5lbGVtZW50XG4gICAgdmFyICR1bCAgICAgID0gJHRoaXMuY2xvc2VzdCgndWw6bm90KC5kcm9wZG93bi1tZW51KScpXG4gICAgdmFyIHNlbGVjdG9yID0gJHRoaXMuZGF0YSgndGFyZ2V0JylcblxuICAgIGlmICghc2VsZWN0b3IpIHtcbiAgICAgIHNlbGVjdG9yID0gJHRoaXMuYXR0cignaHJlZicpXG4gICAgICBzZWxlY3RvciA9IHNlbGVjdG9yICYmIHNlbGVjdG9yLnJlcGxhY2UoLy4qKD89I1teXFxzXSokKS8sICcnKSAvLyBzdHJpcCBmb3IgaWU3XG4gICAgfVxuXG4gICAgaWYgKCR0aGlzLnBhcmVudCgnbGknKS5oYXNDbGFzcygnYWN0aXZlJykpIHJldHVyblxuXG4gICAgdmFyICRwcmV2aW91cyA9ICR1bC5maW5kKCcuYWN0aXZlOmxhc3QgYScpXG4gICAgdmFyIGhpZGVFdmVudCA9ICQuRXZlbnQoJ2hpZGUuYnMudGFiJywge1xuICAgICAgcmVsYXRlZFRhcmdldDogJHRoaXNbMF1cbiAgICB9KVxuICAgIHZhciBzaG93RXZlbnQgPSAkLkV2ZW50KCdzaG93LmJzLnRhYicsIHtcbiAgICAgIHJlbGF0ZWRUYXJnZXQ6ICRwcmV2aW91c1swXVxuICAgIH0pXG5cbiAgICAkcHJldmlvdXMudHJpZ2dlcihoaWRlRXZlbnQpXG4gICAgJHRoaXMudHJpZ2dlcihzaG93RXZlbnQpXG5cbiAgICBpZiAoc2hvd0V2ZW50LmlzRGVmYXVsdFByZXZlbnRlZCgpIHx8IGhpZGVFdmVudC5pc0RlZmF1bHRQcmV2ZW50ZWQoKSkgcmV0dXJuXG5cbiAgICB2YXIgJHRhcmdldCA9ICQoc2VsZWN0b3IpXG5cbiAgICB0aGlzLmFjdGl2YXRlKCR0aGlzLmNsb3Nlc3QoJ2xpJyksICR1bClcbiAgICB0aGlzLmFjdGl2YXRlKCR0YXJnZXQsICR0YXJnZXQucGFyZW50KCksIGZ1bmN0aW9uICgpIHtcbiAgICAgICRwcmV2aW91cy50cmlnZ2VyKHtcbiAgICAgICAgdHlwZTogJ2hpZGRlbi5icy50YWInLFxuICAgICAgICByZWxhdGVkVGFyZ2V0OiAkdGhpc1swXVxuICAgICAgfSlcbiAgICAgICR0aGlzLnRyaWdnZXIoe1xuICAgICAgICB0eXBlOiAnc2hvd24uYnMudGFiJyxcbiAgICAgICAgcmVsYXRlZFRhcmdldDogJHByZXZpb3VzWzBdXG4gICAgICB9KVxuICAgIH0pXG4gIH1cblxuICBUYWIucHJvdG90eXBlLmFjdGl2YXRlID0gZnVuY3Rpb24gKGVsZW1lbnQsIGNvbnRhaW5lciwgY2FsbGJhY2spIHtcbiAgICB2YXIgJGFjdGl2ZSAgICA9IGNvbnRhaW5lci5maW5kKCc+IC5hY3RpdmUnKVxuICAgIHZhciB0cmFuc2l0aW9uID0gY2FsbGJhY2tcbiAgICAgICYmICQuc3VwcG9ydC50cmFuc2l0aW9uXG4gICAgICAmJiAoJGFjdGl2ZS5sZW5ndGggJiYgJGFjdGl2ZS5oYXNDbGFzcygnZmFkZScpIHx8ICEhY29udGFpbmVyLmZpbmQoJz4gLmZhZGUnKS5sZW5ndGgpXG5cbiAgICBmdW5jdGlvbiBuZXh0KCkge1xuICAgICAgJGFjdGl2ZVxuICAgICAgICAucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpXG4gICAgICAgIC5maW5kKCc+IC5kcm9wZG93bi1tZW51ID4gLmFjdGl2ZScpXG4gICAgICAgICAgLnJlbW92ZUNsYXNzKCdhY3RpdmUnKVxuICAgICAgICAuZW5kKClcbiAgICAgICAgLmZpbmQoJ1tkYXRhLXRvZ2dsZT1cInRhYlwiXScpXG4gICAgICAgICAgLmF0dHIoJ2FyaWEtZXhwYW5kZWQnLCBmYWxzZSlcblxuICAgICAgZWxlbWVudFxuICAgICAgICAuYWRkQ2xhc3MoJ2FjdGl2ZScpXG4gICAgICAgIC5maW5kKCdbZGF0YS10b2dnbGU9XCJ0YWJcIl0nKVxuICAgICAgICAgIC5hdHRyKCdhcmlhLWV4cGFuZGVkJywgdHJ1ZSlcblxuICAgICAgaWYgKHRyYW5zaXRpb24pIHtcbiAgICAgICAgZWxlbWVudFswXS5vZmZzZXRXaWR0aCAvLyByZWZsb3cgZm9yIHRyYW5zaXRpb25cbiAgICAgICAgZWxlbWVudC5hZGRDbGFzcygnaW4nKVxuICAgICAgfSBlbHNlIHtcbiAgICAgICAgZWxlbWVudC5yZW1vdmVDbGFzcygnZmFkZScpXG4gICAgICB9XG5cbiAgICAgIGlmIChlbGVtZW50LnBhcmVudCgnLmRyb3Bkb3duLW1lbnUnKS5sZW5ndGgpIHtcbiAgICAgICAgZWxlbWVudFxuICAgICAgICAgIC5jbG9zZXN0KCdsaS5kcm9wZG93bicpXG4gICAgICAgICAgICAuYWRkQ2xhc3MoJ2FjdGl2ZScpXG4gICAgICAgICAgLmVuZCgpXG4gICAgICAgICAgLmZpbmQoJ1tkYXRhLXRvZ2dsZT1cInRhYlwiXScpXG4gICAgICAgICAgICAuYXR0cignYXJpYS1leHBhbmRlZCcsIHRydWUpXG4gICAgICB9XG5cbiAgICAgIGNhbGxiYWNrICYmIGNhbGxiYWNrKClcbiAgICB9XG5cbiAgICAkYWN0aXZlLmxlbmd0aCAmJiB0cmFuc2l0aW9uID9cbiAgICAgICRhY3RpdmVcbiAgICAgICAgLm9uZSgnYnNUcmFuc2l0aW9uRW5kJywgbmV4dClcbiAgICAgICAgLmVtdWxhdGVUcmFuc2l0aW9uRW5kKFRhYi5UUkFOU0lUSU9OX0RVUkFUSU9OKSA6XG4gICAgICBuZXh0KClcblxuICAgICRhY3RpdmUucmVtb3ZlQ2xhc3MoJ2luJylcbiAgfVxuXG5cbiAgLy8gVEFCIFBMVUdJTiBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PVxuXG4gIGZ1bmN0aW9uIFBsdWdpbihvcHRpb24pIHtcbiAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgIHZhciAkdGhpcyA9ICQodGhpcylcbiAgICAgIHZhciBkYXRhICA9ICR0aGlzLmRhdGEoJ2JzLnRhYicpXG5cbiAgICAgIGlmICghZGF0YSkgJHRoaXMuZGF0YSgnYnMudGFiJywgKGRhdGEgPSBuZXcgVGFiKHRoaXMpKSlcbiAgICAgIGlmICh0eXBlb2Ygb3B0aW9uID09ICdzdHJpbmcnKSBkYXRhW29wdGlvbl0oKVxuICAgIH0pXG4gIH1cblxuICB2YXIgb2xkID0gJC5mbi50YWJcblxuICAkLmZuLnRhYiAgICAgICAgICAgICA9IFBsdWdpblxuICAkLmZuLnRhYi5Db25zdHJ1Y3RvciA9IFRhYlxuXG5cbiAgLy8gVEFCIE5PIENPTkZMSUNUXG4gIC8vID09PT09PT09PT09PT09PVxuXG4gICQuZm4udGFiLm5vQ29uZmxpY3QgPSBmdW5jdGlvbiAoKSB7XG4gICAgJC5mbi50YWIgPSBvbGRcbiAgICByZXR1cm4gdGhpc1xuICB9XG5cblxuICAvLyBUQUIgREFUQS1BUElcbiAgLy8gPT09PT09PT09PT09XG5cbiAgdmFyIGNsaWNrSGFuZGxlciA9IGZ1bmN0aW9uIChlKSB7XG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpXG4gICAgUGx1Z2luLmNhbGwoJCh0aGlzKSwgJ3Nob3cnKVxuICB9XG5cbiAgJChkb2N1bWVudClcbiAgICAub24oJ2NsaWNrLmJzLnRhYi5kYXRhLWFwaScsICdbZGF0YS10b2dnbGU9XCJ0YWJcIl0nLCBjbGlja0hhbmRsZXIpXG4gICAgLm9uKCdjbGljay5icy50YWIuZGF0YS1hcGknLCAnW2RhdGEtdG9nZ2xlPVwicGlsbFwiXScsIGNsaWNrSGFuZGxlcilcblxufShqUXVlcnkpO1xuXG4vKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiAqIEJvb3RzdHJhcDogYWZmaXguanMgdjMuMy42XG4gKiBodHRwOi8vZ2V0Ym9vdHN0cmFwLmNvbS9qYXZhc2NyaXB0LyNhZmZpeFxuICogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4gKiBDb3B5cmlnaHQgMjAxMS0yMDE1IFR3aXR0ZXIsIEluYy5cbiAqIExpY2Vuc2VkIHVuZGVyIE1JVCAoaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL2Jsb2IvbWFzdGVyL0xJQ0VOU0UpXG4gKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0gKi9cblxuXG4rZnVuY3Rpb24gKCQpIHtcbiAgJ3VzZSBzdHJpY3QnO1xuXG4gIC8vIEFGRklYIENMQVNTIERFRklOSVRJT05cbiAgLy8gPT09PT09PT09PT09PT09PT09PT09PVxuXG4gIHZhciBBZmZpeCA9IGZ1bmN0aW9uIChlbGVtZW50LCBvcHRpb25zKSB7XG4gICAgdGhpcy5vcHRpb25zID0gJC5leHRlbmQoe30sIEFmZml4LkRFRkFVTFRTLCBvcHRpb25zKVxuXG4gICAgdGhpcy4kdGFyZ2V0ID0gJCh0aGlzLm9wdGlvbnMudGFyZ2V0KVxuICAgICAgLm9uKCdzY3JvbGwuYnMuYWZmaXguZGF0YS1hcGknLCAkLnByb3h5KHRoaXMuY2hlY2tQb3NpdGlvbiwgdGhpcykpXG4gICAgICAub24oJ2NsaWNrLmJzLmFmZml4LmRhdGEtYXBpJywgICQucHJveHkodGhpcy5jaGVja1Bvc2l0aW9uV2l0aEV2ZW50TG9vcCwgdGhpcykpXG5cbiAgICB0aGlzLiRlbGVtZW50ICAgICA9ICQoZWxlbWVudClcbiAgICB0aGlzLmFmZml4ZWQgICAgICA9IG51bGxcbiAgICB0aGlzLnVucGluICAgICAgICA9IG51bGxcbiAgICB0aGlzLnBpbm5lZE9mZnNldCA9IG51bGxcblxuICAgIHRoaXMuY2hlY2tQb3NpdGlvbigpXG4gIH1cblxuICBBZmZpeC5WRVJTSU9OICA9ICczLjMuNidcblxuICBBZmZpeC5SRVNFVCAgICA9ICdhZmZpeCBhZmZpeC10b3AgYWZmaXgtYm90dG9tJ1xuXG4gIEFmZml4LkRFRkFVTFRTID0ge1xuICAgIG9mZnNldDogMCxcbiAgICB0YXJnZXQ6IHdpbmRvd1xuICB9XG5cbiAgQWZmaXgucHJvdG90eXBlLmdldFN0YXRlID0gZnVuY3Rpb24gKHNjcm9sbEhlaWdodCwgaGVpZ2h0LCBvZmZzZXRUb3AsIG9mZnNldEJvdHRvbSkge1xuICAgIHZhciBzY3JvbGxUb3AgICAgPSB0aGlzLiR0YXJnZXQuc2Nyb2xsVG9wKClcbiAgICB2YXIgcG9zaXRpb24gICAgID0gdGhpcy4kZWxlbWVudC5vZmZzZXQoKVxuICAgIHZhciB0YXJnZXRIZWlnaHQgPSB0aGlzLiR0YXJnZXQuaGVpZ2h0KClcblxuICAgIGlmIChvZmZzZXRUb3AgIT0gbnVsbCAmJiB0aGlzLmFmZml4ZWQgPT0gJ3RvcCcpIHJldHVybiBzY3JvbGxUb3AgPCBvZmZzZXRUb3AgPyAndG9wJyA6IGZhbHNlXG5cbiAgICBpZiAodGhpcy5hZmZpeGVkID09ICdib3R0b20nKSB7XG4gICAgICBpZiAob2Zmc2V0VG9wICE9IG51bGwpIHJldHVybiAoc2Nyb2xsVG9wICsgdGhpcy51bnBpbiA8PSBwb3NpdGlvbi50b3ApID8gZmFsc2UgOiAnYm90dG9tJ1xuICAgICAgcmV0dXJuIChzY3JvbGxUb3AgKyB0YXJnZXRIZWlnaHQgPD0gc2Nyb2xsSGVpZ2h0IC0gb2Zmc2V0Qm90dG9tKSA/IGZhbHNlIDogJ2JvdHRvbSdcbiAgICB9XG5cbiAgICB2YXIgaW5pdGlhbGl6aW5nICAgPSB0aGlzLmFmZml4ZWQgPT0gbnVsbFxuICAgIHZhciBjb2xsaWRlclRvcCAgICA9IGluaXRpYWxpemluZyA/IHNjcm9sbFRvcCA6IHBvc2l0aW9uLnRvcFxuICAgIHZhciBjb2xsaWRlckhlaWdodCA9IGluaXRpYWxpemluZyA/IHRhcmdldEhlaWdodCA6IGhlaWdodFxuXG4gICAgaWYgKG9mZnNldFRvcCAhPSBudWxsICYmIHNjcm9sbFRvcCA8PSBvZmZzZXRUb3ApIHJldHVybiAndG9wJ1xuICAgIGlmIChvZmZzZXRCb3R0b20gIT0gbnVsbCAmJiAoY29sbGlkZXJUb3AgKyBjb2xsaWRlckhlaWdodCA+PSBzY3JvbGxIZWlnaHQgLSBvZmZzZXRCb3R0b20pKSByZXR1cm4gJ2JvdHRvbSdcblxuICAgIHJldHVybiBmYWxzZVxuICB9XG5cbiAgQWZmaXgucHJvdG90eXBlLmdldFBpbm5lZE9mZnNldCA9IGZ1bmN0aW9uICgpIHtcbiAgICBpZiAodGhpcy5waW5uZWRPZmZzZXQpIHJldHVybiB0aGlzLnBpbm5lZE9mZnNldFxuICAgIHRoaXMuJGVsZW1lbnQucmVtb3ZlQ2xhc3MoQWZmaXguUkVTRVQpLmFkZENsYXNzKCdhZmZpeCcpXG4gICAgdmFyIHNjcm9sbFRvcCA9IHRoaXMuJHRhcmdldC5zY3JvbGxUb3AoKVxuICAgIHZhciBwb3NpdGlvbiAgPSB0aGlzLiRlbGVtZW50Lm9mZnNldCgpXG4gICAgcmV0dXJuICh0aGlzLnBpbm5lZE9mZnNldCA9IHBvc2l0aW9uLnRvcCAtIHNjcm9sbFRvcClcbiAgfVxuXG4gIEFmZml4LnByb3RvdHlwZS5jaGVja1Bvc2l0aW9uV2l0aEV2ZW50TG9vcCA9IGZ1bmN0aW9uICgpIHtcbiAgICBzZXRUaW1lb3V0KCQucHJveHkodGhpcy5jaGVja1Bvc2l0aW9uLCB0aGlzKSwgMSlcbiAgfVxuXG4gIEFmZml4LnByb3RvdHlwZS5jaGVja1Bvc2l0aW9uID0gZnVuY3Rpb24gKCkge1xuICAgIGlmICghdGhpcy4kZWxlbWVudC5pcygnOnZpc2libGUnKSkgcmV0dXJuXG5cbiAgICB2YXIgaGVpZ2h0ICAgICAgID0gdGhpcy4kZWxlbWVudC5oZWlnaHQoKVxuICAgIHZhciBvZmZzZXQgICAgICAgPSB0aGlzLm9wdGlvbnMub2Zmc2V0XG4gICAgdmFyIG9mZnNldFRvcCAgICA9IG9mZnNldC50b3BcbiAgICB2YXIgb2Zmc2V0Qm90dG9tID0gb2Zmc2V0LmJvdHRvbVxuICAgIHZhciBzY3JvbGxIZWlnaHQgPSBNYXRoLm1heCgkKGRvY3VtZW50KS5oZWlnaHQoKSwgJChkb2N1bWVudC5ib2R5KS5oZWlnaHQoKSlcblxuICAgIGlmICh0eXBlb2Ygb2Zmc2V0ICE9ICdvYmplY3QnKSAgICAgICAgIG9mZnNldEJvdHRvbSA9IG9mZnNldFRvcCA9IG9mZnNldFxuICAgIGlmICh0eXBlb2Ygb2Zmc2V0VG9wID09ICdmdW5jdGlvbicpICAgIG9mZnNldFRvcCAgICA9IG9mZnNldC50b3AodGhpcy4kZWxlbWVudClcbiAgICBpZiAodHlwZW9mIG9mZnNldEJvdHRvbSA9PSAnZnVuY3Rpb24nKSBvZmZzZXRCb3R0b20gPSBvZmZzZXQuYm90dG9tKHRoaXMuJGVsZW1lbnQpXG5cbiAgICB2YXIgYWZmaXggPSB0aGlzLmdldFN0YXRlKHNjcm9sbEhlaWdodCwgaGVpZ2h0LCBvZmZzZXRUb3AsIG9mZnNldEJvdHRvbSlcblxuICAgIGlmICh0aGlzLmFmZml4ZWQgIT0gYWZmaXgpIHtcbiAgICAgIGlmICh0aGlzLnVucGluICE9IG51bGwpIHRoaXMuJGVsZW1lbnQuY3NzKCd0b3AnLCAnJylcblxuICAgICAgdmFyIGFmZml4VHlwZSA9ICdhZmZpeCcgKyAoYWZmaXggPyAnLScgKyBhZmZpeCA6ICcnKVxuICAgICAgdmFyIGUgICAgICAgICA9ICQuRXZlbnQoYWZmaXhUeXBlICsgJy5icy5hZmZpeCcpXG5cbiAgICAgIHRoaXMuJGVsZW1lbnQudHJpZ2dlcihlKVxuXG4gICAgICBpZiAoZS5pc0RlZmF1bHRQcmV2ZW50ZWQoKSkgcmV0dXJuXG5cbiAgICAgIHRoaXMuYWZmaXhlZCA9IGFmZml4XG4gICAgICB0aGlzLnVucGluID0gYWZmaXggPT0gJ2JvdHRvbScgPyB0aGlzLmdldFBpbm5lZE9mZnNldCgpIDogbnVsbFxuXG4gICAgICB0aGlzLiRlbGVtZW50XG4gICAgICAgIC5yZW1vdmVDbGFzcyhBZmZpeC5SRVNFVClcbiAgICAgICAgLmFkZENsYXNzKGFmZml4VHlwZSlcbiAgICAgICAgLnRyaWdnZXIoYWZmaXhUeXBlLnJlcGxhY2UoJ2FmZml4JywgJ2FmZml4ZWQnKSArICcuYnMuYWZmaXgnKVxuICAgIH1cblxuICAgIGlmIChhZmZpeCA9PSAnYm90dG9tJykge1xuICAgICAgdGhpcy4kZWxlbWVudC5vZmZzZXQoe1xuICAgICAgICB0b3A6IHNjcm9sbEhlaWdodCAtIGhlaWdodCAtIG9mZnNldEJvdHRvbVxuICAgICAgfSlcbiAgICB9XG4gIH1cblxuXG4gIC8vIEFGRklYIFBMVUdJTiBERUZJTklUSU9OXG4gIC8vID09PT09PT09PT09PT09PT09PT09PT09XG5cbiAgZnVuY3Rpb24gUGx1Z2luKG9wdGlvbikge1xuICAgIHJldHVybiB0aGlzLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgdmFyICR0aGlzICAgPSAkKHRoaXMpXG4gICAgICB2YXIgZGF0YSAgICA9ICR0aGlzLmRhdGEoJ2JzLmFmZml4JylcbiAgICAgIHZhciBvcHRpb25zID0gdHlwZW9mIG9wdGlvbiA9PSAnb2JqZWN0JyAmJiBvcHRpb25cblxuICAgICAgaWYgKCFkYXRhKSAkdGhpcy5kYXRhKCdicy5hZmZpeCcsIChkYXRhID0gbmV3IEFmZml4KHRoaXMsIG9wdGlvbnMpKSlcbiAgICAgIGlmICh0eXBlb2Ygb3B0aW9uID09ICdzdHJpbmcnKSBkYXRhW29wdGlvbl0oKVxuICAgIH0pXG4gIH1cblxuICB2YXIgb2xkID0gJC5mbi5hZmZpeFxuXG4gICQuZm4uYWZmaXggICAgICAgICAgICAgPSBQbHVnaW5cbiAgJC5mbi5hZmZpeC5Db25zdHJ1Y3RvciA9IEFmZml4XG5cblxuICAvLyBBRkZJWCBOTyBDT05GTElDVFxuICAvLyA9PT09PT09PT09PT09PT09PVxuXG4gICQuZm4uYWZmaXgubm9Db25mbGljdCA9IGZ1bmN0aW9uICgpIHtcbiAgICAkLmZuLmFmZml4ID0gb2xkXG4gICAgcmV0dXJuIHRoaXNcbiAgfVxuXG5cbiAgLy8gQUZGSVggREFUQS1BUElcbiAgLy8gPT09PT09PT09PT09PT1cblxuICAkKHdpbmRvdykub24oJ2xvYWQnLCBmdW5jdGlvbiAoKSB7XG4gICAgJCgnW2RhdGEtc3B5PVwiYWZmaXhcIl0nKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgIHZhciAkc3B5ID0gJCh0aGlzKVxuICAgICAgdmFyIGRhdGEgPSAkc3B5LmRhdGEoKVxuXG4gICAgICBkYXRhLm9mZnNldCA9IGRhdGEub2Zmc2V0IHx8IHt9XG5cbiAgICAgIGlmIChkYXRhLm9mZnNldEJvdHRvbSAhPSBudWxsKSBkYXRhLm9mZnNldC5ib3R0b20gPSBkYXRhLm9mZnNldEJvdHRvbVxuICAgICAgaWYgKGRhdGEub2Zmc2V0VG9wICAgICE9IG51bGwpIGRhdGEub2Zmc2V0LnRvcCAgICA9IGRhdGEub2Zmc2V0VG9wXG5cbiAgICAgIFBsdWdpbi5jYWxsKCRzcHksIGRhdGEpXG4gICAgfSlcbiAgfSlcblxufShqUXVlcnkpO1xuIiwiKGZ1bmN0aW9uICgkKSB7XG4gICAgICAgICQuZm4udGJsVG9FeGNlbCA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHZhciBlbG0gPSB0cnVlO1xuICAgICAgICAgICAgaWYgKHRoaXMubGVuZ3RoID4gMSkge1xuXHRcdFx0XHQkKCdib2R5JykuYXBwZW5kKCc8ZGl2IGlkPVwidGJsLXRudi1iYWNrXCIgc3R5bGU9XCJwb3NpdGlvbjogZml4ZWQ7IHotaW5kZXg6IDE7cGFkZGluZy10b3A6IDEwMHB4O2xlZnQ6IDA7dG9wOiAwO3dpZHRoOiAxMDAlO2hlaWdodDogMTAwJTtvdmVyZmxvdzogYXV0bztiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoMCwwLDApO2JhY2tncm91bmQtY29sb3I6IHJnYmEoMCwwLDAsMC40KTtcIj4nICtcblx0XHRcdFx0JzxkaXYgaWQ9XCJ0YmwtdG52LWV4Y2VsXCIgc3R5bGU9XCJiYWNrZ3JvdW5kLWNvbG9yOiAjZmVmZWZlO21hcmdpbjogYXV0bzsnICtcblx0XHRcdFx0J3BhZGRpbmc6IDIwcHg7ICcgK1xuICAgICAgICAgICAgICAgICdvdmVyZmxvdzogYXV0bzsnICtcblx0XHRcdFx0J2JvcmRlcjogMXB4IHNvbGlkICM4ODg7JyArXG5cdFx0XHRcdCd3aWR0aDogODAlO1wiID4gIDwvZGl2PicgK1xuXHRcdFx0XHQnPC9kaXY+Jyk7XG4gICAgICAgICAgICAgICAgZWxtID0gZmFsc2U7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICAkKCcjdGJsLXRudi1iYWNrJykuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICQodGhpcykucmVtb3ZlKCk7XG4gICAgICAgICAgICAgICAgJCgnI3RibC10bnYtYW5jaCcpLnJlbW92ZSgpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB2YXIgdGFibGVUb0V4Y2VsID0gKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB2YXIgaSA9IDA7XG4gICAgICAgICAgICAgICAgdmFyIHVyaSA9ICdkYXRhOmFwcGxpY2F0aW9uL3ZuZC5tcy1leGNlbDtiYXNlNjQsJyxcbiAgICAgICAgICAgICAgICAgICAgdGVtcGxhdGUgPSAnPGh0bWwgeG1sbnM6bz1cInVybjpzY2hlbWFzLW1pY3Jvc29mdC1jb206b2ZmaWNlOm9mZmljZVwiIHhtbG5zOng9XCJ1cm46c2NoZW1hcy1taWNyb3NvZnQtY29tOm9mZmljZTpleGNlbFwiIHhtbG5zPVwiaHR0cDovL3d3dy53My5vcmcvVFIvUkVDLWh0bWw0MFwiPjxtZXRhIGNoYXJzZXQ9XCJ1dGYtOFwiLz48aGVhZD48IS0tW2lmIGd0ZSBtc28gOV0+PHhtbD48eDpFeGNlbFdvcmtib29rPjx4OkV4Y2VsV29ya3NoZWV0cz48eDpFeGNlbFdvcmtzaGVldD48eDpOYW1lPnt3b3Jrc2hlZXR9PC94Ok5hbWU+PHg6V29ya3NoZWV0T3B0aW9ucz48eDpEaXNwbGF5R3JpZGxpbmVzLz48L3g6V29ya3NoZWV0T3B0aW9ucz48L3g6RXhjZWxXb3Jrc2hlZXQ+PC94OkV4Y2VsV29ya3NoZWV0cz48L3g6RXhjZWxXb3JrYm9vaz48L3htbD48IVtlbmRpZl0tLT48L2hlYWQ+PGJvZHk+PHRhYmxlPnt0YWJsZX08L3RhYmxlPjwvYm9keT48L2h0bWw+J1xuICAgICAgICAgICAgICAgICAgICAsIGJhc2U2NCA9IGZ1bmN0aW9uIChzKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gd2luZG93LmJ0b2EodW5lc2NhcGUoZW5jb2RlVVJJQ29tcG9uZW50KHMpKSlcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAsIGZvcm1hdCA9IGZ1bmN0aW9uIChzLCBjKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gcy5yZXBsYWNlKC97KFxcdyspfS9nLCBmdW5jdGlvbiAobSwgcCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiBjW3BdO1xuICAgICAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgfTtcbiAgICAgICAgICAgICAgICByZXR1cm4gZnVuY3Rpb24gKHRhYmxlLCBuYW1lKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmICghdGFibGUubm9kZVR5cGUpIHRhYmxlXG4gICAgICAgICAgICAgICAgICAgIHZhciBjdHggPSB7d29ya3NoZWV0OiBuYW1lIHx8ICdXb3Jrc2hlZXQnLCB0YWJsZTogdGFibGUuaW5uZXJIVE1MfVxuICAgICAgICAgICAgICAgICAgICBpZiAoZWxtKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IHVyaSArIGJhc2U2NChmb3JtYXQodGVtcGxhdGUsIGN0eCkpO1xuICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgICAgaSsrO1xuICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHhsID0gdXJpICsgYmFzZTY0KGZvcm1hdCh0ZW1wbGF0ZSwgY3R4KSk7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKCcjdGJsLXRudi1leGNlbCcpLmFwcGVuZCgnPGEgaWQ9XCJ0YmwtdG52LWFuY2hcIiBzdHlsZT1cImJhY2tncm91bmQtY29sb3I6ICM0Q0FGNTA7Ym9yZGVyOiBub25lO1xcbicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICdjb2xvcjogd2hpdGU7JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3BhZGRpbmc6IDE1cHggMzJweDsnICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAndGV4dC1hbGlnbjogY2VudGVyOycgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICd0ZXh0LWRlY29yYXRpb246IG5vbmU7JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ2Rpc3BsYXk6IGlubGluZS1ibG9jazsgbWFyZ2luOiAxcHg7JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ2ZvbnQtc2l6ZTogMTZweDtcIiBocmVmPScreGwrJyBkb3dubG9hZD5Eb3dubG9hZCBFeGNlbC0nK2krJyA8L2E+Jyk7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KSgpO1xuXG4gICAgICAgICAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB0YWJsZVRvRXhjZWwodGhpcywgJ1czQyBFeGFtcGxlIFRhYmxlJyk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuXG4gICAgfShqUXVlcnkpKTtcbiIsIi8qISBTZWxlY3QyIDQuMS4wLXJjLjAgfCBodHRwczovL2dpdGh1Yi5jb20vc2VsZWN0Mi9zZWxlY3QyL2Jsb2IvbWFzdGVyL0xJQ0VOU0UubWQgKi9cbiFmdW5jdGlvbihuKXtcImZ1bmN0aW9uXCI9PXR5cGVvZiBkZWZpbmUmJmRlZmluZS5hbWQ/ZGVmaW5lKFtcImpxdWVyeVwiXSxuKTpcIm9iamVjdFwiPT10eXBlb2YgbW9kdWxlJiZtb2R1bGUuZXhwb3J0cz9tb2R1bGUuZXhwb3J0cz1mdW5jdGlvbihlLHQpe3JldHVybiB2b2lkIDA9PT10JiYodD1cInVuZGVmaW5lZFwiIT10eXBlb2Ygd2luZG93P3JlcXVpcmUoXCJqcXVlcnlcIik6cmVxdWlyZShcImpxdWVyeVwiKShlKSksbih0KSx0fTpuKGpRdWVyeSl9KGZ1bmN0aW9uKHQpe3ZhciBlLG4scyxwLHIsbyxoLGYsZyxtLHksdixpLGEsXyxzPSgodT10JiZ0LmZuJiZ0LmZuLnNlbGVjdDImJnQuZm4uc2VsZWN0Mi5hbWQ/dC5mbi5zZWxlY3QyLmFtZDp1KSYmdS5yZXF1aXJlanN8fCh1P249dTp1PXt9LGc9e30sbT17fSx5PXt9LHY9e30saT1PYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LGE9W10uc2xpY2UsXz0vXFwuanMkLyxoPWZ1bmN0aW9uKGUsdCl7dmFyIG4scyxpPWMoZSkscj1pWzBdLHQ9dFsxXTtyZXR1cm4gZT1pWzFdLHImJihuPXgocj1sKHIsdCkpKSxyP2U9biYmbi5ub3JtYWxpemU/bi5ub3JtYWxpemUoZSwocz10LGZ1bmN0aW9uKGUpe3JldHVybiBsKGUscyl9KSk6bChlLHQpOihyPShpPWMoZT1sKGUsdCkpKVswXSxlPWlbMV0sciYmKG49eChyKSkpLHtmOnI/citcIiFcIitlOmUsbjplLHByOnIscDpufX0sZj17cmVxdWlyZTpmdW5jdGlvbihlKXtyZXR1cm4gdyhlKX0sZXhwb3J0czpmdW5jdGlvbihlKXt2YXIgdD1nW2VdO3JldHVybiB2b2lkIDAhPT10P3Q6Z1tlXT17fX0sbW9kdWxlOmZ1bmN0aW9uKGUpe3JldHVybntpZDplLHVyaTpcIlwiLGV4cG9ydHM6Z1tlXSxjb25maWc6KHQ9ZSxmdW5jdGlvbigpe3JldHVybiB5JiZ5LmNvbmZpZyYmeS5jb25maWdbdF18fHt9fSl9O3ZhciB0fX0scj1mdW5jdGlvbihlLHQsbixzKXt2YXIgaSxyLG8sYSxsLGM9W10sdT10eXBlb2YgbixkPUEocz1zfHxlKTtpZihcInVuZGVmaW5lZFwiPT11fHxcImZ1bmN0aW9uXCI9PXUpe2Zvcih0PSF0Lmxlbmd0aCYmbi5sZW5ndGg/W1wicmVxdWlyZVwiLFwiZXhwb3J0c1wiLFwibW9kdWxlXCJdOnQsYT0wO2E8dC5sZW5ndGg7YSs9MSlpZihcInJlcXVpcmVcIj09PShyPShvPWgodFthXSxkKSkuZikpY1thXT1mLnJlcXVpcmUoZSk7ZWxzZSBpZihcImV4cG9ydHNcIj09PXIpY1thXT1mLmV4cG9ydHMoZSksbD0hMDtlbHNlIGlmKFwibW9kdWxlXCI9PT1yKWk9Y1thXT1mLm1vZHVsZShlKTtlbHNlIGlmKGIoZyxyKXx8YihtLHIpfHxiKHYscikpY1thXT14KHIpO2Vsc2V7aWYoIW8ucCl0aHJvdyBuZXcgRXJyb3IoZStcIiBtaXNzaW5nIFwiK3IpO28ucC5sb2FkKG8ubix3KHMsITApLGZ1bmN0aW9uKHQpe3JldHVybiBmdW5jdGlvbihlKXtnW3RdPWV9fShyKSx7fSksY1thXT1nW3JdfXU9bj9uLmFwcGx5KGdbZV0sYyk6dm9pZCAwLGUmJihpJiZpLmV4cG9ydHMhPT1wJiZpLmV4cG9ydHMhPT1nW2VdP2dbZV09aS5leHBvcnRzOnU9PT1wJiZsfHwoZ1tlXT11KSl9ZWxzZSBlJiYoZ1tlXT1uKX0sZT1uPW89ZnVuY3Rpb24oZSx0LG4scyxpKXtpZihcInN0cmluZ1wiPT10eXBlb2YgZSlyZXR1cm4gZltlXT9mW2VdKHQpOngoaChlLEEodCkpLmYpO2lmKCFlLnNwbGljZSl7aWYoKHk9ZSkuZGVwcyYmbyh5LmRlcHMseS5jYWxsYmFjayksIXQpcmV0dXJuO3Quc3BsaWNlPyhlPXQsdD1uLG49bnVsbCk6ZT1wfXJldHVybiB0PXR8fGZ1bmN0aW9uKCl7fSxcImZ1bmN0aW9uXCI9PXR5cGVvZiBuJiYobj1zLHM9aSkscz9yKHAsZSx0LG4pOnNldFRpbWVvdXQoZnVuY3Rpb24oKXtyKHAsZSx0LG4pfSw0KSxvfSxvLmNvbmZpZz1mdW5jdGlvbihlKXtyZXR1cm4gbyhlKX0sZS5fZGVmaW5lZD1nLChzPWZ1bmN0aW9uKGUsdCxuKXtpZihcInN0cmluZ1wiIT10eXBlb2YgZSl0aHJvdyBuZXcgRXJyb3IoXCJTZWUgYWxtb25kIFJFQURNRTogaW5jb3JyZWN0IG1vZHVsZSBidWlsZCwgbm8gbW9kdWxlIG5hbWVcIik7dC5zcGxpY2V8fChuPXQsdD1bXSksYihnLGUpfHxiKG0sZSl8fChtW2VdPVtlLHQsbl0pfSkuYW1kPXtqUXVlcnk6ITB9LHUucmVxdWlyZWpzPWUsdS5yZXF1aXJlPW4sdS5kZWZpbmU9cyksdS5kZWZpbmUoXCJhbG1vbmRcIixmdW5jdGlvbigpe30pLHUuZGVmaW5lKFwianF1ZXJ5XCIsW10sZnVuY3Rpb24oKXt2YXIgZT10fHwkO3JldHVybiBudWxsPT1lJiZjb25zb2xlJiZjb25zb2xlLmVycm9yJiZjb25zb2xlLmVycm9yKFwiU2VsZWN0MjogQW4gaW5zdGFuY2Ugb2YgalF1ZXJ5IG9yIGEgalF1ZXJ5LWNvbXBhdGlibGUgbGlicmFyeSB3YXMgbm90IGZvdW5kLiBNYWtlIHN1cmUgdGhhdCB5b3UgYXJlIGluY2x1ZGluZyBqUXVlcnkgYmVmb3JlIFNlbGVjdDIgb24geW91ciB3ZWIgcGFnZS5cIiksZX0pLHUuZGVmaW5lKFwic2VsZWN0Mi91dGlsc1wiLFtcImpxdWVyeVwiXSxmdW5jdGlvbihyKXt2YXIgcz17fTtmdW5jdGlvbiBjKGUpe3ZhciB0LG49ZS5wcm90b3R5cGUscz1bXTtmb3IodCBpbiBuKVwiZnVuY3Rpb25cIj09dHlwZW9mIG5bdF0mJlwiY29uc3RydWN0b3JcIiE9PXQmJnMucHVzaCh0KTtyZXR1cm4gc31zLkV4dGVuZD1mdW5jdGlvbihlLHQpe3ZhciBuLHM9e30uaGFzT3duUHJvcGVydHk7ZnVuY3Rpb24gaSgpe3RoaXMuY29uc3RydWN0b3I9ZX1mb3IobiBpbiB0KXMuY2FsbCh0LG4pJiYoZVtuXT10W25dKTtyZXR1cm4gaS5wcm90b3R5cGU9dC5wcm90b3R5cGUsZS5wcm90b3R5cGU9bmV3IGksZS5fX3N1cGVyX189dC5wcm90b3R5cGUsZX0scy5EZWNvcmF0ZT1mdW5jdGlvbihzLGkpe3ZhciBlPWMoaSksdD1jKHMpO2Z1bmN0aW9uIHIoKXt2YXIgZT1BcnJheS5wcm90b3R5cGUudW5zaGlmdCx0PWkucHJvdG90eXBlLmNvbnN0cnVjdG9yLmxlbmd0aCxuPXMucHJvdG90eXBlLmNvbnN0cnVjdG9yOzA8dCYmKGUuY2FsbChhcmd1bWVudHMscy5wcm90b3R5cGUuY29uc3RydWN0b3IpLG49aS5wcm90b3R5cGUuY29uc3RydWN0b3IpLG4uYXBwbHkodGhpcyxhcmd1bWVudHMpfWkuZGlzcGxheU5hbWU9cy5kaXNwbGF5TmFtZSxyLnByb3RvdHlwZT1uZXcgZnVuY3Rpb24oKXt0aGlzLmNvbnN0cnVjdG9yPXJ9O2Zvcih2YXIgbj0wO248dC5sZW5ndGg7bisrKXt2YXIgbz10W25dO3IucHJvdG90eXBlW29dPXMucHJvdG90eXBlW29dfWZvcih2YXIgYT0wO2E8ZS5sZW5ndGg7YSsrKXt2YXIgbD1lW2FdO3IucHJvdG90eXBlW2xdPWZ1bmN0aW9uKGUpe3ZhciB0PWZ1bmN0aW9uKCl7fTtlIGluIHIucHJvdG90eXBlJiYodD1yLnByb3RvdHlwZVtlXSk7dmFyIG49aS5wcm90b3R5cGVbZV07cmV0dXJuIGZ1bmN0aW9uKCl7cmV0dXJuIEFycmF5LnByb3RvdHlwZS51bnNoaWZ0LmNhbGwoYXJndW1lbnRzLHQpLG4uYXBwbHkodGhpcyxhcmd1bWVudHMpfX0obCl9cmV0dXJuIHJ9O2Z1bmN0aW9uIGUoKXt0aGlzLmxpc3RlbmVycz17fX1lLnByb3RvdHlwZS5vbj1mdW5jdGlvbihlLHQpe3RoaXMubGlzdGVuZXJzPXRoaXMubGlzdGVuZXJzfHx7fSxlIGluIHRoaXMubGlzdGVuZXJzP3RoaXMubGlzdGVuZXJzW2VdLnB1c2godCk6dGhpcy5saXN0ZW5lcnNbZV09W3RdfSxlLnByb3RvdHlwZS50cmlnZ2VyPWZ1bmN0aW9uKGUpe3ZhciB0PUFycmF5LnByb3RvdHlwZS5zbGljZSxuPXQuY2FsbChhcmd1bWVudHMsMSk7dGhpcy5saXN0ZW5lcnM9dGhpcy5saXN0ZW5lcnN8fHt9LDA9PT0obj1udWxsPT1uP1tdOm4pLmxlbmd0aCYmbi5wdXNoKHt9KSwoblswXS5fdHlwZT1lKWluIHRoaXMubGlzdGVuZXJzJiZ0aGlzLmludm9rZSh0aGlzLmxpc3RlbmVyc1tlXSx0LmNhbGwoYXJndW1lbnRzLDEpKSxcIipcImluIHRoaXMubGlzdGVuZXJzJiZ0aGlzLmludm9rZSh0aGlzLmxpc3RlbmVyc1tcIipcIl0sYXJndW1lbnRzKX0sZS5wcm90b3R5cGUuaW52b2tlPWZ1bmN0aW9uKGUsdCl7Zm9yKHZhciBuPTAscz1lLmxlbmd0aDtuPHM7bisrKWVbbl0uYXBwbHkodGhpcyx0KX0scy5PYnNlcnZhYmxlPWUscy5nZW5lcmF0ZUNoYXJzPWZ1bmN0aW9uKGUpe2Zvcih2YXIgdD1cIlwiLG49MDtuPGU7bisrKXQrPU1hdGguZmxvb3IoMzYqTWF0aC5yYW5kb20oKSkudG9TdHJpbmcoMzYpO3JldHVybiB0fSxzLmJpbmQ9ZnVuY3Rpb24oZSx0KXtyZXR1cm4gZnVuY3Rpb24oKXtlLmFwcGx5KHQsYXJndW1lbnRzKX19LHMuX2NvbnZlcnREYXRhPWZ1bmN0aW9uKGUpe2Zvcih2YXIgdCBpbiBlKXt2YXIgbj10LnNwbGl0KFwiLVwiKSxzPWU7aWYoMSE9PW4ubGVuZ3RoKXtmb3IodmFyIGk9MDtpPG4ubGVuZ3RoO2krKyl7dmFyIHI9bltpXTsocj1yLnN1YnN0cmluZygwLDEpLnRvTG93ZXJDYXNlKCkrci5zdWJzdHJpbmcoMSkpaW4gc3x8KHNbcl09e30pLGk9PW4ubGVuZ3RoLTEmJihzW3JdPWVbdF0pLHM9c1tyXX1kZWxldGUgZVt0XX19cmV0dXJuIGV9LHMuaGFzU2Nyb2xsPWZ1bmN0aW9uKGUsdCl7dmFyIG49cih0KSxzPXQuc3R5bGUub3ZlcmZsb3dYLGk9dC5zdHlsZS5vdmVyZmxvd1k7cmV0dXJuKHMhPT1pfHxcImhpZGRlblwiIT09aSYmXCJ2aXNpYmxlXCIhPT1pKSYmKFwic2Nyb2xsXCI9PT1zfHxcInNjcm9sbFwiPT09aXx8KG4uaW5uZXJIZWlnaHQoKTx0LnNjcm9sbEhlaWdodHx8bi5pbm5lcldpZHRoKCk8dC5zY3JvbGxXaWR0aCkpfSxzLmVzY2FwZU1hcmt1cD1mdW5jdGlvbihlKXt2YXIgdD17XCJcXFxcXCI6XCImIzkyO1wiLFwiJlwiOlwiJmFtcDtcIixcIjxcIjpcIiZsdDtcIixcIj5cIjpcIiZndDtcIiwnXCInOlwiJnF1b3Q7XCIsXCInXCI6XCImIzM5O1wiLFwiL1wiOlwiJiM0NztcIn07cmV0dXJuXCJzdHJpbmdcIiE9dHlwZW9mIGU/ZTpTdHJpbmcoZSkucmVwbGFjZSgvWyY8PlwiJ1xcL1xcXFxdL2csZnVuY3Rpb24oZSl7cmV0dXJuIHRbZV19KX0scy5fX2NhY2hlPXt9O3ZhciBuPTA7cmV0dXJuIHMuR2V0VW5pcXVlRWxlbWVudElkPWZ1bmN0aW9uKGUpe3ZhciB0PWUuZ2V0QXR0cmlidXRlKFwiZGF0YS1zZWxlY3QyLWlkXCIpO3JldHVybiBudWxsIT10fHwodD1lLmlkP1wic2VsZWN0Mi1kYXRhLVwiK2UuaWQ6XCJzZWxlY3QyLWRhdGEtXCIrKCsrbikudG9TdHJpbmcoKStcIi1cIitzLmdlbmVyYXRlQ2hhcnMoNCksZS5zZXRBdHRyaWJ1dGUoXCJkYXRhLXNlbGVjdDItaWRcIix0KSksdH0scy5TdG9yZURhdGE9ZnVuY3Rpb24oZSx0LG4pe2U9cy5HZXRVbmlxdWVFbGVtZW50SWQoZSk7cy5fX2NhY2hlW2VdfHwocy5fX2NhY2hlW2VdPXt9KSxzLl9fY2FjaGVbZV1bdF09bn0scy5HZXREYXRhPWZ1bmN0aW9uKGUsdCl7dmFyIG49cy5HZXRVbmlxdWVFbGVtZW50SWQoZSk7cmV0dXJuIHQ/cy5fX2NhY2hlW25dJiZudWxsIT1zLl9fY2FjaGVbbl1bdF0/cy5fX2NhY2hlW25dW3RdOnIoZSkuZGF0YSh0KTpzLl9fY2FjaGVbbl19LHMuUmVtb3ZlRGF0YT1mdW5jdGlvbihlKXt2YXIgdD1zLkdldFVuaXF1ZUVsZW1lbnRJZChlKTtudWxsIT1zLl9fY2FjaGVbdF0mJmRlbGV0ZSBzLl9fY2FjaGVbdF0sZS5yZW1vdmVBdHRyaWJ1dGUoXCJkYXRhLXNlbGVjdDItaWRcIil9LHMuY29weU5vbkludGVybmFsQ3NzQ2xhc3Nlcz1mdW5jdGlvbihlLHQpe3ZhciBuPShuPWUuZ2V0QXR0cmlidXRlKFwiY2xhc3NcIikudHJpbSgpLnNwbGl0KC9cXHMrLykpLmZpbHRlcihmdW5jdGlvbihlKXtyZXR1cm4gMD09PWUuaW5kZXhPZihcInNlbGVjdDItXCIpfSksdD0odD10LmdldEF0dHJpYnV0ZShcImNsYXNzXCIpLnRyaW0oKS5zcGxpdCgvXFxzKy8pKS5maWx0ZXIoZnVuY3Rpb24oZSl7cmV0dXJuIDAhPT1lLmluZGV4T2YoXCJzZWxlY3QyLVwiKX0pLHQ9bi5jb25jYXQodCk7ZS5zZXRBdHRyaWJ1dGUoXCJjbGFzc1wiLHQuam9pbihcIiBcIikpfSxzfSksdS5kZWZpbmUoXCJzZWxlY3QyL3Jlc3VsdHNcIixbXCJqcXVlcnlcIixcIi4vdXRpbHNcIl0sZnVuY3Rpb24oZCxwKXtmdW5jdGlvbiBzKGUsdCxuKXt0aGlzLiRlbGVtZW50PWUsdGhpcy5kYXRhPW4sdGhpcy5vcHRpb25zPXQscy5fX3N1cGVyX18uY29uc3RydWN0b3IuY2FsbCh0aGlzKX1yZXR1cm4gcC5FeHRlbmQocyxwLk9ic2VydmFibGUpLHMucHJvdG90eXBlLnJlbmRlcj1mdW5jdGlvbigpe3ZhciBlPWQoJzx1bCBjbGFzcz1cInNlbGVjdDItcmVzdWx0c19fb3B0aW9uc1wiIHJvbGU9XCJsaXN0Ym94XCI+PC91bD4nKTtyZXR1cm4gdGhpcy5vcHRpb25zLmdldChcIm11bHRpcGxlXCIpJiZlLmF0dHIoXCJhcmlhLW11bHRpc2VsZWN0YWJsZVwiLFwidHJ1ZVwiKSx0aGlzLiRyZXN1bHRzPWV9LHMucHJvdG90eXBlLmNsZWFyPWZ1bmN0aW9uKCl7dGhpcy4kcmVzdWx0cy5lbXB0eSgpfSxzLnByb3RvdHlwZS5kaXNwbGF5TWVzc2FnZT1mdW5jdGlvbihlKXt2YXIgdD10aGlzLm9wdGlvbnMuZ2V0KFwiZXNjYXBlTWFya3VwXCIpO3RoaXMuY2xlYXIoKSx0aGlzLmhpZGVMb2FkaW5nKCk7dmFyIG49ZCgnPGxpIHJvbGU9XCJhbGVydFwiIGFyaWEtbGl2ZT1cImFzc2VydGl2ZVwiIGNsYXNzPVwic2VsZWN0Mi1yZXN1bHRzX19vcHRpb25cIj48L2xpPicpLHM9dGhpcy5vcHRpb25zLmdldChcInRyYW5zbGF0aW9uc1wiKS5nZXQoZS5tZXNzYWdlKTtuLmFwcGVuZCh0KHMoZS5hcmdzKSkpLG5bMF0uY2xhc3NOYW1lKz1cIiBzZWxlY3QyLXJlc3VsdHNfX21lc3NhZ2VcIix0aGlzLiRyZXN1bHRzLmFwcGVuZChuKX0scy5wcm90b3R5cGUuaGlkZU1lc3NhZ2VzPWZ1bmN0aW9uKCl7dGhpcy4kcmVzdWx0cy5maW5kKFwiLnNlbGVjdDItcmVzdWx0c19fbWVzc2FnZVwiKS5yZW1vdmUoKX0scy5wcm90b3R5cGUuYXBwZW5kPWZ1bmN0aW9uKGUpe3RoaXMuaGlkZUxvYWRpbmcoKTt2YXIgdD1bXTtpZihudWxsIT1lLnJlc3VsdHMmJjAhPT1lLnJlc3VsdHMubGVuZ3RoKXtlLnJlc3VsdHM9dGhpcy5zb3J0KGUucmVzdWx0cyk7Zm9yKHZhciBuPTA7bjxlLnJlc3VsdHMubGVuZ3RoO24rKyl7dmFyIHM9ZS5yZXN1bHRzW25dLHM9dGhpcy5vcHRpb24ocyk7dC5wdXNoKHMpfXRoaXMuJHJlc3VsdHMuYXBwZW5kKHQpfWVsc2UgMD09PXRoaXMuJHJlc3VsdHMuY2hpbGRyZW4oKS5sZW5ndGgmJnRoaXMudHJpZ2dlcihcInJlc3VsdHM6bWVzc2FnZVwiLHttZXNzYWdlOlwibm9SZXN1bHRzXCJ9KX0scy5wcm90b3R5cGUucG9zaXRpb249ZnVuY3Rpb24oZSx0KXt0LmZpbmQoXCIuc2VsZWN0Mi1yZXN1bHRzXCIpLmFwcGVuZChlKX0scy5wcm90b3R5cGUuc29ydD1mdW5jdGlvbihlKXtyZXR1cm4gdGhpcy5vcHRpb25zLmdldChcInNvcnRlclwiKShlKX0scy5wcm90b3R5cGUuaGlnaGxpZ2h0Rmlyc3RJdGVtPWZ1bmN0aW9uKCl7dmFyIGU9dGhpcy4kcmVzdWx0cy5maW5kKFwiLnNlbGVjdDItcmVzdWx0c19fb3B0aW9uLS1zZWxlY3RhYmxlXCIpLHQ9ZS5maWx0ZXIoXCIuc2VsZWN0Mi1yZXN1bHRzX19vcHRpb24tLXNlbGVjdGVkXCIpOygwPHQubGVuZ3RoP3Q6ZSkuZmlyc3QoKS50cmlnZ2VyKFwibW91c2VlbnRlclwiKSx0aGlzLmVuc3VyZUhpZ2hsaWdodFZpc2libGUoKX0scy5wcm90b3R5cGUuc2V0Q2xhc3Nlcz1mdW5jdGlvbigpe3ZhciB0PXRoaXM7dGhpcy5kYXRhLmN1cnJlbnQoZnVuY3Rpb24oZSl7dmFyIHM9ZS5tYXAoZnVuY3Rpb24oZSl7cmV0dXJuIGUuaWQudG9TdHJpbmcoKX0pO3QuJHJlc3VsdHMuZmluZChcIi5zZWxlY3QyLXJlc3VsdHNfX29wdGlvbi0tc2VsZWN0YWJsZVwiKS5lYWNoKGZ1bmN0aW9uKCl7dmFyIGU9ZCh0aGlzKSx0PXAuR2V0RGF0YSh0aGlzLFwiZGF0YVwiKSxuPVwiXCIrdC5pZDtudWxsIT10LmVsZW1lbnQmJnQuZWxlbWVudC5zZWxlY3RlZHx8bnVsbD09dC5lbGVtZW50JiYtMTxzLmluZGV4T2Yobik/KHRoaXMuY2xhc3NMaXN0LmFkZChcInNlbGVjdDItcmVzdWx0c19fb3B0aW9uLS1zZWxlY3RlZFwiKSxlLmF0dHIoXCJhcmlhLXNlbGVjdGVkXCIsXCJ0cnVlXCIpKToodGhpcy5jbGFzc0xpc3QucmVtb3ZlKFwic2VsZWN0Mi1yZXN1bHRzX19vcHRpb24tLXNlbGVjdGVkXCIpLGUuYXR0cihcImFyaWEtc2VsZWN0ZWRcIixcImZhbHNlXCIpKX0pfSl9LHMucHJvdG90eXBlLnNob3dMb2FkaW5nPWZ1bmN0aW9uKGUpe3RoaXMuaGlkZUxvYWRpbmcoKTtlPXtkaXNhYmxlZDohMCxsb2FkaW5nOiEwLHRleHQ6dGhpcy5vcHRpb25zLmdldChcInRyYW5zbGF0aW9uc1wiKS5nZXQoXCJzZWFyY2hpbmdcIikoZSl9LGU9dGhpcy5vcHRpb24oZSk7ZS5jbGFzc05hbWUrPVwiIGxvYWRpbmctcmVzdWx0c1wiLHRoaXMuJHJlc3VsdHMucHJlcGVuZChlKX0scy5wcm90b3R5cGUuaGlkZUxvYWRpbmc9ZnVuY3Rpb24oKXt0aGlzLiRyZXN1bHRzLmZpbmQoXCIubG9hZGluZy1yZXN1bHRzXCIpLnJlbW92ZSgpfSxzLnByb3RvdHlwZS5vcHRpb249ZnVuY3Rpb24oZSl7dmFyIHQ9ZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImxpXCIpO3QuY2xhc3NMaXN0LmFkZChcInNlbGVjdDItcmVzdWx0c19fb3B0aW9uXCIpLHQuY2xhc3NMaXN0LmFkZChcInNlbGVjdDItcmVzdWx0c19fb3B0aW9uLS1zZWxlY3RhYmxlXCIpO3ZhciBuLHM9e3JvbGU6XCJvcHRpb25cIn0saT13aW5kb3cuRWxlbWVudC5wcm90b3R5cGUubWF0Y2hlc3x8d2luZG93LkVsZW1lbnQucHJvdG90eXBlLm1zTWF0Y2hlc1NlbGVjdG9yfHx3aW5kb3cuRWxlbWVudC5wcm90b3R5cGUud2Via2l0TWF0Y2hlc1NlbGVjdG9yO2ZvcihuIGluKG51bGwhPWUuZWxlbWVudCYmaS5jYWxsKGUuZWxlbWVudCxcIjpkaXNhYmxlZFwiKXx8bnVsbD09ZS5lbGVtZW50JiZlLmRpc2FibGVkKSYmKHNbXCJhcmlhLWRpc2FibGVkXCJdPVwidHJ1ZVwiLHQuY2xhc3NMaXN0LnJlbW92ZShcInNlbGVjdDItcmVzdWx0c19fb3B0aW9uLS1zZWxlY3RhYmxlXCIpLHQuY2xhc3NMaXN0LmFkZChcInNlbGVjdDItcmVzdWx0c19fb3B0aW9uLS1kaXNhYmxlZFwiKSksbnVsbD09ZS5pZCYmdC5jbGFzc0xpc3QucmVtb3ZlKFwic2VsZWN0Mi1yZXN1bHRzX19vcHRpb24tLXNlbGVjdGFibGVcIiksbnVsbCE9ZS5fcmVzdWx0SWQmJih0LmlkPWUuX3Jlc3VsdElkKSxlLnRpdGxlJiYodC50aXRsZT1lLnRpdGxlKSxlLmNoaWxkcmVuJiYocy5yb2xlPVwiZ3JvdXBcIixzW1wiYXJpYS1sYWJlbFwiXT1lLnRleHQsdC5jbGFzc0xpc3QucmVtb3ZlKFwic2VsZWN0Mi1yZXN1bHRzX19vcHRpb24tLXNlbGVjdGFibGVcIiksdC5jbGFzc0xpc3QuYWRkKFwic2VsZWN0Mi1yZXN1bHRzX19vcHRpb24tLWdyb3VwXCIpKSxzKXt2YXIgcj1zW25dO3Quc2V0QXR0cmlidXRlKG4scil9aWYoZS5jaGlsZHJlbil7dmFyIG89ZCh0KSxhPWRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJzdHJvbmdcIik7YS5jbGFzc05hbWU9XCJzZWxlY3QyLXJlc3VsdHNfX2dyb3VwXCIsdGhpcy50ZW1wbGF0ZShlLGEpO2Zvcih2YXIgbD1bXSxjPTA7YzxlLmNoaWxkcmVuLmxlbmd0aDtjKyspe3ZhciB1PWUuY2hpbGRyZW5bY10sdT10aGlzLm9wdGlvbih1KTtsLnB1c2godSl9aT1kKFwiPHVsPjwvdWw+XCIse2NsYXNzOlwic2VsZWN0Mi1yZXN1bHRzX19vcHRpb25zIHNlbGVjdDItcmVzdWx0c19fb3B0aW9ucy0tbmVzdGVkXCIscm9sZTpcIm5vbmVcIn0pO2kuYXBwZW5kKGwpLG8uYXBwZW5kKGEpLG8uYXBwZW5kKGkpfWVsc2UgdGhpcy50ZW1wbGF0ZShlLHQpO3JldHVybiBwLlN0b3JlRGF0YSh0LFwiZGF0YVwiLGUpLHR9LHMucHJvdG90eXBlLmJpbmQ9ZnVuY3Rpb24odCxlKXt2YXIgaT10aGlzLG49dC5pZCtcIi1yZXN1bHRzXCI7dGhpcy4kcmVzdWx0cy5hdHRyKFwiaWRcIixuKSx0Lm9uKFwicmVzdWx0czphbGxcIixmdW5jdGlvbihlKXtpLmNsZWFyKCksaS5hcHBlbmQoZS5kYXRhKSx0LmlzT3BlbigpJiYoaS5zZXRDbGFzc2VzKCksaS5oaWdobGlnaHRGaXJzdEl0ZW0oKSl9KSx0Lm9uKFwicmVzdWx0czphcHBlbmRcIixmdW5jdGlvbihlKXtpLmFwcGVuZChlLmRhdGEpLHQuaXNPcGVuKCkmJmkuc2V0Q2xhc3NlcygpfSksdC5vbihcInF1ZXJ5XCIsZnVuY3Rpb24oZSl7aS5oaWRlTWVzc2FnZXMoKSxpLnNob3dMb2FkaW5nKGUpfSksdC5vbihcInNlbGVjdFwiLGZ1bmN0aW9uKCl7dC5pc09wZW4oKSYmKGkuc2V0Q2xhc3NlcygpLGkub3B0aW9ucy5nZXQoXCJzY3JvbGxBZnRlclNlbGVjdFwiKSYmaS5oaWdobGlnaHRGaXJzdEl0ZW0oKSl9KSx0Lm9uKFwidW5zZWxlY3RcIixmdW5jdGlvbigpe3QuaXNPcGVuKCkmJihpLnNldENsYXNzZXMoKSxpLm9wdGlvbnMuZ2V0KFwic2Nyb2xsQWZ0ZXJTZWxlY3RcIikmJmkuaGlnaGxpZ2h0Rmlyc3RJdGVtKCkpfSksdC5vbihcIm9wZW5cIixmdW5jdGlvbigpe2kuJHJlc3VsdHMuYXR0cihcImFyaWEtZXhwYW5kZWRcIixcInRydWVcIiksaS4kcmVzdWx0cy5hdHRyKFwiYXJpYS1oaWRkZW5cIixcImZhbHNlXCIpLGkuc2V0Q2xhc3NlcygpLGkuZW5zdXJlSGlnaGxpZ2h0VmlzaWJsZSgpfSksdC5vbihcImNsb3NlXCIsZnVuY3Rpb24oKXtpLiRyZXN1bHRzLmF0dHIoXCJhcmlhLWV4cGFuZGVkXCIsXCJmYWxzZVwiKSxpLiRyZXN1bHRzLmF0dHIoXCJhcmlhLWhpZGRlblwiLFwidHJ1ZVwiKSxpLiRyZXN1bHRzLnJlbW92ZUF0dHIoXCJhcmlhLWFjdGl2ZWRlc2NlbmRhbnRcIil9KSx0Lm9uKFwicmVzdWx0czp0b2dnbGVcIixmdW5jdGlvbigpe3ZhciBlPWkuZ2V0SGlnaGxpZ2h0ZWRSZXN1bHRzKCk7MCE9PWUubGVuZ3RoJiZlLnRyaWdnZXIoXCJtb3VzZXVwXCIpfSksdC5vbihcInJlc3VsdHM6c2VsZWN0XCIsZnVuY3Rpb24oKXt2YXIgZSx0PWkuZ2V0SGlnaGxpZ2h0ZWRSZXN1bHRzKCk7MCE9PXQubGVuZ3RoJiYoZT1wLkdldERhdGEodFswXSxcImRhdGFcIiksdC5oYXNDbGFzcyhcInNlbGVjdDItcmVzdWx0c19fb3B0aW9uLS1zZWxlY3RlZFwiKT9pLnRyaWdnZXIoXCJjbG9zZVwiLHt9KTppLnRyaWdnZXIoXCJzZWxlY3RcIix7ZGF0YTplfSkpfSksdC5vbihcInJlc3VsdHM6cHJldmlvdXNcIixmdW5jdGlvbigpe3ZhciBlLHQ9aS5nZXRIaWdobGlnaHRlZFJlc3VsdHMoKSxuPWkuJHJlc3VsdHMuZmluZChcIi5zZWxlY3QyLXJlc3VsdHNfX29wdGlvbi0tc2VsZWN0YWJsZVwiKSxzPW4uaW5kZXgodCk7czw9MHx8KGU9cy0xLDA9PT10Lmxlbmd0aCYmKGU9MCksKHM9bi5lcShlKSkudHJpZ2dlcihcIm1vdXNlZW50ZXJcIiksdD1pLiRyZXN1bHRzLm9mZnNldCgpLnRvcCxuPXMub2Zmc2V0KCkudG9wLHM9aS4kcmVzdWx0cy5zY3JvbGxUb3AoKSsobi10KSwwPT09ZT9pLiRyZXN1bHRzLnNjcm9sbFRvcCgwKTpuLXQ8MCYmaS4kcmVzdWx0cy5zY3JvbGxUb3AocykpfSksdC5vbihcInJlc3VsdHM6bmV4dFwiLGZ1bmN0aW9uKCl7dmFyIGUsdD1pLmdldEhpZ2hsaWdodGVkUmVzdWx0cygpLG49aS4kcmVzdWx0cy5maW5kKFwiLnNlbGVjdDItcmVzdWx0c19fb3B0aW9uLS1zZWxlY3RhYmxlXCIpLHM9bi5pbmRleCh0KSsxO3M+PW4ubGVuZ3RofHwoKGU9bi5lcShzKSkudHJpZ2dlcihcIm1vdXNlZW50ZXJcIiksdD1pLiRyZXN1bHRzLm9mZnNldCgpLnRvcCtpLiRyZXN1bHRzLm91dGVySGVpZ2h0KCExKSxuPWUub2Zmc2V0KCkudG9wK2Uub3V0ZXJIZWlnaHQoITEpLGU9aS4kcmVzdWx0cy5zY3JvbGxUb3AoKStuLXQsMD09PXM/aS4kcmVzdWx0cy5zY3JvbGxUb3AoMCk6dDxuJiZpLiRyZXN1bHRzLnNjcm9sbFRvcChlKSl9KSx0Lm9uKFwicmVzdWx0czpmb2N1c1wiLGZ1bmN0aW9uKGUpe2UuZWxlbWVudFswXS5jbGFzc0xpc3QuYWRkKFwic2VsZWN0Mi1yZXN1bHRzX19vcHRpb24tLWhpZ2hsaWdodGVkXCIpLGUuZWxlbWVudFswXS5zZXRBdHRyaWJ1dGUoXCJhcmlhLXNlbGVjdGVkXCIsXCJ0cnVlXCIpfSksdC5vbihcInJlc3VsdHM6bWVzc2FnZVwiLGZ1bmN0aW9uKGUpe2kuZGlzcGxheU1lc3NhZ2UoZSl9KSxkLmZuLm1vdXNld2hlZWwmJnRoaXMuJHJlc3VsdHMub24oXCJtb3VzZXdoZWVsXCIsZnVuY3Rpb24oZSl7dmFyIHQ9aS4kcmVzdWx0cy5zY3JvbGxUb3AoKSxuPWkuJHJlc3VsdHMuZ2V0KDApLnNjcm9sbEhlaWdodC10K2UuZGVsdGFZLHQ9MDxlLmRlbHRhWSYmdC1lLmRlbHRhWTw9MCxuPWUuZGVsdGFZPDAmJm48PWkuJHJlc3VsdHMuaGVpZ2h0KCk7dD8oaS4kcmVzdWx0cy5zY3JvbGxUb3AoMCksZS5wcmV2ZW50RGVmYXVsdCgpLGUuc3RvcFByb3BhZ2F0aW9uKCkpOm4mJihpLiRyZXN1bHRzLnNjcm9sbFRvcChpLiRyZXN1bHRzLmdldCgwKS5zY3JvbGxIZWlnaHQtaS4kcmVzdWx0cy5oZWlnaHQoKSksZS5wcmV2ZW50RGVmYXVsdCgpLGUuc3RvcFByb3BhZ2F0aW9uKCkpfSksdGhpcy4kcmVzdWx0cy5vbihcIm1vdXNldXBcIixcIi5zZWxlY3QyLXJlc3VsdHNfX29wdGlvbi0tc2VsZWN0YWJsZVwiLGZ1bmN0aW9uKGUpe3ZhciB0PWQodGhpcyksbj1wLkdldERhdGEodGhpcyxcImRhdGFcIik7dC5oYXNDbGFzcyhcInNlbGVjdDItcmVzdWx0c19fb3B0aW9uLS1zZWxlY3RlZFwiKT9pLm9wdGlvbnMuZ2V0KFwibXVsdGlwbGVcIik/aS50cmlnZ2VyKFwidW5zZWxlY3RcIix7b3JpZ2luYWxFdmVudDplLGRhdGE6bn0pOmkudHJpZ2dlcihcImNsb3NlXCIse30pOmkudHJpZ2dlcihcInNlbGVjdFwiLHtvcmlnaW5hbEV2ZW50OmUsZGF0YTpufSl9KSx0aGlzLiRyZXN1bHRzLm9uKFwibW91c2VlbnRlclwiLFwiLnNlbGVjdDItcmVzdWx0c19fb3B0aW9uLS1zZWxlY3RhYmxlXCIsZnVuY3Rpb24oZSl7dmFyIHQ9cC5HZXREYXRhKHRoaXMsXCJkYXRhXCIpO2kuZ2V0SGlnaGxpZ2h0ZWRSZXN1bHRzKCkucmVtb3ZlQ2xhc3MoXCJzZWxlY3QyLXJlc3VsdHNfX29wdGlvbi0taGlnaGxpZ2h0ZWRcIikuYXR0cihcImFyaWEtc2VsZWN0ZWRcIixcImZhbHNlXCIpLGkudHJpZ2dlcihcInJlc3VsdHM6Zm9jdXNcIix7ZGF0YTp0LGVsZW1lbnQ6ZCh0aGlzKX0pfSl9LHMucHJvdG90eXBlLmdldEhpZ2hsaWdodGVkUmVzdWx0cz1mdW5jdGlvbigpe3JldHVybiB0aGlzLiRyZXN1bHRzLmZpbmQoXCIuc2VsZWN0Mi1yZXN1bHRzX19vcHRpb24tLWhpZ2hsaWdodGVkXCIpfSxzLnByb3RvdHlwZS5kZXN0cm95PWZ1bmN0aW9uKCl7dGhpcy4kcmVzdWx0cy5yZW1vdmUoKX0scy5wcm90b3R5cGUuZW5zdXJlSGlnaGxpZ2h0VmlzaWJsZT1mdW5jdGlvbigpe3ZhciBlLHQsbixzLGk9dGhpcy5nZXRIaWdobGlnaHRlZFJlc3VsdHMoKTswIT09aS5sZW5ndGgmJihlPXRoaXMuJHJlc3VsdHMuZmluZChcIi5zZWxlY3QyLXJlc3VsdHNfX29wdGlvbi0tc2VsZWN0YWJsZVwiKS5pbmRleChpKSxzPXRoaXMuJHJlc3VsdHMub2Zmc2V0KCkudG9wLHQ9aS5vZmZzZXQoKS50b3Asbj10aGlzLiRyZXN1bHRzLnNjcm9sbFRvcCgpKyh0LXMpLHM9dC1zLG4tPTIqaS5vdXRlckhlaWdodCghMSksZTw9Mj90aGlzLiRyZXN1bHRzLnNjcm9sbFRvcCgwKToocz50aGlzLiRyZXN1bHRzLm91dGVySGVpZ2h0KCl8fHM8MCkmJnRoaXMuJHJlc3VsdHMuc2Nyb2xsVG9wKG4pKX0scy5wcm90b3R5cGUudGVtcGxhdGU9ZnVuY3Rpb24oZSx0KXt2YXIgbj10aGlzLm9wdGlvbnMuZ2V0KFwidGVtcGxhdGVSZXN1bHRcIikscz10aGlzLm9wdGlvbnMuZ2V0KFwiZXNjYXBlTWFya3VwXCIpLGU9bihlLHQpO251bGw9PWU/dC5zdHlsZS5kaXNwbGF5PVwibm9uZVwiOlwic3RyaW5nXCI9PXR5cGVvZiBlP3QuaW5uZXJIVE1MPXMoZSk6ZCh0KS5hcHBlbmQoZSl9LHN9KSx1LmRlZmluZShcInNlbGVjdDIva2V5c1wiLFtdLGZ1bmN0aW9uKCl7cmV0dXJue0JBQ0tTUEFDRTo4LFRBQjo5LEVOVEVSOjEzLFNISUZUOjE2LENUUkw6MTcsQUxUOjE4LEVTQzoyNyxTUEFDRTozMixQQUdFX1VQOjMzLFBBR0VfRE9XTjozNCxFTkQ6MzUsSE9NRTozNixMRUZUOjM3LFVQOjM4LFJJR0hUOjM5LERPV046NDAsREVMRVRFOjQ2fX0pLHUuZGVmaW5lKFwic2VsZWN0Mi9zZWxlY3Rpb24vYmFzZVwiLFtcImpxdWVyeVwiLFwiLi4vdXRpbHNcIixcIi4uL2tleXNcIl0sZnVuY3Rpb24obixzLGkpe2Z1bmN0aW9uIHIoZSx0KXt0aGlzLiRlbGVtZW50PWUsdGhpcy5vcHRpb25zPXQsci5fX3N1cGVyX18uY29uc3RydWN0b3IuY2FsbCh0aGlzKX1yZXR1cm4gcy5FeHRlbmQocixzLk9ic2VydmFibGUpLHIucHJvdG90eXBlLnJlbmRlcj1mdW5jdGlvbigpe3ZhciBlPW4oJzxzcGFuIGNsYXNzPVwic2VsZWN0Mi1zZWxlY3Rpb25cIiByb2xlPVwiY29tYm9ib3hcIiAgYXJpYS1oYXNwb3B1cD1cInRydWVcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIj48L3NwYW4+Jyk7cmV0dXJuIHRoaXMuX3RhYmluZGV4PTAsbnVsbCE9cy5HZXREYXRhKHRoaXMuJGVsZW1lbnRbMF0sXCJvbGQtdGFiaW5kZXhcIik/dGhpcy5fdGFiaW5kZXg9cy5HZXREYXRhKHRoaXMuJGVsZW1lbnRbMF0sXCJvbGQtdGFiaW5kZXhcIik6bnVsbCE9dGhpcy4kZWxlbWVudC5hdHRyKFwidGFiaW5kZXhcIikmJih0aGlzLl90YWJpbmRleD10aGlzLiRlbGVtZW50LmF0dHIoXCJ0YWJpbmRleFwiKSksZS5hdHRyKFwidGl0bGVcIix0aGlzLiRlbGVtZW50LmF0dHIoXCJ0aXRsZVwiKSksZS5hdHRyKFwidGFiaW5kZXhcIix0aGlzLl90YWJpbmRleCksZS5hdHRyKFwiYXJpYS1kaXNhYmxlZFwiLFwiZmFsc2VcIiksdGhpcy4kc2VsZWN0aW9uPWV9LHIucHJvdG90eXBlLmJpbmQ9ZnVuY3Rpb24oZSx0KXt2YXIgbj10aGlzLHM9ZS5pZCtcIi1yZXN1bHRzXCI7dGhpcy5jb250YWluZXI9ZSx0aGlzLiRzZWxlY3Rpb24ub24oXCJmb2N1c1wiLGZ1bmN0aW9uKGUpe24udHJpZ2dlcihcImZvY3VzXCIsZSl9KSx0aGlzLiRzZWxlY3Rpb24ub24oXCJibHVyXCIsZnVuY3Rpb24oZSl7bi5faGFuZGxlQmx1cihlKX0pLHRoaXMuJHNlbGVjdGlvbi5vbihcImtleWRvd25cIixmdW5jdGlvbihlKXtuLnRyaWdnZXIoXCJrZXlwcmVzc1wiLGUpLGUud2hpY2g9PT1pLlNQQUNFJiZlLnByZXZlbnREZWZhdWx0KCl9KSxlLm9uKFwicmVzdWx0czpmb2N1c1wiLGZ1bmN0aW9uKGUpe24uJHNlbGVjdGlvbi5hdHRyKFwiYXJpYS1hY3RpdmVkZXNjZW5kYW50XCIsZS5kYXRhLl9yZXN1bHRJZCl9KSxlLm9uKFwic2VsZWN0aW9uOnVwZGF0ZVwiLGZ1bmN0aW9uKGUpe24udXBkYXRlKGUuZGF0YSl9KSxlLm9uKFwib3BlblwiLGZ1bmN0aW9uKCl7bi4kc2VsZWN0aW9uLmF0dHIoXCJhcmlhLWV4cGFuZGVkXCIsXCJ0cnVlXCIpLG4uJHNlbGVjdGlvbi5hdHRyKFwiYXJpYS1vd25zXCIscyksbi5fYXR0YWNoQ2xvc2VIYW5kbGVyKGUpfSksZS5vbihcImNsb3NlXCIsZnVuY3Rpb24oKXtuLiRzZWxlY3Rpb24uYXR0cihcImFyaWEtZXhwYW5kZWRcIixcImZhbHNlXCIpLG4uJHNlbGVjdGlvbi5yZW1vdmVBdHRyKFwiYXJpYS1hY3RpdmVkZXNjZW5kYW50XCIpLG4uJHNlbGVjdGlvbi5yZW1vdmVBdHRyKFwiYXJpYS1vd25zXCIpLG4uJHNlbGVjdGlvbi50cmlnZ2VyKFwiZm9jdXNcIiksbi5fZGV0YWNoQ2xvc2VIYW5kbGVyKGUpfSksZS5vbihcImVuYWJsZVwiLGZ1bmN0aW9uKCl7bi4kc2VsZWN0aW9uLmF0dHIoXCJ0YWJpbmRleFwiLG4uX3RhYmluZGV4KSxuLiRzZWxlY3Rpb24uYXR0cihcImFyaWEtZGlzYWJsZWRcIixcImZhbHNlXCIpfSksZS5vbihcImRpc2FibGVcIixmdW5jdGlvbigpe24uJHNlbGVjdGlvbi5hdHRyKFwidGFiaW5kZXhcIixcIi0xXCIpLG4uJHNlbGVjdGlvbi5hdHRyKFwiYXJpYS1kaXNhYmxlZFwiLFwidHJ1ZVwiKX0pfSxyLnByb3RvdHlwZS5faGFuZGxlQmx1cj1mdW5jdGlvbihlKXt2YXIgdD10aGlzO3dpbmRvdy5zZXRUaW1lb3V0KGZ1bmN0aW9uKCl7ZG9jdW1lbnQuYWN0aXZlRWxlbWVudD09dC4kc2VsZWN0aW9uWzBdfHxuLmNvbnRhaW5zKHQuJHNlbGVjdGlvblswXSxkb2N1bWVudC5hY3RpdmVFbGVtZW50KXx8dC50cmlnZ2VyKFwiYmx1clwiLGUpfSwxKX0sci5wcm90b3R5cGUuX2F0dGFjaENsb3NlSGFuZGxlcj1mdW5jdGlvbihlKXtuKGRvY3VtZW50LmJvZHkpLm9uKFwibW91c2Vkb3duLnNlbGVjdDIuXCIrZS5pZCxmdW5jdGlvbihlKXt2YXIgdD1uKGUudGFyZ2V0KS5jbG9zZXN0KFwiLnNlbGVjdDJcIik7bihcIi5zZWxlY3QyLnNlbGVjdDItY29udGFpbmVyLS1vcGVuXCIpLmVhY2goZnVuY3Rpb24oKXt0aGlzIT10WzBdJiZzLkdldERhdGEodGhpcyxcImVsZW1lbnRcIikuc2VsZWN0MihcImNsb3NlXCIpfSl9KX0sci5wcm90b3R5cGUuX2RldGFjaENsb3NlSGFuZGxlcj1mdW5jdGlvbihlKXtuKGRvY3VtZW50LmJvZHkpLm9mZihcIm1vdXNlZG93bi5zZWxlY3QyLlwiK2UuaWQpfSxyLnByb3RvdHlwZS5wb3NpdGlvbj1mdW5jdGlvbihlLHQpe3QuZmluZChcIi5zZWxlY3Rpb25cIikuYXBwZW5kKGUpfSxyLnByb3RvdHlwZS5kZXN0cm95PWZ1bmN0aW9uKCl7dGhpcy5fZGV0YWNoQ2xvc2VIYW5kbGVyKHRoaXMuY29udGFpbmVyKX0sci5wcm90b3R5cGUudXBkYXRlPWZ1bmN0aW9uKGUpe3Rocm93IG5ldyBFcnJvcihcIlRoZSBgdXBkYXRlYCBtZXRob2QgbXVzdCBiZSBkZWZpbmVkIGluIGNoaWxkIGNsYXNzZXMuXCIpfSxyLnByb3RvdHlwZS5pc0VuYWJsZWQ9ZnVuY3Rpb24oKXtyZXR1cm4hdGhpcy5pc0Rpc2FibGVkKCl9LHIucHJvdG90eXBlLmlzRGlzYWJsZWQ9ZnVuY3Rpb24oKXtyZXR1cm4gdGhpcy5vcHRpb25zLmdldChcImRpc2FibGVkXCIpfSxyfSksdS5kZWZpbmUoXCJzZWxlY3QyL3NlbGVjdGlvbi9zaW5nbGVcIixbXCJqcXVlcnlcIixcIi4vYmFzZVwiLFwiLi4vdXRpbHNcIixcIi4uL2tleXNcIl0sZnVuY3Rpb24oZSx0LG4scyl7ZnVuY3Rpb24gaSgpe2kuX19zdXBlcl9fLmNvbnN0cnVjdG9yLmFwcGx5KHRoaXMsYXJndW1lbnRzKX1yZXR1cm4gbi5FeHRlbmQoaSx0KSxpLnByb3RvdHlwZS5yZW5kZXI9ZnVuY3Rpb24oKXt2YXIgZT1pLl9fc3VwZXJfXy5yZW5kZXIuY2FsbCh0aGlzKTtyZXR1cm4gZVswXS5jbGFzc0xpc3QuYWRkKFwic2VsZWN0Mi1zZWxlY3Rpb24tLXNpbmdsZVwiKSxlLmh0bWwoJzxzcGFuIGNsYXNzPVwic2VsZWN0Mi1zZWxlY3Rpb25fX3JlbmRlcmVkXCI+PC9zcGFuPjxzcGFuIGNsYXNzPVwic2VsZWN0Mi1zZWxlY3Rpb25fX2Fycm93XCIgcm9sZT1cInByZXNlbnRhdGlvblwiPjxiIHJvbGU9XCJwcmVzZW50YXRpb25cIj48L2I+PC9zcGFuPicpLGV9LGkucHJvdG90eXBlLmJpbmQ9ZnVuY3Rpb24odCxlKXt2YXIgbj10aGlzO2kuX19zdXBlcl9fLmJpbmQuYXBwbHkodGhpcyxhcmd1bWVudHMpO3ZhciBzPXQuaWQrXCItY29udGFpbmVyXCI7dGhpcy4kc2VsZWN0aW9uLmZpbmQoXCIuc2VsZWN0Mi1zZWxlY3Rpb25fX3JlbmRlcmVkXCIpLmF0dHIoXCJpZFwiLHMpLmF0dHIoXCJyb2xlXCIsXCJ0ZXh0Ym94XCIpLmF0dHIoXCJhcmlhLXJlYWRvbmx5XCIsXCJ0cnVlXCIpLHRoaXMuJHNlbGVjdGlvbi5hdHRyKFwiYXJpYS1sYWJlbGxlZGJ5XCIscyksdGhpcy4kc2VsZWN0aW9uLmF0dHIoXCJhcmlhLWNvbnRyb2xzXCIscyksdGhpcy4kc2VsZWN0aW9uLm9uKFwibW91c2Vkb3duXCIsZnVuY3Rpb24oZSl7MT09PWUud2hpY2gmJm4udHJpZ2dlcihcInRvZ2dsZVwiLHtvcmlnaW5hbEV2ZW50OmV9KX0pLHRoaXMuJHNlbGVjdGlvbi5vbihcImZvY3VzXCIsZnVuY3Rpb24oZSl7fSksdGhpcy4kc2VsZWN0aW9uLm9uKFwiYmx1clwiLGZ1bmN0aW9uKGUpe30pLHQub24oXCJmb2N1c1wiLGZ1bmN0aW9uKGUpe3QuaXNPcGVuKCl8fG4uJHNlbGVjdGlvbi50cmlnZ2VyKFwiZm9jdXNcIil9KX0saS5wcm90b3R5cGUuY2xlYXI9ZnVuY3Rpb24oKXt2YXIgZT10aGlzLiRzZWxlY3Rpb24uZmluZChcIi5zZWxlY3QyLXNlbGVjdGlvbl9fcmVuZGVyZWRcIik7ZS5lbXB0eSgpLGUucmVtb3ZlQXR0cihcInRpdGxlXCIpfSxpLnByb3RvdHlwZS5kaXNwbGF5PWZ1bmN0aW9uKGUsdCl7dmFyIG49dGhpcy5vcHRpb25zLmdldChcInRlbXBsYXRlU2VsZWN0aW9uXCIpO3JldHVybiB0aGlzLm9wdGlvbnMuZ2V0KFwiZXNjYXBlTWFya3VwXCIpKG4oZSx0KSl9LGkucHJvdG90eXBlLnNlbGVjdGlvbkNvbnRhaW5lcj1mdW5jdGlvbigpe3JldHVybiBlKFwiPHNwYW4+PC9zcGFuPlwiKX0saS5wcm90b3R5cGUudXBkYXRlPWZ1bmN0aW9uKGUpe3ZhciB0LG47MCE9PWUubGVuZ3RoPyhuPWVbMF0sdD10aGlzLiRzZWxlY3Rpb24uZmluZChcIi5zZWxlY3QyLXNlbGVjdGlvbl9fcmVuZGVyZWRcIiksZT10aGlzLmRpc3BsYXkobix0KSx0LmVtcHR5KCkuYXBwZW5kKGUpLChuPW4udGl0bGV8fG4udGV4dCk/dC5hdHRyKFwidGl0bGVcIixuKTp0LnJlbW92ZUF0dHIoXCJ0aXRsZVwiKSk6dGhpcy5jbGVhcigpfSxpfSksdS5kZWZpbmUoXCJzZWxlY3QyL3NlbGVjdGlvbi9tdWx0aXBsZVwiLFtcImpxdWVyeVwiLFwiLi9iYXNlXCIsXCIuLi91dGlsc1wiXSxmdW5jdGlvbihpLGUsYyl7ZnVuY3Rpb24gcihlLHQpe3IuX19zdXBlcl9fLmNvbnN0cnVjdG9yLmFwcGx5KHRoaXMsYXJndW1lbnRzKX1yZXR1cm4gYy5FeHRlbmQocixlKSxyLnByb3RvdHlwZS5yZW5kZXI9ZnVuY3Rpb24oKXt2YXIgZT1yLl9fc3VwZXJfXy5yZW5kZXIuY2FsbCh0aGlzKTtyZXR1cm4gZVswXS5jbGFzc0xpc3QuYWRkKFwic2VsZWN0Mi1zZWxlY3Rpb24tLW11bHRpcGxlXCIpLGUuaHRtbCgnPHVsIGNsYXNzPVwic2VsZWN0Mi1zZWxlY3Rpb25fX3JlbmRlcmVkXCI+PC91bD4nKSxlfSxyLnByb3RvdHlwZS5iaW5kPWZ1bmN0aW9uKGUsdCl7dmFyIG49dGhpcztyLl9fc3VwZXJfXy5iaW5kLmFwcGx5KHRoaXMsYXJndW1lbnRzKTt2YXIgcz1lLmlkK1wiLWNvbnRhaW5lclwiO3RoaXMuJHNlbGVjdGlvbi5maW5kKFwiLnNlbGVjdDItc2VsZWN0aW9uX19yZW5kZXJlZFwiKS5hdHRyKFwiaWRcIixzKSx0aGlzLiRzZWxlY3Rpb24ub24oXCJjbGlja1wiLGZ1bmN0aW9uKGUpe24udHJpZ2dlcihcInRvZ2dsZVwiLHtvcmlnaW5hbEV2ZW50OmV9KX0pLHRoaXMuJHNlbGVjdGlvbi5vbihcImNsaWNrXCIsXCIuc2VsZWN0Mi1zZWxlY3Rpb25fX2Nob2ljZV9fcmVtb3ZlXCIsZnVuY3Rpb24oZSl7dmFyIHQ7bi5pc0Rpc2FibGVkKCl8fCh0PWkodGhpcykucGFyZW50KCksdD1jLkdldERhdGEodFswXSxcImRhdGFcIiksbi50cmlnZ2VyKFwidW5zZWxlY3RcIix7b3JpZ2luYWxFdmVudDplLGRhdGE6dH0pKX0pLHRoaXMuJHNlbGVjdGlvbi5vbihcImtleWRvd25cIixcIi5zZWxlY3QyLXNlbGVjdGlvbl9fY2hvaWNlX19yZW1vdmVcIixmdW5jdGlvbihlKXtuLmlzRGlzYWJsZWQoKXx8ZS5zdG9wUHJvcGFnYXRpb24oKX0pfSxyLnByb3RvdHlwZS5jbGVhcj1mdW5jdGlvbigpe3ZhciBlPXRoaXMuJHNlbGVjdGlvbi5maW5kKFwiLnNlbGVjdDItc2VsZWN0aW9uX19yZW5kZXJlZFwiKTtlLmVtcHR5KCksZS5yZW1vdmVBdHRyKFwidGl0bGVcIil9LHIucHJvdG90eXBlLmRpc3BsYXk9ZnVuY3Rpb24oZSx0KXt2YXIgbj10aGlzLm9wdGlvbnMuZ2V0KFwidGVtcGxhdGVTZWxlY3Rpb25cIik7cmV0dXJuIHRoaXMub3B0aW9ucy5nZXQoXCJlc2NhcGVNYXJrdXBcIikobihlLHQpKX0sci5wcm90b3R5cGUuc2VsZWN0aW9uQ29udGFpbmVyPWZ1bmN0aW9uKCl7cmV0dXJuIGkoJzxsaSBjbGFzcz1cInNlbGVjdDItc2VsZWN0aW9uX19jaG9pY2VcIj48YnV0dG9uIHR5cGU9XCJidXR0b25cIiBjbGFzcz1cInNlbGVjdDItc2VsZWN0aW9uX19jaG9pY2VfX3JlbW92ZVwiIHRhYmluZGV4PVwiLTFcIj48c3BhbiBhcmlhLWhpZGRlbj1cInRydWVcIj4mdGltZXM7PC9zcGFuPjwvYnV0dG9uPjxzcGFuIGNsYXNzPVwic2VsZWN0Mi1zZWxlY3Rpb25fX2Nob2ljZV9fZGlzcGxheVwiPjwvc3Bhbj48L2xpPicpfSxyLnByb3RvdHlwZS51cGRhdGU9ZnVuY3Rpb24oZSl7aWYodGhpcy5jbGVhcigpLDAhPT1lLmxlbmd0aCl7Zm9yKHZhciB0PVtdLG49dGhpcy4kc2VsZWN0aW9uLmZpbmQoXCIuc2VsZWN0Mi1zZWxlY3Rpb25fX3JlbmRlcmVkXCIpLmF0dHIoXCJpZFwiKStcIi1jaG9pY2UtXCIscz0wO3M8ZS5sZW5ndGg7cysrKXt2YXIgaT1lW3NdLHI9dGhpcy5zZWxlY3Rpb25Db250YWluZXIoKSxvPXRoaXMuZGlzcGxheShpLHIpLGE9bitjLmdlbmVyYXRlQ2hhcnMoNCkrXCItXCI7aS5pZD9hKz1pLmlkOmErPWMuZ2VuZXJhdGVDaGFycyg0KSxyLmZpbmQoXCIuc2VsZWN0Mi1zZWxlY3Rpb25fX2Nob2ljZV9fZGlzcGxheVwiKS5hcHBlbmQobykuYXR0cihcImlkXCIsYSk7dmFyIGw9aS50aXRsZXx8aS50ZXh0O2wmJnIuYXR0cihcInRpdGxlXCIsbCk7bz10aGlzLm9wdGlvbnMuZ2V0KFwidHJhbnNsYXRpb25zXCIpLmdldChcInJlbW92ZUl0ZW1cIiksbD1yLmZpbmQoXCIuc2VsZWN0Mi1zZWxlY3Rpb25fX2Nob2ljZV9fcmVtb3ZlXCIpO2wuYXR0cihcInRpdGxlXCIsbygpKSxsLmF0dHIoXCJhcmlhLWxhYmVsXCIsbygpKSxsLmF0dHIoXCJhcmlhLWRlc2NyaWJlZGJ5XCIsYSksYy5TdG9yZURhdGEoclswXSxcImRhdGFcIixpKSx0LnB1c2gocil9dGhpcy4kc2VsZWN0aW9uLmZpbmQoXCIuc2VsZWN0Mi1zZWxlY3Rpb25fX3JlbmRlcmVkXCIpLmFwcGVuZCh0KX19LHJ9KSx1LmRlZmluZShcInNlbGVjdDIvc2VsZWN0aW9uL3BsYWNlaG9sZGVyXCIsW10sZnVuY3Rpb24oKXtmdW5jdGlvbiBlKGUsdCxuKXt0aGlzLnBsYWNlaG9sZGVyPXRoaXMubm9ybWFsaXplUGxhY2Vob2xkZXIobi5nZXQoXCJwbGFjZWhvbGRlclwiKSksZS5jYWxsKHRoaXMsdCxuKX1yZXR1cm4gZS5wcm90b3R5cGUubm9ybWFsaXplUGxhY2Vob2xkZXI9ZnVuY3Rpb24oZSx0KXtyZXR1cm4gdD1cInN0cmluZ1wiPT10eXBlb2YgdD97aWQ6XCJcIix0ZXh0OnR9OnR9LGUucHJvdG90eXBlLmNyZWF0ZVBsYWNlaG9sZGVyPWZ1bmN0aW9uKGUsdCl7dmFyIG49dGhpcy5zZWxlY3Rpb25Db250YWluZXIoKTtuLmh0bWwodGhpcy5kaXNwbGF5KHQpKSxuWzBdLmNsYXNzTGlzdC5hZGQoXCJzZWxlY3QyLXNlbGVjdGlvbl9fcGxhY2Vob2xkZXJcIiksblswXS5jbGFzc0xpc3QucmVtb3ZlKFwic2VsZWN0Mi1zZWxlY3Rpb25fX2Nob2ljZVwiKTt0PXQudGl0bGV8fHQudGV4dHx8bi50ZXh0KCk7cmV0dXJuIHRoaXMuJHNlbGVjdGlvbi5maW5kKFwiLnNlbGVjdDItc2VsZWN0aW9uX19yZW5kZXJlZFwiKS5hdHRyKFwidGl0bGVcIix0KSxufSxlLnByb3RvdHlwZS51cGRhdGU9ZnVuY3Rpb24oZSx0KXt2YXIgbj0xPT10Lmxlbmd0aCYmdFswXS5pZCE9dGhpcy5wbGFjZWhvbGRlci5pZDtpZigxPHQubGVuZ3RofHxuKXJldHVybiBlLmNhbGwodGhpcyx0KTt0aGlzLmNsZWFyKCk7dD10aGlzLmNyZWF0ZVBsYWNlaG9sZGVyKHRoaXMucGxhY2Vob2xkZXIpO3RoaXMuJHNlbGVjdGlvbi5maW5kKFwiLnNlbGVjdDItc2VsZWN0aW9uX19yZW5kZXJlZFwiKS5hcHBlbmQodCl9LGV9KSx1LmRlZmluZShcInNlbGVjdDIvc2VsZWN0aW9uL2FsbG93Q2xlYXJcIixbXCJqcXVlcnlcIixcIi4uL2tleXNcIixcIi4uL3V0aWxzXCJdLGZ1bmN0aW9uKGkscyxhKXtmdW5jdGlvbiBlKCl7fXJldHVybiBlLnByb3RvdHlwZS5iaW5kPWZ1bmN0aW9uKGUsdCxuKXt2YXIgcz10aGlzO2UuY2FsbCh0aGlzLHQsbiksbnVsbD09dGhpcy5wbGFjZWhvbGRlciYmdGhpcy5vcHRpb25zLmdldChcImRlYnVnXCIpJiZ3aW5kb3cuY29uc29sZSYmY29uc29sZS5lcnJvciYmY29uc29sZS5lcnJvcihcIlNlbGVjdDI6IFRoZSBgYWxsb3dDbGVhcmAgb3B0aW9uIHNob3VsZCBiZSB1c2VkIGluIGNvbWJpbmF0aW9uIHdpdGggdGhlIGBwbGFjZWhvbGRlcmAgb3B0aW9uLlwiKSx0aGlzLiRzZWxlY3Rpb24ub24oXCJtb3VzZWRvd25cIixcIi5zZWxlY3QyLXNlbGVjdGlvbl9fY2xlYXJcIixmdW5jdGlvbihlKXtzLl9oYW5kbGVDbGVhcihlKX0pLHQub24oXCJrZXlwcmVzc1wiLGZ1bmN0aW9uKGUpe3MuX2hhbmRsZUtleWJvYXJkQ2xlYXIoZSx0KX0pfSxlLnByb3RvdHlwZS5faGFuZGxlQ2xlYXI9ZnVuY3Rpb24oZSx0KXtpZighdGhpcy5pc0Rpc2FibGVkKCkpe3ZhciBuPXRoaXMuJHNlbGVjdGlvbi5maW5kKFwiLnNlbGVjdDItc2VsZWN0aW9uX19jbGVhclwiKTtpZigwIT09bi5sZW5ndGgpe3Quc3RvcFByb3BhZ2F0aW9uKCk7dmFyIHM9YS5HZXREYXRhKG5bMF0sXCJkYXRhXCIpLGk9dGhpcy4kZWxlbWVudC52YWwoKTt0aGlzLiRlbGVtZW50LnZhbCh0aGlzLnBsYWNlaG9sZGVyLmlkKTt2YXIgcj17ZGF0YTpzfTtpZih0aGlzLnRyaWdnZXIoXCJjbGVhclwiLHIpLHIucHJldmVudGVkKXRoaXMuJGVsZW1lbnQudmFsKGkpO2Vsc2V7Zm9yKHZhciBvPTA7bzxzLmxlbmd0aDtvKyspaWYocj17ZGF0YTpzW29dfSx0aGlzLnRyaWdnZXIoXCJ1bnNlbGVjdFwiLHIpLHIucHJldmVudGVkKXJldHVybiB2b2lkIHRoaXMuJGVsZW1lbnQudmFsKGkpO3RoaXMuJGVsZW1lbnQudHJpZ2dlcihcImlucHV0XCIpLnRyaWdnZXIoXCJjaGFuZ2VcIiksdGhpcy50cmlnZ2VyKFwidG9nZ2xlXCIse30pfX19fSxlLnByb3RvdHlwZS5faGFuZGxlS2V5Ym9hcmRDbGVhcj1mdW5jdGlvbihlLHQsbil7bi5pc09wZW4oKXx8dC53aGljaCE9cy5ERUxFVEUmJnQud2hpY2ghPXMuQkFDS1NQQUNFfHx0aGlzLl9oYW5kbGVDbGVhcih0KX0sZS5wcm90b3R5cGUudXBkYXRlPWZ1bmN0aW9uKGUsdCl7dmFyIG4scztlLmNhbGwodGhpcyx0KSx0aGlzLiRzZWxlY3Rpb24uZmluZChcIi5zZWxlY3QyLXNlbGVjdGlvbl9fY2xlYXJcIikucmVtb3ZlKCksdGhpcy4kc2VsZWN0aW9uWzBdLmNsYXNzTGlzdC5yZW1vdmUoXCJzZWxlY3QyLXNlbGVjdGlvbi0tY2xlYXJhYmxlXCIpLDA8dGhpcy4kc2VsZWN0aW9uLmZpbmQoXCIuc2VsZWN0Mi1zZWxlY3Rpb25fX3BsYWNlaG9sZGVyXCIpLmxlbmd0aHx8MD09PXQubGVuZ3RofHwobj10aGlzLiRzZWxlY3Rpb24uZmluZChcIi5zZWxlY3QyLXNlbGVjdGlvbl9fcmVuZGVyZWRcIikuYXR0cihcImlkXCIpLHM9dGhpcy5vcHRpb25zLmdldChcInRyYW5zbGF0aW9uc1wiKS5nZXQoXCJyZW1vdmVBbGxJdGVtc1wiKSwoZT1pKCc8YnV0dG9uIHR5cGU9XCJidXR0b25cIiBjbGFzcz1cInNlbGVjdDItc2VsZWN0aW9uX19jbGVhclwiIHRhYmluZGV4PVwiLTFcIj48c3BhbiBhcmlhLWhpZGRlbj1cInRydWVcIj4mdGltZXM7PC9zcGFuPjwvYnV0dG9uPicpKS5hdHRyKFwidGl0bGVcIixzKCkpLGUuYXR0cihcImFyaWEtbGFiZWxcIixzKCkpLGUuYXR0cihcImFyaWEtZGVzY3JpYmVkYnlcIixuKSxhLlN0b3JlRGF0YShlWzBdLFwiZGF0YVwiLHQpLHRoaXMuJHNlbGVjdGlvbi5wcmVwZW5kKGUpLHRoaXMuJHNlbGVjdGlvblswXS5jbGFzc0xpc3QuYWRkKFwic2VsZWN0Mi1zZWxlY3Rpb24tLWNsZWFyYWJsZVwiKSl9LGV9KSx1LmRlZmluZShcInNlbGVjdDIvc2VsZWN0aW9uL3NlYXJjaFwiLFtcImpxdWVyeVwiLFwiLi4vdXRpbHNcIixcIi4uL2tleXNcIl0sZnVuY3Rpb24ocyxhLGwpe2Z1bmN0aW9uIGUoZSx0LG4pe2UuY2FsbCh0aGlzLHQsbil9cmV0dXJuIGUucHJvdG90eXBlLnJlbmRlcj1mdW5jdGlvbihlKXt2YXIgdD10aGlzLm9wdGlvbnMuZ2V0KFwidHJhbnNsYXRpb25zXCIpLmdldChcInNlYXJjaFwiKSxuPXMoJzxzcGFuIGNsYXNzPVwic2VsZWN0Mi1zZWFyY2ggc2VsZWN0Mi1zZWFyY2gtLWlubGluZVwiPjx0ZXh0YXJlYSBjbGFzcz1cInNlbGVjdDItc2VhcmNoX19maWVsZFwiIHR5cGU9XCJzZWFyY2hcIiB0YWJpbmRleD1cIi0xXCIgYXV0b2NvcnJlY3Q9XCJvZmZcIiBhdXRvY2FwaXRhbGl6ZT1cIm5vbmVcIiBzcGVsbGNoZWNrPVwiZmFsc2VcIiByb2xlPVwic2VhcmNoYm94XCIgYXJpYS1hdXRvY29tcGxldGU9XCJsaXN0XCIgPjwvdGV4dGFyZWE+PC9zcGFuPicpO3RoaXMuJHNlYXJjaENvbnRhaW5lcj1uLHRoaXMuJHNlYXJjaD1uLmZpbmQoXCJ0ZXh0YXJlYVwiKSx0aGlzLiRzZWFyY2gucHJvcChcImF1dG9jb21wbGV0ZVwiLHRoaXMub3B0aW9ucy5nZXQoXCJhdXRvY29tcGxldGVcIikpLHRoaXMuJHNlYXJjaC5hdHRyKFwiYXJpYS1sYWJlbFwiLHQoKSk7ZT1lLmNhbGwodGhpcyk7cmV0dXJuIHRoaXMuX3RyYW5zZmVyVGFiSW5kZXgoKSxlLmFwcGVuZCh0aGlzLiRzZWFyY2hDb250YWluZXIpLGV9LGUucHJvdG90eXBlLmJpbmQ9ZnVuY3Rpb24oZSx0LG4pe3ZhciBzPXRoaXMsaT10LmlkK1wiLXJlc3VsdHNcIixyPXQuaWQrXCItY29udGFpbmVyXCI7ZS5jYWxsKHRoaXMsdCxuKSxzLiRzZWFyY2guYXR0cihcImFyaWEtZGVzY3JpYmVkYnlcIixyKSx0Lm9uKFwib3BlblwiLGZ1bmN0aW9uKCl7cy4kc2VhcmNoLmF0dHIoXCJhcmlhLWNvbnRyb2xzXCIsaSkscy4kc2VhcmNoLnRyaWdnZXIoXCJmb2N1c1wiKX0pLHQub24oXCJjbG9zZVwiLGZ1bmN0aW9uKCl7cy4kc2VhcmNoLnZhbChcIlwiKSxzLnJlc2l6ZVNlYXJjaCgpLHMuJHNlYXJjaC5yZW1vdmVBdHRyKFwiYXJpYS1jb250cm9sc1wiKSxzLiRzZWFyY2gucmVtb3ZlQXR0cihcImFyaWEtYWN0aXZlZGVzY2VuZGFudFwiKSxzLiRzZWFyY2gudHJpZ2dlcihcImZvY3VzXCIpfSksdC5vbihcImVuYWJsZVwiLGZ1bmN0aW9uKCl7cy4kc2VhcmNoLnByb3AoXCJkaXNhYmxlZFwiLCExKSxzLl90cmFuc2ZlclRhYkluZGV4KCl9KSx0Lm9uKFwiZGlzYWJsZVwiLGZ1bmN0aW9uKCl7cy4kc2VhcmNoLnByb3AoXCJkaXNhYmxlZFwiLCEwKX0pLHQub24oXCJmb2N1c1wiLGZ1bmN0aW9uKGUpe3MuJHNlYXJjaC50cmlnZ2VyKFwiZm9jdXNcIil9KSx0Lm9uKFwicmVzdWx0czpmb2N1c1wiLGZ1bmN0aW9uKGUpe2UuZGF0YS5fcmVzdWx0SWQ/cy4kc2VhcmNoLmF0dHIoXCJhcmlhLWFjdGl2ZWRlc2NlbmRhbnRcIixlLmRhdGEuX3Jlc3VsdElkKTpzLiRzZWFyY2gucmVtb3ZlQXR0cihcImFyaWEtYWN0aXZlZGVzY2VuZGFudFwiKX0pLHRoaXMuJHNlbGVjdGlvbi5vbihcImZvY3VzaW5cIixcIi5zZWxlY3QyLXNlYXJjaC0taW5saW5lXCIsZnVuY3Rpb24oZSl7cy50cmlnZ2VyKFwiZm9jdXNcIixlKX0pLHRoaXMuJHNlbGVjdGlvbi5vbihcImZvY3Vzb3V0XCIsXCIuc2VsZWN0Mi1zZWFyY2gtLWlubGluZVwiLGZ1bmN0aW9uKGUpe3MuX2hhbmRsZUJsdXIoZSl9KSx0aGlzLiRzZWxlY3Rpb24ub24oXCJrZXlkb3duXCIsXCIuc2VsZWN0Mi1zZWFyY2gtLWlubGluZVwiLGZ1bmN0aW9uKGUpe3ZhciB0O2Uuc3RvcFByb3BhZ2F0aW9uKCkscy50cmlnZ2VyKFwia2V5cHJlc3NcIixlKSxzLl9rZXlVcFByZXZlbnRlZD1lLmlzRGVmYXVsdFByZXZlbnRlZCgpLGUud2hpY2ghPT1sLkJBQ0tTUEFDRXx8XCJcIiE9PXMuJHNlYXJjaC52YWwoKXx8MDwodD1zLiRzZWxlY3Rpb24uZmluZChcIi5zZWxlY3QyLXNlbGVjdGlvbl9fY2hvaWNlXCIpLmxhc3QoKSkubGVuZ3RoJiYodD1hLkdldERhdGEodFswXSxcImRhdGFcIikscy5zZWFyY2hSZW1vdmVDaG9pY2UodCksZS5wcmV2ZW50RGVmYXVsdCgpKX0pLHRoaXMuJHNlbGVjdGlvbi5vbihcImNsaWNrXCIsXCIuc2VsZWN0Mi1zZWFyY2gtLWlubGluZVwiLGZ1bmN0aW9uKGUpe3MuJHNlYXJjaC52YWwoKSYmZS5zdG9wUHJvcGFnYXRpb24oKX0pO3ZhciB0PWRvY3VtZW50LmRvY3VtZW50TW9kZSxvPXQmJnQ8PTExO3RoaXMuJHNlbGVjdGlvbi5vbihcImlucHV0LnNlYXJjaGNoZWNrXCIsXCIuc2VsZWN0Mi1zZWFyY2gtLWlubGluZVwiLGZ1bmN0aW9uKGUpe28/cy4kc2VsZWN0aW9uLm9mZihcImlucHV0LnNlYXJjaCBpbnB1dC5zZWFyY2hjaGVja1wiKTpzLiRzZWxlY3Rpb24ub2ZmKFwia2V5dXAuc2VhcmNoXCIpfSksdGhpcy4kc2VsZWN0aW9uLm9uKFwia2V5dXAuc2VhcmNoIGlucHV0LnNlYXJjaFwiLFwiLnNlbGVjdDItc2VhcmNoLS1pbmxpbmVcIixmdW5jdGlvbihlKXt2YXIgdDtvJiZcImlucHV0XCI9PT1lLnR5cGU/cy4kc2VsZWN0aW9uLm9mZihcImlucHV0LnNlYXJjaCBpbnB1dC5zZWFyY2hjaGVja1wiKToodD1lLndoaWNoKSE9bC5TSElGVCYmdCE9bC5DVFJMJiZ0IT1sLkFMVCYmdCE9bC5UQUImJnMuaGFuZGxlU2VhcmNoKGUpfSl9LGUucHJvdG90eXBlLl90cmFuc2ZlclRhYkluZGV4PWZ1bmN0aW9uKGUpe3RoaXMuJHNlYXJjaC5hdHRyKFwidGFiaW5kZXhcIix0aGlzLiRzZWxlY3Rpb24uYXR0cihcInRhYmluZGV4XCIpKSx0aGlzLiRzZWxlY3Rpb24uYXR0cihcInRhYmluZGV4XCIsXCItMVwiKX0sZS5wcm90b3R5cGUuY3JlYXRlUGxhY2Vob2xkZXI9ZnVuY3Rpb24oZSx0KXt0aGlzLiRzZWFyY2guYXR0cihcInBsYWNlaG9sZGVyXCIsdC50ZXh0KX0sZS5wcm90b3R5cGUudXBkYXRlPWZ1bmN0aW9uKGUsdCl7dmFyIG49dGhpcy4kc2VhcmNoWzBdPT1kb2N1bWVudC5hY3RpdmVFbGVtZW50O3RoaXMuJHNlYXJjaC5hdHRyKFwicGxhY2Vob2xkZXJcIixcIlwiKSxlLmNhbGwodGhpcyx0KSx0aGlzLnJlc2l6ZVNlYXJjaCgpLG4mJnRoaXMuJHNlYXJjaC50cmlnZ2VyKFwiZm9jdXNcIil9LGUucHJvdG90eXBlLmhhbmRsZVNlYXJjaD1mdW5jdGlvbigpe3ZhciBlO3RoaXMucmVzaXplU2VhcmNoKCksdGhpcy5fa2V5VXBQcmV2ZW50ZWR8fChlPXRoaXMuJHNlYXJjaC52YWwoKSx0aGlzLnRyaWdnZXIoXCJxdWVyeVwiLHt0ZXJtOmV9KSksdGhpcy5fa2V5VXBQcmV2ZW50ZWQ9ITF9LGUucHJvdG90eXBlLnNlYXJjaFJlbW92ZUNob2ljZT1mdW5jdGlvbihlLHQpe3RoaXMudHJpZ2dlcihcInVuc2VsZWN0XCIse2RhdGE6dH0pLHRoaXMuJHNlYXJjaC52YWwodC50ZXh0KSx0aGlzLmhhbmRsZVNlYXJjaCgpfSxlLnByb3RvdHlwZS5yZXNpemVTZWFyY2g9ZnVuY3Rpb24oKXt0aGlzLiRzZWFyY2guY3NzKFwid2lkdGhcIixcIjI1cHhcIik7dmFyIGU9XCIxMDAlXCI7XCJcIj09PXRoaXMuJHNlYXJjaC5hdHRyKFwicGxhY2Vob2xkZXJcIikmJihlPS43NSoodGhpcy4kc2VhcmNoLnZhbCgpLmxlbmd0aCsxKStcImVtXCIpLHRoaXMuJHNlYXJjaC5jc3MoXCJ3aWR0aFwiLGUpfSxlfSksdS5kZWZpbmUoXCJzZWxlY3QyL3NlbGVjdGlvbi9zZWxlY3Rpb25Dc3NcIixbXCIuLi91dGlsc1wiXSxmdW5jdGlvbihuKXtmdW5jdGlvbiBlKCl7fXJldHVybiBlLnByb3RvdHlwZS5yZW5kZXI9ZnVuY3Rpb24oZSl7dmFyIHQ9ZS5jYWxsKHRoaXMpLGU9dGhpcy5vcHRpb25zLmdldChcInNlbGVjdGlvbkNzc0NsYXNzXCIpfHxcIlwiO3JldHVybi0xIT09ZS5pbmRleE9mKFwiOmFsbDpcIikmJihlPWUucmVwbGFjZShcIjphbGw6XCIsXCJcIiksbi5jb3B5Tm9uSW50ZXJuYWxDc3NDbGFzc2VzKHRbMF0sdGhpcy4kZWxlbWVudFswXSkpLHQuYWRkQ2xhc3MoZSksdH0sZX0pLHUuZGVmaW5lKFwic2VsZWN0Mi9zZWxlY3Rpb24vZXZlbnRSZWxheVwiLFtcImpxdWVyeVwiXSxmdW5jdGlvbihvKXtmdW5jdGlvbiBlKCl7fXJldHVybiBlLnByb3RvdHlwZS5iaW5kPWZ1bmN0aW9uKGUsdCxuKXt2YXIgcz10aGlzLGk9W1wib3BlblwiLFwib3BlbmluZ1wiLFwiY2xvc2VcIixcImNsb3NpbmdcIixcInNlbGVjdFwiLFwic2VsZWN0aW5nXCIsXCJ1bnNlbGVjdFwiLFwidW5zZWxlY3RpbmdcIixcImNsZWFyXCIsXCJjbGVhcmluZ1wiXSxyPVtcIm9wZW5pbmdcIixcImNsb3NpbmdcIixcInNlbGVjdGluZ1wiLFwidW5zZWxlY3RpbmdcIixcImNsZWFyaW5nXCJdO2UuY2FsbCh0aGlzLHQsbiksdC5vbihcIipcIixmdW5jdGlvbihlLHQpe3ZhciBuOy0xIT09aS5pbmRleE9mKGUpJiYodD10fHx7fSxuPW8uRXZlbnQoXCJzZWxlY3QyOlwiK2Use3BhcmFtczp0fSkscy4kZWxlbWVudC50cmlnZ2VyKG4pLC0xIT09ci5pbmRleE9mKGUpJiYodC5wcmV2ZW50ZWQ9bi5pc0RlZmF1bHRQcmV2ZW50ZWQoKSkpfSl9LGV9KSx1LmRlZmluZShcInNlbGVjdDIvdHJhbnNsYXRpb25cIixbXCJqcXVlcnlcIixcInJlcXVpcmVcIl0sZnVuY3Rpb24odCxuKXtmdW5jdGlvbiBzKGUpe3RoaXMuZGljdD1lfHx7fX1yZXR1cm4gcy5wcm90b3R5cGUuYWxsPWZ1bmN0aW9uKCl7cmV0dXJuIHRoaXMuZGljdH0scy5wcm90b3R5cGUuZ2V0PWZ1bmN0aW9uKGUpe3JldHVybiB0aGlzLmRpY3RbZV19LHMucHJvdG90eXBlLmV4dGVuZD1mdW5jdGlvbihlKXt0aGlzLmRpY3Q9dC5leHRlbmQoe30sZS5hbGwoKSx0aGlzLmRpY3QpfSxzLl9jYWNoZT17fSxzLmxvYWRQYXRoPWZ1bmN0aW9uKGUpe3ZhciB0O3JldHVybiBlIGluIHMuX2NhY2hlfHwodD1uKGUpLHMuX2NhY2hlW2VdPXQpLG5ldyBzKHMuX2NhY2hlW2VdKX0sc30pLHUuZGVmaW5lKFwic2VsZWN0Mi9kaWFjcml0aWNzXCIsW10sZnVuY3Rpb24oKXtyZXR1cm57XCLikrZcIjpcIkFcIixcIu+8oVwiOlwiQVwiLFwiw4BcIjpcIkFcIixcIsOBXCI6XCJBXCIsXCLDglwiOlwiQVwiLFwi4bqmXCI6XCJBXCIsXCLhuqRcIjpcIkFcIixcIuG6qlwiOlwiQVwiLFwi4bqoXCI6XCJBXCIsXCLDg1wiOlwiQVwiLFwixIBcIjpcIkFcIixcIsSCXCI6XCJBXCIsXCLhurBcIjpcIkFcIixcIuG6rlwiOlwiQVwiLFwi4bq0XCI6XCJBXCIsXCLhurJcIjpcIkFcIixcIsimXCI6XCJBXCIsXCLHoFwiOlwiQVwiLFwiw4RcIjpcIkFcIixcIseeXCI6XCJBXCIsXCLhuqJcIjpcIkFcIixcIsOFXCI6XCJBXCIsXCLHulwiOlwiQVwiLFwix41cIjpcIkFcIixcIsiAXCI6XCJBXCIsXCLIglwiOlwiQVwiLFwi4bqgXCI6XCJBXCIsXCLhuqxcIjpcIkFcIixcIuG6tlwiOlwiQVwiLFwi4biAXCI6XCJBXCIsXCLEhFwiOlwiQVwiLFwiyLpcIjpcIkFcIixcIuKxr1wiOlwiQVwiLFwi6pyyXCI6XCJBQVwiLFwiw4ZcIjpcIkFFXCIsXCLHvFwiOlwiQUVcIixcIseiXCI6XCJBRVwiLFwi6py0XCI6XCJBT1wiLFwi6py2XCI6XCJBVVwiLFwi6py4XCI6XCJBVlwiLFwi6py6XCI6XCJBVlwiLFwi6py8XCI6XCJBWVwiLFwi4pK3XCI6XCJCXCIsXCLvvKJcIjpcIkJcIixcIuG4glwiOlwiQlwiLFwi4biEXCI6XCJCXCIsXCLhuIZcIjpcIkJcIixcIsmDXCI6XCJCXCIsXCLGglwiOlwiQlwiLFwixoFcIjpcIkJcIixcIuKSuFwiOlwiQ1wiLFwi77yjXCI6XCJDXCIsXCLEhlwiOlwiQ1wiLFwixIhcIjpcIkNcIixcIsSKXCI6XCJDXCIsXCLEjFwiOlwiQ1wiLFwiw4dcIjpcIkNcIixcIuG4iFwiOlwiQ1wiLFwixodcIjpcIkNcIixcIsi7XCI6XCJDXCIsXCLqnL5cIjpcIkNcIixcIuKSuVwiOlwiRFwiLFwi77ykXCI6XCJEXCIsXCLhuIpcIjpcIkRcIixcIsSOXCI6XCJEXCIsXCLhuIxcIjpcIkRcIixcIuG4kFwiOlwiRFwiLFwi4biSXCI6XCJEXCIsXCLhuI5cIjpcIkRcIixcIsSQXCI6XCJEXCIsXCLGi1wiOlwiRFwiLFwixopcIjpcIkRcIixcIsaJXCI6XCJEXCIsXCLqnblcIjpcIkRcIixcIsexXCI6XCJEWlwiLFwix4RcIjpcIkRaXCIsXCLHslwiOlwiRHpcIixcIseFXCI6XCJEelwiLFwi4pK6XCI6XCJFXCIsXCLvvKVcIjpcIkVcIixcIsOIXCI6XCJFXCIsXCLDiVwiOlwiRVwiLFwiw4pcIjpcIkVcIixcIuG7gFwiOlwiRVwiLFwi4bq+XCI6XCJFXCIsXCLhu4RcIjpcIkVcIixcIuG7glwiOlwiRVwiLFwi4bq8XCI6XCJFXCIsXCLEklwiOlwiRVwiLFwi4biUXCI6XCJFXCIsXCLhuJZcIjpcIkVcIixcIsSUXCI6XCJFXCIsXCLEllwiOlwiRVwiLFwiw4tcIjpcIkVcIixcIuG6ulwiOlwiRVwiLFwixJpcIjpcIkVcIixcIsiEXCI6XCJFXCIsXCLIhlwiOlwiRVwiLFwi4bq4XCI6XCJFXCIsXCLhu4ZcIjpcIkVcIixcIsioXCI6XCJFXCIsXCLhuJxcIjpcIkVcIixcIsSYXCI6XCJFXCIsXCLhuJhcIjpcIkVcIixcIuG4mlwiOlwiRVwiLFwixpBcIjpcIkVcIixcIsaOXCI6XCJFXCIsXCLikrtcIjpcIkZcIixcIu+8plwiOlwiRlwiLFwi4bieXCI6XCJGXCIsXCLGkVwiOlwiRlwiLFwi6p27XCI6XCJGXCIsXCLikrxcIjpcIkdcIixcIu+8p1wiOlwiR1wiLFwix7RcIjpcIkdcIixcIsScXCI6XCJHXCIsXCLhuKBcIjpcIkdcIixcIsSeXCI6XCJHXCIsXCLEoFwiOlwiR1wiLFwix6ZcIjpcIkdcIixcIsSiXCI6XCJHXCIsXCLHpFwiOlwiR1wiLFwixpNcIjpcIkdcIixcIuqeoFwiOlwiR1wiLFwi6p29XCI6XCJHXCIsXCLqnb5cIjpcIkdcIixcIuKSvVwiOlwiSFwiLFwi77yoXCI6XCJIXCIsXCLEpFwiOlwiSFwiLFwi4biiXCI6XCJIXCIsXCLhuKZcIjpcIkhcIixcIsieXCI6XCJIXCIsXCLhuKRcIjpcIkhcIixcIuG4qFwiOlwiSFwiLFwi4biqXCI6XCJIXCIsXCLEplwiOlwiSFwiLFwi4rGnXCI6XCJIXCIsXCLisbVcIjpcIkhcIixcIuqejVwiOlwiSFwiLFwi4pK+XCI6XCJJXCIsXCLvvKlcIjpcIklcIixcIsOMXCI6XCJJXCIsXCLDjVwiOlwiSVwiLFwiw45cIjpcIklcIixcIsSoXCI6XCJJXCIsXCLEqlwiOlwiSVwiLFwixKxcIjpcIklcIixcIsSwXCI6XCJJXCIsXCLDj1wiOlwiSVwiLFwi4biuXCI6XCJJXCIsXCLhu4hcIjpcIklcIixcIsePXCI6XCJJXCIsXCLIiFwiOlwiSVwiLFwiyIpcIjpcIklcIixcIuG7ilwiOlwiSVwiLFwixK5cIjpcIklcIixcIuG4rFwiOlwiSVwiLFwixpdcIjpcIklcIixcIuKSv1wiOlwiSlwiLFwi77yqXCI6XCJKXCIsXCLEtFwiOlwiSlwiLFwiyYhcIjpcIkpcIixcIuKTgFwiOlwiS1wiLFwi77yrXCI6XCJLXCIsXCLhuLBcIjpcIktcIixcIseoXCI6XCJLXCIsXCLhuLJcIjpcIktcIixcIsS2XCI6XCJLXCIsXCLhuLRcIjpcIktcIixcIsaYXCI6XCJLXCIsXCLisalcIjpcIktcIixcIuqdgFwiOlwiS1wiLFwi6p2CXCI6XCJLXCIsXCLqnYRcIjpcIktcIixcIuqeolwiOlwiS1wiLFwi4pOBXCI6XCJMXCIsXCLvvKxcIjpcIkxcIixcIsS/XCI6XCJMXCIsXCLEuVwiOlwiTFwiLFwixL1cIjpcIkxcIixcIuG4tlwiOlwiTFwiLFwi4bi4XCI6XCJMXCIsXCLEu1wiOlwiTFwiLFwi4bi8XCI6XCJMXCIsXCLhuLpcIjpcIkxcIixcIsWBXCI6XCJMXCIsXCLIvVwiOlwiTFwiLFwi4rGiXCI6XCJMXCIsXCLisaBcIjpcIkxcIixcIuqdiFwiOlwiTFwiLFwi6p2GXCI6XCJMXCIsXCLqnoBcIjpcIkxcIixcIseHXCI6XCJMSlwiLFwix4hcIjpcIkxqXCIsXCLik4JcIjpcIk1cIixcIu+8rVwiOlwiTVwiLFwi4bi+XCI6XCJNXCIsXCLhuYBcIjpcIk1cIixcIuG5glwiOlwiTVwiLFwi4rGuXCI6XCJNXCIsXCLGnFwiOlwiTVwiLFwi4pODXCI6XCJOXCIsXCLvvK5cIjpcIk5cIixcIse4XCI6XCJOXCIsXCLFg1wiOlwiTlwiLFwiw5FcIjpcIk5cIixcIuG5hFwiOlwiTlwiLFwixYdcIjpcIk5cIixcIuG5hlwiOlwiTlwiLFwixYVcIjpcIk5cIixcIuG5ilwiOlwiTlwiLFwi4bmIXCI6XCJOXCIsXCLIoFwiOlwiTlwiLFwixp1cIjpcIk5cIixcIuqekFwiOlwiTlwiLFwi6p6kXCI6XCJOXCIsXCLHilwiOlwiTkpcIixcIseLXCI6XCJOalwiLFwi4pOEXCI6XCJPXCIsXCLvvK9cIjpcIk9cIixcIsOSXCI6XCJPXCIsXCLDk1wiOlwiT1wiLFwiw5RcIjpcIk9cIixcIuG7klwiOlwiT1wiLFwi4buQXCI6XCJPXCIsXCLhu5ZcIjpcIk9cIixcIuG7lFwiOlwiT1wiLFwiw5VcIjpcIk9cIixcIuG5jFwiOlwiT1wiLFwiyKxcIjpcIk9cIixcIuG5jlwiOlwiT1wiLFwixYxcIjpcIk9cIixcIuG5kFwiOlwiT1wiLFwi4bmSXCI6XCJPXCIsXCLFjlwiOlwiT1wiLFwiyK5cIjpcIk9cIixcIsiwXCI6XCJPXCIsXCLDllwiOlwiT1wiLFwiyKpcIjpcIk9cIixcIuG7jlwiOlwiT1wiLFwixZBcIjpcIk9cIixcIseRXCI6XCJPXCIsXCLIjFwiOlwiT1wiLFwiyI5cIjpcIk9cIixcIsagXCI6XCJPXCIsXCLhu5xcIjpcIk9cIixcIuG7mlwiOlwiT1wiLFwi4bugXCI6XCJPXCIsXCLhu55cIjpcIk9cIixcIuG7olwiOlwiT1wiLFwi4buMXCI6XCJPXCIsXCLhu5hcIjpcIk9cIixcIseqXCI6XCJPXCIsXCLHrFwiOlwiT1wiLFwiw5hcIjpcIk9cIixcIse+XCI6XCJPXCIsXCLGhlwiOlwiT1wiLFwixp9cIjpcIk9cIixcIuqdilwiOlwiT1wiLFwi6p2MXCI6XCJPXCIsXCLFklwiOlwiT0VcIixcIsaiXCI6XCJPSVwiLFwi6p2OXCI6XCJPT1wiLFwiyKJcIjpcIk9VXCIsXCLik4VcIjpcIlBcIixcIu+8sFwiOlwiUFwiLFwi4bmUXCI6XCJQXCIsXCLhuZZcIjpcIlBcIixcIsakXCI6XCJQXCIsXCLisaNcIjpcIlBcIixcIuqdkFwiOlwiUFwiLFwi6p2SXCI6XCJQXCIsXCLqnZRcIjpcIlBcIixcIuKThlwiOlwiUVwiLFwi77yxXCI6XCJRXCIsXCLqnZZcIjpcIlFcIixcIuqdmFwiOlwiUVwiLFwiyYpcIjpcIlFcIixcIuKTh1wiOlwiUlwiLFwi77yyXCI6XCJSXCIsXCLFlFwiOlwiUlwiLFwi4bmYXCI6XCJSXCIsXCLFmFwiOlwiUlwiLFwiyJBcIjpcIlJcIixcIsiSXCI6XCJSXCIsXCLhuZpcIjpcIlJcIixcIuG5nFwiOlwiUlwiLFwixZZcIjpcIlJcIixcIuG5nlwiOlwiUlwiLFwiyYxcIjpcIlJcIixcIuKxpFwiOlwiUlwiLFwi6p2aXCI6XCJSXCIsXCLqnqZcIjpcIlJcIixcIuqeglwiOlwiUlwiLFwi4pOIXCI6XCJTXCIsXCLvvLNcIjpcIlNcIixcIuG6nlwiOlwiU1wiLFwixZpcIjpcIlNcIixcIuG5pFwiOlwiU1wiLFwixZxcIjpcIlNcIixcIuG5oFwiOlwiU1wiLFwixaBcIjpcIlNcIixcIuG5plwiOlwiU1wiLFwi4bmiXCI6XCJTXCIsXCLhuahcIjpcIlNcIixcIsiYXCI6XCJTXCIsXCLFnlwiOlwiU1wiLFwi4rG+XCI6XCJTXCIsXCLqnqhcIjpcIlNcIixcIuqehFwiOlwiU1wiLFwi4pOJXCI6XCJUXCIsXCLvvLRcIjpcIlRcIixcIuG5qlwiOlwiVFwiLFwixaRcIjpcIlRcIixcIuG5rFwiOlwiVFwiLFwiyJpcIjpcIlRcIixcIsWiXCI6XCJUXCIsXCLhubBcIjpcIlRcIixcIuG5rlwiOlwiVFwiLFwixaZcIjpcIlRcIixcIsasXCI6XCJUXCIsXCLGrlwiOlwiVFwiLFwiyL5cIjpcIlRcIixcIuqehlwiOlwiVFwiLFwi6pyoXCI6XCJUWlwiLFwi4pOKXCI6XCJVXCIsXCLvvLVcIjpcIlVcIixcIsOZXCI6XCJVXCIsXCLDmlwiOlwiVVwiLFwiw5tcIjpcIlVcIixcIsWoXCI6XCJVXCIsXCLhubhcIjpcIlVcIixcIsWqXCI6XCJVXCIsXCLhubpcIjpcIlVcIixcIsWsXCI6XCJVXCIsXCLDnFwiOlwiVVwiLFwix5tcIjpcIlVcIixcIseXXCI6XCJVXCIsXCLHlVwiOlwiVVwiLFwix5lcIjpcIlVcIixcIuG7plwiOlwiVVwiLFwixa5cIjpcIlVcIixcIsWwXCI6XCJVXCIsXCLHk1wiOlwiVVwiLFwiyJRcIjpcIlVcIixcIsiWXCI6XCJVXCIsXCLGr1wiOlwiVVwiLFwi4buqXCI6XCJVXCIsXCLhu6hcIjpcIlVcIixcIuG7rlwiOlwiVVwiLFwi4busXCI6XCJVXCIsXCLhu7BcIjpcIlVcIixcIuG7pFwiOlwiVVwiLFwi4bmyXCI6XCJVXCIsXCLFslwiOlwiVVwiLFwi4bm2XCI6XCJVXCIsXCLhubRcIjpcIlVcIixcIsmEXCI6XCJVXCIsXCLik4tcIjpcIlZcIixcIu+8tlwiOlwiVlwiLFwi4bm8XCI6XCJWXCIsXCLhub5cIjpcIlZcIixcIsayXCI6XCJWXCIsXCLqnZ5cIjpcIlZcIixcIsmFXCI6XCJWXCIsXCLqnaBcIjpcIlZZXCIsXCLik4xcIjpcIldcIixcIu+8t1wiOlwiV1wiLFwi4bqAXCI6XCJXXCIsXCLhuoJcIjpcIldcIixcIsW0XCI6XCJXXCIsXCLhuoZcIjpcIldcIixcIuG6hFwiOlwiV1wiLFwi4bqIXCI6XCJXXCIsXCLisbJcIjpcIldcIixcIuKTjVwiOlwiWFwiLFwi77y4XCI6XCJYXCIsXCLhuopcIjpcIlhcIixcIuG6jFwiOlwiWFwiLFwi4pOOXCI6XCJZXCIsXCLvvLlcIjpcIllcIixcIuG7slwiOlwiWVwiLFwiw51cIjpcIllcIixcIsW2XCI6XCJZXCIsXCLhu7hcIjpcIllcIixcIsiyXCI6XCJZXCIsXCLhuo5cIjpcIllcIixcIsW4XCI6XCJZXCIsXCLhu7ZcIjpcIllcIixcIuG7tFwiOlwiWVwiLFwixrNcIjpcIllcIixcIsmOXCI6XCJZXCIsXCLhu75cIjpcIllcIixcIuKTj1wiOlwiWlwiLFwi77y6XCI6XCJaXCIsXCLFuVwiOlwiWlwiLFwi4bqQXCI6XCJaXCIsXCLFu1wiOlwiWlwiLFwixb1cIjpcIlpcIixcIuG6klwiOlwiWlwiLFwi4bqUXCI6XCJaXCIsXCLGtVwiOlwiWlwiLFwiyKRcIjpcIlpcIixcIuKxv1wiOlwiWlwiLFwi4rGrXCI6XCJaXCIsXCLqnaJcIjpcIlpcIixcIuKTkFwiOlwiYVwiLFwi772BXCI6XCJhXCIsXCLhuppcIjpcImFcIixcIsOgXCI6XCJhXCIsXCLDoVwiOlwiYVwiLFwiw6JcIjpcImFcIixcIuG6p1wiOlwiYVwiLFwi4bqlXCI6XCJhXCIsXCLhuqtcIjpcImFcIixcIuG6qVwiOlwiYVwiLFwiw6NcIjpcImFcIixcIsSBXCI6XCJhXCIsXCLEg1wiOlwiYVwiLFwi4bqxXCI6XCJhXCIsXCLhuq9cIjpcImFcIixcIuG6tVwiOlwiYVwiLFwi4bqzXCI6XCJhXCIsXCLIp1wiOlwiYVwiLFwix6FcIjpcImFcIixcIsOkXCI6XCJhXCIsXCLHn1wiOlwiYVwiLFwi4bqjXCI6XCJhXCIsXCLDpVwiOlwiYVwiLFwix7tcIjpcImFcIixcIseOXCI6XCJhXCIsXCLIgVwiOlwiYVwiLFwiyINcIjpcImFcIixcIuG6oVwiOlwiYVwiLFwi4bqtXCI6XCJhXCIsXCLhurdcIjpcImFcIixcIuG4gVwiOlwiYVwiLFwixIVcIjpcImFcIixcIuKxpVwiOlwiYVwiLFwiyZBcIjpcImFcIixcIuqcs1wiOlwiYWFcIixcIsOmXCI6XCJhZVwiLFwix71cIjpcImFlXCIsXCLHo1wiOlwiYWVcIixcIuqctVwiOlwiYW9cIixcIuqct1wiOlwiYXVcIixcIuqcuVwiOlwiYXZcIixcIuqcu1wiOlwiYXZcIixcIuqcvVwiOlwiYXlcIixcIuKTkVwiOlwiYlwiLFwi772CXCI6XCJiXCIsXCLhuINcIjpcImJcIixcIuG4hVwiOlwiYlwiLFwi4biHXCI6XCJiXCIsXCLGgFwiOlwiYlwiLFwixoNcIjpcImJcIixcIsmTXCI6XCJiXCIsXCLik5JcIjpcImNcIixcIu+9g1wiOlwiY1wiLFwixIdcIjpcImNcIixcIsSJXCI6XCJjXCIsXCLEi1wiOlwiY1wiLFwixI1cIjpcImNcIixcIsOnXCI6XCJjXCIsXCLhuIlcIjpcImNcIixcIsaIXCI6XCJjXCIsXCLIvFwiOlwiY1wiLFwi6py/XCI6XCJjXCIsXCLihoRcIjpcImNcIixcIuKTk1wiOlwiZFwiLFwi772EXCI6XCJkXCIsXCLhuItcIjpcImRcIixcIsSPXCI6XCJkXCIsXCLhuI1cIjpcImRcIixcIuG4kVwiOlwiZFwiLFwi4biTXCI6XCJkXCIsXCLhuI9cIjpcImRcIixcIsSRXCI6XCJkXCIsXCLGjFwiOlwiZFwiLFwiyZZcIjpcImRcIixcIsmXXCI6XCJkXCIsXCLqnbpcIjpcImRcIixcIsezXCI6XCJkelwiLFwix4ZcIjpcImR6XCIsXCLik5RcIjpcImVcIixcIu+9hVwiOlwiZVwiLFwiw6hcIjpcImVcIixcIsOpXCI6XCJlXCIsXCLDqlwiOlwiZVwiLFwi4buBXCI6XCJlXCIsXCLhur9cIjpcImVcIixcIuG7hVwiOlwiZVwiLFwi4buDXCI6XCJlXCIsXCLhur1cIjpcImVcIixcIsSTXCI6XCJlXCIsXCLhuJVcIjpcImVcIixcIuG4l1wiOlwiZVwiLFwixJVcIjpcImVcIixcIsSXXCI6XCJlXCIsXCLDq1wiOlwiZVwiLFwi4bq7XCI6XCJlXCIsXCLEm1wiOlwiZVwiLFwiyIVcIjpcImVcIixcIsiHXCI6XCJlXCIsXCLhurlcIjpcImVcIixcIuG7h1wiOlwiZVwiLFwiyKlcIjpcImVcIixcIuG4nVwiOlwiZVwiLFwixJlcIjpcImVcIixcIuG4mVwiOlwiZVwiLFwi4bibXCI6XCJlXCIsXCLJh1wiOlwiZVwiLFwiyZtcIjpcImVcIixcIsedXCI6XCJlXCIsXCLik5VcIjpcImZcIixcIu+9hlwiOlwiZlwiLFwi4bifXCI6XCJmXCIsXCLGklwiOlwiZlwiLFwi6p28XCI6XCJmXCIsXCLik5ZcIjpcImdcIixcIu+9h1wiOlwiZ1wiLFwix7VcIjpcImdcIixcIsSdXCI6XCJnXCIsXCLhuKFcIjpcImdcIixcIsSfXCI6XCJnXCIsXCLEoVwiOlwiZ1wiLFwix6dcIjpcImdcIixcIsSjXCI6XCJnXCIsXCLHpVwiOlwiZ1wiLFwiyaBcIjpcImdcIixcIuqeoVwiOlwiZ1wiLFwi4bW5XCI6XCJnXCIsXCLqnb9cIjpcImdcIixcIuKTl1wiOlwiaFwiLFwi772IXCI6XCJoXCIsXCLEpVwiOlwiaFwiLFwi4bijXCI6XCJoXCIsXCLhuKdcIjpcImhcIixcIsifXCI6XCJoXCIsXCLhuKVcIjpcImhcIixcIuG4qVwiOlwiaFwiLFwi4birXCI6XCJoXCIsXCLhupZcIjpcImhcIixcIsSnXCI6XCJoXCIsXCLisahcIjpcImhcIixcIuKxtlwiOlwiaFwiLFwiyaVcIjpcImhcIixcIsaVXCI6XCJodlwiLFwi4pOYXCI6XCJpXCIsXCLvvYlcIjpcImlcIixcIsOsXCI6XCJpXCIsXCLDrVwiOlwiaVwiLFwiw65cIjpcImlcIixcIsSpXCI6XCJpXCIsXCLEq1wiOlwiaVwiLFwixK1cIjpcImlcIixcIsOvXCI6XCJpXCIsXCLhuK9cIjpcImlcIixcIuG7iVwiOlwiaVwiLFwix5BcIjpcImlcIixcIsiJXCI6XCJpXCIsXCLIi1wiOlwiaVwiLFwi4buLXCI6XCJpXCIsXCLEr1wiOlwiaVwiLFwi4bitXCI6XCJpXCIsXCLJqFwiOlwiaVwiLFwixLFcIjpcImlcIixcIuKTmVwiOlwialwiLFwi772KXCI6XCJqXCIsXCLEtVwiOlwialwiLFwix7BcIjpcImpcIixcIsmJXCI6XCJqXCIsXCLik5pcIjpcImtcIixcIu+9i1wiOlwia1wiLFwi4bixXCI6XCJrXCIsXCLHqVwiOlwia1wiLFwi4bizXCI6XCJrXCIsXCLEt1wiOlwia1wiLFwi4bi1XCI6XCJrXCIsXCLGmVwiOlwia1wiLFwi4rGqXCI6XCJrXCIsXCLqnYFcIjpcImtcIixcIuqdg1wiOlwia1wiLFwi6p2FXCI6XCJrXCIsXCLqnqNcIjpcImtcIixcIuKTm1wiOlwibFwiLFwi772MXCI6XCJsXCIsXCLFgFwiOlwibFwiLFwixLpcIjpcImxcIixcIsS+XCI6XCJsXCIsXCLhuLdcIjpcImxcIixcIuG4uVwiOlwibFwiLFwixLxcIjpcImxcIixcIuG4vVwiOlwibFwiLFwi4bi7XCI6XCJsXCIsXCLFv1wiOlwibFwiLFwixYJcIjpcImxcIixcIsaaXCI6XCJsXCIsXCLJq1wiOlwibFwiLFwi4rGhXCI6XCJsXCIsXCLqnYlcIjpcImxcIixcIuqegVwiOlwibFwiLFwi6p2HXCI6XCJsXCIsXCLHiVwiOlwibGpcIixcIuKTnFwiOlwibVwiLFwi772NXCI6XCJtXCIsXCLhuL9cIjpcIm1cIixcIuG5gVwiOlwibVwiLFwi4bmDXCI6XCJtXCIsXCLJsVwiOlwibVwiLFwiya9cIjpcIm1cIixcIuKTnVwiOlwiblwiLFwi772OXCI6XCJuXCIsXCLHuVwiOlwiblwiLFwixYRcIjpcIm5cIixcIsOxXCI6XCJuXCIsXCLhuYVcIjpcIm5cIixcIsWIXCI6XCJuXCIsXCLhuYdcIjpcIm5cIixcIsWGXCI6XCJuXCIsXCLhuYtcIjpcIm5cIixcIuG5iVwiOlwiblwiLFwixp5cIjpcIm5cIixcIsmyXCI6XCJuXCIsXCLFiVwiOlwiblwiLFwi6p6RXCI6XCJuXCIsXCLqnqVcIjpcIm5cIixcIseMXCI6XCJualwiLFwi4pOeXCI6XCJvXCIsXCLvvY9cIjpcIm9cIixcIsOyXCI6XCJvXCIsXCLDs1wiOlwib1wiLFwiw7RcIjpcIm9cIixcIuG7k1wiOlwib1wiLFwi4buRXCI6XCJvXCIsXCLhu5dcIjpcIm9cIixcIuG7lVwiOlwib1wiLFwiw7VcIjpcIm9cIixcIuG5jVwiOlwib1wiLFwiyK1cIjpcIm9cIixcIuG5j1wiOlwib1wiLFwixY1cIjpcIm9cIixcIuG5kVwiOlwib1wiLFwi4bmTXCI6XCJvXCIsXCLFj1wiOlwib1wiLFwiyK9cIjpcIm9cIixcIsixXCI6XCJvXCIsXCLDtlwiOlwib1wiLFwiyKtcIjpcIm9cIixcIuG7j1wiOlwib1wiLFwixZFcIjpcIm9cIixcIseSXCI6XCJvXCIsXCLIjVwiOlwib1wiLFwiyI9cIjpcIm9cIixcIsahXCI6XCJvXCIsXCLhu51cIjpcIm9cIixcIuG7m1wiOlwib1wiLFwi4buhXCI6XCJvXCIsXCLhu59cIjpcIm9cIixcIuG7o1wiOlwib1wiLFwi4buNXCI6XCJvXCIsXCLhu5lcIjpcIm9cIixcIserXCI6XCJvXCIsXCLHrVwiOlwib1wiLFwiw7hcIjpcIm9cIixcIse/XCI6XCJvXCIsXCLJlFwiOlwib1wiLFwi6p2LXCI6XCJvXCIsXCLqnY1cIjpcIm9cIixcIsm1XCI6XCJvXCIsXCLFk1wiOlwib2VcIixcIsajXCI6XCJvaVwiLFwiyKNcIjpcIm91XCIsXCLqnY9cIjpcIm9vXCIsXCLik59cIjpcInBcIixcIu+9kFwiOlwicFwiLFwi4bmVXCI6XCJwXCIsXCLhuZdcIjpcInBcIixcIsalXCI6XCJwXCIsXCLhtb1cIjpcInBcIixcIuqdkVwiOlwicFwiLFwi6p2TXCI6XCJwXCIsXCLqnZVcIjpcInBcIixcIuKToFwiOlwicVwiLFwi772RXCI6XCJxXCIsXCLJi1wiOlwicVwiLFwi6p2XXCI6XCJxXCIsXCLqnZlcIjpcInFcIixcIuKToVwiOlwiclwiLFwi772SXCI6XCJyXCIsXCLFlVwiOlwiclwiLFwi4bmZXCI6XCJyXCIsXCLFmVwiOlwiclwiLFwiyJFcIjpcInJcIixcIsiTXCI6XCJyXCIsXCLhuZtcIjpcInJcIixcIuG5nVwiOlwiclwiLFwixZdcIjpcInJcIixcIuG5n1wiOlwiclwiLFwiyY1cIjpcInJcIixcIsm9XCI6XCJyXCIsXCLqnZtcIjpcInJcIixcIuqep1wiOlwiclwiLFwi6p6DXCI6XCJyXCIsXCLik6JcIjpcInNcIixcIu+9k1wiOlwic1wiLFwiw59cIjpcInNcIixcIsWbXCI6XCJzXCIsXCLhuaVcIjpcInNcIixcIsWdXCI6XCJzXCIsXCLhuaFcIjpcInNcIixcIsWhXCI6XCJzXCIsXCLhuadcIjpcInNcIixcIuG5o1wiOlwic1wiLFwi4bmpXCI6XCJzXCIsXCLImVwiOlwic1wiLFwixZ9cIjpcInNcIixcIsi/XCI6XCJzXCIsXCLqnqlcIjpcInNcIixcIuqehVwiOlwic1wiLFwi4bqbXCI6XCJzXCIsXCLik6NcIjpcInRcIixcIu+9lFwiOlwidFwiLFwi4bmrXCI6XCJ0XCIsXCLhupdcIjpcInRcIixcIsWlXCI6XCJ0XCIsXCLhua1cIjpcInRcIixcIsibXCI6XCJ0XCIsXCLFo1wiOlwidFwiLFwi4bmxXCI6XCJ0XCIsXCLhua9cIjpcInRcIixcIsWnXCI6XCJ0XCIsXCLGrVwiOlwidFwiLFwiyohcIjpcInRcIixcIuKxplwiOlwidFwiLFwi6p6HXCI6XCJ0XCIsXCLqnKlcIjpcInR6XCIsXCLik6RcIjpcInVcIixcIu+9lVwiOlwidVwiLFwiw7lcIjpcInVcIixcIsO6XCI6XCJ1XCIsXCLDu1wiOlwidVwiLFwixalcIjpcInVcIixcIuG5uVwiOlwidVwiLFwixatcIjpcInVcIixcIuG5u1wiOlwidVwiLFwixa1cIjpcInVcIixcIsO8XCI6XCJ1XCIsXCLHnFwiOlwidVwiLFwix5hcIjpcInVcIixcIseWXCI6XCJ1XCIsXCLHmlwiOlwidVwiLFwi4bunXCI6XCJ1XCIsXCLFr1wiOlwidVwiLFwixbFcIjpcInVcIixcIseUXCI6XCJ1XCIsXCLIlVwiOlwidVwiLFwiyJdcIjpcInVcIixcIsawXCI6XCJ1XCIsXCLhu6tcIjpcInVcIixcIuG7qVwiOlwidVwiLFwi4buvXCI6XCJ1XCIsXCLhu61cIjpcInVcIixcIuG7sVwiOlwidVwiLFwi4bulXCI6XCJ1XCIsXCLhubNcIjpcInVcIixcIsWzXCI6XCJ1XCIsXCLhubdcIjpcInVcIixcIuG5tVwiOlwidVwiLFwiyolcIjpcInVcIixcIuKTpVwiOlwidlwiLFwi772WXCI6XCJ2XCIsXCLhub1cIjpcInZcIixcIuG5v1wiOlwidlwiLFwiyotcIjpcInZcIixcIuqdn1wiOlwidlwiLFwiyoxcIjpcInZcIixcIuqdoVwiOlwidnlcIixcIuKTplwiOlwid1wiLFwi772XXCI6XCJ3XCIsXCLhuoFcIjpcIndcIixcIuG6g1wiOlwid1wiLFwixbVcIjpcIndcIixcIuG6h1wiOlwid1wiLFwi4bqFXCI6XCJ3XCIsXCLhuphcIjpcIndcIixcIuG6iVwiOlwid1wiLFwi4rGzXCI6XCJ3XCIsXCLik6dcIjpcInhcIixcIu+9mFwiOlwieFwiLFwi4bqLXCI6XCJ4XCIsXCLhuo1cIjpcInhcIixcIuKTqFwiOlwieVwiLFwi772ZXCI6XCJ5XCIsXCLhu7NcIjpcInlcIixcIsO9XCI6XCJ5XCIsXCLFt1wiOlwieVwiLFwi4bu5XCI6XCJ5XCIsXCLIs1wiOlwieVwiLFwi4bqPXCI6XCJ5XCIsXCLDv1wiOlwieVwiLFwi4bu3XCI6XCJ5XCIsXCLhuplcIjpcInlcIixcIuG7tVwiOlwieVwiLFwixrRcIjpcInlcIixcIsmPXCI6XCJ5XCIsXCLhu79cIjpcInlcIixcIuKTqVwiOlwielwiLFwi772aXCI6XCJ6XCIsXCLFulwiOlwielwiLFwi4bqRXCI6XCJ6XCIsXCLFvFwiOlwielwiLFwixb5cIjpcInpcIixcIuG6k1wiOlwielwiLFwi4bqVXCI6XCJ6XCIsXCLGtlwiOlwielwiLFwiyKVcIjpcInpcIixcIsmAXCI6XCJ6XCIsXCLisaxcIjpcInpcIixcIuqdo1wiOlwielwiLFwizoZcIjpcIs6RXCIsXCLOiFwiOlwizpVcIixcIs6JXCI6XCLOl1wiLFwizopcIjpcIs6ZXCIsXCLOqlwiOlwizplcIixcIs6MXCI6XCLOn1wiLFwizo5cIjpcIs6lXCIsXCLOq1wiOlwizqVcIixcIs6PXCI6XCLOqVwiLFwizqxcIjpcIs6xXCIsXCLOrVwiOlwizrVcIixcIs6uXCI6XCLOt1wiLFwizq9cIjpcIs65XCIsXCLPilwiOlwizrlcIixcIs6QXCI6XCLOuVwiLFwiz4xcIjpcIs6/XCIsXCLPjVwiOlwiz4VcIixcIs+LXCI6XCLPhVwiLFwizrBcIjpcIs+FXCIsXCLPjlwiOlwiz4lcIixcIs+CXCI6XCLPg1wiLFwi4oCZXCI6XCInXCJ9fSksdS5kZWZpbmUoXCJzZWxlY3QyL2RhdGEvYmFzZVwiLFtcIi4uL3V0aWxzXCJdLGZ1bmN0aW9uKG4pe2Z1bmN0aW9uIHMoZSx0KXtzLl9fc3VwZXJfXy5jb25zdHJ1Y3Rvci5jYWxsKHRoaXMpfXJldHVybiBuLkV4dGVuZChzLG4uT2JzZXJ2YWJsZSkscy5wcm90b3R5cGUuY3VycmVudD1mdW5jdGlvbihlKXt0aHJvdyBuZXcgRXJyb3IoXCJUaGUgYGN1cnJlbnRgIG1ldGhvZCBtdXN0IGJlIGRlZmluZWQgaW4gY2hpbGQgY2xhc3Nlcy5cIil9LHMucHJvdG90eXBlLnF1ZXJ5PWZ1bmN0aW9uKGUsdCl7dGhyb3cgbmV3IEVycm9yKFwiVGhlIGBxdWVyeWAgbWV0aG9kIG11c3QgYmUgZGVmaW5lZCBpbiBjaGlsZCBjbGFzc2VzLlwiKX0scy5wcm90b3R5cGUuYmluZD1mdW5jdGlvbihlLHQpe30scy5wcm90b3R5cGUuZGVzdHJveT1mdW5jdGlvbigpe30scy5wcm90b3R5cGUuZ2VuZXJhdGVSZXN1bHRJZD1mdW5jdGlvbihlLHQpe2U9ZS5pZCtcIi1yZXN1bHQtXCI7cmV0dXJuIGUrPW4uZ2VuZXJhdGVDaGFycyg0KSxudWxsIT10LmlkP2UrPVwiLVwiK3QuaWQudG9TdHJpbmcoKTplKz1cIi1cIituLmdlbmVyYXRlQ2hhcnMoNCksZX0sc30pLHUuZGVmaW5lKFwic2VsZWN0Mi9kYXRhL3NlbGVjdFwiLFtcIi4vYmFzZVwiLFwiLi4vdXRpbHNcIixcImpxdWVyeVwiXSxmdW5jdGlvbihlLGEsbCl7ZnVuY3Rpb24gbihlLHQpe3RoaXMuJGVsZW1lbnQ9ZSx0aGlzLm9wdGlvbnM9dCxuLl9fc3VwZXJfXy5jb25zdHJ1Y3Rvci5jYWxsKHRoaXMpfXJldHVybiBhLkV4dGVuZChuLGUpLG4ucHJvdG90eXBlLmN1cnJlbnQ9ZnVuY3Rpb24oZSl7dmFyIHQ9dGhpcztlKEFycmF5LnByb3RvdHlwZS5tYXAuY2FsbCh0aGlzLiRlbGVtZW50WzBdLnF1ZXJ5U2VsZWN0b3JBbGwoXCI6Y2hlY2tlZFwiKSxmdW5jdGlvbihlKXtyZXR1cm4gdC5pdGVtKGwoZSkpfSkpfSxuLnByb3RvdHlwZS5zZWxlY3Q9ZnVuY3Rpb24oaSl7dmFyIGUscj10aGlzO2lmKGkuc2VsZWN0ZWQ9ITAsbnVsbCE9aS5lbGVtZW50JiZcIm9wdGlvblwiPT09aS5lbGVtZW50LnRhZ05hbWUudG9Mb3dlckNhc2UoKSlyZXR1cm4gaS5lbGVtZW50LnNlbGVjdGVkPSEwLHZvaWQgdGhpcy4kZWxlbWVudC50cmlnZ2VyKFwiaW5wdXRcIikudHJpZ2dlcihcImNoYW5nZVwiKTt0aGlzLiRlbGVtZW50LnByb3AoXCJtdWx0aXBsZVwiKT90aGlzLmN1cnJlbnQoZnVuY3Rpb24oZSl7dmFyIHQ9W107KGk9W2ldKS5wdXNoLmFwcGx5KGksZSk7Zm9yKHZhciBuPTA7bjxpLmxlbmd0aDtuKyspe3ZhciBzPWlbbl0uaWQ7LTE9PT10LmluZGV4T2YocykmJnQucHVzaChzKX1yLiRlbGVtZW50LnZhbCh0KSxyLiRlbGVtZW50LnRyaWdnZXIoXCJpbnB1dFwiKS50cmlnZ2VyKFwiY2hhbmdlXCIpfSk6KGU9aS5pZCx0aGlzLiRlbGVtZW50LnZhbChlKSx0aGlzLiRlbGVtZW50LnRyaWdnZXIoXCJpbnB1dFwiKS50cmlnZ2VyKFwiY2hhbmdlXCIpKX0sbi5wcm90b3R5cGUudW5zZWxlY3Q9ZnVuY3Rpb24oaSl7dmFyIHI9dGhpcztpZih0aGlzLiRlbGVtZW50LnByb3AoXCJtdWx0aXBsZVwiKSl7aWYoaS5zZWxlY3RlZD0hMSxudWxsIT1pLmVsZW1lbnQmJlwib3B0aW9uXCI9PT1pLmVsZW1lbnQudGFnTmFtZS50b0xvd2VyQ2FzZSgpKXJldHVybiBpLmVsZW1lbnQuc2VsZWN0ZWQ9ITEsdm9pZCB0aGlzLiRlbGVtZW50LnRyaWdnZXIoXCJpbnB1dFwiKS50cmlnZ2VyKFwiY2hhbmdlXCIpO3RoaXMuY3VycmVudChmdW5jdGlvbihlKXtmb3IodmFyIHQ9W10sbj0wO248ZS5sZW5ndGg7bisrKXt2YXIgcz1lW25dLmlkO3MhPT1pLmlkJiYtMT09PXQuaW5kZXhPZihzKSYmdC5wdXNoKHMpfXIuJGVsZW1lbnQudmFsKHQpLHIuJGVsZW1lbnQudHJpZ2dlcihcImlucHV0XCIpLnRyaWdnZXIoXCJjaGFuZ2VcIil9KX19LG4ucHJvdG90eXBlLmJpbmQ9ZnVuY3Rpb24oZSx0KXt2YXIgbj10aGlzOyh0aGlzLmNvbnRhaW5lcj1lKS5vbihcInNlbGVjdFwiLGZ1bmN0aW9uKGUpe24uc2VsZWN0KGUuZGF0YSl9KSxlLm9uKFwidW5zZWxlY3RcIixmdW5jdGlvbihlKXtuLnVuc2VsZWN0KGUuZGF0YSl9KX0sbi5wcm90b3R5cGUuZGVzdHJveT1mdW5jdGlvbigpe3RoaXMuJGVsZW1lbnQuZmluZChcIipcIikuZWFjaChmdW5jdGlvbigpe2EuUmVtb3ZlRGF0YSh0aGlzKX0pfSxuLnByb3RvdHlwZS5xdWVyeT1mdW5jdGlvbih0LGUpe3ZhciBuPVtdLHM9dGhpczt0aGlzLiRlbGVtZW50LmNoaWxkcmVuKCkuZWFjaChmdW5jdGlvbigpe3ZhciBlO1wib3B0aW9uXCIhPT10aGlzLnRhZ05hbWUudG9Mb3dlckNhc2UoKSYmXCJvcHRncm91cFwiIT09dGhpcy50YWdOYW1lLnRvTG93ZXJDYXNlKCl8fChlPWwodGhpcyksZT1zLml0ZW0oZSksbnVsbCE9PShlPXMubWF0Y2hlcyh0LGUpKSYmbi5wdXNoKGUpKX0pLGUoe3Jlc3VsdHM6bn0pfSxuLnByb3RvdHlwZS5hZGRPcHRpb25zPWZ1bmN0aW9uKGUpe3RoaXMuJGVsZW1lbnQuYXBwZW5kKGUpfSxuLnByb3RvdHlwZS5vcHRpb249ZnVuY3Rpb24oZSl7dmFyIHQ7ZS5jaGlsZHJlbj8odD1kb2N1bWVudC5jcmVhdGVFbGVtZW50KFwib3B0Z3JvdXBcIikpLmxhYmVsPWUudGV4dDp2b2lkIDAhPT0odD1kb2N1bWVudC5jcmVhdGVFbGVtZW50KFwib3B0aW9uXCIpKS50ZXh0Q29udGVudD90LnRleHRDb250ZW50PWUudGV4dDp0LmlubmVyVGV4dD1lLnRleHQsdm9pZCAwIT09ZS5pZCYmKHQudmFsdWU9ZS5pZCksZS5kaXNhYmxlZCYmKHQuZGlzYWJsZWQ9ITApLGUuc2VsZWN0ZWQmJih0LnNlbGVjdGVkPSEwKSxlLnRpdGxlJiYodC50aXRsZT1lLnRpdGxlKTtlPXRoaXMuX25vcm1hbGl6ZUl0ZW0oZSk7cmV0dXJuIGUuZWxlbWVudD10LGEuU3RvcmVEYXRhKHQsXCJkYXRhXCIsZSksbCh0KX0sbi5wcm90b3R5cGUuaXRlbT1mdW5jdGlvbihlKXt2YXIgdD17fTtpZihudWxsIT0odD1hLkdldERhdGEoZVswXSxcImRhdGFcIikpKXJldHVybiB0O3ZhciBuPWVbMF07aWYoXCJvcHRpb25cIj09PW4udGFnTmFtZS50b0xvd2VyQ2FzZSgpKXQ9e2lkOmUudmFsKCksdGV4dDplLnRleHQoKSxkaXNhYmxlZDplLnByb3AoXCJkaXNhYmxlZFwiKSxzZWxlY3RlZDplLnByb3AoXCJzZWxlY3RlZFwiKSx0aXRsZTplLnByb3AoXCJ0aXRsZVwiKX07ZWxzZSBpZihcIm9wdGdyb3VwXCI9PT1uLnRhZ05hbWUudG9Mb3dlckNhc2UoKSl7dD17dGV4dDplLnByb3AoXCJsYWJlbFwiKSxjaGlsZHJlbjpbXSx0aXRsZTplLnByb3AoXCJ0aXRsZVwiKX07Zm9yKHZhciBzPWUuY2hpbGRyZW4oXCJvcHRpb25cIiksaT1bXSxyPTA7cjxzLmxlbmd0aDtyKyspe3ZhciBvPWwoc1tyXSksbz10aGlzLml0ZW0obyk7aS5wdXNoKG8pfXQuY2hpbGRyZW49aX1yZXR1cm4odD10aGlzLl9ub3JtYWxpemVJdGVtKHQpKS5lbGVtZW50PWVbMF0sYS5TdG9yZURhdGEoZVswXSxcImRhdGFcIix0KSx0fSxuLnByb3RvdHlwZS5fbm9ybWFsaXplSXRlbT1mdW5jdGlvbihlKXtlIT09T2JqZWN0KGUpJiYoZT17aWQ6ZSx0ZXh0OmV9KTtyZXR1cm4gbnVsbCE9KGU9bC5leHRlbmQoe30se3RleHQ6XCJcIn0sZSkpLmlkJiYoZS5pZD1lLmlkLnRvU3RyaW5nKCkpLG51bGwhPWUudGV4dCYmKGUudGV4dD1lLnRleHQudG9TdHJpbmcoKSksbnVsbD09ZS5fcmVzdWx0SWQmJmUuaWQmJm51bGwhPXRoaXMuY29udGFpbmVyJiYoZS5fcmVzdWx0SWQ9dGhpcy5nZW5lcmF0ZVJlc3VsdElkKHRoaXMuY29udGFpbmVyLGUpKSxsLmV4dGVuZCh7fSx7c2VsZWN0ZWQ6ITEsZGlzYWJsZWQ6ITF9LGUpfSxuLnByb3RvdHlwZS5tYXRjaGVzPWZ1bmN0aW9uKGUsdCl7cmV0dXJuIHRoaXMub3B0aW9ucy5nZXQoXCJtYXRjaGVyXCIpKGUsdCl9LG59KSx1LmRlZmluZShcInNlbGVjdDIvZGF0YS9hcnJheVwiLFtcIi4vc2VsZWN0XCIsXCIuLi91dGlsc1wiLFwianF1ZXJ5XCJdLGZ1bmN0aW9uKGUsdCxjKXtmdW5jdGlvbiBzKGUsdCl7dGhpcy5fZGF0YVRvQ29udmVydD10LmdldChcImRhdGFcIil8fFtdLHMuX19zdXBlcl9fLmNvbnN0cnVjdG9yLmNhbGwodGhpcyxlLHQpfXJldHVybiB0LkV4dGVuZChzLGUpLHMucHJvdG90eXBlLmJpbmQ9ZnVuY3Rpb24oZSx0KXtzLl9fc3VwZXJfXy5iaW5kLmNhbGwodGhpcyxlLHQpLHRoaXMuYWRkT3B0aW9ucyh0aGlzLmNvbnZlcnRUb09wdGlvbnModGhpcy5fZGF0YVRvQ29udmVydCkpfSxzLnByb3RvdHlwZS5zZWxlY3Q9ZnVuY3Rpb24obil7dmFyIGU9dGhpcy4kZWxlbWVudC5maW5kKFwib3B0aW9uXCIpLmZpbHRlcihmdW5jdGlvbihlLHQpe3JldHVybiB0LnZhbHVlPT1uLmlkLnRvU3RyaW5nKCl9KTswPT09ZS5sZW5ndGgmJihlPXRoaXMub3B0aW9uKG4pLHRoaXMuYWRkT3B0aW9ucyhlKSkscy5fX3N1cGVyX18uc2VsZWN0LmNhbGwodGhpcyxuKX0scy5wcm90b3R5cGUuY29udmVydFRvT3B0aW9ucz1mdW5jdGlvbihlKXt2YXIgdD10aGlzLG49dGhpcy4kZWxlbWVudC5maW5kKFwib3B0aW9uXCIpLHM9bi5tYXAoZnVuY3Rpb24oKXtyZXR1cm4gdC5pdGVtKGModGhpcykpLmlkfSkuZ2V0KCksaT1bXTtmb3IodmFyIHI9MDtyPGUubGVuZ3RoO3IrKyl7dmFyIG8sYSxsPXRoaXMuX25vcm1hbGl6ZUl0ZW0oZVtyXSk7MDw9cy5pbmRleE9mKGwuaWQpPyhvPW4uZmlsdGVyKGZ1bmN0aW9uKGUpe3JldHVybiBmdW5jdGlvbigpe3JldHVybiBjKHRoaXMpLnZhbCgpPT1lLmlkfX0obCkpLGE9dGhpcy5pdGVtKG8pLGE9Yy5leHRlbmQoITAse30sbCxhKSxhPXRoaXMub3B0aW9uKGEpLG8ucmVwbGFjZVdpdGgoYSkpOihhPXRoaXMub3B0aW9uKGwpLGwuY2hpbGRyZW4mJihsPXRoaXMuY29udmVydFRvT3B0aW9ucyhsLmNoaWxkcmVuKSxhLmFwcGVuZChsKSksaS5wdXNoKGEpKX1yZXR1cm4gaX0sc30pLHUuZGVmaW5lKFwic2VsZWN0Mi9kYXRhL2FqYXhcIixbXCIuL2FycmF5XCIsXCIuLi91dGlsc1wiLFwianF1ZXJ5XCJdLGZ1bmN0aW9uKGUsdCxyKXtmdW5jdGlvbiBuKGUsdCl7dGhpcy5hamF4T3B0aW9ucz10aGlzLl9hcHBseURlZmF1bHRzKHQuZ2V0KFwiYWpheFwiKSksbnVsbCE9dGhpcy5hamF4T3B0aW9ucy5wcm9jZXNzUmVzdWx0cyYmKHRoaXMucHJvY2Vzc1Jlc3VsdHM9dGhpcy5hamF4T3B0aW9ucy5wcm9jZXNzUmVzdWx0cyksbi5fX3N1cGVyX18uY29uc3RydWN0b3IuY2FsbCh0aGlzLGUsdCl9cmV0dXJuIHQuRXh0ZW5kKG4sZSksbi5wcm90b3R5cGUuX2FwcGx5RGVmYXVsdHM9ZnVuY3Rpb24oZSl7dmFyIHQ9e2RhdGE6ZnVuY3Rpb24oZSl7cmV0dXJuIHIuZXh0ZW5kKHt9LGUse3E6ZS50ZXJtfSl9LHRyYW5zcG9ydDpmdW5jdGlvbihlLHQsbil7ZT1yLmFqYXgoZSk7cmV0dXJuIGUudGhlbih0KSxlLmZhaWwobiksZX19O3JldHVybiByLmV4dGVuZCh7fSx0LGUsITApfSxuLnByb3RvdHlwZS5wcm9jZXNzUmVzdWx0cz1mdW5jdGlvbihlKXtyZXR1cm4gZX0sbi5wcm90b3R5cGUucXVlcnk9ZnVuY3Rpb24odCxuKXt2YXIgcz10aGlzO251bGwhPXRoaXMuX3JlcXVlc3QmJihcImZ1bmN0aW9uXCI9PXR5cGVvZiB0aGlzLl9yZXF1ZXN0LmFib3J0JiZ0aGlzLl9yZXF1ZXN0LmFib3J0KCksdGhpcy5fcmVxdWVzdD1udWxsKTt2YXIgaT1yLmV4dGVuZCh7dHlwZTpcIkdFVFwifSx0aGlzLmFqYXhPcHRpb25zKTtmdW5jdGlvbiBlKCl7dmFyIGU9aS50cmFuc3BvcnQoaSxmdW5jdGlvbihlKXtlPXMucHJvY2Vzc1Jlc3VsdHMoZSx0KTtzLm9wdGlvbnMuZ2V0KFwiZGVidWdcIikmJndpbmRvdy5jb25zb2xlJiZjb25zb2xlLmVycm9yJiYoZSYmZS5yZXN1bHRzJiZBcnJheS5pc0FycmF5KGUucmVzdWx0cyl8fGNvbnNvbGUuZXJyb3IoXCJTZWxlY3QyOiBUaGUgQUpBWCByZXN1bHRzIGRpZCBub3QgcmV0dXJuIGFuIGFycmF5IGluIHRoZSBgcmVzdWx0c2Aga2V5IG9mIHRoZSByZXNwb25zZS5cIikpLG4oZSl9LGZ1bmN0aW9uKCl7XCJzdGF0dXNcImluIGUmJigwPT09ZS5zdGF0dXN8fFwiMFwiPT09ZS5zdGF0dXMpfHxzLnRyaWdnZXIoXCJyZXN1bHRzOm1lc3NhZ2VcIix7bWVzc2FnZTpcImVycm9yTG9hZGluZ1wifSl9KTtzLl9yZXF1ZXN0PWV9XCJmdW5jdGlvblwiPT10eXBlb2YgaS51cmwmJihpLnVybD1pLnVybC5jYWxsKHRoaXMuJGVsZW1lbnQsdCkpLFwiZnVuY3Rpb25cIj09dHlwZW9mIGkuZGF0YSYmKGkuZGF0YT1pLmRhdGEuY2FsbCh0aGlzLiRlbGVtZW50LHQpKSx0aGlzLmFqYXhPcHRpb25zLmRlbGF5JiZudWxsIT10LnRlcm0/KHRoaXMuX3F1ZXJ5VGltZW91dCYmd2luZG93LmNsZWFyVGltZW91dCh0aGlzLl9xdWVyeVRpbWVvdXQpLHRoaXMuX3F1ZXJ5VGltZW91dD13aW5kb3cuc2V0VGltZW91dChlLHRoaXMuYWpheE9wdGlvbnMuZGVsYXkpKTplKCl9LG59KSx1LmRlZmluZShcInNlbGVjdDIvZGF0YS90YWdzXCIsW1wianF1ZXJ5XCJdLGZ1bmN0aW9uKHQpe2Z1bmN0aW9uIGUoZSx0LG4pe3ZhciBzPW4uZ2V0KFwidGFnc1wiKSxpPW4uZ2V0KFwiY3JlYXRlVGFnXCIpO3ZvaWQgMCE9PWkmJih0aGlzLmNyZWF0ZVRhZz1pKTtpPW4uZ2V0KFwiaW5zZXJ0VGFnXCIpO2lmKHZvaWQgMCE9PWkmJih0aGlzLmluc2VydFRhZz1pKSxlLmNhbGwodGhpcyx0LG4pLEFycmF5LmlzQXJyYXkocykpZm9yKHZhciByPTA7cjxzLmxlbmd0aDtyKyspe3ZhciBvPXNbcl0sbz10aGlzLl9ub3JtYWxpemVJdGVtKG8pLG89dGhpcy5vcHRpb24obyk7dGhpcy4kZWxlbWVudC5hcHBlbmQobyl9fXJldHVybiBlLnByb3RvdHlwZS5xdWVyeT1mdW5jdGlvbihlLGMsdSl7dmFyIGQ9dGhpczt0aGlzLl9yZW1vdmVPbGRUYWdzKCksbnVsbCE9Yy50ZXJtJiZudWxsPT1jLnBhZ2U/ZS5jYWxsKHRoaXMsYyxmdW5jdGlvbiBlKHQsbil7Zm9yKHZhciBzPXQucmVzdWx0cyxpPTA7aTxzLmxlbmd0aDtpKyspe3ZhciByPXNbaV0sbz1udWxsIT1yLmNoaWxkcmVuJiYhZSh7cmVzdWx0czpyLmNoaWxkcmVufSwhMCk7aWYoKHIudGV4dHx8XCJcIikudG9VcHBlckNhc2UoKT09PShjLnRlcm18fFwiXCIpLnRvVXBwZXJDYXNlKCl8fG8pcmV0dXJuIW4mJih0LmRhdGE9cyx2b2lkIHUodCkpfWlmKG4pcmV0dXJuITA7dmFyIGEsbD1kLmNyZWF0ZVRhZyhjKTtudWxsIT1sJiYoKGE9ZC5vcHRpb24obCkpLmF0dHIoXCJkYXRhLXNlbGVjdDItdGFnXCIsXCJ0cnVlXCIpLGQuYWRkT3B0aW9ucyhbYV0pLGQuaW5zZXJ0VGFnKHMsbCkpLHQucmVzdWx0cz1zLHUodCl9KTplLmNhbGwodGhpcyxjLHUpfSxlLnByb3RvdHlwZS5jcmVhdGVUYWc9ZnVuY3Rpb24oZSx0KXtpZihudWxsPT10LnRlcm0pcmV0dXJuIG51bGw7dD10LnRlcm0udHJpbSgpO3JldHVyblwiXCI9PT10P251bGw6e2lkOnQsdGV4dDp0fX0sZS5wcm90b3R5cGUuaW5zZXJ0VGFnPWZ1bmN0aW9uKGUsdCxuKXt0LnVuc2hpZnQobil9LGUucHJvdG90eXBlLl9yZW1vdmVPbGRUYWdzPWZ1bmN0aW9uKGUpe3RoaXMuJGVsZW1lbnQuZmluZChcIm9wdGlvbltkYXRhLXNlbGVjdDItdGFnXVwiKS5lYWNoKGZ1bmN0aW9uKCl7dGhpcy5zZWxlY3RlZHx8dCh0aGlzKS5yZW1vdmUoKX0pfSxlfSksdS5kZWZpbmUoXCJzZWxlY3QyL2RhdGEvdG9rZW5pemVyXCIsW1wianF1ZXJ5XCJdLGZ1bmN0aW9uKGMpe2Z1bmN0aW9uIGUoZSx0LG4pe3ZhciBzPW4uZ2V0KFwidG9rZW5pemVyXCIpO3ZvaWQgMCE9PXMmJih0aGlzLnRva2VuaXplcj1zKSxlLmNhbGwodGhpcyx0LG4pfXJldHVybiBlLnByb3RvdHlwZS5iaW5kPWZ1bmN0aW9uKGUsdCxuKXtlLmNhbGwodGhpcyx0LG4pLHRoaXMuJHNlYXJjaD10LmRyb3Bkb3duLiRzZWFyY2h8fHQuc2VsZWN0aW9uLiRzZWFyY2h8fG4uZmluZChcIi5zZWxlY3QyLXNlYXJjaF9fZmllbGRcIil9LGUucHJvdG90eXBlLnF1ZXJ5PWZ1bmN0aW9uKGUsdCxuKXt2YXIgcz10aGlzO3QudGVybT10LnRlcm18fFwiXCI7dmFyIGk9dGhpcy50b2tlbml6ZXIodCx0aGlzLm9wdGlvbnMsZnVuY3Rpb24oZSl7dmFyIHQsbj1zLl9ub3JtYWxpemVJdGVtKGUpO3MuJGVsZW1lbnQuZmluZChcIm9wdGlvblwiKS5maWx0ZXIoZnVuY3Rpb24oKXtyZXR1cm4gYyh0aGlzKS52YWwoKT09PW4uaWR9KS5sZW5ndGh8fCgodD1zLm9wdGlvbihuKSkuYXR0cihcImRhdGEtc2VsZWN0Mi10YWdcIiwhMCkscy5fcmVtb3ZlT2xkVGFncygpLHMuYWRkT3B0aW9ucyhbdF0pKSx0PW4scy50cmlnZ2VyKFwic2VsZWN0XCIse2RhdGE6dH0pfSk7aS50ZXJtIT09dC50ZXJtJiYodGhpcy4kc2VhcmNoLmxlbmd0aCYmKHRoaXMuJHNlYXJjaC52YWwoaS50ZXJtKSx0aGlzLiRzZWFyY2gudHJpZ2dlcihcImZvY3VzXCIpKSx0LnRlcm09aS50ZXJtKSxlLmNhbGwodGhpcyx0LG4pfSxlLnByb3RvdHlwZS50b2tlbml6ZXI9ZnVuY3Rpb24oZSx0LG4scyl7Zm9yKHZhciBpPW4uZ2V0KFwidG9rZW5TZXBhcmF0b3JzXCIpfHxbXSxyPXQudGVybSxvPTAsYT10aGlzLmNyZWF0ZVRhZ3x8ZnVuY3Rpb24oZSl7cmV0dXJue2lkOmUudGVybSx0ZXh0OmUudGVybX19O288ci5sZW5ndGg7KXt2YXIgbD1yW29dOy0xIT09aS5pbmRleE9mKGwpPyhsPXIuc3Vic3RyKDAsbyksbnVsbCE9KGw9YShjLmV4dGVuZCh7fSx0LHt0ZXJtOmx9KSkpPyhzKGwpLHI9ci5zdWJzdHIobysxKXx8XCJcIixvPTApOm8rKyk6bysrfXJldHVybnt0ZXJtOnJ9fSxlfSksdS5kZWZpbmUoXCJzZWxlY3QyL2RhdGEvbWluaW11bUlucHV0TGVuZ3RoXCIsW10sZnVuY3Rpb24oKXtmdW5jdGlvbiBlKGUsdCxuKXt0aGlzLm1pbmltdW1JbnB1dExlbmd0aD1uLmdldChcIm1pbmltdW1JbnB1dExlbmd0aFwiKSxlLmNhbGwodGhpcyx0LG4pfXJldHVybiBlLnByb3RvdHlwZS5xdWVyeT1mdW5jdGlvbihlLHQsbil7dC50ZXJtPXQudGVybXx8XCJcIix0LnRlcm0ubGVuZ3RoPHRoaXMubWluaW11bUlucHV0TGVuZ3RoP3RoaXMudHJpZ2dlcihcInJlc3VsdHM6bWVzc2FnZVwiLHttZXNzYWdlOlwiaW5wdXRUb29TaG9ydFwiLGFyZ3M6e21pbmltdW06dGhpcy5taW5pbXVtSW5wdXRMZW5ndGgsaW5wdXQ6dC50ZXJtLHBhcmFtczp0fX0pOmUuY2FsbCh0aGlzLHQsbil9LGV9KSx1LmRlZmluZShcInNlbGVjdDIvZGF0YS9tYXhpbXVtSW5wdXRMZW5ndGhcIixbXSxmdW5jdGlvbigpe2Z1bmN0aW9uIGUoZSx0LG4pe3RoaXMubWF4aW11bUlucHV0TGVuZ3RoPW4uZ2V0KFwibWF4aW11bUlucHV0TGVuZ3RoXCIpLGUuY2FsbCh0aGlzLHQsbil9cmV0dXJuIGUucHJvdG90eXBlLnF1ZXJ5PWZ1bmN0aW9uKGUsdCxuKXt0LnRlcm09dC50ZXJtfHxcIlwiLDA8dGhpcy5tYXhpbXVtSW5wdXRMZW5ndGgmJnQudGVybS5sZW5ndGg+dGhpcy5tYXhpbXVtSW5wdXRMZW5ndGg/dGhpcy50cmlnZ2VyKFwicmVzdWx0czptZXNzYWdlXCIse21lc3NhZ2U6XCJpbnB1dFRvb0xvbmdcIixhcmdzOnttYXhpbXVtOnRoaXMubWF4aW11bUlucHV0TGVuZ3RoLGlucHV0OnQudGVybSxwYXJhbXM6dH19KTplLmNhbGwodGhpcyx0LG4pfSxlfSksdS5kZWZpbmUoXCJzZWxlY3QyL2RhdGEvbWF4aW11bVNlbGVjdGlvbkxlbmd0aFwiLFtdLGZ1bmN0aW9uKCl7ZnVuY3Rpb24gZShlLHQsbil7dGhpcy5tYXhpbXVtU2VsZWN0aW9uTGVuZ3RoPW4uZ2V0KFwibWF4aW11bVNlbGVjdGlvbkxlbmd0aFwiKSxlLmNhbGwodGhpcyx0LG4pfXJldHVybiBlLnByb3RvdHlwZS5iaW5kPWZ1bmN0aW9uKGUsdCxuKXt2YXIgcz10aGlzO2UuY2FsbCh0aGlzLHQsbiksdC5vbihcInNlbGVjdFwiLGZ1bmN0aW9uKCl7cy5fY2hlY2tJZk1heGltdW1TZWxlY3RlZCgpfSl9LGUucHJvdG90eXBlLnF1ZXJ5PWZ1bmN0aW9uKGUsdCxuKXt2YXIgcz10aGlzO3RoaXMuX2NoZWNrSWZNYXhpbXVtU2VsZWN0ZWQoZnVuY3Rpb24oKXtlLmNhbGwocyx0LG4pfSl9LGUucHJvdG90eXBlLl9jaGVja0lmTWF4aW11bVNlbGVjdGVkPWZ1bmN0aW9uKGUsdCl7dmFyIG49dGhpczt0aGlzLmN1cnJlbnQoZnVuY3Rpb24oZSl7ZT1udWxsIT1lP2UubGVuZ3RoOjA7MDxuLm1heGltdW1TZWxlY3Rpb25MZW5ndGgmJmU+PW4ubWF4aW11bVNlbGVjdGlvbkxlbmd0aD9uLnRyaWdnZXIoXCJyZXN1bHRzOm1lc3NhZ2VcIix7bWVzc2FnZTpcIm1heGltdW1TZWxlY3RlZFwiLGFyZ3M6e21heGltdW06bi5tYXhpbXVtU2VsZWN0aW9uTGVuZ3RofX0pOnQmJnQoKX0pfSxlfSksdS5kZWZpbmUoXCJzZWxlY3QyL2Ryb3Bkb3duXCIsW1wianF1ZXJ5XCIsXCIuL3V0aWxzXCJdLGZ1bmN0aW9uKHQsZSl7ZnVuY3Rpb24gbihlLHQpe3RoaXMuJGVsZW1lbnQ9ZSx0aGlzLm9wdGlvbnM9dCxuLl9fc3VwZXJfXy5jb25zdHJ1Y3Rvci5jYWxsKHRoaXMpfXJldHVybiBlLkV4dGVuZChuLGUuT2JzZXJ2YWJsZSksbi5wcm90b3R5cGUucmVuZGVyPWZ1bmN0aW9uKCl7dmFyIGU9dCgnPHNwYW4gY2xhc3M9XCJzZWxlY3QyLWRyb3Bkb3duXCI+PHNwYW4gY2xhc3M9XCJzZWxlY3QyLXJlc3VsdHNcIj48L3NwYW4+PC9zcGFuPicpO3JldHVybiBlLmF0dHIoXCJkaXJcIix0aGlzLm9wdGlvbnMuZ2V0KFwiZGlyXCIpKSx0aGlzLiRkcm9wZG93bj1lfSxuLnByb3RvdHlwZS5iaW5kPWZ1bmN0aW9uKCl7fSxuLnByb3RvdHlwZS5wb3NpdGlvbj1mdW5jdGlvbihlLHQpe30sbi5wcm90b3R5cGUuZGVzdHJveT1mdW5jdGlvbigpe3RoaXMuJGRyb3Bkb3duLnJlbW92ZSgpfSxufSksdS5kZWZpbmUoXCJzZWxlY3QyL2Ryb3Bkb3duL3NlYXJjaFwiLFtcImpxdWVyeVwiXSxmdW5jdGlvbihyKXtmdW5jdGlvbiBlKCl7fXJldHVybiBlLnByb3RvdHlwZS5yZW5kZXI9ZnVuY3Rpb24oZSl7dmFyIHQ9ZS5jYWxsKHRoaXMpLG49dGhpcy5vcHRpb25zLmdldChcInRyYW5zbGF0aW9uc1wiKS5nZXQoXCJzZWFyY2hcIiksZT1yKCc8c3BhbiBjbGFzcz1cInNlbGVjdDItc2VhcmNoIHNlbGVjdDItc2VhcmNoLS1kcm9wZG93blwiPjxpbnB1dCBjbGFzcz1cInNlbGVjdDItc2VhcmNoX19maWVsZFwiIHR5cGU9XCJzZWFyY2hcIiB0YWJpbmRleD1cIi0xXCIgYXV0b2NvcnJlY3Q9XCJvZmZcIiBhdXRvY2FwaXRhbGl6ZT1cIm5vbmVcIiBzcGVsbGNoZWNrPVwiZmFsc2VcIiByb2xlPVwic2VhcmNoYm94XCIgYXJpYS1hdXRvY29tcGxldGU9XCJsaXN0XCIgLz48L3NwYW4+Jyk7cmV0dXJuIHRoaXMuJHNlYXJjaENvbnRhaW5lcj1lLHRoaXMuJHNlYXJjaD1lLmZpbmQoXCJpbnB1dFwiKSx0aGlzLiRzZWFyY2gucHJvcChcImF1dG9jb21wbGV0ZVwiLHRoaXMub3B0aW9ucy5nZXQoXCJhdXRvY29tcGxldGVcIikpLHRoaXMuJHNlYXJjaC5hdHRyKFwiYXJpYS1sYWJlbFwiLG4oKSksdC5wcmVwZW5kKGUpLHR9LGUucHJvdG90eXBlLmJpbmQ9ZnVuY3Rpb24oZSx0LG4pe3ZhciBzPXRoaXMsaT10LmlkK1wiLXJlc3VsdHNcIjtlLmNhbGwodGhpcyx0LG4pLHRoaXMuJHNlYXJjaC5vbihcImtleWRvd25cIixmdW5jdGlvbihlKXtzLnRyaWdnZXIoXCJrZXlwcmVzc1wiLGUpLHMuX2tleVVwUHJldmVudGVkPWUuaXNEZWZhdWx0UHJldmVudGVkKCl9KSx0aGlzLiRzZWFyY2gub24oXCJpbnB1dFwiLGZ1bmN0aW9uKGUpe3IodGhpcykub2ZmKFwia2V5dXBcIil9KSx0aGlzLiRzZWFyY2gub24oXCJrZXl1cCBpbnB1dFwiLGZ1bmN0aW9uKGUpe3MuaGFuZGxlU2VhcmNoKGUpfSksdC5vbihcIm9wZW5cIixmdW5jdGlvbigpe3MuJHNlYXJjaC5hdHRyKFwidGFiaW5kZXhcIiwwKSxzLiRzZWFyY2guYXR0cihcImFyaWEtY29udHJvbHNcIixpKSxzLiRzZWFyY2gudHJpZ2dlcihcImZvY3VzXCIpLHdpbmRvdy5zZXRUaW1lb3V0KGZ1bmN0aW9uKCl7cy4kc2VhcmNoLnRyaWdnZXIoXCJmb2N1c1wiKX0sMCl9KSx0Lm9uKFwiY2xvc2VcIixmdW5jdGlvbigpe3MuJHNlYXJjaC5hdHRyKFwidGFiaW5kZXhcIiwtMSkscy4kc2VhcmNoLnJlbW92ZUF0dHIoXCJhcmlhLWNvbnRyb2xzXCIpLHMuJHNlYXJjaC5yZW1vdmVBdHRyKFwiYXJpYS1hY3RpdmVkZXNjZW5kYW50XCIpLHMuJHNlYXJjaC52YWwoXCJcIikscy4kc2VhcmNoLnRyaWdnZXIoXCJibHVyXCIpfSksdC5vbihcImZvY3VzXCIsZnVuY3Rpb24oKXt0LmlzT3BlbigpfHxzLiRzZWFyY2gudHJpZ2dlcihcImZvY3VzXCIpfSksdC5vbihcInJlc3VsdHM6YWxsXCIsZnVuY3Rpb24oZSl7bnVsbCE9ZS5xdWVyeS50ZXJtJiZcIlwiIT09ZS5xdWVyeS50ZXJtfHwocy5zaG93U2VhcmNoKGUpP3MuJHNlYXJjaENvbnRhaW5lclswXS5jbGFzc0xpc3QucmVtb3ZlKFwic2VsZWN0Mi1zZWFyY2gtLWhpZGVcIik6cy4kc2VhcmNoQ29udGFpbmVyWzBdLmNsYXNzTGlzdC5hZGQoXCJzZWxlY3QyLXNlYXJjaC0taGlkZVwiKSl9KSx0Lm9uKFwicmVzdWx0czpmb2N1c1wiLGZ1bmN0aW9uKGUpe2UuZGF0YS5fcmVzdWx0SWQ/cy4kc2VhcmNoLmF0dHIoXCJhcmlhLWFjdGl2ZWRlc2NlbmRhbnRcIixlLmRhdGEuX3Jlc3VsdElkKTpzLiRzZWFyY2gucmVtb3ZlQXR0cihcImFyaWEtYWN0aXZlZGVzY2VuZGFudFwiKX0pfSxlLnByb3RvdHlwZS5oYW5kbGVTZWFyY2g9ZnVuY3Rpb24oZSl7dmFyIHQ7dGhpcy5fa2V5VXBQcmV2ZW50ZWR8fCh0PXRoaXMuJHNlYXJjaC52YWwoKSx0aGlzLnRyaWdnZXIoXCJxdWVyeVwiLHt0ZXJtOnR9KSksdGhpcy5fa2V5VXBQcmV2ZW50ZWQ9ITF9LGUucHJvdG90eXBlLnNob3dTZWFyY2g9ZnVuY3Rpb24oZSx0KXtyZXR1cm4hMH0sZX0pLHUuZGVmaW5lKFwic2VsZWN0Mi9kcm9wZG93bi9oaWRlUGxhY2Vob2xkZXJcIixbXSxmdW5jdGlvbigpe2Z1bmN0aW9uIGUoZSx0LG4scyl7dGhpcy5wbGFjZWhvbGRlcj10aGlzLm5vcm1hbGl6ZVBsYWNlaG9sZGVyKG4uZ2V0KFwicGxhY2Vob2xkZXJcIikpLGUuY2FsbCh0aGlzLHQsbixzKX1yZXR1cm4gZS5wcm90b3R5cGUuYXBwZW5kPWZ1bmN0aW9uKGUsdCl7dC5yZXN1bHRzPXRoaXMucmVtb3ZlUGxhY2Vob2xkZXIodC5yZXN1bHRzKSxlLmNhbGwodGhpcyx0KX0sZS5wcm90b3R5cGUubm9ybWFsaXplUGxhY2Vob2xkZXI9ZnVuY3Rpb24oZSx0KXtyZXR1cm4gdD1cInN0cmluZ1wiPT10eXBlb2YgdD97aWQ6XCJcIix0ZXh0OnR9OnR9LGUucHJvdG90eXBlLnJlbW92ZVBsYWNlaG9sZGVyPWZ1bmN0aW9uKGUsdCl7Zm9yKHZhciBuPXQuc2xpY2UoMCkscz10Lmxlbmd0aC0xOzA8PXM7cy0tKXt2YXIgaT10W3NdO3RoaXMucGxhY2Vob2xkZXIuaWQ9PT1pLmlkJiZuLnNwbGljZShzLDEpfXJldHVybiBufSxlfSksdS5kZWZpbmUoXCJzZWxlY3QyL2Ryb3Bkb3duL2luZmluaXRlU2Nyb2xsXCIsW1wianF1ZXJ5XCJdLGZ1bmN0aW9uKG4pe2Z1bmN0aW9uIGUoZSx0LG4scyl7dGhpcy5sYXN0UGFyYW1zPXt9LGUuY2FsbCh0aGlzLHQsbixzKSx0aGlzLiRsb2FkaW5nTW9yZT10aGlzLmNyZWF0ZUxvYWRpbmdNb3JlKCksdGhpcy5sb2FkaW5nPSExfXJldHVybiBlLnByb3RvdHlwZS5hcHBlbmQ9ZnVuY3Rpb24oZSx0KXt0aGlzLiRsb2FkaW5nTW9yZS5yZW1vdmUoKSx0aGlzLmxvYWRpbmc9ITEsZS5jYWxsKHRoaXMsdCksdGhpcy5zaG93TG9hZGluZ01vcmUodCkmJih0aGlzLiRyZXN1bHRzLmFwcGVuZCh0aGlzLiRsb2FkaW5nTW9yZSksdGhpcy5sb2FkTW9yZUlmTmVlZGVkKCkpfSxlLnByb3RvdHlwZS5iaW5kPWZ1bmN0aW9uKGUsdCxuKXt2YXIgcz10aGlzO2UuY2FsbCh0aGlzLHQsbiksdC5vbihcInF1ZXJ5XCIsZnVuY3Rpb24oZSl7cy5sYXN0UGFyYW1zPWUscy5sb2FkaW5nPSEwfSksdC5vbihcInF1ZXJ5OmFwcGVuZFwiLGZ1bmN0aW9uKGUpe3MubGFzdFBhcmFtcz1lLHMubG9hZGluZz0hMH0pLHRoaXMuJHJlc3VsdHMub24oXCJzY3JvbGxcIix0aGlzLmxvYWRNb3JlSWZOZWVkZWQuYmluZCh0aGlzKSl9LGUucHJvdG90eXBlLmxvYWRNb3JlSWZOZWVkZWQ9ZnVuY3Rpb24oKXt2YXIgZT1uLmNvbnRhaW5zKGRvY3VtZW50LmRvY3VtZW50RWxlbWVudCx0aGlzLiRsb2FkaW5nTW9yZVswXSk7IXRoaXMubG9hZGluZyYmZSYmKGU9dGhpcy4kcmVzdWx0cy5vZmZzZXQoKS50b3ArdGhpcy4kcmVzdWx0cy5vdXRlckhlaWdodCghMSksdGhpcy4kbG9hZGluZ01vcmUub2Zmc2V0KCkudG9wK3RoaXMuJGxvYWRpbmdNb3JlLm91dGVySGVpZ2h0KCExKTw9ZSs1MCYmdGhpcy5sb2FkTW9yZSgpKX0sZS5wcm90b3R5cGUubG9hZE1vcmU9ZnVuY3Rpb24oKXt0aGlzLmxvYWRpbmc9ITA7dmFyIGU9bi5leHRlbmQoe30se3BhZ2U6MX0sdGhpcy5sYXN0UGFyYW1zKTtlLnBhZ2UrKyx0aGlzLnRyaWdnZXIoXCJxdWVyeTphcHBlbmRcIixlKX0sZS5wcm90b3R5cGUuc2hvd0xvYWRpbmdNb3JlPWZ1bmN0aW9uKGUsdCl7cmV0dXJuIHQucGFnaW5hdGlvbiYmdC5wYWdpbmF0aW9uLm1vcmV9LGUucHJvdG90eXBlLmNyZWF0ZUxvYWRpbmdNb3JlPWZ1bmN0aW9uKCl7dmFyIGU9bignPGxpIGNsYXNzPVwic2VsZWN0Mi1yZXN1bHRzX19vcHRpb24gc2VsZWN0Mi1yZXN1bHRzX19vcHRpb24tLWxvYWQtbW9yZVwicm9sZT1cIm9wdGlvblwiIGFyaWEtZGlzYWJsZWQ9XCJ0cnVlXCI+PC9saT4nKSx0PXRoaXMub3B0aW9ucy5nZXQoXCJ0cmFuc2xhdGlvbnNcIikuZ2V0KFwibG9hZGluZ01vcmVcIik7cmV0dXJuIGUuaHRtbCh0KHRoaXMubGFzdFBhcmFtcykpLGV9LGV9KSx1LmRlZmluZShcInNlbGVjdDIvZHJvcGRvd24vYXR0YWNoQm9keVwiLFtcImpxdWVyeVwiLFwiLi4vdXRpbHNcIl0sZnVuY3Rpb24odSxvKXtmdW5jdGlvbiBlKGUsdCxuKXt0aGlzLiRkcm9wZG93blBhcmVudD11KG4uZ2V0KFwiZHJvcGRvd25QYXJlbnRcIil8fGRvY3VtZW50LmJvZHkpLGUuY2FsbCh0aGlzLHQsbil9cmV0dXJuIGUucHJvdG90eXBlLmJpbmQ9ZnVuY3Rpb24oZSx0LG4pe3ZhciBzPXRoaXM7ZS5jYWxsKHRoaXMsdCxuKSx0Lm9uKFwib3BlblwiLGZ1bmN0aW9uKCl7cy5fc2hvd0Ryb3Bkb3duKCkscy5fYXR0YWNoUG9zaXRpb25pbmdIYW5kbGVyKHQpLHMuX2JpbmRDb250YWluZXJSZXN1bHRIYW5kbGVycyh0KX0pLHQub24oXCJjbG9zZVwiLGZ1bmN0aW9uKCl7cy5faGlkZURyb3Bkb3duKCkscy5fZGV0YWNoUG9zaXRpb25pbmdIYW5kbGVyKHQpfSksdGhpcy4kZHJvcGRvd25Db250YWluZXIub24oXCJtb3VzZWRvd25cIixmdW5jdGlvbihlKXtlLnN0b3BQcm9wYWdhdGlvbigpfSl9LGUucHJvdG90eXBlLmRlc3Ryb3k9ZnVuY3Rpb24oZSl7ZS5jYWxsKHRoaXMpLHRoaXMuJGRyb3Bkb3duQ29udGFpbmVyLnJlbW92ZSgpfSxlLnByb3RvdHlwZS5wb3NpdGlvbj1mdW5jdGlvbihlLHQsbil7dC5hdHRyKFwiY2xhc3NcIixuLmF0dHIoXCJjbGFzc1wiKSksdFswXS5jbGFzc0xpc3QucmVtb3ZlKFwic2VsZWN0MlwiKSx0WzBdLmNsYXNzTGlzdC5hZGQoXCJzZWxlY3QyLWNvbnRhaW5lci0tb3BlblwiKSx0LmNzcyh7cG9zaXRpb246XCJhYnNvbHV0ZVwiLHRvcDotOTk5OTk5fSksdGhpcy4kY29udGFpbmVyPW59LGUucHJvdG90eXBlLnJlbmRlcj1mdW5jdGlvbihlKXt2YXIgdD11KFwiPHNwYW4+PC9zcGFuPlwiKSxlPWUuY2FsbCh0aGlzKTtyZXR1cm4gdC5hcHBlbmQoZSksdGhpcy4kZHJvcGRvd25Db250YWluZXI9dH0sZS5wcm90b3R5cGUuX2hpZGVEcm9wZG93bj1mdW5jdGlvbihlKXt0aGlzLiRkcm9wZG93bkNvbnRhaW5lci5kZXRhY2goKX0sZS5wcm90b3R5cGUuX2JpbmRDb250YWluZXJSZXN1bHRIYW5kbGVycz1mdW5jdGlvbihlLHQpe3ZhciBuO3RoaXMuX2NvbnRhaW5lclJlc3VsdHNIYW5kbGVyc0JvdW5kfHwobj10aGlzLHQub24oXCJyZXN1bHRzOmFsbFwiLGZ1bmN0aW9uKCl7bi5fcG9zaXRpb25Ecm9wZG93bigpLG4uX3Jlc2l6ZURyb3Bkb3duKCl9KSx0Lm9uKFwicmVzdWx0czphcHBlbmRcIixmdW5jdGlvbigpe24uX3Bvc2l0aW9uRHJvcGRvd24oKSxuLl9yZXNpemVEcm9wZG93bigpfSksdC5vbihcInJlc3VsdHM6bWVzc2FnZVwiLGZ1bmN0aW9uKCl7bi5fcG9zaXRpb25Ecm9wZG93bigpLG4uX3Jlc2l6ZURyb3Bkb3duKCl9KSx0Lm9uKFwic2VsZWN0XCIsZnVuY3Rpb24oKXtuLl9wb3NpdGlvbkRyb3Bkb3duKCksbi5fcmVzaXplRHJvcGRvd24oKX0pLHQub24oXCJ1bnNlbGVjdFwiLGZ1bmN0aW9uKCl7bi5fcG9zaXRpb25Ecm9wZG93bigpLG4uX3Jlc2l6ZURyb3Bkb3duKCl9KSx0aGlzLl9jb250YWluZXJSZXN1bHRzSGFuZGxlcnNCb3VuZD0hMCl9LGUucHJvdG90eXBlLl9hdHRhY2hQb3NpdGlvbmluZ0hhbmRsZXI9ZnVuY3Rpb24oZSx0KXt2YXIgbj10aGlzLHM9XCJzY3JvbGwuc2VsZWN0Mi5cIit0LmlkLGk9XCJyZXNpemUuc2VsZWN0Mi5cIit0LmlkLHI9XCJvcmllbnRhdGlvbmNoYW5nZS5zZWxlY3QyLlwiK3QuaWQsdD10aGlzLiRjb250YWluZXIucGFyZW50cygpLmZpbHRlcihvLmhhc1Njcm9sbCk7dC5lYWNoKGZ1bmN0aW9uKCl7by5TdG9yZURhdGEodGhpcyxcInNlbGVjdDItc2Nyb2xsLXBvc2l0aW9uXCIse3g6dSh0aGlzKS5zY3JvbGxMZWZ0KCkseTp1KHRoaXMpLnNjcm9sbFRvcCgpfSl9KSx0Lm9uKHMsZnVuY3Rpb24oZSl7dmFyIHQ9by5HZXREYXRhKHRoaXMsXCJzZWxlY3QyLXNjcm9sbC1wb3NpdGlvblwiKTt1KHRoaXMpLnNjcm9sbFRvcCh0LnkpfSksdSh3aW5kb3cpLm9uKHMrXCIgXCIraStcIiBcIityLGZ1bmN0aW9uKGUpe24uX3Bvc2l0aW9uRHJvcGRvd24oKSxuLl9yZXNpemVEcm9wZG93bigpfSl9LGUucHJvdG90eXBlLl9kZXRhY2hQb3NpdGlvbmluZ0hhbmRsZXI9ZnVuY3Rpb24oZSx0KXt2YXIgbj1cInNjcm9sbC5zZWxlY3QyLlwiK3QuaWQscz1cInJlc2l6ZS5zZWxlY3QyLlwiK3QuaWQsdD1cIm9yaWVudGF0aW9uY2hhbmdlLnNlbGVjdDIuXCIrdC5pZDt0aGlzLiRjb250YWluZXIucGFyZW50cygpLmZpbHRlcihvLmhhc1Njcm9sbCkub2ZmKG4pLHUod2luZG93KS5vZmYobitcIiBcIitzK1wiIFwiK3QpfSxlLnByb3RvdHlwZS5fcG9zaXRpb25Ecm9wZG93bj1mdW5jdGlvbigpe3ZhciBlPXUod2luZG93KSx0PXRoaXMuJGRyb3Bkb3duWzBdLmNsYXNzTGlzdC5jb250YWlucyhcInNlbGVjdDItZHJvcGRvd24tLWFib3ZlXCIpLG49dGhpcy4kZHJvcGRvd25bMF0uY2xhc3NMaXN0LmNvbnRhaW5zKFwic2VsZWN0Mi1kcm9wZG93bi0tYmVsb3dcIikscz1udWxsLGk9dGhpcy4kY29udGFpbmVyLm9mZnNldCgpO2kuYm90dG9tPWkudG9wK3RoaXMuJGNvbnRhaW5lci5vdXRlckhlaWdodCghMSk7dmFyIHI9e2hlaWdodDp0aGlzLiRjb250YWluZXIub3V0ZXJIZWlnaHQoITEpfTtyLnRvcD1pLnRvcCxyLmJvdHRvbT1pLnRvcCtyLmhlaWdodDt2YXIgbz10aGlzLiRkcm9wZG93bi5vdXRlckhlaWdodCghMSksYT1lLnNjcm9sbFRvcCgpLGw9ZS5zY3JvbGxUb3AoKStlLmhlaWdodCgpLGM9YTxpLnRvcC1vLGU9bD5pLmJvdHRvbStvLGE9e2xlZnQ6aS5sZWZ0LHRvcDpyLmJvdHRvbX0sbD10aGlzLiRkcm9wZG93blBhcmVudDtcInN0YXRpY1wiPT09bC5jc3MoXCJwb3NpdGlvblwiKSYmKGw9bC5vZmZzZXRQYXJlbnQoKSk7aT17dG9wOjAsbGVmdDowfTsodS5jb250YWlucyhkb2N1bWVudC5ib2R5LGxbMF0pfHxsWzBdLmlzQ29ubmVjdGVkKSYmKGk9bC5vZmZzZXQoKSksYS50b3AtPWkudG9wLGEubGVmdC09aS5sZWZ0LHR8fG58fChzPVwiYmVsb3dcIiksZXx8IWN8fHQ/IWMmJmUmJnQmJihzPVwiYmVsb3dcIik6cz1cImFib3ZlXCIsKFwiYWJvdmVcIj09c3x8dCYmXCJiZWxvd1wiIT09cykmJihhLnRvcD1yLnRvcC1pLnRvcC1vKSxudWxsIT1zJiYodGhpcy4kZHJvcGRvd25bMF0uY2xhc3NMaXN0LnJlbW92ZShcInNlbGVjdDItZHJvcGRvd24tLWJlbG93XCIpLHRoaXMuJGRyb3Bkb3duWzBdLmNsYXNzTGlzdC5yZW1vdmUoXCJzZWxlY3QyLWRyb3Bkb3duLS1hYm92ZVwiKSx0aGlzLiRkcm9wZG93blswXS5jbGFzc0xpc3QuYWRkKFwic2VsZWN0Mi1kcm9wZG93bi0tXCIrcyksdGhpcy4kY29udGFpbmVyWzBdLmNsYXNzTGlzdC5yZW1vdmUoXCJzZWxlY3QyLWNvbnRhaW5lci0tYmVsb3dcIiksdGhpcy4kY29udGFpbmVyWzBdLmNsYXNzTGlzdC5yZW1vdmUoXCJzZWxlY3QyLWNvbnRhaW5lci0tYWJvdmVcIiksdGhpcy4kY29udGFpbmVyWzBdLmNsYXNzTGlzdC5hZGQoXCJzZWxlY3QyLWNvbnRhaW5lci0tXCIrcykpLHRoaXMuJGRyb3Bkb3duQ29udGFpbmVyLmNzcyhhKX0sZS5wcm90b3R5cGUuX3Jlc2l6ZURyb3Bkb3duPWZ1bmN0aW9uKCl7dmFyIGU9e3dpZHRoOnRoaXMuJGNvbnRhaW5lci5vdXRlcldpZHRoKCExKStcInB4XCJ9O3RoaXMub3B0aW9ucy5nZXQoXCJkcm9wZG93bkF1dG9XaWR0aFwiKSYmKGUubWluV2lkdGg9ZS53aWR0aCxlLnBvc2l0aW9uPVwicmVsYXRpdmVcIixlLndpZHRoPVwiYXV0b1wiKSx0aGlzLiRkcm9wZG93bi5jc3MoZSl9LGUucHJvdG90eXBlLl9zaG93RHJvcGRvd249ZnVuY3Rpb24oZSl7dGhpcy4kZHJvcGRvd25Db250YWluZXIuYXBwZW5kVG8odGhpcy4kZHJvcGRvd25QYXJlbnQpLHRoaXMuX3Bvc2l0aW9uRHJvcGRvd24oKSx0aGlzLl9yZXNpemVEcm9wZG93bigpfSxlfSksdS5kZWZpbmUoXCJzZWxlY3QyL2Ryb3Bkb3duL21pbmltdW1SZXN1bHRzRm9yU2VhcmNoXCIsW10sZnVuY3Rpb24oKXtmdW5jdGlvbiBlKGUsdCxuLHMpe3RoaXMubWluaW11bVJlc3VsdHNGb3JTZWFyY2g9bi5nZXQoXCJtaW5pbXVtUmVzdWx0c0ZvclNlYXJjaFwiKSx0aGlzLm1pbmltdW1SZXN1bHRzRm9yU2VhcmNoPDAmJih0aGlzLm1pbmltdW1SZXN1bHRzRm9yU2VhcmNoPTEvMCksZS5jYWxsKHRoaXMsdCxuLHMpfXJldHVybiBlLnByb3RvdHlwZS5zaG93U2VhcmNoPWZ1bmN0aW9uKGUsdCl7cmV0dXJuIShmdW5jdGlvbiBlKHQpe2Zvcih2YXIgbj0wLHM9MDtzPHQubGVuZ3RoO3MrKyl7dmFyIGk9dFtzXTtpLmNoaWxkcmVuP24rPWUoaS5jaGlsZHJlbik6bisrfXJldHVybiBufSh0LmRhdGEucmVzdWx0cyk8dGhpcy5taW5pbXVtUmVzdWx0c0ZvclNlYXJjaCkmJmUuY2FsbCh0aGlzLHQpfSxlfSksdS5kZWZpbmUoXCJzZWxlY3QyL2Ryb3Bkb3duL3NlbGVjdE9uQ2xvc2VcIixbXCIuLi91dGlsc1wiXSxmdW5jdGlvbihzKXtmdW5jdGlvbiBlKCl7fXJldHVybiBlLnByb3RvdHlwZS5iaW5kPWZ1bmN0aW9uKGUsdCxuKXt2YXIgcz10aGlzO2UuY2FsbCh0aGlzLHQsbiksdC5vbihcImNsb3NlXCIsZnVuY3Rpb24oZSl7cy5faGFuZGxlU2VsZWN0T25DbG9zZShlKX0pfSxlLnByb3RvdHlwZS5faGFuZGxlU2VsZWN0T25DbG9zZT1mdW5jdGlvbihlLHQpe2lmKHQmJm51bGwhPXQub3JpZ2luYWxTZWxlY3QyRXZlbnQpe3ZhciBuPXQub3JpZ2luYWxTZWxlY3QyRXZlbnQ7aWYoXCJzZWxlY3RcIj09PW4uX3R5cGV8fFwidW5zZWxlY3RcIj09PW4uX3R5cGUpcmV0dXJufW49dGhpcy5nZXRIaWdobGlnaHRlZFJlc3VsdHMoKTtuLmxlbmd0aDwxfHwobnVsbCE9KG49cy5HZXREYXRhKG5bMF0sXCJkYXRhXCIpKS5lbGVtZW50JiZuLmVsZW1lbnQuc2VsZWN0ZWR8fG51bGw9PW4uZWxlbWVudCYmbi5zZWxlY3RlZHx8dGhpcy50cmlnZ2VyKFwic2VsZWN0XCIse2RhdGE6bn0pKX0sZX0pLHUuZGVmaW5lKFwic2VsZWN0Mi9kcm9wZG93bi9jbG9zZU9uU2VsZWN0XCIsW10sZnVuY3Rpb24oKXtmdW5jdGlvbiBlKCl7fXJldHVybiBlLnByb3RvdHlwZS5iaW5kPWZ1bmN0aW9uKGUsdCxuKXt2YXIgcz10aGlzO2UuY2FsbCh0aGlzLHQsbiksdC5vbihcInNlbGVjdFwiLGZ1bmN0aW9uKGUpe3MuX3NlbGVjdFRyaWdnZXJlZChlKX0pLHQub24oXCJ1bnNlbGVjdFwiLGZ1bmN0aW9uKGUpe3MuX3NlbGVjdFRyaWdnZXJlZChlKX0pfSxlLnByb3RvdHlwZS5fc2VsZWN0VHJpZ2dlcmVkPWZ1bmN0aW9uKGUsdCl7dmFyIG49dC5vcmlnaW5hbEV2ZW50O24mJihuLmN0cmxLZXl8fG4ubWV0YUtleSl8fHRoaXMudHJpZ2dlcihcImNsb3NlXCIse29yaWdpbmFsRXZlbnQ6bixvcmlnaW5hbFNlbGVjdDJFdmVudDp0fSl9LGV9KSx1LmRlZmluZShcInNlbGVjdDIvZHJvcGRvd24vZHJvcGRvd25Dc3NcIixbXCIuLi91dGlsc1wiXSxmdW5jdGlvbihuKXtmdW5jdGlvbiBlKCl7fXJldHVybiBlLnByb3RvdHlwZS5yZW5kZXI9ZnVuY3Rpb24oZSl7dmFyIHQ9ZS5jYWxsKHRoaXMpLGU9dGhpcy5vcHRpb25zLmdldChcImRyb3Bkb3duQ3NzQ2xhc3NcIil8fFwiXCI7cmV0dXJuLTEhPT1lLmluZGV4T2YoXCI6YWxsOlwiKSYmKGU9ZS5yZXBsYWNlKFwiOmFsbDpcIixcIlwiKSxuLmNvcHlOb25JbnRlcm5hbENzc0NsYXNzZXModFswXSx0aGlzLiRlbGVtZW50WzBdKSksdC5hZGRDbGFzcyhlKSx0fSxlfSksdS5kZWZpbmUoXCJzZWxlY3QyL2Ryb3Bkb3duL3RhZ3NTZWFyY2hIaWdobGlnaHRcIixbXCIuLi91dGlsc1wiXSxmdW5jdGlvbihzKXtmdW5jdGlvbiBlKCl7fXJldHVybiBlLnByb3RvdHlwZS5oaWdobGlnaHRGaXJzdEl0ZW09ZnVuY3Rpb24oZSl7dmFyIHQ9dGhpcy4kcmVzdWx0cy5maW5kKFwiLnNlbGVjdDItcmVzdWx0c19fb3B0aW9uLS1zZWxlY3RhYmxlOm5vdCguc2VsZWN0Mi1yZXN1bHRzX19vcHRpb24tLXNlbGVjdGVkKVwiKTtpZigwPHQubGVuZ3RoKXt2YXIgbj10LmZpcnN0KCksdD1zLkdldERhdGEoblswXSxcImRhdGFcIikuZWxlbWVudDtpZih0JiZ0LmdldEF0dHJpYnV0ZSYmXCJ0cnVlXCI9PT10LmdldEF0dHJpYnV0ZShcImRhdGEtc2VsZWN0Mi10YWdcIikpcmV0dXJuIHZvaWQgbi50cmlnZ2VyKFwibW91c2VlbnRlclwiKX1lLmNhbGwodGhpcyl9LGV9KSx1LmRlZmluZShcInNlbGVjdDIvaTE4bi9lblwiLFtdLGZ1bmN0aW9uKCl7cmV0dXJue2Vycm9yTG9hZGluZzpmdW5jdGlvbigpe3JldHVyblwiVGhlIHJlc3VsdHMgY291bGQgbm90IGJlIGxvYWRlZC5cIn0saW5wdXRUb29Mb25nOmZ1bmN0aW9uKGUpe3ZhciB0PWUuaW5wdXQubGVuZ3RoLWUubWF4aW11bSxlPVwiUGxlYXNlIGRlbGV0ZSBcIit0K1wiIGNoYXJhY3RlclwiO3JldHVybiAxIT10JiYoZSs9XCJzXCIpLGV9LGlucHV0VG9vU2hvcnQ6ZnVuY3Rpb24oZSl7cmV0dXJuXCJQbGVhc2UgZW50ZXIgXCIrKGUubWluaW11bS1lLmlucHV0Lmxlbmd0aCkrXCIgb3IgbW9yZSBjaGFyYWN0ZXJzXCJ9LGxvYWRpbmdNb3JlOmZ1bmN0aW9uKCl7cmV0dXJuXCJMb2FkaW5nIG1vcmUgcmVzdWx0c+KAplwifSxtYXhpbXVtU2VsZWN0ZWQ6ZnVuY3Rpb24oZSl7dmFyIHQ9XCJZb3UgY2FuIG9ubHkgc2VsZWN0IFwiK2UubWF4aW11bStcIiBpdGVtXCI7cmV0dXJuIDEhPWUubWF4aW11bSYmKHQrPVwic1wiKSx0fSxub1Jlc3VsdHM6ZnVuY3Rpb24oKXtyZXR1cm5cIk5vIHJlc3VsdHMgZm91bmRcIn0sc2VhcmNoaW5nOmZ1bmN0aW9uKCl7cmV0dXJuXCJTZWFyY2hpbmfigKZcIn0scmVtb3ZlQWxsSXRlbXM6ZnVuY3Rpb24oKXtyZXR1cm5cIlJlbW92ZSBhbGwgaXRlbXNcIn0scmVtb3ZlSXRlbTpmdW5jdGlvbigpe3JldHVyblwiUmVtb3ZlIGl0ZW1cIn0sc2VhcmNoOmZ1bmN0aW9uKCl7cmV0dXJuXCJTZWFyY2hcIn19fSksdS5kZWZpbmUoXCJzZWxlY3QyL2RlZmF1bHRzXCIsW1wianF1ZXJ5XCIsXCIuL3Jlc3VsdHNcIixcIi4vc2VsZWN0aW9uL3NpbmdsZVwiLFwiLi9zZWxlY3Rpb24vbXVsdGlwbGVcIixcIi4vc2VsZWN0aW9uL3BsYWNlaG9sZGVyXCIsXCIuL3NlbGVjdGlvbi9hbGxvd0NsZWFyXCIsXCIuL3NlbGVjdGlvbi9zZWFyY2hcIixcIi4vc2VsZWN0aW9uL3NlbGVjdGlvbkNzc1wiLFwiLi9zZWxlY3Rpb24vZXZlbnRSZWxheVwiLFwiLi91dGlsc1wiLFwiLi90cmFuc2xhdGlvblwiLFwiLi9kaWFjcml0aWNzXCIsXCIuL2RhdGEvc2VsZWN0XCIsXCIuL2RhdGEvYXJyYXlcIixcIi4vZGF0YS9hamF4XCIsXCIuL2RhdGEvdGFnc1wiLFwiLi9kYXRhL3Rva2VuaXplclwiLFwiLi9kYXRhL21pbmltdW1JbnB1dExlbmd0aFwiLFwiLi9kYXRhL21heGltdW1JbnB1dExlbmd0aFwiLFwiLi9kYXRhL21heGltdW1TZWxlY3Rpb25MZW5ndGhcIixcIi4vZHJvcGRvd25cIixcIi4vZHJvcGRvd24vc2VhcmNoXCIsXCIuL2Ryb3Bkb3duL2hpZGVQbGFjZWhvbGRlclwiLFwiLi9kcm9wZG93bi9pbmZpbml0ZVNjcm9sbFwiLFwiLi9kcm9wZG93bi9hdHRhY2hCb2R5XCIsXCIuL2Ryb3Bkb3duL21pbmltdW1SZXN1bHRzRm9yU2VhcmNoXCIsXCIuL2Ryb3Bkb3duL3NlbGVjdE9uQ2xvc2VcIixcIi4vZHJvcGRvd24vY2xvc2VPblNlbGVjdFwiLFwiLi9kcm9wZG93bi9kcm9wZG93bkNzc1wiLFwiLi9kcm9wZG93bi90YWdzU2VhcmNoSGlnaGxpZ2h0XCIsXCIuL2kxOG4vZW5cIl0sZnVuY3Rpb24obCxyLG8sYSxjLHUsZCxwLGgsZixnLHQsbSx5LHYsXyxiLCQsdyx4LEEsRCxTLEUsTyxDLEwsVCxxLEksZSl7ZnVuY3Rpb24gbigpe3RoaXMucmVzZXQoKX1yZXR1cm4gbi5wcm90b3R5cGUuYXBwbHk9ZnVuY3Rpb24oZSl7dmFyIHQ7bnVsbD09KGU9bC5leHRlbmQoITAse30sdGhpcy5kZWZhdWx0cyxlKSkuZGF0YUFkYXB0ZXImJihudWxsIT1lLmFqYXg/ZS5kYXRhQWRhcHRlcj12Om51bGwhPWUuZGF0YT9lLmRhdGFBZGFwdGVyPXk6ZS5kYXRhQWRhcHRlcj1tLDA8ZS5taW5pbXVtSW5wdXRMZW5ndGgmJihlLmRhdGFBZGFwdGVyPWYuRGVjb3JhdGUoZS5kYXRhQWRhcHRlciwkKSksMDxlLm1heGltdW1JbnB1dExlbmd0aCYmKGUuZGF0YUFkYXB0ZXI9Zi5EZWNvcmF0ZShlLmRhdGFBZGFwdGVyLHcpKSwwPGUubWF4aW11bVNlbGVjdGlvbkxlbmd0aCYmKGUuZGF0YUFkYXB0ZXI9Zi5EZWNvcmF0ZShlLmRhdGFBZGFwdGVyLHgpKSxlLnRhZ3MmJihlLmRhdGFBZGFwdGVyPWYuRGVjb3JhdGUoZS5kYXRhQWRhcHRlcixfKSksbnVsbD09ZS50b2tlblNlcGFyYXRvcnMmJm51bGw9PWUudG9rZW5pemVyfHwoZS5kYXRhQWRhcHRlcj1mLkRlY29yYXRlKGUuZGF0YUFkYXB0ZXIsYikpKSxudWxsPT1lLnJlc3VsdHNBZGFwdGVyJiYoZS5yZXN1bHRzQWRhcHRlcj1yLG51bGwhPWUuYWpheCYmKGUucmVzdWx0c0FkYXB0ZXI9Zi5EZWNvcmF0ZShlLnJlc3VsdHNBZGFwdGVyLEUpKSxudWxsIT1lLnBsYWNlaG9sZGVyJiYoZS5yZXN1bHRzQWRhcHRlcj1mLkRlY29yYXRlKGUucmVzdWx0c0FkYXB0ZXIsUykpLGUuc2VsZWN0T25DbG9zZSYmKGUucmVzdWx0c0FkYXB0ZXI9Zi5EZWNvcmF0ZShlLnJlc3VsdHNBZGFwdGVyLEwpKSxlLnRhZ3MmJihlLnJlc3VsdHNBZGFwdGVyPWYuRGVjb3JhdGUoZS5yZXN1bHRzQWRhcHRlcixJKSkpLG51bGw9PWUuZHJvcGRvd25BZGFwdGVyJiYoZS5tdWx0aXBsZT9lLmRyb3Bkb3duQWRhcHRlcj1BOih0PWYuRGVjb3JhdGUoQSxEKSxlLmRyb3Bkb3duQWRhcHRlcj10KSwwIT09ZS5taW5pbXVtUmVzdWx0c0ZvclNlYXJjaCYmKGUuZHJvcGRvd25BZGFwdGVyPWYuRGVjb3JhdGUoZS5kcm9wZG93bkFkYXB0ZXIsQykpLGUuY2xvc2VPblNlbGVjdCYmKGUuZHJvcGRvd25BZGFwdGVyPWYuRGVjb3JhdGUoZS5kcm9wZG93bkFkYXB0ZXIsVCkpLG51bGwhPWUuZHJvcGRvd25Dc3NDbGFzcyYmKGUuZHJvcGRvd25BZGFwdGVyPWYuRGVjb3JhdGUoZS5kcm9wZG93bkFkYXB0ZXIscSkpLGUuZHJvcGRvd25BZGFwdGVyPWYuRGVjb3JhdGUoZS5kcm9wZG93bkFkYXB0ZXIsTykpLG51bGw9PWUuc2VsZWN0aW9uQWRhcHRlciYmKGUubXVsdGlwbGU/ZS5zZWxlY3Rpb25BZGFwdGVyPWE6ZS5zZWxlY3Rpb25BZGFwdGVyPW8sbnVsbCE9ZS5wbGFjZWhvbGRlciYmKGUuc2VsZWN0aW9uQWRhcHRlcj1mLkRlY29yYXRlKGUuc2VsZWN0aW9uQWRhcHRlcixjKSksZS5hbGxvd0NsZWFyJiYoZS5zZWxlY3Rpb25BZGFwdGVyPWYuRGVjb3JhdGUoZS5zZWxlY3Rpb25BZGFwdGVyLHUpKSxlLm11bHRpcGxlJiYoZS5zZWxlY3Rpb25BZGFwdGVyPWYuRGVjb3JhdGUoZS5zZWxlY3Rpb25BZGFwdGVyLGQpKSxudWxsIT1lLnNlbGVjdGlvbkNzc0NsYXNzJiYoZS5zZWxlY3Rpb25BZGFwdGVyPWYuRGVjb3JhdGUoZS5zZWxlY3Rpb25BZGFwdGVyLHApKSxlLnNlbGVjdGlvbkFkYXB0ZXI9Zi5EZWNvcmF0ZShlLnNlbGVjdGlvbkFkYXB0ZXIsaCkpLGUubGFuZ3VhZ2U9dGhpcy5fcmVzb2x2ZUxhbmd1YWdlKGUubGFuZ3VhZ2UpLGUubGFuZ3VhZ2UucHVzaChcImVuXCIpO2Zvcih2YXIgbj1bXSxzPTA7czxlLmxhbmd1YWdlLmxlbmd0aDtzKyspe3ZhciBpPWUubGFuZ3VhZ2Vbc107LTE9PT1uLmluZGV4T2YoaSkmJm4ucHVzaChpKX1yZXR1cm4gZS5sYW5ndWFnZT1uLGUudHJhbnNsYXRpb25zPXRoaXMuX3Byb2Nlc3NUcmFuc2xhdGlvbnMoZS5sYW5ndWFnZSxlLmRlYnVnKSxlfSxuLnByb3RvdHlwZS5yZXNldD1mdW5jdGlvbigpe2Z1bmN0aW9uIGEoZSl7cmV0dXJuIGUucmVwbGFjZSgvW15cXHUwMDAwLVxcdTAwN0VdL2csZnVuY3Rpb24oZSl7cmV0dXJuIHRbZV18fGV9KX10aGlzLmRlZmF1bHRzPXthbWRMYW5ndWFnZUJhc2U6XCIuL2kxOG4vXCIsYXV0b2NvbXBsZXRlOlwib2ZmXCIsY2xvc2VPblNlbGVjdDohMCxkZWJ1ZzohMSxkcm9wZG93bkF1dG9XaWR0aDohMSxlc2NhcGVNYXJrdXA6Zi5lc2NhcGVNYXJrdXAsbGFuZ3VhZ2U6e30sbWF0Y2hlcjpmdW5jdGlvbiBlKHQsbil7aWYobnVsbD09dC50ZXJtfHxcIlwiPT09dC50ZXJtLnRyaW0oKSlyZXR1cm4gbjtpZihuLmNoaWxkcmVuJiYwPG4uY2hpbGRyZW4ubGVuZ3RoKXtmb3IodmFyIHM9bC5leHRlbmQoITAse30sbiksaT1uLmNoaWxkcmVuLmxlbmd0aC0xOzA8PWk7aS0tKW51bGw9PWUodCxuLmNoaWxkcmVuW2ldKSYmcy5jaGlsZHJlbi5zcGxpY2UoaSwxKTtyZXR1cm4gMDxzLmNoaWxkcmVuLmxlbmd0aD9zOmUodCxzKX12YXIgcj1hKG4udGV4dCkudG9VcHBlckNhc2UoKSxvPWEodC50ZXJtKS50b1VwcGVyQ2FzZSgpO3JldHVybi0xPHIuaW5kZXhPZihvKT9uOm51bGx9LG1pbmltdW1JbnB1dExlbmd0aDowLG1heGltdW1JbnB1dExlbmd0aDowLG1heGltdW1TZWxlY3Rpb25MZW5ndGg6MCxtaW5pbXVtUmVzdWx0c0ZvclNlYXJjaDowLHNlbGVjdE9uQ2xvc2U6ITEsc2Nyb2xsQWZ0ZXJTZWxlY3Q6ITEsc29ydGVyOmZ1bmN0aW9uKGUpe3JldHVybiBlfSx0ZW1wbGF0ZVJlc3VsdDpmdW5jdGlvbihlKXtyZXR1cm4gZS50ZXh0fSx0ZW1wbGF0ZVNlbGVjdGlvbjpmdW5jdGlvbihlKXtyZXR1cm4gZS50ZXh0fSx0aGVtZTpcImRlZmF1bHRcIix3aWR0aDpcInJlc29sdmVcIn19LG4ucHJvdG90eXBlLmFwcGx5RnJvbUVsZW1lbnQ9ZnVuY3Rpb24oZSx0KXt2YXIgbj1lLmxhbmd1YWdlLHM9dGhpcy5kZWZhdWx0cy5sYW5ndWFnZSxpPXQucHJvcChcImxhbmdcIiksdD10LmNsb3Nlc3QoXCJbbGFuZ11cIikucHJvcChcImxhbmdcIiksdD1BcnJheS5wcm90b3R5cGUuY29uY2F0LmNhbGwodGhpcy5fcmVzb2x2ZUxhbmd1YWdlKGkpLHRoaXMuX3Jlc29sdmVMYW5ndWFnZShuKSx0aGlzLl9yZXNvbHZlTGFuZ3VhZ2UocyksdGhpcy5fcmVzb2x2ZUxhbmd1YWdlKHQpKTtyZXR1cm4gZS5sYW5ndWFnZT10LGV9LG4ucHJvdG90eXBlLl9yZXNvbHZlTGFuZ3VhZ2U9ZnVuY3Rpb24oZSl7aWYoIWUpcmV0dXJuW107aWYobC5pc0VtcHR5T2JqZWN0KGUpKXJldHVybltdO2lmKGwuaXNQbGFpbk9iamVjdChlKSlyZXR1cm5bZV07Zm9yKHZhciB0LG49QXJyYXkuaXNBcnJheShlKT9lOltlXSxzPVtdLGk9MDtpPG4ubGVuZ3RoO2krKylzLnB1c2gobltpXSksXCJzdHJpbmdcIj09dHlwZW9mIG5baV0mJjA8bltpXS5pbmRleE9mKFwiLVwiKSYmKHQ9bltpXS5zcGxpdChcIi1cIilbMF0scy5wdXNoKHQpKTtyZXR1cm4gc30sbi5wcm90b3R5cGUuX3Byb2Nlc3NUcmFuc2xhdGlvbnM9ZnVuY3Rpb24oZSx0KXtmb3IodmFyIG49bmV3IGcscz0wO3M8ZS5sZW5ndGg7cysrKXt2YXIgaT1uZXcgZyxyPWVbc107aWYoXCJzdHJpbmdcIj09dHlwZW9mIHIpdHJ5e2k9Zy5sb2FkUGF0aChyKX1jYXRjaChlKXt0cnl7cj10aGlzLmRlZmF1bHRzLmFtZExhbmd1YWdlQmFzZStyLGk9Zy5sb2FkUGF0aChyKX1jYXRjaChlKXt0JiZ3aW5kb3cuY29uc29sZSYmY29uc29sZS53YXJuJiZjb25zb2xlLndhcm4oJ1NlbGVjdDI6IFRoZSBsYW5ndWFnZSBmaWxlIGZvciBcIicrcisnXCIgY291bGQgbm90IGJlIGF1dG9tYXRpY2FsbHkgbG9hZGVkLiBBIGZhbGxiYWNrIHdpbGwgYmUgdXNlZCBpbnN0ZWFkLicpfX1lbHNlIGk9bC5pc1BsYWluT2JqZWN0KHIpP25ldyBnKHIpOnI7bi5leHRlbmQoaSl9cmV0dXJuIG59LG4ucHJvdG90eXBlLnNldD1mdW5jdGlvbihlLHQpe3ZhciBuPXt9O25bbC5jYW1lbENhc2UoZSldPXQ7bj1mLl9jb252ZXJ0RGF0YShuKTtsLmV4dGVuZCghMCx0aGlzLmRlZmF1bHRzLG4pfSxuZXcgbn0pLHUuZGVmaW5lKFwic2VsZWN0Mi9vcHRpb25zXCIsW1wianF1ZXJ5XCIsXCIuL2RlZmF1bHRzXCIsXCIuL3V0aWxzXCJdLGZ1bmN0aW9uKGMsbix1KXtmdW5jdGlvbiBlKGUsdCl7dGhpcy5vcHRpb25zPWUsbnVsbCE9dCYmdGhpcy5mcm9tRWxlbWVudCh0KSxudWxsIT10JiYodGhpcy5vcHRpb25zPW4uYXBwbHlGcm9tRWxlbWVudCh0aGlzLm9wdGlvbnMsdCkpLHRoaXMub3B0aW9ucz1uLmFwcGx5KHRoaXMub3B0aW9ucyl9cmV0dXJuIGUucHJvdG90eXBlLmZyb21FbGVtZW50PWZ1bmN0aW9uKGUpe3ZhciB0PVtcInNlbGVjdDJcIl07bnVsbD09dGhpcy5vcHRpb25zLm11bHRpcGxlJiYodGhpcy5vcHRpb25zLm11bHRpcGxlPWUucHJvcChcIm11bHRpcGxlXCIpKSxudWxsPT10aGlzLm9wdGlvbnMuZGlzYWJsZWQmJih0aGlzLm9wdGlvbnMuZGlzYWJsZWQ9ZS5wcm9wKFwiZGlzYWJsZWRcIikpLG51bGw9PXRoaXMub3B0aW9ucy5hdXRvY29tcGxldGUmJmUucHJvcChcImF1dG9jb21wbGV0ZVwiKSYmKHRoaXMub3B0aW9ucy5hdXRvY29tcGxldGU9ZS5wcm9wKFwiYXV0b2NvbXBsZXRlXCIpKSxudWxsPT10aGlzLm9wdGlvbnMuZGlyJiYoZS5wcm9wKFwiZGlyXCIpP3RoaXMub3B0aW9ucy5kaXI9ZS5wcm9wKFwiZGlyXCIpOmUuY2xvc2VzdChcIltkaXJdXCIpLnByb3AoXCJkaXJcIik/dGhpcy5vcHRpb25zLmRpcj1lLmNsb3Nlc3QoXCJbZGlyXVwiKS5wcm9wKFwiZGlyXCIpOnRoaXMub3B0aW9ucy5kaXI9XCJsdHJcIiksZS5wcm9wKFwiZGlzYWJsZWRcIix0aGlzLm9wdGlvbnMuZGlzYWJsZWQpLGUucHJvcChcIm11bHRpcGxlXCIsdGhpcy5vcHRpb25zLm11bHRpcGxlKSx1LkdldERhdGEoZVswXSxcInNlbGVjdDJUYWdzXCIpJiYodGhpcy5vcHRpb25zLmRlYnVnJiZ3aW5kb3cuY29uc29sZSYmY29uc29sZS53YXJuJiZjb25zb2xlLndhcm4oJ1NlbGVjdDI6IFRoZSBgZGF0YS1zZWxlY3QyLXRhZ3NgIGF0dHJpYnV0ZSBoYXMgYmVlbiBjaGFuZ2VkIHRvIHVzZSB0aGUgYGRhdGEtZGF0YWAgYW5kIGBkYXRhLXRhZ3M9XCJ0cnVlXCJgIGF0dHJpYnV0ZXMgYW5kIHdpbGwgYmUgcmVtb3ZlZCBpbiBmdXR1cmUgdmVyc2lvbnMgb2YgU2VsZWN0Mi4nKSx1LlN0b3JlRGF0YShlWzBdLFwiZGF0YVwiLHUuR2V0RGF0YShlWzBdLFwic2VsZWN0MlRhZ3NcIikpLHUuU3RvcmVEYXRhKGVbMF0sXCJ0YWdzXCIsITApKSx1LkdldERhdGEoZVswXSxcImFqYXhVcmxcIikmJih0aGlzLm9wdGlvbnMuZGVidWcmJndpbmRvdy5jb25zb2xlJiZjb25zb2xlLndhcm4mJmNvbnNvbGUud2FybihcIlNlbGVjdDI6IFRoZSBgZGF0YS1hamF4LXVybGAgYXR0cmlidXRlIGhhcyBiZWVuIGNoYW5nZWQgdG8gYGRhdGEtYWpheC0tdXJsYCBhbmQgc3VwcG9ydCBmb3IgdGhlIG9sZCBhdHRyaWJ1dGUgd2lsbCBiZSByZW1vdmVkIGluIGZ1dHVyZSB2ZXJzaW9ucyBvZiBTZWxlY3QyLlwiKSxlLmF0dHIoXCJhamF4LS11cmxcIix1LkdldERhdGEoZVswXSxcImFqYXhVcmxcIikpLHUuU3RvcmVEYXRhKGVbMF0sXCJhamF4LVVybFwiLHUuR2V0RGF0YShlWzBdLFwiYWpheFVybFwiKSkpO3ZhciBuPXt9O2Z1bmN0aW9uIHMoZSx0KXtyZXR1cm4gdC50b1VwcGVyQ2FzZSgpfWZvcih2YXIgaT0wO2k8ZVswXS5hdHRyaWJ1dGVzLmxlbmd0aDtpKyspe3ZhciByPWVbMF0uYXR0cmlidXRlc1tpXS5uYW1lLG89XCJkYXRhLVwiO3Iuc3Vic3RyKDAsby5sZW5ndGgpPT1vJiYocj1yLnN1YnN0cmluZyhvLmxlbmd0aCksbz11LkdldERhdGEoZVswXSxyKSxuW3IucmVwbGFjZSgvLShbYS16XSkvZyxzKV09byl9Yy5mbi5qcXVlcnkmJlwiMS5cIj09Yy5mbi5qcXVlcnkuc3Vic3RyKDAsMikmJmVbMF0uZGF0YXNldCYmKG49Yy5leHRlbmQoITAse30sZVswXS5kYXRhc2V0LG4pKTt2YXIgYSxsPWMuZXh0ZW5kKCEwLHt9LHUuR2V0RGF0YShlWzBdKSxuKTtmb3IoYSBpbiBsPXUuX2NvbnZlcnREYXRhKGwpKS0xPHQuaW5kZXhPZihhKXx8KGMuaXNQbGFpbk9iamVjdCh0aGlzLm9wdGlvbnNbYV0pP2MuZXh0ZW5kKHRoaXMub3B0aW9uc1thXSxsW2FdKTp0aGlzLm9wdGlvbnNbYV09bFthXSk7cmV0dXJuIHRoaXN9LGUucHJvdG90eXBlLmdldD1mdW5jdGlvbihlKXtyZXR1cm4gdGhpcy5vcHRpb25zW2VdfSxlLnByb3RvdHlwZS5zZXQ9ZnVuY3Rpb24oZSx0KXt0aGlzLm9wdGlvbnNbZV09dH0sZX0pLHUuZGVmaW5lKFwic2VsZWN0Mi9jb3JlXCIsW1wianF1ZXJ5XCIsXCIuL29wdGlvbnNcIixcIi4vdXRpbHNcIixcIi4va2V5c1wiXSxmdW5jdGlvbih0LGkscixzKXt2YXIgbz1mdW5jdGlvbihlLHQpe251bGwhPXIuR2V0RGF0YShlWzBdLFwic2VsZWN0MlwiKSYmci5HZXREYXRhKGVbMF0sXCJzZWxlY3QyXCIpLmRlc3Ryb3koKSx0aGlzLiRlbGVtZW50PWUsdGhpcy5pZD10aGlzLl9nZW5lcmF0ZUlkKGUpLHQ9dHx8e30sdGhpcy5vcHRpb25zPW5ldyBpKHQsZSksby5fX3N1cGVyX18uY29uc3RydWN0b3IuY2FsbCh0aGlzKTt2YXIgbj1lLmF0dHIoXCJ0YWJpbmRleFwiKXx8MDtyLlN0b3JlRGF0YShlWzBdLFwib2xkLXRhYmluZGV4XCIsbiksZS5hdHRyKFwidGFiaW5kZXhcIixcIi0xXCIpO3Q9dGhpcy5vcHRpb25zLmdldChcImRhdGFBZGFwdGVyXCIpO3RoaXMuZGF0YUFkYXB0ZXI9bmV3IHQoZSx0aGlzLm9wdGlvbnMpO249dGhpcy5yZW5kZXIoKTt0aGlzLl9wbGFjZUNvbnRhaW5lcihuKTt0PXRoaXMub3B0aW9ucy5nZXQoXCJzZWxlY3Rpb25BZGFwdGVyXCIpO3RoaXMuc2VsZWN0aW9uPW5ldyB0KGUsdGhpcy5vcHRpb25zKSx0aGlzLiRzZWxlY3Rpb249dGhpcy5zZWxlY3Rpb24ucmVuZGVyKCksdGhpcy5zZWxlY3Rpb24ucG9zaXRpb24odGhpcy4kc2VsZWN0aW9uLG4pO3Q9dGhpcy5vcHRpb25zLmdldChcImRyb3Bkb3duQWRhcHRlclwiKTt0aGlzLmRyb3Bkb3duPW5ldyB0KGUsdGhpcy5vcHRpb25zKSx0aGlzLiRkcm9wZG93bj10aGlzLmRyb3Bkb3duLnJlbmRlcigpLHRoaXMuZHJvcGRvd24ucG9zaXRpb24odGhpcy4kZHJvcGRvd24sbik7bj10aGlzLm9wdGlvbnMuZ2V0KFwicmVzdWx0c0FkYXB0ZXJcIik7dGhpcy5yZXN1bHRzPW5ldyBuKGUsdGhpcy5vcHRpb25zLHRoaXMuZGF0YUFkYXB0ZXIpLHRoaXMuJHJlc3VsdHM9dGhpcy5yZXN1bHRzLnJlbmRlcigpLHRoaXMucmVzdWx0cy5wb3NpdGlvbih0aGlzLiRyZXN1bHRzLHRoaXMuJGRyb3Bkb3duKTt2YXIgcz10aGlzO3RoaXMuX2JpbmRBZGFwdGVycygpLHRoaXMuX3JlZ2lzdGVyRG9tRXZlbnRzKCksdGhpcy5fcmVnaXN0ZXJEYXRhRXZlbnRzKCksdGhpcy5fcmVnaXN0ZXJTZWxlY3Rpb25FdmVudHMoKSx0aGlzLl9yZWdpc3RlckRyb3Bkb3duRXZlbnRzKCksdGhpcy5fcmVnaXN0ZXJSZXN1bHRzRXZlbnRzKCksdGhpcy5fcmVnaXN0ZXJFdmVudHMoKSx0aGlzLmRhdGFBZGFwdGVyLmN1cnJlbnQoZnVuY3Rpb24oZSl7cy50cmlnZ2VyKFwic2VsZWN0aW9uOnVwZGF0ZVwiLHtkYXRhOmV9KX0pLGVbMF0uY2xhc3NMaXN0LmFkZChcInNlbGVjdDItaGlkZGVuLWFjY2Vzc2libGVcIiksZS5hdHRyKFwiYXJpYS1oaWRkZW5cIixcInRydWVcIiksdGhpcy5fc3luY0F0dHJpYnV0ZXMoKSxyLlN0b3JlRGF0YShlWzBdLFwic2VsZWN0MlwiLHRoaXMpLGUuZGF0YShcInNlbGVjdDJcIix0aGlzKX07cmV0dXJuIHIuRXh0ZW5kKG8sci5PYnNlcnZhYmxlKSxvLnByb3RvdHlwZS5fZ2VuZXJhdGVJZD1mdW5jdGlvbihlKXtyZXR1cm5cInNlbGVjdDItXCIrKG51bGwhPWUuYXR0cihcImlkXCIpP2UuYXR0cihcImlkXCIpOm51bGwhPWUuYXR0cihcIm5hbWVcIik/ZS5hdHRyKFwibmFtZVwiKStcIi1cIityLmdlbmVyYXRlQ2hhcnMoMik6ci5nZW5lcmF0ZUNoYXJzKDQpKS5yZXBsYWNlKC8oOnxcXC58XFxbfFxcXXwsKS9nLFwiXCIpfSxvLnByb3RvdHlwZS5fcGxhY2VDb250YWluZXI9ZnVuY3Rpb24oZSl7ZS5pbnNlcnRBZnRlcih0aGlzLiRlbGVtZW50KTt2YXIgdD10aGlzLl9yZXNvbHZlV2lkdGgodGhpcy4kZWxlbWVudCx0aGlzLm9wdGlvbnMuZ2V0KFwid2lkdGhcIikpO251bGwhPXQmJmUuY3NzKFwid2lkdGhcIix0KX0sby5wcm90b3R5cGUuX3Jlc29sdmVXaWR0aD1mdW5jdGlvbihlLHQpe3ZhciBuPS9ed2lkdGg6KChbLStdPyhbMC05XSpcXC4pP1swLTldKykocHh8ZW18ZXh8JXxpbnxjbXxtbXxwdHxwYykpL2k7aWYoXCJyZXNvbHZlXCI9PXQpe3ZhciBzPXRoaXMuX3Jlc29sdmVXaWR0aChlLFwic3R5bGVcIik7cmV0dXJuIG51bGwhPXM/czp0aGlzLl9yZXNvbHZlV2lkdGgoZSxcImVsZW1lbnRcIil9aWYoXCJlbGVtZW50XCI9PXQpe3M9ZS5vdXRlcldpZHRoKCExKTtyZXR1cm4gczw9MD9cImF1dG9cIjpzK1wicHhcIn1pZihcInN0eWxlXCIhPXQpcmV0dXJuXCJjb21wdXRlZHN0eWxlXCIhPXQ/dDp3aW5kb3cuZ2V0Q29tcHV0ZWRTdHlsZShlWzBdKS53aWR0aDtlPWUuYXR0cihcInN0eWxlXCIpO2lmKFwic3RyaW5nXCIhPXR5cGVvZiBlKXJldHVybiBudWxsO2Zvcih2YXIgaT1lLnNwbGl0KFwiO1wiKSxyPTAsbz1pLmxlbmd0aDtyPG87cis9MSl7dmFyIGE9aVtyXS5yZXBsYWNlKC9cXHMvZyxcIlwiKS5tYXRjaChuKTtpZihudWxsIT09YSYmMTw9YS5sZW5ndGgpcmV0dXJuIGFbMV19cmV0dXJuIG51bGx9LG8ucHJvdG90eXBlLl9iaW5kQWRhcHRlcnM9ZnVuY3Rpb24oKXt0aGlzLmRhdGFBZGFwdGVyLmJpbmQodGhpcyx0aGlzLiRjb250YWluZXIpLHRoaXMuc2VsZWN0aW9uLmJpbmQodGhpcyx0aGlzLiRjb250YWluZXIpLHRoaXMuZHJvcGRvd24uYmluZCh0aGlzLHRoaXMuJGNvbnRhaW5lciksdGhpcy5yZXN1bHRzLmJpbmQodGhpcyx0aGlzLiRjb250YWluZXIpfSxvLnByb3RvdHlwZS5fcmVnaXN0ZXJEb21FdmVudHM9ZnVuY3Rpb24oKXt2YXIgdD10aGlzO3RoaXMuJGVsZW1lbnQub24oXCJjaGFuZ2Uuc2VsZWN0MlwiLGZ1bmN0aW9uKCl7dC5kYXRhQWRhcHRlci5jdXJyZW50KGZ1bmN0aW9uKGUpe3QudHJpZ2dlcihcInNlbGVjdGlvbjp1cGRhdGVcIix7ZGF0YTplfSl9KX0pLHRoaXMuJGVsZW1lbnQub24oXCJmb2N1cy5zZWxlY3QyXCIsZnVuY3Rpb24oZSl7dC50cmlnZ2VyKFwiZm9jdXNcIixlKX0pLHRoaXMuX3N5bmNBPXIuYmluZCh0aGlzLl9zeW5jQXR0cmlidXRlcyx0aGlzKSx0aGlzLl9zeW5jUz1yLmJpbmQodGhpcy5fc3luY1N1YnRyZWUsdGhpcyksdGhpcy5fb2JzZXJ2ZXI9bmV3IHdpbmRvdy5NdXRhdGlvbk9ic2VydmVyKGZ1bmN0aW9uKGUpe3QuX3N5bmNBKCksdC5fc3luY1MoZSl9KSx0aGlzLl9vYnNlcnZlci5vYnNlcnZlKHRoaXMuJGVsZW1lbnRbMF0se2F0dHJpYnV0ZXM6ITAsY2hpbGRMaXN0OiEwLHN1YnRyZWU6ITF9KX0sby5wcm90b3R5cGUuX3JlZ2lzdGVyRGF0YUV2ZW50cz1mdW5jdGlvbigpe3ZhciBuPXRoaXM7dGhpcy5kYXRhQWRhcHRlci5vbihcIipcIixmdW5jdGlvbihlLHQpe24udHJpZ2dlcihlLHQpfSl9LG8ucHJvdG90eXBlLl9yZWdpc3RlclNlbGVjdGlvbkV2ZW50cz1mdW5jdGlvbigpe3ZhciBuPXRoaXMscz1bXCJ0b2dnbGVcIixcImZvY3VzXCJdO3RoaXMuc2VsZWN0aW9uLm9uKFwidG9nZ2xlXCIsZnVuY3Rpb24oKXtuLnRvZ2dsZURyb3Bkb3duKCl9KSx0aGlzLnNlbGVjdGlvbi5vbihcImZvY3VzXCIsZnVuY3Rpb24oZSl7bi5mb2N1cyhlKX0pLHRoaXMuc2VsZWN0aW9uLm9uKFwiKlwiLGZ1bmN0aW9uKGUsdCl7LTE9PT1zLmluZGV4T2YoZSkmJm4udHJpZ2dlcihlLHQpfSl9LG8ucHJvdG90eXBlLl9yZWdpc3RlckRyb3Bkb3duRXZlbnRzPWZ1bmN0aW9uKCl7dmFyIG49dGhpczt0aGlzLmRyb3Bkb3duLm9uKFwiKlwiLGZ1bmN0aW9uKGUsdCl7bi50cmlnZ2VyKGUsdCl9KX0sby5wcm90b3R5cGUuX3JlZ2lzdGVyUmVzdWx0c0V2ZW50cz1mdW5jdGlvbigpe3ZhciBuPXRoaXM7dGhpcy5yZXN1bHRzLm9uKFwiKlwiLGZ1bmN0aW9uKGUsdCl7bi50cmlnZ2VyKGUsdCl9KX0sby5wcm90b3R5cGUuX3JlZ2lzdGVyRXZlbnRzPWZ1bmN0aW9uKCl7dmFyIG49dGhpczt0aGlzLm9uKFwib3BlblwiLGZ1bmN0aW9uKCl7bi4kY29udGFpbmVyWzBdLmNsYXNzTGlzdC5hZGQoXCJzZWxlY3QyLWNvbnRhaW5lci0tb3BlblwiKX0pLHRoaXMub24oXCJjbG9zZVwiLGZ1bmN0aW9uKCl7bi4kY29udGFpbmVyWzBdLmNsYXNzTGlzdC5yZW1vdmUoXCJzZWxlY3QyLWNvbnRhaW5lci0tb3BlblwiKX0pLHRoaXMub24oXCJlbmFibGVcIixmdW5jdGlvbigpe24uJGNvbnRhaW5lclswXS5jbGFzc0xpc3QucmVtb3ZlKFwic2VsZWN0Mi1jb250YWluZXItLWRpc2FibGVkXCIpfSksdGhpcy5vbihcImRpc2FibGVcIixmdW5jdGlvbigpe24uJGNvbnRhaW5lclswXS5jbGFzc0xpc3QuYWRkKFwic2VsZWN0Mi1jb250YWluZXItLWRpc2FibGVkXCIpfSksdGhpcy5vbihcImJsdXJcIixmdW5jdGlvbigpe24uJGNvbnRhaW5lclswXS5jbGFzc0xpc3QucmVtb3ZlKFwic2VsZWN0Mi1jb250YWluZXItLWZvY3VzXCIpfSksdGhpcy5vbihcInF1ZXJ5XCIsZnVuY3Rpb24odCl7bi5pc09wZW4oKXx8bi50cmlnZ2VyKFwib3BlblwiLHt9KSx0aGlzLmRhdGFBZGFwdGVyLnF1ZXJ5KHQsZnVuY3Rpb24oZSl7bi50cmlnZ2VyKFwicmVzdWx0czphbGxcIix7ZGF0YTplLHF1ZXJ5OnR9KX0pfSksdGhpcy5vbihcInF1ZXJ5OmFwcGVuZFwiLGZ1bmN0aW9uKHQpe3RoaXMuZGF0YUFkYXB0ZXIucXVlcnkodCxmdW5jdGlvbihlKXtuLnRyaWdnZXIoXCJyZXN1bHRzOmFwcGVuZFwiLHtkYXRhOmUscXVlcnk6dH0pfSl9KSx0aGlzLm9uKFwia2V5cHJlc3NcIixmdW5jdGlvbihlKXt2YXIgdD1lLndoaWNoO24uaXNPcGVuKCk/dD09PXMuRVNDfHx0PT09cy5VUCYmZS5hbHRLZXk/KG4uY2xvc2UoZSksZS5wcmV2ZW50RGVmYXVsdCgpKTp0PT09cy5FTlRFUnx8dD09PXMuVEFCPyhuLnRyaWdnZXIoXCJyZXN1bHRzOnNlbGVjdFwiLHt9KSxlLnByZXZlbnREZWZhdWx0KCkpOnQ9PT1zLlNQQUNFJiZlLmN0cmxLZXk/KG4udHJpZ2dlcihcInJlc3VsdHM6dG9nZ2xlXCIse30pLGUucHJldmVudERlZmF1bHQoKSk6dD09PXMuVVA/KG4udHJpZ2dlcihcInJlc3VsdHM6cHJldmlvdXNcIix7fSksZS5wcmV2ZW50RGVmYXVsdCgpKTp0PT09cy5ET1dOJiYobi50cmlnZ2VyKFwicmVzdWx0czpuZXh0XCIse30pLGUucHJldmVudERlZmF1bHQoKSk6KHQ9PT1zLkVOVEVSfHx0PT09cy5TUEFDRXx8dD09PXMuRE9XTiYmZS5hbHRLZXkpJiYobi5vcGVuKCksZS5wcmV2ZW50RGVmYXVsdCgpKX0pfSxvLnByb3RvdHlwZS5fc3luY0F0dHJpYnV0ZXM9ZnVuY3Rpb24oKXt0aGlzLm9wdGlvbnMuc2V0KFwiZGlzYWJsZWRcIix0aGlzLiRlbGVtZW50LnByb3AoXCJkaXNhYmxlZFwiKSksdGhpcy5pc0Rpc2FibGVkKCk/KHRoaXMuaXNPcGVuKCkmJnRoaXMuY2xvc2UoKSx0aGlzLnRyaWdnZXIoXCJkaXNhYmxlXCIse30pKTp0aGlzLnRyaWdnZXIoXCJlbmFibGVcIix7fSl9LG8ucHJvdG90eXBlLl9pc0NoYW5nZU11dGF0aW9uPWZ1bmN0aW9uKGUpe3ZhciB0PXRoaXM7aWYoZS5hZGRlZE5vZGVzJiYwPGUuYWRkZWROb2Rlcy5sZW5ndGgpe2Zvcih2YXIgbj0wO248ZS5hZGRlZE5vZGVzLmxlbmd0aDtuKyspaWYoZS5hZGRlZE5vZGVzW25dLnNlbGVjdGVkKXJldHVybiEwfWVsc2V7aWYoZS5yZW1vdmVkTm9kZXMmJjA8ZS5yZW1vdmVkTm9kZXMubGVuZ3RoKXJldHVybiEwO2lmKEFycmF5LmlzQXJyYXkoZSkpcmV0dXJuIGUuc29tZShmdW5jdGlvbihlKXtyZXR1cm4gdC5faXNDaGFuZ2VNdXRhdGlvbihlKX0pfXJldHVybiExfSxvLnByb3RvdHlwZS5fc3luY1N1YnRyZWU9ZnVuY3Rpb24oZSl7dmFyIGU9dGhpcy5faXNDaGFuZ2VNdXRhdGlvbihlKSx0PXRoaXM7ZSYmdGhpcy5kYXRhQWRhcHRlci5jdXJyZW50KGZ1bmN0aW9uKGUpe3QudHJpZ2dlcihcInNlbGVjdGlvbjp1cGRhdGVcIix7ZGF0YTplfSl9KX0sby5wcm90b3R5cGUudHJpZ2dlcj1mdW5jdGlvbihlLHQpe3ZhciBuPW8uX19zdXBlcl9fLnRyaWdnZXIscz17b3BlbjpcIm9wZW5pbmdcIixjbG9zZTpcImNsb3NpbmdcIixzZWxlY3Q6XCJzZWxlY3RpbmdcIix1bnNlbGVjdDpcInVuc2VsZWN0aW5nXCIsY2xlYXI6XCJjbGVhcmluZ1wifTtpZih2b2lkIDA9PT10JiYodD17fSksZSBpbiBzKXt2YXIgaT1zW2VdLHM9e3ByZXZlbnRlZDohMSxuYW1lOmUsYXJnczp0fTtpZihuLmNhbGwodGhpcyxpLHMpLHMucHJldmVudGVkKXJldHVybiB2b2lkKHQucHJldmVudGVkPSEwKX1uLmNhbGwodGhpcyxlLHQpfSxvLnByb3RvdHlwZS50b2dnbGVEcm9wZG93bj1mdW5jdGlvbigpe3RoaXMuaXNEaXNhYmxlZCgpfHwodGhpcy5pc09wZW4oKT90aGlzLmNsb3NlKCk6dGhpcy5vcGVuKCkpfSxvLnByb3RvdHlwZS5vcGVuPWZ1bmN0aW9uKCl7dGhpcy5pc09wZW4oKXx8dGhpcy5pc0Rpc2FibGVkKCl8fHRoaXMudHJpZ2dlcihcInF1ZXJ5XCIse30pfSxvLnByb3RvdHlwZS5jbG9zZT1mdW5jdGlvbihlKXt0aGlzLmlzT3BlbigpJiZ0aGlzLnRyaWdnZXIoXCJjbG9zZVwiLHtvcmlnaW5hbEV2ZW50OmV9KX0sby5wcm90b3R5cGUuaXNFbmFibGVkPWZ1bmN0aW9uKCl7cmV0dXJuIXRoaXMuaXNEaXNhYmxlZCgpfSxvLnByb3RvdHlwZS5pc0Rpc2FibGVkPWZ1bmN0aW9uKCl7cmV0dXJuIHRoaXMub3B0aW9ucy5nZXQoXCJkaXNhYmxlZFwiKX0sby5wcm90b3R5cGUuaXNPcGVuPWZ1bmN0aW9uKCl7cmV0dXJuIHRoaXMuJGNvbnRhaW5lclswXS5jbGFzc0xpc3QuY29udGFpbnMoXCJzZWxlY3QyLWNvbnRhaW5lci0tb3BlblwiKX0sby5wcm90b3R5cGUuaGFzRm9jdXM9ZnVuY3Rpb24oKXtyZXR1cm4gdGhpcy4kY29udGFpbmVyWzBdLmNsYXNzTGlzdC5jb250YWlucyhcInNlbGVjdDItY29udGFpbmVyLS1mb2N1c1wiKX0sby5wcm90b3R5cGUuZm9jdXM9ZnVuY3Rpb24oZSl7dGhpcy5oYXNGb2N1cygpfHwodGhpcy4kY29udGFpbmVyWzBdLmNsYXNzTGlzdC5hZGQoXCJzZWxlY3QyLWNvbnRhaW5lci0tZm9jdXNcIiksdGhpcy50cmlnZ2VyKFwiZm9jdXNcIix7fSkpfSxvLnByb3RvdHlwZS5lbmFibGU9ZnVuY3Rpb24oZSl7dGhpcy5vcHRpb25zLmdldChcImRlYnVnXCIpJiZ3aW5kb3cuY29uc29sZSYmY29uc29sZS53YXJuJiZjb25zb2xlLndhcm4oJ1NlbGVjdDI6IFRoZSBgc2VsZWN0MihcImVuYWJsZVwiKWAgbWV0aG9kIGhhcyBiZWVuIGRlcHJlY2F0ZWQgYW5kIHdpbGwgYmUgcmVtb3ZlZCBpbiBsYXRlciBTZWxlY3QyIHZlcnNpb25zLiBVc2UgJGVsZW1lbnQucHJvcChcImRpc2FibGVkXCIpIGluc3RlYWQuJyk7ZT0hKGU9bnVsbD09ZXx8MD09PWUubGVuZ3RoP1shMF06ZSlbMF07dGhpcy4kZWxlbWVudC5wcm9wKFwiZGlzYWJsZWRcIixlKX0sby5wcm90b3R5cGUuZGF0YT1mdW5jdGlvbigpe3RoaXMub3B0aW9ucy5nZXQoXCJkZWJ1Z1wiKSYmMDxhcmd1bWVudHMubGVuZ3RoJiZ3aW5kb3cuY29uc29sZSYmY29uc29sZS53YXJuJiZjb25zb2xlLndhcm4oJ1NlbGVjdDI6IERhdGEgY2FuIG5vIGxvbmdlciBiZSBzZXQgdXNpbmcgYHNlbGVjdDIoXCJkYXRhXCIpYC4gWW91IHNob3VsZCBjb25zaWRlciBzZXR0aW5nIHRoZSB2YWx1ZSBpbnN0ZWFkIHVzaW5nIGAkZWxlbWVudC52YWwoKWAuJyk7dmFyIHQ9W107cmV0dXJuIHRoaXMuZGF0YUFkYXB0ZXIuY3VycmVudChmdW5jdGlvbihlKXt0PWV9KSx0fSxvLnByb3RvdHlwZS52YWw9ZnVuY3Rpb24oZSl7aWYodGhpcy5vcHRpb25zLmdldChcImRlYnVnXCIpJiZ3aW5kb3cuY29uc29sZSYmY29uc29sZS53YXJuJiZjb25zb2xlLndhcm4oJ1NlbGVjdDI6IFRoZSBgc2VsZWN0MihcInZhbFwiKWAgbWV0aG9kIGhhcyBiZWVuIGRlcHJlY2F0ZWQgYW5kIHdpbGwgYmUgcmVtb3ZlZCBpbiBsYXRlciBTZWxlY3QyIHZlcnNpb25zLiBVc2UgJGVsZW1lbnQudmFsKCkgaW5zdGVhZC4nKSxudWxsPT1lfHwwPT09ZS5sZW5ndGgpcmV0dXJuIHRoaXMuJGVsZW1lbnQudmFsKCk7ZT1lWzBdO0FycmF5LmlzQXJyYXkoZSkmJihlPWUubWFwKGZ1bmN0aW9uKGUpe3JldHVybiBlLnRvU3RyaW5nKCl9KSksdGhpcy4kZWxlbWVudC52YWwoZSkudHJpZ2dlcihcImlucHV0XCIpLnRyaWdnZXIoXCJjaGFuZ2VcIil9LG8ucHJvdG90eXBlLmRlc3Ryb3k9ZnVuY3Rpb24oKXtyLlJlbW92ZURhdGEodGhpcy4kY29udGFpbmVyWzBdKSx0aGlzLiRjb250YWluZXIucmVtb3ZlKCksdGhpcy5fb2JzZXJ2ZXIuZGlzY29ubmVjdCgpLHRoaXMuX29ic2VydmVyPW51bGwsdGhpcy5fc3luY0E9bnVsbCx0aGlzLl9zeW5jUz1udWxsLHRoaXMuJGVsZW1lbnQub2ZmKFwiLnNlbGVjdDJcIiksdGhpcy4kZWxlbWVudC5hdHRyKFwidGFiaW5kZXhcIixyLkdldERhdGEodGhpcy4kZWxlbWVudFswXSxcIm9sZC10YWJpbmRleFwiKSksdGhpcy4kZWxlbWVudFswXS5jbGFzc0xpc3QucmVtb3ZlKFwic2VsZWN0Mi1oaWRkZW4tYWNjZXNzaWJsZVwiKSx0aGlzLiRlbGVtZW50LmF0dHIoXCJhcmlhLWhpZGRlblwiLFwiZmFsc2VcIiksci5SZW1vdmVEYXRhKHRoaXMuJGVsZW1lbnRbMF0pLHRoaXMuJGVsZW1lbnQucmVtb3ZlRGF0YShcInNlbGVjdDJcIiksdGhpcy5kYXRhQWRhcHRlci5kZXN0cm95KCksdGhpcy5zZWxlY3Rpb24uZGVzdHJveSgpLHRoaXMuZHJvcGRvd24uZGVzdHJveSgpLHRoaXMucmVzdWx0cy5kZXN0cm95KCksdGhpcy5kYXRhQWRhcHRlcj1udWxsLHRoaXMuc2VsZWN0aW9uPW51bGwsdGhpcy5kcm9wZG93bj1udWxsLHRoaXMucmVzdWx0cz1udWxsfSxvLnByb3RvdHlwZS5yZW5kZXI9ZnVuY3Rpb24oKXt2YXIgZT10KCc8c3BhbiBjbGFzcz1cInNlbGVjdDIgc2VsZWN0Mi1jb250YWluZXJcIj48c3BhbiBjbGFzcz1cInNlbGVjdGlvblwiPjwvc3Bhbj48c3BhbiBjbGFzcz1cImRyb3Bkb3duLXdyYXBwZXJcIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L3NwYW4+PC9zcGFuPicpO3JldHVybiBlLmF0dHIoXCJkaXJcIix0aGlzLm9wdGlvbnMuZ2V0KFwiZGlyXCIpKSx0aGlzLiRjb250YWluZXI9ZSx0aGlzLiRjb250YWluZXJbMF0uY2xhc3NMaXN0LmFkZChcInNlbGVjdDItY29udGFpbmVyLS1cIit0aGlzLm9wdGlvbnMuZ2V0KFwidGhlbWVcIikpLHIuU3RvcmVEYXRhKGVbMF0sXCJlbGVtZW50XCIsdGhpcy4kZWxlbWVudCksZX0sb30pLHUuZGVmaW5lKFwianF1ZXJ5LW1vdXNld2hlZWxcIixbXCJqcXVlcnlcIl0sZnVuY3Rpb24oZSl7cmV0dXJuIGV9KSx1LmRlZmluZShcImpxdWVyeS5zZWxlY3QyXCIsW1wianF1ZXJ5XCIsXCJqcXVlcnktbW91c2V3aGVlbFwiLFwiLi9zZWxlY3QyL2NvcmVcIixcIi4vc2VsZWN0Mi9kZWZhdWx0c1wiLFwiLi9zZWxlY3QyL3V0aWxzXCJdLGZ1bmN0aW9uKGksZSxyLHQsbyl7dmFyIGE7cmV0dXJuIG51bGw9PWkuZm4uc2VsZWN0MiYmKGE9W1wib3BlblwiLFwiY2xvc2VcIixcImRlc3Ryb3lcIl0saS5mbi5zZWxlY3QyPWZ1bmN0aW9uKHQpe2lmKFwib2JqZWN0XCI9PXR5cGVvZih0PXR8fHt9KSlyZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uKCl7dmFyIGU9aS5leHRlbmQoITAse30sdCk7bmV3IHIoaSh0aGlzKSxlKX0pLHRoaXM7aWYoXCJzdHJpbmdcIiE9dHlwZW9mIHQpdGhyb3cgbmV3IEVycm9yKFwiSW52YWxpZCBhcmd1bWVudHMgZm9yIFNlbGVjdDI6IFwiK3QpO3ZhciBuLHM9QXJyYXkucHJvdG90eXBlLnNsaWNlLmNhbGwoYXJndW1lbnRzLDEpO3JldHVybiB0aGlzLmVhY2goZnVuY3Rpb24oKXt2YXIgZT1vLkdldERhdGEodGhpcyxcInNlbGVjdDJcIik7bnVsbD09ZSYmd2luZG93LmNvbnNvbGUmJmNvbnNvbGUuZXJyb3ImJmNvbnNvbGUuZXJyb3IoXCJUaGUgc2VsZWN0MignXCIrdCtcIicpIG1ldGhvZCB3YXMgY2FsbGVkIG9uIGFuIGVsZW1lbnQgdGhhdCBpcyBub3QgdXNpbmcgU2VsZWN0Mi5cIiksbj1lW3RdLmFwcGx5KGUscyl9KSwtMTxhLmluZGV4T2YodCk/dGhpczpufSksbnVsbD09aS5mbi5zZWxlY3QyLmRlZmF1bHRzJiYoaS5mbi5zZWxlY3QyLmRlZmF1bHRzPXQpLHJ9KSx7ZGVmaW5lOnUuZGVmaW5lLHJlcXVpcmU6dS5yZXF1aXJlfSk7ZnVuY3Rpb24gYihlLHQpe3JldHVybiBpLmNhbGwoZSx0KX1mdW5jdGlvbiBsKGUsdCl7dmFyIG4scyxpLHIsbyxhLGwsYyx1LGQscD10JiZ0LnNwbGl0KFwiL1wiKSxoPXkubWFwLGY9aCYmaFtcIipcIl18fHt9O2lmKGUpe2Zvcih0PShlPWUuc3BsaXQoXCIvXCIpKS5sZW5ndGgtMSx5Lm5vZGVJZENvbXBhdCYmXy50ZXN0KGVbdF0pJiYoZVt0XT1lW3RdLnJlcGxhY2UoXyxcIlwiKSksXCIuXCI9PT1lWzBdLmNoYXJBdCgwKSYmcCYmKGU9cC5zbGljZSgwLHAubGVuZ3RoLTEpLmNvbmNhdChlKSksYz0wO2M8ZS5sZW5ndGg7YysrKVwiLlwiPT09KGQ9ZVtjXSk/KGUuc3BsaWNlKGMsMSksLS1jKTpcIi4uXCI9PT1kJiYoMD09PWN8fDE9PT1jJiZcIi4uXCI9PT1lWzJdfHxcIi4uXCI9PT1lW2MtMV18fDA8YyYmKGUuc3BsaWNlKGMtMSwyKSxjLT0yKSk7ZT1lLmpvaW4oXCIvXCIpfWlmKChwfHxmKSYmaCl7Zm9yKGM9KG49ZS5zcGxpdChcIi9cIikpLmxlbmd0aDswPGM7LS1jKXtpZihzPW4uc2xpY2UoMCxjKS5qb2luKFwiL1wiKSxwKWZvcih1PXAubGVuZ3RoOzA8dTstLXUpaWYoaT1oW3Auc2xpY2UoMCx1KS5qb2luKFwiL1wiKV0saT1pJiZpW3NdKXtyPWksbz1jO2JyZWFrfWlmKHIpYnJlYWs7IWEmJmYmJmZbc10mJihhPWZbc10sbD1jKX0hciYmYSYmKHI9YSxvPWwpLHImJihuLnNwbGljZSgwLG8sciksZT1uLmpvaW4oXCIvXCIpKX1yZXR1cm4gZX1mdW5jdGlvbiB3KHQsbil7cmV0dXJuIGZ1bmN0aW9uKCl7dmFyIGU9YS5jYWxsKGFyZ3VtZW50cywwKTtyZXR1cm5cInN0cmluZ1wiIT10eXBlb2YgZVswXSYmMT09PWUubGVuZ3RoJiZlLnB1c2gobnVsbCksby5hcHBseShwLGUuY29uY2F0KFt0LG5dKSl9fWZ1bmN0aW9uIHgoZSl7dmFyIHQ7aWYoYihtLGUpJiYodD1tW2VdLGRlbGV0ZSBtW2VdLHZbZV09ITAsci5hcHBseShwLHQpKSwhYihnLGUpJiYhYih2LGUpKXRocm93IG5ldyBFcnJvcihcIk5vIFwiK2UpO3JldHVybiBnW2VdfWZ1bmN0aW9uIGMoZSl7dmFyIHQsbj1lP2UuaW5kZXhPZihcIiFcIik6LTE7cmV0dXJuLTE8biYmKHQ9ZS5zdWJzdHJpbmcoMCxuKSxlPWUuc3Vic3RyaW5nKG4rMSxlLmxlbmd0aCkpLFt0LGVdfWZ1bmN0aW9uIEEoZSl7cmV0dXJuIGU/YyhlKTpbXX12YXIgdT1zLnJlcXVpcmUoXCJqcXVlcnkuc2VsZWN0MlwiKTtyZXR1cm4gdC5mbi5zZWxlY3QyLmFtZD1zLHV9KTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOlsialF1ZXJ5IiwiRXJyb3IiLCIkIiwiQWRtaW5CU0IiLCJvcHRpb25zIiwiY29sb3JzIiwicmVkIiwicGluayIsInB1cnBsZSIsImRlZXBQdXJwbGUiLCJpbmRpZ28iLCJibHVlIiwibGlnaHRCbHVlIiwiY3lhbiIsInRlYWwiLCJncmVlbiIsImxpZ2h0R3JlZW4iLCJsaW1lIiwieWVsbG93IiwiYW1iZXIiLCJvcmFuZ2UiLCJkZWVwT3JhbmdlIiwiYnJvd24iLCJncmV5IiwiYmx1ZUdyZXkiLCJibGFjayIsIndoaXRlIiwibGVmdFNpZGVCYXIiLCJzY3JvbGxDb2xvciIsInNjcm9sbFdpZHRoIiwic2Nyb2xsQWx3YXlzVmlzaWJsZSIsInNjcm9sbEJvcmRlclJhZGl1cyIsInNjcm9sbFJhaWxCb3JkZXJSYWRpdXMiLCJzY3JvbGxBY3RpdmVJdGVtV2hlblBhZ2VMb2FkIiwiYnJlYWtwb2ludFdpZHRoIiwiZHJvcGRvd25NZW51IiwiZWZmZWN0SW4iLCJlZmZlY3RPdXQiLCJhY3RpdmF0ZSIsIl90aGlzIiwiJGJvZHkiLCIkb3ZlcmxheSIsIndpbmRvdyIsImNsaWNrIiwiZSIsIiR0YXJnZXQiLCJ0YXJnZXQiLCJub2RlTmFtZSIsInRvTG93ZXJDYXNlIiwicGFyZW50IiwiaGFzQ2xhc3MiLCJpc09wZW4iLCJwYXJlbnRzIiwibGVuZ3RoIiwiZmFkZU91dCIsInJlbW92ZUNsYXNzIiwiZWFjaCIsImkiLCJ2YWwiLCJuZXh0Iiwic2xpZGVUb2dnbGUiLCIkYWN0aXZlQW5jaG9ycyIsImZpbmQiLCJhZGRDbGFzcyIsInNob3ciLCJvbiIsIiR0aGlzIiwiJGNvbnRlbnQiLCIkbm90Iiwibm90IiwiaXMiLCJwcmV2IiwidG9nZ2xlQ2xhc3MiLCJzbGlkZVVwIiwic2V0TWVudUhlaWdodCIsImNoZWNrU3RhdHVzRm9yUmVzaXplIiwicmVzaXplIiwiaXNGaXJzdFRpbWUiLCJmbiIsInNsaW1TY3JvbGwiLCJjb25maWdzIiwiaGVpZ2h0Iiwib3V0ZXJIZWlnaHQiLCJpbm5lckhlaWdodCIsIiRlbCIsInNsaW1zY3JvbGwiLCJkZXN0cm95IiwiY29sb3IiLCJzaXplIiwiYWx3YXlzVmlzaWJsZSIsImJvcmRlclJhZGl1cyIsInJhaWxCb3JkZXJSYWRpdXMiLCJpdGVtIiwiYWN0aXZlSXRlbU9mZnNldFRvcCIsIm9mZnNldFRvcCIsInNjcm9sbFRvIiwiZmlyc3RUaW1lIiwiJG9wZW5DbG9zZUJhciIsIndpZHRoIiwiZGVsYXkiLCJxdWV1ZSIsImRlcXVldWUiLCJmYWRlSW4iLCJyaWdodFNpZGVCYXIiLCIkc2lkZWJhciIsInJpZ2h0U2lkZUJhcnMiLCIkc2VhcmNoQmFyIiwic2VhcmNoIiwic2hvd1NlYXJjaEJhciIsImhpZGVTZWFyY2hCYXIiLCJrZXlDb2RlIiwiZm9jdXMiLCJuYXZiYXIiLCJpc1Zpc2libGUiLCIkbmF2YmFyQ29sbGFwc2UiLCJyZW1vdmVBdHRyIiwiaW5wdXQiLCIkcGFyZW50U2VsZWN0b3IiLCJjbG9zZXN0IiwiZm9jdXNvdXQiLCJzZWxlY3QiLCJzZWxlY3RwaWNrZXIiLCJkcm9wZG93biIsImRyb3Bkb3duRWZmZWN0IiwiZHJvcGRvd25FZmZlY3RTdGFydCIsImRyb3Bkb3duRWZmZWN0RW5kIiwicHJldmVudERlZmF1bHQiLCJ1ZEVmZmVjdEluIiwiZGF0YSIsInVkRWZmZWN0T3V0IiwidW5kZWZpbmVkIiwiZWZmZWN0VG9TdGFydCIsImNhbGxiYWNrIiwiYW5pbWF0aW9uRW5kIiwib25lIiwiZWRnZSIsImllMTAiLCJpZTExIiwib3BlcmEiLCJmaXJlZm94IiwiY2hyb21lIiwic2FmYXJpIiwiYnJvd3NlciIsImNsYXNzTmFtZSIsImdldENsYXNzTmFtZSIsImdldEJyb3dzZXIiLCJ1c2VyQWdlbnQiLCJuYXZpZ2F0b3IiLCJ0ZXN0IiwibWF0Y2giLCJzZXRUaW1lb3V0IiwiZ2xvYmFsIiwidHJhbnNpdGlvbkVuZCIsImVsIiwiZG9jdW1lbnQiLCJjcmVhdGVFbGVtZW50IiwidHJhbnNFbmRFdmVudE5hbWVzIiwiV2Via2l0VHJhbnNpdGlvbiIsIk1velRyYW5zaXRpb24iLCJPVHJhbnNpdGlvbiIsInRyYW5zaXRpb24iLCJuYW1lIiwic3R5bGUiLCJlbmQiLCJlbXVsYXRlVHJhbnNpdGlvbkVuZCIsImR1cmF0aW9uIiwiY2FsbGVkIiwidHJpZ2dlciIsInN1cHBvcnQiLCJldmVudCIsInNwZWNpYWwiLCJic1RyYW5zaXRpb25FbmQiLCJiaW5kVHlwZSIsImRlbGVnYXRlVHlwZSIsImhhbmRsZSIsImhhbmRsZU9iaiIsImhhbmRsZXIiLCJhcHBseSIsImFyZ3VtZW50cyIsImRpc21pc3MiLCJBbGVydCIsImNsb3NlIiwiVkVSU0lPTiIsIlRSQU5TSVRJT05fRFVSQVRJT04iLCJwcm90b3R5cGUiLCJzZWxlY3RvciIsImF0dHIiLCJyZXBsYWNlIiwiJHBhcmVudCIsIkV2ZW50IiwiaXNEZWZhdWx0UHJldmVudGVkIiwicmVtb3ZlRWxlbWVudCIsImRldGFjaCIsInJlbW92ZSIsIlBsdWdpbiIsIm9wdGlvbiIsImNhbGwiLCJvbGQiLCJhbGVydCIsIkNvbnN0cnVjdG9yIiwibm9Db25mbGljdCIsIkJ1dHRvbiIsImVsZW1lbnQiLCIkZWxlbWVudCIsImV4dGVuZCIsIkRFRkFVTFRTIiwiaXNMb2FkaW5nIiwibG9hZGluZ1RleHQiLCJzZXRTdGF0ZSIsInN0YXRlIiwiZCIsInJlc2V0VGV4dCIsInByb3h5IiwidG9nZ2xlIiwiY2hhbmdlZCIsIiRpbnB1dCIsInByb3AiLCJidXR0b24iLCIkYnRuIiwidHlwZSIsIkNhcm91c2VsIiwiJGluZGljYXRvcnMiLCJwYXVzZWQiLCJzbGlkaW5nIiwiaW50ZXJ2YWwiLCIkYWN0aXZlIiwiJGl0ZW1zIiwia2V5Ym9hcmQiLCJrZXlkb3duIiwicGF1c2UiLCJkb2N1bWVudEVsZW1lbnQiLCJjeWNsZSIsIndyYXAiLCJ0YWdOYW1lIiwid2hpY2giLCJjbGVhckludGVydmFsIiwic2V0SW50ZXJ2YWwiLCJnZXRJdGVtSW5kZXgiLCJjaGlsZHJlbiIsImluZGV4IiwiZ2V0SXRlbUZvckRpcmVjdGlvbiIsImRpcmVjdGlvbiIsImFjdGl2ZSIsImFjdGl2ZUluZGV4Iiwid2lsbFdyYXAiLCJkZWx0YSIsIml0ZW1JbmRleCIsImVxIiwidG8iLCJwb3MiLCJ0aGF0Iiwic2xpZGUiLCIkbmV4dCIsImlzQ3ljbGluZyIsInJlbGF0ZWRUYXJnZXQiLCJzbGlkZUV2ZW50IiwiJG5leHRJbmRpY2F0b3IiLCJzbGlkRXZlbnQiLCJvZmZzZXRXaWR0aCIsImpvaW4iLCJhY3Rpb24iLCJjYXJvdXNlbCIsImNsaWNrSGFuZGxlciIsImhyZWYiLCJzbGlkZUluZGV4IiwiJGNhcm91c2VsIiwiQ29sbGFwc2UiLCIkdHJpZ2dlciIsImlkIiwidHJhbnNpdGlvbmluZyIsImdldFBhcmVudCIsImFkZEFyaWFBbmRDb2xsYXBzZWRDbGFzcyIsImRpbWVuc2lvbiIsImhhc1dpZHRoIiwiYWN0aXZlc0RhdGEiLCJhY3RpdmVzIiwic3RhcnRFdmVudCIsImNvbXBsZXRlIiwic2Nyb2xsU2l6ZSIsImNhbWVsQ2FzZSIsImhpZGUiLCJvZmZzZXRIZWlnaHQiLCJnZXRUYXJnZXRGcm9tVHJpZ2dlciIsImNvbGxhcHNlIiwiYmFja2Ryb3AiLCJEcm9wZG93biIsImNsZWFyTWVudXMiLCJjb250YWlucyIsImlzQWN0aXZlIiwiaW5zZXJ0QWZ0ZXIiLCJzdG9wUHJvcGFnYXRpb24iLCJkZXNjIiwiTW9kYWwiLCJib2R5IiwiJGRpYWxvZyIsIiRiYWNrZHJvcCIsImlzU2hvd24iLCJvcmlnaW5hbEJvZHlQYWQiLCJzY3JvbGxiYXJXaWR0aCIsImlnbm9yZUJhY2tkcm9wQ2xpY2siLCJyZW1vdGUiLCJsb2FkIiwiQkFDS0RST1BfVFJBTlNJVElPTl9EVVJBVElPTiIsIl9yZWxhdGVkVGFyZ2V0IiwiY2hlY2tTY3JvbGxiYXIiLCJzZXRTY3JvbGxiYXIiLCJlc2NhcGUiLCJhcHBlbmRUbyIsInNjcm9sbFRvcCIsImFkanVzdERpYWxvZyIsImVuZm9yY2VGb2N1cyIsIm9mZiIsImhpZGVNb2RhbCIsImhhcyIsImhhbmRsZVVwZGF0ZSIsInJlc2V0QWRqdXN0bWVudHMiLCJyZXNldFNjcm9sbGJhciIsInJlbW92ZUJhY2tkcm9wIiwiYW5pbWF0ZSIsImRvQW5pbWF0ZSIsImN1cnJlbnRUYXJnZXQiLCJjYWxsYmFja1JlbW92ZSIsIm1vZGFsSXNPdmVyZmxvd2luZyIsInNjcm9sbEhlaWdodCIsImNsaWVudEhlaWdodCIsImNzcyIsInBhZGRpbmdMZWZ0IiwiYm9keUlzT3ZlcmZsb3dpbmciLCJwYWRkaW5nUmlnaHQiLCJmdWxsV2luZG93V2lkdGgiLCJpbm5lcldpZHRoIiwiZG9jdW1lbnRFbGVtZW50UmVjdCIsImdldEJvdW5kaW5nQ2xpZW50UmVjdCIsInJpZ2h0IiwiTWF0aCIsImFicyIsImxlZnQiLCJjbGllbnRXaWR0aCIsIm1lYXN1cmVTY3JvbGxiYXIiLCJib2R5UGFkIiwicGFyc2VJbnQiLCJzY3JvbGxEaXYiLCJhcHBlbmQiLCJyZW1vdmVDaGlsZCIsIm1vZGFsIiwic2hvd0V2ZW50IiwiVG9vbHRpcCIsImVuYWJsZWQiLCJ0aW1lb3V0IiwiaG92ZXJTdGF0ZSIsImluU3RhdGUiLCJpbml0IiwiYW5pbWF0aW9uIiwicGxhY2VtZW50IiwidGVtcGxhdGUiLCJ0aXRsZSIsImh0bWwiLCJjb250YWluZXIiLCJ2aWV3cG9ydCIsInBhZGRpbmciLCJnZXRPcHRpb25zIiwiJHZpZXdwb3J0IiwiaXNGdW5jdGlvbiIsImhvdmVyIiwiY29uc3RydWN0b3IiLCJ0cmlnZ2VycyIsInNwbGl0IiwiZXZlbnRJbiIsImV2ZW50T3V0IiwiZW50ZXIiLCJsZWF2ZSIsIl9vcHRpb25zIiwiZml4VGl0bGUiLCJnZXREZWZhdWx0cyIsImdldERlbGVnYXRlT3B0aW9ucyIsImRlZmF1bHRzIiwia2V5IiwidmFsdWUiLCJvYmoiLCJzZWxmIiwidGlwIiwiY2xlYXJUaW1lb3V0IiwiaXNJblN0YXRlVHJ1ZSIsImhhc0NvbnRlbnQiLCJpbkRvbSIsIm93bmVyRG9jdW1lbnQiLCIkdGlwIiwidGlwSWQiLCJnZXRVSUQiLCJzZXRDb250ZW50IiwiYXV0b1Rva2VuIiwiYXV0b1BsYWNlIiwidG9wIiwiZGlzcGxheSIsImdldFBvc2l0aW9uIiwiYWN0dWFsV2lkdGgiLCJhY3R1YWxIZWlnaHQiLCJvcmdQbGFjZW1lbnQiLCJ2aWV3cG9ydERpbSIsImJvdHRvbSIsImNhbGN1bGF0ZWRPZmZzZXQiLCJnZXRDYWxjdWxhdGVkT2Zmc2V0IiwiYXBwbHlQbGFjZW1lbnQiLCJwcmV2SG92ZXJTdGF0ZSIsIm9mZnNldCIsIm1hcmdpblRvcCIsIm1hcmdpbkxlZnQiLCJpc05hTiIsInNldE9mZnNldCIsInVzaW5nIiwicHJvcHMiLCJyb3VuZCIsImdldFZpZXdwb3J0QWRqdXN0ZWREZWx0YSIsImlzVmVydGljYWwiLCJhcnJvd0RlbHRhIiwiYXJyb3dPZmZzZXRQb3NpdGlvbiIsInJlcGxhY2VBcnJvdyIsImFycm93IiwiZ2V0VGl0bGUiLCIkZSIsImlzQm9keSIsImVsUmVjdCIsImVsT2Zmc2V0Iiwic2Nyb2xsIiwib3V0ZXJEaW1zIiwidmlld3BvcnRQYWRkaW5nIiwidmlld3BvcnREaW1lbnNpb25zIiwidG9wRWRnZU9mZnNldCIsImJvdHRvbUVkZ2VPZmZzZXQiLCJsZWZ0RWRnZU9mZnNldCIsInJpZ2h0RWRnZU9mZnNldCIsIm8iLCJwcmVmaXgiLCJyYW5kb20iLCJnZXRFbGVtZW50QnlJZCIsIiRhcnJvdyIsImVuYWJsZSIsImRpc2FibGUiLCJ0b2dnbGVFbmFibGVkIiwicmVtb3ZlRGF0YSIsInRvb2x0aXAiLCJQb3BvdmVyIiwiY29udGVudCIsImdldENvbnRlbnQiLCJwb3BvdmVyIiwiU2Nyb2xsU3B5IiwiJHNjcm9sbEVsZW1lbnQiLCJvZmZzZXRzIiwidGFyZ2V0cyIsImFjdGl2ZVRhcmdldCIsInByb2Nlc3MiLCJyZWZyZXNoIiwiZ2V0U2Nyb2xsSGVpZ2h0IiwibWF4Iiwib2Zmc2V0TWV0aG9kIiwib2Zmc2V0QmFzZSIsImlzV2luZG93IiwibWFwIiwiJGhyZWYiLCJzb3J0IiwiYSIsImIiLCJwdXNoIiwibWF4U2Nyb2xsIiwiY2xlYXIiLCJwYXJlbnRzVW50aWwiLCJzY3JvbGxzcHkiLCIkc3B5IiwiVGFiIiwiJHVsIiwiJHByZXZpb3VzIiwiaGlkZUV2ZW50IiwidGFiIiwiQWZmaXgiLCJjaGVja1Bvc2l0aW9uIiwiY2hlY2tQb3NpdGlvbldpdGhFdmVudExvb3AiLCJhZmZpeGVkIiwidW5waW4iLCJwaW5uZWRPZmZzZXQiLCJSRVNFVCIsImdldFN0YXRlIiwib2Zmc2V0Qm90dG9tIiwicG9zaXRpb24iLCJ0YXJnZXRIZWlnaHQiLCJpbml0aWFsaXppbmciLCJjb2xsaWRlclRvcCIsImNvbGxpZGVySGVpZ2h0IiwiZ2V0UGlubmVkT2Zmc2V0IiwiYWZmaXgiLCJhZmZpeFR5cGUiLCJ0YmxUb0V4Y2VsIiwiZWxtIiwidGFibGVUb0V4Y2VsIiwidXJpIiwiYmFzZTY0IiwicyIsImJ0b2EiLCJ1bmVzY2FwZSIsImVuY29kZVVSSUNvbXBvbmVudCIsImZvcm1hdCIsImMiLCJtIiwicCIsInRhYmxlIiwibm9kZVR5cGUiLCJjdHgiLCJ3b3Jrc2hlZXQiLCJpbm5lckhUTUwiLCJsb2NhdGlvbiIsInhsIiwibiIsImRlZmluZSIsImFtZCIsIm1vZHVsZSIsImV4cG9ydHMiLCJ0IiwicmVxdWlyZSIsInIiLCJoIiwiZiIsImciLCJ5IiwidiIsIl8iLCJ1Iiwic2VsZWN0MiIsInJlcXVpcmVqcyIsIk9iamVjdCIsImhhc093blByb3BlcnR5Iiwic2xpY2UiLCJ4IiwibCIsIm5vcm1hbGl6ZSIsInByIiwidyIsImNvbmZpZyIsIkEiLCJzcGxpY2UiLCJkZXBzIiwiX2RlZmluZWQiLCJjb25zb2xlIiwiZXJyb3IiLCJFeHRlbmQiLCJfX3N1cGVyX18iLCJEZWNvcmF0ZSIsIkFycmF5IiwidW5zaGlmdCIsImRpc3BsYXlOYW1lIiwibGlzdGVuZXJzIiwiX3R5cGUiLCJpbnZva2UiLCJPYnNlcnZhYmxlIiwiZ2VuZXJhdGVDaGFycyIsImZsb29yIiwidG9TdHJpbmciLCJiaW5kIiwiX2NvbnZlcnREYXRhIiwic3Vic3RyaW5nIiwiaGFzU2Nyb2xsIiwib3ZlcmZsb3dYIiwib3ZlcmZsb3dZIiwiZXNjYXBlTWFya3VwIiwiU3RyaW5nIiwiX19jYWNoZSIsIkdldFVuaXF1ZUVsZW1lbnRJZCIsImdldEF0dHJpYnV0ZSIsInNldEF0dHJpYnV0ZSIsIlN0b3JlRGF0YSIsIkdldERhdGEiLCJSZW1vdmVEYXRhIiwicmVtb3ZlQXR0cmlidXRlIiwiY29weU5vbkludGVybmFsQ3NzQ2xhc3NlcyIsInRyaW0iLCJmaWx0ZXIiLCJpbmRleE9mIiwiY29uY2F0IiwicmVuZGVyIiwiZ2V0IiwiJHJlc3VsdHMiLCJlbXB0eSIsImRpc3BsYXlNZXNzYWdlIiwiaGlkZUxvYWRpbmciLCJtZXNzYWdlIiwiYXJncyIsImhpZGVNZXNzYWdlcyIsInJlc3VsdHMiLCJoaWdobGlnaHRGaXJzdEl0ZW0iLCJmaXJzdCIsImVuc3VyZUhpZ2hsaWdodFZpc2libGUiLCJzZXRDbGFzc2VzIiwiY3VycmVudCIsInNlbGVjdGVkIiwiY2xhc3NMaXN0IiwiYWRkIiwic2hvd0xvYWRpbmciLCJkaXNhYmxlZCIsImxvYWRpbmciLCJ0ZXh0IiwicHJlcGVuZCIsInJvbGUiLCJFbGVtZW50IiwibWF0Y2hlcyIsIm1zTWF0Y2hlc1NlbGVjdG9yIiwid2Via2l0TWF0Y2hlc1NlbGVjdG9yIiwiX3Jlc3VsdElkIiwiZ2V0SGlnaGxpZ2h0ZWRSZXN1bHRzIiwibW91c2V3aGVlbCIsImRlbHRhWSIsIm9yaWdpbmFsRXZlbnQiLCJCQUNLU1BBQ0UiLCJUQUIiLCJFTlRFUiIsIlNISUZUIiwiQ1RSTCIsIkFMVCIsIkVTQyIsIlNQQUNFIiwiUEFHRV9VUCIsIlBBR0VfRE9XTiIsIkVORCIsIkhPTUUiLCJMRUZUIiwiVVAiLCJSSUdIVCIsIkRPV04iLCJERUxFVEUiLCJfdGFiaW5kZXgiLCIkc2VsZWN0aW9uIiwiX2hhbmRsZUJsdXIiLCJ1cGRhdGUiLCJfYXR0YWNoQ2xvc2VIYW5kbGVyIiwiX2RldGFjaENsb3NlSGFuZGxlciIsImFjdGl2ZUVsZW1lbnQiLCJpc0VuYWJsZWQiLCJpc0Rpc2FibGVkIiwic2VsZWN0aW9uQ29udGFpbmVyIiwicGxhY2Vob2xkZXIiLCJub3JtYWxpemVQbGFjZWhvbGRlciIsImNyZWF0ZVBsYWNlaG9sZGVyIiwiX2hhbmRsZUNsZWFyIiwiX2hhbmRsZUtleWJvYXJkQ2xlYXIiLCJwcmV2ZW50ZWQiLCIkc2VhcmNoQ29udGFpbmVyIiwiJHNlYXJjaCIsIl90cmFuc2ZlclRhYkluZGV4IiwicmVzaXplU2VhcmNoIiwiX2tleVVwUHJldmVudGVkIiwibGFzdCIsInNlYXJjaFJlbW92ZUNob2ljZSIsImRvY3VtZW50TW9kZSIsImhhbmRsZVNlYXJjaCIsInRlcm0iLCJwYXJhbXMiLCJkaWN0IiwiYWxsIiwiX2NhY2hlIiwibG9hZFBhdGgiLCJxdWVyeSIsImdlbmVyYXRlUmVzdWx0SWQiLCJxdWVyeVNlbGVjdG9yQWxsIiwidW5zZWxlY3QiLCJhZGRPcHRpb25zIiwibGFiZWwiLCJ0ZXh0Q29udGVudCIsImlubmVyVGV4dCIsIl9ub3JtYWxpemVJdGVtIiwiX2RhdGFUb0NvbnZlcnQiLCJjb252ZXJ0VG9PcHRpb25zIiwicmVwbGFjZVdpdGgiLCJhamF4T3B0aW9ucyIsIl9hcHBseURlZmF1bHRzIiwicHJvY2Vzc1Jlc3VsdHMiLCJxIiwidHJhbnNwb3J0IiwiYWpheCIsInRoZW4iLCJmYWlsIiwiX3JlcXVlc3QiLCJhYm9ydCIsImlzQXJyYXkiLCJzdGF0dXMiLCJ1cmwiLCJfcXVlcnlUaW1lb3V0IiwiY3JlYXRlVGFnIiwiaW5zZXJ0VGFnIiwiX3JlbW92ZU9sZFRhZ3MiLCJwYWdlIiwidG9VcHBlckNhc2UiLCJ0b2tlbml6ZXIiLCJzZWxlY3Rpb24iLCJzdWJzdHIiLCJtaW5pbXVtSW5wdXRMZW5ndGgiLCJtaW5pbXVtIiwibWF4aW11bUlucHV0TGVuZ3RoIiwibWF4aW11bSIsIm1heGltdW1TZWxlY3Rpb25MZW5ndGgiLCJfY2hlY2tJZk1heGltdW1TZWxlY3RlZCIsIiRkcm9wZG93biIsInNob3dTZWFyY2giLCJyZW1vdmVQbGFjZWhvbGRlciIsImxhc3RQYXJhbXMiLCIkbG9hZGluZ01vcmUiLCJjcmVhdGVMb2FkaW5nTW9yZSIsInNob3dMb2FkaW5nTW9yZSIsImxvYWRNb3JlSWZOZWVkZWQiLCJsb2FkTW9yZSIsInBhZ2luYXRpb24iLCJtb3JlIiwiJGRyb3Bkb3duUGFyZW50IiwiX3Nob3dEcm9wZG93biIsIl9hdHRhY2hQb3NpdGlvbmluZ0hhbmRsZXIiLCJfYmluZENvbnRhaW5lclJlc3VsdEhhbmRsZXJzIiwiX2hpZGVEcm9wZG93biIsIl9kZXRhY2hQb3NpdGlvbmluZ0hhbmRsZXIiLCIkZHJvcGRvd25Db250YWluZXIiLCIkY29udGFpbmVyIiwiX2NvbnRhaW5lclJlc3VsdHNIYW5kbGVyc0JvdW5kIiwiX3Bvc2l0aW9uRHJvcGRvd24iLCJfcmVzaXplRHJvcGRvd24iLCJzY3JvbGxMZWZ0Iiwib2Zmc2V0UGFyZW50IiwiaXNDb25uZWN0ZWQiLCJvdXRlcldpZHRoIiwibWluV2lkdGgiLCJtaW5pbXVtUmVzdWx0c0ZvclNlYXJjaCIsIl9oYW5kbGVTZWxlY3RPbkNsb3NlIiwib3JpZ2luYWxTZWxlY3QyRXZlbnQiLCJfc2VsZWN0VHJpZ2dlcmVkIiwiY3RybEtleSIsIm1ldGFLZXkiLCJlcnJvckxvYWRpbmciLCJpbnB1dFRvb0xvbmciLCJpbnB1dFRvb1Nob3J0IiwibG9hZGluZ01vcmUiLCJtYXhpbXVtU2VsZWN0ZWQiLCJub1Jlc3VsdHMiLCJzZWFyY2hpbmciLCJyZW1vdmVBbGxJdGVtcyIsInJlbW92ZUl0ZW0iLCJEIiwiUyIsIkUiLCJPIiwiQyIsIkwiLCJUIiwiSSIsInJlc2V0IiwiZGF0YUFkYXB0ZXIiLCJ0YWdzIiwidG9rZW5TZXBhcmF0b3JzIiwicmVzdWx0c0FkYXB0ZXIiLCJzZWxlY3RPbkNsb3NlIiwiZHJvcGRvd25BZGFwdGVyIiwibXVsdGlwbGUiLCJjbG9zZU9uU2VsZWN0IiwiZHJvcGRvd25Dc3NDbGFzcyIsInNlbGVjdGlvbkFkYXB0ZXIiLCJhbGxvd0NsZWFyIiwic2VsZWN0aW9uQ3NzQ2xhc3MiLCJsYW5ndWFnZSIsIl9yZXNvbHZlTGFuZ3VhZ2UiLCJ0cmFuc2xhdGlvbnMiLCJfcHJvY2Vzc1RyYW5zbGF0aW9ucyIsImRlYnVnIiwiYW1kTGFuZ3VhZ2VCYXNlIiwiYXV0b2NvbXBsZXRlIiwiZHJvcGRvd25BdXRvV2lkdGgiLCJtYXRjaGVyIiwic2Nyb2xsQWZ0ZXJTZWxlY3QiLCJzb3J0ZXIiLCJ0ZW1wbGF0ZVJlc3VsdCIsInRlbXBsYXRlU2VsZWN0aW9uIiwidGhlbWUiLCJhcHBseUZyb21FbGVtZW50IiwiaXNFbXB0eU9iamVjdCIsImlzUGxhaW5PYmplY3QiLCJ3YXJuIiwic2V0IiwiZnJvbUVsZW1lbnQiLCJkaXIiLCJhdHRyaWJ1dGVzIiwianF1ZXJ5IiwiZGF0YXNldCIsIl9nZW5lcmF0ZUlkIiwiX3BsYWNlQ29udGFpbmVyIiwiX2JpbmRBZGFwdGVycyIsIl9yZWdpc3RlckRvbUV2ZW50cyIsIl9yZWdpc3RlckRhdGFFdmVudHMiLCJfcmVnaXN0ZXJTZWxlY3Rpb25FdmVudHMiLCJfcmVnaXN0ZXJEcm9wZG93bkV2ZW50cyIsIl9yZWdpc3RlclJlc3VsdHNFdmVudHMiLCJfcmVnaXN0ZXJFdmVudHMiLCJfc3luY0F0dHJpYnV0ZXMiLCJfcmVzb2x2ZVdpZHRoIiwiZ2V0Q29tcHV0ZWRTdHlsZSIsIl9zeW5jQSIsIl9zeW5jUyIsIl9zeW5jU3VidHJlZSIsIl9vYnNlcnZlciIsIk11dGF0aW9uT2JzZXJ2ZXIiLCJvYnNlcnZlIiwiY2hpbGRMaXN0Iiwic3VidHJlZSIsInRvZ2dsZURyb3Bkb3duIiwiYWx0S2V5Iiwib3BlbiIsIl9pc0NoYW5nZU11dGF0aW9uIiwiYWRkZWROb2RlcyIsInJlbW92ZWROb2RlcyIsInNvbWUiLCJoYXNGb2N1cyIsImRpc2Nvbm5lY3QiLCJub2RlSWRDb21wYXQiLCJjaGFyQXQiXSwic291cmNlUm9vdCI6IiJ9