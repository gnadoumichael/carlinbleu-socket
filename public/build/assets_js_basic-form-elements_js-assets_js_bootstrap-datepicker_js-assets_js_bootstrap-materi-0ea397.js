(self["webpackChunk"] = self["webpackChunk"] || []).push([["assets_js_basic-form-elements_js-assets_js_bootstrap-datepicker_js-assets_js_bootstrap-materi-0ea397"],{

/***/ "./assets/js/autosize.js":
/*!*******************************!*\
  !*** ./assets/js/autosize.js ***!
  \*******************************/
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;__webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.set.js */ "./node_modules/core-js/modules/es.set.js");
__webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
__webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
__webpack_require__(/*! core-js/modules/es.array.splice.js */ "./node_modules/core-js/modules/es.array.splice.js");
__webpack_require__(/*! core-js/modules/es.parse-float.js */ "./node_modules/core-js/modules/es.parse-float.js");
__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
__webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
__webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");
(function (global, factory) {
  if (true) {
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [exports, module], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else { var mod; }
})(this, function (exports, module) {
  'use strict';

  var set = typeof Set === 'function' ? new Set() : function () {
    var list = [];
    return {
      has: function has(key) {
        return Boolean(list.indexOf(key) > -1);
      },
      add: function add(key) {
        list.push(key);
      },
      'delete': function _delete(key) {
        list.splice(list.indexOf(key), 1);
      }
    };
  }();
  var createEvent = function createEvent(name) {
    return new Event(name);
  };
  try {
    new Event('test');
  } catch (e) {
    // IE does not support `new Event()`
    createEvent = function createEvent(name) {
      var evt = document.createEvent('Event');
      evt.initEvent(name, true, false);
      return evt;
    };
  }
  function assign(ta) {
    if (!ta || !ta.nodeName || ta.nodeName !== 'TEXTAREA' || set.has(ta)) return;
    var heightOffset = null;
    var clientWidth = ta.clientWidth;
    var cachedHeight = null;
    function init() {
      var style = window.getComputedStyle(ta, null);
      if (style.resize === 'vertical') {
        ta.style.resize = 'none';
      } else if (style.resize === 'both') {
        ta.style.resize = 'horizontal';
      }
      if (style.boxSizing === 'content-box') {
        heightOffset = -(parseFloat(style.paddingTop) + parseFloat(style.paddingBottom));
      } else {
        heightOffset = parseFloat(style.borderTopWidth) + parseFloat(style.borderBottomWidth);
      }
      // Fix when a textarea is not on document body and heightOffset is Not a Number
      if (isNaN(heightOffset)) {
        heightOffset = 0;
      }
      update();
    }
    function changeOverflow(value) {
      {
        // Chrome/Safari-specific fix:
        // When the textarea y-overflow is hidden, Chrome/Safari do not reflow the text to account for the space
        // made available by removing the scrollbar. The following forces the necessary text reflow.
        var width = ta.style.width;
        ta.style.width = '0px';
        // Force reflow:
        /* jshint ignore:start */
        ta.offsetWidth;
        /* jshint ignore:end */
        ta.style.width = width;
      }
      ta.style.overflowY = value;
      resize();
    }
    function getParentOverflows(el) {
      var arr = [];
      while (el && el.parentNode && el.parentNode instanceof Element) {
        if (el.parentNode.scrollTop) {
          arr.push({
            node: el.parentNode,
            scrollTop: el.parentNode.scrollTop
          });
        }
        el = el.parentNode;
      }
      return arr;
    }
    function resize() {
      var originalHeight = ta.style.height;
      var overflows = getParentOverflows(ta);
      var docTop = document.documentElement && document.documentElement.scrollTop; // Needed for Mobile IE (ticket #240)

      ta.style.height = 'auto';
      var endHeight = ta.scrollHeight + heightOffset;
      if (ta.scrollHeight === 0) {
        // If the scrollHeight is 0, then the element probably has display:none or is detached from the DOM.
        ta.style.height = originalHeight;
        return;
      }
      ta.style.height = endHeight + 'px';

      // used to check if an update is actually necessary on window.resize
      clientWidth = ta.clientWidth;

      // prevents scroll-position jumping
      overflows.forEach(function (el) {
        el.node.scrollTop = el.scrollTop;
      });
      if (docTop) {
        document.documentElement.scrollTop = docTop;
      }
    }
    function update() {
      resize();
      var computed = window.getComputedStyle(ta, null);
      var computedHeight = Math.round(parseFloat(computed.height));
      var styleHeight = Math.round(parseFloat(ta.style.height));

      // The computed height not matching the height set via resize indicates that
      // the max-height has been exceeded, in which case the overflow should be set to visible.
      if (computedHeight !== styleHeight) {
        if (computed.overflowY !== 'visible') {
          changeOverflow('visible');
        }
      } else {
        // Normally keep overflow set to hidden, to avoid flash of scrollbar as the textarea expands.
        if (computed.overflowY !== 'hidden') {
          changeOverflow('hidden');
        }
      }
      if (cachedHeight !== computedHeight) {
        cachedHeight = computedHeight;
        var evt = createEvent('autosize:resized');
        ta.dispatchEvent(evt);
      }
    }
    var pageResize = function pageResize() {
      if (ta.clientWidth !== clientWidth) {
        update();
      }
    };
    var destroy = function (style) {
      window.removeEventListener('resize', pageResize, false);
      ta.removeEventListener('input', update, false);
      ta.removeEventListener('keyup', update, false);
      ta.removeEventListener('autosize:destroy', destroy, false);
      ta.removeEventListener('autosize:update', update, false);
      set['delete'](ta);
      Object.keys(style).forEach(function (key) {
        ta.style[key] = style[key];
      });
    }.bind(ta, {
      height: ta.style.height,
      resize: ta.style.resize,
      overflowY: ta.style.overflowY,
      overflowX: ta.style.overflowX,
      wordWrap: ta.style.wordWrap
    });
    ta.addEventListener('autosize:destroy', destroy, false);

    // IE9 does not fire onpropertychange or oninput for deletions,
    // so binding to onkeyup to catch most of those events.
    // There is no way that I know of to detect something like 'cut' in IE9.
    if ('onpropertychange' in ta && 'oninput' in ta) {
      ta.addEventListener('keyup', update, false);
    }
    window.addEventListener('resize', pageResize, false);
    ta.addEventListener('input', update, false);
    ta.addEventListener('autosize:update', update, false);
    set.add(ta);
    ta.style.overflowX = 'hidden';
    ta.style.wordWrap = 'break-word';
    init();
  }
  function destroy(ta) {
    if (!(ta && ta.nodeName && ta.nodeName === 'TEXTAREA')) return;
    var evt = createEvent('autosize:destroy');
    ta.dispatchEvent(evt);
  }
  function update(ta) {
    if (!(ta && ta.nodeName && ta.nodeName === 'TEXTAREA')) return;
    var evt = createEvent('autosize:update');
    ta.dispatchEvent(evt);
  }
  var autosize = null;

  // Do nothing in Node.js environment and IE8 (or lower)
  if (typeof window === 'undefined' || typeof window.getComputedStyle !== 'function') {
    autosize = function autosize(el) {
      return el;
    };
    autosize.destroy = function (el) {
      return el;
    };
    autosize.update = function (el) {
      return el;
    };
  } else {
    autosize = function autosize(el, options) {
      if (el) {
        Array.prototype.forEach.call(el.length ? el : [el], function (x) {
          return assign(x, options);
        });
      }
      return el;
    };
    autosize.destroy = function (el) {
      if (el) {
        Array.prototype.forEach.call(el.length ? el : [el], destroy);
      }
      return el;
    };
    autosize.update = function (el) {
      if (el) {
        Array.prototype.forEach.call(el.length ? el : [el], update);
      }
      return el;
    };
  }
  module.exports = autosize;
});

/***/ }),

/***/ "./assets/js/basic-form-elements.js":
/*!******************************************!*\
  !*** ./assets/js/basic-form-elements.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _autosize__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./autosize */ "./assets/js/autosize.js");
/* harmony import */ var _autosize__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_autosize__WEBPACK_IMPORTED_MODULE_0__);

$(function () {
  //Textarea auto growth
  _autosize__WEBPACK_IMPORTED_MODULE_0___default()($('textarea.auto-growth'));

  //Datetimepicker plugin
  $('.datetimepicker').bootstrapMaterialDatePicker({
    format: 'dddd DD MMMM YYYY - HH:mm',
    clearButton: true,
    weekStart: 1
  });
  $('.datepicker').bootstrapMaterialDatePicker({
    format: 'dddd DD MMMM YYYY',
    clearButton: true,
    weekStart: 1,
    time: false
  });
  $('.timepicker').bootstrapMaterialDatePicker({
    format: 'HH:mm',
    clearButton: true,
    date: false
  });

  //Bootstrap datepicker plugin
  $('#bs_datepicker_container input').datepicker({
    autoclose: true,
    container: '#bs_datepicker_container'
  });
  $('#bs_datepicker_component_container').datepicker({
    autoclose: true,
    container: '#bs_datepicker_component_container'
  });
  //
  $('#bs_datepicker_range_container').datepicker({
    autoclose: true,
    container: '#bs_datepicker_range_container'
  });
});

/***/ }),

/***/ "./assets/js/bootstrap-datepicker.js":
/*!*******************************************!*\
  !*** ./assets/js/bootstrap-datepicker.js ***!
  \*******************************************/
/***/ ((module, exports, __webpack_require__) => {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;__webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
__webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
__webpack_require__(/*! core-js/modules/es.array.splice.js */ "./node_modules/core-js/modules/es.array.splice.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
__webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
__webpack_require__(/*! core-js/modules/es.string.split.js */ "./node_modules/core-js/modules/es.string.split.js");
__webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
__webpack_require__(/*! core-js/modules/es.string.match.js */ "./node_modules/core-js/modules/es.string.match.js");
__webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
__webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
__webpack_require__(/*! core-js/modules/es.array.fill.js */ "./node_modules/core-js/modules/es.array.fill.js");
__webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
__webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
__webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
__webpack_require__(/*! core-js/modules/es.regexp.constructor.js */ "./node_modules/core-js/modules/es.regexp.constructor.js");
__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
__webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
__webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
__webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
__webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
/*!
 * Datepicker for Bootstrap v1.8.0 (https://github.com/uxsolutions/bootstrap-datepicker)
 *
 * Licensed under the Apache License v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 */

(function (factory) {
  if (true) {
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
})(function ($, undefined) {
  function UTCDate() {
    return new Date(Date.UTC.apply(Date, arguments));
  }
  function UTCToday() {
    var today = new Date();
    return UTCDate(today.getFullYear(), today.getMonth(), today.getDate());
  }
  function isUTCEquals(date1, date2) {
    return date1.getUTCFullYear() === date2.getUTCFullYear() && date1.getUTCMonth() === date2.getUTCMonth() && date1.getUTCDate() === date2.getUTCDate();
  }
  function alias(method, deprecationMsg) {
    return function () {
      if (deprecationMsg !== undefined) {
        $.fn.datepicker.deprecated(deprecationMsg);
      }
      return this[method].apply(this, arguments);
    };
  }
  function isValidDate(d) {
    return d && !isNaN(d.getTime());
  }
  var DateArray = function () {
    var extras = {
      get: function get(i) {
        return this.slice(i)[0];
      },
      contains: function contains(d) {
        // Array.indexOf is not cross-browser;
        // $.inArray doesn't work with Dates
        var val = d && d.valueOf();
        for (var i = 0, l = this.length; i < l; i++)
        // Use date arithmetic to allow dates with different times to match
        if (0 <= this[i].valueOf() - val && this[i].valueOf() - val < 1000 * 60 * 60 * 24) return i;
        return -1;
      },
      remove: function remove(i) {
        this.splice(i, 1);
      },
      replace: function replace(new_array) {
        if (!new_array) return;
        if (!$.isArray(new_array)) new_array = [new_array];
        this.clear();
        this.push.apply(this, new_array);
      },
      clear: function clear() {
        this.length = 0;
      },
      copy: function copy() {
        var a = new DateArray();
        a.replace(this);
        return a;
      }
    };
    return function () {
      var a = [];
      a.push.apply(a, arguments);
      $.extend(a, extras);
      return a;
    };
  }();

  // Picker object

  var Datepicker = function Datepicker(element, options) {
    $.data(element, 'datepicker', this);
    this._process_options(options);
    this.dates = new DateArray();
    this.viewDate = this.o.defaultViewDate;
    this.focusDate = null;
    this.element = $(element);
    this.isInput = this.element.is('input');
    this.inputField = this.isInput ? this.element : this.element.find('input');
    this.component = this.element.hasClass('date') ? this.element.find('.add-on, .input-group-addon, .btn') : false;
    if (this.component && this.component.length === 0) this.component = false;
    this.isInline = !this.component && this.element.is('div');
    this.picker = $(DPGlobal.template);

    // Checking templates and inserting
    if (this._check_template(this.o.templates.leftArrow)) {
      this.picker.find('.prev').html(this.o.templates.leftArrow);
    }
    if (this._check_template(this.o.templates.rightArrow)) {
      this.picker.find('.next').html(this.o.templates.rightArrow);
    }
    this._buildEvents();
    this._attachEvents();
    if (this.isInline) {
      this.picker.addClass('datepicker-inline').appendTo(this.element);
    } else {
      this.picker.addClass('datepicker-dropdown dropdown-menu');
    }
    if (this.o.rtl) {
      this.picker.addClass('datepicker-rtl');
    }
    if (this.o.calendarWeeks) {
      this.picker.find('.datepicker-days .datepicker-switch, thead .datepicker-title, tfoot .today, tfoot .clear').attr('colspan', function (i, val) {
        return Number(val) + 1;
      });
    }
    this._process_options({
      startDate: this._o.startDate,
      endDate: this._o.endDate,
      daysOfWeekDisabled: this.o.daysOfWeekDisabled,
      daysOfWeekHighlighted: this.o.daysOfWeekHighlighted,
      datesDisabled: this.o.datesDisabled
    });
    this._allow_update = false;
    this.setViewMode(this.o.startView);
    this._allow_update = true;
    this.fillDow();
    this.fillMonths();
    this.update();
    if (this.isInline) {
      this.show();
    }
  };
  Datepicker.prototype = {
    constructor: Datepicker,
    _resolveViewName: function _resolveViewName(view) {
      $.each(DPGlobal.viewModes, function (i, viewMode) {
        if (view === i || $.inArray(view, viewMode.names) !== -1) {
          view = i;
          return false;
        }
      });
      return view;
    },
    _resolveDaysOfWeek: function _resolveDaysOfWeek(daysOfWeek) {
      if (!$.isArray(daysOfWeek)) daysOfWeek = daysOfWeek.split(/[,\s]*/);
      return $.map(daysOfWeek, Number);
    },
    _check_template: function _check_template(tmp) {
      try {
        // If empty
        if (tmp === undefined || tmp === "") {
          return false;
        }
        // If no html, everything ok
        if ((tmp.match(/[<>]/g) || []).length <= 0) {
          return true;
        }
        // Checking if html is fine
        var jDom = $(tmp);
        return jDom.length > 0;
      } catch (ex) {
        return false;
      }
    },
    _process_options: function _process_options(opts) {
      // Store raw options for reference
      this._o = $.extend({}, this._o, opts);
      // Processed options
      var o = this.o = $.extend({}, this._o);

      // Check if "de-DE" style date is available, if not language should
      // fallback to 2 letter code eg "de"
      var lang = o.language;
      if (!dates[lang]) {
        lang = lang.split('-')[0];
        if (!dates[lang]) lang = defaults.language;
      }
      o.language = lang;

      // Retrieve view index from any aliases
      o.startView = this._resolveViewName(o.startView);
      o.minViewMode = this._resolveViewName(o.minViewMode);
      o.maxViewMode = this._resolveViewName(o.maxViewMode);

      // Check view is between min and max
      o.startView = Math.max(this.o.minViewMode, Math.min(this.o.maxViewMode, o.startView));

      // true, false, or Number > 0
      if (o.multidate !== true) {
        o.multidate = Number(o.multidate) || false;
        if (o.multidate !== false) o.multidate = Math.max(0, o.multidate);
      }
      o.multidateSeparator = String(o.multidateSeparator);
      o.weekStart %= 7;
      o.weekEnd = (o.weekStart + 6) % 7;
      var format = DPGlobal.parseFormat(o.format);
      if (o.startDate !== -Infinity) {
        if (!!o.startDate) {
          if (o.startDate instanceof Date) o.startDate = this._local_to_utc(this._zero_time(o.startDate));else o.startDate = DPGlobal.parseDate(o.startDate, format, o.language, o.assumeNearbyYear);
        } else {
          o.startDate = -Infinity;
        }
      }
      if (o.endDate !== Infinity) {
        if (!!o.endDate) {
          if (o.endDate instanceof Date) o.endDate = this._local_to_utc(this._zero_time(o.endDate));else o.endDate = DPGlobal.parseDate(o.endDate, format, o.language, o.assumeNearbyYear);
        } else {
          o.endDate = Infinity;
        }
      }
      o.daysOfWeekDisabled = this._resolveDaysOfWeek(o.daysOfWeekDisabled || []);
      o.daysOfWeekHighlighted = this._resolveDaysOfWeek(o.daysOfWeekHighlighted || []);
      o.datesDisabled = o.datesDisabled || [];
      if (!$.isArray(o.datesDisabled)) {
        o.datesDisabled = o.datesDisabled.split(',');
      }
      o.datesDisabled = $.map(o.datesDisabled, function (d) {
        return DPGlobal.parseDate(d, format, o.language, o.assumeNearbyYear);
      });
      var plc = String(o.orientation).toLowerCase().split(/\s+/g),
        _plc = o.orientation.toLowerCase();
      plc = $.grep(plc, function (word) {
        return /^auto|left|right|top|bottom$/.test(word);
      });
      o.orientation = {
        x: 'auto',
        y: 'auto'
      };
      if (!_plc || _plc === 'auto') ; // no action
      else if (plc.length === 1) {
        switch (plc[0]) {
          case 'top':
          case 'bottom':
            o.orientation.y = plc[0];
            break;
          case 'left':
          case 'right':
            o.orientation.x = plc[0];
            break;
        }
      } else {
        _plc = $.grep(plc, function (word) {
          return /^left|right$/.test(word);
        });
        o.orientation.x = _plc[0] || 'auto';
        _plc = $.grep(plc, function (word) {
          return /^top|bottom$/.test(word);
        });
        o.orientation.y = _plc[0] || 'auto';
      }
      if (o.defaultViewDate instanceof Date || typeof o.defaultViewDate === 'string') {
        o.defaultViewDate = DPGlobal.parseDate(o.defaultViewDate, format, o.language, o.assumeNearbyYear);
      } else if (o.defaultViewDate) {
        var year = o.defaultViewDate.year || new Date().getFullYear();
        var month = o.defaultViewDate.month || 0;
        var day = o.defaultViewDate.day || 1;
        o.defaultViewDate = UTCDate(year, month, day);
      } else {
        o.defaultViewDate = UTCToday();
      }
    },
    _events: [],
    _secondaryEvents: [],
    _applyEvents: function _applyEvents(evs) {
      for (var i = 0, el, ch, ev; i < evs.length; i++) {
        el = evs[i][0];
        if (evs[i].length === 2) {
          ch = undefined;
          ev = evs[i][1];
        } else if (evs[i].length === 3) {
          ch = evs[i][1];
          ev = evs[i][2];
        }
        el.on(ev, ch);
      }
    },
    _unapplyEvents: function _unapplyEvents(evs) {
      for (var i = 0, el, ev, ch; i < evs.length; i++) {
        el = evs[i][0];
        if (evs[i].length === 2) {
          ch = undefined;
          ev = evs[i][1];
        } else if (evs[i].length === 3) {
          ch = evs[i][1];
          ev = evs[i][2];
        }
        el.off(ev, ch);
      }
    },
    _buildEvents: function _buildEvents() {
      var events = {
        keyup: $.proxy(function (e) {
          if ($.inArray(e.keyCode, [27, 37, 39, 38, 40, 32, 13, 9]) === -1) this.update();
        }, this),
        keydown: $.proxy(this.keydown, this),
        paste: $.proxy(this.paste, this)
      };
      if (this.o.showOnFocus === true) {
        events.focus = $.proxy(this.show, this);
      }
      if (this.isInput) {
        // single input
        this._events = [[this.element, events]];
      }
      // component: input + button
      else if (this.component && this.inputField.length) {
        this._events = [
        // For components that are not readonly, allow keyboard nav
        [this.inputField, events], [this.component, {
          click: $.proxy(this.show, this)
        }]];
      } else {
        this._events = [[this.element, {
          click: $.proxy(this.show, this),
          keydown: $.proxy(this.keydown, this)
        }]];
      }
      this._events.push(
      // Component: listen for blur on element descendants
      [this.element, '*', {
        blur: $.proxy(function (e) {
          this._focused_from = e.target;
        }, this)
      }],
      // Input: listen for blur on element
      [this.element, {
        blur: $.proxy(function (e) {
          this._focused_from = e.target;
        }, this)
      }]);
      if (this.o.immediateUpdates) {
        // Trigger input updates immediately on changed year/month
        this._events.push([this.element, {
          'changeYear changeMonth': $.proxy(function (e) {
            this.update(e.date);
          }, this)
        }]);
      }
      this._secondaryEvents = [[this.picker, {
        click: $.proxy(this.click, this)
      }], [this.picker, '.prev, .next', {
        click: $.proxy(this.navArrowsClick, this)
      }], [this.picker, '.day:not(.disabled)', {
        click: $.proxy(this.dayCellClick, this)
      }], [$(window), {
        resize: $.proxy(this.place, this)
      }], [$(document), {
        'mousedown touchstart': $.proxy(function (e) {
          // Clicked outside the datepicker, hide it
          if (!(this.element.is(e.target) || this.element.find(e.target).length || this.picker.is(e.target) || this.picker.find(e.target).length || this.isInline)) {
            this.hide();
          }
        }, this)
      }]];
    },
    _attachEvents: function _attachEvents() {
      this._detachEvents();
      this._applyEvents(this._events);
    },
    _detachEvents: function _detachEvents() {
      this._unapplyEvents(this._events);
    },
    _attachSecondaryEvents: function _attachSecondaryEvents() {
      this._detachSecondaryEvents();
      this._applyEvents(this._secondaryEvents);
    },
    _detachSecondaryEvents: function _detachSecondaryEvents() {
      this._unapplyEvents(this._secondaryEvents);
    },
    _trigger: function _trigger(event, altdate) {
      var date = altdate || this.dates.get(-1),
        local_date = this._utc_to_local(date);
      this.element.trigger({
        type: event,
        date: local_date,
        viewMode: this.viewMode,
        dates: $.map(this.dates, this._utc_to_local),
        format: $.proxy(function (ix, format) {
          if (arguments.length === 0) {
            ix = this.dates.length - 1;
            format = this.o.format;
          } else if (typeof ix === 'string') {
            format = ix;
            ix = this.dates.length - 1;
          }
          format = format || this.o.format;
          var date = this.dates.get(ix);
          return DPGlobal.formatDate(date, format, this.o.language);
        }, this)
      });
    },
    show: function show() {
      if (this.inputField.prop('disabled') || this.inputField.prop('readonly') && this.o.enableOnReadonly === false) return;
      if (!this.isInline) this.picker.appendTo(this.o.container);
      this.place();
      this.picker.show();
      this._attachSecondaryEvents();
      this._trigger('show');
      if ((window.navigator.msMaxTouchPoints || 'ontouchstart' in document) && this.o.disableTouchKeyboard) {
        $(this.element).blur();
      }
      return this;
    },
    hide: function hide() {
      if (this.isInline || !this.picker.is(':visible')) return this;
      this.focusDate = null;
      this.picker.hide().detach();
      this._detachSecondaryEvents();
      this.setViewMode(this.o.startView);
      if (this.o.forceParse && this.inputField.val()) this.setValue();
      this._trigger('hide');
      return this;
    },
    destroy: function destroy() {
      this.hide();
      this._detachEvents();
      this._detachSecondaryEvents();
      this.picker.remove();
      delete this.element.data().datepicker;
      if (!this.isInput) {
        delete this.element.data().date;
      }
      return this;
    },
    paste: function paste(e) {
      var dateString;
      if (e.originalEvent.clipboardData && e.originalEvent.clipboardData.types && $.inArray('text/plain', e.originalEvent.clipboardData.types) !== -1) {
        dateString = e.originalEvent.clipboardData.getData('text/plain');
      } else if (window.clipboardData) {
        dateString = window.clipboardData.getData('Text');
      } else {
        return;
      }
      this.setDate(dateString);
      this.update();
      e.preventDefault();
    },
    _utc_to_local: function _utc_to_local(utc) {
      if (!utc) {
        return utc;
      }
      var local = new Date(utc.getTime() + utc.getTimezoneOffset() * 60000);
      if (local.getTimezoneOffset() !== utc.getTimezoneOffset()) {
        local = new Date(utc.getTime() + local.getTimezoneOffset() * 60000);
      }
      return local;
    },
    _local_to_utc: function _local_to_utc(local) {
      return local && new Date(local.getTime() - local.getTimezoneOffset() * 60000);
    },
    _zero_time: function _zero_time(local) {
      return local && new Date(local.getFullYear(), local.getMonth(), local.getDate());
    },
    _zero_utc_time: function _zero_utc_time(utc) {
      return utc && UTCDate(utc.getUTCFullYear(), utc.getUTCMonth(), utc.getUTCDate());
    },
    getDates: function getDates() {
      return $.map(this.dates, this._utc_to_local);
    },
    getUTCDates: function getUTCDates() {
      return $.map(this.dates, function (d) {
        return new Date(d);
      });
    },
    getDate: function getDate() {
      return this._utc_to_local(this.getUTCDate());
    },
    getUTCDate: function getUTCDate() {
      var selected_date = this.dates.get(-1);
      if (selected_date !== undefined) {
        return new Date(selected_date);
      } else {
        return null;
      }
    },
    clearDates: function clearDates() {
      this.inputField.val('');
      this.update();
      this._trigger('changeDate');
      if (this.o.autoclose) {
        this.hide();
      }
    },
    setDates: function setDates() {
      var args = $.isArray(arguments[0]) ? arguments[0] : arguments;
      this.update.apply(this, args);
      this._trigger('changeDate');
      this.setValue();
      return this;
    },
    setUTCDates: function setUTCDates() {
      var args = $.isArray(arguments[0]) ? arguments[0] : arguments;
      this.setDates.apply(this, $.map(args, this._utc_to_local));
      return this;
    },
    setDate: alias('setDates'),
    setUTCDate: alias('setUTCDates'),
    remove: alias('destroy', 'Method `remove` is deprecated and will be removed in version 2.0. Use `destroy` instead'),
    setValue: function setValue() {
      var formatted = this.getFormattedDate();
      this.inputField.val(formatted);
      return this;
    },
    getFormattedDate: function getFormattedDate(format) {
      if (format === undefined) format = this.o.format;
      var lang = this.o.language;
      return $.map(this.dates, function (d) {
        return DPGlobal.formatDate(d, format, lang);
      }).join(this.o.multidateSeparator);
    },
    getStartDate: function getStartDate() {
      return this.o.startDate;
    },
    setStartDate: function setStartDate(startDate) {
      this._process_options({
        startDate: startDate
      });
      this.update();
      this.updateNavArrows();
      return this;
    },
    getEndDate: function getEndDate() {
      return this.o.endDate;
    },
    setEndDate: function setEndDate(endDate) {
      this._process_options({
        endDate: endDate
      });
      this.update();
      this.updateNavArrows();
      return this;
    },
    setDaysOfWeekDisabled: function setDaysOfWeekDisabled(daysOfWeekDisabled) {
      this._process_options({
        daysOfWeekDisabled: daysOfWeekDisabled
      });
      this.update();
      return this;
    },
    setDaysOfWeekHighlighted: function setDaysOfWeekHighlighted(daysOfWeekHighlighted) {
      this._process_options({
        daysOfWeekHighlighted: daysOfWeekHighlighted
      });
      this.update();
      return this;
    },
    setDatesDisabled: function setDatesDisabled(datesDisabled) {
      this._process_options({
        datesDisabled: datesDisabled
      });
      this.update();
      return this;
    },
    place: function place() {
      if (this.isInline) return this;
      var calendarWidth = this.picker.outerWidth(),
        calendarHeight = this.picker.outerHeight(),
        visualPadding = 10,
        container = $(this.o.container),
        windowWidth = container.width(),
        scrollTop = this.o.container === 'body' ? $(document).scrollTop() : container.scrollTop(),
        appendOffset = container.offset();
      var parentsZindex = [0];
      this.element.parents().each(function () {
        var itemZIndex = $(this).css('z-index');
        if (itemZIndex !== 'auto' && Number(itemZIndex) !== 0) parentsZindex.push(Number(itemZIndex));
      });
      var zIndex = Math.max.apply(Math, parentsZindex) + this.o.zIndexOffset;
      var offset = this.component ? this.component.parent().offset() : this.element.offset();
      var height = this.component ? this.component.outerHeight(true) : this.element.outerHeight(false);
      var width = this.component ? this.component.outerWidth(true) : this.element.outerWidth(false);
      var left = offset.left - appendOffset.left;
      var top = offset.top - appendOffset.top;
      if (this.o.container !== 'body') {
        top += scrollTop;
      }
      this.picker.removeClass('datepicker-orient-top datepicker-orient-bottom ' + 'datepicker-orient-right datepicker-orient-left');
      if (this.o.orientation.x !== 'auto') {
        this.picker.addClass('datepicker-orient-' + this.o.orientation.x);
        if (this.o.orientation.x === 'right') left -= calendarWidth - width;
      }
      // auto x orientation is best-placement: if it crosses a window
      // edge, fudge it sideways
      else {
        if (offset.left < 0) {
          // component is outside the window on the left side. Move it into visible range
          this.picker.addClass('datepicker-orient-left');
          left -= offset.left - visualPadding;
        } else if (left + calendarWidth > windowWidth) {
          // the calendar passes the widow right edge. Align it to component right side
          this.picker.addClass('datepicker-orient-right');
          left += width - calendarWidth;
        } else {
          if (this.o.rtl) {
            // Default to right
            this.picker.addClass('datepicker-orient-right');
          } else {
            // Default to left
            this.picker.addClass('datepicker-orient-left');
          }
        }
      }

      // auto y orientation is best-situation: top or bottom, no fudging,
      // decision based on which shows more of the calendar
      var yorient = this.o.orientation.y,
        top_overflow;
      if (yorient === 'auto') {
        top_overflow = -scrollTop + top - calendarHeight;
        yorient = top_overflow < 0 ? 'bottom' : 'top';
      }
      this.picker.addClass('datepicker-orient-' + yorient);
      if (yorient === 'top') top -= calendarHeight + parseInt(this.picker.css('padding-top'));else top += height;
      if (this.o.rtl) {
        var right = windowWidth - (left + width);
        this.picker.css({
          top: top,
          right: right,
          zIndex: zIndex
        });
      } else {
        this.picker.css({
          top: top,
          left: left,
          zIndex: zIndex
        });
      }
      return this;
    },
    _allow_update: true,
    update: function update() {
      if (!this._allow_update) return this;
      var oldDates = this.dates.copy(),
        dates = [],
        fromArgs = false;
      if (arguments.length) {
        $.each(arguments, $.proxy(function (i, date) {
          if (date instanceof Date) date = this._local_to_utc(date);
          dates.push(date);
        }, this));
        fromArgs = true;
      } else {
        dates = this.isInput ? this.element.val() : this.element.data('date') || this.inputField.val();
        if (dates && this.o.multidate) dates = dates.split(this.o.multidateSeparator);else dates = [dates];
        delete this.element.data().date;
      }
      dates = $.map(dates, $.proxy(function (date) {
        return DPGlobal.parseDate(date, this.o.format, this.o.language, this.o.assumeNearbyYear);
      }, this));
      dates = $.grep(dates, $.proxy(function (date) {
        return !this.dateWithinRange(date) || !date;
      }, this), true);
      this.dates.replace(dates);
      if (this.o.updateViewDate) {
        if (this.dates.length) this.viewDate = new Date(this.dates.get(-1));else if (this.viewDate < this.o.startDate) this.viewDate = new Date(this.o.startDate);else if (this.viewDate > this.o.endDate) this.viewDate = new Date(this.o.endDate);else this.viewDate = this.o.defaultViewDate;
      }
      if (fromArgs) {
        // setting date by clicking
        this.setValue();
        this.element.change();
      } else if (this.dates.length) {
        // setting date by typing
        if (String(oldDates) !== String(this.dates) && fromArgs) {
          this._trigger('changeDate');
          this.element.change();
        }
      }
      if (!this.dates.length && oldDates.length) {
        this._trigger('clearDate');
        this.element.change();
      }
      this.fill();
      return this;
    },
    fillDow: function fillDow() {
      if (this.o.showWeekDays) {
        var dowCnt = this.o.weekStart,
          html = '<tr>';
        if (this.o.calendarWeeks) {
          html += '<th class="cw">&#160;</th>';
        }
        while (dowCnt < this.o.weekStart + 7) {
          html += '<th class="dow';
          if ($.inArray(dowCnt, this.o.daysOfWeekDisabled) !== -1) html += ' disabled';
          html += '">' + dates[this.o.language].daysMin[dowCnt++ % 7] + '</th>';
        }
        html += '</tr>';
        this.picker.find('.datepicker-days thead').append(html);
      }
    },
    fillMonths: function fillMonths() {
      var localDate = this._utc_to_local(this.viewDate);
      var html = '';
      var focused;
      for (var i = 0; i < 12; i++) {
        focused = localDate && localDate.getMonth() === i ? ' focused' : '';
        html += '<span class="month' + focused + '">' + dates[this.o.language].monthsShort[i] + '</span>';
      }
      this.picker.find('.datepicker-months td').html(html);
    },
    setRange: function setRange(range) {
      if (!range || !range.length) delete this.range;else this.range = $.map(range, function (d) {
        return d.valueOf();
      });
      this.fill();
    },
    getClassNames: function getClassNames(date) {
      var cls = [],
        year = this.viewDate.getUTCFullYear(),
        month = this.viewDate.getUTCMonth(),
        today = UTCToday();
      if (date.getUTCFullYear() < year || date.getUTCFullYear() === year && date.getUTCMonth() < month) {
        cls.push('old');
      } else if (date.getUTCFullYear() > year || date.getUTCFullYear() === year && date.getUTCMonth() > month) {
        cls.push('new');
      }
      if (this.focusDate && date.valueOf() === this.focusDate.valueOf()) cls.push('focused');
      // Compare internal UTC date with UTC today, not local today
      if (this.o.todayHighlight && isUTCEquals(date, today)) {
        cls.push('today');
      }
      if (this.dates.contains(date) !== -1) cls.push('active');
      if (!this.dateWithinRange(date)) {
        cls.push('disabled');
      }
      if (this.dateIsDisabled(date)) {
        cls.push('disabled', 'disabled-date');
      }
      if ($.inArray(date.getUTCDay(), this.o.daysOfWeekHighlighted) !== -1) {
        cls.push('highlighted');
      }
      if (this.range) {
        if (date > this.range[0] && date < this.range[this.range.length - 1]) {
          cls.push('range');
        }
        if ($.inArray(date.valueOf(), this.range) !== -1) {
          cls.push('selected');
        }
        if (date.valueOf() === this.range[0]) {
          cls.push('range-start');
        }
        if (date.valueOf() === this.range[this.range.length - 1]) {
          cls.push('range-end');
        }
      }
      return cls;
    },
    _fill_yearsView: function _fill_yearsView(selector, cssClass, factor, year, startYear, endYear, beforeFn) {
      var html = '';
      var step = factor / 10;
      var view = this.picker.find(selector);
      var startVal = Math.floor(year / factor) * factor;
      var endVal = startVal + step * 9;
      var focusedVal = Math.floor(this.viewDate.getFullYear() / step) * step;
      var selected = $.map(this.dates, function (d) {
        return Math.floor(d.getUTCFullYear() / step) * step;
      });
      var classes, tooltip, before;
      for (var currVal = startVal - step; currVal <= endVal + step; currVal += step) {
        classes = [cssClass];
        tooltip = null;
        if (currVal === startVal - step) {
          classes.push('old');
        } else if (currVal === endVal + step) {
          classes.push('new');
        }
        if ($.inArray(currVal, selected) !== -1) {
          classes.push('active');
        }
        if (currVal < startYear || currVal > endYear) {
          classes.push('disabled');
        }
        if (currVal === focusedVal) {
          classes.push('focused');
        }
        if (beforeFn !== $.noop) {
          before = beforeFn(new Date(currVal, 0, 1));
          if (before === undefined) {
            before = {};
          } else if (typeof before === 'boolean') {
            before = {
              enabled: before
            };
          } else if (typeof before === 'string') {
            before = {
              classes: before
            };
          }
          if (before.enabled === false) {
            classes.push('disabled');
          }
          if (before.classes) {
            classes = classes.concat(before.classes.split(/\s+/));
          }
          if (before.tooltip) {
            tooltip = before.tooltip;
          }
        }
        html += '<span class="' + classes.join(' ') + '"' + (tooltip ? ' title="' + tooltip + '"' : '') + '>' + currVal + '</span>';
      }
      view.find('.datepicker-switch').text(startVal + '-' + endVal);
      view.find('td').html(html);
    },
    fill: function fill() {
      var d = new Date(this.viewDate),
        year = d.getUTCFullYear(),
        month = d.getUTCMonth(),
        startYear = this.o.startDate !== -Infinity ? this.o.startDate.getUTCFullYear() : -Infinity,
        startMonth = this.o.startDate !== -Infinity ? this.o.startDate.getUTCMonth() : -Infinity,
        endYear = this.o.endDate !== Infinity ? this.o.endDate.getUTCFullYear() : Infinity,
        endMonth = this.o.endDate !== Infinity ? this.o.endDate.getUTCMonth() : Infinity,
        todaytxt = dates[this.o.language].today || dates['en'].today || '',
        cleartxt = dates[this.o.language].clear || dates['en'].clear || '',
        titleFormat = dates[this.o.language].titleFormat || dates['en'].titleFormat,
        tooltip,
        before;
      if (isNaN(year) || isNaN(month)) return;
      this.picker.find('.datepicker-days .datepicker-switch').text(DPGlobal.formatDate(d, titleFormat, this.o.language));
      this.picker.find('tfoot .today').text(todaytxt).css('display', this.o.todayBtn === true || this.o.todayBtn === 'linked' ? 'table-cell' : 'none');
      this.picker.find('tfoot .clear').text(cleartxt).css('display', this.o.clearBtn === true ? 'table-cell' : 'none');
      this.picker.find('thead .datepicker-title').text(this.o.title).css('display', typeof this.o.title === 'string' && this.o.title !== '' ? 'table-cell' : 'none');
      this.updateNavArrows();
      this.fillMonths();
      var prevMonth = UTCDate(year, month, 0),
        day = prevMonth.getUTCDate();
      prevMonth.setUTCDate(day - (prevMonth.getUTCDay() - this.o.weekStart + 7) % 7);
      var nextMonth = new Date(prevMonth);
      if (prevMonth.getUTCFullYear() < 100) {
        nextMonth.setUTCFullYear(prevMonth.getUTCFullYear());
      }
      nextMonth.setUTCDate(nextMonth.getUTCDate() + 42);
      nextMonth = nextMonth.valueOf();
      var html = [];
      var weekDay, clsName;
      while (prevMonth.valueOf() < nextMonth) {
        weekDay = prevMonth.getUTCDay();
        if (weekDay === this.o.weekStart) {
          html.push('<tr>');
          if (this.o.calendarWeeks) {
            // ISO 8601: First week contains first thursday.
            // ISO also states week starts on Monday, but we can be more abstract here.
            var
              // Start of current week: based on weekstart/current date
              ws = new Date(+prevMonth + (this.o.weekStart - weekDay - 7) % 7 * 864e5),
              // Thursday of this week
              th = new Date(Number(ws) + (7 + 4 - ws.getUTCDay()) % 7 * 864e5),
              // First Thursday of year, year from thursday
              yth = new Date(Number(yth = UTCDate(th.getUTCFullYear(), 0, 1)) + (7 + 4 - yth.getUTCDay()) % 7 * 864e5),
              // Calendar week: ms between thursdays, div ms per day, div 7 days
              calWeek = (th - yth) / 864e5 / 7 + 1;
            html.push('<td class="cw">' + calWeek + '</td>');
          }
        }
        clsName = this.getClassNames(prevMonth);
        clsName.push('day');
        var content = prevMonth.getUTCDate();
        if (this.o.beforeShowDay !== $.noop) {
          before = this.o.beforeShowDay(this._utc_to_local(prevMonth));
          if (before === undefined) before = {};else if (typeof before === 'boolean') before = {
            enabled: before
          };else if (typeof before === 'string') before = {
            classes: before
          };
          if (before.enabled === false) clsName.push('disabled');
          if (before.classes) clsName = clsName.concat(before.classes.split(/\s+/));
          if (before.tooltip) tooltip = before.tooltip;
          if (before.content) content = before.content;
        }

        //Check if uniqueSort exists (supported by jquery >=1.12 and >=2.2)
        //Fallback to unique function for older jquery versions
        if ($.isFunction($.uniqueSort)) {
          clsName = $.uniqueSort(clsName);
        } else {
          clsName = $.unique(clsName);
        }
        html.push('<td class="' + clsName.join(' ') + '"' + (tooltip ? ' title="' + tooltip + '"' : '') + ' data-date="' + prevMonth.getTime().toString() + '">' + content + '</td>');
        tooltip = null;
        if (weekDay === this.o.weekEnd) {
          html.push('</tr>');
        }
        prevMonth.setUTCDate(prevMonth.getUTCDate() + 1);
      }
      this.picker.find('.datepicker-days tbody').html(html.join(''));
      var monthsTitle = dates[this.o.language].monthsTitle || dates['en'].monthsTitle || 'Months';
      var months = this.picker.find('.datepicker-months').find('.datepicker-switch').text(this.o.maxViewMode < 2 ? monthsTitle : year).end().find('tbody span').removeClass('active');
      $.each(this.dates, function (i, d) {
        if (d.getUTCFullYear() === year) months.eq(d.getUTCMonth()).addClass('active');
      });
      if (year < startYear || year > endYear) {
        months.addClass('disabled');
      }
      if (year === startYear) {
        months.slice(0, startMonth).addClass('disabled');
      }
      if (year === endYear) {
        months.slice(endMonth + 1).addClass('disabled');
      }
      if (this.o.beforeShowMonth !== $.noop) {
        var that = this;
        $.each(months, function (i, month) {
          var moDate = new Date(year, i, 1);
          var before = that.o.beforeShowMonth(moDate);
          if (before === undefined) before = {};else if (typeof before === 'boolean') before = {
            enabled: before
          };else if (typeof before === 'string') before = {
            classes: before
          };
          if (before.enabled === false && !$(month).hasClass('disabled')) $(month).addClass('disabled');
          if (before.classes) $(month).addClass(before.classes);
          if (before.tooltip) $(month).prop('title', before.tooltip);
        });
      }

      // Generating decade/years picker
      this._fill_yearsView('.datepicker-years', 'year', 10, year, startYear, endYear, this.o.beforeShowYear);

      // Generating century/decades picker
      this._fill_yearsView('.datepicker-decades', 'decade', 100, year, startYear, endYear, this.o.beforeShowDecade);

      // Generating millennium/centuries picker
      this._fill_yearsView('.datepicker-centuries', 'century', 1000, year, startYear, endYear, this.o.beforeShowCentury);
    },
    updateNavArrows: function updateNavArrows() {
      if (!this._allow_update) return;
      var d = new Date(this.viewDate),
        year = d.getUTCFullYear(),
        month = d.getUTCMonth(),
        startYear = this.o.startDate !== -Infinity ? this.o.startDate.getUTCFullYear() : -Infinity,
        startMonth = this.o.startDate !== -Infinity ? this.o.startDate.getUTCMonth() : -Infinity,
        endYear = this.o.endDate !== Infinity ? this.o.endDate.getUTCFullYear() : Infinity,
        endMonth = this.o.endDate !== Infinity ? this.o.endDate.getUTCMonth() : Infinity,
        prevIsDisabled,
        nextIsDisabled,
        factor = 1;
      switch (this.viewMode) {
        case 4:
          factor *= 10;
        /* falls through */
        case 3:
          factor *= 10;
        /* falls through */
        case 2:
          factor *= 10;
        /* falls through */
        case 1:
          prevIsDisabled = Math.floor(year / factor) * factor <= startYear;
          nextIsDisabled = Math.floor(year / factor) * factor + factor > endYear;
          break;
        case 0:
          prevIsDisabled = year <= startYear && month <= startMonth;
          nextIsDisabled = year >= endYear && month >= endMonth;
          break;
      }
      this.picker.find('.prev').toggleClass('disabled', prevIsDisabled);
      this.picker.find('.next').toggleClass('disabled', nextIsDisabled);
    },
    click: function click(e) {
      e.preventDefault();
      e.stopPropagation();
      var target, dir, day, year, month;
      target = $(e.target);

      // Clicked on the switch
      if (target.hasClass('datepicker-switch') && this.viewMode !== this.o.maxViewMode) {
        this.setViewMode(this.viewMode + 1);
      }

      // Clicked on today button
      if (target.hasClass('today') && !target.hasClass('day')) {
        this.setViewMode(0);
        this._setDate(UTCToday(), this.o.todayBtn === 'linked' ? null : 'view');
      }

      // Clicked on clear button
      if (target.hasClass('clear')) {
        this.clearDates();
      }
      if (!target.hasClass('disabled')) {
        // Clicked on a month, year, decade, century
        if (target.hasClass('month') || target.hasClass('year') || target.hasClass('decade') || target.hasClass('century')) {
          this.viewDate.setUTCDate(1);
          day = 1;
          if (this.viewMode === 1) {
            month = target.parent().find('span').index(target);
            year = this.viewDate.getUTCFullYear();
            this.viewDate.setUTCMonth(month);
          } else {
            month = 0;
            year = Number(target.text());
            this.viewDate.setUTCFullYear(year);
          }
          this._trigger(DPGlobal.viewModes[this.viewMode - 1].e, this.viewDate);
          if (this.viewMode === this.o.minViewMode) {
            this._setDate(UTCDate(year, month, day));
          } else {
            this.setViewMode(this.viewMode - 1);
            this.fill();
          }
        }
      }
      if (this.picker.is(':visible') && this._focused_from) {
        this._focused_from.focus();
      }
      delete this._focused_from;
    },
    dayCellClick: function dayCellClick(e) {
      var $target = $(e.currentTarget);
      var timestamp = $target.data('date');
      var date = new Date(timestamp);
      if (this.o.updateViewDate) {
        if (date.getUTCFullYear() !== this.viewDate.getUTCFullYear()) {
          this._trigger('changeYear', this.viewDate);
        }
        if (date.getUTCMonth() !== this.viewDate.getUTCMonth()) {
          this._trigger('changeMonth', this.viewDate);
        }
      }
      this._setDate(date);
    },
    // Clicked on prev or next
    navArrowsClick: function navArrowsClick(e) {
      var $target = $(e.currentTarget);
      var dir = $target.hasClass('prev') ? -1 : 1;
      if (this.viewMode !== 0) {
        dir *= DPGlobal.viewModes[this.viewMode].navStep * 12;
      }
      this.viewDate = this.moveMonth(this.viewDate, dir);
      this._trigger(DPGlobal.viewModes[this.viewMode].e, this.viewDate);
      this.fill();
    },
    _toggle_multidate: function _toggle_multidate(date) {
      var ix = this.dates.contains(date);
      if (!date) {
        this.dates.clear();
      }
      if (ix !== -1) {
        if (this.o.multidate === true || this.o.multidate > 1 || this.o.toggleActive) {
          this.dates.remove(ix);
        }
      } else if (this.o.multidate === false) {
        this.dates.clear();
        this.dates.push(date);
      } else {
        this.dates.push(date);
      }
      if (typeof this.o.multidate === 'number') while (this.dates.length > this.o.multidate) this.dates.remove(0);
    },
    _setDate: function _setDate(date, which) {
      if (!which || which === 'date') this._toggle_multidate(date && new Date(date));
      if (!which && this.o.updateViewDate || which === 'view') this.viewDate = date && new Date(date);
      this.fill();
      this.setValue();
      if (!which || which !== 'view') {
        this._trigger('changeDate');
      }
      this.inputField.trigger('change');
      if (this.o.autoclose && (!which || which === 'date')) {
        this.hide();
      }
    },
    moveDay: function moveDay(date, dir) {
      var newDate = new Date(date);
      newDate.setUTCDate(date.getUTCDate() + dir);
      return newDate;
    },
    moveWeek: function moveWeek(date, dir) {
      return this.moveDay(date, dir * 7);
    },
    moveMonth: function moveMonth(date, dir) {
      if (!isValidDate(date)) return this.o.defaultViewDate;
      if (!dir) return date;
      var new_date = new Date(date.valueOf()),
        day = new_date.getUTCDate(),
        month = new_date.getUTCMonth(),
        mag = Math.abs(dir),
        new_month,
        test;
      dir = dir > 0 ? 1 : -1;
      if (mag === 1) {
        test = dir === -1
        // If going back one month, make sure month is not current month
        // (eg, Mar 31 -> Feb 31 == Feb 28, not Mar 02)
        ? function () {
          return new_date.getUTCMonth() === month;
        }
        // If going forward one month, make sure month is as expected
        // (eg, Jan 31 -> Feb 31 == Feb 28, not Mar 02)
        : function () {
          return new_date.getUTCMonth() !== new_month;
        };
        new_month = month + dir;
        new_date.setUTCMonth(new_month);
        // Dec -> Jan (12) or Jan -> Dec (-1) -- limit expected date to 0-11
        new_month = (new_month + 12) % 12;
      } else {
        // For magnitudes >1, move one month at a time...
        for (var i = 0; i < mag; i++)
        // ...which might decrease the day (eg, Jan 31 to Feb 28, etc)...
        new_date = this.moveMonth(new_date, dir);
        // ...then reset the day, keeping it in the new month
        new_month = new_date.getUTCMonth();
        new_date.setUTCDate(day);
        test = function test() {
          return new_month !== new_date.getUTCMonth();
        };
      }
      // Common date-resetting loop -- if date is beyond end of month, make it
      // end of month
      while (test()) {
        new_date.setUTCDate(--day);
        new_date.setUTCMonth(new_month);
      }
      return new_date;
    },
    moveYear: function moveYear(date, dir) {
      return this.moveMonth(date, dir * 12);
    },
    moveAvailableDate: function moveAvailableDate(date, dir, fn) {
      do {
        date = this[fn](date, dir);
        if (!this.dateWithinRange(date)) return false;
        fn = 'moveDay';
      } while (this.dateIsDisabled(date));
      return date;
    },
    weekOfDateIsDisabled: function weekOfDateIsDisabled(date) {
      return $.inArray(date.getUTCDay(), this.o.daysOfWeekDisabled) !== -1;
    },
    dateIsDisabled: function dateIsDisabled(date) {
      return this.weekOfDateIsDisabled(date) || $.grep(this.o.datesDisabled, function (d) {
        return isUTCEquals(date, d);
      }).length > 0;
    },
    dateWithinRange: function dateWithinRange(date) {
      return date >= this.o.startDate && date <= this.o.endDate;
    },
    keydown: function keydown(e) {
      if (!this.picker.is(':visible')) {
        if (e.keyCode === 40 || e.keyCode === 27) {
          // allow down to re-show picker
          this.show();
          e.stopPropagation();
        }
        return;
      }
      var dateChanged = false,
        dir,
        newViewDate,
        focusDate = this.focusDate || this.viewDate;
      switch (e.keyCode) {
        case 27:
          // escape
          if (this.focusDate) {
            this.focusDate = null;
            this.viewDate = this.dates.get(-1) || this.viewDate;
            this.fill();
          } else this.hide();
          e.preventDefault();
          e.stopPropagation();
          break;
        case 37: // left
        case 38: // up
        case 39: // right
        case 40:
          // down
          if (!this.o.keyboardNavigation || this.o.daysOfWeekDisabled.length === 7) break;
          dir = e.keyCode === 37 || e.keyCode === 38 ? -1 : 1;
          if (this.viewMode === 0) {
            if (e.ctrlKey) {
              newViewDate = this.moveAvailableDate(focusDate, dir, 'moveYear');
              if (newViewDate) this._trigger('changeYear', this.viewDate);
            } else if (e.shiftKey) {
              newViewDate = this.moveAvailableDate(focusDate, dir, 'moveMonth');
              if (newViewDate) this._trigger('changeMonth', this.viewDate);
            } else if (e.keyCode === 37 || e.keyCode === 39) {
              newViewDate = this.moveAvailableDate(focusDate, dir, 'moveDay');
            } else if (!this.weekOfDateIsDisabled(focusDate)) {
              newViewDate = this.moveAvailableDate(focusDate, dir, 'moveWeek');
            }
          } else if (this.viewMode === 1) {
            if (e.keyCode === 38 || e.keyCode === 40) {
              dir = dir * 4;
            }
            newViewDate = this.moveAvailableDate(focusDate, dir, 'moveMonth');
          } else if (this.viewMode === 2) {
            if (e.keyCode === 38 || e.keyCode === 40) {
              dir = dir * 4;
            }
            newViewDate = this.moveAvailableDate(focusDate, dir, 'moveYear');
          }
          if (newViewDate) {
            this.focusDate = this.viewDate = newViewDate;
            this.setValue();
            this.fill();
            e.preventDefault();
          }
          break;
        case 13:
          // enter
          if (!this.o.forceParse) break;
          focusDate = this.focusDate || this.dates.get(-1) || this.viewDate;
          if (this.o.keyboardNavigation) {
            this._toggle_multidate(focusDate);
            dateChanged = true;
          }
          this.focusDate = null;
          this.viewDate = this.dates.get(-1) || this.viewDate;
          this.setValue();
          this.fill();
          if (this.picker.is(':visible')) {
            e.preventDefault();
            e.stopPropagation();
            if (this.o.autoclose) this.hide();
          }
          break;
        case 9:
          // tab
          this.focusDate = null;
          this.viewDate = this.dates.get(-1) || this.viewDate;
          this.fill();
          this.hide();
          break;
      }
      if (dateChanged) {
        if (this.dates.length) this._trigger('changeDate');else this._trigger('clearDate');
        this.inputField.trigger('change');
      }
    },
    setViewMode: function setViewMode(viewMode) {
      this.viewMode = viewMode;
      this.picker.children('div').hide().filter('.datepicker-' + DPGlobal.viewModes[this.viewMode].clsName).show();
      this.updateNavArrows();
      this._trigger('changeViewMode', new Date(this.viewDate));
    }
  };
  var DateRangePicker = function DateRangePicker(element, options) {
    $.data(element, 'datepicker', this);
    this.element = $(element);
    this.inputs = $.map(options.inputs, function (i) {
      return i.jquery ? i[0] : i;
    });
    delete options.inputs;
    this.keepEmptyValues = options.keepEmptyValues;
    delete options.keepEmptyValues;
    datepickerPlugin.call($(this.inputs), options).on('changeDate', $.proxy(this.dateUpdated, this));
    this.pickers = $.map(this.inputs, function (i) {
      return $.data(i, 'datepicker');
    });
    this.updateDates();
  };
  DateRangePicker.prototype = {
    updateDates: function updateDates() {
      this.dates = $.map(this.pickers, function (i) {
        return i.getUTCDate();
      });
      this.updateRanges();
    },
    updateRanges: function updateRanges() {
      var range = $.map(this.dates, function (d) {
        return d.valueOf();
      });
      $.each(this.pickers, function (i, p) {
        p.setRange(range);
      });
    },
    clearDates: function clearDates() {
      $.each(this.pickers, function (i, p) {
        p.clearDates();
      });
    },
    dateUpdated: function dateUpdated(e) {
      // `this.updating` is a workaround for preventing infinite recursion
      // between `changeDate` triggering and `setUTCDate` calling.  Until
      // there is a better mechanism.
      if (this.updating) return;
      this.updating = true;
      var dp = $.data(e.target, 'datepicker');
      if (dp === undefined) {
        return;
      }
      var new_date = dp.getUTCDate(),
        keep_empty_values = this.keepEmptyValues,
        i = $.inArray(e.target, this.inputs),
        j = i - 1,
        k = i + 1,
        l = this.inputs.length;
      if (i === -1) return;
      $.each(this.pickers, function (i, p) {
        if (!p.getUTCDate() && (p === dp || !keep_empty_values)) p.setUTCDate(new_date);
      });
      if (new_date < this.dates[j]) {
        // Date being moved earlier/left
        while (j >= 0 && new_date < this.dates[j]) {
          this.pickers[j--].setUTCDate(new_date);
        }
      } else if (new_date > this.dates[k]) {
        // Date being moved later/right
        while (k < l && new_date > this.dates[k]) {
          this.pickers[k++].setUTCDate(new_date);
        }
      }
      this.updateDates();
      delete this.updating;
    },
    destroy: function destroy() {
      $.map(this.pickers, function (p) {
        p.destroy();
      });
      $(this.inputs).off('changeDate', this.dateUpdated);
      delete this.element.data().datepicker;
    },
    remove: alias('destroy', 'Method `remove` is deprecated and will be removed in version 2.0. Use `destroy` instead')
  };
  function opts_from_el(el, prefix) {
    // Derive options from element data-attrs
    var data = $(el).data(),
      out = {},
      inkey,
      replace = new RegExp('^' + prefix.toLowerCase() + '([A-Z])');
    prefix = new RegExp('^' + prefix.toLowerCase());
    function re_lower(_, a) {
      return a.toLowerCase();
    }
    for (var key in data) if (prefix.test(key)) {
      inkey = key.replace(replace, re_lower);
      out[inkey] = data[key];
    }
    return out;
  }
  function opts_from_locale(lang) {
    // Derive options from locale plugins
    var out = {};
    // Check if "de-DE" style date is available, if not language should
    // fallback to 2 letter code eg "de"
    if (!dates[lang]) {
      lang = lang.split('-')[0];
      if (!dates[lang]) return;
    }
    var d = dates[lang];
    $.each(locale_opts, function (i, k) {
      if (k in d) out[k] = d[k];
    });
    return out;
  }
  var old = $.fn.datepicker;
  var datepickerPlugin = function datepickerPlugin(option) {
    var args = Array.apply(null, arguments);
    args.shift();
    var internal_return;
    this.each(function () {
      var $this = $(this),
        data = $this.data('datepicker'),
        options = _typeof(option) === 'object' && option;
      if (!data) {
        var elopts = opts_from_el(this, 'date'),
          // Preliminary otions
          xopts = $.extend({}, defaults, elopts, options),
          locopts = opts_from_locale(xopts.language),
          // Options priority: js args, data-attrs, locales, defaults
          opts = $.extend({}, defaults, locopts, elopts, options);
        if ($this.hasClass('input-daterange') || opts.inputs) {
          $.extend(opts, {
            inputs: opts.inputs || $this.find('input').toArray()
          });
          data = new DateRangePicker(this, opts);
        } else {
          data = new Datepicker(this, opts);
        }
        $this.data('datepicker', data);
      }
      if (typeof option === 'string' && typeof data[option] === 'function') {
        internal_return = data[option].apply(data, args);
      }
    });
    if (internal_return === undefined || internal_return instanceof Datepicker || internal_return instanceof DateRangePicker) return this;
    if (this.length > 1) throw new Error('Using only allowed for the collection of a single element (' + option + ' function)');else return internal_return;
  };
  $.fn.datepicker = datepickerPlugin;
  var defaults = $.fn.datepicker.defaults = {
    assumeNearbyYear: false,
    autoclose: false,
    beforeShowDay: $.noop,
    beforeShowMonth: $.noop,
    beforeShowYear: $.noop,
    beforeShowDecade: $.noop,
    beforeShowCentury: $.noop,
    calendarWeeks: false,
    clearBtn: false,
    toggleActive: false,
    daysOfWeekDisabled: [],
    daysOfWeekHighlighted: [],
    datesDisabled: [],
    endDate: Infinity,
    forceParse: true,
    format: 'mm/dd/yyyy',
    keepEmptyValues: false,
    keyboardNavigation: true,
    language: 'en',
    minViewMode: 0,
    maxViewMode: 4,
    multidate: false,
    multidateSeparator: ',',
    orientation: "auto",
    rtl: false,
    startDate: -Infinity,
    startView: 0,
    todayBtn: false,
    todayHighlight: false,
    updateViewDate: true,
    weekStart: 0,
    disableTouchKeyboard: false,
    enableOnReadonly: true,
    showOnFocus: true,
    zIndexOffset: 10,
    container: 'body',
    immediateUpdates: false,
    title: '',
    templates: {
      leftArrow: '&#x00AB;',
      rightArrow: '&#x00BB;'
    },
    showWeekDays: true
  };
  var locale_opts = $.fn.datepicker.locale_opts = ['format', 'rtl', 'weekStart'];
  $.fn.datepicker.Constructor = Datepicker;
  var DPGlobal = {
    viewModes: [{
      names: ['days', 'month'],
      clsName: 'days',
      e: 'changeMonth'
    }, {
      names: ['months', 'year'],
      clsName: 'months',
      e: 'changeYear',
      navStep: 1
    }, {
      names: ['years', 'decade'],
      clsName: 'years',
      e: 'changeDecade',
      navStep: 10
    }, {
      names: ['decades', 'century'],
      clsName: 'decades',
      e: 'changeCentury',
      navStep: 100
    }, {
      names: ['centuries', 'millennium'],
      clsName: 'centuries',
      e: 'changeMillennium',
      navStep: 1000
    }],
    validParts: /dd?|DD?|mm?|MM?|yy(?:yy)?/g,
    nonpunctuation: /[^ -\/:-@\u5e74\u6708\u65e5\[-`{-~\t\n\r]+/g,
    parseFormat: function parseFormat(format) {
      if (typeof format.toValue === 'function' && typeof format.toDisplay === 'function') return format;
      // IE treats \0 as a string end in inputs (truncating the value),
      // so it's a bad format delimiter, anyway
      var separators = format.replace(this.validParts, '\0').split('\0'),
        parts = format.match(this.validParts);
      if (!separators || !separators.length || !parts || parts.length === 0) {
        throw new Error("Invalid date format.");
      }
      return {
        separators: separators,
        parts: parts
      };
    },
    parseDate: function parseDate(date, format, language, assumeNearby) {
      if (!date) return undefined;
      if (date instanceof Date) return date;
      if (typeof format === 'string') format = DPGlobal.parseFormat(format);
      if (format.toValue) return format.toValue(date, format, language);
      var fn_map = {
          d: 'moveDay',
          m: 'moveMonth',
          w: 'moveWeek',
          y: 'moveYear'
        },
        dateAliases = {
          yesterday: '-1d',
          today: '+0d',
          tomorrow: '+1d'
        },
        parts,
        part,
        dir,
        i,
        fn;
      if (date in dateAliases) {
        date = dateAliases[date];
      }
      if (/^[\-+]\d+[dmwy]([\s,]+[\-+]\d+[dmwy])*$/i.test(date)) {
        parts = date.match(/([\-+]\d+)([dmwy])/gi);
        date = new Date();
        for (i = 0; i < parts.length; i++) {
          part = parts[i].match(/([\-+]\d+)([dmwy])/i);
          dir = Number(part[1]);
          fn = fn_map[part[2].toLowerCase()];
          date = Datepicker.prototype[fn](date, dir);
        }
        return Datepicker.prototype._zero_utc_time(date);
      }
      parts = date && date.match(this.nonpunctuation) || [];
      function applyNearbyYear(year, threshold) {
        if (threshold === true) threshold = 10;

        // if year is 2 digits or less, than the user most likely is trying to get a recent century
        if (year < 100) {
          year += 2000;
          // if the new year is more than threshold years in advance, use last century
          if (year > new Date().getFullYear() + threshold) {
            year -= 100;
          }
        }
        return year;
      }
      var parsed = {},
        setters_order = ['yyyy', 'yy', 'M', 'MM', 'm', 'mm', 'd', 'dd'],
        setters_map = {
          yyyy: function yyyy(d, v) {
            return d.setUTCFullYear(assumeNearby ? applyNearbyYear(v, assumeNearby) : v);
          },
          m: function m(d, v) {
            if (isNaN(d)) return d;
            v -= 1;
            while (v < 0) v += 12;
            v %= 12;
            d.setUTCMonth(v);
            while (d.getUTCMonth() !== v) d.setUTCDate(d.getUTCDate() - 1);
            return d;
          },
          d: function d(_d, v) {
            return _d.setUTCDate(v);
          }
        },
        val,
        filtered;
      setters_map['yy'] = setters_map['yyyy'];
      setters_map['M'] = setters_map['MM'] = setters_map['mm'] = setters_map['m'];
      setters_map['dd'] = setters_map['d'];
      date = UTCToday();
      var fparts = format.parts.slice();
      // Remove noop parts
      if (parts.length !== fparts.length) {
        fparts = $(fparts).filter(function (i, p) {
          return $.inArray(p, setters_order) !== -1;
        }).toArray();
      }
      // Process remainder
      function match_part() {
        var m = this.slice(0, parts[i].length),
          p = parts[i].slice(0, m.length);
        return m.toLowerCase() === p.toLowerCase();
      }
      if (parts.length === fparts.length) {
        var cnt;
        for (i = 0, cnt = fparts.length; i < cnt; i++) {
          val = parseInt(parts[i], 10);
          part = fparts[i];
          if (isNaN(val)) {
            switch (part) {
              case 'MM':
                filtered = $(dates[language].months).filter(match_part);
                val = $.inArray(filtered[0], dates[language].months) + 1;
                break;
              case 'M':
                filtered = $(dates[language].monthsShort).filter(match_part);
                val = $.inArray(filtered[0], dates[language].monthsShort) + 1;
                break;
            }
          }
          parsed[part] = val;
        }
        var _date, s;
        for (i = 0; i < setters_order.length; i++) {
          s = setters_order[i];
          if (s in parsed && !isNaN(parsed[s])) {
            _date = new Date(date);
            setters_map[s](_date, parsed[s]);
            if (!isNaN(_date)) date = _date;
          }
        }
      }
      return date;
    },
    formatDate: function formatDate(date, format, language) {
      if (!date) return '';
      if (typeof format === 'string') format = DPGlobal.parseFormat(format);
      if (format.toDisplay) return format.toDisplay(date, format, language);
      var val = {
        d: date.getUTCDate(),
        D: dates[language].daysShort[date.getUTCDay()],
        DD: dates[language].days[date.getUTCDay()],
        m: date.getUTCMonth() + 1,
        M: dates[language].monthsShort[date.getUTCMonth()],
        MM: dates[language].months[date.getUTCMonth()],
        yy: date.getUTCFullYear().toString().substring(2),
        yyyy: date.getUTCFullYear()
      };
      val.dd = (val.d < 10 ? '0' : '') + val.d;
      val.mm = (val.m < 10 ? '0' : '') + val.m;
      date = [];
      var seps = $.extend([], format.separators);
      for (var i = 0, cnt = format.parts.length; i <= cnt; i++) {
        if (seps.length) date.push(seps.shift());
        date.push(val[format.parts[i]]);
      }
      return date.join('');
    },
    headTemplate: '<thead>' + '<tr>' + '<th colspan="7" class="datepicker-title"></th>' + '</tr>' + '<tr>' + '<th class="prev">' + defaults.templates.leftArrow + '</th>' + '<th colspan="5" class="datepicker-switch"></th>' + '<th class="next">' + defaults.templates.rightArrow + '</th>' + '</tr>' + '</thead>',
    contTemplate: '<tbody><tr><td colspan="7"></td></tr></tbody>',
    footTemplate: '<tfoot>' + '<tr>' + '<th colspan="7" class="today"></th>' + '</tr>' + '<tr>' + '<th colspan="7" class="clear"></th>' + '</tr>' + '</tfoot>'
  };
  DPGlobal.template = '<div class="datepicker">' + '<div class="datepicker-days">' + '<table class="table-condensed">' + DPGlobal.headTemplate + '<tbody></tbody>' + DPGlobal.footTemplate + '</table>' + '</div>' + '<div class="datepicker-months">' + '<table class="table-condensed">' + DPGlobal.headTemplate + DPGlobal.contTemplate + DPGlobal.footTemplate + '</table>' + '</div>' + '<div class="datepicker-years">' + '<table class="table-condensed">' + DPGlobal.headTemplate + DPGlobal.contTemplate + DPGlobal.footTemplate + '</table>' + '</div>' + '<div class="datepicker-decades">' + '<table class="table-condensed">' + DPGlobal.headTemplate + DPGlobal.contTemplate + DPGlobal.footTemplate + '</table>' + '</div>' + '<div class="datepicker-centuries">' + '<table class="table-condensed">' + DPGlobal.headTemplate + DPGlobal.contTemplate + DPGlobal.footTemplate + '</table>' + '</div>' + '</div>';
  $.fn.datepicker.DPGlobal = DPGlobal;

  /* DATEPICKER NO CONFLICT
  * =================== */

  $.fn.datepicker.noConflict = function () {
    $.fn.datepicker = old;
    return this;
  };

  /* DATEPICKER VERSION
   * =================== */
  $.fn.datepicker.version = '1.8.0';
  $.fn.datepicker.deprecated = function (msg) {
    var console = window.console;
    if (console && console.warn) {
      console.warn('DEPRECATED: ' + msg);
    }
  };

  /* DATEPICKER DATA-API
  * ================== */

  $(document).on('focus.datepicker.data-api click.datepicker.data-api', '[data-provide="datepicker"]', function (e) {
    var $this = $(this);
    if ($this.data('datepicker')) return;
    e.preventDefault();
    // component click requires us to explicitly show it
    datepickerPlugin.call($this, 'show');
  });
  $(function () {
    datepickerPlugin.call($('[data-provide="datepicker-inline"]'));
  });
});

/***/ }),

/***/ "./assets/js/bootstrap-material-datetimepicker.js":
/*!********************************************************!*\
  !*** ./assets/js/bootstrap-material-datetimepicker.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_splice_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.splice.js */ "./node_modules/core-js/modules/es.array.splice.js");
/* harmony import */ var core_js_modules_es_array_splice_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_splice_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_10__);











(function ($, moment) {
  var pluginName = "bootstrapMaterialDatePicker";
  var pluginDataName = "plugin_" + pluginName;
  moment.locale('fr');
  function Plugin(element, options) {
    this.currentView = 0;
    this.minDate;
    this.maxDate;
    this._attachedEvents = [];
    this.element = element;
    this.$element = $(element);
    this.params = {
      date: true,
      time: true,
      format: 'YYYY-MM-DD',
      minDate: null,
      maxDate: null,
      currentDate: null,
      lang: 'fr',
      weekStart: 0,
      shortTime: false,
      clearButton: false,
      nowButton: false,
      cancelText: 'Annuler',
      okText: 'OK',
      clearText: 'Effacer',
      nowText: 'Now',
      switchOnClick: false
    };
    this.params = $.fn.extend(this.params, options);
    this.name = "dtp_" + this.setName();
    this.$element.attr("data-dtp", this.name);
    moment.locale(this.params.lang);
    this.init();
  }
  $.fn[pluginName] = function (options, p) {
    this.each(function () {
      if (!$.data(this, pluginDataName)) {
        $.data(this, pluginDataName, new Plugin(this, options));
      } else {
        if (typeof $.data(this, pluginDataName)[options] === 'function') {
          $.data(this, pluginDataName)[options](p);
        }
        if (options === 'destroy') {
          delete $.data(this, pluginDataName);
        }
      }
    });
    return this;
  };
  Plugin.prototype = {
    init: function init() {
      this.initDays();
      this.initDates();
      this.initTemplate();
      this.initButtons();
      this._attachEvent($(window), 'resize', this._centerBox.bind(this));
      this._attachEvent(this.$dtpElement.find('.dtp-content'), 'click', this._onElementClick.bind(this));
      this._attachEvent(this.$dtpElement, 'click', this._onBackgroundClick.bind(this));
      this._attachEvent(this.$dtpElement.find('.dtp-close > a'), 'click', this._onCloseClick.bind(this));
      this._attachEvent(this.$element, 'focus', this._onFocus.bind(this));
    },
    initDays: function initDays() {
      this.days = [];
      for (var i = this.params.weekStart; this.days.length < 7; i++) {
        if (i > 6) {
          i = 0;
        }
        this.days.push(i.toString());
      }
    },
    initDates: function initDates() {
      if (this.$element.val().length > 0) {
        if (typeof this.params.format !== 'undefined' && this.params.format !== null) {
          this.currentDate = moment(this.$element.val(), this.params.format).locale(this.params.lang);
        } else {
          this.currentDate = moment(this.$element.val()).locale(this.params.lang);
        }
      } else {
        if (typeof this.$element.attr('value') !== 'undefined' && this.$element.attr('value') !== null && this.$element.attr('value') !== "") {
          if (typeof this.$element.attr('value') === 'string') {
            if (typeof this.params.format !== 'undefined' && this.params.format !== null) {
              this.currentDate = moment(this.$element.attr('value'), this.params.format).locale(this.params.lang);
            } else {
              this.currentDate = moment(this.$element.attr('value')).locale(this.params.lang);
            }
          }
        } else {
          if (typeof this.params.currentDate !== 'undefined' && this.params.currentDate !== null) {
            if (typeof this.params.currentDate === 'string') {
              if (typeof this.params.format !== 'undefined' && this.params.format !== null) {
                this.currentDate = moment(this.params.currentDate, this.params.format).locale(this.params.lang);
              } else {
                this.currentDate = moment(this.params.currentDate).locale(this.params.lang);
              }
            } else {
              if (typeof this.params.currentDate.isValid === 'undefined' || typeof this.params.currentDate.isValid !== 'function') {
                var x = this.params.currentDate.getTime();
                this.currentDate = moment(x, "x").locale(this.params.lang);
              } else {
                this.currentDate = this.params.currentDate;
              }
            }
            this.$element.val(this.currentDate.format(this.params.format));
          } else this.currentDate = moment();
        }
      }
      if (typeof this.params.minDate !== 'undefined' && this.params.minDate !== null) {
        if (typeof this.params.minDate === 'string') {
          if (typeof this.params.format !== 'undefined' && this.params.format !== null) {
            this.minDate = moment(this.params.minDate, this.params.format).locale(this.params.lang);
          } else {
            this.minDate = moment(this.params.minDate).locale(this.params.lang);
          }
        } else {
          if (typeof this.params.minDate.isValid === 'undefined' || typeof this.params.minDate.isValid !== 'function') {
            var x = this.params.minDate.getTime();
            this.minDate = moment(x, "x").locale(this.params.lang);
          } else {
            this.minDate = this.params.minDate;
          }
        }
      } else if (this.params.minDate === null) {
        this.minDate = null;
      }
      if (typeof this.params.maxDate !== 'undefined' && this.params.maxDate !== null) {
        if (typeof this.params.maxDate === 'string') {
          if (typeof this.params.format !== 'undefined' && this.params.format !== null) {
            this.maxDate = moment(this.params.maxDate, this.params.format).locale(this.params.lang);
          } else {
            this.maxDate = moment(this.params.maxDate).locale(this.params.lang);
          }
        } else {
          if (typeof this.params.maxDate.isValid === 'undefined' || typeof this.params.maxDate.isValid !== 'function') {
            var x = this.params.maxDate.getTime();
            this.maxDate = moment(x, "x").locale(this.params.lang);
          } else {
            this.maxDate = this.params.maxDate;
          }
        }
      } else if (this.params.maxDate === null) {
        this.maxDate = null;
      }
      if (!this.isAfterMinDate(this.currentDate)) {
        this.currentDate = moment(this.minDate);
      }
      if (!this.isBeforeMaxDate(this.currentDate)) {
        this.currentDate = moment(this.maxDate);
      }
    },
    initTemplate: function initTemplate() {
      this.template = '<div class="dtp hidden" id="' + this.name + '">' + '<div class="dtp-content">' + '<div class="dtp-date-view">' + '<header class="dtp-header">' + '<div class="dtp-actual-day">Lundi</div>' + '<div class="dtp-close"><a href="javascript:void(0);"><i class="material-icons">clear</i></</div>' + '</header>' + '<div class="dtp-date hidden">' + '<div>' + '<div class="left center p10">' + '<a href="javascript:void(0);" class="dtp-select-month-before"><i class="material-icons">chevron_left</i></a>' + '</div>' + '<div class="dtp-actual-month p80">MAR</div>' + '<div class="right center p10">' + '<a href="javascript:void(0);" class="dtp-select-month-after"><i class="material-icons">chevron_right</i></a>' + '</div>' + '<div class="clearfix"></div>' + '</div>' + '<div class="dtp-actual-num">13</div>' + '<div>' + '<div class="left center p10">' + '<a href="javascript:void(0);" class="dtp-select-year-before"><i class="material-icons">chevron_left</i></a>' + '</div>' + '<div class="dtp-actual-year p80">2014</div>' + '<div class="right center p10">' + '<a href="javascript:void(0);" class="dtp-select-year-after"><i class="material-icons">chevron_right</i></a>' + '</div>' + '<div class="clearfix"></div>' + '</div>' + '</div>' + '<div class="dtp-time hidden">' + '<div class="dtp-actual-maxtime">23:55</div>' + '</div>' + '<div class="dtp-picker">' + '<div class="dtp-picker-calendar"></div>' + '<div class="dtp-picker-datetime hidden">' + '<div class="dtp-actual-meridien">' + '<div class="left p20">' + '<a class="dtp-meridien-am" href="javascript:void(0);">AM</a>' + '</div>' + '<div class="dtp-actual-time p60"></div>' + '<div class="right p20">' + '<a class="dtp-meridien-pm" href="javascript:void(0);">PM</a>' + '</div>' + '<div class="clearfix"></div>' + '</div>' + '<div id="dtp-svg-clock">' + '</div>' + '</div>' + '</div>' + '</div>' + '<div class="dtp-buttons">' + '<button class="dtp-btn-now btn btn-flat hidden">' + this.params.nowText + '</button>' + '<button class="dtp-btn-clear btn btn-flat hidden">' + this.params.clearText + '</button>' + '<button class="dtp-btn-cancel btn btn-flat">' + this.params.cancelText + '</button>' + '<button class="dtp-btn-ok btn btn-flat">' + this.params.okText + '</button>' + '<div class="clearfix"></div>' + '</div>' + '</div>' + '</div>';
      if ($('body').find("#" + this.name).length <= 0) {
        $('body').append(this.template);
        if (this) this.dtpElement = $('body').find("#" + this.name);
        this.$dtpElement = $(this.dtpElement);
      }
    },
    initButtons: function initButtons() {
      this._attachEvent(this.$dtpElement.find('.dtp-btn-cancel'), 'click', this._onCancelClick.bind(this));
      this._attachEvent(this.$dtpElement.find('.dtp-btn-ok'), 'click', this._onOKClick.bind(this));
      this._attachEvent(this.$dtpElement.find('a.dtp-select-month-before'), 'click', this._onMonthBeforeClick.bind(this));
      this._attachEvent(this.$dtpElement.find('a.dtp-select-month-after'), 'click', this._onMonthAfterClick.bind(this));
      this._attachEvent(this.$dtpElement.find('a.dtp-select-year-before'), 'click', this._onYearBeforeClick.bind(this));
      this._attachEvent(this.$dtpElement.find('a.dtp-select-year-after'), 'click', this._onYearAfterClick.bind(this));
      if (this.params.clearButton === true) {
        this._attachEvent(this.$dtpElement.find('.dtp-btn-clear'), 'click', this._onClearClick.bind(this));
        this.$dtpElement.find('.dtp-btn-clear').removeClass('hidden');
      }
      if (this.params.nowButton === true) {
        this._attachEvent(this.$dtpElement.find('.dtp-btn-now'), 'click', this._onNowClick.bind(this));
        this.$dtpElement.find('.dtp-btn-now').removeClass('hidden');
      }
      if (this.params.nowButton === true && this.params.clearButton === true) {
        this.$dtpElement.find('.dtp-btn-clear, .dtp-btn-now, .dtp-btn-cancel, .dtp-btn-ok').addClass('btn-xs');
      } else if (this.params.nowButton === true || this.params.clearButton === true) {
        this.$dtpElement.find('.dtp-btn-clear, .dtp-btn-now, .dtp-btn-cancel, .dtp-btn-ok').addClass('btn-sm');
      }
    },
    initMeridienButtons: function initMeridienButtons() {
      this.$dtpElement.find('a.dtp-meridien-am').off('click').on('click', this._onSelectAM.bind(this));
      this.$dtpElement.find('a.dtp-meridien-pm').off('click').on('click', this._onSelectPM.bind(this));
    },
    initDate: function initDate(d) {
      this.currentView = 0;
      this.$dtpElement.find('.dtp-picker-calendar').removeClass('hidden');
      this.$dtpElement.find('.dtp-picker-datetime').addClass('hidden');
      var _date = typeof this.currentDate !== 'undefined' && this.currentDate !== null ? this.currentDate : null;
      var _calendar = this.generateCalendar(this.currentDate);
      if (typeof _calendar.week !== 'undefined' && typeof _calendar.days !== 'undefined') {
        var _template = this.constructHTMLCalendar(_date, _calendar);
        this.$dtpElement.find('a.dtp-select-day').off('click');
        this.$dtpElement.find('.dtp-picker-calendar').html(_template);
        this.$dtpElement.find('a.dtp-select-day').on('click', this._onSelectDate.bind(this));
        this.toggleButtons(_date);
      }
      this._centerBox();
      this.showDate(_date);
    },
    initHours: function initHours() {
      this.currentView = 1;
      this.showTime(this.currentDate);
      this.initMeridienButtons();
      if (this.currentDate.hour() < 12) {
        this.$dtpElement.find('a.dtp-meridien-am').click();
      } else {
        this.$dtpElement.find('a.dtp-meridien-pm').click();
      }
      var hFormat = this.params.shortTime ? 'h' : 'H';
      this.$dtpElement.find('.dtp-picker-datetime').removeClass('hidden');
      this.$dtpElement.find('.dtp-picker-calendar').addClass('hidden');
      var svgClockElement = this.createSVGClock(true);
      for (var i = 0; i < 12; i++) {
        var x = -(162 * Math.sin(-Math.PI * 2 * (i / 12)));
        var y = -(162 * Math.cos(-Math.PI * 2 * (i / 12)));
        var fill = this.currentDate.format(hFormat) == i ? "#007d72" : 'transparent';
        var color = this.currentDate.format(hFormat) == i ? "#fff" : '#000';
        var svgHourCircle = this.createSVGElement("circle", {
          'id': 'h-' + i,
          'class': 'dtp-select-hour',
          'style': 'cursor:pointer',
          r: '30',
          cx: x,
          cy: y,
          fill: fill,
          'data-hour': i
        });
        var svgHourText = this.createSVGElement("text", {
          'id': 'th-' + i,
          'class': 'dtp-select-hour-text',
          'text-anchor': 'middle',
          'style': 'cursor:pointer',
          'font-weight': 'bold',
          'font-size': '20',
          x: x,
          y: y + 7,
          fill: color,
          'data-hour': i
        });
        svgHourText.textContent = i === 0 ? this.params.shortTime ? 12 : i : i;
        if (!this.toggleTime(i, true)) {
          svgHourCircle.className += " disabled";
          svgHourText.className += " disabled";
          svgHourText.setAttribute('fill', '#bdbdbd');
        } else {
          svgHourCircle.addEventListener('click', this._onSelectHour.bind(this));
          svgHourText.addEventListener('click', this._onSelectHour.bind(this));
        }
        svgClockElement.appendChild(svgHourCircle);
        svgClockElement.appendChild(svgHourText);
      }
      if (!this.params.shortTime) {
        for (var i = 0; i < 12; i++) {
          var x = -(110 * Math.sin(-Math.PI * 2 * (i / 12)));
          var y = -(110 * Math.cos(-Math.PI * 2 * (i / 12)));
          var fill = this.currentDate.format(hFormat) == i + 12 ? "#007d72" : 'transparent';
          var color = this.currentDate.format(hFormat) == i + 12 ? "#fff" : '#000';
          var svgHourCircle = this.createSVGElement("circle", {
            'id': 'h-' + (i + 12),
            'class': 'dtp-select-hour',
            'style': 'cursor:pointer',
            r: '30',
            cx: x,
            cy: y,
            fill: fill,
            'data-hour': i + 12
          });
          var svgHourText = this.createSVGElement("text", {
            'id': 'th-' + (i + 12),
            'class': 'dtp-select-hour-text',
            'text-anchor': 'middle',
            'style': 'cursor:pointer',
            'font-weight': 'bold',
            'font-size': '22',
            x: x,
            y: y + 7,
            fill: color,
            'data-hour': i + 12
          });
          svgHourText.textContent = i + 12;
          if (!this.toggleTime(i + 12, true)) {
            svgHourCircle.className += " disabled";
            svgHourText.className += " disabled";
            svgHourText.setAttribute('fill', '#bdbdbd');
          } else {
            svgHourCircle.addEventListener('click', this._onSelectHour.bind(this));
            svgHourText.addEventListener('click', this._onSelectHour.bind(this));
          }
          svgClockElement.appendChild(svgHourCircle);
          svgClockElement.appendChild(svgHourText);
        }
        this.$dtpElement.find('a.dtp-meridien-am').addClass('hidden');
        this.$dtpElement.find('a.dtp-meridien-pm').addClass('hidden');
      }
      this._centerBox();
    },
    initMinutes: function initMinutes() {
      this.currentView = 2;
      this.showTime(this.currentDate);
      this.initMeridienButtons();
      if (this.currentDate.hour() < 12) {
        this.$dtpElement.find('a.dtp-meridien-am').click();
      } else {
        this.$dtpElement.find('a.dtp-meridien-pm').click();
      }
      this.$dtpElement.find('.dtp-picker-calendar').addClass('hidden');
      this.$dtpElement.find('.dtp-picker-datetime').removeClass('hidden');
      var svgClockElement = this.createSVGClock(false);
      for (var i = 0; i < 60; i++) {
        var s = i % 5 === 0 ? 162 : 158;
        var r = i % 5 === 0 ? 30 : 20;
        var x = -(s * Math.sin(-Math.PI * 2 * (i / 60)));
        var y = -(s * Math.cos(-Math.PI * 2 * (i / 60)));
        var color = this.currentDate.format("m") == i ? "#007d72" : 'transparent';
        var svgMinuteCircle = this.createSVGElement("circle", {
          'id': 'm-' + i,
          'class': 'dtp-select-minute',
          'style': 'cursor:pointer',
          r: r,
          cx: x,
          cy: y,
          fill: color,
          'data-minute': i
        });
        if (!this.toggleTime(i, false)) {
          svgMinuteCircle.className += " disabled";
        } else {
          svgMinuteCircle.addEventListener('click', this._onSelectMinute.bind(this));
        }
        svgClockElement.appendChild(svgMinuteCircle);
      }
      for (var i = 0; i < 60; i++) {
        if (i % 5 === 0) {
          var x = -(162 * Math.sin(-Math.PI * 2 * (i / 60)));
          var y = -(162 * Math.cos(-Math.PI * 2 * (i / 60)));
          var color = this.currentDate.format("m") == i ? "#fff" : '#000';
          var svgMinuteText = this.createSVGElement("text", {
            'id': 'tm-' + i,
            'class': 'dtp-select-minute-text',
            'text-anchor': 'middle',
            'style': 'cursor:pointer',
            'font-weight': 'bold',
            'font-size': '20',
            x: x,
            y: y + 7,
            fill: color,
            'data-minute': i
          });
          svgMinuteText.textContent = i;
          if (!this.toggleTime(i, false)) {
            svgMinuteText.className += " disabled";
            svgMinuteText.setAttribute('fill', '#bdbdbd');
          } else {
            svgMinuteText.addEventListener('click', this._onSelectMinute.bind(this));
          }
          svgClockElement.appendChild(svgMinuteText);
        }
      }
      this._centerBox();
    },
    animateHands: function animateHands() {
      var H = this.currentDate.hour();
      var M = this.currentDate.minute();
      var hh = this.$dtpElement.find('.hour-hand');
      hh[0].setAttribute('transform', "rotate(" + 360 * H / 12 + ")");
      var mh = this.$dtpElement.find('.minute-hand');
      mh[0].setAttribute('transform', "rotate(" + 360 * M / 60 + ")");
    },
    createSVGClock: function createSVGClock(isHour) {
      var hl = this.params.shortTime ? -120 : -90;
      var svgElement = this.createSVGElement("svg", {
        "class": 'svg-clock',
        viewBox: '0,0,400,400'
      });
      var svgGElement = this.createSVGElement("g", {
        transform: 'translate(200,200) '
      });
      var svgClockFace = this.createSVGElement("circle", {
        r: '192',
        fill: '#eee',
        stroke: '#bdbdbd',
        'stroke-width': 2
      });
      var svgClockCenter = this.createSVGElement("circle", {
        r: '15',
        fill: '#757575'
      });
      svgGElement.appendChild(svgClockFace);
      if (isHour) {
        var svgMinuteHand = this.createSVGElement("line", {
          "class": 'minute-hand',
          x1: 0,
          y1: 0,
          x2: 0,
          y2: -150,
          stroke: '#bdbdbd',
          'stroke-width': 2
        });
        var svgHourHand = this.createSVGElement("line", {
          "class": 'hour-hand',
          x1: 0,
          y1: 0,
          x2: 0,
          y2: hl,
          stroke: '#007d72',
          'stroke-width': 8
        });
        svgGElement.appendChild(svgMinuteHand);
        svgGElement.appendChild(svgHourHand);
      } else {
        var svgMinuteHand = this.createSVGElement("line", {
          "class": 'minute-hand',
          x1: 0,
          y1: 0,
          x2: 0,
          y2: -150,
          stroke: '#007d72',
          'stroke-width': 2
        });
        var svgHourHand = this.createSVGElement("line", {
          "class": 'hour-hand',
          x1: 0,
          y1: 0,
          x2: 0,
          y2: hl,
          stroke: '#bdbdbd',
          'stroke-width': 8
        });
        svgGElement.appendChild(svgHourHand);
        svgGElement.appendChild(svgMinuteHand);
      }
      svgGElement.appendChild(svgClockCenter);
      svgElement.appendChild(svgGElement);
      this.$dtpElement.find("#dtp-svg-clock").empty();
      this.$dtpElement.find("#dtp-svg-clock")[0].appendChild(svgElement);
      this.animateHands();
      return svgGElement;
    },
    createSVGElement: function createSVGElement(tag, attrs) {
      var el = document.createElementNS('http://www.w3.org/2000/svg', tag);
      for (var k in attrs) {
        el.setAttribute(k, attrs[k]);
      }
      return el;
    },
    isAfterMinDate: function isAfterMinDate(date, checkHour, checkMinute) {
      var _return = true;
      if (typeof this.minDate !== 'undefined' && this.minDate !== null) {
        var _minDate = moment(this.minDate);
        var _date = moment(date);
        if (!checkHour && !checkMinute) {
          _minDate.hour(0);
          _minDate.minute(0);
          _date.hour(0);
          _date.minute(0);
        }
        _minDate.second(0);
        _date.second(0);
        _minDate.millisecond(0);
        _date.millisecond(0);
        if (!checkMinute) {
          _date.minute(0);
          _minDate.minute(0);
          _return = parseInt(_date.format("X")) >= parseInt(_minDate.format("X"));
        } else {
          _return = parseInt(_date.format("X")) >= parseInt(_minDate.format("X"));
        }
      }
      return _return;
    },
    isBeforeMaxDate: function isBeforeMaxDate(date, checkTime, checkMinute) {
      var _return = true;
      if (typeof this.maxDate !== 'undefined' && this.maxDate !== null) {
        var _maxDate = moment(this.maxDate);
        var _date = moment(date);
        if (!checkTime && !checkMinute) {
          _maxDate.hour(0);
          _maxDate.minute(0);
          _date.hour(0);
          _date.minute(0);
        }
        _maxDate.second(0);
        _date.second(0);
        _maxDate.millisecond(0);
        _date.millisecond(0);
        if (!checkMinute) {
          _date.minute(0);
          _maxDate.minute(0);
          _return = parseInt(_date.format("X")) <= parseInt(_maxDate.format("X"));
        } else {
          _return = parseInt(_date.format("X")) <= parseInt(_maxDate.format("X"));
        }
      }
      return _return;
    },
    rotateElement: function rotateElement(el, deg) {
      $(el).css({
        WebkitTransform: 'rotate(' + deg + 'deg)',
        '-moz-transform': 'rotate(' + deg + 'deg)'
      });
    },
    showDate: function showDate(date) {
      if (date) {
        this.$dtpElement.find('.dtp-actual-day').html(date.locale(this.params.lang).format('dddd'));
        this.$dtpElement.find('.dtp-actual-month').html(date.locale(this.params.lang).format('MMM').toUpperCase());
        this.$dtpElement.find('.dtp-actual-num').html(date.locale(this.params.lang).format('DD'));
        this.$dtpElement.find('.dtp-actual-year').html(date.locale(this.params.lang).format('YYYY'));
      }
    },
    showTime: function showTime(date) {
      if (date) {
        var minutes = date.minute();
        var content = (this.params.shortTime ? date.format('hh') : date.format('HH')) + ':' + (minutes.toString().length == 2 ? minutes : '0' + minutes) + (this.params.shortTime ? ' ' + date.format('A') : '');
        if (this.params.date) this.$dtpElement.find('.dtp-actual-time').html(content);else {
          if (this.params.shortTime) this.$dtpElement.find('.dtp-actual-day').html(date.format('A'));else this.$dtpElement.find('.dtp-actual-day').html('&nbsp;');
          this.$dtpElement.find('.dtp-actual-maxtime').html(content);
        }
      }
    },
    selectDate: function selectDate(date) {
      if (date) {
        this.currentDate.date(date);
        this.showDate(this.currentDate);
        this.$element.trigger('dateSelected', this.currentDate);
      }
    },
    generateCalendar: function generateCalendar(date) {
      var _calendar = {};
      if (date !== null) {
        var startOfMonth = moment(date).locale(this.params.lang).startOf('month');
        var endOfMonth = moment(date).locale(this.params.lang).endOf('month');
        var iNumDay = startOfMonth.format('d');
        _calendar.week = this.days;
        _calendar.days = [];
        for (var i = startOfMonth.date(); i <= endOfMonth.date(); i++) {
          if (i === startOfMonth.date()) {
            var iWeek = _calendar.week.indexOf(iNumDay.toString());
            if (iWeek > 0) {
              for (var x = 0; x < iWeek; x++) {
                _calendar.days.push(0);
              }
            }
          }
          _calendar.days.push(moment(startOfMonth).locale(this.params.lang).date(i));
        }
      }
      return _calendar;
    },
    constructHTMLCalendar: function constructHTMLCalendar(date, calendar) {
      var _template = "";
      _template += '<div class="dtp-picker-month">' + date.locale(this.params.lang).format('MMMM YYYY') + '</div>';
      _template += '<table class="table dtp-picker-days"><thead>';
      for (var i = 0; i < calendar.week.length; i++) {
        _template += '<th>' + moment(parseInt(calendar.week[i]), "d").locale(this.params.lang).format("dd").substring(0, 1) + '</th>';
      }
      _template += '</thead>';
      _template += '<tbody><tr>';
      for (var i = 0; i < calendar.days.length; i++) {
        if (i % 7 == 0) _template += '</tr><tr>';
        _template += '<td data-date="' + moment(calendar.days[i]).locale(this.params.lang).format("D") + '">';
        if (calendar.days[i] != 0) {
          if (this.isBeforeMaxDate(moment(calendar.days[i]), false, false) === false || this.isAfterMinDate(moment(calendar.days[i]), false, false) === false) {
            _template += '<span class="dtp-select-day">' + moment(calendar.days[i]).locale(this.params.lang).format("DD") + '</span>';
          } else {
            if (moment(calendar.days[i]).locale(this.params.lang).format("DD") === moment(this.currentDate).locale(this.params.lang).format("DD")) {
              _template += '<a href="javascript:void(0);" class="dtp-select-day selected">' + moment(calendar.days[i]).locale(this.params.lang).format("DD") + '</a>';
            } else {
              _template += '<a href="javascript:void(0);" class="dtp-select-day">' + moment(calendar.days[i]).locale(this.params.lang).format("DD") + '</a>';
            }
          }
          _template += '</td>';
        }
      }
      _template += '</tr></tbody></table>';
      return _template;
    },
    setName: function setName() {
      var text = "";
      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
      for (var i = 0; i < 5; i++) {
        text += possible.charAt(Math.floor(Math.random() * possible.length));
      }
      return text;
    },
    isPM: function isPM() {
      return this.$dtpElement.find('a.dtp-meridien-pm').hasClass('selected');
    },
    setElementValue: function setElementValue() {
      this.$element.trigger('beforeChange', this.currentDate);
      if (typeof $.material !== 'undefined') {
        this.$element.removeClass('empty');
      }
      this.$element.val(moment(this.currentDate).locale(this.params.lang).format(this.params.format));
      this.$element.trigger('change', this.currentDate);
    },
    toggleButtons: function toggleButtons(date) {
      if (date && date.isValid()) {
        var startOfMonth = moment(date).locale(this.params.lang).startOf('month');
        var endOfMonth = moment(date).locale(this.params.lang).endOf('month');
        if (!this.isAfterMinDate(startOfMonth, false, false)) {
          this.$dtpElement.find('a.dtp-select-month-before').addClass('invisible');
        } else {
          this.$dtpElement.find('a.dtp-select-month-before').removeClass('invisible');
        }
        if (!this.isBeforeMaxDate(endOfMonth, false, false)) {
          this.$dtpElement.find('a.dtp-select-month-after').addClass('invisible');
        } else {
          this.$dtpElement.find('a.dtp-select-month-after').removeClass('invisible');
        }
        var startOfYear = moment(date).locale(this.params.lang).startOf('year');
        var endOfYear = moment(date).locale(this.params.lang).endOf('year');
        if (!this.isAfterMinDate(startOfYear, false, false)) {
          this.$dtpElement.find('a.dtp-select-year-before').addClass('invisible');
        } else {
          this.$dtpElement.find('a.dtp-select-year-before').removeClass('invisible');
        }
        if (!this.isBeforeMaxDate(endOfYear, false, false)) {
          this.$dtpElement.find('a.dtp-select-year-after').addClass('invisible');
        } else {
          this.$dtpElement.find('a.dtp-select-year-after').removeClass('invisible');
        }
      }
    },
    toggleTime: function toggleTime(value, isHours) {
      var result = false;
      if (isHours) {
        var _date = moment(this.currentDate);
        _date.hour(this.convertHours(value)).minute(0).second(0);
        result = !(this.isAfterMinDate(_date, true, false) === false || this.isBeforeMaxDate(_date, true, false) === false);
      } else {
        var _date = moment(this.currentDate);
        _date.minute(value).second(0);
        result = !(this.isAfterMinDate(_date, true, true) === false || this.isBeforeMaxDate(_date, true, true) === false);
      }
      return result;
    },
    _attachEvent: function _attachEvent(el, ev, fn) {
      el.on(ev, null, null, fn);
      this._attachedEvents.push([el, ev, fn]);
    },
    _detachEvents: function _detachEvents() {
      for (var i = this._attachedEvents.length - 1; i >= 0; i--) {
        this._attachedEvents[i][0].off(this._attachedEvents[i][1], this._attachedEvents[i][2]);
        this._attachedEvents.splice(i, 1);
      }
    },
    _onFocus: function _onFocus() {
      this.currentView = 0;
      this.$element.blur();
      this.initDates();
      this.show();
      if (this.params.date) {
        this.$dtpElement.find('.dtp-date').removeClass('hidden');
        this.initDate();
      } else {
        if (this.params.time) {
          this.$dtpElement.find('.dtp-time').removeClass('hidden');
          this.initHours();
        }
      }
    },
    _onBackgroundClick: function _onBackgroundClick(e) {
      e.stopPropagation();
      this.hide();
    },
    _onElementClick: function _onElementClick(e) {
      e.stopPropagation();
    },
    _onKeydown: function _onKeydown(e) {
      if (e.which === 27) {
        this.hide();
      }
    },
    _onCloseClick: function _onCloseClick() {
      this.hide();
    },
    _onClearClick: function _onClearClick() {
      this.currentDate = null;
      this.$element.trigger('beforeChange', this.currentDate);
      this.hide();
      if (typeof $.material !== 'undefined') {
        this.$element.addClass('empty');
      }
      this.$element.val('');
      this.$element.trigger('change', this.currentDate);
    },
    _onNowClick: function _onNowClick() {
      this.currentDate = moment();
      if (this.params.date === true) {
        this.showDate(this.currentDate);
        if (this.currentView === 0) {
          this.initDate();
        }
      }
      if (this.params.time === true) {
        this.showTime(this.currentDate);
        switch (this.currentView) {
          case 1:
            this.initHours();
            break;
          case 2:
            this.initMinutes();
            break;
        }
        this.animateHands();
      }
    },
    _onOKClick: function _onOKClick() {
      switch (this.currentView) {
        case 0:
          if (this.params.time === true) {
            this.initHours();
          } else {
            this.setElementValue();
            this.hide();
          }
          break;
        case 1:
          this.initMinutes();
          break;
        case 2:
          this.setElementValue();
          this.hide();
          break;
      }
    },
    _onCancelClick: function _onCancelClick() {
      if (this.params.time) {
        switch (this.currentView) {
          case 0:
            this.hide();
            break;
          case 1:
            if (this.params.date) {
              this.initDate();
            } else {
              this.hide();
            }
            break;
          case 2:
            this.initHours();
            break;
        }
      } else {
        this.hide();
      }
    },
    _onMonthBeforeClick: function _onMonthBeforeClick() {
      this.currentDate.subtract(1, 'months');
      this.initDate(this.currentDate);
    },
    _onMonthAfterClick: function _onMonthAfterClick() {
      this.currentDate.add(1, 'months');
      this.initDate(this.currentDate);
    },
    _onYearBeforeClick: function _onYearBeforeClick() {
      this.currentDate.subtract(1, 'years');
      this.initDate(this.currentDate);
    },
    _onYearAfterClick: function _onYearAfterClick() {
      this.currentDate.add(1, 'years');
      this.initDate(this.currentDate);
    },
    _onSelectDate: function _onSelectDate(e) {
      this.$dtpElement.find('a.dtp-select-day').removeClass('selected');
      $(e.currentTarget).addClass('selected');
      this.selectDate($(e.currentTarget).parent().data("date"));
      if (this.params.switchOnClick === true && this.params.time === true) setTimeout(this.initHours.bind(this), 200);
      if (this.params.switchOnClick === true && this.params.time === false) {
        setTimeout(this._onOKClick.bind(this), 200);
      }
    },
    _onSelectHour: function _onSelectHour(e) {
      if (!$(e.target).hasClass('disabled')) {
        var value = $(e.target).data('hour');
        var parent = $(e.target).parent();
        var h = parent.find('.dtp-select-hour');
        for (var i = 0; i < h.length; i++) {
          $(h[i]).attr('fill', 'transparent');
        }
        var th = parent.find('.dtp-select-hour-text');
        for (var i = 0; i < th.length; i++) {
          $(th[i]).attr('fill', '#000');
        }
        $(parent.find('#h-' + value)).attr('fill', '#007d72');
        $(parent.find('#th-' + value)).attr('fill', '#fff');
        this.currentDate.hour(parseInt(value));
        if (this.params.shortTime === true && this.isPM()) {
          this.currentDate.add(12, 'hours');
        }
        this.showTime(this.currentDate);
        this.animateHands();
        if (this.params.switchOnClick === true) setTimeout(this.initMinutes.bind(this), 200);
      }
    },
    _onSelectMinute: function _onSelectMinute(e) {
      if (!$(e.target).hasClass('disabled')) {
        var value = $(e.target).data('minute');
        var parent = $(e.target).parent();
        var m = parent.find('.dtp-select-minute');
        for (var i = 0; i < m.length; i++) {
          $(m[i]).attr('fill', 'transparent');
        }
        var tm = parent.find('.dtp-select-minute-text');
        for (var i = 0; i < tm.length; i++) {
          $(tm[i]).attr('fill', '#000');
        }
        $(parent.find('#m-' + value)).attr('fill', '#007d72');
        $(parent.find('#tm-' + value)).attr('fill', '#fff');
        this.currentDate.minute(parseInt(value));
        this.showTime(this.currentDate);
        this.animateHands();
        if (this.params.switchOnClick === true) setTimeout(function () {
          this.setElementValue();
          this.hide();
        }.bind(this), 200);
      }
    },
    _onSelectAM: function _onSelectAM(e) {
      $('.dtp-actual-meridien').find('a').removeClass('selected');
      $(e.currentTarget).addClass('selected');
      if (this.currentDate.hour() >= 12) {
        if (this.currentDate.subtract(12, 'hours')) this.showTime(this.currentDate);
      }
      this.toggleTime(this.currentView === 1);
    },
    _onSelectPM: function _onSelectPM(e) {
      $('.dtp-actual-meridien').find('a').removeClass('selected');
      $(e.currentTarget).addClass('selected');
      if (this.currentDate.hour() < 12) {
        if (this.currentDate.add(12, 'hours')) this.showTime(this.currentDate);
      }
      this.toggleTime(this.currentView === 1);
    },
    convertHours: function convertHours(h) {
      var _return = h;
      if (this.params.shortTime === true) {
        if (h < 12 && this.isPM()) {
          _return += 12;
        }
      }
      return _return;
    },
    setDate: function setDate(date) {
      this.params.currentDate = date;
      this.initDates();
    },
    setMinDate: function setMinDate(date) {
      this.params.minDate = date;
      this.initDates();
    },
    setMaxDate: function setMaxDate(date) {
      this.params.maxDate = date;
      this.initDates();
    },
    destroy: function destroy() {
      this._detachEvents();
      this.$dtpElement.remove();
    },
    show: function show() {
      this.$dtpElement.removeClass('hidden');
      this._attachEvent($(window), 'keydown', this._onKeydown.bind(this));
      this._centerBox();
    },
    hide: function hide() {
      $(window).off('keydown', null, null, this._onKeydown.bind(this));
      this.$dtpElement.addClass('hidden');
    },
    _centerBox: function _centerBox() {
      var h = (this.$dtpElement.height() - this.$dtpElement.find('.dtp-content').height()) / 2;
      this.$dtpElement.find('.dtp-content').css('marginLeft', -(this.$dtpElement.find('.dtp-content').width() / 2) + 'px');
      this.$dtpElement.find('.dtp-content').css('top', h + 'px');
    },
    enableDays: function enableDays() {
      var enableDays = this.params.enableDays;
      if (enableDays) {
        $(".dtp-picker-days tbody tr td").each(function () {
          if (!($.inArray($(this).index(), enableDays) >= 0)) {
            $(this).find('a').css({
              "background": "#e3e3e3",
              "cursor": "no-drop",
              "opacity": "0.5"
            }).off("click");
          }
        });
      }
    }
  };
})(jQuery, (moment__WEBPACK_IMPORTED_MODULE_10___default()));

/***/ }),

/***/ "./assets/js/bootstrap-notify.js":
/*!***************************************!*\
  !*** ./assets/js/bootstrap-notify.js ***!
  \***************************************/
/***/ ((module, exports, __webpack_require__) => {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
__webpack_require__(/*! core-js/modules/es.regexp.constructor.js */ "./node_modules/core-js/modules/es.regexp.constructor.js");
__webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
__webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
__webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
__webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
__webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
__webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
__webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
__webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
/*
* Project: Bootstrap Notify = v3.1.3
* Description: Turns standard Bootstrap alerts into "Growl-like" notifications.
* Author: Mouse0270 aka Robert McIntosh
* License: MIT License
* Website: https://github.com/mouse0270/bootstrap-growl
*/
(function (factory) {
  if (true) {
    // AMD. Register as an anonymous module.
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
})(function ($) {
  // Create the defaults once
  var defaults = {
    element: 'body',
    position: null,
    type: "info",
    allow_dismiss: true,
    newest_on_top: false,
    showProgressbar: false,
    placement: {
      from: "top",
      align: "right"
    },
    offset: 20,
    spacing: 10,
    z_index: 1031,
    delay: 5000,
    timer: 1000,
    url_target: '_blank',
    mouse_over: null,
    animate: {
      enter: 'animated fadeInDown',
      exit: 'animated fadeOutUp'
    },
    onShow: null,
    onShown: null,
    onClose: null,
    onClosed: null,
    icon_type: 'class',
    template: '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0}" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'
  };
  String.format = function () {
    var str = arguments[0];
    for (var i = 1; i < arguments.length; i++) {
      str = str.replace(RegExp("\\{" + (i - 1) + "\\}", "gm"), arguments[i]);
    }
    return str;
  };
  function Notify(element, content, options) {
    // Setup Content of Notify
    var content = {
      content: {
        message: _typeof(content) == 'object' ? content.message : content,
        title: content.title ? content.title : '',
        icon: content.icon ? content.icon : '',
        url: content.url ? content.url : '#',
        target: content.target ? content.target : '-'
      }
    };
    options = $.extend(true, {}, content, options);
    this.settings = $.extend(true, {}, defaults, options);
    this._defaults = defaults;
    if (this.settings.content.target == "-") {
      this.settings.content.target = this.settings.url_target;
    }
    this.animations = {
      start: 'webkitAnimationStart oanimationstart MSAnimationStart animationstart',
      end: 'webkitAnimationEnd oanimationend MSAnimationEnd animationend'
    };
    if (typeof this.settings.offset == 'number') {
      this.settings.offset = {
        x: this.settings.offset,
        y: this.settings.offset
      };
    }
    this.init();
  }
  ;
  $.extend(Notify.prototype, {
    init: function init() {
      var self = this;
      this.buildNotify();
      if (this.settings.content.icon) {
        this.setIcon();
      }
      if (this.settings.content.url != "#") {
        this.styleURL();
      }
      this.styleDismiss();
      this.placement();
      this.bind();
      this.notify = {
        $ele: this.$ele,
        update: function update(command, _update) {
          var commands = {};
          if (typeof command == "string") {
            commands[command] = _update;
          } else {
            commands = command;
          }
          for (var command in commands) {
            switch (command) {
              case "type":
                this.$ele.removeClass('alert-' + self.settings.type);
                this.$ele.find('[data-notify="progressbar"] > .progress-bar').removeClass('progress-bar-' + self.settings.type);
                self.settings.type = commands[command];
                this.$ele.addClass('alert-' + commands[command]).find('[data-notify="progressbar"] > .progress-bar').addClass('progress-bar-' + commands[command]);
                break;
              case "icon":
                var $icon = this.$ele.find('[data-notify="icon"]');
                if (self.settings.icon_type.toLowerCase() == 'class') {
                  $icon.removeClass(self.settings.content.icon).addClass(commands[command]);
                } else {
                  if (!$icon.is('img')) {
                    $icon.find('img');
                  }
                  $icon.attr('src', commands[command]);
                }
                break;
              case "progress":
                var newDelay = self.settings.delay - self.settings.delay * (commands[command] / 100);
                this.$ele.data('notify-delay', newDelay);
                this.$ele.find('[data-notify="progressbar"] > div').attr('aria-valuenow', commands[command]).css('width', commands[command] + '%');
                break;
              case "url":
                this.$ele.find('[data-notify="url"]').attr('href', commands[command]);
                break;
              case "target":
                this.$ele.find('[data-notify="url"]').attr('target', commands[command]);
                break;
              default:
                this.$ele.find('[data-notify="' + command + '"]').html(commands[command]);
            }
            ;
          }
          var posX = this.$ele.outerHeight() + parseInt(self.settings.spacing) + parseInt(self.settings.offset.y);
          self.reposition(posX);
        },
        close: function close() {
          self.close();
        }
      };
    },
    buildNotify: function buildNotify() {
      var content = this.settings.content;
      this.$ele = $(String.format(this.settings.template, this.settings.type, content.title, content.message, content.url, content.target));
      this.$ele.attr('data-notify-position', this.settings.placement.from + '-' + this.settings.placement.align);
      if (!this.settings.allow_dismiss) {
        this.$ele.find('[data-notify="dismiss"]').css('display', 'none');
      }
      if (this.settings.delay <= 0 && !this.settings.showProgressbar || !this.settings.showProgressbar) {
        this.$ele.find('[data-notify="progressbar"]').remove();
      }
    },
    setIcon: function setIcon() {
      if (this.settings.icon_type.toLowerCase() == 'class') {
        this.$ele.find('[data-notify="icon"]').addClass(this.settings.content.icon);
      } else {
        if (this.$ele.find('[data-notify="icon"]').is('img')) {
          this.$ele.find('[data-notify="icon"]').attr('src', this.settings.content.icon);
        } else {
          this.$ele.find('[data-notify="icon"]').append('<img src="' + this.settings.content.icon + '" alt="Notify Icon" />');
        }
      }
    },
    styleDismiss: function styleDismiss() {
      this.$ele.find('[data-notify="dismiss"]').css({
        position: 'absolute',
        right: '10px',
        top: '5px',
        zIndex: this.settings.z_index + 2
      });
    },
    styleURL: function styleURL() {
      this.$ele.find('[data-notify="url"]').css({
        backgroundImage: 'url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)',
        height: '100%',
        left: '0px',
        position: 'absolute',
        top: '0px',
        width: '100%',
        zIndex: this.settings.z_index + 1
      });
    },
    placement: function placement() {
      var self = this,
        offsetAmt = this.settings.offset.y,
        css = {
          display: 'inline-block',
          margin: '0px auto',
          position: this.settings.position ? this.settings.position : this.settings.element === 'body' ? 'fixed' : 'absolute',
          transition: 'all .5s ease-in-out',
          zIndex: this.settings.z_index
        },
        hasAnimation = false,
        settings = this.settings;
      $('[data-notify-position="' + this.settings.placement.from + '-' + this.settings.placement.align + '"]:not([data-closing="true"])').each(function () {
        return offsetAmt = Math.max(offsetAmt, parseInt($(this).css(settings.placement.from)) + parseInt($(this).outerHeight()) + parseInt(settings.spacing));
      });
      if (this.settings.newest_on_top == true) {
        offsetAmt = this.settings.offset.y;
      }
      css[this.settings.placement.from] = offsetAmt + 'px';
      switch (this.settings.placement.align) {
        case "left":
        case "right":
          css[this.settings.placement.align] = this.settings.offset.x + 'px';
          break;
        case "center":
          css.left = 0;
          css.right = 0;
          break;
      }
      this.$ele.css(css).addClass(this.settings.animate.enter);
      $.each(Array('webkit-', 'moz-', 'o-', 'ms-', ''), function (index, prefix) {
        self.$ele[0].style[prefix + 'AnimationIterationCount'] = 1;
      });
      $(this.settings.element).append(this.$ele);
      if (this.settings.newest_on_top == true) {
        offsetAmt = parseInt(offsetAmt) + parseInt(this.settings.spacing) + this.$ele.outerHeight();
        this.reposition(offsetAmt);
      }
      if ($.isFunction(self.settings.onShow)) {
        self.settings.onShow.call(this.$ele);
      }
      this.$ele.one(this.animations.start, function (event) {
        hasAnimation = true;
      }).one(this.animations.end, function (event) {
        if ($.isFunction(self.settings.onShown)) {
          self.settings.onShown.call(this);
        }
      });
      setTimeout(function () {
        if (!hasAnimation) {
          if ($.isFunction(self.settings.onShown)) {
            self.settings.onShown.call(this);
          }
        }
      }, 600);
    },
    bind: function bind() {
      var self = this;
      this.$ele.find('[data-notify="dismiss"]').on('click', function () {
        self.close();
      });
      this.$ele.mouseover(function (e) {
        $(this).data('data-hover', "true");
      }).mouseout(function (e) {
        $(this).data('data-hover', "false");
      });
      this.$ele.data('data-hover', "false");
      if (this.settings.delay > 0) {
        self.$ele.data('notify-delay', self.settings.delay);
        var timer = setInterval(function () {
          var delay = parseInt(self.$ele.data('notify-delay')) - self.settings.timer;
          if (self.$ele.data('data-hover') === 'false' && self.settings.mouse_over == "pause" || self.settings.mouse_over != "pause") {
            var percent = (self.settings.delay - delay) / self.settings.delay * 100;
            self.$ele.data('notify-delay', delay);
            self.$ele.find('[data-notify="progressbar"] > div').attr('aria-valuenow', percent).css('width', percent + '%');
          }
          if (delay <= -self.settings.timer) {
            clearInterval(timer);
            self.close();
          }
        }, self.settings.timer);
      }
    },
    close: function close() {
      var self = this,
        $successors = null,
        posX = parseInt(this.$ele.css(this.settings.placement.from)),
        hasAnimation = false;
      this.$ele.data('closing', 'true').addClass(this.settings.animate.exit);
      self.reposition(posX);
      if ($.isFunction(self.settings.onClose)) {
        self.settings.onClose.call(this.$ele);
      }
      this.$ele.one(this.animations.start, function (event) {
        hasAnimation = true;
      }).one(this.animations.end, function (event) {
        $(this).remove();
        if ($.isFunction(self.settings.onClosed)) {
          self.settings.onClosed.call(this);
        }
      });
      setTimeout(function () {
        if (!hasAnimation) {
          self.$ele.remove();
          if (self.settings.onClosed) {
            self.settings.onClosed(self.$ele);
          }
        }
      }, 600);
    },
    reposition: function reposition(posX) {
      var self = this,
        notifies = '[data-notify-position="' + this.settings.placement.from + '-' + this.settings.placement.align + '"]:not([data-closing="true"])',
        $elements = this.$ele.nextAll(notifies);
      if (this.settings.newest_on_top == true) {
        $elements = this.$ele.prevAll(notifies);
      }
      $elements.each(function () {
        $(this).css(self.settings.placement.from, posX);
        posX = parseInt(posX) + parseInt(self.settings.spacing) + $(this).outerHeight();
      });
    }
  });
  $.notify = function (content, options) {
    var plugin = new Notify(this, content, options);
    return plugin.notify;
  };
  $.notifyDefaults = function (options) {
    defaults = $.extend(true, {}, defaults, options);
    return defaults;
  };
  $.notifyClose = function (command) {
    if (typeof command === "undefined" || command == "all") {
      $('[data-notify]').find('[data-notify="dismiss"]').trigger('click');
    } else {
      $('[data-notify-position="' + command + '"]').find('[data-notify="dismiss"]').trigger('click');
    }
  };
});

/***/ }),

/***/ "./assets/js/jquery.nestable.js":
/*!**************************************!*\
  !*** ./assets/js/jquery.nestable.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
__webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/*!
 * Nestable jQuery Plugin - Copyright (c) 2012 David Bushell - http://dbushell.com/
 * Dual-licensed under the BSD or MIT licenses
 */
;
(function ($, window, document, undefined) {
  var hasTouch = ('ontouchstart' in document);

  /**
   * Detect CSS pointer-events property
   * events are normally disabled on the dragging element to avoid conflicts
   * https://github.com/ausi/Feature-detection-technique-for-pointer-events/blob/master/modernizr-pointerevents.js
   */
  var hasPointerEvents = function () {
    var el = document.createElement('div'),
      docEl = document.documentElement;
    if (!('pointerEvents' in el.style)) {
      return false;
    }
    el.style.pointerEvents = 'auto';
    el.style.pointerEvents = 'x';
    docEl.appendChild(el);
    var supports = window.getComputedStyle && window.getComputedStyle(el, '').pointerEvents === 'auto';
    docEl.removeChild(el);
    return !!supports;
  }();
  var defaults = {
    listNodeName: 'ol',
    itemNodeName: 'li',
    rootClass: 'dd',
    listClass: 'dd-list',
    itemClass: 'dd-item',
    dragClass: 'dd-dragel',
    handleClass: 'dd-handle',
    collapsedClass: 'dd-collapsed',
    placeClass: 'dd-placeholder',
    noDragClass: 'dd-nodrag',
    emptyClass: 'dd-empty',
    expandBtnHTML: '<button data-action="expand" type="button">Expand</button>',
    collapseBtnHTML: '<button data-action="collapse" type="button">Collapse</button>',
    group: 0,
    maxDepth: 5,
    threshold: 20
  };
  function Plugin(element, options) {
    this.w = $(document);
    this.el = $(element);
    this.options = $.extend({}, defaults, options);
    this.init();
  }
  Plugin.prototype = {
    init: function init() {
      var list = this;
      list.reset();
      list.el.data('nestable-group', this.options.group);
      list.placeEl = $('<div class="' + list.options.placeClass + '"/>');
      $.each(this.el.find(list.options.itemNodeName), function (k, el) {
        list.setParent($(el));
      });
      list.el.on('click', 'button', function (e) {
        if (list.dragEl) {
          return;
        }
        var target = $(e.currentTarget),
          action = target.data('action'),
          item = target.parent(list.options.itemNodeName);
        if (action === 'collapse') {
          list.collapseItem(item);
        }
        if (action === 'expand') {
          list.expandItem(item);
        }
      });
      var onStartEvent = function onStartEvent(e) {
        var handle = $(e.target);
        if (!handle.hasClass(list.options.handleClass)) {
          if (handle.closest('.' + list.options.noDragClass).length) {
            return;
          }
          handle = handle.closest('.' + list.options.handleClass);
        }
        if (!handle.length || list.dragEl) {
          return;
        }
        list.isTouch = /^touch/.test(e.type);
        if (list.isTouch && e.touches.length !== 1) {
          return;
        }
        e.preventDefault();
        list.dragStart(e.touches ? e.touches[0] : e);
      };
      var onMoveEvent = function onMoveEvent(e) {
        if (list.dragEl) {
          e.preventDefault();
          list.dragMove(e.touches ? e.touches[0] : e);
        }
      };
      var onEndEvent = function onEndEvent(e) {
        if (list.dragEl) {
          e.preventDefault();
          list.dragStop(e.touches ? e.touches[0] : e);
        }
      };
      if (hasTouch) {
        list.el[0].addEventListener('touchstart', onStartEvent, false);
        window.addEventListener('touchmove', onMoveEvent, false);
        window.addEventListener('touchend', onEndEvent, false);
        window.addEventListener('touchcancel', onEndEvent, false);
      }
      list.el.on('mousedown', onStartEvent);
      list.w.on('mousemove', onMoveEvent);
      list.w.on('mouseup', onEndEvent);
    },
    serialize: function serialize() {
      var data,
        depth = 0,
        list = this;
      step = function (_step) {
        function step(_x, _x2) {
          return _step.apply(this, arguments);
        }
        step.toString = function () {
          return _step.toString();
        };
        return step;
      }(function (level, depth) {
        var array = [],
          items = level.children(list.options.itemNodeName);
        items.each(function () {
          var li = $(this),
            item = $.extend({}, li.data()),
            sub = li.children(list.options.listNodeName);
          if (sub.length) {
            item.children = step(sub, depth + 1);
          }
          array.push(item);
        });
        return array;
      });
      data = step(list.el.find(list.options.listNodeName).first(), depth);
      return data;
    },
    serialise: function serialise() {
      return this.serialize();
    },
    reset: function reset() {
      this.mouse = {
        offsetX: 0,
        offsetY: 0,
        startX: 0,
        startY: 0,
        lastX: 0,
        lastY: 0,
        nowX: 0,
        nowY: 0,
        distX: 0,
        distY: 0,
        dirAx: 0,
        dirX: 0,
        dirY: 0,
        lastDirX: 0,
        lastDirY: 0,
        distAxX: 0,
        distAxY: 0
      };
      this.isTouch = false;
      this.moving = false;
      this.dragEl = null;
      this.dragRootEl = null;
      this.dragDepth = 0;
      this.hasNewRoot = false;
      this.pointEl = null;
    },
    expandItem: function expandItem(li) {
      li.removeClass(this.options.collapsedClass);
      li.children('[data-action="expand"]').hide();
      li.children('[data-action="collapse"]').show();
      li.children(this.options.listNodeName).show();
    },
    collapseItem: function collapseItem(li) {
      var lists = li.children(this.options.listNodeName);
      if (lists.length) {
        li.addClass(this.options.collapsedClass);
        li.children('[data-action="collapse"]').hide();
        li.children('[data-action="expand"]').show();
        li.children(this.options.listNodeName).hide();
      }
    },
    expandAll: function expandAll() {
      var list = this;
      list.el.find(list.options.itemNodeName).each(function () {
        list.expandItem($(this));
      });
    },
    collapseAll: function collapseAll() {
      var list = this;
      list.el.find(list.options.itemNodeName).each(function () {
        list.collapseItem($(this));
      });
    },
    setParent: function setParent(li) {
      if (li.children(this.options.listNodeName).length) {
        li.prepend($(this.options.expandBtnHTML));
        li.prepend($(this.options.collapseBtnHTML));
      }
      li.children('[data-action="expand"]').hide();
    },
    unsetParent: function unsetParent(li) {
      li.removeClass(this.options.collapsedClass);
      li.children('[data-action]').remove();
      li.children(this.options.listNodeName).remove();
    },
    dragStart: function dragStart(e) {
      var mouse = this.mouse,
        target = $(e.target),
        dragItem = target.closest(this.options.itemNodeName);
      this.placeEl.css('height', dragItem.height());
      mouse.offsetX = e.offsetX !== undefined ? e.offsetX : e.pageX - target.offset().left;
      mouse.offsetY = e.offsetY !== undefined ? e.offsetY : e.pageY - target.offset().top;
      mouse.startX = mouse.lastX = e.pageX;
      mouse.startY = mouse.lastY = e.pageY;
      this.dragRootEl = this.el;
      this.dragEl = $(document.createElement(this.options.listNodeName)).addClass(this.options.listClass + ' ' + this.options.dragClass);
      this.dragEl.css('width', dragItem.width());
      dragItem.after(this.placeEl);
      dragItem[0].parentNode.removeChild(dragItem[0]);
      dragItem.appendTo(this.dragEl);
      $(document.body).append(this.dragEl);
      this.dragEl.css({
        'left': e.pageX - mouse.offsetX,
        'top': e.pageY - mouse.offsetY
      });
      // total depth of dragging item
      var i,
        depth,
        items = this.dragEl.find(this.options.itemNodeName);
      for (i = 0; i < items.length; i++) {
        depth = $(items[i]).parents(this.options.listNodeName).length;
        if (depth > this.dragDepth) {
          this.dragDepth = depth;
        }
      }
    },
    dragStop: function dragStop(e) {
      var el = this.dragEl.children(this.options.itemNodeName).first();
      el[0].parentNode.removeChild(el[0]);
      this.placeEl.replaceWith(el);
      this.dragEl.remove();
      this.el.trigger('change');
      if (this.hasNewRoot) {
        this.dragRootEl.trigger('change');
      }
      this.reset();
    },
    dragMove: function dragMove(e) {
      var list,
        parent,
        prev,
        next,
        depth,
        opt = this.options,
        mouse = this.mouse;
      this.dragEl.css({
        'left': e.pageX - mouse.offsetX,
        'top': e.pageY - mouse.offsetY
      });

      // mouse position last events
      mouse.lastX = mouse.nowX;
      mouse.lastY = mouse.nowY;
      // mouse position this events
      mouse.nowX = e.pageX;
      mouse.nowY = e.pageY;
      // distance mouse moved between events
      mouse.distX = mouse.nowX - mouse.lastX;
      mouse.distY = mouse.nowY - mouse.lastY;
      // direction mouse was moving
      mouse.lastDirX = mouse.dirX;
      mouse.lastDirY = mouse.dirY;
      // direction mouse is now moving (on both axis)
      mouse.dirX = mouse.distX === 0 ? 0 : mouse.distX > 0 ? 1 : -1;
      mouse.dirY = mouse.distY === 0 ? 0 : mouse.distY > 0 ? 1 : -1;
      // axis mouse is now moving on
      var newAx = Math.abs(mouse.distX) > Math.abs(mouse.distY) ? 1 : 0;

      // do nothing on first move
      if (!mouse.moving) {
        mouse.dirAx = newAx;
        mouse.moving = true;
        return;
      }

      // calc distance moved on this axis (and direction)
      if (mouse.dirAx !== newAx) {
        mouse.distAxX = 0;
        mouse.distAxY = 0;
      } else {
        mouse.distAxX += Math.abs(mouse.distX);
        if (mouse.dirX !== 0 && mouse.dirX !== mouse.lastDirX) {
          mouse.distAxX = 0;
        }
        mouse.distAxY += Math.abs(mouse.distY);
        if (mouse.dirY !== 0 && mouse.dirY !== mouse.lastDirY) {
          mouse.distAxY = 0;
        }
      }
      mouse.dirAx = newAx;

      /**
       * move horizontal
       */
      if (mouse.dirAx && mouse.distAxX >= opt.threshold) {
        // reset move distance on x-axis for new phase
        mouse.distAxX = 0;
        prev = this.placeEl.prev(opt.itemNodeName);
        // increase horizontal level if previous sibling exists and is not collapsed
        if (mouse.distX > 0 && prev.length && !prev.hasClass(opt.collapsedClass)) {
          // cannot increase level when item above is collapsed
          list = prev.find(opt.listNodeName).last();
          // check if depth limit has reached
          depth = this.placeEl.parents(opt.listNodeName).length;
          if (depth + this.dragDepth <= opt.maxDepth) {
            // create new sub-level if one doesn't exist
            if (!list.length) {
              list = $('<' + opt.listNodeName + '/>').addClass(opt.listClass);
              list.append(this.placeEl);
              prev.append(list);
              this.setParent(prev);
            } else {
              // else append to next level up
              list = prev.children(opt.listNodeName).last();
              list.append(this.placeEl);
            }
          }
        }
        // decrease horizontal level
        if (mouse.distX < 0) {
          // we can't decrease a level if an item preceeds the current one
          next = this.placeEl.next(opt.itemNodeName);
          if (!next.length) {
            parent = this.placeEl.parent();
            this.placeEl.closest(opt.itemNodeName).after(this.placeEl);
            if (!parent.children().length) {
              this.unsetParent(parent.parent());
            }
          }
        }
      }
      var isEmpty = false;

      // find list item under cursor
      if (!hasPointerEvents) {
        this.dragEl[0].style.visibility = 'hidden';
      }
      this.pointEl = $(document.elementFromPoint(e.pageX - document.body.scrollLeft, e.pageY - (window.pageYOffset || document.documentElement.scrollTop)));
      if (!hasPointerEvents) {
        this.dragEl[0].style.visibility = 'visible';
      }
      if (this.pointEl.hasClass(opt.handleClass)) {
        this.pointEl = this.pointEl.parent(opt.itemNodeName);
      }
      if (this.pointEl.hasClass(opt.emptyClass)) {
        isEmpty = true;
      } else if (!this.pointEl.length || !this.pointEl.hasClass(opt.itemClass)) {
        return;
      }

      // find parent list of item under cursor
      var pointElRoot = this.pointEl.closest('.' + opt.rootClass),
        isNewRoot = this.dragRootEl.data('nestable-id') !== pointElRoot.data('nestable-id');

      /**
       * move vertical
       */
      if (!mouse.dirAx || isNewRoot || isEmpty) {
        // check if groups match if dragging over new root
        if (isNewRoot && opt.group !== pointElRoot.data('nestable-group')) {
          return;
        }
        // check depth limit
        depth = this.dragDepth - 1 + this.pointEl.parents(opt.listNodeName).length;
        if (depth > opt.maxDepth) {
          return;
        }
        var before = e.pageY < this.pointEl.offset().top + this.pointEl.height() / 2;
        parent = this.placeEl.parent();
        // if empty create new list to replace empty placeholder
        if (isEmpty) {
          list = $(document.createElement(opt.listNodeName)).addClass(opt.listClass);
          list.append(this.placeEl);
          this.pointEl.replaceWith(list);
        } else if (before) {
          this.pointEl.before(this.placeEl);
        } else {
          this.pointEl.after(this.placeEl);
        }
        if (!parent.children().length) {
          this.unsetParent(parent.parent());
        }
        if (!this.dragRootEl.find(opt.itemNodeName).length) {
          this.dragRootEl.append('<div class="' + opt.emptyClass + '"/>');
        }
        // parent root list has changed
        if (isNewRoot) {
          this.dragRootEl = pointElRoot;
          this.hasNewRoot = this.el[0] !== this.dragRootEl[0];
        }
      }
    }
  };
  $.fn.nestable = function (params) {
    var lists = this,
      retval = this;
    lists.each(function () {
      var plugin = $(this).data("nestable");
      if (!plugin) {
        $(this).data("nestable", new Plugin(this, params));
        $(this).data("nestable-id", new Date().getTime());
      } else {
        if (typeof params === 'string' && typeof plugin[params] === 'function') {
          retval = plugin[params]();
        }
      }
    });
    return retval || lists;
  };
})(window.jQuery || window.Zepto, window, document);

/***/ }),

/***/ "./assets/js/jquery.timeago.js":
/*!*************************************!*\
  !*** ./assets/js/jquery.timeago.js ***!
  \*************************************/
/***/ ((module, exports, __webpack_require__) => {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;__webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
__webpack_require__(/*! core-js/modules/es.string.trim.js */ "./node_modules/core-js/modules/es.string.trim.js");
__webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
__webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
__webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
__webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
__webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
/**
 * Timeago is a jQuery plugin that makes it easy to support automatically
 * updating fuzzy timestamps (e.g. "4 minutes ago" or "about 1 day ago").
 *
 * @name timeago
 * @version 1.6.7
 * @requires jQuery >=1.5.0 <4.0
 * @author Ryan McGeary
 * @license MIT License - http://www.opensource.org/licenses/mit-license.php
 *
 * For usage and examples, visit:
 * http://timeago.yarp.com/
 *
 * Copyright (c) 2008-2019, Ryan McGeary (ryan -[at]- mcgeary [*dot*] org)
 */

(function (factory) {
  if (true) {
    // AMD. Register as an anonymous module.
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
})(function ($) {
  $.timeago = function (timestamp) {
    if (timestamp instanceof Date) {
      return inWords(timestamp);
    } else if (typeof timestamp === "string") {
      return inWords($.timeago.parse(timestamp));
    } else if (typeof timestamp === "number") {
      return inWords(new Date(timestamp));
    } else {
      return inWords($.timeago.datetime(timestamp));
    }
  };
  var $t = $.timeago;
  $.extend($.timeago, {
    settings: {
      refreshMillis: 60000,
      allowPast: true,
      allowFuture: false,
      localeTitle: false,
      cutoff: 0,
      autoDispose: true,
      strings: {
        prefixAgo: null,
        prefixFromNow: null,
        suffixAgo: "ago",
        suffixFromNow: "from now",
        inPast: "any moment now",
        seconds: "less than a minute",
        minute: "about a minute",
        minutes: "%d minutes",
        hour: "about an hour",
        hours: "about %d hours",
        day: "a day",
        days: "%d days",
        month: "about a month",
        months: "%d months",
        year: "about a year",
        years: "%d years",
        wordSeparator: " ",
        numbers: []
      }
    },
    inWords: function inWords(distanceMillis) {
      if (!this.settings.allowPast && !this.settings.allowFuture) {
        throw 'timeago allowPast and allowFuture settings can not both be set to false.';
      }
      var $l = this.settings.strings;
      var prefix = $l.prefixAgo;
      var suffix = $l.suffixAgo;
      if (this.settings.allowFuture) {
        if (distanceMillis < 0) {
          prefix = $l.prefixFromNow;
          suffix = $l.suffixFromNow;
        }
      }
      if (!this.settings.allowPast && distanceMillis >= 0) {
        return this.settings.strings.inPast;
      }
      var seconds = Math.abs(distanceMillis) / 1000;
      var minutes = seconds / 60;
      var hours = minutes / 60;
      var days = hours / 24;
      var years = days / 365;
      function substitute(stringOrFunction, number) {
        var string = $.isFunction(stringOrFunction) ? stringOrFunction(number, distanceMillis) : stringOrFunction;
        var value = $l.numbers && $l.numbers[number] || number;
        return string.replace(/%d/i, value);
      }
      var words = seconds < 45 && substitute($l.seconds, Math.round(seconds)) || seconds < 90 && substitute($l.minute, 1) || minutes < 45 && substitute($l.minutes, Math.round(minutes)) || minutes < 90 && substitute($l.hour, 1) || hours < 24 && substitute($l.hours, Math.round(hours)) || hours < 42 && substitute($l.day, 1) || days < 30 && substitute($l.days, Math.round(days)) || days < 45 && substitute($l.month, 1) || days < 365 && substitute($l.months, Math.round(days / 30)) || years < 1.5 && substitute($l.year, 1) || substitute($l.years, Math.round(years));
      var separator = $l.wordSeparator || "";
      if ($l.wordSeparator === undefined) {
        separator = " ";
      }
      return $.trim([prefix, words, suffix].join(separator));
    },
    parse: function parse(iso8601) {
      var s = $.trim(iso8601);
      s = s.replace(/\.\d+/, ""); // remove milliseconds
      s = s.replace(/-/, "/").replace(/-/, "/");
      s = s.replace(/T/, " ").replace(/Z/, " UTC");
      s = s.replace(/([\+\-]\d\d)\:?(\d\d)/, " $1$2"); // -04:00 -> -0400
      s = s.replace(/([\+\-]\d\d)$/, " $100"); // +09 -> +0900
      return new Date(s);
    },
    datetime: function datetime(elem) {
      var iso8601 = $t.isTime(elem) ? $(elem).attr("datetime") : $(elem).attr("title");
      return $t.parse(iso8601);
    },
    isTime: function isTime(elem) {
      // jQuery's `is()` doesn't play well with HTML5 in IE
      return $(elem).get(0).tagName.toLowerCase() === "time"; // $(elem).is("time");
    }
  });

  // functions that can be called via $(el).timeago('action')
  // init is default when no action is given
  // functions are called with context of a single element
  var functions = {
    init: function init() {
      functions.dispose.call(this);
      var refresh_el = $.proxy(refresh, this);
      refresh_el();
      var $s = $t.settings;
      if ($s.refreshMillis > 0) {
        this._timeagoInterval = setInterval(refresh_el, $s.refreshMillis);
      }
    },
    update: function update(timestamp) {
      var date = timestamp instanceof Date ? timestamp : $t.parse(timestamp);
      $(this).data('timeago', {
        datetime: date
      });
      if ($t.settings.localeTitle) {
        $(this).attr("title", date.toLocaleString());
      }
      refresh.apply(this);
    },
    updateFromDOM: function updateFromDOM() {
      $(this).data('timeago', {
        datetime: $t.parse($t.isTime(this) ? $(this).attr("datetime") : $(this).attr("title"))
      });
      refresh.apply(this);
    },
    dispose: function dispose() {
      if (this._timeagoInterval) {
        window.clearInterval(this._timeagoInterval);
        this._timeagoInterval = null;
      }
    }
  };
  $.fn.timeago = function (action, options) {
    var fn = action ? functions[action] : functions.init;
    if (!fn) {
      throw new Error("Unknown function name '" + action + "' for timeago");
    }
    // each over objects here and call the requested function
    this.each(function () {
      fn.call(this, options);
    });
    return this;
  };
  function refresh() {
    var $s = $t.settings;

    //check if it's still visible
    if ($s.autoDispose && !$.contains(document.documentElement, this)) {
      //stop if it has been removed
      $(this).timeago("dispose");
      return this;
    }
    var data = prepareData(this);
    if (!isNaN(data.datetime)) {
      if ($s.cutoff === 0 || Math.abs(distance(data.datetime)) < $s.cutoff) {
        $(this).text(inWords(data.datetime));
      } else {
        if ($(this).attr('title').length > 0) {
          $(this).text($(this).attr('title'));
        }
      }
    }
    return this;
  }
  function prepareData(element) {
    element = $(element);
    if (!element.data("timeago")) {
      element.data("timeago", {
        datetime: $t.datetime(element)
      });
      var text = $.trim(element.text());
      if ($t.settings.localeTitle) {
        element.attr("title", element.data('timeago').datetime.toLocaleString());
      } else if (text.length > 0 && !($t.isTime(element) && element.attr("title"))) {
        element.attr("title", text);
      }
    }
    return element.data("timeago");
  }
  function inWords(date) {
    return $t.inWords(distance(date));
  }
  function distance(date) {
    return new Date().getTime() - date.getTime();
  }

  // fix for IE6 suckage
  document.createElement("abbr");
  document.createElement("time");
});

/***/ }),

/***/ "./assets/js/notifications.js":
/*!************************************!*\
  !*** ./assets/js/notifications.js ***!
  \************************************/
/***/ (() => {

$(function () {
  $('.jsdemo-notification-button button').on('click', function () {
    var placementFrom = $(this).data('placement-from');
    var placementAlign = $(this).data('placement-align');
    var animateEnter = $(this).data('animate-enter');
    var animateExit = $(this).data('animate-exit');
    var colorName = $(this).data('color-name');
    showNotification(colorName, null, placementFrom, placementAlign, animateEnter, animateExit);
  });
});
function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
  if (colorName === null || colorName === '') {
    colorName = 'bg-black';
  }
  if (text === null || text === '') {
    text = 'Turning standard Bootstrap alerts';
  }
  if (animateEnter === null || animateEnter === '') {
    animateEnter = 'animated fadeInDown';
  }
  if (animateExit === null || animateExit === '') {
    animateExit = 'animated fadeOutUp';
  }
  var allowDismiss = true;
  $.notify({
    message: text
  }, {
    type: colorName,
    allow_dismiss: allowDismiss,
    newest_on_top: true,
    timer: 1000,
    placement: {
      from: placementFrom,
      align: placementAlign
    },
    animate: {
      enter: animateEnter,
      exit: animateExit
    },
    template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' + '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' + '<span data-notify="icon"></span> ' + '<span data-notify="title">{1}</span> ' + '<span data-notify="message">{2}</span>' + '<div class="progress" data-notify="progressbar">' + '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' + '</div>' + '<a href="{3}" target="{4}" data-notify="url"></a>' + '</div>'
  });
}

/***/ }),

/***/ "./assets/js/sortable-nestable.js":
/*!****************************************!*\
  !*** ./assets/js/sortable-nestable.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
$(function () {
  $('.dd').nestable();
  $('.dd').on('change', function () {
    var $this = $(this);
    var serializedData = window.JSON.stringify($($this).nestable('serialize'));
    $this.parents('div.body').find('textarea').val(serializedData);
  });
});

/***/ }),

/***/ "./assets/css/Table.module.css":
/*!*************************************!*\
  !*** ./assets/css/Table.module.css ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/css/TableFooter.module.css":
/*!*******************************************!*\
  !*** ./assets/css/TableFooter.module.css ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/css/animate.css":
/*!********************************!*\
  !*** ./assets/css/animate.css ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/css/bootstrap-datepicker.css":
/*!*********************************************!*\
  !*** ./assets/css/bootstrap-datepicker.css ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/css/bootstrap-material-datetimepicker.css":
/*!**********************************************************!*\
  !*** ./assets/css/bootstrap-material-datetimepicker.css ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/css/jquery-nestable.css":
/*!****************************************!*\
  !*** ./assets/css/jquery-nestable.css ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/moment/locale sync recursive ^\\.\\/.*$":
/*!***************************************************!*\
  !*** ./node_modules/moment/locale/ sync ^\.\/.*$ ***!
  \***************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./af": "./node_modules/moment/locale/af.js",
	"./af.js": "./node_modules/moment/locale/af.js",
	"./ar": "./node_modules/moment/locale/ar.js",
	"./ar-dz": "./node_modules/moment/locale/ar-dz.js",
	"./ar-dz.js": "./node_modules/moment/locale/ar-dz.js",
	"./ar-kw": "./node_modules/moment/locale/ar-kw.js",
	"./ar-kw.js": "./node_modules/moment/locale/ar-kw.js",
	"./ar-ly": "./node_modules/moment/locale/ar-ly.js",
	"./ar-ly.js": "./node_modules/moment/locale/ar-ly.js",
	"./ar-ma": "./node_modules/moment/locale/ar-ma.js",
	"./ar-ma.js": "./node_modules/moment/locale/ar-ma.js",
	"./ar-ps": "./node_modules/moment/locale/ar-ps.js",
	"./ar-ps.js": "./node_modules/moment/locale/ar-ps.js",
	"./ar-sa": "./node_modules/moment/locale/ar-sa.js",
	"./ar-sa.js": "./node_modules/moment/locale/ar-sa.js",
	"./ar-tn": "./node_modules/moment/locale/ar-tn.js",
	"./ar-tn.js": "./node_modules/moment/locale/ar-tn.js",
	"./ar.js": "./node_modules/moment/locale/ar.js",
	"./az": "./node_modules/moment/locale/az.js",
	"./az.js": "./node_modules/moment/locale/az.js",
	"./be": "./node_modules/moment/locale/be.js",
	"./be.js": "./node_modules/moment/locale/be.js",
	"./bg": "./node_modules/moment/locale/bg.js",
	"./bg.js": "./node_modules/moment/locale/bg.js",
	"./bm": "./node_modules/moment/locale/bm.js",
	"./bm.js": "./node_modules/moment/locale/bm.js",
	"./bn": "./node_modules/moment/locale/bn.js",
	"./bn-bd": "./node_modules/moment/locale/bn-bd.js",
	"./bn-bd.js": "./node_modules/moment/locale/bn-bd.js",
	"./bn.js": "./node_modules/moment/locale/bn.js",
	"./bo": "./node_modules/moment/locale/bo.js",
	"./bo.js": "./node_modules/moment/locale/bo.js",
	"./br": "./node_modules/moment/locale/br.js",
	"./br.js": "./node_modules/moment/locale/br.js",
	"./bs": "./node_modules/moment/locale/bs.js",
	"./bs.js": "./node_modules/moment/locale/bs.js",
	"./ca": "./node_modules/moment/locale/ca.js",
	"./ca.js": "./node_modules/moment/locale/ca.js",
	"./cs": "./node_modules/moment/locale/cs.js",
	"./cs.js": "./node_modules/moment/locale/cs.js",
	"./cv": "./node_modules/moment/locale/cv.js",
	"./cv.js": "./node_modules/moment/locale/cv.js",
	"./cy": "./node_modules/moment/locale/cy.js",
	"./cy.js": "./node_modules/moment/locale/cy.js",
	"./da": "./node_modules/moment/locale/da.js",
	"./da.js": "./node_modules/moment/locale/da.js",
	"./de": "./node_modules/moment/locale/de.js",
	"./de-at": "./node_modules/moment/locale/de-at.js",
	"./de-at.js": "./node_modules/moment/locale/de-at.js",
	"./de-ch": "./node_modules/moment/locale/de-ch.js",
	"./de-ch.js": "./node_modules/moment/locale/de-ch.js",
	"./de.js": "./node_modules/moment/locale/de.js",
	"./dv": "./node_modules/moment/locale/dv.js",
	"./dv.js": "./node_modules/moment/locale/dv.js",
	"./el": "./node_modules/moment/locale/el.js",
	"./el.js": "./node_modules/moment/locale/el.js",
	"./en-au": "./node_modules/moment/locale/en-au.js",
	"./en-au.js": "./node_modules/moment/locale/en-au.js",
	"./en-ca": "./node_modules/moment/locale/en-ca.js",
	"./en-ca.js": "./node_modules/moment/locale/en-ca.js",
	"./en-gb": "./node_modules/moment/locale/en-gb.js",
	"./en-gb.js": "./node_modules/moment/locale/en-gb.js",
	"./en-ie": "./node_modules/moment/locale/en-ie.js",
	"./en-ie.js": "./node_modules/moment/locale/en-ie.js",
	"./en-il": "./node_modules/moment/locale/en-il.js",
	"./en-il.js": "./node_modules/moment/locale/en-il.js",
	"./en-in": "./node_modules/moment/locale/en-in.js",
	"./en-in.js": "./node_modules/moment/locale/en-in.js",
	"./en-nz": "./node_modules/moment/locale/en-nz.js",
	"./en-nz.js": "./node_modules/moment/locale/en-nz.js",
	"./en-sg": "./node_modules/moment/locale/en-sg.js",
	"./en-sg.js": "./node_modules/moment/locale/en-sg.js",
	"./eo": "./node_modules/moment/locale/eo.js",
	"./eo.js": "./node_modules/moment/locale/eo.js",
	"./es": "./node_modules/moment/locale/es.js",
	"./es-do": "./node_modules/moment/locale/es-do.js",
	"./es-do.js": "./node_modules/moment/locale/es-do.js",
	"./es-mx": "./node_modules/moment/locale/es-mx.js",
	"./es-mx.js": "./node_modules/moment/locale/es-mx.js",
	"./es-us": "./node_modules/moment/locale/es-us.js",
	"./es-us.js": "./node_modules/moment/locale/es-us.js",
	"./es.js": "./node_modules/moment/locale/es.js",
	"./et": "./node_modules/moment/locale/et.js",
	"./et.js": "./node_modules/moment/locale/et.js",
	"./eu": "./node_modules/moment/locale/eu.js",
	"./eu.js": "./node_modules/moment/locale/eu.js",
	"./fa": "./node_modules/moment/locale/fa.js",
	"./fa.js": "./node_modules/moment/locale/fa.js",
	"./fi": "./node_modules/moment/locale/fi.js",
	"./fi.js": "./node_modules/moment/locale/fi.js",
	"./fil": "./node_modules/moment/locale/fil.js",
	"./fil.js": "./node_modules/moment/locale/fil.js",
	"./fo": "./node_modules/moment/locale/fo.js",
	"./fo.js": "./node_modules/moment/locale/fo.js",
	"./fr": "./node_modules/moment/locale/fr.js",
	"./fr-ca": "./node_modules/moment/locale/fr-ca.js",
	"./fr-ca.js": "./node_modules/moment/locale/fr-ca.js",
	"./fr-ch": "./node_modules/moment/locale/fr-ch.js",
	"./fr-ch.js": "./node_modules/moment/locale/fr-ch.js",
	"./fr.js": "./node_modules/moment/locale/fr.js",
	"./fy": "./node_modules/moment/locale/fy.js",
	"./fy.js": "./node_modules/moment/locale/fy.js",
	"./ga": "./node_modules/moment/locale/ga.js",
	"./ga.js": "./node_modules/moment/locale/ga.js",
	"./gd": "./node_modules/moment/locale/gd.js",
	"./gd.js": "./node_modules/moment/locale/gd.js",
	"./gl": "./node_modules/moment/locale/gl.js",
	"./gl.js": "./node_modules/moment/locale/gl.js",
	"./gom-deva": "./node_modules/moment/locale/gom-deva.js",
	"./gom-deva.js": "./node_modules/moment/locale/gom-deva.js",
	"./gom-latn": "./node_modules/moment/locale/gom-latn.js",
	"./gom-latn.js": "./node_modules/moment/locale/gom-latn.js",
	"./gu": "./node_modules/moment/locale/gu.js",
	"./gu.js": "./node_modules/moment/locale/gu.js",
	"./he": "./node_modules/moment/locale/he.js",
	"./he.js": "./node_modules/moment/locale/he.js",
	"./hi": "./node_modules/moment/locale/hi.js",
	"./hi.js": "./node_modules/moment/locale/hi.js",
	"./hr": "./node_modules/moment/locale/hr.js",
	"./hr.js": "./node_modules/moment/locale/hr.js",
	"./hu": "./node_modules/moment/locale/hu.js",
	"./hu.js": "./node_modules/moment/locale/hu.js",
	"./hy-am": "./node_modules/moment/locale/hy-am.js",
	"./hy-am.js": "./node_modules/moment/locale/hy-am.js",
	"./id": "./node_modules/moment/locale/id.js",
	"./id.js": "./node_modules/moment/locale/id.js",
	"./is": "./node_modules/moment/locale/is.js",
	"./is.js": "./node_modules/moment/locale/is.js",
	"./it": "./node_modules/moment/locale/it.js",
	"./it-ch": "./node_modules/moment/locale/it-ch.js",
	"./it-ch.js": "./node_modules/moment/locale/it-ch.js",
	"./it.js": "./node_modules/moment/locale/it.js",
	"./ja": "./node_modules/moment/locale/ja.js",
	"./ja.js": "./node_modules/moment/locale/ja.js",
	"./jv": "./node_modules/moment/locale/jv.js",
	"./jv.js": "./node_modules/moment/locale/jv.js",
	"./ka": "./node_modules/moment/locale/ka.js",
	"./ka.js": "./node_modules/moment/locale/ka.js",
	"./kk": "./node_modules/moment/locale/kk.js",
	"./kk.js": "./node_modules/moment/locale/kk.js",
	"./km": "./node_modules/moment/locale/km.js",
	"./km.js": "./node_modules/moment/locale/km.js",
	"./kn": "./node_modules/moment/locale/kn.js",
	"./kn.js": "./node_modules/moment/locale/kn.js",
	"./ko": "./node_modules/moment/locale/ko.js",
	"./ko.js": "./node_modules/moment/locale/ko.js",
	"./ku": "./node_modules/moment/locale/ku.js",
	"./ku-kmr": "./node_modules/moment/locale/ku-kmr.js",
	"./ku-kmr.js": "./node_modules/moment/locale/ku-kmr.js",
	"./ku.js": "./node_modules/moment/locale/ku.js",
	"./ky": "./node_modules/moment/locale/ky.js",
	"./ky.js": "./node_modules/moment/locale/ky.js",
	"./lb": "./node_modules/moment/locale/lb.js",
	"./lb.js": "./node_modules/moment/locale/lb.js",
	"./lo": "./node_modules/moment/locale/lo.js",
	"./lo.js": "./node_modules/moment/locale/lo.js",
	"./lt": "./node_modules/moment/locale/lt.js",
	"./lt.js": "./node_modules/moment/locale/lt.js",
	"./lv": "./node_modules/moment/locale/lv.js",
	"./lv.js": "./node_modules/moment/locale/lv.js",
	"./me": "./node_modules/moment/locale/me.js",
	"./me.js": "./node_modules/moment/locale/me.js",
	"./mi": "./node_modules/moment/locale/mi.js",
	"./mi.js": "./node_modules/moment/locale/mi.js",
	"./mk": "./node_modules/moment/locale/mk.js",
	"./mk.js": "./node_modules/moment/locale/mk.js",
	"./ml": "./node_modules/moment/locale/ml.js",
	"./ml.js": "./node_modules/moment/locale/ml.js",
	"./mn": "./node_modules/moment/locale/mn.js",
	"./mn.js": "./node_modules/moment/locale/mn.js",
	"./mr": "./node_modules/moment/locale/mr.js",
	"./mr.js": "./node_modules/moment/locale/mr.js",
	"./ms": "./node_modules/moment/locale/ms.js",
	"./ms-my": "./node_modules/moment/locale/ms-my.js",
	"./ms-my.js": "./node_modules/moment/locale/ms-my.js",
	"./ms.js": "./node_modules/moment/locale/ms.js",
	"./mt": "./node_modules/moment/locale/mt.js",
	"./mt.js": "./node_modules/moment/locale/mt.js",
	"./my": "./node_modules/moment/locale/my.js",
	"./my.js": "./node_modules/moment/locale/my.js",
	"./nb": "./node_modules/moment/locale/nb.js",
	"./nb.js": "./node_modules/moment/locale/nb.js",
	"./ne": "./node_modules/moment/locale/ne.js",
	"./ne.js": "./node_modules/moment/locale/ne.js",
	"./nl": "./node_modules/moment/locale/nl.js",
	"./nl-be": "./node_modules/moment/locale/nl-be.js",
	"./nl-be.js": "./node_modules/moment/locale/nl-be.js",
	"./nl.js": "./node_modules/moment/locale/nl.js",
	"./nn": "./node_modules/moment/locale/nn.js",
	"./nn.js": "./node_modules/moment/locale/nn.js",
	"./oc-lnc": "./node_modules/moment/locale/oc-lnc.js",
	"./oc-lnc.js": "./node_modules/moment/locale/oc-lnc.js",
	"./pa-in": "./node_modules/moment/locale/pa-in.js",
	"./pa-in.js": "./node_modules/moment/locale/pa-in.js",
	"./pl": "./node_modules/moment/locale/pl.js",
	"./pl.js": "./node_modules/moment/locale/pl.js",
	"./pt": "./node_modules/moment/locale/pt.js",
	"./pt-br": "./node_modules/moment/locale/pt-br.js",
	"./pt-br.js": "./node_modules/moment/locale/pt-br.js",
	"./pt.js": "./node_modules/moment/locale/pt.js",
	"./ro": "./node_modules/moment/locale/ro.js",
	"./ro.js": "./node_modules/moment/locale/ro.js",
	"./ru": "./node_modules/moment/locale/ru.js",
	"./ru.js": "./node_modules/moment/locale/ru.js",
	"./sd": "./node_modules/moment/locale/sd.js",
	"./sd.js": "./node_modules/moment/locale/sd.js",
	"./se": "./node_modules/moment/locale/se.js",
	"./se.js": "./node_modules/moment/locale/se.js",
	"./si": "./node_modules/moment/locale/si.js",
	"./si.js": "./node_modules/moment/locale/si.js",
	"./sk": "./node_modules/moment/locale/sk.js",
	"./sk.js": "./node_modules/moment/locale/sk.js",
	"./sl": "./node_modules/moment/locale/sl.js",
	"./sl.js": "./node_modules/moment/locale/sl.js",
	"./sq": "./node_modules/moment/locale/sq.js",
	"./sq.js": "./node_modules/moment/locale/sq.js",
	"./sr": "./node_modules/moment/locale/sr.js",
	"./sr-cyrl": "./node_modules/moment/locale/sr-cyrl.js",
	"./sr-cyrl.js": "./node_modules/moment/locale/sr-cyrl.js",
	"./sr.js": "./node_modules/moment/locale/sr.js",
	"./ss": "./node_modules/moment/locale/ss.js",
	"./ss.js": "./node_modules/moment/locale/ss.js",
	"./sv": "./node_modules/moment/locale/sv.js",
	"./sv.js": "./node_modules/moment/locale/sv.js",
	"./sw": "./node_modules/moment/locale/sw.js",
	"./sw.js": "./node_modules/moment/locale/sw.js",
	"./ta": "./node_modules/moment/locale/ta.js",
	"./ta.js": "./node_modules/moment/locale/ta.js",
	"./te": "./node_modules/moment/locale/te.js",
	"./te.js": "./node_modules/moment/locale/te.js",
	"./tet": "./node_modules/moment/locale/tet.js",
	"./tet.js": "./node_modules/moment/locale/tet.js",
	"./tg": "./node_modules/moment/locale/tg.js",
	"./tg.js": "./node_modules/moment/locale/tg.js",
	"./th": "./node_modules/moment/locale/th.js",
	"./th.js": "./node_modules/moment/locale/th.js",
	"./tk": "./node_modules/moment/locale/tk.js",
	"./tk.js": "./node_modules/moment/locale/tk.js",
	"./tl-ph": "./node_modules/moment/locale/tl-ph.js",
	"./tl-ph.js": "./node_modules/moment/locale/tl-ph.js",
	"./tlh": "./node_modules/moment/locale/tlh.js",
	"./tlh.js": "./node_modules/moment/locale/tlh.js",
	"./tr": "./node_modules/moment/locale/tr.js",
	"./tr.js": "./node_modules/moment/locale/tr.js",
	"./tzl": "./node_modules/moment/locale/tzl.js",
	"./tzl.js": "./node_modules/moment/locale/tzl.js",
	"./tzm": "./node_modules/moment/locale/tzm.js",
	"./tzm-latn": "./node_modules/moment/locale/tzm-latn.js",
	"./tzm-latn.js": "./node_modules/moment/locale/tzm-latn.js",
	"./tzm.js": "./node_modules/moment/locale/tzm.js",
	"./ug-cn": "./node_modules/moment/locale/ug-cn.js",
	"./ug-cn.js": "./node_modules/moment/locale/ug-cn.js",
	"./uk": "./node_modules/moment/locale/uk.js",
	"./uk.js": "./node_modules/moment/locale/uk.js",
	"./ur": "./node_modules/moment/locale/ur.js",
	"./ur.js": "./node_modules/moment/locale/ur.js",
	"./uz": "./node_modules/moment/locale/uz.js",
	"./uz-latn": "./node_modules/moment/locale/uz-latn.js",
	"./uz-latn.js": "./node_modules/moment/locale/uz-latn.js",
	"./uz.js": "./node_modules/moment/locale/uz.js",
	"./vi": "./node_modules/moment/locale/vi.js",
	"./vi.js": "./node_modules/moment/locale/vi.js",
	"./x-pseudo": "./node_modules/moment/locale/x-pseudo.js",
	"./x-pseudo.js": "./node_modules/moment/locale/x-pseudo.js",
	"./yo": "./node_modules/moment/locale/yo.js",
	"./yo.js": "./node_modules/moment/locale/yo.js",
	"./zh-cn": "./node_modules/moment/locale/zh-cn.js",
	"./zh-cn.js": "./node_modules/moment/locale/zh-cn.js",
	"./zh-hk": "./node_modules/moment/locale/zh-hk.js",
	"./zh-hk.js": "./node_modules/moment/locale/zh-hk.js",
	"./zh-mo": "./node_modules/moment/locale/zh-mo.js",
	"./zh-mo.js": "./node_modules/moment/locale/zh-mo.js",
	"./zh-tw": "./node_modules/moment/locale/zh-tw.js",
	"./zh-tw.js": "./node_modules/moment/locale/zh-tw.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./node_modules/moment/locale sync recursive ^\\.\\/.*$";

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXNzZXRzX2pzX2Jhc2ljLWZvcm0tZWxlbWVudHNfanMtYXNzZXRzX2pzX2Jvb3RzdHJhcC1kYXRlcGlja2VyX2pzLWFzc2V0c19qc19ib290c3RyYXAtbWF0ZXJpLTBlYTM5Ny5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUNBLENBQUMsVUFBVUEsTUFBTSxFQUFFQyxPQUFPLEVBQUU7RUFDM0IsSUFBSSxJQUEwQyxFQUFFO0lBQy9DQyxpQ0FBTyxDQUFDLE9BQVMsRUFBRSxNQUFRLENBQUMsb0NBQUVELE9BQU87QUFBQTtBQUFBO0FBQUEsa0dBQUM7RUFDdkMsQ0FBQyxNQUFNLFlBUU47QUFDRixDQUFDLEVBQUUsSUFBSSxFQUFFLFVBQVVHLE9BQU8sRUFBRUMsTUFBTSxFQUFFO0VBQ25DLFlBQVk7O0VBRVosSUFBSUcsR0FBRyxHQUFHLE9BQU9DLEdBQUcsS0FBSyxVQUFVLEdBQUcsSUFBSUEsR0FBRyxFQUFFLEdBQUksWUFBWTtJQUM5RCxJQUFJQyxJQUFJLEdBQUcsRUFBRTtJQUViLE9BQU87TUFDTkMsR0FBRyxFQUFFLFNBQVNBLEdBQUcsQ0FBQ0MsR0FBRyxFQUFFO1FBQ3RCLE9BQU9DLE9BQU8sQ0FBQ0gsSUFBSSxDQUFDSSxPQUFPLENBQUNGLEdBQUcsQ0FBQyxHQUFHLENBQUMsQ0FBQyxDQUFDO01BQ3ZDLENBQUM7TUFDREcsR0FBRyxFQUFFLFNBQVNBLEdBQUcsQ0FBQ0gsR0FBRyxFQUFFO1FBQ3RCRixJQUFJLENBQUNNLElBQUksQ0FBQ0osR0FBRyxDQUFDO01BQ2YsQ0FBQztNQUNELFFBQVEsRUFBRSxTQUFTSyxPQUFPLENBQUNMLEdBQUcsRUFBRTtRQUMvQkYsSUFBSSxDQUFDUSxNQUFNLENBQUNSLElBQUksQ0FBQ0ksT0FBTyxDQUFDRixHQUFHLENBQUMsRUFBRSxDQUFDLENBQUM7TUFDbEM7SUFBRSxDQUFDO0VBQ0wsQ0FBQyxFQUFHO0VBRUosSUFBSU8sV0FBVyxHQUFHLFNBQVNBLFdBQVcsQ0FBQ0MsSUFBSSxFQUFF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Q0FBQ3dYLEtBQUssQ0FBQyxDQUFDcVcsUUFBUSxDQUFDLFdBQVcsQ0FBQyxDQUFDO0lBRTFFclcsS0FBSyxDQUFDcEosT0FBTyxDQUFDLFVBQVUsQ0FBQyxDQUFDbEssSUFBSSxDQUFDLFVBQVUsQ0FBQyxDQUFDdkIsR0FBRyxDQUFDMHVCLGNBQWMsQ0FBQztFQUNsRSxDQUFDLENBQUM7QUFDTixDQUFDLENBQUM7Ozs7Ozs7Ozs7OztBQ1RGOzs7Ozs7Ozs7Ozs7O0FDQUE7Ozs7Ozs7Ozs7Ozs7QUNBQTs7Ozs7Ozs7Ozs7OztBQ0FBOzs7Ozs7Ozs7Ozs7O0FDQUE7Ozs7Ozs7Ozs7Ozs7QUNBQTs7Ozs7Ozs7Ozs7QUNBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9qcy9hdXRvc2l6ZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYmFzaWMtZm9ybS1lbGVtZW50cy5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYm9vdHN0cmFwLWRhdGVwaWNrZXIuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2Jvb3RzdHJhcC1tYXRlcmlhbC1kYXRldGltZXBpY2tlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYm9vdHN0cmFwLW5vdGlmeS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvanF1ZXJ5Lm5lc3RhYmxlLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9qcXVlcnkudGltZWFnby5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvbm90aWZpY2F0aW9ucy5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc29ydGFibGUtbmVzdGFibGUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy9UYWJsZS5tb2R1bGUuY3NzP2E1NjAiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy9UYWJsZUZvb3Rlci5tb2R1bGUuY3NzP2M2MzAiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy9hbmltYXRlLmNzcz9iYjEzIiwid2VicGFjazovLy8uL2Fzc2V0cy9jc3MvYm9vdHN0cmFwLWRhdGVwaWNrZXIuY3NzPzQyMDkiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy9ib290c3RyYXAtbWF0ZXJpYWwtZGF0ZXRpbWVwaWNrZXIuY3NzPzY2NTgiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy9qcXVlcnktbmVzdGFibGUuY3NzP2ExOTYiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvIHN5bmMgXlxcLlxcLy4qJCJdLCJzb3VyY2VzQ29udGVudCI6WyJcbihmdW5jdGlvbiAoZ2xvYmFsLCBmYWN0b3J5KSB7XG5cdGlmICh0eXBlb2YgZGVmaW5lID09PSAnZnVuY3Rpb24nICYmIGRlZmluZS5hbWQpIHtcblx0XHRkZWZpbmUoWydleHBvcnRzJywgJ21vZHVsZSddLCBmYWN0b3J5KTtcblx0fSBlbHNlIGlmICh0eXBlb2YgZXhwb3J0cyAhPT0gJ3VuZGVmaW5lZCcgJiYgdHlwZW9mIG1vZHVsZSAhPT0gJ3VuZGVmaW5lZCcpIHtcblx0XHRmYWN0b3J5KGV4cG9ydHMsIG1vZHVsZSk7XG5cdH0gZWxzZSB7XG5cdFx0dmFyIG1vZCA9IHtcblx0XHRcdGV4cG9ydHM6IHt9XG5cdFx0fTtcblx0XHRmYWN0b3J5KG1vZC5leHBvcnRzLCBtb2QpO1xuXHRcdGdsb2JhbC5hdXRvc2l6ZSA9IG1vZC5leHBvcnRzO1xuXHR9XG59KSh0aGlzLCBmdW5jdGlvbiAoZXhwb3J0cywgbW9kdWxlKSB7XG5cdCd1c2Ugc3RyaWN0JztcblxuXHR2YXIgc2V0ID0gdHlwZW9mIFNldCA9PT0gJ2Z1bmN0aW9uJyA/IG5ldyBTZXQoKSA6IChmdW5jdGlvbiAoKSB7XG5cdFx0dmFyIGxpc3QgPSBbXTtcblxuXHRcdHJldHVybiB7XG5cdFx0XHRoYXM6IGZ1bmN0aW9uIGhhcyhrZXkpIHtcblx0XHRcdFx0cmV0dXJuIEJvb2xlYW4obGlzdC5pbmRleE9mKGtleSkgPiAtMSk7XG5cdFx0XHR9LFxuXHRcdFx0YWRkOiBmdW5jdGlvbiBhZGQoa2V5KSB7XG5cdFx0XHRcdGxpc3QucHVzaChrZXkpO1xuXHRcdFx0fSxcblx0XHRcdCdkZWxldGUnOiBmdW5jdGlvbiBfZGVsZXRlKGtleSkge1xuXHRcdFx0XHRsaXN0LnNwbGljZShsaXN0LmluZGV4T2Yoa2V5KSwgMSk7XG5cdFx0XHR9IH07XG5cdH0pKCk7XG5cblx0dmFyIGNyZWF0ZUV2ZW50ID0gZnVuY3Rpb24gY3JlYXRlRXZlbnQobmFtZSkge1xuXHRcdHJldHVybiBuZXcgRXZlbnQobmFtZSk7XG5cdH07XG5cdHRyeSB7XG5cdFx0bmV3IEV2ZW50KCd0ZXN0Jyk7XG5cdH0gY2F0Y2ggKGUpIHtcblx0XHQvLyBJRSBkb2VzIG5vdCBzdXBwb3J0IGBuZXcgRXZlbnQoKWBcblx0XHRjcmVhdGVFdmVudCA9IGZ1bmN0aW9uIChuYW1lKSB7XG5cdFx0XHR2YXIgZXZ0ID0gZG9jdW1lbnQuY3JlYXRlRXZlbnQoJ0V2ZW50Jyk7XG5cdFx0XHRldnQuaW5pdEV2ZW50KG5hbWUsIHRydWUsIGZhbHNlKTtcblx0XHRcdHJldHVybiBldnQ7XG5cdFx0fTtcblx0fVxuXG5cdGZ1bmN0aW9uIGFzc2lnbih0YSkge1xuXHRcdGlmICghdGEgfHwgIXRhLm5vZGVOYW1lIHx8IHRhLm5vZGVOYW1lICE9PSAnVEVYVEFSRUEnIHx8IHNldC5oYXModGEpKSByZXR1cm47XG5cblx0XHR2YXIgaGVpZ2h0T2Zmc2V0ID0gbnVsbDtcblx0XHR2YXIgY2xpZW50V2lkdGggPSB0YS5jbGllbnRXaWR0aDtcblx0XHR2YXIgY2FjaGVkSGVpZ2h0ID0gbnVsbDtcblxuXHRcdGZ1bmN0aW9uIGluaXQoKSB7XG5cdFx0XHR2YXIgc3R5bGUgPSB3aW5kb3cuZ2V0Q29tcHV0ZWRTdHlsZSh0YSwgbnVsbCk7XG5cblx0XHRcdGlmIChzdHlsZS5yZXNpemUgPT09ICd2ZXJ0aWNhbCcpIHtcblx0XHRcdFx0dGEuc3R5bGUucmVzaXplID0gJ25vbmUnO1xuXHRcdFx0fSBlbHNlIGlmIChzdHlsZS5yZXNpemUgPT09ICdib3RoJykge1xuXHRcdFx0XHR0YS5zdHlsZS5yZXNpemUgPSAnaG9yaXpvbnRhbCc7XG5cdFx0XHR9XG5cblx0XHRcdGlmIChzdHlsZS5ib3hTaXppbmcgPT09ICdjb250ZW50LWJveCcpIHtcblx0XHRcdFx0aGVpZ2h0T2Zmc2V0ID0gLShwYXJzZUZsb2F0KHN0eWxlLnBhZGRpbmdUb3ApICsgcGFyc2VGbG9hdChzdHlsZS5wYWRkaW5nQm90dG9tKSk7XG5cdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRoZWlnaHRPZmZzZXQgPSBwYXJzZUZsb2F0KHN0eWxlLmJvcmRlclRvcFdpZHRoKSArIHBhcnNlRmxvYXQoc3R5bGUuYm9yZGVyQm90dG9tV2lkdGgpO1xuXHRcdFx0fVxuXHRcdFx0Ly8gRml4IHdoZW4gYSB0ZXh0YXJlYSBpcyBub3Qgb24gZG9jdW1lbnQgYm9keSBhbmQgaGVpZ2h0T2Zmc2V0IGlzIE5vdCBhIE51bWJlclxuXHRcdFx0aWYgKGlzTmFOKGhlaWdodE9mZnNldCkpIHtcblx0XHRcdFx0aGVpZ2h0T2Zmc2V0ID0gMDtcblx0XHRcdH1cblxuXHRcdFx0dXBkYXRlKCk7XG5cdFx0fVxuXG5cdFx0ZnVuY3Rpb24gY2hhbmdlT3ZlcmZsb3codmFsdWUpIHtcblx0XHRcdHtcblx0XHRcdFx0Ly8gQ2hyb21lL1NhZmFyaS1zcGVjaWZpYyBmaXg6XG5cdFx0XHRcdC8vIFdoZW4gdGhlIHRleHRhcmVhIHktb3ZlcmZsb3cgaXMgaGlkZGVuLCBDaHJvbWUvU2FmYXJpIGRvIG5vdCByZWZsb3cgdGhlIHRleHQgdG8gYWNjb3VudCBmb3IgdGhlIHNwYWNlXG5cdFx0XHRcdC8vIG1hZGUgYXZhaWxhYmxlIGJ5IHJlbW92aW5nIHRoZSBzY3JvbGxiYXIuIFRoZSBmb2xsb3dpbmcgZm9yY2VzIHRoZSBuZWNlc3NhcnkgdGV4dCByZWZsb3cuXG5cdFx0XHRcdHZhciB3aWR0aCA9IHRhLnN0eWxlLndpZHRoO1xuXHRcdFx0XHR0YS5zdHlsZS53aWR0aCA9ICcwcHgnO1xuXHRcdFx0XHQvLyBGb3JjZSByZWZsb3c6XG5cdFx0XHRcdC8qIGpzaGludCBpZ25vcmU6c3RhcnQgKi9cblx0XHRcdFx0dGEub2Zmc2V0V2lkdGg7XG5cdFx0XHRcdC8qIGpzaGludCBpZ25vcmU6ZW5kICovXG5cdFx0XHRcdHRhLnN0eWxlLndpZHRoID0gd2lkdGg7XG5cdFx0XHR9XG5cblx0XHRcdHRhLnN0eWxlLm92ZXJmbG93WSA9IHZhbHVlO1xuXG5cdFx0XHRyZXNpemUoKTtcblx0XHR9XG5cblx0XHRmdW5jdGlvbiBnZXRQYXJlbnRPdmVyZmxvd3MoZWwpIHtcblx0XHRcdHZhciBhcnIgPSBbXTtcblxuXHRcdFx0d2hpbGUgKGVsICYmIGVsLnBhcmVudE5vZGUgJiYgZWwucGFyZW50Tm9kZSBpbnN0YW5jZW9mIEVsZW1lbnQpIHtcblx0XHRcdFx0aWYgKGVsLnBhcmVudE5vZGUuc2Nyb2xsVG9wKSB7XG5cdFx0XHRcdFx0YXJyLnB1c2goe1xuXHRcdFx0XHRcdFx0bm9kZTogZWwucGFyZW50Tm9kZSxcblx0XHRcdFx0XHRcdHNjcm9sbFRvcDogZWwucGFyZW50Tm9kZS5zY3JvbGxUb3AgfSk7XG5cdFx0XHRcdH1cblx0XHRcdFx0ZWwgPSBlbC5wYXJlbnROb2RlO1xuXHRcdFx0fVxuXG5cdFx0XHRyZXR1cm4gYXJyO1xuXHRcdH1cblxuXHRcdGZ1bmN0aW9uIHJlc2l6ZSgpIHtcblx0XHRcdHZhciBvcmlnaW5hbEhlaWdodCA9IHRhLnN0eWxlLmhlaWdodDtcblx0XHRcdHZhciBvdmVyZmxvd3MgPSBnZXRQYXJlbnRPdmVyZmxvd3ModGEpO1xuXHRcdFx0dmFyIGRvY1RvcCA9IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudCAmJiBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuc2Nyb2xsVG9wOyAvLyBOZWVkZWQgZm9yIE1vYmlsZSBJRSAodGlja2V0ICMyNDApXG5cblx0XHRcdHRhLnN0eWxlLmhlaWdodCA9ICdhdXRvJztcblxuXHRcdFx0dmFyIGVuZEhlaWdodCA9IHRhLnNjcm9sbEhlaWdodCArIGhlaWdodE9mZnNldDtcblxuXHRcdFx0aWYgKHRhLnNjcm9sbEhlaWdodCA9PT0gMCkge1xuXHRcdFx0XHQvLyBJZiB0aGUgc2Nyb2xsSGVpZ2h0IGlzIDAsIHRoZW4gdGhlIGVsZW1lbnQgcHJvYmFibHkgaGFzIGRpc3BsYXk6bm9uZSBvciBpcyBkZXRhY2hlZCBmcm9tIHRoZSBET00uXG5cdFx0XHRcdHRhLnN0eWxlLmhlaWdodCA9IG9yaWdpbmFsSGVpZ2h0O1xuXHRcdFx0XHRyZXR1cm47XG5cdFx0XHR9XG5cblx0XHRcdHRhLnN0eWxlLmhlaWdodCA9IGVuZEhlaWdodCArICdweCc7XG5cblx0XHRcdC8vIHVzZWQgdG8gY2hlY2sgaWYgYW4gdXBkYXRlIGlzIGFjdHVhbGx5IG5lY2Vzc2FyeSBvbiB3aW5kb3cucmVzaXplXG5cdFx0XHRjbGllbnRXaWR0aCA9IHRhLmNsaWVudFdpZHRoO1xuXG5cdFx0XHQvLyBwcmV2ZW50cyBzY3JvbGwtcG9zaXRpb24ganVtcGluZ1xuXHRcdFx0b3ZlcmZsb3dzLmZvckVhY2goZnVuY3Rpb24gKGVsKSB7XG5cdFx0XHRcdGVsLm5vZGUuc2Nyb2xsVG9wID0gZWwuc2Nyb2xsVG9wO1xuXHRcdFx0fSk7XG5cblx0XHRcdGlmIChkb2NUb3ApIHtcblx0XHRcdFx0ZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LnNjcm9sbFRvcCA9IGRvY1RvcDtcblx0XHRcdH1cblx0XHR9XG5cblx0XHRmdW5jdGlvbiB1cGRhdGUoKSB7XG5cdFx0XHRyZXNpemUoKTtcblxuXHRcdFx0dmFyIGNvbXB1dGVkID0gd2luZG93LmdldENvbXB1dGVkU3R5bGUodGEsIG51bGwpO1xuXHRcdFx0dmFyIGNvbXB1dGVkSGVpZ2h0ID0gTWF0aC5yb3VuZChwYXJzZUZsb2F0KGNvbXB1dGVkLmhlaWdodCkpO1xuXHRcdFx0dmFyIHN0eWxlSGVpZ2h0ID0gTWF0aC5yb3VuZChwYXJzZUZsb2F0KHRhLnN0eWxlLmhlaWdodCkpO1xuXG5cdFx0XHQvLyBUaGUgY29tcHV0ZWQgaGVpZ2h0IG5vdCBtYXRjaGluZyB0aGUgaGVpZ2h0IHNldCB2aWEgcmVzaXplIGluZGljYXRlcyB0aGF0XG5cdFx0XHQvLyB0aGUgbWF4LWhlaWdodCBoYXMgYmVlbiBleGNlZWRlZCwgaW4gd2hpY2ggY2FzZSB0aGUgb3ZlcmZsb3cgc2hvdWxkIGJlIHNldCB0byB2aXNpYmxlLlxuXHRcdFx0aWYgKGNvbXB1dGVkSGVpZ2h0ICE9PSBzdHlsZUhlaWdodCkge1xuXHRcdFx0XHRpZiAoY29tcHV0ZWQub3ZlcmZsb3dZICE9PSAndmlzaWJsZScpIHtcblx0XHRcdFx0XHRjaGFuZ2VPdmVyZmxvdygndmlzaWJsZScpO1xuXHRcdFx0XHR9XG5cdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHQvLyBOb3JtYWxseSBrZWVwIG92ZXJmbG93IHNldCB0byBoaWRkZW4sIHRvIGF2b2lkIGZsYXNoIG9mIHNjcm9sbGJhciBhcyB0aGUgdGV4dGFyZWEgZXhwYW5kcy5cblx0XHRcdFx0aWYgKGNvbXB1dGVkLm92ZXJmbG93WSAhPT0gJ2hpZGRlbicpIHtcblx0XHRcdFx0XHRjaGFuZ2VPdmVyZmxvdygnaGlkZGVuJyk7XG5cdFx0XHRcdH1cblx0XHRcdH1cblxuXHRcdFx0aWYgKGNhY2hlZEhlaWdodCAhPT0gY29tcHV0ZWRIZWlnaHQpIHtcblx0XHRcdFx0Y2FjaGVkSGVpZ2h0ID0gY29tcHV0ZWRIZWlnaHQ7XG5cdFx0XHRcdHZhciBldnQgPSBjcmVhdGVFdmVudCgnYXV0b3NpemU6cmVzaXplZCcpO1xuXHRcdFx0XHR0YS5kaXNwYXRjaEV2ZW50KGV2dCk7XG5cdFx0XHR9XG5cdFx0fVxuXG5cdFx0dmFyIHBhZ2VSZXNpemUgPSBmdW5jdGlvbiBwYWdlUmVzaXplKCkge1xuXHRcdFx0aWYgKHRhLmNsaWVudFdpZHRoICE9PSBjbGllbnRXaWR0aCkge1xuXHRcdFx0XHR1cGRhdGUoKTtcblx0XHRcdH1cblx0XHR9O1xuXG5cdFx0dmFyIGRlc3Ryb3kgPSAoZnVuY3Rpb24gKHN0eWxlKSB7XG5cdFx0XHR3aW5kb3cucmVtb3ZlRXZlbnRMaXN0ZW5lcigncmVzaXplJywgcGFnZVJlc2l6ZSwgZmFsc2UpO1xuXHRcdFx0dGEucmVtb3ZlRXZlbnRMaXN0ZW5lcignaW5wdXQnLCB1cGRhdGUsIGZhbHNlKTtcblx0XHRcdHRhLnJlbW92ZUV2ZW50TGlzdGVuZXIoJ2tleXVwJywgdXBkYXRlLCBmYWxzZSk7XG5cdFx0XHR0YS5yZW1vdmVFdmVudExpc3RlbmVyKCdhdXRvc2l6ZTpkZXN0cm95JywgZGVzdHJveSwgZmFsc2UpO1xuXHRcdFx0dGEucmVtb3ZlRXZlbnRMaXN0ZW5lcignYXV0b3NpemU6dXBkYXRlJywgdXBkYXRlLCBmYWxzZSk7XG5cdFx0XHRzZXRbJ2RlbGV0ZSddKHRhKTtcblxuXHRcdFx0T2JqZWN0LmtleXMoc3R5bGUpLmZvckVhY2goZnVuY3Rpb24gKGtleSkge1xuXHRcdFx0XHR0YS5zdHlsZVtrZXldID0gc3R5bGVba2V5XTtcblx0XHRcdH0pO1xuXHRcdH0pLmJpbmQodGEsIHtcblx0XHRcdGhlaWdodDogdGEuc3R5bGUuaGVpZ2h0LFxuXHRcdFx0cmVzaXplOiB0YS5zdHlsZS5yZXNpemUsXG5cdFx0XHRvdmVyZmxvd1k6IHRhLnN0eWxlLm92ZXJmbG93WSxcblx0XHRcdG92ZXJmbG93WDogdGEuc3R5bGUub3ZlcmZsb3dYLFxuXHRcdFx0d29yZFdyYXA6IHRhLnN0eWxlLndvcmRXcmFwIH0pO1xuXG5cdFx0dGEuYWRkRXZlbnRMaXN0ZW5lcignYXV0b3NpemU6ZGVzdHJveScsIGRlc3Ryb3ksIGZhbHNlKTtcblxuXHRcdC8vIElFOSBkb2VzIG5vdCBmaXJlIG9ucHJvcGVydHljaGFuZ2Ugb3Igb25pbnB1dCBmb3IgZGVsZXRpb25zLFxuXHRcdC8vIHNvIGJpbmRpbmcgdG8gb25rZXl1cCB0byBjYXRjaCBtb3N0IG9mIHRob3NlIGV2ZW50cy5cblx0XHQvLyBUaGVyZSBpcyBubyB3YXkgdGhhdCBJIGtub3cgb2YgdG8gZGV0ZWN0IHNvbWV0aGluZyBsaWtlICdjdXQnIGluIElFOS5cblx0XHRpZiAoJ29ucHJvcGVydHljaGFuZ2UnIGluIHRhICYmICdvbmlucHV0JyBpbiB0YSkge1xuXHRcdFx0dGEuYWRkRXZlbnRMaXN0ZW5lcigna2V5dXAnLCB1cGRhdGUsIGZhbHNlKTtcblx0XHR9XG5cblx0XHR3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcigncmVzaXplJywgcGFnZVJlc2l6ZSwgZmFsc2UpO1xuXHRcdHRhLmFkZEV2ZW50TGlzdGVuZXIoJ2lucHV0JywgdXBkYXRlLCBmYWxzZSk7XG5cdFx0dGEuYWRkRXZlbnRMaXN0ZW5lcignYXV0b3NpemU6dXBkYXRlJywgdXBkYXRlLCBmYWxzZSk7XG5cdFx0c2V0LmFkZCh0YSk7XG5cdFx0dGEuc3R5bGUub3ZlcmZsb3dYID0gJ2hpZGRlbic7XG5cdFx0dGEuc3R5bGUud29yZFdyYXAgPSAnYnJlYWstd29yZCc7XG5cblx0XHRpbml0KCk7XG5cdH1cblxuXHRmdW5jdGlvbiBkZXN0cm95KHRhKSB7XG5cdFx0aWYgKCEodGEgJiYgdGEubm9kZU5hbWUgJiYgdGEubm9kZU5hbWUgPT09ICdURVhUQVJFQScpKSByZXR1cm47XG5cdFx0dmFyIGV2dCA9IGNyZWF0ZUV2ZW50KCdhdXRvc2l6ZTpkZXN0cm95Jyk7XG5cdFx0dGEuZGlzcGF0Y2hFdmVudChldnQpO1xuXHR9XG5cblx0ZnVuY3Rpb24gdXBkYXRlKHRhKSB7XG5cdFx0aWYgKCEodGEgJiYgdGEubm9kZU5hbWUgJiYgdGEubm9kZU5hbWUgPT09ICdURVhUQVJFQScpKSByZXR1cm47XG5cdFx0dmFyIGV2dCA9IGNyZWF0ZUV2ZW50KCdhdXRvc2l6ZTp1cGRhdGUnKTtcblx0XHR0YS5kaXNwYXRjaEV2ZW50KGV2dCk7XG5cdH1cblxuXHR2YXIgYXV0b3NpemUgPSBudWxsO1xuXG5cdC8vIERvIG5vdGhpbmcgaW4gTm9kZS5qcyBlbnZpcm9ubWVudCBhbmQgSUU4IChvciBsb3dlcilcblx0aWYgKHR5cGVvZiB3aW5kb3cgPT09ICd1bmRlZmluZWQnIHx8IHR5cGVvZiB3aW5kb3cuZ2V0Q29tcHV0ZWRTdHlsZSAhPT0gJ2Z1bmN0aW9uJykge1xuXHRcdGF1dG9zaXplID0gZnVuY3Rpb24gKGVsKSB7XG5cdFx0XHRyZXR1cm4gZWw7XG5cdFx0fTtcblx0XHRhdXRvc2l6ZS5kZXN0cm95ID0gZnVuY3Rpb24gKGVsKSB7XG5cdFx0XHRyZXR1cm4gZWw7XG5cdFx0fTtcblx0XHRhdXRvc2l6ZS51cGRhdGUgPSBmdW5jdGlvbiAoZWwpIHtcblx0XHRcdHJldHVybiBlbDtcblx0XHR9O1xuXHR9IGVsc2Uge1xuXHRcdGF1dG9zaXplID0gZnVuY3Rpb24gKGVsLCBvcHRpb25zKSB7XG5cdFx0XHRpZiAoZWwpIHtcblx0XHRcdFx0QXJyYXkucHJvdG90eXBlLmZvckVhY2guY2FsbChlbC5sZW5ndGggPyBlbCA6IFtlbF0sIGZ1bmN0aW9uICh4KSB7XG5cdFx0XHRcdFx0cmV0dXJuIGFzc2lnbih4LCBvcHRpb25zKTtcblx0XHRcdFx0fSk7XG5cdFx0XHR9XG5cdFx0XHRyZXR1cm4gZWw7XG5cdFx0fTtcblx0XHRhdXRvc2l6ZS5kZXN0cm95ID0gZnVuY3Rpb24gKGVsKSB7XG5cdFx0XHRpZiAoZWwpIHtcblx0XHRcdFx0QXJyYXkucHJvdG90eXBlLmZvckVhY2guY2FsbChlbC5sZW5ndGggPyBlbCA6IFtlbF0sIGRlc3Ryb3kpO1xuXHRcdFx0fVxuXHRcdFx0cmV0dXJuIGVsO1xuXHRcdH07XG5cdFx0YXV0b3NpemUudXBkYXRlID0gZnVuY3Rpb24gKGVsKSB7XG5cdFx0XHRpZiAoZWwpIHtcblx0XHRcdFx0QXJyYXkucHJvdG90eXBlLmZvckVhY2guY2FsbChlbC5sZW5ndGggPyBlbCA6IFtlbF0sIHVwZGF0ZSk7XG5cdFx0XHR9XG5cdFx0XHRyZXR1cm4gZWw7XG5cdFx0fTtcblx0fVxuXG5cdG1vZHVsZS5leHBvcnRzID0gYXV0b3NpemU7XG59KTsiLCJpbXBvcnQgYXV0b3NpemUgZnJvbSAnLi9hdXRvc2l6ZSc7XG5cbiQoZnVuY3Rpb24gKCkge1xuICAgIC8vVGV4dGFyZWEgYXV0byBncm93dGhcbiAgICBhdXRvc2l6ZSgkKCd0ZXh0YXJlYS5hdXRvLWdyb3d0aCcpKTtcblxuICAgIC8vRGF0ZXRpbWVwaWNrZXIgcGx1Z2luXG4gICAgJCgnLmRhdGV0aW1lcGlja2VyJykuYm9vdHN0cmFwTWF0ZXJpYWxEYXRlUGlja2VyKHtcbiAgICAgICAgZm9ybWF0OiAnZGRkZCBERCBNTU1NIFlZWVkgLSBISDptbScsXG4gICAgICAgIGNsZWFyQnV0dG9uOiB0cnVlLFxuICAgICAgICB3ZWVrU3RhcnQ6IDFcbiAgICB9KTtcblxuICAgICQoJy5kYXRlcGlja2VyJykuYm9vdHN0cmFwTWF0ZXJpYWxEYXRlUGlja2VyKHtcbiAgICAgICAgZm9ybWF0OiAnZGRkZCBERCBNTU1NIFlZWVknLFxuICAgICAgICBjbGVhckJ1dHRvbjogdHJ1ZSxcbiAgICAgICAgd2Vla1N0YXJ0OiAxLFxuICAgICAgICB0aW1lOiBmYWxzZVxuICAgIH0pO1xuXG4gICAgJCgnLnRpbWVwaWNrZXInKS5ib290c3RyYXBNYXRlcmlhbERhdGVQaWNrZXIoe1xuICAgICAgICBmb3JtYXQ6ICdISDptbScsXG4gICAgICAgIGNsZWFyQnV0dG9uOiB0cnVlLFxuICAgICAgICBkYXRlOiBmYWxzZVxuICAgIH0pO1xuXG4gICAgLy9Cb290c3RyYXAgZGF0ZXBpY2tlciBwbHVnaW5cbiAgICAkKCcjYnNfZGF0ZXBpY2tlcl9jb250YWluZXIgaW5wdXQnKS5kYXRlcGlja2VyKHtcbiAgICAgICAgYXV0b2Nsb3NlOiB0cnVlLFxuICAgICAgICBjb250YWluZXI6ICcjYnNfZGF0ZXBpY2tlcl9jb250YWluZXInXG4gICAgfSk7XG5cbiAgICAkKCcjYnNfZGF0ZXBpY2tlcl9jb21wb25lbnRfY29udGFpbmVyJykuZGF0ZXBpY2tlcih7XG4gICAgICAgIGF1dG9jbG9zZTogdHJ1ZSxcbiAgICAgICAgY29udGFpbmVyOiAnI2JzX2RhdGVwaWNrZXJfY29tcG9uZW50X2NvbnRhaW5lcidcbiAgICB9KTtcbiAgICAvL1xuICAgICQoJyNic19kYXRlcGlja2VyX3JhbmdlX2NvbnRhaW5lcicpLmRhdGVwaWNrZXIoe1xuICAgICAgICBhdXRvY2xvc2U6IHRydWUsXG4gICAgICAgIGNvbnRhaW5lcjogJyNic19kYXRlcGlja2VyX3JhbmdlX2NvbnRhaW5lcidcbiAgICB9KTtcbn0pOyIsIi8qIVxuICogRGF0ZXBpY2tlciBmb3IgQm9vdHN0cmFwIHYxLjguMCAoaHR0cHM6Ly9naXRodWIuY29tL3V4c29sdXRpb25zL2Jvb3RzdHJhcC1kYXRlcGlja2VyKVxuICpcbiAqIExpY2Vuc2VkIHVuZGVyIHRoZSBBcGFjaGUgTGljZW5zZSB2Mi4wIChodHRwOi8vd3d3LmFwYWNoZS5vcmcvbGljZW5zZXMvTElDRU5TRS0yLjApXG4gKi9cblxuKGZ1bmN0aW9uKGZhY3Rvcnkpe1xuICAgIGlmICh0eXBlb2YgZGVmaW5lID09PSAnZnVuY3Rpb24nICYmIGRlZmluZS5hbWQpIHtcbiAgICAgICAgZGVmaW5lKFsnanF1ZXJ5J10sIGZhY3RvcnkpO1xuICAgIH0gZWxzZSBpZiAodHlwZW9mIGV4cG9ydHMgPT09ICdvYmplY3QnKSB7XG4gICAgICAgIGZhY3RvcnkocmVxdWlyZSgnanF1ZXJ5JykpO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIGZhY3RvcnkoalF1ZXJ5KTtcbiAgICB9XG59KGZ1bmN0aW9uKCQsIHVuZGVmaW5lZCl7XG5cdGZ1bmN0aW9uIFVUQ0RhdGUoKXtcblx0XHRyZXR1cm4gbmV3IERhdGUoRGF0ZS5VVEMuYXBwbHkoRGF0ZSwgYXJndW1lbnRzKSk7XG5cdH1cblx0ZnVuY3Rpb24gVVRDVG9kYXkoKXtcblx0XHR2YXIgdG9kYXkgPSBuZXcgRGF0ZSgpO1xuXHRcdHJldHVybiBVVENEYXRlKHRvZGF5LmdldEZ1bGxZZWFyKCksIHRvZGF5LmdldE1vbnRoKCksIHRvZGF5LmdldERhdGUoKSk7XG5cdH1cblx0ZnVuY3Rpb24gaXNVVENFcXVhbHMoZGF0ZTEsIGRhdGUyKSB7XG5cdFx0cmV0dXJuIChcblx0XHRcdGRhdGUxLmdldFVUQ0Z1bGxZZWFyKCkgPT09IGRhdGUyLmdldFVUQ0Z1bGxZZWFyKCkgJiZcblx0XHRcdGRhdGUxLmdldFVUQ01vbnRoKCkgPT09IGRhdGUyLmdldFVUQ01vbnRoKCkgJiZcblx0XHRcdGRhdGUxLmdldFVUQ0RhdGUoKSA9PT0gZGF0ZTIuZ2V0VVRDRGF0ZSgpXG5cdFx0KTtcblx0fVxuXHRmdW5jdGlvbiBhbGlhcyhtZXRob2QsIGRlcHJlY2F0aW9uTXNnKXtcblx0XHRyZXR1cm4gZnVuY3Rpb24oKXtcblx0XHRcdGlmIChkZXByZWNhdGlvbk1zZyAhPT0gdW5kZWZpbmVkKSB7XG5cdFx0XHRcdCQuZm4uZGF0ZXBpY2tlci5kZXByZWNhdGVkKGRlcHJlY2F0aW9uTXNnKTtcblx0XHRcdH1cblxuXHRcdFx0cmV0dXJuIHRoaXNbbWV0aG9kXS5hcHBseSh0aGlzLCBhcmd1bWVudHMpO1xuXHRcdH07XG5cdH1cblx0ZnVuY3Rpb24gaXNWYWxpZERhdGUoZCkge1xuXHRcdHJldHVybiBkICYmICFpc05hTihkLmdldFRpbWUoKSk7XG5cdH1cblxuXHR2YXIgRGF0ZUFycmF5ID0gKGZ1bmN0aW9uKCl7XG5cdFx0dmFyIGV4dHJhcyA9IHtcblx0XHRcdGdldDogZnVuY3Rpb24oaSl7XG5cdFx0XHRcdHJldHVybiB0aGlzLnNsaWNlKGkpWzBdO1xuXHRcdFx0fSxcblx0XHRcdGNvbnRhaW5zOiBmdW5jdGlvbihkKXtcblx0XHRcdFx0Ly8gQXJyYXkuaW5kZXhPZiBpcyBub3QgY3Jvc3MtYnJvd3Nlcjtcblx0XHRcdFx0Ly8gJC5pbkFycmF5IGRvZXNuJ3Qgd29yayB3aXRoIERhdGVzXG5cdFx0XHRcdHZhciB2YWwgPSBkICYmIGQudmFsdWVPZigpO1xuXHRcdFx0XHRmb3IgKHZhciBpPTAsIGw9dGhpcy5sZW5ndGg7IGkgPCBsOyBpKyspXG4gICAgICAgICAgLy8gVXNlIGRhdGUgYXJpdGhtZXRpYyB0byBhbGxvdyBkYXRlcyB3aXRoIGRpZmZlcmVudCB0aW1lcyB0byBtYXRjaFxuICAgICAgICAgIGlmICgwIDw9IHRoaXNbaV0udmFsdWVPZigpIC0gdmFsICYmIHRoaXNbaV0udmFsdWVPZigpIC0gdmFsIDwgMTAwMCo2MCo2MCoyNClcblx0XHRcdFx0XHRcdHJldHVybiBpO1xuXHRcdFx0XHRyZXR1cm4gLTE7XG5cdFx0XHR9LFxuXHRcdFx0cmVtb3ZlOiBmdW5jdGlvbihpKXtcblx0XHRcdFx0dGhpcy5zcGxpY2UoaSwxKTtcblx0XHRcdH0sXG5cdFx0XHRyZXBsYWNlOiBmdW5jdGlvbihuZXdfYXJyYXkpe1xuXHRcdFx0XHRpZiAoIW5ld19hcnJheSlcblx0XHRcdFx0XHRyZXR1cm47XG5cdFx0XHRcdGlmICghJC5pc0FycmF5KG5ld19hcnJheSkpXG5cdFx0XHRcdFx0bmV3X2FycmF5ID0gW25ld19hcnJheV07XG5cdFx0XHRcdHRoaXMuY2xlYXIoKTtcblx0XHRcdFx0dGhpcy5wdXNoLmFwcGx5KHRoaXMsIG5ld19hcnJheSk7XG5cdFx0XHR9LFxuXHRcdFx0Y2xlYXI6IGZ1bmN0aW9uKCl7XG5cdFx0XHRcdHRoaXMubGVuZ3RoID0gMDtcblx0XHRcdH0sXG5cdFx0XHRjb3B5OiBmdW5jdGlvbigpe1xuXHRcdFx0XHR2YXIgYSA9IG5ldyBEYXRlQXJyYXkoKTtcblx0XHRcdFx0YS5yZXBsYWNlKHRoaXMpO1xuXHRcdFx0XHRyZXR1cm4gYTtcblx0XHRcdH1cblx0XHR9O1xuXG5cdFx0cmV0dXJuIGZ1bmN0aW9uKCl7XG5cdFx0XHR2YXIgYSA9IFtdO1xuXHRcdFx0YS5wdXNoLmFwcGx5KGEsIGFyZ3VtZW50cyk7XG5cdFx0XHQkLmV4dGVuZChhLCBleHRyYXMpO1xuXHRcdFx0cmV0dXJuIGE7XG5cdFx0fTtcblx0fSkoKTtcblxuXG5cdC8vIFBpY2tlciBvYmplY3RcblxuXHR2YXIgRGF0ZXBpY2tlciA9IGZ1bmN0aW9uKGVsZW1lbnQsIG9wdGlvbnMpe1xuXHRcdCQuZGF0YShlbGVtZW50LCAnZGF0ZXBpY2tlcicsIHRoaXMpO1xuXHRcdHRoaXMuX3Byb2Nlc3Nfb3B0aW9ucyhvcHRpb25zKTtcblxuXHRcdHRoaXMuZGF0ZXMgPSBuZXcgRGF0ZUFycmF5KCk7XG5cdFx0dGhpcy52aWV3RGF0ZSA9IHRoaXMuby5kZWZhdWx0Vmlld0RhdGU7XG5cdFx0dGhpcy5mb2N1c0RhdGUgPSBudWxsO1xuXG5cdFx0dGhpcy5lbGVtZW50ID0gJChlbGVtZW50KTtcblx0XHR0aGlzLmlzSW5wdXQgPSB0aGlzLmVsZW1lbnQuaXMoJ2lucHV0Jyk7XG5cdFx0dGhpcy5pbnB1dEZpZWxkID0gdGhpcy5pc0lucHV0ID8gdGhpcy5lbGVtZW50IDogdGhpcy5lbGVtZW50LmZpbmQoJ2lucHV0Jyk7XG5cdFx0dGhpcy5jb21wb25lbnQgPSB0aGlzLmVsZW1lbnQuaGFzQ2xhc3MoJ2RhdGUnKSA/IHRoaXMuZWxlbWVudC5maW5kKCcuYWRkLW9uLCAuaW5wdXQtZ3JvdXAtYWRkb24sIC5idG4nKSA6IGZhbHNlO1xuXHRcdGlmICh0aGlzLmNvbXBvbmVudCAmJiB0aGlzLmNvbXBvbmVudC5sZW5ndGggPT09IDApXG5cdFx0XHR0aGlzLmNvbXBvbmVudCA9IGZhbHNlO1xuXHRcdHRoaXMuaXNJbmxpbmUgPSAhdGhpcy5jb21wb25lbnQgJiYgdGhpcy5lbGVtZW50LmlzKCdkaXYnKTtcblxuXHRcdHRoaXMucGlja2VyID0gJChEUEdsb2JhbC50ZW1wbGF0ZSk7XG5cblx0XHQvLyBDaGVja2luZyB0ZW1wbGF0ZXMgYW5kIGluc2VydGluZ1xuXHRcdGlmICh0aGlzLl9jaGVja190ZW1wbGF0ZSh0aGlzLm8udGVtcGxhdGVzLmxlZnRBcnJvdykpIHtcblx0XHRcdHRoaXMucGlja2VyLmZpbmQoJy5wcmV2JykuaHRtbCh0aGlzLm8udGVtcGxhdGVzLmxlZnRBcnJvdyk7XG5cdFx0fVxuXG5cdFx0aWYgKHRoaXMuX2NoZWNrX3RlbXBsYXRlKHRoaXMuby50ZW1wbGF0ZXMucmlnaHRBcnJvdykpIHtcblx0XHRcdHRoaXMucGlja2VyLmZpbmQoJy5uZXh0JykuaHRtbCh0aGlzLm8udGVtcGxhdGVzLnJpZ2h0QXJyb3cpO1xuXHRcdH1cblxuXHRcdHRoaXMuX2J1aWxkRXZlbnRzKCk7XG5cdFx0dGhpcy5fYXR0YWNoRXZlbnRzKCk7XG5cblx0XHRpZiAodGhpcy5pc0lubGluZSl7XG5cdFx0XHR0aGlzLnBpY2tlci5hZGRDbGFzcygnZGF0ZXBpY2tlci1pbmxpbmUnKS5hcHBlbmRUbyh0aGlzLmVsZW1lbnQpO1xuXHRcdH1cblx0XHRlbHNlIHtcblx0XHRcdHRoaXMucGlja2VyLmFkZENsYXNzKCdkYXRlcGlja2VyLWRyb3Bkb3duIGRyb3Bkb3duLW1lbnUnKTtcblx0XHR9XG5cblx0XHRpZiAodGhpcy5vLnJ0bCl7XG5cdFx0XHR0aGlzLnBpY2tlci5hZGRDbGFzcygnZGF0ZXBpY2tlci1ydGwnKTtcblx0XHR9XG5cblx0XHRpZiAodGhpcy5vLmNhbGVuZGFyV2Vla3MpIHtcblx0XHRcdHRoaXMucGlja2VyLmZpbmQoJy5kYXRlcGlja2VyLWRheXMgLmRhdGVwaWNrZXItc3dpdGNoLCB0aGVhZCAuZGF0ZXBpY2tlci10aXRsZSwgdGZvb3QgLnRvZGF5LCB0Zm9vdCAuY2xlYXInKVxuXHRcdFx0XHQuYXR0cignY29sc3BhbicsIGZ1bmN0aW9uKGksIHZhbCl7XG5cdFx0XHRcdFx0cmV0dXJuIE51bWJlcih2YWwpICsgMTtcblx0XHRcdFx0fSk7XG5cdFx0fVxuXG5cdFx0dGhpcy5fcHJvY2Vzc19vcHRpb25zKHtcblx0XHRcdHN0YXJ0RGF0ZTogdGhpcy5fby5zdGFydERhdGUsXG5cdFx0XHRlbmREYXRlOiB0aGlzLl9vLmVuZERhdGUsXG5cdFx0XHRkYXlzT2ZXZWVrRGlzYWJsZWQ6IHRoaXMuby5kYXlzT2ZXZWVrRGlzYWJsZWQsXG5cdFx0XHRkYXlzT2ZXZWVrSGlnaGxpZ2h0ZWQ6IHRoaXMuby5kYXlzT2ZXZWVrSGlnaGxpZ2h0ZWQsXG5cdFx0XHRkYXRlc0Rpc2FibGVkOiB0aGlzLm8uZGF0ZXNEaXNhYmxlZFxuXHRcdH0pO1xuXG5cdFx0dGhpcy5fYWxsb3dfdXBkYXRlID0gZmFsc2U7XG5cdFx0dGhpcy5zZXRWaWV3TW9kZSh0aGlzLm8uc3RhcnRWaWV3KTtcblx0XHR0aGlzLl9hbGxvd191cGRhdGUgPSB0cnVlO1xuXG5cdFx0dGhpcy5maWxsRG93KCk7XG5cdFx0dGhpcy5maWxsTW9udGhzKCk7XG5cblx0XHR0aGlzLnVwZGF0ZSgpO1xuXG5cdFx0aWYgKHRoaXMuaXNJbmxpbmUpe1xuXHRcdFx0dGhpcy5zaG93KCk7XG5cdFx0fVxuXHR9O1xuXG5cdERhdGVwaWNrZXIucHJvdG90eXBlID0ge1xuXHRcdGNvbnN0cnVjdG9yOiBEYXRlcGlja2VyLFxuXG5cdFx0X3Jlc29sdmVWaWV3TmFtZTogZnVuY3Rpb24odmlldyl7XG5cdFx0XHQkLmVhY2goRFBHbG9iYWwudmlld01vZGVzLCBmdW5jdGlvbihpLCB2aWV3TW9kZSl7XG5cdFx0XHRcdGlmICh2aWV3ID09PSBpIHx8ICQuaW5BcnJheSh2aWV3LCB2aWV3TW9kZS5uYW1lcykgIT09IC0xKXtcblx0XHRcdFx0XHR2aWV3ID0gaTtcblx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XG5cdFx0XHRcdH1cblx0XHRcdH0pO1xuXG5cdFx0XHRyZXR1cm4gdmlldztcblx0XHR9LFxuXG5cdFx0X3Jlc29sdmVEYXlzT2ZXZWVrOiBmdW5jdGlvbihkYXlzT2ZXZWVrKXtcblx0XHRcdGlmICghJC5pc0FycmF5KGRheXNPZldlZWspKVxuXHRcdFx0XHRkYXlzT2ZXZWVrID0gZGF5c09mV2Vlay5zcGxpdCgvWyxcXHNdKi8pO1xuXHRcdFx0cmV0dXJuICQubWFwKGRheXNPZldlZWssIE51bWJlcik7XG5cdFx0fSxcblxuXHRcdF9jaGVja190ZW1wbGF0ZTogZnVuY3Rpb24odG1wKXtcblx0XHRcdHRyeSB7XG5cdFx0XHRcdC8vIElmIGVtcHR5XG5cdFx0XHRcdGlmICh0bXAgPT09IHVuZGVmaW5lZCB8fCB0bXAgPT09IFwiXCIpIHtcblx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XG5cdFx0XHRcdH1cblx0XHRcdFx0Ly8gSWYgbm8gaHRtbCwgZXZlcnl0aGluZyBva1xuXHRcdFx0XHRpZiAoKHRtcC5tYXRjaCgvWzw+XS9nKSB8fCBbXSkubGVuZ3RoIDw9IDApIHtcblx0XHRcdFx0XHRyZXR1cm4gdHJ1ZTtcblx0XHRcdFx0fVxuXHRcdFx0XHQvLyBDaGVja2luZyBpZiBodG1sIGlzIGZpbmVcblx0XHRcdFx0dmFyIGpEb20gPSAkKHRtcCk7XG5cdFx0XHRcdHJldHVybiBqRG9tLmxlbmd0aCA+IDA7XG5cdFx0XHR9XG5cdFx0XHRjYXRjaCAoZXgpIHtcblx0XHRcdFx0cmV0dXJuIGZhbHNlO1xuXHRcdFx0fVxuXHRcdH0sXG5cblx0XHRfcHJvY2Vzc19vcHRpb25zOiBmdW5jdGlvbihvcHRzKXtcblx0XHRcdC8vIFN0b3JlIHJhdyBvcHRpb25zIGZvciByZWZlcmVuY2Vcblx0XHRcdHRoaXMuX28gPSAkLmV4dGVuZCh7fSwgdGhpcy5fbywgb3B0cyk7XG5cdFx0XHQvLyBQcm9jZXNzZWQgb3B0aW9uc1xuXHRcdFx0dmFyIG8gPSB0aGlzLm8gPSAkLmV4dGVuZCh7fSwgdGhpcy5fbyk7XG5cblx0XHRcdC8vIENoZWNrIGlmIFwiZGUtREVcIiBzdHlsZSBkYXRlIGlzIGF2YWlsYWJsZSwgaWYgbm90IGxhbmd1YWdlIHNob3VsZFxuXHRcdFx0Ly8gZmFsbGJhY2sgdG8gMiBsZXR0ZXIgY29kZSBlZyBcImRlXCJcblx0XHRcdHZhciBsYW5nID0gby5sYW5ndWFnZTtcblx0XHRcdGlmICghZGF0ZXNbbGFuZ10pe1xuXHRcdFx0XHRsYW5nID0gbGFuZy5zcGxpdCgnLScpWzBdO1xuXHRcdFx0XHRpZiAoIWRhdGVzW2xhbmddKVxuXHRcdFx0XHRcdGxhbmcgPSBkZWZhdWx0cy5sYW5ndWFnZTtcblx0XHRcdH1cblx0XHRcdG8ubGFuZ3VhZ2UgPSBsYW5nO1xuXG5cdFx0XHQvLyBSZXRyaWV2ZSB2aWV3IGluZGV4IGZyb20gYW55IGFsaWFzZXNcblx0XHRcdG8uc3RhcnRWaWV3ID0gdGhpcy5fcmVzb2x2ZVZpZXdOYW1lKG8uc3RhcnRWaWV3KTtcblx0XHRcdG8ubWluVmlld01vZGUgPSB0aGlzLl9yZXNvbHZlVmlld05hbWUoby5taW5WaWV3TW9kZSk7XG5cdFx0XHRvLm1heFZpZXdNb2RlID0gdGhpcy5fcmVzb2x2ZVZpZXdOYW1lKG8ubWF4Vmlld01vZGUpO1xuXG5cdFx0XHQvLyBDaGVjayB2aWV3IGlzIGJldHdlZW4gbWluIGFuZCBtYXhcblx0XHRcdG8uc3RhcnRWaWV3ID0gTWF0aC5tYXgodGhpcy5vLm1pblZpZXdNb2RlLCBNYXRoLm1pbih0aGlzLm8ubWF4Vmlld01vZGUsIG8uc3RhcnRWaWV3KSk7XG5cblx0XHRcdC8vIHRydWUsIGZhbHNlLCBvciBOdW1iZXIgPiAwXG5cdFx0XHRpZiAoby5tdWx0aWRhdGUgIT09IHRydWUpe1xuXHRcdFx0XHRvLm11bHRpZGF0ZSA9IE51bWJlcihvLm11bHRpZGF0ZSkgfHwgZmFsc2U7XG5cdFx0XHRcdGlmIChvLm11bHRpZGF0ZSAhPT0gZmFsc2UpXG5cdFx0XHRcdFx0by5tdWx0aWRhdGUgPSBNYXRoLm1heCgwLCBvLm11bHRpZGF0ZSk7XG5cdFx0XHR9XG5cdFx0XHRvLm11bHRpZGF0ZVNlcGFyYXRvciA9IFN0cmluZyhvLm11bHRpZGF0ZVNlcGFyYXRvcik7XG5cblx0XHRcdG8ud2Vla1N0YXJ0ICU9IDc7XG5cdFx0XHRvLndlZWtFbmQgPSAoby53ZWVrU3RhcnQgKyA2KSAlIDc7XG5cblx0XHRcdHZhciBmb3JtYXQgPSBEUEdsb2JhbC5wYXJzZUZvcm1hdChvLmZvcm1hdCk7XG5cdFx0XHRpZiAoby5zdGFydERhdGUgIT09IC1JbmZpbml0eSl7XG5cdFx0XHRcdGlmICghIW8uc3RhcnREYXRlKXtcblx0XHRcdFx0XHRpZiAoby5zdGFydERhdGUgaW5zdGFuY2VvZiBEYXRlKVxuXHRcdFx0XHRcdFx0by5zdGFydERhdGUgPSB0aGlzLl9sb2NhbF90b191dGModGhpcy5femVyb190aW1lKG8uc3RhcnREYXRlKSk7XG5cdFx0XHRcdFx0ZWxzZVxuXHRcdFx0XHRcdFx0by5zdGFydERhdGUgPSBEUEdsb2JhbC5wYXJzZURhdGUoby5zdGFydERhdGUsIGZvcm1hdCwgby5sYW5ndWFnZSwgby5hc3N1bWVOZWFyYnlZZWFyKTtcblx0XHRcdFx0fVxuXHRcdFx0XHRlbHNlIHtcblx0XHRcdFx0XHRvLnN0YXJ0RGF0ZSA9IC1JbmZpbml0eTtcblx0XHRcdFx0fVxuXHRcdFx0fVxuXHRcdFx0aWYgKG8uZW5kRGF0ZSAhPT0gSW5maW5pdHkpe1xuXHRcdFx0XHRpZiAoISFvLmVuZERhdGUpe1xuXHRcdFx0XHRcdGlmIChvLmVuZERhdGUgaW5zdGFuY2VvZiBEYXRlKVxuXHRcdFx0XHRcdFx0by5lbmREYXRlID0gdGhpcy5fbG9jYWxfdG9fdXRjKHRoaXMuX3plcm9fdGltZShvLmVuZERhdGUpKTtcblx0XHRcdFx0XHRlbHNlXG5cdFx0XHRcdFx0XHRvLmVuZERhdGUgPSBEUEdsb2JhbC5wYXJzZURhdGUoby5lbmREYXRlLCBmb3JtYXQsIG8ubGFuZ3VhZ2UsIG8uYXNzdW1lTmVhcmJ5WWVhcik7XG5cdFx0XHRcdH1cblx0XHRcdFx0ZWxzZSB7XG5cdFx0XHRcdFx0by5lbmREYXRlID0gSW5maW5pdHk7XG5cdFx0XHRcdH1cblx0XHRcdH1cblxuXHRcdFx0by5kYXlzT2ZXZWVrRGlzYWJsZWQgPSB0aGlzLl9yZXNvbHZlRGF5c09mV2VlayhvLmRheXNPZldlZWtEaXNhYmxlZHx8W10pO1xuXHRcdFx0by5kYXlzT2ZXZWVrSGlnaGxpZ2h0ZWQgPSB0aGlzLl9yZXNvbHZlRGF5c09mV2VlayhvLmRheXNPZldlZWtIaWdobGlnaHRlZHx8W10pO1xuXG5cdFx0XHRvLmRhdGVzRGlzYWJsZWQgPSBvLmRhdGVzRGlzYWJsZWR8fFtdO1xuXHRcdFx0aWYgKCEkLmlzQXJyYXkoby5kYXRlc0Rpc2FibGVkKSkge1xuXHRcdFx0XHRvLmRhdGVzRGlzYWJsZWQgPSBvLmRhdGVzRGlzYWJsZWQuc3BsaXQoJywnKTtcblx0XHRcdH1cblx0XHRcdG8uZGF0ZXNEaXNhYmxlZCA9ICQubWFwKG8uZGF0ZXNEaXNhYmxlZCwgZnVuY3Rpb24oZCl7XG5cdFx0XHRcdHJldHVybiBEUEdsb2JhbC5wYXJzZURhdGUoZCwgZm9ybWF0LCBvLmxhbmd1YWdlLCBvLmFzc3VtZU5lYXJieVllYXIpO1xuXHRcdFx0fSk7XG5cblx0XHRcdHZhciBwbGMgPSBTdHJpbmcoby5vcmllbnRhdGlvbikudG9Mb3dlckNhc2UoKS5zcGxpdCgvXFxzKy9nKSxcblx0XHRcdFx0X3BsYyA9IG8ub3JpZW50YXRpb24udG9Mb3dlckNhc2UoKTtcblx0XHRcdHBsYyA9ICQuZ3JlcChwbGMsIGZ1bmN0aW9uKHdvcmQpe1xuXHRcdFx0XHRyZXR1cm4gL15hdXRvfGxlZnR8cmlnaHR8dG9wfGJvdHRvbSQvLnRlc3Qod29yZCk7XG5cdFx0XHR9KTtcblx0XHRcdG8ub3JpZW50YXRpb24gPSB7eDogJ2F1dG8nLCB5OiAnYXV0byd9O1xuXHRcdFx0aWYgKCFfcGxjIHx8IF9wbGMgPT09ICdhdXRvJylcblx0XHRcdFx0OyAvLyBubyBhY3Rpb25cblx0XHRcdGVsc2UgaWYgKHBsYy5sZW5ndGggPT09IDEpe1xuXHRcdFx0XHRzd2l0Y2ggKHBsY1swXSl7XG5cdFx0XHRcdFx0Y2FzZSAndG9wJzpcblx0XHRcdFx0XHRjYXNlICdib3R0b20nOlxuXHRcdFx0XHRcdFx0by5vcmllbnRhdGlvbi55ID0gcGxjWzBdO1xuXHRcdFx0XHRcdFx0YnJlYWs7XG5cdFx0XHRcdFx0Y2FzZSAnbGVmdCc6XG5cdFx0XHRcdFx0Y2FzZSAncmlnaHQnOlxuXHRcdFx0XHRcdFx0by5vcmllbnRhdGlvbi54ID0gcGxjWzBdO1xuXHRcdFx0XHRcdFx0YnJlYWs7XG5cdFx0XHRcdH1cblx0XHRcdH1cblx0XHRcdGVsc2Uge1xuXHRcdFx0XHRfcGxjID0gJC5ncmVwKHBsYywgZnVuY3Rpb24od29yZCl7XG5cdFx0XHRcdFx0cmV0dXJuIC9ebGVmdHxyaWdodCQvLnRlc3Qod29yZCk7XG5cdFx0XHRcdH0pO1xuXHRcdFx0XHRvLm9yaWVudGF0aW9uLnggPSBfcGxjWzBdIHx8ICdhdXRvJztcblxuXHRcdFx0XHRfcGxjID0gJC5ncmVwKHBsYywgZnVuY3Rpb24od29yZCl7XG5cdFx0XHRcdFx0cmV0dXJuIC9edG9wfGJvdHRvbSQvLnRlc3Qod29yZCk7XG5cdFx0XHRcdH0pO1xuXHRcdFx0XHRvLm9yaWVudGF0aW9uLnkgPSBfcGxjWzBdIHx8ICdhdXRvJztcblx0XHRcdH1cblx0XHRcdGlmIChvLmRlZmF1bHRWaWV3RGF0ZSBpbnN0YW5jZW9mIERhdGUgfHwgdHlwZW9mIG8uZGVmYXVsdFZpZXdEYXRlID09PSAnc3RyaW5nJykge1xuXHRcdFx0XHRvLmRlZmF1bHRWaWV3RGF0ZSA9IERQR2xvYmFsLnBhcnNlRGF0ZShvLmRlZmF1bHRWaWV3RGF0ZSwgZm9ybWF0LCBvLmxhbmd1YWdlLCBvLmFzc3VtZU5lYXJieVllYXIpO1xuXHRcdFx0fSBlbHNlIGlmIChvLmRlZmF1bHRWaWV3RGF0ZSkge1xuXHRcdFx0XHR2YXIgeWVhciA9IG8uZGVmYXVsdFZpZXdEYXRlLnllYXIgfHwgbmV3IERhdGUoKS5nZXRGdWxsWWVhcigpO1xuXHRcdFx0XHR2YXIgbW9udGggPSBvLmRlZmF1bHRWaWV3RGF0ZS5tb250aCB8fCAwO1xuXHRcdFx0XHR2YXIgZGF5ID0gby5kZWZhdWx0Vmlld0RhdGUuZGF5IHx8IDE7XG5cdFx0XHRcdG8uZGVmYXVsdFZpZXdEYXRlID0gVVRDRGF0ZSh5ZWFyLCBtb250aCwgZGF5KTtcblx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdG8uZGVmYXVsdFZpZXdEYXRlID0gVVRDVG9kYXkoKTtcblx0XHRcdH1cblx0XHR9LFxuXHRcdF9ldmVudHM6IFtdLFxuXHRcdF9zZWNvbmRhcnlFdmVudHM6IFtdLFxuXHRcdF9hcHBseUV2ZW50czogZnVuY3Rpb24oZXZzKXtcblx0XHRcdGZvciAodmFyIGk9MCwgZWwsIGNoLCBldjsgaSA8IGV2cy5sZW5ndGg7IGkrKyl7XG5cdFx0XHRcdGVsID0gZXZzW2ldWzBdO1xuXHRcdFx0XHRpZiAoZXZzW2ldLmxlbmd0aCA9PT0gMil7XG5cdFx0XHRcdFx0Y2ggPSB1bmRlZmluZWQ7XG5cdFx0XHRcdFx0ZXYgPSBldnNbaV1bMV07XG5cdFx0XHRcdH0gZWxzZSBpZiAoZXZzW2ldLmxlbmd0aCA9PT0gMyl7XG5cdFx0XHRcdFx0Y2ggPSBldnNbaV1bMV07XG5cdFx0XHRcdFx0ZXYgPSBldnNbaV1bMl07XG5cdFx0XHRcdH1cblx0XHRcdFx0ZWwub24oZXYsIGNoKTtcblx0XHRcdH1cblx0XHR9LFxuXHRcdF91bmFwcGx5RXZlbnRzOiBmdW5jdGlvbihldnMpe1xuXHRcdFx0Zm9yICh2YXIgaT0wLCBlbCwgZXYsIGNoOyBpIDwgZXZzLmxlbmd0aDsgaSsrKXtcblx0XHRcdFx0ZWwgPSBldnNbaV1bMF07XG5cdFx0XHRcdGlmIChldnNbaV0ubGVuZ3RoID09PSAyKXtcblx0XHRcdFx0XHRjaCA9IHVuZGVmaW5lZDtcblx0XHRcdFx0XHRldiA9IGV2c1tpXVsxXTtcblx0XHRcdFx0fSBlbHNlIGlmIChldnNbaV0ubGVuZ3RoID09PSAzKXtcblx0XHRcdFx0XHRjaCA9IGV2c1tpXVsxXTtcblx0XHRcdFx0XHRldiA9IGV2c1tpXVsyXTtcblx0XHRcdFx0fVxuXHRcdFx0XHRlbC5vZmYoZXYsIGNoKTtcblx0XHRcdH1cblx0XHR9LFxuXHRcdF9idWlsZEV2ZW50czogZnVuY3Rpb24oKXtcbiAgICAgICAgICAgIHZhciBldmVudHMgPSB7XG4gICAgICAgICAgICAgICAga2V5dXA6ICQucHJveHkoZnVuY3Rpb24oZSl7XG4gICAgICAgICAgICAgICAgICAgIGlmICgkLmluQXJyYXkoZS5rZXlDb2RlLCBbMjcsIDM3LCAzOSwgMzgsIDQwLCAzMiwgMTMsIDldKSA9PT0gLTEpXG4gICAgICAgICAgICAgICAgICAgICAgICB0aGlzLnVwZGF0ZSgpO1xuICAgICAgICAgICAgICAgIH0sIHRoaXMpLFxuICAgICAgICAgICAgICAgIGtleWRvd246ICQucHJveHkodGhpcy5rZXlkb3duLCB0aGlzKSxcbiAgICAgICAgICAgICAgICBwYXN0ZTogJC5wcm94eSh0aGlzLnBhc3RlLCB0aGlzKVxuICAgICAgICAgICAgfTtcblxuICAgICAgICAgICAgaWYgKHRoaXMuby5zaG93T25Gb2N1cyA9PT0gdHJ1ZSkge1xuICAgICAgICAgICAgICAgIGV2ZW50cy5mb2N1cyA9ICQucHJveHkodGhpcy5zaG93LCB0aGlzKTtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgaWYgKHRoaXMuaXNJbnB1dCkgeyAvLyBzaW5nbGUgaW5wdXRcbiAgICAgICAgICAgICAgICB0aGlzLl9ldmVudHMgPSBbXG4gICAgICAgICAgICAgICAgICAgIFt0aGlzLmVsZW1lbnQsIGV2ZW50c11cbiAgICAgICAgICAgICAgICBdO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgLy8gY29tcG9uZW50OiBpbnB1dCArIGJ1dHRvblxuICAgICAgICAgICAgZWxzZSBpZiAodGhpcy5jb21wb25lbnQgJiYgdGhpcy5pbnB1dEZpZWxkLmxlbmd0aCkge1xuICAgICAgICAgICAgICAgIHRoaXMuX2V2ZW50cyA9IFtcbiAgICAgICAgICAgICAgICAgICAgLy8gRm9yIGNvbXBvbmVudHMgdGhhdCBhcmUgbm90IHJlYWRvbmx5LCBhbGxvdyBrZXlib2FyZCBuYXZcbiAgICAgICAgICAgICAgICAgICAgW3RoaXMuaW5wdXRGaWVsZCwgZXZlbnRzXSxcbiAgICAgICAgICAgICAgICAgICAgW3RoaXMuY29tcG9uZW50LCB7XG4gICAgICAgICAgICAgICAgICAgICAgICBjbGljazogJC5wcm94eSh0aGlzLnNob3csIHRoaXMpXG4gICAgICAgICAgICAgICAgICAgIH1dXG4gICAgICAgICAgICAgICAgXTtcbiAgICAgICAgICAgIH1cblx0XHRcdGVsc2Uge1xuXHRcdFx0XHR0aGlzLl9ldmVudHMgPSBbXG5cdFx0XHRcdFx0W3RoaXMuZWxlbWVudCwge1xuXHRcdFx0XHRcdFx0Y2xpY2s6ICQucHJveHkodGhpcy5zaG93LCB0aGlzKSxcblx0XHRcdFx0XHRcdGtleWRvd246ICQucHJveHkodGhpcy5rZXlkb3duLCB0aGlzKVxuXHRcdFx0XHRcdH1dXG5cdFx0XHRcdF07XG5cdFx0XHR9XG5cdFx0XHR0aGlzLl9ldmVudHMucHVzaChcblx0XHRcdFx0Ly8gQ29tcG9uZW50OiBsaXN0ZW4gZm9yIGJsdXIgb24gZWxlbWVudCBkZXNjZW5kYW50c1xuXHRcdFx0XHRbdGhpcy5lbGVtZW50LCAnKicsIHtcblx0XHRcdFx0XHRibHVyOiAkLnByb3h5KGZ1bmN0aW9uKGUpe1xuXHRcdFx0XHRcdFx0dGhpcy5fZm9jdXNlZF9mcm9tID0gZS50YXJnZXQ7XG5cdFx0XHRcdFx0fSwgdGhpcylcblx0XHRcdFx0fV0sXG5cdFx0XHRcdC8vIElucHV0OiBsaXN0ZW4gZm9yIGJsdXIgb24gZWxlbWVudFxuXHRcdFx0XHRbdGhpcy5lbGVtZW50LCB7XG5cdFx0XHRcdFx0Ymx1cjogJC5wcm94eShmdW5jdGlvbihlKXtcblx0XHRcdFx0XHRcdHRoaXMuX2ZvY3VzZWRfZnJvbSA9IGUudGFyZ2V0O1xuXHRcdFx0XHRcdH0sIHRoaXMpXG5cdFx0XHRcdH1dXG5cdFx0XHQpO1xuXG5cdFx0XHRpZiAodGhpcy5vLmltbWVkaWF0ZVVwZGF0ZXMpIHtcblx0XHRcdFx0Ly8gVHJpZ2dlciBpbnB1dCB1cGRhdGVzIGltbWVkaWF0ZWx5IG9uIGNoYW5nZWQgeWVhci9tb250aFxuXHRcdFx0XHR0aGlzLl9ldmVudHMucHVzaChbdGhpcy5lbGVtZW50LCB7XG5cdFx0XHRcdFx0J2NoYW5nZVllYXIgY2hhbmdlTW9udGgnOiAkLnByb3h5KGZ1bmN0aW9uKGUpe1xuXHRcdFx0XHRcdFx0dGhpcy51cGRhdGUoZS5kYXRlKTtcblx0XHRcdFx0XHR9LCB0aGlzKVxuXHRcdFx0XHR9XSk7XG5cdFx0XHR9XG5cblx0XHRcdHRoaXMuX3NlY29uZGFyeUV2ZW50cyA9IFtcblx0XHRcdFx0W3RoaXMucGlja2VyLCB7XG5cdFx0XHRcdFx0Y2xpY2s6ICQucHJveHkodGhpcy5jbGljaywgdGhpcylcblx0XHRcdFx0fV0sXG5cdFx0XHRcdFt0aGlzLnBpY2tlciwgJy5wcmV2LCAubmV4dCcsIHtcblx0XHRcdFx0XHRjbGljazogJC5wcm94eSh0aGlzLm5hdkFycm93c0NsaWNrLCB0aGlzKVxuXHRcdFx0XHR9XSxcblx0XHRcdFx0W3RoaXMucGlja2VyLCAnLmRheTpub3QoLmRpc2FibGVkKScsIHtcblx0XHRcdFx0XHRjbGljazogJC5wcm94eSh0aGlzLmRheUNlbGxDbGljaywgdGhpcylcblx0XHRcdFx0fV0sXG5cdFx0XHRcdFskKHdpbmRvdyksIHtcblx0XHRcdFx0XHRyZXNpemU6ICQucHJveHkodGhpcy5wbGFjZSwgdGhpcylcblx0XHRcdFx0fV0sXG5cdFx0XHRcdFskKGRvY3VtZW50KSwge1xuXHRcdFx0XHRcdCdtb3VzZWRvd24gdG91Y2hzdGFydCc6ICQucHJveHkoZnVuY3Rpb24oZSl7XG5cdFx0XHRcdFx0XHQvLyBDbGlja2VkIG91dHNpZGUgdGhlIGRhdGVwaWNrZXIsIGhpZGUgaXRcblx0XHRcdFx0XHRcdGlmICghKFxuXHRcdFx0XHRcdFx0XHR0aGlzLmVsZW1lbnQuaXMoZS50YXJnZXQpIHx8XG5cdFx0XHRcdFx0XHRcdHRoaXMuZWxlbWVudC5maW5kKGUudGFyZ2V0KS5sZW5ndGggfHxcblx0XHRcdFx0XHRcdFx0dGhpcy5waWNrZXIuaXMoZS50YXJnZXQpIHx8XG5cdFx0XHRcdFx0XHRcdHRoaXMucGlja2VyLmZpbmQoZS50YXJnZXQpLmxlbmd0aCB8fFxuXHRcdFx0XHRcdFx0XHR0aGlzLmlzSW5saW5lXG5cdFx0XHRcdFx0XHQpKXtcblx0XHRcdFx0XHRcdFx0dGhpcy5oaWRlKCk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0fSwgdGhpcylcblx0XHRcdFx0fV1cblx0XHRcdF07XG5cdFx0fSxcblx0XHRfYXR0YWNoRXZlbnRzOiBmdW5jdGlvbigpe1xuXHRcdFx0dGhpcy5fZGV0YWNoRXZlbnRzKCk7XG5cdFx0XHR0aGlzLl9hcHBseUV2ZW50cyh0aGlzLl9ldmVudHMpO1xuXHRcdH0sXG5cdFx0X2RldGFjaEV2ZW50czogZnVuY3Rpb24oKXtcblx0XHRcdHRoaXMuX3VuYXBwbHlFdmVudHModGhpcy5fZXZlbnRzKTtcblx0XHR9LFxuXHRcdF9hdHRhY2hTZWNvbmRhcnlFdmVudHM6IGZ1bmN0aW9uKCl7XG5cdFx0XHR0aGlzLl9kZXRhY2hTZWNvbmRhcnlFdmVudHMoKTtcblx0XHRcdHRoaXMuX2FwcGx5RXZlbnRzKHRoaXMuX3NlY29uZGFyeUV2ZW50cyk7XG5cdFx0fSxcblx0XHRfZGV0YWNoU2Vjb25kYXJ5RXZlbnRzOiBmdW5jdGlvbigpe1xuXHRcdFx0dGhpcy5fdW5hcHBseUV2ZW50cyh0aGlzLl9zZWNvbmRhcnlFdmVudHMpO1xuXHRcdH0sXG5cdFx0X3RyaWdnZXI6IGZ1bmN0aW9uKGV2ZW50LCBhbHRkYXRlKXtcblx0XHRcdHZhciBkYXRlID0gYWx0ZGF0ZSB8fCB0aGlzLmRhdGVzLmdldCgtMSksXG5cdFx0XHRcdGxvY2FsX2RhdGUgPSB0aGlzLl91dGNfdG9fbG9jYWwoZGF0ZSk7XG5cblx0XHRcdHRoaXMuZWxlbWVudC50cmlnZ2VyKHtcblx0XHRcdFx0dHlwZTogZXZlbnQsXG5cdFx0XHRcdGRhdGU6IGxvY2FsX2RhdGUsXG5cdFx0XHRcdHZpZXdNb2RlOiB0aGlzLnZpZXdNb2RlLFxuXHRcdFx0XHRkYXRlczogJC5tYXAodGhpcy5kYXRlcywgdGhpcy5fdXRjX3RvX2xvY2FsKSxcblx0XHRcdFx0Zm9ybWF0OiAkLnByb3h5KGZ1bmN0aW9uKGl4LCBmb3JtYXQpe1xuXHRcdFx0XHRcdGlmIChhcmd1bWVudHMubGVuZ3RoID09PSAwKXtcblx0XHRcdFx0XHRcdGl4ID0gdGhpcy5kYXRlcy5sZW5ndGggLSAxO1xuXHRcdFx0XHRcdFx0Zm9ybWF0ID0gdGhpcy5vLmZvcm1hdDtcblx0XHRcdFx0XHR9IGVsc2UgaWYgKHR5cGVvZiBpeCA9PT0gJ3N0cmluZycpe1xuXHRcdFx0XHRcdFx0Zm9ybWF0ID0gaXg7XG5cdFx0XHRcdFx0XHRpeCA9IHRoaXMuZGF0ZXMubGVuZ3RoIC0gMTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0Zm9ybWF0ID0gZm9ybWF0IHx8IHRoaXMuby5mb3JtYXQ7XG5cdFx0XHRcdFx0dmFyIGRhdGUgPSB0aGlzLmRhdGVzLmdldChpeCk7XG5cdFx0XHRcdFx0cmV0dXJuIERQR2xvYmFsLmZvcm1hdERhdGUoZGF0ZSwgZm9ybWF0LCB0aGlzLm8ubGFuZ3VhZ2UpO1xuXHRcdFx0XHR9LCB0aGlzKVxuXHRcdFx0fSk7XG5cdFx0fSxcblxuXHRcdHNob3c6IGZ1bmN0aW9uKCl7XG5cdFx0XHRpZiAodGhpcy5pbnB1dEZpZWxkLnByb3AoJ2Rpc2FibGVkJykgfHwgKHRoaXMuaW5wdXRGaWVsZC5wcm9wKCdyZWFkb25seScpICYmIHRoaXMuby5lbmFibGVPblJlYWRvbmx5ID09PSBmYWxzZSkpXG5cdFx0XHRcdHJldHVybjtcblx0XHRcdGlmICghdGhpcy5pc0lubGluZSlcblx0XHRcdFx0dGhpcy5waWNrZXIuYXBwZW5kVG8odGhpcy5vLmNvbnRhaW5lcik7XG5cdFx0XHR0aGlzLnBsYWNlKCk7XG5cdFx0XHR0aGlzLnBpY2tlci5zaG93KCk7XG5cdFx0XHR0aGlzLl9hdHRhY2hTZWNvbmRhcnlFdmVudHMoKTtcblx0XHRcdHRoaXMuX3RyaWdnZXIoJ3Nob3cnKTtcblx0XHRcdGlmICgod2luZG93Lm5hdmlnYXRvci5tc01heFRvdWNoUG9pbnRzIHx8ICdvbnRvdWNoc3RhcnQnIGluIGRvY3VtZW50KSAmJiB0aGlzLm8uZGlzYWJsZVRvdWNoS2V5Ym9hcmQpIHtcblx0XHRcdFx0JCh0aGlzLmVsZW1lbnQpLmJsdXIoKTtcblx0XHRcdH1cblx0XHRcdHJldHVybiB0aGlzO1xuXHRcdH0sXG5cblx0XHRoaWRlOiBmdW5jdGlvbigpe1xuXHRcdFx0aWYgKHRoaXMuaXNJbmxpbmUgfHwgIXRoaXMucGlja2VyLmlzKCc6dmlzaWJsZScpKVxuXHRcdFx0XHRyZXR1cm4gdGhpcztcblx0XHRcdHRoaXMuZm9jdXNEYXRlID0gbnVsbDtcblx0XHRcdHRoaXMucGlja2VyLmhpZGUoKS5kZXRhY2goKTtcblx0XHRcdHRoaXMuX2RldGFjaFNlY29uZGFyeUV2ZW50cygpO1xuXHRcdFx0dGhpcy5zZXRWaWV3TW9kZSh0aGlzLm8uc3RhcnRWaWV3KTtcblxuXHRcdFx0aWYgKHRoaXMuby5mb3JjZVBhcnNlICYmIHRoaXMuaW5wdXRGaWVsZC52YWwoKSlcblx0XHRcdFx0dGhpcy5zZXRWYWx1ZSgpO1xuXHRcdFx0dGhpcy5fdHJpZ2dlcignaGlkZScpO1xuXHRcdFx0cmV0dXJuIHRoaXM7XG5cdFx0fSxcblxuXHRcdGRlc3Ryb3k6IGZ1bmN0aW9uKCl7XG5cdFx0XHR0aGlzLmhpZGUoKTtcblx0XHRcdHRoaXMuX2RldGFjaEV2ZW50cygpO1xuXHRcdFx0dGhpcy5fZGV0YWNoU2Vjb25kYXJ5RXZlbnRzKCk7XG5cdFx0XHR0aGlzLnBpY2tlci5yZW1vdmUoKTtcblx0XHRcdGRlbGV0ZSB0aGlzLmVsZW1lbnQuZGF0YSgpLmRhdGVwaWNrZXI7XG5cdFx0XHRpZiAoIXRoaXMuaXNJbnB1dCl7XG5cdFx0XHRcdGRlbGV0ZSB0aGlzLmVsZW1lbnQuZGF0YSgpLmRhdGU7XG5cdFx0XHR9XG5cdFx0XHRyZXR1cm4gdGhpcztcblx0XHR9LFxuXG5cdFx0cGFzdGU6IGZ1bmN0aW9uKGUpe1xuXHRcdFx0dmFyIGRhdGVTdHJpbmc7XG5cdFx0XHRpZiAoZS5vcmlnaW5hbEV2ZW50LmNsaXBib2FyZERhdGEgJiYgZS5vcmlnaW5hbEV2ZW50LmNsaXBib2FyZERhdGEudHlwZXNcblx0XHRcdFx0JiYgJC5pbkFycmF5KCd0ZXh0L3BsYWluJywgZS5vcmlnaW5hbEV2ZW50LmNsaXBib2FyZERhdGEudHlwZXMpICE9PSAtMSkge1xuXHRcdFx0XHRkYXRlU3RyaW5nID0gZS5vcmlnaW5hbEV2ZW50LmNsaXBib2FyZERhdGEuZ2V0RGF0YSgndGV4dC9wbGFpbicpO1xuXHRcdFx0fSBlbHNlIGlmICh3aW5kb3cuY2xpcGJvYXJkRGF0YSkge1xuXHRcdFx0XHRkYXRlU3RyaW5nID0gd2luZG93LmNsaXBib2FyZERhdGEuZ2V0RGF0YSgnVGV4dCcpO1xuXHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0cmV0dXJuO1xuXHRcdFx0fVxuXHRcdFx0dGhpcy5zZXREYXRlKGRhdGVTdHJpbmcpO1xuXHRcdFx0dGhpcy51cGRhdGUoKTtcblx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcblx0XHR9LFxuXG5cdFx0X3V0Y190b19sb2NhbDogZnVuY3Rpb24odXRjKXtcblx0XHRcdGlmICghdXRjKSB7XG5cdFx0XHRcdHJldHVybiB1dGM7XG5cdFx0XHR9XG5cblx0XHRcdHZhciBsb2NhbCA9IG5ldyBEYXRlKHV0Yy5nZXRUaW1lKCkgKyAodXRjLmdldFRpbWV6b25lT2Zmc2V0KCkgKiA2MDAwMCkpO1xuXG5cdFx0XHRpZiAobG9jYWwuZ2V0VGltZXpvbmVPZmZzZXQoKSAhPT0gdXRjLmdldFRpbWV6b25lT2Zmc2V0KCkpIHtcblx0XHRcdFx0bG9jYWwgPSBuZXcgRGF0ZSh1dGMuZ2V0VGltZSgpICsgKGxvY2FsLmdldFRpbWV6b25lT2Zmc2V0KCkgKiA2MDAwMCkpO1xuXHRcdFx0fVxuXG5cdFx0XHRyZXR1cm4gbG9jYWw7XG5cdFx0fSxcblx0XHRfbG9jYWxfdG9fdXRjOiBmdW5jdGlvbihsb2NhbCl7XG5cdFx0XHRyZXR1cm4gbG9jYWwgJiYgbmV3IERhdGUobG9jYWwuZ2V0VGltZSgpIC0gKGxvY2FsLmdldFRpbWV6b25lT2Zmc2V0KCkqNjAwMDApKTtcblx0XHR9LFxuXHRcdF96ZXJvX3RpbWU6IGZ1bmN0aW9uKGxvY2FsKXtcblx0XHRcdHJldHVybiBsb2NhbCAmJiBuZXcgRGF0ZShsb2NhbC5nZXRGdWxsWWVhcigpLCBsb2NhbC5nZXRNb250aCgpLCBsb2NhbC5nZXREYXRlKCkpO1xuXHRcdH0sXG5cdFx0X3plcm9fdXRjX3RpbWU6IGZ1bmN0aW9uKHV0Yyl7XG5cdFx0XHRyZXR1cm4gdXRjICYmIFVUQ0RhdGUodXRjLmdldFVUQ0Z1bGxZZWFyKCksIHV0Yy5nZXRVVENNb250aCgpLCB1dGMuZ2V0VVRDRGF0ZSgpKTtcblx0XHR9LFxuXG5cdFx0Z2V0RGF0ZXM6IGZ1bmN0aW9uKCl7XG5cdFx0XHRyZXR1cm4gJC5tYXAodGhpcy5kYXRlcywgdGhpcy5fdXRjX3RvX2xvY2FsKTtcblx0XHR9LFxuXG5cdFx0Z2V0VVRDRGF0ZXM6IGZ1bmN0aW9uKCl7XG5cdFx0XHRyZXR1cm4gJC5tYXAodGhpcy5kYXRlcywgZnVuY3Rpb24oZCl7XG5cdFx0XHRcdHJldHVybiBuZXcgRGF0ZShkKTtcblx0XHRcdH0pO1xuXHRcdH0sXG5cblx0XHRnZXREYXRlOiBmdW5jdGlvbigpe1xuXHRcdFx0cmV0dXJuIHRoaXMuX3V0Y190b19sb2NhbCh0aGlzLmdldFVUQ0RhdGUoKSk7XG5cdFx0fSxcblxuXHRcdGdldFVUQ0RhdGU6IGZ1bmN0aW9uKCl7XG5cdFx0XHR2YXIgc2VsZWN0ZWRfZGF0ZSA9IHRoaXMuZGF0ZXMuZ2V0KC0xKTtcblx0XHRcdGlmIChzZWxlY3RlZF9kYXRlICE9PSB1bmRlZmluZWQpIHtcblx0XHRcdFx0cmV0dXJuIG5ldyBEYXRlKHNlbGVjdGVkX2RhdGUpO1xuXHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0cmV0dXJuIG51bGw7XG5cdFx0XHR9XG5cdFx0fSxcblxuXHRcdGNsZWFyRGF0ZXM6IGZ1bmN0aW9uKCl7XG5cdFx0XHR0aGlzLmlucHV0RmllbGQudmFsKCcnKTtcblx0XHRcdHRoaXMudXBkYXRlKCk7XG5cdFx0XHR0aGlzLl90cmlnZ2VyKCdjaGFuZ2VEYXRlJyk7XG5cblx0XHRcdGlmICh0aGlzLm8uYXV0b2Nsb3NlKSB7XG5cdFx0XHRcdHRoaXMuaGlkZSgpO1xuXHRcdFx0fVxuXHRcdH0sXG5cblx0XHRzZXREYXRlczogZnVuY3Rpb24oKXtcblx0XHRcdHZhciBhcmdzID0gJC5pc0FycmF5KGFyZ3VtZW50c1swXSkgPyBhcmd1bWVudHNbMF0gOiBhcmd1bWVudHM7XG5cdFx0XHR0aGlzLnVwZGF0ZS5hcHBseSh0aGlzLCBhcmdzKTtcblx0XHRcdHRoaXMuX3RyaWdnZXIoJ2NoYW5nZURhdGUnKTtcblx0XHRcdHRoaXMuc2V0VmFsdWUoKTtcblx0XHRcdHJldHVybiB0aGlzO1xuXHRcdH0sXG5cblx0XHRzZXRVVENEYXRlczogZnVuY3Rpb24oKXtcblx0XHRcdHZhciBhcmdzID0gJC5pc0FycmF5KGFyZ3VtZW50c1swXSkgPyBhcmd1bWVudHNbMF0gOiBhcmd1bWVudHM7XG5cdFx0XHR0aGlzLnNldERhdGVzLmFwcGx5KHRoaXMsICQubWFwKGFyZ3MsIHRoaXMuX3V0Y190b19sb2NhbCkpO1xuXHRcdFx0cmV0dXJuIHRoaXM7XG5cdFx0fSxcblxuXHRcdHNldERhdGU6IGFsaWFzKCdzZXREYXRlcycpLFxuXHRcdHNldFVUQ0RhdGU6IGFsaWFzKCdzZXRVVENEYXRlcycpLFxuXHRcdHJlbW92ZTogYWxpYXMoJ2Rlc3Ryb3knLCAnTWV0aG9kIGByZW1vdmVgIGlzIGRlcHJlY2F0ZWQgYW5kIHdpbGwgYmUgcmVtb3ZlZCBpbiB2ZXJzaW9uIDIuMC4gVXNlIGBkZXN0cm95YCBpbnN0ZWFkJyksXG5cblx0XHRzZXRWYWx1ZTogZnVuY3Rpb24oKXtcblx0XHRcdHZhciBmb3JtYXR0ZWQgPSB0aGlzLmdldEZvcm1hdHRlZERhdGUoKTtcblx0XHRcdHRoaXMuaW5wdXRGaWVsZC52YWwoZm9ybWF0dGVkKTtcblx0XHRcdHJldHVybiB0aGlzO1xuXHRcdH0sXG5cblx0XHRnZXRGb3JtYXR0ZWREYXRlOiBmdW5jdGlvbihmb3JtYXQpe1xuXHRcdFx0aWYgKGZvcm1hdCA9PT0gdW5kZWZpbmVkKVxuXHRcdFx0XHRmb3JtYXQgPSB0aGlzLm8uZm9ybWF0O1xuXG5cdFx0XHR2YXIgbGFuZyA9IHRoaXMuby5sYW5ndWFnZTtcblx0XHRcdHJldHVybiAkLm1hcCh0aGlzLmRhdGVzLCBmdW5jdGlvbihkKXtcblx0XHRcdFx0cmV0dXJuIERQR2xvYmFsLmZvcm1hdERhdGUoZCwgZm9ybWF0LCBsYW5nKTtcblx0XHRcdH0pLmpvaW4odGhpcy5vLm11bHRpZGF0ZVNlcGFyYXRvcik7XG5cdFx0fSxcblxuXHRcdGdldFN0YXJ0RGF0ZTogZnVuY3Rpb24oKXtcblx0XHRcdHJldHVybiB0aGlzLm8uc3RhcnREYXRlO1xuXHRcdH0sXG5cblx0XHRzZXRTdGFydERhdGU6IGZ1bmN0aW9uKHN0YXJ0RGF0ZSl7XG5cdFx0XHR0aGlzLl9wcm9jZXNzX29wdGlvbnMoe3N0YXJ0RGF0ZTogc3RhcnREYXRlfSk7XG5cdFx0XHR0aGlzLnVwZGF0ZSgpO1xuXHRcdFx0dGhpcy51cGRhdGVOYXZBcnJvd3MoKTtcblx0XHRcdHJldHVybiB0aGlzO1xuXHRcdH0sXG5cblx0XHRnZXRFbmREYXRlOiBmdW5jdGlvbigpe1xuXHRcdFx0cmV0dXJuIHRoaXMuby5lbmREYXRlO1xuXHRcdH0sXG5cblx0XHRzZXRFbmREYXRlOiBmdW5jdGlvbihlbmREYXRlKXtcblx0XHRcdHRoaXMuX3Byb2Nlc3Nfb3B0aW9ucyh7ZW5kRGF0ZTogZW5kRGF0ZX0pO1xuXHRcdFx0dGhpcy51cGRhdGUoKTtcblx0XHRcdHRoaXMudXBkYXRlTmF2QXJyb3dzKCk7XG5cdFx0XHRyZXR1cm4gdGhpcztcblx0XHR9LFxuXG5cdFx0c2V0RGF5c09mV2Vla0Rpc2FibGVkOiBmdW5jdGlvbihkYXlzT2ZXZWVrRGlzYWJsZWQpe1xuXHRcdFx0dGhpcy5fcHJvY2Vzc19vcHRpb25zKHtkYXlzT2ZXZWVrRGlzYWJsZWQ6IGRheXNPZldlZWtEaXNhYmxlZH0pO1xuXHRcdFx0dGhpcy51cGRhdGUoKTtcblx0XHRcdHJldHVybiB0aGlzO1xuXHRcdH0sXG5cblx0XHRzZXREYXlzT2ZXZWVrSGlnaGxpZ2h0ZWQ6IGZ1bmN0aW9uKGRheXNPZldlZWtIaWdobGlnaHRlZCl7XG5cdFx0XHR0aGlzLl9wcm9jZXNzX29wdGlvbnMoe2RheXNPZldlZWtIaWdobGlnaHRlZDogZGF5c09mV2Vla0hpZ2hsaWdodGVkfSk7XG5cdFx0XHR0aGlzLnVwZGF0ZSgpO1xuXHRcdFx0cmV0dXJuIHRoaXM7XG5cdFx0fSxcblxuXHRcdHNldERhdGVzRGlzYWJsZWQ6IGZ1bmN0aW9uKGRhdGVzRGlzYWJsZWQpe1xuXHRcdFx0dGhpcy5fcHJvY2Vzc19vcHRpb25zKHtkYXRlc0Rpc2FibGVkOiBkYXRlc0Rpc2FibGVkfSk7XG5cdFx0XHR0aGlzLnVwZGF0ZSgpO1xuXHRcdFx0cmV0dXJuIHRoaXM7XG5cdFx0fSxcblxuXHRcdHBsYWNlOiBmdW5jdGlvbigpe1xuXHRcdFx0aWYgKHRoaXMuaXNJbmxpbmUpXG5cdFx0XHRcdHJldHVybiB0aGlzO1xuXHRcdFx0dmFyIGNhbGVuZGFyV2lkdGggPSB0aGlzLnBpY2tlci5vdXRlcldpZHRoKCksXG5cdFx0XHRcdGNhbGVuZGFySGVpZ2h0ID0gdGhpcy5waWNrZXIub3V0ZXJIZWlnaHQoKSxcblx0XHRcdFx0dmlzdWFsUGFkZGluZyA9IDEwLFxuXHRcdFx0XHRjb250YWluZXIgPSAkKHRoaXMuby5jb250YWluZXIpLFxuXHRcdFx0XHR3aW5kb3dXaWR0aCA9IGNvbnRhaW5lci53aWR0aCgpLFxuXHRcdFx0XHRzY3JvbGxUb3AgPSB0aGlzLm8uY29udGFpbmVyID09PSAnYm9keScgPyAkKGRvY3VtZW50KS5zY3JvbGxUb3AoKSA6IGNvbnRhaW5lci5zY3JvbGxUb3AoKSxcblx0XHRcdFx0YXBwZW5kT2Zmc2V0ID0gY29udGFpbmVyLm9mZnNldCgpO1xuXG5cdFx0XHR2YXIgcGFyZW50c1ppbmRleCA9IFswXTtcblx0XHRcdHRoaXMuZWxlbWVudC5wYXJlbnRzKCkuZWFjaChmdW5jdGlvbigpe1xuXHRcdFx0XHR2YXIgaXRlbVpJbmRleCA9ICQodGhpcykuY3NzKCd6LWluZGV4Jyk7XG5cdFx0XHRcdGlmIChpdGVtWkluZGV4ICE9PSAnYXV0bycgJiYgTnVtYmVyKGl0ZW1aSW5kZXgpICE9PSAwKSBwYXJlbnRzWmluZGV4LnB1c2goTnVtYmVyKGl0ZW1aSW5kZXgpKTtcblx0XHRcdH0pO1xuXHRcdFx0dmFyIHpJbmRleCA9IE1hdGgubWF4LmFwcGx5KE1hdGgsIHBhcmVudHNaaW5kZXgpICsgdGhpcy5vLnpJbmRleE9mZnNldDtcblx0XHRcdHZhciBvZmZzZXQgPSB0aGlzLmNvbXBvbmVudCA/IHRoaXMuY29tcG9uZW50LnBhcmVudCgpLm9mZnNldCgpIDogdGhpcy5lbGVtZW50Lm9mZnNldCgpO1xuXHRcdFx0dmFyIGhlaWdodCA9IHRoaXMuY29tcG9uZW50ID8gdGhpcy5jb21wb25lbnQub3V0ZXJIZWlnaHQodHJ1ZSkgOiB0aGlzLmVsZW1lbnQub3V0ZXJIZWlnaHQoZmFsc2UpO1xuXHRcdFx0dmFyIHdpZHRoID0gdGhpcy5jb21wb25lbnQgPyB0aGlzLmNvbXBvbmVudC5vdXRlcldpZHRoKHRydWUpIDogdGhpcy5lbGVtZW50Lm91dGVyV2lkdGgoZmFsc2UpO1xuXHRcdFx0dmFyIGxlZnQgPSBvZmZzZXQubGVmdCAtIGFwcGVuZE9mZnNldC5sZWZ0O1xuXHRcdFx0dmFyIHRvcCA9IG9mZnNldC50b3AgLSBhcHBlbmRPZmZzZXQudG9wO1xuXG5cdFx0XHRpZiAodGhpcy5vLmNvbnRhaW5lciAhPT0gJ2JvZHknKSB7XG5cdFx0XHRcdHRvcCArPSBzY3JvbGxUb3A7XG5cdFx0XHR9XG5cblx0XHRcdHRoaXMucGlja2VyLnJlbW92ZUNsYXNzKFxuXHRcdFx0XHQnZGF0ZXBpY2tlci1vcmllbnQtdG9wIGRhdGVwaWNrZXItb3JpZW50LWJvdHRvbSAnK1xuXHRcdFx0XHQnZGF0ZXBpY2tlci1vcmllbnQtcmlnaHQgZGF0ZXBpY2tlci1vcmllbnQtbGVmdCdcblx0XHRcdCk7XG5cblx0XHRcdGlmICh0aGlzLm8ub3JpZW50YXRpb24ueCAhPT0gJ2F1dG8nKXtcblx0XHRcdFx0dGhpcy5waWNrZXIuYWRkQ2xhc3MoJ2RhdGVwaWNrZXItb3JpZW50LScgKyB0aGlzLm8ub3JpZW50YXRpb24ueCk7XG5cdFx0XHRcdGlmICh0aGlzLm8ub3JpZW50YXRpb24ueCA9PT0gJ3JpZ2h0Jylcblx0XHRcdFx0XHRsZWZ0IC09IGNhbGVuZGFyV2lkdGggLSB3aWR0aDtcblx0XHRcdH1cblx0XHRcdC8vIGF1dG8geCBvcmllbnRhdGlvbiBpcyBiZXN0LXBsYWNlbWVudDogaWYgaXQgY3Jvc3NlcyBhIHdpbmRvd1xuXHRcdFx0Ly8gZWRnZSwgZnVkZ2UgaXQgc2lkZXdheXNcblx0XHRcdGVsc2Uge1xuXHRcdFx0XHRpZiAob2Zmc2V0LmxlZnQgPCAwKSB7XG5cdFx0XHRcdFx0Ly8gY29tcG9uZW50IGlzIG91dHNpZGUgdGhlIHdpbmRvdyBvbiB0aGUgbGVmdCBzaWRlLiBNb3ZlIGl0IGludG8gdmlzaWJsZSByYW5nZVxuXHRcdFx0XHRcdHRoaXMucGlja2VyLmFkZENsYXNzKCdkYXRlcGlja2VyLW9yaWVudC1sZWZ0Jyk7XG5cdFx0XHRcdFx0bGVmdCAtPSBvZmZzZXQubGVmdCAtIHZpc3VhbFBhZGRpbmc7XG5cdFx0XHRcdH0gZWxzZSBpZiAobGVmdCArIGNhbGVuZGFyV2lkdGggPiB3aW5kb3dXaWR0aCkge1xuXHRcdFx0XHRcdC8vIHRoZSBjYWxlbmRhciBwYXNzZXMgdGhlIHdpZG93IHJpZ2h0IGVkZ2UuIEFsaWduIGl0IHRvIGNvbXBvbmVudCByaWdodCBzaWRlXG5cdFx0XHRcdFx0dGhpcy5waWNrZXIuYWRkQ2xhc3MoJ2RhdGVwaWNrZXItb3JpZW50LXJpZ2h0Jyk7XG5cdFx0XHRcdFx0bGVmdCArPSB3aWR0aCAtIGNhbGVuZGFyV2lkdGg7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0aWYgKHRoaXMuby5ydGwpIHtcblx0XHRcdFx0XHRcdC8vIERlZmF1bHQgdG8gcmlnaHRcblx0XHRcdFx0XHRcdHRoaXMucGlja2VyLmFkZENsYXNzKCdkYXRlcGlja2VyLW9yaWVudC1yaWdodCcpO1xuXHRcdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0XHQvLyBEZWZhdWx0IHRvIGxlZnRcblx0XHRcdFx0XHRcdHRoaXMucGlja2VyLmFkZENsYXNzKCdkYXRlcGlja2VyLW9yaWVudC1sZWZ0Jyk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHR9XG5cdFx0XHR9XG5cblx0XHRcdC8vIGF1dG8geSBvcmllbnRhdGlvbiBpcyBiZXN0LXNpdHVhdGlvbjogdG9wIG9yIGJvdHRvbSwgbm8gZnVkZ2luZyxcblx0XHRcdC8vIGRlY2lzaW9uIGJhc2VkIG9uIHdoaWNoIHNob3dzIG1vcmUgb2YgdGhlIGNhbGVuZGFyXG5cdFx0XHR2YXIgeW9yaWVudCA9IHRoaXMuby5vcmllbnRhdGlvbi55LFxuXHRcdFx0XHR0b3Bfb3ZlcmZsb3c7XG5cdFx0XHRpZiAoeW9yaWVudCA9PT0gJ2F1dG8nKXtcblx0XHRcdFx0dG9wX292ZXJmbG93ID0gLXNjcm9sbFRvcCArIHRvcCAtIGNhbGVuZGFySGVpZ2h0O1xuXHRcdFx0XHR5b3JpZW50ID0gdG9wX292ZXJmbG93IDwgMCA/ICdib3R0b20nIDogJ3RvcCc7XG5cdFx0XHR9XG5cblx0XHRcdHRoaXMucGlja2VyLmFkZENsYXNzKCdkYXRlcGlja2VyLW9yaWVudC0nICsgeW9yaWVudCk7XG5cdFx0XHRpZiAoeW9yaWVudCA9PT0gJ3RvcCcpXG5cdFx0XHRcdHRvcCAtPSBjYWxlbmRhckhlaWdodCArIHBhcnNlSW50KHRoaXMucGlja2VyLmNzcygncGFkZGluZy10b3AnKSk7XG5cdFx0XHRlbHNlXG5cdFx0XHRcdHRvcCArPSBoZWlnaHQ7XG5cblx0XHRcdGlmICh0aGlzLm8ucnRsKSB7XG5cdFx0XHRcdHZhciByaWdodCA9IHdpbmRvd1dpZHRoIC0gKGxlZnQgKyB3aWR0aCk7XG5cdFx0XHRcdHRoaXMucGlja2VyLmNzcyh7XG5cdFx0XHRcdFx0dG9wOiB0b3AsXG5cdFx0XHRcdFx0cmlnaHQ6IHJpZ2h0LFxuXHRcdFx0XHRcdHpJbmRleDogekluZGV4XG5cdFx0XHRcdH0pO1xuXHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0dGhpcy5waWNrZXIuY3NzKHtcblx0XHRcdFx0XHR0b3A6IHRvcCxcblx0XHRcdFx0XHRsZWZ0OiBsZWZ0LFxuXHRcdFx0XHRcdHpJbmRleDogekluZGV4XG5cdFx0XHRcdH0pO1xuXHRcdFx0fVxuXHRcdFx0cmV0dXJuIHRoaXM7XG5cdFx0fSxcblxuXHRcdF9hbGxvd191cGRhdGU6IHRydWUsXG5cdFx0dXBkYXRlOiBmdW5jdGlvbigpe1xuXHRcdFx0aWYgKCF0aGlzLl9hbGxvd191cGRhdGUpXG5cdFx0XHRcdHJldHVybiB0aGlzO1xuXG5cdFx0XHR2YXIgb2xkRGF0ZXMgPSB0aGlzLmRhdGVzLmNvcHkoKSxcblx0XHRcdFx0ZGF0ZXMgPSBbXSxcblx0XHRcdFx0ZnJvbUFyZ3MgPSBmYWxzZTtcblx0XHRcdGlmIChhcmd1bWVudHMubGVuZ3RoKXtcblx0XHRcdFx0JC5lYWNoKGFyZ3VtZW50cywgJC5wcm94eShmdW5jdGlvbihpLCBkYXRlKXtcblx0XHRcdFx0XHRpZiAoZGF0ZSBpbnN0YW5jZW9mIERhdGUpXG5cdFx0XHRcdFx0XHRkYXRlID0gdGhpcy5fbG9jYWxfdG9fdXRjKGRhdGUpO1xuXHRcdFx0XHRcdGRhdGVzLnB1c2goZGF0ZSk7XG5cdFx0XHRcdH0sIHRoaXMpKTtcblx0XHRcdFx0ZnJvbUFyZ3MgPSB0cnVlO1xuXHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0ZGF0ZXMgPSB0aGlzLmlzSW5wdXRcblx0XHRcdFx0XHRcdD8gdGhpcy5lbGVtZW50LnZhbCgpXG5cdFx0XHRcdFx0XHQ6IHRoaXMuZWxlbWVudC5kYXRhKCdkYXRlJykgfHwgdGhpcy5pbnB1dEZpZWxkLnZhbCgpO1xuXHRcdFx0XHRpZiAoZGF0ZXMgJiYgdGhpcy5vLm11bHRpZGF0ZSlcblx0XHRcdFx0XHRkYXRlcyA9IGRhdGVzLnNwbGl0KHRoaXMuby5tdWx0aWRhdGVTZXBhcmF0b3IpO1xuXHRcdFx0XHRlbHNlXG5cdFx0XHRcdFx0ZGF0ZXMgPSBbZGF0ZXNdO1xuXHRcdFx0XHRkZWxldGUgdGhpcy5lbGVtZW50LmRhdGEoKS5kYXRlO1xuXHRcdFx0fVxuXG5cdFx0XHRkYXRlcyA9ICQubWFwKGRhdGVzLCAkLnByb3h5KGZ1bmN0aW9uKGRhdGUpe1xuXHRcdFx0XHRyZXR1cm4gRFBHbG9iYWwucGFyc2VEYXRlKGRhdGUsIHRoaXMuby5mb3JtYXQsIHRoaXMuby5sYW5ndWFnZSwgdGhpcy5vLmFzc3VtZU5lYXJieVllYXIpO1xuXHRcdFx0fSwgdGhpcykpO1xuXHRcdFx0ZGF0ZXMgPSAkLmdyZXAoZGF0ZXMsICQucHJveHkoZnVuY3Rpb24oZGF0ZSl7XG5cdFx0XHRcdHJldHVybiAoXG5cdFx0XHRcdFx0IXRoaXMuZGF0ZVdpdGhpblJhbmdlKGRhdGUpIHx8XG5cdFx0XHRcdFx0IWRhdGVcblx0XHRcdFx0KTtcblx0XHRcdH0sIHRoaXMpLCB0cnVlKTtcblx0XHRcdHRoaXMuZGF0ZXMucmVwbGFjZShkYXRlcyk7XG5cblx0XHRcdGlmICh0aGlzLm8udXBkYXRlVmlld0RhdGUpIHtcblx0XHRcdFx0aWYgKHRoaXMuZGF0ZXMubGVuZ3RoKVxuXHRcdFx0XHRcdHRoaXMudmlld0RhdGUgPSBuZXcgRGF0ZSh0aGlzLmRhdGVzLmdldCgtMSkpO1xuXHRcdFx0XHRlbHNlIGlmICh0aGlzLnZpZXdEYXRlIDwgdGhpcy5vLnN0YXJ0RGF0ZSlcblx0XHRcdFx0XHR0aGlzLnZpZXdEYXRlID0gbmV3IERhdGUodGhpcy5vLnN0YXJ0RGF0ZSk7XG5cdFx0XHRcdGVsc2UgaWYgKHRoaXMudmlld0RhdGUgPiB0aGlzLm8uZW5kRGF0ZSlcblx0XHRcdFx0XHR0aGlzLnZpZXdEYXRlID0gbmV3IERhdGUodGhpcy5vLmVuZERhdGUpO1xuXHRcdFx0XHRlbHNlXG5cdFx0XHRcdFx0dGhpcy52aWV3RGF0ZSA9IHRoaXMuby5kZWZhdWx0Vmlld0RhdGU7XG5cdFx0XHR9XG5cblx0XHRcdGlmIChmcm9tQXJncyl7XG5cdFx0XHRcdC8vIHNldHRpbmcgZGF0ZSBieSBjbGlja2luZ1xuXHRcdFx0XHR0aGlzLnNldFZhbHVlKCk7XG5cdFx0XHRcdHRoaXMuZWxlbWVudC5jaGFuZ2UoKTtcblx0XHRcdH1cblx0XHRcdGVsc2UgaWYgKHRoaXMuZGF0ZXMubGVuZ3RoKXtcblx0XHRcdFx0Ly8gc2V0dGluZyBkYXRlIGJ5IHR5cGluZ1xuXHRcdFx0XHRpZiAoU3RyaW5nKG9sZERhdGVzKSAhPT0gU3RyaW5nKHRoaXMuZGF0ZXMpICYmIGZyb21BcmdzKSB7XG5cdFx0XHRcdFx0dGhpcy5fdHJpZ2dlcignY2hhbmdlRGF0ZScpO1xuXHRcdFx0XHRcdHRoaXMuZWxlbWVudC5jaGFuZ2UoKTtcblx0XHRcdFx0fVxuXHRcdFx0fVxuXHRcdFx0aWYgKCF0aGlzLmRhdGVzLmxlbmd0aCAmJiBvbGREYXRlcy5sZW5ndGgpIHtcblx0XHRcdFx0dGhpcy5fdHJpZ2dlcignY2xlYXJEYXRlJyk7XG5cdFx0XHRcdHRoaXMuZWxlbWVudC5jaGFuZ2UoKTtcblx0XHRcdH1cblxuXHRcdFx0dGhpcy5maWxsKCk7XG5cdFx0XHRyZXR1cm4gdGhpcztcblx0XHR9LFxuXG5cdFx0ZmlsbERvdzogZnVuY3Rpb24oKXtcbiAgICAgIGlmICh0aGlzLm8uc2hvd1dlZWtEYXlzKSB7XG5cdFx0XHR2YXIgZG93Q250ID0gdGhpcy5vLndlZWtTdGFydCxcblx0XHRcdFx0aHRtbCA9ICc8dHI+Jztcblx0XHRcdGlmICh0aGlzLm8uY2FsZW5kYXJXZWVrcyl7XG5cdFx0XHRcdGh0bWwgKz0gJzx0aCBjbGFzcz1cImN3XCI+JiMxNjA7PC90aD4nO1xuXHRcdFx0fVxuXHRcdFx0d2hpbGUgKGRvd0NudCA8IHRoaXMuby53ZWVrU3RhcnQgKyA3KXtcblx0XHRcdFx0aHRtbCArPSAnPHRoIGNsYXNzPVwiZG93JztcbiAgICAgICAgaWYgKCQuaW5BcnJheShkb3dDbnQsIHRoaXMuby5kYXlzT2ZXZWVrRGlzYWJsZWQpICE9PSAtMSlcbiAgICAgICAgICBodG1sICs9ICcgZGlzYWJsZWQnO1xuICAgICAgICBodG1sICs9ICdcIj4nK2RhdGVzW3RoaXMuby5sYW5ndWFnZV0uZGF5c01pblsoZG93Q250KyspJTddKyc8L3RoPic7XG5cdFx0XHR9XG5cdFx0XHRodG1sICs9ICc8L3RyPic7XG5cdFx0XHR0aGlzLnBpY2tlci5maW5kKCcuZGF0ZXBpY2tlci1kYXlzIHRoZWFkJykuYXBwZW5kKGh0bWwpO1xuICAgICAgfVxuXHRcdH0sXG5cblx0XHRmaWxsTW9udGhzOiBmdW5jdGlvbigpe1xuICAgICAgdmFyIGxvY2FsRGF0ZSA9IHRoaXMuX3V0Y190b19sb2NhbCh0aGlzLnZpZXdEYXRlKTtcblx0XHRcdHZhciBodG1sID0gJyc7XG5cdFx0XHR2YXIgZm9jdXNlZDtcblx0XHRcdGZvciAodmFyIGkgPSAwOyBpIDwgMTI7IGkrKyl7XG5cdFx0XHRcdGZvY3VzZWQgPSBsb2NhbERhdGUgJiYgbG9jYWxEYXRlLmdldE1vbnRoKCkgPT09IGkgPyAnIGZvY3VzZWQnIDogJyc7XG5cdFx0XHRcdGh0bWwgKz0gJzxzcGFuIGNsYXNzPVwibW9udGgnICsgZm9jdXNlZCArICdcIj4nICsgZGF0ZXNbdGhpcy5vLmxhbmd1YWdlXS5tb250aHNTaG9ydFtpXSArICc8L3NwYW4+Jztcblx0XHRcdH1cblx0XHRcdHRoaXMucGlja2VyLmZpbmQoJy5kYXRlcGlja2VyLW1vbnRocyB0ZCcpLmh0bWwoaHRtbCk7XG5cdFx0fSxcblxuXHRcdHNldFJhbmdlOiBmdW5jdGlvbihyYW5nZSl7XG5cdFx0XHRpZiAoIXJhbmdlIHx8ICFyYW5nZS5sZW5ndGgpXG5cdFx0XHRcdGRlbGV0ZSB0aGlzLnJhbmdlO1xuXHRcdFx0ZWxzZVxuXHRcdFx0XHR0aGlzLnJhbmdlID0gJC5tYXAocmFuZ2UsIGZ1bmN0aW9uKGQpe1xuXHRcdFx0XHRcdHJldHVybiBkLnZhbHVlT2YoKTtcblx0XHRcdFx0fSk7XG5cdFx0XHR0aGlzLmZpbGwoKTtcblx0XHR9LFxuXG5cdFx0Z2V0Q2xhc3NOYW1lczogZnVuY3Rpb24oZGF0ZSl7XG5cdFx0XHR2YXIgY2xzID0gW10sXG5cdFx0XHRcdHllYXIgPSB0aGlzLnZpZXdEYXRlLmdldFVUQ0Z1bGxZZWFyKCksXG5cdFx0XHRcdG1vbnRoID0gdGhpcy52aWV3RGF0ZS5nZXRVVENNb250aCgpLFxuXHRcdFx0XHR0b2RheSA9IFVUQ1RvZGF5KCk7XG5cdFx0XHRpZiAoZGF0ZS5nZXRVVENGdWxsWWVhcigpIDwgeWVhciB8fCAoZGF0ZS5nZXRVVENGdWxsWWVhcigpID09PSB5ZWFyICYmIGRhdGUuZ2V0VVRDTW9udGgoKSA8IG1vbnRoKSl7XG5cdFx0XHRcdGNscy5wdXNoKCdvbGQnKTtcblx0XHRcdH0gZWxzZSBpZiAoZGF0ZS5nZXRVVENGdWxsWWVhcigpID4geWVhciB8fCAoZGF0ZS5nZXRVVENGdWxsWWVhcigpID09PSB5ZWFyICYmIGRhdGUuZ2V0VVRDTW9udGgoKSA+IG1vbnRoKSl7XG5cdFx0XHRcdGNscy5wdXNoKCduZXcnKTtcblx0XHRcdH1cblx0XHRcdGlmICh0aGlzLmZvY3VzRGF0ZSAmJiBkYXRlLnZhbHVlT2YoKSA9PT0gdGhpcy5mb2N1c0RhdGUudmFsdWVPZigpKVxuXHRcdFx0XHRjbHMucHVzaCgnZm9jdXNlZCcpO1xuXHRcdFx0Ly8gQ29tcGFyZSBpbnRlcm5hbCBVVEMgZGF0ZSB3aXRoIFVUQyB0b2RheSwgbm90IGxvY2FsIHRvZGF5XG5cdFx0XHRpZiAodGhpcy5vLnRvZGF5SGlnaGxpZ2h0ICYmIGlzVVRDRXF1YWxzKGRhdGUsIHRvZGF5KSkge1xuXHRcdFx0XHRjbHMucHVzaCgndG9kYXknKTtcblx0XHRcdH1cblx0XHRcdGlmICh0aGlzLmRhdGVzLmNvbnRhaW5zKGRhdGUpICE9PSAtMSlcblx0XHRcdFx0Y2xzLnB1c2goJ2FjdGl2ZScpO1xuXHRcdFx0aWYgKCF0aGlzLmRhdGVXaXRoaW5SYW5nZShkYXRlKSl7XG5cdFx0XHRcdGNscy5wdXNoKCdkaXNhYmxlZCcpO1xuXHRcdFx0fVxuXHRcdFx0aWYgKHRoaXMuZGF0ZUlzRGlzYWJsZWQoZGF0ZSkpe1xuXHRcdFx0XHRjbHMucHVzaCgnZGlzYWJsZWQnLCAnZGlzYWJsZWQtZGF0ZScpO1xuXHRcdFx0fVxuXHRcdFx0aWYgKCQuaW5BcnJheShkYXRlLmdldFVUQ0RheSgpLCB0aGlzLm8uZGF5c09mV2Vla0hpZ2hsaWdodGVkKSAhPT0gLTEpe1xuXHRcdFx0XHRjbHMucHVzaCgnaGlnaGxpZ2h0ZWQnKTtcblx0XHRcdH1cblxuXHRcdFx0aWYgKHRoaXMucmFuZ2Upe1xuXHRcdFx0XHRpZiAoZGF0ZSA+IHRoaXMucmFuZ2VbMF0gJiYgZGF0ZSA8IHRoaXMucmFuZ2VbdGhpcy5yYW5nZS5sZW5ndGgtMV0pe1xuXHRcdFx0XHRcdGNscy5wdXNoKCdyYW5nZScpO1xuXHRcdFx0XHR9XG5cdFx0XHRcdGlmICgkLmluQXJyYXkoZGF0ZS52YWx1ZU9mKCksIHRoaXMucmFuZ2UpICE9PSAtMSl7XG5cdFx0XHRcdFx0Y2xzLnB1c2goJ3NlbGVjdGVkJyk7XG5cdFx0XHRcdH1cblx0XHRcdFx0aWYgKGRhdGUudmFsdWVPZigpID09PSB0aGlzLnJhbmdlWzBdKXtcbiAgICAgICAgICBjbHMucHVzaCgncmFuZ2Utc3RhcnQnKTtcbiAgICAgICAgfVxuICAgICAgICBpZiAoZGF0ZS52YWx1ZU9mKCkgPT09IHRoaXMucmFuZ2VbdGhpcy5yYW5nZS5sZW5ndGgtMV0pe1xuICAgICAgICAgIGNscy5wdXNoKCdyYW5nZS1lbmQnKTtcbiAgICAgICAgfVxuXHRcdFx0fVxuXHRcdFx0cmV0dXJuIGNscztcblx0XHR9LFxuXG5cdFx0X2ZpbGxfeWVhcnNWaWV3OiBmdW5jdGlvbihzZWxlY3RvciwgY3NzQ2xhc3MsIGZhY3RvciwgeWVhciwgc3RhcnRZZWFyLCBlbmRZZWFyLCBiZWZvcmVGbil7XG5cdFx0XHR2YXIgaHRtbCA9ICcnO1xuXHRcdFx0dmFyIHN0ZXAgPSBmYWN0b3IgLyAxMDtcblx0XHRcdHZhciB2aWV3ID0gdGhpcy5waWNrZXIuZmluZChzZWxlY3Rvcik7XG5cdFx0XHR2YXIgc3RhcnRWYWwgPSBNYXRoLmZsb29yKHllYXIgLyBmYWN0b3IpICogZmFjdG9yO1xuXHRcdFx0dmFyIGVuZFZhbCA9IHN0YXJ0VmFsICsgc3RlcCAqIDk7XG5cdFx0XHR2YXIgZm9jdXNlZFZhbCA9IE1hdGguZmxvb3IodGhpcy52aWV3RGF0ZS5nZXRGdWxsWWVhcigpIC8gc3RlcCkgKiBzdGVwO1xuXHRcdFx0dmFyIHNlbGVjdGVkID0gJC5tYXAodGhpcy5kYXRlcywgZnVuY3Rpb24oZCl7XG5cdFx0XHRcdHJldHVybiBNYXRoLmZsb29yKGQuZ2V0VVRDRnVsbFllYXIoKSAvIHN0ZXApICogc3RlcDtcblx0XHRcdH0pO1xuXG5cdFx0XHR2YXIgY2xhc3NlcywgdG9vbHRpcCwgYmVmb3JlO1xuXHRcdFx0Zm9yICh2YXIgY3VyclZhbCA9IHN0YXJ0VmFsIC0gc3RlcDsgY3VyclZhbCA8PSBlbmRWYWwgKyBzdGVwOyBjdXJyVmFsICs9IHN0ZXApIHtcblx0XHRcdFx0Y2xhc3NlcyA9IFtjc3NDbGFzc107XG5cdFx0XHRcdHRvb2x0aXAgPSBudWxsO1xuXG5cdFx0XHRcdGlmIChjdXJyVmFsID09PSBzdGFydFZhbCAtIHN0ZXApIHtcblx0XHRcdFx0XHRjbGFzc2VzLnB1c2goJ29sZCcpO1xuXHRcdFx0XHR9IGVsc2UgaWYgKGN1cnJWYWwgPT09IGVuZFZhbCArIHN0ZXApIHtcblx0XHRcdFx0XHRjbGFzc2VzLnB1c2goJ25ldycpO1xuXHRcdFx0XHR9XG5cdFx0XHRcdGlmICgkLmluQXJyYXkoY3VyclZhbCwgc2VsZWN0ZWQpICE9PSAtMSkge1xuXHRcdFx0XHRcdGNsYXNzZXMucHVzaCgnYWN0aXZlJyk7XG5cdFx0XHRcdH1cblx0XHRcdFx0aWYgKGN1cnJWYWwgPCBzdGFydFllYXIgfHwgY3VyclZhbCA+IGVuZFllYXIpIHtcblx0XHRcdFx0XHRjbGFzc2VzLnB1c2goJ2Rpc2FibGVkJyk7XG5cdFx0XHRcdH1cblx0XHRcdFx0aWYgKGN1cnJWYWwgPT09IGZvY3VzZWRWYWwpIHtcblx0XHRcdFx0ICBjbGFzc2VzLnB1c2goJ2ZvY3VzZWQnKTtcbiAgICAgICAgfVxuXG5cdFx0XHRcdGlmIChiZWZvcmVGbiAhPT0gJC5ub29wKSB7XG5cdFx0XHRcdFx0YmVmb3JlID0gYmVmb3JlRm4obmV3IERhdGUoY3VyclZhbCwgMCwgMSkpO1xuXHRcdFx0XHRcdGlmIChiZWZvcmUgPT09IHVuZGVmaW5lZCkge1xuXHRcdFx0XHRcdFx0YmVmb3JlID0ge307XG5cdFx0XHRcdFx0fSBlbHNlIGlmICh0eXBlb2YgYmVmb3JlID09PSAnYm9vbGVhbicpIHtcblx0XHRcdFx0XHRcdGJlZm9yZSA9IHtlbmFibGVkOiBiZWZvcmV9O1xuXHRcdFx0XHRcdH0gZWxzZSBpZiAodHlwZW9mIGJlZm9yZSA9PT0gJ3N0cmluZycpIHtcblx0XHRcdFx0XHRcdGJlZm9yZSA9IHtjbGFzc2VzOiBiZWZvcmV9O1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRpZiAoYmVmb3JlLmVuYWJsZWQgPT09IGZhbHNlKSB7XG5cdFx0XHRcdFx0XHRjbGFzc2VzLnB1c2goJ2Rpc2FibGVkJyk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdGlmIChiZWZvcmUuY2xhc3Nlcykge1xuXHRcdFx0XHRcdFx0Y2xhc3NlcyA9IGNsYXNzZXMuY29uY2F0KGJlZm9yZS5jbGFzc2VzLnNwbGl0KC9cXHMrLykpO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRpZiAoYmVmb3JlLnRvb2x0aXApIHtcblx0XHRcdFx0XHRcdHRvb2x0aXAgPSBiZWZvcmUudG9vbHRpcDtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH1cblxuXHRcdFx0XHRodG1sICs9ICc8c3BhbiBjbGFzcz1cIicgKyBjbGFzc2VzLmpvaW4oJyAnKSArICdcIicgKyAodG9vbHRpcCA/ICcgdGl0bGU9XCInICsgdG9vbHRpcCArICdcIicgOiAnJykgKyAnPicgKyBjdXJyVmFsICsgJzwvc3Bhbj4nO1xuXHRcdFx0fVxuXG5cdFx0XHR2aWV3LmZpbmQoJy5kYXRlcGlja2VyLXN3aXRjaCcpLnRleHQoc3RhcnRWYWwgKyAnLScgKyBlbmRWYWwpO1xuXHRcdFx0dmlldy5maW5kKCd0ZCcpLmh0bWwoaHRtbCk7XG5cdFx0fSxcblxuXHRcdGZpbGw6IGZ1bmN0aW9uKCl7XG5cdFx0XHR2YXIgZCA9IG5ldyBEYXRlKHRoaXMudmlld0RhdGUpLFxuXHRcdFx0XHR5ZWFyID0gZC5nZXRVVENGdWxsWWVhcigpLFxuXHRcdFx0XHRtb250aCA9IGQuZ2V0VVRDTW9udGgoKSxcblx0XHRcdFx0c3RhcnRZZWFyID0gdGhpcy5vLnN0YXJ0RGF0ZSAhPT0gLUluZmluaXR5ID8gdGhpcy5vLnN0YXJ0RGF0ZS5nZXRVVENGdWxsWWVhcigpIDogLUluZmluaXR5LFxuXHRcdFx0XHRzdGFydE1vbnRoID0gdGhpcy5vLnN0YXJ0RGF0ZSAhPT0gLUluZmluaXR5ID8gdGhpcy5vLnN0YXJ0RGF0ZS5nZXRVVENNb250aCgpIDogLUluZmluaXR5LFxuXHRcdFx0XHRlbmRZZWFyID0gdGhpcy5vLmVuZERhdGUgIT09IEluZmluaXR5ID8gdGhpcy5vLmVuZERhdGUuZ2V0VVRDRnVsbFllYXIoKSA6IEluZmluaXR5LFxuXHRcdFx0XHRlbmRNb250aCA9IHRoaXMuby5lbmREYXRlICE9PSBJbmZpbml0eSA/IHRoaXMuby5lbmREYXRlLmdldFVUQ01vbnRoKCkgOiBJbmZpbml0eSxcblx0XHRcdFx0dG9kYXl0eHQgPSBkYXRlc1t0aGlzLm8ubGFuZ3VhZ2VdLnRvZGF5IHx8IGRhdGVzWydlbiddLnRvZGF5IHx8ICcnLFxuXHRcdFx0XHRjbGVhcnR4dCA9IGRhdGVzW3RoaXMuby5sYW5ndWFnZV0uY2xlYXIgfHwgZGF0ZXNbJ2VuJ10uY2xlYXIgfHwgJycsXG5cdFx0XHRcdHRpdGxlRm9ybWF0ID0gZGF0ZXNbdGhpcy5vLmxhbmd1YWdlXS50aXRsZUZvcm1hdCB8fCBkYXRlc1snZW4nXS50aXRsZUZvcm1hdCxcblx0XHRcdFx0dG9vbHRpcCxcblx0XHRcdFx0YmVmb3JlO1xuXHRcdFx0aWYgKGlzTmFOKHllYXIpIHx8IGlzTmFOKG1vbnRoKSlcblx0XHRcdFx0cmV0dXJuO1xuXHRcdFx0dGhpcy5waWNrZXIuZmluZCgnLmRhdGVwaWNrZXItZGF5cyAuZGF0ZXBpY2tlci1zd2l0Y2gnKVxuXHRcdFx0XHRcdFx0LnRleHQoRFBHbG9iYWwuZm9ybWF0RGF0ZShkLCB0aXRsZUZvcm1hdCwgdGhpcy5vLmxhbmd1YWdlKSk7XG5cdFx0XHR0aGlzLnBpY2tlci5maW5kKCd0Zm9vdCAudG9kYXknKVxuXHRcdFx0XHRcdFx0LnRleHQodG9kYXl0eHQpXG5cdFx0XHRcdFx0XHQuY3NzKCdkaXNwbGF5JywgdGhpcy5vLnRvZGF5QnRuID09PSB0cnVlIHx8IHRoaXMuby50b2RheUJ0biA9PT0gJ2xpbmtlZCcgPyAndGFibGUtY2VsbCcgOiAnbm9uZScpO1xuXHRcdFx0dGhpcy5waWNrZXIuZmluZCgndGZvb3QgLmNsZWFyJylcblx0XHRcdFx0XHRcdC50ZXh0KGNsZWFydHh0KVxuXHRcdFx0XHRcdFx0LmNzcygnZGlzcGxheScsIHRoaXMuby5jbGVhckJ0biA9PT0gdHJ1ZSA/ICd0YWJsZS1jZWxsJyA6ICdub25lJyk7XG5cdFx0XHR0aGlzLnBpY2tlci5maW5kKCd0aGVhZCAuZGF0ZXBpY2tlci10aXRsZScpXG5cdFx0XHRcdFx0XHQudGV4dCh0aGlzLm8udGl0bGUpXG5cdFx0XHRcdFx0XHQuY3NzKCdkaXNwbGF5JywgdHlwZW9mIHRoaXMuby50aXRsZSA9PT0gJ3N0cmluZycgJiYgdGhpcy5vLnRpdGxlICE9PSAnJyA/ICd0YWJsZS1jZWxsJyA6ICdub25lJyk7XG5cdFx0XHR0aGlzLnVwZGF0ZU5hdkFycm93cygpO1xuXHRcdFx0dGhpcy5maWxsTW9udGhzKCk7XG5cdFx0XHR2YXIgcHJldk1vbnRoID0gVVRDRGF0ZSh5ZWFyLCBtb250aCwgMCksXG5cdFx0XHRcdGRheSA9IHByZXZNb250aC5nZXRVVENEYXRlKCk7XG5cdFx0XHRwcmV2TW9udGguc2V0VVRDRGF0ZShkYXkgLSAocHJldk1vbnRoLmdldFVUQ0RheSgpIC0gdGhpcy5vLndlZWtTdGFydCArIDcpJTcpO1xuXHRcdFx0dmFyIG5leHRNb250aCA9IG5ldyBEYXRlKHByZXZNb250aCk7XG5cdFx0XHRpZiAocHJldk1vbnRoLmdldFVUQ0Z1bGxZZWFyKCkgPCAxMDApe1xuICAgICAgICBuZXh0TW9udGguc2V0VVRDRnVsbFllYXIocHJldk1vbnRoLmdldFVUQ0Z1bGxZZWFyKCkpO1xuICAgICAgfVxuXHRcdFx0bmV4dE1vbnRoLnNldFVUQ0RhdGUobmV4dE1vbnRoLmdldFVUQ0RhdGUoKSArIDQyKTtcblx0XHRcdG5leHRNb250aCA9IG5leHRNb250aC52YWx1ZU9mKCk7XG5cdFx0XHR2YXIgaHRtbCA9IFtdO1xuXHRcdFx0dmFyIHdlZWtEYXksIGNsc05hbWU7XG5cdFx0XHR3aGlsZSAocHJldk1vbnRoLnZhbHVlT2YoKSA8IG5leHRNb250aCl7XG5cdFx0XHRcdHdlZWtEYXkgPSBwcmV2TW9udGguZ2V0VVRDRGF5KCk7XG5cdFx0XHRcdGlmICh3ZWVrRGF5ID09PSB0aGlzLm8ud2Vla1N0YXJ0KXtcblx0XHRcdFx0XHRodG1sLnB1c2goJzx0cj4nKTtcblx0XHRcdFx0XHRpZiAodGhpcy5vLmNhbGVuZGFyV2Vla3Mpe1xuXHRcdFx0XHRcdFx0Ly8gSVNPIDg2MDE6IEZpcnN0IHdlZWsgY29udGFpbnMgZmlyc3QgdGh1cnNkYXkuXG5cdFx0XHRcdFx0XHQvLyBJU08gYWxzbyBzdGF0ZXMgd2VlayBzdGFydHMgb24gTW9uZGF5LCBidXQgd2UgY2FuIGJlIG1vcmUgYWJzdHJhY3QgaGVyZS5cblx0XHRcdFx0XHRcdHZhclxuXHRcdFx0XHRcdFx0XHQvLyBTdGFydCBvZiBjdXJyZW50IHdlZWs6IGJhc2VkIG9uIHdlZWtzdGFydC9jdXJyZW50IGRhdGVcblx0XHRcdFx0XHRcdFx0d3MgPSBuZXcgRGF0ZSgrcHJldk1vbnRoICsgKHRoaXMuby53ZWVrU3RhcnQgLSB3ZWVrRGF5IC0gNykgJSA3ICogODY0ZTUpLFxuXHRcdFx0XHRcdFx0XHQvLyBUaHVyc2RheSBvZiB0aGlzIHdlZWtcblx0XHRcdFx0XHRcdFx0dGggPSBuZXcgRGF0ZShOdW1iZXIod3MpICsgKDcgKyA0IC0gd3MuZ2V0VVRDRGF5KCkpICUgNyAqIDg2NGU1KSxcblx0XHRcdFx0XHRcdFx0Ly8gRmlyc3QgVGh1cnNkYXkgb2YgeWVhciwgeWVhciBmcm9tIHRodXJzZGF5XG5cdFx0XHRcdFx0XHRcdHl0aCA9IG5ldyBEYXRlKE51bWJlcih5dGggPSBVVENEYXRlKHRoLmdldFVUQ0Z1bGxZZWFyKCksIDAsIDEpKSArICg3ICsgNCAtIHl0aC5nZXRVVENEYXkoKSkgJSA3ICogODY0ZTUpLFxuXHRcdFx0XHRcdFx0XHQvLyBDYWxlbmRhciB3ZWVrOiBtcyBiZXR3ZWVuIHRodXJzZGF5cywgZGl2IG1zIHBlciBkYXksIGRpdiA3IGRheXNcblx0XHRcdFx0XHRcdFx0Y2FsV2VlayA9ICh0aCAtIHl0aCkgLyA4NjRlNSAvIDcgKyAxO1xuXHRcdFx0XHRcdFx0aHRtbC5wdXNoKCc8dGQgY2xhc3M9XCJjd1wiPicrIGNhbFdlZWsgKyc8L3RkPicpO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0fVxuXHRcdFx0XHRjbHNOYW1lID0gdGhpcy5nZXRDbGFzc05hbWVzKHByZXZNb250aCk7XG5cdFx0XHRcdGNsc05hbWUucHVzaCgnZGF5Jyk7XG5cblx0XHRcdFx0dmFyIGNvbnRlbnQgPSBwcmV2TW9udGguZ2V0VVRDRGF0ZSgpO1xuXG5cdFx0XHRcdGlmICh0aGlzLm8uYmVmb3JlU2hvd0RheSAhPT0gJC5ub29wKXtcblx0XHRcdFx0XHRiZWZvcmUgPSB0aGlzLm8uYmVmb3JlU2hvd0RheSh0aGlzLl91dGNfdG9fbG9jYWwocHJldk1vbnRoKSk7XG5cdFx0XHRcdFx0aWYgKGJlZm9yZSA9PT0gdW5kZWZpbmVkKVxuXHRcdFx0XHRcdFx0YmVmb3JlID0ge307XG5cdFx0XHRcdFx0ZWxzZSBpZiAodHlwZW9mIGJlZm9yZSA9PT0gJ2Jvb2xlYW4nKVxuXHRcdFx0XHRcdFx0YmVmb3JlID0ge2VuYWJsZWQ6IGJlZm9yZX07XG5cdFx0XHRcdFx0ZWxzZSBpZiAodHlwZW9mIGJlZm9yZSA9PT0gJ3N0cmluZycpXG5cdFx0XHRcdFx0XHRiZWZvcmUgPSB7Y2xhc3NlczogYmVmb3JlfTtcblx0XHRcdFx0XHRpZiAoYmVmb3JlLmVuYWJsZWQgPT09IGZhbHNlKVxuXHRcdFx0XHRcdFx0Y2xzTmFtZS5wdXNoKCdkaXNhYmxlZCcpO1xuXHRcdFx0XHRcdGlmIChiZWZvcmUuY2xhc3Nlcylcblx0XHRcdFx0XHRcdGNsc05hbWUgPSBjbHNOYW1lLmNvbmNhdChiZWZvcmUuY2xhc3Nlcy5zcGxpdCgvXFxzKy8pKTtcblx0XHRcdFx0XHRpZiAoYmVmb3JlLnRvb2x0aXApXG5cdFx0XHRcdFx0XHR0b29sdGlwID0gYmVmb3JlLnRvb2x0aXA7XG5cdFx0XHRcdFx0aWYgKGJlZm9yZS5jb250ZW50KVxuXHRcdFx0XHRcdFx0Y29udGVudCA9IGJlZm9yZS5jb250ZW50O1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0Ly9DaGVjayBpZiB1bmlxdWVTb3J0IGV4aXN0cyAoc3VwcG9ydGVkIGJ5IGpxdWVyeSA+PTEuMTIgYW5kID49Mi4yKVxuXHRcdFx0XHQvL0ZhbGxiYWNrIHRvIHVuaXF1ZSBmdW5jdGlvbiBmb3Igb2xkZXIganF1ZXJ5IHZlcnNpb25zXG5cdFx0XHRcdGlmICgkLmlzRnVuY3Rpb24oJC51bmlxdWVTb3J0KSkge1xuXHRcdFx0XHRcdGNsc05hbWUgPSAkLnVuaXF1ZVNvcnQoY2xzTmFtZSk7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0Y2xzTmFtZSA9ICQudW5pcXVlKGNsc05hbWUpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0aHRtbC5wdXNoKCc8dGQgY2xhc3M9XCInK2Nsc05hbWUuam9pbignICcpKydcIicgKyAodG9vbHRpcCA/ICcgdGl0bGU9XCInK3Rvb2x0aXArJ1wiJyA6ICcnKSArICcgZGF0YS1kYXRlPVwiJyArIHByZXZNb250aC5nZXRUaW1lKCkudG9TdHJpbmcoKSArICdcIj4nICsgY29udGVudCArICc8L3RkPicpO1xuXHRcdFx0XHR0b29sdGlwID0gbnVsbDtcblx0XHRcdFx0aWYgKHdlZWtEYXkgPT09IHRoaXMuby53ZWVrRW5kKXtcblx0XHRcdFx0XHRodG1sLnB1c2goJzwvdHI+Jyk7XG5cdFx0XHRcdH1cblx0XHRcdFx0cHJldk1vbnRoLnNldFVUQ0RhdGUocHJldk1vbnRoLmdldFVUQ0RhdGUoKSArIDEpO1xuXHRcdFx0fVxuXHRcdFx0dGhpcy5waWNrZXIuZmluZCgnLmRhdGVwaWNrZXItZGF5cyB0Ym9keScpLmh0bWwoaHRtbC5qb2luKCcnKSk7XG5cblx0XHRcdHZhciBtb250aHNUaXRsZSA9IGRhdGVzW3RoaXMuby5sYW5ndWFnZV0ubW9udGhzVGl0bGUgfHwgZGF0ZXNbJ2VuJ10ubW9udGhzVGl0bGUgfHwgJ01vbnRocyc7XG5cdFx0XHR2YXIgbW9udGhzID0gdGhpcy5waWNrZXIuZmluZCgnLmRhdGVwaWNrZXItbW9udGhzJylcblx0XHRcdFx0XHRcdC5maW5kKCcuZGF0ZXBpY2tlci1zd2l0Y2gnKVxuXHRcdFx0XHRcdFx0XHQudGV4dCh0aGlzLm8ubWF4Vmlld01vZGUgPCAyID8gbW9udGhzVGl0bGUgOiB5ZWFyKVxuXHRcdFx0XHRcdFx0XHQuZW5kKClcblx0XHRcdFx0XHRcdC5maW5kKCd0Ym9keSBzcGFuJykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xuXG5cdFx0XHQkLmVhY2godGhpcy5kYXRlcywgZnVuY3Rpb24oaSwgZCl7XG5cdFx0XHRcdGlmIChkLmdldFVUQ0Z1bGxZZWFyKCkgPT09IHllYXIpXG5cdFx0XHRcdFx0bW9udGhzLmVxKGQuZ2V0VVRDTW9udGgoKSkuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xuXHRcdFx0fSk7XG5cblx0XHRcdGlmICh5ZWFyIDwgc3RhcnRZZWFyIHx8IHllYXIgPiBlbmRZZWFyKXtcblx0XHRcdFx0bW9udGhzLmFkZENsYXNzKCdkaXNhYmxlZCcpO1xuXHRcdFx0fVxuXHRcdFx0aWYgKHllYXIgPT09IHN0YXJ0WWVhcil7XG5cdFx0XHRcdG1vbnRocy5zbGljZSgwLCBzdGFydE1vbnRoKS5hZGRDbGFzcygnZGlzYWJsZWQnKTtcblx0XHRcdH1cblx0XHRcdGlmICh5ZWFyID09PSBlbmRZZWFyKXtcblx0XHRcdFx0bW9udGhzLnNsaWNlKGVuZE1vbnRoKzEpLmFkZENsYXNzKCdkaXNhYmxlZCcpO1xuXHRcdFx0fVxuXG5cdFx0XHRpZiAodGhpcy5vLmJlZm9yZVNob3dNb250aCAhPT0gJC5ub29wKXtcblx0XHRcdFx0dmFyIHRoYXQgPSB0aGlzO1xuXHRcdFx0XHQkLmVhY2gobW9udGhzLCBmdW5jdGlvbihpLCBtb250aCl7XG4gICAgICAgICAgdmFyIG1vRGF0ZSA9IG5ldyBEYXRlKHllYXIsIGksIDEpO1xuICAgICAgICAgIHZhciBiZWZvcmUgPSB0aGF0Lm8uYmVmb3JlU2hvd01vbnRoKG1vRGF0ZSk7XG5cdFx0XHRcdFx0aWYgKGJlZm9yZSA9PT0gdW5kZWZpbmVkKVxuXHRcdFx0XHRcdFx0YmVmb3JlID0ge307XG5cdFx0XHRcdFx0ZWxzZSBpZiAodHlwZW9mIGJlZm9yZSA9PT0gJ2Jvb2xlYW4nKVxuXHRcdFx0XHRcdFx0YmVmb3JlID0ge2VuYWJsZWQ6IGJlZm9yZX07XG5cdFx0XHRcdFx0ZWxzZSBpZiAodHlwZW9mIGJlZm9yZSA9PT0gJ3N0cmluZycpXG5cdFx0XHRcdFx0XHRiZWZvcmUgPSB7Y2xhc3NlczogYmVmb3JlfTtcblx0XHRcdFx0XHRpZiAoYmVmb3JlLmVuYWJsZWQgPT09IGZhbHNlICYmICEkKG1vbnRoKS5oYXNDbGFzcygnZGlzYWJsZWQnKSlcblx0XHRcdFx0XHQgICAgJChtb250aCkuYWRkQ2xhc3MoJ2Rpc2FibGVkJyk7XG5cdFx0XHRcdFx0aWYgKGJlZm9yZS5jbGFzc2VzKVxuXHRcdFx0XHRcdCAgICAkKG1vbnRoKS5hZGRDbGFzcyhiZWZvcmUuY2xhc3Nlcyk7XG5cdFx0XHRcdFx0aWYgKGJlZm9yZS50b29sdGlwKVxuXHRcdFx0XHRcdCAgICAkKG1vbnRoKS5wcm9wKCd0aXRsZScsIGJlZm9yZS50b29sdGlwKTtcblx0XHRcdFx0fSk7XG5cdFx0XHR9XG5cblx0XHRcdC8vIEdlbmVyYXRpbmcgZGVjYWRlL3llYXJzIHBpY2tlclxuXHRcdFx0dGhpcy5fZmlsbF95ZWFyc1ZpZXcoXG5cdFx0XHRcdCcuZGF0ZXBpY2tlci15ZWFycycsXG5cdFx0XHRcdCd5ZWFyJyxcblx0XHRcdFx0MTAsXG5cdFx0XHRcdHllYXIsXG5cdFx0XHRcdHN0YXJ0WWVhcixcblx0XHRcdFx0ZW5kWWVhcixcblx0XHRcdFx0dGhpcy5vLmJlZm9yZVNob3dZZWFyXG5cdFx0XHQpO1xuXG5cdFx0XHQvLyBHZW5lcmF0aW5nIGNlbnR1cnkvZGVjYWRlcyBwaWNrZXJcblx0XHRcdHRoaXMuX2ZpbGxfeWVhcnNWaWV3KFxuXHRcdFx0XHQnLmRhdGVwaWNrZXItZGVjYWRlcycsXG5cdFx0XHRcdCdkZWNhZGUnLFxuXHRcdFx0XHQxMDAsXG5cdFx0XHRcdHllYXIsXG5cdFx0XHRcdHN0YXJ0WWVhcixcblx0XHRcdFx0ZW5kWWVhcixcblx0XHRcdFx0dGhpcy5vLmJlZm9yZVNob3dEZWNhZGVcblx0XHRcdCk7XG5cblx0XHRcdC8vIEdlbmVyYXRpbmcgbWlsbGVubml1bS9jZW50dXJpZXMgcGlja2VyXG5cdFx0XHR0aGlzLl9maWxsX3llYXJzVmlldyhcblx0XHRcdFx0Jy5kYXRlcGlja2VyLWNlbnR1cmllcycsXG5cdFx0XHRcdCdjZW50dXJ5Jyxcblx0XHRcdFx0MTAwMCxcblx0XHRcdFx0eWVhcixcblx0XHRcdFx0c3RhcnRZZWFyLFxuXHRcdFx0XHRlbmRZZWFyLFxuXHRcdFx0XHR0aGlzLm8uYmVmb3JlU2hvd0NlbnR1cnlcblx0XHRcdCk7XG5cdFx0fSxcblxuXHRcdHVwZGF0ZU5hdkFycm93czogZnVuY3Rpb24oKXtcblx0XHRcdGlmICghdGhpcy5fYWxsb3dfdXBkYXRlKVxuXHRcdFx0XHRyZXR1cm47XG5cblx0XHRcdHZhciBkID0gbmV3IERhdGUodGhpcy52aWV3RGF0ZSksXG5cdFx0XHRcdHllYXIgPSBkLmdldFVUQ0Z1bGxZZWFyKCksXG5cdFx0XHRcdG1vbnRoID0gZC5nZXRVVENNb250aCgpLFxuXHRcdFx0XHRzdGFydFllYXIgPSB0aGlzLm8uc3RhcnREYXRlICE9PSAtSW5maW5pdHkgPyB0aGlzLm8uc3RhcnREYXRlLmdldFVUQ0Z1bGxZZWFyKCkgOiAtSW5maW5pdHksXG5cdFx0XHRcdHN0YXJ0TW9udGggPSB0aGlzLm8uc3RhcnREYXRlICE9PSAtSW5maW5pdHkgPyB0aGlzLm8uc3RhcnREYXRlLmdldFVUQ01vbnRoKCkgOiAtSW5maW5pdHksXG5cdFx0XHRcdGVuZFllYXIgPSB0aGlzLm8uZW5kRGF0ZSAhPT0gSW5maW5pdHkgPyB0aGlzLm8uZW5kRGF0ZS5nZXRVVENGdWxsWWVhcigpIDogSW5maW5pdHksXG5cdFx0XHRcdGVuZE1vbnRoID0gdGhpcy5vLmVuZERhdGUgIT09IEluZmluaXR5ID8gdGhpcy5vLmVuZERhdGUuZ2V0VVRDTW9udGgoKSA6IEluZmluaXR5LFxuXHRcdFx0XHRwcmV2SXNEaXNhYmxlZCxcblx0XHRcdFx0bmV4dElzRGlzYWJsZWQsXG5cdFx0XHRcdGZhY3RvciA9IDE7XG5cdFx0XHRzd2l0Y2ggKHRoaXMudmlld01vZGUpe1xuXHRcdFx0XHRjYXNlIDQ6XG5cdFx0XHRcdFx0ZmFjdG9yICo9IDEwO1xuXHRcdFx0XHRcdC8qIGZhbGxzIHRocm91Z2ggKi9cblx0XHRcdFx0Y2FzZSAzOlxuXHRcdFx0XHRcdGZhY3RvciAqPSAxMDtcblx0XHRcdFx0XHQvKiBmYWxscyB0aHJvdWdoICovXG5cdFx0XHRcdGNhc2UgMjpcblx0XHRcdFx0XHRmYWN0b3IgKj0gMTA7XG5cdFx0XHRcdFx0LyogZmFsbHMgdGhyb3VnaCAqL1xuXHRcdFx0XHRjYXNlIDE6XG5cdFx0XHRcdFx0cHJldklzRGlzYWJsZWQgPSBNYXRoLmZsb29yKHllYXIgLyBmYWN0b3IpICogZmFjdG9yIDw9IHN0YXJ0WWVhcjtcblx0XHRcdFx0XHRuZXh0SXNEaXNhYmxlZCA9IE1hdGguZmxvb3IoeWVhciAvIGZhY3RvcikgKiBmYWN0b3IgKyBmYWN0b3IgPiBlbmRZZWFyO1xuXHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0XHRjYXNlIDA6XG5cdFx0XHRcdFx0cHJldklzRGlzYWJsZWQgPSB5ZWFyIDw9IHN0YXJ0WWVhciAmJiBtb250aCA8PSBzdGFydE1vbnRoO1xuXHRcdFx0XHRcdG5leHRJc0Rpc2FibGVkID0geWVhciA+PSBlbmRZZWFyICYmIG1vbnRoID49IGVuZE1vbnRoO1xuXHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0fVxuXG5cdFx0XHR0aGlzLnBpY2tlci5maW5kKCcucHJldicpLnRvZ2dsZUNsYXNzKCdkaXNhYmxlZCcsIHByZXZJc0Rpc2FibGVkKTtcblx0XHRcdHRoaXMucGlja2VyLmZpbmQoJy5uZXh0JykudG9nZ2xlQ2xhc3MoJ2Rpc2FibGVkJywgbmV4dElzRGlzYWJsZWQpO1xuXHRcdH0sXG5cblx0XHRjbGljazogZnVuY3Rpb24oZSl7XG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XG5cdFx0XHRlLnN0b3BQcm9wYWdhdGlvbigpO1xuXG5cdFx0XHR2YXIgdGFyZ2V0LCBkaXIsIGRheSwgeWVhciwgbW9udGg7XG5cdFx0XHR0YXJnZXQgPSAkKGUudGFyZ2V0KTtcblxuXHRcdFx0Ly8gQ2xpY2tlZCBvbiB0aGUgc3dpdGNoXG5cdFx0XHRpZiAodGFyZ2V0Lmhhc0NsYXNzKCdkYXRlcGlja2VyLXN3aXRjaCcpICYmIHRoaXMudmlld01vZGUgIT09IHRoaXMuby5tYXhWaWV3TW9kZSl7XG5cdFx0XHRcdHRoaXMuc2V0Vmlld01vZGUodGhpcy52aWV3TW9kZSArIDEpO1xuXHRcdFx0fVxuXG5cdFx0XHQvLyBDbGlja2VkIG9uIHRvZGF5IGJ1dHRvblxuXHRcdFx0aWYgKHRhcmdldC5oYXNDbGFzcygndG9kYXknKSAmJiAhdGFyZ2V0Lmhhc0NsYXNzKCdkYXknKSl7XG5cdFx0XHRcdHRoaXMuc2V0Vmlld01vZGUoMCk7XG5cdFx0XHRcdHRoaXMuX3NldERhdGUoVVRDVG9kYXkoKSwgdGhpcy5vLnRvZGF5QnRuID09PSAnbGlua2VkJyA/IG51bGwgOiAndmlldycpO1xuXHRcdFx0fVxuXG5cdFx0XHQvLyBDbGlja2VkIG9uIGNsZWFyIGJ1dHRvblxuXHRcdFx0aWYgKHRhcmdldC5oYXNDbGFzcygnY2xlYXInKSl7XG5cdFx0XHRcdHRoaXMuY2xlYXJEYXRlcygpO1xuXHRcdFx0fVxuXG5cdFx0XHRpZiAoIXRhcmdldC5oYXNDbGFzcygnZGlzYWJsZWQnKSl7XG5cdFx0XHRcdC8vIENsaWNrZWQgb24gYSBtb250aCwgeWVhciwgZGVjYWRlLCBjZW50dXJ5XG5cdFx0XHRcdGlmICh0YXJnZXQuaGFzQ2xhc3MoJ21vbnRoJylcblx0XHRcdFx0XHRcdHx8IHRhcmdldC5oYXNDbGFzcygneWVhcicpXG5cdFx0XHRcdFx0XHR8fCB0YXJnZXQuaGFzQ2xhc3MoJ2RlY2FkZScpXG5cdFx0XHRcdFx0XHR8fCB0YXJnZXQuaGFzQ2xhc3MoJ2NlbnR1cnknKSkge1xuXHRcdFx0XHRcdHRoaXMudmlld0RhdGUuc2V0VVRDRGF0ZSgxKTtcblxuXHRcdFx0XHRcdGRheSA9IDE7XG5cdFx0XHRcdFx0aWYgKHRoaXMudmlld01vZGUgPT09IDEpe1xuXHRcdFx0XHRcdFx0bW9udGggPSB0YXJnZXQucGFyZW50KCkuZmluZCgnc3BhbicpLmluZGV4KHRhcmdldCk7XG5cdFx0XHRcdFx0XHR5ZWFyID0gdGhpcy52aWV3RGF0ZS5nZXRVVENGdWxsWWVhcigpO1xuXHRcdFx0XHRcdFx0dGhpcy52aWV3RGF0ZS5zZXRVVENNb250aChtb250aCk7XG5cdFx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRcdG1vbnRoID0gMDtcblx0XHRcdFx0XHRcdHllYXIgPSBOdW1iZXIodGFyZ2V0LnRleHQoKSk7XG5cdFx0XHRcdFx0XHR0aGlzLnZpZXdEYXRlLnNldFVUQ0Z1bGxZZWFyKHllYXIpO1xuXHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdHRoaXMuX3RyaWdnZXIoRFBHbG9iYWwudmlld01vZGVzW3RoaXMudmlld01vZGUgLSAxXS5lLCB0aGlzLnZpZXdEYXRlKTtcblxuXHRcdFx0XHRcdGlmICh0aGlzLnZpZXdNb2RlID09PSB0aGlzLm8ubWluVmlld01vZGUpe1xuXHRcdFx0XHRcdFx0dGhpcy5fc2V0RGF0ZShVVENEYXRlKHllYXIsIG1vbnRoLCBkYXkpKTtcblx0XHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdFx0dGhpcy5zZXRWaWV3TW9kZSh0aGlzLnZpZXdNb2RlIC0gMSk7XG5cdFx0XHRcdFx0XHR0aGlzLmZpbGwoKTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH1cblx0XHRcdH1cblxuXHRcdFx0aWYgKHRoaXMucGlja2VyLmlzKCc6dmlzaWJsZScpICYmIHRoaXMuX2ZvY3VzZWRfZnJvbSl7XG5cdFx0XHRcdHRoaXMuX2ZvY3VzZWRfZnJvbS5mb2N1cygpO1xuXHRcdFx0fVxuXHRcdFx0ZGVsZXRlIHRoaXMuX2ZvY3VzZWRfZnJvbTtcblx0XHR9LFxuXG5cdFx0ZGF5Q2VsbENsaWNrOiBmdW5jdGlvbihlKXtcblx0XHRcdHZhciAkdGFyZ2V0ID0gJChlLmN1cnJlbnRUYXJnZXQpO1xuXHRcdFx0dmFyIHRpbWVzdGFtcCA9ICR0YXJnZXQuZGF0YSgnZGF0ZScpO1xuXHRcdFx0dmFyIGRhdGUgPSBuZXcgRGF0ZSh0aW1lc3RhbXApO1xuXG5cdFx0XHRpZiAodGhpcy5vLnVwZGF0ZVZpZXdEYXRlKSB7XG5cdFx0XHRcdGlmIChkYXRlLmdldFVUQ0Z1bGxZZWFyKCkgIT09IHRoaXMudmlld0RhdGUuZ2V0VVRDRnVsbFllYXIoKSkge1xuXHRcdFx0XHRcdHRoaXMuX3RyaWdnZXIoJ2NoYW5nZVllYXInLCB0aGlzLnZpZXdEYXRlKTtcblx0XHRcdFx0fVxuXG5cdFx0XHRcdGlmIChkYXRlLmdldFVUQ01vbnRoKCkgIT09IHRoaXMudmlld0RhdGUuZ2V0VVRDTW9udGgoKSkge1xuXHRcdFx0XHRcdHRoaXMuX3RyaWdnZXIoJ2NoYW5nZU1vbnRoJywgdGhpcy52aWV3RGF0ZSk7XG5cdFx0XHRcdH1cblx0XHRcdH1cblx0XHRcdHRoaXMuX3NldERhdGUoZGF0ZSk7XG5cdFx0fSxcblxuXHRcdC8vIENsaWNrZWQgb24gcHJldiBvciBuZXh0XG5cdFx0bmF2QXJyb3dzQ2xpY2s6IGZ1bmN0aW9uKGUpe1xuXHRcdFx0dmFyICR0YXJnZXQgPSAkKGUuY3VycmVudFRhcmdldCk7XG5cdFx0XHR2YXIgZGlyID0gJHRhcmdldC5oYXNDbGFzcygncHJldicpID8gLTEgOiAxO1xuXHRcdFx0aWYgKHRoaXMudmlld01vZGUgIT09IDApe1xuXHRcdFx0XHRkaXIgKj0gRFBHbG9iYWwudmlld01vZGVzW3RoaXMudmlld01vZGVdLm5hdlN0ZXAgKiAxMjtcblx0XHRcdH1cblx0XHRcdHRoaXMudmlld0RhdGUgPSB0aGlzLm1vdmVNb250aCh0aGlzLnZpZXdEYXRlLCBkaXIpO1xuXHRcdFx0dGhpcy5fdHJpZ2dlcihEUEdsb2JhbC52aWV3TW9kZXNbdGhpcy52aWV3TW9kZV0uZSwgdGhpcy52aWV3RGF0ZSk7XG5cdFx0XHR0aGlzLmZpbGwoKTtcblx0XHR9LFxuXG5cdFx0X3RvZ2dsZV9tdWx0aWRhdGU6IGZ1bmN0aW9uKGRhdGUpe1xuXHRcdFx0dmFyIGl4ID0gdGhpcy5kYXRlcy5jb250YWlucyhkYXRlKTtcblx0XHRcdGlmICghZGF0ZSl7XG5cdFx0XHRcdHRoaXMuZGF0ZXMuY2xlYXIoKTtcblx0XHRcdH1cblxuXHRcdFx0aWYgKGl4ICE9PSAtMSl7XG5cdFx0XHRcdGlmICh0aGlzLm8ubXVsdGlkYXRlID09PSB0cnVlIHx8IHRoaXMuby5tdWx0aWRhdGUgPiAxIHx8IHRoaXMuby50b2dnbGVBY3RpdmUpe1xuXHRcdFx0XHRcdHRoaXMuZGF0ZXMucmVtb3ZlKGl4KTtcblx0XHRcdFx0fVxuXHRcdFx0fSBlbHNlIGlmICh0aGlzLm8ubXVsdGlkYXRlID09PSBmYWxzZSkge1xuXHRcdFx0XHR0aGlzLmRhdGVzLmNsZWFyKCk7XG5cdFx0XHRcdHRoaXMuZGF0ZXMucHVzaChkYXRlKTtcblx0XHRcdH1cblx0XHRcdGVsc2Uge1xuXHRcdFx0XHR0aGlzLmRhdGVzLnB1c2goZGF0ZSk7XG5cdFx0XHR9XG5cblx0XHRcdGlmICh0eXBlb2YgdGhpcy5vLm11bHRpZGF0ZSA9PT0gJ251bWJlcicpXG5cdFx0XHRcdHdoaWxlICh0aGlzLmRhdGVzLmxlbmd0aCA+IHRoaXMuby5tdWx0aWRhdGUpXG5cdFx0XHRcdFx0dGhpcy5kYXRlcy5yZW1vdmUoMCk7XG5cdFx0fSxcblxuXHRcdF9zZXREYXRlOiBmdW5jdGlvbihkYXRlLCB3aGljaCl7XG5cdFx0XHRpZiAoIXdoaWNoIHx8IHdoaWNoID09PSAnZGF0ZScpXG5cdFx0XHRcdHRoaXMuX3RvZ2dsZV9tdWx0aWRhdGUoZGF0ZSAmJiBuZXcgRGF0ZShkYXRlKSk7XG5cdFx0XHRpZiAoKCF3aGljaCAmJiB0aGlzLm8udXBkYXRlVmlld0RhdGUpIHx8IHdoaWNoID09PSAndmlldycpXG5cdFx0XHRcdHRoaXMudmlld0RhdGUgPSBkYXRlICYmIG5ldyBEYXRlKGRhdGUpO1xuXG5cdFx0XHR0aGlzLmZpbGwoKTtcblx0XHRcdHRoaXMuc2V0VmFsdWUoKTtcblx0XHRcdGlmICghd2hpY2ggfHwgd2hpY2ggIT09ICd2aWV3Jykge1xuXHRcdFx0XHR0aGlzLl90cmlnZ2VyKCdjaGFuZ2VEYXRlJyk7XG5cdFx0XHR9XG5cdFx0XHR0aGlzLmlucHV0RmllbGQudHJpZ2dlcignY2hhbmdlJyk7XG5cdFx0XHRpZiAodGhpcy5vLmF1dG9jbG9zZSAmJiAoIXdoaWNoIHx8IHdoaWNoID09PSAnZGF0ZScpKXtcblx0XHRcdFx0dGhpcy5oaWRlKCk7XG5cdFx0XHR9XG5cdFx0fSxcblxuXHRcdG1vdmVEYXk6IGZ1bmN0aW9uKGRhdGUsIGRpcil7XG5cdFx0XHR2YXIgbmV3RGF0ZSA9IG5ldyBEYXRlKGRhdGUpO1xuXHRcdFx0bmV3RGF0ZS5zZXRVVENEYXRlKGRhdGUuZ2V0VVRDRGF0ZSgpICsgZGlyKTtcblxuXHRcdFx0cmV0dXJuIG5ld0RhdGU7XG5cdFx0fSxcblxuXHRcdG1vdmVXZWVrOiBmdW5jdGlvbihkYXRlLCBkaXIpe1xuXHRcdFx0cmV0dXJuIHRoaXMubW92ZURheShkYXRlLCBkaXIgKiA3KTtcblx0XHR9LFxuXG5cdFx0bW92ZU1vbnRoOiBmdW5jdGlvbihkYXRlLCBkaXIpe1xuXHRcdFx0aWYgKCFpc1ZhbGlkRGF0ZShkYXRlKSlcblx0XHRcdFx0cmV0dXJuIHRoaXMuby5kZWZhdWx0Vmlld0RhdGU7XG5cdFx0XHRpZiAoIWRpcilcblx0XHRcdFx0cmV0dXJuIGRhdGU7XG5cdFx0XHR2YXIgbmV3X2RhdGUgPSBuZXcgRGF0ZShkYXRlLnZhbHVlT2YoKSksXG5cdFx0XHRcdGRheSA9IG5ld19kYXRlLmdldFVUQ0RhdGUoKSxcblx0XHRcdFx0bW9udGggPSBuZXdfZGF0ZS5nZXRVVENNb250aCgpLFxuXHRcdFx0XHRtYWcgPSBNYXRoLmFicyhkaXIpLFxuXHRcdFx0XHRuZXdfbW9udGgsIHRlc3Q7XG5cdFx0XHRkaXIgPSBkaXIgPiAwID8gMSA6IC0xO1xuXHRcdFx0aWYgKG1hZyA9PT0gMSl7XG5cdFx0XHRcdHRlc3QgPSBkaXIgPT09IC0xXG5cdFx0XHRcdFx0Ly8gSWYgZ29pbmcgYmFjayBvbmUgbW9udGgsIG1ha2Ugc3VyZSBtb250aCBpcyBub3QgY3VycmVudCBtb250aFxuXHRcdFx0XHRcdC8vIChlZywgTWFyIDMxIC0+IEZlYiAzMSA9PSBGZWIgMjgsIG5vdCBNYXIgMDIpXG5cdFx0XHRcdFx0PyBmdW5jdGlvbigpe1xuXHRcdFx0XHRcdFx0cmV0dXJuIG5ld19kYXRlLmdldFVUQ01vbnRoKCkgPT09IG1vbnRoO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHQvLyBJZiBnb2luZyBmb3J3YXJkIG9uZSBtb250aCwgbWFrZSBzdXJlIG1vbnRoIGlzIGFzIGV4cGVjdGVkXG5cdFx0XHRcdFx0Ly8gKGVnLCBKYW4gMzEgLT4gRmViIDMxID09IEZlYiAyOCwgbm90IE1hciAwMilcblx0XHRcdFx0XHQ6IGZ1bmN0aW9uKCl7XG5cdFx0XHRcdFx0XHRyZXR1cm4gbmV3X2RhdGUuZ2V0VVRDTW9udGgoKSAhPT0gbmV3X21vbnRoO1xuXHRcdFx0XHRcdH07XG5cdFx0XHRcdG5ld19tb250aCA9IG1vbnRoICsgZGlyO1xuXHRcdFx0XHRuZXdfZGF0ZS5zZXRVVENNb250aChuZXdfbW9udGgpO1xuXHRcdFx0XHQvLyBEZWMgLT4gSmFuICgxMikgb3IgSmFuIC0+IERlYyAoLTEpIC0tIGxpbWl0IGV4cGVjdGVkIGRhdGUgdG8gMC0xMVxuXHRcdFx0XHRuZXdfbW9udGggPSAobmV3X21vbnRoICsgMTIpICUgMTI7XG5cdFx0XHR9XG5cdFx0XHRlbHNlIHtcblx0XHRcdFx0Ly8gRm9yIG1hZ25pdHVkZXMgPjEsIG1vdmUgb25lIG1vbnRoIGF0IGEgdGltZS4uLlxuXHRcdFx0XHRmb3IgKHZhciBpPTA7IGkgPCBtYWc7IGkrKylcblx0XHRcdFx0XHQvLyAuLi53aGljaCBtaWdodCBkZWNyZWFzZSB0aGUgZGF5IChlZywgSmFuIDMxIHRvIEZlYiAyOCwgZXRjKS4uLlxuXHRcdFx0XHRcdG5ld19kYXRlID0gdGhpcy5tb3ZlTW9udGgobmV3X2RhdGUsIGRpcik7XG5cdFx0XHRcdC8vIC4uLnRoZW4gcmVzZXQgdGhlIGRheSwga2VlcGluZyBpdCBpbiB0aGUgbmV3IG1vbnRoXG5cdFx0XHRcdG5ld19tb250aCA9IG5ld19kYXRlLmdldFVUQ01vbnRoKCk7XG5cdFx0XHRcdG5ld19kYXRlLnNldFVUQ0RhdGUoZGF5KTtcblx0XHRcdFx0dGVzdCA9IGZ1bmN0aW9uKCl7XG5cdFx0XHRcdFx0cmV0dXJuIG5ld19tb250aCAhPT0gbmV3X2RhdGUuZ2V0VVRDTW9udGgoKTtcblx0XHRcdFx0fTtcblx0XHRcdH1cblx0XHRcdC8vIENvbW1vbiBkYXRlLXJlc2V0dGluZyBsb29wIC0tIGlmIGRhdGUgaXMgYmV5b25kIGVuZCBvZiBtb250aCwgbWFrZSBpdFxuXHRcdFx0Ly8gZW5kIG9mIG1vbnRoXG5cdFx0XHR3aGlsZSAodGVzdCgpKXtcblx0XHRcdFx0bmV3X2RhdGUuc2V0VVRDRGF0ZSgtLWRheSk7XG5cdFx0XHRcdG5ld19kYXRlLnNldFVUQ01vbnRoKG5ld19tb250aCk7XG5cdFx0XHR9XG5cdFx0XHRyZXR1cm4gbmV3X2RhdGU7XG5cdFx0fSxcblxuXHRcdG1vdmVZZWFyOiBmdW5jdGlvbihkYXRlLCBkaXIpe1xuXHRcdFx0cmV0dXJuIHRoaXMubW92ZU1vbnRoKGRhdGUsIGRpcioxMik7XG5cdFx0fSxcblxuXHRcdG1vdmVBdmFpbGFibGVEYXRlOiBmdW5jdGlvbihkYXRlLCBkaXIsIGZuKXtcblx0XHRcdGRvIHtcblx0XHRcdFx0ZGF0ZSA9IHRoaXNbZm5dKGRhdGUsIGRpcik7XG5cblx0XHRcdFx0aWYgKCF0aGlzLmRhdGVXaXRoaW5SYW5nZShkYXRlKSlcblx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XG5cblx0XHRcdFx0Zm4gPSAnbW92ZURheSc7XG5cdFx0XHR9XG5cdFx0XHR3aGlsZSAodGhpcy5kYXRlSXNEaXNhYmxlZChkYXRlKSk7XG5cblx0XHRcdHJldHVybiBkYXRlO1xuXHRcdH0sXG5cblx0XHR3ZWVrT2ZEYXRlSXNEaXNhYmxlZDogZnVuY3Rpb24oZGF0ZSl7XG5cdFx0XHRyZXR1cm4gJC5pbkFycmF5KGRhdGUuZ2V0VVRDRGF5KCksIHRoaXMuby5kYXlzT2ZXZWVrRGlzYWJsZWQpICE9PSAtMTtcblx0XHR9LFxuXG5cdFx0ZGF0ZUlzRGlzYWJsZWQ6IGZ1bmN0aW9uKGRhdGUpe1xuXHRcdFx0cmV0dXJuIChcblx0XHRcdFx0dGhpcy53ZWVrT2ZEYXRlSXNEaXNhYmxlZChkYXRlKSB8fFxuXHRcdFx0XHQkLmdyZXAodGhpcy5vLmRhdGVzRGlzYWJsZWQsIGZ1bmN0aW9uKGQpe1xuXHRcdFx0XHRcdHJldHVybiBpc1VUQ0VxdWFscyhkYXRlLCBkKTtcblx0XHRcdFx0fSkubGVuZ3RoID4gMFxuXHRcdFx0KTtcblx0XHR9LFxuXG5cdFx0ZGF0ZVdpdGhpblJhbmdlOiBmdW5jdGlvbihkYXRlKXtcblx0XHRcdHJldHVybiBkYXRlID49IHRoaXMuby5zdGFydERhdGUgJiYgZGF0ZSA8PSB0aGlzLm8uZW5kRGF0ZTtcblx0XHR9LFxuXG5cdFx0a2V5ZG93bjogZnVuY3Rpb24oZSl7XG5cdFx0XHRpZiAoIXRoaXMucGlja2VyLmlzKCc6dmlzaWJsZScpKXtcblx0XHRcdFx0aWYgKGUua2V5Q29kZSA9PT0gNDAgfHwgZS5rZXlDb2RlID09PSAyNykgeyAvLyBhbGxvdyBkb3duIHRvIHJlLXNob3cgcGlja2VyXG5cdFx0XHRcdFx0dGhpcy5zaG93KCk7XG5cdFx0XHRcdFx0ZS5zdG9wUHJvcGFnYXRpb24oKTtcbiAgICAgICAgfVxuXHRcdFx0XHRyZXR1cm47XG5cdFx0XHR9XG5cdFx0XHR2YXIgZGF0ZUNoYW5nZWQgPSBmYWxzZSxcblx0XHRcdFx0ZGlyLCBuZXdWaWV3RGF0ZSxcblx0XHRcdFx0Zm9jdXNEYXRlID0gdGhpcy5mb2N1c0RhdGUgfHwgdGhpcy52aWV3RGF0ZTtcblx0XHRcdHN3aXRjaCAoZS5rZXlDb2RlKXtcblx0XHRcdFx0Y2FzZSAyNzogLy8gZXNjYXBlXG5cdFx0XHRcdFx0aWYgKHRoaXMuZm9jdXNEYXRlKXtcblx0XHRcdFx0XHRcdHRoaXMuZm9jdXNEYXRlID0gbnVsbDtcblx0XHRcdFx0XHRcdHRoaXMudmlld0RhdGUgPSB0aGlzLmRhdGVzLmdldCgtMSkgfHwgdGhpcy52aWV3RGF0ZTtcblx0XHRcdFx0XHRcdHRoaXMuZmlsbCgpO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRlbHNlXG5cdFx0XHRcdFx0XHR0aGlzLmhpZGUoKTtcblx0XHRcdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XG5cdFx0XHRcdFx0ZS5zdG9wUHJvcGFnYXRpb24oKTtcblx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0Y2FzZSAzNzogLy8gbGVmdFxuXHRcdFx0XHRjYXNlIDM4OiAvLyB1cFxuXHRcdFx0XHRjYXNlIDM5OiAvLyByaWdodFxuXHRcdFx0XHRjYXNlIDQwOiAvLyBkb3duXG5cdFx0XHRcdFx0aWYgKCF0aGlzLm8ua2V5Ym9hcmROYXZpZ2F0aW9uIHx8IHRoaXMuby5kYXlzT2ZXZWVrRGlzYWJsZWQubGVuZ3RoID09PSA3KVxuXHRcdFx0XHRcdFx0YnJlYWs7XG5cdFx0XHRcdFx0ZGlyID0gZS5rZXlDb2RlID09PSAzNyB8fCBlLmtleUNvZGUgPT09IDM4ID8gLTEgOiAxO1xuICAgICAgICAgIGlmICh0aGlzLnZpZXdNb2RlID09PSAwKSB7XG4gIFx0XHRcdFx0XHRpZiAoZS5jdHJsS2V5KXtcbiAgXHRcdFx0XHRcdFx0bmV3Vmlld0RhdGUgPSB0aGlzLm1vdmVBdmFpbGFibGVEYXRlKGZvY3VzRGF0ZSwgZGlyLCAnbW92ZVllYXInKTtcblxuICBcdFx0XHRcdFx0XHRpZiAobmV3Vmlld0RhdGUpXG4gIFx0XHRcdFx0XHRcdFx0dGhpcy5fdHJpZ2dlcignY2hhbmdlWWVhcicsIHRoaXMudmlld0RhdGUpO1xuICBcdFx0XHRcdFx0fSBlbHNlIGlmIChlLnNoaWZ0S2V5KXtcbiAgXHRcdFx0XHRcdFx0bmV3Vmlld0RhdGUgPSB0aGlzLm1vdmVBdmFpbGFibGVEYXRlKGZvY3VzRGF0ZSwgZGlyLCAnbW92ZU1vbnRoJyk7XG5cbiAgXHRcdFx0XHRcdFx0aWYgKG5ld1ZpZXdEYXRlKVxuICBcdFx0XHRcdFx0XHRcdHRoaXMuX3RyaWdnZXIoJ2NoYW5nZU1vbnRoJywgdGhpcy52aWV3RGF0ZSk7XG4gIFx0XHRcdFx0XHR9IGVsc2UgaWYgKGUua2V5Q29kZSA9PT0gMzcgfHwgZS5rZXlDb2RlID09PSAzOSl7XG4gIFx0XHRcdFx0XHRcdG5ld1ZpZXdEYXRlID0gdGhpcy5tb3ZlQXZhaWxhYmxlRGF0ZShmb2N1c0RhdGUsIGRpciwgJ21vdmVEYXknKTtcbiAgXHRcdFx0XHRcdH0gZWxzZSBpZiAoIXRoaXMud2Vla09mRGF0ZUlzRGlzYWJsZWQoZm9jdXNEYXRlKSl7XG4gIFx0XHRcdFx0XHRcdG5ld1ZpZXdEYXRlID0gdGhpcy5tb3ZlQXZhaWxhYmxlRGF0ZShmb2N1c0RhdGUsIGRpciwgJ21vdmVXZWVrJyk7XG4gIFx0XHRcdFx0XHR9XG4gICAgICAgICAgfSBlbHNlIGlmICh0aGlzLnZpZXdNb2RlID09PSAxKSB7XG4gICAgICAgICAgICBpZiAoZS5rZXlDb2RlID09PSAzOCB8fCBlLmtleUNvZGUgPT09IDQwKSB7XG4gICAgICAgICAgICAgIGRpciA9IGRpciAqIDQ7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBuZXdWaWV3RGF0ZSA9IHRoaXMubW92ZUF2YWlsYWJsZURhdGUoZm9jdXNEYXRlLCBkaXIsICdtb3ZlTW9udGgnKTtcbiAgICAgICAgICB9IGVsc2UgaWYgKHRoaXMudmlld01vZGUgPT09IDIpIHtcbiAgICAgICAgICAgIGlmIChlLmtleUNvZGUgPT09IDM4IHx8IGUua2V5Q29kZSA9PT0gNDApIHtcbiAgICAgICAgICAgICAgZGlyID0gZGlyICogNDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIG5ld1ZpZXdEYXRlID0gdGhpcy5tb3ZlQXZhaWxhYmxlRGF0ZShmb2N1c0RhdGUsIGRpciwgJ21vdmVZZWFyJyk7XG4gICAgICAgICAgfVxuXHRcdFx0XHRcdGlmIChuZXdWaWV3RGF0ZSl7XG5cdFx0XHRcdFx0XHR0aGlzLmZvY3VzRGF0ZSA9IHRoaXMudmlld0RhdGUgPSBuZXdWaWV3RGF0ZTtcblx0XHRcdFx0XHRcdHRoaXMuc2V0VmFsdWUoKTtcblx0XHRcdFx0XHRcdHRoaXMuZmlsbCgpO1xuXHRcdFx0XHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0Y2FzZSAxMzogLy8gZW50ZXJcblx0XHRcdFx0XHRpZiAoIXRoaXMuby5mb3JjZVBhcnNlKVxuXHRcdFx0XHRcdFx0YnJlYWs7XG5cdFx0XHRcdFx0Zm9jdXNEYXRlID0gdGhpcy5mb2N1c0RhdGUgfHwgdGhpcy5kYXRlcy5nZXQoLTEpIHx8IHRoaXMudmlld0RhdGU7XG5cdFx0XHRcdFx0aWYgKHRoaXMuby5rZXlib2FyZE5hdmlnYXRpb24pIHtcblx0XHRcdFx0XHRcdHRoaXMuX3RvZ2dsZV9tdWx0aWRhdGUoZm9jdXNEYXRlKTtcblx0XHRcdFx0XHRcdGRhdGVDaGFuZ2VkID0gdHJ1ZTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0dGhpcy5mb2N1c0RhdGUgPSBudWxsO1xuXHRcdFx0XHRcdHRoaXMudmlld0RhdGUgPSB0aGlzLmRhdGVzLmdldCgtMSkgfHwgdGhpcy52aWV3RGF0ZTtcblx0XHRcdFx0XHR0aGlzLnNldFZhbHVlKCk7XG5cdFx0XHRcdFx0dGhpcy5maWxsKCk7XG5cdFx0XHRcdFx0aWYgKHRoaXMucGlja2VyLmlzKCc6dmlzaWJsZScpKXtcblx0XHRcdFx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcblx0XHRcdFx0XHRcdGUuc3RvcFByb3BhZ2F0aW9uKCk7XG5cdFx0XHRcdFx0XHRpZiAodGhpcy5vLmF1dG9jbG9zZSlcblx0XHRcdFx0XHRcdFx0dGhpcy5oaWRlKCk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0XHRjYXNlIDk6IC8vIHRhYlxuXHRcdFx0XHRcdHRoaXMuZm9jdXNEYXRlID0gbnVsbDtcblx0XHRcdFx0XHR0aGlzLnZpZXdEYXRlID0gdGhpcy5kYXRlcy5nZXQoLTEpIHx8IHRoaXMudmlld0RhdGU7XG5cdFx0XHRcdFx0dGhpcy5maWxsKCk7XG5cdFx0XHRcdFx0dGhpcy5oaWRlKCk7XG5cdFx0XHRcdFx0YnJlYWs7XG5cdFx0XHR9XG5cdFx0XHRpZiAoZGF0ZUNoYW5nZWQpe1xuXHRcdFx0XHRpZiAodGhpcy5kYXRlcy5sZW5ndGgpXG5cdFx0XHRcdFx0dGhpcy5fdHJpZ2dlcignY2hhbmdlRGF0ZScpO1xuXHRcdFx0XHRlbHNlXG5cdFx0XHRcdFx0dGhpcy5fdHJpZ2dlcignY2xlYXJEYXRlJyk7XG5cdFx0XHRcdHRoaXMuaW5wdXRGaWVsZC50cmlnZ2VyKCdjaGFuZ2UnKTtcblx0XHRcdH1cblx0XHR9LFxuXG5cdFx0c2V0Vmlld01vZGU6IGZ1bmN0aW9uKHZpZXdNb2RlKXtcblx0XHRcdHRoaXMudmlld01vZGUgPSB2aWV3TW9kZTtcblx0XHRcdHRoaXMucGlja2VyXG5cdFx0XHRcdC5jaGlsZHJlbignZGl2Jylcblx0XHRcdFx0LmhpZGUoKVxuXHRcdFx0XHQuZmlsdGVyKCcuZGF0ZXBpY2tlci0nICsgRFBHbG9iYWwudmlld01vZGVzW3RoaXMudmlld01vZGVdLmNsc05hbWUpXG5cdFx0XHRcdFx0LnNob3coKTtcblx0XHRcdHRoaXMudXBkYXRlTmF2QXJyb3dzKCk7XG4gICAgICB0aGlzLl90cmlnZ2VyKCdjaGFuZ2VWaWV3TW9kZScsIG5ldyBEYXRlKHRoaXMudmlld0RhdGUpKTtcblx0XHR9XG5cdH07XG5cblx0dmFyIERhdGVSYW5nZVBpY2tlciA9IGZ1bmN0aW9uKGVsZW1lbnQsIG9wdGlvbnMpe1xuXHRcdCQuZGF0YShlbGVtZW50LCAnZGF0ZXBpY2tlcicsIHRoaXMpO1xuXHRcdHRoaXMuZWxlbWVudCA9ICQoZWxlbWVudCk7XG5cdFx0dGhpcy5pbnB1dHMgPSAkLm1hcChvcHRpb25zLmlucHV0cywgZnVuY3Rpb24oaSl7XG5cdFx0XHRyZXR1cm4gaS5qcXVlcnkgPyBpWzBdIDogaTtcblx0XHR9KTtcblx0XHRkZWxldGUgb3B0aW9ucy5pbnB1dHM7XG5cblx0XHR0aGlzLmtlZXBFbXB0eVZhbHVlcyA9IG9wdGlvbnMua2VlcEVtcHR5VmFsdWVzO1xuXHRcdGRlbGV0ZSBvcHRpb25zLmtlZXBFbXB0eVZhbHVlcztcblxuXHRcdGRhdGVwaWNrZXJQbHVnaW4uY2FsbCgkKHRoaXMuaW5wdXRzKSwgb3B0aW9ucylcblx0XHRcdC5vbignY2hhbmdlRGF0ZScsICQucHJveHkodGhpcy5kYXRlVXBkYXRlZCwgdGhpcykpO1xuXG5cdFx0dGhpcy5waWNrZXJzID0gJC5tYXAodGhpcy5pbnB1dHMsIGZ1bmN0aW9uKGkpe1xuXHRcdFx0cmV0dXJuICQuZGF0YShpLCAnZGF0ZXBpY2tlcicpO1xuXHRcdH0pO1xuXHRcdHRoaXMudXBkYXRlRGF0ZXMoKTtcblx0fTtcblx0RGF0ZVJhbmdlUGlja2VyLnByb3RvdHlwZSA9IHtcblx0XHR1cGRhdGVEYXRlczogZnVuY3Rpb24oKXtcblx0XHRcdHRoaXMuZGF0ZXMgPSAkLm1hcCh0aGlzLnBpY2tlcnMsIGZ1bmN0aW9uKGkpe1xuXHRcdFx0XHRyZXR1cm4gaS5nZXRVVENEYXRlKCk7XG5cdFx0XHR9KTtcblx0XHRcdHRoaXMudXBkYXRlUmFuZ2VzKCk7XG5cdFx0fSxcblx0XHR1cGRhdGVSYW5nZXM6IGZ1bmN0aW9uKCl7XG5cdFx0XHR2YXIgcmFuZ2UgPSAkLm1hcCh0aGlzLmRhdGVzLCBmdW5jdGlvbihkKXtcblx0XHRcdFx0cmV0dXJuIGQudmFsdWVPZigpO1xuXHRcdFx0fSk7XG5cdFx0XHQkLmVhY2godGhpcy5waWNrZXJzLCBmdW5jdGlvbihpLCBwKXtcblx0XHRcdFx0cC5zZXRSYW5nZShyYW5nZSk7XG5cdFx0XHR9KTtcblx0XHR9LFxuXHRcdGNsZWFyRGF0ZXM6IGZ1bmN0aW9uKCl7XG5cdFx0XHQkLmVhY2godGhpcy5waWNrZXJzLCBmdW5jdGlvbihpLCBwKXtcblx0XHRcdFx0cC5jbGVhckRhdGVzKCk7XG5cdFx0XHR9KTtcblx0XHR9LFxuXHRcdGRhdGVVcGRhdGVkOiBmdW5jdGlvbihlKXtcblx0XHRcdC8vIGB0aGlzLnVwZGF0aW5nYCBpcyBhIHdvcmthcm91bmQgZm9yIHByZXZlbnRpbmcgaW5maW5pdGUgcmVjdXJzaW9uXG5cdFx0XHQvLyBiZXR3ZWVuIGBjaGFuZ2VEYXRlYCB0cmlnZ2VyaW5nIGFuZCBgc2V0VVRDRGF0ZWAgY2FsbGluZy4gIFVudGlsXG5cdFx0XHQvLyB0aGVyZSBpcyBhIGJldHRlciBtZWNoYW5pc20uXG5cdFx0XHRpZiAodGhpcy51cGRhdGluZylcblx0XHRcdFx0cmV0dXJuO1xuXHRcdFx0dGhpcy51cGRhdGluZyA9IHRydWU7XG5cblx0XHRcdHZhciBkcCA9ICQuZGF0YShlLnRhcmdldCwgJ2RhdGVwaWNrZXInKTtcblxuXHRcdFx0aWYgKGRwID09PSB1bmRlZmluZWQpIHtcblx0XHRcdFx0cmV0dXJuO1xuXHRcdFx0fVxuXG5cdFx0XHR2YXIgbmV3X2RhdGUgPSBkcC5nZXRVVENEYXRlKCksXG5cdFx0XHRcdGtlZXBfZW1wdHlfdmFsdWVzID0gdGhpcy5rZWVwRW1wdHlWYWx1ZXMsXG5cdFx0XHRcdGkgPSAkLmluQXJyYXkoZS50YXJnZXQsIHRoaXMuaW5wdXRzKSxcblx0XHRcdFx0aiA9IGkgLSAxLFxuXHRcdFx0XHRrID0gaSArIDEsXG5cdFx0XHRcdGwgPSB0aGlzLmlucHV0cy5sZW5ndGg7XG5cdFx0XHRpZiAoaSA9PT0gLTEpXG5cdFx0XHRcdHJldHVybjtcblxuXHRcdFx0JC5lYWNoKHRoaXMucGlja2VycywgZnVuY3Rpb24oaSwgcCl7XG5cdFx0XHRcdGlmICghcC5nZXRVVENEYXRlKCkgJiYgKHAgPT09IGRwIHx8ICFrZWVwX2VtcHR5X3ZhbHVlcykpXG5cdFx0XHRcdFx0cC5zZXRVVENEYXRlKG5ld19kYXRlKTtcblx0XHRcdH0pO1xuXG5cdFx0XHRpZiAobmV3X2RhdGUgPCB0aGlzLmRhdGVzW2pdKXtcblx0XHRcdFx0Ly8gRGF0ZSBiZWluZyBtb3ZlZCBlYXJsaWVyL2xlZnRcblx0XHRcdFx0d2hpbGUgKGogPj0gMCAmJiBuZXdfZGF0ZSA8IHRoaXMuZGF0ZXNbal0pe1xuXHRcdFx0XHRcdHRoaXMucGlja2Vyc1tqLS1dLnNldFVUQ0RhdGUobmV3X2RhdGUpO1xuXHRcdFx0XHR9XG5cdFx0XHR9IGVsc2UgaWYgKG5ld19kYXRlID4gdGhpcy5kYXRlc1trXSl7XG5cdFx0XHRcdC8vIERhdGUgYmVpbmcgbW92ZWQgbGF0ZXIvcmlnaHRcblx0XHRcdFx0d2hpbGUgKGsgPCBsICYmIG5ld19kYXRlID4gdGhpcy5kYXRlc1trXSl7XG5cdFx0XHRcdFx0dGhpcy5waWNrZXJzW2srK10uc2V0VVRDRGF0ZShuZXdfZGF0ZSk7XG5cdFx0XHRcdH1cblx0XHRcdH1cblx0XHRcdHRoaXMudXBkYXRlRGF0ZXMoKTtcblxuXHRcdFx0ZGVsZXRlIHRoaXMudXBkYXRpbmc7XG5cdFx0fSxcblx0XHRkZXN0cm95OiBmdW5jdGlvbigpe1xuXHRcdFx0JC5tYXAodGhpcy5waWNrZXJzLCBmdW5jdGlvbihwKXsgcC5kZXN0cm95KCk7IH0pO1xuXHRcdFx0JCh0aGlzLmlucHV0cykub2ZmKCdjaGFuZ2VEYXRlJywgdGhpcy5kYXRlVXBkYXRlZCk7XG5cdFx0XHRkZWxldGUgdGhpcy5lbGVtZW50LmRhdGEoKS5kYXRlcGlja2VyO1xuXHRcdH0sXG5cdFx0cmVtb3ZlOiBhbGlhcygnZGVzdHJveScsICdNZXRob2QgYHJlbW92ZWAgaXMgZGVwcmVjYXRlZCBhbmQgd2lsbCBiZSByZW1vdmVkIGluIHZlcnNpb24gMi4wLiBVc2UgYGRlc3Ryb3lgIGluc3RlYWQnKVxuXHR9O1xuXG5cdGZ1bmN0aW9uIG9wdHNfZnJvbV9lbChlbCwgcHJlZml4KXtcblx0XHQvLyBEZXJpdmUgb3B0aW9ucyBmcm9tIGVsZW1lbnQgZGF0YS1hdHRyc1xuXHRcdHZhciBkYXRhID0gJChlbCkuZGF0YSgpLFxuXHRcdFx0b3V0ID0ge30sIGlua2V5LFxuXHRcdFx0cmVwbGFjZSA9IG5ldyBSZWdFeHAoJ14nICsgcHJlZml4LnRvTG93ZXJDYXNlKCkgKyAnKFtBLVpdKScpO1xuXHRcdHByZWZpeCA9IG5ldyBSZWdFeHAoJ14nICsgcHJlZml4LnRvTG93ZXJDYXNlKCkpO1xuXHRcdGZ1bmN0aW9uIHJlX2xvd2VyKF8sYSl7XG5cdFx0XHRyZXR1cm4gYS50b0xvd2VyQ2FzZSgpO1xuXHRcdH1cblx0XHRmb3IgKHZhciBrZXkgaW4gZGF0YSlcblx0XHRcdGlmIChwcmVmaXgudGVzdChrZXkpKXtcblx0XHRcdFx0aW5rZXkgPSBrZXkucmVwbGFjZShyZXBsYWNlLCByZV9sb3dlcik7XG5cdFx0XHRcdG91dFtpbmtleV0gPSBkYXRhW2tleV07XG5cdFx0XHR9XG5cdFx0cmV0dXJuIG91dDtcblx0fVxuXG5cdGZ1bmN0aW9uIG9wdHNfZnJvbV9sb2NhbGUobGFuZyl7XG5cdFx0Ly8gRGVyaXZlIG9wdGlvbnMgZnJvbSBsb2NhbGUgcGx1Z2luc1xuXHRcdHZhciBvdXQgPSB7fTtcblx0XHQvLyBDaGVjayBpZiBcImRlLURFXCIgc3R5bGUgZGF0ZSBpcyBhdmFpbGFibGUsIGlmIG5vdCBsYW5ndWFnZSBzaG91bGRcblx0XHQvLyBmYWxsYmFjayB0byAyIGxldHRlciBjb2RlIGVnIFwiZGVcIlxuXHRcdGlmICghZGF0ZXNbbGFuZ10pe1xuXHRcdFx0bGFuZyA9IGxhbmcuc3BsaXQoJy0nKVswXTtcblx0XHRcdGlmICghZGF0ZXNbbGFuZ10pXG5cdFx0XHRcdHJldHVybjtcblx0XHR9XG5cdFx0dmFyIGQgPSBkYXRlc1tsYW5nXTtcblx0XHQkLmVhY2gobG9jYWxlX29wdHMsIGZ1bmN0aW9uKGksayl7XG5cdFx0XHRpZiAoayBpbiBkKVxuXHRcdFx0XHRvdXRba10gPSBkW2tdO1xuXHRcdH0pO1xuXHRcdHJldHVybiBvdXQ7XG5cdH1cblxuXHR2YXIgb2xkID0gJC5mbi5kYXRlcGlja2VyO1xuXHR2YXIgZGF0ZXBpY2tlclBsdWdpbiA9IGZ1bmN0aW9uKG9wdGlvbil7XG5cdFx0dmFyIGFyZ3MgPSBBcnJheS5hcHBseShudWxsLCBhcmd1bWVudHMpO1xuXHRcdGFyZ3Muc2hpZnQoKTtcblx0XHR2YXIgaW50ZXJuYWxfcmV0dXJuO1xuXHRcdHRoaXMuZWFjaChmdW5jdGlvbigpe1xuXHRcdFx0dmFyICR0aGlzID0gJCh0aGlzKSxcblx0XHRcdFx0ZGF0YSA9ICR0aGlzLmRhdGEoJ2RhdGVwaWNrZXInKSxcblx0XHRcdFx0b3B0aW9ucyA9IHR5cGVvZiBvcHRpb24gPT09ICdvYmplY3QnICYmIG9wdGlvbjtcblx0XHRcdGlmICghZGF0YSl7XG5cdFx0XHRcdHZhciBlbG9wdHMgPSBvcHRzX2Zyb21fZWwodGhpcywgJ2RhdGUnKSxcblx0XHRcdFx0XHQvLyBQcmVsaW1pbmFyeSBvdGlvbnNcblx0XHRcdFx0XHR4b3B0cyA9ICQuZXh0ZW5kKHt9LCBkZWZhdWx0cywgZWxvcHRzLCBvcHRpb25zKSxcblx0XHRcdFx0XHRsb2NvcHRzID0gb3B0c19mcm9tX2xvY2FsZSh4b3B0cy5sYW5ndWFnZSksXG5cdFx0XHRcdFx0Ly8gT3B0aW9ucyBwcmlvcml0eToganMgYXJncywgZGF0YS1hdHRycywgbG9jYWxlcywgZGVmYXVsdHNcblx0XHRcdFx0XHRvcHRzID0gJC5leHRlbmQoe30sIGRlZmF1bHRzLCBsb2NvcHRzLCBlbG9wdHMsIG9wdGlvbnMpO1xuXHRcdFx0XHRpZiAoJHRoaXMuaGFzQ2xhc3MoJ2lucHV0LWRhdGVyYW5nZScpIHx8IG9wdHMuaW5wdXRzKXtcblx0XHRcdFx0XHQkLmV4dGVuZChvcHRzLCB7XG5cdFx0XHRcdFx0XHRpbnB1dHM6IG9wdHMuaW5wdXRzIHx8ICR0aGlzLmZpbmQoJ2lucHV0JykudG9BcnJheSgpXG5cdFx0XHRcdFx0fSk7XG5cdFx0XHRcdFx0ZGF0YSA9IG5ldyBEYXRlUmFuZ2VQaWNrZXIodGhpcywgb3B0cyk7XG5cdFx0XHRcdH1cblx0XHRcdFx0ZWxzZSB7XG5cdFx0XHRcdFx0ZGF0YSA9IG5ldyBEYXRlcGlja2VyKHRoaXMsIG9wdHMpO1xuXHRcdFx0XHR9XG5cdFx0XHRcdCR0aGlzLmRhdGEoJ2RhdGVwaWNrZXInLCBkYXRhKTtcblx0XHRcdH1cblx0XHRcdGlmICh0eXBlb2Ygb3B0aW9uID09PSAnc3RyaW5nJyAmJiB0eXBlb2YgZGF0YVtvcHRpb25dID09PSAnZnVuY3Rpb24nKXtcblx0XHRcdFx0aW50ZXJuYWxfcmV0dXJuID0gZGF0YVtvcHRpb25dLmFwcGx5KGRhdGEsIGFyZ3MpO1xuXHRcdFx0fVxuXHRcdH0pO1xuXG5cdFx0aWYgKFxuXHRcdFx0aW50ZXJuYWxfcmV0dXJuID09PSB1bmRlZmluZWQgfHxcblx0XHRcdGludGVybmFsX3JldHVybiBpbnN0YW5jZW9mIERhdGVwaWNrZXIgfHxcblx0XHRcdGludGVybmFsX3JldHVybiBpbnN0YW5jZW9mIERhdGVSYW5nZVBpY2tlclxuXHRcdClcblx0XHRcdHJldHVybiB0aGlzO1xuXG5cdFx0aWYgKHRoaXMubGVuZ3RoID4gMSlcblx0XHRcdHRocm93IG5ldyBFcnJvcignVXNpbmcgb25seSBhbGxvd2VkIGZvciB0aGUgY29sbGVjdGlvbiBvZiBhIHNpbmdsZSBlbGVtZW50ICgnICsgb3B0aW9uICsgJyBmdW5jdGlvbiknKTtcblx0XHRlbHNlXG5cdFx0XHRyZXR1cm4gaW50ZXJuYWxfcmV0dXJuO1xuXHR9O1xuXHQkLmZuLmRhdGVwaWNrZXIgPSBkYXRlcGlja2VyUGx1Z2luO1xuXG5cdHZhciBkZWZhdWx0cyA9ICQuZm4uZGF0ZXBpY2tlci5kZWZhdWx0cyA9IHtcblx0XHRhc3N1bWVOZWFyYnlZZWFyOiBmYWxzZSxcblx0XHRhdXRvY2xvc2U6IGZhbHNlLFxuXHRcdGJlZm9yZVNob3dEYXk6ICQubm9vcCxcblx0XHRiZWZvcmVTaG93TW9udGg6ICQubm9vcCxcblx0XHRiZWZvcmVTaG93WWVhcjogJC5ub29wLFxuXHRcdGJlZm9yZVNob3dEZWNhZGU6ICQubm9vcCxcblx0XHRiZWZvcmVTaG93Q2VudHVyeTogJC5ub29wLFxuXHRcdGNhbGVuZGFyV2Vla3M6IGZhbHNlLFxuXHRcdGNsZWFyQnRuOiBmYWxzZSxcblx0XHR0b2dnbGVBY3RpdmU6IGZhbHNlLFxuXHRcdGRheXNPZldlZWtEaXNhYmxlZDogW10sXG5cdFx0ZGF5c09mV2Vla0hpZ2hsaWdodGVkOiBbXSxcblx0XHRkYXRlc0Rpc2FibGVkOiBbXSxcblx0XHRlbmREYXRlOiBJbmZpbml0eSxcblx0XHRmb3JjZVBhcnNlOiB0cnVlLFxuXHRcdGZvcm1hdDogJ21tL2RkL3l5eXknLFxuXHRcdGtlZXBFbXB0eVZhbHVlczogZmFsc2UsXG5cdFx0a2V5Ym9hcmROYXZpZ2F0aW9uOiB0cnVlLFxuXHRcdGxhbmd1YWdlOiAnZW4nLFxuXHRcdG1pblZpZXdNb2RlOiAwLFxuXHRcdG1heFZpZXdNb2RlOiA0LFxuXHRcdG11bHRpZGF0ZTogZmFsc2UsXG5cdFx0bXVsdGlkYXRlU2VwYXJhdG9yOiAnLCcsXG5cdFx0b3JpZW50YXRpb246IFwiYXV0b1wiLFxuXHRcdHJ0bDogZmFsc2UsXG5cdFx0c3RhcnREYXRlOiAtSW5maW5pdHksXG5cdFx0c3RhcnRWaWV3OiAwLFxuXHRcdHRvZGF5QnRuOiBmYWxzZSxcblx0XHR0b2RheUhpZ2hsaWdodDogZmFsc2UsXG5cdFx0dXBkYXRlVmlld0RhdGU6IHRydWUsXG5cdFx0d2Vla1N0YXJ0OiAwLFxuXHRcdGRpc2FibGVUb3VjaEtleWJvYXJkOiBmYWxzZSxcblx0XHRlbmFibGVPblJlYWRvbmx5OiB0cnVlLFxuXHRcdHNob3dPbkZvY3VzOiB0cnVlLFxuXHRcdHpJbmRleE9mZnNldDogMTAsXG5cdFx0Y29udGFpbmVyOiAnYm9keScsXG5cdFx0aW1tZWRpYXRlVXBkYXRlczogZmFsc2UsXG5cdFx0dGl0bGU6ICcnLFxuXHRcdHRlbXBsYXRlczoge1xuXHRcdFx0bGVmdEFycm93OiAnJiN4MDBBQjsnLFxuXHRcdFx0cmlnaHRBcnJvdzogJyYjeDAwQkI7J1xuXHRcdH0sXG4gICAgc2hvd1dlZWtEYXlzOiB0cnVlXG5cdH07XG5cdHZhciBsb2NhbGVfb3B0cyA9ICQuZm4uZGF0ZXBpY2tlci5sb2NhbGVfb3B0cyA9IFtcblx0XHQnZm9ybWF0Jyxcblx0XHQncnRsJyxcblx0XHQnd2Vla1N0YXJ0J1xuXHRdO1xuXHQkLmZuLmRhdGVwaWNrZXIuQ29uc3RydWN0b3IgPSBEYXRlcGlja2VyO1xuXG5cdHZhciBEUEdsb2JhbCA9IHtcblx0XHR2aWV3TW9kZXM6IFtcblx0XHRcdHtcblx0XHRcdFx0bmFtZXM6IFsnZGF5cycsICdtb250aCddLFxuXHRcdFx0XHRjbHNOYW1lOiAnZGF5cycsXG5cdFx0XHRcdGU6ICdjaGFuZ2VNb250aCdcblx0XHRcdH0sXG5cdFx0XHR7XG5cdFx0XHRcdG5hbWVzOiBbJ21vbnRocycsICd5ZWFyJ10sXG5cdFx0XHRcdGNsc05hbWU6ICdtb250aHMnLFxuXHRcdFx0XHRlOiAnY2hhbmdlWWVhcicsXG5cdFx0XHRcdG5hdlN0ZXA6IDFcblx0XHRcdH0sXG5cdFx0XHR7XG5cdFx0XHRcdG5hbWVzOiBbJ3llYXJzJywgJ2RlY2FkZSddLFxuXHRcdFx0XHRjbHNOYW1lOiAneWVhcnMnLFxuXHRcdFx0XHRlOiAnY2hhbmdlRGVjYWRlJyxcblx0XHRcdFx0bmF2U3RlcDogMTBcblx0XHRcdH0sXG5cdFx0XHR7XG5cdFx0XHRcdG5hbWVzOiBbJ2RlY2FkZXMnLCAnY2VudHVyeSddLFxuXHRcdFx0XHRjbHNOYW1lOiAnZGVjYWRlcycsXG5cdFx0XHRcdGU6ICdjaGFuZ2VDZW50dXJ5Jyxcblx0XHRcdFx0bmF2U3RlcDogMTAwXG5cdFx0XHR9LFxuXHRcdFx0e1xuXHRcdFx0XHRuYW1lczogWydjZW50dXJpZXMnLCAnbWlsbGVubml1bSddLFxuXHRcdFx0XHRjbHNOYW1lOiAnY2VudHVyaWVzJyxcblx0XHRcdFx0ZTogJ2NoYW5nZU1pbGxlbm5pdW0nLFxuXHRcdFx0XHRuYXZTdGVwOiAxMDAwXG5cdFx0XHR9XG5cdFx0XSxcblx0XHR2YWxpZFBhcnRzOiAvZGQ/fEREP3xtbT98TU0/fHl5KD86eXkpPy9nLFxuXHRcdG5vbnB1bmN0dWF0aW9uOiAvW14gLVxcLzotQFxcdTVlNzRcXHU2NzA4XFx1NjVlNVxcWy1gey1+XFx0XFxuXFxyXSsvZyxcblx0XHRwYXJzZUZvcm1hdDogZnVuY3Rpb24oZm9ybWF0KXtcblx0XHRcdGlmICh0eXBlb2YgZm9ybWF0LnRvVmFsdWUgPT09ICdmdW5jdGlvbicgJiYgdHlwZW9mIGZvcm1hdC50b0Rpc3BsYXkgPT09ICdmdW5jdGlvbicpXG4gICAgICAgICAgICAgICAgcmV0dXJuIGZvcm1hdDtcbiAgICAgICAgICAgIC8vIElFIHRyZWF0cyBcXDAgYXMgYSBzdHJpbmcgZW5kIGluIGlucHV0cyAodHJ1bmNhdGluZyB0aGUgdmFsdWUpLFxuXHRcdFx0Ly8gc28gaXQncyBhIGJhZCBmb3JtYXQgZGVsaW1pdGVyLCBhbnl3YXlcblx0XHRcdHZhciBzZXBhcmF0b3JzID0gZm9ybWF0LnJlcGxhY2UodGhpcy52YWxpZFBhcnRzLCAnXFwwJykuc3BsaXQoJ1xcMCcpLFxuXHRcdFx0XHRwYXJ0cyA9IGZvcm1hdC5tYXRjaCh0aGlzLnZhbGlkUGFydHMpO1xuXHRcdFx0aWYgKCFzZXBhcmF0b3JzIHx8ICFzZXBhcmF0b3JzLmxlbmd0aCB8fCAhcGFydHMgfHwgcGFydHMubGVuZ3RoID09PSAwKXtcblx0XHRcdFx0dGhyb3cgbmV3IEVycm9yKFwiSW52YWxpZCBkYXRlIGZvcm1hdC5cIik7XG5cdFx0XHR9XG5cdFx0XHRyZXR1cm4ge3NlcGFyYXRvcnM6IHNlcGFyYXRvcnMsIHBhcnRzOiBwYXJ0c307XG5cdFx0fSxcblx0XHRwYXJzZURhdGU6IGZ1bmN0aW9uKGRhdGUsIGZvcm1hdCwgbGFuZ3VhZ2UsIGFzc3VtZU5lYXJieSl7XG5cdFx0XHRpZiAoIWRhdGUpXG5cdFx0XHRcdHJldHVybiB1bmRlZmluZWQ7XG5cdFx0XHRpZiAoZGF0ZSBpbnN0YW5jZW9mIERhdGUpXG5cdFx0XHRcdHJldHVybiBkYXRlO1xuXHRcdFx0aWYgKHR5cGVvZiBmb3JtYXQgPT09ICdzdHJpbmcnKVxuXHRcdFx0XHRmb3JtYXQgPSBEUEdsb2JhbC5wYXJzZUZvcm1hdChmb3JtYXQpO1xuXHRcdFx0aWYgKGZvcm1hdC50b1ZhbHVlKVxuXHRcdFx0XHRyZXR1cm4gZm9ybWF0LnRvVmFsdWUoZGF0ZSwgZm9ybWF0LCBsYW5ndWFnZSk7XG5cdFx0XHR2YXIgZm5fbWFwID0ge1xuXHRcdFx0XHRcdGQ6ICdtb3ZlRGF5Jyxcblx0XHRcdFx0XHRtOiAnbW92ZU1vbnRoJyxcblx0XHRcdFx0XHR3OiAnbW92ZVdlZWsnLFxuXHRcdFx0XHRcdHk6ICdtb3ZlWWVhcidcblx0XHRcdFx0fSxcblx0XHRcdFx0ZGF0ZUFsaWFzZXMgPSB7XG5cdFx0XHRcdFx0eWVzdGVyZGF5OiAnLTFkJyxcblx0XHRcdFx0XHR0b2RheTogJyswZCcsXG5cdFx0XHRcdFx0dG9tb3Jyb3c6ICcrMWQnXG5cdFx0XHRcdH0sXG5cdFx0XHRcdHBhcnRzLCBwYXJ0LCBkaXIsIGksIGZuO1xuXHRcdFx0aWYgKGRhdGUgaW4gZGF0ZUFsaWFzZXMpe1xuXHRcdFx0XHRkYXRlID0gZGF0ZUFsaWFzZXNbZGF0ZV07XG5cdFx0XHR9XG5cdFx0XHRpZiAoL15bXFwtK11cXGQrW2Rtd3ldKFtcXHMsXStbXFwtK11cXGQrW2Rtd3ldKSokL2kudGVzdChkYXRlKSl7XG5cdFx0XHRcdHBhcnRzID0gZGF0ZS5tYXRjaCgvKFtcXC0rXVxcZCspKFtkbXd5XSkvZ2kpO1xuXHRcdFx0XHRkYXRlID0gbmV3IERhdGUoKTtcblx0XHRcdFx0Zm9yIChpPTA7IGkgPCBwYXJ0cy5sZW5ndGg7IGkrKyl7XG5cdFx0XHRcdFx0cGFydCA9IHBhcnRzW2ldLm1hdGNoKC8oW1xcLStdXFxkKykoW2Rtd3ldKS9pKTtcblx0XHRcdFx0XHRkaXIgPSBOdW1iZXIocGFydFsxXSk7XG5cdFx0XHRcdFx0Zm4gPSBmbl9tYXBbcGFydFsyXS50b0xvd2VyQ2FzZSgpXTtcblx0XHRcdFx0XHRkYXRlID0gRGF0ZXBpY2tlci5wcm90b3R5cGVbZm5dKGRhdGUsIGRpcik7XG5cdFx0XHRcdH1cblx0XHRcdFx0cmV0dXJuIERhdGVwaWNrZXIucHJvdG90eXBlLl96ZXJvX3V0Y190aW1lKGRhdGUpO1xuXHRcdFx0fVxuXG5cdFx0XHRwYXJ0cyA9IGRhdGUgJiYgZGF0ZS5tYXRjaCh0aGlzLm5vbnB1bmN0dWF0aW9uKSB8fCBbXTtcblxuXHRcdFx0ZnVuY3Rpb24gYXBwbHlOZWFyYnlZZWFyKHllYXIsIHRocmVzaG9sZCl7XG5cdFx0XHRcdGlmICh0aHJlc2hvbGQgPT09IHRydWUpXG5cdFx0XHRcdFx0dGhyZXNob2xkID0gMTA7XG5cblx0XHRcdFx0Ly8gaWYgeWVhciBpcyAyIGRpZ2l0cyBvciBsZXNzLCB0aGFuIHRoZSB1c2VyIG1vc3QgbGlrZWx5IGlzIHRyeWluZyB0byBnZXQgYSByZWNlbnQgY2VudHVyeVxuXHRcdFx0XHRpZiAoeWVhciA8IDEwMCl7XG5cdFx0XHRcdFx0eWVhciArPSAyMDAwO1xuXHRcdFx0XHRcdC8vIGlmIHRoZSBuZXcgeWVhciBpcyBtb3JlIHRoYW4gdGhyZXNob2xkIHllYXJzIGluIGFkdmFuY2UsIHVzZSBsYXN0IGNlbnR1cnlcblx0XHRcdFx0XHRpZiAoeWVhciA+ICgobmV3IERhdGUoKSkuZ2V0RnVsbFllYXIoKSt0aHJlc2hvbGQpKXtcblx0XHRcdFx0XHRcdHllYXIgLT0gMTAwO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0fVxuXG5cdFx0XHRcdHJldHVybiB5ZWFyO1xuXHRcdFx0fVxuXG5cdFx0XHR2YXIgcGFyc2VkID0ge30sXG5cdFx0XHRcdHNldHRlcnNfb3JkZXIgPSBbJ3l5eXknLCAneXknLCAnTScsICdNTScsICdtJywgJ21tJywgJ2QnLCAnZGQnXSxcblx0XHRcdFx0c2V0dGVyc19tYXAgPSB7XG5cdFx0XHRcdFx0eXl5eTogZnVuY3Rpb24oZCx2KXtcblx0XHRcdFx0XHRcdHJldHVybiBkLnNldFVUQ0Z1bGxZZWFyKGFzc3VtZU5lYXJieSA/IGFwcGx5TmVhcmJ5WWVhcih2LCBhc3N1bWVOZWFyYnkpIDogdik7XG5cdFx0XHRcdFx0fSxcblx0XHRcdFx0XHRtOiBmdW5jdGlvbihkLHYpe1xuXHRcdFx0XHRcdFx0aWYgKGlzTmFOKGQpKVxuXHRcdFx0XHRcdFx0XHRyZXR1cm4gZDtcblx0XHRcdFx0XHRcdHYgLT0gMTtcblx0XHRcdFx0XHRcdHdoaWxlICh2IDwgMCkgdiArPSAxMjtcblx0XHRcdFx0XHRcdHYgJT0gMTI7XG5cdFx0XHRcdFx0XHRkLnNldFVUQ01vbnRoKHYpO1xuXHRcdFx0XHRcdFx0d2hpbGUgKGQuZ2V0VVRDTW9udGgoKSAhPT0gdilcblx0XHRcdFx0XHRcdFx0ZC5zZXRVVENEYXRlKGQuZ2V0VVRDRGF0ZSgpLTEpO1xuXHRcdFx0XHRcdFx0cmV0dXJuIGQ7XG5cdFx0XHRcdFx0fSxcblx0XHRcdFx0XHRkOiBmdW5jdGlvbihkLHYpe1xuXHRcdFx0XHRcdFx0cmV0dXJuIGQuc2V0VVRDRGF0ZSh2KTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH0sXG5cdFx0XHRcdHZhbCwgZmlsdGVyZWQ7XG5cdFx0XHRzZXR0ZXJzX21hcFsneXknXSA9IHNldHRlcnNfbWFwWyd5eXl5J107XG5cdFx0XHRzZXR0ZXJzX21hcFsnTSddID0gc2V0dGVyc19tYXBbJ01NJ10gPSBzZXR0ZXJzX21hcFsnbW0nXSA9IHNldHRlcnNfbWFwWydtJ107XG5cdFx0XHRzZXR0ZXJzX21hcFsnZGQnXSA9IHNldHRlcnNfbWFwWydkJ107XG5cdFx0XHRkYXRlID0gVVRDVG9kYXkoKTtcblx0XHRcdHZhciBmcGFydHMgPSBmb3JtYXQucGFydHMuc2xpY2UoKTtcblx0XHRcdC8vIFJlbW92ZSBub29wIHBhcnRzXG5cdFx0XHRpZiAocGFydHMubGVuZ3RoICE9PSBmcGFydHMubGVuZ3RoKXtcblx0XHRcdFx0ZnBhcnRzID0gJChmcGFydHMpLmZpbHRlcihmdW5jdGlvbihpLHApe1xuXHRcdFx0XHRcdHJldHVybiAkLmluQXJyYXkocCwgc2V0dGVyc19vcmRlcikgIT09IC0xO1xuXHRcdFx0XHR9KS50b0FycmF5KCk7XG5cdFx0XHR9XG5cdFx0XHQvLyBQcm9jZXNzIHJlbWFpbmRlclxuXHRcdFx0ZnVuY3Rpb24gbWF0Y2hfcGFydCgpe1xuXHRcdFx0XHR2YXIgbSA9IHRoaXMuc2xpY2UoMCwgcGFydHNbaV0ubGVuZ3RoKSxcblx0XHRcdFx0XHRwID0gcGFydHNbaV0uc2xpY2UoMCwgbS5sZW5ndGgpO1xuXHRcdFx0XHRyZXR1cm4gbS50b0xvd2VyQ2FzZSgpID09PSBwLnRvTG93ZXJDYXNlKCk7XG5cdFx0XHR9XG5cdFx0XHRpZiAocGFydHMubGVuZ3RoID09PSBmcGFydHMubGVuZ3RoKXtcblx0XHRcdFx0dmFyIGNudDtcblx0XHRcdFx0Zm9yIChpPTAsIGNudCA9IGZwYXJ0cy5sZW5ndGg7IGkgPCBjbnQ7IGkrKyl7XG5cdFx0XHRcdFx0dmFsID0gcGFyc2VJbnQocGFydHNbaV0sIDEwKTtcblx0XHRcdFx0XHRwYXJ0ID0gZnBhcnRzW2ldO1xuXHRcdFx0XHRcdGlmIChpc05hTih2YWwpKXtcblx0XHRcdFx0XHRcdHN3aXRjaCAocGFydCl7XG5cdFx0XHRcdFx0XHRcdGNhc2UgJ01NJzpcblx0XHRcdFx0XHRcdFx0XHRmaWx0ZXJlZCA9ICQoZGF0ZXNbbGFuZ3VhZ2VdLm1vbnRocykuZmlsdGVyKG1hdGNoX3BhcnQpO1xuXHRcdFx0XHRcdFx0XHRcdHZhbCA9ICQuaW5BcnJheShmaWx0ZXJlZFswXSwgZGF0ZXNbbGFuZ3VhZ2VdLm1vbnRocykgKyAxO1xuXHRcdFx0XHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0XHRcdFx0XHRjYXNlICdNJzpcblx0XHRcdFx0XHRcdFx0XHRmaWx0ZXJlZCA9ICQoZGF0ZXNbbGFuZ3VhZ2VdLm1vbnRoc1Nob3J0KS5maWx0ZXIobWF0Y2hfcGFydCk7XG5cdFx0XHRcdFx0XHRcdFx0dmFsID0gJC5pbkFycmF5KGZpbHRlcmVkWzBdLCBkYXRlc1tsYW5ndWFnZV0ubW9udGhzU2hvcnQpICsgMTtcblx0XHRcdFx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0cGFyc2VkW3BhcnRdID0gdmFsO1xuXHRcdFx0XHR9XG5cdFx0XHRcdHZhciBfZGF0ZSwgcztcblx0XHRcdFx0Zm9yIChpPTA7IGkgPCBzZXR0ZXJzX29yZGVyLmxlbmd0aDsgaSsrKXtcblx0XHRcdFx0XHRzID0gc2V0dGVyc19vcmRlcltpXTtcblx0XHRcdFx0XHRpZiAocyBpbiBwYXJzZWQgJiYgIWlzTmFOKHBhcnNlZFtzXSkpe1xuXHRcdFx0XHRcdFx0X2RhdGUgPSBuZXcgRGF0ZShkYXRlKTtcblx0XHRcdFx0XHRcdHNldHRlcnNfbWFwW3NdKF9kYXRlLCBwYXJzZWRbc10pO1xuXHRcdFx0XHRcdFx0aWYgKCFpc05hTihfZGF0ZSkpXG5cdFx0XHRcdFx0XHRcdGRhdGUgPSBfZGF0ZTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH1cblx0XHRcdH1cblx0XHRcdHJldHVybiBkYXRlO1xuXHRcdH0sXG5cdFx0Zm9ybWF0RGF0ZTogZnVuY3Rpb24oZGF0ZSwgZm9ybWF0LCBsYW5ndWFnZSl7XG5cdFx0XHRpZiAoIWRhdGUpXG5cdFx0XHRcdHJldHVybiAnJztcblx0XHRcdGlmICh0eXBlb2YgZm9ybWF0ID09PSAnc3RyaW5nJylcblx0XHRcdFx0Zm9ybWF0ID0gRFBHbG9iYWwucGFyc2VGb3JtYXQoZm9ybWF0KTtcblx0XHRcdGlmIChmb3JtYXQudG9EaXNwbGF5KVxuICAgICAgICAgICAgICAgIHJldHVybiBmb3JtYXQudG9EaXNwbGF5KGRhdGUsIGZvcm1hdCwgbGFuZ3VhZ2UpO1xuICAgICAgICAgICAgdmFyIHZhbCA9IHtcblx0XHRcdFx0ZDogZGF0ZS5nZXRVVENEYXRlKCksXG5cdFx0XHRcdEQ6IGRhdGVzW2xhbmd1YWdlXS5kYXlzU2hvcnRbZGF0ZS5nZXRVVENEYXkoKV0sXG5cdFx0XHRcdEREOiBkYXRlc1tsYW5ndWFnZV0uZGF5c1tkYXRlLmdldFVUQ0RheSgpXSxcblx0XHRcdFx0bTogZGF0ZS5nZXRVVENNb250aCgpICsgMSxcblx0XHRcdFx0TTogZGF0ZXNbbGFuZ3VhZ2VdLm1vbnRoc1Nob3J0W2RhdGUuZ2V0VVRDTW9udGgoKV0sXG5cdFx0XHRcdE1NOiBkYXRlc1tsYW5ndWFnZV0ubW9udGhzW2RhdGUuZ2V0VVRDTW9udGgoKV0sXG5cdFx0XHRcdHl5OiBkYXRlLmdldFVUQ0Z1bGxZZWFyKCkudG9TdHJpbmcoKS5zdWJzdHJpbmcoMiksXG5cdFx0XHRcdHl5eXk6IGRhdGUuZ2V0VVRDRnVsbFllYXIoKVxuXHRcdFx0fTtcblx0XHRcdHZhbC5kZCA9ICh2YWwuZCA8IDEwID8gJzAnIDogJycpICsgdmFsLmQ7XG5cdFx0XHR2YWwubW0gPSAodmFsLm0gPCAxMCA/ICcwJyA6ICcnKSArIHZhbC5tO1xuXHRcdFx0ZGF0ZSA9IFtdO1xuXHRcdFx0dmFyIHNlcHMgPSAkLmV4dGVuZChbXSwgZm9ybWF0LnNlcGFyYXRvcnMpO1xuXHRcdFx0Zm9yICh2YXIgaT0wLCBjbnQgPSBmb3JtYXQucGFydHMubGVuZ3RoOyBpIDw9IGNudDsgaSsrKXtcblx0XHRcdFx0aWYgKHNlcHMubGVuZ3RoKVxuXHRcdFx0XHRcdGRhdGUucHVzaChzZXBzLnNoaWZ0KCkpO1xuXHRcdFx0XHRkYXRlLnB1c2godmFsW2Zvcm1hdC5wYXJ0c1tpXV0pO1xuXHRcdFx0fVxuXHRcdFx0cmV0dXJuIGRhdGUuam9pbignJyk7XG5cdFx0fSxcblx0XHRoZWFkVGVtcGxhdGU6ICc8dGhlYWQ+Jytcblx0XHRcdCAgICAgICAgICAgICAgJzx0cj4nK1xuXHRcdFx0ICAgICAgICAgICAgICAgICc8dGggY29sc3Bhbj1cIjdcIiBjbGFzcz1cImRhdGVwaWNrZXItdGl0bGVcIj48L3RoPicrXG5cdFx0XHQgICAgICAgICAgICAgICc8L3RyPicrXG5cdFx0XHRcdFx0XHRcdCc8dHI+Jytcblx0XHRcdFx0XHRcdFx0XHQnPHRoIGNsYXNzPVwicHJldlwiPicrZGVmYXVsdHMudGVtcGxhdGVzLmxlZnRBcnJvdysnPC90aD4nK1xuXHRcdFx0XHRcdFx0XHRcdCc8dGggY29sc3Bhbj1cIjVcIiBjbGFzcz1cImRhdGVwaWNrZXItc3dpdGNoXCI+PC90aD4nK1xuXHRcdFx0XHRcdFx0XHRcdCc8dGggY2xhc3M9XCJuZXh0XCI+JytkZWZhdWx0cy50ZW1wbGF0ZXMucmlnaHRBcnJvdysnPC90aD4nK1xuXHRcdFx0XHRcdFx0XHQnPC90cj4nK1xuXHRcdFx0XHRcdFx0JzwvdGhlYWQ+Jyxcblx0XHRjb250VGVtcGxhdGU6ICc8dGJvZHk+PHRyPjx0ZCBjb2xzcGFuPVwiN1wiPjwvdGQ+PC90cj48L3Rib2R5PicsXG5cdFx0Zm9vdFRlbXBsYXRlOiAnPHRmb290PicrXG5cdFx0XHRcdFx0XHRcdCc8dHI+Jytcblx0XHRcdFx0XHRcdFx0XHQnPHRoIGNvbHNwYW49XCI3XCIgY2xhc3M9XCJ0b2RheVwiPjwvdGg+Jytcblx0XHRcdFx0XHRcdFx0JzwvdHI+Jytcblx0XHRcdFx0XHRcdFx0Jzx0cj4nK1xuXHRcdFx0XHRcdFx0XHRcdCc8dGggY29sc3Bhbj1cIjdcIiBjbGFzcz1cImNsZWFyXCI+PC90aD4nK1xuXHRcdFx0XHRcdFx0XHQnPC90cj4nK1xuXHRcdFx0XHRcdFx0JzwvdGZvb3Q+J1xuXHR9O1xuXHREUEdsb2JhbC50ZW1wbGF0ZSA9ICc8ZGl2IGNsYXNzPVwiZGF0ZXBpY2tlclwiPicrXG5cdFx0XHRcdFx0XHRcdCc8ZGl2IGNsYXNzPVwiZGF0ZXBpY2tlci1kYXlzXCI+Jytcblx0XHRcdFx0XHRcdFx0XHQnPHRhYmxlIGNsYXNzPVwidGFibGUtY29uZGVuc2VkXCI+Jytcblx0XHRcdFx0XHRcdFx0XHRcdERQR2xvYmFsLmhlYWRUZW1wbGF0ZStcblx0XHRcdFx0XHRcdFx0XHRcdCc8dGJvZHk+PC90Ym9keT4nK1xuXHRcdFx0XHRcdFx0XHRcdFx0RFBHbG9iYWwuZm9vdFRlbXBsYXRlK1xuXHRcdFx0XHRcdFx0XHRcdCc8L3RhYmxlPicrXG5cdFx0XHRcdFx0XHRcdCc8L2Rpdj4nK1xuXHRcdFx0XHRcdFx0XHQnPGRpdiBjbGFzcz1cImRhdGVwaWNrZXItbW9udGhzXCI+Jytcblx0XHRcdFx0XHRcdFx0XHQnPHRhYmxlIGNsYXNzPVwidGFibGUtY29uZGVuc2VkXCI+Jytcblx0XHRcdFx0XHRcdFx0XHRcdERQR2xvYmFsLmhlYWRUZW1wbGF0ZStcblx0XHRcdFx0XHRcdFx0XHRcdERQR2xvYmFsLmNvbnRUZW1wbGF0ZStcblx0XHRcdFx0XHRcdFx0XHRcdERQR2xvYmFsLmZvb3RUZW1wbGF0ZStcblx0XHRcdFx0XHRcdFx0XHQnPC90YWJsZT4nK1xuXHRcdFx0XHRcdFx0XHQnPC9kaXY+Jytcblx0XHRcdFx0XHRcdFx0JzxkaXYgY2xhc3M9XCJkYXRlcGlja2VyLXllYXJzXCI+Jytcblx0XHRcdFx0XHRcdFx0XHQnPHRhYmxlIGNsYXNzPVwidGFibGUtY29uZGVuc2VkXCI+Jytcblx0XHRcdFx0XHRcdFx0XHRcdERQR2xvYmFsLmhlYWRUZW1wbGF0ZStcblx0XHRcdFx0XHRcdFx0XHRcdERQR2xvYmFsLmNvbnRUZW1wbGF0ZStcblx0XHRcdFx0XHRcdFx0XHRcdERQR2xvYmFsLmZvb3RUZW1wbGF0ZStcblx0XHRcdFx0XHRcdFx0XHQnPC90YWJsZT4nK1xuXHRcdFx0XHRcdFx0XHQnPC9kaXY+Jytcblx0XHRcdFx0XHRcdFx0JzxkaXYgY2xhc3M9XCJkYXRlcGlja2VyLWRlY2FkZXNcIj4nK1xuXHRcdFx0XHRcdFx0XHRcdCc8dGFibGUgY2xhc3M9XCJ0YWJsZS1jb25kZW5zZWRcIj4nK1xuXHRcdFx0XHRcdFx0XHRcdFx0RFBHbG9iYWwuaGVhZFRlbXBsYXRlK1xuXHRcdFx0XHRcdFx0XHRcdFx0RFBHbG9iYWwuY29udFRlbXBsYXRlK1xuXHRcdFx0XHRcdFx0XHRcdFx0RFBHbG9iYWwuZm9vdFRlbXBsYXRlK1xuXHRcdFx0XHRcdFx0XHRcdCc8L3RhYmxlPicrXG5cdFx0XHRcdFx0XHRcdCc8L2Rpdj4nK1xuXHRcdFx0XHRcdFx0XHQnPGRpdiBjbGFzcz1cImRhdGVwaWNrZXItY2VudHVyaWVzXCI+Jytcblx0XHRcdFx0XHRcdFx0XHQnPHRhYmxlIGNsYXNzPVwidGFibGUtY29uZGVuc2VkXCI+Jytcblx0XHRcdFx0XHRcdFx0XHRcdERQR2xvYmFsLmhlYWRUZW1wbGF0ZStcblx0XHRcdFx0XHRcdFx0XHRcdERQR2xvYmFsLmNvbnRUZW1wbGF0ZStcblx0XHRcdFx0XHRcdFx0XHRcdERQR2xvYmFsLmZvb3RUZW1wbGF0ZStcblx0XHRcdFx0XHRcdFx0XHQnPC90YWJsZT4nK1xuXHRcdFx0XHRcdFx0XHQnPC9kaXY+Jytcblx0XHRcdFx0XHRcdCc8L2Rpdj4nO1xuXG5cdCQuZm4uZGF0ZXBpY2tlci5EUEdsb2JhbCA9IERQR2xvYmFsO1xuXG5cblx0LyogREFURVBJQ0tFUiBOTyBDT05GTElDVFxuXHQqID09PT09PT09PT09PT09PT09PT0gKi9cblxuXHQkLmZuLmRhdGVwaWNrZXIubm9Db25mbGljdCA9IGZ1bmN0aW9uKCl7XG5cdFx0JC5mbi5kYXRlcGlja2VyID0gb2xkO1xuXHRcdHJldHVybiB0aGlzO1xuXHR9O1xuXG5cdC8qIERBVEVQSUNLRVIgVkVSU0lPTlxuXHQgKiA9PT09PT09PT09PT09PT09PT09ICovXG5cdCQuZm4uZGF0ZXBpY2tlci52ZXJzaW9uID0gJzEuOC4wJztcblxuXHQkLmZuLmRhdGVwaWNrZXIuZGVwcmVjYXRlZCA9IGZ1bmN0aW9uKG1zZyl7XG5cdFx0dmFyIGNvbnNvbGUgPSB3aW5kb3cuY29uc29sZTtcblx0XHRpZiAoY29uc29sZSAmJiBjb25zb2xlLndhcm4pIHtcblx0XHRcdGNvbnNvbGUud2FybignREVQUkVDQVRFRDogJyArIG1zZyk7XG5cdFx0fVxuXHR9O1xuXG5cblx0LyogREFURVBJQ0tFUiBEQVRBLUFQSVxuXHQqID09PT09PT09PT09PT09PT09PSAqL1xuXG5cdCQoZG9jdW1lbnQpLm9uKFxuXHRcdCdmb2N1cy5kYXRlcGlja2VyLmRhdGEtYXBpIGNsaWNrLmRhdGVwaWNrZXIuZGF0YS1hcGknLFxuXHRcdCdbZGF0YS1wcm92aWRlPVwiZGF0ZXBpY2tlclwiXScsXG5cdFx0ZnVuY3Rpb24oZSl7XG5cdFx0XHR2YXIgJHRoaXMgPSAkKHRoaXMpO1xuXHRcdFx0aWYgKCR0aGlzLmRhdGEoJ2RhdGVwaWNrZXInKSlcblx0XHRcdFx0cmV0dXJuO1xuXHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xuXHRcdFx0Ly8gY29tcG9uZW50IGNsaWNrIHJlcXVpcmVzIHVzIHRvIGV4cGxpY2l0bHkgc2hvdyBpdFxuXHRcdFx0ZGF0ZXBpY2tlclBsdWdpbi5jYWxsKCR0aGlzLCAnc2hvdycpO1xuXHRcdH1cblx0KTtcblx0JChmdW5jdGlvbigpe1xuXHRcdGRhdGVwaWNrZXJQbHVnaW4uY2FsbCgkKCdbZGF0YS1wcm92aWRlPVwiZGF0ZXBpY2tlci1pbmxpbmVcIl0nKSk7XG5cdH0pO1xuXG59KSk7XG4iLCJpbXBvcnQgbW9tZW50IGZyb20gJ21vbWVudCc7XG5cbihmdW5jdGlvbiAoJCwgbW9tZW50KSB7XG4gICBjb25zdCBwbHVnaW5OYW1lID0gXCJib290c3RyYXBNYXRlcmlhbERhdGVQaWNrZXJcIjtcbiAgIGNvbnN0IHBsdWdpbkRhdGFOYW1lID0gXCJwbHVnaW5fXCIgKyBwbHVnaW5OYW1lO1xuXG4gICBtb21lbnQubG9jYWxlKCdmcicpO1xuXG4gICBmdW5jdGlvbiBQbHVnaW4oZWxlbWVudCwgb3B0aW9ucykge1xuICAgICAgdGhpcy5jdXJyZW50VmlldyA9IDA7XG4gICAgICB0aGlzLm1pbkRhdGU7XG4gICAgICB0aGlzLm1heERhdGU7XG4gICAgICB0aGlzLl9hdHRhY2hlZEV2ZW50cyA9IFtdO1xuICAgICAgdGhpcy5lbGVtZW50ID0gZWxlbWVudDtcbiAgICAgIHRoaXMuJGVsZW1lbnQgPSAkKGVsZW1lbnQpO1xuICAgICAgdGhpcy5wYXJhbXMgPSB7XG4gICAgICAgICBkYXRlOiB0cnVlLFxuICAgICAgICAgdGltZTogdHJ1ZSxcbiAgICAgICAgIGZvcm1hdDogJ1lZWVktTU0tREQnLFxuICAgICAgICAgbWluRGF0ZTogbnVsbCxcbiAgICAgICAgIG1heERhdGU6IG51bGwsXG4gICAgICAgICBjdXJyZW50RGF0ZTogbnVsbCxcbiAgICAgICAgIGxhbmc6ICdmcicsXG4gICAgICAgICB3ZWVrU3RhcnQ6IDAsXG4gICAgICAgICBzaG9ydFRpbWU6IGZhbHNlLFxuICAgICAgICAgY2xlYXJCdXR0b246IGZhbHNlLFxuICAgICAgICAgbm93QnV0dG9uOiBmYWxzZSxcbiAgICAgICAgIGNhbmNlbFRleHQ6ICdBbm51bGVyJyxcbiAgICAgICAgIG9rVGV4dDogJ09LJyxcbiAgICAgICAgIGNsZWFyVGV4dDogJ0VmZmFjZXInLFxuICAgICAgICAgbm93VGV4dDogJ05vdycsXG4gICAgICAgICBzd2l0Y2hPbkNsaWNrOiBmYWxzZVxuICAgICAgfTtcbiAgICAgIHRoaXMucGFyYW1zID0gJC5mbi5leHRlbmQodGhpcy5wYXJhbXMsIG9wdGlvbnMpO1xuXG4gICAgICB0aGlzLm5hbWUgPSBcImR0cF9cIiArIHRoaXMuc2V0TmFtZSgpO1xuICAgICAgdGhpcy4kZWxlbWVudC5hdHRyKFwiZGF0YS1kdHBcIiwgdGhpcy5uYW1lKTtcblxuICAgICAgbW9tZW50LmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKTtcblxuICAgICAgdGhpcy5pbml0KCk7XG4gICB9XG5cbiAgICQuZm5bcGx1Z2luTmFtZV0gPSBmdW5jdGlvbiAob3B0aW9ucywgcCkge1xuICAgICAgdGhpcy5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgIGlmICghJC5kYXRhKHRoaXMsIHBsdWdpbkRhdGFOYW1lKSkge1xuICAgICAgICAgICAgJC5kYXRhKHRoaXMsIHBsdWdpbkRhdGFOYW1lLCBuZXcgUGx1Z2luKHRoaXMsIG9wdGlvbnMpKTtcbiAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICBpZiAodHlwZW9mICgkLmRhdGEodGhpcywgcGx1Z2luRGF0YU5hbWUpW29wdGlvbnNdKSA9PT0gJ2Z1bmN0aW9uJykge1xuICAgICAgICAgICAgICAgJC5kYXRhKHRoaXMsIHBsdWdpbkRhdGFOYW1lKVtvcHRpb25zXShwKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGlmIChvcHRpb25zID09PSAnZGVzdHJveScpIHtcbiAgICAgICAgICAgICAgIGRlbGV0ZSAkLmRhdGEodGhpcywgcGx1Z2luRGF0YU5hbWUpO1xuICAgICAgICAgICAgfVxuICAgICAgICAgfVxuICAgICAgfSk7XG4gICAgICByZXR1cm4gdGhpcztcbiAgIH07XG5cbiAgIFBsdWdpbi5wcm90b3R5cGUgPVxuICAgICAgIHtcbiAgICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgdGhpcy5pbml0RGF5cygpO1xuICAgICAgICAgICAgIHRoaXMuaW5pdERhdGVzKCk7XG5cbiAgICAgICAgICAgICB0aGlzLmluaXRUZW1wbGF0ZSgpO1xuXG4gICAgICAgICAgICAgdGhpcy5pbml0QnV0dG9ucygpO1xuXG4gICAgICAgICAgICAgdGhpcy5fYXR0YWNoRXZlbnQoJCh3aW5kb3cpLCAncmVzaXplJywgdGhpcy5fY2VudGVyQm94LmJpbmQodGhpcykpO1xuICAgICAgICAgICAgIHRoaXMuX2F0dGFjaEV2ZW50KHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1jb250ZW50JyksICdjbGljaycsIHRoaXMuX29uRWxlbWVudENsaWNrLmJpbmQodGhpcykpO1xuICAgICAgICAgICAgIHRoaXMuX2F0dGFjaEV2ZW50KHRoaXMuJGR0cEVsZW1lbnQsICdjbGljaycsIHRoaXMuX29uQmFja2dyb3VuZENsaWNrLmJpbmQodGhpcykpO1xuICAgICAgICAgICAgIHRoaXMuX2F0dGFjaEV2ZW50KHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1jbG9zZSA+IGEnKSwgJ2NsaWNrJywgdGhpcy5fb25DbG9zZUNsaWNrLmJpbmQodGhpcykpO1xuICAgICAgICAgICAgIHRoaXMuX2F0dGFjaEV2ZW50KHRoaXMuJGVsZW1lbnQsICdmb2N1cycsIHRoaXMuX29uRm9jdXMuYmluZCh0aGlzKSk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBpbml0RGF5czogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgIHRoaXMuZGF5cyA9IFtdO1xuICAgICAgICAgICAgIGZvciAodmFyIGkgPSB0aGlzLnBhcmFtcy53ZWVrU3RhcnQ7IHRoaXMuZGF5cy5sZW5ndGggPCA3OyBpKyspIHtcbiAgICAgICAgICAgICAgICBpZiAoaSA+IDYpIHtcbiAgICAgICAgICAgICAgICAgICBpID0gMDtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgdGhpcy5kYXlzLnB1c2goaS50b1N0cmluZygpKTtcbiAgICAgICAgICAgICB9XG4gICAgICAgICAgfSxcbiAgICAgICAgICBpbml0RGF0ZXM6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICBpZiAodGhpcy4kZWxlbWVudC52YWwoKS5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICAgICAgaWYgKHR5cGVvZiAodGhpcy5wYXJhbXMuZm9ybWF0KSAhPT0gJ3VuZGVmaW5lZCcgJiYgdGhpcy5wYXJhbXMuZm9ybWF0ICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgdGhpcy5jdXJyZW50RGF0ZSA9IG1vbWVudCh0aGlzLiRlbGVtZW50LnZhbCgpLCB0aGlzLnBhcmFtcy5mb3JtYXQpLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKTtcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgIHRoaXMuY3VycmVudERhdGUgPSBtb21lbnQodGhpcy4kZWxlbWVudC52YWwoKSkubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIGlmICh0eXBlb2YgKHRoaXMuJGVsZW1lbnQuYXR0cigndmFsdWUnKSkgIT09ICd1bmRlZmluZWQnICYmIHRoaXMuJGVsZW1lbnQuYXR0cigndmFsdWUnKSAhPT0gbnVsbCAmJiB0aGlzLiRlbGVtZW50LmF0dHIoJ3ZhbHVlJykgIT09IFwiXCIpIHtcbiAgICAgICAgICAgICAgICAgICBpZiAodHlwZW9mICh0aGlzLiRlbGVtZW50LmF0dHIoJ3ZhbHVlJykpID09PSAnc3RyaW5nJykge1xuICAgICAgICAgICAgICAgICAgICAgIGlmICh0eXBlb2YgKHRoaXMucGFyYW1zLmZvcm1hdCkgIT09ICd1bmRlZmluZWQnICYmIHRoaXMucGFyYW1zLmZvcm1hdCAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgIHRoaXMuY3VycmVudERhdGUgPSBtb21lbnQodGhpcy4kZWxlbWVudC5hdHRyKCd2YWx1ZScpLCB0aGlzLnBhcmFtcy5mb3JtYXQpLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKTtcbiAgICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgICAgIHRoaXMuY3VycmVudERhdGUgPSBtb21lbnQodGhpcy4kZWxlbWVudC5hdHRyKCd2YWx1ZScpKS5sb2NhbGUodGhpcy5wYXJhbXMubGFuZyk7XG4gICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgIGlmICh0eXBlb2YgKHRoaXMucGFyYW1zLmN1cnJlbnREYXRlKSAhPT0gJ3VuZGVmaW5lZCcgJiYgdGhpcy5wYXJhbXMuY3VycmVudERhdGUgIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgICBpZiAodHlwZW9mICh0aGlzLnBhcmFtcy5jdXJyZW50RGF0ZSkgPT09ICdzdHJpbmcnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHR5cGVvZiAodGhpcy5wYXJhbXMuZm9ybWF0KSAhPT0gJ3VuZGVmaW5lZCcgJiYgdGhpcy5wYXJhbXMuZm9ybWF0ICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhpcy5jdXJyZW50RGF0ZSA9IG1vbWVudCh0aGlzLnBhcmFtcy5jdXJyZW50RGF0ZSwgdGhpcy5wYXJhbXMuZm9ybWF0KS5sb2NhbGUodGhpcy5wYXJhbXMubGFuZyk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlID0gbW9tZW50KHRoaXMucGFyYW1zLmN1cnJlbnREYXRlKS5sb2NhbGUodGhpcy5wYXJhbXMubGFuZyk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHR5cGVvZiAodGhpcy5wYXJhbXMuY3VycmVudERhdGUuaXNWYWxpZCkgPT09ICd1bmRlZmluZWQnIHx8IHR5cGVvZiAodGhpcy5wYXJhbXMuY3VycmVudERhdGUuaXNWYWxpZCkgIT09ICdmdW5jdGlvbicpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgeCA9IHRoaXMucGFyYW1zLmN1cnJlbnREYXRlLmdldFRpbWUoKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlID0gbW9tZW50KHgsIFwieFwiKS5sb2NhbGUodGhpcy5wYXJhbXMubGFuZyk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlID0gdGhpcy5wYXJhbXMuY3VycmVudERhdGU7XG4gICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICB0aGlzLiRlbGVtZW50LnZhbCh0aGlzLmN1cnJlbnREYXRlLmZvcm1hdCh0aGlzLnBhcmFtcy5mb3JtYXQpKTtcbiAgICAgICAgICAgICAgICAgICB9IGVsc2VcbiAgICAgICAgICAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlID0gbW9tZW50KCk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgIGlmICh0eXBlb2YgKHRoaXMucGFyYW1zLm1pbkRhdGUpICE9PSAndW5kZWZpbmVkJyAmJiB0aGlzLnBhcmFtcy5taW5EYXRlICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgaWYgKHR5cGVvZiAodGhpcy5wYXJhbXMubWluRGF0ZSkgPT09ICdzdHJpbmcnKSB7XG4gICAgICAgICAgICAgICAgICAgaWYgKHR5cGVvZiAodGhpcy5wYXJhbXMuZm9ybWF0KSAhPT0gJ3VuZGVmaW5lZCcgJiYgdGhpcy5wYXJhbXMuZm9ybWF0ICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgdGhpcy5taW5EYXRlID0gbW9tZW50KHRoaXMucGFyYW1zLm1pbkRhdGUsIHRoaXMucGFyYW1zLmZvcm1hdCkubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpO1xuICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgdGhpcy5taW5EYXRlID0gbW9tZW50KHRoaXMucGFyYW1zLm1pbkRhdGUpLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKTtcbiAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICBpZiAodHlwZW9mICh0aGlzLnBhcmFtcy5taW5EYXRlLmlzVmFsaWQpID09PSAndW5kZWZpbmVkJyB8fCB0eXBlb2YgKHRoaXMucGFyYW1zLm1pbkRhdGUuaXNWYWxpZCkgIT09ICdmdW5jdGlvbicpIHtcbiAgICAgICAgICAgICAgICAgICAgICB2YXIgeCA9IHRoaXMucGFyYW1zLm1pbkRhdGUuZ2V0VGltZSgpO1xuICAgICAgICAgICAgICAgICAgICAgIHRoaXMubWluRGF0ZSA9IG1vbWVudCh4LCBcInhcIikubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpO1xuICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgdGhpcy5taW5EYXRlID0gdGhpcy5wYXJhbXMubWluRGF0ZTtcbiAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgIH0gZWxzZSBpZiAodGhpcy5wYXJhbXMubWluRGF0ZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgICAgIHRoaXMubWluRGF0ZSA9IG51bGw7XG4gICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgaWYgKHR5cGVvZiAodGhpcy5wYXJhbXMubWF4RGF0ZSkgIT09ICd1bmRlZmluZWQnICYmIHRoaXMucGFyYW1zLm1heERhdGUgIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICBpZiAodHlwZW9mICh0aGlzLnBhcmFtcy5tYXhEYXRlKSA9PT0gJ3N0cmluZycpIHtcbiAgICAgICAgICAgICAgICAgICBpZiAodHlwZW9mICh0aGlzLnBhcmFtcy5mb3JtYXQpICE9PSAndW5kZWZpbmVkJyAmJiB0aGlzLnBhcmFtcy5mb3JtYXQgIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgICB0aGlzLm1heERhdGUgPSBtb21lbnQodGhpcy5wYXJhbXMubWF4RGF0ZSwgdGhpcy5wYXJhbXMuZm9ybWF0KS5sb2NhbGUodGhpcy5wYXJhbXMubGFuZyk7XG4gICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICB0aGlzLm1heERhdGUgPSBtb21lbnQodGhpcy5wYXJhbXMubWF4RGF0ZSkubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpO1xuICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgIGlmICh0eXBlb2YgKHRoaXMucGFyYW1zLm1heERhdGUuaXNWYWxpZCkgPT09ICd1bmRlZmluZWQnIHx8IHR5cGVvZiAodGhpcy5wYXJhbXMubWF4RGF0ZS5pc1ZhbGlkKSAhPT0gJ2Z1bmN0aW9uJykge1xuICAgICAgICAgICAgICAgICAgICAgIHZhciB4ID0gdGhpcy5wYXJhbXMubWF4RGF0ZS5nZXRUaW1lKCk7XG4gICAgICAgICAgICAgICAgICAgICAgdGhpcy5tYXhEYXRlID0gbW9tZW50KHgsIFwieFwiKS5sb2NhbGUodGhpcy5wYXJhbXMubGFuZyk7XG4gICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICB0aGlzLm1heERhdGUgPSB0aGlzLnBhcmFtcy5tYXhEYXRlO1xuICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgfSBlbHNlIGlmICh0aGlzLnBhcmFtcy5tYXhEYXRlID09PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgdGhpcy5tYXhEYXRlID0gbnVsbDtcbiAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICBpZiAoIXRoaXMuaXNBZnRlck1pbkRhdGUodGhpcy5jdXJyZW50RGF0ZSkpIHtcbiAgICAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlID0gbW9tZW50KHRoaXMubWluRGF0ZSk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgICAgIGlmICghdGhpcy5pc0JlZm9yZU1heERhdGUodGhpcy5jdXJyZW50RGF0ZSkpIHtcbiAgICAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlID0gbW9tZW50KHRoaXMubWF4RGF0ZSk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgIH0sXG4gICAgICAgICAgaW5pdFRlbXBsYXRlOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgdGhpcy50ZW1wbGF0ZSA9ICc8ZGl2IGNsYXNzPVwiZHRwIGhpZGRlblwiIGlkPVwiJyArIHRoaXMubmFtZSArICdcIj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJkdHAtY29udGVudFwiPicgK1xuICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cImR0cC1kYXRlLXZpZXdcIj4nICtcbiAgICAgICAgICAgICAgICAgJzxoZWFkZXIgY2xhc3M9XCJkdHAtaGVhZGVyXCI+JyArXG4gICAgICAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwiZHRwLWFjdHVhbC1kYXlcIj5MdW5kaTwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cImR0cC1jbG9zZVwiPjxhIGhyZWY9XCJqYXZhc2NyaXB0OnZvaWQoMCk7XCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29uc1wiPmNsZWFyPC9pPjwvPC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICc8L2hlYWRlcj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJkdHAtZGF0ZSBoaWRkZW5cIj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXY+JyArXG4gICAgICAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwibGVmdCBjZW50ZXIgcDEwXCI+JyArXG4gICAgICAgICAgICAgICAgICc8YSBocmVmPVwiamF2YXNjcmlwdDp2b2lkKDApO1wiIGNsYXNzPVwiZHRwLXNlbGVjdC1tb250aC1iZWZvcmVcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zXCI+Y2hldnJvbl9sZWZ0PC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAgJzwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cImR0cC1hY3R1YWwtbW9udGggcDgwXCI+TUFSPC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwicmlnaHQgY2VudGVyIHAxMFwiPicgK1xuICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cImphdmFzY3JpcHQ6dm9pZCgwKTtcIiBjbGFzcz1cImR0cC1zZWxlY3QtbW9udGgtYWZ0ZXJcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zXCI+Y2hldnJvbl9yaWdodDwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICc8L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJjbGVhcmZpeFwiPjwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwiZHRwLWFjdHVhbC1udW1cIj4xMzwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPGRpdj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJsZWZ0IGNlbnRlciBwMTBcIj4nICtcbiAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCJqYXZhc2NyaXB0OnZvaWQoMCk7XCIgY2xhc3M9XCJkdHAtc2VsZWN0LXllYXItYmVmb3JlXCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29uc1wiPmNoZXZyb25fbGVmdDwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICc8L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJkdHAtYWN0dWFsLXllYXIgcDgwXCI+MjAxNDwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cInJpZ2h0IGNlbnRlciBwMTBcIj4nICtcbiAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCJqYXZhc2NyaXB0OnZvaWQoMCk7XCIgY2xhc3M9XCJkdHAtc2VsZWN0LXllYXItYWZ0ZXJcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zXCI+Y2hldnJvbl9yaWdodDwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICc8L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJjbGVhcmZpeFwiPjwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICc8L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJkdHAtdGltZSBoaWRkZW5cIj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJkdHAtYWN0dWFsLW1heHRpbWVcIj4yMzo1NTwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwiZHRwLXBpY2tlclwiPicgK1xuICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cImR0cC1waWNrZXItY2FsZW5kYXJcIj48L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJkdHAtcGlja2VyLWRhdGV0aW1lIGhpZGRlblwiPicgK1xuICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cImR0cC1hY3R1YWwtbWVyaWRpZW5cIj4nICtcbiAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJsZWZ0IHAyMFwiPicgK1xuICAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJkdHAtbWVyaWRpZW4tYW1cIiBocmVmPVwiamF2YXNjcmlwdDp2b2lkKDApO1wiPkFNPC9hPicgK1xuICAgICAgICAgICAgICAgICAnPC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwiZHRwLWFjdHVhbC10aW1lIHA2MFwiPjwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cInJpZ2h0IHAyMFwiPicgK1xuICAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJkdHAtbWVyaWRpZW4tcG1cIiBocmVmPVwiamF2YXNjcmlwdDp2b2lkKDApO1wiPlBNPC9hPicgK1xuICAgICAgICAgICAgICAgICAnPC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwiY2xlYXJmaXhcIj48L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgJzwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPGRpdiBpZD1cImR0cC1zdmctY2xvY2tcIj4nICtcbiAgICAgICAgICAgICAgICAgJzwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICc8L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgJzwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cImR0cC1idXR0b25zXCI+JyArXG4gICAgICAgICAgICAgICAgICc8YnV0dG9uIGNsYXNzPVwiZHRwLWJ0bi1ub3cgYnRuIGJ0bi1mbGF0IGhpZGRlblwiPicgKyB0aGlzLnBhcmFtcy5ub3dUZXh0ICsgJzwvYnV0dG9uPicgK1xuICAgICAgICAgICAgICAgICAnPGJ1dHRvbiBjbGFzcz1cImR0cC1idG4tY2xlYXIgYnRuIGJ0bi1mbGF0IGhpZGRlblwiPicgKyB0aGlzLnBhcmFtcy5jbGVhclRleHQgKyAnPC9idXR0b24+JyArXG4gICAgICAgICAgICAgICAgICc8YnV0dG9uIGNsYXNzPVwiZHRwLWJ0bi1jYW5jZWwgYnRuIGJ0bi1mbGF0XCI+JyArIHRoaXMucGFyYW1zLmNhbmNlbFRleHQgKyAnPC9idXR0b24+JyArXG4gICAgICAgICAgICAgICAgICc8YnV0dG9uIGNsYXNzPVwiZHRwLWJ0bi1vayBidG4gYnRuLWZsYXRcIj4nICsgdGhpcy5wYXJhbXMub2tUZXh0ICsgJzwvYnV0dG9uPicgK1xuICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cImNsZWFyZml4XCI+PC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICc8L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgJzwvZGl2PicgK1xuICAgICAgICAgICAgICAgICAnPC9kaXY+JztcblxuICAgICAgICAgICAgIGlmICgkKCdib2R5JykuZmluZChcIiNcIiArIHRoaXMubmFtZSkubGVuZ3RoIDw9IDApIHtcbiAgICAgICAgICAgICAgICAkKCdib2R5JykuYXBwZW5kKHRoaXMudGVtcGxhdGUpO1xuXG4gICAgICAgICAgICAgICAgaWYgKHRoaXMpXG4gICAgICAgICAgICAgICAgICAgdGhpcy5kdHBFbGVtZW50ID0gJCgnYm9keScpLmZpbmQoXCIjXCIgKyB0aGlzLm5hbWUpO1xuICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQgPSAkKHRoaXMuZHRwRWxlbWVudCk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgIH0sXG4gICAgICAgICAgaW5pdEJ1dHRvbnM6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICB0aGlzLl9hdHRhY2hFdmVudCh0aGlzLiRkdHBFbGVtZW50LmZpbmQoJy5kdHAtYnRuLWNhbmNlbCcpLCAnY2xpY2snLCB0aGlzLl9vbkNhbmNlbENsaWNrLmJpbmQodGhpcykpO1xuICAgICAgICAgICAgIHRoaXMuX2F0dGFjaEV2ZW50KHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1idG4tb2snKSwgJ2NsaWNrJywgdGhpcy5fb25PS0NsaWNrLmJpbmQodGhpcykpO1xuICAgICAgICAgICAgIHRoaXMuX2F0dGFjaEV2ZW50KHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnYS5kdHAtc2VsZWN0LW1vbnRoLWJlZm9yZScpLCAnY2xpY2snLCB0aGlzLl9vbk1vbnRoQmVmb3JlQ2xpY2suYmluZCh0aGlzKSk7XG4gICAgICAgICAgICAgdGhpcy5fYXR0YWNoRXZlbnQodGhpcy4kZHRwRWxlbWVudC5maW5kKCdhLmR0cC1zZWxlY3QtbW9udGgtYWZ0ZXInKSwgJ2NsaWNrJywgdGhpcy5fb25Nb250aEFmdGVyQ2xpY2suYmluZCh0aGlzKSk7XG4gICAgICAgICAgICAgdGhpcy5fYXR0YWNoRXZlbnQodGhpcy4kZHRwRWxlbWVudC5maW5kKCdhLmR0cC1zZWxlY3QteWVhci1iZWZvcmUnKSwgJ2NsaWNrJywgdGhpcy5fb25ZZWFyQmVmb3JlQ2xpY2suYmluZCh0aGlzKSk7XG4gICAgICAgICAgICAgdGhpcy5fYXR0YWNoRXZlbnQodGhpcy4kZHRwRWxlbWVudC5maW5kKCdhLmR0cC1zZWxlY3QteWVhci1hZnRlcicpLCAnY2xpY2snLCB0aGlzLl9vblllYXJBZnRlckNsaWNrLmJpbmQodGhpcykpO1xuXG4gICAgICAgICAgICAgaWYgKHRoaXMucGFyYW1zLmNsZWFyQnV0dG9uID09PSB0cnVlKSB7XG4gICAgICAgICAgICAgICAgdGhpcy5fYXR0YWNoRXZlbnQodGhpcy4kZHRwRWxlbWVudC5maW5kKCcuZHRwLWJ0bi1jbGVhcicpLCAnY2xpY2snLCB0aGlzLl9vbkNsZWFyQ2xpY2suYmluZCh0aGlzKSk7XG4gICAgICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCcuZHRwLWJ0bi1jbGVhcicpLnJlbW92ZUNsYXNzKCdoaWRkZW4nKTtcbiAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICBpZiAodGhpcy5wYXJhbXMubm93QnV0dG9uID09PSB0cnVlKSB7XG4gICAgICAgICAgICAgICAgdGhpcy5fYXR0YWNoRXZlbnQodGhpcy4kZHRwRWxlbWVudC5maW5kKCcuZHRwLWJ0bi1ub3cnKSwgJ2NsaWNrJywgdGhpcy5fb25Ob3dDbGljay5iaW5kKHRoaXMpKTtcbiAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJy5kdHAtYnRuLW5vdycpLnJlbW92ZUNsYXNzKCdoaWRkZW4nKTtcbiAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICBpZiAoKHRoaXMucGFyYW1zLm5vd0J1dHRvbiA9PT0gdHJ1ZSkgJiYgKHRoaXMucGFyYW1zLmNsZWFyQnV0dG9uID09PSB0cnVlKSkge1xuICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1idG4tY2xlYXIsIC5kdHAtYnRuLW5vdywgLmR0cC1idG4tY2FuY2VsLCAuZHRwLWJ0bi1vaycpLmFkZENsYXNzKCdidG4teHMnKTtcbiAgICAgICAgICAgICB9IGVsc2UgaWYgKCh0aGlzLnBhcmFtcy5ub3dCdXR0b24gPT09IHRydWUpIHx8ICh0aGlzLnBhcmFtcy5jbGVhckJ1dHRvbiA9PT0gdHJ1ZSkpIHtcbiAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJy5kdHAtYnRuLWNsZWFyLCAuZHRwLWJ0bi1ub3csIC5kdHAtYnRuLWNhbmNlbCwgLmR0cC1idG4tb2snKS5hZGRDbGFzcygnYnRuLXNtJyk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgIH0sXG4gICAgICAgICAgaW5pdE1lcmlkaWVuQnV0dG9uczogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnYS5kdHAtbWVyaWRpZW4tYW0nKS5vZmYoJ2NsaWNrJykub24oJ2NsaWNrJywgdGhpcy5fb25TZWxlY3RBTS5iaW5kKHRoaXMpKTtcbiAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJ2EuZHRwLW1lcmlkaWVuLXBtJykub2ZmKCdjbGljaycpLm9uKCdjbGljaycsIHRoaXMuX29uU2VsZWN0UE0uYmluZCh0aGlzKSk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBpbml0RGF0ZTogZnVuY3Rpb24gKGQpIHtcbiAgICAgICAgICAgICB0aGlzLmN1cnJlbnRWaWV3ID0gMDtcblxuICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1waWNrZXItY2FsZW5kYXInKS5yZW1vdmVDbGFzcygnaGlkZGVuJyk7XG4gICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCcuZHRwLXBpY2tlci1kYXRldGltZScpLmFkZENsYXNzKCdoaWRkZW4nKTtcblxuICAgICAgICAgICAgIHZhciBfZGF0ZSA9ICgodHlwZW9mICh0aGlzLmN1cnJlbnREYXRlKSAhPT0gJ3VuZGVmaW5lZCcgJiYgdGhpcy5jdXJyZW50RGF0ZSAhPT0gbnVsbCkgPyB0aGlzLmN1cnJlbnREYXRlIDogbnVsbCk7XG4gICAgICAgICAgICAgdmFyIF9jYWxlbmRhciA9IHRoaXMuZ2VuZXJhdGVDYWxlbmRhcih0aGlzLmN1cnJlbnREYXRlKTtcblxuICAgICAgICAgICAgIGlmICh0eXBlb2YgKF9jYWxlbmRhci53ZWVrKSAhPT0gJ3VuZGVmaW5lZCcgJiYgdHlwZW9mIChfY2FsZW5kYXIuZGF5cykgIT09ICd1bmRlZmluZWQnKSB7XG4gICAgICAgICAgICAgICAgdmFyIF90ZW1wbGF0ZSA9IHRoaXMuY29uc3RydWN0SFRNTENhbGVuZGFyKF9kYXRlLCBfY2FsZW5kYXIpO1xuXG4gICAgICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCdhLmR0cC1zZWxlY3QtZGF5Jykub2ZmKCdjbGljaycpO1xuICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1waWNrZXItY2FsZW5kYXInKS5odG1sKF90ZW1wbGF0ZSk7XG5cbiAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJ2EuZHRwLXNlbGVjdC1kYXknKS5vbignY2xpY2snLCB0aGlzLl9vblNlbGVjdERhdGUuYmluZCh0aGlzKSk7XG5cbiAgICAgICAgICAgICAgICB0aGlzLnRvZ2dsZUJ1dHRvbnMoX2RhdGUpO1xuICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgIHRoaXMuX2NlbnRlckJveCgpO1xuICAgICAgICAgICAgIHRoaXMuc2hvd0RhdGUoX2RhdGUpO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgaW5pdEhvdXJzOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgdGhpcy5jdXJyZW50VmlldyA9IDE7XG5cbiAgICAgICAgICAgICB0aGlzLnNob3dUaW1lKHRoaXMuY3VycmVudERhdGUpO1xuICAgICAgICAgICAgIHRoaXMuaW5pdE1lcmlkaWVuQnV0dG9ucygpO1xuXG4gICAgICAgICAgICAgaWYgKHRoaXMuY3VycmVudERhdGUuaG91cigpIDwgMTIpIHtcbiAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJ2EuZHRwLW1lcmlkaWVuLWFtJykuY2xpY2soKTtcbiAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnYS5kdHAtbWVyaWRpZW4tcG0nKS5jbGljaygpO1xuICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgIHZhciBoRm9ybWF0ID0gKCh0aGlzLnBhcmFtcy5zaG9ydFRpbWUpID8gJ2gnIDogJ0gnKTtcblxuICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1waWNrZXItZGF0ZXRpbWUnKS5yZW1vdmVDbGFzcygnaGlkZGVuJyk7XG4gICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCcuZHRwLXBpY2tlci1jYWxlbmRhcicpLmFkZENsYXNzKCdoaWRkZW4nKTtcblxuICAgICAgICAgICAgIHZhciBzdmdDbG9ja0VsZW1lbnQgPSB0aGlzLmNyZWF0ZVNWR0Nsb2NrKHRydWUpO1xuXG4gICAgICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCAxMjsgaSsrKSB7XG4gICAgICAgICAgICAgICAgdmFyIHggPSAtKDE2MiAqIChNYXRoLnNpbigtTWF0aC5QSSAqIDIgKiAoaSAvIDEyKSkpKTtcbiAgICAgICAgICAgICAgICB2YXIgeSA9IC0oMTYyICogKE1hdGguY29zKC1NYXRoLlBJICogMiAqIChpIC8gMTIpKSkpO1xuXG4gICAgICAgICAgICAgICAgdmFyIGZpbGwgPSAoKHRoaXMuY3VycmVudERhdGUuZm9ybWF0KGhGb3JtYXQpID09IGkpID8gXCIjMDA3ZDcyXCIgOiAndHJhbnNwYXJlbnQnKTtcbiAgICAgICAgICAgICAgICB2YXIgY29sb3IgPSAoKHRoaXMuY3VycmVudERhdGUuZm9ybWF0KGhGb3JtYXQpID09IGkpID8gXCIjZmZmXCIgOiAnIzAwMCcpO1xuXG4gICAgICAgICAgICAgICAgdmFyIHN2Z0hvdXJDaXJjbGUgPSB0aGlzLmNyZWF0ZVNWR0VsZW1lbnQoXCJjaXJjbGVcIiwge1xuICAgICAgICAgICAgICAgICAgICdpZCc6ICdoLScgKyBpLFxuICAgICAgICAgICAgICAgICAgICdjbGFzcyc6ICdkdHAtc2VsZWN0LWhvdXInLFxuICAgICAgICAgICAgICAgICAgICdzdHlsZSc6ICdjdXJzb3I6cG9pbnRlcicsXG4gICAgICAgICAgICAgICAgICAgcjogJzMwJyxcbiAgICAgICAgICAgICAgICAgICBjeDogeCxcbiAgICAgICAgICAgICAgICAgICBjeTogeSxcbiAgICAgICAgICAgICAgICAgICBmaWxsOiBmaWxsLFxuICAgICAgICAgICAgICAgICAgICdkYXRhLWhvdXInOiBpXG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICB2YXIgc3ZnSG91clRleHQgPSB0aGlzLmNyZWF0ZVNWR0VsZW1lbnQoXCJ0ZXh0XCIsIHtcbiAgICAgICAgICAgICAgICAgICAnaWQnOiAndGgtJyArIGksXG4gICAgICAgICAgICAgICAgICAgJ2NsYXNzJzogJ2R0cC1zZWxlY3QtaG91ci10ZXh0JyxcbiAgICAgICAgICAgICAgICAgICAndGV4dC1hbmNob3InOiAnbWlkZGxlJyxcbiAgICAgICAgICAgICAgICAgICAnc3R5bGUnOiAnY3Vyc29yOnBvaW50ZXInLFxuICAgICAgICAgICAgICAgICAgICdmb250LXdlaWdodCc6ICdib2xkJyxcbiAgICAgICAgICAgICAgICAgICAnZm9udC1zaXplJzogJzIwJyxcbiAgICAgICAgICAgICAgICAgICB4OiB4LFxuICAgICAgICAgICAgICAgICAgIHk6IHkgKyA3LFxuICAgICAgICAgICAgICAgICAgIGZpbGw6IGNvbG9yLFxuICAgICAgICAgICAgICAgICAgICdkYXRhLWhvdXInOiBpXG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgc3ZnSG91clRleHQudGV4dENvbnRlbnQgPSAoKGkgPT09IDApID8gKCh0aGlzLnBhcmFtcy5zaG9ydFRpbWUpID8gMTIgOiBpKSA6IGkpO1xuXG4gICAgICAgICAgICAgICAgaWYgKCF0aGlzLnRvZ2dsZVRpbWUoaSwgdHJ1ZSkpIHtcbiAgICAgICAgICAgICAgICAgICBzdmdIb3VyQ2lyY2xlLmNsYXNzTmFtZSArPSBcIiBkaXNhYmxlZFwiO1xuICAgICAgICAgICAgICAgICAgIHN2Z0hvdXJUZXh0LmNsYXNzTmFtZSArPSBcIiBkaXNhYmxlZFwiO1xuICAgICAgICAgICAgICAgICAgIHN2Z0hvdXJUZXh0LnNldEF0dHJpYnV0ZSgnZmlsbCcsICcjYmRiZGJkJyk7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICBzdmdIb3VyQ2lyY2xlLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgdGhpcy5fb25TZWxlY3RIb3VyLmJpbmQodGhpcykpO1xuICAgICAgICAgICAgICAgICAgIHN2Z0hvdXJUZXh0LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgdGhpcy5fb25TZWxlY3RIb3VyLmJpbmQodGhpcykpO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIHN2Z0Nsb2NrRWxlbWVudC5hcHBlbmRDaGlsZChzdmdIb3VyQ2lyY2xlKVxuICAgICAgICAgICAgICAgIHN2Z0Nsb2NrRWxlbWVudC5hcHBlbmRDaGlsZChzdmdIb3VyVGV4dClcbiAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICBpZiAoIXRoaXMucGFyYW1zLnNob3J0VGltZSkge1xuICAgICAgICAgICAgICAgIGZvciAodmFyIGkgPSAwOyBpIDwgMTI7IGkrKykge1xuICAgICAgICAgICAgICAgICAgIHZhciB4ID0gLSgxMTAgKiAoTWF0aC5zaW4oLU1hdGguUEkgKiAyICogKGkgLyAxMikpKSk7XG4gICAgICAgICAgICAgICAgICAgdmFyIHkgPSAtKDExMCAqIChNYXRoLmNvcygtTWF0aC5QSSAqIDIgKiAoaSAvIDEyKSkpKTtcblxuICAgICAgICAgICAgICAgICAgIHZhciBmaWxsID0gKCh0aGlzLmN1cnJlbnREYXRlLmZvcm1hdChoRm9ybWF0KSA9PSAoaSArIDEyKSkgPyBcIiMwMDdkNzJcIiA6ICd0cmFuc3BhcmVudCcpO1xuICAgICAgICAgICAgICAgICAgIHZhciBjb2xvciA9ICgodGhpcy5jdXJyZW50RGF0ZS5mb3JtYXQoaEZvcm1hdCkgPT0gKGkgKyAxMikpID8gXCIjZmZmXCIgOiAnIzAwMCcpO1xuXG4gICAgICAgICAgICAgICAgICAgdmFyIHN2Z0hvdXJDaXJjbGUgPSB0aGlzLmNyZWF0ZVNWR0VsZW1lbnQoXCJjaXJjbGVcIiwge1xuICAgICAgICAgICAgICAgICAgICAgICdpZCc6ICdoLScgKyAoaSArIDEyKSxcbiAgICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnZHRwLXNlbGVjdC1ob3VyJyxcbiAgICAgICAgICAgICAgICAgICAgICAnc3R5bGUnOiAnY3Vyc29yOnBvaW50ZXInLFxuICAgICAgICAgICAgICAgICAgICAgIHI6ICczMCcsXG4gICAgICAgICAgICAgICAgICAgICAgY3g6IHgsXG4gICAgICAgICAgICAgICAgICAgICAgY3k6IHksXG4gICAgICAgICAgICAgICAgICAgICAgZmlsbDogZmlsbCxcbiAgICAgICAgICAgICAgICAgICAgICAnZGF0YS1ob3VyJzogKGkgKyAxMilcbiAgICAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgICAgIHZhciBzdmdIb3VyVGV4dCA9IHRoaXMuY3JlYXRlU1ZHRWxlbWVudChcInRleHRcIiwge1xuICAgICAgICAgICAgICAgICAgICAgICdpZCc6ICd0aC0nICsgKGkgKyAxMiksXG4gICAgICAgICAgICAgICAgICAgICAgJ2NsYXNzJzogJ2R0cC1zZWxlY3QtaG91ci10ZXh0JyxcbiAgICAgICAgICAgICAgICAgICAgICAndGV4dC1hbmNob3InOiAnbWlkZGxlJyxcbiAgICAgICAgICAgICAgICAgICAgICAnc3R5bGUnOiAnY3Vyc29yOnBvaW50ZXInLFxuICAgICAgICAgICAgICAgICAgICAgICdmb250LXdlaWdodCc6ICdib2xkJyxcbiAgICAgICAgICAgICAgICAgICAgICAnZm9udC1zaXplJzogJzIyJyxcbiAgICAgICAgICAgICAgICAgICAgICB4OiB4LFxuICAgICAgICAgICAgICAgICAgICAgIHk6IHkgKyA3LFxuICAgICAgICAgICAgICAgICAgICAgIGZpbGw6IGNvbG9yLFxuICAgICAgICAgICAgICAgICAgICAgICdkYXRhLWhvdXInOiAoaSArIDEyKVxuICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgICAgIHN2Z0hvdXJUZXh0LnRleHRDb250ZW50ID0gaSArIDEyO1xuXG4gICAgICAgICAgICAgICAgICAgaWYgKCF0aGlzLnRvZ2dsZVRpbWUoaSArIDEyLCB0cnVlKSkge1xuICAgICAgICAgICAgICAgICAgICAgIHN2Z0hvdXJDaXJjbGUuY2xhc3NOYW1lICs9IFwiIGRpc2FibGVkXCI7XG4gICAgICAgICAgICAgICAgICAgICAgc3ZnSG91clRleHQuY2xhc3NOYW1lICs9IFwiIGRpc2FibGVkXCI7XG4gICAgICAgICAgICAgICAgICAgICAgc3ZnSG91clRleHQuc2V0QXR0cmlidXRlKCdmaWxsJywgJyNiZGJkYmQnKTtcbiAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgIHN2Z0hvdXJDaXJjbGUuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCB0aGlzLl9vblNlbGVjdEhvdXIuYmluZCh0aGlzKSk7XG4gICAgICAgICAgICAgICAgICAgICAgc3ZnSG91clRleHQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCB0aGlzLl9vblNlbGVjdEhvdXIuYmluZCh0aGlzKSk7XG4gICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgc3ZnQ2xvY2tFbGVtZW50LmFwcGVuZENoaWxkKHN2Z0hvdXJDaXJjbGUpXG4gICAgICAgICAgICAgICAgICAgc3ZnQ2xvY2tFbGVtZW50LmFwcGVuZENoaWxkKHN2Z0hvdXJUZXh0KVxuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnYS5kdHAtbWVyaWRpZW4tYW0nKS5hZGRDbGFzcygnaGlkZGVuJyk7XG4gICAgICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCdhLmR0cC1tZXJpZGllbi1wbScpLmFkZENsYXNzKCdoaWRkZW4nKTtcbiAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICB0aGlzLl9jZW50ZXJCb3goKTtcbiAgICAgICAgICB9LFxuICAgICAgICAgIGluaXRNaW51dGVzOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgdGhpcy5jdXJyZW50VmlldyA9IDI7XG5cbiAgICAgICAgICAgICB0aGlzLnNob3dUaW1lKHRoaXMuY3VycmVudERhdGUpO1xuXG4gICAgICAgICAgICAgdGhpcy5pbml0TWVyaWRpZW5CdXR0b25zKCk7XG5cbiAgICAgICAgICAgICBpZiAodGhpcy5jdXJyZW50RGF0ZS5ob3VyKCkgPCAxMikge1xuICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnYS5kdHAtbWVyaWRpZW4tYW0nKS5jbGljaygpO1xuICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCdhLmR0cC1tZXJpZGllbi1wbScpLmNsaWNrKCk7XG4gICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCcuZHRwLXBpY2tlci1jYWxlbmRhcicpLmFkZENsYXNzKCdoaWRkZW4nKTtcbiAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJy5kdHAtcGlja2VyLWRhdGV0aW1lJykucmVtb3ZlQ2xhc3MoJ2hpZGRlbicpO1xuXG4gICAgICAgICAgICAgdmFyIHN2Z0Nsb2NrRWxlbWVudCA9IHRoaXMuY3JlYXRlU1ZHQ2xvY2soZmFsc2UpO1xuXG4gICAgICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCA2MDsgaSsrKSB7XG4gICAgICAgICAgICAgICAgdmFyIHMgPSAoKGkgJSA1ID09PSAwKSA/IDE2MiA6IDE1OCk7XG4gICAgICAgICAgICAgICAgdmFyIHIgPSAoKGkgJSA1ID09PSAwKSA/IDMwIDogMjApO1xuXG4gICAgICAgICAgICAgICAgdmFyIHggPSAtKHMgKiAoTWF0aC5zaW4oLU1hdGguUEkgKiAyICogKGkgLyA2MCkpKSk7XG4gICAgICAgICAgICAgICAgdmFyIHkgPSAtKHMgKiAoTWF0aC5jb3MoLU1hdGguUEkgKiAyICogKGkgLyA2MCkpKSk7XG5cbiAgICAgICAgICAgICAgICB2YXIgY29sb3IgPSAoKHRoaXMuY3VycmVudERhdGUuZm9ybWF0KFwibVwiKSA9PSBpKSA/IFwiIzAwN2Q3MlwiIDogJ3RyYW5zcGFyZW50Jyk7XG5cbiAgICAgICAgICAgICAgICB2YXIgc3ZnTWludXRlQ2lyY2xlID0gdGhpcy5jcmVhdGVTVkdFbGVtZW50KFwiY2lyY2xlXCIsIHtcbiAgICAgICAgICAgICAgICAgICAnaWQnOiAnbS0nICsgaSxcbiAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnZHRwLXNlbGVjdC1taW51dGUnLFxuICAgICAgICAgICAgICAgICAgICdzdHlsZSc6ICdjdXJzb3I6cG9pbnRlcicsXG4gICAgICAgICAgICAgICAgICAgcjogcixcbiAgICAgICAgICAgICAgICAgICBjeDogeCxcbiAgICAgICAgICAgICAgICAgICBjeTogeSxcbiAgICAgICAgICAgICAgICAgICBmaWxsOiBjb2xvcixcbiAgICAgICAgICAgICAgICAgICAnZGF0YS1taW51dGUnOiBpXG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICBpZiAoIXRoaXMudG9nZ2xlVGltZShpLCBmYWxzZSkpIHtcbiAgICAgICAgICAgICAgICAgICBzdmdNaW51dGVDaXJjbGUuY2xhc3NOYW1lICs9IFwiIGRpc2FibGVkXCI7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICBzdmdNaW51dGVDaXJjbGUuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCB0aGlzLl9vblNlbGVjdE1pbnV0ZS5iaW5kKHRoaXMpKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICBzdmdDbG9ja0VsZW1lbnQuYXBwZW5kQ2hpbGQoc3ZnTWludXRlQ2lyY2xlKVxuICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgIGZvciAodmFyIGkgPSAwOyBpIDwgNjA7IGkrKykge1xuICAgICAgICAgICAgICAgIGlmICgoaSAlIDUpID09PSAwKSB7XG4gICAgICAgICAgICAgICAgICAgdmFyIHggPSAtKDE2MiAqIChNYXRoLnNpbigtTWF0aC5QSSAqIDIgKiAoaSAvIDYwKSkpKTtcbiAgICAgICAgICAgICAgICAgICB2YXIgeSA9IC0oMTYyICogKE1hdGguY29zKC1NYXRoLlBJICogMiAqIChpIC8gNjApKSkpO1xuXG4gICAgICAgICAgICAgICAgICAgdmFyIGNvbG9yID0gKCh0aGlzLmN1cnJlbnREYXRlLmZvcm1hdChcIm1cIikgPT0gaSkgPyBcIiNmZmZcIiA6ICcjMDAwJyk7XG5cbiAgICAgICAgICAgICAgICAgICB2YXIgc3ZnTWludXRlVGV4dCA9IHRoaXMuY3JlYXRlU1ZHRWxlbWVudChcInRleHRcIiwge1xuICAgICAgICAgICAgICAgICAgICAgICdpZCc6ICd0bS0nICsgaSxcbiAgICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnZHRwLXNlbGVjdC1taW51dGUtdGV4dCcsXG4gICAgICAgICAgICAgICAgICAgICAgJ3RleHQtYW5jaG9yJzogJ21pZGRsZScsXG4gICAgICAgICAgICAgICAgICAgICAgJ3N0eWxlJzogJ2N1cnNvcjpwb2ludGVyJyxcbiAgICAgICAgICAgICAgICAgICAgICAnZm9udC13ZWlnaHQnOiAnYm9sZCcsXG4gICAgICAgICAgICAgICAgICAgICAgJ2ZvbnQtc2l6ZSc6ICcyMCcsXG4gICAgICAgICAgICAgICAgICAgICAgeDogeCxcbiAgICAgICAgICAgICAgICAgICAgICB5OiB5ICsgNyxcbiAgICAgICAgICAgICAgICAgICAgICBmaWxsOiBjb2xvcixcbiAgICAgICAgICAgICAgICAgICAgICAnZGF0YS1taW51dGUnOiBpXG4gICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgc3ZnTWludXRlVGV4dC50ZXh0Q29udGVudCA9IGk7XG5cbiAgICAgICAgICAgICAgICAgICBpZiAoIXRoaXMudG9nZ2xlVGltZShpLCBmYWxzZSkpIHtcbiAgICAgICAgICAgICAgICAgICAgICBzdmdNaW51dGVUZXh0LmNsYXNzTmFtZSArPSBcIiBkaXNhYmxlZFwiO1xuICAgICAgICAgICAgICAgICAgICAgIHN2Z01pbnV0ZVRleHQuc2V0QXR0cmlidXRlKCdmaWxsJywgJyNiZGJkYmQnKTtcbiAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgIHN2Z01pbnV0ZVRleHQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCB0aGlzLl9vblNlbGVjdE1pbnV0ZS5iaW5kKHRoaXMpKTtcbiAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICBzdmdDbG9ja0VsZW1lbnQuYXBwZW5kQ2hpbGQoc3ZnTWludXRlVGV4dClcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgdGhpcy5fY2VudGVyQm94KCk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBhbmltYXRlSGFuZHM6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICB2YXIgSCA9IHRoaXMuY3VycmVudERhdGUuaG91cigpO1xuICAgICAgICAgICAgIHZhciBNID0gdGhpcy5jdXJyZW50RGF0ZS5taW51dGUoKTtcblxuICAgICAgICAgICAgIHZhciBoaCA9IHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmhvdXItaGFuZCcpO1xuICAgICAgICAgICAgIGhoWzBdLnNldEF0dHJpYnV0ZSgndHJhbnNmb3JtJywgXCJyb3RhdGUoXCIgKyAzNjAgKiBIIC8gMTIgKyBcIilcIik7XG5cbiAgICAgICAgICAgICB2YXIgbWggPSB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJy5taW51dGUtaGFuZCcpO1xuICAgICAgICAgICAgIG1oWzBdLnNldEF0dHJpYnV0ZSgndHJhbnNmb3JtJywgXCJyb3RhdGUoXCIgKyAzNjAgKiBNIC8gNjAgKyBcIilcIik7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBjcmVhdGVTVkdDbG9jazogZnVuY3Rpb24gKGlzSG91cikge1xuICAgICAgICAgICAgIHZhciBobCA9ICgodGhpcy5wYXJhbXMuc2hvcnRUaW1lKSA/IC0xMjAgOiAtOTApO1xuXG4gICAgICAgICAgICAgdmFyIHN2Z0VsZW1lbnQgPSB0aGlzLmNyZWF0ZVNWR0VsZW1lbnQoXCJzdmdcIiwge2NsYXNzOiAnc3ZnLWNsb2NrJywgdmlld0JveDogJzAsMCw0MDAsNDAwJ30pO1xuICAgICAgICAgICAgIHZhciBzdmdHRWxlbWVudCA9IHRoaXMuY3JlYXRlU1ZHRWxlbWVudChcImdcIiwge3RyYW5zZm9ybTogJ3RyYW5zbGF0ZSgyMDAsMjAwKSAnfSk7XG4gICAgICAgICAgICAgdmFyIHN2Z0Nsb2NrRmFjZSA9IHRoaXMuY3JlYXRlU1ZHRWxlbWVudChcImNpcmNsZVwiLCB7XG4gICAgICAgICAgICAgICAgcjogJzE5MicsXG4gICAgICAgICAgICAgICAgZmlsbDogJyNlZWUnLFxuICAgICAgICAgICAgICAgIHN0cm9rZTogJyNiZGJkYmQnLFxuICAgICAgICAgICAgICAgICdzdHJva2Utd2lkdGgnOiAyXG4gICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgdmFyIHN2Z0Nsb2NrQ2VudGVyID0gdGhpcy5jcmVhdGVTVkdFbGVtZW50KFwiY2lyY2xlXCIsIHtyOiAnMTUnLCBmaWxsOiAnIzc1NzU3NSd9KTtcblxuICAgICAgICAgICAgIHN2Z0dFbGVtZW50LmFwcGVuZENoaWxkKHN2Z0Nsb2NrRmFjZSlcblxuICAgICAgICAgICAgIGlmIChpc0hvdXIpIHtcbiAgICAgICAgICAgICAgICB2YXIgc3ZnTWludXRlSGFuZCA9IHRoaXMuY3JlYXRlU1ZHRWxlbWVudChcImxpbmVcIiwge1xuICAgICAgICAgICAgICAgICAgIGNsYXNzOiAnbWludXRlLWhhbmQnLFxuICAgICAgICAgICAgICAgICAgIHgxOiAwLFxuICAgICAgICAgICAgICAgICAgIHkxOiAwLFxuICAgICAgICAgICAgICAgICAgIHgyOiAwLFxuICAgICAgICAgICAgICAgICAgIHkyOiAtMTUwLFxuICAgICAgICAgICAgICAgICAgIHN0cm9rZTogJyNiZGJkYmQnLFxuICAgICAgICAgICAgICAgICAgICdzdHJva2Utd2lkdGgnOiAyXG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgdmFyIHN2Z0hvdXJIYW5kID0gdGhpcy5jcmVhdGVTVkdFbGVtZW50KFwibGluZVwiLCB7XG4gICAgICAgICAgICAgICAgICAgY2xhc3M6ICdob3VyLWhhbmQnLFxuICAgICAgICAgICAgICAgICAgIHgxOiAwLFxuICAgICAgICAgICAgICAgICAgIHkxOiAwLFxuICAgICAgICAgICAgICAgICAgIHgyOiAwLFxuICAgICAgICAgICAgICAgICAgIHkyOiBobCxcbiAgICAgICAgICAgICAgICAgICBzdHJva2U6ICcjMDA3ZDcyJyxcbiAgICAgICAgICAgICAgICAgICAnc3Ryb2tlLXdpZHRoJzogOFxuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgc3ZnR0VsZW1lbnQuYXBwZW5kQ2hpbGQoc3ZnTWludXRlSGFuZCk7XG4gICAgICAgICAgICAgICAgc3ZnR0VsZW1lbnQuYXBwZW5kQ2hpbGQoc3ZnSG91ckhhbmQpO1xuICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgdmFyIHN2Z01pbnV0ZUhhbmQgPSB0aGlzLmNyZWF0ZVNWR0VsZW1lbnQoXCJsaW5lXCIsIHtcbiAgICAgICAgICAgICAgICAgICBjbGFzczogJ21pbnV0ZS1oYW5kJyxcbiAgICAgICAgICAgICAgICAgICB4MTogMCxcbiAgICAgICAgICAgICAgICAgICB5MTogMCxcbiAgICAgICAgICAgICAgICAgICB4MjogMCxcbiAgICAgICAgICAgICAgICAgICB5MjogLTE1MCxcbiAgICAgICAgICAgICAgICAgICBzdHJva2U6ICcjMDA3ZDcyJyxcbiAgICAgICAgICAgICAgICAgICAnc3Ryb2tlLXdpZHRoJzogMlxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIHZhciBzdmdIb3VySGFuZCA9IHRoaXMuY3JlYXRlU1ZHRWxlbWVudChcImxpbmVcIiwge1xuICAgICAgICAgICAgICAgICAgIGNsYXNzOiAnaG91ci1oYW5kJyxcbiAgICAgICAgICAgICAgICAgICB4MTogMCxcbiAgICAgICAgICAgICAgICAgICB5MTogMCxcbiAgICAgICAgICAgICAgICAgICB4MjogMCxcbiAgICAgICAgICAgICAgICAgICB5MjogaGwsXG4gICAgICAgICAgICAgICAgICAgc3Ryb2tlOiAnI2JkYmRiZCcsXG4gICAgICAgICAgICAgICAgICAgJ3N0cm9rZS13aWR0aCc6IDhcbiAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgIHN2Z0dFbGVtZW50LmFwcGVuZENoaWxkKHN2Z0hvdXJIYW5kKTtcbiAgICAgICAgICAgICAgICBzdmdHRWxlbWVudC5hcHBlbmRDaGlsZChzdmdNaW51dGVIYW5kKTtcbiAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICBzdmdHRWxlbWVudC5hcHBlbmRDaGlsZChzdmdDbG9ja0NlbnRlcilcblxuICAgICAgICAgICAgIHN2Z0VsZW1lbnQuYXBwZW5kQ2hpbGQoc3ZnR0VsZW1lbnQpXG5cbiAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoXCIjZHRwLXN2Zy1jbG9ja1wiKS5lbXB0eSgpO1xuICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZChcIiNkdHAtc3ZnLWNsb2NrXCIpWzBdLmFwcGVuZENoaWxkKHN2Z0VsZW1lbnQpO1xuXG4gICAgICAgICAgICAgdGhpcy5hbmltYXRlSGFuZHMoKTtcblxuICAgICAgICAgICAgIHJldHVybiBzdmdHRWxlbWVudDtcbiAgICAgICAgICB9LFxuICAgICAgICAgIGNyZWF0ZVNWR0VsZW1lbnQ6IGZ1bmN0aW9uICh0YWcsIGF0dHJzKSB7XG4gICAgICAgICAgICAgdmFyIGVsID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudE5TKCdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZycsIHRhZyk7XG4gICAgICAgICAgICAgZm9yICh2YXIgayBpbiBhdHRycykge1xuICAgICAgICAgICAgICAgIGVsLnNldEF0dHJpYnV0ZShrLCBhdHRyc1trXSk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgICAgIHJldHVybiBlbDtcbiAgICAgICAgICB9LFxuICAgICAgICAgIGlzQWZ0ZXJNaW5EYXRlOiBmdW5jdGlvbiAoZGF0ZSwgY2hlY2tIb3VyLCBjaGVja01pbnV0ZSkge1xuICAgICAgICAgICAgIHZhciBfcmV0dXJuID0gdHJ1ZTtcblxuICAgICAgICAgICAgIGlmICh0eXBlb2YgKHRoaXMubWluRGF0ZSkgIT09ICd1bmRlZmluZWQnICYmIHRoaXMubWluRGF0ZSAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgIHZhciBfbWluRGF0ZSA9IG1vbWVudCh0aGlzLm1pbkRhdGUpO1xuICAgICAgICAgICAgICAgIHZhciBfZGF0ZSA9IG1vbWVudChkYXRlKTtcblxuICAgICAgICAgICAgICAgIGlmICghY2hlY2tIb3VyICYmICFjaGVja01pbnV0ZSkge1xuICAgICAgICAgICAgICAgICAgIF9taW5EYXRlLmhvdXIoMCk7XG4gICAgICAgICAgICAgICAgICAgX21pbkRhdGUubWludXRlKDApO1xuXG4gICAgICAgICAgICAgICAgICAgX2RhdGUuaG91cigwKTtcbiAgICAgICAgICAgICAgICAgICBfZGF0ZS5taW51dGUoMCk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgX21pbkRhdGUuc2Vjb25kKDApO1xuICAgICAgICAgICAgICAgIF9kYXRlLnNlY29uZCgwKTtcbiAgICAgICAgICAgICAgICBfbWluRGF0ZS5taWxsaXNlY29uZCgwKTtcbiAgICAgICAgICAgICAgICBfZGF0ZS5taWxsaXNlY29uZCgwKTtcblxuICAgICAgICAgICAgICAgIGlmICghY2hlY2tNaW51dGUpIHtcbiAgICAgICAgICAgICAgICAgICBfZGF0ZS5taW51dGUoMCk7XG4gICAgICAgICAgICAgICAgICAgX21pbkRhdGUubWludXRlKDApO1xuXG4gICAgICAgICAgICAgICAgICAgX3JldHVybiA9IChwYXJzZUludChfZGF0ZS5mb3JtYXQoXCJYXCIpKSA+PSBwYXJzZUludChfbWluRGF0ZS5mb3JtYXQoXCJYXCIpKSk7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICBfcmV0dXJuID0gKHBhcnNlSW50KF9kYXRlLmZvcm1hdChcIlhcIikpID49IHBhcnNlSW50KF9taW5EYXRlLmZvcm1hdChcIlhcIikpKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgcmV0dXJuIF9yZXR1cm47XG4gICAgICAgICAgfSxcbiAgICAgICAgICBpc0JlZm9yZU1heERhdGU6IGZ1bmN0aW9uIChkYXRlLCBjaGVja1RpbWUsIGNoZWNrTWludXRlKSB7XG4gICAgICAgICAgICAgdmFyIF9yZXR1cm4gPSB0cnVlO1xuXG4gICAgICAgICAgICAgaWYgKHR5cGVvZiAodGhpcy5tYXhEYXRlKSAhPT0gJ3VuZGVmaW5lZCcgJiYgdGhpcy5tYXhEYXRlICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgdmFyIF9tYXhEYXRlID0gbW9tZW50KHRoaXMubWF4RGF0ZSk7XG4gICAgICAgICAgICAgICAgdmFyIF9kYXRlID0gbW9tZW50KGRhdGUpO1xuXG4gICAgICAgICAgICAgICAgaWYgKCFjaGVja1RpbWUgJiYgIWNoZWNrTWludXRlKSB7XG4gICAgICAgICAgICAgICAgICAgX21heERhdGUuaG91cigwKTtcbiAgICAgICAgICAgICAgICAgICBfbWF4RGF0ZS5taW51dGUoMCk7XG5cbiAgICAgICAgICAgICAgICAgICBfZGF0ZS5ob3VyKDApO1xuICAgICAgICAgICAgICAgICAgIF9kYXRlLm1pbnV0ZSgwKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICBfbWF4RGF0ZS5zZWNvbmQoMCk7XG4gICAgICAgICAgICAgICAgX2RhdGUuc2Vjb25kKDApO1xuICAgICAgICAgICAgICAgIF9tYXhEYXRlLm1pbGxpc2Vjb25kKDApO1xuICAgICAgICAgICAgICAgIF9kYXRlLm1pbGxpc2Vjb25kKDApO1xuXG4gICAgICAgICAgICAgICAgaWYgKCFjaGVja01pbnV0ZSkge1xuICAgICAgICAgICAgICAgICAgIF9kYXRlLm1pbnV0ZSgwKTtcbiAgICAgICAgICAgICAgICAgICBfbWF4RGF0ZS5taW51dGUoMCk7XG5cbiAgICAgICAgICAgICAgICAgICBfcmV0dXJuID0gKHBhcnNlSW50KF9kYXRlLmZvcm1hdChcIlhcIikpIDw9IHBhcnNlSW50KF9tYXhEYXRlLmZvcm1hdChcIlhcIikpKTtcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgIF9yZXR1cm4gPSAocGFyc2VJbnQoX2RhdGUuZm9ybWF0KFwiWFwiKSkgPD0gcGFyc2VJbnQoX21heERhdGUuZm9ybWF0KFwiWFwiKSkpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICByZXR1cm4gX3JldHVybjtcbiAgICAgICAgICB9LFxuICAgICAgICAgIHJvdGF0ZUVsZW1lbnQ6IGZ1bmN0aW9uIChlbCwgZGVnKSB7XG4gICAgICAgICAgICAgJChlbCkuY3NzXG4gICAgICAgICAgICAgKHtcbiAgICAgICAgICAgICAgICBXZWJraXRUcmFuc2Zvcm06ICdyb3RhdGUoJyArIGRlZyArICdkZWcpJyxcbiAgICAgICAgICAgICAgICAnLW1vei10cmFuc2Zvcm0nOiAncm90YXRlKCcgKyBkZWcgKyAnZGVnKSdcbiAgICAgICAgICAgICB9KTtcbiAgICAgICAgICB9LFxuICAgICAgICAgIHNob3dEYXRlOiBmdW5jdGlvbiAoZGF0ZSkge1xuICAgICAgICAgICAgIGlmIChkYXRlKSB7XG4gICAgICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCcuZHRwLWFjdHVhbC1kYXknKS5odG1sKGRhdGUubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpLmZvcm1hdCgnZGRkZCcpKTtcbiAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJy5kdHAtYWN0dWFsLW1vbnRoJykuaHRtbChkYXRlLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKS5mb3JtYXQoJ01NTScpLnRvVXBwZXJDYXNlKCkpO1xuICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1hY3R1YWwtbnVtJykuaHRtbChkYXRlLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKS5mb3JtYXQoJ0REJykpO1xuICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1hY3R1YWwteWVhcicpLmh0bWwoZGF0ZS5sb2NhbGUodGhpcy5wYXJhbXMubGFuZykuZm9ybWF0KCdZWVlZJykpO1xuICAgICAgICAgICAgIH1cbiAgICAgICAgICB9LFxuICAgICAgICAgIHNob3dUaW1lOiBmdW5jdGlvbiAoZGF0ZSkge1xuICAgICAgICAgICAgIGlmIChkYXRlKSB7XG4gICAgICAgICAgICAgICAgdmFyIG1pbnV0ZXMgPSBkYXRlLm1pbnV0ZSgpO1xuICAgICAgICAgICAgICAgIHZhciBjb250ZW50ID0gKCh0aGlzLnBhcmFtcy5zaG9ydFRpbWUpID8gZGF0ZS5mb3JtYXQoJ2hoJykgOiBkYXRlLmZvcm1hdCgnSEgnKSkgKyAnOicgKyAoKG1pbnV0ZXMudG9TdHJpbmcoKS5sZW5ndGggPT0gMikgPyBtaW51dGVzIDogJzAnICsgbWludXRlcykgKyAoKHRoaXMucGFyYW1zLnNob3J0VGltZSkgPyAnICcgKyBkYXRlLmZvcm1hdCgnQScpIDogJycpO1xuXG4gICAgICAgICAgICAgICAgaWYgKHRoaXMucGFyYW1zLmRhdGUpXG4gICAgICAgICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCcuZHRwLWFjdHVhbC10aW1lJykuaHRtbChjb250ZW50KTtcbiAgICAgICAgICAgICAgICBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICBpZiAodGhpcy5wYXJhbXMuc2hvcnRUaW1lKVxuICAgICAgICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1hY3R1YWwtZGF5JykuaHRtbChkYXRlLmZvcm1hdCgnQScpKTtcbiAgICAgICAgICAgICAgICAgICBlbHNlXG4gICAgICAgICAgICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCcuZHRwLWFjdHVhbC1kYXknKS5odG1sKCcmbmJzcDsnKTtcblxuICAgICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1hY3R1YWwtbWF4dGltZScpLmh0bWwoY29udGVudCk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgIH1cbiAgICAgICAgICB9LFxuICAgICAgICAgIHNlbGVjdERhdGU6IGZ1bmN0aW9uIChkYXRlKSB7XG4gICAgICAgICAgICAgaWYgKGRhdGUpIHtcbiAgICAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlLmRhdGUoZGF0ZSk7XG5cbiAgICAgICAgICAgICAgICB0aGlzLnNob3dEYXRlKHRoaXMuY3VycmVudERhdGUpO1xuICAgICAgICAgICAgICAgIHRoaXMuJGVsZW1lbnQudHJpZ2dlcignZGF0ZVNlbGVjdGVkJywgdGhpcy5jdXJyZW50RGF0ZSk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgIH0sXG4gICAgICAgICAgZ2VuZXJhdGVDYWxlbmRhcjogZnVuY3Rpb24gKGRhdGUpIHtcbiAgICAgICAgICAgICB2YXIgX2NhbGVuZGFyID0ge307XG5cbiAgICAgICAgICAgICBpZiAoZGF0ZSAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgIHZhciBzdGFydE9mTW9udGggPSBtb21lbnQoZGF0ZSkubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpLnN0YXJ0T2YoJ21vbnRoJyk7XG4gICAgICAgICAgICAgICAgdmFyIGVuZE9mTW9udGggPSBtb21lbnQoZGF0ZSkubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpLmVuZE9mKCdtb250aCcpO1xuXG4gICAgICAgICAgICAgICAgdmFyIGlOdW1EYXkgPSBzdGFydE9mTW9udGguZm9ybWF0KCdkJyk7XG5cbiAgICAgICAgICAgICAgICBfY2FsZW5kYXIud2VlayA9IHRoaXMuZGF5cztcbiAgICAgICAgICAgICAgICBfY2FsZW5kYXIuZGF5cyA9IFtdO1xuXG4gICAgICAgICAgICAgICAgZm9yICh2YXIgaSA9IHN0YXJ0T2ZNb250aC5kYXRlKCk7IGkgPD0gZW5kT2ZNb250aC5kYXRlKCk7IGkrKykge1xuICAgICAgICAgICAgICAgICAgIGlmIChpID09PSBzdGFydE9mTW9udGguZGF0ZSgpKSB7XG4gICAgICAgICAgICAgICAgICAgICAgdmFyIGlXZWVrID0gX2NhbGVuZGFyLndlZWsuaW5kZXhPZihpTnVtRGF5LnRvU3RyaW5nKCkpO1xuICAgICAgICAgICAgICAgICAgICAgIGlmIChpV2VlayA+IDApIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICBmb3IgKHZhciB4ID0gMDsgeCA8IGlXZWVrOyB4KyspIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBfY2FsZW5kYXIuZGF5cy5wdXNoKDApO1xuICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgIF9jYWxlbmRhci5kYXlzLnB1c2gobW9tZW50KHN0YXJ0T2ZNb250aCkubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpLmRhdGUoaSkpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICByZXR1cm4gX2NhbGVuZGFyO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgY29uc3RydWN0SFRNTENhbGVuZGFyOiBmdW5jdGlvbiAoZGF0ZSwgY2FsZW5kYXIpIHtcbiAgICAgICAgICAgICB2YXIgX3RlbXBsYXRlID0gXCJcIjtcblxuICAgICAgICAgICAgIF90ZW1wbGF0ZSArPSAnPGRpdiBjbGFzcz1cImR0cC1waWNrZXItbW9udGhcIj4nICsgZGF0ZS5sb2NhbGUodGhpcy5wYXJhbXMubGFuZykuZm9ybWF0KCdNTU1NIFlZWVknKSArICc8L2Rpdj4nO1xuICAgICAgICAgICAgIF90ZW1wbGF0ZSArPSAnPHRhYmxlIGNsYXNzPVwidGFibGUgZHRwLXBpY2tlci1kYXlzXCI+PHRoZWFkPic7XG4gICAgICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCBjYWxlbmRhci53ZWVrLmxlbmd0aDsgaSsrKSB7XG4gICAgICAgICAgICAgICAgX3RlbXBsYXRlICs9ICc8dGg+JyArIG1vbWVudChwYXJzZUludChjYWxlbmRhci53ZWVrW2ldKSwgXCJkXCIpLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKS5mb3JtYXQoXCJkZFwiKS5zdWJzdHJpbmcoMCwgMSkgKyAnPC90aD4nO1xuICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgIF90ZW1wbGF0ZSArPSAnPC90aGVhZD4nO1xuICAgICAgICAgICAgIF90ZW1wbGF0ZSArPSAnPHRib2R5Pjx0cj4nO1xuXG4gICAgICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCBjYWxlbmRhci5kYXlzLmxlbmd0aDsgaSsrKSB7XG4gICAgICAgICAgICAgICAgaWYgKGkgJSA3ID09IDApXG4gICAgICAgICAgICAgICAgICAgX3RlbXBsYXRlICs9ICc8L3RyPjx0cj4nO1xuICAgICAgICAgICAgICAgIF90ZW1wbGF0ZSArPSAnPHRkIGRhdGEtZGF0ZT1cIicgKyBtb21lbnQoY2FsZW5kYXIuZGF5c1tpXSkubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpLmZvcm1hdChcIkRcIikgKyAnXCI+JztcbiAgICAgICAgICAgICAgICBpZiAoY2FsZW5kYXIuZGF5c1tpXSAhPSAwKSB7XG4gICAgICAgICAgICAgICAgICAgaWYgKHRoaXMuaXNCZWZvcmVNYXhEYXRlKG1vbWVudChjYWxlbmRhci5kYXlzW2ldKSwgZmFsc2UsIGZhbHNlKSA9PT0gZmFsc2UgfHwgdGhpcy5pc0FmdGVyTWluRGF0ZShtb21lbnQoY2FsZW5kYXIuZGF5c1tpXSksIGZhbHNlLCBmYWxzZSkgPT09IGZhbHNlKSB7XG4gICAgICAgICAgICAgICAgICAgICAgX3RlbXBsYXRlICs9ICc8c3BhbiBjbGFzcz1cImR0cC1zZWxlY3QtZGF5XCI+JyArIG1vbWVudChjYWxlbmRhci5kYXlzW2ldKS5sb2NhbGUodGhpcy5wYXJhbXMubGFuZykuZm9ybWF0KFwiRERcIikgKyAnPC9zcGFuPic7XG4gICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICBpZiAobW9tZW50KGNhbGVuZGFyLmRheXNbaV0pLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKS5mb3JtYXQoXCJERFwiKSA9PT0gbW9tZW50KHRoaXMuY3VycmVudERhdGUpLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKS5mb3JtYXQoXCJERFwiKSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgIF90ZW1wbGF0ZSArPSAnPGEgaHJlZj1cImphdmFzY3JpcHQ6dm9pZCgwKTtcIiBjbGFzcz1cImR0cC1zZWxlY3QtZGF5IHNlbGVjdGVkXCI+JyArIG1vbWVudChjYWxlbmRhci5kYXlzW2ldKS5sb2NhbGUodGhpcy5wYXJhbXMubGFuZykuZm9ybWF0KFwiRERcIikgKyAnPC9hPic7XG4gICAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICBfdGVtcGxhdGUgKz0gJzxhIGhyZWY9XCJqYXZhc2NyaXB0OnZvaWQoMCk7XCIgY2xhc3M9XCJkdHAtc2VsZWN0LWRheVwiPicgKyBtb21lbnQoY2FsZW5kYXIuZGF5c1tpXSkubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpLmZvcm1hdChcIkREXCIpICsgJzwvYT4nO1xuICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICBfdGVtcGxhdGUgKz0gJzwvdGQ+JztcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgfVxuICAgICAgICAgICAgIF90ZW1wbGF0ZSArPSAnPC90cj48L3Rib2R5PjwvdGFibGU+JztcblxuICAgICAgICAgICAgIHJldHVybiBfdGVtcGxhdGU7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBzZXROYW1lOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgdmFyIHRleHQgPSBcIlwiO1xuICAgICAgICAgICAgIHZhciBwb3NzaWJsZSA9IFwiQUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODlcIjtcblxuICAgICAgICAgICAgIGZvciAodmFyIGkgPSAwOyBpIDwgNTsgaSsrKSB7XG4gICAgICAgICAgICAgICAgdGV4dCArPSBwb3NzaWJsZS5jaGFyQXQoTWF0aC5mbG9vcihNYXRoLnJhbmRvbSgpICogcG9zc2libGUubGVuZ3RoKSk7XG4gICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgcmV0dXJuIHRleHQ7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBpc1BNOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgcmV0dXJuIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnYS5kdHAtbWVyaWRpZW4tcG0nKS5oYXNDbGFzcygnc2VsZWN0ZWQnKTtcbiAgICAgICAgICB9LFxuICAgICAgICAgIHNldEVsZW1lbnRWYWx1ZTogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgIHRoaXMuJGVsZW1lbnQudHJpZ2dlcignYmVmb3JlQ2hhbmdlJywgdGhpcy5jdXJyZW50RGF0ZSk7XG4gICAgICAgICAgICAgaWYgKHR5cGVvZiAoJC5tYXRlcmlhbCkgIT09ICd1bmRlZmluZWQnKSB7XG4gICAgICAgICAgICAgICAgdGhpcy4kZWxlbWVudC5yZW1vdmVDbGFzcygnZW1wdHknKTtcbiAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgdGhpcy4kZWxlbWVudC52YWwobW9tZW50KHRoaXMuY3VycmVudERhdGUpLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKS5mb3JtYXQodGhpcy5wYXJhbXMuZm9ybWF0KSk7XG4gICAgICAgICAgICAgdGhpcy4kZWxlbWVudC50cmlnZ2VyKCdjaGFuZ2UnLCB0aGlzLmN1cnJlbnREYXRlKTtcbiAgICAgICAgICB9LFxuICAgICAgICAgIHRvZ2dsZUJ1dHRvbnM6IGZ1bmN0aW9uIChkYXRlKSB7XG4gICAgICAgICAgICAgaWYgKGRhdGUgJiYgZGF0ZS5pc1ZhbGlkKCkpIHtcbiAgICAgICAgICAgICAgICB2YXIgc3RhcnRPZk1vbnRoID0gbW9tZW50KGRhdGUpLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKS5zdGFydE9mKCdtb250aCcpO1xuICAgICAgICAgICAgICAgIHZhciBlbmRPZk1vbnRoID0gbW9tZW50KGRhdGUpLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKS5lbmRPZignbW9udGgnKTtcblxuICAgICAgICAgICAgICAgIGlmICghdGhpcy5pc0FmdGVyTWluRGF0ZShzdGFydE9mTW9udGgsIGZhbHNlLCBmYWxzZSkpIHtcbiAgICAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJ2EuZHRwLXNlbGVjdC1tb250aC1iZWZvcmUnKS5hZGRDbGFzcygnaW52aXNpYmxlJyk7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJ2EuZHRwLXNlbGVjdC1tb250aC1iZWZvcmUnKS5yZW1vdmVDbGFzcygnaW52aXNpYmxlJyk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgaWYgKCF0aGlzLmlzQmVmb3JlTWF4RGF0ZShlbmRPZk1vbnRoLCBmYWxzZSwgZmFsc2UpKSB7XG4gICAgICAgICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCdhLmR0cC1zZWxlY3QtbW9udGgtYWZ0ZXInKS5hZGRDbGFzcygnaW52aXNpYmxlJyk7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJ2EuZHRwLXNlbGVjdC1tb250aC1hZnRlcicpLnJlbW92ZUNsYXNzKCdpbnZpc2libGUnKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICB2YXIgc3RhcnRPZlllYXIgPSBtb21lbnQoZGF0ZSkubG9jYWxlKHRoaXMucGFyYW1zLmxhbmcpLnN0YXJ0T2YoJ3llYXInKTtcbiAgICAgICAgICAgICAgICB2YXIgZW5kT2ZZZWFyID0gbW9tZW50KGRhdGUpLmxvY2FsZSh0aGlzLnBhcmFtcy5sYW5nKS5lbmRPZigneWVhcicpO1xuXG4gICAgICAgICAgICAgICAgaWYgKCF0aGlzLmlzQWZ0ZXJNaW5EYXRlKHN0YXJ0T2ZZZWFyLCBmYWxzZSwgZmFsc2UpKSB7XG4gICAgICAgICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5maW5kKCdhLmR0cC1zZWxlY3QteWVhci1iZWZvcmUnKS5hZGRDbGFzcygnaW52aXNpYmxlJyk7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJ2EuZHRwLXNlbGVjdC15ZWFyLWJlZm9yZScpLnJlbW92ZUNsYXNzKCdpbnZpc2libGUnKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICBpZiAoIXRoaXMuaXNCZWZvcmVNYXhEYXRlKGVuZE9mWWVhciwgZmFsc2UsIGZhbHNlKSkge1xuICAgICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnYS5kdHAtc2VsZWN0LXllYXItYWZ0ZXInKS5hZGRDbGFzcygnaW52aXNpYmxlJyk7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJ2EuZHRwLXNlbGVjdC15ZWFyLWFmdGVyJykucmVtb3ZlQ2xhc3MoJ2ludmlzaWJsZScpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICB9XG4gICAgICAgICAgfSxcbiAgICAgICAgICB0b2dnbGVUaW1lOiBmdW5jdGlvbiAodmFsdWUsIGlzSG91cnMpIHtcbiAgICAgICAgICAgICB2YXIgcmVzdWx0ID0gZmFsc2U7XG5cbiAgICAgICAgICAgICBpZiAoaXNIb3Vycykge1xuICAgICAgICAgICAgICAgIHZhciBfZGF0ZSA9IG1vbWVudCh0aGlzLmN1cnJlbnREYXRlKTtcbiAgICAgICAgICAgICAgICBfZGF0ZS5ob3VyKHRoaXMuY29udmVydEhvdXJzKHZhbHVlKSkubWludXRlKDApLnNlY29uZCgwKTtcblxuICAgICAgICAgICAgICAgIHJlc3VsdCA9ICEodGhpcy5pc0FmdGVyTWluRGF0ZShfZGF0ZSwgdHJ1ZSwgZmFsc2UpID09PSBmYWxzZSB8fCB0aGlzLmlzQmVmb3JlTWF4RGF0ZShfZGF0ZSwgdHJ1ZSwgZmFsc2UpID09PSBmYWxzZSk7XG4gICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICB2YXIgX2RhdGUgPSBtb21lbnQodGhpcy5jdXJyZW50RGF0ZSk7XG4gICAgICAgICAgICAgICAgX2RhdGUubWludXRlKHZhbHVlKS5zZWNvbmQoMCk7XG5cbiAgICAgICAgICAgICAgICByZXN1bHQgPSAhKHRoaXMuaXNBZnRlck1pbkRhdGUoX2RhdGUsIHRydWUsIHRydWUpID09PSBmYWxzZSB8fCB0aGlzLmlzQmVmb3JlTWF4RGF0ZShfZGF0ZSwgdHJ1ZSwgdHJ1ZSkgPT09IGZhbHNlKTtcbiAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICByZXR1cm4gcmVzdWx0O1xuICAgICAgICAgIH0sXG4gICAgICAgICAgX2F0dGFjaEV2ZW50OiBmdW5jdGlvbiAoZWwsIGV2LCBmbikge1xuICAgICAgICAgICAgIGVsLm9uKGV2LCBudWxsLCBudWxsLCBmbik7XG4gICAgICAgICAgICAgdGhpcy5fYXR0YWNoZWRFdmVudHMucHVzaChbZWwsIGV2LCBmbl0pO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgX2RldGFjaEV2ZW50czogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgIGZvciAodmFyIGkgPSB0aGlzLl9hdHRhY2hlZEV2ZW50cy5sZW5ndGggLSAxOyBpID49IDA7IGktLSkge1xuICAgICAgICAgICAgICAgIHRoaXMuX2F0dGFjaGVkRXZlbnRzW2ldWzBdLm9mZih0aGlzLl9hdHRhY2hlZEV2ZW50c1tpXVsxXSwgdGhpcy5fYXR0YWNoZWRFdmVudHNbaV1bMl0pO1xuICAgICAgICAgICAgICAgIHRoaXMuX2F0dGFjaGVkRXZlbnRzLnNwbGljZShpLCAxKTtcbiAgICAgICAgICAgICB9XG4gICAgICAgICAgfSxcbiAgICAgICAgICBfb25Gb2N1czogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgIHRoaXMuY3VycmVudFZpZXcgPSAwO1xuICAgICAgICAgICAgIHRoaXMuJGVsZW1lbnQuYmx1cigpO1xuXG4gICAgICAgICAgICAgdGhpcy5pbml0RGF0ZXMoKTtcblxuICAgICAgICAgICAgIHRoaXMuc2hvdygpO1xuXG4gICAgICAgICAgICAgaWYgKHRoaXMucGFyYW1zLmRhdGUpIHtcbiAgICAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJy5kdHAtZGF0ZScpLnJlbW92ZUNsYXNzKCdoaWRkZW4nKTtcbiAgICAgICAgICAgICAgICB0aGlzLmluaXREYXRlKCk7XG4gICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICBpZiAodGhpcy5wYXJhbXMudGltZSkge1xuICAgICAgICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC10aW1lJykucmVtb3ZlQ2xhc3MoJ2hpZGRlbicpO1xuICAgICAgICAgICAgICAgICAgIHRoaXMuaW5pdEhvdXJzKCk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgIH1cbiAgICAgICAgICB9LFxuICAgICAgICAgIF9vbkJhY2tncm91bmRDbGljazogZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgICBlLnN0b3BQcm9wYWdhdGlvbigpO1xuICAgICAgICAgICAgIHRoaXMuaGlkZSgpO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgX29uRWxlbWVudENsaWNrOiBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgIGUuc3RvcFByb3BhZ2F0aW9uKCk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBfb25LZXlkb3duOiBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgIGlmIChlLndoaWNoID09PSAyNykge1xuICAgICAgICAgICAgICAgIHRoaXMuaGlkZSgpO1xuICAgICAgICAgICAgIH1cbiAgICAgICAgICB9LFxuICAgICAgICAgIF9vbkNsb3NlQ2xpY2s6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICB0aGlzLmhpZGUoKTtcbiAgICAgICAgICB9LFxuICAgICAgICAgIF9vbkNsZWFyQ2xpY2s6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlID0gbnVsbDtcbiAgICAgICAgICAgICB0aGlzLiRlbGVtZW50LnRyaWdnZXIoJ2JlZm9yZUNoYW5nZScsIHRoaXMuY3VycmVudERhdGUpO1xuICAgICAgICAgICAgIHRoaXMuaGlkZSgpO1xuICAgICAgICAgICAgIGlmICh0eXBlb2YgKCQubWF0ZXJpYWwpICE9PSAndW5kZWZpbmVkJykge1xuICAgICAgICAgICAgICAgIHRoaXMuJGVsZW1lbnQuYWRkQ2xhc3MoJ2VtcHR5Jyk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgICAgIHRoaXMuJGVsZW1lbnQudmFsKCcnKTtcbiAgICAgICAgICAgICB0aGlzLiRlbGVtZW50LnRyaWdnZXIoJ2NoYW5nZScsIHRoaXMuY3VycmVudERhdGUpO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgX29uTm93Q2xpY2s6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlID0gbW9tZW50KCk7XG5cbiAgICAgICAgICAgICBpZiAodGhpcy5wYXJhbXMuZGF0ZSA9PT0gdHJ1ZSkge1xuICAgICAgICAgICAgICAgIHRoaXMuc2hvd0RhdGUodGhpcy5jdXJyZW50RGF0ZSk7XG5cbiAgICAgICAgICAgICAgICBpZiAodGhpcy5jdXJyZW50VmlldyA9PT0gMCkge1xuICAgICAgICAgICAgICAgICAgIHRoaXMuaW5pdERhdGUoKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgaWYgKHRoaXMucGFyYW1zLnRpbWUgPT09IHRydWUpIHtcbiAgICAgICAgICAgICAgICB0aGlzLnNob3dUaW1lKHRoaXMuY3VycmVudERhdGUpO1xuXG4gICAgICAgICAgICAgICAgc3dpdGNoICh0aGlzLmN1cnJlbnRWaWV3KSB7XG4gICAgICAgICAgICAgICAgICAgY2FzZSAxIDpcbiAgICAgICAgICAgICAgICAgICAgICB0aGlzLmluaXRIb3VycygpO1xuICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgICAgIGNhc2UgMiA6XG4gICAgICAgICAgICAgICAgICAgICAgdGhpcy5pbml0TWludXRlcygpO1xuICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIHRoaXMuYW5pbWF0ZUhhbmRzKCk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgIH0sXG4gICAgICAgICAgX29uT0tDbGljazogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgIHN3aXRjaCAodGhpcy5jdXJyZW50Vmlldykge1xuICAgICAgICAgICAgICAgIGNhc2UgMDpcbiAgICAgICAgICAgICAgICAgICBpZiAodGhpcy5wYXJhbXMudGltZSA9PT0gdHJ1ZSkge1xuICAgICAgICAgICAgICAgICAgICAgIHRoaXMuaW5pdEhvdXJzKCk7XG4gICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICB0aGlzLnNldEVsZW1lbnRWYWx1ZSgpO1xuICAgICAgICAgICAgICAgICAgICAgIHRoaXMuaGlkZSgpO1xuICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICBicmVhaztcbiAgICAgICAgICAgICAgICBjYXNlIDE6XG4gICAgICAgICAgICAgICAgICAgdGhpcy5pbml0TWludXRlcygpO1xuICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgIGNhc2UgMjpcbiAgICAgICAgICAgICAgICAgICB0aGlzLnNldEVsZW1lbnRWYWx1ZSgpO1xuICAgICAgICAgICAgICAgICAgIHRoaXMuaGlkZSgpO1xuICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgIH1cbiAgICAgICAgICB9LFxuICAgICAgICAgIF9vbkNhbmNlbENsaWNrOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgaWYgKHRoaXMucGFyYW1zLnRpbWUpIHtcbiAgICAgICAgICAgICAgICBzd2l0Y2ggKHRoaXMuY3VycmVudFZpZXcpIHtcbiAgICAgICAgICAgICAgICAgICBjYXNlIDA6XG4gICAgICAgICAgICAgICAgICAgICAgdGhpcy5oaWRlKCk7XG4gICAgICAgICAgICAgICAgICAgICAgYnJlYWs7XG4gICAgICAgICAgICAgICAgICAgY2FzZSAxOlxuICAgICAgICAgICAgICAgICAgICAgIGlmICh0aGlzLnBhcmFtcy5kYXRlKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgdGhpcy5pbml0RGF0ZSgpO1xuICAgICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgdGhpcy5oaWRlKCk7XG4gICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgICAgIGNhc2UgMjpcbiAgICAgICAgICAgICAgICAgICAgICB0aGlzLmluaXRIb3VycygpO1xuICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIHRoaXMuaGlkZSgpO1xuICAgICAgICAgICAgIH1cbiAgICAgICAgICB9LFxuICAgICAgICAgIF9vbk1vbnRoQmVmb3JlQ2xpY2s6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlLnN1YnRyYWN0KDEsICdtb250aHMnKTtcbiAgICAgICAgICAgICB0aGlzLmluaXREYXRlKHRoaXMuY3VycmVudERhdGUpO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgX29uTW9udGhBZnRlckNsaWNrOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgdGhpcy5jdXJyZW50RGF0ZS5hZGQoMSwgJ21vbnRocycpO1xuICAgICAgICAgICAgIHRoaXMuaW5pdERhdGUodGhpcy5jdXJyZW50RGF0ZSk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBfb25ZZWFyQmVmb3JlQ2xpY2s6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlLnN1YnRyYWN0KDEsICd5ZWFycycpO1xuICAgICAgICAgICAgIHRoaXMuaW5pdERhdGUodGhpcy5jdXJyZW50RGF0ZSk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBfb25ZZWFyQWZ0ZXJDbGljazogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgIHRoaXMuY3VycmVudERhdGUuYWRkKDEsICd5ZWFycycpO1xuICAgICAgICAgICAgIHRoaXMuaW5pdERhdGUodGhpcy5jdXJyZW50RGF0ZSk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBfb25TZWxlY3REYXRlOiBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnYS5kdHAtc2VsZWN0LWRheScpLnJlbW92ZUNsYXNzKCdzZWxlY3RlZCcpO1xuICAgICAgICAgICAgICQoZS5jdXJyZW50VGFyZ2V0KS5hZGRDbGFzcygnc2VsZWN0ZWQnKTtcblxuICAgICAgICAgICAgIHRoaXMuc2VsZWN0RGF0ZSgkKGUuY3VycmVudFRhcmdldCkucGFyZW50KCkuZGF0YShcImRhdGVcIikpO1xuXG4gICAgICAgICAgICAgaWYgKHRoaXMucGFyYW1zLnN3aXRjaE9uQ2xpY2sgPT09IHRydWUgJiYgdGhpcy5wYXJhbXMudGltZSA9PT0gdHJ1ZSlcbiAgICAgICAgICAgICAgICBzZXRUaW1lb3V0KHRoaXMuaW5pdEhvdXJzLmJpbmQodGhpcyksIDIwMCk7XG5cbiAgICAgICAgICAgICBpZiAodGhpcy5wYXJhbXMuc3dpdGNoT25DbGljayA9PT0gdHJ1ZSAmJiB0aGlzLnBhcmFtcy50aW1lID09PSBmYWxzZSkge1xuICAgICAgICAgICAgICAgIHNldFRpbWVvdXQodGhpcy5fb25PS0NsaWNrLmJpbmQodGhpcyksIDIwMCk7XG4gICAgICAgICAgICAgfVxuXG4gICAgICAgICAgfSxcbiAgICAgICAgICBfb25TZWxlY3RIb3VyOiBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgIGlmICghJChlLnRhcmdldCkuaGFzQ2xhc3MoJ2Rpc2FibGVkJykpIHtcbiAgICAgICAgICAgICAgICB2YXIgdmFsdWUgPSAkKGUudGFyZ2V0KS5kYXRhKCdob3VyJyk7XG4gICAgICAgICAgICAgICAgdmFyIHBhcmVudCA9ICQoZS50YXJnZXQpLnBhcmVudCgpO1xuXG4gICAgICAgICAgICAgICAgdmFyIGggPSBwYXJlbnQuZmluZCgnLmR0cC1zZWxlY3QtaG91cicpO1xuICAgICAgICAgICAgICAgIGZvciAodmFyIGkgPSAwOyBpIDwgaC5sZW5ndGg7IGkrKykge1xuICAgICAgICAgICAgICAgICAgICQoaFtpXSkuYXR0cignZmlsbCcsICd0cmFuc3BhcmVudCcpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB2YXIgdGggPSBwYXJlbnQuZmluZCgnLmR0cC1zZWxlY3QtaG91ci10ZXh0Jyk7XG4gICAgICAgICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCB0aC5sZW5ndGg7IGkrKykge1xuICAgICAgICAgICAgICAgICAgICQodGhbaV0pLmF0dHIoJ2ZpbGwnLCAnIzAwMCcpO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICQocGFyZW50LmZpbmQoJyNoLScgKyB2YWx1ZSkpLmF0dHIoJ2ZpbGwnLCAnIzAwN2Q3MicpO1xuICAgICAgICAgICAgICAgICQocGFyZW50LmZpbmQoJyN0aC0nICsgdmFsdWUpKS5hdHRyKCdmaWxsJywgJyNmZmYnKTtcblxuICAgICAgICAgICAgICAgIHRoaXMuY3VycmVudERhdGUuaG91cihwYXJzZUludCh2YWx1ZSkpO1xuXG4gICAgICAgICAgICAgICAgaWYgKHRoaXMucGFyYW1zLnNob3J0VGltZSA9PT0gdHJ1ZSAmJiB0aGlzLmlzUE0oKSkge1xuICAgICAgICAgICAgICAgICAgIHRoaXMuY3VycmVudERhdGUuYWRkKDEyLCAnaG91cnMnKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICB0aGlzLnNob3dUaW1lKHRoaXMuY3VycmVudERhdGUpO1xuXG4gICAgICAgICAgICAgICAgdGhpcy5hbmltYXRlSGFuZHMoKTtcblxuICAgICAgICAgICAgICAgIGlmICh0aGlzLnBhcmFtcy5zd2l0Y2hPbkNsaWNrID09PSB0cnVlKVxuICAgICAgICAgICAgICAgICAgIHNldFRpbWVvdXQodGhpcy5pbml0TWludXRlcy5iaW5kKHRoaXMpLCAyMDApO1xuICAgICAgICAgICAgIH1cbiAgICAgICAgICB9LFxuICAgICAgICAgIF9vblNlbGVjdE1pbnV0ZTogZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgICBpZiAoISQoZS50YXJnZXQpLmhhc0NsYXNzKCdkaXNhYmxlZCcpKSB7XG4gICAgICAgICAgICAgICAgdmFyIHZhbHVlID0gJChlLnRhcmdldCkuZGF0YSgnbWludXRlJyk7XG4gICAgICAgICAgICAgICAgdmFyIHBhcmVudCA9ICQoZS50YXJnZXQpLnBhcmVudCgpO1xuXG4gICAgICAgICAgICAgICAgdmFyIG0gPSBwYXJlbnQuZmluZCgnLmR0cC1zZWxlY3QtbWludXRlJyk7XG4gICAgICAgICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCBtLmxlbmd0aDsgaSsrKSB7XG4gICAgICAgICAgICAgICAgICAgJChtW2ldKS5hdHRyKCdmaWxsJywgJ3RyYW5zcGFyZW50Jyk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIHZhciB0bSA9IHBhcmVudC5maW5kKCcuZHRwLXNlbGVjdC1taW51dGUtdGV4dCcpO1xuICAgICAgICAgICAgICAgIGZvciAodmFyIGkgPSAwOyBpIDwgdG0ubGVuZ3RoOyBpKyspIHtcbiAgICAgICAgICAgICAgICAgICAkKHRtW2ldKS5hdHRyKCdmaWxsJywgJyMwMDAnKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAkKHBhcmVudC5maW5kKCcjbS0nICsgdmFsdWUpKS5hdHRyKCdmaWxsJywgJyMwMDdkNzInKTtcbiAgICAgICAgICAgICAgICAkKHBhcmVudC5maW5kKCcjdG0tJyArIHZhbHVlKSkuYXR0cignZmlsbCcsICcjZmZmJyk7XG5cbiAgICAgICAgICAgICAgICB0aGlzLmN1cnJlbnREYXRlLm1pbnV0ZShwYXJzZUludCh2YWx1ZSkpO1xuICAgICAgICAgICAgICAgIHRoaXMuc2hvd1RpbWUodGhpcy5jdXJyZW50RGF0ZSk7XG5cbiAgICAgICAgICAgICAgICB0aGlzLmFuaW1hdGVIYW5kcygpO1xuXG4gICAgICAgICAgICAgICAgaWYgKHRoaXMucGFyYW1zLnN3aXRjaE9uQ2xpY2sgPT09IHRydWUpXG4gICAgICAgICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgICAgICAgdGhpcy5zZXRFbGVtZW50VmFsdWUoKTtcbiAgICAgICAgICAgICAgICAgICAgICB0aGlzLmhpZGUoKTtcbiAgICAgICAgICAgICAgICAgICB9LmJpbmQodGhpcyksIDIwMCk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgIH0sXG4gICAgICAgICAgX29uU2VsZWN0QU06IGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICAgJCgnLmR0cC1hY3R1YWwtbWVyaWRpZW4nKS5maW5kKCdhJykucmVtb3ZlQ2xhc3MoJ3NlbGVjdGVkJyk7XG4gICAgICAgICAgICAgJChlLmN1cnJlbnRUYXJnZXQpLmFkZENsYXNzKCdzZWxlY3RlZCcpO1xuXG4gICAgICAgICAgICAgaWYgKHRoaXMuY3VycmVudERhdGUuaG91cigpID49IDEyKSB7XG4gICAgICAgICAgICAgICAgaWYgKHRoaXMuY3VycmVudERhdGUuc3VidHJhY3QoMTIsICdob3VycycpKVxuICAgICAgICAgICAgICAgICAgIHRoaXMuc2hvd1RpbWUodGhpcy5jdXJyZW50RGF0ZSk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgICAgIHRoaXMudG9nZ2xlVGltZSgodGhpcy5jdXJyZW50VmlldyA9PT0gMSkpO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgX29uU2VsZWN0UE06IGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICAgJCgnLmR0cC1hY3R1YWwtbWVyaWRpZW4nKS5maW5kKCdhJykucmVtb3ZlQ2xhc3MoJ3NlbGVjdGVkJyk7XG4gICAgICAgICAgICAgJChlLmN1cnJlbnRUYXJnZXQpLmFkZENsYXNzKCdzZWxlY3RlZCcpO1xuXG4gICAgICAgICAgICAgaWYgKHRoaXMuY3VycmVudERhdGUuaG91cigpIDwgMTIpIHtcbiAgICAgICAgICAgICAgICBpZiAodGhpcy5jdXJyZW50RGF0ZS5hZGQoMTIsICdob3VycycpKVxuICAgICAgICAgICAgICAgICAgIHRoaXMuc2hvd1RpbWUodGhpcy5jdXJyZW50RGF0ZSk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgICAgIHRoaXMudG9nZ2xlVGltZSgodGhpcy5jdXJyZW50VmlldyA9PT0gMSkpO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgY29udmVydEhvdXJzOiBmdW5jdGlvbiAoaCkge1xuICAgICAgICAgICAgIHZhciBfcmV0dXJuID0gaDtcblxuICAgICAgICAgICAgIGlmICh0aGlzLnBhcmFtcy5zaG9ydFRpbWUgPT09IHRydWUpIHtcbiAgICAgICAgICAgICAgICBpZiAoKGggPCAxMikgJiYgdGhpcy5pc1BNKCkpIHtcbiAgICAgICAgICAgICAgICAgICBfcmV0dXJuICs9IDEyO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICByZXR1cm4gX3JldHVybjtcbiAgICAgICAgICB9LFxuICAgICAgICAgIHNldERhdGU6IGZ1bmN0aW9uIChkYXRlKSB7XG4gICAgICAgICAgICAgdGhpcy5wYXJhbXMuY3VycmVudERhdGUgPSBkYXRlO1xuICAgICAgICAgICAgIHRoaXMuaW5pdERhdGVzKCk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBzZXRNaW5EYXRlOiBmdW5jdGlvbiAoZGF0ZSkge1xuICAgICAgICAgICAgIHRoaXMucGFyYW1zLm1pbkRhdGUgPSBkYXRlO1xuICAgICAgICAgICAgIHRoaXMuaW5pdERhdGVzKCk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBzZXRNYXhEYXRlOiBmdW5jdGlvbiAoZGF0ZSkge1xuICAgICAgICAgICAgIHRoaXMucGFyYW1zLm1heERhdGUgPSBkYXRlO1xuICAgICAgICAgICAgIHRoaXMuaW5pdERhdGVzKCk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBkZXN0cm95OiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgdGhpcy5fZGV0YWNoRXZlbnRzKCk7XG4gICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5yZW1vdmUoKTtcbiAgICAgICAgICB9LFxuICAgICAgICAgIHNob3c6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LnJlbW92ZUNsYXNzKCdoaWRkZW4nKTtcbiAgICAgICAgICAgICB0aGlzLl9hdHRhY2hFdmVudCgkKHdpbmRvdyksICdrZXlkb3duJywgdGhpcy5fb25LZXlkb3duLmJpbmQodGhpcykpO1xuICAgICAgICAgICAgIHRoaXMuX2NlbnRlckJveCgpO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgaGlkZTogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICQod2luZG93KS5vZmYoJ2tleWRvd24nLCBudWxsLCBudWxsLCB0aGlzLl9vbktleWRvd24uYmluZCh0aGlzKSk7XG4gICAgICAgICAgICAgdGhpcy4kZHRwRWxlbWVudC5hZGRDbGFzcygnaGlkZGVuJyk7XG4gICAgICAgICAgfSxcbiAgICAgICAgICBfY2VudGVyQm94OiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgdmFyIGggPSAodGhpcy4kZHRwRWxlbWVudC5oZWlnaHQoKSAtIHRoaXMuJGR0cEVsZW1lbnQuZmluZCgnLmR0cC1jb250ZW50JykuaGVpZ2h0KCkpIC8gMjtcbiAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJy5kdHAtY29udGVudCcpLmNzcygnbWFyZ2luTGVmdCcsIC0odGhpcy4kZHRwRWxlbWVudC5maW5kKCcuZHRwLWNvbnRlbnQnKS53aWR0aCgpIC8gMikgKyAncHgnKTtcbiAgICAgICAgICAgICB0aGlzLiRkdHBFbGVtZW50LmZpbmQoJy5kdHAtY29udGVudCcpLmNzcygndG9wJywgaCArICdweCcpO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgZW5hYmxlRGF5czogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgIHZhciBlbmFibGVEYXlzID0gdGhpcy5wYXJhbXMuZW5hYmxlRGF5cztcbiAgICAgICAgICAgICBpZiAoZW5hYmxlRGF5cykge1xuICAgICAgICAgICAgICAgICQoXCIuZHRwLXBpY2tlci1kYXlzIHRib2R5IHRyIHRkXCIpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICAgIGlmICghKCgkLmluQXJyYXkoJCh0aGlzKS5pbmRleCgpLCBlbmFibGVEYXlzKSkgPj0gMCkpIHtcbiAgICAgICAgICAgICAgICAgICAgICAkKHRoaXMpLmZpbmQoJ2EnKS5jc3Moe1xuICAgICAgICAgICAgICAgICAgICAgICAgIFwiYmFja2dyb3VuZFwiOiBcIiNlM2UzZTNcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICBcImN1cnNvclwiOiBcIm5vLWRyb3BcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICBcIm9wYWNpdHlcIjogXCIwLjVcIlxuICAgICAgICAgICAgICAgICAgICAgIH0pLm9mZihcImNsaWNrXCIpO1xuICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICB9XG4gICAgICAgICAgfVxuXG4gICAgICAgfTtcbn0pKGpRdWVyeSwgbW9tZW50KTtcbiIsIi8qXG4qIFByb2plY3Q6IEJvb3RzdHJhcCBOb3RpZnkgPSB2My4xLjNcbiogRGVzY3JpcHRpb246IFR1cm5zIHN0YW5kYXJkIEJvb3RzdHJhcCBhbGVydHMgaW50byBcIkdyb3dsLWxpa2VcIiBub3RpZmljYXRpb25zLlxuKiBBdXRob3I6IE1vdXNlMDI3MCBha2EgUm9iZXJ0IE1jSW50b3NoXG4qIExpY2Vuc2U6IE1JVCBMaWNlbnNlXG4qIFdlYnNpdGU6IGh0dHBzOi8vZ2l0aHViLmNvbS9tb3VzZTAyNzAvYm9vdHN0cmFwLWdyb3dsXG4qL1xuKGZ1bmN0aW9uIChmYWN0b3J5KSB7XG5cdGlmICh0eXBlb2YgZGVmaW5lID09PSAnZnVuY3Rpb24nICYmIGRlZmluZS5hbWQpIHtcblx0XHQvLyBBTUQuIFJlZ2lzdGVyIGFzIGFuIGFub255bW91cyBtb2R1bGUuXG5cdFx0ZGVmaW5lKFsnanF1ZXJ5J10sIGZhY3RvcnkpO1xuXHR9IGVsc2UgaWYgKHR5cGVvZiBleHBvcnRzID09PSAnb2JqZWN0Jykge1xuXHRcdC8vIE5vZGUvQ29tbW9uSlNcblx0XHRmYWN0b3J5KHJlcXVpcmUoJ2pxdWVyeScpKTtcblx0fSBlbHNlIHtcblx0XHQvLyBCcm93c2VyIGdsb2JhbHNcblx0XHRmYWN0b3J5KGpRdWVyeSk7XG5cdH1cbn0oZnVuY3Rpb24gKCQpIHtcblx0Ly8gQ3JlYXRlIHRoZSBkZWZhdWx0cyBvbmNlXG5cdHZhciBkZWZhdWx0cyA9IHtcblx0XHRcdGVsZW1lbnQ6ICdib2R5Jyxcblx0XHRcdHBvc2l0aW9uOiBudWxsLFxuXHRcdFx0dHlwZTogXCJpbmZvXCIsXG5cdFx0XHRhbGxvd19kaXNtaXNzOiB0cnVlLFxuXHRcdFx0bmV3ZXN0X29uX3RvcDogZmFsc2UsXG5cdFx0XHRzaG93UHJvZ3Jlc3NiYXI6IGZhbHNlLFxuXHRcdFx0cGxhY2VtZW50OiB7XG5cdFx0XHRcdGZyb206IFwidG9wXCIsXG5cdFx0XHRcdGFsaWduOiBcInJpZ2h0XCJcblx0XHRcdH0sXG5cdFx0XHRvZmZzZXQ6IDIwLFxuXHRcdFx0c3BhY2luZzogMTAsXG5cdFx0XHR6X2luZGV4OiAxMDMxLFxuXHRcdFx0ZGVsYXk6IDUwMDAsXG5cdFx0XHR0aW1lcjogMTAwMCxcblx0XHRcdHVybF90YXJnZXQ6ICdfYmxhbmsnLFxuXHRcdFx0bW91c2Vfb3ZlcjogbnVsbCxcblx0XHRcdGFuaW1hdGU6IHtcblx0XHRcdFx0ZW50ZXI6ICdhbmltYXRlZCBmYWRlSW5Eb3duJyxcblx0XHRcdFx0ZXhpdDogJ2FuaW1hdGVkIGZhZGVPdXRVcCdcblx0XHRcdH0sXG5cdFx0XHRvblNob3c6IG51bGwsXG5cdFx0XHRvblNob3duOiBudWxsLFxuXHRcdFx0b25DbG9zZTogbnVsbCxcblx0XHRcdG9uQ2xvc2VkOiBudWxsLFxuXHRcdFx0aWNvbl90eXBlOiAnY2xhc3MnLFxuXHRcdFx0dGVtcGxhdGU6ICc8ZGl2IGRhdGEtbm90aWZ5PVwiY29udGFpbmVyXCIgY2xhc3M9XCJjb2wteHMtMTEgY29sLXNtLTQgYWxlcnQgYWxlcnQtezB9XCIgcm9sZT1cImFsZXJ0XCI+PGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgY2xhc3M9XCJjbG9zZVwiIGRhdGEtbm90aWZ5PVwiZGlzbWlzc1wiPiZ0aW1lczs8L2J1dHRvbj48c3BhbiBkYXRhLW5vdGlmeT1cImljb25cIj48L3NwYW4+IDxzcGFuIGRhdGEtbm90aWZ5PVwidGl0bGVcIj57MX08L3NwYW4+IDxzcGFuIGRhdGEtbm90aWZ5PVwibWVzc2FnZVwiPnsyfTwvc3Bhbj48ZGl2IGNsYXNzPVwicHJvZ3Jlc3NcIiBkYXRhLW5vdGlmeT1cInByb2dyZXNzYmFyXCI+PGRpdiBjbGFzcz1cInByb2dyZXNzLWJhciBwcm9ncmVzcy1iYXItezB9XCIgcm9sZT1cInByb2dyZXNzYmFyXCIgYXJpYS12YWx1ZW5vdz1cIjBcIiBhcmlhLXZhbHVlbWluPVwiMFwiIGFyaWEtdmFsdWVtYXg9XCIxMDBcIiBzdHlsZT1cIndpZHRoOiAwJTtcIj48L2Rpdj48L2Rpdj48YSBocmVmPVwiezN9XCIgdGFyZ2V0PVwiezR9XCIgZGF0YS1ub3RpZnk9XCJ1cmxcIj48L2E+PC9kaXY+J1xuXHRcdH07XG5cblx0U3RyaW5nLmZvcm1hdCA9IGZ1bmN0aW9uKCkge1xuXHRcdHZhciBzdHIgPSBhcmd1bWVudHNbMF07XG5cdFx0Zm9yICh2YXIgaSA9IDE7IGkgPCBhcmd1bWVudHMubGVuZ3RoOyBpKyspIHtcblx0XHRcdHN0ciA9IHN0ci5yZXBsYWNlKFJlZ0V4cChcIlxcXFx7XCIgKyAoaSAtIDEpICsgXCJcXFxcfVwiLCBcImdtXCIpLCBhcmd1bWVudHNbaV0pO1xuXHRcdH1cblx0XHRyZXR1cm4gc3RyO1xuXHR9O1xuXG5cdGZ1bmN0aW9uIE5vdGlmeSAoIGVsZW1lbnQsIGNvbnRlbnQsIG9wdGlvbnMgKSB7XG5cdFx0Ly8gU2V0dXAgQ29udGVudCBvZiBOb3RpZnlcblx0XHR2YXIgY29udGVudCA9IHtcblx0XHRcdGNvbnRlbnQ6IHtcblx0XHRcdFx0bWVzc2FnZTogdHlwZW9mIGNvbnRlbnQgPT0gJ29iamVjdCcgPyBjb250ZW50Lm1lc3NhZ2UgOiBjb250ZW50LFxuXHRcdFx0XHR0aXRsZTogY29udGVudC50aXRsZSA/IGNvbnRlbnQudGl0bGUgOiAnJyxcblx0XHRcdFx0aWNvbjogY29udGVudC5pY29uID8gY29udGVudC5pY29uIDogJycsXG5cdFx0XHRcdHVybDogY29udGVudC51cmwgPyBjb250ZW50LnVybCA6ICcjJyxcblx0XHRcdFx0dGFyZ2V0OiBjb250ZW50LnRhcmdldCA/IGNvbnRlbnQudGFyZ2V0IDogJy0nXG5cdFx0XHR9XG5cdFx0fTtcblxuXHRcdG9wdGlvbnMgPSAkLmV4dGVuZCh0cnVlLCB7fSwgY29udGVudCwgb3B0aW9ucyk7XG5cdFx0dGhpcy5zZXR0aW5ncyA9ICQuZXh0ZW5kKHRydWUsIHt9LCBkZWZhdWx0cywgb3B0aW9ucyk7XG5cdFx0dGhpcy5fZGVmYXVsdHMgPSBkZWZhdWx0cztcblx0XHRpZiAodGhpcy5zZXR0aW5ncy5jb250ZW50LnRhcmdldCA9PSBcIi1cIikge1xuXHRcdFx0dGhpcy5zZXR0aW5ncy5jb250ZW50LnRhcmdldCA9IHRoaXMuc2V0dGluZ3MudXJsX3RhcmdldDtcblx0XHR9XG5cdFx0dGhpcy5hbmltYXRpb25zID0ge1xuXHRcdFx0c3RhcnQ6ICd3ZWJraXRBbmltYXRpb25TdGFydCBvYW5pbWF0aW9uc3RhcnQgTVNBbmltYXRpb25TdGFydCBhbmltYXRpb25zdGFydCcsXG5cdFx0XHRlbmQ6ICd3ZWJraXRBbmltYXRpb25FbmQgb2FuaW1hdGlvbmVuZCBNU0FuaW1hdGlvbkVuZCBhbmltYXRpb25lbmQnXG5cdFx0fVxuXG5cdFx0aWYgKHR5cGVvZiB0aGlzLnNldHRpbmdzLm9mZnNldCA9PSAnbnVtYmVyJykge1xuXHRcdCAgICB0aGlzLnNldHRpbmdzLm9mZnNldCA9IHtcblx0XHQgICAgXHR4OiB0aGlzLnNldHRpbmdzLm9mZnNldCxcblx0XHQgICAgXHR5OiB0aGlzLnNldHRpbmdzLm9mZnNldFxuXHRcdCAgICB9O1xuXHRcdH1cblxuXHRcdHRoaXMuaW5pdCgpO1xuXHR9O1xuXG5cdCQuZXh0ZW5kKE5vdGlmeS5wcm90b3R5cGUsIHtcblx0XHRpbml0OiBmdW5jdGlvbiAoKSB7XG5cdFx0XHR2YXIgc2VsZiA9IHRoaXM7XG5cblx0XHRcdHRoaXMuYnVpbGROb3RpZnkoKTtcblx0XHRcdGlmICh0aGlzLnNldHRpbmdzLmNvbnRlbnQuaWNvbikge1xuXHRcdFx0XHR0aGlzLnNldEljb24oKTtcblx0XHRcdH1cblx0XHRcdGlmICh0aGlzLnNldHRpbmdzLmNvbnRlbnQudXJsICE9IFwiI1wiKSB7XG5cdFx0XHRcdHRoaXMuc3R5bGVVUkwoKTtcblx0XHRcdH1cblx0XHRcdHRoaXMuc3R5bGVEaXNtaXNzKCk7XG5cdFx0XHR0aGlzLnBsYWNlbWVudCgpO1xuXHRcdFx0dGhpcy5iaW5kKCk7XG5cblx0XHRcdHRoaXMubm90aWZ5ID0ge1xuXHRcdFx0XHQkZWxlOiB0aGlzLiRlbGUsXG5cdFx0XHRcdHVwZGF0ZTogZnVuY3Rpb24oY29tbWFuZCwgdXBkYXRlKSB7XG5cdFx0XHRcdFx0dmFyIGNvbW1hbmRzID0ge307XG5cdFx0XHRcdFx0aWYgKHR5cGVvZiBjb21tYW5kID09IFwic3RyaW5nXCIpIHtcblx0XHRcdFx0XHRcdGNvbW1hbmRzW2NvbW1hbmRdID0gdXBkYXRlO1xuXHRcdFx0XHRcdH1lbHNle1xuXHRcdFx0XHRcdFx0Y29tbWFuZHMgPSBjb21tYW5kO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRmb3IgKHZhciBjb21tYW5kIGluIGNvbW1hbmRzKSB7XG5cdFx0XHRcdFx0XHRzd2l0Y2ggKGNvbW1hbmQpIHtcblx0XHRcdFx0XHRcdFx0Y2FzZSBcInR5cGVcIjpcblx0XHRcdFx0XHRcdFx0XHR0aGlzLiRlbGUucmVtb3ZlQ2xhc3MoJ2FsZXJ0LScgKyBzZWxmLnNldHRpbmdzLnR5cGUpO1xuXHRcdFx0XHRcdFx0XHRcdHRoaXMuJGVsZS5maW5kKCdbZGF0YS1ub3RpZnk9XCJwcm9ncmVzc2JhclwiXSA+IC5wcm9ncmVzcy1iYXInKS5yZW1vdmVDbGFzcygncHJvZ3Jlc3MtYmFyLScgKyBzZWxmLnNldHRpbmdzLnR5cGUpO1xuXHRcdFx0XHRcdFx0XHRcdHNlbGYuc2V0dGluZ3MudHlwZSA9IGNvbW1hbmRzW2NvbW1hbmRdO1xuXHRcdFx0XHRcdFx0XHRcdHRoaXMuJGVsZS5hZGRDbGFzcygnYWxlcnQtJyArIGNvbW1hbmRzW2NvbW1hbmRdKS5maW5kKCdbZGF0YS1ub3RpZnk9XCJwcm9ncmVzc2JhclwiXSA+IC5wcm9ncmVzcy1iYXInKS5hZGRDbGFzcygncHJvZ3Jlc3MtYmFyLScgKyBjb21tYW5kc1tjb21tYW5kXSk7XG5cdFx0XHRcdFx0XHRcdFx0YnJlYWs7XG5cdFx0XHRcdFx0XHRcdGNhc2UgXCJpY29uXCI6XG5cdFx0XHRcdFx0XHRcdFx0dmFyICRpY29uID0gdGhpcy4kZWxlLmZpbmQoJ1tkYXRhLW5vdGlmeT1cImljb25cIl0nKTtcblx0XHRcdFx0XHRcdFx0XHRpZiAoc2VsZi5zZXR0aW5ncy5pY29uX3R5cGUudG9Mb3dlckNhc2UoKSA9PSAnY2xhc3MnKSB7XG5cdFx0XHRcdFx0XHRcdFx0XHQkaWNvbi5yZW1vdmVDbGFzcyhzZWxmLnNldHRpbmdzLmNvbnRlbnQuaWNvbikuYWRkQ2xhc3MoY29tbWFuZHNbY29tbWFuZF0pO1xuXHRcdFx0XHRcdFx0XHRcdH1lbHNle1xuXHRcdFx0XHRcdFx0XHRcdFx0aWYgKCEkaWNvbi5pcygnaW1nJykpIHtcblx0XHRcdFx0XHRcdFx0XHRcdFx0JGljb24uZmluZCgnaW1nJyk7XG5cdFx0XHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRcdFx0XHQkaWNvbi5hdHRyKCdzcmMnLCBjb21tYW5kc1tjb21tYW5kXSk7XG5cdFx0XHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0XHRcdFx0XHRjYXNlIFwicHJvZ3Jlc3NcIjpcblx0XHRcdFx0XHRcdFx0XHR2YXIgbmV3RGVsYXkgPSBzZWxmLnNldHRpbmdzLmRlbGF5IC0gKHNlbGYuc2V0dGluZ3MuZGVsYXkgKiAoY29tbWFuZHNbY29tbWFuZF0gLyAxMDApKTtcblx0XHRcdFx0XHRcdFx0XHR0aGlzLiRlbGUuZGF0YSgnbm90aWZ5LWRlbGF5JywgbmV3RGVsYXkpO1xuXHRcdFx0XHRcdFx0XHRcdHRoaXMuJGVsZS5maW5kKCdbZGF0YS1ub3RpZnk9XCJwcm9ncmVzc2JhclwiXSA+IGRpdicpLmF0dHIoJ2FyaWEtdmFsdWVub3cnLCBjb21tYW5kc1tjb21tYW5kXSkuY3NzKCd3aWR0aCcsIGNvbW1hbmRzW2NvbW1hbmRdICsgJyUnKTtcblx0XHRcdFx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0XHRcdFx0Y2FzZSBcInVybFwiOlxuXHRcdFx0XHRcdFx0XHRcdHRoaXMuJGVsZS5maW5kKCdbZGF0YS1ub3RpZnk9XCJ1cmxcIl0nKS5hdHRyKCdocmVmJywgY29tbWFuZHNbY29tbWFuZF0pO1xuXHRcdFx0XHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0XHRcdFx0XHRjYXNlIFwidGFyZ2V0XCI6XG5cdFx0XHRcdFx0XHRcdFx0dGhpcy4kZWxlLmZpbmQoJ1tkYXRhLW5vdGlmeT1cInVybFwiXScpLmF0dHIoJ3RhcmdldCcsIGNvbW1hbmRzW2NvbW1hbmRdKTtcblx0XHRcdFx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0XHRcdFx0ZGVmYXVsdDpcblx0XHRcdFx0XHRcdFx0XHR0aGlzLiRlbGUuZmluZCgnW2RhdGEtbm90aWZ5PVwiJyArIGNvbW1hbmQgKydcIl0nKS5odG1sKGNvbW1hbmRzW2NvbW1hbmRdKTtcblx0XHRcdFx0XHRcdH07XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdHZhciBwb3NYID0gdGhpcy4kZWxlLm91dGVySGVpZ2h0KCkgKyBwYXJzZUludChzZWxmLnNldHRpbmdzLnNwYWNpbmcpICsgcGFyc2VJbnQoc2VsZi5zZXR0aW5ncy5vZmZzZXQueSk7XG5cdFx0XHRcdFx0c2VsZi5yZXBvc2l0aW9uKHBvc1gpO1xuXHRcdFx0XHR9LFxuXHRcdFx0XHRjbG9zZTogZnVuY3Rpb24oKSB7XG5cdFx0XHRcdFx0c2VsZi5jbG9zZSgpO1xuXHRcdFx0XHR9XG5cdFx0XHR9O1xuXHRcdH0sXG5cdFx0YnVpbGROb3RpZnk6IGZ1bmN0aW9uICgpIHtcblx0XHRcdHZhciBjb250ZW50ID0gdGhpcy5zZXR0aW5ncy5jb250ZW50O1xuXHRcdFx0dGhpcy4kZWxlID0gJChTdHJpbmcuZm9ybWF0KHRoaXMuc2V0dGluZ3MudGVtcGxhdGUsIHRoaXMuc2V0dGluZ3MudHlwZSwgY29udGVudC50aXRsZSwgY29udGVudC5tZXNzYWdlLCBjb250ZW50LnVybCwgY29udGVudC50YXJnZXQpKTtcblx0XHRcdHRoaXMuJGVsZS5hdHRyKCdkYXRhLW5vdGlmeS1wb3NpdGlvbicsIHRoaXMuc2V0dGluZ3MucGxhY2VtZW50LmZyb20gKyAnLScgKyB0aGlzLnNldHRpbmdzLnBsYWNlbWVudC5hbGlnbik7XG5cdFx0XHRpZiAoIXRoaXMuc2V0dGluZ3MuYWxsb3dfZGlzbWlzcykge1xuXHRcdFx0XHR0aGlzLiRlbGUuZmluZCgnW2RhdGEtbm90aWZ5PVwiZGlzbWlzc1wiXScpLmNzcygnZGlzcGxheScsICdub25lJyk7XG5cdFx0XHR9XG5cdFx0XHRpZiAoKHRoaXMuc2V0dGluZ3MuZGVsYXkgPD0gMCAmJiAhdGhpcy5zZXR0aW5ncy5zaG93UHJvZ3Jlc3NiYXIpIHx8ICF0aGlzLnNldHRpbmdzLnNob3dQcm9ncmVzc2Jhcikge1xuXHRcdFx0XHR0aGlzLiRlbGUuZmluZCgnW2RhdGEtbm90aWZ5PVwicHJvZ3Jlc3NiYXJcIl0nKS5yZW1vdmUoKTtcblx0XHRcdH1cblx0XHR9LFxuXHRcdHNldEljb246IGZ1bmN0aW9uKCkge1xuXHRcdFx0aWYgKHRoaXMuc2V0dGluZ3MuaWNvbl90eXBlLnRvTG93ZXJDYXNlKCkgPT0gJ2NsYXNzJykge1xuXHRcdFx0XHR0aGlzLiRlbGUuZmluZCgnW2RhdGEtbm90aWZ5PVwiaWNvblwiXScpLmFkZENsYXNzKHRoaXMuc2V0dGluZ3MuY29udGVudC5pY29uKTtcblx0XHRcdH1lbHNle1xuXHRcdFx0XHRpZiAodGhpcy4kZWxlLmZpbmQoJ1tkYXRhLW5vdGlmeT1cImljb25cIl0nKS5pcygnaW1nJykpIHtcblx0XHRcdFx0XHR0aGlzLiRlbGUuZmluZCgnW2RhdGEtbm90aWZ5PVwiaWNvblwiXScpLmF0dHIoJ3NyYycsIHRoaXMuc2V0dGluZ3MuY29udGVudC5pY29uKTtcblx0XHRcdFx0fWVsc2V7XG5cdFx0XHRcdFx0dGhpcy4kZWxlLmZpbmQoJ1tkYXRhLW5vdGlmeT1cImljb25cIl0nKS5hcHBlbmQoJzxpbWcgc3JjPVwiJyt0aGlzLnNldHRpbmdzLmNvbnRlbnQuaWNvbisnXCIgYWx0PVwiTm90aWZ5IEljb25cIiAvPicpO1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSxcblx0XHRzdHlsZURpc21pc3M6IGZ1bmN0aW9uKCkge1xuXHRcdFx0dGhpcy4kZWxlLmZpbmQoJ1tkYXRhLW5vdGlmeT1cImRpc21pc3NcIl0nKS5jc3Moe1xuXHRcdFx0XHRwb3NpdGlvbjogJ2Fic29sdXRlJyxcblx0XHRcdFx0cmlnaHQ6ICcxMHB4Jyxcblx0XHRcdFx0dG9wOiAnNXB4Jyxcblx0XHRcdFx0ekluZGV4OiB0aGlzLnNldHRpbmdzLnpfaW5kZXggKyAyXG5cdFx0XHR9KTtcblx0XHR9LFxuXHRcdHN0eWxlVVJMOiBmdW5jdGlvbigpIHtcblx0XHRcdHRoaXMuJGVsZS5maW5kKCdbZGF0YS1ub3RpZnk9XCJ1cmxcIl0nKS5jc3Moe1xuXHRcdFx0XHRiYWNrZ3JvdW5kSW1hZ2U6ICd1cmwoZGF0YTppbWFnZS9naWY7YmFzZTY0LFIwbEdPRGxoQVFBQkFJQUFBQUFBQVAvLy95SDVCQUVBQUFBQUxBQUFBQUFCQUFFQUFBSUJSQUE3KScsXG5cdFx0XHRcdGhlaWdodDogJzEwMCUnLFxuXHRcdFx0XHRsZWZ0OiAnMHB4Jyxcblx0XHRcdFx0cG9zaXRpb246ICdhYnNvbHV0ZScsXG5cdFx0XHRcdHRvcDogJzBweCcsXG5cdFx0XHRcdHdpZHRoOiAnMTAwJScsXG5cdFx0XHRcdHpJbmRleDogdGhpcy5zZXR0aW5ncy56X2luZGV4ICsgMVxuXHRcdFx0fSk7XG5cdFx0fSxcblx0XHRwbGFjZW1lbnQ6IGZ1bmN0aW9uKCkge1xuXHRcdFx0dmFyIHNlbGYgPSB0aGlzLFxuXHRcdFx0XHRvZmZzZXRBbXQgPSB0aGlzLnNldHRpbmdzLm9mZnNldC55LFxuXHRcdFx0XHRjc3MgPSB7XG5cdFx0XHRcdFx0ZGlzcGxheTogJ2lubGluZS1ibG9jaycsXG5cdFx0XHRcdFx0bWFyZ2luOiAnMHB4IGF1dG8nLFxuXHRcdFx0XHRcdHBvc2l0aW9uOiB0aGlzLnNldHRpbmdzLnBvc2l0aW9uID8gIHRoaXMuc2V0dGluZ3MucG9zaXRpb24gOiAodGhpcy5zZXR0aW5ncy5lbGVtZW50ID09PSAnYm9keScgPyAnZml4ZWQnIDogJ2Fic29sdXRlJyksXG5cdFx0XHRcdFx0dHJhbnNpdGlvbjogJ2FsbCAuNXMgZWFzZS1pbi1vdXQnLFxuXHRcdFx0XHRcdHpJbmRleDogdGhpcy5zZXR0aW5ncy56X2luZGV4XG5cdFx0XHRcdH0sXG5cdFx0XHRcdGhhc0FuaW1hdGlvbiA9IGZhbHNlLFxuXHRcdFx0XHRzZXR0aW5ncyA9IHRoaXMuc2V0dGluZ3M7XG5cblx0XHRcdCQoJ1tkYXRhLW5vdGlmeS1wb3NpdGlvbj1cIicgKyB0aGlzLnNldHRpbmdzLnBsYWNlbWVudC5mcm9tICsgJy0nICsgdGhpcy5zZXR0aW5ncy5wbGFjZW1lbnQuYWxpZ24gKyAnXCJdOm5vdChbZGF0YS1jbG9zaW5nPVwidHJ1ZVwiXSknKS5lYWNoKGZ1bmN0aW9uKCkge1xuXHRcdFx0XHRyZXR1cm4gb2Zmc2V0QW10ID0gTWF0aC5tYXgob2Zmc2V0QW10LCBwYXJzZUludCgkKHRoaXMpLmNzcyhzZXR0aW5ncy5wbGFjZW1lbnQuZnJvbSkpICsgIHBhcnNlSW50KCQodGhpcykub3V0ZXJIZWlnaHQoKSkgKyAgcGFyc2VJbnQoc2V0dGluZ3Muc3BhY2luZykpO1xuXHRcdFx0fSk7XG5cdFx0XHRpZiAodGhpcy5zZXR0aW5ncy5uZXdlc3Rfb25fdG9wID09IHRydWUpIHtcblx0XHRcdFx0b2Zmc2V0QW10ID0gdGhpcy5zZXR0aW5ncy5vZmZzZXQueTtcblx0XHRcdH1cblx0XHRcdGNzc1t0aGlzLnNldHRpbmdzLnBsYWNlbWVudC5mcm9tXSA9IG9mZnNldEFtdCsncHgnO1xuXG5cdFx0XHRzd2l0Y2ggKHRoaXMuc2V0dGluZ3MucGxhY2VtZW50LmFsaWduKSB7XG5cdFx0XHRcdGNhc2UgXCJsZWZ0XCI6XG5cdFx0XHRcdGNhc2UgXCJyaWdodFwiOlxuXHRcdFx0XHRcdGNzc1t0aGlzLnNldHRpbmdzLnBsYWNlbWVudC5hbGlnbl0gPSB0aGlzLnNldHRpbmdzLm9mZnNldC54KydweCc7XG5cdFx0XHRcdFx0YnJlYWs7XG5cdFx0XHRcdGNhc2UgXCJjZW50ZXJcIjpcblx0XHRcdFx0XHRjc3MubGVmdCA9IDA7XG5cdFx0XHRcdFx0Y3NzLnJpZ2h0ID0gMDtcblx0XHRcdFx0XHRicmVhaztcblx0XHRcdH1cblx0XHRcdHRoaXMuJGVsZS5jc3MoY3NzKS5hZGRDbGFzcyh0aGlzLnNldHRpbmdzLmFuaW1hdGUuZW50ZXIpO1xuXHRcdFx0JC5lYWNoKEFycmF5KCd3ZWJraXQtJywgJ21vei0nLCAnby0nLCAnbXMtJywgJycpLCBmdW5jdGlvbihpbmRleCwgcHJlZml4KSB7XG5cdFx0XHRcdHNlbGYuJGVsZVswXS5zdHlsZVtwcmVmaXgrJ0FuaW1hdGlvbkl0ZXJhdGlvbkNvdW50J10gPSAxO1xuXHRcdFx0fSk7XG5cblx0XHRcdCQodGhpcy5zZXR0aW5ncy5lbGVtZW50KS5hcHBlbmQodGhpcy4kZWxlKTtcblxuXHRcdFx0aWYgKHRoaXMuc2V0dGluZ3MubmV3ZXN0X29uX3RvcCA9PSB0cnVlKSB7XG5cdFx0XHRcdG9mZnNldEFtdCA9IChwYXJzZUludChvZmZzZXRBbXQpK3BhcnNlSW50KHRoaXMuc2V0dGluZ3Muc3BhY2luZykpICsgdGhpcy4kZWxlLm91dGVySGVpZ2h0KCk7XG5cdFx0XHRcdHRoaXMucmVwb3NpdGlvbihvZmZzZXRBbXQpO1xuXHRcdFx0fVxuXG5cdFx0XHRpZiAoJC5pc0Z1bmN0aW9uKHNlbGYuc2V0dGluZ3Mub25TaG93KSkge1xuXHRcdFx0XHRzZWxmLnNldHRpbmdzLm9uU2hvdy5jYWxsKHRoaXMuJGVsZSk7XG5cdFx0XHR9XG5cblx0XHRcdHRoaXMuJGVsZS5vbmUodGhpcy5hbmltYXRpb25zLnN0YXJ0LCBmdW5jdGlvbihldmVudCkge1xuXHRcdFx0XHRoYXNBbmltYXRpb24gPSB0cnVlO1xuXHRcdFx0fSkub25lKHRoaXMuYW5pbWF0aW9ucy5lbmQsIGZ1bmN0aW9uKGV2ZW50KSB7XG5cdFx0XHRcdGlmICgkLmlzRnVuY3Rpb24oc2VsZi5zZXR0aW5ncy5vblNob3duKSkge1xuXHRcdFx0XHRcdHNlbGYuc2V0dGluZ3Mub25TaG93bi5jYWxsKHRoaXMpO1xuXHRcdFx0XHR9XG5cdFx0XHR9KTtcblxuXHRcdFx0c2V0VGltZW91dChmdW5jdGlvbigpIHtcblx0XHRcdFx0aWYgKCFoYXNBbmltYXRpb24pIHtcblx0XHRcdFx0XHRpZiAoJC5pc0Z1bmN0aW9uKHNlbGYuc2V0dGluZ3Mub25TaG93bikpIHtcblx0XHRcdFx0XHRcdHNlbGYuc2V0dGluZ3Mub25TaG93bi5jYWxsKHRoaXMpO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0fVxuXHRcdFx0fSwgNjAwKTtcblx0XHR9LFxuXHRcdGJpbmQ6IGZ1bmN0aW9uKCkge1xuXHRcdFx0dmFyIHNlbGYgPSB0aGlzO1xuXG5cdFx0XHR0aGlzLiRlbGUuZmluZCgnW2RhdGEtbm90aWZ5PVwiZGlzbWlzc1wiXScpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuXHRcdFx0XHRzZWxmLmNsb3NlKCk7XG5cdFx0XHR9KVxuXG5cdFx0XHR0aGlzLiRlbGUubW91c2VvdmVyKGZ1bmN0aW9uKGUpIHtcblx0XHRcdFx0JCh0aGlzKS5kYXRhKCdkYXRhLWhvdmVyJywgXCJ0cnVlXCIpO1xuXHRcdFx0fSkubW91c2VvdXQoZnVuY3Rpb24oZSkge1xuXHRcdFx0XHQkKHRoaXMpLmRhdGEoJ2RhdGEtaG92ZXInLCBcImZhbHNlXCIpO1xuXHRcdFx0fSk7XG5cdFx0XHR0aGlzLiRlbGUuZGF0YSgnZGF0YS1ob3ZlcicsIFwiZmFsc2VcIik7XG5cblx0XHRcdGlmICh0aGlzLnNldHRpbmdzLmRlbGF5ID4gMCkge1xuXHRcdFx0XHRzZWxmLiRlbGUuZGF0YSgnbm90aWZ5LWRlbGF5Jywgc2VsZi5zZXR0aW5ncy5kZWxheSk7XG5cdFx0XHRcdHZhciB0aW1lciA9IHNldEludGVydmFsKGZ1bmN0aW9uKCkge1xuXHRcdFx0XHRcdHZhciBkZWxheSA9IHBhcnNlSW50KHNlbGYuJGVsZS5kYXRhKCdub3RpZnktZGVsYXknKSkgLSBzZWxmLnNldHRpbmdzLnRpbWVyO1xuXHRcdFx0XHRcdGlmICgoc2VsZi4kZWxlLmRhdGEoJ2RhdGEtaG92ZXInKSA9PT0gJ2ZhbHNlJyAmJiBzZWxmLnNldHRpbmdzLm1vdXNlX292ZXIgPT0gXCJwYXVzZVwiKSB8fCBzZWxmLnNldHRpbmdzLm1vdXNlX292ZXIgIT0gXCJwYXVzZVwiKSB7XG5cdFx0XHRcdFx0XHR2YXIgcGVyY2VudCA9ICgoc2VsZi5zZXR0aW5ncy5kZWxheSAtIGRlbGF5KSAvIHNlbGYuc2V0dGluZ3MuZGVsYXkpICogMTAwO1xuXHRcdFx0XHRcdFx0c2VsZi4kZWxlLmRhdGEoJ25vdGlmeS1kZWxheScsIGRlbGF5KTtcblx0XHRcdFx0XHRcdHNlbGYuJGVsZS5maW5kKCdbZGF0YS1ub3RpZnk9XCJwcm9ncmVzc2JhclwiXSA+IGRpdicpLmF0dHIoJ2FyaWEtdmFsdWVub3cnLCBwZXJjZW50KS5jc3MoJ3dpZHRoJywgcGVyY2VudCArICclJyk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdGlmIChkZWxheSA8PSAtKHNlbGYuc2V0dGluZ3MudGltZXIpKSB7XG5cdFx0XHRcdFx0XHRjbGVhckludGVydmFsKHRpbWVyKTtcblx0XHRcdFx0XHRcdHNlbGYuY2xvc2UoKTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH0sIHNlbGYuc2V0dGluZ3MudGltZXIpO1xuXHRcdFx0fVxuXHRcdH0sXG5cdFx0Y2xvc2U6IGZ1bmN0aW9uKCkge1xuXHRcdFx0dmFyIHNlbGYgPSB0aGlzLFxuXHRcdFx0XHQkc3VjY2Vzc29ycyA9IG51bGwsXG5cdFx0XHRcdHBvc1ggPSBwYXJzZUludCh0aGlzLiRlbGUuY3NzKHRoaXMuc2V0dGluZ3MucGxhY2VtZW50LmZyb20pKSxcblx0XHRcdFx0aGFzQW5pbWF0aW9uID0gZmFsc2U7XG5cblx0XHRcdHRoaXMuJGVsZS5kYXRhKCdjbG9zaW5nJywgJ3RydWUnKS5hZGRDbGFzcyh0aGlzLnNldHRpbmdzLmFuaW1hdGUuZXhpdCk7XG5cdFx0XHRzZWxmLnJlcG9zaXRpb24ocG9zWCk7XG5cblx0XHRcdGlmICgkLmlzRnVuY3Rpb24oc2VsZi5zZXR0aW5ncy5vbkNsb3NlKSkge1xuXHRcdFx0XHRzZWxmLnNldHRpbmdzLm9uQ2xvc2UuY2FsbCh0aGlzLiRlbGUpO1xuXHRcdFx0fVxuXG5cdFx0XHR0aGlzLiRlbGUub25lKHRoaXMuYW5pbWF0aW9ucy5zdGFydCwgZnVuY3Rpb24oZXZlbnQpIHtcblx0XHRcdFx0aGFzQW5pbWF0aW9uID0gdHJ1ZTtcblx0XHRcdH0pLm9uZSh0aGlzLmFuaW1hdGlvbnMuZW5kLCBmdW5jdGlvbihldmVudCkge1xuXHRcdFx0XHQkKHRoaXMpLnJlbW92ZSgpO1xuXHRcdFx0XHRpZiAoJC5pc0Z1bmN0aW9uKHNlbGYuc2V0dGluZ3Mub25DbG9zZWQpKSB7XG5cdFx0XHRcdFx0c2VsZi5zZXR0aW5ncy5vbkNsb3NlZC5jYWxsKHRoaXMpO1xuXHRcdFx0XHR9XG5cdFx0XHR9KTtcblxuXHRcdFx0c2V0VGltZW91dChmdW5jdGlvbigpIHtcblx0XHRcdFx0aWYgKCFoYXNBbmltYXRpb24pIHtcblx0XHRcdFx0XHRzZWxmLiRlbGUucmVtb3ZlKCk7XG5cdFx0XHRcdFx0aWYgKHNlbGYuc2V0dGluZ3Mub25DbG9zZWQpIHtcblx0XHRcdFx0XHRcdHNlbGYuc2V0dGluZ3Mub25DbG9zZWQoc2VsZi4kZWxlKTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH1cblx0XHRcdH0sIDYwMCk7XG5cdFx0fSxcblx0XHRyZXBvc2l0aW9uOiBmdW5jdGlvbihwb3NYKSB7XG5cdFx0XHR2YXIgc2VsZiA9IHRoaXMsXG5cdFx0XHRcdG5vdGlmaWVzID0gJ1tkYXRhLW5vdGlmeS1wb3NpdGlvbj1cIicgKyB0aGlzLnNldHRpbmdzLnBsYWNlbWVudC5mcm9tICsgJy0nICsgdGhpcy5zZXR0aW5ncy5wbGFjZW1lbnQuYWxpZ24gKyAnXCJdOm5vdChbZGF0YS1jbG9zaW5nPVwidHJ1ZVwiXSknLFxuXHRcdFx0XHQkZWxlbWVudHMgPSB0aGlzLiRlbGUubmV4dEFsbChub3RpZmllcyk7XG5cdFx0XHRpZiAodGhpcy5zZXR0aW5ncy5uZXdlc3Rfb25fdG9wID09IHRydWUpIHtcblx0XHRcdFx0JGVsZW1lbnRzID0gdGhpcy4kZWxlLnByZXZBbGwobm90aWZpZXMpO1xuXHRcdFx0fVxuXHRcdFx0JGVsZW1lbnRzLmVhY2goZnVuY3Rpb24oKSB7XG5cdFx0XHRcdCQodGhpcykuY3NzKHNlbGYuc2V0dGluZ3MucGxhY2VtZW50LmZyb20sIHBvc1gpO1xuXHRcdFx0XHRwb3NYID0gKHBhcnNlSW50KHBvc1gpK3BhcnNlSW50KHNlbGYuc2V0dGluZ3Muc3BhY2luZykpICsgJCh0aGlzKS5vdXRlckhlaWdodCgpO1xuXHRcdFx0fSk7XG5cdFx0fVxuXHR9KTtcblxuXHQkLm5vdGlmeSA9IGZ1bmN0aW9uICggY29udGVudCwgb3B0aW9ucyApIHtcblx0XHR2YXIgcGx1Z2luID0gbmV3IE5vdGlmeSggdGhpcywgY29udGVudCwgb3B0aW9ucyApO1xuXHRcdHJldHVybiBwbHVnaW4ubm90aWZ5O1xuXHR9O1xuXHQkLm5vdGlmeURlZmF1bHRzID0gZnVuY3Rpb24oIG9wdGlvbnMgKSB7XG5cdFx0ZGVmYXVsdHMgPSAkLmV4dGVuZCh0cnVlLCB7fSwgZGVmYXVsdHMsIG9wdGlvbnMpO1xuXHRcdHJldHVybiBkZWZhdWx0cztcblx0fTtcblx0JC5ub3RpZnlDbG9zZSA9IGZ1bmN0aW9uKCBjb21tYW5kICkge1xuXHRcdGlmICh0eXBlb2YgY29tbWFuZCA9PT0gXCJ1bmRlZmluZWRcIiB8fCBjb21tYW5kID09IFwiYWxsXCIpIHtcblx0XHRcdCQoJ1tkYXRhLW5vdGlmeV0nKS5maW5kKCdbZGF0YS1ub3RpZnk9XCJkaXNtaXNzXCJdJykudHJpZ2dlcignY2xpY2snKTtcblx0XHR9ZWxzZXtcblx0XHRcdCQoJ1tkYXRhLW5vdGlmeS1wb3NpdGlvbj1cIicrY29tbWFuZCsnXCJdJykuZmluZCgnW2RhdGEtbm90aWZ5PVwiZGlzbWlzc1wiXScpLnRyaWdnZXIoJ2NsaWNrJyk7XG5cdFx0fVxuXHR9O1xuXG59KSk7XG4iLCIvKiFcbiAqIE5lc3RhYmxlIGpRdWVyeSBQbHVnaW4gLSBDb3B5cmlnaHQgKGMpIDIwMTIgRGF2aWQgQnVzaGVsbCAtIGh0dHA6Ly9kYnVzaGVsbC5jb20vXG4gKiBEdWFsLWxpY2Vuc2VkIHVuZGVyIHRoZSBCU0Qgb3IgTUlUIGxpY2Vuc2VzXG4gKi9cbjsoZnVuY3Rpb24oJCwgd2luZG93LCBkb2N1bWVudCwgdW5kZWZpbmVkKVxue1xuICAgIHZhciBoYXNUb3VjaCA9ICdvbnRvdWNoc3RhcnQnIGluIGRvY3VtZW50O1xuXG4gICAgLyoqXG4gICAgICogRGV0ZWN0IENTUyBwb2ludGVyLWV2ZW50cyBwcm9wZXJ0eVxuICAgICAqIGV2ZW50cyBhcmUgbm9ybWFsbHkgZGlzYWJsZWQgb24gdGhlIGRyYWdnaW5nIGVsZW1lbnQgdG8gYXZvaWQgY29uZmxpY3RzXG4gICAgICogaHR0cHM6Ly9naXRodWIuY29tL2F1c2kvRmVhdHVyZS1kZXRlY3Rpb24tdGVjaG5pcXVlLWZvci1wb2ludGVyLWV2ZW50cy9ibG9iL21hc3Rlci9tb2Rlcm5penItcG9pbnRlcmV2ZW50cy5qc1xuICAgICAqL1xuICAgIHZhciBoYXNQb2ludGVyRXZlbnRzID0gKGZ1bmN0aW9uKClcbiAgICB7XG4gICAgICAgIHZhciBlbCAgICA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpLFxuICAgICAgICAgICAgZG9jRWwgPSBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQ7XG4gICAgICAgIGlmICghKCdwb2ludGVyRXZlbnRzJyBpbiBlbC5zdHlsZSkpIHtcbiAgICAgICAgICAgIHJldHVybiBmYWxzZTtcbiAgICAgICAgfVxuICAgICAgICBlbC5zdHlsZS5wb2ludGVyRXZlbnRzID0gJ2F1dG8nO1xuICAgICAgICBlbC5zdHlsZS5wb2ludGVyRXZlbnRzID0gJ3gnO1xuICAgICAgICBkb2NFbC5hcHBlbmRDaGlsZChlbCk7XG4gICAgICAgIHZhciBzdXBwb3J0cyA9IHdpbmRvdy5nZXRDb21wdXRlZFN0eWxlICYmIHdpbmRvdy5nZXRDb21wdXRlZFN0eWxlKGVsLCAnJykucG9pbnRlckV2ZW50cyA9PT0gJ2F1dG8nO1xuICAgICAgICBkb2NFbC5yZW1vdmVDaGlsZChlbCk7XG4gICAgICAgIHJldHVybiAhIXN1cHBvcnRzO1xuICAgIH0pKCk7XG5cbiAgICB2YXIgZGVmYXVsdHMgPSB7XG4gICAgICAgICAgICBsaXN0Tm9kZU5hbWUgICAgOiAnb2wnLFxuICAgICAgICAgICAgaXRlbU5vZGVOYW1lICAgIDogJ2xpJyxcbiAgICAgICAgICAgIHJvb3RDbGFzcyAgICAgICA6ICdkZCcsXG4gICAgICAgICAgICBsaXN0Q2xhc3MgICAgICAgOiAnZGQtbGlzdCcsXG4gICAgICAgICAgICBpdGVtQ2xhc3MgICAgICAgOiAnZGQtaXRlbScsXG4gICAgICAgICAgICBkcmFnQ2xhc3MgICAgICAgOiAnZGQtZHJhZ2VsJyxcbiAgICAgICAgICAgIGhhbmRsZUNsYXNzICAgICA6ICdkZC1oYW5kbGUnLFxuICAgICAgICAgICAgY29sbGFwc2VkQ2xhc3MgIDogJ2RkLWNvbGxhcHNlZCcsXG4gICAgICAgICAgICBwbGFjZUNsYXNzICAgICAgOiAnZGQtcGxhY2Vob2xkZXInLFxuICAgICAgICAgICAgbm9EcmFnQ2xhc3MgICAgIDogJ2RkLW5vZHJhZycsXG4gICAgICAgICAgICBlbXB0eUNsYXNzICAgICAgOiAnZGQtZW1wdHknLFxuICAgICAgICAgICAgZXhwYW5kQnRuSFRNTCAgIDogJzxidXR0b24gZGF0YS1hY3Rpb249XCJleHBhbmRcIiB0eXBlPVwiYnV0dG9uXCI+RXhwYW5kPC9idXR0b24+JyxcbiAgICAgICAgICAgIGNvbGxhcHNlQnRuSFRNTCA6ICc8YnV0dG9uIGRhdGEtYWN0aW9uPVwiY29sbGFwc2VcIiB0eXBlPVwiYnV0dG9uXCI+Q29sbGFwc2U8L2J1dHRvbj4nLFxuICAgICAgICAgICAgZ3JvdXAgICAgICAgICAgIDogMCxcbiAgICAgICAgICAgIG1heERlcHRoICAgICAgICA6IDUsXG4gICAgICAgICAgICB0aHJlc2hvbGQgICAgICAgOiAyMFxuICAgICAgICB9O1xuXG4gICAgZnVuY3Rpb24gUGx1Z2luKGVsZW1lbnQsIG9wdGlvbnMpXG4gICAge1xuICAgICAgICB0aGlzLncgID0gJChkb2N1bWVudCk7XG4gICAgICAgIHRoaXMuZWwgPSAkKGVsZW1lbnQpO1xuICAgICAgICB0aGlzLm9wdGlvbnMgPSAkLmV4dGVuZCh7fSwgZGVmYXVsdHMsIG9wdGlvbnMpO1xuICAgICAgICB0aGlzLmluaXQoKTtcbiAgICB9XG5cbiAgICBQbHVnaW4ucHJvdG90eXBlID0ge1xuXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uKClcbiAgICAgICAge1xuICAgICAgICAgICAgdmFyIGxpc3QgPSB0aGlzO1xuXG4gICAgICAgICAgICBsaXN0LnJlc2V0KCk7XG5cbiAgICAgICAgICAgIGxpc3QuZWwuZGF0YSgnbmVzdGFibGUtZ3JvdXAnLCB0aGlzLm9wdGlvbnMuZ3JvdXApO1xuXG4gICAgICAgICAgICBsaXN0LnBsYWNlRWwgPSAkKCc8ZGl2IGNsYXNzPVwiJyArIGxpc3Qub3B0aW9ucy5wbGFjZUNsYXNzICsgJ1wiLz4nKTtcblxuICAgICAgICAgICAgJC5lYWNoKHRoaXMuZWwuZmluZChsaXN0Lm9wdGlvbnMuaXRlbU5vZGVOYW1lKSwgZnVuY3Rpb24oaywgZWwpIHtcbiAgICAgICAgICAgICAgICBsaXN0LnNldFBhcmVudCgkKGVsKSk7XG4gICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgbGlzdC5lbC5vbignY2xpY2snLCAnYnV0dG9uJywgZnVuY3Rpb24oZSkge1xuICAgICAgICAgICAgICAgIGlmIChsaXN0LmRyYWdFbCkge1xuICAgICAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIHZhciB0YXJnZXQgPSAkKGUuY3VycmVudFRhcmdldCksXG4gICAgICAgICAgICAgICAgICAgIGFjdGlvbiA9IHRhcmdldC5kYXRhKCdhY3Rpb24nKSxcbiAgICAgICAgICAgICAgICAgICAgaXRlbSAgID0gdGFyZ2V0LnBhcmVudChsaXN0Lm9wdGlvbnMuaXRlbU5vZGVOYW1lKTtcbiAgICAgICAgICAgICAgICBpZiAoYWN0aW9uID09PSAnY29sbGFwc2UnKSB7XG4gICAgICAgICAgICAgICAgICAgIGxpc3QuY29sbGFwc2VJdGVtKGl0ZW0pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBpZiAoYWN0aW9uID09PSAnZXhwYW5kJykge1xuICAgICAgICAgICAgICAgICAgICBsaXN0LmV4cGFuZEl0ZW0oaXRlbSk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIHZhciBvblN0YXJ0RXZlbnQgPSBmdW5jdGlvbihlKVxuICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgIHZhciBoYW5kbGUgPSAkKGUudGFyZ2V0KTtcbiAgICAgICAgICAgICAgICBpZiAoIWhhbmRsZS5oYXNDbGFzcyhsaXN0Lm9wdGlvbnMuaGFuZGxlQ2xhc3MpKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChoYW5kbGUuY2xvc2VzdCgnLicgKyBsaXN0Lm9wdGlvbnMubm9EcmFnQ2xhc3MpLmxlbmd0aCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIGhhbmRsZSA9IGhhbmRsZS5jbG9zZXN0KCcuJyArIGxpc3Qub3B0aW9ucy5oYW5kbGVDbGFzcyk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgaWYgKCFoYW5kbGUubGVuZ3RoIHx8IGxpc3QuZHJhZ0VsKSB7XG4gICAgICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICBsaXN0LmlzVG91Y2ggPSAvXnRvdWNoLy50ZXN0KGUudHlwZSk7XG4gICAgICAgICAgICAgICAgaWYgKGxpc3QuaXNUb3VjaCAmJiBlLnRvdWNoZXMubGVuZ3RoICE9PSAxKSB7XG4gICAgICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAgICAgbGlzdC5kcmFnU3RhcnQoZS50b3VjaGVzID8gZS50b3VjaGVzWzBdIDogZSk7XG4gICAgICAgICAgICB9O1xuXG4gICAgICAgICAgICB2YXIgb25Nb3ZlRXZlbnQgPSBmdW5jdGlvbihlKVxuICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgIGlmIChsaXN0LmRyYWdFbCkge1xuICAgICAgICAgICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAgICAgICAgIGxpc3QuZHJhZ01vdmUoZS50b3VjaGVzID8gZS50b3VjaGVzWzBdIDogZSk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfTtcblxuICAgICAgICAgICAgdmFyIG9uRW5kRXZlbnQgPSBmdW5jdGlvbihlKVxuICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgIGlmIChsaXN0LmRyYWdFbCkge1xuICAgICAgICAgICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAgICAgICAgIGxpc3QuZHJhZ1N0b3AoZS50b3VjaGVzID8gZS50b3VjaGVzWzBdIDogZSk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfTtcblxuICAgICAgICAgICAgaWYgKGhhc1RvdWNoKSB7XG4gICAgICAgICAgICAgICAgbGlzdC5lbFswXS5hZGRFdmVudExpc3RlbmVyKCd0b3VjaHN0YXJ0Jywgb25TdGFydEV2ZW50LCBmYWxzZSk7XG4gICAgICAgICAgICAgICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ3RvdWNobW92ZScsIG9uTW92ZUV2ZW50LCBmYWxzZSk7XG4gICAgICAgICAgICAgICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ3RvdWNoZW5kJywgb25FbmRFdmVudCwgZmFsc2UpO1xuICAgICAgICAgICAgICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCd0b3VjaGNhbmNlbCcsIG9uRW5kRXZlbnQsIGZhbHNlKTtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgbGlzdC5lbC5vbignbW91c2Vkb3duJywgb25TdGFydEV2ZW50KTtcbiAgICAgICAgICAgIGxpc3Qudy5vbignbW91c2Vtb3ZlJywgb25Nb3ZlRXZlbnQpO1xuICAgICAgICAgICAgbGlzdC53Lm9uKCdtb3VzZXVwJywgb25FbmRFdmVudCk7XG5cbiAgICAgICAgfSxcblxuICAgICAgICBzZXJpYWxpemU6IGZ1bmN0aW9uKClcbiAgICAgICAge1xuICAgICAgICAgICAgdmFyIGRhdGEsXG4gICAgICAgICAgICAgICAgZGVwdGggPSAwLFxuICAgICAgICAgICAgICAgIGxpc3QgID0gdGhpcztcbiAgICAgICAgICAgICAgICBzdGVwICA9IGZ1bmN0aW9uKGxldmVsLCBkZXB0aClcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIHZhciBhcnJheSA9IFsgXSxcbiAgICAgICAgICAgICAgICAgICAgICAgIGl0ZW1zID0gbGV2ZWwuY2hpbGRyZW4obGlzdC5vcHRpb25zLml0ZW1Ob2RlTmFtZSk7XG4gICAgICAgICAgICAgICAgICAgIGl0ZW1zLmVhY2goZnVuY3Rpb24oKVxuICAgICAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgICAgICB2YXIgbGkgICA9ICQodGhpcyksXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaXRlbSA9ICQuZXh0ZW5kKHt9LCBsaS5kYXRhKCkpLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN1YiAgPSBsaS5jaGlsZHJlbihsaXN0Lm9wdGlvbnMubGlzdE5vZGVOYW1lKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChzdWIubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaXRlbS5jaGlsZHJlbiA9IHN0ZXAoc3ViLCBkZXB0aCArIDEpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgYXJyYXkucHVzaChpdGVtKTtcbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgIHJldHVybiBhcnJheTtcbiAgICAgICAgICAgICAgICB9O1xuICAgICAgICAgICAgZGF0YSA9IHN0ZXAobGlzdC5lbC5maW5kKGxpc3Qub3B0aW9ucy5saXN0Tm9kZU5hbWUpLmZpcnN0KCksIGRlcHRoKTtcbiAgICAgICAgICAgIHJldHVybiBkYXRhO1xuICAgICAgICB9LFxuXG4gICAgICAgIHNlcmlhbGlzZTogZnVuY3Rpb24oKVxuICAgICAgICB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5zZXJpYWxpemUoKTtcbiAgICAgICAgfSxcblxuICAgICAgICByZXNldDogZnVuY3Rpb24oKVxuICAgICAgICB7XG4gICAgICAgICAgICB0aGlzLm1vdXNlID0ge1xuICAgICAgICAgICAgICAgIG9mZnNldFggICA6IDAsXG4gICAgICAgICAgICAgICAgb2Zmc2V0WSAgIDogMCxcbiAgICAgICAgICAgICAgICBzdGFydFggICAgOiAwLFxuICAgICAgICAgICAgICAgIHN0YXJ0WSAgICA6IDAsXG4gICAgICAgICAgICAgICAgbGFzdFggICAgIDogMCxcbiAgICAgICAgICAgICAgICBsYXN0WSAgICAgOiAwLFxuICAgICAgICAgICAgICAgIG5vd1ggICAgICA6IDAsXG4gICAgICAgICAgICAgICAgbm93WSAgICAgIDogMCxcbiAgICAgICAgICAgICAgICBkaXN0WCAgICAgOiAwLFxuICAgICAgICAgICAgICAgIGRpc3RZICAgICA6IDAsXG4gICAgICAgICAgICAgICAgZGlyQXggICAgIDogMCxcbiAgICAgICAgICAgICAgICBkaXJYICAgICAgOiAwLFxuICAgICAgICAgICAgICAgIGRpclkgICAgICA6IDAsXG4gICAgICAgICAgICAgICAgbGFzdERpclggIDogMCxcbiAgICAgICAgICAgICAgICBsYXN0RGlyWSAgOiAwLFxuICAgICAgICAgICAgICAgIGRpc3RBeFggICA6IDAsXG4gICAgICAgICAgICAgICAgZGlzdEF4WSAgIDogMFxuICAgICAgICAgICAgfTtcbiAgICAgICAgICAgIHRoaXMuaXNUb3VjaCAgICA9IGZhbHNlO1xuICAgICAgICAgICAgdGhpcy5tb3ZpbmcgICAgID0gZmFsc2U7XG4gICAgICAgICAgICB0aGlzLmRyYWdFbCAgICAgPSBudWxsO1xuICAgICAgICAgICAgdGhpcy5kcmFnUm9vdEVsID0gbnVsbDtcbiAgICAgICAgICAgIHRoaXMuZHJhZ0RlcHRoICA9IDA7XG4gICAgICAgICAgICB0aGlzLmhhc05ld1Jvb3QgPSBmYWxzZTtcbiAgICAgICAgICAgIHRoaXMucG9pbnRFbCAgICA9IG51bGw7XG4gICAgICAgIH0sXG5cbiAgICAgICAgZXhwYW5kSXRlbTogZnVuY3Rpb24obGkpXG4gICAgICAgIHtcbiAgICAgICAgICAgIGxpLnJlbW92ZUNsYXNzKHRoaXMub3B0aW9ucy5jb2xsYXBzZWRDbGFzcyk7XG4gICAgICAgICAgICBsaS5jaGlsZHJlbignW2RhdGEtYWN0aW9uPVwiZXhwYW5kXCJdJykuaGlkZSgpO1xuICAgICAgICAgICAgbGkuY2hpbGRyZW4oJ1tkYXRhLWFjdGlvbj1cImNvbGxhcHNlXCJdJykuc2hvdygpO1xuICAgICAgICAgICAgbGkuY2hpbGRyZW4odGhpcy5vcHRpb25zLmxpc3ROb2RlTmFtZSkuc2hvdygpO1xuICAgICAgICB9LFxuXG4gICAgICAgIGNvbGxhcHNlSXRlbTogZnVuY3Rpb24obGkpXG4gICAgICAgIHtcbiAgICAgICAgICAgIHZhciBsaXN0cyA9IGxpLmNoaWxkcmVuKHRoaXMub3B0aW9ucy5saXN0Tm9kZU5hbWUpO1xuICAgICAgICAgICAgaWYgKGxpc3RzLmxlbmd0aCkge1xuICAgICAgICAgICAgICAgIGxpLmFkZENsYXNzKHRoaXMub3B0aW9ucy5jb2xsYXBzZWRDbGFzcyk7XG4gICAgICAgICAgICAgICAgbGkuY2hpbGRyZW4oJ1tkYXRhLWFjdGlvbj1cImNvbGxhcHNlXCJdJykuaGlkZSgpO1xuICAgICAgICAgICAgICAgIGxpLmNoaWxkcmVuKCdbZGF0YS1hY3Rpb249XCJleHBhbmRcIl0nKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgbGkuY2hpbGRyZW4odGhpcy5vcHRpb25zLmxpc3ROb2RlTmFtZSkuaGlkZSgpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuXG4gICAgICAgIGV4cGFuZEFsbDogZnVuY3Rpb24oKVxuICAgICAgICB7XG4gICAgICAgICAgICB2YXIgbGlzdCA9IHRoaXM7XG4gICAgICAgICAgICBsaXN0LmVsLmZpbmQobGlzdC5vcHRpb25zLml0ZW1Ob2RlTmFtZSkuZWFjaChmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICAgICBsaXN0LmV4cGFuZEl0ZW0oJCh0aGlzKSk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSxcblxuICAgICAgICBjb2xsYXBzZUFsbDogZnVuY3Rpb24oKVxuICAgICAgICB7XG4gICAgICAgICAgICB2YXIgbGlzdCA9IHRoaXM7XG4gICAgICAgICAgICBsaXN0LmVsLmZpbmQobGlzdC5vcHRpb25zLml0ZW1Ob2RlTmFtZSkuZWFjaChmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICAgICBsaXN0LmNvbGxhcHNlSXRlbSgkKHRoaXMpKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9LFxuXG4gICAgICAgIHNldFBhcmVudDogZnVuY3Rpb24obGkpXG4gICAgICAgIHtcbiAgICAgICAgICAgIGlmIChsaS5jaGlsZHJlbih0aGlzLm9wdGlvbnMubGlzdE5vZGVOYW1lKS5sZW5ndGgpIHtcbiAgICAgICAgICAgICAgICBsaS5wcmVwZW5kKCQodGhpcy5vcHRpb25zLmV4cGFuZEJ0bkhUTUwpKTtcbiAgICAgICAgICAgICAgICBsaS5wcmVwZW5kKCQodGhpcy5vcHRpb25zLmNvbGxhcHNlQnRuSFRNTCkpO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgbGkuY2hpbGRyZW4oJ1tkYXRhLWFjdGlvbj1cImV4cGFuZFwiXScpLmhpZGUoKTtcbiAgICAgICAgfSxcblxuICAgICAgICB1bnNldFBhcmVudDogZnVuY3Rpb24obGkpXG4gICAgICAgIHtcbiAgICAgICAgICAgIGxpLnJlbW92ZUNsYXNzKHRoaXMub3B0aW9ucy5jb2xsYXBzZWRDbGFzcyk7XG4gICAgICAgICAgICBsaS5jaGlsZHJlbignW2RhdGEtYWN0aW9uXScpLnJlbW92ZSgpO1xuICAgICAgICAgICAgbGkuY2hpbGRyZW4odGhpcy5vcHRpb25zLmxpc3ROb2RlTmFtZSkucmVtb3ZlKCk7XG4gICAgICAgIH0sXG5cbiAgICAgICAgZHJhZ1N0YXJ0OiBmdW5jdGlvbihlKVxuICAgICAgICB7XG4gICAgICAgICAgICB2YXIgbW91c2UgICAgPSB0aGlzLm1vdXNlLFxuICAgICAgICAgICAgICAgIHRhcmdldCAgID0gJChlLnRhcmdldCksXG4gICAgICAgICAgICAgICAgZHJhZ0l0ZW0gPSB0YXJnZXQuY2xvc2VzdCh0aGlzLm9wdGlvbnMuaXRlbU5vZGVOYW1lKTtcblxuICAgICAgICAgICAgdGhpcy5wbGFjZUVsLmNzcygnaGVpZ2h0JywgZHJhZ0l0ZW0uaGVpZ2h0KCkpO1xuXG4gICAgICAgICAgICBtb3VzZS5vZmZzZXRYID0gZS5vZmZzZXRYICE9PSB1bmRlZmluZWQgPyBlLm9mZnNldFggOiBlLnBhZ2VYIC0gdGFyZ2V0Lm9mZnNldCgpLmxlZnQ7XG4gICAgICAgICAgICBtb3VzZS5vZmZzZXRZID0gZS5vZmZzZXRZICE9PSB1bmRlZmluZWQgPyBlLm9mZnNldFkgOiBlLnBhZ2VZIC0gdGFyZ2V0Lm9mZnNldCgpLnRvcDtcbiAgICAgICAgICAgIG1vdXNlLnN0YXJ0WCA9IG1vdXNlLmxhc3RYID0gZS5wYWdlWDtcbiAgICAgICAgICAgIG1vdXNlLnN0YXJ0WSA9IG1vdXNlLmxhc3RZID0gZS5wYWdlWTtcblxuICAgICAgICAgICAgdGhpcy5kcmFnUm9vdEVsID0gdGhpcy5lbDtcblxuICAgICAgICAgICAgdGhpcy5kcmFnRWwgPSAkKGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQodGhpcy5vcHRpb25zLmxpc3ROb2RlTmFtZSkpLmFkZENsYXNzKHRoaXMub3B0aW9ucy5saXN0Q2xhc3MgKyAnICcgKyB0aGlzLm9wdGlvbnMuZHJhZ0NsYXNzKTtcbiAgICAgICAgICAgIHRoaXMuZHJhZ0VsLmNzcygnd2lkdGgnLCBkcmFnSXRlbS53aWR0aCgpKTtcblxuICAgICAgICAgICAgZHJhZ0l0ZW0uYWZ0ZXIodGhpcy5wbGFjZUVsKTtcbiAgICAgICAgICAgIGRyYWdJdGVtWzBdLnBhcmVudE5vZGUucmVtb3ZlQ2hpbGQoZHJhZ0l0ZW1bMF0pO1xuICAgICAgICAgICAgZHJhZ0l0ZW0uYXBwZW5kVG8odGhpcy5kcmFnRWwpO1xuXG4gICAgICAgICAgICAkKGRvY3VtZW50LmJvZHkpLmFwcGVuZCh0aGlzLmRyYWdFbCk7XG4gICAgICAgICAgICB0aGlzLmRyYWdFbC5jc3Moe1xuICAgICAgICAgICAgICAgICdsZWZ0JyA6IGUucGFnZVggLSBtb3VzZS5vZmZzZXRYLFxuICAgICAgICAgICAgICAgICd0b3AnICA6IGUucGFnZVkgLSBtb3VzZS5vZmZzZXRZXG4gICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIC8vIHRvdGFsIGRlcHRoIG9mIGRyYWdnaW5nIGl0ZW1cbiAgICAgICAgICAgIHZhciBpLCBkZXB0aCxcbiAgICAgICAgICAgICAgICBpdGVtcyA9IHRoaXMuZHJhZ0VsLmZpbmQodGhpcy5vcHRpb25zLml0ZW1Ob2RlTmFtZSk7XG4gICAgICAgICAgICBmb3IgKGkgPSAwOyBpIDwgaXRlbXMubGVuZ3RoOyBpKyspIHtcbiAgICAgICAgICAgICAgICBkZXB0aCA9ICQoaXRlbXNbaV0pLnBhcmVudHModGhpcy5vcHRpb25zLmxpc3ROb2RlTmFtZSkubGVuZ3RoO1xuICAgICAgICAgICAgICAgIGlmIChkZXB0aCA+IHRoaXMuZHJhZ0RlcHRoKSB7XG4gICAgICAgICAgICAgICAgICAgIHRoaXMuZHJhZ0RlcHRoID0gZGVwdGg7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuXG4gICAgICAgIGRyYWdTdG9wOiBmdW5jdGlvbihlKVxuICAgICAgICB7XG4gICAgICAgICAgICB2YXIgZWwgPSB0aGlzLmRyYWdFbC5jaGlsZHJlbih0aGlzLm9wdGlvbnMuaXRlbU5vZGVOYW1lKS5maXJzdCgpO1xuICAgICAgICAgICAgZWxbMF0ucGFyZW50Tm9kZS5yZW1vdmVDaGlsZChlbFswXSk7XG4gICAgICAgICAgICB0aGlzLnBsYWNlRWwucmVwbGFjZVdpdGgoZWwpO1xuXG4gICAgICAgICAgICB0aGlzLmRyYWdFbC5yZW1vdmUoKTtcbiAgICAgICAgICAgIHRoaXMuZWwudHJpZ2dlcignY2hhbmdlJyk7XG4gICAgICAgICAgICBpZiAodGhpcy5oYXNOZXdSb290KSB7XG4gICAgICAgICAgICAgICAgdGhpcy5kcmFnUm9vdEVsLnRyaWdnZXIoJ2NoYW5nZScpO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgdGhpcy5yZXNldCgpO1xuICAgICAgICB9LFxuXG4gICAgICAgIGRyYWdNb3ZlOiBmdW5jdGlvbihlKVxuICAgICAgICB7XG4gICAgICAgICAgICB2YXIgbGlzdCwgcGFyZW50LCBwcmV2LCBuZXh0LCBkZXB0aCxcbiAgICAgICAgICAgICAgICBvcHQgICA9IHRoaXMub3B0aW9ucyxcbiAgICAgICAgICAgICAgICBtb3VzZSA9IHRoaXMubW91c2U7XG5cbiAgICAgICAgICAgIHRoaXMuZHJhZ0VsLmNzcyh7XG4gICAgICAgICAgICAgICAgJ2xlZnQnIDogZS5wYWdlWCAtIG1vdXNlLm9mZnNldFgsXG4gICAgICAgICAgICAgICAgJ3RvcCcgIDogZS5wYWdlWSAtIG1vdXNlLm9mZnNldFlcbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAvLyBtb3VzZSBwb3NpdGlvbiBsYXN0IGV2ZW50c1xuICAgICAgICAgICAgbW91c2UubGFzdFggPSBtb3VzZS5ub3dYO1xuICAgICAgICAgICAgbW91c2UubGFzdFkgPSBtb3VzZS5ub3dZO1xuICAgICAgICAgICAgLy8gbW91c2UgcG9zaXRpb24gdGhpcyBldmVudHNcbiAgICAgICAgICAgIG1vdXNlLm5vd1ggID0gZS5wYWdlWDtcbiAgICAgICAgICAgIG1vdXNlLm5vd1kgID0gZS5wYWdlWTtcbiAgICAgICAgICAgIC8vIGRpc3RhbmNlIG1vdXNlIG1vdmVkIGJldHdlZW4gZXZlbnRzXG4gICAgICAgICAgICBtb3VzZS5kaXN0WCA9IG1vdXNlLm5vd1ggLSBtb3VzZS5sYXN0WDtcbiAgICAgICAgICAgIG1vdXNlLmRpc3RZID0gbW91c2Uubm93WSAtIG1vdXNlLmxhc3RZO1xuICAgICAgICAgICAgLy8gZGlyZWN0aW9uIG1vdXNlIHdhcyBtb3ZpbmdcbiAgICAgICAgICAgIG1vdXNlLmxhc3REaXJYID0gbW91c2UuZGlyWDtcbiAgICAgICAgICAgIG1vdXNlLmxhc3REaXJZID0gbW91c2UuZGlyWTtcbiAgICAgICAgICAgIC8vIGRpcmVjdGlvbiBtb3VzZSBpcyBub3cgbW92aW5nIChvbiBib3RoIGF4aXMpXG4gICAgICAgICAgICBtb3VzZS5kaXJYID0gbW91c2UuZGlzdFggPT09IDAgPyAwIDogbW91c2UuZGlzdFggPiAwID8gMSA6IC0xO1xuICAgICAgICAgICAgbW91c2UuZGlyWSA9IG1vdXNlLmRpc3RZID09PSAwID8gMCA6IG1vdXNlLmRpc3RZID4gMCA/IDEgOiAtMTtcbiAgICAgICAgICAgIC8vIGF4aXMgbW91c2UgaXMgbm93IG1vdmluZyBvblxuICAgICAgICAgICAgdmFyIG5ld0F4ICAgPSBNYXRoLmFicyhtb3VzZS5kaXN0WCkgPiBNYXRoLmFicyhtb3VzZS5kaXN0WSkgPyAxIDogMDtcblxuICAgICAgICAgICAgLy8gZG8gbm90aGluZyBvbiBmaXJzdCBtb3ZlXG4gICAgICAgICAgICBpZiAoIW1vdXNlLm1vdmluZykge1xuICAgICAgICAgICAgICAgIG1vdXNlLmRpckF4ICA9IG5ld0F4O1xuICAgICAgICAgICAgICAgIG1vdXNlLm1vdmluZyA9IHRydWU7XG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAvLyBjYWxjIGRpc3RhbmNlIG1vdmVkIG9uIHRoaXMgYXhpcyAoYW5kIGRpcmVjdGlvbilcbiAgICAgICAgICAgIGlmIChtb3VzZS5kaXJBeCAhPT0gbmV3QXgpIHtcbiAgICAgICAgICAgICAgICBtb3VzZS5kaXN0QXhYID0gMDtcbiAgICAgICAgICAgICAgICBtb3VzZS5kaXN0QXhZID0gMDtcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgbW91c2UuZGlzdEF4WCArPSBNYXRoLmFicyhtb3VzZS5kaXN0WCk7XG4gICAgICAgICAgICAgICAgaWYgKG1vdXNlLmRpclggIT09IDAgJiYgbW91c2UuZGlyWCAhPT0gbW91c2UubGFzdERpclgpIHtcbiAgICAgICAgICAgICAgICAgICAgbW91c2UuZGlzdEF4WCA9IDA7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIG1vdXNlLmRpc3RBeFkgKz0gTWF0aC5hYnMobW91c2UuZGlzdFkpO1xuICAgICAgICAgICAgICAgIGlmIChtb3VzZS5kaXJZICE9PSAwICYmIG1vdXNlLmRpclkgIT09IG1vdXNlLmxhc3REaXJZKSB7XG4gICAgICAgICAgICAgICAgICAgIG1vdXNlLmRpc3RBeFkgPSAwO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIG1vdXNlLmRpckF4ID0gbmV3QXg7XG5cbiAgICAgICAgICAgIC8qKlxuICAgICAgICAgICAgICogbW92ZSBob3Jpem9udGFsXG4gICAgICAgICAgICAgKi9cbiAgICAgICAgICAgIGlmIChtb3VzZS5kaXJBeCAmJiBtb3VzZS5kaXN0QXhYID49IG9wdC50aHJlc2hvbGQpIHtcbiAgICAgICAgICAgICAgICAvLyByZXNldCBtb3ZlIGRpc3RhbmNlIG9uIHgtYXhpcyBmb3IgbmV3IHBoYXNlXG4gICAgICAgICAgICAgICAgbW91c2UuZGlzdEF4WCA9IDA7XG4gICAgICAgICAgICAgICAgcHJldiA9IHRoaXMucGxhY2VFbC5wcmV2KG9wdC5pdGVtTm9kZU5hbWUpO1xuICAgICAgICAgICAgICAgIC8vIGluY3JlYXNlIGhvcml6b250YWwgbGV2ZWwgaWYgcHJldmlvdXMgc2libGluZyBleGlzdHMgYW5kIGlzIG5vdCBjb2xsYXBzZWRcbiAgICAgICAgICAgICAgICBpZiAobW91c2UuZGlzdFggPiAwICYmIHByZXYubGVuZ3RoICYmICFwcmV2Lmhhc0NsYXNzKG9wdC5jb2xsYXBzZWRDbGFzcykpIHtcbiAgICAgICAgICAgICAgICAgICAgLy8gY2Fubm90IGluY3JlYXNlIGxldmVsIHdoZW4gaXRlbSBhYm92ZSBpcyBjb2xsYXBzZWRcbiAgICAgICAgICAgICAgICAgICAgbGlzdCA9IHByZXYuZmluZChvcHQubGlzdE5vZGVOYW1lKS5sYXN0KCk7XG4gICAgICAgICAgICAgICAgICAgIC8vIGNoZWNrIGlmIGRlcHRoIGxpbWl0IGhhcyByZWFjaGVkXG4gICAgICAgICAgICAgICAgICAgIGRlcHRoID0gdGhpcy5wbGFjZUVsLnBhcmVudHMob3B0Lmxpc3ROb2RlTmFtZSkubGVuZ3RoO1xuICAgICAgICAgICAgICAgICAgICBpZiAoZGVwdGggKyB0aGlzLmRyYWdEZXB0aCA8PSBvcHQubWF4RGVwdGgpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIC8vIGNyZWF0ZSBuZXcgc3ViLWxldmVsIGlmIG9uZSBkb2Vzbid0IGV4aXN0XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoIWxpc3QubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGlzdCA9ICQoJzwnICsgb3B0Lmxpc3ROb2RlTmFtZSArICcvPicpLmFkZENsYXNzKG9wdC5saXN0Q2xhc3MpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpc3QuYXBwZW5kKHRoaXMucGxhY2VFbCk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgcHJldi5hcHBlbmQobGlzdCk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhpcy5zZXRQYXJlbnQocHJldik7XG4gICAgICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIGVsc2UgYXBwZW5kIHRvIG5leHQgbGV2ZWwgdXBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsaXN0ID0gcHJldi5jaGlsZHJlbihvcHQubGlzdE5vZGVOYW1lKS5sYXN0KCk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGlzdC5hcHBlbmQodGhpcy5wbGFjZUVsKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAvLyBkZWNyZWFzZSBob3Jpem9udGFsIGxldmVsXG4gICAgICAgICAgICAgICAgaWYgKG1vdXNlLmRpc3RYIDwgMCkge1xuICAgICAgICAgICAgICAgICAgICAvLyB3ZSBjYW4ndCBkZWNyZWFzZSBhIGxldmVsIGlmIGFuIGl0ZW0gcHJlY2VlZHMgdGhlIGN1cnJlbnQgb25lXG4gICAgICAgICAgICAgICAgICAgIG5leHQgPSB0aGlzLnBsYWNlRWwubmV4dChvcHQuaXRlbU5vZGVOYW1lKTtcbiAgICAgICAgICAgICAgICAgICAgaWYgKCFuZXh0Lmxlbmd0aCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgcGFyZW50ID0gdGhpcy5wbGFjZUVsLnBhcmVudCgpO1xuICAgICAgICAgICAgICAgICAgICAgICAgdGhpcy5wbGFjZUVsLmNsb3Nlc3Qob3B0Lml0ZW1Ob2RlTmFtZSkuYWZ0ZXIodGhpcy5wbGFjZUVsKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmICghcGFyZW50LmNoaWxkcmVuKCkubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhpcy51bnNldFBhcmVudChwYXJlbnQucGFyZW50KCkpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICB2YXIgaXNFbXB0eSA9IGZhbHNlO1xuXG4gICAgICAgICAgICAvLyBmaW5kIGxpc3QgaXRlbSB1bmRlciBjdXJzb3JcbiAgICAgICAgICAgIGlmICghaGFzUG9pbnRlckV2ZW50cykge1xuICAgICAgICAgICAgICAgIHRoaXMuZHJhZ0VsWzBdLnN0eWxlLnZpc2liaWxpdHkgPSAnaGlkZGVuJztcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHRoaXMucG9pbnRFbCA9ICQoZG9jdW1lbnQuZWxlbWVudEZyb21Qb2ludChlLnBhZ2VYIC0gZG9jdW1lbnQuYm9keS5zY3JvbGxMZWZ0LCBlLnBhZ2VZIC0gKHdpbmRvdy5wYWdlWU9mZnNldCB8fCBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuc2Nyb2xsVG9wKSkpO1xuICAgICAgICAgICAgaWYgKCFoYXNQb2ludGVyRXZlbnRzKSB7XG4gICAgICAgICAgICAgICAgdGhpcy5kcmFnRWxbMF0uc3R5bGUudmlzaWJpbGl0eSA9ICd2aXNpYmxlJztcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGlmICh0aGlzLnBvaW50RWwuaGFzQ2xhc3Mob3B0LmhhbmRsZUNsYXNzKSkge1xuICAgICAgICAgICAgICAgIHRoaXMucG9pbnRFbCA9IHRoaXMucG9pbnRFbC5wYXJlbnQob3B0Lml0ZW1Ob2RlTmFtZSk7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBpZiAodGhpcy5wb2ludEVsLmhhc0NsYXNzKG9wdC5lbXB0eUNsYXNzKSkge1xuICAgICAgICAgICAgICAgIGlzRW1wdHkgPSB0cnVlO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgZWxzZSBpZiAoIXRoaXMucG9pbnRFbC5sZW5ndGggfHwgIXRoaXMucG9pbnRFbC5oYXNDbGFzcyhvcHQuaXRlbUNsYXNzKSkge1xuICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgLy8gZmluZCBwYXJlbnQgbGlzdCBvZiBpdGVtIHVuZGVyIGN1cnNvclxuICAgICAgICAgICAgdmFyIHBvaW50RWxSb290ID0gdGhpcy5wb2ludEVsLmNsb3Nlc3QoJy4nICsgb3B0LnJvb3RDbGFzcyksXG4gICAgICAgICAgICAgICAgaXNOZXdSb290ICAgPSB0aGlzLmRyYWdSb290RWwuZGF0YSgnbmVzdGFibGUtaWQnKSAhPT0gcG9pbnRFbFJvb3QuZGF0YSgnbmVzdGFibGUtaWQnKTtcblxuICAgICAgICAgICAgLyoqXG4gICAgICAgICAgICAgKiBtb3ZlIHZlcnRpY2FsXG4gICAgICAgICAgICAgKi9cbiAgICAgICAgICAgIGlmICghbW91c2UuZGlyQXggfHwgaXNOZXdSb290IHx8IGlzRW1wdHkpIHtcbiAgICAgICAgICAgICAgICAvLyBjaGVjayBpZiBncm91cHMgbWF0Y2ggaWYgZHJhZ2dpbmcgb3ZlciBuZXcgcm9vdFxuICAgICAgICAgICAgICAgIGlmIChpc05ld1Jvb3QgJiYgb3B0Lmdyb3VwICE9PSBwb2ludEVsUm9vdC5kYXRhKCduZXN0YWJsZS1ncm91cCcpKSB7XG4gICAgICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgLy8gY2hlY2sgZGVwdGggbGltaXRcbiAgICAgICAgICAgICAgICBkZXB0aCA9IHRoaXMuZHJhZ0RlcHRoIC0gMSArIHRoaXMucG9pbnRFbC5wYXJlbnRzKG9wdC5saXN0Tm9kZU5hbWUpLmxlbmd0aDtcbiAgICAgICAgICAgICAgICBpZiAoZGVwdGggPiBvcHQubWF4RGVwdGgpIHtcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB2YXIgYmVmb3JlID0gZS5wYWdlWSA8ICh0aGlzLnBvaW50RWwub2Zmc2V0KCkudG9wICsgdGhpcy5wb2ludEVsLmhlaWdodCgpIC8gMik7XG4gICAgICAgICAgICAgICAgICAgIHBhcmVudCA9IHRoaXMucGxhY2VFbC5wYXJlbnQoKTtcbiAgICAgICAgICAgICAgICAvLyBpZiBlbXB0eSBjcmVhdGUgbmV3IGxpc3QgdG8gcmVwbGFjZSBlbXB0eSBwbGFjZWhvbGRlclxuICAgICAgICAgICAgICAgIGlmIChpc0VtcHR5KSB7XG4gICAgICAgICAgICAgICAgICAgIGxpc3QgPSAkKGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQob3B0Lmxpc3ROb2RlTmFtZSkpLmFkZENsYXNzKG9wdC5saXN0Q2xhc3MpO1xuICAgICAgICAgICAgICAgICAgICBsaXN0LmFwcGVuZCh0aGlzLnBsYWNlRWwpO1xuICAgICAgICAgICAgICAgICAgICB0aGlzLnBvaW50RWwucmVwbGFjZVdpdGgobGlzdCk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIGVsc2UgaWYgKGJlZm9yZSkge1xuICAgICAgICAgICAgICAgICAgICB0aGlzLnBvaW50RWwuYmVmb3JlKHRoaXMucGxhY2VFbCk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICB0aGlzLnBvaW50RWwuYWZ0ZXIodGhpcy5wbGFjZUVsKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgaWYgKCFwYXJlbnQuY2hpbGRyZW4oKS5sZW5ndGgpIHtcbiAgICAgICAgICAgICAgICAgICAgdGhpcy51bnNldFBhcmVudChwYXJlbnQucGFyZW50KCkpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBpZiAoIXRoaXMuZHJhZ1Jvb3RFbC5maW5kKG9wdC5pdGVtTm9kZU5hbWUpLmxlbmd0aCkge1xuICAgICAgICAgICAgICAgICAgICB0aGlzLmRyYWdSb290RWwuYXBwZW5kKCc8ZGl2IGNsYXNzPVwiJyArIG9wdC5lbXB0eUNsYXNzICsgJ1wiLz4nKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgLy8gcGFyZW50IHJvb3QgbGlzdCBoYXMgY2hhbmdlZFxuICAgICAgICAgICAgICAgIGlmIChpc05ld1Jvb3QpIHtcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5kcmFnUm9vdEVsID0gcG9pbnRFbFJvb3Q7XG4gICAgICAgICAgICAgICAgICAgIHRoaXMuaGFzTmV3Um9vdCA9IHRoaXMuZWxbMF0gIT09IHRoaXMuZHJhZ1Jvb3RFbFswXTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgIH07XG5cbiAgICAkLmZuLm5lc3RhYmxlID0gZnVuY3Rpb24ocGFyYW1zKVxuICAgIHtcbiAgICAgICAgdmFyIGxpc3RzICA9IHRoaXMsXG4gICAgICAgICAgICByZXR2YWwgPSB0aGlzO1xuXG4gICAgICAgIGxpc3RzLmVhY2goZnVuY3Rpb24oKVxuICAgICAgICB7XG4gICAgICAgICAgICB2YXIgcGx1Z2luID0gJCh0aGlzKS5kYXRhKFwibmVzdGFibGVcIik7XG5cbiAgICAgICAgICAgIGlmICghcGx1Z2luKSB7XG4gICAgICAgICAgICAgICAgJCh0aGlzKS5kYXRhKFwibmVzdGFibGVcIiwgbmV3IFBsdWdpbih0aGlzLCBwYXJhbXMpKTtcbiAgICAgICAgICAgICAgICAkKHRoaXMpLmRhdGEoXCJuZXN0YWJsZS1pZFwiLCBuZXcgRGF0ZSgpLmdldFRpbWUoKSk7XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIGlmICh0eXBlb2YgcGFyYW1zID09PSAnc3RyaW5nJyAmJiB0eXBlb2YgcGx1Z2luW3BhcmFtc10gPT09ICdmdW5jdGlvbicpIHtcbiAgICAgICAgICAgICAgICAgICAgcmV0dmFsID0gcGx1Z2luW3BhcmFtc10oKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuXG4gICAgICAgIHJldHVybiByZXR2YWwgfHwgbGlzdHM7XG4gICAgfTtcblxufSkod2luZG93LmpRdWVyeSB8fCB3aW5kb3cuWmVwdG8sIHdpbmRvdywgZG9jdW1lbnQpO1xuIiwiLyoqXG4gKiBUaW1lYWdvIGlzIGEgalF1ZXJ5IHBsdWdpbiB0aGF0IG1ha2VzIGl0IGVhc3kgdG8gc3VwcG9ydCBhdXRvbWF0aWNhbGx5XG4gKiB1cGRhdGluZyBmdXp6eSB0aW1lc3RhbXBzIChlLmcuIFwiNCBtaW51dGVzIGFnb1wiIG9yIFwiYWJvdXQgMSBkYXkgYWdvXCIpLlxuICpcbiAqIEBuYW1lIHRpbWVhZ29cbiAqIEB2ZXJzaW9uIDEuNi43XG4gKiBAcmVxdWlyZXMgalF1ZXJ5ID49MS41LjAgPDQuMFxuICogQGF1dGhvciBSeWFuIE1jR2VhcnlcbiAqIEBsaWNlbnNlIE1JVCBMaWNlbnNlIC0gaHR0cDovL3d3dy5vcGVuc291cmNlLm9yZy9saWNlbnNlcy9taXQtbGljZW5zZS5waHBcbiAqXG4gKiBGb3IgdXNhZ2UgYW5kIGV4YW1wbGVzLCB2aXNpdDpcbiAqIGh0dHA6Ly90aW1lYWdvLnlhcnAuY29tL1xuICpcbiAqIENvcHlyaWdodCAoYykgMjAwOC0yMDE5LCBSeWFuIE1jR2VhcnkgKHJ5YW4gLVthdF0tIG1jZ2VhcnkgWypkb3QqXSBvcmcpXG4gKi9cblxuKGZ1bmN0aW9uIChmYWN0b3J5KSB7XG4gIGlmICh0eXBlb2YgZGVmaW5lID09PSAnZnVuY3Rpb24nICYmIGRlZmluZS5hbWQpIHtcbiAgICAvLyBBTUQuIFJlZ2lzdGVyIGFzIGFuIGFub255bW91cyBtb2R1bGUuXG4gICAgZGVmaW5lKFsnanF1ZXJ5J10sIGZhY3RvcnkpO1xuICB9IGVsc2UgaWYgKHR5cGVvZiBtb2R1bGUgPT09ICdvYmplY3QnICYmIHR5cGVvZiBtb2R1bGUuZXhwb3J0cyA9PT0gJ29iamVjdCcpIHtcbiAgICBmYWN0b3J5KHJlcXVpcmUoJ2pxdWVyeScpKTtcbiAgfSBlbHNlIHtcbiAgICAvLyBCcm93c2VyIGdsb2JhbHNcbiAgICBmYWN0b3J5KGpRdWVyeSk7XG4gIH1cbn0oZnVuY3Rpb24gKCQpIHtcbiAgJC50aW1lYWdvID0gZnVuY3Rpb24odGltZXN0YW1wKSB7XG4gICAgaWYgKHRpbWVzdGFtcCBpbnN0YW5jZW9mIERhdGUpIHtcbiAgICAgIHJldHVybiBpbldvcmRzKHRpbWVzdGFtcCk7XG4gICAgfSBlbHNlIGlmICh0eXBlb2YgdGltZXN0YW1wID09PSBcInN0cmluZ1wiKSB7XG4gICAgICByZXR1cm4gaW5Xb3JkcygkLnRpbWVhZ28ucGFyc2UodGltZXN0YW1wKSk7XG4gICAgfSBlbHNlIGlmICh0eXBlb2YgdGltZXN0YW1wID09PSBcIm51bWJlclwiKSB7XG4gICAgICByZXR1cm4gaW5Xb3JkcyhuZXcgRGF0ZSh0aW1lc3RhbXApKTtcbiAgICB9IGVsc2Uge1xuICAgICAgcmV0dXJuIGluV29yZHMoJC50aW1lYWdvLmRhdGV0aW1lKHRpbWVzdGFtcCkpO1xuICAgIH1cbiAgfTtcbiAgdmFyICR0ID0gJC50aW1lYWdvO1xuXG4gICQuZXh0ZW5kKCQudGltZWFnbywge1xuICAgIHNldHRpbmdzOiB7XG4gICAgICByZWZyZXNoTWlsbGlzOiA2MDAwMCxcbiAgICAgIGFsbG93UGFzdDogdHJ1ZSxcbiAgICAgIGFsbG93RnV0dXJlOiBmYWxzZSxcbiAgICAgIGxvY2FsZVRpdGxlOiBmYWxzZSxcbiAgICAgIGN1dG9mZjogMCxcbiAgICAgIGF1dG9EaXNwb3NlOiB0cnVlLFxuICAgICAgc3RyaW5nczoge1xuICAgICAgICBwcmVmaXhBZ286IG51bGwsXG4gICAgICAgIHByZWZpeEZyb21Ob3c6IG51bGwsXG4gICAgICAgIHN1ZmZpeEFnbzogXCJhZ29cIixcbiAgICAgICAgc3VmZml4RnJvbU5vdzogXCJmcm9tIG5vd1wiLFxuICAgICAgICBpblBhc3Q6IFwiYW55IG1vbWVudCBub3dcIixcbiAgICAgICAgc2Vjb25kczogXCJsZXNzIHRoYW4gYSBtaW51dGVcIixcbiAgICAgICAgbWludXRlOiBcImFib3V0IGEgbWludXRlXCIsXG4gICAgICAgIG1pbnV0ZXM6IFwiJWQgbWludXRlc1wiLFxuICAgICAgICBob3VyOiBcImFib3V0IGFuIGhvdXJcIixcbiAgICAgICAgaG91cnM6IFwiYWJvdXQgJWQgaG91cnNcIixcbiAgICAgICAgZGF5OiBcImEgZGF5XCIsXG4gICAgICAgIGRheXM6IFwiJWQgZGF5c1wiLFxuICAgICAgICBtb250aDogXCJhYm91dCBhIG1vbnRoXCIsXG4gICAgICAgIG1vbnRoczogXCIlZCBtb250aHNcIixcbiAgICAgICAgeWVhcjogXCJhYm91dCBhIHllYXJcIixcbiAgICAgICAgeWVhcnM6IFwiJWQgeWVhcnNcIixcbiAgICAgICAgd29yZFNlcGFyYXRvcjogXCIgXCIsXG4gICAgICAgIG51bWJlcnM6IFtdXG4gICAgICB9XG4gICAgfSxcblxuICAgIGluV29yZHM6IGZ1bmN0aW9uKGRpc3RhbmNlTWlsbGlzKSB7XG4gICAgICBpZiAoIXRoaXMuc2V0dGluZ3MuYWxsb3dQYXN0ICYmICEgdGhpcy5zZXR0aW5ncy5hbGxvd0Z1dHVyZSkge1xuICAgICAgICAgIHRocm93ICd0aW1lYWdvIGFsbG93UGFzdCBhbmQgYWxsb3dGdXR1cmUgc2V0dGluZ3MgY2FuIG5vdCBib3RoIGJlIHNldCB0byBmYWxzZS4nO1xuICAgICAgfVxuXG4gICAgICB2YXIgJGwgPSB0aGlzLnNldHRpbmdzLnN0cmluZ3M7XG4gICAgICB2YXIgcHJlZml4ID0gJGwucHJlZml4QWdvO1xuICAgICAgdmFyIHN1ZmZpeCA9ICRsLnN1ZmZpeEFnbztcbiAgICAgIGlmICh0aGlzLnNldHRpbmdzLmFsbG93RnV0dXJlKSB7XG4gICAgICAgIGlmIChkaXN0YW5jZU1pbGxpcyA8IDApIHtcbiAgICAgICAgICBwcmVmaXggPSAkbC5wcmVmaXhGcm9tTm93O1xuICAgICAgICAgIHN1ZmZpeCA9ICRsLnN1ZmZpeEZyb21Ob3c7XG4gICAgICAgIH1cbiAgICAgIH1cblxuICAgICAgaWYgKCF0aGlzLnNldHRpbmdzLmFsbG93UGFzdCAmJiBkaXN0YW5jZU1pbGxpcyA+PSAwKSB7XG4gICAgICAgIHJldHVybiB0aGlzLnNldHRpbmdzLnN0cmluZ3MuaW5QYXN0O1xuICAgICAgfVxuXG4gICAgICB2YXIgc2Vjb25kcyA9IE1hdGguYWJzKGRpc3RhbmNlTWlsbGlzKSAvIDEwMDA7XG4gICAgICB2YXIgbWludXRlcyA9IHNlY29uZHMgLyA2MDtcbiAgICAgIHZhciBob3VycyA9IG1pbnV0ZXMgLyA2MDtcbiAgICAgIHZhciBkYXlzID0gaG91cnMgLyAyNDtcbiAgICAgIHZhciB5ZWFycyA9IGRheXMgLyAzNjU7XG5cbiAgICAgIGZ1bmN0aW9uIHN1YnN0aXR1dGUoc3RyaW5nT3JGdW5jdGlvbiwgbnVtYmVyKSB7XG4gICAgICAgIHZhciBzdHJpbmcgPSAkLmlzRnVuY3Rpb24oc3RyaW5nT3JGdW5jdGlvbikgPyBzdHJpbmdPckZ1bmN0aW9uKG51bWJlciwgZGlzdGFuY2VNaWxsaXMpIDogc3RyaW5nT3JGdW5jdGlvbjtcbiAgICAgICAgdmFyIHZhbHVlID0gKCRsLm51bWJlcnMgJiYgJGwubnVtYmVyc1tudW1iZXJdKSB8fCBudW1iZXI7XG4gICAgICAgIHJldHVybiBzdHJpbmcucmVwbGFjZSgvJWQvaSwgdmFsdWUpO1xuICAgICAgfVxuXG4gICAgICB2YXIgd29yZHMgPSBzZWNvbmRzIDwgNDUgJiYgc3Vic3RpdHV0ZSgkbC5zZWNvbmRzLCBNYXRoLnJvdW5kKHNlY29uZHMpKSB8fFxuICAgICAgICBzZWNvbmRzIDwgOTAgJiYgc3Vic3RpdHV0ZSgkbC5taW51dGUsIDEpIHx8XG4gICAgICAgIG1pbnV0ZXMgPCA0NSAmJiBzdWJzdGl0dXRlKCRsLm1pbnV0ZXMsIE1hdGgucm91bmQobWludXRlcykpIHx8XG4gICAgICAgIG1pbnV0ZXMgPCA5MCAmJiBzdWJzdGl0dXRlKCRsLmhvdXIsIDEpIHx8XG4gICAgICAgIGhvdXJzIDwgMjQgJiYgc3Vic3RpdHV0ZSgkbC5ob3VycywgTWF0aC5yb3VuZChob3VycykpIHx8XG4gICAgICAgIGhvdXJzIDwgNDIgJiYgc3Vic3RpdHV0ZSgkbC5kYXksIDEpIHx8XG4gICAgICAgIGRheXMgPCAzMCAmJiBzdWJzdGl0dXRlKCRsLmRheXMsIE1hdGgucm91bmQoZGF5cykpIHx8XG4gICAgICAgIGRheXMgPCA0NSAmJiBzdWJzdGl0dXRlKCRsLm1vbnRoLCAxKSB8fFxuICAgICAgICBkYXlzIDwgMzY1ICYmIHN1YnN0aXR1dGUoJGwubW9udGhzLCBNYXRoLnJvdW5kKGRheXMgLyAzMCkpIHx8XG4gICAgICAgIHllYXJzIDwgMS41ICYmIHN1YnN0aXR1dGUoJGwueWVhciwgMSkgfHxcbiAgICAgICAgc3Vic3RpdHV0ZSgkbC55ZWFycywgTWF0aC5yb3VuZCh5ZWFycykpO1xuXG4gICAgICB2YXIgc2VwYXJhdG9yID0gJGwud29yZFNlcGFyYXRvciB8fCBcIlwiO1xuICAgICAgaWYgKCRsLndvcmRTZXBhcmF0b3IgPT09IHVuZGVmaW5lZCkgeyBzZXBhcmF0b3IgPSBcIiBcIjsgfVxuICAgICAgcmV0dXJuICQudHJpbShbcHJlZml4LCB3b3Jkcywgc3VmZml4XS5qb2luKHNlcGFyYXRvcikpO1xuICAgIH0sXG5cbiAgICBwYXJzZTogZnVuY3Rpb24oaXNvODYwMSkge1xuICAgICAgdmFyIHMgPSAkLnRyaW0oaXNvODYwMSk7XG4gICAgICBzID0gcy5yZXBsYWNlKC9cXC5cXGQrLyxcIlwiKTsgLy8gcmVtb3ZlIG1pbGxpc2Vjb25kc1xuICAgICAgcyA9IHMucmVwbGFjZSgvLS8sXCIvXCIpLnJlcGxhY2UoLy0vLFwiL1wiKTtcbiAgICAgIHMgPSBzLnJlcGxhY2UoL1QvLFwiIFwiKS5yZXBsYWNlKC9aLyxcIiBVVENcIik7XG4gICAgICBzID0gcy5yZXBsYWNlKC8oW1xcK1xcLV1cXGRcXGQpXFw6PyhcXGRcXGQpLyxcIiAkMSQyXCIpOyAvLyAtMDQ6MDAgLT4gLTA0MDBcbiAgICAgIHMgPSBzLnJlcGxhY2UoLyhbXFwrXFwtXVxcZFxcZCkkLyxcIiAkMTAwXCIpOyAvLyArMDkgLT4gKzA5MDBcbiAgICAgIHJldHVybiBuZXcgRGF0ZShzKTtcbiAgICB9LFxuICAgIGRhdGV0aW1lOiBmdW5jdGlvbihlbGVtKSB7XG4gICAgICB2YXIgaXNvODYwMSA9ICR0LmlzVGltZShlbGVtKSA/ICQoZWxlbSkuYXR0cihcImRhdGV0aW1lXCIpIDogJChlbGVtKS5hdHRyKFwidGl0bGVcIik7XG4gICAgICByZXR1cm4gJHQucGFyc2UoaXNvODYwMSk7XG4gICAgfSxcbiAgICBpc1RpbWU6IGZ1bmN0aW9uKGVsZW0pIHtcbiAgICAgIC8vIGpRdWVyeSdzIGBpcygpYCBkb2Vzbid0IHBsYXkgd2VsbCB3aXRoIEhUTUw1IGluIElFXG4gICAgICByZXR1cm4gJChlbGVtKS5nZXQoMCkudGFnTmFtZS50b0xvd2VyQ2FzZSgpID09PSBcInRpbWVcIjsgLy8gJChlbGVtKS5pcyhcInRpbWVcIik7XG4gICAgfVxuICB9KTtcblxuICAvLyBmdW5jdGlvbnMgdGhhdCBjYW4gYmUgY2FsbGVkIHZpYSAkKGVsKS50aW1lYWdvKCdhY3Rpb24nKVxuICAvLyBpbml0IGlzIGRlZmF1bHQgd2hlbiBubyBhY3Rpb24gaXMgZ2l2ZW5cbiAgLy8gZnVuY3Rpb25zIGFyZSBjYWxsZWQgd2l0aCBjb250ZXh0IG9mIGEgc2luZ2xlIGVsZW1lbnRcbiAgdmFyIGZ1bmN0aW9ucyA9IHtcbiAgICBpbml0OiBmdW5jdGlvbigpIHtcbiAgICAgIGZ1bmN0aW9ucy5kaXNwb3NlLmNhbGwodGhpcyk7XG4gICAgICB2YXIgcmVmcmVzaF9lbCA9ICQucHJveHkocmVmcmVzaCwgdGhpcyk7XG4gICAgICByZWZyZXNoX2VsKCk7XG4gICAgICB2YXIgJHMgPSAkdC5zZXR0aW5ncztcbiAgICAgIGlmICgkcy5yZWZyZXNoTWlsbGlzID4gMCkge1xuICAgICAgICB0aGlzLl90aW1lYWdvSW50ZXJ2YWwgPSBzZXRJbnRlcnZhbChyZWZyZXNoX2VsLCAkcy5yZWZyZXNoTWlsbGlzKTtcbiAgICAgIH1cbiAgICB9LFxuICAgIHVwZGF0ZTogZnVuY3Rpb24odGltZXN0YW1wKSB7XG4gICAgICB2YXIgZGF0ZSA9ICh0aW1lc3RhbXAgaW5zdGFuY2VvZiBEYXRlKSA/IHRpbWVzdGFtcCA6ICR0LnBhcnNlKHRpbWVzdGFtcCk7XG4gICAgICAkKHRoaXMpLmRhdGEoJ3RpbWVhZ28nLCB7IGRhdGV0aW1lOiBkYXRlIH0pO1xuICAgICAgaWYgKCR0LnNldHRpbmdzLmxvY2FsZVRpdGxlKSB7XG4gICAgICAgICQodGhpcykuYXR0cihcInRpdGxlXCIsIGRhdGUudG9Mb2NhbGVTdHJpbmcoKSk7XG4gICAgICB9XG4gICAgICByZWZyZXNoLmFwcGx5KHRoaXMpO1xuICAgIH0sXG4gICAgdXBkYXRlRnJvbURPTTogZnVuY3Rpb24oKSB7XG4gICAgICAkKHRoaXMpLmRhdGEoJ3RpbWVhZ28nLCB7IGRhdGV0aW1lOiAkdC5wYXJzZSggJHQuaXNUaW1lKHRoaXMpID8gJCh0aGlzKS5hdHRyKFwiZGF0ZXRpbWVcIikgOiAkKHRoaXMpLmF0dHIoXCJ0aXRsZVwiKSApIH0pO1xuICAgICAgcmVmcmVzaC5hcHBseSh0aGlzKTtcbiAgICB9LFxuICAgIGRpc3Bvc2U6IGZ1bmN0aW9uICgpIHtcbiAgICAgIGlmICh0aGlzLl90aW1lYWdvSW50ZXJ2YWwpIHtcbiAgICAgICAgd2luZG93LmNsZWFySW50ZXJ2YWwodGhpcy5fdGltZWFnb0ludGVydmFsKTtcbiAgICAgICAgdGhpcy5fdGltZWFnb0ludGVydmFsID0gbnVsbDtcbiAgICAgIH1cbiAgICB9XG4gIH07XG5cbiAgJC5mbi50aW1lYWdvID0gZnVuY3Rpb24oYWN0aW9uLCBvcHRpb25zKSB7XG4gICAgdmFyIGZuID0gYWN0aW9uID8gZnVuY3Rpb25zW2FjdGlvbl0gOiBmdW5jdGlvbnMuaW5pdDtcbiAgICBpZiAoIWZuKSB7XG4gICAgICB0aHJvdyBuZXcgRXJyb3IoXCJVbmtub3duIGZ1bmN0aW9uIG5hbWUgJ1wiKyBhY3Rpb24gK1wiJyBmb3IgdGltZWFnb1wiKTtcbiAgICB9XG4gICAgLy8gZWFjaCBvdmVyIG9iamVjdHMgaGVyZSBhbmQgY2FsbCB0aGUgcmVxdWVzdGVkIGZ1bmN0aW9uXG4gICAgdGhpcy5lYWNoKGZ1bmN0aW9uKCkge1xuICAgICAgZm4uY2FsbCh0aGlzLCBvcHRpb25zKTtcbiAgICB9KTtcbiAgICByZXR1cm4gdGhpcztcbiAgfTtcblxuICBmdW5jdGlvbiByZWZyZXNoKCkge1xuICAgIHZhciAkcyA9ICR0LnNldHRpbmdzO1xuXG4gICAgLy9jaGVjayBpZiBpdCdzIHN0aWxsIHZpc2libGVcbiAgICBpZiAoJHMuYXV0b0Rpc3Bvc2UgJiYgISQuY29udGFpbnMoZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LHRoaXMpKSB7XG4gICAgICAvL3N0b3AgaWYgaXQgaGFzIGJlZW4gcmVtb3ZlZFxuICAgICAgJCh0aGlzKS50aW1lYWdvKFwiZGlzcG9zZVwiKTtcbiAgICAgIHJldHVybiB0aGlzO1xuICAgIH1cblxuICAgIHZhciBkYXRhID0gcHJlcGFyZURhdGEodGhpcyk7XG5cbiAgICBpZiAoIWlzTmFOKGRhdGEuZGF0ZXRpbWUpKSB7XG4gICAgICBpZiAoICRzLmN1dG9mZiA9PT0gMCB8fCBNYXRoLmFicyhkaXN0YW5jZShkYXRhLmRhdGV0aW1lKSkgPCAkcy5jdXRvZmYpIHtcbiAgICAgICAgJCh0aGlzKS50ZXh0KGluV29yZHMoZGF0YS5kYXRldGltZSkpO1xuICAgICAgfSBlbHNlIHtcbiAgICAgICAgaWYgKCQodGhpcykuYXR0cigndGl0bGUnKS5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICAkKHRoaXMpLnRleHQoJCh0aGlzKS5hdHRyKCd0aXRsZScpKTtcbiAgICAgICAgfVxuICAgICAgfVxuICAgIH1cbiAgICByZXR1cm4gdGhpcztcbiAgfVxuXG4gIGZ1bmN0aW9uIHByZXBhcmVEYXRhKGVsZW1lbnQpIHtcbiAgICBlbGVtZW50ID0gJChlbGVtZW50KTtcbiAgICBpZiAoIWVsZW1lbnQuZGF0YShcInRpbWVhZ29cIikpIHtcbiAgICAgIGVsZW1lbnQuZGF0YShcInRpbWVhZ29cIiwgeyBkYXRldGltZTogJHQuZGF0ZXRpbWUoZWxlbWVudCkgfSk7XG4gICAgICB2YXIgdGV4dCA9ICQudHJpbShlbGVtZW50LnRleHQoKSk7XG4gICAgICBpZiAoJHQuc2V0dGluZ3MubG9jYWxlVGl0bGUpIHtcbiAgICAgICAgZWxlbWVudC5hdHRyKFwidGl0bGVcIiwgZWxlbWVudC5kYXRhKCd0aW1lYWdvJykuZGF0ZXRpbWUudG9Mb2NhbGVTdHJpbmcoKSk7XG4gICAgICB9IGVsc2UgaWYgKHRleHQubGVuZ3RoID4gMCAmJiAhKCR0LmlzVGltZShlbGVtZW50KSAmJiBlbGVtZW50LmF0dHIoXCJ0aXRsZVwiKSkpIHtcbiAgICAgICAgZWxlbWVudC5hdHRyKFwidGl0bGVcIiwgdGV4dCk7XG4gICAgICB9XG4gICAgfVxuICAgIHJldHVybiBlbGVtZW50LmRhdGEoXCJ0aW1lYWdvXCIpO1xuICB9XG5cbiAgZnVuY3Rpb24gaW5Xb3JkcyhkYXRlKSB7XG4gICAgcmV0dXJuICR0LmluV29yZHMoZGlzdGFuY2UoZGF0ZSkpO1xuICB9XG5cbiAgZnVuY3Rpb24gZGlzdGFuY2UoZGF0ZSkge1xuICAgIHJldHVybiAobmV3IERhdGUoKS5nZXRUaW1lKCkgLSBkYXRlLmdldFRpbWUoKSk7XG4gIH1cblxuICAvLyBmaXggZm9yIElFNiBzdWNrYWdlXG4gIGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJhYmJyXCIpO1xuICBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwidGltZVwiKTtcbn0pKTtcbiIsIiQoZnVuY3Rpb24gKCkge1xuICAgICQoJy5qc2RlbW8tbm90aWZpY2F0aW9uLWJ1dHRvbiBidXR0b24nKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgIHZhciBwbGFjZW1lbnRGcm9tID0gJCh0aGlzKS5kYXRhKCdwbGFjZW1lbnQtZnJvbScpO1xuICAgICAgICB2YXIgcGxhY2VtZW50QWxpZ24gPSAkKHRoaXMpLmRhdGEoJ3BsYWNlbWVudC1hbGlnbicpO1xuICAgICAgICB2YXIgYW5pbWF0ZUVudGVyID0gJCh0aGlzKS5kYXRhKCdhbmltYXRlLWVudGVyJyk7XG4gICAgICAgIHZhciBhbmltYXRlRXhpdCA9ICQodGhpcykuZGF0YSgnYW5pbWF0ZS1leGl0Jyk7XG4gICAgICAgIHZhciBjb2xvck5hbWUgPSAkKHRoaXMpLmRhdGEoJ2NvbG9yLW5hbWUnKTtcblxuICAgICAgICBzaG93Tm90aWZpY2F0aW9uKGNvbG9yTmFtZSwgbnVsbCwgcGxhY2VtZW50RnJvbSwgcGxhY2VtZW50QWxpZ24sIGFuaW1hdGVFbnRlciwgYW5pbWF0ZUV4aXQpO1xuICAgIH0pO1xufSk7XG5cbmZ1bmN0aW9uIHNob3dOb3RpZmljYXRpb24oY29sb3JOYW1lLCB0ZXh0LCBwbGFjZW1lbnRGcm9tLCBwbGFjZW1lbnRBbGlnbiwgYW5pbWF0ZUVudGVyLCBhbmltYXRlRXhpdCkge1xuICAgIGlmIChjb2xvck5hbWUgPT09IG51bGwgfHwgY29sb3JOYW1lID09PSAnJykgeyBjb2xvck5hbWUgPSAnYmctYmxhY2snOyB9XG4gICAgaWYgKHRleHQgPT09IG51bGwgfHwgdGV4dCA9PT0gJycpIHsgdGV4dCA9ICdUdXJuaW5nIHN0YW5kYXJkIEJvb3RzdHJhcCBhbGVydHMnOyB9XG4gICAgaWYgKGFuaW1hdGVFbnRlciA9PT0gbnVsbCB8fCBhbmltYXRlRW50ZXIgPT09ICcnKSB7IGFuaW1hdGVFbnRlciA9ICdhbmltYXRlZCBmYWRlSW5Eb3duJzsgfVxuICAgIGlmIChhbmltYXRlRXhpdCA9PT0gbnVsbCB8fCBhbmltYXRlRXhpdCA9PT0gJycpIHsgYW5pbWF0ZUV4aXQgPSAnYW5pbWF0ZWQgZmFkZU91dFVwJzsgfVxuICAgIHZhciBhbGxvd0Rpc21pc3MgPSB0cnVlO1xuXG4gICAgJC5ub3RpZnkoe1xuICAgICAgICBtZXNzYWdlOiB0ZXh0XG4gICAgfSxcbiAgICAgICAge1xuICAgICAgICAgICAgdHlwZTogY29sb3JOYW1lLFxuICAgICAgICAgICAgYWxsb3dfZGlzbWlzczogYWxsb3dEaXNtaXNzLFxuICAgICAgICAgICAgbmV3ZXN0X29uX3RvcDogdHJ1ZSxcbiAgICAgICAgICAgIHRpbWVyOiAxMDAwLFxuICAgICAgICAgICAgcGxhY2VtZW50OiB7XG4gICAgICAgICAgICAgICAgZnJvbTogcGxhY2VtZW50RnJvbSxcbiAgICAgICAgICAgICAgICBhbGlnbjogcGxhY2VtZW50QWxpZ25cbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBhbmltYXRlOiB7XG4gICAgICAgICAgICAgICAgZW50ZXI6IGFuaW1hdGVFbnRlcixcbiAgICAgICAgICAgICAgICBleGl0OiBhbmltYXRlRXhpdFxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHRlbXBsYXRlOiAnPGRpdiBkYXRhLW5vdGlmeT1cImNvbnRhaW5lclwiIGNsYXNzPVwiYm9vdHN0cmFwLW5vdGlmeS1jb250YWluZXIgYWxlcnQgYWxlcnQtZGlzbWlzc2libGUgezB9ICcgKyAoYWxsb3dEaXNtaXNzID8gXCJwLXItMzVcIiA6IFwiXCIpICsgJ1wiIHJvbGU9XCJhbGVydFwiPicgK1xuICAgICAgICAgICAgJzxidXR0b24gdHlwZT1cImJ1dHRvblwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIGNsYXNzPVwiY2xvc2VcIiBkYXRhLW5vdGlmeT1cImRpc21pc3NcIj7DlzwvYnV0dG9uPicgK1xuICAgICAgICAgICAgJzxzcGFuIGRhdGEtbm90aWZ5PVwiaWNvblwiPjwvc3Bhbj4gJyArXG4gICAgICAgICAgICAnPHNwYW4gZGF0YS1ub3RpZnk9XCJ0aXRsZVwiPnsxfTwvc3Bhbj4gJyArXG4gICAgICAgICAgICAnPHNwYW4gZGF0YS1ub3RpZnk9XCJtZXNzYWdlXCI+ezJ9PC9zcGFuPicgK1xuICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJwcm9ncmVzc1wiIGRhdGEtbm90aWZ5PVwicHJvZ3Jlc3NiYXJcIj4nICtcbiAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwicHJvZ3Jlc3MtYmFyIHByb2dyZXNzLWJhci17MH1cIiByb2xlPVwicHJvZ3Jlc3NiYXJcIiBhcmlhLXZhbHVlbm93PVwiMFwiIGFyaWEtdmFsdWVtaW49XCIwXCIgYXJpYS12YWx1ZW1heD1cIjEwMFwiIHN0eWxlPVwid2lkdGg6IDAlO1wiPjwvZGl2PicgK1xuICAgICAgICAgICAgJzwvZGl2PicgK1xuICAgICAgICAgICAgJzxhIGhyZWY9XCJ7M31cIiB0YXJnZXQ9XCJ7NH1cIiBkYXRhLW5vdGlmeT1cInVybFwiPjwvYT4nICtcbiAgICAgICAgICAgICc8L2Rpdj4nXG4gICAgICAgIH0pO1xufSIsIiQoZnVuY3Rpb24gKCkge1xuICAgICQoJy5kZCcpLm5lc3RhYmxlKCk7XG5cbiAgICAkKCcuZGQnKS5vbignY2hhbmdlJywgZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgJHRoaXMgPSAkKHRoaXMpO1xuICAgICAgICB2YXIgc2VyaWFsaXplZERhdGEgPSB3aW5kb3cuSlNPTi5zdHJpbmdpZnkoJCgkdGhpcykubmVzdGFibGUoJ3NlcmlhbGl6ZScpKTtcblxuICAgICAgICAkdGhpcy5wYXJlbnRzKCdkaXYuYm9keScpLmZpbmQoJ3RleHRhcmVhJykudmFsKHNlcmlhbGl6ZWREYXRhKTtcbiAgICB9KTtcbn0pOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsInZhciBtYXAgPSB7XG5cdFwiLi9hZlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYWYuanNcIixcblx0XCIuL2FmLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hZi5qc1wiLFxuXHRcIi4vYXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLmpzXCIsXG5cdFwiLi9hci1kelwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItZHouanNcIixcblx0XCIuL2FyLWR6LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1kei5qc1wiLFxuXHRcIi4vYXIta3dcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWt3LmpzXCIsXG5cdFwiLi9hci1rdy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIta3cuanNcIixcblx0XCIuL2FyLWx5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1seS5qc1wiLFxuXHRcIi4vYXItbHkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWx5LmpzXCIsXG5cdFwiLi9hci1tYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbWEuanNcIixcblx0XCIuL2FyLW1hLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1tYS5qc1wiLFxuXHRcIi4vYXItcHNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXBzLmpzXCIsXG5cdFwiLi9hci1wcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItcHMuanNcIixcblx0XCIuL2FyLXNhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1zYS5qc1wiLFxuXHRcIi4vYXItc2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXNhLmpzXCIsXG5cdFwiLi9hci10blwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItdG4uanNcIixcblx0XCIuL2FyLXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci10bi5qc1wiLFxuXHRcIi4vYXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLmpzXCIsXG5cdFwiLi9helwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXouanNcIixcblx0XCIuL2F6LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hei5qc1wiLFxuXHRcIi4vYmVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JlLmpzXCIsXG5cdFwiLi9iZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmUuanNcIixcblx0XCIuL2JnXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZy5qc1wiLFxuXHRcIi4vYmcuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JnLmpzXCIsXG5cdFwiLi9ibVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm0uanNcIixcblx0XCIuL2JtLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibS5qc1wiLFxuXHRcIi4vYm5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLmpzXCIsXG5cdFwiLi9ibi1iZFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4tYmQuanNcIixcblx0XCIuL2JuLWJkLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi1iZC5qc1wiLFxuXHRcIi4vYm4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLmpzXCIsXG5cdFwiLi9ib1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm8uanNcIixcblx0XCIuL2JvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iby5qc1wiLFxuXHRcIi4vYnJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JyLmpzXCIsXG5cdFwiLi9ici5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnIuanNcIixcblx0XCIuL2JzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9icy5qc1wiLFxuXHRcIi4vYnMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JzLmpzXCIsXG5cdFwiLi9jYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY2EuanNcIixcblx0XCIuL2NhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jYS5qc1wiLFxuXHRcIi4vY3NcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NzLmpzXCIsXG5cdFwiLi9jcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3MuanNcIixcblx0XCIuL2N2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jdi5qc1wiLFxuXHRcIi4vY3YuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N2LmpzXCIsXG5cdFwiLi9jeVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3kuanNcIixcblx0XCIuL2N5LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jeS5qc1wiLFxuXHRcIi4vZGFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RhLmpzXCIsXG5cdFwiLi9kYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGEuanNcIixcblx0XCIuL2RlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS5qc1wiLFxuXHRcIi4vZGUtYXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWF0LmpzXCIsXG5cdFwiLi9kZS1hdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtYXQuanNcIixcblx0XCIuL2RlLWNoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1jaC5qc1wiLFxuXHRcIi4vZGUtY2guanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWNoLmpzXCIsXG5cdFwiLi9kZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUuanNcIixcblx0XCIuL2R2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kdi5qc1wiLFxuXHRcIi4vZHYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2R2LmpzXCIsXG5cdFwiLi9lbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZWwuanNcIixcblx0XCIuL2VsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbC5qc1wiLFxuXHRcIi4vZW4tYXVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWF1LmpzXCIsXG5cdFwiLi9lbi1hdS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tYXUuanNcIixcblx0XCIuL2VuLWNhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1jYS5qc1wiLFxuXHRcIi4vZW4tY2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWNhLmpzXCIsXG5cdFwiLi9lbi1nYlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tZ2IuanNcIixcblx0XCIuL2VuLWdiLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1nYi5qc1wiLFxuXHRcIi4vZW4taWVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWllLmpzXCIsXG5cdFwiLi9lbi1pZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWUuanNcIixcblx0XCIuL2VuLWlsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbC5qc1wiLFxuXHRcIi4vZW4taWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWlsLmpzXCIsXG5cdFwiLi9lbi1pblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taW4uanNcIixcblx0XCIuL2VuLWluLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbi5qc1wiLFxuXHRcIi4vZW4tbnpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLW56LmpzXCIsXG5cdFwiLi9lbi1uei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tbnouanNcIixcblx0XCIuL2VuLXNnXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1zZy5qc1wiLFxuXHRcIi4vZW4tc2cuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLXNnLmpzXCIsXG5cdFwiLi9lb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW8uanNcIixcblx0XCIuL2VvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lby5qc1wiLFxuXHRcIi4vZXNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLmpzXCIsXG5cdFwiLi9lcy1kb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtZG8uanNcIixcblx0XCIuL2VzLWRvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1kby5qc1wiLFxuXHRcIi4vZXMtbXhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLW14LmpzXCIsXG5cdFwiLi9lcy1teC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtbXguanNcIixcblx0XCIuL2VzLXVzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy11cy5qc1wiLFxuXHRcIi4vZXMtdXMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLXVzLmpzXCIsXG5cdFwiLi9lcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMuanNcIixcblx0XCIuL2V0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldC5qc1wiLFxuXHRcIi4vZXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V0LmpzXCIsXG5cdFwiLi9ldVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXUuanNcIixcblx0XCIuL2V1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldS5qc1wiLFxuXHRcIi4vZmFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZhLmpzXCIsXG5cdFwiLi9mYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmEuanNcIixcblx0XCIuL2ZpXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9maS5qc1wiLFxuXHRcIi4vZmkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpLmpzXCIsXG5cdFwiLi9maWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpbC5qc1wiLFxuXHRcIi4vZmlsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9maWwuanNcIixcblx0XCIuL2ZvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mby5qc1wiLFxuXHRcIi4vZm8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZvLmpzXCIsXG5cdFwiLi9mclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnIuanNcIixcblx0XCIuL2ZyLWNhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jYS5qc1wiLFxuXHRcIi4vZnItY2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNhLmpzXCIsXG5cdFwiLi9mci1jaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2guanNcIixcblx0XCIuL2ZyLWNoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jaC5qc1wiLFxuXHRcIi4vZnIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLmpzXCIsXG5cdFwiLi9meVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnkuanNcIixcblx0XCIuL2Z5LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9meS5qc1wiLFxuXHRcIi4vZ2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dhLmpzXCIsXG5cdFwiLi9nYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2EuanNcIixcblx0XCIuL2dkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nZC5qc1wiLFxuXHRcIi4vZ2QuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dkLmpzXCIsXG5cdFwiLi9nbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2wuanNcIixcblx0XCIuL2dsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nbC5qc1wiLFxuXHRcIi4vZ29tLWRldmFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1kZXZhLmpzXCIsXG5cdFwiLi9nb20tZGV2YS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWRldmEuanNcIixcblx0XCIuL2dvbS1sYXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tbGF0bi5qc1wiLFxuXHRcIi4vZ29tLWxhdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1sYXRuLmpzXCIsXG5cdFwiLi9ndVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ3UuanNcIixcblx0XCIuL2d1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ndS5qc1wiLFxuXHRcIi4vaGVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hlLmpzXCIsXG5cdFwiLi9oZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGUuanNcIixcblx0XCIuL2hpXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oaS5qc1wiLFxuXHRcIi4vaGkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hpLmpzXCIsXG5cdFwiLi9oclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHIuanNcIixcblx0XCIuL2hyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oci5qc1wiLFxuXHRcIi4vaHVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h1LmpzXCIsXG5cdFwiLi9odS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHUuanNcIixcblx0XCIuL2h5LWFtXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oeS1hbS5qc1wiLFxuXHRcIi4vaHktYW0uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h5LWFtLmpzXCIsXG5cdFwiLi9pZFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaWQuanNcIixcblx0XCIuL2lkLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pZC5qc1wiLFxuXHRcIi4vaXNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lzLmpzXCIsXG5cdFwiLi9pcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXMuanNcIixcblx0XCIuL2l0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC5qc1wiLFxuXHRcIi4vaXQtY2hcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LWNoLmpzXCIsXG5cdFwiLi9pdC1jaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQtY2guanNcIixcblx0XCIuL2l0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC5qc1wiLFxuXHRcIi4vamFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2phLmpzXCIsXG5cdFwiLi9qYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvamEuanNcIixcblx0XCIuL2p2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qdi5qc1wiLFxuXHRcIi4vanYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2p2LmpzXCIsXG5cdFwiLi9rYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2EuanNcIixcblx0XCIuL2thLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rYS5qc1wiLFxuXHRcIi4va2tcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2trLmpzXCIsXG5cdFwiLi9ray5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2suanNcIixcblx0XCIuL2ttXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbS5qc1wiLFxuXHRcIi4va20uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ttLmpzXCIsXG5cdFwiLi9rblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva24uanNcIixcblx0XCIuL2tuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbi5qc1wiLFxuXHRcIi4va29cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tvLmpzXCIsXG5cdFwiLi9rby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva28uanNcIixcblx0XCIuL2t1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS5qc1wiLFxuXHRcIi4va3Uta21yXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS1rbXIuanNcIixcblx0XCIuL2t1LWttci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3Uta21yLmpzXCIsXG5cdFwiLi9rdS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3UuanNcIixcblx0XCIuL2t5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9reS5qc1wiLFxuXHRcIi4va3kuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t5LmpzXCIsXG5cdFwiLi9sYlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbGIuanNcIixcblx0XCIuL2xiLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sYi5qc1wiLFxuXHRcIi4vbG9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xvLmpzXCIsXG5cdFwiLi9sby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbG8uanNcIixcblx0XCIuL2x0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdC5qc1wiLFxuXHRcIi4vbHQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x0LmpzXCIsXG5cdFwiLi9sdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHYuanNcIixcblx0XCIuL2x2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdi5qc1wiLFxuXHRcIi4vbWVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21lLmpzXCIsXG5cdFwiLi9tZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWUuanNcIixcblx0XCIuL21pXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9taS5qc1wiLFxuXHRcIi4vbWkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21pLmpzXCIsXG5cdFwiLi9ta1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWsuanNcIixcblx0XCIuL21rLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tay5qc1wiLFxuXHRcIi4vbWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21sLmpzXCIsXG5cdFwiLi9tbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWwuanNcIixcblx0XCIuL21uXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbi5qc1wiLFxuXHRcIi4vbW4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21uLmpzXCIsXG5cdFwiLi9tclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXIuanNcIixcblx0XCIuL21yLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tci5qc1wiLFxuXHRcIi4vbXNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLmpzXCIsXG5cdFwiLi9tcy1teVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMtbXkuanNcIixcblx0XCIuL21zLW15LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy1teS5qc1wiLFxuXHRcIi4vbXMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLmpzXCIsXG5cdFwiLi9tdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXQuanNcIixcblx0XCIuL210LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tdC5qc1wiLFxuXHRcIi4vbXlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL215LmpzXCIsXG5cdFwiLi9teS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXkuanNcIixcblx0XCIuL25iXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uYi5qc1wiLFxuXHRcIi4vbmIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25iLmpzXCIsXG5cdFwiLi9uZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmUuanNcIixcblx0XCIuL25lLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uZS5qc1wiLFxuXHRcIi4vbmxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLmpzXCIsXG5cdFwiLi9ubC1iZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwtYmUuanNcIixcblx0XCIuL25sLWJlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC1iZS5qc1wiLFxuXHRcIi4vbmwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLmpzXCIsXG5cdFwiLi9ublwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbm4uanNcIixcblx0XCIuL25uLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubi5qc1wiLFxuXHRcIi4vb2MtbG5jXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9vYy1sbmMuanNcIixcblx0XCIuL29jLWxuYy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvb2MtbG5jLmpzXCIsXG5cdFwiLi9wYS1pblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGEtaW4uanNcIixcblx0XCIuL3BhLWluLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wYS1pbi5qc1wiLFxuXHRcIi4vcGxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BsLmpzXCIsXG5cdFwiLi9wbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGwuanNcIixcblx0XCIuL3B0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC5qc1wiLFxuXHRcIi4vcHQtYnJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LWJyLmpzXCIsXG5cdFwiLi9wdC1ici5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQtYnIuanNcIixcblx0XCIuL3B0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC5qc1wiLFxuXHRcIi4vcm9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3JvLmpzXCIsXG5cdFwiLi9yby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcm8uanNcIixcblx0XCIuL3J1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ydS5qc1wiLFxuXHRcIi4vcnUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3J1LmpzXCIsXG5cdFwiLi9zZFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2QuanNcIixcblx0XCIuL3NkLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZC5qc1wiLFxuXHRcIi4vc2VcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NlLmpzXCIsXG5cdFwiLi9zZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2UuanNcIixcblx0XCIuL3NpXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zaS5qc1wiLFxuXHRcIi4vc2kuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NpLmpzXCIsXG5cdFwiLi9za1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2suanNcIixcblx0XCIuL3NrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zay5qc1wiLFxuXHRcIi4vc2xcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NsLmpzXCIsXG5cdFwiLi9zbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2wuanNcIixcblx0XCIuL3NxXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcS5qc1wiLFxuXHRcIi4vc3EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NxLmpzXCIsXG5cdFwiLi9zclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3IuanNcIixcblx0XCIuL3NyLWN5cmxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLWN5cmwuanNcIixcblx0XCIuL3NyLWN5cmwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLWN5cmwuanNcIixcblx0XCIuL3NyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci5qc1wiLFxuXHRcIi4vc3NcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NzLmpzXCIsXG5cdFwiLi9zcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3MuanNcIixcblx0XCIuL3N2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdi5qc1wiLFxuXHRcIi4vc3YuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N2LmpzXCIsXG5cdFwiLi9zd1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3cuanNcIixcblx0XCIuL3N3LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdy5qc1wiLFxuXHRcIi4vdGFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RhLmpzXCIsXG5cdFwiLi90YS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGEuanNcIixcblx0XCIuL3RlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ZS5qc1wiLFxuXHRcIi4vdGUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RlLmpzXCIsXG5cdFwiLi90ZXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RldC5qc1wiLFxuXHRcIi4vdGV0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ZXQuanNcIixcblx0XCIuL3RnXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90Zy5qc1wiLFxuXHRcIi4vdGcuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RnLmpzXCIsXG5cdFwiLi90aFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGguanNcIixcblx0XCIuL3RoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90aC5qc1wiLFxuXHRcIi4vdGtcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RrLmpzXCIsXG5cdFwiLi90ay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGsuanNcIixcblx0XCIuL3RsLXBoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90bC1waC5qc1wiLFxuXHRcIi4vdGwtcGguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsLXBoLmpzXCIsXG5cdFwiLi90bGhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsaC5qc1wiLFxuXHRcIi4vdGxoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90bGguanNcIixcblx0XCIuL3RyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ci5qc1wiLFxuXHRcIi4vdHIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RyLmpzXCIsXG5cdFwiLi90emxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bC5qc1wiLFxuXHRcIi4vdHpsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90emwuanNcIixcblx0XCIuL3R6bVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHptLmpzXCIsXG5cdFwiLi90em0tbGF0blwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHptLWxhdG4uanNcIixcblx0XCIuL3R6bS1sYXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0tbGF0bi5qc1wiLFxuXHRcIi4vdHptLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0uanNcIixcblx0XCIuL3VnLWNuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91Zy1jbi5qc1wiLFxuXHRcIi4vdWctY24uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VnLWNuLmpzXCIsXG5cdFwiLi91a1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWsuanNcIixcblx0XCIuL3VrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ay5qc1wiLFxuXHRcIi4vdXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VyLmpzXCIsXG5cdFwiLi91ci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXIuanNcIixcblx0XCIuL3V6XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei5qc1wiLFxuXHRcIi4vdXotbGF0blwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXotbGF0bi5qc1wiLFxuXHRcIi4vdXotbGF0bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXotbGF0bi5qc1wiLFxuXHRcIi4vdXouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LmpzXCIsXG5cdFwiLi92aVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdmkuanNcIixcblx0XCIuL3ZpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS92aS5qc1wiLFxuXHRcIi4veC1wc2V1ZG9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3gtcHNldWRvLmpzXCIsXG5cdFwiLi94LXBzZXVkby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveC1wc2V1ZG8uanNcIixcblx0XCIuL3lvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS95by5qc1wiLFxuXHRcIi4veW8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3lvLmpzXCIsXG5cdFwiLi96aC1jblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtY24uanNcIixcblx0XCIuL3poLWNuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1jbi5qc1wiLFxuXHRcIi4vemgtaGtcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWhrLmpzXCIsXG5cdFwiLi96aC1oay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtaGsuanNcIixcblx0XCIuL3poLW1vXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1tby5qc1wiLFxuXHRcIi4vemgtbW8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLW1vLmpzXCIsXG5cdFwiLi96aC10d1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtdHcuanNcIixcblx0XCIuL3poLXR3LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC10dy5qc1wiXG59O1xuXG5cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0KHJlcSkge1xuXHR2YXIgaWQgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKTtcblx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oaWQpO1xufVxuZnVuY3Rpb24gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSkge1xuXHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKG1hcCwgcmVxKSkge1xuXHRcdHZhciBlID0gbmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIiArIHJlcSArIFwiJ1wiKTtcblx0XHRlLmNvZGUgPSAnTU9EVUxFX05PVF9GT1VORCc7XG5cdFx0dGhyb3cgZTtcblx0fVxuXHRyZXR1cm4gbWFwW3JlcV07XG59XG53ZWJwYWNrQ29udGV4dC5rZXlzID0gZnVuY3Rpb24gd2VicGFja0NvbnRleHRLZXlzKCkge1xuXHRyZXR1cm4gT2JqZWN0LmtleXMobWFwKTtcbn07XG53ZWJwYWNrQ29udGV4dC5yZXNvbHZlID0gd2VicGFja0NvbnRleHRSZXNvbHZlO1xubW9kdWxlLmV4cG9ydHMgPSB3ZWJwYWNrQ29udGV4dDtcbndlYnBhY2tDb250ZXh0LmlkID0gXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlIHN5bmMgcmVjdXJzaXZlIF5cXFxcLlxcXFwvLiokXCI7Il0sIm5hbWVzIjpbImdsb2JhbCIsImZhY3RvcnkiLCJkZWZpbmUiLCJhbWQiLCJleHBvcnRzIiwibW9kdWxlIiwibW9kIiwiYXV0b3NpemUiLCJzZXQiLCJTZXQiLCJsaXN0IiwiaGFzIiwia2V5IiwiQm9vbGVhbiIsImluZGV4T2YiLCJhZGQiLCJwdXNoIiwiX2RlbGV0ZSIsInNwbGljZSIsImNyZWF0ZUV2ZW50IiwibmFtZSIsIkV2ZW50IiwiZSIsImV2dCIsImRvY3VtZW50IiwiaW5pdEV2ZW50IiwiYXNzaWduIiwidGEiLCJub2RlTmFtZSIsImhlaWdodE9mZnNldCIsImNsaWVudFdpZHRoIiwiY2FjaGVkSGVpZ2h0IiwiaW5pdCIsInN0eWxlIiwid2luZG93IiwiZ2V0Q29tcHV0ZWRTdHlsZSIsInJlc2l6ZSIsImJveFNpemluZyIsInBhcnNlRmxvYXQiLCJwYWRkaW5nVG9wIiwicGFkZGluZ0JvdHRvbSIsImJvcmRlclRvcFdpZHRoIiwiYm9yZGVyQm90dG9tV2lkdGgiLCJpc05hTiIsInVwZGF0ZSIsImNoYW5nZU92ZXJmbG93IiwidmFsdWUiLCJ3aWR0aCIsIm9mZnNldFdpZHRoIiwib3ZlcmZsb3dZIiwiZ2V0UGFyZW50T3ZlcmZsb3dzIiwiZWwiLCJhcnIiLCJwYXJlbnROb2RlIiwiRWxlbWVudCIsInNjcm9sbFRvcCIsIm5vZGUiLCJvcmlnaW5hbEhlaWdodCIsImhlaWdodCIsIm92ZXJmbG93cyIsImRvY1RvcCIsImRvY3VtZW50RWxlbWVudCIsImVuZEhlaWdodCIsInNjcm9sbEhlaWdodCIsImZvckVhY2giLCJjb21wdXRlZCIsImNvbXB1dGVkSGVpZ2h0IiwiTWF0aCIsInJvdW5kIiwic3R5bGVIZWlnaHQiLCJkaXNwYXRjaEV2ZW50IiwicGFnZVJlc2l6ZSIsImRlc3Ryb3kiLCJyZW1vdmVFdmVudExpc3RlbmVyIiwiT2JqZWN0Iiwia2V5cyIsImJpbmQiLCJvdmVyZmxvd1giLCJ3b3JkV3JhcCIsImFkZEV2ZW50TGlzdGVuZXIiLCJvcHRpb25zIiwiQXJyYXkiLCJwcm90b3R5cGUiLCJjYWxsIiwibGVuZ3RoIiwieCIsIiQiLCJib290c3RyYXBNYXRlcmlhbERhdGVQaWNrZXIiLCJmb3JtYXQiLCJjbGVhckJ1dHRvbiIsIndlZWtTdGFydCIsInRpbWUiLCJkYXRlIiwiZGF0ZXBpY2tlciIsImF1dG9jbG9zZSIsImNvbnRhaW5lciIsInJlcXVpcmUiLCJqUXVlcnkiLCJ1bmRlZmluZWQiLCJVVENEYXRlIiwiRGF0ZSIsIlVUQyIsImFwcGx5IiwiYXJndW1lbnRzIiwiVVRDVG9kYXkiLCJ0b2RheSIsImdldEZ1bGxZZWFyIiwiZ2V0TW9udGgiLCJnZXREYXRlIiwiaXNVVENFcXVhbHMiLCJkYXRlMSIsImRhdGUyIiwiZ2V0VVRDRnVsbFllYXIiLCJnZXRVVENNb250aCIsImdldFVUQ0RhdGUiLCJhbGlhcyIsIm1ldGhvZCIsImRlcHJlY2F0aW9uTXNnIiwiZm4iLCJkZXByZWNhdGVkIiwiaXNWYWxpZERhdGUiLCJkIiwiZ2V0VGltZSIsIkRhdGVBcnJheSIsImV4dHJhcyIsImdldCIsImkiLCJzbGljZSIsImNvbnRhaW5zIiwidmFsIiwidmFsdWVPZiIsImwiLCJyZW1vdmUiLCJyZXBsYWNlIiwibmV3X2FycmF5IiwiaXNBcnJheSIsImNsZWFyIiwiY29weSIsImEiLCJleHRlbmQiLCJEYXRlcGlja2VyIiwiZWxlbWVudCIsImRhdGEiLCJfcHJvY2Vzc19vcHRpb25zIiwiZGF0ZXMiLCJ2aWV3RGF0ZSIsIm8iLCJkZWZhdWx0Vmlld0RhdGUiLCJmb2N1c0RhdGUiLCJpc0lucHV0IiwiaXMiLCJpbnB1dEZpZWxkIiwiZmluZCIsImNvbXBvbmVudCIsImhhc0NsYXNzIiwiaXNJbmxpbmUiLCJwaWNrZXIiLCJEUEdsb2JhbCIsInRlbXBsYXRlIiwiX2NoZWNrX3RlbXBsYXRlIiwidGVtcGxhdGVzIiwibGVmdEFycm93IiwiaHRtbCIsInJpZ2h0QXJyb3ciLCJfYnVpbGRFdmVudHMiLCJfYXR0YWNoRXZlbnRzIiwiYWRkQ2xhc3MiLCJhcHBlbmRUbyIsInJ0bCIsImNhbGVuZGFyV2Vla3MiLCJhdHRyIiwiTnVtYmVyIiwic3RhcnREYXRlIiwiX28iLCJlbmREYXRlIiwiZGF5c09mV2Vla0Rpc2FibGVkIiwiZGF5c09mV2Vla0hpZ2hsaWdodGVkIiwiZGF0ZXNEaXNhYmxlZCIsIl9hbGxvd191cGRhdGUiLCJzZXRWaWV3TW9kZSIsInN0YXJ0VmlldyIsImZpbGxEb3ciLCJmaWxsTW9udGhzIiwic2hvdyIsImNvbnN0cnVjdG9yIiwiX3Jlc29sdmVWaWV3TmFtZSIsInZpZXciLCJlYWNoIiwidmlld01vZGVzIiwidmlld01vZGUiLCJpbkFycmF5IiwibmFtZXMiLCJfcmVzb2x2ZURheXNPZldlZWsiLCJkYXlzT2ZXZWVrIiwic3BsaXQiLCJtYXAiLCJ0bXAiLCJtYXRjaCIsImpEb20iLCJleCIsIm9wdHMiLCJsYW5nIiwibGFuZ3VhZ2UiLCJkZWZhdWx0cyIsIm1pblZpZXdNb2RlIiwibWF4Vmlld01vZGUiLCJtYXgiLCJtaW4iLCJtdWx0aWRhdGUiLCJtdWx0aWRhdGVTZXBhcmF0b3IiLCJTdHJpbmciLCJ3ZWVrRW5kIiwicGFyc2VGb3JtYXQiLCJJbmZpbml0eSIsIl9sb2NhbF90b191dGMiLCJfemVyb190aW1lIiwicGFyc2VEYXRlIiwiYXNzdW1lTmVhcmJ5WWVhciIsInBsYyIsIm9yaWVudGF0aW9uIiwidG9Mb3dlckNhc2UiLCJfcGxjIiwiZ3JlcCIsIndvcmQiLCJ0ZXN0IiwieSIsInllYXIiLCJtb250aCIsImRheSIsIl9ldmVudHMiLCJfc2Vjb25kYXJ5RXZlbnRzIiwiX2FwcGx5RXZlbnRzIiwiZXZzIiwiY2giLCJldiIsIm9uIiwiX3VuYXBwbHlFdmVudHMiLCJvZmYiLCJldmVudHMiLCJrZXl1cCIsInByb3h5Iiwia2V5Q29kZSIsImtleWRvd24iLCJwYXN0ZSIsInNob3dPbkZvY3VzIiwiZm9jdXMiLCJjbGljayIsImJsdXIiLCJfZm9jdXNlZF9mcm9tIiwidGFyZ2V0IiwiaW1tZWRpYXRlVXBkYXRlcyIsIm5hdkFycm93c0NsaWNrIiwiZGF5Q2VsbENsaWNrIiwicGxhY2UiLCJoaWRlIiwiX2RldGFjaEV2ZW50cyIsIl9hdHRhY2hTZWNvbmRhcnlFdmVudHMiLCJfZGV0YWNoU2Vjb25kYXJ5RXZlbnRzIiwiX3RyaWdnZXIiLCJldmVudCIsImFsdGRhdGUiLCJsb2NhbF9kYXRlIiwiX3V0Y190b19sb2NhbCIsInRyaWdnZXIiLCJ0eXBlIiwiaXgiLCJmb3JtYXREYXRlIiwicHJvcCIsImVuYWJsZU9uUmVhZG9ubHkiLCJuYXZpZ2F0b3IiLCJtc01heFRvdWNoUG9pbnRzIiwiZGlzYWJsZVRvdWNoS2V5Ym9hcmQiLCJkZXRhY2giLCJmb3JjZVBhcnNlIiwic2V0VmFsdWUiLCJkYXRlU3RyaW5nIiwib3JpZ2luYWxFdmVudCIsImNsaXBib2FyZERhdGEiLCJ0eXBlcyIsImdldERhdGEiLCJzZXREYXRlIiwicHJldmVudERlZmF1bHQiLCJ1dGMiLCJsb2NhbCIsImdldFRpbWV6b25lT2Zmc2V0IiwiX3plcm9fdXRjX3RpbWUiLCJnZXREYXRlcyIsImdldFVUQ0RhdGVzIiwic2VsZWN0ZWRfZGF0ZSIsImNsZWFyRGF0ZXMiLCJzZXREYXRlcyIsImFyZ3MiLCJzZXRVVENEYXRlcyIsInNldFVUQ0RhdGUiLCJmb3JtYXR0ZWQiLCJnZXRGb3JtYXR0ZWREYXRlIiwiam9pbiIsImdldFN0YXJ0RGF0ZSIsInNldFN0YXJ0RGF0ZSIsInVwZGF0ZU5hdkFycm93cyIsImdldEVuZERhdGUiLCJzZXRFbmREYXRlIiwic2V0RGF5c09mV2Vla0Rpc2FibGVkIiwic2V0RGF5c09mV2Vla0hpZ2hsaWdodGVkIiwic2V0RGF0ZXNEaXNhYmxlZCIsImNhbGVuZGFyV2lkdGgiLCJvdXRlcldpZHRoIiwiY2FsZW5kYXJIZWlnaHQiLCJvdXRlckhlaWdodCIsInZpc3VhbFBhZGRpbmciLCJ3aW5kb3dXaWR0aCIsImFwcGVuZE9mZnNldCIsIm9mZnNldCIsInBhcmVudHNaaW5kZXgiLCJwYXJlbnRzIiwiaXRlbVpJbmRleCIsImNzcyIsInpJbmRleCIsInpJbmRleE9mZnNldCIsInBhcmVudCIsImxlZnQiLCJ0b3AiLCJyZW1vdmVDbGFzcyIsInlvcmllbnQiLCJ0b3Bfb3ZlcmZsb3ciLCJwYXJzZUludCIsInJpZ2h0Iiwib2xkRGF0ZXMiLCJmcm9tQXJncyIsImRhdGVXaXRoaW5SYW5nZSIsInVwZGF0ZVZpZXdEYXRlIiwiY2hhbmdlIiwiZmlsbCIsInNob3dXZWVrRGF5cyIsImRvd0NudCIsImRheXNNaW4iLCJhcHBlbmQiLCJsb2NhbERhdGUiLCJmb2N1c2VkIiwibW9udGhzU2hvcnQiLCJzZXRSYW5nZSIsInJhbmdlIiwiZ2V0Q2xhc3NOYW1lcyIsImNscyIsInRvZGF5SGlnaGxpZ2h0IiwiZGF0ZUlzRGlzYWJsZWQiLCJnZXRVVENEYXkiLCJfZmlsbF95ZWFyc1ZpZXciLCJzZWxlY3RvciIsImNzc0NsYXNzIiwiZmFjdG9yIiwic3RhcnRZZWFyIiwiZW5kWWVhciIsImJlZm9yZUZuIiwic3RlcCIsInN0YXJ0VmFsIiwiZmxvb3IiLCJlbmRWYWwiLCJmb2N1c2VkVmFsIiwic2VsZWN0ZWQiLCJjbGFzc2VzIiwidG9vbHRpcCIsImJlZm9yZSIsImN1cnJWYWwiLCJub29wIiwiZW5hYmxlZCIsImNvbmNhdCIsInRleHQiLCJzdGFydE1vbnRoIiwiZW5kTW9udGgiLCJ0b2RheXR4dCIsImNsZWFydHh0IiwidGl0bGVGb3JtYXQiLCJ0b2RheUJ0biIsImNsZWFyQnRuIiwidGl0bGUiLCJwcmV2TW9udGgiLCJuZXh0TW9udGgiLCJzZXRVVENGdWxsWWVhciIsIndlZWtEYXkiLCJjbHNOYW1lIiwid3MiLCJ0aCIsInl0aCIsImNhbFdlZWsiLCJjb250ZW50IiwiYmVmb3JlU2hvd0RheSIsImlzRnVuY3Rpb24iLCJ1bmlxdWVTb3J0IiwidW5pcXVlIiwidG9TdHJpbmciLCJtb250aHNUaXRsZSIsIm1vbnRocyIsImVuZCIsImVxIiwiYmVmb3JlU2hvd01vbnRoIiwidGhhdCIsIm1vRGF0ZSIsImJlZm9yZVNob3dZZWFyIiwiYmVmb3JlU2hvd0RlY2FkZSIsImJlZm9yZVNob3dDZW50dXJ5IiwicHJldklzRGlzYWJsZWQiLCJuZXh0SXNEaXNhYmxlZCIsInRvZ2dsZUNsYXNzIiwic3RvcFByb3BhZ2F0aW9uIiwiZGlyIiwiX3NldERhdGUiLCJpbmRleCIsInNldFVUQ01vbnRoIiwiJHRhcmdldCIsImN1cnJlbnRUYXJnZXQiLCJ0aW1lc3RhbXAiLCJuYXZTdGVwIiwibW92ZU1vbnRoIiwiX3RvZ2dsZV9tdWx0aWRhdGUiLCJ0b2dnbGVBY3RpdmUiLCJ3aGljaCIsIm1vdmVEYXkiLCJuZXdEYXRlIiwibW92ZVdlZWsiLCJuZXdfZGF0ZSIsIm1hZyIsImFicyIsIm5ld19tb250aCIsIm1vdmVZZWFyIiwibW92ZUF2YWlsYWJsZURhdGUiLCJ3ZWVrT2ZEYXRlSXNEaXNhYmxlZCIsImRhdGVDaGFuZ2VkIiwibmV3Vmlld0RhdGUiLCJrZXlib2FyZE5hdmlnYXRpb24iLCJjdHJsS2V5Iiwic2hpZnRLZXkiLCJjaGlsZHJlbiIsImZpbHRlciIsIkRhdGVSYW5nZVBpY2tlciIsImlucHV0cyIsImpxdWVyeSIsImtlZXBFbXB0eVZhbHVlcyIsImRhdGVwaWNrZXJQbHVnaW4iLCJkYXRlVXBkYXRlZCIsInBpY2tlcnMiLCJ1cGRhdGVEYXRlcyIsInVwZGF0ZVJhbmdlcyIsInAiLCJ1cGRhdGluZyIsImRwIiwia2VlcF9lbXB0eV92YWx1ZXMiLCJqIiwiayIsIm9wdHNfZnJvbV9lbCIsInByZWZpeCIsIm91dCIsImlua2V5IiwiUmVnRXhwIiwicmVfbG93ZXIiLCJfIiwib3B0c19mcm9tX2xvY2FsZSIsImxvY2FsZV9vcHRzIiwib2xkIiwib3B0aW9uIiwic2hpZnQiLCJpbnRlcm5hbF9yZXR1cm4iLCIkdGhpcyIsImVsb3B0cyIsInhvcHRzIiwibG9jb3B0cyIsInRvQXJyYXkiLCJFcnJvciIsIkNvbnN0cnVjdG9yIiwidmFsaWRQYXJ0cyIsIm5vbnB1bmN0dWF0aW9uIiwidG9WYWx1ZSIsInRvRGlzcGxheSIsInNlcGFyYXRvcnMiLCJwYXJ0cyIsImFzc3VtZU5lYXJieSIsImZuX21hcCIsIm0iLCJ3IiwiZGF0ZUFsaWFzZXMiLCJ5ZXN0ZXJkYXkiLCJ0b21vcnJvdyIsInBhcnQiLCJhcHBseU5lYXJieVllYXIiLCJ0aHJlc2hvbGQiLCJwYXJzZWQiLCJzZXR0ZXJzX29yZGVyIiwic2V0dGVyc19tYXAiLCJ5eXl5IiwidiIsImZpbHRlcmVkIiwiZnBhcnRzIiwibWF0Y2hfcGFydCIsImNudCIsIl9kYXRlIiwicyIsIkQiLCJkYXlzU2hvcnQiLCJERCIsImRheXMiLCJNIiwiTU0iLCJ5eSIsInN1YnN0cmluZyIsImRkIiwibW0iLCJzZXBzIiwiaGVhZFRlbXBsYXRlIiwiY29udFRlbXBsYXRlIiwiZm9vdFRlbXBsYXRlIiwibm9Db25mbGljdCIsInZlcnNpb24iLCJtc2ciLCJjb25zb2xlIiwid2FybiIsIm1vbWVudCIsInBsdWdpbk5hbWUiLCJwbHVnaW5EYXRhTmFtZSIsImxvY2FsZSIsIlBsdWdpbiIsImN1cnJlbnRWaWV3IiwibWluRGF0ZSIsIm1heERhdGUiLCJfYXR0YWNoZWRFdmVudHMiLCIkZWxlbWVudCIsInBhcmFtcyIsImN1cnJlbnREYXRlIiwic2hvcnRUaW1lIiwibm93QnV0dG9uIiwiY2FuY2VsVGV4dCIsIm9rVGV4dCIsImNsZWFyVGV4dCIsIm5vd1RleHQiLCJzd2l0Y2hPbkNsaWNrIiwic2V0TmFtZSIsImluaXREYXlzIiwiaW5pdERhdGVzIiwiaW5pdFRlbXBsYXRlIiwiaW5pdEJ1dHRvbnMiLCJfYXR0YWNoRXZlbnQiLCJfY2VudGVyQm94IiwiJGR0cEVsZW1lbnQiLCJfb25FbGVtZW50Q2xpY2siLCJfb25CYWNrZ3JvdW5kQ2xpY2siLCJfb25DbG9zZUNsaWNrIiwiX29uRm9jdXMiLCJpc1ZhbGlkIiwiaXNBZnRlck1pbkRhdGUiLCJpc0JlZm9yZU1heERhdGUiLCJkdHBFbGVtZW50IiwiX29uQ2FuY2VsQ2xpY2siLCJfb25PS0NsaWNrIiwiX29uTW9udGhCZWZvcmVDbGljayIsIl9vbk1vbnRoQWZ0ZXJDbGljayIsIl9vblllYXJCZWZvcmVDbGljayIsIl9vblllYXJBZnRlckNsaWNrIiwiX29uQ2xlYXJDbGljayIsIl9vbk5vd0NsaWNrIiwiaW5pdE1lcmlkaWVuQnV0dG9ucyIsIl9vblNlbGVjdEFNIiwiX29uU2VsZWN0UE0iLCJpbml0RGF0ZSIsIl9jYWxlbmRhciIsImdlbmVyYXRlQ2FsZW5kYXIiLCJ3ZWVrIiwiX3RlbXBsYXRlIiwiY29uc3RydWN0SFRNTENhbGVuZGFyIiwiX29uU2VsZWN0RGF0ZSIsInRvZ2dsZUJ1dHRvbnMiLCJzaG93RGF0ZSIsImluaXRIb3VycyIsInNob3dUaW1lIiwiaG91ciIsImhGb3JtYXQiLCJzdmdDbG9ja0VsZW1lbnQiLCJjcmVhdGVTVkdDbG9jayIsInNpbiIsIlBJIiwiY29zIiwiY29sb3IiLCJzdmdIb3VyQ2lyY2xlIiwiY3JlYXRlU1ZHRWxlbWVudCIsInIiLCJjeCIsImN5Iiwic3ZnSG91clRleHQiLCJ0ZXh0Q29udGVudCIsInRvZ2dsZVRpbWUiLCJjbGFzc05hbWUiLCJzZXRBdHRyaWJ1dGUiLCJfb25TZWxlY3RIb3VyIiwiYXBwZW5kQ2hpbGQiLCJpbml0TWludXRlcyIsInN2Z01pbnV0ZUNpcmNsZSIsIl9vblNlbGVjdE1pbnV0ZSIsInN2Z01pbnV0ZVRleHQiLCJhbmltYXRlSGFuZHMiLCJIIiwibWludXRlIiwiaGgiLCJtaCIsImlzSG91ciIsImhsIiwic3ZnRWxlbWVudCIsInZpZXdCb3giLCJzdmdHRWxlbWVudCIsInRyYW5zZm9ybSIsInN2Z0Nsb2NrRmFjZSIsInN0cm9rZSIsInN2Z0Nsb2NrQ2VudGVyIiwic3ZnTWludXRlSGFuZCIsIngxIiwieTEiLCJ4MiIsInkyIiwic3ZnSG91ckhhbmQiLCJlbXB0eSIsInRhZyIsImF0dHJzIiwiY3JlYXRlRWxlbWVudE5TIiwiY2hlY2tIb3VyIiwiY2hlY2tNaW51dGUiLCJfcmV0dXJuIiwiX21pbkRhdGUiLCJzZWNvbmQiLCJtaWxsaXNlY29uZCIsImNoZWNrVGltZSIsIl9tYXhEYXRlIiwicm90YXRlRWxlbWVudCIsImRlZyIsIldlYmtpdFRyYW5zZm9ybSIsInRvVXBwZXJDYXNlIiwibWludXRlcyIsInNlbGVjdERhdGUiLCJzdGFydE9mTW9udGgiLCJzdGFydE9mIiwiZW5kT2ZNb250aCIsImVuZE9mIiwiaU51bURheSIsImlXZWVrIiwiY2FsZW5kYXIiLCJwb3NzaWJsZSIsImNoYXJBdCIsInJhbmRvbSIsImlzUE0iLCJzZXRFbGVtZW50VmFsdWUiLCJtYXRlcmlhbCIsInN0YXJ0T2ZZZWFyIiwiZW5kT2ZZZWFyIiwiaXNIb3VycyIsInJlc3VsdCIsImNvbnZlcnRIb3VycyIsIl9vbktleWRvd24iLCJzdWJ0cmFjdCIsInNldFRpbWVvdXQiLCJoIiwidG0iLCJzZXRNaW5EYXRlIiwic2V0TWF4RGF0ZSIsImVuYWJsZURheXMiLCJwb3NpdGlvbiIsImFsbG93X2Rpc21pc3MiLCJuZXdlc3Rfb25fdG9wIiwic2hvd1Byb2dyZXNzYmFyIiwicGxhY2VtZW50IiwiZnJvbSIsImFsaWduIiwic3BhY2luZyIsInpfaW5kZXgiLCJkZWxheSIsInRpbWVyIiwidXJsX3RhcmdldCIsIm1vdXNlX292ZXIiLCJhbmltYXRlIiwiZW50ZXIiLCJleGl0Iiwib25TaG93Iiwib25TaG93biIsIm9uQ2xvc2UiLCJvbkNsb3NlZCIsImljb25fdHlwZSIsInN0ciIsIk5vdGlmeSIsIm1lc3NhZ2UiLCJpY29uIiwidXJsIiwic2V0dGluZ3MiLCJfZGVmYXVsdHMiLCJhbmltYXRpb25zIiwic3RhcnQiLCJzZWxmIiwiYnVpbGROb3RpZnkiLCJzZXRJY29uIiwic3R5bGVVUkwiLCJzdHlsZURpc21pc3MiLCJub3RpZnkiLCIkZWxlIiwiY29tbWFuZCIsImNvbW1hbmRzIiwiJGljb24iLCJuZXdEZWxheSIsInBvc1giLCJyZXBvc2l0aW9uIiwiY2xvc2UiLCJiYWNrZ3JvdW5kSW1hZ2UiLCJvZmZzZXRBbXQiLCJkaXNwbGF5IiwibWFyZ2luIiwidHJhbnNpdGlvbiIsImhhc0FuaW1hdGlvbiIsIm9uZSIsIm1vdXNlb3ZlciIsIm1vdXNlb3V0Iiwic2V0SW50ZXJ2YWwiLCJwZXJjZW50IiwiY2xlYXJJbnRlcnZhbCIsIiRzdWNjZXNzb3JzIiwibm90aWZpZXMiLCIkZWxlbWVudHMiLCJuZXh0QWxsIiwicHJldkFsbCIsInBsdWdpbiIsIm5vdGlmeURlZmF1bHRzIiwibm90aWZ5Q2xvc2UiLCJoYXNUb3VjaCIsImhhc1BvaW50ZXJFdmVudHMiLCJjcmVhdGVFbGVtZW50IiwiZG9jRWwiLCJwb2ludGVyRXZlbnRzIiwic3VwcG9ydHMiLCJyZW1vdmVDaGlsZCIsImxpc3ROb2RlTmFtZSIsIml0ZW1Ob2RlTmFtZSIsInJvb3RDbGFzcyIsImxpc3RDbGFzcyIsIml0ZW1DbGFzcyIsImRyYWdDbGFzcyIsImhhbmRsZUNsYXNzIiwiY29sbGFwc2VkQ2xhc3MiLCJwbGFjZUNsYXNzIiwibm9EcmFnQ2xhc3MiLCJlbXB0eUNsYXNzIiwiZXhwYW5kQnRuSFRNTCIsImNvbGxhcHNlQnRuSFRNTCIsImdyb3VwIiwibWF4RGVwdGgiLCJyZXNldCIsInBsYWNlRWwiLCJzZXRQYXJlbnQiLCJkcmFnRWwiLCJhY3Rpb24iLCJpdGVtIiwiY29sbGFwc2VJdGVtIiwiZXhwYW5kSXRlbSIsIm9uU3RhcnRFdmVudCIsImhhbmRsZSIsImNsb3Nlc3QiLCJpc1RvdWNoIiwidG91Y2hlcyIsImRyYWdTdGFydCIsIm9uTW92ZUV2ZW50IiwiZHJhZ01vdmUiLCJvbkVuZEV2ZW50IiwiZHJhZ1N0b3AiLCJzZXJpYWxpemUiLCJkZXB0aCIsImxldmVsIiwiYXJyYXkiLCJpdGVtcyIsImxpIiwic3ViIiwiZmlyc3QiLCJzZXJpYWxpc2UiLCJtb3VzZSIsIm9mZnNldFgiLCJvZmZzZXRZIiwic3RhcnRYIiwic3RhcnRZIiwibGFzdFgiLCJsYXN0WSIsIm5vd1giLCJub3dZIiwiZGlzdFgiLCJkaXN0WSIsImRpckF4IiwiZGlyWCIsImRpclkiLCJsYXN0RGlyWCIsImxhc3REaXJZIiwiZGlzdEF4WCIsImRpc3RBeFkiLCJtb3ZpbmciLCJkcmFnUm9vdEVsIiwiZHJhZ0RlcHRoIiwiaGFzTmV3Um9vdCIsInBvaW50RWwiLCJsaXN0cyIsImV4cGFuZEFsbCIsImNvbGxhcHNlQWxsIiwicHJlcGVuZCIsInVuc2V0UGFyZW50IiwiZHJhZ0l0ZW0iLCJwYWdlWCIsInBhZ2VZIiwiYWZ0ZXIiLCJib2R5IiwicmVwbGFjZVdpdGgiLCJwcmV2IiwibmV4dCIsIm9wdCIsIm5ld0F4IiwibGFzdCIsImlzRW1wdHkiLCJ2aXNpYmlsaXR5IiwiZWxlbWVudEZyb21Qb2ludCIsInNjcm9sbExlZnQiLCJwYWdlWU9mZnNldCIsInBvaW50RWxSb290IiwiaXNOZXdSb290IiwibmVzdGFibGUiLCJyZXR2YWwiLCJaZXB0byIsInRpbWVhZ28iLCJpbldvcmRzIiwicGFyc2UiLCJkYXRldGltZSIsIiR0IiwicmVmcmVzaE1pbGxpcyIsImFsbG93UGFzdCIsImFsbG93RnV0dXJlIiwibG9jYWxlVGl0bGUiLCJjdXRvZmYiLCJhdXRvRGlzcG9zZSIsInN0cmluZ3MiLCJwcmVmaXhBZ28iLCJwcmVmaXhGcm9tTm93Iiwic3VmZml4QWdvIiwic3VmZml4RnJvbU5vdyIsImluUGFzdCIsInNlY29uZHMiLCJob3VycyIsInllYXJzIiwid29yZFNlcGFyYXRvciIsIm51bWJlcnMiLCJkaXN0YW5jZU1pbGxpcyIsIiRsIiwic3VmZml4Iiwic3Vic3RpdHV0ZSIsInN0cmluZ09yRnVuY3Rpb24iLCJudW1iZXIiLCJzdHJpbmciLCJ3b3JkcyIsInNlcGFyYXRvciIsInRyaW0iLCJpc284NjAxIiwiZWxlbSIsImlzVGltZSIsInRhZ05hbWUiLCJmdW5jdGlvbnMiLCJkaXNwb3NlIiwicmVmcmVzaF9lbCIsInJlZnJlc2giLCIkcyIsIl90aW1lYWdvSW50ZXJ2YWwiLCJ0b0xvY2FsZVN0cmluZyIsInVwZGF0ZUZyb21ET00iLCJwcmVwYXJlRGF0YSIsImRpc3RhbmNlIiwicGxhY2VtZW50RnJvbSIsInBsYWNlbWVudEFsaWduIiwiYW5pbWF0ZUVudGVyIiwiYW5pbWF0ZUV4aXQiLCJjb2xvck5hbWUiLCJzaG93Tm90aWZpY2F0aW9uIiwiYWxsb3dEaXNtaXNzIiwic2VyaWFsaXplZERhdGEiLCJKU09OIiwic3RyaW5naWZ5Il0sInNvdXJjZVJvb3QiOiIifQ==