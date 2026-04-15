(self["webpackChunk"] = self["webpackChunk"] || []).push([["apcomptesclients"],{

/***/ "./assets/apcomptesclients.js":
/*!************************************!*\
  !*** ./assets/apcomptesclients.js ***!
  \************************************/
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
/* harmony import */ var _components_chantiers_ComptesClients_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./components/chantiers/ComptesClients.js */ "./assets/components/chantiers/ComptesClients.js");















/***/ }),

/***/ "./assets/components/chantiers/ComptesClients.js":
/*!*******************************************************!*\
  !*** ./assets/components/chantiers/ComptesClients.js ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.parse-float.js */ "./node_modules/core-js/modules/es.parse-float.js");
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_esnext_string_replace_all_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/esnext.string.replace-all.js */ "./node_modules/core-js/modules/esnext.string.replace-all.js");
/* harmony import */ var core_js_modules_esnext_string_replace_all_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_string_replace_all_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.symbol.async-iterator.js */ "./node_modules/core-js/modules/es.symbol.async-iterator.js");
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.symbol.to-string-tag.js */ "./node_modules/core-js/modules/es.symbol.to-string-tag.js");
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.json.to-string-tag.js */ "./node_modules/core-js/modules/es.json.to-string-tag.js");
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.math.to-string-tag.js */ "./node_modules/core-js/modules/es.math.to-string-tag.js");
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_28__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_29___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_29__);
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! core-js/modules/es.array.reverse.js */ "./node_modules/core-js/modules/es.array.reverse.js");
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_30___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_30__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_31___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_31__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! react-html-table-to-excel */ "./node_modules/react-html-table-to-excel/index.js");
/* harmony import */ var _fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__ = __webpack_require__(/*! ../../fonctions/NumberFormat */ "./assets/fonctions/NumberFormat.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_35__ = __webpack_require__(/*! react-moment */ "./node_modules/react-moment/dist/index.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_35___default = /*#__PURE__*/__webpack_require__.n(react_moment__WEBPACK_IMPORTED_MODULE_35__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_36__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_36___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_36__);
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







var ComptesClients = function ComptesClients() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_31__.useState)([]),
    _useState2 = _slicedToArray(_useState, 2),
    clients = _useState2[0],
    setClients = _useState2[1];
  var tozcout = 0;
  var tozregle = 0;
  var tozsolde = 0;
  var totdecnv = 0;
  var totdecv = 0;
  var totfacnv = 0;
  var totfacv = 0;
  var tosoldeClient = 0;
  var fetchClients = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      var dde;
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            dde = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_36___default()('#jsonclients').val());
            setClients(dde);
          case 2:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function fetchClients() {
      return _ref.apply(this, arguments);
    };
  }();
  (0,react__WEBPACK_IMPORTED_MODULE_31__.useEffect)(function () {
    fetchClients();
  }, []);
  var renderEtats = clients.map(function (client) {
    var zcout = 0;
    var countdevva = 0;
    var zregle = 0;
    var zsolde = 0;
    var countdecnv = 0;
    var countdecv = 0;
    var countfacnv = 0;
    var countfacv = 0;
    var soldeClient = 0;
    var deviss = client.devis;
    var decomptes = client.decomptes;
    var factures = client.factures;
    var chantiers = client.chantiers;
    if (client.type === null && client.corbeille === null) {
      deviss.map(function (devis) {
        if (devis.etat === "valide" && devis.corbeille === null) {
          countdevva = parseFloat(countdevva) + 1;
          zcout = parseFloat(zcout) + parseFloat(devis.totalttc);
        }
      });
      chantiers.map(function (chantier) {
        if (chantier.corbeille === null) {
          zregle = parseFloat(zregle) + parseFloat(chantier.reglement);
        }
      });
      if (countdevva > 0) {
        decomptes.map(function (decompte) {
          if (decompte.devis.ptva === "non") {
            if (decompte.etat === "save") {
              countdecnv = parseFloat(countdecnv) + parseFloat(decompte.apayer);
            }
            if (decompte.etat === "valide") {
              countdecv = parseFloat(countdecv) + parseFloat(decompte.apayer);
            }
          } else {
            if (decompte.etat === "save") {
              countdecnv = parseFloat(countdecnv) + (parseFloat(decompte.apayer) + parseFloat(decompte.apayer) * parseFloat(decompte.devis.tva) / 100);
            }
            if (decompte.etat === "valide") {
              countdecv = parseFloat(countdecv) + (parseFloat(decompte.apayer) + parseFloat(decompte.apayer) * parseFloat(decompte.devis.tva) / 100);
            }
          }
        });
        factures.map(function (facture) {
          if (facture.type === "devis") {
            if (facture.etat === "save") {
              countdecv = parseFloat(countdecv) + parseFloat(facture.totalttc);
              countfacnv = parseFloat(countfacnv) + parseFloat(facture.totalttc);
            }
            if (facture.etat === "valide") {
              countdecv = parseFloat(countdecv) + parseFloat(facture.totalttc);
              countfacv = parseFloat(countfacv) + parseFloat(facture.totalttc);
            }
          }
          if (facture.type === "decompte") {
            if (facture.etat === "save") {
              countfacnv = parseFloat(countfacnv) + parseFloat(facture.totalttc);
            }
            if (facture.etat === "valide") {
              countfacv = parseFloat(countfacv) + parseFloat(facture.totalttc);
            }
          }
          if (facture.type === "acompte") {
            var reles = facture.relever;
            if (facture.etat === "save") {
              countdecv = parseFloat(countdecv) + parseFloat(facture.totalttc);
              countfacnv = parseFloat(countfacnv) + parseFloat(facture.totalttc);
              reles.map(function (rele) {
                countfacnv = parseFloat(countfacnv) - parseFloat(rele.montant);
                countfacv = parseFloat(countfacv) + parseFloat(rele.montant);
              });
            }
            if (facture.etat === "valide") {
              countdecv = parseFloat(countdecv) + parseFloat(facture.totalttc);
              countfacv = parseFloat(countfacv) + parseFloat(facture.totalttc);
            }
          }
        });
      }
      soldeClient = parseFloat(countdecv) - (parseFloat(countfacnv) + parseFloat(countfacv));
      zsolde = zcout - zregle;
    }
    var chans = client.chantiers;
    var renderChantiers = chans.map(function (chan) {
      if (chan.corbeille === null) {
        var ssdecnv = 0;
        var ssdecv = 0;
        var ssfacnv = 0;
        var ssfacv = 0;
        var coaccnv = 0;
        var coaccv = 0;
        var soldeCli = 0;
        var decs = chan.decomptes;
        var facs = chan.factures;
        decs.map(function (dec) {
          if (dec.devis.ptva === "non") {
            if (dec.etat === "save") {
              ssdecnv = parseFloat(ssdecnv) + parseFloat(dec.apayer);
            }
            if (dec.etat === "valide") {
              ssdecv = parseFloat(ssdecv) + parseFloat(dec.apayer);
            }
          } else {
            if (dec.etat === "save") {
              ssdecnv = parseFloat(ssdecnv) + (parseFloat(dec.apayer) + parseFloat(parseFloat(dec.apayer) * parseFloat(dec.devis.tva) / 100));
            }
            if (dec.etat === "valide") {
              ssdecv = parseFloat(ssdecv) + (parseFloat(dec.apayer) + parseFloat(parseFloat(dec.apayer) * parseFloat(dec.devis.tva) / 100));
            }
          }
        });
        facs.map(function (fac) {
          if (fac.type === "acompte") {
            var rels = fac.relever;
            if (fac.etat === "save") {
              ssfacnv = parseFloat(ssfacnv) + parseFloat(fac.totalttc);
              coaccv = parseFloat(coaccv) + parseFloat(fac.totalttc);
              rels.map(function (rel) {
                ssfacnv = parseFloat(ssfacnv) - parseFloat(rel.montant);
              });
              rels.map(function (rel) {
                ssfacv = parseFloat(ssfacv) + parseFloat(rel.montant);
              });
            }
            if (fac.etat === "valide") {
              ssfacv = parseFloat(ssfacv) + parseFloat(fac.totalttc);
              coaccv = parseFloat(coaccv) + parseFloat(fac.totalttc);
            }
          }
          if (fac.type === "devis") {
            if (fac.etat === "save") {
              ssfacnv = parseFloat(ssfacnv) + parseFloat(fac.totalttc);
              coaccv = parseFloat(coaccv) + parseFloat(fac.totalttc);
            }
            if (fac.etat === "valide") {
              ssfacv = parseFloat(ssfacv) + parseFloat(fac.totalttc);
              coaccv = parseFloat(coaccv) + parseFloat(fac.totalttc);
            }
          }
          if (fac.type === "decompte") {
            if (fac.etat === "save") {
              ssfacnv = parseFloat(ssfacnv) + parseFloat(fac.totalttc);
            }
            if (fac.etat === "valide") {
              ssfacv = parseFloat(ssfacv) + parseFloat(fac.totalttc);
            }
          }
        });
        ssdecnv = parseFloat(ssdecnv) + parseFloat(coaccnv);
        ssdecv = parseFloat(ssdecv) + parseFloat(coaccv);
        soldeCli = parseFloat(ssdecv) - parseFloat(ssfacnv + ssfacv);
        var ssdevis = chan.devis;
        var ssdecomptes = chan.decomptes;
        var ssfacs = chan.factures;
        var ccde = 0;
        var ccdec = 0;
        var ccfa = 0;
        var renderDevis = ssdevis.map(function (deev) {
          ccde = ccde + 1;
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("tr", {
            key: deev.id,
            className: chan.id + 'chan' + ' hide'
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "ml60"
          }, deev.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            onClick: function onClick() {
              valideDevis(deev.id);
            },
            className: "badge badge-pill badge-blue-grey",
            style: {
              marginRight: "5px"
            }
          }, "V"), deev.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            onClick: function onClick() {
              devalideDevis(deev.id);
            },
            className: "badge badge-pill bg-blue",
            style: {
              marginRight: "5px"
            }
          }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            href: "#",
            onClick: function onClick() {
              shasha(deev.id, 'imprimdevis');
            },
            style: {
              marginRight: "5px"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("i", {
            className: "fa fa-eye col-green",
            "aria-hidden": "true"
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            href: "/crm/devis/".concat(deev.id, "/").concat(chan.id),
            className: "col-black bolo600"
          }, "Devis N\xBA ", deev.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "text-right col-black"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
            numb: deev.totalttc
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "text-right col-black"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
            numb: deev.totalht
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "text-left col-black ml30",
            style: {
              marginTop: "-5px"
            },
            colSpan: "6",
            dangerouslySetInnerHTML: {
              __html: deev.devreference
            }
          }));
        });
        var renderDecomptes = ssdecomptes.map(function (deec) {
          ccdec = ccdec + 1;
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement((react__WEBPACK_IMPORTED_MODULE_31___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("tr", {
            key: deec.id,
            className: chan.id + 'chan' + ' hide'
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "col-black bolo600 ml60"
          }, deec.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            onClick: function onClick() {
              valideDecompte(deec.id);
            },
            className: "badge badge-pill badge-blue-grey",
            style: {
              marginRight: "5px"
            }
          }, "V"), deec.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            onClick: function onClick() {
              devalideDecompte(deec.id);
            },
            className: "badge badge-pill bg-blue",
            style: {
              marginRight: "5px"
            }
          }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            href: "#",
            onClick: function onClick() {
              shasha(deec.id, 'imprimdecompte');
            },
            style: {
              marginRight: "5px"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("i", {
            className: "fa fa-eye col-green",
            "aria-hidden": "true"
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            href: "/crm/decompte/".concat(deec.id, "/").concat(chan.id),
            className: "col-black bolo600"
          }, " D\xE9compte N\xBA ", deec.numdecompte), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            href: "/crm/devis/".concat(deec.devis.id, "/").concat(chan.id)
          }, " | Devis ", deec.devis.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "text-right col-black"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
            numb: deec.ttc
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "text-right col-black"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
            numb: deec.apayer
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "text-left col-black ml30",
            colSpan: "6"
          }, "Sur Devis N\xBA ", deec.devis.iddevis)));
        });
        var renderFactures = ssfacs.map(function (faac) {
          ccfa = ccfa + 1;
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("tr", {
            key: faac.id,
            className: chan.id + 'chan' + ' hide'
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "col-black ml60"
          }, faac.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("span", {
            className: "badge badge-pill badge-blue-grey",
            style: {
              marginRight: "5px"
            }
          }, "V"), faac.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("span", {
            className: "badge badge-pill bg-blue",
            style: {
              marginRight: "5px"
            }
          }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            href: "#",
            onClick: function onClick() {
              shasha(faac.id, 'imprimfacture');
            },
            style: {
              marginRight: "5px"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("i", {
            className: "fa fa-eye col-green",
            "aria-hidden": "true"
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            href: "/crm/facture/".concat(faac.id, "/").concat(chan.id),
            className: "col-black bolo600"
          }, " Facture N\xBA ", faac.numfacture), faac.type === "devis" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            href: "/crm/devis/".concat(faac.devis.id, "/").concat(chan.id)
          }, " | Devis ", faac.devis.iddevis), faac.type === "decompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            href: "/crm/devis/".concat(faac.decompte.devis.id, "/").concat(chan.id)
          }, " | Devis ", faac.decompte.devis.iddevis), faac.type === "acompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
            href: "/crm/devis/".concat(faac.acompte.devis.id, "/").concat(chan.id)
          }, " | Devis ", faac.acompte.devis.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "text-right col-black"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
            numb: faac.totalttc
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "text-right col-black"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
            numb: faac.totalht
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
            className: "text-left col-black ml30",
            style: {
              marginTop: "-5px"
            },
            colSpan: "6",
            dangerouslySetInnerHTML: {
              __html: faac.factreference
            }
          }));
        });
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement((react__WEBPACK_IMPORTED_MODULE_31___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("tr", {
          key: chan.id,
          className: client.id + 'clie' + ' hide',
          onClick: function onClick() {
            showChantierContent(chan.id);
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "pri bolo600 ml30"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
          href: "/crm/chantier/".concat(chan.id)
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("i", {
          className: "fa fa-folder-open col-blue "
        })), " ", chan.nomchantier.toUpperCase()), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-right pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
          numb: chan.cout
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-right pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
          numb: chan.reglement
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-right pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
          numb: chan.cout - chan.reglement
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-right pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
          numb: ssdecnv
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-right pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
          numb: ssdecv
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-right pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
          numb: ssfacnv
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-right pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
          numb: ssfacv
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-right pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
          numb: soldeCli
        }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("tr", {
          className: chan.id + 'chan' + ' hide'
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "col-deep-orange bolo600 ml30 text-center"
        }, "Titre"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-right col-deep-orange bolo600"
        }, "Total TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-right col-deep-orange bolo600"
        }, "Total HT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
          className: "text-left col-deep-orange bolo600 ml30",
          colSpan: "6"
        }, "R\xE9f\xE9rence")), renderDevis, renderDecomptes, renderFactures);
      }
      return null;
    });
    totdecnv = parseFloat(countdecnv) + parseFloat(totdecnv);
    totdecv = parseFloat(countdecv) + parseFloat(totdecv);
    totfacnv = parseFloat(countfacnv) + parseFloat(totfacnv);
    totfacv = parseFloat(countfacv) + parseFloat(totfacv);
    tozcout = parseFloat(tozcout) + parseFloat(zcout);
    tozregle = parseFloat(tozregle) + parseFloat(zregle);
    tozsolde = parseFloat(tozsolde) + parseFloat(zsolde);
    tosoldeClient = parseFloat(tosoldeClient) + parseFloat(soldeClient);
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement((react__WEBPACK_IMPORTED_MODULE_31___default().Fragment), null, zsolde > 500 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement((react__WEBPACK_IMPORTED_MODULE_31___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("tr", {
      className: "paginate1",
      key: client.id,
      onClick: function onClick() {
        showChantier(client.id);
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "col-black bolo600"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
      href: "/crm/client/".concat(client.id)
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("i", {
      className: "fa fa-folder-open col-pink  "
    })), " ", client.nomclient.toUpperCase()), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right col-blue-grey"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: zcout
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right col-blue-grey"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: zregle
    })), zregle === 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right bg-blue-grey col-white"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: zsolde
    })), zregle > 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right bg-deep-purple col-white"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: zsolde
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right col-blue-grey"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: countdecnv
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right col-blue-grey"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: countdecv
    })), countfacnv === 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right bg-blue-grey col-white"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: countfacnv
    })), countfacnv > 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right bg-blue col-white"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: countfacnv
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right col-blue-grey"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: countfacv
    })), soldeClient < 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right bg-green col-white"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: soldeClient
    })), soldeClient === 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right bg-blue-grey col-white"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: soldeClient
    })), soldeClient > 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
      className: "text-right bg-deep-orange col-white"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
      numb: soldeClient
    }))), renderChantiers));
  });
  var handleClients = function handleClients(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_36___default()("#etates tr.paginate1").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_36___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_36___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  var showChantier = function showChantier(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_36___default()('.' + id + 'clie').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_36___default()('.' + id + 'clie').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_36___default()('.' + id + 'clie').addClass('hide');
    }
  };
  var showChantierContent = function showChantierContent(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_36___default()('.' + id + 'chan').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_36___default()('.' + id + 'chan').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_36___default()('.' + id + 'chan').addClass('hide');
    }
  };
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement((react__WEBPACK_IMPORTED_MODULE_31___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    className: "col-md-12",
    style: {
      paddingLeft: "0",
      marginTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    className: "panel-group",
    id: "accordion_2",
    role: "tablist",
    "aria-multiselectable": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    className: "panel panel-pri"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingEtats"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapseEtats",
    "aria-expanded": "false",
    "aria-controls": "collapsePlaJO",
    style: {
      fontSize: "16px",
      fontWeight: "500"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), " Comptes clients"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    id: "collapseEtats",
    className: "panel-collapse ",
    role: "tabpanel",
    "aria-labelledby": "headingEtats"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_33__["default"], {
    id: "test-table-xls-button",
    className: "btn bg-green text-white m-r-5 float-right",
    table: "etates",
    filename: "\xC9TAT G\xC9N\xC9RAL DES COMPTES",
    sheet: "tablexls",
    buttonText: "EXPORTER EN EXCEL"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    className: "col-md-4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleClients,
    placeholder: "Rechercher"
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("table", {
    id: "etates",
    className: "table table-hover table-striped dashboard-task-infos display nowrape m-t-20 table-sort",
    style: {
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("th", {
    className: "text-left"
  }, "CLIENTS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("th", {
    className: "text-center"
  }, "CO\xDBT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("th", {
    className: "text-center"
  }, "R\xC8GLEMENT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("th", {
    className: "text-center"
  }, "SOLDE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("th", {
    className: "text-center"
  }, "D\xC9COMPTES ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("br", null), "NON VALID\xC9S"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("th", {
    className: "text-center"
  }, "D\xC9COMPTES ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("br", null), "VALID\xC9S"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("th", {
    className: "text-center"
  }, "FACTURES ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("br", null), "NON R\xC9GL\xC9ES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("th", {
    className: "text-center"
  }, "FACTURES ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("br", null), "SOLD\xC9ES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("th", {
    className: "text-center"
  }, "SOLDE ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("br", null), "\xC0 FACTURER"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("tbody", null, renderEtats), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
    className: "text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
    numb: tozcout
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
    className: "text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
    numb: tozregle
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
    className: "text-right bg-deep-purple col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
    numb: tozsolde
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
    className: "text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
    numb: totdecnv
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
    className: "text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
    numb: totdecv
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
    numb: totfacnv
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
    className: "text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
    numb: totfacv
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("td", {
    className: "text-right bg-blue-grey col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_34__["default"], {
    numb: tosoldeClient
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement("br", null)))))))));
};
try {
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_32__.createRoot)(document.getElementById('setcomptesclients'));
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_31___default().createElement(ComptesClients, null));
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
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-383511","vendors-node_modules_core-js_modules_es_array_from_js-node_modules_core-js_modules_es_array_i-c84b5d","vendors-node_modules_moment_locale_af_js-node_modules_moment_locale_ar-dz_js-node_modules_mom-582c96","vendors-node_modules_react-html-table-to-excel_index_js","vendors-node_modules_react-moment_dist_index_js","assets_js_datascript_js-assets_js_jquery_validate_js-assets_css_mdb_css","assets_js_admin_js-assets_js_bootstrap_js-assets_js_jquery_tableToExcel_js-assets_js_select2_-13fb9c"], () => (__webpack_exec__("./assets/apcomptesclients.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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Q0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7O0FBR0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwY29tcHRlc2NsaWVudHMuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbXBvbmVudHMvY2hhbnRpZXJzL0NvbXB0ZXNDbGllbnRzLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9mb25jdGlvbnMvTnVtYmVyRm9ybWF0LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9qcXVlcnkuc2ltcGxlUGFnaW5hdGlvbi5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvbnVtYmVyLXBhcnNlLWZsb2F0LmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL21vZHVsZXMvZXMucGFyc2UtZmxvYXQuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lcy5zdHJpbmcucmVwbGFjZS1hbGwuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lc25leHQuc3RyaW5nLnJlcGxhY2UtYWxsLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlLyBzeW5jIF5cXC5cXC8uKiQiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL2Nzcy9ib290c3RyYXAuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9tZGIuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy93YXZlcy5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL2FsbC10aGVtZXMuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9zZWxlY3QyLm1pbi5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3N0eWxlLmNzcyc7XHJcblxyXG5cclxuaW1wb3J0ICcuL2pzL2Jvb3RzdHJhcC5qcyc7XHJcbmltcG9ydCAnLi9qcy9kYXRhc2NyaXB0LmpzJztcclxuaW1wb3J0ICcuL2pzL3NlbGVjdDIubWluLmpzJztcclxuaW1wb3J0ICcuL2pzL2pxdWVyeS50YWJsZVRvRXhjZWwuanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnZhbGlkYXRlLmpzJztcclxuaW1wb3J0ICcuL2pzL2FkbWluLmpzJztcclxuaW1wb3J0ICcuL2pzL2pxdWVyeS5zaW1wbGVQYWdpbmF0aW9uJztcclxuXHJcbmltcG9ydCAnLi9jb21wb25lbnRzL2NoYW50aWVycy9Db21wdGVzQ2xpZW50cy5qcyc7XHJcblxyXG4iLCJpbXBvcnQgUmVhY3QsIHt1c2VFZmZlY3QsIHVzZVN0YXRlfSBmcm9tIFwicmVhY3RcIjtcbmltcG9ydCB7Y3JlYXRlUm9vdH0gZnJvbSAncmVhY3QtZG9tL2NsaWVudCc7XG5pbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XG5pbXBvcnQgUmVhY3RIVE1MVGFibGVUb0V4Y2VsIGZyb20gJ3JlYWN0LWh0bWwtdGFibGUtdG8tZXhjZWwnO1xuaW1wb3J0IE51bWJlckZvcm1hdCBmcm9tIFwiLi4vLi4vZm9uY3Rpb25zL051bWJlckZvcm1hdFwiO1xuaW1wb3J0IE1vbWVudCBmcm9tICdyZWFjdC1tb21lbnQnO1xuaW1wb3J0ICQgZnJvbSBcImpxdWVyeVwiO1xuXG5jb25zdCBDb21wdGVzQ2xpZW50cyA9ICgpID0+IHtcbiAgICBjb25zdCBbY2xpZW50cywgc2V0Q2xpZW50c10gPSB1c2VTdGF0ZShbXSk7XG4gICAgbGV0IHRvemNvdXQgPSAwO1xuICAgIGxldCB0b3pyZWdsZSA9IDA7XG4gICAgbGV0IHRvenNvbGRlID0gMDtcbiAgICBsZXQgdG90ZGVjbnYgPSAwO1xuICAgIGxldCB0b3RkZWN2ID0gMDtcbiAgICBsZXQgdG90ZmFjbnYgPSAwO1xuICAgIGxldCB0b3RmYWN2ID0gMDtcbiAgICBsZXQgdG9zb2xkZUNsaWVudCA9IDA7XG5cbiAgICBjb25zdCBmZXRjaENsaWVudHMgPSBhc3luYyAoKSA9PiB7XG4gICAgICAgIGNvbnN0IGRkZSA9IEpTT04ucGFyc2UoJCgnI2pzb25jbGllbnRzJykudmFsKCkpO1xuICAgICAgICBzZXRDbGllbnRzKGRkZSk7XG4gICAgfTtcblxuICAgIHVzZUVmZmVjdCgoKSA9PiB7XG4gICAgICAgIGZldGNoQ2xpZW50cygpO1xuICAgIH0sIFtdKTtcblxuICAgIGNvbnN0IHJlbmRlckV0YXRzID0gY2xpZW50cy5tYXAoKGNsaWVudCkgPT4ge1xuICAgICAgICBsZXQgemNvdXQgPSAwO1xuICAgICAgICBsZXQgY291bnRkZXZ2YSA9IDA7XG4gICAgICAgIGxldCB6cmVnbGUgPSAwO1xuICAgICAgICBsZXQgenNvbGRlID0gMDtcbiAgICAgICAgbGV0IGNvdW50ZGVjbnYgPSAwO1xuICAgICAgICBsZXQgY291bnRkZWN2ID0gMDtcbiAgICAgICAgbGV0IGNvdW50ZmFjbnYgPSAwO1xuICAgICAgICBsZXQgY291bnRmYWN2ID0gMDtcbiAgICAgICAgbGV0IHNvbGRlQ2xpZW50ID0gMDtcblxuICAgICAgICBsZXQgZGV2aXNzID0gY2xpZW50LmRldmlzO1xuICAgICAgICBsZXQgZGVjb21wdGVzID0gY2xpZW50LmRlY29tcHRlcztcbiAgICAgICAgbGV0IGZhY3R1cmVzID0gY2xpZW50LmZhY3R1cmVzXG4gICAgICAgIGxldCBjaGFudGllcnMgPSBjbGllbnQuY2hhbnRpZXJzO1xuICAgICAgICBpZiAoY2xpZW50LnR5cGUgPT09IG51bGwgJiYgY2xpZW50LmNvcmJlaWxsZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgZGV2aXNzLm1hcCgoZGV2aXMpID0+IHtcbiAgICAgICAgICAgICAgICBpZiAoZGV2aXMuZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJiBkZXZpcy5jb3JiZWlsbGUgPT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgY291bnRkZXZ2YSA9IHBhcnNlRmxvYXQoY291bnRkZXZ2YSkgKyAxO1xuICAgICAgICAgICAgICAgICAgICB6Y291dCA9IHBhcnNlRmxvYXQoemNvdXQpICsgcGFyc2VGbG9hdChkZXZpcy50b3RhbHR0Yyk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICBjaGFudGllcnMubWFwKChjaGFudGllcikgPT4ge1xuICAgICAgICAgICAgICAgIGlmIChjaGFudGllci5jb3JiZWlsbGUgPT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgenJlZ2xlID0gcGFyc2VGbG9hdCh6cmVnbGUpICsgcGFyc2VGbG9hdChjaGFudGllci5yZWdsZW1lbnQpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgaWYgKGNvdW50ZGV2dmEgPiAwKSB7XG4gICAgICAgICAgICAgICAgZGVjb21wdGVzLm1hcCgoZGVjb21wdGUpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgaWYgKGRlY29tcHRlLmRldmlzLnB0dmEgPT09IFwibm9uXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChkZWNvbXB0ZS5ldGF0ID09PSBcInNhdmVcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvdW50ZGVjbnYgPSBwYXJzZUZsb2F0KGNvdW50ZGVjbnYpICsgcGFyc2VGbG9hdChkZWNvbXB0ZS5hcGF5ZXIpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGRlY29tcHRlLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb3VudGRlY3YgPSBwYXJzZUZsb2F0KGNvdW50ZGVjdikgKyBwYXJzZUZsb2F0KGRlY29tcHRlLmFwYXllcik7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoZGVjb21wdGUuZXRhdCA9PT0gXCJzYXZlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb3VudGRlY252ID0gcGFyc2VGbG9hdChjb3VudGRlY252KSArIChwYXJzZUZsb2F0KGRlY29tcHRlLmFwYXllcikgKyAoKHBhcnNlRmxvYXQoZGVjb21wdGUuYXBheWVyKSAqIHBhcnNlRmxvYXQoZGVjb21wdGUuZGV2aXMudHZhKSkgLyAxMDApKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChkZWNvbXB0ZS5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY291bnRkZWN2ID0gcGFyc2VGbG9hdChjb3VudGRlY3YpICsgKHBhcnNlRmxvYXQoZGVjb21wdGUuYXBheWVyKSArICgocGFyc2VGbG9hdChkZWNvbXB0ZS5hcGF5ZXIpICogcGFyc2VGbG9hdChkZWNvbXB0ZS5kZXZpcy50dmEpKSAvIDEwMCkpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgZmFjdHVyZXMubWFwKChmYWN0dXJlKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChmYWN0dXJlLnR5cGUgPT09IFwiZGV2aXNcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGZhY3R1cmUuZXRhdCA9PT0gXCJzYXZlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb3VudGRlY3YgPSBwYXJzZUZsb2F0KGNvdW50ZGVjdikgKyBwYXJzZUZsb2F0KGZhY3R1cmUudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvdW50ZmFjbnYgPSBwYXJzZUZsb2F0KGNvdW50ZmFjbnYpICsgcGFyc2VGbG9hdChmYWN0dXJlLnRvdGFsdHRjKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChmYWN0dXJlLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb3VudGRlY3YgPSBwYXJzZUZsb2F0KGNvdW50ZGVjdikgKyBwYXJzZUZsb2F0KGZhY3R1cmUudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvdW50ZmFjdiA9IHBhcnNlRmxvYXQoY291bnRmYWN2KSArIHBhcnNlRmxvYXQoZmFjdHVyZS50b3RhbHR0Yyk7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgaWYgKGZhY3R1cmUudHlwZSA9PT0gXCJkZWNvbXB0ZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoZmFjdHVyZS5ldGF0ID09PSBcInNhdmVcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvdW50ZmFjbnYgPSBwYXJzZUZsb2F0KGNvdW50ZmFjbnYpICsgcGFyc2VGbG9hdChmYWN0dXJlLnRvdGFsdHRjKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChmYWN0dXJlLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb3VudGZhY3YgPSBwYXJzZUZsb2F0KGNvdW50ZmFjdikgKyBwYXJzZUZsb2F0KGZhY3R1cmUudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIGlmIChmYWN0dXJlLnR5cGUgPT09IFwiYWNvbXB0ZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBsZXQgcmVsZXMgPSBmYWN0dXJlLnJlbGV2ZXI7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoZmFjdHVyZS5ldGF0ID09PSBcInNhdmVcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvdW50ZGVjdiA9IHBhcnNlRmxvYXQoY291bnRkZWN2KSArIHBhcnNlRmxvYXQoZmFjdHVyZS50b3RhbHR0Yyk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY291bnRmYWNudiA9IHBhcnNlRmxvYXQoY291bnRmYWNudikgKyBwYXJzZUZsb2F0KGZhY3R1cmUudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlbGVzLm1hcCgocmVsZSkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb3VudGZhY252ID0gcGFyc2VGbG9hdChjb3VudGZhY252KSAtIHBhcnNlRmxvYXQocmVsZS5tb250YW50KTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY291bnRmYWN2ID0gcGFyc2VGbG9hdChjb3VudGZhY3YpICsgcGFyc2VGbG9hdChyZWxlLm1vbnRhbnQpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoZmFjdHVyZS5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY291bnRkZWN2ID0gcGFyc2VGbG9hdChjb3VudGRlY3YpICsgcGFyc2VGbG9hdChmYWN0dXJlLnRvdGFsdHRjKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb3VudGZhY3YgPSBwYXJzZUZsb2F0KGNvdW50ZmFjdikgKyBwYXJzZUZsb2F0KGZhY3R1cmUudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHNvbGRlQ2xpZW50ID0gcGFyc2VGbG9hdChjb3VudGRlY3YpIC0gKHBhcnNlRmxvYXQoY291bnRmYWNudikgKyBwYXJzZUZsb2F0KGNvdW50ZmFjdikpO1xuICAgICAgICAgICAgenNvbGRlID0gemNvdXQgLSB6cmVnbGU7XG4gICAgICAgIH1cbiAgICAgICAgbGV0IGNoYW5zID0gY2xpZW50LmNoYW50aWVycztcbiAgICAgICAgbGV0IHJlbmRlckNoYW50aWVycyA9IGNoYW5zLm1hcCgoY2hhbikgPT4ge1xuICAgICAgICAgICAgaWYgKGNoYW4uY29yYmVpbGxlID09PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgbGV0IHNzZGVjbnYgPSAwO1xuICAgICAgICAgICAgICAgIGxldCBzc2RlY3YgPSAwO1xuICAgICAgICAgICAgICAgIGxldCBzc2ZhY252ID0gMDtcbiAgICAgICAgICAgICAgICBsZXQgc3NmYWN2ID0gMDtcbiAgICAgICAgICAgICAgICBsZXQgY29hY2NudiA9IDA7XG4gICAgICAgICAgICAgICAgbGV0IGNvYWNjdiA9IDA7XG4gICAgICAgICAgICAgICAgbGV0IHNvbGRlQ2xpID0gMDtcbiAgICAgICAgICAgICAgICBsZXQgZGVjcyA9IGNoYW4uZGVjb21wdGVzO1xuICAgICAgICAgICAgICAgIGxldCBmYWNzID0gY2hhbi5mYWN0dXJlcztcblxuICAgICAgICAgICAgICAgIGRlY3MubWFwKChkZWMpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgaWYgKGRlYy5kZXZpcy5wdHZhID09PSBcIm5vblwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoZGVjLmV0YXQgPT09IFwic2F2ZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc3NkZWNudiA9IHBhcnNlRmxvYXQoc3NkZWNudikgKyBwYXJzZUZsb2F0KGRlYy5hcGF5ZXIpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGRlYy5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc3NkZWN2ID0gcGFyc2VGbG9hdChzc2RlY3YpICsgcGFyc2VGbG9hdChkZWMuYXBheWVyKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChkZWMuZXRhdCA9PT0gXCJzYXZlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzc2RlY252ID0gcGFyc2VGbG9hdChzc2RlY252KSArIChwYXJzZUZsb2F0KGRlYy5hcGF5ZXIpICsgcGFyc2VGbG9hdCgocGFyc2VGbG9hdChkZWMuYXBheWVyKSAqIHBhcnNlRmxvYXQoZGVjLmRldmlzLnR2YSkpIC8gMTAwKSk7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoZGVjLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzc2RlY3YgPSBwYXJzZUZsb2F0KHNzZGVjdikgKyAocGFyc2VGbG9hdChkZWMuYXBheWVyKSArIHBhcnNlRmxvYXQoKHBhcnNlRmxvYXQoZGVjLmFwYXllcikgKiBwYXJzZUZsb2F0KGRlYy5kZXZpcy50dmEpKSAvIDEwMCkpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgZmFjcy5tYXAoKGZhYykgPT4ge1xuICAgICAgICAgICAgICAgICAgICBpZiAoZmFjLnR5cGUgPT09IFwiYWNvbXB0ZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBsZXQgcmVscyA9IGZhYy5yZWxldmVyO1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGZhYy5ldGF0ID09PSBcInNhdmVcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNzZmFjbnYgPSBwYXJzZUZsb2F0KHNzZmFjbnYpICsgcGFyc2VGbG9hdChmYWMudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvYWNjdiA9IHBhcnNlRmxvYXQoY29hY2N2KSArIHBhcnNlRmxvYXQoZmFjLnRvdGFsdHRjKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZWxzLm1hcCgocmVsKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNzZmFjbnYgPSBwYXJzZUZsb2F0KHNzZmFjbnYpIC0gcGFyc2VGbG9hdChyZWwubW9udGFudCk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZWxzLm1hcCgocmVsKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNzZmFjdiA9IHBhcnNlRmxvYXQoc3NmYWN2KSArIHBhcnNlRmxvYXQocmVsLm1vbnRhbnQpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoZmFjLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzc2ZhY3YgPSBwYXJzZUZsb2F0KHNzZmFjdikgKyBwYXJzZUZsb2F0KGZhYy50b3RhbHR0Yyk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY29hY2N2ID0gcGFyc2VGbG9hdChjb2FjY3YpICsgcGFyc2VGbG9hdChmYWMudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIGlmIChmYWMudHlwZSA9PT0gXCJkZXZpc1wiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoZmFjLmV0YXQgPT09IFwic2F2ZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc3NmYWNudiA9IHBhcnNlRmxvYXQoc3NmYWNudikgKyBwYXJzZUZsb2F0KGZhYy50b3RhbHR0Yyk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY29hY2N2ID0gcGFyc2VGbG9hdChjb2FjY3YpICsgcGFyc2VGbG9hdChmYWMudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGZhYy5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc3NmYWN2ID0gcGFyc2VGbG9hdChzc2ZhY3YpICsgcGFyc2VGbG9hdChmYWMudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvYWNjdiA9IHBhcnNlRmxvYXQoY29hY2N2KSArIHBhcnNlRmxvYXQoZmFjLnRvdGFsdHRjKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICBpZiAoZmFjLnR5cGUgPT09IFwiZGVjb21wdGVcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGZhYy5ldGF0ID09PSBcInNhdmVcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNzZmFjbnYgPSBwYXJzZUZsb2F0KHNzZmFjbnYpICsgcGFyc2VGbG9hdChmYWMudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGZhYy5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc3NmYWN2ID0gcGFyc2VGbG9hdChzc2ZhY3YpICsgcGFyc2VGbG9hdChmYWMudG90YWx0dGMpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICBzc2RlY252ID0gcGFyc2VGbG9hdChzc2RlY252KSArIHBhcnNlRmxvYXQoY29hY2Nudik7XG4gICAgICAgICAgICAgICAgc3NkZWN2ID0gcGFyc2VGbG9hdChzc2RlY3YpICsgcGFyc2VGbG9hdChjb2FjY3YpO1xuICAgICAgICAgICAgICAgIHNvbGRlQ2xpID0gcGFyc2VGbG9hdChzc2RlY3YpIC0gcGFyc2VGbG9hdChzc2ZhY252ICsgc3NmYWN2KTtcblxuICAgICAgICAgICAgICAgIGxldCBzc2RldmlzID0gY2hhbi5kZXZpcztcbiAgICAgICAgICAgICAgICBsZXQgc3NkZWNvbXB0ZXMgPSBjaGFuLmRlY29tcHRlcztcbiAgICAgICAgICAgICAgICBsZXQgc3NmYWNzID0gY2hhbi5mYWN0dXJlcztcblxuICAgICAgICAgICAgICAgIGxldCBjY2RlID0gMDtcbiAgICAgICAgICAgICAgICBsZXQgY2NkZWMgPSAwXG4gICAgICAgICAgICAgICAgbGV0IGNjZmEgPSAwO1xuXG4gICAgICAgICAgICAgICAgbGV0IHJlbmRlckRldmlzID0gc3NkZXZpcy5tYXAoKGRlZXYpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgY2NkZSA9IGNjZGUgKyAxO1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gKDx0ciBrZXk9e2RlZXYuaWR9IGNsYXNzTmFtZT17Y2hhbi5pZCArICdjaGFuJyArICcgaGlkZSd9PlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cIm1sNjBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGVldi5ldGF0ID09PSBcInNhdmVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkZURldmlzKGRlZXYuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1ibHVlLWdyZXlcIiBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2RlZXYuZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRldmFsaWRlRGV2aXMoZGVldi5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWVcIiBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cIiNcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoYXNoYShkZWV2LmlkLCAnaW1wcmltZGV2aXMnKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1leWUgY29sLWdyZWVuXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9kZXZpcy8ke2RlZXYuaWR9LyR7Y2hhbi5pZH1gfSBjbGFzc05hbWU9XCJjb2wtYmxhY2sgYm9sbzYwMFwiPkRldmlzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIE7CuiB7ZGVldi5pZGRldmlzfTwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgY29sLWJsYWNrXCI+PE51bWJlckZvcm1hdCBudW1iPXtkZWV2LnRvdGFsdHRjfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC1ibGFja1wiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZGVldi50b3RhbGh0fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgY29sLWJsYWNrIG1sMzBcIiBzdHlsZT17e21hcmdpblRvcDogXCItNXB4XCJ9fSBjb2xTcGFuPVwiNlwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGRlZXYuZGV2cmVmZXJlbmNlfX0vPlxuICAgICAgICAgICAgICAgICAgICA8L3RyPilcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICBsZXQgcmVuZGVyRGVjb21wdGVzID0gc3NkZWNvbXB0ZXMubWFwKChkZWVjKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGNjZGVjID0gY2NkZWMgKyAxO1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dHIga2V5PXtkZWVjLmlkfSBjbGFzc05hbWU9e2NoYW4uaWQgKyAnY2hhbicgKyAnIGhpZGUnfT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiY29sLWJsYWNrIGJvbG82MDAgbWw2MFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGVlYy5ldGF0ID09PSBcInNhdmVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGVEZWNvbXB0ZShkZWVjLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJhZGdlLWJsdWUtZ3JleVwiIHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2RlZWMuZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZXZhbGlkZURlY29tcHRlKGRlZWMuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmctYmx1ZVwiIHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cIiNcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGFzaGEoZGVlYy5pZCwgJ2ltcHJpbWRlY29tcHRlJylcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1leWUgY29sLWdyZWVuXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vZGVjb21wdGUvJHtkZWVjLmlkfS8ke2NoYW4uaWR9YH0gY2xhc3NOYW1lPVwiY29sLWJsYWNrIGJvbG82MDBcIj4gRMOpY29tcHRlXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBOwroge2RlZWMubnVtZGVjb21wdGV9PC9hPiA8YSBocmVmPXtgL2NybS9kZXZpcy8ke2RlZWMuZGV2aXMuaWR9LyR7Y2hhbi5pZH1gfT4gfFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEZXZpcyB7ZGVlYy5kZXZpcy5pZGRldmlzfTwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC1ibGFja1wiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZGVlYy50dGN9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC1ibGFja1wiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZGVlYy5hcGF5ZXJ9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgY29sLWJsYWNrIG1sMzBcIiBjb2xTcGFuPVwiNlwiPlN1ciBEZXZpcyBOwroge2RlZWMuZGV2aXMuaWRkZXZpc308L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgPC8+KVxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIGxldCByZW5kZXJGYWN0dXJlcyA9IHNzZmFjcy5tYXAoKGZhYWMpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgY2NmYSA9IGNjZmEgKyAxO1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gKDx0ciBrZXk9e2ZhYWMuaWR9IGNsYXNzTmFtZT17Y2hhbi5pZCArICdjaGFuJyArICcgaGlkZSd9PlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImNvbC1ibGFjayBtbDYwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhYWMuZXRhdCA9PT0gXCJzYXZlXCIgJiYgPHNwYW4gY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1ibHVlLWdyZXlcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+Vjwvc3Bhbj59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhYWMuZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWVcIiBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+Vjwvc3Bhbj59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cIiNcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoYXNoYShmYWFjLmlkLCAnaW1wcmltZmFjdHVyZScpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLWV5ZSBjb2wtZ3JlZW5cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2ZhY3R1cmUvJHtmYWFjLmlkfS8ke2NoYW4uaWR9YH0gY2xhc3NOYW1lPVwiY29sLWJsYWNrIGJvbG82MDBcIj4gRmFjdHVyZVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBOwroge2ZhYWMubnVtZmFjdHVyZX08L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZmFhYy50eXBlID09PSBcImRldmlzXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vZGV2aXMvJHtmYWFjLmRldmlzLmlkfS8ke2NoYW4uaWR9YH0+IHwgRGV2aXMge2ZhYWMuZGV2aXMuaWRkZXZpc308L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhYWMudHlwZSA9PT0gXCJkZWNvbXB0ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2RldmlzLyR7ZmFhYy5kZWNvbXB0ZS5kZXZpcy5pZH0vJHtjaGFuLmlkfWB9PiB8XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEZXZpcyB7ZmFhYy5kZWNvbXB0ZS5kZXZpcy5pZGRldmlzfTwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZmFhYy50eXBlID09PSBcImFjb21wdGVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9kZXZpcy8ke2ZhYWMuYWNvbXB0ZS5kZXZpcy5pZH0vJHtjaGFuLmlkfWB9PiB8XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEZXZpcyB7ZmFhYy5hY29tcHRlLmRldmlzLmlkZGV2aXN9PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC1ibGFja1wiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZmFhYy50b3RhbHR0Y30vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBjb2wtYmxhY2tcIj48TnVtYmVyRm9ybWF0IG51bWI9e2ZhYWMudG90YWxodH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGNvbC1ibGFjayBtbDMwXCIgc3R5bGU9e3ttYXJnaW5Ub3A6IFwiLTVweFwifX0gY29sU3Bhbj1cIjZcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBmYWFjLmZhY3RyZWZlcmVuY2V9fS8+XG4gICAgICAgICAgICAgICAgICAgIDwvdHI+KVxuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgcmV0dXJuICg8PlxuICAgICAgICAgICAgICAgICAgICA8dHIga2V5PXtjaGFuLmlkfSBjbGFzc05hbWU9e2NsaWVudC5pZCArICdjbGllJyArICcgaGlkZSd9IG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHNob3dDaGFudGllckNvbnRlbnQoY2hhbi5pZClcbiAgICAgICAgICAgICAgICAgICAgfX0+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwicHJpIGJvbG82MDAgbWwzMFwiPjxhIGhyZWY9e2AvY3JtL2NoYW50aWVyLyR7Y2hhbi5pZH1gfT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLWZvbGRlci1vcGVuIGNvbC1ibHVlIFwiLz48L2E+IHtjaGFuLm5vbWNoYW50aWVyLnRvVXBwZXJDYXNlKCl9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IHByaSBib2xvNjAwXCI+PE51bWJlckZvcm1hdCBudW1iPXtjaGFuLmNvdXR9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcHJpIGJvbG82MDBcIj48TnVtYmVyRm9ybWF0IG51bWI9e2NoYW4ucmVnbGVtZW50fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IHByaSBib2xvNjAwXCI+PE51bWJlckZvcm1hdCBudW1iPXtjaGFuLmNvdXQgLSBjaGFuLnJlZ2xlbWVudH0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IHByaSBib2xvNjAwXCI+PE51bWJlckZvcm1hdCBudW1iPXtzc2RlY252fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IHByaSBib2xvNjAwXCI+PE51bWJlckZvcm1hdCBudW1iPXtzc2RlY3Z9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcHJpIGJvbG82MDBcIj48TnVtYmVyRm9ybWF0IG51bWI9e3NzZmFjbnZ9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcHJpIGJvbG82MDBcIj48TnVtYmVyRm9ybWF0IG51bWI9e3NzZmFjdn0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBwcmkgYm9sbzYwMFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17c29sZGVDbGl9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPXtjaGFuLmlkICsgJ2NoYW4nICsgJyBoaWRlJ30+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiY29sLWRlZXAtb3JhbmdlIGJvbG82MDAgbWwzMCB0ZXh0LWNlbnRlclwiPlRpdHJlPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC1kZWVwLW9yYW5nZSBib2xvNjAwXCI+VG90YWwgVFRDPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC1kZWVwLW9yYW5nZSBib2xvNjAwXCI+VG90YWwgSFQ8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBjb2wtZGVlcC1vcmFuZ2UgYm9sbzYwMCBtbDMwXCIgY29sU3Bhbj1cIjZcIj5Sw6lmw6lyZW5jZTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgIHtyZW5kZXJEZXZpc31cbiAgICAgICAgICAgICAgICAgICAge3JlbmRlckRlY29tcHRlc31cbiAgICAgICAgICAgICAgICAgICAge3JlbmRlckZhY3R1cmVzfVxuICAgICAgICAgICAgICAgIDwvPilcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgcmV0dXJuIG51bGw7XG5cbiAgICAgICAgfSk7XG5cbiAgICAgICAgdG90ZGVjbnYgPSBwYXJzZUZsb2F0KGNvdW50ZGVjbnYpICsgcGFyc2VGbG9hdCh0b3RkZWNudik7XG4gICAgICAgIHRvdGRlY3YgPSBwYXJzZUZsb2F0KGNvdW50ZGVjdikgKyBwYXJzZUZsb2F0KHRvdGRlY3YpO1xuICAgICAgICB0b3RmYWNudiA9IHBhcnNlRmxvYXQoY291bnRmYWNudikgKyBwYXJzZUZsb2F0KHRvdGZhY252KTtcbiAgICAgICAgdG90ZmFjdiA9IHBhcnNlRmxvYXQoY291bnRmYWN2KSArIHBhcnNlRmxvYXQodG90ZmFjdik7XG4gICAgICAgIHRvemNvdXQgPSBwYXJzZUZsb2F0KHRvemNvdXQpICsgcGFyc2VGbG9hdCh6Y291dCk7XG4gICAgICAgIHRvenJlZ2xlID0gcGFyc2VGbG9hdCh0b3pyZWdsZSkgKyBwYXJzZUZsb2F0KHpyZWdsZSk7XG4gICAgICAgIHRvenNvbGRlID0gcGFyc2VGbG9hdCh0b3pzb2xkZSkgKyBwYXJzZUZsb2F0KHpzb2xkZSk7XG4gICAgICAgIHRvc29sZGVDbGllbnQgPSBwYXJzZUZsb2F0KHRvc29sZGVDbGllbnQpICsgcGFyc2VGbG9hdChzb2xkZUNsaWVudCk7XG5cblxuICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICB7enNvbGRlID4gNTAwICYmIDw+XG4gICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInBhZ2luYXRlMVwiIGtleT17Y2xpZW50LmlkfSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIHNob3dDaGFudGllcihjbGllbnQuaWQpXG4gICAgICAgICAgICAgICAgfX0+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJjb2wtYmxhY2sgYm9sbzYwMFwiPjxhIGhyZWY9e2AvY3JtL2NsaWVudC8ke2NsaWVudC5pZH1gfT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZm9sZGVyLW9wZW4gY29sLXBpbmsgIFwiLz48L2E+IHtjbGllbnQubm9tY2xpZW50LnRvVXBwZXJDYXNlKCl9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgY29sLWJsdWUtZ3JleVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17emNvdXR9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBjb2wtYmx1ZS1ncmV5XCI+PE51bWJlckZvcm1hdCBudW1iPXt6cmVnbGV9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICB7enJlZ2xlID09PSAwICYmXG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBiZy1ibHVlLWdyZXkgY29sLXdoaXRlXCI+PE51bWJlckZvcm1hdCBudW1iPXt6c29sZGV9Lz48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAge3pyZWdsZSA+IDAgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJnLWRlZXAtcHVycGxlIGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17enNvbGRlfS8+PC90ZD59XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC1ibHVlLWdyZXlcIj48TnVtYmVyRm9ybWF0IG51bWI9e2NvdW50ZGVjbnZ9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBjb2wtYmx1ZS1ncmV5XCI+PE51bWJlckZvcm1hdCBudW1iPXtjb3VudGRlY3Z9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICB7Y291bnRmYWNudiA9PT0gMCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYmctYmx1ZS1ncmV5IGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Y291bnRmYWNudn0vPjwvdGQ+fVxuICAgICAgICAgICAgICAgICAgICB7Y291bnRmYWNudiA+IDAgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJnLWJsdWUgY29sLXdoaXRlXCI+PE51bWJlckZvcm1hdCBudW1iPXtjb3VudGZhY252fS8+PC90ZD59XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC1ibHVlLWdyZXlcIj48TnVtYmVyRm9ybWF0IG51bWI9e2NvdW50ZmFjdn0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIHtzb2xkZUNsaWVudCA8IDAgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJnLWdyZWVuIGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17c29sZGVDbGllbnR9Lz48L3RkPn1cbiAgICAgICAgICAgICAgICAgICAge3NvbGRlQ2xpZW50ID09PSAwICYmXG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBiZy1ibHVlLWdyZXkgY29sLXdoaXRlXCI+PE51bWJlckZvcm1hdCBudW1iPXtzb2xkZUNsaWVudH0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD59XG4gICAgICAgICAgICAgICAgICAgIHtzb2xkZUNsaWVudCA+IDAgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJnLWRlZXAtb3JhbmdlIGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17c29sZGVDbGllbnR9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+fVxuICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAge3JlbmRlckNoYW50aWVyc31cbiAgICAgICAgICAgIDwvPn1cbiAgICAgICAgPC8+KVxuICAgIH0pO1xuICAgIGNvbnN0IGhhbmRsZUNsaWVudHMgPSBldmVudCA9PiB7XG4gICAgICAgIGxldCBmaWx0ZXIgPSBldmVudC50YXJnZXQudmFsdWUudG9Mb3dlckNhc2UoKTtcbiAgICAgICAgJChcIiNldGF0ZXMgdHIucGFnaW5hdGUxXCIpLmZpbHRlcihmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLnRvZ2dsZSgkKHRoaXMpLnRleHQoKS50b0xvd2VyQ2FzZSgpLnJlcGxhY2VBbGwoJyAnLCAnJykuaW5kZXhPZihmaWx0ZXIpID4gLTEpXG4gICAgICAgIH0pO1xuICAgIH07XG4gICAgY29uc3Qgc2hvd0NoYW50aWVyID0gKGlkKSA9PiB7XG4gICAgICAgIGlmICgkKCcuJyArIGlkICsgJ2NsaWUnKS5oYXNDbGFzcyhcImhpZGVcIikpIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAnY2xpZScpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAkKCcuJyArIGlkICsgJ2NsaWUnKS5hZGRDbGFzcygnaGlkZScpO1xuICAgICAgICB9XG4gICAgfVxuICAgIGNvbnN0IHNob3dDaGFudGllckNvbnRlbnQgPSAoaWQpID0+IHtcbiAgICAgICAgaWYgKCQoJy4nICsgaWQgKyAnY2hhbicpLmhhc0NsYXNzKFwiaGlkZVwiKSkge1xuICAgICAgICAgICAgJCgnLicgKyBpZCArICdjaGFuJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAnY2hhbicpLmFkZENsYXNzKCdoaWRlJyk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICByZXR1cm4gKDw+XG4gICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTEyXCIgc3R5bGU9e3twYWRkaW5nTGVmdDogXCIwXCIsIG1hcmdpblRvcDogXCIyMHB4XCJ9fT5cbiAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtZ3JvdXBcIiBpZD1cImFjY29yZGlvbl8yXCIgcm9sZT1cInRhYmxpc3RcIiBhcmlhLW11bHRpc2VsZWN0YWJsZT1cInRydWVcIj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsIHBhbmVsLXByaVwiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWhlYWRpbmcgYmctcHJpXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ0V0YXRzXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDUgY2xhc3NOYW1lPVwicGFuZWwtdGl0bGUgXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiY29sbGFwc2VkIHRleHQtd2hpdGVcIiByb2xlPVwiYnV0dG9uXCIgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uXzJcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhyZWY9XCIjY29sbGFwc2VFdGF0c1wiIGFyaWEtZXhwYW5kZWQ9XCJmYWxzZVwiIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZVBsYUpPXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE2cHhcIiwgZm9udFdlaWdodDogXCI1MDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE4cHhcIiwgZmxvYXQ6IFwibGVmdFwifX0+a2V5Ym9hcmRfYXJyb3dfZG93bjwvaT4gQ29tcHRlcyBjbGllbnRzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oNT5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZUV0YXRzXCIgY2xhc3NOYW1lPVwicGFuZWwtY29sbGFwc2UgXCIgcm9sZT1cInRhYnBhbmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJoZWFkaW5nRXRhdHNcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtYm9keVwiIHN0eWxlPXt7b3ZlcmZsb3c6IFwic2Nyb2xsXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJvZHlcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJ0ZXN0LXRhYmxlLXhscy1idXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiZy1ncmVlbiB0ZXh0LXdoaXRlIG0tci01IGZsb2F0LXJpZ2h0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YWJsZT1cImV0YXRlc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9XCLDiVRBVCBHw4lOw4lSQUwgREVTIENPTVBURVNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoZWV0PVwidGFibGV4bHNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvblRleHQ9XCJFWFBPUlRFUiBFTiBFWENFTFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImlucHV0LWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZm9ybS1saW5lXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT1cInRleHRcIiBjbGFzc05hbWU9XCJmb3JtLWNvbnRyb2xcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2hhbmdlPXtoYW5kbGVDbGllbnRzfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBsYWNlaG9sZGVyPVwiUmVjaGVyY2hlclwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGlkPVwiZXRhdGVzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJ0YWJsZSB0YWJsZS1ob3ZlciB0YWJsZS1zdHJpcGVkIGRhc2hib2FyZC10YXNrLWluZm9zIGRpc3BsYXkgbm93cmFwZSBtLXQtMjAgdGFibGUtc29ydFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1sZWZ0XCI+Q0xJRU5UUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPkNPw5tUPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+UsOIR0xFTUVOVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPlNPTERFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+RMOJQ09NUFRFUyA8YnIvPk5PTiBWQUxJRMOJUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPkTDiUNPTVBURVMgPGJyLz5WQUxJRMOJUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPkZBQ1RVUkVTIDxici8+Tk9OIFLDiUdMw4lFUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPkZBQ1RVUkVTIDxici8+U09MRMOJRVM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5TT0xERSA8YnIvPsOAIEZBQ1RVUkVSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJFdGF0c31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17dG96Y291dH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCI+PE51bWJlckZvcm1hdCBudW1iPXt0b3pyZWdsZX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJnLWRlZXAtcHVycGxlIGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e3RvenNvbGRlfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e3RvdGRlY252fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e3RvdGRlY3Z9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBiZy1ibHVlIGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17dG90ZmFjbnZ9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e3RvdGZhY3Z9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBiZy1ibHVlLWdyZXkgY29sLXdoaXRlXCI+PE51bWJlckZvcm1hdFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYj17dG9zb2xkZUNsaWVudH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgIDwvZGl2PlxuICAgIDwvPik7XG5cbn1cblxudHJ5IHtcbiAgICBjb25zdCByb290ID0gY3JlYXRlUm9vdChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2V0Y29tcHRlc2NsaWVudHMnKSk7XG4gICAgcm9vdC5yZW5kZXIoPENvbXB0ZXNDbGllbnRzLz4pO1xufSBjYXRjaCAoZSkge1xufVxuIiwibGV0IE51bWJlckZvcm1hdDtcbmV4cG9ydCBkZWZhdWx0IE51bWJlckZvcm1hdCA9IChwcm9wcykgPT4ge1xuXG4gICAgY29uc3QgZm9ybWF0TnVtYmVyID0gKG51bSwgcHJlY2lzaW9uLCBzZXBhcmF0b3IpID0+IHtcbiAgICAgICAgbGV0IHBhcnRzO1xuICAgICAgICBudW0gPSBOdW1iZXIobnVtKTtcbiAgICAgICAgbnVtID0gKHR5cGVvZiBwcmVjaXNpb24gIT09ICd1bmRlZmluZWQnID8gbnVtLnRvRml4ZWQocHJlY2lzaW9uKSA6IG51bSkudG9TdHJpbmcoKTtcbiAgICAgICAgcGFydHMgPSBudW0uc3BsaXQoJy4nKTtcbiAgICAgICAgcGFydHNbMF0gPSBwYXJ0c1swXS50b1N0cmluZygpLnJlcGxhY2UoLyhcXGQpKD89KFxcZHszfSkrKD8hXFxkKSkvZywgJyQxJyArIChzZXBhcmF0b3IgfHwgJywnKSk7XG4gICAgICAgIHJldHVybiBwYXJ0cy5qb2luKCcsJyk7XG4gICAgfVxuXG4gICAgcmV0dXJuIChmb3JtYXROdW1iZXIocHJvcHMubnVtYiwyLCAnICcpKTtcblxufTtcblxuIiwiLyoqXG4gKiBqcXVlcnkuc2ltcGxlUGFnaW5hdGlvbi5qc1xuICogQHZlcnNpb246IHYxLjAuMFxuICogQGF1dGhvcjogU2ViYXN0aWFuIE1hcnVsYW5kYSBodHRwOi8vbWFydWxhbmRhLm1lXG4gKiBAc2VlOiBodHRwczovL2dpdGh1Yi5jb20vc21hcnVsYW5kYS9qcXVlcnkuc2ltcGxlUGFnaW5hdGlvblxuICovXG5cbihmdW5jdGlvbigkKSB7XG5cblx0JC5mbi5zaW1wbGVQYWdpbmF0aW9uID0gZnVuY3Rpb24ob3B0aW9ucykge1xuXG5cdFx0Y29uc3QgZGVmYXVsdHMgPSB7XG5cdFx0XHRwZXJQYWdlOiAyMCxcblx0XHRcdGNvbnRhaW5lckNsYXNzOiAnJyxcblx0XHRcdHByZXZpb3VzQnV0dG9uQ2xhc3M6ICcnLFxuXHRcdFx0bmV4dEJ1dHRvbkNsYXNzOiAnJyxcblx0XHRcdHByZXZpb3VzQnV0dG9uVGV4dDogJzwnLFxuXHRcdFx0bmV4dEJ1dHRvblRleHQ6ICc+Jyxcblx0XHRcdGN1cnJlbnRQYWdlOiAxXG5cdFx0fTtcblxuXHRcdGNvbnN0IHNldHRpbmdzID0gJC5leHRlbmQoe30sIGRlZmF1bHRzLCBvcHRpb25zKTtcblxuXHRcdHJldHVybiB0aGlzLmVhY2goZnVuY3Rpb24oKSB7XG5cdFx0XHRjb25zdCAkcm93cyA9ICQob3B0aW9ucywgdGhpcyk7XG5cdFx0XHRjb25zdCBwYWdlcyA9IE1hdGguY2VpbCgkcm93cy5sZW5ndGggLyBzZXR0aW5ncy5wZXJQYWdlKTtcblxuXHRcdFx0Y29uc3QgY29udGFpbmVyID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XG5cdFx0XHRjb25zdCBiUHJldmlvdXMgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdidXR0b24nKTtcblx0XHRcdGNvbnN0IGJOZXh0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnYnV0dG9uJyk7XG5cdFx0XHRjb25zdCBvZiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NwYW4nKTtcblxuXG5cdFx0XHRiUHJldmlvdXMuaW5uZXJIVE1MID0gc2V0dGluZ3MucHJldmlvdXNCdXR0b25UZXh0O1xuXHRcdFx0Yk5leHQuaW5uZXJIVE1MID0gc2V0dGluZ3MubmV4dEJ1dHRvblRleHQ7XG5cblx0XHRcdGNvbnRhaW5lci5jbGFzc05hbWUgPSBzZXR0aW5ncy5jb250YWluZXJDbGFzcztcblx0XHRcdGJQcmV2aW91cy5jbGFzc05hbWUgPSBzZXR0aW5ncy5wcmV2aW91c0J1dHRvbkNsYXNzO1xuXHRcdFx0Yk5leHQuY2xhc3NOYW1lID0gc2V0dGluZ3MubmV4dEJ1dHRvbkNsYXNzO1xuXG5cdFx0XHRiUHJldmlvdXMuc3R5bGUubWFyZ2luUmlnaHQgPSAnOHB4Jztcblx0XHRcdGJQcmV2aW91cy5jbGFzc0xpc3QuYWRkKCdidG4nKTtcblx0XHRcdGJQcmV2aW91cy5jbGFzc0xpc3QuYWRkKCdiZy1ibHVlJyk7XG5cdFx0XHRiUHJldmlvdXMuY2xhc3NMaXN0LmFkZCgnYm9sbzcwMCcpO1xuXHRcdFx0Yk5leHQuc3R5bGUubWFyZ2luTGVmdCA9ICc4cHgnO1xuXHRcdFx0Yk5leHQuY2xhc3NMaXN0LmFkZCgnYnRuJyk7XG5cdFx0XHRiTmV4dC5jbGFzc0xpc3QuYWRkKCdiZy1ibHVlJyk7XG5cdFx0XHRiTmV4dC5jbGFzc0xpc3QuYWRkKCdib2xvNzAwJyk7XG5cdFx0XHRjb250YWluZXIuc3R5bGUudGV4dEFsaWduID0gXCJyaWdodFwiO1xuXHRcdFx0Y29udGFpbmVyLnN0eWxlLm1hcmdpbkJvdHRvbSA9ICcyMHB4JztcblxuXHRcdFx0Y29udGFpbmVyLmFwcGVuZENoaWxkKGJQcmV2aW91cyk7XG5cdFx0XHRjb250YWluZXIuYXBwZW5kQ2hpbGQob2YpO1xuXHRcdFx0Y29udGFpbmVyLmFwcGVuZENoaWxkKGJOZXh0KTtcblxuXHRcdFx0JCh0aGlzKS5hZnRlcihjb250YWluZXIpO1xuXG5cdFx0XHR1cGRhdGUoKTtcblxuXHRcdFx0JChiTmV4dCkuY2xpY2soZnVuY3Rpb24oKSB7XG5cdFx0XHRcdGlmIChzZXR0aW5ncy5jdXJyZW50UGFnZSArIDEgPiBwYWdlcykge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlID0gcGFnZXM7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UrKztcblx0XHRcdFx0fVxuXHRcdFx0XHR1cGRhdGUoKTtcblx0XHRcdH0pO1xuXG5cdFx0XHQkKGJQcmV2aW91cykuY2xpY2soZnVuY3Rpb24oKSB7XG5cdFx0XHRcdGlmIChzZXR0aW5ncy5jdXJyZW50UGFnZSAtIDEgPCAxKSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UgPSAxO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlLS07XG5cdFx0XHRcdH1cblx0XHRcdFx0dXBkYXRlKCk7XG5cdFx0XHR9KTtcblxuXHRcdFx0ZnVuY3Rpb24gdXBkYXRlKCkge1xuXHRcdFx0XHRjb25zdCBmcm9tID0gKChzZXR0aW5ncy5jdXJyZW50UGFnZSAtIDEpICogc2V0dGluZ3MucGVyUGFnZSkgKyAxO1xuXHRcdFx0XHRsZXQgdG8gPSBmcm9tICsgc2V0dGluZ3MucGVyUGFnZSAtIDE7XG5cblx0XHRcdFx0aWYgKHRvID4gJHJvd3MubGVuZ3RoKSB7XG5cdFx0XHRcdFx0dG8gPSAkcm93cy5sZW5ndGg7XG5cdFx0XHRcdH1cblxuXHRcdFx0XHQkcm93cy5oaWRlKCk7XG5cdFx0XHRcdCRyb3dzLnNsaWNlKChmcm9tLTEpLCB0bykuc2hvdygpO1xuXG5cdFx0XHRcdG9mLmlubmVySFRNTCA9IGZyb20gKyAnIMOgICcgKyB0byArICcgc3VyICcgKyAkcm93cy5sZW5ndGggKyAnIGxpZ25lcyc7XG5cblx0XHRcdFx0aWYgKCRyb3dzLmxlbmd0aCA8PSBzZXR0aW5ncy5wZXJQYWdlKSB7XG5cdFx0XHRcdFx0JChjb250YWluZXIpLmhpZGUoKTtcblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHQkKGNvbnRhaW5lcikuc2hvdygpO1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSk7XG5cblx0fVxuXG59KGpRdWVyeSkpO1xuIiwidmFyIGdsb2JhbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9nbG9iYWwnKTtcbnZhciBmYWlscyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mYWlscycpO1xudmFyIHVuY3VycnlUaGlzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Z1bmN0aW9uLXVuY3VycnktdGhpcycpO1xudmFyIHRvU3RyaW5nID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3RvLXN0cmluZycpO1xudmFyIHRyaW0gPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvc3RyaW5nLXRyaW0nKS50cmltO1xudmFyIHdoaXRlc3BhY2VzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3doaXRlc3BhY2VzJyk7XG5cbnZhciBjaGFyQXQgPSB1bmN1cnJ5VGhpcygnJy5jaGFyQXQpO1xudmFyICRwYXJzZUZsb2F0ID0gZ2xvYmFsLnBhcnNlRmxvYXQ7XG52YXIgU3ltYm9sID0gZ2xvYmFsLlN5bWJvbDtcbnZhciBJVEVSQVRPUiA9IFN5bWJvbCAmJiBTeW1ib2wuaXRlcmF0b3I7XG52YXIgRk9SQ0VEID0gMSAvICRwYXJzZUZsb2F0KHdoaXRlc3BhY2VzICsgJy0wJykgIT09IC1JbmZpbml0eVxuICAvLyBNUyBFZGdlIDE4LSBicm9rZW4gd2l0aCBib3hlZCBzeW1ib2xzXG4gIHx8IChJVEVSQVRPUiAmJiAhZmFpbHMoZnVuY3Rpb24gKCkgeyAkcGFyc2VGbG9hdChPYmplY3QoSVRFUkFUT1IpKTsgfSkpO1xuXG4vLyBgcGFyc2VGbG9hdGAgbWV0aG9kXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLXBhcnNlZmxvYXQtc3RyaW5nXG5tb2R1bGUuZXhwb3J0cyA9IEZPUkNFRCA/IGZ1bmN0aW9uIHBhcnNlRmxvYXQoc3RyaW5nKSB7XG4gIHZhciB0cmltbWVkU3RyaW5nID0gdHJpbSh0b1N0cmluZyhzdHJpbmcpKTtcbiAgdmFyIHJlc3VsdCA9ICRwYXJzZUZsb2F0KHRyaW1tZWRTdHJpbmcpO1xuICByZXR1cm4gcmVzdWx0ID09PSAwICYmIGNoYXJBdCh0cmltbWVkU3RyaW5nLCAwKSA9PSAnLScgPyAtMCA6IHJlc3VsdDtcbn0gOiAkcGFyc2VGbG9hdDtcbiIsInZhciAkID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2V4cG9ydCcpO1xudmFyICRwYXJzZUZsb2F0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL251bWJlci1wYXJzZS1mbG9hdCcpO1xuXG4vLyBgcGFyc2VGbG9hdGAgbWV0aG9kXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLXBhcnNlZmxvYXQtc3RyaW5nXG4kKHsgZ2xvYmFsOiB0cnVlLCBmb3JjZWQ6IHBhcnNlRmxvYXQgIT0gJHBhcnNlRmxvYXQgfSwge1xuICBwYXJzZUZsb2F0OiAkcGFyc2VGbG9hdFxufSk7XG4iLCIndXNlIHN0cmljdCc7XG52YXIgJCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9leHBvcnQnKTtcbnZhciBjYWxsID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Z1bmN0aW9uLWNhbGwnKTtcbnZhciB1bmN1cnJ5VGhpcyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi11bmN1cnJ5LXRoaXMnKTtcbnZhciByZXF1aXJlT2JqZWN0Q29lcmNpYmxlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3JlcXVpcmUtb2JqZWN0LWNvZXJjaWJsZScpO1xudmFyIGlzQ2FsbGFibGUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtY2FsbGFibGUnKTtcbnZhciBpc051bGxPclVuZGVmaW5lZCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1udWxsLW9yLXVuZGVmaW5lZCcpO1xudmFyIGlzUmVnRXhwID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLXJlZ2V4cCcpO1xudmFyIHRvU3RyaW5nID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3RvLXN0cmluZycpO1xudmFyIGdldE1ldGhvZCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9nZXQtbWV0aG9kJyk7XG52YXIgZ2V0UmVnRXhwRmxhZ3MgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvcmVnZXhwLWdldC1mbGFncycpO1xudmFyIGdldFN1YnN0aXR1dGlvbiA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9nZXQtc3Vic3RpdHV0aW9uJyk7XG52YXIgd2VsbEtub3duU3ltYm9sID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3dlbGwta25vd24tc3ltYm9sJyk7XG52YXIgSVNfUFVSRSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1wdXJlJyk7XG5cbnZhciBSRVBMQUNFID0gd2VsbEtub3duU3ltYm9sKCdyZXBsYWNlJyk7XG52YXIgJFR5cGVFcnJvciA9IFR5cGVFcnJvcjtcbnZhciBpbmRleE9mID0gdW5jdXJyeVRoaXMoJycuaW5kZXhPZik7XG52YXIgcmVwbGFjZSA9IHVuY3VycnlUaGlzKCcnLnJlcGxhY2UpO1xudmFyIHN0cmluZ1NsaWNlID0gdW5jdXJyeVRoaXMoJycuc2xpY2UpO1xudmFyIG1heCA9IE1hdGgubWF4O1xuXG52YXIgc3RyaW5nSW5kZXhPZiA9IGZ1bmN0aW9uIChzdHJpbmcsIHNlYXJjaFZhbHVlLCBmcm9tSW5kZXgpIHtcbiAgaWYgKGZyb21JbmRleCA+IHN0cmluZy5sZW5ndGgpIHJldHVybiAtMTtcbiAgaWYgKHNlYXJjaFZhbHVlID09PSAnJykgcmV0dXJuIGZyb21JbmRleDtcbiAgcmV0dXJuIGluZGV4T2Yoc3RyaW5nLCBzZWFyY2hWYWx1ZSwgZnJvbUluZGV4KTtcbn07XG5cbi8vIGBTdHJpbmcucHJvdG90eXBlLnJlcGxhY2VBbGxgIG1ldGhvZFxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1zdHJpbmcucHJvdG90eXBlLnJlcGxhY2VhbGxcbiQoeyB0YXJnZXQ6ICdTdHJpbmcnLCBwcm90bzogdHJ1ZSB9LCB7XG4gIHJlcGxhY2VBbGw6IGZ1bmN0aW9uIHJlcGxhY2VBbGwoc2VhcmNoVmFsdWUsIHJlcGxhY2VWYWx1ZSkge1xuICAgIHZhciBPID0gcmVxdWlyZU9iamVjdENvZXJjaWJsZSh0aGlzKTtcbiAgICB2YXIgSVNfUkVHX0VYUCwgZmxhZ3MsIHJlcGxhY2VyLCBzdHJpbmcsIHNlYXJjaFN0cmluZywgZnVuY3Rpb25hbFJlcGxhY2UsIHNlYXJjaExlbmd0aCwgYWR2YW5jZUJ5LCByZXBsYWNlbWVudDtcbiAgICB2YXIgcG9zaXRpb24gPSAwO1xuICAgIHZhciBlbmRPZkxhc3RNYXRjaCA9IDA7XG4gICAgdmFyIHJlc3VsdCA9ICcnO1xuICAgIGlmICghaXNOdWxsT3JVbmRlZmluZWQoc2VhcmNoVmFsdWUpKSB7XG4gICAgICBJU19SRUdfRVhQID0gaXNSZWdFeHAoc2VhcmNoVmFsdWUpO1xuICAgICAgaWYgKElTX1JFR19FWFApIHtcbiAgICAgICAgZmxhZ3MgPSB0b1N0cmluZyhyZXF1aXJlT2JqZWN0Q29lcmNpYmxlKGdldFJlZ0V4cEZsYWdzKHNlYXJjaFZhbHVlKSkpO1xuICAgICAgICBpZiAoIX5pbmRleE9mKGZsYWdzLCAnZycpKSB0aHJvdyAkVHlwZUVycm9yKCdgLnJlcGxhY2VBbGxgIGRvZXMgbm90IGFsbG93IG5vbi1nbG9iYWwgcmVnZXhlcycpO1xuICAgICAgfVxuICAgICAgcmVwbGFjZXIgPSBnZXRNZXRob2Qoc2VhcmNoVmFsdWUsIFJFUExBQ0UpO1xuICAgICAgaWYgKHJlcGxhY2VyKSB7XG4gICAgICAgIHJldHVybiBjYWxsKHJlcGxhY2VyLCBzZWFyY2hWYWx1ZSwgTywgcmVwbGFjZVZhbHVlKTtcbiAgICAgIH0gZWxzZSBpZiAoSVNfUFVSRSAmJiBJU19SRUdfRVhQKSB7XG4gICAgICAgIHJldHVybiByZXBsYWNlKHRvU3RyaW5nKE8pLCBzZWFyY2hWYWx1ZSwgcmVwbGFjZVZhbHVlKTtcbiAgICAgIH1cbiAgICB9XG4gICAgc3RyaW5nID0gdG9TdHJpbmcoTyk7XG4gICAgc2VhcmNoU3RyaW5nID0gdG9TdHJpbmcoc2VhcmNoVmFsdWUpO1xuICAgIGZ1bmN0aW9uYWxSZXBsYWNlID0gaXNDYWxsYWJsZShyZXBsYWNlVmFsdWUpO1xuICAgIGlmICghZnVuY3Rpb25hbFJlcGxhY2UpIHJlcGxhY2VWYWx1ZSA9IHRvU3RyaW5nKHJlcGxhY2VWYWx1ZSk7XG4gICAgc2VhcmNoTGVuZ3RoID0gc2VhcmNoU3RyaW5nLmxlbmd0aDtcbiAgICBhZHZhbmNlQnkgPSBtYXgoMSwgc2VhcmNoTGVuZ3RoKTtcbiAgICBwb3NpdGlvbiA9IHN0cmluZ0luZGV4T2Yoc3RyaW5nLCBzZWFyY2hTdHJpbmcsIDApO1xuICAgIHdoaWxlIChwb3NpdGlvbiAhPT0gLTEpIHtcbiAgICAgIHJlcGxhY2VtZW50ID0gZnVuY3Rpb25hbFJlcGxhY2VcbiAgICAgICAgPyB0b1N0cmluZyhyZXBsYWNlVmFsdWUoc2VhcmNoU3RyaW5nLCBwb3NpdGlvbiwgc3RyaW5nKSlcbiAgICAgICAgOiBnZXRTdWJzdGl0dXRpb24oc2VhcmNoU3RyaW5nLCBzdHJpbmcsIHBvc2l0aW9uLCBbXSwgdW5kZWZpbmVkLCByZXBsYWNlVmFsdWUpO1xuICAgICAgcmVzdWx0ICs9IHN0cmluZ1NsaWNlKHN0cmluZywgZW5kT2ZMYXN0TWF0Y2gsIHBvc2l0aW9uKSArIHJlcGxhY2VtZW50O1xuICAgICAgZW5kT2ZMYXN0TWF0Y2ggPSBwb3NpdGlvbiArIHNlYXJjaExlbmd0aDtcbiAgICAgIHBvc2l0aW9uID0gc3RyaW5nSW5kZXhPZihzdHJpbmcsIHNlYXJjaFN0cmluZywgcG9zaXRpb24gKyBhZHZhbmNlQnkpO1xuICAgIH1cbiAgICBpZiAoZW5kT2ZMYXN0TWF0Y2ggPCBzdHJpbmcubGVuZ3RoKSB7XG4gICAgICByZXN1bHQgKz0gc3RyaW5nU2xpY2Uoc3RyaW5nLCBlbmRPZkxhc3RNYXRjaCk7XG4gICAgfVxuICAgIHJldHVybiByZXN1bHQ7XG4gIH1cbn0pO1xuIiwiLy8gVE9ETzogUmVtb3ZlIGZyb20gYGNvcmUtanNANGBcbnJlcXVpcmUoJy4uL21vZHVsZXMvZXMuc3RyaW5nLnJlcGxhY2UtYWxsJyk7XG4iLCJ2YXIgbWFwID0ge1xuXHRcIi4vYWZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FmLmpzXCIsXG5cdFwiLi9hZi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYWYuanNcIixcblx0XCIuL2FyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci5qc1wiLFxuXHRcIi4vYXItZHpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWR6LmpzXCIsXG5cdFwiLi9hci1kei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItZHouanNcIixcblx0XCIuL2FyLWt3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1rdy5qc1wiLFxuXHRcIi4vYXIta3cuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWt3LmpzXCIsXG5cdFwiLi9hci1seVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbHkuanNcIixcblx0XCIuL2FyLWx5LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1seS5qc1wiLFxuXHRcIi4vYXItbWFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLW1hLmpzXCIsXG5cdFwiLi9hci1tYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbWEuanNcIixcblx0XCIuL2FyLXBzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1wcy5qc1wiLFxuXHRcIi4vYXItcHMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXBzLmpzXCIsXG5cdFwiLi9hci1zYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItc2EuanNcIixcblx0XCIuL2FyLXNhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1zYS5qc1wiLFxuXHRcIi4vYXItdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXRuLmpzXCIsXG5cdFwiLi9hci10bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItdG4uanNcIixcblx0XCIuL2FyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci5qc1wiLFxuXHRcIi4vYXpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2F6LmpzXCIsXG5cdFwiLi9hei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXouanNcIixcblx0XCIuL2JlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZS5qc1wiLFxuXHRcIi4vYmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JlLmpzXCIsXG5cdFwiLi9iZ1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmcuanNcIixcblx0XCIuL2JnLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZy5qc1wiLFxuXHRcIi4vYm1cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JtLmpzXCIsXG5cdFwiLi9ibS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm0uanNcIixcblx0XCIuL2JuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi5qc1wiLFxuXHRcIi4vYm4tYmRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLWJkLmpzXCIsXG5cdFwiLi9ibi1iZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4tYmQuanNcIixcblx0XCIuL2JuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi5qc1wiLFxuXHRcIi4vYm9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JvLmpzXCIsXG5cdFwiLi9iby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm8uanNcIixcblx0XCIuL2JyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ici5qc1wiLFxuXHRcIi4vYnIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JyLmpzXCIsXG5cdFwiLi9ic1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnMuanNcIixcblx0XCIuL2JzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9icy5qc1wiLFxuXHRcIi4vY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NhLmpzXCIsXG5cdFwiLi9jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY2EuanNcIixcblx0XCIuL2NzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jcy5qc1wiLFxuXHRcIi4vY3MuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NzLmpzXCIsXG5cdFwiLi9jdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3YuanNcIixcblx0XCIuL2N2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jdi5qc1wiLFxuXHRcIi4vY3lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N5LmpzXCIsXG5cdFwiLi9jeS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3kuanNcIixcblx0XCIuL2RhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kYS5qc1wiLFxuXHRcIi4vZGEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RhLmpzXCIsXG5cdFwiLi9kZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUuanNcIixcblx0XCIuL2RlLWF0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1hdC5qc1wiLFxuXHRcIi4vZGUtYXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWF0LmpzXCIsXG5cdFwiLi9kZS1jaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtY2guanNcIixcblx0XCIuL2RlLWNoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1jaC5qc1wiLFxuXHRcIi4vZGUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLmpzXCIsXG5cdFwiLi9kdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZHYuanNcIixcblx0XCIuL2R2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kdi5qc1wiLFxuXHRcIi4vZWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VsLmpzXCIsXG5cdFwiLi9lbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZWwuanNcIixcblx0XCIuL2VuLWF1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1hdS5qc1wiLFxuXHRcIi4vZW4tYXUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWF1LmpzXCIsXG5cdFwiLi9lbi1jYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tY2EuanNcIixcblx0XCIuL2VuLWNhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1jYS5qc1wiLFxuXHRcIi4vZW4tZ2JcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWdiLmpzXCIsXG5cdFwiLi9lbi1nYi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tZ2IuanNcIixcblx0XCIuL2VuLWllXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pZS5qc1wiLFxuXHRcIi4vZW4taWUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWllLmpzXCIsXG5cdFwiLi9lbi1pbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWwuanNcIixcblx0XCIuL2VuLWlsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbC5qc1wiLFxuXHRcIi4vZW4taW5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWluLmpzXCIsXG5cdFwiLi9lbi1pbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taW4uanNcIixcblx0XCIuL2VuLW56XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1uei5qc1wiLFxuXHRcIi4vZW4tbnouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLW56LmpzXCIsXG5cdFwiLi9lbi1zZ1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tc2cuanNcIixcblx0XCIuL2VuLXNnLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1zZy5qc1wiLFxuXHRcIi4vZW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VvLmpzXCIsXG5cdFwiLi9lby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW8uanNcIixcblx0XCIuL2VzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy5qc1wiLFxuXHRcIi4vZXMtZG9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLWRvLmpzXCIsXG5cdFwiLi9lcy1kby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtZG8uanNcIixcblx0XCIuL2VzLW14XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1teC5qc1wiLFxuXHRcIi4vZXMtbXguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLW14LmpzXCIsXG5cdFwiLi9lcy11c1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtdXMuanNcIixcblx0XCIuL2VzLXVzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy11cy5qc1wiLFxuXHRcIi4vZXMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLmpzXCIsXG5cdFwiLi9ldFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXQuanNcIixcblx0XCIuL2V0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldC5qc1wiLFxuXHRcIi4vZXVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V1LmpzXCIsXG5cdFwiLi9ldS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXUuanNcIixcblx0XCIuL2ZhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mYS5qc1wiLFxuXHRcIi4vZmEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZhLmpzXCIsXG5cdFwiLi9maVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmkuanNcIixcblx0XCIuL2ZpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9maS5qc1wiLFxuXHRcIi4vZmlsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9maWwuanNcIixcblx0XCIuL2ZpbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmlsLmpzXCIsXG5cdFwiLi9mb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZm8uanNcIixcblx0XCIuL2ZvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mby5qc1wiLFxuXHRcIi4vZnJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLmpzXCIsXG5cdFwiLi9mci1jYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2EuanNcIixcblx0XCIuL2ZyLWNhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jYS5qc1wiLFxuXHRcIi4vZnItY2hcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNoLmpzXCIsXG5cdFwiLi9mci1jaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2guanNcIixcblx0XCIuL2ZyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci5qc1wiLFxuXHRcIi4vZnlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2Z5LmpzXCIsXG5cdFwiLi9meS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnkuanNcIixcblx0XCIuL2dhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nYS5qc1wiLFxuXHRcIi4vZ2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dhLmpzXCIsXG5cdFwiLi9nZFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2QuanNcIixcblx0XCIuL2dkLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nZC5qc1wiLFxuXHRcIi4vZ2xcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dsLmpzXCIsXG5cdFwiLi9nbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2wuanNcIixcblx0XCIuL2dvbS1kZXZhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tZGV2YS5qc1wiLFxuXHRcIi4vZ29tLWRldmEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1kZXZhLmpzXCIsXG5cdFwiLi9nb20tbGF0blwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWxhdG4uanNcIixcblx0XCIuL2dvbS1sYXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tbGF0bi5qc1wiLFxuXHRcIi4vZ3VcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2d1LmpzXCIsXG5cdFwiLi9ndS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ3UuanNcIixcblx0XCIuL2hlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oZS5qc1wiLFxuXHRcIi4vaGUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hlLmpzXCIsXG5cdFwiLi9oaVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGkuanNcIixcblx0XCIuL2hpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oaS5qc1wiLFxuXHRcIi4vaHJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hyLmpzXCIsXG5cdFwiLi9oci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHIuanNcIixcblx0XCIuL2h1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9odS5qc1wiLFxuXHRcIi4vaHUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h1LmpzXCIsXG5cdFwiLi9oeS1hbVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHktYW0uanNcIixcblx0XCIuL2h5LWFtLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oeS1hbS5qc1wiLFxuXHRcIi4vaWRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lkLmpzXCIsXG5cdFwiLi9pZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaWQuanNcIixcblx0XCIuL2lzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pcy5qc1wiLFxuXHRcIi4vaXMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lzLmpzXCIsXG5cdFwiLi9pdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQuanNcIixcblx0XCIuL2l0LWNoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC1jaC5qc1wiLFxuXHRcIi4vaXQtY2guanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LWNoLmpzXCIsXG5cdFwiLi9pdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQuanNcIixcblx0XCIuL2phXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qYS5qc1wiLFxuXHRcIi4vamEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2phLmpzXCIsXG5cdFwiLi9qdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvanYuanNcIixcblx0XCIuL2p2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qdi5qc1wiLFxuXHRcIi4va2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2thLmpzXCIsXG5cdFwiLi9rYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2EuanNcIixcblx0XCIuL2trXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ray5qc1wiLFxuXHRcIi4va2suanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2trLmpzXCIsXG5cdFwiLi9rbVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva20uanNcIixcblx0XCIuL2ttLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbS5qc1wiLFxuXHRcIi4va25cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tuLmpzXCIsXG5cdFwiLi9rbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva24uanNcIixcblx0XCIuL2tvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rby5qc1wiLFxuXHRcIi4va28uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tvLmpzXCIsXG5cdFwiLi9rdVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3UuanNcIixcblx0XCIuL2t1LWttclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3Uta21yLmpzXCIsXG5cdFwiLi9rdS1rbXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LWttci5qc1wiLFxuXHRcIi4va3UuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LmpzXCIsXG5cdFwiLi9reVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3kuanNcIixcblx0XCIuL2t5LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9reS5qc1wiLFxuXHRcIi4vbGJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xiLmpzXCIsXG5cdFwiLi9sYi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbGIuanNcIixcblx0XCIuL2xvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sby5qc1wiLFxuXHRcIi4vbG8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xvLmpzXCIsXG5cdFwiLi9sdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHQuanNcIixcblx0XCIuL2x0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdC5qc1wiLFxuXHRcIi4vbHZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x2LmpzXCIsXG5cdFwiLi9sdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHYuanNcIixcblx0XCIuL21lXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tZS5qc1wiLFxuXHRcIi4vbWUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21lLmpzXCIsXG5cdFwiLi9taVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWkuanNcIixcblx0XCIuL21pLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9taS5qc1wiLFxuXHRcIi4vbWtcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21rLmpzXCIsXG5cdFwiLi9tay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWsuanNcIixcblx0XCIuL21sXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbC5qc1wiLFxuXHRcIi4vbWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21sLmpzXCIsXG5cdFwiLi9tblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbW4uanNcIixcblx0XCIuL21uLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbi5qc1wiLFxuXHRcIi4vbXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21yLmpzXCIsXG5cdFwiLi9tci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXIuanNcIixcblx0XCIuL21zXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy5qc1wiLFxuXHRcIi4vbXMtbXlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLW15LmpzXCIsXG5cdFwiLi9tcy1teS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMtbXkuanNcIixcblx0XCIuL21zLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy5qc1wiLFxuXHRcIi4vbXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL210LmpzXCIsXG5cdFwiLi9tdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXQuanNcIixcblx0XCIuL215XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9teS5qc1wiLFxuXHRcIi4vbXkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL215LmpzXCIsXG5cdFwiLi9uYlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmIuanNcIixcblx0XCIuL25iLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uYi5qc1wiLFxuXHRcIi4vbmVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25lLmpzXCIsXG5cdFwiLi9uZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmUuanNcIixcblx0XCIuL25sXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC5qc1wiLFxuXHRcIi4vbmwtYmVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLWJlLmpzXCIsXG5cdFwiLi9ubC1iZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwtYmUuanNcIixcblx0XCIuL25sLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC5qc1wiLFxuXHRcIi4vbm5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25uLmpzXCIsXG5cdFwiLi9ubi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbm4uanNcIixcblx0XCIuL29jLWxuY1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvb2MtbG5jLmpzXCIsXG5cdFwiLi9vYy1sbmMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL29jLWxuYy5qc1wiLFxuXHRcIi4vcGEtaW5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BhLWluLmpzXCIsXG5cdFwiLi9wYS1pbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGEtaW4uanNcIixcblx0XCIuL3BsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wbC5qc1wiLFxuXHRcIi4vcGwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BsLmpzXCIsXG5cdFwiLi9wdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQuanNcIixcblx0XCIuL3B0LWJyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC1ici5qc1wiLFxuXHRcIi4vcHQtYnIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LWJyLmpzXCIsXG5cdFwiLi9wdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQuanNcIixcblx0XCIuL3JvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9yby5qc1wiLFxuXHRcIi4vcm8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3JvLmpzXCIsXG5cdFwiLi9ydVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcnUuanNcIixcblx0XCIuL3J1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ydS5qc1wiLFxuXHRcIi4vc2RcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NkLmpzXCIsXG5cdFwiLi9zZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2QuanNcIixcblx0XCIuL3NlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZS5qc1wiLFxuXHRcIi4vc2UuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NlLmpzXCIsXG5cdFwiLi9zaVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2kuanNcIixcblx0XCIuL3NpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zaS5qc1wiLFxuXHRcIi4vc2tcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NrLmpzXCIsXG5cdFwiLi9zay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2suanNcIixcblx0XCIuL3NsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zbC5qc1wiLFxuXHRcIi4vc2wuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NsLmpzXCIsXG5cdFwiLi9zcVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3EuanNcIixcblx0XCIuL3NxLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcS5qc1wiLFxuXHRcIi4vc3JcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLmpzXCIsXG5cdFwiLi9zci1jeXJsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci1jeXJsLmpzXCIsXG5cdFwiLi9zci1jeXJsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci1jeXJsLmpzXCIsXG5cdFwiLi9zci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3IuanNcIixcblx0XCIuL3NzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcy5qc1wiLFxuXHRcIi4vc3MuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NzLmpzXCIsXG5cdFwiLi9zdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3YuanNcIixcblx0XCIuL3N2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdi5qc1wiLFxuXHRcIi4vc3dcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N3LmpzXCIsXG5cdFwiLi9zdy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3cuanNcIixcblx0XCIuL3RhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90YS5qc1wiLFxuXHRcIi4vdGEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RhLmpzXCIsXG5cdFwiLi90ZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGUuanNcIixcblx0XCIuL3RlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ZS5qc1wiLFxuXHRcIi4vdGV0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ZXQuanNcIixcblx0XCIuL3RldC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGV0LmpzXCIsXG5cdFwiLi90Z1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGcuanNcIixcblx0XCIuL3RnLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90Zy5qc1wiLFxuXHRcIi4vdGhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RoLmpzXCIsXG5cdFwiLi90aC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGguanNcIixcblx0XCIuL3RrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ay5qc1wiLFxuXHRcIi4vdGsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RrLmpzXCIsXG5cdFwiLi90bC1waFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGwtcGguanNcIixcblx0XCIuL3RsLXBoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90bC1waC5qc1wiLFxuXHRcIi4vdGxoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90bGguanNcIixcblx0XCIuL3RsaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGxoLmpzXCIsXG5cdFwiLi90clwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHIuanNcIixcblx0XCIuL3RyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ci5qc1wiLFxuXHRcIi4vdHpsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90emwuanNcIixcblx0XCIuL3R6bC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHpsLmpzXCIsXG5cdFwiLi90em1cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS5qc1wiLFxuXHRcIi4vdHptLWxhdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS1sYXRuLmpzXCIsXG5cdFwiLi90em0tbGF0bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHptLWxhdG4uanNcIixcblx0XCIuL3R6bS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHptLmpzXCIsXG5cdFwiLi91Zy1jblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWctY24uanNcIixcblx0XCIuL3VnLWNuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91Zy1jbi5qc1wiLFxuXHRcIi4vdWtcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VrLmpzXCIsXG5cdFwiLi91ay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWsuanNcIixcblx0XCIuL3VyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ci5qc1wiLFxuXHRcIi4vdXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VyLmpzXCIsXG5cdFwiLi91elwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXouanNcIixcblx0XCIuL3V6LWxhdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LWxhdG4uanNcIixcblx0XCIuL3V6LWxhdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LWxhdG4uanNcIixcblx0XCIuL3V6LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei5qc1wiLFxuXHRcIi4vdmlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3ZpLmpzXCIsXG5cdFwiLi92aS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdmkuanNcIixcblx0XCIuL3gtcHNldWRvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS94LXBzZXVkby5qc1wiLFxuXHRcIi4veC1wc2V1ZG8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3gtcHNldWRvLmpzXCIsXG5cdFwiLi95b1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveW8uanNcIixcblx0XCIuL3lvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS95by5qc1wiLFxuXHRcIi4vemgtY25cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWNuLmpzXCIsXG5cdFwiLi96aC1jbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtY24uanNcIixcblx0XCIuL3poLWhrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1oay5qc1wiLFxuXHRcIi4vemgtaGsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWhrLmpzXCIsXG5cdFwiLi96aC1tb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtbW8uanNcIixcblx0XCIuL3poLW1vLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1tby5qc1wiLFxuXHRcIi4vemgtdHdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLXR3LmpzXCIsXG5cdFwiLi96aC10dy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtdHcuanNcIlxufTtcblxuXG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dChyZXEpIHtcblx0dmFyIGlkID0gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSk7XG5cdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKGlkKTtcbn1cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpIHtcblx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhtYXAsIHJlcSkpIHtcblx0XHR2YXIgZSA9IG5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIgKyByZXEgKyBcIidcIik7XG5cdFx0ZS5jb2RlID0gJ01PRFVMRV9OT1RfRk9VTkQnO1xuXHRcdHRocm93IGU7XG5cdH1cblx0cmV0dXJuIG1hcFtyZXFdO1xufVxud2VicGFja0NvbnRleHQua2V5cyA9IGZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0S2V5cygpIHtcblx0cmV0dXJuIE9iamVjdC5rZXlzKG1hcCk7XG59O1xud2VicGFja0NvbnRleHQucmVzb2x2ZSA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZTtcbm1vZHVsZS5leHBvcnRzID0gd2VicGFja0NvbnRleHQ7XG53ZWJwYWNrQ29udGV4dC5pZCA9IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZSBzeW5jIHJlY3Vyc2l2ZSBeXFxcXC5cXFxcLy4qJFwiOyJdLCJuYW1lcyI6WyJSZWFjdCIsInVzZUVmZmVjdCIsInVzZVN0YXRlIiwiY3JlYXRlUm9vdCIsImF4aW9zIiwiUmVhY3RIVE1MVGFibGVUb0V4Y2VsIiwiTnVtYmVyRm9ybWF0IiwiTW9tZW50IiwiJCIsIkNvbXB0ZXNDbGllbnRzIiwiY2xpZW50cyIsInNldENsaWVudHMiLCJ0b3pjb3V0IiwidG96cmVnbGUiLCJ0b3pzb2xkZSIsInRvdGRlY252IiwidG90ZGVjdiIsInRvdGZhY252IiwidG90ZmFjdiIsInRvc29sZGVDbGllbnQiLCJmZXRjaENsaWVudHMiLCJkZGUiLCJKU09OIiwicGFyc2UiLCJ2YWwiLCJyZW5kZXJFdGF0cyIsIm1hcCIsImNsaWVudCIsInpjb3V0IiwiY291bnRkZXZ2YSIsInpyZWdsZSIsInpzb2xkZSIsImNvdW50ZGVjbnYiLCJjb3VudGRlY3YiLCJjb3VudGZhY252IiwiY291bnRmYWN2Iiwic29sZGVDbGllbnQiLCJkZXZpc3MiLCJkZXZpcyIsImRlY29tcHRlcyIsImZhY3R1cmVzIiwiY2hhbnRpZXJzIiwidHlwZSIsImNvcmJlaWxsZSIsImV0YXQiLCJwYXJzZUZsb2F0IiwidG90YWx0dGMiLCJjaGFudGllciIsInJlZ2xlbWVudCIsImRlY29tcHRlIiwicHR2YSIsImFwYXllciIsInR2YSIsImZhY3R1cmUiLCJyZWxlcyIsInJlbGV2ZXIiLCJyZWxlIiwibW9udGFudCIsImNoYW5zIiwicmVuZGVyQ2hhbnRpZXJzIiwiY2hhbiIsInNzZGVjbnYiLCJzc2RlY3YiLCJzc2ZhY252Iiwic3NmYWN2IiwiY29hY2NudiIsImNvYWNjdiIsInNvbGRlQ2xpIiwiZGVjcyIsImZhY3MiLCJkZWMiLCJmYWMiLCJyZWxzIiwicmVsIiwic3NkZXZpcyIsInNzZGVjb21wdGVzIiwic3NmYWNzIiwiY2NkZSIsImNjZGVjIiwiY2NmYSIsInJlbmRlckRldmlzIiwiZGVldiIsImlkIiwidmFsaWRlRGV2aXMiLCJtYXJnaW5SaWdodCIsImRldmFsaWRlRGV2aXMiLCJzaGFzaGEiLCJpZGRldmlzIiwidG90YWxodCIsIm1hcmdpblRvcCIsIl9faHRtbCIsImRldnJlZmVyZW5jZSIsInJlbmRlckRlY29tcHRlcyIsImRlZWMiLCJ2YWxpZGVEZWNvbXB0ZSIsImRldmFsaWRlRGVjb21wdGUiLCJudW1kZWNvbXB0ZSIsInR0YyIsInJlbmRlckZhY3R1cmVzIiwiZmFhYyIsIm51bWZhY3R1cmUiLCJhY29tcHRlIiwiZmFjdHJlZmVyZW5jZSIsInNob3dDaGFudGllckNvbnRlbnQiLCJub21jaGFudGllciIsInRvVXBwZXJDYXNlIiwiY291dCIsInNob3dDaGFudGllciIsIm5vbWNsaWVudCIsImhhbmRsZUNsaWVudHMiLCJldmVudCIsImZpbHRlciIsInRhcmdldCIsInZhbHVlIiwidG9Mb3dlckNhc2UiLCJ0b2dnbGUiLCJ0ZXh0IiwicmVwbGFjZUFsbCIsImluZGV4T2YiLCJoYXNDbGFzcyIsInJlbW92ZUNsYXNzIiwiYWRkQ2xhc3MiLCJwYWRkaW5nTGVmdCIsImZvbnRTaXplIiwiZm9udFdlaWdodCIsIm92ZXJmbG93Iiwid2lkdGgiLCJyb290IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInJlbmRlciIsImUiLCJwcm9wcyIsImZvcm1hdE51bWJlciIsIm51bSIsInByZWNpc2lvbiIsInNlcGFyYXRvciIsInBhcnRzIiwiTnVtYmVyIiwidG9GaXhlZCIsInRvU3RyaW5nIiwic3BsaXQiLCJyZXBsYWNlIiwiam9pbiIsIm51bWIiLCJmbiIsInNpbXBsZVBhZ2luYXRpb24iLCJvcHRpb25zIiwiZGVmYXVsdHMiLCJwZXJQYWdlIiwiY29udGFpbmVyQ2xhc3MiLCJwcmV2aW91c0J1dHRvbkNsYXNzIiwibmV4dEJ1dHRvbkNsYXNzIiwicHJldmlvdXNCdXR0b25UZXh0IiwibmV4dEJ1dHRvblRleHQiLCJjdXJyZW50UGFnZSIsInNldHRpbmdzIiwiZXh0ZW5kIiwiZWFjaCIsIiRyb3dzIiwicGFnZXMiLCJNYXRoIiwiY2VpbCIsImxlbmd0aCIsImNvbnRhaW5lciIsImNyZWF0ZUVsZW1lbnQiLCJiUHJldmlvdXMiLCJiTmV4dCIsIm9mIiwiaW5uZXJIVE1MIiwiY2xhc3NOYW1lIiwic3R5bGUiLCJjbGFzc0xpc3QiLCJhZGQiLCJtYXJnaW5MZWZ0IiwidGV4dEFsaWduIiwibWFyZ2luQm90dG9tIiwiYXBwZW5kQ2hpbGQiLCJhZnRlciIsInVwZGF0ZSIsImNsaWNrIiwiZnJvbSIsInRvIiwiaGlkZSIsInNsaWNlIiwic2hvdyIsImpRdWVyeSJdLCJzb3VyY2VSb290IjoiIn0=