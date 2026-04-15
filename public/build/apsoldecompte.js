(self["webpackChunk"] = self["webpackChunk"] || []).push([["apsoldecompte"],{

/***/ "./assets/apsoldecompte.js":
/*!*********************************!*\
  !*** ./assets/apsoldecompte.js ***!
  \*********************************/
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
/* harmony import */ var _components_chantiers_SoldeCompte_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./components/chantiers/SoldeCompte.js */ "./assets/components/chantiers/SoldeCompte.js");















/***/ }),

/***/ "./assets/components/chantiers/SoldeCompte.js":
/*!****************************************************!*\
  !*** ./assets/components/chantiers/SoldeCompte.js ***!
  \****************************************************/
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
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.parse-float.js */ "./node_modules/core-js/modules/es.parse-float.js");
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_esnext_string_replace_all_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/esnext.string.replace-all.js */ "./node_modules/core-js/modules/esnext.string.replace-all.js");
/* harmony import */ var core_js_modules_esnext_string_replace_all_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_string_replace_all_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/es.symbol.async-iterator.js */ "./node_modules/core-js/modules/es.symbol.async-iterator.js");
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/es.symbol.to-string-tag.js */ "./node_modules/core-js/modules/es.symbol.to-string-tag.js");
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! core-js/modules/es.json.to-string-tag.js */ "./node_modules/core-js/modules/es.json.to-string-tag.js");
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_28__);
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! core-js/modules/es.math.to-string-tag.js */ "./node_modules/core-js/modules/es.math.to-string-tag.js");
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_29___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_29__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_30___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_30__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_31___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_31__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_32___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_32__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_33___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_33__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_34__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_34___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_34__);
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_35__ = __webpack_require__(/*! core-js/modules/es.array.reverse.js */ "./node_modules/core-js/modules/es.array.reverse.js");
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_35___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_35__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_36__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_36___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_36__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_37__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_38__ = __webpack_require__(/*! react-html-table-to-excel */ "./node_modules/react-html-table-to-excel/index.js");
/* harmony import */ var _fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__ = __webpack_require__(/*! ../../fonctions/NumberFormat */ "./assets/fonctions/NumberFormat.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_40__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_40___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_40__);
/* harmony import */ var moment_moment__WEBPACK_IMPORTED_MODULE_41__ = __webpack_require__(/*! moment/moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment_moment__WEBPACK_IMPORTED_MODULE_41___default = /*#__PURE__*/__webpack_require__.n(moment_moment__WEBPACK_IMPORTED_MODULE_41__);
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_42__ = __webpack_require__(/*! react-moment */ "./node_modules/react-moment/dist/index.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_42___default = /*#__PURE__*/__webpack_require__.n(react_moment__WEBPACK_IMPORTED_MODULE_42__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_43__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
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








var SoldeCompte = function SoldeCompte() {
  var sumRegle = jquery__WEBPACK_IMPORTED_MODULE_40___default()("#sumRegle").val();
  var sumDepense = jquery__WEBPACK_IMPORTED_MODULE_40___default()("#sumDepense").val();
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_36__.useState)([]),
    _useState2 = _slicedToArray(_useState, 2),
    caissin = _useState2[0],
    setCaissin = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_36__.useState)([]),
    _useState4 = _slicedToArray(_useState3, 2),
    caisschan = _useState4[0],
    setCaissChantiers = _useState4[1];
  var _useState5 = (0,react__WEBPACK_IMPORTED_MODULE_36__.useState)([]),
    _useState6 = _slicedToArray(_useState5, 2),
    caissperso = _useState6[0],
    setCaissPerso = _useState6[1];
  var _useState7 = (0,react__WEBPACK_IMPORTED_MODULE_36__.useState)([]),
    _useState8 = _slicedToArray(_useState7, 2),
    reglements = _useState8[0],
    setReglements = _useState8[1];
  var _useState9 = (0,react__WEBPACK_IMPORTED_MODULE_36__.useState)(0),
    _useState10 = _slicedToArray(_useState9, 2),
    frmoisinterne = _useState10[0],
    setfrmoisinterne = _useState10[1];
  var _useState11 = (0,react__WEBPACK_IMPORTED_MODULE_36__.useState)(0),
    _useState12 = _slicedToArray(_useState11, 2),
    frmoischantiers = _useState12[0],
    setfrmoischantiers = _useState12[1];
  var _useState13 = (0,react__WEBPACK_IMPORTED_MODULE_36__.useState)(0),
    _useState14 = _slicedToArray(_useState13, 2),
    frmoisperso = _useState14[0],
    setfrmoisperso = _useState14[1];
  var _useState15 = (0,react__WEBPACK_IMPORTED_MODULE_36__.useState)(0),
    _useState16 = _slicedToArray(_useState15, 2),
    frmoisregle = _useState16[0],
    setfrmoisregle = _useState16[1];
  var _useState17 = (0,react__WEBPACK_IMPORTED_MODULE_36__.useState)(0),
    _useState18 = _slicedToArray(_useState17, 2),
    frdeppresta = _useState18[0],
    setdeppresta = _useState18[1];
  var fetchCaisseInterne = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      var dede;
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            dede = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#caisseinterne').val());
            setCaissin(dede);
          case 2:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function fetchCaisseInterne() {
      return _ref.apply(this, arguments);
    };
  }();
  var fetchCaissePerso = /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      var dedo;
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            dedo = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#caisseperso').val());
            setCaissPerso(dedo);
          case 2:
          case "end":
            return _context2.stop();
        }
      }, _callee2);
    }));
    return function fetchCaissePerso() {
      return _ref2.apply(this, arguments);
    };
  }();
  var fetchCaisseChantiers = /*#__PURE__*/function () {
    var _ref3 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
      var dedi;
      return _regeneratorRuntime().wrap(function _callee3$(_context3) {
        while (1) switch (_context3.prev = _context3.next) {
          case 0:
            dedi = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#caissechantiers').val());
            setCaissChantiers(dedi);
          case 2:
          case "end":
            return _context3.stop();
        }
      }, _callee3);
    }));
    return function fetchCaisseChantiers() {
      return _ref3.apply(this, arguments);
    };
  }();
  var fetchReglements = /*#__PURE__*/function () {
    var _ref4 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4() {
      var deda;
      return _regeneratorRuntime().wrap(function _callee4$(_context4) {
        while (1) switch (_context4.prev = _context4.next) {
          case 0:
            deda = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#reglements').val());
            setReglements(deda);
          case 2:
          case "end":
            return _context4.stop();
        }
      }, _callee4);
    }));
    return function fetchReglements() {
      return _ref4.apply(this, arguments);
    };
  }();
  var formatNumber = function formatNumber(num, precision, separator) {
    var parts;
    num = Number(num);
    num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
    parts = num.split('.');
    parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + separator);
    return parts.join(',');
  };
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#getDepensesInternes").off().on("change", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee5() {
    var bivcount, dew, ss;
    return _regeneratorRuntime().wrap(function _callee5$(_context5) {
      while (1) switch (_context5.prev = _context5.next) {
        case 0:
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#bonMoisInterne tbody').children().remove();
          bivcount = 0;
          dew = jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).val();
          ss = 0;
          caissin.map(function (caiss) {
            if (caiss.etat === "valide") {
              var dez = moment_moment__WEBPACK_IMPORTED_MODULE_41__(caiss.date).format('MM-YYYY');
              if (dew === dez) {
                ss = ss + caiss.montant;
              }
            }
          });
          setfrmoisinterne(ss);
          caissin.map(function (caiss) {
            if (caiss.etat === "valide") {
              var dez = moment_moment__WEBPACK_IMPORTED_MODULE_41__(caiss.date).format('MM-YYYY');
              if (dew === dez) {
                bivcount = bivcount + 1;
                var pok = '';
                if (caiss.personnel !== null) {
                  pok = caiss.personnel.noms.toUpperCase();
                }
                jquery__WEBPACK_IMPORTED_MODULE_40___default()('#bonMoisInterne tbody').append('' + '<tr key={caiss.id} class="paginate12">' + '<td align="center" class="mw30"><input class="form-check-input" type="checkbox" value={caiss.id} name="checkChaIntMois" id="checkChaIntMois"/></td>' + '<td class="text-center"><a href="#"><i class="fa fa-eye col-green" aria-hidden="true"></i></a></td>' + ' <td><Moment format="DD/MM/YYYY">' + moment_moment__WEBPACK_IMPORTED_MODULE_41__(caiss.date).locale("fr").format('L') + '</Moment></td>' + '<td> <a href="/crm/caisse/' + caiss.id + '/' + caiss.chantier.id + '">' + '<span class="badge badge-pill badge-primary m-r-5">V</span>' + caiss.numcaisse + '</a></td>' + '<td>' + pok + '<br/>' + caiss.caissereference + '</td>' + '<td class="text-right">' + formatNumber(caiss.montant, 2, ' ') + '</td>' + '<td class="text-left pri bolo600">' + caiss.dobyuser.nom.toUpperCase() + ' ' + caiss.dobyuser.prenoms.toUpperCase() + '</td>' + '</tr>');
              }
            }
          });
        case 7:
        case "end":
          return _context5.stop();
      }
    }, _callee5, this);
  })));
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#getDepFour").off().on("change", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee6() {
    var chcount, dewn, sss;
    return _regeneratorRuntime().wrap(function _callee6$(_context6) {
      while (1) switch (_context6.prev = _context6.next) {
        case 0:
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#depfour tbody').children().remove();
          chcount = 0;
          dewn = jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).val();
          sss = 0;
          caisschan.map(function (caissu) {
            var dezz = moment_moment__WEBPACK_IMPORTED_MODULE_41__(caissu.date).format('MM-YYYY');
            if (dewn === dezz) {
              sss = sss + caissu.montant;
            }
          });
          setfrmoischantiers(sss);
          caisschan.map(function (caissu) {
            var dezz = moment_moment__WEBPACK_IMPORTED_MODULE_41__(caissu.date).format('MM-YYYY');
            if (dewn === dezz) {
              chcount = chcount + 1;
              var pokk = '';
              if (caissu.bon !== null) {
                pokk = caissu.bon.fournisseur.fournisseur.toUpperCase();
              }
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#depfour tbody').append('' + '<tr key={caissu.id} class="paginate13">' + '<td align="center" class="mw30"><input class="form-check-input" type="checkbox" value={caissu.id} name="checkChanMois" id="checkChanMois"/></td>' + '<td class="text-center"><a href="#"><i class="fa fa-eye col-green" aria-hidden="true"></i></a></td>' + ' <td><Moment format="DD/MM/YYYY">' + moment_moment__WEBPACK_IMPORTED_MODULE_41__(caissu.date).locale("fr").format('L') + '</Moment></td>' + '<td> <a href={`/crm/caisse/${caissu.id}/${caissu.chantier.id}`}>' + '<span class="badge badge-pill badge-primary m-r-5">V</span>' + caissu.numcaisse + '</a></td>' + '<td><span class="col-pink bolo700">' + pokk + '</span><br/>' + caissu.caissereference + '(<b>' + caissu.client.nomclient + ' ' + caissu.chantier.nomchantier + '</b>)</td>' + '<td class="text-right">' + formatNumber(caissu.montant, 2, ' ') + '</td>' + '<td class="text-left pri bolo600">' + caissu.dobyuser.nom.toUpperCase() + ' ' + caissu.dobyuser.prenoms.toUpperCase() + '</td>' + '</tr>');
            }
          });
        case 7:
        case "end":
          return _context6.stop();
      }
    }, _callee6, this);
  })));
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#getDepPresta").off().on("change", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee7() {
    var chcount, dewn, sss;
    return _regeneratorRuntime().wrap(function _callee7$(_context7) {
      while (1) switch (_context7.prev = _context7.next) {
        case 0:
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#deppresta tbody').children().remove();
          chcount = 0;
          dewn = jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).val();
          sss = 0;
          caisschan.map(function (caissu) {
            var dezz = moment_moment__WEBPACK_IMPORTED_MODULE_41__(caissu.date).format('MM-YYYY');
            if (dewn === dezz) {
              if (caissu.bon !== null && caissu.etat === "valide") {
                if (caissu.bon.fournisseur.type === 3) {
                  sss = sss + caissu.montant;
                }
              }
            }
          });
          setdeppresta(sss);
          caisschan.map(function (caissu) {
            var dezz = moment_moment__WEBPACK_IMPORTED_MODULE_41__(caissu.date).format('MM-YYYY');
            if (dewn === dezz) {
              chcount = chcount + 1;
              var pokk = '';
              if (caissu.bon !== null && caissu.etat === "valide") {
                if (caissu.bon.fournisseur.type === 3) {
                  pokk = caissu.bon.fournisseur.fournisseur.toUpperCase();
                  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#deppresta tbody').append('' + '<tr key={caissu.id} class="paginateDepPresta">' + '<td align="center" class="mw30"><input class="form-check-input" type="checkbox" value=' + caissu.id + ' name="checkpresta" id="checkpresta"/></td>' + '<td class="text-center"><a href="#"><i class="fa fa-eye col-green" aria-hidden="true"></i></a></td>' + ' <td><Moment format="DD/MM/YYYY">' + moment_moment__WEBPACK_IMPORTED_MODULE_41__(caissu.date).locale("fr").format('L') + '</Moment></td>' + '<td> <a href=/crm/caisse/' + caissu.id + '/' + caissu.chantier.id + '>' + '<span class="badge badge-pill badge-primary m-r-5">V</span>' + caissu.numcaisse + '</a></td>' + '<td><span class="col-pink bolo700">' + pokk + '</span><br/>' + caissu.caissereference + '(<b>' + caissu.client.nomclient + ' ' + caissu.chantier.nomchantier + '</b>)</td>' + '<td class="text-right">' + formatNumber(caissu.montant, 2, ' ') + '</td>' + '<td class="text-left pri bolo600">' + caissu.dobyuser.nom.toUpperCase() + ' ' + caissu.dobyuser.prenoms.toUpperCase() + '</td>' + '</tr>');
                }
              }
            }
          });
        case 7:
        case "end":
          return _context7.stop();
      }
    }, _callee7, this);
  })));
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#getDepensesPersonnel").off().on("change", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee8() {
    var chpercount, deen, sas;
    return _regeneratorRuntime().wrap(function _callee8$(_context8) {
      while (1) switch (_context8.prev = _context8.next) {
        case 0:
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#chargepersonnel tbody').children().remove();
          chpercount = 0;
          deen = jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).val();
          sas = 0;
          caissperso.map(function (caise) {
            var dazz = moment_moment__WEBPACK_IMPORTED_MODULE_41__(caise.date).format('MM-YYYY');
            if (deen === dazz) {
              sas = sas + caise.montant;
            }
          });
          setfrmoisperso(sas);
          caissperso.map(function (caise) {
            var dazz = moment_moment__WEBPACK_IMPORTED_MODULE_41__(caise.date).format('MM-YYYY');
            if (deen === dazz) {
              chpercount = chpercount + 1;
              var pakk = '';
              if (caise.personnel !== null) {
                pakk = caise.personnel.noms.toUpperCase();
              }
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#chargepersonnel tbody').append('' + '<tr key={caise.id} class="paginate15">' + '<td align="center" class="mw30"><input class="form-check-input" type="checkbox" value={caise.id} name="checkPersoMois" id="checkPersoMois"/></td>' + '<td class="text-center"><a href="#"><i class="fa fa-eye col-green" aria-hidden="true"></i></a></td>' + ' <td><Moment format="DD/MM/YYYY">' + moment_moment__WEBPACK_IMPORTED_MODULE_41__(caise.date).locale("fr").format('L') + '</Moment></td>' + '<td class="bolo600"><a href={`/crm/caisse/${caise.id}/${caise.chantier.id}`}>' + '<span class="badge badge-pill badge-primary m-r-5">V</span>' + caise.numcaisse + '</a></td>' + '<td>' + pakk + '<br/>' + caise.caissereference + '(<b>' + caise.client.nomclient + ' ' + caise.chantier.nomchantier + '</b>)</td>' + '<td class="text-right">' + formatNumber(caise.montant, 2, ' ') + '</td>' + '<td class="text-left pri bolo600">' + caise.dobyuser.nom.toUpperCase() + ' ' + caise.dobyuser.prenoms.toUpperCase() + '</td>' + '</tr>');
            }
          });
        case 7:
        case "end":
          return _context8.stop();
      }
    }, _callee8, this);
  })));
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#getReglementsClients").off().on("change", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee9() {
    var chreglecount, dean, saws;
    return _regeneratorRuntime().wrap(function _callee9$(_context9) {
      while (1) switch (_context9.prev = _context9.next) {
        case 0:
          jquery__WEBPACK_IMPORTED_MODULE_40___default()('#reglementsmois tbody').children().remove();
          chreglecount = 0;
          dean = jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).val();
          saws = 0;
          reglements.map(function (reglement) {
            var dazza = moment_moment__WEBPACK_IMPORTED_MODULE_41__(reglement.date).format('MM-YYYY');
            if (dean === dazza) {
              saws = saws + parseFloat(reglement.montant);
            }
          });
          setfrmoisregle(saws);
          reglements.map(function (reglement) {
            var dazzaa = moment_moment__WEBPACK_IMPORTED_MODULE_41__(reglement.date).format('MM-YYYY');
            if (dean === dazzaa) {
              chreglecount = chreglecount + 1;
              var chan = " ";
              var clie = " ";
              var rrr = " ";
              if (reglement.chantier) {
                chan = reglement.chantier.nomchantier;
              }
              if (reglement.facture.etat === "valide") {
                rrr = '<span class="badge badge-pill badge-primary m-r-5">V</span>';
              } else {
                rrr = '<span class="badge badge-pill badge-secondary m-r-5">V</span>';
              }
              if (reglement.client) {
                clie = reglement.client.nomclient;
              }
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#reglementsmois tbody').append('' + '<tr key={reglement.id} class="paginate16">' + '<td><Moment format="DD/MM/YYYY">' + moment_moment__WEBPACK_IMPORTED_MODULE_41__(reglement.date).locale("fr").format('L') + '</Moment></td>' + '<td class="bolo600"><a href={`/crm/devis/${reglement.devis.id}/${reglement.chantier.id}`}>' + '<span class="badge badge-pill badge-primary m-r-5">V</span>' + reglement.devis.iddevis + '</a></td>' + '<td class="bolo600"><a href={`/crm/facture/${reglement.facture.id}/${reglement.chantier.id}`}>' + rrr + reglement.facture.numfacture + '</a></td>' + '<td><b>' + clie + '</b> | ' + chan + '</td>' + '<td class="text-right">' + formatNumber(reglement.montant, 2, ' ') + '</td>' + '<td class="text-left pri bolo600">' + reglement.moyen + '</td>' + '</tr>');
            }
          });
        case 7:
        case "end":
          return _context9.stop();
      }
    }, _callee9, this);
  })));
  jquery__WEBPACK_IMPORTED_MODULE_40___default()(".devalideCaisse").off().on("click", function () {
    jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='checkpresta']:checked"), function () {
      window.$('#Traitement').modal('show');
      (0,axios__WEBPACK_IMPORTED_MODULE_43__["default"])({
        method: 'GET',
        url: '/crm/caisse/devalider/' + jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).val()
      }).then(function (response) {
        window.location.reload();
      })["catch"](function (error) {
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('hide');
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#ModalErreur').modal('show');
      });
    });
  });
  (0,react__WEBPACK_IMPORTED_MODULE_36__.useEffect)(function () {
    fetchCaisseInterne();
    fetchCaissePerso();
    fetchCaisseChantiers();
    fetchReglements();
  }, []);
  var ricount = 0;
  var soreinternedebit = 0;
  var soreinternecredit = 0;
  caissin.map(function (caiss) {
    if (caiss.corbeille === null && caiss.etat === "valide") {
      ricount = ricount + 1;
      if (caiss.operation === "debit") {
        soreinternedebit = soreinternedebit + caiss.montant;
      }
      if (caiss.operation === "credit") {
        soreinternecredit = soreinternecredit + caiss.montant;
      }
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement((react__WEBPACK_IMPORTED_MODULE_36___default().Fragment), null, caiss.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement((react__WEBPACK_IMPORTED_MODULE_36___default().Fragment), null, caiss.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
      key: caiss.id,
      className: "paginate10"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
      className: "text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_42___default()), {
      format: "DD/MM/YYYY"
    }, caiss.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
      href: "/crm/caisse/".concat(caiss.id, "/").concat(caiss.chantier.id)
    }, "CAISSE N\xB0 ", caiss.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
      className: "text-left",
      dangerouslySetInnerHTML: {
        __html: caiss.caissereference
      }
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
      className: "text-right"
    }, caiss.operation === 'debit' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
      numb: caiss.montant
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
      className: "text-right"
    }, caiss.operation === 'credit' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
      numb: caiss.montant
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
      className: "text-left pri bolo600"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("i", {
      className: "fa fa-user pri"
    }), " \xA0", caiss.dobyuser.nom.toUpperCase() + ' ', " ", caiss.dobyuser.prenoms.toUpperCase()))));
  });
  var rpcount = 0;
  var rpdebit = 0;
  var rpcredit = 0;
  caissperso.map(function (caiss) {
    if (caiss.corbeille === null && caiss.etat === "valide") {
      rpcount = rpcount + 1;
      if (caiss.operation === "debit") {
        rpdebit = rpdebit + caiss.montant;
      }
      if (caiss.operation === "credit") {
        rpcredit = rpcredit + caiss.montant;
      }
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement((react__WEBPACK_IMPORTED_MODULE_36___default().Fragment), null, caiss.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement((react__WEBPACK_IMPORTED_MODULE_36___default().Fragment), null, caiss.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
      key: caiss.id,
      className: "paginate11"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
      className: "text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_42___default()), {
      format: "DD/MM/YYYY"
    }, caiss.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
      href: "/crm/caisse/".concat(caiss.id, "/").concat(caiss.chantier.id)
    }, "BON DE CAISSE N\xB0 ", caiss.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
      dangerouslySetInnerHTML: {
        __html: caiss.caissereference
      }
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
      className: "text-right"
    }, caiss.operation === 'debit' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
      numb: caiss.montant
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
      className: "text-right"
    }, caiss.operation === 'credit' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
      numb: caiss.montant
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
      className: "text-left pri bolo600"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("i", {
      className: "fa fa-user pri"
    }), " \xA0", caiss.dobyuser.nom.toUpperCase() + ' ', " ", caiss.dobyuser.prenoms.toUpperCase()))));
  });
  var soldeEntre = parseFloat(sumRegle) + parseFloat(soreinternecredit) + parseFloat(rpcredit) - (parseFloat(soreinternedebit) + parseFloat(rpdebit) + parseFloat(sumDepense));
  var handleDepFour = function handleDepFour(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_40___default()("#depfour tr.paginate13").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  var handleDepPresta = function handleDepPresta(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_40___default()("#deppresta tr.paginateDepPresta").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#checkDepPresta").change(function () {
    if (this.checked) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='checkpresta']"), function () {
        this.checked = true;
      });
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='checkpresta']"), function () {
        this.checked = false;
      });
    }
  });
  var handleBonMoisInterne = function handleBonMoisInterne(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_40___default()("#bonMoisInterne tr.paginate12").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  var handleChantiersMoisInterne = function handleChantiersMoisInterne(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_40___default()("#chantierMoisInterne tr.paginate13").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  var handleChargePersonnel = function handleChargePersonnel(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_40___default()("#chargepersonnel tr.paginate15").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  var handleReglementsMois = function handleReglementsMois(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_40___default()("#reglementsmois tr.paginate16").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#checkChaIntMois").change(function () {
    if (this.checked) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='checkChaIntMois']"), function () {
        this.checked = true;
      });
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='checkChaIntMois']"), function () {
        this.checked = false;
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#checkChanMois").change(function () {
    if (this.checked) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='checkChanMois']"), function () {
        this.checked = true;
      });
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='checkChanMois']"), function () {
        this.checked = false;
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_40___default()("#checkPersoMois").change(function () {
    if (this.checked) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='checkPersoMois']"), function () {
        this.checked = true;
      });
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_40___default().each(jquery__WEBPACK_IMPORTED_MODULE_40___default()("input[name='checkPersoMois']"), function () {
        this.checked = false;
      });
    }
  });
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement((react__WEBPACK_IMPORTED_MODULE_36___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-12",
    style: {
      paddingLeft: "0"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-group",
    id: "accordion_2",
    role: "tablist",
    "aria-multiselectable": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingImpEnt"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionImpEnt",
    href: "#collapseImpEnt",
    "aria-expanded": "false",
    "aria-controls": "collapseImpEnt"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "Solde de l'entreprise"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    id: "collapseImpEnt",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingImpEnt"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "table-responsive shadow bg-white",
    style: {
      color: "#555"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_38__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "releEntre",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "R\xC9L\xC9V\xC9 SOLDE DE L'ENTREPRISE",
    sheet: "tablexls",
    buttonText: "Ex"
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%",
      marginBottom: "10px"
    },
    id: "relePerso"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "col-blue-grey"
  }, "R\xC8GLEMENTS DES CLIENTS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "col-blue-grey"
  }, "D\xC9PENSES DES CHANTIERS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "col-blue-grey"
  }, "CHARGES INTERNES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "col-blue-grey"
  }, "CHARGES DU PERSONNEL"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "col-blue-grey"
  }, "SOLDE"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tbody", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
    style: {
      fontWeight: "bold",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: sumRegle
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
    style: {
      fontWeight: "bold",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: sumDepense
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
    style: {
      fontWeight: "bold",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: soreinternedebit - soreinternecredit
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
    style: {
      fontWeight: "bold",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: rpdebit - rpcredit
  })), soldeEntre > 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
    className: "col-green",
    style: {
      whiteSpace: "nowrap",
      fontWeight: "bold",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: soldeEntre
  })), soldeEntre === 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
    className: "col-blue-grey",
    style: {
      whiteSpace: "nowrap",
      fontWeight: "bold",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: soldeEntre
  })), soldeEntre < 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("td", {
    className: "col-pink",
    style: {
      whiteSpace: "nowrap",
      fontWeight: "bold",
      textAlign: "center"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: soldeEntre
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("br", null))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5",
    style: {
      marginTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingDepComp"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionImpEnt",
    href: "#collapseDepComp",
    "aria-expanded": "false",
    "aria-controls": "collapseDepComp"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "D\xE9penses charges Internes par Mois"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    id: "collapseDepComp",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingDepComp"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "table-responsive shadow bg-white",
    style: {
      color: "#555"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("select", {
    className: "form-select",
    id: "getDepensesInternes",
    "aria-label": "Default select example"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "",
    selected: true,
    disabled: true
  }, "D\xE9penses par mois"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2024"
  }, "JANVIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2024"
  }, "F\xC9VRIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2024"
  }, "MARS 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2024"
  }, "AVRIL 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2024"
  }, "MAI 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2024"
  }, "JUIN 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2024"
  }, "JUILLET 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2024"
  }, "AOUT 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2024"
  }, "SEPTEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2024"
  }, "OCTOBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2024"
  }, "NOVEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2024"
  }, "DECEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2025"
  }, "JANVIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2025"
  }, "F\xC9VRIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2025"
  }, "MARS 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2025"
  }, "AVRIL 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2025"
  }, "MAI 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2025"
  }, "JUIN 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2025"
  }, "JUILLET 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2025"
  }, "AOUT 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2025"
  }, "SEPTEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2025"
  }, "OCTOBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2025"
  }, "NOVEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2025"
  }, "DECEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2026"
  }, "JANVIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2026"
  }, "F\xC9VRIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2026"
  }, "MARS 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2026"
  }, "AVRIL 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2026"
  }, "MAI 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2026"
  }, "JUIN 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2026"
  }, "JUILLET 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2026"
  }, "AOUT 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2026"
  }, "SEPTEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2026"
  }, "OCTOBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2026"
  }, "NOVEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2026"
  }, "DECEMBRE 2026")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("span", {
    className: "m-r-5 vareact",
    title: "Tout s\xE9lectionner"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "checkbox",
    name: "checkChaIntMois",
    id: "checkChaIntMois"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    title: "Valider",
    style: {
      textDecoration: "none"
    },
    className: "m-r-5 vareact bg-blue-grey bolo700 col-white",
    id: "devalideCaisse"
  }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_38__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "bonMoisInterne",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "CHARGE INTERNE PAR MOIS",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleBonMoisInterne,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    id: "bonMoisInterne",
    style: {
      width: "100%",
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center",
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw30 text-center"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw120"
  }, "N\xB0 BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw300"
  }, "FACTUR\xC9 \xC0"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "MONTANT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw200"
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tbody", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: frmoisinterne
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("br", null))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingDepFour"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionImpEnt",
    href: "#collapseDepFour",
    "aria-expanded": "false",
    "aria-controls": "collapseDepFour"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "D\xE9penses des fournisseurs"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    id: "collapseDepFour",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingDepFour"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "table-responsive shadow bg-white",
    style: {
      color: "#555"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("select", {
    className: "form-select",
    id: "getDepFour",
    "aria-label": "Default select example"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "",
    selected: true,
    disabled: true
  }, "D\xE9penses par mois"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2024"
  }, "JANVIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2024"
  }, "F\xC9VRIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2024"
  }, "MARS 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2024"
  }, "AVRIL 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2024"
  }, "MAI 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2024"
  }, "JUIN 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2024"
  }, "JUILLET 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2024"
  }, "AOUT 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2024"
  }, "SEPTEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2024"
  }, "OCTOBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2024"
  }, "NOVEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2024"
  }, "DECEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2025"
  }, "JANVIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2025"
  }, "F\xC9VRIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2025"
  }, "MARS 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2025"
  }, "AVRIL 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2025"
  }, "MAI 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2025"
  }, "JUIN 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2025"
  }, "JUILLET 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2025"
  }, "AOUT 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2025"
  }, "SEPTEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2025"
  }, "OCTOBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2025"
  }, "NOVEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2025"
  }, "DECEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2026"
  }, "JANVIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2026"
  }, "F\xC9VRIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2026"
  }, "MARS 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2026"
  }, "AVRIL 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2026"
  }, "MAI 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2026"
  }, "JUIN 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2026"
  }, "JUILLET 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2026"
  }, "AOUT 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2026"
  }, "SEPTEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2026"
  }, "OCTOBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2026"
  }, "NOVEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2026"
  }, "DECEMBRE 2026")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("span", {
    className: "m-r-5 vareact",
    title: "Tout s\xE9lectionner"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "checkbox",
    name: "checkDepFourMois",
    id: "checkDepFourMois"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    title: "D\xE9valider",
    style: {
      textDecoration: "none"
    },
    className: "m-r-5 vareact bg-blue-grey bolo700 col-white",
    id: "devalideCaisse"
  }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_38__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "Depenses fournisseurs ",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "D\xC9PENSES DES FOIURNISSEUR PAR MOIS",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleDepFour,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    id: "depfour",
    style: {
      width: "100%",
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center",
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw30 text-center"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw120"
  }, "N\xB0 BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw300"
  }, "FACTUR\xC9 \xC0"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "MONTANT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw200"
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tbody", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: frmoischantiers
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("br", null))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingDepPresta"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionImpEnt",
    href: "#collapseDepPresta",
    "aria-expanded": "false",
    "aria-controls": "collapseDepPresta"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "D\xE9penses des prestataires"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    id: "collapseDepPresta",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingDepPresta"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "table-responsive shadow bg-white",
    style: {
      color: "#555"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("select", {
    className: "form-select",
    id: "getDepPresta",
    "aria-label": "Default select example"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "",
    selected: true,
    disabled: true
  }, "D\xE9penses par mois"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("optgroup", {
    label: "Ann\xE9e 2024"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2024"
  }, "JANVIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2024"
  }, "F\xC9VRIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2024"
  }, "MARS 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2024"
  }, "AVRIL 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2024"
  }, "MAI 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2024"
  }, "JUIN 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2024"
  }, "JUILLET 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2024"
  }, "AOUT 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2024"
  }, "SEPTEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2024"
  }, "OCTOBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2024"
  }, "NOVEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2024"
  }, "DECEMBRE 2024")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("optgroup", {
    label: "Ann\xE9e 2025"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2025"
  }, "JANVIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2025"
  }, "F\xC9VRIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2025"
  }, "MARS 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2025"
  }, "AVRIL 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2025"
  }, "MAI 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2025"
  }, "JUIN 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2025"
  }, "JUILLET 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2025"
  }, "AOUT 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2025"
  }, "SEPTEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2025"
  }, "OCTOBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2025"
  }, "NOVEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2025"
  }, "DECEMBRE 2025")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("optgroup", {
    label: "Ann\xE9e 2026"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2026"
  }, "JANVIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2026"
  }, "F\xC9VRIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2026"
  }, "MARS 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2026"
  }, "AVRIL 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2026"
  }, "MAI 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2026"
  }, "JUIN 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2026"
  }, "JUILLET 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2026"
  }, "AOUT 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2026"
  }, "SEPTEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2026"
  }, "OCTOBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2026"
  }, "NOVEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2026"
  }, "DECEMBRE 2026"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("span", {
    className: "m-r-5 vareact",
    title: "Tout s\xE9lectionner"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "checkbox",
    name: "checkDepPresta",
    id: "checkDepPresta"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    title: "D\xE9valider",
    style: {
      textDecoration: "none"
    },
    className: "m-r-5 vareact bg-blue-grey bolo700 col-white devalideCaisse"
  }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_38__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "Depenses fournisseurs et chantiers",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "D\xC9PENSES DES PRESTATAIRES PAR MOIS",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleDepPresta,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    id: "deppresta",
    style: {
      width: "100%",
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center",
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw30 text-center"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw120"
  }, "N\xB0 BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw300"
  }, "FACTUR\xC9 \xC0"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "MONTANT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw200"
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tbody", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: frdeppresta
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("br", null))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingDepChCh"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionImpEnt",
    href: "#collapseDepChCh",
    "aria-expanded": "false",
    "aria-controls": "collapseDepChCh"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "D\xE9penses diverses des chantiers par Mois"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    id: "collapseDepChCh",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingDepChCh"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "table-responsive shadow bg-white",
    style: {
      color: "#555"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("select", {
    className: "form-select",
    id: "getDepensesChantiers",
    "aria-label": "Default select example"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "",
    selected: true,
    disabled: true
  }, "D\xE9penses par mois"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("optgroup", {
    label: "Ann\xE9e 2024"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2024"
  }, "JANVIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2024"
  }, "F\xC9VRIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2024"
  }, "MARS 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2024"
  }, "AVRIL 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2024"
  }, "MAI 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2024"
  }, "JUIN 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2024"
  }, "JUILLET 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2024"
  }, "AOUT 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2024"
  }, "SEPTEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2024"
  }, "OCTOBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2024"
  }, "NOVEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2024"
  }, "DECEMBRE 2024")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("optgroup", {
    label: "Ann\xE9e 2025"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2025"
  }, "JANVIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2025"
  }, "F\xC9VRIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2025"
  }, "MARS 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2025"
  }, "AVRIL 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2025"
  }, "MAI 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2025"
  }, "JUIN 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2025"
  }, "JUILLET 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2025"
  }, "AOUT 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2025"
  }, "SEPTEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2025"
  }, "OCTOBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2025"
  }, "NOVEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2025"
  }, "DECEMBRE 2025")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("optgroup", {
    label: "Ann\xE9e 2026"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2026"
  }, "JANVIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2026"
  }, "F\xC9VRIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2026"
  }, "MARS 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2026"
  }, "AVRIL 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2026"
  }, "MAI 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2026"
  }, "JUIN 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2026"
  }, "JUILLET 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2026"
  }, "AOUT 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2026"
  }, "SEPTEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2026"
  }, "OCTOBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2026"
  }, "NOVEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2026"
  }, "DECEMBRE 2026"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("span", {
    className: "m-r-5 vareact",
    title: "Tout s\xE9lectionner"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "checkbox",
    name: "checkChanMois",
    id: "checkChanMois"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    title: "Valider",
    style: {
      textDecoration: "none"
    },
    className: "m-r-5 vareact bg-blue-grey bolo700 col-white",
    id: "devalideCaisse"
  }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_38__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "Depenses fournisseurs et chantiers",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "CHARGE INTERNE PAR MOIS",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleChantiersMoisInterne,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    id: "chantierMoisInterne",
    style: {
      width: "100%",
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center",
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw30 text-center"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw120"
  }, "N\xB0 BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw300"
  }, "FACTUR\xC9 \xC0"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "MONTANT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw200"
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tbody", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: frmoischantiers
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("br", null))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingDepChPr"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionImpEnt",
    href: "#collapseDepChPr",
    "aria-expanded": "false",
    "aria-controls": "collapseDepChPr"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "Charges du Personnel par Mois"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    id: "collapseDepChPr",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingDepChPr"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "table-responsive shadow bg-white",
    style: {
      color: "#555"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("select", {
    className: "form-select",
    id: "getDepensesPersonnel",
    "aria-label": "Default select example"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "",
    selected: true,
    disabled: true
  }, "D\xE9penses par mois"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2024"
  }, "JANVIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2024"
  }, "F\xC9VRIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2024"
  }, "MARS 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2024"
  }, "AVRIL 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2024"
  }, "MAI 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2024"
  }, "JUIN 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2024"
  }, "JUILLET 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2024"
  }, "AOUT 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2024"
  }, "SEPTEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2024"
  }, "OCTOBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2024"
  }, "NOVEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2024"
  }, "DECEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2025"
  }, "JANVIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2025"
  }, "F\xC9VRIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2025"
  }, "MARS 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2025"
  }, "AVRIL 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2025"
  }, "MAI 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2025"
  }, "JUIN 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2025"
  }, "JUILLET 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2025"
  }, "AOUT 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2025"
  }, "SEPTEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2025"
  }, "OCTOBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2025"
  }, "NOVEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2025"
  }, "DECEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2026"
  }, "JANVIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2026"
  }, "F\xC9VRIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2026"
  }, "MARS 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2026"
  }, "AVRIL 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2026"
  }, "MAI 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2026"
  }, "JUIN 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2026"
  }, "JUILLET 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2026"
  }, "AOUT 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2026"
  }, "SEPTEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2026"
  }, "OCTOBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2026"
  }, "NOVEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2026"
  }, "DECEMBRE 2026")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("span", {
    className: "m-r-5 vareact",
    title: "Tout s\xE9lectionner"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "checkbox",
    name: "checkPersoMois",
    id: "checkPersoMois"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    title: "Valider",
    style: {
      textDecoration: "none"
    },
    className: "m-r-5 vareact bg-blue-grey bolo700 col-white",
    id: "devalideCaisse"
  }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    title: "Supprimer",
    id: "delCaisse",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("i", {
    className: "fa fa fa-trash col-pink "
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_38__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "chargepersonnel",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "CHARGE INTERNE PAR MOIS",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleChargePersonnel,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    id: "chargepersonnel",
    style: {
      width: "100%",
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center",
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw30 text-center"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw120"
  }, "N\xB0 BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw300"
  }, "FACTUR\xC9 \xC0"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "MONTANT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw200"
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tbody", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: frmoisperso
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("br", null))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingRegle"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionImpEnt",
    href: "#collapseRegle",
    "aria-expanded": "false",
    "aria-controls": "collapseRegle"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "R\xE8glements des Clients par Mois"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    id: "collapseRegle",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingRegle"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "table-responsive shadow bg-white",
    style: {
      color: "#555"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("select", {
    className: "form-select",
    id: "getReglementsClients",
    "aria-label": "Default select example"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "",
    selected: true,
    disabled: true
  }, "R\xE8glements clients par mois"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2024"
  }, "JANVIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2024"
  }, "F\xC9VRIER 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2024"
  }, "MARS 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2024"
  }, "AVRIL 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2024"
  }, "MAI 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2024"
  }, "JUIN 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2024"
  }, "JUILLET 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2024"
  }, "AOUT 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2024"
  }, "SEPTEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2024"
  }, "OCTOBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2024"
  }, "NOVEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2024"
  }, "DECEMBRE 2024"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2025"
  }, "JANVIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2025"
  }, "F\xC9VRIER 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2025"
  }, "MARS 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2025"
  }, "AVRIL 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2025"
  }, "MAI 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2025"
  }, "JUIN 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2025"
  }, "JUILLET 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2025"
  }, "AOUT 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2025"
  }, "SEPTEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2025"
  }, "OCTOBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2025"
  }, "NOVEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2025"
  }, "DECEMBRE 2025"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "01-2026"
  }, "JANVIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "02-2026"
  }, "F\xC9VRIER 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "03-2026"
  }, "MARS 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "04-2026"
  }, "AVRIL 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "05-2026"
  }, "MAI 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "06-2026"
  }, "JUIN 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "07-2026"
  }, "JUILLET 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "08-2026"
  }, "AOUT 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "09-2026"
  }, "SEPTEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "10-2026"
  }, "OCTOBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "11-2026"
  }, "NOVEMBRE 2026"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("option", {
    value: "12-2026"
  }, "DECEMBRE 2026")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_38__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "bonMoisReglements",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "R\xC8GLEMENTS CLIENTS PAR MOIS",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleReglementsMois,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    id: "reglementsmois",
    style: {
      width: "100%",
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center",
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw150"
  }, "DEVIS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw150"
  }, "FACTURE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw300"
  }, "CLIENT | CHANTIER"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null, "MONTANT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "mw200"
  }, "MOYEN DE PAIE"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tbody", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("tr", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_39__["default"], {
    numb: frmoisregle
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("th", null)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement("br", null))))))));
};
try {
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_37__.createRoot)(document.getElementById('setsoldecompte'));
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_36___default().createElement(SoldeCompte, null));
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

/***/ "./node_modules/core-js/internals/number-parse-float.js":
/*!**************************************************************!*\
  !*** ./node_modules/core-js/internals/number-parse-float.js ***!
  \**************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var global = __webpack_require__(/*! ../internals/global */ "./node_modules/core-js/internals/global.js");
var fails = __webpack_require__(/*! ../internals/fails */ "./node_modules/core-js/internals/fails.js");
var uncurryThis = __webpack_require__(/*! ../internals/function-uncurry-this */ "./node_modules/core-js/internals/function-uncurry-this.js");
var toString = __webpack_require__(/*! ../internals/to-string */ "./node_modules/core-js/internals/to-string.js");
var trim = (__webpack_require__(/*! ../internals/string-trim */ "./node_modules/core-js/internals/string-trim.js").trim);
var whitespaces = __webpack_require__(/*! ../internals/whitespaces */ "./node_modules/core-js/internals/whitespaces.js");

var charAt = uncurryThis(''.charAt);
var $parseFloat = global.parseFloat;
var Symbol = global.Symbol;
var ITERATOR = Symbol && Symbol.iterator;
var FORCED = 1 / $parseFloat(whitespaces + '-0') !== -Infinity
  // MS Edge 18- broken with boxed symbols
  || (ITERATOR && !fails(function () { $parseFloat(Object(ITERATOR)); }));

// `parseFloat` method
// https://tc39.es/ecma262/#sec-parsefloat-string
module.exports = FORCED ? function parseFloat(string) {
  var trimmedString = trim(toString(string));
  var result = $parseFloat(trimmedString);
  return result === 0 && charAt(trimmedString, 0) == '-' ? -0 : result;
} : $parseFloat;


/***/ }),

/***/ "./node_modules/core-js/modules/es.parse-float.js":
/*!********************************************************!*\
  !*** ./node_modules/core-js/modules/es.parse-float.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var $parseFloat = __webpack_require__(/*! ../internals/number-parse-float */ "./node_modules/core-js/internals/number-parse-float.js");

// `parseFloat` method
// https://tc39.es/ecma262/#sec-parsefloat-string
$({ global: true, forced: parseFloat != $parseFloat }, {
  parseFloat: $parseFloat
});


/***/ }),

/***/ "./node_modules/core-js/modules/es.string.replace-all.js":
/*!***************************************************************!*\
  !*** ./node_modules/core-js/modules/es.string.replace-all.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var call = __webpack_require__(/*! ../internals/function-call */ "./node_modules/core-js/internals/function-call.js");
var uncurryThis = __webpack_require__(/*! ../internals/function-uncurry-this */ "./node_modules/core-js/internals/function-uncurry-this.js");
var requireObjectCoercible = __webpack_require__(/*! ../internals/require-object-coercible */ "./node_modules/core-js/internals/require-object-coercible.js");
var isCallable = __webpack_require__(/*! ../internals/is-callable */ "./node_modules/core-js/internals/is-callable.js");
var isNullOrUndefined = __webpack_require__(/*! ../internals/is-null-or-undefined */ "./node_modules/core-js/internals/is-null-or-undefined.js");
var isRegExp = __webpack_require__(/*! ../internals/is-regexp */ "./node_modules/core-js/internals/is-regexp.js");
var toString = __webpack_require__(/*! ../internals/to-string */ "./node_modules/core-js/internals/to-string.js");
var getMethod = __webpack_require__(/*! ../internals/get-method */ "./node_modules/core-js/internals/get-method.js");
var getRegExpFlags = __webpack_require__(/*! ../internals/regexp-get-flags */ "./node_modules/core-js/internals/regexp-get-flags.js");
var getSubstitution = __webpack_require__(/*! ../internals/get-substitution */ "./node_modules/core-js/internals/get-substitution.js");
var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");
var IS_PURE = __webpack_require__(/*! ../internals/is-pure */ "./node_modules/core-js/internals/is-pure.js");

var REPLACE = wellKnownSymbol('replace');
var $TypeError = TypeError;
var indexOf = uncurryThis(''.indexOf);
var replace = uncurryThis(''.replace);
var stringSlice = uncurryThis(''.slice);
var max = Math.max;

var stringIndexOf = function (string, searchValue, fromIndex) {
  if (fromIndex > string.length) return -1;
  if (searchValue === '') return fromIndex;
  return indexOf(string, searchValue, fromIndex);
};

// `String.prototype.replaceAll` method
// https://tc39.es/ecma262/#sec-string.prototype.replaceall
$({ target: 'String', proto: true }, {
  replaceAll: function replaceAll(searchValue, replaceValue) {
    var O = requireObjectCoercible(this);
    var IS_REG_EXP, flags, replacer, string, searchString, functionalReplace, searchLength, advanceBy, replacement;
    var position = 0;
    var endOfLastMatch = 0;
    var result = '';
    if (!isNullOrUndefined(searchValue)) {
      IS_REG_EXP = isRegExp(searchValue);
      if (IS_REG_EXP) {
        flags = toString(requireObjectCoercible(getRegExpFlags(searchValue)));
        if (!~indexOf(flags, 'g')) throw $TypeError('`.replaceAll` does not allow non-global regexes');
      }
      replacer = getMethod(searchValue, REPLACE);
      if (replacer) {
        return call(replacer, searchValue, O, replaceValue);
      } else if (IS_PURE && IS_REG_EXP) {
        return replace(toString(O), searchValue, replaceValue);
      }
    }
    string = toString(O);
    searchString = toString(searchValue);
    functionalReplace = isCallable(replaceValue);
    if (!functionalReplace) replaceValue = toString(replaceValue);
    searchLength = searchString.length;
    advanceBy = max(1, searchLength);
    position = stringIndexOf(string, searchString, 0);
    while (position !== -1) {
      replacement = functionalReplace
        ? toString(replaceValue(searchString, position, string))
        : getSubstitution(searchString, string, position, [], undefined, replaceValue);
      result += stringSlice(string, endOfLastMatch, position) + replacement;
      endOfLastMatch = position + searchLength;
      position = stringIndexOf(string, searchString, position + advanceBy);
    }
    if (endOfLastMatch < string.length) {
      result += stringSlice(string, endOfLastMatch);
    }
    return result;
  }
});


/***/ }),

/***/ "./node_modules/core-js/modules/esnext.string.replace-all.js":
/*!*******************************************************************!*\
  !*** ./node_modules/core-js/modules/esnext.string.replace-all.js ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

// TODO: Remove from `core-js@4`
__webpack_require__(/*! ../modules/es.string.replace-all */ "./node_modules/core-js/modules/es.string.replace-all.js");


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
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-383511","vendors-node_modules_core-js_modules_es_array_from_js-node_modules_core-js_modules_es_array_i-c84b5d","vendors-node_modules_moment_locale_af_js-node_modules_moment_locale_ar-dz_js-node_modules_mom-582c96","vendors-node_modules_react-html-table-to-excel_index_js","vendors-node_modules_react-moment_dist_index_js","assets_js_datascript_js-assets_js_jquery_validate_js-assets_css_mdb_css","assets_js_admin_js-assets_js_bootstrap_js-assets_js_jquery_tableToExcel_js-assets_js_select2_-13fb9c"], () => (__webpack_exec__("./assets/apsoldecompte.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUM7RUFBUyxHQUFDLGlCQUFZLENBQVMsZUFDN0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFdBQVMsQ0FBUyxlQUMxQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsWUFBVSxDQUFTLGVBQzNDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxVQUFRLENBQVMsZUFDekM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFdBQVMsQ0FBUyxlQUMxQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsY0FBWSxDQUFTLGVBQzdDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxXQUFTLENBQVMsZUFDMUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGdCQUFjLENBQVMsZUFDL0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGNBQVksQ0FBUyxlQUM3QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsZUFBYSxDQUFTLGVBQzlDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxlQUFhLENBQVMsZUFDOUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGNBQVksQ0FBUyxlQUM3QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsaUJBQVksQ0FBUyxlQUM3QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsV0FBUyxDQUFTLGVBQzFDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxZQUFVLENBQVMsZUFDM0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFVBQVEsQ0FBUyxlQUN6QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsV0FBUyxDQUFTLGVBQzFDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxjQUFZLENBQVMsZUFDN0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFdBQVMsQ0FBUyxlQUMxQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsZ0JBQWMsQ0FBUyxlQUMvQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsY0FBWSxDQUFTLGVBQzdDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxlQUFhLENBQVMsZUFDOUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGVBQWEsQ0FBUyxlQUM5QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsY0FBWSxDQUFTLGVBQzdDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxpQkFBWSxDQUFTLGVBQzdDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxXQUFTLENBQVMsZUFDMUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFlBQVUsQ0FBUyxlQUMzQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsVUFBUSxDQUFTLGVBQ3pDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxXQUFTLENBQVMsZUFDMUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGNBQVksQ0FBUyxlQUM3QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsV0FBUyxDQUFTLGVBQzFDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxnQkFBYyxDQUFTLGVBQy9DO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxjQUFZLENBQVMsZUFDN0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGVBQWEsQ0FBUyxlQUM5QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsZUFBYSxDQUFTLENBQ3pDLGVBRVQ7SUFBSyxTQUFTLEVBQUM7RUFBSyxnQkFDaEI7SUFBSyxTQUFTLEVBQUMsVUFBVTtJQUFDLEtBQUssRUFBRTtNQUFDQyxVQUFVLEVBQUU7SUFBTTtFQUFFLGdCQUM5QztJQUFNLFNBQVMsRUFBQyxlQUFlO0lBQUMsS0FBSyxFQUFDO0VBQW1CLGdCQUFDO0lBQ3RELElBQUksRUFBQyxVQUFVO0lBQUMsSUFBSSxFQUFDLGtCQUFrQjtJQUFDLEVBQUUsRUFBQztFQUFrQixFQUFFLENBQU8sZUFFOUU7SUFBRyxLQUFLLEVBQUMsY0FBVztJQUFDLEtBQUssRUFBRTtNQUFDTyxjQUFjLEVBQUU7SUFBTSxDQUFFO0lBQ2xELFNBQVMsRUFBQyw4Q0FBOEM7SUFDeEQsRUFBRSxFQUFDO0VBQWdCLEdBQUMsR0FBQyxDQUFJLGVBRTVCLDREQUFDLGtFQUFxQjtJQUNsQixFQUFFLEVBQUMsdUJBQXVCO0lBQzFCLFNBQVMsRUFBQyx5REFBeUQ7SUFDbkUsS0FBSyxFQUFDLHdCQUF3QjtJQUM5QixLQUFLLEVBQUMsZ0NBQTBCO0lBQ2hDLFFBQVEsRUFBQyx1Q0FBb0M7SUFDN0MsS0FBSyxFQUFDLFVBQVU7SUFDaEIsVUFBVSxFQUFDO0VBQUksRUFBRSxDQUNuQixlQUNOO0lBQUssU0FBUyxFQUFDO0VBQXNCLGdCQUNqQztJQUFLLFNBQVMsRUFBQztFQUFhLGdCQUN4QjtJQUFLLFNBQVMsRUFBQztFQUFXLGdCQUN0QjtJQUFPLElBQUksRUFBQyxNQUFNO0lBQUMsU0FBUyxFQUFDLGNBQWM7SUFDcEMsUUFBUSxFQUFFNUIsYUFBYztJQUN4QixXQUFXLEVBQUM7RUFBWSxFQUFFLENBQy9CLENBQ0osQ0FDSixDQUNKLGVBQ047SUFBTyxTQUFTLEVBQUMsMENBQTBDO0lBQUMsRUFBRSxFQUFDLFNBQVM7SUFDakUsS0FBSyxFQUFFO01BQUNzQixLQUFLLEVBQUUsTUFBTTtNQUFFQyxZQUFZLEVBQUU7SUFBTTtFQUFFLGdCQUNoRCx3RkFDQTtJQUFJLFNBQVMsRUFBQyxhQUFhO0lBQUMsS0FBSyxFQUFFO01BQUNNLFlBQVksRUFBRTtJQUFnQjtFQUFFLGdCQUNoRTtJQUFJLFNBQVMsRUFBQztFQUFrQixHQUFDLEdBQUMsQ0FBSyxlQUN2QztJQUFJLFNBQVMsRUFBQztFQUFrQixFQUFNLGVBQ3RDLHdFQUFJLE1BQUksQ0FBSyxlQUNiO0lBQUksU0FBUyxFQUFDO0VBQU8sR0FBQyxXQUFNLENBQUssZUFDakM7SUFBSSxTQUFTLEVBQUM7RUFBTyxHQUFDLGlCQUFTLENBQUssZUFDcEMsd0VBQUksU0FBTyxDQUFLLGVBQ2hCO0lBQUksU0FBUyxFQUFDO0VBQU8sR0FBQyxhQUFRLENBQUssQ0FDbEMsQ0FDRyxlQUNSLDBFQUNRLGVBQ1Isd0ZBQ0E7SUFBSSxTQUFTLEVBQUM7RUFBYSxnQkFDdkIsdUVBQVMsZUFDVCx1RUFBUyxlQUNULHVFQUFTLGVBQ1QsdUVBQVMsZUFDVCx1RUFBUyxlQUNUO0lBQUksU0FBUyxFQUFDLCtCQUErQjtJQUN6QyxLQUFLLEVBQUU7TUFBQ0gsVUFBVSxFQUFFO0lBQVE7RUFBRSxnQkFBQyw0REFBQyxnRUFBWTtJQUFDLElBQUksRUFBRXZJO0VBQWdCLEVBQUUsQ0FBSyxlQUM5RSx1RUFBUyxDQUNSLENBQ0csQ0FDSixlQUVSLHVFQUFLLENBQ0gsQ0FDSixDQUNKLENBQ0osZUFDTjtJQUFLLFNBQVMsRUFBQztFQUE4QixnQkFDekM7SUFBSyxTQUFTLEVBQUMsZUFBZTtJQUFDLElBQUksRUFBQyxLQUFLO0lBQUMsRUFBRSxFQUFDO0VBQWtCLGdCQUMzRDtJQUFJLFNBQVMsRUFBQztFQUFhLGdCQUN2QjtJQUFHLFNBQVMsRUFBQyxzQkFBc0I7SUFBQyxJQUFJLEVBQUMsUUFBUTtJQUFDLGVBQVksVUFBVTtJQUNyRSxlQUFZLGtCQUFrQjtJQUFDLElBQUksRUFBQyxvQkFBb0I7SUFBQyxpQkFBYyxPQUFPO0lBQzlFLGlCQUFjO0VBQW1CLGdCQUNoQztJQUFHLFNBQVMsRUFBQywwQkFBMEI7SUFDcEMsS0FBSyxFQUFFO01BQUMrSCxRQUFRLEVBQUUsTUFBTTtNQUFFLFNBQU87SUFBTTtFQUFFLEdBQUMscUJBQW1CLENBQUksZ0NBRXhFLENBQUksQ0FDSCxDQUNILGVBQ047SUFBSyxFQUFFLEVBQUMsbUJBQW1CO0lBQUMsU0FBUyxFQUFDLHlCQUF5QjtJQUFDLElBQUksRUFBQyxVQUFVO0lBQzFFLG1CQUFnQjtFQUFrQixnQkFDbkM7SUFBSyxTQUFTLEVBQUMsYUFBYTtJQUFDLEtBQUssRUFBRTtNQUFDQyxRQUFRLEVBQUU7SUFBUTtFQUFFLGdCQUNyRDtJQUFLLFNBQVMsRUFBQyxrQ0FBa0M7SUFDNUMsS0FBSyxFQUFFO01BQUNDLEtBQUssRUFBRTtJQUFNO0VBQUUsZ0JBQ3hCO0lBQVEsU0FBUyxFQUFDLGFBQWE7SUFBQyxFQUFFLEVBQUMsY0FBYztJQUN6QyxjQUFXO0VBQXdCLGdCQUN2QztJQUFRLEtBQUssRUFBQyxFQUFFO0lBQUMsUUFBUTtJQUFDLFFBQVE7RUFBQSxHQUFDLHNCQUFpQixDQUFTLGVBQzdEO0lBQVUsS0FBSyxFQUFDO0VBQVksZ0JBQ3hCO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxjQUFZLENBQVMsZUFDN0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGlCQUFZLENBQVMsZUFDN0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFdBQVMsQ0FBUyxlQUMxQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsWUFBVSxDQUFTLGVBQzNDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxVQUFRLENBQVMsZUFDekM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFdBQVMsQ0FBUyxlQUMxQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsY0FBWSxDQUFTLGVBQzdDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxXQUFTLENBQVMsZUFDMUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGdCQUFjLENBQVMsZUFDL0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGNBQVksQ0FBUyxlQUM3QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsZUFBYSxDQUFTLGVBQzlDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxlQUFhLENBQVMsQ0FDdkMsZUFDWDtJQUFVLEtBQUssRUFBQztFQUFZLGdCQUN4QjtJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsY0FBWSxDQUFTLGVBQzdDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxpQkFBWSxDQUFTLGVBQzdDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxXQUFTLENBQVMsZUFDMUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFlBQVUsQ0FBUyxlQUMzQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsVUFBUSxDQUFTLGVBQ3pDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxXQUFTLENBQVMsZUFDMUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGNBQVksQ0FBUyxlQUM3QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsV0FBUyxD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QUFjLENBQVMsZUFDL0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGNBQVksQ0FBUyxlQUM3QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsZUFBYSxDQUFTLGVBQzlDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxlQUFhLENBQVMsZUFDOUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGNBQVksQ0FBUyxlQUM3QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsaUJBQVksQ0FBUyxlQUM3QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsV0FBUyxDQUFTLGVBQzFDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxZQUFVLENBQVMsZUFDM0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFVBQVEsQ0FBUyxlQUN6QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsV0FBUyxDQUFTLGVBQzFDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxjQUFZLENBQVMsZUFDN0M7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFdBQVMsQ0FBUyxlQUMxQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsZ0JBQWMsQ0FBUyxlQUMvQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsY0FBWSxDQUFTLGVBQzdDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxlQUFhLENBQVMsZUFDOUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLGVBQWEsQ0FBUyxlQUM5QztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsY0FBWSxDQUFTLGVBQzdDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxpQkFBWSxDQUFTLGVBQzdDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxXQUFTLENBQVMsZUFDMUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxHQUFDLFlBQVUsQ0FBUyxlQUMzQztJQUFRLEtBQUssRUFBQztFQUFTLEdBQUMsVUFBUSxDQUFTLGVBQ3pDO0lBQVEsS0FBSyxFQUFDO0VBQVMsR0FBQyxXQUFTLENBQVMsZUFDMUM7SUFBUSxLQUFLLEVBQUM7RUFBUyxH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QUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOzs7QUFHQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBzb2xkZWNvbXB0ZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29tcG9uZW50cy9jaGFudGllcnMvU29sZGVDb21wdGUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ZvbmN0aW9ucy9OdW1iZXJGb3JtYXQuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2pxdWVyeS5zaW1wbGVQYWdpbmF0aW9uLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9udW1iZXItcGFyc2UtZmxvYXQuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lcy5wYXJzZS1mbG9hdC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLnN0cmluZy5yZXBsYWNlLWFsbC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzbmV4dC5zdHJpbmcucmVwbGFjZS1hbGwuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvIHN5bmMgXlxcLlxcLy4qJCJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4vY3NzL2Jvb3RzdHJhcC5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL21kYi5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3dhdmVzLmNzcyc7XHJcbmltcG9ydCAnLi9jc3MvYWxsLXRoZW1lcy5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3NlbGVjdDIubWluLmNzcyc7XHJcbmltcG9ydCAnLi9jc3Mvc3R5bGUuY3NzJztcclxuXHJcbmltcG9ydCAnLi9qcy9ib290c3RyYXAuanMnO1xyXG5pbXBvcnQgJy4vanMvZGF0YXNjcmlwdC5qcyc7XHJcbmltcG9ydCAnLi9qcy9zZWxlY3QyLm1pbi5qcyc7XHJcbmltcG9ydCAnLi9qcy9qcXVlcnkudGFibGVUb0V4Y2VsLmpzJztcclxuaW1wb3J0ICcuL2pzL2pxdWVyeS52YWxpZGF0ZS5qcyc7XHJcbmltcG9ydCAnLi9qcy9hZG1pbi5qcyc7XHJcbmltcG9ydCAnLi9qcy9qcXVlcnkuc2ltcGxlUGFnaW5hdGlvbic7XHJcblxyXG5pbXBvcnQgJy4vY29tcG9uZW50cy9jaGFudGllcnMvU29sZGVDb21wdGUuanMnO1xyXG5cclxuIiwiaW1wb3J0IFJlYWN0LCB7dXNlRWZmZWN0LCB1c2VTdGF0ZX0gZnJvbSBcInJlYWN0XCI7XG5pbXBvcnQge2NyZWF0ZVJvb3R9IGZyb20gJ3JlYWN0LWRvbS9jbGllbnQnO1xuaW1wb3J0IFJlYWN0SFRNTFRhYmxlVG9FeGNlbCBmcm9tICdyZWFjdC1odG1sLXRhYmxlLXRvLWV4Y2VsJztcbmltcG9ydCBOdW1iZXJGb3JtYXQgZnJvbSBcIi4uLy4uL2ZvbmN0aW9ucy9OdW1iZXJGb3JtYXRcIjtcbmltcG9ydCAkIGZyb20gXCJqcXVlcnlcIjtcbmltcG9ydCAqIGFzIG1vbWVudCBmcm9tIFwibW9tZW50L21vbWVudFwiO1xuaW1wb3J0IE1vbWVudCBmcm9tIFwicmVhY3QtbW9tZW50XCI7XG5pbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XG5cbmNvbnN0IFNvbGRlQ29tcHRlID0gKCkgPT4ge1xuXG4gICAgbGV0IHN1bVJlZ2xlID0gJChcIiNzdW1SZWdsZVwiKS52YWwoKTtcbiAgICBsZXQgc3VtRGVwZW5zZSA9ICQoXCIjc3VtRGVwZW5zZVwiKS52YWwoKTtcblxuICAgIGNvbnN0IFtjYWlzc2luLCBzZXRDYWlzc2luXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbY2Fpc3NjaGFuLCBzZXRDYWlzc0NoYW50aWVyc10gPSB1c2VTdGF0ZShbXSk7XG4gICAgY29uc3QgW2NhaXNzcGVyc28sIHNldENhaXNzUGVyc29dID0gdXNlU3RhdGUoW10pO1xuICAgIGNvbnN0IFtyZWdsZW1lbnRzLCBzZXRSZWdsZW1lbnRzXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbZnJtb2lzaW50ZXJuZSwgc2V0ZnJtb2lzaW50ZXJuZV0gPSB1c2VTdGF0ZSgwKTtcbiAgICBjb25zdCBbZnJtb2lzY2hhbnRpZXJzLCBzZXRmcm1vaXNjaGFudGllcnNdID0gdXNlU3RhdGUoMCk7XG4gICAgY29uc3QgW2ZybW9pc3BlcnNvLCBzZXRmcm1vaXNwZXJzb10gPSB1c2VTdGF0ZSgwKTtcbiAgICBjb25zdCBbZnJtb2lzcmVnbGUsIHNldGZybW9pc3JlZ2xlXSA9IHVzZVN0YXRlKDApO1xuICAgIGNvbnN0IFtmcmRlcHByZXN0YSwgc2V0ZGVwcHJlc3RhXSA9IHVzZVN0YXRlKDApO1xuXG5cbiAgICBjb25zdCBmZXRjaENhaXNzZUludGVybmUgPSBhc3luYyAoKSA9PiB7XG4gICAgICAgIGNvbnN0IGRlZGUgPSBKU09OLnBhcnNlKCQoJyNjYWlzc2VpbnRlcm5lJykudmFsKCkpO1xuICAgICAgICBzZXRDYWlzc2luKGRlZGUpO1xuICAgIH07XG4gICAgY29uc3QgZmV0Y2hDYWlzc2VQZXJzbyA9IGFzeW5jICgpID0+IHtcbiAgICAgICAgY29uc3QgZGVkbyA9IEpTT04ucGFyc2UoJCgnI2NhaXNzZXBlcnNvJykudmFsKCkpO1xuICAgICAgICBzZXRDYWlzc1BlcnNvKGRlZG8pO1xuICAgIH07XG4gICAgY29uc3QgZmV0Y2hDYWlzc2VDaGFudGllcnMgPSBhc3luYyAoKSA9PiB7XG4gICAgICAgIGNvbnN0IGRlZGkgPSBKU09OLnBhcnNlKCQoJyNjYWlzc2VjaGFudGllcnMnKS52YWwoKSk7XG4gICAgICAgIHNldENhaXNzQ2hhbnRpZXJzKGRlZGkpO1xuICAgIH07XG4gICAgY29uc3QgZmV0Y2hSZWdsZW1lbnRzID0gYXN5bmMgKCkgPT4ge1xuICAgICAgICBjb25zdCBkZWRhID0gSlNPTi5wYXJzZSgkKCcjcmVnbGVtZW50cycpLnZhbCgpKTtcbiAgICAgICAgc2V0UmVnbGVtZW50cyhkZWRhKTtcbiAgICB9O1xuXG5cbiAgICBjb25zdCBmb3JtYXROdW1iZXIgPSAobnVtLCBwcmVjaXNpb24sIHNlcGFyYXRvcikgPT4ge1xuICAgICAgICBsZXQgcGFydHM7XG4gICAgICAgIG51bSA9IE51bWJlcihudW0pO1xuICAgICAgICBudW0gPSAodHlwZW9mIHByZWNpc2lvbiAhPT0gJ3VuZGVmaW5lZCcgPyBudW0udG9GaXhlZChwcmVjaXNpb24pIDogbnVtKS50b1N0cmluZygpO1xuICAgICAgICBwYXJ0cyA9IG51bS5zcGxpdCgnLicpO1xuICAgICAgICBwYXJ0c1swXSA9IHBhcnRzWzBdLnRvU3RyaW5nKCkucmVwbGFjZSgvKFxcZCkoPz0oXFxkezN9KSsoPyFcXGQpKS9nLCAnJDEnICsgKHNlcGFyYXRvcikpO1xuICAgICAgICByZXR1cm4gcGFydHMuam9pbignLCcpO1xuICAgIH1cbiAgICAkKFwiI2dldERlcGVuc2VzSW50ZXJuZXNcIikub2ZmKCkub24oXCJjaGFuZ2VcIiwgYXN5bmMgZnVuY3Rpb24gKCkge1xuICAgICAgICAkKCcjYm9uTW9pc0ludGVybmUgdGJvZHknKS5jaGlsZHJlbigpLnJlbW92ZSgpXG4gICAgICAgIGxldCBiaXZjb3VudCA9IDA7XG4gICAgICAgIGxldCBkZXcgPSAkKHRoaXMpLnZhbCgpO1xuICAgICAgICBsZXQgc3MgPSAwO1xuICAgICAgICBjYWlzc2luLm1hcCgoY2Fpc3MpID0+IHtcbiAgICAgICAgICAgIGlmIChjYWlzcy5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgbGV0IGRleiA9IG1vbWVudChjYWlzcy5kYXRlKS5mb3JtYXQoJ01NLVlZWVknKTtcbiAgICAgICAgICAgICAgICBpZiAoZGV3ID09PSBkZXopIHtcbiAgICAgICAgICAgICAgICAgICAgc3MgPSBzcyArIGNhaXNzLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgICAgc2V0ZnJtb2lzaW50ZXJuZShzcyk7XG4gICAgICAgIGNhaXNzaW4ubWFwKChjYWlzcykgPT4ge1xuICAgICAgICAgICAgaWYgKGNhaXNzLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgICAgICBsZXQgZGV6ID0gbW9tZW50KGNhaXNzLmRhdGUpLmZvcm1hdCgnTU0tWVlZWScpO1xuICAgICAgICAgICAgICAgIGlmIChkZXcgPT09IGRleikge1xuICAgICAgICAgICAgICAgICAgICBiaXZjb3VudCA9IGJpdmNvdW50ICsgMTtcbiAgICAgICAgICAgICAgICAgICAgbGV0IHBvayA9ICcnO1xuICAgICAgICAgICAgICAgICAgICBpZiAoY2Fpc3MucGVyc29ubmVsICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBwb2sgPSBjYWlzcy5wZXJzb25uZWwubm9tcy50b1VwcGVyQ2FzZSgpO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICQoJyNib25Nb2lzSW50ZXJuZSB0Ym9keScpLmFwcGVuZCgnJyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPHRyIGtleT17Y2Fpc3MuaWR9IGNsYXNzPVwicGFnaW5hdGUxMlwiPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzx0ZCBhbGlnbj1cImNlbnRlclwiIGNsYXNzPVwibXczMFwiPjxpbnB1dCBjbGFzcz1cImZvcm0tY2hlY2staW5wdXRcIiB0eXBlPVwiY2hlY2tib3hcIiB2YWx1ZT17Y2Fpc3MuaWR9IG5hbWU9XCJjaGVja0NoYUludE1vaXNcIiBpZD1cImNoZWNrQ2hhSW50TW9pc1wiLz48L3RkPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzx0ZCBjbGFzcz1cInRleHQtY2VudGVyXCI+PGEgaHJlZj1cIiNcIj48aSBjbGFzcz1cImZhIGZhLWV5ZSBjb2wtZ3JlZW5cIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPjwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnIDx0ZD48TW9tZW50IGZvcm1hdD1cIkREL01NL1lZWVlcIj4nICsgbW9tZW50KGNhaXNzLmRhdGUpLmxvY2FsZShcImZyXCIpLmZvcm1hdCgnTCcpICsgJzwvTW9tZW50PjwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPHRkPiA8YSBocmVmPVwiL2NybS9jYWlzc2UvJyArIGNhaXNzLmlkICsgJy8nICsgY2Fpc3MuY2hhbnRpZXIuaWQgKyAnXCI+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPHNwYW4gY2xhc3M9XCJiYWRnZSBiYWRnZS1waWxsIGJhZGdlLXByaW1hcnkgbS1yLTVcIj5WPC9zcGFuPicgKyBjYWlzcy5udW1jYWlzc2UgKyAnPC9hPjwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPHRkPicgKyBwb2sgKyAnPGJyLz4nICsgY2Fpc3MuY2Fpc3NlcmVmZXJlbmNlICsgJzwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPHRkIGNsYXNzPVwidGV4dC1yaWdodFwiPicgKyBmb3JtYXROdW1iZXIoY2Fpc3MubW9udGFudCwgMiwgJyAnKSArICc8L3RkPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzx0ZCBjbGFzcz1cInRleHQtbGVmdCBwcmkgYm9sbzYwMFwiPicgKyBjYWlzcy5kb2J5dXNlci5ub20udG9VcHBlckNhc2UoKSArICcgJyArIGNhaXNzLmRvYnl1c2VyLnByZW5vbXMudG9VcHBlckNhc2UoKSArICc8L3RkPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzwvdHI+J1xuICAgICAgICAgICAgICAgICAgICApXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9KTtcblxuICAgICQoXCIjZ2V0RGVwRm91clwiKS5vZmYoKS5vbihcImNoYW5nZVwiLCBhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICQoJyNkZXBmb3VyIHRib2R5JykuY2hpbGRyZW4oKS5yZW1vdmUoKVxuICAgICAgICBsZXQgY2hjb3VudCA9IDA7XG4gICAgICAgIGxldCBkZXduID0gJCh0aGlzKS52YWwoKTtcbiAgICAgICAgbGV0IHNzcyA9IDA7XG4gICAgICAgIGNhaXNzY2hhbi5tYXAoKGNhaXNzdSkgPT4ge1xuICAgICAgICAgICAgbGV0IGRlenogPSBtb21lbnQoY2Fpc3N1LmRhdGUpLmZvcm1hdCgnTU0tWVlZWScpO1xuICAgICAgICAgICAgaWYgKGRld24gPT09IGRlenopIHtcbiAgICAgICAgICAgICAgICBzc3MgPSBzc3MgKyBjYWlzc3UubW9udGFudDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgICAgIHNldGZybW9pc2NoYW50aWVycyhzc3MpO1xuICAgICAgICBjYWlzc2NoYW4ubWFwKChjYWlzc3UpID0+IHtcbiAgICAgICAgICAgIGxldCBkZXp6ID0gbW9tZW50KGNhaXNzdS5kYXRlKS5mb3JtYXQoJ01NLVlZWVknKTtcbiAgICAgICAgICAgIGlmIChkZXduID09PSBkZXp6KSB7XG4gICAgICAgICAgICAgICAgY2hjb3VudCA9IGNoY291bnQgKyAxO1xuICAgICAgICAgICAgICAgIGxldCBwb2trID0gJyc7XG4gICAgICAgICAgICAgICAgaWYgKGNhaXNzdS5ib24gIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgcG9rayA9IGNhaXNzdS5ib24uZm91cm5pc3NldXIuZm91cm5pc3NldXIudG9VcHBlckNhc2UoKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgJCgnI2RlcGZvdXIgdGJvZHknKS5hcHBlbmQoJycgK1xuICAgICAgICAgICAgICAgICAgICAnPHRyIGtleT17Y2Fpc3N1LmlkfSBjbGFzcz1cInBhZ2luYXRlMTNcIj4nICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ZCBhbGlnbj1cImNlbnRlclwiIGNsYXNzPVwibXczMFwiPjxpbnB1dCBjbGFzcz1cImZvcm0tY2hlY2staW5wdXRcIiB0eXBlPVwiY2hlY2tib3hcIiB2YWx1ZT17Y2Fpc3N1LmlkfSBuYW1lPVwiY2hlY2tDaGFuTW9pc1wiIGlkPVwiY2hlY2tDaGFuTW9pc1wiLz48L3RkPicgK1xuICAgICAgICAgICAgICAgICAgICAnPHRkIGNsYXNzPVwidGV4dC1jZW50ZXJcIj48YSBocmVmPVwiI1wiPjxpIGNsYXNzPVwiZmEgZmEtZXllIGNvbC1ncmVlblwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+PC90ZD4nICtcbiAgICAgICAgICAgICAgICAgICAgJyA8dGQ+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+JyArIG1vbWVudChjYWlzc3UuZGF0ZSkubG9jYWxlKFwiZnJcIikuZm9ybWF0KCdMJykgKyAnPC9Nb21lbnQ+PC90ZD4nICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ZD4gPGEgaHJlZj17YC9jcm0vY2Fpc3NlLyR7Y2Fpc3N1LmlkfS8ke2NhaXNzdS5jaGFudGllci5pZH1gfT4nICtcbiAgICAgICAgICAgICAgICAgICAgJzxzcGFuIGNsYXNzPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+Vjwvc3Bhbj4nICsgY2Fpc3N1Lm51bWNhaXNzZSArICc8L2E+PC90ZD4nICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ZD48c3BhbiBjbGFzcz1cImNvbC1waW5rIGJvbG83MDBcIj4nICsgcG9rayArICc8L3NwYW4+PGJyLz4nICsgY2Fpc3N1LmNhaXNzZXJlZmVyZW5jZSArICcoPGI+JyArIGNhaXNzdS5jbGllbnQubm9tY2xpZW50ICsgJyAnICsgY2Fpc3N1LmNoYW50aWVyLm5vbWNoYW50aWVyICsgJzwvYj4pPC90ZD4nICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ZCBjbGFzcz1cInRleHQtcmlnaHRcIj4nICsgZm9ybWF0TnVtYmVyKGNhaXNzdS5tb250YW50LCAyLCAnICcpICsgJzwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICc8dGQgY2xhc3M9XCJ0ZXh0LWxlZnQgcHJpIGJvbG82MDBcIj4nICsgY2Fpc3N1LmRvYnl1c2VyLm5vbS50b1VwcGVyQ2FzZSgpICsgJyAnICsgY2Fpc3N1LmRvYnl1c2VyLnByZW5vbXMudG9VcHBlckNhc2UoKSArICc8L3RkPicgK1xuICAgICAgICAgICAgICAgICAgICAnPC90cj4nXG4gICAgICAgICAgICAgICAgKVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9KTtcbiAgICAkKFwiI2dldERlcFByZXN0YVwiKS5vZmYoKS5vbihcImNoYW5nZVwiLCBhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICQoJyNkZXBwcmVzdGEgdGJvZHknKS5jaGlsZHJlbigpLnJlbW92ZSgpXG4gICAgICAgIGxldCBjaGNvdW50ID0gMDtcbiAgICAgICAgbGV0IGRld24gPSAkKHRoaXMpLnZhbCgpO1xuICAgICAgICBsZXQgc3NzID0gMDtcbiAgICAgICAgY2Fpc3NjaGFuLm1hcCgoY2Fpc3N1KSA9PiB7XG4gICAgICAgICAgICBsZXQgZGV6eiA9IG1vbWVudChjYWlzc3UuZGF0ZSkuZm9ybWF0KCdNTS1ZWVlZJyk7XG4gICAgICAgICAgICBpZiAoZGV3biA9PT0gZGV6eikge1xuICAgICAgICAgICAgICAgIGlmIChjYWlzc3UuYm9uICE9PSBudWxsICYmIGNhaXNzdS5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChjYWlzc3UuYm9uLmZvdXJuaXNzZXVyLnR5cGUgPT09IDMpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHNzcyA9IHNzcyArIGNhaXNzdS5tb250YW50O1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgICAgc2V0ZGVwcHJlc3RhKHNzcyk7XG4gICAgICAgIGNhaXNzY2hhbi5tYXAoKGNhaXNzdSkgPT4ge1xuICAgICAgICAgICAgbGV0IGRlenogPSBtb21lbnQoY2Fpc3N1LmRhdGUpLmZvcm1hdCgnTU0tWVlZWScpO1xuICAgICAgICAgICAgaWYgKGRld24gPT09IGRlenopIHtcbiAgICAgICAgICAgICAgICBjaGNvdW50ID0gY2hjb3VudCArIDE7XG4gICAgICAgICAgICAgICAgbGV0IHBva2sgPSAnJztcbiAgICAgICAgICAgICAgICBpZiAoY2Fpc3N1LmJvbiAhPT0gbnVsbCAmJiBjYWlzc3UuZXRhdCA9PT0gXCJ2YWxpZGVcIikge1xuICAgICAgICAgICAgICAgICAgICBpZiAoY2Fpc3N1LmJvbi5mb3Vybmlzc2V1ci50eXBlID09PSAzKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBwb2trID0gY2Fpc3N1LmJvbi5mb3Vybmlzc2V1ci5mb3Vybmlzc2V1ci50b1VwcGVyQ2FzZSgpO1xuICAgICAgICAgICAgICAgICAgICAgICAgJCgnI2RlcHByZXN0YSB0Ym9keScpLmFwcGVuZCgnJyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJzx0ciBrZXk9e2NhaXNzdS5pZH0gY2xhc3M9XCJwYWdpbmF0ZURlcFByZXN0YVwiPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8dGQgYWxpZ249XCJjZW50ZXJcIiBjbGFzcz1cIm13MzBcIj48aW5wdXQgY2xhc3M9XCJmb3JtLWNoZWNrLWlucHV0XCIgdHlwZT1cImNoZWNrYm94XCIgdmFsdWU9JytjYWlzc3UuaWQrJyBuYW1lPVwiY2hlY2twcmVzdGFcIiBpZD1cImNoZWNrcHJlc3RhXCIvPjwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJzx0ZCBjbGFzcz1cInRleHQtY2VudGVyXCI+PGEgaHJlZj1cIiNcIj48aSBjbGFzcz1cImZhIGZhLWV5ZSBjb2wtZ3JlZW5cIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPjwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJyA8dGQ+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+JyArIG1vbWVudChjYWlzc3UuZGF0ZSkubG9jYWxlKFwiZnJcIikuZm9ybWF0KCdMJykgKyAnPC9Nb21lbnQ+PC90ZD4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAnPHRkPiA8YSBocmVmPS9jcm0vY2Fpc3NlLycrY2Fpc3N1LmlkKycvJytjYWlzc3UuY2hhbnRpZXIuaWQrJz4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAnPHNwYW4gY2xhc3M9XCJiYWRnZSBiYWRnZS1waWxsIGJhZGdlLXByaW1hcnkgbS1yLTVcIj5WPC9zcGFuPicgKyBjYWlzc3UubnVtY2Fpc3NlICsgJzwvYT48L3RkPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8dGQ+PHNwYW4gY2xhc3M9XCJjb2wtcGluayBib2xvNzAwXCI+JyArIHBva2sgKyAnPC9zcGFuPjxici8+JyArIGNhaXNzdS5jYWlzc2VyZWZlcmVuY2UgKyAnKDxiPicgKyBjYWlzc3UuY2xpZW50Lm5vbWNsaWVudCArICcgJyArIGNhaXNzdS5jaGFudGllci5ub21jaGFudGllciArICc8L2I+KTwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJzx0ZCBjbGFzcz1cInRleHQtcmlnaHRcIj4nICsgZm9ybWF0TnVtYmVyKGNhaXNzdS5tb250YW50LCAyLCAnICcpICsgJzwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJzx0ZCBjbGFzcz1cInRleHQtbGVmdCBwcmkgYm9sbzYwMFwiPicgKyBjYWlzc3UuZG9ieXVzZXIubm9tLnRvVXBwZXJDYXNlKCkgKyAnICcgKyBjYWlzc3UuZG9ieXVzZXIucHJlbm9tcy50b1VwcGVyQ2FzZSgpICsgJzwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJzwvdHI+J1xuICAgICAgICAgICAgICAgICAgICAgICAgKVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9KTtcbiAgICAkKFwiI2dldERlcGVuc2VzUGVyc29ubmVsXCIpLm9mZigpLm9uKFwiY2hhbmdlXCIsIGFzeW5jIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJCgnI2NoYXJnZXBlcnNvbm5lbCB0Ym9keScpLmNoaWxkcmVuKCkucmVtb3ZlKClcbiAgICAgICAgbGV0IGNocGVyY291bnQgPSAwO1xuICAgICAgICBsZXQgZGVlbiA9ICQodGhpcykudmFsKCk7XG4gICAgICAgIGxldCBzYXMgPSAwO1xuXG4gICAgICAgIGNhaXNzcGVyc28ubWFwKChjYWlzZSkgPT4ge1xuICAgICAgICAgICAgbGV0IGRhenogPSBtb21lbnQoY2Fpc2UuZGF0ZSkuZm9ybWF0KCdNTS1ZWVlZJyk7XG4gICAgICAgICAgICBpZiAoZGVlbiA9PT0gZGF6eikge1xuICAgICAgICAgICAgICAgIHNhcyA9IHNhcyArIGNhaXNlLm1vbnRhbnQ7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgICAgICBzZXRmcm1vaXNwZXJzbyhzYXMpO1xuICAgICAgICBjYWlzc3BlcnNvLm1hcCgoY2Fpc2UpID0+IHtcbiAgICAgICAgICAgIGxldCBkYXp6ID0gbW9tZW50KGNhaXNlLmRhdGUpLmZvcm1hdCgnTU0tWVlZWScpO1xuICAgICAgICAgICAgaWYgKGRlZW4gPT09IGRhenopIHtcbiAgICAgICAgICAgICAgICBjaHBlcmNvdW50ID0gY2hwZXJjb3VudCArIDE7XG4gICAgICAgICAgICAgICAgbGV0IHBha2sgPSAnJztcbiAgICAgICAgICAgICAgICBpZiAoY2Fpc2UucGVyc29ubmVsICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgIHBha2sgPSBjYWlzZS5wZXJzb25uZWwubm9tcy50b1VwcGVyQ2FzZSgpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAkKCcjY2hhcmdlcGVyc29ubmVsIHRib2R5JykuYXBwZW5kKCcnICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ciBrZXk9e2NhaXNlLmlkfSBjbGFzcz1cInBhZ2luYXRlMTVcIj4nICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ZCBhbGlnbj1cImNlbnRlclwiIGNsYXNzPVwibXczMFwiPjxpbnB1dCBjbGFzcz1cImZvcm0tY2hlY2staW5wdXRcIiB0eXBlPVwiY2hlY2tib3hcIiB2YWx1ZT17Y2Fpc2UuaWR9IG5hbWU9XCJjaGVja1BlcnNvTW9pc1wiIGlkPVwiY2hlY2tQZXJzb01vaXNcIi8+PC90ZD4nICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ZCBjbGFzcz1cInRleHQtY2VudGVyXCI+PGEgaHJlZj1cIiNcIj48aSBjbGFzcz1cImZhIGZhLWV5ZSBjb2wtZ3JlZW5cIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPjwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICcgPHRkPjxNb21lbnQgZm9ybWF0PVwiREQvTU0vWVlZWVwiPicgKyBtb21lbnQoY2Fpc2UuZGF0ZSkubG9jYWxlKFwiZnJcIikuZm9ybWF0KCdMJykgKyAnPC9Nb21lbnQ+PC90ZD4nICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ZCBjbGFzcz1cImJvbG82MDBcIj48YSBocmVmPXtgL2NybS9jYWlzc2UvJHtjYWlzZS5pZH0vJHtjYWlzZS5jaGFudGllci5pZH1gfT4nICtcbiAgICAgICAgICAgICAgICAgICAgJzxzcGFuIGNsYXNzPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+Vjwvc3Bhbj4nICsgY2Fpc2UubnVtY2Fpc3NlICsgJzwvYT48L3RkPicgK1xuICAgICAgICAgICAgICAgICAgICAnPHRkPicgKyBwYWtrICsgJzxici8+JyArIGNhaXNlLmNhaXNzZXJlZmVyZW5jZSArICcoPGI+JyArIGNhaXNlLmNsaWVudC5ub21jbGllbnQgKyAnICcgKyBjYWlzZS5jaGFudGllci5ub21jaGFudGllciArICc8L2I+KTwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICc8dGQgY2xhc3M9XCJ0ZXh0LXJpZ2h0XCI+JyArIGZvcm1hdE51bWJlcihjYWlzZS5tb250YW50LCAyLCAnICcpICsgJzwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICc8dGQgY2xhc3M9XCJ0ZXh0LWxlZnQgcHJpIGJvbG82MDBcIj4nICsgY2Fpc2UuZG9ieXVzZXIubm9tLnRvVXBwZXJDYXNlKCkgKyAnICcgKyBjYWlzZS5kb2J5dXNlci5wcmVub21zLnRvVXBwZXJDYXNlKCkgKyAnPC90ZD4nICtcbiAgICAgICAgICAgICAgICAgICAgJzwvdHI+J1xuICAgICAgICAgICAgICAgIClcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfSk7XG4gICAgJChcIiNnZXRSZWdsZW1lbnRzQ2xpZW50c1wiKS5vZmYoKS5vbihcImNoYW5nZVwiLCBhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICQoJyNyZWdsZW1lbnRzbW9pcyB0Ym9keScpLmNoaWxkcmVuKCkucmVtb3ZlKClcbiAgICAgICAgbGV0IGNocmVnbGVjb3VudCA9IDA7XG4gICAgICAgIGxldCBkZWFuID0gJCh0aGlzKS52YWwoKTtcbiAgICAgICAgbGV0IHNhd3MgPSAwO1xuXG4gICAgICAgIHJlZ2xlbWVudHMubWFwKChyZWdsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGxldCBkYXp6YSA9IG1vbWVudChyZWdsZW1lbnQuZGF0ZSkuZm9ybWF0KCdNTS1ZWVlZJyk7XG4gICAgICAgICAgICBpZiAoZGVhbiA9PT0gZGF6emEpIHtcbiAgICAgICAgICAgICAgICBzYXdzID0gc2F3cyArIHBhcnNlRmxvYXQocmVnbGVtZW50Lm1vbnRhbnQpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcblxuXG4gICAgICAgIHNldGZybW9pc3JlZ2xlKHNhd3MpO1xuICAgICAgICByZWdsZW1lbnRzLm1hcCgocmVnbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBsZXQgZGF6emFhID0gbW9tZW50KHJlZ2xlbWVudC5kYXRlKS5mb3JtYXQoJ01NLVlZWVknKTtcbiAgICAgICAgICAgIGlmIChkZWFuID09PSBkYXp6YWEpIHtcbiAgICAgICAgICAgICAgICBjaHJlZ2xlY291bnQgPSBjaHJlZ2xlY291bnQgKyAxO1xuICAgICAgICAgICAgICAgIGxldCBjaGFuID0gXCIgXCI7XG4gICAgICAgICAgICAgICAgbGV0IGNsaWUgPSBcIiBcIjtcbiAgICAgICAgICAgICAgICBsZXQgcnJyID0gXCIgXCI7XG5cbiAgICAgICAgICAgICAgICBpZiAocmVnbGVtZW50LmNoYW50aWVyKSB7XG4gICAgICAgICAgICAgICAgICAgIGNoYW4gPSByZWdsZW1lbnQuY2hhbnRpZXIubm9tY2hhbnRpZXI7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgaWYgKHJlZ2xlbWVudC5mYWN0dXJlLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgcnJyID0gJzxzcGFuIGNsYXNzPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+Vjwvc3Bhbj4nO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgIHJyciA9ICc8c3BhbiBjbGFzcz1cImJhZGdlIGJhZGdlLXBpbGwgYmFkZ2Utc2Vjb25kYXJ5IG0tci01XCI+Vjwvc3Bhbj4nO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIGlmIChyZWdsZW1lbnQuY2xpZW50KSB7XG4gICAgICAgICAgICAgICAgICAgIGNsaWUgPSByZWdsZW1lbnQuY2xpZW50Lm5vbWNsaWVudDtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAkKCcjcmVnbGVtZW50c21vaXMgdGJvZHknKS5hcHBlbmQoJycgK1xuICAgICAgICAgICAgICAgICAgICAnPHRyIGtleT17cmVnbGVtZW50LmlkfSBjbGFzcz1cInBhZ2luYXRlMTZcIj4nICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ZD48TW9tZW50IGZvcm1hdD1cIkREL01NL1lZWVlcIj4nICsgbW9tZW50KHJlZ2xlbWVudC5kYXRlKS5sb2NhbGUoXCJmclwiKS5mb3JtYXQoJ0wnKSArICc8L01vbWVudD48L3RkPicgK1xuICAgICAgICAgICAgICAgICAgICAnPHRkIGNsYXNzPVwiYm9sbzYwMFwiPjxhIGhyZWY9e2AvY3JtL2RldmlzLyR7cmVnbGVtZW50LmRldmlzLmlkfS8ke3JlZ2xlbWVudC5jaGFudGllci5pZH1gfT4nICtcbiAgICAgICAgICAgICAgICAgICAgJzxzcGFuIGNsYXNzPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+Vjwvc3Bhbj4nICsgcmVnbGVtZW50LmRldmlzLmlkZGV2aXMgKyAnPC9hPjwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICc8dGQgY2xhc3M9XCJib2xvNjAwXCI+PGEgaHJlZj17YC9jcm0vZmFjdHVyZS8ke3JlZ2xlbWVudC5mYWN0dXJlLmlkfS8ke3JlZ2xlbWVudC5jaGFudGllci5pZH1gfT4nICsgcnJyICsgcmVnbGVtZW50LmZhY3R1cmUubnVtZmFjdHVyZSArICc8L2E+PC90ZD4nICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ZD48Yj4nICsgY2xpZSArICc8L2I+IHwgJyArIGNoYW4gKyAnPC90ZD4nICtcbiAgICAgICAgICAgICAgICAgICAgJzx0ZCBjbGFzcz1cInRleHQtcmlnaHRcIj4nICsgZm9ybWF0TnVtYmVyKHJlZ2xlbWVudC5tb250YW50LCAyLCAnICcpICsgJzwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICc8dGQgY2xhc3M9XCJ0ZXh0LWxlZnQgcHJpIGJvbG82MDBcIj4nICsgcmVnbGVtZW50Lm1veWVuICsgJzwvdGQ+JyArXG4gICAgICAgICAgICAgICAgICAgICc8L3RyPidcbiAgICAgICAgICAgICAgICApXG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH0pO1xuICAgICQoXCIuZGV2YWxpZGVDYWlzc2VcIikub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICQuZWFjaCgkKFwiaW5wdXRbbmFtZT0nY2hlY2twcmVzdGEnXTpjaGVja2VkXCIpLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICB3aW5kb3cuJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsIHVybDogJy9jcm0vY2Fpc3NlL2RldmFsaWRlci8nICsgJCh0aGlzKS52YWwoKSxcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCgpO1xuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG5cbiAgICB1c2VFZmZlY3QoKCkgPT4ge1xuICAgICAgICBmZXRjaENhaXNzZUludGVybmUoKTtcbiAgICAgICAgZmV0Y2hDYWlzc2VQZXJzbygpO1xuICAgICAgICBmZXRjaENhaXNzZUNoYW50aWVycygpO1xuICAgICAgICBmZXRjaFJlZ2xlbWVudHMoKTtcbiAgICB9LCBbXSk7XG5cbiAgICBsZXQgcmljb3VudCA9IDA7XG4gICAgbGV0IHNvcmVpbnRlcm5lZGViaXQgPSAwO1xuICAgIGxldCBzb3JlaW50ZXJuZWNyZWRpdCA9IDA7XG4gICAgY2Fpc3Npbi5tYXAoKGNhaXNzKSA9PiB7XG4gICAgICAgIGlmIChjYWlzcy5jb3JiZWlsbGUgPT09IG51bGwgJiYgY2Fpc3MuZXRhdCA9PT0gXCJ2YWxpZGVcIikge1xuICAgICAgICAgICAgcmljb3VudCA9IHJpY291bnQgKyAxO1xuICAgICAgICAgICAgaWYgKGNhaXNzLm9wZXJhdGlvbiA9PT0gXCJkZWJpdFwiKSB7XG4gICAgICAgICAgICAgICAgc29yZWludGVybmVkZWJpdCA9IHNvcmVpbnRlcm5lZGViaXQgKyBjYWlzcy5tb250YW50O1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgaWYgKGNhaXNzLm9wZXJhdGlvbiA9PT0gXCJjcmVkaXRcIikge1xuICAgICAgICAgICAgICAgIHNvcmVpbnRlcm5lY3JlZGl0ID0gc29yZWludGVybmVjcmVkaXQgKyBjYWlzcy5tb250YW50O1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICAgIHJldHVybiAoPD5cbiAgICAgICAgICAgIHtjYWlzcy5jb3JiZWlsbGUgPT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICB7Y2Fpc3MuZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJiA8dHIga2V5PXtjYWlzcy5pZH0gY2xhc3NOYW1lPVwicGFnaW5hdGUxMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXNzLmRhdGV9PC9Nb21lbnQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48YSBocmVmPXtgL2NybS9jYWlzc2UvJHtjYWlzcy5pZH0vJHtjYWlzcy5jaGFudGllci5pZH1gfT5DQUlTU0UgTsKwIHtjYWlzcy5udW1jYWlzc2V9PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIiBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogY2Fpc3MuY2Fpc3NlcmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj57Y2Fpc3Mub3BlcmF0aW9uID09PSAnZGViaXQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdCBudW1iPXtjYWlzcy5tb250YW50fS8+fTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPntjYWlzcy5vcGVyYXRpb24gPT09ICdjcmVkaXQnICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdCBudW1iPXtjYWlzcy5tb250YW50fS8+fTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IHByaSBib2xvNjAwXCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS11c2VyIHByaVwiPjwvaT4gJm5ic3A7e2NhaXNzLmRvYnl1c2VyLm5vbS50b1VwcGVyQ2FzZSgpICsgJyAnfSB7Y2Fpc3MuZG9ieXVzZXIucHJlbm9tcy50b1VwcGVyQ2FzZSgpfVxuICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPC90cj59XG4gICAgICAgICAgICAgICAgPC8+fVxuICAgICAgICA8Lz4pO1xuICAgIH0pO1xuXG4gICAgbGV0IHJwY291bnQgPSAwO1xuICAgIGxldCBycGRlYml0ID0gMDtcbiAgICBsZXQgcnBjcmVkaXQgPSAwO1xuICAgIGNhaXNzcGVyc28ubWFwKChjYWlzcykgPT4ge1xuICAgICAgICBpZiAoY2Fpc3MuY29yYmVpbGxlID09PSBudWxsICYmIGNhaXNzLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgIHJwY291bnQgPSBycGNvdW50ICsgMTtcbiAgICAgICAgICAgIGlmIChjYWlzcy5vcGVyYXRpb24gPT09IFwiZGViaXRcIikge1xuICAgICAgICAgICAgICAgIHJwZGViaXQgPSBycGRlYml0ICsgY2Fpc3MubW9udGFudDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGlmIChjYWlzcy5vcGVyYXRpb24gPT09IFwiY3JlZGl0XCIpIHtcbiAgICAgICAgICAgICAgICBycGNyZWRpdCA9IHJwY3JlZGl0ICsgY2Fpc3MubW9udGFudDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICB7Y2Fpc3MuY29yYmVpbGxlID09PSBudWxsICYmIDw+XG4gICAgICAgICAgICAgICAge2NhaXNzLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPHRyIGtleT17Y2Fpc3MuaWR9IGNsYXNzTmFtZT1cInBhZ2luYXRlMTFcIj5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXNzLmRhdGV9PC9Nb21lbnQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkPjxhIGhyZWY9e2AvY3JtL2NhaXNzZS8ke2NhaXNzLmlkfS8ke2NhaXNzLmNoYW50aWVyLmlkfWB9PkJPTiBERSBDQUlTU0UgTsKwIHtjYWlzcy5udW1jYWlzc2V9PC9hPlxuICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGNhaXNzLmNhaXNzZXJlZmVyZW5jZX19PjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCI+e2NhaXNzLm9wZXJhdGlvbiA9PT0gJ2RlYml0JyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdCBudW1iPXtjYWlzcy5tb250YW50fS8+fTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCI+e2NhaXNzLm9wZXJhdGlvbiA9PT0gJ2NyZWRpdCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXQgbnVtYj17Y2Fpc3MubW9udGFudH0vPn08L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IHByaSBib2xvNjAwXCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLXVzZXIgcHJpXCI+PC9pPiAmbmJzcDt7Y2Fpc3MuZG9ieXVzZXIubm9tLnRvVXBwZXJDYXNlKCkgKyAnICd9IHtjYWlzcy5kb2J5dXNlci5wcmVub21zLnRvVXBwZXJDYXNlKCl9XG4gICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgPC90cj59XG4gICAgICAgICAgICA8Lz59XG4gICAgICAgIDwvPik7XG4gICAgfSk7XG5cbiAgICBsZXQgc29sZGVFbnRyZSA9IChwYXJzZUZsb2F0KHN1bVJlZ2xlKSArIHBhcnNlRmxvYXQoc29yZWludGVybmVjcmVkaXQpICsgcGFyc2VGbG9hdChycGNyZWRpdCkpIC0gKHBhcnNlRmxvYXQoc29yZWludGVybmVkZWJpdCkgKyBwYXJzZUZsb2F0KHJwZGViaXQpICsgcGFyc2VGbG9hdChzdW1EZXBlbnNlKSk7XG5cbiAgICBjb25zdCBoYW5kbGVEZXBGb3VyID0gZXZlbnQgPT4ge1xuICAgICAgICBsZXQgZmlsdGVyID0gZXZlbnQudGFyZ2V0LnZhbHVlLnRvTG93ZXJDYXNlKCk7XG4gICAgICAgICQoXCIjZGVwZm91ciB0ci5wYWdpbmF0ZTEzXCIpLmZpbHRlcihmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLnRvZ2dsZSgkKHRoaXMpLnRleHQoKS50b0xvd2VyQ2FzZSgpLnJlcGxhY2VBbGwoJyAnLCAnJykuaW5kZXhPZihmaWx0ZXIpID4gLTEpXG4gICAgICAgIH0pO1xuICAgIH07XG4gICAgY29uc3QgaGFuZGxlRGVwUHJlc3RhID0gZXZlbnQgPT4ge1xuICAgICAgICBsZXQgZmlsdGVyID0gZXZlbnQudGFyZ2V0LnZhbHVlLnRvTG93ZXJDYXNlKCk7XG4gICAgICAgICQoXCIjZGVwcHJlc3RhIHRyLnBhZ2luYXRlRGVwUHJlc3RhXCIpLmZpbHRlcihmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLnRvZ2dsZSgkKHRoaXMpLnRleHQoKS50b0xvd2VyQ2FzZSgpLnJlcGxhY2VBbGwoJyAnLCAnJykuaW5kZXhPZihmaWx0ZXIpID4gLTEpXG4gICAgICAgIH0pO1xuICAgIH07XG4gICAgJChcIiNjaGVja0RlcFByZXN0YVwiKS5jaGFuZ2UoZnVuY3Rpb24gKCkge1xuICAgICAgICBpZiAodGhpcy5jaGVja2VkKSB7XG4gICAgICAgICAgICAkLmVhY2goJChcImlucHV0W25hbWU9J2NoZWNrcHJlc3RhJ11cIiksIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB0aGlzLmNoZWNrZWQgPSB0cnVlO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAkLmVhY2goJChcImlucHV0W25hbWU9J2NoZWNrcHJlc3RhJ11cIiksIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB0aGlzLmNoZWNrZWQgPSBmYWxzZTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSk7XG5cbiAgICBjb25zdCBoYW5kbGVCb25Nb2lzSW50ZXJuZSA9IGV2ZW50ID0+IHtcbiAgICAgICAgbGV0IGZpbHRlciA9IGV2ZW50LnRhcmdldC52YWx1ZS50b0xvd2VyQ2FzZSgpO1xuICAgICAgICAkKFwiI2Jvbk1vaXNJbnRlcm5lIHRyLnBhZ2luYXRlMTJcIikuZmlsdGVyKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQodGhpcykudG9nZ2xlKCQodGhpcykudGV4dCgpLnRvTG93ZXJDYXNlKCkucmVwbGFjZUFsbCgnICcsICcnKS5pbmRleE9mKGZpbHRlcikgPiAtMSlcbiAgICAgICAgfSk7XG4gICAgfTtcbiAgICBjb25zdCBoYW5kbGVDaGFudGllcnNNb2lzSW50ZXJuZSA9IGV2ZW50ID0+IHtcbiAgICAgICAgbGV0IGZpbHRlciA9IGV2ZW50LnRhcmdldC52YWx1ZS50b0xvd2VyQ2FzZSgpO1xuICAgICAgICAkKFwiI2NoYW50aWVyTW9pc0ludGVybmUgdHIucGFnaW5hdGUxM1wiKS5maWx0ZXIoZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCh0aGlzKS50b2dnbGUoJCh0aGlzKS50ZXh0KCkudG9Mb3dlckNhc2UoKS5yZXBsYWNlQWxsKCcgJywgJycpLmluZGV4T2YoZmlsdGVyKSA+IC0xKVxuICAgICAgICB9KTtcbiAgICB9O1xuICAgIGNvbnN0IGhhbmRsZUNoYXJnZVBlcnNvbm5lbCA9IGV2ZW50ID0+IHtcbiAgICAgICAgbGV0IGZpbHRlciA9IGV2ZW50LnRhcmdldC52YWx1ZS50b0xvd2VyQ2FzZSgpO1xuICAgICAgICAkKFwiI2NoYXJnZXBlcnNvbm5lbCB0ci5wYWdpbmF0ZTE1XCIpLmZpbHRlcihmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLnRvZ2dsZSgkKHRoaXMpLnRleHQoKS50b0xvd2VyQ2FzZSgpLnJlcGxhY2VBbGwoJyAnLCAnJykuaW5kZXhPZihmaWx0ZXIpID4gLTEpXG4gICAgICAgIH0pO1xuICAgIH07XG4gICAgY29uc3QgaGFuZGxlUmVnbGVtZW50c01vaXMgPSBldmVudCA9PiB7XG4gICAgICAgIGxldCBmaWx0ZXIgPSBldmVudC50YXJnZXQudmFsdWUudG9Mb3dlckNhc2UoKTtcbiAgICAgICAgJChcIiNyZWdsZW1lbnRzbW9pcyB0ci5wYWdpbmF0ZTE2XCIpLmZpbHRlcihmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLnRvZ2dsZSgkKHRoaXMpLnRleHQoKS50b0xvd2VyQ2FzZSgpLnJlcGxhY2VBbGwoJyAnLCAnJykuaW5kZXhPZihmaWx0ZXIpID4gLTEpXG4gICAgICAgIH0pO1xuICAgIH07XG5cbiAgICAkKFwiI2NoZWNrQ2hhSW50TW9pc1wiKS5jaGFuZ2UoZnVuY3Rpb24gKCkge1xuICAgICAgICBpZiAodGhpcy5jaGVja2VkKSB7XG4gICAgICAgICAgICAkLmVhY2goJChcImlucHV0W25hbWU9J2NoZWNrQ2hhSW50TW9pcyddXCIpLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgdGhpcy5jaGVja2VkID0gdHJ1ZTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgJC5lYWNoKCQoXCJpbnB1dFtuYW1lPSdjaGVja0NoYUludE1vaXMnXVwiKSwgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIHRoaXMuY2hlY2tlZCA9IGZhbHNlO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KTtcbiAgICAkKFwiI2NoZWNrQ2hhbk1vaXNcIikuY2hhbmdlKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgaWYgKHRoaXMuY2hlY2tlZCkge1xuICAgICAgICAgICAgJC5lYWNoKCQoXCJpbnB1dFtuYW1lPSdjaGVja0NoYW5Nb2lzJ11cIiksIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB0aGlzLmNoZWNrZWQgPSB0cnVlO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAkLmVhY2goJChcImlucHV0W25hbWU9J2NoZWNrQ2hhbk1vaXMnXVwiKSwgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIHRoaXMuY2hlY2tlZCA9IGZhbHNlO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KTtcbiAgICAkKFwiI2NoZWNrUGVyc29Nb2lzXCIpLmNoYW5nZShmdW5jdGlvbiAoKSB7XG4gICAgICAgIGlmICh0aGlzLmNoZWNrZWQpIHtcbiAgICAgICAgICAgICQuZWFjaCgkKFwiaW5wdXRbbmFtZT0nY2hlY2tQZXJzb01vaXMnXVwiKSwgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIHRoaXMuY2hlY2tlZCA9IHRydWU7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQuZWFjaCgkKFwiaW5wdXRbbmFtZT0nY2hlY2tQZXJzb01vaXMnXVwiKSwgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIHRoaXMuY2hlY2tlZCA9IGZhbHNlO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KTtcblxuXG4gICAgcmV0dXJuICg8PlxuICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC0xMlwiIHN0eWxlPXt7cGFkZGluZ0xlZnQ6IFwiMFwifX0+XG4gICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWdyb3VwXCIgaWQ9XCJhY2NvcmRpb25fMlwiIHJvbGU9XCJ0YWJsaXN0XCIgYXJpYS1tdWx0aXNlbGVjdGFibGU9XCJ0cnVlXCI+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1wcmkgc2hhZG93IG0tdC01XCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZ1wiIHJvbGU9XCJ0YWJcIiBpZD1cImhlYWRpbmdJbXBFbnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJwYW5lbC10aXRsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCAgY29sLXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtcGFyZW50PVwiI2FjY29yZGlvbkltcEVudFwiIGhyZWY9XCIjY29sbGFwc2VJbXBFbnRcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZUltcEVudFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE4cHhcIiwgZmxvYXQ6IFwibGVmdFwifX0+a2V5Ym9hcmRfYXJyb3dfZG93bjwvaT5Tb2xkZSBkZVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsJ2VudHJlcHJpc2VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2g0PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBpZD1cImNvbGxhcHNlSW1wRW50XCIgY2xhc3NOYW1lPVwicGFuZWwtY29sbGFwc2UgY29sbGFwc2VcIiByb2xlPVwidGFicGFuZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmdJbXBFbnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtYm9keSBcIiBzdHlsZT17e292ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlIHNoYWRvdyBiZy13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2NvbG9yOiBcIiM1NTVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvd1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtOFwiIHN0eWxlPXt7cGFkZGluZ1RvcDogXCIyMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJhZGdlIGJhZGdlLXBpbGwgY29sLWdyZWVuIG0tci01IGZsb2F0LWxlZnQgdmFyZWFjdFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwicmVsZUVudHJlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGl0bGU9XCJHw6luw6lyZXIgdW4gZmljaGllciBFeGNlbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZpbGVuYW1lPVwiUsOJTMOJVsOJIFNPTERFIERFIEwnRU5UUkVQUklTRVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoZWV0PVwidGFibGV4bHNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRXhcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1zdHJpcGVkIHRhYmxlLWhvdmVyIGRpc3BsYXkgbm93cmFwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwiLCBtYXJnaW5Cb3R0b206IFwiMTBweFwifX0gaWQ9XCJyZWxlUGVyc29cIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiY29sLWJsdWUtZ3JleVwiPlLDiEdMRU1FTlRTIERFUyBDTElFTlRTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiY29sLWJsdWUtZ3JleVwiPkTDiVBFTlNFUyBERVMgQ0hBTlRJRVJTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiY29sLWJsdWUtZ3JleVwiPkNIQVJHRVMgSU5URVJORVM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJjb2wtYmx1ZS1ncmV5XCI+Q0hBUkdFUyBEVSBQRVJTT05ORUw8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJjb2wtYmx1ZS1ncmV5XCI+U09MREU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7Zm9udFdlaWdodDogXCJib2xkXCIsIHRleHRBbGlnbjogXCJjZW50ZXJcIn19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17c3VtUmVnbGV9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e2ZvbnRXZWlnaHQ6IFwiYm9sZFwiLCB0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e3N1bURlcGVuc2V9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e2ZvbnRXZWlnaHQ6IFwiYm9sZFwiLCB0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e3NvcmVpbnRlcm5lZGViaXQgLSBzb3JlaW50ZXJuZWNyZWRpdH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7Zm9udFdlaWdodDogXCJib2xkXCIsIHRleHRBbGlnbjogXCJjZW50ZXJcIn19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17cnBkZWJpdCAtIHJwY3JlZGl0fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7c29sZGVFbnRyZSA+IDAgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImNvbC1ncmVlblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCIsIGZvbnRXZWlnaHQ6IFwiYm9sZFwiLCB0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXQgbnVtYj17c29sZGVFbnRyZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtzb2xkZUVudHJlID09PSAwICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJjb2wtYmx1ZS1ncmV5XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIiwgZm9udFdlaWdodDogXCJib2xkXCIsIHRleHRBbGlnbjogXCJjZW50ZXJcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdCBudW1iPXtzb2xkZUVudHJlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3NvbGRlRW50cmUgPCAwICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJjb2wtcGlua1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCIsIGZvbnRXZWlnaHQ6IFwiYm9sZFwiLCB0ZXh0QWxpZ246IFwiY2VudGVyXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxOdW1iZXJGb3JtYXQgbnVtYj17c29sZGVFbnRyZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsIHBhbmVsLXByaSBzaGFkb3cgbS10LTVcIiBzdHlsZT17e21hcmdpblRvcDogXCIyMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1oZWFkaW5nXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ0RlcENvbXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJwYW5lbC10aXRsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCAgY29sLXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtcGFyZW50PVwiI2FjY29yZGlvbkltcEVudFwiIGhyZWY9XCIjY29sbGFwc2VEZXBDb21wXCIgYXJpYS1leHBhbmRlZD1cImZhbHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWNvbnRyb2xzPVwiY29sbGFwc2VEZXBDb21wXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPkTDqXBlbnNlcyBjaGFyZ2VzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEludGVybmVzIHBhciBNb2lzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZURlcENvbXBcIiBjbGFzc05hbWU9XCJwYW5lbC1jb2xsYXBzZSBjb2xsYXBzZVwiIHJvbGU9XCJ0YWJwYW5lbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwiaGVhZGluZ0RlcENvbXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtYm9keSBcIiBzdHlsZT17e292ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlIHNoYWRvdyBiZy13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2NvbG9yOiBcIiM1NTVcIn19PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzZWxlY3QgY2xhc3NOYW1lPVwiZm9ybS1zZWxlY3RcIiBpZD1cImdldERlcGVuc2VzSW50ZXJuZXNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWw9XCJEZWZhdWx0IHNlbGVjdCBleGFtcGxlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiXCIgc2VsZWN0ZWQgZGlzYWJsZWQ+RMOpcGVuc2VzIHBhciBtb2lzPC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDEtMjAyNFwiPkpBTlZJRVIgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAyLTIwMjRcIj5Gw4lWUklFUiAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDMtMjAyNFwiPk1BUlMgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA0LTIwMjRcIj5BVlJJTCAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDUtMjAyNFwiPk1BSSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDYtMjAyNFwiPkpVSU4gMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA3LTIwMjRcIj5KVUlMTEVUIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOC0yMDI0XCI+QU9VVCAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDktMjAyNFwiPlNFUFRFTUJSRSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTAtMjAyNFwiPk9DVE9CUkUgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjExLTIwMjRcIj5OT1ZFTUJSRSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTItMjAyNFwiPkRFQ0VNQlJFIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMS0yMDI1XCI+SkFOVklFUiAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDItMjAyNVwiPkbDiVZSSUVSIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMy0yMDI1XCI+TUFSUyAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDQtMjAyNVwiPkFWUklMIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNS0yMDI1XCI+TUFJIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNi0yMDI1XCI+SlVJTiAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDctMjAyNVwiPkpVSUxMRVQgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA4LTIwMjVcIj5BT1VUIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOS0yMDI1XCI+U0VQVEVNQlJFIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMC0yMDI1XCI+T0NUT0JSRSAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTEtMjAyNVwiPk5PVkVNQlJFIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMi0yMDI1XCI+REVDRU1CUkUgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAxLTIwMjZcIj5KQU5WSUVSIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMi0yMDI2XCI+RsOJVlJJRVIgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAzLTIwMjZcIj5NQVJTIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNC0yMDI2XCI+QVZSSUwgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA1LTIwMjZcIj5NQUkgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA2LTIwMjZcIj5KVUlOIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNy0yMDI2XCI+SlVJTExFVCAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDgtMjAyNlwiPkFPVVQgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA5LTIwMjZcIj5TRVBURU1CUkUgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEwLTIwMjZcIj5PQ1RPQlJFIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMS0yMDI2XCI+Tk9WRU1CUkUgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEyLTIwMjZcIj5ERUNFTUJSRSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc2VsZWN0PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicm93XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC04XCIgc3R5bGU9e3twYWRkaW5nVG9wOiBcIjIwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCIgdGl0bGU9XCJUb3V0IHPDqWxlY3Rpb25uZXJcIj48aW5wdXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9XCJjaGVja2JveFwiIG5hbWU9XCJjaGVja0NoYUludE1vaXNcIiBpZD1cImNoZWNrQ2hhSW50TW9pc1wiLz48L3NwYW4+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSB0aXRsZT1cIlZhbGlkZXJcIiBzdHlsZT17e3RleHREZWNvcmF0aW9uOiBcIm5vbmVcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwibS1yLTUgdmFyZWFjdCBiZy1ibHVlLWdyZXkgYm9sbzcwMCBjb2wtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwiZGV2YWxpZGVDYWlzc2VcIj5WPC9hPlxuXG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJhZGdlIGJhZGdlLXBpbGwgY29sLWdyZWVuIG0tci01IGZsb2F0LWxlZnQgdmFyZWFjdFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwiYm9uTW9pc0ludGVybmVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZT1cIkfDqW7DqXJlciB1biBmaWNoaWVyIEV4Y2VsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9XCJDSEFSR0UgSU5URVJORSBQQVIgTU9JU1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoZWV0PVwidGFibGV4bHNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRXhcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTQgZmxvYXQtcmlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImlucHV0LWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZm9ybS1saW5lXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT1cInRleHRcIiBjbGFzc05hbWU9XCJmb3JtLWNvbnRyb2xcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2hhbmdlPXtoYW5kbGVCb25Nb2lzSW50ZXJuZX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcj1cIlJlY2hlcmNoZXJcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2xhc3NOYW1lPVwidGFibGUtc3RyaXBlZCB0YWJsZS1ob3ZlciBkaXNwbGF5IG5vd3JhcFwiIGlkPVwiYm9uTW9pc0ludGVybmVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpbkJvdHRvbTogXCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiIHN0eWxlPXt7Ym9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjMDAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPiM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+REFURTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MTIwXCI+TsKwIEJPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MzAwXCI+RkFDVFVSw4kgw4A8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5NT05UQU5UPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcyMDBcIj5DUkXDiSBQQVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgY29sLXdoaXRlIGJnLWJsdWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT48TnVtYmVyRm9ybWF0IG51bWI9e2ZybW9pc2ludGVybmV9Lz48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsIHBhbmVsLXByaSBzaGFkb3cgbS10LTVcIj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1oZWFkaW5nXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ0RlcEZvdXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJwYW5lbC10aXRsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCAgY29sLXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtcGFyZW50PVwiI2FjY29yZGlvbkltcEVudFwiIGhyZWY9XCIjY29sbGFwc2VEZXBGb3VyXCIgYXJpYS1leHBhbmRlZD1cImZhbHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWNvbnRyb2xzPVwiY29sbGFwc2VEZXBGb3VyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPkTDqXBlbnNlcyBkZXNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm91cm5pc3NldXJzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZURlcEZvdXJcIiBjbGFzc05hbWU9XCJwYW5lbC1jb2xsYXBzZSBjb2xsYXBzZVwiIHJvbGU9XCJ0YWJwYW5lbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwiaGVhZGluZ0RlcEZvdXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtYm9keSBcIiBzdHlsZT17e292ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlIHNoYWRvdyBiZy13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2NvbG9yOiBcIiM1NTVcIn19PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzZWxlY3QgY2xhc3NOYW1lPVwiZm9ybS1zZWxlY3RcIiBpZD1cImdldERlcEZvdXJcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWw9XCJEZWZhdWx0IHNlbGVjdCBleGFtcGxlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiXCIgc2VsZWN0ZWQgZGlzYWJsZWQ+RMOpcGVuc2VzIHBhciBtb2lzPC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDEtMjAyNFwiPkpBTlZJRVIgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAyLTIwMjRcIj5Gw4lWUklFUiAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDMtMjAyNFwiPk1BUlMgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA0LTIwMjRcIj5BVlJJTCAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDUtMjAyNFwiPk1BSSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDYtMjAyNFwiPkpVSU4gMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA3LTIwMjRcIj5KVUlMTEVUIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOC0yMDI0XCI+QU9VVCAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDktMjAyNFwiPlNFUFRFTUJSRSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTAtMjAyNFwiPk9DVE9CUkUgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjExLTIwMjRcIj5OT1ZFTUJSRSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTItMjAyNFwiPkRFQ0VNQlJFIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMS0yMDI1XCI+SkFOVklFUiAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDItMjAyNVwiPkbDiVZSSUVSIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMy0yMDI1XCI+TUFSUyAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDQtMjAyNVwiPkFWUklMIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNS0yMDI1XCI+TUFJIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNi0yMDI1XCI+SlVJTiAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDctMjAyNVwiPkpVSUxMRVQgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA4LTIwMjVcIj5BT1VUIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOS0yMDI1XCI+U0VQVEVNQlJFIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMC0yMDI1XCI+T0NUT0JSRSAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTEtMjAyNVwiPk5PVkVNQlJFIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMi0yMDI1XCI+REVDRU1CUkUgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAxLTIwMjZcIj5KQU5WSUVSIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMi0yMDI2XCI+RsOJVlJJRVIgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAzLTIwMjZcIj5NQVJTIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNC0yMDI2XCI+QVZSSUwgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA1LTIwMjZcIj5NQUkgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA2LTIwMjZcIj5KVUlOIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNy0yMDI2XCI+SlVJTExFVCAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDgtMjAyNlwiPkFPVVQgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA5LTIwMjZcIj5TRVBURU1CUkUgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEwLTIwMjZcIj5PQ1RPQlJFIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMS0yMDI2XCI+Tk9WRU1CUkUgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEyLTIwMjZcIj5ERUNFTUJSRSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc2VsZWN0PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicm93XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC04XCIgc3R5bGU9e3twYWRkaW5nVG9wOiBcIjIwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCIgdGl0bGU9XCJUb3V0IHPDqWxlY3Rpb25uZXJcIj48aW5wdXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9XCJjaGVja2JveFwiIG5hbWU9XCJjaGVja0RlcEZvdXJNb2lzXCIgaWQ9XCJjaGVja0RlcEZvdXJNb2lzXCIvPjwvc3Bhbj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIHRpdGxlPVwiRMOpdmFsaWRlclwiIHN0eWxlPXt7dGV4dERlY29yYXRpb246IFwibm9uZVwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0IGJnLWJsdWUtZ3JleSBib2xvNzAwIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJkZXZhbGlkZUNhaXNzZVwiPlY8L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJhZGdlIGJhZGdlLXBpbGwgY29sLWdyZWVuIG0tci01IGZsb2F0LWxlZnQgdmFyZWFjdFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwiRGVwZW5zZXMgZm91cm5pc3NldXJzIFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiR8OpbsOpcmVyIHVuIGZpY2hpZXIgRXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmaWxlbmFtZT1cIkTDiVBFTlNFUyBERVMgRk9JVVJOSVNTRVVSIFBBUiBNT0lTXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvblRleHQ9XCJFeFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNCBmbG9hdC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaW5wdXQtZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb3JtLWxpbmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIGNsYXNzTmFtZT1cImZvcm0tY29udHJvbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25DaGFuZ2U9e2hhbmRsZURlcEZvdXJ9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGxhY2Vob2xkZXI9XCJSZWNoZXJjaGVyXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlLXN0cmlwZWQgdGFibGUtaG92ZXIgZGlzcGxheSBub3dyYXBcIiBpZD1cImRlcGZvdXJcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpbkJvdHRvbTogXCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiIHN0eWxlPXt7Ym9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjMDAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPiM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+REFURTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MTIwXCI+TsKwIEJPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MzAwXCI+RkFDVFVSw4kgw4A8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5NT05UQU5UPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcyMDBcIj5DUkXDiSBQQVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGNvbC13aGl0ZSBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+PE51bWJlckZvcm1hdCBudW1iPXtmcm1vaXNjaGFudGllcnN9Lz48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsIHBhbmVsLXByaSBzaGFkb3cgbS10LTVcIj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1oZWFkaW5nXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ0RlcFByZXN0YVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiY29sbGFwc2VkICBjb2wtd2hpdGVcIiByb2xlPVwiYnV0dG9uXCIgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uSW1wRW50XCIgaHJlZj1cIiNjb2xsYXBzZURlcFByZXN0YVwiIGFyaWEtZXhwYW5kZWQ9XCJmYWxzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1jb250cm9scz1cImNvbGxhcHNlRGVwUHJlc3RhXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPkTDqXBlbnNlcyBkZXNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcHJlc3RhdGFpcmVzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZURlcFByZXN0YVwiIGNsYXNzTmFtZT1cInBhbmVsLWNvbGxhcHNlIGNvbGxhcHNlXCIgcm9sZT1cInRhYnBhbmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJoZWFkaW5nRGVwUHJlc3RhXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHkgXCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZSBzaGFkb3cgYmctd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tjb2xvcjogXCIjNTU1XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNlbGVjdCBjbGFzc05hbWU9XCJmb3JtLXNlbGVjdFwiIGlkPVwiZ2V0RGVwUHJlc3RhXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsPVwiRGVmYXVsdCBzZWxlY3QgZXhhbXBsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIlwiIHNlbGVjdGVkIGRpc2FibGVkPkTDqXBlbnNlcyBwYXIgbW9pczwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGdyb3VwIGxhYmVsPVwiQW5uw6llIDIwMjRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDEtMjAyNFwiPkpBTlZJRVIgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMi0yMDI0XCI+RsOJVlJJRVIgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMy0yMDI0XCI+TUFSUyAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA0LTIwMjRcIj5BVlJJTCAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA1LTIwMjRcIj5NQUkgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNi0yMDI0XCI+SlVJTiAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA3LTIwMjRcIj5KVUlMTEVUIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDgtMjAyNFwiPkFPVVQgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOS0yMDI0XCI+U0VQVEVNQlJFIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTAtMjAyNFwiPk9DVE9CUkUgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMS0yMDI0XCI+Tk9WRU1CUkUgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMi0yMDI0XCI+REVDRU1CUkUgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9vcHRncm91cD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRncm91cCBsYWJlbD1cIkFubsOpZSAyMDI1XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAxLTIwMjVcIj5KQU5WSUVSIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDItMjAyNVwiPkbDiVZSSUVSIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDMtMjAyNVwiPk1BUlMgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNC0yMDI1XCI+QVZSSUwgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNS0yMDI1XCI+TUFJIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDYtMjAyNVwiPkpVSU4gMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNy0yMDI1XCI+SlVJTExFVCAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA4LTIwMjVcIj5BT1VUIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDktMjAyNVwiPlNFUFRFTUJSRSAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEwLTIwMjVcIj5PQ1RPQlJFIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTEtMjAyNVwiPk5PVkVNQlJFIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTItMjAyNVwiPkRFQ0VNQlJFIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvb3B0Z3JvdXA+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0Z3JvdXAgbGFiZWw9XCJBbm7DqWUgMjAyNlwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMS0yMDI2XCI+SkFOVklFUiAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAyLTIwMjZcIj5Gw4lWUklFUiAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAzLTIwMjZcIj5NQVJTIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDQtMjAyNlwiPkFWUklMIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDUtMjAyNlwiPk1BSSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA2LTIwMjZcIj5KVUlOIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDctMjAyNlwiPkpVSUxMRVQgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOC0yMDI2XCI+QU9VVCAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA5LTIwMjZcIj5TRVBURU1CUkUgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMC0yMDI2XCI+T0NUT0JSRSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjExLTIwMjZcIj5OT1ZFTUJSRSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEyLTIwMjZcIj5ERUNFTUJSRSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGdyb3VwPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3NlbGVjdD5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvd1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtOFwiIHN0eWxlPXt7cGFkZGluZ1RvcDogXCIyMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3NOYW1lPVwibS1yLTUgdmFyZWFjdFwiIHRpdGxlPVwiVG91dCBzw6lsZWN0aW9ubmVyXCI+PGlucHV0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPVwiY2hlY2tib3hcIiBuYW1lPVwiY2hlY2tEZXBQcmVzdGFcIiBpZD1cImNoZWNrRGVwUHJlc3RhXCIvPjwvc3Bhbj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIHRpdGxlPVwiRMOpdmFsaWRlclwiIHN0eWxlPXt7dGV4dERlY29yYXRpb246IFwibm9uZVwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0IGJnLWJsdWUtZ3JleSBib2xvNzAwIGNvbC13aGl0ZSBkZXZhbGlkZUNhaXNzZVwiPlY8L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJhZGdlIGJhZGdlLXBpbGwgY29sLWdyZWVuIG0tci01IGZsb2F0LWxlZnQgdmFyZWFjdFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwiRGVwZW5zZXMgZm91cm5pc3NldXJzIGV0IGNoYW50aWVyc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiR8OpbsOpcmVyIHVuIGZpY2hpZXIgRXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmaWxlbmFtZT1cIkTDiVBFTlNFUyBERVMgUFJFU1RBVEFJUkVTIFBBUiBNT0lTXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvblRleHQ9XCJFeFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNCBmbG9hdC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaW5wdXQtZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb3JtLWxpbmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIGNsYXNzTmFtZT1cImZvcm0tY29udHJvbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25DaGFuZ2U9e2hhbmRsZURlcFByZXN0YX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcj1cIlJlY2hlcmNoZXJcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2xhc3NOYW1lPVwidGFibGUtc3RyaXBlZCB0YWJsZS1ob3ZlciBkaXNwbGF5IG5vd3JhcFwiIGlkPVwiZGVwcHJlc3RhXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwiLCBtYXJnaW5Cb3R0b206IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIiBzdHlsZT17e2JvcmRlckJvdHRvbTogXCIxcHggc29saWQgIzAwMFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MzAgdGV4dC1jZW50ZXJcIj4jPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPkRBVEU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzEyMFwiPk7CsCBCT048L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwMFwiPkZBQ1RVUsOJIMOAPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+TU9OVEFOVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MjAwXCI+Q1JFw4kgUEFSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGNvbC13aGl0ZSBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+PE51bWJlckZvcm1hdCBudW1iPXtmcmRlcHByZXN0YX0vPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwgcGFuZWwtcHJpIHNoYWRvdyBtLXQtNVwiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWhlYWRpbmdcIiByb2xlPVwidGFiXCIgaWQ9XCJoZWFkaW5nRGVwQ2hDaFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiY29sbGFwc2VkICBjb2wtd2hpdGVcIiByb2xlPVwiYnV0dG9uXCIgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uSW1wRW50XCIgaHJlZj1cIiNjb2xsYXBzZURlcENoQ2hcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZURlcENoQ2hcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxOHB4XCIsIGZsb2F0OiBcImxlZnRcIn19PmtleWJvYXJkX2Fycm93X2Rvd248L2k+RMOpcGVuc2VzIGRpdmVyc2VzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlcyBjaGFudGllcnMgcGFyIE1vaXNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2g0PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBpZD1cImNvbGxhcHNlRGVwQ2hDaFwiIGNsYXNzTmFtZT1cInBhbmVsLWNvbGxhcHNlIGNvbGxhcHNlXCIgcm9sZT1cInRhYnBhbmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJoZWFkaW5nRGVwQ2hDaFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1ib2R5IFwiIHN0eWxlPXt7b3ZlcmZsb3c6IFwic2Nyb2xsXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhYmxlLXJlc3BvbnNpdmUgc2hhZG93IGJnLXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Y29sb3I6IFwiIzU1NVwifX0+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNlbGVjdCBjbGFzc05hbWU9XCJmb3JtLXNlbGVjdFwiIGlkPVwiZ2V0RGVwZW5zZXNDaGFudGllcnNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWw9XCJEZWZhdWx0IHNlbGVjdCBleGFtcGxlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiXCIgc2VsZWN0ZWQgZGlzYWJsZWQ+RMOpcGVuc2VzIHBhciBtb2lzPC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0Z3JvdXAgbGFiZWw9XCJBbm7DqWUgMjAyNFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMS0yMDI0XCI+SkFOVklFUiAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAyLTIwMjRcIj5Gw4lWUklFUiAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAzLTIwMjRcIj5NQVJTIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDQtMjAyNFwiPkFWUklMIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDUtMjAyNFwiPk1BSSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA2LTIwMjRcIj5KVUlOIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDctMjAyNFwiPkpVSUxMRVQgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOC0yMDI0XCI+QU9VVCAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA5LTIwMjRcIj5TRVBURU1CUkUgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMC0yMDI0XCI+T0NUT0JSRSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjExLTIwMjRcIj5OT1ZFTUJSRSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEyLTIwMjRcIj5ERUNFTUJSRSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGdyb3VwPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGdyb3VwIGxhYmVsPVwiQW5uw6llIDIwMjVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDEtMjAyNVwiPkpBTlZJRVIgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMi0yMDI1XCI+RsOJVlJJRVIgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMy0yMDI1XCI+TUFSUyAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA0LTIwMjVcIj5BVlJJTCAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA1LTIwMjVcIj5NQUkgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNi0yMDI1XCI+SlVJTiAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA3LTIwMjVcIj5KVUlMTEVUIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDgtMjAyNVwiPkFPVVQgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOS0yMDI1XCI+U0VQVEVNQlJFIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTAtMjAyNVwiPk9DVE9CUkUgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMS0yMDI1XCI+Tk9WRU1CUkUgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMi0yMDI1XCI+REVDRU1CUkUgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9vcHRncm91cD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRncm91cCBsYWJlbD1cIkFubsOpZSAyMDI2XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAxLTIwMjZcIj5KQU5WSUVSIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDItMjAyNlwiPkbDiVZSSUVSIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDMtMjAyNlwiPk1BUlMgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNC0yMDI2XCI+QVZSSUwgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNS0yMDI2XCI+TUFJIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDYtMjAyNlwiPkpVSU4gMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNy0yMDI2XCI+SlVJTExFVCAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA4LTIwMjZcIj5BT1VUIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDktMjAyNlwiPlNFUFRFTUJSRSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEwLTIwMjZcIj5PQ1RPQlJFIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTEtMjAyNlwiPk5PVkVNQlJFIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTItMjAyNlwiPkRFQ0VNQlJFIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvb3B0Z3JvdXA+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc2VsZWN0PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicm93XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC04XCIgc3R5bGU9e3twYWRkaW5nVG9wOiBcIjIwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCIgdGl0bGU9XCJUb3V0IHPDqWxlY3Rpb25uZXJcIj48aW5wdXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9XCJjaGVja2JveFwiIG5hbWU9XCJjaGVja0NoYW5Nb2lzXCIgaWQ9XCJjaGVja0NoYW5Nb2lzXCIvPjwvc3Bhbj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIHRpdGxlPVwiVmFsaWRlclwiIHN0eWxlPXt7dGV4dERlY29yYXRpb246IFwibm9uZVwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0IGJnLWJsdWUtZ3JleSBib2xvNzAwIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJkZXZhbGlkZUNhaXNzZVwiPlY8L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJhZGdlIGJhZGdlLXBpbGwgY29sLWdyZWVuIG0tci01IGZsb2F0LWxlZnQgdmFyZWFjdFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwiRGVwZW5zZXMgZm91cm5pc3NldXJzIGV0IGNoYW50aWVyc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiR8OpbsOpcmVyIHVuIGZpY2hpZXIgRXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmaWxlbmFtZT1cIkNIQVJHRSBJTlRFUk5FIFBBUiBNT0lTXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvblRleHQ9XCJFeFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNCBmbG9hdC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaW5wdXQtZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb3JtLWxpbmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIGNsYXNzTmFtZT1cImZvcm0tY29udHJvbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25DaGFuZ2U9e2hhbmRsZUNoYW50aWVyc01vaXNJbnRlcm5lfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBsYWNlaG9sZGVyPVwiUmVjaGVyY2hlclwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1zdHJpcGVkIHRhYmxlLWhvdmVyIGRpc3BsYXkgbm93cmFwXCIgaWQ9XCJjaGFudGllck1vaXNJbnRlcm5lXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwiLCBtYXJnaW5Cb3R0b206IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIiBzdHlsZT17e2JvcmRlckJvdHRvbTogXCIxcHggc29saWQgIzAwMFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MzAgdGV4dC1jZW50ZXJcIj4jPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPkRBVEU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzEyMFwiPk7CsCBCT048L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwMFwiPkZBQ1RVUsOJIMOAPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+TU9OVEFOVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MjAwXCI+Q1JFw4kgUEFSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGNvbC13aGl0ZSBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+PE51bWJlckZvcm1hdCBudW1iPXtmcm1vaXNjaGFudGllcnN9Lz48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsIHBhbmVsLXByaSBzaGFkb3cgbS10LTVcIj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1oZWFkaW5nXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ0RlcENoUHJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJwYW5lbC10aXRsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCAgY29sLXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtcGFyZW50PVwiI2FjY29yZGlvbkltcEVudFwiIGhyZWY9XCIjY29sbGFwc2VEZXBDaFByXCIgYXJpYS1leHBhbmRlZD1cImZhbHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWNvbnRyb2xzPVwiY29sbGFwc2VEZXBDaFByXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPkNoYXJnZXMgZHUgUGVyc29ubmVsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhciBNb2lzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZURlcENoUHJcIiBjbGFzc05hbWU9XCJwYW5lbC1jb2xsYXBzZSBjb2xsYXBzZVwiIHJvbGU9XCJ0YWJwYW5lbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwiaGVhZGluZ0RlcENoUHJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtYm9keSBcIiBzdHlsZT17e292ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlIHNoYWRvdyBiZy13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2NvbG9yOiBcIiM1NTVcIn19PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzZWxlY3QgY2xhc3NOYW1lPVwiZm9ybS1zZWxlY3RcIiBpZD1cImdldERlcGVuc2VzUGVyc29ubmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsPVwiRGVmYXVsdCBzZWxlY3QgZXhhbXBsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIlwiIHNlbGVjdGVkIGRpc2FibGVkPkTDqXBlbnNlcyBwYXIgbW9pczwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAxLTIwMjRcIj5KQU5WSUVSIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMi0yMDI0XCI+RsOJVlJJRVIgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAzLTIwMjRcIj5NQVJTIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNC0yMDI0XCI+QVZSSUwgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA1LTIwMjRcIj5NQUkgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA2LTIwMjRcIj5KVUlOIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNy0yMDI0XCI+SlVJTExFVCAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDgtMjAyNFwiPkFPVVQgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA5LTIwMjRcIj5TRVBURU1CUkUgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEwLTIwMjRcIj5PQ1RPQlJFIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMS0yMDI0XCI+Tk9WRU1CUkUgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEyLTIwMjRcIj5ERUNFTUJSRSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDEtMjAyNVwiPkpBTlZJRVIgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAyLTIwMjVcIj5Gw4lWUklFUiAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDMtMjAyNVwiPk1BUlMgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA0LTIwMjVcIj5BVlJJTCAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDUtMjAyNVwiPk1BSSAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDYtMjAyNVwiPkpVSU4gMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA3LTIwMjVcIj5KVUlMTEVUIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOC0yMDI1XCI+QU9VVCAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDktMjAyNVwiPlNFUFRFTUJSRSAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTAtMjAyNVwiPk9DVE9CUkUgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjExLTIwMjVcIj5OT1ZFTUJSRSAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTItMjAyNVwiPkRFQ0VNQlJFIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMS0yMDI2XCI+SkFOVklFUiAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDItMjAyNlwiPkbDiVZSSUVSIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMy0yMDI2XCI+TUFSUyAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDQtMjAyNlwiPkFWUklMIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNS0yMDI2XCI+TUFJIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNi0yMDI2XCI+SlVJTiAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDctMjAyNlwiPkpVSUxMRVQgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA4LTIwMjZcIj5BT1VUIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOS0yMDI2XCI+U0VQVEVNQlJFIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMC0yMDI2XCI+T0NUT0JSRSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTEtMjAyNlwiPk5PVkVNQlJFIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMi0yMDI2XCI+REVDRU1CUkUgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3NlbGVjdD5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvd1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtOFwiIHN0eWxlPXt7cGFkZGluZ1RvcDogXCIyMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3NOYW1lPVwibS1yLTUgdmFyZWFjdFwiIHRpdGxlPVwiVG91dCBzw6lsZWN0aW9ubmVyXCI+PGlucHV0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPVwiY2hlY2tib3hcIiBuYW1lPVwiY2hlY2tQZXJzb01vaXNcIiBpZD1cImNoZWNrUGVyc29Nb2lzXCIvPjwvc3Bhbj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIHRpdGxlPVwiVmFsaWRlclwiIHN0eWxlPXt7dGV4dERlY29yYXRpb246IFwibm9uZVwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0IGJnLWJsdWUtZ3JleSBib2xvNzAwIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJkZXZhbGlkZUNhaXNzZVwiPlY8L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSB0aXRsZT1cIlN1cHByaW1lclwiIGlkPVwiZGVsQ2Fpc3NlXCIgY2xhc3NOYW1lPVwibS1yLTUgdmFyZWFjdFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhIGZhLXRyYXNoIGNvbC1waW5rIFwiLz48L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJhZGdlIGJhZGdlLXBpbGwgY29sLWdyZWVuIG0tci01IGZsb2F0LWxlZnQgdmFyZWFjdFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwiY2hhcmdlcGVyc29ubmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGl0bGU9XCJHw6luw6lyZXIgdW4gZmljaGllciBFeGNlbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZpbGVuYW1lPVwiQ0hBUkdFIElOVEVSTkUgUEFSIE1PSVNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGVldD1cInRhYmxleGxzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uVGV4dD1cIkV4XCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC00IGZsb2F0LXJpZ2h0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJpbnB1dC1ncm91cFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvcm0tbGluZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9XCJ0ZXh0XCIgY2xhc3NOYW1lPVwiZm9ybS1jb250cm9sXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbkNoYW5nZT17aGFuZGxlQ2hhcmdlUGVyc29ubmVsfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBsYWNlaG9sZGVyPVwiUmVjaGVyY2hlclwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1zdHJpcGVkIHRhYmxlLWhvdmVyIGRpc3BsYXkgbm93cmFwXCIgaWQ9XCJjaGFyZ2VwZXJzb25uZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpbkJvdHRvbTogXCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiIHN0eWxlPXt7Ym9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjMDAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPiM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+REFURTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MTIwXCI+TsKwIEJPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MzAwXCI+RkFDVFVSw4kgw4A8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5NT05UQU5UPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcyMDBcIj5DUkXDiSBQQVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgY29sLXdoaXRlIGJnLWJsdWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT48TnVtYmVyRm9ybWF0IG51bWI9e2ZybW9pc3BlcnNvfS8+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1wcmkgc2hhZG93IG0tdC01XCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZ1wiIHJvbGU9XCJ0YWJcIiBpZD1cImhlYWRpbmdSZWdsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiY29sbGFwc2VkICBjb2wtd2hpdGVcIiByb2xlPVwiYnV0dG9uXCIgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uSW1wRW50XCIgaHJlZj1cIiNjb2xsYXBzZVJlZ2xlXCIgYXJpYS1leHBhbmRlZD1cImZhbHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWNvbnRyb2xzPVwiY29sbGFwc2VSZWdsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE4cHhcIiwgZmxvYXQ6IFwibGVmdFwifX0+a2V5Ym9hcmRfYXJyb3dfZG93bjwvaT5Sw6hnbGVtZW50cyBkZXNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQ2xpZW50cyBwYXIgTW9pc1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvaDQ+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGlkPVwiY29sbGFwc2VSZWdsZVwiIGNsYXNzTmFtZT1cInBhbmVsLWNvbGxhcHNlIGNvbGxhcHNlXCIgcm9sZT1cInRhYnBhbmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJoZWFkaW5nUmVnbGVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtYm9keSBcIiBzdHlsZT17e292ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlIHNoYWRvdyBiZy13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2NvbG9yOiBcIiM1NTVcIn19PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzZWxlY3QgY2xhc3NOYW1lPVwiZm9ybS1zZWxlY3RcIiBpZD1cImdldFJlZ2xlbWVudHNDbGllbnRzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsPVwiRGVmYXVsdCBzZWxlY3QgZXhhbXBsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIlwiIHNlbGVjdGVkIGRpc2FibGVkPlLDqGdsZW1lbnRzIGNsaWVudHMgcGFyIG1vaXM8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMS0yMDI0XCI+SkFOVklFUiAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDItMjAyNFwiPkbDiVZSSUVSIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMy0yMDI0XCI+TUFSUyAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDQtMjAyNFwiPkFWUklMIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNS0yMDI0XCI+TUFJIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNi0yMDI0XCI+SlVJTiAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDctMjAyNFwiPkpVSUxMRVQgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA4LTIwMjRcIj5BT1VUIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOS0yMDI0XCI+U0VQVEVNQlJFIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMC0yMDI0XCI+T0NUT0JSRSAyMDI0PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTEtMjAyNFwiPk5PVkVNQlJFIDIwMjQ8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMi0yMDI0XCI+REVDRU1CUkUgMjAyNDwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAxLTIwMjVcIj5KQU5WSUVSIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwMi0yMDI1XCI+RsOJVlJJRVIgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAzLTIwMjVcIj5NQVJTIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNC0yMDI1XCI+QVZSSUwgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA1LTIwMjVcIj5NQUkgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA2LTIwMjVcIj5KVUlOIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwNy0yMDI1XCI+SlVJTExFVCAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDgtMjAyNVwiPkFPVVQgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA5LTIwMjVcIj5TRVBURU1CUkUgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEwLTIwMjVcIj5PQ1RPQlJFIDIwMjU8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIxMS0yMDI1XCI+Tk9WRU1CUkUgMjAyNTwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjEyLTIwMjVcIj5ERUNFTUJSRSAyMDI1PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDEtMjAyNlwiPkpBTlZJRVIgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjAyLTIwMjZcIj5Gw4lWUklFUiAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDMtMjAyNlwiPk1BUlMgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA0LTIwMjZcIj5BVlJJTCAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDUtMjAyNlwiPk1BSSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDYtMjAyNlwiPkpVSU4gMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjA3LTIwMjZcIj5KVUlMTEVUIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9XCIwOC0yMDI2XCI+QU9VVCAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMDktMjAyNlwiPlNFUFRFTUJSRSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTAtMjAyNlwiPk9DVE9CUkUgMjAyNjwvb3B0aW9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT1cIjExLTIwMjZcIj5OT1ZFTUJSRSAyMDI2PC9vcHRpb24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPVwiMTItMjAyNlwiPkRFQ0VNQlJFIDIwMjY8L29wdGlvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zZWxlY3Q+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLThcIiBzdHlsZT17e3BhZGRpbmdUb3A6IFwiMjBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPFJlYWN0SFRNTFRhYmxlVG9FeGNlbFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD1cInRlc3QtdGFibGUteGxzLWJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiYWRnZSBiYWRnZS1waWxsIGNvbC1ncmVlbiBtLXItNSBmbG9hdC1sZWZ0IHZhcmVhY3RcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YWJsZT1cImJvbk1vaXNSZWdsZW1lbnRzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGl0bGU9XCJHw6luw6lyZXIgdW4gZmljaGllciBFeGNlbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZpbGVuYW1lPVwiUsOIR0xFTUVOVFMgQ0xJRU5UUyBQQVIgTU9JU1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoZWV0PVwidGFibGV4bHNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRXhcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTQgZmxvYXQtcmlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImlucHV0LWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZm9ybS1saW5lXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT1cInRleHRcIiBjbGFzc05hbWU9XCJmb3JtLWNvbnRyb2xcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2hhbmdlPXtoYW5kbGVSZWdsZW1lbnRzTW9pc31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcj1cIlJlY2hlcmNoZXJcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2xhc3NOYW1lPVwidGFibGUtc3RyaXBlZCB0YWJsZS1ob3ZlciBkaXNwbGF5IG5vd3JhcFwiIGlkPVwicmVnbGVtZW50c21vaXNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpbkJvdHRvbTogXCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiIHN0eWxlPXt7Ym9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjMDAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+REFURTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MTUwXCI+REVWSVM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzE1MFwiPkZBQ1RVUkU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwMFwiPkNMSUVOVCB8IENIQU5USUVSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+TU9OVEFOVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MjAwXCI+TU9ZRU4gREUgUEFJRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBjb2wtd2hpdGUgYmctYmx1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXQgbnVtYj17ZnJtb2lzcmVnbGV9Lz48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICA8L2Rpdj5cbiAgICA8Lz4pO1xuXG59XG5cbnRyeSB7XG4gICAgY29uc3Qgcm9vdCA9IGNyZWF0ZVJvb3QoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3NldHNvbGRlY29tcHRlJykpO1xuICAgIHJvb3QucmVuZGVyKDxTb2xkZUNvbXB0ZS8+KTtcbn0gY2F0Y2ggKGUpIHtcbn1cbiIsImxldCBOdW1iZXJGb3JtYXQ7XG5leHBvcnQgZGVmYXVsdCBOdW1iZXJGb3JtYXQgPSAocHJvcHMpID0+IHtcblxuICAgIGNvbnN0IGZvcm1hdE51bWJlciA9IChudW0sIHByZWNpc2lvbiwgc2VwYXJhdG9yKSA9PiB7XG4gICAgICAgIGxldCBwYXJ0cztcbiAgICAgICAgbnVtID0gTnVtYmVyKG51bSk7XG4gICAgICAgIG51bSA9ICh0eXBlb2YgcHJlY2lzaW9uICE9PSAndW5kZWZpbmVkJyA/IG51bS50b0ZpeGVkKHByZWNpc2lvbikgOiBudW0pLnRvU3RyaW5nKCk7XG4gICAgICAgIHBhcnRzID0gbnVtLnNwbGl0KCcuJyk7XG4gICAgICAgIHBhcnRzWzBdID0gcGFydHNbMF0udG9TdHJpbmcoKS5yZXBsYWNlKC8oXFxkKSg/PShcXGR7M30pKyg/IVxcZCkpL2csICckMScgKyAoc2VwYXJhdG9yIHx8ICcsJykpO1xuICAgICAgICByZXR1cm4gcGFydHMuam9pbignLCcpO1xuICAgIH1cblxuICAgIHJldHVybiAoZm9ybWF0TnVtYmVyKHByb3BzLm51bWIsMiwgJyAnKSk7XG5cbn07XG5cbiIsIi8qKlxuICoganF1ZXJ5LnNpbXBsZVBhZ2luYXRpb24uanNcbiAqIEB2ZXJzaW9uOiB2MS4wLjBcbiAqIEBhdXRob3I6IFNlYmFzdGlhbiBNYXJ1bGFuZGEgaHR0cDovL21hcnVsYW5kYS5tZVxuICogQHNlZTogaHR0cHM6Ly9naXRodWIuY29tL3NtYXJ1bGFuZGEvanF1ZXJ5LnNpbXBsZVBhZ2luYXRpb25cbiAqL1xuXG4oZnVuY3Rpb24oJCkge1xuXG5cdCQuZm4uc2ltcGxlUGFnaW5hdGlvbiA9IGZ1bmN0aW9uKG9wdGlvbnMpIHtcblxuXHRcdGNvbnN0IGRlZmF1bHRzID0ge1xuXHRcdFx0cGVyUGFnZTogMjAsXG5cdFx0XHRjb250YWluZXJDbGFzczogJycsXG5cdFx0XHRwcmV2aW91c0J1dHRvbkNsYXNzOiAnJyxcblx0XHRcdG5leHRCdXR0b25DbGFzczogJycsXG5cdFx0XHRwcmV2aW91c0J1dHRvblRleHQ6ICc8Jyxcblx0XHRcdG5leHRCdXR0b25UZXh0OiAnPicsXG5cdFx0XHRjdXJyZW50UGFnZTogMVxuXHRcdH07XG5cblx0XHRjb25zdCBzZXR0aW5ncyA9ICQuZXh0ZW5kKHt9LCBkZWZhdWx0cywgb3B0aW9ucyk7XG5cblx0XHRyZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uKCkge1xuXHRcdFx0Y29uc3QgJHJvd3MgPSAkKG9wdGlvbnMsIHRoaXMpO1xuXHRcdFx0Y29uc3QgcGFnZXMgPSBNYXRoLmNlaWwoJHJvd3MubGVuZ3RoIC8gc2V0dGluZ3MucGVyUGFnZSk7XG5cblx0XHRcdGNvbnN0IGNvbnRhaW5lciA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xuXHRcdFx0Y29uc3QgYlByZXZpb3VzID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnYnV0dG9uJyk7XG5cdFx0XHRjb25zdCBiTmV4dCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2J1dHRvbicpO1xuXHRcdFx0Y29uc3Qgb2YgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdzcGFuJyk7XG5cblxuXHRcdFx0YlByZXZpb3VzLmlubmVySFRNTCA9IHNldHRpbmdzLnByZXZpb3VzQnV0dG9uVGV4dDtcblx0XHRcdGJOZXh0LmlubmVySFRNTCA9IHNldHRpbmdzLm5leHRCdXR0b25UZXh0O1xuXG5cdFx0XHRjb250YWluZXIuY2xhc3NOYW1lID0gc2V0dGluZ3MuY29udGFpbmVyQ2xhc3M7XG5cdFx0XHRiUHJldmlvdXMuY2xhc3NOYW1lID0gc2V0dGluZ3MucHJldmlvdXNCdXR0b25DbGFzcztcblx0XHRcdGJOZXh0LmNsYXNzTmFtZSA9IHNldHRpbmdzLm5leHRCdXR0b25DbGFzcztcblxuXHRcdFx0YlByZXZpb3VzLnN0eWxlLm1hcmdpblJpZ2h0ID0gJzhweCc7XG5cdFx0XHRiUHJldmlvdXMuY2xhc3NMaXN0LmFkZCgnYnRuJyk7XG5cdFx0XHRiUHJldmlvdXMuY2xhc3NMaXN0LmFkZCgnYmctYmx1ZScpO1xuXHRcdFx0YlByZXZpb3VzLmNsYXNzTGlzdC5hZGQoJ2JvbG83MDAnKTtcblx0XHRcdGJOZXh0LnN0eWxlLm1hcmdpbkxlZnQgPSAnOHB4Jztcblx0XHRcdGJOZXh0LmNsYXNzTGlzdC5hZGQoJ2J0bicpO1xuXHRcdFx0Yk5leHQuY2xhc3NMaXN0LmFkZCgnYmctYmx1ZScpO1xuXHRcdFx0Yk5leHQuY2xhc3NMaXN0LmFkZCgnYm9sbzcwMCcpO1xuXHRcdFx0Y29udGFpbmVyLnN0eWxlLnRleHRBbGlnbiA9IFwicmlnaHRcIjtcblx0XHRcdGNvbnRhaW5lci5zdHlsZS5tYXJnaW5Cb3R0b20gPSAnMjBweCc7XG5cblx0XHRcdGNvbnRhaW5lci5hcHBlbmRDaGlsZChiUHJldmlvdXMpO1xuXHRcdFx0Y29udGFpbmVyLmFwcGVuZENoaWxkKG9mKTtcblx0XHRcdGNvbnRhaW5lci5hcHBlbmRDaGlsZChiTmV4dCk7XG5cblx0XHRcdCQodGhpcykuYWZ0ZXIoY29udGFpbmVyKTtcblxuXHRcdFx0dXBkYXRlKCk7XG5cblx0XHRcdCQoYk5leHQpLmNsaWNrKGZ1bmN0aW9uKCkge1xuXHRcdFx0XHRpZiAoc2V0dGluZ3MuY3VycmVudFBhZ2UgKyAxID4gcGFnZXMpIHtcblx0XHRcdFx0XHRzZXR0aW5ncy5jdXJyZW50UGFnZSA9IHBhZ2VzO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlKys7XG5cdFx0XHRcdH1cblx0XHRcdFx0dXBkYXRlKCk7XG5cdFx0XHR9KTtcblxuXHRcdFx0JChiUHJldmlvdXMpLmNsaWNrKGZ1bmN0aW9uKCkge1xuXHRcdFx0XHRpZiAoc2V0dGluZ3MuY3VycmVudFBhZ2UgLSAxIDwgMSkge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlID0gMTtcblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRzZXR0aW5ncy5jdXJyZW50UGFnZS0tO1xuXHRcdFx0XHR9XG5cdFx0XHRcdHVwZGF0ZSgpO1xuXHRcdFx0fSk7XG5cblx0XHRcdGZ1bmN0aW9uIHVwZGF0ZSgpIHtcblx0XHRcdFx0Y29uc3QgZnJvbSA9ICgoc2V0dGluZ3MuY3VycmVudFBhZ2UgLSAxKSAqIHNldHRpbmdzLnBlclBhZ2UpICsgMTtcblx0XHRcdFx0bGV0IHRvID0gZnJvbSArIHNldHRpbmdzLnBlclBhZ2UgLSAxO1xuXG5cdFx0XHRcdGlmICh0byA+ICRyb3dzLmxlbmd0aCkge1xuXHRcdFx0XHRcdHRvID0gJHJvd3MubGVuZ3RoO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0JHJvd3MuaGlkZSgpO1xuXHRcdFx0XHQkcm93cy5zbGljZSgoZnJvbS0xKSwgdG8pLnNob3coKTtcblxuXHRcdFx0XHRvZi5pbm5lckhUTUwgPSBmcm9tICsgJyDDoCAnICsgdG8gKyAnIHN1ciAnICsgJHJvd3MubGVuZ3RoICsgJyBsaWduZXMnO1xuXG5cdFx0XHRcdGlmICgkcm93cy5sZW5ndGggPD0gc2V0dGluZ3MucGVyUGFnZSkge1xuXHRcdFx0XHRcdCQoY29udGFpbmVyKS5oaWRlKCk7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0JChjb250YWluZXIpLnNob3coKTtcblx0XHRcdFx0fVxuXHRcdFx0fVxuXHRcdH0pO1xuXG5cdH1cblxufShqUXVlcnkpKTtcbiIsInZhciBnbG9iYWwgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZ2xvYmFsJyk7XG52YXIgZmFpbHMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZmFpbHMnKTtcbnZhciB1bmN1cnJ5VGhpcyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi11bmN1cnJ5LXRoaXMnKTtcbnZhciB0b1N0cmluZyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy90by1zdHJpbmcnKTtcbnZhciB0cmltID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3N0cmluZy10cmltJykudHJpbTtcbnZhciB3aGl0ZXNwYWNlcyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy93aGl0ZXNwYWNlcycpO1xuXG52YXIgY2hhckF0ID0gdW5jdXJyeVRoaXMoJycuY2hhckF0KTtcbnZhciAkcGFyc2VGbG9hdCA9IGdsb2JhbC5wYXJzZUZsb2F0O1xudmFyIFN5bWJvbCA9IGdsb2JhbC5TeW1ib2w7XG52YXIgSVRFUkFUT1IgPSBTeW1ib2wgJiYgU3ltYm9sLml0ZXJhdG9yO1xudmFyIEZPUkNFRCA9IDEgLyAkcGFyc2VGbG9hdCh3aGl0ZXNwYWNlcyArICctMCcpICE9PSAtSW5maW5pdHlcbiAgLy8gTVMgRWRnZSAxOC0gYnJva2VuIHdpdGggYm94ZWQgc3ltYm9sc1xuICB8fCAoSVRFUkFUT1IgJiYgIWZhaWxzKGZ1bmN0aW9uICgpIHsgJHBhcnNlRmxvYXQoT2JqZWN0KElURVJBVE9SKSk7IH0pKTtcblxuLy8gYHBhcnNlRmxvYXRgIG1ldGhvZFxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1wYXJzZWZsb2F0LXN0cmluZ1xubW9kdWxlLmV4cG9ydHMgPSBGT1JDRUQgPyBmdW5jdGlvbiBwYXJzZUZsb2F0KHN0cmluZykge1xuICB2YXIgdHJpbW1lZFN0cmluZyA9IHRyaW0odG9TdHJpbmcoc3RyaW5nKSk7XG4gIHZhciByZXN1bHQgPSAkcGFyc2VGbG9hdCh0cmltbWVkU3RyaW5nKTtcbiAgcmV0dXJuIHJlc3VsdCA9PT0gMCAmJiBjaGFyQXQodHJpbW1lZFN0cmluZywgMCkgPT0gJy0nID8gLTAgOiByZXN1bHQ7XG59IDogJHBhcnNlRmxvYXQ7XG4iLCJ2YXIgJCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9leHBvcnQnKTtcbnZhciAkcGFyc2VGbG9hdCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9udW1iZXItcGFyc2UtZmxvYXQnKTtcblxuLy8gYHBhcnNlRmxvYXRgIG1ldGhvZFxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1wYXJzZWZsb2F0LXN0cmluZ1xuJCh7IGdsb2JhbDogdHJ1ZSwgZm9yY2VkOiBwYXJzZUZsb2F0ICE9ICRwYXJzZUZsb2F0IH0sIHtcbiAgcGFyc2VGbG9hdDogJHBhcnNlRmxvYXRcbn0pO1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyICQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZXhwb3J0Jyk7XG52YXIgY2FsbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi1jYWxsJyk7XG52YXIgdW5jdXJyeVRoaXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZnVuY3Rpb24tdW5jdXJyeS10aGlzJyk7XG52YXIgcmVxdWlyZU9iamVjdENvZXJjaWJsZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9yZXF1aXJlLW9iamVjdC1jb2VyY2libGUnKTtcbnZhciBpc0NhbGxhYmxlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLWNhbGxhYmxlJyk7XG52YXIgaXNOdWxsT3JVbmRlZmluZWQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtbnVsbC1vci11bmRlZmluZWQnKTtcbnZhciBpc1JlZ0V4cCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1yZWdleHAnKTtcbnZhciB0b1N0cmluZyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy90by1zdHJpbmcnKTtcbnZhciBnZXRNZXRob2QgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZ2V0LW1ldGhvZCcpO1xudmFyIGdldFJlZ0V4cEZsYWdzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3JlZ2V4cC1nZXQtZmxhZ3MnKTtcbnZhciBnZXRTdWJzdGl0dXRpb24gPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZ2V0LXN1YnN0aXR1dGlvbicpO1xudmFyIHdlbGxLbm93blN5bWJvbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy93ZWxsLWtub3duLXN5bWJvbCcpO1xudmFyIElTX1BVUkUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtcHVyZScpO1xuXG52YXIgUkVQTEFDRSA9IHdlbGxLbm93blN5bWJvbCgncmVwbGFjZScpO1xudmFyICRUeXBlRXJyb3IgPSBUeXBlRXJyb3I7XG52YXIgaW5kZXhPZiA9IHVuY3VycnlUaGlzKCcnLmluZGV4T2YpO1xudmFyIHJlcGxhY2UgPSB1bmN1cnJ5VGhpcygnJy5yZXBsYWNlKTtcbnZhciBzdHJpbmdTbGljZSA9IHVuY3VycnlUaGlzKCcnLnNsaWNlKTtcbnZhciBtYXggPSBNYXRoLm1heDtcblxudmFyIHN0cmluZ0luZGV4T2YgPSBmdW5jdGlvbiAoc3RyaW5nLCBzZWFyY2hWYWx1ZSwgZnJvbUluZGV4KSB7XG4gIGlmIChmcm9tSW5kZXggPiBzdHJpbmcubGVuZ3RoKSByZXR1cm4gLTE7XG4gIGlmIChzZWFyY2hWYWx1ZSA9PT0gJycpIHJldHVybiBmcm9tSW5kZXg7XG4gIHJldHVybiBpbmRleE9mKHN0cmluZywgc2VhcmNoVmFsdWUsIGZyb21JbmRleCk7XG59O1xuXG4vLyBgU3RyaW5nLnByb3RvdHlwZS5yZXBsYWNlQWxsYCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtc3RyaW5nLnByb3RvdHlwZS5yZXBsYWNlYWxsXG4kKHsgdGFyZ2V0OiAnU3RyaW5nJywgcHJvdG86IHRydWUgfSwge1xuICByZXBsYWNlQWxsOiBmdW5jdGlvbiByZXBsYWNlQWxsKHNlYXJjaFZhbHVlLCByZXBsYWNlVmFsdWUpIHtcbiAgICB2YXIgTyA9IHJlcXVpcmVPYmplY3RDb2VyY2libGUodGhpcyk7XG4gICAgdmFyIElTX1JFR19FWFAsIGZsYWdzLCByZXBsYWNlciwgc3RyaW5nLCBzZWFyY2hTdHJpbmcsIGZ1bmN0aW9uYWxSZXBsYWNlLCBzZWFyY2hMZW5ndGgsIGFkdmFuY2VCeSwgcmVwbGFjZW1lbnQ7XG4gICAgdmFyIHBvc2l0aW9uID0gMDtcbiAgICB2YXIgZW5kT2ZMYXN0TWF0Y2ggPSAwO1xuICAgIHZhciByZXN1bHQgPSAnJztcbiAgICBpZiAoIWlzTnVsbE9yVW5kZWZpbmVkKHNlYXJjaFZhbHVlKSkge1xuICAgICAgSVNfUkVHX0VYUCA9IGlzUmVnRXhwKHNlYXJjaFZhbHVlKTtcbiAgICAgIGlmIChJU19SRUdfRVhQKSB7XG4gICAgICAgIGZsYWdzID0gdG9TdHJpbmcocmVxdWlyZU9iamVjdENvZXJjaWJsZShnZXRSZWdFeHBGbGFncyhzZWFyY2hWYWx1ZSkpKTtcbiAgICAgICAgaWYgKCF+aW5kZXhPZihmbGFncywgJ2cnKSkgdGhyb3cgJFR5cGVFcnJvcignYC5yZXBsYWNlQWxsYCBkb2VzIG5vdCBhbGxvdyBub24tZ2xvYmFsIHJlZ2V4ZXMnKTtcbiAgICAgIH1cbiAgICAgIHJlcGxhY2VyID0gZ2V0TWV0aG9kKHNlYXJjaFZhbHVlLCBSRVBMQUNFKTtcbiAgICAgIGlmIChyZXBsYWNlcikge1xuICAgICAgICByZXR1cm4gY2FsbChyZXBsYWNlciwgc2VhcmNoVmFsdWUsIE8sIHJlcGxhY2VWYWx1ZSk7XG4gICAgICB9IGVsc2UgaWYgKElTX1BVUkUgJiYgSVNfUkVHX0VYUCkge1xuICAgICAgICByZXR1cm4gcmVwbGFjZSh0b1N0cmluZyhPKSwgc2VhcmNoVmFsdWUsIHJlcGxhY2VWYWx1ZSk7XG4gICAgICB9XG4gICAgfVxuICAgIHN0cmluZyA9IHRvU3RyaW5nKE8pO1xuICAgIHNlYXJjaFN0cmluZyA9IHRvU3RyaW5nKHNlYXJjaFZhbHVlKTtcbiAgICBmdW5jdGlvbmFsUmVwbGFjZSA9IGlzQ2FsbGFibGUocmVwbGFjZVZhbHVlKTtcbiAgICBpZiAoIWZ1bmN0aW9uYWxSZXBsYWNlKSByZXBsYWNlVmFsdWUgPSB0b1N0cmluZyhyZXBsYWNlVmFsdWUpO1xuICAgIHNlYXJjaExlbmd0aCA9IHNlYXJjaFN0cmluZy5sZW5ndGg7XG4gICAgYWR2YW5jZUJ5ID0gbWF4KDEsIHNlYXJjaExlbmd0aCk7XG4gICAgcG9zaXRpb24gPSBzdHJpbmdJbmRleE9mKHN0cmluZywgc2VhcmNoU3RyaW5nLCAwKTtcbiAgICB3aGlsZSAocG9zaXRpb24gIT09IC0xKSB7XG4gICAgICByZXBsYWNlbWVudCA9IGZ1bmN0aW9uYWxSZXBsYWNlXG4gICAgICAgID8gdG9TdHJpbmcocmVwbGFjZVZhbHVlKHNlYXJjaFN0cmluZywgcG9zaXRpb24sIHN0cmluZykpXG4gICAgICAgIDogZ2V0U3Vic3RpdHV0aW9uKHNlYXJjaFN0cmluZywgc3RyaW5nLCBwb3NpdGlvbiwgW10sIHVuZGVmaW5lZCwgcmVwbGFjZVZhbHVlKTtcbiAgICAgIHJlc3VsdCArPSBzdHJpbmdTbGljZShzdHJpbmcsIGVuZE9mTGFzdE1hdGNoLCBwb3NpdGlvbikgKyByZXBsYWNlbWVudDtcbiAgICAgIGVuZE9mTGFzdE1hdGNoID0gcG9zaXRpb24gKyBzZWFyY2hMZW5ndGg7XG4gICAgICBwb3NpdGlvbiA9IHN0cmluZ0luZGV4T2Yoc3RyaW5nLCBzZWFyY2hTdHJpbmcsIHBvc2l0aW9uICsgYWR2YW5jZUJ5KTtcbiAgICB9XG4gICAgaWYgKGVuZE9mTGFzdE1hdGNoIDwgc3RyaW5nLmxlbmd0aCkge1xuICAgICAgcmVzdWx0ICs9IHN0cmluZ1NsaWNlKHN0cmluZywgZW5kT2ZMYXN0TWF0Y2gpO1xuICAgIH1cbiAgICByZXR1cm4gcmVzdWx0O1xuICB9XG59KTtcbiIsIi8vIFRPRE86IFJlbW92ZSBmcm9tIGBjb3JlLWpzQDRgXG5yZXF1aXJlKCcuLi9tb2R1bGVzL2VzLnN0cmluZy5yZXBsYWNlLWFsbCcpO1xuIiwidmFyIG1hcCA9IHtcblx0XCIuL2FmXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hZi5qc1wiLFxuXHRcIi4vYWYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FmLmpzXCIsXG5cdFwiLi9hclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIuanNcIixcblx0XCIuL2FyLWR6XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1kei5qc1wiLFxuXHRcIi4vYXItZHouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWR6LmpzXCIsXG5cdFwiLi9hci1rd1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIta3cuanNcIixcblx0XCIuL2FyLWt3LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1rdy5qc1wiLFxuXHRcIi4vYXItbHlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWx5LmpzXCIsXG5cdFwiLi9hci1seS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbHkuanNcIixcblx0XCIuL2FyLW1hXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1tYS5qc1wiLFxuXHRcIi4vYXItbWEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLW1hLmpzXCIsXG5cdFwiLi9hci1wc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItcHMuanNcIixcblx0XCIuL2FyLXBzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1wcy5qc1wiLFxuXHRcIi4vYXItc2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXNhLmpzXCIsXG5cdFwiLi9hci1zYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItc2EuanNcIixcblx0XCIuL2FyLXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci10bi5qc1wiLFxuXHRcIi4vYXItdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXRuLmpzXCIsXG5cdFwiLi9hci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIuanNcIixcblx0XCIuL2F6XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hei5qc1wiLFxuXHRcIi4vYXouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2F6LmpzXCIsXG5cdFwiLi9iZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmUuanNcIixcblx0XCIuL2JlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZS5qc1wiLFxuXHRcIi4vYmdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JnLmpzXCIsXG5cdFwiLi9iZy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmcuanNcIixcblx0XCIuL2JtXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibS5qc1wiLFxuXHRcIi4vYm0uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JtLmpzXCIsXG5cdFwiLi9iblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4uanNcIixcblx0XCIuL2JuLWJkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi1iZC5qc1wiLFxuXHRcIi4vYm4tYmQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLWJkLmpzXCIsXG5cdFwiLi9ibi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4uanNcIixcblx0XCIuL2JvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iby5qc1wiLFxuXHRcIi4vYm8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JvLmpzXCIsXG5cdFwiLi9iclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnIuanNcIixcblx0XCIuL2JyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ici5qc1wiLFxuXHRcIi4vYnNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JzLmpzXCIsXG5cdFwiLi9icy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnMuanNcIixcblx0XCIuL2NhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jYS5qc1wiLFxuXHRcIi4vY2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NhLmpzXCIsXG5cdFwiLi9jc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3MuanNcIixcblx0XCIuL2NzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jcy5qc1wiLFxuXHRcIi4vY3ZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N2LmpzXCIsXG5cdFwiLi9jdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3YuanNcIixcblx0XCIuL2N5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jeS5qc1wiLFxuXHRcIi4vY3kuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N5LmpzXCIsXG5cdFwiLi9kYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGEuanNcIixcblx0XCIuL2RhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kYS5qc1wiLFxuXHRcIi4vZGVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLmpzXCIsXG5cdFwiLi9kZS1hdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtYXQuanNcIixcblx0XCIuL2RlLWF0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1hdC5qc1wiLFxuXHRcIi4vZGUtY2hcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWNoLmpzXCIsXG5cdFwiLi9kZS1jaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtY2guanNcIixcblx0XCIuL2RlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS5qc1wiLFxuXHRcIi4vZHZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2R2LmpzXCIsXG5cdFwiLi9kdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZHYuanNcIixcblx0XCIuL2VsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbC5qc1wiLFxuXHRcIi4vZWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VsLmpzXCIsXG5cdFwiLi9lbi1hdVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tYXUuanNcIixcblx0XCIuL2VuLWF1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1hdS5qc1wiLFxuXHRcIi4vZW4tY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWNhLmpzXCIsXG5cdFwiLi9lbi1jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tY2EuanNcIixcblx0XCIuL2VuLWdiXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1nYi5qc1wiLFxuXHRcIi4vZW4tZ2IuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWdiLmpzXCIsXG5cdFwiLi9lbi1pZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWUuanNcIixcblx0XCIuL2VuLWllLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pZS5qc1wiLFxuXHRcIi4vZW4taWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWlsLmpzXCIsXG5cdFwiLi9lbi1pbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWwuanNcIixcblx0XCIuL2VuLWluXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbi5qc1wiLFxuXHRcIi4vZW4taW4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWluLmpzXCIsXG5cdFwiLi9lbi1uelwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tbnouanNcIixcblx0XCIuL2VuLW56LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1uei5qc1wiLFxuXHRcIi4vZW4tc2dcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLXNnLmpzXCIsXG5cdFwiLi9lbi1zZy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tc2cuanNcIixcblx0XCIuL2VvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lby5qc1wiLFxuXHRcIi4vZW8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VvLmpzXCIsXG5cdFwiLi9lc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMuanNcIixcblx0XCIuL2VzLWRvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1kby5qc1wiLFxuXHRcIi4vZXMtZG8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLWRvLmpzXCIsXG5cdFwiLi9lcy1teFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtbXguanNcIixcblx0XCIuL2VzLW14LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1teC5qc1wiLFxuXHRcIi4vZXMtdXNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLXVzLmpzXCIsXG5cdFwiLi9lcy11cy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtdXMuanNcIixcblx0XCIuL2VzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy5qc1wiLFxuXHRcIi4vZXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V0LmpzXCIsXG5cdFwiLi9ldC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXQuanNcIixcblx0XCIuL2V1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldS5qc1wiLFxuXHRcIi4vZXUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V1LmpzXCIsXG5cdFwiLi9mYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmEuanNcIixcblx0XCIuL2ZhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mYS5qc1wiLFxuXHRcIi4vZmlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpLmpzXCIsXG5cdFwiLi9maS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmkuanNcIixcblx0XCIuL2ZpbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmlsLmpzXCIsXG5cdFwiLi9maWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpbC5qc1wiLFxuXHRcIi4vZm9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZvLmpzXCIsXG5cdFwiLi9mby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZm8uanNcIixcblx0XCIuL2ZyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci5qc1wiLFxuXHRcIi4vZnItY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNhLmpzXCIsXG5cdFwiLi9mci1jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2EuanNcIixcblx0XCIuL2ZyLWNoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jaC5qc1wiLFxuXHRcIi4vZnItY2guanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNoLmpzXCIsXG5cdFwiLi9mci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnIuanNcIixcblx0XCIuL2Z5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9meS5qc1wiLFxuXHRcIi4vZnkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2Z5LmpzXCIsXG5cdFwiLi9nYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2EuanNcIixcblx0XCIuL2dhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nYS5qc1wiLFxuXHRcIi4vZ2RcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dkLmpzXCIsXG5cdFwiLi9nZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2QuanNcIixcblx0XCIuL2dsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nbC5qc1wiLFxuXHRcIi4vZ2wuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dsLmpzXCIsXG5cdFwiLi9nb20tZGV2YVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWRldmEuanNcIixcblx0XCIuL2dvbS1kZXZhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tZGV2YS5qc1wiLFxuXHRcIi4vZ29tLWxhdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1sYXRuLmpzXCIsXG5cdFwiLi9nb20tbGF0bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWxhdG4uanNcIixcblx0XCIuL2d1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ndS5qc1wiLFxuXHRcIi4vZ3UuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2d1LmpzXCIsXG5cdFwiLi9oZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGUuanNcIixcblx0XCIuL2hlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oZS5qc1wiLFxuXHRcIi4vaGlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hpLmpzXCIsXG5cdFwiLi9oaS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGkuanNcIixcblx0XCIuL2hyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oci5qc1wiLFxuXHRcIi4vaHIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hyLmpzXCIsXG5cdFwiLi9odVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHUuanNcIixcblx0XCIuL2h1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9odS5qc1wiLFxuXHRcIi4vaHktYW1cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h5LWFtLmpzXCIsXG5cdFwiLi9oeS1hbS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHktYW0uanNcIixcblx0XCIuL2lkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pZC5qc1wiLFxuXHRcIi4vaWQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lkLmpzXCIsXG5cdFwiLi9pc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXMuanNcIixcblx0XCIuL2lzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pcy5qc1wiLFxuXHRcIi4vaXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LmpzXCIsXG5cdFwiLi9pdC1jaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQtY2guanNcIixcblx0XCIuL2l0LWNoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC1jaC5qc1wiLFxuXHRcIi4vaXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LmpzXCIsXG5cdFwiLi9qYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvamEuanNcIixcblx0XCIuL2phLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qYS5qc1wiLFxuXHRcIi4vanZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2p2LmpzXCIsXG5cdFwiLi9qdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvanYuanNcIixcblx0XCIuL2thXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rYS5qc1wiLFxuXHRcIi4va2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2thLmpzXCIsXG5cdFwiLi9ra1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2suanNcIixcblx0XCIuL2trLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ray5qc1wiLFxuXHRcIi4va21cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ttLmpzXCIsXG5cdFwiLi9rbS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva20uanNcIixcblx0XCIuL2tuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbi5qc1wiLFxuXHRcIi4va24uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tuLmpzXCIsXG5cdFwiLi9rb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva28uanNcIixcblx0XCIuL2tvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rby5qc1wiLFxuXHRcIi4va3VcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LmpzXCIsXG5cdFwiLi9rdS1rbXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LWttci5qc1wiLFxuXHRcIi4va3Uta21yLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS1rbXIuanNcIixcblx0XCIuL2t1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS5qc1wiLFxuXHRcIi4va3lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t5LmpzXCIsXG5cdFwiLi9reS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3kuanNcIixcblx0XCIuL2xiXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sYi5qc1wiLFxuXHRcIi4vbGIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xiLmpzXCIsXG5cdFwiLi9sb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbG8uanNcIixcblx0XCIuL2xvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sby5qc1wiLFxuXHRcIi4vbHRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x0LmpzXCIsXG5cdFwiLi9sdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHQuanNcIixcblx0XCIuL2x2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdi5qc1wiLFxuXHRcIi4vbHYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x2LmpzXCIsXG5cdFwiLi9tZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWUuanNcIixcblx0XCIuL21lLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tZS5qc1wiLFxuXHRcIi4vbWlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21pLmpzXCIsXG5cdFwiLi9taS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWkuanNcIixcblx0XCIuL21rXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tay5qc1wiLFxuXHRcIi4vbWsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21rLmpzXCIsXG5cdFwiLi9tbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWwuanNcIixcblx0XCIuL21sLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbC5qc1wiLFxuXHRcIi4vbW5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21uLmpzXCIsXG5cdFwiLi9tbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbW4uanNcIixcblx0XCIuL21yXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tci5qc1wiLFxuXHRcIi4vbXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21yLmpzXCIsXG5cdFwiLi9tc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMuanNcIixcblx0XCIuL21zLW15XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy1teS5qc1wiLFxuXHRcIi4vbXMtbXkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLW15LmpzXCIsXG5cdFwiLi9tcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMuanNcIixcblx0XCIuL210XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tdC5qc1wiLFxuXHRcIi4vbXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL210LmpzXCIsXG5cdFwiLi9teVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXkuanNcIixcblx0XCIuL215LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9teS5qc1wiLFxuXHRcIi4vbmJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25iLmpzXCIsXG5cdFwiLi9uYi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmIuanNcIixcblx0XCIuL25lXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uZS5qc1wiLFxuXHRcIi4vbmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25lLmpzXCIsXG5cdFwiLi9ubFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwuanNcIixcblx0XCIuL25sLWJlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC1iZS5qc1wiLFxuXHRcIi4vbmwtYmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLWJlLmpzXCIsXG5cdFwiLi9ubC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwuanNcIixcblx0XCIuL25uXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubi5qc1wiLFxuXHRcIi4vbm4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25uLmpzXCIsXG5cdFwiLi9vYy1sbmNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL29jLWxuYy5qc1wiLFxuXHRcIi4vb2MtbG5jLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9vYy1sbmMuanNcIixcblx0XCIuL3BhLWluXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wYS1pbi5qc1wiLFxuXHRcIi4vcGEtaW4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BhLWluLmpzXCIsXG5cdFwiLi9wbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGwuanNcIixcblx0XCIuL3BsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wbC5qc1wiLFxuXHRcIi4vcHRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LmpzXCIsXG5cdFwiLi9wdC1iclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQtYnIuanNcIixcblx0XCIuL3B0LWJyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC1ici5qc1wiLFxuXHRcIi4vcHQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LmpzXCIsXG5cdFwiLi9yb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcm8uanNcIixcblx0XCIuL3JvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9yby5qc1wiLFxuXHRcIi4vcnVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3J1LmpzXCIsXG5cdFwiLi9ydS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcnUuanNcIixcblx0XCIuL3NkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZC5qc1wiLFxuXHRcIi4vc2QuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NkLmpzXCIsXG5cdFwiLi9zZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2UuanNcIixcblx0XCIuL3NlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZS5qc1wiLFxuXHRcIi4vc2lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NpLmpzXCIsXG5cdFwiLi9zaS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2kuanNcIixcblx0XCIuL3NrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zay5qc1wiLFxuXHRcIi4vc2suanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NrLmpzXCIsXG5cdFwiLi9zbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2wuanNcIixcblx0XCIuL3NsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zbC5qc1wiLFxuXHRcIi4vc3FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NxLmpzXCIsXG5cdFwiLi9zcS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3EuanNcIixcblx0XCIuL3NyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci5qc1wiLFxuXHRcIi4vc3ItY3lybFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3ItY3lybC5qc1wiLFxuXHRcIi4vc3ItY3lybC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3ItY3lybC5qc1wiLFxuXHRcIi4vc3IuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLmpzXCIsXG5cdFwiLi9zc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3MuanNcIixcblx0XCIuL3NzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcy5qc1wiLFxuXHRcIi4vc3ZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N2LmpzXCIsXG5cdFwiLi9zdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3YuanNcIixcblx0XCIuL3N3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdy5qc1wiLFxuXHRcIi4vc3cuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N3LmpzXCIsXG5cdFwiLi90YVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGEuanNcIixcblx0XCIuL3RhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90YS5qc1wiLFxuXHRcIi4vdGVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RlLmpzXCIsXG5cdFwiLi90ZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGUuanNcIixcblx0XCIuL3RldFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGV0LmpzXCIsXG5cdFwiLi90ZXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RldC5qc1wiLFxuXHRcIi4vdGdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RnLmpzXCIsXG5cdFwiLi90Zy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGcuanNcIixcblx0XCIuL3RoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90aC5qc1wiLFxuXHRcIi4vdGguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RoLmpzXCIsXG5cdFwiLi90a1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGsuanNcIixcblx0XCIuL3RrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ay5qc1wiLFxuXHRcIi4vdGwtcGhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsLXBoLmpzXCIsXG5cdFwiLi90bC1waC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGwtcGguanNcIixcblx0XCIuL3RsaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGxoLmpzXCIsXG5cdFwiLi90bGguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsaC5qc1wiLFxuXHRcIi4vdHJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RyLmpzXCIsXG5cdFwiLi90ci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHIuanNcIixcblx0XCIuL3R6bFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHpsLmpzXCIsXG5cdFwiLi90emwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bC5qc1wiLFxuXHRcIi4vdHptXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0uanNcIixcblx0XCIuL3R6bS1sYXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0tbGF0bi5qc1wiLFxuXHRcIi4vdHptLWxhdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS1sYXRuLmpzXCIsXG5cdFwiLi90em0uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS5qc1wiLFxuXHRcIi4vdWctY25cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VnLWNuLmpzXCIsXG5cdFwiLi91Zy1jbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWctY24uanNcIixcblx0XCIuL3VrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ay5qc1wiLFxuXHRcIi4vdWsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VrLmpzXCIsXG5cdFwiLi91clwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXIuanNcIixcblx0XCIuL3VyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ci5qc1wiLFxuXHRcIi4vdXpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LmpzXCIsXG5cdFwiLi91ei1sYXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei1sYXRuLmpzXCIsXG5cdFwiLi91ei1sYXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei1sYXRuLmpzXCIsXG5cdFwiLi91ei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXouanNcIixcblx0XCIuL3ZpXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS92aS5qc1wiLFxuXHRcIi4vdmkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3ZpLmpzXCIsXG5cdFwiLi94LXBzZXVkb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveC1wc2V1ZG8uanNcIixcblx0XCIuL3gtcHNldWRvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS94LXBzZXVkby5qc1wiLFxuXHRcIi4veW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3lvLmpzXCIsXG5cdFwiLi95by5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveW8uanNcIixcblx0XCIuL3poLWNuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1jbi5qc1wiLFxuXHRcIi4vemgtY24uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWNuLmpzXCIsXG5cdFwiLi96aC1oa1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtaGsuanNcIixcblx0XCIuL3poLWhrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1oay5qc1wiLFxuXHRcIi4vemgtbW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLW1vLmpzXCIsXG5cdFwiLi96aC1tby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtbW8uanNcIixcblx0XCIuL3poLXR3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC10dy5qc1wiLFxuXHRcIi4vemgtdHcuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLXR3LmpzXCJcbn07XG5cblxuZnVuY3Rpb24gd2VicGFja0NvbnRleHQocmVxKSB7XG5cdHZhciBpZCA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpO1xuXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhpZCk7XG59XG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKSB7XG5cdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8obWFwLCByZXEpKSB7XG5cdFx0dmFyIGUgPSBuZXcgRXJyb3IoXCJDYW5ub3QgZmluZCBtb2R1bGUgJ1wiICsgcmVxICsgXCInXCIpO1xuXHRcdGUuY29kZSA9ICdNT0RVTEVfTk9UX0ZPVU5EJztcblx0XHR0aHJvdyBlO1xuXHR9XG5cdHJldHVybiBtYXBbcmVxXTtcbn1cbndlYnBhY2tDb250ZXh0LmtleXMgPSBmdW5jdGlvbiB3ZWJwYWNrQ29udGV4dEtleXMoKSB7XG5cdHJldHVybiBPYmplY3Qua2V5cyhtYXApO1xufTtcbndlYnBhY2tDb250ZXh0LnJlc29sdmUgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmU7XG5tb2R1bGUuZXhwb3J0cyA9IHdlYnBhY2tDb250ZXh0O1xud2VicGFja0NvbnRleHQuaWQgPSBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUgc3luYyByZWN1cnNpdmUgXlxcXFwuXFxcXC8uKiRcIjsiXSwibmFtZXMiOlsiUmVhY3QiLCJ1c2VFZmZlY3QiLCJ1c2VTdGF0ZSIsImNyZWF0ZVJvb3QiLCJSZWFjdEhUTUxUYWJsZVRvRXhjZWwiLCJOdW1iZXJGb3JtYXQiLCIkIiwibW9tZW50IiwiTW9tZW50IiwiYXhpb3MiLCJTb2xkZUNvbXB0ZSIsInN1bVJlZ2xlIiwidmFsIiwic3VtRGVwZW5zZSIsImNhaXNzaW4iLCJzZXRDYWlzc2luIiwiY2Fpc3NjaGFuIiwic2V0Q2Fpc3NDaGFudGllcnMiLCJjYWlzc3BlcnNvIiwic2V0Q2Fpc3NQZXJzbyIsInJlZ2xlbWVudHMiLCJzZXRSZWdsZW1lbnRzIiwiZnJtb2lzaW50ZXJuZSIsInNldGZybW9pc2ludGVybmUiLCJmcm1vaXNjaGFudGllcnMiLCJzZXRmcm1vaXNjaGFudGllcnMiLCJmcm1vaXNwZXJzbyIsInNldGZybW9pc3BlcnNvIiwiZnJtb2lzcmVnbGUiLCJzZXRmcm1vaXNyZWdsZSIsImZyZGVwcHJlc3RhIiwic2V0ZGVwcHJlc3RhIiwiZmV0Y2hDYWlzc2VJbnRlcm5lIiwiZGVkZSIsIkpTT04iLCJwYXJzZSIsImZldGNoQ2Fpc3NlUGVyc28iLCJkZWRvIiwiZmV0Y2hDYWlzc2VDaGFudGllcnMiLCJkZWRpIiwiZmV0Y2hSZWdsZW1lbnRzIiwiZGVkYSIsImZvcm1hdE51bWJlciIsIm51bSIsInByZWNpc2lvbiIsInNlcGFyYXRvciIsInBhcnRzIiwiTnVtYmVyIiwidG9GaXhlZCIsInRvU3RyaW5nIiwic3BsaXQiLCJyZXBsYWNlIiwiam9pbiIsIm9mZiIsIm9uIiwiY2hpbGRyZW4iLCJyZW1vdmUiLCJiaXZjb3VudCIsImRldyIsInNzIiwibWFwIiwiY2Fpc3MiLCJldGF0IiwiZGV6IiwiZGF0ZSIsImZvcm1hdCIsIm1vbnRhbnQiLCJwb2siLCJwZXJzb25uZWwiLCJub21zIiwidG9VcHBlckNhc2UiLCJhcHBlbmQiLCJsb2NhbGUiLCJpZCIsImNoYW50aWVyIiwibnVtY2Fpc3NlIiwiY2Fpc3NlcmVmZXJlbmNlIiwiZG9ieXVzZXIiLCJub20iLCJwcmVub21zIiwiY2hjb3VudCIsImRld24iLCJzc3MiLCJjYWlzc3UiLCJkZXp6IiwicG9rayIsImJvbiIsImZvdXJuaXNzZXVyIiwiY2xpZW50Iiwibm9tY2xpZW50Iiwibm9tY2hhbnRpZXIiLCJ0eXBlIiwiY2hwZXJjb3VudCIsImRlZW4iLCJzYXMiLCJjYWlzZSIsImRhenoiLCJwYWtrIiwiY2hyZWdsZWNvdW50IiwiZGVhbiIsInNhd3MiLCJyZWdsZW1lbnQiLCJkYXp6YSIsInBhcnNlRmxvYXQiLCJkYXp6YWEiLCJjaGFuIiwiY2xpZSIsInJyciIsImZhY3R1cmUiLCJkZXZpcyIsImlkZGV2aXMiLCJudW1mYWN0dXJlIiwibW95ZW4iLCJlYWNoIiwid2luZG93IiwibW9kYWwiLCJtZXRob2QiLCJ1cmwiLCJ0aGVuIiwicmVzcG9uc2UiLCJsb2NhdGlvbiIsInJlbG9hZCIsImVycm9yIiwicmljb3VudCIsInNvcmVpbnRlcm5lZGViaXQiLCJzb3JlaW50ZXJuZWNyZWRpdCIsImNvcmJlaWxsZSIsIm9wZXJhdGlvbiIsIl9faHRtbCIsInJwY291bnQiLCJycGRlYml0IiwicnBjcmVkaXQiLCJzb2xkZUVudHJlIiwiaGFuZGxlRGVwRm91ciIsImV2ZW50IiwiZmlsdGVyIiwidGFyZ2V0IiwidmFsdWUiLCJ0b0xvd2VyQ2FzZSIsInRvZ2dsZSIsInRleHQiLCJyZXBsYWNlQWxsIiwiaW5kZXhPZiIsImhhbmRsZURlcFByZXN0YSIsImNoYW5nZSIsImNoZWNrZWQiLCJoYW5kbGVCb25Nb2lzSW50ZXJuZSIsImhhbmRsZUNoYW50aWVyc01vaXNJbnRlcm5lIiwiaGFuZGxlQ2hhcmdlUGVyc29ubmVsIiwiaGFuZGxlUmVnbGVtZW50c01vaXMiLCJwYWRkaW5nTGVmdCIsImZvbnRTaXplIiwib3ZlcmZsb3ciLCJjb2xvciIsInBhZGRpbmdUb3AiLCJ3aWR0aCIsIm1hcmdpbkJvdHRvbSIsImZvbnRXZWlnaHQiLCJ0ZXh0QWxpZ24iLCJ3aGl0ZVNwYWNlIiwibWFyZ2luVG9wIiwidGV4dERlY29yYXRpb24iLCJib3JkZXJCb3R0b20iLCJyb290IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInJlbmRlciIsImUiLCJwcm9wcyIsIm51bWIiLCJmbiIsInNpbXBsZVBhZ2luYXRpb24iLCJvcHRpb25zIiwiZGVmYXVsdHMiLCJwZXJQYWdlIiwiY29udGFpbmVyQ2xhc3MiLCJwcmV2aW91c0J1dHRvbkNsYXNzIiwibmV4dEJ1dHRvbkNsYXNzIiwicHJldmlvdXNCdXR0b25UZXh0IiwibmV4dEJ1dHRvblRleHQiLCJjdXJyZW50UGFnZSIsInNldHRpbmdzIiwiZXh0ZW5kIiwiJHJvd3MiLCJwYWdlcyIsIk1hdGgiLCJjZWlsIiwibGVuZ3RoIiwiY29udGFpbmVyIiwiY3JlYXRlRWxlbWVudCIsImJQcmV2aW91cyIsImJOZXh0Iiwib2YiLCJpbm5lckhUTUwiLCJjbGFzc05hbWUiLCJzdHlsZSIsIm1hcmdpblJpZ2h0IiwiY2xhc3NMaXN0IiwiYWRkIiwibWFyZ2luTGVmdCIsImFwcGVuZENoaWxkIiwiYWZ0ZXIiLCJ1cGRhdGUiLCJjbGljayIsImZyb20iLCJ0byIsImhpZGUiLCJzbGljZSIsInNob3ciLCJqUXVlcnkiXSwic291cmNlUm9vdCI6IiJ9