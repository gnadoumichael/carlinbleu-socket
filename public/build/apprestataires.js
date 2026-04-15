(self["webpackChunk"] = self["webpackChunk"] || []).push([["apprestataires"],{

/***/ "./assets/apprestataires.js":
/*!**********************************!*\
  !*** ./assets/apprestataires.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_bootstrap_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./css/bootstrap.css */ "./assets/css/bootstrap.css");
/* harmony import */ var _css_mdb_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./css/mdb.css */ "./assets/css/mdb.css");
/* harmony import */ var _css_waves_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./css/waves.css */ "./assets/css/waves.css");
/* harmony import */ var _css_all_themes_css__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./css/all-themes.css */ "./assets/css/all-themes.css");
/* harmony import */ var _css_select2_min_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./css/select2.min.css */ "./assets/css/select2.min.css");
/* harmony import */ var _css_style_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./css/style.css */ "./assets/css/style.css");
/* harmony import */ var _js_bootstrap_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./js/bootstrap.js */ "./assets/js/bootstrap.js");
/* harmony import */ var _js_datascript_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./js/datascript.js */ "./assets/js/datascript.js");
/* harmony import */ var _js_select2_min_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./js/select2.min.js */ "./assets/js/select2.min.js");
/* harmony import */ var _js_select2_min_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_js_select2_min_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var _js_jquery_tableToExcel_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./js/jquery.tableToExcel.js */ "./assets/js/jquery.tableToExcel.js");
/* harmony import */ var _js_jquery_tableToExcel_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(_js_jquery_tableToExcel_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var _js_jquery_validate_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./js/jquery.validate.js */ "./assets/js/jquery.validate.js");
/* harmony import */ var _js_jquery_validate_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(_js_jquery_validate_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var _js_admin_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./js/admin.js */ "./assets/js/admin.js");
/* harmony import */ var _js_admin_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(_js_admin_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var _js_jquery_simplePagination__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./js/jquery.simplePagination */ "./assets/js/jquery.simplePagination.js");
/* harmony import */ var _js_jquery_simplePagination__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(_js_jquery_simplePagination__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var _components_chantiers_ListePrestataires__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./components/chantiers/ListePrestataires */ "./assets/components/chantiers/ListePrestataires.js");















/***/ }),

/***/ "./assets/components/chantiers/ListePrestataires.js":
/*!**********************************************************!*\
  !*** ./assets/components/chantiers/ListePrestataires.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.number.to-fixed.js */ "./node_modules/core-js/modules/es.number.to-fixed.js");
/* harmony import */ var core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.symbol.async-iterator.js */ "./node_modules/core-js/modules/es.symbol.async-iterator.js");
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/es.symbol.to-string-tag.js */ "./node_modules/core-js/modules/es.symbol.to-string-tag.js");
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/es.json.to-string-tag.js */ "./node_modules/core-js/modules/es.json.to-string-tag.js");
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! core-js/modules/es.math.to-string-tag.js */ "./node_modules/core-js/modules/es.math.to-string-tag.js");
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_28__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_29___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_29__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_30___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_30__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_31___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_31__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_32___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_32__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_33___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_33__);
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_34__ = __webpack_require__(/*! core-js/modules/es.array.reverse.js */ "./node_modules/core-js/modules/es.array.reverse.js");
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_34___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_34__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_35__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_35___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_35__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_36__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_41__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_37__ = __webpack_require__(/*! react-html-table-to-excel */ "./node_modules/react-html-table-to-excel/index.js");
/* harmony import */ var _fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__ = __webpack_require__(/*! ../../fonctions/NumberFormat */ "./assets/fonctions/NumberFormat.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_39__ = __webpack_require__(/*! react-moment */ "./node_modules/react-moment/dist/index.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_39___default = /*#__PURE__*/__webpack_require__.n(react_moment__WEBPACK_IMPORTED_MODULE_39__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_40__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_40___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_40__);
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }



































function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return exports; }; var exports = {}, Op = Object.prototype, hasOwn = Op.hasOwnProperty, defineProperty = Object.defineProperty || function (obj, key, desc) { obj[key] = desc.value; }, $Symbol = "function" == typeof Symbol ? Symbol : {}, iteratorSymbol = $Symbol.iterator || "@@iterator", asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator", toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag"; function define(obj, key, value) { return Object.defineProperty(obj, key, { value: value, enumerable: !0, configurable: !0, writable: !0 }), obj[key]; } try { define({}, ""); } catch (err) { define = function define(obj, key, value) { return obj[key] = value; }; } function wrap(innerFn, outerFn, self, tryLocsList) { var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator, generator = Object.create(protoGenerator.prototype), context = new Context(tryLocsList || []); return defineProperty(generator, "_invoke", { value: makeInvokeMethod(innerFn, self, context) }), generator; } function tryCatch(fn, obj, arg) { try { return { type: "normal", arg: fn.call(obj, arg) }; } catch (err) { return { type: "throw", arg: err }; } } exports.wrap = wrap; var ContinueSentinel = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var IteratorPrototype = {}; define(IteratorPrototype, iteratorSymbol, function () { return this; }); var getProto = Object.getPrototypeOf, NativeIteratorPrototype = getProto && getProto(getProto(values([]))); NativeIteratorPrototype && NativeIteratorPrototype !== Op && hasOwn.call(NativeIteratorPrototype, iteratorSymbol) && (IteratorPrototype = NativeIteratorPrototype); var Gp = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(IteratorPrototype); function defineIteratorMethods(prototype) { ["next", "throw", "return"].forEach(function (method) { define(prototype, method, function (arg) { return this._invoke(method, arg); }); }); } function AsyncIterator(generator, PromiseImpl) { function invoke(method, arg, resolve, reject) { var record = tryCatch(generator[method], generator, arg); if ("throw" !== record.type) { var result = record.arg, value = result.value; return value && "object" == _typeof(value) && hasOwn.call(value, "__await") ? PromiseImpl.resolve(value.__await).then(function (value) { invoke("next", value, resolve, reject); }, function (err) { invoke("throw", err, resolve, reject); }) : PromiseImpl.resolve(value).then(function (unwrapped) { result.value = unwrapped, resolve(result); }, function (error) { return invoke("throw", error, resolve, reject); }); } reject(record.arg); } var previousPromise; defineProperty(this, "_invoke", { value: function value(method, arg) { function callInvokeWithMethodAndArg() { return new PromiseImpl(function (resolve, reject) { invoke(method, arg, resolve, reject); }); } return previousPromise = previousPromise ? previousPromise.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(innerFn, self, context) { var state = "suspendedStart"; return function (method, arg) { if ("executing" === state) throw new Error("Generator is already running"); if ("completed" === state) { if ("throw" === method) throw arg; return doneResult(); } for (context.method = method, context.arg = arg;;) { var delegate = context.delegate; if (delegate) { var delegateResult = maybeInvokeDelegate(delegate, context); if (delegateResult) { if (delegateResult === ContinueSentinel) continue; return delegateResult; } } if ("next" === context.method) context.sent = context._sent = context.arg;else if ("throw" === context.method) { if ("suspendedStart" === state) throw state = "completed", context.arg; context.dispatchException(context.arg); } else "return" === context.method && context.abrupt("return", context.arg); state = "executing"; var record = tryCatch(innerFn, self, context); if ("normal" === record.type) { if (state = context.done ? "completed" : "suspendedYield", record.arg === ContinueSentinel) continue; return { value: record.arg, done: context.done }; } "throw" === record.type && (state = "completed", context.method = "throw", context.arg = record.arg); } }; } function maybeInvokeDelegate(delegate, context) { var methodName = context.method, method = delegate.iterator[methodName]; if (undefined === method) return context.delegate = null, "throw" === methodName && delegate.iterator["return"] && (context.method = "return", context.arg = undefined, maybeInvokeDelegate(delegate, context), "throw" === context.method) || "return" !== methodName && (context.method = "throw", context.arg = new TypeError("The iterator does not provide a '" + methodName + "' method")), ContinueSentinel; var record = tryCatch(method, delegate.iterator, context.arg); if ("throw" === record.type) return context.method = "throw", context.arg = record.arg, context.delegate = null, ContinueSentinel; var info = record.arg; return info ? info.done ? (context[delegate.resultName] = info.value, context.next = delegate.nextLoc, "return" !== context.method && (context.method = "next", context.arg = undefined), context.delegate = null, ContinueSentinel) : info : (context.method = "throw", context.arg = new TypeError("iterator result is not an object"), context.delegate = null, ContinueSentinel); } function pushTryEntry(locs) { var entry = { tryLoc: locs[0] }; 1 in locs && (entry.catchLoc = locs[1]), 2 in locs && (entry.finallyLoc = locs[2], entry.afterLoc = locs[3]), this.tryEntries.push(entry); } function resetTryEntry(entry) { var record = entry.completion || {}; record.type = "normal", delete record.arg, entry.completion = record; } function Context(tryLocsList) { this.tryEntries = [{ tryLoc: "root" }], tryLocsList.forEach(pushTryEntry, this), this.reset(!0); } function values(iterable) { if (iterable) { var iteratorMethod = iterable[iteratorSymbol]; if (iteratorMethod) return iteratorMethod.call(iterable); if ("function" == typeof iterable.next) return iterable; if (!isNaN(iterable.length)) { var i = -1, next = function next() { for (; ++i < iterable.length;) if (hasOwn.call(iterable, i)) return next.value = iterable[i], next.done = !1, next; return next.value = undefined, next.done = !0, next; }; return next.next = next; } } return { next: doneResult }; } function doneResult() { return { value: undefined, done: !0 }; } return GeneratorFunction.prototype = GeneratorFunctionPrototype, defineProperty(Gp, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), defineProperty(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, toStringTagSymbol, "GeneratorFunction"), exports.isGeneratorFunction = function (genFun) { var ctor = "function" == typeof genFun && genFun.constructor; return !!ctor && (ctor === GeneratorFunction || "GeneratorFunction" === (ctor.displayName || ctor.name)); }, exports.mark = function (genFun) { return Object.setPrototypeOf ? Object.setPrototypeOf(genFun, GeneratorFunctionPrototype) : (genFun.__proto__ = GeneratorFunctionPrototype, define(genFun, toStringTagSymbol, "GeneratorFunction")), genFun.prototype = Object.create(Gp), genFun; }, exports.awrap = function (arg) { return { __await: arg }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, asyncIteratorSymbol, function () { return this; }), exports.AsyncIterator = AsyncIterator, exports.async = function (innerFn, outerFn, self, tryLocsList, PromiseImpl) { void 0 === PromiseImpl && (PromiseImpl = Promise); var iter = new AsyncIterator(wrap(innerFn, outerFn, self, tryLocsList), PromiseImpl); return exports.isGeneratorFunction(outerFn) ? iter : iter.next().then(function (result) { return result.done ? result.value : iter.next(); }); }, defineIteratorMethods(Gp), define(Gp, toStringTagSymbol, "Generator"), define(Gp, iteratorSymbol, function () { return this; }), define(Gp, "toString", function () { return "[object Generator]"; }), exports.keys = function (val) { var object = Object(val), keys = []; for (var key in object) keys.push(key); return keys.reverse(), function next() { for (; keys.length;) { var key = keys.pop(); if (key in object) return next.value = key, next.done = !1, next; } return next.done = !0, next; }; }, exports.values = values, Context.prototype = { constructor: Context, reset: function reset(skipTempReset) { if (this.prev = 0, this.next = 0, this.sent = this._sent = undefined, this.done = !1, this.delegate = null, this.method = "next", this.arg = undefined, this.tryEntries.forEach(resetTryEntry), !skipTempReset) for (var name in this) "t" === name.charAt(0) && hasOwn.call(this, name) && !isNaN(+name.slice(1)) && (this[name] = undefined); }, stop: function stop() { this.done = !0; var rootRecord = this.tryEntries[0].completion; if ("throw" === rootRecord.type) throw rootRecord.arg; return this.rval; }, dispatchException: function dispatchException(exception) { if (this.done) throw exception; var context = this; function handle(loc, caught) { return record.type = "throw", record.arg = exception, context.next = loc, caught && (context.method = "next", context.arg = undefined), !!caught; } for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i], record = entry.completion; if ("root" === entry.tryLoc) return handle("end"); if (entry.tryLoc <= this.prev) { var hasCatch = hasOwn.call(entry, "catchLoc"), hasFinally = hasOwn.call(entry, "finallyLoc"); if (hasCatch && hasFinally) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } else if (hasCatch) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); } else { if (!hasFinally) throw new Error("try statement without catch or finally"); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } } } }, abrupt: function abrupt(type, arg) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc <= this.prev && hasOwn.call(entry, "finallyLoc") && this.prev < entry.finallyLoc) { var finallyEntry = entry; break; } } finallyEntry && ("break" === type || "continue" === type) && finallyEntry.tryLoc <= arg && arg <= finallyEntry.finallyLoc && (finallyEntry = null); var record = finallyEntry ? finallyEntry.completion : {}; return record.type = type, record.arg = arg, finallyEntry ? (this.method = "next", this.next = finallyEntry.finallyLoc, ContinueSentinel) : this.complete(record); }, complete: function complete(record, afterLoc) { if ("throw" === record.type) throw record.arg; return "break" === record.type || "continue" === record.type ? this.next = record.arg : "return" === record.type ? (this.rval = this.arg = record.arg, this.method = "return", this.next = "end") : "normal" === record.type && afterLoc && (this.next = afterLoc), ContinueSentinel; }, finish: function finish(finallyLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.finallyLoc === finallyLoc) return this.complete(entry.completion, entry.afterLoc), resetTryEntry(entry), ContinueSentinel; } }, "catch": function _catch(tryLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc === tryLoc) { var record = entry.completion; if ("throw" === record.type) { var thrown = record.arg; resetTryEntry(entry); } return thrown; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(iterable, resultName, nextLoc) { return this.delegate = { iterator: values(iterable), resultName: resultName, nextLoc: nextLoc }, "next" === this.method && (this.arg = undefined), ContinueSentinel; } }, exports; }
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }
function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
function _iterableToArrayLimit(arr, i) { var _i = null == arr ? null : "undefined" != typeof Symbol && arr[Symbol.iterator] || arr["@@iterator"]; if (null != _i) { var _s, _e, _x, _r, _arr = [], _n = !0, _d = !1; try { if (_x = (_i = _i.call(arr)).next, 0 === i) { if (Object(_i) !== _i) return; _n = !1; } else for (; !(_n = (_s = _x.call(_i)).done) && (_arr.push(_s.value), _arr.length !== i); _n = !0); } catch (err) { _d = !0, _e = err; } finally { try { if (!_n && null != _i["return"] && (_r = _i["return"](), Object(_r) !== _r)) return; } finally { if (_d) throw _e; } } return _arr; } }
function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }








var ListePrestataires = function ListePrestataires() {
  var purser = jquery__WEBPACK_IMPORTED_MODULE_40___default()("#prestas").val();
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_35__.useState)([]),
    _useState2 = _slicedToArray(_useState, 2),
    prestas = _useState2[0],
    setPrestas = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_35__.useState)([]),
    _useState4 = _slicedToArray(_useState3, 2),
    clients = _useState4[0],
    setClients = _useState4[1];
  var fetchPresta = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      var dde, dyc;
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            dde = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#jsonprestas').val());
            dyc = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#jsonclients').val());
            setPrestas(dde);
            setClients(dyc);
          case 4:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function fetchPresta() {
      return _ref.apply(this, arguments);
    };
  }();
  (0,react__WEBPACK_IMPORTED_MODULE_35__.useEffect)(function () {
    fetchPresta();
  }, []);
  var showBonPresta = function showBonPresta(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_40___default()('.' + id + 'bons').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('.' + id + 'bons').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('.' + id + 'bons').addClass('hide');
    }
  };
  var showChantiers = function showChantiers(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_40___default()('.' + id + 'chantier').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('.' + id + 'chantier').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('.' + id + 'chantier').addClass('hide');
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('.bonbon').addClass('hide');
    }
  };
  var formatNumber = function formatNumber(num, precision, separator) {
    var parts;
    num = Number(num);
    num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
    parts = num.split('.');
    parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + separator);
    return parts.join(',');
  };
  var pttc = 0;
  var prec = 0;
  var pres = 0;
  var prescount = 0;
  var renderPresta = prestas.map(function (presta) {
    prescount = prescount + 1;
    var bons = presta.bons;
    var ttc = 0;
    var rec = 0;
    var res = 0;
    var bbcount = 0;
    var renderChantiers = clients.map(function (client) {
      var chantiers = client.chantiers;
      if (chantiers.length > 0) {
        return chantiers.map(function (chan) {
          var ca = 0;
          var chanrecu = 0;
          var chanreste = 0;
          var chanttc = 0;
          bons.map(function (bon) {
            if (bon.corbeille === null && parseInt(bon.chantier.id) === parseInt(chan.id)) {
              ca = ca + 1;
            }
          });
          var renderBons = bons.map(function (bon) {
            if (bon.corbeille === null && bon.chantier.id === chan.id) {
              bbcount = bbcount + 1;
              if (bon.etat === 'valide') {
                ttc = ttc + bon.totalttc;
                rec = rec + bon.recu;
                res = res + bon.reste;
                pttc = pttc + bon.totalttc;
                prec = prec + bon.recu;
                pres = pres + bon.reste;
              }
              var caisses = bon.caisses;
              chanrecu = chanrecu + bon.recu;
              chanttc = chanttc + bon.totalttc;
              chanreste = chanreste + bon.reste;
              var renderCaisses = caisses.map(function (caisse) {
                if (caisse.corbeille === null) {
                  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
                    key: caisse.id,
                    className: chan.id + '' + presta.id + 'bons bonbon' + ' hide'
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    className: "text-left bolo600 ml30 borde"
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_39___default()), {
                    format: "DD/MM/YYYY"
                  }, caisse.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    className: "ml30 borde"
                  }, caisse.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                    onClick: function onClick() {
                      devalideCaisse(caisse.id);
                    },
                    title: "D\xE9valider",
                    className: "badge badge-pill bg-blue",
                    style: {
                      marginRight: "5px"
                    }
                  }, "V"), caisse.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                    onClick: function onClick() {
                      valideCaisse(caisse.id);
                    },
                    title: "Valider",
                    className: "badge badge-pill bg-blue-grey",
                    style: {
                      marginRight: "5px"
                    }
                  }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                    onClick: function onClick() {
                      deleteCaisse(caisse.id);
                    },
                    style: {
                      marginRight: "5px"
                    }
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                    className: "fa fa-trash col-pink",
                    title: "Supprimer",
                    "aria-hidden": "true"
                  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                    href: "#",
                    onClick: function onClick() {
                      shasha(caisse.id, 'imprimcaisse');
                    },
                    style: {
                      marginRight: "5px"
                    }
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                    className: "fa fa-eye col-green",
                    "aria-hidden": "true"
                  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                    href: "/crm/caisse/".concat(caisse.id, "/").concat(bon.chantier.id),
                    className: "text-left col-blue-grey bolo600"
                  }, "Caisse N\xB0 ", caisse.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    className: "text-right borde"
                  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    className: "text-right borde"
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
                    numb: caisse.montant
                  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    className: "text-left ml30 borde",
                    colSpan: "7",
                    dangerouslySetInnerHTML: {
                      __html: caisse.caissereference
                    }
                  }));
                } else {
                  return null;
                }
              });
              return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
                key: bon.id,
                className: chan.id + '' + presta.id + 'bons bonbon' + ' hide',
                style: {
                  backgroundColor: "#dae8f5"
                }
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                className: "text-left bolo600 borde"
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_39___default()), {
                format: "DD/MM/YYYY"
              }, bon.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                className: "text-left pri borde"
              }, bon.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                onClick: function onClick() {
                  devalideBon(bon.id);
                },
                title: "D\xE9valider",
                className: "badge badge-pill bg-blue",
                style: {
                  marginRight: "5px"
                }
              }, "V"), bon.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                onClick: function onClick() {
                  valideBon(bon.id);
                },
                title: "Valider",
                className: "badge badge-pill bg-blue-grey",
                style: {
                  marginRight: "5px"
                }
              }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                onClick: function onClick() {
                  delBon(bon.id);
                },
                style: {
                  marginRight: "5px"
                }
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                className: "fa fa-trash col-pink",
                title: "Supprimer",
                "aria-hidden": "true"
              }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                href: "#",
                onClick: function onClick() {
                  shasha(bon.id, 'imprimbon');
                },
                style: {
                  marginRight: "5px"
                }
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                className: "fa fa-eye col-green",
                "aria-hidden": "true"
              })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                href: "/crm/bon/".concat(bon.id, "/").concat(bon.chantier.id)
              }, " Bon N\xB0 ", bon.numbon)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                className: "text-left pri borde"
              }, bon.devis !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, bon.devis.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                onClick: function onClick() {
                  devalideDevis(bon.devis.id);
                },
                title: "D\xE9valider",
                className: "badge badge-pill bg-blue",
                style: {
                  marginRight: "5px"
                }
              }, "V"), bon.devis.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                onClick: function onClick() {
                  valideDevis(bon.devis.id);
                },
                title: "Valider",
                className: "badge badge-pill bg-blue-grey",
                style: {
                  marginRight: "5px"
                }
              }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                href: "#",
                onClick: function onClick() {
                  shasha(bon.devis.id, 'imprimdevis');
                },
                style: {
                  marginRight: "5px"
                }
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                className: "fa fa-eye col-green",
                "aria-hidden": "true"
              })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                href: "/crm/devis/".concat(bon.devis.id, "/").concat(bon.chantier.id)
              }, " Devis N\xB0 ", bon.devis.iddevis))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                className: "text-right borde"
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
                numb: bon.totalttc
              })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                className: "text-right borde"
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
                numb: bon.recu
              })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                className: "text-right borde",
                style: {
                  backgroundColor: "#34cfac"
                }
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
                numb: bon.reste
              })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                className: "text-left borde",
                colSpan: "5",
                dangerouslySetInnerHTML: {
                  __html: bon.bonreference
                }
              })), renderCaisses);
            } else {
              return null;
            }
          });
          if (ca > 0) {
            return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
              key: chan.id,
              className: presta.id + 'chantier' + ' hide',
              onClick: function onClick() {
                showBonPresta(chan.id + '' + presta.id);
              }
            }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
              colSpan: "2"
            }, "# ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
              className: "col-pink bolo700"
            }, client.nomclient.toUpperCase()), " | ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
              className: "col-pink bolo700"
            }, chan.nomchantier.toUpperCase())), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
              className: "text-right borde",
              style: {
                backgroundColor: "#daeae6"
              }
            }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
              numb: chanttc
            })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
              className: "text-right borde",
              style: {
                backgroundColor: "#daeae6"
              }
            }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
              numb: chanrecu
            })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
              className: "text-right borde",
              style: {
                backgroundColor: "#daeae6"
              }
            }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
              numb: chanreste
            })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
              colSpan: "5"
            })), renderBons);
          }
          return null;
        });
      }
      return null;
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
      className: "paginate2",
      key: presta.id,
      onClick: function onClick() {
        showChantiers(presta.id);
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "mw30 text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("input", {
      className: "form-check-input",
      type: "checkbox",
      value: presta.id,
      name: "presta"
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-left bolo700",
      colSpan: "2"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("b", {
      className: "col-blue"
    }, "(", bbcount, ")"), " ", presta.fournisseur), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-right"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
      numb: ttc
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-right"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
      numb: rec
    })), res === 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-right bg-blue-grey"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
      numb: res
    })), res > 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-right bg-pri text-white"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
      numb: res
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-center",
      colSpan: "2"
    }, presta.titre), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-center"
    }, presta.mobile), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-center"
    }, presta.mail), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-center"
    }, presta.adresse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
      className: presta.id + 'chantier' + ' hide'
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-left bolo600 col-pink ml30 borde"
    }, "Date"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-left bolo600 col-pink ml30 borde"
    }, "Bons"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-left bolo600 col-pink ml30 borde"
    }, "Devis"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-right bolo600 col-pink borde"
    }, "Total TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-right bolo600 col-pink borde"
    }, "Per\xE7u"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-right bolo600 col-pink borde"
    }, "Reste"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-left bolo600 col-pink ml30 borde",
      colSpan: "2"
    }, "Client | Chantier"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
      className: "text-left bolo600 col-pink borde",
      colSpan: "3"
    }, "R\xE9f\xE9rence")), renderChantiers);
  });
  if (purser !== 'a') {
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalPrestataire').modal('show');
  }
  jquery__WEBPACK_IMPORTED_MODULE_40___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_40___default()(".js-example-basic-multiple").select2();
    jquery__WEBPACK_IMPORTED_MODULE_40___default()(".js-example-basic-single").select2();
    jquery__WEBPACK_IMPORTED_MODULE_40___default()("#voise").simplePagination('tbody .paginate2');
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#delPresta").off().on("click", function () {
    jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='presta']:checked"), function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
      (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
        method: 'DELETE',
        url: '/crm/fournisseur/del/' + jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).val()
      }).then(function (response) {
        location.reload();
      })["catch"](function (error) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('hide');
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
      });
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#editPresta").off().on("click", function () {
    jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='presta']:checked"), function () {
      window.$('#Traitement').modal('show');
      window.location.href = '/crm/prestataire/edit/' + jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).val();
      return false;
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#checkedPresta").change(function () {
    if (this.checked) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='presta']"), function () {
        this.checked = true;
      });
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='presta']"), function () {
        this.checked = false;
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addPresta').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addPresta').hide();
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closePresta').hide();
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadPresta').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
        type: 'POST',
        url: '/crm/fournisseur/presta/add/3',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addPrestataireForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          location.reload();
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updatePresta').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updatePresta').hide();
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closePresta').hide();
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadPresta').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
        type: 'POST',
        url: '/crm/fournisseur/presta/update/' + purser,
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addPrestataireForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          window.location.href = '/crm/prestataire/';
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#adduBon').on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#adduBon').hide();
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closuBon').hide();
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loaduBon').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor10').val(CKEDITOR.instances['editor10'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor11').val(CKEDITOR.instances['editor11'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
        type: 'POST',
        url: '/crm/bon/chanpresta/adda',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#adduBonForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          window.location.href = '/crm/bon/' + respdata['result'][0]['numbon'] + '/' + respdata['result'][0]['idchantier'];
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#mdModalBon').modal('toggle');
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#handlePrests").on("input", function () {
    var value = jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).val();
    var filter = value.toLowerCase();
    var results = prestas.filter(function (item) {
      if (item.fournisseur.toLowerCase().indexOf(filter) !== -1) {
        return item;
      }
    });
    console.log(results);
    jquery__WEBPACK_IMPORTED_MODULE_40___default()("#voise tbody").empty();
    jquery__WEBPACK_IMPORTED_MODULE_40___default()("#voise tfoot").empty();
    results.map(function (presta) {
      prescount = prescount + 1;
      var bons = presta.bons;
      var ttc = 0;
      var rec = 0;
      var res = 0;
      var bbcount = 0;
      var mobile = " ";
      var mail = " ";
      var adresse = " ";
      var titre = " ";
      if (presta.adresse !== null) {
        adresse = presta.adresse;
      }
      if (presta.mail !== null) {
        mail = presta.mail;
      }
      if (presta.mobile !== null) {
        mobile = presta.mobile;
      }
      if (presta.titre !== undefined) {
        titre = presta.titre;
      }
      clients.map(function (client) {
        var chantiers = client.chantiers;
        if (chantiers.length > 0) {
          chantiers.map(function (chan) {
            bons.map(function (bon) {
              if (bon.corbeille === null && bon.chantier.id === chan.id) {
                bbcount = bbcount + 1;
                if (bon.etat === "valide") {
                  ttc += bon.totalttc;
                  rec += bon.recu;
                  res += bon.reste;
                }
              }
            });
          });
        }
      });
      ttc = formatNumber(ttc, 2, ' ');
      rec = formatNumber(rec, 2, ' ');
      res = formatNumber(res, 2, ' ');
      var newData = "<tr class = \"paginate2\" onclick = \"showChan(".concat(presta.id, ")\" >\n                 <td class = \"mw30 text-center\"></td>\n                <td class = \"text-left bolo700\" colSpan=\"2\"><b class =\"col-blue\">(").concat(bbcount, ")</b> ").concat(presta.fournisseur, "</td>\n                <td class = \"text-right\">").concat(ttc, "</td>\n                <td class = \"text-right\">").concat(rec, "</td>\n                <td class = \"text-right bg-blue-grey\">").concat(res, "</td>\n                <td class = \"text-center\" colSpan=\"2\">").concat(titre, "</td>\n                <td class = \"text-center\">").concat(mobile, "</td>\n                <td class = \"text-center\">").concat(mail, "</td>\n                <td class = \"text-center\">").concat(adresse, "</td>\n              </tr>\n              <tr class = \"").concat(presta.id, "chan hide\"}>\n                    <td class =\"text-left bolo600 col-pink ml30 borde\">Date</td>\n                    <td class =\"text-left bolo600 col-pink ml30 borde\">Bons</td>\n                    <td class =\"text-left bolo600 col-pink ml30 borde\">Devis</td>\n                    <td class =\"text-right bolo600 col-pink borde\">Total TTC</td>\n                    <td class =\"text-right bolo600 col-pink borde\">Per\xE7u</td>\n                    <td class =\"text-right bolo600 col-pink borde\">Reste</td>\n                    <td class =\"text-left bolo600 col-pink ml30 borde\" colSpan=\"2\">Client | Chantier</td>\n                    <td class =\"text-left bolo600 col-pink borde\" colSpan=\"3\">R\xE9f\xE9rence</td>\n                </tr>");
      clients.map(function (client) {
        var chantiers = client.chantiers;
        if (chantiers.length > 0) {
          chantiers.map(function (chan) {
            var ca = 0;
            var chanrecu = 0;
            var chanreste = 0;
            var chanttc = 0;
            bons.map(function (bon) {
              if (bon.corbeille === null && bon.chantier.id === chan.id) {
                ca = ca + 1;
                bbcount = bbcount + 1;
                if (bon.etat === "valide") {
                  chanrecu = chanrecu + bon.recu;
                  chanttc = chanttc + bon.totalttc;
                  chanreste = chanreste + bon.reste;
                }
              }
            });
            chanttc = formatNumber(chanttc, 2, ' ');
            chanrecu = formatNumber(chanrecu, 2, ' ');
            chanreste = formatNumber(chanreste, 2, ' ');
            var aa = chan.id + "" + presta.id;
            if (ca > 0) {
              newData += "<tr class = \"".concat(presta.id, "chan hide\" onclick = \"showBons(").concat(aa, ")\">\n                                    <td></td>\n                                    <td colspan=\"2\"># <span class=\"col-pink bolo700\">").concat(client.nomclient.toUpperCase(), "</span> | <span class=\"col-pink bolo700\">").concat(chan.nomchantier.toUpperCase(), "</span></td>\n                                    <td class=\"text-right borde\">").concat(chanttc, "</td>\n                                    <td class=\"text-right borde\">").concat(chanrecu, "</td>\n                                    <td class=\"text-right borde\">").concat(chanreste, "</td>\n                                    <td colspan=\"5\"></td>\n                                </tr>");
            }
            bons.map(function (bon) {
              if (bon.corbeille === null && bon.chantier.id === chan.id) {
                var date = new Date(bon.date);
                newData += "\n                                <tr class = \"".concat(chan.id).concat(presta.id, "bons hide\" style=\"background-color: #dae8f5\">\n                                    <td class =\"text-left bolo600 borde\">").concat(date.toLocaleDateString('fr-FR'), "</td>\n                                    <td class =\"text-left pri borde\">\n                                     ").concat(bon.etat === "save" ? "<a class =\"badge badge-pill bg-blue-grey\">V</a> <a href=\"/crm/bon/".concat(bon.id, "/").concat(bon.chantier.id, "\" class = \"text-left col-blue-grey bolo600\">Bon N\xB0 ").concat(bon.numbon, "</a>") : "<a class =\"badge badge-pill bg-blue\">V</a> <a href=\"/crm/bon/".concat(bon.id, "/").concat(bon.chantier.id, "\" class = \"text-left col-blue bolo600\">Bon N\xB0 ").concat(bon.numbon, "</a>"), "\n                                    </td>\n                                    <td class =\"text-left pri borde\">\n                                    ").concat(bon.devis.etat === "save" ? "<a class =\"badge badge-pill bg-blue-grey\">V</a> <a href=\"/crm/devis/".concat(bon.devis.id, "/").concat(bon.chantier.id, "\" class = \"text-left col-blue-grey bolo600\">Devis N\xB0 ").concat(bon.devis.iddevis, "</a>") : "<a class =\"badge badge-pill bg-blue\">V</a> <a href=\"/crm/devis/".concat(bon.devis.id, "/").concat(bon.chantier.id, "\" class = \"text-left col-blue bolo600\">Devis N\xB0 ").concat(bon.devis.iddevis, "</a>"), "  \n                                    </td>\n                                    <td class =\"text-right borde\">").concat(formatNumber(bon.totalttc, 2, ' '), "</td>\n                                    <td class =\"text-right borde\">").concat(formatNumber(bon.recu, 2, ' '), "</td>\n                                    <td class =\"text-right borde\" style=\"background-color:#34cfac\">").concat(formatNumber(bon.reste, 2, ' '), "</td>\n                                    <td class =\"text-left borde\" colSpan=\"5\">").concat(bon.bonreference.replace("<p>&nbsp;</p>", ""), "</td>\n                                </tr>");
                var caisses = bon.caisses;
                caisses.map(function (caisse) {
                  if (caisse.corbeille === null) {
                    var _date = new Date(caisse.date);
                    newData += "\n                                     <tr class = \"".concat(chan.id).concat(presta.id, "bons hide\">\n                                        <td class = \"text-left bolo600 ml30 borde\">").concat(_date.toLocaleDateString('fr-FR'), "</td>\n                                        <td class = \"ml30 borde\">\n                                         ").concat(caisse.etat === "save" ? "<a class =\"badge badge-pill bg-blue-grey\">V</a> <a href=\"/crm/caisse/".concat(caisse.id, "/").concat(bon.chantier.id, "\" class = \"text-left col-blue-grey bolo600\">Caisse N\xB0 ").concat(caisse.numcaisse, "</a>") : "<a class =\"badge badge-pill bg-blue\">V</a>  <a href=\"/crm/caisse/".concat(caisse.id, "/").concat(bon.chantier.id, "\" class = \"text-left col-blue bolo600\">Caisse N\xB0 ").concat(caisse.numcaisse, "</a>"), "\n                                        </td>\n                                        <td class = \"text-right borde\"></td>\n                                        <td class = \"text-right borde\">").concat(formatNumber(caisse.montant, 2, ' '), "</td>\n                                        <td class = \"text-left ml30 borde\" colSpan=\"7\">").concat(caisse.caissereference.replace("<p>&nbsp;</p>", ""), "</td>\n                                    </tr>");
                  }
                });
              }
            });
          });
        }
      });
      jquery__WEBPACK_IMPORTED_MODULE_40___default()("#voise tbody").append(newData);
    });
  });
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "col-md-12",
    style: {
      paddingLeft: "0"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("button", {
    type: "button",
    "data-color": "blue",
    className: "btn bg-blue-grey text-white bolo600 waves-effect m-r-5",
    "data-toggle": "modal",
    "data-target": "#modalPrestataire"
  }, "+ PRESTATAIRE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("button", {
    type: "button",
    "data-color": "blue",
    className: "btn bg-blue-grey text-white bolo600 waves-effect",
    "data-toggle": "modal",
    "data-target": "#modalBon"
  }, "+ BON PRESTATAIRE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel-group",
    id: "accordion_2",
    role: "tablist",
    "aria-multiselectable": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel panel-pri"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingPresta"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapsePresta",
    "aria-expanded": "false",
    "aria-controls": "collapsePresta",
    style: {
      fontSize: "16px",
      fontWeight: "500"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), " Prestataires de services", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, prescount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    id: "collapsePresta",
    className: "panel-collapse",
    role: "tabpanel",
    "aria-labelledby": "headingPresta"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("input", {
    type: "checkbox",
    name: "checkPresta",
    id: "checkedPresta"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
    href: "#",
    id: "editPresta",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
    className: "fa fa fa-edit  col-green"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
    href: "#",
    id: "delPresta",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
    className: "fa fa fa-trash col-pink "
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_37__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "prests",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "COMPTE PRESTATAIRE",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("input", {
    type: "text",
    className: "form-control",
    id: "handlePrests",
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("table", {
    id: "voise",
    className: "table table-hover table-striped dashboard-task-infos display nowrape m-t--10",
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-left",
    colSpan: "2"
  }, "PRESTATAIRE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "TOTAL TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "PER\xC7UE TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center",
    style: {
      backgroundColor: "#34cfac"
    }
  }, "SOLDE TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-left",
    colSpan: "2"
  }, "FONCTION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "CONTACTS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "EMAIL"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "ADRESSE"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tbody", null, renderPresta), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
    colSpan: "2"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
    className: "text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
    numb: pttc
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
    className: "text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
    numb: prec
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
    className: "text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_38__["default"], {
    numb: pres
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
    colSpan: "2"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null)))))))));
};
try {
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_36__.createRoot)(document.getElementById('setprestataires'));
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(ListePrestataires, null));
} catch (e) {}

/***/ }),

/***/ "./assets/fonctions/NumberFormat.js":
/*!******************************************!*\
  !*** ./assets/fonctions/NumberFormat.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.number.to-fixed.js */ "./node_modules/core-js/modules/es.number.to-fixed.js");
/* harmony import */ var core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_7__);








var NumberFormat;
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (NumberFormat = function NumberFormat(props) {
  var formatNumber = function formatNumber(num, precision, separator) {
    var parts;
    num = Number(num);
    num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
    parts = num.split('.');
    parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator || ','));
    return parts.join(',');
  };
  return formatNumber(props.numb, 2, ' ');
});

/***/ }),

/***/ "./assets/js/jquery.simplePagination.js":
/*!**********************************************!*\
  !*** ./assets/js/jquery.simplePagination.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/**
 * jquery.simplePagination.js
 * @version: v1.0.0
 * @author: Sebastian Marulanda http://marulanda.me
 * @see: https://github.com/smarulanda/jquery.simplePagination
 */

(function ($) {
  $.fn.simplePagination = function (options) {
    var defaults = {
      perPage: 20,
      containerClass: '',
      previousButtonClass: '',
      nextButtonClass: '',
      previousButtonText: '<',
      nextButtonText: '>',
      currentPage: 1
    };
    var settings = $.extend({}, defaults, options);
    return this.each(function () {
      var $rows = $(options, this);
      var pages = Math.ceil($rows.length / settings.perPage);
      var container = document.createElement('div');
      var bPrevious = document.createElement('button');
      var bNext = document.createElement('button');
      var of = document.createElement('span');
      bPrevious.innerHTML = settings.previousButtonText;
      bNext.innerHTML = settings.nextButtonText;
      container.className = settings.containerClass;
      bPrevious.className = settings.previousButtonClass;
      bNext.className = settings.nextButtonClass;
      bPrevious.style.marginRight = '8px';
      bPrevious.classList.add('btn');
      bPrevious.classList.add('bg-blue');
      bPrevious.classList.add('bolo700');
      bNext.style.marginLeft = '8px';
      bNext.classList.add('btn');
      bNext.classList.add('bg-blue');
      bNext.classList.add('bolo700');
      container.style.textAlign = "right";
      container.style.marginBottom = '20px';
      container.appendChild(bPrevious);
      container.appendChild(of);
      container.appendChild(bNext);
      $(this).after(container);
      update();
      $(bNext).click(function () {
        if (settings.currentPage + 1 > pages) {
          settings.currentPage = pages;
        } else {
          settings.currentPage++;
        }
        update();
      });
      $(bPrevious).click(function () {
        if (settings.currentPage - 1 < 1) {
          settings.currentPage = 1;
        } else {
          settings.currentPage--;
        }
        update();
      });
      function update() {
        var from = (settings.currentPage - 1) * settings.perPage + 1;
        var to = from + settings.perPage - 1;
        if (to > $rows.length) {
          to = $rows.length;
        }
        $rows.hide();
        $rows.slice(from - 1, to).show();
        of.innerHTML = from + ' à ' + to + ' sur ' + $rows.length + ' lignes';
        if ($rows.length <= settings.perPage) {
          $(container).hide();
        } else {
          $(container).show();
        }
      }
    });
  };
})(jQuery);

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

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-383511","vendors-node_modules_core-js_modules_es_array_from_js-node_modules_core-js_modules_es_array_i-c84b5d","vendors-node_modules_moment_locale_af_js-node_modules_moment_locale_ar-dz_js-node_modules_mom-582c96","vendors-node_modules_react-html-table-to-excel_index_js","vendors-node_modules_react-moment_dist_index_js","assets_js_datascript_js-assets_js_jquery_validate_js-assets_css_mdb_css","assets_js_admin_js-assets_js_bootstrap_js-assets_js_jquery_tableToExcel_js-assets_js_select2_-13fb9c"], () => (__webpack_exec__("./assets/apprestataires.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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O0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHByZXN0YXRhaXJlcy5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29tcG9uZW50cy9jaGFudGllcnMvTGlzdGVQcmVzdGF0YWlyZXMuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ZvbmN0aW9ucy9OdW1iZXJGb3JtYXQuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2pxdWVyeS5zaW1wbGVQYWdpbmF0aW9uLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlLyBzeW5jIF5cXC5cXC8uKiQiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL2Nzcy9ib290c3RyYXAuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9tZGIuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy93YXZlcy5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL2FsbC10aGVtZXMuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9zZWxlY3QyLm1pbi5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3N0eWxlLmNzcyc7XHJcblxyXG5cclxuaW1wb3J0ICcuL2pzL2Jvb3RzdHJhcC5qcyc7XHJcbmltcG9ydCAnLi9qcy9kYXRhc2NyaXB0LmpzJztcclxuaW1wb3J0ICcuL2pzL3NlbGVjdDIubWluLmpzJztcclxuaW1wb3J0ICcuL2pzL2pxdWVyeS50YWJsZVRvRXhjZWwuanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnZhbGlkYXRlLmpzJztcclxuaW1wb3J0ICcuL2pzL2FkbWluLmpzJztcclxuaW1wb3J0ICcuL2pzL2pxdWVyeS5zaW1wbGVQYWdpbmF0aW9uJztcclxuXHJcbmltcG9ydCAnLi9jb21wb25lbnRzL2NoYW50aWVycy9MaXN0ZVByZXN0YXRhaXJlcyc7XHJcblxyXG4iLCJpbXBvcnQgUmVhY3QsIHt1c2VFZmZlY3QsIHVzZVN0YXRlfSBmcm9tIFwicmVhY3RcIjtcbmltcG9ydCB7Y3JlYXRlUm9vdH0gZnJvbSAncmVhY3QtZG9tL2NsaWVudCc7XG5pbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XG5pbXBvcnQgUmVhY3RIVE1MVGFibGVUb0V4Y2VsIGZyb20gJ3JlYWN0LWh0bWwtdGFibGUtdG8tZXhjZWwnO1xuaW1wb3J0IE51bWJlckZvcm1hdCBmcm9tIFwiLi4vLi4vZm9uY3Rpb25zL051bWJlckZvcm1hdFwiO1xuaW1wb3J0IE1vbWVudCBmcm9tICdyZWFjdC1tb21lbnQnO1xuaW1wb3J0ICQgZnJvbSBcImpxdWVyeVwiO1xuaW1wb3J0IHtGaWxsZXJ9IGZyb20gXCJjaGFydC5qc1wiO1xuXG5jb25zdCBMaXN0ZVByZXN0YXRhaXJlcyA9ICgpID0+IHtcbiAgICBsZXQgcHVyc2VyID0gJChcIiNwcmVzdGFzXCIpLnZhbCgpO1xuICAgIGNvbnN0IFtwcmVzdGFzLCBzZXRQcmVzdGFzXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbY2xpZW50cywgc2V0Q2xpZW50c10gPSB1c2VTdGF0ZShbXSk7XG5cbiAgICBjb25zdCBmZXRjaFByZXN0YSA9IGFzeW5jICgpID0+IHtcbiAgICAgICAgY29uc3QgZGRlID0gSlNPTi5wYXJzZSgkKCcjanNvbnByZXN0YXMnKS52YWwoKSk7XG4gICAgICAgIGNvbnN0IGR5YyA9IEpTT04ucGFyc2UoJCgnI2pzb25jbGllbnRzJykudmFsKCkpO1xuICAgICAgICBzZXRQcmVzdGFzKGRkZSk7XG4gICAgICAgIHNldENsaWVudHMoZHljKTtcbiAgICB9O1xuXG4gICAgdXNlRWZmZWN0KCgpID0+IHtcbiAgICAgICAgZmV0Y2hQcmVzdGEoKTtcbiAgICB9LCBbXSk7XG5cbiAgICBjb25zdCBzaG93Qm9uUHJlc3RhID0gKGlkKSA9PiB7XG4gICAgICAgIGlmICgkKCcuJyArIGlkICsgJ2JvbnMnKS5oYXNDbGFzcyhcImhpZGVcIikpIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAnYm9ucycpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAkKCcuJyArIGlkICsgJ2JvbnMnKS5hZGRDbGFzcygnaGlkZScpO1xuICAgICAgICB9XG4gICAgfVxuICAgIGNvbnN0IHNob3dDaGFudGllcnMgPSAoaWQpID0+IHtcbiAgICAgICAgaWYgKCQoJy4nICsgaWQgKyAnY2hhbnRpZXInKS5oYXNDbGFzcyhcImhpZGVcIikpIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAnY2hhbnRpZXInKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgJCgnLicgKyBpZCArICdjaGFudGllcicpLmFkZENsYXNzKCdoaWRlJyk7XG4gICAgICAgICAgICAkKCcuYm9uYm9uJykuYWRkQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgfVxuICAgIH1cbiAgICBjb25zdCBmb3JtYXROdW1iZXIgPSAobnVtLCBwcmVjaXNpb24sIHNlcGFyYXRvcikgPT4ge1xuICAgICAgICBsZXQgcGFydHM7XG4gICAgICAgIG51bSA9IE51bWJlcihudW0pO1xuICAgICAgICBudW0gPSAodHlwZW9mIHByZWNpc2lvbiAhPT0gJ3VuZGVmaW5lZCcgPyBudW0udG9GaXhlZChwcmVjaXNpb24pIDogbnVtKS50b1N0cmluZygpO1xuICAgICAgICBwYXJ0cyA9IG51bS5zcGxpdCgnLicpO1xuICAgICAgICBwYXJ0c1swXSA9IHBhcnRzWzBdLnRvU3RyaW5nKCkucmVwbGFjZSgvKFxcZCkoPz0oXFxkezN9KSsoPyFcXGQpKS9nLCAnJDEnICsgKHNlcGFyYXRvcikpO1xuICAgICAgICByZXR1cm4gcGFydHMuam9pbignLCcpO1xuICAgIH1cblxuICAgIGxldCBwdHRjID0gMDtcbiAgICBsZXQgcHJlYyA9IDA7XG4gICAgbGV0IHByZXMgPSAwO1xuICAgIGxldCBwcmVzY291bnQgPSAwO1xuICAgIGxldCByZW5kZXJQcmVzdGEgPSBwcmVzdGFzLm1hcCgocHJlc3RhKSA9PiB7XG4gICAgICAgIHByZXNjb3VudCA9IHByZXNjb3VudCArIDE7XG4gICAgICAgIGxldCBib25zID0gcHJlc3RhLmJvbnM7XG4gICAgICAgIGxldCB0dGMgPSAwO1xuICAgICAgICBsZXQgcmVjID0gMDtcbiAgICAgICAgbGV0IHJlcyA9IDA7XG4gICAgICAgIGxldCBiYmNvdW50ID0gMDtcblxuXG4gICAgICAgIGNvbnN0IHJlbmRlckNoYW50aWVycyA9IGNsaWVudHMubWFwKChjbGllbnQpID0+IHtcbiAgICAgICAgICAgIGxldCBjaGFudGllcnMgPSBjbGllbnQuY2hhbnRpZXJzO1xuICAgICAgICAgICAgaWYgKGNoYW50aWVycy5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIGNoYW50aWVycy5tYXAoKGNoYW4pID0+IHtcbiAgICAgICAgICAgICAgICAgICAgbGV0IGNhID0gMDtcbiAgICAgICAgICAgICAgICAgICAgbGV0IGNoYW5yZWN1ID0gMDtcbiAgICAgICAgICAgICAgICAgICAgbGV0IGNoYW5yZXN0ZSA9IDA7XG4gICAgICAgICAgICAgICAgICAgIGxldCBjaGFudHRjID0gMDtcblxuICAgICAgICAgICAgICAgICAgICBib25zLm1hcCgoYm9uKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoYm9uLmNvcmJlaWxsZSA9PT0gbnVsbCAmJiBwYXJzZUludChib24uY2hhbnRpZXIuaWQpID09PSBwYXJzZUludChjaGFuLmlkKSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNhID0gY2EgKyAxO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgY29uc3QgcmVuZGVyQm9ucyA9IGJvbnMubWFwKChib24pID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChib24uY29yYmVpbGxlID09PSBudWxsICYmIGJvbi5jaGFudGllci5pZCA9PT0gY2hhbi5pZCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJiY291bnQgPSBiYmNvdW50ICsgMTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoYm9uLmV0YXQgPT09ICd2YWxpZGUnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR0YyA9IHR0YyArIGJvbi50b3RhbHR0YztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVjID0gcmVjICsgYm9uLnJlY3U7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlcyA9IHJlcyArIGJvbi5yZXN0ZTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcHR0YyA9IHB0dGMgKyBib24udG90YWx0dGM7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHByZWMgPSBwcmVjICsgYm9uLnJlY3U7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHByZXMgPSBwcmVzICsgYm9uLnJlc3RlO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgY2Fpc3NlcyA9IGJvbi5jYWlzc2VzO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNoYW5yZWN1ID0gY2hhbnJlY3UgKyBib24ucmVjdTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjaGFudHRjID0gY2hhbnR0YyArIGJvbi50b3RhbHR0YztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjaGFucmVzdGUgPSBjaGFucmVzdGUgKyBib24ucmVzdGU7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uc3QgcmVuZGVyQ2Fpc3NlcyA9IGNhaXNzZXMubWFwKChjYWlzc2UpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGNhaXNzZS5jb3JiZWlsbGUgPT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAoPHRyIGtleT17Y2Fpc3NlLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPXtjaGFuLmlkICsgJycgKyBwcmVzdGEuaWQgKyAnYm9ucyBib25ib24nICsgJyBoaWRlJ30+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib2xvNjAwIG1sMzAgYm9yZGVcIj48TW9tZW50XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvcm1hdD1cIkREL01NL1lZWVlcIj57Y2Fpc3NlLmRhdGV9PC9Nb21lbnQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibWwzMCBib3JkZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Y2Fpc3NlLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGV2YWxpZGVDYWlzc2UoY2Fpc3NlLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIkTDqXZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NhaXNzZS5ldGF0ID09PSBcInNhdmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkZUNhaXNzZShjYWlzc2UuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXlcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5WPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVsZXRlQ2Fpc3NlKGNhaXNzZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdHJhc2ggY29sLXBpbmtcIiB0aXRsZT1cIlN1cHByaW1lclwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hhc2hhKGNhaXNzZS5pZCwgJ2ltcHJpbWNhaXNzZScpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZXllIGNvbC1ncmVlblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9jYWlzc2UvJHtjYWlzc2UuaWR9LyR7Ym9uLmNoYW50aWVyLmlkfWB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cInRleHQtbGVmdCBjb2wtYmx1ZS1ncmV5IGJvbG82MDBcIj5DYWlzc2VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIE7CsCB7Y2Fpc3NlLm51bWNhaXNzZX08L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2NhaXNzZS5tb250YW50fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IG1sMzAgYm9yZGVcIiBjb2xTcGFuPVwiN1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBjYWlzc2UuY2Fpc3NlcmVmZXJlbmNlfX0+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+KTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiBudWxsO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBrZXk9e2Jvbi5pZH0gY2xhc3NOYW1lPXtjaGFuLmlkICsgJycgKyBwcmVzdGEuaWQgKyAnYm9ucyBib25ib24nICsgJyBoaWRlJ31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7YmFja2dyb3VuZENvbG9yOiBcIiNkYWU4ZjVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib2xvNjAwIGJvcmRlXCI+PE1vbWVudFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvcm1hdD1cIkREL01NL1lZWVlcIj57Ym9uLmRhdGV9PC9Nb21lbnQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgcHJpIGJvcmRlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5ldGF0ID09PSBcInZhbGlkZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGV2YWxpZGVCb24oYm9uLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiRMOpdmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmctYmx1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5ldGF0ID09PSBcInNhdmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkZUJvbihib24uaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIlZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWUtZ3JleVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+VjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWxCb24oYm9uLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdHJhc2ggY29sLXBpbmtcIiB0aXRsZT1cIlN1cHByaW1lclwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGFzaGEoYm9uLmlkLCAnaW1wcmltYm9uJylcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZXllIGNvbC1ncmVlblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vYm9uLyR7Ym9uLmlkfS8ke2Jvbi5jaGFudGllci5pZH1gfT4gQm9uIE7CsCB7Ym9uLm51bWJvbn08L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBwcmkgYm9yZGVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmRldmlzICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmRldmlzLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRldmFsaWRlRGV2aXMoYm9uLmRldmlzLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJEw6l2YWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5kZXZpcy5ldGF0ID09PSBcInNhdmVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRlRGV2aXMoYm9uLmRldmlzLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXlcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cIiNcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hhc2hhKGJvbi5kZXZpcy5pZCwgJ2ltcHJpbWRldmlzJylcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLWV5ZSBjb2wtZ3JlZW5cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9kZXZpcy8ke2Jvbi5kZXZpcy5pZH0vJHtib24uY2hhbnRpZXIuaWR9YH0+IERldmlzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgTsKwIHtib24uZGV2aXMuaWRkZXZpc308L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCI+PE51bWJlckZvcm1hdCBudW1iPXtib24udG90YWx0dGN9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2Jvbi5yZWN1fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3tiYWNrZ3JvdW5kQ29sb3I6IFwiIzM0Y2ZhY1wifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2Jvbi5yZXN0ZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGJvcmRlXCIgY29sU3Bhbj1cIjVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBib24uYm9ucmVmZXJlbmNlfX0+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckNhaXNzZXN9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+KVxuICAgICAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gbnVsbDtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgIGlmIChjYSA+IDApIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAoPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIga2V5PXtjaGFuLmlkfSBjbGFzc05hbWU9e3ByZXN0YS5pZCArICdjaGFudGllcicgKyAnIGhpZGUnfSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNob3dCb25QcmVzdGEoY2hhbi5pZCArICcnICsgcHJlc3RhLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIyXCI+IyA8c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiY29sLXBpbmsgYm9sbzcwMFwiPntjbGllbnQubm9tY2xpZW50LnRvVXBwZXJDYXNlKCl9PC9zcGFuPiB8IDxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJjb2wtcGluayBib2xvNzAwXCI+e2NoYW4ubm9tY2hhbnRpZXIudG9VcHBlckNhc2UoKX08L3NwYW4+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e2JhY2tncm91bmRDb2xvcjogXCIjZGFlYWU2XCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtjaGFudHRjfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e2JhY2tncm91bmRDb2xvcjogXCIjZGFlYWU2XCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtjaGFucmVjdX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3tiYWNrZ3JvdW5kQ29sb3I6IFwiI2RhZWFlNlwifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17Y2hhbnJlc3RlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJCb25zfVxuICAgICAgICAgICAgICAgICAgICAgICAgPC8+KVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIHJldHVybiBudWxsO1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgcmV0dXJuIG51bGw7XG5cbiAgICAgICAgfSk7XG5cbiAgICAgICAgcmV0dXJuICg8PlxuICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInBhZ2luYXRlMlwiIGtleT17cHJlc3RhLmlkfSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgc2hvd0NoYW50aWVycyhwcmVzdGEuaWQpXG4gICAgICAgICAgICB9fT5cbiAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjxpbnB1dCBjbGFzc05hbWU9XCJmb3JtLWNoZWNrLWlucHV0XCIgdHlwZT1cImNoZWNrYm94XCIgdmFsdWU9e3ByZXN0YS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT1cInByZXN0YVwiLz48L3RkPlxuICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgYm9sbzcwMFwiIGNvbFNwYW49XCIyXCI+PGJcbiAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPXtcImNvbC1ibHVlXCJ9Pih7YmJjb3VudH0pPC9iPiB7cHJlc3RhLmZvdXJuaXNzZXVyfVxuICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e3R0Y30vPjwvdGQ+XG4gICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e3JlY30vPjwvdGQ+XG4gICAgICAgICAgICAgICAge3JlcyA9PT0gMCAmJlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBiZy1ibHVlLWdyZXlcIj48TnVtYmVyRm9ybWF0IG51bWI9e3Jlc30vPjwvdGQ+XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIHtyZXMgPiAwICYmXG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJnLXByaSB0ZXh0LXdoaXRlXCI+PE51bWJlckZvcm1hdCBudW1iPXtyZXN9Lz48L3RkPlxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIiBjb2xTcGFuPVwiMlwiPntwcmVzdGEudGl0cmV9PC90ZD5cbiAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj57cHJlc3RhLm1vYmlsZX08L3RkPlxuICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPntwcmVzdGEubWFpbH08L3RkPlxuICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPntwcmVzdGEuYWRyZXNzZX08L3RkPlxuICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9e3ByZXN0YS5pZCArICdjaGFudGllcicgKyAnIGhpZGUnfT5cbiAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGJvbG82MDAgY29sLXBpbmsgbWwzMCBib3JkZVwiPkRhdGU8L3RkPlxuICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgYm9sbzYwMCBjb2wtcGluayBtbDMwIGJvcmRlXCI+Qm9uczwvdGQ+XG4gICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib2xvNjAwIGNvbC1waW5rIG1sMzAgYm9yZGVcIj5EZXZpczwvdGQ+XG4gICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9sbzYwMCBjb2wtcGluayBib3JkZVwiPlRvdGFsIFRUQzwvdGQ+XG4gICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9sbzYwMCBjb2wtcGluayBib3JkZVwiPlBlcsOndTwvdGQ+XG4gICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9sbzYwMCBjb2wtcGluayBib3JkZVwiPlJlc3RlPC90ZD5cbiAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGJvbG82MDAgY29sLXBpbmsgbWwzMCBib3JkZVwiIGNvbFNwYW49XCIyXCI+Q2xpZW50IHwgQ2hhbnRpZXI8L3RkPlxuICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgYm9sbzYwMCBjb2wtcGluayBib3JkZVwiIGNvbFNwYW49XCIzXCI+UsOpZsOpcmVuY2U8L3RkPlxuICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgIHtyZW5kZXJDaGFudGllcnN9XG4gICAgICAgIDwvPik7XG4gICAgfSk7XG5cbiAgICBpZiAocHVyc2VyICE9PSAnYScpIHtcbiAgICAgICAgJCgnI21vZGFsUHJlc3RhdGFpcmUnKS5tb2RhbCgnc2hvdycpO1xuICAgIH1cblxuICAgICQoZnVuY3Rpb24gKCkge1xuICAgICAgICAkKFwiLmpzLWV4YW1wbGUtYmFzaWMtbXVsdGlwbGVcIikuc2VsZWN0MigpO1xuICAgICAgICAkKFwiLmpzLWV4YW1wbGUtYmFzaWMtc2luZ2xlXCIpLnNlbGVjdDIoKTtcbiAgICAgICAgJChcIiN2b2lzZVwiKS5zaW1wbGVQYWdpbmF0aW9uKCgndGJvZHkgLnBhZ2luYXRlMicpKTtcbiAgICB9KTtcblxuICAgICQoXCIjZGVsUHJlc3RhXCIpLm9mZigpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKCkge1xuICAgICAgICAkLmVhY2goJChcImlucHV0W25hbWU9J3ByZXN0YSddOmNoZWNrZWRcIiksIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgICAgIG1ldGhvZDogJ0RFTEVURScsIHVybDogJy9jcm0vZm91cm5pc3NldXIvZGVsLycgKyAkKHRoaXMpLnZhbCgpLFxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICBsb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pO1xuICAgIH0pO1xuICAgICQoXCIjZWRpdFByZXN0YVwiKS5vZmYoKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJC5lYWNoKCQoXCJpbnB1dFtuYW1lPSdwcmVzdGEnXTpjaGVja2VkXCIpLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICB3aW5kb3cuJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSAnL2NybS9wcmVzdGF0YWlyZS9lZGl0LycgKyAkKHRoaXMpLnZhbCgpO1xuICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xuICAgICAgICB9KTtcbiAgICB9KTtcbiAgICAkKFwiI2NoZWNrZWRQcmVzdGFcIikuY2hhbmdlKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgaWYgKHRoaXMuY2hlY2tlZCkge1xuICAgICAgICAgICAgJC5lYWNoKCQoXCJpbnB1dFtuYW1lPSdwcmVzdGEnXVwiKSwgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIHRoaXMuY2hlY2tlZCA9IHRydWU7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQuZWFjaCgkKFwiaW5wdXRbbmFtZT0ncHJlc3RhJ11cIiksIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB0aGlzLmNoZWNrZWQgPSBmYWxzZTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSk7XG4gICAgJCgnI2FkZFByZXN0YScpLm9mZigpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNhZGRQcmVzdGEnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNjbG9zZVByZXN0YScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWRQcmVzdGEnKS5jc3MoJ2Rpc3BsYXknLCAnJylcbiAgICAgICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vZm91cm5pc3NldXIvcHJlc3RhL2FkZC8zJyxcbiAgICAgICAgICAgICAgICBkYXRhOiBKU09OLnN0cmluZ2lmeSgkKCcjYWRkUHJlc3RhdGFpcmVGb3JtJykuc2VyaWFsaXplT2JqZWN0KCkpLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzcGRhdGEsIHRleHRTdGF0dXMsIGpxWEhSKSB7XG4gICAgICAgICAgICAgICAgICAgIGxvY2F0aW9uLnJlbG9hZCgpO1xuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uICh4aHIsIHJlc3AsIHRleHQpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB9KVxuICAgICAgICB9XG4gICAgfSlcbiAgICAkKCcjdXBkYXRlUHJlc3RhJykub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKVxuICAgICAgICBpZiAoJCh0aGlzKS5jbG9zZXN0KCdmb3JtJykudmFsaWQoKSkge1xuICAgICAgICAgICAgJCgnI3VwZGF0ZVByZXN0YScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2Nsb3NlUHJlc3RhJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjbG9hZFByZXN0YScpLmNzcygnZGlzcGxheScsICcnKVxuICAgICAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9mb3Vybmlzc2V1ci9wcmVzdGEvdXBkYXRlLycgKyBwdXJzZXIsXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZFByZXN0YXRhaXJlRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlc3BkYXRhLCB0ZXh0U3RhdHVzLCBqcVhIUikge1xuICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICcvY3JtL3ByZXN0YXRhaXJlLyc7XG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBlcnJvcjogZnVuY3Rpb24gKHhociwgcmVzcCwgdGV4dCkge1xuICAgICAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIH0pXG4gICAgICAgIH1cbiAgICB9KVxuICAgICQoJyNhZGR1Qm9uJykub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKVxuICAgICAgICBpZiAoJCh0aGlzKS5jbG9zZXN0KCdmb3JtJykudmFsaWQoKSkge1xuICAgICAgICAgICAgJCgnI2FkZHVCb24nKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNjbG9zdUJvbicpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWR1Qm9uJykuY3NzKCdkaXNwbGF5JywgJycpXG4gICAgICAgICAgICAkKCcjZWRpdG9yMTAnKS52YWwoQ0tFRElUT1IuaW5zdGFuY2VzWydlZGl0b3IxMCddLmdldERhdGEoKSlcbiAgICAgICAgICAgICQoJyNlZGl0b3IxMScpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjExJ10uZ2V0RGF0YSgpKVxuICAgICAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9ib24vY2hhbnByZXN0YS9hZGRhJyxcbiAgICAgICAgICAgICAgICBkYXRhOiBKU09OLnN0cmluZ2lmeSgkKCcjYWRkdUJvbkZvcm0nKS5zZXJpYWxpemVPYmplY3QoKSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChyZXNwZGF0YSwgdGV4dFN0YXR1cywganFYSFIpIHtcbiAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPVxuICAgICAgICAgICAgICAgICAgICAgICAgJy9jcm0vYm9uLycgK1xuICAgICAgICAgICAgICAgICAgICAgICAgcmVzcGRhdGFbJ3Jlc3VsdCddWzBdWydudW1ib24nXSArXG4gICAgICAgICAgICAgICAgICAgICAgICAnLycgK1xuICAgICAgICAgICAgICAgICAgICAgICAgcmVzcGRhdGFbJ3Jlc3VsdCddWzBdWydpZGNoYW50aWVyJ11cbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoeGhyLCByZXNwLCB0ZXh0KSB7XG4gICAgICAgICAgICAgICAgICAgICQoJyNtZE1vZGFsQm9uJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgfSlcbiAgICAgICAgfVxuICAgIH0pXG5cbiAgICAkKFwiI2hhbmRsZVByZXN0c1wiKS5vbihcImlucHV0XCIsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgY29uc3QgdmFsdWUgPSAkKHRoaXMpLnZhbCgpO1xuICAgICAgICBsZXQgZmlsdGVyID0gdmFsdWUudG9Mb3dlckNhc2UoKTtcbiAgICAgICAgY29uc3QgcmVzdWx0cyA9IHByZXN0YXMuZmlsdGVyKGZ1bmN0aW9uIChpdGVtKSB7XG4gICAgICAgICAgICBpZiAoaXRlbS5mb3Vybmlzc2V1ci50b0xvd2VyQ2FzZSgpLmluZGV4T2YoZmlsdGVyKSAhPT0gLTEpIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gaXRlbTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgICAgIGNvbnNvbGUubG9nKHJlc3VsdHMpO1xuICAgICAgICAkKFwiI3ZvaXNlIHRib2R5XCIpLmVtcHR5KCk7XG4gICAgICAgICQoXCIjdm9pc2UgdGZvb3RcIikuZW1wdHkoKTtcblxuICAgICAgICByZXN1bHRzLm1hcCgocHJlc3RhKSA9PiB7XG4gICAgICAgICAgICBwcmVzY291bnQgPSBwcmVzY291bnQgKyAxO1xuICAgICAgICAgICAgbGV0IGJvbnMgPSBwcmVzdGEuYm9ucztcbiAgICAgICAgICAgIGxldCB0dGMgPSAwO1xuICAgICAgICAgICAgbGV0IHJlYyA9IDA7XG4gICAgICAgICAgICBsZXQgcmVzID0gMDtcbiAgICAgICAgICAgIGxldCBiYmNvdW50ID0gMDtcbiAgICAgICAgICAgIGxldCBtb2JpbGUgPSBcIiBcIjtcbiAgICAgICAgICAgIGxldCBtYWlsID0gXCIgXCI7XG4gICAgICAgICAgICBsZXQgYWRyZXNzZSA9IFwiIFwiO1xuICAgICAgICAgICAgbGV0IHRpdHJlID0gXCIgXCI7XG5cbiAgICAgICAgICAgIGlmIChwcmVzdGEuYWRyZXNzZSAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgIGFkcmVzc2UgPSBwcmVzdGEuYWRyZXNzZTtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgaWYgKHByZXN0YS5tYWlsICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgbWFpbCA9IHByZXN0YS5tYWlsO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBpZiAocHJlc3RhLm1vYmlsZSAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgIG1vYmlsZSA9IHByZXN0YS5tb2JpbGU7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIGlmIChwcmVzdGEudGl0cmUgIT09IHVuZGVmaW5lZCkge1xuICAgICAgICAgICAgICAgIHRpdHJlID0gcHJlc3RhLnRpdHJlO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBjbGllbnRzLm1hcCgoY2xpZW50KSA9PiB7XG4gICAgICAgICAgICAgICAgbGV0IGNoYW50aWVycyA9IGNsaWVudC5jaGFudGllcnM7XG4gICAgICAgICAgICAgICAgaWYgKGNoYW50aWVycy5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICAgICAgICAgIGNoYW50aWVycy5tYXAoKGNoYW4pID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGJvbnMubWFwKChib24pID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoYm9uLmNvcmJlaWxsZSA9PT0gbnVsbCAmJiBib24uY2hhbnRpZXIuaWQgPT09IGNoYW4uaWQpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYmJjb3VudCA9IGJiY291bnQgKyAxO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoYm9uLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR0YyArPSBib24udG90YWx0dGM7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZWMgKz0gYm9uLnJlY3U7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXMgKz0gYm9uLnJlc3RlO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICB0dGMgPSBmb3JtYXROdW1iZXIodHRjLCAyLCAnICcpO1xuICAgICAgICAgICAgcmVjID0gZm9ybWF0TnVtYmVyKHJlYywgMiwgJyAnKTtcbiAgICAgICAgICAgIHJlcyA9IGZvcm1hdE51bWJlcihyZXMsIDIsICcgJyk7XG5cbiAgICAgICAgICAgIGxldCBuZXdEYXRhID1cbiAgICAgICAgICAgICAgICBgPHRyIGNsYXNzID0gXCJwYWdpbmF0ZTJcIiBvbmNsaWNrID0gXCJzaG93Q2hhbigke3ByZXN0YS5pZH0pXCIgPlxuICAgICAgICAgICAgICAgICA8dGQgY2xhc3MgPSBcIm13MzAgdGV4dC1jZW50ZXJcIj48L3RkPlxuICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9IFwidGV4dC1sZWZ0IGJvbG83MDBcIiBjb2xTcGFuPVwiMlwiPjxiIGNsYXNzID1cImNvbC1ibHVlXCI+KCR7YmJjb3VudH0pPC9iPiAke3ByZXN0YS5mb3Vybmlzc2V1cn08L3RkPlxuICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9IFwidGV4dC1yaWdodFwiPiR7dHRjfTwvdGQ+XG4gICAgICAgICAgICAgICAgPHRkIGNsYXNzID0gXCJ0ZXh0LXJpZ2h0XCI+JHtyZWN9PC90ZD5cbiAgICAgICAgICAgICAgICA8dGQgY2xhc3MgPSBcInRleHQtcmlnaHQgYmctYmx1ZS1ncmV5XCI+JHtyZXN9PC90ZD5cbiAgICAgICAgICAgICAgICA8dGQgY2xhc3MgPSBcInRleHQtY2VudGVyXCIgY29sU3Bhbj1cIjJcIj4ke3RpdHJlfTwvdGQ+XG4gICAgICAgICAgICAgICAgPHRkIGNsYXNzID0gXCJ0ZXh0LWNlbnRlclwiPiR7bW9iaWxlfTwvdGQ+XG4gICAgICAgICAgICAgICAgPHRkIGNsYXNzID0gXCJ0ZXh0LWNlbnRlclwiPiR7bWFpbH08L3RkPlxuICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9IFwidGV4dC1jZW50ZXJcIj4ke2FkcmVzc2V9PC90ZD5cbiAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgPHRyIGNsYXNzID0gXCIke3ByZXN0YS5pZH1jaGFuIGhpZGVcIn0+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9XCJ0ZXh0LWxlZnQgYm9sbzYwMCBjb2wtcGluayBtbDMwIGJvcmRlXCI+RGF0ZTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9XCJ0ZXh0LWxlZnQgYm9sbzYwMCBjb2wtcGluayBtbDMwIGJvcmRlXCI+Qm9uczwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9XCJ0ZXh0LWxlZnQgYm9sbzYwMCBjb2wtcGluayBtbDMwIGJvcmRlXCI+RGV2aXM8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3MgPVwidGV4dC1yaWdodCBib2xvNjAwIGNvbC1waW5rIGJvcmRlXCI+VG90YWwgVFRDPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzID1cInRleHQtcmlnaHQgYm9sbzYwMCBjb2wtcGluayBib3JkZVwiPlBlcsOndTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9XCJ0ZXh0LXJpZ2h0IGJvbG82MDAgY29sLXBpbmsgYm9yZGVcIj5SZXN0ZTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9XCJ0ZXh0LWxlZnQgYm9sbzYwMCBjb2wtcGluayBtbDMwIGJvcmRlXCIgY29sU3Bhbj1cIjJcIj5DbGllbnQgfCBDaGFudGllcjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9XCJ0ZXh0LWxlZnQgYm9sbzYwMCBjb2wtcGluayBib3JkZVwiIGNvbFNwYW49XCIzXCI+UsOpZsOpcmVuY2U8L3RkPlxuICAgICAgICAgICAgICAgIDwvdHI+YDtcblxuICAgICAgICAgICAgY2xpZW50cy5tYXAoKGNsaWVudCkgPT4ge1xuICAgICAgICAgICAgICAgIGxldCBjaGFudGllcnMgPSBjbGllbnQuY2hhbnRpZXJzO1xuICAgICAgICAgICAgICAgIGlmIChjaGFudGllcnMubGVuZ3RoID4gMCkge1xuICAgICAgICAgICAgICAgICAgICBjaGFudGllcnMubWFwKChjaGFuKSA9PiB7XG5cbiAgICAgICAgICAgICAgICAgICAgICAgIGxldCBjYSA9IDA7XG4gICAgICAgICAgICAgICAgICAgICAgICBsZXQgY2hhbnJlY3UgPSAwO1xuICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGNoYW5yZXN0ZSA9IDA7XG4gICAgICAgICAgICAgICAgICAgICAgICBsZXQgY2hhbnR0YyA9IDA7XG5cbiAgICAgICAgICAgICAgICAgICAgICAgIGJvbnMubWFwKChib24pID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoYm9uLmNvcmJlaWxsZSA9PT0gbnVsbCAmJiBib24uY2hhbnRpZXIuaWQgPT09IGNoYW4uaWQpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2EgPSBjYSArIDE7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJiY291bnQgPSBiYmNvdW50ICsgMTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGJvbi5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjaGFucmVjdSA9IGNoYW5yZWN1ICsgYm9uLnJlY3U7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjaGFudHRjID0gY2hhbnR0YyArIGJvbi50b3RhbHR0YztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNoYW5yZXN0ZSA9IGNoYW5yZXN0ZSArIGJvbi5yZXN0ZTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgICAgICAgICBjaGFudHRjID0gZm9ybWF0TnVtYmVyKGNoYW50dGMsIDIsICcgJyk7XG4gICAgICAgICAgICAgICAgICAgICAgICBjaGFucmVjdSA9IGZvcm1hdE51bWJlcihjaGFucmVjdSwgMiwgJyAnKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGNoYW5yZXN0ZSA9IGZvcm1hdE51bWJlcihjaGFucmVzdGUsIDIsICcgJyk7XG5cbiAgICAgICAgICAgICAgICAgICAgICAgIGxldCBhYSA9IGNoYW4uaWQgKyBcIlwiICsgcHJlc3RhLmlkO1xuXG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoY2EgPiAwKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbmV3RGF0YSArPVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBgPHRyIGNsYXNzID0gXCIke3ByZXN0YS5pZH1jaGFuIGhpZGVcIiBvbmNsaWNrID0gXCJzaG93Qm9ucygke2FhfSlcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbHNwYW49XCIyXCI+IyA8c3BhbiBjbGFzcz1cImNvbC1waW5rIGJvbG83MDBcIj4ke2NsaWVudC5ub21jbGllbnQudG9VcHBlckNhc2UoKX08L3NwYW4+IHwgPHNwYW4gY2xhc3M9XCJjb2wtcGluayBib2xvNzAwXCI+JHtjaGFuLm5vbWNoYW50aWVyLnRvVXBwZXJDYXNlKCl9PC9zcGFuPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCI+JHtjaGFudHRjfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCI+JHtjaGFucmVjdX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPVwidGV4dC1yaWdodCBib3JkZVwiPiR7Y2hhbnJlc3RlfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sc3Bhbj1cIjVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPmBcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgYm9ucy5tYXAoKGJvbikgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIChib24uY29yYmVpbGxlID09PSBudWxsICYmIGJvbi5jaGFudGllci5pZCA9PT0gY2hhbi5pZCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgZGF0ZSA9IG5ldyBEYXRlKGJvbi5kYXRlKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmV3RGF0YSArPSBgXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzcyA9IFwiJHtjaGFuLmlkfSR7cHJlc3RhLmlkfWJvbnMgaGlkZVwiIHN0eWxlPVwiYmFja2dyb3VuZC1jb2xvcjogI2RhZThmNVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzID1cInRleHQtbGVmdCBib2xvNjAwIGJvcmRlXCI+JHtkYXRlLnRvTG9jYWxlRGF0ZVN0cmluZygnZnItRlInKX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzID1cInRleHQtbGVmdCBwcmkgYm9yZGVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAke2Jvbi5ldGF0ID09PSBcInNhdmVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPyBgPGEgY2xhc3MgPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXlcIj5WPC9hPiA8YSBocmVmPVwiL2NybS9ib24vJHtib24uaWR9LyR7Ym9uLmNoYW50aWVyLmlkfVwiIGNsYXNzID0gXCJ0ZXh0LWxlZnQgY29sLWJsdWUtZ3JleSBib2xvNjAwXCI+Qm9uIE7CsCAke2Jvbi5udW1ib259PC9hPmBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDogYDxhIGNsYXNzID1cImJhZGdlIGJhZGdlLXBpbGwgYmctYmx1ZVwiPlY8L2E+IDxhIGhyZWY9XCIvY3JtL2Jvbi8ke2Jvbi5pZH0vJHtib24uY2hhbnRpZXIuaWR9XCIgY2xhc3MgPSBcInRleHQtbGVmdCBjb2wtYmx1ZSBib2xvNjAwXCI+Qm9uIE7CsCAke2Jvbi5udW1ib259PC9hPmBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9XCJ0ZXh0LWxlZnQgcHJpIGJvcmRlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAke2Jvbi5kZXZpcy5ldGF0ID09PSBcInNhdmVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPyBgPGEgY2xhc3MgPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXlcIj5WPC9hPiA8YSBocmVmPVwiL2NybS9kZXZpcy8ke2Jvbi5kZXZpcy5pZH0vJHtib24uY2hhbnRpZXIuaWR9XCIgY2xhc3MgPSBcInRleHQtbGVmdCBjb2wtYmx1ZS1ncmV5IGJvbG82MDBcIj5EZXZpcyBOwrAgJHtib24uZGV2aXMuaWRkZXZpc308L2E+YFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgOiBgPGEgY2xhc3MgPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlXCI+VjwvYT4gPGEgaHJlZj1cIi9jcm0vZGV2aXMvJHtib24uZGV2aXMuaWR9LyR7Ym9uLmNoYW50aWVyLmlkfVwiIGNsYXNzID0gXCJ0ZXh0LWxlZnQgY29sLWJsdWUgYm9sbzYwMFwiPkRldmlzIE7CsCAke2Jvbi5kZXZpcy5pZGRldmlzfTwvYT5gXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0gIFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCI+JHtmb3JtYXROdW1iZXIoYm9uLnRvdGFsdHRjLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3MgPVwidGV4dC1yaWdodCBib3JkZVwiPiR7Zm9ybWF0TnVtYmVyKGJvbi5yZWN1LCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3MgPVwidGV4dC1yaWdodCBib3JkZVwiIHN0eWxlPVwiYmFja2dyb3VuZC1jb2xvcjojMzRjZmFjXCI+JHtmb3JtYXROdW1iZXIoYm9uLnJlc3RlLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3MgPVwidGV4dC1sZWZ0IGJvcmRlXCIgY29sU3Bhbj1cIjVcIj4ke2Jvbi5ib25yZWZlcmVuY2UucmVwbGFjZShcIjxwPiZuYnNwOzwvcD5cIiwgXCJcIil9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5gO1xuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxldCBjYWlzc2VzID0gYm9uLmNhaXNzZXM7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNhaXNzZXMubWFwKChjYWlzc2UpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIChjYWlzc2UuY29yYmVpbGxlID09PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGRhdGUgPSBuZXcgRGF0ZShjYWlzc2UuZGF0ZSk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmV3RGF0YSArPSBgXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzID0gXCIke2NoYW4uaWR9JHtwcmVzdGEuaWR9Ym9ucyBoaWRlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzID0gXCJ0ZXh0LWxlZnQgYm9sbzYwMCBtbDMwIGJvcmRlXCI+JHtkYXRlLnRvTG9jYWxlRGF0ZVN0cmluZygnZnItRlInKX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9IFwibWwzMCBib3JkZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAke2NhaXNzZS5ldGF0ID09PSBcInNhdmVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA/IGA8YSBjbGFzcyA9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWUtZ3JleVwiPlY8L2E+IDxhIGhyZWY9XCIvY3JtL2NhaXNzZS8ke2NhaXNzZS5pZH0vJHtib24uY2hhbnRpZXIuaWR9XCIgY2xhc3MgPSBcInRleHQtbGVmdCBjb2wtYmx1ZS1ncmV5IGJvbG82MDBcIj5DYWlzc2UgTsKwICR7Y2Fpc3NlLm51bWNhaXNzZX08L2E+YFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA6IGA8YSBjbGFzcyA9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWVcIj5WPC9hPiAgPGEgaHJlZj1cIi9jcm0vY2Fpc3NlLyR7Y2Fpc3NlLmlkfS8ke2Jvbi5jaGFudGllci5pZH1cIiBjbGFzcyA9IFwidGV4dC1sZWZ0IGNvbC1ibHVlIGJvbG82MDBcIj5DYWlzc2UgTsKwICR7Y2Fpc3NlLm51bWNhaXNzZX08L2E+YFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcyA9IFwidGV4dC1yaWdodCBib3JkZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzID0gXCJ0ZXh0LXJpZ2h0IGJvcmRlXCI+JHtmb3JtYXROdW1iZXIoY2Fpc3NlLm1vbnRhbnQsIDIsICcgJyl9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3MgPSBcInRleHQtbGVmdCBtbDMwIGJvcmRlXCIgY29sU3Bhbj1cIjdcIj4ke2NhaXNzZS5jYWlzc2VyZWZlcmVuY2UucmVwbGFjZShcIjxwPiZuYnNwOzwvcD5cIiwgXCJcIil9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+YDtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAkKFwiI3ZvaXNlIHRib2R5XCIpLmFwcGVuZChuZXdEYXRhKTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG5cbiAgICByZXR1cm4gKDw+XG4gICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTEyXCIgc3R5bGU9e3twYWRkaW5nTGVmdDogXCIwXCJ9fT5cbiAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIGRhdGEtY29sb3I9XCJibHVlXCIgY2xhc3NOYW1lPVwiYnRuIGJnLWJsdWUtZ3JleSB0ZXh0LXdoaXRlIGJvbG82MDAgd2F2ZXMtZWZmZWN0IG0tci01XCJcbiAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiIGRhdGEtdGFyZ2V0PVwiI21vZGFsUHJlc3RhdGFpcmVcIj4rIFBSRVNUQVRBSVJFXG4gICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIGRhdGEtY29sb3I9XCJibHVlXCIgY2xhc3NOYW1lPVwiYnRuIGJnLWJsdWUtZ3JleSB0ZXh0LXdoaXRlIGJvbG82MDAgd2F2ZXMtZWZmZWN0XCJcbiAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiIGRhdGEtdGFyZ2V0PVwiI21vZGFsQm9uXCI+KyBCT04gUFJFU1RBVEFJUkVcbiAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1ncm91cFwiIGlkPVwiYWNjb3JkaW9uXzJcIiByb2xlPVwidGFibGlzdFwiIGFyaWEtbXVsdGlzZWxlY3RhYmxlPVwidHJ1ZVwiPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwgcGFuZWwtcHJpXCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZyBiZy1wcmlcIiByb2xlPVwidGFiXCIgaWQ9XCJoZWFkaW5nUHJlc3RhXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDUgY2xhc3NOYW1lPVwicGFuZWwtdGl0bGUgXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiY29sbGFwc2VkIHRleHQtd2hpdGVcIiByb2xlPVwiYnV0dG9uXCIgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uXzJcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhyZWY9XCIjY29sbGFwc2VQcmVzdGFcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIiBhcmlhLWNvbnRyb2xzPVwiY29sbGFwc2VQcmVzdGFcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMTZweFwiLCBmb250V2VpZ2h0OiBcIjUwMFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPiBQcmVzdGF0YWlyZXMgZGVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2VydmljZXM8c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJiYWRnZSBiZy1waW5rIGZsb2F0LXJpZ2h0XCI+e3ByZXNjb3VudH08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oNT5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZVByZXN0YVwiIGNsYXNzTmFtZT1cInBhbmVsLWNvbGxhcHNlXCIgcm9sZT1cInRhYnBhbmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJoZWFkaW5nUHJlc3RhXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHlcIiBzdHlsZT17e292ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJib2R5XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC04XCIgc3R5bGU9e3twYWRkaW5nVG9wOiBcIjIwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3NOYW1lPVwibS1yLTUgdmFyZWFjdFwiPjxpbnB1dCB0eXBlPVwiY2hlY2tib3hcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT1cImNoZWNrUHJlc3RhXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwiY2hlY2tlZFByZXN0YVwiLz48L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCIjXCIgaWQ9XCJlZGl0UHJlc3RhXCIgY2xhc3NOYW1lPVwibS1yLTUgdmFyZWFjdFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYSBmYS1lZGl0ICBjb2wtZ3JlZW5cIi8+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwiZGVsUHJlc3RhXCIgY2xhc3NOYW1lPVwibS1yLTUgdmFyZWFjdFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYSBmYS10cmFzaCBjb2wtcGluayBcIi8+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD1cInRlc3QtdGFibGUteGxzLWJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYmFkZ2UgYmFkZ2UtcGlsbCBjb2wtZ3JlZW4gbS1yLTUgZmxvYXQtbGVmdCB2YXJlYWN0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwicHJlc3RzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiR8OpbsOpcmVyIHVuIGZpY2hpZXIgRXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9XCJDT01QVEUgUFJFU1RBVEFJUkVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRXhcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNCBmbG9hdC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImlucHV0LWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvcm0tbGluZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIGNsYXNzTmFtZT1cImZvcm0tY29udHJvbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwiaGFuZGxlUHJlc3RzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGxhY2Vob2xkZXI9XCJSZWNoZXJjaGVyXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgaWQ9XCJ2b2lzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwidGFibGUgdGFibGUtaG92ZXIgdGFibGUtc3RyaXBlZCBkYXNoYm9hcmQtdGFzay1pbmZvcyBkaXNwbGF5IG5vd3JhcGUgbS10LS0xMFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj4jPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtbGVmdFwiIGNvbFNwYW49XCIyXCI+UFJFU1RBVEFJUkU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5UT1RBTCBUVEM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5QRVLDh1VFIFRUQzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiIHN0eWxlPXt7YmFja2dyb3VuZENvbG9yOiBcIiMzNGNmYWNcIn19PlNPTERFIFRUQ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1sZWZ0XCIgY29sU3Bhbj1cIjJcIj5GT05DVElPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPkNPTlRBQ1RTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+RU1BSUw8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5BRFJFU1NFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJQcmVzdGF9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIyXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e3B0dGN9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17cHJlY30vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCI+PE51bWJlckZvcm1hdCBudW1iPXtwcmVzfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIyXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgPC9kaXY+XG4gICAgPC8+KTtcblxufVxuXG50cnkge1xuICAgIGNvbnN0IHJvb3QgPSBjcmVhdGVSb290KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZXRwcmVzdGF0YWlyZXMnKSk7XG4gICAgcm9vdC5yZW5kZXIoPExpc3RlUHJlc3RhdGFpcmVzLz4pO1xufSBjYXRjaCAoZSkge1xufVxuIiwibGV0IE51bWJlckZvcm1hdDtcbmV4cG9ydCBkZWZhdWx0IE51bWJlckZvcm1hdCA9IChwcm9wcykgPT4ge1xuXG4gICAgY29uc3QgZm9ybWF0TnVtYmVyID0gKG51bSwgcHJlY2lzaW9uLCBzZXBhcmF0b3IpID0+IHtcbiAgICAgICAgbGV0IHBhcnRzO1xuICAgICAgICBudW0gPSBOdW1iZXIobnVtKTtcbiAgICAgICAgbnVtID0gKHR5cGVvZiBwcmVjaXNpb24gIT09ICd1bmRlZmluZWQnID8gbnVtLnRvRml4ZWQocHJlY2lzaW9uKSA6IG51bSkudG9TdHJpbmcoKTtcbiAgICAgICAgcGFydHMgPSBudW0uc3BsaXQoJy4nKTtcbiAgICAgICAgcGFydHNbMF0gPSBwYXJ0c1swXS50b1N0cmluZygpLnJlcGxhY2UoLyhcXGQpKD89KFxcZHszfSkrKD8hXFxkKSkvZywgJyQxJyArIChzZXBhcmF0b3IgfHwgJywnKSk7XG4gICAgICAgIHJldHVybiBwYXJ0cy5qb2luKCcsJyk7XG4gICAgfVxuXG4gICAgcmV0dXJuIChmb3JtYXROdW1iZXIocHJvcHMubnVtYiwyLCAnICcpKTtcblxufTtcblxuIiwiLyoqXG4gKiBqcXVlcnkuc2ltcGxlUGFnaW5hdGlvbi5qc1xuICogQHZlcnNpb246IHYxLjAuMFxuICogQGF1dGhvcjogU2ViYXN0aWFuIE1hcnVsYW5kYSBodHRwOi8vbWFydWxhbmRhLm1lXG4gKiBAc2VlOiBodHRwczovL2dpdGh1Yi5jb20vc21hcnVsYW5kYS9qcXVlcnkuc2ltcGxlUGFnaW5hdGlvblxuICovXG5cbihmdW5jdGlvbigkKSB7XG5cblx0JC5mbi5zaW1wbGVQYWdpbmF0aW9uID0gZnVuY3Rpb24ob3B0aW9ucykge1xuXG5cdFx0Y29uc3QgZGVmYXVsdHMgPSB7XG5cdFx0XHRwZXJQYWdlOiAyMCxcblx0XHRcdGNvbnRhaW5lckNsYXNzOiAnJyxcblx0XHRcdHByZXZpb3VzQnV0dG9uQ2xhc3M6ICcnLFxuXHRcdFx0bmV4dEJ1dHRvbkNsYXNzOiAnJyxcblx0XHRcdHByZXZpb3VzQnV0dG9uVGV4dDogJzwnLFxuXHRcdFx0bmV4dEJ1dHRvblRleHQ6ICc+Jyxcblx0XHRcdGN1cnJlbnRQYWdlOiAxXG5cdFx0fTtcblxuXHRcdGNvbnN0IHNldHRpbmdzID0gJC5leHRlbmQoe30sIGRlZmF1bHRzLCBvcHRpb25zKTtcblxuXHRcdHJldHVybiB0aGlzLmVhY2goZnVuY3Rpb24oKSB7XG5cdFx0XHRjb25zdCAkcm93cyA9ICQob3B0aW9ucywgdGhpcyk7XG5cdFx0XHRjb25zdCBwYWdlcyA9IE1hdGguY2VpbCgkcm93cy5sZW5ndGggLyBzZXR0aW5ncy5wZXJQYWdlKTtcblxuXHRcdFx0Y29uc3QgY29udGFpbmVyID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XG5cdFx0XHRjb25zdCBiUHJldmlvdXMgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdidXR0b24nKTtcblx0XHRcdGNvbnN0IGJOZXh0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnYnV0dG9uJyk7XG5cdFx0XHRjb25zdCBvZiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NwYW4nKTtcblxuXG5cdFx0XHRiUHJldmlvdXMuaW5uZXJIVE1MID0gc2V0dGluZ3MucHJldmlvdXNCdXR0b25UZXh0O1xuXHRcdFx0Yk5leHQuaW5uZXJIVE1MID0gc2V0dGluZ3MubmV4dEJ1dHRvblRleHQ7XG5cblx0XHRcdGNvbnRhaW5lci5jbGFzc05hbWUgPSBzZXR0aW5ncy5jb250YWluZXJDbGFzcztcblx0XHRcdGJQcmV2aW91cy5jbGFzc05hbWUgPSBzZXR0aW5ncy5wcmV2aW91c0J1dHRvbkNsYXNzO1xuXHRcdFx0Yk5leHQuY2xhc3NOYW1lID0gc2V0dGluZ3MubmV4dEJ1dHRvbkNsYXNzO1xuXG5cdFx0XHRiUHJldmlvdXMuc3R5bGUubWFyZ2luUmlnaHQgPSAnOHB4Jztcblx0XHRcdGJQcmV2aW91cy5jbGFzc0xpc3QuYWRkKCdidG4nKTtcblx0XHRcdGJQcmV2aW91cy5jbGFzc0xpc3QuYWRkKCdiZy1ibHVlJyk7XG5cdFx0XHRiUHJldmlvdXMuY2xhc3NMaXN0LmFkZCgnYm9sbzcwMCcpO1xuXHRcdFx0Yk5leHQuc3R5bGUubWFyZ2luTGVmdCA9ICc4cHgnO1xuXHRcdFx0Yk5leHQuY2xhc3NMaXN0LmFkZCgnYnRuJyk7XG5cdFx0XHRiTmV4dC5jbGFzc0xpc3QuYWRkKCdiZy1ibHVlJyk7XG5cdFx0XHRiTmV4dC5jbGFzc0xpc3QuYWRkKCdib2xvNzAwJyk7XG5cdFx0XHRjb250YWluZXIuc3R5bGUudGV4dEFsaWduID0gXCJyaWdodFwiO1xuXHRcdFx0Y29udGFpbmVyLnN0eWxlLm1hcmdpbkJvdHRvbSA9ICcyMHB4JztcblxuXHRcdFx0Y29udGFpbmVyLmFwcGVuZENoaWxkKGJQcmV2aW91cyk7XG5cdFx0XHRjb250YWluZXIuYXBwZW5kQ2hpbGQob2YpO1xuXHRcdFx0Y29udGFpbmVyLmFwcGVuZENoaWxkKGJOZXh0KTtcblxuXHRcdFx0JCh0aGlzKS5hZnRlcihjb250YWluZXIpO1xuXG5cdFx0XHR1cGRhdGUoKTtcblxuXHRcdFx0JChiTmV4dCkuY2xpY2soZnVuY3Rpb24oKSB7XG5cdFx0XHRcdGlmIChzZXR0aW5ncy5jdXJyZW50UGFnZSArIDEgPiBwYWdlcykge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlID0gcGFnZXM7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UrKztcblx0XHRcdFx0fVxuXHRcdFx0XHR1cGRhdGUoKTtcblx0XHRcdH0pO1xuXG5cdFx0XHQkKGJQcmV2aW91cykuY2xpY2soZnVuY3Rpb24oKSB7XG5cdFx0XHRcdGlmIChzZXR0aW5ncy5jdXJyZW50UGFnZSAtIDEgPCAxKSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UgPSAxO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlLS07XG5cdFx0XHRcdH1cblx0XHRcdFx0dXBkYXRlKCk7XG5cdFx0XHR9KTtcblxuXHRcdFx0ZnVuY3Rpb24gdXBkYXRlKCkge1xuXHRcdFx0XHRjb25zdCBmcm9tID0gKChzZXR0aW5ncy5jdXJyZW50UGFnZSAtIDEpICogc2V0dGluZ3MucGVyUGFnZSkgKyAxO1xuXHRcdFx0XHRsZXQgdG8gPSBmcm9tICsgc2V0dGluZ3MucGVyUGFnZSAtIDE7XG5cblx0XHRcdFx0aWYgKHRvID4gJHJvd3MubGVuZ3RoKSB7XG5cdFx0XHRcdFx0dG8gPSAkcm93cy5sZW5ndGg7XG5cdFx0XHRcdH1cblxuXHRcdFx0XHQkcm93cy5oaWRlKCk7XG5cdFx0XHRcdCRyb3dzLnNsaWNlKChmcm9tLTEpLCB0bykuc2hvdygpO1xuXG5cdFx0XHRcdG9mLmlubmVySFRNTCA9IGZyb20gKyAnIMOgICcgKyB0byArICcgc3VyICcgKyAkcm93cy5sZW5ndGggKyAnIGxpZ25lcyc7XG5cblx0XHRcdFx0aWYgKCRyb3dzLmxlbmd0aCA8PSBzZXR0aW5ncy5wZXJQYWdlKSB7XG5cdFx0XHRcdFx0JChjb250YWluZXIpLmhpZGUoKTtcblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHQkKGNvbnRhaW5lcikuc2hvdygpO1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSk7XG5cblx0fVxuXG59KGpRdWVyeSkpO1xuIiwidmFyIG1hcCA9IHtcblx0XCIuL2FmXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hZi5qc1wiLFxuXHRcIi4vYWYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FmLmpzXCIsXG5cdFwiLi9hclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIuanNcIixcblx0XCIuL2FyLWR6XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1kei5qc1wiLFxuXHRcIi4vYXItZHouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWR6LmpzXCIsXG5cdFwiLi9hci1rd1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIta3cuanNcIixcblx0XCIuL2FyLWt3LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1rdy5qc1wiLFxuXHRcIi4vYXItbHlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWx5LmpzXCIsXG5cdFwiLi9hci1seS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbHkuanNcIixcblx0XCIuL2FyLW1hXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1tYS5qc1wiLFxuXHRcIi4vYXItbWEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLW1hLmpzXCIsXG5cdFwiLi9hci1wc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItcHMuanNcIixcblx0XCIuL2FyLXBzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1wcy5qc1wiLFxuXHRcIi4vYXItc2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXNhLmpzXCIsXG5cdFwiLi9hci1zYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItc2EuanNcIixcblx0XCIuL2FyLXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci10bi5qc1wiLFxuXHRcIi4vYXItdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXRuLmpzXCIsXG5cdFwiLi9hci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIuanNcIixcblx0XCIuL2F6XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hei5qc1wiLFxuXHRcIi4vYXouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2F6LmpzXCIsXG5cdFwiLi9iZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmUuanNcIixcblx0XCIuL2JlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZS5qc1wiLFxuXHRcIi4vYmdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JnLmpzXCIsXG5cdFwiLi9iZy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmcuanNcIixcblx0XCIuL2JtXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibS5qc1wiLFxuXHRcIi4vYm0uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JtLmpzXCIsXG5cdFwiLi9iblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4uanNcIixcblx0XCIuL2JuLWJkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi1iZC5qc1wiLFxuXHRcIi4vYm4tYmQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLWJkLmpzXCIsXG5cdFwiLi9ibi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4uanNcIixcblx0XCIuL2JvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iby5qc1wiLFxuXHRcIi4vYm8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JvLmpzXCIsXG5cdFwiLi9iclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnIuanNcIixcblx0XCIuL2JyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ici5qc1wiLFxuXHRcIi4vYnNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JzLmpzXCIsXG5cdFwiLi9icy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnMuanNcIixcblx0XCIuL2NhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jYS5qc1wiLFxuXHRcIi4vY2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NhLmpzXCIsXG5cdFwiLi9jc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3MuanNcIixcblx0XCIuL2NzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jcy5qc1wiLFxuXHRcIi4vY3ZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N2LmpzXCIsXG5cdFwiLi9jdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3YuanNcIixcblx0XCIuL2N5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jeS5qc1wiLFxuXHRcIi4vY3kuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N5LmpzXCIsXG5cdFwiLi9kYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGEuanNcIixcblx0XCIuL2RhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kYS5qc1wiLFxuXHRcIi4vZGVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLmpzXCIsXG5cdFwiLi9kZS1hdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtYXQuanNcIixcblx0XCIuL2RlLWF0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1hdC5qc1wiLFxuXHRcIi4vZGUtY2hcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWNoLmpzXCIsXG5cdFwiLi9kZS1jaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtY2guanNcIixcblx0XCIuL2RlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS5qc1wiLFxuXHRcIi4vZHZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2R2LmpzXCIsXG5cdFwiLi9kdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZHYuanNcIixcblx0XCIuL2VsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbC5qc1wiLFxuXHRcIi4vZWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VsLmpzXCIsXG5cdFwiLi9lbi1hdVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tYXUuanNcIixcblx0XCIuL2VuLWF1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1hdS5qc1wiLFxuXHRcIi4vZW4tY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWNhLmpzXCIsXG5cdFwiLi9lbi1jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tY2EuanNcIixcblx0XCIuL2VuLWdiXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1nYi5qc1wiLFxuXHRcIi4vZW4tZ2IuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWdiLmpzXCIsXG5cdFwiLi9lbi1pZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWUuanNcIixcblx0XCIuL2VuLWllLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pZS5qc1wiLFxuXHRcIi4vZW4taWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWlsLmpzXCIsXG5cdFwiLi9lbi1pbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWwuanNcIixcblx0XCIuL2VuLWluXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbi5qc1wiLFxuXHRcIi4vZW4taW4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWluLmpzXCIsXG5cdFwiLi9lbi1uelwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tbnouanNcIixcblx0XCIuL2VuLW56LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1uei5qc1wiLFxuXHRcIi4vZW4tc2dcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLXNnLmpzXCIsXG5cdFwiLi9lbi1zZy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tc2cuanNcIixcblx0XCIuL2VvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lby5qc1wiLFxuXHRcIi4vZW8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VvLmpzXCIsXG5cdFwiLi9lc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMuanNcIixcblx0XCIuL2VzLWRvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1kby5qc1wiLFxuXHRcIi4vZXMtZG8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLWRvLmpzXCIsXG5cdFwiLi9lcy1teFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtbXguanNcIixcblx0XCIuL2VzLW14LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1teC5qc1wiLFxuXHRcIi4vZXMtdXNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLXVzLmpzXCIsXG5cdFwiLi9lcy11cy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtdXMuanNcIixcblx0XCIuL2VzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy5qc1wiLFxuXHRcIi4vZXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V0LmpzXCIsXG5cdFwiLi9ldC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXQuanNcIixcblx0XCIuL2V1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldS5qc1wiLFxuXHRcIi4vZXUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V1LmpzXCIsXG5cdFwiLi9mYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmEuanNcIixcblx0XCIuL2ZhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mYS5qc1wiLFxuXHRcIi4vZmlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpLmpzXCIsXG5cdFwiLi9maS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmkuanNcIixcblx0XCIuL2ZpbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmlsLmpzXCIsXG5cdFwiLi9maWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpbC5qc1wiLFxuXHRcIi4vZm9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZvLmpzXCIsXG5cdFwiLi9mby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZm8uanNcIixcblx0XCIuL2ZyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci5qc1wiLFxuXHRcIi4vZnItY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNhLmpzXCIsXG5cdFwiLi9mci1jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2EuanNcIixcblx0XCIuL2ZyLWNoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jaC5qc1wiLFxuXHRcIi4vZnItY2guanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNoLmpzXCIsXG5cdFwiLi9mci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnIuanNcIixcblx0XCIuL2Z5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9meS5qc1wiLFxuXHRcIi4vZnkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2Z5LmpzXCIsXG5cdFwiLi9nYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2EuanNcIixcblx0XCIuL2dhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nYS5qc1wiLFxuXHRcIi4vZ2RcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dkLmpzXCIsXG5cdFwiLi9nZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2QuanNcIixcblx0XCIuL2dsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nbC5qc1wiLFxuXHRcIi4vZ2wuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dsLmpzXCIsXG5cdFwiLi9nb20tZGV2YVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWRldmEuanNcIixcblx0XCIuL2dvbS1kZXZhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tZGV2YS5qc1wiLFxuXHRcIi4vZ29tLWxhdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1sYXRuLmpzXCIsXG5cdFwiLi9nb20tbGF0bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWxhdG4uanNcIixcblx0XCIuL2d1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ndS5qc1wiLFxuXHRcIi4vZ3UuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2d1LmpzXCIsXG5cdFwiLi9oZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGUuanNcIixcblx0XCIuL2hlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oZS5qc1wiLFxuXHRcIi4vaGlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hpLmpzXCIsXG5cdFwiLi9oaS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGkuanNcIixcblx0XCIuL2hyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oci5qc1wiLFxuXHRcIi4vaHIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hyLmpzXCIsXG5cdFwiLi9odVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHUuanNcIixcblx0XCIuL2h1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9odS5qc1wiLFxuXHRcIi4vaHktYW1cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h5LWFtLmpzXCIsXG5cdFwiLi9oeS1hbS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHktYW0uanNcIixcblx0XCIuL2lkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pZC5qc1wiLFxuXHRcIi4vaWQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lkLmpzXCIsXG5cdFwiLi9pc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXMuanNcIixcblx0XCIuL2lzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pcy5qc1wiLFxuXHRcIi4vaXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LmpzXCIsXG5cdFwiLi9pdC1jaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQtY2guanNcIixcblx0XCIuL2l0LWNoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC1jaC5qc1wiLFxuXHRcIi4vaXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LmpzXCIsXG5cdFwiLi9qYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvamEuanNcIixcblx0XCIuL2phLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qYS5qc1wiLFxuXHRcIi4vanZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2p2LmpzXCIsXG5cdFwiLi9qdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvanYuanNcIixcblx0XCIuL2thXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rYS5qc1wiLFxuXHRcIi4va2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2thLmpzXCIsXG5cdFwiLi9ra1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2suanNcIixcblx0XCIuL2trLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ray5qc1wiLFxuXHRcIi4va21cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ttLmpzXCIsXG5cdFwiLi9rbS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva20uanNcIixcblx0XCIuL2tuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbi5qc1wiLFxuXHRcIi4va24uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tuLmpzXCIsXG5cdFwiLi9rb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva28uanNcIixcblx0XCIuL2tvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rby5qc1wiLFxuXHRcIi4va3VcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LmpzXCIsXG5cdFwiLi9rdS1rbXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LWttci5qc1wiLFxuXHRcIi4va3Uta21yLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS1rbXIuanNcIixcblx0XCIuL2t1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS5qc1wiLFxuXHRcIi4va3lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t5LmpzXCIsXG5cdFwiLi9reS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3kuanNcIixcblx0XCIuL2xiXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sYi5qc1wiLFxuXHRcIi4vbGIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xiLmpzXCIsXG5cdFwiLi9sb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbG8uanNcIixcblx0XCIuL2xvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sby5qc1wiLFxuXHRcIi4vbHRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x0LmpzXCIsXG5cdFwiLi9sdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHQuanNcIixcblx0XCIuL2x2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdi5qc1wiLFxuXHRcIi4vbHYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x2LmpzXCIsXG5cdFwiLi9tZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWUuanNcIixcblx0XCIuL21lLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tZS5qc1wiLFxuXHRcIi4vbWlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21pLmpzXCIsXG5cdFwiLi9taS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWkuanNcIixcblx0XCIuL21rXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tay5qc1wiLFxuXHRcIi4vbWsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21rLmpzXCIsXG5cdFwiLi9tbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWwuanNcIixcblx0XCIuL21sLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbC5qc1wiLFxuXHRcIi4vbW5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21uLmpzXCIsXG5cdFwiLi9tbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbW4uanNcIixcblx0XCIuL21yXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tci5qc1wiLFxuXHRcIi4vbXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21yLmpzXCIsXG5cdFwiLi9tc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMuanNcIixcblx0XCIuL21zLW15XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy1teS5qc1wiLFxuXHRcIi4vbXMtbXkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLW15LmpzXCIsXG5cdFwiLi9tcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMuanNcIixcblx0XCIuL210XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tdC5qc1wiLFxuXHRcIi4vbXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL210LmpzXCIsXG5cdFwiLi9teVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXkuanNcIixcblx0XCIuL215LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9teS5qc1wiLFxuXHRcIi4vbmJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25iLmpzXCIsXG5cdFwiLi9uYi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmIuanNcIixcblx0XCIuL25lXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uZS5qc1wiLFxuXHRcIi4vbmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25lLmpzXCIsXG5cdFwiLi9ubFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwuanNcIixcblx0XCIuL25sLWJlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC1iZS5qc1wiLFxuXHRcIi4vbmwtYmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLWJlLmpzXCIsXG5cdFwiLi9ubC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwuanNcIixcblx0XCIuL25uXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubi5qc1wiLFxuXHRcIi4vbm4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25uLmpzXCIsXG5cdFwiLi9vYy1sbmNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL29jLWxuYy5qc1wiLFxuXHRcIi4vb2MtbG5jLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9vYy1sbmMuanNcIixcblx0XCIuL3BhLWluXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wYS1pbi5qc1wiLFxuXHRcIi4vcGEtaW4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BhLWluLmpzXCIsXG5cdFwiLi9wbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGwuanNcIixcblx0XCIuL3BsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wbC5qc1wiLFxuXHRcIi4vcHRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LmpzXCIsXG5cdFwiLi9wdC1iclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQtYnIuanNcIixcblx0XCIuL3B0LWJyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC1ici5qc1wiLFxuXHRcIi4vcHQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LmpzXCIsXG5cdFwiLi9yb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcm8uanNcIixcblx0XCIuL3JvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9yby5qc1wiLFxuXHRcIi4vcnVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3J1LmpzXCIsXG5cdFwiLi9ydS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcnUuanNcIixcblx0XCIuL3NkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZC5qc1wiLFxuXHRcIi4vc2QuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NkLmpzXCIsXG5cdFwiLi9zZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2UuanNcIixcblx0XCIuL3NlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZS5qc1wiLFxuXHRcIi4vc2lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NpLmpzXCIsXG5cdFwiLi9zaS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2kuanNcIixcblx0XCIuL3NrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zay5qc1wiLFxuXHRcIi4vc2suanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NrLmpzXCIsXG5cdFwiLi9zbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2wuanNcIixcblx0XCIuL3NsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zbC5qc1wiLFxuXHRcIi4vc3FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NxLmpzXCIsXG5cdFwiLi9zcS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3EuanNcIixcblx0XCIuL3NyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci5qc1wiLFxuXHRcIi4vc3ItY3lybFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3ItY3lybC5qc1wiLFxuXHRcIi4vc3ItY3lybC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3ItY3lybC5qc1wiLFxuXHRcIi4vc3IuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLmpzXCIsXG5cdFwiLi9zc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3MuanNcIixcblx0XCIuL3NzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcy5qc1wiLFxuXHRcIi4vc3ZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N2LmpzXCIsXG5cdFwiLi9zdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3YuanNcIixcblx0XCIuL3N3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdy5qc1wiLFxuXHRcIi4vc3cuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N3LmpzXCIsXG5cdFwiLi90YVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGEuanNcIixcblx0XCIuL3RhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90YS5qc1wiLFxuXHRcIi4vdGVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RlLmpzXCIsXG5cdFwiLi90ZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGUuanNcIixcblx0XCIuL3RldFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGV0LmpzXCIsXG5cdFwiLi90ZXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RldC5qc1wiLFxuXHRcIi4vdGdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RnLmpzXCIsXG5cdFwiLi90Zy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGcuanNcIixcblx0XCIuL3RoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90aC5qc1wiLFxuXHRcIi4vdGguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RoLmpzXCIsXG5cdFwiLi90a1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGsuanNcIixcblx0XCIuL3RrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ay5qc1wiLFxuXHRcIi4vdGwtcGhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsLXBoLmpzXCIsXG5cdFwiLi90bC1waC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGwtcGguanNcIixcblx0XCIuL3RsaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGxoLmpzXCIsXG5cdFwiLi90bGguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsaC5qc1wiLFxuXHRcIi4vdHJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RyLmpzXCIsXG5cdFwiLi90ci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHIuanNcIixcblx0XCIuL3R6bFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHpsLmpzXCIsXG5cdFwiLi90emwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bC5qc1wiLFxuXHRcIi4vdHptXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0uanNcIixcblx0XCIuL3R6bS1sYXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0tbGF0bi5qc1wiLFxuXHRcIi4vdHptLWxhdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS1sYXRuLmpzXCIsXG5cdFwiLi90em0uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS5qc1wiLFxuXHRcIi4vdWctY25cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VnLWNuLmpzXCIsXG5cdFwiLi91Zy1jbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWctY24uanNcIixcblx0XCIuL3VrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ay5qc1wiLFxuXHRcIi4vdWsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VrLmpzXCIsXG5cdFwiLi91clwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXIuanNcIixcblx0XCIuL3VyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ci5qc1wiLFxuXHRcIi4vdXpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LmpzXCIsXG5cdFwiLi91ei1sYXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei1sYXRuLmpzXCIsXG5cdFwiLi91ei1sYXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei1sYXRuLmpzXCIsXG5cdFwiLi91ei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXouanNcIixcblx0XCIuL3ZpXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS92aS5qc1wiLFxuXHRcIi4vdmkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3ZpLmpzXCIsXG5cdFwiLi94LXBzZXVkb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveC1wc2V1ZG8uanNcIixcblx0XCIuL3gtcHNldWRvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS94LXBzZXVkby5qc1wiLFxuXHRcIi4veW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3lvLmpzXCIsXG5cdFwiLi95by5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveW8uanNcIixcblx0XCIuL3poLWNuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1jbi5qc1wiLFxuXHRcIi4vemgtY24uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWNuLmpzXCIsXG5cdFwiLi96aC1oa1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtaGsuanNcIixcblx0XCIuL3poLWhrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1oay5qc1wiLFxuXHRcIi4vemgtbW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLW1vLmpzXCIsXG5cdFwiLi96aC1tby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtbW8uanNcIixcblx0XCIuL3poLXR3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC10dy5qc1wiLFxuXHRcIi4vemgtdHcuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLXR3LmpzXCJcbn07XG5cblxuZnVuY3Rpb24gd2VicGFja0NvbnRleHQocmVxKSB7XG5cdHZhciBpZCA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpO1xuXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhpZCk7XG59XG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKSB7XG5cdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8obWFwLCByZXEpKSB7XG5cdFx0dmFyIGUgPSBuZXcgRXJyb3IoXCJDYW5ub3QgZmluZCBtb2R1bGUgJ1wiICsgcmVxICsgXCInXCIpO1xuXHRcdGUuY29kZSA9ICdNT0RVTEVfTk9UX0ZPVU5EJztcblx0XHR0aHJvdyBlO1xuXHR9XG5cdHJldHVybiBtYXBbcmVxXTtcbn1cbndlYnBhY2tDb250ZXh0LmtleXMgPSBmdW5jdGlvbiB3ZWJwYWNrQ29udGV4dEtleXMoKSB7XG5cdHJldHVybiBPYmplY3Qua2V5cyhtYXApO1xufTtcbndlYnBhY2tDb250ZXh0LnJlc29sdmUgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmU7XG5tb2R1bGUuZXhwb3J0cyA9IHdlYnBhY2tDb250ZXh0O1xud2VicGFja0NvbnRleHQuaWQgPSBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUgc3luYyByZWN1cnNpdmUgXlxcXFwuXFxcXC8uKiRcIjsiXSwibmFtZXMiOlsiUmVhY3QiLCJ1c2VFZmZlY3QiLCJ1c2VTdGF0ZSIsImNyZWF0ZVJvb3QiLCJheGlvcyIsIlJlYWN0SFRNTFRhYmxlVG9FeGNlbCIsIk51bWJlckZvcm1hdCIsIk1vbWVudCIsIiQiLCJGaWxsZXIiLCJMaXN0ZVByZXN0YXRhaXJlcyIsInB1cnNlciIsInZhbCIsInByZXN0YXMiLCJzZXRQcmVzdGFzIiwiY2xpZW50cyIsInNldENsaWVudHMiLCJmZXRjaFByZXN0YSIsImRkZSIsIkpTT04iLCJwYXJzZSIsImR5YyIsInNob3dCb25QcmVzdGEiLCJpZCIsImhhc0NsYXNzIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsInNob3dDaGFudGllcnMiLCJmb3JtYXROdW1iZXIiLCJudW0iLCJwcmVjaXNpb24iLCJzZXBhcmF0b3IiLCJwYXJ0cyIsIk51bWJlciIsInRvRml4ZWQiLCJ0b1N0cmluZyIsInNwbGl0IiwicmVwbGFjZSIsImpvaW4iLCJwdHRjIiwicHJlYyIsInByZXMiLCJwcmVzY291bnQiLCJyZW5kZXJQcmVzdGEiLCJtYXAiLCJwcmVzdGEiLCJib25zIiwidHRjIiwicmVjIiwicmVzIiwiYmJjb3VudCIsInJlbmRlckNoYW50aWVycyIsImNsaWVudCIsImNoYW50aWVycyIsImxlbmd0aCIsImNoYW4iLCJjYSIsImNoYW5yZWN1IiwiY2hhbnJlc3RlIiwiY2hhbnR0YyIsImJvbiIsImNvcmJlaWxsZSIsInBhcnNlSW50IiwiY2hhbnRpZXIiLCJyZW5kZXJCb25zIiwiZXRhdCIsInRvdGFsdHRjIiwicmVjdSIsInJlc3RlIiwiY2Fpc3NlcyIsInJlbmRlckNhaXNzZXMiLCJjYWlzc2UiLCJkYXRlIiwiZGV2YWxpZGVDYWlzc2UiLCJtYXJnaW5SaWdodCIsInZhbGlkZUNhaXNzZSIsImRlbGV0ZUNhaXNzZSIsInNoYXNoYSIsIm51bWNhaXNzZSIsIm1vbnRhbnQiLCJfX2h0bWwiLCJjYWlzc2VyZWZlcmVuY2UiLCJiYWNrZ3JvdW5kQ29sb3IiLCJkZXZhbGlkZUJvbiIsInZhbGlkZUJvbiIsImRlbEJvbiIsIm51bWJvbiIsImRldmlzIiwiZGV2YWxpZGVEZXZpcyIsInZhbGlkZURldmlzIiwiaWRkZXZpcyIsImJvbnJlZmVyZW5jZSIsIm5vbWNsaWVudCIsInRvVXBwZXJDYXNlIiwibm9tY2hhbnRpZXIiLCJmb3Vybmlzc2V1ciIsInRpdHJlIiwibW9iaWxlIiwibWFpbCIsImFkcmVzc2UiLCJtb2RhbCIsInNlbGVjdDIiLCJzaW1wbGVQYWdpbmF0aW9uIiwib2ZmIiwib24iLCJlYWNoIiwibWV0aG9kIiwidXJsIiwidGhlbiIsInJlc3BvbnNlIiwibG9jYXRpb24iLCJyZWxvYWQiLCJlcnJvciIsIndpbmRvdyIsImhyZWYiLCJjaGFuZ2UiLCJjaGVja2VkIiwiZXZlbnQiLCJwcmV2ZW50RGVmYXVsdCIsImNsb3Nlc3QiLCJ2YWxpZCIsImhpZGUiLCJjc3MiLCJhamF4IiwidHlwZSIsImRhdGEiLCJzdHJpbmdpZnkiLCJzZXJpYWxpemVPYmplY3QiLCJjb250ZW50VHlwZSIsImRhdGFUeXBlIiwic3VjY2VzcyIsInJlc3BkYXRhIiwidGV4dFN0YXR1cyIsImpxWEhSIiwieGhyIiwicmVzcCIsInRleHQiLCJDS0VESVRPUiIsImluc3RhbmNlcyIsImdldERhdGEiLCJ2YWx1ZSIsImZpbHRlciIsInRvTG93ZXJDYXNlIiwicmVzdWx0cyIsIml0ZW0iLCJpbmRleE9mIiwiY29uc29sZSIsImxvZyIsImVtcHR5IiwidW5kZWZpbmVkIiwibmV3RGF0YSIsImFhIiwiRGF0ZSIsInRvTG9jYWxlRGF0ZVN0cmluZyIsImFwcGVuZCIsInBhZGRpbmdMZWZ0IiwiZm9udFNpemUiLCJmb250V2VpZ2h0Iiwib3ZlcmZsb3ciLCJwYWRkaW5nVG9wIiwid2lkdGgiLCJyb290IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInJlbmRlciIsImUiLCJwcm9wcyIsIm51bWIiLCJmbiIsIm9wdGlvbnMiLCJkZWZhdWx0cyIsInBlclBhZ2UiLCJjb250YWluZXJDbGFzcyIsInByZXZpb3VzQnV0dG9uQ2xhc3MiLCJuZXh0QnV0dG9uQ2xhc3MiLCJwcmV2aW91c0J1dHRvblRleHQiLCJuZXh0QnV0dG9uVGV4dCIsImN1cnJlbnRQYWdlIiwic2V0dGluZ3MiLCJleHRlbmQiLCIkcm93cyIsInBhZ2VzIiwiTWF0aCIsImNlaWwiLCJjb250YWluZXIiLCJjcmVhdGVFbGVtZW50IiwiYlByZXZpb3VzIiwiYk5leHQiLCJvZiIsImlubmVySFRNTCIsImNsYXNzTmFtZSIsInN0eWxlIiwiY2xhc3NMaXN0IiwiYWRkIiwibWFyZ2luTGVmdCIsInRleHRBbGlnbiIsIm1hcmdpbkJvdHRvbSIsImFwcGVuZENoaWxkIiwiYWZ0ZXIiLCJ1cGRhdGUiLCJjbGljayIsImZyb20iLCJ0byIsInNsaWNlIiwic2hvdyIsImpRdWVyeSJdLCJzb3VyY2VSb290IjoiIn0=