(self["webpackChunk"] = self["webpackChunk"] || []).push([["apchargesinternes"],{

/***/ "./assets/apchargesinternes.js":
/*!*************************************!*\
  !*** ./assets/apchargesinternes.js ***!
  \*************************************/
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
/* harmony import */ var _components_chantiers_ChargesInternes_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./components/chantiers/ChargesInternes.js */ "./assets/components/chantiers/ChargesInternes.js");















/***/ }),

/***/ "./assets/components/chantiers/ChargesInternes.js":
/*!********************************************************!*\
  !*** ./assets/components/chantiers/ChargesInternes.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_esnext_string_replace_all_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/esnext.string.replace-all.js */ "./node_modules/core-js/modules/esnext.string.replace-all.js");
/* harmony import */ var core_js_modules_esnext_string_replace_all_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_string_replace_all_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_8__);
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
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.symbol.async-iterator.js */ "./node_modules/core-js/modules/es.symbol.async-iterator.js");
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.symbol.to-string-tag.js */ "./node_modules/core-js/modules/es.symbol.to-string-tag.js");
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.json.to-string-tag.js */ "./node_modules/core-js/modules/es.json.to-string-tag.js");
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.math.to-string-tag.js */ "./node_modules/core-js/modules/es.math.to-string-tag.js");
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_28__);
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! core-js/modules/es.array.reverse.js */ "./node_modules/core-js/modules/es.array.reverse.js");
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_29___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_29__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_30___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_30__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_36__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! react-html-table-to-excel */ "./node_modules/react-html-table-to-excel/index.js");
/* harmony import */ var _fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! ../../fonctions/NumberFormat */ "./assets/fonctions/NumberFormat.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_34__ = __webpack_require__(/*! react-moment */ "./node_modules/react-moment/dist/index.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_34___default = /*#__PURE__*/__webpack_require__.n(react_moment__WEBPACK_IMPORTED_MODULE_34__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_35__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_35___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_35__);
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







var ChargesInternes = function ChargesInternes() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_30__.useState)([]),
    _useState2 = _slicedToArray(_useState, 2),
    persos = _useState2[0],
    setPersos = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_30__.useState)([]),
    _useState4 = _slicedToArray(_useState3, 2),
    caissin = _useState4[0],
    setCaissin = _useState4[1];
  var fetchPersos = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      var dede;
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            dede = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_35___default()('#jsonpersos').val());
            setPersos(dede);
          case 2:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function fetchPersos() {
      return _ref.apply(this, arguments);
    };
  }();
  var fetchCaisseInterne = /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      var dede;
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            dede = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_35___default()('#caisseinterne').val());
            setCaissin(dede);
          case 2:
          case "end":
            return _context2.stop();
        }
      }, _callee2);
    }));
    return function fetchCaisseInterne() {
      return _ref2.apply(this, arguments);
    };
  }();
  if (jquery__WEBPACK_IMPORTED_MODULE_35___default()("#idcharge").val()) {
    jquery__WEBPACK_IMPORTED_MODULE_35___default()('#modalInterne').modal('show');
  }
  (0,react__WEBPACK_IMPORTED_MODULE_30__.useEffect)(function () {
    fetchPersos();
    fetchCaisseInterne();
  }, []);
  var deleteCaisse = /*#__PURE__*/function () {
    var _ref3 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3(id) {
      return _regeneratorRuntime().wrap(function _callee3$(_context3) {
        while (1) switch (_context3.prev = _context3.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_35___default()('#Traitement').modal('show');
            _context3.next = 3;
            return (0,axios__WEBPACK_IMPORTED_MODULE_36__["default"])({
              method: 'DELETE',
              url: '/crm/caisse/del/' + id,
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              window.location.reload();
            })["catch"](function (error) {});
          case 3:
          case "end":
            return _context3.stop();
        }
      }, _callee3);
    }));
    return function deleteCaisse(_x2) {
      return _ref3.apply(this, arguments);
    };
  }();
  var valideCaisse = /*#__PURE__*/function () {
    var _ref4 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4(id) {
      return _regeneratorRuntime().wrap(function _callee4$(_context4) {
        while (1) switch (_context4.prev = _context4.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_35___default()('#Traitement').modal('show');
            _context4.next = 3;
            return (0,axios__WEBPACK_IMPORTED_MODULE_36__["default"])({
              method: 'GET',
              url: '/crm/caisse/valider/' + id,
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              window.location.reload();
            })["catch"](function (error) {});
          case 3:
          case "end":
            return _context4.stop();
        }
      }, _callee4);
    }));
    return function valideCaisse(_x3) {
      return _ref4.apply(this, arguments);
    };
  }();
  var devalideCaisse = /*#__PURE__*/function () {
    var _ref5 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee5(id) {
      return _regeneratorRuntime().wrap(function _callee5$(_context5) {
        while (1) switch (_context5.prev = _context5.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_35___default()('#Traitement').modal('show');
            _context5.next = 3;
            return (0,axios__WEBPACK_IMPORTED_MODULE_36__["default"])({
              method: 'GET',
              url: '/crm/caisse/devalider/' + id,
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              window.location.reload();
            })["catch"](function (error) {});
          case 3:
          case "end":
            return _context5.stop();
        }
      }, _callee5);
    }));
    return function devalideCaisse(_x4) {
      return _ref5.apply(this, arguments);
    };
  }();
  var charcount = 0;
  var frinterne = 0;
  var renderInterne = persos.map(function (perso) {
    var caisses = perso.caisses;
    var cclen = 0;
    var freinterne = 0;
    charcount = charcount + 1;
    if (perso.type !== 'personnelle') {
      charcount = charcount + 1;
    }
    var renderCais = caisses.map(function (caisse) {
      if (caisse.corbeille === null && caisse.chantier.type === "frais") {
        var opir = "";
        if (caisse.etat === "valide") {
          if (caisse.operation === "debit") {
            frinterne = frinterne + caisse.montant;
            freinterne = freinterne + caisse.montant;
            opir = "Sortie de caisse";
          } else {
            frinterne = frinterne - caisse.montant;
            freinterne = freinterne - caisse.montant;
            opir = "Entrée de caisse";
          }
          cclen = cclen + 1;
        }
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
          key: caisse.id,
          className: perso.id + 'charge' + ' hide'
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
          className: "text-left bolo600 ml30 borde"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_34___default()), {
          format: "DD/MM/YYYY"
        }, caisse.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
          className: "ml30 borde"
        }, caisse.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
          onClick: function onClick() {
            devalideCaisse(caisse.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill bg-blue",
          style: {
            marginRight: "5px"
          }
        }, "V"), caisse.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
          onClick: function onClick() {
            valideCaisse(caisse.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey",
          style: {
            marginRight: "5px"
          }
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
          onClick: function onClick() {
            deleteCaisse(caisse.id);
          },
          style: {
            marginRight: "5px"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
          className: "fa fa-trash col-pink",
          title: "Supprimer",
          "aria-hidden": "true"
        }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
          href: "#",
          onClick: function onClick() {
            shasha(caisse.id, 'imprimcaisse');
          },
          style: {
            marginRight: "5px"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
          className: "fa fa-eye col-green",
          "aria-hidden": "true"
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
          href: "/crm/caisse/".concat(caisse.id, "/").concat(caisse.chantier.id),
          className: "text-left col-blue-grey bolo600"
        }, "Caisse N\xB0 ", caisse.numcaisse, " ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
          className: "text-center"
        }, opir), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
          className: "text-right borde"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
          numb: caisse.montant
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
          className: "text-left ml30 borde",
          colSpan: "5",
          dangerouslySetInnerHTML: {
            __html: caisse.caissereference
          }
        }));
      } else {
        return null;
      }
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.type !== 'personnelle' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
      className: "paginate5",
      key: perso.id,
      onClick: function onClick() {
        showBonCharge(perso.id);
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "mw30 text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
      className: "form-check-input",
      type: "checkbox",
      value: perso.id,
      name: "inter"
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("b", {
      className: "col-blue"
    }, "(", cclen, ") "), " ", perso.noms), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right p-r-15"
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: freinterne
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left col-blue p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
      className: "fa fa-user pri"
    }), " ", perso.dobyuser !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.dobyuser.nom.toUpperCase(), " ", perso.dobyuser.prenoms.toUpperCase()))), renderCais)));
  });
  var bincount = 0;
  var frnvinterne = 0;
  var renderCaisseInterneNonValides = caissin.map(function (caiss) {
    if (caiss.corbeille === null && caiss.etat === "save") {
      if (caiss.personnel.corbeille === null) {
        bincount = bincount + 1;
        frnvinterne = frnvinterne + caiss.montant;
      }
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, caiss.corbeille === null && caiss.personnel.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, caiss.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
      key: caiss.id,
      className: "paginate6"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "mw30 text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
      className: "form-check-input",
      type: "checkbox",
      value: caiss.id,
      name: "caissneva"
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
      href: "#",
      onClick: function onClick() {
        shasha(caiss.id, 'imprimcaisse');
      },
      style: {
        marginRight: "5px"
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
      className: "fa fa-eye col-green",
      "aria-hidden": "true"
    }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_34___default()), {
      format: "DD/MM/YYYY"
    }, caiss.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
      href: "/crm/caisse/".concat(caiss.id, "/").concat(caiss.chantier.id)
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
      className: "badge badge-pill bg-blue-grey col-white m-r-5"
    }, "V"), caiss.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null, "  ", caiss.personnel !== null && caiss.personnel.noms.toUpperCase()), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      dangerouslySetInnerHTML: {
        __html: caiss.personnel !== null && caiss.caissereference
      }
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right"
    }, caiss.montant), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left pri bolo600"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
      className: "fa fa-user pri"
    }), "\xA0", caiss.dobyuser.nom.toUpperCase() + ' ', " ", caiss.dobyuser.prenoms.toUpperCase()))));
  });
  var bivcount = 0;
  var frvinterne = 0;
  var renderCaisseInterneValides = caissin.map(function (caiss) {
    if (caiss.corbeille === null && caiss.etat === "valide") {
      if (caiss.personnel.corbeille === null) {
        bivcount = bivcount + 1;
        frvinterne = frvinterne + caiss.montant;
      }
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, caiss.corbeille === null && caiss.personnel.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, caiss.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
      key: caiss.id,
      className: "paginate7"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "mw30 text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
      className: "form-check-input",
      type: "checkbox",
      value: caiss.id,
      name: "caissva"
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
      href: "#",
      onClick: function onClick() {
        shasha(caiss.id, 'imprimcaisse');
      },
      style: {
        marginRight: "5px"
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
      className: "fa fa-eye col-green",
      "aria-hidden": "true"
    }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_34___default()), {
      format: "DD/MM/YYYY"
    }, caiss.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
      href: "/crm/caisse/".concat(caiss.id, "/").concat(caiss.chantier.id)
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
      className: "badge badge-pill badge-primary m-r-5"
    }, "V"), caiss.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null, "  ", caiss.personnel !== null && caiss.personnel.noms.toUpperCase()), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      dangerouslySetInnerHTML: {
        __html: caiss.personnel !== null && caiss.caissereference
      }
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: caiss.montant
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left pri bolo600"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
      className: "fa fa-user pri"
    }), " \xA0", caiss.dobyuser.nom.toUpperCase() + ' ', " ", caiss.dobyuser.prenoms.toUpperCase()))));
  });
  var ricount = 0;
  var soreinternedebit = 0;
  var soreinternecredit = 0;
  var renderReleInterne = caissin.map(function (caiss) {
    if (caiss.corbeille === null && caiss.etat === "valide") {
      ricount = ricount + 1;
      if (caiss.operation === "debit") {
        soreinternedebit = soreinternedebit + caiss.montant;
      }
      if (caiss.operation === "credit") {
        soreinternecredit = soreinternecredit + caiss.montant;
      }
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, caiss.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, caiss.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
      key: caiss.id,
      className: "paginate10"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_34___default()), {
      format: "DD/MM/YYYY"
    }, caiss.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
      href: "/crm/caisse/".concat(caiss.id, "/").concat(caiss.chantier.id)
    }, caiss.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left",
      dangerouslySetInnerHTML: {
        __html: caiss.caissereference
      }
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right"
    }, caiss.operation === 'debit' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: caiss.montant
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right"
    }, caiss.operation === 'credit' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: caiss.montant
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left pri bolo600"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
      className: "fa fa-user pri"
    }), " \xA0", caiss.dobyuser.nom.toUpperCase() + ' ', " ", caiss.dobyuser.prenoms.toUpperCase()))));
  });
  var handleInterne = function handleInterne(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()("#internes tr.paginate5").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  var handleBonInterneNonValides = function handleBonInterneNonValides(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()("#boninternesneva tr.paginate6").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  var handleBonInterneValides = function handleBonInterneValides(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()("#boninternesva tr.paginate7").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  var handleReleInterne = function handleReleInterne(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()("#releInterne tr.paginate10").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  var showBonCharge = function showBonCharge(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_35___default()('.' + id + 'charge').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('.' + id + 'charge').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('.' + id + 'charge').addClass('hide');
    }
  };
  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#editInterne").off().on("click", function () {
    jquery__WEBPACK_IMPORTED_MODULE_35___default().each(jquery__WEBPACK_IMPORTED_MODULE_35___default()("input[name='inter']:checked"), function () {
      window.$('#Traitement').modal('show');
      window.location.href = '/crm/chargesinternes/edit/charge/' + jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).val();
      return false;
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#delInterne").off().on("click", function () {
    jquery__WEBPACK_IMPORTED_MODULE_35___default().each(jquery__WEBPACK_IMPORTED_MODULE_35___default()("input[name='inter']:checked"), function () {
      window.$('#Traitement').modal('show');
      (0,axios__WEBPACK_IMPORTED_MODULE_36__["default"])({
        method: 'DELETE',
        url: '/crm/personnel/del/' + jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).val()
      }).then(function (response) {
        window.location.reload();
      })["catch"](function (error) {
        jquery__WEBPACK_IMPORTED_MODULE_35___default()('#Traitement').modal('hide');
        jquery__WEBPACK_IMPORTED_MODULE_35___default()('#ModalErreur').modal('show');
      });
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addInter').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addInter').hide();
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#closeInter').hide();
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#loadInter').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_35___default().ajax({
        type: 'POST',
        url: '/crm/personnel/operation/add',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addInterForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          location.reload();
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_35___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#updInter').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#updInter').hide();
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#closerChargeInterne').hide();
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#loadInter').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_35___default().ajax({
        type: 'POST',
        url: '/crm/personnel/update/' + jquery__WEBPACK_IMPORTED_MODULE_35___default()("#idcharge").val(),
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addInterForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          window.location.href = '/crm/chargesinternes/';
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_35___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#adderCaisse').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#adderCaisse').hide();
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#closerCaisse').hide();
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#loaderCaisse').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#editor19').val(CKEDITOR.instances['editor19'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#editor20').val(CKEDITOR.instances['editor20'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_35___default().ajax({
        type: 'POST',
        url: '/crm/caisse/frais/add',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addCaisseChargeForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          if (jqXHR.status == '201') {
            jquery__WEBPACK_IMPORTED_MODULE_35___default()('#mdModalCaisse').modal('toggle');
            window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier'];
          }
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_35___default()('#mdModalCaisse').modal('toggle');
          jquery__WEBPACK_IMPORTED_MODULE_35___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_35___default()(".js-example-basic-multiple").select2();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()(".js-example-basic-single").select2();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()("#internes").simplePagination('tbody .paginate5');
  });
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-12",
    style: {
      paddingLeft: "0",
      marginTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("button", {
    type: "button",
    "data-color": "blue",
    className: "btn bg-blue-grey text-white",
    "data-toggle": "modal",
    "data-target": "#modalInterne",
    style: {
      border: "1px solid #dddfeb"
    }
  }, "+ CHARGE INTERNE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("button", {
    type: "button",
    "data-toggle": "modal",
    "data-target": "#modalCaisseCharge",
    className: "btn bg-blue-grey text-white",
    style: {
      border: "1px solid #dddfeb"
    }
  }, "+ PAIEMENT CHARGE INTERNE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-group",
    id: "accordion_2",
    role: "tablist",
    "aria-multiselectable": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingChargin"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    className: "collapsed  outai col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionChargin",
    href: "#collapseChargin",
    "aria-expanded": "false",
    "aria-controls": "collapseChargin"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "Les Charges Internes", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, charcount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    id: "collapseChargin",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingChargin"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "table-responsive shadow"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    href: "#",
    id: "editInterne",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fa fa fa-edit  col-green"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    href: "#",
    id: "delInterne",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fa fa fa-trash col-pink "
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_32__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "internes",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "CHARGE INTERNE",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleInterne,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("table", {
    id: "internes",
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%",
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw400 p-r-15"
  }, "CHARGE INTERNE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw150 p-r-15"
  }, "OP\xC9RATIONS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw150 text-right p-r-15"
  }, "MONTANT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw200"
  }, "AJOUTER PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tbody", null, renderInterne), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-right col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: frinterne
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null)))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingfrais"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionfrais",
    href: "#collapsefrais",
    "aria-expanded": "false",
    "aria-controls": "collapsefrais"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "Bons internes non valid\xE9s", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, bincount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    id: "collapsefrais",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingfrais"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "table-responsive shadow"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "table-responsive shadow bg-white",
    style: {
      color: "#555",
      overflowX: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "m-r-5 vareact",
    title: "Tout s\xE9lectionner"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
    type: "checkbox",
    name: "checkBinva",
    id: "checkedBinva"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    title: "Valider",
    style: {
      textDecoration: "none"
    },
    className: "m-r-5 vareact bg-blue bolo700 col-white",
    id: "valideCaisse"
  }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    title: "Supprimer",
    id: "delCaisse",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fa fa fa-trash col-pink "
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_32__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "boninternesneva",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "BONS DE CAISSE INTERNES NON VALID\xC9S",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleBonInterneNonValides,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    id: "boninternesneva",
    style: {
      width: "100%",
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    className: "text-center",
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw30 text-center"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw120"
  }, "N\xB0 BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw300"
  }, "FACTUR\xC9 \xC0"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw200"
  }, "R\xC9F\xC9RENCE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "MONTANT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw200"
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tbody", null, renderCaisseInterneNonValides), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: frnvinterne
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingfraise"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionfraise",
    href: "#collapsefraise",
    "aria-expanded": "false",
    "aria-controls": "collapsefraise"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "Bons internes valid\xE9s", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, bivcount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    id: "collapsefraise",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingfraise"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "table-responsive shadow"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "table-responsive shadow bg-white",
    style: {
      color: "#555",
      overflowX: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "m-r-5 vareact",
    title: "Tout s\xE9lectionner"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
    type: "checkbox",
    name: "checkBiva",
    id: "checkedBiva"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    title: "D\xE9valider",
    style: {
      textDecoration: "none"
    },
    className: "m-r-5 vareact bg-blue-grey bolo700 col-white",
    id: "devalideCaisse"
  }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_32__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "boninternesva",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "BONS DE CAISSE INTERNES VALID\xC9S",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleBonInterneValides,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    id: "boninternesva",
    style: {
      width: "100%",
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    className: "text-center",
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw30 text-center"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw120"
  }, "N\xB0 BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw300"
  }, "FACTUR\xC9 \xC0"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw200"
  }, "R\xC9F\xC9RENCE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "MONTANT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "mw200"
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tbody", null, renderCaisseInterneValides), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: frvinterne
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel panel-pri shadow"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingImpin"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionImpin",
    href: "#collapseImpin",
    "aria-expanded": "false",
    "aria-controls": "collapseImpin"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "R\xE9l\xE9v\xE9 des charges internes", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, ricount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    id: "collapseImpin",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingImpin"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-body ",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "table-responsive shadow bg-white",
    style: {
      color: "#555"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_32__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "releInterne",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "R\xC9L\xC9V\xC9 DES FRAIS INTERNE",
    sheet: "tablexls",
    buttonText: "Ex"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-4 float-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
    type: "text",
    className: "form-control",
    onChange: handleReleInterne,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%",
      marginBottom: "10px"
    },
    id: "releInterne"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center"
  }, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "OP\xC9RATION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "R\xC9F\xC9RENCE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "SORTIE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "ENTR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "VALID\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tbody", null, renderReleInterne), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: soreinternedebit
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: soreinternecredit
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
    className: "text-left col-blue"
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("br", null))))))));
};
try {
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_31__.createRoot)(document.getElementById('setchargesinternes'));
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(ChargesInternes, null));
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
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-383511","vendors-node_modules_core-js_modules_es_array_from_js-node_modules_core-js_modules_es_array_i-c84b5d","vendors-node_modules_moment_locale_af_js-node_modules_moment_locale_ar-dz_js-node_modules_mom-582c96","vendors-node_modules_react-html-table-to-excel_index_js","vendors-node_modules_react-moment_dist_index_js","assets_js_datascript_js-assets_js_jquery_validate_js-assets_css_mdb_css","assets_js_admin_js-assets_js_bootstrap_js-assets_js_jquery_tableToExcel_js-assets_js_select2_-13fb9c"], () => (__webpack_exec__("./assets/apchargesinternes.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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Q0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOzs7QUFHQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBjaGFyZ2VzaW50ZXJuZXMuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbXBvbmVudHMvY2hhbnRpZXJzL0NoYXJnZXNJbnRlcm5lcy5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvZm9uY3Rpb25zL051bWJlckZvcm1hdC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvanF1ZXJ5LnNpbXBsZVBhZ2luYXRpb24uanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lcy5zdHJpbmcucmVwbGFjZS1hbGwuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lc25leHQuc3RyaW5nLnJlcGxhY2UtYWxsLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlLyBzeW5jIF5cXC5cXC8uKiQiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL2Nzcy9ib290c3RyYXAuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9tZGIuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy93YXZlcy5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL2FsbC10aGVtZXMuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9zZWxlY3QyLm1pbi5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3N0eWxlLmNzcyc7XHJcblxyXG5pbXBvcnQgJy4vanMvYm9vdHN0cmFwLmpzJztcclxuaW1wb3J0ICcuL2pzL2RhdGFzY3JpcHQuanMnO1xyXG5pbXBvcnQgJy4vanMvc2VsZWN0Mi5taW4uanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnRhYmxlVG9FeGNlbC5qcyc7XHJcbmltcG9ydCAnLi9qcy9qcXVlcnkudmFsaWRhdGUuanMnO1xyXG5pbXBvcnQgJy4vanMvYWRtaW4uanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnNpbXBsZVBhZ2luYXRpb24nO1xyXG5cclxuaW1wb3J0ICcuL2NvbXBvbmVudHMvY2hhbnRpZXJzL0NoYXJnZXNJbnRlcm5lcy5qcyc7XHJcblxyXG4iLCJpbXBvcnQgUmVhY3QsIHt1c2VFZmZlY3QsIHVzZVN0YXRlfSBmcm9tIFwicmVhY3RcIjtcbmltcG9ydCB7Y3JlYXRlUm9vdH0gZnJvbSAncmVhY3QtZG9tL2NsaWVudCc7XG5pbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XG5pbXBvcnQgUmVhY3RIVE1MVGFibGVUb0V4Y2VsIGZyb20gJ3JlYWN0LWh0bWwtdGFibGUtdG8tZXhjZWwnO1xuaW1wb3J0IE51bWJlckZvcm1hdCBmcm9tIFwiLi4vLi4vZm9uY3Rpb25zL051bWJlckZvcm1hdFwiO1xuaW1wb3J0IE1vbWVudCBmcm9tICdyZWFjdC1tb21lbnQnO1xuaW1wb3J0ICQgZnJvbSBcImpxdWVyeVwiO1xuXG5jb25zdCBDaGFyZ2VzSW50ZXJuZXMgPSAoKSA9PiB7XG5cbiAgICBjb25zdCBbcGVyc29zLCBzZXRQZXJzb3NdID0gdXNlU3RhdGUoW10pO1xuICAgIGNvbnN0IFtjYWlzc2luLCBzZXRDYWlzc2luXSA9IHVzZVN0YXRlKFtdKTtcblxuICAgIGNvbnN0IGZldGNoUGVyc29zID0gYXN5bmMgKCkgPT4ge1xuICAgICAgICBjb25zdCBkZWRlID0gSlNPTi5wYXJzZSgkKCcjanNvbnBlcnNvcycpLnZhbCgpKTtcbiAgICAgICAgc2V0UGVyc29zKGRlZGUpO1xuICAgIH07XG4gICAgY29uc3QgZmV0Y2hDYWlzc2VJbnRlcm5lID0gYXN5bmMgKCkgPT4ge1xuICAgICAgICBjb25zdCBkZWRlID0gSlNPTi5wYXJzZSgkKCcjY2Fpc3NlaW50ZXJuZScpLnZhbCgpKTtcbiAgICAgICAgc2V0Q2Fpc3NpbihkZWRlKTtcbiAgICB9O1xuXG4gICAgaWYgKCQoXCIjaWRjaGFyZ2VcIikudmFsKCkpIHtcbiAgICAgICAgJCgnI21vZGFsSW50ZXJuZScpLm1vZGFsKCdzaG93Jyk7XG4gICAgfVxuXG4gICAgdXNlRWZmZWN0KCgpID0+IHtcbiAgICAgICAgZmV0Y2hQZXJzb3MoKTtcbiAgICAgICAgZmV0Y2hDYWlzc2VJbnRlcm5lKCk7XG4gICAgfSwgW10pO1xuXG4gICAgY29uc3QgZGVsZXRlQ2Fpc3NlID0gYXN5bmMgKGlkKSA9PiB7XG4gICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgbWV0aG9kOiAnREVMRVRFJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vY2Fpc3NlL2RlbC8nICsgaWQsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgIH0pO1xuICAgIH1cbiAgICBjb25zdCB2YWxpZGVDYWlzc2UgPSBhc3luYyAoaWQpID0+IHtcbiAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICBtZXRob2Q6ICdHRVQnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9jYWlzc2UvdmFsaWRlci8nICsgaWQsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgIH0pO1xuICAgIH1cbiAgICBjb25zdCBkZXZhbGlkZUNhaXNzZSA9IGFzeW5jIChpZCkgPT4ge1xuICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL2NhaXNzZS9kZXZhbGlkZXIvJyArIGlkLFxuICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKCk7XG4gICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBsZXQgY2hhcmNvdW50ID0gMDtcbiAgICBsZXQgZnJpbnRlcm5lID0gMDtcblxuICAgIGNvbnN0IHJlbmRlckludGVybmUgPSBwZXJzb3MubWFwKChwZXJzbykgPT4ge1xuICAgICAgICBsZXQgY2Fpc3NlcyA9IHBlcnNvLmNhaXNzZXM7XG4gICAgICAgIGxldCBjY2xlbiA9IDA7XG4gICAgICAgIGxldCBmcmVpbnRlcm5lID0gMDtcbiAgICAgICAgY2hhcmNvdW50ID0gY2hhcmNvdW50ICsgMTtcbiAgICAgICAgaWYgKHBlcnNvLnR5cGUgIT09ICdwZXJzb25uZWxsZScpIHtcbiAgICAgICAgICAgIGNoYXJjb3VudCA9IGNoYXJjb3VudCArIDE7XG4gICAgICAgIH1cbiAgICAgICAgY29uc3QgcmVuZGVyQ2FpcyA9IGNhaXNzZXMubWFwKChjYWlzc2UpID0+IHtcbiAgICAgICAgICAgIGlmIChjYWlzc2UuY29yYmVpbGxlID09PSBudWxsICYmIGNhaXNzZS5jaGFudGllci50eXBlID09PSBcImZyYWlzXCIpIHtcbiAgICAgICAgICAgICAgICBsZXQgb3BpciA9IFwiXCI7XG4gICAgICAgICAgICAgICAgaWYgKGNhaXNzZS5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChjYWlzc2Uub3BlcmF0aW9uID09PSBcImRlYml0XCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGZyaW50ZXJuZSA9IGZyaW50ZXJuZSArIGNhaXNzZS5tb250YW50O1xuICAgICAgICAgICAgICAgICAgICAgICAgZnJlaW50ZXJuZSA9IGZyZWludGVybmUgKyBjYWlzc2UubW9udGFudDtcbiAgICAgICAgICAgICAgICAgICAgICAgIG9waXIgPSBcIlNvcnRpZSBkZSBjYWlzc2VcIjtcbiAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGZyaW50ZXJuZSA9IGZyaW50ZXJuZSAtIGNhaXNzZS5tb250YW50O1xuICAgICAgICAgICAgICAgICAgICAgICAgZnJlaW50ZXJuZSA9IGZyZWludGVybmUgLSBjYWlzc2UubW9udGFudDtcbiAgICAgICAgICAgICAgICAgICAgICAgIG9waXIgPSBcIkVudHLDqWUgZGUgY2Fpc3NlXCI7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgY2NsZW4gPSBjY2xlbiArIDE7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIHJldHVybiAoPHRyIGtleT17Y2Fpc3NlLmlkfSBjbGFzc05hbWU9e3BlcnNvLmlkICsgJ2NoYXJnZScgKyAnIGhpZGUnfT5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib2xvNjAwIG1sMzAgYm9yZGVcIj48TW9tZW50XG4gICAgICAgICAgICAgICAgICAgICAgICBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXNzZS5kYXRlfTwvTW9tZW50PlxuICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibWwzMCBib3JkZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAge2NhaXNzZS5ldGF0ID09PSBcInZhbGlkZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZXZhbGlkZUNhaXNzZShjYWlzc2UuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIkTDqXZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICB7Y2Fpc3NlLmV0YXQgPT09IFwic2F2ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRlQ2Fpc3NlKGNhaXNzZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXlcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+VjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVsZXRlQ2Fpc3NlKGNhaXNzZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS10cmFzaCBjb2wtcGlua1wiIHRpdGxlPVwiU3VwcHJpbWVyXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+fVxuICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cIiNcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hhc2hhKGNhaXNzZS5pZCwgJ2ltcHJpbWNhaXNzZScpXG4gICAgICAgICAgICAgICAgICAgICAgICB9fSBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1leWUgY29sLWdyZWVuXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vY2Fpc3NlLyR7Y2Fpc3NlLmlkfS8ke2NhaXNzZS5jaGFudGllci5pZH1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGNvbC1ibHVlLWdyZXkgYm9sbzYwMFwiPkNhaXNzZSBOwrAge2NhaXNzZS5udW1jYWlzc2V9IDwvYT5cbiAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+e29waXJ9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2NhaXNzZS5tb250YW50fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBtbDMwIGJvcmRlXCIgY29sU3Bhbj1cIjVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGNhaXNzZS5jYWlzc2VyZWZlcmVuY2V9fT48L3RkPlxuICAgICAgICAgICAgICAgIDwvdHI+KTtcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIG51bGw7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICB7cGVyc28udHlwZSAhPT0gJ3BlcnNvbm5lbGxlJyAmJiA8PlxuICAgICAgICAgICAgICAgIHtwZXJzby5jb3JiZWlsbGUgPT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJwYWdpbmF0ZTVcIiBrZXk9e3BlcnNvLmlkfSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hvd0JvbkNoYXJnZShwZXJzby5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+PGlucHV0IGNsYXNzTmFtZT1cImZvcm0tY2hlY2staW5wdXRcIiB0eXBlPVwiY2hlY2tib3hcIiB2YWx1ZT17cGVyc28uaWR9IG5hbWU9XCJpbnRlclwiLz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj48YiBjbGFzc05hbWU9XCJjb2wtYmx1ZVwiPih7Y2NsZW59KSA8L2I+IHtwZXJzby5ub21zfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcC1yLTE1XCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBwLXItMTVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2ZyZWludGVybmV9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgY29sLWJsdWUgcC1yLTE1XCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdXNlciBwcmlcIj48L2k+IHtwZXJzby5kb2J5dXNlciAhPT0gbnVsbCAmJiA8PntwZXJzby5kb2J5dXNlci5ub20udG9VcHBlckNhc2UoKX0ge3BlcnNvLmRvYnl1c2VyLnByZW5vbXMudG9VcHBlckNhc2UoKX08Lz59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyQ2Fpc31cbiAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICB9XG4gICAgICAgIDwvPik7XG4gICAgfSk7XG5cbiAgICBsZXQgYmluY291bnQgPSAwO1xuICAgIGxldCBmcm52aW50ZXJuZSA9IDA7XG4gICAgY29uc3QgcmVuZGVyQ2Fpc3NlSW50ZXJuZU5vblZhbGlkZXMgPSBjYWlzc2luLm1hcCgoY2Fpc3MpID0+IHtcbiAgICAgICAgaWYgKGNhaXNzLmNvcmJlaWxsZSA9PT0gbnVsbCAmJiBjYWlzcy5ldGF0ID09PSBcInNhdmVcIikge1xuICAgICAgICAgICAgaWYgKGNhaXNzLnBlcnNvbm5lbC5jb3JiZWlsbGUgPT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICBiaW5jb3VudCA9IGJpbmNvdW50ICsgMTtcbiAgICAgICAgICAgICAgICBmcm52aW50ZXJuZSA9IGZybnZpbnRlcm5lICsgY2Fpc3MubW9udGFudDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIHJldHVybiAoPD5cblxuICAgICAgICAgICAge2NhaXNzLmNvcmJlaWxsZSA9PT0gbnVsbCAmJiBjYWlzcy5wZXJzb25uZWwuY29yYmVpbGxlID09PSBudWxsICYmXG4gICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICB7Y2Fpc3MuZXRhdCA9PT0gXCJzYXZlXCIgJiYgPHRyIGtleT17Y2Fpc3MuaWR9IGNsYXNzTmFtZT1cInBhZ2luYXRlNlwiPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjxpbnB1dCBjbGFzc05hbWU9XCJmb3JtLWNoZWNrLWlucHV0XCIgdHlwZT1cImNoZWNrYm94XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbHVlPXtjYWlzcy5pZH0gbmFtZT1cImNhaXNzbmV2YVwiLz48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoYXNoYShjYWlzcy5pZCwgJ2ltcHJpbWNhaXNzZScpXG4gICAgICAgICAgICAgICAgICAgICAgICB9fSBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1leWUgY29sLWdyZWVuXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPlxuICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQ+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXNzLmRhdGV9PC9Nb21lbnQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkPjxhIGhyZWY9e2AvY3JtL2NhaXNzZS8ke2NhaXNzLmlkfS8ke2NhaXNzLmNoYW50aWVyLmlkfWB9PjxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWUtZ3JleSBjb2wtd2hpdGUgbS1yLTVcIj5WPC9zcGFuPntjYWlzcy5udW1jYWlzc2V9PC9hPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZD4gIHtjYWlzcy5wZXJzb25uZWwgIT09IG51bGwgJiYgY2Fpc3MucGVyc29ubmVsLm5vbXMudG9VcHBlckNhc2UoKX08L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGNhaXNzLnBlcnNvbm5lbCAhPT0gbnVsbCAmJiBjYWlzcy5jYWlzc2VyZWZlcmVuY2V9fT48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPntjYWlzcy5tb250YW50fTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgcHJpIGJvbG82MDBcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdXNlciBwcmlcIj48L2k+Jm5ic3A7e2NhaXNzLmRvYnl1c2VyLm5vbS50b1VwcGVyQ2FzZSgpICsgJyAnfSB7Y2Fpc3MuZG9ieXVzZXIucHJlbm9tcy50b1VwcGVyQ2FzZSgpfVxuICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgIDwvdHI+fVxuICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICB9XG4gICAgICAgIDwvPik7XG4gICAgfSk7XG5cbiAgICBsZXQgYml2Y291bnQgPSAwO1xuICAgIGxldCBmcnZpbnRlcm5lID0gMDtcbiAgICBjb25zdCByZW5kZXJDYWlzc2VJbnRlcm5lVmFsaWRlcyA9IGNhaXNzaW4ubWFwKChjYWlzcykgPT4ge1xuICAgICAgICBpZiAoY2Fpc3MuY29yYmVpbGxlID09PSBudWxsICYmIGNhaXNzLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgIGlmIChjYWlzcy5wZXJzb25uZWwuY29yYmVpbGxlID09PSBudWxsKSB7XG4gICAgICAgICAgICBiaXZjb3VudCA9IGJpdmNvdW50ICsgMTtcbiAgICAgICAgICAgIGZydmludGVybmUgPSBmcnZpbnRlcm5lICsgY2Fpc3MubW9udGFudDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICB7Y2Fpc3MuY29yYmVpbGxlID09PSBudWxsICYmIGNhaXNzLnBlcnNvbm5lbC5jb3JiZWlsbGUgPT09IG51bGwgJiYgPD5cbiAgICAgICAgICAgICAgICB7Y2Fpc3MuZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJiA8dHIga2V5PXtjYWlzcy5pZH0gY2xhc3NOYW1lPVwicGFnaW5hdGU3XCI+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+PGlucHV0IGNsYXNzTmFtZT1cImZvcm0tY2hlY2staW5wdXRcIiB0eXBlPVwiY2hlY2tib3hcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsdWU9e2NhaXNzLmlkfSBuYW1lPVwiY2Fpc3N2YVwiLz48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoYXNoYShjYWlzcy5pZCwgJ2ltcHJpbWNhaXNzZScpXG4gICAgICAgICAgICAgICAgICAgICAgICB9fSBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1leWUgY29sLWdyZWVuXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPlxuICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQ+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXNzLmRhdGV9PC9Nb21lbnQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vY2Fpc3NlLyR7Y2Fpc3MuaWR9LyR7Y2Fpc3MuY2hhbnRpZXIuaWR9YH0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+Vjwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Y2Fpc3MubnVtY2Fpc3NlfVxuICAgICAgICAgICAgICAgICAgICAgICAgPC9hPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZD4gIHtjYWlzcy5wZXJzb25uZWwgIT09IG51bGwgJiYgY2Fpc3MucGVyc29ubmVsLm5vbXMudG9VcHBlckNhc2UoKX08L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGNhaXNzLnBlcnNvbm5lbCAhPT0gbnVsbCAmJiBjYWlzcy5jYWlzc2VyZWZlcmVuY2V9fT48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Y2Fpc3MubW9udGFudH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgcHJpIGJvbG82MDBcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdXNlciBwcmlcIj48L2k+ICZuYnNwO3tjYWlzcy5kb2J5dXNlci5ub20udG9VcHBlckNhc2UoKSArICcgJ30ge2NhaXNzLmRvYnl1c2VyLnByZW5vbXMudG9VcHBlckNhc2UoKX1cbiAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICA8L3RyPn1cbiAgICAgICAgICAgIDwvPn1cbiAgICAgICAgPC8+KTtcbiAgICB9KTtcblxuICAgIGxldCByaWNvdW50ID0gMDtcbiAgICBsZXQgc29yZWludGVybmVkZWJpdCA9IDA7XG4gICAgbGV0IHNvcmVpbnRlcm5lY3JlZGl0ID0gMDtcbiAgICBjb25zdCByZW5kZXJSZWxlSW50ZXJuZSA9IGNhaXNzaW4ubWFwKChjYWlzcykgPT4ge1xuICAgICAgICBpZiAoY2Fpc3MuY29yYmVpbGxlID09PSBudWxsICYmIGNhaXNzLmV0YXQgPT09IFwidmFsaWRlXCIpIHtcbiAgICAgICAgICAgIHJpY291bnQgPSByaWNvdW50ICsgMTtcbiAgICAgICAgICAgIGlmIChjYWlzcy5vcGVyYXRpb24gPT09IFwiZGViaXRcIikge1xuICAgICAgICAgICAgICAgIHNvcmVpbnRlcm5lZGViaXQgPSBzb3JlaW50ZXJuZWRlYml0ICsgY2Fpc3MubW9udGFudDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGlmIChjYWlzcy5vcGVyYXRpb24gPT09IFwiY3JlZGl0XCIpIHtcbiAgICAgICAgICAgICAgICBzb3JlaW50ZXJuZWNyZWRpdCA9IHNvcmVpbnRlcm5lY3JlZGl0ICsgY2Fpc3MubW9udGFudDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICB7Y2Fpc3MuY29yYmVpbGxlID09PSBudWxsICYmXG4gICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAge2NhaXNzLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPHRyIGtleT17Y2Fpc3MuaWR9IGNsYXNzTmFtZT1cInBhZ2luYXRlMTBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPjxNb21lbnQgZm9ybWF0PVwiREQvTU0vWVlZWVwiPntjYWlzcy5kYXRlfTwvTW9tZW50PjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGEgaHJlZj17YC9jcm0vY2Fpc3NlLyR7Y2Fpc3MuaWR9LyR7Y2Fpc3MuY2hhbnRpZXIuaWR9YH0+e2NhaXNzLm51bWNhaXNzZX08L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdFwiIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBjYWlzcy5jYWlzc2VyZWZlcmVuY2V9fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPntjYWlzcy5vcGVyYXRpb24gPT09ICdkZWJpdCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8TnVtYmVyRm9ybWF0IG51bWI9e2NhaXNzLm1vbnRhbnR9Lz59PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCI+e2NhaXNzLm9wZXJhdGlvbiA9PT0gJ2NyZWRpdCcgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8TnVtYmVyRm9ybWF0IG51bWI9e2NhaXNzLm1vbnRhbnR9Lz59PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgcHJpIGJvbG82MDBcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLXVzZXIgcHJpXCI+PC9pPiAmbmJzcDt7Y2Fpc3MuZG9ieXVzZXIubm9tLnRvVXBwZXJDYXNlKCkgKyAnICd9IHtjYWlzcy5kb2J5dXNlci5wcmVub21zLnRvVXBwZXJDYXNlKCl9XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8L3RyPn1cbiAgICAgICAgICAgICAgICA8Lz59XG4gICAgICAgIDwvPik7XG4gICAgfSk7XG5cbiAgICBjb25zdCBoYW5kbGVJbnRlcm5lID0gZXZlbnQgPT4ge1xuICAgICAgICBsZXQgZmlsdGVyID0gZXZlbnQudGFyZ2V0LnZhbHVlLnRvTG93ZXJDYXNlKCk7XG4gICAgICAgICQoXCIjaW50ZXJuZXMgdHIucGFnaW5hdGU1XCIpLmZpbHRlcihmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLnRvZ2dsZSgkKHRoaXMpLnRleHQoKS50b0xvd2VyQ2FzZSgpLnJlcGxhY2VBbGwoJyAnLCAnJykuaW5kZXhPZihmaWx0ZXIpID4gLTEpXG4gICAgICAgIH0pO1xuICAgIH07XG4gICAgY29uc3QgaGFuZGxlQm9uSW50ZXJuZU5vblZhbGlkZXMgPSBldmVudCA9PiB7XG4gICAgICAgIGxldCBmaWx0ZXIgPSBldmVudC50YXJnZXQudmFsdWUudG9Mb3dlckNhc2UoKTtcbiAgICAgICAgJChcIiNib25pbnRlcm5lc25ldmEgdHIucGFnaW5hdGU2XCIpLmZpbHRlcihmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLnRvZ2dsZSgkKHRoaXMpLnRleHQoKS50b0xvd2VyQ2FzZSgpLnJlcGxhY2VBbGwoJyAnLCAnJykuaW5kZXhPZihmaWx0ZXIpID4gLTEpXG4gICAgICAgIH0pO1xuICAgIH07XG4gICAgY29uc3QgaGFuZGxlQm9uSW50ZXJuZVZhbGlkZXMgPSBldmVudCA9PiB7XG4gICAgICAgIGxldCBmaWx0ZXIgPSBldmVudC50YXJnZXQudmFsdWUudG9Mb3dlckNhc2UoKTtcbiAgICAgICAgJChcIiNib25pbnRlcm5lc3ZhIHRyLnBhZ2luYXRlN1wiKS5maWx0ZXIoZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCh0aGlzKS50b2dnbGUoJCh0aGlzKS50ZXh0KCkudG9Mb3dlckNhc2UoKS5yZXBsYWNlQWxsKCcgJywgJycpLmluZGV4T2YoZmlsdGVyKSA+IC0xKVxuICAgICAgICB9KTtcbiAgICB9O1xuICAgIGNvbnN0IGhhbmRsZVJlbGVJbnRlcm5lID0gZXZlbnQgPT4ge1xuICAgICAgICBsZXQgZmlsdGVyID0gZXZlbnQudGFyZ2V0LnZhbHVlLnRvTG93ZXJDYXNlKCk7XG4gICAgICAgICQoXCIjcmVsZUludGVybmUgdHIucGFnaW5hdGUxMFwiKS5maWx0ZXIoZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCh0aGlzKS50b2dnbGUoJCh0aGlzKS50ZXh0KCkudG9Mb3dlckNhc2UoKS5yZXBsYWNlQWxsKCcgJywgJycpLmluZGV4T2YoZmlsdGVyKSA+IC0xKVxuICAgICAgICB9KTtcbiAgICB9O1xuXG4gICAgY29uc3Qgc2hvd0JvbkNoYXJnZSA9IChpZCkgPT4ge1xuICAgICAgICBpZiAoJCgnLicgKyBpZCArICdjaGFyZ2UnKS5oYXNDbGFzcyhcImhpZGVcIikpIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAnY2hhcmdlJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAnY2hhcmdlJykuYWRkQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgICQoXCIjZWRpdEludGVybmVcIikub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICQuZWFjaCgkKFwiaW5wdXRbbmFtZT0naW50ZXInXTpjaGVja2VkXCIpLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICB3aW5kb3cuJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSAnL2NybS9jaGFyZ2VzaW50ZXJuZXMvZWRpdC9jaGFyZ2UvJyArICQodGhpcykudmFsKCk7XG4gICAgICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICAgIH0pO1xuICAgIH0pO1xuICAgICQoXCIjZGVsSW50ZXJuZVwiKS5vZmYoKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJC5lYWNoKCQoXCJpbnB1dFtuYW1lPSdpbnRlciddOmNoZWNrZWRcIiksIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHdpbmRvdy4kKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnREVMRVRFJywgdXJsOiAnL2NybS9wZXJzb25uZWwvZGVsLycgKyAkKHRoaXMpLnZhbCgpLFxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKCk7XG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9KTtcblxuICAgICQoJyNhZGRJbnRlcicpLm9mZigpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNhZGRJbnRlcicpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2Nsb3NlSW50ZXInKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkSW50ZXInKS5jc3MoJ2Rpc3BsYXknLCAnJylcbiAgICAgICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vcGVyc29ubmVsL29wZXJhdGlvbi9hZGQnLFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNhZGRJbnRlckZvcm0nKS5zZXJpYWxpemVPYmplY3QoKSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChyZXNwZGF0YSwgdGV4dFN0YXR1cywganFYSFIpIHtcbiAgICAgICAgICAgICAgICAgICAgbG9jYXRpb24ucmVsb2FkKClcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoeGhyLCByZXNwLCB0ZXh0KSB7XG4gICAgICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgfSlcbiAgICAgICAgfVxuICAgIH0pXG4gICAgJCgnI3VwZEludGVyJykub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKVxuICAgICAgICBpZiAoJCh0aGlzKS5jbG9zZXN0KCdmb3JtJykudmFsaWQoKSkge1xuICAgICAgICAgICAgJCgnI3VwZEludGVyJykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjY2xvc2VyQ2hhcmdlSW50ZXJuZScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWRJbnRlcicpLmNzcygnZGlzcGxheScsICcnKVxuICAgICAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9wZXJzb25uZWwvdXBkYXRlLycrICQoXCIjaWRjaGFyZ2VcIikudmFsKCksXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZEludGVyRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlc3BkYXRhLCB0ZXh0U3RhdHVzLCBqcVhIUikge1xuICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICcvY3JtL2NoYXJnZXNpbnRlcm5lcy8nO1xuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uICh4aHIsIHJlc3AsIHRleHQpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB9KVxuICAgICAgICB9XG4gICAgfSlcbiAgICAkKCcjYWRkZXJDYWlzc2UnKS5vZmYoKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjYWRkZXJDYWlzc2UnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNjbG9zZXJDYWlzc2UnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkZXJDYWlzc2UnKS5jc3MoJ2Rpc3BsYXknLCAnJylcbiAgICAgICAgICAgICQoJyNlZGl0b3IxOScpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjE5J10uZ2V0RGF0YSgpKTtcbiAgICAgICAgICAgICQoJyNlZGl0b3IyMCcpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjIwJ10uZ2V0RGF0YSgpKTtcbiAgICAgICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vY2Fpc3NlL2ZyYWlzL2FkZCcsXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZENhaXNzZUNoYXJnZUZvcm0nKS5zZXJpYWxpemVPYmplY3QoKSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChyZXNwZGF0YSwgdGV4dFN0YXR1cywganFYSFIpIHtcbiAgICAgICAgICAgICAgICAgICAgaWYgKGpxWEhSLnN0YXR1cyA9PSAnMjAxJykge1xuICAgICAgICAgICAgICAgICAgICAgICAgJCgnI21kTW9kYWxDYWlzc2UnKS5tb2RhbCgndG9nZ2xlJyk7XG4gICAgICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICcvY3JtL2NhaXNzZS8nICsgcmVzcGRhdGFbJ3Jlc3VsdCddWzBdWydudW1jYWlzc2UnXSArICcvJyArIHJlc3BkYXRhWydyZXN1bHQnXVswXVsnaWRjaGFudGllciddXG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoeGhyLCByZXNwLCB0ZXh0KSB7XG4gICAgICAgICAgICAgICAgICAgICQoJyNtZE1vZGFsQ2Fpc3NlJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93JylcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgfSlcbiAgICAgICAgfVxuICAgIH0pXG5cbiAgICAkKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJChcIi5qcy1leGFtcGxlLWJhc2ljLW11bHRpcGxlXCIpLnNlbGVjdDIoKTtcbiAgICAgICAgJChcIi5qcy1leGFtcGxlLWJhc2ljLXNpbmdsZVwiKS5zZWxlY3QyKCk7XG4gICAgICAgICQoXCIjaW50ZXJuZXNcIikuc2ltcGxlUGFnaW5hdGlvbigoJ3Rib2R5IC5wYWdpbmF0ZTUnKSk7XG4gICAgfSk7XG5cbiAgICByZXR1cm4gKDw+XG4gICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTEyXCIgc3R5bGU9e3twYWRkaW5nTGVmdDogXCIwXCIsIG1hcmdpblRvcDogXCIyMHB4XCJ9fT5cbiAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIGRhdGEtY29sb3I9XCJibHVlXCIgY2xhc3NOYW1lPVwiYnRuIGJnLWJsdWUtZ3JleSB0ZXh0LXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJtb2RhbFwiIGRhdGEtdGFyZ2V0PVwiI21vZGFsSW50ZXJuZVwiIHN0eWxlPXt7Ym9yZGVyOiBcIjFweCBzb2xpZCAjZGRkZmViXCJ9fT4rIENIQVJHRSBJTlRFUk5FXG4gICAgICAgICAgICA8L2J1dHRvbj5cbiAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwibW9kYWxcIiBkYXRhLXRhcmdldD1cIiNtb2RhbENhaXNzZUNoYXJnZVwiXG4gICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiZy1ibHVlLWdyZXkgdGV4dC13aGl0ZVwiIHN0eWxlPXt7Ym9yZGVyOiBcIjFweCBzb2xpZCAjZGRkZmViXCJ9fT4rXG4gICAgICAgICAgICAgICAgUEFJRU1FTlQgQ0hBUkdFIElOVEVSTkVcbiAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1ncm91cFwiIGlkPVwiYWNjb3JkaW9uXzJcIiByb2xlPVwidGFibGlzdFwiIGFyaWEtbXVsdGlzZWxlY3RhYmxlPVwidHJ1ZVwiPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwgcGFuZWwtcHJpIHNoYWRvdyBtLXQtNVwiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWhlYWRpbmdcIiByb2xlPVwidGFiXCIgaWQ9XCJoZWFkaW5nQ2hhcmdpblwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiY29sbGFwc2VkICBvdXRhaSBjb2wtd2hpdGVcIiByb2xlPVwiYnV0dG9uXCIgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uQ2hhcmdpblwiIGhyZWY9XCIjY29sbGFwc2VDaGFyZ2luXCIgYXJpYS1leHBhbmRlZD1cImZhbHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWNvbnRyb2xzPVwiY29sbGFwc2VDaGFyZ2luXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPkxlcyBDaGFyZ2VzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEludGVybmVzPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYmFkZ2UgYmctcGluayBmbG9hdC1yaWdodFwiPntjaGFyY291bnR9PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvaDQ+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGlkPVwiY29sbGFwc2VDaGFyZ2luXCIgY2xhc3NOYW1lPVwicGFuZWwtY29sbGFwc2UgY29sbGFwc2VcIiByb2xlPVwidGFicGFuZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmdDaGFyZ2luXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHkgXCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZSBzaGFkb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLThcIiBzdHlsZT17e3BhZGRpbmdUb3A6IFwiMjBweFwifX0+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwiZWRpdEludGVybmVcIiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEgZmEtZWRpdCAgY29sLWdyZWVuXCIvPjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwiZGVsSW50ZXJuZVwiIGNsYXNzTmFtZT1cIm0tci01IHZhcmVhY3RcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYSBmYS10cmFzaCBjb2wtcGluayBcIi8+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxSZWFjdEhUTUxUYWJsZVRvRXhjZWxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJ0ZXN0LXRhYmxlLXhscy1idXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYmFkZ2UgYmFkZ2UtcGlsbCBjb2wtZ3JlZW4gbS1yLTUgZmxvYXQtbGVmdCB2YXJlYWN0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFibGU9XCJpbnRlcm5lc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiR8OpbsOpcmVyIHVuIGZpY2hpZXIgRXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmaWxlbmFtZT1cIkNIQVJHRSBJTlRFUk5FXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvblRleHQ9XCJFeFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNCBmbG9hdC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaW5wdXQtZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb3JtLWxpbmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIGNsYXNzTmFtZT1cImZvcm0tY29udHJvbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25DaGFuZ2U9e2hhbmRsZUludGVybmV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGxhY2Vob2xkZXI9XCJSZWNoZXJjaGVyXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGlkPVwiaW50ZXJuZXNcIiBjbGFzc05hbWU9XCJ0YWJsZS1zdHJpcGVkIHRhYmxlLWhvdmVyIGRpc3BsYXkgbm93cmFwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwiLCBtYXJnaW5Cb3R0b206IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgc3R5bGU9e3tib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICMwMDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+IzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13NDAwIHAtci0xNVwiPkNIQVJHRSBJTlRFUk5FPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcxNTAgcC1yLTE1XCI+T1DDiVJBVElPTlM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzE1MCB0ZXh0LXJpZ2h0IHAtci0xNVwiPk1PTlRBTlQ8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzIwMFwiPkFKT1VURVIgUEFSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckludGVybmV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgY29sLXdoaXRlIGJnLWJsdWVcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPE51bWJlckZvcm1hdCBudW1iPXtmcmludGVybmV9Lz48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1wcmkgc2hhZG93IG0tdC01XCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZ1wiIHJvbGU9XCJ0YWJcIiBpZD1cImhlYWRpbmdmcmFpc1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiY29sbGFwc2VkICBjb2wtd2hpdGVcIiByb2xlPVwiYnV0dG9uXCIgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uZnJhaXNcIiBocmVmPVwiI2NvbGxhcHNlZnJhaXNcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZWZyYWlzXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPkJvbnMgaW50ZXJuZXMgbm9uXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkw6lzPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYmFkZ2UgYmctcGluayBmbG9hdC1yaWdodFwiPntiaW5jb3VudH08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZWZyYWlzXCIgY2xhc3NOYW1lPVwicGFuZWwtY29sbGFwc2UgY29sbGFwc2VcIiByb2xlPVwidGFicGFuZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmdmcmFpc1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1ib2R5IFwiIHN0eWxlPXt7b3ZlcmZsb3c6IFwic2Nyb2xsXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhYmxlLXJlc3BvbnNpdmUgc2hhZG93XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZSBzaGFkb3cgYmctd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Y29sb3I6IFwiIzU1NVwiLCBvdmVyZmxvd1g6IFwic2Nyb2xsXCJ9fT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC04XCIgc3R5bGU9e3twYWRkaW5nVG9wOiBcIjIwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCIgdGl0bGU9XCJUb3V0IHPDqWxlY3Rpb25uZXJcIj48aW5wdXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9XCJjaGVja2JveFwiIG5hbWU9XCJjaGVja0JpbnZhXCIgaWQ9XCJjaGVja2VkQmludmFcIi8+PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSB0aXRsZT1cIlZhbGlkZXJcIiBzdHlsZT17e3RleHREZWNvcmF0aW9uOiBcIm5vbmVcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cIm0tci01IHZhcmVhY3QgYmctYmx1ZSBib2xvNzAwIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidmFsaWRlQ2Fpc3NlXCI+VjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgdGl0bGU9XCJTdXBwcmltZXJcIiBpZD1cImRlbENhaXNzZVwiIGNsYXNzTmFtZT1cIm0tci01IHZhcmVhY3RcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEgZmEtdHJhc2ggY29sLXBpbmsgXCIvPjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPFJlYWN0SFRNTFRhYmxlVG9FeGNlbFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJ0ZXN0LXRhYmxlLXhscy1idXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJhZGdlIGJhZGdlLXBpbGwgY29sLWdyZWVuIG0tci01IGZsb2F0LWxlZnQgdmFyZWFjdFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YWJsZT1cImJvbmludGVybmVzbmV2YVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZT1cIkfDqW7DqXJlciB1biBmaWNoaWVyIEV4Y2VsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZpbGVuYW1lPVwiQk9OUyBERSBDQUlTU0UgSU5URVJORVMgTk9OIFZBTElEw4lTXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoZWV0PVwidGFibGV4bHNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uVGV4dD1cIkV4XCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTQgZmxvYXQtcmlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJpbnB1dC1ncm91cFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb3JtLWxpbmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT1cInRleHRcIiBjbGFzc05hbWU9XCJmb3JtLWNvbnRyb2xcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbkNoYW5nZT17aGFuZGxlQm9uSW50ZXJuZU5vblZhbGlkZXN9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBsYWNlaG9sZGVyPVwiUmVjaGVyY2hlclwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlLXN0cmlwZWQgdGFibGUtaG92ZXIgZGlzcGxheSBub3dyYXBcIiBpZD1cImJvbmludGVybmVzbmV2YVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpbkJvdHRvbTogXCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCIgc3R5bGU9e3tib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICMwMDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPiM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5EQVRFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MTIwXCI+TsKwIEJPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwMFwiPkZBQ1RVUsOJIMOAPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MjAwXCI+UsOJRsOJUkVOQ0U8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+TU9OVEFOVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzIwMFwiPkNSRcOJIFBBUjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyQ2Fpc3NlSW50ZXJuZU5vblZhbGlkZXN9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBjb2wtd2hpdGUgYmctYmx1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT48TnVtYmVyRm9ybWF0IG51bWI9e2ZybnZpbnRlcm5lfS8+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1wcmkgc2hhZG93IG0tdC01XCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZ1wiIHJvbGU9XCJ0YWJcIiBpZD1cImhlYWRpbmdmcmFpc2VcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJwYW5lbC10aXRsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCAgY29sLXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtcGFyZW50PVwiI2FjY29yZGlvbmZyYWlzZVwiIGhyZWY9XCIjY29sbGFwc2VmcmFpc2VcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZWZyYWlzZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE4cHhcIiwgZmxvYXQ6IFwibGVmdFwifX0+a2V5Ym9hcmRfYXJyb3dfZG93bjwvaT5Cb25zIGludGVybmVzXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkw6lzPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYmFkZ2UgYmctcGluayBmbG9hdC1yaWdodFwiPntiaXZjb3VudH08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZWZyYWlzZVwiIGNsYXNzTmFtZT1cInBhbmVsLWNvbGxhcHNlIGNvbGxhcHNlXCIgcm9sZT1cInRhYnBhbmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJoZWFkaW5nZnJhaXNlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHkgXCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZSBzaGFkb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlIHNoYWRvdyBiZy13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tjb2xvcjogXCIjNTU1XCIsIG92ZXJmbG93WDogXCJzY3JvbGxcIn19PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvd1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLThcIiBzdHlsZT17e3BhZGRpbmdUb3A6IFwiMjBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzTmFtZT1cIm0tci01IHZhcmVhY3RcIiB0aXRsZT1cIlRvdXQgc8OpbGVjdGlvbm5lclwiPjxpbnB1dFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT1cImNoZWNrYm94XCIgbmFtZT1cImNoZWNrQml2YVwiIGlkPVwiY2hlY2tlZEJpdmFcIi8+PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSB0aXRsZT1cIkTDqXZhbGlkZXJcIiBzdHlsZT17e3RleHREZWNvcmF0aW9uOiBcIm5vbmVcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cIm0tci01IHZhcmVhY3QgYmctYmx1ZS1ncmV5IGJvbG83MDAgY29sLXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJkZXZhbGlkZUNhaXNzZVwiPlY8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxSZWFjdEhUTUxUYWJsZVRvRXhjZWxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiYWRnZSBiYWRnZS1waWxsIGNvbC1ncmVlbiBtLXItNSBmbG9hdC1sZWZ0IHZhcmVhY3RcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFibGU9XCJib25pbnRlcm5lc3ZhXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiR8OpbsOpcmVyIHVuIGZpY2hpZXIgRXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9XCJCT05TIERFIENBSVNTRSBJTlRFUk5FUyBWQUxJRMOJU1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGVldD1cInRhYmxleGxzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvblRleHQ9XCJFeFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC00IGZsb2F0LXJpZ2h0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaW5wdXQtZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZm9ybS1saW5lXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9XCJ0ZXh0XCIgY2xhc3NOYW1lPVwiZm9ybS1jb250cm9sXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25DaGFuZ2U9e2hhbmRsZUJvbkludGVybmVWYWxpZGVzfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcj1cIlJlY2hlcmNoZXJcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1zdHJpcGVkIHRhYmxlLWhvdmVyIGRpc3BsYXkgbm93cmFwXCIgaWQ9XCJib25pbnRlcm5lc3ZhXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIiwgbWFyZ2luQm90dG9tOiBcIjEwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIiBzdHlsZT17e2JvcmRlckJvdHRvbTogXCIxcHggc29saWQgIzAwMFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+IzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPkRBVEU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcxMjBcIj5OwrAgQk9OPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MzAwXCI+RkFDVFVSw4kgw4A8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcyMDBcIj5Sw4lGw4lSRU5DRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5NT05UQU5UPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MjAwXCI+Q1JFw4kgUEFSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJDYWlzc2VJbnRlcm5lVmFsaWRlc31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGNvbC13aGl0ZSBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXQgbnVtYj17ZnJ2aW50ZXJuZX0vPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwgcGFuZWwtcHJpIHNoYWRvd1wiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWhlYWRpbmdcIiByb2xlPVwidGFiXCIgaWQ9XCJoZWFkaW5nSW1waW5cIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJwYW5lbC10aXRsZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCAgY29sLXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtcGFyZW50PVwiI2FjY29yZGlvbkltcGluXCIgaHJlZj1cIiNjb2xsYXBzZUltcGluXCIgYXJpYS1leHBhbmRlZD1cImZhbHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWNvbnRyb2xzPVwiY29sbGFwc2VJbXBpblwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE4cHhcIiwgZmxvYXQ6IFwibGVmdFwifX0+a2V5Ym9hcmRfYXJyb3dfZG93bjwvaT5Sw6lsw6l2w6kgZGVzIGNoYXJnZXNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaW50ZXJuZXM8c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJiYWRnZSBiZy1waW5rIGZsb2F0LXJpZ2h0XCI+e3JpY291bnR9PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvaDQ+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGlkPVwiY29sbGFwc2VJbXBpblwiIGNsYXNzTmFtZT1cInBhbmVsLWNvbGxhcHNlIGNvbGxhcHNlXCIgcm9sZT1cInRhYnBhbmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJoZWFkaW5nSW1waW5cIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtYm9keSBcIiBzdHlsZT17e292ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlIHNoYWRvdyBiZy13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2NvbG9yOiBcIiM1NTVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvd1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtOFwiIHN0eWxlPXt7cGFkZGluZ1RvcDogXCIyMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJhZGdlIGJhZGdlLXBpbGwgY29sLWdyZWVuIG0tci01IGZsb2F0LWxlZnQgdmFyZWFjdFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwicmVsZUludGVybmVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZT1cIkfDqW7DqXJlciB1biBmaWNoaWVyIEV4Y2VsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9XCJSw4lMw4lWw4kgREVTIEZSQUlTIElOVEVSTkVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGVldD1cInRhYmxleGxzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uVGV4dD1cIkV4XCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC00IGZsb2F0LXJpZ2h0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJpbnB1dC1ncm91cFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvcm0tbGluZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9XCJ0ZXh0XCIgY2xhc3NOYW1lPVwiZm9ybS1jb250cm9sXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbkNoYW5nZT17aGFuZGxlUmVsZUludGVybmV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGxhY2Vob2xkZXI9XCJSZWNoZXJjaGVyXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlLXN0cmlwZWQgdGFibGUtaG92ZXIgZGlzcGxheSBub3dyYXBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpbkJvdHRvbTogXCIxMHB4XCJ9fSBpZD1cInJlbGVJbnRlcm5lXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+REFURTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPk9Qw4lSQVRJT048L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5Sw4lGw4lSRU5DRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPlNPUlRJRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPkVOVFLDiUU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5WQUxJRMOJIFBBUjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJSZWxlSW50ZXJuZX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIGNvbC13aGl0ZSBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+PE51bWJlckZvcm1hdCBudW1iPXtzb3JlaW50ZXJuZWRlYml0fS8+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgY29sLXdoaXRlIGJnLWJsdWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT48TnVtYmVyRm9ybWF0IG51bWI9e3NvcmVpbnRlcm5lY3JlZGl0fS8+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGNvbC1ibHVlXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgIDwvZGl2PlxuICAgIDwvPik7XG5cbn1cblxudHJ5IHtcbiAgICBjb25zdCByb290ID0gY3JlYXRlUm9vdChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2V0Y2hhcmdlc2ludGVybmVzJykpO1xuICAgIHJvb3QucmVuZGVyKDxDaGFyZ2VzSW50ZXJuZXMvPik7XG59IGNhdGNoIChlKSB7XG59XG4iLCJsZXQgTnVtYmVyRm9ybWF0O1xuZXhwb3J0IGRlZmF1bHQgTnVtYmVyRm9ybWF0ID0gKHByb3BzKSA9PiB7XG5cbiAgICBjb25zdCBmb3JtYXROdW1iZXIgPSAobnVtLCBwcmVjaXNpb24sIHNlcGFyYXRvcikgPT4ge1xuICAgICAgICBsZXQgcGFydHM7XG4gICAgICAgIG51bSA9IE51bWJlcihudW0pO1xuICAgICAgICBudW0gPSAodHlwZW9mIHByZWNpc2lvbiAhPT0gJ3VuZGVmaW5lZCcgPyBudW0udG9GaXhlZChwcmVjaXNpb24pIDogbnVtKS50b1N0cmluZygpO1xuICAgICAgICBwYXJ0cyA9IG51bS5zcGxpdCgnLicpO1xuICAgICAgICBwYXJ0c1swXSA9IHBhcnRzWzBdLnRvU3RyaW5nKCkucmVwbGFjZSgvKFxcZCkoPz0oXFxkezN9KSsoPyFcXGQpKS9nLCAnJDEnICsgKHNlcGFyYXRvciB8fCAnLCcpKTtcbiAgICAgICAgcmV0dXJuIHBhcnRzLmpvaW4oJywnKTtcbiAgICB9XG5cbiAgICByZXR1cm4gKGZvcm1hdE51bWJlcihwcm9wcy5udW1iLDIsICcgJykpO1xuXG59O1xuXG4iLCIvKipcbiAqIGpxdWVyeS5zaW1wbGVQYWdpbmF0aW9uLmpzXG4gKiBAdmVyc2lvbjogdjEuMC4wXG4gKiBAYXV0aG9yOiBTZWJhc3RpYW4gTWFydWxhbmRhIGh0dHA6Ly9tYXJ1bGFuZGEubWVcbiAqIEBzZWU6IGh0dHBzOi8vZ2l0aHViLmNvbS9zbWFydWxhbmRhL2pxdWVyeS5zaW1wbGVQYWdpbmF0aW9uXG4gKi9cblxuKGZ1bmN0aW9uKCQpIHtcblxuXHQkLmZuLnNpbXBsZVBhZ2luYXRpb24gPSBmdW5jdGlvbihvcHRpb25zKSB7XG5cblx0XHRjb25zdCBkZWZhdWx0cyA9IHtcblx0XHRcdHBlclBhZ2U6IDIwLFxuXHRcdFx0Y29udGFpbmVyQ2xhc3M6ICcnLFxuXHRcdFx0cHJldmlvdXNCdXR0b25DbGFzczogJycsXG5cdFx0XHRuZXh0QnV0dG9uQ2xhc3M6ICcnLFxuXHRcdFx0cHJldmlvdXNCdXR0b25UZXh0OiAnPCcsXG5cdFx0XHRuZXh0QnV0dG9uVGV4dDogJz4nLFxuXHRcdFx0Y3VycmVudFBhZ2U6IDFcblx0XHR9O1xuXG5cdFx0Y29uc3Qgc2V0dGluZ3MgPSAkLmV4dGVuZCh7fSwgZGVmYXVsdHMsIG9wdGlvbnMpO1xuXG5cdFx0cmV0dXJuIHRoaXMuZWFjaChmdW5jdGlvbigpIHtcblx0XHRcdGNvbnN0ICRyb3dzID0gJChvcHRpb25zLCB0aGlzKTtcblx0XHRcdGNvbnN0IHBhZ2VzID0gTWF0aC5jZWlsKCRyb3dzLmxlbmd0aCAvIHNldHRpbmdzLnBlclBhZ2UpO1xuXG5cdFx0XHRjb25zdCBjb250YWluZXIgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcblx0XHRcdGNvbnN0IGJQcmV2aW91cyA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2J1dHRvbicpO1xuXHRcdFx0Y29uc3QgYk5leHQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdidXR0b24nKTtcblx0XHRcdGNvbnN0IG9mID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnc3BhbicpO1xuXG5cblx0XHRcdGJQcmV2aW91cy5pbm5lckhUTUwgPSBzZXR0aW5ncy5wcmV2aW91c0J1dHRvblRleHQ7XG5cdFx0XHRiTmV4dC5pbm5lckhUTUwgPSBzZXR0aW5ncy5uZXh0QnV0dG9uVGV4dDtcblxuXHRcdFx0Y29udGFpbmVyLmNsYXNzTmFtZSA9IHNldHRpbmdzLmNvbnRhaW5lckNsYXNzO1xuXHRcdFx0YlByZXZpb3VzLmNsYXNzTmFtZSA9IHNldHRpbmdzLnByZXZpb3VzQnV0dG9uQ2xhc3M7XG5cdFx0XHRiTmV4dC5jbGFzc05hbWUgPSBzZXR0aW5ncy5uZXh0QnV0dG9uQ2xhc3M7XG5cblx0XHRcdGJQcmV2aW91cy5zdHlsZS5tYXJnaW5SaWdodCA9ICc4cHgnO1xuXHRcdFx0YlByZXZpb3VzLmNsYXNzTGlzdC5hZGQoJ2J0bicpO1xuXHRcdFx0YlByZXZpb3VzLmNsYXNzTGlzdC5hZGQoJ2JnLWJsdWUnKTtcblx0XHRcdGJQcmV2aW91cy5jbGFzc0xpc3QuYWRkKCdib2xvNzAwJyk7XG5cdFx0XHRiTmV4dC5zdHlsZS5tYXJnaW5MZWZ0ID0gJzhweCc7XG5cdFx0XHRiTmV4dC5jbGFzc0xpc3QuYWRkKCdidG4nKTtcblx0XHRcdGJOZXh0LmNsYXNzTGlzdC5hZGQoJ2JnLWJsdWUnKTtcblx0XHRcdGJOZXh0LmNsYXNzTGlzdC5hZGQoJ2JvbG83MDAnKTtcblx0XHRcdGNvbnRhaW5lci5zdHlsZS50ZXh0QWxpZ24gPSBcInJpZ2h0XCI7XG5cdFx0XHRjb250YWluZXIuc3R5bGUubWFyZ2luQm90dG9tID0gJzIwcHgnO1xuXG5cdFx0XHRjb250YWluZXIuYXBwZW5kQ2hpbGQoYlByZXZpb3VzKTtcblx0XHRcdGNvbnRhaW5lci5hcHBlbmRDaGlsZChvZik7XG5cdFx0XHRjb250YWluZXIuYXBwZW5kQ2hpbGQoYk5leHQpO1xuXG5cdFx0XHQkKHRoaXMpLmFmdGVyKGNvbnRhaW5lcik7XG5cblx0XHRcdHVwZGF0ZSgpO1xuXG5cdFx0XHQkKGJOZXh0KS5jbGljayhmdW5jdGlvbigpIHtcblx0XHRcdFx0aWYgKHNldHRpbmdzLmN1cnJlbnRQYWdlICsgMSA+IHBhZ2VzKSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UgPSBwYWdlcztcblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRzZXR0aW5ncy5jdXJyZW50UGFnZSsrO1xuXHRcdFx0XHR9XG5cdFx0XHRcdHVwZGF0ZSgpO1xuXHRcdFx0fSk7XG5cblx0XHRcdCQoYlByZXZpb3VzKS5jbGljayhmdW5jdGlvbigpIHtcblx0XHRcdFx0aWYgKHNldHRpbmdzLmN1cnJlbnRQYWdlIC0gMSA8IDEpIHtcblx0XHRcdFx0XHRzZXR0aW5ncy5jdXJyZW50UGFnZSA9IDE7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UtLTtcblx0XHRcdFx0fVxuXHRcdFx0XHR1cGRhdGUoKTtcblx0XHRcdH0pO1xuXG5cdFx0XHRmdW5jdGlvbiB1cGRhdGUoKSB7XG5cdFx0XHRcdGNvbnN0IGZyb20gPSAoKHNldHRpbmdzLmN1cnJlbnRQYWdlIC0gMSkgKiBzZXR0aW5ncy5wZXJQYWdlKSArIDE7XG5cdFx0XHRcdGxldCB0byA9IGZyb20gKyBzZXR0aW5ncy5wZXJQYWdlIC0gMTtcblxuXHRcdFx0XHRpZiAodG8gPiAkcm93cy5sZW5ndGgpIHtcblx0XHRcdFx0XHR0byA9ICRyb3dzLmxlbmd0aDtcblx0XHRcdFx0fVxuXG5cdFx0XHRcdCRyb3dzLmhpZGUoKTtcblx0XHRcdFx0JHJvd3Muc2xpY2UoKGZyb20tMSksIHRvKS5zaG93KCk7XG5cblx0XHRcdFx0b2YuaW5uZXJIVE1MID0gZnJvbSArICcgw6AgJyArIHRvICsgJyBzdXIgJyArICRyb3dzLmxlbmd0aCArICcgbGlnbmVzJztcblxuXHRcdFx0XHRpZiAoJHJvd3MubGVuZ3RoIDw9IHNldHRpbmdzLnBlclBhZ2UpIHtcblx0XHRcdFx0XHQkKGNvbnRhaW5lcikuaGlkZSgpO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdCQoY29udGFpbmVyKS5zaG93KCk7XG5cdFx0XHRcdH1cblx0XHRcdH1cblx0XHR9KTtcblxuXHR9XG5cbn0oalF1ZXJ5KSk7XG4iLCIndXNlIHN0cmljdCc7XG52YXIgJCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9leHBvcnQnKTtcbnZhciBjYWxsID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Z1bmN0aW9uLWNhbGwnKTtcbnZhciB1bmN1cnJ5VGhpcyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi11bmN1cnJ5LXRoaXMnKTtcbnZhciByZXF1aXJlT2JqZWN0Q29lcmNpYmxlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3JlcXVpcmUtb2JqZWN0LWNvZXJjaWJsZScpO1xudmFyIGlzQ2FsbGFibGUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtY2FsbGFibGUnKTtcbnZhciBpc051bGxPclVuZGVmaW5lZCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1udWxsLW9yLXVuZGVmaW5lZCcpO1xudmFyIGlzUmVnRXhwID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLXJlZ2V4cCcpO1xudmFyIHRvU3RyaW5nID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3RvLXN0cmluZycpO1xudmFyIGdldE1ldGhvZCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9nZXQtbWV0aG9kJyk7XG52YXIgZ2V0UmVnRXhwRmxhZ3MgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvcmVnZXhwLWdldC1mbGFncycpO1xudmFyIGdldFN1YnN0aXR1dGlvbiA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9nZXQtc3Vic3RpdHV0aW9uJyk7XG52YXIgd2VsbEtub3duU3ltYm9sID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3dlbGwta25vd24tc3ltYm9sJyk7XG52YXIgSVNfUFVSRSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1wdXJlJyk7XG5cbnZhciBSRVBMQUNFID0gd2VsbEtub3duU3ltYm9sKCdyZXBsYWNlJyk7XG52YXIgJFR5cGVFcnJvciA9IFR5cGVFcnJvcjtcbnZhciBpbmRleE9mID0gdW5jdXJyeVRoaXMoJycuaW5kZXhPZik7XG52YXIgcmVwbGFjZSA9IHVuY3VycnlUaGlzKCcnLnJlcGxhY2UpO1xudmFyIHN0cmluZ1NsaWNlID0gdW5jdXJyeVRoaXMoJycuc2xpY2UpO1xudmFyIG1heCA9IE1hdGgubWF4O1xuXG52YXIgc3RyaW5nSW5kZXhPZiA9IGZ1bmN0aW9uIChzdHJpbmcsIHNlYXJjaFZhbHVlLCBmcm9tSW5kZXgpIHtcbiAgaWYgKGZyb21JbmRleCA+IHN0cmluZy5sZW5ndGgpIHJldHVybiAtMTtcbiAgaWYgKHNlYXJjaFZhbHVlID09PSAnJykgcmV0dXJuIGZyb21JbmRleDtcbiAgcmV0dXJuIGluZGV4T2Yoc3RyaW5nLCBzZWFyY2hWYWx1ZSwgZnJvbUluZGV4KTtcbn07XG5cbi8vIGBTdHJpbmcucHJvdG90eXBlLnJlcGxhY2VBbGxgIG1ldGhvZFxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1zdHJpbmcucHJvdG90eXBlLnJlcGxhY2VhbGxcbiQoeyB0YXJnZXQ6ICdTdHJpbmcnLCBwcm90bzogdHJ1ZSB9LCB7XG4gIHJlcGxhY2VBbGw6IGZ1bmN0aW9uIHJlcGxhY2VBbGwoc2VhcmNoVmFsdWUsIHJlcGxhY2VWYWx1ZSkge1xuICAgIHZhciBPID0gcmVxdWlyZU9iamVjdENvZXJjaWJsZSh0aGlzKTtcbiAgICB2YXIgSVNfUkVHX0VYUCwgZmxhZ3MsIHJlcGxhY2VyLCBzdHJpbmcsIHNlYXJjaFN0cmluZywgZnVuY3Rpb25hbFJlcGxhY2UsIHNlYXJjaExlbmd0aCwgYWR2YW5jZUJ5LCByZXBsYWNlbWVudDtcbiAgICB2YXIgcG9zaXRpb24gPSAwO1xuICAgIHZhciBlbmRPZkxhc3RNYXRjaCA9IDA7XG4gICAgdmFyIHJlc3VsdCA9ICcnO1xuICAgIGlmICghaXNOdWxsT3JVbmRlZmluZWQoc2VhcmNoVmFsdWUpKSB7XG4gICAgICBJU19SRUdfRVhQID0gaXNSZWdFeHAoc2VhcmNoVmFsdWUpO1xuICAgICAgaWYgKElTX1JFR19FWFApIHtcbiAgICAgICAgZmxhZ3MgPSB0b1N0cmluZyhyZXF1aXJlT2JqZWN0Q29lcmNpYmxlKGdldFJlZ0V4cEZsYWdzKHNlYXJjaFZhbHVlKSkpO1xuICAgICAgICBpZiAoIX5pbmRleE9mKGZsYWdzLCAnZycpKSB0aHJvdyAkVHlwZUVycm9yKCdgLnJlcGxhY2VBbGxgIGRvZXMgbm90IGFsbG93IG5vbi1nbG9iYWwgcmVnZXhlcycpO1xuICAgICAgfVxuICAgICAgcmVwbGFjZXIgPSBnZXRNZXRob2Qoc2VhcmNoVmFsdWUsIFJFUExBQ0UpO1xuICAgICAgaWYgKHJlcGxhY2VyKSB7XG4gICAgICAgIHJldHVybiBjYWxsKHJlcGxhY2VyLCBzZWFyY2hWYWx1ZSwgTywgcmVwbGFjZVZhbHVlKTtcbiAgICAgIH0gZWxzZSBpZiAoSVNfUFVSRSAmJiBJU19SRUdfRVhQKSB7XG4gICAgICAgIHJldHVybiByZXBsYWNlKHRvU3RyaW5nKE8pLCBzZWFyY2hWYWx1ZSwgcmVwbGFjZVZhbHVlKTtcbiAgICAgIH1cbiAgICB9XG4gICAgc3RyaW5nID0gdG9TdHJpbmcoTyk7XG4gICAgc2VhcmNoU3RyaW5nID0gdG9TdHJpbmcoc2VhcmNoVmFsdWUpO1xuICAgIGZ1bmN0aW9uYWxSZXBsYWNlID0gaXNDYWxsYWJsZShyZXBsYWNlVmFsdWUpO1xuICAgIGlmICghZnVuY3Rpb25hbFJlcGxhY2UpIHJlcGxhY2VWYWx1ZSA9IHRvU3RyaW5nKHJlcGxhY2VWYWx1ZSk7XG4gICAgc2VhcmNoTGVuZ3RoID0gc2VhcmNoU3RyaW5nLmxlbmd0aDtcbiAgICBhZHZhbmNlQnkgPSBtYXgoMSwgc2VhcmNoTGVuZ3RoKTtcbiAgICBwb3NpdGlvbiA9IHN0cmluZ0luZGV4T2Yoc3RyaW5nLCBzZWFyY2hTdHJpbmcsIDApO1xuICAgIHdoaWxlIChwb3NpdGlvbiAhPT0gLTEpIHtcbiAgICAgIHJlcGxhY2VtZW50ID0gZnVuY3Rpb25hbFJlcGxhY2VcbiAgICAgICAgPyB0b1N0cmluZyhyZXBsYWNlVmFsdWUoc2VhcmNoU3RyaW5nLCBwb3NpdGlvbiwgc3RyaW5nKSlcbiAgICAgICAgOiBnZXRTdWJzdGl0dXRpb24oc2VhcmNoU3RyaW5nLCBzdHJpbmcsIHBvc2l0aW9uLCBbXSwgdW5kZWZpbmVkLCByZXBsYWNlVmFsdWUpO1xuICAgICAgcmVzdWx0ICs9IHN0cmluZ1NsaWNlKHN0cmluZywgZW5kT2ZMYXN0TWF0Y2gsIHBvc2l0aW9uKSArIHJlcGxhY2VtZW50O1xuICAgICAgZW5kT2ZMYXN0TWF0Y2ggPSBwb3NpdGlvbiArIHNlYXJjaExlbmd0aDtcbiAgICAgIHBvc2l0aW9uID0gc3RyaW5nSW5kZXhPZihzdHJpbmcsIHNlYXJjaFN0cmluZywgcG9zaXRpb24gKyBhZHZhbmNlQnkpO1xuICAgIH1cbiAgICBpZiAoZW5kT2ZMYXN0TWF0Y2ggPCBzdHJpbmcubGVuZ3RoKSB7XG4gICAgICByZXN1bHQgKz0gc3RyaW5nU2xpY2Uoc3RyaW5nLCBlbmRPZkxhc3RNYXRjaCk7XG4gICAgfVxuICAgIHJldHVybiByZXN1bHQ7XG4gIH1cbn0pO1xuIiwiLy8gVE9ETzogUmVtb3ZlIGZyb20gYGNvcmUtanNANGBcbnJlcXVpcmUoJy4uL21vZHVsZXMvZXMuc3RyaW5nLnJlcGxhY2UtYWxsJyk7XG4iLCJ2YXIgbWFwID0ge1xuXHRcIi4vYWZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FmLmpzXCIsXG5cdFwiLi9hZi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYWYuanNcIixcblx0XCIuL2FyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci5qc1wiLFxuXHRcIi4vYXItZHpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWR6LmpzXCIsXG5cdFwiLi9hci1kei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItZHouanNcIixcblx0XCIuL2FyLWt3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1rdy5qc1wiLFxuXHRcIi4vYXIta3cuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWt3LmpzXCIsXG5cdFwiLi9hci1seVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbHkuanNcIixcblx0XCIuL2FyLWx5LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1seS5qc1wiLFxuXHRcIi4vYXItbWFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLW1hLmpzXCIsXG5cdFwiLi9hci1tYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbWEuanNcIixcblx0XCIuL2FyLXBzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1wcy5qc1wiLFxuXHRcIi4vYXItcHMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXBzLmpzXCIsXG5cdFwiLi9hci1zYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItc2EuanNcIixcblx0XCIuL2FyLXNhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1zYS5qc1wiLFxuXHRcIi4vYXItdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXRuLmpzXCIsXG5cdFwiLi9hci10bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItdG4uanNcIixcblx0XCIuL2FyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci5qc1wiLFxuXHRcIi4vYXpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2F6LmpzXCIsXG5cdFwiLi9hei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXouanNcIixcblx0XCIuL2JlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZS5qc1wiLFxuXHRcIi4vYmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JlLmpzXCIsXG5cdFwiLi9iZ1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmcuanNcIixcblx0XCIuL2JnLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZy5qc1wiLFxuXHRcIi4vYm1cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JtLmpzXCIsXG5cdFwiLi9ibS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm0uanNcIixcblx0XCIuL2JuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi5qc1wiLFxuXHRcIi4vYm4tYmRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLWJkLmpzXCIsXG5cdFwiLi9ibi1iZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4tYmQuanNcIixcblx0XCIuL2JuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi5qc1wiLFxuXHRcIi4vYm9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JvLmpzXCIsXG5cdFwiLi9iby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm8uanNcIixcblx0XCIuL2JyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ici5qc1wiLFxuXHRcIi4vYnIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JyLmpzXCIsXG5cdFwiLi9ic1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnMuanNcIixcblx0XCIuL2JzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9icy5qc1wiLFxuXHRcIi4vY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NhLmpzXCIsXG5cdFwiLi9jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY2EuanNcIixcblx0XCIuL2NzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jcy5qc1wiLFxuXHRcIi4vY3MuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NzLmpzXCIsXG5cdFwiLi9jdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3YuanNcIixcblx0XCIuL2N2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jdi5qc1wiLFxuXHRcIi4vY3lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N5LmpzXCIsXG5cdFwiLi9jeS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3kuanNcIixcblx0XCIuL2RhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kYS5qc1wiLFxuXHRcIi4vZGEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RhLmpzXCIsXG5cdFwiLi9kZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUuanNcIixcblx0XCIuL2RlLWF0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1hdC5qc1wiLFxuXHRcIi4vZGUtYXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWF0LmpzXCIsXG5cdFwiLi9kZS1jaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtY2guanNcIixcblx0XCIuL2RlLWNoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1jaC5qc1wiLFxuXHRcIi4vZGUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLmpzXCIsXG5cdFwiLi9kdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZHYuanNcIixcblx0XCIuL2R2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kdi5qc1wiLFxuXHRcIi4vZWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VsLmpzXCIsXG5cdFwiLi9lbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZWwuanNcIixcblx0XCIuL2VuLWF1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1hdS5qc1wiLFxuXHRcIi4vZW4tYXUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWF1LmpzXCIsXG5cdFwiLi9lbi1jYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tY2EuanNcIixcblx0XCIuL2VuLWNhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1jYS5qc1wiLFxuXHRcIi4vZW4tZ2JcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWdiLmpzXCIsXG5cdFwiLi9lbi1nYi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tZ2IuanNcIixcblx0XCIuL2VuLWllXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pZS5qc1wiLFxuXHRcIi4vZW4taWUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWllLmpzXCIsXG5cdFwiLi9lbi1pbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWwuanNcIixcblx0XCIuL2VuLWlsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbC5qc1wiLFxuXHRcIi4vZW4taW5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWluLmpzXCIsXG5cdFwiLi9lbi1pbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taW4uanNcIixcblx0XCIuL2VuLW56XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1uei5qc1wiLFxuXHRcIi4vZW4tbnouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLW56LmpzXCIsXG5cdFwiLi9lbi1zZ1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tc2cuanNcIixcblx0XCIuL2VuLXNnLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1zZy5qc1wiLFxuXHRcIi4vZW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VvLmpzXCIsXG5cdFwiLi9lby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW8uanNcIixcblx0XCIuL2VzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy5qc1wiLFxuXHRcIi4vZXMtZG9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLWRvLmpzXCIsXG5cdFwiLi9lcy1kby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtZG8uanNcIixcblx0XCIuL2VzLW14XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1teC5qc1wiLFxuXHRcIi4vZXMtbXguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLW14LmpzXCIsXG5cdFwiLi9lcy11c1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtdXMuanNcIixcblx0XCIuL2VzLXVzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy11cy5qc1wiLFxuXHRcIi4vZXMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLmpzXCIsXG5cdFwiLi9ldFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXQuanNcIixcblx0XCIuL2V0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldC5qc1wiLFxuXHRcIi4vZXVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V1LmpzXCIsXG5cdFwiLi9ldS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXUuanNcIixcblx0XCIuL2ZhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mYS5qc1wiLFxuXHRcIi4vZmEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZhLmpzXCIsXG5cdFwiLi9maVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmkuanNcIixcblx0XCIuL2ZpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9maS5qc1wiLFxuXHRcIi4vZmlsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9maWwuanNcIixcblx0XCIuL2ZpbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmlsLmpzXCIsXG5cdFwiLi9mb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZm8uanNcIixcblx0XCIuL2ZvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mby5qc1wiLFxuXHRcIi4vZnJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLmpzXCIsXG5cdFwiLi9mci1jYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2EuanNcIixcblx0XCIuL2ZyLWNhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jYS5qc1wiLFxuXHRcIi4vZnItY2hcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNoLmpzXCIsXG5cdFwiLi9mci1jaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2guanNcIixcblx0XCIuL2ZyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci5qc1wiLFxuXHRcIi4vZnlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2Z5LmpzXCIsXG5cdFwiLi9meS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnkuanNcIixcblx0XCIuL2dhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nYS5qc1wiLFxuXHRcIi4vZ2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dhLmpzXCIsXG5cdFwiLi9nZFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2QuanNcIixcblx0XCIuL2dkLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nZC5qc1wiLFxuXHRcIi4vZ2xcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dsLmpzXCIsXG5cdFwiLi9nbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2wuanNcIixcblx0XCIuL2dvbS1kZXZhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tZGV2YS5qc1wiLFxuXHRcIi4vZ29tLWRldmEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1kZXZhLmpzXCIsXG5cdFwiLi9nb20tbGF0blwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWxhdG4uanNcIixcblx0XCIuL2dvbS1sYXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tbGF0bi5qc1wiLFxuXHRcIi4vZ3VcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2d1LmpzXCIsXG5cdFwiLi9ndS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ3UuanNcIixcblx0XCIuL2hlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oZS5qc1wiLFxuXHRcIi4vaGUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hlLmpzXCIsXG5cdFwiLi9oaVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGkuanNcIixcblx0XCIuL2hpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oaS5qc1wiLFxuXHRcIi4vaHJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hyLmpzXCIsXG5cdFwiLi9oci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHIuanNcIixcblx0XCIuL2h1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9odS5qc1wiLFxuXHRcIi4vaHUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h1LmpzXCIsXG5cdFwiLi9oeS1hbVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHktYW0uanNcIixcblx0XCIuL2h5LWFtLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oeS1hbS5qc1wiLFxuXHRcIi4vaWRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lkLmpzXCIsXG5cdFwiLi9pZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaWQuanNcIixcblx0XCIuL2lzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pcy5qc1wiLFxuXHRcIi4vaXMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lzLmpzXCIsXG5cdFwiLi9pdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQuanNcIixcblx0XCIuL2l0LWNoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC1jaC5qc1wiLFxuXHRcIi4vaXQtY2guanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LWNoLmpzXCIsXG5cdFwiLi9pdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQuanNcIixcblx0XCIuL2phXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qYS5qc1wiLFxuXHRcIi4vamEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2phLmpzXCIsXG5cdFwiLi9qdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvanYuanNcIixcblx0XCIuL2p2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qdi5qc1wiLFxuXHRcIi4va2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2thLmpzXCIsXG5cdFwiLi9rYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2EuanNcIixcblx0XCIuL2trXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ray5qc1wiLFxuXHRcIi4va2suanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2trLmpzXCIsXG5cdFwiLi9rbVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva20uanNcIixcblx0XCIuL2ttLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbS5qc1wiLFxuXHRcIi4va25cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tuLmpzXCIsXG5cdFwiLi9rbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva24uanNcIixcblx0XCIuL2tvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rby5qc1wiLFxuXHRcIi4va28uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tvLmpzXCIsXG5cdFwiLi9rdVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3UuanNcIixcblx0XCIuL2t1LWttclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3Uta21yLmpzXCIsXG5cdFwiLi9rdS1rbXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LWttci5qc1wiLFxuXHRcIi4va3UuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LmpzXCIsXG5cdFwiLi9reVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3kuanNcIixcblx0XCIuL2t5LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9reS5qc1wiLFxuXHRcIi4vbGJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xiLmpzXCIsXG5cdFwiLi9sYi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbGIuanNcIixcblx0XCIuL2xvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sby5qc1wiLFxuXHRcIi4vbG8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xvLmpzXCIsXG5cdFwiLi9sdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHQuanNcIixcblx0XCIuL2x0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdC5qc1wiLFxuXHRcIi4vbHZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x2LmpzXCIsXG5cdFwiLi9sdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHYuanNcIixcblx0XCIuL21lXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tZS5qc1wiLFxuXHRcIi4vbWUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21lLmpzXCIsXG5cdFwiLi9taVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWkuanNcIixcblx0XCIuL21pLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9taS5qc1wiLFxuXHRcIi4vbWtcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21rLmpzXCIsXG5cdFwiLi9tay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWsuanNcIixcblx0XCIuL21sXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbC5qc1wiLFxuXHRcIi4vbWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21sLmpzXCIsXG5cdFwiLi9tblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbW4uanNcIixcblx0XCIuL21uLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbi5qc1wiLFxuXHRcIi4vbXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21yLmpzXCIsXG5cdFwiLi9tci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXIuanNcIixcblx0XCIuL21zXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy5qc1wiLFxuXHRcIi4vbXMtbXlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLW15LmpzXCIsXG5cdFwiLi9tcy1teS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMtbXkuanNcIixcblx0XCIuL21zLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy5qc1wiLFxuXHRcIi4vbXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL210LmpzXCIsXG5cdFwiLi9tdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXQuanNcIixcblx0XCIuL215XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9teS5qc1wiLFxuXHRcIi4vbXkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL215LmpzXCIsXG5cdFwiLi9uYlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmIuanNcIixcblx0XCIuL25iLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uYi5qc1wiLFxuXHRcIi4vbmVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25lLmpzXCIsXG5cdFwiLi9uZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmUuanNcIixcblx0XCIuL25sXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC5qc1wiLFxuXHRcIi4vbmwtYmVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLWJlLmpzXCIsXG5cdFwiLi9ubC1iZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwtYmUuanNcIixcblx0XCIuL25sLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC5qc1wiLFxuXHRcIi4vbm5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25uLmpzXCIsXG5cdFwiLi9ubi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbm4uanNcIixcblx0XCIuL29jLWxuY1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvb2MtbG5jLmpzXCIsXG5cdFwiLi9vYy1sbmMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL29jLWxuYy5qc1wiLFxuXHRcIi4vcGEtaW5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BhLWluLmpzXCIsXG5cdFwiLi9wYS1pbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGEtaW4uanNcIixcblx0XCIuL3BsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wbC5qc1wiLFxuXHRcIi4vcGwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BsLmpzXCIsXG5cdFwiLi9wdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQuanNcIixcblx0XCIuL3B0LWJyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC1ici5qc1wiLFxuXHRcIi4vcHQtYnIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LWJyLmpzXCIsXG5cdFwiLi9wdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQuanNcIixcblx0XCIuL3JvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9yby5qc1wiLFxuXHRcIi4vcm8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3JvLmpzXCIsXG5cdFwiLi9ydVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcnUuanNcIixcblx0XCIuL3J1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ydS5qc1wiLFxuXHRcIi4vc2RcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NkLmpzXCIsXG5cdFwiLi9zZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2QuanNcIixcblx0XCIuL3NlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZS5qc1wiLFxuXHRcIi4vc2UuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NlLmpzXCIsXG5cdFwiLi9zaVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2kuanNcIixcblx0XCIuL3NpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zaS5qc1wiLFxuXHRcIi4vc2tcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NrLmpzXCIsXG5cdFwiLi9zay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2suanNcIixcblx0XCIuL3NsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zbC5qc1wiLFxuXHRcIi4vc2wuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NsLmpzXCIsXG5cdFwiLi9zcVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3EuanNcIixcblx0XCIuL3NxLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcS5qc1wiLFxuXHRcIi4vc3JcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLmpzXCIsXG5cdFwiLi9zci1jeXJsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci1jeXJsLmpzXCIsXG5cdFwiLi9zci1jeXJsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci1jeXJsLmpzXCIsXG5cdFwiLi9zci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3IuanNcIixcblx0XCIuL3NzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcy5qc1wiLFxuXHRcIi4vc3MuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NzLmpzXCIsXG5cdFwiLi9zdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3YuanNcIixcblx0XCIuL3N2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdi5qc1wiLFxuXHRcIi4vc3dcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N3LmpzXCIsXG5cdFwiLi9zdy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3cuanNcIixcblx0XCIuL3RhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90YS5qc1wiLFxuXHRcIi4vdGEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RhLmpzXCIsXG5cdFwiLi90ZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGUuanNcIixcblx0XCIuL3RlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ZS5qc1wiLFxuXHRcIi4vdGV0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ZXQuanNcIixcblx0XCIuL3RldC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGV0LmpzXCIsXG5cdFwiLi90Z1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGcuanNcIixcblx0XCIuL3RnLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90Zy5qc1wiLFxuXHRcIi4vdGhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RoLmpzXCIsXG5cdFwiLi90aC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGguanNcIixcblx0XCIuL3RrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ay5qc1wiLFxuXHRcIi4vdGsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RrLmpzXCIsXG5cdFwiLi90bC1waFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGwtcGguanNcIixcblx0XCIuL3RsLXBoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90bC1waC5qc1wiLFxuXHRcIi4vdGxoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90bGguanNcIixcblx0XCIuL3RsaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGxoLmpzXCIsXG5cdFwiLi90clwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHIuanNcIixcblx0XCIuL3RyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ci5qc1wiLFxuXHRcIi4vdHpsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90emwuanNcIixcblx0XCIuL3R6bC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHpsLmpzXCIsXG5cdFwiLi90em1cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS5qc1wiLFxuXHRcIi4vdHptLWxhdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS1sYXRuLmpzXCIsXG5cdFwiLi90em0tbGF0bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHptLWxhdG4uanNcIixcblx0XCIuL3R6bS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHptLmpzXCIsXG5cdFwiLi91Zy1jblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWctY24uanNcIixcblx0XCIuL3VnLWNuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91Zy1jbi5qc1wiLFxuXHRcIi4vdWtcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VrLmpzXCIsXG5cdFwiLi91ay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWsuanNcIixcblx0XCIuL3VyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ci5qc1wiLFxuXHRcIi4vdXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VyLmpzXCIsXG5cdFwiLi91elwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXouanNcIixcblx0XCIuL3V6LWxhdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LWxhdG4uanNcIixcblx0XCIuL3V6LWxhdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LWxhdG4uanNcIixcblx0XCIuL3V6LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei5qc1wiLFxuXHRcIi4vdmlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3ZpLmpzXCIsXG5cdFwiLi92aS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdmkuanNcIixcblx0XCIuL3gtcHNldWRvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS94LXBzZXVkby5qc1wiLFxuXHRcIi4veC1wc2V1ZG8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3gtcHNldWRvLmpzXCIsXG5cdFwiLi95b1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveW8uanNcIixcblx0XCIuL3lvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS95by5qc1wiLFxuXHRcIi4vemgtY25cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWNuLmpzXCIsXG5cdFwiLi96aC1jbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtY24uanNcIixcblx0XCIuL3poLWhrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1oay5qc1wiLFxuXHRcIi4vemgtaGsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWhrLmpzXCIsXG5cdFwiLi96aC1tb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtbW8uanNcIixcblx0XCIuL3poLW1vLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1tby5qc1wiLFxuXHRcIi4vemgtdHdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLXR3LmpzXCIsXG5cdFwiLi96aC10dy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtdHcuanNcIlxufTtcblxuXG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dChyZXEpIHtcblx0dmFyIGlkID0gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSk7XG5cdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKGlkKTtcbn1cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpIHtcblx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhtYXAsIHJlcSkpIHtcblx0XHR2YXIgZSA9IG5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIgKyByZXEgKyBcIidcIik7XG5cdFx0ZS5jb2RlID0gJ01PRFVMRV9OT1RfRk9VTkQnO1xuXHRcdHRocm93IGU7XG5cdH1cblx0cmV0dXJuIG1hcFtyZXFdO1xufVxud2VicGFja0NvbnRleHQua2V5cyA9IGZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0S2V5cygpIHtcblx0cmV0dXJuIE9iamVjdC5rZXlzKG1hcCk7XG59O1xud2VicGFja0NvbnRleHQucmVzb2x2ZSA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZTtcbm1vZHVsZS5leHBvcnRzID0gd2VicGFja0NvbnRleHQ7XG53ZWJwYWNrQ29udGV4dC5pZCA9IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZSBzeW5jIHJlY3Vyc2l2ZSBeXFxcXC5cXFxcLy4qJFwiOyJdLCJuYW1lcyI6WyJSZWFjdCIsInVzZUVmZmVjdCIsInVzZVN0YXRlIiwiY3JlYXRlUm9vdCIsImF4aW9zIiwiUmVhY3RIVE1MVGFibGVUb0V4Y2VsIiwiTnVtYmVyRm9ybWF0IiwiTW9tZW50IiwiJCIsIkNoYXJnZXNJbnRlcm5lcyIsInBlcnNvcyIsInNldFBlcnNvcyIsImNhaXNzaW4iLCJzZXRDYWlzc2luIiwiZmV0Y2hQZXJzb3MiLCJkZWRlIiwiSlNPTiIsInBhcnNlIiwidmFsIiwiZmV0Y2hDYWlzc2VJbnRlcm5lIiwibW9kYWwiLCJkZWxldGVDYWlzc2UiLCJpZCIsIm1ldGhvZCIsInVybCIsImNvbnRlbnRUeXBlIiwiZGF0YVR5cGUiLCJ0aGVuIiwicmVzcG9uc2UiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsInJlbG9hZCIsImVycm9yIiwidmFsaWRlQ2Fpc3NlIiwiZGV2YWxpZGVDYWlzc2UiLCJjaGFyY291bnQiLCJmcmludGVybmUiLCJyZW5kZXJJbnRlcm5lIiwibWFwIiwicGVyc28iLCJjYWlzc2VzIiwiY2NsZW4iLCJmcmVpbnRlcm5lIiwidHlwZSIsInJlbmRlckNhaXMiLCJjYWlzc2UiLCJjb3JiZWlsbGUiLCJjaGFudGllciIsIm9waXIiLCJldGF0Iiwib3BlcmF0aW9uIiwibW9udGFudCIsImRhdGUiLCJtYXJnaW5SaWdodCIsInNoYXNoYSIsIm51bWNhaXNzZSIsIl9faHRtbCIsImNhaXNzZXJlZmVyZW5jZSIsInNob3dCb25DaGFyZ2UiLCJub21zIiwiZG9ieXVzZXIiLCJub20iLCJ0b1VwcGVyQ2FzZSIsInByZW5vbXMiLCJiaW5jb3VudCIsImZybnZpbnRlcm5lIiwicmVuZGVyQ2Fpc3NlSW50ZXJuZU5vblZhbGlkZXMiLCJjYWlzcyIsInBlcnNvbm5lbCIsImJpdmNvdW50IiwiZnJ2aW50ZXJuZSIsInJlbmRlckNhaXNzZUludGVybmVWYWxpZGVzIiwicmljb3VudCIsInNvcmVpbnRlcm5lZGViaXQiLCJzb3JlaW50ZXJuZWNyZWRpdCIsInJlbmRlclJlbGVJbnRlcm5lIiwiaGFuZGxlSW50ZXJuZSIsImV2ZW50IiwiZmlsdGVyIiwidGFyZ2V0IiwidmFsdWUiLCJ0b0xvd2VyQ2FzZSIsInRvZ2dsZSIsInRleHQiLCJyZXBsYWNlQWxsIiwiaW5kZXhPZiIsImhhbmRsZUJvbkludGVybmVOb25WYWxpZGVzIiwiaGFuZGxlQm9uSW50ZXJuZVZhbGlkZXMiLCJoYW5kbGVSZWxlSW50ZXJuZSIsImhhc0NsYXNzIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsIm9mZiIsIm9uIiwiZWFjaCIsImhyZWYiLCJwcmV2ZW50RGVmYXVsdCIsImNsb3Nlc3QiLCJ2YWxpZCIsImhpZGUiLCJjc3MiLCJhamF4IiwiZGF0YSIsInN0cmluZ2lmeSIsInNlcmlhbGl6ZU9iamVjdCIsInN1Y2Nlc3MiLCJyZXNwZGF0YSIsInRleHRTdGF0dXMiLCJqcVhIUiIsInhociIsInJlc3AiLCJDS0VESVRPUiIsImluc3RhbmNlcyIsImdldERhdGEiLCJzdGF0dXMiLCJzZWxlY3QyIiwic2ltcGxlUGFnaW5hdGlvbiIsInBhZGRpbmdMZWZ0IiwibWFyZ2luVG9wIiwiYm9yZGVyIiwiZm9udFNpemUiLCJvdmVyZmxvdyIsInBhZGRpbmdUb3AiLCJ3aWR0aCIsIm1hcmdpbkJvdHRvbSIsImJvcmRlckJvdHRvbSIsIndoaXRlU3BhY2UiLCJjb2xvciIsIm92ZXJmbG93WCIsInRleHREZWNvcmF0aW9uIiwicm9vdCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJyZW5kZXIiLCJlIiwicHJvcHMiLCJmb3JtYXROdW1iZXIiLCJudW0iLCJwcmVjaXNpb24iLCJzZXBhcmF0b3IiLCJwYXJ0cyIsIk51bWJlciIsInRvRml4ZWQiLCJ0b1N0cmluZyIsInNwbGl0IiwicmVwbGFjZSIsImpvaW4iLCJudW1iIiwiZm4iLCJvcHRpb25zIiwiZGVmYXVsdHMiLCJwZXJQYWdlIiwiY29udGFpbmVyQ2xhc3MiLCJwcmV2aW91c0J1dHRvbkNsYXNzIiwibmV4dEJ1dHRvbkNsYXNzIiwicHJldmlvdXNCdXR0b25UZXh0IiwibmV4dEJ1dHRvblRleHQiLCJjdXJyZW50UGFnZSIsInNldHRpbmdzIiwiZXh0ZW5kIiwiJHJvd3MiLCJwYWdlcyIsIk1hdGgiLCJjZWlsIiwibGVuZ3RoIiwiY29udGFpbmVyIiwiY3JlYXRlRWxlbWVudCIsImJQcmV2aW91cyIsImJOZXh0Iiwib2YiLCJpbm5lckhUTUwiLCJjbGFzc05hbWUiLCJzdHlsZSIsImNsYXNzTGlzdCIsImFkZCIsIm1hcmdpbkxlZnQiLCJ0ZXh0QWxpZ24iLCJhcHBlbmRDaGlsZCIsImFmdGVyIiwidXBkYXRlIiwiY2xpY2siLCJmcm9tIiwidG8iLCJzbGljZSIsInNob3ciLCJqUXVlcnkiXSwic291cmNlUm9vdCI6IiJ9