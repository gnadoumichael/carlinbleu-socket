(self["webpackChunk"] = self["webpackChunk"] || []).push([["apfactures"],{

/***/ "./assets/apfactures.js":
/*!******************************!*\
  !*** ./assets/apfactures.js ***!
  \******************************/
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
/* harmony import */ var _components_facture_Facture__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./components/facture/Facture */ "./assets/components/facture/Facture.js");















/***/ }),

/***/ "./assets/components/facture/Facture.js":
/*!**********************************************!*\
  !*** ./assets/components/facture/Facture.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.sort.js */ "./node_modules/core-js/modules/es.array.sort.js");
/* harmony import */ var core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_number_is_integer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.number.is-integer.js */ "./node_modules/core-js/modules/es.number.is-integer.js");
/* harmony import */ var core_js_modules_es_number_is_integer_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_is_integer_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.parse-float.js */ "./node_modules/core-js/modules/es.parse-float.js");
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.symbol.async-iterator.js */ "./node_modules/core-js/modules/es.symbol.async-iterator.js");
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.symbol.to-string-tag.js */ "./node_modules/core-js/modules/es.symbol.to-string-tag.js");
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/es.json.to-string-tag.js */ "./node_modules/core-js/modules/es.json.to-string-tag.js");
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/es.math.to-string-tag.js */ "./node_modules/core-js/modules/es.math.to-string-tag.js");
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_28__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_29___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_29__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_30___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_30__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_31___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_31__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_32___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_32__);
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! core-js/modules/es.array.reverse.js */ "./node_modules/core-js/modules/es.array.reverse.js");
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_33___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_33__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_34__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_34___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_34__);
/* harmony import */ var react_to_print__WEBPACK_IMPORTED_MODULE_35__ = __webpack_require__(/*! react-to-print */ "./node_modules/react-to-print/lib/index.js");
/* harmony import */ var react_to_print__WEBPACK_IMPORTED_MODULE_35___default = /*#__PURE__*/__webpack_require__.n(react_to_print__WEBPACK_IMPORTED_MODULE_35__);
/* harmony import */ var _PrintFacture__WEBPACK_IMPORTED_MODULE_36__ = __webpack_require__(/*! ./PrintFacture */ "./assets/components/facture/PrintFacture.js");
/* harmony import */ var react_device_detect__WEBPACK_IMPORTED_MODULE_37__ = __webpack_require__(/*! react-device-detect */ "./node_modules/react-device-detect/dist/lib.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_38__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_38___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_38__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_39__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_40__ = __webpack_require__(/*! react-html-table-to-excel */ "./node_modules/react-html-table-to-excel/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_42__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var _fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_41__ = __webpack_require__(/*! ../../fonctions/NumberFormat */ "./assets/fonctions/NumberFormat.js");
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









var Facture = function Facture() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)(''),
    _useState2 = _slicedToArray(_useState, 2),
    client = _useState2[0],
    setClient = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)(''),
    _useState4 = _slicedToArray(_useState3, 2),
    chantier = _useState4[0],
    setChantier = _useState4[1];
  var _useState5 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)(''),
    _useState6 = _slicedToArray(_useState5, 2),
    devis = _useState6[0],
    setDevis = _useState6[1];
  var _useState7 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)(''),
    _useState8 = _slicedToArray(_useState7, 2),
    facture = _useState8[0],
    setFacture = _useState8[1];
  var _useState9 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)(''),
    _useState10 = _slicedToArray(_useState9, 2),
    decompte = _useState10[0],
    setDecompte = _useState10[1];
  var _useState11 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)([]),
    _useState12 = _slicedToArray(_useState11, 2),
    lignes = _useState12[0],
    setLignes = _useState12[1];
  var _useState13 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)([]),
    _useState14 = _slicedToArray(_useState13, 2),
    groupes = _useState14[0],
    setGroupes = _useState14[1];
  var _useState15 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)([]),
    _useState16 = _slicedToArray(_useState15, 2),
    ddecomptes = _useState16[0],
    setDDecomptes = _useState16[1];
  var _useState17 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)([]),
    _useState18 = _slicedToArray(_useState17, 2),
    totalacomptes = _useState18[0],
    setTotalacomptes = _useState18[1];
  var _useState19 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)([]),
    _useState20 = _slicedToArray(_useState19, 2),
    forme = _useState20[0],
    setforme = _useState20[1];
  var totaldecomptes = 0;
  var totalretenue = 0;
  __webpack_require__(/*! table-to-excel */ "./node_modules/table-to-excel/table-to-excel.js");
  var componentRef = (0,react__WEBPACK_IMPORTED_MODULE_34__.useRef)();
  var handlePrint = (0,react_to_print__WEBPACK_IMPORTED_MODULE_35__.useReactToPrint)({
    content: function content() {
      return componentRef.current;
    }
  });
  function ltrim(str) {
    if (!str) return str;
    return str.replace(/^\s+/g, '');
  }
  function pdfFacture(e) {
    e.preventDefault();
    jquery__WEBPACK_IMPORTED_MODULE_38___default()("#prpdf").css("display", "block");
    window.location.href = "/crm/doc/attache/" + facture.id + "/facture/oui";
  }
  jquery__WEBPACK_IMPORTED_MODULE_38___default()('#facselect').on('change', function () {
    var dd = jquery__WEBPACK_IMPORTED_MODULE_38___default()('#facselect option:selected').val();
    if (dd === 'decompte') {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dvo').empty();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.deco').removeClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.devo').addClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dvo').append('* Pas nécessaire');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dco').empty();
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dco').empty();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.devo').removeClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.deco').addClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dco').append('* Pas nécessaire');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dvo').empty();
    }
    if (dd === 'acompte') {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.tvo').removeClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.pvo').removeClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dto').empty();
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.tvo').addClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.pvo').addClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dto').append('* Pas nécessaire');
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_38___default()('#facselectez').on('change', function () {
    var dd = jquery__WEBPACK_IMPORTED_MODULE_38___default()('#facselectez option:selected').val();
    if (dd === 'decompte') {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dvo').empty();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.deco').removeClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.devo').addClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dvo').append('* Pas nécessaire');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dco').empty();
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dco').empty();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.devo').removeClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.deco').addClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dco').append('* Pas nécessaire');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dvo').empty();
    }
    if (dd === 'acompte') {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.tvo').removeClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.pvo').removeClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dto').empty();
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.tvo').addClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.pvo').addClass('disabled');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('.dto').append('* Pas nécessaire');
    }
  });
  var sortlignes = lignes.sort(function (a, b) {
    if (Number.isInteger(parseInt(ltrim(a.reference)))) {
      return parseInt(ltrim(a.reference)) - parseInt(ltrim(b.reference));
    } else {
      if (a.reference > b.reference) return 1;
      if (a.reference < b.reference) return -1;
      return 0;
    }
  });
  var sortgroupes = groupes.sort(function (a, b) {
    if (Number.isInteger(parseInt(ltrim(a.reference)))) {
      return parseInt(ltrim(a.reference)) - parseInt(ltrim(b.reference));
    } else {
      if (a.reference > b.reference) return 1;
      if (a.reference < b.reference) return -1;
      return 0;
    }
  });
  var fetchFacture = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      var dde, ddec, forme;
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            dde = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#jsonfacture').val());
            ddec = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#jsondecomptes').val());
            forme = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#jsonforme').val());
            setFacture(dde);
            setClient(dde.client);
            setChantier(dde.chantier);
            if (dde.type === "decompte") {
              setDecompte(dde.decompte);
              setDevis(dde.decompte.devis);
              setLignes(dde.lignes);
            }
            if (dde.type === "retenue") {
              setDevis(dde.acompte.devis);
              setLignes(dde.acompte.devis.lignes);
              setGroupes(dde.acompte.devis.groupe);
            }
            if (dde.type === "acompte") {
              setDevis(dde.acompte.devis);
              setLignes(dde.acompte.devis.lignes);
              setGroupes(dde.acompte.devis.groupe);
            }
            if (dde.type === "devis") {
              setDevis(dde.devis);
              setLignes(dde.lignes);
              setGroupes(dde.groupe);
            }
            if (dde.type === "simple") {
              setDevis(dde.devis);
              setLignes(dde.lignes);
              setGroupes(dde.groupe);
            }
            setforme(forme);
            setDDecomptes(ddec);
            totalacomptes = setTotalacomptes(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#totalacomptes').val());
          case 14:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function fetchFacture() {
      return _ref.apply(this, arguments);
    };
  }();
  (0,react__WEBPACK_IMPORTED_MODULE_34__.useEffect)(function () {
    fetchFacture();
  }, []);
  var renderLigne = sortlignes.map(function (lign) {
    if (facture.type !== "decompte") {
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, lign.groupe === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde",
        style: {
          textAlign: "center"
        }
      }, lign.reference), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde",
        style: {
          maxWidth: "500px",
          minWidth: "250px",
          textAlign: "left"
        },
        dangerouslySetInnerHTML: {
          __html: lign.designation
        }
      }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde",
        style: {
          textAlign: "center"
        }
      }, lign.zone), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde",
        style: {
          textAlign: "center"
        }
      }, lign.unite), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde",
        style: {
          textAlign: "center"
        }
      }, lign.quantite), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde nowrape",
        style: {
          textAlign: "right"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_41__["default"], {
        numb: lign.pu
      })), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde",
        style: {
          textAlign: "center"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_41__["default"], {
        numb: lign.remise
      })), devis.aarem === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde",
        style: {
          textAlign: "right"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_41__["default"], {
        numb: lign.pu * lign.quantite
      })), devis.aarem !== 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde",
        style: {
          textAlign: "right"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_41__["default"], {
        numb: lign.pu * lign.quantite * ((100 - lign.remise) / 100)
      }))));
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null);
  });
  var renderGroupe = sortgroupes.map(function (group) {
    var st = 0;
    var renderLigneGroupe = sortlignes.map(function (lign) {
      if (lign.groupe !== null) {
        if (lign.groupe.id === group.id) {
          if (devis.aarem === 'oui') {
            st = st + lign.pu * lign.quantite * ((100 - lign.remise) / 100);
          } else {
            st = st + lign.pu * lign.quantite;
          }
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
            className: "borde",
            style: {
              textAlign: "center"
            }
          }, lign.reference), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
            className: "borde",
            style: {
              maxWidth: "500px",
              minWidth: "250px",
              textAlign: "left"
            },
            dangerouslySetInnerHTML: {
              __html: lign.designation
            }
          }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
            className: "borde",
            style: {
              textAlign: "center"
            }
          }, lign.zone), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
            className: "borde",
            style: {
              textAlign: "center"
            }
          }, lign.unite), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
            className: "borde",
            style: {
              textAlign: "center"
            }
          }, lign.quantite), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
            className: "borde nowrape",
            style: {
              textAlign: "right"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_41__["default"], {
            numb: lign.pu
          })), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
            className: "borde",
            style: {
              textAlign: "center"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_41__["default"], {
            numb: lign.remise
          })), devis.aarem === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
            className: "borde",
            style: {
              textAlign: "right"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_41__["default"], {
            numb: lign.pu * lign.quantite
          })), devis.aarem !== 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
            className: "borde",
            style: {
              textAlign: "right"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_41__["default"], {
            numb: lign.pu * lign.quantite * ((100 - lign.remise) / 100)
          }))));
        }
      }
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null);
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", {
      className: "togo",
      key: group.id.toString()
    }, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
      className: "borde",
      style: {
        textAlign: "center"
      }
    }, group.reference), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
      colSpan: "7",
      className: "borde text-left",
      dangerouslySetInnerHTML: {
        __html: group.groupe
      }
    })), renderLigneGroupe, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", {
      className: "togo",
      key: group.id.toString()
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
      colSpan: "7",
      className: "borde text-right"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "SOUS-TOTAL: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_41__["default"], {
      numb: st
    })))));
  });
  function delFacture(_x2) {
    return _delFacture.apply(this, arguments);
  }
  function _delFacture() {
    _delFacture = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4(resp) {
      var idchan;
      return _regeneratorRuntime().wrap(function _callee4$(_context4) {
        while (1) switch (_context4.prev = _context4.next) {
          case 0:
            if (resp.value !== '') {
              idchan = facture.chantier.id;
              jquery__WEBPACK_IMPORTED_MODULE_38___default()('#ConfirmDelete').modal('show');
              jquery__WEBPACK_IMPORTED_MODULE_38___default()('#accept').on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
                return _regeneratorRuntime().wrap(function _callee3$(_context3) {
                  while (1) switch (_context3.prev = _context3.next) {
                    case 0:
                      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#ConfirmDelete').modal('hide');
                      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#Traitement').modal('show');
                      _context3.next = 4;
                      return (0,axios__WEBPACK_IMPORTED_MODULE_42__["default"])({
                        method: 'DELETE',
                        url: '/crm/facture/del/' + facture.id
                      }).then(function (response) {
                        window.location.href = '/crm/chantier/' + idchan;
                      })["catch"](function (error) {
                        jquery__WEBPACK_IMPORTED_MODULE_38___default()('#Traitement').modal('hide');
                        jquery__WEBPACK_IMPORTED_MODULE_38___default()('#ModalErreur').modal('show');
                      });
                    case 4:
                    case "end":
                      return _context3.stop();
                  }
                }, _callee3);
              })));
            } else {
              window.location.reload();
            }
          case 1:
          case "end":
            return _context4.stop();
        }
      }, _callee4);
    }));
    return _delFacture.apply(this, arguments);
  }
  jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updateFa').on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_38___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updateFa').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#closeFa').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#loadFa').css('display', '');
      var idchantier = jquery__WEBPACK_IMPORTED_MODULE_38___default()('#idchantier').val();
      var idfa = jquery__WEBPACK_IMPORTED_MODULE_38___default()('#idfacture').val();
      jquery__WEBPACK_IMPORTED_MODULE_38___default().ajax({
        type: 'POST',
        url: '/crm/facture/pourcentage/' + idchantier + '/' + idfa,
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#addPourcentageForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          location.reload();
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_38___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updateMon').on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_38___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updateMon').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#closeMon').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#loadMon').css('display', '');
      var idchantier = jquery__WEBPACK_IMPORTED_MODULE_38___default()('#idchantier').val();
      var idfa = jquery__WEBPACK_IMPORTED_MODULE_38___default()('#idfacture').val();
      jquery__WEBPACK_IMPORTED_MODULE_38___default().ajax({
        type: 'POST',
        url: '/crm/facture/montant/' + idchantier + '/' + idfa,
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#addMontantForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          location.reload();
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_38___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_38___default()('#addLigneFacture').on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_38___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#addLigneFacture').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#closeLigne').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#loadLigne').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#editor1').val(CKEDITOR.instances['editor1'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_38___default().ajax({
        type: 'POST',
        url: '/crm/ligne/add/facture/' + facture.id,
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#form3').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          location.reload();
        },
        error: function error(xhr, resp, text) {
          if (xhr.status == '404') {
            jquery__WEBPACK_IMPORTED_MODULE_38___default()('#ModalErreur').modal('show');
          }
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updateLigneFacture').on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_38___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updateLigneFacture').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#closeLigne').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#loadLigne').css('display', '');
    }
    var idligne = jquery__WEBPACK_IMPORTED_MODULE_38___default()('#idligne').val();
    var idfacture = jquery__WEBPACK_IMPORTED_MODULE_38___default()('#idfacture').val();
    var idchantier = jquery__WEBPACK_IMPORTED_MODULE_38___default()('#idchantier').val();
    jquery__WEBPACK_IMPORTED_MODULE_38___default()('#editor1').val(CKEDITOR.instances['editor1'].getData());
    jquery__WEBPACK_IMPORTED_MODULE_38___default().ajax({
      type: 'PUT',
      url: '/crm/ligne/update/facture/' + idligne + '/' + idfacture,
      data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#form3').serializeObject()),
      contentType: 'application/json; charset=utf-8',
      dataType: 'json',
      success: function success(respdata, textStatus, jqXHR) {
        if (jqXHR.status == '200') {
          jquery__WEBPACK_IMPORTED_MODULE_38___default()('#modalLigne').modal('toggle');
          window.location.href = '/crm/facture/' + idfacture + '/' + idchantier;
        }
      },
      error: function error(xhr, resp, text) {
        if (xhr.status == '500') {
          jquery__WEBPACK_IMPORTED_MODULE_38___default()('#ModalErreur').modal('show');
        }
      }
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_38___default()('#addGroupFac').on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_38___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#addGroupFac').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#closeGroupFac').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#loadGroupFac').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_38___default().ajax({
        type: 'POST',
        url: '/crm/groupe/add/' + facture.id + '/facture',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#addGroupFacForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          location.reload();
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_38___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updeFacture').on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_38___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updeFacture').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#closuFacture').hide();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#loaduFacture').css('display', '');
      var idfa = jquery__WEBPACK_IMPORTED_MODULE_38___default()('#idfacture').val();
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#editor2').val(CKEDITOR.instances['editor2'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_38___default()('#editor3').val(CKEDITOR.instances['editor3'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_38___default().ajax({
        type: 'PUT',
        url: '/crm/facture/upda/' + idfa,
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updFactureForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          location.reload();
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_38___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updateForme').off().on("click", /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2(event) {
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_38___default()(this).closest('form').valid()) {
              _context2.next = 9;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_38___default()('#updateForme').hide();
            jquery__WEBPACK_IMPORTED_MODULE_38___default()('#loadupForme').css('display', '');
            jquery__WEBPACK_IMPORTED_MODULE_38___default()('#Traitement').modal('show');
            jquery__WEBPACK_IMPORTED_MODULE_38___default()('#modalMise').modal('toggle');
            jquery__WEBPACK_IMPORTED_MODULE_38___default()('#editor5').val(CKEDITOR.instances['editor5'].getData());
            _context2.next = 9;
            return (0,axios__WEBPACK_IMPORTED_MODULE_42__["default"])({
              method: 'POST',
              url: '/crm/devis/forme',
              data: new FormData(jquery__WEBPACK_IMPORTED_MODULE_38___default()('#addforme')[0]),
              contentType: false,
              processData: false,
              cache: false,
              dataType: 'json'
            }).then(function (response) {
              location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_38___default()('#ModalErreur').modal('show');
            });
          case 9:
          case "end":
            return _context2.stop();
        }
      }, _callee2, this);
    }));
    return function (_x3) {
      return _ref2.apply(this, arguments);
    };
  }());
  if (facture.type === "devis") {
    if (ddecomptes) {
      ddecomptes.map(function (decs) {
        if (decs.etat === 'valide') {
          totaldecomptes = totaldecomptes + decs.apayer;
          totalretenue = totalretenue + decs.valeur * parseFloat(devis.garantie) / 100 + decs.valeur * parseFloat(devis.finition) / 100 + decs.valeur * parseFloat(devis.prorata) / 100 + decs.valeur * parseFloat(devis.trc) / 100;
        }
      });
    }
  }
  console.log(devis);
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "row clearfix",
    style: {
      padding: "0.1cm"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "col-sm-12 text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h3", {
    className: "font-bold m-t--10 col-purple"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/client/".concat(client.id)
  }, client.nomclient)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h3", {
    className: "font-bold m-t--10 col-pink"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/chantier/".concat(chantier.id)
  }, chantier.nomchantier)), facture.type === "acompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "FACTURE D'ACOMPTE N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
    className: "pri"
  }, facture.numfacture)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "DEVIS N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/devis/".concat(facture.acompte.devis.id, "/").concat(chantier.id),
    className: "font-bold pri"
  }, facture.acompte.devis.iddevis))), facture.type === "retenue" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "FACTURE D'ACOMPTE N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
    className: "pri"
  }, facture.numfacture)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "DEVIS N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/devis/".concat(facture.acompte.devis.id, "/").concat(chantier.id),
    className: "font-bold pri"
  }, facture.acompte.devis.iddevis))), facture.type === "devis" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "FACTURE DE SOLDE N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
    className: "pri"
  }, facture.numfacture)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "DEVIS N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/devis/".concat(facture.devis.id, "/").concat(chantier.id),
    className: "font-bold pri"
  }, facture.devis.iddevis))), facture.type === "simple" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "FACTURE N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
    className: "pri"
  }, facture.numfacture)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "DEVIS N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/devis/".concat(facture.devis.id, "/").concat(chantier.id),
    className: "font-bold pri"
  }, facture.devis.iddevis))), facture.type === "decompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "FACTURE DE D\xC9COMPTE N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
    className: "pri"
  }, facture.numfacture)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "D\xC9COMPTE N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/decompte/".concat(decompte.id, "/").concat(chantier.id),
    className: "font-bold  pri"
  }, decompte.numdecompte)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "m-t--10 col-blue-grey font-bold "
  }, "DEVIS N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/devis/".concat(decompte.devis.id, "/").concat(chantier.id),
    className: "font-bold pri"
  }, decompte.devis.iddevis))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/chantier/".concat(chantier.id),
    className: "btn bg-purple  align-left m-b-10 text-white waves-effect "
  }, "ACC\xC9DER AU CHANTIER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn bg-blue align-left m-b-10 text-white waves-effect",
    "data-toggle": "modal",
    "data-target": "#modalFacture"
  }, "CR\xC9ER UNE FACTURE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group m-t--5"
  }, facture.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-pink text-white",
    onClick: delFacture
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-trash"
  }), " SUPPRIMER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn bg-info text-white",
    "data-toggle": "modal",
    "data-target": "#modalMise"
  }, "MISE EN FORME"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-green btn-sm text-white",
    "data-toggle": "modal",
    "data-target": "#modalInfo"
  }, "- INFORMATIONS")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), facture.type === "retenue" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, facture.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-pri text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalPour"
  }, "FACTURE SUR POURCENTAGE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled btn-primary btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalMontant"
  }, "FACTURE SUR MONTANT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-pri text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalLigne"
  }, "AJOUTER UNE LIGNE"))), facture.type === "acompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, facture.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-pri text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalPour"
  }, "FACTURE SUR POURCENTAGE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled btn-primary btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalMontant"
  }, "FACTURE SUR MONTANT"))), facture.type === "simple" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, facture.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled btn-primary btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalLigne"
  }, "AJOUTER UNE LIGNE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-green btn-sm text-white",
    "data-toggle": "modal",
    "data-target": "#modalInfo"
  }, "- INFORMATIONS"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-indigo text-white",
    onClick: handlePrint
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-print"
  }), " IMPRESSION AVEC ENT\xCATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/doc/attache/".concat(facture.id, "/facture/non"),
    className: "btn bg-deep-orange text-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-envelope"
  }), " MAIL"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-pri text-white",
    onClick: pdfFacture
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fas fa-file-pdf"
  }), " PDF SANS ENT\xCATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_40__["default"], {
    id: "test-table-xls-button",
    className: "btn bg-green text-white",
    table: "dev2excel",
    filename: "Facture N\xB0 ".concat(facture.numfacture),
    sheet: "tablexls",
    buttonText: "EXCEL"
  }), devis.etat !== "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-pink text-white",
    onClick: delFacture
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-trash"
  }), " SUPPRIMER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), facture.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "font-bold col-black"
  }, "CETTE FACTURE EST VALID\xC9E")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), react_device_detect__WEBPACK_IMPORTED_MODULE_37__.deviceType !== "mobile" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("table", {
    id: "dev2excel"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tbody", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_PrintFacture__WEBPACK_IMPORTED_MODULE_36__.PrintFacture, {
    decompte: decompte,
    lignes: lignes,
    groupes: groupes,
    ref: componentRef,
    totalretenue: totalretenue,
    renderLigne: renderLigne,
    renderGroupe: renderGroupe,
    forme: forme,
    chantier: chantier,
    client: client,
    devis: devis,
    facture: facture,
    totaldecomptes: totaldecomptes,
    totalacomptes: totalacomptes
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null)))));
};
try {
  var container = document.getElementById('shacontentFacture');
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_39__.createRoot)(container);
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(Facture, null));
} catch (e) {}

/***/ }),

/***/ "./assets/components/facture/PrintFacture.js":
/*!***************************************************!*\
  !*** ./assets/components/facture/PrintFacture.js ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "PrintFacture": () => (/* binding */ PrintFacture)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.parse-float.js */ "./node_modules/core-js/modules/es.parse-float.js");
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_string_link_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.string.link.js */ "./node_modules/core-js/modules/es.string.link.js");
/* harmony import */ var core_js_modules_es_string_link_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_link_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./../../fonctions/NumberFormat */ "./assets/fonctions/NumberFormat.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var number_2_letters__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! number-2-letters */ "./node_modules/number-2-letters/lib/index.js");
/* harmony import */ var number_2_letters__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(number_2_letters__WEBPACK_IMPORTED_MODULE_6__);







var PrintFacture = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().forwardRef(function (props, ref) {
  var decompte = props.decompte;
  var totaldecomptes = props.totaldecomptes;
  var totalretenue = props.totalretenue;
  var totalacomptes = props.totalacomptes;
  var facture = props.facture;
  var client = props.client;
  var devis = props.devis;
  var forme = props.forme;
  var facdate = jquery__WEBPACK_IMPORTED_MODULE_5___default()("#facdate").val();
  var mocode = jquery__WEBPACK_IMPORTED_MODULE_5___default()("#mocode").val();
  var renderLigne = props.renderLigne;
  var renderGroupe = props.renderGroupe;
  var numberToLetters = __webpack_require__(/*! number-2-letters */ "./node_modules/number-2-letters/lib/index.js");
  var acompte = 0;
  var totalhtsolde = 0;
  var totaltva = 0;
  var totalttcsolde = 0;
  var addi = 0;
  var stva = "";
  if (decompte.deduction === "partielle") {
    acompte = decompte.valeur * decompte.acompte / 100;
  }
  if (decompte.deduction === "complete") {
    acompte = devis.totalht * decompte.acompte / 100;
  }
  if (decompte.deduction === "aucune") {
    acompte = 0;
  }
  addi = parseFloat(devis.finition) + parseFloat(devis.prorata) + parseFloat(devis.garantie) + parseFloat(devis.trc);
  if (facture.type === "devis") {
    totalhtsolde = devis.totalht - totalacomptes - totaldecomptes + totalretenue;
    if (devis.ptva === "oui") {
      totaltva = totalhtsolde * devis.tva / 100;
      totalttcsolde = totalhtsolde + totaltva;
    } else {
      totaltva = totalhtsolde * devis.tva / 100;
      totalttcsolde = totalhtsolde;
    }
  }
  if (devis.ptva !== 'oui') {
    stva = "(non facturée)";
  }
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    style: {
      width: "21cm",
      minHeight: "29.7cm",
      boxShadow: "0 0 0.5cm rgba(0,0,0,0.5)",
      backgroundColor: "#FFF"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "header",
    style: {
      width: forme.headerWith + "cm",
      height: forme.headerHeight + "cm",
      backgroundColor: "#FFF"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "bood",
    style: {
      paddingLeft: "1cm",
      paddingRight: "1cm"
    }
  }, facture.type === "decompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, client.nomclient.toUpperCase()), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.contribuable, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.adresse, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.mail, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "DATE:")), " ", facdate)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "R\xC9F\xC9RENCE:")), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: facture.factreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    "class": "printer",
    style: {
      textAlign: "left",
      color: "FFF"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    colSpan: "5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "1. D\xC9PENSES ENGAG\xC9ES"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    className: "borde",
    style: {
      textAlign: "right"
    }
  }, "MONTANT TOTAL HT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "2",
    className: "borde",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.totalht
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    "class": "printer",
    style: {
      textAlign: "left"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "2. MODALIT\xC9S DE R\xC8GLEMENT"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    className: "borde",
    style: {
      textAlign: "left",
      paddingLeft: " 20px",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "AVANCEMENT DES TRAVAUX")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.avancement
  }), "%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.valeur
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    colSpan: "5",
    style: {
      textAlign: "left",
      paddingLeft: " 20px",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "\xC0 D\xC9DUIRE"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, "D\xC9DUCTION ACOMPTE DE DEMARRAGE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.acompte
  }), "%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: acompte
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "D\xC9DUCTION RETENUE GARANTIE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.garantie
  }), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.valeur * decompte.garantie / 100
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "D\xC9DUCTION RETENUE DE FINITION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.finition
  }), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.valeur * decompte.finition / 100
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "D\xC9DUCTION COMPTE PRORATA"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.prorata
  }), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.valeur * decompte.prorata / 100
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "D\xC9DUCTION RETENUE ASSURANCE TRC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.trc
  }), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.valeur * decompte.trc / 100
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "D\xC9DUCTION DES D\xC9COMPTES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.countdecompe
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    style: {
      textAlign: "left",
      paddingLeft: " 20px",
      color: "#4e73df"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "SOIT"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "MONTANT DE LA SITUATION \xC0 D\xC9LIVRER HT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.apayer
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "TVA ", devis.tva, "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.apayer * devis.tva / 100
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right",
      color: "#4e73df"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "MONTANT DE LA SITUATION \xC0 D\xC9LIVRER TTC")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right",
      color: "#4e73df"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: parseFloat(decompte.ttc)
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      textAlign: "left"
    }
  }, "Arr\xEAt\xE9 la pr\xE9sente facture \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, numberToLetters(parseInt(decompte.ttc), {
    lang: 'fr'
  }), " ", mocode))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, "SIGNATURE AUTORIS\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), facture.information !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "left",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "CONDITIONS ET MODALIT\xC9S DE PAIEMENT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    }
  }, facture.information))), facture.type === "acompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, client.nomclient), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.contribuable, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.adresse, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.mail, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "DATE:")), " ", facdate)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "R\xC9F\xC9RENCE:")), " FACTURE D'ACOMPTE DEVIS N\xBA ", devis.iddevis, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: facture.factreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    "class": "printer"
  }, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " R\xC9F "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      maxWidth: "500px",
      minWidth: "250px",
      textAlign: "left"
    }
  }, "D\xC9SIGNATION"), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "SECTION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "UNIT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "PRIX\xA0U."), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "%REM"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "MONTANT\xA0HT")), renderGroupe, renderLigne, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " REMISE TOTALE ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  }))), devis.zone === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " REMISE TOTALE ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  })))), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " REMISE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.remtht
  }), "%) ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  }))), devis.zone === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " REMISE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.remtht
  }), "%) ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.totalht
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.remtht
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.totalht
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  })))), devis.abasetva === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)
  })))), devis.abasetva !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.vtva
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.vtva
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "text-right",
    style: {
      textAlign: "right",
      color: "#4e73df",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "text-right",
    colSpan: "4",
    style: {
      textAlign: "right",
      color: "#4e73df",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bordeu text-right nowrape",
    style: {
      textAlign: "right",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalttc
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "text-right",
    style: {
      textAlign: "right",
      color: "#4e73df",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "text-right",
    colSpan: "3",
    style: {
      textAlign: "right",
      color: "#4e73df",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bordeu text-right nowrape",
    style: {
      textAlign: "right",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalttc
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "text-left"
  }, "Arr\xEAt\xE9 la pr\xE9sente facture \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, numberToLetters(parseInt(facture.totalttc), {
    lang: 'fr'
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ", devis.monnaie.code))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, "SIGNATURE AUTORIS\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), facture.information !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "left",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "CONDITIONS ET MODALIT\xC9S DE PAIEMENT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: facture.information
    }
  }))), facture.type === "retenue" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "left"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, client.nomclient), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.contribuable !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.contribuable, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), client.adresse !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.adresse, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), client.mail !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.mail, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "DATE:")), " ", facdate)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "R\xC9F\xC9RENCE:")), " FACTURE D'ACOMPTE DEVIS N\xBA ", devis.iddevis, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: facture.factreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    "class": "printer"
  }, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " R\xC9F "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      maxWidth: "500px",
      minWidth: "250px",
      textAlign: "left"
    }
  }, "D\xC9SIGNATION"), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "SECTION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "UNIT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "PRIX\xA0U."), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "MONTANT\xA0HT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " SOUS-TOTAL HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " SOUS-TOTAL HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: tht
  })), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  })), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " SOUS-TOTAL HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " SOUS-TOTAL HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: tht
  })), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " RETENUE PROVISOIRE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " RETENUE PROVISOIRE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%)")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " RETENUE PROVISOIRE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%)")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " RETENUE PROVISOIRE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%)")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "SOUS-TOTAL APR\xC8S RETENUE")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "SOUS-TOTAL APR\xC8S RETENUE")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "SOUS-TOTAL APR\xC8S RETENUE")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "SOUS-TOTAL APR\xC8S RETENUE")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TAUX BNPC")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TAUX BNPC")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TAUX BNPC")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TAUX BNPC")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  })))), devis.abasetva === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)
  })))), devis.abasetva !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", stva)), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", stva)), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.vtva
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", stva)), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", stva)), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.vtva
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "text-right",
    style: {
      textAlign: "right",
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "text-right",
    colSpan: "4",
    style: {
      textAlign: "right",
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bordeu text-right nowrape",
    style: {
      fontSize: "12px",
      textAlign: "right",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalttc
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "text-right",
    style: {
      textAlign: "right",
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "text-right",
    colSpan: "3",
    style: {
      textAlign: "right",
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bordeu text-right nowrape",
    style: {
      fontSize: "12px",
      textAlign: "right",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalttc
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "text-left"
  }, "Arr\xEAt\xE9 la pr\xE9sente facture \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, numberToLetters(parseInt(facture.totalttc), {
    lang: 'fr'
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ", devis.monnaie.code))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, "SIGNATURE AUTORIS\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), facture.information !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "left",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "CONDITIONS ET MODALIT\xC9S DE PAIEMENT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: facture.information
    }
  }))), facture.type === "devis" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right",
    style: {
      marginTop: forme.teteDB
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, client.nomclient), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.contribuable !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.contribuable, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), client.adresse !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, " ", client.adresse, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), client.mail !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.mail, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), " ")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "DATE:")), " ", facdate)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "R\xC9F\xC9RENCE:")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "FACTURE DE SOLDE", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: facture.factreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    className: "printer"
  }, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "R\xC9F"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      maxWidth: "500px",
      minWidth: "250px",
      textAlign: "left"
    }
  }, "D\xC9SIGNATION"), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "SECTION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "UNIT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, "PRIX\xA0U."), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "REM %"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, "MONTANT\xA0HT")), renderGroupe, renderLigne, devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)
  }))), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "DEVIS TOTAL HT")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "DEVIS TOTAL HT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.totalht
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "D\xC9DUCTION DES ACOMPTES")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "D\xC9DUCTION DES ACOMPTES")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalacomptes
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "D\xC9DUCTION DES D\xC9COMPTES")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "D\xC9DUCTION DES D\xC9COMPTES")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totaldecomptes
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "6",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "ADDITION DES RETENUES(FINITION-GARANTIE-PRORATA-TRC) - ", addi, "%")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "ADDITION DES RETENUES(FINITION-GARANTIE-PRORATA-TRC)- ", addi, "%"))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "ADDITION DES RETENUES(FINITION-GARANTIE-PRORATA-TRC)- ", addi, "%")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "ADDITION DES RETENUES(FINITION-GARANTIE-PRORATA-TRC)- ", addi, "%"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalretenue
  }))), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalhtsolde
  }))), devis.abasetva === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BASE TVA", devis.code !== null && devis.code)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BASE TVA", devis.code !== null && devis.code)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "%", stva)), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "%", stva)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totaltva
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    colSpan: "3",
    style: {
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    colSpan: "2",
    style: {
      color: "#4e73df",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder",
    style: {
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalttcsolde
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "text-left"
  }, "Arr\xEAt\xE9 la pr\xE9sente facture \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ", numberToLetters(parseInt(totalttcsolde), {
    lang: 'fr'
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, devis.monnaie.code))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), facture.information !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "kop",
    style: {
      "float": "left",
      color: "#4e73df",
      textDecoration: "underline"
    }
  }, "CONDITIONS ET MODALIT\xC9S DE PAIEMENT "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: facture.information
    }
  }))), facture.type === "simple" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, client.nomclient), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.contribuable !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.contribuable, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), client.adresse !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, " ", client.adresse, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), client.mail !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.mail, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), " ")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "DATE:")), " ", facdate)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "R\xC9F\xC9RENCE:")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: facture.factreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    className: "printer"
  }, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "R\xC9F"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      maxWidth: "500px",
      minWidth: "250px",
      textAlign: "left"
    }
  }, "D\xC9SIGNATION"), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "SECTION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "UNIT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, "PRIX\xA0U."), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "REMISE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, "MONTANT\xA0HT")), renderGroupe, renderLigne, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalhtsolde
  }))), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  }))), devis.abasetva === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BASE TVA", devis.code !== null && devis.code)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BASE TVA", devis.code !== null && devis.code)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "%")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "2",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totaltva
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    colSpan: "3",
    style: {
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    colSpan: "2",
    style: {
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder",
    style: {
      fontSize: "12px",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalttcsolde
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "text-left"
  }, "Arr\xEAt\xE9 la pr\xE9sente facture \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, numberToLetters(parseInt(totalttcsolde), {
    lang: 'fr'
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, devis.code !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, " ", devis.monnaie.code), " "))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, " SIGNATURE AUTORIS\xC9E "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), facture.information !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "kop",
    style: {
      "float": "left",
      color: "#4e73df",
      textDecoration: "underline"
    }
  }, "CONDITIONS ET MODALIT\xC9S DE PAIEMENT "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: facture.information
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "footer"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    style: {
      display: "none"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    ref: ref,
    style: {
      width: "21cm",
      minHeight: "29.7cm",
      boxShadow: "0 0 0.5cm rgba(0,0,0,0.5)",
      backgroundColor: "#FFF"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "header",
    style: {
      width: forme.headerWith + "cm",
      height: forme.headerHeight + "cm"
    }
  }, forme.typeEntete !== "aucun" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, forme.typeEntete === "image" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("img", {
    src: "/gallery/".concat(forme.link),
    style: {
      width: forme.teteH + "cm",
      height: forme.teteY + "cm",
      paddingRight: forme.teteDD + "cm",
      paddingLeft: forme.teteDG + "cm",
      paddingTop: forme.teteDH + "cm",
      paddingBottom: forme.teteDB + "cm"
    },
    alt: ""
  }), forme.typeEntete === "texte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      paddingRight: forme.teteDD + "cm",
      paddingLeft: forme.teteDG + "cm",
      paddingTop: forme.teteDH + "cm",
      paddingBottom: forme.teteDB + "cm"
    },
    dangerouslySetInnerHTML: {
      __html: forme.headerText
    }
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    style: {
      paddingLeft: "1cm",
      paddingRight: "1cm"
    }
  }, facture.type === "decompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "header-space"
  }, "\xA0")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tbody", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, client.nomclient.toUpperCase()), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.contribuable, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.adresse, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.mail, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "DATE:")), " ", facdate)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "R\xC9F\xC9RENCE:")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: facture.factreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    className: "printer",
    style: {
      textAlign: "left"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    colSpan: "5",
    className: "borde"
  }, "1. D\xC9PENSES ENGAG\xC9ES")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    className: "borde",
    style: {
      textAlign: "right"
    }
  }, "MONTANT TOTAL HT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "2",
    className: "borde",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.totalht
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    className: "printer",
    style: {
      textAlign: "left"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tH", {
    colSpan: "5",
    className: "borde"
  }, "2. MODALIT\xC9S DE R\xC8GLEMENT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    className: "borde kop",
    style: {
      textAlign: "left",
      paddingLeft: " 20px"
    }
  }, "AVANCEMENT DES TRAVAUX"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.avancement
  }), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.valeur
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde kop",
    colSpan: "5",
    style: {
      textAlign: "left",
      paddingLeft: " 20px"
    }
  }, "\xC0 D\xC9DUIRE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, "D\xC9DUCTION ACOMPTE DE DEMARRAGE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.acompte
  }), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: acompte
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "D\xC9DUCTION RETENUE GARANTIE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.garantie
  }), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.valeur * decompte.garantie / 100
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "D\xC9DUCTION RETENUE DE FINITION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.finition
  }), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.valeur * decompte.finition / 100
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "D\xC9DUCTION COMPTE PRORATA"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.prorata
  }), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.valeur * decompte.prorata / 100
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "D\xC9DUCTION ASSURANCE TRC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.trc
  }), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.valeur * decompte.trc / 100
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "D\xC9DUCTION DES D\xC9COMPTES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.countdecompe
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    style: {
      textAlign: "left",
      paddingLeft: " 20px"
    },
    className: "borde kop"
  }, "SOIT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "MONTANT DE LA SITUATION \xC0 D\xC9LIVRER HT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.apayer
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, "TVA ", devis.tva, "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.apayer * devis.tva / 100
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right",
      color: "#4e73df"
    },
    className: "borde kop"
  }, "MONTANT DE LA SITUATION \xC0 D\xC9LIVRER TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right"
    },
    className: "borde"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right",
      color: "#4e73df"
    },
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: decompte.ttc
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      textAlign: "left"
    }
  }, "Arr\xEAt\xE9 la pr\xE9sente facture \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, numberToLetters(parseInt(decompte.ttc), {
    lang: 'fr'
  }), " ", mocode))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, "SIGNATURE AUTORIS\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), facture.information !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "left",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "CONDITIONS ET MODALIT\xC9S DE PAIEMENT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    }
  }, facture.information))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "footer-space"
  }, "\xA0"))))), facture.type === "retenue" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "header-space"
  }, "\xA0")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tbody", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, client.nomclient), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.contribuable, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.adresse, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.mail, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "DATE:")), " ", facdate)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "R\xC9F\xC9RENCE:")), " FACTURE D'ACOMPTE SELON DEVIS N\xBA ", devis.iddevis, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: facture.factreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    "class": "printer"
  }, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " R\xC9F "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      maxWidth: "500px",
      minWidth: "250px",
      textAlign: "left"
    }
  }, "D\xC9SIGNATION"), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "SECTION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "UNIT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, "PRIX\xA0U."), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, "MONTANT\xA0HT")), renderGroupe, renderLigne, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: tht
  })), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.totalht
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: tht
  })), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.totalht
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  })))), devis.abasetva === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)
  })))), devis.abasetva !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.vtva
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.vtva
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "text-right",
    style: {
      textAlign: "right",
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "text-right",
    colSpan: "4",
    style: {
      textAlign: "right",
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bordeu text-right nowrape",
    style: {
      fontSize: "12px",
      textAlign: "right",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalttc
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "text-right",
    style: {
      textAlign: "right",
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "text-right",
    colSpan: "3",
    style: {
      textAlign: "right",
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bordeu text-right nowrape",
    style: {
      fontSize: "12px",
      textAlign: "right",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalttc
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "text-left"
  }, "Arr\xEAt\xE9 la pr\xE9sente facture \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, numberToLetters(parseInt(facture.totalttc), {
    lang: 'fr'
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ", devis.monnaie.code))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, "SIGNATURE AUTORIS\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), facture.information !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "left",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "CONDITIONS ET MODALIT\xC9S DE PAIEMENT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: facture.information
    }
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "footer-space"
  }, "\xA0"))))), facture.type === "acompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "header-space"
  }, "\xA0")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tbody", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, client.nomclient), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.contribuable, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.adresse, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.mail, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "DATE:")), " ", facdate)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "R\xC9F\xC9RENCE:")), " FACTURE D'ACOMPTE SELON DEVIS N\xBA ", devis.iddevis, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: facture.factreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    "class": "printer"
  }, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " R\xC9F "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      maxWidth: "500px",
      minWidth: "250px",
      textAlign: "left"
    }
  }, "D\xC9SIGNATION"), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "SECTION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "UNIT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, "PRIX\xA0U."), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "%REM"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, "MONTANT\xA0HT")), renderGroupe, renderLigne, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " REMISE TOTALE ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  }))), devis.zone === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " REMISE TOTALE ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  })))), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " REMISE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.remtht
  }), "%) ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  }))), devis.zone === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " REMISE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.remtht
  }), "%) ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.totalht
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " TOTAL HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.remtht
  })), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.totalht
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ACOMPTE (", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.acompte.pourcentage
  }), "%) HT ")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalht
  })))), devis.abasetva === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " BASE TVA")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)
  })))), devis.abasetva !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.vtva
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "bord text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord text-right",
    colSpan: "3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "% ", stva)), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.vtva
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bord"
  }), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "text-right",
    style: {
      textAlign: "right",
      color: "#4e73df",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "text-right",
    colSpan: "4",
    style: {
      textAlign: "right",
      color: "#4e73df",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bordeu text-right nowrape",
    style: {
      textAlign: "right",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalttc
  }))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "text-right",
    style: {
      textAlign: "right",
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "text-right",
    colSpan: "3",
    style: {
      textAlign: "right",
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER")), devis.aarem === 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "barder text-right nowrape"
  }), devis.aarem !== 'tht' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "bordeu text-right nowrape",
    style: {
      fontSize: "12px",
      textAlign: "right",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: facture.totalttc
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "text-left"
  }, "Arr\xEAt\xE9 la pr\xE9sente facture \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, numberToLetters(parseInt(facture.totalttc), {
    lang: 'fr'
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ", devis.monnaie.code))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, "SIGNATURE AUTORIS\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), facture.information !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "left",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "CONDITIONS ET MODALIT\xC9S DE PAIEMENT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: facture.information
    }
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "footer-space"
  }, "\xA0"))))), facture.type === "devis" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "header-space"
  }, "\xA0")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tbody", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, client.nomclient), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.contribuable !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.contribuable, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), client.adresse !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, " ", client.adresse, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), client.mail !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.mail, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), " ")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "DATE:")), " ", facdate)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "R\xC9F\xC9RENCE:")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "FACTURE DE SOLDE", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: facture.factreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    className: "printer"
  }, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "R\xC9F"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      maxWidth: "500px",
      minWidth: "250px",
      textAlign: "left"
    }
  }, "D\xC9SIGNATION"), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "SECTION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "UNIT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, "PRIX\xA0U."), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "REM %"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, " MONTANT\xA0HT")), renderGroupe, renderLigne, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "D\xC9DUCTION DES ACOMPTES")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "D\xC9DUCTION DES ACOMPTES")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalacomptes
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "D\xC9DUCTION DES D\xC9COMPTES")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "D\xC9DUCTION DES D\xC9COMPTES")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totaldecomptes
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "6",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "ADDITION DES RETENUES(FINITION-GARANTIE-PRORATA-TRC) - ", addi, "%")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "ADDITION DES RETENUES(FINITION-GARANTIE-PRORATA-TRC)- ", addi, "%"))), devis.zone !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "ADDITION DES RETENUES(FINITION-GARANTIE-PRORATA-TRC)- ", addi, "%")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "ADDITION DES RETENUES(FINITION-GARANTIE-PRORATA-TRC)- ", addi, "%"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalretenue
  }))), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "2",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "2",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalhtsolde
  }))), devis.abasetva === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BASE TVA", devis.code !== null && devis.code)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "2",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BASE TVA", devis.code !== null && devis.code)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "%", stva)), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "%", stva)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totaltva
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    colSpan: "3",
    className: "kop",
    style: {
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, "NET \xC0 PAYER"), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    colSpan: "2",
    className: "kop",
    style: {
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, "NET \xC0 PAYER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder kop",
    style: {
      fontSize: "12px",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalttcsolde
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "text-left"
  }, "Arr\xEAt\xE9 la pr\xE9sente facture \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ", numberToLetters(parseInt(totalttcsolde), {
    lang: 'fr'
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, devis.monnaie.code))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, " SIGNATURE AUTORIS\xC9E "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), facture.information !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "kop",
    style: {
      "float": "left",
      color: "#4e73df",
      textDecoration: "underline"
    }
  }, "CONDITIONS ET MODALIT\xC9S DE PAIEMENT "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: facture.information
    }
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "footer-space"
  }, "\xA0"))))), facture.type === "simple" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "header-space"
  }, "\xA0")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tbody", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, client.nomclient), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), client.contribuable !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.contribuable, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), client.adresse !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, " ", client.adresse, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), client.mail !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, client.mail, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), " ")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "DATE:")), " ", facdate)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("u", null, "R\xC9F\xC9RENCE:")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: facture.factreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    className: "printer"
  }, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "R\xC9F"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      maxWidth: "500px",
      minWidth: "250px",
      textAlign: "left"
    }
  }, "D\xC9SIGNATION"), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "SECTION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "UNIT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, "PRIX\xA0U."), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    }
  }, "REMISE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    style: {
      textAlign: "center"
    },
    className: "mw100"
  }, " MONTANT\xA0HT")), renderGroupe, renderLigne, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "2",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totaldecomptes
  }))), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "2",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.vremise
  }))), devis.abasetva === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BASE TVA", devis.code !== null && devis.code)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "2",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BASE TVA", devis.code !== null && devis.code)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: devis.basetva
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "%")), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "2",
    style: {
      textAlign: "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", devis.tva, "%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totaltva
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, devis.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.zone === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null), devis.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    colSpan: "3",
    className: "kop",
    style: {
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, "NET \xC0 PAYER"), devis.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    colSpan: "2",
    className: "kop",
    style: {
      color: "#4e73df",
      fontSize: "12px",
      borderBottom: "1px solid #D3D3D3"
    }
  }, "NET \xC0 PAYER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    align: "right",
    className: "barder kop",
    style: {
      fontSize: "12px",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: totalttcsolde
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "text-left"
  }, "Arr\xEAt\xE9 la pr\xE9sente facture \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, numberToLetters(parseInt(totalttcsolde), {
    lang: 'fr'
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, " ", devis.monnaie.code))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, " SIGNATURE AUTORIS\xC9E "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), facture.information !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "kop",
    style: {
      "float": "left",
      color: "#4e73df",
      textDecoration: "underline"
    }
  }, "CONDITIONS ET MODALIT\xC9S DE PAIEMENT "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: facture.information
    }
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "footer-space"
  }, "\xA0")))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "footer"
  }, forme.pied !== "aucun" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, forme.typeFooter === "texte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      fontSize: forme.piedsize + "px",
      paddingLeft: "1cm",
      paddingRight: "1cm"
    },
    dangerouslySetInnerHTML: {
      __html: forme.pied
    }
  }), forme.typeFooter === "image" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("img", {
    src: "/gallery/".concat(forme.footerImage),
    style: {
      width: "21cm",
      minHeight: forme.footerHeight + "cm"
    },
    alt: ""
  }))))));
});

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

/***/ "./node_modules/core-js/internals/is-integral-number.js":
/*!**************************************************************!*\
  !*** ./node_modules/core-js/internals/is-integral-number.js ***!
  \**************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var isObject = __webpack_require__(/*! ../internals/is-object */ "./node_modules/core-js/internals/is-object.js");

var floor = Math.floor;

// `IsIntegralNumber` abstract operation
// https://tc39.es/ecma262/#sec-isintegralnumber
// eslint-disable-next-line es/no-number-isinteger -- safe
module.exports = Number.isInteger || function isInteger(it) {
  return !isObject(it) && isFinite(it) && floor(it) === it;
};


/***/ }),

/***/ "./node_modules/core-js/modules/es.number.is-integer.js":
/*!**************************************************************!*\
  !*** ./node_modules/core-js/modules/es.number.is-integer.js ***!
  \**************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var isIntegralNumber = __webpack_require__(/*! ../internals/is-integral-number */ "./node_modules/core-js/internals/is-integral-number.js");

// `Number.isInteger` method
// https://tc39.es/ecma262/#sec-number.isinteger
$({ target: 'Number', stat: true }, {
  isInteger: isIntegralNumber
});


/***/ }),

/***/ "./node_modules/table-to-excel/table-to-excel.js":
/*!*******************************************************!*\
  !*** ./node_modules/table-to-excel/table-to-excel.js ***!
  \*******************************************************/
/***/ ((module, exports, __webpack_require__) => {

var __WEBPACK_AMD_DEFINE_RESULT__;/**
 * @fileOverview 定义table或者array转化成excel表格的公共方法
 */



(function() {
    /**
     * @class TableToExcel 定义 table或者 array转化成 excel表格的公共方法
     */
    TableToExcel = function() {}
    /**
     *@lends TableToExcel.prototype
     */
    TableToExcel.prototype = {
        /**
         *判断IE和非IE浏览器
         */
        checkIsIE: !!(navigator.userAgent.indexOf('Trident') > -1 && navigator.userAgent.indexOf('Opera') === -1),
        /**
         *判断是否mac系统
         */
        checkIsMac: navigator.userAgent.indexOf("Mac") != -1,
        /**
         *入口
         *@param {String} table 页面内table的id属性值  不传值则从一个二维数组里生成table
         */
        render: function(param, title) {
            if (this.checkIsIE) {
                this.createExcelIE(param, title);
            } else {
                this.createExcel(param, title)
            }
        },
        /**
        *创建表格，render方法传递的参数是数组时调用
        *@param {Array} param 接口传过来的数组
        *数组格式
        *@example
        var obj=[
            ['LastName','Sales','Country','Quarter'],
            ['Smith','16753','UK','Qtr 3'],
            ['Johnson','14808','USA','Qtr 4']
        ];
        */
        createTable: function(param, title) {
            var trLen = param.length;
            var tdLen = param[0].length;
            var trArr = [];
            var style = this.checkIsMac ? "" : 'mso-number-format:"\@"';
            if (title) {
                var hdLen = title.length;
                for (var n = 0; n < hdLen; n++) {
                    var border = n % 2 != 0 ? "border-top:1px solid #fff;" : "";
                    trArr.push('<tr><td style="background:'+title[n].bg+'; color:'+title[n].color+';" colspan="' + param[0].length + '">' + title[n].text + '</td></tr>');
                }
            }
            for (var i = 0; i < trLen; i++) {
                var tdArr = [];
                for (var o = 0; o < tdLen; o++) {
                    var tdHtml = '<td style=' + style + '>' + param[i][o] + '</td>';
                    tdArr.push(tdHtml);
                }
                var trHtml = '<tr>' + tdArr.join("") + '</tr>';
                trArr.push(trHtml);
            }
            return trArr.join("");
        },
        /**
         *根据页面内存在的table生成excel   非IE浏览器
         *@param {String} param 页面内table的id属性值
         *or
         *@param {Array} param 接口传过来的二维数组
         */
        createExcel: function(param, title) {
            var self = this;
            var tableHtml = null;
            var func = (function() {
                var uri = 'data:application/vnd.ms-excel;base64,';
                var template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><style>td{mso-number-format:"\@";}</style></head><body><table>{table}</table></body></html>';
                var base64 = function(s) {
                    return window.btoa(unescape(encodeURIComponent(s)))
                };
                var format = function(s, c) {
                    return s.replace(/{(\w+)}/g, function(m, p) {
                        return c[p];
                    })
                }
                return function(table, name) {
                    if (typeof(param) == "string") {
                        tableHtml = document.getElementById(param).innerHTML;
                    } else {
                        tableHtml = self.createTable(param, title);
                    }
                    var ctx = {
                        worksheet: name || 'Worksheet',
                        table: tableHtml
                    }
                    var link = document.createElement("a");
                    link.href = uri + base64(format(template, ctx));
                    link.download = 'download.xls';
                    document.body.appendChild(link)
                    link.click();
                }
            })();
            func()
        },
        /**
         *根据页面内存在的table生成excel   IE浏览器
         *@param {String} param 页面内table的id属性值
         *or
         *@param {Array} param 接口传过来的二维数组
         */
        createExcelIE: function(param, title) {
            var tableHtml = null;
            if (typeof(param) == "string") {
                tableHtml = document.getElementById(param).outerHTML;
            } else {
                tableHtml = '<table>' + this.createTable(param, title) + '</table>';
            }

            window.clipboardData.setData("Text", tableHtml);
            var objExcel = new ActiveXObject("Excel.Application");
            objExcel.visible = true;
            var objWorkbook = objExcel.Workbooks.Add;
            var objWorksheet = objWorkbook.Worksheets(1);
            objWorksheet.Paste;
        }
    }
    // AMD && CMD
    if (true) {
        !(__WEBPACK_AMD_DEFINE_RESULT__ = (function() {
            return TableToExcel;
        }).call(exports, __webpack_require__, exports, module),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
        // CommonJS
    } else {}
})();


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-383511","vendors-node_modules_core-js_modules_es_array_from_js-node_modules_core-js_modules_es_array_i-c84b5d","vendors-node_modules_react-html-table-to-excel_index_js","vendors-node_modules_core-js_modules_es_parse-float_js-node_modules_react-device-detect_dist_lib_js","vendors-node_modules_number-2-letters_lib_index_js-node_modules_react-to-print_lib_index_js","assets_js_datascript_js-assets_js_jquery_validate_js-assets_css_mdb_css","assets_js_admin_js-assets_js_bootstrap_js-assets_js_jquery_tableToExcel_js-assets_js_select2_-13fb9c"], () => (__webpack_exec__("./assets/apfactures.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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O0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLFFBQVEsSUFBNEI7QUFDcEMsUUFBUSxtQ0FBTztBQUNmO0FBQ0EsU0FBUztBQUFBLGtHQUFDO0FBQ1Y7QUFDQSxNQUFNLEtBQUssRUFLTjtBQUNMLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBmYWN0dXJlcy5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29tcG9uZW50cy9mYWN0dXJlL0ZhY3R1cmUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbXBvbmVudHMvZmFjdHVyZS9QcmludEZhY3R1cmUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ZvbmN0aW9ucy9OdW1iZXJGb3JtYXQuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2pxdWVyeS5zaW1wbGVQYWdpbmF0aW9uLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9pcy1pbnRlZ3JhbC1udW1iZXIuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lcy5udW1iZXIuaXMtaW50ZWdlci5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvdGFibGUtdG8tZXhjZWwvdGFibGUtdG8tZXhjZWwuanMiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL2Nzcy9ib290c3RyYXAuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9tZGIuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy93YXZlcy5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL2FsbC10aGVtZXMuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9zZWxlY3QyLm1pbi5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3N0eWxlLmNzcyc7XHJcblxyXG5cclxuaW1wb3J0ICcuL2pzL2Jvb3RzdHJhcC5qcyc7XHJcbmltcG9ydCAnLi9qcy9kYXRhc2NyaXB0LmpzJztcclxuaW1wb3J0ICcuL2pzL3NlbGVjdDIubWluLmpzJztcclxuaW1wb3J0ICcuL2pzL2pxdWVyeS50YWJsZVRvRXhjZWwuanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnZhbGlkYXRlLmpzJztcclxuaW1wb3J0ICcuL2pzL2FkbWluLmpzJztcclxuaW1wb3J0ICcuL2pzL2pxdWVyeS5zaW1wbGVQYWdpbmF0aW9uJztcclxuXHJcblxyXG5pbXBvcnQgJy4vY29tcG9uZW50cy9mYWN0dXJlL0ZhY3R1cmUnO1xyXG5cclxuXHJcblxyXG5cclxuIiwiaW1wb3J0IFJlYWN0LCB7dXNlRWZmZWN0LCB1c2VSZWYsIHVzZVN0YXRlfSBmcm9tICdyZWFjdCc7XG5pbXBvcnQge3VzZVJlYWN0VG9QcmludH0gZnJvbSBcInJlYWN0LXRvLXByaW50XCI7XG5pbXBvcnQge1ByaW50RmFjdHVyZX0gZnJvbSBcIi4vUHJpbnRGYWN0dXJlXCI7XG5pbXBvcnQge2RldmljZVR5cGV9IGZyb20gXCJyZWFjdC1kZXZpY2UtZGV0ZWN0XCI7XG5pbXBvcnQgJCBmcm9tIFwianF1ZXJ5XCI7XG5pbXBvcnQge2NyZWF0ZVJvb3R9IGZyb20gXCJyZWFjdC1kb20vY2xpZW50XCI7XG5pbXBvcnQgUmVhY3RIVE1MVGFibGVUb0V4Y2VsIGZyb20gXCJyZWFjdC1odG1sLXRhYmxlLXRvLWV4Y2VsXCI7XG5pbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XG5pbXBvcnQgTnVtYmVyRm9ybWF0IGZyb20gXCIuLi8uLi9mb25jdGlvbnMvTnVtYmVyRm9ybWF0XCI7XG5cblxuY29uc3QgRmFjdHVyZSA9ICgpID0+IHtcbiAgICBjb25zdCBbY2xpZW50LCBzZXRDbGllbnRdID0gdXNlU3RhdGUoJycpO1xuICAgIGNvbnN0IFtjaGFudGllciwgc2V0Q2hhbnRpZXJdID0gdXNlU3RhdGUoJycpO1xuICAgIGNvbnN0IFtkZXZpcywgc2V0RGV2aXNdID0gdXNlU3RhdGUoJycpO1xuICAgIGNvbnN0IFtmYWN0dXJlLCBzZXRGYWN0dXJlXSA9IHVzZVN0YXRlKCcnKTtcbiAgICBjb25zdCBbZGVjb21wdGUsIHNldERlY29tcHRlXSA9IHVzZVN0YXRlKCcnKTtcbiAgICBjb25zdCBbbGlnbmVzLCBzZXRMaWduZXNdID0gdXNlU3RhdGUoW10pO1xuICAgIGNvbnN0IFtncm91cGVzLCBzZXRHcm91cGVzXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbZGRlY29tcHRlcywgc2V0RERlY29tcHRlc10gPSB1c2VTdGF0ZShbXSk7XG4gICAgbGV0IFt0b3RhbGFjb21wdGVzLCBzZXRUb3RhbGFjb21wdGVzXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbZm9ybWUsIHNldGZvcm1lXSA9IHVzZVN0YXRlKFtdKTtcblxuICAgIGxldCB0b3RhbGRlY29tcHRlcyA9IDA7XG4gICAgbGV0IHRvdGFscmV0ZW51ZSA9IDA7XG5cbiAgICByZXF1aXJlKCd0YWJsZS10by1leGNlbCcpO1xuICAgIGNvbnN0IGNvbXBvbmVudFJlZiA9IHVzZVJlZigpO1xuICAgIGNvbnN0IGhhbmRsZVByaW50ID0gdXNlUmVhY3RUb1ByaW50KHtcbiAgICAgICAgY29udGVudDogKCkgPT4gY29tcG9uZW50UmVmLmN1cnJlbnQsXG4gICAgfSk7XG4gICAgZnVuY3Rpb24gbHRyaW0oc3RyKSB7XG4gICAgICAgIGlmICghc3RyKSByZXR1cm4gc3RyO1xuICAgICAgICByZXR1cm4gc3RyLnJlcGxhY2UoL15cXHMrL2csICcnKTtcbiAgICB9XG4gICAgZnVuY3Rpb24gcGRmRmFjdHVyZShlKSB7XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgJChcIiNwcnBkZlwiKS5jc3MoXCJkaXNwbGF5XCIsIFwiYmxvY2tcIik7XG4gICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gXCIvY3JtL2RvYy9hdHRhY2hlL1wiICsgZmFjdHVyZS5pZCArIFwiL2ZhY3R1cmUvb3VpXCI7XG4gICAgfVxuXG4gICAgJCgnI2ZhY3NlbGVjdCcpLm9uKCdjaGFuZ2UnLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgIGNvbnN0IGRkID0gJCgnI2ZhY3NlbGVjdCBvcHRpb246c2VsZWN0ZWQnKS52YWwoKTtcbiAgICAgICAgaWYgKGRkID09PSAnZGVjb21wdGUnKSB7XG4gICAgICAgICAgICAkKCcuZHZvJykuZW1wdHkoKTtcbiAgICAgICAgICAgICQoJy5kZWNvJykucmVtb3ZlQ2xhc3MoJ2Rpc2FibGVkJyk7XG4gICAgICAgICAgICAkKCcuZGV2bycpLmFkZENsYXNzKCdkaXNhYmxlZCcpO1xuICAgICAgICAgICAgJCgnLmR2bycpLmFwcGVuZCgnKiBQYXMgbsOpY2Vzc2FpcmUnKTtcbiAgICAgICAgICAgICQoJy5kY28nKS5lbXB0eSgpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgJCgnLmRjbycpLmVtcHR5KCk7XG4gICAgICAgICAgICAkKCcuZGV2bycpLnJlbW92ZUNsYXNzKCdkaXNhYmxlZCcpO1xuICAgICAgICAgICAgJCgnLmRlY28nKS5hZGRDbGFzcygnZGlzYWJsZWQnKTtcbiAgICAgICAgICAgICQoJy5kY28nKS5hcHBlbmQoJyogUGFzIG7DqWNlc3NhaXJlJyk7XG4gICAgICAgICAgICAkKCcuZHZvJykuZW1wdHkoKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmIChkZCA9PT0gJ2Fjb21wdGUnKSB7XG4gICAgICAgICAgICAkKCcudHZvJykucmVtb3ZlQ2xhc3MoJ2Rpc2FibGVkJyk7XG4gICAgICAgICAgICAkKCcucHZvJykucmVtb3ZlQ2xhc3MoJ2Rpc2FibGVkJyk7XG4gICAgICAgICAgICAkKCcuZHRvJykuZW1wdHkoKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQoJy50dm8nKS5hZGRDbGFzcygnZGlzYWJsZWQnKTtcbiAgICAgICAgICAgICQoJy5wdm8nKS5hZGRDbGFzcygnZGlzYWJsZWQnKTtcbiAgICAgICAgICAgICQoJy5kdG8nKS5hcHBlbmQoJyogUGFzIG7DqWNlc3NhaXJlJyk7XG4gICAgICAgIH1cbiAgICB9KTtcbiAgICAkKCcjZmFjc2VsZWN0ZXonKS5vbignY2hhbmdlJywgZnVuY3Rpb24gKCkge1xuICAgICAgICBjb25zdCBkZCA9ICQoJyNmYWNzZWxlY3RleiBvcHRpb246c2VsZWN0ZWQnKS52YWwoKTtcbiAgICAgICAgaWYgKGRkID09PSAnZGVjb21wdGUnKSB7XG4gICAgICAgICAgICAkKCcuZHZvJykuZW1wdHkoKTtcbiAgICAgICAgICAgICQoJy5kZWNvJykucmVtb3ZlQ2xhc3MoJ2Rpc2FibGVkJyk7XG4gICAgICAgICAgICAkKCcuZGV2bycpLmFkZENsYXNzKCdkaXNhYmxlZCcpO1xuICAgICAgICAgICAgJCgnLmR2bycpLmFwcGVuZCgnKiBQYXMgbsOpY2Vzc2FpcmUnKTtcbiAgICAgICAgICAgICQoJy5kY28nKS5lbXB0eSgpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgJCgnLmRjbycpLmVtcHR5KCk7XG4gICAgICAgICAgICAkKCcuZGV2bycpLnJlbW92ZUNsYXNzKCdkaXNhYmxlZCcpO1xuICAgICAgICAgICAgJCgnLmRlY28nKS5hZGRDbGFzcygnZGlzYWJsZWQnKTtcbiAgICAgICAgICAgICQoJy5kY28nKS5hcHBlbmQoJyogUGFzIG7DqWNlc3NhaXJlJyk7XG4gICAgICAgICAgICAkKCcuZHZvJykuZW1wdHkoKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmIChkZCA9PT0gJ2Fjb21wdGUnKSB7XG4gICAgICAgICAgICAkKCcudHZvJykucmVtb3ZlQ2xhc3MoJ2Rpc2FibGVkJyk7XG4gICAgICAgICAgICAkKCcucHZvJykucmVtb3ZlQ2xhc3MoJ2Rpc2FibGVkJyk7XG4gICAgICAgICAgICAkKCcuZHRvJykuZW1wdHkoKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQoJy50dm8nKS5hZGRDbGFzcygnZGlzYWJsZWQnKTtcbiAgICAgICAgICAgICQoJy5wdm8nKS5hZGRDbGFzcygnZGlzYWJsZWQnKTtcbiAgICAgICAgICAgICQoJy5kdG8nKS5hcHBlbmQoJyogUGFzIG7DqWNlc3NhaXJlJyk7XG4gICAgICAgIH1cbiAgICB9KTtcblxuICAgIGNvbnN0IHNvcnRsaWduZXMgPSBsaWduZXMuc29ydChmdW5jdGlvbiAoYSwgYikge1xuICAgICAgICBpZiAoTnVtYmVyLmlzSW50ZWdlcihwYXJzZUludChsdHJpbShhLnJlZmVyZW5jZSkpKSkge1xuICAgICAgICAgICAgcmV0dXJuIHBhcnNlSW50KGx0cmltKGEucmVmZXJlbmNlKSkgLSBwYXJzZUludChsdHJpbShiLnJlZmVyZW5jZSkpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgaWYgKGEucmVmZXJlbmNlID4gYi5yZWZlcmVuY2UpIHJldHVybiAxO1xuICAgICAgICAgICAgaWYgKGEucmVmZXJlbmNlIDwgYi5yZWZlcmVuY2UpIHJldHVybiAtMTtcbiAgICAgICAgICAgIHJldHVybiAwO1xuICAgICAgICB9XG4gICAgfSk7XG4gICAgY29uc3Qgc29ydGdyb3VwZXMgPSBncm91cGVzLnNvcnQoZnVuY3Rpb24gKGEsIGIpIHtcbiAgICAgICAgaWYgKE51bWJlci5pc0ludGVnZXIocGFyc2VJbnQobHRyaW0oYS5yZWZlcmVuY2UpKSkpIHtcbiAgICAgICAgICAgIHJldHVybiBwYXJzZUludChsdHJpbShhLnJlZmVyZW5jZSkpIC0gcGFyc2VJbnQobHRyaW0oYi5yZWZlcmVuY2UpKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIGlmIChhLnJlZmVyZW5jZSA+IGIucmVmZXJlbmNlKSByZXR1cm4gMTtcbiAgICAgICAgICAgIGlmIChhLnJlZmVyZW5jZSA8IGIucmVmZXJlbmNlKSByZXR1cm4gLTE7XG4gICAgICAgICAgICByZXR1cm4gMDtcbiAgICAgICAgfVxuICAgIH0pO1xuXG4gICAgY29uc3QgZmV0Y2hGYWN0dXJlID0gYXN5bmMgKCkgPT4ge1xuICAgICAgICBjb25zdCBkZGUgPSBKU09OLnBhcnNlKCQoJyNqc29uZmFjdHVyZScpLnZhbCgpKTtcbiAgICAgICAgY29uc3QgZGRlYyA9IEpTT04ucGFyc2UoJCgnI2pzb25kZWNvbXB0ZXMnKS52YWwoKSk7XG4gICAgICAgIGNvbnN0IGZvcm1lID0gSlNPTi5wYXJzZSgkKCcjanNvbmZvcm1lJykudmFsKCkpO1xuICAgICAgICBzZXRGYWN0dXJlKGRkZSk7XG4gICAgICAgIHNldENsaWVudChkZGUuY2xpZW50KTtcbiAgICAgICAgc2V0Q2hhbnRpZXIoZGRlLmNoYW50aWVyKTtcbiAgICAgICAgaWYgKGRkZS50eXBlID09PSBcImRlY29tcHRlXCIpIHtcbiAgICAgICAgICAgIHNldERlY29tcHRlKGRkZS5kZWNvbXB0ZSk7XG4gICAgICAgICAgICBzZXREZXZpcyhkZGUuZGVjb21wdGUuZGV2aXMpO1xuICAgICAgICAgICAgc2V0TGlnbmVzKGRkZS5saWduZXMpO1xuICAgICAgICB9XG4gICAgICAgIGlmIChkZGUudHlwZSA9PT0gXCJyZXRlbnVlXCIpIHtcbiAgICAgICAgICAgIHNldERldmlzKGRkZS5hY29tcHRlLmRldmlzKTtcbiAgICAgICAgICAgIHNldExpZ25lcyhkZGUuYWNvbXB0ZS5kZXZpcy5saWduZXMpO1xuICAgICAgICAgICAgc2V0R3JvdXBlcyhkZGUuYWNvbXB0ZS5kZXZpcy5ncm91cGUpO1xuICAgICAgICB9XG4gICAgICAgIGlmIChkZGUudHlwZSA9PT0gXCJhY29tcHRlXCIpIHtcbiAgICAgICAgICAgIHNldERldmlzKGRkZS5hY29tcHRlLmRldmlzKTtcbiAgICAgICAgICAgIHNldExpZ25lcyhkZGUuYWNvbXB0ZS5kZXZpcy5saWduZXMpO1xuICAgICAgICAgICAgc2V0R3JvdXBlcyhkZGUuYWNvbXB0ZS5kZXZpcy5ncm91cGUpO1xuICAgICAgICB9XG4gICAgICAgIGlmIChkZGUudHlwZSA9PT0gXCJkZXZpc1wiKSB7XG4gICAgICAgICAgICBzZXREZXZpcyhkZGUuZGV2aXMpO1xuICAgICAgICAgICAgc2V0TGlnbmVzKGRkZS5saWduZXMpO1xuICAgICAgICAgICAgc2V0R3JvdXBlcyhkZGUuZ3JvdXBlKTtcbiAgICAgICAgfVxuICAgICAgICBpZiAoZGRlLnR5cGUgPT09IFwic2ltcGxlXCIpIHtcbiAgICAgICAgICAgIHNldERldmlzKGRkZS5kZXZpcyk7XG4gICAgICAgICAgICBzZXRMaWduZXMoZGRlLmxpZ25lcyk7XG4gICAgICAgICAgICBzZXRHcm91cGVzKGRkZS5ncm91cGUpO1xuICAgICAgICB9XG4gICAgICAgIHNldGZvcm1lKGZvcm1lKTtcbiAgICAgICAgc2V0RERlY29tcHRlcyhkZGVjKTtcbiAgICAgICAgdG90YWxhY29tcHRlcyA9IHNldFRvdGFsYWNvbXB0ZXMoJCgnI3RvdGFsYWNvbXB0ZXMnKS52YWwoKSlcbiAgICB9O1xuICAgIHVzZUVmZmVjdCgoKSA9PiB7XG4gICAgICAgIGZldGNoRmFjdHVyZSgpO1xuICAgIH0sIFtdKTtcblxuICAgIGNvbnN0IHJlbmRlckxpZ25lID0gc29ydGxpZ25lcy5tYXAoKGxpZ24pID0+IHtcbiAgICAgICAgaWYgKGZhY3R1cmUudHlwZSAhPT0gXCJkZWNvbXB0ZVwiKSB7XG4gICAgICAgICAgICByZXR1cm4gKFxuICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgIHtsaWduLmdyb3VwZSA9PT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT57bGlnbi5yZWZlcmVuY2V9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3ttYXhXaWR0aDogXCI1MDBweFwiLCBtaW5XaWR0aDogXCIyNTBweFwiLCB0ZXh0QWxpZ246IFwibGVmdFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGxpZ24uZGVzaWduYXRpb259fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+e2xpZ24uem9uZX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PntsaWduLnVuaXRlfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT57bGlnbi5xdWFudGl0ZX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZSBub3dyYXBlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxOdW1iZXJGb3JtYXQgbnVtYj17bGlnbi5wdX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PjxOdW1iZXJGb3JtYXQgbnVtYj17bGlnbi5yZW1pc2V9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnbm9uJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17bGlnbi5wdSAqIGxpZ24ucXVhbnRpdGV9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnbm9uJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17KChsaWduLnB1ICogbGlnbi5xdWFudGl0ZSkgKiAoKDEwMCAtIGxpZ24ucmVtaXNlKSAvIDEwMCkpfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgKTtcbiAgICAgICAgfVxuICAgICAgICByZXR1cm4gKDw+PC8+KTtcbiAgICB9KTtcbiAgICBjb25zdCByZW5kZXJHcm91cGUgPSBzb3J0Z3JvdXBlcy5tYXAoKGdyb3VwKSA9PiB7XG4gICAgICAgIGxldCBzdCA9IDA7XG4gICAgICAgIGNvbnN0IHJlbmRlckxpZ25lR3JvdXBlID0gc29ydGxpZ25lcy5tYXAoKGxpZ24pID0+IHtcbiAgICAgICAgICAgIGlmKGxpZ24uZ3JvdXBlICE9PSBudWxsKXtcbiAgICAgICAgICAgICAgICBpZiAobGlnbi5ncm91cGUuaWQgPT09IGdyb3VwLmlkKXtcbiAgICAgICAgICAgICAgICAgICAgaWYgKGRldmlzLmFhcmVtID09PSAnb3VpJykge1xuICAgICAgICAgICAgICAgICAgICAgICAgc3QgPSBzdCArICgobGlnbi5wdSAqIGxpZ24ucXVhbnRpdGUpICogKCgxMDAgLSBsaWduLnJlbWlzZSkgLyAxMDApKTtcbiAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHN0ID0gc3QgKyAobGlnbi5wdSAqIGxpZ24ucXVhbnRpdGUpO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIHJldHVybiAoXG4gICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+e2xpZ24ucmVmZXJlbmNlfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7bWF4V2lkdGg6IFwiNTAwcHhcIiwgbWluV2lkdGg6IFwiMjUwcHhcIiwgdGV4dEFsaWduOiBcImxlZnRcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGxpZ24uZGVzaWduYXRpb259fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PntsaWduLnpvbmV9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+e2xpZ24udW5pdGV9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+e2xpZ24ucXVhbnRpdGV9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZSBub3dyYXBlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxOdW1iZXJGb3JtYXQgbnVtYj17bGlnbi5wdX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17bGlnbi5yZW1pc2V9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnbm9uJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2xpZ24ucHUgKiBsaWduLnF1YW50aXRlfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ25vbicgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsoKGxpZ24ucHUgKiBsaWduLnF1YW50aXRlKSAqICgoMTAwIC0gbGlnbi5yZW1pc2UpIC8gMTAwKSl9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICApO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHJldHVybiAoPD48Lz4pO1xuICAgICAgICB9KTtcbiAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgIDw+XG5cbiAgICAgICAgICAgICAgICA8dHIgIGNsYXNzTmFtZT1cInRvZ29cIiBrZXk9e2dyb3VwLmlkLnRvU3RyaW5nKCl9PlxuICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19Pntncm91cC5yZWZlcmVuY2V9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjdcIiBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWxlZnRcIiBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogZ3JvdXAuZ3JvdXBlIH19Lz5cbiAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgIHtyZW5kZXJMaWduZUdyb3VwZX1cbiAgICAgICAgICAgICAgICA8dHIgIGNsYXNzTmFtZT1cInRvZ29cIiBrZXk9e2dyb3VwLmlkLnRvU3RyaW5nKCl9PlxuICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjdcIiBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LXJpZ2h0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8Yj5TT1VTLVRPVEFMOiA8TnVtYmVyRm9ybWF0IG51bWI9e3N0fS8+PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgIDwvPlxuICAgICAgICApO1xuICAgIH0pO1xuXG4gICAgYXN5bmMgZnVuY3Rpb24gZGVsRmFjdHVyZShyZXNwKSB7XG4gICAgICAgIGlmIChyZXNwLnZhbHVlICE9PSAnJykge1xuICAgICAgICAgICAgbGV0IGlkY2hhbiA9IGZhY3R1cmUuY2hhbnRpZXIuaWRcbiAgICAgICAgICAgICQoJyNDb25maXJtRGVsZXRlJykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgICQoJyNhY2NlcHQnKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAkKCcjQ29uZmlybURlbGV0ZScpLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICAgICAgbWV0aG9kOiAnREVMRVRFJyxcbiAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2NybS9mYWN0dXJlL2RlbC8nICsgZmFjdHVyZS5pZCxcbiAgICAgICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICcvY3JtL2NoYW50aWVyLycgKyBpZGNoYW5cbiAgICAgICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKVxuICAgICAgICB9XG4gICAgfVxuICAgICQoJyN1cGRhdGVGYScpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyN1cGRhdGVGYScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2Nsb3NlRmEnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkRmEnKS5jc3MoJ2Rpc3BsYXknLCAnJylcbiAgICAgICAgICAgIGNvbnN0IGlkY2hhbnRpZXIgPSAkKCcjaWRjaGFudGllcicpLnZhbCgpO1xuICAgICAgICAgICAgY29uc3QgaWRmYSA9ICQoJyNpZGZhY3R1cmUnKS52YWwoKTtcbiAgICAgICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vZmFjdHVyZS9wb3VyY2VudGFnZS8nICsgaWRjaGFudGllciArICcvJyArIGlkZmEsXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZFBvdXJjZW50YWdlRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlc3BkYXRhLCB0ZXh0U3RhdHVzLCBqcVhIUikge1xuICAgICAgICAgICAgICAgICAgICBsb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoeGhyLCByZXNwLCB0ZXh0KSB7XG4gICAgICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgfSlcbiAgICAgICAgfVxuICAgIH0pO1xuICAgICQoJyN1cGRhdGVNb24nKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjdXBkYXRlTW9uJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjY2xvc2VNb24nKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkTW9uJykuY3NzKCdkaXNwbGF5JywgJycpXG4gICAgICAgICAgICBjb25zdCBpZGNoYW50aWVyID0gJCgnI2lkY2hhbnRpZXInKS52YWwoKTtcbiAgICAgICAgICAgIGNvbnN0IGlkZmEgPSAkKCcjaWRmYWN0dXJlJykudmFsKCk7XG4gICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgIHR5cGU6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2ZhY3R1cmUvbW9udGFudC8nICsgaWRjaGFudGllciArICcvJyArIGlkZmEsXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZE1vbnRhbnRGb3JtJykuc2VyaWFsaXplT2JqZWN0KCkpLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzcGRhdGEsIHRleHRTdGF0dXMsIGpxWEhSKSB7XG4gICAgICAgICAgICAgICAgICAgIGxvY2F0aW9uLnJlbG9hZCgpO1xuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uICh4aHIsIHJlc3AsIHRleHQpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB9KVxuICAgICAgICB9XG4gICAgfSk7XG4gICAgJCgnI2FkZExpZ25lRmFjdHVyZScpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNhZGRMaWduZUZhY3R1cmUnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNjbG9zZUxpZ25lJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjbG9hZExpZ25lJykuY3NzKCdkaXNwbGF5JywgJycpXG4gICAgICAgICAgICAkKCcjZWRpdG9yMScpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjEnXS5nZXREYXRhKCkpXG4gICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgIHR5cGU6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2xpZ25lL2FkZC9mYWN0dXJlLycgKyBmYWN0dXJlLmlkLFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNmb3JtMycpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlc3BkYXRhLCB0ZXh0U3RhdHVzLCBqcVhIUikge1xuICAgICAgICAgICAgICAgICAgICBsb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoeGhyLCByZXNwLCB0ZXh0KSB7XG4gICAgICAgICAgICAgICAgICAgIGlmICh4aHIuc3RhdHVzID09ICc0MDQnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgfSlcbiAgICAgICAgfVxuICAgIH0pXG4gICAgJCgnI3VwZGF0ZUxpZ25lRmFjdHVyZScpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyN1cGRhdGVMaWduZUZhY3R1cmUnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNjbG9zZUxpZ25lJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjbG9hZExpZ25lJykuY3NzKCdkaXNwbGF5JywgJycpXG4gICAgICAgIH1cbiAgICAgICAgdmFyIGlkbGlnbmUgPSAkKCcjaWRsaWduZScpLnZhbCgpXG4gICAgICAgIHZhciBpZGZhY3R1cmUgPSAkKCcjaWRmYWN0dXJlJykudmFsKClcbiAgICAgICAgdmFyIGlkY2hhbnRpZXIgPSAkKCcjaWRjaGFudGllcicpLnZhbCgpXG4gICAgICAgICQoJyNlZGl0b3IxJykudmFsKENLRURJVE9SLmluc3RhbmNlc1snZWRpdG9yMSddLmdldERhdGEoKSlcbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIHR5cGU6ICdQVVQnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9saWduZS91cGRhdGUvZmFjdHVyZS8nICsgaWRsaWduZSArICcvJyArIGlkZmFjdHVyZSxcbiAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNmb3JtMycpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlc3BkYXRhLCB0ZXh0U3RhdHVzLCBqcVhIUikge1xuICAgICAgICAgICAgICAgIGlmIChqcVhIUi5zdGF0dXMgPT0gJzIwMCcpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI21vZGFsTGlnbmUnKS5tb2RhbCgndG9nZ2xlJylcbiAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSAnL2NybS9mYWN0dXJlLycgKyBpZGZhY3R1cmUgKyAnLycgKyBpZGNoYW50aWVyXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoeGhyLCByZXNwLCB0ZXh0KSB7XG4gICAgICAgICAgICAgICAgaWYgKHhoci5zdGF0dXMgPT0gJzUwMCcpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0sXG4gICAgICAgIH0pXG4gICAgfSlcbiAgICAkKCcjYWRkR3JvdXBGYWMnKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjYWRkR3JvdXBGYWMnKS5oaWRlKCk7XG4gICAgICAgICAgICAkKCcjY2xvc2VHcm91cEZhYycpLmhpZGUoKTtcbiAgICAgICAgICAgICQoJyNsb2FkR3JvdXBGYWMnKS5jc3MoJ2Rpc3BsYXknLCAnJyk7XG4gICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgIHR5cGU6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2dyb3VwZS9hZGQvJyArIGZhY3R1cmUuaWQgKyAnL2ZhY3R1cmUnLFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNhZGRHcm91cEZhY0Zvcm0nKS5zZXJpYWxpemVPYmplY3QoKSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChyZXNwZGF0YSwgdGV4dFN0YXR1cywganFYSFIpIHtcbiAgICAgICAgICAgICAgICAgICAgbG9jYXRpb24ucmVsb2FkKCk7XG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBlcnJvcjogZnVuY3Rpb24gKHhociwgcmVzcCwgdGV4dCkge1xuICAgICAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIH0pXG4gICAgICAgIH1cbiAgICB9KTtcbiAgICAkKCcjdXBkZUZhY3R1cmUnKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjdXBkZUZhY3R1cmUnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNjbG9zdUZhY3R1cmUnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkdUZhY3R1cmUnKS5jc3MoJ2Rpc3BsYXknLCAnJylcbiAgICAgICAgICAgIGNvbnN0IGlkZmEgPSAkKCcjaWRmYWN0dXJlJykudmFsKCk7XG4gICAgICAgICAgICAkKCcjZWRpdG9yMicpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjInXS5nZXREYXRhKCkpO1xuICAgICAgICAgICAgJCgnI2VkaXRvcjMnKS52YWwoQ0tFRElUT1IuaW5zdGFuY2VzWydlZGl0b3IzJ10uZ2V0RGF0YSgpKTtcbiAgICAgICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICAgICAgdHlwZTogJ1BVVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9mYWN0dXJlL3VwZGEvJyArICBpZGZhLFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyN1cGRGYWN0dXJlRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlc3BkYXRhLCB0ZXh0U3RhdHVzLCBqcVhIUikge1xuICAgICAgICAgICAgICAgICAgICBsb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoeGhyLCByZXNwLCB0ZXh0KSB7XG4gICAgICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgfSlcbiAgICAgICAgfVxuICAgIH0pO1xuICAgICQoJyN1cGRhdGVGb3JtZScpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyN1cGRhdGVGb3JtZScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWR1cEZvcm1lJykuY3NzKCdkaXNwbGF5JywgJycpXG4gICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICAkKCcjbW9kYWxNaXNlJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICAkKCcjZWRpdG9yNScpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjUnXS5nZXREYXRhKCkpO1xuXG4gICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9kZXZpcy9mb3JtZScsXG4gICAgICAgICAgICAgICAgZGF0YTogbmV3IEZvcm1EYXRhKCQoJyNhZGRmb3JtZScpWzBdKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogZmFsc2UsXG4gICAgICAgICAgICAgICAgcHJvY2Vzc0RhdGE6IGZhbHNlLFxuICAgICAgICAgICAgICAgIGNhY2hlOiBmYWxzZSxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICBsb2NhdGlvbi5yZWxvYWQoKVxuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgfVxuICAgIH0pXG5cbiAgICBpZihmYWN0dXJlLnR5cGUgPT09IFwiZGV2aXNcIil7XG4gICAgICAgIGlmKGRkZWNvbXB0ZXMpe1xuICAgICAgICAgICAgZGRlY29tcHRlcy5tYXAoKGRlY3MpID0+IHtcbiAgICAgICAgICAgICAgICBpZihkZWNzLmV0YXQgPT09ICd2YWxpZGUnKXtcbiAgICAgICAgICAgICAgICAgICAgdG90YWxkZWNvbXB0ZXMgPSB0b3RhbGRlY29tcHRlcyArIGRlY3MuYXBheWVyO1xuICAgICAgICAgICAgICAgICAgICB0b3RhbHJldGVudWUgPSB0b3RhbHJldGVudWUgKyAoZGVjcy52YWxldXIgKiBwYXJzZUZsb2F0KGRldmlzLmdhcmFudGllKS8xMDApICsgKGRlY3MudmFsZXVyICogcGFyc2VGbG9hdChkZXZpcy5maW5pdGlvbikvMTAwKSArIChkZWNzLnZhbGV1ciAqIHBhcnNlRmxvYXQoZGV2aXMucHJvcmF0YSkvMTAwKSArIChkZWNzLnZhbGV1ciAqIHBhcnNlRmxvYXQoZGV2aXMudHJjKS8xMDApO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgY29uc29sZS5sb2coZGV2aXMpO1xuXG4gICAgcmV0dXJuICg8PlxuICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvdyBjbGVhcmZpeFwiIHN0eWxlPXt7cGFkZGluZzogXCIwLjFjbVwifX0+XG4gICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1zbS0xMiB0ZXh0LWNlbnRlclwiPlxuXG4gICAgICAgICAgICAgICAgPGgzIGNsYXNzTmFtZT1cImZvbnQtYm9sZCBtLXQtLTEwIGNvbC1wdXJwbGVcIj48YSBocmVmPXtgL2NybS9jbGllbnQvJHtjbGllbnQuaWR9YH0gPntjbGllbnQubm9tY2xpZW50fTwvYT48L2gzPlxuICAgICAgICAgICAgICAgIDxoMyBjbGFzc05hbWU9XCJmb250LWJvbGQgbS10LS0xMCBjb2wtcGlua1wiPjxhIGhyZWY9e2AvY3JtL2NoYW50aWVyLyR7Y2hhbnRpZXIuaWR9YH0gPntjaGFudGllci5ub21jaGFudGllcn08L2E+PC9oMz5cblxuICAgICAgICAgICAgICAgIHtmYWN0dXJlLnR5cGUgPT09IFwiYWNvbXB0ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwibS10LS0xMCBjb2wtYmx1ZS1ncmV5IGZvbnQtYm9sZCBcIj5GQUNUVVJFIEQnQUNPTVBURSBOwrA6IDxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwicHJpXCI+e2ZhY3R1cmUubnVtZmFjdHVyZX08L3NwYW4+PC9oND5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJtLXQtLTEwIGNvbC1ibHVlLWdyZXkgZm9udC1ib2xkIFwiPkRFVklTIE7CsDogPGFcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBocmVmPXtgL2NybS9kZXZpcy8ke2ZhY3R1cmUuYWNvbXB0ZS5kZXZpcy5pZH0vJHtjaGFudGllci5pZH1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZvbnQtYm9sZCBwcmlcIj57ZmFjdHVyZS5hY29tcHRlLmRldmlzLmlkZGV2aXN9PC9hPjwvaDQ+XG4gICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB7ZmFjdHVyZS50eXBlID09PSBcInJldGVudWVcIiAmJlxuICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cIm0tdC0tMTAgY29sLWJsdWUtZ3JleSBmb250LWJvbGQgXCI+RkFDVFVSRSBEJ0FDT01QVEUgTsKwOiA8c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cInByaVwiPntmYWN0dXJlLm51bWZhY3R1cmV9PC9zcGFuPjwvaDQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwibS10LS0xMCBjb2wtYmx1ZS1ncmV5IGZvbnQtYm9sZCBcIj5ERVZJUyBOwrA6IDxhXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaHJlZj17YC9jcm0vZGV2aXMvJHtmYWN0dXJlLmFjb21wdGUuZGV2aXMuaWR9LyR7Y2hhbnRpZXIuaWR9YH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmb250LWJvbGQgcHJpXCI+e2ZhY3R1cmUuYWNvbXB0ZS5kZXZpcy5pZGRldmlzfTwvYT48L2g0PlxuICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAge2ZhY3R1cmUudHlwZSA9PT0gXCJkZXZpc1wiICYmXG4gICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwibS10LS0xMCBjb2wtYmx1ZS1ncmV5IGZvbnQtYm9sZCBcIj5GQUNUVVJFIERFIFNPTERFIE7CsDogPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJwcmlcIj57ZmFjdHVyZS5udW1mYWN0dXJlfTwvc3Bhbj48L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cIm0tdC0tMTAgY29sLWJsdWUtZ3JleSBmb250LWJvbGQgXCI+REVWSVMgTsKwOiA8YVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhyZWY9e2AvY3JtL2RldmlzLyR7ZmFjdHVyZS5kZXZpcy5pZH0vJHtjaGFudGllci5pZH1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZvbnQtYm9sZCBwcmlcIj57ZmFjdHVyZS5kZXZpcy5pZGRldmlzfTwvYT48L2g0PlxuICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICB7ZmFjdHVyZS50eXBlID09PSBcInNpbXBsZVwiICYmXG4gICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwibS10LS0xMCBjb2wtYmx1ZS1ncmV5IGZvbnQtYm9sZCBcIj5GQUNUVVJFIE7CsDogPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJwcmlcIj57ZmFjdHVyZS5udW1mYWN0dXJlfTwvc3Bhbj48L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cIm0tdC0tMTAgY29sLWJsdWUtZ3JleSBmb250LWJvbGQgXCI+REVWSVMgTsKwOiA8YVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhyZWY9e2AvY3JtL2RldmlzLyR7ZmFjdHVyZS5kZXZpcy5pZH0vJHtjaGFudGllci5pZH1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZvbnQtYm9sZCBwcmlcIj57ZmFjdHVyZS5kZXZpcy5pZGRldmlzfTwvYT48L2g0PlxuICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICB7ZmFjdHVyZS50eXBlID09PSBcImRlY29tcHRlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJtLXQtLTEwIGNvbC1ibHVlLWdyZXkgZm9udC1ib2xkIFwiPkZBQ1RVUkUgREUgRMOJQ09NUFRFIE7CsDogPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJwcmlcIj57ZmFjdHVyZS5udW1mYWN0dXJlfTwvc3Bhbj48L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cIm0tdC0tMTAgY29sLWJsdWUtZ3JleSBmb250LWJvbGQgXCI+RMOJQ09NUFRFIE7CsDogPGFcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBocmVmPXtgL2NybS9kZWNvbXB0ZS8ke2RlY29tcHRlLmlkfS8ke2NoYW50aWVyLmlkfWB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZm9udC1ib2xkICBwcmlcIj57ZGVjb21wdGUubnVtZGVjb21wdGV9PC9hPjwvaDQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwibS10LS0xMCBjb2wtYmx1ZS1ncmV5IGZvbnQtYm9sZCBcIj5ERVZJUyBOwrA6IDxhXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaHJlZj17YC9jcm0vZGV2aXMvJHtkZWNvbXB0ZS5kZXZpcy5pZH0vJHtjaGFudGllci5pZH1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZvbnQtYm9sZCBwcmlcIj57ZGVjb21wdGUuZGV2aXMuaWRkZXZpc308L2E+PC9oND5cbiAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgfVxuXG5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJ0bi1ncm91cFwiPlxuICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9jaGFudGllci8ke2NoYW50aWVyLmlkfWB9XG4gICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiZy1wdXJwbGUgIGFsaWduLWxlZnQgbS1iLTEwIHRleHQtd2hpdGUgd2F2ZXMtZWZmZWN0IFwiPkFDQ8OJREVSIEFVIENIQU5USUVSPC9hPlxuICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiZy1ibHVlIGFsaWduLWxlZnQgbS1iLTEwIHRleHQtd2hpdGUgd2F2ZXMtZWZmZWN0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCIgZGF0YS10YXJnZXQ9XCIjbW9kYWxGYWN0dXJlXCI+Q1LDiUVSXG4gICAgICAgICAgICAgICAgICAgICAgICBVTkUgRkFDVFVSRVxuICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYnRuLWdyb3VwIG0tdC0tNVwiPlxuICAgICAgICAgICAgICAgICAgICB7ZmFjdHVyZS5ldGF0ID09PSBcInNhdmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidG4gYmctcGluayB0ZXh0LXdoaXRlXCIgb25DbGljaz17ZGVsRmFjdHVyZX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS10cmFzaFwiLz4gU1VQUFJJTUVSXG4gICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiZy1pbmZvIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdGFyZ2V0PVwiI21vZGFsTWlzZVwiPk1JU0UgRU4gRk9STUVcbiAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJ0bi1sYWJlbGVkIGJnLWdyZWVuIGJ0bi1zbSB0ZXh0LXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRhcmdldD1cIiNtb2RhbEluZm9cIj4tIElORk9STUFUSU9OU1xuICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgIHtmYWN0dXJlLnR5cGUgPT09IFwicmV0ZW51ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICB7ZmFjdHVyZS5ldGF0ID09PSBcInNhdmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYnRuLWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJ0bi1sYWJlbGVkIGJnLXByaSB0ZXh0LXdoaXRlIGJ0bi1zbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiIGRhdGEtdGFyZ2V0PVwiI21vZGFsUG91clwiPkZBQ1RVUkUgU1VSXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBQT1VSQ0VOVEFHRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWxhYmVsZWQgYnRuLXByaW1hcnkgYnRuLXNtXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCIgZGF0YS10YXJnZXQ9XCIjbW9kYWxNb250YW50XCI+RkFDVFVSRSBTVVJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIE1PTlRBTlRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJ0bi1sYWJlbGVkIGJnLXByaSB0ZXh0LXdoaXRlIGJ0bi1zbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10YXJnZXQ9XCIjbW9kYWxMaWduZVwiPkFKT1VURVIgVU5FIExJR05FXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAge2ZhY3R1cmUudHlwZSA9PT0gXCJhY29tcHRlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLmV0YXQgPT09IFwic2F2ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJidG4tZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWxhYmVsZWQgYmctcHJpIHRleHQtd2hpdGUgYnRuLXNtXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCIgZGF0YS10YXJnZXQ9XCIjbW9kYWxQb3VyXCI+RkFDVFVSRSBTVVJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBPVVJDRU5UQUdFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBidG4tbGFiZWxlZCBidG4tcHJpbWFyeSBidG4tc21cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIiBkYXRhLXRhcmdldD1cIiNtb2RhbE1vbnRhbnRcIj5GQUNUVVJFIFNVUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgTU9OVEFOVFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIHtmYWN0dXJlLnR5cGUgPT09IFwic2ltcGxlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLmV0YXQgPT09IFwic2F2ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJidG4tZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWxhYmVsZWQgYnRuLXByaW1hcnkgYnRuLXNtXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCIgZGF0YS10YXJnZXQ9XCIjbW9kYWxMaWduZVwiPkFKT1VURVIgVU5FXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBMSUdORVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWxhYmVsZWQgYmctZ3JlZW4gYnRuLXNtIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdGFyZ2V0PVwiI21vZGFsSW5mb1wiPi0gSU5GT1JNQVRJT05TXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJidG4tZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidG4gYmctaW5kaWdvIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e2hhbmRsZVByaW50fT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtcHJpbnRcIi8+IElNUFJFU1NJT04gQVZFQyBFTlTDilRFXG4gICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9kb2MvYXR0YWNoZS8ke2ZhY3R1cmUuaWR9L2ZhY3R1cmUvbm9uYH1cbiAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJnLWRlZXAtb3JhbmdlIHRleHQtd2hpdGVcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZW52ZWxvcGVcIi8+IE1BSUw8L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidG4gYmctcHJpIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e3BkZkZhY3R1cmV9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYXMgZmEtZmlsZS1wZGZcIi8+IFBERiBTQU5TIEVOVMOKVEVcbiAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG5cbiAgICAgICAgICAgICAgICAgICAgPFJlYWN0SFRNTFRhYmxlVG9FeGNlbFxuICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJ0ZXN0LXRhYmxlLXhscy1idXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJnLWdyZWVuIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgdGFibGU9XCJkZXYyZXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9e2BGYWN0dXJlIE7CsCAke2ZhY3R1cmUubnVtZmFjdHVyZX1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRVhDRUxcIi8+XG5cbiAgICAgICAgICAgICAgICAgICAge2RldmlzLmV0YXQgIT09IFwidmFsaWRlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gY2xhc3NOYW1lPVwiYnRuIGJnLXBpbmsgdGV4dC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e2RlbEZhY3R1cmV9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdHJhc2hcIi8+IFNVUFBSSU1FUlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgPGJyLz48YnIvPlxuICAgICAgICAgICAgICAgICAgICB7ZmFjdHVyZS5ldGF0ID09PSBcInZhbGlkZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiZm9udC1ib2xkIGNvbC1ibGFja1wiPkNFVFRFIEZBQ1RVUkUgRVNUIFZBTElEw4lFPC9oND5cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDxici8+PGJyLz5cbiAgICAgICAgICAgICAgICB7ZGV2aWNlVHlwZSAhPT0gXCJtb2JpbGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGlkPVwiZGV2MmV4Y2VsXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPFByaW50RmFjdHVyZSBkZWNvbXB0ZT17ZGVjb21wdGV9IGxpZ25lcz17bGlnbmVzfSBncm91cGVzPXtncm91cGVzfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZWY9e2NvbXBvbmVudFJlZn0gdG90YWxyZXRlbnVlID17dG90YWxyZXRlbnVlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZW5kZXJMaWduZT17cmVuZGVyTGlnbmV9IHJlbmRlckdyb3VwZT17cmVuZGVyR3JvdXBlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb3JtZT17Zm9ybWV9IGNoYW50aWVyPXtjaGFudGllcn0gY2xpZW50PXtjbGllbnR9IGRldmlzPXtkZXZpc31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmFjdHVyZT17ZmFjdHVyZX0gdG90YWxkZWNvbXB0ZXM9e3RvdGFsZGVjb21wdGVzfSB0b3RhbGFjb21wdGVzPXt0b3RhbGFjb21wdGVzfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz48YnIvPjxici8+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgPC9kaXY+XG4gICAgPC8+KTtcblxufVxudHJ5IHtcbiAgICBjb25zdCBjb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2hhY29udGVudEZhY3R1cmUnKTtcbiAgICBjb25zdCByb290ID0gY3JlYXRlUm9vdChjb250YWluZXIpO1xuICAgIHJvb3QucmVuZGVyKDxGYWN0dXJlLz4pO1xufSBjYXRjaCAoZSkge1xufSIsImltcG9ydCBSZWFjdCBmcm9tICdyZWFjdCc7XG5pbXBvcnQgTnVtYmVyRm9ybWF0IGZyb20gXCIuLy4uLy4uL2ZvbmN0aW9ucy9OdW1iZXJGb3JtYXRcIjtcbmltcG9ydCAkIGZyb20gXCJqcXVlcnlcIjtcbmltcG9ydCBudW1iZXJUb0xldHRlcnMgZnJvbSBcIm51bWJlci0yLWxldHRlcnNcIjtcblxuZXhwb3J0IGNvbnN0IFByaW50RmFjdHVyZSA9IFJlYWN0LmZvcndhcmRSZWYoKHByb3BzLCByZWYpID0+IHtcblxuICAgIGxldCBkZWNvbXB0ZSA9IHByb3BzLmRlY29tcHRlO1xuICAgIGxldCB0b3RhbGRlY29tcHRlcyA9IHByb3BzLnRvdGFsZGVjb21wdGVzO1xuICAgIGxldCB0b3RhbHJldGVudWUgPSBwcm9wcy50b3RhbHJldGVudWU7XG4gICAgbGV0IHRvdGFsYWNvbXB0ZXMgPSBwcm9wcy50b3RhbGFjb21wdGVzO1xuICAgIGxldCBmYWN0dXJlID0gcHJvcHMuZmFjdHVyZTtcbiAgICBsZXQgY2xpZW50ID0gcHJvcHMuY2xpZW50O1xuICAgIGxldCBkZXZpcyA9IHByb3BzLmRldmlzO1xuICAgIGxldCBmb3JtZSA9IHByb3BzLmZvcm1lO1xuICAgIGxldCBmYWNkYXRlID0gJChcIiNmYWNkYXRlXCIpLnZhbCgpO1xuICAgIGxldCBtb2NvZGUgPSAkKFwiI21vY29kZVwiKS52YWwoKTtcbiAgICBsZXQgcmVuZGVyTGlnbmUgPSBwcm9wcy5yZW5kZXJMaWduZTtcbiAgICBsZXQgcmVuZGVyR3JvdXBlID0gcHJvcHMucmVuZGVyR3JvdXBlO1xuXG4gICAgY29uc3QgbnVtYmVyVG9MZXR0ZXJzID0gcmVxdWlyZSgnbnVtYmVyLTItbGV0dGVycycpO1xuXG4gICAgbGV0IGFjb21wdGUgPSAwO1xuICAgIGxldCB0b3RhbGh0c29sZGUgPSAwO1xuICAgIGxldCB0b3RhbHR2YSA9IDA7XG4gICAgbGV0IHRvdGFsdHRjc29sZGUgPSAwO1xuICAgIGxldCBhZGRpID0gMDtcbiAgICBsZXQgc3R2YSA9IFwiXCI7XG5cbiAgICBpZiAoZGVjb21wdGUuZGVkdWN0aW9uID09PSBcInBhcnRpZWxsZVwiKSB7XG4gICAgICAgIGFjb21wdGUgPSAoZGVjb21wdGUudmFsZXVyICogZGVjb21wdGUuYWNvbXB0ZSkgLyAxMDA7XG4gICAgfVxuICAgIGlmIChkZWNvbXB0ZS5kZWR1Y3Rpb24gPT09IFwiY29tcGxldGVcIikge1xuICAgICAgICBhY29tcHRlID0gKGRldmlzLnRvdGFsaHQgKiBkZWNvbXB0ZS5hY29tcHRlKSAvIDEwMDtcbiAgICB9XG4gICAgaWYgKGRlY29tcHRlLmRlZHVjdGlvbiA9PT0gXCJhdWN1bmVcIikge1xuICAgICAgICBhY29tcHRlID0gMDtcbiAgICB9XG5cbiAgICBhZGRpID0gcGFyc2VGbG9hdChkZXZpcy5maW5pdGlvbikgKyBwYXJzZUZsb2F0KGRldmlzLnByb3JhdGEpICsgcGFyc2VGbG9hdChkZXZpcy5nYXJhbnRpZSkgKyBwYXJzZUZsb2F0KGRldmlzLnRyYyk7XG5cblxuXG4gICAgaWYgKGZhY3R1cmUudHlwZSA9PT0gXCJkZXZpc1wiKSB7XG4gICAgICAgIHRvdGFsaHRzb2xkZSA9IGRldmlzLnRvdGFsaHQgLSB0b3RhbGFjb21wdGVzIC0gdG90YWxkZWNvbXB0ZXMgKyB0b3RhbHJldGVudWU7XG4gICAgICAgIGlmIChkZXZpcy5wdHZhID09PSBcIm91aVwiKSB7XG4gICAgICAgICAgICB0b3RhbHR2YSA9ICh0b3RhbGh0c29sZGUgKiBkZXZpcy50dmEpIC8gMTAwO1xuICAgICAgICAgICAgdG90YWx0dGNzb2xkZSA9IHRvdGFsaHRzb2xkZSArIHRvdGFsdHZhO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgdG90YWx0dmEgPSAodG90YWxodHNvbGRlICogZGV2aXMudHZhKSAvIDEwMDtcbiAgICAgICAgICAgIHRvdGFsdHRjc29sZGUgPSB0b3RhbGh0c29sZGU7XG4gICAgICAgIH1cbiAgICB9XG4gICAgaWYgKGRldmlzLnB0dmEgIT09ICdvdWknKSB7XG4gICAgICAgIHN0dmEgPSBcIihub24gZmFjdHVyw6llKVwiO1xuICAgIH1cblxuICAgIHJldHVybiAoXG4gICAgICAgIDw+XG4gICAgICAgICAgICA8ZGl2IHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgd2lkdGg6IFwiMjFjbVwiLFxuICAgICAgICAgICAgICAgIG1pbkhlaWdodDogXCIyOS43Y21cIixcbiAgICAgICAgICAgICAgICBib3hTaGFkb3c6IFwiMCAwIDAuNWNtIHJnYmEoMCwwLDAsMC41KVwiLFxuICAgICAgICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogXCIjRkZGXCJcbiAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaGVhZGVyXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgd2lkdGg6IGZvcm1lLmhlYWRlcldpdGggKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgIGhlaWdodDogZm9ybWUuaGVhZGVySGVpZ2h0ICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IFwiI0ZGRlwiXG4gICAgICAgICAgICAgICAgfX0+PC9kaXY+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJib29kXCIgc3R5bGU9e3twYWRkaW5nTGVmdDogXCIxY21cIiwgcGFkZGluZ1JpZ2h0OiBcIjFjbVwifX0+XG4gICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLnR5cGUgPT09IFwiZGVjb21wdGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgYWxpZ249XCJyaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3tib3JkZXI6IFwibm9uZVwiLCB0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj57Y2xpZW50Lm5vbWNsaWVudC50b1VwcGVyQ2FzZSgpfTwvYj48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQuY29udHJpYnVhYmxlfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5hZHJlc3NlfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5tYWlsfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJsZWZ0XCI+PGI+PHU+REFURTo8L3U+PC9iPiB7ZmFjZGF0ZX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJsZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+PHU+UsOJRsOJUkVOQ0U6PC91PjwvYj4gPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogZmFjdHVyZS5mYWN0cmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3M9XCJwcmludGVyXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwibGVmdFwiLCBjb2xvcjogXCJGRkZcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNvbFNwYW49XCI1XCI+PGI+MS4gRMOJUEVOU0VTIEVOR0FHw4lFUzwvYj48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjNcIiBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT5NT05UQU5UIFRPVEFMIEhUPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiMlwiIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy50b3RhbGh0fS8+PC9iPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzPVwicHJpbnRlclwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImxlZnRcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgY2xhc3NOYW1lPVwiYm9yZGVcIj48Yj4yLiBNT0RBTElUw4lTIERFIFLDiEdMRU1FTlQ8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgY2xhc3NOYW1lPVwiYm9yZGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7dGV4dEFsaWduOiBcImxlZnRcIiwgcGFkZGluZ0xlZnQ6IFwiIDIwcHhcIiwgY29sb3I6IFwiIzRlNzNkZlwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+QVZBTkNFTUVOVCBERVMgVFJBVkFVWDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZWNvbXB0ZS5hdmFuY2VtZW50fS8+JTwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RlY29tcHRlLnZhbGV1cn0vPjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBjb2xTcGFuPVwiNVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t0ZXh0QWxpZ246IFwibGVmdFwiLCBwYWRkaW5nTGVmdDogXCIgMjBweFwiLCBjb2xvcjogXCIjNGU3M2RmXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj7DgCBEw4lEVUlSRTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT5Ew4lEVUNUSU9OIEFDT01QVEUgREVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBERU1BUlJBR0VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+PGI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RlY29tcHRlLmFjb21wdGV9Lz4lPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+PE51bWJlckZvcm1hdCBudW1iPXthY29tcHRlfS8+PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPkTDiURVQ1RJT04gUkVURU5VRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEdBUkFOVElFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZWNvbXB0ZS5nYXJhbnRpZX0vPiVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eygoZGVjb21wdGUudmFsZXVyICogZGVjb21wdGUuZ2FyYW50aWUpIC8gMTAwKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPkTDiURVQ1RJT04gUkVURU5VRSBERVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEZJTklUSU9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZWNvbXB0ZS5maW5pdGlvbn0vPiVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eygoZGVjb21wdGUudmFsZXVyICogZGVjb21wdGUuZmluaXRpb24pIC8gMTAwKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPkTDiURVQ1RJT04gQ09NUFRFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUFJPUkFUQVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGVjb21wdGUucHJvcmF0YX0vPiVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eygoZGVjb21wdGUudmFsZXVyICogZGVjb21wdGUucHJvcmF0YSkgLyAxMDApfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+RMOJRFVDVElPTiBSRVRFTlVFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQVNTVVJBTkNFIFRSQ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGVjb21wdGUudHJjfS8+JVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17KChkZWNvbXB0ZS52YWxldXIgKiBkZWNvbXB0ZS50cmMpIC8gMTAwKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPkTDiURVQ1RJT05cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBERVMgRMOJQ09NUFRFU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZWNvbXB0ZS5jb3VudGRlY29tcGV9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJsZWZ0XCIsIHBhZGRpbmdMZWZ0OiBcIiAyMHB4XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYm9yZGVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5TT0lUPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPk1PTlRBTlQgREUgTEFcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBTSVRVQVRJT04gw4AgRMOJTElWUkVSIEhUXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RlY29tcHRlLmFwYXllcn0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJvcmRlXCI+VFZBIHtkZXZpcy50dmF9JVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsoKGRlY29tcHRlLmFwYXllciAqIGRldmlzLnR2YSkgLyAxMDApfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIiwgY29sb3I6IFwiIzRlNzNkZlwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48Yj5NT05UQU5UXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgREUgTEFcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBTSVRVQVRJT05cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICDDgCBEw4lMSVZSRVIgVFRDPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwiLCBjb2xvcjogXCIjNGU3M2RmXCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPjxOdW1iZXJGb3JtYXQgbnVtYj17KHBhcnNlRmxvYXQoZGVjb21wdGUudHRjKSl9Lz48L2I+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fT48L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e3RleHRBbGlnbjogXCJsZWZ0XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQXJyw6p0w6kgbGEgcHLDqXNlbnRlIGZhY3R1cmUgw6AgbGEgc29tbWUgZGU6PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+PHNwYW4+e251bWJlclRvTGV0dGVycyhwYXJzZUludCgoZGVjb21wdGUudHRjKSksIHtsYW5nOiAnZnInfSl9IHttb2NvZGV9PC9zcGFuPjwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3A+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2Zsb2F0OiBcInJpZ2h0XCIsIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwifX0+U0lHTkFUVVJFIEFVVE9SSVPDiUU8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz48YnIvPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhY3R1cmUuaW5mb3JtYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tmbG9hdDogXCJsZWZ0XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19Pjx1PkNPTkRJVElPTlMgRVQgTU9EQUxJVMOJUyBERVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBBSUVNRU5UPC91PjwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0+PC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjb2xvcjogXCIjMDAwMDAwXCJ9fT57ZmFjdHVyZS5pbmZvcm1hdGlvbn08L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPn1cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLnR5cGUgPT09IFwiYWNvbXB0ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBhbGlnbj1cInJpZ2h0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e2JvcmRlcjogXCJub25lXCIsIHRleHRBbGlnbjogXCJjZW50ZXJcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPntjbGllbnQubm9tY2xpZW50fTwvYj48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQuY29udHJpYnVhYmxlfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5hZHJlc3NlfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5tYWlsfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJsZWZ0XCI+PGI+PHU+REFURTo8L3U+PC9iPiB7ZmFjZGF0ZX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJsZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+PHU+UsOJRsOJUkVOQ0U6PC91PjwvYj4gRkFDVFVSRSBEJ0FDT01QVEUgREVWSVMgTsK6IHtkZXZpcy5pZGRldmlzfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGZhY3R1cmUuZmFjdHJlZmVyZW5jZX19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3M9XCJwcmludGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFLDiUYgPC90aD59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtYXhXaWR0aDogXCI1MDBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1pbldpZHRoOiBcIjI1MHB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dEFsaWduOiBcImxlZnRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+RMOJU0lHTkFUSU9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+U0VDVElPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5VTklUw4k8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+UVTDiTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5QUklYJm5ic3A7VS48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PiVSRU08L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+TU9OVEFOVCZuYnNwO0hUPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyR3JvdXBlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyTGlnbmV9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNVwiPjxiPiBSRU1JU0UgVE9UQUxFIDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLnZyZW1pc2V9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdub24nICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjRcIj48Yj4gUkVNSVNFIFRPVEFMRSA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PCBOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy52cmVtaXNlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjVcIj48Yj4gUkVNSVNFICg8IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLnJlbXRodH0vPiUpIDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMudnJlbWlzZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ25vbicgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNFwiPjxiPiBSRU1JU0UgKDwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMucmVtdGh0fS8+JSkgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMudnJlbWlzZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIj48Yj4gVE9UQUwgSFQgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCI0XCI+PGI+IFRPVEFMIEhUIDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PCBOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLnRvdGFsaHR9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+IFRPVEFMIEhUIDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiM1wiPjxiPiBUT1RBTCBIVCA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMucmVtdGh0fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy50b3RhbGh0fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+IEFDT01QVEUgKDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLmFjb21wdGUucG91cmNlbnRhZ2V9Lz4lKSBIVCA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjRcIj48Yj4gQUNPTVBURSAoPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZhY3R1cmUuYWNvbXB0ZS5wb3VyY2VudGFnZX0vPiUpIEhUIDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PCBOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZhY3R1cmUudG90YWxodH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPjxiPiBBQ09NUFRFICg8TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS5hY29tcHRlLnBvdXJjZW50YWdlfS8+JSkgSFQgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCIzXCI+PGI+IEFDT01QVEUgKDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLmFjb21wdGUucG91cmNlbnRhZ2V9Lz4lKSBIVCA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS50b3RhbGh0fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWJhc2V0dmEgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPjxiPiBCQVNFIFRWQTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNFwiPjxiPiBCQVNFIFRWQTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy5iYXNldHZhICogKChmYWN0dXJlLnRvdGFsdHRjIC0gZmFjdHVyZS50b3RhbGh0KSAvIGRldmlzLnZ0dmEpfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIiBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIj48Yj4gQkFTRSBUVkE8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjNcIj48Yj4gQkFTRSBUVkE8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLmJhc2V0dmEgKiAoKGZhY3R1cmUudG90YWx0dGMgLSBmYWN0dXJlLnRvdGFsaHQpIC8gZGV2aXMudnR2YSl9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYmFzZXR2YSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5UVkEge2RldmlzLnR2YX0lIHtzdHZhfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5UVkEge2RldmlzLnR2YX0lIHtzdHZhfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS52dHZhfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5UVkEge2RldmlzLnR2YX0lIHtzdHZhfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiM1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5UVkEge2RldmlzLnR2YX0lIHtzdHZhfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS52dHZhfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0QWxpZ246IFwicmlnaHRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjRDNEM0QzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PjxiPk5FVCDDgCBQQVlFUjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjRcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHRBbGlnbjogXCJyaWdodFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+PGI+TkVUIMOAIFBBWUVSPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRldSB0ZXh0LXJpZ2h0IG5vd3JhcGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIiwgY29sb3I6IFwiIzRlNzNkZlwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS50b3RhbHR0Y30vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIiBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0QWxpZ246IFwicmlnaHRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjRDNEM0QzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PjxiPk5FVCDDgCBQQVlFUjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjNcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHRBbGlnbjogXCJyaWdodFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIixcblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckJvdHRvbTogXCIxcHggc29saWQgI0QzRDNEM1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT48Yj5ORVQgw4AgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRldSB0ZXh0LXJpZ2h0IG5vd3JhcGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS50b3RhbHR0Y30vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19PjwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIGNsYXNzTmFtZT1cInRleHQtbGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBcnLDqnTDqSBsYSBwcsOpc2VudGUgZmFjdHVyZSDDoCBsYSBzb21tZSBkZTo8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj57bnVtYmVyVG9MZXR0ZXJzKHBhcnNlSW50KGZhY3R1cmUudG90YWx0dGMpLCB7bGFuZzogJ2ZyJ30pfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2I+PHNwYW4+PGI+IHtkZXZpcy5tb25uYWllLmNvZGV9PC9iPjwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2Zsb2F0OiBcInJpZ2h0XCIsIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwifX0+U0lHTkFUVVJFIEFVVE9SSVPDiUU8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz48YnIvPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhY3R1cmUuaW5mb3JtYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7ZmxvYXQ6IFwibGVmdFwiLCBjb2xvcjogXCIjNGU3M2RmXCJ9fT48dT5DT05ESVRJT05TIEVUIE1PREFMSVTDiVMgREVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBQQUlFTUVOVDwvdT48L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19PjwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y29sb3I6IFwiIzAwMDAwMFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmYWN0dXJlLmluZm9ybWF0aW9ufX0+PC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB7ZmFjdHVyZS50eXBlID09PSBcInJldGVudWVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgYWxpZ249XCJyaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3tib3JkZXI6IFwibm9uZVwiLCB0ZXh0QWxpZ246IFwibGVmdFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+e2NsaWVudC5ub21jbGllbnR9PC9iPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5jb250cmlidWFibGUgIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD57Y2xpZW50LmNvbnRyaWJ1YWJsZX08YnIvPjwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Y2xpZW50LmFkcmVzc2UgIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD57Y2xpZW50LmFkcmVzc2V9PGJyLz48Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5tYWlsICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+e2NsaWVudC5tYWlsfTxici8+PC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwibGVmdFwiPjxiPjx1PkRBVEU6PC91PjwvYj4ge2ZhY2RhdGV9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwibGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPjx1PlLDiUbDiVJFTkNFOjwvdT48L2I+IEZBQ1RVUkUgRCdBQ09NUFRFIERFVklTIE7CuiB7ZGV2aXMuaWRkZXZpc308YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmYWN0dXJlLmZhY3RyZWZlcmVuY2V9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzPVwicHJpbnRlclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBSw4lGIDwvdGg+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWF4V2lkdGg6IFwiNTAwcHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtaW5XaWR0aDogXCIyNTBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHRBbGlnbjogXCJsZWZ0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PkTDiVNJR05BVElPTlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PlNFQ1RJT048L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+VU5JVMOJPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PlFUw4k8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+UFJJWCZuYnNwO1UuPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19Pk1PTlRBTlQmbmJzcDtIVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+IFNPVVMtVE9UQUwgSFQgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCI0XCI+PGI+IFNPVVMtVE9UQUwgSFQgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e3RodH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIiBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIj48Yj4gU09VUy1UT1RBTCBIVCA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjNcIj48Yj4gU09VUy1UT1RBTCBIVCA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17dGh0fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIj48Yj4gUkVURU5VRSBQUk9WSVNPSVJFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgKDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS5hY29tcHRlLnBvdXJjZW50YWdlfS8+JSkgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCI0XCI+PGI+IFJFVEVOVUUgUFJPVklTT0lSRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICg8TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZhY3R1cmUuYWNvbXB0ZS5wb3VyY2VudGFnZX0vPiUpPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PCBOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLnRvdGFsaHR9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPjxiPiBSRVRFTlVFIFBST1ZJU09JUkVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAoPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLmFjb21wdGUucG91cmNlbnRhZ2V9Lz4lKTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiM1wiPjxiPiBSRVRFTlVFIFBST1ZJU09JUkVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAoPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLmFjb21wdGUucG91cmNlbnRhZ2V9Lz4lKTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS50b3RhbGh0fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+U09VUy1UT1RBTCBBUFLDiFNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBSRVRFTlVFPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCI0XCI+PGI+U09VUy1UT1RBTCBBUFLDiFNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBSRVRFTlVFPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PCBOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLnRvdGFsaHR9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPjxiPlNPVVMtVE9UQUwgQVBSw4hTXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUkVURU5VRTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiM1wiPjxiPlNPVVMtVE9UQUwgQVBSw4hTXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUkVURU5VRTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS50b3RhbGh0fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+VEFVWCBCTlBDPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCI0XCI+PGI+VEFVWCBCTlBDPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PCBOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLnRvdGFsaHR9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPjxiPlRBVVggQk5QQzwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiM1wiPjxiPlRBVVggQk5QQzwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS50b3RhbGh0fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYmFzZXR2YSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+IEJBU0UgVFZBPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCI0XCI+PGI+IEJBU0UgVFZBPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy5iYXNldHZhICogKChmYWN0dXJlLnRvdGFsdHRjIC0gZmFjdHVyZS50b3RhbGh0KSAvIGRldmlzLnZ0dmEpfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+IEJBU0UgVFZBPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCIzXCI+PGI+IEJBU0UgVFZBPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy5iYXNldHZhICogKChmYWN0dXJlLnRvdGFsdHRjIC0gZmFjdHVyZS50b3RhbGh0KSAvIGRldmlzLnZ0dmEpfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYmFzZXR2YSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPjxiPlRWQSB7c3R2YX08L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjRcIj48Yj5UVkEge3N0dmF9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLnZ0dmF9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIiBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIj48Yj5UVkEge3N0dmF9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCIzXCI+PGI+VFZBIHtzdHZhfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS52dHZhfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dEFsaWduOiBcInJpZ2h0XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sb3I6IFwiIzRlNzNkZlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBcIjEycHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+PGI+TkVUIMOAIFBBWUVSPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNFwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dEFsaWduOiBcInJpZ2h0XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sb3I6IFwiIzRlNzNkZlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBcIjEycHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+PGI+TkVUIMOAIFBBWUVSPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZXUgdGV4dC1yaWdodCBub3dyYXBlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjEycHhcIiwgdGV4dEFsaWduOiBcInJpZ2h0XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS50b3RhbHR0Y30vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIiBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0QWxpZ246IFwicmlnaHRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMTJweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckJvdHRvbTogXCIxcHggc29saWQgI0QzRDNEM1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT48Yj5ORVQgw4AgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiIGNvbFNwYW49XCIzXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0QWxpZ246IFwicmlnaHRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMTJweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckJvdHRvbTogXCIxcHggc29saWQgI0QzRDNEM1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT48Yj5ORVQgw4AgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRldSB0ZXh0LXJpZ2h0IG5vd3JhcGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMTJweFwiLCB0ZXh0QWxpZ246IFwicmlnaHRcIiwgY29sb3I6IFwiIzRlNzNkZlwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLnRvdGFsdHRjfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19PjwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIGNsYXNzTmFtZT1cInRleHQtbGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBcnLDqnTDqSBsYSBwcsOpc2VudGUgZmFjdHVyZSDDoCBsYSBzb21tZSBkZTo8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj57bnVtYmVyVG9MZXR0ZXJzKHBhcnNlSW50KGZhY3R1cmUudG90YWx0dGMpLCB7bGFuZzogJ2ZyJ30pfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2I+PHNwYW4+PGI+IHtkZXZpcy5tb25uYWllLmNvZGV9PC9iPjwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2Zsb2F0OiBcInJpZ2h0XCIsIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwifX0+U0lHTkFUVVJFIEFVVE9SSVPDiUU8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz48YnIvPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhY3R1cmUuaW5mb3JtYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7ZmxvYXQ6IFwibGVmdFwiLCBjb2xvcjogXCIjNGU3M2RmXCJ9fT48dT5DT05ESVRJT05TIEVUIE1PREFMSVTDiVMgREVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBQQUlFTUVOVDwvdT48L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19PjwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y29sb3I6IFwiIzAwMDAwMFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmYWN0dXJlLmluZm9ybWF0aW9ufX0+PC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB7ZmFjdHVyZS50eXBlID09PSBcImRldmlzXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGFsaWduPVwicmlnaHRcIiBzdHlsZT17e21hcmdpblRvcDogZm9ybWUudGV0ZURCfX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e2JvcmRlcjogXCJub25lXCIsIHRleHRBbGlnbjogXCJjZW50ZXJcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPntjbGllbnQubm9tY2xpZW50fTwvYj48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQuY29udHJpYnVhYmxlICE9PSBudWxsICYmIDw+e2NsaWVudC5jb250cmlidWFibGV9IDxici8+PC8+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQuYWRyZXNzZSAhPT0gbnVsbCAmJiA8PiB7Y2xpZW50LmFkcmVzc2V9IDxici8+PC8+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQubWFpbCAhPT0gbnVsbCAmJiA8PntjbGllbnQubWFpbH0gPGJyLz4gPC8+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwibGVmdFwiPjxiPjx1PkRBVEU6PC91PjwvYj4ge2ZhY2RhdGV9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwibGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPjx1PlLDiUbDiVJFTkNFOjwvdT48L2I+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBGQUNUVVJFIERFIFNPTERFPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogZmFjdHVyZS5mYWN0cmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJwcmludGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+UsOJRjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3ttYXhXaWR0aDogXCI1MDBweFwiLCBtaW5XaWR0aDogXCIyNTBweFwiLCB0ZXh0QWxpZ246IFwibGVmdFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgRMOJU0lHTkFUSU9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+U0VDVElPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5VTklUw4k8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+UVTDiTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fSBjbGFzc05hbWU9XCJtdzEwMFwiPlBSSVgmbmJzcDtVLjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+UkVNICU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0gY2xhc3NOYW1lPVwibXcxMDBcIj5NT05UQU5UJm5ic3A7SFQ8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyR3JvdXBlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyTGlnbmV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjRcIj48Yj4gQkFTRSBUVkE8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLmJhc2V0dmEgKiAoKGZhY3R1cmUudG90YWx0dGMgLSBmYWN0dXJlLnRvdGFsaHQpIC8gZGV2aXMudnR2YSl9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCIzXCI+PGI+IEJBU0UgVFZBPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy5iYXNldHZhICogKChmYWN0dXJlLnRvdGFsdHRjIC0gZmFjdHVyZS50b3RhbGh0KSAvIGRldmlzLnZ0dmEpfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJiA8dGQ+PC90ZD59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5ERVZJUyBUT1RBTCBIVDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5ERVZJUyBUT1RBTCBIVDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0IG51bWI9e2RldmlzLnRvdGFsaHR9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmIDx0ZD48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPkTDiURVQ1RJT04gREVTIEFDT01QVEVTPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPkTDiURVQ1RJT04gREVTIEFDT01QVEVTPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJyaWdodFwiIGNsYXNzTmFtZT1cImJhcmRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17dG90YWxhY29tcHRlc30vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiYgPHRkPjwvdGQ+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+RMOJRFVDVElPTiBERVMgRMOJQ09NUFRFUzwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5Ew4lEVUNUSU9OIERFUyBEw4lDT01QVEVTPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJyaWdodFwiIGNsYXNzTmFtZT1cImJhcmRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17dG90YWxkZWNvbXB0ZXN9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmIDx0ZD48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNlwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5BRERJVElPTiBERVNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBSRVRFTlVFUyhGSU5JVElPTi1HQVJBTlRJRS1QUk9SQVRBLVRSQykgLSB7YWRkaX0lPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPkFERElUSU9OIERFU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFJFVEVOVUVTKEZJTklUSU9OLUdBUkFOVElFLVBST1JBVEEtVFJDKS0ge2FkZGl9JTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+QURESVRJT04gREVTXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUkVURU5VRVMoRklOSVRJT04tR0FSQU5USUUtUFJPUkFUQS1UUkMpLSB7YWRkaX0lPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPkFERElUSU9OIERFU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFJFVEVOVUVTKEZJTklUSU9OLUdBUkFOVElFLVBST1JBVEEtVFJDKS0ge2FkZGl9JTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY2xhc3NOYW1lPVwiYmFyZGVyXCI+PE51bWJlckZvcm1hdCBudW1iPXt0b3RhbHJldGVudWV9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5SRU1JU0U8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjNcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+UkVNSVNFPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY2xhc3NOYW1lPVwiYmFyZGVyXCI+PE51bWJlckZvcm1hdCBudW1iPXtkZXZpcy52cmVtaXNlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJiA8dGQ+PC90ZD59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5UT1RBTCBIVDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5UT1RBTCBIVDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0IG51bWI9e3RvdGFsaHRzb2xkZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWJhc2V0dmEgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJiA8dGQ+PC90ZD59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmIDx0ZD48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5CQVNFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUVkF7ZGV2aXMuY29kZSAhPT0gbnVsbCAmJiBkZXZpcy5jb2RlfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjNcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+QkFTRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUVkF7ZGV2aXMuY29kZSAhPT0gbnVsbCAmJiBkZXZpcy5jb2RlfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY2xhc3NOYW1lPVwiYmFyZGVyXCI+PE51bWJlckZvcm1hdCBudW1iPXtkZXZpcy5iYXNldHZhfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+VFZBIHtkZXZpcy50dmF9JXtzdHZhfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5UVkEge2RldmlzLnR2YX0le3N0dmF9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJyaWdodFwiIGNsYXNzTmFtZT1cImJhcmRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17dG90YWx0dmF9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMTJweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5ORVQgw4AgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJyaWdodFwiIGNvbFNwYW49XCIyXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sb3I6IFwiIzRlNzNkZlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5ORVQgw4AgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY2xhc3NOYW1lPVwiYmFyZGVyXCIgc3R5bGU9e3tjb2xvcjogXCIjNGU3M2RmXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj48TnVtYmVyRm9ybWF0IG51bWI9e3RvdGFsdHRjc29sZGV9Lz48L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgY2xhc3NOYW1lPVwidGV4dC1sZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEFycsOqdMOpIGxhIHByw6lzZW50ZSBmYWN0dXJlIMOgIGxhIHNvbW1lIGRlOjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPiB7bnVtYmVyVG9MZXR0ZXJzKHBhcnNlSW50KHRvdGFsdHRjc29sZGUpLCB7bGFuZzogJ2ZyJ30pfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4+e2RldmlzLm1vbm5haWUuY29kZX08L3NwYW4+PC9iPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLmluZm9ybWF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBjbGFzc05hbWU9XCJrb3BcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZsb2F0OiBcImxlZnRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dERlY29yYXRpb246IFwidW5kZXJsaW5lXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PkNPTkRJVElPTlMgRVQgTU9EQUxJVMOJUyBERSBQQUlFTUVOVCA8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y29sb3I6IFwiIzAwMDAwMFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmYWN0dXJlLmluZm9ybWF0aW9ufX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB7ZmFjdHVyZS50eXBlID09PSBcInNpbXBsZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBhbGlnbj1cInJpZ2h0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e2JvcmRlcjogXCJub25lXCIsIHRleHRBbGlnbjogXCJjZW50ZXJcIn19PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+e2NsaWVudC5ub21jbGllbnR9PC9iPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5jb250cmlidWFibGUgIT09IG51bGwgJiYgPD57Y2xpZW50LmNvbnRyaWJ1YWJsZX0gPGJyLz48Lz59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5hZHJlc3NlICE9PSBudWxsICYmIDw+IHtjbGllbnQuYWRyZXNzZX0gPGJyLz48Lz59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5tYWlsICE9PSBudWxsICYmIDw+e2NsaWVudC5tYWlsfSA8YnIvPiA8Lz59XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cImxlZnRcIj48Yj48dT5EQVRFOjwvdT48L2I+IHtmYWNkYXRlfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cImxlZnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj48dT5Sw4lGw4lSRU5DRTo8L3U+PC9iPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGZhY3R1cmUuZmFjdHJlZmVyZW5jZX19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwicHJpbnRlclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PlLDiUY8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7bWF4V2lkdGg6IFwiNTAwcHhcIiwgbWluV2lkdGg6IFwiMjUwcHhcIiwgdGV4dEFsaWduOiBcImxlZnRcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIETDiVNJR05BVElPTlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PlNFQ1RJT048L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+VU5JVMOJPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PlFUw4k8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0gY2xhc3NOYW1lPVwibXcxMDBcIj5QUklYJm5ic3A7VS48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PlJFTUlTRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fSBjbGFzc05hbWU9XCJtdzEwMFwiPk1PTlRBTlQmbmJzcDtIVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJHcm91cGV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJMaWduZX1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmIDx0ZD48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPlRPVEFMIEhUPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPlRPVEFMIEhUPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJyaWdodFwiIGNsYXNzTmFtZT1cImJhcmRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17dG90YWxodHNvbGRlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cblxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPlJFTUlTRTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5SRU1JU0U8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0IG51bWI9e2RldmlzLnZyZW1pc2V9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYmFzZXR2YSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmIDx0ZD48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiYgPHRkPjwvdGQ+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPkJBU0VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRWQXtkZXZpcy5jb2RlICE9PSBudWxsICYmIGRldmlzLmNvZGV9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5CQVNFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRWQXtkZXZpcy5jb2RlICE9PSBudWxsICYmIGRldmlzLmNvZGV9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0IG51bWI9e2RldmlzLmJhc2V0dmF9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPlRWQSB7ZGV2aXMudHZhfSU8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjJcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+VFZBIHtkZXZpcy50dmF9JTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0IG51bWI9e3RvdGFsdHZhfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY29sU3Bhbj1cIjNcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBcIjEycHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjRDNEM0QzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+TkVUIMOAIFBBWUVSPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjb2xTcGFuPVwiMlwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMTJweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5ORVQgw4AgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY2xhc3NOYW1lPVwiYmFyZGVyXCIgc3R5bGU9e3tmb250U2l6ZTogXCIxMnB4XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPjxOdW1iZXJGb3JtYXQgbnVtYj17dG90YWx0dGNzb2xkZX0vPjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQXJyw6p0w6kgbGEgcHLDqXNlbnRlIGZhY3R1cmUgw6AgbGEgc29tbWUgZGU6PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+e251bWJlclRvTGV0dGVycyhwYXJzZUludCh0b3RhbHR0Y3NvbGRlKSwge2xhbmc6ICdmcid9KX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuPntkZXZpcy5jb2RlICE9PSBudWxsICYmIDw+IHtkZXZpcy5tb25uYWllLmNvZGV9PC8+fSA8L3NwYW4+PC9iPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7ZmxvYXQ6IFwicmlnaHRcIiwgdGV4dERlY29yYXRpb246IFwidW5kZXJsaW5lXCJ9fT4gU0lHTkFUVVJFIEFVVE9SSVPDiUUgPC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhY3R1cmUuaW5mb3JtYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIGNsYXNzTmFtZT1cImtvcFwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmxvYXQ6IFwibGVmdFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+Q09ORElUSU9OUyBFVCBNT0RBTElUw4lTIERFIFBBSUVNRU5UIDwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjb2xvcjogXCIjMDAwMDAwXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGZhY3R1cmUuaW5mb3JtYXRpb259fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb290ZXJcIj48L2Rpdj5cbiAgICAgICAgICAgIDwvZGl2PlxuXG5cblxuXG5cblxuXG4gICAgICAgICAgICA8ZGl2IHN0eWxlPXt7ZGlzcGxheTogXCJub25lXCIsfX0+XG4gICAgICAgICAgICAgICAgPGRpdiByZWY9e3JlZn0gc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgd2lkdGg6IFwiMjFjbVwiLFxuICAgICAgICAgICAgICAgICAgICBtaW5IZWlnaHQ6IFwiMjkuN2NtXCIsXG4gICAgICAgICAgICAgICAgICAgIGJveFNoYWRvdzogXCIwIDAgMC41Y20gcmdiYSgwLDAsMCwwLjUpXCIsXG4gICAgICAgICAgICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogXCIjRkZGXCIsXG4gICAgICAgICAgICAgICAgfX0+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaGVhZGVyXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgIHdpZHRoOiBmb3JtZS5oZWFkZXJXaXRoICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgaGVpZ2h0OiBmb3JtZS5oZWFkZXJIZWlnaHQgKyBcImNtXCJcbiAgICAgICAgICAgICAgICAgICAgfX0+XG4gICAgICAgICAgICAgICAgICAgICAgICB7Zm9ybWUudHlwZUVudGV0ZSAhPT0gXCJhdWN1blwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Zvcm1lLnR5cGVFbnRldGUgPT09IFwiaW1hZ2VcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGltZyBzcmM9e2AvZ2FsbGVyeS8ke2Zvcm1lLmxpbmt9YH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpZHRoOiBmb3JtZS50ZXRlSCArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhlaWdodDogZm9ybWUudGV0ZVkgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nUmlnaHQ6IGZvcm1lLnRldGVERCArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhZGRpbmdMZWZ0OiBmb3JtZS50ZXRlREcgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nVG9wOiBmb3JtZS50ZXRlREggKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nQm90dG9tOiBmb3JtZS50ZXRlREIgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFsdD1cIlwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Zm9ybWUudHlwZUVudGV0ZSA9PT0gXCJ0ZXh0ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhZGRpbmdSaWdodDogZm9ybWUudGV0ZUREICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhZGRpbmdMZWZ0OiBmb3JtZS50ZXRlREcgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ1RvcDogZm9ybWUudGV0ZURIICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhZGRpbmdCb3R0b206IGZvcm1lLnRldGVEQiArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogZm9ybWUuaGVhZGVyVGV4dH19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBzdHlsZT17e3BhZGRpbmdMZWZ0OiBcIjFjbVwiLCBwYWRkaW5nUmlnaHQ6IFwiMWNtXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLnR5cGUgPT09IFwiZGVjb21wdGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImhlYWRlci1zcGFjZVwiPiZuYnNwOzwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGFsaWduPVwicmlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7Ym9yZGVyOiBcIm5vbmVcIiwgdGV4dEFsaWduOiBcImNlbnRlclwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+e2NsaWVudC5ub21jbGllbnQudG9VcHBlckNhc2UoKX08L2I+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Y2xpZW50LmNvbnRyaWJ1YWJsZX08YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQuYWRyZXNzZX08YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQubWFpbH08YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwibGVmdFwiPjxiPjx1PkRBVEU6PC91PjwvYj4ge2ZhY2RhdGV9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwibGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPjx1PlLDiUbDiVJFTkNFOjwvdT48L2I+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGZhY3R1cmUuZmFjdHJlZmVyZW5jZX19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInByaW50ZXJcIiBzdHlsZT17e3RleHRBbGlnbjogXCJsZWZ0XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmRlXCI+MS4gRMOJUEVOU0VTIEVOR0FHw4lFUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19Pk1PTlRBTlRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUT1RBTFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEhUXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIyXCIgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy50b3RhbGh0fS8+PC9iPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInByaW50ZXJcIiBzdHlsZT17e3RleHRBbGlnbjogXCJsZWZ0XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0SCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmRlXCI+Mi4gTU9EQUxJVMOJUyBERSBSw4hHTEVNRU5UPC90SD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgY2xhc3NOYW1lPVwiYm9yZGUga29wXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3RleHRBbGlnbjogXCJsZWZ0XCIsIHBhZGRpbmdMZWZ0OiBcIiAyMHB4XCJ9fT5BVkFOQ0VNRU5UIERFU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRSQVZBVVhcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RlY29tcHRlLmF2YW5jZW1lbnR9Lz4lXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZWNvbXB0ZS52YWxldXJ9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGUga29wXCIgY29sU3Bhbj1cIjVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7dGV4dEFsaWduOiBcImxlZnRcIiwgcGFkZGluZ0xlZnQ6IFwiIDIwcHhcIn19PsOAIETDiURVSVJFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEw4lEVUNUSU9OIEFDT01QVEUgREUgREVNQVJSQUdFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZWNvbXB0ZS5hY29tcHRlfS8+JVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8TnVtYmVyRm9ybWF0IG51bWI9e2Fjb21wdGV9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjNcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj5Ew4lEVUNUSU9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUkVURU5VRSBHQVJBTlRJRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGVjb21wdGUuZ2FyYW50aWV9Lz4lXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsoKGRlY29tcHRlLnZhbGV1ciAqIGRlY29tcHRlLmdhcmFudGllKSAvIDEwMCl9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjNcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj5Ew4lEVUNUSU9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUkVURU5VRSBERSBGSU5JVElPTlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGVjb21wdGUuZmluaXRpb259Lz4lXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsoKGRlY29tcHRlLnZhbGV1ciAqIGRlY29tcHRlLmZpbml0aW9uKSAvIDEwMCl9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjNcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj5Ew4lEVUNUSU9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQ09NUFRFIFBST1JBVEFcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RlY29tcHRlLnByb3JhdGF9Lz4lXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsoKGRlY29tcHRlLnZhbGV1ciAqIGRlY29tcHRlLnByb3JhdGEpIC8gMTAwKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPkTDiURVQ1RJT05cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBU1NVUkFOQ0UgVFJDXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZWNvbXB0ZS50cmN9Lz4lXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsoKGRlY29tcHRlLnZhbGV1ciAqIGRlY29tcHRlLnRyYykgLyAxMDApfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+RMOJRFVDVElPTlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERFUyBEw4lDT01QVEVTXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RlY29tcHRlLmNvdW50ZGVjb21wZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImxlZnRcIiwgcGFkZGluZ0xlZnQ6IFwiIDIwcHhcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYm9yZGUga29wXCI+U09JVFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+TU9OVEFOVFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERFIExBXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgU0lUVUFUSU9OIMOAIETDiUxJVlJFUiBIVFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fSBjbGFzc05hbWU9XCJib3JkZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZWNvbXB0ZS5hcGF5ZXJ9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjNcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJib3JkZVwiPlRWQSB7ZGV2aXMudHZhfSVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17KChkZWNvbXB0ZS5hcGF5ZXIgKiBkZXZpcy50dmEpIC8gMTAwKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYm9yZGUga29wXCI+TU9OVEFOVCBERSBMQSBTSVRVQVRJT04gw4AgRMOJTElWUkVSIFRUQ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0gY2xhc3NOYW1lPVwiYm9yZGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19IGNsYXNzTmFtZT1cImJvcmRlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+PE51bWJlckZvcm1hdCBudW1iPXtkZWNvbXB0ZS50dGN9Lz48L2I+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fT48L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e3RleHRBbGlnbjogXCJsZWZ0XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQXJyw6p0w6kgbGEgcHLDqXNlbnRlIGZhY3R1cmUgw6AgbGEgc29tbWUgZGU6PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4+PGI+e251bWJlclRvTGV0dGVycyhwYXJzZUludCgoZGVjb21wdGUudHRjKSksIHtsYW5nOiAnZnInfSl9IHttb2NvZGV9PC9iPjwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3A+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2Zsb2F0OiBcInJpZ2h0XCIsIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwifX0+U0lHTkFUVVJFIEFVVE9SSVPDiUU8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz48YnIvPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhY3R1cmUuaW5mb3JtYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tmbG9hdDogXCJsZWZ0XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19Pjx1PkNPTkRJVElPTlMgRVQgTU9EQUxJVMOJU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUEFJRU1FTlQ8L3U+PC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fT48L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NvbG9yOiBcIiMwMDAwMDBcIn19PntmYWN0dXJlLmluZm9ybWF0aW9ufTwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb290ZXItc3BhY2VcIj4mbmJzcDs8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLnR5cGUgPT09IFwicmV0ZW51ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaGVhZGVyLXNwYWNlXCI+Jm5ic3A7PC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgYWxpZ249XCJyaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3tib3JkZXI6IFwibm9uZVwiLCB0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj57Y2xpZW50Lm5vbWNsaWVudH08L2I+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Y2xpZW50LmNvbnRyaWJ1YWJsZX08YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQuYWRyZXNzZX08YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQubWFpbH08YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwibGVmdFwiPjxiPjx1PkRBVEU6PC91PjwvYj4ge2ZhY2RhdGV9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwibGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPjx1PlLDiUbDiVJFTkNFOjwvdT48L2I+IEZBQ1RVUkUgRCdBQ09NUFRFIFNFTE9OIERFVklTXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgTsK6IHtkZXZpcy5pZGRldmlzfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGZhY3R1cmUuZmFjdHJlZmVyZW5jZX19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3M9XCJwcmludGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFLDiUYgPC90aD59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtYXhXaWR0aDogXCI1MDBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1pbldpZHRoOiBcIjI1MHB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dEFsaWduOiBcImxlZnRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+RMOJU0lHTkFUSU9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+U0VDVElPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5VTklUw4k8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+UVTDiTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fSBjbGFzc05hbWU9XCJtdzEwMFwiPlBSSVgmbmJzcDtVLjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fSBjbGFzc05hbWU9XCJtdzEwMFwiPk1PTlRBTlQmbmJzcDtIVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckdyb3VwZX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckxpZ25lfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+IFRPVEFMXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgSFQgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCI0XCI+PGI+IFRPVEFMXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgSFQgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e3RodH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLnRvdGFsaHR9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPjxiPiBUT1RBTFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEhUIDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiM1wiPjxiPiBUT1RBTFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEhUIDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PCBOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXt0aHR9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PCBOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy50b3RhbGh0fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+IEFDT01QVEVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAoPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLmFjb21wdGUucG91cmNlbnRhZ2V9Lz4lKSBIVCA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjRcIj48Yj4gQUNPTVBURVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICg8TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZhY3R1cmUuYWNvbXB0ZS5wb3VyY2VudGFnZX0vPiUpIEhUIDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS50b3RhbGh0fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPjxiPiBBQ09NUFRFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgKDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS5hY29tcHRlLnBvdXJjZW50YWdlfS8+JSkgSFQgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCIzXCI+PGI+IEFDT01QVEVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAoPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLmFjb21wdGUucG91cmNlbnRhZ2V9Lz4lKSBIVCA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZhY3R1cmUudG90YWxodH0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFiYXNldHZhID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIj48Yj4gQkFTRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUVkE8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjRcIj48Yj4gQkFTRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUVkE8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLmJhc2V0dmEgKiAoKGZhY3R1cmUudG90YWx0dGMgLSBmYWN0dXJlLnRvdGFsaHQpIC8gZGV2aXMudnR2YSl9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIiBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIj48Yj4gQkFTRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUVkE8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjNcIj48Yj4gQkFTRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUVkE8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLmJhc2V0dmEgKiAoKGZhY3R1cmUudG90YWx0dGMgLSBmYWN0dXJlLnRvdGFsaHQpIC8gZGV2aXMudnR2YSl9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWJhc2V0dmEgIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+VFZBIHtkZXZpcy50dmF9JSB7c3R2YX08L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+VFZBIHtkZXZpcy50dmF9JSB7c3R2YX08L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZhY3R1cmUudnR2YX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5UVkEge2RldmlzLnR2YX0lIHtzdHZhfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiM1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5UVkEge2RldmlzLnR2YX0lIHtzdHZhfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS52dHZhfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0QWxpZ246IFwicmlnaHRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMTJweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckJvdHRvbTogXCIxcHggc29saWQgI0QzRDNEM1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT48Yj5ORVQgw4AgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiIGNvbFNwYW49XCI0XCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0QWxpZ246IFwicmlnaHRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMTJweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckJvdHRvbTogXCIxcHggc29saWQgI0QzRDNEM1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT48Yj5ORVQgw4AgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRldSB0ZXh0LXJpZ2h0IG5vd3JhcGVcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBcIjEycHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0QWxpZ246IFwicmlnaHRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLnRvdGFsdHRjfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHRBbGlnbjogXCJyaWdodFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb250U2l6ZTogXCIxMnB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjRDNEM0QzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PjxiPk5FVCDDgCBQQVlFUjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjNcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHRBbGlnbjogXCJyaWdodFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb250U2l6ZTogXCIxMnB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjRDNEM0QzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PjxiPk5FVCDDgCBQQVlFUjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGV1IHRleHQtcmlnaHQgbm93cmFwZVwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMTJweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHRBbGlnbjogXCJyaWdodFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZhY3R1cmUudG90YWx0dGN9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fT48L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQXJyw6p0w6kgbGEgcHLDqXNlbnRlIGZhY3R1cmUgw6AgbGEgc29tbWUgZGU6PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+e251bWJlclRvTGV0dGVycyhwYXJzZUludChmYWN0dXJlLnRvdGFsdHRjKSwge2xhbmc6ICdmcid9KX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9iPjxzcGFuPjxiPiB7ZGV2aXMubW9ubmFpZS5jb2RlfTwvYj48L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tmbG9hdDogXCJyaWdodFwiLCB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIn19PlNJR05BVFVSRSBBVVRPUklTw4lFPC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+PGJyLz48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLmluZm9ybWF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2Zsb2F0OiBcImxlZnRcIiwgY29sb3I6IFwiIzRlNzNkZlwifX0+PHU+Q09ORElUSU9OUyBFVCBNT0RBTElUw4lTXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgREVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBQQUlFTUVOVDwvdT48L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19PjwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y29sb3I6IFwiIzAwMDAwMFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmYWN0dXJlLmluZm9ybWF0aW9ufX0+PC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvb3Rlci1zcGFjZVwiPiZuYnNwOzwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAge2ZhY3R1cmUudHlwZSA9PT0gXCJhY29tcHRlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJoZWFkZXItc3BhY2VcIj4mbmJzcDs8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBhbGlnbj1cInJpZ2h0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e2JvcmRlcjogXCJub25lXCIsIHRleHRBbGlnbjogXCJjZW50ZXJcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPntjbGllbnQubm9tY2xpZW50fTwvYj48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQuY29udHJpYnVhYmxlfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5hZHJlc3NlfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NsaWVudC5tYWlsfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJsZWZ0XCI+PGI+PHU+REFURTo8L3U+PC9iPiB7ZmFjZGF0ZX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJsZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+PHU+UsOJRsOJUkVOQ0U6PC91PjwvYj4gRkFDVFVSRSBEJ0FDT01QVEUgU0VMT04gREVWSVNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBOwroge2RldmlzLmlkZGV2aXN9PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogZmFjdHVyZS5mYWN0cmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzcz1cInByaW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUsOJRiA8L3RoPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1heFdpZHRoOiBcIjUwMHB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWluV2lkdGg6IFwiMjUwcHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0QWxpZ246IFwibGVmdFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT5Ew4lTSUdOQVRJT05cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5TRUNUSU9OPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PlVOSVTDiTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5RVMOJPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19IGNsYXNzTmFtZT1cIm13MTAwXCI+UFJJWCZuYnNwO1UuPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT4lUkVNPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19IGNsYXNzTmFtZT1cIm13MTAwXCI+TU9OVEFOVCZuYnNwO0hUPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyR3JvdXBlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyTGlnbmV9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNVwiPjxiPiBSRU1JU0VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUT1RBTEUgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMudnJlbWlzZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ25vbicgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNFwiPjxiPiBSRU1JU0VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUT1RBTEUgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMudnJlbWlzZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNVwiPjxiPiBSRU1JU0VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAoPCBOdW1iZXJGb3JtYXQgbnVtYj17ZGV2aXMucmVtdGh0fS8+JSkgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMudnJlbWlzZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ25vbicgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNFwiPjxiPiBSRU1JU0VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAoPCBOdW1iZXJGb3JtYXQgbnVtYj17ZGV2aXMucmVtdGh0fS8+JSkgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMudnJlbWlzZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIj48Yj4gVE9UQUxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBIVCA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjRcIj48Yj4gVE9UQUxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBIVCA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy50b3RhbGh0fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+IFRPVEFMXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgSFQgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCIzXCI+PGI+IFRPVEFMXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgSFQgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLnJlbXRodH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLnRvdGFsaHR9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIj48Yj4gQUNPTVBURVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICg8TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZhY3R1cmUuYWNvbXB0ZS5wb3VyY2VudGFnZX0vPiUpIEhUIDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNFwiPjxiPiBBQ09NUFRFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgKDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS5hY29tcHRlLnBvdXJjZW50YWdlfS8+JSkgSFQgPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PCBOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLnRvdGFsaHR9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+PGI+IEFDT01QVEVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAoPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLmFjb21wdGUucG91cmNlbnRhZ2V9Lz4lKSBIVCA8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCIgY29sU3Bhbj1cIjNcIj48Yj4gQUNPTVBURVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICg8TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZhY3R1cmUuYWNvbXB0ZS5wb3VyY2VudGFnZX0vPiUpIEhUIDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwgTnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS50b3RhbGh0fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWJhc2V0dmEgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPjxiPiBCQVNFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRWQTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNFwiPjxiPiBCQVNFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRWQTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMuYmFzZXR2YSAqICgoZmFjdHVyZS50b3RhbHR0YyAtIGZhY3R1cmUudG90YWxodCkgLyBkZXZpcy52dHZhKX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPjxiPiBCQVNFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRWQTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiM1wiPjxiPiBCQVNFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRWQTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMuYmFzZXR2YSAqICgoZmFjdHVyZS50b3RhbHR0YyAtIGZhY3R1cmUudG90YWxodCkgLyBkZXZpcy52dHZhKX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYmFzZXR2YSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZFwiLz5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5UVkEge2RldmlzLnR2YX0lIHtzdHZhfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkIHRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5UVkEge2RldmlzLnR2YX0lIHtzdHZhfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS52dHZhfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgY2xhc3NOYW1lPVwiYm9yZCB0ZXh0LXJpZ2h0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPlRWQSB7ZGV2aXMudHZhfSUge3N0dmF9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmQgdGV4dC1yaWdodFwiIGNvbFNwYW49XCIzXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPlRWQSB7ZGV2aXMudHZhfSUge3N0dmF9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJiYXJkZXIgdGV4dC1yaWdodCBub3dyYXBlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtmYWN0dXJlLnZ0dmF9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRcIi8+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHRBbGlnbjogXCJyaWdodFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+PGI+TkVUIMOAIFBBWUVSPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIiBjb2xTcGFuPVwiNFwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dEFsaWduOiBcInJpZ2h0XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sb3I6IFwiIzRlNzNkZlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckJvdHRvbTogXCIxcHggc29saWQgI0QzRDNEM1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT48Yj5ORVQgw4AgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICd0aHQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYmFyZGVyIHRleHQtcmlnaHQgbm93cmFwZVwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRldSB0ZXh0LXJpZ2h0IG5vd3JhcGVcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHRBbGlnbjogXCJyaWdodFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZhY3R1cmUudG90YWx0dGN9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dEFsaWduOiBcInJpZ2h0XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sb3I6IFwiIzRlNzNkZlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBcIjEycHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+PGI+TkVUIMOAIFBBWUVSPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIiBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dEFsaWduOiBcInJpZ2h0XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sb3I6IFwiIzRlNzNkZlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBcIjEycHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+PGI+TkVUIMOAIFBBWUVSPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAndGh0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJhcmRlciB0ZXh0LXJpZ2h0IG5vd3JhcGVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ3RodCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZXUgdGV4dC1yaWdodCBub3dyYXBlXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb250U2l6ZTogXCIxMnB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dEFsaWduOiBcInJpZ2h0XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sb3I6IFwiIzRlNzNkZlwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZmFjdHVyZS50b3RhbHR0Y30vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fT48L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQXJyw6p0w6kgbGEgcHLDqXNlbnRlIGZhY3R1cmUgw6AgbGEgc29tbWUgZGU6PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+e251bWJlclRvTGV0dGVycyhwYXJzZUludChmYWN0dXJlLnRvdGFsdHRjKSwge2xhbmc6ICdmcid9KX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9iPjxzcGFuPjxiPiB7ZGV2aXMubW9ubmFpZS5jb2RlfTwvYj48L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tmbG9hdDogXCJyaWdodFwiLCB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIn19PlNJR05BVFVSRSBBVVRPUklTw4lFPC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+PGJyLz48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLmluZm9ybWF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2Zsb2F0OiBcImxlZnRcIiwgY29sb3I6IFwiIzRlNzNkZlwifX0+PHU+Q09ORElUSU9OUyBFVCBNT0RBTElUw4lTXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgREVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBQQUlFTUVOVDwvdT48L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19PjwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y29sb3I6IFwiIzAwMDAwMFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmYWN0dXJlLmluZm9ybWF0aW9ufX0+PC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvb3Rlci1zcGFjZVwiPiZuYnNwOzwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAge2ZhY3R1cmUudHlwZSA9PT0gXCJkZXZpc1wiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaGVhZGVyLXNwYWNlXCI+Jm5ic3A7PC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgYWxpZ249XCJyaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3tib3JkZXI6IFwibm9uZVwiLCB0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPntjbGllbnQubm9tY2xpZW50fTwvYj48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQuY29udHJpYnVhYmxlICE9PSBudWxsICYmIDw+e2NsaWVudC5jb250cmlidWFibGV9IDxici8+PC8+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQuYWRyZXNzZSAhPT0gbnVsbCAmJiA8PiB7Y2xpZW50LmFkcmVzc2V9IDxici8+PC8+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjbGllbnQubWFpbCAhPT0gbnVsbCAmJiA8PntjbGllbnQubWFpbH0gPGJyLz4gPC8+fVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJsZWZ0XCI+PGI+PHU+REFURTo8L3U+PC9iPiB7ZmFjZGF0ZX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJsZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+PHU+UsOJRsOJUkVOQ0U6PC91PjwvYj48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEZBQ1RVUkUgREUgU09MREU8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmYWN0dXJlLmZhY3RyZWZlcmVuY2V9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInByaW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5Sw4lGPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e21heFdpZHRoOiBcIjUwMHB4XCIsIG1pbldpZHRoOiBcIjI1MHB4XCIsIHRleHRBbGlnbjogXCJsZWZ0XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEw4lTSUdOQVRJT05cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5TRUNUSU9OPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PlVOSVTDiTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5RVMOJPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19IGNsYXNzTmFtZT1cIm13MTAwXCI+UFJJWCZuYnNwO1UuPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5SRU0gJTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fSBjbGFzc05hbWU9XCJtdzEwMFwiPiBNT05UQU5UJm5ic3A7SFRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJHcm91cGV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJMaWduZX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJiA8dGQ+PC90ZD59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5Ew4lEVUNUSU9OIERFU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBQ09NUFRFUzwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5Ew4lEVUNUSU9OIERFU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBQ09NUFRFUzwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17dG90YWxhY29tcHRlc30vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJiA8dGQ+PC90ZD59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5Ew4lEVUNUSU9OIERFU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEw4lDT01QVEVTPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPkTDiURVQ1RJT04gREVTXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIETDiUNPTVBURVM8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY2xhc3NOYW1lPVwiYmFyZGVyXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e3RvdGFsZGVjb21wdGVzfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmIDx0ZD48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNlwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5BRERJVElPTiBERVNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBSRVRFTlVFUyhGSU5JVElPTi1HQVJBTlRJRS1QUk9SQVRBLVRSQykgLSB7YWRkaX0lPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPkFERElUSU9OIERFU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFJFVEVOVUVTKEZJTklUSU9OLUdBUkFOVElFLVBST1JBVEEtVFJDKS0ge2FkZGl9JTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+QURESVRJT04gREVTXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUkVURU5VRVMoRklOSVRJT04tR0FSQU5USUUtUFJPUkFUQS1UUkMpLSB7YWRkaX0lPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPkFERElUSU9OIERFU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFJFVEVOVUVTKEZJTklUSU9OLUdBUkFOVElFLVBST1JBVEEtVFJDKS0ge2FkZGl9JTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJyaWdodFwiIGNsYXNzTmFtZT1cImJhcmRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17dG90YWxyZXRlbnVlfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuXG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjNcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+UkVNSVNFPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIyXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPlJFTUlTRTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249XCJyaWdodFwiIGNsYXNzTmFtZT1cImJhcmRlclwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17ZGV2aXMudnJlbWlzZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmIDx0ZD48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjNcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+VE9UQUwgSFQ8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjJcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+VE9UQUwgSFQ8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY2xhc3NOYW1lPVwiYmFyZGVyXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e3RvdGFsaHRzb2xkZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWJhc2V0dmEgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVmID09PSAnb3VpJyAmJiA8dGQ+PC90ZD59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmIDx0ZD48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5CQVNFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUVkF7ZGV2aXMuY29kZSAhPT0gbnVsbCAmJiBkZXZpcy5jb2RlfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjJcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+QkFTRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUVkF7ZGV2aXMuY29kZSAhPT0gbnVsbCAmJiBkZXZpcy5jb2RlfTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY2xhc3NOYW1lPVwiYmFyZGVyXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtkZXZpcy5iYXNldHZhfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+VFZBIHtkZXZpcy50dmF9JXtzdHZhfTwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+VFZBIHtkZXZpcy50dmF9JXtzdHZhfTwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0IG51bWI9e3RvdGFsdHZhfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjb2xTcGFuPVwiM1wiIGNsYXNzTmFtZT1cImtvcFwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMTJweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBORVQgw4AgUEFZRVI8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY29sU3Bhbj1cIjJcIiBjbGFzc05hbWU9XCJrb3BcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBcIjEycHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjRDNEM0QzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgTkVUIMOAIFBBWUVSPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY2xhc3NOYW1lPVwiYmFyZGVyIGtvcFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxMnB4XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXQgbnVtYj17dG90YWx0dGNzb2xkZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIGNsYXNzTmFtZT1cInRleHQtbGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBcnLDqnTDqSBsYSBwcsOpc2VudGUgZmFjdHVyZSDDoCBsYSBzb21tZSBkZTo8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj4ge251bWJlclRvTGV0dGVycyhwYXJzZUludCh0b3RhbHR0Y3NvbGRlKSwge2xhbmc6ICdmcid9KX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuPntkZXZpcy5tb25uYWllLmNvZGV9PC9zcGFuPjwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2Zsb2F0OiBcInJpZ2h0XCIsIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwifX0+IFNJR05BVFVSRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBVVRPUklTw4lFIDwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLmluZm9ybWF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBjbGFzc05hbWU9XCJrb3BcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZsb2F0OiBcImxlZnRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dERlY29yYXRpb246IFwidW5kZXJsaW5lXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PkNPTkRJVElPTlMgRVQgTU9EQUxJVMOJUyBERSBQQUlFTUVOVCA8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y29sb3I6IFwiIzAwMDAwMFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmYWN0dXJlLmluZm9ybWF0aW9ufX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvb3Rlci1zcGFjZVwiPiZuYnNwOzwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAge2ZhY3R1cmUudHlwZSA9PT0gXCJzaW1wbGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImhlYWRlci1zcGFjZVwiPiZuYnNwOzwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGFsaWduPVwicmlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7Ym9yZGVyOiBcIm5vbmVcIiwgdGV4dEFsaWduOiBcImNlbnRlclwifX0+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj57Y2xpZW50Lm5vbWNsaWVudH08L2I+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Y2xpZW50LmNvbnRyaWJ1YWJsZSAhPT0gbnVsbCAmJiA8PntjbGllbnQuY29udHJpYnVhYmxlfSA8YnIvPjwvPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Y2xpZW50LmFkcmVzc2UgIT09IG51bGwgJiYgPD4ge2NsaWVudC5hZHJlc3NlfSA8YnIvPjwvPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Y2xpZW50Lm1haWwgIT09IG51bGwgJiYgPD57Y2xpZW50Lm1haWx9IDxici8+IDwvPn1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwibGVmdFwiPjxiPjx1PkRBVEU6PC91PjwvYj4ge2ZhY2RhdGV9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwibGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPjx1PlLDiUbDiVJFTkNFOjwvdT48L2I+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogZmFjdHVyZS5mYWN0cmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJwcmludGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+UsOJRjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3ttYXhXaWR0aDogXCI1MDBweFwiLCBtaW5XaWR0aDogXCIyNTBweFwiLCB0ZXh0QWxpZ246IFwibGVmdFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgRMOJU0lHTkFUSU9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLnpvbmUgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+U0VDVElPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5VTklUw4k8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+UVTDiTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fSBjbGFzc05hbWU9XCJtdzEwMFwiPlBSSVgmbmJzcDtVLjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+UkVNSVNFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19IGNsYXNzTmFtZT1cIm13MTAwXCI+IE1PTlRBTlQmbmJzcDtIVFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckdyb3VwZX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckxpZ25lfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlZiA9PT0gJ291aScgJiYgPHRkPjwvdGQ+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiM1wiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5UT1RBTCBIVDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiMlwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5UT1RBTCBIVDwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17dG90YWxkZWNvbXB0ZXN9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPlJFTUlTRTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiMlwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5SRU1JU0U8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLnZyZW1pc2V9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYmFzZXR2YSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmIDx0ZD48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuem9uZSA9PT0gJ291aScgJiYgPHRkPjwvdGQ+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPkJBU0VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRWQXtkZXZpcy5jb2RlICE9PSBudWxsICYmIGRldmlzLmNvZGV9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiMlwiIHN0eWxlPXt7dGV4dEFsaWduOiBcInJpZ2h0XCJ9fT48Yj5CQVNFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRWQXtkZXZpcy5jb2RlICE9PSBudWxsICYmIGRldmlzLmNvZGV9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2RldmlzLmJhc2V0dmF9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIn19PjxiPlRWQSB7ZGV2aXMudHZhfSU8L2I+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjJcIiBzdHlsZT17e3RleHRBbGlnbjogXCJyaWdodFwifX0+PGI+VFZBIHtkZXZpcy50dmF9JTwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjbGFzc05hbWU9XCJiYXJkZXJcIj48TnVtYmVyRm9ybWF0IG51bWI9e3RvdGFsdHZhfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpcy56b25lID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2aXMuYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPVwicmlnaHRcIiBjb2xTcGFuPVwiM1wiIGNsYXNzTmFtZT1cImtvcFwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIiM0ZTczZGZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMTJweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICNEM0QzRDNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBORVQgw4AgUEFZRVI8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RldmlzLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY29sU3Bhbj1cIjJcIiBjbGFzc05hbWU9XCJrb3BcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBcIjEycHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjRDNEM0QzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgTkVUIMOAIFBBWUVSPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj1cInJpZ2h0XCIgY2xhc3NOYW1lPVwiYmFyZGVyIGtvcFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxMnB4XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXQgbnVtYj17dG90YWx0dGNzb2xkZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIGNsYXNzTmFtZT1cInRleHQtbGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBcnLDqnTDqSBsYSBwcsOpc2VudGUgZmFjdHVyZSDDoCBsYSBzb21tZSBkZTo8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj57bnVtYmVyVG9MZXR0ZXJzKHBhcnNlSW50KHRvdGFsdHRjc29sZGUpLCB7bGFuZzogJ2ZyJ30pfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4+IHtkZXZpcy5tb25uYWllLmNvZGV9PC9zcGFuPjwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2Zsb2F0OiBcInJpZ2h0XCIsIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwifX0+IFNJR05BVFVSRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBVVRPUklTw4lFIDwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmYWN0dXJlLmluZm9ybWF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBjbGFzc05hbWU9XCJrb3BcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZsb2F0OiBcImxlZnRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogXCIjNGU3M2RmXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dERlY29yYXRpb246IFwidW5kZXJsaW5lXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PkNPTkRJVElPTlMgRVQgTU9EQUxJVMOJUyBERSBQQUlFTUVOVCA8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y29sb3I6IFwiIzAwMDAwMFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmYWN0dXJlLmluZm9ybWF0aW9ufX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvb3Rlci1zcGFjZVwiPiZuYnNwOzwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb290ZXJcIiA+XG4gICAgICAgICAgICAgICAgICAgICAgICB7Zm9ybWUucGllZCAhPT0gXCJhdWN1blwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Zvcm1lLnR5cGVGb290ZXIgPT09IFwidGV4dGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb250U2l6ZTogZm9ybWUucGllZHNpemUgKyBcInB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ0xlZnQ6IFwiMWNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ1JpZ2h0OiBcIjFjbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGZvcm1lLnBpZWR9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Zvcm1lLnR5cGVGb290ZXIgPT09IFwiaW1hZ2VcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGltZyBzcmM9e2AvZ2FsbGVyeS8ke2Zvcm1lLmZvb3RlckltYWdlfWB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aWR0aDogXCIyMWNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtaW5IZWlnaHQ6IGZvcm1lLmZvb3RlckhlaWdodCArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYWx0PVwiXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgIDwvPlxuICAgICk7XG5cbn0pOyIsImxldCBOdW1iZXJGb3JtYXQ7XG5leHBvcnQgZGVmYXVsdCBOdW1iZXJGb3JtYXQgPSAocHJvcHMpID0+IHtcblxuICAgIGNvbnN0IGZvcm1hdE51bWJlciA9IChudW0sIHByZWNpc2lvbiwgc2VwYXJhdG9yKSA9PiB7XG4gICAgICAgIGxldCBwYXJ0cztcbiAgICAgICAgbnVtID0gTnVtYmVyKG51bSk7XG4gICAgICAgIG51bSA9ICh0eXBlb2YgcHJlY2lzaW9uICE9PSAndW5kZWZpbmVkJyA/IG51bS50b0ZpeGVkKHByZWNpc2lvbikgOiBudW0pLnRvU3RyaW5nKCk7XG4gICAgICAgIHBhcnRzID0gbnVtLnNwbGl0KCcuJyk7XG4gICAgICAgIHBhcnRzWzBdID0gcGFydHNbMF0udG9TdHJpbmcoKS5yZXBsYWNlKC8oXFxkKSg/PShcXGR7M30pKyg/IVxcZCkpL2csICckMScgKyAoc2VwYXJhdG9yIHx8ICcsJykpO1xuICAgICAgICByZXR1cm4gcGFydHMuam9pbignLCcpO1xuICAgIH1cblxuICAgIHJldHVybiAoZm9ybWF0TnVtYmVyKHByb3BzLm51bWIsMiwgJyAnKSk7XG5cbn07XG5cbiIsIi8qKlxuICoganF1ZXJ5LnNpbXBsZVBhZ2luYXRpb24uanNcbiAqIEB2ZXJzaW9uOiB2MS4wLjBcbiAqIEBhdXRob3I6IFNlYmFzdGlhbiBNYXJ1bGFuZGEgaHR0cDovL21hcnVsYW5kYS5tZVxuICogQHNlZTogaHR0cHM6Ly9naXRodWIuY29tL3NtYXJ1bGFuZGEvanF1ZXJ5LnNpbXBsZVBhZ2luYXRpb25cbiAqL1xuXG4oZnVuY3Rpb24oJCkge1xuXG5cdCQuZm4uc2ltcGxlUGFnaW5hdGlvbiA9IGZ1bmN0aW9uKG9wdGlvbnMpIHtcblxuXHRcdGNvbnN0IGRlZmF1bHRzID0ge1xuXHRcdFx0cGVyUGFnZTogMjAsXG5cdFx0XHRjb250YWluZXJDbGFzczogJycsXG5cdFx0XHRwcmV2aW91c0J1dHRvbkNsYXNzOiAnJyxcblx0XHRcdG5leHRCdXR0b25DbGFzczogJycsXG5cdFx0XHRwcmV2aW91c0J1dHRvblRleHQ6ICc8Jyxcblx0XHRcdG5leHRCdXR0b25UZXh0OiAnPicsXG5cdFx0XHRjdXJyZW50UGFnZTogMVxuXHRcdH07XG5cblx0XHRjb25zdCBzZXR0aW5ncyA9ICQuZXh0ZW5kKHt9LCBkZWZhdWx0cywgb3B0aW9ucyk7XG5cblx0XHRyZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uKCkge1xuXHRcdFx0Y29uc3QgJHJvd3MgPSAkKG9wdGlvbnMsIHRoaXMpO1xuXHRcdFx0Y29uc3QgcGFnZXMgPSBNYXRoLmNlaWwoJHJvd3MubGVuZ3RoIC8gc2V0dGluZ3MucGVyUGFnZSk7XG5cblx0XHRcdGNvbnN0IGNvbnRhaW5lciA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xuXHRcdFx0Y29uc3QgYlByZXZpb3VzID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnYnV0dG9uJyk7XG5cdFx0XHRjb25zdCBiTmV4dCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2J1dHRvbicpO1xuXHRcdFx0Y29uc3Qgb2YgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdzcGFuJyk7XG5cblxuXHRcdFx0YlByZXZpb3VzLmlubmVySFRNTCA9IHNldHRpbmdzLnByZXZpb3VzQnV0dG9uVGV4dDtcblx0XHRcdGJOZXh0LmlubmVySFRNTCA9IHNldHRpbmdzLm5leHRCdXR0b25UZXh0O1xuXG5cdFx0XHRjb250YWluZXIuY2xhc3NOYW1lID0gc2V0dGluZ3MuY29udGFpbmVyQ2xhc3M7XG5cdFx0XHRiUHJldmlvdXMuY2xhc3NOYW1lID0gc2V0dGluZ3MucHJldmlvdXNCdXR0b25DbGFzcztcblx0XHRcdGJOZXh0LmNsYXNzTmFtZSA9IHNldHRpbmdzLm5leHRCdXR0b25DbGFzcztcblxuXHRcdFx0YlByZXZpb3VzLnN0eWxlLm1hcmdpblJpZ2h0ID0gJzhweCc7XG5cdFx0XHRiUHJldmlvdXMuY2xhc3NMaXN0LmFkZCgnYnRuJyk7XG5cdFx0XHRiUHJldmlvdXMuY2xhc3NMaXN0LmFkZCgnYmctYmx1ZScpO1xuXHRcdFx0YlByZXZpb3VzLmNsYXNzTGlzdC5hZGQoJ2JvbG83MDAnKTtcblx0XHRcdGJOZXh0LnN0eWxlLm1hcmdpbkxlZnQgPSAnOHB4Jztcblx0XHRcdGJOZXh0LmNsYXNzTGlzdC5hZGQoJ2J0bicpO1xuXHRcdFx0Yk5leHQuY2xhc3NMaXN0LmFkZCgnYmctYmx1ZScpO1xuXHRcdFx0Yk5leHQuY2xhc3NMaXN0LmFkZCgnYm9sbzcwMCcpO1xuXHRcdFx0Y29udGFpbmVyLnN0eWxlLnRleHRBbGlnbiA9IFwicmlnaHRcIjtcblx0XHRcdGNvbnRhaW5lci5zdHlsZS5tYXJnaW5Cb3R0b20gPSAnMjBweCc7XG5cblx0XHRcdGNvbnRhaW5lci5hcHBlbmRDaGlsZChiUHJldmlvdXMpO1xuXHRcdFx0Y29udGFpbmVyLmFwcGVuZENoaWxkKG9mKTtcblx0XHRcdGNvbnRhaW5lci5hcHBlbmRDaGlsZChiTmV4dCk7XG5cblx0XHRcdCQodGhpcykuYWZ0ZXIoY29udGFpbmVyKTtcblxuXHRcdFx0dXBkYXRlKCk7XG5cblx0XHRcdCQoYk5leHQpLmNsaWNrKGZ1bmN0aW9uKCkge1xuXHRcdFx0XHRpZiAoc2V0dGluZ3MuY3VycmVudFBhZ2UgKyAxID4gcGFnZXMpIHtcblx0XHRcdFx0XHRzZXR0aW5ncy5jdXJyZW50UGFnZSA9IHBhZ2VzO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlKys7XG5cdFx0XHRcdH1cblx0XHRcdFx0dXBkYXRlKCk7XG5cdFx0XHR9KTtcblxuXHRcdFx0JChiUHJldmlvdXMpLmNsaWNrKGZ1bmN0aW9uKCkge1xuXHRcdFx0XHRpZiAoc2V0dGluZ3MuY3VycmVudFBhZ2UgLSAxIDwgMSkge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlID0gMTtcblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRzZXR0aW5ncy5jdXJyZW50UGFnZS0tO1xuXHRcdFx0XHR9XG5cdFx0XHRcdHVwZGF0ZSgpO1xuXHRcdFx0fSk7XG5cblx0XHRcdGZ1bmN0aW9uIHVwZGF0ZSgpIHtcblx0XHRcdFx0Y29uc3QgZnJvbSA9ICgoc2V0dGluZ3MuY3VycmVudFBhZ2UgLSAxKSAqIHNldHRpbmdzLnBlclBhZ2UpICsgMTtcblx0XHRcdFx0bGV0IHRvID0gZnJvbSArIHNldHRpbmdzLnBlclBhZ2UgLSAxO1xuXG5cdFx0XHRcdGlmICh0byA+ICRyb3dzLmxlbmd0aCkge1xuXHRcdFx0XHRcdHRvID0gJHJvd3MubGVuZ3RoO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0JHJvd3MuaGlkZSgpO1xuXHRcdFx0XHQkcm93cy5zbGljZSgoZnJvbS0xKSwgdG8pLnNob3coKTtcblxuXHRcdFx0XHRvZi5pbm5lckhUTUwgPSBmcm9tICsgJyDDoCAnICsgdG8gKyAnIHN1ciAnICsgJHJvd3MubGVuZ3RoICsgJyBsaWduZXMnO1xuXG5cdFx0XHRcdGlmICgkcm93cy5sZW5ndGggPD0gc2V0dGluZ3MucGVyUGFnZSkge1xuXHRcdFx0XHRcdCQoY29udGFpbmVyKS5oaWRlKCk7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0JChjb250YWluZXIpLnNob3coKTtcblx0XHRcdFx0fVxuXHRcdFx0fVxuXHRcdH0pO1xuXG5cdH1cblxufShqUXVlcnkpKTtcbiIsInZhciBpc09iamVjdCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1vYmplY3QnKTtcblxudmFyIGZsb29yID0gTWF0aC5mbG9vcjtcblxuLy8gYElzSW50ZWdyYWxOdW1iZXJgIGFic3RyYWN0IG9wZXJhdGlvblxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1pc2ludGVncmFsbnVtYmVyXG4vLyBlc2xpbnQtZGlzYWJsZS1uZXh0LWxpbmUgZXMvbm8tbnVtYmVyLWlzaW50ZWdlciAtLSBzYWZlXG5tb2R1bGUuZXhwb3J0cyA9IE51bWJlci5pc0ludGVnZXIgfHwgZnVuY3Rpb24gaXNJbnRlZ2VyKGl0KSB7XG4gIHJldHVybiAhaXNPYmplY3QoaXQpICYmIGlzRmluaXRlKGl0KSAmJiBmbG9vcihpdCkgPT09IGl0O1xufTtcbiIsInZhciAkID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2V4cG9ydCcpO1xudmFyIGlzSW50ZWdyYWxOdW1iZXIgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtaW50ZWdyYWwtbnVtYmVyJyk7XG5cbi8vIGBOdW1iZXIuaXNJbnRlZ2VyYCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtbnVtYmVyLmlzaW50ZWdlclxuJCh7IHRhcmdldDogJ051bWJlcicsIHN0YXQ6IHRydWUgfSwge1xuICBpc0ludGVnZXI6IGlzSW50ZWdyYWxOdW1iZXJcbn0pO1xuIiwiLyoqXG4gKiBAZmlsZU92ZXJ2aWV3IOWumuS5iXRhYmxl5oiW6ICFYXJyYXnovazljJbmiJBleGNlbOihqOagvOeahOWFrOWFseaWueazlVxuICovXG5cblxuXG4oZnVuY3Rpb24oKSB7XG4gICAgLyoqXG4gICAgICogQGNsYXNzIFRhYmxlVG9FeGNlbCDlrprkuYkgdGFibGXmiJbogIUgYXJyYXnovazljJbmiJAgZXhjZWzooajmoLznmoTlhazlhbHmlrnms5VcbiAgICAgKi9cbiAgICBUYWJsZVRvRXhjZWwgPSBmdW5jdGlvbigpIHt9XG4gICAgLyoqXG4gICAgICpAbGVuZHMgVGFibGVUb0V4Y2VsLnByb3RvdHlwZVxuICAgICAqL1xuICAgIFRhYmxlVG9FeGNlbC5wcm90b3R5cGUgPSB7XG4gICAgICAgIC8qKlxuICAgICAgICAgKuWIpOaWrUlF5ZKM6Z2eSUXmtY/op4jlmahcbiAgICAgICAgICovXG4gICAgICAgIGNoZWNrSXNJRTogISEobmF2aWdhdG9yLnVzZXJBZ2VudC5pbmRleE9mKCdUcmlkZW50JykgPiAtMSAmJiBuYXZpZ2F0b3IudXNlckFnZW50LmluZGV4T2YoJ09wZXJhJykgPT09IC0xKSxcbiAgICAgICAgLyoqXG4gICAgICAgICAq5Yik5pat5piv5ZCmbWFj57O757ufXG4gICAgICAgICAqL1xuICAgICAgICBjaGVja0lzTWFjOiBuYXZpZ2F0b3IudXNlckFnZW50LmluZGV4T2YoXCJNYWNcIikgIT0gLTEsXG4gICAgICAgIC8qKlxuICAgICAgICAgKuWFpeWPo1xuICAgICAgICAgKkBwYXJhbSB7U3RyaW5nfSB0YWJsZSDpobXpnaLlhoV0YWJsZeeahGlk5bGe5oCn5YC8ICDkuI3kvKDlgLzliJnku47kuIDkuKrkuoznu7TmlbDnu4Tph4znlJ/miJB0YWJsZVxuICAgICAgICAgKi9cbiAgICAgICAgcmVuZGVyOiBmdW5jdGlvbihwYXJhbSwgdGl0bGUpIHtcbiAgICAgICAgICAgIGlmICh0aGlzLmNoZWNrSXNJRSkge1xuICAgICAgICAgICAgICAgIHRoaXMuY3JlYXRlRXhjZWxJRShwYXJhbSwgdGl0bGUpO1xuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICB0aGlzLmNyZWF0ZUV4Y2VsKHBhcmFtLCB0aXRsZSlcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSxcbiAgICAgICAgLyoqXG4gICAgICAgICrliJvlu7rooajmoLzvvIxyZW5kZXLmlrnms5XkvKDpgJLnmoTlj4LmlbDmmK/mlbDnu4Tml7bosIPnlKhcbiAgICAgICAgKkBwYXJhbSB7QXJyYXl9IHBhcmFtIOaOpeWPo+S8oOi/h+adpeeahOaVsOe7hFxuICAgICAgICAq5pWw57uE5qC85byPXG4gICAgICAgICpAZXhhbXBsZVxuICAgICAgICB2YXIgb2JqPVtcbiAgICAgICAgICAgIFsnTGFzdE5hbWUnLCdTYWxlcycsJ0NvdW50cnknLCdRdWFydGVyJ10sXG4gICAgICAgICAgICBbJ1NtaXRoJywnMTY3NTMnLCdVSycsJ1F0ciAzJ10sXG4gICAgICAgICAgICBbJ0pvaG5zb24nLCcxNDgwOCcsJ1VTQScsJ1F0ciA0J11cbiAgICAgICAgXTtcbiAgICAgICAgKi9cbiAgICAgICAgY3JlYXRlVGFibGU6IGZ1bmN0aW9uKHBhcmFtLCB0aXRsZSkge1xuICAgICAgICAgICAgdmFyIHRyTGVuID0gcGFyYW0ubGVuZ3RoO1xuICAgICAgICAgICAgdmFyIHRkTGVuID0gcGFyYW1bMF0ubGVuZ3RoO1xuICAgICAgICAgICAgdmFyIHRyQXJyID0gW107XG4gICAgICAgICAgICB2YXIgc3R5bGUgPSB0aGlzLmNoZWNrSXNNYWMgPyBcIlwiIDogJ21zby1udW1iZXItZm9ybWF0OlwiXFxAXCInO1xuICAgICAgICAgICAgaWYgKHRpdGxlKSB7XG4gICAgICAgICAgICAgICAgdmFyIGhkTGVuID0gdGl0bGUubGVuZ3RoO1xuICAgICAgICAgICAgICAgIGZvciAodmFyIG4gPSAwOyBuIDwgaGRMZW47IG4rKykge1xuICAgICAgICAgICAgICAgICAgICB2YXIgYm9yZGVyID0gbiAlIDIgIT0gMCA/IFwiYm9yZGVyLXRvcDoxcHggc29saWQgI2ZmZjtcIiA6IFwiXCI7XG4gICAgICAgICAgICAgICAgICAgIHRyQXJyLnB1c2goJzx0cj48dGQgc3R5bGU9XCJiYWNrZ3JvdW5kOicrdGl0bGVbbl0uYmcrJzsgY29sb3I6Jyt0aXRsZVtuXS5jb2xvcisnO1wiIGNvbHNwYW49XCInICsgcGFyYW1bMF0ubGVuZ3RoICsgJ1wiPicgKyB0aXRsZVtuXS50ZXh0ICsgJzwvdGQ+PC90cj4nKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBmb3IgKHZhciBpID0gMDsgaSA8IHRyTGVuOyBpKyspIHtcbiAgICAgICAgICAgICAgICB2YXIgdGRBcnIgPSBbXTtcbiAgICAgICAgICAgICAgICBmb3IgKHZhciBvID0gMDsgbyA8IHRkTGVuOyBvKyspIHtcbiAgICAgICAgICAgICAgICAgICAgdmFyIHRkSHRtbCA9ICc8dGQgc3R5bGU9JyArIHN0eWxlICsgJz4nICsgcGFyYW1baV1bb10gKyAnPC90ZD4nO1xuICAgICAgICAgICAgICAgICAgICB0ZEFyci5wdXNoKHRkSHRtbCk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIHZhciB0ckh0bWwgPSAnPHRyPicgKyB0ZEFyci5qb2luKFwiXCIpICsgJzwvdHI+JztcbiAgICAgICAgICAgICAgICB0ckFyci5wdXNoKHRySHRtbCk7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICByZXR1cm4gdHJBcnIuam9pbihcIlwiKTtcbiAgICAgICAgfSxcbiAgICAgICAgLyoqXG4gICAgICAgICAq5qC55o2u6aG16Z2i5YaF5a2Y5Zyo55qEdGFibGXnlJ/miJBleGNlbCAgIOmdnklF5rWP6KeI5ZmoXG4gICAgICAgICAqQHBhcmFtIHtTdHJpbmd9IHBhcmFtIOmhtemdouWGhXRhYmxl55qEaWTlsZ7mgKflgLxcbiAgICAgICAgICpvclxuICAgICAgICAgKkBwYXJhbSB7QXJyYXl9IHBhcmFtIOaOpeWPo+S8oOi/h+adpeeahOS6jOe7tOaVsOe7hFxuICAgICAgICAgKi9cbiAgICAgICAgY3JlYXRlRXhjZWw6IGZ1bmN0aW9uKHBhcmFtLCB0aXRsZSkge1xuICAgICAgICAgICAgdmFyIHNlbGYgPSB0aGlzO1xuICAgICAgICAgICAgdmFyIHRhYmxlSHRtbCA9IG51bGw7XG4gICAgICAgICAgICB2YXIgZnVuYyA9IChmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICAgICB2YXIgdXJpID0gJ2RhdGE6YXBwbGljYXRpb24vdm5kLm1zLWV4Y2VsO2Jhc2U2NCwnO1xuICAgICAgICAgICAgICAgIHZhciB0ZW1wbGF0ZSA9ICc8aHRtbCB4bWxuczpvPVwidXJuOnNjaGVtYXMtbWljcm9zb2Z0LWNvbTpvZmZpY2U6b2ZmaWNlXCIgeG1sbnM6eD1cInVybjpzY2hlbWFzLW1pY3Jvc29mdC1jb206b2ZmaWNlOmV4Y2VsXCIgeG1sbnM9XCJodHRwOi8vd3d3LnczLm9yZy9UUi9SRUMtaHRtbDQwXCI+PGhlYWQ+PCEtLVtpZiBndGUgbXNvIDldPjx4bWw+PHg6RXhjZWxXb3JrYm9vaz48eDpFeGNlbFdvcmtzaGVldHM+PHg6RXhjZWxXb3Jrc2hlZXQ+PHg6TmFtZT57d29ya3NoZWV0fTwveDpOYW1lPjx4OldvcmtzaGVldE9wdGlvbnM+PHg6RGlzcGxheUdyaWRsaW5lcy8+PC94OldvcmtzaGVldE9wdGlvbnM+PC94OkV4Y2VsV29ya3NoZWV0PjwveDpFeGNlbFdvcmtzaGVldHM+PC94OkV4Y2VsV29ya2Jvb2s+PC94bWw+PCFbZW5kaWZdLS0+PHN0eWxlPnRke21zby1udW1iZXItZm9ybWF0OlwiXFxAXCI7fTwvc3R5bGU+PC9oZWFkPjxib2R5Pjx0YWJsZT57dGFibGV9PC90YWJsZT48L2JvZHk+PC9odG1sPic7XG4gICAgICAgICAgICAgICAgdmFyIGJhc2U2NCA9IGZ1bmN0aW9uKHMpIHtcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIHdpbmRvdy5idG9hKHVuZXNjYXBlKGVuY29kZVVSSUNvbXBvbmVudChzKSkpXG4gICAgICAgICAgICAgICAgfTtcbiAgICAgICAgICAgICAgICB2YXIgZm9ybWF0ID0gZnVuY3Rpb24ocywgYykge1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gcy5yZXBsYWNlKC97KFxcdyspfS9nLCBmdW5jdGlvbihtLCBwKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gY1twXTtcbiAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgcmV0dXJuIGZ1bmN0aW9uKHRhYmxlLCBuYW1lKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmICh0eXBlb2YocGFyYW0pID09IFwic3RyaW5nXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlSHRtbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKHBhcmFtKS5pbm5lckhUTUw7XG4gICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICB0YWJsZUh0bWwgPSBzZWxmLmNyZWF0ZVRhYmxlKHBhcmFtLCB0aXRsZSk7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgdmFyIGN0eCA9IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHdvcmtzaGVldDogbmFtZSB8fCAnV29ya3NoZWV0JyxcbiAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlOiB0YWJsZUh0bWxcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB2YXIgbGluayA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJhXCIpO1xuICAgICAgICAgICAgICAgICAgICBsaW5rLmhyZWYgPSB1cmkgKyBiYXNlNjQoZm9ybWF0KHRlbXBsYXRlLCBjdHgpKTtcbiAgICAgICAgICAgICAgICAgICAgbGluay5kb3dubG9hZCA9ICdkb3dubG9hZC54bHMnO1xuICAgICAgICAgICAgICAgICAgICBkb2N1bWVudC5ib2R5LmFwcGVuZENoaWxkKGxpbmspXG4gICAgICAgICAgICAgICAgICAgIGxpbmsuY2xpY2soKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KSgpO1xuICAgICAgICAgICAgZnVuYygpXG4gICAgICAgIH0sXG4gICAgICAgIC8qKlxuICAgICAgICAgKuagueaNrumhtemdouWGheWtmOWcqOeahHRhYmxl55Sf5oiQZXhjZWwgICBJRea1j+iniOWZqFxuICAgICAgICAgKkBwYXJhbSB7U3RyaW5nfSBwYXJhbSDpobXpnaLlhoV0YWJsZeeahGlk5bGe5oCn5YC8XG4gICAgICAgICAqb3JcbiAgICAgICAgICpAcGFyYW0ge0FycmF5fSBwYXJhbSDmjqXlj6PkvKDov4fmnaXnmoTkuoznu7TmlbDnu4RcbiAgICAgICAgICovXG4gICAgICAgIGNyZWF0ZUV4Y2VsSUU6IGZ1bmN0aW9uKHBhcmFtLCB0aXRsZSkge1xuICAgICAgICAgICAgdmFyIHRhYmxlSHRtbCA9IG51bGw7XG4gICAgICAgICAgICBpZiAodHlwZW9mKHBhcmFtKSA9PSBcInN0cmluZ1wiKSB7XG4gICAgICAgICAgICAgICAgdGFibGVIdG1sID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQocGFyYW0pLm91dGVySFRNTDtcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgdGFibGVIdG1sID0gJzx0YWJsZT4nICsgdGhpcy5jcmVhdGVUYWJsZShwYXJhbSwgdGl0bGUpICsgJzwvdGFibGU+JztcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgd2luZG93LmNsaXBib2FyZERhdGEuc2V0RGF0YShcIlRleHRcIiwgdGFibGVIdG1sKTtcbiAgICAgICAgICAgIHZhciBvYmpFeGNlbCA9IG5ldyBBY3RpdmVYT2JqZWN0KFwiRXhjZWwuQXBwbGljYXRpb25cIik7XG4gICAgICAgICAgICBvYmpFeGNlbC52aXNpYmxlID0gdHJ1ZTtcbiAgICAgICAgICAgIHZhciBvYmpXb3JrYm9vayA9IG9iakV4Y2VsLldvcmtib29rcy5BZGQ7XG4gICAgICAgICAgICB2YXIgb2JqV29ya3NoZWV0ID0gb2JqV29ya2Jvb2suV29ya3NoZWV0cygxKTtcbiAgICAgICAgICAgIG9ialdvcmtzaGVldC5QYXN0ZTtcbiAgICAgICAgfVxuICAgIH1cbiAgICAvLyBBTUQgJiYgQ01EXG4gICAgaWYgKHR5cGVvZiBkZWZpbmUgPT09ICdmdW5jdGlvbicpIHtcbiAgICAgICAgZGVmaW5lKGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgcmV0dXJuIFRhYmxlVG9FeGNlbDtcbiAgICAgICAgfSk7XG4gICAgICAgIC8vIENvbW1vbkpTXG4gICAgfSBlbHNlIGlmICh0eXBlb2YgbW9kdWxlICE9PSBcInVuZGVmaW5lZFwiICYmIG1vZHVsZSAhPT0gbnVsbCkge1xuICAgICAgICBtb2R1bGUuZXhwb3J0cyA9IFRhYmxlVG9FeGNlbDtcbiAgICAgICAgLy8gd2luZG93XG4gICAgfSBlbHNlIHtcbiAgICAgICAgd2luZG93LlRhYmxlVG9FeGNlbCA9IFRhYmxlVG9FeGNlbDtcbiAgICB9XG59KSgpO1xuIl0sIm5hbWVzIjpbIlJlYWN0IiwidXNlRWZmZWN0IiwidXNlUmVmIiwidXNlU3RhdGUiLCJ1c2VSZWFjdFRvUHJpbnQiLCJQcmludEZhY3R1cmUiLCJkZXZpY2VUeXBlIiwiJCIsImNyZWF0ZVJvb3QiLCJSZWFjdEhUTUxUYWJsZVRvRXhjZWwiLCJheGlvcyIsIk51bWJlckZvcm1hdCIsIkZhY3R1cmUiLCJjbGllbnQiLCJzZXRDbGllbnQiLCJjaGFudGllciIsInNldENoYW50aWVyIiwiZGV2aXMiLCJzZXREZXZpcyIsImZhY3R1cmUiLCJzZXRGYWN0dXJlIiwiZGVjb21wdGUiLCJzZXREZWNvbXB0ZSIsImxpZ25lcyIsInNldExpZ25lcyIsImdyb3VwZXMiLCJzZXRHcm91cGVzIiwiZGRlY29tcHRlcyIsInNldEREZWNvbXB0ZXMiLCJ0b3RhbGFjb21wdGVzIiwic2V0VG90YWxhY29tcHRlcyIsImZvcm1lIiwic2V0Zm9ybWUiLCJ0b3RhbGRlY29tcHRlcyIsInRvdGFscmV0ZW51ZSIsInJlcXVpcmUiLCJjb21wb25lbnRSZWYiLCJoYW5kbGVQcmludCIsImNvbnRlbnQiLCJjdXJyZW50IiwibHRyaW0iLCJzdHIiLCJyZXBsYWNlIiwicGRmRmFjdHVyZSIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImNzcyIsIndpbmRvdyIsImxvY2F0aW9uIiwiaHJlZiIsImlkIiwib24iLCJkZCIsInZhbCIsImVtcHR5IiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsImFwcGVuZCIsInNvcnRsaWduZXMiLCJzb3J0IiwiYSIsImIiLCJOdW1iZXIiLCJpc0ludGVnZXIiLCJwYXJzZUludCIsInJlZmVyZW5jZSIsInNvcnRncm91cGVzIiwiZmV0Y2hGYWN0dXJlIiwiZGRlIiwiSlNPTiIsInBhcnNlIiwiZGRlYyIsInR5cGUiLCJhY29tcHRlIiwiZ3JvdXBlIiwicmVuZGVyTGlnbmUiLCJtYXAiLCJsaWduIiwiYWFyZWYiLCJ0ZXh0QWxpZ24iLCJtYXhXaWR0aCIsIm1pbldpZHRoIiwiX19odG1sIiwiZGVzaWduYXRpb24iLCJ6b25lIiwidW5pdGUiLCJxdWFudGl0ZSIsInB1IiwiYWFyZW0iLCJyZW1pc2UiLCJyZW5kZXJHcm91cGUiLCJncm91cCIsInN0IiwicmVuZGVyTGlnbmVHcm91cGUiLCJ0b1N0cmluZyIsImRlbEZhY3R1cmUiLCJyZXNwIiwidmFsdWUiLCJpZGNoYW4iLCJtb2RhbCIsIm1ldGhvZCIsInVybCIsInRoZW4iLCJyZXNwb25zZSIsImVycm9yIiwicmVsb2FkIiwiZXZlbnQiLCJjbG9zZXN0IiwidmFsaWQiLCJoaWRlIiwiaWRjaGFudGllciIsImlkZmEiLCJhamF4IiwiZGF0YSIsInN0cmluZ2lmeSIsInNlcmlhbGl6ZU9iamVjdCIsImNvbnRlbnRUeXBlIiwiZGF0YVR5cGUiLCJzdWNjZXNzIiwicmVzcGRhdGEiLCJ0ZXh0U3RhdHVzIiwianFYSFIiLCJ4aHIiLCJ0ZXh0IiwiQ0tFRElUT1IiLCJpbnN0YW5jZXMiLCJnZXREYXRhIiwic3RhdHVzIiwiaWRsaWduZSIsImlkZmFjdHVyZSIsIm9mZiIsIkZvcm1EYXRhIiwicHJvY2Vzc0RhdGEiLCJjYWNoZSIsImRlY3MiLCJldGF0IiwiYXBheWVyIiwidmFsZXVyIiwicGFyc2VGbG9hdCIsImdhcmFudGllIiwiZmluaXRpb24iLCJwcm9yYXRhIiwidHJjIiwiY29uc29sZSIsImxvZyIsInBhZGRpbmciLCJub21jbGllbnQiLCJub21jaGFudGllciIsIm51bWZhY3R1cmUiLCJpZGRldmlzIiwibnVtZGVjb21wdGUiLCJjb250YWluZXIiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwicm9vdCIsInJlbmRlciIsIm51bWJlclRvTGV0dGVycyIsImZvcndhcmRSZWYiLCJwcm9wcyIsInJlZiIsImZhY2RhdGUiLCJtb2NvZGUiLCJ0b3RhbGh0c29sZGUiLCJ0b3RhbHR2YSIsInRvdGFsdHRjc29sZGUiLCJhZGRpIiwic3R2YSIsImRlZHVjdGlvbiIsInRvdGFsaHQiLCJwdHZhIiwidHZhIiwid2lkdGgiLCJtaW5IZWlnaHQiLCJib3hTaGFkb3ciLCJiYWNrZ3JvdW5kQ29sb3IiLCJoZWFkZXJXaXRoIiwiaGVpZ2h0IiwiaGVhZGVySGVpZ2h0IiwicGFkZGluZ0xlZnQiLCJwYWRkaW5nUmlnaHQiLCJib3JkZXIiLCJ0b1VwcGVyQ2FzZSIsImNvbnRyaWJ1YWJsZSIsImFkcmVzc2UiLCJtYWlsIiwiY2xlYXIiLCJmYWN0cmVmZXJlbmNlIiwiY29sb3IiLCJhdmFuY2VtZW50IiwiY291bnRkZWNvbXBlIiwidHRjIiwibGFuZyIsInRleHREZWNvcmF0aW9uIiwiaW5mb3JtYXRpb24iLCJ2cmVtaXNlIiwicmVtdGh0IiwicG91cmNlbnRhZ2UiLCJhYmFzZXR2YSIsImJhc2V0dmEiLCJ0b3RhbHR0YyIsInZ0dmEiLCJib3JkZXJCb3R0b20iLCJtb25uYWllIiwiY29kZSIsInRodCIsImZvbnRTaXplIiwibWFyZ2luVG9wIiwidGV0ZURCIiwiZGlzcGxheSIsInR5cGVFbnRldGUiLCJsaW5rIiwidGV0ZUgiLCJ0ZXRlWSIsInRldGVERCIsInRldGVERyIsInBhZGRpbmdUb3AiLCJ0ZXRlREgiLCJwYWRkaW5nQm90dG9tIiwiaGVhZGVyVGV4dCIsInBpZWQiLCJ0eXBlRm9vdGVyIiwicGllZHNpemUiLCJmb290ZXJJbWFnZSIsImZvb3RlckhlaWdodCIsImZvcm1hdE51bWJlciIsIm51bSIsInByZWNpc2lvbiIsInNlcGFyYXRvciIsInBhcnRzIiwidG9GaXhlZCIsInNwbGl0Iiwiam9pbiIsIm51bWIiLCJmbiIsInNpbXBsZVBhZ2luYXRpb24iLCJvcHRpb25zIiwiZGVmYXVsdHMiLCJwZXJQYWdlIiwiY29udGFpbmVyQ2xhc3MiLCJwcmV2aW91c0J1dHRvbkNsYXNzIiwibmV4dEJ1dHRvbkNsYXNzIiwicHJldmlvdXNCdXR0b25UZXh0IiwibmV4dEJ1dHRvblRleHQiLCJjdXJyZW50UGFnZSIsInNldHRpbmdzIiwiZXh0ZW5kIiwiZWFjaCIsIiRyb3dzIiwicGFnZXMiLCJNYXRoIiwiY2VpbCIsImxlbmd0aCIsImNyZWF0ZUVsZW1lbnQiLCJiUHJldmlvdXMiLCJiTmV4dCIsIm9mIiwiaW5uZXJIVE1MIiwiY2xhc3NOYW1lIiwic3R5bGUiLCJtYXJnaW5SaWdodCIsImNsYXNzTGlzdCIsImFkZCIsIm1hcmdpbkxlZnQiLCJtYXJnaW5Cb3R0b20iLCJhcHBlbmRDaGlsZCIsImFmdGVyIiwidXBkYXRlIiwiY2xpY2siLCJmcm9tIiwidG8iLCJzbGljZSIsInNob3ciLCJqUXVlcnkiXSwic291cmNlUm9vdCI6IiJ9