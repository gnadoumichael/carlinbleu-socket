(self["webpackChunk"] = self["webpackChunk"] || []).push([["apbons"],{

/***/ "./assets/apbons.js":
/*!**************************!*\
  !*** ./assets/apbons.js ***!
  \**************************/
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
/* harmony import */ var _components_commande_Commande__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./components/commande/Commande */ "./assets/components/commande/Commande.js");















/***/ }),

/***/ "./assets/components/commande/Commande.js":
/*!************************************************!*\
  !*** ./assets/components/commande/Commande.js ***!
  \************************************************/
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
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.parse-float.js */ "./node_modules/core-js/modules/es.parse-float.js");
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12__);
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
/* harmony import */ var _PrintCommande__WEBPACK_IMPORTED_MODULE_36__ = __webpack_require__(/*! ./PrintCommande */ "./assets/components/commande/PrintCommande.js");
/* harmony import */ var _fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__ = __webpack_require__(/*! ../../fonctions/NumberFormat */ "./assets/fonctions/NumberFormat.js");
/* harmony import */ var react_edit_text__WEBPACK_IMPORTED_MODULE_38__ = __webpack_require__(/*! react-edit-text */ "./node_modules/react-edit-text/dist/index.modern.js");
/* harmony import */ var react_device_detect__WEBPACK_IMPORTED_MODULE_39__ = __webpack_require__(/*! react-device-detect */ "./node_modules/react-device-detect/dist/lib.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_44__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_40__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_40___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_40__);
/* harmony import */ var react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_41__ = __webpack_require__(/*! react-html-table-to-excel */ "./node_modules/react-html-table-to-excel/index.js");
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_42__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_43__ = __webpack_require__(/*! react-moment */ "./node_modules/react-moment/dist/index.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_43___default = /*#__PURE__*/__webpack_require__.n(react_moment__WEBPACK_IMPORTED_MODULE_43__);
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











var Commande = function Commande() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)(false),
    _useState2 = _slicedToArray(_useState, 2),
    loading = _useState2[0],
    setLoading = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)(''),
    _useState4 = _slicedToArray(_useState3, 2),
    bon = _useState4[0],
    setBon = _useState4[1];
  var _useState5 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)([]),
    _useState6 = _slicedToArray(_useState5, 2),
    lignes = _useState6[0],
    setLignes = _useState6[1];
  var _useState7 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)([]),
    _useState8 = _slicedToArray(_useState7, 2),
    groupes = _useState8[0],
    setGroupes = _useState8[1];
  var _useState9 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)([]),
    _useState10 = _slicedToArray(_useState9, 2),
    forme = _useState10[0],
    setforme = _useState10[1];
  var _useState11 = (0,react__WEBPACK_IMPORTED_MODULE_34__.useState)([]),
    _useState12 = _slicedToArray(_useState11, 2),
    formes = _useState12[0],
    setformes = _useState12[1];
  var fetchBon = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      var bbon, forme, formes;
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            bbon = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#jsonbon').val());
            forme = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#jsonforme').val());
            formes = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#jsonformes').val());
            setBon(bbon);
            setLignes(bbon.lignes);
            setGroupes(bbon.groupes);
            setLoading(true);
            setforme(forme);
            setformes(formes);
            if (bbon.preparation !== null) {
              setSuivi(bbon.preparation.lignes);
            }
          case 10:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function fetchBon() {
      return _ref.apply(this, arguments);
    };
  }();
  (0,react__WEBPACK_IMPORTED_MODULE_34__.useEffect)(function () {
    fetchBon();
  }, []);
  var renderLigne = null;
  var renderCaisse = null;
  var renderGroupe = null;
  var renderGroupeMobile = null;
  var renderLigneMobile = null;
  var numberToLetters = __webpack_require__(/*! number-2-letters */ "./node_modules/number-2-letters/lib/index.js");
  var componentRef = (0,react__WEBPACK_IMPORTED_MODULE_34__.useRef)();
  var handlePrint = (0,react_to_print__WEBPACK_IMPORTED_MODULE_35__.useReactToPrint)({
    content: function content() {
      return componentRef.current;
    }
  });
  var handlePrinte = (0,react_to_print__WEBPACK_IMPORTED_MODULE_35__.useReactToPrint)({
    content: function content() {
      return componentRef.current;
    },
    onBeforeGetContent: function onBeforeGetContent() {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('.header').addClass("hide");
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('.footer').addClass("hide");
    },
    onAfterPrint: function onAfterPrint() {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('.header').removeClass("hide");
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('.footer').removeClass("hide");
    }
  });
  function pdfBon(e) {
    e.preventDefault();
    jquery__WEBPACK_IMPORTED_MODULE_40___default()("#prpdf").css("display", "block");
    window.location.href = "/crm/doc/attache/" + bon.id + "/bon/oui";
  }
  var formatNumber = function formatNumber(num, precision, separator) {
    var parts;
    num = Number(num);
    num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
    parts = num.split('.');
    parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + separator);
    return parts.join(',');
  };
  function dupliquerBon(_x2) {
    return _dupliquerBon.apply(this, arguments);
  }
  function _dupliquerBon() {
    _dupliquerBon = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee19(e) {
      return _regeneratorRuntime().wrap(function _callee19$(_context19) {
        while (1) switch (_context19.prev = _context19.next) {
          case 0:
            e.preventDefault();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ConfirmDelete').modal('show');
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#accept').click( /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee18() {
              return _regeneratorRuntime().wrap(function _callee18$(_context18) {
                while (1) switch (_context18.prev = _context18.next) {
                  case 0:
                    jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ConfirmDelete').modal('hide');
                    jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
                    _context18.next = 4;
                    return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
                      method: 'POST',
                      url: '/crm/bon/dupliquer/' + bon.id
                    }).then(function (response) {
                      window.location.href = '/crm/bon/' + response.data['result'] + '/' + bon.chantier.id;
                    })["catch"](function (error) {
                      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('toggle');
                      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
                    });
                  case 4:
                  case "end":
                    return _context18.stop();
                }
              }, _callee18);
            })));
          case 4:
          case "end":
            return _context19.stop();
        }
      }, _callee19);
    }));
    return _dupliquerBon.apply(this, arguments);
  }
  function saveRemise(_x3) {
    return _saveRemise.apply(this, arguments);
  }
  function _saveRemise() {
    _saveRemise = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee20(resp) {
      var val;
      return _regeneratorRuntime().wrap(function _callee20$(_context20) {
        while (1) switch (_context20.prev = _context20.next) {
          case 0:
            val = resp.value.replace(',', '.');
            if (!(resp.value !== '' && !isNaN(val))) {
              _context20.next = 7;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            _context20.next = 5;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'POST',
              url: '/crm/ligne/upd/bon/remise/' + resp.name + '/' + bon.id + '/' + resp.value.replace('.', ',')
            }).then(function (response) {
              window.location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 5:
            _context20.next = 8;
            break;
          case 7:
            window.location.reload();
          case 8:
          case "end":
            return _context20.stop();
        }
      }, _callee20);
    }));
    return _saveRemise.apply(this, arguments);
  }
  function savePu(_x4) {
    return _savePu.apply(this, arguments);
  }
  function _savePu() {
    _savePu = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee21(resp) {
      var val;
      return _regeneratorRuntime().wrap(function _callee21$(_context21) {
        while (1) switch (_context21.prev = _context21.next) {
          case 0:
            val = resp.value.replace(',', '.');
            if (!(resp.value !== '' && !isNaN(val))) {
              _context21.next = 7;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            _context21.next = 5;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'POST',
              url: '/crm/ligne/upd/bon/pu/' + resp.name + '/' + bon.id + '/' + resp.value.replace('.', ',')
            }).then(function (response) {
              window.location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 5:
            _context21.next = 8;
            break;
          case 7:
            window.location.reload();
          case 8:
          case "end":
            return _context21.stop();
        }
      }, _callee21);
    }));
    return _savePu.apply(this, arguments);
  }
  function saveQte(_x5) {
    return _saveQte.apply(this, arguments);
  }
  function _saveQte() {
    _saveQte = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee22(resp) {
      var val;
      return _regeneratorRuntime().wrap(function _callee22$(_context22) {
        while (1) switch (_context22.prev = _context22.next) {
          case 0:
            val = resp.value.replace(',', '.');
            if (!(resp.value !== '' && !isNaN(val))) {
              _context22.next = 7;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            _context22.next = 5;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'POST',
              url: '/crm/ligne/upd/bon/qte/' + resp.name + '/' + bon.id + '/' + resp.value.replace('.', ',')
            }).then(function (response) {
              window.location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 5:
            _context22.next = 8;
            break;
          case 7:
            window.location.reload();
          case 8:
          case "end":
            return _context22.stop();
        }
      }, _callee22);
    }));
    return _saveQte.apply(this, arguments);
  }
  function saveUnite(_x6) {
    return _saveUnite.apply(this, arguments);
  }
  function _saveUnite() {
    _saveUnite = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee23(resp) {
      return _regeneratorRuntime().wrap(function _callee23$(_context23) {
        while (1) switch (_context23.prev = _context23.next) {
          case 0:
            if (!(resp.value !== '')) {
              _context23.next = 6;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            _context23.next = 4;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'POST',
              url: '/crm/ligne/upd/bon/unite/' + resp.name + '/' + bon.id + '/' + resp.value
            }).then(function (response) {
              var bibon = response.data;
              setBon(bibon);
              setLignes(bibon.lignes);
              if (bibon.preparation !== null) {
                setSuivi(bibon.preparation.lignes);
              }
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('hide');
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 4:
            _context23.next = 7;
            break;
          case 6:
            window.location.reload();
          case 7:
          case "end":
            return _context23.stop();
        }
      }, _callee23);
    }));
    return _saveUnite.apply(this, arguments);
  }
  var deleteLigne = function deleteLigne(delid) {
    if (react_device_detect__WEBPACK_IMPORTED_MODULE_39__.deviceType !== "mobile") {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalList').modal('toggle');
    }
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ConfirmDelete').modal('show');
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('#accept').click( /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ConfirmDelete').modal('hide');
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            _context2.next = 4;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'DELETE',
              url: '/crm/ligne/delete/' + bon.id + '/' + bon.chantier.id + '/' + delid + '/bon',
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              window.location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('hide');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 4:
          case "end":
            return _context2.stop();
        }
      }, _callee2);
    })));
  };
  var deleteGroupe = function deleteGroupe(delid) {
    if (react_device_detect__WEBPACK_IMPORTED_MODULE_39__.deviceType !== "mobile") {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalList').modal('toggle');
    }
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ConfirmDelete').modal('show');
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('#accept').click( /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
      return _regeneratorRuntime().wrap(function _callee3$(_context3) {
        while (1) switch (_context3.prev = _context3.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ConfirmDelete').modal('hide');
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            _context3.next = 4;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'DELETE',
              url: '/crm/ligne/groupe/' + bon.id + '/' + bon.chantier.id + '/' + delid + '/bon',
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              window.location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('hide');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 4:
          case "end":
            return _context3.stop();
        }
      }, _callee3);
    })));
  };
  function delBon(_x7) {
    return _delBon.apply(this, arguments);
  }
  function _delBon() {
    _delBon = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee25(resp) {
      return _regeneratorRuntime().wrap(function _callee25$(_context25) {
        while (1) switch (_context25.prev = _context25.next) {
          case 0:
            if (resp.value !== '') {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ConfirmDelete').modal('show');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#accept').click( /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee24() {
                return _regeneratorRuntime().wrap(function _callee24$(_context24) {
                  while (1) switch (_context24.prev = _context24.next) {
                    case 0:
                      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ConfirmDelete').modal('hide');
                      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
                      _context24.next = 4;
                      return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
                        method: 'DELETE',
                        url: '/crm/bon/del/' + bon.id
                      }).then(function (response) {
                        window.location.reload();
                      })["catch"](function (error) {
                        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
                      });
                    case 4:
                    case "end":
                      return _context24.stop();
                  }
                }, _callee24);
              })));
            } else {
              window.location.reload();
            }
          case 1:
          case "end":
            return _context25.stop();
        }
      }, _callee25);
    }));
    return _delBon.apply(this, arguments);
  }
  function restaureBon(_x8) {
    return _restaureBon.apply(this, arguments);
  }
  function _restaureBon() {
    _restaureBon = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee27(e) {
      return _regeneratorRuntime().wrap(function _callee27$(_context27) {
        while (1) switch (_context27.prev = _context27.next) {
          case 0:
            e.preventDefault();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ConfirmDelete').modal('show');
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#accept').click( /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee26() {
              return _regeneratorRuntime().wrap(function _callee26$(_context26) {
                while (1) switch (_context26.prev = _context26.next) {
                  case 0:
                    jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ConfirmDelete').modal('hide');
                    jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
                    _context26.next = 4;
                    return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
                      method: 'GET',
                      url: '/crm/bon/restaurer/' + bon.id
                    }).then(function (response) {
                      var bibon = response.data;
                      setBon(bibon);
                      setLignes(bibon.lignes);
                      if (bibon.preparation !== null) {
                        setSuivi(bibon.preparation.lignes);
                      }
                      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('toggle');
                    })["catch"](function (error) {
                      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('toggle');
                      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
                    });
                  case 4:
                  case "end":
                    return _context26.stop();
                }
              }, _callee26);
            })));
          case 3:
          case "end":
            return _context27.stop();
        }
      }, _callee27);
    }));
    return _restaureBon.apply(this, arguments);
  }
  function valideBon(_x9) {
    return _valideBon.apply(this, arguments);
  }
  function _valideBon() {
    _valideBon = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee28(e) {
      return _regeneratorRuntime().wrap(function _callee28$(_context28) {
        while (1) switch (_context28.prev = _context28.next) {
          case 0:
            e.preventDefault();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            _context28.next = 4;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'GET',
              url: '/crm/bon/valider/' + bon.id
            }).then(function (response) {
              window.location.reload();
              window.location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 4:
          case "end":
            return _context28.stop();
        }
      }, _callee28);
    }));
    return _valideBon.apply(this, arguments);
  }
  function devalideBon(_x10) {
    return _devalideBon.apply(this, arguments);
  }
  function _devalideBon() {
    _devalideBon = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee29(e) {
      return _regeneratorRuntime().wrap(function _callee29$(_context29) {
        while (1) switch (_context29.prev = _context29.next) {
          case 0:
            e.preventDefault();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            _context29.next = 4;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'GET',
              url: '/crm/bon/devalider/' + bon.id
            }).then(function (response) {
              window.location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 4:
          case "end":
            return _context29.stop();
        }
      }, _callee29);
    }));
    return _devalideBon.apply(this, arguments);
  }
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updBonPresta').off().on("click", /*#__PURE__*/function () {
    var _ref4 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4(event) {
      return _regeneratorRuntime().wrap(function _callee4$(_context4) {
        while (1) switch (_context4.prev = _context4.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
              _context4.next = 9;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updBonPresta').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeUpdBonPresta').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadUpdBonPresta').css('display', '');
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor').val(CKEDITOR.instances['editor'].getData());
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor2').val(CKEDITOR.instances['editor2'].getData());
            _context4.next = 9;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'PUT',
              url: '/crm/bon/presta/update/' + bon.id,
              data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updBonPrestaForm').serializeObject()),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalInfo').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 9:
          case "end":
            return _context4.stop();
        }
      }, _callee4, this);
    }));
    return function (_x11) {
      return _ref4.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updBonFourn').off().on("click", /*#__PURE__*/function () {
    var _ref5 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee5(event) {
      return _regeneratorRuntime().wrap(function _callee5$(_context5) {
        while (1) switch (_context5.prev = _context5.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
              _context5.next = 9;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updBonFourn').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeUpdBonFourn').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadUpdBonFourn').css('display', '');
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor').val(CKEDITOR.instances['editor'].getData());
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor2').val(CKEDITOR.instances['editor2'].getData());
            _context5.next = 9;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'PUT',
              url: '/crm/bon/fourn/update/' + bon.id,
              data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updBonFournForm').serializeObject()),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalInfo').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 9:
          case "end":
            return _context5.stop();
        }
      }, _callee5, this);
    }));
    return function (_x12) {
      return _ref5.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addChoisirBon').off().on("click", /*#__PURE__*/function () {
    var _ref6 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee6(event) {
      return _regeneratorRuntime().wrap(function _callee6$(_context6) {
        while (1) switch (_context6.prev = _context6.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
              _context6.next = 7;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addChoisirBon').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeChoisirBon').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadChoisirBon').css('display', '');
            _context6.next = 7;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'POST',
              url: '/crm/ligne/choisir/bon/' + bon.id,
              data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addChoisirBonForm').serializeObject()),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalChoisir').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 7:
          case "end":
            return _context6.stop();
        }
      }, _callee6, this);
    }));
    return function (_x13) {
      return _ref6.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addLigneBon').off().on("click", /*#__PURE__*/function () {
    var _ref7 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee7(event) {
      return _regeneratorRuntime().wrap(function _callee7$(_context7) {
        while (1) switch (_context7.prev = _context7.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
              _context7.next = 7;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addLigneBon').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeLigne').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadLigne').css('display', '');
            _context7.next = 7;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'POST',
              url: '/crm/ligne/add/bon/' + bon.id,
              data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addLigneBonForm').serializeObject()),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              var bibon = response.data;
              setBon(bibon);
              setLignes(bibon.lignes);
              if (bibon.preparation !== null) {
                setSuivi(bibon.preparation.lignes);
              }
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addLigneBon').show();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeLigne').show();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadLigne').hide();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addLigneBonForm')[0].reset();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalLigne').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 7:
          case "end":
            return _context7.stop();
        }
      }, _callee7, this);
    }));
    return function (_x14) {
      return _ref7.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addBonPresta').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addBonPresta').hide();
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeBonPresta').hide();
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadBonPresta').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor3').val(CKEDITOR.instances['editor3'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor6').val(CKEDITOR.instances['editor6'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
        type: 'POST',
        url: '/crm/bon/presta/add',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addBonPrestaForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          window.location.href = '/crm/bon/' + respdata['result'][0]['numbon'] + '/' + respdata['result'][0]['idchantier'];
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addBonFourn').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addBonFourn').hide();
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeBonFourn').hide();
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadBonFourn').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor7').val(CKEDITOR.instances['editor7'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor8').val(CKEDITOR.instances['editor8'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
        type: 'POST',
        url: '/crm/bon/fourn/add',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addBonFournForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          window.location.href = '/crm/bon/' + respdata['result'][0]['numbon'] + '/' + respdata['result'][0]['idchantier'];
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addDeplacerBon').off().on("click", /*#__PURE__*/function () {
    var _ref8 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee8(event) {
      var idchan;
      return _regeneratorRuntime().wrap(function _callee8$(_context8) {
        while (1) switch (_context8.prev = _context8.next) {
          case 0:
            event.preventDefault();
            idchan = jquery__WEBPACK_IMPORTED_MODULE_40___default()('#deplacerBon').val();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addDeplacerBon').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeDeplacer').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadDeplacer').css('display', '');
            _context8.next = 7;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'GET',
              url: '/crm/bon/deplacer/' + bon.id + '/' + idchan
            }).then(function (response) {
              window.location.href = '/crm/bon/' + response.data['result'] + '/' + bon.chantier.id;
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalDeplacer').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 7:
          case "end":
            return _context8.stop();
        }
      }, _callee8);
    }));
    return function (_x15) {
      return _ref8.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#solderBon').off().on("click", /*#__PURE__*/function () {
    var _ref9 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee9(event) {
      var idsolde;
      return _regeneratorRuntime().wrap(function _callee9$(_context9) {
        while (1) switch (_context9.prev = _context9.next) {
          case 0:
            event.preventDefault();
            idsolde = jquery__WEBPACK_IMPORTED_MODULE_40___default()('#soldeBon').val();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#solderBon').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeSolder').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadSolder').css('display', '');
            jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
              type: 'GET',
              url: '/crm/bon/solder/' + bon.id + '/' + idsolde,
              data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addBonPrestaForm').serializeObject()),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json',
              success: function success(respdata, textStatus, jqXHR) {
                window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier'];
              },
              error: function error(xhr, resp, text) {
                jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalSolder').modal('toggle');
                jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
              }
            });
          case 6:
          case "end":
            return _context9.stop();
        }
      }, _callee9);
    }));
    return function (_x16) {
      return _ref9.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addGroupBon').off().on("click", /*#__PURE__*/function () {
    var _ref10 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee10(event) {
      return _regeneratorRuntime().wrap(function _callee10$(_context10) {
        while (1) switch (_context10.prev = _context10.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
              _context10.next = 7;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addGroupBon').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeGroup').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadGroup').css('display', '');
            _context10.next = 7;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'POST',
              url: '/crm/groupe/add/' + bon.id + '/bon',
              data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addGroupeBonForm').serializeObject()),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              window.location.reload();
            })["catch"](function (e) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalLigne').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 7:
          case "end":
            return _context10.stop();
        }
      }, _callee10, this);
    }));
    return function (_x17) {
      return _ref10.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updateLigneBon').off().on("click", /*#__PURE__*/function () {
    var _ref11 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee11(event) {
      var idligne;
      return _regeneratorRuntime().wrap(function _callee11$(_context11) {
        while (1) switch (_context11.prev = _context11.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
              _context11.next = 8;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updateLigneBon').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeLigne').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadLigne').css('display', '');
            idligne = jquery__WEBPACK_IMPORTED_MODULE_40___default()('#idligne').val();
            _context11.next = 8;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'POST',
              url: '/crm/ligne/update/bon/' + idligne + '/' + bon.id,
              data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addLigneBonForm').serializeObject()),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              var bibon = response.data;
              setBon(bibon);
              setLignes(bibon.lignes);
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updateLigneBon').show();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeLigne').show();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadLigne').hide();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalLigne').modal('toggle');
              window.location.href = '/crm/bon/' + bon.id + '/' + bon.chantier.id;
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalLigne').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 8:
          case "end":
            return _context11.stop();
        }
      }, _callee11, this);
    }));
    return function (_x18) {
      return _ref11.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updateGroupBon').off().on("click", /*#__PURE__*/function () {
    var _ref12 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee12(event) {
      var idgroupe;
      return _regeneratorRuntime().wrap(function _callee12$(_context12) {
        while (1) switch (_context12.prev = _context12.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
              _context12.next = 8;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updateGroupBon').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeGroup').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadGroup').css('display', '');
            idgroupe = jquery__WEBPACK_IMPORTED_MODULE_40___default()('#idgroupe').val();
            _context12.next = 8;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'PUT',
              url: '/crm/groupe/update/' + idgroupe + '/' + bon.id + '/bon',
              data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addGroupeBonForm').serializeObject()),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              var bibon = response.data;
              setBon(bibon);
              if (bibon.preparation !== null) {
                setSuivi(bibon.preparation.lignes);
              }
              setGroupes(bibon.groupe);
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updateGroupeBon').show();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeGroup').show();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadGroup').hide();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalGroup').modal('toggle');
              window.location.href = '/crm/bon/' + bon.id + '/' + bon.chantier.id;
            })["catch"](function (e) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalGroup').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 8:
          case "end":
            return _context12.stop();
        }
      }, _callee12, this);
    }));
    return function (_x19) {
      return _ref12.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addRem').off().on("click", /*#__PURE__*/function () {
    var _ref13 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee13(event) {
      return _regeneratorRuntime().wrap(function _callee13$(_context13) {
        while (1) switch (_context13.prev = _context13.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
              _context13.next = 7;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addRem').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeRem').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadRem').css('display', '');
            _context13.next = 7;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'POST',
              url: '/crm/bon/remise/' + bon.id,
              data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addRemiseThtForm').serializeObject()),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              var bibon = response.data;
              setBon(bibon);
              setLignes(bibon.lignes);
              if (bibon.preparation !== null) {
                setSuivi(bibon.preparation.lignes);
              }
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addRem').show();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeRem').show();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadRem').hide();
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalRemise').modal('toggle');
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalRemise').modal('toggle');
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 7:
          case "end":
            return _context13.stop();
        }
      }, _callee13, this);
    }));
    return function (_x20) {
      return _ref13.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updateForme').off().on("click", /*#__PURE__*/function () {
    var _ref14 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee14(event) {
      return _regeneratorRuntime().wrap(function _callee14$(_context14) {
        while (1) switch (_context14.prev = _context14.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
              _context14.next = 9;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#updateForme').hide();
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadupForme').css('display', '');
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalMise').modal('toggle');
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#editor5').val(CKEDITOR.instances['editor5'].getData());
            _context14.next = 9;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'POST',
              url: '/crm/bon/forme',
              data: new FormData(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addforme')[0]),
              contentType: false,
              processData: false,
              cache: false,
              dataType: 'json'
            }).then(function (response) {
              location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
            });
          case 9:
          case "end":
            return _context14.stop();
        }
      }, _callee14, this);
    }));
    return function (_x21) {
      return _ref14.apply(this, arguments);
    };
  }());
  var shuper = function shuper(id) {
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('.' + id + 'li').removeClass('hide');
  };
  var shupere = function shupere(id) {
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('.' + id + 'li').addClass('hide');
  };
  var shuperg = function shuperg(id) {
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('.' + id + 'gr').removeClass('hide');
  };
  var shupereg = function shupereg(id) {
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('.' + id + 'gr').addClass('hide');
  };
  jquery__WEBPACK_IMPORTED_MODULE_40___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_40___default()(".dele").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee15() {
        return _regeneratorRuntime().wrap(function _callee15$(_context15) {
          while (1) switch (_context15.prev = _context15.next) {
            case 0:
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
              _context15.next = 3;
              return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
                method: 'DELETE',
                url: '/crm/ligne/delete/' + bon.id + '/' + bon.chantier.id + '/' + this.id + '/bon',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                location.reload();
              })["catch"](function (error) {
                jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('hide');
              });
            case 3:
            case "end":
              return _context15.stop();
          }
        }, _callee15, this);
      })));
    });
    var $seldevis = jquery__WEBPACK_IMPORTED_MODULE_40___default()('.seldevis');
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('.seldevis').html('');
    jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
      type: 'POST',
      url: '/crm/devis/gets/' + bon.chantier.id,
      contentType: 'application/json; charset=utf-8',
      success: function success(respdata, textStatus, jqXHR) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didev").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didev").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
        respdata.map(function (de) {
          var group = jquery__WEBPACK_IMPORTED_MODULE_40___default()('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
          group.appendTo($seldevis);
        });
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didev").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didev").append('<span class="col-green">Devis téléchargés</span>');
      },
      error: function error(xhr, resp, text) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
      }
    });
    var $seldeu = jquery__WEBPACK_IMPORTED_MODULE_40___default()('.seldeu');
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('.seldeu').html('');
    jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
      type: 'POST',
      url: '/crm/devis/gets/' + bon.chantier.id,
      contentType: 'application/json; charset=utf-8',
      success: function success(respdata, textStatus, jqXHR) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didu").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didu").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
        respdata.map(function (de) {
          var group = jquery__WEBPACK_IMPORTED_MODULE_40___default()('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
          group.appendTo($seldeu);
        });
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didu").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didu").append('<span class="col-green">Devis téléchargés</span>');
      },
      error: function error(xhr, resp, text) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
      }
    });
    jquery__WEBPACK_IMPORTED_MODULE_40___default()(".delegr").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee16() {
        return _regeneratorRuntime().wrap(function _callee16$(_context16) {
          while (1) switch (_context16.prev = _context16.next) {
            case 0:
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
              _context16.next = 3;
              return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
                method: 'DELETE',
                url: '/crm/ligne/groupe/' + bon.id + '/' + bon.chantier.id + '/' + this.id + '/bon',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                location.reload();
              })["catch"](function (error) {
                jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('hide');
              });
            case 3:
            case "end":
              return _context16.stop();
          }
        }, _callee16, this);
      })));
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#secha').off().on("change", function (event) {
    event.preventDefault();
    var $sedevis = jquery__WEBPACK_IMPORTED_MODULE_40___default()('.sedevis');
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('.sedevis').html('');
    jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
      type: 'POST',
      url: '/crm/devis/gets/' + this.value,
      contentType: 'application/json; charset=utf-8',
      success: function success(respdata, textStatus, jqXHR) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".dido").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".dido").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
        respdata.map(function (de) {
          var group = jquery__WEBPACK_IMPORTED_MODULE_40___default()('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
          group.appendTo($sedevis);
        });
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".dido").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".dido").append('<span class="col-green">Devis téléchargés</span>');
      },
      error: function error(xhr, resp, text) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
      }
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#sechas').off().on("change", function (event) {
    event.preventDefault();
    var $seldevs = jquery__WEBPACK_IMPORTED_MODULE_40___default()('.seldevs');
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('.seldevs').html('');
    jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
      type: 'POST',
      url: '/crm/devis/gets/' + this.value,
      contentType: 'application/json; charset=utf-8',
      success: function success(respdata, textStatus, jqXHR) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".dides").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".dides").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
        respdata.map(function (de) {
          var group = jquery__WEBPACK_IMPORTED_MODULE_40___default()('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
          group.appendTo($seldevs);
        });
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".dides").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".dides").append('<span class="col-green">Devis téléchargés</span>');
      },
      error: function error(xhr, resp, text) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
      }
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#sechau').off().on("change", function (event) {
    event.preventDefault();
    var $seldeu = jquery__WEBPACK_IMPORTED_MODULE_40___default()('.seldeu');
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('.seldeu').html('');
    jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
      type: 'POST',
      url: '/crm/devis/gets/' + this.value,
      contentType: 'application/json; charset=utf-8',
      success: function success(respdata, textStatus, jqXHR) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didu").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didu").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
        respdata.map(function (de) {
          var group = jquery__WEBPACK_IMPORTED_MODULE_40___default()('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
          group.appendTo($seldeu);
        });
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didu").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didu").append('<span class="col-green">Devis téléchargés</span>');
      },
      error: function error(xhr, resp, text) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
      }
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#sechane').off().on("change", function (event) {
    event.preventDefault();
    var $seldevis = jquery__WEBPACK_IMPORTED_MODULE_40___default()('.seldevis');
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('.seldevis').html('');
    jquery__WEBPACK_IMPORTED_MODULE_40___default().ajax({
      type: 'POST',
      url: '/crm/devis/gets/' + this.value,
      contentType: 'application/json; charset=utf-8',
      success: function success(respdata, textStatus, jqXHR) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didev").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didev").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
        respdata.map(function (de) {
          var group = jquery__WEBPACK_IMPORTED_MODULE_40___default()('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
          group.appendTo($seldevis);
        });
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didev").empty();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()(".didev").append('<span class="col-green">Devis téléchargés</span>');
      },
      error: function error(xhr, resp, text) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
      }
    });
  });
  if (groupes) {
    renderGroupe = groupes.map(function (group) {
      var st = 0;
      var popg = group.id;
      var opg = '';
      if (bon.etat === 'valide') {
        opg = group.groupe + '<p class="bordz hide ' + group.id + 'gr" ></p>';
      } else {
        opg = group.groupe + '<p class="bordz hide ' + group.id + 'gr" >' + '<a href=/crm/bon/groupe/' + bon.id + '/' + group.id + '/' + bon.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' + '<a class="delegr" id=' + popg + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' + '</p>';
      }
      var renderLigneGroupe = lignes.map(function (ligne) {
        var opp = "";
        if (ligne.groupe !== null) {
          if (ligne.groupe.id === group.id) {
            if (bon.aarem === 'oui') {
              st = st + ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100);
            } else {
              st = st + ligne.pu * ligne.quantite;
            }
          }
          var popp = ligne.id;
          if (bon.etat === 'valide') {
            opp = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" ></p>';
          } else {
            opp = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" >' + '<a href=/crm/bon/ligne/' + bon.id + '/' + ligne.id + '/' + bon.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' + '<a class="dele" id=' + popp + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' + '</p>';
          }
        }
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, ligne.groupe !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, ligne.groupe.id === group.id && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", {
          key: ligne.id.toString(),
          onMouseOver: function onMouseOver() {
            shuper(ligne.id);
          },
          onMouseOut: function onMouseOut() {
            shupere(ligne.id);
          }
        }, bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          },
          dangerouslySetInnerHTML: {
            __html: ligne.reference
          }
        }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-left borde",
          dangerouslySetInnerHTML: {
            __html: opp
          }
        }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "text",
          name: ligne.id,
          defaultValue: ligne.unite,
          onSave: function onSave(val) {
            return saveUnite(val);
          }
        })), bon.type === "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.quantite, 2, ' '),
          onSave: function onSave(val) {
            return saveQte(val);
          }
        })), bon.type === "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.quantite, 2, ' '),
          onSave: function onSave(val) {
            return saveQte(val);
          }
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(livre, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(reste, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          inputClassName: "nowhitespace",
          defaultValue: formatNumber(ligne.pu, 2, ' '),
          onSave: function onSave(val) {
            return savePu(val);
          }
        })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.remise, 2, ' '),
          onSave: function onSave(val) {
            return saveRemise(val);
          }
        })), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu * ligne.quantite
        })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100)
        }))), bon.type === "pste" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(prevu, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(livre, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(reste, 2, ' '))), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.quantite, 2, ' '),
          onSave: function onSave(val) {
            return saveQte(val);
          }
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          inputClassName: "nowhitespace",
          defaultValue: formatNumber(ligne.pu, 2, ' '),
          onSave: function onSave(val) {
            return savePu(val);
          }
        })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.remise, 2, ' '),
          onSave: function onSave(val) {
            return saveRemise(val);
          }
        })), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu * ligne.quantite
        })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100)
        }))), bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.quantite, 2, ' '),
          onSave: function onSave(val) {
            return saveQte(val);
          }
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          inputClassName: "nowhitespace",
          defaultValue: formatNumber(ligne.pu, 2, ' '),
          onSave: function onSave(val) {
            return savePu(val);
          }
        }))), bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(prevu, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(livre, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(reste, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.quantite, 2, ' '),
          onSave: function onSave(val) {
            return saveQte(val);
          }
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          inputClassName: "nowhitespace",
          defaultValue: formatNumber(ligne.pu, 2, ' '),
          onSave: function onSave(val) {
            return savePu(val);
          }
        }))), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.remise, 2, ' '),
          onSave: function onSave(val) {
            return saveRemise(val);
          }
        })), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu * ligne.quantite
        })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100)
        }))), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.quantite, 2, ' '),
          onSave: function onSave(val) {
            return saveQte(val);
          }
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          inputClassName: "nowhitespace",
          defaultValue: formatNumber(ligne.pu, 2, ' '),
          onSave: function onSave(val) {
            return savePu(val);
          }
        }))), bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(prevu, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(livre, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde"
        }, formatNumber(reste, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.quantite, 2, ' '),
          onSave: function onSave(val) {
            return saveQte(val);
          }
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          inputClassName: "nowhitespace",
          defaultValue: formatNumber(ligne.pu, 2, ' '),
          onSave: function onSave(val) {
            return savePu(val);
          }
        }))), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
          type: "number",
          name: ligne.id,
          defaultValue: formatNumber(ligne.remise, 2, ' '),
          onSave: function onSave(val) {
            return saveRemise(val);
          }
        })), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu * ligne.quantite
        })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right borde",
          style: {
            whiteSpace: "nowrap"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100)
        }))))));
      });
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", {
        className: "togo",
        key: group.id.toString(),
        onMouseOver: function onMouseOver() {
          shuperg(group.id);
        },
        onMouseOut: function onMouseOut() {
          shupereg(group.id);
        }
      }, bon.aarem === 'oui' && bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde text-center"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, group.reference)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        colSpan: "6",
        className: "borde",
        dangerouslySetInnerHTML: {
          __html: opg
        }
      })), bon.aarem === 'non' && bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde text-center"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, group.reference)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        colSpan: "5",
        className: "borde",
        dangerouslySetInnerHTML: {
          __html: opg
        }
      })), bon.aarem === 'oui' && bon.aaref === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        colSpan: "6",
        className: "borde",
        dangerouslySetInnerHTML: {
          __html: opg
        }
      })), bon.aarem === 'non' && bon.aaref === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        colSpan: "5",
        className: "borde",
        dangerouslySetInnerHTML: {
          __html: opg
        }
      }))), renderLigneGroupe, bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", {
        className: "togo"
      }, bon.aarem === 'oui' && bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        colSpan: "7",
        className: "borde text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "SOUS-TOTAL: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: st
      }))), bon.aarem === 'non' && bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        colSpan: "6",
        className: "borde text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "SOUS-TOTAL: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: st
      }))), bon.aarem === 'oui' && bon.aaref === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        colSpan: "6",
        className: "borde text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "SOUS-TOTAL: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: st
      }))), bon.aarem === 'non' && bon.aaref === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        colSpan: "5",
        className: "borde text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "SOUS-TOTAL: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: st
      })))));
    });
    renderGroupeMobile = groupes.map(function (group) {
      var st = 0;
      var renderLigneGroupeMobile = lignes.map(function (ligne) {
        if (ligne.groupe !== null) {
          if (ligne.groupe.id === group.id) {
            if (bon.aarem === 'oui') {
              st = st + ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100);
            } else {
              st = st + ligne.pu * ligne.quantite;
            }
          }
        }
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, lignes.length !== "0" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, ligne.groupe !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, ligne.groupe.id === group.id && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center"
        }, ligne.reference), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
          className: "pri bolo600 text-left",
          dangerouslySetInnerHTML: {
            __html: ligne.designation
          }
        }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("table", {
          style: {
            width: "100%",
            marginTop: "10px"
          },
          border: "0",
          cellSpacing: "0",
          cellPadding: "0"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right bordz font-bold"
        }, "Unit\xE9:"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-left bordz font-weight-bold"
        }, " ", ligne.unite)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right bordz font-bold"
        }, "Quantit\xE9:"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-left bordz font-weight-bold"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.quantite
        }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right bordz font-bold"
        }, "Prix unitaire:"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-left bordz font-weight-bold"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu
        }))), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right bordz font-bold"
        }, "Remise:"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-left bordzfont-weight-bold"
        }, " ", ligne.remise, "%"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-right bordz font-bold"
        }, "Montant HT:"), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu * ligne.quantite
        }), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100)
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, bon.etat === 'save' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "text-center bordz",
          colSpan: 2,
          style: {
            width: "80px"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
          href: "/crm/bon/ligne/".concat(bon.id, "/").concat(ligne.id, "/").concat(bon.chantier.id)
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
          className: "fa fa-edit text-success m-r-10",
          style: {
            fontSize: "14px"
          },
          "aria-hidden": "true",
          title: "Modifier"
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
          href: ""
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
          className: "fa fa-reply col-blue m-r-10",
          style: {
            fontSize: "14px"
          },
          "aria-hidden": "true",
          title: "Dupliquer"
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
          onClick: function onClick() {
            deleteLigne(ligne.id);
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
          className: "fa fa-trash col-pink",
          style: {
            fontSize: "14px"
          },
          "aria-hidden": "true",
          title: "Supprimer"
        }))))))))));
      });
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", {
        className: "togo bolo600"
      }, bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, group.reference), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde"
      }, group.groupe, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
        style: {
          "float": "right"
        }
      }, bon.etat === 'save' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
        href: "/crm/bon/groupe/".concat(bon.id, "/").concat(group.id, "/").concat(bon.chantier.id)
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
        className: "fa fa-edit text-success m-r-10",
        style: {
          fontSize: "16px"
        },
        "aria-hidden": "true",
        title: "Modifier"
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
        onClick: function onClick() {
          deleteGroupe(group.id);
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
        className: "fa fa-trash col-pink",
        style: {
          fontSize: "14px"
        },
        "aria-hidden": "true",
        title: "Supprimer"
      })))))), bon.aaref !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde"
      }, group.groupe, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
        style: {
          "float": "right"
        }
      }, bon.etat === 'save' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
        href: "/crm/bon/groupe/".concat(bon.id, "/").concat(group.id, "/").concat(bon.chantier.id)
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
        className: "fa fa-edit text-success m-r-10",
        style: {
          fontSize: "16px"
        },
        "aria-hidden": "true",
        title: "Modifier"
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
        onClick: function onClick() {
          deleteGroupe(group.id);
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
        className: "fa fa-trash col-pink",
        style: {
          fontSize: "14px"
        },
        "aria-hidden": "true",
        title: "Supprimer"
      })))))), renderLigneGroupeMobile, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", {
        className: "togo"
      }, bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        colSpan: "2",
        className: "borde text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "SOUS-TOTAL: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: st
      }))), bon.aaref !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "borde text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "SOUS-TOTAL: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: st
      })))));
    });
  }
  if (lignes) {
    renderLigneMobile = lignes.map(function (lign) {
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, lignes.length !== "0" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, lign.groupe === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
        className: "pri bolo600 text-left",
        dangerouslySetInnerHTML: {
          __html: lign.designation
        }
      }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
        className: "pri bolo600 text-left nowhitespace"
      }, lign.reference), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("table", {
        style: {
          width: "100%"
        },
        border: "0",
        cellSpacing: "0",
        cellPadding: "0"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right bordz font-bold"
      }, "Unit\xE9:"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-left bordz font-weight-bold"
      }, lign.unite)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right bordz font-bold"
      }, "Quantit\xE9:"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-left bordz font-weight-bold"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: lign.quantite
      }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right bordz font-bold"
      }, "Prix unitaire:"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-left bordz font-weight-bold"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: lign.pu
      }))), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right bordz font-bold"
      }, "Remise:"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-left bordz font-weight-bold"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: lign.remise
      }), "%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right bordz font-bold"
      }, "Montant HT:"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-left bordz font-weight-bold"
      }, bon.aarem === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: lign.pu * lign.quantite
      }), bon.aarem !== 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: lign.pu * lign.quantite * ((100 - lign.remise) / 100)
      })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, bon.etat === 'save' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center bordz",
        colSpan: 2,
        style: {
          width: "80px"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
        href: "/crm/bon/ligne/".concat(bon.id, "/").concat(lign.id, "/").concat(bon.chantier.id)
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
        className: "fa fa-edit text-success m-r-10",
        style: {
          fontSize: "14px"
        },
        "aria-hidden": "true",
        title: "Modifier"
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
        onClick: function onClick() {
          deleteLigne(lign.id);
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
        className: "fa fa-trash col-pink",
        style: {
          fontSize: "14px"
        },
        "aria-hidden": "true",
        title: "Supprimer"
      })))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        colSpan: 2,
        className: "bg-gray",
        style: {
          height: "5px"
        }
      })))));
    });
    renderLigne = lignes.map(function (ligne) {
      var prevu = parseFloat(ligne.livrer) + parseFloat(ligne.reste);
      var livre = ligne.livrer;
      var reste = ligne.reste;
      var pop = ligne.id;
      var op = '';
      if (bon.etat === 'valide') {
        op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" ></p>';
      } else {
        op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" >' + '<a href=/crm/bon/ligne/' + bon.id + '/' + ligne.id + '/' + bon.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' + '<a class="dele" id=' + pop + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' + '</p>';
      }
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, ligne.groupe === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", {
        key: ligne.id.toString(),
        onMouseOver: function onMouseOver() {
          shuper(ligne.id);
        },
        onMouseOut: function onMouseOut() {
          shupere(ligne.id);
        }
      }, bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        },
        dangerouslySetInnerHTML: {
          __html: ligne.reference
        }
      }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-left borde",
        dangerouslySetInnerHTML: {
          __html: op
        }
      }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "text",
        name: ligne.id,
        defaultValue: ligne.unite,
        onSave: function onSave(val) {
          return saveUnite(val);
        }
      })), bon.type === "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.quantite, 2, ' '),
        onSave: function onSave(val) {
          return saveQte(val);
        }
      })), bon.type === "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.quantite, 2, ' '),
        onSave: function onSave(val) {
          return saveQte(val);
        }
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(livre, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(reste, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        inputClassName: "nowhitespace",
        defaultValue: formatNumber(ligne.pu, 2, ' '),
        onSave: function onSave(val) {
          return savePu(val);
        }
      })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.remise, 2, ' '),
        onSave: function onSave(val) {
          return saveRemise(val);
        }
      })), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: ligne.pu * ligne.quantite
      })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100)
      }))), bon.type === "pste" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(prevu, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(livre, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(reste, 2, ' '))), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.quantite, 2, ' '),
        onSave: function onSave(val) {
          return saveQte(val);
        }
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        inputClassName: "nowhitespace",
        defaultValue: formatNumber(ligne.pu, 2, ' '),
        onSave: function onSave(val) {
          return savePu(val);
        }
      })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.remise, 2, ' '),
        onSave: function onSave(val) {
          return saveRemise(val);
        }
      })), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: ligne.pu * ligne.quantite
      })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100)
      }))), bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.quantite, 2, ' '),
        onSave: function onSave(val) {
          return saveQte(val);
        }
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        inputClassName: "nowhitespace",
        defaultValue: formatNumber(ligne.pu, 2, ' '),
        onSave: function onSave(val) {
          return savePu(val);
        }
      }))), bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(prevu, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(livre, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(reste, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.quantite, 2, ' '),
        onSave: function onSave(val) {
          return saveQte(val);
        }
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        inputClassName: "nowhitespace",
        defaultValue: formatNumber(ligne.pu, 2, ' '),
        onSave: function onSave(val) {
          return savePu(val);
        }
      }))), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.remise, 2, ' '),
        onSave: function onSave(val) {
          return saveRemise(val);
        }
      })), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: ligne.pu * ligne.quantite
      })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100)
      }))), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.quantite, 2, ' '),
        onSave: function onSave(val) {
          return saveQte(val);
        }
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        inputClassName: "nowhitespace",
        defaultValue: formatNumber(ligne.pu, 2, ' '),
        onSave: function onSave(val) {
          return savePu(val);
        }
      }))), bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(prevu, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(livre, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde"
      }, formatNumber(reste, 2, ' ')), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.quantite, 2, ' '),
        onSave: function onSave(val) {
          return saveQte(val);
        }
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        inputClassName: "nowhitespace",
        defaultValue: formatNumber(ligne.pu, 2, ' '),
        onSave: function onSave(val) {
          return savePu(val);
        }
      }))), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-center borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_38__.EditText, {
        type: "number",
        name: ligne.id,
        defaultValue: formatNumber(ligne.remise, 2, ' '),
        onSave: function onSave(val) {
          return saveRemise(val);
        }
      })), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: ligne.pu * ligne.quantite
      })), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
        className: "text-right borde",
        style: {
          whiteSpace: "nowrap"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
        numb: ligne.pu * ligne.quantite * ((100 - ligne.remise) / 100)
      })))));
    });
  }
  if (bon) {
    if (bon.caisses !== null) {
      var caisses = bon.caisses;
      renderCaisse = caisses.map(function (cais) {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, cais.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, bon.aaref === 'oui' && bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          colSpan: "6",
          className: "borde"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_43___default()), {
          format: "DD/MM/YYYY"
        }, cais.date), " | ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", null, "N\xB0 Bon: ", cais.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "borde text-right"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: cais.montant
        }))), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          colSpan: "5",
          className: "borde"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_43___default()), {
          format: "DD/MM/YYYY"
        }, cais.date), " | ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", null, "N\xB0 Bon: ", cais.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "borde text-right"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: cais.montant
        }))), renderCaisse), bon.aaref !== 'oui' && bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          colSpan: "8",
          className: "borde"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_43___default()), {
          format: "DD/MM/YYYY"
        }, cais.date), " | ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", null, "N\xB0 Bon: ", cais.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "borde text-right"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: cais.montant
        }))), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          colSpan: "7",
          className: "borde"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_43___default()), {
          format: "DD/MM/YYYY"
        }, cais.date), " | ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", null, "N\xB0 Bon: ", cais.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
          className: "borde text-right"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
          numb: cais.montant
        }))), renderCaisse))));
      });
    }
  }
  var shasha = /*#__PURE__*/function () {
    var _ref17 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee17(a) {
      return _regeneratorRuntime().wrap(function _callee17$(_context17) {
        while (1) switch (_context17.prev = _context17.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
            _context17.next = 3;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'GET',
              url: '/crm/chantiers/forte/' + a
            }).then(function (response) {
              location.reload();
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('toggle');
              window.$('#ModalErreur').modal('show');
            });
          case 3:
          case "end":
            return _context17.stop();
        }
      }, _callee17);
    }));
    return function shasha(_x22) {
      return _ref17.apply(this, arguments);
    };
  }();
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, loading === true && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "modal fade right",
    id: "modalList",
    tabIndex: "-1",
    role: "dialog",
    "aria-labelledby": "myModalLabel",
    "aria-hidden": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "modal-dialog modal-full-height modal-right",
    role: "document"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "modal-content"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "modal-header bg-pink text-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "modal-title text-white",
    id: "defaultModalLabel"
  }, "MODIFIER LES LIGNES")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "modal-body m-t-10 bien"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("table", {
    id: "borde",
    style: {
      width: "100%",
      marginTo: "-20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", {
    className: "bg-pri text-white",
    style: {
      fontSize: "12px"
    }
  }, bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("th", {
    className: "borde text-center"
  }, "R\xC9F"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("th", {
    style: {
      textAlign: "left",
      padding: "10px"
    }
  }, "D\xC9SIGNATION")), renderGroupeMobile, renderLigneMobile)))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "row clearfix ",
    style: {
      padding: "0.1cm"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "col-sm-12"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h3", {
    className: "font-bold col-purple text-center"
  }, bon.client.nomclient.toUpperCase()), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h3", {
    className: "font-bold m-t--10  col-pink text-center"
  }, bon.chantier.nomchantier.toUpperCase()), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h3", {
    className: "font-bold m-t--10 col-blue text-center"
  }, "BON N\xB0: ", bon.numbon), bon.devis !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h3", {
    className: "font-bold m-t--10 pri text-center"
  }, "DEVIS N\xB0: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/devis/".concat(bon.devis.id, "/").concat(bon.chantier.id)
  }, bon.devis.iddevis)), bon.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "font-bold col-black text-center"
  }, "CE BON EST VALID\xC9"), bon.corbeille !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("h4", {
    className: "font-bold col-black"
  }, "CE BON EST SUPPRIM\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-deep-orange text-white m-r-5",
    onClick: restaureBon
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-redo"
  }), " RESTAURER")), react_device_detect__WEBPACK_IMPORTED_MODULE_39__.deviceType !== "mobile" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, bon.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, bon.type !== "cps" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/chantier/".concat(bon.chantier.id),
    className: "btn bg-green align-left m-b-10 text-white waves-effect "
  }, "ACC\xC9DER AU CHANTIER")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn bg-blue  align-left m-b-10 text-white waves-effect ",
    "data-toggle": "modal",
    "data-target": "#modalBonPresta"
  }, "CR\xC9ER UN BON PRESTATAIRE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn bg-pri  align-left m-b-10 text-white waves-effect ",
    "data-toggle": "modal",
    "data-target": "#modalBonFourne"
  }, "CR\xC9ER UN BON FOURNISSEUR")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), bon.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-pri text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalGroup"
  }, "+ AJOUTER DES LOTS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-blue text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalChoisir"
  }, "CHOISIR UN BIEN / SERVICE"), bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, bon.type !== "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-pri text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalLigne"
  }, "+ AJOUTER UNE LIGNE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-purple text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalDeplacer"
  }, "D\xC9PLACER VERS")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-pri text-white btn-sm",
    onClick: dupliquerBon
  }, "+ DUPLIQUER")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-green btn-sm text-white",
    "data-toggle": "modal",
    "data-target": "#modalBon"
  }, "- INFORMATIONS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-success text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalList"
  }, "- MODIFIER LOTS ET LIGNES"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, bon.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    className: "btn bg-pink text-white m-b-10 waves-effect",
    onClick: devalideBon
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-check-circle"
  }), " D\xC9VALIDER"), bon.etat !== "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-blue text-white",
    onClick: valideBon
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-check-circle"
  }), " VALIDER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/doc/attache/".concat(bon.id, "/bon/non"),
    className: "btn bg-deep-orange text-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-envelope"
  }), " MAIL"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-pri text-white",
    onClick: pdfBon
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fas fa-file-pdf"
  }), " PDF"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_41__["default"], {
    id: "test-table-xls-button",
    className: "btn bg-green text-white",
    table: "bon2excel",
    filename: "Bon de commande N\xB0 ".concat(bon.numbon),
    sheet: "tablexls",
    buttonText: "EXCEL"
  }), bon.etat !== "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-pink text-white",
    onClick: delBon
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-trash"
  }), " SUPPRIMER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn  bg-info text-white",
    "data-toggle": "modal",
    "data-target": "#modalMise"
  }, "- MISE EN FORME")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-indigo text-white",
    onClick: handlePrinte
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-print"
  }), " IMPRESSION SANS ENT\xCATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-blue text-white",
    onClick: handlePrint
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-print"
  }), " IMPRESSION AVEC ENT\xCATE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), formes.map(function (forme, index) {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
      className: "btn-group"
    }, forme.used === "used" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
      type: "button",
      onClick: function onClick() {
        shasha(forme.id);
      },
      className: "btn bg-yellow bolo600  align-left m-b-10 col-black waves-effect m-r-5"
    }, forme.intituler), forme.used !== "used" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
      type: "button",
      onClick: function onClick() {
        shasha(forme.id);
      },
      className: "btn bolo600  align-left m-b-10 col-black waves-effect m-r-5"
    }, forme.intituler));
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, bon.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-purple text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalSolder"
  }, "EFFECTUER LE PAIEMENT"))), bon.type === "cps" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "text-center"
  }, bon.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-labeled bg-blue text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalChoisir"
  }, "CHOISIR UN BIEN / SERVICE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/doc/attache/".concat(bon.id, "/bon/non"),
    className: "btn bg-deep-orange text-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-envelope"
  }), " MAIL"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-pri text-white",
    onClick: pdfBon
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fas fa-file-pdf"
  }), " PDF"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_41__["default"], {
    id: "test-table-xls-button",
    className: "btn bg-green text-white",
    table: "bon2excel",
    filename: "Bon de commande N\xB0 ".concat(bon.numbon),
    sheet: "tablexls",
    buttonText: "EXCEL"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn  bg-info text-white",
    "data-toggle": "modal",
    "data-target": "#modalMise"
  }, "- MISE EN FORME")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-indigo text-white",
    onClick: handlePrinte
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-print"
  }), " IMPRESSION SANS ENT\xCATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-blue text-white",
    onClick: handlePrint
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-print"
  }), " IMPRESSION AVEC ENT\xCATE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), formes.map(function (forme, index) {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
      className: "btn-group"
    }, forme.used === "used" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
      type: "button",
      onClick: function onClick() {
        shasha(forme.id);
      },
      className: "btn bg-yellow bolo600  align-left m-b-10 col-black waves-effect m-r-5"
    }, forme.intituler), forme.used !== "used" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
      type: "button",
      onClick: function onClick() {
        shasha(forme.id);
      },
      className: "btn bolo600  align-left m-b-10 col-black waves-effect m-r-5"
    }, forme.intituler));
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("table", {
    id: "bon2excel"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_PrintCommande__WEBPACK_IMPORTED_MODULE_36__.PrintCommande, {
    bon: bon,
    lignes: lignes,
    groupes: groupes,
    ref: componentRef,
    renderLigne: renderLigne,
    renderCaisse: renderCaisse,
    renderGroupe: renderGroupe,
    forme: forme
  }))))), react_device_detect__WEBPACK_IMPORTED_MODULE_39__.deviceType === "mobile" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("p", {
    style: {
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn bg-pink dropdown-toggle m-r-5",
    "data-toggle": "dropdown",
    "aria-haspopup": "true",
    "aria-expanded": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-cog"
  }), " FAIRE ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", {
    className: "caret"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("div", {
    className: "dropdown-menu p-l-10 p-r-10",
    style: {
      backgroundColor: "#e9e9e9",
      left: "50px",
      position: "absolute"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    href: "/crm/chantier/".concat(bon.chantier.id),
    className: "btn bg-green btn-block btn-labeled col-white"
  }, "ACC\xC9DER AU CHANTIER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn bg-blue btn-block btn-labeled col-white",
    "data-toggle": "modal",
    "data-target": "#modalBon"
  }, "CR\xC9ER UN NOUVEAU BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("li", {
    role: "separator",
    className: "divider"
  }), bon.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-block btn-labeled bg-pri text-white",
    "data-toggle": "modal",
    "data-target": "#modalGroup"
  }, "AJOUTER DES LOTS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-block btn-labeled bg-pri text-white",
    "data-toggle": "modal",
    "data-target": "#modalChoisir"
  }, "CHOISIR UN BIEN / SERVICE"), bon.type !== "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-block btn-labeled bg-pri text-white",
    "data-toggle": "modal",
    "data-target": "#modalLigne"
  }, "AJOUTER UNE LIGNE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-block btn-labeled bg-pri text-white btn-sm",
    onClick: dupliquerBon
  }, "DUPLIQUER CE BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("li", {
    role: "separator",
    className: "divider"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-block btn-labeled bg-pink btn-sm text-white",
    "data-toggle": "modal",
    "data-target": "#modalInfo"
  }, "MODIFIER LES INFORMATIONS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    type: "button",
    className: "btn btn-block btn-labeled bg-pink text-white btn-sm",
    "data-toggle": "modal",
    "data-target": "#modalMise"
  }, "MISE EN FORME DU BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null)))), bon.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("a", {
    className: "btn bg-pink text-white m-r-5 waves-effect",
    onClick: devalideBon
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-check-circle"
  }), " D\xC9VALIDER"), bon.etat !== "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-blue text-white m-r-5",
    onClick: valideBon
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-check-circle"
  }), " VALIDER"), bon.etat !== "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-pink text-white m-r-5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-trash"
  }), " SUPPRIMER"), bon.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-indigo text-white m-r-5",
    onClick: handlePrint
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-print"
  }), " IMPRIMER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-deep-orange text-white m-r-5",
    onClick: handlePrint
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fa fa-envelope"
  }), " MAIL"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("button", {
    className: "btn bg-pri text-white",
    onClick: pdfBon
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("i", {
    className: "fas fa-file-pdf"
  }), " PDF"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_41__["default"], {
    id: "test-table-xls-button",
    className: "btn bg-green text-white m-r-5",
    table: "bon2excel",
    filename: "Bon de commande N\xB0 ".concat(bon.numbon),
    sheet: "tablexls",
    buttonText: "EXCEL"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("table", {
    id: "borde",
    style: {
      width: "100%",
      marginTop: "30px",
      backgroundColor: "#FFF"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", {
    className: "bg-pri text-white",
    style: {
      fontSize: "12px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("th", {
    style: {
      textAlign: "left",
      padding: "10px"
    }
  }, "D\xC9SIGNATION")), renderGroupeMobile, renderLigneMobile, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
    className: "text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "TOTAL HT : "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
    numb: bon.totalht
  }), "\xA0\xA0\xA0")), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
    className: "text-right p-r-10"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "REMISE : "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
    numb: bon.vremise
  }), "\xA0\xA0\xA0")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
    className: "text-right p-r-10"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "TVA(", bon.tva, "%): "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
    numb: bon.vtva
  }), "\xA0\xA0\xA0")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
    className: "text-right p-r-10 col-blue font-bold"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, "BON TOTAL TTC : "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_37__["default"], {
    numb: bon.totalttc
  }), "\xA0\xA0\xA0")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("td", {
    className: "text-right p-r-10 font-bold"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("p", {
    className: "text-center"
  }, "Arr\xEAt\xE9 le bon \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), " ", numberToLetters(parseInt(bon.totalttc), {
    lang: 'fr'
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("span", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("b", null, " ", bon.monnaie.code))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), bon.conditions !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement((react__WEBPACK_IMPORTED_MODULE_34___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("p", {
    style: {
      "float": "left",
      color: "#4e73df"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("u", null, "INFORMATIONS ADDITIONNELLES")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: bon.conditions
    }
  })))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement("br", null)))));
};
try {
  var container = document.getElementById('shacontentCommande');
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_42__.createRoot)(container);
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_34___default().createElement(Commande, null));
} catch (e) {}

/***/ }),

/***/ "./assets/components/commande/PrintCommande.js":
/*!*****************************************************!*\
  !*** ./assets/components/commande/PrintCommande.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "PrintCommande": () => (/* binding */ PrintCommande)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_string_link_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.string.link.js */ "./node_modules/core-js/modules/es.string.link.js");
/* harmony import */ var core_js_modules_es_string_link_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_link_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./../../fonctions/NumberFormat */ "./assets/fonctions/NumberFormat.js");





var PrintCommande = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().forwardRef(function (props, ref) {
  var bon = props.bon;
  var renderLigne = props.renderLigne;
  var renderCaisse = props.renderCaisse;
  var renderGroupe = props.renderGroupe;
  var forme = props.forme;
  var bondate = $("#bondate").val();
  var numberToLetters = __webpack_require__(/*! number-2-letters */ "./node_modules/number-2-letters/lib/index.js");
  var caisses = bon.caisses;
  var cc = 0;
  caisses.map(function (caiss) {
    if (caiss.etat === 'valide') {
      cc = cc + 1;
    }
  });
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
    className: "cocolor",
    style: {
      paddingRight: forme.teteDD + "cm",
      paddingLeft: forme.teteDG + "cm",
      paddingTop: forme.teteDH + "cm",
      paddingBottom: forme.teteDB + "cm"
    },
    dangerouslySetInnerHTML: {
      __html: forme.headerText
    }
  })), forme.typeEntete === "aucun" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("h3", {
    className: "text-center col-black"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "Dimension de la zone d'ent\xEAte", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), forme.headerHeight, "cm x ", forme.headerWith, "cm"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("h5", {
    className: "text-center col-blue-grey"
  }, "Veuillez cliquer sur le bouton ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "\"MISE EN FORME DU DEVIS\""), " pour apporter des modifications svp."))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "bood",
    style: {
      paddingLeft: "1cm",
      paddingRight: "1cm"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right",
    style: {
      marginTop: "10px",
      marginBottom: "25px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center",
      lineHeight: "1.5"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, bon.chantier.client.nomclient.toUpperCase()), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), bon.chantier.client.adresse === " " && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), " ", bon.chantier.client.adresse, " ")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    cellSpacing: "0",
    align: "left",
    style: {
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      fontSize: "25px"
    }
  }, bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BON DE COMMANDE - FOURNISSEUR"), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BON DE RETOUR DE COMMANDE - FOURNISSEUR"), bon.type === "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BON DE LIVRAISON"), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BON DE COMMANDE - PRESTATAIRE"), bon.type === "cps" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "PR\xC9VISION ARTICLE COMPOS\xC9"), bon.type === "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BON DE SUIVI DE COMMANDE")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    cellSpacing: "0"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    style: {
      backgroundColor: "#F0F0F0",
      fontWeight: "700",
      width: "45%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "N\xB0 BON"), bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "N\xB0 BON DE SUIVI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "SUR DEVIS N\xB0"), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "PRESTATAIRE"), bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "FOURNISSEUR"), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "FOURNISSEUR")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bondate), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.numbon), bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.preparation !== null && bon.preparation.numbon), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.devis !== null && bon.devis.iddevis), bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.fournisseur !== null && bon.fournisseur.fournisseur), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.fournisseur !== null && bon.fournisseur.fournisseur), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.fournisseur !== null && bon.fournisseur.fournisseur)), bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, bon.type === "pst" && bon.type === "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  })), bon.type !== "pst" && bon.type !== "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  }))), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, bon.type === "pst" && bon.type === "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  })), bon.type !== "pst" && bon.type !== "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  }))), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  }))), bon.type === "cps" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%",
      marginTop: "20px"
    },
    cellSpacing: "0"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    className: "printer"
  }, bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " R\xC9F "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "bor text-left"
  }, " D\xC9SIGNATION"), bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " UNIT\xC9"), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "PRIX U.")), bon.type === "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "PR\xC9VUE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " RESTE\xA0\xC0 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVRER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "PRIX U.")), bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "PR\xC9VUE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " RESTE\xA0\xC0 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVRER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "DEMAND\xC9E")), bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "PRIX U.")), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "PR\xC9VUE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " RESTE\xA0\xC0 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVRER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "\xC0 RETOURNER")), bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "PRIX U.")), bon.type === "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "PR\xC9VUE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " RESTE\xA0\xC0 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVRER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "DEMAND\xC9E")), bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "PRIX U.")), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " REMISE(%) "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "MONTANT HT")), bon.type === "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " UNIT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      maxWidth: "100px"
    }
  }, "QUANTIT\xC9 LIVR\xC9E"))), renderGroupe, renderLigne, bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, cc !== 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.aarem === 'oui' && bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      color: "red"
    },
    colSpan: "13",
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "HISTORIQUE DES PAIEMENTS"))), bon.aarem !== 'oui' && bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      color: "red"
    },
    colSpan: "12",
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "HISTORIQUE DES PAIEMENTS"))), renderCaisse), bon.aaref === 'non' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.aarem === 'oui' && bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      color: "red"
    },
    colSpan: "12",
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "HISTORIQUE DES PAIEMENTS"))), bon.aarem !== 'oui' && bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      color: "red"
    },
    colSpan: "11",
    className: "borde"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "HISTORIQUE DES PAIEMENTS"))), renderCaisse))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), bon.type !== "pst" && bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.type !== "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    className: "table-bordered",
    style: {
      "float": "left",
      width: "30%",
      marginTop: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    style: {
      fontWeight: "600"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "SOMME PER\xC7UE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "RESTE \xC0 PAYER"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.recu
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.reste
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    className: "table-bordered",
    style: {
      "float": "right",
      width: "60%",
      marginTop: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    style: {
      fontWeight: "600"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), bon.aarem === 'oui' && bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", bon.tva, "%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.totalht
  })), bon.aarem === 'oui' && bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.vremise
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.vtva
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.totalttc
  }))))), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    className: "table-bordered",
    style: {
      "float": "left",
      width: "60%",
      marginTop: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    style: {
      fontWeight: "600"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), bon.aarem === 'oui' && bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", bon.tva, "%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.totalht
  })), bon.aarem === 'oui' && bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.vremise
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.vtva
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.totalttc
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    className: "table-bordered",
    style: {
      "float": "right",
      width: "38%",
      marginTop: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    style: {
      fontWeight: "600"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "SOMME PER\xC7UE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "RESTE \xC0 PAYER"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.recu
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.reste
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "text-left"
  }, "Arr\xEAt\xE9 le bon \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ", numberToLetters(parseInt(bon.totalttc), {
    lang: 'fr'
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, " ", bon.monnaie.code))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, " SIGNATURE AUTORIS\xC9E "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), bon.type === "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%",
      marginTop: "5px"
    },
    cellSpacing: "0"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "left",
      textDecoration: "underline"
    }
  }, "VISA CHEF CHANTIER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "center",
      textDecoration: "underline"
    }
  }, "VISA CHEF D\xC9P\xD4T"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right",
      textDecoration: "underline"
    }
  }, "VISA DIRECTION")))), bon.conditions !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "kop",
    style: {
      "float": "left",
      color: "#000"
    }
  }, " INFORMATIONS ADDITIONNELLES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: bon.conditions
    }
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "footer"
  }, forme.typeFooter !== "aucun" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, forme.typeFooter === "texte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      fontSize: forme.piedsize + "px",
      textAlign: "center",
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
      height: forme.footerHeight + "cm"
    },
    alt: ""
  })), forme.typeFooter === "aucun" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("h5", {
    className: "text-center col-black"
  }, "Dimension de la zone de pied de page = ", forme.footerHeight, "cm x ", forme.headerWith, "cm"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("h6", {
    className: "text-center col-blue-grey"
  }, "Veuillez cliquer sur le bouton ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "\"MISE EN FORME DU DEVIS\""), " pour apporter des modifications svp.")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
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
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "header-space"
  }, "\xA0")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tbody", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    align: "right",
    style: {
      marginTop: "10px",
      marginBottom: "25px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      textAlign: "center",
      lineHeight: "1.5"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, bon.chantier.client.nomclient), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, bon.chantier.nomchantier), bon.chantier.client.adresse === " " && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), " ", bon.chantier.client.adresse, " ")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    cellSpacing: "0",
    align: "left",
    style: {
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      border: "none",
      fontSize: "25px"
    }
  }, bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BON DE COMMANDE - FOURNISSEUR"), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BON DE RETOUR DE COMMANDE - FOURNISSEUR"), bon.type === "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BON DE LIVRAISON"), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BON DE COMMANDE - PRESTATAIRE"), bon.type === "cps" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "PR\xC9VISION ARTICLE COMPOS\xC9"), bon.type === "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "BON DE SUIVI DE COMMANDE")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    cellSpacing: "0"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    className: "printo",
    style: {
      width: "45%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "N\xB0 BON"), bon.type === "oui" || bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "N\xB0 BON DE SUIVI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "SUR DEVIS N\xB0"), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "PRESTATAIRE"), bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "FOURNISSEUR"), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, "FOURNISSEUR")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bondate), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.numbon), bon.type === "oui" || bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.preparation !== null && bon.preparation.numbon), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.devis !== null && bon.devis.iddevis), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.fournisseur !== null && bon.fournisseur.fournisseur), bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.fournisseur !== null && bon.fournisseur.fournisseur), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde"
  }, bon.fournisseur !== null && bon.fournisseur.fournisseur)), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, bon.type === "pst" && bon.type === "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  })), bon.type !== "pst" && bon.type !== "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  }))), bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  })), bon.type !== "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  }))), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "4",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  }))), bon.type === "cps" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "3",
    className: "borde align-left"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    style: {
      textDecoration: "underline",
      lineHeight: "1.2",
      fontWeight: "bold"
    }
  }, " R\xC9F\xC9RENCE "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", {
    dangerouslySetInnerHTML: {
      __html: bon.bonreference
    }
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%",
      marginTop: "20px"
    },
    cellSpacing: "0"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    className: "printer"
  }, bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " R\xC9F "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "bor text-left"
  }, " D\xC9SIGNATION"), bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " UNIT\xC9"), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "PRIX U.")), bon.type === "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "PR\xC9VUE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " RESTE\xA0\xC0 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVRER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "PRIX U.")), bon.type === "oui" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "PR\xC9VUE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " RESTE\xA0\xC0 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVRER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "DEMAND\xC9E")), bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "PRIX U.")), bon.type === "non" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "PR\xC9VUE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " RESTE\xA0\xC0 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVRER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "\xC0 RETOURNER")), bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "PRIX U.")), bon.type === "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.preparation !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "PR\xC9VUE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " RESTE\xA0\xC0 ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "LIVRER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), "DEMAND\xC9E")), bon.preparation === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " QT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "PRIX U.")), bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " REMISE(%) "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      whiteSpace: "nowrap"
    }
  }, "MONTANT HT")), bon.type === "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center"
  }, " UNIT\xC9"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("th", {
    className: "borde text-center",
    style: {
      maxWidth: "100px"
    }
  }, "QUANTIT\xC9 LIVR\xC9E"))), renderGroupe, renderLigne, bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, cc !== 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.aaref === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "7",
    className: "borde kope"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "HISTORIQUE DES PAIEMENTS"))), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "6",
    className: "borde kope"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "HISTORIQUE DES PAIEMENTS"))), renderCaisse), bon.aaref !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.aarem === 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "6",
    className: "borde kope"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "HISTORIQUE DES PAIEMENTS"))), bon.aarem !== 'oui' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    colSpan: "5",
    className: "borde kope"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "HISTORIQUE DES PAIEMENTS"))), renderCaisse)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), bon.type !== "pst" && bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, bon.type !== "prepa" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    className: "table-bordered",
    style: {
      "float": "left",
      width: "30%",
      marginTop: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    style: {
      fontWeight: "600"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "SOMME PER\xC7UE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "RESTE \xC0 PAYER"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.recu
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.reste
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    className: "table-bordered",
    style: {
      "float": "right",
      width: "60%",
      marginTop: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    style: {
      fontWeight: "600"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), bon.aarem === 'oui' && bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", bon.tva, "%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.totalht
  })), bon.aarem === 'oui' && bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.vremise
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.vtva
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.totalttc
  }))))), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    className: "table-bordered",
    style: {
      "float": "left",
      width: "60%",
      marginTop: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    style: {
      fontWeight: "600"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TOTAL HT")), bon.aarem === 'oui' && bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "REMISE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "TVA ", bon.tva, "%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "NET \xC0 PAYER"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.totalht
  })), bon.aarem === 'oui' && bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.vremise
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.vtva
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.totalttc
  })))), bon.type === "pst" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    className: "table-bordered",
    style: {
      "float": "right",
      width: "38%",
      marginTop: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", {
    style: {
      fontWeight: "600"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "SOMME PER\xC7UE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    style: {
      textAlign: "center",
      backgroundColor: "#f8f9fa"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, "RESTE \xC0 PAYER"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.recu
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    className: "borde",
    align: "center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_4__["default"], {
    numb: bon.reste
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), bon.type !== "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "text-center"
  }, "Arr\xEAt\xE9 le bon \xE0 la somme de:", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), " ", numberToLetters(parseInt(bon.totalttc), {
    lang: 'fr'
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("span", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("b", null, " ", bon.monnaie.code))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      "float": "right",
      textDecoration: "underline"
    }
  }, " SIGNATURE AUTORIS\xC9E "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("br", null)), bon.type === "none" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("table", {
    style: {
      width: "100%",
      marginTop: "5px"
    },
    cellSpacing: "0"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "left",
      textDecoration: "underline"
    }
  }, "VISA CHEF CHANTIER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "center",
      textDecoration: "underline"
    }
  }, "VISA CHEF D\xC9P\xD4T"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", {
    style: {
      textAlign: "right",
      textDecoration: "underline"
    }
  }, "VISA DIRECTION")))), bon.conditions !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    className: "kop",
    style: {
      "float": "left",
      color: "#000"
    }
  }, " INFORMATIONS ADDITIONNELLES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      clear: "both"
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      color: "#000000"
    },
    dangerouslySetInnerHTML: {
      __html: bon.conditions
    }
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "footer-space"
  }, "\xA0")))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("div", {
    className: "footer"
  }, forme.pied !== "aucun" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement((react__WEBPACK_IMPORTED_MODULE_3___default().Fragment), null, forme.typeFooter === "texte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3___default().createElement("p", {
    style: {
      fontSize: forme.piedsize + "px",
      textAlign: "center",
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
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-383511","vendors-node_modules_core-js_modules_es_array_from_js-node_modules_core-js_modules_es_array_i-c84b5d","vendors-node_modules_moment_locale_af_js-node_modules_moment_locale_ar-dz_js-node_modules_mom-582c96","vendors-node_modules_react-html-table-to-excel_index_js","vendors-node_modules_react-moment_dist_index_js","vendors-node_modules_core-js_modules_es_parse-float_js-node_modules_react-device-detect_dist_lib_js","vendors-node_modules_number-2-letters_lib_index_js-node_modules_react-to-print_lib_index_js","vendors-node_modules_react-edit-text_dist_index_modern_js","assets_js_datascript_js-assets_js_jquery_validate_js-assets_css_mdb_css","assets_js_admin_js-assets_js_bootstrap_js-assets_js_jquery_tableToExcel_js-assets_js_select2_-13fb9c"], () => (__webpack_exec__("./assets/apbons.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBib25zLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQTZCO0FBQ047QUFDRTtBQUNLO0FBQ0M7QUFDTjtBQUdFO0FBQ0M7QUFDQztBQUNRO0FBQ0o7QUFDVjtBQUNlOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OzsrQ0NidEM7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRHlEO0FBQ1Y7QUFDRDtBQUNVO0FBQ2Y7QUFDTTtBQUNyQjtBQUNIO0FBQ3VDO0FBQ2xCO0FBQ1Y7QUFFbEMsSUFBTWMsUUFBUSxHQUFHLFNBQVhBLFFBQVEsR0FBUztFQUVuQixnQkFBOEJYLGdEQUFRLENBQUMsS0FBSyxDQUFDO0lBQUE7SUFBdENZLE9BQU87SUFBRUMsVUFBVTtFQUMxQixpQkFBc0JiLGdEQUFRLENBQUMsRUFBRSxDQUFDO0lBQUE7SUFBM0JjLEdBQUc7SUFBRUMsTUFBTTtFQUNsQixpQkFBNEJmLGdEQUFRLENBQUMsRUFBRSxDQUFDO0lBQUE7SUFBakNnQixNQUFNO0lBQUVDLFNBQVM7RUFDeEIsaUJBQThCakIsZ0RBQVEsQ0FBQyxFQUFFLENBQUM7SUFBQTtJQUFuQ2tCLE9BQU87SUFBRUMsVUFBVTtFQUMxQixpQkFBMEJuQixnREFBUSxDQUFDLEVBQUUsQ0FBQztJQUFBO0lBQS9Cb0IsS0FBSztJQUFFQyxRQUFRO0VBQ3RCLGtCQUE0QnJCLGdEQUFRLENBQUMsRUFBRSxDQUFDO0lBQUE7SUFBakNzQixNQUFNO0lBQUVDLFNBQVM7RUFFeEIsSUFBTUMsUUFBUTtJQUFBLHNFQUFHO01BQUE7TUFBQTtRQUFBO1VBQUE7WUFDUEMsSUFBSSxHQUFHQyxJQUFJLENBQUNDLEtBQUssQ0FBQ3BCLDhDQUFDLENBQUMsVUFBVSxDQUFDLENBQUNxQixHQUFHLEVBQUUsQ0FBQztZQUN0Q1IsS0FBSyxHQUFHTSxJQUFJLENBQUNDLEtBQUssQ0FBQ3BCLDhDQUFDLENBQUMsWUFBWSxDQUFDLENBQUNxQixHQUFHLEVBQUUsQ0FBQztZQUN6Q04sTUFBTSxHQUFHSSxJQUFJLENBQUNDLEtBQUssQ0FBQ3BCLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUNxQixHQUFHLEVBQUUsQ0FBQztZQUNqRGIsTUFBTSxDQUFDVSxJQUFJLENBQUM7WUFDWlIsU0FBUyxDQUFDUSxJQUFJLENBQUNULE1BQU0sQ0FBQztZQUN0QkcsVUFBVSxDQUFDTSxJQUFJLENBQUNQLE9BQU8sQ0FBQztZQUN4QkwsVUFBVSxDQUFDLElBQUksQ0FBQztZQUNoQlEsUUFBUSxDQUFDRCxLQUFLLENBQUM7WUFDZkcsU0FBUyxDQUFDRCxNQUFNLENBQUM7WUFDakIsSUFBSUcsSUFBSSxDQUFDSSxXQUFXLEtBQUssSUFBSSxFQUFFO2NBQzNCQyxRQUFRLENBQUNMLElBQUksQ0FBQ0ksV0FBVyxDQUFDYixNQUFNLENBQUM7WUFDckM7VUFBQztVQUFBO1lBQUE7UUFBQTtNQUFBO0lBQUEsQ0FFSjtJQUFBLGdCQWRLUSxRQUFRO01BQUE7SUFBQTtFQUFBLEdBY2I7RUFDRDFCLGlEQUFTLENBQUMsWUFBTTtJQUNaMEIsUUFBUSxFQUFFO0VBQ2QsQ0FBQyxFQUFFLEVBQUUsQ0FBQztFQUVOLElBQUlPLFdBQVcsR0FBRyxJQUFJO0VBQ3RCLElBQUlDLFlBQVksR0FBRyxJQUFJO0VBQ3ZCLElBQUlDLFlBQVksR0FBRyxJQUFJO0VBQ3ZCLElBQUlDLGtCQUFrQixHQUFHLElBQUk7RUFDN0IsSUFBSUMsaUJBQWlCLEdBQUcsSUFBSTtFQUM1QixJQUFNQyxlQUFlLEdBQUdDLG1CQUFPLENBQUMsc0VBQWtCLENBQUM7RUFFbkQsSUFBTUMsWUFBWSxHQUFHdkMsOENBQU0sRUFBRTtFQUM3QixJQUFNd0MsV0FBVyxHQUFHdEMsZ0VBQWUsQ0FBQztJQUNoQ3VDLE9BQU8sRUFBRTtNQUFBLE9BQU1GLFlBQVksQ0FBQ0csT0FBTztJQUFBO0VBQ3ZDLENBQUMsQ0FBQztFQUNGLElBQU1DLFlBQVksR0FBR3pDLGdFQUFlLENBQUM7SUFDakN1QyxPQUFPLEVBQUU7TUFBQSxPQUFNRixZQUFZLENBQUNHLE9BQU87SUFBQTtJQUNuQ0Usa0JBQWtCLEVBQUUsOEJBQU07TUFDdEJwQyw4Q0FBQyxDQUFDLFNBQVMsQ0FBQyxDQUFDcUMsUUFBUSxDQUFDLE1BQU0sQ0FBQztNQUM3QnJDLDhDQUFDLENBQUMsU0FBUyxDQUFDLENBQUNxQyxRQUFRLENBQUMsTUFBTSxDQUFDO0lBQ2pDLENBQUM7SUFDREMsWUFBWSxFQUFFLHdCQUFNO01BQ2hCdEMsOENBQUMsQ0FBQyxTQUFTLENBQUMsQ0FBQ3VDLFdBQVcsQ0FBQyxNQUFNLENBQUM7TUFDaEN2Qyw4Q0FBQyxDQUFDLFNBQVMsQ0FBQyxDQUFDdUMsV0FBVyxDQUFDLE1BQU0sQ0FBQztJQUNwQztFQUNKLENBQUMsQ0FBQztFQUVGLFNBQVNDLE1BQU0sQ0FBQ0MsQ0FBQyxFQUFFO0lBQ2ZBLENBQUMsQ0FBQ0MsY0FBYyxFQUFFO0lBQ2xCMUMsOENBQUMsQ0FBQyxRQUFRLENBQUMsQ0FBQzJDLEdBQUcsQ0FBQyxTQUFTLEVBQUUsT0FBTyxDQUFDO0lBQ25DQyxNQUFNLENBQUNDLFFBQVEsQ0FBQ0MsSUFBSSxHQUFHLG1CQUFtQixHQUFHdkMsR0FBRyxDQUFDd0MsRUFBRSxHQUFHLFVBQVU7RUFDcEU7RUFDQSxJQUFNQyxZQUFZLEdBQUcsU0FBZkEsWUFBWSxDQUFJQyxHQUFHLEVBQUVDLFNBQVMsRUFBRUMsU0FBUyxFQUFLO0lBQ2hELElBQUlDLEtBQUs7SUFDVEgsR0FBRyxHQUFHSSxNQUFNLENBQUNKLEdBQUcsQ0FBQztJQUNqQkEsR0FBRyxHQUFHLENBQUMsT0FBT0MsU0FBUyxLQUFLLFdBQVcsR0FBR0QsR0FBRyxDQUFDSyxPQUFPLENBQUNKLFNBQVMsQ0FBQyxHQUFHRCxHQUFHLEVBQUVNLFFBQVEsRUFBRTtJQUNsRkgsS0FBSyxHQUFHSCxHQUFHLENBQUNPLEtBQUssQ0FBQyxHQUFHLENBQUM7SUFDdEJKLEtBQUssQ0FBQyxDQUFDLENBQUMsR0FBR0EsS0FBSyxDQUFDLENBQUMsQ0FBQyxDQUFDRyxRQUFRLEVBQUUsQ0FBQ0UsT0FBTyxDQUFDLHlCQUF5QixFQUFFLElBQUksR0FBSU4sU0FBVSxDQUFDO0lBQ3JGLE9BQU9DLEtBQUssQ0FBQ00sSUFBSSxDQUFDLEdBQUcsQ0FBQztFQUMxQixDQUFDO0VBQUEsU0FDY0MsWUFBWTtJQUFBO0VBQUE7RUFBQTtJQUFBLDJFQUEzQixtQkFBNEJsQixDQUFDO01BQUE7UUFBQTtVQUFBO1lBQ3pCQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtZQUNsQjFDLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQzlCNUQsOENBQUMsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUNqQzVELDhDQUFDLENBQUMsU0FBUyxDQUFDLENBQUM2RCxLQUFLLDBFQUFDO2NBQUE7Z0JBQUE7a0JBQUE7b0JBQ2Y3RCw4Q0FBQyxDQUFDLGdCQUFnQixDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO29CQUNqQzVELDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO29CQUFBO29CQUFBLE9BQ3hCN0Qsa0RBQUssQ0FBQztzQkFDUitELE1BQU0sRUFBRSxNQUFNO3NCQUNkQyxHQUFHLEVBQUUscUJBQXFCLEdBQUd4RCxHQUFHLENBQUN3QztvQkFDckMsQ0FBQyxDQUFDLENBQUNpQixJQUFJLENBQUMsVUFBVUMsUUFBUSxFQUFFO3NCQUN4QnJCLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDQyxJQUFJLEdBQUcsV0FBVyxHQUFHbUIsUUFBUSxDQUFDQyxJQUFJLENBQUMsUUFBUSxDQUFDLEdBQUcsR0FBRyxHQUFHM0QsR0FBRyxDQUFDNEQsUUFBUSxDQUFDcEIsRUFBRTtvQkFDeEYsQ0FBQyxDQUFDLFNBQU0sQ0FBQyxVQUFVcUIsS0FBSyxFQUFFO3NCQUN0QnBFLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsUUFBUSxDQUFDO3NCQUNoQzVELDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO29CQUNuQyxDQUFDLENBQUM7a0JBQUE7a0JBQUE7b0JBQUE7Z0JBQUE7Y0FBQTtZQUFBLENBQ0wsR0FBQztVQUFDO1VBQUE7WUFBQTtRQUFBO01BQUE7SUFBQSxDQUNOO0lBQUE7RUFBQTtFQUFBLFNBQ2NTLFVBQVU7SUFBQTtFQUFBO0VBQUE7SUFBQSx5RUFBekIsbUJBQTBCQyxJQUFJO01BQUE7TUFBQTtRQUFBO1VBQUE7WUFDcEJqRCxHQUFHLEdBQUdpRCxJQUFJLENBQUNDLEtBQUssQ0FBQ2QsT0FBTyxDQUFDLEdBQUcsRUFBRSxHQUFHLENBQUM7WUFBQSxNQUNwQ2EsSUFBSSxDQUFDQyxLQUFLLEtBQUssRUFBRSxJQUFJLENBQUNDLEtBQUssQ0FBQ25ELEdBQUcsQ0FBQztjQUFBO2NBQUE7WUFBQTtZQUNoQ3JCLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQUM7WUFBQSxPQUN6QjdELGtEQUFLLENBQUM7Y0FDUitELE1BQU0sRUFBRSxNQUFNO2NBQ2RDLEdBQUcsRUFBRSw0QkFBNEIsR0FBR08sSUFBSSxDQUFDRyxJQUFJLEdBQUcsR0FBRyxHQUFHbEUsR0FBRyxDQUFDd0MsRUFBRSxHQUFHLEdBQUcsR0FBR3VCLElBQUksQ0FBQ0MsS0FBSyxDQUFDZCxPQUFPLENBQUMsR0FBRyxFQUFFLEdBQUc7WUFDcEcsQ0FBQyxDQUFDLENBQUNPLElBQUksQ0FBQyxVQUFVQyxRQUFRLEVBQUU7Y0FDeEJyQixNQUFNLENBQUNDLFFBQVEsQ0FBQzZCLE1BQU0sRUFBRTtZQUM1QixDQUFDLENBQUMsU0FBTSxDQUFDLFVBQVVOLEtBQUssRUFBRTtjQUN0QnBFLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQ25DLENBQUMsQ0FBQztVQUFBO1lBQUE7WUFBQTtVQUFBO1lBRUZoQixNQUFNLENBQUNDLFFBQVEsQ0FBQzZCLE1BQU0sRUFBRTtVQUFBO1VBQUE7WUFBQTtRQUFBO01BQUE7SUFBQSxDQUUvQjtJQUFBO0VBQUE7RUFBQSxTQUNjQyxNQUFNO0lBQUE7RUFBQTtFQUFBO0lBQUEscUVBQXJCLG1CQUFzQkwsSUFBSTtNQUFBO01BQUE7UUFBQTtVQUFBO1lBQ2hCakQsR0FBRyxHQUFHaUQsSUFBSSxDQUFDQyxLQUFLLENBQUNkLE9BQU8sQ0FBQyxHQUFHLEVBQUUsR0FBRyxDQUFDO1lBQUEsTUFDcENhLElBQUksQ0FBQ0MsS0FBSyxLQUFLLEVBQUUsSUFBSSxDQUFDQyxLQUFLLENBQUNuRCxHQUFHLENBQUM7Y0FBQTtjQUFBO1lBQUE7WUFDaENyQiw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUFDO1lBQUEsT0FDekI3RCxrREFBSyxDQUFDO2NBQ1IrRCxNQUFNLEVBQUUsTUFBTTtjQUNkQyxHQUFHLEVBQUUsd0JBQXdCLEdBQUdPLElBQUksQ0FBQ0csSUFBSSxHQUFHLEdBQUcsR0FBR2xFLEdBQUcsQ0FBQ3dDLEVBQUUsR0FBRyxHQUFHLEdBQUd1QixJQUFJLENBQUNDLEtBQUssQ0FBQ2QsT0FBTyxDQUFDLEdBQUcsRUFBRSxHQUFHO1lBQ2hHLENBQUMsQ0FBQyxDQUFDTyxJQUFJLENBQUMsVUFBVUMsUUFBUSxFQUFFO2NBQ3hCckIsTUFBTSxDQUFDQyxRQUFRLENBQUM2QixNQUFNLEVBQUU7WUFDNUIsQ0FBQyxDQUFDLFNBQU0sQ0FBQyxVQUFVTixLQUFLLEVBQUU7Y0FDdEJwRSw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUNuQyxDQUFDLENBQUM7VUFBQTtZQUFBO1lBQUE7VUFBQTtZQUVGaEIsTUFBTSxDQUFDQyxRQUFRLENBQUM2QixNQUFNLEVBQUU7VUFBQTtVQUFBO1lBQUE7UUFBQTtNQUFBO0lBQUEsQ0FFL0I7SUFBQTtFQUFBO0VBQUEsU0FDY0UsT0FBTztJQUFBO0VBQUE7RUFBQTtJQUFBLHNFQUF0QixtQkFBdUJOLElBQUk7TUFBQTtNQUFBO1FBQUE7VUFBQTtZQUNqQmpELEdBQUcsR0FBR2lELElBQUksQ0FBQ0MsS0FBSyxDQUFDZCxPQUFPLENBQUMsR0FBRyxFQUFFLEdBQUcsQ0FBQztZQUFBLE1BQ3BDYSxJQUFJLENBQUNDLEtBQUssS0FBSyxFQUFFLElBQUksQ0FBQ0MsS0FBSyxDQUFDbkQsR0FBRyxDQUFDO2NBQUE7Y0FBQTtZQUFBO1lBQ2hDckIsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7WUFBQztZQUFBLE9BQ3pCN0Qsa0RBQUssQ0FBQztjQUNSK0QsTUFBTSxFQUFFLE1BQU07Y0FDZEMsR0FBRyxFQUFFLHlCQUF5QixHQUFHTyxJQUFJLENBQUNHLElBQUksR0FBRyxHQUFHLEdBQUdsRSxHQUFHLENBQUN3QyxFQUFFLEdBQUcsR0FBRyxHQUFHdUIsSUFBSSxDQUFDQyxLQUFLLENBQUNkLE9BQU8sQ0FBQyxHQUFHLEVBQUUsR0FBRztZQUNqRyxDQUFDLENBQUMsQ0FBQ08sSUFBSSxDQUFDLFVBQVVDLFFBQVEsRUFBRTtjQUN4QnJCLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDNkIsTUFBTSxFQUFFO1lBQzVCLENBQUMsQ0FBQyxTQUFNLENBQUMsVUFBVU4sS0FBSyxFQUFFO2NBQ3RCcEUsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7WUFDbkMsQ0FBQyxDQUFDO1VBQUE7WUFBQTtZQUFBO1VBQUE7WUFFRmhCLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDNkIsTUFBTSxFQUFFO1VBQUE7VUFBQTtZQUFBO1FBQUE7TUFBQTtJQUFBLENBRS9CO0lBQUE7RUFBQTtFQUFBLFNBQ2NHLFNBQVM7SUFBQTtFQUFBO0VBQUE7SUFBQSx3RUFBeEIsbUJBQXlCUCxJQUFJO01BQUE7UUFBQTtVQUFBO1lBQUEsTUFDckJBLElBQUksQ0FBQ0MsS0FBSyxLQUFLLEVBQUU7Y0FBQTtjQUFBO1lBQUE7WUFDakJ2RSw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUFDO1lBQUEsT0FDekI3RCxrREFBSyxDQUFDO2NBQ1IrRCxNQUFNLEVBQUUsTUFBTTtjQUNkQyxHQUFHLEVBQUUsMkJBQTJCLEdBQUdPLElBQUksQ0FBQ0csSUFBSSxHQUFHLEdBQUcsR0FBR2xFLEdBQUcsQ0FBQ3dDLEVBQUUsR0FBRyxHQUFHLEdBQUd1QixJQUFJLENBQUNDO1lBQzdFLENBQUMsQ0FBQyxDQUFDUCxJQUFJLENBQUMsVUFBVUMsUUFBUSxFQUFFO2NBQ3hCLElBQUlhLEtBQUssR0FBR2IsUUFBUSxDQUFDQyxJQUFJO2NBQ3pCMUQsTUFBTSxDQUFDc0UsS0FBSyxDQUFDO2NBQ2JwRSxTQUFTLENBQUNvRSxLQUFLLENBQUNyRSxNQUFNLENBQUM7Y0FDdkIsSUFBSXFFLEtBQUssQ0FBQ3hELFdBQVcsS0FBSyxJQUFJLEVBQUU7Z0JBQzVCQyxRQUFRLENBQUN1RCxLQUFLLENBQUN4RCxXQUFXLENBQUNiLE1BQU0sQ0FBQztjQUN0QztjQUNBVCw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUNsQyxDQUFDLENBQUMsU0FBTSxDQUFDLFVBQVVRLEtBQUssRUFBRTtjQUN0QnBFLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQ25DLENBQUMsQ0FBQztVQUFBO1lBQUE7WUFBQTtVQUFBO1lBRUZoQixNQUFNLENBQUNDLFFBQVEsQ0FBQzZCLE1BQU0sRUFBRTtVQUFBO1VBQUE7WUFBQTtRQUFBO01BQUE7SUFBQSxDQUUvQjtJQUFBO0VBQUE7RUFDRCxJQUFNSyxXQUFXLEdBQUcsU0FBZEEsV0FBVyxDQUFJQyxLQUFLLEVBQUs7SUFDM0IsSUFBSWxGLDREQUFVLEtBQUssUUFBUSxFQUFFO01BQ3pCRSw4Q0FBQyxDQUFDLFlBQVksQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLFFBQVEsQ0FBQztJQUNuQztJQUNBNUQsOENBQUMsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztJQUNqQzVELDhDQUFDLENBQUMsU0FBUyxDQUFDLENBQUM2RCxLQUFLLDBFQUFDO01BQUE7UUFBQTtVQUFBO1lBQ2Y3RCw4Q0FBQyxDQUFDLGdCQUFnQixDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQ2pDNUQsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7WUFBQztZQUFBLE9BQ3pCN0Qsa0RBQUssQ0FBQztjQUNSK0QsTUFBTSxFQUFFLFFBQVE7Y0FDaEJDLEdBQUcsRUFBRSxvQkFBb0IsR0FBR3hELEdBQUcsQ0FBQ3dDLEVBQUUsR0FBRyxHQUFHLEdBQUd4QyxHQUFHLENBQUM0RCxRQUFRLENBQUNwQixFQUFFLEdBQUcsR0FBRyxHQUFHaUMsS0FBSyxHQUFHLE1BQU07Y0FDakZDLFdBQVcsRUFBRSxpQ0FBaUM7Y0FDOUNDLFFBQVEsRUFBRTtZQUNkLENBQUMsQ0FBQyxDQUFDbEIsSUFBSSxDQUFDLFVBQVVDLFFBQVEsRUFBRTtjQUN4QnJCLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDNkIsTUFBTSxFQUFFO1lBQzVCLENBQUMsQ0FBQyxTQUFNLENBQUMsVUFBVU4sS0FBSyxFQUFFO2NBQ3RCcEUsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7Y0FDOUI1RCw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUNuQyxDQUFDLENBQUM7VUFBQTtVQUFBO1lBQUE7UUFBQTtNQUFBO0lBQUEsQ0FDTCxHQUFDO0VBQ04sQ0FBQztFQUNELElBQU11QixZQUFZLEdBQUcsU0FBZkEsWUFBWSxDQUFJSCxLQUFLLEVBQUs7SUFDNUIsSUFBSWxGLDREQUFVLEtBQUssUUFBUSxFQUFFO01BQ3pCRSw4Q0FBQyxDQUFDLFlBQVksQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLFFBQVEsQ0FBQztJQUNuQztJQUNBNUQsOENBQUMsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztJQUNqQzVELDhDQUFDLENBQUMsU0FBUyxDQUFDLENBQUM2RCxLQUFLLDBFQUFDO01BQUE7UUFBQTtVQUFBO1lBQ2Y3RCw4Q0FBQyxDQUFDLGdCQUFnQixDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQ2pDNUQsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7WUFBQztZQUFBLE9BQ3pCN0Qsa0RBQUssQ0FBQztjQUNSK0QsTUFBTSxFQUFFLFFBQVE7Y0FDaEJDLEdBQUcsRUFBRSxvQkFBb0IsR0FBR3hELEdBQUcsQ0FBQ3dDLEVBQUUsR0FBRyxHQUFHLEdBQUd4QyxHQUFHLENBQUM0RCxRQUFRLENBQUNwQixFQUFFLEdBQUcsR0FBRyxHQUFHaUMsS0FBSyxHQUFHLE1BQU07Y0FDakZDLFdBQVcsRUFBRSxpQ0FBaUM7Y0FDOUNDLFFBQVEsRUFBRTtZQUNkLENBQUMsQ0FBQyxDQUFDbEIsSUFBSSxDQUFDLFVBQVVDLFFBQVEsRUFBRTtjQUN4QnJCLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDNkIsTUFBTSxFQUFFO1lBQzVCLENBQUMsQ0FBQyxTQUFNLENBQUMsVUFBVU4sS0FBSyxFQUFFO2NBQ3RCcEUsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7Y0FDOUI1RCw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUNuQyxDQUFDLENBQUM7VUFBQTtVQUFBO1lBQUE7UUFBQTtNQUFBO0lBQUEsQ0FDTCxHQUFDO0VBQ04sQ0FBQztFQUFBLFNBQ2N3QixNQUFNO0lBQUE7RUFBQTtFQUFBO0lBQUEscUVBQXJCLG1CQUFzQmQsSUFBSTtNQUFBO1FBQUE7VUFBQTtZQUN0QixJQUFJQSxJQUFJLENBQUNDLEtBQUssS0FBSyxFQUFFLEVBQUU7Y0FDbkJ2RSw4Q0FBQyxDQUFDLGdCQUFnQixDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO2NBQ2pDNUQsOENBQUMsQ0FBQyxTQUFTLENBQUMsQ0FBQzZELEtBQUssMEVBQUM7Z0JBQUE7a0JBQUE7b0JBQUE7c0JBQ2Y3RCw4Q0FBQyxDQUFDLGdCQUFnQixDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO3NCQUNqQzVELDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO3NCQUFDO3NCQUFBLE9BQ3pCN0Qsa0RBQUssQ0FBQzt3QkFDUitELE1BQU0sRUFBRSxRQUFRO3dCQUNoQkMsR0FBRyxFQUFFLGVBQWUsR0FBR3hELEdBQUcsQ0FBQ3dDO3NCQUMvQixDQUFDLENBQUMsQ0FBQ2lCLElBQUksQ0FBQyxVQUFVQyxRQUFRLEVBQUU7d0JBQ3hCckIsTUFBTSxDQUFDQyxRQUFRLENBQUM2QixNQUFNLEVBQUU7c0JBQzVCLENBQUMsQ0FBQyxTQUFNLENBQUMsVUFBVU4sS0FBSyxFQUFFO3dCQUN0QnBFLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO3NCQUNuQyxDQUFDLENBQUM7b0JBQUE7b0JBQUE7c0JBQUE7a0JBQUE7Z0JBQUE7Y0FBQSxDQUNMLEdBQUM7WUFDTixDQUFDLE1BQU07Y0FDSGhCLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDNkIsTUFBTSxFQUFFO1lBQzVCO1VBQUM7VUFBQTtZQUFBO1FBQUE7TUFBQTtJQUFBLENBQ0o7SUFBQTtFQUFBO0VBQUEsU0FDY1csV0FBVztJQUFBO0VBQUE7RUFBQTtJQUFBLDBFQUExQixtQkFBMkI1QyxDQUFDO01BQUE7UUFBQTtVQUFBO1lBQ3hCQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtZQUNsQjFDLDhDQUFDLENBQUMsZ0JBQWdCLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7WUFDakM1RCw4Q0FBQyxDQUFDLFNBQVMsQ0FBQyxDQUFDNkQsS0FBSywwRUFBQztjQUFBO2dCQUFBO2tCQUFBO29CQUNmN0QsOENBQUMsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztvQkFDakM1RCw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztvQkFBQztvQkFBQSxPQUN6QjdELGtEQUFLLENBQUM7c0JBQ1IrRCxNQUFNLEVBQUUsS0FBSztzQkFDYkMsR0FBRyxFQUFFLHFCQUFxQixHQUFHeEQsR0FBRyxDQUFDd0M7b0JBQ3JDLENBQUMsQ0FBQyxDQUFDaUIsSUFBSSxDQUFDLFVBQVVDLFFBQVEsRUFBRTtzQkFDeEIsSUFBSWEsS0FBSyxHQUFHYixRQUFRLENBQUNDLElBQUk7c0JBQ3pCMUQsTUFBTSxDQUFDc0UsS0FBSyxDQUFDO3NCQUNicEUsU0FBUyxDQUFDb0UsS0FBSyxDQUFDckUsTUFBTSxDQUFDO3NCQUN2QixJQUFJcUUsS0FBSyxDQUFDeEQsV0FBVyxLQUFLLElBQUksRUFBRTt3QkFDNUJDLFFBQVEsQ0FBQ3VELEtBQUssQ0FBQ3hELFdBQVcsQ0FBQ2IsTUFBTSxDQUFDO3NCQUN0QztzQkFDQVQsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxRQUFRLENBQUM7b0JBQ3BDLENBQUMsQ0FBQyxTQUFNLENBQUMsVUFBVVEsS0FBSyxFQUFFO3NCQUN0QnBFLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsUUFBUSxDQUFDO3NCQUNoQzVELDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO29CQUNuQyxDQUFDLENBQUM7a0JBQUE7a0JBQUE7b0JBQUE7Z0JBQUE7Y0FBQTtZQUFBLENBQ0wsR0FBQztVQUFDO1VBQUE7WUFBQTtRQUFBO01BQUE7SUFBQSxDQUNOO0lBQUE7RUFBQTtFQUFBLFNBQ2MwQixTQUFTO0lBQUE7RUFBQTtFQUFBO0lBQUEsd0VBQXhCLG1CQUF5QjdDLENBQUM7TUFBQTtRQUFBO1VBQUE7WUFDdEJBLENBQUMsQ0FBQ0MsY0FBYyxFQUFFO1lBQ2xCMUMsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7WUFBQztZQUFBLE9BQ3pCN0Qsa0RBQUssQ0FBQztjQUNSK0QsTUFBTSxFQUFFLEtBQUs7Y0FDYkMsR0FBRyxFQUFFLG1CQUFtQixHQUFHeEQsR0FBRyxDQUFDd0M7WUFDbkMsQ0FBQyxDQUFDLENBQUNpQixJQUFJLENBQUMsVUFBVUMsUUFBUSxFQUFFO2NBQ3hCckIsTUFBTSxDQUFDQyxRQUFRLENBQUM2QixNQUFNLEVBQUU7Y0FDeEI5QixNQUFNLENBQUNDLFFBQVEsQ0FBQzZCLE1BQU0sRUFBRTtZQUM1QixDQUFDLENBQUMsU0FBTSxDQUFDLFVBQVVOLEtBQUssRUFBRTtjQUN0QnBFLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsUUFBUSxDQUFDO2NBQ2hDNUQsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7WUFDbkMsQ0FBQyxDQUFDO1VBQUE7VUFBQTtZQUFBO1FBQUE7TUFBQTtJQUFBLENBRUw7SUFBQTtFQUFBO0VBQUEsU0FDYzJCLFdBQVc7SUFBQTtFQUFBO0VBQUE7SUFBQSwwRUFBMUIsbUJBQTJCOUMsQ0FBQztNQUFBO1FBQUE7VUFBQTtZQUN4QkEsQ0FBQyxDQUFDQyxjQUFjLEVBQUU7WUFDbEIxQyw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUFDO1lBQUEsT0FDekI3RCxrREFBSyxDQUFDO2NBQ1IrRCxNQUFNLEVBQUUsS0FBSztjQUNiQyxHQUFHLEVBQUUscUJBQXFCLEdBQUd4RCxHQUFHLENBQUN3QztZQUNyQyxDQUFDLENBQUMsQ0FBQ2lCLElBQUksQ0FBQyxVQUFVQyxRQUFRLEVBQUU7Y0FDeEJyQixNQUFNLENBQUNDLFFBQVEsQ0FBQzZCLE1BQU0sRUFBRTtZQUM1QixDQUFDLENBQUMsU0FBTSxDQUFDLFVBQVVOLEtBQUssRUFBRTtjQUN0QnBFLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsUUFBUSxDQUFDO2NBQ2hDNUQsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7WUFDbkMsQ0FBQyxDQUFDO1VBQUE7VUFBQTtZQUFBO1FBQUE7TUFBQTtJQUFBLENBQ0w7SUFBQTtFQUFBO0VBRUQ1RCw4Q0FBQyxDQUFDLGVBQWUsQ0FBQyxDQUFDd0YsR0FBRyxFQUFFLENBQUNDLEVBQUUsQ0FBQyxPQUFPO0lBQUEsdUVBQUUsa0JBQWdCQyxLQUFLO01BQUE7UUFBQTtVQUFBO1lBQ3REQSxLQUFLLENBQUNoRCxjQUFjLEVBQUU7WUFBQSxLQUNsQjFDLDhDQUFDLENBQUMsSUFBSSxDQUFDLENBQUMyRixPQUFPLENBQUMsTUFBTSxDQUFDLENBQUNDLEtBQUssRUFBRTtjQUFBO2NBQUE7WUFBQTtZQUMvQjVGLDhDQUFDLENBQUMsZUFBZSxDQUFDLENBQUM2RixJQUFJLEVBQUU7WUFDekI3Riw4Q0FBQyxDQUFDLG9CQUFvQixDQUFDLENBQUM2RixJQUFJLEVBQUU7WUFDOUI3Riw4Q0FBQyxDQUFDLG1CQUFtQixDQUFDLENBQUMyQyxHQUFHLENBQUMsU0FBUyxFQUFFLEVBQUUsQ0FBQztZQUV6QzNDLDhDQUFDLENBQUMsU0FBUyxDQUFDLENBQUNxQixHQUFHLENBQUN5RSxRQUFRLENBQUNDLFNBQVMsQ0FBQyxRQUFRLENBQUMsQ0FBQ0MsT0FBTyxFQUFFLENBQUM7WUFDeERoRyw4Q0FBQyxDQUFDLFVBQVUsQ0FBQyxDQUFDcUIsR0FBRyxDQUFDeUUsUUFBUSxDQUFDQyxTQUFTLENBQUMsU0FBUyxDQUFDLENBQUNDLE9BQU8sRUFBRSxDQUFDO1lBQUE7WUFBQSxPQUVwRGpHLGtEQUFLLENBQUM7Y0FDUitELE1BQU0sRUFBRSxLQUFLO2NBQ2JDLEdBQUcsRUFBRSx5QkFBeUIsR0FBR3hELEdBQUcsQ0FBQ3dDLEVBQUU7Y0FDdkNtQixJQUFJLEVBQUUvQyxJQUFJLENBQUM4RSxTQUFTLENBQUNqRyw4Q0FBQyxDQUFDLG1CQUFtQixDQUFDLENBQUNrRyxlQUFlLEVBQUUsQ0FBQztjQUM5RGpCLFdBQVcsRUFBRSxpQ0FBaUM7Y0FDOUNDLFFBQVEsRUFBRTtZQUNkLENBQUMsQ0FBQyxDQUFDbEIsSUFBSSxDQUFDLFVBQVVDLFFBQVEsRUFBRTtjQUN4QnBCLFFBQVEsQ0FBQzZCLE1BQU0sRUFBRTtZQUNyQixDQUFDLENBQUMsU0FBTSxDQUFDLFVBQVVOLEtBQUssRUFBRTtjQUN0QnBFLDhDQUFDLENBQUMsWUFBWSxDQUFDLENBQUM0RCxLQUFLLENBQUMsUUFBUSxDQUFDO2NBQy9CNUQsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7WUFDbkMsQ0FBQyxDQUFDO1VBQUE7VUFBQTtZQUFBO1FBQUE7TUFBQTtJQUFBLENBRVQ7SUFBQTtNQUFBO0lBQUE7RUFBQSxJQUFDO0VBQ0Y1RCw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDd0YsR0FBRyxFQUFFLENBQUNDLEVBQUUsQ0FBQyxPQUFPO0lBQUEsdUVBQUUsa0JBQWdCQyxLQUFLO01BQUE7UUFBQTtVQUFBO1lBQ3JEQSxLQUFLLENBQUNoRCxjQUFjLEVBQUU7WUFBQSxLQUNsQjFDLDhDQUFDLENBQUMsSUFBSSxDQUFDLENBQUMyRixPQUFPLENBQUMsTUFBTSxDQUFDLENBQUNDLEtBQUssRUFBRTtjQUFBO2NBQUE7WUFBQTtZQUMvQjVGLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM2RixJQUFJLEVBQUU7WUFDeEI3Riw4Q0FBQyxDQUFDLG1CQUFtQixDQUFDLENBQUM2RixJQUFJLEVBQUU7WUFDN0I3Riw4Q0FBQyxDQUFDLGtCQUFrQixDQUFDLENBQUMyQyxHQUFHLENBQUMsU0FBUyxFQUFFLEVBQUUsQ0FBQztZQUV4QzNDLDhDQUFDLENBQUMsU0FBUyxDQUFDLENBQUNxQixHQUFHLENBQUN5RSxRQUFRLENBQUNDLFNBQVMsQ0FBQyxRQUFRLENBQUMsQ0FBQ0MsT0FBTyxFQUFFLENBQUM7WUFDeERoRyw4Q0FBQyxDQUFDLFVBQVUsQ0FBQyxDQUFDcUIsR0FBRyxDQUFDeUUsUUFBUSxDQUFDQyxTQUFTLENBQUMsU0FBUyxDQUFDLENBQUNDLE9BQU8sRUFBRSxDQUFDO1lBQUE7WUFBQSxPQUVwRGpHLGtEQUFLLENBQUM7Y0FDUitELE1BQU0sRUFBRSxLQUFLO2NBQ2JDLEdBQUcsRUFBRSx3QkFBd0IsR0FBR3hELEdBQUcsQ0FBQ3dDLEVBQUU7Y0FDdENtQixJQUFJLEVBQUUvQyxJQUFJLENBQUM4RSxTQUFTLENBQUNqRyw4Q0FBQyxDQUFDLGtCQUFrQixDQUFDLENBQUNrRyxlQUFlLEVBQUUsQ0FBQztjQUM3RGpCLFdBQVcsRUFBRSxpQ0FBaUM7Y0FDOUNDLFFBQVEsRUFBRTtZQUNkLENBQUMsQ0FBQyxDQUFDbEIsSUFBSSxDQUFDLFVBQVVDLFFBQVEsRUFBRTtjQUN4QnBCLFFBQVEsQ0FBQzZCLE1BQU0sRUFBRTtZQUNyQixDQUFDLENBQUMsU0FBTSxDQUFDLFVBQVVOLEtBQUssRUFBRTtjQUN0QnBFLDhDQUFDLENBQUMsWUFBWSxDQUFDLENBQUM0RCxLQUFLLENBQUMsUUFBUSxDQUFDO2NBQy9CNUQsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7WUFDbkMsQ0FBQyxDQUFDO1VBQUE7VUFBQTtZQUFBO1FBQUE7TUFBQTtJQUFBLENBRVQ7SUFBQTtNQUFBO0lBQUE7RUFBQSxJQUFDO0VBQ0Y1RCw4Q0FBQyxDQUFDLGdCQUFnQixDQUFDLENBQUN3RixHQUFHLEVBQUUsQ0FBQ0MsRUFBRSxDQUFDLE9BQU87SUFBQSx1RUFBRSxrQkFBZ0JDLEtBQUs7TUFBQTtRQUFBO1VBQUE7WUFDdkRBLEtBQUssQ0FBQ2hELGNBQWMsRUFBRTtZQUFBLEtBQ2xCMUMsOENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQzJGLE9BQU8sQ0FBQyxNQUFNLENBQUMsQ0FBQ0MsS0FBSyxFQUFFO2NBQUE7Y0FBQTtZQUFBO1lBQy9CNUYsOENBQUMsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDNkYsSUFBSSxFQUFFO1lBQzFCN0YsOENBQUMsQ0FBQyxrQkFBa0IsQ0FBQyxDQUFDNkYsSUFBSSxFQUFFO1lBQzVCN0YsOENBQUMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDMkMsR0FBRyxDQUFDLFNBQVMsRUFBRSxFQUFFLENBQUM7WUFBQTtZQUFBLE9BRWpDNUMsa0RBQUssQ0FBQztjQUNSK0QsTUFBTSxFQUFFLE1BQU07Y0FDZEMsR0FBRyxFQUFFLHlCQUF5QixHQUFHeEQsR0FBRyxDQUFDd0MsRUFBRTtjQUN2Q21CLElBQUksRUFBRS9DLElBQUksQ0FBQzhFLFNBQVMsQ0FBQ2pHLDhDQUFDLENBQUMsb0JBQW9CLENBQUMsQ0FBQ2tHLGVBQWUsRUFBRSxDQUFDO2NBQy9EakIsV0FBVyxFQUFFLGlDQUFpQztjQUM5Q0MsUUFBUSxFQUFFO1lBQ2QsQ0FBQyxDQUFDLENBQUNsQixJQUFJLENBQUMsVUFBVUMsUUFBUSxFQUFFO2NBQ3hCcEIsUUFBUSxDQUFDNkIsTUFBTSxFQUFFO1lBQ3JCLENBQUMsQ0FBQyxTQUFNLENBQUMsVUFBVU4sS0FBSyxFQUFFO2NBQ3RCcEUsOENBQUMsQ0FBQyxlQUFlLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxRQUFRLENBQUM7Y0FDbEM1RCw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUNuQyxDQUFDLENBQUM7VUFBQTtVQUFBO1lBQUE7UUFBQTtNQUFBO0lBQUEsQ0FJVDtJQUFBO01BQUE7SUFBQTtFQUFBLElBQUM7RUFDRjVELDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUN3RixHQUFHLEVBQUUsQ0FBQ0MsRUFBRSxDQUFDLE9BQU87SUFBQSx1RUFBRSxrQkFBZ0JDLEtBQUs7TUFBQTtRQUFBO1VBQUE7WUFDckRBLEtBQUssQ0FBQ2hELGNBQWMsRUFBRTtZQUFBLEtBQ2xCMUMsOENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQzJGLE9BQU8sQ0FBQyxNQUFNLENBQUMsQ0FBQ0MsS0FBSyxFQUFFO2NBQUE7Y0FBQTtZQUFBO1lBQy9CNUYsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzZGLElBQUksRUFBRTtZQUN4QjdGLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM2RixJQUFJLEVBQUU7WUFDdkI3Riw4Q0FBQyxDQUFDLFlBQVksQ0FBQyxDQUFDMkMsR0FBRyxDQUFDLFNBQVMsRUFBRSxFQUFFLENBQUM7WUFBQTtZQUFBLE9BRTVCNUMsa0RBQUssQ0FBQztjQUNSK0QsTUFBTSxFQUFFLE1BQU07Y0FDZEMsR0FBRyxFQUFFLHFCQUFxQixHQUFHeEQsR0FBRyxDQUFDd0MsRUFBRTtjQUNuQ21CLElBQUksRUFBRS9DLElBQUksQ0FBQzhFLFNBQVMsQ0FBQ2pHLDhDQUFDLENBQUMsa0JBQWtCLENBQUMsQ0FBQ2tHLGVBQWUsRUFBRSxDQUFDO2NBQzdEakIsV0FBVyxFQUFFLGlDQUFpQztjQUM5Q0MsUUFBUSxFQUFFO1lBQ2QsQ0FBQyxDQUFDLENBQUNsQixJQUFJLENBQUMsVUFBVUMsUUFBUSxFQUFFO2NBQ3hCLElBQUlhLEtBQUssR0FBR2IsUUFBUSxDQUFDQyxJQUFJO2NBQ3pCMUQsTUFBTSxDQUFDc0UsS0FBSyxDQUFDO2NBQ2JwRSxTQUFTLENBQUNvRSxLQUFLLENBQUNyRSxNQUFNLENBQUM7Y0FDdkIsSUFBSXFFLEtBQUssQ0FBQ3hELFdBQVcsS0FBSyxJQUFJLEVBQUU7Z0JBQzVCQyxRQUFRLENBQUN1RCxLQUFLLENBQUN4RCxXQUFXLENBQUNiLE1BQU0sQ0FBQztjQUN0QztjQUNBVCw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDbUcsSUFBSSxFQUFFO2NBQ3hCbkcsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQ21HLElBQUksRUFBRTtjQUN2Qm5HLDhDQUFDLENBQUMsWUFBWSxDQUFDLENBQUM2RixJQUFJLEVBQUU7Y0FDdEI3Riw4Q0FBQyxDQUFDLGtCQUFrQixDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUNvRyxLQUFLLEVBQUU7WUFDcEMsQ0FBQyxDQUFDLFNBQU0sQ0FBQyxVQUFVaEMsS0FBSyxFQUFFO2NBQ3RCcEUsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxRQUFRLENBQUM7Y0FDaEM1RCw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUNuQyxDQUFDLENBQUM7VUFBQTtVQUFBO1lBQUE7UUFBQTtNQUFBO0lBQUEsQ0FFVDtJQUFBO01BQUE7SUFBQTtFQUFBLElBQUM7RUFDRjVELDhDQUFDLENBQUMsZUFBZSxDQUFDLENBQUN3RixHQUFHLEVBQUUsQ0FBQ0MsRUFBRSxDQUFDLE9BQU8sRUFBRSxVQUFVQyxLQUFLLEVBQUU7SUFDbERBLEtBQUssQ0FBQ2hELGNBQWMsRUFBRTtJQUN0QixJQUFJMUMsOENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQzJGLE9BQU8sQ0FBQyxNQUFNLENBQUMsQ0FBQ0MsS0FBSyxFQUFFLEVBQUU7TUFDakM1Riw4Q0FBQyxDQUFDLGVBQWUsQ0FBQyxDQUFDNkYsSUFBSSxFQUFFO01BQ3pCN0YsOENBQUMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDNkYsSUFBSSxFQUFFO01BQzNCN0YsOENBQUMsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDMkMsR0FBRyxDQUFDLFNBQVMsRUFBRSxFQUFFLENBQUM7TUFFdEMzQyw4Q0FBQyxDQUFDLFVBQVUsQ0FBQyxDQUFDcUIsR0FBRyxDQUFDeUUsUUFBUSxDQUFDQyxTQUFTLENBQUMsU0FBUyxDQUFDLENBQUNDLE9BQU8sRUFBRSxDQUFDO01BQzFEaEcsOENBQUMsQ0FBQyxVQUFVLENBQUMsQ0FBQ3FCLEdBQUcsQ0FBQ3lFLFFBQVEsQ0FBQ0MsU0FBUyxDQUFDLFNBQVMsQ0FBQyxDQUFDQyxPQUFPLEVBQUUsQ0FBQztNQUUxRGhHLG1EQUFNLENBQUM7UUFDSHNHLElBQUksRUFBRSxNQUFNO1FBQ1p2QyxHQUFHLEVBQUUscUJBQXFCO1FBQzFCRyxJQUFJLEVBQUUvQyxJQUFJLENBQUM4RSxTQUFTLENBQUNqRyw4Q0FBQyxDQUFDLG1CQUFtQixDQUFDLENBQUNrRyxlQUFlLEVBQUUsQ0FBQztRQUM5RGpCLFdBQVcsRUFBRSxpQ0FBaUM7UUFDOUNDLFFBQVEsRUFBRSxNQUFNO1FBQ2hCcUIsT0FBTyxFQUFFLGlCQUFVQyxRQUFRLEVBQUVDLFVBQVUsRUFBRUMsS0FBSyxFQUFFO1VBQzVDOUQsTUFBTSxDQUFDQyxRQUFRLENBQUNDLElBQUksR0FDaEIsV0FBVyxHQUNYMEQsUUFBUSxDQUFDLFFBQVEsQ0FBQyxDQUFDLENBQUMsQ0FBQyxDQUFDLFFBQVEsQ0FBQyxHQUMvQixHQUFHLEdBQ0hBLFFBQVEsQ0FBQyxRQUFRLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQyxZQUFZLENBQUM7UUFDM0MsQ0FBQztRQUNEcEMsS0FBSyxFQUFFLGVBQVV1QyxHQUFHLEVBQUVyQyxJQUFJLEVBQUVzQyxJQUFJLEVBQUU7VUFDOUI1Ryw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztRQUNuQztNQUNKLENBQUMsQ0FBQztJQUNOO0VBQ0osQ0FBQyxDQUFDO0VBQ0Y1RCw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDd0YsR0FBRyxFQUFFLENBQUNDLEVBQUUsQ0FBQyxPQUFPLEVBQUUsVUFBVUMsS0FBSyxFQUFFO0lBQ2pEQSxLQUFLLENBQUNoRCxjQUFjLEVBQUU7SUFDdEIsSUFBSTFDLDhDQUFDLENBQUMsSUFBSSxDQUFDLENBQUMyRixPQUFPLENBQUMsTUFBTSxDQUFDLENBQUNDLEtBQUssRUFBRSxFQUFFO01BQ2pDNUYsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzZGLElBQUksRUFBRTtNQUN4QjdGLDhDQUFDLENBQUMsZ0JBQWdCLENBQUMsQ0FBQzZGLElBQUksRUFBRTtNQUMxQjdGLDhDQUFDLENBQUMsZUFBZSxDQUFDLENBQUMyQyxHQUFHLENBQUMsU0FBUyxFQUFFLEVBQUUsQ0FBQztNQUNyQzNDLDhDQUFDLENBQUMsVUFBVSxDQUFDLENBQUNxQixHQUFHLENBQUN5RSxRQUFRLENBQUNDLFNBQVMsQ0FBQyxTQUFTLENBQUMsQ0FBQ0MsT0FBTyxFQUFFLENBQUM7TUFDMURoRyw4Q0FBQyxDQUFDLFVBQVUsQ0FBQyxDQUFDcUIsR0FBRyxDQUFDeUUsUUFBUSxDQUFDQyxTQUFTLENBQUMsU0FBUyxDQUFDLENBQUNDLE9BQU8sRUFBRSxDQUFDO01BQzFEaEcsbURBQU0sQ0FBQztRQUNIc0csSUFBSSxFQUFFLE1BQU07UUFDWnZDLEdBQUcsRUFBRSxvQkFBb0I7UUFDekJHLElBQUksRUFBRS9DLElBQUksQ0FBQzhFLFNBQVMsQ0FBQ2pHLDhDQUFDLENBQUMsa0JBQWtCLENBQUMsQ0FBQ2tHLGVBQWUsRUFBRSxDQUFDO1FBQzdEakIsV0FBVyxFQUFFLGlDQUFpQztRQUM5Q0MsUUFBUSxFQUFFLE1BQU07UUFDaEJxQixPQUFPLEVBQUUsaUJBQVVDLFFBQVEsRUFBRUMsVUFBVSxFQUFFQyxLQUFLLEVBQUU7VUFDNUM5RCxNQUFNLENBQUNDLFFBQVEsQ0FBQ0MsSUFBSSxHQUNoQixXQUFXLEdBQ1gwRCxRQUFRLENBQUMsUUFBUSxDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUMsUUFBUSxDQUFDLEdBQy9CLEdBQUcsR0FDSEEsUUFBUSxDQUFDLFFBQVEsQ0FBQyxDQUFDLENBQUMsQ0FBQyxDQUFDLFlBQVksQ0FBQztRQUMzQyxDQUFDO1FBQ0RwQyxLQUFLLEVBQUUsZUFBVXVDLEdBQUcsRUFBRXJDLElBQUksRUFBRXNDLElBQUksRUFBRTtVQUM5QjVHLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1FBQ25DO01BQ0osQ0FBQyxDQUFDO0lBQ047RUFDSixDQUFDLENBQUM7RUFDRjVELDhDQUFDLENBQUMsaUJBQWlCLENBQUMsQ0FBQ3dGLEdBQUcsRUFBRSxDQUFDQyxFQUFFLENBQUMsT0FBTztJQUFBLHVFQUFFLGtCQUFnQkMsS0FBSztNQUFBO01BQUE7UUFBQTtVQUFBO1lBQ3hEQSxLQUFLLENBQUNoRCxjQUFjLEVBQUU7WUFDaEJtRSxNQUFNLEdBQUc3Ryw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDcUIsR0FBRyxFQUFFO1lBQ3RDckIsOENBQUMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDNkYsSUFBSSxFQUFFO1lBQzNCN0YsOENBQUMsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDNkYsSUFBSSxFQUFFO1lBQzFCN0YsOENBQUMsQ0FBQyxlQUFlLENBQUMsQ0FBQzJDLEdBQUcsQ0FBQyxTQUFTLEVBQUUsRUFBRSxDQUFDO1lBQUE7WUFBQSxPQUMvQjVDLGtEQUFLLENBQUM7Y0FDUitELE1BQU0sRUFBRSxLQUFLO2NBQ2JDLEdBQUcsRUFBRSxvQkFBb0IsR0FBR3hELEdBQUcsQ0FBQ3dDLEVBQUUsR0FBRyxHQUFHLEdBQUc4RDtZQUMvQyxDQUFDLENBQUMsQ0FBQzdDLElBQUksQ0FBQyxVQUFVQyxRQUFRLEVBQUU7Y0FDeEJyQixNQUFNLENBQUNDLFFBQVEsQ0FBQ0MsSUFBSSxHQUFHLFdBQVcsR0FBR21CLFFBQVEsQ0FBQ0MsSUFBSSxDQUFDLFFBQVEsQ0FBQyxHQUFHLEdBQUcsR0FBRzNELEdBQUcsQ0FBQzRELFFBQVEsQ0FBQ3BCLEVBQUU7WUFDeEYsQ0FBQyxDQUFDLFNBQU0sQ0FBQyxVQUFVcUIsS0FBSyxFQUFFO2NBQ3RCcEUsOENBQUMsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLFFBQVEsQ0FBQztjQUNuQzVELDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQ25DLENBQUMsQ0FBQztVQUFBO1VBQUE7WUFBQTtRQUFBO01BQUE7SUFBQSxDQUNMO0lBQUE7TUFBQTtJQUFBO0VBQUEsSUFBQztFQUNGNUQsOENBQUMsQ0FBQyxZQUFZLENBQUMsQ0FBQ3dGLEdBQUcsRUFBRSxDQUFDQyxFQUFFLENBQUMsT0FBTztJQUFBLHVFQUFFLGtCQUFnQkMsS0FBSztNQUFBO01BQUE7UUFBQTtVQUFBO1lBQ25EQSxLQUFLLENBQUNoRCxjQUFjLEVBQUU7WUFDaEJvRSxPQUFPLEdBQUc5Ryw4Q0FBQyxDQUFDLFdBQVcsQ0FBQyxDQUFDcUIsR0FBRyxFQUFFO1lBQ3BDckIsOENBQUMsQ0FBQyxZQUFZLENBQUMsQ0FBQzZGLElBQUksRUFBRTtZQUN0QjdGLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM2RixJQUFJLEVBQUU7WUFDeEI3Riw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDMkMsR0FBRyxDQUFDLFNBQVMsRUFBRSxFQUFFLENBQUM7WUFDbkMzQyxtREFBTSxDQUFDO2NBQ0hzRyxJQUFJLEVBQUUsS0FBSztjQUNYdkMsR0FBRyxFQUFFLGtCQUFrQixHQUFHeEQsR0FBRyxDQUFDd0MsRUFBRSxHQUFHLEdBQUcsR0FBRytELE9BQU87Y0FDaEQ1QyxJQUFJLEVBQUUvQyxJQUFJLENBQUM4RSxTQUFTLENBQUNqRyw4Q0FBQyxDQUFDLG1CQUFtQixDQUFDLENBQUNrRyxlQUFlLEVBQUUsQ0FBQztjQUM5RGpCLFdBQVcsRUFBRSxpQ0FBaUM7Y0FDOUNDLFFBQVEsRUFBRSxNQUFNO2NBQ2hCcUIsT0FBTyxFQUFFLGlCQUFVQyxRQUFRLEVBQUVDLFVBQVUsRUFBRUMsS0FBSyxFQUFFO2dCQUM1QzlELE1BQU0sQ0FBQ0MsUUFBUSxDQUFDQyxJQUFJLEdBQ2hCLGNBQWMsR0FDZDBELFFBQVEsQ0FBQyxRQUFRLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQyxXQUFXLENBQUMsR0FDbEMsR0FBRyxHQUNIQSxRQUFRLENBQUMsUUFBUSxDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUMsWUFBWSxDQUFDO2NBQzNDLENBQUM7Y0FDRHBDLEtBQUssRUFBRSxlQUFVdUMsR0FBRyxFQUFFckMsSUFBSSxFQUFFc0MsSUFBSSxFQUFFO2dCQUM5QjVHLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsUUFBUSxDQUFDO2dCQUNqQzVELDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO2NBQ25DO1lBQ0osQ0FBQyxDQUFDO1VBQUE7VUFBQTtZQUFBO1FBQUE7TUFBQTtJQUFBLENBQ0w7SUFBQTtNQUFBO0lBQUE7RUFBQSxJQUFDO0VBQ0Y1RCw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDd0YsR0FBRyxFQUFFLENBQUNDLEVBQUUsQ0FBQyxPQUFPO0lBQUEsd0VBQUUsbUJBQWdCQyxLQUFLO01BQUE7UUFBQTtVQUFBO1lBQ3JEQSxLQUFLLENBQUNoRCxjQUFjLEVBQUU7WUFBQSxLQUNsQjFDLDhDQUFDLENBQUMsSUFBSSxDQUFDLENBQUMyRixPQUFPLENBQUMsTUFBTSxDQUFDLENBQUNDLEtBQUssRUFBRTtjQUFBO2NBQUE7WUFBQTtZQUMvQjVGLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM2RixJQUFJLEVBQUU7WUFDeEI3Riw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNkYsSUFBSSxFQUFFO1lBQ3ZCN0YsOENBQUMsQ0FBQyxZQUFZLENBQUMsQ0FBQzJDLEdBQUcsQ0FBQyxTQUFTLEVBQUUsRUFBRSxDQUFDO1lBQUE7WUFBQSxPQUU1QjVDLGtEQUFLLENBQUM7Y0FDUitELE1BQU0sRUFBRSxNQUFNO2NBQ2RDLEdBQUcsRUFBRSxrQkFBa0IsR0FBR3hELEdBQUcsQ0FBQ3dDLEVBQUUsR0FBRyxNQUFNO2NBQ3pDbUIsSUFBSSxFQUFFL0MsSUFBSSxDQUFDOEUsU0FBUyxDQUFDakcsOENBQUMsQ0FBQyxtQkFBbUIsQ0FBQyxDQUFDa0csZUFBZSxFQUFFLENBQUM7Y0FDOURqQixXQUFXLEVBQUUsaUNBQWlDO2NBQzlDQyxRQUFRLEVBQUU7WUFDZCxDQUFDLENBQUMsQ0FBQ2xCLElBQUksQ0FBQyxVQUFVQyxRQUFRLEVBQUU7Y0FDeEJyQixNQUFNLENBQUNDLFFBQVEsQ0FBQzZCLE1BQU0sRUFBRTtZQUM1QixDQUFDLENBQUMsU0FBTSxDQUFDLFVBQVVqQyxDQUFDLEVBQUU7Y0FDbEJ6Qyw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLFFBQVEsQ0FBQztjQUNoQzVELDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQ25DLENBQUMsQ0FBQztVQUFBO1VBQUE7WUFBQTtRQUFBO01BQUE7SUFBQSxDQUdUO0lBQUE7TUFBQTtJQUFBO0VBQUEsSUFBQztFQUNGNUQsOENBQUMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDd0YsR0FBRyxFQUFFLENBQUNDLEVBQUUsQ0FBQyxPQUFPO0lBQUEsd0VBQUUsbUJBQWdCQyxLQUFLO01BQUE7TUFBQTtRQUFBO1VBQUE7WUFDeERBLEtBQUssQ0FBQ2hELGNBQWMsRUFBRTtZQUFBLEtBQ2xCMUMsOENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQzJGLE9BQU8sQ0FBQyxNQUFNLENBQUMsQ0FBQ0MsS0FBSyxFQUFFO2NBQUE7Y0FBQTtZQUFBO1lBQy9CNUYsOENBQUMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDNkYsSUFBSSxFQUFFO1lBQzNCN0YsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzZGLElBQUksRUFBRTtZQUN2QjdGLDhDQUFDLENBQUMsWUFBWSxDQUFDLENBQUMyQyxHQUFHLENBQUMsU0FBUyxFQUFFLEVBQUUsQ0FBQztZQUU1Qm9FLE9BQU8sR0FBRy9HLDhDQUFDLENBQUMsVUFBVSxDQUFDLENBQUNxQixHQUFHLEVBQUU7WUFBQTtZQUFBLE9BRTdCdEIsa0RBQUssQ0FBQztjQUNSK0QsTUFBTSxFQUFFLE1BQU07Y0FDZEMsR0FBRyxFQUFFLHdCQUF3QixHQUFHZ0QsT0FBTyxHQUFHLEdBQUcsR0FBR3hHLEdBQUcsQ0FBQ3dDLEVBQUU7Y0FDdERtQixJQUFJLEVBQUUvQyxJQUFJLENBQUM4RSxTQUFTLENBQUNqRyw4Q0FBQyxDQUFDLGtCQUFrQixDQUFDLENBQUNrRyxlQUFlLEVBQUUsQ0FBQztjQUM3RGpCLFdBQVcsRUFBRSxpQ0FBaUM7Y0FDOUNDLFFBQVEsRUFBRTtZQUNkLENBQUMsQ0FBQyxDQUFDbEIsSUFBSSxDQUFDLFVBQVVDLFFBQVEsRUFBRTtjQUN4QixJQUFJYSxLQUFLLEdBQUdiLFFBQVEsQ0FBQ0MsSUFBSTtjQUN6QjFELE1BQU0sQ0FBQ3NFLEtBQUssQ0FBQztjQUNicEUsU0FBUyxDQUFDb0UsS0FBSyxDQUFDckUsTUFBTSxDQUFDO2NBQ3ZCVCw4Q0FBQyxDQUFDLGlCQUFpQixDQUFDLENBQUNtRyxJQUFJLEVBQUU7Y0FDM0JuRyw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDbUcsSUFBSSxFQUFFO2NBQ3ZCbkcsOENBQUMsQ0FBQyxZQUFZLENBQUMsQ0FBQzZGLElBQUksRUFBRTtjQUN0QjdGLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsUUFBUSxDQUFDO2NBQ2hDaEIsTUFBTSxDQUFDQyxRQUFRLENBQUNDLElBQUksR0FBRyxXQUFXLEdBQUd2QyxHQUFHLENBQUN3QyxFQUFFLEdBQUcsR0FBRyxHQUFHeEMsR0FBRyxDQUFDNEQsUUFBUSxDQUFDcEIsRUFBRTtZQUN2RSxDQUFDLENBQUMsU0FBTSxDQUFDLFVBQVVxQixLQUFLLEVBQUU7Y0FDdEJwRSw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLFFBQVEsQ0FBQztjQUNoQzVELDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQ25DLENBQUMsQ0FBQztVQUFBO1VBQUE7WUFBQTtRQUFBO01BQUE7SUFBQSxDQUVUO0lBQUE7TUFBQTtJQUFBO0VBQUEsSUFBQztFQUNGNUQsOENBQUMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDd0YsR0FBRyxFQUFFLENBQUNDLEVBQUUsQ0FBQyxPQUFPO0lBQUEsd0VBQUUsbUJBQWdCQyxLQUFLO01BQUE7TUFBQTtRQUFBO1VBQUE7WUFDeERBLEtBQUssQ0FBQ2hELGNBQWMsRUFBRTtZQUFBLEtBQ2xCMUMsOENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQzJGLE9BQU8sQ0FBQyxNQUFNLENBQUMsQ0FBQ0MsS0FBSyxFQUFFO2NBQUE7Y0FBQTtZQUFBO1lBQy9CNUYsOENBQUMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDNkYsSUFBSSxFQUFFO1lBQzNCN0YsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzZGLElBQUksRUFBRTtZQUN2QjdGLDhDQUFDLENBQUMsWUFBWSxDQUFDLENBQUMyQyxHQUFHLENBQUMsU0FBUyxFQUFFLEVBQUUsQ0FBQztZQUU1QnFFLFFBQVEsR0FBR2hILDhDQUFDLENBQUMsV0FBVyxDQUFDLENBQUNxQixHQUFHLEVBQUU7WUFBQTtZQUFBLE9BRS9CdEIsa0RBQUssQ0FBQztjQUNSK0QsTUFBTSxFQUFFLEtBQUs7Y0FDYkMsR0FBRyxFQUFFLHFCQUFxQixHQUFHaUQsUUFBUSxHQUFHLEdBQUcsR0FBR3pHLEdBQUcsQ0FBQ3dDLEVBQUUsR0FBRyxNQUFNO2NBQzdEbUIsSUFBSSxFQUFFL0MsSUFBSSxDQUFDOEUsU0FBUyxDQUFDakcsOENBQUMsQ0FBQyxtQkFBbUIsQ0FBQyxDQUFDa0csZUFBZSxFQUFFLENBQUM7Y0FDOURqQixXQUFXLEVBQUUsaUNBQWlDO2NBQzlDQyxRQUFRLEVBQUU7WUFDZCxDQUFDLENBQUMsQ0FBQ2xCLElBQUksQ0FBQyxVQUFVQyxRQUFRLEVBQUU7Y0FDeEIsSUFBSWEsS0FBSyxHQUFHYixRQUFRLENBQUNDLElBQUk7Y0FDekIxRCxNQUFNLENBQUNzRSxLQUFLLENBQUM7Y0FDYixJQUFJQSxLQUFLLENBQUN4RCxXQUFXLEtBQUssSUFBSSxFQUFFO2dCQUM1QkMsUUFBUSxDQUFDdUQsS0FBSyxDQUFDeEQsV0FBVyxDQUFDYixNQUFNLENBQUM7Y0FDdEM7Y0FDQUcsVUFBVSxDQUFDa0UsS0FBSyxDQUFDbUMsTUFBTSxDQUFDO2NBQ3hCakgsOENBQUMsQ0FBQyxrQkFBa0IsQ0FBQyxDQUFDbUcsSUFBSSxFQUFFO2NBQzVCbkcsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQ21HLElBQUksRUFBRTtjQUN2Qm5HLDhDQUFDLENBQUMsWUFBWSxDQUFDLENBQUM2RixJQUFJLEVBQUU7Y0FDdEI3Riw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLFFBQVEsQ0FBQztjQUNoQ2hCLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDQyxJQUFJLEdBQUcsV0FBVyxHQUFHdkMsR0FBRyxDQUFDd0MsRUFBRSxHQUFHLEdBQUcsR0FBR3hDLEdBQUcsQ0FBQzRELFFBQVEsQ0FBQ3BCLEVBQUU7WUFDdkUsQ0FBQyxDQUFDLFNBQU0sQ0FBQyxVQUFVTixDQUFDLEVBQUU7Y0FDbEJ6Qyw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLFFBQVEsQ0FBQztjQUNoQzVELDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQ25DLENBQUMsQ0FBQztVQUFBO1VBQUE7WUFBQTtRQUFBO01BQUE7SUFBQSxDQUVUO0lBQUE7TUFBQTtJQUFBO0VBQUEsSUFBQztFQUNGNUQsOENBQUMsQ0FBQyxTQUFTLENBQUMsQ0FBQ3dGLEdBQUcsRUFBRSxDQUFDQyxFQUFFLENBQUMsT0FBTztJQUFBLHdFQUFFLG1CQUFnQkMsS0FBSztNQUFBO1FBQUE7VUFBQTtZQUNoREEsS0FBSyxDQUFDaEQsY0FBYyxFQUFFO1lBQUEsS0FDbEIxQyw4Q0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDMkYsT0FBTyxDQUFDLE1BQU0sQ0FBQyxDQUFDQyxLQUFLLEVBQUU7Y0FBQTtjQUFBO1lBQUE7WUFDL0I1Riw4Q0FBQyxDQUFDLFNBQVMsQ0FBQyxDQUFDNkYsSUFBSSxFQUFFO1lBQ25CN0YsOENBQUMsQ0FBQyxXQUFXLENBQUMsQ0FBQzZGLElBQUksRUFBRTtZQUNyQjdGLDhDQUFDLENBQUMsVUFBVSxDQUFDLENBQUMyQyxHQUFHLENBQUMsU0FBUyxFQUFFLEVBQUUsQ0FBQztZQUFDO1lBQUEsT0FDM0I1QyxrREFBSyxDQUFDO2NBQ1IrRCxNQUFNLEVBQUUsTUFBTTtjQUNkQyxHQUFHLEVBQUUsa0JBQWtCLEdBQUd4RCxHQUFHLENBQUN3QyxFQUFFO2NBQ2hDbUIsSUFBSSxFQUFFL0MsSUFBSSxDQUFDOEUsU0FBUyxDQUFDakcsOENBQUMsQ0FBQyxtQkFBbUIsQ0FBQyxDQUFDa0csZUFBZSxFQUFFLENBQUM7Y0FDOURqQixXQUFXLEVBQUUsaUNBQWlDO2NBQzlDQyxRQUFRLEVBQUU7WUFDZCxDQUFDLENBQUMsQ0FBQ2xCLElBQUksQ0FBQyxVQUFVQyxRQUFRLEVBQUU7Y0FDeEIsSUFBSWEsS0FBSyxHQUFHYixRQUFRLENBQUNDLElBQUk7Y0FDekIxRCxNQUFNLENBQUNzRSxLQUFLLENBQUM7Y0FDYnBFLFNBQVMsQ0FBQ29FLEtBQUssQ0FBQ3JFLE1BQU0sQ0FBQztjQUN2QixJQUFJcUUsS0FBSyxDQUFDeEQsV0FBVyxLQUFLLElBQUksRUFBRTtnQkFDNUJDLFFBQVEsQ0FBQ3VELEtBQUssQ0FBQ3hELFdBQVcsQ0FBQ2IsTUFBTSxDQUFDO2NBQ3RDO2NBQ0FULDhDQUFDLENBQUMsU0FBUyxDQUFDLENBQUNtRyxJQUFJLEVBQUU7Y0FDbkJuRyw4Q0FBQyxDQUFDLFdBQVcsQ0FBQyxDQUFDbUcsSUFBSSxFQUFFO2NBQ3JCbkcsOENBQUMsQ0FBQyxVQUFVLENBQUMsQ0FBQzZGLElBQUksRUFBRTtjQUNwQjdGLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsUUFBUSxDQUFDO1lBQ3JDLENBQUMsQ0FBQyxTQUFNLENBQUMsVUFBVVEsS0FBSyxFQUFFO2NBQ3RCcEUsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxRQUFRLENBQUM7Y0FDakM1RCw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUNuQyxDQUFDLENBQUM7VUFBQTtVQUFBO1lBQUE7UUFBQTtNQUFBO0lBQUEsQ0FFVDtJQUFBO01BQUE7SUFBQTtFQUFBLElBQUM7RUFDRjVELDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUN3RixHQUFHLEVBQUUsQ0FBQ0MsRUFBRSxDQUFDLE9BQU87SUFBQSx3RUFBRSxtQkFBZ0JDLEtBQUs7TUFBQTtRQUFBO1VBQUE7WUFDckRBLEtBQUssQ0FBQ2hELGNBQWMsRUFBRTtZQUFBLEtBQ2xCMUMsOENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQzJGLE9BQU8sQ0FBQyxNQUFNLENBQUMsQ0FBQ0MsS0FBSyxFQUFFO2NBQUE7Y0FBQTtZQUFBO1lBQy9CNUYsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzZGLElBQUksRUFBRTtZQUN4QjdGLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUMyQyxHQUFHLENBQUMsU0FBUyxFQUFFLEVBQUUsQ0FBQztZQUNwQzNDLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQzlCNUQsOENBQUMsQ0FBQyxZQUFZLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxRQUFRLENBQUM7WUFDL0I1RCw4Q0FBQyxDQUFDLFVBQVUsQ0FBQyxDQUFDcUIsR0FBRyxDQUFDeUUsUUFBUSxDQUFDQyxTQUFTLENBQUMsU0FBUyxDQUFDLENBQUNDLE9BQU8sRUFBRSxDQUFDO1lBQUM7WUFBQSxPQUVyRGpHLGtEQUFLLENBQUM7Y0FDUitELE1BQU0sRUFBRSxNQUFNO2NBQ2RDLEdBQUcsRUFBRSxnQkFBZ0I7Y0FDckJHLElBQUksRUFBRSxJQUFJZ0QsUUFBUSxDQUFDbEgsOENBQUMsQ0FBQyxXQUFXLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQztjQUNyQ2lGLFdBQVcsRUFBRSxLQUFLO2NBQ2xCa0MsV0FBVyxFQUFFLEtBQUs7Y0FDbEJDLEtBQUssRUFBRSxLQUFLO2NBQ1psQyxRQUFRLEVBQUU7WUFDZCxDQUFDLENBQUMsQ0FBQ2xCLElBQUksQ0FBQyxVQUFVQyxRQUFRLEVBQUU7Y0FDeEJwQixRQUFRLENBQUM2QixNQUFNLEVBQUU7WUFDckIsQ0FBQyxDQUFDLFNBQU0sQ0FBQyxVQUFVTixLQUFLLEVBQUU7Y0FDdEJwRSw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUNuQyxDQUFDLENBQUM7VUFBQTtVQUFBO1lBQUE7UUFBQTtNQUFBO0lBQUEsQ0FHVDtJQUFBO01BQUE7SUFBQTtFQUFBLElBQUM7RUFFRixJQUFNeUQsTUFBTSxHQUFHLFNBQVRBLE1BQU0sQ0FBSXRFLEVBQUUsRUFBSztJQUNuQi9DLDhDQUFDLENBQUMsR0FBRyxHQUFHK0MsRUFBRSxHQUFHLElBQUksQ0FBQyxDQUFDUixXQUFXLENBQUMsTUFBTSxDQUFDO0VBQzFDLENBQUM7RUFDRCxJQUFNK0UsT0FBTyxHQUFHLFNBQVZBLE9BQU8sQ0FBSXZFLEVBQUUsRUFBSztJQUNwQi9DLDhDQUFDLENBQUMsR0FBRyxHQUFHK0MsRUFBRSxHQUFHLElBQUksQ0FBQyxDQUFDVixRQUFRLENBQUMsTUFBTSxDQUFDO0VBQ3ZDLENBQUM7RUFDRCxJQUFNa0YsT0FBTyxHQUFHLFNBQVZBLE9BQU8sQ0FBSXhFLEVBQUUsRUFBSztJQUNwQi9DLDhDQUFDLENBQUMsR0FBRyxHQUFHK0MsRUFBRSxHQUFHLElBQUksQ0FBQyxDQUFDUixXQUFXLENBQUMsTUFBTSxDQUFDO0VBQzFDLENBQUM7RUFDRCxJQUFNaUYsUUFBUSxHQUFHLFNBQVhBLFFBQVEsQ0FBSXpFLEVBQUUsRUFBSztJQUNyQi9DLDhDQUFDLENBQUMsR0FBRyxHQUFHK0MsRUFBRSxHQUFHLElBQUksQ0FBQyxDQUFDVixRQUFRLENBQUMsTUFBTSxDQUFDO0VBQ3ZDLENBQUM7RUFFRHJDLDhDQUFDLENBQUMsWUFBWTtJQUNWQSw4Q0FBQyxDQUFDLE9BQU8sQ0FBQyxDQUFDeUgsSUFBSSxDQUFDLFlBQVk7TUFDeEJ6SCw4Q0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDd0YsR0FBRyxFQUFFLENBQUNDLEVBQUUsQ0FBQyxPQUFPLDBFQUFFO1FBQUE7VUFBQTtZQUFBO2NBQ3RCekYsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7Y0FBQztjQUFBLE9BQ3pCN0Qsa0RBQUssQ0FBQztnQkFDUitELE1BQU0sRUFBRSxRQUFRO2dCQUNoQkMsR0FBRyxFQUFFLG9CQUFvQixHQUFHeEQsR0FBRyxDQUFDd0MsRUFBRSxHQUFHLEdBQUcsR0FBR3hDLEdBQUcsQ0FBQzRELFFBQVEsQ0FBQ3BCLEVBQUUsR0FBRyxHQUFHLEdBQUcsSUFBSSxDQUFDQSxFQUFFLEdBQUcsTUFBTTtnQkFDbkZrQyxXQUFXLEVBQUUsaUNBQWlDO2dCQUM5Q0MsUUFBUSxFQUFFO2NBQ2QsQ0FBQyxDQUFDLENBQUNsQixJQUFJLENBQUMsVUFBVUMsUUFBUSxFQUFFO2dCQUN4QnBCLFFBQVEsQ0FBQzZCLE1BQU0sRUFBRTtjQUNyQixDQUFDLENBQUMsU0FBTSxDQUFDLFVBQVVOLEtBQUssRUFBRTtnQkFDdEJwRSw4Q0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztjQUNsQyxDQUFDLENBQUM7WUFBQTtZQUFBO2NBQUE7VUFBQTtRQUFBO01BQUEsQ0FDTCxHQUFDO0lBQ04sQ0FBQyxDQUFDO0lBQ0YsSUFBTThELFNBQVMsR0FBRzFILDhDQUFDLENBQUMsV0FBVyxDQUFDO0lBQ2hDQSw4Q0FBQyxDQUFDLFdBQVcsQ0FBQyxDQUFDMkgsSUFBSSxDQUFDLEVBQUUsQ0FBQztJQUN2QjNILG1EQUFNLENBQUM7TUFDSHNHLElBQUksRUFBRSxNQUFNO01BQ1p2QyxHQUFHLEVBQUUsa0JBQWtCLEdBQUd4RCxHQUFHLENBQUM0RCxRQUFRLENBQUNwQixFQUFFO01BQ3pDa0MsV0FBVyxFQUFFLGlDQUFpQztNQUM5Q3NCLE9BQU8sRUFBRSxpQkFBVUMsUUFBUSxFQUFFQyxVQUFVLEVBQUVDLEtBQUssRUFBRTtRQUM1QzFHLDhDQUFDLENBQUMsUUFBUSxDQUFDLENBQUM0SCxLQUFLLEVBQUU7UUFDbkI1SCw4Q0FBQyxDQUFDLFFBQVEsQ0FBQyxDQUFDNkgsTUFBTSxDQUFDLHFHQUFxRyxDQUFDO1FBQ3pIckIsUUFBUSxDQUFDc0IsR0FBRyxDQUFDLFVBQUNDLEVBQUUsRUFBSztVQUNqQixJQUFNQyxLQUFLLEdBQUdoSSw4Q0FBQyxDQUFDLGdCQUFnQixHQUFHK0gsRUFBRSxDQUFDaEYsRUFBRSxHQUFHLFlBQVksR0FBR2dGLEVBQUUsQ0FBQ0UsT0FBTyxHQUFHLFdBQVcsQ0FBQztVQUNuRkQsS0FBSyxDQUFDRSxRQUFRLENBQUNSLFNBQVMsQ0FBQztRQUM3QixDQUFDLENBQUM7UUFDRjFILDhDQUFDLENBQUMsUUFBUSxDQUFDLENBQUM0SCxLQUFLLEVBQUU7UUFDbkI1SCw4Q0FBQyxDQUFDLFFBQVEsQ0FBQyxDQUFDNkgsTUFBTSxDQUFDLGtEQUFrRCxDQUFDO01BQzFFLENBQUM7TUFDRHpELEtBQUssRUFBRSxlQUFVdUMsR0FBRyxFQUFFckMsSUFBSSxFQUFFc0MsSUFBSSxFQUFFO1FBQzlCNUcsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7TUFDbkM7SUFDSixDQUFDLENBQUM7SUFFRixJQUFNdUUsT0FBTyxHQUFHbkksOENBQUMsQ0FBQyxTQUFTLENBQUM7SUFDNUJBLDhDQUFDLENBQUMsU0FBUyxDQUFDLENBQUMySCxJQUFJLENBQUMsRUFBRSxDQUFDO0lBQ3JCM0gsbURBQU0sQ0FBQztNQUNIc0csSUFBSSxFQUFFLE1BQU07TUFDWnZDLEdBQUcsRUFBRSxrQkFBa0IsR0FBR3hELEdBQUcsQ0FBQzRELFFBQVEsQ0FBQ3BCLEVBQUU7TUFDekNrQyxXQUFXLEVBQUUsaUNBQWlDO01BQzlDc0IsT0FBTyxFQUFFLGlCQUFVQyxRQUFRLEVBQUVDLFVBQVUsRUFBRUMsS0FBSyxFQUFFO1FBQzVDMUcsOENBQUMsQ0FBQyxPQUFPLENBQUMsQ0FBQzRILEtBQUssRUFBRTtRQUNsQjVILDhDQUFDLENBQUMsT0FBTyxDQUFDLENBQUM2SCxNQUFNLENBQUMscUdBQXFHLENBQUM7UUFDeEhyQixRQUFRLENBQUNzQixHQUFHLENBQUMsVUFBQ0MsRUFBRSxFQUFLO1VBQ2pCLElBQU1DLEtBQUssR0FBR2hJLDhDQUFDLENBQUMsZ0JBQWdCLEdBQUcrSCxFQUFFLENBQUNoRixFQUFFLEdBQUcsWUFBWSxHQUFHZ0YsRUFBRSxDQUFDRSxPQUFPLEdBQUcsV0FBVyxDQUFDO1VBQ25GRCxLQUFLLENBQUNFLFFBQVEsQ0FBQ0MsT0FBTyxDQUFDO1FBQzNCLENBQUMsQ0FBQztRQUNGbkksOENBQUMsQ0FBQyxPQUFPLENBQUMsQ0FBQzRILEtBQUssRUFBRTtRQUNsQjVILDhDQUFDLENBQUMsT0FBTyxDQUFDLENBQUM2SCxNQUFNLENBQUMsa0RBQWtELENBQUM7TUFDekUsQ0FBQztNQUNEekQsS0FBSyxFQUFFLGVBQVV1QyxHQUFHLEVBQUVyQyxJQUFJLEVBQUVzQyxJQUFJLEVBQUU7UUFDOUI1Ryw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztNQUNuQztJQUNKLENBQUMsQ0FBQztJQUVGNUQsOENBQUMsQ0FBQyxTQUFTLENBQUMsQ0FBQ3lILElBQUksQ0FBQyxZQUFZO01BQzFCekgsOENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ3dGLEdBQUcsRUFBRSxDQUFDQyxFQUFFLENBQUMsT0FBTywwRUFBRTtRQUFBO1VBQUE7WUFBQTtjQUN0QnpGLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO2NBQUM7Y0FBQSxPQUN6QjdELGtEQUFLLENBQUM7Z0JBQ1IrRCxNQUFNLEVBQUUsUUFBUTtnQkFDaEJDLEdBQUcsRUFBRSxvQkFBb0IsR0FBR3hELEdBQUcsQ0FBQ3dDLEVBQUUsR0FBRyxHQUFHLEdBQUd4QyxHQUFHLENBQUM0RCxRQUFRLENBQUNwQixFQUFFLEdBQUcsR0FBRyxHQUFHLElBQUksQ0FBQ0EsRUFBRSxHQUFHLE1BQU07Z0JBQ25Ga0MsV0FBVyxFQUFFLGlDQUFpQztnQkFDOUNDLFFBQVEsRUFBRTtjQUNkLENBQUMsQ0FBQyxDQUFDbEIsSUFBSSxDQUFDLFVBQVVDLFFBQVEsRUFBRTtnQkFDeEJwQixRQUFRLENBQUM2QixNQUFNLEVBQUU7Y0FDckIsQ0FBQyxDQUFDLFNBQU0sQ0FBQyxVQUFVTixLQUFLLEVBQUU7Z0JBQ3RCcEUsOENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7Y0FDbEMsQ0FBQyxDQUFDO1lBQUE7WUFBQTtjQUFBO1VBQUE7UUFBQTtNQUFBLENBQ0wsR0FBQztJQUNOLENBQUMsQ0FBQztFQUNOLENBQUMsQ0FBQztFQUVGNUQsOENBQUMsQ0FBQyxRQUFRLENBQUMsQ0FBQ3dGLEdBQUcsRUFBRSxDQUFDQyxFQUFFLENBQUMsUUFBUSxFQUFFLFVBQVVDLEtBQUssRUFBRTtJQUM1Q0EsS0FBSyxDQUFDaEQsY0FBYyxFQUFFO0lBQ3RCLElBQU0wRixRQUFRLEdBQUdwSSw4Q0FBQyxDQUFDLFVBQVUsQ0FBQztJQUM5QkEsOENBQUMsQ0FBQyxVQUFVLENBQUMsQ0FBQzJILElBQUksQ0FBQyxFQUFFLENBQUM7SUFDdEIzSCxtREFBTSxDQUFDO01BQ0hzRyxJQUFJLEVBQUUsTUFBTTtNQUNadkMsR0FBRyxFQUFFLGtCQUFrQixHQUFHLElBQUksQ0FBQ1EsS0FBSztNQUNwQ1UsV0FBVyxFQUFFLGlDQUFpQztNQUM5Q3NCLE9BQU8sRUFBRSxpQkFBVUMsUUFBUSxFQUFFQyxVQUFVLEVBQUVDLEtBQUssRUFBRTtRQUM1QzFHLDhDQUFDLENBQUMsT0FBTyxDQUFDLENBQUM0SCxLQUFLLEVBQUU7UUFDbEI1SCw4Q0FBQyxDQUFDLE9BQU8sQ0FBQyxDQUFDNkgsTUFBTSxDQUFDLHFHQUFxRyxDQUFDO1FBQ3hIckIsUUFBUSxDQUFDc0IsR0FBRyxDQUFDLFVBQUNDLEVBQUUsRUFBSztVQUNqQixJQUFNQyxLQUFLLEdBQUdoSSw4Q0FBQyxDQUFDLGdCQUFnQixHQUFHK0gsRUFBRSxDQUFDaEYsRUFBRSxHQUFHLFlBQVksR0FBR2dGLEVBQUUsQ0FBQ0UsT0FBTyxHQUFHLFdBQVcsQ0FBQztVQUNuRkQsS0FBSyxDQUFDRSxRQUFRLENBQUNFLFFBQVEsQ0FBQztRQUM1QixDQUFDLENBQUM7UUFDRnBJLDhDQUFDLENBQUMsT0FBTyxDQUFDLENBQUM0SCxLQUFLLEVBQUU7UUFDbEI1SCw4Q0FBQyxDQUFDLE9BQU8sQ0FBQyxDQUFDNkgsTUFBTSxDQUFDLGtEQUFrRCxDQUFDO01BQ3pFLENBQUM7TUFDRHpELEtBQUssRUFBRSxlQUFVdUMsR0FBRyxFQUFFckMsSUFBSSxFQUFFc0MsSUFBSSxFQUFFO1FBQzlCNUcsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7TUFDbkM7SUFDSixDQUFDLENBQUM7RUFDTixDQUFDLENBQUM7RUFDRjVELDhDQUFDLENBQUMsU0FBUyxDQUFDLENBQUN3RixHQUFHLEVBQUUsQ0FBQ0MsRUFBRSxDQUFDLFFBQVEsRUFBRSxVQUFVQyxLQUFLLEVBQUU7SUFDN0NBLEtBQUssQ0FBQ2hELGNBQWMsRUFBRTtJQUN0QixJQUFNMkYsUUFBUSxHQUFHckksOENBQUMsQ0FBQyxVQUFVLENBQUM7SUFDOUJBLDhDQUFDLENBQUMsVUFBVSxDQUFDLENBQUMySCxJQUFJLENBQUMsRUFBRSxDQUFDO0lBQ3RCM0gsbURBQU0sQ0FBQztNQUNIc0csSUFBSSxFQUFFLE1BQU07TUFDWnZDLEdBQUcsRUFBRSxrQkFBa0IsR0FBRyxJQUFJLENBQUNRLEtBQUs7TUFDcENVLFdBQVcsRUFBRSxpQ0FBaUM7TUFDOUNzQixPQUFPLEVBQUUsaUJBQVVDLFFBQVEsRUFBRUMsVUFBVSxFQUFFQyxLQUFLLEVBQUU7UUFDNUMxRyw4Q0FBQyxDQUFDLFFBQVEsQ0FBQyxDQUFDNEgsS0FBSyxFQUFFO1FBQ25CNUgsOENBQUMsQ0FBQyxRQUFRLENBQUMsQ0FBQzZILE1BQU0sQ0FBQyxxR0FBcUcsQ0FBQztRQUN6SHJCLFFBQVEsQ0FBQ3NCLEdBQUcsQ0FBQyxVQUFDQyxFQUFFLEVBQUs7VUFDakIsSUFBTUMsS0FBSyxHQUFHaEksOENBQUMsQ0FBQyxnQkFBZ0IsR0FBRytILEVBQUUsQ0FBQ2hGLEVBQUUsR0FBRyxZQUFZLEdBQUdnRixFQUFFLENBQUNFLE9BQU8sR0FBRyxXQUFXLENBQUM7VUFDbkZELEtBQUssQ0FBQ0UsUUFBUSxDQUFDRyxRQUFRLENBQUM7UUFDNUIsQ0FBQyxDQUFDO1FBQ0ZySSw4Q0FBQyxDQUFDLFFBQVEsQ0FBQyxDQUFDNEgsS0FBSyxFQUFFO1FBQ25CNUgsOENBQUMsQ0FBQyxRQUFRLENBQUMsQ0FBQzZILE1BQU0sQ0FBQyxrREFBa0QsQ0FBQztNQUMxRSxDQUFDO01BQ0R6RCxLQUFLLEVBQUUsZUFBVXVDLEdBQUcsRUFBRXJDLElBQUksRUFBRXNDLElBQUksRUFBRTtRQUM5QjVHLDhDQUFDLENBQUMsY0FBYyxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO01BQ25DO0lBQ0osQ0FBQyxDQUFDO0VBQ04sQ0FBQyxDQUFDO0VBQ0Y1RCw4Q0FBQyxDQUFDLFNBQVMsQ0FBQyxDQUFDd0YsR0FBRyxFQUFFLENBQUNDLEVBQUUsQ0FBQyxRQUFRLEVBQUUsVUFBVUMsS0FBSyxFQUFFO0lBQzdDQSxLQUFLLENBQUNoRCxjQUFjLEVBQUU7SUFDdEIsSUFBTXlGLE9BQU8sR0FBR25JLDhDQUFDLENBQUMsU0FBUyxDQUFDO0lBQzVCQSw4Q0FBQyxDQUFDLFNBQVMsQ0FBQyxDQUFDMkgsSUFBSSxDQUFDLEVBQUUsQ0FBQztJQUNyQjNILG1EQUFNLENBQUM7TUFDSHNHLElBQUksRUFBRSxNQUFNO01BQ1p2QyxHQUFHLEVBQUUsa0JBQWtCLEdBQUcsSUFBSSxDQUFDUSxLQUFLO01BQ3BDVSxXQUFXLEVBQUUsaUNBQWlDO01BQzlDc0IsT0FBTyxFQUFFLGlCQUFVQyxRQUFRLEVBQUVDLFVBQVUsRUFBRUMsS0FBSyxFQUFFO1FBQzVDMUcsOENBQUMsQ0FBQyxPQUFPLENBQUMsQ0FBQzRILEtBQUssRUFBRTtRQUNsQjVILDhDQUFDLENBQUMsT0FBTyxDQUFDLENBQUM2SCxNQUFNLENBQUMscUdBQXFHLENBQUM7UUFDeEhyQixRQUFRLENBQUNzQixHQUFHLENBQUMsVUFBQ0MsRUFBRSxFQUFLO1VBQ2pCLElBQU1DLEtBQUssR0FBR2hJLDhDQUFDLENBQUMsZ0JBQWdCLEdBQUcrSCxFQUFFLENBQUNoRixFQUFFLEdBQUcsWUFBWSxHQUFHZ0YsRUFBRSxDQUFDRSxPQUFPLEdBQUcsV0FBVyxDQUFDO1VBQ25GRCxLQUFLLENBQUNFLFFBQVEsQ0FBQ0MsT0FBTyxDQUFDO1FBQzNCLENBQUMsQ0FBQztRQUNGbkksOENBQUMsQ0FBQyxPQUFPLENBQUMsQ0FBQzRILEtBQUssRUFBRTtRQUNsQjVILDhDQUFDLENBQUMsT0FBTyxDQUFDLENBQUM2SCxNQUFNLENBQUMsa0RBQWtELENBQUM7TUFDekUsQ0FBQztNQUNEekQsS0FBSyxFQUFFLGVBQVV1QyxHQUFHLEVBQUVyQyxJQUFJLEVBQUVzQyxJQUFJLEVBQUU7UUFDOUI1Ryw4Q0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztNQUNuQztJQUNKLENBQUMsQ0FBQztFQUNOLENBQUMsQ0FBQztFQUNGNUQsOENBQUMsQ0FBQyxVQUFVLENBQUMsQ0FBQ3dGLEdBQUcsRUFBRSxDQUFDQyxFQUFFLENBQUMsUUFBUSxFQUFFLFVBQVVDLEtBQUssRUFBRTtJQUM5Q0EsS0FBSyxDQUFDaEQsY0FBYyxFQUFFO0lBQ3RCLElBQU1nRixTQUFTLEdBQUcxSCw4Q0FBQyxDQUFDLFdBQVcsQ0FBQztJQUNoQ0EsOENBQUMsQ0FBQyxXQUFXLENBQUMsQ0FBQzJILElBQUksQ0FBQyxFQUFFLENBQUM7SUFDdkIzSCxtREFBTSxDQUFDO01BQ0hzRyxJQUFJLEVBQUUsTUFBTTtNQUNadkMsR0FBRyxFQUFFLGtCQUFrQixHQUFHLElBQUksQ0FBQ1EsS0FBSztNQUNwQ1UsV0FBVyxFQUFFLGlDQUFpQztNQUM5Q3NCLE9BQU8sRUFBRSxpQkFBVUMsUUFBUSxFQUFFQyxVQUFVLEVBQUVDLEtBQUssRUFBRTtRQUM1QzFHLDhDQUFDLENBQUMsUUFBUSxDQUFDLENBQUM0SCxLQUFLLEVBQUU7UUFDbkI1SCw4Q0FBQyxDQUFDLFFBQVEsQ0FBQyxDQUFDNkgsTUFBTSxDQUFDLHFHQUFxRyxDQUFDO1FBQ3pIckIsUUFBUSxDQUFDc0IsR0FBRyxDQUFDLFVBQUNDLEVBQUUsRUFBSztVQUNqQixJQUFNQyxLQUFLLEdBQUdoSSw4Q0FBQyxDQUFDLGdCQUFnQixHQUFHK0gsRUFBRSxDQUFDaEYsRUFBRSxHQUFHLFlBQVksR0FBR2dGLEVBQUUsQ0FBQ0UsT0FBTyxHQUFHLFdBQVcsQ0FBQztVQUNuRkQsS0FBSyxDQUFDRSxRQUFRLENBQUNSLFNBQVMsQ0FBQztRQUM3QixDQUFDLENBQUM7UUFDRjFILDhDQUFDLENBQUMsUUFBUSxDQUFDLENBQUM0SCxLQUFLLEVBQUU7UUFDbkI1SCw4Q0FBQyxDQUFDLFFBQVEsQ0FBQyxDQUFDNkgsTUFBTSxDQUFDLGtEQUFrRCxDQUFDO01BQzFFLENBQUM7TUFDRHpELEtBQUssRUFBRSxlQUFVdUMsR0FBRyxFQUFFckMsSUFBSSxFQUFFc0MsSUFBSSxFQUFFO1FBQzlCNUcsOENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQzRELEtBQUssQ0FBQyxNQUFNLENBQUM7TUFDbkM7SUFDSixDQUFDLENBQUM7RUFDTixDQUFDLENBQUM7RUFFRixJQUFJakQsT0FBTyxFQUFFO0lBQ1RlLFlBQVksR0FBR2YsT0FBTyxDQUFDbUgsR0FBRyxDQUFDLFVBQUNFLEtBQUssRUFBSztNQUNsQyxJQUFJTSxFQUFFLEdBQUcsQ0FBQztNQUNWLElBQUlDLElBQUksR0FBR1AsS0FBSyxDQUFDakYsRUFBRTtNQUNuQixJQUFJeUYsR0FBRyxHQUFHLEVBQUU7TUFDWixJQUFJakksR0FBRyxDQUFDa0ksSUFBSSxLQUFLLFFBQVEsRUFBRTtRQUN2QkQsR0FBRyxHQUFHUixLQUFLLENBQUNmLE1BQU0sR0FBRyx1QkFBdUIsR0FBR2UsS0FBSyxDQUFDakYsRUFBRSxHQUFHLFdBQVc7TUFDekUsQ0FBQyxNQUFNO1FBQ0h5RixHQUFHLEdBQUdSLEtBQUssQ0FBQ2YsTUFBTSxHQUFHLHVCQUF1QixHQUFHZSxLQUFLLENBQUNqRixFQUFFLEdBQUcsT0FBTyxHQUM3RCwwQkFBMEIsR0FBR3hDLEdBQUcsQ0FBQ3dDLEVBQUUsR0FBRyxHQUFHLEdBQUdpRixLQUFLLENBQUNqRixFQUFFLEdBQUcsR0FBRyxHQUFHeEMsR0FBRyxDQUFDNEQsUUFBUSxDQUFDcEIsRUFBRSxHQUFHLDZIQUE2SCxHQUM1TSx1QkFBdUIsR0FBR3dGLElBQUksR0FBRyxvSEFBb0gsR0FDckosTUFBTTtNQUNkO01BQ0EsSUFBTUcsaUJBQWlCLEdBQUdqSSxNQUFNLENBQUNxSCxHQUFHLENBQUMsVUFBQ2EsS0FBSyxFQUFLO1FBQzVDLElBQUlDLEdBQUcsR0FBRyxFQUFFO1FBQ1osSUFBSUQsS0FBSyxDQUFDMUIsTUFBTSxLQUFLLElBQUksRUFBRTtVQUN2QixJQUFJMEIsS0FBSyxDQUFDMUIsTUFBTSxDQUFDbEUsRUFBRSxLQUFLaUYsS0FBSyxDQUFDakYsRUFBRSxFQUFFO1lBQzlCLElBQUl4QyxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxFQUFFO2NBQ3JCUCxFQUFFLEdBQUdBLEVBQUUsR0FBS0ssS0FBSyxDQUFDRyxFQUFFLEdBQUdILEtBQUssQ0FBQ0ksUUFBUSxJQUFLLENBQUMsR0FBRyxHQUFHSixLQUFLLENBQUNLLE1BQU0sSUFBSSxHQUFHLENBQUU7WUFDMUUsQ0FBQyxNQUFNO2NBQ0hWLEVBQUUsR0FBR0EsRUFBRSxHQUFJSyxLQUFLLENBQUNHLEVBQUUsR0FBR0gsS0FBSyxDQUFDSSxRQUFTO1lBQ3pDO1VBQ0o7VUFDQSxJQUFJRSxJQUFJLEdBQUdOLEtBQUssQ0FBQzVGLEVBQUU7VUFDbkIsSUFBSXhDLEdBQUcsQ0FBQ2tJLElBQUksS0FBSyxRQUFRLEVBQUU7WUFDdkJHLEdBQUcsR0FBR0QsS0FBSyxDQUFDTyxXQUFXLEdBQUcsbUNBQW1DLEdBQUdQLEtBQUssQ0FBQzVGLEVBQUUsR0FBRyxXQUFXO1VBQzFGLENBQUMsTUFBTTtZQUNINkYsR0FBRyxHQUFHRCxLQUFLLENBQUNPLFdBQVcsR0FBRyxtQ0FBbUMsR0FBR1AsS0FBSyxDQUFDNUYsRUFBRSxHQUFHLE9BQU8sR0FDOUUseUJBQXlCLEdBQUd4QyxHQUFHLENBQUN3QyxFQUFFLEdBQUcsR0FBRyxHQUFHNEYsS0FBSyxDQUFDNUYsRUFBRSxHQUFHLEdBQUcsR0FBR3hDLEdBQUcsQ0FBQzRELFFBQVEsQ0FBQ3BCLEVBQUUsR0FBRyw2SEFBNkgsR0FDM00scUJBQXFCLEdBQUdrRyxJQUFJLEdBQUcsb0hBQW9ILEdBQ25KLE1BQU07VUFDZDtRQUNKO1FBQ0Esb0JBQ0ksNEhBQ0tOLEtBQUssQ0FBQzFCLE1BQU0sS0FBSyxJQUFJLGlCQUNsQiw0SEFDSzBCLEtBQUssQ0FBQzFCLE1BQU0sQ0FBQ2xFLEVBQUUsS0FBS2lGLEtBQUssQ0FBQ2pGLEVBQUUsaUJBQ3pCO1VBQUksR0FBRyxFQUFFNEYsS0FBSyxDQUFDNUYsRUFBRSxDQUFDUSxRQUFRLEVBQUc7VUFBQyxXQUFXLEVBQUUsdUJBQU07WUFDN0M4RCxNQUFNLENBQUNzQixLQUFLLENBQUM1RixFQUFFLENBQUM7VUFDcEIsQ0FBRTtVQUFDLFVBQVUsRUFBRSxzQkFBTTtZQUNqQnVFLE9BQU8sQ0FBQ3FCLEtBQUssQ0FBQzVGLEVBQUUsQ0FBQztVQUNyQjtRQUFFLEdBQ0d4QyxHQUFHLENBQUM0SSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7VUFBSSxTQUFTLEVBQUMsbUJBQW1CO1VBQUMsS0FBSyxFQUFFO1lBQUNDLFVBQVUsRUFBRTtVQUFRLENBQUU7VUFDNUQsdUJBQXVCLEVBQUU7WUFBQ0MsTUFBTSxFQUFFVixLQUFLLENBQUNXO1VBQVM7UUFBRSxFQUFFLGVBRzdEO1VBQUksU0FBUyxFQUFDLGlCQUFpQjtVQUFDLHVCQUF1QixFQUFFO1lBQUNELE1BQU0sRUFBRVQ7VUFBRztRQUFFLEVBQUUsZUFDekU7VUFBSSxTQUFTLEVBQUMsbUJBQW1CO1VBQUMsS0FBSyxFQUFFO1lBQUNRLFVBQVUsRUFBRTtVQUFRO1FBQUUsZ0JBQzVELDREQUFDLHNEQUFRO1VBQ0wsSUFBSSxFQUFDLE1BQU07VUFDWCxJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7VUFDZixZQUFZLEVBQUU0RixLQUFLLENBQUNZLEtBQU07VUFDMUIsTUFBTSxFQUFFLGdCQUFBbEksR0FBRztZQUFBLE9BQUl3RCxTQUFTLENBQUN4RCxHQUFHLENBQUM7VUFBQTtRQUFDLEVBQ2hDLENBQ0QsRUFDSmQsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE1BQU0saUJBQ2hCO1VBQUksU0FBUyxFQUFDLG1CQUFtQjtVQUFDLEtBQUssRUFBRTtZQUFDOEMsVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDNUQsNERBQUMsc0RBQVE7VUFDTCxJQUFJLEVBQUMsUUFBUTtVQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztVQUNmLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDSSxRQUFRLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtVQUNuRCxNQUFNLEVBQUUsZ0JBQUExSCxHQUFHO1lBQUEsT0FBSXVELE9BQU8sQ0FBQ3ZELEdBQUcsQ0FBQztVQUFBO1FBQUMsRUFDOUIsQ0FDRCxFQUVSZCxHQUFHLENBQUMrRixJQUFJLEtBQUssT0FBTyxpQkFDakIseUlBQ0k7VUFBSSxTQUFTLEVBQUMsbUJBQW1CO1VBQUMsS0FBSyxFQUFFO1lBQUM4QyxVQUFVLEVBQUU7VUFBUTtRQUFFLGdCQUM1RCw0REFBQyxzREFBUTtVQUNMLElBQUksRUFBQyxRQUFRO1VBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1VBQ2YsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNJLFFBQVEsRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1VBQ25ELE1BQU0sRUFBRSxnQkFBQTFILEdBQUc7WUFBQSxPQUFJdUQsT0FBTyxDQUFDdkQsR0FBRyxDQUFDO1VBQUE7UUFBQyxFQUM5QixDQUNELGVBQ0w7VUFBSSxTQUFTLEVBQUM7UUFBbUIsR0FBRTJCLFlBQVksQ0FBQ3dHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7VUFBSSxTQUFTLEVBQUM7UUFBbUIsR0FBRXhHLFlBQVksQ0FBQ3lHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7VUFBSSxTQUFTLEVBQUMsa0JBQWtCO1VBQUMsS0FBSyxFQUFFO1lBQUNMLFVBQVUsRUFBRTtVQUFRO1FBQUUsZ0JBQzNELDREQUFDLHNEQUFRO1VBQ0wsSUFBSSxFQUFDLFFBQVE7VUFDYixJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7VUFDZixjQUFjLEVBQUMsY0FBYztVQUM3QixZQUFZLEVBQUVDLFlBQVksQ0FBQzJGLEtBQUssQ0FBQ0csRUFBRSxFQUFFLENBQUMsRUFBRSxHQUFHLENBQUU7VUFDN0MsTUFBTSxFQUFFLGdCQUFBekgsR0FBRztZQUFBLE9BQUlzRCxNQUFNLENBQUN0RCxHQUFHLENBQUM7VUFBQTtRQUFDLEVBQzdCLENBQ0QsRUFDSmQsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1VBQUksU0FBUyxFQUFDLG1CQUFtQjtVQUFDLEtBQUssRUFBRTtZQUFDTyxVQUFVLEVBQUU7VUFBUTtRQUFFLGdCQUM1RCw0REFBQyxzREFBUTtVQUNMLElBQUksRUFBQyxRQUFRO1VBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1VBQ2YsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNLLE1BQU0sRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1VBQ2pELE1BQU0sRUFBRSxnQkFBQTNILEdBQUc7WUFBQSxPQUFJZ0QsVUFBVSxDQUFDaEQsR0FBRyxDQUFDO1VBQUE7UUFBQyxFQUNqQyxDQUNELEVBRVJkLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLGlCQUNoQjtVQUFJLFNBQVMsRUFBQyxrQkFBa0I7VUFBQyxLQUFLLEVBQUU7WUFBQ08sVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDM0QsNERBQUMsZ0VBQVk7VUFDVCxJQUFJLEVBQUdULEtBQUssQ0FBQ0csRUFBRSxHQUFHSCxLQUFLLENBQUNJO1FBQVUsRUFBRSxDQUFLLEVBRXBEeEksR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1VBQUksU0FBUyxFQUFDLGtCQUFrQjtVQUFDLEtBQUssRUFBRTtZQUFDTyxVQUFVLEVBQUU7VUFBUTtRQUFFLGdCQUMzRCw0REFBQyxnRUFBWTtVQUNULElBQUksRUFBSVQsS0FBSyxDQUFDRyxFQUFFLEdBQUdILEtBQUssQ0FBQ0ksUUFBUSxJQUFLLENBQUMsR0FBRyxHQUFHSixLQUFLLENBQUNLLE1BQU0sSUFBSSxHQUFHO1FBQUcsRUFBRSxDQUN4RSxDQUVWLEVBRU56SSxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDaEIseUlBQ0k7VUFBSSxTQUFTLEVBQUM7UUFBbUIsR0FBRXRELFlBQVksQ0FBQzBHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7VUFBSSxTQUFTLEVBQUM7UUFBbUIsR0FBRTFHLFlBQVksQ0FBQ3dHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7VUFBSSxTQUFTLEVBQUM7UUFBbUIsR0FBRXhHLFlBQVksQ0FBQ3lHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sQ0FDckUsRUFFTmxKLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLHlJQUNJO1VBQUksU0FBUyxFQUFDLG1CQUFtQjtVQUFDLEtBQUssRUFBRTtZQUFDOEMsVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDNUQsNERBQUMsc0RBQVE7VUFDTCxJQUFJLEVBQUMsUUFBUTtVQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztVQUNmLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDSSxRQUFRLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtVQUNuRCxNQUFNLEVBQUUsZ0JBQUExSCxHQUFHO1lBQUEsT0FBSXVELE9BQU8sQ0FBQ3ZELEdBQUcsQ0FBQztVQUFBO1FBQUMsRUFDOUIsQ0FDRCxlQUNMO1VBQUksU0FBUyxFQUFDLGtCQUFrQjtVQUFDLEtBQUssRUFBRTtZQUFDK0gsVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDM0QsNERBQUMsc0RBQVE7VUFDTCxJQUFJLEVBQUMsUUFBUTtVQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztVQUNmLGNBQWMsRUFBQyxjQUFjO1VBQzdCLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDRyxFQUFFLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtVQUM3QyxNQUFNLEVBQUUsZ0JBQUF6SCxHQUFHO1lBQUEsT0FBSXNELE1BQU0sQ0FBQ3RELEdBQUcsQ0FBQztVQUFBO1FBQUMsRUFDN0IsQ0FDRCxFQUNKZCxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7VUFBSSxTQUFTLEVBQUMsbUJBQW1CO1VBQUMsS0FBSyxFQUFFO1lBQUNPLFVBQVUsRUFBRTtVQUFRO1FBQUUsZ0JBQzVELDREQUFDLHNEQUFRO1VBQ0wsSUFBSSxFQUFDLFFBQVE7VUFDYixJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7VUFDZixZQUFZLEVBQUVDLFlBQVksQ0FBQzJGLEtBQUssQ0FBQ0ssTUFBTSxFQUFFLENBQUMsRUFBRSxHQUFHLENBQUU7VUFDakQsTUFBTSxFQUFFLGdCQUFBM0gsR0FBRztZQUFBLE9BQUlnRCxVQUFVLENBQUNoRCxHQUFHLENBQUM7VUFBQTtRQUFDLEVBQ2pDLENBQ0QsRUFFUmQsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1VBQUksU0FBUyxFQUFDLGtCQUFrQjtVQUFDLEtBQUssRUFBRTtZQUFDTyxVQUFVLEVBQUU7VUFBUTtRQUFFLGdCQUMzRCw0REFBQyxnRUFBWTtVQUNULElBQUksRUFBR1QsS0FBSyxDQUFDRyxFQUFFLEdBQUdILEtBQUssQ0FBQ0k7UUFBVSxFQUFFLENBQUssRUFFcER4SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7VUFBSSxTQUFTLEVBQUMsa0JBQWtCO1VBQUMsS0FBSyxFQUFFO1lBQUNPLFVBQVUsRUFBRTtVQUFRO1FBQUUsZ0JBQzNELDREQUFDLGdFQUFZO1VBQ1QsSUFBSSxFQUFJVCxLQUFLLENBQUNHLEVBQUUsR0FBR0gsS0FBSyxDQUFDSSxRQUFRLElBQUssQ0FBQyxHQUFHLEdBQUdKLEtBQUssQ0FBQ0ssTUFBTSxJQUFJLEdBQUc7UUFBRyxFQUFFLENBQ3hFLENBRVYsRUFFTnpJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLDRIQUNLL0YsR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDckIseUlBQ0k7VUFBSSxTQUFTLEVBQUMsbUJBQW1CO1VBQzdCLEtBQUssRUFBRTtZQUFDOEgsVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDOUIsNERBQUMsc0RBQVE7VUFDTCxJQUFJLEVBQUMsUUFBUTtVQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztVQUNmLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDSSxRQUFRLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtVQUNuRCxNQUFNLEVBQUUsZ0JBQUExSCxHQUFHO1lBQUEsT0FBSXVELE9BQU8sQ0FBQ3ZELEdBQUcsQ0FBQztVQUFBO1FBQUMsRUFDOUIsQ0FDRCxlQUNMO1VBQUksU0FBUyxFQUFDLGtCQUFrQjtVQUFDLEtBQUssRUFBRTtZQUFDK0gsVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDM0QsNERBQUMsc0RBQVE7VUFDTCxJQUFJLEVBQUMsUUFBUTtVQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztVQUNmLGNBQWMsRUFBQyxjQUFjO1VBQzdCLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDRyxFQUFFLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtVQUM3QyxNQUFNLEVBQUUsZ0JBQUF6SCxHQUFHO1lBQUEsT0FBSXNELE1BQU0sQ0FBQ3RELEdBQUcsQ0FBQztVQUFBO1FBQUMsRUFDN0IsQ0FDRCxDQUNOLEVBRU5kLEdBQUcsQ0FBQ2UsV0FBVyxLQUFLLElBQUksaUJBQ3JCLHlJQUNJO1VBQUksU0FBUyxFQUFDO1FBQW1CLEdBQUUwQixZQUFZLENBQUMwRyxLQUFLLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBQyxDQUFNLGVBQ3BFO1VBQUksU0FBUyxFQUFDO1FBQW1CLEdBQUUxRyxZQUFZLENBQUN3RyxLQUFLLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBQyxDQUFNLGVBQ3BFO1VBQUksU0FBUyxFQUFDO1FBQW1CLEdBQUV4RyxZQUFZLENBQUN5RyxLQUFLLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBQyxDQUFNLGVBQ3BFO1VBQUksU0FBUyxFQUFDLG1CQUFtQjtVQUM3QixLQUFLLEVBQUU7WUFBQ0wsVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDOUIsNERBQUMsc0RBQVE7VUFDTCxJQUFJLEVBQUMsUUFBUTtVQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztVQUNmLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDSSxRQUFRLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtVQUNuRCxNQUFNLEVBQUUsZ0JBQUExSCxHQUFHO1lBQUEsT0FBSXVELE9BQU8sQ0FBQ3ZELEdBQUcsQ0FBQztVQUFBO1FBQUMsRUFDOUIsQ0FDRCxlQUNMO1VBQUksU0FBUyxFQUFDLGtCQUFrQjtVQUFDLEtBQUssRUFBRTtZQUFDK0gsVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDM0QsNERBQUMsc0RBQVE7VUFDTCxJQUFJLEVBQUMsUUFBUTtVQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztVQUNmLGNBQWMsRUFBQyxjQUFjO1VBQzdCLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDRyxFQUFFLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtVQUM3QyxNQUFNLEVBQUUsZ0JBQUF6SCxHQUFHO1lBQUEsT0FBSXNELE1BQU0sQ0FBQ3RELEdBQUcsQ0FBQztVQUFBO1FBQUMsRUFDN0IsQ0FDRCxDQUNOLEVBRU5kLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLGlCQUNoQjtVQUFJLFNBQVMsRUFBQyxtQkFBbUI7VUFBQyxLQUFLLEVBQUU7WUFBQ08sVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDNUQsNERBQUMsc0RBQVE7VUFDTCxJQUFJLEVBQUMsUUFBUTtVQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztVQUNmLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDSyxNQUFNLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtVQUNqRCxNQUFNLEVBQUUsZ0JBQUEzSCxHQUFHO1lBQUEsT0FBSWdELFVBQVUsQ0FBQ2hELEdBQUcsQ0FBQztVQUFBO1FBQUMsRUFDakMsQ0FDRCxFQUVSZCxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7VUFBSSxTQUFTLEVBQUMsa0JBQWtCO1VBQUMsS0FBSyxFQUFFO1lBQUNPLFVBQVUsRUFBRTtVQUFRO1FBQUUsZ0JBQzNELDREQUFDLGdFQUFZO1VBQ1QsSUFBSSxFQUFHVCxLQUFLLENBQUNHLEVBQUUsR0FBR0gsS0FBSyxDQUFDSTtRQUFVLEVBQUUsQ0FBSyxFQUVwRHhJLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLGlCQUNoQjtVQUFJLFNBQVMsRUFBQyxrQkFBa0I7VUFBQyxLQUFLLEVBQUU7WUFBQ08sVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDM0QsNERBQUMsZ0VBQVk7VUFDVCxJQUFJLEVBQUlULEtBQUssQ0FBQ0csRUFBRSxHQUFHSCxLQUFLLENBQUNJLFFBQVEsSUFBSyxDQUFDLEdBQUcsR0FBR0osS0FBSyxDQUFDSyxNQUFNLElBQUksR0FBRztRQUFHLEVBQUUsQ0FDeEUsQ0FFVixFQUVOekksR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2YsNEhBQ0svRixHQUFHLENBQUNlLFdBQVcsS0FBSyxJQUFJLGlCQUNyQix5SUFDSTtVQUFJLFNBQVMsRUFBQyxtQkFBbUI7VUFDN0IsS0FBSyxFQUFFO1lBQUM4SCxVQUFVLEVBQUU7VUFBUTtRQUFFLGdCQUM5Qiw0REFBQyxzREFBUTtVQUNMLElBQUksRUFBQyxRQUFRO1VBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1VBQ2YsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNJLFFBQVEsRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1VBQ25ELE1BQU0sRUFBRSxnQkFBQTFILEdBQUc7WUFBQSxPQUFJdUQsT0FBTyxDQUFDdkQsR0FBRyxDQUFDO1VBQUE7UUFBQyxFQUM5QixDQUNELGVBQ0w7VUFBSSxTQUFTLEVBQUMsa0JBQWtCO1VBQUMsS0FBSyxFQUFFO1lBQUMrSCxVQUFVLEVBQUU7VUFBUTtRQUFFLGdCQUMzRCw0REFBQyxzREFBUTtVQUNMLElBQUksRUFBQyxRQUFRO1VBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1VBQ2YsY0FBYyxFQUFDLGNBQWM7VUFDN0IsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNHLEVBQUUsRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1VBQzdDLE1BQU0sRUFBRSxnQkFBQXpILEdBQUc7WUFBQSxPQUFJc0QsTUFBTSxDQUFDdEQsR0FBRyxDQUFDO1VBQUE7UUFBQyxFQUM3QixDQUNELENBQ04sRUFFTmQsR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDckIseUlBQ0k7VUFBSSxTQUFTLEVBQUM7UUFBbUIsR0FBRTBCLFlBQVksQ0FBQzBHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7VUFBSSxTQUFTLEVBQUM7UUFBbUIsR0FBRTFHLFlBQVksQ0FBQ3dHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7VUFBSSxTQUFTLEVBQUM7UUFBbUIsR0FBRXhHLFlBQVksQ0FBQ3lHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7VUFBSSxTQUFTLEVBQUMsbUJBQW1CO1VBQzdCLEtBQUssRUFBRTtZQUFDTCxVQUFVLEVBQUU7VUFBUTtRQUFFLGdCQUM5Qiw0REFBQyxzREFBUTtVQUNMLElBQUksRUFBQyxRQUFRO1VBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1VBQ2YsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNJLFFBQVEsRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1VBQ25ELE1BQU0sRUFBRSxnQkFBQTFILEdBQUc7WUFBQSxPQUFJdUQsT0FBTyxDQUFDdkQsR0FBRyxDQUFDO1VBQUE7UUFBQyxFQUM5QixDQUNELGVBQ0w7VUFBSSxTQUFTLEVBQUMsa0JBQWtCO1VBQUMsS0FBSyxFQUFFO1lBQUMrSCxVQUFVLEVBQUU7VUFBUTtRQUFFLGdCQUMzRCw0REFBQyxzREFBUTtVQUNMLElBQUksRUFBQyxRQUFRO1VBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1VBQ2YsY0FBYyxFQUFDLGNBQWM7VUFDN0IsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNHLEVBQUUsRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1VBQzdDLE1BQU0sRUFBRSxnQkFBQXpILEdBQUc7WUFBQSxPQUFJc0QsTUFBTSxDQUFDdEQsR0FBRyxDQUFDO1VBQUE7UUFBQyxFQUM3QixDQUNELENBQ04sRUFFTmQsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1VBQUksU0FBUyxFQUFDLG1CQUFtQjtVQUFDLEtBQUssRUFBRTtZQUFDTyxVQUFVLEVBQUU7VUFBUTtRQUFFLGdCQUM1RCw0REFBQyxzREFBUTtVQUNMLElBQUksRUFBQyxRQUFRO1VBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1VBQ2YsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNLLE1BQU0sRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1VBQ2pELE1BQU0sRUFBRSxnQkFBQTNILEdBQUc7WUFBQSxPQUFJZ0QsVUFBVSxDQUFDaEQsR0FBRyxDQUFDO1VBQUE7UUFBQyxFQUNqQyxDQUNELEVBRVJkLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLGlCQUNoQjtVQUFJLFNBQVMsRUFBQyxrQkFBa0I7VUFBQyxLQUFLLEVBQUU7WUFBQ08sVUFBVSxFQUFFO1VBQVE7UUFBRSxnQkFDM0QsNERBQUMsZ0VBQVk7VUFDVCxJQUFJLEVBQUdULEtBQUssQ0FBQ0csRUFBRSxHQUFHSCxLQUFLLENBQUNJO1FBQVUsRUFBRSxDQUFLLEVBRXBEeEksR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1VBQUksU0FBUyxFQUFDLGtCQUFrQjtVQUFDLEtBQUssRUFBRTtZQUFDTyxVQUFVLEVBQUU7VUFBUTtRQUFFLGdCQUMzRCw0REFBQyxnRUFBWTtVQUNULElBQUksRUFBSVQsS0FBSyxDQUFDRyxFQUFFLEdBQUdILEtBQUssQ0FBQ0ksUUFBUSxJQUFLLENBQUMsR0FBRyxHQUFHSixLQUFLLENBQUNLLE1BQU0sSUFBSSxHQUFHO1FBQUcsRUFBRSxDQUN4RSxDQUVWLENBRU4sQ0FFVixDQUVSO01BRVgsQ0FBQyxDQUFDO01BQ0Ysb0JBQ0kseUlBQ0k7UUFBSSxTQUFTLEVBQUMsTUFBTTtRQUFDLEdBQUcsRUFBRWhCLEtBQUssQ0FBQ2pGLEVBQUUsQ0FBQ1EsUUFBUSxFQUFHO1FBQzFDLFdBQVcsRUFBRSx1QkFBTTtVQUNmZ0UsT0FBTyxDQUFDUyxLQUFLLENBQUNqRixFQUFFLENBQUM7UUFDckIsQ0FBRTtRQUNGLFVBQVUsRUFBRSxzQkFBTTtVQUNkeUUsUUFBUSxDQUFDUSxLQUFLLENBQUNqRixFQUFFLENBQUM7UUFDdEI7TUFBRSxHQUVEeEMsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssSUFBSXRJLEdBQUcsQ0FBQzRJLEtBQUssS0FBSyxLQUFLLGlCQUN2Qyx5SUFDSTtRQUFJLFNBQVMsRUFBQztNQUFtQixnQkFBQyx1RUFBSW5CLEtBQUssQ0FBQ3NCLFNBQVMsQ0FBSyxDQUFLLGVBQy9EO1FBQUksT0FBTyxFQUFDLEdBQUc7UUFBQyxTQUFTLEVBQUMsT0FBTztRQUFDLHVCQUF1QixFQUFFO1VBQUNELE1BQU0sRUFBRWI7UUFBRztNQUFFLEVBQUUsQ0FDNUUsRUFHTmpJLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLElBQUl0SSxHQUFHLENBQUM0SSxLQUFLLEtBQUssS0FBSyxpQkFDdkMseUlBQ0k7UUFBSSxTQUFTLEVBQUM7TUFBbUIsZ0JBQUMsdUVBQUluQixLQUFLLENBQUNzQixTQUFTLENBQUssQ0FBSyxlQUMvRDtRQUFJLE9BQU8sRUFBQyxHQUFHO1FBQUMsU0FBUyxFQUFDLE9BQU87UUFBQyx1QkFBdUIsRUFBRTtVQUFDRCxNQUFNLEVBQUViO1FBQUc7TUFBRSxFQUFFLENBQzVFLEVBR05qSSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxJQUFJdEksR0FBRyxDQUFDNEksS0FBSyxLQUFLLEtBQUssaUJBQ3ZDLHlJQUNJO1FBQUksT0FBTyxFQUFDLEdBQUc7UUFBQyxTQUFTLEVBQUMsT0FBTztRQUFDLHVCQUF1QixFQUFFO1VBQUNFLE1BQU0sRUFBRWI7UUFBRztNQUFFLEVBQUUsQ0FDNUUsRUFHTmpJLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLElBQUl0SSxHQUFHLENBQUM0SSxLQUFLLEtBQUssS0FBSyxpQkFDdkMseUlBQ0k7UUFBSSxPQUFPLEVBQUMsR0FBRztRQUFDLFNBQVMsRUFBQyxPQUFPO1FBQUMsdUJBQXVCLEVBQUU7VUFBQ0UsTUFBTSxFQUFFYjtRQUFHO01BQUUsRUFBRSxDQUM1RSxDQUVOLEVBQ0pFLGlCQUFpQixFQUNqQm5JLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUNoQjtRQUFJLFNBQVMsRUFBQztNQUFNLEdBQ2YvRixHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxJQUFJdEksR0FBRyxDQUFDNEksS0FBSyxLQUFLLEtBQUssaUJBQ3ZDO1FBQUksT0FBTyxFQUFDLEdBQUc7UUFBQyxTQUFTLEVBQUM7TUFBa0IsZ0JBQ3hDLHVFQUFHLGNBQVksMkVBQUMsZ0VBQVk7UUFBQyxJQUFJLEVBQUViO01BQUcsRUFBRSxDQUFJLENBQUssRUFHeEQvSCxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxJQUFJdEksR0FBRyxDQUFDNEksS0FBSyxLQUFLLEtBQUssaUJBQ3ZDO1FBQUksT0FBTyxFQUFDLEdBQUc7UUFBQyxTQUFTLEVBQUM7TUFBa0IsZ0JBQ3hDLHVFQUFHLGNBQVksMkVBQUMsZ0VBQVk7UUFBQyxJQUFJLEVBQUViO01BQUcsRUFBRSxDQUFJLENBQUssRUFHeEQvSCxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxJQUFJdEksR0FBRyxDQUFDNEksS0FBSyxLQUFLLEtBQUssaUJBQ3ZDO1FBQUksT0FBTyxFQUFDLEdBQUc7UUFBQyxTQUFTLEVBQUM7TUFBa0IsZ0JBQ3hDLHVFQUFHLGNBQVksMkVBQUMsZ0VBQVk7UUFBQyxJQUFJLEVBQUViO01BQUcsRUFBRSxDQUFJLENBQUssRUFJeEQvSCxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxJQUFJdEksR0FBRyxDQUFDNEksS0FBSyxLQUFLLEtBQUssaUJBQ3ZDO1FBQUksT0FBTyxFQUFDLEdBQUc7UUFBQyxTQUFTLEVBQUM7TUFBa0IsZ0JBQ3hDLHVFQUFHLGNBQVksMkVBQUMsZ0VBQVk7UUFBQyxJQUFJLEVBQUViO01BQUcsRUFBRSxDQUFJLENBQUssQ0FHeEQsQ0FFVjtJQUVYLENBQUMsQ0FBQztJQUNGM0csa0JBQWtCLEdBQUdoQixPQUFPLENBQUNtSCxHQUFHLENBQUMsVUFBQ0UsS0FBSyxFQUFLO01BQ3hDLElBQUlNLEVBQUUsR0FBRyxDQUFDO01BQ1YsSUFBTXFCLHVCQUF1QixHQUFHbEosTUFBTSxDQUFDcUgsR0FBRyxDQUFDLFVBQUNhLEtBQUssRUFBSztRQUNsRCxJQUFJQSxLQUFLLENBQUMxQixNQUFNLEtBQUssSUFBSSxFQUFFO1VBQ3ZCLElBQUkwQixLQUFLLENBQUMxQixNQUFNLENBQUNsRSxFQUFFLEtBQUtpRixLQUFLLENBQUNqRixFQUFFLEVBQUU7WUFDOUIsSUFBSXhDLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLEVBQUU7Y0FDckJQLEVBQUUsR0FBR0EsRUFBRSxHQUFLSyxLQUFLLENBQUNHLEVBQUUsR0FBR0gsS0FBSyxDQUFDSSxRQUFRLElBQUssQ0FBQyxHQUFHLEdBQUdKLEtBQUssQ0FBQ0ssTUFBTSxJQUFJLEdBQUcsQ0FBRTtZQUMxRSxDQUFDLE1BQU07Y0FDSFYsRUFBRSxHQUFHQSxFQUFFLEdBQUlLLEtBQUssQ0FBQ0csRUFBRSxHQUFHSCxLQUFLLENBQUNJLFFBQVM7WUFDekM7VUFDSjtRQUNKO1FBRUEsb0JBQ0ksNEhBQ0t0SSxNQUFNLENBQUNtSixNQUFNLEtBQUssR0FBRyxpQkFDbEIsNEhBQ0tqQixLQUFLLENBQUMxQixNQUFNLEtBQUssSUFBSSxpQkFDbEIsNEhBQ0swQixLQUFLLENBQUMxQixNQUFNLENBQUNsRSxFQUFFLEtBQUtpRixLQUFLLENBQUNqRixFQUFFLGlCQUN6Qix3RUFDS3hDLEdBQUcsQ0FBQzRJLEtBQUssS0FBSyxLQUFLLGlCQUNoQjtVQUFJLFNBQVMsRUFBQztRQUFhLEdBQUVSLEtBQUssQ0FBQ1csU0FBUyxDQUFNLGVBRXRELHFGQUNJO1VBQU0sU0FBUyxFQUFDLHVCQUF1QjtVQUNqQyx1QkFBdUIsRUFBRTtZQUFDRCxNQUFNLEVBQUVWLEtBQUssQ0FBQ087VUFBVztRQUFFLEVBQUUsc0ZBQUssZUFDbEU7VUFBTyxLQUFLLEVBQUU7WUFBQ1csS0FBSyxFQUFFLE1BQU07WUFBRUMsU0FBUyxFQUFFO1VBQU0sQ0FBRTtVQUFDLE1BQU0sRUFBQyxHQUFHO1VBQ3JELFdBQVcsRUFBQyxHQUFHO1VBQUMsV0FBVyxFQUFDO1FBQUcsZ0JBQ2xDLHFGQUNJO1VBQUksU0FBUyxFQUFDO1FBQTRCLEdBQUMsV0FBTSxDQUFLLGVBQ3REO1VBQUksU0FBUyxFQUFDO1FBQWtDLEdBQUMsR0FBQyxFQUFDbkIsS0FBSyxDQUFDWSxLQUFLLENBQU0sQ0FDbkUsZUFDTCxxRkFDSTtVQUFJLFNBQVMsRUFBQztRQUE0QixHQUFDLGNBQVMsQ0FBSyxlQUN6RDtVQUFJLFNBQVMsRUFBQztRQUFrQyxnQkFDNUMsNERBQUMsZ0VBQVk7VUFDVCxJQUFJLEVBQUdaLEtBQUssQ0FBQ0k7UUFBVSxFQUFFLENBQUssQ0FDckMsZUFDTCxxRkFDSTtVQUFJLFNBQVMsRUFBQztRQUE0QixHQUFDLGdCQUMzQyxDQUFLLGVBQ0w7VUFBSSxTQUFTLEVBQUM7UUFBa0MsZ0JBQzVDLDREQUFDLGdFQUFZO1VBQ1QsSUFBSSxFQUFHSixLQUFLLENBQUNHO1FBQUksRUFBRSxDQUN0QixDQUNKLEVBQ0p2SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEIseUlBQ0kscUZBQ0k7VUFBSSxTQUFTLEVBQUM7UUFBNEIsR0FBQyxTQUFPLENBQUssZUFDdkQ7VUFBSSxTQUFTLEVBQUM7UUFBaUMsR0FBQyxHQUFDLEVBQUNGLEtBQUssQ0FBQ0ssTUFBTSxFQUFDLEdBQUMsQ0FBSyxDQUNwRSxDQUNOLGVBRVAscUZBQ0k7VUFBSSxTQUFTLEVBQUM7UUFBNEIsR0FBQyxhQUFXLENBQUssRUFDMUR6SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEIsNERBQUMsZ0VBQVk7VUFBQyxJQUFJLEVBQUdGLEtBQUssQ0FBQ0csRUFBRSxHQUFHSCxLQUFLLENBQUNJO1FBQVUsRUFBRSxFQUdyRHhJLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLGlCQUNoQiw0REFBQyxnRUFBWTtVQUNULElBQUksRUFBSUYsS0FBSyxDQUFDRyxFQUFFLEdBQUdILEtBQUssQ0FBQ0ksUUFBUSxJQUFLLENBQUMsR0FBRyxHQUFHSixLQUFLLENBQUNLLE1BQU0sSUFBSSxHQUFHO1FBQUcsRUFBRSxDQUU1RSxlQUNMLHdFQUNLekksR0FBRyxDQUFDa0ksSUFBSSxLQUFLLE1BQU0saUJBQ2hCO1VBQUksU0FBUyxFQUFDLG1CQUFtQjtVQUFDLE9BQU8sRUFBRSxDQUFFO1VBQ3pDLEtBQUssRUFBRTtZQUFDb0IsS0FBSyxFQUFFO1VBQU07UUFBRSxnQkFDdkI7VUFBRyxJQUFJLDJCQUFvQnRKLEdBQUcsQ0FBQ3dDLEVBQUUsY0FBSTRGLEtBQUssQ0FBQzVGLEVBQUUsY0FBSXhDLEdBQUcsQ0FBQzRELFFBQVEsQ0FBQ3BCLEVBQUU7UUFBRyxnQkFBQztVQUNoRSxTQUFTLEVBQUMsZ0NBQWdDO1VBQzFDLEtBQUssRUFBRTtZQUFDZ0gsUUFBUSxFQUFFO1VBQU0sQ0FBRTtVQUMxQixlQUFZLE1BQU07VUFDbEIsS0FBSyxFQUFDO1FBQVUsRUFBRSxDQUFJLGVBRTFCO1VBQUcsSUFBSSxFQUFDO1FBQUUsZ0JBQUM7VUFDUCxTQUFTLEVBQUMsNkJBQTZCO1VBQ3ZDLEtBQUssRUFBRTtZQUFDQSxRQUFRLEVBQUU7VUFBTSxDQUFFO1VBQzFCLGVBQVksTUFBTTtVQUNsQixLQUFLLEVBQUM7UUFBVyxFQUFFLENBQUksZUFFM0I7VUFBRyxPQUFPLEVBQUUsbUJBQU07WUFDZGhGLFdBQVcsQ0FBQzRELEtBQUssQ0FBQzVGLEVBQUUsQ0FBQztVQUN6QjtRQUFFLGdCQUFDO1VBQUcsU0FBUyxFQUFDLHNCQUFzQjtVQUNoQyxLQUFLLEVBQUU7WUFBQ2dILFFBQVEsRUFBRTtVQUFNLENBQUU7VUFDMUIsZUFBWSxNQUFNO1VBQ2xCLEtBQUssRUFBQztRQUFXLEVBQUUsQ0FBSSxDQUFLLENBR3pDLENBQ0QsQ0FDUCxDQUNKLENBRVYsQ0FFUixDQUVSO01BRVgsQ0FBQyxDQUFDO01BQ0Ysb0JBQ0kseUlBQ0k7UUFBSSxTQUFTLEVBQUM7TUFBYyxHQUN2QnhKLEdBQUcsQ0FBQzRJLEtBQUssS0FBSyxLQUFLLGlCQUNoQix5SUFDSTtRQUFJLFNBQVMsRUFBQztNQUFtQixHQUFFbkIsS0FBSyxDQUFDc0IsU0FBUyxDQUFNLGVBQ3hEO1FBQUksU0FBUyxFQUFDO01BQU8sR0FBRXRCLEtBQUssQ0FBQ2YsTUFBTSxlQUFDLHVFQUFLLGVBQ3JDO1FBQU0sS0FBSyxFQUFFO1VBQUMsU0FBTztRQUFPO01BQUUsR0FDckIxRyxHQUFHLENBQUNrSSxJQUFJLEtBQUssTUFBTSxpQkFDaEIseUlBRUk7UUFBRyxJQUFJLDRCQUFxQmxJLEdBQUcsQ0FBQ3dDLEVBQUUsY0FBSWlGLEtBQUssQ0FBQ2pGLEVBQUUsY0FBSXhDLEdBQUcsQ0FBQzRELFFBQVEsQ0FBQ3BCLEVBQUU7TUFBRyxnQkFBQztRQUNqRSxTQUFTLEVBQUMsZ0NBQWdDO1FBQzFDLEtBQUssRUFBRTtVQUFDZ0gsUUFBUSxFQUFFO1FBQU0sQ0FBRTtRQUFDLGVBQVksTUFBTTtRQUM3QyxLQUFLLEVBQUM7TUFBVSxFQUFFLENBQUksZUFFMUI7UUFBRyxPQUFPLEVBQUUsbUJBQU07VUFDZDVFLFlBQVksQ0FBQzZDLEtBQUssQ0FBQ2pGLEVBQUUsQ0FBQztRQUMxQjtNQUFFLGdCQUFDO1FBQUcsU0FBUyxFQUFDLHNCQUFzQjtRQUFDLEtBQUssRUFBRTtVQUFDZ0gsUUFBUSxFQUFFO1FBQU0sQ0FBRTtRQUMzRCxlQUFZLE1BQU07UUFDbEIsS0FBSyxFQUFDO01BQVcsRUFBRSxDQUFJLENBQzlCLENBRVIsQ0FDTixDQUNOLEVBR054SixHQUFHLENBQUM0SSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7UUFBSSxTQUFTLEVBQUM7TUFBTyxHQUFFbkIsS0FBSyxDQUFDZixNQUFNLGVBQUMsdUVBQUssZUFDckM7UUFBTSxLQUFLLEVBQUU7VUFBQyxTQUFPO1FBQU87TUFBRSxHQUNqQjFHLEdBQUcsQ0FBQ2tJLElBQUksS0FBSyxNQUFNLGlCQUNoQix5SUFHSTtRQUFHLElBQUksNEJBQXFCbEksR0FBRyxDQUFDd0MsRUFBRSxjQUFJaUYsS0FBSyxDQUFDakYsRUFBRSxjQUFJeEMsR0FBRyxDQUFDNEQsUUFBUSxDQUFDcEIsRUFBRTtNQUFHLGdCQUFDO1FBQ2pFLFNBQVMsRUFBQyxnQ0FBZ0M7UUFDMUMsS0FBSyxFQUFFO1VBQUNnSCxRQUFRLEVBQUU7UUFBTSxDQUFFO1FBQUMsZUFBWSxNQUFNO1FBQzdDLEtBQUssRUFBQztNQUFVLEVBQUUsQ0FBSSxlQUUxQjtRQUFHLE9BQU8sRUFBRSxtQkFBTTtVQUNkNUUsWUFBWSxDQUFDNkMsS0FBSyxDQUFDakYsRUFBRSxDQUFDO1FBQzFCO01BQUUsZ0JBQUM7UUFBRyxTQUFTLEVBQUMsc0JBQXNCO1FBQUMsS0FBSyxFQUFFO1VBQUNnSCxRQUFRLEVBQUU7UUFBTSxDQUFFO1FBQzNELGVBQVksTUFBTTtRQUNsQixLQUFLLEVBQUM7TUFBVyxFQUFFLENBQUksQ0FDOUIsQ0FFUixDQUNWLENBSVIsRUFFSkosdUJBQXVCLGVBRXhCO1FBQUksU0FBUyxFQUFDO01BQU0sR0FDZnBKLEdBQUcsQ0FBQzRJLEtBQUssS0FBSyxLQUFLLGlCQUNoQjtRQUFJLE9BQU8sRUFBQyxHQUFHO1FBQUMsU0FBUyxFQUFDO01BQWtCLGdCQUN4Qyx1RUFBRyxjQUFZLDJFQUFDLGdFQUFZO1FBQUMsSUFBSSxFQUFFYjtNQUFHLEVBQUUsQ0FBSSxDQUFLLEVBR3hEL0gsR0FBRyxDQUFDNEksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1FBQUksU0FBUyxFQUFDO01BQWtCLGdCQUM1Qix1RUFBRyxjQUFZLDJFQUFDLGdFQUFZO1FBQUMsSUFBSSxFQUFFYjtNQUFHLEVBQUUsQ0FBSSxDQUFLLENBRXhELENBQ047SUFFWCxDQUFDLENBQUM7RUFDTjtFQUNBLElBQUk3SCxNQUFNLEVBQUU7SUFDUm1CLGlCQUFpQixHQUFHbkIsTUFBTSxDQUFDcUgsR0FBRyxDQUFDLFVBQUNrQyxJQUFJLEVBQUs7TUFDckMsb0JBQ0ksNEhBQ0t2SixNQUFNLENBQUNtSixNQUFNLEtBQUssR0FBRyxpQkFDbEIsNEhBQ0tJLElBQUksQ0FBQy9DLE1BQU0sS0FBSyxJQUFJLGlCQUNqQix5SUFDSSxxRkFDSSxxRkFDSTtRQUFNLFNBQVMsRUFBQyx1QkFBdUI7UUFDakMsdUJBQXVCLEVBQUU7VUFBQ29DLE1BQU0sRUFBRVcsSUFBSSxDQUFDZDtRQUFXO01BQUUsRUFBRSxzRkFBSyxFQUNoRTNJLEdBQUcsQ0FBQzRJLEtBQUssS0FBSyxLQUFLLGlCQUNoQjtRQUNJLFNBQVMsRUFBQztNQUFvQyxHQUFFYSxJQUFJLENBQUNWLFNBQVMsQ0FBUSxlQUU5RTtRQUFPLEtBQUssRUFBRTtVQUFDTyxLQUFLLEVBQUU7UUFBTSxDQUFFO1FBQUMsTUFBTSxFQUFDLEdBQUc7UUFBQyxXQUFXLEVBQUMsR0FBRztRQUNsRCxXQUFXLEVBQUM7TUFBRyxnQkFDbEIscUZBQ0k7UUFBSSxTQUFTLEVBQUM7TUFBNEIsR0FBQyxXQUFNLENBQUssZUFDdEQ7UUFBSSxTQUFTLEVBQUM7TUFBa0MsR0FBRUcsSUFBSSxDQUFDVCxLQUFLLENBQU0sQ0FDakUsZUFDTCxxRkFDSTtRQUFJLFNBQVMsRUFBQztNQUE0QixHQUFDLGNBQVMsQ0FBSyxlQUN6RDtRQUFJLFNBQVMsRUFBQztNQUFrQyxnQkFBQyw0REFBQyxnRUFBWTtRQUMxRCxJQUFJLEVBQUVTLElBQUksQ0FBQ2pCO01BQVMsRUFBRSxDQUNyQixDQUNKLGVBQ0wscUZBQ0k7UUFBSSxTQUFTLEVBQUM7TUFBNEIsR0FBQyxnQkFBYyxDQUFLLGVBQzlEO1FBQUksU0FBUyxFQUFDO01BQWtDLGdCQUFDLDREQUFDLGdFQUFZO1FBQzFELElBQUksRUFBRWlCLElBQUksQ0FBQ2xCO01BQUcsRUFBRSxDQUFLLENBQ3hCLEVBQ0p2SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEIscUZBQ0k7UUFBSSxTQUFTLEVBQUM7TUFBNEIsR0FBQyxTQUFPLENBQUssZUFDdkQ7UUFBSSxTQUFTLEVBQUM7TUFBa0MsZ0JBQUMsNERBQUMsZ0VBQVk7UUFDMUQsSUFBSSxFQUFFbUIsSUFBSSxDQUFDaEI7TUFBTyxFQUFFLEtBQ3hCLENBQUssQ0FDSixlQUVULHFGQUNJO1FBQUksU0FBUyxFQUFDO01BQTRCLEdBQUMsYUFBVyxDQUFLLGVBQzNEO1FBQUksU0FBUyxFQUFDO01BQWtDLEdBQzNDekksR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCLDREQUFDLGdFQUFZO1FBQUMsSUFBSSxFQUFHbUIsSUFBSSxDQUFDbEIsRUFBRSxHQUFHa0IsSUFBSSxDQUFDakI7TUFBVSxFQUFFLEVBRW5EeEksR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCLHlJQUFFLDREQUFDLGdFQUFZO1FBQ1gsSUFBSSxFQUFJbUIsSUFBSSxDQUFDbEIsRUFBRSxHQUFHa0IsSUFBSSxDQUFDakIsUUFBUSxJQUFLLENBQUMsR0FBRyxHQUFHaUIsSUFBSSxDQUFDaEIsTUFBTSxJQUFJLEdBQUc7TUFBRyxFQUFFLENBQUcsQ0FFNUUsQ0FDSixlQUNMLHdFQUNLekksR0FBRyxDQUFDa0ksSUFBSSxLQUFLLE1BQU0saUJBQ2hCLHlJQUNJO1FBQUksU0FBUyxFQUFDLG1CQUFtQjtRQUFDLE9BQU8sRUFBRSxDQUFFO1FBQ3pDLEtBQUssRUFBRTtVQUFDb0IsS0FBSyxFQUFFO1FBQU07TUFBRSxnQkFDdkI7UUFBRyxJQUFJLDJCQUFvQnRKLEdBQUcsQ0FBQ3dDLEVBQUUsY0FBSWlILElBQUksQ0FBQ2pILEVBQUUsY0FBSXhDLEdBQUcsQ0FBQzRELFFBQVEsQ0FBQ3BCLEVBQUU7TUFBRyxnQkFBQztRQUMvRCxTQUFTLEVBQUMsZ0NBQWdDO1FBQzFDLEtBQUssRUFBRTtVQUFDZ0gsUUFBUSxFQUFFO1FBQU0sQ0FBRTtRQUMxQixlQUFZLE1BQU07UUFDbEIsS0FBSyxFQUFDO01BQVUsRUFBRSxDQUFJLGVBRTFCO1FBQUcsT0FBTyxFQUFFLG1CQUFNO1VBQ2RoRixXQUFXLENBQUNpRixJQUFJLENBQUNqSCxFQUFFLENBQUM7UUFDeEI7TUFBRSxnQkFBQztRQUFHLFNBQVMsRUFBQyxzQkFBc0I7UUFDaEMsS0FBSyxFQUFFO1VBQUNnSCxRQUFRLEVBQUU7UUFBTSxDQUFFO1FBQzFCLGVBQVksTUFBTTtRQUNsQixLQUFLLEVBQUM7TUFBVyxFQUFFLENBQUksQ0FBSyxDQUN2QyxDQUVOLENBQ0QsQ0FDUCxDQUNKLGVBQ0wscUZBQ0k7UUFBSSxPQUFPLEVBQUUsQ0FBRTtRQUFDLFNBQVMsRUFBQyxTQUFTO1FBQUMsS0FBSyxFQUFFO1VBQUNFLE1BQU0sRUFBRTtRQUFLO01BQUUsRUFBRSxDQUM1RCxDQUNOLENBRVIsQ0FFUjtJQUVYLENBQUMsQ0FBQztJQUNGekksV0FBVyxHQUFHZixNQUFNLENBQUNxSCxHQUFHLENBQUMsVUFBQ2EsS0FBSyxFQUFLO01BQ2hDLElBQUllLEtBQUssR0FBR1EsVUFBVSxDQUFDdkIsS0FBSyxDQUFDd0IsTUFBTSxDQUFDLEdBQUdELFVBQVUsQ0FBQ3ZCLEtBQUssQ0FBQ2MsS0FBSyxDQUFDO01BQzlELElBQUlELEtBQUssR0FBR2IsS0FBSyxDQUFDd0IsTUFBTTtNQUN4QixJQUFJVixLQUFLLEdBQUdkLEtBQUssQ0FBQ2MsS0FBSztNQUN2QixJQUFJVyxHQUFHLEdBQUd6QixLQUFLLENBQUM1RixFQUFFO01BQ2xCLElBQUlzSCxFQUFFLEdBQUcsRUFBRTtNQUVYLElBQUk5SixHQUFHLENBQUNrSSxJQUFJLEtBQUssUUFBUSxFQUFFO1FBQ3ZCNEIsRUFBRSxHQUFHMUIsS0FBSyxDQUFDTyxXQUFXLEdBQUcsbUNBQW1DLEdBQUdQLEtBQUssQ0FBQzVGLEVBQUUsR0FBRyxXQUFXO01BQ3pGLENBQUMsTUFBTTtRQUNIc0gsRUFBRSxHQUFHMUIsS0FBSyxDQUFDTyxXQUFXLEdBQUcsbUNBQW1DLEdBQUdQLEtBQUssQ0FBQzVGLEVBQUUsR0FBRyxPQUFPLEdBQzdFLHlCQUF5QixHQUFHeEMsR0FBRyxDQUFDd0MsRUFBRSxHQUFHLEdBQUcsR0FBRzRGLEtBQUssQ0FBQzVGLEVBQUUsR0FBRyxHQUFHLEdBQUd4QyxHQUFHLENBQUM0RCxRQUFRLENBQUNwQixFQUFFLEdBQUcsNkhBQTZILEdBQzNNLHFCQUFxQixHQUFHcUgsR0FBRyxHQUFHLG9IQUFvSCxHQUNsSixNQUFNO01BQ2Q7TUFFQSxvQkFDSSw0SEFDS3pCLEtBQUssQ0FBQzFCLE1BQU0sS0FBSyxJQUFJLGlCQUNsQjtRQUFJLEdBQUcsRUFBRTBCLEtBQUssQ0FBQzVGLEVBQUUsQ0FBQ1EsUUFBUSxFQUFHO1FBQUMsV0FBVyxFQUFFLHVCQUFNO1VBQzdDOEQsTUFBTSxDQUFDc0IsS0FBSyxDQUFDNUYsRUFBRSxDQUFDO1FBQ3BCLENBQUU7UUFBQyxVQUFVLEVBQUUsc0JBQU07VUFDakJ1RSxPQUFPLENBQUNxQixLQUFLLENBQUM1RixFQUFFLENBQUM7UUFDckI7TUFBRSxHQUNHeEMsR0FBRyxDQUFDNEksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1FBQUksU0FBUyxFQUFDLG1CQUFtQjtRQUFDLEtBQUssRUFBRTtVQUFDQyxVQUFVLEVBQUU7UUFBUSxDQUFFO1FBQzVELHVCQUF1QixFQUFFO1VBQUNDLE1BQU0sRUFBRVYsS0FBSyxDQUFDVztRQUFTO01BQUUsRUFBRSxlQUc3RDtRQUFJLFNBQVMsRUFBQyxpQkFBaUI7UUFBQyx1QkFBdUIsRUFBRTtVQUFDRCxNQUFNLEVBQUVnQjtRQUFFO01BQUUsRUFBRSxlQUV4RTtRQUFJLFNBQVMsRUFBQyxtQkFBbUI7UUFBQyxLQUFLLEVBQUU7VUFBQ2pCLFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQzVELDREQUFDLHNEQUFRO1FBQ0wsSUFBSSxFQUFDLE1BQU07UUFDWCxJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7UUFDZixZQUFZLEVBQUU0RixLQUFLLENBQUNZLEtBQU07UUFDMUIsTUFBTSxFQUFFLGdCQUFBbEksR0FBRztVQUFBLE9BQUl3RCxTQUFTLENBQUN4RCxHQUFHLENBQUM7UUFBQTtNQUFDLEVBQ2hDLENBQ0QsRUFDSmQsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE1BQU0saUJBQ2hCO1FBQUksU0FBUyxFQUFDLG1CQUFtQjtRQUFDLEtBQUssRUFBRTtVQUFDOEMsVUFBVSxFQUFFO1FBQVE7TUFBRSxnQkFDNUQsNERBQUMsc0RBQVE7UUFDTCxJQUFJLEVBQUMsUUFBUTtRQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztRQUNmLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDSSxRQUFRLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtRQUNuRCxNQUFNLEVBQUUsZ0JBQUExSCxHQUFHO1VBQUEsT0FBSXVELE9BQU8sQ0FBQ3ZELEdBQUcsQ0FBQztRQUFBO01BQUMsRUFDOUIsQ0FDRCxFQUVSZCxHQUFHLENBQUMrRixJQUFJLEtBQUssT0FBTyxpQkFDakIseUlBQ0k7UUFBSSxTQUFTLEVBQUMsbUJBQW1CO1FBQUMsS0FBSyxFQUFFO1VBQUM4QyxVQUFVLEVBQUU7UUFBUTtNQUFFLGdCQUM1RCw0REFBQyxzREFBUTtRQUNMLElBQUksRUFBQyxRQUFRO1FBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1FBQ2YsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNJLFFBQVEsRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1FBQ25ELE1BQU0sRUFBRSxnQkFBQTFILEdBQUc7VUFBQSxPQUFJdUQsT0FBTyxDQUFDdkQsR0FBRyxDQUFDO1FBQUE7TUFBQyxFQUM5QixDQUNELGVBQ0w7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRTJCLFlBQVksQ0FBQ3dHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRXhHLFlBQVksQ0FBQ3lHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7UUFBSSxTQUFTLEVBQUMsa0JBQWtCO1FBQUMsS0FBSyxFQUFFO1VBQUNMLFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQzNELDREQUFDLHNEQUFRO1FBQ0wsSUFBSSxFQUFDLFFBQVE7UUFDYixJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7UUFDZixjQUFjLEVBQUMsY0FBYztRQUM3QixZQUFZLEVBQUVDLFlBQVksQ0FBQzJGLEtBQUssQ0FBQ0csRUFBRSxFQUFFLENBQUMsRUFBRSxHQUFHLENBQUU7UUFDN0MsTUFBTSxFQUFFLGdCQUFBekgsR0FBRztVQUFBLE9BQUlzRCxNQUFNLENBQUN0RCxHQUFHLENBQUM7UUFBQTtNQUFDLEVBQzdCLENBQ0QsRUFDSmQsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1FBQUksU0FBUyxFQUFDLG1CQUFtQjtRQUFDLEtBQUssRUFBRTtVQUFDTyxVQUFVLEVBQUU7UUFBUTtNQUFFLGdCQUM1RCw0REFBQyxzREFBUTtRQUNMLElBQUksRUFBQyxRQUFRO1FBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1FBQ2YsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNLLE1BQU0sRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1FBQ2pELE1BQU0sRUFBRSxnQkFBQTNILEdBQUc7VUFBQSxPQUFJZ0QsVUFBVSxDQUFDaEQsR0FBRyxDQUFDO1FBQUE7TUFBQyxFQUNqQyxDQUNELEVBRVJkLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLGlCQUNoQjtRQUFJLFNBQVMsRUFBQyxrQkFBa0I7UUFBQyxLQUFLLEVBQUU7VUFBQ08sVUFBVSxFQUFFO1FBQVE7TUFBRSxnQkFBQyw0REFBQyxnRUFBWTtRQUN6RSxJQUFJLEVBQUdULEtBQUssQ0FBQ0csRUFBRSxHQUFHSCxLQUFLLENBQUNJO01BQVUsRUFBRSxDQUFLLEVBRWhEeEksR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1FBQUksU0FBUyxFQUFDLGtCQUFrQjtRQUFDLEtBQUssRUFBRTtVQUFDTyxVQUFVLEVBQUU7UUFBUTtNQUFFLGdCQUFDLDREQUFDLGdFQUFZO1FBQ3pFLElBQUksRUFBSVQsS0FBSyxDQUFDRyxFQUFFLEdBQUdILEtBQUssQ0FBQ0ksUUFBUSxJQUFLLENBQUMsR0FBRyxHQUFHSixLQUFLLENBQUNLLE1BQU0sSUFBSSxHQUFHO01BQUcsRUFBRSxDQUFLLENBRW5GLEVBRU56SSxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDaEIseUlBQ0k7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRXRELFlBQVksQ0FBQzBHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRTFHLFlBQVksQ0FBQ3dHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRXhHLFlBQVksQ0FBQ3lHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sQ0FDckUsRUFFTmxKLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLHlJQUNJO1FBQUksU0FBUyxFQUFDLG1CQUFtQjtRQUFDLEtBQUssRUFBRTtVQUFDOEMsVUFBVSxFQUFFO1FBQVE7TUFBRSxnQkFDNUQsNERBQUMsc0RBQVE7UUFDTCxJQUFJLEVBQUMsUUFBUTtRQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztRQUNmLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDSSxRQUFRLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtRQUNuRCxNQUFNLEVBQUUsZ0JBQUExSCxHQUFHO1VBQUEsT0FBSXVELE9BQU8sQ0FBQ3ZELEdBQUcsQ0FBQztRQUFBO01BQUMsRUFDOUIsQ0FDRCxlQUNMO1FBQUksU0FBUyxFQUFDLGtCQUFrQjtRQUFDLEtBQUssRUFBRTtVQUFDK0gsVUFBVSxFQUFFO1FBQVE7TUFBRSxnQkFDM0QsNERBQUMsc0RBQVE7UUFDTCxJQUFJLEVBQUMsUUFBUTtRQUNiLElBQUksRUFBRVQsS0FBSyxDQUFDNUYsRUFBRztRQUNmLGNBQWMsRUFBQyxjQUFjO1FBQzdCLFlBQVksRUFBRUMsWUFBWSxDQUFDMkYsS0FBSyxDQUFDRyxFQUFFLEVBQUUsQ0FBQyxFQUFFLEdBQUcsQ0FBRTtRQUM3QyxNQUFNLEVBQUUsZ0JBQUF6SCxHQUFHO1VBQUEsT0FBSXNELE1BQU0sQ0FBQ3RELEdBQUcsQ0FBQztRQUFBO01BQUMsRUFDN0IsQ0FDRCxFQUNKZCxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7UUFBSSxTQUFTLEVBQUMsbUJBQW1CO1FBQUMsS0FBSyxFQUFFO1VBQUNPLFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQzVELDREQUFDLHNEQUFRO1FBQ0wsSUFBSSxFQUFDLFFBQVE7UUFDYixJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7UUFDZixZQUFZLEVBQUVDLFlBQVksQ0FBQzJGLEtBQUssQ0FBQ0ssTUFBTSxFQUFFLENBQUMsRUFBRSxHQUFHLENBQUU7UUFDakQsTUFBTSxFQUFFLGdCQUFBM0gsR0FBRztVQUFBLE9BQUlnRCxVQUFVLENBQUNoRCxHQUFHLENBQUM7UUFBQTtNQUFDLEVBQ2pDLENBQ0QsRUFFUmQsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1FBQUksU0FBUyxFQUFDLGtCQUFrQjtRQUFDLEtBQUssRUFBRTtVQUFDTyxVQUFVLEVBQUU7UUFBUTtNQUFFLGdCQUFDLDREQUFDLGdFQUFZO1FBQ3pFLElBQUksRUFBR1QsS0FBSyxDQUFDRyxFQUFFLEdBQUdILEtBQUssQ0FBQ0k7TUFBVSxFQUFFLENBQUssRUFFaER4SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7UUFBSSxTQUFTLEVBQUMsa0JBQWtCO1FBQUMsS0FBSyxFQUFFO1VBQUNPLFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQUMsNERBQUMsZ0VBQVk7UUFDekUsSUFBSSxFQUFJVCxLQUFLLENBQUNHLEVBQUUsR0FBR0gsS0FBSyxDQUFDSSxRQUFRLElBQUssQ0FBQyxHQUFHLEdBQUdKLEtBQUssQ0FBQ0ssTUFBTSxJQUFJLEdBQUc7TUFBRyxFQUFFLENBQUssQ0FFbkYsRUFFTnpJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLDRIQUNLL0YsR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDckIseUlBQ0k7UUFBSSxTQUFTLEVBQUMsbUJBQW1CO1FBQUMsS0FBSyxFQUFFO1VBQUM4SCxVQUFVLEVBQUU7UUFBUTtNQUFFLGdCQUM1RCw0REFBQyxzREFBUTtRQUNMLElBQUksRUFBQyxRQUFRO1FBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1FBQ2YsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNJLFFBQVEsRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1FBQ25ELE1BQU0sRUFBRSxnQkFBQTFILEdBQUc7VUFBQSxPQUFJdUQsT0FBTyxDQUFDdkQsR0FBRyxDQUFDO1FBQUE7TUFBQyxFQUM5QixDQUNELGVBQ0w7UUFBSSxTQUFTLEVBQUMsa0JBQWtCO1FBQUMsS0FBSyxFQUFFO1VBQUMrSCxVQUFVLEVBQUU7UUFBUTtNQUFFLGdCQUMzRCw0REFBQyxzREFBUTtRQUNMLElBQUksRUFBQyxRQUFRO1FBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1FBQ2YsY0FBYyxFQUFDLGNBQWM7UUFDN0IsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNHLEVBQUUsRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1FBQzdDLE1BQU0sRUFBRSxnQkFBQXpILEdBQUc7VUFBQSxPQUFJc0QsTUFBTSxDQUFDdEQsR0FBRyxDQUFDO1FBQUE7TUFBQyxFQUM3QixDQUNELENBQ04sRUFFTmQsR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDckIseUlBQ0k7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRTBCLFlBQVksQ0FBQzBHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRTFHLFlBQVksQ0FBQ3dHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRXhHLFlBQVksQ0FBQ3lHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7UUFBSSxTQUFTLEVBQUMsbUJBQW1CO1FBQUMsS0FBSyxFQUFFO1VBQUNMLFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQzVELDREQUFDLHNEQUFRO1FBQ0wsSUFBSSxFQUFDLFFBQVE7UUFDYixJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7UUFDZixZQUFZLEVBQUVDLFlBQVksQ0FBQzJGLEtBQUssQ0FBQ0ksUUFBUSxFQUFFLENBQUMsRUFBRSxHQUFHLENBQUU7UUFDbkQsTUFBTSxFQUFFLGdCQUFBMUgsR0FBRztVQUFBLE9BQUl1RCxPQUFPLENBQUN2RCxHQUFHLENBQUM7UUFBQTtNQUFDLEVBQzlCLENBQ0QsZUFDTDtRQUFJLFNBQVMsRUFBQyxrQkFBa0I7UUFBQyxLQUFLLEVBQUU7VUFBQytILFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQzNELDREQUFDLHNEQUFRO1FBQ0wsSUFBSSxFQUFDLFFBQVE7UUFDYixJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7UUFDZixjQUFjLEVBQUMsY0FBYztRQUM3QixZQUFZLEVBQUVDLFlBQVksQ0FBQzJGLEtBQUssQ0FBQ0csRUFBRSxFQUFFLENBQUMsRUFBRSxHQUFHLENBQUU7UUFDN0MsTUFBTSxFQUFFLGdCQUFBekgsR0FBRztVQUFBLE9BQUlzRCxNQUFNLENBQUN0RCxHQUFHLENBQUM7UUFBQTtNQUFDLEVBQzdCLENBQ0QsQ0FDTixFQUVOZCxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7UUFBSSxTQUFTLEVBQUMsbUJBQW1CO1FBQUMsS0FBSyxFQUFFO1VBQUNPLFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQzVELDREQUFDLHNEQUFRO1FBQ0wsSUFBSSxFQUFDLFFBQVE7UUFDYixJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7UUFDZixZQUFZLEVBQUVDLFlBQVksQ0FBQzJGLEtBQUssQ0FBQ0ssTUFBTSxFQUFFLENBQUMsRUFBRSxHQUFHLENBQUU7UUFDakQsTUFBTSxFQUFFLGdCQUFBM0gsR0FBRztVQUFBLE9BQUlnRCxVQUFVLENBQUNoRCxHQUFHLENBQUM7UUFBQTtNQUFDLEVBQ2pDLENBQ0QsRUFFUmQsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1FBQUksU0FBUyxFQUFDLGtCQUFrQjtRQUFDLEtBQUssRUFBRTtVQUFDTyxVQUFVLEVBQUU7UUFBUTtNQUFFLGdCQUFDLDREQUFDLGdFQUFZO1FBQ3pFLElBQUksRUFBR1QsS0FBSyxDQUFDRyxFQUFFLEdBQUdILEtBQUssQ0FBQ0k7TUFBVSxFQUFFLENBQUssRUFFaER4SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7UUFBSSxTQUFTLEVBQUMsa0JBQWtCO1FBQUMsS0FBSyxFQUFFO1VBQUNPLFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQUMsNERBQUMsZ0VBQVk7UUFDekUsSUFBSSxFQUFJVCxLQUFLLENBQUNHLEVBQUUsR0FBR0gsS0FBSyxDQUFDSSxRQUFRLElBQUssQ0FBQyxHQUFHLEdBQUdKLEtBQUssQ0FBQ0ssTUFBTSxJQUFJLEdBQUc7TUFBRyxFQUFFLENBQUssQ0FFbkYsRUFFTnpJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLDRIQUNLL0YsR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDckIseUlBQ0k7UUFBSSxTQUFTLEVBQUMsbUJBQW1CO1FBQUMsS0FBSyxFQUFFO1VBQUM4SCxVQUFVLEVBQUU7UUFBUTtNQUFFLGdCQUM1RCw0REFBQyxzREFBUTtRQUNMLElBQUksRUFBQyxRQUFRO1FBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1FBQ2YsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNJLFFBQVEsRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1FBQ25ELE1BQU0sRUFBRSxnQkFBQTFILEdBQUc7VUFBQSxPQUFJdUQsT0FBTyxDQUFDdkQsR0FBRyxDQUFDO1FBQUE7TUFBQyxFQUM5QixDQUNELGVBQ0w7UUFBSSxTQUFTLEVBQUMsa0JBQWtCO1FBQUMsS0FBSyxFQUFFO1VBQUMrSCxVQUFVLEVBQUU7UUFBUTtNQUFFLGdCQUMzRCw0REFBQyxzREFBUTtRQUNMLElBQUksRUFBQyxRQUFRO1FBQ2IsSUFBSSxFQUFFVCxLQUFLLENBQUM1RixFQUFHO1FBQ2YsY0FBYyxFQUFDLGNBQWM7UUFDN0IsWUFBWSxFQUFFQyxZQUFZLENBQUMyRixLQUFLLENBQUNHLEVBQUUsRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFFO1FBQzdDLE1BQU0sRUFBRSxnQkFBQXpILEdBQUc7VUFBQSxPQUFJc0QsTUFBTSxDQUFDdEQsR0FBRyxDQUFDO1FBQUE7TUFBQyxFQUM3QixDQUNELENBQ04sRUFFTmQsR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDckIseUlBQ0k7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRTBCLFlBQVksQ0FBQzBHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRTFHLFlBQVksQ0FBQ3dHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7UUFBSSxTQUFTLEVBQUM7TUFBbUIsR0FBRXhHLFlBQVksQ0FBQ3lHLEtBQUssRUFBRSxDQUFDLEVBQUUsR0FBRyxDQUFDLENBQU0sZUFDcEU7UUFBSSxTQUFTLEVBQUMsbUJBQW1CO1FBQUMsS0FBSyxFQUFFO1VBQUNMLFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQzVELDREQUFDLHNEQUFRO1FBQ0wsSUFBSSxFQUFDLFFBQVE7UUFDYixJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7UUFDZixZQUFZLEVBQUVDLFlBQVksQ0FBQzJGLEtBQUssQ0FBQ0ksUUFBUSxFQUFFLENBQUMsRUFBRSxHQUFHLENBQUU7UUFDbkQsTUFBTSxFQUFFLGdCQUFBMUgsR0FBRztVQUFBLE9BQUl1RCxPQUFPLENBQUN2RCxHQUFHLENBQUM7UUFBQTtNQUFDLEVBQzlCLENBQ0QsZUFDTDtRQUFJLFNBQVMsRUFBQyxrQkFBa0I7UUFBQyxLQUFLLEVBQUU7VUFBQytILFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQzNELDREQUFDLHNEQUFRO1FBQ0wsSUFBSSxFQUFDLFFBQVE7UUFDYixJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7UUFDZixjQUFjLEVBQUMsY0FBYztRQUM3QixZQUFZLEVBQUVDLFlBQVksQ0FBQzJGLEtBQUssQ0FBQ0csRUFBRSxFQUFFLENBQUMsRUFBRSxHQUFHLENBQUU7UUFDN0MsTUFBTSxFQUFFLGdCQUFBekgsR0FBRztVQUFBLE9BQUlzRCxNQUFNLENBQUN0RCxHQUFHLENBQUM7UUFBQTtNQUFDLEVBQzdCLENBQ0QsQ0FDTixFQUVOZCxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7UUFBSSxTQUFTLEVBQUMsbUJBQW1CO1FBQUMsS0FBSyxFQUFFO1VBQUNPLFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQzVELDREQUFDLHNEQUFRO1FBQ0wsSUFBSSxFQUFDLFFBQVE7UUFDYixJQUFJLEVBQUVULEtBQUssQ0FBQzVGLEVBQUc7UUFDZixZQUFZLEVBQUVDLFlBQVksQ0FBQzJGLEtBQUssQ0FBQ0ssTUFBTSxFQUFFLENBQUMsRUFBRSxHQUFHLENBQUU7UUFDakQsTUFBTSxFQUFFLGdCQUFBM0gsR0FBRztVQUFBLE9BQUlnRCxVQUFVLENBQUNoRCxHQUFHLENBQUM7UUFBQTtNQUFDLEVBQ2pDLENBQ0QsRUFFUmQsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCO1FBQUksU0FBUyxFQUFDLGtCQUFrQjtRQUFDLEtBQUssRUFBRTtVQUFDTyxVQUFVLEVBQUU7UUFBUTtNQUFFLGdCQUFDLDREQUFDLGdFQUFZO1FBQ3pFLElBQUksRUFBR1QsS0FBSyxDQUFDRyxFQUFFLEdBQUdILEtBQUssQ0FBQ0k7TUFBVSxFQUFFLENBQUssRUFFaER4SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7UUFBSSxTQUFTLEVBQUMsa0JBQWtCO1FBQUMsS0FBSyxFQUFFO1VBQUNPLFVBQVUsRUFBRTtRQUFRO01BQUUsZ0JBQUMsNERBQUMsZ0VBQVk7UUFDekUsSUFBSSxFQUFJVCxLQUFLLENBQUNHLEVBQUUsR0FBR0gsS0FBSyxDQUFDSSxRQUFRLElBQUssQ0FBQyxHQUFHLEdBQUdKLEtBQUssQ0FBQ0ssTUFBTSxJQUFJLEdBQUc7TUFBRyxFQUFFLENBQUssQ0FFbkYsQ0FFTixDQUVWO0lBRVgsQ0FBQyxDQUFDO0VBQ047RUFDQSxJQUFJekksR0FBRyxFQUFFO0lBQ0wsSUFBSUEsR0FBRyxDQUFDK0osT0FBTyxLQUFLLElBQUksRUFBRTtNQUN0QixJQUFJQSxPQUFPLEdBQUcvSixHQUFHLENBQUMrSixPQUFPO01BQ3pCN0ksWUFBWSxHQUFHNkksT0FBTyxDQUFDeEMsR0FBRyxDQUFDLFVBQUN5QyxJQUFJLEVBQUs7UUFDakMsb0JBQ0ksNEhBQ0tBLElBQUksQ0FBQzlCLElBQUksS0FBSyxRQUFRLGlCQUNuQix5SUFDSSw0SEFDS2xJLEdBQUcsQ0FBQzRJLEtBQUssS0FBSyxLQUFLLElBQUk1SSxHQUFHLENBQUNlLFdBQVcsS0FBSyxJQUFJLGlCQUM1Qyw0SEFDS2YsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCLHFGQUNJO1VBQUksT0FBTyxFQUFDLEdBQUc7VUFBQyxTQUFTLEVBQUM7UUFBTyxnQkFBQyw0REFBQyxzREFBTTtVQUNyQyxNQUFNLEVBQUM7UUFBWSxHQUFFMEIsSUFBSSxDQUFDQyxJQUFJLENBQVUsT0FBRyx5RkFBTSxhQUFRLEVBQUNELElBQUksQ0FBQ0UsU0FBUyxDQUFRLENBQy9FLGVBQ0w7VUFBSSxTQUFTLEVBQUM7UUFBa0IsZ0JBQUMsNERBQUMsZ0VBQVk7VUFBQyxJQUFJLEVBQUVGLElBQUksQ0FBQ0c7UUFBUSxFQUFFLENBQy9ELENBQ0osRUFFUm5LLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLGlCQUNoQixxRkFDSTtVQUFJLE9BQU8sRUFBQyxHQUFHO1VBQUMsU0FBUyxFQUFDO1FBQU8sZ0JBQUMsNERBQUMsc0RBQU07VUFDckMsTUFBTSxFQUFDO1FBQVksR0FBRTBCLElBQUksQ0FBQ0MsSUFBSSxDQUFVLE9BQUcseUZBQU0sYUFBUSxFQUFDRCxJQUFJLENBQUNFLFNBQVMsQ0FBUSxDQUMvRSxlQUNMO1VBQUksU0FBUyxFQUFDO1FBQWtCLGdCQUFDLDREQUFDLGdFQUFZO1VBQUMsSUFBSSxFQUFFRixJQUFJLENBQUNHO1FBQVEsRUFBRSxDQUMvRCxDQUNKLEVBRVJqSixZQUFZLENBQ2QsRUFFTmxCLEdBQUcsQ0FBQzRJLEtBQUssS0FBSyxLQUFLLElBQUk1SSxHQUFHLENBQUNlLFdBQVcsS0FBSyxJQUFJLGlCQUM1Qyw0SEFDS2YsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCLHFGQUNJO1VBQUksT0FBTyxFQUFDLEdBQUc7VUFBQyxTQUFTLEVBQUM7UUFBTyxnQkFBQyw0REFBQyxzREFBTTtVQUNyQyxNQUFNLEVBQUM7UUFBWSxHQUFFMEIsSUFBSSxDQUFDQyxJQUFJLENBQVUsT0FBRyx5RkFBTSxhQUFRLEVBQUNELElBQUksQ0FBQ0UsU0FBUyxDQUFRLENBQy9FLGVBQ0w7VUFBSSxTQUFTLEVBQUM7UUFBa0IsZ0JBQUMsNERBQUMsZ0VBQVk7VUFBQyxJQUFJLEVBQUVGLElBQUksQ0FBQ0c7UUFBUSxFQUFFLENBQy9ELENBQ0osRUFFUm5LLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLGlCQUNoQixxRkFDSTtVQUFJLE9BQU8sRUFBQyxHQUFHO1VBQUMsU0FBUyxFQUFDO1FBQU8sZ0JBQUMsNERBQUMsc0RBQU07VUFDckMsTUFBTSxFQUFDO1FBQVksR0FBRTBCLElBQUksQ0FBQ0MsSUFBSSxDQUFVLE9BQUcseUZBQU0sYUFBUSxFQUFDRCxJQUFJLENBQUNFLFNBQVMsQ0FBUSxDQUMvRSxlQUNMO1VBQUksU0FBUyxFQUFDO1FBQWtCLGdCQUFDLDREQUFDLGdFQUFZO1VBQUMsSUFBSSxFQUFFRixJQUFJLENBQUNHO1FBQVEsRUFBRSxDQUMvRCxDQUNKLEVBRVJqSixZQUFZLENBQ2QsQ0FFUixDQUNKLENBRVI7TUFFWCxDQUFDLENBQUM7SUFDTjtFQUNKO0VBRUEsSUFBTWtKLE1BQU07SUFBQSx3RUFBRyxtQkFBT0MsQ0FBQztNQUFBO1FBQUE7VUFBQTtZQUNuQjVLLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsTUFBTSxDQUFDO1lBQUM7WUFBQSxPQUN6QjdELGtEQUFLLENBQUM7Y0FDUitELE1BQU0sRUFBRSxLQUFLO2NBQ2JDLEdBQUcsRUFBRSx1QkFBdUIsR0FBRzZHO1lBQ25DLENBQUMsQ0FBQyxDQUFDNUcsSUFBSSxDQUFDLFVBQVVDLFFBQVEsRUFBRTtjQUN4QnBCLFFBQVEsQ0FBQzZCLE1BQU0sRUFBRTtZQUNyQixDQUFDLENBQUMsU0FBTSxDQUFDLFVBQVVOLEtBQUssRUFBRTtjQUN0QnBFLDhDQUFDLENBQUMsYUFBYSxDQUFDLENBQUM0RCxLQUFLLENBQUMsUUFBUSxDQUFDO2NBQ2hDaEIsTUFBTSxDQUFDNUMsQ0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDNEQsS0FBSyxDQUFDLE1BQU0sQ0FBQztZQUMxQyxDQUFDLENBQUM7VUFBQTtVQUFBO1lBQUE7UUFBQTtNQUFBO0lBQUEsQ0FDTDtJQUFBLGdCQVhLK0csTUFBTTtNQUFBO0lBQUE7RUFBQSxHQVdYO0VBRUQsb0JBQ0ksNEhBQ0t0SyxPQUFPLEtBQUssSUFBSSxpQkFDYix5SUFDSTtJQUFLLFNBQVMsRUFBQyxrQkFBa0I7SUFBQyxFQUFFLEVBQUMsV0FBVztJQUFDLFFBQVEsRUFBQyxJQUFJO0lBQUMsSUFBSSxFQUFDLFFBQVE7SUFDdkUsbUJBQWdCLGNBQWM7SUFDOUIsZUFBWTtFQUFNLGdCQUNuQjtJQUFLLFNBQVMsRUFBQyw0Q0FBNEM7SUFBQyxJQUFJLEVBQUM7RUFBVSxnQkFDdkU7SUFBSyxTQUFTLEVBQUM7RUFBZSxnQkFDMUI7SUFBSyxTQUFTLEVBQUM7RUFBaUMsZ0JBQzVDO0lBQUksU0FBUyxFQUFDLHdCQUF3QjtJQUFDLEVBQUUsRUFBQztFQUFtQixHQUFDLHFCQUNwRCxDQUFLLENBQ2IsZUFDTjtJQUFLLFNBQVMsRUFBQztFQUF3QixnQkFDbkM7SUFBSyxTQUFTLEVBQUM7RUFBTSxnQkFDakI7SUFBTyxFQUFFLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDd0osS0FBSyxFQUFFLE1BQU07TUFBRWdCLFFBQVEsRUFBRTtJQUFPO0VBQUUsZ0JBQ3hEO0lBQUksU0FBUyxFQUFDLG1CQUFtQjtJQUM3QixLQUFLLEVBQUU7TUFBQ2QsUUFBUSxFQUFFO0lBQU07RUFBRSxHQUN6QnhKLEdBQUcsQ0FBQzRJLEtBQUssS0FBSyxLQUFLLGlCQUNoQjtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFFBQUcsQ0FBSyxlQUU5QztJQUFJLEtBQUssRUFBRTtNQUFDMkIsU0FBUyxFQUFFLE1BQU07TUFBRUMsT0FBTyxFQUFFO0lBQU07RUFBRSxHQUFDLGdCQUVqRCxDQUFLLENBQ0osRUFDSnBKLGtCQUFrQixFQUNsQkMsaUJBQWlCLENBQ2QsQ0FDTixDQUNKLENBQ0osQ0FDSixDQUNKLGVBRU47SUFBSyxTQUFTLEVBQUMsZUFBZTtJQUFDLEtBQUssRUFBRTtNQUFDbUosT0FBTyxFQUFFO0lBQU87RUFBRSxnQkFDckQ7SUFBSyxTQUFTLEVBQUM7RUFBVyxnQkFDdEI7SUFBSSxTQUFTLEVBQUM7RUFBa0MsR0FBRXhLLEdBQUcsQ0FBQ3lLLE1BQU0sQ0FBQ0MsU0FBUyxDQUFDQyxXQUFXLEVBQUUsQ0FBTSxlQUMxRjtJQUFJLFNBQVMsRUFBQztFQUF5QyxHQUFFM0ssR0FBRyxDQUFDNEQsUUFBUSxDQUFDZ0gsV0FBVyxDQUFDRCxXQUFXLEVBQUUsQ0FBTSxlQUNyRztJQUFJLFNBQVMsRUFBQztFQUF3QyxHQUFDLGFBQVEsRUFBQzNLLEdBQUcsQ0FBQzZLLE1BQU0sQ0FBTSxFQUMvRTdLLEdBQUcsQ0FBQzhLLEtBQUssS0FBSyxJQUFJLGlCQUNmO0lBQUksU0FBUyxFQUFDO0VBQW1DLEdBQUMsZUFBVTtJQUN4RCxJQUFJLHVCQUFnQjlLLEdBQUcsQ0FBQzhLLEtBQUssQ0FBQ3RJLEVBQUUsY0FBSXhDLEdBQUcsQ0FBQzRELFFBQVEsQ0FBQ3BCLEVBQUU7RUFBRyxHQUFFeEMsR0FBRyxDQUFDOEssS0FBSyxDQUFDcEQsT0FBTyxDQUFLLENBQUssRUFFMUYxSCxHQUFHLENBQUNrSSxJQUFJLEtBQUssUUFBUSxpQkFDbEI7SUFBSSxTQUFTLEVBQUM7RUFBaUMsR0FBQyxzQkFBaUIsQ0FBSyxFQUN6RWxJLEdBQUcsQ0FBQytLLFNBQVMsS0FBSyxJQUFJLGlCQUNuQjtJQUFLLFNBQVMsRUFBQztFQUFhLGdCQUN4QjtJQUFJLFNBQVMsRUFBQztFQUFxQixHQUFDLHdCQUFtQixDQUFLLGVBQzVEO0lBQVEsU0FBUyxFQUFDLHFDQUFxQztJQUMvQyxPQUFPLEVBQUVqRztFQUFZLGdCQUFDO0lBQzFCLFNBQVMsRUFBQztFQUFZLEVBQUUsY0FDNUIsQ0FBUyxDQUNQLEVBR1R2Riw0REFBVSxLQUFLLFFBQVEsaUJBQ3BCLDRIQUNLUyxHQUFHLENBQUMrSyxTQUFTLEtBQUssSUFBSSxpQkFDbkIsNEhBQ0svSyxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZjtJQUFLLFNBQVMsRUFBQztFQUFhLGdCQUN4QjtJQUFLLFNBQVMsRUFBQztFQUFXLGdCQUN0QjtJQUFHLElBQUksMEJBQW1CL0YsR0FBRyxDQUFDNEQsUUFBUSxDQUFDcEIsRUFBRSxDQUFHO0lBQ3pDLFNBQVMsRUFBQztFQUF5RCxHQUFDLHdCQUN4RCxDQUFJLENBQ2pCLGVBQ04sdUVBQUssZUFDTDtJQUFLLFNBQVMsRUFBQztFQUFXLGdCQUN0QjtJQUFRLElBQUksRUFBQyxRQUFRO0lBQ2IsU0FBUyxFQUFDLHlEQUF5RDtJQUNuRSxlQUFZLE9BQU87SUFBQyxlQUFZO0VBQWlCLEdBQUMsNkJBRzFELENBQVMsZUFDVDtJQUFRLElBQUksRUFBQyxRQUFRO0lBQ2IsU0FBUyxFQUFDLHdEQUF3RDtJQUNsRSxlQUFZLE9BQU87SUFBQyxlQUFZO0VBQWlCLEdBQUMsNkJBRzFELENBQVMsQ0FDUCxlQUNOLHVFQUFLLEVBRUp4QyxHQUFHLENBQUNrSSxJQUFJLEtBQUssTUFBTSxpQkFDaEIseUlBQ0k7SUFBSyxTQUFTLEVBQUM7RUFBVyxnQkFDdEI7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQywwQ0FBMEM7SUFDcEQsZUFBWSxPQUFPO0lBQ25CLGVBQVk7RUFBYSxHQUFDLG9CQUNsQyxDQUFTLGVBRVQ7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQywyQ0FBMkM7SUFDckQsZUFBWSxPQUFPO0lBQ25CLGVBQVk7RUFBZSxHQUFDLDJCQUlwQyxDQUFTLEVBQ1JsSSxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDaEIsNEhBQ0svRixHQUFHLENBQUMrRixJQUFJLEtBQUssT0FBTyxpQkFDakI7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQywwQ0FBMEM7SUFDcEQsZUFBWSxPQUFPO0lBQ25CLGVBQVk7RUFBYSxHQUFDLHFCQUVsQyxDQUFTLGVBR2I7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQyw2Q0FBNkM7SUFDdkQsZUFBWSxPQUFPO0lBQ25CLGVBQVk7RUFBZ0IsR0FBQyxrQkFFckMsQ0FBUyxDQUNWLGVBR1A7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQywwQ0FBMEM7SUFDcEQsT0FBTyxFQUFFM0M7RUFBYSxHQUFDLGFBRS9CLENBQVMsQ0FDUCxlQUNOLHVFQUFLLGVBQ0w7SUFBSyxTQUFTLEVBQUM7RUFBVyxnQkFDdEI7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQyw0Q0FBNEM7SUFDdEQsZUFBWSxPQUFPO0lBQ25CLGVBQVk7RUFBVyxHQUFDLGdCQUNoQyxDQUFTLGVBQ1Q7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQyw4Q0FBOEM7SUFDeEQsZUFBWSxPQUFPO0lBQ25CLGVBQVk7RUFBWSxHQUFDLDJCQUVqQyxDQUFTLENBQ1AsQ0FDUCxlQUdQO0lBQUssU0FBUyxFQUFDO0VBQVcsR0FDckJwRCxHQUFHLENBQUNrSSxJQUFJLEtBQUssUUFBUSxpQkFDbEI7SUFBRyxTQUFTLEVBQUMsNENBQTRDO0lBQ3RELE9BQU8sRUFBRWxEO0VBQVksZ0JBQUM7SUFDckIsU0FBUyxFQUFDO0VBQW9CLEVBQUUsaUJBQVUsQ0FBSSxFQUVyRGhGLEdBQUcsQ0FBQ2tJLElBQUksS0FBSyxRQUFRLGlCQUNsQjtJQUFRLFNBQVMsRUFBQyx3QkFBd0I7SUFDbEMsT0FBTyxFQUFFbkQ7RUFBVSxnQkFBQztJQUN4QixTQUFTLEVBQUM7RUFBb0IsRUFBRSxZQUNwQyxDQUFTLGVBR2I7SUFBRyxJQUFJLDZCQUFzQi9FLEdBQUcsQ0FBQ3dDLEVBQUUsYUFBVztJQUMzQyxTQUFTLEVBQUM7RUFBK0IsZ0JBQUM7SUFDekMsU0FBUyxFQUFDO0VBQWdCLEVBQUUsU0FBSyxDQUFJLGVBRXpDO0lBQVEsU0FBUyxFQUFDLHVCQUF1QjtJQUNqQyxPQUFPLEVBQUVQO0VBQU8sZ0JBQUM7SUFDckIsU0FBUyxFQUFDO0VBQWlCLEVBQUUsUUFDakMsQ0FBUyxlQUVULDREQUFDLGtFQUFxQjtJQUNsQixFQUFFLEVBQUMsdUJBQXVCO0lBQzFCLFNBQVMsRUFBQyx5QkFBeUI7SUFDbkMsS0FBSyxFQUFDLFdBQVc7SUFDakIsUUFBUSxrQ0FBd0JqQyxHQUFHLENBQUM2SyxNQUFNLENBQUc7SUFDN0MsS0FBSyxFQUFDLFVBQVU7SUFDaEIsVUFBVSxFQUFDO0VBQU8sRUFBRSxFQUN2QjdLLEdBQUcsQ0FBQ2tJLElBQUksS0FBSyxRQUFRLGlCQUNsQjtJQUFRLFNBQVMsRUFBQyx3QkFBd0I7SUFDbEMsT0FBTyxFQUFFckQ7RUFBTyxnQkFBQztJQUNyQixTQUFTLEVBQUM7RUFBYSxFQUFFLGNBQzdCLENBQVMsZUFFYjtJQUFRLElBQUksRUFBQyxRQUFRO0lBQ2IsU0FBUyxFQUFDLHlCQUF5QjtJQUNuQyxlQUFZLE9BQU87SUFBQyxlQUFZO0VBQVksR0FBQyxpQkFFckQsQ0FBUyxDQUNQLGVBQ04sdUVBQUssZUFDTDtJQUFLLFNBQVMsRUFBQztFQUFXLGdCQUN0QjtJQUFRLFNBQVMsRUFBQywwQkFBMEI7SUFDcEMsT0FBTyxFQUFFakQ7RUFBYSxnQkFBQztJQUMzQixTQUFTLEVBQUM7RUFBYSxFQUFFLDhCQUM3QixDQUFTLGVBQ1Q7SUFBUSxTQUFTLEVBQUMsd0JBQXdCO0lBQ2xDLE9BQU8sRUFBRUg7RUFBWSxnQkFBQztJQUMxQixTQUFTLEVBQUM7RUFBYSxFQUFFLDhCQUM3QixDQUFTLENBQ1AsZUFDTix1RUFBSyxFQUNKakIsTUFBTSxDQUFDK0csR0FBRyxDQUFDLFVBQUNqSCxLQUFLLEVBQUUwSyxLQUFLLEVBQUs7SUFDMUIsb0JBQ0k7TUFBSyxTQUFTLEVBQUM7SUFBVyxHQUNyQjFLLEtBQUssQ0FBQzJLLElBQUksS0FBSyxNQUFNLGlCQUNsQjtNQUFRLElBQUksRUFBQyxRQUFRO01BQUMsT0FBTyxFQUFFLG1CQUFNO1FBQ2pDYixNQUFNLENBQUM5SixLQUFLLENBQUNrQyxFQUFFLENBQUM7TUFDcEIsQ0FBRTtNQUNNLFNBQVMsRUFBQztJQUF1RSxHQUFFbEMsS0FBSyxDQUFDNEssU0FBUyxDQUFVLEVBRXZINUssS0FBSyxDQUFDMkssSUFBSSxLQUFLLE1BQU0saUJBQ2xCO01BQVEsSUFBSSxFQUFDLFFBQVE7TUFBQyxPQUFPLEVBQUUsbUJBQU07UUFDakNiLE1BQU0sQ0FBQzlKLEtBQUssQ0FBQ2tDLEVBQUUsQ0FBQztNQUNwQixDQUFFO01BQ00sU0FBUyxFQUFDO0lBQTZELEdBQUVsQyxLQUFLLENBQUM0SyxTQUFTLENBQVUsQ0FFNUc7RUFFZCxDQUFDLENBQUMsZUFDRix1RUFBSyxlQUNMO0lBQUssU0FBUyxFQUFDO0VBQVcsR0FDckJsTCxHQUFHLENBQUNrSSxJQUFJLEtBQUssUUFBUSxpQkFDbEI7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQyw2Q0FBNkM7SUFDdkQsZUFBWSxPQUFPO0lBQ25CLGVBQVk7RUFBYyxHQUFDLHVCQUNuQyxDQUFTLENBRVgsQ0FDSixFQUVUbEksR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Y7SUFBSyxTQUFTLEVBQUM7RUFBYSxHQUN2Qi9GLEdBQUcsQ0FBQ2tJLElBQUksS0FBSyxNQUFNLGlCQUNoQix5SUFDQTtJQUFLLFNBQVMsRUFBQztFQUFXLGdCQUNsQjtJQUFRLElBQUksRUFBQyxRQUFRO0lBQ2IsU0FBUyxFQUFDLDJDQUEyQztJQUNyRCxlQUFZLE9BQU87SUFDbkIsZUFBWTtFQUFlLEdBQUMsMkJBSXBDLENBQVMsQ0FDUCxlQUNOLHVFQUFLLENBQ04sZUFHUDtJQUFLLFNBQVMsRUFBQztFQUFXLGdCQUN0QjtJQUFHLElBQUksNkJBQXNCbEksR0FBRyxDQUFDd0MsRUFBRSxhQUFXO0lBQzNDLFNBQVMsRUFBQztFQUErQixnQkFBQztJQUN6QyxTQUFTLEVBQUM7RUFBZ0IsRUFBRSxTQUFLLENBQUksZUFFekM7SUFBUSxTQUFTLEVBQUMsdUJBQXVCO0lBQ2pDLE9BQU8sRUFBRVA7RUFBTyxnQkFBQztJQUNyQixTQUFTLEVBQUM7RUFBaUIsRUFBRSxRQUNqQyxDQUFTLGVBRVQsNERBQUMsa0VBQXFCO0lBQ2xCLEVBQUUsRUFBQyx1QkFBdUI7SUFDMUIsU0FBUyxFQUFDLHlCQUF5QjtJQUNuQyxLQUFLLEVBQUMsV0FBVztJQUNqQixRQUFRLGtDQUF3QmpDLEdBQUcsQ0FBQzZLLE1BQU0sQ0FBRztJQUM3QyxLQUFLLEVBQUMsVUFBVTtJQUNoQixVQUFVLEVBQUM7RUFBTyxFQUFFLGVBQ3hCO0lBQVEsSUFBSSxFQUFDLFFBQVE7SUFDYixTQUFTLEVBQUMseUJBQXlCO0lBQ25DLGVBQVksT0FBTztJQUFDLGVBQVk7RUFBWSxHQUFDLGlCQUVyRCxDQUFTLENBQ1AsZUFDTix1RUFBSyxlQUNMO0lBQUssU0FBUyxFQUFDO0VBQVcsZ0JBQ3RCO0lBQVEsU0FBUyxFQUFDLDBCQUEwQjtJQUNwQyxPQUFPLEVBQUVqSjtFQUFhLGdCQUFDO0lBQzNCLFNBQVMsRUFBQztFQUFhLEVBQUUsOEJBQzdCLENBQVMsZUFDVDtJQUFRLFNBQVMsRUFBQyx3QkFBd0I7SUFDbEMsT0FBTyxFQUFFSDtFQUFZLGdCQUFDO0lBQzFCLFNBQVMsRUFBQztFQUFhLEVBQUUsOEJBQzdCLENBQVMsQ0FDUCxlQUNOLHVFQUFLLEVBQ0pqQixNQUFNLENBQUMrRyxHQUFHLENBQUMsVUFBQ2pILEtBQUssRUFBRTBLLEtBQUssRUFBSztJQUMxQixvQkFDSTtNQUFLLFNBQVMsRUFBQztJQUFXLEdBQ3JCMUssS0FBSyxDQUFDMkssSUFBSSxLQUFLLE1BQU0saUJBQ2xCO01BQVEsSUFBSSxFQUFDLFFBQVE7TUFBQyxPQUFPLEVBQUUsbUJBQU07UUFDakNiLE1BQU0sQ0FBQzlKLEtBQUssQ0FBQ2tDLEVBQUUsQ0FBQztNQUNwQixDQUFFO01BQ00sU0FBUyxFQUFDO0lBQXVFLEdBQUVsQyxLQUFLLENBQUM0SyxTQUFTLENBQVUsRUFFdkg1SyxLQUFLLENBQUMySyxJQUFJLEtBQUssTUFBTSxpQkFDbEI7TUFBUSxJQUFJLEVBQUMsUUFBUTtNQUFDLE9BQU8sRUFBRSxtQkFBTTtRQUNqQ2IsTUFBTSxDQUFDOUosS0FBSyxDQUFDa0MsRUFBRSxDQUFDO01BQ3BCLENBQUU7TUFDTSxTQUFTLEVBQUM7SUFBNkQsR0FBRWxDLEtBQUssQ0FBQzRLLFNBQVMsQ0FBVSxDQUU1RztFQUVkLENBQUMsQ0FBQyxDQUNBLENBRVgsZUFFUCx1RUFBSyxlQUNMO0lBQU8sRUFBRSxFQUFDO0VBQVcsZ0JBQ2pCLHFGQUNJLHFGQUNJLDREQUFDLDBEQUFhO0lBQUMsR0FBRyxFQUFFbEwsR0FBSTtJQUFDLE1BQU0sRUFBRUUsTUFBTztJQUFDLE9BQU8sRUFBRUUsT0FBUTtJQUMzQyxHQUFHLEVBQUVvQixZQUFhO0lBQ2xCLFdBQVcsRUFBRVAsV0FBWTtJQUFDLFlBQVksRUFBRUMsWUFBYTtJQUNyRCxZQUFZLEVBQUVDLFlBQWE7SUFDM0IsS0FBSyxFQUFFYjtFQUFNLEVBQUUsQ0FDN0IsQ0FDSixDQUNELENBQ1QsRUFFTmYsNERBQVUsS0FBSyxRQUFRLGlCQUNwQix5SUFDSTtJQUFHLEtBQUssRUFBRTtNQUFDZ0wsU0FBUyxFQUFFO0lBQVE7RUFBRSxnQkFDNUI7SUFBSyxTQUFTLEVBQUM7RUFBVyxnQkFDdEI7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUFDLFNBQVMsRUFBQyxtQ0FBbUM7SUFDM0QsZUFBWSxVQUFVO0lBQ3RCLGlCQUFjLE1BQU07SUFBQyxpQkFBYztFQUFNLGdCQUM3QztJQUFHLFNBQVMsRUFBQztFQUFXLEVBQUUsV0FBTztJQUFNLFNBQVMsRUFBQztFQUFPLEVBQUUsQ0FDckQsZUFDVDtJQUFLLFNBQVMsRUFBQyw2QkFBNkI7SUFDdkMsS0FBSyxFQUFFO01BQ0hZLGVBQWUsRUFBRSxTQUFTO01BQzFCQyxJQUFJLEVBQUUsTUFBTTtNQUNaQyxRQUFRLEVBQUU7SUFDZDtFQUFFLGdCQUVIO0lBQUcsSUFBSSwwQkFBbUJyTCxHQUFHLENBQUM0RCxRQUFRLENBQUNwQixFQUFFLENBQUc7SUFDekMsU0FBUyxFQUFDO0VBQThDLEdBQUMsd0JBQ2hELENBQUksZUFFaEI7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQyw2Q0FBNkM7SUFDdkQsZUFBWSxPQUFPO0lBQUMsZUFBWTtFQUFXLEdBQUMseUJBQ3BELENBQVMsZUFDVDtJQUFJLElBQUksRUFBQyxXQUFXO0lBQUMsU0FBUyxFQUFDO0VBQVMsRUFBTSxFQUM3Q3hDLEdBQUcsQ0FBQ2tJLElBQUksS0FBSyxNQUFNLGlCQUNoQix5SUFFSTtJQUFRLElBQUksRUFBQyxRQUFRO0lBQ2IsU0FBUyxFQUFDLDZDQUE2QztJQUN2RCxlQUFZLE9BQU87SUFBQyxlQUFZO0VBQWEsR0FBQyxrQkFFdEQsQ0FBUyxlQUVUO0lBQVEsSUFBSSxFQUFDLFFBQVE7SUFDYixTQUFTLEVBQUMsNkNBQTZDO0lBQ3ZELGVBQVksT0FBTztJQUFDLGVBQVk7RUFBZSxHQUFDLDJCQUV4RCxDQUFTLEVBQ1JsSSxHQUFHLENBQUMrRixJQUFJLEtBQUssT0FBTyxpQkFDakI7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQyw2Q0FBNkM7SUFDdkQsZUFBWSxPQUFPO0lBQ25CLGVBQVk7RUFBYSxHQUFDLG1CQUVsQyxDQUFTLGVBR2I7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQyxvREFBb0Q7SUFDOUQsT0FBTyxFQUFFM0M7RUFBYSxHQUFDLGtCQUUvQixDQUFTLGVBQ1Q7SUFBSSxJQUFJLEVBQUMsV0FBVztJQUFDLFNBQVMsRUFBQztFQUFTLEVBQU0sZUFDOUM7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQyxxREFBcUQ7SUFDL0QsZUFBWSxPQUFPO0lBQ25CLGVBQVk7RUFBWSxHQUFDLDJCQUNqQyxDQUFTLGVBRVQ7SUFBUSxJQUFJLEVBQUMsUUFBUTtJQUNiLFNBQVMsRUFBQyxxREFBcUQ7SUFDL0QsZUFBWSxPQUFPO0lBQUMsZUFBWTtFQUFZLEdBQUMsc0JBRXJELENBQVMsZUFDVCx1RUFBSyxDQUNOLENBR0wsQ0FDSixFQUNMcEQsR0FBRyxDQUFDa0ksSUFBSSxLQUFLLFFBQVEsaUJBQ2xCO0lBQUcsU0FBUyxFQUFDLDJDQUEyQztJQUNyRCxPQUFPLEVBQUVsRDtFQUFZLGdCQUFDO0lBQ3JCLFNBQVMsRUFBQztFQUFvQixFQUFFLGlCQUNwQyxDQUFJLEVBRVBoRixHQUFHLENBQUNrSSxJQUFJLEtBQUssUUFBUSxpQkFDbEI7SUFBUSxTQUFTLEVBQUMsOEJBQThCO0lBQUMsT0FBTyxFQUFFbkQ7RUFBVSxnQkFBQztJQUNqRSxTQUFTLEVBQUM7RUFBb0IsRUFBRSxZQUNwQyxDQUFTLEVBRVovRSxHQUFHLENBQUNrSSxJQUFJLEtBQUssUUFBUSxpQkFDbEI7SUFBUSxTQUFTLEVBQUM7RUFBOEIsZ0JBQUM7SUFDN0MsU0FBUyxFQUFDO0VBQWEsRUFBRSxjQUM3QixDQUFTLEVBR1psSSxHQUFHLENBQUNrSSxJQUFJLEtBQUssTUFBTSxpQkFDaEIseUlBQ0k7SUFBUSxTQUFTLEVBQUMsZ0NBQWdDO0lBQzFDLE9BQU8sRUFBRXpHO0VBQVksZ0JBQUM7SUFDMUIsU0FBUyxFQUFDO0VBQWEsRUFBRSxhQUM3QixDQUFTLGVBRVQ7SUFBUSxTQUFTLEVBQUMscUNBQXFDO0lBQy9DLE9BQU8sRUFBRUE7RUFBWSxnQkFBQztJQUMxQixTQUFTLEVBQUM7RUFBZ0IsRUFBRSxTQUNoQyxDQUFTLGVBRVQ7SUFBUSxTQUFTLEVBQUMsdUJBQXVCO0lBQ2pDLE9BQU8sRUFBRVE7RUFBTyxnQkFBQztJQUNyQixTQUFTLEVBQUM7RUFBaUIsRUFBRSxRQUNqQyxDQUFTLGVBRVQsNERBQUMsa0VBQXFCO0lBQ2xCLEVBQUUsRUFBQyx1QkFBdUI7SUFDMUIsU0FBUyxFQUFDLCtCQUErQjtJQUN6QyxLQUFLLEVBQUMsV0FBVztJQUNqQixRQUFRLGtDQUF3QmpDLEdBQUcsQ0FBQzZLLE1BQU0sQ0FBRztJQUM3QyxLQUFLLEVBQUMsVUFBVTtJQUNoQixVQUFVLEVBQUM7RUFBTyxFQUFFLHNGQUFLLENBRTlCLENBRVAsZUFFSjtJQUFPLEVBQUUsRUFBQyxPQUFPO0lBQ1YsS0FBSyxFQUFFO01BQUN2QixLQUFLLEVBQUUsTUFBTTtNQUFFQyxTQUFTLEVBQUUsTUFBTTtNQUFFNEIsZUFBZSxFQUFFO0lBQU07RUFBRSxnQkFDdEU7SUFBSSxTQUFTLEVBQUMsbUJBQW1CO0lBQzdCLEtBQUssRUFBRTtNQUFDM0IsUUFBUSxFQUFFO0lBQU07RUFBRSxnQkFDMUI7SUFBSSxLQUFLLEVBQUU7TUFBQ2UsU0FBUyxFQUFFLE1BQU07TUFBRUMsT0FBTyxFQUFFO0lBQU07RUFBRSxHQUFDLGdCQUVqRCxDQUFLLENBQ0osRUFDSnBKLGtCQUFrQixFQUNsQkMsaUJBQWlCLGVBQ2xCLHFGQUNJO0lBQUksU0FBUyxFQUFDO0VBQVksZ0JBQUMsdUVBQUcsYUFBVyxDQUFJLDJFQUFFLGdFQUFZO0lBQ3ZELElBQUksRUFBRXJCLEdBQUcsQ0FBQ3NMO0VBQVEsRUFBRSxnQkFBa0IsQ0FBSyxDQUM5QyxFQUNKdEwsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCLHFGQUNJO0lBQUksU0FBUyxFQUFDO0VBQW1CLGdCQUFDLHVFQUFHLFdBQVMsQ0FBSSwyRUFBQyxnRUFBWTtJQUMzRCxJQUFJLEVBQUV0SSxHQUFHLENBQUN1TDtFQUFRLEVBQUUsZ0JBQWtCLENBQUssQ0FDOUMsZUFFVCxxRkFDSTtJQUFJLFNBQVMsRUFBQztFQUFtQixnQkFBQyx1RUFBRyxNQUFJLEVBQUN2TCxHQUFHLENBQUN3TCxHQUFHLEVBQUMsTUFBSSxDQUFJLDJFQUFDLGdFQUFZO0lBQ25FLElBQUksRUFBRXhMLEdBQUcsQ0FBQ3lMO0VBQUssRUFBRSxnQkFBa0IsQ0FBSyxDQUMzQyxlQUNMLHFGQUNJO0lBQUksU0FBUyxFQUFDO0VBQXNDLGdCQUFDLHVFQUFHLGtCQUFnQixDQUFJLDJFQUFDLGdFQUFZO0lBQ3JGLElBQUksRUFBRXpMLEdBQUcsQ0FBQzBMO0VBQVMsRUFBRSxnQkFBa0IsQ0FBSyxDQUMvQyxlQUNMLHFGQUNJO0lBQUksU0FBUyxFQUFDO0VBQTZCLGdCQUN2QztJQUFHLEtBQUssRUFBRTtNQUFDQyxLQUFLLEVBQUU7SUFBTTtFQUFFLEVBQUUsc0ZBQUssZUFDakM7SUFBRyxTQUFTLEVBQUM7RUFBYSxHQUFDLHVDQUVwQixzRkFBSyxLQUFDLEVBQUNySyxlQUFlLENBQUNzSyxRQUFRLENBQUM1TCxHQUFHLENBQUMwTCxRQUFRLENBQUMsRUFBRTtJQUFDRyxJQUFJLEVBQUU7RUFBSSxDQUFDLENBQUMsZUFDL0QsdUZBQU0sdUVBQUcsR0FBQyxFQUFDN0wsR0FBRyxDQUFDOEwsT0FBTyxDQUFDQyxJQUFJLENBQUssQ0FBTyxDQUN2QyxlQUNKLHVFQUFLLEVBQ0ovTCxHQUFHLENBQUNnTSxVQUFVLEtBQUssSUFBSSxpQkFDcEIseUlBQ0k7SUFBRyxLQUFLLEVBQUU7TUFBQyxTQUFPLE1BQU07TUFBRUMsS0FBSyxFQUFFO0lBQVM7RUFBRSxnQkFBQyx1RUFBRyw2QkFDOUIsQ0FBSSxDQUFJLGVBQzFCO0lBQUcsS0FBSyxFQUFFO01BQUNOLEtBQUssRUFBRTtJQUFNO0VBQUUsRUFBRSxlQUM1QjtJQUFHLEtBQUssRUFBRTtNQUFDTSxLQUFLLEVBQUU7SUFBUyxDQUFFO0lBQzFCLHVCQUF1QixFQUFFO01BQUNuRCxNQUFNLEVBQUU5SSxHQUFHLENBQUNnTTtJQUFVO0VBQUUsRUFBRSxDQUN4RCxDQUVOLENBQ0osQ0FDRCxDQUVULGVBRVAsdUVBQUssc0ZBQUssc0ZBQUssc0ZBQUssQ0FDbEIsQ0FDSixDQUNQLENBRVI7QUFFWCxDQUFDO0FBRUQsSUFBSTtFQUNBLElBQU1FLFNBQVMsR0FBR0MsUUFBUSxDQUFDQyxjQUFjLENBQUMsb0JBQW9CLENBQUM7RUFDL0QsSUFBTUMsSUFBSSxHQUFHMU0sNkRBQVUsQ0FBQ3VNLFNBQVMsQ0FBQztFQUNsQ0csSUFBSSxDQUFDQyxNQUFNLGVBQUMsNERBQUMsUUFBUSxPQUFFLENBQUM7QUFDNUIsQ0FBQyxDQUFDLE9BQU9wSyxDQUFDLEVBQUUsQ0FDWjs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FDenVFMEI7QUFDZ0M7QUFHbkQsSUFBTTlDLGFBQWEsZ0JBQUdMLHVEQUFnQixDQUFDLFVBQUN5TixLQUFLLEVBQUVDLEdBQUcsRUFBSztFQUMxRCxJQUFJek0sR0FBRyxHQUFHd00sS0FBSyxDQUFDeE0sR0FBRztFQUNuQixJQUFJaUIsV0FBVyxHQUFHdUwsS0FBSyxDQUFDdkwsV0FBVztFQUNuQyxJQUFJQyxZQUFZLEdBQUdzTCxLQUFLLENBQUN0TCxZQUFZO0VBQ3JDLElBQUlDLFlBQVksR0FBR3FMLEtBQUssQ0FBQ3JMLFlBQVk7RUFDckMsSUFBSWIsS0FBSyxHQUFHa00sS0FBSyxDQUFDbE0sS0FBSztFQUN2QixJQUFJb00sT0FBTyxHQUFHak4sQ0FBQyxDQUFDLFVBQVUsQ0FBQyxDQUFDcUIsR0FBRyxFQUFFO0VBQ2pDLElBQU1RLGVBQWUsR0FBR0MsbUJBQU8sQ0FBQyxzRUFBa0IsQ0FBQztFQUVuRCxJQUFJd0ksT0FBTyxHQUFHL0osR0FBRyxDQUFDK0osT0FBTztFQUN6QixJQUFJNEMsRUFBRSxHQUFHLENBQUM7RUFFVjVDLE9BQU8sQ0FBQ3hDLEdBQUcsQ0FBQyxVQUFDcUYsS0FBSyxFQUFLO0lBQ25CLElBQUlBLEtBQUssQ0FBQzFFLElBQUksS0FBSyxRQUFRLEVBQUU7TUFDekJ5RSxFQUFFLEdBQUdBLEVBQUUsR0FBRyxDQUFDO0lBQ2Y7RUFDSixDQUFDLENBQUM7RUFHRixvQkFDSSx1SUFDSTtJQUFLLEtBQUssRUFBRTtNQUNSckQsS0FBSyxFQUFFLE1BQU07TUFDYnVELFNBQVMsRUFBRSxRQUFRO01BQ25CQyxTQUFTLEVBQUUsMkJBQTJCO01BQ3RDM0IsZUFBZSxFQUFFO0lBQ3JCO0VBQUUsZ0JBQ0U7SUFBSyxTQUFTLEVBQUMsUUFBUTtJQUFDLEtBQUssRUFBRTtNQUMzQjdCLEtBQUssRUFBRWhKLEtBQUssQ0FBQ3lNLFVBQVUsR0FBRyxJQUFJO01BQzlCckQsTUFBTSxFQUFFcEosS0FBSyxDQUFDME0sWUFBWSxHQUFHLElBQUk7TUFDakM3QixlQUFlLEVBQUU7SUFDckI7RUFBRSxHQUNHN0ssS0FBSyxDQUFDMk0sVUFBVSxLQUFLLE9BQU8saUJBQ3pCLDBIQUNLM00sS0FBSyxDQUFDMk0sVUFBVSxLQUFLLE9BQU8saUJBQ3pCO0lBQUssR0FBRyxxQkFBYzNNLEtBQUssQ0FBQzRNLElBQUksQ0FBRztJQUM5QixLQUFLLEVBQUU7TUFDSDVELEtBQUssRUFBRWhKLEtBQUssQ0FBQzZNLEtBQUssR0FBRyxJQUFJO01BQ3pCekQsTUFBTSxFQUFFcEosS0FBSyxDQUFDOE0sS0FBSyxHQUFHLElBQUk7TUFDMUJDLFlBQVksRUFBRS9NLEtBQUssQ0FBQ2dOLE1BQU0sR0FBRyxJQUFJO01BQ2pDQyxXQUFXLEVBQUVqTixLQUFLLENBQUNrTixNQUFNLEdBQUcsSUFBSTtNQUNoQ0MsVUFBVSxFQUFFbk4sS0FBSyxDQUFDb04sTUFBTSxHQUFHLElBQUk7TUFDL0JDLGFBQWEsRUFBRXJOLEtBQUssQ0FBQ3NOLE1BQU0sR0FBRztJQUNsQyxDQUFFO0lBQ0YsR0FBRyxFQUFDO0VBQUUsRUFBRSxFQUVoQnROLEtBQUssQ0FBQzJNLFVBQVUsS0FBSyxPQUFPLGlCQUN6QjtJQUFHLFNBQVMsRUFBQyxTQUFTO0lBQUMsS0FBSyxFQUFFO01BQzFCSSxZQUFZLEVBQUUvTSxLQUFLLENBQUNnTixNQUFNLEdBQUcsSUFBSTtNQUNqQ0MsV0FBVyxFQUFFak4sS0FBSyxDQUFDa04sTUFBTSxHQUFHLElBQUk7TUFDaENDLFVBQVUsRUFBRW5OLEtBQUssQ0FBQ29OLE1BQU0sR0FBRyxJQUFJO01BQy9CQyxhQUFhLEVBQUVyTixLQUFLLENBQUNzTixNQUFNLEdBQUc7SUFDbEMsQ0FBRTtJQUFDLHVCQUF1QixFQUFFO01BQUM5RSxNQUFNLEVBQUV4SSxLQUFLLENBQUN1TjtJQUFVO0VBQUUsRUFBRSxDQUU5RCxFQUVOdk4sS0FBSyxDQUFDMk0sVUFBVSxLQUFLLE9BQU8saUJBQ3pCLHVJQUNJO0lBQUksU0FBUyxFQUFDO0VBQXVCLGdCQUFDLHNFQUFLLHFGQUFLLG9DQUNwQyxxRkFBSyxFQUFDM00sS0FBSyxDQUFDME0sWUFBWSxFQUFDLE9BQUssRUFBQzFNLEtBQUssQ0FBQ3lNLFVBQVUsRUFBQyxJQUFFLENBQUssZUFDbkU7SUFBSSxTQUFTLEVBQUM7RUFBMkIsR0FBQyxpQ0FBK0IscUZBQUcsNEJBQy9ELENBQUkseUNBQXFDLENBQUssQ0FDNUQsQ0FFTCxlQUNOO0lBQUssU0FBUyxFQUFDLE1BQU07SUFBQyxLQUFLLEVBQUU7TUFBQ1EsV0FBVyxFQUFFLEtBQUs7TUFBRUYsWUFBWSxFQUFFO0lBQUs7RUFBRSxnQkFDbkU7SUFBTyxLQUFLLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDOUQsU0FBUyxFQUFFLE1BQU07TUFBRXVFLFlBQVksRUFBRTtJQUFNO0VBQUUsZ0JBQ2xFLG9GQUNJO0lBQUksS0FBSyxFQUFFO01BQUNDLE1BQU0sRUFBRSxNQUFNO01BQUV4RCxTQUFTLEVBQUUsUUFBUTtNQUFFeUQsVUFBVSxFQUFFO0lBQUs7RUFBRSxnQkFDaEUsc0VBQUloTyxHQUFHLENBQUM0RCxRQUFRLENBQUM2RyxNQUFNLENBQUNDLFNBQVMsQ0FBQ0MsV0FBVyxFQUFFLENBQUssS0FBQyxxRkFBSyxFQUN6RDNLLEdBQUcsQ0FBQzRELFFBQVEsQ0FBQzZHLE1BQU0sQ0FBQ3dELE9BQU8sS0FBSyxHQUFHLGlCQUNoQywwSEFBRSxHQUFDLHFGQUFLLEtBQUMsRUFBQ2pPLEdBQUcsQ0FBQzRELFFBQVEsQ0FBQzZHLE1BQU0sQ0FBQ3dELE9BQU8sRUFBQyxHQUFDLENBQUcsQ0FFN0MsQ0FDSixDQUNELGVBQ1I7SUFBRyxLQUFLLEVBQUU7TUFBQ3RDLEtBQUssRUFBRTtJQUFNO0VBQUUsRUFBRSxlQUM1QjtJQUFPLFdBQVcsRUFBQyxHQUFHO0lBQUMsS0FBSyxFQUFDLE1BQU07SUFBQyxLQUFLLEVBQUU7TUFBQ21DLFlBQVksRUFBRTtJQUFNO0VBQUUsZ0JBQzlELG9GQUNJO0lBQUksS0FBSyxFQUFFO01BQUNDLE1BQU0sRUFBRSxNQUFNO01BQUV2RSxRQUFRLEVBQUU7SUFBTTtFQUFFLEdBQ3pDeEosR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Ysc0VBQUcsK0JBQTZCLENBQUksRUFFdkMvRixHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZixzRUFBRyx5Q0FBdUMsQ0FBSSxFQUVqRC9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUNoQixzRUFBRyxrQkFBZ0IsQ0FBSSxFQUUxQi9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLHNFQUFHLCtCQUE2QixDQUFJLEVBRXZDL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Ysc0VBQUcsaUNBQXlCLENBQUksRUFFbkMvRixHQUFHLENBQUMrRixJQUFJLEtBQUssT0FBTyxpQkFDakIsc0VBQUcsMEJBQXdCLENBQUksQ0FFbEMsQ0FDSixDQUNELGVBQ1I7SUFBRyxLQUFLLEVBQUU7TUFBQzRGLEtBQUssRUFBRTtJQUFNO0VBQUUsRUFBRSxlQUM1QjtJQUFPLFdBQVcsRUFBQztFQUFHLGdCQUNsQjtJQUFJLEtBQUssRUFBRTtNQUFDUixlQUFlLEVBQUUsU0FBUztNQUFFK0MsVUFBVSxFQUFFLEtBQUs7TUFBRTVFLEtBQUssRUFBRTtJQUFLO0VBQUUsZ0JBQ3JFO0lBQUksU0FBUyxFQUFDO0VBQU8sR0FBQyxNQUFJLENBQUssZUFDL0I7SUFBSSxTQUFTLEVBQUM7RUFBTyxHQUFDLFdBQU0sQ0FBSyxFQUNoQ3RKLEdBQUcsQ0FBQ2UsV0FBVyxLQUFLLElBQUksaUJBQ3JCO0lBQUksU0FBUyxFQUFDO0VBQU8sR0FBQyxvQkFBZSxDQUFLLGVBRTlDO0lBQUksU0FBUyxFQUFDO0VBQU8sR0FBQyxpQkFBWSxDQUFLLEVBQ3RDZixHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZjtJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUMsYUFBVyxDQUFLLEVBRXpDL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Y7SUFBSSxTQUFTLEVBQUM7RUFBTyxHQUFDLGFBQVcsQ0FBSyxFQUV6Qy9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmO0lBQUksU0FBUyxFQUFDO0VBQU8sR0FBQyxhQUFXLENBQUssQ0FHekMsZUFDTCxvRkFDSTtJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUUyRyxPQUFPLENBQU0sZUFDcEM7SUFBSSxTQUFTLEVBQUM7RUFBTyxHQUFFMU0sR0FBRyxDQUFDNkssTUFBTSxDQUFNLEVBQ3RDN0ssR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDckI7SUFBSSxTQUFTLEVBQUM7RUFBTyxHQUNoQmYsR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxJQUFJZixHQUFHLENBQUNlLFdBQVcsQ0FBQzhKLE1BQU0sQ0FDbEQsZUFFVDtJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUU3SyxHQUFHLENBQUM4SyxLQUFLLEtBQUssSUFBSSxJQUFJOUssR0FBRyxDQUFDOEssS0FBSyxDQUFDcEQsT0FBTyxDQUFNLEVBQ25FMUgsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Y7SUFBSSxTQUFTLEVBQUM7RUFBTyxHQUFFL0YsR0FBRyxDQUFDbU8sV0FBVyxLQUFLLElBQUksSUFBSW5PLEdBQUcsQ0FBQ21PLFdBQVcsQ0FBQ0EsV0FBVyxDQUFNLEVBRXZGbk8sR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Y7SUFBSSxTQUFTLEVBQUM7RUFBTyxHQUFFL0YsR0FBRyxDQUFDbU8sV0FBVyxLQUFLLElBQUksSUFBSW5PLEdBQUcsQ0FBQ21PLFdBQVcsQ0FBQ0EsV0FBVyxDQUFNLEVBRXZGbk8sR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Y7SUFBSSxTQUFTLEVBQUM7RUFBTyxHQUFFL0YsR0FBRyxDQUFDbU8sV0FBVyxLQUFLLElBQUksSUFBSW5PLEdBQUcsQ0FBQ21PLFdBQVcsQ0FBQ0EsV0FBVyxDQUFNLENBRXZGLEVBQ0puTyxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZix1RUFDSy9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLElBQUkvRixHQUFHLENBQUMrRixJQUFJLEtBQUssT0FBTyxpQkFDdkM7SUFBSSxPQUFPLEVBQUMsR0FBRztJQUFDLFNBQVMsRUFBQztFQUFrQixnQkFDeEI7SUFBTSxLQUFLLEVBQUU7TUFDVHFJLGNBQWMsRUFBRSxXQUFXO01BQzNCSixVQUFVLEVBQUUsS0FBSztNQUNqQkUsVUFBVSxFQUFFO0lBQ2hCO0VBQUUsR0FBQyxtQkFBVyxDQUFPLHFGQUFLLGVBQzFDO0lBQU0sdUJBQXVCLEVBQUU7TUFBQ3BGLE1BQU0sRUFBRTlJLEdBQUcsQ0FBQ3FPO0lBQVk7RUFBRSxFQUFFLENBQzNELEVBRVJyTyxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxJQUFJL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE9BQU8saUJBQ3ZDO0lBQUksT0FBTyxFQUFDLEdBQUc7SUFBQyxTQUFTLEVBQUM7RUFBa0IsZ0JBQ3hCO0lBQU0sS0FBSyxFQUFFO01BQ1RxSSxjQUFjLEVBQUUsV0FBVztNQUMzQkosVUFBVSxFQUFFLEtBQUs7TUFDakJFLFVBQVUsRUFBRTtJQUNoQjtFQUFFLEdBQUMsbUJBQVcsQ0FBTyxxRkFBSyxlQUMxQztJQUFNLHVCQUF1QixFQUFFO01BQUNwRixNQUFNLEVBQUU5SSxHQUFHLENBQUNxTztJQUFZO0VBQUUsRUFBRSxDQUMzRCxDQUVSLEVBRVJyTyxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZix1RUFDSy9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLElBQUkvRixHQUFHLENBQUMrRixJQUFJLEtBQUssT0FBTyxpQkFDdkM7SUFBSSxPQUFPLEVBQUMsR0FBRztJQUFDLFNBQVMsRUFBQztFQUFrQixnQkFDeEI7SUFBTSxLQUFLLEVBQUU7TUFDVHFJLGNBQWMsRUFBRSxXQUFXO01BQzNCSixVQUFVLEVBQUUsS0FBSztNQUNqQkUsVUFBVSxFQUFFO0lBQ2hCO0VBQUUsR0FBQyxtQkFBVyxDQUFPLHFGQUFLLGVBQzFDO0lBQU0sdUJBQXVCLEVBQUU7TUFBQ3BGLE1BQU0sRUFBRTlJLEdBQUcsQ0FBQ3FPO0lBQVk7RUFBRSxFQUFFLENBQzNELEVBRVJyTyxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxJQUFJL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE9BQU8saUJBQ3ZDO0lBQUksT0FBTyxFQUFDLEdBQUc7SUFBQyxTQUFTLEVBQUM7RUFBa0IsZ0JBQ3hCO0lBQU0sS0FBSyxFQUFFO01BQ1RxSSxjQUFjLEVBQUUsV0FBVztNQUMzQkosVUFBVSxFQUFFLEtBQUs7TUFDakJFLFVBQVUsRUFBRTtJQUNoQjtFQUFFLEdBQUMsbUJBQVcsQ0FBTyxxRkFBSyxlQUMxQztJQUFNLHVCQUF1QixFQUFFO01BQUNwRixNQUFNLEVBQUU5SSxHQUFHLENBQUNxTztJQUFZO0VBQUUsRUFBRSxDQUMzRCxDQUVSLEVBRVJyTyxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZixvRkFDSTtJQUFJLE9BQU8sRUFBQyxHQUFHO0lBQ1gsU0FBUyxFQUFDO0VBQWtCLGdCQUNwQjtJQUFNLEtBQUssRUFBRTtNQUNUcUksY0FBYyxFQUFFLFdBQVc7TUFDM0JKLFVBQVUsRUFBRSxLQUFLO01BQ2pCRSxVQUFVLEVBQUU7SUFDaEI7RUFBRSxHQUFDLG1CQUFXLENBQU8scUZBQUssZUFDbEM7SUFBTSx1QkFBdUIsRUFBRTtNQUFDcEYsTUFBTSxFQUFFOUksR0FBRyxDQUFDcU87SUFBWTtFQUFFLEVBQUUsQ0FBSyxDQUNwRSxFQUVSck8sR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Ysb0ZBQ0k7SUFBSSxPQUFPLEVBQUMsR0FBRztJQUNYLFNBQVMsRUFBQztFQUFrQixnQkFDcEI7SUFBTSxLQUFLLEVBQUU7TUFDVHFJLGNBQWMsRUFBRSxXQUFXO01BQzNCSixVQUFVLEVBQUUsS0FBSztNQUNqQkUsVUFBVSxFQUFFO0lBQ2hCO0VBQUUsR0FBQyxtQkFBVyxDQUFPLHFGQUFLLGVBQ2xDO0lBQU0sdUJBQXVCLEVBQUU7TUFBQ3BGLE1BQU0sRUFBRTlJLEdBQUcsQ0FBQ3FPO0lBQVk7RUFBRSxFQUFFLENBQUssQ0FDcEUsQ0FDTCxlQUNSO0lBQUcsS0FBSyxFQUFFO01BQUMxQyxLQUFLLEVBQUU7SUFBTTtFQUFFLEVBQUUsZUFDNUI7SUFBTyxLQUFLLEVBQUU7TUFBQ3JDLEtBQUssRUFBRSxNQUFNO01BQUVDLFNBQVMsRUFBRTtJQUFNLENBQUU7SUFBQyxXQUFXLEVBQUM7RUFBRyxnQkFDN0Q7SUFBSSxTQUFTLEVBQUM7RUFBUyxHQUNsQnZKLEdBQUcsQ0FBQzRJLEtBQUssS0FBSyxLQUFLLGlCQUNoQjtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFVBQUssQ0FBSyxlQUVoRDtJQUFJLFNBQVMsRUFBQztFQUFlLEdBQUMsaUJBQVksQ0FBSyxFQUM5QzVJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUNoQix1SUFDSTtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFdBQU0sQ0FBSyxFQUU1Qy9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLHVJQUNJO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsU0FBSSxDQUFLLGVBQzNDO0lBQUksU0FBUyxFQUFDLG1CQUFtQjtJQUFDLEtBQUssRUFBRTtNQUFDOEMsVUFBVSxFQUFFO0lBQVE7RUFBRSxHQUFDLFNBQ2pFLENBQUssQ0FDTixFQUVON0ksR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE9BQU8saUJBQ2pCLHVJQUNJO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsU0FBSSxxRkFBSyxhQUFNLENBQUssZUFDdEQ7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxVQUFLLHFGQUFLLGFBQU0sQ0FBSyxlQUN2RDtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLGlCQUFjLHFGQUFLLFVBQU0sQ0FBSyxlQUNoRTtJQUFJLFNBQVMsRUFBQyxtQkFBbUI7SUFBQyxLQUFLLEVBQUU7TUFBQzhDLFVBQVUsRUFBRTtJQUFRO0VBQUUsR0FBQyxTQUNqRSxDQUFLLENBQ04sRUFHTjdJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLDBIQUNLL0YsR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDckIsdUlBQ0k7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxTQUFJLHFGQUFLLGFBQU0sQ0FBSyxlQUN0RDtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFVBQUsscUZBQUssYUFBTSxDQUFLLGVBQ3ZEO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsaUJBQWMscUZBQUssVUFBTSxDQUFLLGVBQ2hFO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsU0FBSSxxRkFBSyxlQUFRLENBQUssQ0FDekQsRUFFTmYsR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDckI7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxTQUFJLENBQUssZUFFL0M7SUFBSSxTQUFTLEVBQUMsbUJBQW1CO0lBQUMsS0FBSyxFQUFFO01BQUM4SCxVQUFVLEVBQUU7SUFBUTtFQUFFLEdBQUMsU0FDakUsQ0FBSyxDQUNOLEVBRU43SSxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZiwwSEFDSy9GLEdBQUcsQ0FBQ2UsV0FBVyxLQUFLLElBQUksaUJBQ3JCLHVJQUNJO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsU0FBSSxxRkFBSyxhQUFNLENBQUssZUFDdEQ7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxVQUFLLHFGQUFLLGFBQU0sQ0FBSyxlQUN2RDtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLGlCQUFjLHFGQUFLLFVBQU0sQ0FBSyxlQUNoRTtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFNBQUkscUZBQUssa0JBQVcsQ0FBSyxDQUM1RCxFQUVOZixHQUFHLENBQUNlLFdBQVcsS0FBSyxJQUFJLGlCQUNyQjtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFNBQUksQ0FBSyxlQUUvQztJQUFJLFNBQVMsRUFBQyxtQkFBbUI7SUFBQyxLQUFLLEVBQUU7TUFBQzhILFVBQVUsRUFBRTtJQUFRO0VBQUUsR0FBQyxTQUNqRSxDQUFLLENBQ04sRUFFTjdJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUNoQiwwSEFDSy9GLEdBQUcsQ0FBQ2UsV0FBVyxLQUFLLElBQUksaUJBQ3JCLHVJQUNJO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsU0FBSSxxRkFBSyxhQUFNLENBQUssZUFDdEQ7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxVQUFLLHFGQUFLLGFBQU0sQ0FBSyxlQUN2RDtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLGlCQUFjLHFGQUFLLFVBQU0sQ0FBSyxlQUNoRTtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFNBQUkscUZBQUssZUFBUSxDQUFLLENBQ3pELEVBRU5mLEdBQUcsQ0FBQ2UsV0FBVyxLQUFLLElBQUksaUJBQ3JCO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsU0FBSSxDQUFLLGVBRS9DO0lBQUksU0FBUyxFQUFDLG1CQUFtQjtJQUFDLEtBQUssRUFBRTtNQUFDOEgsVUFBVSxFQUFFO0lBQVE7RUFBRSxHQUFDLFNBQ2pFLENBQUssQ0FDTixFQUVON0ksR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQUk7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxhQUFXLENBQUssZUFDMUU7SUFBSSxTQUFTLEVBQUMsbUJBQW1CO0lBQUMsS0FBSyxFQUFFO01BQUNPLFVBQVUsRUFBRTtJQUFRO0VBQUUsR0FBQyxZQUFVLENBQUssQ0FDakYsRUFFTjdJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUNoQix1SUFDSTtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFdBQU0sQ0FBSyxlQUM3QztJQUFJLFNBQVMsRUFBQyxtQkFBbUI7SUFBQyxLQUFLLEVBQUU7TUFBQ3VJLFFBQVEsRUFBRTtJQUFPO0VBQUUsR0FBQyx1QkFFOUQsQ0FBSyxDQUNOLENBR04sRUFDSm5OLFlBQVksRUFDWkYsV0FBVyxFQUNYakIsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE1BQU0saUJBQ2hCLDBIQUNLNEcsRUFBRSxLQUFLLENBQUMsaUJBQ0wsdUlBQ0ksMEhBQ0szTSxHQUFHLENBQUM0SSxLQUFLLEtBQUssS0FBSyxpQkFDaEIsMEhBQ0s1SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxJQUFJdEksR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDNUMsb0ZBQ0k7SUFBSSxLQUFLLEVBQUU7TUFBQ2tMLEtBQUssRUFBRTtJQUFLLENBQUU7SUFBQyxPQUFPLEVBQUMsSUFBSTtJQUFDLFNBQVMsRUFBQztFQUFPLGdCQUFDLHNFQUFHLDBCQUM1QyxDQUFJLENBQUssQ0FDekIsRUFFUmpNLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLElBQUl0SSxHQUFHLENBQUNlLFdBQVcsS0FBSyxJQUFJLGlCQUM1QyxvRkFDSTtJQUFJLEtBQUssRUFBRTtNQUFDa0wsS0FBSyxFQUFFO0lBQUssQ0FBRTtJQUFDLE9BQU8sRUFBQyxJQUFJO0lBQUMsU0FBUyxFQUFDO0VBQU8sZ0JBQUMsc0VBQUcsMEJBQzVDLENBQUksQ0FBSyxDQUN6QixFQUVSL0ssWUFBWSxDQUNkLEVBRU5sQixHQUFHLENBQUM0SSxLQUFLLEtBQUssS0FBSyxpQkFDaEIsMEhBQ0s1SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxJQUFJdEksR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDNUMsb0ZBQ0k7SUFBSSxLQUFLLEVBQUU7TUFBQ2tMLEtBQUssRUFBRTtJQUFLLENBQUU7SUFBQyxPQUFPLEVBQUMsSUFBSTtJQUFDLFNBQVMsRUFBQztFQUFPLGdCQUFDLHNFQUFHLDBCQUM1QyxDQUFJLENBQUssQ0FDekIsRUFFUmpNLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLElBQUl0SSxHQUFHLENBQUNlLFdBQVcsS0FBSyxJQUFJLGlCQUM1QyxvRkFDSTtJQUFJLEtBQUssRUFBRTtNQUFDa0wsS0FBSyxFQUFFO0lBQUssQ0FBRTtJQUFDLE9BQU8sRUFBQyxJQUFJO0lBQUMsU0FBUyxFQUFDO0VBQU8sZ0JBQUMsc0VBQUcsMEJBQzVDLENBQUksQ0FBSyxDQUN6QixFQUVSL0ssWUFBWSxDQUNkLENBRVIsQ0FDSixDQUVSLENBRUgsZUFDUjtJQUFHLEtBQUssRUFBRTtNQUFDeUssS0FBSyxFQUFFO0lBQU07RUFBRSxFQUFFLEVBQzNCM0wsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssSUFBSS9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUN0QywwSEFDQy9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxPQUFPLGlCQUNyQjtJQUFPLFNBQVMsRUFBQyxnQkFBZ0I7SUFBQyxLQUFLLEVBQUU7TUFBQyxTQUFPLE1BQU07TUFBRXVELEtBQUssRUFBRSxLQUFLO01BQUVDLFNBQVMsRUFBRTtJQUFNO0VBQUUsZ0JBQ3RGO0lBQUksS0FBSyxFQUFFO01BQUMyRSxVQUFVLEVBQUU7SUFBSztFQUFFLGdCQUMzQjtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFFO01BQUMzRCxTQUFTLEVBQUUsUUFBUTtNQUFFWSxlQUFlLEVBQUU7SUFBUztFQUFFLGdCQUFDLHNFQUFHLGlCQUFZLENBQUksQ0FBSyxlQUN4RztJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFFO01BQUNaLFNBQVMsRUFBRSxRQUFRO01BQUVZLGVBQWUsRUFBRTtJQUFTO0VBQUUsZ0JBQUMsc0VBQUcsa0JBQWEsQ0FBSSxDQUFLLENBQ3hHLGVBQ0wsb0ZBQ0k7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBQztFQUFRLGdCQUFDLDJEQUFDLCtEQUFZO0lBQUMsSUFBSSxFQUFFbkwsR0FBRyxDQUFDdU87RUFBSyxFQUFFLENBQUssZUFDekU7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBQztFQUFRLGdCQUFDLDJEQUFDLCtEQUFZO0lBQUMsSUFBSSxFQUFFdk8sR0FBRyxDQUFDa0o7RUFBTSxFQUFFLENBQUssQ0FDekUsQ0FDRCxlQUVSO0lBQU8sU0FBUyxFQUFDLGdCQUFnQjtJQUFDLEtBQUssRUFBRTtNQUFDLFNBQU8sT0FBTztNQUFFSSxLQUFLLEVBQUUsS0FBSztNQUFFQyxTQUFTLEVBQUU7SUFBTTtFQUFFLGdCQUN2RjtJQUFJLEtBQUssRUFBRTtNQUFDMkUsVUFBVSxFQUFFO0lBQUs7RUFBRSxnQkFDM0I7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDM0QsU0FBUyxFQUFFLFFBQVE7TUFBRVksZUFBZSxFQUFFO0lBQVM7RUFBRSxnQkFBQyxzRUFBRyxVQUM3RSxDQUFJLENBQUssRUFDZG5MLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLElBQUl0SSxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDdkM7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDd0UsU0FBUyxFQUFFLFFBQVE7TUFBRVksZUFBZSxFQUFFO0lBQVM7RUFBRSxnQkFDM0Usc0VBQUcsUUFBTSxDQUFJLENBQUssZUFFMUI7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDWixTQUFTLEVBQUUsUUFBUTtNQUFFWSxlQUFlLEVBQUU7SUFBUztFQUFFLGdCQUMzRSxzRUFBRyxNQUFJLEVBQUNuTCxHQUFHLENBQUN3TCxHQUFHLEVBQUMsR0FBQyxDQUFJLENBQUssZUFDOUI7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDakIsU0FBUyxFQUFFLFFBQVE7TUFBRVksZUFBZSxFQUFFO0lBQVM7RUFBRSxnQkFBQyxzRUFBRyxnQkFDMUUsQ0FBSSxDQUFLLENBQ2pCLGVBQ0wsb0ZBQ0k7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDWixTQUFTLEVBQUU7SUFBUTtFQUFFLGdCQUFDLDJEQUFDLCtEQUFZO0lBQUMsSUFBSSxFQUFFdkssR0FBRyxDQUFDc0w7RUFBUSxFQUFFLENBQ2pGLEVBQ0p0TCxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxJQUFJdEksR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE1BQU0saUJBQ3ZDO0lBQUksU0FBUyxFQUFDLE9BQU87SUFBQyxLQUFLLEVBQUU7TUFBQ3dFLFNBQVMsRUFBRTtJQUFRO0VBQUUsZ0JBQUMsMkRBQUMsK0RBQVk7SUFDN0QsSUFBSSxFQUFFdkssR0FBRyxDQUFDdUw7RUFBUSxFQUFFLENBQUssZUFFakM7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBQztFQUFRLGdCQUFDLDJEQUFDLCtEQUFZO0lBQUMsSUFBSSxFQUFFdkwsR0FBRyxDQUFDeUw7RUFBSyxFQUFFLENBQUssZUFDekU7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBQztFQUFRLGdCQUFDLDJEQUFDLCtEQUFZO0lBQUMsSUFBSSxFQUFFekwsR0FBRyxDQUFDMEw7RUFBUyxFQUFFLENBQUssQ0FDNUUsQ0FDRCxDQUNMLEVBRU4xTCxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZix1SUFDQTtJQUFPLFNBQVMsRUFBQyxnQkFBZ0I7SUFBQyxLQUFLLEVBQUU7TUFBQyxTQUFPLE1BQU07TUFBRXVELEtBQUssRUFBRSxLQUFLO01BQUVDLFNBQVMsRUFBRTtJQUFNO0VBQUUsZ0JBQ3RGO0lBQUksS0FBSyxFQUFFO01BQUMyRSxVQUFVLEVBQUU7SUFBSztFQUFFLGdCQUMzQjtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFFO01BQUMzRCxTQUFTLEVBQUUsUUFBUTtNQUFFWSxlQUFlLEVBQUU7SUFBUztFQUFFLGdCQUFDLHNFQUFHLFVBQzdFLENBQUksQ0FBSyxFQUNkbkwsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssSUFBSXRJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUN2QztJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFFO01BQUN3RSxTQUFTLEVBQUUsUUFBUTtNQUFFWSxlQUFlLEVBQUU7SUFBUztFQUFFLGdCQUMzRSxzRUFBRyxRQUFNLENBQUksQ0FBSyxlQUUxQjtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFFO01BQUNaLFNBQVMsRUFBRSxRQUFRO01BQUVZLGVBQWUsRUFBRTtJQUFTO0VBQUUsZ0JBQzNFLHNFQUFHLE1BQUksRUFBQ25MLEdBQUcsQ0FBQ3dMLEdBQUcsRUFBQyxHQUFDLENBQUksQ0FBSyxlQUM5QjtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFFO01BQUNqQixTQUFTLEVBQUUsUUFBUTtNQUFFWSxlQUFlLEVBQUU7SUFBUztFQUFFLGdCQUFDLHNFQUFHLGdCQUMxRSxDQUFJLENBQUssQ0FDakIsZUFDTCxvRkFDSTtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFFO01BQUNaLFNBQVMsRUFBRTtJQUFRO0VBQUUsZ0JBQUMsMkRBQUMsK0RBQVk7SUFBQyxJQUFJLEVBQUV2SyxHQUFHLENBQUNzTDtFQUFRLEVBQUUsQ0FDakYsRUFDSnRMLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLElBQUl0SSxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDdkM7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDd0UsU0FBUyxFQUFFO0lBQVE7RUFBRSxnQkFBQywyREFBQywrREFBWTtJQUM3RCxJQUFJLEVBQUV2SyxHQUFHLENBQUN1TDtFQUFRLEVBQUUsQ0FBSyxlQUVqQztJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFDO0VBQVEsZ0JBQUMsMkRBQUMsK0RBQVk7SUFBQyxJQUFJLEVBQUV2TCxHQUFHLENBQUN5TDtFQUFLLEVBQUUsQ0FBSyxlQUN6RTtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFDO0VBQVEsZ0JBQUMsMkRBQUMsK0RBQVk7SUFBQyxJQUFJLEVBQUV6TCxHQUFHLENBQUMwTDtFQUFTLEVBQUUsQ0FBSyxDQUM1RSxDQUNELGVBQ1I7SUFBTyxTQUFTLEVBQUMsZ0JBQWdCO0lBQUMsS0FBSyxFQUFFO01BQUMsU0FBTyxPQUFPO01BQUVwQyxLQUFLLEVBQUUsS0FBSztNQUFFQyxTQUFTLEVBQUU7SUFBTTtFQUFFLGdCQUMzRjtJQUFJLEtBQUssRUFBRTtNQUFDMkUsVUFBVSxFQUFFO0lBQUs7RUFBRSxnQkFDM0I7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDM0QsU0FBUyxFQUFFLFFBQVE7TUFBRVksZUFBZSxFQUFFO0lBQVM7RUFBRSxnQkFDOUUsc0VBQUcsaUJBQVksQ0FBSSxDQUNmLGVBQ0w7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDWixTQUFTLEVBQUUsUUFBUTtNQUFFWSxlQUFlLEVBQUU7SUFBUztFQUFFLGdCQUM5RSxzRUFBRyxrQkFBYSxDQUFJLENBQ2hCLENBQ0osZUFDTCxvRkFDSTtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFDO0VBQVEsZ0JBQUMsMkRBQUMsK0RBQVk7SUFBQyxJQUFJLEVBQUVuTCxHQUFHLENBQUN1TztFQUFLLEVBQUUsQ0FBSyxlQUN6RTtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFDO0VBQVEsZ0JBQUMsMkRBQUMsK0RBQVk7SUFBQyxJQUFJLEVBQUV2TyxHQUFHLENBQUNrSjtFQUFNLEVBQUUsQ0FBSyxDQUN6RSxDQUNHLENBQ0wsZUFFUCxzRUFBSyxlQUNMO0lBQUcsS0FBSyxFQUFFO01BQUN5QyxLQUFLLEVBQUU7SUFBTTtFQUFFLEVBQUUsRUFDM0IzTCxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDaEIsdUlBQ0ksc0VBQUssZUFDTDtJQUFHLFNBQVMsRUFBQztFQUFXLEdBQUMsdUNBRWxCLHFGQUFLLHFGQUFHLEdBQUMsRUFBQ3pFLGVBQWUsQ0FBQ3NLLFFBQVEsQ0FBQzVMLEdBQUcsQ0FBQzBMLFFBQVEsQ0FBQyxFQUFFO0lBQUNHLElBQUksRUFBRTtFQUFJLENBQUMsQ0FBQyxlQUNsRSx5RUFBTSxHQUFDLEVBQUM3TCxHQUFHLENBQUM4TCxPQUFPLENBQUNDLElBQUksQ0FBUSxDQUFJLENBQ3BDLGVBRUosc0VBQUssZUFDTDtJQUFHLEtBQUssRUFBRTtNQUFDLFNBQU8sT0FBTztNQUFFcUMsY0FBYyxFQUFFO0lBQVc7RUFBRSxHQUFDLDBCQUFxQixDQUFJLGVBQ2xGO0lBQUcsS0FBSyxFQUFFO01BQUN6QyxLQUFLLEVBQUU7SUFBTTtFQUFFLEVBQUUscUZBQUssQ0FDbEMsRUFFTjNMLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUNoQix1SUFDSTtJQUFPLEtBQUssRUFBRTtNQUFDdUQsS0FBSyxFQUFFLE1BQU07TUFBRUMsU0FBUyxFQUFFO0lBQUssQ0FBRTtJQUFDLFdBQVcsRUFBQztFQUFHLGdCQUM1RCxvRkFDSTtJQUFJLEtBQUssRUFBRTtNQUFDZ0IsU0FBUyxFQUFFLE1BQU07TUFBRTZELGNBQWMsRUFBRTtJQUFXO0VBQUUsR0FBQyxvQkFFN0QsQ0FBSyxlQUNMO0lBQUksS0FBSyxFQUFFO01BQUM3RCxTQUFTLEVBQUUsUUFBUTtNQUFFNkQsY0FBYyxFQUFFO0lBQVc7RUFBRSxHQUFDLHVCQUUvRCxDQUFLLGVBQ0w7SUFBSSxLQUFLLEVBQUU7TUFBQzdELFNBQVMsRUFBRSxPQUFPO01BQUU2RCxjQUFjLEVBQUU7SUFBVztFQUFFLEdBQUMsZ0JBRTlELENBQUssQ0FDSixDQUNELENBQ1QsRUFFTnBPLEdBQUcsQ0FBQ2dNLFVBQVUsS0FBSyxJQUFJLGlCQUNwQix1SUFDSTtJQUFHLFNBQVMsRUFBQyxLQUFLO0lBQUMsS0FBSyxFQUFFO01BQUUsU0FBTyxNQUFNO01BQUVDLEtBQUssRUFBRTtJQUFPO0VBQUUsR0FBQyw4QkFDMUMsQ0FBSSxlQUN0QjtJQUFHLEtBQUssRUFBRTtNQUFDTixLQUFLLEVBQUU7SUFBTTtFQUFFLEVBQUUsZUFDNUI7SUFBRyxLQUFLLEVBQUU7TUFBQ00sS0FBSyxFQUFFO0lBQVMsQ0FBRTtJQUMxQix1QkFBdUIsRUFBRTtNQUFDbkQsTUFBTSxFQUFFOUksR0FBRyxDQUFDZ007SUFBVTtFQUFFLEVBQUUsQ0FDeEQsQ0FFTCxlQUNOO0lBQUssU0FBUyxFQUFDO0VBQVEsR0FDbEIxTCxLQUFLLENBQUNrTyxVQUFVLEtBQUssT0FBTyxpQkFDekIsMEhBQ0tsTyxLQUFLLENBQUNrTyxVQUFVLEtBQUssT0FBTyxpQkFDekI7SUFBRyxLQUFLLEVBQUU7TUFDTmhGLFFBQVEsRUFBRWxKLEtBQUssQ0FBQ21PLFFBQVEsR0FBRyxJQUFJO01BQy9CbEUsU0FBUyxFQUFFLFFBQVE7TUFDbkJnRCxXQUFXLEVBQUUsS0FBSztNQUNsQkYsWUFBWSxFQUFFO0lBQ2xCLENBQUU7SUFDQyx1QkFBdUIsRUFBRTtNQUFDdkUsTUFBTSxFQUFFeEksS0FBSyxDQUFDb087SUFBSTtFQUFFLEVBQUUsRUFFdERwTyxLQUFLLENBQUNrTyxVQUFVLEtBQUssT0FBTyxpQkFDekI7SUFBSyxHQUFHLHFCQUFjbE8sS0FBSyxDQUFDcU8sV0FBVyxDQUFHO0lBQ3JDLEtBQUssRUFBRTtNQUNIckYsS0FBSyxFQUFFLE1BQU07TUFDYkksTUFBTSxFQUFFcEosS0FBSyxDQUFDc08sWUFBWSxHQUFHO0lBQ2pDLENBQUU7SUFDRixHQUFHLEVBQUM7RUFBRSxFQUFFLENBRWxCLEVBRU50TyxLQUFLLENBQUNrTyxVQUFVLEtBQUssT0FBTyxpQkFDekIsdUlBQ0k7SUFBSSxTQUFTLEVBQUM7RUFBdUIsR0FBQyx5Q0FDM0IsRUFBQ2xPLEtBQUssQ0FBQ3NPLFlBQVksRUFBQyxPQUFLLEVBQUN0TyxLQUFLLENBQUN5TSxVQUFVLEVBQUMsSUFBRSxDQUFLLGVBQzdEO0lBQUksU0FBUyxFQUFDO0VBQTJCLEdBQUMsaUNBQStCLHFGQUFHLDRCQUMvRCxDQUFJLHlDQUFxQyxDQUFLLENBQzVELENBRUwsQ0FDSixlQU9OO0lBQUssS0FBSyxFQUFFO01BQUM4QixPQUFPLEVBQUU7SUFBTTtFQUFFLGdCQUMxQjtJQUFLLEdBQUcsRUFBRXBDLEdBQUk7SUFBQyxLQUFLLEVBQUU7TUFDbEJuRCxLQUFLLEVBQUUsTUFBTTtNQUNidUQsU0FBUyxFQUFFLFFBQVE7TUFDbkJDLFNBQVMsRUFBRSwyQkFBMkI7TUFDdEMzQixlQUFlLEVBQUU7SUFDckI7RUFBRSxnQkFDRTtJQUFLLFNBQVMsRUFBQyxRQUFRO0lBQUMsS0FBSyxFQUFFO01BQzNCN0IsS0FBSyxFQUFFaEosS0FBSyxDQUFDeU0sVUFBVSxHQUFHLElBQUk7TUFDOUJyRCxNQUFNLEVBQUVwSixLQUFLLENBQUMwTSxZQUFZLEdBQUc7SUFDakM7RUFBRSxHQUNHMU0sS0FBSyxDQUFDMk0sVUFBVSxLQUFLLE9BQU8saUJBQ3pCLDBIQUNLM00sS0FBSyxDQUFDMk0sVUFBVSxLQUFLLE9BQU8saUJBQ3pCO0lBQUssR0FBRyxxQkFBYzNNLEtBQUssQ0FBQzRNLElBQUksQ0FBRztJQUM5QixLQUFLLEVBQUU7TUFDSDVELEtBQUssRUFBRWhKLEtBQUssQ0FBQzZNLEtBQUssR0FBRyxJQUFJO01BQ3pCekQsTUFBTSxFQUFFcEosS0FBSyxDQUFDOE0sS0FBSyxHQUFHLElBQUk7TUFDMUJDLFlBQVksRUFBRS9NLEtBQUssQ0FBQ2dOLE1BQU0sR0FBRyxJQUFJO01BQ2pDQyxXQUFXLEVBQUVqTixLQUFLLENBQUNrTixNQUFNLEdBQUcsSUFBSTtNQUNoQ0MsVUFBVSxFQUFFbk4sS0FBSyxDQUFDb04sTUFBTSxHQUFHLElBQUk7TUFDL0JDLGFBQWEsRUFBRXJOLEtBQUssQ0FBQ3NOLE1BQU0sR0FBRztJQUNsQyxDQUFFO0lBQ0YsR0FBRyxFQUFDO0VBQUUsRUFBRSxFQUVoQnROLEtBQUssQ0FBQzJNLFVBQVUsS0FBSyxPQUFPLGlCQUN6QjtJQUFHLEtBQUssRUFBRTtNQUNOSSxZQUFZLEVBQUUvTSxLQUFLLENBQUNnTixNQUFNLEdBQUcsSUFBSTtNQUNqQ0MsV0FBVyxFQUFFak4sS0FBSyxDQUFDa04sTUFBTSxHQUFHLElBQUk7TUFDaENDLFVBQVUsRUFBRW5OLEtBQUssQ0FBQ29OLE1BQU0sR0FBRyxJQUFJO01BQy9CQyxhQUFhLEVBQUVyTixLQUFLLENBQUNzTixNQUFNLEdBQUc7SUFDbEMsQ0FBRTtJQUNDLHVCQUF1QixFQUFFO01BQUM5RSxNQUFNLEVBQUV4SSxLQUFLLENBQUN1TjtJQUFVO0VBQUUsRUFBRSxDQUU5RCxDQUVMLGVBQ047SUFBSyxLQUFLLEVBQUU7TUFBQ04sV0FBVyxFQUFFLEtBQUs7TUFBRUYsWUFBWSxFQUFFO0lBQUs7RUFBRSxnQkFDbEQ7SUFBTyxLQUFLLEVBQUU7TUFBQy9ELEtBQUssRUFBRTtJQUFNO0VBQUUsZ0JBQzFCLHVGQUNBLG9GQUNJLG9GQUNJO0lBQUssU0FBUyxFQUFDO0VBQWMsR0FBQyxNQUFNLENBQU0sQ0FDekMsQ0FDSixDQUNHLGVBQ1IsdUZBQ0Esb0ZBQ0ksb0ZBQ0k7SUFBTyxLQUFLLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDQyxTQUFTLEVBQUUsTUFBTTtNQUFFdUUsWUFBWSxFQUFFO0lBQU07RUFBRSxnQkFDbEUsb0ZBQ0k7SUFBSSxLQUFLLEVBQUU7TUFBQ0MsTUFBTSxFQUFFLE1BQU07TUFBRXhELFNBQVMsRUFBRSxRQUFRO01BQUV5RCxVQUFVLEVBQUU7SUFBSztFQUFFLGdCQUNoRSxzRUFBSWhPLEdBQUcsQ0FBQzRELFFBQVEsQ0FBQzZHLE1BQU0sQ0FBQ0MsU0FBUyxDQUFLLEtBQUMscUZBQUssZUFDNUMsc0VBQUkxSyxHQUFHLENBQUM0RCxRQUFRLENBQUNnSCxXQUFXLENBQUssRUFDaEM1SyxHQUFHLENBQUM0RCxRQUFRLENBQUM2RyxNQUFNLENBQUN3RCxPQUFPLEtBQUssR0FBRyxpQkFDaEMsMEhBQUUsR0FBQyxxRkFBSyxLQUFDLEVBQUNqTyxHQUFHLENBQUM0RCxRQUFRLENBQUM2RyxNQUFNLENBQUN3RCxPQUFPLEVBQUMsR0FBQyxDQUFHLENBRTdDLENBQ0osQ0FDRCxlQUNSO0lBQUcsS0FBSyxFQUFFO01BQUN0QyxLQUFLLEVBQUU7SUFBTTtFQUFFLEVBQUUsZUFDNUI7SUFBTyxXQUFXLEVBQUMsR0FBRztJQUFDLEtBQUssRUFBQyxNQUFNO0lBQUMsS0FBSyxFQUFFO01BQUNtQyxZQUFZLEVBQUU7SUFBTTtFQUFFLGdCQUM5RCxvRkFDSTtJQUFJLEtBQUssRUFBRTtNQUFDQyxNQUFNLEVBQUUsTUFBTTtNQUFFdkUsUUFBUSxFQUFFO0lBQU07RUFBRSxHQUN6Q3hKLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLHNFQUFHLCtCQUE2QixDQUFJLEVBRXZDL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Ysc0VBQUcseUNBQXVDLENBQUksRUFFakQvRixHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDaEIsc0VBQUcsa0JBQWdCLENBQUksRUFFMUIvRixHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZixzRUFBRywrQkFBNkIsQ0FBSSxFQUV2Qy9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLHNFQUFHLGlDQUF5QixDQUFJLEVBRW5DL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE9BQU8saUJBQ2pCLHNFQUFHLDBCQUF3QixDQUFJLENBRWxDLENBQ0osQ0FDRCxlQUNSO0lBQUcsS0FBSyxFQUFFO01BQUM0RixLQUFLLEVBQUU7SUFBTTtFQUFFLEVBQUUsZUFDNUI7SUFBTyxXQUFXLEVBQUM7RUFBRyxnQkFDbEI7SUFBSSxTQUFTLEVBQUMsUUFBUTtJQUFDLEtBQUssRUFBRTtNQUFDckMsS0FBSyxFQUFFO0lBQUs7RUFBRSxnQkFDekM7SUFBSSxTQUFTLEVBQUM7RUFBTyxHQUFDLE1BQUksQ0FBSyxlQUMvQjtJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUMsV0FBTSxDQUFLLEVBQ2hDdEosR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssSUFBSS9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNyQztJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUMsb0JBQWUsQ0FBSyxlQUU5QztJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUMsaUJBQVksQ0FBSyxFQUN0Qy9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmO0lBQUksU0FBUyxFQUFDO0VBQU8sR0FBQyxhQUFXLENBQUssRUFFekMvRixHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZjtJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUMsYUFBVyxDQUFLLEVBRXpDL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Y7SUFBSSxTQUFTLEVBQUM7RUFBTyxHQUFDLGFBQVcsQ0FBSyxDQUV6QyxlQUNMLG9GQUNJO0lBQUksU0FBUyxFQUFDO0VBQU8sR0FBRTJHLE9BQU8sQ0FBTSxlQUNwQztJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUUxTSxHQUFHLENBQUM2SyxNQUFNLENBQU0sRUFDdEM3SyxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxJQUFJL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ3JDO0lBQUksU0FBUyxFQUFDO0VBQU8sR0FDaEIvRixHQUFHLENBQUNlLFdBQVcsS0FBSyxJQUFJLElBQUlmLEdBQUcsQ0FBQ2UsV0FBVyxDQUFDOEosTUFBTSxDQUNsRCxlQUVUO0lBQUksU0FBUyxFQUFDO0VBQU8sR0FBRTdLLEdBQUcsQ0FBQzhLLEtBQUssS0FBSyxJQUFJLElBQUk5SyxHQUFHLENBQUM4SyxLQUFLLENBQUNwRCxPQUFPLENBQU0sRUFFbkUxSCxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZjtJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUUvRixHQUFHLENBQUNtTyxXQUFXLEtBQUssSUFBSSxJQUFJbk8sR0FBRyxDQUFDbU8sV0FBVyxDQUFDQSxXQUFXLENBQU0sRUFHdkZuTyxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZjtJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUUvRixHQUFHLENBQUNtTyxXQUFXLEtBQUssSUFBSSxJQUFJbk8sR0FBRyxDQUFDbU8sV0FBVyxDQUFDQSxXQUFXLENBQU0sRUFHdkZuTyxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZjtJQUFJLFNBQVMsRUFBQztFQUFPLEdBQUUvRixHQUFHLENBQUNtTyxXQUFXLEtBQUssSUFBSSxJQUFJbk8sR0FBRyxDQUFDbU8sV0FBVyxDQUFDQSxXQUFXLENBQU0sQ0FFdkYsRUFDSm5PLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLHVFQUNLL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssSUFBSS9GLEdBQUcsQ0FBQytGLElBQUksS0FBSyxPQUFPLGlCQUN2QztJQUFJLE9BQU8sRUFBQyxHQUFHO0lBQUMsU0FBUyxFQUFDO0VBQWtCLGdCQUN4QztJQUFNLEtBQUssRUFBRTtNQUNUcUksY0FBYyxFQUFFLFdBQVc7TUFDM0JKLFVBQVUsRUFBRSxLQUFLO01BQ2pCRSxVQUFVLEVBQUU7SUFDaEI7RUFBRSxHQUFDLG1CQUFXLENBQU8scUZBQUssZUFDMUI7SUFBTSx1QkFBdUIsRUFBRTtNQUFDcEYsTUFBTSxFQUFFOUksR0FBRyxDQUFDcU87SUFBWTtFQUFFLEVBQUUsQ0FDM0QsRUFFUnJPLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLElBQUkvRixHQUFHLENBQUMrRixJQUFJLEtBQUssT0FBTyxpQkFDdkM7SUFBSSxPQUFPLEVBQUMsR0FBRztJQUFDLFNBQVMsRUFBQztFQUFrQixnQkFDeEM7SUFBTSxLQUFLLEVBQUU7TUFDVHFJLGNBQWMsRUFBRSxXQUFXO01BQzNCSixVQUFVLEVBQUUsS0FBSztNQUNqQkUsVUFBVSxFQUFFO0lBQ2hCO0VBQUUsR0FBQyxtQkFBVyxDQUFPLHFGQUFLLGVBQzFCO0lBQU0sdUJBQXVCLEVBQUU7TUFBQ3BGLE1BQU0sRUFBRTlJLEdBQUcsQ0FBQ3FPO0lBQVk7RUFBRSxFQUFFLENBQzNELENBRVIsRUFFUnJPLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLHVFQUNLL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Y7SUFBSSxPQUFPLEVBQUMsR0FBRztJQUFDLFNBQVMsRUFBQztFQUFrQixnQkFDeEM7SUFBTSxLQUFLLEVBQUU7TUFDVHFJLGNBQWMsRUFBRSxXQUFXO01BQzNCSixVQUFVLEVBQUUsS0FBSztNQUNqQkUsVUFBVSxFQUFFO0lBQ2hCO0VBQUUsR0FBQyxtQkFBVyxDQUFPLHFGQUFLLGVBQzFCO0lBQU0sdUJBQXVCLEVBQUU7TUFBQ3BGLE1BQU0sRUFBRTlJLEdBQUcsQ0FBQ3FPO0lBQVk7RUFBRSxFQUFFLENBQzNELEVBRVJyTyxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZjtJQUFJLE9BQU8sRUFBQyxHQUFHO0lBQUMsU0FBUyxFQUFDO0VBQWtCLGdCQUN4QztJQUFNLEtBQUssRUFBRTtNQUNUcUksY0FBYyxFQUFFLFdBQVc7TUFDM0JKLFVBQVUsRUFBRSxLQUFLO01BQ2pCRSxVQUFVLEVBQUU7SUFDaEI7RUFBRSxHQUFDLG1CQUFXLENBQU8scUZBQUssZUFDMUI7SUFBTSx1QkFBdUIsRUFBRTtNQUFDcEYsTUFBTSxFQUFFOUksR0FBRyxDQUFDcU87SUFBWTtFQUFFLEVBQUUsQ0FDM0QsQ0FFUixFQUVSck8sR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Ysb0ZBQ0k7SUFBSSxPQUFPLEVBQUMsR0FBRztJQUNYLFNBQVMsRUFBQztFQUFrQixnQkFDcEM7SUFBTSxLQUFLLEVBQUU7TUFDVHFJLGNBQWMsRUFBRSxXQUFXO01BQzNCSixVQUFVLEVBQUUsS0FBSztNQUNqQkUsVUFBVSxFQUFFO0lBQ2hCO0VBQUUsR0FBQyxtQkFBVyxDQUFPLHFGQUFLLGVBQ2xCO0lBQU0sdUJBQXVCLEVBQUU7TUFBQ3BGLE1BQU0sRUFBRTlJLEdBQUcsQ0FBQ3FPO0lBQVk7RUFBRSxFQUFFLENBQUssQ0FDcEUsRUFFUnJPLEdBQUcsQ0FBQytGLElBQUksS0FBSyxLQUFLLGlCQUNmLG9GQUNJO0lBQUksT0FBTyxFQUFDLEdBQUc7SUFDWCxTQUFTLEVBQUM7RUFBa0IsZ0JBQ3BDO0lBQU0sS0FBSyxFQUFFO01BQ1RxSSxjQUFjLEVBQUUsV0FBVztNQUMzQkosVUFBVSxFQUFFLEtBQUs7TUFDakJFLFVBQVUsRUFBRTtJQUNoQjtFQUFFLEdBQUMsbUJBQVcsQ0FBTyxxRkFBSyxlQUNsQjtJQUFNLHVCQUF1QixFQUFFO01BQUNwRixNQUFNLEVBQUU5SSxHQUFHLENBQUNxTztJQUFZO0VBQUUsRUFBRSxDQUFLLENBQ3BFLENBRUwsZUFDUjtJQUFHLEtBQUssRUFBRTtNQUFDMUMsS0FBSyxFQUFFO0lBQU07RUFBRSxFQUFFLGVBQzVCO0lBQU8sS0FBSyxFQUFFO01BQUNyQyxLQUFLLEVBQUUsTUFBTTtNQUFFQyxTQUFTLEVBQUU7SUFBTSxDQUFFO0lBQUMsV0FBVyxFQUFDO0VBQUcsZ0JBQzdEO0lBQUksU0FBUyxFQUFDO0VBQVMsR0FDbEJ2SixHQUFHLENBQUM0SSxLQUFLLEtBQUssS0FBSyxpQkFDaEI7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxVQUFLLENBQUssZUFFaEQ7SUFBSSxTQUFTLEVBQUM7RUFBZSxHQUFDLGlCQUFZLENBQUssRUFDOUM1SSxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDaEIsdUlBQ0k7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxXQUFNLENBQUssRUFFNUMvRixHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZix1SUFDSTtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFNBQUksQ0FBSyxlQUMzQztJQUFJLFNBQVMsRUFBQyxtQkFBbUI7SUFBQyxLQUFLLEVBQUU7TUFBQzhDLFVBQVUsRUFBRTtJQUFRO0VBQUUsR0FBQyxTQUNqRSxDQUFLLENBQ04sRUFFTjdJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxPQUFPLGlCQUNqQix1SUFDSTtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFNBQUkscUZBQUssYUFBTSxDQUFLLGVBQ3REO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsVUFBSyxxRkFBSyxhQUFNLENBQUssZUFDdkQ7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxpQkFBYyxxRkFBSyxVQUFNLENBQUssZUFDaEU7SUFBSSxTQUFTLEVBQUMsbUJBQW1CO0lBQUMsS0FBSyxFQUFFO01BQUM4QyxVQUFVLEVBQUU7SUFBUTtFQUFFLEdBQUMsU0FDakUsQ0FBSyxDQUNOLEVBR043SSxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxpQkFDZiwwSEFDSy9GLEdBQUcsQ0FBQ2UsV0FBVyxLQUFLLElBQUksaUJBQ3JCLHVJQUNJO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsU0FBSSxxRkFBSyxhQUFNLENBQUssZUFDdEQ7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxVQUFLLHFGQUFLLGFBQU0sQ0FBSyxlQUN2RDtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLGlCQUFjLHFGQUFLLFVBQU0sQ0FBSyxlQUNoRTtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFNBQUkscUZBQUssZUFBUSxDQUFLLENBQ3pELEVBRU5mLEdBQUcsQ0FBQ2UsV0FBVyxLQUFLLElBQUksaUJBQ3JCO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsU0FBSSxDQUFLLGVBRS9DO0lBQUksU0FBUyxFQUFDLG1CQUFtQjtJQUFDLEtBQUssRUFBRTtNQUFDOEgsVUFBVSxFQUFFO0lBQVE7RUFBRSxHQUFDLFNBQ2pFLENBQUssQ0FDTixFQUVON0ksR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2YsMEhBQ0svRixHQUFHLENBQUNlLFdBQVcsS0FBSyxJQUFJLGlCQUNyQix1SUFDSTtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFNBQUkscUZBQUssYUFBTSxDQUFLLGVBQ3REO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsVUFBSyxxRkFBSyxhQUFNLENBQUssZUFDdkQ7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxpQkFBYyxxRkFBSyxVQUFNLENBQUssZUFDaEU7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxTQUFJLHFGQUFLLGtCQUFXLENBQUssQ0FDNUQsRUFFTmYsR0FBRyxDQUFDZSxXQUFXLEtBQUssSUFBSSxpQkFDckI7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxTQUFJLENBQUssZUFFL0M7SUFBSSxTQUFTLEVBQUMsbUJBQW1CO0lBQUMsS0FBSyxFQUFFO01BQUM4SCxVQUFVLEVBQUU7SUFBUTtFQUFFLEdBQUMsU0FDakUsQ0FBSyxDQUNOLEVBRU43SSxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDaEIsMEhBQ0svRixHQUFHLENBQUNlLFdBQVcsS0FBSyxJQUFJLGlCQUNyQix1SUFDSTtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFNBQUkscUZBQUssYUFBTSxDQUFLLGVBQ3REO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsVUFBSyxxRkFBSyxhQUFNLENBQUssZUFDdkQ7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxpQkFBYyxxRkFBSyxVQUFNLENBQUssZUFDaEU7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxTQUFJLHFGQUFLLGVBQVEsQ0FBSyxDQUN6RCxFQUVOZixHQUFHLENBQUNlLFdBQVcsS0FBSyxJQUFJLGlCQUNyQjtJQUFJLFNBQVMsRUFBQztFQUFtQixHQUFDLFNBQUksQ0FBSyxlQUUvQztJQUFJLFNBQVMsRUFBQyxtQkFBbUI7SUFBQyxLQUFLLEVBQUU7TUFBQzhILFVBQVUsRUFBRTtJQUFRO0VBQUUsR0FBQyxTQUNqRSxDQUFLLENBQ04sRUFFTjdJLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLGlCQUFJO0lBQUksU0FBUyxFQUFDO0VBQW1CLEdBQUMsYUFBVyxDQUFLLGVBQzFFO0lBQUksU0FBUyxFQUFDLG1CQUFtQjtJQUFDLEtBQUssRUFBRTtNQUFDTyxVQUFVLEVBQUU7SUFBUTtFQUFFLEdBQUMsWUFBVSxDQUFLLENBQ2pGLEVBRU43SSxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDaEIsdUlBQ0k7SUFBSSxTQUFTLEVBQUM7RUFBbUIsR0FBQyxXQUFNLENBQUssZUFDN0M7SUFBSSxTQUFTLEVBQUMsbUJBQW1CO0lBQUMsS0FBSyxFQUFFO01BQUN1SSxRQUFRLEVBQUU7SUFBTztFQUFFLEdBQUMsdUJBRTlELENBQUssQ0FDTixDQUdOLEVBQ0puTixZQUFZLEVBQ1pGLFdBQVcsRUFDWGpCLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUNoQiwwSEFDSzRHLEVBQUUsS0FBSyxDQUFDLGlCQUNMLDBIQUNLM00sR0FBRyxDQUFDNEksS0FBSyxLQUFLLEtBQUssaUJBQ2hCLDBIQUNLNUksR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCLG9GQUNJO0lBQUksT0FBTyxFQUFDLEdBQUc7SUFBQyxTQUFTLEVBQUM7RUFBWSxnQkFBQyxzRUFBRywwQkFDekIsQ0FBSSxDQUFLLENBQ3pCLEVBRVJ0SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEIsb0ZBQ0k7SUFBSSxPQUFPLEVBQUMsR0FBRztJQUFDLFNBQVMsRUFBQztFQUFZLGdCQUFDLHNFQUFHLDBCQUN6QixDQUFJLENBQUssQ0FDekIsRUFFUnBILFlBQVksQ0FDZCxFQUVObEIsR0FBRyxDQUFDNEksS0FBSyxLQUFLLEtBQUssaUJBQ2hCLDBIQUNLNUksR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssaUJBQ2hCLG9GQUNJO0lBQUksT0FBTyxFQUFDLEdBQUc7SUFBQyxTQUFTLEVBQUM7RUFBWSxnQkFBQyxzRUFBRywwQkFDekIsQ0FBSSxDQUFLLENBQ3pCLEVBRVJ0SSxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxpQkFDaEIsb0ZBQ0k7SUFBSSxPQUFPLEVBQUMsR0FBRztJQUFDLFNBQVMsRUFBQztFQUFZLGdCQUFDLHNFQUFHLDBCQUN6QixDQUFJLENBQUssQ0FDekIsRUFFUnBILFlBQVksQ0FDZCxDQUVSLENBRVIsQ0FFSCxlQUVSO0lBQUcsS0FBSyxFQUFFO01BQUN5SyxLQUFLLEVBQUU7SUFBTTtFQUFFLEVBQUUsRUFDM0IzTCxHQUFHLENBQUMrRixJQUFJLEtBQUssS0FBSyxJQUFJL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE1BQU0saUJBQ3RDLDBIQUNDL0YsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE9BQU8saUJBQ2pCO0lBQU8sU0FBUyxFQUFDLGdCQUFnQjtJQUFDLEtBQUssRUFBRTtNQUFDLFNBQU8sTUFBTTtNQUFFdUQsS0FBSyxFQUFFLEtBQUs7TUFBRUMsU0FBUyxFQUFFO0lBQU07RUFBRSxnQkFDMUY7SUFBSSxLQUFLLEVBQUU7TUFBQzJFLFVBQVUsRUFBRTtJQUFLO0VBQUUsZ0JBQzNCO0lBQUksU0FBUyxFQUFDLE9BQU87SUFBQyxLQUFLLEVBQUU7TUFBQzNELFNBQVMsRUFBRSxRQUFRO01BQUVZLGVBQWUsRUFBRTtJQUFTO0VBQUUsZ0JBQUMsc0VBQUcsaUJBQVksQ0FBSSxDQUFLLGVBQ3hHO0lBQUksU0FBUyxFQUFDLE9BQU87SUFBQyxLQUFLLEVBQUU7TUFBQ1osU0FBUyxFQUFFLFFBQVE7TUFBRVksZUFBZSxFQUFFO0lBQVM7RUFBRSxnQkFBQyxzRUFBRyxrQkFBYSxDQUFJLENBQUssQ0FDeEcsZUFDTCxvRkFDSTtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFDO0VBQVEsZ0JBQUMsMkRBQUMsK0RBQVk7SUFBQyxJQUFJLEVBQUVuTCxHQUFHLENBQUN1TztFQUFLLEVBQUUsQ0FBSyxlQUN6RTtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFDO0VBQVEsZ0JBQUMsMkRBQUMsK0RBQVk7SUFBQyxJQUFJLEVBQUV2TyxHQUFHLENBQUNrSjtFQUFNLEVBQUUsQ0FBSyxDQUN6RSxDQUNELGVBRVI7SUFBTyxTQUFTLEVBQUMsZ0JBQWdCO0lBQUMsS0FBSyxFQUFFO01BQUMsU0FBTyxPQUFPO01BQUVJLEtBQUssRUFBRSxLQUFLO01BQUVDLFNBQVMsRUFBRTtJQUFNO0VBQUUsZ0JBQ3ZGO0lBQUksS0FBSyxFQUFFO01BQUMyRSxVQUFVLEVBQUU7SUFBSztFQUFFLGdCQUMzQjtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQ2pCLEtBQUssRUFBRTtNQUFDM0QsU0FBUyxFQUFFLFFBQVE7TUFBRVksZUFBZSxFQUFFO0lBQVM7RUFBRSxnQkFBQyxzRUFBRyxVQUMzRCxDQUFJLENBQUssRUFDZG5MLEdBQUcsQ0FBQ3NJLEtBQUssS0FBSyxLQUFLLElBQUl0SSxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDdkM7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUNqQixLQUFLLEVBQUU7TUFBQ3dFLFNBQVMsRUFBRSxRQUFRO01BQUVZLGVBQWUsRUFBRTtJQUFTO0VBQUUsZ0JBQ3pELHNFQUFHLFFBQU0sQ0FBSSxDQUFLLGVBRTFCO0lBQUksU0FBUyxFQUFDLE9BQU87SUFDakIsS0FBSyxFQUFFO01BQUNaLFNBQVMsRUFBRSxRQUFRO01BQUVZLGVBQWUsRUFBRTtJQUFTO0VBQUUsZ0JBQ3pELHNFQUFHLE1BQUksRUFBQ25MLEdBQUcsQ0FBQ3dMLEdBQUcsRUFBQyxHQUFDLENBQUksQ0FBSyxlQUM5QjtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQ2pCLEtBQUssRUFBRTtNQUFDakIsU0FBUyxFQUFFLFFBQVE7TUFBRVksZUFBZSxFQUFFO0lBQVM7RUFBRSxnQkFBQyxzRUFBRyxnQkFDeEQsQ0FBSSxDQUFLLENBQ2pCLGVBQ0wsb0ZBQ0k7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBRTtNQUFDWixTQUFTLEVBQUU7SUFBUTtFQUFFLGdCQUFDLDJEQUFDLCtEQUFZO0lBQzdELElBQUksRUFBRXZLLEdBQUcsQ0FBQ3NMO0VBQVEsRUFBRSxDQUFLLEVBQzVCdEwsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssSUFBSXRJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUN2QztJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFFO01BQUN3RSxTQUFTLEVBQUU7SUFBUTtFQUFFLGdCQUFDLDJEQUFDLCtEQUFZO0lBQzdELElBQUksRUFBRXZLLEdBQUcsQ0FBQ3VMO0VBQVEsRUFBRSxDQUFLLGVBRWpDO0lBQUksU0FBUyxFQUFDLE9BQU87SUFBQyxLQUFLLEVBQUM7RUFBUSxnQkFBQywyREFBQywrREFBWTtJQUFDLElBQUksRUFBRXZMLEdBQUcsQ0FBQ3lMO0VBQUssRUFBRSxDQUMvRCxlQUNMO0lBQUksU0FBUyxFQUFDLE9BQU87SUFBQyxLQUFLLEVBQUM7RUFBUSxnQkFBQywyREFBQywrREFBWTtJQUFDLElBQUksRUFBRXpMLEdBQUcsQ0FBQzBMO0VBQVMsRUFBRSxDQUNuRSxDQUNKLENBQ0QsQ0FDTCxFQUVOMUwsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Y7SUFBTyxTQUFTLEVBQUMsZ0JBQWdCO0lBQzFCLEtBQUssRUFBRTtNQUFDLFNBQU8sTUFBTTtNQUFFdUQsS0FBSyxFQUFFLEtBQUs7TUFBRUMsU0FBUyxFQUFFO0lBQU07RUFBRSxnQkFDM0Q7SUFBSSxLQUFLLEVBQUU7TUFBQzJFLFVBQVUsRUFBRTtJQUFLO0VBQUUsZ0JBQzNCO0lBQUksU0FBUyxFQUFDLE9BQU87SUFDakIsS0FBSyxFQUFFO01BQUMzRCxTQUFTLEVBQUUsUUFBUTtNQUFFWSxlQUFlLEVBQUU7SUFBUztFQUFFLGdCQUFDLHNFQUFHLFVBQzNELENBQUksQ0FBSyxFQUNkbkwsR0FBRyxDQUFDc0ksS0FBSyxLQUFLLEtBQUssSUFBSXRJLEdBQUcsQ0FBQytGLElBQUksS0FBSyxNQUFNLGlCQUN2QztJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQ2pCLEtBQUssRUFBRTtNQUFDd0UsU0FBUyxFQUFFLFFBQVE7TUFBRVksZUFBZSxFQUFFO0lBQVM7RUFBRSxnQkFDekQsc0VBQUcsUUFBTSxDQUFJLENBQUssZUFFMUI7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUNqQixLQUFLLEVBQUU7TUFBQ1osU0FBUyxFQUFFLFFBQVE7TUFBRVksZUFBZSxFQUFFO0lBQVM7RUFBRSxnQkFDekQsc0VBQUcsTUFBSSxFQUFDbkwsR0FBRyxDQUFDd0wsR0FBRyxFQUFDLEdBQUMsQ0FBSSxDQUFLLGVBQzlCO0lBQUksU0FBUyxFQUFDLE9BQU87SUFDakIsS0FBSyxFQUFFO01BQUNqQixTQUFTLEVBQUUsUUFBUTtNQUFFWSxlQUFlLEVBQUU7SUFBUztFQUFFLGdCQUFDLHNFQUFHLGdCQUN4RCxDQUFJLENBQUssQ0FDakIsZUFDTCxvRkFDSTtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFFO01BQUNaLFNBQVMsRUFBRTtJQUFRO0VBQUUsZ0JBQUMsMkRBQUMsK0RBQVk7SUFDN0QsSUFBSSxFQUFFdkssR0FBRyxDQUFDc0w7RUFBUSxFQUFFLENBQUssRUFDNUJ0TCxHQUFHLENBQUNzSSxLQUFLLEtBQUssS0FBSyxJQUFJdEksR0FBRyxDQUFDK0YsSUFBSSxLQUFLLE1BQU0saUJBQ3ZDO0lBQUksU0FBUyxFQUFDLE9BQU87SUFBQyxLQUFLLEVBQUU7TUFBQ3dFLFNBQVMsRUFBRTtJQUFRO0VBQUUsZ0JBQUMsMkRBQUMsK0RBQVk7SUFDN0QsSUFBSSxFQUFFdkssR0FBRyxDQUFDdUw7RUFBUSxFQUFFLENBQUssZUFFakM7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBQztFQUFRLGdCQUFDLDJEQUFDLCtEQUFZO0lBQUMsSUFBSSxFQUFFdkwsR0FBRyxDQUFDeUw7RUFBSyxFQUFFLENBQy9ELGVBQ0w7SUFBSSxTQUFTLEVBQUMsT0FBTztJQUFDLEtBQUssRUFBQztFQUFRLGdCQUFDLDJEQUFDLCtEQUFZO0lBQUMsSUFBSSxFQUFFekwsR0FBRyxDQUFDMEw7RUFBUyxFQUFFLENBQ25FLENBQ0osQ0FDRCxFQUVYMUwsR0FBRyxDQUFDK0YsSUFBSSxLQUFLLEtBQUssaUJBQ2Y7SUFBTyxTQUFTLEVBQUMsZ0JBQWdCO0lBQzFCLEtBQUssRUFBRTtNQUFDLFNBQU8sT0FBTztNQUFFdUQsS0FBSyxFQUFFLEtBQUs7TUFBRUMsU0FBUyxFQUFFO0lBQU07RUFBRSxnQkFDNUQ7SUFBSSxLQUFLLEVBQUU7TUFBQzJFLFVBQVUsRUFBRTtJQUFLO0VBQUUsZ0JBQzNCO0lBQUksU0FBUyxFQUFDLE9BQU87SUFDakIsS0FBSyxFQUFFO01BQUMzRCxTQUFTLEVBQUUsUUFBUTtNQUFFWSxlQUFlLEVBQUU7SUFBUztFQUFFLGdCQUM1RCxzRUFBRyxpQkFBWSxDQUFJLENBQ2YsZUFDTDtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQ2pCLEtBQUssRUFBRTtNQUFDWixTQUFTLEVBQUUsUUFBUTtNQUFFWSxlQUFlLEVBQUU7SUFBUztFQUFFLGdCQUM1RCxzRUFBRyxrQkFBYSxDQUFJLENBQ2hCLENBQ0osZUFDTCxvRkFDSTtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFDO0VBQVEsZ0JBQUMsMkRBQUMsK0RBQVk7SUFBQyxJQUFJLEVBQUVuTCxHQUFHLENBQUN1TztFQUFLLEVBQUUsQ0FDL0QsZUFDTDtJQUFJLFNBQVMsRUFBQyxPQUFPO0lBQUMsS0FBSyxFQUFDO0VBQVEsZ0JBQUMsMkRBQUMsK0RBQVk7SUFBQyxJQUFJLEVBQUV2TyxHQUFHLENBQUNrSjtFQUFNLEVBQUUsQ0FDaEUsQ0FDSixDQUNELGVBRVosc0VBQUssZUFDTCxzRUFBSyxlQUNMO0lBQUcsS0FBSyxFQUFFO01BQUN5QyxLQUFLLEVBQUU7SUFBTTtFQUFFLEVBQUUsRUFDM0IzTCxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDaEIsdUlBQ0k7SUFBRyxTQUFTLEVBQUM7RUFBYSxHQUFDLHVDQUVwQixxRkFBSyxLQUFDLEVBQUN6RSxlQUFlLENBQUNzSyxRQUFRLENBQUM1TCxHQUFHLENBQUMwTCxRQUFRLENBQUMsRUFBRTtJQUFDRyxJQUFJLEVBQUU7RUFBSSxDQUFDLENBQUMsZUFDL0Qsc0ZBQU0sc0VBQUcsR0FBQyxFQUFDN0wsR0FBRyxDQUFDOEwsT0FBTyxDQUFDQyxJQUFJLENBQUssQ0FBTyxDQUN2QyxlQUVKLHNFQUFLLGVBQ0w7SUFBRyxLQUFLLEVBQUU7TUFBQyxTQUFPLE9BQU87TUFBRXFDLGNBQWMsRUFBRTtJQUFXO0VBQUUsR0FBQywwQkFDM0MsQ0FBSSxlQUNsQjtJQUFHLEtBQUssRUFBRTtNQUFDekMsS0FBSyxFQUFFO0lBQU07RUFBRSxFQUFFLHFGQUFLLENBQ2xDLEVBRU4zTCxHQUFHLENBQUMrRixJQUFJLEtBQUssTUFBTSxpQkFDaEIsdUlBQ0k7SUFBTyxLQUFLLEVBQUU7TUFBQ3VELEtBQUssRUFBRSxNQUFNO01BQUVDLFNBQVMsRUFBRTtJQUFLLENBQUU7SUFBQyxXQUFXLEVBQUM7RUFBRyxnQkFDNUQsb0ZBQ0k7SUFBSSxLQUFLLEVBQUU7TUFBQ2dCLFNBQVMsRUFBRSxNQUFNO01BQUU2RCxjQUFjLEVBQUU7SUFBVztFQUFFLEdBQUMsb0JBRTdELENBQUssZUFDTDtJQUFJLEtBQUssRUFBRTtNQUFDN0QsU0FBUyxFQUFFLFFBQVE7TUFBRTZELGNBQWMsRUFBRTtJQUFXO0VBQUUsR0FBQyx1QkFFL0QsQ0FBSyxlQUNMO0lBQUksS0FBSyxFQUFFO01BQUM3RCxTQUFTLEVBQUUsT0FBTztNQUFFNkQsY0FBYyxFQUFFO0lBQVc7RUFBRSxHQUFDLGdCQUU5RCxDQUFLLENBQ0osQ0FDRCxDQUNULEVBRU5wTyxHQUFHLENBQUNnTSxVQUFVLEtBQUssSUFBSSxpQkFDcEIsdUlBQ0k7SUFBRyxTQUFTLEVBQUMsS0FBSztJQUFDLEtBQUssRUFBRTtNQUFFLFNBQU8sTUFBTTtNQUFFQyxLQUFLLEVBQUU7SUFBTztFQUFFLEdBQUMsOEJBQzFDLENBQUksZUFDdEI7SUFBRyxLQUFLLEVBQUU7TUFBQ04sS0FBSyxFQUFFO0lBQU07RUFBRSxFQUFFLGVBQzVCO0lBQUcsS0FBSyxFQUFFO01BQUNNLEtBQUssRUFBRTtJQUFTLENBQUU7SUFDMUIsdUJBQXVCLEVBQUU7TUFBQ25ELE1BQU0sRUFBRTlJLEdBQUcsQ0FBQ2dNO0lBQVU7RUFBRSxFQUFFLENBQ3hELENBRU4sQ0FDSixDQUNHLGVBQ1IsdUZBQ0Esb0ZBQ0ksb0ZBQ0k7SUFBSyxTQUFTLEVBQUM7RUFBYyxHQUFDLE1BQU0sQ0FBTSxDQUN6QyxDQUNKLENBQ0csQ0FDSixDQUNOLGVBQ047SUFBSyxTQUFTLEVBQUM7RUFBUSxHQUNsQjFMLEtBQUssQ0FBQ29PLElBQUksS0FBSyxPQUFPLGlCQUNuQiwwSEFDS3BPLEtBQUssQ0FBQ2tPLFVBQVUsS0FBSyxPQUFPLGlCQUN6QjtJQUFHLEtBQUssRUFBRTtNQUNOaEYsUUFBUSxFQUFFbEosS0FBSyxDQUFDbU8sUUFBUSxHQUFHLElBQUk7TUFDL0JsRSxTQUFTLEVBQUUsUUFBUTtNQUNuQmdELFdBQVcsRUFBRSxLQUFLO01BQ2xCRixZQUFZLEVBQUU7SUFDbEIsQ0FBRTtJQUNDLHVCQUF1QixFQUFFO01BQUN2RSxNQUFNLEVBQUV4SSxLQUFLLENBQUNvTztJQUFJO0VBQUUsRUFBRSxFQUV0RHBPLEtBQUssQ0FBQ2tPLFVBQVUsS0FBSyxPQUFPLGlCQUN6QjtJQUFLLEdBQUcscUJBQWNsTyxLQUFLLENBQUNxTyxXQUFXLENBQUc7SUFDckMsS0FBSyxFQUFFO01BQ0hyRixLQUFLLEVBQUUsTUFBTTtNQUNidUQsU0FBUyxFQUFFdk0sS0FBSyxDQUFDc08sWUFBWSxHQUFHO0lBQ3BDLENBQUU7SUFDRixHQUFHLEVBQUM7RUFBRSxFQUFFLENBRWxCLENBRUwsQ0FDSixDQUNKLENBRVA7QUFHWCxDQUFDLENBQUM7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ25oQ0YsSUFBSXZQLFlBQVk7QUFDaEIsaUVBQWVBLFlBQVksR0FBRyxzQkFBQ21OLEtBQUssRUFBSztFQUVyQyxJQUFNL0osWUFBWSxHQUFHLFNBQWZBLFlBQVksQ0FBSUMsR0FBRyxFQUFFQyxTQUFTLEVBQUVDLFNBQVMsRUFBSztJQUNoRCxJQUFJQyxLQUFLO0lBQ1RILEdBQUcsR0FBR0ksTUFBTSxDQUFDSixHQUFHLENBQUM7SUFDakJBLEdBQUcsR0FBRyxDQUFDLE9BQU9DLFNBQVMsS0FBSyxXQUFXLEdBQUdELEdBQUcsQ0FBQ0ssT0FBTyxDQUFDSixTQUFTLENBQUMsR0FBR0QsR0FBRyxFQUFFTSxRQUFRLEVBQUU7SUFDbEZILEtBQUssR0FBR0gsR0FBRyxDQUFDTyxLQUFLLENBQUMsR0FBRyxDQUFDO0lBQ3RCSixLQUFLLENBQUMsQ0FBQyxDQUFDLEdBQUdBLEtBQUssQ0FBQyxDQUFDLENBQUMsQ0FBQ0csUUFBUSxFQUFFLENBQUNFLE9BQU8sQ0FBQyx5QkFBeUIsRUFBRSxJQUFJLElBQUlOLFNBQVMsSUFBSSxHQUFHLENBQUMsQ0FBQztJQUM1RixPQUFPQyxLQUFLLENBQUNNLElBQUksQ0FBQyxHQUFHLENBQUM7RUFDMUIsQ0FBQztFQUVELE9BQVFWLFlBQVksQ0FBQytKLEtBQUssQ0FBQ3NDLElBQUksRUFBQyxDQUFDLEVBQUUsR0FBRyxDQUFDO0FBRTNDLENBQUM7Ozs7Ozs7Ozs7O0FDZEQ7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVDLFdBQVNyUCxDQUFDLEVBQUU7RUFFWkEsQ0FBQyxDQUFDc1AsRUFBRSxDQUFDQyxnQkFBZ0IsR0FBRyxVQUFTQyxPQUFPLEVBQUU7SUFFekMsSUFBTUMsUUFBUSxHQUFHO01BQ2hCQyxPQUFPLEVBQUUsRUFBRTtNQUNYQyxjQUFjLEVBQUUsRUFBRTtNQUNsQkMsbUJBQW1CLEVBQUUsRUFBRTtNQUN2QkMsZUFBZSxFQUFFLEVBQUU7TUFDbkJDLGtCQUFrQixFQUFFLEdBQUc7TUFDdkJDLGNBQWMsRUFBRSxHQUFHO01BQ25CQyxXQUFXLEVBQUU7SUFDZCxDQUFDO0lBRUQsSUFBTUMsUUFBUSxHQUFHalEsQ0FBQyxDQUFDa1EsTUFBTSxDQUFDLENBQUMsQ0FBQyxFQUFFVCxRQUFRLEVBQUVELE9BQU8sQ0FBQztJQUVoRCxPQUFPLElBQUksQ0FBQy9ILElBQUksQ0FBQyxZQUFXO01BQzNCLElBQU0wSSxLQUFLLEdBQUduUSxDQUFDLENBQUN3UCxPQUFPLEVBQUUsSUFBSSxDQUFDO01BQzlCLElBQU1ZLEtBQUssR0FBR0MsSUFBSSxDQUFDQyxJQUFJLENBQUNILEtBQUssQ0FBQ3ZHLE1BQU0sR0FBR3FHLFFBQVEsQ0FBQ1AsT0FBTyxDQUFDO01BRXhELElBQU1qRCxTQUFTLEdBQUdDLFFBQVEsQ0FBQzZELGFBQWEsQ0FBQyxLQUFLLENBQUM7TUFDL0MsSUFBTUMsU0FBUyxHQUFHOUQsUUFBUSxDQUFDNkQsYUFBYSxDQUFDLFFBQVEsQ0FBQztNQUNsRCxJQUFNRSxLQUFLLEdBQUcvRCxRQUFRLENBQUM2RCxhQUFhLENBQUMsUUFBUSxDQUFDO01BQzlDLElBQU1HLEVBQUUsR0FBR2hFLFFBQVEsQ0FBQzZELGFBQWEsQ0FBQyxNQUFNLENBQUM7TUFHekNDLFNBQVMsQ0FBQ0csU0FBUyxHQUFHVixRQUFRLENBQUNILGtCQUFrQjtNQUNqRFcsS0FBSyxDQUFDRSxTQUFTLEdBQUdWLFFBQVEsQ0FBQ0YsY0FBYztNQUV6Q3RELFNBQVMsQ0FBQ21FLFNBQVMsR0FBR1gsUUFBUSxDQUFDTixjQUFjO01BQzdDYSxTQUFTLENBQUNJLFNBQVMsR0FBR1gsUUFBUSxDQUFDTCxtQkFBbUI7TUFDbERhLEtBQUssQ0FBQ0csU0FBUyxHQUFHWCxRQUFRLENBQUNKLGVBQWU7TUFFMUNXLFNBQVMsQ0FBQ0ssS0FBSyxDQUFDQyxXQUFXLEdBQUcsS0FBSztNQUNuQ04sU0FBUyxDQUFDTyxTQUFTLENBQUNDLEdBQUcsQ0FBQyxLQUFLLENBQUM7TUFDOUJSLFNBQVMsQ0FBQ08sU0FBUyxDQUFDQyxHQUFHLENBQUMsU0FBUyxDQUFDO01BQ2xDUixTQUFTLENBQUNPLFNBQVMsQ0FBQ0MsR0FBRyxDQUFDLFNBQVMsQ0FBQztNQUNsQ1AsS0FBSyxDQUFDSSxLQUFLLENBQUNJLFVBQVUsR0FBRyxLQUFLO01BQzlCUixLQUFLLENBQUNNLFNBQVMsQ0FBQ0MsR0FBRyxDQUFDLEtBQUssQ0FBQztNQUMxQlAsS0FBSyxDQUFDTSxTQUFTLENBQUNDLEdBQUcsQ0FBQyxTQUFTLENBQUM7TUFDOUJQLEtBQUssQ0FBQ00sU0FBUyxDQUFDQyxHQUFHLENBQUMsU0FBUyxDQUFDO01BQzlCdkUsU0FBUyxDQUFDb0UsS0FBSyxDQUFDL0YsU0FBUyxHQUFHLE9BQU87TUFDbkMyQixTQUFTLENBQUNvRSxLQUFLLENBQUN4QyxZQUFZLEdBQUcsTUFBTTtNQUVyQzVCLFNBQVMsQ0FBQ3lFLFdBQVcsQ0FBQ1YsU0FBUyxDQUFDO01BQ2hDL0QsU0FBUyxDQUFDeUUsV0FBVyxDQUFDUixFQUFFLENBQUM7TUFDekJqRSxTQUFTLENBQUN5RSxXQUFXLENBQUNULEtBQUssQ0FBQztNQUU1QnpRLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ21SLEtBQUssQ0FBQzFFLFNBQVMsQ0FBQztNQUV4QjJFLE1BQU0sRUFBRTtNQUVScFIsQ0FBQyxDQUFDeVEsS0FBSyxDQUFDLENBQUM1TSxLQUFLLENBQUMsWUFBVztRQUN6QixJQUFJb00sUUFBUSxDQUFDRCxXQUFXLEdBQUcsQ0FBQyxHQUFHSSxLQUFLLEVBQUU7VUFDckNILFFBQVEsQ0FBQ0QsV0FBVyxHQUFHSSxLQUFLO1FBQzdCLENBQUMsTUFBTTtVQUNOSCxRQUFRLENBQUNELFdBQVcsRUFBRTtRQUN2QjtRQUNBb0IsTUFBTSxFQUFFO01BQ1QsQ0FBQyxDQUFDO01BRUZwUixDQUFDLENBQUN3USxTQUFTLENBQUMsQ0FBQzNNLEtBQUssQ0FBQyxZQUFXO1FBQzdCLElBQUlvTSxRQUFRLENBQUNELFdBQVcsR0FBRyxDQUFDLEdBQUcsQ0FBQyxFQUFFO1VBQ2pDQyxRQUFRLENBQUNELFdBQVcsR0FBRyxDQUFDO1FBQ3pCLENBQUMsTUFBTTtVQUNOQyxRQUFRLENBQUNELFdBQVcsRUFBRTtRQUN2QjtRQUNBb0IsTUFBTSxFQUFFO01BQ1QsQ0FBQyxDQUFDO01BRUYsU0FBU0EsTUFBTSxHQUFHO1FBQ2pCLElBQU1DLElBQUksR0FBSSxDQUFDcEIsUUFBUSxDQUFDRCxXQUFXLEdBQUcsQ0FBQyxJQUFJQyxRQUFRLENBQUNQLE9BQU8sR0FBSSxDQUFDO1FBQ2hFLElBQUk0QixFQUFFLEdBQUdELElBQUksR0FBR3BCLFFBQVEsQ0FBQ1AsT0FBTyxHQUFHLENBQUM7UUFFcEMsSUFBSTRCLEVBQUUsR0FBR25CLEtBQUssQ0FBQ3ZHLE1BQU0sRUFBRTtVQUN0QjBILEVBQUUsR0FBR25CLEtBQUssQ0FBQ3ZHLE1BQU07UUFDbEI7UUFFQXVHLEtBQUssQ0FBQ3RLLElBQUksRUFBRTtRQUNac0ssS0FBSyxDQUFDb0IsS0FBSyxDQUFFRixJQUFJLEdBQUMsQ0FBQyxFQUFHQyxFQUFFLENBQUMsQ0FBQ25MLElBQUksRUFBRTtRQUVoQ3VLLEVBQUUsQ0FBQ0MsU0FBUyxHQUFHVSxJQUFJLEdBQUcsS0FBSyxHQUFHQyxFQUFFLEdBQUcsT0FBTyxHQUFHbkIsS0FBSyxDQUFDdkcsTUFBTSxHQUFHLFNBQVM7UUFFckUsSUFBSXVHLEtBQUssQ0FBQ3ZHLE1BQU0sSUFBSXFHLFFBQVEsQ0FBQ1AsT0FBTyxFQUFFO1VBQ3JDMVAsQ0FBQyxDQUFDeU0sU0FBUyxDQUFDLENBQUM1RyxJQUFJLEVBQUU7UUFDcEIsQ0FBQyxNQUFNO1VBQ043RixDQUFDLENBQUN5TSxTQUFTLENBQUMsQ0FBQ3RHLElBQUksRUFBRTtRQUNwQjtNQUNEO0lBQ0QsQ0FBQyxDQUFDO0VBRUgsQ0FBQztBQUVGLENBQUMsRUFBQ3FMLE1BQU0sQ0FBQzs7Ozs7Ozs7OztBQ3BHVDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcGJvbnMuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbXBvbmVudHMvY29tbWFuZGUvQ29tbWFuZGUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbXBvbmVudHMvY29tbWFuZGUvUHJpbnRDb21tYW5kZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvZm9uY3Rpb25zL051bWJlckZvcm1hdC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvanF1ZXJ5LnNpbXBsZVBhZ2luYXRpb24uanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvIHN5bmMgXlxcLlxcLy4qJCJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4vY3NzL2Jvb3RzdHJhcC5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL21kYi5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3dhdmVzLmNzcyc7XHJcbmltcG9ydCAnLi9jc3MvYWxsLXRoZW1lcy5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3NlbGVjdDIubWluLmNzcyc7XHJcbmltcG9ydCAnLi9jc3Mvc3R5bGUuY3NzJztcclxuXHJcblxyXG5pbXBvcnQgJy4vanMvYm9vdHN0cmFwLmpzJztcclxuaW1wb3J0ICcuL2pzL2RhdGFzY3JpcHQuanMnO1xyXG5pbXBvcnQgJy4vanMvc2VsZWN0Mi5taW4uanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnRhYmxlVG9FeGNlbC5qcyc7XHJcbmltcG9ydCAnLi9qcy9qcXVlcnkudmFsaWRhdGUuanMnO1xyXG5pbXBvcnQgJy4vanMvYWRtaW4uanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnNpbXBsZVBhZ2luYXRpb24nO1xyXG5cclxuXHJcbmltcG9ydCAnLi9jb21wb25lbnRzL2NvbW1hbmRlL0NvbW1hbmRlJztcclxuIiwiaW1wb3J0IFJlYWN0LCB7dXNlRWZmZWN0LCB1c2VSZWYsIHVzZVN0YXRlfSBmcm9tICdyZWFjdCc7XG5pbXBvcnQge3VzZVJlYWN0VG9QcmludH0gZnJvbSBcInJlYWN0LXRvLXByaW50XCI7XG5pbXBvcnQge1ByaW50Q29tbWFuZGV9IGZyb20gXCIuL1ByaW50Q29tbWFuZGVcIjtcbmltcG9ydCBOdW1iZXJGb3JtYXQgZnJvbSBcIi4uLy4uL2ZvbmN0aW9ucy9OdW1iZXJGb3JtYXRcIjtcbmltcG9ydCB7RWRpdFRleHR9IGZyb20gXCJyZWFjdC1lZGl0LXRleHRcIjtcbmltcG9ydCB7ZGV2aWNlVHlwZX0gZnJvbSBcInJlYWN0LWRldmljZS1kZXRlY3RcIjtcbmltcG9ydCBheGlvcyBmcm9tIFwiYXhpb3NcIjtcbmltcG9ydCAkIGZyb20gXCJqcXVlcnlcIjtcbmltcG9ydCBSZWFjdEhUTUxUYWJsZVRvRXhjZWwgZnJvbSAncmVhY3QtaHRtbC10YWJsZS10by1leGNlbCc7XG5pbXBvcnQge2NyZWF0ZVJvb3R9IGZyb20gXCJyZWFjdC1kb20vY2xpZW50XCI7XG5pbXBvcnQgTW9tZW50IGZyb20gXCJyZWFjdC1tb21lbnRcIjtcblxuY29uc3QgQ29tbWFuZGUgPSAoKSA9PiB7XG5cbiAgICBjb25zdCBbbG9hZGluZywgc2V0TG9hZGluZ10gPSB1c2VTdGF0ZShmYWxzZSk7XG4gICAgY29uc3QgW2Jvbiwgc2V0Qm9uXSA9IHVzZVN0YXRlKCcnKTtcbiAgICBjb25zdCBbbGlnbmVzLCBzZXRMaWduZXNdID0gdXNlU3RhdGUoW10pO1xuICAgIGNvbnN0IFtncm91cGVzLCBzZXRHcm91cGVzXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbZm9ybWUsIHNldGZvcm1lXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbZm9ybWVzLCBzZXRmb3JtZXNdID0gdXNlU3RhdGUoW10pO1xuXG4gICAgY29uc3QgZmV0Y2hCb24gPSBhc3luYyAoKSA9PiB7XG4gICAgICAgIGNvbnN0IGJib24gPSBKU09OLnBhcnNlKCQoJyNqc29uYm9uJykudmFsKCkpO1xuICAgICAgICBjb25zdCBmb3JtZSA9IEpTT04ucGFyc2UoJCgnI2pzb25mb3JtZScpLnZhbCgpKTtcbiAgICAgICAgY29uc3QgZm9ybWVzID0gSlNPTi5wYXJzZSgkKCcjanNvbmZvcm1lcycpLnZhbCgpKTtcbiAgICAgICAgc2V0Qm9uKGJib24pO1xuICAgICAgICBzZXRMaWduZXMoYmJvbi5saWduZXMpO1xuICAgICAgICBzZXRHcm91cGVzKGJib24uZ3JvdXBlcyk7XG4gICAgICAgIHNldExvYWRpbmcodHJ1ZSk7XG4gICAgICAgIHNldGZvcm1lKGZvcm1lKTtcbiAgICAgICAgc2V0Zm9ybWVzKGZvcm1lcyk7XG4gICAgICAgIGlmIChiYm9uLnByZXBhcmF0aW9uICE9PSBudWxsKSB7XG4gICAgICAgICAgICBzZXRTdWl2aShiYm9uLnByZXBhcmF0aW9uLmxpZ25lcyk7XG4gICAgICAgIH1cblxuICAgIH07XG4gICAgdXNlRWZmZWN0KCgpID0+IHtcbiAgICAgICAgZmV0Y2hCb24oKTtcbiAgICB9LCBbXSk7XG5cbiAgICBsZXQgcmVuZGVyTGlnbmUgPSBudWxsO1xuICAgIGxldCByZW5kZXJDYWlzc2UgPSBudWxsO1xuICAgIGxldCByZW5kZXJHcm91cGUgPSBudWxsO1xuICAgIGxldCByZW5kZXJHcm91cGVNb2JpbGUgPSBudWxsO1xuICAgIGxldCByZW5kZXJMaWduZU1vYmlsZSA9IG51bGw7XG4gICAgY29uc3QgbnVtYmVyVG9MZXR0ZXJzID0gcmVxdWlyZSgnbnVtYmVyLTItbGV0dGVycycpO1xuXG4gICAgY29uc3QgY29tcG9uZW50UmVmID0gdXNlUmVmKCk7XG4gICAgY29uc3QgaGFuZGxlUHJpbnQgPSB1c2VSZWFjdFRvUHJpbnQoe1xuICAgICAgICBjb250ZW50OiAoKSA9PiBjb21wb25lbnRSZWYuY3VycmVudCxcbiAgICB9KTtcbiAgICBjb25zdCBoYW5kbGVQcmludGUgPSB1c2VSZWFjdFRvUHJpbnQoe1xuICAgICAgICBjb250ZW50OiAoKSA9PiBjb21wb25lbnRSZWYuY3VycmVudCxcbiAgICAgICAgb25CZWZvcmVHZXRDb250ZW50OiAoKSA9PiB7XG4gICAgICAgICAgICAkKCcuaGVhZGVyJykuYWRkQ2xhc3MoXCJoaWRlXCIpO1xuICAgICAgICAgICAgJCgnLmZvb3RlcicpLmFkZENsYXNzKFwiaGlkZVwiKTtcbiAgICAgICAgfSxcbiAgICAgICAgb25BZnRlclByaW50OiAoKSA9PiB7XG4gICAgICAgICAgICAkKCcuaGVhZGVyJykucmVtb3ZlQ2xhc3MoXCJoaWRlXCIpO1xuICAgICAgICAgICAgJCgnLmZvb3RlcicpLnJlbW92ZUNsYXNzKFwiaGlkZVwiKTtcbiAgICAgICAgfVxuICAgIH0pO1xuXG4gICAgZnVuY3Rpb24gcGRmQm9uKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICAkKFwiI3BycGRmXCIpLmNzcyhcImRpc3BsYXlcIiwgXCJibG9ja1wiKTtcbiAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSBcIi9jcm0vZG9jL2F0dGFjaGUvXCIgKyBib24uaWQgKyBcIi9ib24vb3VpXCI7XG4gICAgfVxuICAgIGNvbnN0IGZvcm1hdE51bWJlciA9IChudW0sIHByZWNpc2lvbiwgc2VwYXJhdG9yKSA9PiB7XG4gICAgICAgIGxldCBwYXJ0cztcbiAgICAgICAgbnVtID0gTnVtYmVyKG51bSk7XG4gICAgICAgIG51bSA9ICh0eXBlb2YgcHJlY2lzaW9uICE9PSAndW5kZWZpbmVkJyA/IG51bS50b0ZpeGVkKHByZWNpc2lvbikgOiBudW0pLnRvU3RyaW5nKCk7XG4gICAgICAgIHBhcnRzID0gbnVtLnNwbGl0KCcuJyk7XG4gICAgICAgIHBhcnRzWzBdID0gcGFydHNbMF0udG9TdHJpbmcoKS5yZXBsYWNlKC8oXFxkKSg/PShcXGR7M30pKyg/IVxcZCkpL2csICckMScgKyAoc2VwYXJhdG9yKSk7XG4gICAgICAgIHJldHVybiBwYXJ0cy5qb2luKCcsJyk7XG4gICAgfVxuICAgIGFzeW5jIGZ1bmN0aW9uIGR1cGxpcXVlckJvbihlKSB7XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKVxuICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICQoJyNDb25maXJtRGVsZXRlJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAkKCcjYWNjZXB0JykuY2xpY2soYXN5bmMgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCgnI0NvbmZpcm1EZWxldGUnKS5tb2RhbCgnaGlkZScpXG4gICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2Jvbi9kdXBsaXF1ZXIvJyArIGJvbi5pZCxcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSAnL2NybS9ib24vJyArIHJlc3BvbnNlLmRhdGFbJ3Jlc3VsdCddICsgJy8nICsgYm9uLmNoYW50aWVyLmlkXG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfVxuICAgIGFzeW5jIGZ1bmN0aW9uIHNhdmVSZW1pc2UocmVzcCkge1xuICAgICAgICBjb25zdCB2YWwgPSByZXNwLnZhbHVlLnJlcGxhY2UoJywnLCAnLicpXG4gICAgICAgIGlmIChyZXNwLnZhbHVlICE9PSAnJyAmJiAhaXNOYU4odmFsKSkge1xuICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vbGlnbmUvdXBkL2Jvbi9yZW1pc2UvJyArIHJlc3AubmFtZSArICcvJyArIGJvbi5pZCArICcvJyArIHJlc3AudmFsdWUucmVwbGFjZSgnLicsICcsJyksXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKVxuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKClcbiAgICAgICAgfVxuICAgIH1cbiAgICBhc3luYyBmdW5jdGlvbiBzYXZlUHUocmVzcCkge1xuICAgICAgICBjb25zdCB2YWwgPSByZXNwLnZhbHVlLnJlcGxhY2UoJywnLCAnLicpXG4gICAgICAgIGlmIChyZXNwLnZhbHVlICE9PSAnJyAmJiAhaXNOYU4odmFsKSkge1xuICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vbGlnbmUvdXBkL2Jvbi9wdS8nICsgcmVzcC5uYW1lICsgJy8nICsgYm9uLmlkICsgJy8nICsgcmVzcC52YWx1ZS5yZXBsYWNlKCcuJywgJywnKSxcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCgpXG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKVxuICAgICAgICB9XG4gICAgfVxuICAgIGFzeW5jIGZ1bmN0aW9uIHNhdmVRdGUocmVzcCkge1xuICAgICAgICBjb25zdCB2YWwgPSByZXNwLnZhbHVlLnJlcGxhY2UoJywnLCAnLicpXG4gICAgICAgIGlmIChyZXNwLnZhbHVlICE9PSAnJyAmJiAhaXNOYU4odmFsKSkge1xuICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vbGlnbmUvdXBkL2Jvbi9xdGUvJyArIHJlc3AubmFtZSArICcvJyArIGJvbi5pZCArICcvJyArIHJlc3AudmFsdWUucmVwbGFjZSgnLicsICcsJyksXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKVxuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKClcbiAgICAgICAgfVxuICAgIH1cbiAgICBhc3luYyBmdW5jdGlvbiBzYXZlVW5pdGUocmVzcCkge1xuICAgICAgICBpZiAocmVzcC52YWx1ZSAhPT0gJycpIHtcbiAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2xpZ25lL3VwZC9ib24vdW5pdGUvJyArIHJlc3AubmFtZSArICcvJyArIGJvbi5pZCArICcvJyArIHJlc3AudmFsdWUsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIGxldCBiaWJvbiA9IHJlc3BvbnNlLmRhdGE7XG4gICAgICAgICAgICAgICAgc2V0Qm9uKGJpYm9uKTtcbiAgICAgICAgICAgICAgICBzZXRMaWduZXMoYmlib24ubGlnbmVzKTtcbiAgICAgICAgICAgICAgICBpZiAoYmlib24ucHJlcGFyYXRpb24gIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgc2V0U3VpdmkoYmlib24ucHJlcGFyYXRpb24ubGlnbmVzKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKClcbiAgICAgICAgfVxuICAgIH1cbiAgICBjb25zdCBkZWxldGVMaWduZSA9IChkZWxpZCkgPT4ge1xuICAgICAgICBpZiAoZGV2aWNlVHlwZSAhPT0gXCJtb2JpbGVcIikge1xuICAgICAgICAgICAgJCgnI21vZGFsTGlzdCcpLm1vZGFsKCd0b2dnbGUnKTtcbiAgICAgICAgfVxuICAgICAgICAkKCcjQ29uZmlybURlbGV0ZScpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICQoJyNhY2NlcHQnKS5jbGljayhhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKCcjQ29uZmlybURlbGV0ZScpLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnREVMRVRFJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2xpZ25lL2RlbGV0ZS8nICsgYm9uLmlkICsgJy8nICsgYm9uLmNoYW50aWVyLmlkICsgJy8nICsgZGVsaWQgKyAnL2JvbicsXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKClcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pXG4gICAgfVxuICAgIGNvbnN0IGRlbGV0ZUdyb3VwZSA9IChkZWxpZCkgPT4ge1xuICAgICAgICBpZiAoZGV2aWNlVHlwZSAhPT0gXCJtb2JpbGVcIikge1xuICAgICAgICAgICAgJCgnI21vZGFsTGlzdCcpLm1vZGFsKCd0b2dnbGUnKTtcbiAgICAgICAgfVxuICAgICAgICAkKCcjQ29uZmlybURlbGV0ZScpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICQoJyNhY2NlcHQnKS5jbGljayhhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKCcjQ29uZmlybURlbGV0ZScpLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnREVMRVRFJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2xpZ25lL2dyb3VwZS8nICsgYm9uLmlkICsgJy8nICsgYm9uLmNoYW50aWVyLmlkICsgJy8nICsgZGVsaWQgKyAnL2JvbicsXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKCk7XG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KVxuICAgIH1cbiAgICBhc3luYyBmdW5jdGlvbiBkZWxCb24ocmVzcCkge1xuICAgICAgICBpZiAocmVzcC52YWx1ZSAhPT0gJycpIHtcbiAgICAgICAgICAgICQoJyNDb25maXJtRGVsZXRlJykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgICQoJyNhY2NlcHQnKS5jbGljayhhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgJCgnI0NvbmZpcm1EZWxldGUnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgICAgIG1ldGhvZDogJ0RFTEVURScsXG4gICAgICAgICAgICAgICAgICAgIHVybDogJy9jcm0vYm9uL2RlbC8nICsgYm9uLmlkLFxuICAgICAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKClcbiAgICAgICAgfVxuICAgIH1cbiAgICBhc3luYyBmdW5jdGlvbiByZXN0YXVyZUJvbihlKSB7XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKVxuICAgICAgICAkKCcjQ29uZmlybURlbGV0ZScpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICQoJyNhY2NlcHQnKS5jbGljayhhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKCcjQ29uZmlybURlbGV0ZScpLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2Jvbi9yZXN0YXVyZXIvJyArIGJvbi5pZCxcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgbGV0IGJpYm9uID0gcmVzcG9uc2UuZGF0YTtcbiAgICAgICAgICAgICAgICBzZXRCb24oYmlib24pO1xuICAgICAgICAgICAgICAgIHNldExpZ25lcyhiaWJvbi5saWduZXMpO1xuICAgICAgICAgICAgICAgIGlmIChiaWJvbi5wcmVwYXJhdGlvbiAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICBzZXRTdWl2aShiaWJvbi5wcmVwYXJhdGlvbi5saWduZXMpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCd0b2dnbGUnKTtcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9XG4gICAgYXN5bmMgZnVuY3Rpb24gdmFsaWRlQm9uKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vYm9uL3ZhbGlkZXIvJyArIGJvbi5pZCxcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKVxuICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCgpXG4gICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgndG9nZ2xlJylcbiAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgIH0pO1xuXG4gICAgfVxuICAgIGFzeW5jIGZ1bmN0aW9uIGRldmFsaWRlQm9uKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vYm9uL2RldmFsaWRlci8nICsgYm9uLmlkLFxuICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCgpXG4gICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgndG9nZ2xlJylcbiAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgICQoJyN1cGRCb25QcmVzdGEnKS5vZmYoKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjdXBkQm9uUHJlc3RhJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjY2xvc2VVcGRCb25QcmVzdGEnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkVXBkQm9uUHJlc3RhJykuY3NzKCdkaXNwbGF5JywgJycpXG5cbiAgICAgICAgICAgICQoJyNlZGl0b3InKS52YWwoQ0tFRElUT1IuaW5zdGFuY2VzWydlZGl0b3InXS5nZXREYXRhKCkpXG4gICAgICAgICAgICAkKCcjZWRpdG9yMicpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjInXS5nZXREYXRhKCkpXG5cbiAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdQVVQnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vYm9uL3ByZXN0YS91cGRhdGUvJyArIGJvbi5pZCxcbiAgICAgICAgICAgICAgICBkYXRhOiBKU09OLnN0cmluZ2lmeSgkKCcjdXBkQm9uUHJlc3RhRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIGxvY2F0aW9uLnJlbG9hZCgpO1xuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgJCgnI21vZGFsSW5mbycpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSk7XG4gICAgJCgnI3VwZEJvbkZvdXJuJykub2ZmKCkub24oXCJjbGlja1wiLCBhc3luYyBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKVxuICAgICAgICBpZiAoJCh0aGlzKS5jbG9zZXN0KCdmb3JtJykudmFsaWQoKSkge1xuICAgICAgICAgICAgJCgnI3VwZEJvbkZvdXJuJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjY2xvc2VVcGRCb25Gb3VybicpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWRVcGRCb25Gb3VybicpLmNzcygnZGlzcGxheScsICcnKVxuXG4gICAgICAgICAgICAkKCcjZWRpdG9yJykudmFsKENLRURJVE9SLmluc3RhbmNlc1snZWRpdG9yJ10uZ2V0RGF0YSgpKVxuICAgICAgICAgICAgJCgnI2VkaXRvcjInKS52YWwoQ0tFRElUT1IuaW5zdGFuY2VzWydlZGl0b3IyJ10uZ2V0RGF0YSgpKVxuXG4gICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUFVUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2Jvbi9mb3Vybi91cGRhdGUvJyArIGJvbi5pZCxcbiAgICAgICAgICAgICAgICBkYXRhOiBKU09OLnN0cmluZ2lmeSgkKCcjdXBkQm9uRm91cm5Gb3JtJykuc2VyaWFsaXplT2JqZWN0KCkpLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgbG9jYXRpb24ucmVsb2FkKCk7XG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAkKCcjbW9kYWxJbmZvJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KTtcbiAgICAkKCcjYWRkQ2hvaXNpckJvbicpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNhZGRDaG9pc2lyQm9uJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjY2xvc2VDaG9pc2lyQm9uJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjbG9hZENob2lzaXJCb24nKS5jc3MoJ2Rpc3BsYXknLCAnJylcblxuICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vbGlnbmUvY2hvaXNpci9ib24vJyArIGJvbi5pZCxcbiAgICAgICAgICAgICAgICBkYXRhOiBKU09OLnN0cmluZ2lmeSgkKCcjYWRkQ2hvaXNpckJvbkZvcm0nKS5zZXJpYWxpemVPYmplY3QoKSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICBsb2NhdGlvbi5yZWxvYWQoKVxuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgJCgnI21vZGFsQ2hvaXNpcicpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgIH1cblxuICAgIH0pXG4gICAgJCgnI2FkZExpZ25lQm9uJykub2ZmKCkub24oXCJjbGlja1wiLCBhc3luYyBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKVxuICAgICAgICBpZiAoJCh0aGlzKS5jbG9zZXN0KCdmb3JtJykudmFsaWQoKSkge1xuICAgICAgICAgICAgJCgnI2FkZExpZ25lQm9uJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjY2xvc2VMaWduZScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWRMaWduZScpLmNzcygnZGlzcGxheScsICcnKVxuXG4gICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9saWduZS9hZGQvYm9uLycgKyBib24uaWQsXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZExpZ25lQm9uRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIGxldCBiaWJvbiA9IHJlc3BvbnNlLmRhdGE7XG4gICAgICAgICAgICAgICAgc2V0Qm9uKGJpYm9uKTtcbiAgICAgICAgICAgICAgICBzZXRMaWduZXMoYmlib24ubGlnbmVzKTtcbiAgICAgICAgICAgICAgICBpZiAoYmlib24ucHJlcGFyYXRpb24gIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgc2V0U3VpdmkoYmlib24ucHJlcGFyYXRpb24ubGlnbmVzKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgJCgnI2FkZExpZ25lQm9uJykuc2hvdygpO1xuICAgICAgICAgICAgICAgICQoJyNjbG9zZUxpZ25lJykuc2hvdygpO1xuICAgICAgICAgICAgICAgICQoJyNsb2FkTGlnbmUnKS5oaWRlKCk7XG4gICAgICAgICAgICAgICAgJCgnI2FkZExpZ25lQm9uRm9ybScpWzBdLnJlc2V0KCk7XG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAkKCcjbW9kYWxMaWduZScpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSlcbiAgICAkKCcjYWRkQm9uUHJlc3RhJykub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKVxuICAgICAgICBpZiAoJCh0aGlzKS5jbG9zZXN0KCdmb3JtJykudmFsaWQoKSkge1xuICAgICAgICAgICAgJCgnI2FkZEJvblByZXN0YScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2Nsb3NlQm9uUHJlc3RhJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjbG9hZEJvblByZXN0YScpLmNzcygnZGlzcGxheScsICcnKVxuXG4gICAgICAgICAgICAkKCcjZWRpdG9yMycpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjMnXS5nZXREYXRhKCkpXG4gICAgICAgICAgICAkKCcjZWRpdG9yNicpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjYnXS5nZXREYXRhKCkpXG5cbiAgICAgICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vYm9uL3ByZXN0YS9hZGQnLFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNhZGRCb25QcmVzdGFGb3JtJykuc2VyaWFsaXplT2JqZWN0KCkpLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzcGRhdGEsIHRleHRTdGF0dXMsIGpxWEhSKSB7XG4gICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID1cbiAgICAgICAgICAgICAgICAgICAgICAgICcvY3JtL2Jvbi8nICtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJlc3BkYXRhWydyZXN1bHQnXVswXVsnbnVtYm9uJ10gK1xuICAgICAgICAgICAgICAgICAgICAgICAgJy8nICtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJlc3BkYXRhWydyZXN1bHQnXVswXVsnaWRjaGFudGllciddXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBlcnJvcjogZnVuY3Rpb24gKHhociwgcmVzcCwgdGV4dCkge1xuICAgICAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIH0pXG4gICAgICAgIH1cbiAgICB9KVxuICAgICQoJyNhZGRCb25Gb3VybicpLm9mZigpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNhZGRCb25Gb3VybicpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2Nsb3NlQm9uRm91cm4nKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkQm9uRm91cm4nKS5jc3MoJ2Rpc3BsYXknLCAnJylcbiAgICAgICAgICAgICQoJyNlZGl0b3I3JykudmFsKENLRURJVE9SLmluc3RhbmNlc1snZWRpdG9yNyddLmdldERhdGEoKSlcbiAgICAgICAgICAgICQoJyNlZGl0b3I4JykudmFsKENLRURJVE9SLmluc3RhbmNlc1snZWRpdG9yOCddLmdldERhdGEoKSlcbiAgICAgICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vYm9uL2ZvdXJuL2FkZCcsXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZEJvbkZvdXJuRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlc3BkYXRhLCB0ZXh0U3RhdHVzLCBqcVhIUikge1xuICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9XG4gICAgICAgICAgICAgICAgICAgICAgICAnL2NybS9ib24vJyArXG4gICAgICAgICAgICAgICAgICAgICAgICByZXNwZGF0YVsncmVzdWx0J11bMF1bJ251bWJvbiddICtcbiAgICAgICAgICAgICAgICAgICAgICAgICcvJyArXG4gICAgICAgICAgICAgICAgICAgICAgICByZXNwZGF0YVsncmVzdWx0J11bMF1bJ2lkY2hhbnRpZXInXVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uICh4aHIsIHJlc3AsIHRleHQpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB9KVxuICAgICAgICB9XG4gICAgfSlcbiAgICAkKCcjYWRkRGVwbGFjZXJCb24nKS5vZmYoKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgIGNvbnN0IGlkY2hhbiA9ICQoJyNkZXBsYWNlckJvbicpLnZhbCgpO1xuICAgICAgICAkKCcjYWRkRGVwbGFjZXJCb24nKS5oaWRlKClcbiAgICAgICAgJCgnI2Nsb3NlRGVwbGFjZXInKS5oaWRlKClcbiAgICAgICAgJCgnI2xvYWREZXBsYWNlcicpLmNzcygnZGlzcGxheScsICcnKVxuICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICBtZXRob2Q6ICdHRVQnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9ib24vZGVwbGFjZXIvJyArIGJvbi5pZCArICcvJyArIGlkY2hhbixcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9jcm0vYm9uLycgKyByZXNwb25zZS5kYXRhWydyZXN1bHQnXSArICcvJyArIGJvbi5jaGFudGllci5pZDtcbiAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAkKCcjbW9kYWxEZXBsYWNlcicpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICB9KTtcbiAgICB9KVxuICAgICQoJyNzb2xkZXJCb24nKS5vZmYoKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBjb25zdCBpZHNvbGRlID0gJCgnI3NvbGRlQm9uJykudmFsKCk7XG4gICAgICAgICQoJyNzb2xkZXJCb24nKS5oaWRlKClcbiAgICAgICAgJCgnI2Nsb3NlU29sZGVyJykuaGlkZSgpXG4gICAgICAgICQoJyNsb2FkU29sZGVyJykuY3NzKCdkaXNwbGF5JywgJycpXG4gICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICB0eXBlOiAnR0VUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vYm9uL3NvbGRlci8nICsgYm9uLmlkICsgJy8nICsgaWRzb2xkZSxcbiAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNhZGRCb25QcmVzdGFGb3JtJykuc2VyaWFsaXplT2JqZWN0KCkpLFxuICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzcGRhdGEsIHRleHRTdGF0dXMsIGpxWEhSKSB7XG4gICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPVxuICAgICAgICAgICAgICAgICAgICAnL2NybS9jYWlzc2UvJyArXG4gICAgICAgICAgICAgICAgICAgIHJlc3BkYXRhWydyZXN1bHQnXVswXVsnbnVtY2Fpc3NlJ10gK1xuICAgICAgICAgICAgICAgICAgICAnLycgK1xuICAgICAgICAgICAgICAgICAgICByZXNwZGF0YVsncmVzdWx0J11bMF1bJ2lkY2hhbnRpZXInXVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoeGhyLCByZXNwLCB0ZXh0KSB7XG4gICAgICAgICAgICAgICAgJCgnI21vZGFsU29sZGVyJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgfSxcbiAgICAgICAgfSlcbiAgICB9KVxuICAgICQoJyNhZGRHcm91cEJvbicpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNhZGRHcm91cEJvbicpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2Nsb3NlR3JvdXAnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkR3JvdXAnKS5jc3MoJ2Rpc3BsYXknLCAnJylcblxuICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vZ3JvdXBlL2FkZC8nICsgYm9uLmlkICsgJy9ib24nLFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNhZGRHcm91cGVCb25Gb3JtJykuc2VyaWFsaXplT2JqZWN0KCkpLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCgpO1xuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgICAgICAkKCcjbW9kYWxMaWduZScpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgIH1cbiAgICB9KVxuICAgICQoJyN1cGRhdGVMaWduZUJvbicpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyN1cGRhdGVMaWduZUJvbicpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2Nsb3NlTGlnbmUnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkTGlnbmUnKS5jc3MoJ2Rpc3BsYXknLCAnJylcblxuICAgICAgICAgICAgY29uc3QgaWRsaWduZSA9ICQoJyNpZGxpZ25lJykudmFsKCk7XG5cbiAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2xpZ25lL3VwZGF0ZS9ib24vJyArIGlkbGlnbmUgKyAnLycgKyBib24uaWQsXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZExpZ25lQm9uRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIGxldCBiaWJvbiA9IHJlc3BvbnNlLmRhdGE7XG4gICAgICAgICAgICAgICAgc2V0Qm9uKGJpYm9uKTtcbiAgICAgICAgICAgICAgICBzZXRMaWduZXMoYmlib24ubGlnbmVzKTtcbiAgICAgICAgICAgICAgICAkKCcjdXBkYXRlTGlnbmVCb24nKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgJCgnI2Nsb3NlTGlnbmUnKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgJCgnI2xvYWRMaWduZScpLmhpZGUoKTtcbiAgICAgICAgICAgICAgICAkKCcjbW9kYWxMaWduZScpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9jcm0vYm9uLycgKyBib24uaWQgKyAnLycgKyBib24uY2hhbnRpZXIuaWRcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgICQoJyNtb2RhbExpZ25lJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KVxuICAgICQoJyN1cGRhdGVHcm91cEJvbicpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyN1cGRhdGVHcm91cEJvbicpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2Nsb3NlR3JvdXAnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkR3JvdXAnKS5jc3MoJ2Rpc3BsYXknLCAnJylcblxuICAgICAgICAgICAgY29uc3QgaWRncm91cGUgPSAkKCcjaWRncm91cGUnKS52YWwoKTtcblxuICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgIG1ldGhvZDogJ1BVVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9ncm91cGUvdXBkYXRlLycgKyBpZGdyb3VwZSArICcvJyArIGJvbi5pZCArICcvYm9uJyxcbiAgICAgICAgICAgICAgICBkYXRhOiBKU09OLnN0cmluZ2lmeSgkKCcjYWRkR3JvdXBlQm9uRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIGxldCBiaWJvbiA9IHJlc3BvbnNlLmRhdGE7XG4gICAgICAgICAgICAgICAgc2V0Qm9uKGJpYm9uKTtcbiAgICAgICAgICAgICAgICBpZiAoYmlib24ucHJlcGFyYXRpb24gIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgc2V0U3VpdmkoYmlib24ucHJlcGFyYXRpb24ubGlnbmVzKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgc2V0R3JvdXBlcyhiaWJvbi5ncm91cGUpO1xuICAgICAgICAgICAgICAgICQoJyN1cGRhdGVHcm91cGVCb24nKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgJCgnI2Nsb3NlR3JvdXAnKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgJCgnI2xvYWRHcm91cCcpLmhpZGUoKTtcbiAgICAgICAgICAgICAgICAkKCcjbW9kYWxHcm91cCcpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9jcm0vYm9uLycgKyBib24uaWQgKyAnLycgKyBib24uY2hhbnRpZXIuaWRcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICAgICAgJCgnI21vZGFsR3JvdXAnKS5tb2RhbCgndG9nZ2xlJylcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH0pXG4gICAgJCgnI2FkZFJlbScpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNhZGRSZW0nKS5oaWRlKCk7XG4gICAgICAgICAgICAkKCcjY2xvc2VSZW0nKS5oaWRlKCk7XG4gICAgICAgICAgICAkKCcjbG9hZFJlbScpLmNzcygnZGlzcGxheScsICcnKTtcbiAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2Jvbi9yZW1pc2UvJyArIGJvbi5pZCxcbiAgICAgICAgICAgICAgICBkYXRhOiBKU09OLnN0cmluZ2lmeSgkKCcjYWRkUmVtaXNlVGh0Rm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIGxldCBiaWJvbiA9IHJlc3BvbnNlLmRhdGE7XG4gICAgICAgICAgICAgICAgc2V0Qm9uKGJpYm9uKTtcbiAgICAgICAgICAgICAgICBzZXRMaWduZXMoYmlib24ubGlnbmVzKTtcbiAgICAgICAgICAgICAgICBpZiAoYmlib24ucHJlcGFyYXRpb24gIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgc2V0U3VpdmkoYmlib24ucHJlcGFyYXRpb24ubGlnbmVzKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgJCgnI2FkZFJlbScpLnNob3coKTtcbiAgICAgICAgICAgICAgICAkKCcjY2xvc2VSZW0nKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgJCgnI2xvYWRSZW0nKS5oaWRlKCk7XG4gICAgICAgICAgICAgICAgJCgnI21vZGFsUmVtaXNlJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAkKCcjbW9kYWxSZW1pc2UnKS5tb2RhbCgndG9nZ2xlJylcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KVxuICAgICQoJyN1cGRhdGVGb3JtZScpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyN1cGRhdGVGb3JtZScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWR1cEZvcm1lJykuY3NzKCdkaXNwbGF5JywgJycpXG4gICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICAkKCcjbW9kYWxNaXNlJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICAkKCcjZWRpdG9yNScpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjUnXS5nZXREYXRhKCkpO1xuXG4gICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9ib24vZm9ybWUnLFxuICAgICAgICAgICAgICAgIGRhdGE6IG5ldyBGb3JtRGF0YSgkKCcjYWRkZm9ybWUnKVswXSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6IGZhbHNlLFxuICAgICAgICAgICAgICAgIHByb2Nlc3NEYXRhOiBmYWxzZSxcbiAgICAgICAgICAgICAgICBjYWNoZTogZmFsc2UsXG4gICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgbG9jYXRpb24ucmVsb2FkKClcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgIH1cbiAgICB9KVxuXG4gICAgY29uc3Qgc2h1cGVyID0gKGlkKSA9PiB7XG4gICAgICAgICQoJy4nICsgaWQgKyAnbGknKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgIH1cbiAgICBjb25zdCBzaHVwZXJlID0gKGlkKSA9PiB7XG4gICAgICAgICQoJy4nICsgaWQgKyAnbGknKS5hZGRDbGFzcygnaGlkZScpO1xuICAgIH1cbiAgICBjb25zdCBzaHVwZXJnID0gKGlkKSA9PiB7XG4gICAgICAgICQoJy4nICsgaWQgKyAnZ3InKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgIH1cbiAgICBjb25zdCBzaHVwZXJlZyA9IChpZCkgPT4ge1xuICAgICAgICAkKCcuJyArIGlkICsgJ2dyJykuYWRkQ2xhc3MoJ2hpZGUnKTtcbiAgICB9XG5cbiAgICAkKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJChcIi5kZWxlXCIpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCh0aGlzKS5vZmYoKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdERUxFVEUnLFxuICAgICAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2xpZ25lL2RlbGV0ZS8nICsgYm9uLmlkICsgJy8nICsgYm9uLmNoYW50aWVyLmlkICsgJy8nICsgdGhpcy5pZCArICcvYm9uJyxcbiAgICAgICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgICAgICBsb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pO1xuICAgICAgICBjb25zdCAkc2VsZGV2aXMgPSAkKCcuc2VsZGV2aXMnKTtcbiAgICAgICAgJCgnLnNlbGRldmlzJykuaHRtbCgnJyk7XG4gICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL2RldmlzL2dldHMvJyArIGJvbi5jaGFudGllci5pZCxcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzcGRhdGEsIHRleHRTdGF0dXMsIGpxWEhSKSB7XG4gICAgICAgICAgICAgICAgJChcIi5kaWRldlwiKS5lbXB0eSgpO1xuICAgICAgICAgICAgICAgICQoXCIuZGlkZXZcIikuYXBwZW5kKCc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+Q2hhcmdlbWVudCBkZXMgZGV2aXM8L3NwYW4+IDxpbWcgc3JjPVwiL2ltZy9sb2FkaW5nLmdpZlwiIHN0eWxlPVwid2lkdGg6IDIwcHhcIj4nKTtcbiAgICAgICAgICAgICAgICByZXNwZGF0YS5tYXAoKGRlKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IGdyb3VwID0gJCgnPG9wdGlvbiB2YWx1ZT0nICsgZGUuaWQgKyAnPkRldmlzIE7CuiAnICsgZGUuaWRkZXZpcyArICc8L29wdGlvbj4nKTtcbiAgICAgICAgICAgICAgICAgICAgZ3JvdXAuYXBwZW5kVG8oJHNlbGRldmlzKTtcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAkKFwiLmRpZGV2XCIpLmVtcHR5KCk7XG4gICAgICAgICAgICAgICAgJChcIi5kaWRldlwiKS5hcHBlbmQoJzxzcGFuIGNsYXNzPVwiY29sLWdyZWVuXCI+RGV2aXMgdMOpbMOpY2hhcmfDqXM8L3NwYW4+Jyk7XG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uICh4aHIsIHJlc3AsIHRleHQpIHtcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICB9LFxuICAgICAgICB9KVxuXG4gICAgICAgIGNvbnN0ICRzZWxkZXUgPSAkKCcuc2VsZGV1Jyk7XG4gICAgICAgICQoJy5zZWxkZXUnKS5odG1sKCcnKTtcbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIHR5cGU6ICdQT1NUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vZGV2aXMvZ2V0cy8nICsgYm9uLmNoYW50aWVyLmlkLFxuICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChyZXNwZGF0YSwgdGV4dFN0YXR1cywganFYSFIpIHtcbiAgICAgICAgICAgICAgICAkKFwiLmRpZHVcIikuZW1wdHkoKTtcbiAgICAgICAgICAgICAgICAkKFwiLmRpZHVcIikuYXBwZW5kKCc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+Q2hhcmdlbWVudCBkZXMgZGV2aXM8L3NwYW4+IDxpbWcgc3JjPVwiL2ltZy9sb2FkaW5nLmdpZlwiIHN0eWxlPVwid2lkdGg6IDIwcHhcIj4nKTtcbiAgICAgICAgICAgICAgICByZXNwZGF0YS5tYXAoKGRlKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IGdyb3VwID0gJCgnPG9wdGlvbiB2YWx1ZT0nICsgZGUuaWQgKyAnPkRldmlzIE7CuiAnICsgZGUuaWRkZXZpcyArICc8L29wdGlvbj4nKTtcbiAgICAgICAgICAgICAgICAgICAgZ3JvdXAuYXBwZW5kVG8oJHNlbGRldSk7XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgJChcIi5kaWR1XCIpLmVtcHR5KCk7XG4gICAgICAgICAgICAgICAgJChcIi5kaWR1XCIpLmFwcGVuZCgnPHNwYW4gY2xhc3M9XCJjb2wtZ3JlZW5cIj5EZXZpcyB0w6lsw6ljaGFyZ8Opczwvc3Bhbj4nKTtcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBlcnJvcjogZnVuY3Rpb24gKHhociwgcmVzcCwgdGV4dCkge1xuICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgIH0sXG4gICAgICAgIH0pXG5cbiAgICAgICAgJChcIi5kZWxlZ3JcIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgICAgIG1ldGhvZDogJ0RFTEVURScsXG4gICAgICAgICAgICAgICAgICAgIHVybDogJy9jcm0vbGlnbmUvZ3JvdXBlLycgKyBib24uaWQgKyAnLycgKyBib24uY2hhbnRpZXIuaWQgKyAnLycgKyB0aGlzLmlkICsgJy9ib24nLFxuICAgICAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgICAgIGxvY2F0aW9uLnJlbG9hZCgpO1xuICAgICAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG5cbiAgICAkKCcjc2VjaGEnKS5vZmYoKS5vbihcImNoYW5nZVwiLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgY29uc3QgJHNlZGV2aXMgPSAkKCcuc2VkZXZpcycpO1xuICAgICAgICAkKCcuc2VkZXZpcycpLmh0bWwoJycpO1xuICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9kZXZpcy9nZXRzLycgKyB0aGlzLnZhbHVlLFxuICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChyZXNwZGF0YSwgdGV4dFN0YXR1cywganFYSFIpIHtcbiAgICAgICAgICAgICAgICAkKFwiLmRpZG9cIikuZW1wdHkoKTtcbiAgICAgICAgICAgICAgICAkKFwiLmRpZG9cIikuYXBwZW5kKCc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+Q2hhcmdlbWVudCBkZXMgZGV2aXM8L3NwYW4+IDxpbWcgc3JjPVwiL2ltZy9sb2FkaW5nLmdpZlwiIHN0eWxlPVwid2lkdGg6IDIwcHhcIj4nKTtcbiAgICAgICAgICAgICAgICByZXNwZGF0YS5tYXAoKGRlKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IGdyb3VwID0gJCgnPG9wdGlvbiB2YWx1ZT0nICsgZGUuaWQgKyAnPkRldmlzIE7CuiAnICsgZGUuaWRkZXZpcyArICc8L29wdGlvbj4nKTtcbiAgICAgICAgICAgICAgICAgICAgZ3JvdXAuYXBwZW5kVG8oJHNlZGV2aXMpO1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgICQoXCIuZGlkb1wiKS5lbXB0eSgpO1xuICAgICAgICAgICAgICAgICQoXCIuZGlkb1wiKS5hcHBlbmQoJzxzcGFuIGNsYXNzPVwiY29sLWdyZWVuXCI+RGV2aXMgdMOpbMOpY2hhcmfDqXM8L3NwYW4+Jyk7XG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uICh4aHIsIHJlc3AsIHRleHQpIHtcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICB9LFxuICAgICAgICB9KVxuICAgIH0pXG4gICAgJCgnI3NlY2hhcycpLm9mZigpLm9uKFwiY2hhbmdlXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBjb25zdCAkc2VsZGV2cyA9ICQoJy5zZWxkZXZzJyk7XG4gICAgICAgICQoJy5zZWxkZXZzJykuaHRtbCgnJyk7XG4gICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL2RldmlzL2dldHMvJyArIHRoaXMudmFsdWUsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlc3BkYXRhLCB0ZXh0U3RhdHVzLCBqcVhIUikge1xuICAgICAgICAgICAgICAgICQoXCIuZGlkZXNcIikuZW1wdHkoKTtcbiAgICAgICAgICAgICAgICAkKFwiLmRpZGVzXCIpLmFwcGVuZCgnPHNwYW4gY2xhc3M9XCJjb2wtcGlua1wiPkNoYXJnZW1lbnQgZGVzIGRldmlzPC9zcGFuPiA8aW1nIHNyYz1cIi9pbWcvbG9hZGluZy5naWZcIiBzdHlsZT1cIndpZHRoOiAyMHB4XCI+Jyk7XG4gICAgICAgICAgICAgICAgcmVzcGRhdGEubWFwKChkZSkgPT4ge1xuICAgICAgICAgICAgICAgICAgICBjb25zdCBncm91cCA9ICQoJzxvcHRpb24gdmFsdWU9JyArIGRlLmlkICsgJz5EZXZpcyBOwrogJyArIGRlLmlkZGV2aXMgKyAnPC9vcHRpb24+Jyk7XG4gICAgICAgICAgICAgICAgICAgIGdyb3VwLmFwcGVuZFRvKCRzZWxkZXZzKTtcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAkKFwiLmRpZGVzXCIpLmVtcHR5KCk7XG4gICAgICAgICAgICAgICAgJChcIi5kaWRlc1wiKS5hcHBlbmQoJzxzcGFuIGNsYXNzPVwiY29sLWdyZWVuXCI+RGV2aXMgdMOpbMOpY2hhcmfDqXM8L3NwYW4+Jyk7XG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uICh4aHIsIHJlc3AsIHRleHQpIHtcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICB9LFxuICAgICAgICB9KVxuICAgIH0pXG4gICAgJCgnI3NlY2hhdScpLm9mZigpLm9uKFwiY2hhbmdlXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBjb25zdCAkc2VsZGV1ID0gJCgnLnNlbGRldScpO1xuICAgICAgICAkKCcuc2VsZGV1JykuaHRtbCgnJyk7XG4gICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL2RldmlzL2dldHMvJyArIHRoaXMudmFsdWUsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlc3BkYXRhLCB0ZXh0U3RhdHVzLCBqcVhIUikge1xuICAgICAgICAgICAgICAgICQoXCIuZGlkdVwiKS5lbXB0eSgpO1xuICAgICAgICAgICAgICAgICQoXCIuZGlkdVwiKS5hcHBlbmQoJzxzcGFuIGNsYXNzPVwiY29sLXBpbmtcIj5DaGFyZ2VtZW50IGRlcyBkZXZpczwvc3Bhbj4gPGltZyBzcmM9XCIvaW1nL2xvYWRpbmcuZ2lmXCIgc3R5bGU9XCJ3aWR0aDogMjBweFwiPicpO1xuICAgICAgICAgICAgICAgIHJlc3BkYXRhLm1hcCgoZGUpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgY29uc3QgZ3JvdXAgPSAkKCc8b3B0aW9uIHZhbHVlPScgKyBkZS5pZCArICc+RGV2aXMgTsK6ICcgKyBkZS5pZGRldmlzICsgJzwvb3B0aW9uPicpO1xuICAgICAgICAgICAgICAgICAgICBncm91cC5hcHBlbmRUbygkc2VsZGV1KTtcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAkKFwiLmRpZHVcIikuZW1wdHkoKTtcbiAgICAgICAgICAgICAgICAkKFwiLmRpZHVcIikuYXBwZW5kKCc8c3BhbiBjbGFzcz1cImNvbC1ncmVlblwiPkRldmlzIHTDqWzDqWNoYXJnw6lzPC9zcGFuPicpO1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoeGhyLCByZXNwLCB0ZXh0KSB7XG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgfSxcbiAgICAgICAgfSlcbiAgICB9KVxuICAgICQoJyNzZWNoYW5lJykub2ZmKCkub24oXCJjaGFuZ2VcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIGNvbnN0ICRzZWxkZXZpcyA9ICQoJy5zZWxkZXZpcycpO1xuICAgICAgICAkKCcuc2VsZGV2aXMnKS5odG1sKCcnKTtcbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIHR5cGU6ICdQT1NUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vZGV2aXMvZ2V0cy8nICsgdGhpcy52YWx1ZSxcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzcGRhdGEsIHRleHRTdGF0dXMsIGpxWEhSKSB7XG4gICAgICAgICAgICAgICAgJChcIi5kaWRldlwiKS5lbXB0eSgpO1xuICAgICAgICAgICAgICAgICQoXCIuZGlkZXZcIikuYXBwZW5kKCc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+Q2hhcmdlbWVudCBkZXMgZGV2aXM8L3NwYW4+IDxpbWcgc3JjPVwiL2ltZy9sb2FkaW5nLmdpZlwiIHN0eWxlPVwid2lkdGg6IDIwcHhcIj4nKTtcbiAgICAgICAgICAgICAgICByZXNwZGF0YS5tYXAoKGRlKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IGdyb3VwID0gJCgnPG9wdGlvbiB2YWx1ZT0nICsgZGUuaWQgKyAnPkRldmlzIE7CuiAnICsgZGUuaWRkZXZpcyArICc8L29wdGlvbj4nKTtcbiAgICAgICAgICAgICAgICAgICAgZ3JvdXAuYXBwZW5kVG8oJHNlbGRldmlzKTtcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAkKFwiLmRpZGV2XCIpLmVtcHR5KCk7XG4gICAgICAgICAgICAgICAgJChcIi5kaWRldlwiKS5hcHBlbmQoJzxzcGFuIGNsYXNzPVwiY29sLWdyZWVuXCI+RGV2aXMgdMOpbMOpY2hhcmfDqXM8L3NwYW4+Jyk7XG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uICh4aHIsIHJlc3AsIHRleHQpIHtcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpXG4gICAgICAgICAgICB9LFxuICAgICAgICB9KVxuICAgIH0pXG5cbiAgICBpZiAoZ3JvdXBlcykge1xuICAgICAgICByZW5kZXJHcm91cGUgPSBncm91cGVzLm1hcCgoZ3JvdXApID0+IHtcbiAgICAgICAgICAgIGxldCBzdCA9IDA7XG4gICAgICAgICAgICBsZXQgcG9wZyA9IGdyb3VwLmlkO1xuICAgICAgICAgICAgbGV0IG9wZyA9ICcnO1xuICAgICAgICAgICAgaWYgKGJvbi5ldGF0ID09PSAndmFsaWRlJykge1xuICAgICAgICAgICAgICAgIG9wZyA9IGdyb3VwLmdyb3VwZSArICc8cCBjbGFzcz1cImJvcmR6IGhpZGUgJyArIGdyb3VwLmlkICsgJ2dyXCIgPjwvcD4nO1xuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICBvcGcgPSBncm91cC5ncm91cGUgKyAnPHAgY2xhc3M9XCJib3JkeiBoaWRlICcgKyBncm91cC5pZCArICdnclwiID4nICtcbiAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9L2NybS9ib24vZ3JvdXBlLycgKyBib24uaWQgKyAnLycgKyBncm91cC5pZCArICcvJyArIGJvbi5jaGFudGllci5pZCArICc+PGkgY2xhc3M9XCJmYSBmYS1lZGl0IHRleHQtc3VjY2VzcyBtLXItMTVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiTW9kaWZpZXIgY2V0dGUgbGlnbmVcIj48L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJkZWxlZ3JcIiBpZD0nICsgcG9wZyArICc+PGkgY2xhc3M9XCJmYSBmYS10cmFzaCBjb2wtcGlua1wiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJTdXBwcmltZXIgY2V0dGUgbGlnbmVcIj48L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAnPC9wPic7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBjb25zdCByZW5kZXJMaWduZUdyb3VwZSA9IGxpZ25lcy5tYXAoKGxpZ25lKSA9PiB7XG4gICAgICAgICAgICAgICAgbGV0IG9wcCA9IFwiXCI7XG4gICAgICAgICAgICAgICAgaWYgKGxpZ25lLmdyb3VwZSAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICBpZiAobGlnbmUuZ3JvdXBlLmlkID09PSBncm91cC5pZCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGJvbi5hYXJlbSA9PT0gJ291aScpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdCA9IHN0ICsgKChsaWduZS5wdSAqIGxpZ25lLnF1YW50aXRlKSAqICgoMTAwIC0gbGlnbmUucmVtaXNlKSAvIDEwMCkpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdCA9IHN0ICsgKGxpZ25lLnB1ICogbGlnbmUucXVhbnRpdGUpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIGxldCBwb3BwID0gbGlnbmUuaWQ7XG4gICAgICAgICAgICAgICAgICAgIGlmIChib24uZXRhdCA9PT0gJ3ZhbGlkZScpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIG9wcCA9IGxpZ25lLmRlc2lnbmF0aW9uICsgJzxwIGNsYXNzPVwidGV4dC1jZW50ZXIgYm9yZHogaGlkZSAnICsgbGlnbmUuaWQgKyAnbGlcIiA+PC9wPic7XG4gICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBvcHAgPSBsaWduZS5kZXNpZ25hdGlvbiArICc8cCBjbGFzcz1cInRleHQtY2VudGVyIGJvcmR6IGhpZGUgJyArIGxpZ25lLmlkICsgJ2xpXCIgPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPS9jcm0vYm9uL2xpZ25lLycgKyBib24uaWQgKyAnLycgKyBsaWduZS5pZCArICcvJyArIGJvbi5jaGFudGllci5pZCArICc+PGkgY2xhc3M9XCJmYSBmYS1lZGl0IHRleHQtc3VjY2VzcyBtLXItMTVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiTW9kaWZpZXIgY2V0dGUgbGlnbmVcIj48L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8YSBjbGFzcz1cImRlbGVcIiBpZD0nICsgcG9wcCArICc+PGkgY2xhc3M9XCJmYSBmYS10cmFzaCBjb2wtcGlua1wiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJTdXBwcmltZXIgY2V0dGUgbGlnbmVcIj48L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8L3A+JztcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICByZXR1cm4gKFxuICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAge2xpZ25lLmdyb3VwZSAhPT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtsaWduZS5ncm91cGUuaWQgPT09IGdyb3VwLmlkICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIga2V5PXtsaWduZS5pZC50b1N0cmluZygpfSBvbk1vdXNlT3Zlcj17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNodXBlcihsaWduZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IG9uTW91c2VPdXQ9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaHVwZXJlKGxpZ25lLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBsaWduZS5yZWZlcmVuY2V9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib3JkZVwiIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBvcHB9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0ndGV4dCdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtsaWduZS51bml0ZX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVVbml0ZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcIm5vbmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J251bWJlcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5xdWFudGl0ZSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvblNhdmU9e3ZhbCA9PiBzYXZlUXRlKHZhbCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHJlcGFcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPEVkaXRUZXh0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J251bWJlcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnF1YW50aXRlLCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvblNhdmU9e3ZhbCA9PiBzYXZlUXRlKHZhbCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKGxpdnJlLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKHJlc3RlLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbnB1dENsYXNzTmFtZT0nbm93aGl0ZXNwYWNlJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5wdSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVB1KHZhbCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J251bWJlcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucmVtaXNlLCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVJlbWlzZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eyhsaWduZS5wdSAqIGxpZ25lLnF1YW50aXRlKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eygobGlnbmUucHUgKiBsaWduZS5xdWFudGl0ZSkgKiAoKDEwMCAtIGxpZ25lLnJlbWlzZSkgLyAxMDApKX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHN0ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKHByZXZ1LCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKGxpdnJlLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKHJlc3RlLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHN0XCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5xdWFudGl0ZSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVF0ZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0nbnVtYmVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5wdXRDbGFzc05hbWU9J25vd2hpdGVzcGFjZSdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucHUsIDIsICcgJyl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVQdSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPEVkaXRUZXh0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnJlbWlzZSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVSZW1pc2UodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsobGlnbmUucHUgKiBsaWduZS5xdWFudGl0ZSl9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsoKGxpZ25lLnB1ICogbGlnbmUucXVhbnRpdGUpICogKCgxMDAgLSBsaWduZS5yZW1pc2UpIC8gMTAwKSl9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcIm91aVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnByZXBhcmF0aW9uID09PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPEVkaXRUZXh0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0nbnVtYmVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnF1YW50aXRlLCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVRdGUodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5wdXRDbGFzc05hbWU9J25vd2hpdGVzcGFjZSdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5wdSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvblNhdmU9e3ZhbCA9PiBzYXZlUHUodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnByZXBhcmF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCI+e2Zvcm1hdE51bWJlcihwcmV2dSwgMiwgJyAnKX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKGxpdnJlLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiPntmb3JtYXROdW1iZXIocmVzdGUsIDIsICcgJyl9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPEVkaXRUZXh0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0nbnVtYmVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnF1YW50aXRlLCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVRdGUodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5wdXRDbGFzc05hbWU9J25vd2hpdGVzcGFjZSdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5wdSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvblNhdmU9e3ZhbCA9PiBzYXZlUHUodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J251bWJlcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucmVtaXNlLCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVJlbWlzZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eyhsaWduZS5wdSAqIGxpZ25lLnF1YW50aXRlKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eygobGlnbmUucHUgKiBsaWduZS5xdWFudGl0ZSkgKiAoKDEwMCAtIGxpZ25lLnJlbWlzZSkgLyAxMDApKX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwibm9uXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gPT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucXVhbnRpdGUsIDIsICcgJyl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVF0ZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J251bWJlcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbnB1dENsYXNzTmFtZT0nbm93aGl0ZXNwYWNlJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnB1LCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVQdSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKHByZXZ1LCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiPntmb3JtYXROdW1iZXIobGl2cmUsIDIsICcgJyl9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCI+e2Zvcm1hdE51bWJlcihyZXN0ZSwgMiwgJyAnKX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucXVhbnRpdGUsIDIsICcgJyl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVF0ZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J251bWJlcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbnB1dENsYXNzTmFtZT0nbm93aGl0ZXNwYWNlJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnB1LCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVQdSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0nbnVtYmVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5yZW1pc2UsIDIsICcgJyl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvblNhdmU9e3ZhbCA9PiBzYXZlUmVtaXNlKHZhbCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17KGxpZ25lLnB1ICogbGlnbmUucXVhbnRpdGUpfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17KChsaWduZS5wdSAqIGxpZ25lLnF1YW50aXRlKSAqICgoMTAwIC0gbGlnbmUucmVtaXNlKSAvIDEwMCkpfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICApO1xuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIHJldHVybiAoXG4gICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInRvZ29cIiBrZXk9e2dyb3VwLmlkLnRvU3RyaW5nKCl9XG4gICAgICAgICAgICAgICAgICAgICAgICBvbk1vdXNlT3Zlcj17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNodXBlcmcoZ3JvdXAuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICB9fVxuICAgICAgICAgICAgICAgICAgICAgICAgb25Nb3VzZU91dD17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNodXBlcmVnKGdyb3VwLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgfX1cbiAgICAgICAgICAgICAgICAgICAgPlxuICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiYgYm9uLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPjxiPntncm91cC5yZWZlcmVuY2V9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNlwiIGNsYXNzTmFtZT1cImJvcmRlXCIgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG9wZ319Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ25vbicgJiYgYm9uLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPjxiPntncm91cC5yZWZlcmVuY2V9PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmRlXCIgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG9wZ319Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiYgYm9uLmFhcmVmID09PSAnbm9uJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNlwiIGNsYXNzTmFtZT1cImJvcmRlXCIgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG9wZ319Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ25vbicgJiYgYm9uLmFhcmVmID09PSAnbm9uJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmRlXCIgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG9wZ319Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAge3JlbmRlckxpZ25lR3JvdXBlfVxuICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwidG9nb1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmIGJvbi5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI3XCIgY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+U09VUy1UT1RBTDogPE51bWJlckZvcm1hdCBudW1iPXtzdH0vPjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdub24nICYmIGJvbi5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI2XCIgY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+U09VUy1UT1RBTDogPE51bWJlckZvcm1hdCBudW1iPXtzdH0vPjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmIGJvbi5hYXJlZiA9PT0gJ25vbicgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI2XCIgY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+U09VUy1UT1RBTDogPE51bWJlckZvcm1hdCBudW1iPXtzdH0vPjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ25vbicgJiYgYm9uLmFhcmVmID09PSAnbm9uJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LXJpZ2h0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5TT1VTLVRPVEFMOiA8TnVtYmVyRm9ybWF0IG51bWI9e3N0fS8+PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICApO1xuICAgICAgICB9KVxuICAgICAgICByZW5kZXJHcm91cGVNb2JpbGUgPSBncm91cGVzLm1hcCgoZ3JvdXApID0+IHtcbiAgICAgICAgICAgIGxldCBzdCA9IDA7XG4gICAgICAgICAgICBjb25zdCByZW5kZXJMaWduZUdyb3VwZU1vYmlsZSA9IGxpZ25lcy5tYXAoKGxpZ25lKSA9PiB7XG4gICAgICAgICAgICAgICAgaWYgKGxpZ25lLmdyb3VwZSAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICBpZiAobGlnbmUuZ3JvdXBlLmlkID09PSBncm91cC5pZCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGJvbi5hYXJlbSA9PT0gJ291aScpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdCA9IHN0ICsgKChsaWduZS5wdSAqIGxpZ25lLnF1YW50aXRlKSAqICgoMTAwIC0gbGlnbmUucmVtaXNlKSAvIDEwMCkpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdCA9IHN0ICsgKGxpZ25lLnB1ICogbGlnbmUucXVhbnRpdGUpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtsaWduZXMubGVuZ3RoICE9PSBcIjBcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtsaWduZS5ncm91cGUgIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2xpZ25lLmdyb3VwZS5pZCA9PT0gZ3JvdXAuaWQgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj57bGlnbmUucmVmZXJlbmNlfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3NOYW1lPVwicHJpIGJvbG82MDAgdGV4dC1sZWZ0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogbGlnbmUuZGVzaWduYXRpb259fS8+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpblRvcDogXCIxMHB4XCJ9fSBib3JkZXI9XCIwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2VsbFNwYWNpbmc9XCIwXCIgY2VsbFBhZGRpbmc9XCIwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmR6IGZvbnQtYm9sZFwiPlVuaXTDqTo8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib3JkeiBmb250LXdlaWdodC1ib2xkXCI+IHtsaWduZS51bml0ZX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkeiBmb250LWJvbGRcIj5RdWFudGl0w6k6PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgYm9yZHogZm9udC13ZWlnaHQtYm9sZFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17KGxpZ25lLnF1YW50aXRlKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmR6IGZvbnQtYm9sZFwiPlByaXggdW5pdGFpcmU6XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib3JkeiBmb250LXdlaWdodC1ib2xkXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsobGlnbmUucHUpfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmR6IGZvbnQtYm9sZFwiPlJlbWlzZTo8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGJvcmR6Zm9udC13ZWlnaHQtYm9sZFwiPiB7bGlnbmUucmVtaXNlfSU8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkeiBmb250LWJvbGRcIj5Nb250YW50IEhUOjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXQgbnVtYj17KGxpZ25lLnB1ICogbGlnbmUucXVhbnRpdGUpfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsoKGxpZ25lLnB1ICogbGlnbmUucXVhbnRpdGUpICogKCgxMDAgLSBsaWduZS5yZW1pc2UpIC8gMTAwKSl9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5ldGF0ID09PSAnc2F2ZScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZHpcIiBjb2xTcGFuPXsyfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3dpZHRoOiBcIjgwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9ib24vbGlnbmUvJHtib24uaWR9LyR7bGlnbmUuaWR9LyR7Ym9uLmNoYW50aWVyLmlkfWB9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1lZGl0IHRleHQtc3VjY2VzcyBtLXItMTBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxNHB4XCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1oaWRkZW49XCJ0cnVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiTW9kaWZpZXJcIi8+PC9hPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCJcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtcmVwbHkgY29sLWJsdWUgbS1yLTEwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMTRweFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZT1cIkR1cGxpcXVlclwiLz48L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVsZXRlTGlnbmUobGlnbmUuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PjxpIGNsYXNzTmFtZT1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxNHB4XCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZT1cIlN1cHByaW1lclwiLz48L2E+PC90ZD5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICk7XG4gICAgICAgICAgICB9KVxuICAgICAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwidG9nbyBib2xvNjAwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiPntncm91cC5yZWZlcmVuY2V9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCI+e2dyb3VwLmdyb3VwZX08YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gc3R5bGU9e3tmbG9hdDogXCJyaWdodFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZXRhdCA9PT0gJ3NhdmUnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vYm9uL2dyb3VwZS8ke2Jvbi5pZH0vJHtncm91cC5pZH0vJHtib24uY2hhbnRpZXIuaWR9YH0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZWRpdCB0ZXh0LXN1Y2Nlc3MgbS1yLTEwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxNnB4XCJ9fSBhcmlhLWhpZGRlbj1cInRydWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZT1cIk1vZGlmaWVyXCIvPjwvYT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVsZXRlR3JvdXBlKGdyb3VwLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PjxpIGNsYXNzTmFtZT1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9e3tmb250U2l6ZTogXCIxNHB4XCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGl0bGU9XCJTdXBwcmltZXJcIi8+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIj57Z3JvdXAuZ3JvdXBlfTxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIHN0eWxlPXt7ZmxvYXQ6IFwicmlnaHRcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmV0YXQgPT09ICdzYXZlJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cblxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vYm9uL2dyb3VwZS8ke2Jvbi5pZH0vJHtncm91cC5pZH0vJHtib24uY2hhbnRpZXIuaWR9YH0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZWRpdCB0ZXh0LXN1Y2Nlc3MgbS1yLTEwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxNnB4XCJ9fSBhcmlhLWhpZGRlbj1cInRydWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZT1cIk1vZGlmaWVyXCIvPjwvYT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVsZXRlR3JvdXBlKGdyb3VwLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PjxpIGNsYXNzTmFtZT1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9e3tmb250U2l6ZTogXCIxNHB4XCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGl0bGU9XCJTdXBwcmltZXJcIi8+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG5cbiAgICAgICAgICAgICAgICAgICAgPC90cj5cblxuICAgICAgICAgICAgICAgICAgICB7cmVuZGVyTGlnbmVHcm91cGVNb2JpbGV9XG5cbiAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInRvZ29cIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIyXCIgY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5TT1VTLVRPVEFMOiA8TnVtYmVyRm9ybWF0IG51bWI9e3N0fS8+PC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZWYgIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtcmlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+U09VUy1UT1RBTDogPE51bWJlckZvcm1hdCBudW1iPXtzdH0vPjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgKTtcbiAgICAgICAgfSlcbiAgICB9XG4gICAgaWYgKGxpZ25lcykge1xuICAgICAgICByZW5kZXJMaWduZU1vYmlsZSA9IGxpZ25lcy5tYXAoKGxpZ24pID0+IHtcbiAgICAgICAgICAgIHJldHVybiAoXG4gICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAge2xpZ25lcy5sZW5ndGggIT09IFwiMFwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtsaWduLmdyb3VwZSA9PT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3NOYW1lPVwicHJpIGJvbG82MDAgdGV4dC1sZWZ0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGxpZ24uZGVzaWduYXRpb259fS8+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwicHJpIGJvbG82MDAgdGV4dC1sZWZ0IG5vd2hpdGVzcGFjZVwiPntsaWduLnJlZmVyZW5jZX08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwifX0gYm9yZGVyPVwiMFwiIGNlbGxTcGFjaW5nPVwiMFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjZWxsUGFkZGluZz1cIjBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkeiBmb250LWJvbGRcIj5Vbml0w6k6PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGJvcmR6IGZvbnQtd2VpZ2h0LWJvbGRcIj57bGlnbi51bml0ZX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkeiBmb250LWJvbGRcIj5RdWFudGl0w6k6PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGJvcmR6IGZvbnQtd2VpZ2h0LWJvbGRcIj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2xpZ24ucXVhbnRpdGV9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkeiBmb250LWJvbGRcIj5Qcml4IHVuaXRhaXJlOjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib3JkeiBmb250LXdlaWdodC1ib2xkXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtsaWduLnB1fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZHogZm9udC1ib2xkXCI+UmVtaXNlOjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgYm9yZHogZm9udC13ZWlnaHQtYm9sZFwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2xpZ24ucmVtaXNlfS8+JVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZHogZm9udC1ib2xkXCI+TW9udGFudCBIVDo8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgYm9yZHogZm9udC13ZWlnaHQtYm9sZFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnbm9uJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdCBudW1iPXsobGlnbi5wdSAqIGxpZ24ucXVhbnRpdGUpfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSAhPT0gJ25vbicgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eygobGlnbi5wdSAqIGxpZ24ucXVhbnRpdGUpICogKCgxMDAgLSBsaWduLnJlbWlzZSkgLyAxMDApKX0vPjwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5ldGF0ID09PSAnc2F2ZScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkelwiIGNvbFNwYW49ezJ9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCI4MHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9ib24vbGlnbmUvJHtib24uaWR9LyR7bGlnbi5pZH0vJHtib24uY2hhbnRpZXIuaWR9YH0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZWRpdCB0ZXh0LXN1Y2Nlc3MgbS1yLTEwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxNHB4XCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZT1cIk1vZGlmaWVyXCIvPjwvYT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVsZXRlTGlnbmUobGlnbi5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT48aSBjbGFzc05hbWU9XCJmYSBmYS10cmFzaCBjb2wtcGlua1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxNHB4XCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGl0bGU9XCJTdXBwcmltZXJcIi8+PC9hPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49ezJ9IGNsYXNzTmFtZT1cImJnLWdyYXlcIiBzdHlsZT17e2hlaWdodDogXCI1cHhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICApO1xuICAgICAgICB9KVxuICAgICAgICByZW5kZXJMaWduZSA9IGxpZ25lcy5tYXAoKGxpZ25lKSA9PiB7XG4gICAgICAgICAgICBsZXQgcHJldnUgPSBwYXJzZUZsb2F0KGxpZ25lLmxpdnJlcikgKyBwYXJzZUZsb2F0KGxpZ25lLnJlc3RlKTtcbiAgICAgICAgICAgIGxldCBsaXZyZSA9IGxpZ25lLmxpdnJlcjtcbiAgICAgICAgICAgIGxldCByZXN0ZSA9IGxpZ25lLnJlc3RlO1xuICAgICAgICAgICAgbGV0IHBvcCA9IGxpZ25lLmlkO1xuICAgICAgICAgICAgbGV0IG9wID0gJyc7XG5cbiAgICAgICAgICAgIGlmIChib24uZXRhdCA9PT0gJ3ZhbGlkZScpIHtcbiAgICAgICAgICAgICAgICBvcCA9IGxpZ25lLmRlc2lnbmF0aW9uICsgJzxwIGNsYXNzPVwidGV4dC1jZW50ZXIgYm9yZHogaGlkZSAnICsgbGlnbmUuaWQgKyAnbGlcIiA+PC9wPic7XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIG9wID0gbGlnbmUuZGVzaWduYXRpb24gKyAnPHAgY2xhc3M9XCJ0ZXh0LWNlbnRlciBib3JkeiBoaWRlICcgKyBsaWduZS5pZCArICdsaVwiID4nICtcbiAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9L2NybS9ib24vbGlnbmUvJyArIGJvbi5pZCArICcvJyArIGxpZ25lLmlkICsgJy8nICsgYm9uLmNoYW50aWVyLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLWVkaXQgdGV4dC1zdWNjZXNzIG0tci0xNVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJNb2RpZmllciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICc8YSBjbGFzcz1cImRlbGVcIiBpZD0nICsgcG9wICsgJz48aSBjbGFzcz1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICc8L3A+JztcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICB7bGlnbmUuZ3JvdXBlID09PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICA8dHIga2V5PXtsaWduZS5pZC50b1N0cmluZygpfSBvbk1vdXNlT3Zlcj17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNodXBlcihsaWduZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgIH19IG9uTW91c2VPdXQ9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaHVwZXJlKGxpZ25lLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgfX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBsaWduZS5yZWZlcmVuY2V9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib3JkZVwiIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBvcH19Lz5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J3RleHQnXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17bGlnbmUudW5pdGV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvblNhdmU9e3ZhbCA9PiBzYXZlVW5pdGUodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25lXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucXVhbnRpdGUsIDIsICcgJyl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVF0ZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcInByZXBhXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5xdWFudGl0ZSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVF0ZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCI+e2Zvcm1hdE51bWJlcihsaXZyZSwgMiwgJyAnKX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCI+e2Zvcm1hdE51bWJlcihyZXN0ZSwgMiwgJyAnKX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0nbnVtYmVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5wdXRDbGFzc05hbWU9J25vd2hpdGVzcGFjZSdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucHUsIDIsICcgJyl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVQdSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPEVkaXRUZXh0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnJlbWlzZSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVSZW1pc2UodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17KGxpZ25lLnB1ICogbGlnbmUucXVhbnRpdGUpfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eygobGlnbmUucHUgKiBsaWduZS5xdWFudGl0ZSkgKiAoKDEwMCAtIGxpZ25lLnJlbWlzZSkgLyAxMDApKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHN0ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKHByZXZ1LCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKGxpdnJlLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKHJlc3RlLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHN0XCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5xdWFudGl0ZSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVF0ZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0nbnVtYmVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5wdXRDbGFzc05hbWU9J25vd2hpdGVzcGFjZSdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucHUsIDIsICcgJyl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVQdSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPEVkaXRUZXh0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnJlbWlzZSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVSZW1pc2UodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17KGxpZ25lLnB1ICogbGlnbmUucXVhbnRpdGUpfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eygobGlnbmUucHUgKiBsaWduZS5xdWFudGl0ZSkgKiAoKDEwMCAtIGxpZ25lLnJlbWlzZSkgLyAxMDApKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwib3VpXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gPT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J251bWJlcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5xdWFudGl0ZSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvblNhdmU9e3ZhbCA9PiBzYXZlUXRlKHZhbCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPEVkaXRUZXh0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0nbnVtYmVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlucHV0Q2xhc3NOYW1lPSdub3doaXRlc3BhY2UnXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucHUsIDIsICcgJyl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVB1KHZhbCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5wcmVwYXJhdGlvbiAhPT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiPntmb3JtYXROdW1iZXIocHJldnUsIDIsICcgJyl9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCI+e2Zvcm1hdE51bWJlcihsaXZyZSwgMiwgJyAnKX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKHJlc3RlLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPEVkaXRUZXh0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0nbnVtYmVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnF1YW50aXRlLCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVRdGUodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5wdXRDbGFzc05hbWU9J25vd2hpdGVzcGFjZSdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5wdSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvblNhdmU9e3ZhbCA9PiBzYXZlUHUodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J251bWJlcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucmVtaXNlLCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVJlbWlzZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsobGlnbmUucHUgKiBsaWduZS5xdWFudGl0ZSl9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17KChsaWduZS5wdSAqIGxpZ25lLnF1YW50aXRlKSAqICgoMTAwIC0gbGlnbmUucmVtaXNlKSAvIDEwMCkpfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25cIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5wcmVwYXJhdGlvbiA9PT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPEVkaXRUZXh0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0nbnVtYmVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e2xpZ25lLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnF1YW50aXRlLCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVRdGUodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5wdXRDbGFzc05hbWU9J25vd2hpdGVzcGFjZSdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5wdSwgMiwgJyAnKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvblNhdmU9e3ZhbCA9PiBzYXZlUHUodmFsKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnByZXBhcmF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCI+e2Zvcm1hdE51bWJlcihwcmV2dSwgMiwgJyAnKX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgYm9yZGVcIj57Zm9ybWF0TnVtYmVyKGxpdnJlLCAyLCAnICcpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBib3JkZVwiPntmb3JtYXROdW1iZXIocmVzdGUsIDIsICcgJyl9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSdudW1iZXInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtmb3JtYXROdW1iZXIobGlnbmUucXVhbnRpdGUsIDIsICcgJyl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZVF0ZSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J251bWJlcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtsaWduZS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbnB1dENsYXNzTmFtZT0nbm93aGl0ZXNwYWNlJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17Zm9ybWF0TnVtYmVyKGxpZ25lLnB1LCAyLCAnICcpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVQdSh2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxFZGl0VGV4dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0nbnVtYmVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17bGlnbmUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWZhdWx0VmFsdWU9e2Zvcm1hdE51bWJlcihsaWduZS5yZW1pc2UsIDIsICcgJyl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvblNhdmU9e3ZhbCA9PiBzYXZlUmVtaXNlKHZhbCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9eyhsaWduZS5wdSAqIGxpZ25lLnF1YW50aXRlKX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXsoKGxpZ25lLnB1ICogbGlnbmUucXVhbnRpdGUpICogKCgxMDAgLSBsaWduZS5yZW1pc2UpIC8gMTAwKSl9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICApO1xuICAgICAgICB9KVxuICAgIH1cbiAgICBpZiAoYm9uKSB7XG4gICAgICAgIGlmIChib24uY2Fpc3NlcyAhPT0gbnVsbCkge1xuICAgICAgICAgICAgbGV0IGNhaXNzZXMgPSBib24uY2Fpc3NlcztcbiAgICAgICAgICAgIHJlbmRlckNhaXNzZSA9IGNhaXNzZXMubWFwKChjYWlzKSA9PiB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtjYWlzLmV0YXQgPT09IFwidmFsaWRlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiA9PT0gJ291aScgJiYgYm9uLnByZXBhcmF0aW9uID09PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjZcIiBjbGFzc05hbWU9XCJib3JkZVwiPjxNb21lbnRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9ybWF0PVwiREQvTU0vWVlZWVwiPntjYWlzLmRhdGV9PC9Nb21lbnQ+IHwgPHNwYW4+TsKwIEJvbjoge2NhaXMubnVtY2Fpc3NlfTwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LXJpZ2h0XCI+PE51bWJlckZvcm1hdCBudW1iPXtjYWlzLm1vbnRhbnR9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtICE9PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmRlXCI+PE1vbWVudFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXMuZGF0ZX08L01vbWVudD4gfCA8c3Bhbj5OwrAgQm9uOiB7Y2Fpcy5udW1jYWlzc2V9PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e2NhaXMubW9udGFudH0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJDYWlzc2V9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVmICE9PSAnb3VpJyAmJiBib24ucHJlcGFyYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiOFwiIGNsYXNzTmFtZT1cImJvcmRlXCI+PE1vbWVudFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXMuZGF0ZX08L01vbWVudD4gfCA8c3Bhbj5OwrAgQm9uOiB7Y2Fpcy5udW1jYWlzc2V9PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e2NhaXMubW9udGFudH0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI3XCIgY2xhc3NOYW1lPVwiYm9yZGVcIj48TW9tZW50XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvcm1hdD1cIkREL01NL1lZWVlcIj57Y2Fpcy5kYXRlfTwvTW9tZW50PiB8IDxzcGFuPk7CsCBCb246IHtjYWlzLm51bWNhaXNzZX08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Y2Fpcy5tb250YW50fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckNhaXNzZX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgIClcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgY29uc3Qgc2hhc2hhID0gYXN5bmMgKGEpID0+IHtcbiAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICBtZXRob2Q6ICdHRVQnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9jaGFudGllcnMvZm9ydGUvJyArIGEsXG4gICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICBsb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCd0b2dnbGUnKTtcbiAgICAgICAgICAgIHdpbmRvdy4kKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICByZXR1cm4gKFxuICAgICAgICA8PlxuICAgICAgICAgICAge2xvYWRpbmcgPT09IHRydWUgJiZcbiAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm1vZGFsIGZhZGUgcmlnaHRcIiBpZD1cIm1vZGFsTGlzdFwiIHRhYkluZGV4PVwiLTFcIiByb2xlPVwiZGlhbG9nXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJteU1vZGFsTGFiZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1kaWFsb2cgbW9kYWwtZnVsbC1oZWlnaHQgbW9kYWwtcmlnaHRcIiByb2xlPVwiZG9jdW1lbnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm1vZGFsLWNvbnRlbnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1oZWFkZXIgYmctcGluayB0ZXh0LXdoaXRlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwibW9kYWwtdGl0bGUgdGV4dC13aGl0ZVwiIGlkPVwiZGVmYXVsdE1vZGFsTGFiZWxcIj5NT0RJRklFUiBMRVNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBMSUdORVM8L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1ib2R5IG0tdC0xMCBiaWVuXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJvZHlcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgaWQ9XCJib3JkZVwiIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwiLCBtYXJnaW5UbzogXCItMjBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJiZy1wcmkgdGV4dC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjEycHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj5Sw4lGPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJsZWZ0XCIsIHBhZGRpbmc6IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgRMOJU0lHTkFUSU9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyR3JvdXBlTW9iaWxlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyTGlnbmVNb2JpbGV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cblxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvdyBjbGVhcmZpeCBcIiBzdHlsZT17e3BhZGRpbmc6IFwiMC4xY21cIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtc20tMTJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDMgY2xhc3NOYW1lPVwiZm9udC1ib2xkIGNvbC1wdXJwbGUgdGV4dC1jZW50ZXJcIj57Ym9uLmNsaWVudC5ub21jbGllbnQudG9VcHBlckNhc2UoKX08L2gzPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxoMyBjbGFzc05hbWU9XCJmb250LWJvbGQgbS10LS0xMCAgY29sLXBpbmsgdGV4dC1jZW50ZXJcIj57Ym9uLmNoYW50aWVyLm5vbWNoYW50aWVyLnRvVXBwZXJDYXNlKCl9PC9oMz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDMgY2xhc3NOYW1lPVwiZm9udC1ib2xkIG0tdC0tMTAgY29sLWJsdWUgdGV4dC1jZW50ZXJcIj5CT04gTsKwOiB7Ym9uLm51bWJvbn08L2gzPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZGV2aXMgIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGgzIGNsYXNzTmFtZT1cImZvbnQtYm9sZCBtLXQtLTEwIHByaSB0ZXh0LWNlbnRlclwiPkRFVklTIE7CsDogPGFcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhyZWY9e2AvY3JtL2RldmlzLyR7Ym9uLmRldmlzLmlkfS8ke2Jvbi5jaGFudGllci5pZH1gfT57Ym9uLmRldmlzLmlkZGV2aXN9PC9hPjwvaDM+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiZm9udC1ib2xkIGNvbC1ibGFjayB0ZXh0LWNlbnRlclwiPkNFIEJPTiBFU1QgVkFMSUTDiTwvaDQ+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uY29yYmVpbGxlICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJmb250LWJvbGQgY29sLWJsYWNrXCI+Q0UgQk9OIEVTVCBTVVBQUklNw4k8L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidG4gYmctZGVlcC1vcmFuZ2UgdGV4dC13aGl0ZSBtLXItNVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e3Jlc3RhdXJlQm9ufT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLXJlZG9cIi8+IFJFU1RBVVJFUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpY2VUeXBlICE9PSBcIm1vYmlsZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmNvcmJlaWxsZSA9PT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSAhPT0gXCJjcHNcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYnRuLWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2NoYW50aWVyLyR7Ym9uLmNoYW50aWVyLmlkfWB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiZy1ncmVlbiBhbGlnbi1sZWZ0IG0tYi0xMCB0ZXh0LXdoaXRlIHdhdmVzLWVmZmVjdCBcIj5BQ0PDiURFUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQVUgQ0hBTlRJRVI8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJ0bi1ncm91cFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiZy1ibHVlICBhbGlnbi1sZWZ0IG0tYi0xMCB0ZXh0LXdoaXRlIHdhdmVzLWVmZmVjdCBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIiBkYXRhLXRhcmdldD1cIiNtb2RhbEJvblByZXN0YVwiPkNSw4lFUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgVU5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEJPTiBQUkVTVEFUQUlSRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYmctcHJpICBhbGlnbi1sZWZ0IG0tYi0xMCB0ZXh0LXdoaXRlIHdhdmVzLWVmZmVjdCBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIiBkYXRhLXRhcmdldD1cIiNtb2RhbEJvbkZvdXJuZVwiPkNSw4lFUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgVU5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEJPTiBGT1VSTklTU0VVUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5ldGF0ID09PSBcInNhdmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJidG4tZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJ0bi1sYWJlbGVkIGJnLXByaSB0ZXh0LXdoaXRlIGJ0bi1zbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdGFyZ2V0PVwiI21vZGFsR3JvdXBcIj4rIEFKT1VURVIgREVTIExPVFNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWxhYmVsZWQgYmctYmx1ZSB0ZXh0LXdoaXRlIGJ0bi1zbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdGFyZ2V0PVwiI21vZGFsQ2hvaXNpclwiPkNIT0lTSVJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgVU4gQklFTlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFNFUlZJQ0VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwicHJlcGFcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWxhYmVsZWQgYmctcHJpIHRleHQtd2hpdGUgYnRuLXNtXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10YXJnZXQ9XCIjbW9kYWxMaWduZVwiPitcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQUpPVVRFUiBVTkUgTElHTkVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJ0bi1sYWJlbGVkIGJnLXB1cnBsZSB0ZXh0LXdoaXRlIGJ0bi1zbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRhcmdldD1cIiNtb2RhbERlcGxhY2VyXCI+RMOJUExBQ0VSXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgVkVSU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWxhYmVsZWQgYmctcHJpIHRleHQtd2hpdGUgYnRuLXNtXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e2R1cGxpcXVlckJvbn0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICsgRFVQTElRVUVSXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJ0bi1ncm91cFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWxhYmVsZWQgYmctZ3JlZW4gYnRuLXNtIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRhcmdldD1cIiNtb2RhbEJvblwiPi0gSU5GT1JNQVRJT05TXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBidG4tbGFiZWxlZCBiZy1zdWNjZXNzIHRleHQtd2hpdGUgYnRuLXNtXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10YXJnZXQ9XCIjbW9kYWxMaXN0XCI+LSBNT0RJRklFUiBMT1RTIEVUXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIExJR05FU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYnRuLWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiYnRuIGJnLXBpbmsgdGV4dC13aGl0ZSBtLWItMTAgd2F2ZXMtZWZmZWN0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e2RldmFsaWRlQm9ufT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLWNoZWNrLWNpcmNsZVwiLz4gRMOJVkFMSURFUjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmV0YXQgIT09IFwidmFsaWRlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gY2xhc3NOYW1lPVwiYnRuIGJnLWJsdWUgdGV4dC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e3ZhbGlkZUJvbn0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1jaGVjay1jaXJjbGVcIi8+IFZBTElERVJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vZG9jL2F0dGFjaGUvJHtib24uaWR9L2Jvbi9ub25gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYmctZGVlcC1vcmFuZ2UgdGV4dC13aGl0ZVwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1lbnZlbG9wZVwiLz4gTUFJTDwvYT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIGNsYXNzTmFtZT1cImJ0biBiZy1wcmkgdGV4dC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25DbGljaz17cGRmQm9ufT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmFzIGZhLWZpbGUtcGRmXCIvPiBQREZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPFJlYWN0SFRNTFRhYmxlVG9FeGNlbFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJ0ZXN0LXRhYmxlLXhscy1idXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJnLWdyZWVuIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFibGU9XCJib24yZXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9e2BCb24gZGUgY29tbWFuZGUgTsKwICR7Ym9uLm51bWJvbn1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRVhDRUxcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZXRhdCAhPT0gXCJ2YWxpZGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidG4gYmctcGluayB0ZXh0LXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25DbGljaz17ZGVsQm9ufT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLXRyYXNoXCIvPiBTVVBQUklNRVJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuICBiZy1pbmZvIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIiBkYXRhLXRhcmdldD1cIiNtb2RhbE1pc2VcIj4tIE1JU0UgRU5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEZPUk1FXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJidG4tZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidG4gYmctaW5kaWdvIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e2hhbmRsZVByaW50ZX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLXByaW50XCIvPiBJTVBSRVNTSU9OIFNBTlMgRU5Uw4pURVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidG4gYmctYmx1ZSB0ZXh0LXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbkNsaWNrPXtoYW5kbGVQcmludH0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLXByaW50XCIvPiBJTVBSRVNTSU9OIEFWRUMgRU5Uw4pURVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmb3JtZXMubWFwKChmb3JtZSwgaW5kZXgpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYnRuLWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Zvcm1lLnVzZWQgPT09IFwidXNlZFwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoYXNoYShmb3JtZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYmcteWVsbG93IGJvbG82MDAgIGFsaWduLWxlZnQgbS1iLTEwIGNvbC1ibGFjayB3YXZlcy1lZmZlY3QgbS1yLTVcIj57Zm9ybWUuaW50aXR1bGVyfTwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Zm9ybWUudXNlZCAhPT0gXCJ1c2VkXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hhc2hhKGZvcm1lLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBib2xvNjAwICBhbGlnbi1sZWZ0IG0tYi0xMCBjb2wtYmxhY2sgd2F2ZXMtZWZmZWN0IG0tci01XCI+e2Zvcm1lLmludGl0dWxlcn08L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYnRuLWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJ0bi1sYWJlbGVkIGJnLXB1cnBsZSB0ZXh0LXdoaXRlIGJ0bi1zbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRhcmdldD1cIiNtb2RhbFNvbGRlclwiPkVGRkVDVFVFUiBMRSBQQUlFTUVOVFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJjcHNcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZXRhdCA9PT0gXCJzYXZlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJidG4tZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJ0bi1sYWJlbGVkIGJnLWJsdWUgdGV4dC13aGl0ZSBidG4tc21cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRhcmdldD1cIiNtb2RhbENob2lzaXJcIj5DSE9JU0lSXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFVOIEJJRU5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgL1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBTRVJWSUNFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYnRuLWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2RvYy9hdHRhY2hlLyR7Ym9uLmlkfS9ib24vbm9uYH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJnLWRlZXAtb3JhbmdlIHRleHQtd2hpdGVcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZW52ZWxvcGVcIi8+IE1BSUw8L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidG4gYmctcHJpIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e3BkZkJvbn0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhcyBmYS1maWxlLXBkZlwiLz4gUERGXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxSZWFjdEhUTUxUYWJsZVRvRXhjZWxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiZy1ncmVlbiB0ZXh0LXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwiYm9uMmV4Y2VsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZpbGVuYW1lPXtgQm9uIGRlIGNvbW1hbmRlIE7CsCAke2Jvbi5udW1ib259YH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoZWV0PVwidGFibGV4bHNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uVGV4dD1cIkVYQ0VMXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biAgYmctaW5mbyB0ZXh0LXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCIgZGF0YS10YXJnZXQ9XCIjbW9kYWxNaXNlXCI+LSBNSVNFIEVOXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBGT1JNRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYnRuLWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gY2xhc3NOYW1lPVwiYnRuIGJnLWluZGlnbyB0ZXh0LXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbkNsaWNrPXtoYW5kbGVQcmludGV9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1wcmludFwiLz4gSU1QUkVTU0lPTiBTQU5TIEVOVMOKVEVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gY2xhc3NOYW1lPVwiYnRuIGJnLWJsdWUgdGV4dC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25DbGljaz17aGFuZGxlUHJpbnR9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1wcmludFwiLz4gSU1QUkVTU0lPTiBBVkVDIEVOVMOKVEVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Zm9ybWVzLm1hcCgoZm9ybWUsIGluZGV4KSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAoXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJ0bi1ncm91cFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmb3JtZS51c2VkID09PSBcInVzZWRcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGFzaGEoZm9ybWUuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJnLXllbGxvdyBib2xvNjAwICBhbGlnbi1sZWZ0IG0tYi0xMCBjb2wtYmxhY2sgd2F2ZXMtZWZmZWN0IG0tci01XCI+e2Zvcm1lLmludGl0dWxlcn08L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Zvcm1lLnVzZWQgIT09IFwidXNlZFwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoYXNoYShmb3JtZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYm9sbzYwMCAgYWxpZ24tbGVmdCBtLWItMTAgY29sLWJsYWNrIHdhdmVzLWVmZmVjdCBtLXItNVwiPntmb3JtZS5pbnRpdHVsZXJ9PC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBpZD1cImJvbjJleGNlbFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPFByaW50Q29tbWFuZGUgYm9uPXtib259IGxpZ25lcz17bGlnbmVzfSBncm91cGVzPXtncm91cGVzfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVmPXtjb21wb25lbnRSZWZ9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZW5kZXJMaWduZT17cmVuZGVyTGlnbmV9IHJlbmRlckNhaXNzZT17cmVuZGVyQ2Fpc3NlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVuZGVyR3JvdXBlPXtyZW5kZXJHcm91cGV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb3JtZT17Zm9ybWV9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtkZXZpY2VUeXBlID09PSBcIm1vYmlsZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYnRuLWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIGNsYXNzTmFtZT1cImJ0biBiZy1waW5rIGRyb3Bkb3duLXRvZ2dsZSBtLXItNVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJkcm9wZG93blwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1oYXNwb3B1cD1cInRydWVcIiBhcmlhLWV4cGFuZGVkPVwidHJ1ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwiZmEgZmEtY29nXCIvPiBGQUlSRSA8c3BhbiBjbGFzc05hbWU9XCJjYXJldFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZHJvcGRvd24tbWVudSBwLWwtMTAgcC1yLTEwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IFwiI2U5ZTllOVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZWZ0OiBcIjUwcHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcG9zaXRpb246IFwiYWJzb2x1dGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9jaGFudGllci8ke2Jvbi5jaGFudGllci5pZH1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJnLWdyZWVuIGJ0bi1ibG9jayBidG4tbGFiZWxlZCBjb2wtd2hpdGVcIj5BQ0PDiURFUiBBVVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIENIQU5USUVSPC9hPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYmctYmx1ZSBidG4tYmxvY2sgYnRuLWxhYmVsZWQgY29sLXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiIGRhdGEtdGFyZ2V0PVwiI21vZGFsQm9uXCI+Q1LDiUVSIFVOIE5PVVZFQVUgQk9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaSByb2xlPVwic2VwYXJhdG9yXCIgY2xhc3NOYW1lPVwiZGl2aWRlclwiPjwvbGk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmV0YXQgPT09IFwic2F2ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBidG4tYmxvY2sgYnRuLWxhYmVsZWQgYmctcHJpIHRleHQtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibW9kYWxcIiBkYXRhLXRhcmdldD1cIiNtb2RhbEdyb3VwXCI+QUpPVVRFUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgREVTIExPVFNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWJsb2NrIGJ0bi1sYWJlbGVkIGJnLXByaSB0ZXh0LXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCIgZGF0YS10YXJnZXQ9XCIjbW9kYWxDaG9pc2lyXCI+Q0hPSVNJUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgVU4gQklFTiAvIFNFUlZJQ0VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSAhPT0gXCJwcmVwYVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWJsb2NrIGJ0bi1sYWJlbGVkIGJnLXByaSB0ZXh0LXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdGFyZ2V0PVwiI21vZGFsTGlnbmVcIj5BSk9VVEVSXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgVU5FIExJR05FXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJ0bi1ibG9jayBidG4tbGFiZWxlZCBiZy1wcmkgdGV4dC13aGl0ZSBidG4tc21cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e2R1cGxpcXVlckJvbn0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEVVBMSVFVRVIgQ0UgQk9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGkgcm9sZT1cInNlcGFyYXRvclwiIGNsYXNzTmFtZT1cImRpdmlkZXJcIj48L2xpPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBidG4tYmxvY2sgYnRuLWxhYmVsZWQgYmctcGluayBidG4tc20gdGV4dC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10YXJnZXQ9XCIjbW9kYWxJbmZvXCI+TU9ESUZJRVIgTEVTIElORk9STUFUSU9OU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBidG4tYmxvY2sgYnRuLWxhYmVsZWQgYmctcGluayB0ZXh0LXdoaXRlIGJ0bi1zbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiIGRhdGEtdGFyZ2V0PVwiI21vZGFsTWlzZVwiPk1JU0UgRU5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEZPUk1FIERVIEJPTlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmV0YXQgPT09IFwidmFsaWRlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiYnRuIGJnLXBpbmsgdGV4dC13aGl0ZSBtLXItNSB3YXZlcy1lZmZlY3RcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbkNsaWNrPXtkZXZhbGlkZUJvbn0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLWNoZWNrLWNpcmNsZVwiLz4gRMOJVkFMSURFUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZXRhdCAhPT0gXCJ2YWxpZGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIGNsYXNzTmFtZT1cImJ0biBiZy1ibHVlIHRleHQtd2hpdGUgbS1yLTVcIiBvbkNsaWNrPXt2YWxpZGVCb259PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1jaGVjay1jaXJjbGVcIi8+IFZBTElERVJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZXRhdCAhPT0gXCJ2YWxpZGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIGNsYXNzTmFtZT1cImJ0biBiZy1waW5rIHRleHQtd2hpdGUgbS1yLTVcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdHJhc2hcIi8+IFNVUFBSSU1FUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmV0YXQgPT09IFwic2F2ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIGNsYXNzTmFtZT1cImJ0biBiZy1pbmRpZ28gdGV4dC13aGl0ZSBtLXItNVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2xpY2s9e2hhbmRsZVByaW50fT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLXByaW50XCIvPiBJTVBSSU1FUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gY2xhc3NOYW1lPVwiYnRuIGJnLWRlZXAtb3JhbmdlIHRleHQtd2hpdGUgbS1yLTVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbkNsaWNrPXtoYW5kbGVQcmludH0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1lbnZlbG9wZVwiLz4gTUFJTFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gY2xhc3NOYW1lPVwiYnRuIGJnLXByaSB0ZXh0LXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25DbGljaz17cGRmQm9ufT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhcyBmYS1maWxlLXBkZlwiLz4gUERGXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPFJlYWN0SFRNTFRhYmxlVG9FeGNlbFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYmctZ3JlZW4gdGV4dC13aGl0ZSBtLXItNVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFibGU9XCJib24yZXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZpbGVuYW1lPXtgQm9uIGRlIGNvbW1hbmRlIE7CsCAke2Jvbi5udW1ib259YH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGVldD1cInRhYmxleGxzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRVhDRUxcIi8+PGJyLz5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3A+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBpZD1cImJvcmRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIiwgbWFyZ2luVG9wOiBcIjMwcHhcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNGRkZcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJiZy1wcmkgdGV4dC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMTJweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e3RleHRBbGlnbjogXCJsZWZ0XCIsIHBhZGRpbmc6IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEw4lTSUdOQVRJT05cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJHcm91cGVNb2JpbGV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckxpZ25lTW9iaWxlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj48Yj5UT1RBTCBIVCA6IDwvYj48IE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17Ym9uLnRvdGFsaHR9Lz4mbmJzcDsmbmJzcDsmbmJzcDs8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcC1yLTEwXCI+PGI+UkVNSVNFIDogPC9iPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtib24udnJlbWlzZX0vPiZuYnNwOyZuYnNwOyZuYnNwOzwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcC1yLTEwXCI+PGI+VFZBKHtib24udHZhfSUpOiA8L2I+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17Ym9uLnZ0dmF9Lz4mbmJzcDsmbmJzcDsmbmJzcDs8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBwLXItMTAgY29sLWJsdWUgZm9udC1ib2xkXCI+PGI+Qk9OIFRPVEFMIFRUQyA6IDwvYj48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtib24udG90YWx0dGN9Lz4mbmJzcDsmbmJzcDsmbmJzcDs8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBwLXItMTAgZm9udC1ib2xkXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBcnLDqnTDqSBsZSBib24gw6AgbGEgc29tbWVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZTo8YnIvPiB7bnVtYmVyVG9MZXR0ZXJzKHBhcnNlSW50KGJvbi50b3RhbHR0YyksIHtsYW5nOiAnZnInfSl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4+PGI+IHtib24ubW9ubmFpZS5jb2RlfTwvYj48L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5jb25kaXRpb25zICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tmbG9hdDogXCJsZWZ0XCIsIGNvbG9yOiBcIiM0ZTczZGZcIn19Pjx1PklORk9STUFUSU9OU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQURESVRJT05ORUxMRVM8L3U+PC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjb2xvcjogXCIjMDAwMDAwXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogYm9uLmNvbmRpdGlvbnN9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+PGJyLz48YnIvPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICB9XG4gICAgICAgIDwvPlxuICAgIClcbn1cblxudHJ5IHtcbiAgICBjb25zdCBjb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2hhY29udGVudENvbW1hbmRlJyk7XG4gICAgY29uc3Qgcm9vdCA9IGNyZWF0ZVJvb3QoY29udGFpbmVyKTtcbiAgICByb290LnJlbmRlcig8Q29tbWFuZGUvPik7XG59IGNhdGNoIChlKSB7XG59IiwiaW1wb3J0IFJlYWN0IGZyb20gJ3JlYWN0JztcbmltcG9ydCBOdW1iZXJGb3JtYXQgZnJvbSBcIi4vLi4vLi4vZm9uY3Rpb25zL051bWJlckZvcm1hdFwiO1xuXG5cbmV4cG9ydCBjb25zdCBQcmludENvbW1hbmRlID0gUmVhY3QuZm9yd2FyZFJlZigocHJvcHMsIHJlZikgPT4ge1xuICAgIGxldCBib24gPSBwcm9wcy5ib247XG4gICAgbGV0IHJlbmRlckxpZ25lID0gcHJvcHMucmVuZGVyTGlnbmU7XG4gICAgbGV0IHJlbmRlckNhaXNzZSA9IHByb3BzLnJlbmRlckNhaXNzZTtcbiAgICBsZXQgcmVuZGVyR3JvdXBlID0gcHJvcHMucmVuZGVyR3JvdXBlO1xuICAgIGxldCBmb3JtZSA9IHByb3BzLmZvcm1lO1xuICAgIGxldCBib25kYXRlID0gJChcIiNib25kYXRlXCIpLnZhbCgpO1xuICAgIGNvbnN0IG51bWJlclRvTGV0dGVycyA9IHJlcXVpcmUoJ251bWJlci0yLWxldHRlcnMnKTtcblxuICAgIGxldCBjYWlzc2VzID0gYm9uLmNhaXNzZXM7XG4gICAgbGV0IGNjID0gMDtcblxuICAgIGNhaXNzZXMubWFwKChjYWlzcykgPT4ge1xuICAgICAgICBpZiAoY2Fpc3MuZXRhdCA9PT0gJ3ZhbGlkZScpIHtcbiAgICAgICAgICAgIGNjID0gY2MgKyAxO1xuICAgICAgICB9XG4gICAgfSlcblxuXG4gICAgcmV0dXJuIChcbiAgICAgICAgPD5cbiAgICAgICAgICAgIDxkaXYgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICB3aWR0aDogXCIyMWNtXCIsXG4gICAgICAgICAgICAgICAgbWluSGVpZ2h0OiBcIjI5LjdjbVwiLFxuICAgICAgICAgICAgICAgIGJveFNoYWRvdzogXCIwIDAgMC41Y20gcmdiYSgwLDAsMCwwLjUpXCIsXG4gICAgICAgICAgICAgICAgYmFja2dyb3VuZENvbG9yOiBcIiNGRkZcIlxuICAgICAgICAgICAgfX0+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJoZWFkZXJcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICB3aWR0aDogZm9ybWUuaGVhZGVyV2l0aCArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgaGVpZ2h0OiBmb3JtZS5oZWFkZXJIZWlnaHQgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogXCIjRkZGXCJcbiAgICAgICAgICAgICAgICB9fT5cbiAgICAgICAgICAgICAgICAgICAge2Zvcm1lLnR5cGVFbnRldGUgIT09IFwiYXVjdW5cIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Zm9ybWUudHlwZUVudGV0ZSA9PT0gXCJpbWFnZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgc3JjPXtgL2dhbGxlcnkvJHtmb3JtZS5saW5rfWB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2lkdGg6IGZvcm1lLnRldGVIICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBoZWlnaHQ6IGZvcm1lLnRldGVZICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nUmlnaHQ6IGZvcm1lLnRldGVERCArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ0xlZnQ6IGZvcm1lLnRldGVERyArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ1RvcDogZm9ybWUudGV0ZURIICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nQm90dG9tOiBmb3JtZS50ZXRlREIgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbHQ9XCJcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmb3JtZS50eXBlRW50ZXRlID09PSBcInRleHRlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgY2xhc3NOYW1lPVwiY29jb2xvclwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nUmlnaHQ6IGZvcm1lLnRldGVERCArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhZGRpbmdMZWZ0OiBmb3JtZS50ZXRlREcgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nVG9wOiBmb3JtZS50ZXRlREggKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nQm90dG9tOiBmb3JtZS50ZXRlREIgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmb3JtZS5oZWFkZXJUZXh0fX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIHtmb3JtZS50eXBlRW50ZXRlID09PSBcImF1Y3VuXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGgzIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGNvbC1ibGFja1wiPjxici8+PGJyLz5EaW1lbnNpb24gZGUgbGEgem9uZVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkJ2VudMOqdGU8YnIvPntmb3JtZS5oZWFkZXJIZWlnaHR9Y20geCB7Zm9ybWUuaGVhZGVyV2l0aH1jbTwvaDM+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg1IGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGNvbC1ibHVlLWdyZXlcIj5WZXVpbGxleiBjbGlxdWVyIHN1ciBsZSBib3V0b24gPGI+XCJNSVNFIEVOIEZPUk1FXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERVIERFVklTXCI8L2I+IHBvdXIgYXBwb3J0ZXIgZGVzIG1vZGlmaWNhdGlvbnMgc3ZwLjwvaDU+XG4gICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYm9vZFwiIHN0eWxlPXt7cGFkZGluZ0xlZnQ6IFwiMWNtXCIsIHBhZGRpbmdSaWdodDogXCIxY21cIn19PlxuICAgICAgICAgICAgICAgICAgICA8dGFibGUgYWxpZ249XCJyaWdodFwiIHN0eWxlPXt7bWFyZ2luVG9wOiBcIjEwcHhcIiwgbWFyZ2luQm90dG9tOiBcIjI1cHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e2JvcmRlcjogXCJub25lXCIsIHRleHRBbGlnbjogXCJjZW50ZXJcIiwgbGluZUhlaWdodDogXCIxLjVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj57Ym9uLmNoYW50aWVyLmNsaWVudC5ub21jbGllbnQudG9VcHBlckNhc2UoKX08L2I+IDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uY2hhbnRpZXIuY2xpZW50LmFkcmVzc2UgPT09IFwiIFwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PiA8YnIvPiB7Ym9uLmNoYW50aWVyLmNsaWVudC5hZHJlc3NlfSA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNlbGxTcGFjaW5nPVwiMFwiIGFsaWduPVwibGVmdFwiIHN0eWxlPXt7bWFyZ2luQm90dG9tOiBcIjEwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e2JvcmRlcjogXCJub25lXCIsIGZvbnRTaXplOiBcIjI1cHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwib3VpXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPkJPTiBERSBDT01NQU5ERSAtIEZPVVJOSVNTRVVSPC9iPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25cIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+Qk9OIERFIFJFVE9VUiBERSBDT01NQU5ERSAtIEZPVVJOSVNTRVVSPC9iPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25lXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPkJPTiBERSBMSVZSQUlTT048L2I+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcInBzdFwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5CT04gREUgQ09NTUFOREUgLSBQUkVTVEFUQUlSRTwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwiY3BzXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPlBSw4lWSVNJT04gQVJUSUNMRSBDT01QT1PDiTwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHJlcGFcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+Qk9OIERFIFNVSVZJIERFIENPTU1BTkRFPC9iPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2VsbFNwYWNpbmc9XCIwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dHIgc3R5bGU9e3tiYWNrZ3JvdW5kQ29sb3I6IFwiI0YwRjBGMFwiLCBmb250V2VpZ2h0OiBcIjcwMFwiLCB3aWR0aDogXCI0NSVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPkRBVEU8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPk7CsCBCT048L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCI+TsKwIEJPTiBERSBTVUlWSTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPlNVUiBERVZJUyBOwrA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJwc3RcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIj5QUkVTVEFUQUlSRTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJvdWlcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIj5GT1VSTklTU0VVUjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25cIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIj5GT1VSTklTU0VVUjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPntib25kYXRlfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCI+e2Jvbi5udW1ib259PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnByZXBhcmF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5wcmVwYXJhdGlvbiAhPT0gbnVsbCAmJiBib24ucHJlcGFyYXRpb24ubnVtYm9ufVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIj57Ym9uLmRldmlzICE9PSBudWxsICYmIGJvbi5kZXZpcy5pZGRldmlzfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcIm91aVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPntib24uZm91cm5pc3NldXIgIT09IG51bGwgJiYgYm9uLmZvdXJuaXNzZXVyLmZvdXJuaXNzZXVyfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25cIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIj57Ym9uLmZvdXJuaXNzZXVyICE9PSBudWxsICYmIGJvbi5mb3Vybmlzc2V1ci5mb3Vybmlzc2V1cn08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHN0XCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCI+e2Jvbi5mb3Vybmlzc2V1ciAhPT0gbnVsbCAmJiBib24uZm91cm5pc3NldXIuZm91cm5pc3NldXJ9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcIm91aVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHN0XCIgJiYgYm9uLnR5cGUgPT09IFwicHJlcGFcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgY2xhc3NOYW1lPVwiYm9yZGUgYWxpZ24tbGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dERlY29yYXRpb246IFwidW5kZXJsaW5lXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsaW5lSGVpZ2h0OiBcIjEuMlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFdlaWdodDogXCJib2xkXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+IFLDiUbDiVJFTkNFIDwvc3Bhbj48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBib24uYm9ucmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwicHN0XCIgJiYgYm9uLnR5cGUgIT09IFwicHJlcGFcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI1XCIgY2xhc3NOYW1lPVwiYm9yZGUgYWxpZ24tbGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dERlY29yYXRpb246IFwidW5kZXJsaW5lXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsaW5lSGVpZ2h0OiBcIjEuMlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFdlaWdodDogXCJib2xkXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+IFLDiUbDiVJFTkNFIDwvc3Bhbj48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBib24uYm9ucmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwibm9uXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJwc3RcIiAmJiBib24udHlwZSA9PT0gXCJwcmVwYVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIiBjbGFzc05hbWU9XCJib3JkZSBhbGlnbi1sZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbmVIZWlnaHQ6IFwiMS4yXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb250V2VpZ2h0OiBcImJvbGRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT4gUsOJRsOJUkVOQ0UgPC9zcGFuPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGJvbi5ib25yZWZlcmVuY2V9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSAhPT0gXCJwc3RcIiAmJiBib24udHlwZSAhPT0gXCJwcmVwYVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJib3JkZSBhbGlnbi1sZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbmVIZWlnaHQ6IFwiMS4yXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb250V2VpZ2h0OiBcImJvbGRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT4gUsOJRsOJUkVOQ0UgPC9zcGFuPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGJvbi5ib25yZWZlcmVuY2V9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJwc3RcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJvcmRlIGFsaWduLWxlZnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGluZUhlaWdodDogXCIxLjJcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRXZWlnaHQ6IFwiYm9sZFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PiBSw4lGw4lSRU5DRSA8L3NwYW4+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBib24uYm9ucmVmZXJlbmNlfX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJjcHNcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJvcmRlIGFsaWduLWxlZnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGluZUhlaWdodDogXCIxLjJcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRXZWlnaHQ6IFwiYm9sZFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PiBSw4lGw4lSRU5DRSA8L3NwYW4+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBib24uYm9ucmVmZXJlbmNlfX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj59XG4gICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICA8dGFibGUgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpblRvcDogXCIyMHB4XCJ9fSBjZWxsU3BhY2luZz1cIjBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJwcmludGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFLDiUYgPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvciB0ZXh0LWxlZnRcIj4gRMOJU0lHTkFUSU9OPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gVU5JVMOJPC90aD5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcInBzdFwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFFUw4k8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5QUklYIFUuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHJlcGFcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJPGJyLz5QUsOJVlVFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFFUw4kgPGJyLz5MSVZSw4lFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFJFU1RFJm5ic3A7w4AgPGJyLz5MSVZSRVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5QUklYIFUuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJvdWlcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFFUw4k8YnIvPlBSw4lWVUU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJIDxici8+TElWUsOJRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFJFU1RFJm5ic3A7w4AgPGJyLz5MSVZSRVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJPGJyLz5ERU1BTkTDiUU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5wcmVwYXJhdGlvbiA9PT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFFUw4k8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlBSSVggVS5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25cIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFFUw4k8YnIvPlBSw4lWVUU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJIDxici8+TElWUsOJRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFJFU1RFJm5ic3A7w4AgPGJyLz5MSVZSRVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJPGJyLz7DgCBSRVRPVVJORVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5wcmVwYXJhdGlvbiA9PT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFFUw4k8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PlBSSVggVS5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25lXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnByZXBhcmF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJPGJyLz5QUsOJVlVFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUVTDiSA8YnIvPkxJVlLDiUU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBSRVNURSZuYnNwO8OAIDxici8+TElWUkVSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUVTDiTxici8+REVNQU5Ew4lFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gPT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5QUklYIFUuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJiA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUkVNSVNFKCUpIDwvdGg+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+TU9OVEFOVCBIVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gVU5JVMOJPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiIHN0eWxlPXt7bWF4V2lkdGg6IFwiMTAwcHhcIn19PlFVQU5USVTDiVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIExJVlLDiUVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJHcm91cGV9XG4gICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyTGlnbmV9XG4gICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NjICE9PSAwICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZWYgPT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmIGJvbi5wcmVwYXJhdGlvbiAhPT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3tjb2xvcjogXCJyZWRcIn19IGNvbFNwYW49XCIxM1wiIGNsYXNzTmFtZT1cImJvcmRlXCI+PGI+SElTVE9SSVFVRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERFUyBQQUlFTUVOVFM8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSAhPT0gJ291aScgJiYgYm9uLnByZXBhcmF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e2NvbG9yOiBcInJlZFwifX0gY29sU3Bhbj1cIjEyXCIgY2xhc3NOYW1lPVwiYm9yZGVcIj48Yj5ISVNUT1JJUVVFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgREVTIFBBSUVNRU5UUzwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyQ2Fpc3NlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiA9PT0gJ25vbicgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiYgYm9uLnByZXBhcmF0aW9uICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e2NvbG9yOiBcInJlZFwifX0gY29sU3Bhbj1cIjEyXCIgY2xhc3NOYW1lPVwiYm9yZGVcIj48Yj5ISVNUT1JJUVVFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgREVTIFBBSUVNRU5UUzwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtICE9PSAnb3VpJyAmJiBib24ucHJlcGFyYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7Y29sb3I6IFwicmVkXCJ9fSBjb2xTcGFuPVwiMTFcIiBjbGFzc05hbWU9XCJib3JkZVwiPjxiPkhJU1RPUklRVUVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBERVMgUEFJRU1FTlRTPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJDYWlzc2V9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgIHtib24udHlwZSAhPT0gXCJwc3RcIiAmJiBib24udHlwZSAhPT0gXCJub25lXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwicHJlcGFcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlLWJvcmRlcmVkXCIgc3R5bGU9e3tmbG9hdDogXCJsZWZ0XCIsIHdpZHRoOiBcIjMwJVwiLCBtYXJnaW5Ub3A6IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIHN0eWxlPXt7Zm9udFdlaWdodDogXCI2MDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNmOGY5ZmFcIn19PjxiPlNPTU1FIFBFUsOHVUU8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCIsIGJhY2tncm91bmRDb2xvcjogXCIjZjhmOWZhXCJ9fT48Yj5SRVNURSDDgCBQQVlFUjwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBhbGlnbj1cImNlbnRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnJlY3V9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBhbGlnbj1cImNlbnRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnJlc3RlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1ib3JkZXJlZFwiIHN0eWxlPXt7ZmxvYXQ6IFwicmlnaHRcIiwgd2lkdGg6IFwiNjAlXCIsIG1hcmdpblRvcDogXCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgc3R5bGU9e3tmb250V2VpZ2h0OiBcIjYwMFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwiLCBiYWNrZ3JvdW5kQ29sb3I6IFwiI2Y4ZjlmYVwifX0+PGI+VE9UQUxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEhUPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmIGJvbi50eXBlICE9PSBcIm5vbmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCIsIGJhY2tncm91bmRDb2xvcjogXCIjZjhmOWZhXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5SRU1JU0U8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNmOGY5ZmFcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+VFZBIHtib24udHZhfSU8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCIsIGJhY2tncm91bmRDb2xvcjogXCIjZjhmOWZhXCJ9fT48Yj5ORVQgw4BcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBBWUVSPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+PE51bWJlckZvcm1hdCBudW1iPXtib24udG90YWxodH0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJiBib24udHlwZSAhPT0gXCJub25lXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2Jvbi52cmVtaXNlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBhbGlnbj1cImNlbnRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnZ0dmF9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBhbGlnbj1cImNlbnRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnRvdGFsdHRjfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJwc3RcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1ib3JkZXJlZFwiIHN0eWxlPXt7ZmxvYXQ6IFwibGVmdFwiLCB3aWR0aDogXCI2MCVcIiwgbWFyZ2luVG9wOiBcIjEwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBzdHlsZT17e2ZvbnRXZWlnaHQ6IFwiNjAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCIsIGJhY2tncm91bmRDb2xvcjogXCIjZjhmOWZhXCJ9fT48Yj5UT1RBTFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgSFQ8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiYgYm9uLnR5cGUgIT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNmOGY5ZmFcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPlJFTUlTRTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwiLCBiYWNrZ3JvdW5kQ29sb3I6IFwiI2Y4ZjlmYVwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5UVkEge2Jvbi50dmF9JTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNmOGY5ZmFcIn19PjxiPk5FVCDDgFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT48TnVtYmVyRm9ybWF0IG51bWI9e2Jvbi50b3RhbGh0fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmIGJvbi50eXBlICE9PSBcIm5vbmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17Ym9uLnZyZW1pc2V9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIGFsaWduPVwiY2VudGVyXCI+PE51bWJlckZvcm1hdCBudW1iPXtib24udnR2YX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIGFsaWduPVwiY2VudGVyXCI+PE51bWJlckZvcm1hdCBudW1iPXtib24udG90YWx0dGN9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlLWJvcmRlcmVkXCIgc3R5bGU9e3tmbG9hdDogXCJyaWdodFwiLCB3aWR0aDogXCIzOCVcIiwgbWFyZ2luVG9wOiBcIjEwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRyIHN0eWxlPXt7Zm9udFdlaWdodDogXCI2MDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwiLCBiYWNrZ3JvdW5kQ29sb3I6IFwiI2Y4ZjlmYVwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA+PGI+U09NTUUgUEVSw4dVRTwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwiLCBiYWNrZ3JvdW5kQ29sb3I6IFwiI2Y4ZjlmYVwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA+PGI+UkVTVEUgw4AgUEFZRVI8L2I+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgYWxpZ249XCJjZW50ZXJcIj48TnVtYmVyRm9ybWF0IG51bWI9e2Jvbi5yZWN1fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBhbGlnbj1cImNlbnRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnJlc3RlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgIHtib24udHlwZSAhPT0gXCJub25lXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQXJyw6p0w6kgbGUgYm9uIMOgIGxhIHNvbW1lXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlOjxici8+PGI+IHtudW1iZXJUb0xldHRlcnMocGFyc2VJbnQoYm9uLnRvdGFsdHRjKSwge2xhbmc6ICdmcid9KX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4+IHtib24ubW9ubmFpZS5jb2RlfTwvc3Bhbj48L2I+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9wPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2Zsb2F0OiBcInJpZ2h0XCIsIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwifX0+IFNJR05BVFVSRSBBVVRPUklTw4lFIDwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcIm5vbmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpblRvcDogXCI1cHhcIn19IGNlbGxTcGFjaW5nPVwiMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwibGVmdFwiLCB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIn19PlZJU0EgQ0hFRlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIENIQU5USUVSXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwiLCB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIn19PlZJU0EgQ0hFRlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIETDiVDDlFRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIiwgdGV4dERlY29yYXRpb246IFwidW5kZXJsaW5lXCJ9fT5WSVNBXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgRElSRUNUSU9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB7Ym9uLmNvbmRpdGlvbnMgIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgY2xhc3NOYW1lPVwia29wXCIgc3R5bGU9e3sgZmxvYXQ6IFwibGVmdFwiLCBjb2xvcjogXCIjMDAwXCIgfX0+IElORk9STUFUSU9OU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBBRERJVElPTk5FTExFUzwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NsZWFyOiBcImJvdGhcIn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NvbG9yOiBcIiMwMDAwMDBcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGJvbi5jb25kaXRpb25zfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvb3RlclwiPlxuICAgICAgICAgICAgICAgICAgICB7Zm9ybWUudHlwZUZvb3RlciAhPT0gXCJhdWN1blwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmb3JtZS50eXBlRm9vdGVyID09PSBcInRleHRlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBmb3JtZS5waWVkc2l6ZSArIFwicHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHRBbGlnbjogXCJjZW50ZXJcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhZGRpbmdMZWZ0OiBcIjFjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ1JpZ2h0OiBcIjFjbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmb3JtZS5waWVkfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Zm9ybWUudHlwZUZvb3RlciA9PT0gXCJpbWFnZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgc3JjPXtgL2dhbGxlcnkvJHtmb3JtZS5mb290ZXJJbWFnZX1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpZHRoOiBcIjIxY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaGVpZ2h0OiBmb3JtZS5mb290ZXJIZWlnaHQgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbHQ9XCJcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAge2Zvcm1lLnR5cGVGb290ZXIgPT09IFwiYXVjdW5cIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDUgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgY29sLWJsYWNrXCI+RGltZW5zaW9uIGRlIGxhIHpvbmUgZGUgcGllZCBkZVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWdlID0ge2Zvcm1lLmZvb3RlckhlaWdodH1jbSB4IHtmb3JtZS5oZWFkZXJXaXRofWNtPC9oNT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDYgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgY29sLWJsdWUtZ3JleVwiPlZldWlsbGV6IGNsaXF1ZXIgc3VyIGxlIGJvdXRvbiA8Yj5cIk1JU0UgRU4gRk9STUVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgRFUgREVWSVNcIjwvYj4gcG91ciBhcHBvcnRlciBkZXMgbW9kaWZpY2F0aW9ucyBzdnAuPC9oNj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICA8L2Rpdj5cblxuXG5cblxuXG5cbiAgICAgICAgICAgIDxkaXYgc3R5bGU9e3tkaXNwbGF5OiBcIm5vbmVcIn19PlxuICAgICAgICAgICAgICAgIDxkaXYgcmVmPXtyZWZ9IHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgIHdpZHRoOiBcIjIxY21cIixcbiAgICAgICAgICAgICAgICAgICAgbWluSGVpZ2h0OiBcIjI5LjdjbVwiLFxuICAgICAgICAgICAgICAgICAgICBib3hTaGFkb3c6IFwiMCAwIDAuNWNtIHJnYmEoMCwwLDAsMC41KVwiLFxuICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IFwiI0ZGRlwiLFxuICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImhlYWRlclwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICB3aWR0aDogZm9ybWUuaGVhZGVyV2l0aCArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgIGhlaWdodDogZm9ybWUuaGVhZGVySGVpZ2h0ICsgXCJjbVwiXG4gICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAge2Zvcm1lLnR5cGVFbnRldGUgIT09IFwiYXVjdW5cIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmb3JtZS50eXBlRW50ZXRlID09PSBcImltYWdlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgc3JjPXtgL2dhbGxlcnkvJHtmb3JtZS5saW5rfWB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aWR0aDogZm9ybWUudGV0ZUggKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBoZWlnaHQ6IGZvcm1lLnRldGVZICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ1JpZ2h0OiBmb3JtZS50ZXRlREQgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nTGVmdDogZm9ybWUudGV0ZURHICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ1RvcDogZm9ybWUudGV0ZURIICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ0JvdHRvbTogZm9ybWUudGV0ZURCICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbHQ9XCJcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Zvcm1lLnR5cGVFbnRldGUgPT09IFwidGV4dGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nUmlnaHQ6IGZvcm1lLnRldGVERCArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nTGVmdDogZm9ybWUudGV0ZURHICsgXCJjbVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhZGRpbmdUb3A6IGZvcm1lLnRldGVESCArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nQm90dG9tOiBmb3JtZS50ZXRlREIgKyBcImNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGZvcm1lLmhlYWRlclRleHR9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9e3twYWRkaW5nTGVmdDogXCIxY21cIiwgcGFkZGluZ1JpZ2h0OiBcIjFjbVwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImhlYWRlci1zcGFjZVwiPiZuYnNwOzwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgYWxpZ249XCJyaWdodFwiIHN0eWxlPXt7bWFyZ2luVG9wOiBcIjEwcHhcIiwgbWFyZ2luQm90dG9tOiBcIjI1cHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7Ym9yZGVyOiBcIm5vbmVcIiwgdGV4dEFsaWduOiBcImNlbnRlclwiLCBsaW5lSGVpZ2h0OiBcIjEuNVwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj57Ym9uLmNoYW50aWVyLmNsaWVudC5ub21jbGllbnR9PC9iPiA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+e2Jvbi5jaGFudGllci5ub21jaGFudGllcn08L2I+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmNoYW50aWVyLmNsaWVudC5hZHJlc3NlID09PSBcIiBcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+IDxici8+IHtib24uY2hhbnRpZXIuY2xpZW50LmFkcmVzc2V9IDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2VsbFNwYWNpbmc9XCIwXCIgYWxpZ249XCJsZWZ0XCIgc3R5bGU9e3ttYXJnaW5Cb3R0b206IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3tib3JkZXI6IFwibm9uZVwiLCBmb250U2l6ZTogXCIyNXB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJvdWlcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPkJPTiBERSBDT01NQU5ERSAtIEZPVVJOSVNTRVVSPC9iPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcIm5vblwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+Qk9OIERFIFJFVE9VUiBERSBDT01NQU5ERSAtIEZPVVJOSVNTRVVSPC9iPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcIm5vbmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPkJPTiBERSBMSVZSQUlTT048L2I+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHN0XCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5CT04gREUgQ09NTUFOREUgLSBQUkVTVEFUQUlSRTwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJjcHNcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPlBSw4lWSVNJT04gQVJUSUNMRSBDT01QT1PDiTwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJwcmVwYVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGI+Qk9OIERFIFNVSVZJIERFIENPTU1BTkRFPC9iPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2VsbFNwYWNpbmc9XCIwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInByaW50b1wiIHN0eWxlPXt7d2lkdGg6IFwiNDUlXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCI+REFURTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPk7CsCBCT048L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwib3VpXCIgfHwgYm9uLnR5cGUgPT09IFwibm9uXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPk7CsCBCT04gREUgU1VJVkk8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPlNVUiBERVZJUyBOwrA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHN0XCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPlBSRVNUQVRBSVJFPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwib3VpXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPkZPVVJOSVNTRVVSPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwibm9uXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPkZPVVJOSVNTRVVSPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIj57Ym9uZGF0ZX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIj57Ym9uLm51bWJvbn08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwib3VpXCIgfHwgYm9uLnR5cGUgPT09IFwibm9uXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gIT09IG51bGwgJiYgYm9uLnByZXBhcmF0aW9uLm51bWJvbn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCI+e2Jvbi5kZXZpcyAhPT0gbnVsbCAmJiBib24uZGV2aXMuaWRkZXZpc308L3RkPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25cIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCI+e2Jvbi5mb3Vybmlzc2V1ciAhPT0gbnVsbCAmJiBib24uZm91cm5pc3NldXIuZm91cm5pc3NldXJ9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJvdWlcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCI+e2Jvbi5mb3Vybmlzc2V1ciAhPT0gbnVsbCAmJiBib24uZm91cm5pc3NldXIuZm91cm5pc3NldXJ9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJwc3RcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCI+e2Jvbi5mb3Vybmlzc2V1ciAhPT0gbnVsbCAmJiBib24uZm91cm5pc3NldXIuZm91cm5pc3NldXJ9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcIm5vblwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJwc3RcIiAmJiBib24udHlwZSA9PT0gXCJwcmVwYVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI0XCIgY2xhc3NOYW1lPVwiYm9yZGUgYWxpZ24tbGVmdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dERlY29yYXRpb246IFwidW5kZXJsaW5lXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsaW5lSGVpZ2h0OiBcIjEuMlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFdlaWdodDogXCJib2xkXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+IFLDiUbDiVJFTkNFIDwvc3Bhbj48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogYm9uLmJvbnJlZmVyZW5jZX19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlICE9PSBcInBzdFwiICYmIGJvbi50eXBlICE9PSBcInByZXBhXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJib3JkZSBhbGlnbi1sZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbmVIZWlnaHQ6IFwiMS4yXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb250V2VpZ2h0OiBcImJvbGRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT4gUsOJRsOJUkVOQ0UgPC9zcGFuPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBib24uYm9ucmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJvdWlcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHN0XCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIiBjbGFzc05hbWU9XCJib3JkZSBhbGlnbi1sZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbmVIZWlnaHQ6IFwiMS4yXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb250V2VpZ2h0OiBcImJvbGRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT4gUsOJRsOJUkVOQ0UgPC9zcGFuPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBib24uYm9ucmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwicHN0XCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjVcIiBjbGFzc05hbWU9XCJib3JkZSBhbGlnbi1sZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbmVIZWlnaHQ6IFwiMS4yXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb250V2VpZ2h0OiBcImJvbGRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT4gUsOJRsOJUkVOQ0UgPC9zcGFuPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBib24uYm9ucmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJwc3RcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJvcmRlIGFsaWduLWxlZnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGluZUhlaWdodDogXCIxLjJcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRXZWlnaHQ6IFwiYm9sZFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PiBSw4lGw4lSRU5DRSA8L3NwYW4+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogYm9uLmJvbnJlZmVyZW5jZX19Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwiY3BzXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJib3JkZSBhbGlnbi1sZWZ0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbmVIZWlnaHQ6IFwiMS4yXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb250V2VpZ2h0OiBcImJvbGRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT4gUsOJRsOJUkVOQ0UgPC9zcGFuPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGJvbi5ib25yZWZlcmVuY2V9fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpblRvcDogXCIyMHB4XCJ9fSBjZWxsU3BhY2luZz1cIjBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwicHJpbnRlclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVmID09PSAnb3VpJyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFLDiUYgPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yIHRleHQtbGVmdFwiPiBEw4lTSUdOQVRJT048L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBVTklUw4k8L3RoPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcInBzdFwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUVTDiTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5QUklYIFUuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcInByZXBhXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJPGJyLz5QUsOJVlVFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJIDxici8+TElWUsOJRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUkVTVEUmbmJzcDvDgCA8YnIvPkxJVlJFUjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5QUklYIFUuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwib3VpXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUVTDiTxici8+UFLDiVZVRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJIDxici8+TElWUsOJRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBSRVNURSZuYnNwO8OAIDxici8+TElWUkVSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFFUw4k8YnIvPkRFTUFORMOJRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnByZXBhcmF0aW9uID09PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFFUw4k8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCIgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+UFJJWCBVLlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25cIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5wcmVwYXJhdGlvbiAhPT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJPGJyLz5QUsOJVlVFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFFUw4kgPGJyLz5MSVZSw4lFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFJFU1RFJm5ic3A7w4AgPGJyLz5MSVZSRVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUVTDiTxici8+w4AgUkVUT1VSTkVSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gPT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUVTDiTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5QUklYIFUuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlID09PSBcIm5vbmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5wcmVwYXJhdGlvbiAhPT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJib3JkZSB0ZXh0LWNlbnRlclwiPiBRVMOJPGJyLz5QUsOJVlVFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFFUw4kgPGJyLz5MSVZSw4lFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFJFU1RFJm5ic3A7w4AgPGJyLz5MSVZSRVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUVTDiTxici8+REVNQU5Ew4lFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24ucHJlcGFyYXRpb24gPT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIj4gUVTDiTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5QUklYIFUuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiYgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFJFTUlTRSglKSA8L3RoPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYm9yZGUgdGV4dC1jZW50ZXJcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5NT05UQU5UIEhUPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJub25lXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCI+IFVOSVTDiTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJvcmRlIHRleHQtY2VudGVyXCIgc3R5bGU9e3ttYXhXaWR0aDogXCIxMDBweFwifX0+UVVBTlRJVMOJXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIExJVlLDiUVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckdyb3VwZX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyTGlnbmV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi50eXBlICE9PSBcIm5vbmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NjICE9PSAwICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI3XCIgY2xhc3NOYW1lPVwiYm9yZGUga29wZVwiPjxiPkhJU1RPUklRVUVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBERVMgUEFJRU1FTlRTPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNlwiIGNsYXNzTmFtZT1cImJvcmRlIGtvcGVcIj48Yj5ISVNUT1JJUVVFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgREVTIFBBSUVNRU5UUzwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyQ2Fpc3NlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlZiAhPT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCI2XCIgY2xhc3NOYW1lPVwiYm9yZGUga29wZVwiPjxiPkhJU1RPUklRVUVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBERVMgUEFJRU1FTlRTPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gIT09ICdvdWknICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNVwiIGNsYXNzTmFtZT1cImJvcmRlIGtvcGVcIj48Yj5ISVNUT1JJUVVFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgREVTIFBBSUVNRU5UUzwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyQ2Fpc3NlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwicHN0XCIgJiYgYm9uLnR5cGUgIT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwicHJlcGFcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2xhc3NOYW1lPVwidGFibGUtYm9yZGVyZWRcIiBzdHlsZT17e2Zsb2F0OiBcImxlZnRcIiwgd2lkdGg6IFwiMzAlXCIsIG1hcmdpblRvcDogXCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIHN0eWxlPXt7Zm9udFdlaWdodDogXCI2MDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCIsIGJhY2tncm91bmRDb2xvcjogXCIjZjhmOWZhXCJ9fT48Yj5TT01NRSBQRVLDh1VFPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNmOGY5ZmFcIn19PjxiPlJFU1RFIMOAIFBBWUVSPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIGFsaWduPVwiY2VudGVyXCI+PE51bWJlckZvcm1hdCBudW1iPXtib24ucmVjdX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBhbGlnbj1cImNlbnRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnJlc3RlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2xhc3NOYW1lPVwidGFibGUtYm9yZGVyZWRcIiBzdHlsZT17e2Zsb2F0OiBcInJpZ2h0XCIsIHdpZHRoOiBcIjYwJVwiLCBtYXJnaW5Ub3A6IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBzdHlsZT17e2ZvbnRXZWlnaHQ6IFwiNjAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCIsIGJhY2tncm91bmRDb2xvcjogXCIjZjhmOWZhXCJ9fT48Yj5UT1RBTFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEhUPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmFhcmVtID09PSAnb3VpJyAmJiBib24udHlwZSAhPT0gXCJub25lXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNmOGY5ZmFcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5SRU1JU0U8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCIsIGJhY2tncm91bmRDb2xvcjogXCIjZjhmOWZhXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Yj5UVkEge2Jvbi50dmF9JTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNmOGY5ZmFcIn19PjxiPk5FVCDDgFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBBWUVSPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2Jvbi50b3RhbGh0fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmIGJvbi50eXBlICE9PSBcIm5vbmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwifX0+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtib24udnJlbWlzZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBhbGlnbj1cImNlbnRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnZ0dmF9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBhbGlnbj1cImNlbnRlclwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnRvdGFsdHRjfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwicHN0XCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2xhc3NOYW1lPVwidGFibGUtYm9yZGVyZWRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2Zsb2F0OiBcImxlZnRcIiwgd2lkdGg6IFwiNjAlXCIsIG1hcmdpblRvcDogXCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIHN0eWxlPXt7Zm9udFdlaWdodDogXCI2MDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNmOGY5ZmFcIn19PjxiPlRPVEFMXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgSFQ8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uYWFyZW0gPT09ICdvdWknICYmIGJvbi50eXBlICE9PSBcIm5vbmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwiLCBiYWNrZ3JvdW5kQ29sb3I6IFwiI2Y4ZjlmYVwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPlJFTUlTRTwvYj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNmOGY5ZmFcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiPlRWQSB7Ym9uLnR2YX0lPC9iPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwiLCBiYWNrZ3JvdW5kQ29sb3I6IFwiI2Y4ZjlmYVwifX0+PGI+TkVUIMOAXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUEFZRVI8L2I+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17Ym9uLnRvdGFsaHR9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5hYXJlbSA9PT0gJ291aScgJiYgYm9uLnR5cGUgIT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCIgc3R5bGU9e3t0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2Jvbi52cmVtaXNlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIGFsaWduPVwiY2VudGVyXCI+PE51bWJlckZvcm1hdCBudW1iPXtib24udnR2YX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIGFsaWduPVwiY2VudGVyXCI+PE51bWJlckZvcm1hdCBudW1iPXtib24udG90YWx0dGN9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24udHlwZSA9PT0gXCJwc3RcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1ib3JkZXJlZFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7ZmxvYXQ6IFwicmlnaHRcIiwgd2lkdGg6IFwiMzglXCIsIG1hcmdpblRvcDogXCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIHN0eWxlPXt7Zm9udFdlaWdodDogXCI2MDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImJvcmRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3RleHRBbGlnbjogXCJjZW50ZXJcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNmOGY5ZmFcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA+PGI+U09NTUUgUEVSw4dVRTwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwiLCBiYWNrZ3JvdW5kQ29sb3I6IFwiI2Y4ZjlmYVwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgID48Yj5SRVNURSDDgCBQQVlFUjwvYj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIGFsaWduPVwiY2VudGVyXCI+PE51bWJlckZvcm1hdCBudW1iPXtib24ucmVjdX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIGFsaWduPVwiY2VudGVyXCI+PE51bWJlckZvcm1hdCBudW1iPXtib24ucmVzdGV9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9e3tjbGVhcjogXCJib3RoXCJ9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgIT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEFycsOqdMOpIGxlIGJvbiDDoCBsYSBzb21tZVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGU6PGJyLz4ge251bWJlclRvTGV0dGVycyhwYXJzZUludChib24udG90YWx0dGMpLCB7bGFuZzogJ2ZyJ30pfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4+PGI+IHtib24ubW9ubmFpZS5jb2RlfTwvYj48L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvcD5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2Zsb2F0OiBcInJpZ2h0XCIsIHRleHREZWNvcmF0aW9uOiBcInVuZGVybGluZVwifX0+IFNJR05BVFVSRVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQVVUT1JJU8OJRSA8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLnR5cGUgPT09IFwibm9uZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwiLCBtYXJnaW5Ub3A6IFwiNXB4XCJ9fSBjZWxsU3BhY2luZz1cIjBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwibGVmdFwiLCB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIn19PlZJU0FcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQ0hFRiBDSEFOVElFUlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dGV4dEFsaWduOiBcImNlbnRlclwiLCB0ZXh0RGVjb3JhdGlvbjogXCJ1bmRlcmxpbmVcIn19PlZJU0FcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQ0hFRiBEw4lQw5RUXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t0ZXh0QWxpZ246IFwicmlnaHRcIiwgdGV4dERlY29yYXRpb246IFwidW5kZXJsaW5lXCJ9fT5WSVNBXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERJUkVDVElPTlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5jb25kaXRpb25zICE9PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHAgY2xhc3NOYW1lPVwia29wXCIgc3R5bGU9e3sgZmxvYXQ6IFwibGVmdFwiLCBjb2xvcjogXCIjMDAwXCIgfX0+IElORk9STUFUSU9OU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQURESVRJT05ORUxMRVM8L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPXt7Y2xlYXI6IFwiYm90aFwifX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e2NvbG9yOiBcIiMwMDAwMDBcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBib24uY29uZGl0aW9uc319Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb290ZXItc3BhY2VcIj4mbmJzcDs8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb290ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtmb3JtZS5waWVkICE9PSBcImF1Y3VuXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Zm9ybWUudHlwZUZvb3RlciA9PT0gXCJ0ZXh0ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBmb3JtZS5waWVkc2l6ZSArIFwicHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0QWxpZ246IFwiY2VudGVyXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ0xlZnQ6IFwiMWNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZ1JpZ2h0OiBcIjFjbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGZvcm1lLnBpZWR9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2Zvcm1lLnR5cGVGb290ZXIgPT09IFwiaW1hZ2VcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGltZyBzcmM9e2AvZ2FsbGVyeS8ke2Zvcm1lLmZvb3RlckltYWdlfWB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aWR0aDogXCIyMWNtXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtaW5IZWlnaHQ6IGZvcm1lLmZvb3RlckhlaWdodCArIFwiY21cIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYWx0PVwiXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPC9kaXY+XG5cbiAgICAgICAgPC8+XG5cbiAgICApO1xufSk7IiwibGV0IE51bWJlckZvcm1hdDtcbmV4cG9ydCBkZWZhdWx0IE51bWJlckZvcm1hdCA9IChwcm9wcykgPT4ge1xuXG4gICAgY29uc3QgZm9ybWF0TnVtYmVyID0gKG51bSwgcHJlY2lzaW9uLCBzZXBhcmF0b3IpID0+IHtcbiAgICAgICAgbGV0IHBhcnRzO1xuICAgICAgICBudW0gPSBOdW1iZXIobnVtKTtcbiAgICAgICAgbnVtID0gKHR5cGVvZiBwcmVjaXNpb24gIT09ICd1bmRlZmluZWQnID8gbnVtLnRvRml4ZWQocHJlY2lzaW9uKSA6IG51bSkudG9TdHJpbmcoKTtcbiAgICAgICAgcGFydHMgPSBudW0uc3BsaXQoJy4nKTtcbiAgICAgICAgcGFydHNbMF0gPSBwYXJ0c1swXS50b1N0cmluZygpLnJlcGxhY2UoLyhcXGQpKD89KFxcZHszfSkrKD8hXFxkKSkvZywgJyQxJyArIChzZXBhcmF0b3IgfHwgJywnKSk7XG4gICAgICAgIHJldHVybiBwYXJ0cy5qb2luKCcsJyk7XG4gICAgfVxuXG4gICAgcmV0dXJuIChmb3JtYXROdW1iZXIocHJvcHMubnVtYiwyLCAnICcpKTtcblxufTtcblxuIiwiLyoqXG4gKiBqcXVlcnkuc2ltcGxlUGFnaW5hdGlvbi5qc1xuICogQHZlcnNpb246IHYxLjAuMFxuICogQGF1dGhvcjogU2ViYXN0aWFuIE1hcnVsYW5kYSBodHRwOi8vbWFydWxhbmRhLm1lXG4gKiBAc2VlOiBodHRwczovL2dpdGh1Yi5jb20vc21hcnVsYW5kYS9qcXVlcnkuc2ltcGxlUGFnaW5hdGlvblxuICovXG5cbihmdW5jdGlvbigkKSB7XG5cblx0JC5mbi5zaW1wbGVQYWdpbmF0aW9uID0gZnVuY3Rpb24ob3B0aW9ucykge1xuXG5cdFx0Y29uc3QgZGVmYXVsdHMgPSB7XG5cdFx0XHRwZXJQYWdlOiAyMCxcblx0XHRcdGNvbnRhaW5lckNsYXNzOiAnJyxcblx0XHRcdHByZXZpb3VzQnV0dG9uQ2xhc3M6ICcnLFxuXHRcdFx0bmV4dEJ1dHRvbkNsYXNzOiAnJyxcblx0XHRcdHByZXZpb3VzQnV0dG9uVGV4dDogJzwnLFxuXHRcdFx0bmV4dEJ1dHRvblRleHQ6ICc+Jyxcblx0XHRcdGN1cnJlbnRQYWdlOiAxXG5cdFx0fTtcblxuXHRcdGNvbnN0IHNldHRpbmdzID0gJC5leHRlbmQoe30sIGRlZmF1bHRzLCBvcHRpb25zKTtcblxuXHRcdHJldHVybiB0aGlzLmVhY2goZnVuY3Rpb24oKSB7XG5cdFx0XHRjb25zdCAkcm93cyA9ICQob3B0aW9ucywgdGhpcyk7XG5cdFx0XHRjb25zdCBwYWdlcyA9IE1hdGguY2VpbCgkcm93cy5sZW5ndGggLyBzZXR0aW5ncy5wZXJQYWdlKTtcblxuXHRcdFx0Y29uc3QgY29udGFpbmVyID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XG5cdFx0XHRjb25zdCBiUHJldmlvdXMgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdidXR0b24nKTtcblx0XHRcdGNvbnN0IGJOZXh0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnYnV0dG9uJyk7XG5cdFx0XHRjb25zdCBvZiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NwYW4nKTtcblxuXG5cdFx0XHRiUHJldmlvdXMuaW5uZXJIVE1MID0gc2V0dGluZ3MucHJldmlvdXNCdXR0b25UZXh0O1xuXHRcdFx0Yk5leHQuaW5uZXJIVE1MID0gc2V0dGluZ3MubmV4dEJ1dHRvblRleHQ7XG5cblx0XHRcdGNvbnRhaW5lci5jbGFzc05hbWUgPSBzZXR0aW5ncy5jb250YWluZXJDbGFzcztcblx0XHRcdGJQcmV2aW91cy5jbGFzc05hbWUgPSBzZXR0aW5ncy5wcmV2aW91c0J1dHRvbkNsYXNzO1xuXHRcdFx0Yk5leHQuY2xhc3NOYW1lID0gc2V0dGluZ3MubmV4dEJ1dHRvbkNsYXNzO1xuXG5cdFx0XHRiUHJldmlvdXMuc3R5bGUubWFyZ2luUmlnaHQgPSAnOHB4Jztcblx0XHRcdGJQcmV2aW91cy5jbGFzc0xpc3QuYWRkKCdidG4nKTtcblx0XHRcdGJQcmV2aW91cy5jbGFzc0xpc3QuYWRkKCdiZy1ibHVlJyk7XG5cdFx0XHRiUHJldmlvdXMuY2xhc3NMaXN0LmFkZCgnYm9sbzcwMCcpO1xuXHRcdFx0Yk5leHQuc3R5bGUubWFyZ2luTGVmdCA9ICc4cHgnO1xuXHRcdFx0Yk5leHQuY2xhc3NMaXN0LmFkZCgnYnRuJyk7XG5cdFx0XHRiTmV4dC5jbGFzc0xpc3QuYWRkKCdiZy1ibHVlJyk7XG5cdFx0XHRiTmV4dC5jbGFzc0xpc3QuYWRkKCdib2xvNzAwJyk7XG5cdFx0XHRjb250YWluZXIuc3R5bGUudGV4dEFsaWduID0gXCJyaWdodFwiO1xuXHRcdFx0Y29udGFpbmVyLnN0eWxlLm1hcmdpbkJvdHRvbSA9ICcyMHB4JztcblxuXHRcdFx0Y29udGFpbmVyLmFwcGVuZENoaWxkKGJQcmV2aW91cyk7XG5cdFx0XHRjb250YWluZXIuYXBwZW5kQ2hpbGQob2YpO1xuXHRcdFx0Y29udGFpbmVyLmFwcGVuZENoaWxkKGJOZXh0KTtcblxuXHRcdFx0JCh0aGlzKS5hZnRlcihjb250YWluZXIpO1xuXG5cdFx0XHR1cGRhdGUoKTtcblxuXHRcdFx0JChiTmV4dCkuY2xpY2soZnVuY3Rpb24oKSB7XG5cdFx0XHRcdGlmIChzZXR0aW5ncy5jdXJyZW50UGFnZSArIDEgPiBwYWdlcykge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlID0gcGFnZXM7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UrKztcblx0XHRcdFx0fVxuXHRcdFx0XHR1cGRhdGUoKTtcblx0XHRcdH0pO1xuXG5cdFx0XHQkKGJQcmV2aW91cykuY2xpY2soZnVuY3Rpb24oKSB7XG5cdFx0XHRcdGlmIChzZXR0aW5ncy5jdXJyZW50UGFnZSAtIDEgPCAxKSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UgPSAxO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlLS07XG5cdFx0XHRcdH1cblx0XHRcdFx0dXBkYXRlKCk7XG5cdFx0XHR9KTtcblxuXHRcdFx0ZnVuY3Rpb24gdXBkYXRlKCkge1xuXHRcdFx0XHRjb25zdCBmcm9tID0gKChzZXR0aW5ncy5jdXJyZW50UGFnZSAtIDEpICogc2V0dGluZ3MucGVyUGFnZSkgKyAxO1xuXHRcdFx0XHRsZXQgdG8gPSBmcm9tICsgc2V0dGluZ3MucGVyUGFnZSAtIDE7XG5cblx0XHRcdFx0aWYgKHRvID4gJHJvd3MubGVuZ3RoKSB7XG5cdFx0XHRcdFx0dG8gPSAkcm93cy5sZW5ndGg7XG5cdFx0XHRcdH1cblxuXHRcdFx0XHQkcm93cy5oaWRlKCk7XG5cdFx0XHRcdCRyb3dzLnNsaWNlKChmcm9tLTEpLCB0bykuc2hvdygpO1xuXG5cdFx0XHRcdG9mLmlubmVySFRNTCA9IGZyb20gKyAnIMOgICcgKyB0byArICcgc3VyICcgKyAkcm93cy5sZW5ndGggKyAnIGxpZ25lcyc7XG5cblx0XHRcdFx0aWYgKCRyb3dzLmxlbmd0aCA8PSBzZXR0aW5ncy5wZXJQYWdlKSB7XG5cdFx0XHRcdFx0JChjb250YWluZXIpLmhpZGUoKTtcblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHQkKGNvbnRhaW5lcikuc2hvdygpO1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSk7XG5cblx0fVxuXG59KGpRdWVyeSkpO1xuIiwidmFyIG1hcCA9IHtcblx0XCIuL2FmXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hZi5qc1wiLFxuXHRcIi4vYWYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FmLmpzXCIsXG5cdFwiLi9hclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIuanNcIixcblx0XCIuL2FyLWR6XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1kei5qc1wiLFxuXHRcIi4vYXItZHouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWR6LmpzXCIsXG5cdFwiLi9hci1rd1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIta3cuanNcIixcblx0XCIuL2FyLWt3LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1rdy5qc1wiLFxuXHRcIi4vYXItbHlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWx5LmpzXCIsXG5cdFwiLi9hci1seS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbHkuanNcIixcblx0XCIuL2FyLW1hXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1tYS5qc1wiLFxuXHRcIi4vYXItbWEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLW1hLmpzXCIsXG5cdFwiLi9hci1wc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItcHMuanNcIixcblx0XCIuL2FyLXBzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1wcy5qc1wiLFxuXHRcIi4vYXItc2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXNhLmpzXCIsXG5cdFwiLi9hci1zYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItc2EuanNcIixcblx0XCIuL2FyLXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci10bi5qc1wiLFxuXHRcIi4vYXItdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXRuLmpzXCIsXG5cdFwiLi9hci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIuanNcIixcblx0XCIuL2F6XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hei5qc1wiLFxuXHRcIi4vYXouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2F6LmpzXCIsXG5cdFwiLi9iZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmUuanNcIixcblx0XCIuL2JlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZS5qc1wiLFxuXHRcIi4vYmdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JnLmpzXCIsXG5cdFwiLi9iZy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmcuanNcIixcblx0XCIuL2JtXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibS5qc1wiLFxuXHRcIi4vYm0uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JtLmpzXCIsXG5cdFwiLi9iblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4uanNcIixcblx0XCIuL2JuLWJkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi1iZC5qc1wiLFxuXHRcIi4vYm4tYmQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLWJkLmpzXCIsXG5cdFwiLi9ibi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4uanNcIixcblx0XCIuL2JvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iby5qc1wiLFxuXHRcIi4vYm8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JvLmpzXCIsXG5cdFwiLi9iclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnIuanNcIixcblx0XCIuL2JyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ici5qc1wiLFxuXHRcIi4vYnNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JzLmpzXCIsXG5cdFwiLi9icy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnMuanNcIixcblx0XCIuL2NhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jYS5qc1wiLFxuXHRcIi4vY2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NhLmpzXCIsXG5cdFwiLi9jc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3MuanNcIixcblx0XCIuL2NzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jcy5qc1wiLFxuXHRcIi4vY3ZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N2LmpzXCIsXG5cdFwiLi9jdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3YuanNcIixcblx0XCIuL2N5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jeS5qc1wiLFxuXHRcIi4vY3kuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N5LmpzXCIsXG5cdFwiLi9kYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGEuanNcIixcblx0XCIuL2RhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kYS5qc1wiLFxuXHRcIi4vZGVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLmpzXCIsXG5cdFwiLi9kZS1hdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtYXQuanNcIixcblx0XCIuL2RlLWF0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1hdC5qc1wiLFxuXHRcIi4vZGUtY2hcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWNoLmpzXCIsXG5cdFwiLi9kZS1jaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtY2guanNcIixcblx0XCIuL2RlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS5qc1wiLFxuXHRcIi4vZHZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2R2LmpzXCIsXG5cdFwiLi9kdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZHYuanNcIixcblx0XCIuL2VsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbC5qc1wiLFxuXHRcIi4vZWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VsLmpzXCIsXG5cdFwiLi9lbi1hdVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tYXUuanNcIixcblx0XCIuL2VuLWF1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1hdS5qc1wiLFxuXHRcIi4vZW4tY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWNhLmpzXCIsXG5cdFwiLi9lbi1jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tY2EuanNcIixcblx0XCIuL2VuLWdiXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1nYi5qc1wiLFxuXHRcIi4vZW4tZ2IuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWdiLmpzXCIsXG5cdFwiLi9lbi1pZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWUuanNcIixcblx0XCIuL2VuLWllLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pZS5qc1wiLFxuXHRcIi4vZW4taWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWlsLmpzXCIsXG5cdFwiLi9lbi1pbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWwuanNcIixcblx0XCIuL2VuLWluXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbi5qc1wiLFxuXHRcIi4vZW4taW4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWluLmpzXCIsXG5cdFwiLi9lbi1uelwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tbnouanNcIixcblx0XCIuL2VuLW56LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1uei5qc1wiLFxuXHRcIi4vZW4tc2dcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLXNnLmpzXCIsXG5cdFwiLi9lbi1zZy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tc2cuanNcIixcblx0XCIuL2VvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lby5qc1wiLFxuXHRcIi4vZW8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VvLmpzXCIsXG5cdFwiLi9lc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMuanNcIixcblx0XCIuL2VzLWRvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1kby5qc1wiLFxuXHRcIi4vZXMtZG8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLWRvLmpzXCIsXG5cdFwiLi9lcy1teFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtbXguanNcIixcblx0XCIuL2VzLW14LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1teC5qc1wiLFxuXHRcIi4vZXMtdXNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLXVzLmpzXCIsXG5cdFwiLi9lcy11cy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtdXMuanNcIixcblx0XCIuL2VzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy5qc1wiLFxuXHRcIi4vZXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V0LmpzXCIsXG5cdFwiLi9ldC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXQuanNcIixcblx0XCIuL2V1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldS5qc1wiLFxuXHRcIi4vZXUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V1LmpzXCIsXG5cdFwiLi9mYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmEuanNcIixcblx0XCIuL2ZhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mYS5qc1wiLFxuXHRcIi4vZmlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpLmpzXCIsXG5cdFwiLi9maS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmkuanNcIixcblx0XCIuL2ZpbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmlsLmpzXCIsXG5cdFwiLi9maWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpbC5qc1wiLFxuXHRcIi4vZm9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZvLmpzXCIsXG5cdFwiLi9mby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZm8uanNcIixcblx0XCIuL2ZyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci5qc1wiLFxuXHRcIi4vZnItY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNhLmpzXCIsXG5cdFwiLi9mci1jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2EuanNcIixcblx0XCIuL2ZyLWNoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jaC5qc1wiLFxuXHRcIi4vZnItY2guanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNoLmpzXCIsXG5cdFwiLi9mci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnIuanNcIixcblx0XCIuL2Z5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9meS5qc1wiLFxuXHRcIi4vZnkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2Z5LmpzXCIsXG5cdFwiLi9nYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2EuanNcIixcblx0XCIuL2dhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nYS5qc1wiLFxuXHRcIi4vZ2RcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dkLmpzXCIsXG5cdFwiLi9nZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2QuanNcIixcblx0XCIuL2dsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nbC5qc1wiLFxuXHRcIi4vZ2wuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dsLmpzXCIsXG5cdFwiLi9nb20tZGV2YVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWRldmEuanNcIixcblx0XCIuL2dvbS1kZXZhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tZGV2YS5qc1wiLFxuXHRcIi4vZ29tLWxhdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1sYXRuLmpzXCIsXG5cdFwiLi9nb20tbGF0bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWxhdG4uanNcIixcblx0XCIuL2d1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ndS5qc1wiLFxuXHRcIi4vZ3UuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2d1LmpzXCIsXG5cdFwiLi9oZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGUuanNcIixcblx0XCIuL2hlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oZS5qc1wiLFxuXHRcIi4vaGlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hpLmpzXCIsXG5cdFwiLi9oaS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGkuanNcIixcblx0XCIuL2hyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oci5qc1wiLFxuXHRcIi4vaHIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hyLmpzXCIsXG5cdFwiLi9odVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHUuanNcIixcblx0XCIuL2h1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9odS5qc1wiLFxuXHRcIi4vaHktYW1cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h5LWFtLmpzXCIsXG5cdFwiLi9oeS1hbS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHktYW0uanNcIixcblx0XCIuL2lkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pZC5qc1wiLFxuXHRcIi4vaWQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lkLmpzXCIsXG5cdFwiLi9pc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXMuanNcIixcblx0XCIuL2lzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pcy5qc1wiLFxuXHRcIi4vaXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LmpzXCIsXG5cdFwiLi9pdC1jaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQtY2guanNcIixcblx0XCIuL2l0LWNoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC1jaC5qc1wiLFxuXHRcIi4vaXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LmpzXCIsXG5cdFwiLi9qYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvamEuanNcIixcblx0XCIuL2phLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qYS5qc1wiLFxuXHRcIi4vanZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2p2LmpzXCIsXG5cdFwiLi9qdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvanYuanNcIixcblx0XCIuL2thXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rYS5qc1wiLFxuXHRcIi4va2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2thLmpzXCIsXG5cdFwiLi9ra1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2suanNcIixcblx0XCIuL2trLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ray5qc1wiLFxuXHRcIi4va21cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ttLmpzXCIsXG5cdFwiLi9rbS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva20uanNcIixcblx0XCIuL2tuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbi5qc1wiLFxuXHRcIi4va24uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tuLmpzXCIsXG5cdFwiLi9rb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva28uanNcIixcblx0XCIuL2tvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rby5qc1wiLFxuXHRcIi4va3VcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LmpzXCIsXG5cdFwiLi9rdS1rbXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LWttci5qc1wiLFxuXHRcIi4va3Uta21yLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS1rbXIuanNcIixcblx0XCIuL2t1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS5qc1wiLFxuXHRcIi4va3lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t5LmpzXCIsXG5cdFwiLi9reS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3kuanNcIixcblx0XCIuL2xiXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sYi5qc1wiLFxuXHRcIi4vbGIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xiLmpzXCIsXG5cdFwiLi9sb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbG8uanNcIixcblx0XCIuL2xvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sby5qc1wiLFxuXHRcIi4vbHRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x0LmpzXCIsXG5cdFwiLi9sdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHQuanNcIixcblx0XCIuL2x2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdi5qc1wiLFxuXHRcIi4vbHYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x2LmpzXCIsXG5cdFwiLi9tZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWUuanNcIixcblx0XCIuL21lLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tZS5qc1wiLFxuXHRcIi4vbWlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21pLmpzXCIsXG5cdFwiLi9taS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWkuanNcIixcblx0XCIuL21rXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tay5qc1wiLFxuXHRcIi4vbWsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21rLmpzXCIsXG5cdFwiLi9tbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWwuanNcIixcblx0XCIuL21sLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbC5qc1wiLFxuXHRcIi4vbW5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21uLmpzXCIsXG5cdFwiLi9tbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbW4uanNcIixcblx0XCIuL21yXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tci5qc1wiLFxuXHRcIi4vbXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21yLmpzXCIsXG5cdFwiLi9tc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMuanNcIixcblx0XCIuL21zLW15XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy1teS5qc1wiLFxuXHRcIi4vbXMtbXkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLW15LmpzXCIsXG5cdFwiLi9tcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMuanNcIixcblx0XCIuL210XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tdC5qc1wiLFxuXHRcIi4vbXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL210LmpzXCIsXG5cdFwiLi9teVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXkuanNcIixcblx0XCIuL215LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9teS5qc1wiLFxuXHRcIi4vbmJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25iLmpzXCIsXG5cdFwiLi9uYi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmIuanNcIixcblx0XCIuL25lXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uZS5qc1wiLFxuXHRcIi4vbmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25lLmpzXCIsXG5cdFwiLi9ubFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwuanNcIixcblx0XCIuL25sLWJlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC1iZS5qc1wiLFxuXHRcIi4vbmwtYmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLWJlLmpzXCIsXG5cdFwiLi9ubC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwuanNcIixcblx0XCIuL25uXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubi5qc1wiLFxuXHRcIi4vbm4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25uLmpzXCIsXG5cdFwiLi9vYy1sbmNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL29jLWxuYy5qc1wiLFxuXHRcIi4vb2MtbG5jLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9vYy1sbmMuanNcIixcblx0XCIuL3BhLWluXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wYS1pbi5qc1wiLFxuXHRcIi4vcGEtaW4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BhLWluLmpzXCIsXG5cdFwiLi9wbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGwuanNcIixcblx0XCIuL3BsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wbC5qc1wiLFxuXHRcIi4vcHRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LmpzXCIsXG5cdFwiLi9wdC1iclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQtYnIuanNcIixcblx0XCIuL3B0LWJyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC1ici5qc1wiLFxuXHRcIi4vcHQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LmpzXCIsXG5cdFwiLi9yb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcm8uanNcIixcblx0XCIuL3JvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9yby5qc1wiLFxuXHRcIi4vcnVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3J1LmpzXCIsXG5cdFwiLi9ydS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcnUuanNcIixcblx0XCIuL3NkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZC5qc1wiLFxuXHRcIi4vc2QuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NkLmpzXCIsXG5cdFwiLi9zZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2UuanNcIixcblx0XCIuL3NlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZS5qc1wiLFxuXHRcIi4vc2lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NpLmpzXCIsXG5cdFwiLi9zaS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2kuanNcIixcblx0XCIuL3NrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zay5qc1wiLFxuXHRcIi4vc2suanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NrLmpzXCIsXG5cdFwiLi9zbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2wuanNcIixcblx0XCIuL3NsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zbC5qc1wiLFxuXHRcIi4vc3FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NxLmpzXCIsXG5cdFwiLi9zcS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3EuanNcIixcblx0XCIuL3NyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci5qc1wiLFxuXHRcIi4vc3ItY3lybFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3ItY3lybC5qc1wiLFxuXHRcIi4vc3ItY3lybC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3ItY3lybC5qc1wiLFxuXHRcIi4vc3IuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLmpzXCIsXG5cdFwiLi9zc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3MuanNcIixcblx0XCIuL3NzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcy5qc1wiLFxuXHRcIi4vc3ZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N2LmpzXCIsXG5cdFwiLi9zdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3YuanNcIixcblx0XCIuL3N3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdy5qc1wiLFxuXHRcIi4vc3cuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N3LmpzXCIsXG5cdFwiLi90YVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGEuanNcIixcblx0XCIuL3RhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90YS5qc1wiLFxuXHRcIi4vdGVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RlLmpzXCIsXG5cdFwiLi90ZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGUuanNcIixcblx0XCIuL3RldFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGV0LmpzXCIsXG5cdFwiLi90ZXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RldC5qc1wiLFxuXHRcIi4vdGdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RnLmpzXCIsXG5cdFwiLi90Zy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGcuanNcIixcblx0XCIuL3RoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90aC5qc1wiLFxuXHRcIi4vdGguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RoLmpzXCIsXG5cdFwiLi90a1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGsuanNcIixcblx0XCIuL3RrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ay5qc1wiLFxuXHRcIi4vdGwtcGhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsLXBoLmpzXCIsXG5cdFwiLi90bC1waC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGwtcGguanNcIixcblx0XCIuL3RsaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGxoLmpzXCIsXG5cdFwiLi90bGguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsaC5qc1wiLFxuXHRcIi4vdHJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RyLmpzXCIsXG5cdFwiLi90ci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHIuanNcIixcblx0XCIuL3R6bFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHpsLmpzXCIsXG5cdFwiLi90emwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bC5qc1wiLFxuXHRcIi4vdHptXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0uanNcIixcblx0XCIuL3R6bS1sYXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0tbGF0bi5qc1wiLFxuXHRcIi4vdHptLWxhdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS1sYXRuLmpzXCIsXG5cdFwiLi90em0uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS5qc1wiLFxuXHRcIi4vdWctY25cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VnLWNuLmpzXCIsXG5cdFwiLi91Zy1jbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWctY24uanNcIixcblx0XCIuL3VrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ay5qc1wiLFxuXHRcIi4vdWsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VrLmpzXCIsXG5cdFwiLi91clwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXIuanNcIixcblx0XCIuL3VyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ci5qc1wiLFxuXHRcIi4vdXpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LmpzXCIsXG5cdFwiLi91ei1sYXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei1sYXRuLmpzXCIsXG5cdFwiLi91ei1sYXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei1sYXRuLmpzXCIsXG5cdFwiLi91ei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXouanNcIixcblx0XCIuL3ZpXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS92aS5qc1wiLFxuXHRcIi4vdmkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3ZpLmpzXCIsXG5cdFwiLi94LXBzZXVkb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveC1wc2V1ZG8uanNcIixcblx0XCIuL3gtcHNldWRvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS94LXBzZXVkby5qc1wiLFxuXHRcIi4veW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3lvLmpzXCIsXG5cdFwiLi95by5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveW8uanNcIixcblx0XCIuL3poLWNuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1jbi5qc1wiLFxuXHRcIi4vemgtY24uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWNuLmpzXCIsXG5cdFwiLi96aC1oa1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtaGsuanNcIixcblx0XCIuL3poLWhrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1oay5qc1wiLFxuXHRcIi4vemgtbW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLW1vLmpzXCIsXG5cdFwiLi96aC1tby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtbW8uanNcIixcblx0XCIuL3poLXR3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC10dy5qc1wiLFxuXHRcIi4vemgtdHcuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLXR3LmpzXCJcbn07XG5cblxuZnVuY3Rpb24gd2VicGFja0NvbnRleHQocmVxKSB7XG5cdHZhciBpZCA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpO1xuXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhpZCk7XG59XG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKSB7XG5cdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8obWFwLCByZXEpKSB7XG5cdFx0dmFyIGUgPSBuZXcgRXJyb3IoXCJDYW5ub3QgZmluZCBtb2R1bGUgJ1wiICsgcmVxICsgXCInXCIpO1xuXHRcdGUuY29kZSA9ICdNT0RVTEVfTk9UX0ZPVU5EJztcblx0XHR0aHJvdyBlO1xuXHR9XG5cdHJldHVybiBtYXBbcmVxXTtcbn1cbndlYnBhY2tDb250ZXh0LmtleXMgPSBmdW5jdGlvbiB3ZWJwYWNrQ29udGV4dEtleXMoKSB7XG5cdHJldHVybiBPYmplY3Qua2V5cyhtYXApO1xufTtcbndlYnBhY2tDb250ZXh0LnJlc29sdmUgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmU7XG5tb2R1bGUuZXhwb3J0cyA9IHdlYnBhY2tDb250ZXh0O1xud2VicGFja0NvbnRleHQuaWQgPSBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUgc3luYyByZWN1cnNpdmUgXlxcXFwuXFxcXC8uKiRcIjsiXSwibmFtZXMiOlsiUmVhY3QiLCJ1c2VFZmZlY3QiLCJ1c2VSZWYiLCJ1c2VTdGF0ZSIsInVzZVJlYWN0VG9QcmludCIsIlByaW50Q29tbWFuZGUiLCJOdW1iZXJGb3JtYXQiLCJFZGl0VGV4dCIsImRldmljZVR5cGUiLCJheGlvcyIsIiQiLCJSZWFjdEhUTUxUYWJsZVRvRXhjZWwiLCJjcmVhdGVSb290IiwiTW9tZW50IiwiQ29tbWFuZGUiLCJsb2FkaW5nIiwic2V0TG9hZGluZyIsImJvbiIsInNldEJvbiIsImxpZ25lcyIsInNldExpZ25lcyIsImdyb3VwZXMiLCJzZXRHcm91cGVzIiwiZm9ybWUiLCJzZXRmb3JtZSIsImZvcm1lcyIsInNldGZvcm1lcyIsImZldGNoQm9uIiwiYmJvbiIsIkpTT04iLCJwYXJzZSIsInZhbCIsInByZXBhcmF0aW9uIiwic2V0U3VpdmkiLCJyZW5kZXJMaWduZSIsInJlbmRlckNhaXNzZSIsInJlbmRlckdyb3VwZSIsInJlbmRlckdyb3VwZU1vYmlsZSIsInJlbmRlckxpZ25lTW9iaWxlIiwibnVtYmVyVG9MZXR0ZXJzIiwicmVxdWlyZSIsImNvbXBvbmVudFJlZiIsImhhbmRsZVByaW50IiwiY29udGVudCIsImN1cnJlbnQiLCJoYW5kbGVQcmludGUiLCJvbkJlZm9yZUdldENvbnRlbnQiLCJhZGRDbGFzcyIsIm9uQWZ0ZXJQcmludCIsInJlbW92ZUNsYXNzIiwicGRmQm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwiY3NzIiwid2luZG93IiwibG9jYXRpb24iLCJocmVmIiwiaWQiLCJmb3JtYXROdW1iZXIiLCJudW0iLCJwcmVjaXNpb24iLCJzZXBhcmF0b3IiLCJwYXJ0cyIsIk51bWJlciIsInRvRml4ZWQiLCJ0b1N0cmluZyIsInNwbGl0IiwicmVwbGFjZSIsImpvaW4iLCJkdXBsaXF1ZXJCb24iLCJtb2RhbCIsImNsaWNrIiwibWV0aG9kIiwidXJsIiwidGhlbiIsInJlc3BvbnNlIiwiZGF0YSIsImNoYW50aWVyIiwiZXJyb3IiLCJzYXZlUmVtaXNlIiwicmVzcCIsInZhbHVlIiwiaXNOYU4iLCJuYW1lIiwicmVsb2FkIiwic2F2ZVB1Iiwic2F2ZVF0ZSIsInNhdmVVbml0ZSIsImJpYm9uIiwiZGVsZXRlTGlnbmUiLCJkZWxpZCIsImNvbnRlbnRUeXBlIiwiZGF0YVR5cGUiLCJkZWxldGVHcm91cGUiLCJkZWxCb24iLCJyZXN0YXVyZUJvbiIsInZhbGlkZUJvbiIsImRldmFsaWRlQm9uIiwib2ZmIiwib24iLCJldmVudCIsImNsb3Nlc3QiLCJ2YWxpZCIsImhpZGUiLCJDS0VESVRPUiIsImluc3RhbmNlcyIsImdldERhdGEiLCJzdHJpbmdpZnkiLCJzZXJpYWxpemVPYmplY3QiLCJzaG93IiwicmVzZXQiLCJhamF4IiwidHlwZSIsInN1Y2Nlc3MiLCJyZXNwZGF0YSIsInRleHRTdGF0dXMiLCJqcVhIUiIsInhociIsInRleHQiLCJpZGNoYW4iLCJpZHNvbGRlIiwiaWRsaWduZSIsImlkZ3JvdXBlIiwiZ3JvdXBlIiwiRm9ybURhdGEiLCJwcm9jZXNzRGF0YSIsImNhY2hlIiwic2h1cGVyIiwic2h1cGVyZSIsInNodXBlcmciLCJzaHVwZXJlZyIsImVhY2giLCIkc2VsZGV2aXMiLCJodG1sIiwiZW1wdHkiLCJhcHBlbmQiLCJtYXAiLCJkZSIsImdyb3VwIiwiaWRkZXZpcyIsImFwcGVuZFRvIiwiJHNlbGRldSIsIiRzZWRldmlzIiwiJHNlbGRldnMiLCJzdCIsInBvcGciLCJvcGciLCJldGF0IiwicmVuZGVyTGlnbmVHcm91cGUiLCJsaWduZSIsIm9wcCIsImFhcmVtIiwicHUiLCJxdWFudGl0ZSIsInJlbWlzZSIsInBvcHAiLCJkZXNpZ25hdGlvbiIsImFhcmVmIiwid2hpdGVTcGFjZSIsIl9faHRtbCIsInJlZmVyZW5jZSIsInVuaXRlIiwibGl2cmUiLCJyZXN0ZSIsInByZXZ1IiwicmVuZGVyTGlnbmVHcm91cGVNb2JpbGUiLCJsZW5ndGgiLCJ3aWR0aCIsIm1hcmdpblRvcCIsImZvbnRTaXplIiwibGlnbiIsImhlaWdodCIsInBhcnNlRmxvYXQiLCJsaXZyZXIiLCJwb3AiLCJvcCIsImNhaXNzZXMiLCJjYWlzIiwiZGF0ZSIsIm51bWNhaXNzZSIsIm1vbnRhbnQiLCJzaGFzaGEiLCJhIiwibWFyZ2luVG8iLCJ0ZXh0QWxpZ24iLCJwYWRkaW5nIiwiY2xpZW50Iiwibm9tY2xpZW50IiwidG9VcHBlckNhc2UiLCJub21jaGFudGllciIsIm51bWJvbiIsImRldmlzIiwiY29yYmVpbGxlIiwiaW5kZXgiLCJ1c2VkIiwiaW50aXR1bGVyIiwiYmFja2dyb3VuZENvbG9yIiwibGVmdCIsInBvc2l0aW9uIiwidG90YWxodCIsInZyZW1pc2UiLCJ0dmEiLCJ2dHZhIiwidG90YWx0dGMiLCJjbGVhciIsInBhcnNlSW50IiwibGFuZyIsIm1vbm5haWUiLCJjb2RlIiwiY29uZGl0aW9ucyIsImNvbG9yIiwiY29udGFpbmVyIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInJvb3QiLCJyZW5kZXIiLCJmb3J3YXJkUmVmIiwicHJvcHMiLCJyZWYiLCJib25kYXRlIiwiY2MiLCJjYWlzcyIsIm1pbkhlaWdodCIsImJveFNoYWRvdyIsImhlYWRlcldpdGgiLCJoZWFkZXJIZWlnaHQiLCJ0eXBlRW50ZXRlIiwibGluayIsInRldGVIIiwidGV0ZVkiLCJwYWRkaW5nUmlnaHQiLCJ0ZXRlREQiLCJwYWRkaW5nTGVmdCIsInRldGVERyIsInBhZGRpbmdUb3AiLCJ0ZXRlREgiLCJwYWRkaW5nQm90dG9tIiwidGV0ZURCIiwiaGVhZGVyVGV4dCIsIm1hcmdpbkJvdHRvbSIsImJvcmRlciIsImxpbmVIZWlnaHQiLCJhZHJlc3NlIiwiZm9udFdlaWdodCIsImZvdXJuaXNzZXVyIiwidGV4dERlY29yYXRpb24iLCJib25yZWZlcmVuY2UiLCJtYXhXaWR0aCIsInJlY3UiLCJ0eXBlRm9vdGVyIiwicGllZHNpemUiLCJwaWVkIiwiZm9vdGVySW1hZ2UiLCJmb290ZXJIZWlnaHQiLCJkaXNwbGF5IiwibnVtYiIsImZuIiwic2ltcGxlUGFnaW5hdGlvbiIsIm9wdGlvbnMiLCJkZWZhdWx0cyIsInBlclBhZ2UiLCJjb250YWluZXJDbGFzcyIsInByZXZpb3VzQnV0dG9uQ2xhc3MiLCJuZXh0QnV0dG9uQ2xhc3MiLCJwcmV2aW91c0J1dHRvblRleHQiLCJuZXh0QnV0dG9uVGV4dCIsImN1cnJlbnRQYWdlIiwic2V0dGluZ3MiLCJleHRlbmQiLCIkcm93cyIsInBhZ2VzIiwiTWF0aCIsImNlaWwiLCJjcmVhdGVFbGVtZW50IiwiYlByZXZpb3VzIiwiYk5leHQiLCJvZiIsImlubmVySFRNTCIsImNsYXNzTmFtZSIsInN0eWxlIiwibWFyZ2luUmlnaHQiLCJjbGFzc0xpc3QiLCJhZGQiLCJtYXJnaW5MZWZ0IiwiYXBwZW5kQ2hpbGQiLCJhZnRlciIsInVwZGF0ZSIsImZyb20iLCJ0byIsInNsaWNlIiwialF1ZXJ5Il0sInNvdXJjZVJvb3QiOiIifQ==